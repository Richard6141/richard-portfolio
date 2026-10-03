<?php /* Bloc « étapes » : frise numérotée de méthode. */ ?>
<section class="bloc bloc--etapes" data-reveal>
  <?= bloc_titre($b) ?>
  <ol class="etapes">
    <?php foreach ($b['items'] ?? [] as $i => $it): ?>
    <li class="etape" style="--i:<?= $i % 4 ?>">
      <span class="etape__num" aria-hidden="true"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
      <div class="etape__corps">
        <h3><?= bloc_texte((string) ($it['titre'] ?? '')) ?></h3>
        <?php if (!empty($it['duree'])): ?><p class="etape__duree"><?= bloc_texte((string) $it['duree']) ?></p><?php endif; ?>
        <p><?= bloc_texte((string) ($it['texte'] ?? '')) ?></p>
      </div>
    </li>
    <?php endforeach; ?>
  </ol>
</section>
