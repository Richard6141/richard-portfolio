<?php
// ============================================================
// route.php · Routeur des URL sans règle dédiée dans .htaccess (vague 0C).
// Ordre : pages de registre publiées, pages historiques du registre « sujets »
// (un seul segment), 404 franc. Les redirections actives passent en premier.
// Historique : créé le 21/08/2026 pour servir data/sujets.php sans règle par sujet ;
// le 404 franc (pas de soft-404, corrigé le 20/08/2026) est conservé.
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/../helpers/functions.php';

$chemin = (string) ($_GET['p'] ?? '');
if (!preg_match('#^[a-z0-9-]+(?:/[a-z0-9-]+){0,3}/?$#', $chemin)) {
    route_404();
}

if (($page = route_resoudre($chemin)) !== null) {
    require __DIR__ . '/partials/pv2-bootstrap.php';
    require __DIR__ . '/' . (in_array($page['type'], ['hub', 'domaine'], true) ? 'registre-hub.php' : 'registre.php');
    exit;
}

// Pages historiques (data/sujets/) : un seul segment.
if (!preg_match('#^[a-z0-9-]+$#', $chemin)) {
    route_404();
}
$slugDemande    = $chemin;
$sujetsRegistre = require __DIR__ . '/data/sujets.php';
$trouve = null;
foreach ($sujetsRegistre as $s) {
    foreach ($s['pages'] as $pg) {
        if (($pg['slug'] ?? '') === $slugDemande) {
            $trouve = [$s, $pg];
            break 2;
        }
    }
}
if ($trouve === null) {
    route_404();
}
[$sujet, $page] = $trouve;
require __DIR__ . '/sujet.php';
