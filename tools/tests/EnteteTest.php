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
