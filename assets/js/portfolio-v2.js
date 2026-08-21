/* ============================================================
   portfolio-v2.js, Animations refonte (template "horizon")
   Révélations au scroll, compteurs, FAQ, rotator, header.
   ============================================================ */
(function () {
  'use strict';
  var root = document.querySelector('.pv2');
  if (!root) return;

  // Header : fond au scroll
  var hdr = document.getElementById('pv2-hdr');
  if (hdr) {
    var onScroll = function () { hdr.classList.toggle('scrolled', window.scrollY > 20); };
    // rAF : lire window.scrollY pendant la construction de la page forcait un
    // recalcul de mise en page synchrone (reflow force de 68 ms au chargement).
    requestAnimationFrame(onScroll);
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // Menu mobile (burger -> panneau .m-menu)
  var burger = document.getElementById('pv2-burger');
  var mmenu = document.getElementById('pv2-mmenu');
  if (burger && mmenu) {
    var setMenu = function (open) {
      mmenu.classList.toggle('open', open);
      burger.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      mmenu.setAttribute('aria-hidden', open ? 'false' : 'true');
      document.body.style.overflow = open ? 'hidden' : '';
    };
    burger.addEventListener('click', function () {
      setMenu(!mmenu.classList.contains('open'));
    });
    mmenu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { setMenu(false); });
    });
  }

  // Révélations au scroll (simples + en cascade)
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    root.querySelectorAll('.rv, .stg').forEach(function (el) { io.observe(el); });

    // Compteurs animés
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        cio.unobserve(e.target);
        var el = e.target, to = parseInt(el.dataset.to, 10) || 0, start = null;
        var step = function (t) {
          if (!start) start = t;
          var p = Math.min((t - start) / 1100, 1);
          el.textContent = Math.floor(p * to);
          if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
      });
    }, { threshold: 0.5 });
    root.querySelectorAll('.ct').forEach(function (el) { cio.observe(el); });
  } else {
    root.querySelectorAll('.rv, .stg').forEach(function (el) { el.classList.add('in'); });
  }

  // FAQ accordéon
  root.querySelectorAll('.qa button').forEach(function (b) {
    b.addEventListener('click', function () { b.parentElement.classList.toggle('open'); });
  });

  // Rotator de mots dans le H1
  var rot = document.getElementById('pv2-rot');
  if (rot && rot.dataset.words) {
    var words;
    try { words = JSON.parse(rot.dataset.words); } catch (e) { words = null; }
    if (words && words.length > 1) {
      var i = 0;
      rot.style.transition = 'opacity .25s';
      setInterval(function () {
        i = (i + 1) % words.length;
        rot.style.opacity = 0;
        setTimeout(function () { rot.textContent = words[i]; rot.style.opacity = 1; }, 250);
      }, 2600);
    }
  }

  // Recherche blog : filtre instantané des cartes
  var bsearch = document.getElementById('blog-search-input');
  if (bsearch) {
    var bcards = Array.prototype.slice.call(document.querySelectorAll('#blog-grid .bcard'));
    var bempty = document.getElementById('blog-empty');
    bsearch.addEventListener('input', function () {
      var q = bsearch.value.toLowerCase().trim();
      var shown = 0;
      bcards.forEach(function (c) {
        var match = !q || (c.getAttribute('data-search') || '').indexOf(q) > -1;
        c.style.display = match ? '' : 'none';
        if (match) shown++;
      });
      if (bempty) bempty.style.display = (shown === 0) ? 'block' : 'none';
    });
  }

  // Parallaxe douce au scroll (éléments [data-parallax])
  var pels = root.querySelectorAll('[data-parallax]');
  if (pels.length) {
    var ticking = false;
    var apply = function () {
      var y = window.scrollY;
      pels.forEach(function (el) {
        var sp = parseFloat(el.dataset.parallax) || 0;
        el.style.transform = 'translate3d(0,' + Math.round(y * sp) + 'px,0)';
      });
      ticking = false;
    };
    window.addEventListener('scroll', function () {
      if (!ticking) { requestAnimationFrame(apply); ticking = true; }
    }, { passive: true });
    apply();
  }
})();
