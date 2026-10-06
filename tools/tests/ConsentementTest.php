<?php
declare(strict_types=1);

// Bandeau de consentement aux cookies de mesure (06/10/2026, accord de Richard) : GA4 et Clarity
// ne partent qu'après « Accepter » ; « Refuser » est aussi simple ; le choix tient 6 mois et se
// retire depuis le lien « Cookies » du pied. Le comportement est vérifié en exécutant les scripts
// de portfolio/partials/tracking.php sous Node (tools/tests/js/consentement.js).

const CONSENTEMENT_GESTES_ET_DELAIS = ['DOMContentLoaded', 'gestes', 'load', 'minuteurs'];

/** Rend tracking.php, joue le scénario sous Node et renvoie ce que les scripts ont fait. */
function consentement_scenario(array $cookies, array $actions): array
{
    require_once racine('config/site.php');
    ob_start();
    include racine('portfolio/partials/tracking.php');
    $html = (string) ob_get_clean();
    preg_match_all('#<script>(.*?)</script>#s', $html, $m);
    $fichier = (string) tempnam(sys_get_temp_dir(), 'consentement');
    file_put_contents($fichier, json_encode(['code' => implode("\n;\n", $m[1]), 'cookies' => $cookies, 'actions' => $actions]));
    $sortie = (string) shell_exec('node ' . escapeshellarg(racine('tools/tests/js/consentement.js')) . ' ' . escapeshellarg($fichier) . ' 2>&1');
    unlink($fichier);
    $r = json_decode($sortie, true);
    assert_true(is_array($r), "harnais Node en échec :\n" . $sortie);
    return $r;
}

function consentement_scripts_de_mesure(array $r): array
{
    return array_values(array_filter($r['scripts'], static fn(string $s): bool => str_contains($s, 'clarity.ms') || str_contains($s, 'googletagmanager')));
}

function test_consentement_sans_choix_aucun_traceur_et_un_bandeau(): void
{
    $r = consentement_scenario([], CONSENTEMENT_GESTES_ET_DELAIS);
    assert_same([], consentement_scripts_de_mesure($r), 'aucun traceur avant le choix, même après gestes et 6 s');
    assert_same(1, count($r['bandeaux']), 'un bandeau');
    assert_same(false, $r['bandeaux'][0]['hidden']);
    assert_same('region', $r['bandeaux'][0]['role']);
    foreach (['data-choix="oui"', 'data-choix="non"', 'Accepter', 'Refuser', 'href="/confidentialite"', 'Google Analytics', 'Microsoft Clarity'] as $marque) {
        assert_contains($marque, $r['bandeaux'][0]['html'], $marque);
    }
}

function test_consentement_refuser_aussi_simple_qu_accepter(): void
{
    // CNIL : refuser doit être aussi simple qu'accepter ; même bouton, même classe, même niveau.
    $html = consentement_scenario([], ['DOMContentLoaded'])['bandeaux'][0]['html'];
    preg_match_all('#<button type="button" class="([^"]+)" data-choix="(oui|non)">#', $html, $m, PREG_SET_ORDER);
    assert_same(2, count($m), 'deux boutons de choix');
    assert_same($m[0][1], $m[1][1], 'même style pour Accepter et Refuser');
}

function test_consentement_accepter_charge_ga4_et_clarity_sans_publicite(): void
{
    $r = consentement_scenario([], ['DOMContentLoaded', 'clic:oui', 'minuteurs']);
    assert_same('oui', $r['choix']);
    assert_contains('Max-Age=15552000', implode(' | ', $r['cookiesEcrits']), 'choix gardé 6 mois (180 jours)');
    assert_same(2, count(consentement_scripts_de_mesure($r)), 'Clarity et GA4 chargés');
    assert_same(true, $r['bandeaux'][0]['hidden'], 'bandeau masqué après le choix');
    assert_contains(json_encode(['consent', 'default', ['ad_storage' => 'denied', 'ad_user_data' => 'denied', 'ad_personalization' => 'denied', 'analytics_storage' => 'granted']]), json_encode($r['dataLayer']), 'mode Consentement de Google : mesure seule');
    assert_contains(json_encode(['cookie_expires' => 34128000]), json_encode($r['dataLayer']), 'cookies GA4 limités à 13 mois (recommandation CNIL)');
    assert_contains(json_encode(['consentv2', ['ad_Storage' => 'denied', 'analytics_Storage' => 'granted']]), json_encode($r['clarity']), 'signal de consentement Clarity');
}

function test_consentement_refuser_ne_charge_rien(): void
{
    $r = consentement_scenario([], ['DOMContentLoaded', 'clic:non', 'gestes', 'load', 'minuteurs']);
    assert_same('non', $r['choix']);
    assert_same([], consentement_scripts_de_mesure($r));
    assert_same(true, $r['bandeaux'][0]['hidden']);
}

function test_consentement_accord_anterieur_garde_le_chargement_differe(): void
{
    // Le chargement à la première interaction ou après 6 s (performance, 05/10/2026) reste en place.
    $avant = consentement_scenario(['consentement_mesure=oui'], ['DOMContentLoaded']);
    assert_same([], consentement_scripts_de_mesure($avant), 'rien avant le premier geste');
    assert_same([], $avant['bandeaux'], 'aucun bandeau quand le choix est connu');
    $apres = consentement_scenario(['consentement_mesure=oui'], ['DOMContentLoaded', 'gestes', 'minuteurs']);
    assert_same(2, count(consentement_scripts_de_mesure($apres)));
}

function test_consentement_refus_anterieur_rien_meme_apres_six_secondes(): void
{
    $r = consentement_scenario(['consentement_mesure=non'], CONSENTEMENT_GESTES_ET_DELAIS);
    assert_same([], consentement_scripts_de_mesure($r));
    assert_same([], $r['bandeaux']);
}

function test_consentement_retrait_depuis_le_pied_efface_les_cookies_et_recharge(): void
{
    $r = consentement_scenario(
        ['consentement_mesure=oui', '_ga=GA1.1.1', '_ga_ABC123=GS1.1', '_clck=abc', '_clsk=def', 'autre=garde'],
        ['DOMContentLoaded', 'clic:cookies', 'clic:non']
    );
    assert_same(1, count($r['bandeaux']), 'le lien du pied rouvre le bandeau');
    assert_same('non', $r['choix']);
    assert_same(['consentement_mesure', 'autre'], $r['cookiesRestants'], 'cookies GA4 et Clarity effacés, les autres gardés');
    assert_same(true, $r['recharge'], 'page rechargée : les scripts déjà chargés s\'arrêtent');
}

function test_consentement_bandeau_fixe_sans_decalage_de_mise_en_page(): void
{
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('.pv2 .cookies{position:fixed;', $css, 'superposé : aucun CLS');
    assert_contains('.pv2 .cookies[hidden]{display:none}', $css);
}

function test_consentement_politique_decrit_le_bandeau(): void
{
    // Texte de la page seul : les scripts du <head> reprennent déjà ces mots.
    $c = (string) preg_replace('#<script\b.*?</script>#s', '', http_local('/confidentialite')['corps']);
    $c = str_replace(["\u{00A0}", "\u{202F}", '&nbsp;', '&#8239;'], ' ', $c);
    foreach (['seulement si vous l', '« Cookies »', '6 mois', '13 mois', '14 mois'] as $marque) {
        assert_contains($marque, $c, $marque);
    }
    assert_not_contains('en les bloquant dans votre navigateur', $c, 'le blocage par le navigateur ne vaut pas refus');
}
