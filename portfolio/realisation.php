<?php
// ============================================================
// realisation.php · Fiche d'une realisation (URL /realisations/{slug})
//
// Creee le 20/08/2026. Les projets n'existaient que sous forme de cartes
// non cliquables dans l'ancre #portfolio de l'accueil : aucune URL propre,
// donc rien a indexer et rien a citer pour un moteur generatif.
//
// Les sections "etude de cas" (contexte, probleme, solution, resultat) ne
// s'affichent que si les colonnes correspondantes sont remplies — voir
// migrations/2026-08-20-etudes-de-cas.sql. La page reste complete sans
// elles : elle affiche alors la fiche projet seule.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$slug = preg_replace('/[^a-z0-9-]/', '', strtolower((string)($_GET['slug'] ?? '')));

$stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? AND slug = ? LIMIT 1");
$stmt->execute([$userId, $slug]);
$p = $stmt->fetch();

// Projet inconnu : 404 franc (meme raisonnement que service.php et ville.php).
if (!$p) { http_response_code(404); include __DIR__ . '/../404.php'; exit; }

$projUrl = $portfolioUrl . '/realisations/' . $slug;

// Les colonnes case_* peuvent ne pas exister tant que la migration n'a pas
// ete jouee : on lit avec ?? pour que la page marche dans les deux cas.
$caseContexte = trim((string) ($p['case_contexte'] ?? ''));
$caseProbleme = trim((string) ($p['case_probleme'] ?? ''));
$caseSolution = trim((string) ($p['case_solution'] ?? ''));
$caseResultat = trim((string) ($p['case_resultat'] ?? ''));
$aEtudeDeCas  = ($caseContexte || $caseProbleme || $caseSolution || $caseResultat);

$descLong = trim((string) ($p['description_long'] ?? ''));
$descShort = trim((string) ($p['description_short'] ?? ''));

// Les champs case_* et description_long peuvent contenir soit du HTML saisi
// dans le dashboard, soit du texte brut. On distingue les deux : du texte brut
// echappe et enveloppe dans un <p>, du HTML passe par enhanceContentImages()
// qui ajoute loading="lazy" aux images sans y toucher autrement.
$richText = static function (string $valeur): string {
    if ($valeur === '') return '';
    $estHtml = (strip_tags($valeur) !== $valeur);
    return $estHtml
        ? enhanceContentImages($valeur)
        : '<p>' . nl2br(sanitize($valeur)) . '</p>';
};

// technologies : stocke en JSON par l'API, parfois en liste separee par virgules.
$technos = [];
if (!empty($p['technologies'])) {
    $decoded = json_decode((string) $p['technologies'], true);
    $technos = is_array($decoded) ? $decoded : array_filter(array_map('trim', explode(',', (string) $p['technologies'])));
}

$img = !empty($p['image_url']) ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', (string) $p['image_url']) : '';

// Autres realisations, pour le maillage interne.
$stmtAutres = $pdo->prepare("SELECT title, slug, description_short, image_url, category FROM projects WHERE user_id = ? AND slug <> ? ORDER BY is_featured DESC, sort_order ASC LIMIT 3");
$stmtAutres->execute([$userId, $slug]);
$autres = $stmtAutres->fetchAll();

