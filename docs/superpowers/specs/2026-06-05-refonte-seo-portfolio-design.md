# Refonte SEO + Multi-pages — Portfolio Richard Salanon

**Date :** 2026-06-05
**Auteur :** Richard Salanon (+ Claude)
**Statut :** Design global — en revue
**Objectif business :** Devenir #1 sur Google pour les **services numériques au Bénin** (local d'abord), puis à l'international.

---

## 1. Contexte & diagnostic

### 1.1 Ce qui existe
- **Stack :** CMS mono-utilisateur en PHP (PDO/MySQL), hébergé chez Hostinger, base `u416805586_richard`.
- **Front public :** `portfolio/index.php` → page unique avec sections (`hero`, `about`, `experiences`, `skills`, `services`, `projects`, `certifications`, `languages`, `blog`, `contact`) + système de templates (`starter`/`creative`/`developer`).
- **Dashboard :** complet, l'utilisateur édite tout son contenu (table par entité).
- **SEO déjà en place (bon niveau) :** JSON-LD (Person + ProfessionalService), Open Graph, Twitter Cards, canonical, `sitemap.php`, `robots.php` conditionnel, HTTPS forcé, headers sécurité, GZIP, cache, rendu serveur, `alt` descriptifs, skip-link.
- **Domaine actuel :** `richard.salanon.info` (sous-domaine ; domaine parent `salanon.info` âgé de ~2 ans, sous-domaine récent).

### 1.2 Le vrai problème (impartial)
Le SEO **technique on-page n'est PAS le problème**. Les freins réels sont :

1. **Non indexé.** `site:richard.salanon.info` ne renvoie rien. Aucun blocage technique (robots OK, meta `index,follow`, sitemap valide) → cause = **nouveauté du sous-domaine + absence de signaux de crawl** (zéro backlink, GSC récent).
2. **Zéro autorité externe** (aucun backlink). ~50 % du ranking.
3. **Une seule page indexable** (+1 article de blog) → impossible de ranker sur plusieurs requêtes « service ». Google classe des **pages**, pas des personnes.
4. **Mots-clés métier mal placés** : le seul `<h1>` = le nom ; la profession est injectée en JS (typewriter, `data-titles`) → faible en HTML statique.
5. **Ciblage géo dilué** : `areaServed` couvre 14 pays + « Monde entier » → aucune pertinence locale forte.
6. **Contenu mince** : 1 article, pas de pages de service dédiées.

### 1.3 Opportunité
Concurrence locale faible : « développeur web freelance Cotonou/Bénin » est dominé par des **plateformes** (codeur.com, AfricaShore, LinkedIn, emploibenin), **aucun site personnel dominant**. Le #1 local est **réaliste**.

---

## 2. Stratégie retenue

