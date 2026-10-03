<?php /* Bloc « cas » : cas d'usage par secteur (problème, solution, lien). */ ?>
<section class="bloc bloc--cas" data-reveal>
  <?= bloc_titre($b) ?>
  <div class="cartes-cas">
    <?php foreach ($b['items'] ?? [] as $i => $it): ?>
    <article class="carte-cas" style="--i:<?= $i % 3 ?>">
      <p class="carte-cas__secteur"><?= bloc_texte((string) ($it['secteur'] ?? '')) ?></p>
      <h3><?= bloc_texte((string) ($it['probleme'] ?? '')) ?></h3>
      <p><?= bloc_texte((string) ($it['solution'] ?? '')) ?></p>
      <?php if (!empty($it['lien']['url'])): ?><a class="lien-fleche" href="<?= htmlspecialchars((string) $it['lien']['url'], ENT_QUOTES) ?>"><?= bloc_texte((string) ($it['lien']['texte'] ?? 'En savoir plus')) ?></a><?php endif; ?>
    </article>
    <?php endforeach; ?>
  </div>
</section>
