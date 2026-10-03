# Vague 0B : système de design et gabarits

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Appliquer la nouvelle identité (encre, terracotta, sarcelle ; Sora et Plus Jakarta Sans) à toutes les pages, remplacer la coque (en-tête à méga-menus, pied, barre mobile), reconstruire l'accueil sur les dispositions d'Audyxa Formation et livrer la bibliothèque de blocs dont les vagues de contenu ont besoin.

**Architecture:** Re-skin par jetons : `assets/css/portfolio-v2.css` garde ses noms de variables (`--navy`, `--acc`, `--soft`...) mais reçoit les nouvelles valeurs, ce qui repeint les 13 gabarits existants sans toucher à leur balisage ; les classes de haut de page existantes (`svc-hero`, `vil-hero`, `about-hero`, `blog-hero`) reçoivent le style du hero de sous-page d'Audyxa. La coque (`pv2-header.php`, `pv2-footer.php`) est réécrite, alimentée par un registre de navigation. Les corps de page seront reconstruits avec la bibliothèque de blocs (`portfolio/partials/blocs/`) pendant les vagues de contenu, pas ici.

**Tech Stack:** PHP 8, CSS natif (variables, `:has()`, `@starting-style`, `animation-timeline` avec repli), JavaScript natif (un fichier), polices woff2 auto-hébergées, Node 22 seulement pour l'outil de carte (`tools/carte`, non déployé).

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (sections 2, 7.3, 7.4, 9, 10) ; relevés `docs/superpowers/specs/2026-10-03-refonte-references.md` (section A).

## Global Constraints

- Jetons exacts (spec 10.1) : encre `#14161F`, terracotta `#C2502F` (survol `#A8401F`), sarcelle `#0F6B6B` (survol `#0B5454`), ocre `#E0A43A`, sable `#F5EEE6`, fond `#FBF8F4`, ligne `#E8E1D8`, ligne forte `#D5CBBE`, texte doux `#343846`, discret `#626676`. Courbe unique `cubic-bezier(.22,1,.36,1)`.
- Contraste AA (4,5:1) pour tout texte normal : vérifié par test.
- Polices auto-hébergées, `font-display: swap`, préchargement des deux fichiers latins du premier écran ; plus aucun appel à fonts.googleapis.com sur les pages publiques.
- Aucune animation au-dessus de la ligne de flottaison ; le H1 n'est jamais animé ; tout est neutralisé sous `prefers-reduced-motion`.
- Rien n'est caché sans JavaScript (classe ajoutée par le script seulement).
- JavaScript du site : un seul fichier, moins de 15 Ko compressé.
- Pas de tiret cadratin ni de flèche dans les textes ; icônes SVG en ligne, aucun emoji.
- Marque unique « Richard SALANON » ; faits lus via `fait()` / `faits()`.
- Pied de page : moins de 60 liens, plus de liste de 143 villes.
- Les règles de la vague 0A restent vraies (un seul JSON-LD, `SITE_URL`, tests verts).

## Review Focus

1. Base de données indisponible ou absente en local : les pages servies depuis des fichiers (villes, sujets, formations, zones, à-propos, contact) s'affichent avec les faits de la fiche au lieu d'une erreur fatale (testé en Task 3).
2. Écran de 320 px de large : aucun débordement horizontal, H1 lisible, en-tête utilisable (vérifié en Task 9 par capture et par mesure `scrollWidth`).
3. Navigation au clavier : méga-menus ouvrables à Entrée, fermés à Échap, focus visible, tiroir mobile piégé (testé en Task 4 par structure et en Task 9 manuellement).
4. JavaScript désactivé : contenu, menus (liens directs) et FAQ restent accessibles (vérifié en Task 9).
5. Mouvement réduit : aucune animation, bandeau de logos en liste (vérifié en Task 9).

---

### Task 1: Ressources intégrées et fiche de faits complétée

**Files:**
- Assets produits par agents : `assets/fonts/*.woff2`, `assets/css/fonts.css`, `assets/img/richard-salanon-{400,800}.webp`, `assets/img/richard-salanon-og.jpg`, `assets/img/logo-rs.svg`, `assets/img/logo-rs-clair.svg`, `assets/img/favicon.svg`, `assets/img/carte-pays.svg`, `assets/img/clients/*`
- Modify: `portfolio/data/faits.php` (`photo`, `photo_og`, `ifu`, `statut`)
- Modify: `.htaccess` (favicon.ico vers le SVG statique)
- Modify: `helpers/functions.php` (`siteLogoUrl()` renvoie le nouveau logo)
- Test: `tools/tests/RessourcesTest.php`

