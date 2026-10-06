<?php // Fil d'Ariane et hero de sous-page d'une page de registre ($rp, $miettes).
$etiquette = REGISTRE_ETIQUETTES[$rp['type']] ?? '';
if ($rp['type'] === 'histoire' && ($rp['relation'] ?? '') === 'externe') { $etiquette = 'Histoire'; }
?>
<nav class="crumb wrap" aria-label="Fil d'Ariane">
  <?php foreach ($miettes as $i => [$nom, $chemin]): ?>
    <?php if ($i > 0): ?><span class="sep" aria-hidden="true">/</span><?php endif; ?>
    <?php if ($i === count($miettes) - 1): ?><span aria-current="page" title="<?= sanitize($nom) ?>"><?= sanitize($nom) ?></span>
    <?php else: ?><a href="<?= sanitize($chemin) ?>" title="<?= sanitize($nom) ?>"><?= sanitize($nom) ?></a><?php endif; ?>
  <?php endforeach; ?>
</nav>
<div class="registre-hero">
  <div class="registre-hero__grille conteneur">
    <div>
      <?php if ($etiquette !== ''): ?><span class="eyebrow"><?= $rp['type'] === 'pays' ? drapeau($rp['slug']) : '' ?><?= sanitize($etiquette) ?></span><?php endif; ?>
      <h1><?= registre_titre_html((string) $rp['titre']) ?></h1>
      <p class="registre-hero__bref"><strong>En bref.</strong> <?= bloc_texte((string) $rp['en_bref']) ?></p>
      <?php if ($rp['type'] === 'histoire' && ($rp['relation'] ?? '') === 'sous-traitance'): ?><p class="registre-hero__mention">Réalisé en sous-traitance pour Digital Développement.</p><?php endif; ?>
      <?php if ($rp['type'] === 'histoire' && ($rp['relation'] ?? '') === 'externe'): ?><p class="registre-hero__mention">Cette entreprise n'est pas un client : histoire publique, faits sourcés.</p><?php endif; ?>
      <p class="registre-hero__maj">Mis à jour le <time datetime="<?= sanitize($rp['maj']) ?>"><?= sanitize(registre_date_fr($rp['maj'])) ?></time></p>
    </div>
    <?php if (!empty($rp['faits_hero'])): ?>
    <aside class="panneau-faits" aria-label="L'essentiel">
      <dl><?php foreach ($rp['faits_hero'] as $f): ?><div><dt><?= sanitize((string) $f['l']) ?></dt><dd><?= sanitize((string) $f['v']) ?></dd></div><?php endforeach; ?></dl>
    </aside>
    <?php endif; ?>
  </div>
</div>
