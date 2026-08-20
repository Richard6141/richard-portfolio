<?php
// ============================================================
// data/digitalisation.php · Chargeur des pages "digitalisation d'entreprise"
//
// Cree le 20/08/2026. Deux pages par ville, sur deux intentions de
// recherche DIFFERENTES — c'est la condition pour que ces pages ne soient
// pas traitees comme des doorway pages :
//
//   1. le pilier    : "digitalisation entreprise {ville}" — informationnel
//                     et commercial, il repond a "par ou commencer".
//   2. le secteur   : "digitaliser {metier} {ville}" — transactionnel,
//                     ancre sur le secteur REELLEMENT dominant de la ville,
//                     tel que declare dans data/villes/{ville}.php.
//
// Digitaliser un negoce de coton a Parakou et une clinique a Abomey-Calavi
// n'ont presque rien en commun : flux differents, douleurs differentes,
// outils differents. La differenciation vient du couple ville x secteur,
// jamais d'un gabarit ou l'on remplace un nom de ville.
//
// Comme pour les villes : chaque fichier porte SON texte. Aucune phrase
// generique interpolee avec un nom de ville.
// ============================================================

declare(strict_types=1);

$dossier = __DIR__ . '/digitalisation';

// Ordre d'affichage sur la page index. Les villes beninoises d'abord :
// c'est la ou une presence locale reelle rend le contenu le plus credible.
$ordre = [
    'cotonou', 'abomey-calavi', 'porto-novo', 'parakou', 'bohicon', 'ouidah',
    'abidjan', 'lome', 'dakar',
];

$pages = [];

foreach ($ordre as $slug) {
    $chemin = $dossier . '/' . $slug . '.php';
    if (is_file($chemin)) {
        $pages[$slug] = require $chemin;
    }
}

// Filet : un fichier ajoute dans le dossier mais oublie dans $ordre reste
// servi plutot que de repondre 404 sans raison visible.
foreach (glob($dossier . '/*.php') ?: [] as $chemin) {
    $slug = basename($chemin, '.php');
    if (!isset($pages[$slug])) {
        $pages[$slug] = require $chemin;
    }
}

return $pages;