**Contrat :** chaque fichier existe, se lit (XML valide pour les SVG, `getimagesize` pour les images), `fonts.css` ne référence que des fichiers présents, `fait('photo')` pointe un fichier existant, `/favicon.ico` répond 200 en `image/svg+xml` sans requête en base.

- [ ] Step 1 : écrire `RessourcesTest.php` (existence et lisibilité des fichiers ; `fait('photo')` existe sur disque ; `fait('ifu') === '0202348994221'` ; `http_local('/favicon.ico')` 200 et `svg` dans le type).
- [ ] Step 2 : lancer, constater l'échec.
- [ ] Step 3 : compléter la fiche (`'photo' => '/assets/img/richard-salanon-800.webp'`, `'photo_og' => '/assets/img/richard-salanon-og.jpg'`, `'ifu' => '0202348994221'`, `'statut' => 'Auto-entrepreneur'`), remplacer la règle `favicon.ico` par `RewriteRule ^favicon\.ico$ /assets/img/favicon.svg [L]`, faire renvoyer `/assets/img/logo-rs.svg` par `siteLogoUrl()`.
- [ ] Step 4 : tests verts ; commit « Ressources de la nouvelle identite : polices, portrait, logo provisoire, favicon statique ».

### Task 2: Palette et polices sur toutes les pages

**Files:**
- Modify: `assets/css/portfolio-v2.css` (bloc `:root`, couleurs codées en dur des bandes sombres, familles de polices)
- Modify: `portfolio/partials/pv2-head.php` et `portfolio/index.php` (polices : `fonts.css` + préchargements, suppression de Google Fonts ; `og:image` = `photo_og`)
- Test: `tools/tests/PaletteTest.php`

**Contrat :** le `:root` mappe les anciennes variables sur les nouveaux jetons (`--navy` = encre, `--acc` = terracotta, `--acc-2` = terracotta survol, `--soft` = sable, `--line` = ligne, `--muted` = discret, `--bg` = fond) et déclare les jetons de la spec (`--ink`, `--brand`, `--link`, `--accent`, `--surface`, `--glow`, `--ease`...). `--body` = « Plus Jakarta Sans », titres en « Sora ». Le test calcule les contrastes WCAG à partir des valeurs lues dans le CSS : encre/fond, texte doux/fond, discret/fond, sarcelle/fond, blanc/terracotta, blanc/encre, tous ≥ 4,5. Aucune page publique ne charge `fonts.googleapis.com` (test sur les sources des deux gabarits de tête).

- [ ] Step 1 : écrire `PaletteTest.php` (fonction `contraste(string $a, string $b): float` selon WCAG 2.x ; lecture des valeurs par expression régulière dans le `:root`).
- [ ] Step 2 : constater l'échec (anciennes valeurs, Roboto).
- [ ] Step 3 : réécrire le `:root`, remplacer `#aebbd8`, `#8595bd` et autres couleurs codées des bandes sombres par `var(--on-dark-soft)` ; titres `font-family: var(--titres)` ; têtes de page : `<link rel="preload" as="font" type="font/woff2" crossorigin>` pour les deux fichiers fournis par l'agent, puis `<link rel="stylesheet" href="/assets/css/fonts.css?v=...">`.
- [ ] Step 4 : tests verts ; capture locale d'une page ville (`/developpeur-web-cotonou`) à 390 et 1280 px pour contrôle visuel ; commit.

### Task 3: Amorçage tolérant à l'absence de base

**Files:**
- Modify: `portfolio/partials/pv2-bootstrap.php`
- Test: `tools/tests/AmorcageTest.php`

**Contrat :** si `getPDO()` échoue, `$pdo = null`, `$profile = []`, `$contactInfo` construit depuis la fiche (`email_public`, `phone`, `city`), `$socialLinks = []`, `$userId = 0`, `$fullName = fait('nom')`, et la page continue ; le code 404 « portfolio non publié » ne s'applique qu'avec une base joignable. Les pages qui ont besoin de la base (services, blog, réalisations) renvoient un 503 propre avec `Retry-After` plutôt qu'une erreur fatale.

- [ ] Step 1 : écrire `AmorcageTest.php` : `http_local('/developpeur-web-cotonou')`, `/formation-vibecoding`, `/a-propos/`, `/contact` répondent 200, contiennent un seul `<h1`, pas de « Fatal error » ; `/services/` répond 503 sans « Fatal error ».
- [ ] Step 2 : constater l'échec (erreur fatale PDO en local).
- [ ] Step 3 : envelopper les requêtes de l'amorçage dans `try`, ajouter le repli depuis la fiche ; dans `services-index.php`, `service.php`, `blog-index.php`, `article.php`, `realisations-index.php`, `realisation.php` : si `$pdo === null`, `http_response_code(503); header('Retry-After: 300');` puis la page 500 existante.
- [ ] Step 4 : tests verts ; commit.

