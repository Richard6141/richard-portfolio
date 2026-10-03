<?php
declare(strict_types=1);

// Registres de contenu (vague 0C) : liste des pays, lecture, validation, publication.

require_once racine('helpers/functions.php');
require_once racine('helpers/registres.php');

function fixtures(): string
{
    return racine('tools/tests/fixtures/registres');
}

function test_registres_pays_liste_egale_la_fiche_de_faits(): void
{
    $liste = pays_liste();
    assert_same(34, count($liste));
    assert_same(fait('zones'), array_column(array_values($liste), 'nom'));
    foreach ($liste as $slug => $p) {
        assert_true((bool) preg_match('/^[a-z0-9-]+$/', $slug), $slug);
        assert_true(in_array($p['tranche'], [1, 2, 3, 4, 5], true), $slug);
        assert_same(3, count($p['voisins']), $slug);
        foreach ($p['voisins'] as $v) {
            assert_true(isset($liste[$v]), "{$slug} : voisin inconnu {$v}");
        }
        assert_true((bool) preg_match('/^(au|aux|en|à) /u', $p['dans']), $slug);
    }
    assert_same('au Bénin', $liste['benin']['dans']);
}

function test_registres_lecture_injecte_type_slug_url(): void
{
    $p = registre_lire('service-pays', 'site-test/benin', fixtures());
    assert_same('service-pays', $p['type']);
    assert_same('site-test/benin', $p['slug']);
    assert_same('/services/site-test/benin', $p['url']);
}

function test_registres_fichier_casse_ignore_et_journalise(): void
{
    assert_same(null, registre_lire('service', 'site-casse', fixtures()));
    assert_true(!isset(registre_tous('service', fixtures())['site-casse']));
    assert_contains('meta', implode(' ', registre_valider('service', 'site-casse', require fixtures() . '/services/site-casse.php')));
}

function test_registres_slug_hostile_refuse(): void
{
    foreach (['../faits', 'site-test/../../x', 'Site-Test', 'site test', '', 'a/b/c'] as $slug) {
        assert_same(null, registre_lire('service-pays', $slug, fixtures()), $slug);
    }
}

function test_registres_publication_selon_la_date(): void
{
    $futur = registre_lire('service', 'site-futur', fixtures());
    assert_true(!registre_publiee($futur, '2026-10-03'));
    assert_true(registre_publiee($futur, '2099-01-01'));
    assert_true(!registre_publiee(['publie' => null], '2026-10-03'));
    assert_same(['site-test'], array_keys(registre_publiees('service', fixtures(), '2026-10-03')));
}

function test_registres_validation_des_champs_de_type(): void
{
    $base = require fixtures() . '/services/site-test.php';
    assert_same([], registre_valider('service', 'site-test', $base));
    assert_contains('famille', implode(' ', registre_valider('service', 'x', array_diff_key($base, ['famille' => 1]))));
    assert_contains('bloc', implode(' ', registre_valider('service', 'x', ['sections' => [['type' => 'inconnu']]] + $base)));
    assert_contains('publie', implode(' ', registre_valider('service', 'x', ['publie' => '03/10/2026'] + $base)));
    assert_contains('pays', implode(' ', registre_valider('service-pays', 'site-test/atlantide', $base)));
    assert_contains('slug réservé', implode(' ', registre_valider('formation', 'domaine', $base)));
}

function test_registres_donnees_reelles_toutes_valides(): void
{
    // Garde-fou de publication : un fichier mal formé fait échouer la suite avant le commit.
    $erreurs = [];
    foreach (array_keys(REGISTRES_TYPES) as $type) {
        foreach (registre_fichiers($type) as $slug => $chemin) {
            foreach (registre_valider($type, $slug, require $chemin) as $e) {
                $erreurs[] = "{$type}/{$slug} : {$e}";
            }
        }
    }
    assert_same([], $erreurs);
}

function test_registres_revue_erreur_php_dans_un_fichier_ne_fait_pas_tomber_le_site(): void
{
    // Revue finale 0C : un fichier au PHP invalide faisait tomber sitemap, llms.txt et hubs.
    assert_same(null, registre_lire('service', 'site-syntaxe', fixtures()));
    assert_true(!isset(registre_tous('service', fixtures())['site-syntaxe']));
}

function test_registres_revue_fiche_pays_hors_liste_refusee(): void
{
    // Revue finale 0C : data/pays/beninn.php passait la validation puis faisait planter le maillage.
    $base = require fixtures() . '/pays/benin.php';
    assert_contains('pays inconnu', implode(' ', registre_valider('pays', 'beninn', $base)));
    assert_same([], registre_valider('pays', 'benin', $base));
}

function test_registres_famille_de_service_connue(): void
{
    $base = require fixtures() . '/services/site-test.php';
    assert_same([], registre_valider('service', 'site-test', $base));
    assert_contains('famille inconnue', implode(' ', registre_valider('service', 'x', ['famille' => 'Divers'] + $base)));
}
