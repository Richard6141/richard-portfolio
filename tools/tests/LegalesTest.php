<?php
declare(strict_types=1);

// Mentions légales et confidentialité (vague 0C) : noindex, follow, faits de la fiche.

function test_legales_servies_noindex_follow_avec_les_faits(): void
{
    $m = http_local('/mentions-legales');
    assert_same(200, $m['code']);
    assert_contains('<meta name="robots" content="noindex, follow">', $m['corps']);
    foreach (['0202348994221', 'Hostinger International Limited', 'Larnaca', 'Loi n° 2017-20', 'Cotonou'] as $fait) {
        assert_contains($fait, $m['corps'], $fait);
    }
    $c = http_local('/confidentialite');
    assert_same(200, $c['code']);
    foreach (['Google Analytics', 'Clarity', 'APDP', 'richardsomasse@gmail.com'] as $fait) {
        assert_contains($fait, $c['corps'], $fait);
    }
}

function test_legales_liees_depuis_le_pied_et_hors_sitemap(): void
{
    $accueil = http_local('/')['corps'];
    assert_contains('href="/mentions-legales"', $accueil);
    assert_contains('href="/confidentialite"', $accueil);
    $xml = http_local('/sitemap.xml')['corps'];
    assert_not_contains('/mentions-legales<', $xml);
}

function test_legales_revue_formulaire_de_contact_decrit(): void
{
    // Revue finale 0C : le formulaire de contact (api/contact-form.php) enregistre nom,
    // coordonnées, message et adresse IP ; la politique doit le dire.
    $c = http_local('/confidentialite')['corps'];
    assert_contains('formulaire de contact', $c);
    assert_contains('adresse IP', $c);
}

function test_pages_auteur_publiee_profil_et_sans_donnees_privees(): void
{
    $r = http_local('/richard-salanon');
    assert_same(200, $r['code']);
    assert_contains('"ProfilePage"', $r['corps']);
    assert_contains('EPITECH', $r['corps']);
    foreach (['BENDJELOUNE', 'SETTOSSI', '53 04 76 07', '91 61 77 04', 'Tankpè', '31 ans', '@epitech.eu'] as $prive) {
        assert_not_contains($prive, $r['corps'], $prive);
    }
    assert_contains('href="/richard-salanon"', http_local('/comparatifs/odoo-vs-dolibarr')['corps'], 'boîte auteur vers la page auteur');
}
