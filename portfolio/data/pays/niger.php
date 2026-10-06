<?php
// ============================================================
// data/pays/niger.php · Page pays « Niger » (vague 1D, tranche 2, XOF).
// Faits externes vérifiés le 06/10/2026 : ARCEP Niger (observatoire du troisième
// trimestre 2025), DataReportal (Digital 2026), BCEAO (liste des établissements de
// monnaie électronique au 28/02/2026), loi n° 2023-31 modifiant la loi n° 2022-59,
// loi n° 2019-03 (Journal officiel du 30/04/2019), DGI (SECeF, via EDICOM), OHADA,
// Banque mondiale, ONU (perspectives d'urbanisation), communiqué de la CEDEAO du 29/01/2025.
// Clés de fiche absentes faute de source confirmée : mobile_money, agregateurs, financement.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Des logiciels, des automatisations et des paiements Airtel Money pour les entreprises nigériennes, pilotés à distance depuis Cotonou, sans décalage horaire",
    'title'   => "Développeur et consultant digital au Niger | Richard SALANON",
    'meta'    => "Sites, applications, automatisation, IA, Odoo et Dolibarr pour les entreprises du Niger : Airtel Money, facture certifiée SECeF, HAPDP, devis en FCFA.",
    'en_bref' => "Richard SALANON conçoit pour les entreprises du Niger des sites, des applications, des automatisations et des intégrations d'IA, déploie Odoo ou Dolibarr et forme les équipes. Il travaille à distance depuis Cotonou, à la même heure qu'à Niamey, en français et avec des devis en FCFA. Les paiements s'appuient sur Airtel Money et les autres monnaies électroniques agréées par la BCEAO, la facturation sur le système certifié SECeF de la DGI et la protection des données sur la loi de 2022 contrôlée par la HAPDP.",
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale' => ['v' => 'Niamey', 'source' => 'https://www.zeitverschiebung.net/fr/timezone/africa--niamey', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Niamey : 1 401 149 habitants', 'Zinder : 740 218', 'Maradi : 666 205', 'Tahoua : 342 253', 'Agadez : 335 322 (estimations ONU 2025)'], 'source' => 'https://www.worldometers.info/fr/population/plus-grandes-villes-en-niger/', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'UTC+1 toute l\'année, sans heure d\'été : la même heure qu\'à Cotonou', 'source' => 'https://www.zeitverschiebung.net/fr/timezone/africa--niamey', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+227', 'source' => 'https://www.worldometers.info/fr/indicatifs-pays/niger-indicatif-pays/', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Haoussa, langue nationale depuis la Charte de la refondation de 2025', 'Français, langue de travail'], 'source' => 'https://fr.wikipedia.org/wiki/Langues_au_Niger', 'date' => '2026-10-06'],
        'population' => ['v' => '28,1 millions d\'habitants fin 2025, dont 17,5 % en milieu urbain', 'source' => 'https://datareportal.com/reports/digital-2026-niger', 'date' => '2026-10-06'],
        'internet' => ['v' => '6,52 millions d\'internautes, soit 23,2 % des habitants, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-niger', 'date' => '2026-10-06'],
        'mobile' => ['v' => '17 737 818 lignes mobiles fin septembre 2025, soit 62,93 % de la population estimée par l\'INS', 'source' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Pétrole, devenu moteur des exportations depuis 2024', 'Agriculture pluviale, dont dépend la croissance'], 'source' => 'https://www.banquemondiale.org/fr/news/press-release/2025/06/12/niger-economy-rebounds-in-2024-thanks-to-large-scale-oil-exports-and-a-good-agricultural-season', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Franc CFA (XOF), émis par la BCEAO, dont la liste de février 2026 recense les services de monnaie électronique du Niger', 'source' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Airtel Money (Airtel Niger, établissement de monnaie électronique)', 'Moov Flooz (Banque Atlantique Niger et Atlantique Telecom)', 'Orange Money (BOA Niger et Orange Niger)', 'Wave, Coris Money, MyNITA, Amanata, Al Izza Business Pay'], 'source' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Loi n° 2022-59 du 16 décembre 2022 relative à la protection des données à caractère personnel, modifiée par la loi n° 2023-31 du 4 juillet 2023', 'source' => 'https://www.dataguidance.com/sites/default/files/loi_ndeg_2023-31_modifiant_la_loi_ndeg_2022-59.pdf', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Haute Autorité de Protection des Données à caractère Personnel (HAPDP), rattachée à la Présidence de la République', 'source' => 'https://www.dataguidance.com/sites/default/files/loi_ndeg_2023-31_modifiant_la_loi_ndeg_2022-59.pdf', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture certifiée SECeF (code SECeF/DGI et QR code) obligatoire pour les assujettis à la TVA depuis le 1er septembre 2021 ; plateforme gratuite e-SECeF depuis 2023', 'source' => 'https://edicomgroup.com/fr/facture-electronique/niger', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Taux normal de 19 % sur la plupart des biens et services ; produits de première nécessité exonérés, exportations à taux zéro', 'source' => 'https://taxatlas.io/country/niger/vat-sales-tax', 'date' => '2026-10-06'],
        'ohada' => ['v' => 'Membre : traité ratifié le 5 juin 1995, en vigueur au Niger depuis le 18 septembre 1995', 'source' => 'https://www.ohada.com/etats-membres/niger.html', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 2019-03 du 30 avril 2019 portant sur les transactions électroniques au Niger', 'source' => 'https://www.africa-laws.org/Niger/Comercial%20law/Loi%20n%C2%B0%202019-03%20du%2030%20avril%202019,%20portant%20sur%20les%20transactions%20%C3%A9lectroniques%20au%20Niger.pdf', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun : Niamey et Cotonou sont toutes deux à UTC+1'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Niger, et que change-t-il pour un projet ?',
            'paragraphes' => [
                "Le Niger compte 28,1 millions d'habitants fin 2025 selon DataReportal, mais seulement 17,5 % d'entre eux vivent en ville. Dans un pays aussi rural, le numérique passe d'abord par le téléphone : l'Autorité de régulation des communications électroniques et de la poste, l'ARCEP, a dénombré 17 737 818 lignes mobiles à la fin du troisième trimestre 2025, soit 62,93 % de la population de 28 184 991 habitants estimée par l'Institut national de la statistique. Quatre opérateurs détiennent une licence mobile : Celtel Niger, c'est-à-dire Airtel, en tête avec 46,68 % du parc, Moov Africa Niger avec 24,50 %, Zamani Com avec 23,41 % et Niger Telecoms avec 5,41 %.",
                "Le haut débit reste encore le point faible. L'ARCEP compte 8 488 371 abonnés à l'internet mobile, soit 30,12 % de la population, mais seulement 57 936 abonnés à l'internet fixe chez les fournisseurs d'accès, dont 63 % chez Niger Telecoms. Une application ou un site destiné à des Nigériens se conçoit donc pour un téléphone, souvent sur une connexion lente : pages légères, images compressées, formulaires courts, et un usage hors ligne partiel lorsque le métier s'y prête, par exemple une saisie sur le terrain envoyée plus tard.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien de Nigériens sont réellement en ligne, et pourquoi les chiffres ne se recoupent-ils pas ?',
            'paragraphes' => [
                "DataReportal, dans son rapport Digital 2026, relève 6,52 millions d'internautes fin 2025, soit 23,2 % des habitants, et 17,4 millions de connexions mobiles cellulaires, soit 61,7 % de la population. L'ARCEP, elle, avance pour le premier trimestre 2025 11,2 millions d'abonnés à internet toutes technologies confondues, soit 40 % de pénétration, contre 34 % auparavant. Les deux séries ne mesurent pas la même chose : l'une compte des personnes qui se sont connectées, l'autre des abonnements, donc des cartes SIM, dont une même personne peut posséder plusieurs.",
                "Pour un projet, la conclusion est prudente. Environ 77 % des habitants restent hors ligne selon DataReportal, et seulement 772 000 personnes sont joignables par la publicité sur Facebook, soit 2,7 % de la population. Une entreprise nigérienne qui vise le grand public ne peut donc pas miser sur le seul réseau social : le téléphone, le SMS, l'appel vocal et le message WhatsApp restent les canaux qui touchent le plus de monde, et le site web sert d'abord les clients déjà équipés, les partenaires étrangers et les donneurs d'ordre.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir pour travailler avec une entreprise nigérienne ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour encaisser au Niger ?',
            'paragraphes' => [
                "La liste officielle des établissements de monnaie électronique de la BCEAO, arrêtée au 28 février 2026, recense neuf services au Niger : un établissement de monnaie électronique, Airtel Niger avec Airtel Money, et huit partenariats entre une banque et un opérateur. On y trouve Orange Money, avec BOA Niger, Moov Flooz, avec Banque Atlantique Niger et Atlantique Telecom, Wave, qui apparaît deux fois, avec Ecobank Niger et avec BIA Niger, Coris Money, MyNITA, avec NITA et 2iSoft, Amanata et Al Izza Business Pay.",
                "Pour l'intégration, ce qui compte est la diversité de l'offre, bien plus fragmentée qu'un duopole : un client de Niamey peut préférer Airtel Money, un autre Orange Money, un troisième garder l'espèce.",
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Comment choisir entre un contrat direct, un prestataire de paiement, le paiement à la livraison et le virement ?',
            'intro'  => 'Le bon montage dépend de ce que vous vendez, de votre clientèle et de votre capacité à administrer des comptes marchands. Voici les options, avec leur logique propre au Niger.',
            'items'  => [
                ['titre' => 'Un contrat direct avec Airtel Money', 'texte' => "Airtel Niger est le seul établissement de monnaie électronique de la liste de la BCEAO et le premier opérateur du pays, avec 46,68 % du parc mobile. Un compte marchand Airtel Money couvre donc la plus grande part de la clientèle mobile, et c'est un bon premier choix pour une boutique ou un service d'abonnement. Les frais et les plafonds se lisent dans le contrat de l'opérateur, pas dans un article de blog."],
                ['titre' => 'Orange Money, Moov Flooz et Wave en complément', 'texte' => "Ces trois services reposent sur un partenariat avec une banque (BOA Niger, Banque Atlantique Niger, Ecobank Niger, BIA Niger). Chacun suppose un dossier et une interface propres : on les ajoute un par un, selon ce que vos clients utilisent vraiment, plutôt que tous dès le départ."],
                ['titre' => 'Un prestataire de paiement multi-services', 'texte' => "Un prestataire qui regroupe plusieurs opérateurs peut simplifier l'intégration. Demandez-lui la liste écrite des opérateurs nigériens qu'il couvre, ses frais et son délai de reversement avant de bâtir votre catalogue autour de lui."],
                ['titre' => 'Le paiement à la livraison et le virement', 'texte' => "Pour des produits chers ou des clients qui se méfient du paiement en ligne, le paiement à la réception reste le plus courant dans le commerce de détail. Il demande un suivi : le logiciel sait marquer une commande comme livrée, encaissée par le livreur, puis versée à l'entreprise. Le virement convient aux ventes entre entreprises, avec une facture certifiée."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule l\'intégration d\'un paiement mobile, du cahier des charges à la mise en production ?',
            'items' => [
                ['titre' => 'Choisir l\'opérateur d\'abord', 'texte' => "Le point de départ est votre clientèle : combien paient en Airtel Money, en Orange Money, en Flooz, en espèces. Si la majorité est chez Airtel, on commence par lui et on documente les autres pour plus tard.", 'duree' => '2 à 3 jours'],
                ['titre' => 'Ouvrir le compte marchand', 'texte' => "L'ouverture dépend de l'opérateur ou de la banque partenaire et de vos pièces d'entreprise ; son délai ne dépend pas de Richard, qui prépare avec vous le dossier pour éviter les allers-retours entre Niamey et l'agence.", 'duree' => 'selon l\'opérateur'],
                ['titre' => 'Développer et tester en bac à sable', 'texte' => "Création du paiement, retour de l'opérateur, notification serveur et page de confirmation. Les cas d'échec sont testés autant que le succès : délai dépassé, solde insuffisant, coupure du réseau en cours de paiement, double clic.", 'duree' => '1 à 2 semaines'],
                ['titre' => 'Rapprocher et mettre en production', 'texte' => "Chaque paiement reçu est rapproché de sa commande et de sa facture dans votre logiciel. Une série d'essais réels de faible montant précède la bascule en production, suivie d'un suivi des premiers jours.", 'duree' => '2 à 4 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Niger ?',
            'paragraphes' => [
                "Quatre textes pèsent sur un projet. La loi n° 2022-59 du 16 décembre 2022 encadre les données personnelles, et la loi n° 2023-31 du 4 juillet 2023 en a réécrit plusieurs articles, notamment ceux qui créent l'autorité de contrôle. La loi n° 2019-03 du 30 avril 2019 porte sur les transactions électroniques. Les règles fiscales de la Direction générale des impôts, la DGI, imposent la facture certifiée. Enfin le Niger est membre de l'OHADA : le traité y est en vigueur depuis le 18 septembre 1995, ce qui impose aux entreprises le droit des affaires et le plan comptable SYSCOHADA communs aux États membres.",
                "Côté données, l'autorité est la Haute Autorité de Protection des Données à caractère Personnel, la HAPDP. Selon les articles 6 et 7 de la loi de 2023, elle est rattachée à la Présidence de la République, reste une autorité administrative indépendante, compte onze membres et peut ouvrir des antennes dans le pays. Le texte prévoit parmi ses ressources les frais de délivrance des autorisations et des récépissés aux responsables de traitement : un traitement passe donc, selon sa nature, par une déclaration suivie d'un récépissé ou par une autorisation. Le détail des cas relève de la HAPDP : demandez-lui la procédure actuelle avant la mise en ligne d'une application qui collecte des données de clients.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où doivent être hébergées les données personnelles des Nigériens ?',
            'paragraphes' => [
                "Le lieu d'hébergement des données de clients nigériens mérite d'être traité dès le cadrage, parce que la loi de 2022 a déjà été modifiée en juillet 2023 et que les exigences de conservation et de transfert relèvent de la HAPDP.",
                "Concrètement, pour une application qui collecte des données de clients nigériens, Richard documente où chaque donnée est stockée, sépare les données personnelles des autres pour pouvoir les déplacer, et prévoit des sauvegardes exportables et un journal des accès. Ce travail ne coûte presque rien au départ et évite une migration lourde le jour où une obligation précise tombe. Pour le transfert hors du pays, faites vérifier la base juridique retenue avec la HAPDP ou un avocat avant d'ouvrir le service.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce que la facture certifiée SECeF, et à qui s\'impose-t-elle ?',
            'paragraphes' => [
                "Le Niger n'attend pas la facture électronique : il l'impose déjà. Selon EDICOM, qui décrit le dispositif, l'émission de factures certifiées est obligatoire depuis le 1er septembre 2021 pour toutes les entreprises assujetties à la TVA, aux régimes du réel normal et du réel simplifié, sous réserve des exceptions que la DGI autorise. Le système s'appelle SECeF, pour système électronique certifié de facturation. Chaque facture porte un code SECeF/DGI et un code QR qui garantissent sa validité et sa traçabilité.",
                "Deux modes existent. Une entreprise peut équiper son logiciel d'un système de facturation d'entreprise, le SFE, relié à un module de contrôle de facturation, le MCF, agréé par la DGI. Depuis 2023, elle peut aussi utiliser la plateforme gratuite e-SECeF, sans achat de matériel : EDICOM mentionne plus de 13 000 utilisateurs en février 2024. Les pièces sont à conserver dix ans, selon le même texte, qui renvoie à l'article 358 du code des impôts.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Facture certifiée, TVA, conservation : que doit prévoir un logiciel pour une entreprise nigérienne ?',
            'legende' => 'Points de conformité fiscale à traiter dans un logiciel de gestion ou de vente au Niger, état au 6 octobre 2026',
            'entetes' => ['Sujet', 'Ce que disent les sources', 'Ce que cela change dans le logiciel'],
            'lignes'  => [
                ['Facture certifiée SECeF', "Obligatoire depuis le 1er septembre 2021 pour les assujettis à la TVA ; code SECeF/DGI et code QR sur chaque facture (EDICOM).", "Le logiciel de gestion ne doit pas émettre de simple PDF : il passe par un SFE et un MCF agréés, ou il envoie la facture à e-SECeF et reprend le code renvoyé."],
                ['Plateforme e-SECeF', "Service gratuit en ligne lancé en 2023, sans matériel à acheter.", "Une intégration par interface de programmation peut éviter la double saisie. Richard vérifie avec vous la documentation disponible avant de la promettre."],
                ['TVA courante', "Taux normal de 19 % sur la plupart des biens et services, selon Tax Atlas ; les produits de première nécessité sont exonérés et les exportations taxées à taux zéro.", "Le plan de taxes de l'ERP est paramétré selon le régime de l'entreprise ; le choix du taux d'une ligne se valide avec l'expert-comptable."],
                ['Conservation', "Dix ans pour les pièces comptables et les factures, selon l'article cité par EDICOM.", "Sauvegardes versionnées et exportables, avec un journal des modifications."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises nigériennes, selon leur besoin ?',
            'legende' => 'Besoins fréquents des entreprises du Niger, et le service qui y répond',
            'entetes' => ['Besoin typique au Niger', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne et encaisser par Airtel Money, Orange Money ou Flooz', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Se présenter à un bailleur, à un partenaire étranger ou à un appel d\'offres depuis Niamey', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Émettre des factures certifiées SECeF et tenir une comptabilité SYSCOHADA', 'ERP complet', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Équiper une PME avec un ERP plus léger, sur votre propre serveur', 'ERP modulaire', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp, dans la langue de leur choix, à tester avant la mise en service', 'Assistant conversationnel', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Relier le logiciel, le site et les opérateurs de paiement', 'Interfaces de programmation', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Automatiser les relances et les confirmations de paiement sans ressaisie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Suivre des livraisons, des collectes ou des visites de terrain avec saisie hors ligne', 'Application sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Apparaître sur Google quand on cherche un prestataire à Niamey', 'Référencement local', '<a href="/services/seo-local-google-business">SEO local et fiche Google</a>'],
                ['Choisir par où commencer la digitalisation', 'Cadrage', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Former les équipes aux nouveaux outils', 'Formation', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs du Niger ?',
            'items' => [
                [
                    'secteur'  => 'Pétrole et sous-traitance autour de l\'oléoduc vers Sèmè',
                    'probleme' => 'Depuis le démarrage des exportations de brut en 2024, de petites entreprises de transport, de maintenance et de fournitures travaillent pour des donneurs d\'ordre exigeants, avec des devis, des bons et des factures éparpillés dans des classeurs.',
                    'solution' => 'Un ERP qui relie devis, bons de commande, factures certifiées SECeF et suivi des paiements, avec des documents rangés par dossier client. Une vitrine bilingue rassure les partenaires étrangers qui cherchent un fournisseur à Niamey.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Intégration d\'Odoo'],
                ],
                [
                    'secteur'  => 'Agriculture, élevage et négoce de céréales',
                    'probleme' => 'La production dépend de la pluie, selon la Banque mondiale, et un négociant ou une coopérative suit ses achats, ses stocks et ses ventes dans des cahiers et des messages vocaux, sans vue d\'ensemble avant la soudure.',
                    'solution' => 'Une application de collecte qui fonctionne avec une connexion faible et envoie les données dès que le réseau revient : quantités achetées, lieu, prix, avance versée. Un tableau de bord donne les stocks par site et les créances à recouvrer.',
                    'lien'     => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Application web sur mesure'],
                ],
                [
                    'secteur'  => 'Commerce de détail et vente en ligne',
                    'probleme' => 'Un commerçant de Niamey vend déjà par message, reçoit une capture d\'écran de transfert Airtel Money et vérifie chaque paiement à la main avant de livrer.',
                    'solution' => 'Une boutique légère, pensée pour la 3G, avec paiement mobile intégré : la commande n\'est confirmée qu\'après la notification de l\'opérateur, le reçu part seul, et le paiement à la livraison reste possible pour les clients qui préfèrent.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Boutique en ligne'],
                ],
                [
                    'secteur'  => 'Entreprises assujetties à la TVA qui doivent émettre des factures SECeF',
                    'probleme' => 'Une PME facture dans un tableur, puis ressaisit chaque facture sur e-SECeF : double saisie, erreurs de numéro et retard de déclaration.',
                    'solution' => 'Un logiciel de facturation relié au système certifié : la facture part du devis accepté, reçoit son code SECeF et son QR code, et alimente la comptabilité SYSCOHADA sans ressaisie. Les pièces sont sauvegardées pour la durée de conservation exigée.',
                    'lien'     => ['url' => '/services/integration-dolibarr', 'texte' => 'Intégration de Dolibarr'],
                ],
                [
                    'secteur'  => 'Services payés par mobile money : écoles, cliniques, prestataires',
                    'probleme' => 'Un établissement privé encaisse des frais échelonnés par transfert mobile, et le comptable passe des heures à rattacher chaque versement au bon dossier.',
                    'solution' => 'Un espace où chaque famille ou patient voit son solde, paie par l\'opérateur de son choix et reçoit un reçu ; le versement est rattaché au dossier par la notification de l\'opérateur, puis transmis à la comptabilité.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'API et intégrations'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes nigériennes, et comment financer la formation ?',
            'paragraphes' => [
                "Les formations se donnent à distance, en visioconférence, avec des exercices sur vos propres données et un suivi par message entre les séances. Elles se tiennent entièrement à distance. Un groupe de cinq à douze personnes, une demi-journée par module, laisse le temps de pratiquer sur l'outil réel de l'entreprise. Prévoyez un support léger : une séance de deux heures supporte mal une connexion instable, d'où des supports téléchargeables à l'avance et des enregistrements à revoir.",
                "Pour le financement, le Fonds d'appui à la formation professionnelle et à l'apprentissage, le FAFPA, est l'organisme public à solliciter en premier : contactez-le directement pour connaître les conditions d'accès à un financement de formation en entreprise avant de budgéter.",
                "Quelques parcours adaptés au contexte nigérien : <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo et la comptabilité SYSCOHADA</a> pour les équipes financières, <a href=\"/formations/whatsapp-business\">WhatsApp Business</a> pour la relation client, <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour les dirigeants et <a href=\"/formations/securite-donnees-dirigeants\">la sécurité des données</a>, utile depuis la création de la HAPDP. Le catalogue complet est sur <a href=\"/formations/\">la page des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                "Niamey et Cotonou sont toutes les deux à UTC+1 toute l'année, sans heure d'été : il n'y a aucun décalage, et les plages de réponse de Richard, de 7 h à 20 h, sont les vôtres. La collaboration se fait à distance, sans déplacement. La Charte de la refondation de 2025 a fait du haoussa la langue nationale et du français une langue de travail ; Richard travaille en français, à l'écrit comme à l'oral, ce qui convient aux documents d'une entreprise, aux contrats et aux interfaces des logiciels de gestion.",
                "Les devis sont libellés en FCFA, la monnaie de l'UEMOA que le Niger partage avec le Bénin : aucune conversion, aucun écart de change. Le règlement se fixe au devis. Les échanges se font par appel vocal, visioconférence et message, et toute demande reçoit une réponse sous 24 heures. Si la connexion de votre bureau est coupée, un point par appel vocal et un résumé écrit suffisent.",
            ],
        ],
        [
            'type'        => 'tableau',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise nigérienne ?',
            'legende'     => 'Prix de départ publiés sur ce site, en FCFA et en euros à 655,957 FCFA pour 1 euro',
            'entetes'     => ['Prestation', 'À partir de', 'Équivalent en euros'],
            'lignes'      => [
                ['Page d\'atterrissage', '150 000 FCFA', 'environ 229 euros'],
                ['Site vitrine', '300 000 FCFA', 'environ 457 euros'],
                ['Référencement naturel', '75 000 FCFA', 'environ 114 euros'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce qui fait varier le prix d\'un projet au Niger ?',
            'paragraphes' => [
                "Au-delà de ces prix de départ, tout autre projet est chiffré sur devis, en FCFA, après un cadrage. Plusieurs éléments propres au Niger font varier le montant. Le raccordement à la facture certifiée : un logiciel qui doit parler à un SFE et à un MCF agréés, ou à e-SECeF, demande plus de travail qu'un modèle de document. Le nombre de moyens de paiement : Airtel Money seul coûte moins que Airtel, Orange Money et Flooz plus le paiement à la livraison.",
                "Pèsent aussi la tolérance aux coupures de réseau, qui oblige à une saisie hors ligne avec synchronisation, l'hébergement des données personnelles, les données à reprendre d'anciens fichiers et la formation. Les frais des opérateurs de monnaie électronique ne font pas partie du devis de Richard : ils se règlent avec chaque opérateur, et Richard conseille de les faire figurer par écrit dans votre contrat avant de bâtir un modèle économique sur eux.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que vérifier à sa date dans le contexte institutionnel récent du Niger ?',
            'texte' => 'Le retrait du Niger, du Mali et du Burkina Faso de la CEDEAO a pris effet le 29 janvier 2025, selon le communiqué de la CEDEAO du même jour. À la date de rédaction, le franc CFA émis par la BCEAO reste la monnaie du Niger. Pour un projet, cela se traduit par des vérifications datées, pas par un jugement : relisez au moment du devis la monnaie de facturation, les règles de circulation des biens et des services et toute décision de l\'ARCEP, de la DGI ou de la BCEAO. Un cahier des charges fondé sur un texte ou une marque de 2023 peut être déjà changé.',
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs voit-on le plus souvent dans les projets numériques au Niger ?',
            'intro'  => 'Ces erreurs viennent des particularités nigériennes décrites plus haut ; chacune se prévient dès le cadrage.',
            'items'  => [
                ['titre' => 'Émettre des factures sans passer par le système certifié', 'texte' => "Un PDF produit par le logiciel de gestion ne remplace pas une facture portant le code SECeF/DGI et le code QR pour une entreprise assujettie à la TVA. Branchez la facturation sur SECeF dès le premier module."],
                ['titre' => 'Concevoir pour le haut débit', 'texte' => "Avec 57 936 abonnés à l'internet fixe et 30,12 % de pénétration de l'internet mobile fin septembre 2025, un site lourd perd ses visiteurs. Les images se compressent et les pages restent légères."],
                ['titre' => 'Confondre lignes mobiles et internautes', 'texte' => "62,93 % de lignes mobiles ne signifie pas que 62,93 % des habitants sont en ligne : DataReportal compte 23,2 % d'internautes fin 2025. Dimensionner une clientèle sur le premier taux la surestime."],
                ['titre' => 'Ne prévoir qu\'un seul moyen de paiement mobile', 'texte' => "Airtel domine avec 46,68 % du parc mobile, mais Moov Africa et Zamani Com en détiennent environ un quart chacun. Une boutique qui n'accepte qu'un opérateur écarte une part de ses clients ; le paiement à la livraison reste une soupape."],
                ['titre' => 'Compter sur un agrégateur sans le vérifier', 'texte' => "Demandez par écrit à tout prestataire qui regroupe plusieurs opérateurs la liste de ceux qu'il couvre au Niger, ses frais et son délai de reversement, et ne bâtissez pas votre modèle sur un prospectus."],
                ['titre' => 'Chiffrer en euros une offre pour une entreprise du Niger', 'texte' => "Les clients nigériens raisonnent en FCFA. Un devis en euros les expose à une conversion inutile : l'équivalent en euros se donne seulement à titre indicatif."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet numérique nigérien à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                "Son expérience dépasse six ans, il s'est formé à EPITECH en 2022, il a conçu Wapy, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d'Afrique francophone, et il a co-fondé Audyxa. Le Niger et le Bénin partagent le franc CFA, la langue de travail et l'heure légale, et l'oléoduc d'Agadem au terminal de Sèmè-Kpodji, près de Cotonou, les relie par le pétrole. Le tableau ci-dessous résume son expérience au Niger.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Richard a-t-il déjà travaillé avec des entreprises nigériennes ?',
            'legende' => 'Expérience de Richard au Niger',
            'entetes' => ['Question', 'Réponse'],
            'lignes'  => [
                ['Déjà travaillé', 'oui : Richard a déjà travaillé avec des entreprises au Niger.'],
                ['Réalisations', 'Les projets de Richard sont présentés sur <a href="/realisations/">la page des réalisations</a>.'],
                ['Mode de travail', 'À distance depuis Cotonou, en français, à la même heure qu\'à Niamey, avec des devis en FCFA.'],
                ['Pour aller plus loin', '<a href="/richard-salanon">Le parcours de Richard</a> et <a href="/a-propos/">la page À propos</a>.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous dirigez une entreprise au Niger et avez un projet numérique ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels et ce que vous voulez encaisser par Airtel Money, Orange Money ou Flooz : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il sur place à Niamey ?', 'r' => "L'intervention se fait à distance, depuis Cotonou. Les points se font en visioconférence, par appel vocal et par message, sans décalage horaire. Cela convient à presque tous les projets de logiciel, d'automatisation et de formation."],
        ['q' => 'Quels moyens de paiement mobile fonctionnent au Niger ?', 'r' => "La liste de la BCEAO du 28 février 2026 recense Airtel Money, Orange Money, Moov Flooz, Wave, Coris Money, MyNITA, Amanata et Al Izza Business Pay. Airtel Niger est le seul établissement de monnaie électronique ; les autres reposent sur un partenariat avec une banque."],
        ['q' => 'Quel opérateur mobile domine au Niger ?', 'r' => "Celtel Niger, c'est-à-dire Airtel, détient 46,68 % du parc mobile fin septembre 2025 selon l'ARCEP, devant Moov Africa Niger (24,50 %), Zamani Com (23,41 %) et Niger Telecoms (5,41 %)."],
        ['q' => 'Faut-il déclarer son site ou son application à la HAPDP ?', 'r' => "La loi n° 2022-59, modifiée par la loi n° 2023-31, a créé la HAPDP, qui délivre des autorisations et des récépissés aux responsables de traitement. La procédure applicable à votre traitement dépend de sa nature : confirmez-la auprès de la HAPDP avant la mise en ligne."],
        ['q' => 'Les données personnelles doivent-elles rester au Niger ?', 'r' => "L'hébergement se confirme auprès de la HAPDP dès le cadrage. Un projet doit documenter où sont stockées les données et rester capable de les déplacer, au cas où une obligation serait publiée."],
        ['q' => 'La facture électronique est-elle obligatoire au Niger ?', 'r' => "Oui pour les entreprises assujetties à la TVA : la facture certifiée SECeF, avec un code SECeF/DGI et un code QR, est obligatoire depuis le 1er septembre 2021, selon EDICOM. Les entreprises peuvent aussi utiliser la plateforme gratuite e-SECeF lancée en 2023."],
        ['q' => 'Le Niger applique-t-il l\'OHADA et le SYSCOHADA ?', 'r' => "Oui. Le Niger a ratifié le traité de l'OHADA le 5 juin 1995 et il y est en vigueur depuis le 18 septembre 1995. Les entreprises nigériennes tiennent donc leur comptabilité selon le SYSCOHADA, ce qui conditionne la localisation comptable choisie dans Odoo ou Dolibarr."],
        ['q' => 'Le Niger utilise-t-il toujours le franc CFA après sa sortie de la CEDEAO ?', 'r' => "Oui à la date de rédaction. Le retrait de la CEDEAO a pris effet le 29 janvier 2025, mais le franc CFA émis par la BCEAO reste la monnaie du Niger, dont la liste de février 2026 recense les services de monnaie électronique. Les devis sont libellés en FCFA ; vérifiez toute évolution avant de signer."],
        ['q' => 'Quel est le décalage horaire entre Cotonou et Niamey ?', 'r' => "Aucun : Niamey et Cotonou sont à UTC+1 toute l'année, sans heure d'été. Les plages de réponse de Richard, de 7 h à 20 h heure de Cotonou, sont les mêmes à Niamey."],
        ['q' => 'Comment financer une formation au numérique au Niger ?', 'r' => "Le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA) est l'organisme public à contacter pour connaître les conditions d'un financement de formation en entreprise : renseignez-vous directement avant de budgéter."],
        ['q' => 'En quelle monnaie sont établis les devis pour le Niger ?', 'r' => "En FCFA. Les prix de départ publiés sont de 150 000 FCFA pour une page d'atterrissage, 300 000 FCFA pour un site vitrine et 75 000 FCFA pour le référencement naturel. Les autres projets se chiffrent sur devis."],
    ],

    'sources' => [
        ['titre' => 'ARCEP Niger, observatoire des communications électroniques, troisième trimestre 2025', 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Niger', 'url' => 'https://datareportal.com/reports/digital-2026-niger', 'date' => '2026-10-06'],
        ['titre' => 'Ecofin Agency, l\'ARCEP du Niger lance une plateforme de suivi des réseaux mobiles (28 janvier 2026)', 'url' => 'https://www.ecofinagency.com/news-digital/3001-52433-niger-launches-real-time-monitoring-platform-for-mobile-networks', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, établissements de monnaie électronique au Niger (28 février 2026)', 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2023-31 du 4 juillet 2023 modifiant la loi n° 2022-59 sur la protection des données à caractère personnel', 'url' => 'https://www.dataguidance.com/sites/default/files/loi_ndeg_2023-31_modifiant_la_loi_ndeg_2022-59.pdf', 'date' => '2026-10-06'],
        ['titre' => 'EDICOM, la facturation électronique et la déclaration fiscale au Niger (SECeF)', 'url' => 'https://edicomgroup.com/fr/facture-electronique/niger', 'date' => '2026-10-06'],
        ['titre' => 'Tax Atlas, TVA au Niger', 'url' => 'https://taxatlas.io/country/niger/vat-sales-tax', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, le Niger', 'url' => 'https://www.ohada.com/etats-membres/niger.html', 'date' => '2026-10-06'],
        ['titre' => 'Journal officiel du Niger du 30 avril 2019 : loi n° 2019-03 portant sur les transactions électroniques', 'url' => 'https://www.africa-laws.org/Niger/Comercial%20law/Loi%20n%C2%B0%202019-03%20du%2030%20avril%202019,%20portant%20sur%20les%20transactions%20%C3%A9lectroniques%20au%20Niger.pdf', 'date' => '2026-10-06'],
        ['titre' => 'CEDEAO, communiqué de presse sur le retrait du Burkina Faso, du Mali et du Niger (29 janvier 2025)', 'url' => 'https://ecowas.int/wp-content/uploads/2025/01/FINAL_Communique-de-Presse_CEDEAO_Retrait-BURKINA_MALI_NIGER.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, les langues au Niger (Charte de la refondation, 2025)', 'url' => 'https://fr.wikipedia.org/wiki/Langues_au_Niger', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, l\'économie du Niger rebondit en 2024 grâce aux exportations de pétrole', 'url' => 'https://www.banquemondiale.org/fr/news/press-release/2025/06/12/niger-economy-rebounds-in-2024-thanks-to-large-scale-oil-exports-and-a-good-agricultural-season', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, oléoduc Niger-Bénin (exportations depuis mai 2024, terminal de Sèmè)', 'url' => 'https://en.wikipedia.org/wiki/Niger–Benin_Oil_Pipeline', 'date' => '2026-10-06'],
        ['titre' => 'Worldometer, plus grandes villes du Niger (ONU, perspectives d\'urbanisation 2025)', 'url' => 'https://www.worldometers.info/fr/population/plus-grandes-villes-en-niger/', 'date' => '2026-10-06'],
        ['titre' => 'Worldometer, indicatif téléphonique du Niger', 'url' => 'https://www.worldometers.info/fr/indicatifs-pays/niger-indicatif-pays/', 'date' => '2026-10-06'],
        ['titre' => 'Fuseau horaire de Niamey', 'url' => 'https://www.zeitverschiebung.net/fr/timezone/africa--niamey', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'seo-local-google-business', 'application-web-sur-mesure', 'formation-en-entreprise'],
        'formations'  => ['odoo-comptabilite-syscohada', 'whatsapp-business', 'ia-en-entreprise', 'securite-donnees-dirigeants'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['commercants-e-commercants', 'agro-industrie', 'banques-microfinance'],
    ],
];
