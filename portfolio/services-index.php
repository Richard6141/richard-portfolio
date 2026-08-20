<?php
// ============================================================
// services-index.php · Index des services (URL /services/)
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$stmt = $pdo->prepare("SELECT * FROM services WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]);
$allServices = $stmt->fetchAll();

$pageTitle     = seoTitle('Services numériques au Bénin (web, mobile, automatisation)', $fullName);
$pageDesc      = seoDescription('Création de sites web et e-commerce, applications web & mobiles, automatisation & IA, formation, audit et digitalisation au Bénin. Devis gratuit.');
$pageCanonical = $portfolioUrl . '/services/';

$itemList = [];
foreach ($allServices as $i => $s) {
    $itemList[] = [
        '@type' => 'ListItem', 'position' => $i + 1, 'name' => $s['title'],
        'url' => $portfolioUrl . '/services/' . generateSlug($s['title']),
    ];
}
$pageSchemas = [
    ['@context' => 'https://schema.org', '@type' => 'ItemList', 'name' => 'Services', 'itemListElement' => $itemList],
    ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',  'item' => $portfolioUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $portfolioUrl . '/services/'],
    ]],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span>Services</div>

  <section class="svc-hero"><div class="wrap">
    <h1>Mes services numériques</h1>
    <p>De la création de sites à l'automatisation : un partenaire unique pour tout votre numérique, au Bénin et à l'international.</p>
    <div class="hero-cta"><a href="<?= sanitize($h_mailto) ?>" class="btn">Demander un devis gratuit</a></div>
  </div></section>

  <section class="sect"><div class="wrap">
    <?php if (!empty($allServices)): ?>
    <div class="bento stg">
      <?php foreach ($allServices as $s): $sl = generateSlug($s['title']); ?>
        <a class="svc" href="/services/<?= $sl ?>">
          <div class="ico"><?= pv2_icon($s['title']) ?></div>
          <h3><?= sanitize($s['title']) ?></h3>
          <p><?= sanitize($s['description'] ?? '') ?></p>
          <?php if ($s['price'] ?? ''): ?><div class="svc-price-sm"><?= sanitize($s['price']) ?></div><?php endif; ?>
          <div class="arrow">En savoir plus</div>
        </a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Parlons de votre projet.</h2>
    <p>Un besoin précis ou une idée à cadrer ? Décrivez-le, je reviens vite avec un devis gratuit.</p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
