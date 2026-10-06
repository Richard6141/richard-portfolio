<?php
// ============================================================
// data/pays/congo-brazzaville.php · Page pays « Congo-Brazzaville » (vague 1D, tranche 2, XAF).
// Faits externes relevés le 06/10/2026 : DG Trésor (situation économique, recensement 2023,
// secteur du numérique), DataReportal (Digital 2026), ARPCE via Digital Business Africa (T2 2025),
// Journal officiel n° 45-2019 (loi 29-2019), ministère des Finances (SFEC), Comarch, Lookuptax,
// BEAC, OHADA, FONEA, PawaPay (opérateurs), Yabetoo.
// Clés de fiche absentes faute de source confirmée : aucune ; l'autorité de protection des données
// est donnée avec l'attribution de sa source.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Richard SALANON, consultant à Cotonou : sites, ERP, IA et paiements MTN MoMo ou Airtel Money pour les sociétés de Brazzaville et de Pointe-Noire",
    'title'   => "Développeur et consultant digital au Congo | Richard SALANON",
    'meta'    => "Sites, applications, automatisation, IA, Odoo et Dolibarr pour les entreprises du Congo-Brazzaville : MTN MoMo, Airtel Money, facture SFEC, devis en FCFA.",
    'en_bref' => "Richard SALANON accompagne à distance les sociétés congolaises, de Brazzaville à Pointe-Noire, sur leurs sites, applications, automatisations, intégrations d'IA, déploiements d'Odoo ou de Dolibarr et formations. Basé à Cotonou, il partage l'heure de Brazzaville, échange en français et chiffre ses devis en FCFA d'Afrique centrale. Les paiements s'appuient sur MTN MoMo et Airtel Money, la facturation sur le système de facture électronique certifiée de la DGID et la protection des données sur la loi de 2019.",
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale' => ['v' => 'Brazzaville (capitale politique) ; Pointe-Noire est la capitale économique', 'source' => 'https://www.tresor.economie.gouv.fr/Pays/CG/la-situation-economique-du-congo', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Brazzaville : 2 145 783 habitants en 2023', 'Pointe-Noire : 1 420 612 habitants en 2023'], 'source' => 'https://www.tresor.economie.gouv.fr/Pays/CG/recensement-2023-au-congo-brazzaville', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'UTC+1 (heure d\'Afrique de l\'Ouest), sans heure d\'été : la même heure qu\'à Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+242', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Français (langue officielle)', 'Lingala et kituba (langues nationales)'], 'source' => 'https://fr.wikipedia.org/wiki/Congo-Brazzaville', 'date' => '2026-10-06'],
        'population' => ['v' => '6 142 180 habitants au recensement de mai 2023, dont 58,1 % à Brazzaville et Pointe-Noire', 'source' => 'https://www.tresor.economie.gouv.fr/Pays/CG/recensement-2023-au-congo-brazzaville', 'date' => '2026-10-06'],
        'internet' => ['v' => '2,50 millions d\'internautes, soit 38,4 % des habitants, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-republic-of-the-congo', 'date' => '2026-10-06'],
        'mobile' => ['v' => 'Environ 5,87 millions d\'abonnés mobiles au deuxième trimestre 2025, en baisse de 1,7 % sur un an, selon l\'ARPCE', 'source' => 'https://www.digitalbusiness.africa/congo-au-t2-2025-la-telephonie-mobile-genere-30371-milliards-de-fcfa-linternet-mobile-17032-milliards/', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Plus de 238 milliards de FCFA de transactions et plus de 79 millions d\'opérations en janvier 2024', 'source' => 'https://www.tresor.economie.gouv.fr/Pays/CG/le-secteur-du-numerique', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Pétrole et gaz : la moitié du PIB en 2024', 'Port en eau profonde de Pointe-Noire et transport', 'Commerce, hôtels, restauration, banques, BTP'], 'source' => 'https://www.tresor.economie.gouv.fr/Pays/CG/la-situation-economique-du-congo', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Franc CFA d\'Afrique centrale (XAF), monnaie de la BEAC ; 1 euro vaut 655,957 XAF', 'source' => 'https://www.beac.int', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['MTN Congo (MTN MoMo)', 'Airtel Congo (Airtel Money)'], 'source' => 'https://docs.pawapay.io/v2/docs/providers', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['PawaPay (MTN MoMo et Airtel en XAF)', 'Yabetoo (disponible au Congo)'], 'source' => 'https://yabetoo.com/', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Loi n° 29-2019 du 10 octobre 2019 portant protection des données à caractère personnel', 'source' => 'https://www.sgg.cg/JO/2019/congo-jo-2019-45.pdf', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Commission nationale de protection des données personnelles (CNPD), dont la mise en place est annoncée en janvier 2026 selon ITWeb Africa', 'source' => 'https://itweb.africa/article/congo-brazzaville-intros-data-protection-commission/nWJadvbNzxkvbjO1', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique certifiée (SFEC) obligatoire depuis le 1er août 2026 pour les grandes et moyennes unités ; très petites unités dès le 1er décembre 2026 (décret n° 2026-101 du 31 mars 2026)', 'source' => 'https://lookuptax.com/tax-changes/congo-brazzaville/sfec-august-commencement-2026', 'date' => '2026-10-06'],
        'tva' => ['v' => '18 % sur les services numériques des fournisseurs non résidents, inscription obligatoire depuis le 1er juillet 2026', 'source' => 'https://www.comarch.com/trade-and-services/data-management/legal-regulation-changes/republic-of-the-congo-rolls-out-certified-e-invoicing-and-digital-services-vat-rules/', 'date' => '2026-10-06'],
        'ohada' => ['v' => 'Membre : traité ratifié le 28 mai 1997, en vigueur au Congo depuis le 17 juillet 1999', 'source' => 'https://www.ohada.com/etats-membres/congo.html', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 37-2019 du 12 décembre 2019 relative aux transactions électroniques', 'source' => 'https://www.tresor.economie.gouv.fr/Pays/CG/le-secteur-du-numerique', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Fonds national d\'appui à l\'employabilité et à l\'apprentissage (FONEA), créé par la loi n° 8-2019 du 9 avril 2019', 'source' => 'https://fonea.cg/missions', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun : Brazzaville et Cotonou sont à UTC+1'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quel est le poids du numérique congolais, de Brazzaville à Pointe-Noire ?',
            'paragraphes' => [
                "Le recensement de mai 2023 a dénombré 6 142 180 habitants au Congo-Brazzaville, selon la Direction générale du Trésor française qui relaie les résultats du RGPH-5. Près de six habitants sur dix, exactement 58,1 %, vivent dans les deux villes de Brazzaville (2 145 783) et de Pointe-Noire (1 420 612). Pour un projet numérique, ce sont donc deux marchés urbains denses, reliés par la route nationale n° 1, plutôt qu'un pays à couvrir uniformément.",
                "DataReportal relève 2,50 millions d'internautes fin 2025, soit 38,4 % de la population, et 6,51 millions de connexions mobiles, soit 99,8 % des habitants. Du côté du régulateur, l'ARPCE comptait environ 5,87 millions d'abonnés mobiles au deuxième trimestre 2025, en baisse de 1,7 % sur un an, et plus de 3,5 millions d'abonnés à l'internet mobile chez MTN et Airtel réunis. La 4G porte 79,0 % du trafic de données mobiles de ce trimestre, la 3G 20,8 %.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi un site ou une application congolaise se pense-t-il d\'abord pour le téléphone ?',
            'paragraphes' => [
                "Le pays n'a pratiquement pas de téléphonie fixe : la Direction générale du Trésor note que ce marché compte moins d'une centaine de lignes et que la téléphonie fixe s'appuie sur les systèmes mobiles. L'internet passe donc par les deux opérateurs mobiles, MTN Congo et Airtel Congo, ou par une dizaine de fournisseurs d'accès fixes, dont Congo Télécom, l'opérateur historique, et le Groupe Vivendi Africa avec sa marque Canal Box.",
                "Deux conséquences pratiques. Les pages doivent rester légères, car une part importante des visiteurs consulte sur un forfait de données. Et le nombre d'abonnés (5,87 millions) dépasse largement celui des internautes (2,50 millions) : tous les abonnés ne naviguent donc pas. Un service qui repose sur un numéro de téléphone, comme un compte client ou un reçu envoyé par message, atteint plus de monde qu'un service qui suppose une adresse électronique consultée chaque jour.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir avant de travailler avec une société congolaise ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment encaisser en ligne à Brazzaville et à Pointe-Noire ?',
            'paragraphes' => [
                "Pour un commerçant congolais, vendre en ligne passe d'abord par le mobile money, très présent dans le pays. La Direction générale du Trésor indique que la valeur des transactions a dépassé 238 milliards de FCFA en janvier 2024 pour plus de 79 millions d'opérations, et relève que le marché est partagé entre deux opérateurs : MTN Congo, qui commercialise MTN MoMo, et Airtel Congo, qui propose Airtel Money. D'après l'ARPCE, MTN conserve la première place en revenus, avec plus de 64,8 % de part au deuxième trimestre 2025.",
                "Ces deux services sont accessibles aux développeurs. Le fournisseur d'interface PawaPay liste dans sa documentation les opérateurs MTN_MOMO_COG et AIRTEL_COG pour la République du Congo, en francs CFA d'Afrique centrale. La carte bancaire existe, mais pèse moins dans la vente locale : une dizaine de banques seulement sont actives dans le pays, toujours selon la Direction générale du Trésor.",
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'MTN MoMo, Airtel Money, agrégateur ou carte : quelle combinaison retenir ?',
            'intro'  => 'Le choix dépend de votre panier moyen, de votre clientèle et de la charge administrative que vous acceptez. Quatre voies existent pour une société congolaise.',
            'items'  => [
                ['titre' => 'Un contrat direct avec MTN Congo ou Airtel Congo', 'texte' => "Chaque opérateur a son propre dossier marchand, sa propre interface et ses propres relevés. Avec deux dossiers, il faut deux rapprochements. Cette voie se justifie pour un volume élevé ou une relation commerciale directe avec l'un des deux."],
                ['titre' => 'Un agrégateur de paiement', 'texte' => "PawaPay relie les deux opérateurs congolais derrière une seule interface en XAF. Yabetoo, qui présente le Congo comme pays en service et annonce le Cameroun, le Gabon et la RD Congo comme à venir, ajoute des pages de paiement hébergées, des liens de paiement et des outils de facturation. Les frais et les délais d'ouverture se lisent dans chaque contrat, pas dans une brochure."],
                ['titre' => 'Le paiement à la livraison et le virement', 'texte' => "À Brazzaville et à Pointe-Noire, régler à la réception reste courant pour les produits chers. Le logiciel marque la commande comme livrée, encaissée par le livreur puis reversée à l'entreprise, avec un suivi des écarts."],
                ['titre' => 'La carte bancaire', 'texte' => "Elle sert surtout aux clients de la diaspora et aux achats d'entreprise à entreprise. Elle passe par un prestataire ou par une banque, avec les contrôles d'identité de l'entreprise qui vont avec."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelles étapes pour brancher MTN MoMo ou Airtel Money sur un site, jusqu\'à l\'ouverture au public ?',
            'items' => [
                ['titre' => 'Cadrer la clientèle et les opérateurs', 'texte' => "Vous indiquez la part de vos acheteurs sur MTN MoMo et sur Airtel Money. MTN pèse plus de 64,8 % des revenus mobiles du pays au deuxième trimestre 2025, d'après l'ARPCE : il passe en premier, Airtel Money suit pour ne perdre aucun client.", 'duree' => '2 à 3 jours'],
                ['titre' => 'Obtenir l\'accès marchand', 'texte' => "Le dossier se dépose chez l'opérateur ou chez l'agrégateur retenu, avec les pièces de votre société. Richard le prépare avec vous, mais la réponse et son délai appartiennent à l'interlocuteur choisi.", 'duree' => 'selon l\'opérateur'],
                ['titre' => 'Construire et essayer hors production', 'texte' => "Le paiement est créé côté serveur, l'opérateur répond, le serveur reçoit la notification, puis le client voit sa confirmation. Les cas ratés passent en test : code erroné, délai expiré, solde trop bas, réseau coupé en plein paiement.", 'duree' => '1 à 2 semaines'],
                ['titre' => 'Relier aux commandes et ouvrir', 'texte' => "Chaque encaissement est rattaché à sa commande et à sa facture. Quelques paiements réels de petit montant valident la chaîne avant l'ouverture au public, puis les premiers jours sont suivis de près.", 'duree' => '2 à 4 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels textes encadrent un projet numérique congolais ?',
            'paragraphes' => [
                "Quatre textes ou dispositifs pèsent sur un projet : la loi n° 29-2019 du 10 octobre 2019 sur les données personnelles, la loi n° 37-2019 du 12 décembre 2019 sur les transactions électroniques, les lois de juin 2020 sur la cybersécurité et la cybercriminalité, et la facture électronique certifiée de la Direction générale des impôts et des domaines, la DGID. Le Congo est aussi membre de l'OHADA depuis l'entrée en vigueur du traité le 17 juillet 1999, donc soumis au droit des affaires commun et au plan comptable SYSCOHADA.",
                "La loi de 2019, publiée au Journal officiel n° 45-2019, prévoit pour la plupart des traitements une déclaration à la commission de protection des données, qui délivre un récépissé sous un mois, prorogeable une fois sur décision motivée ; seule la réception du récépissé permet de commencer le traitement. Certaines catégories de données relèvent d'un régime plus strict : données génétiques, biométriques, relatives aux infractions et données de mineurs. Un site qui enregistre des noms, des téléphones et des commandes doit donc déclarer son traitement avant d'ouvrir.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle autorité surveille les données personnelles, et que prévoir pour un transfert hors du pays ?',
            'paragraphes' => [
                "Le texte de 2019 confie le contrôle à une commission nationale. Sa mise en place a pris du temps : l'avant-projet de loi la créant a été approuvé en Conseil des ministres le 3 juillet 2024, et la Direction générale du Trésor, dans sa note sur le numérique, écrivait alors qu'elle restait à créer. ITWeb Africa a annoncé le 22 janvier 2026 la mise en place de la Commission nationale de protection des données personnelles, dont le ministre Léon Juste Ibombo a décrit la mission : encadrer les traitements et, si nécessaire, sanctionner. Son mode de fonctionnement et ses formulaires sont à confirmer auprès d'elle avant tout dépôt de déclaration.",
                "Pour les transferts, l'article 23 de la loi autorise l'envoi de données personnelles vers un pays tiers seulement s'il assure un niveau de protection suffisant, et impose d'en informer préalablement la commission. Concrètement, une application qui héberge sa base chez un fournisseur étranger documente où se trouve chaque donnée, sépare les données personnelles des autres et prévoit des sauvegardes exportables. Le travail se fait dès le cadrage : le rattraper après la mise en ligne coûte beaucoup plus cher.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'SFEC, TVA sur les services étrangers : que prévoir dans un logiciel congolais ?',
            'legende' => 'Dispositifs fiscaux qui touchent un logiciel de facturation congolais, état au 6 octobre 2026',
            'entetes' => ['Dispositif', 'Ce que prévoient les textes et les sources', 'Conséquence pour votre logiciel'],
            'lignes'  => [
                ['Facture électronique certifiée (SFEC)', "Le décret n° 2026-101 du 31 mars 2026 impose l'émission de factures électroniques certifiées en temps réel. Selon Lookuptax, qui suit le portail de la DGID, les grandes et moyennes unités sont concernées depuis le 1er août 2026 et les très petites unités le seront dès le 1er décembre 2026.", "Le logiciel de facturation ou de caisse doit se connecter à la plateforme SFEC et conserver l'identifiant qu'elle renvoie pour chaque facture. Un tableur ou un modèle Word ne suffit plus pour les entreprises concernées."],
                ['Prestataire de la plateforme', "Lors de la présentation du 15 juillet 2026 à l'Union des opérateurs économiques du Congo, la société Akieni a été présentée comme prestataire du SFEC, selon le ministère des Finances. Le ministère y a rappelé l'échéance du 1er août 2026.", "Avant de développer, demander à la DGID la documentation d'interface en vigueur et la procédure de certification d'un logiciel."],
                ['TVA sur les services numériques étrangers', "Selon Comarch, depuis le 1er juillet 2026 les fournisseurs non résidents de services numériques doivent s'inscrire et facturer 18 % de TVA aux clients situés au Congo, sans seuil de chiffre d'affaires. Logiciels en ligne, hébergement, outils de comptabilité et formations en ligne y figurent.", "Les abonnements étrangers utilisés par votre entreprise peuvent désormais arriver avec une TVA ; le budget d'un projet se calcule toutes taxes comprises. La qualification de chaque prestation se valide avec votre expert-comptable."],
                ['Réseau instable', "Le texte consulté ne décrit pas de procédure de repli en cas de panne : à confirmer auprès de la DGID avant de concevoir le mode hors ligne.", "Prévoir un enregistrement local de la vente, puis un envoi différé de la facture à la plateforme, avec une trace de chaque tentative."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel service pour quel chantier numérique à Brazzaville ou à Pointe-Noire ?',
            'legende' => 'Chantiers courants des sociétés congolaises et prestation correspondante',
            'entetes' => ['Chantier', 'Prestation', 'Page'],
            'lignes'  => [
                ['Ouvrir une boutique qui encaisse par MTN MoMo ou Airtel Money', 'Boutique en ligne avec paiement mobile', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Montrer une société de services pétroliers ou de transport à des clients étrangers', 'Vitrine français et anglais', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Gérer factures, stock et comptabilité SYSCOHADA dans un seul outil', 'ERP intégré', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Doter une petite société d\'un ERP plus léger, hébergé chez vous', 'ERP léger', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Répondre sur WhatsApp aux clients qui écrivent le soir', 'Assistant WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Brancher votre facturation sur la plateforme SFEC de la DGID', 'Connecteurs et API', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Relancer les impayés et valider les encaissements sans ressaisie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Être trouvé sur Google par ceux qui cherchent un prestataire à Pointe-Noire', 'Référencement local', '<a href="/services/seo-local-google-business">SEO local et fiche Google</a>'],
                ['Piloter des chantiers, des commandes ou des tournées de camions', 'Outil métier', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Savoir par quel processus entamer la digitalisation', 'Audit de départ', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Apprendre aux équipes à utiliser les nouveaux outils', 'Ateliers pour les équipes', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets numériques pour les secteurs moteurs du Congo ?',
            'items' => [
                [
                    'secteur'  => 'Pétrole, gaz et services aux pétroliers',
                    'probleme' => 'Selon la Direction générale du Trésor, le pétrole génère la moitié du PIB congolais en 2024. Autour des opérateurs, des sous-traitants de Pointe-Noire gèrent des ordres de service, des habilitations et des factures dans des fichiers dispersés.',
                    'solution' => 'Un ERP déployé par paliers : achats et stock, puis facturation et comptabilité SYSCOHADA, avec des factures émises par la plateforme SFEC. Une vitrine bilingue complète le dispositif pour les donneurs d\'ordre étrangers.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Intégration d\'Odoo'],
                ],
                [
                    'secteur'  => 'Port en eau profonde de Pointe-Noire et transport',
                    'probleme' => 'Le port de Pointe-Noire est, d\'après la Direction générale du Trésor, le principal port régional en eau profonde, relié à Brazzaville par la route nationale n° 1 et par le chemin de fer Congo-Océan. Un transitaire jongle avec des dossiers dont le statut se demande par téléphone.',
                    'solution' => 'Un suivi par dossier, de la déclaration en douane jusqu\'à la livraison à Brazzaville, qui prévient le client par WhatsApp à chaque changement de statut et range les pièces au même endroit.',
                    'lien'     => ['url' => '/services/agents-ia-chatbot-whatsapp', 'texte' => 'Agents IA et chatbot WhatsApp'],
                ],
                [
                    'secteur'  => 'Commerce de détail, restauration et hôtellerie',
                    'probleme' => 'Un commerçant de Brazzaville vend déjà par message, reçoit des captures de transferts MTN MoMo ou Airtel Money et contrôle chaque paiement à la main avant de livrer.',
                    'solution' => 'Une boutique branchée sur le mobile money : la commande ne passe en préparation qu\'une fois l\'opérateur notifié, le reçu est envoyé sans intervention, et le règlement à la livraison reste proposé. Le commerçant modifie son catalogue depuis un espace simple.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Boutique en ligne'],
                ],
                [
                    'secteur'  => 'Agriculture et agroalimentaire',
                    'probleme' => 'La Direction générale du Trésor estime à 10 millions d\'hectares les terres arables très peu exploitées et à plus de 50 % la part des produits alimentaires et boissons dans les importations. Un producteur ou une coopérative suit ses livraisons, ses stocks et ses ventes sur papier.',
                    'solution' => 'Une application de suivi des lots et des livraisons, utilisable depuis un téléphone, qui alimente la facturation et le rapprochement des paiements mobiles reçus.',
                    'lien'     => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Application web sur mesure'],
                ],
                [
                    'secteur'  => 'Entreprises concernées par la facture certifiée',
                    'probleme' => 'Depuis le 1er août 2026, les grandes et moyennes unités doivent émettre leurs factures par le SFEC ; les très petites unités suivent dès le 1er décembre 2026. Un commerce qui facture encore à la main doit changer d\'outil.',
                    'solution' => 'Un logiciel de facturation ou de caisse raccordé à la plateforme, qui conserve l\'identifiant de chaque facture, émet un reçu et reste utilisable en cas de coupure du réseau.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'API et intégrations'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle formation pour les équipes congolaises, et avec quel financement ?',
            'paragraphes' => [
                "Richard anime les formations en visioconférence, sur les outils que vos équipes utilisent vraiment. Faute de trajet à payer, le budget va à la pédagogie, et les séances suivent l'heure de Brazzaville, identique à celle de Cotonou.",
                "Pour le financement, l'organisme public à connaître est le FONEA, Fonds national d'appui à l'employabilité et à l'apprentissage, créé par la loi n° 8-2019 du 9 avril 2019. Selon son site, il finance l'employabilité des demandeurs d'emploi par des formations qualifiantes, la création et la mise à niveau de centres de métiers et l'appui aux organismes de formation, avec des offres de douze mois au plus et une candidature à partir de 16 ans. Ses offres visent les citoyens congolais plutôt que la formation continue des salariés d'une entreprise : une société qui souhaite un cofinancement le demande directement au FONEA avant de compter dessus.",
                "Parmi les parcours utiles dans ce contexte : <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo et la comptabilité SYSCOHADA</a> pour les services comptables, <a href=\"/formations/whatsapp-business\">WhatsApp Business</a> pour suivre les clients, <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour la direction, et <a href=\"/formations/securite-donnees-dirigeants\">la sécurité des données</a>, précieuse depuis la loi de 2019. Les autres thèmes figurent sur <a href=\"/formations/\">la page des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment travailler avec Richard depuis Cotonou quand on est à Brazzaville ?',
            'paragraphes' => [
                "Brazzaville et Cotonou sont toutes deux à UTC+1, sans heure d'été : il n'y a aucun décalage. Vos échanges se tiennent donc en journée, à la même heure des deux côtés. Le français, langue officielle du Congo, sert de langue de travail pour les messages comme pour les livrables ; le lingala et le kituba, langues nationales, ne servent que si votre application doit parler à vos clients dans leur langue, ce qui se chiffre à part.",
                "Les devis sont libellés en FCFA : le franc CFA d'Afrique centrale (XAF) du Congo et le franc CFA d'Afrique de l'Ouest (XOF) du Bénin ont la même parité avec l'euro, 655,957 pour 1 euro, mais ne sont pas interchangeables, car ils sont émis par deux banques centrales différentes, la BEAC et la BCEAO. Les modes de règlement se fixent au devis parmi ceux qu'accepte Richard : virement, mobile money, carte, PayPal. Le suivi peut se faire par WhatsApp et par des points en visioconférence ; chaque demande reçoit une réponse sous 24 heures.",
            ],
        ],
        [
            'type'        => 'tableau',
            'titre'       => 'Quel budget de départ prévoir pour un projet au Congo ?',
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
            'titre'       => 'Pourquoi le devis d\'un projet congolais varie-t-il autant ?',
            'paragraphes' => [
                "Hors de ces prix de départ, chaque projet reçoit un devis en FCFA après un premier échange. Plusieurs paramètres locaux jouent sur le montant. Le nombre de moyens de paiement : accepter seulement MTN MoMo coûte moins cher que MTN MoMo, Airtel Money et le paiement à la livraison avec rapprochement automatique. Le raccordement à la plateforme SFEC : un logiciel qui émet des factures certifiées demande plus de travail qu'un simple modèle de document.",
                "Pèsent aussi la reprise de fichiers existants, la déclaration des données personnelles, un hébergement choisi et des sauvegardes séparées, une connexion instable (un mode hors ligne se développe et se teste) et la formation des équipes. Les frais de l'opérateur, de l'agrégateur ou de la DGID ne figurent pas dans le devis : ils se règlent directement avec eux, et leur contrat doit les préciser avant que vous fixiez vos prix de vente.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi un projet de facturation bâti sur la date du 1er juillet 2026 est-il déjà à revoir ?',
            'texte' => 'Certains articles et calendriers de conformité ont annoncé le 1er juillet 2026 pour l\'obligation de la facture électronique certifiée. Le ministère des Finances, à l\'occasion de la présentation du 15 juillet 2026, et VAT Update retiennent le 1er août 2026. Selon Lookuptax, qui s\'appuie sur le portail du SFEC, le décret n° 2026-101 du 31 mars 2026 distingue les grandes et moyennes unités (1er août) des très petites unités (1er décembre 2026). Avant tout développement, demandez à la DGID, par écrit, le calendrier de votre catégorie.',
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quels pièges guettent un projet numérique congolais ?',
            'intro'  => 'Chacun de ces pièges découle d\'une règle ou d\'un usage décrit plus haut, et se désamorce dès le cadrage.',
            'items'  => [
                ['titre' => 'Confondre XAF et XOF', 'texte' => "Le franc CFA du Congo est celui de la BEAC. Un logiciel de comptabilité ou un paiement configuré en XOF, la monnaie de la BCEAO, produit des écritures sous la mauvaise devise, même si la parité avec l'euro est la même. PawaPay, par exemple, liste MTN et Airtel au Congo en XAF."],
                ['titre' => 'Ignorer la déclaration de données personnelles', 'texte' => "La loi de 2019 impose une déclaration préalable et la remise d'un récépissé par la commission. Une application qui garde des noms, des numéros et des historiques de commandes la dépose avant sa mise en ligne."],
                ['titre' => 'Attendre la dernière échéance pour la facture certifiée', 'texte' => "Les grandes et moyennes unités sont déjà concernées depuis le 1er août 2026, les très petites le seront dès le 1er décembre. Raccorder un logiciel prend des semaines de développement et d'essais : mieux vaut s'y prendre avant la date."],
                ['titre' => 'Prévoir un seul opérateur de mobile money', 'texte' => "MTN et Airtel se partagent le marché, MTN détenant la plus grande part. Une boutique qui n'accepte que l'un des deux écarte une partie de ses clients."],
                ['titre' => 'Oublier la TVA sur les outils étrangers', 'texte' => "Depuis le 1er juillet 2026, les services numériques de fournisseurs non résidents sont soumis à 18 % de TVA, selon Comarch. Un budget bâti sur des abonnements hors taxes sous-estime la dépense réelle."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet numérique congolais à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                "Avec plus de six ans d'expérience, une formation à EPITECH suivie en 2022 et la co-fondation d'Audyxa, Richard a aussi conçu Wapy, assistant WhatsApp à IA pour les sociétés d'Afrique francophone. Des entreprises du Gabon, de la RD Congo et du Tchad, voisins du Congo en Afrique centrale, font partie des pays où il intervient. Le tableau suivant résume son offre pour le Congo-Brazzaville.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Richard peut-il accompagner une entreprise du Congo-Brazzaville ?',
            'legende' => 'Ce que Richard propose aux entreprises du Congo-Brazzaville, d\'après sa fiche de faits',
            'entetes' => ['Question', 'Réponse'],
            'lignes'  => [
                ['Accompagnement', 'Richard peut accompagner à distance les entreprises au Congo-Brazzaville.'],
                ['Réalisations', 'Les projets publiés figurent sur <a href="/realisations/">la page des réalisations</a>.'],
                ['Mode de travail', 'À distance depuis Cotonou, à la même heure qu\'à Brazzaville, en français, avec des devis en FCFA.'],
                ['Pour aller plus loin', '<a href="/richard-salanon">Le parcours de Richard</a> et <a href="/a-propos/">la page À propos</a>.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous dirigez une entreprise au Congo-Brazzaville et avez un projet numérique ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels et ce que vous voulez encaisser par MTN MoMo ou Airtel Money : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il sur place à Brazzaville ou à Pointe-Noire ?', 'r' => "Non : l'intervention se fait à distance, depuis Cotonou. Brazzaville et Cotonou sont à la même heure, UTC+1 : les réunions en visioconférence et les échanges par message tombent à la même heure. Ce mode suffit pour la plupart des chantiers de logiciel, d'automatisation et de formation."],
        ['q' => 'Quels moyens de paiement mobile fonctionnent au Congo-Brazzaville ?', 'r' => "MTN MoMo, chez MTN Congo, et Airtel Money, chez Airtel Congo. La Direction générale du Trésor relève plus de 238 milliards de FCFA de transactions de mobile money en janvier 2024. L'agrégateur PawaPay liste ces deux opérateurs pour le Congo en XAF."],
        ['q' => 'Quelle devise utiliser : XAF ou XOF ?', 'r' => "Le Congo utilise le franc CFA d'Afrique centrale (XAF), géré par la BEAC pour la CEMAC. Le Bénin utilise le XOF de la BCEAO. La parité avec l'euro est la même, 655,957, mais les deux monnaies sont distinctes : un logiciel doit être configuré dans la bonne."],
        ['q' => 'Faut-il déclarer son site ou son application aux autorités congolaises ?', 'r' => "Selon la loi n° 29-2019 (Journal officiel n° 45-2019), la plupart des traitements de données personnelles se déclarent à la commission, qui délivre un récépissé sous un mois, et la mise en œuvre ne commence qu'à sa réception. Confirmez les formalités actuelles auprès de la commission, dont ITWeb Africa a annoncé la mise en place le 22 janvier 2026."],
        ['q' => 'La facture électronique est-elle obligatoire au Congo-Brazzaville ?', 'r' => "Oui, selon le décret n° 2026-101 du 31 mars 2026 : le système de facture électronique certifiée (SFEC) de la DGID est obligatoire depuis le 1er août 2026 pour les grandes et moyennes unités, et le sera dès le 1er décembre 2026 pour les très petites, d'après Lookuptax. Demandez le calendrier de votre catégorie à la DGID."],
        ['q' => 'Les services numériques étrangers sont-ils soumis à la TVA au Congo ?', 'r' => "Selon Comarch, depuis le 1er juillet 2026 les fournisseurs non résidents de services numériques (logiciels en ligne, hébergement, formation en ligne, outils de comptabilité) s'inscrivent et facturent 18 % de TVA aux clients situés au Congo, sans seuil de chiffre d'affaires. Validez votre cas avec votre expert-comptable."],
        ['q' => 'Le Congo applique-t-il l\'OHADA et le SYSCOHADA ?', 'r' => "Oui. Le Congo a ratifié le traité de l'OHADA le 28 mai 1997 et il y est en vigueur depuis le 17 juillet 1999. Les entreprises congolaises tiennent donc leur comptabilité selon le SYSCOHADA ; le paramétrage comptable d'Odoo ou de Dolibarr doit suivre ce référentiel."],
        ['q' => 'Quel est le décalage horaire entre Cotonou et Brazzaville ?', 'r' => "Aucun : le Congo et le Bénin sont à UTC+1 toute l'année. Les échanges se tiennent donc aux mêmes heures à Brazzaville, à Pointe-Noire et à Cotonou."],
        ['q' => 'En quelle monnaie sont établis les devis pour le Congo-Brazzaville ?', 'r' => "En FCFA. Les prix de départ publiés sont de 150 000 FCFA pour une page d'atterrissage, 300 000 FCFA pour un site vitrine et 75 000 FCFA pour le référencement naturel. Les autres projets se chiffrent sur devis."],
        ['q' => 'Comment financer une formation au numérique au Congo-Brazzaville ?', 'r' => "Le FONEA, créé par la loi n° 8-2019 du 9 avril 2019, finance l'employabilité des demandeurs d'emploi et des formations qualifiantes de douze mois au plus, à partir de 16 ans. Ses offres visent les citoyens plutôt que les salariés d'une entreprise : contactez-le avant de budgéter."],
    ],

    'sources' => [
        ['titre' => 'Direction générale du Trésor, la situation économique du Congo', 'url' => 'https://www.tresor.economie.gouv.fr/Pays/CG/la-situation-economique-du-congo', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale du Trésor, recensement 2023 au Congo-Brazzaville (RGPH-5)', 'url' => 'https://www.tresor.economie.gouv.fr/Pays/CG/recensement-2023-au-congo-brazzaville', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale du Trésor, le secteur du numérique au Congo-Brazzaville', 'url' => 'https://www.tresor.economie.gouv.fr/Pays/CG/le-secteur-du-numerique', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : la République du Congo', 'url' => 'https://datareportal.com/reports/digital-2026-republic-of-the-congo', 'date' => '2026-10-06'],
        ['titre' => 'Digital Business Africa, T2 2025 : rapport de l\'observatoire du marché de l\'ARPCE', 'url' => 'https://www.digitalbusiness.africa/congo-au-t2-2025-la-telephonie-mobile-genere-30371-milliards-de-fcfa-linternet-mobile-17032-milliards/', 'date' => '2026-10-06'],
        ['titre' => 'Journal officiel de la République du Congo n° 45-2019 (loi n° 29-2019 sur les données personnelles)', 'url' => 'https://www.sgg.cg/JO/2019/congo-jo-2019-45.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ITWeb Africa, Congo-Brazzaville met en place sa commission de protection des données (22 janvier 2026)', 'url' => 'https://itweb.africa/article/congo-brazzaville-intros-data-protection-commission/nWJadvbNzxkvbjO1', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, le Congo renforce sa législation sur la protection des données personnelles (juillet 2024)', 'url' => 'https://www.osiris.sn/le-congo-renforce-sa-legislation-sur-la-protection-des-donnees-personnelles.html', 'date' => '2026-10-06'],
        ['titre' => 'Ministère des Finances, du Budget et du Portefeuille public, poursuite de la vulgarisation du SFEC', 'url' => 'https://www.finances.gouv.cg/fr/articles/poursuite-de-la-vulgarisation-du-syst%C3%A8me-de-facturation-%C3%A9lectronique-certifi%C3%A9e-sfec', 'date' => '2026-10-06'],
        ['titre' => 'Lookuptax, calendrier du SFEC au Congo selon la taille des entreprises', 'url' => 'https://lookuptax.com/tax-changes/congo-brazzaville/sfec-august-commencement-2026', 'date' => '2026-10-06'],
        ['titre' => 'Comarch, facture électronique certifiée et TVA sur les services numériques au Congo', 'url' => 'https://www.comarch.com/trade-and-services/data-management/legal-regulation-changes/republic-of-the-congo-rolls-out-certified-e-invoicing-and-digital-services-vat-rules/', 'date' => '2026-10-06'],
        ['titre' => 'VAT Update, facture certifiée obligatoire au Congo dès le 1er août 2026', 'url' => 'https://www.vatupdate.com/2026/08/05/certified-e-invoicing-mandatory-from-1-august-2026/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, le Congo', 'url' => 'https://www.ohada.com/etats-membres/congo.html', 'date' => '2026-10-06'],
        ['titre' => 'BEAC, taux indicatifs de change (EUR/XAF)', 'url' => 'https://www.beac.int', 'date' => '2026-10-06'],
        ['titre' => 'PawaPay, opérateurs de mobile money disponibles (Congo, MTN et Airtel en XAF)', 'url' => 'https://docs.pawapay.io/v2/docs/providers', 'date' => '2026-10-06'],
        ['titre' => 'Yabetoo, plateforme de paiement', 'url' => 'https://yabetoo.com/', 'date' => '2026-10-06'],
        ['titre' => 'FONEA, missions du Fonds national d\'appui à l\'employabilité et à l\'apprentissage', 'url' => 'https://fonea.cg/missions', 'date' => '2026-10-06'],
        ['titre' => 'FONEA, accueil et conditions des offres de formation', 'url' => 'https://fonea.cg/', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, Congo-Brazzaville (langues)', 'url' => 'https://fr.wikipedia.org/wiki/Congo-Brazzaville', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Afrique (zone Brazzaville)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'UIT, plan de numérotation E.164 : codes de pays (+242)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'seo-local-google-business', 'application-web-sur-mesure', 'formation-en-entreprise'],
        'formations'  => ['odoo-comptabilite-syscohada', 'whatsapp-business', 'ia-en-entreprise', 'securite-donnees-dirigeants'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'metiers'     => ['logisticiens-transitaires', 'commercants-e-commercants', 'btp'],
    ],
];
