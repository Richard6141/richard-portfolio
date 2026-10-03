<?php
// ============================================================
// portfolio/article.php : page article de blog (design pv2)
// URL : /blog/{slug}  (rewrite .htaccess)
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/icons.php';
redirection_appliquer((string) (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'));

try { $pdo = getPDO(); } catch (Throwable $e) { $pdo = null; }
exiger_base($pdo);

$stmt = $pdo->query("SELECT id, slug FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
$user = $stmt->fetch();
if (!$user) { header('Location: /'); exit; }
$userId = (int) $user['id'];

$articleSlug = preg_replace('/[^a-z0-9_-]/', '', strtolower(trim($_GET['slug'] ?? '')));
if ($articleSlug === '') { http_response_code(404); include __DIR__ . '/../404.php'; exit; }

$stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE user_id = ? AND slug = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())");
$stmt->execute([$userId, $articleSlug]);
$post = $stmt->fetch();
if (!$post) {
    // Slugs generes avant la correction du 20/08/2026 : les accents etaient
    // SUPPRIMES au lieu d'etre translitteres ("coute" -> "cote", "etape" -> "tape").
    // On redirige en 301 vers le slug corrige, mais seulement s'il existe
    // reellement en base. La table reste donc totalement inerte tant que les
    // slugs n'ont pas ete corriges dans le dashboard : aucun ordre de
    // deploiement a respecter, et aucun risque de rediriger vers un 404.
    $legacySlugs = [
        'combien-cote-un-site-web-professionnel-en-2026-guide-complet'
            => 'combien-coute-un-site-web-professionnel-en-2026-guide-complet',
        'comment-digitaliser-son-entreprise-le-guide-tape-par-tape'
            => 'comment-digitaliser-son-entreprise-le-guide-etape-par-etape',
        'quest-ce-que-la-digitalisation-dentreprise-dfinition-et-guide-pour-bien-dmarrer'
            => 'qu-est-ce-que-la-digitalisation-d-entreprise-definition-et-guide-pour-bien-demarrer',
        'application-mobile-ou-site-web-que-dvelopper-en-premier'
            => 'application-mobile-ou-site-web-que-developper-en-premier',
    ];
    if (isset($legacySlugs[$articleSlug])) {
        $target = $legacySlugs[$articleSlug];
        $stmt = $pdo->prepare("SELECT 1 FROM blog_posts WHERE user_id = ? AND slug = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())");
        $stmt->execute([$userId, $target]);
        if ($stmt->fetchColumn()) {
            header('Location: /blog/' . $target, true, 301);
            exit;
        }
    }
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}
$post['tags'] = json_decode($post['tags'] ?? '[]', true) ?: [];

$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch() ?: [];

$stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
$stmt->execute([$userId]);
$contactInfo = $stmt->fetch() ?: [];

$stmt = $pdo->prepare("SELECT * FROM social_links WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$socialLinks = $stmt->fetchAll();

$stmt = $pdo->prepare("
    SELECT title, slug, summary, cover_image, category, published_at, reading_time
    FROM blog_posts
    WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW()) AND id != ?
    ORDER BY (category IS NOT NULL AND category = ?) DESC, published_at DESC
    LIMIT 3
");
$stmt->execute([$userId, $post['id'], $post['category'] ?? '']);
$related = $stmt->fetchAll();

// Variables marque (pour header/footer partials)
$fullName     = trim(($profile['first_name'] ?? '') . ' ' . ($profile['last_name'] ?? '')) ?: $user['slug'];
$portfolioUrl = SITE_URL;
$pageUrl      = $portfolioUrl . '/blog/' . $post['slug'];
$h_email = $contactInfo['email_public'] ?? '';
$h_phone = $contactInfo['phone'] ?? '';
$h_city  = fait('ville'); // fiche de faits (03/10/2026), plus contact_info.city
$h_mailto = $h_email ? 'mailto:' . rawurlencode($h_email) . '?subject=' . rawurlencode('Demande de devis') : '/#contact';
$h_logo = siteLogoUrl();

$coverUrl = '';
if ($post['cover_image']) {
    $coverUrl = $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $post['cover_image']);
} elseif ($profile['avatar_url'] ?? '') {
    $coverUrl = $portfolioUrl . '/uploads/' . $profile['avatar_url'];
}
$publishedIso = $post['published_at'] ? date('c', strtotime($post['published_at'])) : '';
$publishedFr  = $post['published_at'] ? date('d/m/Y', strtotime($post['published_at'])) : '';

// dateModified, corrige le 20/08/2026.
// updated_at est la date reelle d'ecriture en base. Sur un article dont
// published_at a ete antidate ou programme, updated_at est ANTERIEUR a la date
// de publication : 19 des 22 articles annoncaient ainsi une modification
// anterieure a leur propre publication (schema incoherent, mauvais signal de
// fraicheur). On ne descend donc jamais sous la date de publication.
$modifiedTs = $post['updated_at'] ? strtotime($post['updated_at']) : 0;
$publishedTs = $post['published_at'] ? strtotime($post['published_at']) : 0;
$modifiedIso = max($modifiedTs, $publishedTs) ? date('c', max($modifiedTs, $publishedTs)) : '';
$readingTime  = (int) ($post['reading_time'] ?? 0);

// SEO + schémas
$pageTitle     = seoTitle($post['title'], $fullName);
$pageDesc      = seoDescription($post['summary'] ?: ($post['content'] ?? ''));
$pageCanonical = $pageUrl;
$ogImage       = $coverUrl;
$ogType        = 'article';
$ogPublishedTime = $publishedIso;
$ogModifiedTime  = $modifiedIso;
$ogSection       = $post['category'] ?? '';

$blogPosting = [
    '@context' => 'https://schema.org', '@type' => 'BlogPosting',
    'headline' => $post['title'], 'url' => $pageUrl,
    'description' => $post['summary'] ?: mb_substr(strip_tags($post['content'] ?? ''), 0, 300),
    // @id : relie l'auteur et l'editeur aux entites declarees sur l'accueil,
    // au lieu de recreer deux entites anonymes a chaque article (20/08/2026).
    'author'    => ['@id' => $portfolioUrl . '/#person'],
    'publisher' => ['@id' => $portfolioUrl . '/#person'],
    'isPartOf' => ['@id' => $portfolioUrl . '/#website'],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $pageUrl],
];
if ($publishedIso) $blogPosting['datePublished'] = $publishedIso;
if ($modifiedIso) $blogPosting['dateModified'] = $modifiedIso;
if ($coverUrl) $blogPosting['image'] = $coverUrl;
if ($post['category']) $blogPosting['articleSection'] = $post['category'];
if (!empty($post['tags'])) $blogPosting['keywords'] = implode(', ', $post['tags']);

$pageSchemas = [
    $blogPosting,
    ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',    'item' => $portfolioUrl . '/blog/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $pageUrl],
    ]],
];

