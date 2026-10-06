<?php
// ============================================================
// zones-index.php · Index des zones desservies (URL /zones/)
//
// Créé le 20/08/2026 avec les pages ville : page pilier qui donne aux pages
// locales un parent commun. Refait le 03/10/2026 à la demande de Richard
// (cartes trop étroites, liens coincés dans une colonne) : en-tête de sous-page,
// 34 pays par région avec la carte, une carte par ville contenant ses pages liées.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$villes   = require __DIR__ . '/data/villes.php';
// Registre des sujets, chargé dans sa propre portée (le fichier pose ses variables).
$registre = (static fn(): array => (array) (@require __DIR__ . '/data/sujets.php'))();
$zonesUrl = SITE_URL . '/zones/';
$pays     = pays_liste();

// Villes groupées par pays, Bénin en tête (marché principal).
$parPays = [];
foreach ($villes as $v) {
    $parPays[$v['pays']][] = $v;
}
uksort($parPays, static fn($a, $b) => $a === 'Bénin' ? -1 : ($b === 'Bénin' ? 1 : strcmp($a, $b)));

// Pages du registre « sujets » rattachées à chaque ville.
$pagesVille = [];
foreach ($registre as $sj) {
    foreach ($sj['pages'] as $vSlug => $pg) {
        $pagesVille[$vSlug][] = $pg;
    }
}
$slugsConnus = array_flip(array_column($villes, 'slug'));
$horsListe = [];
foreach ($pagesVille as $vSlug => $pages) {
    if (!isset($slugsConnus[$vSlug])) {
        foreach ($pages as $pg) {
            $horsListe[$pg['pays']][] = $pg;
        }
    }
}

// Pays groupés par région, dans l'ordre de la liste (tranches).
$parRegion = [];
foreach ($pays as $slug => $p) {
    $parRegion[$p['region']][$slug] = $p;
}

$nbVilles = count($villes);
$nbPays   = count($pays);

$pageTitle     = 'Zones desservies : ' . $nbPays . ' pays et ' . $nbVilles . ' villes | ' . fait('nom');
$pageDesc      = 'Sites web, applications, automatisation et IA dans ' . $nbPays . ' pays : sur place à Cotonou et au Bénin, à distance en Afrique, en Europe et au Canada.';
$pageCanonical = $zonesUrl;

