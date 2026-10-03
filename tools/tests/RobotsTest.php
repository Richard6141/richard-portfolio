<?php
declare(strict_types=1);

require_once racine('helpers/robots.php');

function test_robots_autorise_explicitement_chaque_robot_ia(): void
{
    $txt = robots_txt('https://richardsalanon.com');
    foreach (['GPTBot', 'OAI-SearchBot', 'ClaudeBot', 'Claude-SearchBot', 'PerplexityBot', 'Google-Extended', 'Applebot-Extended', 'Bingbot', 'meta-externalagent', 'MistralAI-User', 'DuckAssistBot'] as $bot) {
        assert_contains("User-agent: {$bot}\nAllow: /\n", $txt, "robot absent : {$bot}");
    }
    assert_same(20, count(ROBOTS_IA));
}

function test_robots_une_seule_ligne_sitemap_absolue(): void
{
    $txt = robots_txt('https://richardsalanon.com/');
    assert_same(1, substr_count($txt, 'Sitemap:'));
    assert_contains("Sitemap: https://richardsalanon.com/sitemap.xml\n", $txt);
}

function test_robots_n_interdit_jamais_tout_le_site(): void
{
    assert_not_contains("Disallow: /\n", robots_txt('https://richardsalanon.com'));
}

function test_robots_autorise_les_vignettes_du_portrait(): void
{
    assert_contains("Allow: /api/thumb.php\n", robots_txt('https://richardsalanon.com'));
}

function test_robots_servi_en_local_sans_base(): void
{
    $r = http_local('/robots.txt');
    assert_same(200, $r['code']);
    assert_contains('text/plain', $r['type']);
    assert_contains('charset=utf-8', $r['type']);
    assert_contains('Sitemap: http://localhost:8081/sitemap.xml', $r['corps']);
}
