<?php
declare(strict_types=1);

require_once racine('tools/qa/lib.php');

function test_qa_texte_principal_ignore_la_navigation_et_les_scripts(): void
{
    $html = '<html><body><header>Menu</header><nav>Liens</nav><main><h1>Titre</h1><script>var x=1;</script>'
          . '<p>Texte utile.</p><aside>Pub</aside><footer>Pied</footer></main><footer>Pied global</footer></body></html>';
    $texte = qa_texte_principal($html);
    assert_contains('Titre', $texte);
    assert_contains('Texte utile.', $texte);
    foreach (['Menu', 'Liens', 'var x', 'Pub', 'Pied'] as $absent) {
        assert_not_contains($absent, $texte);
    }
}

function test_qa_compter_mots_gere_apostrophes_et_accents(): void
{
    assert_same(8, qa_compter_mots("L'entreprise de Côte d'Ivoire paie 300 000 FCFA."));
}

function test_qa_meta_extrait_les_balises(): void
{
    $html = '<title>Site e-commerce | Richard SALANON</title><meta name="description" content="Boutiques &amp; paiement">'
          . '<link rel="canonical" href="https://richardsalanon.com/services/site-e-commerce"><meta name="robots" content="index, follow"><h1>Un</h1>';
    $m = qa_meta($html);
    assert_same('Site e-commerce | Richard SALANON', $m['title']);
    assert_same('Boutiques & paiement', $m['description']);
    assert_same('https://richardsalanon.com/services/site-e-commerce', $m['canonical']);
    assert_same(1, $m['h1']);
}

function test_qa_jsonld_compte_les_balises_et_les_types(): void
{
    $html = '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Person"},{"@type":"WebSite"}]}</script>'
          . '<script type="application/ld+json">{"@type":"FAQPage"}</script><script type="application/ld+json">{oops</script>';
    $j = qa_jsonld($html);
    assert_same(3, $j['balises']);
    assert_same(['Person', 'WebSite', 'FAQPage'], $j['types']);
    assert_same(1, count($j['erreurs']));
}

function test_qa_texte_interdit_detecte_tirets_gabarits_et_mots_sans_accent(): void
{
    $p = qa_texte_interdit("Le developpement {{ville}} \u{2014} rapide");
    assert_true(in_array('tiret cadratin', $p, true), 'tiret non détecté');
    assert_true(in_array('gabarit non remplacé', $p, true), 'gabarit non détecté');
    assert_true(in_array('sans accent : developpement', $p, true), 'mot sans accent non détecté');
    assert_same([], qa_texte_interdit('Le développement à Cotonou, dès le lendemain.'));
}

function test_qa_texte_interdit_ignore_les_mots_contenant_une_lettre_accentuee(): void
{
    // « kilomètres » contient « tres » après un « è » : ce n'est pas une faute.
    assert_same([], qa_texte_interdit('À trente kilomètres, au centre des paramètres.'));
}

function test_qa_liens_classe_internes_interdits_et_whatsapp(): void
{
    $html = '<a href="/services/site-e-commerce">a</a><a href="https://richardsalanon.com/contact">b</a>'
          . '<a href="https://richard.salanon.info/blog/x">c</a><a href="https://wa.me/22901666598360">d</a>'
          . '<a href="https://wa.me/2290161413177?text=Bonjour">e</a><a href="#faq">f</a><a href="mailto:x@y.z">g</a>';
    $l = qa_liens($html, 'https://richardsalanon.com');
    assert_same(['https://richardsalanon.com/services/site-e-commerce', 'https://richardsalanon.com/contact'], $l['internes']);
    assert_same(['https://richard.salanon.info/blog/x'], $l['ancien_domaine']);
    assert_same(['https://wa.me/22901666598360'], $l['whatsapp_invalides']);
}

function test_qa_faits_incoherents_detecte_marque_et_anciennete(): void
{
    $f = ['experience_ans' => 6];
    assert_same([], qa_faits_incoherents('Plus de 6 ans d\'expérience au service des PME.', $f));
    $p = qa_faits_incoherents('Richard Technologies, +8 ans d\'expérience.', $f);
    assert_true(in_array('ancienne marque', $p, true), 'marque non détectée');
    assert_true(in_array('ancienneté 8 ans au lieu de 6', $p, true), 'ancienneté non détectée');
}

