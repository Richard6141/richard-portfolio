<?php
// ============================================================
// sujet.php · Gabarit unique des pages « sujet x ville »
//
// Cree le 21/08/2026. Un seul gabarit pour tous les sujets, la ou
// ville.php (285 lignes) et digitalisation.php (187 lignes) rendaient
// deja la meme chose : un Service, un fil d'Ariane, une FAQ et une
// suite de sections. Un troisieme sujet aurait produit un troisieme
// gabarit, et trois occasions de diverger.
//
// Les sections sont decrites par la donnee, pas par le code : chaque
// fichier de ville declare une liste de sections typees, et ce gabarit
// sait en rendre quatre formes (prose, liste, etapes, definitions).
// Ajouter un sujet ne demande donc aucune modification ici.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

/** @var array $page  Injecte par le resolveur (portfolio/route.php). */
/** @var array $sujet Metadonnees du sujet. */
if (!isset($page, $sujet)) {
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}

$url = $portfolioUrl . '/' . $page['slug'];

$pageTitle     = seoTitle($page['titre'], $fullName);
$pageDesc      = seoDescription($page['accroche'] . ' ' . ($page['intro'] ?? ''));
$pageCanonical = $url;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => $url . '#service',
        'name'        => $page['titre'],
        'serviceType' => $sujet['service_type'] ?? $sujet['nom'] ?? 'Développement web',
        'description' => $page['accroche'],
        'url'         => $url,
        'provider'    => ['@id' => $portfolioUrl . '/#person'],
        'areaServed'  => [
            ['@type' => 'City',    'name' => $page['ville']],
            ['@type' => 'Country', 'name' => $page['pays']],
        ],
        'offers' => ['@type' => 'Offer', 'priceCurrency' => 'XOF', 'description' => 'Devis gratuit après cadrage'],
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => array_values(array_filter([
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Zones desservies', 'item' => $portfolioUrl . '/zones/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $page['ville'], 'item' => $portfolioUrl . '/developpeur-web-' . $page['ville_slug']],
            ['@type' => 'ListItem', 'position' => 4, 'name' => $page['titre'], 'item' => $url],
        ])),
    ],
];

if (!empty($page['faq'])) {
    $pageSchemas[] = [
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
    ];
}

// Autres sujets deja publies pour cette ville : maillage interne construit
// depuis le registre, donc toujours a jour sans intervention.
$autresSujets = [];
foreach ($sujetsRegistre as $sSlug => $s) {
    if ($sSlug === $sujet['slug']) continue;
    if (isset($s['pages'][$page['ville_slug']])) {
        $autresSujets[] = ['sujet' => $s, 'page' => $s['pages'][$page['ville_slug']]];
    }
}
// Meme sujet dans d'autres villes : utile a un visiteur qui compare.
$memeSujetAilleurs = [];
foreach ($sujet['pages'] as $vSlug => $pg) {
    if ($vSlug !== $page['ville_slug']) $memeSujetAilleurs[] = $pg;
}

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/zones/">Zones desservies</a><span class="sep">/</span><a href="/developpeur-web-<?= sanitize($page['ville_slug']) ?>"><?= sanitize($page['ville']) ?></a><span class="sep">/</span><?= sanitize($sujet['nom'] ?? $sujet['slug']) ?></div>

  <section class="svc-hero"><div class="wrap">
    <h1><?= sanitize($page['titre']) ?></h1>
    <p><?= sanitize($page['accroche']) ?></p>
    <div class="hero-cta">
      <a href="/contact" class="btn">Demander un devis gratuit</a>
      <a href="/developpeur-web-<?= sanitize($page['ville_slug']) ?>" class="btn btn-ghost">Développeur web à <?= sanitize($page['ville']) ?></a>
    </div>
    <div class="vil-meta"><span><?= sanitize($page['ville']) ?>, <?= sanitize($page['pays']) ?></span></div>
  </div></section>

  <?php if (!empty($page['intro'])): ?>
  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv"><p class="lead"><?= sanitize($page['intro']) ?></p></div>
  </div></section>
  <?php endif; ?>

  <?php $n = 0; foreach (($page['sections'] ?? []) as $sec): $n++; $soft = ($n % 2 === 1) ? ' soft' : ''; ?>
  <section class="sect<?= $soft ?>"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num"><?= sprintf('%02d', $n) ?></span> / <?= sanitize($sec['etiquette'] ?? 'Détail') ?></span><h2><?= sanitize($sec['titre']) ?></h2></div>
    <?php if (($sec['type'] ?? 'prose') === 'liste'): ?>
      <ul class="inc-list rv"><?php foreach ($sec['items'] as $it): ?><li><?= sanitize($it) ?></li><?php endforeach; ?></ul>
    <?php elseif ($sec['type'] === 'etapes'): ?>
      <div class="proc stg">
        <?php foreach ($sec['items'] as $i => $it): ?>
        <div class="step"><div class="sn"><?= $i + 1 ?></div><h3><?= sanitize($it['titre']) ?></h3><p><?= sanitize($it['texte']) ?></p></div>
        <?php endforeach; ?>
      </div>
    <?php elseif ($sec['type'] === 'definitions'): ?>
      <div class="prose rv">
        <?php foreach ($sec['items'] as $it): ?>
          <h3><?= sanitize($it['titre']) ?></h3><p><?= sanitize($it['texte']) ?></p>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="prose rv"><?php foreach ($sec['paragraphes'] as $par): ?><p><?= sanitize($par) ?></p><?php endforeach; ?></div>
    <?php endif; ?>
  </div></section>
  <?php endforeach; ?>

  <?php if (!empty($page['faq'])): ?>
  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><h2>Ce qu'on me demande à <?= sanitize($page['ville']) ?>.</h2></div>
    <div class="faq rv">
      <?php foreach ($page['faq'] as $qa): ?>
      <details><summary><?= sanitize($qa['q']) ?></summary><p><?= sanitize($qa['r']) ?></p></details>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if ($autresSujets): ?>
  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><h2>Autres sujets à <?= sanitize($page['ville']) ?>.</h2></div>
    <div class="bento stg">
      <?php foreach ($autresSujets as $a): ?>
      <a class="svc" href="/<?= sanitize($a['page']['slug']) ?>"><h3><?= sanitize($a['page']['titre']) ?></h3><p><?= sanitize($a['page']['accroche']) ?></p><div class="arrow">Lire la page</div></a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if ($memeSujetAilleurs): ?>
  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><h2><?= sanitize($sujet['nom'] ?? '') ?> dans d'autres villes.</h2></div>
    <div class="zone-grid">
      <?php foreach ($memeSujetAilleurs as $pg): ?>
      <a href="/<?= sanitize($pg['slug']) ?>"><?= sanitize($pg['ville']) ?></a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Un projet à <?= sanitize($page['ville']) ?> ?</h2>
    <p>Décrivez votre situation, je reviens avec un plan par étapes et un devis gratuit.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
