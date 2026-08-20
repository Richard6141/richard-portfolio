# Phase 1 — Fondations techniques + SEO local : Plan d'implémentation

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Renforcer la pertinence locale (Bénin/Cotonou) de la page d'accueil : mots-clés métier dans le HTML réel, schema recentré sur le local, fallbacks SEO riches, et préparation à l'international.

**Architecture:** Modifications ciblées sur 3 fichiers existants (`hero.php`, `assets/js/app.js`, `portfolio/index.php`). Aucune migration SQL, aucun changement de structure. Le CLS des images est déjà géré par `aspect-ratio` en CSS → non traité ici. Vérification par `curl`, Rich Results Test et Lighthouse. Déploiement manuel Hostinger (les étapes « déployer » remplacent les commits git).

**Tech Stack:** PHP 8+, Vanilla JS, JSON-LD Schema.org, Apache.

**Référence spec :** `docs/superpowers/specs/2026-06-05-refonte-seo-portfolio-design.md` (§4.2, §4.3, §4.4).

---

## Fichiers impliqués

| Fichier | Action | Tâche |
|---------|--------|-------|
| `portfolio/sections/hero.php` | Modifier — 1er titre métier dans le HTML statique | 1 |
| `assets/js/app.js` | Modifier — typewriter démarre sur le texte existant (anti-flash) | 1 |
| `portfolio/index.php` | Modifier — fallbacks SEO locaux, recentrage géo schema, hreflang | 2, 3, 4 |

---

## Task 1 : Mettre le mot-clé métier dans le HTML réel (hero)

**Files:**
- Modify: `portfolio/sections/hero.php`
- Modify: `assets/js/app.js`

**Pourquoi :** Aujourd'hui, quand le typewriter est actif, le `<p id="typewriter-target">` est **vide dans le HTML** (rempli par JS). Le mot-clé métier (ex. « Développeur web freelance à Cotonou ») est donc absent du HTML statique que Google lit en priorité. On injecte le 1er titre comme contenu initial, et on adapte le JS pour démarrer dessus (zéro flash, zéro doublon).

- [ ] **Step 1 : Injecter le 1er titre dans le HTML (hero.php)**

Dans `portfolio/sections/hero.php`, remplacer :
```php
        <?php if (!empty($animatedTitles) && $appearance['typewriter_enabled']): ?>
            <p class="hero-title" id="typewriter-target" data-titles='<?= sanitize(json_encode($animatedTitles)) ?>'></p>
        <?php elseif ($profile['profession']): ?>
            <p class="hero-title"><?= sanitize($profile['profession']) ?></p>
        <?php endif; ?>
```
par :
```php
        <?php if (!empty($animatedTitles) && $appearance['typewriter_enabled']): ?>
            <p class="hero-title" id="typewriter-target" data-titles='<?= sanitize(json_encode($animatedTitles)) ?>'><?= sanitize($animatedTitles[0]) ?></p>
        <?php elseif ($profile['profession']): ?>
            <p class="hero-title"><?= sanitize($profile['profession']) ?></p>
        <?php endif; ?>
```

- [ ] **Step 2 : Adapter le typewriter pour démarrer sur le texte présent (app.js)**

Dans `assets/js/app.js`, dans `initTypewriter()`, remplacer :
```js
    let titleIdx = 0, charIdx = 0, isDeleting = false;
```
par :
```js
    let titleIdx = 0, charIdx = 0, isDeleting = false;

    // SEO : si le HTML contient déjà le 1er titre, démarrer en mode suppression
    // pour éviter tout flash/doublon visuel au chargement.
    if (el.textContent.trim() === titles[0]) {
        charIdx = titles[0].length;
        isDeleting = true;
    }
```

- [ ] **Step 3 : Déployer sur Hostinger**

Uploader `portfolio/sections/hero.php` et `assets/js/app.js`.

- [ ] **Step 4 : Vérifier que le mot-clé est dans le HTML statique**

```bash
curl -s https://richard.salanon.info/ | grep -io 'id="typewriter-target"[^>]*>[^<]*'
```
Attendu : la balise affiche un texte non vide après `>` (ex. `...>Développeur web freelance...`).

