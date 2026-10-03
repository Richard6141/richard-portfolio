# Refonte 2026-10 : relevés de référence

Compagnon de `2026-10-03-refonte-globale-design.md`. Relevés faits le 03/10/2026 par des
agents d'analyse. Les valeurs de couleur d'Audyxa sont données pour mémoire : on applique nos
jetons (spec 10.1).

Accès au dépôt de référence (privé) sans changer le compte gh actif :

```bash
T=$(gh auth token --user Richard6141)
git clone --depth 1 "https://x-access-token:$T@github.com/Deal-Club/audyxaFormation.git"
git -C audyxaFormation remote set-url origin https://github.com/Deal-Club/audyxaFormation.git
```

## A. Audyxa Formation : dispositions et animations à reproduire

Fichiers source : `site/styles/tokens.css`, `site/styles/components.css` (3 500 lignes),
`site/styles/motion.css`, `site/components/vitrine/templates.css`, `page-hero.css`,
`glossaire.css`. Système « vitrine » préfixé `.vt`, déjà en CSS pur.

### A.1 Équivalences de jetons

| Audyxa | Valeur Audyxa | Nous |
|---|---|---|
| primary (titres, bandes sombres) | #1a1f3d | `--ink` #14161F |
| blue (action, liens, focus) | #3a50f6 | `--link` #0F6B6B (liens) |
| yellow (CTA principal, texte marine) | #fec93f | `--brand` #C2502F (texte blanc) |
| violet (eyebrows, numéros) | #5b3fd6 | `--link` |
| teal (décoratif) | #8b7dff | `--accent` #E0A43A |
| surface lilas | #f2f2fc | `--surface` #F5EEE6 |
| halo `0 0 32px 16px #e9e9ff` | | `--glow` |
| dégradé de texte des chiffres | blue vers teal | `--brand` vers `--accent` |
| bande finale `linear-gradient(120deg,#3a50f6,#5b3fd6)` | | `linear-gradient(120deg,#C2502F,#A8401F)` |

Rayons 6 / 10 / 14 / 18 / 50 px. Boutons de 10 px de rayon, pas en pilule, hauteur 44 px
(56 px en grand), `:active` translateY(1px). Courbe unique `cubic-bezier(.22,1,.36,1)`.
`html{scroll-behavior:smooth;scroll-padding-top:5.5rem}`. Anneau de focus 2 px plein, décalé de 3 px.

Formulaires : champs de 48 px, bordure 1,5 px, rayon 6 px, fond légèrement teinté ; focus =
bordure + anneau de 4 px à 18 % d'opacité ; légende précédée d'une barre 4×20 px en dégradé.

### A.2 Animations

1. **Apparition au défilement** :
   ```css
   .rr [data-reveal]{transition:opacity 900ms var(--ease),translate 900ms var(--ease);transition-delay:calc(var(--i,0)*90ms)}
   .rr [data-reveal]:not(.is-in){opacity:0;translate:0 28px;transition-delay:0ms}
   ```
   ```js
   if(!matchMedia('(prefers-reduced-motion: reduce)').matches&&'IntersectionObserver'in window){
    const io=new IntersectionObserver(es=>es.forEach(e=>e.target.classList.toggle('is-in',e.isIntersecting)),{rootMargin:'0px 0px -8% 0px'});
    document.querySelectorAll('[data-reveal]').forEach(el=>{if(el.getBoundingClientRect().top<innerHeight)el.classList.add('is-in');io.observe(el)});
    document.body.classList.add('rr');}
   ```
   Rejoue à chaque entrée. Décalage `i % 3`. Jamais au-dessus de la ligne de flottaison.
