<?php
// ============================================================
// registre-hub.php · Hubs (/histoires/, /comparatifs/...) et domaines de formation.
// Portée attendue : $page de type « hub » (champ « liste » = type listé) ou « domaine ».
// ============================================================
require_once __DIR__ . '/../helpers/functions.php';

$racineReg = $registreRacine ?? REGISTRES_RACINE;
$rp         = $page;
$listeType = $rp['type'] === 'domaine' ? 'formation' : (string) $rp['liste'];
$elements  = registre_publiees($listeType, $racineReg);
if ($rp['type'] === 'domaine') {
    $elements = array_filter($elements, static fn(array $q): bool => ($q['domaine'] ?? '') === $rp['slug']);
}
uasort($elements, static fn(array $a, array $b): int => strcmp((string) $b['publie'], (string) $a['publie']));
// Hub des services : les piliers partagent une date ; on les range par famille.
$hubFamilles = [];
if ($listeType === 'service') {
    foreach (REGISTRES_FAMILLES as $hubFamille) {
        $hubFamilles[$hubFamille] = array_filter($elements, static fn(array $q): bool => ($q['famille'] ?? '') === $hubFamille);
    }
    $hubFamilles = array_filter($hubFamilles);
}
$miettes = maillage_ariane($rp, $racineReg);
$groupes = maillage_liens($rp, $racineReg);

$pageTitle     = $rp['title'];
$pageDesc      = $rp['meta'];
$pageCanonical = SITE_URL . $rp['url'];
$pageRobots    = $rp['robots'];
$pageSchemas   = array_merge(
    [schema_collection($rp['titre'], $rp['url'], array_map(static fn(array $q): array => [$q['titre'], $q['url']], array_values($elements)), SITE_URL)],
    schema_page_registre($rp, $miettes, SITE_URL)
);

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content" class="registre registre--hub">
  <?php include __DIR__ . '/partials/registre/hero.php'; ?>
  <div class="conteneur">
    <?php if ($hubFamilles): ?>
    <?php foreach ($hubFamilles as $hubFamille => $hubPiliers): ?>
    <h2 class="liste-hub__famille"><?= sanitize($hubFamille) ?></h2>
    <ul class="grille-cartes liste-hub">
      <?php foreach ($hubPiliers as $q): ?>
      <li><a class="carte-hub carte-halo" href="<?= sanitize($q['url']) ?>">
        <h3><?= sanitize($q['titre']) ?></h3>
        <p><?= sanitize($q['meta']) ?></p>
      </a></li>
      <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
    <?php elseif ($elements): ?>
    <ul class="grille-cartes liste-hub">
      <?php foreach ($elements as $q): ?>
      <li><a class="carte-hub carte-halo" href="<?= sanitize($q['url']) ?>">
        <?php if (($e = REGISTRE_ETIQUETTES[$q['type']] ?? '') !== ''): ?><span class="pastille-domaine"><?= sanitize($e) ?></span><?php endif; ?>
        <h2><?= sanitize($q['titre']) ?></h2>
        <p><?= sanitize($q['meta']) ?></p>
      </a></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <div class="registre__article registre__article--hub">
      <?= blocs_rendre($rp['sections']) ?>
      <?php if (!empty($rp['faq'])): ?><?= bloc_rendre(['type' => 'faq', 'titre' => 'Questions fréquentes', 'items' => $rp['faq']]) ?><?php endif; ?>
      <?php if (!empty($rp['sources'])): ?><?= bloc_rendre(['type' => 'sources', 'titre' => 'Sources', 'items' => $rp['sources']]) ?><?php endif; ?>
    </div>
  </div>
  <?php include __DIR__ . '/partials/registre/liens.php'; ?>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
