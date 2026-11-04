<?php
// ============================================================
// data/pays/mali.php · Page pays « Mali » (vague 1D, tranche 2).
// Faits externes relevés le 06/10/2026 sur les pages citées dans 'fiche' et 'sources'.
// Contexte institutionnel : retrait de la CEDEAO effectif le 29/01/2025 ; le Mali reste
// membre de l'UEMOA et utilise le franc CFA à la date de consultation (sahel.watch).
// Clés de fiche absentes faute de source confirmée : tva (collecte sur les services numériques
// étrangers : aucune source malienne trouvée).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Richard SALANON, un développeur et consultant à distance pour les entreprises maliennes, de Bamako à Sikasso, avec Orange Money et Moov Money',
    'title'   => 'Consultant en digitalisation au Mali | Richard SALANON',
    'meta'    => 'Création de site WordPress et e-commerce, application mobile, SEO, Google Ads, IA et formations au Mali : Orange Money, devis en FCFA.',
    'en_bref' => 'Richard SALANON travaille à distance depuis Cotonou pour les entreprises maliennes : sites et boutiques qui encaissent par Orange Money et Moov Money, applications web et mobiles légères, automatisations, assistants WhatsApp, déploiement d\'Odoo et de Dolibarr paramétrés pour le SYSCOHADA, et formation des équipes. Les échanges se font en français, avec une heure d\'écart entre Cotonou et Bamako, et les devis sont établis en FCFA. Il a déjà travaillé avec des entreprises au Mali.',
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale'   => ['v' => 'Bamako, siège du district de la capitale', 'source' => 'https://www.bceao.int/fr/etats-membres/mali', 'date' => '2026-10-06'],
        'villes'     => ['v' => ['Bamako', 'Sikasso', 'Koutiala', 'Ségou', 'Kayes', 'Mopti'], 'source' => 'https://en.wikipedia.org/wiki/List_of_cities_in_Mali', 'date' => '2026-10-06'],
        'fuseau'     => ['v' => 'Heure de Greenwich (UTC+0) toute l\'année, sans changement d\'heure : une heure de moins qu\'à Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'indicatif'  => ['v' => '+223', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'    => ['v' => 'Langues nationales : langues officielles ; français : langue de travail (Constitution de 2023, article 31)', 'source' => 'https://axl.cefan.ulaval.ca/afrique/mali-const-2023.htm', 'date' => '2026-10-06'],
        'population' => ['v' => '22 395 489 habitants au recensement de 2022, dont 4 227 569 dans le district de Bamako ; taux d\'urbanisation de 30,3 %', 'source' => 'https://www.instat-mali.org/laravel-filemanager/files/shares/rgph/rapport-resultats-globaux-rgph5_rgph.pdf', 'date' => '2026-10-06'],
        'internet'   => ['v' => 'Plus de 13 millions de clients internet fin 2023, soit une pénétration de 42 %', 'source' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-06'],
        'mobile'     => ['v' => 'Plus de 25 millions d\'abonnés mobiles fin 2023, soit une téledensité de 109 %', 'source' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Près de 17 millions de comptes de monnaie électronique fin 2023, contre plus de 14 millions en 2022', 'source' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-06'],
        'secteurs'   => ['v' => ['Agriculture, dont le coton', 'Mines : or, puis lithium', 'Services'], 'source' => 'https://www.banquemondiale.org/fr/country/mali/overview', 'date' => '2026-10-06'],
        'devise'     => ['v' => 'Franc CFA (XOF) de la BCEAO ; le Mali reste membre de l\'UEMOA en septembre 2026 ; 655,957 FCFA pour 1 €', 'source' => 'https://sahel.watch/alliance-etats-du-sahel-aes-institutions-bilan-2026/', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Orange Money', 'Moov Money (Moov Africa Malitel)'], 'source' => 'https://moneroo.io/coverage', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['Hub2', 'Moneroo'], 'source' => 'https://moneroo.io/coverage', 'date' => '2026-10-06'],
        'donnees'    => ['v' => 'Loi n° 2013-015 du 21 mai 2013, modifiée par la loi n° 2017-070 du 18 décembre 2017', 'source' => 'https://www.consentstack.io/regulations/ml-law2013015', 'date' => '2026-10-06'],
        'autorite'   => ['v' => 'Autorité de protection des données à caractère personnel (APDP), autorité indépendante créée par la loi de 2013, en activité depuis 2016', 'source' => 'https://dataprotection.africa/?p=1335', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Décret n° 2022-0733 PT du 25 novembre 2022 : facture normalisée sécurisée, seul document probant des opérations commerciales', 'source' => 'https://www.dgi.gouv.ml/institution-du-systeme-securise-de-factures-normalisee-le-president-de-la-transition-signe-le-decret/', 'date' => '2026-10-06'],
        'ohada'      => ['v' => 'État membre : traité ratifié le 7 février 1995, en vigueur au Mali le 18 septembre 1995', 'source' => 'https://www.ohada.com/etats-membres/mali.html', 'date' => '2026-10-06'],
        'ecommerce'  => ['v' => 'Loi n° 2016-012 du 6 mai 2016 relative aux transactions, échanges et services électroniques', 'source' => 'https://ictpolicyafrica.org/en/entity/f74jabga6q9', 'date' => '2026-10-06'],
        'financement' => ['v' => 'FAFPA : fonds d\'appui à la formation professionnelle et à l\'apprentissage, financé par une subvention de l\'État, en cours de réforme en 2026', 'source' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à Bamako, toute l\'année'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Mali, et qu\'est-ce que cela change pour un projet ?',
            'paragraphes' => [
                'L\'Institut national de la statistique du Mali a publié les résultats du cinquième recensement général, mené en 2022 : 22 395 489 habitants, dont 4 227 569 dans le district de Bamako, soit 18,9 % du pays. Le taux d\'urbanisation atteint 30,3 %, et le même rapport indique que 62 % de la population urbaine vit à Bamako. Pour un projet, cela dessine deux publics : une clientèle concentrée dans la capitale, joignable et habituée aux services en ligne, et une majorité rurale qui se touche d\'abord par le téléphone.',
                'Les chiffres du ministre chargé de l\'économie numérique, rapportés par la presse en 2024, donnent la mesure de ce téléphone : plus de 25 millions d\'abonnés mobiles fin 2023, une téledensité de 109 %, et plus de 13 millions de clients internet, soit 42 %. Le chiffre mobile compte des cartes SIM, pas des personnes. Retenez l\'écart : beaucoup plus de lignes que d\'internautes réguliers, donc un public qui se connecte par épisodes, avec des forfaits de données limités.',
                'Conséquence de conception : une page doit s\'afficher vite sur une connexion moyenne, les images sont compressées, les formulaires courts, et le parcours d\'achat tient sans création de compte. Une application destinée aux équipes de terrain, par exemple des agents qui visitent des producteurs ou des boutiques, garde ses données en mémoire et les envoie quand le réseau revient.',
                'Le paiement suit le même chemin que l\'abonnement. Selon cette même source, le pays comptait près de 17 millions de comptes de monnaie électronique fin 2023, contre plus de 14 millions en 2022. Le rapport de la BCEAO publié en mars 2026 place le Mali à 10,7 % des transactions de monnaie électronique de l\'UEMOA, part inchangée entre 2023 et 2024. Un site marchand sans portefeuille mobile se prive donc d\'une grande partie de ses acheteurs.',
                'Reste le contexte institutionnel, à citer avec sa date. Le retrait du Mali de la CEDEAO est effectif depuis le 29 janvier 2025. Selon l\'analyse de Sahel Watch de 2026, le Mali demeure membre de l\'UEMOA, utilise le franc CFA, et aucune monnaie de la Confédération des États du Sahel n\'est en circulation. Pour vos projets, rien ne change au 6 octobre 2026 : paiements, comptabilité et devis restent en FCFA.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître avant de lancer un projet au Mali ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour vendre ou encaisser au Mali ?',
            'paragraphes' => [
                'Deux portefeuilles structurent l\'encaissement mobile : Orange Money et Moov Money, ce dernier porté par Moov Africa Malitel, nom commercial de Sotelma depuis 2021. Telecel, troisième opérateur, reste minoritaire : en 2022, Orange (69,9 milliards de FCFA) et Sotelma (46,4 milliards) ont réalisé presque tous les investissements des opérateurs, Telecel 309 millions. Selon l\'AMRTP, Orange Money et Moov Money restent dominants, même si de nouveaux acteurs comme Wave, Sama Money et Wizall progressent : proposer les deux premiers couvre l\'essentiel des clients, et le cadrage vérifie s\'il faut en ajouter un autre.',
                'Deux voies existent pour les raccorder à un site ou à une application. La première est directe : un contrat marchand auprès de chaque opérateur, avec son interface de paiement. La seconde passe par un agrégateur : Moneroo liste Orange Money Mali et Moov Money Mali dans sa couverture, et propose aussi l\'accès par Hub2, qui permet d\'accepter les deux portefeuilles. Un agrégateur réduit le nombre de contrats et de clés à gérer, mais ajoute un intermédiaire dans le circuit des fonds.',
                'Les frais et délais d\'ouverture ne sont donnés ici qu\'à titre de questions à poser : les grilles changent, et les articles de blog qui les chiffrent ne remplacent pas le document commercial de l\'opérateur. Le cadrage de Richard demande donc la grille en vigueur, par écrit, avant d\'établir un devis. Le virement bancaire et le règlement à la livraison restent utiles pour les factures entre entreprises et les zones mal couvertes.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Contrat direct avec l\'opérateur ou agrégateur : quelle voie pour quel projet au Mali ?',
            'options'  => ['Contrat avec Orange Money ou Moov Money', 'Agrégateur (Hub2, Moneroo)', 'Virement ou règlement à la livraison'],
            'criteres' => [
                ['critere' => 'Portefeuilles couverts', 'valeurs' => ['Un seul par contrat', 'Orange Money et Moov Money par une seule interface', 'Tous, sans lien technique']],
                ['critere' => 'Démarches', 'valeurs' => ['Un dossier par opérateur, avec les pièces de la société', 'Un dossier auprès de l\'agrégateur', 'Aucune']],
                ['critere' => 'Rapprochement comptable', 'valeurs' => ['Un relevé par portefeuille', 'Un relevé unique, versement ensuite à la société', 'Manuel, pièce par pièce']],
                ['critere' => 'Profil typique', 'valeurs' => ['Volume élevé sur un seul portefeuille', 'Boutique ou service qui veut les deux portefeuilles vite', 'Facturation entre entreprises, livraison en main propre']],
            ],
            'verdict'  => 'Pour un premier site marchand, l\'agrégateur est souvent le plus rapide à mettre en service. Le contrat direct se justifie quand un portefeuille domine vos ventes. Dans les deux cas, le cadrage vérifie la grille de frais en vigueur avant tout engagement ; le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif des agrégateurs FedaPay, KKiaPay et CinetPay</a> détaille la logique de choix.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet au Mali ?',
            'paragraphes' => [
                'Les données personnelles relèvent de la loi n° 2013-015 du 21 mai 2013, modifiée par la loi n° 2017-070 du 18 décembre 2017. Elle a créé l\'Autorité de protection des données à caractère personnel, l\'APDP, en activité depuis 2016. Un site qui enregistre des formulaires, une boutique qui garde des fichiers clients ou une application de suivi des agents traitent des données personnelles : les formalités déclaratives auprès de l\'APDP précèdent la collecte, et le cadrage les prévoit dans le calendrier.',
                'Le contrôle n\'est pas théorique. Un article du 18 juin 2025 rapporte que l\'APDP a sanctionné une société, entre 5 et 20 millions de FCFA, pour avoir refusé de recevoir une mission de contrôle, et a relevé qu\'elle n\'avait pas accompli ses formalités déclaratives. Retenez la leçon pratique : un fichier clients doit pouvoir être présenté à l\'autorité, et les accès doivent être tracés.',
                'Côté facturation, le décret n° 2022-0733 PT du 25 novembre 2022, signé par le Président de la Transition, institue le système sécurisé de facture normalisée : une facture à mentions obligatoires, sécurisée par un autocollant, qui devient le seul document probant des opérations commerciales. Le rapport annuel 2022 de la Direction générale des impôts range son opérationnalisation parmi les mesures d\'élargissement de l\'assiette. La date de généralisation d\'une version électronique est à confirmer auprès de la Direction générale des impôts : le paramétrage de l\'ERP se cale sur le texte, puis sur la consigne de votre centre des impôts.',
                'La Direction générale des impôts propose aussi des téléservices, dont E-impôts, E-Quitus et E-Liasses. Pour une comptabilité tenue dans Odoo ou Dolibarr, l\'enjeu est d\'obtenir des exports qui se reportent sans ressaisie sur les liasses. Le Mali est membre de l\'OHADA : traité ratifié le 7 février 1995 et en vigueur le 18 septembre 1995, d\'où le SYSCOHADA pour les comptes.',
                'Le commerce en ligne relève de la loi n° 2016-012 du 6 mai 2016 sur les transactions, échanges et services électroniques. Sur la TVA des services numériques fournis par des plateformes étrangères, Richard n\'a trouvé aucune source officielle malienne à la date du 6 octobre 2026 : la question se pose à votre conseil fiscal, pas à ce texte. Même prudence sur l\'hébergement des données hors du Mali : le cadrage interroge l\'APDP sur les formalités applicables avant de choisir un serveur.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises maliennes, selon le besoin du moment ?',
            'legende' => 'Besoins types adaptés au cadre malien ; le détail de chaque service figure sur sa page.',
            'entetes' => ['Besoin typique au Mali', 'Service', 'Page'],
            'lignes'  => [
                ['Une boutique qui encaisse par Orange Money et Moov Money et livre à Bamako', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Une vitrine légère pour un cabinet, une école ou un négociant, lisible avec une connexion moyenne', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Un ERP qui tient stocks, ventes et comptabilité SYSCOHADA, avec une facture aux mentions de la facture normalisée', 'Intégration Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un logiciel de gestion plus simple pour une PME qui quitte le cahier et le tableur', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Un assistant qui répond aux clients sur WhatsApp en dehors des heures de bureau', 'Agents IA et WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Des relances, des rapports et des saisies refaits à la main chaque semaine', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Une application pour des agents de terrain, des collecteurs ou des livreurs, qui fonctionne sans réseau', 'Application mobile', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Un suivi de dossiers, de fournisseurs ou de bénéficiaires propre à l\'activité', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Un plan de digitalisation avant d\'acheter le moindre logiciel', 'Digitalisation d\'entreprise', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Des équipes à former à l\'IA, à l\'automatisation et aux outils de gestion', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas d\'usage dans les secteurs porteurs du Mali ?',
            'items' => [
                ['secteur' => 'Agriculture et coton', 'probleme' => 'La Banque mondiale note que l\'agriculture demeure la principale source de subsistance des ménages ruraux pauvres et que la croissance agricole ralentirait à 3,8 % en 2026, sous l\'effet du recul du coton. Les coopératives et négociants suivent leurs achats et leurs avances sur des cahiers.', 'solution' => 'Une application mobile de collecte qui fonctionne hors connexion, un registre des producteurs et des pesées, et un ERP qui relie achats, stocks et comptabilité SYSCOHADA.'],
                ['secteur' => 'Mines : or et lithium', 'probleme' => 'Selon la Banque mondiale, les exportations restent concentrées sur l\'or, tandis que le lithium s\'affirme comme produit d\'exportation majeur. Les petits prestataires locaux (transport, restauration, maintenance) facturent à la main des sites qui exigent des pièces propres.', 'solution' => 'Un outil de devis, de bons de livraison et de factures aux mentions de la facture normalisée, avec un portail fournisseur où le donneur d\'ordre suit les paiements.'],
                ['secteur' => 'Commerce de gros et de détail à Bamako', 'probleme' => 'Bamako concentre 18,9 % de la population et la majorité des citadins : les commerçants vendent déjà par WhatsApp et encaissent par portefeuille mobile, sans suite de stock ni de relances.', 'solution' => 'Un catalogue en ligne synchronisé avec le stock, un paiement Orange Money et Moov Money, un reçu envoyé par message et un rapprochement automatique des encaissements.'],
                ['secteur' => 'ONG et projets de développement', 'probleme' => 'Les programmes comptent leurs bénéficiaires, leurs distributions et leurs justificatifs dans des tableurs dispersés, que chaque bailleur veut présentés à sa façon.', 'solution' => 'Une base unique de bénéficiaires et d\'activités, des formulaires de collecte sur téléphone et des rapports générés pour chaque bailleur, avec accès par rôle.'],
                ['secteur' => 'Formation et enseignement', 'probleme' => 'Le financement de la formation par le FAFPA est en réforme et les centres doivent justifier leurs résultats : inscriptions, présences et évaluations restent sur papier.', 'solution' => 'Un espace en ligne pour les inscriptions, le paiement par portefeuille mobile, le suivi des présences et la remise des attestations.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment former les équipes maliennes, et avec quel financement ?',
            'intro' => 'La formation se donne à distance, en visioconférence, sur les outils de votre entreprise, avec des exercices tirés de vos propres documents.',
            'items' => [
                ['titre' => 'Le FAFPA, un financement à vérifier avant de le compter', 'texte' => 'Le Fonds d\'appui à la formation professionnelle et à l\'apprentissage est l\'organisme national. Selon l\'Organisation internationale du Travail (28 juillet 2026), la taxe de formation a été remplacée par une subvention de l\'État, et le budget annuel du fonds est passé de 9,5 milliards de FCFA en 2015 à 2,8 milliards en 2022. Un atelier de validation sur la réforme de la gouvernance et des financements s\'est tenu à Bamako du 30 juin au 1er juillet 2026. Demandez au fonds quelles lignes sont ouvertes et si un organisme extérieur est admis avant de bâtir un budget sur lui.'],
                ['titre' => 'WhatsApp Business', 'texte' => 'Pour les commerces qui vendent déjà par messages : catalogue, réponses rapides, étiquettes, puis automatisation. <a href="/formations/whatsapp-business">Voir la formation</a>.'],
                ['titre' => 'Odoo et comptabilité SYSCOHADA', 'texte' => 'Pour les comptables et gestionnaires qui reprennent un ERP : plan de comptes, journaux, clôture. <a href="/formations/odoo-comptabilite-syscohada">Voir la formation</a>.'],
                ['titre' => 'IA en entreprise', 'texte' => 'Pour gagner du temps sur les courriers, les rapports et les analyses sans exposer de données sensibles, ce qui compte avec les obligations de l\'APDP. <a href="/formations/ia-en-entreprise">Voir la formation</a>.'],
                ['titre' => 'Digitalisation des processus', 'texte' => 'Pour cartographier un circuit de travail, repérer ce qui se saisit deux fois et choisir quoi automatiser. <a href="/formations/digitalisation-processus">Voir la formation</a>.'],
                ['titre' => 'E-commerce', 'texte' => 'Pour les équipes qui gèrent une boutique : catalogue, paiement, livraison, relation client. <a href="/formations/e-commerce">Voir la formation</a>.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'intro' => 'Tout se fait à distance : entre Cotonou et Bamako, ce qui compte est la régularité des échanges, pas la distance.',
            'items' => [
                ['titre' => 'Fuseau horaire', 'texte' => 'Bamako suit l\'heure de Greenwich toute l\'année, soit une heure de moins qu\'à Cotonou. Un rendez-vous à 9 h à Bamako se tient à 10 h à Cotonou, et les journées de travail se recouvrent presque entièrement.'],
                ['titre' => 'Langue', 'texte' => 'Français pour les échanges, les documents et la formation, langue de travail selon la Constitution de 2023. Si votre public parle surtout une langue nationale, on décide au cadrage ce qui doit être traduit dans l\'interface.'],
                ['titre' => 'Devise des devis', 'texte' => 'Le FCFA, monnaie du Mali comme du Bénin : aucun risque de change entre les deux pays. Les modes de règlement se conviennent au devis.'],
                ['titre' => 'Outils de suivi', 'texte' => 'Le suivi peut s\'organiser autour d\'un groupe WhatsApp pour les questions rapides, d\'un document partagé pour les décisions, d\'un point régulier en visioconférence et d\'une démonstration à chaque livraison intermédiaire. Pour les connexions fragiles, les échanges peuvent aussi passer par message vocal.'],
                ['titre' => 'Premier échange', 'texte' => 'Vous décrivez votre activité et ce qui coince ; la réponse arrive sous 24 heures avec une première lecture du besoin.'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet pour une entreprise malienne ?',
            'items' => [
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page légère, lisible sur téléphone', 'Un formulaire ou un bouton WhatsApp', 'Mise en ligne']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Plusieurs pages', 'Formulaire de contact', 'Référencement de base', 'Mise en ligne']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Audit de départ', 'Corrections prioritaires', 'Suivi des résultats']],
                ['offre' => 'Boutique, ERP, application', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Cadrage', 'Paiement Orange Money et Moov Money', 'Formation des équipes']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce qui fait varier le prix d\'un projet au Mali ?',
            'paragraphes' => [
                'Le nombre de portefeuilles à raccorder pèse d\'abord : un agrégateur en réunit deux, un contrat direct par opérateur double le travail de test. Viennent ensuite les mentions de facture : une facture alignée sur le système de facture normalisée demande des modèles dédiés dans l\'ERP, plus un contrôle avec votre centre des impôts. Le fonctionnement hors connexion d\'une application de terrain ajoute aussi du développement, car chaque donnée doit se synchroniser sans doublon.',
                'Les montants affichés ci-dessus sont des points de départ, convertis au taux fixe de 655,957 FCFA pour 1 €. Le devis est établi en FCFA ; si le cadre monétaire de l\'UEMOA évoluait, la clause de conversion serait revue avec vous avant toute facturation.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter quand on lance un projet numérique au Mali ?',
            'intro' => 'Ces erreurs reviennent dans les projets pensés loin du terrain.',
            'items' => [
                ['titre' => 'Ne proposer qu\'un portefeuille', 'texte' => 'Orange Money et Moov Money coexistent. Une boutique qui n\'accepte que l\'un renvoie une partie de ses clients vers la concurrence.'],
                ['titre' => 'Collecter avant de déclarer', 'texte' => 'Les formalités déclaratives auprès de l\'APDP précèdent la collecte. Une sanction a été rendue publique en juin 2025 pour un refus de contrôle et des formalités non accomplies.'],
                ['titre' => 'Ignorer la facture normalisée', 'texte' => 'Le décret du 25 novembre 2022 en fait le seul document probant. Un ERP déployé sans ses mentions est à corriger plus tard, souvent dans l\'urgence.'],
                ['titre' => 'Concevoir pour la fibre', 'texte' => 'Avec 42 % de clients internet fin 2023, une page de plusieurs mégaoctets ou une application sans mode hors connexion perd des utilisateurs.'],
                ['titre' => 'Supposer que le contexte institutionnel change la monnaie', 'texte' => 'Le Mali a quitté la CEDEAO le 29 janvier 2025, mais il reste dans l\'UEMOA et le franc CFA en septembre 2026. Une clause de devise claire dans le devis évite les malentendus.'],
                ['titre' => 'Compter sur le FAFPA sans le vérifier', 'texte' => 'Le fonds est en réforme : demandez-lui par écrit ce qu\'il prend en charge avant de budgéter une formation.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet à Richard SALANON quand on est au Mali ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard a déjà travaillé avec des entreprises au Mali, comme dans treize autres pays dont le Bénin, la Côte d\'Ivoire, le Sénégal et le Burkina Faso. Il connaît le cadre commun de l\'UEMOA et de l\'OHADA : franc CFA, mobile money, SYSCOHADA. Ses projets livrés figurent sur la page des <a href="/realisations/">réalisations</a>.',
                'Il a étudié à EPITECH, a conçu l\'assistant WhatsApp à intelligence artificielle Wapy, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Pour son parcours, voir <a href="/richard-salanon">la page de Richard SALANON</a> et la page <a href="/a-propos/">À propos</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel projet voulez-vous lancer au Mali ?',
            'texte'  => 'Décrivez votre activité et votre besoin. La réponse arrive sous 24 heures, avec une première lecture du projet et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'En quelle monnaie sont établis les devis pour le Mali ?', 'r' => 'En FCFA, monnaie aussi utilisée au Bénin : aucun risque de change entre les deux pays. L\'équivalent en euros se calcule au taux fixe de 655,957 FCFA pour 1 €. Le franc CFA reste en usage au Mali en septembre 2026.'],
        ['q' => 'Le retrait du Mali de la CEDEAO change-t-il quelque chose à un projet numérique ?', 'r' => 'Le retrait est effectif depuis le 29 janvier 2025, mais le Mali reste membre de l\'UEMOA et garde le franc CFA selon Sahel Watch (2026). Paiements, comptabilité et devis restent donc en FCFA ; le devis peut prévoir une clause de devise.'],
        ['q' => 'Faut-il déclarer son site à l\'APDP avant de collecter des données ?', 'r' => 'La loi n° 2013-015 prévoit des formalités déclaratives avant le traitement. Un formulaire avec stockage, un fichier clients ou une caisse entrent dans le champ. Le dossier se prépare au cadrage et se fait relire par votre conseil.'],
        ['q' => 'Qu\'est-ce que la facture normalisée au Mali ?', 'r' => 'Le décret n° 2022-0733 PT du 25 novembre 2022 institue une facture à mentions obligatoires, sécurisée par un autocollant, seul document probant des opérations commerciales. La date de généralisation d\'une version électronique est à confirmer auprès de la Direction générale des impôts.'],
        ['q' => 'Quels moyens de paiement mobile accepter au Mali ?', 'r' => 'Orange Money et Moov Money (Moov Africa Malitel). Un agrégateur comme Hub2 ou Moneroo peut raccorder les deux par une seule interface. La grille de frais se vérifie par écrit auprès de l\'opérateur avant le devis.'],
        ['q' => 'Le Mali fait-il partie de l\'OHADA, et que change le SYSCOHADA pour un ERP ?', 'r' => 'Oui : traité ratifié le 7 février 1995, en vigueur le 18 septembre 1995. Odoo et Dolibarr se paramètrent avec le plan de comptes SYSCOHADA et des états conformes, ce qui évite les retraitements en fin d\'exercice.'],
        ['q' => 'Le FAFPA peut-il financer la formation de mon équipe ?', 'r' => 'C\'est possible mais à vérifier : le fonds est en cours de réforme en 2026 et sa subvention a fortement baissé depuis 2015. Demandez-lui quelles lignes sont ouvertes et si un organisme extérieur est admis.'],
        ['q' => 'Richard SALANON se déplace-t-il à Bamako ?', 'r' => 'Non, ses interventions au Mali se font à distance : cadrage en visioconférence, développement et formation en ligne, suivi par messagerie. Une heure sépare Cotonou de Bamako.'],
        ['q' => 'Peut-on utiliser une langue nationale dans un site ou une application ?', 'r' => 'La Constitution de 2023 fait des langues nationales les langues officielles et du français la langue de travail. Le choix des langues de l\'interface se fait au cadrage, selon votre public.'],
    ],

    'sources' => [
        ['titre' => 'INSTAT Mali, RGPH5 : résultats globaux du recensement de 2022', 'url' => 'https://www.instat-mali.org/laravel-filemanager/files/shares/rgph/rapport-resultats-globaux-rgph5_rgph.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, marché du mobile et services financiers numériques au Mali (chiffres fin 2023, 2024)', 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-06'],
        ['titre' => 'Le Soleil, transactions de monnaie électronique dans l\'UEMOA en 2024 (rapport BCEAO de mars 2026)', 'url' => 'https://lesoleil.sn/actualites/economie/volume-des-transactions-electroniques-le-senegal-leader-de-luemoa-avec-24-des-parts/', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, le Mali dans l\'Union monétaire ouest-africaine', 'url' => 'https://www.bceao.int/fr/etats-membres/mali', 'date' => '2026-10-06'],
        ['titre' => 'Sahel Watch, Alliance des États du Sahel : institutions et bilan 2026', 'url' => 'https://sahel.watch/alliance-etats-du-sahel-aes-institutions-bilan-2026/', 'date' => '2026-10-06'],
        ['titre' => 'Moneroo, couverture des moyens de paiement : Orange Money Mali, Moov Money Mali, Hub2', 'url' => 'https://moneroo.io/coverage', 'date' => '2026-10-06'],
        ['titre' => 'Data Protection Africa, fiche du Mali : loi n° 2013-015 et APDP', 'url' => 'https://dataprotection.africa/?p=1335', 'date' => '2026-10-06'],
        ['titre' => 'Droit, médias et finance, l\'APDP sanctionne une société (18 juin 2025)', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1026-mali-lautorite-de-protection-des-donnees-a-caractere-personnel-inflige-une-sanction-pecuniaire-a-la-societe-aminata-konate-sarl-sak', 'date' => '2026-10-06'],
        ['titre' => 'DGI du Mali, décret instituant le système sécurisé de facture normalisée', 'url' => 'https://www.dgi.gouv.ml/institution-du-systeme-securise-de-factures-normalisee-le-president-de-la-transition-signe-le-decret/', 'date' => '2026-10-06'],
        ['titre' => 'DGI du Mali, rapport annuel 2022', 'url' => 'https://www.dgi.gouv.ml/wp-content/uploads/2023/05/Rapport-annuel-DGI-Mali-2022-version.pdf', 'date' => '2026-10-06'],
        ['titre' => 'DGI du Mali, site de l\'administration (E-impôts, E-Quitus, E-Liasses)', 'url' => 'https://www.dgi.gouv.ml/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, le Mali, État membre', 'url' => 'https://www.ohada.com/etats-membres/mali.html', 'date' => '2026-10-06'],
        ['titre' => 'ICT Policy Africa, loi n° 2016-012 du 6 mai 2016 sur les transactions, échanges et services électroniques', 'url' => 'https://ictpolicyafrica.org/en/entity/f74jabga6q9', 'date' => '2026-10-06'],
        ['titre' => 'OIT, réforme du Fonds d\'appui à la formation professionnelle et à l\'apprentissage du Mali (28 juillet 2026)', 'url' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund', 'date' => '2026-10-06'],
        ['titre' => 'ConsentStack, loi n° 2013-015 et loi n° 2017-070 du Mali', 'url' => 'https://www.consentstack.io/regulations/ml-law2013015', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, opérateurs télécoms du Mali : investissements 2022', 'url' => 'https://osiris.sn/mali-les-operateurs-telecoms-ont-investi-193-7-millions-en-2022.html', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, villes du Mali (recensement de 2009)', 'url' => 'https://en.wikipedia.org/wiki/List_of_cities_in_Mali', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, Mali : vue d\'ensemble', 'url' => 'https://www.banquemondiale.org/fr/country/mali/overview', 'date' => '2026-10-06'],
        ['titre' => 'Constitution du Mali de 2023, article 31 sur les langues', 'url' => 'https://axl.cefan.ulaval.ca/afrique/mali-const-2023.htm', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires : liens de zones (Africa/Bamako)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs téléphoniques nationaux (recommandation E.164)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'application-mobile-android-ios', 'application-web-sur-mesure', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'formations'  => ['whatsapp-business', 'odoo-comptabilite-syscohada', 'ia-en-entreprise', 'digitalisation-processus', 'e-commerce'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'metiers'     => ['agro-industrie', 'commercants-e-commercants', 'ong-projets-developpement'],
    ],
];