2. **Trait de la frise de méthode** : `::after` en pointillés, `transition: clip-path 1100ms ease 350ms`, caché par `clip-path: inset(0 0 100% 0)` (vertical, mobile) ou `inset(0 100% 0 0)` (horizontal dès 1024 px).
3. **En-tête fusionné au hero** : transparent, `margin-bottom: calc(-1 * var(--header-h))` ; `@supports (animation-timeline: scroll())` : animation `linear both`, `animation-timeline: scroll(root)`, `animation-range: 0 80px`, vers fond blanc et bordure. Repli JS : classe `.is-solid` si `scrollY > 10`. Forcé blanc quand un méga-menu est ouvert (`:has([aria-expanded=true])`).
4. **Méga-menu** : panneau en opacité + translateY(-10px) sur 420 ms (fermeture 220 ms), `@starting-style` ; éléments en cascade (480 ms, délais 60, 110, 160, 210, 260, 310, 340 ms). Survol seulement si `(hover: hover) and (pointer: fine) and (min-width: 64rem)`, délai de fermeture 180 ms, clic = épingler, un seul panneau ouvert, Échap rend le focus au déclencheur. Chevron qui pivote de 180° en 250 ms.
5. **Maquette animée du hero d'accueil** (CSS pur, boucle de 12 s, décalage 1,5 s par ligne) : ligne surlignée de 8 % à 20 % ; barre qui se remplit (scaleX 0 vers 1 à 12 %, tenue jusqu'à 92 %) ; coche qui apparaît (scale .6 vers 1). Carte avec 3 points gris en barre de titre ; lignes en grille `auto 1fr 4.5rem auto`. Pour Richard : un « plan de projet » (cadrage, maquette, développement, mise en ligne, référencement).
6. **Bandeau défilant de logos** : deux listes identiques (la seconde `aria-hidden`), `translateX(calc(-100% - 16px))` sur 45 s linéaire infini, masque `linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent)`, pause au survol et au focus.
7. **Carte des pays** : SVG pré-rendu (projection Mercator recadrée sur l'Afrique et l'Europe, Canada signalé en bord de cadre). Arcs quadratiques depuis le Bénin, pointillés `stroke-dasharray: 1 22`, animation de `stroke-dashoffset` sur 3,6 s, délais négatifs `-i × 0,9 s`. Survol d'une ligne de la liste : `:has(li[data-slug=x]:hover) .pays[data-slug=x]{fill:var(--link)}`. Zoom par `viewBox` optionnel.
8. **Image du formulaire de devis** : Ken Burns `scale(1) vers scale(1.09)` sur 22 s en alternance ; légende qui monte au survol (toujours visible sur `(hover: none)`).
9. **Survols** : carte lien translateY(-3px) + halo + titre coloré + pastille ronde qui se remplit ; carte domaine translateY(-4px) + icône inversée + flèche +4 px ; ligne mise en avant translateX(6px) + flèche ronde pivotée de -45° ; carte « à propos » translateY(-8px) en 500 ms + reflet lumineux qui traverse en 900 ms ; nœud de frise scale(1.08) + halo.
10. **Fenêtre « Diagnostic gratuit »** : 4 s après le choix cookies, une fois tous les 7 jours (localStorage), fond flouté, apparition 460 ms depuis translateY(24px) scale(.97), piège de focus, Échap.
11. **Sommaire collant** : IntersectionObserver `rootMargin: '-96px 0px -55% 0px'`, section active `aria-current="location"` avec bordure gauche et fond dégradé léger.
12. **Accordéons** : `<details>` natifs, chevron 180° en 250 ms ; module de programme ouvert : pastille numérotée pleine, ombre douce.

Mouvement réduit : tout visible et statique, bandeaux défilants en listes, défilement doux coupé.

### A.3 Sections et gabarits

