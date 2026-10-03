<?php
declare(strict_types=1);

function test_donnees_contact_lit_le_pays_dans_la_fiche_de_faits(): void
{
    $src = (string) file_get_contents(racine('portfolio/contact.php'));
    assert_not_contains("\$contactInfo['country']", $src, 'contact.php lit encore le pays en base (« Benin » sans accent)');
    assert_contains("fait('pays')", $src);
}

function test_donnees_migration_des_realisations_retire_tirets_et_benin_sans_accent(): void
{
    $sql = (string) file_get_contents(racine('migrations/2026-10-03-realisations-typographie.sql'));
    assert_contains("' \u{2014} '", $sql, 'remplacement du tiret cadratin attendu');
    assert_contains("'Benin'", $sql);
    assert_contains("'Bénin'", $sql);
    assert_contains("'Toure Distribution'", $sql);
    // Portée réduite aux champs courts après la revue (03/10/2026).
    foreach (['title', 'description_short'] as $colonne) {
        assert_true(preg_match('/\b' . $colonne . '\s+= REPLACE/', $sql) === 1, "colonne non traitée : {$colonne}");
    }
}
