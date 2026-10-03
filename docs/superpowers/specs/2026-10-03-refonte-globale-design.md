# Refonte globale richardsalanon.com : design, contenu, SEO et GEO

Date : 03/10/2026. Statut : design validé par Richard en conversation, spec à relire.
Références détaillées (relevés bruts) : `2026-10-03-refonte-references.md`, même dossier.

## 1. Objectif

Richard SALANON veut que son site :

1. sorte en tête de Google sur tous ses services, dans les 28 pays d'Afrique francophone, en Europe francophone et au Canada ;
2. soit la source que les IA (ChatGPT, Perplexity, Gemini, Claude, Copilot) citent pour chacune de ses compétences ;
3. dépasse paulmaximedossou.com sur la couverture, la profondeur et la qualité ;
4. reprenne le design, les dispositions et les animations de formation.audyxa.com (Richard en est co-fondateur), avec une identité propre ;
5. n'ait aucune page indexable de moins de 3 200 mots.

Critères de succès mesurables :

- 0 point bloquant de l'audit du 03/10/2026 encore présent (section 4) ;
- 100 % des pages indexables à 3 200 mots ou plus dans `<main>` (exceptions en 7.2) ;
- 0 page publiée au-delà du seuil de ressemblance (section 8) ;
- part de pages « Indexées » dans Search Console supérieure ou égale à 70 % à chaque tranche publiée ;
- llms.txt, llms-full.txt, schéma Person et fiche de faits identiques mot pour mot sur les chiffres.

Limite assumée : aucun dispositif ne garantit une citation en premier par les IA ni une première
position Google. Le site maximise la probabilité ; l'autorité externe (chantier 8) pèse autant.

## 2. Décisions prises avec Richard (03/10/2026)

| Sujet | Décision |
|---|---|
| Technique | Le site reste en PHP 8 + CSS + JS natifs. Aucune URL existante ne disparaît sans 301. Déploiement GitHub Actions inchangé. |
| Design | Dispositions, composants et animations de formation.audyxa.com, portés en CSS/JS natifs. |
| Palette | Encre `#14161F`, terracotta `#C2502F` (actions, couleur de Wapy), sarcelle `#0F6B6B` (liens, icônes), ocre `#E0A43A` (touches), sable `#F5EEE6` (fonds). Planche : `docs/mockups/palettes-refonte.html`. |
| Polices | Sora (titres) + Plus Jakarta Sans (texte). Roboto, Fraunces et Lora sont retirées. |
| Marque | Une seule marque : « Richard SALANON ». « Richard Technologies » disparaît du site, du schéma et des fichiers IA. Nouveau logo monogramme « RS » (prompt fourni à Richard ; redessiné en SVG à réception). |
| Pages géographiques | Matrice service × pays (section 6.6), publiée par tranches avec contrôle d'unicité. |
| Formation | Ligne de service majeure : pilier, catalogue de 60 fiches (IA, automatisation, vibe coding, IA dans les systèmes existants, OHADA, Odoo, Dolibarr, WhatsApp...), 37 pages par métier (avocats, magistrats, comptables, dirigeants...), ligne dans la matrice pays, déclinaisons par pays des formations et métiers prioritaires. |
| Histoires | Uniquement du réel : 11 projets de Richard + 6 réalisations en ligne. Sous-traitance mentionnée « réalisé en sous-traitance pour Digital Développement » (tous sauf GC Pro, OBA TV, KossKoss ; Wapy = produit de Richard). Histoires externes (entreprises connues) autorisées si chaque fait est sourcé. |
| Contenu Audyxa | Formats, structures et catalogue repris ; textes toujours réécrits et enrichis, jamais copiés (deux domaines du même propriétaire restent du contenu dupliqué). |

## 3. Les huit chantiers

Chaque chantier aura son plan d'implémentation. Ordre de dépendance :

```
C1 Fondations techniques ──┐
C3 Entité et GEO ──────────┼──> C2 Design et gabarits ──> publication
C4..C7 rédaction (données) ┘        (les gabarits lisent les données)
C8 Hors site : en continu, côté Richard
```

La rédaction (C4 à C7) démarre dès que les formats de données (section 7) sont figés, en
parallèle des gabarits : une page n'est servie que si son gabarit existe ET sa date de
publication est atteinte.

| # | Chantier | Contenu |
|---|---|---|
| C1 | Fondations techniques | Correctifs P0/P1 de l'audit (section 4). |
| C2 | Design et gabarits | Système de design, composants, gabarits de chaque type de page, refonte accueil, à-propos, contact, hubs. |
| C3 | Entité et GEO | Nom et positionnement uniques, fiche de faits, page auteur, schéma `@graph`, llms.txt, llms-full.txt, robots IA. |
| C4 | Piliers | Services consolidés, pilier formation, catalogue de formations, fusion des pages clones en 301. |
| C5 | Pays | 34 fiches pays sourcées, 34 hubs pays. |
| C6 | Matrice | Pages service × pays et formation × pays, script d'unicité, tranches. |
| C7 | Preuves et ressources | Histoires clients et externes, comparatifs, guides, glossaire, outils, reprise du blog. |
| C8 | Hors site | Google Business Profile, avis, crédits sur les sites clients, profils, Wikidata, articles invités. |

## 4. C1 : fondations techniques

Source : audit du 03/10/2026 (144 URL crawlées deux fois, navigateur et Googlebot). Aucun
blocage d'indexation pur : statuts, canoniques et directives robots sont justes partout.
Ce qui suit freine le classement.

### 4.1 P0

| Problème | Cause | Correctif |
|---|---|---|
| `www.richardsalanon.com` sert une copie complète du site, canoniques en www, sitemap www. | URL de base lue dans `HTTP_HOST` (`pv2-bootstrap.php:39-40`, `index.php:89-90`, `article.php:81`, `robots.php:14`, `sitemap.php:15`, `generate-sitemap.php:29`) ; `.htaccess:10-11` force HTTPS mais pas l'hôte. | 301 www vers domaine nu juste après la règle HTTPS. Toutes les URL absolues construites depuis une constante `SITE_URL`, jamais `HTTP_HOST`. Vérifier `BASE_URL` du `config/constants.php` de production. |
| 47 pages villes clones : `formation-ia-entreprise-*` (21, 23 % de texte propre), `externaliser-*` (8, Montréal/Québec à 81 %), `integration-odoo-*` et `integration-dolibarr-*` (18). | Fichiers copiés d'un modèle avec le nom de ville remplacé ; description meta construite depuis des champs identiques (`sujet.php:38`). | Fusion par 301 vers la matrice (section 6.8). |
| Aucune autorité externe. | Domaine de 4 semaines, zéro mention hors site. | Chantier 8. |

### 4.2 P1

