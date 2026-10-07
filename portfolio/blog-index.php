<?php
// ============================================================
// blog-index.php, Liste des articles (URL /blog/)
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';
exiger_base($pdo);

$perPage = 8;
$page = max(1, (int)($_GET['p'] ?? 1));
$cat  = trim((string)($_GET['cat'] ?? ''));
$offset = ($page - 1) * $perPage;

$where = "user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())";
$params = [$userId];
// Articles redirigés exclus dans la requête : total, pagination et cartes portent sur les articles visibles.
[$exclSql, $exclParams] = blog_exclusion_sql(blog_slugs_rediriges());
$where .= $exclSql;
$params = array_merge($params, $exclParams);
if ($cat !== '') { $where .= " AND category = ?"; $params[] = $cat; }

$total = (int) (function() use ($pdo, $where, $params) {
    $s = $pdo->prepare("SELECT COUNT(*) FROM blog_posts WHERE $where");
    $s->execute($params);
    return $s->fetchColumn();
})();
$totalPages = max(1, (int)ceil($total / $perPage));

$st = $pdo->prepare("SELECT title, slug, summary, cover_image, category, published_at, reading_time FROM blog_posts WHERE $where ORDER BY published_at DESC LIMIT $perPage OFFSET $offset");
$st->execute($params);
$posts = blog_sans_rediriges($st->fetchAll());

// sanitize($cat) retire ici le 20/08/2026 : pv2-head.php echappe deja $pageTitle,
// ce qui produisait un double-echappement ("&amp;amp;" pour une categorie
// contenant "&", par exemple "Automatisation & Scraping Web").
$pageTitle     = seoTitle(($cat !== '' ? $cat . ' · ' : '') . 'Blog : sites web, SEO, automatisation et IA en entreprise', $fullName);
$pageDesc      = seoDescription('Conseils pratiques pour créer un site web, être visible sur Google et dans les réponses de l\'IA, automatiser vos tâches et digitaliser votre entreprise.');
$pageCanonical = $portfolioUrl . '/blog/' . ($page > 1 ? '?p=' . $page : '');
$pageSchemas = [
    ['@context' => 'https://schema.org', '@type' => 'Blog', 'url' => $portfolioUrl . '/blog/', 'name' => 'Blog ' . $fullName],
    ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',    'item' => $portfolioUrl . '/blog/'],
    ]],
];

// Page editoriale : le titre .blog-hero h1 utilise Fraunces.
$pv2EditorialFonts = true;
include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap blog-hero">
    <h1>Ressources &amp; conseils</h1>
    <p>Articles pratiques sur le développement web, le SEO et la stratégie digitale pour faire croître votre activité<?= $cat !== '' ? ' (catégorie « ' . sanitize($cat) . ' »)' : '' ?>.</p>
    <div class="blog-search">
      <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
      <input type="search" id="blog-search-input" placeholder="Rechercher un article (titre, sujet...)" autocomplete="off">
    </div>
  </div>

  <div class="blog-layout">
    <div class="blog-main">
      <?php if (empty($posts)): ?>
        <p style="color:var(--muted);padding:2rem 0">Aucun article pour le moment. Revenez bientôt !</p>
      <?php else: ?>
        <p class="blog-empty" id="blog-empty">Aucun article ne correspond à votre recherche.</p>
        <div class="blog-grid" id="blog-grid">
          <?php foreach ($posts as $p): $img = $p['cover_image'] ? '/uploads/' . sanitize($p['cover_image']) : '';
            $searchKey = mb_strtolower(($p['title'] ?? '') . ' ' . ($p['summary'] ?? '') . ' ' . ($p['category'] ?? '')); ?>
            <a class="bcard" href="/blog/<?= sanitize($p['slug']) ?>" data-search="<?= sanitize($searchKey) ?>">
              <div class="bcard-thumb">
                <?php if ($img): ?><img src="<?= $img ?>" alt="<?= sanitize($p['title']) ?>" loading="lazy"><?php endif; ?>
                <?php if ($p['category']): ?><span class="bcard-cat"><?= sanitize($p['category']) ?></span><?php endif; ?>
              </div>
              <div class="bcard-body">
                <h3><?= sanitize($p['title']) ?></h3>
                <p><?= sanitize(mb_strimwidth($p['summary'] ?? '', 0, 120, '…')) ?></p>
                <div class="bcard-meta"><?= $p['published_at'] ? date('d/m/Y', strtotime($p['published_at'])) : '' ?><?= $p['reading_time'] ? ' · ' . (int)$p['reading_time'] . ' min' : '' ?></div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>

        <?php if ($totalPages > 1): ?>
        <nav class="pagination" aria-label="Pagination">
          <?php $base = '/blog/?' . ($cat !== '' ? 'cat=' . urlencode($cat) . '&' : ''); ?>
          <?php if ($page > 1): ?><a href="<?= $base ?>p=<?= $page - 1 ?>">‹</a><?php endif; ?>
          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $page): ?><span class="cur"><?= $i ?></span><?php else: ?><a href="<?= $base ?>p=<?= $i ?>"><?= $i ?></a><?php endif; ?>
          <?php endfor; ?>
          <?php if ($page < $totalPages): ?><a href="<?= $base ?>p=<?= $page + 1 ?>">›</a><?php endif; ?>
        </nav>
        <?php endif; ?>
      <?php endif; ?>
    </div>

    <?php include __DIR__ . '/partials/pv2-blog-sidebar.php'; ?>
  </div>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Un projet web ou une question ?</h2>
    <p>Décrivez votre besoin, je reviens vite avec un devis gratuit et sans engagement.</p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
