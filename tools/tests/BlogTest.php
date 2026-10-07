<?php
declare(strict_types=1);

// Vague 1F : reprise du blog (instantané, gabarit, migrations, contrôle hors ligne).

require_once racine('helpers/functions.php');
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