- **Coque** : lien d'évitement, en-tête, `main`, pied, barre collante mobile, script d'apparition.
- **En-tête desktop** : grille `1fr auto 1fr` (logo, navigation centrée, actions). Bouton WhatsApp sombre dès 640 px, bouton Devis en couleur d'action. Élément actif : fond teinté + soulignement de 2 px.
- **Méga-menu Formations** : gauche, grille de cartes domaine (icône 40 px, titre, 3 formations, « Voir le domaine ») ; droite, carte sombre dégradée (eyebrow, titre, texte, bouton devis). **Méga-menu Pays** : deux groupes (Afrique francophone ; Europe et Canada), chaque entrée = pastille ISO 40 px + nom + deux villes.
- **Pied de page** sombre, grille `1.3fr 1.1fr 1.7fr 1fr` : marque, domaines, pays (2 colonnes avec drapeaux), ressources. Titres de colonnes en capitales, soulignés de 2 px en `--accent`.
- **Section** : eyebrow, h2, chapeau ; tons alternés (blanc, sable, sombre) ; chaque gabarit finit par une bande sombre d'appel.
- **Hero de sous-page** : fond `linear-gradient(180deg, var(--surface), #faf6f0 55%, #fff)`, bas arrondi `border-radius: 0 0 50% 50% / 0 0 2.75rem 2.75rem`, halos `::before` (26rem, couleur de lien à 16 %) et `::after` (22rem, accent). Variante `--split` (`1.5fr .75fr`, panneau de faits blanc, une ligne par fait) ; variante `--cover` (`1.2fr 1fr`, photo 4:3 avec la carte de faits qui la chevauche de 64 px). Faits mobiles en cartes avec onglet dégradé 32×4 px.
- **Intro de hero** : premier paragraphe en chapeau 62ch, la liste suivante devient une grille de cartes (3 éléments en tiers, 2 ou 4 en moitiés, 5 en 3 + 2) via `:has()`.
- **Accueil Audyxa** : hero 100svh + maquette animée + bande de 3 chiffres ; bandeau logos ; duo « à propos » ; 6 domaines ; pays (liste + carte) ; formations mises en avant (colonne collante + lignes) ; méthode en 4 étapes ; matrice des formats ; bande sombre ; FAQ ; devis avec photo.
- **Carte formation** : photo 16:10 avec voile et badge de domaine flouté ; titre sur 3 lignes réservées ; faits (Public sur une ligne, Durée et Niveau côte à côte, icônes 32 px) ; pied « Voir la fiche » + flèche ronde. Grille `auto-fill minmax(17rem,1fr)`.
- **Fiche formation** : grille `1fr 19rem` dès 1100 px ; blocs-cartes avec tuile d'icône 44 px et h2 en question ; bloc « promesse » sombre ; objectifs et livrables en tuiles cochées ; public + prérequis côte à côte ; programme par jour (pastille « JOUR 1 », modules en `<details>` avec numéro, durée en pastille) ; formats et cas en cartes à liseré supérieur de 3 px ; tarif ; FAQ. Colonne latérale collante : sommaire + carte résumé avec bouton.
- **Matrice des formats** : cartes sur mobile ; dès 1280 px, grille `9rem repeat(4,1fr)` et `grid-template-rows: subgrid` pour aligner les rangées (Pour qui, Comment, À retenir).
- **Filtres de catalogue** : pilules qui sont de vrais liens (`?public=dirigeants`), JS qui fusionne les filtres et masque les cartes par attributs `data-*`, compteur vivant ; URL filtrées en `noindex, follow`.
- **Contact** : grille `1fr 21rem`, formulaire en deux groupes, colonne collante de 3 cartes (coordonnées, préparer sa demande, données personnelles).
- **Barre collante mobile** : deux boutons égaux (Devis, WhatsApp), ombre vers le haut, marge de zone sûre, masquée dès 768 px.

### A.4 Mesures des pages Audyxa (pour comparaison)

Accueil 1 614 mots ; fiche formation 1 845 ; hub pays 3 085 ; formation × pays 2 221 ;
guide 1 662 ; terme de glossaire 128. Toutes en `noindex` au 03/10/2026 sauf `/vibe-coding/`.
Bugs à ne pas reproduire : canonique et sitemap vers localhost, locatif doublé (« au Bénin au
Bénin »), meta de 181 caractères.

## B. Projets clients (faits publics relevés le 03/10/2026)

Sous-traitance pour Digital Développement : INOVIS, Impulse, Afro Joy'ce, IK, QueenK, AT,
Laura. Clients directs : OBA TV, GC Pro, KossKoss. Produit de Richard : Wapy. Aucun résultat
commercial n'est visible publiquement : tout résultat cité doit venir de Richard.

