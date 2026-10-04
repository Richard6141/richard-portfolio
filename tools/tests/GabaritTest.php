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

function test_gabarit_hub_services_groupe_par_famille(): void
{
    // Vague 1A : les 27 piliers partagent une date de publication ; le hub les
    // range par famille (ordre de REGISTRES_FAMILLES) au lieu de les trier par date.
    $html = http_local('/services/')['corps'];
    $pos  = [];
    foreach (REGISTRES_FAMILLES as $famille) {
        $pos[$famille] = strpos($html, '<h2 class="liste-hub__famille">' . sanitize($famille) . '</h2>');
        assert_true($pos[$famille] !== false, "titre de famille {$famille}");
    }
    $tri = $pos;
    sort($tri);
    assert_same($tri, array_values($pos), 'familles dans l\'ordre du registre');
    $carte = static fn(string $slug): int|false => strpos($html, 'class="carte-hub carte-halo" href="/services/' . $slug . '"');
    assert_true($carte('site-vitrine-professionnel') < $pos['Applications et IA'], 'vitrine dans Sites et boutiques');
    assert_true($carte('integration-odoo') > $pos['ERP et gestion'], 'Odoo dans ERP et gestion');
    assert_contains('<h3>', substr($html, (int) $pos['Sites et boutiques'], 2000), 'cartes en H3 sous le titre de famille');
}

function test_gabarit_page_noindex_respectee(): void
{
    assert_contains('content="noindex, follow"', gabarit_rendre('page', 'page-legale-test'));
}

function test_gabarit_un_seul_header_celui_du_site(): void
{
    // Recette 0C : l'ancienne règle « .pv2 header{position:fixed} » fixait le hero des
    // pages de registre en haut de l'écran, par-dessus l'en-tête et le sommaire.
    foreach ([['comparatif', 'a-vs-b'], ['hub', 'histoires'], ['formation', 'ia-test']] as [$type, $slug]) {
        assert_same(1, substr_count(gabarit_rendre($type, $slug), '<header'), "{$type} : un seul <header>");
    }
}
