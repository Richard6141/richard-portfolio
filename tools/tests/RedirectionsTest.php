<?php
declare(strict_types=1);

// Table des redirections (spec 6.8, vague 0C) : actives à la publication de la cible, liens finaux.

require_once racine('helpers/functions.php');

function test_redirections_table_conforme_a_la_spec(): void
{
    $t = redirections_table();
    assert_true(count($t) >= 66, count($t) . ' entrées');
    foreach ($t as $de => $vers) {
        assert_true(str_starts_with($de, '/') && str_starts_with($vers, '/'), $de);
        assert_true(!isset($t[$vers]), "chaîne : {$de} vers {$vers}");
        $resolue = false;
        foreach (array_keys(ROUTES_REGISTRES) as $motif) { if (preg_match($motif, ltrim($vers, '/'), $m)) { $resolue = true; break; } }
        assert_true($resolue, "cible hors registres : {$vers}");
    }
    assert_same('/formations/ia-en-entreprise/benin', $t['/formation-ia-entreprise-natitingou']);
    assert_same('/services/externalisation-developpement/canada', $t['/externaliser-developpement-web-quebec']);
    assert_same('/services/integration-odoo/cote-d-ivoire', $t['/integration-odoo-abidjan']);
    assert_same('/histoires/', $t['/realisations/']);
}

function test_redirections_actives_seulement_vers_une_cible_publiee(): void
{
    $r = racine('tools/tests/fixtures/registres');
    $table = ['/ancienne' => '/services/site-test', '/vers-futur' => '/services/site-futur'];
    assert_same('/services/site-test', redirection_cible('/ancienne', $table, $r, '2026-10-03'));
    assert_same(null, redirection_cible('/vers-futur', $table, $r, '2026-10-03'));
    assert_same(null, redirection_cible('/inconnue', $table, $r, '2026-10-03'));
    assert_same('/services/site-test#faq', url_finale('/ancienne#faq', $table, $r, '2026-10-03'));
    assert_same('/contact', url_finale('/contact', $table, $r, '2026-10-03'));
}

function test_redirections_inactives_aujourd_hui_les_anciennes_pages_repondent(): void
{
    assert_same(200, http_local('/formation-ia-entreprise-cotonou')['code']);
    assert_same(200, http_local('/integration-odoo-cotonou')['code']);
}

function test_redirections_appliquees_partout_et_liens_finaux(): void
{
    foreach (['portfolio/partials/pv2-bootstrap.php', 'portfolio/article.php', 'portfolio/route.php'] as $f) {
        assert_contains('redirection_appliquer(', (string) file_get_contents(racine($f)), $f);
    }
    foreach (['portfolio/partials/pv2-header.php', 'portfolio/accueil.php'] as $f) {
        assert_contains('navigation_chargee()', (string) file_get_contents(racine($f)), $f);
    }
    assert_contains('url_finale(', (string) file_get_contents(racine('portfolio/partials/pv2-footer.php')));
}
