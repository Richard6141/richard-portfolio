<?php
// ============================================================
// service.php · Page d'un service (URL /services/{slug})
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$slug = preg_replace('/[^a-z0-9-]/', '', strtolower((string)($_GET['slug'] ?? '')));

$stmt = $pdo->prepare("SELECT * FROM services WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$allServices = $stmt->fetchAll();

$svc = null;
foreach ($allServices as $s) {
    if (generateSlug($s['title']) === $slug) { $svc = $s; break; }
}
// Corrige le 20/08/2026 : un slug de service inconnu renvoyait une redirection
// 302 vers /services/ : soit un soft-404. Google suivait la redirection et
// indexait une URL inexistante comme valide. Un service absent doit repondre 404.
if (!$svc) { http_response_code(404); include __DIR__ . '/../404.php'; exit; }

$feats   = json_decode($svc['features'] ?? '[]', true) ?: [];
$others  = array_values(array_filter($allServices, fn($s) => $s['id'] !== $svc['id']));
$svcUrl  = $portfolioUrl . '/services/' . $slug;
$contentHtml = trim($svc['content_html'] ?? '');

// Title sans ville (03/10/2026) : les 17 pages services étaient toutes
// calées sur « à Abomey-Calavi, Bénin », à rebours de la cible internationale.
$pageTitle    = seoTitle($svc['title'], $fullName);
$descBase     = trim(($svc['description'] ?? '') . ($feats ? ' ' . implode(', ', array_slice($feats, 0, 3)) . '.' : ''));
$pageDesc     = seoDescription($descBase ?: ($svc['title'] . ' par ' . $fullName . ', en Afrique francophone, en Europe et au Canada.'));
$pageCanonical = $svcUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@context' => 'https://schema.org', '@type' => 'Service',
        'name' => $svc['title'], 'serviceType' => $svc['title'],
        'description' => $svc['description'] ?? '', 'url' => $svcUrl,
        'areaServed'  => array_map(static fn(string $pays): array => ['@type' => 'Country', 'name' => $pays], fait('zones')),
        'provider'    => ['@id' => SITE_URL . '/#person'],
        'offers' => ['@type' => 'Offer', 'priceCurrency' => 'XOF', 'description' => $svc['price'] ?: 'Sur devis'],
    ],
    [
        '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',  'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $portfolioUrl . '/services/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $svc['title'], 'item' => $svcUrl],
        ],
    ],
];

if ($contentHtml) {
    $faqSchema = buildFaqSchema($contentHtml);
    if ($faqSchema) { $pageSchemas[] = $faqSchema; }
}

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/services/">Services</a><span class="sep">/</span><?= sanitize($svc['title']) ?></div>

  <section class="svc-hero"><div class="wrap">
    <div class="badge"><?= pv2_icon($svc['title']) ?></div>
    <h1><?= sanitize($svc['title']) ?></h1>
    <?php if ($svc['description'] ?? ''): ?><p><?= sanitize($svc['description']) ?></p><?php endif; ?>
    <div class="hero-cta">
      <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander un devis gratuit</a>
      <a href="/services/" class="btn btn-ghost">Tous les services</a>
    </div>
    <?php if ($svc['price'] ?? ''): ?><div class="svc-price-sm" style="margin-top:1.1rem">Tarif : <?= sanitize($svc['price']) ?></div><?php endif; ?>
  </div></section>

  <?php if (!empty($feats)): ?>
  <section class="sect"><div class="wrap">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">01</span> / Ce qui est inclus</span><h2>Une prestation complète.</h2></div>
    <ul class="inc-list rv"><?php foreach ($feats as $f): ?><li><?= sanitize($f) ?></li><?php endforeach; ?></ul>
  </div></section>
  <?php endif; ?>

  <?php if ($contentHtml): ?>
  <style>
  .svc-content{max-width:760px;margin:0 auto}
  .svc-content h2{font-size:1.6rem;margin:2.6rem 0 1rem;line-height:1.25;font-weight:700}
  .svc-content h3{font-size:1.25rem;margin:1.9rem 0 .7rem;font-weight:700}
  .svc-content p{margin:0 0 1.1rem;line-height:1.75}
  .svc-content ul,.svc-content ol{margin:0 0 1.2rem;padding-left:1.3rem;line-height:1.75}
  .svc-content li{margin:.35rem 0}
  .svc-content strong{font-weight:700}
  .svc-content a{color:#c8924a;text-decoration:underline}
  .svc-content img{max-width:100%;height:auto;border-radius:12px;margin:1.4rem 0}
  </style>
  <section class="sect"><div class="wrap">
    <div class="svc-content art-prose"><?= enhanceContentImages($contentHtml) ?></div>
  </div></section>
  <?php endif; ?>

  <?php if (empty($contentHtml)): ?>
  <section class="sect soft"><div class="wrap">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">02</span> / Méthode</span><h2>De l'idée à la mise en ligne, en 4 étapes.</h2></div>
    <div class="proc stg">
      <div class="step"><div class="sn">01</div><h4>Cadrage</h4><p>On clarifie le besoin, les objectifs et le budget. Devis transparent.</p></div>
      <div class="step"><div class="sn">02</div><h4>Design</h4><p>Maquettes et architecture validées avant le code.</p></div>
      <div class="step"><div class="sn">03</div><h4>Développement</h4><p>Code propre, testé, avec points d'avancement réguliers.</p></div>
      <div class="step"><div class="sn">04</div><h4>Lancement & suivi</h4><p>Mise en ligne, formation et maintenance.</p></div>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if (!empty($others)): ?>
  <section class="sect"><div class="wrap">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">03</span> / Autres services</span><h2>Explorez mes autres expertises.</h2></div>
    <div class="bento stg">
      <?php foreach (array_slice($others, 0, 6) as $o): $oslug = generateSlug($o['title']); ?>
        <a class="svc" href="/services/<?= $oslug ?>">
          <div class="ico"><?= pv2_icon($o['title']) ?></div>
          <h3><?= sanitize($o['title']) ?></h3>
          <p><?= sanitize($o['description'] ?? '') ?></p>
          <div class="arrow">En savoir plus</div>
        </a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Un projet <?= sanitize(frenchDePhrase($svc['title'])) ?> ?</h2>
    <p>Décrivez votre besoin, je reviens vite avec un devis gratuit et sans engagement.</p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
