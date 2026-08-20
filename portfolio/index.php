<?php
// ============================================================
// Nom du fichier : portfolio/index.php
// Description    : Rendu du portfolio public (mono-utilisateur)
// Auth requise   : Non (page publique)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/icons.php';

$pdo = getPDO();

// Mono-utilisateur : charger le premier (et seul) utilisateur actif
$stmt = $pdo->query("SELECT id, slug, email FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
$user = $stmt->fetch();

if (!$user) {
    // Aucun compte : rediriger vers l'inscription
    header('Location: /auth/register.php');
    exit;
}

$userId = (int) $user['id'];
$slug = $user['slug'];

// Profil
$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch();

// Maintenance / prive
if (!$profile['is_published']) {
    $name = trim(($profile['first_name'] ?? '') . ' ' . ($profile['last_name'] ?? '')) ?: $slug;
    echo '<!DOCTYPE html><html><head><title>' . htmlspecialchars($name) . '</title><meta name="robots" content="noindex"></head><body style="display:flex;align-items:center;justify-content:center;height:100vh;font-family:system-ui;background:#f9fafb;color:#374151"><div style="text-align:center;max-width:400px;padding:2rem"><h1 style="font-size:1.5rem;margin-bottom:.5rem">' . htmlspecialchars($name) . '</h1><p style="color:#9ca3af">Ce portfolio n\'est pas encore disponible.</p></div></body></html>';
    exit;
}

if ($profile['is_maintenance']) {
    $name = trim(($profile['first_name'] ?? '') . ' ' . ($profile['last_name'] ?? '')) ?: $slug;
    $msg = $profile['maintenance_message'] ?: 'Portfolio en cours de construction. Revenez bientot !';
    echo '<!DOCTYPE html><html><head><title>' . htmlspecialchars($name) . ' — Bientot disponible</title><meta name="robots" content="noindex"><style>*{margin:0;box-sizing:border-box}body{display:flex;align-items:center;justify-content:center;min-height:100vh;font-family:system-ui;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);color:#fff;padding:2rem}div{text-align:center;max-width:500px}h1{font-size:2rem;margin-bottom:1rem}p{opacity:.85;line-height:1.6}</style></head><body><div><h1>' . htmlspecialchars($name) . '</h1><p>' . htmlspecialchars($msg) . '</p></div></body></html>';
    exit;
}

// Apparence
$stmt = $pdo->prepare("SELECT * FROM appearance_config WHERE user_id = ?");
$stmt->execute([$userId]);
$appearance = $stmt->fetch();
if (!$appearance) {
    $appearance = ['bg_color'=>'#ffffff','text_color'=>'#1f2937','header_bg'=>'#ffffff','footer_bg'=>'#111827','card_bg'=>'#ffffff','border_color'=>'#e5e7eb','font_size'=>'md','letter_spacing'=>'normal','section_spacing'=>'normal','content_width'=>'normal','header_style'=>'fixed','header_bg_style'=>'solid','header_show_logo'=>1,'header_show_name'=>1,'header_show_nav'=>1,'header_show_cta'=>1,'header_show_cv'=>1,'header_show_darkmode'=>0,'header_cta_text'=>'Me contacter','header_cta_url'=>'#contact','header_logo_position'=>'left','header_text_color'=>'auto','footer_bg_style'=>'dark','footer_show_name'=>1,'footer_show_title'=>1,'footer_show_bio'=>0,'footer_show_social'=>1,'footer_show_copyright'=>1,'footer_show_credit'=>1,'footer_show_nav'=>0,'footer_copyright_text'=>'','footer_layout'=>'centered','animations_enabled'=>1,'animation_speed'=>'normal','animation_style'=>'fade','typewriter_enabled'=>1,'counter_enabled'=>1];
}

// Hero
$stmt = $pdo->prepare("SELECT * FROM hero_sections WHERE user_id = ?");
$stmt->execute([$userId]);
$hero = $stmt->fetch();

// About
$stmt = $pdo->prepare("SELECT * FROM about_sections WHERE user_id = ?");
$stmt->execute([$userId]);
$about = $stmt->fetch();

// Sections config
$stmt = $pdo->prepare("SELECT * FROM sections_config WHERE user_id = ? AND is_visible = 1 ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$sections = $stmt->fetchAll();

// SEO
$stmt = $pdo->prepare("SELECT * FROM seo_config WHERE user_id = ?");
$stmt->execute([$userId]);
$seo = $stmt->fetch();

// Social links
$stmt = $pdo->prepare("SELECT * FROM social_links WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$socialLinks = $stmt->fetchAll();

// Contact info
$stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
$stmt->execute([$userId]);
$contactInfo = $stmt->fetch();

// Variables
$fullName = trim(($profile['first_name'] ?? '') . ' ' . ($profile['last_name'] ?? ''));
// URL dynamique selon le sous-domaine actif (richard.salanon.info, etc.)
$currentHost  = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$portfolioUrl = 'https://' . $currentHost;
$fontHeading = $profile['font_heading'] ?? 'Inter';
$fontBody = $profile['font_body'] ?? 'Inter';

// Border radius mapping
$borderRadius = match($profile['corner_style'] ?? 'medium') {
    'none'   => '0px',
    'small'  => '4px',
    'medium' => '8px',
    'large'  => '16px',
    'round'  => '9999px',
    default  => '8px',
};

$sectionSpacing = match($appearance['section_spacing'] ?? 'normal') {
    'compact' => '3rem',
    'normal'  => '5rem',
    'large'   => '8rem',
    default   => '5rem',
};

$contentMaxWidth = match($appearance['content_width'] ?? 'normal') {
    'narrow' => '768px',
    'normal' => '1024px',
    'wide'   => '1280px',
    'full'   => '100%',
    default  => '1024px',
};

$animSpeed = match($appearance['animation_speed'] ?? 'normal') {
    'slow'   => '1s',
    'normal' => '0.6s',
    'fast'   => '0.3s',
    default  => '0.6s',
};

// Données locales pour enrichir les fallbacks SEO (mots-clés géo)
$seoProfession = $profile['profession'] ?? 'Développeur web freelance';
$seoCity       = $contactInfo['city'] ?? ($profile['city'] ?? 'Cotonou');
$rawCountry    = $contactInfo['country'] ?? ($profile['country'] ?? 'Bénin');
$seoCountry    = ($rawCountry === 'BJ') ? 'Bénin' : $rawCountry;

// Fallbacks riches en mots-clés (utilisés uniquement si le SEO du dashboard est vide)
$metaTitleFallback = "Développeur Web, Mobile & Automatisation au {$seoCountry} | {$fullName}";
$metaDescFallback  = ($profile['bio_short'] ?? '')
    ?: "{$fullName}, développeur freelance à {$seoCity} ({$seoCountry}) : sites web, applications web & mobiles, automatisation et digitalisation pour entreprises. Devis gratuit.";

// URL canonique de l'accueil — AVEC barre finale (20/08/2026).
// Le sitemap declare "https://richard.salanon.info/" tandis que la canonical
// declarait "https://richard.salanon.info" : deux formes pour une meme page,
// que Google devait arbitrer seul. $portfolioUrl reste sans barre finale car
// il sert de prefixe a toutes les autres URL (/blog/x, /services/x).
$homeUrl = $portfolioUrl . '/';

$metaTitle = ($seo['meta_title'] ?? '') ?: $metaTitleFallback;
$metaDesc  = ($seo['meta_description'] ?? '') ?: $metaDescFallback;
$ogTitle   = ($seo['og_title'] ?? '') ?: $metaTitle;
$ogDesc    = ($seo['og_description'] ?? '') ?: $metaDesc;
$robots    = $seo['robots'] ?? 'index';

// Chemin avatar sécurisé (sans path traversal)
$safeAvatarPath = preg_replace('/\.\.[\\/]/', '', $profile['avatar_url'] ?? '');

// Identifiants stables du graphe d'entites (20/08/2026).
// Avant, "Richard SALANON" (Person) et "Richard Technologies" (publisher des
// articles, marque du logo) coexistaient sans aucun lien declare : rien ne
// permettait a Google ni a un moteur IA de savoir qu'il s'agit de la meme offre.
// Les @id ci-dessous relient Person <-> Organization <-> WebSite <-> Service.
$idPerson  = $portfolioUrl . '/#person';
$idOrg     = $portfolioUrl . '/#organization';
$idWebsite = $portfolioUrl . '/#website';
$orgName   = 'Richard Technologies';

// JSON-LD — Person schema
$jsonLd = [
    '@context' => 'https://schema.org',
    '@type'    => 'Person',
    '@id'      => $idPerson,
    'name'     => $fullName,
    'url'      => $portfolioUrl,
    'worksFor' => ['@id' => $idOrg],
];
if ($profile['profession']        ?? '') $jsonLd['jobTitle']    = $profile['profession'];
if ($profile['bio_short']         ?? '') $jsonLd['description'] = $profile['bio_short'];
if ($safeAvatarPath                    ) $jsonLd['image']       = $portfolioUrl . '/uploads/' . $safeAvatarPath;
if ($contactInfo['email_public']  ?? '') $jsonLd['email']       = $contactInfo['email_public'];
if ($contactInfo['phone']         ?? '') $jsonLd['telephone']   = $contactInfo['phone'];
if (($contactInfo['city'] ?? '') || ($contactInfo['country'] ?? '')) {
    $jsonLd['address'] = array_filter([
        '@type'           => 'PostalAddress',
        'addressLocality' => $contactInfo['city']    ?? '',
        'addressRegion'   => $contactInfo['city']    ?? '',
        'addressCountry'  => $contactInfo['country'] ?? 'BJ',
    ]);
}
$jsonLd['knowsAbout'] = ['Développement web', 'Référencement naturel (SEO)', 'Automatisation', 'Intelligence artificielle', 'Digitalisation d\'entreprise'];
// Profils officiels garantis (renforce l'entité pour Google et les moteurs IA), fusionnés avec les réseaux du dashboard
$profileSameAs = ['https://www.linkedin.com/in/richard-salanon', 'https://github.com/Richard6141'];
if (!empty($socialLinks)) {
    $profileSameAs = array_merge($profileSameAs, array_column($socialLinks, 'url'));
}
$jsonLd['sameAs'] = array_values(array_unique(array_filter($profileSameAs)));

// JSON-LD — ProfessionalService (Bénin, Afrique, Europe francophone, Canada, Monde)
$serviceSchema = [
    '@context'          => 'https://schema.org',
    '@type'             => 'ProfessionalService',
    'name'              => $fullName . ($profile['profession'] ? ', ' . $profile['profession'] : ''),
    'url'               => $portfolioUrl,
    'description'       => $metaDesc,
    'availableLanguage' => [
        ['@type' => 'Language', 'name' => 'French',  'alternateName' => 'fr'],
        ['@type' => 'Language', 'name' => 'English', 'alternateName' => 'en'],
    ],
    'areaServed' => [
        // Villes ajoutees le 20/08/2026 : clients reels dans tout le Benin.
        // Pas de sameAs Wikidata sur les villes — un identifiant errone serait
        // pire qu'absent. Le pays porte deja son identifiant verifie.
        ['@type' => 'City',    'name' => 'Cotonou'],
        ['@type' => 'City',    'name' => 'Abomey-Calavi'],
        ['@type' => 'City',    'name' => 'Porto-Novo'],
        ['@type' => 'City',    'name' => 'Parakou'],
        ['@type' => 'City',    'name' => 'Bohicon'],
        ['@type' => 'City',    'name' => 'Djougou'],
        ['@type' => 'City',    'name' => 'Ouidah'],
        ['@type' => 'Country', 'name' => 'Bénin',          'sameAs' => 'https://www.wikidata.org/wiki/Q962'],
        ['@type' => 'Country', 'name' => 'Togo',           'sameAs' => 'https://www.wikidata.org/wiki/Q945'],
        ['@type' => 'Country', 'name' => 'Côte d\'Ivoire', 'sameAs' => 'https://www.wikidata.org/wiki/Q1008'],
        // Couverture reelle confirmee le 20/08/2026. Les projets hors Benin
        // sont menes a distance, ce que les pages villes annoncent explicitement.
        // Pas de sameAs ici : ces identifiants Wikidata n'ont pas ete verifies,
        // et un identifiant faux relie l'entite au mauvais pays.
        ['@type' => 'Country', 'name' => 'Sénégal'],
        ['@type' => 'Country', 'name' => 'Gabon'],
        ['@type' => 'Country', 'name' => 'Congo'],
        ['@type' => 'Country', 'name' => 'Niger'],
        ['@type' => 'Country', 'name' => 'Burkina Faso'],
        ['@type' => 'Country', 'name' => 'Nigeria'],
        ['@type' => 'Country', 'name' => 'France'],
        ['@type' => 'Country', 'name' => 'Belgique'],
        ['@type' => 'Country', 'name' => 'Suisse'],
        ['@type' => 'Country', 'name' => 'Canada'],
    ],
    'provider'   => ['@type' => 'Person', 'name' => $fullName, 'url' => $portfolioUrl],
    'priceRange' => '$$',
];
if ($safeAvatarPath)                    $serviceSchema['image']     = $portfolioUrl . '/uploads/' . $safeAvatarPath;
if ($contactInfo['email_public'] ?? '') $serviceSchema['email']     = $contactInfo['email_public'];
if ($contactInfo['phone']        ?? '') $serviceSchema['telephone'] = $contactInfo['phone'];
if ($contactInfo['city']         ?? '') {
    $serviceSchema['address'] = [
        '@type'           => 'PostalAddress',
        'addressLocality' => $contactInfo['city']    ?? '',
        'addressCountry'  => $contactInfo['country'] ?? 'BJ',
    ];
}
if ($contactInfo['google_maps_url'] ?? '') $serviceSchema['hasMap'] = $contactInfo['google_maps_url'];
// Horaires — 7j/7 (20/08/2026).
// ATTENTION : les horaires qui s'affichent dans le Local Pack Google viennent de
// la fiche Google Business, PAS d'ici. Ce balisage sert la coherence de l'entite
// et les moteurs generatifs ; il doit dire la meme chose que la fiche Google.
$serviceSchema['openingHoursSpecification'] = [[
    '@type'     => 'OpeningHoursSpecification',
    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
    'opens'     => '07:00',
    'closes'    => '20:00',
]];
// Note agregee — calculee depuis les avis REELS de la table testimonials
// (20/08/2026). Ces avis sont deja affiches plus bas dans la page par le
// template : la regle Google "le balisage doit refleter un contenu visible"
// est donc respectee.
//
// A SAVOIR : Google n'affiche PAS d'etoiles pour un avis qu'une entreprise
// heberge sur son propre site ("self-serving review") quand le type est
// LocalBusiness ou Organization. Les etoiles du Local Pack viennent de la
// fiche Google Business, pas d'ici. Ce balisage sert la coherence de
// l'entite et les moteurs generatifs, qui eux le lisent et le citent.
try {
    $stmtRating = $pdo->prepare(
        "SELECT COUNT(*) AS n, AVG(rating) AS moyenne
           FROM testimonials
          WHERE user_id = ? AND rating IS NOT NULL AND rating BETWEEN 1 AND 5"
    );
    $stmtRating->execute([$userId]);
    $ratingRow = $stmtRating->fetch(PDO::FETCH_ASSOC) ?: [];
} catch (\Throwable $e) {
    $ratingRow = [];
}
$ratingCount = (int) ($ratingRow['n'] ?? 0);
// Seuil de 5 avis (20/08/2026). Au 20/08 la table n'en contient qu'UN :
// publier "5,0 sur 1 avis" est un signal faible, invariablement parfait, et
// typique de ce que les moteurs traitent comme auto-promotionnel. Le balisage
// n'apparait qu'a partir de 5 avis, ou une moyenne commence a vouloir dire
// quelque chose. Le seuil se leve tout seul des que les avis rentrent.
if ($ratingCount >= 5) {
    $serviceSchema['aggregateRating'] = [
        '@type'       => 'AggregateRating',
        'ratingValue' => (string) round((float) $ratingRow['moyenne'], 1),
        'reviewCount' => (string) $ratingCount,
        'bestRating'  => '5',
        'worstRating' => '1',
    ];
}

$serviceSchema['@id']                = $portfolioUrl . '/#service';
$serviceSchema['provider']           = ['@id' => $idPerson];
$serviceSchema['parentOrganization'] = ['@id' => $idOrg];

// JSON-LD — Organization : declare la marque "Richard Technologies" comme entite
// a part entiere et la rattache a la personne (founder <-> worksFor).
$orgSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'Organization',
    '@id'      => $idOrg,
    'name'     => $orgName,
    'url'      => $portfolioUrl,
    'founder'  => ['@id' => $idPerson],
    'employee' => ['@id' => $idPerson],
    'areaServed' => $serviceSchema['areaServed'],
    'knowsLanguage' => ['fr', 'en'],
];
$orgLogoPath = siteLogoUrl();
if ($orgLogoPath !== '') {
    $orgSchema['logo'] = ['@type' => 'ImageObject', 'url' => $portfolioUrl . $orgLogoPath];
}
if ($contactInfo['email_public'] ?? '') $orgSchema['email']     = $contactInfo['email_public'];
if ($contactInfo['phone']        ?? '') $orgSchema['telephone'] = $contactInfo['phone'];
if (!empty($jsonLd['address']))         $orgSchema['address']   = $jsonLd['address'];
if (!empty($jsonLd['sameAs']))          $orgSchema['sameAs']    = $jsonLd['sameAs'];

// JSON-LD — WebSite. Volontairement SANS SearchAction : la recherche du blog est
// un filtre JavaScript cote client, sans URL de resultats. Declarer une
// SearchAction sans point d'entree reel serait une fausse declaration.
$websiteSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'WebSite',
    '@id'        => $idWebsite,
    'url'        => $portfolioUrl,
    'name'       => $orgName,
    'inLanguage' => 'fr-BJ',
    'publisher'  => ['@id' => $idOrg],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= sanitize($metaTitle) ?></title>
    <meta name="description" content="<?= sanitize($metaDesc) ?>">
    <meta name="robots" content="<?= $robots === 'noindex' ? 'noindex, nofollow' : 'index, follow' ?>">
    <?php /*
      <meta name="keywords"> retiree le 20/08/2026.
      Ignoree par Google depuis 2009, elle n'apportait rien ici : la valeur stockee
      comptait ~50 mots-cles et etait tronquee en plein mot ("referencement web beni").
      Elle exposait surtout la strategie de mots-cles a la concurrence.
      La valeur reste en base (Dashboard > SEO) si besoin de la reactiver.
    */ ?>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.php">
    <link rel="shortcut icon" href="/favicon.php">

    <!-- Open Graph -->
    <?php
    $ogImage = '';
    if ($profile['og_image_url'] ?? '') {
        $ogImage = $portfolioUrl . '/uploads/' . $profile['og_image_url'];
    } elseif ($profile['avatar_url'] ?? '') {
        $ogImage = $portfolioUrl . '/uploads/' . $profile['avatar_url'];
    }
    ?>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= sanitize($ogTitle) ?>">
    <meta property="og:description" content="<?= sanitize($ogDesc) ?>">
    <meta property="og:url" content="<?= sanitize($homeUrl) ?>">
    <?php if ($ogImage): ?>
    <meta property="og:image" content="<?= sanitize($ogImage) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= sanitize($fullName) ?>">
    <?php endif; ?>

    <!-- Canonical -->
    <link rel="canonical" href="<?= sanitize($homeUrl) ?>">

    <!-- hreflang (fr aujourd'hui ; en prévu en Phase 4) -->
    <link rel="alternate" hreflang="fr" href="<?= sanitize($homeUrl) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= sanitize($homeUrl) ?>">

    <!-- Open Graph étendu -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="<?= sanitize($fullName) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="<?= sanitize($seo['twitter_card'] ?? 'summary_large_image') ?>">
    <meta name="twitter:title" content="<?= sanitize($ogTitle) ?>">
    <meta name="twitter:description" content="<?= sanitize($ogDesc) ?>">
    <?php if ($ogImage): ?>
    <meta name="twitter:image" content="<?= sanitize($ogImage) ?>">
    <?php endif; ?>

    <!-- Ciblage local Bénin (l'international sera ajouté en Phase 4) -->
    <meta name="geo.region" content="BJ">
    <meta name="geo.placename" content="<?= sanitize($contactInfo['city'] ?? 'Cotonou, Bénin') ?>">
    <meta http-equiv="content-language" content="fr">

    <?php if ($seo['google_site_verification'] ?? ''): ?>
    <!-- Google Search Console -->
    <meta name="google-site-verification" content="<?= sanitize($seo['google_site_verification']) ?>">
    <?php endif; ?>

    <!-- Google Fonts — 3 poids max, chargement non-bloquant -->
    <?php
    if (($profile['template'] ?? 'starter') === 'horizon') {
        // Le template horizon est rendu par portfolio-v2.css, qui n'utilise que
        // Roboto (--body) et Roboto Mono (--mono). La police "body" du theme
        // (Poppins) n'y apparait pas une seule fois : on ne la telecharge plus.
        // Fraunces et Lora ne servent qu'aux pages editoriales (.art-*) : pas ici.
        // Graisses identiques a l'ancien @import de portfolio-v2.css.
        $fontUrl = 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Roboto+Mono:wght@500&display=swap';
    } else {
        $fonts = array_unique([$fontHeading, $fontBody]);
        $fontQuery = implode('&family=', array_map(fn($f) => urlencode($f) . ':wght@400;600;700', $fonts));
        $fontUrl = 'https://fonts.googleapis.com/css2?family=' . $fontQuery . '&display=swap';
    }
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="<?= $fontUrl ?>">
    <link href="<?= $fontUrl ?>" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="<?= $fontUrl ?>" rel="stylesheet"></noscript>

    <!-- CSS -->
    <?php if (($profile['template'] ?? 'starter') === 'horizon'): $pv2cssV = @filemtime(__DIR__ . '/../assets/css/portfolio-v2.css') ?: '1'; ?>
    <link rel="preload" as="style" href="/assets/css/portfolio-v2.css?v=<?= $pv2cssV ?>">
    <link rel="stylesheet" href="/assets/css/portfolio-v2.css?v=<?= $pv2cssV ?>">
    <?php else: ?>
    <link rel="preload" as="style" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php endif; ?>

    <style>
        :root {
            --color-primary: <?= validateColor($profile['color_primary'] ?? null, '#2563eb') ?>;
            --color-secondary: <?= validateColor($profile['color_secondary'] ?? null, '#1e40af') ?>;
            --color-accent: <?= validateColor($profile['color_accent'] ?? null, '#f59e0b') ?>;
            --color-bg: <?= validateColor($appearance['bg_color'] ?? null, '#ffffff') ?>;
            --color-text: <?= validateColor($appearance['text_color'] ?? null, '#1f2937') ?>;
            --color-header-bg: <?= validateColor($appearance['header_bg'] ?? null, '#ffffff') ?>;
            --color-footer-bg: <?= validateColor($appearance['footer_bg'] ?? null, '#111827') ?>;
            --color-card-bg: <?= validateColor($appearance['card_bg'] ?? null, '#ffffff') ?>;
            --color-border: <?= validateColor($appearance['border_color'] ?? null, '#e5e7eb') ?>;
            --font-heading: '<?= sanitize($fontHeading) ?>', system-ui, sans-serif;
            --font-body: '<?= sanitize($fontBody) ?>', system-ui, sans-serif;
            --border-radius: <?= $borderRadius ?>;
            --section-spacing: <?= $sectionSpacing ?>;
            --content-max-width: <?= $contentMaxWidth ?>;
            --anim-speed: <?= $animSpeed ?>;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($orgSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($websiteSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($serviceSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>

    <?php include __DIR__ . '/partials/tracking.php'; ?>
</head>
<body class="portfolio-body<?= (($profile['template'] ?? 'starter') === 'horizon') ? ' pv2' : '' ?>" data-animations="<?= $appearance['animations_enabled'] ? '1' : '0' ?>" data-anim-style="<?= sanitize($appearance['animation_style'] ?? 'fade') ?>">

<a href="#main-content" class="skip-link">Aller au contenu principal</a>

<?php
// --- TEMPLATE SYSTEM ---
$template = $profile['template'] ?? 'starter';
$templateFile = __DIR__ . '/templates/' . $template . '.php';

if ($template !== 'starter' && file_exists($templateFile)) {
    // Template personnalise : rendu complet dans un seul fichier
    include $templateFile;
} else {
    // Template Starter (par defaut) : header + sections individuelles + footer
    try {
    if ($appearance['header_style'] !== 'hidden') {
        include __DIR__ . '/sections/header.php';
    }
    } catch (\Throwable $e) { echo '<!-- HEADER ERROR: ' . $e->getMessage() . ' -->'; }

    echo '<main id="main-content" tabindex="-1">';

    foreach ($sections as $section) {
        $sectionFile = __DIR__ . '/sections/' . $section['section'] . '.php';
        if (file_exists($sectionFile)) {
            $sectionTitle    = $section['title'] ?? '';
            $sectionSubtitle = $section['subtitle'] ?? '';
            $sectionSlug     = $section['section'];
            try {
                include $sectionFile;
            } catch (\Throwable $e) {
                echo '<!-- SECTION ' . $section['section'] . ' ERROR: ' . $e->getMessage() . ' line ' . $e->getLine() . ' -->';
            }
        }
    }

    echo '</main>';

    include __DIR__ . '/sections/footer.php';
}
?>

<?php if (($profile['template'] ?? 'starter') !== 'horizon'): ?>
<script defer src="/assets/js/app.js"></script>
<?php endif; ?>
<?php if ($seo['google_analytics_id'] ?? ''): ?>
<script>
window.addEventListener('load', function() {
    // Repousse en periode d'inactivite (20/08/2026) : gtag.js pese 162 Ko et
    // occupait 141 ms de thread principal juste apres 'load', en concurrence
    // avec le rendu. requestIdleCallback attend que le navigateur soit libre.
    var start = function() {
        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtag/js?id=<?= sanitize($seo['google_analytics_id']) ?>';
        document.head.appendChild(s);
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= sanitize($seo['google_analytics_id']) ?>');
    };
    if ('requestIdleCallback' in window) { requestIdleCallback(start, { timeout: 4000 }); }
    else { setTimeout(start, 2500); }
});
</script>
<?php endif; ?>
</body>
</html>
