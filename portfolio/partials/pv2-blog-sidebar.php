<?php
// pv2-blog-sidebar.php, Colonne latérale blog (auteur, récents, catégories).
// Variables : $pdo, $userId, $profile, $fullName, $h_mailto.
$sideAvatar = ($profile['avatar_url'] ?? '') ? '/api/thumb.php?src=' . urlencode(preg_replace('/\.\.[\\/]/', '', $profile['avatar_url'])) . '&s=170' : '';
$sideBio = $profile['bio_short'] ?? "Développeur web, mobile & automatisation. J'aide les entreprises à gagner en visibilité et en efficacité.";

$sideRecent = [];
$sideCats = [];
try {
    $st = $pdo->prepare("SELECT title, slug, cover_image, published_at FROM blog_posts WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW()) ORDER BY published_at DESC LIMIT 5");
    $st->execute([$userId]);
    $sideRecent = $st->fetchAll();
    $st = $pdo->prepare("SELECT category, COUNT(*) AS n FROM blog_posts WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW()) AND category IS NOT NULL AND category <> '' GROUP BY category ORDER BY n DESC");
    $st->execute([$userId]);
    $sideCats = $st->fetchAll();
} catch (\Throwable $e) {}
?>
<aside class="blog-side">
  <div class="side-card side-author">
    <?php if ($sideAvatar): ?><img src="<?= sanitize($sideAvatar) ?>" alt="<?= sanitize($fullName) ?>">
    <?php else: ?><div class="ava"><?= sanitize(mb_strtoupper(mb_substr($profile['first_name'] ?? 'R', 0, 1) . mb_substr($profile['last_name'] ?? 'S', 0, 1))) ?></div><?php endif; ?>
    <b><?= sanitize($fullName) ?></b>
    <small><?= sanitize($profile['profession'] ?? 'Développeur web freelance') ?></small>
    <p><?= sanitize($sideBio) ?></p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn" style="width:100%;justify-content:center">Démarrer un projet</a>
  </div>

  <?php if (!empty($sideRecent)): ?>
  <div class="side-card side-recent">
    <h4>Articles récents</h4>
    <?php foreach ($sideRecent as $r): $ri = $r['cover_image'] ? '/uploads/' . sanitize($r['cover_image']) : ''; ?>
      <a href="/blog/<?= sanitize($r['slug']) ?>">
        <?php if ($ri): ?><img class="st" src="<?= $ri ?>" alt="" loading="lazy"><?php else: ?><span class="st"></span><?php endif; ?>
        <span><b><?= sanitize(mb_strimwidth($r['title'], 0, 60, '…')) ?></b><br><small><?= $r['published_at'] ? date('d/m/Y', strtotime($r['published_at'])) : '' ?></small></span>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <?php if (!empty($sideCats)): ?>
  <div class="side-card side-cats">
    <h4>Catégories</h4>
    <?php foreach ($sideCats as $c): ?>
      <a href="/blog/?cat=<?= urlencode($c['category']) ?>"><span><?= sanitize($c['category']) ?></span><span class="cnt"><?= (int)$c['n'] ?></span></a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</aside>
