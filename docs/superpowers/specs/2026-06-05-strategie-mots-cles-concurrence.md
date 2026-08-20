# Stratégie mots-clés & analyse concurrentielle — Richard Salanon

**Date :** 2026-06-05
**But :** Donner à chaque page le bon mot-clé, le bon `<title>`, la bonne meta description et le bon angle éditorial pour dominer le SEO « informatique » au Bénin (puis à l'international).
**Lié à :** `2026-06-05-refonte-seo-portfolio-design.md` (§5.1 carte de mots-clés).

---

## 1. Analyse concurrentielle (juin 2026)

| Concurrent | Title / H1 | Services | Blocs de contenu | Faille exploitable |
|---|---|---|---|---|
| **paulmaximedossou.com** | Title `Développeur Web & Automatisation Bénin \| Paul Maxime Dossou` ; H1 = son nom | Web Fullstack, Automatisation n8n, SEO, Google Ads, e-commerce, marketing digital, chatbots IA | Expertise, Services, Portfolio | **0 schema.org** ; H1 = nom (faible) |
| **bendavakan.com** | H1 `Développeur web & consultant SEO` (mots-clés, pas le nom) | Site web, app sur-mesure, SEO/marketing, audit SEO, e-commerce, landing page, dashboard/back-office, SaaS, API REST | Process « 4 étapes », **FAQ**, témoignages, blog ressources | Pas de schema visible |
| **anidedev.com** | H1 bénéfice `Des solutions digitales pour votre entreprise` | Sites sur-mesure, UX/UI, dev web, **mobile**, e-commerce, SEO, sécurité, maintenance | Agence, expertise, pourquoi nous, portfolio, témoignages | Pas de schema |
| **benin-digital.com** | H1 `Business & IT transformation` | Cybersécurité, réseaux, cloud, data, dev, conseil + business digital + solutions | À propos, compétences, services, équipe, FAQ, actus, partenaires | Très corporate, peu humain |
| **callconnect-benin.com** | — (HTTP 403, crawl bloqué) | — | — | — |

### Enseignements clés
1. **Aucun concurrent n'a de schema.org structuré** → l'avantage technique de Richard (JSON-LD Person + Service + à venir FAQ/Breadcrumb) est différenciant et gratuit.
2. **Les pages les mieux positionnées mettent les mots-clés en H1, pas le nom.** → Décision validée : H1 mots-clés, nom en sur-titre.
3. **Format de `<title>` gagnant :** `[Service + Géo] | [Nom]`.
4. **Blocs qui rankent et convertissent :** process en étapes, FAQ (→ FAQPage schema), témoignages, études de cas chiffrées, blog/ressources.
5. **Différenciateur de Richard :** automatisation/IA avec preuve concrète (article « bot qui prospecte 500 artisans/mois »). Peu de concurrents le font bien → angle de marque fort.

### Autres acteurs du SERP local (issus des recherches)
Agences : MDIVINE, DigitalSiteWeb, Sabma Digital, Data Concept Bénin. Annuaires/comparateurs : Sortlist (« 10 meilleurs développeurs… »), codeur.com, AfricaShore, IWORKS. Repère tarifaire marché : **site vitrine PME ~300 000 à 1 200 000 FCFA** ; paiement **MTN Mobile Money** dominant (92 % des freelances). → matière à articles de blog (prix, paiement, comparatifs).

---

## 2. Périmètre de services validé (Richard)
1. **Sites web** — vitrine, entreprise, **e-commerce**
2. **Applications web sur-mesure** — dashboard, back-office, SaaS, outils métier
3. **Applications mobiles** — Android & iOS
4. **Automatisation & IA** — n8n / Make, bots, chatbots, intégrations/API
5. **Formation** — programmation & outils numériques
6. **Accompagnement / étude de projet informatique** — conseil, cadrage
7. **Audit système / informatique**
8. **Digitalisation d'entreprise**

Angle éditorial : **orienté travail/résultats**, pas CV. Diplômes/parcours = preuve d'expertise secondaire, pas sujet central.

---

## 3. Carte de mots-clés par page

> Légende : **P** = mot-clé principal (1 par page) · S = secondaires · LT = longue traîne (blog/FAQ). Modificateurs géo à décliner : `Bénin`, `Cotonou`, `Abomey-Calavi`, `Porto-Novo`.

### Accueil `/`
- **P :** développeur web Bénin / développeur web Cotonou
- S : développeur freelance Bénin, création site web Cotonou, automatisation entreprise Bénin, développeur full stack Bénin
- Intention : marque + hub vers les services.

### `/services/creation-site-web`
- **P :** création site web Cotonou / création site internet Bénin
- S : agence web Cotonou, site vitrine entreprise Bénin, site e-commerce Bénin, refonte site web
- LT : « combien coûte un site web au Bénin », « créer un site e-commerce avec Mobile Money »

### `/services/application-web`
- **P :** développement application web sur-mesure Bénin
- S : logiciel de gestion entreprise Bénin, dashboard back-office, SaaS Bénin, outil métier sur-mesure
- LT : « logiciel de gestion pour PME au Bénin », « application web de facturation »

### `/services/application-mobile`
- **P :** création application mobile Bénin / développeur application mobile Cotonou
- S : application Android Bénin, application iOS Bénin, app mobile sur-mesure
- LT : « combien coûte une application mobile au Bénin »

### `/services/automatisation-ia`
- **P :** automatisation entreprise Bénin / automatisation des processus
- S : n8n Bénin, Make/Zapier, chatbot entreprise, bot de prospection, intégration API
- LT : « automatiser la prospection commerciale », « chatbot WhatsApp pour entreprise »

### `/services/formation`
- **P :** formation programmation Cotonou / formation développement web Bénin
- S : apprendre PHP/Laravel Bénin, formation WordPress, cours JavaScript Cotonou
- LT : « apprendre à coder au Bénin », « formation développeur web débutant »

### `/services/accompagnement-projet`
- **P :** étude de projet informatique Bénin / conseil informatique entreprise
- S : cadrage projet digital, consultant IT Bénin, chef de projet technique
- LT : « comment lancer un projet informatique »

### `/services/audit-systeme`
- **P :** audit informatique Bénin / audit système entreprise
- S : audit sécurité informatique, audit site web, optimisation système
- LT : « audit informatique PME Bénin »

### `/services/digitalisation-entreprise`
- **P :** digitalisation entreprise Bénin / transformation digitale PME
- S : digitaliser son entreprise Cotonou, dématérialisation, solutions digitales PME
- LT : « comment digitaliser son entreprise au Bénin »

---

## 4. `<title>` & meta descriptions recommandés

> `<title>` cible ≤ 60-65 caractères · description ≤ 155 caractères. À saisir dans `seo_config` (global) et la future table `page_seo` (par page, Phase 2).

| Page | `<title>` | Meta description |
|---|---|---|
| **Accueil** | `Développeur Web, Mobile & Automatisation au Bénin \| Richard Salanon` | `Richard Salanon, développeur freelance à Cotonou : sites web, applications web & mobiles, automatisation et digitalisation pour entreprises. Devis gratuit.` |
| **Création site web** | `Création de site web à Cotonou, Bénin \| Richard Salanon` | `Création de sites vitrine, entreprise et e-commerce performants au Bénin. Design moderne, rapide et optimisé SEO. Paiement Mobile Money. Demandez un devis.` |
| **Application web** | `Développement d'application web sur-mesure au Bénin` | `Logiciels de gestion, dashboards, SaaS et outils métier sur-mesure pour PME au Bénin. Développement web full stack fiable et évolutif. Parlons de votre projet.` |
| **Application mobile** | `Création d'application mobile Android & iOS au Bénin` | `Développement d'applications mobiles Android et iOS sur-mesure au Bénin. De l'idée au lancement sur les stores. Devis gratuit à Cotonou.` |
| **Automatisation & IA** | `Automatisation & bots (n8n, Make) pour entreprises au Bénin` | `Automatisez votre prospection, vos process et votre support avec n8n, Make et des chatbots IA. Gagnez du temps et des clients. Audit d'automatisation offert.` |
| **Formation** | `Formation en programmation à Cotonou, Bénin` | `Apprenez le développement web (HTML/CSS, JS, PHP, Laravel, WordPress) avec un développeur professionnel à Cotonou. Formation pratique par projets. Inscrivez-vous.` |
| **Accompagnement / étude de projet** | `Étude & accompagnement de projet informatique au Bénin` | `Cadrage, conseil et accompagnement de vos projets informatiques au Bénin. De l'idée au cahier des charges jusqu'à la réalisation. Échangeons sur votre besoin.` |
| **Audit système** | `Audit informatique & système d'entreprise au Bénin` | `Audit complet de votre système informatique : sécurité, performance, site web. Recommandations concrètes et plan d'action. Demandez votre audit à Cotonou.` |
| **Digitalisation** | `Digitalisation d'entreprise au Bénin — conseil & solutions` | `Digitalisez votre entreprise au Bénin : sites, applications, automatisation et outils sur-mesure. Transformez vos process et gagnez en efficacité. Contactez-moi.` |

---

## 5. H1 & structure éditoriale recommandés

### Accueil (H1 mots-clés validé)
- Sur-titre (eyebrow) : `Richard Salanon`
- **H1 :** `Développeur web, mobile & automatisation au Bénin`
- Sous-titre animé (typewriter) : rotation de `Sites web sur-mesure` · `Applications web & mobiles` · `Automatisation & IA` · `Digitalisation d'entreprise`
- Proposition de valeur : *« Je conçois des sites, applications et automatisations qui font gagner du temps et des clients aux entreprises — au Bénin et à l'international. »*
- CTA : « Demander un devis gratuit »

### Blocs à ajouter (inspirés des meilleurs concurrents)
1. **Services** (grille → liens vers les 8 pages services)
2. **Process** : « De l'idée à la mise en ligne en 4 étapes » (Cadrage → Design → Développement → Lancement & suivi)
3. **Réalisations / études de cas** — section portfolio **souple** (galerie de cartes projets : titre, catégorie, ligne de résultat, miniature ; cartes « bientôt publié » possibles). ⚠️ NE PAS ériger le bot « 500 artisans/mois » en réalisation phare unique : Richard a des projets meilleurs non encore publiés. L'automatisation reste un **service/atout**, pas le projet vedette de la page.
4. **Pourquoi me choisir** (réactivité, code propre, SEO inclus, paiement Mobile Money, suivi)
5. **Témoignages**
6. **FAQ** (→ schema FAQPage : prix, délais, paiement, maintenance)
7. **Blog / ressources**
8. **À propos condensé** (expertise & preuves, pas de CV académique)
9. **Contact** (formulaire + WhatsApp + Mobile Money)

### Pages services (gabarit type)
H1 = mot-clé principal · intro bénéfice · « ce qui est inclus » · process · exemples/réalisations · FAQ spécifique (FAQPage) · CTA devis · maillage vers services liés.

---

## 6. Quick wins SEO immédiats (Phase 1, applicables maintenant)
- [x] H1 accueil = mots-clés (nom en eyebrow) — *appliqué Phase 1*
- [x] Meta description accueil enrichie (web + mobile + automatisation + digitalisation) — *appliqué Phase 1*
- [ ] Renseigner `seo_config.meta_title` / `meta_description` au dashboard avec les valeurs du §4 (accueil)
- [ ] Mettre les titres animés du hero = liste §5
- [ ] Ajouter le différenciateur « automatisation » partout (c'est ton angle unique vs concurrents)

## 7. À exploiter en Phase 2/3
- 8 pages services (§3-4) avec FAQPage + Breadcrumb + Service schema.
- Articles blog longue-traîne (prix, Mobile Money, comparatifs, « digitaliser son entreprise »).
- Process, témoignages, études de cas chiffrées.
- Backlinks : Sortlist, codeur, AfricaShore, IWORKS, annuaires Bénin (NAP cohérent).
