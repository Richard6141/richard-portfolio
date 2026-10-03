<?php /* Bloc « leçon » : bloc sombre de conclusion. */ ?>
<section class="bloc bloc--lecon" data-reveal>
  <?= bloc_titre($b) ?>
  <p><?= bloc_texte((string) ($b['texte'] ?? '')) ?></p>
</section>