1. **Dates du sitemap fausses** : 89 `lastmod` égaux à la date de déploiement (`deploy.yml` fait `rsync -rlz` sans `-t`), 24 URL sans `lastmod` (tous les services). Correctif : chaque fichier de données porte un champ `maj` (date ISO) tenu à la main ; le sitemap lit ce champ, jamais `filemtime`. Ajouter `-t` à rsync quand même.
2. **Maillage** : pages stratégiques à 2 liens entrants ; pied de page qui envoie 143 liens vers les pages villes et 5 liens « expertise » vers `/a-propos/#expertise`. Correctif : maillage généré depuis les registres (section 9).
3. **Liens cassés ou obsolètes** : `/dolibarr-cotonou` (404, `data/sujets/formation-dolibarr/utilisateurs.php:132`), 14 liens vers richard.salanon.info et 5 vers `/services/creation-de-site-web` dans les articles en base. Correctif : fichier corrigé + migration SQL `REPLACE()` sur le contenu des articles.
4. **Positionnement formulé de 4 façons** (title, H1, `jobTitle`, llms.txt) et ville alternant Cotonou / Abomey-Calavi. Correctif : fiche de faits unique (5.1).
5. **Pages services calées sur Abomey-Calavi** (`service.php:27, 38-42`). Correctif : nouveau gabarit, `areaServed` cohérent avec la page.
6. **Compteurs de l'accueil à « 0 » dans le HTML** (`templates/horizon.php:76,78,231-233`) : les robots IA lisent 0. Correctif : valeur finale dans le HTML, le JavaScript n'anime que l'affichage.
7. **Schéma** incohérent (Person complet sur l'accueil seulement, sans accents sur l'à-propos, `addressCountry` « Benin » et « BJ », `hasMap` vers le lien d'avis, `inLanguage` fr-BJ, Organization avec les profils personnels). Correctif : 5.3.
8. **llms.txt** sans accents, incomplet, servi sans charset ; `llms-full.txt` en 404. Correctif : 5.4 + `AddDefaultCharset UTF-8`.
9. **Blog mince** : 17 articles sur 24 sous 600 mots, `dateModified` = `datePublished`, lien auteur vers l'accueil. Correctif : chantier 7.
10. **GA4 sur l'accueil seulement** (`index.php:508-522`). Correctif : dans `partials/tracking.php`.
11. **H1 de l'accueil qui déborde sur mobile** (capture du 03/10/2026). Correctif : nouveau hero.

### 4.3 P2

`/index.php` et `/portfolio/*.php` répondent 200 (301 vers l'URL propre) ; `/favicon.ico` en 404 ;
portrait servi par `/api/thumb.php`, interdit dans robots.txt ; robots.txt et sitemap dépendants
de la base (3,5 s à froid, sitemap vide en 200 si la base tombe) ; `og:image` déclarée
1200×630 sur un petit avatar ; 252 images sans `width`/`height` ; « des le lendemain » ×22 ;
fil d'Ariane des formations sous « Zones desservies ».

## 5. C3 : entité et GEO

### 5.1 Fiche de faits unique

Un seul fichier, `portfolio/data/faits.php`, source de tous les chiffres et formulations
d'identité. Accueil, à-propos, page auteur, pied de page, schéma, llms.txt et llms-full.txt le
lisent. Aucun chiffre d'identité n'est tapé ailleurs.

Contenu : nom (« Richard SALANON »), intitulé (« Consultant en digitalisation et développement
logiciel »), phrase d'entité (2 phrases réutilisées telles quelles), ville de base, pays,
années d'expérience, projets livrés, pays servis, formation (EPITECH), langues, compétences
(`knowsAbout`), profils vérifiables (`sameAs`), Wapy (produit), co-fondation d'Audyxa, moyens
de paiement, délais types, tarifs de départ.

Valeur inconnue = `null`, jamais affichée. **Richard valide chaque valeur avant publication**
(questionnaire, section 13).

### 5.2 Page auteur

`/richard-salanon` : page entité de 3 200 mots ou plus. Parcours, compétences avec preuves,
projets, Wapy, Audyxa, formations données, méthode, engagements, profils, FAQ sur la personne
(« Qui est Richard SALANON ? », « Où travaille-t-il ? », « Quels services propose-t-il ? »).
Schéma `ProfilePage` + `Person`. Liée depuis chaque page (boîte auteur, pied de page).

### 5.3 Schéma

Un seul `<script type="application/ld+json">` par page, contenant un `@graph` :

- `Person` `@id` `https://richardsalanon.com/#person`, compact, **sur chaque page** : name, jobTitle, url, image, address (Cotonou, `BJ`), knowsAbout, alumniOf, sameAs réels seulement.
- `ProfessionalService` `@id` `/#service`, `provider` = `#person`, `areaServed` = pays de la fiche de faits.
- `WebSite` `@id` `/#website`, `inLanguage` `fr`.
- Selon le type : `BreadcrumbList` partout ; `Service` (pilier, matrice) ; `Course` (formation) ; `Article` avec `author` = `#person` et dates réelles (histoires, comparatifs, guides, blog) ; `FAQPage` uniquement depuis la FAQ visible ; `DefinedTermSet` (glossaire) ; `ItemList` (hubs) ; `ContactPage`, `AboutPage`, `ProfilePage`.
- Interdits : `AggregateRating`, `Review`, `Rating` tant qu'aucune source d'avis vérifiable n'existe ; `LocalBusiness` sans adresse physique publique.
- Échappement de `<`, `>` et `&` dans le script.

### 5.4 Fichiers et accès des IA

- `llms.txt` régénéré depuis les registres par script, accentué, servi en `text/plain; charset=utf-8` : phrase d'entité, faits, services, formations, pays, histoires, comparatifs, guides, une ligne de description par lien.
- `llms-full.txt` : version longue (définitions, méthode, tableaux de prix par devise, FAQ clés), même source.
- `robots.txt` statique (plus de requête en base), `Allow` explicite pour GPTBot, OAI-SearchBot, ChatGPT-User, ClaudeBot, Claude-User, Claude-SearchBot, anthropic-ai, PerplexityBot, Perplexity-User, Google-Extended, GoogleOther, Applebot, Applebot-Extended, Bingbot, Amazonbot, CCBot, meta-externalagent, cohere-ai, MistralAI-User, DuckAssistBot.
- Contrôler dans les statistiques d'exploration GSC et Bing l'absence de 403/429 : l'audit a déclenché le défi JavaScript du CDN Hostinger et un 429 sur GPTBot après environ 350 requêtes. Si les robots IA sont filtrés, ajuster la protection côté hPanel.

### 5.5 Règles d'écriture GEO (toutes les pages)

1. « En bref » : réponse directe en 2 à 4 phrases sous le H1.
2. H2 formulés comme de vraies questions.
3. Paragraphes de 120 mots au plus ; tableau ou liste dès qu'il y a comparaison ou étapes.
4. Chaque chiffre : valeur + date + source nommée dans la phrase ; sources listées en bas de page.
5. Phrase d'entité reprise à l'identique sur les pages pays et piliers.
6. « Mis à jour le » visible, aligné sur `dateModified`.
7. Boîte auteur en bas de chaque page éditoriale.
8. Titre de 50 à 60 caractères, sans « … » ; meta description de 140 à 155 caractères, phrase complète.

## 6. Architecture des pages

### 6.1 Types de pages et URL

Convention conservée : pas de barre finale sur les pages feuilles, barre finale sur les hubs
(règles `.htaccess` actuelles). Tous les volumes sont des cibles.

| Type | URL | Volume | Schéma principal |
|---|---|---|---|
| Accueil | `/` | 1 | WebPage, FAQPage |
| Page auteur | `/richard-salanon` | 1 | ProfilePage, Person |
| À propos | `/a-propos/` | 1 | AboutPage |
| Contact | `/contact` | 1 | ContactPage |
| Hub services | `/services/` | 1 | ItemList |
| Pilier service | `/services/{service}` | 27 | Service, FAQPage |
| Service × pays | `/services/{service}/{pays}` | 516 | Service (areaServed Country), FAQPage |
| Hub formations | `/formations/` | 1 | ItemList |
| Domaine de formation | `/formations/domaine/{domaine}` | 8 | ItemList, FAQPage |
| Fiche formation | `/formations/{formation}` | 60 | Course, FAQPage |
| Formation × pays | `/formations/{formation}/{pays}` | 125 (formations fortes × T1) | Course (areaServed), FAQPage |
| Formation par métier | `/formations/metier/{metier}` | 37 | Course, FAQPage |
| Métier × pays | `/formations/metier/{metier}/{pays}` | 60 (12 métiers × T1) | Course (areaServed), FAQPage |
| Hub secteurs, secteur | `/secteurs/`, `/secteurs/{secteur}` | 1 + 20 | Service, FAQPage |
| Hub pays | `/zones/` | 1 | ItemList |
| Pays | `/zones/{pays}` | 34 | Service, FAQPage |
| Ville (existantes, conservées car déjà uniques à 77-88 %) | `/developpeur-web-{ville}`, `/digitalisation-entreprise-{ville}`, `/digitaliser-{secteur}-{ville}` | 13 + 9 + 9 | Service, FAQPage |
| Hub histoires | `/histoires/` | 1 | CollectionPage |
| Histoire | `/histoires/{slug}` | ≈ 30 | Article |
| Hub comparatifs | `/comparatifs/` | 1 | CollectionPage |
| Comparatif | `/comparatifs/{slug}` | ≈ 25 | Article, FAQPage |
| Hub guides | `/guides/` | 1 | CollectionPage |
| Guide | `/guides/{slug}` | ≈ 40 | Article, FAQPage |
| Glossaire | `/glossaire/` + `/glossaire/{terme}` (termes forts) | 1 + ≈ 15 | DefinedTermSet / DefinedTerm |
| Outils | `/outils/{slug}` | 2 | WebApplication |
| Blog | `/blog/`, `/blog/{slug}` (en base) | 24 repris | BlogPosting |
| Réalisations | `/realisations/` : devient une redirection 301 vers `/histoires/` ; chaque `/realisations/{slug}` vers son histoire | 6 | |

Total visé : environ 1 100 pages indexables, toutes à 3 200 mots ou plus, publiées par
tranches sur plusieurs mois (6.6). Ordre de grandeur de rédaction : 3,5 millions de mots.

### 6.2 Services

Les slugs existants sont conservés. Colonne « Matrice » : le service a une page par pays.

| Service | Slug | Matrice |
|---|---|---|
| Création de site web (vitrine) | `site-vitrine-professionnel` | 34 pays |
| Site e-commerce | `site-e-commerce` | 34 pays |
| Application mobile Android et iOS | `application-mobile-android-ios` | 34 pays |
| Application web et logiciel sur mesure | `application-web-sur-mesure` | 34 pays |
| Référencement naturel SEO | `referencement-naturel-seo` | 34 pays |
| Référencement IA (GEO) : être cité par ChatGPT, Gemini, Perplexity | `referencement-ia-geo` (nouveau) | 34 pays |
| Automatisation n8n et Make | `automatisation-ia` | 34 pays |
| Agents IA et chatbot WhatsApp | `agents-ia-chatbot-whatsapp` (nouveau) | 34 pays |
| Intégration de l'IA dans vos logiciels et processus existants (ERP, CRM, messagerie, documents) | `integration-ia-entreprise` (nouveau) | 34 pays |
| Développement en vibe coding : prototypes et MVP livrés vite, code repris proprement | `vibe-coding` (nouveau) | non |
| Intégration WhatsApp dans Odoo, Dolibarr et vos outils | `integration-whatsapp` (nouveau) | non |
| Intégration Odoo | `integration-odoo` (nouveau) | 34 pays |
| Intégration Dolibarr | `integration-dolibarr` (nouveau) | 34 pays |
| Digitalisation d'entreprise | `digitalisation-d-entreprise` | 34 pays |
| Maintenance, hébergement et support | `maintenance-support` | 34 pays |
| Formation en entreprise | `formation-en-entreprise` (nouveau, remplace `formation-en-programmation`) | 34 pays |
| Développeur web freelance | `developpeur-web-freelance` (nouveau) | 34 pays |
| Externalisation du développement | `externalisation-developpement` (nouveau) | 6 pays (Europe, Canada) |
| Landing page haute conversion | `landing-page-haute-conversion` | non |
| Refonte et migration de site | `refonte-migration-de-site` | non |
| SaaS et espace client | `saas-espace-client` | non |
| API REST et intégrations | `api-rest-integrations` | non |
| Système de réservation en ligne | `systeme-de-reservation-en-ligne` | non |
| Audit SEO complet | `audit-seo-complet` | non |
| SEO local et Google Business | `seo-local-google-business` | non |
| Audit et étude de projet | `audit-etude-de-projet` | non |
| Consultant en digitalisation | `consultant-digitalisation` (page existante, déplacée sous `/services/`) | non |

Le contenu des services quitte la table `services` pour des fichiers de données (section 7).
Le dashboard ne gère plus les services ; il garde le blog, le profil et les médias.

### 6.3 Catalogue de formations

Origine : R = formation actuelle de Richard, A = catalogue Audyxa (réécrite), P = trou repéré
chez paulmaximedossou.com, N = nouvelle. « Forte » = déclinée par pays (6.6).
**Richard coche dans le questionnaire celles qu'il anime lui-même** : une formation qu'il ne
donne pas ne sera pas publiée (les IA le présenteraient pour une compétence qu'il n'a pas).

Formats proposés partout : intra-entreprise, inter-entreprises, à distance, hybride. Durées :
de la demi-journée (ateliers R) à 3 jours. Prix : tarifs indicatifs publiés en FCFA et en
EUR quand Richard les fixe, sinon « sur devis » avec conditions.

| Domaine | Formation | Slug | Origine | Forte |
|---|---|---|---|---|
| Intelligence artificielle | IA en entreprise : productivité des équipes | `ia-en-entreprise` | R | oui |
| | IA générative pour dirigeants | `ia-generative-dirigeants` | A | oui |
| | Prompt engineering professionnel | `prompt-engineering` | A, P | non |
| | Agents IA et assistants internes | `agents-ia-assistants` | A | non |
| | RAG : chatbot sur vos documents internes | `rag-chatbot-documents` | A, P | non |
| | IA, éthique et conformité des données | `ia-ethique-conformite` | A | oui |
| | Créer du contenu avec l'IA | `contenu-avec-ia` | A | non |
| | IA pour comptables (SYSCOHADA) | `ia-comptables-syscohada` | P | oui |
| Automatisation | n8n de zéro à l'autonomie | `n8n` | R | oui |
| | n8n avancé | `n8n-avance` | P | non |
| | Make de zéro à expert | `make` | P | non |
| | WhatsApp Business pour vendre | `whatsapp-business` | R | oui |
| | Chatbot WhatsApp et API WhatsApp Business | `chatbot-whatsapp` | P | non |
| | Intégrations API en no-code et low-code | `integrations-api-no-code` | A | non |
| Développement | Vibecoding : coder avec Claude, Cursor, Copilot | `vibecoding` | R, A | oui |
| | Développement web (HTML, CSS, JS, PHP, MySQL) | `developpement-web` | R | oui |
| | Laravel et PHP | `laravel-php` | P | non |
| | Next.js et React | `nextjs-react` | P | non |
| | WordPress et WooCommerce | `wordpress-woocommerce` | P | non |
| | Développement mobile Flutter | `flutter` | N | non |
| | API REST | `api-rest` | P | non |
| | SQL pour analystes métiers | `sql-analystes` | A | non |
| | Créer son SaaS de A à Z | `creer-son-saas` | P | non |
| ERP et outils de gestion | Odoo pour vos équipes | `odoo-utilisateurs` | R | oui |
| | Odoo pour dirigeants | `odoo-dirigeants` | P | non |
| | Odoo comptabilité SYSCOHADA | `odoo-comptabilite-syscohada` | P | oui |
| | Dolibarr pour vos équipes | `dolibarr-utilisateurs` | R | oui |
| | Réussir l'adoption d'un ERP | `adoption-erp` | A | non |
| | CRM : pipeline commercial et reporting | `crm-pipeline` | A | non |
| | Excel et Google Sheets pour la gestion | `excel-google-sheets` | R, A | oui |
| | Microsoft 365 et Google Workspace avancés | `microsoft-365-google-workspace` | A | non |
| | Tableaux de bord Power BI et Looker Studio | `power-bi-looker-studio` | A | non |
| | Outils collaboratifs : Notion, Trello, Asana, Teams | `outils-collaboratifs` | A | non |
| Marketing et visibilité | Visibilité Google : fiche, avis, SEO local | `visibilite-google` | R, P | oui |
| | SEO et marketing de contenu | `seo-contenu` | A | non |
| | Référencement IA (GEO) | `referencement-ia-geo` | N | oui |
| | Marketing digital B2B | `marketing-digital-b2b` | A | oui |
| | LinkedIn et réseaux sociaux d'entreprise | `linkedin-reseaux-sociaux` | A | non |
| | Publicité Meta Ads et Google Ads | `publicite-meta-google-ads` | A, P | non |
| | Emailing et marketing automation | `emailing-automation` | A | non |
| | Vendre en ligne : e-commerce | `e-commerce` | A | oui |
| | Google Analytics 4 et pilotage | `analytics-ga4` | A, P | non |
| Cybersécurité et IT | Cybersécurité pour les employés | `cybersecurite-employes` | A | oui |
| | Sécurité des données et sauvegardes pour dirigeants | `securite-donnees-dirigeants` | A | non |
| | Cloud et hébergement pour décideurs | `cloud-hebergement` | A | non |
| | Gestion de projet IT agile | `gestion-projet-agile` | A | non |
| Transformation digitale | Stratégie de transformation digitale | `strategie-transformation-digitale` | A | oui |
| | Digitalisation des processus métiers | `digitalisation-processus` | A | non |
| | Conduite du changement numérique | `conduite-du-changement` | A | non |
| | Chef de projet digital et product owner | `chef-de-projet-digital` | A | non |
| | Décider avec les données (data literacy) | `data-literacy` | A | non |
| | Digitaliser son entreprise pas à pas | `digitaliser-son-entreprise` | N | oui |
| IA dans vos systèmes existants | Intégrer l'IA dans ses logiciels existants | `integrer-ia-logiciels-existants` | N | oui |
| | IA dans les processus métier : cartographier, automatiser, contrôler | `ia-processus-metier` | N | oui |
| | Odoo et IA | `odoo-ia` | N, P | oui |
| | Dolibarr et IA | `dolibarr-ia` | N | non |
| | WhatsApp relié à Odoo, Dolibarr et au CRM | `whatsapp-odoo-dolibarr-crm` | N | oui |
| | IA et droit OHADA : recherche, rédaction, veille | `ia-droit-ohada` | N | oui |
| | IA pour l'audit, le contrôle et la conformité | `ia-audit-controle` | N | non |
| | Gouverner l'IA dans l'entreprise : charte, données, responsabilités | `gouvernance-ia` | N | oui |

Retirées du catalogue Audyxa car hors des compétences affichées de Richard (à rouvrir s'il
les anime) : communication et prise de parole, leadership, service client digital.

Les 9 formations actuelles changent d'URL (racine vers `/formations/{slug}`) : 301 en 6.8.

Domaines (`/formations/domaine/{slug}`) : `intelligence-artificielle`, `automatisation`,
`developpement`, `erp-gestion`, `marketing-visibilite`, `cybersecurite-it`,
`transformation-digitale`, `ia-systemes-existants`.

Le catalogue compte ainsi 60 fiches, dont 25 fortes.

### 6.3 bis Formations par métier

Richard forme dans tous les secteurs. Chaque métier a sa page `/formations/metier/{metier}`
(3 200 mots ou plus) : ce que l'IA, la digitalisation et l'automatisation changent pour ce
métier, ce qu'elles ne doivent jamais faire (secret professionnel, déontologie, données),
les cas d'usage concrets, les outils et systèmes du métier (OHADA, SYSCOHADA, Odoo, Dolibarr,
WhatsApp, logiciels métier), le programme type, les formats, la FAQ, les formations du
catalogue qui s'y rattachent. Schéma `Course` + `FAQPage`. Les 12 métiers prioritaires
(marqués P) sont déclinés sur les 5 pays T1 (6.6).

| Univers | Métiers |
|---|---|
| Droit et justice | avocats (P), magistrats et juges (P), greffiers, notaires (P), commissaires de justice et huissiers, juristes d'entreprise (P) |
| Chiffre et finance | experts-comptables et comptables (P), auditeurs et contrôleurs de gestion (P), directeurs financiers, banques et microfinance (P), assurances, fiscalistes |
| Direction et gestion | chefs d'entreprise et dirigeants (P), managers, ressources humaines (P), assistants de direction et secrétaires (P), acheteurs, logisticiens et transitaires |
| Commerce et communication | commerciaux, commerçants et e-commerçants (P), marketing et communication, journalistes et médias, hôtellerie et restauration |
| Santé et social | médecins et cliniques, pharmaciens, ONG et projets de développement (P) |
| Secteur public et éducation | administrations et collectivités, enseignants et établissements scolaires, universités et chercheurs |
| Technique et terrain | BTP, architectes et ingénieurs, agro-industrie et négoce agricole, industrie, immobilier |

Total : 37 métiers. Une page métier n'est publiée que si Richard confirme avoir formé ou
pouvoir former ce public (questionnaire, section 13) ; ses références réelles par métier y
figurent quand il les autorise.

### 6.3 ter Secteurs

`/secteurs/{secteur}` : digitaliser et équiper en IA un secteur (services, logiciels,
intégrations, cas d'usage, prix), à distinguer des pages métier qui parlent de formation.
Environ 20 secteurs alignés sur les univers ci-dessus (cabinets d'avocats, cabinets
comptables, cliniques, écoles, hôtels, commerce, import-export et transit, BTP, ONG,
microfinance, administrations, agro-industrie, immobilier, médias...). Les 9 pages
`/digitaliser-{secteur}-{ville}` existantes deviennent leurs déclinaisons locales et les
relient.

### 6.4 Pays

34 pays. Tranche = ordre de publication de la matrice (6.6). Les devises et opérateurs sont
à vérifier et sourcer dans chaque fiche pays ; ce tableau sert de point de départ.

| Tranche | Pays | Slug | Devise |
|---|---|---|---|
| T1 | Bénin | `benin` | XOF |
| T1 | Côte d'Ivoire | `cote-d-ivoire` | XOF |
| T1 | Sénégal | `senegal` | XOF |
| T1 | Togo | `togo` | XOF |
| T1 | Cameroun | `cameroun` | XAF |
| T2 | Burkina Faso | `burkina-faso` | XOF |
| T2 | Mali | `mali` | XOF |
| T2 | Niger | `niger` | XOF |
| T2 | Guinée | `guinee` | GNF |
| T2 | Gabon | `gabon` | XAF |
| T2 | Congo-Brazzaville | `congo-brazzaville` | XAF |
| T2 | RD Congo | `rd-congo` | CDF (USD courant) |
| T3 | France | `france` | EUR |
| T3 | Belgique | `belgique` | EUR |
| T3 | Suisse | `suisse` | CHF |
| T3 | Canada | `canada` | CAD |
| T3 | Luxembourg | `luxembourg` | EUR |
| T3 | Monaco | `monaco` | EUR |
| T4 | Maroc | `maroc` | MAD |
| T4 | Tunisie | `tunisie` | TND |
| T4 | Algérie | `algerie` | DZD |
| T4 | Madagascar | `madagascar` | MGA |
| T4 | Mauritanie | `mauritanie` | MRU |
| T4 | Tchad | `tchad` | XAF |
| T4 | Centrafrique | `centrafrique` | XAF |
| T5 | Rwanda | `rwanda` | RWF |
| T5 | Burundi | `burundi` | BIF |
| T5 | Djibouti | `djibouti` | DJF |
| T5 | Comores | `comores` | KMF |
| T5 | Maurice | `maurice` | MUR |
| T5 | Seychelles | `seychelles` | SCR |
| T5 | Guinée équatoriale | `guinee-equatoriale` | XAF |
| T5 | Cap-Vert | `cap-vert` | CVE |
| T5 | São Tomé-et-Príncipe | `sao-tome-et-principe` | STN |

Prix affichés : en devise locale pour les pays d'Afrique, toujours doublés de l'équivalent EUR ;
en EUR, CHF ou CAD pour l'Europe et le Canada. Jamais de FCFA sur une page France ou Canada.

### 6.5 Fiche pays (données sourcées)

Un fichier par pays, `data/pays/{slug}.php`, rempli **avant** toute page de ce pays. Chaque
champ porte sa source (URL + date de consultation). Champs :

- identité : nom, prépositions (« au », « en », « à »), gentilé, capitale, villes principales, fuseau horaire, indicatif, langues ;
- économie numérique : population, taux de pénétration internet et mobile, part du mobile money, secteurs porteurs ;
- paiement : devise, opérateurs mobile money (MTN MoMo, Moov, Orange Money, Wave, Airtel, M-Pesa...), agrégateurs disponibles (FedaPay, KkiaPay, CinetPay, PayDunya, Stripe...) ;
- cadre légal : loi et autorité de protection des données (APDP, CDP, ARTCI...), facturation électronique ou normalisée (e-MECeF au Bénin...), TVA, OHADA/SYSCOHADA, statut du e-commerce ;
- formation : organismes de financement (FODEFCA, FDFP, 3FPT, FAFPA, FNAFPP, OPCO...) et conditions ;
- modalités : à distance, déplacement possible, décalage horaire, langue de travail ;
- prix indicatifs en devise locale par grand service.

Une valeur introuvable reste vide : le gabarit n'affiche pas le bloc correspondant.

### 6.6 Matrice service × pays et formation × pays

Volumes : 15 services × 34 pays + externalisation × 6 = 516 pages service × pays ; les
25 formations fortes × 5 pays T1 = 125 pages formation × pays ; les 12 métiers prioritaires
× 5 pays T1 = 60 pages métier × pays. Extension aux autres tranches seulement si la tranche
précédente est indexée à 70 % ou plus.

Une page de la matrice n'est pas un pilier avec un nom de pays. Elle doit contenir au moins 5
des 8 blocs locaux suivants, chacun nourri par la fiche pays et écrit sous l'angle du service :

1. Contexte du marché du pays pour ce service (chiffres sourcés).
2. Contraintes et obligations locales qui changent le projet (données personnelles, facturation, TVA, hébergement).
3. Paiement : quels moyens intégrer ou accepter dans ce pays, et comment.
4. Prix indicatifs en devise locale et en EUR, avec ce qui fait varier le prix dans ce pays.
5. Au moins 2 cas d'usage par secteurs porteurs du pays.
6. Modalités : à distance, déplacement, fuseau, délais, langue.
7. Preuve locale : histoire client du pays ou de la région quand elle existe.
8. FAQ d'au moins 6 questions propres au pays.

Le reste de la page (méthode, livrables, technologies) est **rédigé à neuf pour chaque page**,
jamais copié du pilier. Le pilier reste la page de référence générale ; la page pays renvoie
vers lui, vers le hub pays et vers les pages sœurs (même service, pays voisins ; même pays,
services liés).

Ordre de publication : T1 pour tous les services, puis T2, T3, T4, T5. Une tranche part en
lots de 30 à 60 pages, espacés de 2 semaines. Arrêt et diagnostic si plus de 30 % d'un lot
restent « Explorée, non indexée » au bout de 4 semaines.

### 6.7 Preuves et ressources

**Histoires clients** (`/histoires/{slug}`), une par projet : INOVIS Côte d'Ivoire, Impulse
Finance, Afro Joy'ce, OBA TV, GC Pro Consulting, IK Fashion House (+ lancement IK Tissu),
QueenK Beauty (sous réserve, produits sensibles), AT Consulting International, KossKoss Select,
Laura Cosmetics, Wapy (histoire de fondateur), puis les 6 réalisations actuelles (Maho
Multiservices, Myrmasbio, OBA Production, Touré Distribution, API découpage administratif du
Bénin, portfolio Prudence). Plan d'une histoire : en bref ; le client et son contexte ; le
problème ; la frise datée des décisions ; ce qui a été livré (fonctions, technologies,
captures) ; les résultats (seulement ceux fournis par Richard ou mesurés et datés) ; ce que
Richard referait autrement ; la leçon ; services liés ; FAQ ; mention de sous-traitance quand
elle s'applique. Aucune histoire n'est publiée tant que les défauts publics du site client
listés dans les références ne sont pas corrigés.

**Histoires externes** (`/histoires/{slug}`), sourcées, ni copiées ni reprises d'Audyxa :
environ 12, dont Odoo, Air Canada (chatbot condamné), Klarna (assistant IA), Knight Capital,
British Airways (piratage de paiement), TSB (migration), Gozem, Estonie (e-gouvernement),
Afrimarket (à vérifier). Chaque fait : source et date, encadré « Point de vigilance » si
contesté, mention « n'est pas un client ».

**Comparatifs** (`/comparatifs/{slug}`), environ 25, critères publiés, jamais de classement où
Richard se met premier : Odoo vs Dolibarr ; Odoo Community vs Enterprise ; Odoo vs Dolibarr vs
Sage pour le SYSCOHADA ; Shopify vs WooCommerce vs sur mesure ; FedaPay vs KkiaPay vs CinetPay ;
Flutter vs React Native vs natif ; PWA vs application mobile ; n8n vs Make vs Zapier ; ChatGPT
vs Claude vs Gemini en entreprise ; chatbot WhatsApp vs chatbot de site ; freelance vs agence ;
externaliser en Afrique francophone vs Europe de l'Est vs Inde ; SEO vs Google Ads ; WordPress
vs sur mesure ; Lovable vs Cursor vs Claude Code ; mutualisé vs VPS vs cloud ; formation IA en
ligne vs en présentiel ; no-code vs développeur ; SEO vs GEO.

**Guides** (`/guides/{slug}`), environ 40 : prix d'un site web par pays T1 et T2 ; prix d'une
application mobile en Afrique de l'Ouest ; prix d'un e-commerce ; prix d'une intégration Odoo
et Dolibarr ; tarif d'un développeur africain pour un client européen ; coût de l'API WhatsApp
Business ; accepter le mobile money sur un site ; facture normalisée e-MECeF avec Odoo ou
Dolibarr (à vérifier auprès de la DGI) ; site conforme à la loi sur les données (Bénin,
Sénégal, Côte d'Ivoire, Loi 25 au Québec, RGPD) ; financer une formation par pays ; modèle de
cahier des charges ; audit de site en 20 vérifications ; automatiser les relances de factures
avec n8n ; agent IA WhatsApp pour la prise de commande ; contenu d'un contrat de maintenance ;
apprendre n8n ; être cité par ChatGPT (GEO) ; choisir son hébergement.

**Glossaire** : une page de 60 termes ou plus avec ancres (`DefinedTermSet`), plus environ 15
termes forts avec leur propre page de 3 200 mots (vibe coding, GEO, API REST, RAG, ERP,
SYSCOHADA dans un ERP, mobile money API, n8n, agent IA, PWA, SEO local, headless, SaaS,
chatbot, llms.txt).

**Outils** : simulateur de prix de site ou d'application (devise selon le pays choisi) ;
calculateur de rentabilité d'une automatisation. JavaScript natif, résultat calculé côté
client, page de 3 200 mots qui explique la méthode de calcul.

**Blog** : les 24 articles restent en base et sont enrichis à 3 200 mots. Trois deviennent des
comparatifs (n8n vs Make vs Zapier ; WordPress ou sur mesure ; application mobile ou site web)
avec 301. Les doublons (« combien coûte un site web » ×2) fusionnent. L'article orphelin
« robot qui prospecte 500 artisans » est relié.

### 6.8 Redirections 301

Règle : une redirection n'est activée que le jour où sa cible est publiée. D'ici là, l'ancienne
page reste en ligne. Jamais de chaîne : une ancienne URL pointe directement sur sa cible finale.
Les redirections sont tenues dans un seul fichier de données lu par le routeur, pas dans
`.htaccess`.

| Ancienne URL | Cible |
|---|---|
| `/formation-ia-entreprise` | `/formations/ia-en-entreprise` |
| `/formation-ia-entreprise-{ville}` des villes du Bénin (10) | `/formations/ia-en-entreprise/benin` |
| `/formation-ia-entreprise-abidjan`, `-dakar`, `-lome` | `/formations/ia-en-entreprise/{cote-d-ivoire, senegal, togo}` |
| `/formation-ia-entreprise-{paris, lyon, marseille}` | `/formations/ia-en-entreprise/france` |
| `/formation-ia-entreprise-bruxelles`, `-geneve` et `-lausanne`, `-montreal` et `-quebec` | `/formations/ia-en-entreprise/{belgique, suisse, canada}` |
| `/externaliser-developpement-web-{paris, lyon, marseille}` | `/services/externalisation-developpement/france` |
| `/externaliser-developpement-web-bruxelles` | `/services/externalisation-developpement/belgique` |
| `/externaliser-developpement-web-{geneve, lausanne}` | `/services/externalisation-developpement/suisse` |
| `/externaliser-developpement-web-{montreal, quebec}` | `/services/externalisation-developpement/canada` |
| `/integration-odoo-{ville}` : villes du Bénin (6) ; Abidjan ; Dakar ; Lomé | `/services/integration-odoo/{benin, cote-d-ivoire, senegal, togo}` |
| `/integration-dolibarr-{ville}` : même répartition | `/services/integration-dolibarr/{pays}` |
| `/formation-automatisation` | `/formations/n8n` |
| `/formation-outils-numeriques` | `/formations/excel-google-sheets` |
| `/formation-developpement-web`, `/services/formation-en-programmation` | `/formations/developpement-web` |
| `/formation-odoo` | `/formations/odoo-utilisateurs` |
| `/formation-dolibarr` | `/formations/dolibarr-utilisateurs` |
| `/formation-seo-visibilite-google` | `/formations/visibilite-google` |
| `/formation-vibecoding` | `/formations/vibecoding` |
| `/formation-whatsapp-business` | `/formations/whatsapp-business` |
| `/consultant-digitalisation` | `/services/consultant-digitalisation` |
| `/expert-digitalisation-entreprise` | `/services/digitalisation-d-entreprise` (fusion, même intention) |
| `/realisations/` et `/realisations/{slug}` | `/histoires/` et `/histoires/{slug}` |
| 3 articles de blog comparatifs | `/comparatifs/{slug}` |

Les redirections de richard.salanon.info restent en place au moins 12 mois ; celles qui
visent une URL déplacée ici sont mises à jour pour viser directement la cible finale.

## 7. Données et gabarits

### 7.1 Registres

Tout le contenu long vit dans des fichiers PHP versionnés sous `portfolio/data/`, sur le
modèle du registre `sujets` actuel (un fichier = une page, chargeur qui découvre les
fichiers, route et sitemap construits seuls). Seul le blog reste en base.

| Registre | Dossier | Un fichier par |
|---|---|---|
| Faits | `data/faits.php` | site |
| Services | `data/services/{service}.php` | pilier |
| Matrice | `data/services/{service}/{pays}.php` | page service × pays |
| Pays | `data/pays/{pays}.php` | pays (fiche de faits + contenu du hub) |
| Formations | `data/formations/{formation}.php` | fiche |
| Formation × pays | `data/formations/{formation}/{pays}.php` | page |
| Métiers | `data/metiers/{metier}.php`, `data/metiers/{metier}/{pays}.php` | page |
| Secteurs | `data/secteurs/{secteur}.php` | page |
| Histoires | `data/histoires/{slug}.php` | histoire |
| Comparatifs | `data/comparatifs/{slug}.php` | comparatif |
| Guides | `data/guides/{slug}.php` | guide |
| Glossaire | `data/glossaire.php` + `data/glossaire/{terme}.php` | terme fort |
| Redirections | `data/redirections.php` | site |
| Villes | `data/villes/`, `data/sujets/` (existants, conservés) | page |

Champs communs à toute page :

```php
return [
    'slug'      => 'site-vitrine-professionnel',
    'titre'     => 'Création de site vitrine professionnel',   // H1
    'title'     => '...',            // balise title, 50 à 60 caractères
    'meta'      => '...',            // 140 à 155 caractères, unique
    'en_bref'   => '...',            // 2 à 4 phrases, réponse directe
    'publie'    => '2026-11-03',     // page servie à partir de cette date (404 avant)
    'maj'       => '2026-11-03',     // dateModified et lastmod, tenue à la main
    'faits_hero'=> [['l' => 'Délai', 'v' => '2 à 4 semaines'], ...], // panneau du hero
    'sections'  => [ /* blocs typés, voir 7.3 */ ],
    'faq'       => [['q' => '...', 'r' => '...'], ...],             // 8 questions ou plus
    'sources'   => [['titre' => '...', 'url' => '...', 'date' => '2026-10-03'], ...],
    'liens'     => ['services' => [...], 'formations' => [...], 'histoires' => [...]], // maillage éditorial
];
```

### 7.2 Règle des 3 200 mots

Mesurée sur le texte visible de `<main>` rendu (sans menu, pied de page, scripts). S'applique
à toute page servie en `index`. Exceptions : mentions légales, confidentialité, CGV, 404,
résultats filtrés (servis en `noindex, follow`). Le formulaire de contact et les outils
comptent leur texte d'accompagnement.

Le volume vient de la matière, jamais du remplissage : questions réelles des clients,
tableaux de décision, étapes détaillées, cas d'usage, erreurs fréquentes, prix expliqués,
FAQ, sources. Répéter un paragraphe, gonfler une liste ou paraphraser le pilier compte comme
un échec du contrôle d'unicité (section 8).

### 7.3 Blocs de contenu

Les sections sont des tableaux typés, rendus par une bibliothèque de composants partagée
(`portfolio/partials/blocs/{type}.php`). Types :

`prose` (titre-question + paragraphes), `points` (cartes à puces titrées), `etapes` (frise
numérotée), `tableau` (légende, en-têtes, lignes), `comparaison` (critères × options),
`chiffres` (valeur + libellé + source), `cas` (cas d'usage : secteur, problème, solution,
lien), `prix` (offres, devise, ce qui fait varier), `frise` (dates, histoires), `vigilance`
(encadré), `lecon` (bloc sombre), `citation`, `checklist`, `galerie`, `cta`, `faq`, `sources`.

Le texte s'écrit en chaînes PHP entre apostrophes droites échappées, ou en syntaxe nowdoc
(`<<<'HTML'`) pour les longs passages. HTML autorisé dans les paragraphes : `strong`, `em`,
`a`, `abbr`, `br`. Chaque fichier passe `php -l` avant commit.

### 7.4 Gabarits

Un gabarit par type de page (`portfolio/{type}.php`), tous construits sur le même squelette :
`partials/tete.php` (head + schéma `@graph`), `partials/entete.php`, hero de sous-page,
blocs, boîte auteur, liens liés, bande d'appel à l'action, `partials/pied.php`. Les anciens
`pv2-*` et le template `horizon` sont remplacés ; le dashboard garde son propre gabarit.

Le routeur `route.php` résout dans l'ordre : redirections, registres (avec contrôle de la date
`publie`), 404 franc. `.htaccess` ne contient plus que les règles générales.

## 8. Contrôles qualité

Scripts PHP en ligne de commande dans `tools/qa/`, exécutés sur le site local (XAMPP avec la
base locale) avant chaque push qui ajoute ou modifie des pages. Un échec bloque le push de la
page concernée.

| Contrôle | Règle |
|---|---|
| `mots` | 3 200 mots ou plus dans `<main>` pour toute page indexable. |
| `unicite` | Bardeaux de 5 mots, après minuscules, sans accents, noms de pays et de villes remplacés par un jeton. Ressemblance maximale 40 % avec toute page sœur (même service autre pays, même pays autre service, même formation autre pays) ; 25 % maximum avec le pilier ou la fiche parente ; 60 % au moins du texte propre à la page. |
| `meta` | Title 50 à 60 caractères, meta 140 à 155, tous deux uniques ; un seul H1. |
| `schema` | JSON valide, types autorisés seulement (5.3), FAQPage égale à la FAQ visible. |
| `liens` | Aucun lien interne en 404 ou en 301 ; aucun lien vers richard.salanon.info ; liens WhatsApp testés. |
| `texte` | Aucun tiret cadratin, aucune flèche, aucun caractère de remplacement (`{{`, `TODO`, `[À COMPLÉTER]`) ; accents présents (détection des mots courants écrits sans accent). |
| `faits` | Chiffres d'identité identiques à `faits.php` sur toutes les pages et dans llms.txt. |
| `prix` | Devise conforme au pays de la page (6.4). |
| `sitemap` | Seules les pages servies en `index` et publiées ; `lastmod` = champ `maj`. |

Après déploiement, un contrôle de fumée dans le workflow vérifie en ligne : code 200, title
et canonique des pages modifiées. Il signale sans bloquer.

Règles éditoriales de fond (vérifiées en relecture, pas par script) : aucun chiffre, avis,
témoignage, client ou certification inventé ; toute donnée locale sourcée et datée ; une
intention principale par page ; contenu Audyxa et paulmaximedossou.com jamais copié.

## 9. Maillage interne

Généré depuis les registres, jamais choisi au hasard. Toute page : fil d'Ariane, au moins 3
liens entrants contextuels et 3 sortants, 3 clics maximum depuis l'accueil, aucune orpheline.

| Page | Liens obligatoires |
|---|---|
| Pilier service | ses pages pays (liste par région), services liés, formations liées, histoires qui le démontrent, comparatifs et guides du sujet |
| Service × pays | pilier, hub pays, même service dans 3 pays voisins, 3 autres services dans le même pays, histoire locale |
| Pays | ses 15 pages services, formations et métiers déclinés, villes, guides de prix du pays, pays voisins |
| Fiche formation | domaine, formations liées, pages pays existantes, métiers concernés, service lié |
| Métier | formations du catalogue utiles, secteur correspondant, pages pays existantes |
| Histoire | services démontrés, formation liée, pays du client, 3 autres histoires |
| Comparatif, guide | services et formations concernés, histoires, guides voisins |

Pied de page : services principaux, formations principales, 8 pays prioritaires et lien vers
`/zones/`, ressources, page auteur. Fini les 143 liens de villes sur chaque page.

## 10. Système de design

Référence de disposition et d'animation : dépôt privé `Deal-Club/audyxaFormation`, dossier
`site/` (`styles/tokens.css`, `styles/components.css`, `styles/motion.css`,
`components/vitrine/*.css` et `*.tsx`). Relevé détaillé dans le fichier de références. On
reproduit le comportement et les proportions ; on écrit notre propre CSS, avec nos jetons.

### 10.1 Jetons

```css
:root{
  --bg:#FFFFFF; --surface:#F5EEE6;   /* fond blanc : choix de Richard du 03/10/2026 */ --surface-2:#EEF4F3; --card:#FFFFFF;
  --ink:#14161F; --ink-soft:#343846; --muted:#626676;
  --line:#E8E1D8; --line-strong:#D5CBBE;
  --brand:#C2502F; --brand-hover:#A8401F;          /* boutons d'action, texte blanc */
  --link:#0F6B6B; --link-hover:#0B5454;            /* liens, icônes, eyebrows */
  --accent:#E0A43A;                                 /* chiffres, touches */
  --on-dark:#FFFFFF; --on-dark-soft:#D6D8E0;
  --glow:0 0 32px 14px #F3DDD2;                    /* halo de survol, signature */
  --shadow-card:0 1px 2px rgba(20,22,31,.04),0 8px 24px -12px rgba(20,22,31,.12);
  --radius-sm:6px; --radius:10px; --radius-lg:14px; --radius-xl:18px; --pill:50px;
  --ease:cubic-bezier(.22,1,.36,1); --fast:150ms; --base:250ms; --reveal:600ms;
  --container:87.5rem; --gutter:20px; --section-y:56px; --header-h:64px;
}
```

Paliers : gouttière 32 px dès 640 px et 40 px dès 1280 px ; `--section-y` 80 px dès 768 px ;
en-tête 76 px dès 1024 px. Points de rupture : 640, 768, 960, 1024, 1100, 1280. Mode sombre :
non (comme la référence) ; les bandes sombres utilisent `--ink`.

Typographie : Sora 600/700 pour h1 à h4 (`letter-spacing:-.01em; text-wrap:balance`), Plus
Jakarta Sans 400/500/600/700 pour le texte (16 px, interligne 1,65, `text-wrap:pretty`).
Échelle : h2 `clamp(1.75rem,1.3rem + 1.7vw,2.5rem)`, h1 de sous-page
`clamp(2rem,1.2rem + 3.2vw,3.5rem)` largeur 24ch, h1 d'accueil
`clamp(2rem,1.3rem + 2.6vw,3rem)` sans débordement à 320 px. Largeurs de lecture : 68 à 78ch.
Polices auto-hébergées en woff2 (sous-ensemble latin), préchargées, `font-display:swap`.

### 10.2 Composants

En-tête transparent sur le hero devenant blanc au défilement (`animation-timeline:scroll()`,
repli JS) ; méga-menus Services, Formations, Pays (cartes avec icône et 3 liens, carte sombre
d'appel à l'action, cascade d'apparition, intention de survol de 180 ms, Échap, clavier) ;
tiroir mobile ; hero d'accueil plein écran avec animation de plan de projet en CSS pur ;
hero de sous-page sable arrondi en bas avec deux halos flous, fil d'Ariane, pastille,
panneau de faits calculés depuis les données ; cartes avec halo au survol ; liste pays +
carte SVG pré-rendue (arcs pointillés animés depuis le Bénin, surbrillance au survol par
`:has()`) ; frise de méthode dont le trait se dessine ; matrice de formats en `subgrid` ;
fiche à blocs-questions avec sommaire collant (IntersectionObserver) et carte résumé ;
programme en `<details>` par jour ; FAQ en `<details>` ; tableaux défilants sur mobile ;
bandeau défilant des logos clients ; bande d'appel finale ; double bouton collant mobile
(Devis + WhatsApp) ; boîte auteur ; encart sources ; filtres de catalogue en liens réels
améliorés par JS ; fenêtre « Diagnostic gratuit » sur l'accueil (une fois par 7 jours).

Icônes SVG en ligne, aucun emoji. Ni tiret cadratin ni flèche dans les textes.

### 10.3 Animations et performance

Apparitions au défilement : attribut `data-reveal`, décalage `--i × 90 ms`, propriété
`translate` (pas `transform`), classe ajoutée par JS seulement (rien de caché sans JS), jamais
au-dessus de la ligne de flottaison. Toutes les animations neutralisées sous
`prefers-reduced-motion`. JavaScript du site : un seul fichier, moins de 15 Ko compressé.
Cibles : LCP inférieur à 2,5 s sur mobile 4G, CLS inférieur à 0,1, INP inférieur à 200 ms,
HTML inférieur à 100 Ko, images WebP ou AVIF avec `width` et `height`.

## 11. Exécution

### 11.1 Ordre

1. **Vague 0** (1 plan) : C1 complet + C3 (faits, robots, llms) + gabarits socle et
   composants (C2) + scripts de contrôle (section 8) + registres vides et formats figés.
   Déploiement : l'ancien contenu passe dans les nouveaux gabarits, sans perte.
2. **Vague 1** : refonte accueil, à-propos, page auteur, contact, hubs ; 27 piliers services ;
   60 fiches formations ; 37 pages métiers ; 34 fiches pays + hubs ; 20 secteurs ; histoires
   clients dont Richard a fourni la matière ; reprise des 24 articles.
3. **Vague 2** : matrice T1 (75 services × pays, 125 formations × pays, 60 métiers × pays) ;
   comparatifs ; guides ; glossaire ; outils ; histoires externes.
4. **Vagues 3 à 6** : matrice T2 à T5, sous condition d'indexation (6.6).

Chaque vague a son plan d'implémentation écrit (skill writing-plans) avant tout code.

### 11.2 Parallélisme

- Agent principal (cette session) : coordination, relecture, contrôles, commits, déploiement.
- Deux sessions Claude Code ouvertes par Richard : lots de rédaction ou de gabarits sans
  fichier commun.
- Sous-agents : rédaction par lots (une page par agent, consignes : fiche pays, pilier,
  règles 5.5 et 7.2, interdits 8), recherche et sourçage des fiches pays.
- Règle d'isolement : chaque lot écrit uniquement ses propres fichiers de données ; seul
  l'agent principal touche aux gabarits partagés, au routeur, au sitemap et commit.
- Chaque page rédigée passe les contrôles de la section 8 avant d'entrer dans un commit.

### 11.3 Publication

Une page est servie quand son gabarit existe et que sa date `publie` est atteinte. Les dates
sont posées par lot pour étaler la mise en ligne. Le cron quotidien existant (IndexNow +
sitemap) annonce les pages du jour. Pas de déploiement pendant qu'une lecture de sitemap est
attendue dans Search Console.

## 12. Risques

| Risque | Parade |
|---|---|
| Google classe la matrice en contenu de masse (domaine jeune, peu d'autorité) | Blocs locaux obligatoires, contrôle d'unicité, tranches, règle d'arrêt à 30 % non indexé, autorité externe en parallèle. |
| Volume de rédaction (3,5 millions de mots) et dérive de qualité | Formats figés, consignes par type, contrôles automatiques, relecture par échantillon, cadence par vagues. |
| Faits locaux faux ou périmés (lois, prix, opérateurs) | Source + date obligatoires, revue trimestrielle des fiches pays, bloc masqué si la donnée manque. |
| Affirmer des compétences ou des formations que Richard n'a pas | Validation par Richard des formations, métiers et faits avant publication. |
| Histoires clients exposant des défauts de leurs sites | Publication conditionnée à la correction (liste dans les références). |
| Régression des URL existantes | Table des redirections, contrôle `liens`, aucune URL supprimée sans 301. |
| Le CDN Hostinger bloque des robots IA | Contrôle des statistiques d'exploration, réglage hPanel. |
| Perte d'édition au dashboard pour les services | Assumée ; le blog reste éditable au dashboard. |

## 13. Ce que Richard doit fournir

Un questionnaire séparé (`docs/questionnaire-refonte.md`) reprend ces points :

1. **Faits d'identité** : années d'expérience, nombre de projets, de clients, de personnes
   formées, pays où il a réellement travaillé, profils (LinkedIn, GitHub, Malt...), adresse
   publiable ou non, horaires.
2. **Formations et métiers** : cocher les formations qu'il anime (6.3) et les publics déjà
   formés ou formables (6.3 bis), avec références autorisées.
3. **Tarifs** : grille de départ par service et par formation, en FCFA et en EUR.
4. **Histoires** : pour chacun des 11 projets, les réponses aux questions listées dans les
   références (dates, part exacte, résultats, autorisation), et la correction des défauts
   publics relevés.
5. **Logo** : l'image retenue dans ChatGPT, redessinée ensuite en SVG.
6. **Photos** : portrait récent, photos de formations ou d'ateliers (avec accord des
   participants).
7. **Hors site** : création de la fiche Google Business Profile, des profils et de l'entrée
   Wikidata, demande de crédit « Réalisé par Richard SALANON » sur ses sites clients.
