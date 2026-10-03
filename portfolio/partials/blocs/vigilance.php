<?php /* Bloc « vigilance » : encadré pour un fait contesté ou une limite. */ ?>
<aside class="bloc bloc--vigilance" data-reveal>
  <?= bloc_titre($b) ?>
  <p><?= bloc_texte((string) ($b['texte'] ?? '')) ?></p>
</aside>
