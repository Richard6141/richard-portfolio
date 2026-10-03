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
    ];
    assert_same(16, count(BLOCS_TYPES));
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
