<?php
declare(strict_types=1);

require_once racine('helpers/site.php');

function test_site_base_sans_environnement_donne_la_production(): void
{
    assert_same('https://richardsalanon.com', site_base(false));
    assert_same('https://richardsalanon.com', site_base(null));
    assert_same('https://richardsalanon.com', site_base('  '));
}

function test_site_base_prend_l_environnement_et_retire_la_barre_finale(): void
{
    assert_same('http://localhost:8081', site_base('http://localhost:8081/'));
}

function test_site_url_from_donne_la_racine_avec_barre(): void
{
    assert_same('https://richardsalanon.com/', site_url_from('https://richardsalanon.com', '/'));
    assert_same('https://richardsalanon.com/', site_url_from('https://richardsalanon.com/', ''));
}

function test_site_url_from_ne_double_jamais_la_barre(): void
{
    assert_same('https://richardsalanon.com/services/site-e-commerce', site_url_from('https://richardsalanon.com/', '/services/site-e-commerce'));
    assert_same('https://richardsalanon.com/services/site-e-commerce', site_url_from('https://richardsalanon.com', 'services/site-e-commerce'));
}

function test_site_url_from_conserve_la_barre_finale_des_hubs(): void
{
    assert_same('https://richardsalanon.com/a-propos/', site_url_from('https://richardsalanon.com', '/a-propos/'));
}
