<?php
declare(strict_types=1);

function test_htaccess_www_redirige_en_un_saut_vers_le_domaine_nu(): void
{
    $r = http_local('/a-propos/?source=test', 'www.richardsalanon.com');
    assert_same(301, $r['code']);
    assert_same('https://richardsalanon.com/a-propos/?source=test', $r['location']);
}

function test_htaccess_http_redirige_vers_https(): void
{
    $r = http_local('/contact', 'richardsalanon.com');
    assert_same(301, $r['code']);
    assert_same('https://richardsalanon.com/contact', $r['location']);
}

function test_htaccess_hote_local_jamais_redirige(): void
{
    $r = http_local('/assets/img/logo-rt.webp');
    assert_same(200, $r['code']);
    $r = http_local('/assets/img/logo-rt.webp', '127.0.0.1:8081');
    assert_same(200, $r['code']);
}

function test_htaccess_script_interne_appele_directement_renvoie_a_l_accueil(): void
{
    $r = http_local('/portfolio/a-propos.php?x=1');
    assert_same(301, $r['code']);
    assert_true(str_ends_with($r['location'], ':8081/') || $r['location'] === '/', 'Location inattendue : ' . $r['location']);
    $r = http_local('/index.php');
    assert_same(301, $r['code']);
}

function test_htaccess_favicon_ico_est_servi(): void
{
    $r = http_local('/favicon.ico');
    assert_same(200, $r['code']);
    assert_contains('svg', $r['type']);
}

function test_htaccess_texte_brut_annonce_utf8(): void
{
    $r = http_local('/a7f3c9e21b6d4f08a5c2e9d7b4f16a83.txt');
    assert_same(200, $r['code']);
    assert_contains('charset=utf-8', $r['type']);
}

function test_workflow_quotidien_regenere_le_sitemap(): void
{
    // Vague 1B : une page dont la date « publie » arrive entre deux déploiements entre dans le sitemap le matin même.
    $y = (string) @file_get_contents(racine('.github/workflows/quotidien.yml'));
    assert_contains('schedule:', $y);
    assert_contains("cron: '15 6 * * *'", $y);
    assert_contains('generate-sitemap.php?key=${{ secrets.SITEMAP_KEY }}', $y);
    assert_contains('https://api.indexnow.org/IndexNow', $y);
}
