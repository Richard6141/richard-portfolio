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
    echo '<!DOCTYPE html><html><head><title>' . htmlspecialchars($name) . ', Bientot disponible</title><meta name="robots" content="noindex"><style>*{margin:0;box-sizing:border-box}body{display:flex;align-items:center;justify-content:center;min-height:100vh;font-family:system-ui;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);color:#fff;padding:2rem}div{text-align:center;max-width:500px}h1{font-size:2rem;margin-bottom:1rem}p{opacity:.85;line-height:1.6}</style></head><body><div><h1>' . htmlspecialchars($name) . '</h1><p>' . htmlspecialchars($msg) . '</p></div></body></html>';
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
// URL canonique fixe (03/10/2026) : HTTP_HOST faisait de www un doublon complet.
$portfolioUrl = SITE_URL;
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
$seoCity       = fait('ville'); // fiche de faits (03/10/2026), plus contact_info.city
$rawCountry    = $contactInfo['country'] ?? ($profile['country'] ?? 'Bénin');
$seoCountry    = ($rawCountry === 'BJ') ? 'Bénin' : $rawCountry;

// Fallbacks riches en mots-clés (utilisés uniquement si le SEO du dashboard est vide)
$metaTitleFallback = "Développeur Web, Mobile & Automatisation au {$seoCountry} | {$fullName}";
$metaDescFallback  = ($profile['bio_short'] ?? '')
    ?: "{$fullName}, développeur freelance à {$seoCity} ({$seoCountry}) : sites web, applications web & mobiles, automatisation et digitalisation pour entreprises. Devis gratuit.";

// URL canonique de l'accueil, AVEC barre finale (20/08/2026).
// Le sitemap declare "https://richardsalanon.com/" tandis que la canonical
// declarait "https://richardsalanon.com" : deux formes pour une meme page,
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

// Graphe d'entités (03/10/2026, spec 5.3) : construit depuis la fiche de faits,
// une seule balise JSON-LD. « Richard Technologies » disparaît (marque unique).
// La note agrégée calculée sur la table testimonials est retirée : types
// Review et AggregateRating interdits tant qu'aucune source vérifiable n'existe.
$schemasAccueil = array_merge(schema_noeuds_base(faits(), SITE_URL, true), [[
    '@type'       => 'WebPage',
    '@id'         => $homeUrl . '#webpage',
    'url'         => $homeUrl,
    'name'        => $metaTitle,
    'description' => $metaDesc,
    'isPartOf'    => ['@id' => SITE_URL . '/#website'],
    'about'       => ['@id' => SITE_URL . '/#person'],
]]);
if (($profile['template'] ?? 'starter') === 'horizon') {
    $schemasAccueil[] = schema_faq(require __DIR__ . '/templates/horizon-faq.php');
}
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
    <link rel="icon" type="image/svg+xml" href="<?= sanitize(imgV('/assets/img/favicon.svg')) ?>">

    <!-- Open Graph -->
    <?php
    // Visuel de partage 1200x630 de la nouvelle identité (vague 0B).
    $ogImage = SITE_URL . fait('photo_og');
    ?>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= sanitize($ogTitle) ?>">
    <meta property="og:description" content="<?= sanitize($ogDesc) ?>">
    <meta property="og:url" content="<?= sanitize($homeUrl) ?>">
    <?php if ($ogImage): ?>
    <meta property="og:image" content="<?= sanitize($ogImage) ?>">
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
    <meta name="geo.placename" content="<?= sanitize(fait('ville') . ', ' . fait('pays')) ?>">
    <meta http-equiv="content-language" content="fr">

    <?php if ($seo['google_site_verification'] ?? ''): ?>
    <!-- Google Search Console -->
    <meta name="google-site-verification" content="<?= sanitize($seo['google_site_verification']) ?>">
    <?php endif; ?>

    <?php /* Polices auto-hébergées (vague 0B, 03/10/2026) : Sora et Plus Jakarta Sans.
             Les gabarits inactifs (creative, developer) retombent sur les polices système. */ ?>
    <?php include __DIR__ . '/partials/polices.php'; ?>

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
    <?= schema_graphe_sur($schemasAccueil) ?>

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
</body>
</html>
