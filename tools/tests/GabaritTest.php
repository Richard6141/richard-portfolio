<?php
declare(strict_types=1);

// Gabarits des pages de registre et des hubs (vague 0C), rendus en mémoire avec les fixtures.

require_once racine('helpers/functions.php');

/** Rend un gabarit de registre en mémoire, avec les variables de l'amorçage et les fixtures. */
function gabarit_rendre(string $type, string $slug): string
{
    $registreRacine = racine('tools/tests/fixtures/registres');
    $page = registre_lire($type, $slug, $registreRacine);
    $pdo = null; $userId = 0; $profile = []; $contactInfo = []; $socialLinks = [];
    $fullName = fait('nom'); $h_city = fait('ville'); $h_phone = fait('telephone'); $h_email = fait('email');
    $h_mailto = '/contact'; $h_logo = siteLogoUrl(); $portfolioUrl = SITE_URL;
    ob_start();
    include racine($type === 'hub' || $type === 'domaine' ? 'portfolio/registre-hub.php' : 'portfolio/registre.php');
    return (string) ob_get_clean();
}

function test_gabarit_formation_complete_et_valide(): void
{
    $html = gabarit_rendre('formation', 'ia-test');
    assert_same(1, substr_count($html, '<h1'));
    assert_same(1, substr_count($html, 'application/ld+json'));
    assert_contains('"Course"', $html);
    assert_contains('"BreadcrumbList"', $html);
    assert_contains('En bref', $html);
    assert_contains('Mis à jour le <time datetime="2026-01-02">2 janvier 2026</time>', $html);
    assert_contains('<details class="programme__jour" open>', $html);
    assert_contains('class="sommaire"', $html);
    assert_contains('href="/a-propos/"', $html, 'boîte auteur vers l\'à-propos tant que la page auteur n\'est pas publiée');
    assert_contains('<link rel="canonical" href="' . SITE_URL . '/formations/ia-test">', $html);
    assert_not_contains("\u{2014}", $html);
}

function test_gabarit_histoire_sous_traitance_mentionnee(): void
{
    assert_contains('Réalisé en sous-traitance pour Digital Développement', gabarit_rendre('histoire', 'histoire-test'));
}

function test_gabarit_hub_liste_les_pages_publiees(): void
{
    $html = gabarit_rendre('hub', 'histoires');
    assert_contains('href="/histoires/histoire-test"', $html);
    assert_contains('href="/histoires/histoire-autre"', $html);
    assert_contains('"CollectionPage"', $html);
    assert_same(1, substr_count($html, '<h1'));
}

function test_gabarit_page_noindex_respectee(): void
{
    assert_contains('content="noindex, nofollow"', gabarit_rendre('page', 'page-legale-test'));
}
