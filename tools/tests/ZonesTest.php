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

// Drapeaux (06/10/2026, demande de Richard) : un drapeau SVG à côté de chaque nom de pays affiché.
// Fichiers de flag-icons (licence MIT) dans assets/drapeaux : les emoji drapeaux ne s'affichent pas sous Windows.

function test_zones_chaque_pays_a_son_drapeau(): void
{
    require_once racine('helpers/functions.php');
    foreach (pays_liste() as $slug => $p) {
        assert_true(isset($p['iso']) && preg_match('/^[a-z]{2}$/', (string) $p['iso']) === 1, "code iso de {$slug}");
        $f = racine('assets/drapeaux/' . $p['iso'] . '.svg');
        assert_true(is_file($f) && str_starts_with((string) file_get_contents($f), '<svg'), "drapeau de {$slug}");
    }
    foreach (fait('zones') as $nom) {
        assert_true(drapeau($nom) !== '', "drapeau introuvable pour « {$nom} » (fait zones)");
    }
}

function test_zones_drapeau_decoratif_par_slug_ou_par_nom(): void
{
    require_once racine('helpers/functions.php');
    assert_same('<img class="drapeau" src="/assets/drapeaux/bj.svg" alt="" width="20" height="15" loading="lazy" decoding="async">', drapeau('benin'));
    assert_same(drapeau('benin'), drapeau('Bénin'));
    assert_same('<img class="drapeau" src="/assets/drapeaux/ci.svg" alt="" width="28" height="21" loading="lazy" decoding="async">', drapeau("Côte d'Ivoire", 28));
    assert_same('', drapeau('Atlantide'), 'pays inconnu : rien, jamais une image cassée');
}

function test_zones_listes_de_pays_avec_drapeaux(): void
{
    $zones = http_local('/zones/')['corps'];
    assert_contains('<li><img class="drapeau" src="/assets/drapeaux/sn.svg"', $zones, '/zones/');
    assert_contains('<span class="eyebrow"><img class="drapeau" src="/assets/drapeaux/bj.svg"', $zones, 'villes par pays');
    assert_contains('<li><img class="drapeau" src="/assets/drapeaux/ca.svg"', http_local('/')['corps'], 'accueil');
    assert_contains('<span class="mono"><img class="drapeau" src="/assets/drapeaux/bj.svg"', http_local('/developpeur-web-cotonou')['corps'], 'page ville');
    $entete = entete_rendre();
    assert_contains('src="/assets/drapeaux/fr.svg"', $entete, 'méga-menu et tiroir mobile');
    assert_not_contains('pastille-iso', $entete, 'le drapeau remplace la pastille ISO');
}

function test_zones_url_de_la_page_pays_seulement_publiee(): void
{
    // Vague 1D : un lien vers une page pays n'existe que si la page est publiée (jamais de 404).
    $fx = racine('tools/tests/fixtures/registres');
    assert_same('benin', pays_slug('Bénin'));
    assert_same('benin', pays_slug('benin'));
    assert_same(null, pays_slug('Atlantide'));
    assert_same('/zones/benin', pays_url('Bénin', $fx, '2026-06-01'));
    assert_same(null, pays_url('benin', $fx, '2025-12-31'), 'avant sa date');
    assert_same(null, pays_url('senegal', $fx), 'sans page');
    assert_same(null, pays_url('Atlantide', $fx));
}

function test_zones_pages_pays_reelles_liees_a_leur_date(): void
{
    // Revue finale 1D, sur les vraies pages : aucun lien pays avant le 29/10, les 12 pays des
    // tranches 1 et 2 ce jour-là, les 34 le 12/11 (une fiche invalide ferait baisser le compte).
    $n = static fn(string $jour): int => count(array_filter(
        array_keys(pays_liste()),
        static fn(string $s): bool => pays_url($s, REGISTRES_RACINE, $jour) !== null
    ));
    assert_same(0, $n('2026-10-28'));
    assert_same(12, $n('2026-10-29'));
    assert_same(12, $n('2026-11-11'));
    assert_same(34, $n('2026-11-12'));
}

function test_zones_fil_des_pages_ville_vers_le_pays_publie(): void
{
    $h = http_local('/developpeur-web-cotonou')['corps'];
    $url = pays_url('benin');
    $attendu = $url === null
        ? '<a href="/zones/">Zones desservies</a><span class="sep">/</span>Cotonou'
        : '<a href="' . $url . '">Bénin</a><span class="sep">/</span>Cotonou';
    assert_contains($attendu, $h, 'pays dans le fil seulement une fois sa page publiée');
}