### Task 4: En-tête à méga-menus et registre de navigation

**Files:**
- Create: `portfolio/data/navigation.php`
- Modify: `portfolio/partials/pv2-header.php` (réécriture)
- Test: `tools/tests/EnteteTest.php`

**Contrat du registre :** `['services' => [groupe => [[titre, url], ...]], 'formations' => [domaine => [[titre, url], ...]], 'pays' => ['Afrique francophone' => [[nom, villes, url]], 'Europe et Canada' => [...]], 'carte_cta' => [eyebrow, titre, texte, bouton, url]]`. Tant que les pages pays n'existent pas (vague 0C), les entrées pays pointent vers les pages villes existantes ou `/zones/`.

**Contrat de l'en-tête :** grille logo | navigation centrée | actions (WhatsApp, « Demander un devis ») ; trois déclencheurs `<button class="nav-trigger" aria-expanded="false" aria-controls="mega-...">` (Services, Formations, Pays) chacun suivi d'un panneau `<div class="mega" id="mega-..." hidden>` contenant des cartes (icône, titre, 3 liens) et une carte sombre d'appel ; liens simples Histoires et Ressources (Réalisations, Blog) et À propos ; bouton tiroir mobile `aria-controls="tiroir"` ; tiroir avec les mêmes liens en accordéons `<details>`. Sans JavaScript, chaque déclencheur reste précédé d'un lien vers le hub (`/services/`, `/formations/`, `/zones/`).

- [ ] Step 1 : écrire `EnteteTest.php` : rendre l'en-tête avec `$pdo = null` et les variables minimales ; vérifier 3 `aria-controls="mega-`, 3 panneaux `hidden`, un lien `href="/services/"`, `/formations/`, `/zones/`, le lien WhatsApp `wa.me/2290161413177`, le logo `logo-rs.svg`, aucun `Richard Technologies`.
- [ ] Step 2 : constater l'échec.
- [ ] Step 3 : écrire le registre et l'en-tête.
- [ ] Step 4 : tests verts ; commit.

### Task 5: Pied de page, barre mobile collante

**Files:**
- Modify: `portfolio/partials/pv2-footer.php` (réécriture)
- Test: `tools/tests/PiedTest.php`

