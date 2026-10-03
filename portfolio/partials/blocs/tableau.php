<?php /* Bloc « tableau » : légende, en-têtes, lignes ; défile sur mobile. */ ?>
<section class="bloc bloc--tableau" data-reveal>
  <?= bloc_titre($b) ?>
  <div class="tableau-defilant" tabindex="0" role="region" aria-label="<?= htmlspecialchars((string) ($b['legende'] ?? $b['titre'] ?? 'Tableau'), ENT_QUOTES) ?>">
    <table>
      <?php if (!empty($b['legende'])): ?><caption><?= bloc_texte((string) $b['legende']) ?></caption><?php endif; ?>
      <thead><tr><?php foreach ($b['entetes'] ?? [] as $e): ?><th scope="col"><?= bloc_texte((string) $e) ?></th><?php endforeach; ?></tr></thead>
      <tbody>
        <?php foreach ($b['lignes'] ?? [] as $ligne): ?>
        <tr><?php foreach ($ligne as $j => $cellule): ?><?= $j === 0 ? '<th scope="row">' : '<td>' ?><?= bloc_texte((string) $cellule) ?><?= $j === 0 ? '</th>' : '</td>' ?><?php endforeach; ?></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>
