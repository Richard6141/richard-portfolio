<?php
// ============================================================
// ville.php · Page locale (URL /developpeur-web-{ville})
//
// Creee le 20/08/2026. Le pied de page annoncait 21 villes sans qu'aucune
// URL ne porte cette couverture : le site revendiquait un territoire qu'il
// n'occupait pas. Le concurrent direct tire 2 003 URL de ce mecanisme
// contre 43 ici.
//
// Le contenu vient de data/villes.php, ou chaque ville a SON texte. Ce
// fichier ne fait que le mettre en forme : aucune phrase generique
// interpolee avec un nom de ville, sous peine de produire du duplicate
// content qui ferait chuter l'ensemble des pages locales.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$villes = require __DIR__ . '/data/villes.php';
$slug   = preg_replace('/[^a-z0-9-]/', '', strtolower((string)($_GET['ville'] ?? '')));

// Ville inconnue : 404 franc, jamais une redirection vers l'accueil.
// Une redirection serait un soft-404 que Google indexerait comme page valide
// (meme raisonnement que pour les slugs de service, voir service.php).
if (!isset($villes[$slug])) {
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}

$v       = $villes[$slug];
$villeUrl = $portfolioUrl . '/developpeur-web-' . $slug;

// Services reellement presents en base, pour ne lier que des pages existantes.
$stmt = $pdo->prepare("SELECT title FROM services WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$slugsServices = [];
foreach ($stmt->fetchAll() as $s) { $slugsServices[generateSlug($s['title'])] = $s['title']; }

$pageTitle     = seoTitle('Développeur web à ' . $v['nom'] . ' (' . $v['pays'] . ')', $fullName);
$pageDesc      = seoDescription('Création de sites web, applications et automatisation à ' . $v['nom'] . '. ' . $v['accroche'] . '. Devis gratuit sous 24 h.');
$pageCanonical = $villeUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => $villeUrl . '#service',
        'name'        => 'Développeur web, mobile & automatisation à ' . $v['nom'],
        'serviceType' => 'Création de site web et automatisation',
        'description' => $v['accroche'],
        'url'         => $villeUrl,
        'provider'    => ['@id' => $portfolioUrl . '/#person'],
        'areaServed'  => [
            ['@type' => 'City',    'name' => $v['nom']],
            ['@type' => 'Country', 'name' => $v['pays']],
        ],
        'offers' => ['@type' => 'Offer', 'priceCurrency' => 'XOF', 'description' => 'Devis gratuit après cadrage'],
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',  'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Zones desservies', 'item' => $portfolioUrl . '/zones/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $v['nom'], 'item' => $villeUrl],
        ],
    ],
    [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(
            static fn(array $qa): array => [
                '@type'          => 'Question',
                'name'           => $qa[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
            ],
            $v['faq']
        ),
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/zones/">Zones desservies</a><span class="sep">/</span><?= sanitize($v['nom']) ?></div>

  <?php
  // Hero refait le 21/08/2026. L'ancien empilait un titre, une phrase et deux
  // boutons sur toute la largeur, laissant la moitie droite vide. Les faits
  // locaux (region, distance, secteurs, delais) etaient enfouis plus bas alors
  // qu'ils repondent aux premieres questions du visiteur. Ils remontent ici,
  // dans une carte qui occupe le vide et sert de repere immediat.
  $vSecteurs = array_slice($v['secteurs'] ?? [], 0, 4);
  ?>
  <section class="vil-hero"><div class="wrap vil-hero-grid">
    <div class="vil-hero-txt">
      <span class="eyebrow"><span class="pulse"></span><span class="mono"><?= sanitize($v['region']) ?>, <?= sanitize($v['pays']) ?></span></span>
      <h1>Développeur web à <span class="hl"><?= sanitize($v['nom']) ?></span></h1>
      <p class="lead"><?= sanitize($v['accroche']) ?>.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn">Demander un devis gratuit</a>
        <a href="#services-ville" class="btn btn-ghost">Ce que je fais ici</a>
      </div>
    </div>

    <aside class="vil-card">
      <div class="vc-row">
        <span class="vc-k">Intervention</span>
        <span class="vc-v"><?php if ($v['sur_place']): ?>Sur place et à distance<?php else: ?>Entièrement à distance<?php endif; ?></span>
      </div>
      <?php if ($v['sur_place'] && $v['distance_km']): ?>
      <div class="vc-row">
        <span class="vc-k">Distance</span>
        <span class="vc-v"><?= (int) $v['distance_km'] ?> km depuis Abomey-Calavi</span>
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
      <?php if ($vSecteurs): ?>
      <div class="vc-sect">
        <span class="vc-k">Secteurs suivis à <?= sanitize($v['nom']) ?></span>
        <div class="vc-tags"><?php foreach ($vSecteurs as $sct): ?><span><?= sanitize($sct) ?></span><?php endforeach; ?></div>
      </div>
      <?php endif; ?>
    </aside>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <p class="lead"><?= sanitize($v['intro']) ?></p>

      <h2>Le numérique à <?= sanitize($v['nom']) ?> aujourd'hui</h2>
      <p><?= sanitize($v['contexte']) ?></p>

      <h3>Les profils que j'accompagne le plus souvent ici</h3>
      <ul>
        <?php foreach ($v['secteurs'] as $sect): ?><li><?= sanitize($sect) ?></li><?php endforeach; ?>
      </ul>

      <?php if (!empty($v['quartiers'])): ?>
      <h2>Quartier par quartier</h2>
      <p>Les besoins ne sont pas les mêmes d'un bout à l'autre de la ville. Voici ce que j'observe selon les zones.</p>
      <?php foreach ($v['quartiers'] as $q): ?>
        <h3><?= sanitize($q[0]) ?></h3>
        <p><?= sanitize($q[1]) ?></p>
      <?php endforeach; ?>
      <?php endif; ?>

      <?php if (!empty($v['concurrence'])): ?>
      <h2>L'état de la concurrence en ligne</h2>
      <p><?= sanitize($v['concurrence']) ?></p>
      <?php endif; ?>
    </div>
  </div></section>

  <section class="sect soft"><div class="wrap">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num">02</span> / Besoins courants</span>
      <h2>Ce que je réalise pour les entreprises de <?= sanitize($v['nom']) ?></h2>
    </div>
    <div class="bento stg">
      <?php foreach ($v['besoins'] as $b):
        [$bTitre, $bTexte, $bSlug] = $b;
        $existe = isset($slugsServices[$bSlug]);
      ?>
        <?php if ($existe): ?><a class="svc" href="/services/<?= sanitize($bSlug) ?>"><?php else: ?><div class="svc"><?php endif; ?>
          <div class="ico"><?= pv2_icon($slugsServices[$bSlug] ?? $bTitre) ?></div>
          <h3><?= sanitize($bTitre) ?></h3>
          <p><?= sanitize($bTexte) ?></p>
          <?php if ($existe): ?><div class="arrow">Voir la prestation</div><?php endif; ?>
        <?php if ($existe): ?></a><?php else: ?></div><?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div></section>

  <?php if (!empty($v['comparatif'])): ?>
  <!-- Tableau comparatif : format que Google privilegie pour l'extrait optimise,
       et que le site n'exploitait quasiment pas (un seul tableau sur 21 pages). -->
  <section class="sect"><div class="wrap" style="max-width:900px">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num">03</span> / Repères</span>
      <h2>Quelle solution pour quel profil à <?= sanitize($v['nom']) ?> ?</h2>
    </div>
    <div class="vil-table-wrap rv">
      <table class="vil-table">
        <thead>
          <tr><th scope="col">Votre activité</th><th scope="col">Ce que je recommande</th><th scope="col">Budget</th><th scope="col">Délai</th></tr>
        </thead>
        <tbody>
          <?php foreach ($v['comparatif'] as $ligne): ?>
          <tr>
            <th scope="row"><?= sanitize($ligne[0]) ?></th>
            <td><?= sanitize($ligne[1]) ?></td>
            <td><?= sanitize($ligne[2]) ?></td>
            <td><?= sanitize($ligne[3]) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p class="vil-table-note rv">Budgets indicatifs, établis après un cadrage gratuit. Le devis final est détaillé poste par poste et sans engagement.</p>
  </div></section>
  <?php endif; ?>

  <?php if (!empty($v['erreurs'])): ?>
  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <h2>Les erreurs que je vois le plus souvent à <?= sanitize($v['nom']) ?></h2>
      <?php foreach ($v['erreurs'] as $e): ?>
        <h3><?= sanitize($e[0]) ?></h3>
        <p><?= sanitize($e[1]) ?></p>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <?php if (!empty($v['cas_type'])): ?>
      <h2>Un cas typique à <?= sanitize($v['nom']) ?></h2>
      <p><?= sanitize($v['cas_type']) ?></p>
      <?php endif; ?>

      <h2>Combien coûte un site web à <?= sanitize($v['nom']) ?> ?</h2>
      <p>Les tarifs ne dépendent pas de votre ville mais de ce que le projet demande réellement. Une landing page démarre à partir de 150 000 FCFA, un site vitrine professionnel à partir de 300 000 FCFA, une prestation de référencement naturel à partir de 75 000 FCFA. Une boutique en ligne ou une application sur mesure se chiffrent après cadrage.</p>
      <?php if (!empty($v['budget'])): ?><p><?= sanitize($v['budget']) ?></p><?php endif; ?>
      <p><a href="/blog/combien-coute-un-site-web-au-benin">Voir le détail des prix d'un site web</a> ou <a href="/contact">demander un devis pour votre projet</a>.</p>

      <?php if (!empty($v['delais'])): ?>
      <h2>Quels délais prévoir ?</h2>
      <p><?= sanitize($v['delais']) ?></p>
      <?php endif; ?>

      <?php if (!empty($v['rythme'])): ?>
      <h2>Le bon moment pour lancer votre projet</h2>
      <p><?= sanitize($v['rythme']) ?></p>
      <?php endif; ?>

      <h2>Travailler ensemble depuis <?= sanitize($v['nom']) ?></h2>
      <p><?= sanitize($v['travailler']) ?></p>
      <?php if (!empty($v['pourquoi_moi'])): ?><p><?= sanitize($v['pourquoi_moi']) ?></p><?php endif; ?>

      <?php if (!empty($v['apres_livraison'])): ?>
      <h3>Ce qui se passe après la livraison</h3>
      <p><?= sanitize($v['apres_livraison']) ?></p>
      <?php endif; ?>

      <h3>Moyens de paiement acceptés</h3>
      <p><?= sanitize($v['paiement']) ?> Le règlement se fait en plusieurs tranches liées à l'avancement du projet : une avance au démarrage, des versements à la validation de chaque étape, le solde à la mise en ligne.</p>

      <?php if (!empty($v['demarrer'])): ?>
      <h2>Comment démarrer concrètement</h2>
      <p><?= sanitize($v['demarrer']) ?></p>
      <?php endif; ?>
    </div>
  </div></section>

  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num">04</span> / Questions fréquentes</span>
      <h2>Ce qu'on me demande depuis <?= sanitize($v['nom']) ?></h2>
    </div>
    <div class="faq rv">
      <?php foreach ($v['faq'] as $qa): ?>
        <div class="qa">
          <button type="button"><?= sanitize($qa[0]) ?><span class="plus">+</span></button>
          <div class="a"><?= sanitize($qa[1]) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
      <h2>Ce qui est inclus dans tous les cas</h2>
      <p>Quel que soit le projet et quelle que soit la ville, six choses ne se négocient pas et n'apparaissent jamais en option sur le devis. Le cadrage initial et le devis sont gratuits, détaillés poste par poste, et ne vous engagent à rien. Les accès à l'hébergement et au nom de domaine sont enregistrés à votre nom dès le premier jour, jamais au mien. Le code source vous est remis à la livraison : si vous confiez un jour la suite à quelqu'un d'autre, rien ne vous retient techniquement. Une formation est comprise, pour que vous puissiez modifier vos textes, vos prix et vos images sans dépendre de personne. Le site est conçu pour le téléphone d'abord, parce que c'est là que vos visiteurs vous liront. Enfin, vous parlez directement à la personne qui écrit le code, sans commercial ni chef de projet intermédiaire.</p>
    </div>
  </div></section>

  <?php
  // Maillage entre pages locales : les villes du meme pays d'abord.
  $voisines = array_filter($villes, static fn($x) => $x['slug'] !== $slug && $x['pays'] === $v['pays']);
  if (count($voisines) < 3) {
      $voisines += array_filter($villes, static fn($x) => $x['slug'] !== $slug);
  }
  $voisines = array_slice($voisines, 0, 6, true);
  ?>
  <?php if ($voisines): ?>
  <section class="sect"><div class="wrap">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">05</span> / Autres villes</span><h2>J'interviens aussi dans ces villes</h2></div>
    <div class="vil-links rv">
      <?php foreach ($voisines as $vo): ?>
        <a href="/developpeur-web-<?= sanitize($vo['slug']) ?>"><?= sanitize($vo['nom']) ?><small><?= sanitize($vo['pays']) ?></small></a>
      <?php endforeach; ?>
      <a href="/zones/" class="vil-all">Toutes les zones</a>
    </div>
  </div></section>
  <?php endif; ?>

  <?php
  // Sujets publies pour cette ville (registre data/sujets.php). Sans ce bloc,
  // les pages sujet etaient orphelines : atteignables en direct et presentes
  // au sitemap, mais liees depuis aucune page du site. Un moteur les explore
  // alors en dernier et ne leur transmet aucune autorite interne.
  $sujetsVille = [];
  $registre = @require __DIR__ . '/data/sujets.php';
  if (is_array($registre)) {
      foreach ($registre as $sj) {
          if (isset($sj['pages'][$slug])) {
              $sujetsVille[] = ['sujet' => $sj, 'page' => $sj['pages'][$slug]];
          }
      }
  }
  ?>
  <?php if ($sujetsVille): ?>
  <section class="sect soft"><div class="wrap">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">06</span> / Aller plus loin</span><h2>Mes expertises à <?= sanitize($v['nom']) ?></h2></div>
    <div class="bento stg">
      <?php foreach ($sujetsVille as $sv): ?>
      <a class="svc" href="/<?= sanitize($sv['page']['slug']) ?>">
        <h3><?= sanitize($sv['page']['titre']) ?></h3>
        <p><?= sanitize($sv['page']['accroche']) ?></p>
        <div class="arrow">Lire la page</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endif; ?>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv">
    <h2>Un projet à <?= sanitize($v['nom']) ?> ?</h2>
    <p>Décrivez votre besoin, je reviens vers vous avec un devis clair et sans engagement.</p>
    <a href="/contact" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
