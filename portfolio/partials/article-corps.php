<?php // Corps d'article (vague 1F) : texte de la base, puis boîte auteur (spec 5.5, règle 7).
?>
<div class="art-prose"><?= $articleHtml ?></div>
<?php include __DIR__ . '/boite-auteur.php';
