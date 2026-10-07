# Catalogue de la reprise du blog (vague 1F)

Source de vérité des rédacteurs et des vérificateurs. Instantané des articles en ligne : `docs/blog/origine/{slug}.html` et `docs/blog/origine/index.json` (lu le 07/10/2026 à 15:00:51). Règles d'écriture : `article-blog.md`. Plan : `docs/superpowers/plans/2026-10-07-vague1f-reprise-blog.md`.

## Sort des 23 articles en ligne

- **19 articles gardés et réécrits** (tableau ci-dessous).
- **2 fusions** : `combien-coute-un-site-web-professionnel-en-2026-guide-complet` est absorbé par `combien-coute-un-site-web-au-benin` ; `etre-visible-chatgpt-gemini-2026` est absorbé par `seo-2026-apparaitre-dans-les-reponses-ia`. Les quatre URL n'avaient aucune impression dans Search Console sur 16 mois ; la règle du plan garde la plus ancienne. L'article gardé reprend tout ce que l'absorbé avait d'utile.
- **2 comparatifs** : `wordpress-ou-sur-mesure-comment-choisir` devient `/comparatifs/wordpress-vs-sur-mesure` ; `application-mobile-ou-site-web-que-developper-en-premier` devient `/comparatifs/application-mobile-vs-site-web` (consigne `comparatif.md`).
- `/blog/n8n-vs-zapier-vs-make-2026` redirige déjà vers `/comparatifs/n8n-vs-make-vs-zapier`.

## Pages vers lesquelles un article peut renvoyer

Pages publiées au 07/10/2026 (vérifier le 200 le jour de la rédaction) :
- Services : `/services/` et ses piliers `/services/{slug}` : agents-ia-chatbot-whatsapp, api-rest-integrations, application-mobile-android-ios, application-web-sur-mesure, audit-etude-de-projet, audit-seo-complet, automatisation-ia, consultant-digitalisation, developpeur-web-freelance, digitalisation-d-entreprise, externalisation-developpement, formation-en-entreprise, integration-dolibarr, integration-ia-entreprise, integration-odoo, integration-whatsapp, landing-page-haute-conversion, maintenance-support, referencement-ia-geo, referencement-naturel-seo, refonte-migration-de-site, saas-espace-client, seo-local-google-business, site-e-commerce, site-vitrine-professionnel, systeme-de-reservation-en-ligne, vibe-coding.
- Formations : `/formations/` et les fiches `/formations/{slug}` : cybersecurite-employes, developpement-web, digitaliser-son-entreprise, dolibarr-utilisateurs, e-commerce, excel-google-sheets, gouvernance-ia, ia-comptables-syscohada, ia-droit-ohada, ia-en-entreprise, ia-ethique-conformite, ia-generative-dirigeants, ia-processus-metier, integrer-ia-logiciels-existants, marketing-digital-b2b, n8n, odoo-comptabilite-syscohada, odoo-ia, odoo-utilisateurs, referencement-ia-geo, strategie-transformation-digitale, vibecoding, visibilite-google, whatsapp-business, whatsapp-odoo-dolibarr-crm. Les autres fiches du catalogue sortent le 12/10 : ne les lier que si l'article est commité après cette date et que la page répond 200.
- Comparatifs : `/comparatifs/` et chatgpt-vs-claude-vs-gemini, fedapay-vs-kkiapay-vs-cinetpay, n8n-vs-make-vs-zapier, odoo-vs-dolibarr.
- Histoires : `/histoires/` et air-canada-chatbot, british-airways-piratage, hertz-accenture, knight-capital, maersk-notpetya, thomas-cook, tsb-migration.
- Autres : `/contact`, `/richard-salanon`, `/a-propos/`, `/realisations/`, `/zones/`, `/blog/` et les 19 articles gardés.
- Jamais : `/secteurs/…`, `/formations/metier/…`, `/zones/{pays}` (pas encore publiés), un article absorbé ou devenu comparatif, richard.salanon.info.

