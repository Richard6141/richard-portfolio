<?php
declare(strict_types=1);

// Premier lot de comparatifs sourcés (vague 0C, demande de Richard du 03/10/2026).

require_once racine('helpers/functions.php');

const COMPARATIFS_LOT1 = ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier', 'fedapay-vs-kkiapay-vs-cinetpay', 'chatgpt-vs-claude-vs-gemini'];

function test_comparatifs_lot1_publies_complets_et_sources(): void
{
    foreach (COMPARATIFS_LOT1 as $slug) {
        $p = registre_lire('comparatif', $slug);
        assert_true($p !== null, $slug);
        assert_true(registre_publiee($p), "{$slug} publié");
        assert_true(count($p['faq']) >= 8, "{$slug} : 8 questions au moins");
        assert_true(count($p['sources']) >= 6, "{$slug} : 6 sources au moins");
        $externes = array_filter($p['sources'], static fn(array $s): bool => !str_contains($s['url'], 'richardsalanon.com'));
        assert_true(count($externes) >= 6, "{$slug} : sources externes");
        assert_true(in_array('comparaison', array_column($p['sections'], 'type'), true), "{$slug} : tableau comparatif");
        assert_same(200, http_local('/comparatifs/' . $slug)['code'], $slug);
    }
    assert_same(200, http_local('/comparatifs/')['code']);
}

function test_comparatifs_lot1_passent_les_controles_de_la_section_8(): void
{
    exec(PHP_BINARY . ' ' . escapeshellarg(racine('tools/qa/registres.php')) . ' --type=comparatif 2>&1', $sortie, $code);
    assert_same(0, $code, implode("\n", $sortie));
    exec(PHP_BINARY . ' ' . escapeshellarg(racine('tools/qa/registres.php')) . ' --type=hub 2>&1', $sortie2, $code2);
    assert_same(0, $code2, implode("\n", $sortie2));
}

function test_comparatifs_article_de_blog_redirige_et_lie_au_pied(): void
{
    assert_same('/comparatifs/n8n-vs-make-vs-zapier', redirections_table()['/blog/n8n-vs-zapier-vs-make-2026']);
    assert_contains('href="/comparatifs/"', http_local('/contact')['corps']);
}
