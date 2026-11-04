<?php
// ============================================================
// data/pays/maroc.php · Page pays « Maroc » (vague 1D, tranche T4).
// Richard n'a pas encore travaillé au Maroc : il peut accompagner à distance
// (catalogue-pays, « Déjà travaillé » = non). Devise des devis : euro, aucun
// montant chiffré. Pays hors OHADA : clé 'ohada' absente de la fiche.
// Toutes les clés de la fiche vérifiées le 06/10/2026 contre les pages citées.
// Faits externes relevés le 06/10/2026 sur les sites de l'ANRT, du HCP, de
// l'Office des changes, de l'OFPPT, des opérateurs, dans le Bulletin officiel
// (loi de finances 2026) et dans les textes de loi du ministère de la Justice.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Un prestataire de Cotonou pour vos paiements CMI, votre Odoo et vos flux n8n au Maroc',
    'title'   => 'Digitalisation pour entreprises au Maroc | Richard SALANON',
    'meta'    => 'Entreprise au Maroc ? Richard SALANON conçoit à distance votre site avec paiement CMI, vos automatisations, Odoo et la formation de vos équipes, en euros.',
    'en_bref' => 'Richard peut accompagner à distance les entreprises au Maroc : sites et boutiques en ligne reliés au paiement par carte (CMI) ou par portefeuille mobile, automatisations, déploiement d\'Odoo, intégrations d\'intelligence artificielle et formation des équipes. Il travaille depuis Cotonou, avec une heure d\'écart depuis le retour du Maroc à l\'heure de Greenwich. Chaque projet est cadré par un échange gratuit, puis chiffré sur devis, en euros. Réponse sous 24 heures.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => [
            'v'      => 'Rabat (capitale administrative et politique ; Casablanca est la capitale économique)',
            'source' => 'https://fr.wikipedia.org/wiki/Maroc',
            'date'   => '2026-10-06',
        ],
        'indicatif' => [
            'v'      => '+212',
            'source' => 'https://www.anrt.ma/missions/numerotation',
            'date'   => '2026-10-06',
        ],
        'fuseau' => [
            'v'      => 'UTC+0 depuis le 20 septembre 2026 (retour à l\'heure de Greenwich, sans heure d\'été) : une heure de moins que Cotonou',
            'source' => 'https://data.iana.org/time-zones/tzdb/africa',
            'date'   => '2026-10-06',
        ],
        'langues' => [
            'v'      => ['arabe (langue officielle)', 'amazigh ou tamazight (langue officielle)'],
            'source' => 'https://www.constituteproject.org/constitution/Morocco_2011',
            'date'   => '2026-10-06',
        ],
        'population' => [
            'v'      => '36 828 330 habitants au 1er septembre 2024, selon le recensement général',
            'source' => 'https://www.hcp.ma/Population-legale-du-Royaume-du-Maroc-repartie-par-regions-provinces-et-prefectures-et-communes-selon-les-resultats-du_a3974.html',
            'date'   => '2026-10-06',
        ],
        'villes' => [
            'v'      => ['Casablanca (3,24 millions d\'habitants en 2024)', 'Tanger', 'Fès', 'Marrakech', 'Salé', 'Meknès', 'Rabat'],
            'source' => 'https://fr.hespress.com/395096-395096.html',
            'date'   => '2026-10-06',
        ],
        'internet' => [
            'v'      => 'Plus de 41 millions d\'abonnements à Internet fin mars 2026, soit un taux de pénétration de 111,54 %',
            'source' => 'https://www.anrt.ma/a-propos/communiques/observatoires-du-secteur-au-titre-du-t-1-2026',
            'date'   => '2026-10-06',
        ],
        'mobile' => [
            'v'      => '57,06 millions de lignes mobiles fin mars 2026, soit 154,93 % de la population ; 85,4 % en prépayé',
            'source' => 'https://www.anrt.ma/sites/default/files/2026-06/Observatoire%20ANRT%20-%20Mobile%20-%20T1-2026.pdf',
            'date'   => '2026-10-06',
        ],
        'mobile_money' => [
            'v'      => '13,7 millions de portefeuilles mobiles (m-wallets) fin 2024, contre 10,4 millions fin 2023, selon Bank Al-Maghrib',
            'source' => 'https://fr.le360.ma/economie/le-paiement-mobile-simpose-enfin-au-maroc-32-de-croissance-en-un-an_4CSBI3ZFINFALEHBJO3YDDCC5M/',
            'date'   => '2026-10-06',
        ],
        'secteurs' => [
            'v'      => ['automobile (154,5 milliards de dirhams exportés en 2025)', 'phosphates et dérivés', 'aéronautique', 'textile et cuir'],
            'source' => 'https://www.oc.gov.ma/sites/default/files/2026-01/IMEE%20D%C3%A9c%202025.pdf',
            'date'   => '2026-10-06',
        ],
        'devise' => [
            'v'      => 'Dirham marocain (MAD)',
            'source' => 'https://www.oc.gov.ma/sites/default/files/2026-01/IMEE%20D%C3%A9c%202025.pdf',
            'date'   => '2026-10-06',
        ],
        'operateurs' => [
            'v'      => ['MT Cash (Maroc Telecom)', 'Orange Money', 'inwi money'],
            'source' => 'https://www.verdict.co.uk/mobile-money-financial-morocco/',
            'date'   => '2026-10-06',
        ],
        'agregateurs' => [
            'v'      => ['CMI (Centre monétique interbancaire)'],
            'source' => 'https://www.cmi.co.ma',
            'date'   => '2026-10-06',
        ],
        'donnees' => [
            'v'      => 'Loi n° 09-08, promulguée par le dahir n° 1-09-15 du 18 février 2009 (Bulletin officiel n° 5714 du 5 mars 2009)',
            'source' => 'https://adala.justice.gov.ma/api/uploads/2024/04/30/Protection%20des%20personnes%20physiques-1714464099884.pdf',
            'date'   => '2026-10-06',
        ],
        'autorite' => [
            'v'      => 'CNDP, Commission nationale de contrôle de la protection des données à caractère personnel',
            'source' => 'https://adala.justice.gov.ma/api/uploads/2024/04/30/Protection%20des%20personnes%20physiques-1714464099884.pdf',
            'date'   => '2026-10-06',
        ],
        'facturation' => [
            'v'      => 'Comptabilité tenue sous format électronique et adresse électronique obligatoire (loi de finances 2026, article 145) ; calendrier de la facture électronique à confirmer auprès de la DGI',
            'source' => 'https://www.sgg.gov.ma/BO/FR/2873/2025/BO_7465-bis_fr.pdf',
            'date'   => '2026-10-06',
        ],
        'tva' => [
            'v'      => 'Taux normal de 20 % (article 99 du code général des impôts, version de la loi de finances 2026)',
            'source' => 'https://www.sgg.gov.ma/BO/FR/2873/2025/BO_7465-bis_fr.pdf',
            'date'   => '2026-10-06',
        ],
        'ecommerce' => [
            'v'      => 'Loi n° 31-08 sur la protection du consommateur (dahir n° 1-11-03 du 18 février 2011), avec un chapitre sur la vente à distance ; renvoie à la loi n° 53-05',
            'source' => 'https://adala.justice.gov.ma/api/uploads/2024/03/01/protection%20de%20consommateur-1709283839988.pdf',
            'date'   => '2026-10-06',
        ],
        'financement' => [
            'v'      => 'Contrats spéciaux de formation (CSF) de l\'OFPPT, pour les employeurs assujettis à la taxe de formation professionnelle et à jour auprès de la CNSS',
            'source' => 'https://www.ofppt.ma/en/eligibility',
            'date'   => '2026-10-06',
        ],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '1 heure de moins qu\'à Cotonou (UTC+0)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que disent les chiffres de l\'ANRT sur le mobile et Internet au Maroc, et que changent-ils pour un projet ?',
            'paragraphes' => [
                'Le marché est équipé, et il est équipé en téléphones. Selon l\'<a href="https://www.anrt.ma/sites/default/files/2026-06/Observatoire%20ANRT%20-%20Mobile%20-%20T1-2026.pdf">observatoire de la téléphonie mobile de l\'ANRT</a>, le régulateur des télécommunications, le parc comptait 57,06 millions de lignes fin mars 2026, soit 154,93 % de la population. Le parc était de 59,16 millions fin décembre 2025 : l\'ANRT attribue la baisse aux opérations de fiabilisation des parcs, notamment l\'identification des abonnés. Dans le même observatoire, 85,4 % des lignes sont prépayées : le client marocain ordinaire recharge son crédit, il ne signe pas d\'abonnement.',
                'Côté Internet, le <a href="https://www.anrt.ma/a-propos/communiques/observatoires-du-secteur-au-titre-du-t-1-2026">communiqué de l\'ANRT du 26 juin 2026</a> annonce un parc de plus de 41 millions d\'abonnements, soit un taux de pénétration de 111,54 %, avec 3,22 millions d\'utilisateurs de la 5G sur 8 400 sites. Le <a href="https://www.hcp.ma/Population-legale-du-Royaume-du-Maroc-repartie-par-regions-provinces-et-prefectures-et-communes-selon-les-resultats-du_a3974.html">Haut-Commissariat au Plan</a> dénombre 36 828 330 habitants au 1er septembre 2024, dont 23,1 millions en ville.',
                'Pour un projet, cela se traduit en trois décisions. Un site se conçoit d\'abord pour l\'écran du téléphone, avec des pages légères. Un parcours de commande doit accepter la carte bancaire marocaine et, de plus en plus, le portefeuille mobile. Et l\'interface se prévoit en français et en arabe : l\'arabe et l\'amazigh sont les deux langues officielles de la Constitution de 2011, alors que le français reste la langue des affaires et des devis.',
                'Reste une réserve de méthode : un taux de pénétration supérieur à 100 % compte des lignes, pas des personnes. Une même personne peut posséder plusieurs cartes SIM, et les 57 millions de lignes ne disent rien de la qualité de la couverture hors des villes. Avant de promettre à un client des milliers de visites mobiles, Richard préfère mesurer son audience réelle avec les statistiques du site, plutôt que de se reposer sur un chiffre national.',
            ],
        ],
        [
            'type'   => 'fiche',
            'titre'  => 'Quels faits sur le Maroc faut-il connaître avant de lancer un projet numérique ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment encaisser un client marocain : carte du CMI, portefeuille mobile ou passerelle ?',
            'paragraphes' => [
                'La carte bancaire passe par le <a href="https://www.cmi.co.ma">CMI</a>, le Centre monétique interbancaire, qui se présente comme l\'acquéreur de paiement historique et leader des commerçants marocains ; il a été fondé en 2004 par neuf banques marocaines qui en sont les actionnaires. Pour une boutique en ligne marocaine, c\'est l\'interlocuteur habituel : la banque du commerçant lui fournit un contrat d\'accepteur de paiement à distance, puis le CMI donne accès à sa passerelle. Son site met aussi en avant une offre de paiement multidevise, à examiner si votre clientèle paie depuis l\'étranger.',
                'Les portefeuilles mobiles forment le second canal. <a href="https://www.mtcash.ma/services-mtcash/">MT Cash</a> (Maroc Telecom), <a href="https://www.orange.ma/orange-money">Orange Money</a> et <a href="https://inwimoney.ma/fr">inwi money</a> sont les trois services de portefeuille mobile lancés par les opérateurs de télécommunications. MT Cash annonce le paiement chez un commerçant par numéro de téléphone ou par code QR, sans frais pour le client ; Orange Money propose l\'envoi d\'argent, la recharge et le paiement de factures. Selon Bank Al-Maghrib, relayée par <a href="https://fr.le360.ma/economie/le-paiement-mobile-simpose-enfin-au-maroc-32-de-croissance-en-un-an_4CSBI3ZFINFALEHBJO3YDDCC5M/">le360</a>, le pays comptait 13,7 millions de m-wallets fin 2024, contre 10,4 millions un an plus tôt.',
                'Entre les deux, des passerelles en ligne simplifient l\'intégration. <a href="https://youcanpay.com/">YouCan Pay</a> publie des modules pour WooCommerce, Magento, PrestaShop et Joomla, et affiche pour les cartes marocaines 3,9 % de commission plus 2 dirhams par transaction réussie, selon sa page consultée le 6 octobre 2026. Ces barèmes changent : le montant à retenir est celui du contrat que votre banque ou votre prestataire vous remet, pas celui d\'un article.',
                'Une intégration de paiement suit des étapes classiques. On choisit le ou les moyens de paiement avec votre banque. On obtient un environnement de test, on branche la commande, on traite les cas d\'échec et d\'abandon, puis on rapproche chaque paiement de sa commande, avant la mise en ligne. Le site, la boutique, le logiciel de gestion et le compte du prestataire doivent parler du même montant, en dirhams, sans arrondi qui diverge d\'un système à l\'autre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Maroc ?',
            'paragraphes' => [
                'Au Maroc, la protection des données personnelles repose sur la loi n° 09-08, promulguée par le dahir n° 1-09-15 du 18 février 2009 et publiée au Bulletin officiel n° 5714 du 5 mars 2009 (<a href="https://adala.justice.gov.ma/api/uploads/2024/04/30/Protection%20des%20personnes%20physiques-1714464099884.pdf">texte du ministère de la Justice</a>). Son autorité est la Commission nationale de contrôle de la protection des données à caractère personnel, la CNDP. Selon l\'article 12, un traitement fait l\'objet d\'une déclaration préalable dans les cas généraux, et d\'une autorisation préalable pour certaines catégories, dont les données sensibles.',
                'Un site marocain qui collecte des noms, des numéros de téléphone ou des commandes est concerné dès qu\'il possède un formulaire de contact, une inscription ou un panier. Richard conçoit les formulaires et les mentions d\'information avec cette obligation en tête. L\'entreprise marocaine reste responsable de son traitement ; le prestataire doit pouvoir expliquer quelles données il voit, où elles sont stockées et qui y accède.',
                'Les données qui sortent du pays demandent une attention particulière. D\'après l\'article 43 de la loi, le transfert vers un État étranger n\'est permis que si cet État assure un niveau de protection suffisant, la CNDP établissant la liste des États concernés ; l\'article 44 prévoit des dérogations, dont le consentement exprès de la personne. Un prestataire établi au Bénin qui accède à une base marocaine à distance pose cette question : elle se règle au cadrage, avec le juriste ou le correspondant de l\'entreprise, avant le premier accès.',
                'La facturation évolue aussi. La loi de finances 2026, publiée au <a href="https://www.sgg.gov.ma/BO/FR/2873/2025/BO_7465-bis_fr.pdf">Bulletin officiel n° 7465 bis du 15 décembre 2025</a>, modifie l\'article 145 du code général des impôts : la comptabilité doit être tenue sous format électronique, et tout contribuable doit détenir une adresse électronique. Pour la facture électronique elle-même, ce texte ne fixe ni format ni calendrier : les modalités et les dates d\'entrée en vigueur par catégorie d\'entreprise sont à confirmer auprès de la DGI avant de figer un module de facturation.',
                'La TVA, enfin. L\'article 99 du code général des impôts, dans la version de la loi de finances 2026, fixe le taux normal à 20 %, avec un taux de 10 % pour des opérations listées. L\'article 112 prévoit que le client établi au Maroc joint à sa déclaration un relevé des contribuables non résidents : le client marocain d\'un prestataire non résident, comme Richard, a donc une écriture à passer dans sa déclaration. Les devis sont établis en euros ; le traitement de la TVA sur la facture se vérifie avec votre expert-comptable, car les cas particuliers sont nombreux.',
                'Le commerce en ligne suit la loi n° 31-08 sur la protection du consommateur, qui encadre la vente à distance, et renvoie à la loi n° 53-05 sur l\'échange électronique de données juridiques, d\'après le <a href="https://adala.justice.gov.ma/api/uploads/2024/03/01/protection%20de%20consommateur-1709283839988.pdf">texte publié au Bulletin officiel n° 5932 du 7 avril 2011</a>. Avant le contrat, l\'offre doit indiquer les modalités de paiement et de livraison, la durée de validité de l\'offre et du prix, et l\'existence du droit de rétractation ; le client doit pouvoir confirmer ou modifier sa commande, et, en cas de litige, la preuve de ces informations incombe au fournisseur (articles 29 et 34). Le Maroc n\'est pas membre de l\'OHADA : aucun plan SYSCOHADA ici.',
                'Dernier point : la loi n° 05-20 sur la cybersécurité vise les systèmes d\'information sensibles, notamment ceux des administrations et des infrastructures d\'importance vitale. Une entreprise qui travaille pour elles doit poser la question de l\'hébergement et du choix du prestataire cloud dès le cahier des charges, avec son responsable de la sécurité.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises du Maroc ?',
            'legende' => 'Besoins que Richard rencontre le plus souvent chez les entreprises, rapprochés de ce qui existe au Maroc ; chaque service renvoie à sa page, avec son déroulé et ses livrables.',
            'entetes' => ['Besoin typique au Maroc', 'Service de Richard', 'Page'],
            'lignes'  => [
                ['Vendre en ligne avec la carte bancaire (CMI) et un portefeuille mobile', 'Boutique en ligne avec paiement, livraison et suivi des commandes', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Présenter une entreprise en français et en arabe, lisible sur téléphone', 'Site vitrine rapide, bilingue, avec formulaires conformes à la loi 09-08', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Remplacer un tableur ou un logiciel ancien par un outil adapté à un métier', 'Application web conçue autour de vos règles de gestion', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Relier stock, ventes, achats et comptabilité', 'Déploiement d\'Odoo par paliers, avec reprise des données et formation', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Répondre aux clients sur WhatsApp sans y passer la journée', 'Connexion à l\'API WhatsApp, messages types, suivi des commandes', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Supprimer les ressaisies entre fichiers, formulaires et messagerie', 'Flux n8n ou Make, avec journal des erreurs', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Connecter le site, la caisse et le logiciel comptable', 'API et connecteurs documentés', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Recevoir des réservations sans double saisie', 'Calendrier en ligne, acomptes, rappels', '<a href="/services/systeme-de-reservation-en-ligne">Système de réservation en ligne</a>'],
                ['Être trouvé par des clients qui cherchent en français depuis Casablanca, Rabat ou Marrakech', 'Audit et référencement naturel', '<a href="/services/referencement-naturel-seo">Référencement naturel</a>'],
                ['Faire adopter les outils par les équipes', 'Formation sur vos données, à distance', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
                ['Décider par où commencer quand tout paraît urgent', 'Cadrage, priorités et feuille de route chiffrée', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs du Maroc ?',
            'items' => [
                [
                    'secteur'  => 'Tourisme et hébergement',
                    'probleme' => 'Le Maroc a reçu 19,8 millions de touristes en 2025 selon le ministère, mais un riad ou un petit hôtel reçoit encore ses demandes par WhatsApp, par e-mail et par des plateformes, sans calendrier unique.',
                    'solution' => 'Un calendrier de réservation relié à une page bilingue, des acomptes par carte, des rappels envoyés par WhatsApp et une fiche Google à jour. Le client voit la disponibilité réelle, l\'établissement n\'enregistre plus deux séjours sur la même nuit.',
                    'lien'     => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Voir le système de réservation en ligne'],
                ],
                [
                    'secteur'  => 'Automobile et équipementiers',
                    'probleme' => 'Les exportations automobiles ont atteint 154,5 milliards de dirhams en 2025, en recul de 2 % selon l\'Office des changes. Les sous-traitants qui fournissent ces constructeurs doivent suivre leurs lots, leurs achats et leurs coûts au plus juste.',
                    'solution' => 'Un déploiement d\'Odoo par paliers : achats et stock d\'abord, puis fabrication et facturation, avec suivi par lots et valorisation validée par le comptable. La reprise des données de l\'ancien fichier se fait avant la bascule, jamais pendant.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Voir l\'intégration Odoo'],
                ],
                [
                    'secteur'  => 'Aéronautique et sous-traitance industrielle',
                    'probleme' => 'Les exportations de l\'aéronautique ont progressé de 10 % en 2025, à 19,1 milliards de dirhams. Une PME qui travaille pour ce secteur doit prouver ce qu\'elle a fabriqué, quand et par qui, et le prouver vite.',
                    'solution' => 'Une application web qui enregistre chaque étape, les contrôles et les pièces jointes, avec des droits par rôle et un historique qu\'on ne peut pas réécrire. Elle remplace les classeurs et les messages éparpillés, sans prétendre se substituer à l\'audit de votre donneur d\'ordre.',
                    'lien'     => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Voir l\'application web sur mesure'],
                ],
                [
                    'secteur'  => 'Textile et cuir',
                    'probleme' => 'Les exportations de textile et cuir ont reculé de 4,5 % en 2025, selon l\'Office des changes. Un atelier ou une marque qui dépend d\'un seul grand client gagne à ouvrir un second canal, en ligne.',
                    'solution' => 'Une boutique en français, en arabe et en anglais, avec paiement par le CMI, prix en dirhams et en euros, et un module de livraison. Une marque peut ainsi vendre à la diaspora sans quitter l\'atelier.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Voir le site e-commerce'],
                ],
                [
                    'secteur'  => 'Phosphates, engrais et fournisseurs industriels',
                    'probleme' => 'Les phosphates et dérivés ont rapporté 99,8 milliards de dirhams à l\'exportation en 2025, en hausse de 14,6 %. Autour des grands groupes, des sociétés de maintenance et de transport consolident encore chaque semaine des fichiers de plusieurs sites.',
                    'solution' => 'Un flux n8n qui lit les fichiers déposés, vérifie les totaux, signale les écarts par message et alimente un tableau de bord. L\'équipe garde la main sur les règles de contrôle, qu\'elle apprend à modifier elle-même pendant la formation.',
                    'lien'     => ['url' => '/services/automatisation-ia', 'texte' => 'Voir l\'automatisation'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former une équipe marocaine, et les contrats spéciaux de formation de l\'OFPPT peuvent-ils la financer ?',
            'paragraphes' => [
                'Depuis Cotonou, Richard peut animer ses formations à distance pour les équipes marocaines, à partir des fichiers et des outils de leur entreprise plutôt que d\'un cas d\'école. Parmi les thèmes utiles à une équipe, on trouve des séances sur l\'usage quotidien des assistants d\'IA par les équipes (<a href="/formations/ia-en-entreprise">IA en entreprise</a>), sur la <a href="/formations/ia-ethique-conformite">conformité des données avec l\'IA</a>, sur <a href="/formations/n8n">n8n</a> pour automatiser, sur <a href="/formations/whatsapp-business">WhatsApp Business</a> pour vendre, sur <a href="/formations/odoo-utilisateurs">Odoo pour les équipes</a> et sur <a href="/formations/e-commerce">la vente en ligne</a>. Richard a déjà formé plus de 200 personnes.',
                'Côté financement, le dispositif à connaître est celui des contrats spéciaux de formation de l\'OFPPT, l\'Office de la formation professionnelle et de la promotion du travail. Selon la <a href="https://www.ofppt.ma/en/special-training-contracts-csf">page de l\'OFPPT sur les CSF</a>, ce mécanisme vise à accroître la demande de formation en cours d\'emploi des entreprises, en particulier des PME ; les PME, les petites et moyennes industries et les très petites entreprises peuvent accéder à tous les programmes de formation.',
                'Les <a href="https://www.ofppt.ma/en/eligibility">conditions d\'éligibilité</a> sont précises : l\'employeur doit être assujetti à la taxe de formation professionnelle et en règle avec la CNSS pour l\'« année TFP », qui court du 1er juillet de l\'année N-2 au 30 juin de l\'année N-1. L\'éligibilité est vérifiée chaque mois à partir des données de la CNSS, et un certificat d\'accès au système est délivré. Les demandes de l\'année N peuvent être déposées dès octobre de l\'année N-1, et le dossier financier de remboursement doit être déposé au plus tard le 30 avril de l\'année N+1.',
                'Reste une question que ces conditions ne règlent pas : le financement d\'un intervenant établi hors du Maroc. Avant de bâtir un budget sur une prise en charge, demandez à l\'OFPPT, ou au cabinet qui monte votre dossier, si une formation à distance donnée depuis le Bénin est admise. Richard ne promet aucun financement : il fournit le programme, la durée et le devis dont l\'OFPPT a besoin, et ajuste le contenu au plan de formation de l\'entreprise.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'intro' => 'Richard travaille depuis Cotonou et accompagne les entreprises marocaines à distance. Voici ce qui change, ou pas, par rapport à un prestataire installé à Casablanca.',
            'items' => [
                ['titre' => 'Fuseau horaire et décalage', 'texte' => 'Depuis le 20 septembre 2026, le Maroc est revenu à l\'heure de Greenwich (UTC+0), sans heure d\'été, comme l\'enregistre la base des fuseaux horaires de l\'IANA. Cotonou est en UTC+1 : le Maroc a donc une heure de retard sur Cotonou, toute l\'année. Les réunions se calent sur les horaires de travail des deux côtés.'],
                ['titre' => 'Langue', 'texte' => 'Les échanges, les devis et la documentation sont en français, avec l\'anglais en renfort. Pour une interface en arabe, le texte est fourni et validé par votre équipe ; Richard peut prévoir le site pour l\'affichage de droite à gauche.'],
                ['titre' => 'Devise des devis', 'texte' => 'Les devis sont établis en euros. Parmi les modes de paiement de sa fiche, le virement, la carte bancaire et PayPal conviennent à un règlement depuis l\'étranger. Les règles de change qui s\'appliquent à une société marocaine qui paie l\'étranger se vérifient auprès de sa banque ou de son comptable avant la signature.'],
                ['titre' => 'Outils de suivi et disponibilité', 'texte' => 'Le premier échange, le cadrage et le devis sont gratuits ; les points de suivi peuvent se tenir par visioconférence ou par WhatsApp, et chaque message reçoit une réponse sous 24 heures. Richard est joignable chaque jour de 07 h 00 à 20 h 00, heure de Cotonou.'],
                ['titre' => 'Déplacement', 'texte' => 'Aucun déplacement n\'est prévu : l\'accompagnement se fait entièrement à distance, du cadrage à la formation.'],
            ],
        ],
        [
            'type'      => 'prix',
            'titre'     => 'Combien coûte un projet numérique pour une entreprise du Maroc ?',
            'intro'     => 'Aucun tarif fixe n\'est annoncé pour le Maroc : chaque projet est chiffré sur devis, en euros, après un cadrage gratuit. Les trois familles ci-dessous donnent l\'ordre de déroulement, pas un montant.',
            'items'     => [
                ['offre' => 'Site vitrine ou page de présentation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Contenu en français, et en arabe selon votre besoin', 'Formulaires conformes à la loi 09-08', 'Délai habituel d\'un site vitrine : 1 à 3 semaines']],
                ['offre' => 'Boutique en ligne avec paiement', 'prix' => 'Sur devis, en euros', 'inclus' => ['Choix des moyens de paiement avec votre banque', 'Tests de paiement et rapprochement des commandes', 'Prix en dirhams, et en euros si vous vendez à l\'étranger']],
                ['offre' => 'Application sur mesure, Odoo ou automatisation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Application sur mesure : 1 à 3 mois', 'Odoo : 4 à 8 semaines pour un premier module en production', 'Formation des équipes et documentation']],
            ],
            'variations' => [
                'Le nombre de moyens de paiement : une carte par le CMI ne se branche pas comme trois portefeuilles mobiles, chacun avec son contrat et ses tests.',
                'La langue : un site en arabe ajoute le sens d\'écriture de droite à gauche, la relecture par un locuteur et des polices adaptées.',
                'L\'état de vos données : un fichier de clients propre se reprend vite, trois fichiers contradictoires prennent des semaines.',
                'Les formalités avec la CNDP : elles dépendent de ce que vous collectez, et elles reviennent à l\'entreprise, pas au prestataire.',
                'Le taux de change entre l\'euro et le dirham, quand votre budget est en dirhams : un devis en euros se convertit au jour du paiement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes éviter dans un projet numérique au Maroc ?',
            'intro' => 'Ces pièges reviennent quand un projet est conçu ailleurs puis posé tel quel sur le marché marocain.',
            'items' => [
                ['titre' => 'Brancher un paiement sans contrat d\'accepteur', 'texte' => 'Un site peut être prêt avant que la banque ait signé le contrat qui ouvre l\'accès à la passerelle. Lancez la demande bancaire en premier : c\'est elle qui fixe le calendrier, pas le développement.'],
                ['titre' => 'Oublier la déclaration à la CNDP', 'texte' => 'Un formulaire de contact ou un panier traite des données personnelles. Une déclaration préalable, ou une autorisation, est la règle de la loi 09-08 ; une page de mentions copiée ailleurs ne la remplace pas.'],
                ['titre' => 'Coder un module de facture électronique avant le calendrier officiel', 'texte' => 'Les dates d\'entrée en vigueur se confirment auprès de la DGI. Un module écrit sur des hypothèses se jette. Mieux vaut un logiciel capable d\'évoluer et un contrat qui prévoit la mise à jour.'],
                ['titre' => 'Penser « mobile seulement » ou « ordinateur seulement »', 'texte' => 'Avec 154,93 % de lignes par habitant, le mobile domine, mais les achats d\'entreprise, les devis et la gestion passent encore par l\'ordinateur. Testez les deux avant la mise en ligne.'],
                ['titre' => 'Traduire sans adapter', 'texte' => 'Un texte traduit mot à mot de l\'arabe au français, ou l\'inverse, donne des boutons mal alignés et des phrases bancales. Faites relire l\'interface par quelqu\'un qui lit les deux langues.'],
                ['titre' => 'Compter la population en lignes', 'texte' => 'Le parc mobile est supérieur au nombre d\'habitants parce qu\'il compte des cartes SIM. Fixer un objectif de clients à partir de ce chiffre mène à des prévisions fausses.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faire si l\'on ignore ce que la loi marocaine impose au projet ?',
            'texte' => 'Richard n\'est ni avocat ni expert-comptable : les textes cités ici sont des repères de cadrage, avec leurs sources. Pour la déclaration CNDP, les règles de change et la TVA, faites valider les choix par un juriste ou un comptable marocain avant la mise en production.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre projet numérique marocain à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut accompagner à distance les entreprises au Maroc. Formé à EPITECH (2022), il cumule plus de 6 ans d\'expérience, plus de 50 projets livrés et plus de 100 clients. Ses références portent sur quinze pays d\'Afrique francophone, d\'Europe et d\'Amérique du Nord, et la même méthode de cadrage à distance s\'applique aux projets marocains.',
                'Deux projets de son portfolio ressemblent aux questions que posent les entreprises marocaines. Pour Laura Cosmetics, une boutique entre Paris et Abidjan, il a conçu des prix en deux devises, deux zones de livraison et un back-office avec stocks et coupons : un projet réalisé en sous-traitance pour Digital Développement. Pour KossKoss Select, au Cameroun, il a mis en ligne une boutique payée par Orange Money et MTN MoMo, en direct pour le client.',
                'Il développe aussi ses propres produits, comme <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Vous pouvez parcourir ses <a href="/realisations/">réalisations</a>, lire sa <a href="/richard-salanon">présentation</a> et comparer les outils dans les <a href="/comparatifs/odoo-vs-dolibarr">comparatifs Odoo et Dolibarr</a> ou <a href="/comparatifs/n8n-vs-make-vs-zapier">n8n, Make et Zapier</a>. Pour un projet de gestion, le cadrage commence par vos opérations réelles, pas par un logiciel.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer un projet au Maroc ?',
            'texte' => 'Commencez par les démarches qui dépendent d\'autres : le contrat bancaire pour le paiement, la déclaration à la CNDP, la confirmation du calendrier de facturation. Le développement avance ensuite sur des bases qui ne bougent plus.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet numérique au Maroc ?',
            'texte'  => 'Décrivez votre activité, votre ville, le paiement visé (CMI ou portefeuille mobile), vos langues et vos contraintes de données : vous recevez une réponse sous 24 heures, puis, après un premier échange gratuit, un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard peut-il accompagner une entreprise marocaine sans se déplacer ?', 'r' => 'Oui : Richard peut accompagner à distance les entreprises au Maroc, du cadrage à la formation, avec les mêmes méthodes que pour ses clients d\'Afrique et d\'Europe. Le premier échange, gratuit, sert à vérifier que le projet s\'adapte à ce mode de travail.'],
        ['q' => 'Un site marocain doit-il être déclaré à la CNDP ?', 'r' => 'Selon l\'article 12 de la loi n° 09-08, un traitement de données personnelles fait l\'objet d\'une déclaration préalable à la CNDP, ou d\'une autorisation préalable pour certaines catégories comme les données sensibles. Un site avec formulaire de contact, inscription ou panier est concerné. Le régime exact dépend des données collectées : à valider avec un juriste marocain.'],
        ['q' => 'Quel moyen de paiement choisir pour une boutique en ligne au Maroc ?', 'r' => 'Pour la carte bancaire, le CMI est le prestataire de référence des banques marocaines. Pour les portefeuilles mobiles, MT Cash, Orange Money et inwi money sont les trois services des opérateurs. Une passerelle comme YouCan Pay peut simplifier l\'intégration. Le choix se fait avec votre banque, selon votre public et vos frais.'],
        ['q' => 'La facture électronique est-elle obligatoire au Maroc ?', 'r' => 'La loi de finances 2026 exige une comptabilité tenue sous format électronique et une adresse électronique pour tout contribuable. Pour la facture électronique elle-même, le calendrier par catégorie d\'entreprise se confirme auprès de la DGI avant de bâtir un module de facturation.'],
        ['q' => 'Quel est le taux de TVA au Maroc ?', 'r' => 'L\'article 99 du code général des impôts, dans la version de la loi de finances 2026, fixe un taux normal de 20 % et un taux de 10 % pour des opérations listées. Pour les prestations rendues par un prestataire étranger, l\'article 112 prévoit un relevé des contribuables non résidents dans la déclaration du client : à voir avec votre comptable.'],
        ['q' => 'Y a-t-il un décalage horaire entre le Maroc et Cotonou ?', 'r' => 'Oui, une heure. Depuis le 20 septembre 2026, le Maroc est en UTC+0 (heure de Greenwich) et Cotonou en UTC+1 : le Maroc a une heure de retard. Les réunions sont planifiées en tenant compte de cet écart, et Richard est joignable de 07 h 00 à 20 h 00, heure de Cotonou.'],
        ['q' => 'Peut-on financer une formation par les contrats spéciaux de formation de l\'OFPPT ?', 'r' => 'Le dispositif s\'adresse aux employeurs assujettis à la taxe de formation professionnelle et à jour auprès de la CNSS, avec un certificat d\'accès. Les conditions publiées ne disent pas si un intervenant établi hors du Maroc est admis : demandez-le à l\'OFPPT avant de compter sur le remboursement.'],
        ['q' => 'Où héberger les données d\'une entreprise marocaine ?', 'r' => 'Cela dépend de la nature des données. Pour les données personnelles, la CNDP encadre les transferts vers l\'étranger. Pour les systèmes d\'information sensibles, la loi n° 05-20 sur la cybersécurité s\'applique. Posez la question dès le cahier des charges.'],
        ['q' => 'Un site pour le Maroc doit-il être en arabe ?', 'r' => 'La Constitution de 2011 reconnaît l\'arabe et l\'amazigh comme langues officielles, et le français reste la langue des affaires. Une version arabe se décide selon votre clientèle ; Richard peut prévoir l\'affichage de droite à gauche, et le texte arabe est relu par votre équipe.'],
        ['q' => 'Combien coûte un projet numérique pour une entreprise du Maroc ?', 'r' => 'Aucun montant n\'est annoncé à l\'avance. Le prix est fixé sur devis, en euros, après un cadrage gratuit. Il dépend surtout du nombre de moyens de paiement, de la langue, de l\'état de vos données et des formalités. À titre d\'ordre de délai, un site vitrine demande 1 à 3 semaines et une application sur mesure 1 à 3 mois.'],
    ],

    'sources' => [
        ['titre' => 'ANRT, observatoires du secteur au titre du premier trimestre 2026 (communiqué du 26 juin 2026)', 'url' => 'https://www.anrt.ma/a-propos/communiques/observatoires-du-secteur-au-titre-du-t-1-2026', 'date' => '2026-10-06'],
        ['titre' => 'ANRT, observatoire de la téléphonie mobile au Maroc, situation fin mars 2026', 'url' => 'https://www.anrt.ma/sites/default/files/2026-06/Observatoire%20ANRT%20-%20Mobile%20-%20T1-2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Haut-Commissariat au Plan, population légale du Royaume (recensement 2024)', 'url' => 'https://www.hcp.ma/Population-legale-du-Royaume-du-Maroc-repartie-par-regions-provinces-et-prefectures-et-communes-selon-les-resultats-du_a3974.html', 'date' => '2026-10-06'],
        ['titre' => 'le360, le paiement mobile au Maroc : 13,7 millions de m-wallets fin 2024 (données de Bank Al-Maghrib)', 'url' => 'https://fr.le360.ma/economie/le-paiement-mobile-simpose-enfin-au-maroc-32-de-croissance-en-un-an_4CSBI3ZFINFALEHBJO3YDDCC5M/', 'date' => '2026-10-06'],
        ['titre' => 'Bulletin officiel n° 7465 bis, loi de finances pour l\'année budgétaire 2026', 'url' => 'https://www.sgg.gov.ma/BO/FR/2873/2025/BO_7465-bis_fr.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Ministère de la Justice, dahir n° 1-09-15 et loi n° 09-08 sur la protection des données personnelles (Bulletin officiel n° 5714 du 5 mars 2009)', 'url' => 'https://adala.justice.gov.ma/api/uploads/2024/04/30/Protection%20des%20personnes%20physiques-1714464099884.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Office des changes, indicateurs mensuels des échanges extérieurs, décembre 2025', 'url' => 'https://www.oc.gov.ma/sites/default/files/2026-01/IMEE%20D%C3%A9c%202025.pdf', 'date' => '2026-10-06'],
        ['titre' => 'OFPPT, contrats spéciaux de formation (CSF)', 'url' => 'https://www.ofppt.ma/en/special-training-contracts-csf', 'date' => '2026-10-06'],
        ['titre' => 'OFPPT, conditions d\'éligibilité au système CSF', 'url' => 'https://www.ofppt.ma/en/eligibility', 'date' => '2026-10-06'],
        ['titre' => 'CMI, Centre monétique interbancaire', 'url' => 'https://www.cmi.co.ma', 'date' => '2026-10-06'],
        ['titre' => 'MT Cash, services de paiement mobile de Maroc Telecom', 'url' => 'https://www.mtcash.ma/services-mtcash/', 'date' => '2026-10-06'],
        ['titre' => 'Orange Maroc, Orange Money', 'url' => 'https://www.orange.ma/orange-money', 'date' => '2026-10-06'],
        ['titre' => 'inwi money, présentation du service', 'url' => 'https://inwimoney.ma/fr', 'date' => '2026-10-06'],
        ['titre' => 'YouCan Pay, passerelle de paiement marocaine (modules et commissions)', 'url' => 'https://youcanpay.com/', 'date' => '2026-10-06'],
        ['titre' => 'Constitution du Royaume du Maroc de 2011, article 5 (langues officielles)', 'url' => 'https://www.constituteproject.org/constitution/Morocco_2011', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires, zone Africa/Casablanca (retour à UTC+0 le 20 septembre 2026)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'ANRT, plan national de numérotation (indicatif 212)', 'url' => 'https://www.anrt.ma/missions/numerotation', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, Maroc (capitale)', 'url' => 'https://fr.wikipedia.org/wiki/Maroc', 'date' => '2026-10-06'],
        ['titre' => 'Hespress, les sept plus grandes villes du Maroc selon le recensement 2024', 'url' => 'https://fr.hespress.com/395096-395096.html', 'date' => '2026-10-06'],
        ['titre' => 'Verdict, mobile money au Maroc : MT Cash, Orange Money, inwi money', 'url' => 'https://www.verdict.co.uk/mobile-money-financial-morocco/', 'date' => '2026-10-06'],
        ['titre' => 'Ministère de la Justice, dahir n° 1-11-03 et loi n° 31-08 sur la protection du consommateur (Bulletin officiel n° 5932 du 7 avril 2011)', 'url' => 'https://adala.justice.gov.ma/api/uploads/2024/03/01/protection%20de%20consommateur-1709283839988.pdf', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, le tourisme marocain atteint 19,8 millions de visiteurs en 2025', 'url' => 'https://fr.allafrica.com/stories/202601070302.html', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'application-web-sur-mesure', 'integration-odoo', 'integration-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'referencement-naturel-seo', 'formation-en-entreprise', 'systeme-de-reservation-en-ligne', 'consultant-digitalisation', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['ia-en-entreprise', 'n8n', 'whatsapp-business', 'odoo-utilisateurs', 'e-commerce', 'ia-ethique-conformite'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['commercants-e-commercants', 'hotellerie-restauration', 'experts-comptables'],
    ],
];
