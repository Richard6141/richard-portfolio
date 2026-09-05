<?php
// ============================================================
// formations.php · Hub du catalogue de formations : /formations/
//
// Cree le 05/09/2026. Neuf formations reelles, en trois familles, chacune
// adossee a une page detaillee du registre (data/sujets/formation-*).
// Parti pris face aux catalogues concurrents qui alignent des dizaines de
// cartes d'une ligne : moins de formations, plus de profondeur, et aucune
// statistique inventee. La seule grille tarifaire affichee est celle deja
// publiee sur les pages formation IA.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$url = $portfolioUrl . '/formations/';

// Le catalogue. Les slugs pointent vers les pages du registre : toute
// formation ajoutee ici doit avoir sa page, et inversement.
$familles = [
    [
        'nom'   => 'Intelligence artificielle',
        'texte' => 'Mettre l\'IA au travail, du poste de bureau au flux automatisé.',
        'items' => [
            ['slug' => 'formation-ia-entreprise', 'titre' => 'IA en entreprise', 'ligne' => 'Rédiger, synthétiser, structurer avec les assistants, sur vos propres documents.', 'duree' => 'Demi-journée à 2 jours', 'niveau' => 'Sans prérequis'],
            ['slug' => 'formation-vibecoding', 'titre' => 'Vibecoding', 'ligne' => 'Développer des applications avec Claude, Cursor ou Copilot, sans en faire du code jetable.', 'duree' => 'Demi-journée ou 2 jours', 'niveau' => 'Tous profils'],
            ['slug' => 'formation-automatisation', 'titre' => 'Automatisation n8n et Make', 'ligne' => 'Relier vos outils pour que les tâches répétitives s\'exécutent seules, et rester autonome.', 'duree' => 'Demi-journée ou 2 jours', 'niveau' => 'Sans code'],
        ],
    ],
    [
        'nom'   => 'Outils de gestion',
        'texte' => 'Faire adopter les outils qui tiennent l\'entreprise au quotidien.',
        'items' => [
            ['slug' => 'formation-odoo', 'titre' => 'Odoo pour vos équipes', 'ligne' => 'Chaque poste apprend son parcours réel sur votre instance : ventes, stock, facturation.', 'duree' => 'Demi-journée par poste', 'niveau' => 'Utilisateurs'],
            ['slug' => 'formation-dolibarr', 'titre' => 'Dolibarr pour vos équipes', 'ligne' => 'Le cycle complet de gestion d\'une PME, du devis au règlement, sans mauvaises habitudes.', 'duree' => '1 journée', 'niveau' => 'Utilisateurs'],
            ['slug' => 'formation-outils-numeriques', 'titre' => 'Outils numériques et bureautique', 'ligne' => 'Tableur juste, messagerie tenue, fichiers partagés, sécurité : le socle de tout le reste.', 'duree' => 'Demi-journée par module', 'niveau' => 'Débutants bienvenus'],
        ],
    ],
    [
        'nom'   => 'Web et visibilité',
        'texte' => 'Construire pour le web, vendre sur WhatsApp, exister sur Google.',
        'items' => [
            ['slug' => 'formation-developpement-web', 'titre' => 'Développement web', 'ligne' => 'HTML, CSS, JavaScript, PHP et MySQL par projets complets, avec l\'IA comme accélérateur.', 'duree' => 'Parcours sur plusieurs semaines', 'niveau' => 'Débutant à intermédiaire'],
            ['slug' => 'formation-whatsapp-business', 'titre' => 'WhatsApp Business', 'ligne' => 'Catalogue, réponses rapides, suivi des commandes : votre premier canal de vente, structuré.', 'duree' => 'Demi-journée ou 1 jour', 'niveau' => 'Commerces'],
            ['slug' => 'formation-seo-visibilite-google', 'titre' => 'Visibilité Google', 'ligne' => 'Fiche d\'établissement, collecte d\'avis et bases du référencement, gérées par votre équipe.', 'duree' => 'Demi-journée ou 1 jour', 'niveau' => 'Sans prérequis'],
        ],
    ],
];

