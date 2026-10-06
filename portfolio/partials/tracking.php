<?php
// ============================================================
// tracking.php · Scripts de suivi analytics (site public).
// Inclus dans le <head> de l'accueil et des pages pv2.
// NE PAS inclure dans le dashboard admin.
// ============================================================
?>
<!-- Microsoft Clarity et Google Analytics 4 : seulement apres consentement (06/10/2026), puis a la premiere interaction -->
<script>
    // Historique : le 20/08/2026, Clarity a quitte le <head> pour requestIdleCallback
    // apres le chargement. Insuffisant : sur les fiches formation, Clarity et GA4
    // s'executaient encore dans la fenetre mesuree par Lighthouse (450 a 660 ms de
    // blocage du fil principal). Depuis le 05/10/2026 (accord de Richard), les deux
    // scripts partent a la premiere interaction (defilement, toucher, clic, clavier)
    // ou, a defaut, 6 s apres le chargement. Seules les visites de moins de 6 s sans
    // aucun geste sont perdues ; GA4 les classe de toute facon comme non engagees.
    // Les files clarity(...) et dataLayer sont creees tout de suite : aucun appel perdu.
    //
    // Consentement (06/10/2026, accord de Richard) : GA4 et Clarity ne sont pas exemptes
    // par la CNIL et Microsoft exige un signal de consentement pour l'Europe depuis le
    // 31/10/2025. Rien ne part avant « Accepter » ; « Refuser » est un bouton identique ;
    // le choix tient 6 mois (cookie consentement_mesure) ; le lien « Cookies » du pied
    // ([data-cookies]) rouvre le bandeau, et un retrait efface les cookies _ga* et _cl*
    // puis recharge la page. Comportement teste sous Node : tools/tests/ConsentementTest.php.
    (function (w, d) {
        w.clarity = w.clarity || function () { (w.clarity.q = w.clarity.q || []).push(arguments); };
        w.dataLayer = w.dataLayer || [];
        w.analytiqueChargeurs = w.analytiqueChargeurs || [];
        w.analytiqueChargeurs.push(function () {
            w.clarity('consentv2', { ad_Storage: 'denied', analytics_Storage: 'granted' });
            var t = d.createElement('script'); t.async = true;
            t.src = 'https://www.clarity.ms/tag/xty0gc725v?ref=bwt';
            d.head.appendChild(t);
        });
        var gestes = ['scroll', 'pointerdown', 'keydown', 'touchstart'], parti = false;
        function partir() {
            if (parti) { return; }
            parti = true;
            gestes.forEach(function (g) { w.removeEventListener(g, partir, { passive: true }); });
            var lancer = function () { w.analytiqueChargeurs.forEach(function (f) { f(); }); };
            if ('requestIdleCallback' in w) { w.requestIdleCallback(lancer, { timeout: 2000 }); } else { setTimeout(lancer, 200); }
        }
        function armer() {
            gestes.forEach(function (g) { w.addEventListener(g, partir, { passive: true }); });
            w.addEventListener('load', function () { setTimeout(partir, 6000); });
        }

        var bandeau = null;
        function choix() {
            var m = d.cookie.match(/(?:^|;\s*)consentement_mesure=(oui|non)/);
            return m ? m[1] : null;
        }
        function retenir(v) {
            d.cookie = 'consentement_mesure=' + v + '; Max-Age=15552000; Path=/; SameSite=Lax' + (w.location.protocol === 'https:' ? '; Secure' : '');
        }
        function effacerTraceurs() {
            var hote = w.location.hostname.replace(/^www\./, '');
            d.cookie.split(/;\s*/).forEach(function (c) {
                var nom = c.split('=')[0];
                if (/^_(ga|cl)/.test(nom)) {
                    ['', '; Domain=' + hote, '; Domain=.' + hote].forEach(function (domaine) {
                        d.cookie = nom + '=; Max-Age=0; Path=/' + domaine;
                    });
                }
            });
        }
        function afficher() {
            if (!bandeau) {
                bandeau = d.createElement('div');
                bandeau.className = 'cookies';
                bandeau.setAttribute('role', 'region');
                bandeau.setAttribute('aria-label', 'Cookies de mesure d’audience');
                bandeau.innerHTML = '<p class="cookies__texte">Ce site mesure son audience avec Google Analytics et Microsoft Clarity, seulement si vous l’acceptez. '
                    + 'Vous pourrez changer d’avis à tout moment avec le lien « Cookies » en bas de page. <a href="/confidentialite">Politique de confidentialité</a></p>'
                    + '<div class="cookies__actions">'
                    + '<button type="button" class="btn--action btn--blanc cookies__choix" data-choix="non">Refuser</button>'
                    + '<button type="button" class="btn--action btn--blanc cookies__choix" data-choix="oui">Accepter</button>'
                    + '</div>';
                d.body.appendChild(bandeau);
            }
            bandeau.hidden = false;
        }
        d.addEventListener('click', function (e) {
            var cible = e.target && e.target.closest ? e.target.closest('[data-choix]') : null;
            if (cible) {
                var v = cible.getAttribute('data-choix'), avant = choix();
                retenir(v);
                if (bandeau) { bandeau.hidden = true; }
                if (v === 'oui') {
                    partir();
                } else if (avant === 'oui') {
                    effacerTraceurs();
                    w.location.reload();
                }
            } else if (e.target && e.target.closest && e.target.closest('[data-cookies]')) {
                afficher();
            }
        });

        var etat = choix();
        if (etat === 'oui') {
            armer();
        } else if (etat === null) {
            if (d.readyState === 'loading') { d.addEventListener('DOMContentLoaded', afficher); } else { afficher(); }
        }
    })(window, document);
</script>

<?php /*
  Chatbot Wapy : RETIRE le 20/08/2026.
  Motifs : widget de test en production (140 Ko / 76 ms) dont le bouton flottant
  (60x60 px, bottom:20px right:20px) recouvrait entierement le bouton WhatsApp
  (.fab-wa, 46x46 px, bottom:14px right:14px sur mobile) et le rendait inaccessible.
  Si le chatbot est remis en service, decaler .fab-wa (ex. bottom:88px) au prealable.

  Commentaire PHP et non HTML : un commentaire HTML serait envoye a chaque
  visiteur (378 octets sur chacune des 43 pages).
*/ ?>
<?php if (defined('GA4_ID') && GA4_ID !== ''): ?>
<!-- Google Analytics 4 : sur toutes les pages publiques depuis le 03/10/2026
     (avant : accueil seulement). Part avec Clarity, a la premiere interaction. -->
<script>
window.analytiqueChargeurs.push(function () {
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>';
    document.head.appendChild(s);
    function gtag(){dataLayer.push(arguments);}
    // Mode Consentement de Google : mesure d'audience seule, aucune publicite ;
    // cookies GA4 limites a 13 mois, comme le recommande la CNIL.
    gtag('consent', 'default', {ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied', analytics_storage: 'granted'});
    gtag('js', new Date());
    gtag('config', '<?= GA4_ID ?>', {cookie_expires: 34128000});
});
</script>
<?php endif; ?>
