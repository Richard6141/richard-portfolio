<?php
// ============================================================
// pv2-head.php · <head> SEO partagé des pages "pv2" autonomes.
// Variables attendues : $pageTitle, $pageDesc, $pageCanonical
// Optionnelles : $pageRobots ('index'|'noindex'), $pageSchemas (array de tableaux JSON-LD), $ogImage,
//                $pagePrecharge (images à précharger : chemin, ou [chemin, srcset, sizes, media])
// ============================================================
$pageRobots  = $pageRobots  ?? 'index';
$pageSchemas = $pageSchemas ?? [];
$ogType      = $ogType ?? 'website';

// og:image, repli ajoute le 20/08/2026. /blog/ et /services/ ne definissaient
// aucune image : leurs partages sur les reseaux sociaux s'affichaient sans visuel.
// Depuis la vague 0B : le visuel de partage 1200x630 de la nouvelle identité,
// plutôt que l'avatar du profil (qui pouvait manquer sans base).
if (empty($ogImage)) {
    $ogImage = SITE_URL . fait('photo_og');
}

$cssV = @filemtime(__DIR__ . '/../../assets/css/portfolio-v2.css') ?: '1';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= sanitize($pageTitle) ?></title>
<meta name="description" content="<?= sanitize($pageDesc) ?>">
<meta name="robots" content="<?= $pageRobots === 'noindex' ? 'noindex, follow' : 'index, follow' ?>">
<link rel="canonical" href="<?= sanitize($pageCanonical) ?>">
<link rel="alternate" hreflang="fr" href="<?= sanitize($pageCanonical) ?>">
<link rel="alternate" hreflang="x-default" href="<?= sanitize($pageCanonical) ?>">
<link rel="icon" type="image/svg+xml" href="<?= sanitize(imgV('/assets/img/favicon.svg')) ?>">

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

<?php include __DIR__ . '/polices.php'; ?>

<?php foreach ($pagePrecharge ?? [] as $img): $img = (array) $img; ?><link rel="preload" as="image" href="<?= sanitize($img[0]) ?>"<?php if (isset($img[1], $img[2])): ?> imagesrcset="<?= sanitize($img[1]) ?>" imagesizes="<?= sanitize($img[2]) ?>"<?php endif; ?><?php if (isset($img[3])): ?> media="<?= sanitize($img[3]) ?>"<?php endif; ?> fetchpriority="high">
<?php endforeach; ?>
<link rel="stylesheet" href="/assets/css/portfolio-v2.css?v=<?= $cssV ?>">

<?php /* Graphe JSON-LD unique (03/10/2026, spec 5.3) : Person, WebSite et
         ProfessionalService sur chaque page, plus les nœuds propres à la page. */ ?>
<?= schema_graphe_sur(array_merge(schema_noeuds_base(faits(), SITE_URL), $pageSchemas)) ?>

<?php include __DIR__ . '/tracking.php'; ?>
</head>
<body class="pv2">
<a href="#main-content" class="skip-link">Aller au contenu principal</a>