$faq = [
    ['q' => 'Les formations se donnent-elles en entreprise ?', 'r' => 'Oui, c\'est le format principal : j\'interviens dans vos locaux, sur vos outils et vos documents, à Cotonou, Abomey-Calavi et dans les villes où je me déplace. Toutes les formations existent aussi en visioconférence.'],
    ['q' => 'Combien coûte une formation ?', 'r' => 'Les repères publiés : atelier découverte à partir de 150 000 FCFA, formation complète de deux jours à partir de 450 000 FCFA, session dirigeants à partir de 100 000 FCFA. Chaque devis est établi après un cadrage gratuit, poste par poste.'],
    ['q' => 'Sur quoi travaille-t-on pendant les sessions ?', 'r' => 'Sur vos documents, vos outils et vos cas réels, jamais sur des exercices de démonstration. C\'est le principe commun à tout le catalogue : repartir avec quelque chose qui fonctionne déjà chez vous.'],
    ['q' => 'Combien de participants par session ?', 'r' => 'Une dizaine au maximum, souvent moins : la pratique guidée sur poste, qui fait la valeur des sessions, devient impossible au-delà. Les groupes se composent par niveau réel, évalué au cadrage.'],
    ['q' => 'Délivrez-vous une attestation ?', 'r' => 'Oui, une attestation de formation, accompagnée des supports et des fiches construites pendant la session. Pour le développement web, les projets mis en ligne constituent le vrai livrable.'],
    ['q' => 'Comment choisir la bonne formation ?', 'r' => 'Par le cadrage gratuit : deux échanges pour comprendre votre situation et votre point de départ. Il m\'arrive de recommander une autre formation que celle demandée, ou une simple prestation quand la formation n\'est pas la bonne réponse.'],
];

$nbFormations = array_sum(array_map(static fn(array $f): int => count($f['items']), $familles));

$pageTitle     = seoTitle('Formations : IA, vibecoding, Odoo, web et numérique', $fullName);
$pageDesc      = seoDescription('Neuf formations professionnelles données par un praticien : IA en entreprise, vibecoding, automatisation n8n, Odoo, Dolibarr, développement web, WhatsApp Business, visibilité Google et outils numériques. Sur vos documents réels, au Bénin et à distance.');
$pageCanonical = $url;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

$itemList = [];
$pos = 0;
foreach ($familles as $f) {
    foreach ($f['items'] as $it) {
        $itemList[] = ['@type' => 'ListItem', 'position' => ++$pos, 'name' => $it['titre'], 'url' => $portfolioUrl . '/' . $it['slug']];
    }
}

