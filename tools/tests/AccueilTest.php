<?php
declare(strict_types=1);

// Accueil : vague 0A (compteurs, GA4, og:image) puis vague 0B (nouveau gabarit).

function test_accueil_compteurs_portent_leur_valeur_finale_dans_le_html(): void
{
    // Le gabarit produit ses compteurs en boucle : on lit donc le rendu.
    $sources = [
        'rendu de /'                         => http_local('/')['corps'],
        'portfolio/partials/accueil-flux.php' => (string) file_get_contents(racine('portfolio/partials/accueil-flux.php')),
    ];
    foreach ($sources as $nom => $html) {
        preg_match_all('#class="ct" data-to="([^"]+)">(.*?)</span>#', $html, $m, PREG_SET_ORDER);
        assert_true(count($m) >= 3, "compteurs introuvables dans {$nom}");
        foreach ($m as [, $cible, $affiche]) {
            assert_same($cible, $affiche, "{$nom} : le HTML doit afficher la valeur finale du compteur");
        }
    }
}

function test_accueil_ga4_charge_par_le_partiel_commun(): void
{
    require_once racine('config/site.php');
    ob_start();
    include racine('portfolio/partials/tracking.php');
    $html = (string) ob_get_clean();
    assert_same(2, substr_count($html, GA4_ID), 'GA4 attendu dans tracking.php (chargeur + config)');
    assert_not_contains('googletagmanager', (string) file_get_contents(racine('portfolio/accueil.php')));
}

function test_accueil_aucune_dimension_og_image_inventee(): void
{
    foreach (['portfolio/accueil.php', 'portfolio/partials/pv2-head.php'] as $fichier) {
        assert_not_contains('og:image:width', (string) file_get_contents(racine($fichier)), $fichier);
    }
}

function test_accueil_sections_dans_l_ordre_de_la_spec(): void
{
    $src = (string) file_get_contents(racine('portfolio/templates/accueil.php'));
    $ordre = ['top', 'confiance', 'qui', 'services', 'formations', 'pays', 'methode', 'formats', 'faq', 'contact'];
    $positions = [];
    foreach ($ordre as $id) {
        $p = strpos($src, 'id="' . $id . '"');
        assert_true($p !== false, "section absente : #{$id}");
        $positions[] = $p;
    }
    $tri = $positions;
    sort($tri);
    assert_same($tri, $positions, 'sections dans le désordre');
}

function test_accueil_rendu_local_sans_base(): void
{
    $r = http_local('/');
    assert_same(200, $r['code']);
    assert_not_contains('Fatal error', $r['corps']);
    assert_not_contains('Warning</b>', $r['corps']);
    assert_same(1, substr_count($r['corps'], '<h1'));
    assert_same(1, substr_count($r['corps'], 'application/ld+json'));
    assert_contains('/assets/img/carte-pays.svg', $r['corps']);
    assert_contains('/assets/img/clients/', $r['corps']);
    assert_contains('/assets/img/richard-salanon-800.webp', $r['corps']);
    assert_not_contains('Vérifié', $r['corps'], 'aucun badge de vérification que rien ne prouve');
    assert_contains('FAQPage', $r['corps']);
}

function test_accueil_title_et_meta_dans_les_bornes(): void
{
    $r = http_local('/');
    preg_match('#<title>(.*?)</title>#s', $r['corps'], $t);
    preg_match('#<meta name="description" content="([^"]*)"#', $r['corps'], $d);
    $lt = mb_strlen(html_entity_decode($t[1] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $ld = mb_strlen(html_entity_decode($d[1] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    assert_true($lt >= 50 && $lt <= 60, "title de {$lt} caractères");
    assert_true($ld >= 140 && $ld <= 160, "meta de {$ld} caractères");
}

function test_accueil_regressions_visuelles_relevees_en_recette(): void
{
    // Recette du 03/10/2026 à 320 px : chevron de FAQ posé sur le texte
    // (ancienne règle position:absolute), bouton WhatsApp coupé dans la barre mobile.
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_true((bool) preg_match('#\.pv2 \.faq summary::after\{content:"";position:static;#', $css), 'chevron de FAQ dans le flux');
    assert_true((bool) preg_match('#\.pv2 \.barre-mobile\{[^}]*grid-template-columns:repeat\(2,minmax\(0,1fr\)\)#', $css), 'barre mobile en colonnes compressibles');
}
