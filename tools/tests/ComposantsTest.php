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

function test_composants_revue_tiroir_clavier_et_rotation_d_ecran(): void
{
    // Revue finale 0B : le bouton de fermeture sortait du cycle de tabulation ; une
    // tablette tournée en paysage tiroir ouvert gardait le défilement bloqué.
    $js = (string) file_get_contents(racine('assets/js/portfolio-v2.js'));
    assert_contains('[burger].concat(', $js, 'bouton de fermeture dans le cycle');
    assert_contains("matchMedia('(min-width: 64rem)')", $js);
    assert_true((bool) preg_match('#bureau\.addEventListener\(\'change\'#', $js), 'fermeture au passage en largeur bureau');
}

function test_composants_revue_menu_mobile_sans_javascript(): void
{
    $html = http_local('/contact')['corps'];
    assert_true((bool) preg_match('#<noscript>.*href="\#pied".*</noscript>#s', $html), 'lien de secours vers le pied');
    assert_contains('<footer class="pied" id="pied">', $html);
}

function test_composants_revue_boutons_entiers_a_320_px(): void
{
    // Revue finale 0B : « Demander mon devis gratuit » sortait de la bande d'appel
    // (overflow:hidden) à 320 px ; le bouton de la barre mobile débordait de 4 px.
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_true((bool) preg_match('#@media \(max-width:400px\)\{[^@]*\.pv2 \.cta-inner\{padding-left:1\.25rem;padding-right:1\.25rem\}[^@]*\.pv2 \.cta-inner \.btn\{white-space:normal;#', $css), 'règle 320 px de la bande d\'appel');
    assert_true((bool) preg_match('#@media \(max-width:400px\)\{[^@]*\.pv2 \.barre-mobile \.btn\{[^}]*font-size:\.88rem#', $css), 'règle 320 px de la barre mobile');
}

function test_composants_dettes_0b_soldees(): void
{
    foreach (['portfolio/partials/pv2-header.php', 'portfolio/partials/pv2-footer.php'] as $f) {
        assert_true(!preg_match('/\b34 pays\b/u', (string) file_get_contents(racine($f))), "{$f} : nombre de pays écrit en dur");
    }
    $head = (string) file_get_contents(racine('portfolio/partials/pv2-head.php'));
    assert_not_contains('rel="preload" as="style"', $head);
    assert_contains('media=', $head);
    $accueil = http_local('/')['corps'];
    assert_contains('media="(min-width: 1024px)"', $accueil, 'portrait préchargé sur ordinateur seulement');
    assert_contains('class="defilant__pause"', $accueil);
    $js = (string) file_get_contents(racine('assets/js/portfolio-v2.js'));
    assert_contains('defilant__pause', $js);
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('.pv2 .crumb a{color:var(--link);text-decoration:underline;text-underline-offset:3px}', $css);
    assert_contains('.pv2 .defilant.est-en-pause .defilant__piste,.pv2 .defilant:focus-within .defilant__piste{animation-play-state:paused}', $css);
}

function test_composants_bouton_long_passe_a_la_ligne_sur_mobile(): void
{
    // Vague 1B : « Demander la formation IA et droit OHADA » débordait à 320 et 390 px (white-space:nowrap).
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('.pv2 .btn{max-width:100%}', $css);
    assert_contains('@media (max-width:640px){.pv2 .btn{white-space:normal;', $css);
}

function test_composants_fil_ariane_sur_une_ligne_en_mobile(): void
{
    // Vague 1B : sur les fiches formation (4 niveaux, titres longs), le fil d'Ariane passait sur
    // plusieurs lignes au chargement de la police et décalait le hero (CLS 0,177 mesuré par Lighthouse).
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('@media (max-width:640px){.pv2 .crumb{white-space:nowrap;overflow-x:auto;', $css);
}

function test_composants_blocs_hors_ecran_rendus_a_la_demande(): void
{
    // Performance (05/10/2026) : les fiches de 7 000 à 9 000 mots coûtaient 725 ms de style et de mise
    // en page ; les blocs hors écran ne sont calculés qu'à l'approche (content-visibility).
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('.pv2 .registre__article>.bloc{content-visibility:auto;contain-intrinsic-size:auto 640px}', $css);
}
