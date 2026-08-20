<?php
// Section Hero
$animatedTitles = json_decode($hero['title_animated'] ?? '[]', true) ?: [];
$avatarShape = $hero['avatar_shape'] ?? 'circle';
?>
<section class="hero-section" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <?php if ($profile['avatar_url']): ?>
            <?php $avatarSrc = sanitize(preg_replace('/\.\.[\\/]/', '', $profile['avatar_url'])); ?>
            <img src="/api/thumb.php?src=<?= urlencode($avatarSrc) ?>&s=240"
                 srcset="/api/thumb.php?src=<?= urlencode($avatarSrc) ?>&s=120 1x,
                         /api/thumb.php?src=<?= urlencode($avatarSrc) ?>&s=240 2x"
                 alt="Photo de <?= sanitize($fullName) ?>"
                 class="hero-avatar <?= sanitize($avatarShape) ?>"
                 width="120" height="120"
                 loading="eager"
                 fetchpriority="high"
                 decoding="async">
        <?php endif; ?>

        <?php
        // SEO : H1 = mots-clés métier (toujours, pour le référencement).
        // Le nom passe en sur-titre ; la tagline du profil (proposition de valeur) reste affichée sous le sous-titre.
        $heroHeadline = 'Développeur web, mobile & automatisation au Bénin';
        ?>
        <p class="hero-eyebrow anim"><?= sanitize($fullName) ?></p>
        <h1 class="hero-name anim"><?= sanitize($heroHeadline) ?></h1>

        <?php if (!empty($animatedTitles) && $appearance['typewriter_enabled']): ?>
            <p class="hero-title" id="typewriter-target" data-titles='<?= sanitize(json_encode($animatedTitles)) ?>'><?= sanitize($animatedTitles[0]) ?></p>
        <?php elseif ($profile['profession']): ?>
            <p class="hero-title"><?= sanitize($profile['profession']) ?></p>
        <?php endif; ?>

        <?php if (!empty($profile['tagline'])): ?>
            <p class="hero-tagline anim"><?= sanitize($profile['tagline']) ?></p>
        <?php endif; ?>

        <?php if ($profile['is_available'] && $profile['availability_text']): ?>
            <div class="hero-badge anim">
                <span class="hero-badge-dot"></span>
                <?= sanitize($profile['availability_text']) ?>
            </div>
        <?php endif; ?>

        <?php if ($profile['bio_short']): ?>
            <p class="hero-bio anim"><?= sanitize($profile['bio_short']) ?></p>
        <?php endif; ?>

        <div class="hero-actions anim">
            <?php if ($hero['cta_primary_text']): ?>
                <a href="<?= sanitize($hero['cta_primary_url'] ?? '#contact') ?>" class="btn btn-primary"><?= sanitize($hero['cta_primary_text']) ?></a>
            <?php endif; ?>
            <?php if ($hero['cta_secondary_text']): ?>
                <a href="<?= sanitize($hero['cta_secondary_url'] ?? '#projects') ?>" class="btn btn-outline"><?= sanitize($hero['cta_secondary_text']) ?></a>
            <?php endif; ?>
            <?php if ($appearance['header_show_cv'] && $profile['cv_url']): ?>
                <a href="/uploads/<?= sanitize($profile['cv_url']) ?>" target="_blank" class="btn btn-outline">Telecharger CV</a>
            <?php endif; ?>
        </div>

        <?php if (!empty($socialLinks)): ?>
            <div class="hero-social anim">
                <?php foreach ($socialLinks as $link): ?>
                    <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" title="<?= sanitize($link['label'] ?? $link['platform']) ?>"><?= getSocialIcon($link['platform'], 16) ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
