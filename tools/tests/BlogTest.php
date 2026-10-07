<?php
declare(strict_types=1);

// Vague 1F : reprise du blog (instantané, gabarit, migrations, contrôle hors ligne).

require_once racine('helpers/functions.php');
require_once racine('helpers/migrations.php');
require_once racine('helpers/icons.php');

function test_blog_extraire_lit_un_article_en_ligne(): void
{
    $a = blog_extraire((string) file_get_contents(racine('tools/tests/fixtures/blog/article.html')));
    assert_same('Pourquoi votre site est lent (et comment le rendre rapide)', $a['titre']);
    assert_same('Développement web', $a['categorie']);
    assert_same(['performance', 'Core Web Vitals'], $a['tags']);
    assert_same('2026-07-09', $a['publie']);
    assert_same('2026-10-03', $a['maj']);
    assert_contains('Un site lent fait fuir', $a['meta']);
    assert_same('<h2>Qu\'est-ce qui ralentit un site ?</h2><p>Des images trop lourdes ; un hébergement saturé.</p>', $a['contenu']);
}

function test_blog_mots_compte_le_texte_sans_coller_les_blocs(): void
{
    assert_same(6, blog_mots('<h2>Deux mots</h2><p>et quatre&nbsp;autres ici</p>'));
    assert_same(0, blog_mots(''));
}

function blog_rendre_partiel(string $fichier, array $vars): string
{
    extract($vars);
    ob_start();
    include racine('portfolio/partials/' . $fichier);
    return (string) ob_get_clean();
}

function test_blog_date_maj_jamais_avant_la_publication(): void
{
    assert_same('2026-08-25', blog_date_maj(['published_at' => '2026-08-25 08:00:00', 'updated_at' => '2026-08-20 10:00:00']));
    assert_same('2026-10-20', blog_date_maj(['published_at' => '2026-06-08 08:00:00', 'updated_at' => '2026-10-20 10:00:00']));
    assert_same('', blog_date_maj(['published_at' => null, 'updated_at' => null]));
}

function test_blog_meta_colonne_puis_resume(): void
{
    $meta = str_repeat('a', 145);
    assert_same($meta, blog_meta(['meta' => $meta, 'summary' => 'Autre chose.']));
    assert_same('Résumé court.', blog_meta(['summary' => 'Résumé court.']), 'colonne absente pendant le déploiement');
    assert_same('Résumé court.', blog_meta(['meta' => '  ', 'summary' => 'Résumé court.']));
    assert_same('Texte du contenu.', blog_meta(['summary' => '', 'content' => '<p>Texte du contenu.</p>']));
}

function test_blog_tete_affiche_en_bref_et_les_deux_dates(): void
{
    $html = blog_rendre_partiel('article-tete.php', [
        'post' => ['title' => 'Titre de test', 'category' => 'SEO', 'summary' => 'Réponse directe en deux phrases. Puis la suite.',
                   'published_at' => '2026-06-08 09:00:00', 'updated_at' => '2026-10-20 10:00:00'],
        'fullName' => 'Richard SALANON', 'readingTime' => 13,
    ]);
    assert_contains('<h1>Titre de test</h1>', $html);
    assert_contains('<strong>En bref.</strong> Réponse directe en deux phrases. Puis la suite.', $html);
    assert_contains('Publié le <time datetime="2026-06-08">' . registre_date_fr('2026-06-08') . '</time>', $html);
    assert_contains('Mis à jour le <time datetime="2026-10-20">' . registre_date_fr('2026-10-20') . '</time>', $html);
    $sansResume = blog_rendre_partiel('article-tete.php', ['post' => ['title' => 'T', 'summary' => '', 'published_at' => null, 'updated_at' => null], 'fullName' => 'R', 'readingTime' => 0]);
    assert_not_contains('En bref', $sansResume);
    assert_not_contains('Mis à jour', $sansResume);
}

