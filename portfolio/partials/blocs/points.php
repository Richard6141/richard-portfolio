<?php /* Bloc « points » : cartes titrées (avantages, critères, usages). */ ?>
<section class="bloc bloc--points" data-reveal>
  <?= bloc_titre($b) ?>
  <?php if (!empty($b['intro'])): ?><p class="bloc__chapeau"><?= bloc_texte((string) $b['intro']) ?></p><?php endif; ?>
  <ul class="cartes-points">
    <?php foreach ($b['items'] ?? [] as $i => $it): ?>
    <li class="carte-point" style="--i:<?= $i % 3 ?>">
      <h3><?= bloc_texte((string) ($it['titre'] ?? '')) ?></h3>
      <p><?= bloc_texte((string) ($it['texte'] ?? '')) ?></p>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
