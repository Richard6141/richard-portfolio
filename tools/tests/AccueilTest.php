<?php
declare(strict_types=1);

function test_accueil_compteurs_portent_leur_valeur_finale_dans_le_html(): void
{
    $src = (string) file_get_contents(racine('portfolio/templates/horizon.php'));
    preg_match_all('#class="ct" data-to="([^"]+)">(.*?)</span>#', $src, $m, PREG_SET_ORDER);
    assert_true(count($m) >= 5, 'compteurs introuvables');
    foreach ($m as [, $cible, $affiche]) {
        assert_same($cible, $affiche, 'le HTML doit afficher la valeur finale du compteur');
    }
}

function test_accueil_ga4_charge_par_le_partiel_commun(): void
{
    require_once racine('config/site.php');
    ob_start();
    include racine('portfolio/partials/tracking.php');
    $html = (string) ob_get_clean();
    assert_same(2, substr_count($html, GA4_ID), 'GA4 attendu dans tracking.php (chargeur + config)');
    $accueil = (string) file_get_contents(racine('portfolio/index.php'));
    assert_not_contains('googletagmanager', $accueil, 'le bloc GA4 de l\'accueil doit disparaître');
}

function test_accueil_aucune_dimension_og_image_inventee(): void
{
    foreach (['portfolio/index.php', 'portfolio/partials/pv2-head.php'] as $fichier) {
        assert_not_contains('og:image:width', (string) file_get_contents(racine($fichier)), $fichier);
    }
}
