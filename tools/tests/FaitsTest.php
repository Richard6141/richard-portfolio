<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');

function test_faits_la_fiche_du_site_se_charge(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('Richard SALANON', $f['nom']);
    assert_same('BJ', $f['pays_code']);
}

function test_faits_richard_vit_a_cotonou(): void
{
    // Déménagement signalé par Richard le 03/10/2026 : Cotonou, plus Abomey-Calavi.
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('Cotonou', $f['ville']);
    assert_contains('basé à Cotonou', $f['phrase_entite']);
    assert_not_contains('Abomey-Calavi', $f['phrase_entite']);
}

function test_faits_aucune_page_ne_le_dit_encore_base_a_abomey_calavi(): void
{
    // Recette 0B : 49 phrases des données et gabarits contredisaient la fiche
    // (« basé à Abomey-Calavi », « km depuis Abomey-Calavi »). Une entité qui
    // se contredit d'une page à l'autre est moins citée par Google et les LLM.
    $motif = "/basée? à Abomey-Calavi|Abomey-Calavi, où je suis basé|vraiment basé à Abomey|(km|kilomètres|route) (depuis |d')Abomey-Calavi/u";
    $fautifs = [];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(racine('portfolio')));
    foreach ($it as $f) {
        if (substr((string) $f, -4) === '.php' && preg_match($motif, (string) file_get_contents((string) $f))) {
            $fautifs[] = substr((string) $f, strlen(racine('')));
        }
    }
    assert_same([], $fautifs, 'résidence encore à Abomey-Calavi');
}

function test_faits_distances_des_villes_comptees_depuis_cotonou(): void
{
    $cotonou = require racine('portfolio/data/villes/cotonou.php');
    $calavi  = require racine('portfolio/data/villes/abomey-calavi.php');
    assert_true(empty($cotonou['distance_km']), 'Cotonou est la ville de résidence');
    assert_same(18, $calavi['distance_km']);
    foreach (['portfolio/ville.php', 'portfolio/sujet.php'] as $fichier) {
        assert_contains('km depuis Cotonou', (string) file_get_contents(racine($fichier)), $fichier);
    }
}

function test_faits_reponses_du_questionnaire_du_03_10_2026(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('50+', $f['projets_livres']);
    assert_same('100+', $f['clients']);
    assert_same('200+', $f['personnes_formees']);
    assert_same(2022, $f['formation']['annee']);
    // Cameroun ajouté par Richard le 07/10/2026 (projet KossKoss Select) : 15 pays.
    assert_same(15, count($f['pays_travailles']));
    foreach (['Tchad', 'Suisse', 'RD Congo', 'Côte d\'Ivoire', 'Cameroun'] as $pays) {
        assert_true(in_array($pays, $f['pays_travailles'], true), "pays travaillé absent : {$pays}");
    }
    assert_true(in_array('https://www.instagram.com/richard.salanon', $f['profils'], true), 'Instagram absent');
    assert_true(in_array('https://www.google.com/search?kgmid=/g/11njzjmv6s', $f['profils'], true), 'fiche Google absente');
}

function test_faits_les_gabarits_ne_lisent_plus_la_ville_en_base(): void
{
    foreach (['portfolio/partials/pv2-bootstrap.php', 'portfolio/article.php', 'portfolio/templates/horizon.php', 'portfolio/index.php'] as $fichier) {
        assert_not_contains("\$contactInfo['city']", (string) file_get_contents(racine($fichier)), $fichier);
    }
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

function test_faits_horaires_du_contact_identiques_a_la_fiche(): void
{
    // La page contact affichait « de 8 h à 19 h » sans base, la fiche dit 07:00 à 20:00.
    assert_same('7 jours sur 7, de 07 h 00 à 20 h 00', horaires_texte(['jours' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], 'ouverture' => '07:00', 'fermeture' => '20:00']));
    assert_same('du lundi au vendredi, de 08 h 30 à 18 h 00', horaires_texte(['jours' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'ouverture' => '08:30', 'fermeture' => '18:00']));
    $corps = http_local('/contact')['corps'];
    assert_contains(horaires_texte(fait('horaires')), $corps);
    assert_not_contains('8 h à 19 h', $corps);
}

function test_faits_delai_de_reponse_confirme_et_affiche(): void
{
    // Confirmé par Richard le 03/10/2026 : « Réponse sous 24h, oui ».
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('24 heures', $f['delai_reponse']);
    assert_contains('je vous réponds sous 24 heures', http_local('/')['corps']);
    require_once racine('helpers/llms.php');
    assert_contains('Délai de réponse : 24 heures', llms_contenu($f, 'https://richardsalanon.com', [], false));
}
