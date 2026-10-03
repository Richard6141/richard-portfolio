<?php
declare(strict_types=1);

// Vague 0B, Task 3 : les pages servies depuis des fichiers s'affichent sans base.

function test_amorcage_pages_de_fichiers_rendues_sans_base(): void
{
    foreach (['/developpeur-web-cotonou', '/formation-vibecoding', '/a-propos/', '/contact'] as $chemin) {
        $r = http_local($chemin);
        assert_same(200, $r['code'], $chemin);
        assert_not_contains('Fatal error', $r['corps'], $chemin);
        assert_same(1, substr_count($r['corps'], '<h1'), $chemin . ' : un seul H1 attendu');
        assert_contains('Cotonou', $r['corps'], $chemin);
    }
}

function test_amorcage_pages_de_base_repondent_503_proprement(): void
{
    foreach (['/services/', '/blog/'] as $chemin) {
        $r = http_local($chemin);
        assert_same(503, $r['code'], $chemin);
        assert_not_contains('Fatal error', $r['corps'], $chemin);
    }
}
