<?php
// ============================================================
// formations.php · Hub du catalogue de formations : /formations/
//
// Cree le 05/09/2026 avec un catalogue code en dur de neuf formations.
// Vague 1B (05/10/2026) : le hub redige dans data/hubs/formations.php et les
// 60 fiches du registre le remplacent ; l'ancien catalogue (et sa grille
// tarifaire non confirmee) est retire. Sans hub publie : 404 franc.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

if (($page = route_resoudre('formations/')) !== null) {
    require __DIR__ . '/registre-hub.php';
    exit;
}
route_404();
