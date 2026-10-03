<?php
declare(strict_types=1);

// Page /realisations/ refaite le 03/10/2026 : grille unique filtrable, projets
// clients avec mention de sous-traitance, visuels de remplacement, base facultative.

require_once racine('helpers/functions.php');

function test_realisations_servie_sans_base_avec_les_projets_clients(): void
{
    $r = http_local('/realisations/');
    assert_same(200, $r['code'], 'plus de 503 sans base : les projets clients restent visibles');
    $h = $r['corps'];
    $clients = require racine('portfolio/data/projets-clients.php');
    assert_same(count($clients), substr_count($h, 'class="projet projet--client'));
    $sousTraites = count(array_filter($clients, static fn(array $c): bool => $c['relation'] === 'sous-traitance'));
    assert_same($sousTraites, substr_count($h, 'Réalisé en sous-traitance pour Digital Développement'));
    assert_not_contains('QueenK', $h, 'pas sans l\'accord du client');
    assert_same(1, substr_count($h, '<h1'));
    assert_same(4, substr_count($h, 'data-filtre="'));
    assert_not_contains("\u{2014}", $h);
    preg_match('#<title>(.*?)</title>#s', $h, $t);
    preg_match('#<meta name="description" content="([^"]*)"#', $h, $d);
    $lt = mb_strlen(html_entity_decode($t[1] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $ld = mb_strlen(html_entity_decode($d[1] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    assert_true($lt >= 50 && $lt <= 60, "title de {$lt} caractères");
    assert_true($ld >= 140 && $ld <= 155, "meta de {$ld} caractères");
}

function test_realisations_projets_en_base_visuel_de_remplacement(): void
{
    require_once racine('helpers/blocs.php');
    $projets = [
        ['slug' => 'oba', 'title' => 'OBA Production', 'category' => 'Web', 'year' => '2024', 'image_url' => 'a.webp', 'description_short' => 'Site.', 'technologies' => '["PHP"]'],
        ['slug' => 'api-x', 'title' => 'API Découpage', 'category' => 'API', 'year' => '2024', 'image_url' => '', 'description_short' => 'API <b>REST</b>.', 'technologies' => ''],
    ];
    $clientsProjets = [];
    $logos = [];
    ob_start();
    include racine('portfolio/templates/realisations.php');
    $h = (string) ob_get_clean();
    assert_contains('href="/realisations/api-x"', $h);
    assert_contains('data-famille="integrations"', $h);
    assert_contains('projet__monogramme', $h, 'monogramme quand la capture manque');
    assert_contains('API &lt;b&gt;REST&lt;/b&gt;.', $h);
}
