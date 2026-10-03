<?php // Liens liés calculés par maillage_liens() ($groupes).
if ($groupes): ?>
<section class="liens-lies conteneur" aria-labelledby="liens-lies-titre">
  <h2 id="liens-lies-titre">Pour aller plus loin</h2>
  <div class="liens-lies__grille">
    <?php foreach ($groupes as $g): ?>
    <div class="liens-lies__groupe">
      <h3><?= sanitize($g['titre']) ?></h3>
      <ul><?php foreach ($g['liens'] as [$titre, $url]): ?><li><a href="<?= sanitize($url) ?>"><?= sanitize($titre) ?></a></li><?php endforeach; ?></ul>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>