function test_blog_corps_avec_boite_auteur_et_gabarit_branche(): void
{
    $corps = blog_rendre_partiel('article-corps.php', ['articleHtml' => '<h2>Question ?</h2><p>Texte.</p>']);
    assert_contains('<div class="art-prose"><h2>Question ?</h2><p>Texte.</p></div>', $corps);
    assert_contains('class="boite-auteur"', $corps);
    $src = (string) file_get_contents(racine('portfolio/article.php'));
    foreach (['article-tete.php', 'article-corps.php', 'blog_meta($post)'] as $attendu) {
        assert_contains($attendu, $src);
    }
    assert_not_contains('pv2EditorialFonts', $src, 'Fraunces et Lora sont retirées (spec 2, polices)');
}

function test_blog_tableau_de_bord_edite_la_meta(): void
{
    $api = (string) preg_replace('/\s+/', '', (string) file_get_contents(racine('api/blog.php')));
    assert_contains('meta=?', $api);
    assert_contains("'meta'=>", $api);
    assert_contains('form.meta', (string) file_get_contents(racine('dashboard/blog.php')));
}

function test_blog_tableau_de_bord_charge_les_listes_par_le_presse_papiers_de_quill(): void
{
    $src = (string) file_get_contents(racine('dashboard/blog.php'));
    assert_contains('clipboard.convert(', $src, 'chargement : root.innerHTML perd les <ul> (Quill 2.0.3)');
}

function test_blog_tableau_de_bord_enregistre_le_html_semantique_de_quill(): void
{
    $src = (string) file_get_contents(racine('dashboard/blog.php'));
    assert_contains('getSemanticHTML()', $src, 'enregistrement : root.innerHTML rend les listes au format interne de Quill');
}

function test_blog_tableau_de_bord_n_ecrit_plus_root_innerhtml(): void
{
    $src = (string) file_get_contents(racine('dashboard/blog.php'));
    assert_not_contains('root.innerHTML =', $src, 'plus d\'affectation de root.innerHTML');
}

function test_blog_tableau_de_bord_ne_lit_plus_root_innerhtml(): void
{
    $src = (string) file_get_contents(racine('dashboard/blog.php'));
    assert_not_contains('root.innerHTML;', $src, 'plus de lecture de root.innerHTML');
}

function test_blog_redirection_vers_un_article_seulement_s_il_est_en_ligne(): void
{
    $table = ['/blog/doublon' => '/blog/garde'];
    $garde = static fn(string $slug): bool => $slug === 'garde';
    $aucun = static fn(string $slug): bool => false;
    assert_same('/blog/garde', redirection_cible('/blog/doublon', $table, REGISTRES_RACINE, null, $garde));
    assert_same(null, redirection_cible('/blog/doublon', $table, REGISTRES_RACINE, null, $aucun), 'cible absente : l\'ancien article reste servi');
    assert_same(null, redirection_cible('/blog/inconnu', $table, REGISTRES_RACINE, null, $garde));
}

function test_blog_article_en_ligne_faux_sans_base(): void
{
    // Le site local tourne sans base (AmorcageTest) : aucune redirection d'article ne s'active, aucune exception.
    assert_same(false, blog_article_en_ligne('un-article-quelconque'));
}

function test_blog_sitemap_et_llms_sans_articles_rediriges(): void
{
    $fonctions = (string) file_get_contents(racine('helpers/functions.php'));
    $debut = (int) strpos($fonctions, 'function sitemap_entrees_base');
    assert_contains('blog_sans_rediriges(', substr($fonctions, $debut, 3000), 'sitemap : article redirigé retiré');
    assert_contains('blog_sans_rediriges', (string) file_get_contents(racine('helpers/llms.php')), 'llms.txt : article redirigé retiré');
}

function blog_source_de_test(array $modif = []): array
{
    $faq = '';
    for ($i = 1; $i <= 6; $i++) {
        $faq .= "<p><strong>Question numéro {$i} ?</strong></p><p>Réponse numéro {$i}.</p>";
    }
    return $modif + [
        'slug'       => 'test-article',
        'instantane' => '2026-10-07 12:00:00',
        'titre'      => 'Titre ' . str_repeat('x', 49),
        'meta'       => str_repeat('m', 149) . '.',
        'resume'     => 'Première phrase du résumé. Deuxième phrase du résumé.',
        'categorie'  => 'SEO',
        'tags'       => ['a/b', 'référencement'],
        'contenu'    => '<h2>Pourquoi tester ?</h2><p>Texte avec <a href="/contact">un lien</a>.</p><h2>Questions fréquentes</h2>' . $faq
                      . '<h2>Sources</h2><ul><li><a href="https://example.org/">Source</a>, consultée le 7 octobre 2026</li></ul>',
    ];
}

