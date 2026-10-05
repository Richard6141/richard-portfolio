# Catalogue des formations (vague 1B) : table de référence des rédacteurs

Lue avec `fiche-formation.md`. Une ligne par fiche : slug, titre de la spec 6.3, domaine,
forte (oui = lot A, publiée le 2026-10-05 ; non = lot B, publiée le 2026-10-12), angle propre
(ce que la fiche traite et que ses sœurs ne traitent pas), ancienne page à reprendre, piliers
services liés.

Règle des liens dans le TEXTE : seulement les fiches « oui » (lot A), les 8 domaines, le hub,
les piliers, les comparatifs, les histoires, /contact, /richard-salanon, /zones/. Les fiches
« non » se citent par le champ `liens` uniquement.

## Intelligence artificielle (`intelligence-artificielle`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| ia-en-entreprise | IA en entreprise : productivité des équipes | oui | usage quotidien des assistants (ChatGPT, Claude, Gemini, Copilot) par les équipes : rédiger, synthétiser, analyser sur leurs documents | /formation-ia-entreprise (ne pas reprendre les 19 pages de ville, qui restent en ligne) | integration-ia-entreprise, formation-en-entreprise |
| ia-generative-dirigeants | IA générative pour dirigeants | oui | décider, budgéter, choisir les outils et piloter un premier projet IA ; pas de prise en main détaillée | | consultant-digitalisation, integration-ia-entreprise |
| prompt-engineering | Prompt engineering professionnel | non | écrire des consignes fiables, gabarits de prompts, évaluation des réponses | | integration-ia-entreprise |
| agents-ia-assistants | Agents IA et assistants internes | non | concevoir des assistants qui agissent (outils, mémoire, garde-fous), GPTs, projets Claude | | agents-ia-chatbot-whatsapp, integration-ia-entreprise |
| rag-chatbot-documents | RAG : chatbot sur vos documents internes | non | indexer ses documents, répondre avec citations, limites et mise à jour | | integration-ia-entreprise, agents-ia-chatbot-whatsapp |
| ia-ethique-conformite | IA, éthique et conformité des données | oui | droit et éthique pour les équipes : données personnelles, secret, biais, AI Act, loi n° 2017-20 | | integration-ia-entreprise, consultant-digitalisation |
| contenu-avec-ia | Créer du contenu avec l'IA | non | textes, visuels, vidéos courtes pour le marketing, avec relecture et droits | | referencement-naturel-seo |
| ia-comptables-syscohada | IA pour comptables (SYSCOHADA) | oui | usages de l'IA par les comptables en zone OHADA : saisie, rapprochement, analyse, contrôle | | integration-ia-entreprise, integration-odoo |

## Automatisation (`automatisation`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| n8n | n8n de zéro à l'autonomie | oui | premiers flux à l'autonomie : déclencheurs, nœuds, données, erreurs simples | /formation-automatisation (elle couvrait n8n et Make : garder Make pour la fiche make) | automatisation-ia |
| n8n-avance | n8n avancé | non | sous-flux, gestion d'erreurs, auto-hébergement, files, IA dans n8n | | automatisation-ia, api-rest-integrations |
| make | Make de zéro à expert | non | l'outil Make : scénarios, routeurs, itérateurs, opérations et coûts | | automatisation-ia |
| whatsapp-business | WhatsApp Business pour vendre | oui | vendre avec l'application WhatsApp Business : catalogue, étiquettes, réponses rapides, statuts | /formation-whatsapp-business | integration-whatsapp |
| chatbot-whatsapp | Chatbot WhatsApp et API WhatsApp Business | non | API WhatsApp Business (Cloud API), modèles de messages, coûts Meta, robot | | agents-ia-chatbot-whatsapp, integration-whatsapp |
| integrations-api-no-code | Intégrations API en no-code et low-code | non | lire une documentation d'API, authentification, webhooks, sans coder | | api-rest-integrations, automatisation-ia |