| Projet | Activité, lieu | Pile technique | Angle d'histoire |
|---|---|---|---|
| INOVIS Côte d'Ivoire (inovis-site.vercel.app) | Cabinet d'études et de conseil, Abidjan, fondé en 2014 | Next.js, Vercel | Du WordPress daté (2,26 Mo, 6,8 s) à un dossier de preuves rapide (577 Ko, 2,3 s), mesure d'un seul passage |
| Impulse Finance (impulsefinance.fr) | Expertise comptable, Argenteuil | Grav CMS, plugin maison de suivi des demandes, LWS | Sortir d'un WordPress + Elementor ingérable sans perdre le référencement (301), simulateurs TVA, IS, coût salarié |
| Afro Joy'ce (afrojoyce.vercel.app) | Cuisine ivoirienne livrée, Abidjan | Next.js | Commandes WhatsApp à la main remplacées par commande en ligne, paiement Wave, livraison Yango, suivi WhatsApp |
| OBA TV (obatv.bj) | Web TV, Cotonou | PHP 8.3 sur mesure, Cloudflare | Direct, replays, grille, rédaction autonome, abonnement premium par MTN MoMo et Moov |
| GC Pro Consulting (cabinetgcpro.com) | Formation et conseil en gestion, Cotonou, 2018 | PHP 8.3 (probablement Laravel) | Site bilingue de 106 URL, inscriptions et devis en ligne, pages villes, clients hospitaliers |
| IK Fashion House (ik-fashionhouse.com) | Mode féminine sur mesure, Cotonou | Laravel + Livewire ; landing « IK Tissu » en PHP natif + GSAP | Atelier artisanal vers boutique et sur-mesure à distance, FedaPay et GeniusPay |
| QueenK Beauty (queenkbeauty.com) | Soins beauté, Abidjan | Laravel + Inertia + Vue | Boutique multidevise et trilingue pour la diaspora (Stripe + Mobile Money). Produits sensibles : accord du client requis |
| AT Consulting International | QHSE et formation, Abidjan, 2011 | Laravel | Catalogue de 17 formations, fiche d'évaluation des stagiaires en ligne |
| KossKoss Select (kosskoss.com) | Concept-store cosmétique, Cameroun | Next.js | Diagnostic beauté en 5 étapes, 14 routines, Orange Money et MTN MoMo |
| Laura Cosmetics (lauracosmeticsparis.com) | Cosmétiques, Paris et Abidjan | Laravel 11, Livewire 3, Filament 3, Meilisearch | Boutique deux devises et deux zones, back-office complet (stocks, coupons, KPI), 322 commits en un mois |
| Wapy (wapy.pro) | Produit de Richard : assistant WhatsApp IA pour les entreprises d'Afrique francophone | Next.js + backend Python, auto-hébergé | Histoire de fondateur. Tarifs publics 9 900 / 24 900 / 49 900 FCFA par mois, essai 7 jours |

### B.1 Défauts publics à corriger avant d'en faire une histoire

- **KossKoss** : mentions légales, CGV, livraison et paiement affichent « DONNÉES DE DÉMONSTRATION » (RC et NIU factices) ; message d'échec de paiement renvoyant vers contact@mlc-bois.fr ; CGV citant kosskoss.vercel.app (404).
- **OBA TV** : numéro Mobile Money affiché +229 01 00 00 00 00 ; e-mail du schéma sur obaotv.com ; crédit « Conçu et développé par Richard Salanon » pointant vers richard.salanon.info (à passer sur richardsalanon.com : c'est un lien entrant).
- **Afro Joy'ce** : frais de livraison Cocody à 2 F ; mentions légales « à compléter » ; pas de domaine propre.
- **Impulse, GC Pro, IK, Laura** : mentions légales « à compléter » ; IK affiche des notes de développeur ; Laura se dit « maison parisienne, made in France » mais auto-entrepreneur ivoirien.
- **AT** : liens légaux en « # », compteurs à 0 dans le HTML, title sans mot-clé métier.
- **QueenK** : pages rendues côté navigateur (HTML sans H1 ni texte), pages légales d'une phrase, images servies depuis un domaine de préproduction.
- **GC Pro** : prochaine formation passée affichée sur l'accueil ; défi JavaScript Hostinger qui peut bloquer les robots.
- **Wapy** : phrase « La colonne Tarif reste vide de montant » alors que les montants sont affichés ; liaison WhatsApp non officielle par QR à présenter honnêtement.

### B.2 Questions pour chaque histoire

Communes : date de mise en ligne, durée, part exacte de Richard, résultats chiffrés (trafic,
demandes, ventes, temps gagné), autorisation de citer le client et son logo, capture
d'écran utilisable, citation du client possible.
Spécifiques : INOVIS (bascule du domaine inovis-ci.com) ; Impulse (peut-on citer « 3 jours »
de développement ?) ; Afro Joy'ce (volume de commandes, API WhatsApp utilisée) ; OBA TV (lien
avec OBA Production, audience, paiement automatique prévu) ; GC Pro (stack exacte, accord pour
citer les établissements hospitaliers) ; IK (un ou deux récits avec IK Tissu ?) ; QueenK
(accord vu la nature des produits) ; KossKoss (site officiellement lancé ?) ; Laura (part sur
les 322 commits) ; Wapy (date de lancement, clients, présentation de la liaison par QR).