- [ ] **Step 5 : Vérifier visuellement**

Ouvrir https://richard.salanon.info/ dans le navigateur : l'animation typewriter doit fonctionner normalement, sans double-affichage ni saut au chargement.

---

## Task 2 : Fallbacks SEO riches en mots-clés locaux

**Files:**
- Modify: `portfolio/index.php`

**Pourquoi :** Si les champs SEO du dashboard ne sont pas remplis, le `<title>` retombe sur le nom seul et la description sur une bio éventuellement vide. On crée des fallbacks intégrant **métier + ville** (sans jamais écraser un SEO renseigné par Richard).

- [ ] **Step 1 : Remplacer le bloc de calcul des variables SEO**

Dans `portfolio/index.php`, repérer le bloc :
```php
$metaTitle = $seo['meta_title'] ?? $fullName;
$metaDesc  = $seo['meta_description'] ?? ($profile['bio_short'] ?? '');
$ogTitle   = $seo['og_title'] ?? $metaTitle;
$ogDesc    = $seo['og_description'] ?? $metaDesc;
$robots    = $seo['robots'] ?? 'index';
```
et le remplacer par :
```php
// Données locales pour enrichir les fallbacks SEO (mots-clés géo)
$seoProfession = $profile['profession'] ?? 'Développeur web freelance';
$seoCity       = $contactInfo['city'] ?? ($profile['city'] ?? 'Cotonou');
$rawCountry    = $contactInfo['country'] ?? ($profile['country'] ?? 'Bénin');
$seoCountry    = ($rawCountry === 'BJ') ? 'Bénin' : $rawCountry;

// Fallbacks riches (utilisés uniquement si le SEO du dashboard est vide)
$metaTitleFallback = trim("{$fullName} — {$seoProfession} à {$seoCity}");
$metaDescFallback  = ($profile['bio_short'] ?? '')
    ?: "{$seoProfession} basé à {$seoCity} ({$seoCountry}) : création de sites web, applications sur mesure, maintenance informatique et formation. Contactez {$fullName} pour vos projets numériques.";

$metaTitle = ($seo['meta_title'] ?? '') ?: $metaTitleFallback;
$metaDesc  = ($seo['meta_description'] ?? '') ?: $metaDescFallback;
$ogTitle   = ($seo['og_title'] ?? '') ?: $metaTitle;
$ogDesc    = ($seo['og_description'] ?? '') ?: $metaDesc;
$robots    = $seo['robots'] ?? 'index';
```

- [ ] **Step 2 : Déployer sur Hostinger**

Uploader `portfolio/index.php`.

- [ ] **Step 3 : Vérifier le title et la description**

```bash
curl -s https://richard.salanon.info/ | grep -io '<title>[^<]*</title>'
curl -s https://richard.salanon.info/ | grep -io '<meta name="description" content="[^"]*"'
```
Attendu : le `<title>` contient le nom + le métier + la ville (si SEO dashboard vide) ; la description contient ville + services. Si Richard a déjà rempli le SEO au dashboard, ses valeurs s'affichent (comportement voulu).

---

## Task 3 : Recentrer le ciblage géographique du schema (local d'abord)

**Files:**
- Modify: `portfolio/index.php`

**Pourquoi :** Le `ProfessionalService` déclare 14 pays + « Monde entier », et le `<head>` annonce `coverage=Worldwide`. Cela **dilue** la pertinence locale. On recentre sur le Bénin (villes + pays) et 2 voisins proches. L'international sera réintroduit en Phase 4. On ajoute aussi `hasMap` (lien Google Maps) pour la cohérence avec la fiche Google Business Profile.

- [ ] **Step 1 : Recentrer `areaServed`**

