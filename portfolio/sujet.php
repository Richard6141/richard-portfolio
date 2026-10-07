<?php
// ============================================================
// sujet.php · Gabarit unique des pages « sujet x ville »
//
// Cree le 21/08/2026. Un seul gabarit pour tous les sujets, la ou
// ville.php (285 lignes) et digitalisation.php (187 lignes) rendaient
// deja la meme chose : un Service, un fil d'Ariane, une FAQ et une
// suite de sections. Un troisieme sujet aurait produit un troisieme
// gabarit, et trois occasions de diverger.
//
// Les sections sont decrites par la donnee, pas par le code : chaque
// fichier de ville declare une liste de sections typees, et ce gabarit
// sait en rendre quatre formes (prose, liste, etapes, definitions).
// Ajouter un sujet ne demande donc aucune modification ici.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

/** @var array $page  Injecte par le resolveur (portfolio/route.php). */
/** @var array $sujet Metadonnees du sujet. */
if (!isset($page, $sujet)) {
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}

$url = $portfolioUrl . '/' . $page['slug'];

// La page ville n'existe que pour les villes de data/villes. Les villes
// presentes uniquement dans le registre (Paris, Montreal, Geneve...) n'en
// ont pas: lier vers /developpeur-web-X y menait droit sur un 404.
$villesAvecPage = [];
foreach ((array) @require __DIR__ . '/data/villes.php' as $vv) {
    if (!empty($vv['slug'])) { $villesAvecPage[$vv['slug']] = $vv; }
}
$aPageVille = $page['ville_slug'] !== '' && isset($villesAvecPage[$page['ville_slug']]);

$pageTitle     = seoTitle($page['titre'], $fullName);
$pageDesc      = seoDescription($page['accroche'] . ' ' . ($page['intro'] ?? ''));
$pageCanonical = $url;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => $url . '#service',
        'name'        => $page['titre'],
        'serviceType' => $sujet['service_type'] ?? $sujet['nom'] ?? 'Développement web',
        'description' => $page['accroche'],
        'url'         => $url,
        'provider'    => ['@id' => $portfolioUrl . '/#person'],
        'areaServed'  => [
            ['@type' => 'City',    'name' => $page['ville']],
            ['@type' => 'Country', 'name' => $page['pays']],
        ],
        'offers' => ['@type' => 'Offer', 'priceCurrency' => 'XOF', 'description' => 'Devis gratuit après cadrage'],
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => array_values(array_filter([
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Zones desservies', 'item' => $portfolioUrl . '/zones/'],
            // Echelon ville saute quand la ville n'a pas de page dediee.
            $aPageVille ? ['@type' => 'ListItem', 'position' => 3, 'name' => $page['ville'], 'item' => $portfolioUrl . '/developpeur-web-' . $page['ville_slug']] : null,
            ['@type' => 'ListItem', 'position' => $aPageVille ? 4 : 3, 'name' => $page['titre'], 'item' => $url],
        ])),
    ],
];

if (!empty($page['faq'])) {
    $pageSchemas[] = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(
            static fn(array $qa): array => [
                '@type'          => 'Question',
                'name'           => $qa['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa['r']],
            ],
            $page['faq']
        ),
    ];
}

