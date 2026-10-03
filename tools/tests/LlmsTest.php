<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');
require_once racine('helpers/llms.php');

function llms_test_sections(): array
{
    return [
        'Services'   => [['titre' => 'Site e-commerce', 'url' => 'https://richardsalanon.com/services/site-e-commerce', 'resume' => 'Boutiques avec paiement Mobile Money.']],
        'Formations' => [['titre' => 'Formation vibecoding', 'url' => 'https://richardsalanon.com/formation-vibecoding', 'resume' => '']],
        'Articles'   => [],
    ];
}

function test_llms_suit_le_format_llmstxt(): void
{
    $txt = llms_contenu(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com', llms_test_sections(), false);
    assert_true(str_starts_with($txt, "# Richard SALANON\n\n> "), 'en-tête llms.txt attendu');
    assert_contains("## Services\n\n- [Site e-commerce](https://richardsalanon.com/services/site-e-commerce) : Boutiques avec paiement Mobile Money.\n", $txt);
    assert_contains("- [Formation vibecoding](https://richardsalanon.com/formation-vibecoding)\n", $txt);
}

function test_llms_omet_les_sections_vides_et_les_faits_inconnus(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    $f['projets_livres'] = null;
    $txt = llms_contenu($f, 'https://richardsalanon.com', llms_test_sections(), false);
    assert_not_contains('## Articles', $txt);
    assert_not_contains('null', $txt);
    assert_not_contains('projets livrés', $txt);
}

function test_llms_reprend_les_chiffres_valides_par_richard(): void
{
    $txt = llms_contenu(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com', llms_test_sections(), false);
    assert_contains('- Projets livrés : 50+.', $txt);
    assert_contains('- Clients : 100+.', $txt);
    assert_contains('- Personnes formées : 200+.', $txt);
    assert_contains('- Pays où il a déjà travaillé : Bénin, ', $txt);
    assert_contains('EPITECH (2022)', $txt);
}

function test_llms_est_accentue_et_sans_ancienne_marque(): void
{
    $txt = llms_contenu(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com', llms_test_sections(), true);
    assert_contains('Bénin', $txt);
    assert_contains('Côte d\'Ivoire', $txt);
    assert_not_contains('Richard Technologies', $txt);
    assert_not_contains("\u{2014}", $txt);
}

function test_llms_complet_ajoute_la_faq_et_les_competences(): void
{
    $f   = faits_depuis(racine('portfolio/data/faits.php'));
    $txt = llms_contenu($f, 'https://richardsalanon.com', llms_test_sections(), true);
    assert_contains('## Compétences', $txt);
    assert_contains('## Questions fréquentes', $txt);
    assert_not_contains('## Compétences', llms_contenu($f, 'https://richardsalanon.com', llms_test_sections(), false));
}

function test_llms_servi_en_local_meme_sans_base(): void
{
    $r = http_local('/llms.txt');
    assert_same(200, $r['code']);
    assert_contains('charset=utf-8', $r['type']);
    assert_contains('# Richard SALANON', $r['corps']);
    assert_contains('## Formations', $r['corps']);
    $r = http_local('/llms-full.txt');
    assert_same(200, $r['code']);
    assert_contains('## Pages locales', $r['corps']);
}