## Développement (`developpement`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| vibecoding | Vibecoding : coder avec Claude, Cursor, Copilot | oui | développer avec des assistants de code sans produire du code jetable : cadrage, revue, tests | /formation-vibecoding | vibe-coding |
| developpement-web | Développement web (HTML, CSS, JS, PHP, MySQL) | oui | bases du web à un premier site dynamique | /formation-developpement-web (et l'ancienne fiche /services/formation-en-programmation) | developpeur-web-freelance, application-web-sur-mesure |
| laravel-php | Laravel et PHP | non | framework Laravel : routes, Eloquent, authentification, déploiement | | application-web-sur-mesure, api-rest-integrations |
| nextjs-react | Next.js et React | non | composants, rendu serveur, routage, déploiement | | application-web-sur-mesure |
| wordpress-woocommerce | WordPress et WooCommerce | non | site et boutique WordPress administrés par le client | | site-vitrine-professionnel, site-e-commerce |
| flutter | Développement mobile Flutter | non | application Android et iOS avec Flutter, publication dans les magasins | | application-mobile-android-ios |
| api-rest | API REST | non | concevoir, sécuriser, documenter et tester une API | | api-rest-integrations |
| sql-analystes | SQL pour analystes métiers | non | requêtes de lecture pour analyser ses données, sans être développeur | | application-web-sur-mesure |
| creer-son-saas | Créer son SaaS de A à Z | non | de l'idée au premier client payant : abonnements, multi-clients, paiement | | saas-espace-client |

## ERP et outils de gestion (`erp-gestion`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| odoo-utilisateurs | Odoo pour vos équipes | oui | prise en main par poste : ventes, achats, stock, facturation | /formation-odoo | integration-odoo |
| odoo-dirigeants | Odoo pour dirigeants | non | tableaux de bord, rapports, validation, pilotage | | integration-odoo |
| odoo-comptabilite-syscohada | Odoo comptabilité SYSCOHADA | oui | comptabilité OHADA dans Odoo : plan comptable, journaux, TVA, états | | integration-odoo |
| dolibarr-utilisateurs | Dolibarr pour vos équipes | oui | cycle complet d'une PME dans Dolibarr, du devis au règlement | /formation-dolibarr | integration-dolibarr |
| adoption-erp | Réussir l'adoption d'un ERP | non | projet ERP côté entreprise : choix, reprise, rôles, adoption | | integration-odoo, integration-dolibarr, audit-etude-de-projet |
| crm-pipeline | CRM : pipeline commercial et reporting | non | pipeline, relances, rapports commerciaux, quel que soit l'outil | | integration-odoo, digitalisation-d-entreprise |
| excel-google-sheets | Excel et Google Sheets pour la gestion | oui | tableurs de gestion fiables : formules, tableaux croisés, contrôles | /formation-outils-numeriques (elle couvrait aussi messagerie et fichiers partagés : garder le socle bureautique utile) | digitalisation-d-entreprise |
| microsoft-365-google-workspace | Microsoft 365 et Google Workspace avancés | non | messagerie, agenda, partage, droits, sécurité des suites | | digitalisation-d-entreprise |
| power-bi-looker-studio | Tableaux de bord Power BI et Looker Studio | non | indicateurs et tableaux de bord à partir des données de l'entreprise | | digitalisation-d-entreprise |
| outils-collaboratifs | Outils collaboratifs : Notion, Trello, Asana, Teams | non | organiser le travail d'équipe et choisir l'outil | | digitalisation-d-entreprise |

## Marketing et visibilité (`marketing-visibilite`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| visibilite-google | Visibilité Google : fiche, avis, SEO local | oui | fiche Google Business, avis conformes aux règles de Google, SEO local | /formation-seo-visibilite-google | seo-local-google-business, referencement-naturel-seo |
| seo-contenu | SEO et marketing de contenu | non | référencement naturel par le contenu : mots-clés, rédaction, maillage | | referencement-naturel-seo, audit-seo-complet |
| referencement-ia-geo | Référencement IA (GEO) | oui | être cité par ChatGPT, Gemini, Perplexity : formation des équipes, pas la prestation | | referencement-ia-geo |
| marketing-digital-b2b | Marketing digital B2B | oui | acquisition de clients professionnels : ciblage, contenus, prospection, suivi | | landing-page-haute-conversion, referencement-naturel-seo |
| linkedin-reseaux-sociaux | LinkedIn et réseaux sociaux d'entreprise | non | profils, pages, ligne éditoriale, régularité | | referencement-naturel-seo |
| publicite-meta-google-ads | Publicité Meta Ads et Google Ads | non | campagnes payantes, budgets, suivi des conversions | | landing-page-haute-conversion |
| emailing-automation | Emailing et marketing automation | non | listes, consentement, séquences, délivrabilité | | automatisation-ia |
| e-commerce | Vendre en ligne : e-commerce | oui | ouvrir et faire tourner une boutique : catalogue, paiement, livraison, service client | | site-e-commerce |
| analytics-ga4 | Google Analytics 4 et pilotage | non | mesure, événements, conversions, rapports | | audit-seo-complet |

## Cybersécurité et IT (`cybersecurite-it`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| cybersecurite-employes | Cybersécurité pour les employés | oui | réflexes des salariés : hameçonnage, mots de passe, double authentification, appareils | | maintenance-support |
| securite-donnees-dirigeants | Sécurité des données et sauvegardes pour dirigeants | non | décisions de direction : sauvegardes, accès, prestataires, incident | | maintenance-support, audit-etude-de-projet |
| cloud-hebergement | Cloud et hébergement pour décideurs | non | choisir un hébergement ou un cloud, coûts, réversibilité | | maintenance-support |
| gestion-projet-agile | Gestion de projet IT agile | non | mener un projet numérique par itérations côté client | | audit-etude-de-projet |

## Transformation digitale (`transformation-digitale`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| strategie-transformation-digitale | Stratégie de transformation digitale | oui | feuille de route de direction : diagnostic, priorités, budget, indicateurs | | consultant-digitalisation, digitalisation-d-entreprise |
| digitalisation-processus | Digitalisation des processus métiers | non | cartographier un processus et l'outiller | | digitalisation-d-entreprise |
| conduite-du-changement | Conduite du changement numérique | non | faire adopter un outil : communication, formation, relais | | digitalisation-d-entreprise |
| chef-de-projet-digital | Chef de projet digital et product owner | non | rôle, backlog, priorisation, recette | | audit-etude-de-projet |
| data-literacy | Décider avec les données (data literacy) | non | lire, questionner et utiliser les chiffres pour décider | | digitalisation-d-entreprise |
| digitaliser-son-entreprise | Digitaliser son entreprise pas à pas | oui | petite structure : par où commencer, outils simples, étapes, budget | | digitalisation-d-entreprise, site-vitrine-professionnel |

## IA dans vos systèmes existants (`ia-systemes-existants`)

| Slug | Titre | Forte | Angle propre | Ancienne page | Services liés |
|---|---|---|---|---|---|
| integrer-ia-logiciels-existants | Intégrer l'IA dans ses logiciels existants | oui | technique : API des modèles, connecteurs, données, coûts, sécurité | | integration-ia-entreprise, api-rest-integrations |
| ia-processus-metier | IA dans les processus métier : cartographier, automatiser, contrôler | oui | choisir les étapes d'un processus à confier à l'IA, et garder le contrôle humain | | integration-ia-entreprise, automatisation-ia |
| odoo-ia | Odoo et IA | oui | fonctions IA d'Odoo et IA reliée à Odoo | | integration-odoo, integration-ia-entreprise |
| dolibarr-ia | Dolibarr et IA | non | IA reliée à Dolibarr par modules et API | | integration-dolibarr, integration-ia-entreprise |
| whatsapp-odoo-dolibarr-crm | WhatsApp relié à Odoo, Dolibarr et au CRM | oui | relier WhatsApp aux logiciels de gestion : commandes, relances, historique client | | integration-whatsapp, integration-odoo, integration-dolibarr |
| ia-droit-ohada | IA et droit OHADA : recherche, rédaction, veille | oui | juristes et avocats en zone OHADA : recherche, rédaction, veille, secret professionnel | | integration-ia-entreprise |
| ia-audit-controle | IA pour l'audit, le contrôle et la conformité | non | auditeurs et contrôleurs : échantillonnage, analyse, traçabilité | | integration-ia-entreprise |
| gouvernance-ia | Gouverner l'IA dans l'entreprise : charte, données, responsabilités | oui | charte, inventaire des usages, rôles, contrôle, conformité | | consultant-digitalisation, integration-ia-entreprise |

## Piliers services (27, liens autorisés)

site-vitrine-professionnel, site-e-commerce, application-mobile-android-ios, application-web-sur-mesure, referencement-naturel-seo, referencement-ia-geo, automatisation-ia, agents-ia-chatbot-whatsapp, integration-ia-entreprise, vibe-coding, integration-whatsapp, integration-odoo, integration-dolibarr, digitalisation-d-entreprise, maintenance-support, formation-en-entreprise, developpeur-web-freelance, externalisation-developpement, landing-page-haute-conversion, refonte-migration-de-site, saas-espace-client, api-rest-integrations, systeme-de-reservation-en-ligne, audit-seo-complet, seo-local-google-business, audit-etude-de-projet, consultant-digitalisation.

## Comparatifs et histoires publiés

Comparatifs : odoo-vs-dolibarr, n8n-vs-make-vs-zapier, fedapay-vs-kkiapay-vs-cinetpay, chatgpt-vs-claude-vs-gemini.
Histoires : knight-capital, thomas-cook, tsb-migration, hertz-accenture, maersk-notpetya, british-airways-piratage, air-canada-chatbot.

## Faits déjà vérifiés (à reprendre tels quels)

- **Tarifs WhatsApp de Meta** (page de tarification lue dans un navigateur le 2026-10-05) : facturation par message depuis le 1er juillet 2025 ; depuis le 1er octobre 2026, chaque numéro professionnel a un quota mensuel de 1 000 messages de service gratuits, non reportable, facturés au-delà ; un compte sans moyen de paiement cesse d'envoyer ses messages de service une fois le quota épuisé ; les organisations gouvernementales et à but non lucratif éligibles restent gratuites au-delà du quota jusqu'au 31 décembre 2027. WebFetch renvoie une version anglaise périmée de cette page (« sans plafond ») : ne pas s'y fier.
- **Gratuité** : le premier échange, le cadrage et le devis sont gratuits (hub des services publié). Aucune autre gratuité (séance d'essai, suivi offert) n'est annoncée.
- **Règlement européen sur l'IA, article 4** (questions et réponses de la Commission, mise à jour du 27 juillet 2026, lue dans un navigateur le 2026-10-05) : obligation de maîtrise de l'IA applicable depuis le 2 février 2025 ; contrôle et sanctions à partir du 3 août 2026 ; l'omnibus numérique sur l'IA, entré en vigueur mi-juillet 2026, maintient l'obligation pour fournisseurs et utilisateurs professionnels mais n'impose plus de niveau « suffisant » ; la formation du personnel à la surveillance humaine reste obligatoire pour les systèmes à haut risque.
- **Tarifs d'Odoo** (odoo.com/fr_FR/pricing lue dans un navigateur le 2026-10-05) : une application gratuite ; Standard 19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € (en mensuel : 24,90 €, puis 31,10 €) ; Personnalisé 35,90 € puis 44,90 € (en mensuel : 44,90 €, puis 56,90 €) ; utilisateur léger 7,90 €. Odoo 20.0 est la dernière version (septembre 2026).