// Autres sujets deja publies pour cette ville : maillage interne construit
// depuis le registre, donc toujours a jour sans intervention.
$autresSujets = [];
foreach ($sujetsRegistre as $sSlug => $s) {
    if ($sSlug === $sujet['slug']) continue;
    if (isset($s['pages'][$page['ville_slug']])) {
        $autresSujets[] = ['sujet' => $s, 'page' => $s['pages'][$page['ville_slug']]];
    }
}
// Meme sujet dans d'autres villes : utile a un visiteur qui compare.
$memeSujetAilleurs = [];
foreach ($sujet['pages'] as $vSlug => $pg) {
    if (($pg['slug'] ?? '') !== $page['slug']) $memeSujetAilleurs[] = $pg;
}
// Vague 1E : le secteur publié dont cette page est la déclinaison locale (jamais de lien avant sa date).
$secteursParents = sujet_secteurs((string) $page['slug']);

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/zones/">Zones desservies</a><?php if ($aPageVille): ?><span class="sep">/</span><a href="/developpeur-web-<?= sanitize($page['ville_slug']) ?>"><?= sanitize($page['ville']) ?></a><?php endif; ?><span class="sep">/</span><?= sanitize($sujet['nom'] ?? $sujet['slug']) ?></div>

  <?php
  $vRec = $aPageVille ? $villesAvecPage[$page['ville_slug']] : null;
  ?>
  <section class="vil-hero"><div class="wrap vil-hero-grid">
    <div class="vil-hero-txt">
      <span class="eyebrow"><span class="pulse"></span><span class="mono"><?= drapeau((string) $page['pays']) ?><?= $page['ville_slug'] !== '' ? sanitize($page['ville']) . ', ' . sanitize($page['pays']) : sanitize($page['ville']) ?></span></span>
      <h1><?= sanitize($page['titre']) ?></h1>
      <p class="lead"><?= sanitize($page['accroche']) ?></p>
      <div class="hero-cta">
        <a href="/contact" class="btn">Demander un devis gratuit</a>
        <?php if ($aPageVille): ?><a href="/developpeur-web-<?= sanitize($page['ville_slug']) ?>" class="btn btn-ghost">Développeur web à <?= sanitize($page['ville']) ?></a><?php else: ?><a href="/zones/" class="btn btn-ghost">Zones desservies</a><?php endif; ?>
      </div>
    </div>

    <aside class="vil-card">
      <div class="vc-row">
        <span class="vc-k">Prestation</span>
        <span class="vc-v"><?= sanitize($sujet['nom'] ?? $sujet['slug']) ?></span>
      </div>
      <?php if ($vRec !== null): ?>
      <div class="vc-row">
        <span class="vc-k">Intervention</span>
        <span class="vc-v"><?php if (!empty($vRec['sur_place'])): ?>Sur place et à distance<?php else: ?>Entièrement à distance<?php endif; ?></span>
      </div>
      <?php if (!empty($vRec['sur_place']) && !empty($vRec['distance_km'])): ?>
      <div class="vc-row">
        <span class="vc-k">Distance</span>
        <span class="vc-v"><?= (int) $vRec['distance_km'] ?> km depuis Cotonou</span>
      </div>
      <?php endif; ?>
      <?php else: ?>
      <div class="vc-row">
        <span class="vc-k">Intervention</span>
        <span class="vc-v">À distance, avec des points d'étape planifiés</span>
      </div>
      <?php endif; ?>
      <div class="vc-row">
        <span class="vc-k">Délai de réponse</span>
        <span class="vc-v">Sous 24 h</span>
      </div>
      <div class="vc-row">
        <span class="vc-k">Devis</span>
        <span class="vc-v">Gratuit, après cadrage</span>
      </div>
      <?php if ($autresSujets): ?>
      <div class="vc-sect">
        <span class="vc-k">Aussi à <?= sanitize($page['ville']) ?></span>
        <div class="vc-tags"><?php foreach (array_slice($autresSujets, 0, 4) as $as): ?><a href="/<?= sanitize($as['page']['slug']) ?>"><?= sanitize($as['sujet']['nom'] ?? $as['sujet']['slug']) ?></a><?php endforeach; ?></div>
      </div>
      <?php endif; ?>
    </aside>
  </div></section>

  <?php if (!empty($page['intro'])): ?>
  <section class="sect"><div class="wrap" style="max-width:1000px">
    <div class="prose rv"><p class="lead"><?= sanitize($page['intro']) ?></p></div>
  </div></section>
  <?php endif; ?>

  <?php $n = 0; foreach (($page['sections'] ?? []) as $sec): $n++; $soft = ($n % 2 === 1) ? ' soft' : ''; ?>
  <section class="sect<?= $soft ?>"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num"><?= sprintf('%02d', $n) ?></span> / <?= sanitize($sec['etiquette'] ?? 'Détail') ?></span><h2><?= sanitize($sec['titre']) ?></h2></div>
    <?php if (($sec['type'] ?? 'prose') === 'liste'): ?>
      <ul class="inc-list rv"><?php foreach ($sec['items'] as $it): ?><li><?= sanitize($it) ?></li><?php endforeach; ?></ul>
    <?php elseif ($sec['type'] === 'etapes'): ?>
      <div class="proc stg">
        <?php foreach ($sec['items'] as $i => $it): ?>
        <div class="step"><div class="sn"><?= sprintf('%02d', $i + 1) ?></div><h3><?= sanitize($it['titre']) ?></h3><p><?= sanitize($it['texte']) ?></p></div>
        <?php endforeach; ?>
      </div>
    <?php elseif ($sec['type'] === 'liens'): ?>
      <div class="bento stg">
        <?php foreach ($sec['items'] as $it): ?>
        <a class="svc" href="<?= sanitize($it['url']) ?>"><h3><?= sanitize($it['titre']) ?></h3><p><?= sanitize($it['texte']) ?></p><div class="arrow">Lire la page</div></a>
        <?php endforeach; ?>
      </div>
    <?php elseif ($sec['type'] === 'definitions'): ?>
      <div class="vil-zones">
        <?php foreach ($sec['items'] as $id => $it): ?>
        <article class="vz">
          <span class="vz-n"><?= sprintf('%02d', $id + 1) ?></span>
          <h3><?= sanitize($it['titre']) ?></h3>
          <p><?= sanitize($it['texte']) ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="prose rv"><?php foreach ($sec['paragraphes'] as $par): ?><p><?= sanitize($par) ?></p><?php endforeach; ?></div>
    <?php endif; ?>
  </div></section>
  <?php endforeach; ?>

  <?php if (str_starts_with($sujet['slug'] ?? '', 'formation')): ?>
  <?php /* Bloc de reassurance commun aux pages formation (06/09/2026),
           rendu par le gabarit plutot que duplique dans chaque fichier
           de donnees : un seul endroit a maintenir. */ ?>
  <section class="sect soft"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">+</span> / Le formateur</span><h2>Pourquoi choisir Richard SALANON.</h2></div>
    <div class="vil-zones">
      <article class="vz">
        <span class="vz-n">01</span>
        <h3>Un formateur qui pratique</h3>
        <p>Je ne suis pas un formateur de salle : je livre des sites, des ERP et des automatisations à des clients toutes les semaines. Ce que j'enseigne sort de ce terrain, erreurs vécues comprises, et mes propres outils sont construits avec les méthodes que je transmets.</p>
      </article>
      <article class="vz">
        <span class="vz-n">02</span>
        <h3>Vos documents, pas des diapositives</h3>
        <p>Chaque session se prépare avec vos fichiers, vos outils et vos cas réels. Le critère de réussite est un geste exécuté seul en fin de session, pas un questionnaire de satisfaction. Vous repartez avec quelque chose qui fonctionne déjà chez vous.</p>
      </article>
      <article class="vz">
        <span class="vz-n">03</span>
        <h3>La franchise avant la vente</h3>
        <p>Le cadrage gratuit peut conclure que la formation demandée n'est pas la bonne réponse, et je le dis. Aucun résultat invérifiable n'est promis, aucun chiffre gonflé : c'est aussi ce que j'enseigne, alors autant l'appliquer à ma propre offre.</p>
      </article>
      <article class="vz">
        <span class="vz-n">04</span>
        <h3>Tout reste chez vous</h3>
        <p>Consignes, fiches réflexes, flux, accès : ce qui se construit pendant une session appartient à votre entreprise et survit à mon départ. Je forme pour rendre autonome, pas pour entretenir une dépendance au prestataire.</p>
      </article>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if (!empty($page['faq'])): ?>
  <section class="sect"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><h2><?= $page['ville_slug'] !== '' ? "Ce qu'on me demande à " . sanitize($page['ville']) . "." : 'Questions fréquentes.' ?></h2></div>
    <div class="faq rv">
      <?php foreach ($page['faq'] as $qa): ?>
      <details><summary><?= sanitize($qa['q']) ?></summary><p><?= sanitize($qa['r']) ?></p></details>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if ($secteursParents): ?>
  <section class="sect"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><h2>Le secteur en détail.</h2></div>
    <?php foreach ($secteursParents as $secteurParent): ?>
    <p class="rv"><a href="<?= sanitize($secteurParent['url']) ?>"><?= sanitize(registre_libelle($secteurParent)) ?></a> : <?= sanitize($secteurParent['meta']) ?></p>
    <?php endforeach; ?>
  </div></section>
  <?php endif; ?>

  <?php if ($autresSujets): ?>
  <section class="sect soft"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><h2><?= $page['ville_slug'] !== '' ? 'Autres sujets à ' . sanitize($page['ville']) . '.' : 'Autres sujets.' ?></h2></div>
    <div class="bento stg">
      <?php foreach ($autresSujets as $a): ?>
      <a class="svc" href="/<?= sanitize($a['page']['slug']) ?>"><h3><?= sanitize($a['page']['titre']) ?></h3><p><?= sanitize($a['page']['accroche']) ?></p><div class="arrow">Lire la page</div></a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <?php if ($memeSujetAilleurs): ?>
  <section class="sect"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><h2><?= $page['ville_slug'] !== '' ? sanitize($sujet['nom'] ?? '') . " dans d'autres villes." : 'À lire aussi.' ?></h2></div>
    <div class="zone-grid">
      <?php foreach ($memeSujetAilleurs as $pg): ?>
      <a href="/<?= sanitize($pg['slug']) ?>"><?= sanitize($pg['ville']) ?></a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2><?= $page['ville_slug'] !== '' ? 'Un projet à ' . sanitize($page['ville']) . ' ?' : 'Un projet de digitalisation ?' ?></h2>
    <p>Décrivez votre situation, je reviens avec un plan par étapes et un devis gratuit.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