## Les 19 articles

Chaque article répond à toutes les questions de son plan (les H2 peuvent être reformulés, jamais retirés), sans longueur imposée. « Entrants » : articles qui doivent poser un lien contextuel vers celui-ci (chaque article en reçoit 3 au moins).

### Famille Digitalisation (lot 1)

**`qu-est-ce-que-la-digitalisation-d-entreprise-definition-et-guide-pour-bien-demarrer`** · Digitalisation d'entreprise
- Intention : définir la digitalisation et ce qu'elle change, fonction par fonction. Pas de méthode pas à pas (article suivant), pas de budget (PME).
- Plan : Qu'est-ce que la digitalisation d'une entreprise ? En quoi diffère-t-elle de la numérisation et de la transformation numérique ? Que change-t-elle pour la vente, la relation client, la comptabilité, les ressources humaines, la production ? Quels outils recouvre-t-elle ? Quels bénéfices et quels risques faut-il attendre ? Comment savoir si son entreprise en a besoin ? Par quoi commencer ?
- Sortants : `/services/digitalisation-d-entreprise`, `/formations/digitaliser-son-entreprise`, `/blog/comment-digitaliser-son-entreprise-le-guide-etape-par-etape`.
- Entrants : les trois autres articles de la famille.

**`comment-digitaliser-son-entreprise-le-guide-etape-par-etape`** · Digitalisation d'entreprise
- Intention : la méthode pas à pas.
- Plan : Par quel diagnostic commencer ? Comment choisir les chantiers prioritaires ? Comment choisir les outils (logiciel du marché, sur mesure, ERP) ? Comment préparer les données et les équipes ? Comment déployer sans arrêter l'activité ? Comment former les utilisateurs ? Comment mesurer le résultat ? Quelles erreurs font échouer un projet ?
- Sortants : `/services/audit-etude-de-projet`, `/services/consultant-digitalisation`, `/comparatifs/odoo-vs-dolibarr`.
- Entrants : définition, PME, Afrique francophone.

**`digitalisation-des-pme-par-o-commencer-et-quel-cot`** · Digitalisation d'entreprise
- Intention : budget et premiers chantiers d'une PME selon sa taille.
- Plan : Quels chantiers en premier pour une très petite entreprise, une PME de 10 à 50 personnes, au-delà ? Combien coûte chaque poste (site, gestion, facturation, CRM, formation), en ordres de grandeur sourcés ? Logiciel par abonnement ou installé ? Comment financer et étaler ? Comment estimer le retour sur investissement ? Quels coûts cachés prévoir ?
- Sortants : `/services/integration-odoo`, `/services/integration-dolibarr`, `/blog/combien-coute-un-site-web-au-benin`.
- Entrants : définition, méthode, IA pour les PME.

