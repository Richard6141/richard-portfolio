<?php // En-tête d'article (vague 1F, spec 5.5) : rubrique, H1, auteur, dates visibles alignées sur dateModified, « En bref ».
$publieIso = !empty($post['published_at']) ? date('Y-m-d', (int) strtotime((string) $post['published_at'])) : '';
$majIso    = blog_date_maj($post);
$bref      = trim((string) ($post['summary'] ?? ''));
?>
<div class="wrap art-head">
  <?php if (!empty($post['category'])): ?><span class="art-cat"><?= sanitize((string) $post['category']) ?></span><?php endif; ?>
  <h1><?= sanitize((string) $post['title']) ?></h1>
  <div class="art-meta">
    <span>Par <?= sanitize((string) $fullName) ?></span>
    <?php if ($publieIso !== ''): ?><span class="d"></span><span>Publié le <time datetime="<?= $publieIso ?>"><?= sanitize(registre_date_fr($publieIso)) ?></time></span><?php endif; ?>
    <?php if ($majIso !== ''): ?><span class="d"></span><span class="art-maj">Mis à jour le <time datetime="<?= $majIso ?>"><?= sanitize(registre_date_fr($majIso)) ?></time></span><?php endif; ?>
    <?php if (!empty($readingTime)): ?><span class="d"></span><span><?= (int) $readingTime ?> min de lecture</span><?php endif; ?>
  </div>
  <?php if ($bref !== ''): ?><p class="art-bref"><strong>En bref.</strong> <?= sanitize($bref) ?></p><?php endif; ?>
</div>
