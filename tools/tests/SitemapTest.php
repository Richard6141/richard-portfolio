<?php
declare(strict_types=1);

require_once racine('config/site.php');
require_once racine('helpers/functions.php');

function test_sitemap_lastmod_prefere_la_date_saisie(): void
{
    assert_same('2026-10-01', sitemap_lastmod('2026-10-01', 1_700_000_000));
    assert_same(date('Y-m-d', 1_700_000_000), sitemap_lastmod(null, 1_700_000_000));
    assert_same(null, sitemap_lastmod('pas une date', null));
    assert_same(null, sitemap_lastmod(null, false));
}

function test_sitemap_xml_ignore_les_doublons_et_echappe(): void
{
    $xml = sitemap_xml([
        ['loc' => 'https://richardsalanon.com/a?b=1&c=2', 'lastmod' => null, 'changefreq' => 'monthly', 'priority' => '0.5'],
        ['loc' => 'https://richardsalanon.com/a?b=1&c=2', 'lastmod' => '2026-10-01', 'changefreq' => 'monthly', 'priority' => '0.5'],
    ]);
    assert_same(1, substr_count($xml, '<loc>'));
    assert_contains('&amp;c=2', $xml);
    assert_not_contains('<lastmod>', $xml, 'la première entrée, sans date, doit être gardée telle quelle');
}

function test_sitemap_sans_base_liste_encore_les_pages_de_fichiers(): void
{
    $xml = buildSitemapXml(null, 'https://richardsalanon.com');
    assert_true(simplexml_load_string($xml) !== false, 'XML invalide');
    assert_contains('<loc>https://richardsalanon.com/developpeur-web-cotonou</loc>', $xml);
    assert_contains('<loc>https://richardsalanon.com/formation-ia-entreprise-cotonou</loc>', $xml);
    assert_contains('<loc>https://richardsalanon.com/formations/</loc>', $xml);
    assert_not_contains('://www.richardsalanon', $xml);
    assert_true(substr_count($xml, '<loc>') >= 90, 'moins de 90 URL de fichiers (97 au 03/10/2026)');
}

function test_sitemap_servi_en_local_sans_base(): void
{
    $r = http_local('/sitemap.xml');
    assert_same(200, $r['code']);
    assert_contains('<loc>http://localhost:8081/developpeur-web-cotonou</loc>', $r['corps']);
}

function test_sitemap_registres_publies_indexables_date_maj(): void
{
    require_once racine('helpers/functions.php');
    $e = sitemap_entrees_registres('https://richardsalanon.com', racine('tools/tests/fixtures/registres'), '2026-10-03');
    $par = array_column($e, 'lastmod', 'loc');
    assert_same('2026-01-02', $par['https://richardsalanon.com/services/site-test'] ?? null);
    assert_true(isset($par['https://richardsalanon.com/histoires/']), 'hub publié');
    assert_true(!isset($par['https://richardsalanon.com/services/site-futur']), 'date future');
    assert_true(!isset($par['https://richardsalanon.com/page-legale-test']), 'noindex');
}

function test_sitemap_exclut_les_anciennes_url_redirigees(): void
{
    $xml = buildSitemapXml(null, 'https://richardsalanon.com');
    foreach (redirections_table() as $de => $vers) {
        if (redirection_cible($de) !== null) {
            assert_not_contains('<loc>https://richardsalanon.com' . $de . '</loc>', $xml, $de);
        }
    }
}
