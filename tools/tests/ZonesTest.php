<?php
declare(strict_types=1);

// Page /zones/ refaite le 03/10/2026 à la demande de Richard : cartes de ville
// lisibles (pages liées dans la carte), 34 pays par région, nouvelle identité.

require_once racine('helpers/functions.php');

function test_zones_cartes_de_ville_et_pays_par_region(): void
{
    $r = http_local('/zones/');
    assert_same(200, $r['code']);
    $h = $r['corps'];
    assert_same(1, substr_count($h, '<h1'));
    assert_not_contains('class="zone-grid"', $h, 'ancienne grille qui coinçait les liens dans une colonne étroite');
    assert_not_contains('class="bento', $h);
    $villes = require racine('portfolio/data/villes.php');
    assert_same(count($villes), substr_count($h, '<article class="carte-ville carte-halo">'));
    foreach (pays_liste() as $p) {
        assert_contains(htmlspecialchars($p['nom'], ENT_QUOTES), $h, $p['nom']);
    }
    assert_contains('href="/integration-odoo-cotonou"', $h, 'pages liées de Cotonou dans sa carte');
    assert_not_contains("\u{2014}", $h);
}

function test_zones_title_et_meta_dans_les_bornes(): void
{
    $h = http_local('/zones/')['corps'];
    preg_match('#<title>(.*?)</title>#s', $h, $t);
    preg_match('#<meta name="description" content="([^"]*)"#', $h, $d);
    $lt = mb_strlen(html_entity_decode($t[1] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $ld = mb_strlen(html_entity_decode($d[1] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    assert_true($lt >= 50 && $lt <= 60, "title de {$lt} caractères");
    assert_true($ld >= 140 && $ld <= 155, "meta de {$ld} caractères");
}
