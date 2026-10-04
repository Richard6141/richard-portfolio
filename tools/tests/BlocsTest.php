<?php
declare(strict_types=1);

require_once racine('helpers/functions.php');
require_once racine('helpers/blocs.php');

function test_blocs_texte_echappe_sauf_les_balises_autorisees(): void
{
    $html = bloc_texte('Un <strong>gain</strong>, <em>net</em>, <a href="/services/site-e-commerce">voir</a><script>x()</script> <a href="javascript:x()">non</a>');
    assert_contains('<strong>gain</strong>', $html);
    assert_contains('<em>net</em>', $html);
    assert_contains('<a href="/services/site-e-commerce">voir</a>', $html);
    assert_not_contains('<script>', $html);
    assert_not_contains('href="javascript', $html);
}

function test_blocs_type_inconnu_refuse(): void
{
    try {
        bloc_rendre(['type' => 'inexistant']);
    } catch (\InvalidArgumentException $e) {
        return;
    }
    throw new EchecTest('un type inconnu doit lever InvalidArgumentException');
}

function test_blocs_chaque_type_rend_sa_section_et_son_titre(): void
{
    $exemples = [
        ['type' => 'prose', 'titre' => 'Pourquoi ?', 'paragraphes' => ['Parce que.']],
        ['type' => 'points', 'titre' => 'Points', 'items' => [['titre' => 'A', 'texte' => 'a']]],
        ['type' => 'etapes', 'titre' => 'Étapes', 'items' => [['titre' => 'Cadrage', 'texte' => 'On cadre.', 'duree' => '2 jours']]],
        ['type' => 'tableau', 'titre' => 'Tableau', 'legende' => 'Légende', 'entetes' => ['A', 'B'], 'lignes' => [['1', '2']]],
        ['type' => 'comparaison', 'titre' => 'Comparer', 'options' => ['Odoo', 'Dolibarr'], 'criteres' => [['critere' => 'Prix', 'valeurs' => ['élevé', 'bas']]]],
        ['type' => 'chiffres', 'titre' => 'Chiffres', 'items' => [['valeur' => '72 %', 'libelle' => 'pénétration mobile', 'source' => 'GSMA 2026', 'url' => 'https://www.gsma.com']]],
        ['type' => 'cas', 'titre' => 'Cas', 'items' => [['secteur' => 'Clinique', 'probleme' => 'Files', 'solution' => 'Rendez-vous en ligne']]],
        ['type' => 'prix', 'titre' => 'Prix', 'items' => [['offre' => 'Vitrine', 'prix' => '300 000 FCFA', 'inclus' => ['5 pages']]]],
        ['type' => 'frise', 'titre' => 'Frise', 'items' => [['date' => '2024', 'titre' => 'Lancement', 'texte' => 'Mise en ligne.']]],
        ['type' => 'vigilance', 'titre' => 'Point de vigilance', 'texte' => 'Chiffre contesté.'],
        ['type' => 'lecon', 'titre' => 'La leçon', 'texte' => 'Mesurer avant.'],
        ['type' => 'citation', 'texte' => 'Très utile.', 'auteur' => 'Client'],
        ['type' => 'checklist', 'titre' => 'À vérifier', 'items' => ['HTTPS']],
        ['type' => 'faq', 'titre' => 'Questions fréquentes', 'items' => [['q' => 'Combien ?', 'r' => 'Sur devis.']]],
        ['type' => 'sources', 'titre' => 'Sources', 'items' => [['titre' => 'GSMA', 'url' => 'https://www.gsma.com', 'date' => '2026-10-01']]],
        ['type' => 'cta', 'titre' => 'Parlons-en', 'texte' => 'Devis gratuit.', 'bouton' => ['texte' => 'Demander un devis', 'url' => '/contact']],
        ['type' => 'programme', 'titre' => 'Programme', 'jours' => [['titre' => 'Jour 1', 'points' => ['Prompts']]]],
        ['type' => 'galerie', 'titre' => 'Captures', 'images' => [['src' => '/assets/img/x.webp', 'alt' => 'x', 'largeur' => 10, 'hauteur' => 10]]],
    ];
    assert_same(18, count(BLOCS_TYPES));
    foreach ($exemples as $bloc) {
        $html = bloc_rendre($bloc);
        assert_contains('class="bloc bloc--' . $bloc['type'], $html, $bloc['type']);
        if (isset($bloc['titre'])) {
            assert_contains('<h2', $html, $bloc['type'] . ' : titre attendu');
        }
    }
}

function test_blocs_faq_en_details_et_tableau_defilant(): void
{
    $faq = bloc_rendre(['type' => 'faq', 'titre' => 'FAQ', 'items' => [['q' => 'Q1 ?', 'r' => 'R1.'], ['q' => 'Q2 ?', 'r' => 'R2.']]]);
    assert_same(2, substr_count($faq, '<details'));
    assert_contains('<summary', $faq);
    $tab = bloc_rendre(['type' => 'tableau', 'titre' => 'T', 'legende' => 'L', 'entetes' => ['A'], 'lignes' => [['1']]]);
    assert_contains('<caption', $tab);
    assert_contains('class="tableau-defilant"', $tab);
}

