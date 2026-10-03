<?php /* Bloc « programme » : programme d'une formation, un <details> par jour (spec 10.2). */ ?>
<section class="bloc bloc--programme" data-reveal>
  <?= bloc_titre($b) ?>
  <?php foreach ($b['jours'] ?? [] as $i => $j): ?>
  <details class="programme__jour"<?= $i === 0 ? ' open' : '' ?>>
    <summary><span><?= bloc_texte((string) ($j['titre'] ?? '')) ?></span><?php if (!empty($j['duree'])): ?><small><?= bloc_texte((string) $j['duree']) ?></small><?php endif; ?></summary>
    <ul class="liste-coches">
      <?php foreach ($j['points'] ?? [] as $pt): ?><li><?= bloc_texte((string) $pt) ?></li><?php endforeach; ?>
    </ul>
  </details>
  <?php endforeach; ?>
</section>
