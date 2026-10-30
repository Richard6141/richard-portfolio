<?php
// ============================================================
// data/pays/rd-congo.php · Page pays « RD Congo » (vague 1D, tranche 2, CDF, devis en euros).
// Faits externes relevés le 06/10/2026 : ARPTC (chiffres du quatrième trimestre 2025 relayés
// par Agence Ecofin), DataReportal (Digital 2026), DGI et plateforme e-DEF, Code du numérique
// (ordonnance-loi n° 23/010), Droit-Numérique.cd, OHADA, BCC, INPP, USGS, PawaPay.
// TVA : taux normal de 16 % lu dans l'ordonnance-loi n° 10/001 du 20 août 2010.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Du cobalt du Katanga aux commerces de Kinshasa : Richard SALANON met logiciels, paiements mobiles et factures conformes au service des PME congolaises",
    'title'   => "Consultant en digitalisation en RD Congo | Richard SALANON",
    'meta'    => "Sites, applications, automatisation, IA, Odoo et Dolibarr pour les entreprises de RD Congo : mobile money, facture normalisée, devis en euros.",
    'en_bref' => "Pour les entreprises de RD Congo, Richard SALANON bâtit des sites, des applications et des automatisations, installe Odoo ou Dolibarr et forme les équipes, à distance depuis Cotonou, en français. Ses devis sont en euros, alors que le franc congolais et le dollar américain se côtoient dans les prix. Le cadre à respecter tient en trois points : la facture normalisée de la DGI, le Code du numérique de 2023 pour les données et les trois réseaux M-Pesa, Orange Money et Airtel Money pour les paiements.",
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale' => ['v' => 'Kinshasa', 'source' => 'https://fr.wikipedia.org/wiki/République_démocratique_du_Congo', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Lubumbashi', 'Mbuji-Mayi', 'Kisangani', 'Goma'], 'source' => 'https://fr.wikipedia.org/wiki/République_démocratique_du_Congo', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'Deux fuseaux, sans heure d\'été : UTC+1 à Kinshasa (comme Cotonou), UTC+2 à Lubumbashi, Mbuji-Mayi et Kananga', 'source' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+243', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Français (langue officielle)', 'Lingala, kikongo ya leta (kituba), swahili et tshiluba (langues nationales)'], 'source' => 'https://fr.wikipedia.org/wiki/République_démocratique_du_Congo', 'date' => '2026-10-06'],
        'population' => ['v' => '114 millions d\'habitants en octobre 2025 selon les Nations unies, dont 48,8 % en milieu urbain', 'source' => 'https://datareportal.com/reports/digital-2026-democratic-republic-of-the-congo', 'date' => '2026-10-06'],
        'internet' => ['v' => '34,7 millions d\'internautes, soit 30,5 % des habitants, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-democratic-republic-of-the-congo', 'date' => '2026-10-06'],
        'mobile' => ['v' => '73,9 millions d\'abonnements mobiles actifs fin 2025, soit 65,9 % de pénétration selon l\'ARPTC, d\'après Agence Ecofin', 'source' => 'https://www.osiris.sn/rdc-l-internet-mobile-devient-la-principale-source-de-revenus-des-telecoms.html', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '34,3 millions d\'abonnements de mobile money actifs fin 2025, soit 30,6 % de pénétration selon l\'ARPTC, d\'après Agence Ecofin', 'source' => 'https://www.osiris.sn/rdc-l-internet-mobile-devient-la-principale-source-de-revenus-des-telecoms.html', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Mines : la RD Congo fournit environ 73 % du cobalt extrait dans le monde selon l\'USGS (estimation 2025)'], 'source' => 'https://pubs.usgs.gov/periodicals/mcs2026/mcs2026-cobalt.pdf', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Franc congolais (CDF), monnaie nationale ; la Banque centrale du Congo (BCC) publie le taux officiel (2 267,73 CDF pour 1 USD le 6 octobre 2026)', 'source' => 'https://www.bcc.cd', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['M-Pesa (Vodacom)', 'Orange Money', 'Airtel Money'], 'source' => 'https://docs.pawapay.io/v2/docs/providers', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['PawaPay (M-Pesa, Airtel Money et Orange Money, en francs congolais et en dollars américains)'], 'source' => 'https://docs.pawapay.io/v2/docs/providers', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Ordonnance-loi n° 23/010 du 13 mars 2023 portant Code du numérique, dont le titre III du livre III traite des données personnelles', 'source' => 'https://droitnumerique.cd/code-du-numerique-congolais/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Autorité de protection des données prévue par le Code mais pas encore mise en place ; ses missions sont confiées à l\'ARPTC depuis l\'arrêté ministériel du 17 août 2024', 'source' => 'https://droitnumerique.cd/autorite-de-protection-des-donnees/', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture normalisée émise par un dispositif électronique fiscal (DEF), dont la version en ligne e-DEF ; moratoire levé le 15 mai 2026, déduction de TVA conditionnée à cette facture', 'source' => 'https://lookuptax.com/tax-changes/congo-kinshasa/normalised-invoice-moratorium-end-2026', 'date' => '2026-10-06'],
        'ohada' => ['v' => 'Membre : traité ratifié le 27 juin 2012, en vigueur en RD Congo depuis le 12 septembre 2012', 'source' => 'https://www.ohada.com/etats-membres/rdc.html', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Taux normal de 16 %, fixé par l\'ordonnance-loi n° 10/001 du 20 août 2010', 'source' => 'https://www.droitcongolais.info/EN/files/631.08.10-Ordonnace-loi-du-20-aout-2010_Taxe-sur-la-valeur-ajoutee.pdf', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Commerce électronique (contrats, rétractation, publicité) régi par le Code du numérique de 2023', 'source' => 'https://droitnumerique.cd/code-du-numerique-congolais/', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Institut national de préparation professionnelle (INPP) : formation continue en modules courts, avec un catalogue de formations dans les centres de chaque province', 'source' => 'https://inpp.cd/offres-de-formation/', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun à Kinshasa, une heure de plus à Lubumbashi'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que pèsent 114 millions d\'habitants et 73,9 millions d\'abonnements mobiles pour un projet numérique ?',
            'paragraphes' => [
                "La RD Congo comptait 114 millions d'habitants en octobre 2025 d'après les données des Nations unies reprises par DataReportal, dont 48,8 % vivaient en ville. Les distances comptent : le territoire s'étend sur plus de 2 300 000 kilomètres carrés. Pour un projet numérique, cela veut dire qu'une application pensée pour Kinshasa ne suffit pas toujours à Lubumbashi, à Goma ou à Kisangani, où la connexion, les opérateurs dominants et même l'heure ne sont pas les mêmes.",
                "Le téléphone mobile est le point d'entrée. Selon l'ARPTC, le régulateur des postes et télécommunications, le pays comptait 73,9 millions d'abonnements mobiles actifs fin 2025, soit 65,9 % de pénétration, et l'internet mobile représentait 53,8 % du chiffre d'affaires du secteur en 2025, contre 14 % dix ans plus tôt, d'après Agence Ecofin. Dans le chiffre d'affaires de l'internet mobile, Airtel pesait 43,02 %, Orange 28,44 %, Vodacom 24,63 % et Africell 3,91 %. Un service qui ne fonctionne bien que sur un seul réseau perd donc une partie du pays.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien de Congolais sont réellement en ligne, et pourquoi les chiffres divergent-ils ?',
            'paragraphes' => [
                "Les deux grandes sources ne mesurent pas la même chose. DataReportal, dans son rapport Digital 2026, compte 34,7 millions d'internautes fin 2025, soit 30,5 % de la population, et 64,7 millions de connexions mobiles, soit 56,9 %. L'ARPTC compte des abonnements actifs : 73,9 millions, soit 65,9 %. Une même personne peut posséder plusieurs cartes SIM, une par réseau, pour passer d'un opérateur à l'autre selon la couverture ou le prix des communications.",
                "Deux enseignements pratiques en découlent. D'abord, moins d'un habitant sur trois est en ligne : un commerce qui veut vendre gagne à combiner son site avec WhatsApp et la fiche d'établissement Google. Ensuite, le numéro de téléphone ne désigne pas toujours une seule personne ni un seul réseau : un identifiant client fondé sur lui doit accepter qu'un client change de numéro ou en utilise deux.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir pour travailler avec une entreprise congolaise ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour encaisser en RD Congo ?',
            'paragraphes' => [
                "Encaisser en ligne en RD Congo commence par le mobile money. L'ARPTC recensait 34,3 millions d'abonnements actifs fin 2025, soit 30,6 % de pénétration : c'est presque autant que le nombre d'internautes de DataReportal, ce qui montre que le portefeuille mobile précède souvent l'accès à internet. Quatre services se partagent la scène : M-Pesa chez Vodacom, Orange Money, Airtel Money et Afrimoney chez Africell. Vodacom présente M-Pesa comme un compte d'argent tenu sur le téléphone, pour retirer ou transférer de l'argent et acheter du crédit.",
                "Particularité congolaise : la double monnaie. Le franc congolais est la monnaie nationale, mais le dollar américain sert aux prix et aux transferts de nombreuses transactions. La documentation de l'agrégateur PawaPay confirme que M-Pesa, Airtel Money et Orange Money s'y règlent en francs congolais comme en dollars. La Banque centrale du Congo affichait le 6 octobre 2026 un taux officiel de 2 267,73 francs congolais pour un dollar. Dans un logiciel, chaque prix doit donc porter sa devise, et chaque paiement la devise dans laquelle il a été encaissé.",
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Comment choisir entre un opérateur, un agrégateur, la carte et l\'argent liquide ?',
            'intro'  => 'Le bon montage dépend de la clientèle visée, de la devise des prix et de la ville : voici les options et leur logique pour une entreprise congolaise.',
            'items'  => [
                ['titre' => 'Un accord direct avec un opérateur', 'texte' => "Traiter séparément avec Vodacom (M-Pesa), Orange et Airtel donne la relation la plus directe, mais triple les dossiers et les rapprochements. Cela se justifie pour un gros volume dans une seule monnaie ou pour une clause commerciale que l'agrégateur ne couvre pas."],
                ['titre' => 'Un agrégateur de paiement', 'texte' => "PawaPay documente une seule interface qui couvre M-Pesa, Airtel Money et Orange Money en francs congolais et en dollars, avec des notifications serveur sur chaque transaction. Les frais, plafonds et délais d'ouverture se lisent dans son contrat, pas dans un article. Afrimoney ne figure pas dans cette liste : vérifiez-le si vos clients sont chez Africell."],
                ['titre' => 'L\'espèce et le paiement à la livraison', 'texte' => "Pour un électroménager ou une commande envoyée vers une autre province, le règlement à la réception rassure l'acheteur. Le logiciel suit la commande jusqu'à l'encaissement par le livreur puis jusqu'au reversement à l'entreprise, devise comprise."],
                ['titre' => 'La carte et le virement', 'texte' => "Ils servent la diaspora, les achats entre sociétés et les factures élevées, souvent en dollars. Ils passent par une banque ou un prestataire de paiement, qui vérifie l'identité de l'entreprise avant d'ouvrir le service."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Brancher M-Pesa, Orange Money ou Airtel Money : quelles étapes jusqu\'au premier paiement réel ?',
            'items' => [
                ['titre' => 'Cadrer réseaux et monnaies', 'texte' => "On commence par compter vos clients : combien paient avec M-Pesa, Orange Money ou Airtel Money, et si vos prix s'affichent en francs congolais ou en dollars. La répartition des réseaux varie d'une ville à l'autre, de Kinshasa à Lubumbashi.", 'duree' => '2 à 3 jours'],
                ['titre' => 'Obtenir l\'accès marchand', 'texte' => "Le compte s'ouvre chez PawaPay ou chez l'opérateur, sur pièces d'entreprise (RCCM, identification fiscale) ; le délai ne dépend pas de Richard. Il monte le dossier avec vous pour limiter les allers-retours.", 'duree' => 'selon l\'opérateur'],
                ['titre' => 'Coder et tester sur l\'environnement d\'essai', 'texte' => "Demande de paiement, validation sur le téléphone du client, notification serveur, page de confirmation. Les cas d'échec passent au banc d'essai : code secret erroné, solde insuffisant, réseau coupé en pleine validation, paiement dans l'autre devise.", 'duree' => 'une à deux semaines'],
                ['titre' => 'Relier aux factures et ouvrir', 'texte' => "Chaque encaissement est relié à sa commande puis à sa facture normalisée. Quelques paiements réels de faible montant valident la chaîne avant l'ouverture au public, avec une surveillance rapprochée la première semaine.", 'duree' => '2 à 4 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Code du numérique, OHADA, TVA : quelles obligations pèsent sur un projet congolais ?',
            'paragraphes' => [
                "Le texte central est l'ordonnance-loi n° 23/010 du 13 mars 2023 portant Code du numérique. Selon la présentation qu'en donne Droit-Numérique.cd, elle compte cinq livres : les activités et services numériques, les documents et outils électroniques (signature, horodatage, cachet), les contenus numériques dont la protection des données personnelles, la cybersécurité et la cybercriminalité, puis les dispositions fiscales, les marchés publics et les mesures transitoires. Elle traite aussi du commerce électronique : contrats, rétractation, publicité. Un site marchand ou une application qui collecte des données relève donc de ce texte. La TVA, elle, se calcule au taux normal de 16 % fixé par l'ordonnance-loi n° 10/001 du 20 août 2010.",
                "La RD Congo est également membre de l'OHADA : le traité a été ratifié le 27 juin 2012, les instruments d'adhésion déposés le 13 juillet 2012 auprès du Sénégal et le traité est entré en vigueur le 12 septembre 2012. Les sociétés congolaises appliquent donc le droit des affaires commun et le plan comptable SYSCOHADA, qui conditionne la configuration comptable d'un ERP comme Odoo ou Dolibarr. Pour un secteur réglementé (banque, santé, télécoms), un juriste congolais valide le cadrage.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui contrôle la protection des données, et quelles formalités faut-il accomplir avant un traitement ?',
            'paragraphes' => [
                "Le Code du numérique prévoit une autorité de protection des données, mais elle n'est pas encore mise en place. Depuis l'arrêté ministériel du 17 août 2024, ses missions, avec celles de l'autorité de régulation du numérique et de l'autorité de certification électronique, sont confiées provisoirement à l'ARPTC, l'Autorité de régulation de la poste et des télécommunications du Congo. Certains textes juridiques la désignent par le sigle ARPTIC ; c'est la même institution. Un décret du Premier ministre doit fixer l'organisation de l'autorité de protection des données.",
                "Selon la liste de ses missions publiée par Droit-Numérique.cd, l'autorité reçoit les formalités préalables à la création d'un traitement de données personnelles, autorise ou refuse certains traitements, notamment ceux de fichiers sensibles, autorise ou refuse les transferts de données hors du territoire vers des États tiers, reçoit les plaintes et peut prononcer des sanctions administratives et pécuniaires. En pratique : avant la mise en ligne d'une application qui collecte des noms, des numéros ou des historiques d'achat, il faut confirmer auprès de l'ARPTC la formalité exacte à accomplir, puisque l'organe définitif n'existe pas encore.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'L\'arrêté de 2026 sur les services numériques touche-t-il l\'hébergement d\'un projet ?',
            'paragraphes' => [
                "L'hébergement est encadré depuis 2026. Un arrêté du ministre du Numérique du 11 février 2026, relayé par la presse juridique congolaise, fixe les conditions et modalités des autorisations pour les activités et services numériques : centres de données, informatique en nuage, services de confiance, plateformes numériques dominantes dont les réseaux sociaux, les boutiques d'applications et les fintechs. Son délai de conformité s'est achevé le 30 juin 2026, et ses dispositions sont pleinement applicables depuis le 1er juillet 2026, l'ARPTC exerçant provisoirement le rôle de régulateur.",
                "Deux questions se posent dès le cadrage : l'hébergeur retenu entre-t-il dans le champ de l'arrêté, et où dorment les données personnelles de vos clients ? Richard note le lieu de stockage de chaque donnée, isole les données personnelles pour les déplacer au besoin et prévoit des sauvegardes exportables. L'autorisation de transfert hors du pays que prévoit le Code se demande avant la mise en ligne.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Facture normalisée, DEF, e-DEF : que doit prévoir une entreprise congolaise redevable de la TVA à 16 % ?',
            'legende' => 'Ce qu\'exige la DGI de la facture normalisée et ce que cela implique côté logiciel, au 6 octobre 2026',
            'entetes' => ['Point', 'Position de la DGI et de la presse', 'Conséquence dans le logiciel'],
            'lignes'  => [
                ['Facture normalisée', "La Direction générale des impôts (DGI) la définit comme un document commercial électronique, doté d'éléments de sécurité qui garantissent l'authenticité et la traçabilité. Chaque facture porte un code QR contrôlable.", "Le modèle reprend les mentions listées par la DGI (RCCM, NIF, numéro du dispositif, taux de TVA), une numérotation unique et le code renvoyé par le dispositif."],
                ['Dispositif électronique fiscal (DEF)', "L'assujetti émet ses factures par un DEF : une unité de facturation (UF) s'il n'a pas de logiciel, un module de contrôle de facturation (MCF) s'il en a un. La DGI propose des versions en ligne gratuites, regroupées sous le nom e-DEF.", "Un logiciel déjà en place se raccorde par un MCF ; un petit commerce peut émettre depuis la plateforme en ligne."],
                ['Systèmes de facturation homologués', "La DGI publie des listes de fournisseurs agréés de DEF et de systèmes de facturation d'entreprise (SFE) homologués ; la dernière liste publiée date du 4 septembre 2026.", "Avant d'émettre, on vérifie que l'ERP ou le logiciel sur mesure figure sur la liste ou se raccorde à un dispositif agréé."],
                ['Calendrier', "Actualite.cd date la généralisation du 1er juillet 2025, d'autres articles avancent d'autres dates. Selon LookUpTax, le moratoire a pris fin le 15 mai 2026 : la DGI refuse la TVA déductible sans facture normalisée.", "Les partenaires d'un client sans facture normalisée perdent leur déduction : la conformité est commerciale autant que fiscale."],
                ['Coupure de réseau', "Les modalités en cas de panne du réseau sont à confirmer auprès de la DGI avant le lancement.", "Prévoir une file d'attente des factures et un journal d'envoi, pour retransmettre dès le retour du réseau si la DGI l'admet."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel service répond à quel besoin d\'une entreprise congolaise ?',
            'legende' => 'Besoins courants à Kinshasa, Lubumbashi ou Goma, associés au service correspondant',
            'entetes' => ['Besoin typique en RD Congo', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne et encaisser en francs congolais ou en dollars par mobile money', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Sortir des factures normalisées d\'un logiciel de gestion relié à la DGI', 'ERP complet', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Équiper un commerce ou une PME d\'un ERP léger, hébergé sur son propre serveur', 'ERP modulaire', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Répondre aux clients sur WhatsApp, qu\'ils soient chez Airtel, Orange ou Vodacom', 'Assistant conversationnel', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Confirmer les paiements mobile money et relancer les impayés sans ressaisie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Brancher la gestion, la boutique et PawaPay ou un opérateur', 'Interfaces de programmation', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Présenter une société minière ou une ONG à des partenaires étrangers', 'Site vitrine bilingue', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Ressortir sur Google quand on cherche un prestataire à Kinshasa ou à Lubumbashi', 'Référencement local', '<a href="/services/seo-local-google-business">SEO local et fiche Google</a>'],
                ['Piloter chantiers, stocks et camions entre Lubumbashi, Kolwezi et Kinshasa', 'Application sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Décider quoi numériser en premier : facturation, ventes ou paie', 'Cadrage', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Apprendre à une équipe à utiliser Odoo, WhatsApp Business ou l\'IA', 'Formation', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Cobalt, commerce, TVA, mobile money : quels projets concrets en RD Congo ?',
            'items' => [
                [
                    'secteur'  => 'Cobalt et sous-traitance minière du Haut-Katanga et du Lualaba',
                    'probleme' => 'La RD Congo fournit environ 73 % du cobalt extrait dans le monde en 2025 selon l\'USGS, et autour des sites, des dizaines de sous-traitants gèrent des équipes, des camions et des bons de livraison sur des tableurs, à Lubumbashi, une heure en avance sur Kinshasa.',
                    'solution' => 'Un suivi des bons, des heures et des livraisons par chantier, avec des factures normalisées émises sans ressaisie et un tableau lisible depuis un téléphone, accessible même quand la connexion tombe pour synchroniser ensuite.',
                    'lien'     => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Application web sur mesure'],
                ],
                [
                    'secteur'  => 'Commerce de détail et vente en ligne à Kinshasa',
                    'probleme' => 'Un commerçant vend déjà par message, affiche ses prix en dollars, reçoit des captures d\'écran de transferts M-Pesa ou Orange Money et vérifie chaque paiement à la main avant de livrer.',
                    'solution' => 'Une boutique dont chaque prix porte sa devise, qui confirme la commande à la notification de l\'opérateur, envoie le reçu seul et garde le paiement à la livraison pour les clients qui préfèrent.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Boutique en ligne'],
                ],
                [
                    'secteur'  => 'Grossistes et PME redevables de la TVA, soumis à la facture normalisée',
                    'probleme' => 'Depuis la fin du moratoire le 15 mai 2026, la déduction de TVA dépend d\'une facture normalisée. Un grossiste qui saisit ses ventes à la main dans un tableur ne peut plus fournir à ses clients assujettis le document qui leur ouvre la déduction.',
                    'solution' => 'Un logiciel de facturation relié à un dispositif électronique fiscal ou à la plateforme e-DEF, dont chaque facture garde le code de contrôle, avec un journal d\'envoi et une file d\'attente en cas de coupure.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Odoo et facturation'],
                ],
                [
                    'secteur'  => 'Écoles, cliniques et prestataires encaissés par mobile money',
                    'probleme' => 'Avec 34,3 millions d\'abonnements de mobile money fin 2025, de nombreuses familles paient des frais échelonnés par transfert, et le comptable rapproche chaque versement du bon dossier à la main.',
                    'solution' => 'Un espace où chaque famille ou patient voit son solde, paie en francs congolais ou en dollars et reçoit un reçu ; la notification de l\'opérateur rattache le versement au dossier, puis l\'écriture part en comptabilité.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'API et intégrations'],
                ],
                [
                    'secteur'  => 'ONG et projets de développement dans plusieurs provinces',
                    'probleme' => 'Un projet implanté dans plusieurs provinces collecte des fiches de terrain, des données de bénéficiaires et des justificatifs, avec un risque réel sur les données personnelles sans autorité de protection en place.',
                    'solution' => 'Une application de collecte qui fonctionne avec peu de réseau, des droits d\'accès par rôle, un stockage documenté des données personnelles et des exports pour les bailleurs.',
                    'lien'     => ['url' => '/services/automatisation-ia', 'texte' => 'Automatisation et IA'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Former une équipe congolaise à distance : quel format, et quel appui de l\'INPP ?',
            'paragraphes' => [
                "Richard forme à distance, en visioconférence, sur les outils réels de l'entreprise : Odoo, WhatsApp Business, tableurs, outils d'IA. Le découpage en courtes sessions tient compte d'une connexion parfois capricieuse hors de Kinshasa : supports envoyés la veille, exercices réalisables hors ligne, enregistrement pour les absents.",
                "Côté financement, l'Institut national de préparation professionnelle (INPP) est l'organisme public de référence. Créé par l'ordonnance-loi n° 206 du 29 juin 1964 et érigé en établissement public par le décret n° 09/55 du 3 décembre 2009, sous la tutelle du ministère de l'Emploi, du Travail et de la Prévoyance sociale, il organise de la formation continue en modules courts pour les personnes en emploi. Il publie un catalogue de formations dans ses centres de chaque province. Les conditions de prise en charge d'une formation numérique se demandent à l'institut avant de budgéter.",
                "Pour une équipe congolaise, quatre parcours se détachent : <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo et la comptabilité SYSCOHADA</a> pour les comptables, <a href=\"/formations/whatsapp-business\">WhatsApp Business</a> pour les ventes, <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour la direction et <a href=\"/formations/securite-donnees-dirigeants\">la sécurité des données</a>, précieuse tant que l'autorité de protection reste à créer. Tous les modules figurent dans <a href=\"/formations/\">le catalogue des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment travaille-t-on avec Richard entre Cotonou et la RD Congo ?',
            'paragraphes' => [
                "Le Bénin et Kinshasa partagent le même fuseau, UTC+1, sans heure d'été : il est la même heure à Cotonou et dans la capitale. La RD Congo compte deux fuseaux : à Lubumbashi, Mbuji-Mayi ou Kananga, il est UTC+2, soit une heure de plus. Richard répond de 7 h à 20 h heure de Cotonou, soit les mêmes heures à Kinshasa et de 8 h à 21 h à Lubumbashi. Le français, langue officielle du pays, sert de langue de travail pour les échanges comme pour les documents.",
                "Les devis sont libellés en euros : avec le franc congolais et le dollar en circulation, un montant fixe en euros évite de réécrire le devis chaque fois que le taux de la Banque centrale du Congo bouge. Le mode de règlement se choisit au devis : virement, carte, PayPal ou Mobile Money. WhatsApp et la visioconférence peuvent rythmer le suivi, et chaque message reçoit sa réponse en moins de 24 heures.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel budget prévoir pour un projet numérique en RD Congo ?',
            'paragraphes' => [
                "Pour la RD Congo, le prix se fixe sur devis, en euros, après un échange de cadrage. Le devis détaille les livrables, les délais et les échéances de paiement. Dès ce premier échange, on voit si le besoin relève d'un site, d'une automatisation ou d'un logiciel de gestion.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce qui fait varier le prix d\'un projet en RD Congo ?',
            'paragraphes' => [
                "Le montant varie d'abord avec les monnaies et les réseaux : un site qui affiche en dollars, encaisse en francs congolais et accepte M-Pesa, Orange Money et Airtel Money demande plus de travail qu'un site à une seule monnaie. Il varie ensuite avec la facture normalisée : raccorder un logiciel à un DEF ou le faire figurer sur la liste des SFE homologués coûte plus qu'un simple modèle de document.",
                "Comptent aussi le mode hors ligne pour les équipes en province, un hébergeur compatible avec l'arrêté de 2026, la reprise d'anciens fichiers et la formation. Les frais de PawaPay ou d'un opérateur restent hors devis : ils se règlent avec eux et se lisent dans leur contrat avant tout calcul de marge.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Un devis en dollars ou en francs congolais expose-t-il à un risque de change ?',
            'texte' => 'Le franc congolais et le dollar coexistent, et le taux officiel publié par la Banque centrale du Congo bouge d\'un jour à l\'autre. Un devis en dollars pour un client qui encaisse en francs congolais, ou l\'inverse, déplace le risque de change sur l\'un des deux. Un devis en euros, avec des étapes de paiement fixées au contrat, rend le montant lisible pour les deux parties dès la signature. Si votre comptabilité exige une devise, la conversion se fait à la facture, au taux du jour de paiement.',
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs guettent un projet numérique en RD Congo ?',
            'intro'  => 'Cinq pièges découlent des règles et des usages congolais exposés plus haut ; le cadrage permet de les écarter.',
            'items'  => [
                ['titre' => 'Ignorer la facture normalisée', 'texte' => "Le moratoire est terminé depuis le 15 mai 2026 : un logiciel de vente qui n'émet pas par un dispositif agréé prive les clients assujettis de leur déduction de TVA. Le dispositif s'intègre dès la conception."],
                ['titre' => 'Attendre l\'autorité de protection des données', 'texte' => "L'organe définitif n'existe pas encore, mais l'ARPTC exerce ses missions depuis août 2024 et le Code du numérique s'applique. Documenter les traitements et leur lieu de stockage dès maintenant évite une reprise coûteuse."],
                ['titre' => 'Prévoir un seul opérateur de mobile money', 'texte' => "Un site qui n'accepte que M-Pesa, ou que Orange Money, écarte les clients des autres réseaux. Airtel (43,02 %), Orange (28,44 %) et Vodacom (24,63 %) se partagent le chiffre d'affaires de l'internet mobile : aucun ne couvre tout le monde."],
                ['titre' => 'Ne gérer qu\'une devise', 'texte' => "Encaisser en dollars une commande affichée en francs congolais, sans règle de conversion, creuse des écarts de caisse. Chaque prix et chaque paiement portent leur devise."],
                ['titre' => 'Concevoir pour Kinshasa seulement', 'texte' => "Avec deux fuseaux horaires et un réseau inégal d'une province à l'autre, un outil de suivi doit tolérer une connexion lente et afficher l'heure locale de chaque site."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui est Richard SALANON, et pourquoi le choisir pour la RD Congo ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                "Il compte plus de six ans d'expérience, a suivi la formation d'EPITECH en 2022, a conçu l'assistant WhatsApp à intelligence artificielle Wapy et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>. Richard a déjà travaillé avec des entreprises en RD Congo, et l'heure de Cotonou est celle de Kinshasa. Le tableau ci-dessous résume cette pratique.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Richard a-t-il déjà travaillé avec des entreprises congolaises ?',
            'legende' => 'Richard et la RD Congo : expérience et mode de travail',
            'entetes' => ['Question', 'Réponse'],
            'lignes'  => [
                ['Déjà travaillé', 'Oui : Richard a déjà travaillé avec des entreprises en RD Congo.'],
                ['Réalisations', 'Les projets présentés sur <a href="/realisations/">la page des réalisations</a> détaillent sa manière de travailler et les secteurs concernés.'],
                ['Mode de travail', 'À distance depuis Cotonou, en français, avec des devis en euros.'],
                ['Pour aller plus loin', '<a href="/richard-salanon">Le parcours de Richard</a> et <a href="/a-propos/">la page À propos</a>.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous dirigez une entreprise en RD Congo et avez un projet numérique ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels et les moyens de paiement que vous voulez accepter : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il sur place à Kinshasa ou à Lubumbashi ?', 'r' => "Non : l'intervention est à distance, depuis Cotonou, en visioconférence et par message. Logiciel, automatisation et formation se conduisent très bien ainsi, sans frais de voyage vers Kinshasa ou Lubumbashi."],
        ['q' => 'Quels moyens de paiement mobile fonctionnent en RD Congo ?', 'r' => "M-Pesa chez Vodacom, Orange Money, Airtel Money et Afrimoney chez Africell. L'ARPTC comptait 34,3 millions d'abonnements de mobile money actifs fin 2025. L'agrégateur PawaPay documente M-Pesa, Airtel Money et Orange Money, en francs congolais et en dollars."],
        ['q' => 'Faut-il accepter les dollars et les francs congolais ?', 'r' => "Oui, dans la plupart des cas : le franc congolais est la monnaie nationale, la Banque centrale du Congo affichait 2 267,73 CDF pour 1 USD le 6 octobre 2026, et PawaPay règle M-Pesa, Airtel Money et Orange Money dans les deux monnaies."],
        ['q' => 'Qui contrôle la protection des données personnelles en RD Congo ?', 'r' => "Le Code du numérique de 2023 (ordonnance-loi n° 23/010) prévoit une autorité de protection des données, qui n'est pas encore mise en place. Depuis l'arrêté ministériel du 17 août 2024, l'ARPTC exerce ses missions à titre provisoire. Confirmez auprès d'elle la formalité à accomplir."],
        ['q' => 'La facture normalisée est-elle obligatoire ?', 'r' => "Pour les redevables de la TVA (16 %), oui : la DGI exige des factures émises par un dispositif électronique fiscal, y compris la plateforme en ligne e-DEF. D'après LookUpTax, le moratoire a pris fin le 15 mai 2026 et la TVA déductible exige désormais une facture normalisée."],
        ['q' => 'Un ERP comme Odoo ou Dolibarr peut-il émettre des factures normalisées ?', 'r' => "Oui, à condition d'être raccordé à un DEF ou de figurer parmi les systèmes de facturation d'entreprise homologués ; la DGI a publié sa dernière liste le 4 septembre 2026. Ce raccordement se prévoit dès le cadrage."],
        ['q' => 'La RD Congo applique-t-elle l\'OHADA et le SYSCOHADA ?', 'r' => "Oui : ratifié le 27 juin 2012, le traité est en vigueur depuis le 12 septembre 2012. Le plan comptable SYSCOHADA détermine donc le paramétrage comptable d'Odoo ou de Dolibarr."],
        ['q' => 'Quel est le décalage horaire entre Cotonou et la RD Congo ?', 'r' => "Aucun avec Kinshasa (UTC+1 des deux côtés). À Lubumbashi, Mbuji-Mayi et Kananga, il est UTC+2, soit une heure de plus. Richard répond de 7 h à 20 h heure de Cotonou, donc jusqu'à 21 h à Lubumbashi."],
        ['q' => 'Dans quelle devise Richard chiffre-t-il un projet congolais ?', 'r' => "En euros, sur devis, après un échange de cadrage qui fixe les livrables et les échéances."],
        ['q' => 'Comment financer une formation au numérique en RD Congo ?', 'r' => "L'INPP, établissement public sous la tutelle du ministère de l'Emploi, du Travail et de la Prévoyance sociale, propose des modules courts de formation continue sur catalogue. Ses conditions de prise en charge se demandent à l'institut avant de budgéter."],
    ],

    'sources' => [
        ['titre' => 'Agence Ecofin, RDC : l\'internet mobile devient la principale source de revenus des télécoms (chiffres ARPTC, quatrième trimestre 2025)', 'url' => 'https://www.osiris.sn/rdc-l-internet-mobile-devient-la-principale-source-de-revenus-des-telecoms.html', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : République démocratique du Congo', 'url' => 'https://datareportal.com/reports/digital-2026-democratic-republic-of-the-congo', 'date' => '2026-10-06'],
        ['titre' => 'Droit-Numérique.cd, le Code du numérique congolais (ordonnance-loi n° 23/010 du 13 mars 2023)', 'url' => 'https://droitnumerique.cd/code-du-numerique-congolais/', 'date' => '2026-10-06'],
        ['titre' => 'Droit-Numérique.cd, l\'autorité de protection des données', 'url' => 'https://droitnumerique.cd/autorite-de-protection-des-donnees/', 'date' => '2026-10-06'],
        ['titre' => 'Droit-Numérique.cd, l\'ARPTIC investie pour la régulation du numérique, la certification électronique et la protection des données', 'url' => 'https://droitnumerique.cd/wp-content/uploads/2024/10/Regulation-du-numerique-en-RDC-lARPTIC-Brozeck-Kandolo-4.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Droit Médias Finance, arrêté de février 2026 sur les autorisations des activités et services numériques', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1216-rdc-un-arrete-de-fevrier-2026-vient-fixer-les-conditions-et-modalites-des-autorisations-pour-les-activites-et-services-numeriques-avec-delai-de-conformite-au-30-juin-2026', 'date' => '2026-10-06'],
        ['titre' => 'ARPTC, Autorité de régulation de la poste et des télécommunications du Congo', 'url' => 'https://arptc.gouv.cd', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale des impôts (DGI), site officiel : réforme de la facture normalisée, DEF et SFE homologués', 'url' => 'https://dgi.gouv.cd', 'date' => '2026-10-06'],
        ['titre' => 'DGI, plateforme de facturation en ligne e-DEF', 'url' => 'https://edef.dgirdc.cd/', 'date' => '2026-10-06'],
        ['titre' => 'LookUpTax, RD Congo : fin du moratoire sur la facture normalisée (15 mai 2026)', 'url' => 'https://lookuptax.com/tax-changes/congo-kinshasa/normalised-invoice-moratorium-end-2026', 'date' => '2026-10-06'],
        ['titre' => 'Actualite.cd, généralisation de la facture normalisée, UF, MCF et versions en ligne gratuites', 'url' => 'https://actualite.cd/2025/07/05/moderniser-la-fiscalite-indirecte-pour-batir-la-confiance-la-facture-normalisee-un', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, la République démocratique du Congo', 'url' => 'https://www.ohada.com/etats-membres/rdc.html', 'date' => '2026-10-06'],
        ['titre' => 'Banque centrale du Congo, site officiel (franc congolais, taux de change)', 'url' => 'https://www.bcc.cd', 'date' => '2026-10-06'],
        ['titre' => 'PawaPay, fournisseurs de mobile money pris en charge', 'url' => 'https://docs.pawapay.io/v2/docs/providers', 'date' => '2026-10-06'],
        ['titre' => 'Vodacom RDC, M-Pesa', 'url' => 'https://www.vodacom.cd/m-pesa', 'date' => '2026-10-06'],
        ['titre' => 'Orange RDC, Orange Money', 'url' => 'https://www.orange.cd', 'date' => '2026-10-06'],
        ['titre' => 'Africell RDC, Afrimoney', 'url' => 'https://www.africell.cd', 'date' => '2026-10-06'],
        ['titre' => 'INPP, offres de formation', 'url' => 'https://inpp.cd/offres-de-formation/', 'date' => '2026-10-06'],
        ['titre' => 'INPP, notre histoire', 'url' => 'https://inpp.cd/historique/', 'date' => '2026-10-06'],
        ['titre' => 'USGS, Mineral Commodity Summaries 2026 : cobalt', 'url' => 'https://pubs.usgs.gov/periodicals/mcs2026/mcs2026-cobalt.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Ordonnance-loi n° 10/001 du 20 août 2010 relative à la taxe sur la valeur ajoutée (taux de 16 %)', 'url' => 'https://www.droitcongolais.info/EN/files/631.08.10-Ordonnace-loi-du-20-aout-2010_Taxe-sur-la-valeur-ajoutee.pdf', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Afrique (zones Kinshasa et Lubumbashi)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'UIT, plan de numérotation E.164 : codes de pays (+243)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, République démocratique du Congo (capitale, villes, langues)', 'url' => 'https://fr.wikipedia.org/wiki/République_démocratique_du_Congo', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'seo-local-google-business', 'application-web-sur-mesure', 'formation-en-entreprise'],
        'formations'  => ['odoo-comptabilite-syscohada', 'whatsapp-business', 'ia-en-entreprise', 'securite-donnees-dirigeants'],
        'comparatifs' => ['odoo-vs-dolibarr'],
        'metiers'     => ['industrie', 'commercants-e-commercants', 'ong-projets-developpement'],
    ],
];