## C. Concurrence : paulmaximedossou.com (crawl complet, 2 143 pages)

- 82 % de pages générées : 1 360 formation × ville, 240 intégration IA × ville, 160 ville × service (50 à 70 % de texte commun entre voisines). Noyau rédigé d'environ 250 pages.
- Erreurs de masse : lien WhatsApp cassé (`wa.me/22901666598360`) sur 1 521 pages, `{{ville}}` non remplacé sur 80 pages, « en Bénin » sur 805, « 2 jour s » sur 920, 656 sessions de formation passées, 62 articles datés dans le futur, FCFA affichés sur Paris, Montréal, Genève.
- Points forts : robots.txt ouvert à 24 robots IA, llms.txt et llms-full.txt riches, schémas FAQPage, Speakable, HowTo, DefinedTermSet, Course ; blocs réglementaires par pays (MECeF, APDP, ARTCI, SYSCOHADA, NINEA, IPRES) ; pilier `/digitalisation-entreprise` (définition, échelle de maturité en 5 niveaux, méthode, erreurs, budgets).
- Couverture : 12 pays africains + France, Belgique, Suisse, Canada. **Absents** : Maghreb, Congo-Brazzaville, Tchad, Centrafrique, Madagascar, Comores, Djibouti, Burundi, Rwanda, Seychelles, Maurice, Guinée équatoriale, Cap-Vert, São Tomé, Luxembourg, Monaco, et toutes les villes secondaires. Aucune page « référencement IA » pour une ville africaine.
- Services absents chez lui : application mobile, Dolibarr, maintenance, refonte, landing page, histoires clients nommées, outils (simulateur, calculateur, quiz).
- Faits contradictoires : villes couvertes 35+, 39, 40 ou 50+ ; « 48 clients » contre « 100+ formés » ; « 8+ ans » contre « 5+ ans » ; note « 4,9/5 sur 48 avis » non sourcée ; listes « Top » où il se classe premier.
- Catalogue : 34 formations (Odoo 8, automatisation 6, IA 6, web et marketing 4, développement 4, vibe coding 3, SaaS 3), prix en EUR de 90 à 450 €.
- Présence hors site : une recherche sur son nom ne renvoie rien d'autre que son site.

## D. Formats éditoriaux d'audyxa.com (dépôt public `Deal-Club/audyxa-web`)

356 URL : 12 histoires (entreprises connues, échec ou réussite, sourcées), 13 comparatifs,
22 guides, glossaire de 66 termes sur une page, 17 chapitres de méthode, 18 secteurs, 16 pays,
144 villes, 96 service × capitale. Médianes de 450 à 800 mots. Techniques reprises : « En
résumé » en tête, chiffre + date + source, tarifs d'outils datés (« page tarifs consultée en
septembre 2026 »), encadré « Point de vigilance », mention « n'est pas un client », H2 en
questions, `DefinedTermSet`, liens placés dans les phrases. Faiblesses à ne pas reproduire :
blocs d'histoires sans titres, pas de date visible, pas de FAQ sur les histoires, page auteur
hors sitemap, méta tronquées automatiquement. Ne pas reprendre ses 12 entreprises ni ses textes.

## E. Audit de richardsalanon.com

Données brutes du crawl (144 URL, tableau de mots trié, rapports Lighthouse) dans le
répertoire temporaire de la session du 03/10/2026, non versionné. Chiffres clés : médiane de
1 270 mots visibles, maximum 2 838 (`/developpeur-web-cotonou`), 0 page à 3 200 ; Lighthouse
mobile accueil 80 (LCP 2,5 s), page ville 64, article 86 ; pages de 178 à 354 Ko ; génération
serveur 0,09 à 0,15 s. Ressemblance par groupe (Jaccard 6 mots) : formation-ia 0,60,
externaliser 0,59, odoo 0,38, dolibarr 0,39, developpeur-web 0,09, digitalisation 0,05,
digitaliser 0,06, services 0,14, blog 0,04.