**Approche A — Faire évoluer le CMS existant vers le multi-pages** (validée).
On conserve le CMS PHP + dashboard et on ajoute une vraie architecture de pages, chacune avec son SEO et son schema. Le contenu reste piloté par le dashboard (le contenu est le levier #1, il doit rester éditable par Richard).

**Stratégie de ranking en cascade :** Local métier → International.
**Stratégie de domaine :** construire **maintenant** sur `richard.salanon.info` ; tout reste piloté par la constante `BASE_URL` pour permettre une **migration 301 indolore** vers un futur `richardsalanon.com`.

---

## 3. Architecture cible (multi-pages)

### 3.1 Carte des pages (routes)
| Route | Page | Type schema principal | Intention ciblée |
|-------|------|----------------------|------------------|
| `/` | Accueil (vitrine condensée + liens vers tout) | `Person` + `ProfessionalService` + `WebSite` (SearchAction) | Marque + accroche services |
| `/services/` | Index des services | `ItemList` | « services numériques Bénin » |
| `/services/{slug}` | Page par service (8 pages, voir §3.1bis) | `Service` + `FAQPage` + `BreadcrumbList` | Requêtes transactionnelles fortes |
| `/realisations/` | Portfolio / index projets | `ItemList` | « réalisations / projets » |
| `/realisations/{slug}` | Étude de cas par projet | `CreativeWork` + `BreadcrumbList` | Preuve sociale, longue traîne |
| `/a-propos/` | À propos détaillé (parcours, expériences, formations) | `AboutPage` + `Person` | Marque, E-E-A-T |
| `/blog/` | Index blog | `Blog` | Longue traîne, fraîcheur |
| `/blog/{slug}` | Article (existe déjà) | `Article` + `BreadcrumbList` | Longue traîne, autorité |
| `/contact/` | Contact + formulaire | `ContactPage` | Conversion |

> Le portfolio « une-page » actuel devient l'**accueil condensé** : sections résumées avec CTA renvoyant vers les pages dédiées (services, réalisations, à propos).

### 3.1bis Les 8 pages services & direction éditoriale

**Virage éditorial validé (godmode 2026-06-05) :** le site cesse d'être un portfolio-CV et devient un **site de services orienté résultats**. Les diplômes/parcours passent en preuve secondaire (page À propos condensée), pas en sujet central. Décision SEO clé : **H1 = mots-clés métier** (pas le nom ; le nom reste en sur-titre + `<title>` + schema `Person`).

Pages services (slugs) :
1. `/services/creation-site-web` — vitrine, entreprise, e-commerce
2. `/services/application-web` — sur-mesure, dashboard, SaaS, back-office
3. `/services/application-mobile` — Android & iOS
4. `/services/automatisation-ia` — n8n/Make, bots, chatbots, API *(différenciateur)*
5. `/services/formation` — programmation & outils numériques
6. `/services/accompagnement-projet` — étude/cadrage de projet informatique
7. `/services/audit-systeme` — audit informatique & système
8. `/services/digitalisation-entreprise` — transformation digitale PME

Blocs d'accueil à ajouter (inspirés des concurrents les mieux classés) : Services (grille) · Process « 4 étapes » · Réalisations/études de cas chiffrées · Pourquoi me choisir · Témoignages · **FAQ (FAQPage schema)** · Blog/ressources · À propos condensé · Contact.

> **Carte de mots-clés complète, `<title>`/meta par page, analyse concurrentielle :** voir `docs/superpowers/specs/2026-06-05-strategie-mots-cles-concurrence.md`.

### 3.2 Couche de routage
- Étendre `.htaccess` : ajouter des règles propres pour `/services/`, `/services/{slug}`, `/realisations/`, `/realisations/{slug}`, `/a-propos/`, `/contact/` (sur le modèle de la règle blog existante), avant le catch-all vers `portfolio/index.php`.
- Introduire un **routeur léger** `portfolio/router.php` (ou contrôleurs par page sous `portfolio/pages/`) qui :
  1. résout la route → type de page + paramètre ;
  2. charge les données nécessaires ;
  3. inclut le `<head>` SEO centralisé + le template de page.
- **Refactor clé :** extraire le `<head>` (meta, OG, canonical, JSON-LD) de `portfolio/index.php` vers un partial réutilisable `portfolio/partials/head.php` paramétré par un objet `$pageSeo` (title, description, canonical, og_image, robots, schemas[]). Aujourd'hui le `<head>` est monolithique dans `index.php` (≈100 lignes) — il doit devenir une unité réutilisable par toutes les pages.

### 3.3 SEO par page (modèle de données)
Aujourd'hui `seo_config` est **global** (une ligne). Pour le multi-pages :
- **Nouvelle table `page_seo`** : `id, user_id, route_key (ex: 'services/creation-site-web'), meta_title, meta_description, og_image, robots, updated_at`. Fallback en cascade : `page_seo` → valeurs dérivées de l'entité (service/projet) → `seo_config` global.
- **Étendre `services`** : ajouter `slug` (unique/user), `body_content` (LONGTEXT, contenu riche de la page), `faq` (JSON : Q/R → FAQPage schema), `meta_title`, `meta_description`, `og_image`.
- **Étendre `projects`** : ajouter `slug`, `body_content` (étude de cas), `meta_title`, `meta_description`, `client`, `year`, `tech` (JSON), `result_metrics` (JSON).
- **Étendre `blog_posts`** : ajouter `meta_title`, `meta_description`, `tags` (JSON), `reading_time` (calculé), `author` (= Person). (Colonnes existantes : title, slug, content, excerpt, cover/cover_image, status, published_at.)

> Toute migration SQL est **additive** (ajout de colonnes/tables, valeurs par défaut sûres) — pas de rupture du rendu existant.

### 3.4 Dashboard (édition)
- `dashboard/services.php` : ajouter les champs slug (auto depuis title, vérif via `api/check-slug.php` existant), `body_content` (éditeur riche), `faq`, SEO par service.
- `dashboard/projects.php` : ajouter slug + étude de cas + SEO + métriques.
- `dashboard/seo.php` : ajouter un onglet « SEO par page » (gestion `page_seo`).
- `dashboard/blog.php` : ajouter meta + tags + temps de lecture.
- Réutiliser les patterns existants (`crud-page-script.php`, APIs REST par entité).

---

## 4. SEO technique & local (transversal)

### 4.1 Indexation (Phase 0 — urgent)
- GSC : **Inspection d'URL → Demander l'indexation** pour `/` et chaque page clé ; **soumettre `sitemap.xml`**.
- Créer/optimiser **Bing Webmaster Tools** (+ IndexNow si possible).
- **Déclencheurs de crawl** : obtenir 5–10 backlinks réels rapidement (LinkedIn, GitHub, codeur.com, AfricaShore, annuaires Bénin, signatures e-mail).
- Maillage interne dès la home (liens vers toutes les pages) pour la découverte.
- Vérifier l'absence de confusion **apex/sous-domaine** (`robots.php` a un fallback host `salanon.info` ; s'assurer que tout pointe `richard.salanon.info`, canonical inclus).

