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
    preg_match('#<script type="application/ld\+json">(.*?)</script>#s', $html, $m);
    $ld = $m[1] ?? '';
    assert_true(strpos($ld, '/services/site-vitrine-professionnel') < strpos($ld, '/services/integration-odoo'), 'ItemList dans l\'ordre affiché');
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

function test_gabarit_programme_place_par_le_redacteur_une_seule_fois(): void
{
    // Vague 1B : une section « programme » sans jours reçoit le programme de la fiche, à sa place.
    $html = gabarit_rendre('formation', 'ia-test');
    assert_same(1, substr_count($html, 'bloc--programme'), 'programme rendu une fois');
    assert_contains('Quel est le programme', $html);
    assert_true(strpos($html, 'bloc--programme') < strpos($html, 'bloc--faq'), 'avant la FAQ');
    assert_contains('Point.', $html);
}

function test_gabarit_hub_formations_groupe_par_domaine(): void
{
    // Vague 1B : le hub des formations range les fiches par domaine (ordre de REGISTRES_DOMAINES_NOMS).
    $html = http_local('/formations/')['corps'];
    $pos  = [];
    foreach (REGISTRES_DOMAINES_NOMS as $slug => $nom) {
        $pos[$slug] = strpos($html, '<h2 class="liste-hub__famille">' . sanitize($nom) . '</h2>');
        assert_true($pos[$slug] !== false, "domaine {$nom}");
    }
    $tri = $pos;
    sort($tri);
    assert_same($tri, array_values($pos), 'domaines dans l\'ordre du registre');
}

function test_gabarit_hub_formations_liste_les_metiers_par_univers(): void
{
    // Vague 1C : le hub des formations liste les pages métier publiées, par univers.
    $html = gabarit_rendre('hub', 'formations-test');
    assert_contains('id="metiers"', $html);
    assert_contains('<h3>Droit et justice</h3>', $html);
    assert_contains('href="/formations/metier/test-metier">Formation IA de test pour les testeurs</a>', $html);
}

function test_gabarit_titre_long_en_tete_et_suite(): void
{
    // 06/10/2026, demande de Richard : garder les titres entiers mais mieux les afficher. Le H1 est
    // coupé au premier « : » : la tête reste grande, la suite passe en sous-titre, dans le même H1.
    $titre = "Formation IA, éthique : chaque salarié apprend ce qu'il peut confier : et vérifier";
    $html  = registre_titre_html($titre);
    assert_same('<span class="titre-tete">Formation IA, éthique<span class="visuellement-cache"> :</span></span> '
        . '<span class="titre-suite">' . sanitize("chaque salarié apprend ce qu'il peut confier : et vérifier") . '</span>', $html);
    assert_same($titre, html_entity_decode(strip_tags($html), ENT_QUOTES, 'UTF-8'), 'texte du H1 inchangé pour Google');
    assert_same(sanitize("Sans deux-points ni suite"), registre_titre_html("Sans deux-points ni suite"));
}

function test_gabarit_hero_et_fil_d_ariane_affichent_les_titres_longs(): void
{
    // Le filtre typographique de sortie pose une espace insécable avant « : ».
    $html = str_replace("\u{00A0}", ' ', http_local('/formations/ia-ethique-conformite')['corps']);
    assert_contains('<h1><span class="titre-tete">Formation IA, éthique et conformité des données<span class="visuellement-cache"> :</span></span> <span class="titre-suite">', $html);
    assert_contains('title="Formations en intelligence artificielle', $html, 'texte entier au survol du fil d\'Ariane');
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('.pv2 .registre-hero h1 .titre-suite{display:block;', $css);
    assert_contains('.pv2 .crumb a,.pv2 .crumb [aria-current]{display:inline-block;max-width:', $css);
}

function test_gabarit_pays_fiche_a_sa_place_ou_avant_la_faq(): void
{
    // Vague 1D : la section « fiche » placée par le rédacteur reçoit la fiche ; sinon elle s'ajoute avant la FAQ.
    $html = gabarit_rendre('pays', 'benin');
    assert_same(1, substr_count($html, 'bloc--fiche'));
    assert_contains('Quels repères retenir sur le pays', $html, 'titre du rédacteur (espace insécable avant « ? »)');
    assert_contains('MTN MoMo, Moov Money', $html);
    assert_true(strpos($html, 'bloc--fiche') < strpos($html, 'bloc--faq'));
    assert_contains('"Service"', $html);
    $togo = gabarit_rendre('pays', 'togo');
    assert_same(1, substr_count($togo, 'bloc--fiche'));
    assert_contains('<th scope="row">Capitale</th><td>Lomé</td>', $togo);
    assert_true(strpos($togo, 'bloc--fiche') < strpos($togo, 'bloc--faq'));
}

function test_gabarit_pays_drapeau_dans_le_hero(): void
{
    assert_contains('<span class="eyebrow"><img class="drapeau" src="/assets/drapeaux/bj.svg"', gabarit_rendre('pays', 'benin'));
}
