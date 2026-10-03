<?php
// ============================================================
// registre.php · Gabarit unique des pages de registre (spec 7.4), vague 0C.
// Portée attendue : $page (publiée) + variables de pv2-bootstrap.php (inclus par l'appelant).
// Squelette : fil d'Ariane, hero de sous-page, sommaire collant, blocs, programme,
// FAQ, sources, boîte auteur, liens liés, bande d'appel.
// ============================================================
require_once __DIR__ . '/../helpers/functions.php';

$racineReg = $registreRacine ?? REGISTRES_RACINE;
$rp         = $page;
$miettes   = maillage_ariane($rp, $racineReg);
$groupes   = maillage_liens($rp, $racineReg);
$editorial = !in_array($rp['type'], ['page', 'hub'], true);

$pageTitle     = $rp['title'];
$pageDesc      = $rp['meta'];
$pageCanonical = SITE_URL . $rp['url'];
$pageRobots    = $rp['robots'];
$pageSchemas   = schema_page_registre($rp, $miettes, SITE_URL);
if (in_array($rp['type'], ['histoire', 'comparatif', 'guide'], true)) {
    $ogType = 'article';
    $ogPublishedTime = $rp['publie'];
    $ogModifiedTime  = $rp['maj'];
}

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content" class="registre registre--<?= sanitize($rp['type']) ?>">
  <?php include __DIR__ . '/partials/registre/hero.php'; ?>
  <div class="registre__corps conteneur">
    <?php include __DIR__ . '/partials/registre/sommaire.php'; ?>
    <article class="registre__article">
      <?= blocs_rendre($rp['sections']) ?>
      <?php if (!empty($rp['programme'])): ?><?= bloc_rendre(['type' => 'programme', 'titre' => 'Programme détaillé', 'jours' => $rp['programme']]) ?><?php endif; ?>
      <?php if (!empty($rp['faq'])): ?><?= bloc_rendre(['type' => 'faq', 'titre' => 'Questions fréquentes', 'items' => $rp['faq']]) ?><?php endif; ?>
      <?php if (!empty($rp['sources'])): ?><?= bloc_rendre(['type' => 'sources', 'titre' => 'Sources', 'items' => $rp['sources']]) ?><?php endif; ?>
      <?php if ($editorial) { include __DIR__ . '/partials/boite-auteur.php'; } ?>
    </article>
  </div>
  <?php include __DIR__ . '/partials/registre/liens.php'; ?>
  <div class="conteneur"><?= bloc_rendre(['type' => 'cta', 'titre' => 'Parlons de votre projet', 'texte' => 'Décrivez votre besoin : je reviens vers vous avec une première recommandation, sans engagement.', 'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis']]) ?></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
