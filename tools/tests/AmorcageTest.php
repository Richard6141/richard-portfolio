<?php
declare(strict_types=1);

// Vague 0B, Task 3 : les pages servies depuis des fichiers s'affichent sans base.

function test_amorcage_pages_de_fichiers_rendues_sans_base(): void
{
    foreach (['/developpeur-web-cotonou', '/formation-vibecoding', '/a-propos/', '/contact'] as $chemin) {
        $r = http_local($chemin);
        assert_same(200, $r['code'], $chemin);
        assert_not_contains('Fatal error', $r['corps'], $chemin);
        assert_same(1, substr_count($r['corps'], '<h1'), $chemin . ' : un seul H1 attendu');
        assert_contains('Cotonou', $r['corps'], $chemin);
    }
}

function test_amorcage_pages_de_base_repondent_503_proprement(): void
{
    // /services/ est servi par le registre depuis la vague 1A (data/hubs/services.php).
    foreach (['/blog/'] as $chemin) {
        $r = http_local($chemin);
        assert_same(503, $r['code'], $chemin);
        assert_not_contains('Fatal error', $r['corps'], $chemin);
    }
}

function test_amorcage_hub_services_repond_sans_base(): void
{
    $r = http_local('/services/');
    assert_same(200, $r['code'], '/services/');
    assert_same(1, substr_count($r['corps'], '<h1'), '/services/ : un seul H1 attendu');
}

function test_amorcage_revue_mode_maintenance_du_tableau_de_bord(): void
{
    // Revue finale 0B : l'ancien accueil honorait « maintenance » ; le nouveau non.
    // Rétabli dans l'amorçage commun, donc pour tout le site, en 503.
    require_once racine('helpers/functions.php');
    assert_same(null, page_maintenance(['is_maintenance' => 0]));
    assert_same(null, page_maintenance([]));
    $html = (string) page_maintenance(['is_maintenance' => 1, 'maintenance_message' => '<b>Retour</b> demain']);
    assert_contains('&lt;b&gt;Retour&lt;/b&gt; demain', $html);
    assert_contains('noindex', $html);
    $src = (string) file_get_contents(racine('portfolio/partials/pv2-bootstrap.php'));
    assert_contains('page_maintenance($profile)', $src);
    assert_contains('http_response_code(503)', $src);
}
