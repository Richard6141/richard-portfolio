<?php
// Section Blog
$stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE user_id = ? AND status = 'published' ORDER BY published_at DESC LIMIT 6");
$stmt->execute([$userId]);
$posts = $stmt->fetchAll();
if (empty($posts)) return;

// Préparer les données pour le lecteur JS
$postsForJs = array_map(function($p) {
    $safePath = preg_replace('/\.\.[\\/]/', '', $p['cover_image'] ?? '');
    return [
        'id'           => (int) $p['id'],
        'slug'         => $p['slug'] ?? '',
        'title'        => $p['title'],
        'content'      => $p['content'] ?? '',
        'summary'      => $p['summary'] ?? '',
        'cover_image'  => $safePath ? '/uploads/' . $safePath : '',
        'category'     => $p['category'] ?? '',
        'published_at' => $p['published_at'] ? date('d M Y', strtotime($p['published_at'])) : '',
        'reading_time' => (int) ($p['reading_time'] ?? 1),
        'tags'         => json_decode($p['tags'] ?? '[]', true) ?: [],
        'external_url' => $p['external_url'] ?? '',
    ];
}, $posts);

// Sidebar uniquement si 2 articles ou plus (inutile de répéter le même seul article)
$hasSidebar  = count($postsForJs) >= 2;
$sidebarPosts = $hasSidebar ? array_slice($postsForJs, 0, 4) : [];
?>

<script>(function(){ window._blogPosts = <?= json_encode($postsForJs, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>; })();</script>

<section class="section" id="blog">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Blog') ?></h2>
            <?php if ($sectionSubtitle): ?>
                <p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p>
            <?php endif; ?>
        </div>

        <div class="blog-with-sidebar <?= !$hasSidebar ? 'blog-no-sidebar' : '' ?>">

            <!-- Grille principale -->
            <div class="blog-main">
                <div class="blog-grid-v2">
                    <?php foreach ($postsForJs as $post): ?>
                    <a href="<?= $post['external_url'] ? sanitize($post['external_url']) : '/blog/' . sanitize($post['slug']) ?>"
                       class="blog-card-v2 anim"
                       data-post-id="<?= $post['id'] ?>"
                       <?= $post['external_url'] ? 'target="_blank" rel="noopener"' : '' ?>
                       aria-label="Lire : <?= sanitize($post['title']) ?>">

                        <!-- Image -->
                        <div class="blog-card-v2-img-wrap">
                            <?php if ($post['cover_image']): ?>
                                <img src="<?= sanitize($post['cover_image']) ?>"
                                     alt="<?= sanitize($post['title']) ?>"
                                     loading="lazy">
                            <?php else: ?>
                                <div class="blog-card-v2-img-placeholder"></div>
                            <?php endif; ?>
                        </div>

                        <!-- Corps -->
                        <div class="blog-card-v2-body">
                            <div class="blog-card-v2-meta">
                                <?php if ($post['category']): ?>
                                    <span class="blog-card-v2-cat"><?= sanitize($post['category']) ?></span>
                                <?php endif; ?>
                                <?php if ($post['published_at']): ?>
                                    <span class="blog-card-v2-date"><?= sanitize($post['published_at']) ?></span>
                                <?php endif; ?>
                            </div>
                            <h3 class="blog-card-v2-title"><?= sanitize($post['title']) ?></h3>
                            <?php if ($post['summary']): ?>
                                <p class="blog-card-v2-excerpt"><?= sanitize($post['summary']) ?></p>
                            <?php endif; ?>
                            <span class="blog-card-v2-cta">
                                Lire
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Sidebar (masquée si 1 seul article) -->
            <?php if ($hasSidebar): ?>
            <aside class="blog-sidebar" aria-label="Articles récents">
                <div class="blog-sidebar-inner">
                    <h3 class="blog-sidebar-heading">Articles récents</h3>
                    <ul class="blog-sidebar-list">
                        <?php foreach ($sidebarPosts as $sp): ?>
                        <li class="blog-sidebar-item">
                        <a href="/blog/<?= sanitize($sp['slug']) ?>"
                           class="blog-sidebar-link"
                           data-post-id="<?= $sp['id'] ?>"
                           aria-label="Lire : <?= sanitize($sp['title']) ?>">
                            <div class="blog-sidebar-thumb">
                                <?php if ($sp['cover_image']): ?>
                                    <img src="<?= sanitize($sp['cover_image']) ?>"
                                         alt="<?= sanitize($sp['title']) ?>"
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="blog-sidebar-thumb-placeholder"></div>
                                <?php endif; ?>
                            </div>
                            <div class="blog-sidebar-text">
                                <p class="blog-sidebar-title"><?= sanitize($sp['title']) ?></p>
                                <?php if ($sp['published_at']): ?>
                                    <span class="blog-sidebar-date"><?= sanitize($sp['published_at']) ?></span>
                                <?php endif; ?>
                            </div>
                        </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Conteneur du lecteur d'articles -->
<div id="article-reader-container"></div>
