<?php /* Bloc « prose » : titre-question et paragraphes. */ ?>
<section class="bloc bloc--prose" data-reveal>
  <?= bloc_titre($b) ?>
  <?php foreach ($b['paragraphes'] ?? [] as $i => $p): ?>
  <p<?= $i === 0 ? ' class="bloc__chapeau"' : '' ?>><?= bloc_texte((string) $p) ?></p>
  <?php endforeach; ?>
</section>