### 4.2 Signaux locaux (Phase 1)
- **Recentrer `areaServed`** : Bénin (Cotonou, Abomey-Calavi, Porto-Novo) en priorité, + 2-3 pays max ; retirer « Monde entier ».
- Ajouter schema **`LocalBusiness`/`ProfessionalService`** cohérent avec la fiche **Google Business Profile** (NAP identique : Nom, Adresse, Téléphone).
- **NAP cohérent** partout (site, GBP, annuaires).
- `hreflang` préparé (fr par défaut) pour l'étape internationale.

### 4.3 On-page (Phase 1)
- **H1 par page** = mot-clé principal de la page (pas seulement le nom). Sur l'accueil : H1 incluant le métier (ex. « Richard Salanon — Développeur web freelance à Cotonou »), profession en **texte HTML réel** (le typewriter devient un effet décoratif sur un texte déjà présent, pas la source).
- Hiérarchie Hn propre, 1 seul H1/page.
- Balises title/description uniques par page (≤ 60 / ≤ 155 caractères), avec mots-clés + ville.
- `BreadcrumbList` + fil d'Ariane visible.
- Images : `alt` + dimensions + `loading`/`fetchpriority` (déjà partiellement fait), conversion **WebP** systématique via `api/thumb.php`.
- Liens internes contextuels entre services ↔ réalisations ↔ articles.

### 4.4 Performance & Core Web Vitals (Phase 1)
- Objectif : Lighthouse mobile ≥ 90, LCP < 2,5 s, CLS < 0,1, INP < 200 ms.
- Préchargement police/CSS déjà fait ; ajouter `width/height` partout, lazy-loading images sous la ligne de flottaison, minification CSS/JS, critical CSS si nécessaire.

### 4.5 Schema.org (récapitulatif)
`WebSite`+`SearchAction` (home), `Person`, `ProfessionalService`/`LocalBusiness`, `Service` (+offers), `FAQPage`, `Article`, `CreativeWork`, `BreadcrumbList`, `ItemList`. Validés via Rich Results Test.

---

## 5. Contenu & autorité (Phase 3 — le facteur décisif)

