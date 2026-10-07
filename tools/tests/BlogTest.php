<?php
declare(strict_types=1);

// Vague 1F : reprise du blog (instantané, gabarit, migrations, contrôle hors ligne).

require_once racine('helpers/functions.php');

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
