<?php /* Bloc « prix » : offres de départ, devise, ce qui fait varier le prix. */ ?>
<section class="bloc bloc--prix" data-reveal>
  <?= bloc_titre($b) ?>
  <?php if (!empty($b['intro'])): ?><p class="bloc__chapeau"><?= bloc_texte((string) $b['intro']) ?></p><?php endif; ?>
  <div class="cartes-prix">
    <?php foreach ($b['items'] ?? [] as $i => $it): ?>
    <article class="carte-prix" style="--i:<?= $i % 3 ?>">
      <h3><?= bloc_texte((string) ($it['offre'] ?? '')) ?></h3>
      <p class="carte-prix__montant"><?= bloc_texte((string) ($it['prix'] ?? 'Sur devis')) ?></p>
      <?php if (!empty($it['inclus'])): ?>
      <ul class="liste-coches"><?php foreach ($it['inclus'] as $inc): ?><li><?= bloc_texte((string) $inc) ?></li><?php endforeach; ?></ul>
      <?php endif; ?>
    </article>
    <?php endforeach; ?>
  </div>
  <?php if (!empty($b['variations'])): ?>
  <h3 class="bloc__sous-titre">Ce qui fait varier le prix</h3>
  <ul class="liste-puces"><?php foreach ($b['variations'] as $v): ?><li><?= bloc_texte((string) $v) ?></li><?php endforeach; ?></ul>
  <?php endif; ?>
</section>