$pageTitle     = seoTitle($p['title'] . ($p['category'] ? ' — ' . $p['category'] : ''), $fullName);
$pageDesc      = seoDescription($descShort ?: strip_tags($descLong) ?: ('Étude de cas : ' . $p['title'] . ' par ' . $fullName . '.'));
$pageCanonical = $projUrl;
$ogImage       = $img ?: (($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '');

$creativeWork = [
    '@context'    => 'https://schema.org',
    '@type'       => 'CreativeWork',
    '@id'         => $projUrl . '#projet',
    'name'        => $p['title'],
    'headline'    => $p['title'],
    'url'         => $projUrl,
    'description' => $pageDesc,
    'creator'     => ['@id' => $portfolioUrl . '/#person'],
    'author'      => ['@id' => $portfolioUrl . '/#person'],
    'publisher'   => ['@id' => $portfolioUrl . '/#organization'],
    'isPartOf'    => ['@id' => $portfolioUrl . '/#website'],
    'inLanguage'  => 'fr-BJ',
];
if ($img)                      $creativeWork['image']    = $img;
if (!empty($p['year']))        $creativeWork['dateCreated'] = (string) $p['year'];
if (!empty($p['category']))    $creativeWork['genre']    = $p['category'];
if ($technos)                  $creativeWork['keywords'] = implode(', ', $technos);
if (!empty($p['client_name'])) {
    $creativeWork['about'] = array_filter([
        '@type' => 'Organization',
        'name'  => $p['client_name'],
        'url'   => $p['client_url'] ?: null,
    ]);
}

$pageSchemas = [
    $creativeWork,
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',      'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Réalisations', 'item' => $portfolioUrl . '/realisations/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $p['title'],    'item' => $projUrl],
        ],
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/realisations/">Réalisations</a><span class="sep">/</span><?= sanitize($p['title']) ?></div>

  <section class="svc-hero"><div class="wrap">
    <?php if (!empty($p['category'])): ?><span class="eyebrow"><span class="mono"><?= sanitize($p['category']) ?></span></span><?php endif; ?>
    <h1><?= sanitize($p['title']) ?></h1>
    <?php if ($descShort): ?><p><?= sanitize($descShort) ?></p><?php endif; ?>
    <div class="hero-cta">
      <?php if (!empty($p['link_live'])): ?><a href="<?= sanitize($p['link_live']) ?>" class="btn" target="_blank" rel="noopener">Voir le site en ligne</a><?php endif; ?>
      <a href="/contact" class="btn btn-ghost">Un projet similaire ?</a>
    </div>
  </div></section>

  <!-- Fiche technique : les faits verifiables, ceux que les moteurs citent -->
  <section class="sect"><div class="wrap">
    <div class="rea-facts rv">
      <?php if (!empty($p['client_name'])): ?><div><h3>Client</h3><p><?php if (!empty($p['client_url'])): ?><a href="<?= sanitize($p['client_url']) ?>" target="_blank" rel="noopener"><?= sanitize($p['client_name']) ?></a><?php else: ?><?= sanitize($p['client_name']) ?><?php endif; ?></p></div><?php endif; ?>
      <?php if (!empty($p['category'])): ?><div><h3>Type de projet</h3><p><?= sanitize($p['category']) ?></p></div><?php endif; ?>
      <?php if (!empty($p['year'])): ?><div><h3>Année</h3><p><?= sanitize((string) $p['year']) ?></p></div><?php endif; ?>
      <?php if (!empty($p['duration'])): ?><div><h3>Durée</h3><p><?= sanitize($p['duration']) ?></p></div><?php endif; ?>
      <?php if (!empty($p['status'])): ?><div><h3>Statut</h3><p><?= sanitize($p['status']) ?></p></div><?php endif; ?>
    </div>

    <?php if ($technos): ?>
    <div class="rea-technos rv">
      <h3>Technologies employées</h3>
      <ul><?php foreach ($technos as $t): ?><li><?= sanitize((string) $t) ?></li><?php endforeach; ?></ul>
    </div>
    <?php endif; ?>
  </div></section>

  <?php if ($img): ?>
  <section class="sect soft"><div class="wrap">
    <figure class="rea-cover rv">
      <img src="<?= sanitize($img) ?>" alt="<?= sanitize($p['title']) ?> — <?= sanitize($p['category'] ?: 'projet réalisé par ' . $fullName) ?>" loading="lazy" decoding="async">
    </figure>
  </div></section>
  <?php endif; ?>

  <?php if ($aEtudeDeCas): ?>
  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <?php if ($caseContexte): ?>
        <h2>Le contexte</h2>
        <?= $richText($caseContexte) ?>
      <?php endif; ?>

      <?php if ($caseProbleme): ?>
        <h2>Le problème à résoudre</h2>
        <?= $richText($caseProbleme) ?>
      <?php endif; ?>

      <?php if ($caseSolution): ?>
        <h2>Ce qui a été mis en place</h2>
        <?= $richText($caseSolution) ?>
      <?php endif; ?>

      <?php if ($caseResultat): ?>
        <h2>Le résultat</h2>
        <div class="art-callout"><?= $richText($caseResultat) ?></div>
      <?php endif; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if ($descLong): ?>
  <section class="sect<?= $aEtudeDeCas ? ' soft' : '' ?>"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <?php if ($aEtudeDeCas): ?><h2>En détail</h2><?php endif; ?>
      <?= $richText($descLong) ?>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if ($autres): ?>
  <section class="sect"><div class="wrap">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">05</span> / Autres projets</span><h2>D'autres réalisations</h2></div>
    <div class="pf-grid stg">
      <?php foreach ($autres as $a): $aImg = $a['image_url'] ? '/uploads/' . sanitize($a['image_url']) : ''; ?>
        <a class="pf" href="/realisations/<?= sanitize($a['slug']) ?>">
          <div class="pf-thumb">
            <?php if ($aImg): ?><img src="<?= $aImg ?>" alt="<?= sanitize($a['title']) ?>" loading="lazy"><?php endif; ?>
            <?php if (!empty($a['category'])): ?><span class="pf-tag"><?= sanitize($a['category']) ?></span><?php endif; ?>
          </div>
          <div class="pf-body">
            <h3><?= sanitize($a['title']) ?></h3>
            <p><?= sanitize($a['description_short'] ?? '') ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv">
    <h2>Un projet de ce type ?</h2>
    <p>Décrivez votre besoin, je reviens vers vous avec un devis clair et sans engagement.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
