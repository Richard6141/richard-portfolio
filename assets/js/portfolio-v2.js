/* ============================================================
   portfolio-v2.js · Script unique du site public (vague 0B, 03/10/2026).
   En-tête solide au défilement, méga-menus, tiroir mobile, apparitions
   au défilement, compteurs, sommaire, mots tournants, recherche du blog,
   parallaxe. Rien n'est caché sans JavaScript : les classes qui masquent
   ne sont posées que par ce script, et tout est neutralisé sous
   prefers-reduced-motion.
   ============================================================ */
(function () {
  'use strict';
  var doc = document;
  var reduit = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var pointeurFin = window.matchMedia('(hover: hover) and (pointer: fine) and (min-width: 64rem)');

  /* ---------- En-tête solide au défilement (repli de animation-timeline) ---------- */
  var entete = doc.getElementById('entete');
  if (entete) {
    var surDefilement = function () { entete.classList.toggle('is-solid', window.scrollY > 10); };
    requestAnimationFrame(surDefilement);
    window.addEventListener('scroll', surDefilement, { passive: true });
  }

  /* ---------- Méga-menus ---------- */
  var declencheurs = Array.prototype.slice.call(doc.querySelectorAll('.nav-trigger'));
  var minuterie = null;
  var panneauDe = function (btn) { return doc.getElementById(btn.getAttribute('aria-controls')); };
  var fermer = function (btn, rendreFocus) {
    var p = panneauDe(btn);
    if (!p || btn.getAttribute('aria-expanded') !== 'true') return;
    btn.setAttribute('aria-expanded', 'false');
    btn.removeAttribute('data-epingle');
    p.hidden = true;
    if (entete) entete.classList.remove('has-mega');
    if (rendreFocus) btn.focus();
  };
  var ouvrir = function (btn) {
    declencheurs.forEach(function (autre) { if (autre !== btn) fermer(autre, false); });
    var p = panneauDe(btn);
    if (!p) return;
    btn.setAttribute('aria-expanded', 'true');
    p.hidden = false;
    if (entete) entete.classList.add('has-mega');
  };
  declencheurs.forEach(function (btn) {
    var item = btn.closest('.entete__item');
    btn.addEventListener('click', function () {
      if (btn.getAttribute('aria-expanded') === 'true' && btn.hasAttribute('data-epingle')) { fermer(btn, false); return; }
      ouvrir(btn);
      btn.setAttribute('data-epingle', '');
    });
    if (item) {
      item.addEventListener('mouseenter', function () {
        if (!pointeurFin.matches) return;
        clearTimeout(minuterie);
        minuterie = setTimeout(function () { ouvrir(btn); }, 120);
      });
      item.addEventListener('mouseleave', function () {
        if (!pointeurFin.matches || btn.hasAttribute('data-epingle')) return;
        clearTimeout(minuterie);
        minuterie = setTimeout(function () { fermer(btn, false); }, 180);
      });
      item.addEventListener('focusout', function (e) {
        if (!item.contains(e.relatedTarget)) fermer(btn, false);
      });
    }
  });
  doc.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') return;
    declencheurs.forEach(function (btn) { fermer(btn, btn.getAttribute('aria-expanded') === 'true'); });
    fermerTiroir(true);
  });
  doc.addEventListener('pointerdown', function (e) {
    if (!e.target.closest('.entete__item--mega')) declencheurs.forEach(function (btn) { fermer(btn, false); });
  });

  /* ---------- Tiroir mobile ---------- */
  var burger = doc.querySelector('.entete__burger');
  var tiroir = doc.getElementById('tiroir');
  function fermerTiroir(rendreFocus) {
    if (!burger || !tiroir || tiroir.hidden) return;
    tiroir.hidden = true;
    burger.setAttribute('aria-expanded', 'false');
    doc.documentElement.classList.remove('tiroir-ouvert');
    if (rendreFocus) burger.focus();
  }
  if (burger && tiroir) {
    burger.addEventListener('click', function () {
      if (!tiroir.hidden) { fermerTiroir(false); return; }
      tiroir.hidden = false;
      burger.setAttribute('aria-expanded', 'true');
      doc.documentElement.classList.add('tiroir-ouvert');
      var premier = tiroir.querySelector('summary, a');
      if (premier) premier.focus();
    });
    tiroir.addEventListener('keydown', function (e) {
      if (e.key !== 'Tab') return;
      var cibles = Array.prototype.filter.call(tiroir.querySelectorAll('summary, a, button'), function (el) { return el.offsetParent !== null; });
      if (!cibles.length) return;
      var premier = cibles[0], dernier = cibles[cibles.length - 1];
      if (e.shiftKey && doc.activeElement === premier) { e.preventDefault(); dernier.focus(); }
      else if (!e.shiftKey && doc.activeElement === dernier) { e.preventDefault(); premier.focus(); }
    });
    tiroir.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', function () { fermerTiroir(false); }); });
  }

  /* ---------- Apparitions au défilement ---------- */
  var anciens = doc.querySelectorAll('.rv, .stg');
  var nouveaux = doc.querySelectorAll('[data-reveal]');
  if (!reduit && 'IntersectionObserver' in window) {
    var ioAncien = new IntersectionObserver(function (entrees) {
      entrees.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('in'); ioAncien.unobserve(e.target); } });
    }, { threshold: 0.12 });
    anciens.forEach(function (el) { ioAncien.observe(el); });

    var ioNouveau = new IntersectionObserver(function (entrees) {
      entrees.forEach(function (e) { e.target.classList.toggle('is-in', e.isIntersecting); });
    }, { rootMargin: '0px 0px -8% 0px' });
    nouveaux.forEach(function (el) {
      if (el.getBoundingClientRect().top < window.innerHeight) el.classList.add('is-in');
      ioNouveau.observe(el);
    });
    doc.documentElement.classList.add('rr');
  } else {
    anciens.forEach(function (el) { el.classList.add('in'); });
  }

  /* ---------- Compteurs : partent de leur valeur affichée, sans flash ---------- */
  if (!reduit && 'IntersectionObserver' in window) {
    var ioCompteur = new IntersectionObserver(function (entrees) {
      entrees.forEach(function (e) {
        if (!e.isIntersecting) return;
        ioCompteur.unobserve(e.target);
        var el = e.target, cible = parseInt(el.dataset.to, 10) || 0, debut = null;
        if (el.getBoundingClientRect().top < window.innerHeight * 0.2) return; // déjà vu : pas de retour à zéro
        var pas = function (t) {
          if (!debut) debut = t;
          var p = Math.min((t - debut) / 1100, 1);
          el.textContent = Math.max(1, Math.floor(p * cible));
          if (p < 1) requestAnimationFrame(pas); else el.textContent = cible;
        };
        requestAnimationFrame(pas);
      });
    }, { threshold: 0.5 });
    doc.querySelectorAll('.ct[data-to]').forEach(function (el) {
      if (el.getBoundingClientRect().top > window.innerHeight) ioCompteur.observe(el);
    });
  }

  /* ---------- Sommaire collant : section courante ---------- */
  var liensSommaire = doc.querySelectorAll('.sommaire a[href^="#"]');
  if (liensSommaire.length && 'IntersectionObserver' in window) {
    var parId = {};
    liensSommaire.forEach(function (a) { parId[a.getAttribute('href').slice(1)] = a; });
    var ioSommaire = new IntersectionObserver(function (entrees) {
      entrees.forEach(function (e) {
        if (!e.isIntersecting || !parId[e.target.id]) return;
        liensSommaire.forEach(function (a) { a.removeAttribute('aria-current'); });
        parId[e.target.id].setAttribute('aria-current', 'location');
      });
    }, { rootMargin: '-96px 0px -55% 0px' });
    Object.keys(parId).forEach(function (id) { var cible = doc.getElementById(id); if (cible) ioSommaire.observe(cible); });
  }

  /* ---------- Mots tournants dans le H1 de l'accueil ---------- */
  var rot = doc.getElementById('pv2-rot');
  if (rot && rot.dataset.words && !reduit) {
    var mots;
    try { mots = JSON.parse(rot.dataset.words); } catch (err) { mots = null; }
    if (mots && mots.length > 1) {
      var i = 0;
      rot.style.transition = 'opacity .25s';
      setInterval(function () {
        i = (i + 1) % mots.length;
        rot.style.opacity = 0;
        setTimeout(function () { rot.textContent = mots[i]; rot.style.opacity = 1; }, 250);
      }, 2600);
    }
  }

  /* ---------- Recherche du blog ---------- */
  var recherche = doc.getElementById('blog-search-input');
  if (recherche) {
    var cartes = Array.prototype.slice.call(doc.querySelectorAll('#blog-grid .bcard'));
    var vide = doc.getElementById('blog-empty');
    recherche.addEventListener('input', function () {
      var q = recherche.value.toLowerCase().trim(), visibles = 0;
      cartes.forEach(function (c) {
        var ok = !q || (c.getAttribute('data-search') || '').indexOf(q) > -1;
        c.style.display = ok ? '' : 'none';
        if (ok) visibles++;
      });
      if (vide) vide.style.display = visibles === 0 ? 'block' : 'none';
    });
  }

  /* ---------- Parallaxe douce ([data-parallax]) ---------- */
  var plans = doc.querySelectorAll('[data-parallax]');
  if (plans.length && !reduit) {
    var enCours = false;
    var appliquer = function () {
      var y = window.scrollY;
      plans.forEach(function (el) { el.style.transform = 'translate3d(0,' + Math.round(y * (parseFloat(el.dataset.parallax) || 0)) + 'px,0)'; });
      enCours = false;
    };
    window.addEventListener('scroll', function () { if (!enCours) { requestAnimationFrame(appliquer); enCours = true; } }, { passive: true });
    appliquer();
  }
})();
