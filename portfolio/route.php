<?php
// ============================================================
// route.php · Resolveur des URL non reconnues par .htaccess
//
// Cree le 21/08/2026. Auparavant, publier un sujet dans une ville
// imposait d'ajouter des regles de reecriture dediees. Le serveur ne
// peut pas interroger le registre PHP : la seule facon d'avoir UNE
// route valable pour tous les sujets, presents et futurs, est de faire
// passer les URL inconnues par ce resolveur.
//
// Il consulte le registre data/sujets.php. Si le slug correspond a une
// page, il la rend ; sinon il renvoie un 404 franc, exactement comme
// avant. Le comportement 404 est donc preserve a l'identique, c'etait
// la condition pour ne pas reintroduire le soft-404 corrige le 20/08.
// ============================================================

declare(strict_types=1);

$slugDemande = preg_replace('/[^a-z0-9-]/', '', strtolower((string) ($_GET['p'] ?? '')));

if ($slugDemande === '') {
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}

$sujetsRegistre = require __DIR__ . '/data/sujets.php';

// Index slug -> [sujet, ville]. Construit a la volee : deposer un fichier
// dans data/sujets/{sujet}/{ville}.php suffit a publier la page.
$trouve = null;
foreach ($sujetsRegistre as $sujetSlug => $s) {
    foreach ($s['pages'] as $villeSlug => $pg) {
        if (($pg['slug'] ?? '') === $slugDemande) {
            $trouve = [$s, $pg];
            break 2;
        }
    }
}

if ($trouve === null) {
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}

[$sujet, $page] = $trouve;
require __DIR__ . '/sujet.php';