function test_blocs_titre_porte_une_ancre_pour_le_sommaire(): void
{
    $html = bloc_rendre(['type' => 'prose', 'titre' => 'Combien coûte un site ?', 'paragraphes' => ['x']]);
    assert_contains('id="combien-coute-un-site"', $html);
}

function test_blocs_rendre_une_liste_concatene_dans_l_ordre(): void
{
    $html = blocs_rendre([
        ['type' => 'prose', 'titre' => 'Un', 'paragraphes' => ['a']],
        ['type' => 'prose', 'titre' => 'Deux', 'paragraphes' => ['b']],
    ]);
    assert_true(strpos($html, 'Un') < strpos($html, 'Deux'), 'ordre non respecté');
}

function test_blocs_liens_hors_site_deguises_refuses(): void
{
    // Revue 0B : « //hote » et « /\hote » passaient pour des liens internes.
    foreach (['//evil.example/x', '/\evil.example', 'javascript:alert(1)', 'data:text/html,x'] as $url) {
        assert_same(null, bloc_href($url), $url);
        assert_not_contains('<a href=', bloc_texte('<a href="' . $url . '">x</a>'), $url);
    }
    foreach (['https://www.odoo.com/fr_FR', '/services/integration-odoo', '#faq'] as $url) {
        assert_same($url, bloc_href($url));
    }
    $cta = bloc_rendre(['type' => 'cta', 'titre' => 'Go', 'bouton' => ['url' => '//evil.example', 'texte' => 'x']]);
    assert_not_contains('evil.example', $cta);
}

function test_blocs_programme_en_details_le_premier_ouvert(): void
{
    $html = bloc_rendre(['type' => 'programme', 'titre' => 'Programme', 'jours' => [
        ['titre' => 'Jour 1 <script>', 'duree' => '7 h', 'points' => ['Prompts', 'Cas réels']],
        ['titre' => 'Jour 2', 'points' => ['Automatiser']],
    ]]);
    assert_same(2, substr_count($html, '<details'));
    assert_same(1, substr_count($html, '<details class="programme__jour" open>'));
    assert_contains('Jour 1 &lt;script&gt;', $html);
    assert_contains('7 h', $html);
}

function test_blocs_galerie_dimensions_et_sources_locales_seulement(): void
{
    $html = bloc_rendre(['type' => 'galerie', 'titre' => 'Captures', 'images' => [
        ['src' => '/assets/img/histoires/oba-tv-accueil.webp', 'alt' => 'Accueil OBA TV', 'largeur' => 1280, 'hauteur' => 800, 'legende' => 'Page d\'accueil'],
        ['src' => 'https://evil.example/x.webp', 'alt' => 'x', 'largeur' => 10, 'hauteur' => 10],
    ]]);
    assert_same(1, substr_count($html, '<img '));
    assert_contains('width="1280" height="800"', $html);
    assert_contains('loading="lazy"', $html);
    assert_not_contains('evil.example', $html);
}

function test_blocs_liens_mailto_seulement_vers_une_adresse(): void
{
    assert_contains('<a href="mailto:richardsomasse@gmail.com">', bloc_texte('<a href="mailto:richardsomasse@gmail.com">écrire</a>'));
    assert_same('mailto:richardsomasse@gmail.com', bloc_href('mailto:richardsomasse@gmail.com'));
    assert_same(null, bloc_href('mailto:javascript'));
    assert_not_contains('<a href=', bloc_texte('<a href="mailto:pas-une-adresse">x</a>'));
}

function test_blocs_liens_internes_vers_l_url_finale(): void
{
    // Un lien du texte vers une ancienne URL suit la redirection active : aucune 301 interne.
    $html = bloc_texte('<a href="/contact">Contact</a>');
    assert_contains('href="/contact"', $html);
    assert_contains('url_finale(', (string) file_get_contents(racine('helpers/blocs.php')));
}

function test_blocs_typo_fr_espace_insecable_dans_le_texte_seulement(): void
{
    // Recette 1A : « : » et « ? » tombaient en début de ligne, jusque dans les H1.
    $html = '<h1>Services : sites ?</h1><a title="a : b" href="/x">« Oui » !</a>'
        . '<script>var a = b ? c : d;</script><style>p{margin : 0}</style>';
    $out = typo_fr_html($html);
    assert_contains("Services\u{00A0}: sites\u{00A0}?", $out);
    assert_contains("«\u{00A0}Oui\u{00A0}»\u{00A0}!", $out);
    assert_contains('title="a : b"', $out, 'attributs intacts');
    assert_contains('var a = b ? c : d;', $out, 'scripts intacts');
    assert_contains('p{margin : 0}', $out, 'styles intacts');
}

function test_blocs_typo_fr_appliquee_aux_pages_de_registre(): void
{
    assert_contains("Richard SALANON\u{00A0}: sites", http_local('/services/')['corps']);
    assert_contains("\u{00A0}?", http_local('/services/vibe-coding')['corps']);
}
