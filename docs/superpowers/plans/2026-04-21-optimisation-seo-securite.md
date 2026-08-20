# Optimisation SEO, Sécurité & Accessibilité — Plan d'implémentation

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Corriger toutes les failles de sécurité, maximiser le référencement au Bénin et en Afrique, améliorer les performances et l'accessibilité du portfolio de Richard.

**Architecture:** Modifications progressives en 5 batches indépendants. Chaque batch produit un ensemble de fichiers modifiés que l'utilisateur déploie sur son serveur Hostinger avant de passer au batch suivant.

**Tech Stack:** PHP 8+, MySQL/PDO, Vanilla JS, CSS3, Apache .htaccess, JSON-LD Schema.org

---

## Fichiers impliqués

| Fichier | Action | Batch |
|---------|--------|-------|
| `.env` (nouveau) | Créer — credentials hors du code | 1 |
| `config/constants.php` | Modifier — lire depuis `.env` | 1 |
| `.htaccess` | Modifier — bloquer `.env` explicitement | 1 |
| `helpers/functions.php` | Modifier — ajouter `validateColor()` | 1 |
| `portfolio/index.php` | Modifier — validation couleurs CSS, preload fonts, JSON-LD enrichi | 1, 2, 3 |
| `portfolio/sections/header.php` | Modifier — alt text avatar, ARIA nav | 2, 5 |
| `assets/css/style.css` | Modifier — focus styles, skip link | 5 |

---

## BATCH 1 — Sécurité (URGENT)

### Task 1.1 : Créer le fichier `.env`

**Files:**
- Create: `.env`
- Modify: `.htaccess`

- [x] **Step 1 : Créer `.env` à la racine du projet**

```ini
DB_HOST=localhost
DB_NAME=u416805586_richard
DB_USER=u416805586_richard
DB_PASS=Q1z!4uJkB$
APP_SECRET=a12deacce88573ea2ba0236ef39204e41acdbbad2da9dfbc94603bf266c35980
SMTP_HOST=smtp.hostinger.com
SMTP_PORT=587
SMTP_USER=noreply@salanon.info
SMTP_PASS=
```

- [x] **Step 2 : Bloquer `.env` dans `.htaccess`**

Ajouter dans le bloc `<FilesMatch>` existant (ligne 50-52 de `.htaccess`), juste avant `Require all denied` :

```apache
<FilesMatch "(^\.env|^\.env\..*)$">
    Require all denied
</FilesMatch>
```

---

### Task 1.2 : Lire les credentials depuis `.env`

**Files:**
- Modify: `config/constants.php`

- [x] **Step 1 : Remplacer le contenu de `config/constants.php`**

