<?php
// ============================================================
// data/pays/guinee.php · Page pays « Guinée » (vague 1D, tranche 2, GNF, devis en euros).
// Faits externes relevés le 06/10/2026 : INS (RGPH-4, décret du 6 mars 2026), ARPT,
// DataReportal (Digital 2026), BCRG (switch monétique, NimbaPay), loi L/2016/037/AN,
// loi L/2016/035/AN, loi L/2023/019/CNT, ministère du Budget, OHADA, ONFPP et Enabel.
// Clés de fiche absentes faute de source confirmée : aucune (autorité : absence d'installation notée).
// Aucun projet de portfolio/data/projets-clients.php n'est situé en Guinée.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Des logiciels, des automatisations et des paiements Orange Money et MTN MoMo pour les entreprises guinéennes, pilotés à distance depuis Cotonou",
    'title'   => "Développeur et consultant en Guinée | Richard SALANON",
    'meta'    => "Sites, applications, automatisation, IA, Odoo et Dolibarr pour les entreprises de Guinée : Orange Money, MTN MoMo, loi de 2016, devis en euros.",
    'en_bref' => "Richard SALANON conçoit pour les entreprises de Guinée des sites, des applications, des automatisations et des intégrations d'IA, déploie Odoo ou Dolibarr et forme les équipes. Il accompagne à distance depuis Cotonou, avec une heure d'écart sur Conakry, en français. La Guinée n'est pas dans la zone franc : les devis sont établis en euros, sur demande. Les paiements s'appuient sur Orange Money et MTN MoMo, et le cadre légal sur la loi de 2016 relative aux données personnelles.",
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale' => ['v' => 'Conakry', 'source' => 'https://www.zeitverschiebung.net/fr/country/gn', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Conakry : 3 407 327 habitants (RGPH-4, 2025)', 'Régions de Kankan, Nzérékoré, Kindia, Boké, Faranah, Labé et Mamou'], 'source' => 'https://guineenews.org/2026/03/08/rgph-4-le-president-mamadi-doumbouya-officialise-les-resultats-preliminaires-de-17-521-167-decret/', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'UTC+0 toute l\'année, sans heure d\'été : une heure de moins qu\'à Cotonou', 'source' => 'https://www.zeitverschiebung.net/fr/country/gn', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+224', 'source' => 'https://www.itu.int/oth/t0202', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Français', 'Langues nationales placées au même rang que le français par la nouvelle Constitution, selon le président du CNT (juin 2025)'], 'source' => 'https://guineenews.org/2025/06/30/dansa-kourouma-les-langues-nationales-ont-desormais-la-meme-valeur-que-le-francais/', 'date' => '2026-10-06'],
        'population' => ['v' => '17 521 167 habitants au recensement de juillet 2025 (résultats préliminaires officialisés le 6 mars 2026)', 'source' => 'https://guineenews.org/2026/03/08/rgph-4-le-president-mamadi-doumbouya-officialise-les-resultats-preliminaires-de-17-521-167-decret/', 'date' => '2026-10-06'],
        'internet' => ['v' => '4,02 millions d\'internautes, soit 26,5 % des habitants, en octobre 2025', 'source' => 'https://datareportal.com/reports/digital-2026-guinea', 'date' => '2026-10-06'],
        'mobile' => ['v' => '12,8 millions d\'abonnés mobiles fin juin 2025, soit 89,1 % de pénétration selon l\'ARPT', 'source' => 'https://www.ecofinagency.com/news-digital/0907-57232-guinea-urges-orange-to-improve-service-and-expand-network-coverage', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '3,2 millions d\'abonnés aux services financiers mobiles fin juin 2025 ; Orange 92 %, MTN 8 %', 'source' => 'https://www.ecofinagency.com/news-digital/1802-53017-coris-bank-enters-guinea-s-mobile-money-market', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Mines : minerai de fer de Simandou, premiers chargements en octobre 2025', 'Transit et logistique liés aux ports miniers', 'Commerce et services payés par mobile money'], 'source' => 'https://guineenews.org/2025/10/17/simandou-rio-tinto-lance-le-premier-chargement-de-minerai-vers-le-port-de-moribaya/', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Franc guinéen (GNF), émis par la Banque centrale de la République de Guinée (BCRG), hors zone franc', 'source' => 'https://www.bcrg-guinee.org/', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Orange Money', 'MTN MoMo', 'Coris Money (lancé le 16 février 2026)'], 'source' => 'https://www.ecofinagency.com/news-digital/1802-53017-coris-bank-enters-guinea-s-mobile-money-market', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['CinetPay : Guinée Conakry annoncée parmi ses pays en 2020'], 'source' => 'https://burkina24.com/?p=226112', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Loi L/2016/037/AN de juillet 2016 relative à la cybersécurité et à la protection des données à caractère personnel', 'source' => 'https://extranet.who.int/cpcd/health-legislation/loi-2016037an-relative-la-cyber-securite-et-la-protection-des-donnees-caractere', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Autorité de protection à créer par voie réglementaire (article 47) ; installation non confirmée (fiches de 2021 et 2022)', 'source' => 'https://www.dlapiperdataprotection.com/index.html?c=GN&t=law', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique normalisée inscrite au Code général des impôts (présentation du 2 décembre 2021) ; aucune plateforme nationale annoncée en service', 'source' => 'https://mbudget.gov.gn/2021/12/presentation-de-la-facture-electronique-normalisee/', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Taux normal de 18 % ; franchise sous 1 milliard de GNF de chiffre d\'affaires ; pas de régime dédié aux non-résidents', 'source' => 'https://trykintsugi.com/sales-tax-guides/africa/guinea', 'date' => '2026-10-06'],
        'ohada' => ['v' => 'Membre : traité ratifié le 5 mai 2000, en vigueur en Guinée depuis le 21 novembre 2000', 'source' => 'https://www.ohada.com/etats-membres/guinee.html', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi L/2016/035/AN du 9 juin 2016 sur les transactions électroniques (commerce électronique, certification, archivage)', 'source' => 'https://afrique.le360.ma/guinee/economie/2016/06/09/3048-la-guinee-dotee-dune-loi-sur-les-transactions-electroniques-3048', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Office national de formation et de perfectionnement professionnels (ONFPP) ; Facilité de développement des compétences pour les entreprises de moins de 30 salariés', 'source' => 'https://guineenews.org/2026/03/25/guinee-lonfpp-valide-son-dispositif-de-developpement-des-competences/', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à Conakry (UTC+0 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique en Guinée, et que change-t-il pour un projet ?',
            'paragraphes' => [
                "La Guinée compte 17 521 167 habitants selon les résultats préliminaires du quatrième recensement, réalisé en juillet 2025 et officialisés par décret le 6 mars 2026. La région de Kankan est la plus peuplée avec 4 110 215 habitants, devant Conakry (3 407 327), Nzérékoré (2 481 986) et Kindia (2 275 620). La population est donc répartie sur tout le territoire, et la capitale n'en représente qu'environ un cinquième : un service pensé uniquement pour Conakry laisse de côté la majorité des clients potentiels.",
                "Le téléphone mobile est le canal dominant. Selon l'Autorité de régulation des postes et télécommunications, l'ARPT, le pays comptait 12,8 millions d'abonnés mobiles fin juin 2025, soit 89,1 % de pénétration, et 8,3 millions d'abonnements internet. Les mêmes sources rappellent que ces chiffres comptent des cartes SIM et non des personnes. Pour un projet, cela signifie qu'une application se conçoit d'abord pour un écran de téléphone, avec des pages légères et des formulaires courts.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien de Guinéens sont réellement en ligne, et pourquoi les chiffres divergent-ils ?',
            'paragraphes' => [
                "DataReportal, dans son rapport Digital 2026, relève 4,02 millions d'internautes en octobre 2025, soit 26,5 % des habitants, et précise que 11,2 millions de personnes n'utilisaient pas internet fin 2025. Il se fonde sur une population de 15,2 millions, antérieure au recensement de 2025. L'ARPT compte, elle, des abonnements : 8,3 millions d'abonnements internet fin juin 2025, soit environ 58 % de la population. Les deux chiffres ne se contredisent pas : une personne peut détenir plusieurs cartes, et une carte peut ne servir qu'à des appels.",
                "Deux conséquences pratiques en découlent. Un quart des habitants seulement est en ligne : un commerçant ne remplace pas son téléphone et son numéro WhatsApp par un site, il les complète. Et une couverture réseau inégale compte : l'ARPT relève qu'environ 6 % des quartiers et districts manquaient d'une couverture mobile satisfaisante au deuxième trimestre 2025. Une application bien conçue garde donc ses données en cache et reprend un envoi interrompu au lieu de perdre une commande.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir pour travailler avec une entreprise guinéenne ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour encaisser en Guinée ?',
            'paragraphes' => [
                "En Guinée, encaisser en ligne veut dire accepter le mobile money, et d'abord Orange Money. L'ARPT dénombrait 3,2 millions d'abonnés aux services financiers mobiles fin juin 2025, contre 1,9 million en juin 2022, soit 68,4 % de plus en trois ans. Orange en détenait 92 % ; la part de MTN est tombée de 16 % en juin 2023 à 8 % en juin 2025. Un troisième service est apparu : Coris Bank International Guinée a lancé Coris Money le 16 février 2026, avec dépôts, retraits, transferts, paiement de factures et règlement des marchands.",
                "Le contexte monétaire pèse sur le choix. Le 26 août 2025, la Banque centrale a réuni les établissements de monnaie électronique pour traiter ce qu'elle appelle une crise du cash : 94 % des billets émis restent hors du circuit bancaire, thésaurisés par les agents économiques. Pour une entreprise, accepter le paiement numérique n'est donc pas un confort : c'est une réponse à la rareté des espèces aux guichets et aux distributeurs, que le régulateur encourage lui-même.",
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Comment choisir entre Orange Money, MTN MoMo, un agrégateur et la carte ?',
            'intro'  => 'Le bon montage dépend de ce que vous vendez, à qui, et de la devise dans laquelle vous voulez être réglé. Voici les options et leur logique pour une entreprise guinéenne.',
            'items'  => [
                ['titre' => 'Un contrat direct avec Orange Money', 'texte' => "Avec 92 % des abonnés selon l'ARPT, Orange Money est le service qu'il faut accepter en premier. Un contrat direct donne la relation la plus proche de l'opérateur, au prix d'un dossier d'entreprise et d'une interface propre à lui. Il se justifie pour un volume important ou une exigence de relation commerciale suivie."],
                ['titre' => 'MTN MoMo en complément', 'texte' => "Avec 8 % des abonnés en juin 2025, MTN MoMo représente une minorité, mais elle compte pour un client qui n'a que ce portefeuille. À ajouter après Orange, pas avant : le coût d'une seconde intégration se mesure à la clientèle réellement touchée."],
                ['titre' => 'Un agrégateur régional', 'texte' => "CinetPay, fintech d'Afrique francophone, annonçait en 2020 la Guinée Conakry parmi ses pays. Un agrégateur réunit les opérateurs derrière une seule interface, mais sa couverture actuelle, ses frais et ses délais de reversement se confirment dans son contrat, pas dans un article. Le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, KKiaPay et CinetPay</a> aide à fixer les critères."],
                ['titre' => 'Les paiements interopérables de la Banque centrale', 'texte' => "Le Switch monétique et digital, lancé le 15 janvier 2025 par la BCRG, relie banques, établissements de monnaie électronique, microfinance et fintechs. NimbaPay, plateforme de paiement instantané lancée le 22 juillet 2026 via la Guinéenne de monétique, étend l'idée à des transferts 24 heures sur 24 entre ces acteurs. Ces rails comptent pour un projet qui vise les virements entre portefeuilles et banques."],
                ['titre' => 'La carte bancaire et le virement', 'texte' => "La carte reste marginale pour la vente de détail locale ; elle intéresse la diaspora et les achats entre entreprises. Le virement bancaire sert aux montants élevés, avec rapprochement manuel ou automatisé dans le logiciel de gestion."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule l\'intégration d\'un paiement mobile, du cahier des charges à la mise en production ?',
            'items' => [
                ['titre' => 'Fixer les services à accepter', 'texte' => "Richard part de vos clients réels : combien paient par Orange Money, combien par MTN MoMo, combien par virement. Dans la plupart des cas, on commence par Orange Money puis on ajoute MTN MoMo.", 'duree' => '2 à 3 jours'],
                ['titre' => 'Ouvrir le compte marchand', 'texte' => "L'ouverture dépend de l'opérateur ou de l'agrégateur et de vos pièces d'entreprise ; son délai ne dépend pas de Richard, qui prépare avec vous le dossier pour éviter les allers-retours.", 'duree' => 'selon l\'opérateur'],
                ['titre' => 'Développer et tester en bac à sable', 'texte' => "Création du paiement, retour de l'opérateur, notification au serveur et page de confirmation. Les échecs sont testés autant que les succès : code mal saisi, délai dépassé, solde insuffisant, coupure réseau en plein paiement, ce qui n'a rien d'exceptionnel en dehors des grandes villes.", 'duree' => '1 à 2 semaines'],
                ['titre' => 'Rapprocher en franc guinéen et mettre en production', 'texte' => "Chaque paiement est rapproché de sa commande et de sa facture en GNF dans votre logiciel. Des essais réels de faible montant précèdent la bascule, suivie d'un suivi des premiers jours.", 'duree' => '2 à 4 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique en Guinée ?',
            'paragraphes' => [
                "Quatre textes encadrent un projet. La loi L/2016/037/AN de juillet 2016 relative à la cybersécurité et à la protection des données personnelles comprend deux parties : l'une sur la lutte contre la cybercriminalité, l'autre sur les données personnelles. La loi L/2016/035/AN du 9 juin 2016 règle les transactions électroniques en 55 articles : commerce électronique, publicité en ligne, certification et archivage. La loi L/2023/019/CNT, adoptée le 25 octobre 2023, organise l'identification des personnes physiques. Enfin, la Guinée applique l'OHADA depuis le 21 novembre 2000, donc le droit des affaires commun et le plan comptable SYSCOHADA.",
                "Pour les données, la loi de 2016 exige une déclaration ou une demande d'autorisation avant tout traitement, auprès d'une autorité à créer par voie réglementaire selon son article 47. Les fiches de DLA Piper (décembre 2021) et de Data Protection Africa (mai 2022) indiquent que cette autorité n'est pas installée. Un décret d'avril 2025 fixe des conditions de sécurité pour les données d'identification et s'appuie sur l'organe chargé de l'état civil et de l'identification, sans créer d'autorité générale. L'état actuel reste à confirmer avant de lancer un traitement de grande ampleur : tenez dès maintenant un registre de vos traitements.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit la loi sur le transfert et l\'hébergement des données personnelles ?',
            'paragraphes' => [
                "La loi de 2016 soumet le transfert de données vers un pays tiers à l'autorisation préalable de l'autorité, avec la condition que le pays destinataire offre un niveau de protection équivalent ou supérieur. Selon Data Protection Africa, les transferts hors de la zone de la CEDEAO sont visés. Les synthèses juridiques de DLA Piper et de Data Protection Africa ne mentionnent aucune exigence d'hébergement sur le territoire national : à confirmer avec un conseil juridique pour un projet sensible. L'absence d'autorité en activité ne supprime pas l'obligation, elle rend simplement difficile de savoir à qui la demander.",
                "En pratique, Richard documente où chaque donnée est stockée, sépare les données personnelles du reste pour pouvoir les déplacer et prévoit des sauvegardes exportables. L'identifiant national mérite une règle à part : l'article 13 de la loi de 2023 interdit aux administrations et organismes visés d'utiliser le numéro personnel d'identification comme clé de recherche dans leurs applications. Un logiciel qui serait relié à une démarche administrative ne doit donc pas bâtir sa base sur ce numéro.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Facture normalisée, TVA, comptabilité : que doit prévoir une entreprise guinéenne ?',
            'legende' => 'Points de conformité fiscale à traiter dans un logiciel de gestion ou de vente en Guinée, état au 6 octobre 2026',
            'entetes' => ['Sujet', 'Ce que disent les sources', 'Ce que cela change dans le logiciel'],
            'lignes'  => [
                ['Facture électronique normalisée', "Le ministère du Budget a reçu une présentation de la solution le 2 décembre 2021 et indique que la réforme est inscrite au Code général des impôts. Aucune plateforme nationale en service ni aucun calendrier n'est annoncé : à confirmer auprès de la Direction générale des impôts avant de lancer le projet.", "Numérotation continue, mentions complètes et export structuré de chaque facture : le raccordement ultérieur à un système de la Direction nationale des impôts devient un ajout et non une refonte."],
                ['TVA', "Selon un guide fiscal tiers, le taux normal est de 18 %. Une franchise s'applique sous 1 milliard de GNF de chiffre d'affaires de l'année précédente, avec une option possible dès 500 millions. Les déclarations sont mensuelles. Les administrations, les mines, les hydrocarbures et les télécoms retiennent 50 % de la TVA sur leurs paiements aux fournisseurs.", "Le logiciel doit distinguer la TVA facturée, la TVA retenue à la source et la TVA déductible. Richard ne tranche pas votre situation fiscale : elle se valide avec votre expert-comptable."],
                ['Services numériques de fournisseurs étrangers', "Selon un guide fiscal tiers, il n'existe pas de régime dédié aux non-résidents : un représentant accrédité en Guinée ou l'autoliquidation par le client guinéen.", "Pour un client guinéen d'une société non établie en Guinée, la facture doit prévoir l'autoliquidation. À confirmer avec un conseil fiscal local."],
                ['Comptabilité SYSCOHADA', "L'OHADA est en vigueur en Guinée depuis le 21 novembre 2000 : les états financiers suivent le SYSCOHADA.", "La localisation comptable choisie dans Odoo ou Dolibarr doit être celle de l'OHADA, avec le franc guinéen comme devise de tenue des comptes."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises guinéennes, selon leur besoin ?',
            'legende' => 'Besoins fréquents des entreprises de Guinée, et le service qui y répond',
            'entetes' => ['Besoin typique en Guinée', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne et encaisser par Orange Money et MTN MoMo', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Se présenter à un donneur d\'ordre minier ou à un partenaire étranger', 'Site vitrine bilingue', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Facturer, suivre le stock et tenir une comptabilité SYSCOHADA en GNF', 'ERP complet', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Équiper une PME avec un ERP plus léger, installé sur votre serveur', 'ERP modulaire', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp à toute heure', 'Assistant conversationnel', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Confirmer les paiements mobiles et relancer les impayés sans ressaisie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Relier le logiciel de gestion, le site et les services de paiement', 'Interfaces de programmation', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Apparaître sur Google quand on cherche un prestataire à Conakry', 'Référencement local', '<a href="/services/seo-local-google-business">SEO local et fiche Google</a>'],
                ['Suivre des camions, des cargaisons ou des chantiers sur plusieurs sites', 'Application sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Faire fonctionner une application malgré un réseau instable', 'Application mobile', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Choisir par où commencer la digitalisation', 'Cadrage', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Former les équipes aux nouveaux outils', 'Formation', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs de la Guinée ?',
            'items' => [
                [
                    'secteur'  => 'Mines et sous-traitance minière',
                    'probleme' => 'Rio Tinto a commencé en octobre 2025 à charger les premiers minerais de fer de Simandou pour les acheminer par rail vers le port de Moribaya : une PME qui fournit un site minier doit répondre à des exigences de suivi, de facturation et de documents qu\'un tableur ne tient plus.',
                    'solution' => 'Un ERP déployé par paliers : achats et stock, puis ventes, facturation et comptabilité SYSCOHADA avec la retenue de TVA à la source propre aux donneurs d\'ordre miniers. Un espace partagé range les documents par commande, et une vitrine bilingue présente l\'entreprise aux acheteurs étrangers.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Intégration d\'Odoo'],
                ],
                [
                    'secteur'  => 'Transit et logistique liés aux ports miniers',
                    'probleme' => 'Un transitaire ou un transporteur gère des dossiers dont le statut se demande par téléphone, entre le site, la voie ferrée et le port, avec des documents échangés par photo.',
                    'solution' => 'Un tableau de suivi des dossiers (déclaration, enlèvement, livraison) avec un message WhatsApp automatique au client à chaque étape, et un mode hors ligne pour les agents sur route. Les documents sont rangés par dossier et horodatés.',
                    'lien'     => ['url' => '/services/automatisation-ia', 'texte' => 'Automatisation et IA'],
                ],
                [
                    'secteur'  => 'Commerce de détail et vente en ligne',
                    'probleme' => 'Un commerçant de Conakry ou de Kankan vend déjà par message, reçoit des captures d\'écran de transferts Orange Money et vérifie chaque paiement à la main avant de livrer.',
                    'solution' => 'Une boutique avec paiement mobile intégré : la commande n\'est confirmée qu\'après la notification de l\'opérateur, le reçu part seul, et le paiement à la livraison reste possible. Le catalogue se met à jour depuis un tableau de bord simple, et les prix restent en GNF.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Boutique en ligne'],
                ],
                [
                    'secteur'  => 'Entreprises qui encaissent beaucoup en numéraire',
                    'probleme' => 'Quand 94 % des billets restent hors du circuit bancaire, selon la Banque centrale, une entreprise manipule des espèces rares, les compte à la main et les rapproche tard.',
                    'solution' => 'Un logiciel qui enregistre chaque encaissement, qu\'il soit en espèces, par Orange Money ou par virement, et un état de rapprochement quotidien. Les paiements numériques réduisent la part d\'espèces à compter, et la caisse se clôture avec les écarts visibles.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'API et intégrations'],
                ],
                [
                    'secteur'  => 'Formation et petites entreprises, dans le cadre de la FDC',
                    'probleme' => 'Une petite entreprise de moins de 30 salariés, cible de la Facilité de développement des compétences, a besoin de former ses équipes mais ne sait pas par quelle compétence numérique commencer.',
                    'solution' => 'Un parcours à distance sur les outils qu\'elle utilise déjà : WhatsApp Business pour la relation client, un tableur propre pour la gestion, puis un premier module de facturation. Le contenu s\'adapte aux horaires et au débit disponibles.',
                    'lien'     => ['url' => '/formations/whatsapp-business', 'texte' => 'Formation WhatsApp Business'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes guinéennes, et comment financer la formation ?',
            'paragraphes' => [
                "Les formations se donnent à distance, en visioconférence, avec des exercices sur vos propres données et sur l'outil réel de l'entreprise ; les séances se calent sur le débit disponible, avec des supports qu'on peut télécharger la veille plutôt que de les charger en direct. Aucun déplacement à Conakry n'est prévu : le format à distance évite un voyage et convient à des équipes réparties entre la capitale et les régions minières.",
                "Pour le financement, l'Office national de formation et de perfectionnement professionnels, l'ONFPP, est un établissement public à caractère administratif basé à Conakry, chargé de mettre en œuvre la politique de formation continue, notamment dans les entreprises. Le 25 mars 2026, il a validé avec Enabel et l'Union européenne le manuel de la Facilité de développement des compétences : trois ans, un pilote à Conakry, Kindia et Mamou, 800 bénéficiaires visés, et en priorité les entreprises de moins de 30 salariés. Les conditions précises d'accès pour une entreprise donnée ne figurent pas dans le communiqué de validation : renseignez-vous auprès de l'office avant de budgéter.",
                "Parcours utiles au contexte guinéen : <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo et la comptabilité SYSCOHADA</a> pour les équipes financières, <a href=\"/formations/whatsapp-business\">WhatsApp Business</a> pour la relation client, <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour les dirigeants et <a href=\"/formations/securite-donnees-dirigeants\">la sécurité des données</a>, utile tant que l'autorité de protection n'est pas en place et que la responsabilité repose sur l'entreprise. Le catalogue complet est sur <a href=\"/formations/\">la page des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                "Conakry est loin de Cotonou, de l'autre côté de plusieurs frontières : la collaboration se fait à distance. La Guinée vit à l'heure de Greenwich toute l'année, alors que le Bénin a une heure d'avance : quand il est 9 h à Conakry, il est 10 h à Cotonou. Les plages de réponse de Richard, de 7 h à 20 h heure de Cotonou, couvrent donc de 6 h à 19 h chez vous. Le français est la langue de tous les échanges et documents.",
                "La Guinée n'appartient pas à la zone franc : sa monnaie est le franc guinéen. Les devis sont donc établis en euros, sur demande, ce qui évite de les exposer aux variations du change entre le GNF et le FCFA. Le mode de règlement se fixe au devis parmi ceux que Richard accepte, dont le virement. Le suivi passe par WhatsApp et par des points en visioconférence. Toute demande reçoit une réponse sous 24 heures.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce qui fait varier le prix d\'un projet en Guinée ?',
            'paragraphes' => [
                "Pour la Guinée, les projets sont chiffrés sur devis, en euros, après un cadrage. Plusieurs éléments propres au pays font varier le devis. Le nombre de moyens de paiement intégrés : Orange Money seul coûte moins qu'Orange, MTN, Coris Money et un agrégateur. La conformité de facturation : un logiciel prêt pour une facture électronique future demande plus de travail qu'un simple modèle de document.",
                "Pèsent aussi la tenue des comptes en GNF avec un export vers votre comptable, la mise en cache pour un réseau instable, le volume de données à reprendre d'anciens fichiers, et la formation. Les frais de l'opérateur ou de l'agrégateur ne font pas partie du devis : ils se règlent avec lui, et il vaut mieux les faire figurer par écrit dans votre contrat avant de bâtir un modèle économique dessus.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne faut-il pas bâtir un système sur un numéro d\'identification national ?',
            'texte' => 'La loi guinéenne de 2023 sur l\'identification des personnes physiques interdit, à son article 13, aux administrations et organismes qu\'elle vise d\'utiliser le numéro personnel d\'identification comme clé de recherche dans leurs applications. Un logiciel de gestion de clients ou de salariés qui prendrait ce numéro comme clé principale se place en porte-à-faux et rend toute migration pénible. Gardez un identifiant interne propre, et conservez le numéro d\'identité, quand la loi le permet, comme une simple information rattachée à la fiche.',
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs voit-on le plus souvent dans les projets numériques en Guinée ?',
            'intro'  => 'Ces erreurs viennent des particularités guinéennes décrites plus haut ; chacune se prévient dès le cadrage.',
            'items'  => [
                ['titre' => 'Penser en FCFA pour un client guinéen', 'texte' => "Le franc guinéen n'est pas le franc CFA. Un site qui affiche des prix en FCFA, ou une facture qui ne précise pas la devise de règlement, crée une confusion avec les clients de Conakry : les prix se tiennent en GNF et les devis du prestataire en euros."],
                ['titre' => 'Intégrer MTN MoMo avant Orange Money', 'texte' => "Avec 92 % des abonnés au mobile money en juin 2025 selon l'ARPT, Orange Money est le service à intégrer en premier. Commencer par le service minoritaire retarde l'encaissement pour l'essentiel de la clientèle."],
                ['titre' => 'Attendre l\'autorité de protection pour s\'occuper des données', 'texte' => "La loi de 2016 impose déjà une déclaration ou une autorisation préalable, même si l'autorité n'est pas confirmée en activité. Tenir un registre de traitements et documenter l'emplacement des données coûte peu et évite un rattrapage."],
                ['titre' => 'Compter sur une facture électronique imminente', 'texte' => "La réforme est inscrite au Code général des impôts, avec une présentation en décembre 2021, mais aucune plateforme nationale en service n'est annoncée. Des données de facturation propres valent mieux qu'une refonte précipitée."],
                ['titre' => 'Dimensionner le service sur le taux d\'abonnés mobiles', 'texte' => "89,1 % d'abonnés mobiles ne veut pas dire que chaque habitant a un téléphone connecté : le taux compte des cartes SIM, et 26,5 % des habitants seulement étaient en ligne en octobre 2025 selon DataReportal."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet numérique guinéen à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                "Son expérience dépasse six ans, il s'est formé à EPITECH en 2022, il a conçu Wapy, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d'Afrique francophone, et il a co-fondé Audyxa. Richard peut accompagner à distance les entreprises en Guinée : mêmes langues de travail, un décalage d'une heure, des échanges par WhatsApp et visioconférence, et un devis en euros qui évite toute conversion entre francs.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment Richard accompagne-t-il une entreprise guinéenne ?',
            'legende' => 'Mode de collaboration de Richard avec une entreprise guinéenne',
            'entetes' => ['Question', 'Réponse'],
            'lignes'  => [
                ['Accompagnement', 'Richard peut accompagner à distance les entreprises en Guinée.'],
                ['Mode de travail', 'À distance depuis Cotonou, en français, avec des points en visioconférence et par WhatsApp.'],
                ['Devis', 'En euros, sur devis, après un premier échange sur votre besoin.'],
                ['Pour aller plus loin', '<a href="/realisations/">Les réalisations</a>, <a href="/richard-salanon">le parcours de Richard</a> et <a href="/a-propos/">la page À propos</a>.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous dirigez une entreprise en Guinée et avez un projet numérique ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels et ce que vous voulez encaisser par Orange Money ou MTN MoMo : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il sur place à Conakry ?', 'r' => "Non, pas pour le moment : l'accompagnement est à distance, depuis Cotonou. Les points se font en visioconférence et par message, avec une heure d'écart. Cela convient à presque tous les projets de logiciel, d'automatisation et de formation."],
        ['q' => 'Quels moyens de paiement mobile fonctionnent en Guinée ?', 'r' => "Orange Money, qui détenait 92 % des 3,2 millions d'abonnés aux services financiers mobiles fin juin 2025 selon l'ARPT, et MTN MoMo, avec 8 %. Coris Money, lancé par Coris Bank International Guinée le 16 février 2026, s'y ajoute."],
        ['q' => 'En quelle monnaie sont établis les devis pour la Guinée ?', 'r' => "En euros. La Guinée est hors zone franc : sa monnaie est le franc guinéen, émis par la Banque centrale de la République de Guinée. Le devis se prépare après un premier échange sur votre besoin."],
        ['q' => 'La Guinée a-t-elle une autorité de protection des données ?', 'r' => "La loi L/2016/037/AN prévoit son installation par voie réglementaire, mais au 6 octobre 2026, aucune installation n'est confirmée. La déclaration préalable et l'autorisation des transferts restent prévues par la loi : vérifiez l'état actuel avant un grand traitement."],
        ['q' => 'Les données personnelles doivent-elles rester en Guinée ?', 'r' => "Les synthèses juridiques consultées (DLA Piper, Data Protection Africa) ne mentionnent aucune obligation d'hébergement local. La loi de 2016 soumet en revanche le transfert vers un pays tiers à l'autorisation de l'autorité, sous condition d'un niveau de protection équivalent. Un projet doit donc documenter où sont stockées les données."],
        ['q' => 'La facture électronique est-elle obligatoire en Guinée ?', 'r' => "Le ministère du Budget indique que la réforme est inscrite au Code général des impôts depuis sa présentation de décembre 2021. Au 6 octobre 2026, aucune plateforme nationale en service ni aucun calendrier n'est annoncé : les règles de numérotation et de mentions restent la référence."],
        ['q' => 'Quel est le taux de TVA en Guinée ?', 'r' => "Le taux normal est de 18 %. Selon un guide fiscal tiers, une franchise s'applique sous 1 milliard de GNF de chiffre d'affaires de l'année précédente, et les administrations, mines, hydrocarbures et télécoms retiennent 50 % de la TVA sur leurs paiements. Validez votre cas avec un expert-comptable."],
        ['q' => 'La Guinée applique-t-elle l\'OHADA et le SYSCOHADA ?', 'r' => "Oui. Le traité de l'OHADA a été ratifié par la Guinée le 5 mai 2000 et y est entré en vigueur le 21 novembre 2000. Les entreprises guinéennes tiennent donc leur comptabilité selon le SYSCOHADA, ce qui conditionne la localisation choisie dans Odoo ou Dolibarr."],
        ['q' => 'Quel est le décalage horaire entre Cotonou et Conakry ?', 'r' => "Une heure : Conakry est à UTC+0 toute l'année, Cotonou à UTC+1. Les plages de réponse de Richard, de 7 h à 20 h heure de Cotonou, correspondent à 6 h à 19 h à Conakry."],
        ['q' => 'Comment financer une formation au numérique en Guinée ?', 'r' => "L'ONFPP met en œuvre la politique de formation continue. Il a validé en mars 2026, avec Enabel et l'Union européenne, une Facilité de développement des compétences destinée en priorité aux entreprises de moins de 30 salariés. Contactez-le pour connaître les conditions d'accès."],
    ],

    'sources' => [
        ['titre' => 'Guinéenews, RGPH-4 : le président officialise les résultats préliminaires (17 521 167 habitants)', 'url' => 'https://guineenews.org/2026/03/08/rgph-4-le-president-mamadi-doumbouya-officialise-les-resultats-preliminaires-de-17-521-167-decret/', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Guinée', 'url' => 'https://datareportal.com/reports/digital-2026-guinea', 'date' => '2026-10-06'],
        ['titre' => 'Ecofin, la Guinée demande à Orange d\'améliorer son service (chiffres ARPT de juin 2025)', 'url' => 'https://www.ecofinagency.com/news-digital/0907-57232-guinea-urges-orange-to-improve-service-and-expand-network-coverage', 'date' => '2026-10-06'],
        ['titre' => 'Ecofin, Coris Bank entre sur le marché guinéen du mobile money', 'url' => 'https://www.ecofinagency.com/news-digital/1802-53017-coris-bank-enters-guinea-s-mobile-money-market', 'date' => '2026-10-06'],
        ['titre' => 'BCRG, la Banque centrale et les établissements de monnaie électronique (26 août 2025)', 'url' => 'https://www.bcrg-guinee.org/wp-content/uploads/2025/08/BCRG-et-les-EME.pdf', 'date' => '2026-10-06'],
        ['titre' => 'BCRG, lancement du Switch monétique et digital (15 janvier 2025)', 'url' => 'https://www.bcrg-guinee.org/wp-content/uploads/2025/01/Switch-Monetique.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Guinéenews, la BCRG lance NimbaPay (22 juillet 2026)', 'url' => 'https://guineenews.org/2026/07/22/guinee-la-bcrg-lance-nimbapay-la-plateforme-nationale-qui-revolutionne-les-paiements-instantanes-et-linteroperabilite/', 'date' => '2026-10-06'],
        ['titre' => 'Banque centrale de la République de Guinée, site officiel', 'url' => 'https://www.bcrg-guinee.org/', 'date' => '2026-10-06'],
        ['titre' => 'Journal officiel, loi L/2023/019/CNT portant identification des personnes physiques', 'url' => 'https://journal-officiel.sgg.gov.gn/textes-officiels/lois/2023/Guinee-Loi-2023-19.pdf', 'date' => '2026-10-06'],
        ['titre' => 'OMS, loi L/2016/037/AN relative à la cybersécurité et à la protection des données', 'url' => 'https://extranet.who.int/cpcd/health-legislation/loi-2016037an-relative-la-cyber-securite-et-la-protection-des-donnees-caractere', 'date' => '2026-10-06'],
        ['titre' => 'DLA Piper, protection des données en Guinée', 'url' => 'https://www.dlapiperdataprotection.com/index.html?c=GN&t=law', 'date' => '2026-10-06'],
        ['titre' => 'Data Protection Africa, fiche Guinée', 'url' => 'https://dataprotection.africa/guinea/', 'date' => '2026-10-06'],
        ['titre' => 'Le360, la Guinée dotée d\'une loi sur les transactions électroniques', 'url' => 'https://afrique.le360.ma/guinee/economie/2016/06/09/3048-la-guinee-dotee-dune-loi-sur-les-transactions-electroniques-3048', 'date' => '2026-10-06'],
        ['titre' => 'Ministère du Budget, présentation de la facture électronique normalisée', 'url' => 'https://mbudget.gov.gn/2021/12/presentation-de-la-facture-electronique-normalisee/', 'date' => '2026-10-06'],
        ['titre' => 'Kintsugi, guide de la TVA en Guinée', 'url' => 'https://trykintsugi.com/sales-tax-guides/africa/guinea', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, la Guinée', 'url' => 'https://www.ohada.com/etats-membres/guinee.html', 'date' => '2026-10-06'],
        ['titre' => 'Guinéenews, décret sur les conditions de sécurité et de protection des données personnelles (avril 2025)', 'url' => 'https://guineenews.org/2025/04/15/guinee-les-conditions-de-securite-et-de-protection-des-donnees-personnelles-fixees-decret/', 'date' => '2026-10-06'],
        ['titre' => 'Guinéenews, l\'ONFPP valide son dispositif de développement des compétences (25 mars 2026)', 'url' => 'https://guineenews.org/2026/03/25/guinee-lonfpp-valide-son-dispositif-de-developpement-des-competences/', 'date' => '2026-10-06'],
        ['titre' => 'Guinéenews, ONFPP : attributions, organisation et fonctionnement', 'url' => 'https://guineenews.org/2022/09/18/onfpp-attributions-organisations-et-fonctionnement-decret/', 'date' => '2026-10-06'],
        ['titre' => 'Guinéenews, Simandou : premier chargement de minerai (octobre 2025)', 'url' => 'https://guineenews.org/2025/10/17/simandou-rio-tinto-lance-le-premier-chargement-de-minerai-vers-le-port-de-moribaya/', 'date' => '2026-10-06'],
        ['titre' => 'Burkina24, CinetPay disponible au Burkina Faso et dans huit pays dont la Guinée Conakry', 'url' => 'https://burkina24.com/?p=226112', 'date' => '2026-10-06'],
        ['titre' => 'Guinéenews, les langues nationales ont désormais la même valeur que le français', 'url' => 'https://guineenews.org/2025/06/30/dansa-kourouma-les-langues-nationales-ont-desormais-la-meme-valeur-que-le-francais/', 'date' => '2026-10-06'],
        ['titre' => 'Fuseau horaire de la Guinée', 'url' => 'https://www.zeitverschiebung.net/fr/country/gn', 'date' => '2026-10-06'],
        ['titre' => 'UIT, indicatifs téléphoniques des pays', 'url' => 'https://www.itu.int/oth/t0202', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'seo-local-google-business', 'application-web-sur-mesure', 'formation-en-entreprise'],
        'formations'  => ['odoo-comptabilite-syscohada', 'whatsapp-business', 'ia-en-entreprise', 'securite-donnees-dirigeants'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'metiers'     => ['logisticiens-transitaires', 'commercants-e-commercants', 'banques-microfinance'],
    ],
];
