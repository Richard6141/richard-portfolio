<?php
declare(strict_types=1);

// Table des redirections (spec 6.8, vague 0C) : actives à la publication de la cible, liens finaux.

require_once racine('helpers/functions.php');

function test_redirections_table_conforme_a_la_spec(): void
{
    $t = redirections_table();
    assert_true(count($t) >= 60, count($t) . ' entrées');
    foreach ($t as $de => $vers) {
        assert_true(str_starts_with($de, '/') && str_starts_with($vers, '/'), $de);
        assert_true(!isset($t[$vers]), "chaîne : {$de} vers {$vers}");
        $resolue = (bool) preg_match('#^/blog/[a-z0-9-]+$#', $vers);
        foreach (array_keys(ROUTES_REGISTRES) as $motif) { if (preg_match($motif, ltrim($vers, '/'), $m)) { $resolue = true; break; } }
        assert_true($resolue, "cible hors registres : {$vers}");
    }
    assert_same('/formations/ia-en-entreprise/benin', $t['/formation-ia-entreprise-natitingou']);
    assert_same('/services/externalisation-developpement/canada', $t['/externaliser-developpement-web-quebec']);
    assert_same('/services/integration-odoo/cote-d-ivoire', $t['/integration-odoo-abidjan']);
    // Richard a demandé le 03/10/2026 une page Réalisations refaite : elle reste, sans redirection vers /histoires/.
    assert_true(!isset($t['/realisations/']) && !isset($t['/realisations/obaprodc']), 'réalisations conservées');
}

function test_redirections_actives_seulement_vers_une_cible_publiee(): void
{
    $r = racine('tools/tests/fixtures/registres');
    $table = ['/ancienne' => '/services/site-test', '/vers-futur' => '/services/site-futur'];
    assert_same('/services/site-test', redirection_cible('/ancienne', $table, $r, '2026-10-03'));
    assert_same(null, redirection_cible('/vers-futur', $table, $r, '2026-10-03'));
    assert_same(null, redirection_cible('/inconnue', $table, $r, '2026-10-03'));
    assert_same('/services/site-test#faq', url_finale('/ancienne#faq', $table, $r, '2026-10-03'));
    assert_same('/contact', url_finale('/contact', $table, $r, '2026-10-03'));
}

function test_redirections_inactives_aujourd_hui_les_anciennes_pages_repondent(): void
{
    assert_same(200, http_local('/formation-ia-entreprise-cotonou')['code']);
    assert_same(200, http_local('/integration-odoo-cotonou')['code']);
}

function test_redirections_appliquees_partout_et_liens_finaux(): void
{
    foreach (['portfolio/partials/pv2-bootstrap.php', 'portfolio/article.php', 'portfolio/route.php'] as $f) {
        assert_contains('redirection_appliquer(', (string) file_get_contents(racine($f)), $f);
    }
    foreach (['portfolio/partials/pv2-header.php', 'portfolio/accueil.php'] as $f) {
        assert_contains('navigation_chargee()', (string) file_get_contents(racine($f)), $f);
    }
    assert_contains('url_finale(', (string) file_get_contents(racine('portfolio/partials/pv2-footer.php')));
}

function test_redirections_revue_articles_de_blog_rediriges_retires_des_listes(): void
{
    // Revue finale 0C : liste du blog, barre latérale, accueil, articles liés et IndexNow
    // pointaient encore vers l'article devenu comparatif (301).
    $lignes = [['slug' => 'n8n-vs-zapier-vs-make-2026', 'title' => 'Ancien'], ['slug' => 'autre-article', 'title' => 'Garde']];
    assert_same(['autre-article'], array_column(blog_sans_rediriges($lignes), 'slug'));
    foreach (['portfolio/blog-index.php', 'portfolio/partials/pv2-blog-sidebar.php', 'portfolio/accueil.php', 'portfolio/article.php', 'indexnow.php'] as $f) {
        assert_contains('blog_sans_rediriges(', (string) file_get_contents(racine($f)), $f);
    }
}

function test_redirections_anciennes_formations_vers_leur_fiche_en_un_saut(): void
{
    // Vague 1B : les 9 anciennes pages formation (et l'ancienne fiche en base) pointent sur leur fiche.
    foreach (['/formation-ia-entreprise' => '/formations/ia-en-entreprise', '/formation-odoo' => '/formations/odoo-utilisateurs',
              '/formation-outils-numeriques' => '/formations/excel-google-sheets', '/formation-automatisation' => '/formations/n8n',
              '/services/formation-en-programmation' => '/formations/developpement-web'] as $ancienne => $cible) {
        $r = http_local($ancienne);
        assert_same(301, $r['code'], $ancienne);
        assert_same($cible, parse_url((string) $r['location'], PHP_URL_PATH), $ancienne);
        assert_same(200, http_local($cible)['code'], $cible);
    }
    assert_same(200, http_local('/formation-ia-entreprise-cotonou')['code'], 'page de ville conservée');
}

function test_redirections_slugs_de_blog_rediriges_et_fragment_sql_lie(): void
{
    $r = racine('tools/tests/fixtures/registres');
    $table = [
        '/blog/ancien-actif'  => '/services/site-test',
        '/blog/ancien-futur'  => '/services/site-futur',
        '/blog/fusionne'      => '/blog/cible-en-ligne',
        '/blog/fusion-hors'   => '/blog/cible-absente',
        '/formation-x'        => '/services/site-test',
    ];
    $enLigne = static fn(string $slug): bool => $slug === 'cible-en-ligne';
    $slugs = blog_slugs_rediriges($table, $r, '2026-10-03', $enLigne);
    assert_same(['ancien-actif', 'fusionne'], $slugs, 'seuls les /blog/ dont la cible est publiée');

    [$sql, $params] = blog_exclusion_sql($slugs);
    assert_same(' AND slug NOT IN (?, ?)', $sql);
    assert_same(['ancien-actif', 'fusionne'], $params);
    [$sql, $params] = blog_exclusion_sql(["x') OR 1=1 --"], 'p.slug');
    assert_same(' AND p.slug NOT IN (?)', $sql, 'valeur jamais concaténée au SQL');
    assert_same(["x') OR 1=1 --"], $params);
    assert_same(['', []], blog_exclusion_sql([]), 'liste vide : pas de fragment');
}

function test_redirections_exclusion_sql_branchee_dans_les_pages_du_blog(): void
{
    foreach (['portfolio/blog-index.php', 'portfolio/partials/pv2-blog-sidebar.php', 'portfolio/article.php'] as $f) {
        $src = (string) file_get_contents(racine($f));
        assert_contains('blog_exclusion_sql(blog_slugs_rediriges())', $src, $f);
    }
}

function test_redirections_ancien_slug_sans_accent_va_a_l_url_finale_en_un_saut(): void
{
    $r = racine('tools/tests/fixtures/registres');
    // Le slug corrigé redirige lui-même : la 301 de l'ancien slug va droit à sa cible.
    $table = ['/blog/slug-corrige' => '/services/site-test'];
    assert_same('/services/site-test', url_finale('/blog/slug-corrige', $table, $r, '2026-10-03'));
    assert_contains("url_finale('/blog/' . \$target)", (string) file_get_contents(racine('portfolio/article.php')), 'article.php : un seul saut');
}
