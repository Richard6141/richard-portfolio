<?php
// ============================================================
// data/sujets.php · Registre generique « sujet x ville »
//
// Créé le 21/08/2026, en remplacement d'une organisation qui ne passait
// pas l'echelle. Avant, chaque sujet exigeait SON module complet :
//   - un dossier de données et son chargeur
//   - un gabarit PHP de ~200 lignes, quasi identique au precedent
//   - deux a quatre regles de reecriture dans .htaccess
//   - un bloc dedie dans le generateur de sitemap
// Soit cinq fichiers a modifier pour publier « Odoo a Cotonou ». Avec
// cinq sujets sur neuf villes, l'ensemble devenait ingerable et les
// gabarits divergeaient silencieusement les uns des autres.
//
// Desormais : publier un sujet dans une ville = deposer UN fichier dans
// data/sujets/{sujet}/{ville}.php. Route, index, maillage interne et
// sitemap se construisent seuls a partir de ce registre.
//
// Chaque sujet porte un _sujet.php decrivant le sujet lui-même (nom,
// libelle du fil d'Ariane, type de service pour le schema). Chaque
// fichier de ville porte SON texte : aucune phrase generique interpolee
// avec un nom de ville, sous peine de produire le duplicate content que
// Google traite en doorway page.
// ============================================================

declare(strict_types=1);

$racine = __DIR__ . '/sujets';
$sujets = [];

foreach (glob($racine . '/*', GLOB_ONLYDIR) ?: [] as $dossier) {
    $sujetSlug = basename($dossier);

    $meta = is_file($dossier . '/_sujet.php') ? require $dossier . '/_sujet.php' : [];
    $meta['slug'] = $sujetSlug;
    $meta['pages'] = [];

    foreach (glob($dossier . '/*.php') ?: [] as $fichier) {
        $villeSlug = basename($fichier, '.php');
        if ($villeSlug === '_sujet') {
            continue;
        }
        $page = require $fichier;
        $page['ville_slug'] = $page['ville_slug'] ?? $villeSlug;
        $page['sujet']      = $sujetSlug;
        // Date du fichier, reportee dans <lastmod> du sitemap (01/09/2026).
        // Sans elle Google n'a aucun signal de fraicheur sur ces pages.
        $page['_maj']       = filemtime($fichier) ?: null;
        $meta['pages'][$villeSlug] = $page;
    }

    if ($meta['pages']) {
        $sujets[$sujetSlug] = $meta;
    }
}

return $sujets;