$pos = 0;
$pageSchemas = [
    [
        '@type'           => 'ItemList',
        'name'            => 'Zones desservies',
        'url'             => $zonesUrl,
        'numberOfItems'   => $nbVilles,
        'itemListElement' => array_values(array_map(
            static function (array $v) use (&$pos): array {
                return ['@type' => 'ListItem', 'position' => ++$pos, 'name' => 'Développeur web à ' . $v['nom'], 'url' => SITE_URL . '/developpeur-web-' . $v['slug']];
            },
            $villes
        )),
    ],
    schema_fil_ariane([['Accueil', '/'], ['Zones desservies', '/zones/']], SITE_URL),
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content" class="zones">
  <nav class="crumb wrap" aria-label="Fil d'Ariane"><a href="/">Accueil</a><span class="sep" aria-hidden="true">/</span><span aria-current="page">Zones desservies</span></nav>

  <div class="registre-hero">
    <div class="registre-hero__grille conteneur">
      <div>
        <span class="eyebrow">Zones desservies</span>
        <h1>Où j'interviens : Cotonou, le Bénin et <?= $nbPays ?> pays</h1>
        <p class="registre-hero__bref"><strong>En bref.</strong> Basé à <?= sanitize(fait('ville')) ?>, je me déplace au Bénin pour le cadrage et la formation, et je mène les projets à distance partout ailleurs : Afrique francophone, Europe et Canada. Chaque ville ci-dessous a sa page, avec son contexte, ses besoins fréquents et ses moyens de paiement.</p>
        <div class="rangee-actions">
          <a href="/contact" class="btn">Demander un devis gratuit</a>
          <a href="<?= sanitize(url_finale('/services/')) ?>" class="btn btn--contour">Voir tous les services</a>
        </div>
      </div>
      <aside class="panneau-faits" aria-label="L'essentiel">
        <dl>
          <div><dt>Sur place</dt><dd><?= sanitize(fait('ville')) ?> et le Bénin</dd></div>
          <div><dt>Pays servis</dt><dd><?= $nbPays ?> pays</dd></div>
          <div><dt>Villes avec une page</dt><dd><?= $nbVilles ?> villes</dd></div>
          <div><dt>Réponse</dt><dd>Sous <?= sanitize((string) fait('delai_reponse')) ?></dd></div>
        </dl>
      </aside>
    </div>
  </div>

  <section class="section" id="pays" aria-labelledby="pays-titre">
    <div class="conteneur zones-pays">
      <div>
        <h2 id="pays-titre">Les <?= $nbPays ?> pays servis, région par région</h2>
        <p class="zones-intro">Les projets se mènent à distance avec des points réguliers, et sur place quand le cadrage ou la formation le demandent. Les devis s'établissent en franc CFA, en euro, en franc suisse ou en dollar canadien selon le pays.</p>
        <?php foreach ($parRegion as $region => $liste): ?>
        <h3 class="zones-region"><?= sanitize($region) ?></h3>
        <ul class="liste-pays">
          <?php foreach ($liste as $slug => $p):
            $fiche = registre_lire('pays', $slug);
            $lien  = ($fiche !== null && registre_publiee($fiche)) ? $fiche['url'] : null; ?>
          <li><?= drapeau($slug) ?><?php if ($lien): ?><a href="<?= sanitize($lien) ?>"><?= sanitize($p['nom']) ?></a><?php else: ?><?= sanitize($p['nom']) ?><?php endif; ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endforeach; ?>
      </div>
      <figure class="carte-scene">
        <img src="/assets/img/carte-pays.svg" alt="Carte des <?= $nbPays ?> pays servis depuis Cotonou, en Afrique francophone, en Europe et au Canada" width="720" height="896" loading="lazy" decoding="async">
      </figure>
    </div>
  </section>

  <?php foreach ($parPays as $nomPays => $liste): ?>
  <section class="section section--surface" aria-labelledby="villes-<?= sanitize(generateSlug($nomPays)) ?>">
    <div class="conteneur">
      <div class="tete-section">
        <div><span class="eyebrow"><?= drapeau($nomPays) ?><?= sanitize($nomPays) ?></span><h2 id="villes-<?= sanitize(generateSlug($nomPays)) ?>"><?= count($liste) ?> ville<?= count($liste) > 1 ? 's' : '' ?> avec une page dédiée</h2></div>
      </div>
      <div class="grille-villes">
        <?php foreach ($liste as $v): ?>
        <article class="carte-ville carte-halo">
          <div class="carte-ville__tete">
            <h3><a href="/developpeur-web-<?= sanitize($v['slug']) ?>">Développeur web à <?= sanitize($v['nom']) ?></a></h3>
            <span class="pastille-domaine"><?= sanitize($v['region']) ?></span>
          </div>
          <p class="carte-ville__accroche"><?= sanitize($v['accroche']) ?>.</p>
          <p class="carte-ville__mode"><?= icone($v['sur_place'] ? 'map-pin' : 'monitor', 16) ?><?= $v['sur_place'] ? 'Déplacement possible' : 'À distance' ?></p>
          <?php if (!empty($pagesVille[$v['slug']])): ?>
          <ul class="carte-ville__liens">
            <?php foreach ($pagesVille[$v['slug']] as $pg): ?>
            <li><a href="<?= sanitize(url_finale('/' . $pg['slug'])) ?>"><?= sanitize($pg['titre']) ?></a></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endforeach; ?>

  <?php if ($horsListe): ?>
  <section class="section" aria-labelledby="hors-afrique">
    <div class="conteneur">
      <div class="tete-section">
        <div><span class="eyebrow">Europe et Amérique du Nord</span><h2 id="hors-afrique">J'accompagne aussi des entreprises hors d'Afrique</h2></div>
        <p>Projets menés à distance, avec un cadre contractuel, fiscal et de protection des données adapté à chaque pays.</p>
      </div>
      <div class="grille-villes">
        <?php foreach ($horsListe as $nomPays => $pages): ?>
        <article class="carte-ville carte-ville--pays carte-halo">
          <div class="carte-ville__tete"><h3><?= sanitize($nomPays) ?></h3></div>
          <ul class="carte-ville__liens">
            <?php foreach ($pages as $pg): ?>
            <li><a href="<?= sanitize(url_finale('/' . $pg['slug'])) ?>"><?= sanitize($pg['titre']) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="section">
    <div class="conteneur conteneur--etroit">
      <?= bloc_rendre(['type' => 'prose', 'titre' => 'Votre ville n\'est pas dans la liste ?', 'paragraphes' => [
          'Ces pages couvrent les villes où j\'interviens le plus souvent, mais elles ne limitent pas les projets que je prends. Une grande partie du travail se mène entièrement à distance : cadrage en visioconférence, points d\'avancement réguliers et version en ligne consultable au fur et à mesure. Des projets ont ainsi été livrés en Europe et au Canada depuis le Bénin, sans que la distance change ni le prix ni le suivi.',
          'Si vous êtes ailleurs, <a href="/contact">décrivez-moi votre projet</a> : la réponse arrive sous ' . fait('delai_reponse') . ' et le devis est gratuit, quelle que soit votre localisation.',
      ]]) ?>
      <?= bloc_rendre(['type' => 'cta', 'titre' => 'Parlons de votre projet', 'texte' => 'Un premier échange suffit souvent à y voir clair. Il est gratuit et sans engagement.', 'bouton' => ['url' => '/contact', 'texte' => 'Demander mon devis gratuit']]) ?>
    </div>
  </section>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
