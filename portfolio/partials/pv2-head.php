<?php
// ============================================================
// pv2-head.php · <head> SEO partagé des pages "pv2" autonomes.
// Variables attendues : $pageTitle, $pageDesc, $pageCanonical
// Optionnelles : $pageRobots ('index'|'noindex'), $pageSchemas (array de tableaux JSON-LD), $ogImage
// ============================================================
$pageRobots  = $pageRobots  ?? 'index';
$pageSchemas = $pageSchemas ?? [];
$ogType      = $ogType ?? 'website';

// og:image, repli ajoute le 20/08/2026. /blog/ et /services/ ne definissaient
// aucune image : leurs partages sur les reseaux sociaux s'affichaient sans visuel.
// On retombe sur l'avatar du profil, present sur toutes les pages pv2.
if (empty($ogImage) && !empty($profile['avatar_url']) && !empty($portfolioUrl)) {
    $ogImage = $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', (string) $profile['avatar_url']);
}

$cssV = @filemtime(__DIR__ . '/../../assets/css/portfolio-v2.css') ?: '1';

// Polices, declarees ici depuis le 20/08/2026 (l'@import de portfolio-v2.css a
// ete retire : il bloquait le rendu 560 ms). Graisses identiques a l'ancien
// import : aucun changement visuel.
// Fraunces et Lora ne servent qu'aux pages editoriales (.art-*, .blog-hero) :
// les pages services et a-propos ne les telechargent plus (~40 Ko economises).
// $pv2EditorialFonts est mis a true par article.php et blog-index.php.
$pv2Fonts = ['Roboto:wght@400;500;700;900', 'Roboto+Mono:wght@500'];
if (!empty($pv2EditorialFonts)) {
    $pv2Fonts[] = 'Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500';
    $pv2Fonts[] = 'Lora:ital,wght@0,400;0,500;0,600;1,400;1,500';
}
$pv2FontUrl = 'https://fonts.googleapis.com/css2?family=' . implode('&family=', $pv2Fonts) . '&display=swap';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= sanitize($pageTitle) ?></title>
<meta name="description" content="<?= sanitize($pageDesc) ?>">
<meta name="robots" content="<?= $pageRobots === 'noindex' ? 'noindex, nofollow' : 'index, follow' ?>">
<link rel="canonical" href="<?= sanitize($pageCanonical) ?>">
<link rel="alternate" hreflang="fr" href="<?= sanitize($pageCanonical) ?>">
<link rel="alternate" hreflang="x-default" href="<?= sanitize($pageCanonical) ?>">
<link rel="icon" type="image/svg+xml" href="/favicon.php">

<meta property="og:type" content="<?= sanitize($ogType) ?>">
<meta property="og:title" content="<?= sanitize($pageTitle) ?>">
<meta property="og:description" content="<?= sanitize($pageDesc) ?>">
<meta property="og:url" content="<?= sanitize($pageCanonical) ?>">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="<?= sanitize($fullName) ?>">
<?php if (!empty($ogImage)): ?><meta property="og:image" content="<?= sanitize($ogImage) ?>">
<meta property="og:image:alt" content="<?= sanitize($pageTitle) ?>"><?php endif; ?>
<?php if ($ogType === 'article'): ?>
<?php if (!empty($ogPublishedTime)): ?><meta property="article:published_time" content="<?= sanitize($ogPublishedTime) ?>"><?php endif; ?>
<?php if (!empty($ogModifiedTime)): ?><meta property="article:modified_time" content="<?= sanitize($ogModifiedTime) ?>"><?php endif; ?>
<?php if (!empty($ogSection)): ?><meta property="article:section" content="<?= sanitize($ogSection) ?>"><?php endif; ?>
<?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= sanitize($pageTitle) ?>">
<meta name="twitter:description" content="<?= sanitize($pageDesc) ?>">
<?php if (!empty($ogImage)): ?><meta name="twitter:image" content="<?= sanitize($ogImage) ?>"><?php endif; ?>

<meta name="geo.region" content="BJ">
<meta name="geo.placename" content="<?= sanitize($h_city) ?>">
<meta http-equiv="content-language" content="fr">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="<?= $pv2FontUrl ?>">
<link href="<?= $pv2FontUrl ?>" rel="stylesheet" media="print" onload="this.media='all'">
<noscript><link href="<?= $pv2FontUrl ?>" rel="stylesheet"></noscript>

<link rel="preload" as="style" href="/assets/css/portfolio-v2.css?v=<?= $cssV ?>">
<link rel="stylesheet" href="/assets/css/portfolio-v2.css?v=<?= $cssV ?>">

<?php /* Graphe JSON-LD unique (03/10/2026, spec 5.3) : Person, WebSite et
         ProfessionalService sur chaque page, plus les nœuds propres à la page. */ ?>
<?= schema_graphe(array_merge(schema_noeuds_base(faits(), SITE_URL), $pageSchemas)) ?>

<?php include __DIR__ . '/tracking.php'; ?>
</head>
<body class="pv2">
<a href="#main-content" class="skip-link">Aller au contenu principal</a>
