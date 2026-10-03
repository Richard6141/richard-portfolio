<?php // Sommaire collant : titres des blocs, FAQ, sources (liens d'ancre, utiles sans JavaScript).
$entrees = [];
foreach ($rp['sections'] as $b) { if (!empty($b['titre'])) { $entrees[] = [bloc_ancre((string) $b['titre']), (string) $b['titre']]; } }
if (!empty($rp['programme'])) { $entrees[] = [bloc_ancre('Programme détaillé'), 'Programme détaillé']; }
if (!empty($rp['faq'])) { $entrees[] = [bloc_ancre('Questions fréquentes'), 'Questions fréquentes']; }
if (!empty($rp['sources'])) { $entrees[] = [bloc_ancre('Sources'), 'Sources']; }
if (count($entrees) >= 3): ?>
<nav class="sommaire" aria-label="Sommaire">
  <p class="sommaire__titre">Sommaire</p>
  <ol><?php foreach ($entrees as [$id, $titre]): ?><li><a href="#<?= sanitize($id) ?>"><?= bloc_texte($titre) ?></a></li><?php endforeach; ?></ol>
</nav>
<?php endif; ?>