```php
<?php
// ============================================================
// Nom du fichier : config/constants.php
// Description    : Constantes globales — lues depuis .env
// ============================================================

declare(strict_types=1);

// Charger .env (parse_ini_file — pas besoin de Composer)
$_envFile = __DIR__ . '/../.env';
if (file_exists($_envFile)) {
    $env = parse_ini_file($_envFile);
    foreach ($env as $k => $v) {
        if (!defined($k)) putenv("$k=$v");
    }
}

function env(string $key, string $default = ''): string {
    $val = getenv($key);
    return $val !== false ? $val : $default;
}

// --- Base de données ---
define('DB_HOST',    env('DB_HOST', 'localhost'));
define('DB_NAME',    env('DB_NAME', ''));
define('DB_USER',    env('DB_USER', ''));
define('DB_PASS',    env('DB_PASS', ''));
define('DB_CHARSET', 'utf8mb4');

// --- Application ---
define('APP_NAME',   'PortfolioSaaS');
define('APP_SECRET', env('APP_SECRET', ''));
define('BASE_DOMAIN', 'richard.salanon.info');
define('BASE_URL',    'https://richard.salanon.info');
define('APP_ENV',     'production');

// --- SMTP (PHPMailer) ---
define('SMTP_HOST',       env('SMTP_HOST', 'smtp.hostinger.com'));
define('SMTP_PORT',       (int) env('SMTP_PORT', '587'));
define('SMTP_USER',       env('SMTP_USER', ''));
define('SMTP_PASS',       env('SMTP_PASS', ''));
define('SMTP_FROM_NAME',  'PortfolioSaaS');
define('SMTP_FROM_EMAIL', env('SMTP_USER', ''));

// --- Uploads ---
define('UPLOAD_MAX_SIZE',  10485760);
define('UPLOAD_MAX_CV',    5242880);
define('UPLOAD_MAX_IMAGE', 2097152);
define('UPLOAD_DIR', __DIR__ . '/../uploads');

// --- Slugs réservés ---
define('RESERVED_SLUGS', [
    'www', 'mail', 'ftp', 'admin', 'api', 'dashboard',
    'static', 'cdn', 'assets', 'salanon', 'info',
    'cpanel', 'webmail', 'smtp', 'imap', 'pop',
    'auth', 'login', 'register', 'portfolio',
    'uploads', 'config', 'helpers', 'includes',
]);

// --- Sessions ---
define('SESSION_LIFETIME',     3600);
define('REMEMBER_ME_LIFETIME', 2592000);

// --- Rate limiting ---
define('MAX_LOGIN_ATTEMPTS',       5);
define('LOGIN_LOCKOUT_MINUTES',    15);
define('MAX_CONTACT_PER_IP_HOUR',  5);
```

---

### Task 1.3 : Valider les couleurs CSS injectées dans `:root`

**Files:**
- Modify: `helpers/functions.php` (ajouter `validateColor()`)
- Modify: `portfolio/index.php` (utiliser `validateColor()` dans le bloc `<style>`)

- [x] **Step 1 : Ajouter `validateColor()` dans `helpers/functions.php`**

