<?php
// ============================================================
// tracking.php · Scripts de suivi analytics (site public).
// Inclus dans le <head> de l'accueil et des pages pv2.
// NE PAS inclure dans le dashboard admin.
// ============================================================
?>
<!-- Microsoft Clarity et Google Analytics 4 : chargement a la premiere interaction (05/10/2026) -->
<script>
    // Historique : le 20/08/2026, Clarity a quitte le <head> pour requestIdleCallback
    // apres le chargement. Insuffisant : sur les fiches formation, Clarity et GA4
    // s'executaient encore dans la fenetre mesuree par Lighthouse (450 a 660 ms de
    // blocage du fil principal). Depuis le 05/10/2026 (accord de Richard), les deux
    // scripts partent a la premiere interaction (defilement, toucher, clic, clavier)
    // ou, a defaut, 6 s apres le chargement. Seules les visites de moins de 6 s sans
    // aucun geste sont perdues ; GA4 les classe de toute facon comme non engagees.
    // Les files clarity(...) et dataLayer sont creees tout de suite : aucun appel perdu.
    (function (w, d) {
        w.clarity = w.clarity || function () { (w.clarity.q = w.clarity.q || []).push(arguments); };
        w.dataLayer = w.dataLayer || [];
        w.analytiqueChargeurs = w.analytiqueChargeurs || [];
        w.analytiqueChargeurs.push(function () {
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
        gestes.forEach(function (g) { w.addEventListener(g, partir, { passive: true }); });
        w.addEventListener('load', function () { setTimeout(partir, 6000); });
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
    gtag('js', new Date());
    gtag('config', '<?= GA4_ID ?>');
});
</script>
<?php endif; ?>