**Contrat :** fond encre ; colonnes marque (logo clair, phrase d'entité courte, NAP depuis la fiche : Cotonou, Bénin, téléphone, e-mail, horaires), services (8 principaux), formations (6 domaines), ressources et zones (8 villes prioritaires + lien `/zones/`), titres de colonnes soulignés d'ocre ; barre basse © année + nom + liens légaux ; barre mobile collante (Devis, WhatsApp) masquée dès 768 px ; profils sociaux depuis `fait('profils')`. Moins de 60 liens.

- [ ] Step 1 : écrire `PiedTest.php` (rendu avec `$pdo = null` ; moins de 60 `<a ` ; contient `Cotonou`, `0202348994221` absent du pied (réservé aux mentions légales), Instagram présent, pas de `/a-propos/#expertise`, barre `class="barre-mobile"`).
- [ ] Step 2 : constater l'échec.
- [ ] Step 3 : écrire le pied.
- [ ] Step 4 : tests verts ; commit.

### Task 6: Composants CSS et script du site

**Files:**
- Modify: `assets/css/portfolio-v2.css` (nouvelles sections : boutons, pastilles, sections et tons, cartes à halo, hero de sous-page appliqué à `.svc-hero`, `.vil-hero`, `.about-hero`, `.blog-hero`, panneau de faits, FAQ `<details>`, tableaux, bande d'appel, en-tête et méga-menus, tiroir, barre mobile, apparitions, bandeau de logos, frise, matrice de formats, boîte auteur, carte des pays)
- Modify: `assets/js/portfolio-v2.js` (réécriture)
- Test: `tools/tests/ComposantsTest.php`

**Contrat JS :** en-tête solide après 10 px de défilement (classe `is-solid`) si `animation-timeline` n'est pas supportée ; méga-menus (survol avec intention 180 ms sur pointeur fin et ≥ 1024 px, clic, Échap qui rend le focus, un seul panneau ouvert, fermeture au clic extérieur) ; tiroir mobile (Échap, piège de focus, verrou du défilement) ; apparitions `[data-reveal]` par IntersectionObserver avec `--i` ; compteurs qui partent de leur valeur affichée sans flash ; sommaire collant (`aria-current`). `node --check` passe ; taille gzip < 15 Ko.

- [ ] Step 1 : écrire `ComposantsTest.php` (présence des sélecteurs clés dans le CSS ; `@media (prefers-reduced-motion: reduce)` présent ; `node --check assets/js/portfolio-v2.js` code 0 ; taille gzip du JS < 15 000 octets).
- [ ] Step 2 : constater l'échec.
- [ ] Step 3 : écrire les composants et le script (référence de comportement : relevés section A.2 et A.3).
- [ ] Step 4 : tests verts ; commit.

### Task 7: Bibliothèque de blocs

**Files:**
- Create: `helpers/blocs.php` (`bloc_rendre(array $bloc): string`, `blocs_rendre(array $blocs): string`)
- Create: `portfolio/partials/blocs/{prose,points,etapes,tableau,comparaison,chiffres,cas,prix,frise,vigilance,lecon,citation,checklist,faq,sources,cta}.php`
- Test: `tools/tests/BlocsTest.php`

**Contrat :** chaque type rend une `<section class="bloc bloc--{type}">` avec un `<h2>` quand un titre est fourni ; le texte est échappé sauf les balises autorisées (`strong`, `em`, `a`, `abbr`, `br`) ; `faq` rend des `<details>` ; `tableau` rend un `<table>` dans un conteneur défilant avec `<caption>` ; un type inconnu lève `InvalidArgumentException`.

- [ ] Step 1 : écrire `BlocsTest.php` (un test par type sur une donnée minimale ; test d'échappement d'un `<script>` ; test des balises autorisées).
- [ ] Step 2 : constater l'échec.
- [ ] Step 3 : écrire l'assistant et les 16 gabarits.
- [ ] Step 4 : tests verts ; commit.

### Task 8: Accueil reconstruit

**Files:**
- Modify: `portfolio/templates/horizon.php` (réécriture des sections)
- Modify: `portfolio/index.php` (préchargement du portrait, schéma inchangé)
- Test: `tools/tests/AccueilTest.php` (complété)

**Contrat (ordre des sections, relevés A.3) :** hero plein écran (pastille, H1 métier, chapeau, deux boutons, maquette animée « plan de projet » en CSS, portrait, bande de 3 chiffres lus dans la fiche : projets, clients, personnes formées) ; bandeau défilant des logos clients ; duo « qui je suis » (Richard, Wapy et Audyxa) ; services en cartes à halo (depuis la base, repli sur la navigation) ; pays (liste + carte SVG) ; formations mises en avant (colonne collante + lignes) ; méthode en 4 étapes (frise) ; matrice des formats ; réalisations ; FAQ (depuis `horizon-faq.php`) ; bande d'appel finale. Chaque compteur porte sa valeur finale dans le HTML. Aucune section ne dépasse la largeur à 320 px.

- [ ] Step 1 : compléter `AccueilTest.php` (ordre des identifiants de sections dans la source ; présence de `carte-pays.svg` en ligne ou en `<img>` ; chiffres lus via `fait(`).
- [ ] Step 2 : constater l'échec.
- [ ] Step 3 : écrire l'accueil.
- [ ] Step 4 : tests verts ; commit.

### Task 9: Vérification visuelle, accessibilité, performance

**Files:** aucun nouveau ; corrections au fil de l'eau dans les fichiers des tâches 2 à 8.

- [ ] Step 1 : captures dans le panneau navigateur à 320, 390, 768 et 1280 px des pages locales servies sans base (ville, sujet, formations, zones, à-propos, contact) ; mesure `document.documentElement.scrollWidth <= innerWidth` par `wmux browser eval`.
- [ ] Step 2 : clavier (Tab, Entrée, Échap) sur les méga-menus et le tiroir ; JavaScript coupé ; `prefers-reduced-motion` émulé.
- [ ] Step 3 : Lighthouse mobile local sur `/developpeur-web-cotonou` (cible : performance ≥ 85, accessibilité ≥ 95).
- [ ] Step 4 : `php tools/tests/run.php` vert ; commit des corrections.

### Task 10: Déploiement et contrôle en production

- [ ] Step 1 : revue indépendante de la branche (relecteur), corrections Critical et Important par TDD.
- [ ] Step 2 : fusion dans `main`, push, suivi du workflow.
- [ ] Step 3 : `php tools/qa/smoke.php https://richardsalanon.com` et `php tools/qa/crawl.php https://richardsalanon.com --pause=700 --liens` ; captures de l'accueil, d'une page service et d'un article en production (pages avec base) à 390 et 1280 px.
- [ ] Step 4 : mise à jour de la mémoire du projet.

## Note d'exécution

Les tâches 2, 4, 5, 6, 8 produisent surtout du CSS et du balisage : le plan fixe leurs contrats et leurs tests, le code est écrit à l'exécution en suivant les relevés (section A) et la spec (section 10), avec contrôle visuel en Task 9. Cette entorse au format « code complet dans le plan » est assumée : recopier ici ~2 000 lignes de CSS doublerait le travail sans réduire le risque, que les captures et les tests de contrat couvrent.
