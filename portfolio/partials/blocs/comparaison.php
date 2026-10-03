<?php /* Bloc « comparaison » : critères en lignes, options en colonnes. */ ?>
<section class="bloc bloc--comparaison" data-reveal>
  <?= bloc_titre($b) ?>
  <div class="tableau-defilant" tabindex="0" role="region" aria-label="<?= htmlspecialchars((string) ($b['titre'] ?? 'Comparaison'), ENT_QUOTES) ?>">
    <table>
      <thead><tr><th scope="col">Critère</th><?php foreach ($b['options'] ?? [] as $o): ?><th scope="col"><?= bloc_texte((string) $o) ?></th><?php endforeach; ?></tr></thead>
      <tbody>
        <?php foreach ($b['criteres'] ?? [] as $c): ?>
        <tr><th scope="row"><?= bloc_texte((string) ($c['critere'] ?? '')) ?></th><?php foreach ($c['valeurs'] ?? [] as $v): ?><td><?= bloc_texte((string) $v) ?></td><?php endforeach; ?></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?php if (!empty($b['verdict'])): ?><p class="bloc__verdict"><?= bloc_texte((string) $b['verdict']) ?></p><?php endif; ?>
</section>