Dans `portfolio/index.php`, remplacer le bloc complet :
```php
    'areaServed' => [
        // Afrique
        ['@type' => 'Country', 'name' => 'Bénin',          'sameAs' => 'https://www.wikidata.org/wiki/Q962'],
        ['@type' => 'Country', 'name' => 'Togo',           'sameAs' => 'https://www.wikidata.org/wiki/Q945'],
        ['@type' => 'Country', 'name' => 'Côte d\'Ivoire', 'sameAs' => 'https://www.wikidata.org/wiki/Q1008'],
        ['@type' => 'Country', 'name' => 'Sénégal',        'sameAs' => 'https://www.wikidata.org/wiki/Q1041'],
        ['@type' => 'Country', 'name' => 'Niger',          'sameAs' => 'https://www.wikidata.org/wiki/Q1032'],
        ['@type' => 'Country', 'name' => 'Cameroun',       'sameAs' => 'https://www.wikidata.org/wiki/Q1009'],
        ['@type' => 'Country', 'name' => 'Mali',           'sameAs' => 'https://www.wikidata.org/wiki/Q912'],
        ['@type' => 'Country', 'name' => 'Burkina Faso',   'sameAs' => 'https://www.wikidata.org/wiki/Q965'],
        // Europe francophone
        ['@type' => 'Country', 'name' => 'France',         'sameAs' => 'https://www.wikidata.org/wiki/Q142'],
        ['@type' => 'Country', 'name' => 'Belgique',       'sameAs' => 'https://www.wikidata.org/wiki/Q31'],
        ['@type' => 'Country', 'name' => 'Suisse',         'sameAs' => 'https://www.wikidata.org/wiki/Q39'],
        ['@type' => 'Country', 'name' => 'Luxembourg',     'sameAs' => 'https://www.wikidata.org/wiki/Q32'],
        // Amérique francophone
        ['@type' => 'Country', 'name' => 'Canada',         'sameAs' => 'https://www.wikidata.org/wiki/Q16'],
        // Portée mondiale
        ['@type' => 'Place',   'name' => 'Monde entier'],
    ],
```
par :
```php
    'areaServed' => [
        // Local d'abord — l'international sera réintroduit en Phase 4
        ['@type' => 'City',    'name' => 'Cotonou'],
        ['@type' => 'City',    'name' => 'Abomey-Calavi'],
        ['@type' => 'City',    'name' => 'Porto-Novo'],
        ['@type' => 'Country', 'name' => 'Bénin',          'sameAs' => 'https://www.wikidata.org/wiki/Q962'],
        ['@type' => 'Country', 'name' => 'Togo',           'sameAs' => 'https://www.wikidata.org/wiki/Q945'],
        ['@type' => 'Country', 'name' => 'Côte d\'Ivoire', 'sameAs' => 'https://www.wikidata.org/wiki/Q1008'],
    ],
```

- [ ] **Step 2 : Ajouter `hasMap` au schema service**

Dans `portfolio/index.php`, repérer le bloc :
```php
if ($contactInfo['city']         ?? '') {
    $serviceSchema['address'] = [
        '@type'           => 'PostalAddress',
        'addressLocality' => $contactInfo['city']    ?? '',
        'addressCountry'  => $contactInfo['country'] ?? 'BJ',
    ];
}
```
et ajouter **juste après** :
```php
if ($contactInfo['maps_url'] ?? '') $serviceSchema['hasMap'] = $contactInfo['maps_url'];
```

- [ ] **Step 3 : Retirer les meta géo dilutifs**

Dans `portfolio/index.php`, remplacer le bloc :
```php
    <!-- Localisation physique (Bénin) + portée internationale déclarée dans JSON-LD -->
    <meta name="geo.region" content="BJ">
    <meta name="geo.placename" content="<?= sanitize($contactInfo['city'] ?? 'Cotonou, Bénin') ?>">
    <meta http-equiv="content-language" content="fr">
    <!-- Disponible à distance : France, Belgique, Suisse, Canada, monde entier -->
    <meta name="coverage" content="Worldwide">
    <meta name="target" content="all">
```
par :
```php
    <!-- Ciblage local Bénin (l'international sera ajouté en Phase 4) -->
    <meta name="geo.region" content="BJ">
    <meta name="geo.placename" content="<?= sanitize($contactInfo['city'] ?? 'Cotonou, Bénin') ?>">
    <meta http-equiv="content-language" content="fr">
```

