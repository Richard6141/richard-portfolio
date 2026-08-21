<?php
// ============================================================
// zones-index.php · Index des zones desservies (URL /zones/)
//
// Cree le 20/08/2026 avec les pages ville. Sert de page pilier : il donne
// aux pages locales un parent commun dans le fil d'Ariane et un point
// d'entree unique depuis le pied de page, plutot que 9 liens isoles.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$villes   = require __DIR__ . '/data/villes.php';
// Registre des sujets, pour lister sous chaque ville les pages publiees.
$registre = @require __DIR__ . '/data/sujets.php';
if (!is_array($registre)) { $registre = []; }
$zonesUrl = $portfolioUrl . '/zones/';

// Regroupement par pays, en gardant le Benin en tete (marche principal).
$parPays = [];
foreach ($villes as $v) { $parPays[$v['pays']][] = $v; }
uksort($parPays, static fn($a, $b) => $a === 'Bénin' ? -1 : ($b === 'Bénin' ? 1 : strcmp($a, $b)));

$nbVilles = count($villes);
$nbPays   = count($parPays);

// Titre volontairement court : la formulation longue ("... au Bénin et en
// Afrique de l'Ouest") depassait 60 caracteres, ce qui faisait sauter la
// marque en suffixe. Celle-ci tient en 57 caracteres, marque comprise.
$pageTitle     = seoTitle('Zones desservies : ' . $nbVilles . ' villes', $fullName);
$pageDesc      = seoDescription('Création de sites web, applications et automatisation dans ' . $nbVilles . ' villes de ' . $nbPays . ' pays : Cotonou, Abomey-Calavi, Porto-Novo, Parakou, Abidjan, Lomé, Dakar. Devis gratuit.');
$pageCanonical = $zonesUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pos = 0;
$pageSchemas = [
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'ItemList',
        'name'            => 'Zones desservies',
        'url'             => $zonesUrl,
        'numberOfItems'   => $nbVilles,
        'itemListElement' => array_values(array_map(
            static function (array $v) use (&$pos, $portfolioUrl): array {
                return [
                    '@type'    => 'ListItem',
                    'position' => ++$pos,
                    'name'     => 'Développeur web à ' . $v['nom'],
                    'url'      => $portfolioUrl . '/developpeur-web-' . $v['slug'],
                ];
            },
            $villes
        )),
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Zones desservies', 'item' => $zonesUrl],
        ],
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span>Zones desservies</div>

  <section class="svc-hero"><div class="wrap">
    <h1>Où j'interviens</h1>
    <p>Sur place au Bénin, à distance partout ailleurs. Chaque ville a sa page, avec le contexte local, les besoins que j'y rencontre le plus souvent et les moyens de paiement du pays.</p>
    <div class="hero-cta">
      <a href="/contact" class="btn">Demander un devis gratuit</a>
      <a href="/services/" class="btn btn-ghost">Voir tous les services</a>
    </div>
  </div></section>

  <?php $num = 0; foreach ($parPays as $pays => $liste): $num++; ?>
  <section class="sect<?= $num % 2 === 0 ? ' soft' : '' ?>"><div class="wrap">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num"><?= str_pad((string) $num, 2, '0', STR_PAD_LEFT) ?></span> / <?= sanitize($pays) ?></span>
      <h2><?= sanitize($pays) ?>, <?= count($liste) ?> ville<?= count($liste) > 1 ? 's' : '' ?></h2>
    </div>
    <div class="bento stg">
      <?php foreach ($liste as $v): ?>
        <a class="svc" href="/developpeur-web-<?= sanitize($v['slug']) ?>">
          <h3>Développeur web à <?= sanitize($v['nom']) ?></h3>
          <p><?= sanitize($v['accroche']) ?>.</p>
          <div class="zone-tags">
            <span><?= sanitize($v['region']) ?></span>
            <span><?= $v['sur_place'] ? 'Déplacement possible' : 'À distance' ?></span>
          </div>
          <div class="arrow">Voir la page</div>
        </a>
        <?php
        // Sujets publies pour cette ville : liens directs depuis l'index des
        // zones, pour qu'aucune page du registre ne reste orpheline.
        $sjVille = [];
        foreach ($registre as $sj) {
            if (isset($sj['pages'][$v['slug']])) { $sjVille[] = $sj['pages'][$v['slug']]; }
        }
        ?>
        <?php if ($sjVille): ?>
        <div class="zone-grid" style="margin:-.4rem 0 1.4rem">
          <?php foreach ($sjVille as $pg): ?>
            <a href="/<?= sanitize($pg['slug']) ?>"><?= sanitize($pg['titre']) ?></a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endforeach; ?>

  <?php
  // Villes presentes dans le registre mais absentes de data/villes : Paris,
  // Bruxelles, Geneve, Montreal... Sans ce bloc elles restaient orphelines,
  // la boucle ci-dessus ne parcourant que les villes ayant une page
  // /developpeur-web-*. Ce filet rattrape aussi tout sujet ajoute plus tard.
  $slugsConnus = [];
  foreach ($villes as $v) { $slugsConnus[$v['slug']] = true; }
  $horsListe = [];
  foreach ($registre as $sj) {
      foreach ($sj['pages'] as $vSlug => $pg) {
          if (!isset($slugsConnus[$vSlug])) {
              $horsListe[$pg['pays']][$vSlug][] = $pg;
          }
      }
  }
  ?>
  <?php if ($horsListe): ?>
  <section class="sect"><div class="wrap">
    <div class="sect-head rv"><span class="mono">Europe &amp; Amérique du Nord</span><h2>J'accompagne aussi des entreprises hors d'Afrique</h2>
      <p>Projets menés à distance, avec un cadre contractuel, fiscal et de protection des données adapté à chaque pays.</p></div>
    <?php foreach ($horsListe as $paysNom => $parVille): ?>
    <h3 style="margin:1.6rem 0 .6rem"><?= sanitize($paysNom) ?></h3>
    <div class="zone-grid">
      <?php foreach ($parVille as $pages): foreach ($pages as $pg): ?>
        <a href="/<?= sanitize($pg['slug']) ?>"><?= sanitize($pg['ville']) ?></a>
      <?php endforeach; endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div></section>
  <?php endif; ?>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <h2>Votre ville n'est pas dans la liste ?</h2>
      <p>Ces pages couvrent les villes où j'interviens le plus souvent, mais elles ne limitent pas les projets que je prends. Une grande partie du travail se mène entièrement à distance : cadrage en visioconférence, points d'avancement réguliers et version en ligne consultable au fur et à mesure. Des projets ont ainsi été livrés en Europe et au Canada depuis le Bénin, sans que la distance change ni le prix ni le suivi.</p>
      <p>Si vous êtes ailleurs, <a href="/contact">décrivez-moi votre projet</a> : la réponse et le devis sont gratuits, quelle que soit votre localisation.</p>
    </div>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv">
    <h2>Parlons de votre projet</h2>
    <p>Un premier échange suffit souvent à y voir clair. Il est gratuit et sans engagement.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
