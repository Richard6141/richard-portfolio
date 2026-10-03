<?php
declare(strict_types=1);

// Vague 0B, Task 1 : ressources de la nouvelle identité.

require_once racine('helpers/faits.php');

function test_ressources_images_lisibles(): void
{
    foreach (['assets/img/richard-salanon-800.webp' => 800, 'assets/img/richard-salanon-400.webp' => 400, 'assets/img/richard-salanon-og.jpg' => 1200] as $fichier => $largeur) {
        $info = @getimagesize(racine($fichier));
        assert_true($info !== false, "image illisible : {$fichier}");
        assert_same($largeur, $info[0], $fichier);
    }
    foreach (['assets/img/logo-rs.svg', 'assets/img/logo-rs-clair.svg', 'assets/img/favicon.svg'] as $svg) {
        assert_true(@simplexml_load_file(racine($svg)) !== false, "SVG invalide : {$svg}");
    }
}

function test_ressources_fiche_de_faits_complete(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('/assets/img/richard-salanon-800.webp', $f['photo']);
    assert_true(is_file(racine(ltrim($f['photo'], '/'))), 'photo absente du disque');
    assert_true(is_file(racine(ltrim($f['photo_og'], '/'))), 'image Open Graph absente du disque');
    assert_same('0202348994221', $f['ifu']);
    assert_same('Auto-entrepreneur', $f['statut']);
}

function test_ressources_favicon_statique_sans_base(): void
{
    $r = http_local('/favicon.ico');
    assert_same(200, $r['code']);
    assert_contains('svg', $r['type']);
    assert_contains('<svg', $r['corps']);
    // Le fichier statique, pas le script dynamique (qui interrogeait la base).
    assert_same((string) file_get_contents(racine('assets/img/favicon.svg')), $r['corps']);
}

function test_ressources_logo_du_site(): void
{
    require_once racine('helpers/functions.php');
    assert_same('/assets/img/logo-rs.svg', siteLogoUrl());
}
