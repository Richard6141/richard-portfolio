<?php /* Bloc « chiffres » : un fait par carte, avec sa source. */ ?>
<section class="bloc bloc--chiffres" data-reveal>
  <?= bloc_titre($b) ?>
  <ul class="cartes-chiffres">
    <?php foreach ($b['items'] ?? [] as $i => $it): ?>
    <li class="carte-chiffre" style="--i:<?= $i % 3 ?>">
      <strong class="carte-chiffre__valeur"><?= bloc_texte((string) ($it['valeur'] ?? '')) ?></strong>
      <span class="carte-chiffre__libelle"><?= bloc_texte((string) ($it['libelle'] ?? '')) ?></span>
      <?php if (!empty($it['source'])): ?>
      <span class="carte-chiffre__source">Source : <?php if (!empty($it['url'])): ?><a href="<?= htmlspecialchars((string) $it['url'], ENT_QUOTES) ?>" rel="noopener" target="_blank"><?= bloc_texte((string) $it['source']) ?></a><?php else: ?><?= bloc_texte((string) $it['source']) ?><?php endif; ?></span>
      <?php endif; ?>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
