<?php /* Bloc « checklist » : liste à cocher (à retenir, vérifications). */ ?>
<section class="bloc bloc--checklist" data-reveal>
  <?= bloc_titre($b) ?>
  <ul class="liste-coches"><?php foreach ($b['items'] ?? [] as $it): ?><li><?= bloc_texte((string) $it) ?></li><?php endforeach; ?></ul>
</section>