Ajouter à la fin du fichier (avant `?>` s'il existe, sinon à la fin) :

```php
/**
 * Valide qu'une valeur est une couleur CSS sûre.
 * Accepte : #rgb, #rrggbb, var(--xxx), rgb(), rgba()
 */
function validateColor(?string $value, string $default): string
{
    if ($value === null || $value === '') return $default;
    $v = trim($value);
    if (preg_match('/^#[0-9a-fA-F]{3,8}$/', $v)) return $v;
    if (preg_match('/^var\(--[a-zA-Z0-9_-]+\)$/', $v)) return $v;
    if (preg_match('/^rgba?\(\s*\d{1,3}\s*,\s*\d{1,3}\s*,\s*\d{1,3}(\s*,\s*[\d.]+)?\s*\)$/', $v)) return $v;
    return $default;
}
```

- [x] **Step 2 : Utiliser `validateColor()` dans `portfolio/index.php`**

Remplacer le bloc `<style>:root { ... }` (lignes 201-219 de `portfolio/index.php`) par :

```php
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
```

---

### Task 1.4 : Valider `avatar_url` contre le path traversal

**Files:**
- Modify: `portfolio/sections/header.php` (ligne 82)
- Modify: `portfolio/index.php` (ligne 141 du JSON-LD)

- [x] **Step 1 : Sécuriser l'affichage de l'avatar dans `header.php`**

Remplacer la ligne 82 :
```php
                    <img src="/uploads/<?= sanitize($profile['avatar_url']) ?>" alt="">
```
par :
```php
                    <img src="/uploads/<?= sanitize(basename($profile['avatar_url'])) ?>"
                         alt="Photo de profil de <?= sanitize($fullName) ?>"
                         width="32" height="32">
```

- [x] **Step 2 : Sécuriser l'URL dans le JSON-LD (`portfolio/index.php` ligne 141)**

Remplacer :
```php
if ($profile['avatar_url']   ?? '') $jsonLd['image']       = $portfolioUrl . '/uploads/' . $profile['avatar_url'];
```
par :
```php
if ($profile['avatar_url'] ?? '') $jsonLd['image'] = $portfolioUrl . '/uploads/' . basename($profile['avatar_url']);
```

---

## BATCH 2 — SEO de base (images, fonts, alt texts)

### Task 2.1 : Corriger tous les `alt` et ajouter les dimensions d'images

**Files:**
- Modify: `portfolio/sections/header.php`

*(Déjà fait dans Task 1.4 Step 1)*

### Task 2.2 : Optimiser le chargement des Google Fonts

**Files:**
- Modify: `portfolio/index.php` (bloc fonts, lignes 189-196)

- [x] **Step 1 : Réduire les poids de font et ajouter preload**

Remplacer le bloc Google Fonts (lignes 189-196) par :

```php
    <!-- Google Fonts — optimisé : 3 poids max, preload de la font principale -->
    <?php
    $fonts = array_unique([$fontHeading, $fontBody]);
    // Seulement 3 poids (pas 6) pour réduire le poids de chargement
    $fontQuery = implode('&family=', array_map(
        fn($f) => urlencode($f) . ':wght@400;600;700',
        $fonts
    ));
    $preloadFont = urlencode($fontHeading);
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=<?= $fontQuery ?>&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=<?= $fontQuery ?>&display=swap"
          rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
    <link href="https://fonts.googleapis.com/css2?family=<?= $fontQuery ?>&display=swap" rel="stylesheet">
    </noscript>
```

---

## BATCH 3 — SEO Bénin / Afrique (JSON-LD enrichi)

### Task 3.1 : Enrichir le JSON-LD pour le référencement local au Bénin

**Files:**
- Modify: `portfolio/index.php` (bloc JSON-LD, lignes 132-154 et 226-227)

**Objectif :** Ajouter un second schema `ProfessionalService` avec la localisation Bénin/Afrique pour apparaître dans les résultats de recherche locaux Google.

- [x] **Step 1 : Enrichir le schema Person et ajouter ProfessionalService**

Remplacer le bloc JSON-LD complet (lignes 132-227) par :

```php
// JSON-LD Person schema (enrichi)
$jsonLd = [
    '@context' => 'https://schema.org',
    '@type'    => 'Person',
    'name'     => $fullName,
    'url'      => $portfolioUrl,
];
if ($profile['profession']   ?? '') $jsonLd['jobTitle']    = $profile['profession'];
if ($profile['bio_short']    ?? '') $jsonLd['description'] = $profile['bio_short'];
if ($profile['avatar_url']   ?? '') $jsonLd['image']       = $portfolioUrl . '/uploads/' . basename($profile['avatar_url']);
if ($contactInfo['email_public'] ?? '') $jsonLd['email']     = $contactInfo['email_public'];
if ($contactInfo['phone']        ?? '') $jsonLd['telephone'] = $contactInfo['phone'];
if (($contactInfo['city'] ?? '') || ($contactInfo['country'] ?? '')) {
    $jsonLd['address'] = array_filter([
        '@type'           => 'PostalAddress',
        'addressLocality' => $contactInfo['city']    ?? '',
        'addressRegion'   => $contactInfo['city']    ?? '',
        'addressCountry'  => $contactInfo['country'] ?? 'BJ',
    ]);
}
if (!empty($socialLinks)) {
    $jsonLd['sameAs'] = array_values(array_column($socialLinks, 'url'));
}

// JSON-LD ProfessionalService (pour SEO local Bénin/Afrique)
$serviceSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'ProfessionalService',
    'name'            => $fullName . ' — ' . ($profile['profession'] ?? 'Développeur Web'),
    'url'             => $portfolioUrl,
    'description'     => $metaDesc,
    'areaServed'      => [
        ['@type' => 'Country', 'name' => 'Bénin',        'sameAs' => 'https://www.wikidata.org/wiki/Q962'],
        ['@type' => 'Country', 'name' => 'Togo',         'sameAs' => 'https://www.wikidata.org/wiki/Q945'],
        ['@type' => 'Country', 'name' => 'Côte d\'Ivoire','sameAs'=> 'https://www.wikidata.org/wiki/Q1008'],
        ['@type' => 'Country', 'name' => 'Sénégal',      'sameAs' => 'https://www.wikidata.org/wiki/Q1041'],
        ['@type' => 'Country', 'name' => 'Afrique',      'sameAs' => 'https://www.wikidata.org/wiki/Q15'],
    ],
    'provider'        => ['@type' => 'Person', 'name' => $fullName, 'url' => $portfolioUrl],
    'priceRange'      => '$$',
];
if ($contactInfo['email_public'] ?? '') $serviceSchema['email']     = $contactInfo['email_public'];
if ($contactInfo['phone']        ?? '') $serviceSchema['telephone'] = $contactInfo['phone'];
if ($contactInfo['city'] ?? '') {
    $serviceSchema['address'] = [
        '@type'          => 'PostalAddress',
        'addressLocality'=> $contactInfo['city'] ?? '',
        'addressCountry' => $contactInfo['country'] ?? 'BJ',
    ];
}
```

Puis dans le `<head>`, remplacer la ligne du JSON-LD (ligne 226-227) par :

```php
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($serviceSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
```

---

### Task 3.2 : Améliorer les meta tags pour le référencement Bénin/Afrique

**Files:**
- Modify: `portfolio/index.php` (bloc `<head>`, après le canonical)

- [x] **Step 1 : Ajouter des meta tags géographiques**

Ajouter après la ligne `<link rel="canonical" ...>` (ligne 177) :

```php
    <!-- Geo targeting — Référencement local Bénin / Afrique de l'Ouest -->
    <meta name="geo.region" content="BJ">
    <meta name="geo.placename" content="<?= sanitize($contactInfo['city'] ?? 'Bénin') ?>">
    <?php if (($contactInfo['latitude'] ?? '') && ($contactInfo['longitude'] ?? '')): ?>
    <meta name="geo.position" content="<?= sanitize($contactInfo['latitude']) ?>;<?= sanitize($contactInfo['longitude']) ?>">
    <meta name="ICBM" content="<?= sanitize($contactInfo['latitude']) ?>, <?= sanitize($contactInfo['longitude']) ?>">
    <?php endif; ?>

    <!-- Langue et région -->
    <meta http-equiv="content-language" content="fr-BJ">

    <!-- og:locale pour le Bénin francophone -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="<?= sanitize($fullName) ?>">
```

---

## BATCH 4 — Performance (images, lazy loading)

### Task 4.1 : Ajouter `width`/`height` sur les images héro pour éviter le CLS

**Files:**
- Modify: `portfolio/sections/hero.php` (si existe)

- [x] **Step 1 : Trouver et corriger l'image avatar du héro**

Dans le fichier `portfolio/sections/hero.php`, trouver la balise `<img>` de l'avatar héro et ajouter `width="120" height="120"` :

```php
<img src="/uploads/<?= sanitize(basename($hero['avatar_url'] ?? $profile['avatar_url'] ?? '')) ?>"
     alt="Photo de <?= sanitize($fullName) ?>"
     class="hero-avatar <?= sanitize($hero['avatar_shape'] ?? 'circle') ?>"
     width="120" height="120"
     loading="eager">
```

Note : l'avatar héro doit être `loading="eager"` (pas lazy) car il est visible dès le chargement.

---

## BATCH 5 — Accessibilité (WCAG 2.1)

### Task 5.1 : Skip link + Landmark `<main>`

**Files:**
- Modify: `assets/css/style.css` (ajouter styles skip link + focus)
- Modify: `portfolio/index.php` (ajouter skip link avant le header, `<main>` autour des sections)

- [x] **Step 1 : Ajouter les styles dans `style.css`**

Ajouter au début de `assets/css/style.css`, après le Reset (après la ligne 8) :

```css
/* --- Skip link (accessibilité clavier) --- */
.skip-link {
    position: absolute;
    top: -100%;
    left: 1rem;
    z-index: 9999;
    padding: 0.75rem 1.25rem;
    background: var(--color-primary);
    color: #fff;
    border-radius: 0 0 8px 8px;
    font-weight: 600;
    font-size: 0.875rem;
    text-decoration: none;
    transition: top 0.2s;
}
.skip-link:focus { top: 0; }

/* --- Focus visible (navigation clavier) --- */
:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 3px;
    border-radius: 4px;
}
a:focus-visible,
button:focus-visible { outline: 2px solid var(--color-primary); outline-offset: 3px; }
```

- [x] **Step 2 : Ajouter le skip link dans `portfolio/index.php`**

Juste après `<body ...>` (ligne 229), ajouter :

```php
<a href="#main-content" class="skip-link">Aller au contenu principal</a>
```

- [x] **Step 3 : Entourer les sections d'un `<main>`**

Dans `portfolio/index.php`, encadrer le foreach des sections :

```php
<main id="main-content" tabindex="-1">
<?php foreach ($sections as $section): ?>
    ... (code existant)
<?php endforeach; ?>
</main>
```

---

### Task 5.2 : ARIA sur le header

**Files:**
- Modify: `portfolio/sections/header.php`

- [x] **Step 1 : Ajouter `role="navigation"` et `aria-label` sur la nav**

Changer la ligne 91 :
```php
            <ul class="ph-ul">
```
par :
```php
            <nav aria-label="Navigation principale">
            <ul class="ph-ul">
```
Et fermer le `</nav>` après `</ul>` (ligne 104).

- [x] **Step 2 : Ajouter `role="navigation"` sur le drawer mobile**

Changer la ligne 136 :
```php
    <nav class="ph-dw-nav">
```
reste correct — ajouter `aria-label="Navigation mobile"` :
```php
    <nav class="ph-dw-nav" aria-label="Navigation mobile">
```

- [x] **Step 3 : Ajouter `role="dialog"` sur la modale projet**

Dans `assets/js/app.js`, dans la fonction `openProjectModal`, modifier la div overlay :
```js
    container.innerHTML = `
        <div class="project-modal-overlay"
             role="dialog"
             aria-modal="true"
             aria-label="${escapeAttr(data.title)}"
             onclick="if(event.target===this)closeProjectModal()">
```

---

## Checklist de déploiement

Après chaque batch, déployer sur Hostinger dans l'ordre :

- [ ] **Batch 1** : `.env`, `config/constants.php`, `.htaccess`, `helpers/functions.php`, `portfolio/index.php`
- [ ] **Batch 2** : `portfolio/sections/header.php`, `portfolio/index.php` (fonts)
- [ ] **Batch 3** : `portfolio/index.php` (JSON-LD + geo meta)
- [ ] **Batch 4** : `portfolio/sections/hero.php`
- [ ] **Batch 5** : `assets/css/style.css`, `portfolio/index.php`, `portfolio/sections/header.php`, `assets/js/app.js`

---

## Notes SEO spécifiques Bénin / Afrique

Pour maximiser le référencement au Bénin et en Afrique de l'Ouest :

1. **Dans le dashboard**, remplir le champ "Ville" avec "Cotonou" ou "Porto-Novo" et "Pays" avec "BJ"
2. **Meta description** : inclure des mots-clés comme "développeur web Bénin", "freelance Cotonou", "développeur web Afrique"
3. **Titre** : format idéal → "Richard Salanon — Développeur Web Freelance à Cotonou, Bénin"
4. **Google Search Console** : après déploiement, soumettre le sitemap `https://richard.salanon.info/sitemap.xml`
5. **Google My Business** : créer une fiche si possible (même pour freelance) avec catégorie "Développeur de logiciels"
6. **Backlinks locaux** : s'inscrire sur des annuaires béninois/africains (Jumia Services, BeninServices.com, etc.)
