<?php
declare(strict_types=1);

// Routeur des pages de registre (vague 0C) : résolution, refus, règles Apache, réponses HTTP.

require_once racine('helpers/functions.php');

function test_route_resout_chaque_forme_d_url(): void
{
    $r = racine('tools/tests/fixtures/registres');
    $j = '2026-10-03';
    assert_same('service', route_resoudre('services/site-test', $r, $j)['type']);
    assert_same('service-pays', route_resoudre('services/site-test/benin', $r, $j)['type']);
    assert_same('hub', route_resoudre('histoires/', $r, $j)['type']);
    assert_same('formation', route_resoudre('formations/ia-test', $r, $j)['type']);
    assert_same('page', route_resoudre('page-test', $r, $j)['type']);
    assert_same('terme', route_resoudre('glossaire/terme-test', $r, $j)['type']);
}

function test_route_refuse_futur_inconnu_et_hostile(): void
{
    $r = racine('tools/tests/fixtures/registres');
    foreach (['services/site-futur', 'services/inconnu', 'services/../config/site', 'Services/site-test', 'services/site-test/', 'services/site-test/benin/x', 'formations/domaine/ia-test', '', 'zones/atlantide'] as $chemin) {
        assert_same(null, route_resoudre($chemin, $r, '2026-10-03'), $chemin === '' ? '(vide)' : $chemin);
    }
}

function test_route_htaccess_envoie_les_registres_au_routeur(): void
{
    $h = (string) file_get_contents(racine('.htaccess'));
    assert_contains('RewriteRule ^(secteurs|histoires|comparatifs|guides|glossaire)$ /$1/ [R=301,L]', $h);
    assert_contains('RewriteRule ^((?:services|formations|zones|secteurs|histoires|comparatifs|guides|glossaire|outils)/[a-z0-9-]+(?:/[a-z0-9-]+){0,2})$ /portfolio/route.php?p=$1 [QSA,L]', $h);
    assert_true(strpos($h, 'portfolio/route.php?p=$1 [QSA,L]') < strpos($h, 'RewriteRule ^(.*)$ /404.php [L]'), 'avant le fourre-tout');
}

function test_route_http_404_franc_et_historique_intact(): void
{
    assert_same(404, http_local('/histoires/')['code'], 'hub non publié');
    assert_same(404, http_local('/zones/benin')['code']);
    assert_same(404, http_local('/formations/ia-en-entreprise/benin/x')['code']);
    assert_same(301, http_local('/guides')['code']);
    assert_same('/guides/', parse_url((string) http_local('/guides')['location'], PHP_URL_PATH));
    assert_same(301, http_local('/formations/ia-en-entreprise/')['code']);
    assert_same(200, http_local('/formation-vibecoding')['code'], 'page historique');
    assert_same(200, http_local('/developpeur-web-cotonou')['code']);
    assert_same(404, http_local('/n-existe-pas')['code']);
}

function test_route_hub_services_prefere_le_registre(): void
{
    $src = (string) file_get_contents(racine('portfolio/services-index.php'));
    $p = strpos($src, "route_resoudre('services/')");
    assert_true($p !== false && $p < strpos($src, 'exiger_base($pdo)'), 'registre avant la base');
}
