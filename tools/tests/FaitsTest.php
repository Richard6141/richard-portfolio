<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');

function test_faits_la_fiche_du_site_se_charge(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('Richard SALANON', $f['nom']);
    assert_same('BJ', $f['pays_code']);
}

function test_faits_aucun_tiret_cadratin_ni_fleche_dans_les_textes(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    foreach (['intitule', 'phrase_entite', 'description_courte'] as $cle) {
        assert_not_contains("\u{2014}", $f[$cle], $cle);
        assert_not_contains("\u{2192}", $f[$cle], $cle);
    }
}

function test_faits_description_courte_tient_dans_une_meta(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    $n = mb_strlen($f['description_courte']);
    assert_true($n >= 120 && $n <= 155, "description_courte fait {$n} caractères");
}

function test_faits_couvre_les_34_pays_de_la_spec(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same(34, count($f['zones']));
    foreach (['Bénin', 'Sénégal', 'Maroc', 'Canada', 'São Tomé-et-Príncipe'] as $pays) {
        assert_true(in_array($pays, $f['zones'], true), "pays absent : {$pays}");
    }
}

function test_faits_profils_en_https(): void
{
    foreach (faits_depuis(racine('portfolio/data/faits.php'))['profils'] as $url) {
        assert_true(str_starts_with($url, 'https://'), "profil non https : {$url}");
    }
}

function test_faits_cle_obligatoire_manquante_leve_une_exception(): void
{
    $tmp = tempnam(sys_get_temp_dir(), 'faits') . '.php';
    file_put_contents($tmp, "<?php return ['nom' => 'X'];");
    try {
        faits_depuis($tmp);
    } catch (\RuntimeException $e) {
        assert_contains('intitule', $e->getMessage());
        return;
    } finally {
        @unlink($tmp);
    }
    throw new EchecTest('faits_depuis aurait dû refuser une fiche incomplète');
}
