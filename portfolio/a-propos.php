<?php
// ============================================================
// a-propos.php · Page À propos (URL /a-propos/)
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$aboutUrl = $portfolioUrl . '/a-propos/';
$bioLong  = trim((string)($profile['bio_long'] ?? ''));
$profession = $profile['profession'] ?? 'Développeur web full stack';

// Refonte du 28/10/2026 : Google avait lu la page sans l'indexer (« explorée, non
// indexée »). Elle se limitait à « développeur web » et doublait /richard-salanon.
// Elle porte maintenant le récit, la méthode et les chiffres déclarés ; le profil
// vérifiable (parcours, dépôts, Wapy, Audyxa) reste sur /richard-salanon.
$aboutFaq = [
    ['q' => 'Qui est Richard SALANON ?', 'r' => 'Consultant en digitalisation, développeur et formateur en IA, basé à ' . $h_city . ', au Bénin. Il crée des sites et des applications, automatise les tâches répétitives, intègre l\'IA dans les outils des entreprises et forme les équipes. Son parcours détaillé et vérifiable se lit sur la page « Qui est Richard SALANON ? ».'],
    ['q' => 'Dans quels pays travaille-t-il ?', 'r' => 'Depuis ' . $h_city . ', il a travaillé, sur place ou à distance, dans ' . count(fait('pays_travailles')) . ' pays dont le Bénin, la Côte d\'Ivoire, le Sénégal, le Togo, le Cameroun, la France, la Belgique, la Suisse et le Canada. Les échanges se font en français ou en anglais.'],
    ['q' => 'Le devis est-il gratuit ?', 'r' => 'Oui, le devis est gratuit et sans engagement. Décrivez votre besoin : la réponse arrive sous ' . fait('delai_reponse') . '.'],
    ['q' => 'Comment se déroule un projet ?', 'r' => 'En quatre étapes : cadrage du besoin et du budget, design validé avant le code, développement avec des points d\'avancement réguliers, puis mise en ligne, formation et suivi.'],
    ['q' => 'Quels moyens de paiement acceptez-vous ?', 'r' => 'Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.'],
    ['q' => 'Faites-vous aussi de la formation ?', 'r' => 'Oui. Richard forme des équipes à l\'IA en entreprise, à l\'automatisation (n8n, Make) et aux outils numériques, en présentiel ou à distance. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.'],
];