function test_blog_source_valide_et_refus(): void
{
    assert_same([], blog_article_problemes(blog_source_de_test(), 'test-article'));
    $base = blog_source_de_test()['contenu'];
    $p = static fn(array $m): string => implode(' | ', blog_article_problemes(blog_source_de_test($m), 'test-article'));
    assert_contains('titre', $p(['titre' => 'Trop court']));
    assert_contains('meta', $p(['meta' => 'Courte.']));
    assert_contains('résumé', $p(['resume' => 'Une seule phrase.']));
    assert_contains('balise <table>', $p(['contenu' => $base . '<table><tr><td>x</td></tr></table>']));
    assert_contains('attribut class', $p(['contenu' => $base . '<p class="x">y</p>']));
    assert_contains('H2 sans question', $p(['contenu' => '<h2>Un titre plat</h2>' . $base]));
    assert_contains('FAQ', $p(['contenu' => '<h2>Pourquoi ?</h2><p>x</p><h2>Sources</h2><ul><li><a href="https://example.org/">S</a></li></ul>']));
    assert_contains('Sources', $p(['contenu' => '<h2>Pourquoi ?</h2><p>x</p>']));
    assert_contains('emoji', $p(['contenu' => $base . '<p>Bravo 🙂</p>']));
    assert_contains('paragraphe de 121 mots', $p(['contenu' => $base . '<p>' . trim(str_repeat('mot ', 121)) . '</p>']));
    assert_contains('instantane', $p(['instantane' => '07/10/2026']));
    assert_contains('slug', implode(' ', blog_article_problemes(blog_source_de_test(), 'autre-nom')));
    assert_same([], blog_hors_quill('<p><a href="https://x.org/?a=b&amp;c=d">lien</a> <img src="/uploads/blog/x.webp" alt="x"></p>'), 'un = dans une URL n\'est pas un attribut');
    assert_contains('image hors /uploads/', implode(' ', blog_hors_quill('<p><img src="https://x.org/i.png" alt="x"></p>')));
}

function test_blog_migration_une_instruction_et_texte_intact(): void
{
    $piege = "<p>L'apostrophe, un \ antislash ; un point-virgule, des \"guillemets\".</p>\n-- <p>ligne qui commence par deux tirets</p>\r\n<p>Fin : é à ç œ.</p>";
    $sql = blog_sql_mise_a_jour(blog_source_de_test(['contenu' => $piege, 'titre' => "Titre d'essai"]));
    $instructions = migration_decouper_sql($sql);
    assert_same(1, count($instructions), $sql);
    $i = $instructions[0];
    assert_contains("WHERE slug = 'test-article' AND (updated_at IS NULL OR updated_at <= '2026-10-07 12:00:00')", $i);
    assert_contains("title = 'Titre d\'essai'", $i);
    assert_contains('updated_at = NOW()', $i);
    $debut = strpos($i, "content = '") + strlen("content = '");
    $fin = strpos($i, "', category = ");
    assert_same($piege, stripcslashes(substr($i, $debut, $fin - $debut)), 'le littéral décodé comme par MySQL redonne le texte');
}

function test_blog_qa_hors_ligne_sur_une_source_valide(): void
{
    $dossier = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'blog-qa-' . getmypid();
    if (!is_dir($dossier)) { mkdir($dossier); }
    file_put_contents($dossier . DIRECTORY_SEPARATOR . 'test-article.php', '<?php return ' . var_export(blog_source_de_test(), true) . ';');
    exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(racine('tools/blog/qa.php')) . ' --dossier=' . escapeshellarg($dossier) . ' 2>&1', $sortie, $code);
    array_map('unlink', glob($dossier . DIRECTORY_SEPARATOR . '*.php') ?: []);
    rmdir($dossier);
    assert_same(0, $code, implode("\n", $sortie));
    assert_contains('test-article', implode("\n", $sortie));
}
