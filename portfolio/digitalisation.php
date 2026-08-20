<?php
// ============================================================
// digitalisation.php · Pages "digitalisation d'entreprise"
//   /digitalisation-entreprise-{ville}   -> le pilier   (informationnel)
//   /digitaliser-{secteur}-{ville}       -> le secteur  (transactionnel)
//
// Cree le 20/08/2026. Deux pages par ville sur DEUX intentions distinctes.
// Le contenu vient de data/digitalisation/{ville}.php, ou chaque ville
// porte son propre texte : aucune phrase generique interpolee avec un nom
// de ville, sous peine de produire exactement le duplicate content que
// Google traite en doorway page.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$pages = require __DIR__ . '/data/digitalisation.php';
$slug  = preg_replace('/[^a-z0-9-]/', '', strtolower((string) ($_GET['p'] ?? '')));

// Index slug -> [ville, type]. Construit a la volee : ajouter un fichier
// dans data/digitalisation/ suffit a publier ses deux pages.
$index = [];
foreach ($pages as $villeSlug => $d) {
    foreach (['pilier', 'secteur'] as $type) {
        if (!empty($d[$type]['slug'])) {
            $index[$d[$type]['slug']] = [$villeSlug, $type];
        }
    }
}

// Slug inconnu : 404 franc, jamais de redirection (soft-404).
if (!isset($index[$slug])) {
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}

[$villeSlug, $type] = $index[$slug];
$d    = $pages[$villeSlug];
$page = $d[$type];
$url  = $portfolioUrl . '/' . $slug;

$pageTitle     = seoTitle($page['titre'], $fullName);
$pageDesc      = seoDescription($page['accroche'] . ' ' . $page['intro']);
$pageCanonical = $url;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => $url . '#service',
        'name'        => $page['titre'],
        'serviceType' => "Digitalisation d'entreprise",
        'description' => $page['accroche'],
        'url'         => $url,
        'provider'    => ['@id' => $portfolioUrl . '/#person'],
        'areaServed'  => [
            ['@type' => 'City',    'name' => $d['ville']],
            ['@type' => 'Country', 'name' => $d['pays']],
        ],
        'offers' => ['@type' => 'Offer', 'priceCurrency' => 'XOF', 'description' => 'Devis gratuit après cadrage'],
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Zones desservies', 'item' => $portfolioUrl . '/zones/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $d['ville'], 'item' => $portfolioUrl . '/developpeur-web-' . $d['ville_slug']],
            ['@type' => 'ListItem', 'position' => 4, 'name' => $page['titre'], 'item' => $url],
        ],
    ],
    [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(
            static fn(array $qa): array => [
                '@type'          => 'Question',
                'name'           => $qa['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa['r']],
            ],
            $page['faq']
        ),
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/zones/">Zones desservies</a><span class="sep">/</span><a href="/developpeur-web-<?= sanitize($d['ville_slug']) ?>"><?= sanitize($d['ville']) ?></a><span class="sep">/</span>Digitalisation</div>

  <section class="svc-hero"><div class="wrap">
    <h1><?= sanitize($page['titre']) ?></h1>
    <p><?= sanitize($page['accroche']) ?></p>
    <div class="hero-cta">
      <a href="/contact" class="btn">Demander un devis gratuit</a>
      <a href="/developpeur-web-<?= sanitize($d['ville_slug']) ?>" class="btn btn-ghost">Développeur web à <?= sanitize($d['ville']) ?></a>
    </div>
    <div class="vil-meta"><span><?= sanitize($d['ville']) ?>, <?= sanitize($d['pays']) ?></span></div>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv"><p class="lead"><?= sanitize($page['intro']) ?></p></div>
  </div></section>

  <?php if ($type === 'pilier'): ?>

  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">01</span> / Diagnostic</span><h2>Les signes qu'il est temps de digitaliser.</h2></div>
    <ul class="inc-list rv"><?php foreach ($page['signaux'] as $s): ?><li><?= sanitize($s) ?></li><?php endforeach; ?></ul>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">02</span> / Méthode</span><h2>Comment je procède à <?= sanitize($d['ville']) ?>.</h2></div>
    <div class="proc stg">
      <?php foreach ($page['etapes'] as $i => $e): ?>
      <div class="step"><div class="sn"><?= $i + 1 ?></div><h3><?= sanitize($e['titre']) ?></h3><p><?= sanitize($e['texte']) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div></section>

  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">03</span> / Budget et délais</span><h2>Ce que ça coûte, ce que ça prend.</h2></div>
    <div class="prose rv">
      <h3>Budget</h3><p><?= sanitize($page['budget']) ?></p>
      <h3>Délais</h3><p><?= sanitize($page['delais']) ?></p>
    </div>
  </div></section>

  <?php else: ?>

  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">01</span> / Le terrain</span><h2>Le flux, étape par étape.</h2></div>
    <ul class="inc-list rv"><?php foreach ($page['flux'] as $f): ?><li><?= sanitize($f) ?></li><?php endforeach; ?></ul>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">02</span> / Ce qui bloque</span><h2>Les trois points qui coûtent le plus cher.</h2></div>
    <div class="prose rv">
      <?php foreach ($page['douleurs'] as $p): ?>
      <h3><?= sanitize($p['titre']) ?></h3><p><?= sanitize($p['texte']) ?></p>
      <?php endforeach; ?>
    </div>
  </div></section>

  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">03</span> / La réponse</span><h2>Ce que je mets en place.</h2></div>
    <div class="prose rv">
      <?php foreach ($page['solution'] as $s): ?>
      <h3><?= sanitize($s['titre']) ?></h3><p><?= sanitize($s['texte']) ?></p>
      <?php endforeach; ?>
    </div>
  </div></section>

  <?php endif; ?>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">04</span> / Questions</span><h2>Ce qu'on me demande à <?= sanitize($d['ville']) ?>.</h2></div>
    <div class="faq rv">
      <?php foreach ($page['faq'] as $qa): ?>
      <details><summary><?= sanitize($qa['q']) ?></summary><p><?= sanitize($qa['r']) ?></p></details>
      <?php endforeach; ?>
    </div>
  </div></section>

  <?php
  // Lien croise vers l'autre page de la meme ville : les deux repondent a des
  // intentions differentes, un visiteur arrive par l'une a souvent besoin de l'autre.
  $autre = $type === 'pilier' ? $d['secteur'] : $d['pilier'];
  ?>
  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><h2>Aller plus loin.</h2></div>
    <div class="bento stg">
      <a class="svc" href="/<?= sanitize($autre['slug']) ?>"><h3><?= sanitize($autre['titre']) ?></h3><p><?= sanitize($autre['accroche']) ?></p><div class="arrow">Lire la page</div></a>
      <a class="svc" href="/developpeur-web-<?= sanitize($d['ville_slug']) ?>"><h3>Développeur web à <?= sanitize($d['ville']) ?></h3><p>Sites, applications et automatisation à <?= sanitize($d['ville']) ?>.</p><div class="arrow">Voir la page</div></a>
    </div>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Digitaliser votre entreprise à <?= sanitize($d['ville']) ?> ?</h2>
    <p>Décrivez votre situation actuelle, je reviens avec un plan par étapes et un devis gratuit.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
