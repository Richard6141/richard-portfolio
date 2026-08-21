<?php
// ============================================================
// tracking.php · Scripts de suivi analytics (site public).
// Inclus dans le <head> de l'accueil et des pages pv2.
// NE PAS inclure dans le dashboard admin.
// ============================================================
?>
<!-- Microsoft Clarity, chargement differe (20/08/2026) -->
<script type="text/javascript">
    // Avant : le tag s'injectait des le <head>, soit 28 Ko et 131 ms de thread
    // principal pendant le chargement. Le shim reste immediat (les appels
    // clarity(...) sont mis en file), seul le TELECHARGEMENT est repousse hors
    // du chemin critique via requestIdleCallback.
    // On n'attend PAS une interaction utilisateur : cela ferait perdre les
    // sessions courtes. requestIdleCallback se declenche apres le rendu, sur
    // toutes les visites, sans fausser les statistiques.
    (function (c, l, a, r, i) {
        c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
        var done = false;
        function load() {
            if (done) return; done = true;
            var t = l.createElement(r); t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i + "?ref=bwt";
            var y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        }
        function schedule() {
            if ('requestIdleCallback' in c) { c.requestIdleCallback(load, { timeout: 4000 }); }
            else { setTimeout(load, 2500); }   // repli Safari
        }
        if (l.readyState === 'complete') { schedule(); }
        else { c.addEventListener('load', schedule); }
    })(window, document, "clarity", "script", "xty0gc725v");
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
