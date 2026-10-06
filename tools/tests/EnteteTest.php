<?php
declare(strict_types=1);

// Vague 0B, Task 4 : en-tête à méga-menus, alimenté par le registre de navigation.

require_once racine('helpers/functions.php');

function entete_rendre(): string
{
    $pdo = null; $userId = 0; $fullName = fait('nom'); $h_phone = fait('telephone');
    $h_email = fait('email'); $h_mailto = '/contact'; $h_logo = siteLogoUrl(); $navHome = '/';
    ob_start();
    include racine('portfolio/partials/pv2-header.php');
    return (string) ob_get_clean();
}

function test_entete_registre_de_navigation_complet(): void
{
    $nav = require racine('portfolio/data/navigation.php');
    foreach (['services', 'formations', 'pays', 'carte_cta'] as $cle) {
        assert_true(!empty($nav[$cle]), "registre : clé {$cle} absente");
    }
    assert_same(['Afrique francophone', 'Europe et Canada'], array_keys($nav['pays']));
}

function test_entete_services_ranges_par_familles_vers_les_piliers(): void
{
    // Vague 1A, Task 10 : quatre cartes de six liens au plus, chaque lien vise
    // un pilier publié de la même famille, servi en 200.
    $nav = navigation_chargee();
    assert_same(REGISTRES_FAMILLES, array_keys($nav['services']));
    foreach ($nav['services'] as $famille => $g) {
        assert_true(count($g['liens']) <= 6, "{$famille} : plus de six liens");
        foreach ($g['liens'] as [$libelle, $url]) {
            assert_true((bool) preg_match('#^/services/([a-z0-9-]+)$#', $url, $m), "{$libelle} : {$url} n'est pas un pilier");
            $p = registre_lire('service', $m[1]);
            assert_true($p !== null && registre_publiee($p), "{$url} : pilier absent ou non publié");
            assert_same($famille, $p['famille'], "{$url} : famille");
            assert_same(200, http_local($url)['code'], $url);
        }
    }
}

function test_entete_trois_mega_menus_accessibles(): void
{
    $html = entete_rendre();
    assert_same(3, substr_count($html, 'aria-controls="mega-'));
    assert_same(3, substr_count($html, 'class="mega"'));
    assert_same(3, preg_match_all('/<div class="mega" id="mega-[a-z]+" hidden>/', $html));
    foreach (['/services/', '/formations/', '/zones/', '/contact', '/a-propos/'] as $url) {
        assert_contains('href="' . $url . '"', $html, "lien {$url}");
    }
}

function test_entete_identite_et_contact(): void
{
    $html = entete_rendre();
    assert_contains('/assets/img/logo-rs.svg', $html);
    assert_contains('wa.me/2290161413177', $html);
    assert_contains('aria-controls="tiroir"', $html);
    assert_not_contains('Richard Technologies', $html);
    assert_not_contains('<h1', $html);
}

function test_entete_ne_modifie_aucune_variable_de_la_page(): void
{
    // Recette du 04/10/2026 : la boucle des pays de l'en-tête réutilisait $p et
    // effaçait le projet de realisation.php (H1 vide en production).
    require_once racine('helpers/functions.php');
    $p = ['title' => 'Projet témoin'];
    $page = ['titre' => 'Page témoin'];
    $pdo = null; $fullName = fait('nom'); $h_logo = siteLogoUrl();
    ob_start();
    include racine('portfolio/partials/pv2-header.php');
    ob_end_clean();
    assert_same(['title' => 'Projet témoin'], $p);
    assert_same(['titre' => 'Page témoin'], $page);
}

function test_entete_formations_vers_les_fiches_publiees(): void
{
    // Vague 1B : quatre cartes de six liens au plus, chaque lien vise une fiche publiée servie en 200.
    $nav = navigation_chargee();
    assert_same(4, count($nav['formations']));
    foreach ($nav['formations'] as $groupe => $g) {
        assert_true(count($g['liens']) <= 6, "{$groupe} : plus de six liens");
        foreach ($g['liens'] as [$libelle, $url]) {
            assert_true((bool) preg_match('#^/formations/([a-z0-9-]+)$#', $url, $m), "{$libelle} : {$url}");
            $p = registre_lire('formation', $m[1]);
            assert_true($p !== null && registre_publiee($p), "{$url} : fiche absente ou non publiée");
            assert_same(200, http_local($url)['code'], $url);
        }
    }
}

function test_entete_pays_vers_la_page_pays_une_fois_publiee(): void
{
    // Vague 1D : le méga-menu vise la page pays publiée, sinon la page ville historique.
    $html = entete_rendre();
    $nav = require racine('portfolio/data/navigation.php');
    foreach ($nav['pays'] as $liste) {
        foreach ($liste as $eP) {
            assert_contains('href="' . (pays_url($eP['nom']) ?? $eP['url']) . '"', $html, $eP['nom']);
        }
    }
}
