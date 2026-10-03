<?php
// ============================================================
// polices.php · Polices auto-hébergées (vague 0B, 03/10/2026).
// Sora (titres) et Plus Jakarta Sans (texte), fichiers woff2 variables :
// un fichier latin par famille couvre toutes les graisses. On précharge
// ces deux fichiers, utilisés dès le premier écran. Plus aucun appel à
// fonts.googleapis.com : une connexion en moins, et rien ne part chez Google.
// ============================================================
$policesV = @filemtime(__DIR__ . '/../../assets/css/fonts.css') ?: '1';
?>
<link rel="preload" href="/assets/fonts/sora-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/assets/fonts/plus-jakarta-sans-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/css/fonts.css?v=<?= $policesV ?>">