### 5.1 Carte de mots-clés (à finaliser en Phase 3)
- **Piliers (transactionnel local)** : « création site web Bénin/Cotonou », « développeur web freelance Cotonou », « application web sur mesure Bénin », « maintenance informatique entreprise Cotonou », « formation programmation Bénin », « automatisation / bot prospection ».
- **Longue traîne (blog)** : « combien coûte un site web au Bénin », « comment digitaliser son entreprise au Bénin », tutoriels PHP/Laravel/WordPress, etc.
- 1 page de service = 1 cluster ; articles de blog = soutien (maillage vers la page de service = topic cluster).

### 5.2 Production de contenu
- Rédiger les pages de service (≥ 600-1000 mots, orientées bénéfices + preuves + FAQ + CTA).
- **Calendrier éditorial blog** (1-2 articles/mois minimum) — la vélocité de contenu est le levier de maintien du #1.
- Études de cas par projet (problème → solution → résultats chiffrés).

### 5.3 Backlinks & citations (off-page)
- Profils + liens : LinkedIn, GitHub, codeur.com, AfricaShore, Malt, annuaires d'entreprises béninois, chambres/communautés tech locales.
- Avis clients sur **Google Business Profile** (impact local fort).
- Articles invités / partenariats locaux à terme.

---

## 6. International (Phase 4 — plus tard)
- `hreflang` fr/en, contenu EN des pages clés, élargissement maîtrisé de `areaServed`, ciblage requêtes remote. Déclenché une fois le local gagné.

---

## 7. Découpage en phases (jalons)

| Phase | Livrable | Critère de succès |
|-------|----------|-------------------|
| **0. Indexation d'urgence** | Demandes d'indexation, sitemap soumis, Bing, premiers backlinks, fix apex/sous-domaine | `site:richard.salanon.info` renvoie ≥ 1 résultat sous 7-14 j |
| **1. Fondations techniques + SEO local** | `<head>` refactoré en partial, H1/keywords corrigés, géo recentré, LocalBusiness schema, perf ≥ 90, prêt-migration | Lighthouse ≥ 90 ; rich results valides ; ranking sur « Richard Salanon » |
| **2. Architecture multi-pages** | Routeur, pages services/réalisations/à-propos/contact, SEO par page, migrations SQL additives, dashboard étendu | Toutes les pages indexables + dans le sitemap, gérables au dashboard |
| **3. Contenu + autorité** | Carte mots-clés, pages services rédigées, calendrier blog, FAQ, plan backlinks, avis GBP | Top 3 local sur ≥ 2 requêtes service |
| **4. International** | hreflang, contenu EN, élargissement géo | Premières impressions hors Bénin dans GSC |

Chaque phase aura **son propre plan d'implémentation** (writing-plans) et sera vérifiée avant de passer à la suivante.

---

## 8. Hypothèses (à confirmer en revue)
1. Métier/services : développeur full stack freelance ; services = création de sites/applications web, maintenance informatique, formation programmation, automatisation. Ville = Cotonou, Bénin.
2. On reste sur le CMS PHP mono-utilisateur Hostinger (pas de changement de stack).
3. Langue principale FR ; EN repoussé en Phase 4.
4. Migrations SQL **additives uniquement** ; aucun risque pour le contenu existant.
5. Le visuel sera modernisé au fil des phases (nouveau template multi-pages) mais en réutilisant le design system CSS existant — pas de refonte graphique « table rase » séparée.

## 9. Hors périmètre (YAGNI)
- Pas de multi-utilisateur / SaaS.
- Pas de changement de techno (pas d'Astro/Next).
- Pas de e-commerce.
- Pas de refonte graphique purement esthétique non liée au SEO/conversion.

## 10. Risques
- **Migration domaine future** : à faire avec 301 propres + mise à jour GSC (nouvelle propriété) — planifiée, pas improvisée.
- **Cannibalisation de mots-clés** entre pages services et blog : gérée par une carte de mots-clés claire (1 intention = 1 page canonique).
- **Vélocité de contenu** : le succès dépend de la régularité de publication par Richard — le calendrier éditorial est un livrable, pas une option.