- [ ] **Step 4 : Déployer sur Hostinger**

Uploader `portfolio/index.php`.

- [ ] **Step 5 : Vérifier le JSON-LD**

```bash
curl -s https://richard.salanon.info/ | grep -o "Monde entier"
```
Attendu : **aucune** sortie (la mention « Monde entier » a disparu).

```bash
curl -s https://richard.salanon.info/ | grep -o "coverage"
```
Attendu : **aucune** sortie.

- [ ] **Step 6 : Valider le schema dans le Rich Results Test**

Ouvrir https://search.google.com/test/rich-results → tester `https://richard.salanon.info/`.
Attendu : `Person` et `ProfessionalService` détectés, **0 erreur** (warnings tolérés).

---

## Task 4 : Préparer l'international (hreflang)

**Files:**
- Modify: `portfolio/index.php`

**Pourquoi :** Déclarer la langue de la page maintenant prépare proprement l'ajout de l'anglais en Phase 4, sans rien casser aujourd'hui.

- [ ] **Step 1 : Ajouter les balises hreflang après le canonical**

Dans `portfolio/index.php`, repérer :
```php
    <!-- Canonical -->
    <link rel="canonical" href="<?= sanitize($portfolioUrl) ?>">
```
et ajouter **juste après** :
```php

    <!-- hreflang (fr aujourd'hui ; en prévu en Phase 4) -->
    <link rel="alternate" hreflang="fr" href="<?= sanitize($portfolioUrl) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= sanitize($portfolioUrl) ?>">
```

- [ ] **Step 2 : Déployer sur Hostinger**

Uploader `portfolio/index.php`.

- [ ] **Step 3 : Vérifier**

```bash
curl -s https://richard.salanon.info/ | grep -io '<link rel="alternate" hreflang="[^"]*"'
```
Attendu : deux lignes — `hreflang="fr"` et `hreflang="x-default"`.

---

## Task 5 : Vérification globale de la Phase 1

**Files:** aucun (vérification).

- [ ] **Step 1 : Re-soumettre la home à IndexNow (contenu mis à jour)**

```bash
curl -s -o /dev/null -w "HTTP %{http_code}\n" "https://api.indexnow.org/indexnow?url=https://richard.salanon.info/&key=a7f3c9e21b6d4f08a5c2e9d7b4f16a83"
```
Attendu : `HTTP 200` ou `HTTP 202`.

- [ ] **Step 2 : Mesurer Core Web Vitals (baseline)**

Ouvrir https://pagespeed.web.dev/ → analyser `https://richard.salanon.info/` (onglet Mobile).
Noter les scores. Attendu/cible : Performance ≥ 90, LCP < 2,5 s, CLS < 0,1. Si un point est rouge, créer une tâche correctrice ciblée (ne pas optimiser à l'aveugle).

- [ ] **Step 3 : Re-demander l'indexation dans GSC**

GSC → Inspection de l'URL → `https://richard.salanon.info/` → **Demander une indexation** (pour que Google reprenne la version enrichie).

- [ ] **Step 4 : Critère de sortie de Phase 1**

- `<title>` + `<meta description>` riches en mots-clés locaux ✅
- Mot-clé métier présent dans le HTML statique du hero ✅
- Schema recentré local, 0 erreur au Rich Results Test ✅
- hreflang en place ✅
- PageSpeed mobile mesuré (et ≥ 90 ou plan de correction noté) ✅
→ Passer à la Phase 2 (architecture multi-pages).

---

## Notes
- Aucune de ces modifications n'écrase le SEO que Richard renseigne au dashboard : les fallbacks ne s'activent que sur champ vide.
- Conseil dashboard (non bloquant) : remplir `seo_config.meta_title` = « Richard Salanon — Développeur web freelance à Cotonou, Bénin » et `meta_description` (≤155 car.) pour garder un contrôle éditorial total.
- La réintroduction de France/Belgique/Suisse/Canada dans `areaServed` + le contenu EN se fera en **Phase 4** (international), une fois le local consolidé.
