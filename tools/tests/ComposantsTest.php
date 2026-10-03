<?php
declare(strict_types=1);

// Vague 0B, Task 6 : composants CSS et script du site.

function test_composants_css_couvre_la_coque_et_les_blocs(): void
{
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    foreach ([
        '.entete', '.entete.is-solid', '.mega', '.nav-trigger', '.tiroir', '.pied', '.barre-mobile',
        '.visuellement-cache', '.btn--action', '.btn--contour', '.btn--sombre', '.btn-icone',
        '.svc-hero', '.vil-hero', '.about-hero', '.blog-hero',
        '[data-reveal]', '.bloc--faq', '.bloc--etapes', '.bloc--tableau', '.bloc--chiffres', '.bloc--lecon',
        '.tableau-defilant', '.liste-coches', '.carte-halo',
    ] as $selecteur) {
        assert_contains($selecteur, $css, "sélecteur absent : {$selecteur}");
    }
    assert_contains('prefers-reduced-motion', $css);
    assert_contains(':focus-visible', $css);
}

function test_composants_script_valide_et_leger(): void
{
    $fichier = racine('assets/js/portfolio-v2.js');
    exec('node --check ' . escapeshellarg($fichier) . ' 2>&1', $sortie, $code);
    assert_same(0, $code, 'node --check : ' . implode(' ', $sortie));
    $taille = strlen((string) gzencode((string) file_get_contents($fichier), 9));
    assert_true($taille < 15000, "script de {$taille} octets compressés (max 15 000)");
}

function test_composants_script_couvre_les_comportements(): void
{
    $js = (string) file_get_contents(racine('assets/js/portfolio-v2.js'));
    foreach (['nav-trigger', 'aria-expanded', 'Escape', 'tiroir', 'is-solid', 'data-reveal', 'IntersectionObserver', 'prefers-reduced-motion', 'blog-search-input', 'pv2-rot'] as $motif) {
        assert_contains($motif, $js, "comportement absent : {$motif}");
    }
}

function test_composants_heros_a_propos_garde_les_marges_du_conteneur(): void
{
    // Recette 0B à 390 px : « padding:1.5rem 0 40px » annulait les 26 px de .wrap,
    // le texte du héros touchait les bords de l'écran.
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    preg_match_all('#\.pv2 \.about-hero\{([^}]*)\}#', $css, $m);
    foreach ($m[1] as $regle) {
        assert_true(!preg_match('#(^|;)padding:[^;]*\b0\b#', $regle), 'padding horizontal nul sur .about-hero : ' . $regle);
    }
}

function test_composants_sans_javascript_rien_ne_reste_masque(): void
{
    // Recette 0B, script coupé : la section « flux » de l'accueil et les pages
    // villes restaient vides, .rv et .stg masquant leur contenu sans condition.
    $css = (string) preg_replace('#/\*.*?\*/#s', '', (string) file_get_contents(racine('assets/css/portfolio-v2.css')));
    preg_match_all('#(^|\})([^{}]*\.(?:rv|stg)\b[^{}]*)\{[^}]*opacity:0#m', $css, $m);
    foreach ($m[2] as $selecteur) {
        foreach (explode(',', $selecteur) as $s) {
            assert_true(str_starts_with(trim($s), '.rr '), 'masquage sans condition : ' . trim($s));
        }
    }
    assert_true(count($m[2]) >= 2, 'règles .rv et .stg introuvables');
}