// FAQPage : généré automatiquement si l'article contient une section FAQ (rich snippets)
$faqSchema = buildFaqSchema($post['content'] ?? '');
if ($faqSchema) {
    $pageSchemas[] = $faqSchema;
}

// HowTo : généré automatiquement si l'article décrit une séquence d'étapes
$howToSchema = buildHowToSchema($post['content'] ?? '', $post['title'] ?? '');
if ($howToSchema) {
    $pageSchemas[] = $howToSchema;
}

// Core Web Vitals : images du contenu en lazy-load + decoding async
$articleHtml = enhanceContentImages($post['content'] ?: '<p>Contenu à venir.</p>');

$shareUrl = rawurlencode($pageUrl);
$shareTxt = rawurlencode($post['title']);

// Page editoriale : charge en plus Fraunces et Lora (.art-head, .art-prose).
$pv2EditorialFonts = true;
include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/blog/">Blog</a><span class="sep">/</span><?= sanitize(mb_strimwidth($post['title'], 0, 50, '…')) ?></div>

  <article>
    <div class="wrap art-head">
      <?php if ($post['category']): ?><span class="art-cat"><?= sanitize($post['category']) ?></span><?php endif; ?>
      <h1><?= sanitize($post['title']) ?></h1>
      <div class="art-meta">
        <span>Par <?= sanitize($fullName) ?></span>
        <?php if ($publishedFr): ?><span class="d"></span><span><?= $publishedFr ?></span><?php endif; ?>
        <?php if ($readingTime): ?><span class="d"></span><span><?= $readingTime ?> min de lecture</span><?php endif; ?>
      </div>
    </div>

    <?php if ($coverUrl): ?>
    <div class="wrap"><div class="art-cover"><img src="<?= sanitize($coverUrl) ?>" alt="<?= sanitize($post['title']) ?><?= $post['category'] ? ' - ' . sanitize($post['category']) : '' ?>" width="1200" height="630" fetchpriority="high" decoding="async"></div></div>
    <?php endif; ?>

    <div class="art-layout">
      <div class="blog-main">
        <div class="art-prose"><?= $articleHtml ?></div>

        <?php if (!empty($post['tags'])): ?>
        <div class="art-tags"><?php foreach ($post['tags'] as $tg): ?><span>#<?= sanitize($tg) ?></span><?php endforeach; ?></div>
        <?php endif; ?>

        <div class="art-share">
          <b>Cet article vous a été utile ? Partagez-le !</b>
          <a class="s-li" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= $shareUrl ?>" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 10v7M7 7v.01M11 17v-4a2 2 0 0 1 4 0v4"/></svg>LinkedIn</a>
          <a class="s-fb" href="https://www.facebook.com/sharer/sharer.php?u=<?= $shareUrl ?>" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 8h-2a2 2 0 0 0-2 2v10M8 13h6"/></svg>Facebook</a>
          <a class="s-x" href="https://twitter.com/intent/tweet?url=<?= $shareUrl ?>&text=<?= $shareTxt ?>" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4l16 16M20 4 4 20"/></svg>X</a>
          <a class="s-wa" href="https://wa.me/?text=<?= $shareTxt ?>%20<?= $shareUrl ?>" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 11.5a8 8 0 0 1-11.8 7L4 19.5l1.1-4A8 8 0 1 1 20 11.5Z"/></svg>WhatsApp</a>
          <button type="button" class="s-copy" onclick="navigator.clipboard.writeText('<?= sanitize($pageUrl) ?>');this.innerHTML='✓ Copié';"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="11" height="11" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>Copier le lien</button>
        </div>
      </div>

      <?php include __DIR__ . '/partials/pv2-blog-sidebar.php'; ?>
    </div>
  </article>

  <?php if (!empty($related)): ?>
  <section class="sect soft">
    <div class="wrap">
      <div class="sect-head rv"><span class="mono"><span class="tag-num">·</span> À lire aussi</span><h2>Articles liés.</h2></div>
      <div class="rel-grid stg">
        <?php foreach ($related as $r):
          $rImg = $r['cover_image'] ? '/uploads/' . sanitize($r['cover_image']) : '';
        ?>
          <a class="rel" href="/blog/<?= sanitize($r['slug']) ?>">
            <div class="rel-thumb"><?php if ($rImg): ?><img src="<?= $rImg ?>" alt="<?= sanitize($r['title']) ?>" loading="lazy"><?php endif; ?></div>
            <div class="rel-body">
              <?php if ($r['category']): ?><span class="rc"><?= sanitize($r['category']) ?></span><?php endif; ?>
              <h3><?= sanitize($r['title']) ?></h3>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Un projet web ou une question ?</h2>
    <p>Parlons-en. Décrivez votre besoin, je reviens vite avec un devis gratuit et sans engagement.</p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
