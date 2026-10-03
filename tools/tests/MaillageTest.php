<?php
declare(strict_types=1);

// Maillage depuis les registres (vague 0C) : fil d'Ariane et liens obligatoires (spec 9).

require_once racine('helpers/functions.php');

function maillage_fixture(string $type, string $slug): array
{
    return registre_lire($type, $slug, racine('tools/tests/fixtures/registres'));
}

function maillage_urls(array $groupes): array
{
    $u = [];
    foreach ($groupes as $g) { foreach ($g['liens'] as [, $url]) { $u[] = $url; } }
    return $u;
}

function test_maillage_pilier_vers_ses_pages_pays_et_liens_editoriaux(): void
{
    $u = maillage_urls(maillage_liens(maillage_fixture('service', 'site-test'), racine('tools/tests/fixtures/registres'), '2026-10-03'));
    assert_true(in_array('/services/site-test/benin', $u, true));
    assert_true(in_array('/services/site-test/togo', $u, true));
    assert_true(in_array('/formations/ia-test', $u, true));
    assert_true(in_array('/histoires/histoire-test', $u, true));
    assert_true(!in_array('/services/site-test', $u, true), 'jamais la page elle-même');
}

function test_maillage_page_pays_vers_pilier_et_voisins_publies(): void
{
    $u = maillage_urls(maillage_liens(maillage_fixture('service-pays', 'site-test/benin'), racine('tools/tests/fixtures/registres'), '2026-10-03'));
    assert_true(in_array('/services/site-test', $u, true), 'pilier');
    assert_true(in_array('/services/site-test/togo', $u, true), 'voisin publié');
    assert_true(!in_array('/services/site-test/niger', $u, true), 'voisin sans page');
}

function test_maillage_aucune_cible_future(): void
{
    $p = ['liens' => ['services' => ['site-futur', 'site-test']]] + maillage_fixture('histoire', 'histoire-test');
    $u = maillage_urls(maillage_liens($p, racine('tools/tests/fixtures/registres'), '2026-10-03'));
    assert_true(!in_array('/services/site-futur', $u, true));
    assert_true(in_array('/services/site-test', $u, true));
}

function test_maillage_ariane_hub_seulement_s_il_est_publie(): void
{
    $racine = racine('tools/tests/fixtures/registres');
    assert_same([['Accueil', '/'], ['Histoires', '/histoires/'], ['Histoire de test', '/histoires/histoire-test']],
        maillage_ariane(maillage_fixture('histoire', 'histoire-test'), $racine, '2026-10-03'));
    $c = maillage_ariane(maillage_fixture('comparatif', 'a-vs-b'), $racine, '2026-10-03');
    assert_same(2, count($c), 'pas de hub comparatifs dans les fixtures');
    $sp = maillage_ariane(maillage_fixture('service-pays', 'site-test/benin'), $racine, '2026-10-03');
    assert_same(['Services', '/services/'], $sp[1]);
    assert_same('/services/site-test', $sp[2][1]);
}

function test_maillage_page_pays_vers_ses_villes_sans_avertissement(): void
{
    // Recette 0C : data/villes.php, chargé dans maillage_liens(), écrasait ses variables locales.
    set_error_handler(static function (int $n, string $m): bool { throw new ErrorException($m, 0, $n); });
    try {
        $g = maillage_liens(maillage_fixture('pays', 'benin'), racine('tools/tests/fixtures/registres'), '2026-10-03');
    } finally {
        restore_error_handler();
    }
    $liens = [];
    foreach ($g as $groupe) { foreach ($groupe['liens'] as $l) { $liens[$l[1]] = $l[0]; } }
    assert_same('Développeur web à Cotonou', $liens['/developpeur-web-cotonou'] ?? null);
}
