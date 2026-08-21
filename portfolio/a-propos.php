<?php
// ============================================================
// a-propos.php · Page À propos (URL /a-propos/)
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$aboutUrl = $portfolioUrl . '/a-propos/';
$bioLong  = trim((string)($profile['bio_long'] ?? ''));
$profession = $profile['profession'] ?? 'Développeur web full stack';

$pageTitle     = seoTitle('Développeur web au Bénin : qui suis-je ?', $fullName);
$pageDesc      = seoDescription($fullName . ', développeur web, mobile & automatisation basé à ' . $h_city . ' (Bénin). Parcours, expertise et méthode pour des solutions numériques sur-mesure.');
$pageCanonical = $aboutUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@context' => 'https://schema.org', '@type' => 'AboutPage',
        'url' => $aboutUrl, 'name' => $pageTitle,
        'mainEntity' => [
            '@type' => 'Person', '@id' => $portfolioUrl . '/#person', 'name' => $fullName, 'jobTitle' => $profession,
            'description' => $fullName . ', developpeur web et consultant en digitalisation d\'entreprise a ' . $h_city . ', Benin.',
            'url' => $portfolioUrl, 'worksFor' => ['@type' => 'Organization', '@id' => $portfolioUrl . '/#organization', 'name' => 'Richard Technologies'],
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => $h_city, 'addressCountry' => 'BJ'],
            'knowsAbout' => ['Developpement web', 'Referencement naturel (SEO)', 'Automatisation', 'Intelligence artificielle', 'Digitalisation d\'entreprise'],
            'sameAs' => ['https://www.linkedin.com/in/richard-salanon/', 'https://github.com/Richard6141'],
        ],
    ],
    [
        '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',  'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'À propos', 'item' => $aboutUrl],
        ],
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span>À propos</div>

  <?php
  $aboutPhoto = ($profile['avatar_url'] ?? '') ? '/api/thumb.php?src=' . urlencode(preg_replace('/\.\.[\\/]/', '', $profile['avatar_url'])) . '&s=600' : '';
  $aboutMaps  = $contactInfo['google_maps_url'] ?? '';
  ?>
  <section><div class="wrap about-hero">
    <div>
      <span class="eyebrow"><span class="pulse"></span><span class="mono">À propos de moi</span></span>
      <h1>Votre partenaire numérique au Bénin, de l'idée à la mise en ligne</h1>
      <p class="lead">Je suis <strong><?= sanitize($fullName) ?></strong>, <?= sanitize(mb_strtolower($profession)) ?> basé à <?= sanitize($h_city) ?>. J'accompagne les entreprises, PME et entrepreneurs du Bénin (et à distance partout) pour transformer leurs idées en sites, applications et automatisations qui rapportent.</p>
      <div class="hero-cta">
        <a href="<?= sanitize($h_mailto) ?>" class="btn">Démarrer un projet</a>
        <a href="/services/" class="btn btn-ghost">Voir mes services</a>
      </div>
    </div>
    <?php if ($aboutPhoto): ?>
    <div class="about-photo">
      <img src="<?= sanitize($aboutPhoto) ?>" alt="<?= sanitize($fullName) ?> — <?= sanitize($profession) ?>">
      <?php if ($aboutMaps): ?><a class="about-gbadge" href="<?= sanitize($aboutMaps) ?>" target="_blank" rel="noopener"><span class="st">★★★★★</span> Avis Google</a><?php endif; ?>
    </div>
    <?php endif; ?>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
        <h2 id="qui-suis-je">Qui suis-je ?</h2>
        <p>Je suis <strong><?= sanitize($fullName) ?></strong>, développeur web et consultant en digitalisation d'entreprise, basé à <?= sanitize($h_city) ?>, au Bénin. Depuis plus de six ans, j'aide les entreprises, les PME et les entrepreneurs à passer au numérique : je crée leurs sites et applications, je les rends visibles sur Google, et j'automatise leurs tâches répétitives. En un mot, je les digitalise, de l'idée jusqu'aux résultats.</p>

        <h2 id="parcours">Mon parcours</h2>
        <p>Formé au développement informatique à EPITECH Bénin, j'ai construit mon expertise sur des projets variés, du site vitrine à l'application métier sur mesure, en passant par l'automatisation et le référencement. J'ai notamment conçu des projets comme <strong>wapy.pro</strong> et <strong>alloartisan.app</strong>. Cette diversité m'a appris une chose essentielle : un projet numérique réussi n'est pas seulement une question de code, c'est une question de résultat concret pour l'entreprise.</p>

        <h2 id="specialite">Ma spécialité : la digitalisation d'entreprise</h2>
        <p>Au fil de mes projets, une conviction s'est imposée : la vraie valeur pour une entreprise ne vient pas d'un outil isolé, mais d'une digitalisation cohérente. C'est pourquoi je me spécialise comme consultant en digitalisation d'entreprise, en approfondissant continuellement cette expertise. Mon rôle est de réunir trois compétences que l'on trouve rarement chez une seule personne :</p>
        <ul class="inc-list">
          <li>Créer les outils : sites, boutiques en ligne et applications sur mesure.</li>
          <li>Rendre visible : référencement naturel pour être trouvé sur Google.</li>
          <li>Faire gagner du temps : automatisation des tâches et intégration de l'intelligence artificielle.</li>
        </ul>
        <p>Réunies, ces trois compétences forment une démarche complète : je ne me contente pas de livrer un outil, j'accompagne la transformation numérique de votre entreprise, étape par étape et selon votre budget.</p>

        <h2 id="approche">Ma façon de travailler</h2>
        <p>Je crois à quelques principes simples. La transparence d'abord : un devis clair, des explications sans jargon, et des points d'avancement réguliers. La progressivité ensuite : on avance chantier par chantier, en mesurant le gain, plutôt que de tout bouleverser d'un coup. Et l'honnêteté toujours : si une solution plus simple ou moins chère convient mieux à votre besoin, je vous le dis.</p>
        <p>Être un interlocuteur unique pour tout votre numérique vous fait gagner du temps, de la cohérence et de la tranquillité d'esprit. Vous ne courez plus après un graphiste, un développeur et un référenceur : vous avez un seul partenaire, qui comprend l'ensemble et reste disponible et réactif.</p>

      <h2 id="expertise">Mon expertise technique</h2>
      <p>Je maîtrise un large éventail de technologies modernes pour répondre à chaque besoin, du site vitrine au logiciel métier complexe :</p>
      <ul class="inc-list">
        <li>PHP &amp; Laravel</li>
        <li>Java &amp; Spring Boot</li>
        <li>Node.js &amp; API REST</li>
        <li>Python &amp; Django</li>
        <li>React &amp; front-end moderne</li>
        <li>Flutter (apps Android &amp; iOS)</li>
        <li>WordPress &amp; CMS</li>
        <li>Automatisation n8n / Make &amp; IA</li>
      </ul>

      <h2>Pourquoi choisir un développeur basé au Bénin ?</h2>
      <p>Développer pour le marché béninois demande des ajustements que seul un développeur implanté localement maîtrise vraiment : des sites <strong>légers et rapides</strong> adaptés aux connexions mobiles, le <strong>paiement Mobile Money</strong> (MTN, Moov) en plus de la carte bancaire et PayPal, et un <strong>référencement local</strong> pensé pour Google au Bénin. Je parle votre langue, je connais votre marché, et je reste disponible et réactif · sans le décalage ni les coûts d'une agence étrangère.</p>

      <h2 id="methode">Ma méthode en 4 étapes</h2>
    </div>
    <div class="proc stg" style="margin-top:1.5rem">
      <div class="step"><div class="sn">1</div><h3>Cadrage</h3><p>On clarifie votre besoin, vos objectifs et le budget. Devis transparent.</p></div>
      <div class="step"><div class="sn">2</div><h3>Design</h3><p>Maquettes et architecture validées avant la moindre ligne de code.</p></div>
      <div class="step"><div class="sn">3</div><h3>Développement</h3><p>Code propre, testé, avec des points d'avancement réguliers.</p></div>
      <div class="step"><div class="sn">4</div><h3>Lancement &amp; suivi</h3><p>Mise en ligne, formation, maintenance et optimisation continue.</p></div>
    </div>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Travaillons ensemble.</h2>
    <p>Un projet, une idée à cadrer ou simplement une question ? Décrivez votre besoin, je reviens vite avec un devis gratuit et sans engagement.</p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
