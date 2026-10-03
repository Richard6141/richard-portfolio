<?php // Boîte auteur (spec 5.5, 10.2) : qui écrit, avec la phrase d'entité de la fiche de faits.
$lienAuteur = boite_auteur_lien();
$linkedin = '';
foreach ((array) fait('profils') as $u) { if (str_contains($u, 'linkedin.com')) { $linkedin = $u; } }
?>
<aside class="boite-auteur" aria-label="L'auteur">
  <img src="/assets/img/richard-salanon-400.webp" alt="<?= sanitize(fait('nom')) ?>" width="96" height="128" loading="lazy" decoding="async">
  <div>
    <p class="boite-auteur__nom"><a href="<?= sanitize($lienAuteur) ?>"><?= sanitize(fait('nom')) ?></a></p>
    <p class="boite-auteur__titre"><?= sanitize(fait('intitule')) ?></p>
    <p><?= sanitize(fait('phrase_entite')) ?></p>
    <?php if ($linkedin): ?><a class="lien-fleche" href="<?= sanitize($linkedin) ?>" rel="noopener" target="_blank">Profil LinkedIn<?= icone('arrow-up-right', 16) ?></a><?php endif; ?>
  </div>
</aside>
