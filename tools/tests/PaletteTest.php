<?php
declare(strict_types=1);

// Vague 0B, Task 2 : nouvelle palette (spec 10.1) et contrastes AA.

/** Luminance relative WCAG 2.x d'une couleur #RRGGBB. */
function palette_luminance(string $hex): float
{
    $hex = ltrim($hex, '#');
    $canaux = [];
    foreach ([0, 2, 4] as $i) {
        $c = hexdec(substr($hex, $i, 2)) / 255;
        $canaux[] = $c <= 0.03928 ? $c / 12.92 : (($c + 0.055) / 1.055) ** 2.4;
    }
    return 0.2126 * $canaux[0] + 0.7152 * $canaux[1] + 0.0722 * $canaux[2];
}

function palette_contraste(string $a, string $b): float
{
    [$clair, $sombre] = [max(palette_luminance($a), palette_luminance($b)), min(palette_luminance($a), palette_luminance($b))];
    return ($clair + 0.05) / ($sombre + 0.05);
}

/** Valeur d'une variable déclarée dans le premier :root de la feuille. */
function palette_jeton(string $nom): string
{
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    preg_match('/:root\s*\{(.*?)\}/s', $css, $root);
    if (preg_match('/--' . preg_quote($nom, '/') . ':\s*(#[0-9A-Fa-f]{6})\s*[;}]/', $root[1] ?? '', $m) !== 1) {
        throw new EchecTest("jeton --{$nom} absent du :root");
    }
    return strtoupper($m[1]);
}

function test_palette_jetons_de_la_spec(): void
{
    $attendus = ['ink' => '#14161F', 'brand' => '#C2502F', 'link' => '#0F6B6B', 'accent' => '#E0A43A', 'surface' => '#F5EEE6', 'bg' => '#FFFFFF', 'line' => '#E8E1D8'];
    foreach ($attendus as $nom => $valeur) {
        assert_same($valeur, palette_jeton($nom), "--{$nom}");
    }
    // Anciennes variables remappées : tout le site change d'identité d'un coup.
    assert_same('#14161F', palette_jeton('navy'));
    assert_same('#C2502F', palette_jeton('acc'));
    assert_same('#F5EEE6', palette_jeton('soft'));
}

function test_palette_contrastes_aa(): void
{
    $paires = [
        ['ink', 'bg'], ['ink-soft', 'bg'], ['muted', 'bg'], ['link', 'bg'], ['muted', 'surface'], ['link', 'surface'],
    ];
    foreach ($paires as [$texte, $fond]) {
        $r = palette_contraste(palette_jeton($texte), palette_jeton($fond));
        assert_true($r >= 4.5, sprintf('--%s sur --%s : %.2f:1', $texte, $fond, $r));
    }
    foreach (['brand', 'ink', 'link'] as $fond) {
        $r = palette_contraste('#FFFFFF', palette_jeton($fond));
        assert_true($r >= 4.5, sprintf('blanc sur --%s : %.2f:1', $fond, $r));
    }
}

function test_palette_polices_auto_hebergees(): void
{
    foreach (['portfolio/partials/pv2-head.php', 'portfolio/index.php'] as $fichier) {
        $src = (string) file_get_contents(racine($fichier));
        assert_not_contains('fonts.googleapis.com', $src, $fichier);
        assert_contains('polices.php', $src, $fichier . ' doit inclure le partiel des polices');
    }
    $polices = (string) file_get_contents(racine('portfolio/partials/polices.php'));
    assert_contains('/assets/css/fonts.css', $polices);
    assert_contains('/assets/fonts/sora-latin.woff2', $polices);
    assert_contains('/assets/fonts/plus-jakarta-sans-latin.woff2', $polices);
    foreach (['sora-latin.woff2', 'plus-jakarta-sans-latin.woff2'] as $f) {
        assert_true(is_file(racine('assets/fonts/' . $f)), "police absente : {$f}");
    }
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('Plus Jakarta Sans', $css);
    assert_contains('Sora', $css);
    assert_not_contains('"Roboto"', $css);
}
