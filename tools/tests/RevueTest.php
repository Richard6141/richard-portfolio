<?php
declare(strict_types=1);

// Correctifs issus de la revue finale de la vague 0A (03/10/2026).

require_once racine('helpers/faits.php');
require_once racine('helpers/schema.php');

function test_revue_aucune_reference_a_l_organization_supprimee(): void
{
    foreach (['portfolio/contact.php', 'portfolio/realisation.php'] as $fichier) {
        assert_not_contains("'/#organization'", (string) file_get_contents(racine($fichier)), $fichier);
    }
}

function test_revue_migration_typographique_limitee_aux_titres_et_resumes(): void
{
    $sql = (string) file_get_contents(racine('migrations/2026-10-03-realisations-typographie.sql'));
    assert_not_contains("'decoupage', 'découpage'", $sql, 'le remplacement en minuscules corromprait les slugs dans les URL');
    foreach (['description_long', 'case_contexte', 'case_probleme', 'case_solution', 'case_resultat'] as $colonne) {
        assert_not_contains($colonne . ' ', $sql, "colonne longue non vérifiée en production : {$colonne}");
    }
}

function test_revue_redirection_www_garde_l_encodage_des_url(): void
{
    $r = http_local('/a%20b?utm=x%20y', 'www.richardsalanon.com');
    assert_same(301, $r['code']);
    assert_same('https://richardsalanon.com/a%20b?utm=x%20y', $r['location']);
}

function test_revue_une_erreur_de_schema_ne_fait_pas_tomber_la_page(): void
{
    assert_same('', schema_graphe_sur([['@type' => 'Thing', 'review' => ['@type' => 'Thing']]]));
    assert_contains('@graph', schema_graphe_sur([['@type' => 'Thing', 'name' => 'ok']]));
}

function test_revue_person_compacte_conforme_a_la_spec(): void
{
    $p = schema_personne(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com');
    assert_true(!empty($p['knowsAbout']), 'knowsAbout attendu sur chaque page (spec 5.3)');
    assert_same('EPITECH', $p['alumniOf']['name'] ?? null);
}

function test_revue_rsync_sans_dates_de_dossiers(): void
{
    $yml = (string) file_get_contents(racine('.github/workflows/deploy.yml'));
    assert_same(2, substr_count($yml, 'rsync -rlztO '), 'rsync -O évite un échec partiel sur un dossier distant non possédé');
}

function test_revue_les_gabarits_utilisent_la_version_sure_du_graphe(): void
{
    foreach (['portfolio/partials/pv2-head.php', 'portfolio/index.php'] as $fichier) {
        $src = (string) file_get_contents(racine($fichier));
        assert_contains('schema_graphe_sur(', $src, $fichier);
    }
}