$pageTitle     = seoTitle('Consultant en digitalisation et formateur IA à Cotonou', $fullName);
$pageDesc      = seoDescription($fullName . ', consultant en digitalisation, développeur et formateur IA basé à ' . $h_city . ' (Bénin) : parcours, méthode, chiffres et façon de travailler.');
$pageCanonical = $aboutUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$pageSchemas = [
    [
        '@type' => 'AboutPage', '@id' => $aboutUrl . '#webpage',
        'url' => $aboutUrl, 'name' => $pageTitle,
        'mainEntity' => ['@id' => SITE_URL . '/#person'],
    ],
    schema_personne(faits(), SITE_URL, true),
    schema_faq($aboutFaq),
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
      <h1>Consultant en digitalisation, développeur et formateur IA à <?= sanitize($h_city) ?></h1>
      <p class="lead">Je suis <strong><?= sanitize($fullName) ?></strong>, consultant en digitalisation, développeur et formateur en IA, basé à <?= sanitize($h_city) ?>. J'accompagne les entreprises, PME et entrepreneurs du Bénin et d'ailleurs, à distance ou sur place : sites, applications, automatisations, IA et formation des équipes.</p>
      <div class="hero-cta">
        <a href="<?= sanitize($h_mailto) ?>" class="btn">Démarrer un projet</a>
        <a href="/services/" class="btn btn-ghost">Voir mes services</a>
      </div>
    </div>
    <?php if ($aboutPhoto): ?>
    <div class="about-photo">
      <img src="<?= sanitize($aboutPhoto) ?>" alt="<?= sanitize($fullName) ?>, <?= sanitize($profession) ?>">
      <?php if ($aboutMaps): ?><a class="about-gbadge" href="<?= sanitize($aboutMaps) ?>" target="_blank" rel="noopener"><span class="st">★★★★★</span> Avis Google</a><?php endif; ?>
    </div>
    <?php endif; ?>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="prose rv">
        <h2 id="qui-suis-je">Qui suis-je ?</h2>
        <p>Je suis <strong><?= sanitize($fullName) ?></strong>, développeur web et consultant en digitalisation d'entreprise, basé à <?= sanitize($h_city) ?>, au Bénin. Depuis plus de six ans, j'aide les entreprises, les PME et les entrepreneurs à passer au numérique : je crée leurs sites et applications, je les rends visibles sur Google, et j'automatise leurs tâches répétitives. En un mot, je les digitalise, de l'idée jusqu'aux résultats.</p>

        <h2 id="chiffres">Mon activité en quelques chiffres</h2>
        <p>Ces repères sont ceux que je déclare, et je les tiens à jour sur cette page.</p>
        <ul class="inc-list">
          <li>Plus de <?= (int) fait('experience_ans') ?> ans d'expérience dans le numérique.</li>
          <li><?= sanitize((string) fait('projets_livres')) ?> projets livrés, pour <?= sanitize((string) fait('clients')) ?> clients accompagnés.</li>
          <li><?= sanitize((string) fait('personnes_formees')) ?> personnes formées au numérique, à l'IA, à l'automatisation et aux ERP.</li>
          <li><?= count(fait('pays_travailles')) ?> pays où j'ai travaillé, sur place ou à distance.</li>
        </ul>

        <h2 id="parcours">Mon parcours</h2>
        <p>Formé au développement informatique à EPITECH Bénin, j'ai construit mon expertise sur des projets variés, du site vitrine à l'application métier sur mesure, en passant par l'automatisation et le référencement. J'ai notamment conçu des projets comme <strong>wapy.pro</strong> et <strong>alloartisan.app</strong>. Cette diversité m'a appris une chose essentielle : un projet numérique réussi n'est pas seulement une question de code, c'est une question de résultat concret pour l'entreprise.</p>

        <h2 id="aujourdhui">Ce que je fais aujourd'hui</h2>
        <ul class="inc-list">
          <li><a href="/services/consultant-digitalisation">Consultant en digitalisation</a> : fixer les priorités, choisir les outils et suivre la mise en place.</li>
          <li><a href="/services/site-vitrine-professionnel">Sites web</a> et <a href="/services/application-mobile-android-ios">applications mobiles</a> sur mesure.</li>
          <li><a href="/services/automatisation-ia">Automatisation et IA</a>, avec des <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbots WhatsApp</a>.</li>
          <li><a href="/services/referencement-naturel-seo">Référencement naturel</a> pour être trouvé sur Google.</li>
          <li><a href="/formations/ia-en-entreprise">Formation à l'IA en entreprise</a> et <a href="/services/consultant-ia">conseil en IA</a>, pour des équipes de PME, de banques et de microfinance, d'établissements scolaires.</li>
        </ul>
        <p>Je suis aussi le créateur de <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fondateur d'<a href="https://audyxa.com">Audyxa</a>. Mon parcours détaillé, ma formation et mes projets vérifiables se lisent sur la page <a href="/richard-salanon">Qui est Richard SALANON ?</a>.</p>

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
      <div class="step"><div class="sn">01</div><h3>Cadrage</h3><p>On clarifie votre besoin, vos objectifs et le budget. Devis transparent.</p></div>
      <div class="step"><div class="sn">02</div><h3>Design</h3><p>Maquettes et architecture validées avant la moindre ligne de code.</p></div>
      <div class="step"><div class="sn">03</div><h3>Développement</h3><p>Code propre, testé, avec des points d'avancement réguliers.</p></div>
      <div class="step"><div class="sn">04</div><h3>Lancement &amp; suivi</h3><p>Mise en ligne, formation, maintenance et optimisation continue.</p></div>
    </div>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <?= bloc_rendre(['type' => 'faq', 'etiquette' => 'Questions fréquentes', 'titre' => 'Vos questions sur mon travail', 'items' => $aboutFaq]) ?>
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
