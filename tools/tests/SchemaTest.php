<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');
require_once racine('helpers/schema.php');

function schema_test_decoder(string $balise): array
{
    assert_true(str_starts_with($balise, '<script type="application/ld+json">'), 'balise ouvrante absente');
    assert_true(str_ends_with($balise, '</script>'), 'balise fermante absente');
    $json = substr($balise, strlen('<script type="application/ld+json">'), -strlen('</script>'));
    return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
}

function test_schema_graphe_une_seule_balise_avec_graph(): void
{
    $html = schema_graphe(schema_noeuds_base(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com'));
    assert_same(1, substr_count($html, '<script'));
    $doc = schema_test_decoder($html);
    assert_same('https://schema.org', $doc['@context']);
    assert_same(3, count($doc['@graph']));
}

function test_schema_noeuds_de_base_conformes_a_la_spec(): void
{
    $html = schema_graphe(schema_noeuds_base(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com'));
    $doc  = schema_test_decoder($html);
    $parType = [];
    foreach ($doc['@graph'] as $n) { $parType[$n['@type']] = $n; }
    assert_same('https://richardsalanon.com/#person', $parType['Person']['@id']);
    assert_same('BJ', $parType['Person']['address']['addressCountry']);
    assert_same('fr', $parType['WebSite']['inLanguage']);
    assert_same('Richard SALANON', $parType['WebSite']['name']);
    assert_same(34, count($parType['ProfessionalService']['areaServed']));
    assert_not_contains('Richard Technologies', $html);
    assert_contains('Bénin', $html, 'les accents doivent rester lisibles');
}

function test_schema_un_seul_context_meme_si_les_noeuds_de_page_en_portent(): void
{
    $html = schema_graphe([['@context' => 'https://schema.org', '@type' => 'Thing', 'name' => 'x']]);
    assert_same(1, substr_count($html, '@context'));
}

function test_schema_echappe_les_chevrons_et_esperluettes(): void
{
    $html = schema_graphe([['@type' => 'Thing', 'name' => 'A <b>gras</b> & co']]);
    assert_not_contains('<b>', $html);
    assert_contains('\\u003C', $html);
    assert_contains('\\u0026', $html);
    assert_not_contains(' & ', $html);
}

function test_schema_retire_les_valeurs_vides(): void
{
    $html = schema_graphe([['@type' => 'Thing', 'name' => null, 'url' => '', 'sameAs' => [], 'description' => 'ok']]);
    assert_not_contains('"name"', $html);
    assert_not_contains('"url"', $html);
    assert_not_contains('"sameAs"', $html);
    assert_contains('"description":"ok"', $html);
}

function test_schema_fusionne_les_noeuds_de_meme_id(): void
{
    $f    = faits_depuis(racine('portfolio/data/faits.php'));
    $html = schema_graphe([schema_personne($f, 'https://richardsalanon.com'), schema_personne($f, 'https://richardsalanon.com', true)]);
    $doc  = schema_test_decoder($html);
    assert_same(1, count($doc['@graph']));
    assert_true(isset($doc['@graph'][0]['knowsAbout']), 'la version complète doit compléter la compacte');
}

function test_schema_refuse_les_types_et_proprietes_interdits(): void
{
    foreach ([
        ['@type' => 'AggregateRating', 'ratingValue' => '5'],
        ['@type' => 'Thing', 'aggregateRating' => ['@type' => 'Thing']],
        ['@type' => 'LocalBusiness', 'name' => 'x'],
        ['@type' => 'Thing', 'review' => ['@type' => 'Thing']],
    ] as $noeud) {
        try {
            schema_graphe([$noeud]);
        } catch (\DomainException $e) {
            continue;
        }
        throw new EchecTest('nœud interdit accepté : ' . json_encode($noeud));
    }
}

function test_schema_faq_reprend_les_questions_visibles(): void
{
    $faq = schema_faq([['q' => 'Combien ?', 'r' => 'Sur devis.']]);
    assert_same('FAQPage', $faq['@type']);
    assert_same('Combien ?', $faq['mainEntity'][0]['name']);
    assert_same('Sur devis.', $faq['mainEntity'][0]['acceptedAnswer']['text']);
}

function test_schema_faq_du_template_horizon_est_lisible(): void
{
    $questions = require racine('portfolio/templates/horizon-faq.php');
    assert_same(4, count($questions));
    foreach ($questions as $qr) {
        assert_true($qr['q'] !== '' && $qr['r'] !== '', 'question ou réponse vide');
    }
}

function schema_fixture(string $type, string $slug): array
{
    require_once racine('helpers/functions.php');
    return registre_lire($type, $slug, racine('tools/tests/fixtures/registres'));
}

function test_schema_registre_type_principal_par_type(): void
{
    $base = 'https://richardsalanon.com';
    $attendus = [['service', 'site-test', 'Service'], ['service-pays', 'site-test/benin', 'Service'], ['formation', 'ia-test', 'Course'],
                 ['histoire', 'histoire-test', 'Article'], ['comparatif', 'a-vs-b', 'Article'], ['page', 'page-test', 'WebPage'], ['terme', 'terme-test', 'DefinedTerm']];
    foreach ($attendus as [$type, $slug, $schema]) {
        $p = schema_fixture($type, $slug);
        $noeuds = schema_page_registre($p, [['Accueil', '/'], [$p['titre'], $p['url']]], $base);
        assert_same($schema, $noeuds[0]['@type'], $type);
        assert_same('BreadcrumbList', $noeuds[1]['@type'], $type);
        foreach ($noeuds as $n) {
            schema_verifier($n);
        }
        assert_same(1, substr_count(schema_graphe($noeuds), 'application/ld+json'), $type);
    }
}

function test_schema_registre_pays_de_la_page_et_dates_reelles(): void
{
    $base = 'https://richardsalanon.com';
    $p = schema_fixture('service-pays', 'site-test/benin');
    $n = schema_page_registre($p, [['Accueil', '/']], $base)[0];
    assert_same(['@type' => 'Country', 'name' => 'Bénin'], $n['areaServed']);
    assert_same(['@id' => $base . '/#person'], $n['provider']);
    $a = schema_page_registre(schema_fixture('histoire', 'histoire-test'), [['Accueil', '/']], $base)[0];
    assert_same('2026-01-01', $a['datePublished']);
    assert_same('2026-01-02', $a['dateModified']);
}

function test_schema_fil_ariane_urls_absolues_positions(): void
{
    $f = schema_fil_ariane([['Accueil', '/'], ['Comparatifs', '/comparatifs/'], ['Odoo ou Dolibarr', '/comparatifs/odoo-vs-dolibarr']], 'https://richardsalanon.com');
    assert_same(3, count($f['itemListElement']));
    assert_same(3, $f['itemListElement'][2]['position']);
    assert_same('https://richardsalanon.com/comparatifs/', $f['itemListElement'][1]['item']);
}

function test_schema_collection_liste_les_elements(): void
{
    $c = schema_collection('Comparatifs', '/comparatifs/', [['Odoo ou Dolibarr', '/comparatifs/odoo-vs-dolibarr']], 'https://richardsalanon.com');
    assert_same('CollectionPage', $c['@type']);
    assert_same('ItemList', $c['mainEntity']['@type']);
    assert_same('https://richardsalanon.com/comparatifs/odoo-vs-dolibarr', $c['mainEntity']['itemListElement'][0]['url']);
}