function test_qa_noms_de_lieux_viennent_des_registres(): void
{
    $noms = qa_noms_de_lieux();
    foreach (['Cotonou', 'Paris', 'Sénégal', 'Bénin'] as $nom) {
        assert_true(in_array($nom, $noms, true), "lieu absent : {$nom}");
    }
}

function test_qa_ressemblance_neutralise_les_lieux(): void
{
    $a = qa_bardeaux('Formation IA pour vos équipes à Paris, sur vos vrais documents et vos outils.', 5, ['Paris', 'Lyon']);
    $b = qa_bardeaux('Formation IA pour vos équipes à Lyon, sur vos vrais documents et vos outils.', 5, ['Paris', 'Lyon']);
    $c = qa_bardeaux('Une boutique en ligne avec paiement mobile et livraison suivie chaque jour.', 5);
    assert_same(1.0, qa_ressemblance($a, $b));
    assert_same(0.0, qa_ressemblance($a, $c));
    assert_same(0.0, qa_part_propre($a, [$b]));
    assert_same(1.0, qa_part_propre($a, [$c]));
}

function test_qa_devise_conforme_au_pays(): void
{
    require_once racine('tools/qa/lib.php');
    assert_true(qa_devise_conforme('Un site vitrine coûte 1 500 € en France.', 'EUR'));
    assert_true(!qa_devise_conforme('Comptez 450 000 FCFA à Paris.', 'EUR'));
    assert_true(!qa_devise_conforme('Prix : 300 000 XOF.', 'CAD'));
    assert_true(qa_devise_conforme('300 000 FCFA, soit environ 457 €.', 'XOF'));
    assert_true(!qa_devise_conforme('Environ 457 € seulement.', 'XOF'), 'prix africain toujours en devise locale');
}

function test_qa_faq_visible_egale_faqpage(): void
{
    require_once racine('tools/qa/lib.php');
    $ok = '<section class="bloc bloc--faq"><details><summary>A ?</summary></details><details><summary>B ?</summary></details></section>'
        . '<script type="application/ld+json">{"@graph":[{"@type":"FAQPage","mainEntity":[{"@type":"Question"},{"@type":"Question"}]}]}</script>';
    assert_true(qa_faq_conforme($ok));
    assert_true(!qa_faq_conforme(str_replace('<details><summary>B ?</summary></details>', '', $ok)));
}

function test_qa_controle_page_signale_une_page_trop_courte(): void
{
    require_once racine('helpers/functions.php');
    require_once racine('tools/qa/lib.php');
    $r = racine('tools/tests/fixtures/registres');
    $p = registre_lire('formation', 'ia-test', $r);
    $echecs = qa_controle_page($p, qa_rendre_registre($p, $r));
    assert_contains('mots', implode(' ', $echecs));
    assert_true(!in_array('h1', $echecs, true));
    assert_true(!in_array('schema', $echecs, true));
}

function test_qa_cli_registres_echoue_sur_les_fixtures(): void
{
    exec(PHP_BINARY . ' ' . escapeshellarg(racine('tools/qa/registres.php')) . ' --racine=' . escapeshellarg(racine('tools/tests/fixtures/registres')) . ' 2>&1', $sortie, $code);
    assert_same(1, $code);
    assert_contains('formation/ia-test', implode("\n", $sortie));
}

function test_qa_texte_interdit_detecte_une_balise_affichee(): void
{
    // Revue 1E : une balise rendue en clair (&lt;a href) doit être signalée.
    assert_true(in_array('balise affichée', qa_texte_interdit('Voir <a href="/contact">le devis</a> ici.'), true), 'balise affichée non détectée');
    assert_true(!in_array('balise affichée', qa_texte_interdit('Un texte normal, avec 3 < 5 et un tag a part.'), true), 'faux positif');
}
