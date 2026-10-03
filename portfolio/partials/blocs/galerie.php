<?php /* Bloc « galerie » : captures d'un projet, images locales seulement, dimensions obligatoires. */ ?>
<section class="bloc bloc--galerie" data-reveal>
  <?= bloc_titre($b) ?>
  <div class="galerie">
    <?php foreach ($b['images'] ?? [] as $im):
      $src = (string) ($im['src'] ?? '');
      if (!preg_match('#^/(?:assets|uploads)/[A-Za-z0-9/_.-]+\.(?:webp|avif|jpe?g|png)$#', $src) || empty($im['largeur']) || empty($im['hauteur'])) { continue; } ?>
    <figure class="galerie__image">
      <img src="<?= htmlspecialchars($src, ENT_QUOTES) ?>" alt="<?= htmlspecialchars((string) ($im['alt'] ?? ''), ENT_QUOTES) ?>" width="<?= (int) $im['largeur'] ?>" height="<?= (int) $im['hauteur'] ?>" loading="lazy" decoding="async">
      <?php if (!empty($im['legende'])): ?><figcaption><?= bloc_texte((string) $im['legende']) ?></figcaption><?php endif; ?>
    </figure>
    <?php endforeach; ?>
  </div>
</section>
