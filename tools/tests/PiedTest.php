<?php
declare(strict_types=1);

// Vague 0B, Task 5 : pied de page sobre, maillage choisi, barre mobile collante.

require_once racine('helpers/functions.php');

function pied_rendre(): string
{
    $pdo = null; $userId = 0; $fullName = fait('nom'); $h_phone = fait('telephone'); $h_email = fait('email');
    $h_city = fait('ville'); $h_mailto = '/contact'; $h_logo = siteLogoUrl(); $socialLinks = []; $contactInfo = [];
    ob_start();
    include racine('portfolio/partials/pv2-footer.php');
    return (string) ob_get_clean();
}

function test_pied_maillage_choisi_et_borne(): void
{
    $html = pied_rendre();
    $liens = substr_count($html, '<a ');
    assert_true($liens > 20 && $liens < 60, "{$liens} liens dans le pied (attendu entre 20 et 60)");
    assert_not_contains('/a-propos/#expertise', $html);
    foreach (['/services/', '/formations/', '/zones/', '/contact', '/a-propos/'] as $url) {
        assert_contains('href="' . $url . '"', $html, "lien {$url}");
    }
}

function test_pied_identite_depuis_la_fiche(): void
{
    $html = pied_rendre();
    assert_contains('/assets/img/logo-rs-clair.svg', $html);
    assert_contains('Cotonou', $html);
    assert_contains('tel:+2290161413177', $html);
    assert_contains('instagram.com/richard.salanon', $html);
    assert_not_contains('Richard Technologies', $html);
    assert_not_contains('0202348994221', $html, 'l\'IFU est réservé aux mentions légales');
}

function test_pied_barre_mobile_et_script(): void
{
    $html = pied_rendre();
    assert_contains('class="barre-mobile"', $html);
    assert_contains('/assets/js/portfolio-v2.js', $html);
}

function test_pied_relie_la_page_auteur_et_les_histoires(): void
{
    // Vague 1A : la page entité /richard-salanon et le hub /histoires/ ne restent pas orphelins.
    $html = pied_rendre();
    assert_contains('href="/richard-salanon"', $html);
    assert_contains('href="/histoires/"', $html);
    assert_contains('href="/comparatifs/"', $html);
}
