<?php
// ============================================================
// realisations-index.php · Index des realisations (URL /realisations/)
//
// Cree le 20/08/2026. Remplace l'ancre #portfolio de l'accueil, qui
// presentait les projets en cartes non cliquables : rien n'etait indexable
// et aucune requete du type "logiciel de gestion Benin" n'avait de cible.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$reaUrl = $portfolioUrl . '/realisations/';

$stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]);
$projets = $stmt->fetchAll();

// Regroupement par categorie pour donner de la structure a la page.
$parCategorie = [];
foreach ($projets as $pr) {
    $cat = trim((string) ($pr['category'] ?? '')) ?: 'Autres projets';
    $parCategorie[$cat][] = $pr;
}

$nb = count($projets);

$pageTitle     = seoTitle('Réalisations : ' . $nb . ' projets web, mobile et automatisation', $fullName);
$pageDesc      = seoDescription('Sites, applications, logiciels de gestion et automatisations livrés par ' . $fullName . ' au Bénin et à distance. Technologies, durées et contexte de chaque projet.');
$pageCanonical = $reaUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pos = 0;
$pageSchemas = [
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'CollectionPage',
        '@id'             => $reaUrl . '#collection',
        'url'             => $reaUrl,
        'name'            => $pageTitle,
        'description'     => $pageDesc,
        'inLanguage'      => 'fr-BJ',
        'isPartOf'        => ['@id' => $portfolioUrl . '/#website'],
        'about'           => ['@id' => $portfolioUrl . '/#person'],
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'ItemList',
        'name'            => 'Réalisations',
        'numberOfItems'   => $nb,
        'itemListElement' => array_values(array_map(
            static function (array $pr) use (&$pos, $portfolioUrl): array {
                return [
                    '@type'    => 'ListItem',
                    'position' => ++$pos,
                    'name'     => $pr['title'],
                    'url'      => $portfolioUrl . '/realisations/' . $pr['slug'],
                ];
            },
            $projets
        )),
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',      'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Réalisations', 'item' => $reaUrl],
        ],
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span>Réalisations</div>

  <section class="svc-hero"><div class="wrap">
    <h1>Mes réalisations</h1>
    <p>Des projets livrés pour des entreprises réelles : sites, boutiques, applications métier et automatisations. Chaque fiche précise le contexte, les technologies employées et la durée du projet.</p>
    <div class="hero-cta">
      <a href="/contact" class="btn">Demander un devis gratuit</a>
      <a href="/services/" class="btn btn-ghost">Voir mes services</a>
    </div>
  </div></section>

  <?php if (!$projets): ?>
  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <p>Les fiches détaillées de mes projets arrivent prochainement. En attendant, <a href="/contact">décrivez-moi votre besoin</a> : je peux vous présenter des travaux comparables au vôtre lors d'un premier échange.</p>
    </div>
  </div></section>
  <?php else: ?>

  <?php $num = 0; foreach ($parCategorie as $cat => $liste): $num++; ?>
  <section class="sect<?= $num % 2 === 0 ? ' soft' : '' ?>"><div class="wrap">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num"><?= str_pad((string) $num, 2, '0', STR_PAD_LEFT) ?></span> / <?= sanitize($cat) ?></span>
      <h2><?= sanitize($cat) ?></h2>
    </div>
    <div class="pf-grid stg">
      <?php foreach ($liste as $pr):
        $img = $pr['image_url'] ? '/uploads/' . sanitize($pr['image_url']) : '';
      ?>
        <a class="pf" href="/realisations/<?= sanitize($pr['slug']) ?>">
          <div class="pf-thumb">
            <?php if ($img): ?><img src="<?= $img ?>" alt="<?= sanitize($pr['title']) ?>" loading="lazy" decoding="async"><?php endif; ?>
            <?php if (!empty($pr['badge_text'])): ?><span class="pf-tag"><?= sanitize($pr['badge_text']) ?></span><?php endif; ?>
          </div>
          <div class="pf-body">
            <h3><?= sanitize($pr['title']) ?></h3>
            <?php if (!empty($pr['description_short'])): ?><p><?= sanitize($pr['description_short']) ?></p><?php endif; ?>
            <div class="zone-tags">
              <?php if (!empty($pr['year'])): ?><span><?= sanitize((string) $pr['year']) ?></span><?php endif; ?>
              <?php if (!empty($pr['duration'])): ?><span><?= sanitize($pr['duration']) ?></span><?php endif; ?>
            </div>
            <div class="arrow">Voir le projet</div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endforeach; ?>
  <?php endif; ?>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <h2>Comment je travaille</h2>
      <p>Chacun de ces projets a suivi la même méthode en quatre étapes : un cadrage pour clarifier le besoin, les objectifs et le budget ; une phase de design validée avant la moindre ligne de code ; le développement, avec des points d'avancement réguliers et une version en ligne consultable au fur et à mesure ; enfin la mise en ligne, la formation et le suivi. Vous parlez directement à la personne qui écrit le code, sans intermédiaire commercial.</p>
      <p><a href="/a-propos/#methode">Voir la méthode en détail</a> ou <a href="/contact">demander un devis pour votre projet</a>.</p>
    </div>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv">
    <h2>Votre projet, le prochain sur cette page ?</h2>
    <p>Décrivez votre besoin, je reviens vers vous avec un devis clair et sans engagement.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
