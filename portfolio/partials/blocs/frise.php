<?php /* Bloc « frise » : chronologie datée (histoires). */ ?>
<section class="bloc bloc--frise" data-reveal>
  <?= bloc_titre($b) ?>
  <ol class="frise">
    <?php foreach ($b['items'] ?? [] as $it): ?>
    <li class="frise__point">
      <span class="frise__date"><?= bloc_texte((string) ($it['date'] ?? '')) ?></span>
      <div><h3><?= bloc_texte((string) ($it['titre'] ?? '')) ?></h3><p><?= bloc_texte((string) ($it['texte'] ?? '')) ?></p></div>
    </li>
    <?php endforeach; ?>
  </ol>
</section>