**`digitalisation-dentreprise-en-afrique-francophone-enjeux-et-bonnes-pratiques`** · Digitalisation d'entreprise
- Intention : ce qui change en Afrique francophone.
- Plan : Où en est la digitalisation des entreprises en Afrique francophone (chiffres sourcés et datés) ? Quel rôle joue le mobile money ? Comment faire avec une connexion instable et les coupures ? Que demandent SYSCOHADA et la facture normalisée ? Que disent les lois sur les données personnelles (Bénin, Sénégal, Côte d'Ivoire) ? Comment trouver et former les compétences ? Quelles bonnes pratiques retenir ?
- Sortants : `/comparatifs/fedapay-vs-kkiapay-vs-cinetpay`, `/formations/odoo-comptabilite-syscohada`, `/zones/`.
- Entrants : définition, méthode, e-commerce.

### Famille IA et visibilité dans les moteurs d'IA (lot 1)

**`seo-2026-apparaitre-dans-les-reponses-ia`** · SEO · absorbe `etre-visible-chatgpt-gemini-2026`
- Intention : être cité par ChatGPT, Gemini, Perplexity et les AI Overviews (GEO).
- Plan : Comment les moteurs d'IA choisissent-ils leurs sources ? Qu'est-ce que le GEO et en quoi diffère-t-il du SEO ? Quelles actions concrètes pour être cité (les 5 actions de l'article absorbé, développées) ? Comment structurer une page pour être repris ? Quel rôle pour llms.txt et les robots des IA ? Comment mesurer qu'on est cité ? Quelles erreurs éviter ?
- Sortants : `/services/referencement-ia-geo`, `/formations/referencement-ia-geo`, `/blog/google-ai-overviews-impact-trafic`.
- Entrants : AI Overviews, 7 erreurs, pack local.

**`google-ai-overviews-impact-trafic`** · SEO
- Intention : mesurer et limiter l'effet des AI Overviews sur son trafic.
- Plan : Que sont les AI Overviews et où s'affichent-ils (pays, langues, date) ? Que disent les études publiées sur la baisse des clics (chiffres sourcés et datés) ? Quelles requêtes sont les plus touchées ? Comment mesurer l'effet sur son site dans Search Console ? Comment adapter ses pages ? Faut-il changer de stratégie de contenu ?
- Sortants : `/services/referencement-naturel-seo`, `/services/audit-seo-complet`, `/blog/seo-2026-apparaitre-dans-les-reponses-ia`.
- Entrants : GEO, 7 erreurs, site lent.

**`ia-pour-les-pme-par-ou-commencer`** · IA
- Intention : premiers usages de l'IA dans une PME, coûts, données, risques.
- Plan : Quelles tâches confier en premier à l'IA ? Quels outils et à quel prix (tarifs officiels datés) ? Que faire des données des clients et des salariés ? Comment éviter les erreurs de l'IA (relecture, cas Air Canada) ? Comment former l'équipe ? Comment mesurer le temps gagné ? Quand passer à un assistant sur mesure ?
- Sortants : `/comparatifs/chatgpt-vs-claude-vs-gemini`, `/formations/ia-en-entreprise`, `/histoires/air-canada-chatbot`.
- Entrants : chatbot WhatsApp, PME, prospection.

**`chatbot-whatsapp-entreprise-support-client`** · IA
- Intention : un assistant WhatsApp pour le service client.
- Plan : Que peut faire un assistant WhatsApp et que doit-il laisser à un humain ? WhatsApp Business ou API WhatsApp Business : quelle différence ? Combien coûtent les messages selon les tarifs de Meta (vérifiés au navigateur, datés) ? Comment organiser le relais vers un conseiller ? Quelles données peut-il traiter et sous quelles règles ? Comment le mettre en place étape par étape ? Comment mesurer sa qualité ?
- Sortants : `/services/agents-ia-chatbot-whatsapp`, `/services/integration-whatsapp`, `/formations/whatsapp-business`.
- Entrants : IA pour les PME, CRM gratuit, robot.

### Famille Référencement (lot 2)

**`7-erreurs-qui-tuent-votre-referencement`** · SEO
- Intention : diagnostiquer et corriger les erreurs de référencement les plus fréquentes.
- Plan : une question par erreur (au moins 7 : indexation bloquée, pages en double, titres et descriptions, lenteur, contenu mince, liens cassés, absence de suivi), puis : Comment faire un diagnostic en une heure avec Search Console ? Dans quel ordre corriger ?
- Sortants : `/services/audit-seo-complet`, `/services/referencement-naturel-seo`, `/blog/pourquoi-votre-site-est-lent`.
- Entrants : site lent, landing page, GEO.

**`referencement-local-dominer-pack-local-google`** · SEO local
- Intention : la stratégie du pack local, facteurs et ordre de priorité.
- Plan : Qu'est-ce que le pack local et quand s'affiche-t-il ? Quels facteurs Google cite-t-il (pertinence, distance, notoriété, d'après sa page d'aide datée) ? Dans quel ordre travailler fiche, avis, site et citations ? Comment viser plusieurs villes sans pages en double ? Comment suivre ses positions locales ? Quelles erreurs font perdre sa place ?
- Sortants : `/services/seo-local-google-business`, `/blog/google-business-profile-guide-complet`, `/blog/obtenir-des-avis-google-clients`.
- Entrants : fiche Google, avis, 7 erreurs.

**`google-business-profile-guide-complet`** · SEO local
- Intention : créer, valider et tenir sa fiche Google Business Profile pas à pas.
- Plan : Qui peut créer une fiche et avec quelle adresse ? Comment la créer et la valider (méthodes de validation en vigueur, datées) ? Quelles rubriques remplir et comment ? Quelles photos et publications ? Comment gérer les questions et les modifications proposées par d'autres ? Que faire en cas de suspension ? Comment lire les statistiques ?
- Sortants : `/services/seo-local-google-business`, `/formations/visibilite-google`, `/blog/referencement-local-dominer-pack-local-google`.
- Entrants : pack local, avis, landing page.

**`obtenir-des-avis-google-clients`** · SEO local
- Intention : obtenir des avis Google dans les règles et y répondre.
- Plan : Pourquoi les avis comptent-ils (chiffres sourcés et datés) ? Que permettent et qu'interdisent les règles de Google (avis achetés, filtrés, récompensés) ? Comment et quand demander un avis (lien direct, QR code, WhatsApp) ? Comment répondre à un avis positif, à un avis négatif ? Que faire d'un faux avis ? Comment en faire un suivi régulier ?
- Sortants : `/services/seo-local-google-business`, `/blog/google-business-profile-guide-complet`, `/blog/referencement-local-dominer-pack-local-google`.
- Entrants : pack local, fiche Google, CRM gratuit.

### Famille Sites web (lot 2)

**`combien-coute-un-site-web-au-benin`** · Conseils · absorbe `combien-coute-un-site-web-professionnel-en-2026-guide-complet`
- Intention : le prix d'un site web professionnel, au Bénin et ailleurs, et ce qui le fait varier.
- Plan : Combien coûte un site au Bénin selon le type (landing page, vitrine, e-commerce, sur mesure), avec les tarifs de départ de Richard et des fourchettes du marché sourcées ? Et pour un client en France, en Belgique, au Canada (ordres de grandeur sourcés, en euros) ? Qu'est-ce qui fait varier le prix ? Que coûtent le domaine, l'hébergement et la maintenance chaque année ? Freelance, agence ou plateforme : que paie-t-on ? Comment lire un devis et repérer les oublis ?
- Sortants : `/services/site-vitrine-professionnel`, `/services/landing-page-haute-conversion`, `/services/maintenance-support`.
- Entrants : PME, e-commerce, landing page.

**`creer-site-e-commerce-vendre-en-ligne-2026`** · E-commerce
- Intention : lancer une boutique en ligne.
- Plan : Faut-il un site, une plateforme ou les réseaux sociaux ? Quelles étapes de l'idée à la première vente ? Comment encaisser (carte, mobile money, paiement à la livraison) ? Comment organiser la livraison et les retours ? Quelles obligations légales (mentions, conditions de vente, données) ? Combien prévoir ? Comment attirer les premiers clients ?
- Sortants : `/services/site-e-commerce`, `/comparatifs/fedapay-vs-kkiapay-vs-cinetpay`, `/formations/e-commerce`.
- Entrants : prix d'un site, Afrique francophone, landing page.

**`landing-page-haute-conversion-7-elements`** · Conseils
- Intention : construire une landing page qui convertit, élément par élément.
- Plan : Qu'est-ce qu'une landing page et quand en faut-il une ? Une question par élément (au moins 7 : promesse, preuve, offre, appel à l'action, formulaire, vitesse, mobile) ? Comment tester deux versions ? Quels taux de conversion attendre (sources datées) ? Quelles erreurs font fuir ?
- Sortants : `/services/landing-page-haute-conversion`, `/blog/pourquoi-votre-site-est-lent`, `/blog/combien-coute-un-site-web-au-benin`.
- Entrants : prix d'un site, e-commerce, 7 erreurs.

**`pourquoi-votre-site-est-lent`** · Développement web
- Intention : diagnostiquer la lenteur d'un site et la corriger.
- Plan : Comment mesurer la vitesse (PageSpeed Insights, Core Web Vitals, seuils officiels) ? Quelles causes reviennent le plus (images, hébergement, extensions, scripts tiers, polices) ? Comment corriger chacune ? Que change un hébergement ou un CDN ? Quel effet sur le référencement et les ventes (sources datées) ? Quand faut-il refaire le site ?
- Sortants : `/services/refonte-migration-de-site`, `/services/maintenance-support`, `/blog/7-erreurs-qui-tuent-votre-referencement`.
- Entrants : 7 erreurs, landing page, AI Overviews.

### Famille Automatisation (lot 3)

**`crm-gratuit-whatsapp-business-google-sheets`** · Automatisation
- Intention : monter un suivi client gratuit avec WhatsApp Business et Google Sheets.
- Plan : Que peut faire ce montage et quelles sont ses limites ? Comment préparer le tableau (colonnes, étapes) ? Comment utiliser les étiquettes et les réponses rapides de WhatsApp Business ? Comment relier les deux sans erreur de saisie ? Comment respecter les règles sur les données ? Quand passer à un vrai CRM ou à un ERP ?
- Sortants : `/formations/whatsapp-business`, `/formations/whatsapp-odoo-dolibarr-crm`, `/blog/chatbot-whatsapp-entreprise-support-client`.
- Entrants : prospection, robot, chatbot WhatsApp.

**`automatiser-sa-prospection-n8n-make`** · Automatisation
- Intention : automatiser sa prospection, étapes, outils, consentement, limites.
- Plan : Quelles tâches de prospection automatiser, lesquelles garder à la main ? À quoi ressemble un scénario type de bout en bout ? Avec quel outil (renvoi au comparatif n8n, Make, Zapier, sans le refaire) ? Comment rester dans les règles (consentement, RGPD, lois locales, règles de WhatsApp et de LinkedIn) ? Combien cela coûte-t-il ? Comment mesurer le résultat ? Quelles erreurs grillent un fichier de contacts ?
- Sortants : `/comparatifs/n8n-vs-make-vs-zapier`, `/services/automatisation-ia`, `/formations/n8n`.
- Entrants : robot, CRM gratuit, IA pour les PME.

**`jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris`** · Automatisation & Scraping Web
- Intention : le retour d'expérience de Richard sur son robot. Garder son récit à la première personne et seulement les faits de l'article d'origine ; ne pas en faire un projet phare ni ajouter de résultat chiffré.
- Plan : Pourquoi construire ce robot ? Comment fonctionne-t-il, étape par étape ? Quelles difficultés techniques sont apparues ? Qu'est-ce qui a marché, qu'est-ce qui n'a pas marché ? Quelles règles faut-il respecter pour collecter et contacter (données publiques, consentement) ? Que referait Richard autrement ? Comment transposer l'idée à une autre activité ?
- Sortants : `/blog/automatiser-sa-prospection-n8n-make`, `/services/automatisation-ia`, `/blog/crm-gratuit-whatsapp-business-google-sheets`.
- Entrants : prospection, CRM gratuit, chatbot WhatsApp.

## Lots

1. Digitalisation (4) et IA (4), dont le survivant GEO.
2. Référencement (4) et Sites web (4), dont le survivant « combien coûte ».
3. Automatisation (3).

Paires à surveiller pour la ressemblance : les quatre articles de digitalisation ; les trois articles de référencement local ; les trois articles d'automatisation ; GEO et AI Overviews ; prix d'un site et landing page.