$pageSchemas = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => $url . '#service',
        'name'        => 'Formations professionnelles au numérique',
        'serviceType' => 'Formation professionnelle : intelligence artificielle, outils de gestion, développement web',
        'description' => $pageDesc,
        'url'         => $url,
        'provider'    => ['@id' => $portfolioUrl . '/#person'],
        'areaServed'  => [['@type' => 'Country', 'name' => 'Bénin'], ['@type' => 'Place', 'name' => 'À distance']],
        'offers'      => ['@type' => 'Offer', 'priceCurrency' => 'XOF', 'description' => 'Devis gratuit après cadrage'],
    ],
    ['@context' => 'https://schema.org', '@type' => 'ItemList', 'name' => 'Catalogue des formations', 'itemListElement' => $itemList],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Formations', 'item' => $url],
        ],
    ],
    [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(static fn(array $qa): array => [
            '@type' => 'Question', 'name' => $qa['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa['r']],
        ], $faq),
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span>Formations</div>

  <section class="vil-hero"><div class="wrap vil-hero-grid">
    <div class="vil-hero-txt">
      <span class="eyebrow"><span class="pulse"></span><span class="mono">Formations professionnelles</span></span>
      <h1>Des formations données par quelqu'un qui <span class="hl">pratique</span>.</h1>
      <p class="lead">IA, vibecoding, Odoo, automatisation, web : chaque formation du catalogue correspond à un travail que je livre réellement à des clients. On y travaille sur vos documents et vos outils, jamais sur des exercices de démonstration.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn">Demander un cadrage gratuit</a>
        <a href="#catalogue" class="btn btn-ghost">Voir le catalogue</a>
      </div>
    </div>
    <aside class="vil-card">
      <div class="vc-row"><span class="vc-k">Catalogue</span><span class="vc-v"><?= (int) $nbFormations ?> formations, 3 familles</span></div>
      <div class="vc-row"><span class="vc-k">Lieu</span><span class="vc-v">En entreprise ou en visioconférence</span></div>
      <div class="vc-row"><span class="vc-k">Groupes</span><span class="vc-v">Une dizaine de participants au plus</span></div>
      <div class="vc-row"><span class="vc-k">Support</span><span class="vc-v">Vos documents et vos outils réels</span></div>
      <div class="vc-row"><span class="vc-k">Devis</span><span class="vc-v">Gratuit, après cadrage</span></div>
    </aside>
  </div></section>

  <?php $n = 0; foreach ($familles as $f): $n++; ?>
  <section class="sect<?= $n % 2 === 1 ? ' soft' : '' ?>" <?= $n === 1 ? 'id="catalogue"' : '' ?>><div class="wrap">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num"><?= sprintf('%02d', $n) ?></span> / Famille</span>
      <h2><?= sanitize($f['nom']) ?>.</h2>
      <p class="sect-sub"><?= sanitize($f['texte']) ?></p>
    </div>
    <div class="bento stg">
      <?php foreach ($f['items'] as $it): ?>
      <a class="svc" href="/<?= sanitize($it['slug']) ?>">
        <h3><?= sanitize($it['titre']) ?></h3>
        <p><?= sanitize($it['ligne']) ?></p>
        <p class="fmt-meta"><span><?= sanitize($it['duree']) ?></span><span><?= sanitize($it['niveau']) ?></span></p>
        <div class="arrow">Voir la formation</div>
      </a>
      <?php endforeach; ?>
    </div>
  </div></section>
  <?php endforeach; ?>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">04</span> / Méthode</span><h2>Ce qui est commun à toutes les sessions.</h2></div>
    <div class="proc stg">
      <div class="step"><div class="sn">01</div><h3>Cadrage gratuit</h3><p>Deux échanges pour comprendre votre situation, évaluer les niveaux et composer les groupes. C'est aussi là que je dis si la formation demandée est la bonne réponse.</p></div>
      <div class="step"><div class="sn">02</div><h3>Préparation sur vos documents</h3><p>Chaque session se prépare avec vos fichiers, vos outils et vos cas. C'est plus long à monter qu'un support générique, et c'est ce qui fait que les acquis servent dès le lendemain.</p></div>
      <div class="step"><div class="sn">03</div><h3>Pratique guidée</h3><p>Démonstrations courtes, pratique longue. Je passe sur chaque poste, et chaque session se termine par une tâche complète exécutée sans aide.</p></div>
      <div class="step"><div class="sn">04</div><h3>Livrables et suivi</h3><p>Attestation, supports, fiches réflexes construites en séance. Selon la formation, une session de retour traite les questions apparues à l'usage.</p></div>
    </div>
  </div></section>

  <section class="sect soft"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><span class="mono"><span class="tag-num">05</span> / Tarifs</span><h2>Des repères publics, un devis après cadrage.</h2></div>
    <div class="prose rv">
      <p class="lead">Les tarifs dépendent du format, du nombre de participants et de la préparation nécessaire sur vos documents. Les repères publiés : atelier découverte d'une demi-journée à partir de 150 000 FCFA, formation complète de deux jours à partir de 450 000 FCFA, accompagnement mensuel à partir de 350 000 FCFA par mois, session dirigeants de deux heures à partir de 100 000 FCFA.</p>
      <p>Le cadrage est gratuit et sans engagement. Le devis final est détaillé poste par poste, et les tarifs hors Afrique sont établis après cadrage. Aucun résultat n'est promis qu'une formation ne peut pas tenir : je forme, je ne vends pas de miracle.</p>
    </div>
  </div></section>

  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv"><h2>Questions fréquentes.</h2></div>
    <div class="faq rv">
      <?php foreach ($faq as $qa): ?>
      <details><summary><?= sanitize($qa['q']) ?></summary><p><?= sanitize($qa['r']) ?></p></details>
      <?php endforeach; ?>
    </div>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
    <h2>Une équipe à former ?</h2>
    <p>Décrivez votre situation, je reviens avec une proposition de format et un devis gratuit sous 24 heures.</p>
    <a href="/contact" class="btn">Demander mon cadrage gratuit</a>
  </div></div></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
