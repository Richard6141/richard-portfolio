<?php
// ============================================================
// data/pays/senegal.php · Page pays « Sénégal » (vague 1D, tranche 1).
// Faits externes relevés le 06/10/2026 sur les pages citées dans 'fiche' et 'sources'.
// Clés de fiche absentes faute de source primaire confirmée : villes.
// Réforme des données personnelles : le texte de 2008 est indiqué en vigueur par WIPO Lex ;
// un projet de refonte circule depuis 2019 sans adoption confirmée par une source officielle.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Richard SALANON, un développeur et consultant à distance pour les entreprises sénégalaises, de Dakar à Touba, avec Wave et Orange Money',
    'title'   => 'Consultant en digitalisation au Sénégal | Richard SALANON',
    'meta'    => 'Création de site WordPress et e-commerce, application mobile, SEO, Google Ads, IA et formations au Sénégal : Wave, Orange Money, devis en FCFA.',
    'en_bref' => 'Richard SALANON travaille à distance depuis Cotonou pour les entreprises sénégalaises : boutiques et sites qui encaissent par Wave et Orange Money, applications web, automatisations, assistants WhatsApp, déploiement d\'Odoo et de Dolibarr paramétrés pour le SYSCOHADA, et formation des équipes. Les échanges se font en français, avec une heure d\'écart entre Cotonou et Dakar, et les devis sont établis en FCFA. Il a déjà travaillé avec des entreprises au Sénégal.',
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale'   => ['v' => 'Dakar', 'source' => 'https://www.bceao.int/fr/etats-membres/senegal', 'date' => '2026-10-06'],
        'fuseau'     => ['v' => 'GMT (UTC+0), sans heure d\'été, soit une heure de moins qu\'à Cotonou', 'source' => 'https://www.bceao.int/fr/etats-membres/senegal', 'date' => '2026-10-06'],
        'indicatif'  => ['v' => '+221', 'source' => 'https://www.bceao.int/fr/etats-membres/senegal', 'date' => '2026-10-06'],
        'langues'    => ['v' => 'Français, langue officielle ; langues nationales : diola, malinké, pular, sérère, soninké, wolof', 'source' => 'https://www.icla.up.ac.za/images/constitutions/Senegal-Constitution-2001-French.pdf', 'date' => '2026-10-06'],
        'population' => ['v' => '18 126 390 habitants au recensement de 2023, dont 54,7 % vivant en milieu urbain', 'source' => 'https://www.vie-publique.sn/documents/10517/etat-structure-urbanisation-caracteristiques-socioculturelles-population-rgph-5-2023-ansd', 'date' => '2026-10-06'],
        'internet'   => ['v' => '21 734 871 lignes internet au premier trimestre 2025, dont 18 189 870 en haut débit mobile (3G, 4G, 5G)', 'source' => 'https://lesoleil.sn/actualites/economie/telecommunication-linternet-et-la-telephonie-fixe-en-pleine-expansion-au-senegal/', 'date' => '2026-10-06'],
        'mobile'     => ['v' => '20 950 396 accès à internet par le mobile au premier trimestre 2025, contre 784 475 par le fixe', 'source' => 'https://lesoleil.sn/actualites/economie/telecommunication-linternet-et-la-telephonie-fixe-en-pleine-expansion-au-senegal/', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '24,1 % des transactions de monnaie électronique de l\'UEMOA en 2024, contre 22,7 % en 2023', 'source' => 'https://lesoleil.sn/actualites/economie/volume-des-transactions-electroniques-le-senegal-leader-de-luemoa-avec-24-des-parts/', 'date' => '2026-10-06'],
        'secteurs'   => ['v' => ['Infrastructures', 'agriculture', 'énergie', 'numérique', 'tourisme'], 'source' => 'https://fr.allafrica.com/stories/202511050542.html', 'date' => '2026-10-06'],
        'devise'     => ['v' => 'Franc CFA (XOF) de la BCEAO, à parité fixe avec l\'euro : 655,957 FCFA pour 1 €', 'source' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Orange Money', 'Wave', 'Free Money'], 'source' => 'https://www.osiris.sn/le-senegal-capte-29-7-de-la-monnaie-electronique-en-uemoa.html', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['PayDunya', 'CinetPay', 'Intouch'], 'source' => 'https://www.osiris.sn/paiement-et-transfert-d-argent-les-05-fintech-qui-font-bouger-le-secteur-au.html', 'date' => '2026-10-06'],
        'donnees'    => ['v' => 'Loi n° 2008-12 du 25 janvier 2008, indiquée en vigueur ; un projet de refonte reste en discussion', 'source' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-06'],
        'autorite'   => ['v' => 'Commission de protection des données personnelles (CDP), autorité administrative indépendante', 'source' => 'https://www.cdp.sn', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Loi de finances n° 2025-02 du 28 décembre 2024 : facture électronique pour les assujettis, selon des modalités fixées par arrêté du ministre chargé des Finances', 'source' => 'https://blog.avocats.deloitte.fr/senegal-les-principales-mesures-importantes-de-la-loi-de-finances-pour-2025/', 'date' => '2026-10-06'],
        'tva'        => ['v' => 'TVA collectée par les plateformes étrangères sur les services numériques depuis le 1er juillet 2024 (article 355 bis du CGI)', 'source' => 'https://www.digitalbusiness.africa/les-gafam-et-cie-vont-collecter-et-reverser-au-fisc-senegalais-la-tva-sur-les-activites-numeriques-des-le-1er-juillet-2024', 'date' => '2026-10-06'],
        'ohada'      => ['v' => 'État membre : traité ratifié le 5 juin 1995, instrument de ratification déposé le 18 juillet 1995', 'source' => 'https://www.ohada.org/en/cno-ohada-senegal/', 'date' => '2026-10-06'],
        'ecommerce'  => ['v' => 'Loi n° 2008-08 du 25 janvier 2008 sur les transactions électroniques : contrat, signature et preuve électroniques', 'source' => 'https://www.vie-publique.sn/documents/7877/loi-n-2008-08-du-25-janvier-2008-sur-les-transactions-electroniques', 'date' => '2026-10-06'],
        'financement' => ['v' => '3FPT : fonds de financement de la formation professionnelle et technique, avec un guichet pour le personnel des entreprises et des organisations professionnelles', 'source' => 'https://www.3fpt.sn', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à Dakar, toute l\'année'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Sénégal, et qu\'est-ce que cela change pour un projet ?',
            'paragraphes' => [
                'Le recensement général de 2023, publié par l\'Agence nationale de la statistique et de la démographie, compte 18 126 390 habitants, dont 54,7 % en milieu urbain. Cette concentration compte pour un projet : une boutique en ligne ou un service livré à domicile trouve l\'essentiel de ses clients dans quelques agglomérations, alors qu\'une application destinée aux zones rurales doit tenir compte de la couverture et du coût des données.',
                'Côté réseaux, l\'Autorité de régulation des télécommunications et des postes a publié en juillet 2025 son rapport du premier trimestre 2025. Il recense 21 734 871 lignes internet, dont 20 950 396 passent par le mobile et 784 475 par le fixe, et 18 189 870 abonnés au haut débit mobile. Le taux de pénétration de 116,90 % compte des lignes, pas des personnes : une même personne peut en détenir plusieurs. Retenez surtout que, au Sénégal, internet se vit sur téléphone.',
                'Conséquence directe : une page qui pèse trois mégaoctets, un formulaire de douze champs ou une application qui exige une mise à jour de cent mégaoctets perdent des clients. Les écrans sont pensés pour le téléphone d\'abord, les images sont compressées, et les parcours s\'achèvent sans quitter le navigateur ou l\'application de paiement.',
                'Le paiement suit le même chemin. Selon le rapport de la Banque centrale des États de l\'Afrique de l\'Ouest publié le 14 mars 2026, le Sénégal représentait 24,1 % des transactions de monnaie électronique de l\'UEMOA en 2024, contre 22,7 % en 2023. Un site qui n\'accepte pas Wave ou Orange Money se prive donc d\'une façon très répandue de payer dans le pays.',
                'Reste une conséquence plus discrète : le client sénégalais s\'attend à écrire sur WhatsApp, à recevoir un reçu par message et à payer sans créer de compte. Les projets que Richard conçoit pour ce marché partent de ces trois habitudes, puis ajoutent l\'administration fiscale et la comptabilité qui, elles, relèvent des règles du pays.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître avant de lancer un projet au Sénégal ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour vendre ou encaisser au Sénégal ?',
            'paragraphes' => [
                'Trois portefeuilles dominent le paiement mobile : Orange Money, Wave et Free Money, cités ensemble par la presse économique sénégalaise à propos du rapport de la BCEAO. Pour un commerce de détail, un restaurant ou une école, proposer au moins deux portefeuilles élargit le nombre de clients qui peuvent payer, et le virement bancaire sert aux factures entre sociétés.',
                'Wave publie sur sa page Wave Business une interface de paiement, appelée API Checkout, pensée pour transformer les paniers d\'un site en ventes finalisées. La même page annonce que, pour les paiements d\'une application métier, les premiers 20 000 CFA de chaque jour sont gratuits, puis 1 % de frais. Ces conditions changent : le cadrage vérifie la grille en vigueur auprès de Wave avant de chiffrer quoi que ce soit.',
                'Orange publie un portail pour développeurs avec des interfaces de paiement par code QR, de dépôt d\'argent (cash in) et de notification. L\'environnement d\'essai est gratuit, l\'accès se fait par jeton OAuth, et le portail précise que toute entité souhaitant digitaliser ses paiements peut en bénéficier. L\'ouverture d\'un compte marchand reste soumise à la validation de l\'opérateur.',
                'Richard a déjà branché Wave sur un service de commande de repas à Abidjan, un projet réalisé en sous-traitance pour Digital Développement. Le principe vaut au Sénégal : le client choisit son portefeuille, confirme sur son téléphone, et le site reçoit une notification qui marque la commande comme payée. Le travail consiste moins à écrire cet appel qu\'à gérer les cas ratés : paiement abandonné, notification reçue deux fois, remboursement.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment se passe l\'intégration d\'un moyen de paiement mobile, étape par étape ?',
            'legende' => 'Étapes habituelles d\'une intégration Wave ou Orange Money ; les délais d\'ouverture d\'un compte marchand dépendent de chaque opérateur et ne sont pas garantis.',
            'entetes' => ['Étape', 'Ce qui se passe', 'Ce que vous apportez'],
            'lignes'  => [
                ['Compte marchand', 'Demande d\'ouverture auprès de l\'opérateur, avec les pièces de la société', 'Registre de commerce, NINEA, pièce d\'identité du dirigeant'],
                ['Environnement d\'essai', 'Appels de test, parcours de paiement simulé', 'Rien : Richard travaille sur l\'espace d\'essai de l\'opérateur'],
                ['Notification de paiement', 'Le site reçoit un message signé de l\'opérateur et marque la commande payée', 'Un nom de domaine en HTTPS, joignable depuis l\'extérieur'],
                ['Cas limites', 'Paiement abandonné, doublon, expiration, remboursement', 'Votre règle commerciale pour chaque cas'],
                ['Essai en réel', 'Petite transaction avec un vrai compte, puis rapprochement du relevé', 'Un téléphone avec un compte alimenté'],
                ['Mise en ligne', 'Bascule des clés d\'essai vers les clés de production', 'Validation finale de la direction'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Sénégal ?',
            'paragraphes' => [
                'Les données personnelles relèvent de la loi n° 2008-12 du 25 janvier 2008, que la base WIPO Lex indique en vigueur. Elle crée la Commission de protection des données personnelles (CDP), autorité administrative indépendante, et vise les traitements automatisés ou non menés par des personnes, des services de l\'État, des collectivités et des organismes publics ou privés. Un fichier clients, un formulaire de contact avec stockage, un système de caisse ou un CRM sont concernés.',
                'Le site de la CDP consacre une rubrique aux formalités avant traitement : déclaration, autorisation, régimes et délais. Concrètement, le cadrage d\'un projet liste les traitements prévus, détermine s\'ils relèvent d\'une déclaration ou d\'une autorisation, et prépare le dossier. Richard n\'est pas juriste et le dit : le dossier est relu par votre conseil, et seule la CDP tranche.',
                'Une réforme a été annoncée de longue date. Un projet de refonte, qui traiterait de biométrie, de big data, d\'intelligence artificielle, de géolocalisation et de cloud, est préparé depuis 2017 par la CDP, avec un avant-projet présenté en 2019 ; un atelier de finalisation du texte et de son décret d\'application a eu lieu les 10 et 11 octobre 2024. Au 6 octobre 2026, la base WIPO Lex indique toujours le texte de 2008 en vigueur : c\'est lui qu\'on applique, en se préparant aux exigences d\'un texte plus récent. L\'adoption du projet est à confirmer auprès de la CDP.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La facture électronique est-elle obligatoire au Sénégal, et pour qui ?',
            'paragraphes' => [
                'La loi de finances n° 2025-02 du 28 décembre 2024 impose aux assujettis à la TVA de délivrer, pour les opérations qu\'ils réalisent, une facture électronique et dématérialisée. L\'émission, la transmission et la réception passent par un portail public ou une plateforme de dématérialisation de l\'administration, ou par des machines électroniques de facturation autorisées. Le défaut d\'émission est puni d\'une amende de 25 % de la TVA facturée, plafonnée à 5 millions de FCFA par facture.',
                'Les conditions et les modalités de la facturation électronique sont fixées par arrêté du ministre chargé des Finances : seuils, calendrier et plateforme sont à confirmer auprès de la Direction générale des impôts et des domaines. Avant d\'acheter ou de développer un module de facturation, demandez à votre comptable si votre société est déjà appelée et sur quelle plateforme.',
                'Pour un projet, cela se traduit par des exigences simples à poser tôt : numérotation continue sans trou, mentions légales complètes, TVA calculée ligne par ligne, archivage des pièces, et possibilité d\'exporter ou d\'envoyer les factures vers la plateforme de l\'administration le jour où elle l\'exige. Un logiciel de gestion mal réglé sur ces points se corrige au prix fort après un contrôle.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle TVA, quelle comptabilité et quel droit des affaires s\'appliquent à vos outils ?',
            'paragraphes' => [
                'Depuis le 1er juillet 2024, les grandes plateformes étrangères doivent collecter et reverser la TVA sur leurs services numériques fournis à des clients au Sénégal, sur le fondement de l\'article 355 bis du Code général des impôts. Selon Le Soleil, Google applique une TVA de 18 % à ses services numériques au Sénégal depuis le 1er juin 2025, et les professionnels assujettis doivent lui indiquer leur NINEA ou leur registre de commerce. Pour vous, l\'effet dépend de votre statut : un abonnement, un hébergement ou un service d\'IA facturé à un particulier ou à une structure non assujettie peut porter cette taxe, à intégrer au budget ; faites confirmer par votre comptable le traitement applicable à votre société.',
                'Le Sénégal est membre de l\'OHADA : il a ratifié le traité le 5 juin 1995 et déposé son instrument de ratification le 18 juillet 1995. Les sociétés tiennent donc leur comptabilité selon le système comptable de l\'OHADA, le SYSCOHADA. C\'est ce qui guide le choix de plan de comptes, de journaux et d\'états de fin d\'exercice quand Richard déploie un ERP ; ces règles sont détaillées dans les services Odoo et Dolibarr.',
                'Le commerce électronique relève de la loi n° 2008-08 du 25 janvier 2008 sur les transactions électroniques, qui encadre le contrat conclu en ligne, la signature et la preuve électroniques. En pratique : conditions générales acceptées par une case à cocher, confirmation de commande envoyée au client, et conservation des traces, notamment des notifications de paiement.',
            ],
        ],
        [
            'type'        => 'vigilance',
            'titre'       => 'Peut-on s\'appuyer sur un projet de loi pour mettre son site en conformité ?',
            'texte'        => 'Non. Tant que le texte de 2008 reste la référence, c\'est lui qui fixe vos obligations : déclaration ou autorisation auprès de la CDP, information des personnes, sécurité des fichiers. Le projet de refonte en discussion donne la direction, pas le droit applicable. Si un nouveau texte était promulgué, cette page serait mise à jour et vos traitements réexaminés.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises sénégalaises, selon le besoin du moment ?',
            'legende' => 'Besoins types observés dans les demandes d\'entreprises d\'Afrique de l\'Ouest francophone et adaptés au cadre sénégalais ; le détail de chaque service figure sur sa page.',
            'entetes' => ['Besoin typique au Sénégal', 'Service', 'Page'],
            'lignes'  => [
                ['Une boutique qui encaisse par Wave et Orange Money, avec livraison dans l\'agglomération de Dakar', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Une vitrine claire pour un cabinet, une école ou un restaurant, lisible sur téléphone', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Une page de campagne pour recueillir des demandes de devis par WhatsApp', 'Landing page', '<a href="/services/landing-page-haute-conversion">Landing page haute conversion</a>'],
                ['Un ERP qui tient les stocks, les ventes et la comptabilité SYSCOHADA', 'Intégration Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un logiciel de gestion plus léger, pour une PME qui démarre', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Un assistant qui répond aux clients sur WhatsApp hors des heures d\'ouverture', 'Assistants IA et WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Des relances, des rapports et des saisies qui se font encore à la main', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Une application pour les équipes de terrain, les livreurs ou les agents commerciaux', 'Application mobile', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Un outil métier propre à l\'activité : réservations, suivi de dossiers, espace client', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Un plan de digitalisation avant d\'acheter le moindre logiciel', 'Digitalisation d\'entreprise', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Des équipes à former aux outils, à l\'IA et à l\'automatisation', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'    => 'cas',
            'titre'   => 'Que donne la digitalisation dans les secteurs qui comptent au Sénégal ?',
            'items'   => [
                [
                    'secteur'  => 'Commerce de détail et vente en ligne à Dakar',
                    'probleme' => 'Les commandes arrivent par messages WhatsApp, les paiements par captures d\'écran, et personne ne sait ce qui est encore en stock.',
                    'solution' => 'Une boutique en ligne reliée au stock, avec paiement par Wave ou Orange Money confirmé automatiquement et un message de suivi envoyé au client. Le projet de commande de repas livré à Abidjan, réalisé en sous-traitance pour Digital Développement, suit le même schéma.',
                    'lien'     => ['url' => '/digitaliser-ecommerce-dakar', 'texte' => 'Digitaliser l\'e-commerce à Dakar'],
                ],
                [
                    'secteur'  => 'Transport, port et logistique',
                    'probleme' => 'Les dossiers d\'un transitaire circulent entre le bureau, le port et les clients par téléphone et par tableur, avec des factures établies en retard.',
                    'solution' => 'Un suivi de dossier partagé, des statuts envoyés au client par message et une facturation numérotée, prête pour la facture électronique que la loi de finances 2025 impose aux assujettis.',
                    'lien'     => ['url' => '/formations/metier/logisticiens-transitaires', 'texte' => 'Former logisticiens et transitaires'],
                ],
                [
                    'secteur'  => 'Hôtellerie, restauration et tourisme',
                    'probleme' => 'Les réservations se prennent au téléphone et sur plusieurs messageries, avec des doubles réservations en haute saison.',
                    'solution' => 'Un système de réservation en ligne avec calendrier unique, acompte par mobile money, confirmation par message, et une page lisible en français et en anglais pour la clientèle étrangère.',
                    'lien'     => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Système de réservation en ligne'],
                ],
                [
                    'secteur'  => 'Pêche, agriculture et agro-industrie',
                    'probleme' => 'Les ventes aux grossistes et aux transformateurs se notent sur des carnets, et les marges par lot ou par campagne ne se calculent qu\'en fin d\'année.',
                    'solution' => 'Un ERP paramétré pour les achats, les lots, les stocks et les ventes, avec comptabilité SYSCOHADA, saisie sur téléphone et rapports par campagne.',
                    'lien'     => ['url' => '/formations/metier/agro-industrie', 'texte' => 'Former les équipes de l\'agro-industrie'],
                ],
                [
                    'secteur'  => 'Énergie, pétrole et gaz',
                    'probleme' => 'Les sous-traitants locaux jonglent entre exigences documentaires, factures aux donneurs d\'ordre et formation du personnel à financer.',
                    'solution' => 'Un outil de suivi des dossiers et des factures, et un plan de formation que le 3FPT peut cofinancer : une convention tripartite a été signée en 2025 pour la formation dans ces secteurs.',
                    'lien'     => ['url' => '/services/integration-dolibarr', 'texte' => 'Intégration Dolibarr'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes au Sénégal, et qui peut financer la formation ?',
            'paragraphes' => [
                'Les formations de Richard se donnent à distance pour les équipes sénégalaises : séances en visioconférence sur les outils réels de l\'entreprise, exercices sur ses propres fichiers, supports en français. Quand le groupe grandit, on découpe par métier plutôt que de faire un cours général. Les séances s\'organisent autour de vos heures de bureau à Dakar, avec une heure de moins qu\'à Cotonou.',
                'Pour le financement, le Fonds de financement de la formation professionnelle et technique, le 3FPT, est alimenté par une contribution des employeurs sur la masse salariale. Selon son site, il ouvre un guichet de financement du personnel des entreprises et des membres des organisations professionnelles, avec un formulaire de demande en ligne. Selon la presse sénégalaise, il a signé en juillet 2026 des conventions avec le Conseil national du patronat, la Confédération nationale des employeurs du Sénégal et l\'Union des prestataires industriels et commerçants : 86 861 300 FCFA, pris en charge à près de 90 %, pour 911 professionnels de 36 entreprises.',
                'Ces conventions passent par les organisations patronales. Si votre entreprise est adhérente de l\'une d\'elles, demandez-lui si un plan de formation est ouvert. Les conditions précises, les plafonds et la liste des organismes de formation acceptés sont à vérifier sur le portail du 3FPT : Richard fournit le programme, la durée et le devis, mais l\'accord de financement est décidé par le fonds.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles formations choisir pour une équipe sénégalaise ?',
            'intro' => 'Les fiches ci-dessous sont les plus demandées par les entreprises d\'Afrique de l\'Ouest francophone ; chacune se règle selon votre secteur.',
            'items' => [
                ['titre' => 'WhatsApp Business', 'texte' => 'Pour les commerces qui vendent déjà par messages : catalogue, réponses rapides, étiquettes, et passage à une automatisation quand le volume le justifie. <a href="/formations/whatsapp-business">Voir la formation</a>.'],
                ['titre' => 'Odoo et comptabilité SYSCOHADA', 'texte' => 'Pour les comptables et les gestionnaires qui reprennent un ERP : plan de comptes, journaux, clôture. <a href="/formations/odoo-comptabilite-syscohada">Voir la formation</a>.'],
                ['titre' => 'IA en entreprise', 'texte' => 'Pour les dirigeants et les équipes qui veulent gagner du temps sur les courriers, les rapports et les analyses, sans exposer de données sensibles. <a href="/formations/ia-en-entreprise">Voir la formation</a>.'],
                ['titre' => 'Automatisation avec n8n', 'texte' => 'Pour relier la messagerie, le tableur, la facturation et le paiement sans écrire de code. <a href="/formations/n8n">Voir la formation</a>.'],
                ['titre' => 'E-commerce', 'texte' => 'Pour les équipes qui gèrent une boutique : catalogue, paiement, livraison, relation client. <a href="/formations/e-commerce">Voir la formation</a>.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'intro' => 'Tout se fait à distance : la distance entre Cotonou et Dakar ne compte pas, c\'est la régularité des échanges qui compte.',
            'items' => [
                ['titre' => 'Fuseau horaire', 'texte' => 'Dakar a une heure de moins que Cotonou, sans changement d\'heure dans l\'année. Un rendez-vous à 9 h à Dakar se tient à 10 h à Cotonou, et les plages de travail communes couvrent toute la journée de bureau.'],
                ['titre' => 'Langue', 'texte' => 'Français pour les échanges, les documents et la formation ; anglais possible pour un partenaire ou un client étranger.'],
                ['titre' => 'Devise des devis', 'texte' => 'Le FCFA, la monnaie du Sénégal comme du Bénin : pas de conversion ni de risque de change entre les deux pays. Les modes de règlement de la prestation se conviennent au devis.'],
                ['titre' => 'Outils de suivi', 'texte' => 'Le suivi peut s\'organiser autour d\'un groupe WhatsApp pour les questions rapides, d\'un document partagé pour les décisions, d\'un point régulier en visioconférence et d\'une démonstration à chaque livraison intermédiaire.'],
                ['titre' => 'Premier échange', 'texte' => 'Vous décrivez votre activité et ce qui coince ; la réponse arrive sous 24 heures, avec une première lecture du besoin ; une visioconférence de cadrage suit si elle est utile.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet pour une entreprise au Sénégal ?',
            'paragraphes' => [
                'Le prix dépend d\'abord de ce que le projet doit faire, pas du pays. Au Sénégal, trois éléments s\'ajoutent : le nombre de moyens de paiement à raccorder (Wave seul ou Wave, Orange Money et Free Money), l\'exigence de facture électronique et de numérotation conforme, et le volume de données personnelles à déclarer à la CDP. Un site vitrine sans paiement et un ERP multi-sites n\'ont rien à voir.',
                'Les ordres de grandeur ci-dessous sont les tarifs de départ de la fiche de faits de Richard, en FCFA avec l\'équivalent en euros au taux fixe de 655,957 FCFA pour 1 €. Ils ne sont pas un devis : le prix final dépend du cadrage.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'À partir de quels montants démarre un projet ?',
            'items' => [
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page lisible sur téléphone', 'Un formulaire ou un bouton WhatsApp', 'Mise en ligne']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Plusieurs pages', 'Formulaire de contact', 'Référencement de base', 'Mise en ligne']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Audit de départ', 'Corrections prioritaires', 'Suivi des résultats']],
                ['offre' => 'Boutique, ERP, application', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Cadrage', 'Paiement par mobile money', 'Formation des équipes']],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on souvent dans les projets numériques au Sénégal ?',
            'intro' => 'Ces erreurs se règlent au cadrage et coûtent cher quand on les découvre en production.',
            'items' => [
                ['titre' => 'Ne prévoir qu\'un seul portefeuille', 'texte' => 'Wave, Orange Money et Free Money se partagent le marché. Un site qui n\'en accepte qu\'un renvoie une partie des clients vers le virement ou vers un concurrent.'],
                ['titre' => 'Oublier la notification de paiement', 'texte' => 'S\'en tenir à la capture d\'écran du client fait perdre des heures et ouvre la porte aux fraudes. La confirmation doit venir de l\'opérateur, signée, et le site doit la traiter une seule fois même si elle arrive deux fois.'],
                ['titre' => 'Attendre le dernier moment pour la facture électronique', 'texte' => 'La loi de finances 2025 l\'impose aux assujettis, selon des modalités fixées par arrêté du ministre chargé des Finances. Choisir un logiciel qui ne sait pas numéroter sans trou ou exporter ses factures oblige à le changer plus tard.'],
                ['titre' => 'Traiter des données sans formalité', 'texte' => 'Un fichier clients, une caisse ou un CRM entrent dans le champ de la loi de 2008. Les formalités auprès de la CDP se préparent avant le traitement, pas après une plainte.'],
                ['titre' => 'Ignorer la TVA sur les services en ligne', 'texte' => 'Les plateformes étrangères collectent désormais la TVA : un abonnement budgété hors taxe peut dépasser son enveloppe selon votre statut fiscal.'],
                ['titre' => 'Choisir un ERP sans parler au comptable', 'texte' => 'Au Sénégal comme dans les autres États de l\'OHADA, le plan de comptes et les états de fin d\'exercice suivent le SYSCOHADA. Un paramétrage qui ne l\'a pas prévu se reprend écriture par écriture.'],
                ['titre' => 'Concevoir pour un ordinateur d\'abord', 'texte' => 'Avec la quasi-totalité des accès à internet passant par le mobile selon l\'ARTP, une interface pensée pour le bureau perd des clients dès la première page.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet à Richard SALANON quand on est au Sénégal ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard a déjà travaillé avec des entreprises au Sénégal, comme dans treize autres pays dont le Bénin, la Côte d\'Ivoire, le Togo et le Mali. Il connaît les mêmes contraintes de l\'UEMOA qui s\'appliquent à Dakar : franc CFA, mobile money, SYSCOHADA. Ses projets figurent sur la page des <a href="/realisations/">réalisations</a>, dont une commande de repas avec paiement Wave, réalisée à Abidjan en sous-traitance pour Digital Développement.',
                'Il a étudié à EPITECH, a conçu l\'assistant WhatsApp à intelligence artificielle Wapy, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Pour en savoir plus sur son parcours, voir <a href="/richard-salanon">la page de Richard SALANON</a> et la page <a href="/a-propos/">À propos</a>. Les pages locales de Dakar détaillent les services proposés : <a href="/developpeur-web-dakar">développeur web à Dakar</a>, <a href="/digitalisation-entreprise-dakar">digitalisation d\'entreprise à Dakar</a>, <a href="/integration-odoo-dakar">intégration Odoo à Dakar</a>, <a href="/integration-dolibarr-dakar">intégration Dolibarr à Dakar</a> et <a href="/formation-ia-entreprise-dakar">formation IA à Dakar</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel projet voulez-vous lancer au Sénégal ?',
            'texte'  => 'Décrivez votre activité et votre besoin. La réponse arrive sous 24 heures, avec une première lecture du projet et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Quelle loi protège les données personnelles au Sénégal en 2026 ?', 'r' => 'La loi n° 2008-12 du 25 janvier 2008, indiquée en vigueur par la base WIPO Lex. Elle institue la Commission de protection des données personnelles. Un projet de refonte est en préparation depuis 2017, mais son adoption est à confirmer auprès de la CDP.'],
        ['q' => 'Faut-il déclarer son site à la CDP avant de collecter des données ?', 'r' => 'Le site de la CDP prévoit des formalités avant traitement : déclaration ou autorisation selon le type de traitement. Un formulaire de contact avec stockage, un fichier clients ou un système de caisse entrent dans le champ. Le dossier se prépare au cadrage et se fait relire par votre conseil.'],
        ['q' => 'La facture électronique est-elle obligatoire au Sénégal ?', 'r' => 'Oui pour les assujettis selon la loi de finances n° 2025-02 du 28 décembre 2024, dont les modalités sont fixées par arrêté du ministre chargé des Finances. Le défaut d\'émission est puni d\'une amende de 25 % de la TVA facturée, plafonnée à 5 millions de FCFA par facture. Demandez à votre comptable si votre société est déjà appelée.'],
        ['q' => 'Peut-on accepter Wave et Orange Money sur un site sénégalais ?', 'r' => 'Oui. Wave propose une interface de paiement pour les sites et Orange publie un portail développeurs avec ses interfaces de paiement. Dans les deux cas, un compte marchand doit être ouvert auprès de l\'opérateur, qui valide le dossier de la société.'],
        ['q' => 'Combien Wave prend-il de frais sur un paiement marchand ?', 'r' => 'Sa page Wave Business annonce, pour les paiements d\'une application métier, les premiers 20 000 CFA gratuits chaque jour, puis 1 %. Ces conditions peuvent changer : vérifiez la grille en vigueur avant de chiffrer votre projet.'],
        ['q' => 'Le Sénégal applique-t-il la TVA aux services numériques étrangers ?', 'r' => 'Oui, depuis le 1er juillet 2024, les grandes plateformes étrangères collectent et reversent la TVA au fisc sénégalais sur le fondement de l\'article 355 bis du CGI. Selon Le Soleil, Google applique une TVA de 18 % depuis le 1er juin 2025 ; le traitement dépend du statut du client, particulier ou entreprise assujettie.'],
        ['q' => 'Le Sénégal fait-il partie de l\'OHADA, et que change le SYSCOHADA à un ERP ?', 'r' => 'Oui, le pays a ratifié le traité le 5 juin 1995. Les sociétés tiennent leur comptabilité selon le SYSCOHADA : le plan de comptes, les journaux et les états de fin d\'exercice de l\'ERP sont paramétrés en conséquence, puis validés par votre comptable.'],
        ['q' => 'Le 3FPT peut-il financer la formation de mon personnel ?', 'r' => 'Le 3FPT est alimenté par une contribution des employeurs et ouvre un guichet pour le personnel des entreprises et des membres des organisations professionnelles. Ses conventions passent souvent par les organisations patronales. Les conditions et les plafonds se vérifient sur son portail avant toute inscription.'],
        ['q' => 'Y a-t-il un décalage horaire entre Dakar et Cotonou ?', 'r' => 'Une heure : Dakar a une heure de moins que Cotonou, toute l\'année, sans changement d\'heure. Les journées de bureau se recoupent entièrement, ce qui facilite les visioconférences et le suivi.'],
        ['q' => 'En quelle monnaie sont établis les devis pour le Sénégal ?', 'r' => 'En FCFA, la monnaie utilisée aussi au Bénin : aucun risque de change entre les deux pays. L\'équivalent en euros se calcule au taux fixe de 655,957 FCFA pour 1 €.'],
        ['q' => 'Richard SALANON se déplace-t-il à Dakar ?', 'r' => 'Non, ses interventions au Sénégal se font à distance : cadrage en visioconférence, développement et formation en ligne, suivi par messagerie. Cela garde les coûts bas et les délais courts.'],
    ],

    'sources' => [
        ['titre' => 'Le Soleil, rapport de l\'ARTP sur le premier trimestre 2025 : internet et téléphonie fixe', 'url' => 'https://lesoleil.sn/actualites/economie/telecommunication-linternet-et-la-telephonie-fixe-en-pleine-expansion-au-senegal/', 'date' => '2026-10-06'],
        ['titre' => 'Vie publique du Sénégal, RGPH-5 2023 : état et structure de la population (ANSD)', 'url' => 'https://www.vie-publique.sn/documents/10517/etat-structure-urbanisation-caracteristiques-socioculturelles-population-rgph-5-2023-ansd', 'date' => '2026-10-06'],
        ['titre' => 'Le Soleil, transactions de monnaie électronique dans l\'UEMOA en 2024 (rapport BCEAO du 14 mars 2026)', 'url' => 'https://lesoleil.sn/actualites/economie/volume-des-transactions-electroniques-le-senegal-leader-de-luemoa-avec-24-des-parts/', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, le Sénégal capte 29,7 % de la monnaie électronique en UEMOA', 'url' => 'https://www.osiris.sn/le-senegal-capte-29-7-de-la-monnaie-electronique-en-uemoa.html', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, histoire du franc CFA (parité de 655,957 FCFA pour 1 euro)', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-06'],
        ['titre' => 'Wave Business, paiement marchand et API Checkout', 'url' => 'https://www.wave.com/fr/business/', 'date' => '2026-10-06'],
        ['titre' => 'Orange Sonatel, portail développeurs des API Orange Money', 'url' => 'https://developer.orange-sonatel.com/', 'date' => '2026-10-06'],
        ['titre' => 'WIPO Lex, loi n° 2008-12 sur la protection des données à caractère personnel', 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-06'],
        ['titre' => 'CDP du Sénégal, site de l\'autorité (formalités avant traitement)', 'url' => 'https://www.cdp.sn', 'date' => '2026-10-06'],
        ['titre' => 'Deloitte, Sénégal : principales mesures de la loi de finances pour 2025 (facture électronique)', 'url' => 'https://blog.avocats.deloitte.fr/senegal-les-principales-mesures-importantes-de-la-loi-de-finances-pour-2025/', 'date' => '2026-10-06'],
        ['titre' => 'Digital Business Africa, TVA sur les activités numériques depuis le 1er juillet 2024 (article 355 bis du CGI)', 'url' => 'https://www.digitalbusiness.africa/les-gafam-et-cie-vont-collecter-et-reverser-au-fisc-senegalais-la-tva-sur-les-activites-numeriques-des-le-1er-juillet-2024', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, le Comité national OHADA du Sénégal', 'url' => 'https://www.ohada.org/en/cno-ohada-senegal/', 'date' => '2026-10-06'],
        ['titre' => 'Vie publique du Sénégal, loi n° 2008-08 sur les transactions électroniques', 'url' => 'https://www.vie-publique.sn/documents/7877/loi-n-2008-08-du-25-janvier-2008-sur-les-transactions-electroniques', 'date' => '2026-10-06'],
        ['titre' => 'Le Soleil, convention tripartite du 3FPT, de l\'INPG et du CNSCL pour la formation dans les hydrocarbures et les mines (2 avril 2025)', 'url' => 'https://lesoleil.sn/actualites/economie/hydrocarbures-et-mines-une-convention-tripartite-pour-former-des-competences-locales/', 'date' => '2026-10-06'],
        ['titre' => 'Constitution du Sénégal du 22 janvier 2001 (article premier : langues)', 'url' => 'https://www.icla.up.ac.za/images/constitutions/Senegal-Constitution-2001-French.pdf', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, l\'APIX présente les secteurs porteurs du Sénégal (novembre 2025)', 'url' => 'https://fr.allafrica.com/stories/202511050542.html', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, les cinq fintechs du paiement au Sénégal (PayDunya, CinetPay, Intouch)', 'url' => 'https://www.osiris.sn/paiement-et-transfert-d-argent-les-05-fintech-qui-font-bouger-le-secteur-au.html', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, page du Sénégal (capitale, fuseau, indicatif)', 'url' => 'https://www.bceao.int/fr/etats-membres/senegal', 'date' => '2026-10-06'],
        ['titre' => 'Le Soleil, Google applique une TVA de 18 % au Sénégal dès le 1er juin 2025', 'url' => 'https://lesoleil.sn/actualites/sciences/tva-de-18-a-partir-du-1er-juin-google-se-conforme-a-la-legislation-fiscale-senegalaise/', 'date' => '2026-10-06'],
        ['titre' => 'Digital Business Africa, atelier de la CDP sur la mise à niveau des textes relatifs aux données personnelles (octobre 2024)', 'url' => 'https://www.digitalbusiness.africa/senegal-la-cdp-organise-un-atelier-de-mise-a-niveau-des-textes-relatifs-aux-donnees-personnelles/', 'date' => '2026-10-06'],
        ['titre' => '3FPT, guichet de financement du personnel des entreprises', 'url' => 'https://www.3fpt.sn', 'date' => '2026-10-06'],
        ['titre' => 'Le Soleil, conventions de financement entre le 3FPT et des organisations patronales (juillet 2026)', 'url' => 'https://lesoleil.sn/actualites/education/des-conventions-de-financement-signees-entre-le-3fpt-et-des-organisations-patronales/', 'date' => '2026-10-06'],
        ['titre' => 'Centre Inffo, lancement du Fonds de financement de la formation professionnelle et technique', 'url' => 'https://www.centre-inffo.fr/?p=264082', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'application-mobile-android-ios', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'formations'  => ['whatsapp-business', 'odoo-comptabilite-syscohada', 'ia-en-entreprise', 'n8n', 'e-commerce'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'metiers'     => ['commercants-e-commercants', 'logisticiens-transitaires', 'agro-industrie'],
    ],
];
