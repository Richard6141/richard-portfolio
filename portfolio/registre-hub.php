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
    // Le schéma ItemList suit l'ordre affiché.
    $elements = array_merge(...array_values($hubFamilles));
}
// Vague 1B : hub des formations rangé par domaine, comme les services par famille.
if ($listeType === 'formation' && $rp['type'] === 'hub') {
    foreach (REGISTRES_DOMAINES_NOMS as $hubSlug => $hubNom) {
        $hubFamilles[$hubNom] = array_filter($elements, static fn(array $q): bool => ($q['domaine'] ?? '') === $hubSlug);
    }
    $hubFamilles = array_filter($hubFamilles);
    if ($hubFamilles) {
        $elements = array_merge(...array_values($hubFamilles));
    }
}
// Vague 1E : hub des secteurs rangé par univers, comme les services par famille.
if ($listeType === 'secteur') {
    foreach (REGISTRES_UNIVERS as $hubUnivers) {
        $hubFamilles[$hubUnivers] = array_filter($elements, static fn(array $q): bool => ($q['univers'] ?? '') === $hubUnivers);
    }
    $hubFamilles = array_filter($hubFamilles);
    if ($hubFamilles) {
        $elements = array_merge(...array_values($hubFamilles));
    }
}
// Vague 1C : les pages métier publiées, par univers, sous les fiches du hub des formations.
$hubMetiers = [];
if ($listeType === 'formation' && $rp['type'] === 'hub') {
    $metiersPublies = registre_publiees('metier', $racineReg);
    foreach (REGISTRES_UNIVERS as $hubUnivers) {
        $hubMetiers[$hubUnivers] = array_filter($metiersPublies, static fn(array $q): bool => ($q['univers'] ?? '') === $hubUnivers);
    }
    $hubMetiers = array_filter($hubMetiers);
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

// Typographie française appliquée à la page rendue (helpers/blocs.php).
ob_start();
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
    <?php if ($hubMetiers): ?>
    <section id="metiers" class="liste-hub__metiers">
      <h2 class="liste-hub__famille">Formations par métier</h2>
      <?php foreach ($hubMetiers as $hubUnivers => $hubMetiersUnivers): ?>
      <h3><?= sanitize($hubUnivers) ?></h3>
      <ul class="liste-liens">
        <?php foreach ($hubMetiersUnivers as $q): ?><li><a href="<?= sanitize($q['url']) ?>"><?= sanitize(registre_libelle($q)) ?></a></li><?php endforeach; ?>
      </ul>
      <?php endforeach; ?>
    </section>
    <?php endif; ?>
    <div class="registre__article registre__article--hub">
      <?= blocs_rendre($rp['sections']) ?>
      <?php if (str_starts_with((string) $rp['url'], '/formations')) { include __DIR__ . '/partials/bandeau-audyxa.php'; } ?>
      <?php if (!empty($rp['faq'])): ?><?= bloc_rendre(['type' => 'faq', 'titre' => 'Questions fréquentes', 'items' => $rp['faq']]) ?><?php endif; ?>
      <?php if (!empty($rp['sources'])): ?><?= bloc_rendre(['type' => 'sources', 'titre' => 'Sources', 'items' => $rp['sources']]) ?><?php endif; ?>
    </div>
  </div>
  <?php include __DIR__ . '/partials/registre/liens.php'; ?>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
<?php echo typo_fr_html((string) ob_get_clean());
