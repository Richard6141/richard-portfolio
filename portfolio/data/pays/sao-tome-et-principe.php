<?php
// ============================================================
// data/pays/sao-tome-et-principe.php · Page pays « São Tomé-et-Príncipe » (vague 1D).
// Faits externes relevés sur les pages officielles ou institutionnelles citées
// dans la fiche et dans les sources, consultées le 06/10/2026.
// Clés de fiche laissées de côté faute de source établie : villes, mobile_money,
// operateurs, agregateurs, facturation, ohada (pays hors OHADA), ecommerce, financement.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Du cacao de Príncipe aux grossistes d’Água-Grande : sites, ERP et applications suivis depuis Cotonou pour l’archipel santoméen, devis en euros',
    'title'   => 'Digitalisation à São Tomé-et-Príncipe | Richard SALANON',
    'meta'    => 'Sites, applications, IA, Odoo et Dolibarr pour les entreprises de São Tomé-et-Príncipe : projets menés à distance depuis Cotonou, devis en euros.',
    'en_bref' => 'Richard SALANON suit depuis Cotonou les projets numériques des entreprises de l’archipel santoméen : réservation pour l’hôtellerie, outils de gestion pour les importateurs, applications de terrain, assistants WhatsApp, Odoo, Dolibarr et formation. Une heure sépare São Tomé de Cotonou, les échanges se tiennent en français et chaque devis est libellé en euros, monnaie à laquelle la dobra est arrimée à taux fixe.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => [
            'v'      => 'São Tomé, sur l’île du même nom',
            'source' => 'https://www.constituteproject.org/constitution/Sao_Tome_and_Principe_2003',
            'date'   => '2026-10-06',
        ],
        'fuseau' => [
            'v'      => 'UTC+0 (heure de Greenwich) toute l’année depuis le 1er janvier 2019, soit une heure de moins qu’à Cotonou',
            'source' => 'https://data.iana.org/time-zones/tzdb/africa',
            'date'   => '2026-10-06',
        ],
        'indicatif' => [
            'v'      => '+239',
            'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2011-PDF-E.pdf',
            'date'   => '2026-10-06',
        ],
        'langues' => [
            'v'      => ['Portugais (langue officielle, parlé par 98,4 % des résidents de 1 an et plus au recensement de 2012)', 'forro (36,2 %)', 'angolar (6,6 %)', 'lung’ie (principense, 1 %)'],
            'source' => 'https://www.ine.st/phocadownload/userupload/Documentos/Recenseamentos/2012/Dados%20Distritais%20e%20Nacional%20Recenseamento%202012/Resultados%20Nacionais%20do%20IV%20RGPH%202012.pdf',
            'date'   => '2026-10-06',
        ],
        'population' => [
            'v'      => '209 607 résidents au recensement du 15 novembre 2024, dont 67,2 % en zone urbaine et 4,7 % sur l’île de Príncipe',
            'source' => 'https://www.ine.st/phocadownload/userupload/Documentos/Recenseamentos/2024/Resultado_VRGPH%202024.pdf',
            'date'   => '2026-10-06',
        ],
        'internet' => [
            'v'      => '148 000 internautes, soit 61,5 % de la population estimée par DataReportal, en octobre 2025',
            'source' => 'https://datareportal.com/reports/digital-2026-sao-tome-and-principe',
            'date'   => '2026-10-06',
        ],
        'mobile' => [
            'v'      => '154 000 connexions mobiles cellulaires, soit 63,9 % de la population estimée par DataReportal, fin 2025',
            'source' => 'https://datareportal.com/reports/digital-2026-sao-tome-and-principe',
            'date'   => '2026-10-06',
        ],
        'secteurs' => [
            'v'      => ['Cacao (54 % des exportations en 2021)', 'huile de palme (32 % des exportations en 2021)', 'tourisme', 'pêche'],
            'source' => 'https://www.trade.gov/country-commercial-guides/sao-tome-and-principe-market-overview',
            'date'   => '2026-10-06',
        ],
        'devise' => [
            'v'      => 'Dobra (STN), arrimée à l’euro : 24,50 dobras pour 1 euro au cours affiché par la banque centrale le 6 octobre 2026',
            'source' => 'https://www.bcstp.st/',
            'date'   => '2026-10-06',
        ],
        'donnees' => [
            'v'      => 'Loi n° 03/2016 sur la protection des données personnelles (Lei n.º 03/2016), promulguée le 18 mars 2016',
            'source' => 'https://www.afapdp.org/wp-content/uploads/2022/02/Loi-de-Protection-des-Donnes-Personnlles-03_2016.pdf',
            'date'   => '2026-10-06',
        ],
        'autorite' => [
            'v'      => 'Agence nationale de protection des données personnelles (Agência Nacional de Proteção de Dados Pessoais, ANPDP)',
            'source' => 'https://www.afapdp.org/wp-content/uploads/2022/02/Loi-de-Protection-des-Donnes-Personnlles-03_2016.pdf',
            'date'   => '2026-10-06',
        ],
        'tva' => [
            'v'      => 'IVA (imposto sobre o valor acrescentado) au taux normal de 15 %, en vigueur depuis le 1er juin 2023 (loi n° 02/2023)',
            'source' => 'https://mirandalawfirm.com/en/insights-knowledge/publications/alerts/vat-code-enters-into-force-in-stp-2',
            'date'   => '2026-10-06',
        ],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à São Tomé (UTC+0 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique dans l’archipel, et que change-t-il pour un projet ?',
            'paragraphes' => [
                'Le cinquième recensement général de la population, mené du 15 novembre au 15 décembre 2024 et publié par l’Institut national de la statistique en juillet 2025, compte 209 607 résidents. Selon ce rapport, 67,2 % d’entre eux vivent en zone urbaine, 95,3 % sur l’île de São Tomé et 4,7 % sur celle de Príncipe ; à lui seul, le district d’Água-Grande, celui de la capitale, rassemble 38,5 % de la population du pays. Pour un projet, cela dessine un marché étroit et très concentré : une boutique ou une application qui réussit à Água-Grande a déjà touché une bonne part de sa clientèle possible.',
                'Côté connexion, DataReportal relève en octobre 2025 environ 148 000 internautes, soit 61,5 % de la population, et 154 000 connexions mobiles cellulaires fin 2025, soit 63,9 %, avec 73 200 comptes sur les réseaux sociaux, soit 30,3 %. Ces taux se rapportent à une population estimée à 241 000 habitants, plus élevée que le chiffre du recensement : ils donnent un ordre de grandeur et ne se lisent pas au point près. Le message utile est que le téléphone est l’écran principal et que les réseaux sociaux restent une porte d’entrée secondaire.',
                'Le même recensement apporte un chiffre qui oriente la conception : parmi les ménages ordinaires qui ont répondu, 12,5 % déclarent posséder un ordinateur. Un site ou une application destinés au grand public se pensent donc d’abord pour un smartphone, avec des pages légères, des formulaires courts et des écrans lisibles en plein soleil. Les outils internes d’une entreprise, eux, tournent sur des postes de bureau : les deux publics se prévoient séparément dès le cadrage.',
                'L’économie elle-même fixe les besoins. Le profil de marché publié par l’agence portugaise AICEP, mis à jour en mai 2025, décrit une économie dépendante des importations de nourriture, de carburant et de biens d’équipement, où le cacao reste le principal produit d’exportation, l’huile de palme gagnant en importance, avec une pêche à fort potentiel et un tourisme en croissance graduelle. Les projets qui se présentent le plus souvent suivent ces lignes : suivre des stocks importés, vendre des séjours, tracer des récoltes, payer et facturer sans papier.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir avant de lancer un projet à São Tomé-et-Príncipe ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer à São Tomé-et-Príncipe, et comment l’intégration se passe-t-elle ?',
            'paragraphes' => [
                'Le paysage des paiements santoméens repose d’abord sur les banques. L’évaluation des infrastructures de paiement publiée par l’UNCDF en 2025, dont les données s’arrêtent à septembre 2023, recense cinq banques fin 2020 : la Banque internationale de São Tomé-et-Príncipe, Afriland First Bank, Ecobank, BGFI et Energy Bank. Le réseau Dobra24, partagé pour les distributeurs et les terminaux de paiement, est en service depuis octobre 2011. La même étude compte 31 distributeurs et 138 terminaux de paiement fin 2021, dont 70 % des distributeurs dans la région d’Água-Grande.',
                'Les cartes internationales ont ouvert le circuit avec le choix de SIBS en 2021. Un article de Forbes Portugal du 29 avril 2021 rapporte que la banque centrale et la société interbancaire du pays ont retenu SIBS pour développer la plateforme nationale : elle traite Dobra24 et se connecte aux réseaux Visa et Mastercard, pour un pays plus ouvert aux visiteurs et aux voyageurs. Pour un hôtel, un restaurant ou une agence qui vend à des voyageurs, c’est la porte d’entrée naturelle ; l’encaissement en ligne par carte passe en plus par un prestataire que la banque du commerçant accepte, et son éligibilité se vérifie avant de promettre quoi que ce soit au client.',
                'Le paiement par portefeuille mobile se décide au cadrage, pas sur une supposition. L’UNCDF décrit CST et Unitel STP, les deux opérateurs télécoms régulés par l’Autorité générale de régulation (AGER), comme titulaires de licences de téléphonie sans agrément de monnaie mobile à l’époque de son enquête, et rappelle que la banque centrale supervise les opérateurs de paiement selon la loi n° 17/2018 et le décret-loi n° 16/2019. Une monnaie électronique locale, le Dobra Digital, a de son côté été lancée le 16 mars 2022 par l’entreprise santoméenne Golfintech, dans un projet financé par le PNUD : le nombre de commerçants qui l’acceptent aujourd’hui se confirme auprès de l’émetteur avant tout branchement.',
                'Concrètement, Richard procède en trois temps. Il établit avec le client la liste des moyens que ses acheteurs utilisent réellement : carte, virement, espèces à la livraison, paiement différé. Il branche ensuite ce qui est ouvert au commerçant, en commençant par le plus simple (référence de virement générée par la commande, justificatif téléchargé, confirmation par message), puis il prépare la place d’un connecteur pour le jour où l’offre de paiement mobile s’élargit. Aucune commission, aucun délai de versement et aucun frais d’opérateur n’est avancé tant que le prestataire n’a pas donné ses conditions écrites.',
            ],
        ],
        [
            'type'     => 'tableau',
            'titre'    => 'Que retenir de chaque moyen de paiement pour un site ou une application ?',
            'legende'  => 'Moyens de paiement relevés dans les documents de la banque centrale, de SIBS et de l’UNCDF, et leurs conséquences pour l’intégration',
            'entetes'  => ['Moyen', 'Ce qui est établi', 'Conséquence pour le projet'],
            'lignes'   => [
                ['Cartes Visa et Mastercard', 'Plateforme nationale confiée à SIBS en 2021 : elle traite Dobra24 et se connecte à Visa et Mastercard (Forbes Portugal, 29 avril 2021)', 'Adaptées aux voyageurs et aux clients de la diaspora ; prestataire de paiement en ligne à faire valider par la banque du commerçant'],
                ['Réseau Dobra24', '31 distributeurs et 138 terminaux fin 2021 ; réseau exploité par une société interbancaire dont la banque centrale détient 61 % (UNCDF)', 'Utile pour l’encaissement en boutique ; le réseau est concentré à Água-Grande, donc peu de points hors de la capitale'],
                ['Virement et banque en ligne', '117 344 virements domestiques, pour huit milliards de dobras, d’après l’UNCDF ; trois banques proposent la banque en ligne', 'Mode le plus sûr pour une commande professionnelle : référence unique par commande, rapprochement dans Odoo ou Dolibarr'],
                ['Dobra Digital', 'Monnaie électronique lancée le 16 mars 2022 par Golfintech, avec un financement du PNUD (Forbes Afrique lusophone)', 'À confirmer avec l’émetteur avant tout connecteur : commerçants acceptants, plafonds et conditions'],
                ['Transferts de la diaspora', 'Western Union et MoneyGram opèrent par des partenariats bancaires (UNCDF)', 'Utiles pour un proche qui règle une commande ou une formation depuis l’étranger'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique à São Tomé-et-Príncipe ?',
            'paragraphes' => [
                'Le texte de référence est la loi n° 03/2016 (Lei n.º 03/2016) sur la protection des données personnelles, adoptée par l’Assemblée nationale le 15 février 2016 et promulguée le 18 mars 2016. Elle est contrôlée par l’Agence nationale de protection des données personnelles, l’ANPDP. Son article 21 oblige le responsable d’un traitement automatisé à le notifier par écrit à l’agence huit jours au plus tard avant son démarrage ; l’article 22 soumet à autorisation préalable les données sensibles, les données de crédit et de solvabilité, l’interconnexion de fichiers et certains usages à des fins de collecte. Un site qui collecte des noms et des numéros de téléphone est concerné.',
                'La question de l’hébergement vient de l’article 19 : un transfert de données hors du territoire n’est permis que vers un ordre juridique qui assure un niveau de protection adéquat, et c’est à l’ANPDP d’en décider. L’article 20 prévoit des dérogations par notification, notamment avec le consentement non ambigu de la personne ou quand le transfert est nécessaire à l’exécution d’un contrat, et la possibilité d’une autorisation de l’agence appuyée sur des clauses contractuelles adaptées. Concrètement, un site hébergé en Europe suppose un consentement clair dans le formulaire et une déclaration qui mentionne le transfert prévu.',
                'La TVA s’appelle IVA. Le code de l’IVA a été approuvé par la loi n° 13/2019, publiée au journal officiel le 6 novembre 2019 ; il est entré en vigueur le 1er juin 2023 en vertu de la loi n° 02/2023 du 31 mai, le calendrier annoncé en 2019 ayant été repoussé. Le taux normal est de 15 %, avec un taux de 7,5 % sur certains produits de base. Le cabinet VdA expliquait en 2019 que les petits contribuables relèvent d’un régime simplifié, que les déclarations sont mensuelles et que les services rendus par des prestataires non résidents sont taxés chez l’acquéreur lorsqu’il est assujetti ; ces points se revérifient auprès de la Direction des impôts. Une facture de Richard à une entreprise assujettie reste donc en euros, et la déclaration se règle chez le client avec son comptable.',
                'Côté droit des affaires, São Tomé-et-Príncipe ne figure pas dans la liste des dix-sept États membres publiée par l’OHADA : un déploiement d’Odoo ou de Dolibarr n’y reçoit donc pas le plan comptable SYSCOHADA par défaut, et le comptable de l’entreprise décide du plan de comptes avant tout paramétrage. Les mentions d’une facture, son numérotage et la forme d’éventuels documents électroniques se confirment auprès de la Direction des impôts avant la mise en service d’un module de facturation : le projet prévoit ce point dans le cadrage, avec une facture modifiable plutôt qu’un format figé.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises santoméennes, selon leur besoin ?',
            'legende' => 'Besoins fréquents dans l’archipel et page du service correspondant',
            'entetes' => ['Besoin typique', 'Service', 'Page'],
            'lignes'  => [
                ['Un hôtel, une pousada ou une agence veut recevoir des réservations directes de voyageurs étrangers', 'Système de réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Réservation en ligne</a>'],
                ['Un exportateur de cacao ou d’huile de palme suit ses lots, ses fournisseurs et ses documents d’expédition', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Un importateur ou un grossiste gère stock, achats, ventes et IVA à 15 % dans un seul outil', 'Intégration d’Odoo', '<a href="/services/integration-odoo">Intégration d’Odoo</a>'],
                ['Une PME qui facture et suit ses clients cherche un outil léger, avec peu de maintenance', 'Intégration de Dolibarr', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Un commerce de la capitale veut montrer son catalogue et prendre des commandes en ligne', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Une entreprise reçoit ses demandes clients par messagerie et ne peut plus y répondre à temps', 'Assistant IA sur WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Un cabinet, une ONG ou une institution veut se présenter à ses partenaires, en archipel comme en Europe', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Une entreprise veut apparaître dans Google quand un voyageur ou un acheteur cherche ses services', 'Référencement naturel', '<a href="/services/referencement-naturel-seo">Référencement naturel (SEO)</a>'],
                ['Une équipe de terrain, à São Tomé comme à Príncipe, saisit ses relevés sur papier', 'Application mobile Android et iOS', '<a href="/services/application-mobile-android-ios">Application mobile</a>'],
                ['Un logiciel de caisse, une banque en ligne et un tableur doivent échanger sans ressaisie', 'API et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Un outil existant tombe en panne ou n’évolue plus, faute de quelqu’un pour le tenir à jour', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas d’usage dans les secteurs qui portent l’économie santoméenne ?',
            'items' => [
                [
                    'secteur'  => 'Cacao et huile de palme',
                    'probleme' => 'Les lots de cacao, qui pèsent 54 % des exportations de 2021, circulent entre plantations, séchoirs et exportateurs sur des carnets papier',
                    'solution' => 'Une application web enregistre chaque lot à la réception, son poids, sa provenance et son statut ; les documents d’expédition se génèrent à partir des mêmes données, et un tableau de bord suit les volumes par fournisseur. La saisie hors connexion à la plantation se prévoit dès le départ.',
                    'lien'     => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Voir le service application web sur mesure'],
                ],
                [
                    'secteur'  => 'Tourisme',
                    'probleme' => 'Un petit hôtel reçoit ses demandes par courriel et par messagerie, sans voir quelles chambres sont libres ni quelles dates sont déjà promises',
                    'solution' => 'Un calendrier de disponibilités en ligne, une page de réservation en plusieurs langues choisies par l’établissement et un virement ou un paiement par carte à l’arrivée, selon ce que sa banque accepte. Les confirmations partent automatiquement vers le voyageur et vers l’équipe.',
                    'lien'     => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Voir le service de réservation en ligne'],
                ],
                [
                    'secteur'  => 'Pêche',
                    'probleme' => 'Les retours de pêche se notent au quai, puis se recopient pour la facturation et pour la déclaration d’activité',
                    'solution' => 'Une application mobile permet de saisir espèces, poids et prix au retour des bateaux, même sans réseau ; la synchronisation alimente ensuite la facturation et le stock en chambre froide dans Odoo ou Dolibarr, sans ressaisie.',
                    'lien'     => ['url' => '/services/application-mobile-android-ios', 'texte' => 'Voir le service d’application mobile'],
                ],
                [
                    'secteur'  => 'Commerce d’importation',
                    'probleme' => 'Un grossiste qui importe nourriture et matériel attend des conteneurs pendant des semaines et ne sait plus ce qui est vendu, réservé ou en route',
                    'solution' => 'Odoo relie les commandes fournisseurs, les arrivées, le stock par entrepôt et les ventes ; l’IVA à 15 % se paramètre sur les produits, et le tableau d’encours indique ce que chaque client doit encore. La reprise des fichiers existants se fait avant le démarrage.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Voir le service d’intégration d’Odoo'],
                ],
                [
                    'secteur'  => 'Banques et microfinance',
                    'probleme' => 'Une institution financière veut proposer un suivi de dossier en ligne, alors que ses données doivent rester sous contrôle de la loi n° 03/2016',
                    'solution' => 'Un espace client raccordé par API au logiciel métier, avec des droits d’accès par rôle, une journalisation des consultations, un formulaire qui recueille le consentement et un hébergement choisi après analyse des articles 19 et 20 de la loi.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'Voir le service d’API et d’intégrations'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes santoméennes à ces outils, et avec quel financement ?',
            'paragraphes' => [
                'Chaque séance se tient en visioconférence et prend appui sur l’outil que l’entreprise utilise vraiment : le tableur laisse la place à Odoo, le groupe WhatsApp à un assistant, le fichier de commandes à une application. Une séance de deux heures en fin de journée, à l’heure de São Tomé, convient aux équipes qui ne peuvent pas quitter le comptoir. Un support écrit en français accompagne chaque module, que l’entreprise peut faire traduire en portugais pour ses collaborateurs ; Richard n’assure pas lui-même cette traduction.',
                'Quelques parcours reviennent dans l’archipel. La <a href="/formations/digitaliser-son-entreprise">formation à la digitalisation de l’entreprise</a> convient aux dirigeants d’hôtel, de commerce ou de coopérative qui veulent choisir leurs outils. La <a href="/formations/ia-en-entreprise">formation à l’IA en entreprise</a> s’adresse à ceux qui rédigent beaucoup, en français comme en portugais. La <a href="/formations/whatsapp-business">formation WhatsApp Business</a> sert les commerces qui vendent par messagerie, et la <a href="/formations/visibilite-google">formation à la visibilité sur Google</a> aide un établissement touristique à apparaître dans les recherches des voyageurs. Pour les équipes qui reçoivent Odoo, la <a href="/formations/odoo-utilisateurs">formation Odoo pour utilisateurs</a> couvre les gestes du quotidien.',
                'Le financement de la formation se règle avec l’employeur, l’organisation partenaire ou le bailleur qui soutient le projet, par exemple dans le cadre d’un programme de coopération : chacun fixe ses propres conditions, et le client les confirme avant l’inscription. Richard remet dans tous les cas un devis détaillé en euros, avec le programme, la durée et le nombre de participants, qui peut être joint à un dossier de demande. Les programmes, durées et publics se parcourent depuis le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment travailler avec Richard quand une heure sépare São Tomé de Cotonou ?',
            'paragraphes' => [
                'Installé à Cotonou, Richard conduit à distance les projets de l’archipel. L’archipel suit l’heure de Greenwich toute l’année depuis le 1er janvier 2019 d’après la base de fuseaux de l’IANA, alors que Cotonou est à UTC+1 : quand il est 10 h à São Tomé, il est 11 h à Cotonou. Richard est joignable de 7 h à 20 h, heure de Cotonou, c’est-à-dire de 6 h à 19 h à São Tomé : treize heures qui recouvrent la journée entière du client.',
                'La langue de travail est le français, avec l’anglais en renfort. Les textes officiels du pays sont en portugais, et les noms de lois, d’autorités et d’opérateurs sont cités ici avec leur traduction ; les contenus destinés au public santoméen, rédigés en portugais par le client ou son traducteur, s’intègrent aux sites et aux applications que Richard construit. Les devis sont en euros, et la dobra étant arrimée à l’euro à 24,50 pour 1, ils restent lisibles et stables d’un mois à l’autre. Le règlement se fait par virement, par carte bancaire ou par PayPal.',
                'Les échanges courants passent par WhatsApp et par courriel, les points d’étape par appel vidéo, avec un compte rendu écrit à chaque fois. Le premier retour arrive sous 24 heures. Aucun déplacement n’est prévu : tout le cadrage, la recette et la formation se font en ligne, et la livraison se vérifie sur un site de test que le client visite avec son propre téléphone.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelles sont les étapes d’un premier projet à distance ?',
            'items' => [
                ['titre' => 'Premier échange', 'texte' => 'Le client décrit son besoin par message ou par courriel ; Richard répond avec quelques questions précises : qui utilise l’outil, sur quel téléphone, avec quels moyens de paiement.', 'duree' => 'Réponse sous 24 heures'],
                ['titre' => 'Cadrage en visioconférence', 'texte' => 'Une séance d’une heure environ, à l’heure du client, pour fixer le périmètre, vérifier le sujet des données personnelles et choisir l’hébergement.', 'duree' => 'Une à deux semaines selon la disponibilité du client'],
                ['titre' => 'Devis en euros', 'texte' => 'Le devis détaille ce qui est inclus, les délais et les points qui dépendent de tiers, comme la banque ou l’opérateur de paiement.', 'duree' => 'Quelques jours après le cadrage'],
                ['titre' => 'Réalisation par paliers', 'texte' => 'Chaque palier est montré sur un site de test ; le client valide ou corrige avant la suite. Un site vitrine prend de 1 à 3 semaines, une application sur mesure de 1 à 3 mois.', 'duree' => '1 semaine à 3 mois'],
                ['titre' => 'Formation et suivi', 'texte' => 'Les équipes sont formées en visioconférence sur l’outil livré, puis un suivi couvre les premières semaines d’usage.', 'duree' => 'Premières semaines après la mise en ligne'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet pour une entreprise de São Tomé-et-Príncipe ?',
            'paragraphes' => [
                'Le prix d’un projet n’est pas affiché : il est établi sur devis, en euros, après le cadrage. La monnaie du devis ne bouge pas avec le cours de la dobra, puisque celle-ci est arrimée à l’euro depuis 2010 selon le guide commercial du département du Commerce des États-Unis, au taux de 24,5 dobras pour 1 euro que la banque centrale affichait encore le 6 octobre 2026. Une entreprise qui compte en dobras convertit donc son budget avec une seule opération, sans marge de change à prévoir.',
                'Ce qui fait varier le prix tient moins au pays qu’à la nature du projet. Les délais indicatifs de Richard sont de 1 à 3 semaines pour un site vitrine et de 1 à 3 mois pour une application sur mesure ; le reste dépend de l’étendue du périmètre, du nombre de personnes à former et de la qualité des données à reprendre. Quelques points sont propres à l’archipel et se discutent au cadrage plutôt qu’à la signature.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels éléments du projet font varier le devis dans l’archipel ?',
            'legende' => 'Facteurs de prix propres à São Tomé-et-Príncipe, avec la façon dont chacun se traite',
            'entetes' => ['Facteur', 'Effet sur le devis', 'Comment il se traite'],
            'lignes'  => [
                ['Moyen de paiement du client final', 'Un connecteur de paiement en ligne ajoute du temps de développement et de test', 'Commencer par le virement avec référence, ajouter la carte ou le portefeuille mobile quand le prestataire a confirmé ses conditions'],
                ['Hébergement des données', 'Un hébergement hors de l’archipel demande une analyse des articles 19 et 20 de la loi n° 03/2016', 'Choisir l’hébergement au cadrage et prévoir la notification à l’ANPDP dans le calendrier'],
                ['Contenus en portugais', 'Plus de pages à relire et à valider, sans que Richard traduise lui-même', 'Le client fournit les textes ; la structure de la page prévoit leur longueur'],
                ['Utilisation sur téléphone', 'Un site pensé d’abord pour le mobile demande des essais sur des modèles courants', 'Pages légères, formulaires courts et essais sur des téléphones d’entrée de gamme'],
                ['Reprise des données existantes', 'Des fichiers épars augmentent le temps de nettoyage avant l’import', 'Un inventaire des fichiers au cadrage, puis une reprise par lots vérifiée avec le client'],
                ['Formation des équipes', 'Le nombre de séances dépend du nombre d’utilisateurs et de leurs métiers', 'Séances en visioconférence, regroupées par métier'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter quand on lance un projet numérique à São Tomé-et-Príncipe ?',
            'intro' => 'Ces erreurs reviennent dans les projets d’un petit marché insulaire, dont les infrastructures de paiement et la législation sur les données obéissent à leurs règles propres.',
            'items' => [
                ['titre' => 'Prévoir un paiement mobile sans en vérifier le cadre', 'texte' => 'Les opérateurs de paiement sont agréés par la banque centrale selon la loi n° 17/2018. Un connecteur construit sur une promesse commerciale qui n’a pas reçu de confirmation écrite coûte du temps, et un site de vente qui l’affiche sans qu’il fonctionne fait fuir les acheteurs.'],
                ['titre' => 'Oublier la notification à l’ANPDP', 'texte' => 'L’article 21 de la loi n° 03/2016 demande une notification écrite au plus tard huit jours avant le début du traitement. Un site mis en ligne un vendredi avec un formulaire de contact actif, sans cette démarche, démarre en infraction.'],
                ['titre' => 'Héberger sans lire les règles de transfert', 'texte' => 'Un serveur en Europe ou en Amérique du Nord est courant, mais l’article 19 réserve à l’ANPDP le jugement sur le niveau de protection du pays d’accueil. Le consentement du visiteur et la mention du transfert dans la politique de confidentialité se préparent avant la mise en ligne.'],
                ['titre' => 'Concevoir pour un ordinateur de bureau', 'texte' => 'Seuls 12,5 % des ménages ordinaires ayant répondu déclaraient un ordinateur au recensement de 2024. Un tableau à douze colonnes ou un formulaire en six étapes a peu de chances d’être rempli par l’acheteur santoméen sur son téléphone.'],
                ['titre' => 'Oublier l’île de Príncipe', 'texte' => 'Elle abrite 4,7 % des résidents. Une livraison, une réservation ou une formation qui ne vaut que pour São Tomé laisse hors du service une région entière ; la question de la logistique se pose avant de promettre une couverture nationale.'],
                ['titre' => 'Appliquer d’office le SYSCOHADA', 'texte' => 'Le pays n’est pas l’un des dix-sept États membres de l’OHADA. Un paquet de localisation comptable installé par réflexe fausse le plan de comptes ; mieux vaut en discuter avec le comptable de la société avant de saisir quoi que ce soit.'],
                ['titre' => 'Rédiger uniquement en français', 'texte' => 'Le portugais est la langue officielle et se parle presque partout : 98,4 % des résidents de 1 an et plus au recensement de 2012. Les pages destinées aux clients locaux se prévoient dans cette langue, avec des textes fournis par le client.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet santoméen à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard peut accompagner à distance les entreprises à São Tomé-et-Príncipe. Il compte plus de six ans d’expérience et un diplôme d’EPITECH obtenu en 2022 ; on lui doit plus de 50 projets livrés, plus de 100 clients et plus de 200 personnes formées. Il a créé Wapy, son assistant WhatsApp à IA, et co-fonde Audyxa.',
                'Les réalisations publiées sur la <a href="/realisations/">page des réalisations</a> montrent la nature des livrables. Laura Cosmetics, par exemple, associe une boutique à deux devises, deux zones de livraison et un back-office complet : projet réalisé en sous-traitance pour Digital Développement ; OBA TV est une web TV avec un abonnement premium payé par mobile money ; GC Pro Consulting est un site bilingue de plus de cent pages avec inscriptions en ligne. Le client santoméen y retrouve des briques voisines des siennes : boutique, abonnement, formulaire, back-office.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Parlons de votre projet à São Tomé-et-Príncipe',
            'texte'  => 'Décrivez votre besoin en quelques lignes, par message ou par courriel : Richard répond sous 24 heures avec une première recommandation, sans engagement, et le devis est établi en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Peut-on payer par carte bancaire sur un site santoméen ?', 'r' => 'La plateforme nationale confiée à SIBS en 2021 traite Dobra24 et se connecte aux réseaux Visa et Mastercard, ce qui ouvre le paiement par carte aux voyageurs étrangers. Pour l’encaissement en ligne, il faut en plus un prestataire de paiement que la banque du commerçant accepte : Richard vérifie ce point au cadrage et commence par un virement avec référence si la carte n’est pas encore possible.'],
        ['q' => 'Faut-il déclarer un site à l’ANPDP avant de le mettre en ligne ?', 'r' => 'Si le site collecte des données personnelles, l’article 21 de la loi n° 03/2016 exige une notification écrite à l’Agence nationale de protection des données personnelles huit jours au plus tard avant le début du traitement. Les données sensibles, de crédit ou d’interconnexion de fichiers demandent une autorisation préalable. Un formulaire de contact avec nom et téléphone entre dans le champ de la notification.'],
        ['q' => 'Peut-on héberger les données d’un site santoméen en Europe ?', 'r' => 'Oui, à condition de respecter les articles 19 et 20 de la loi n° 03/2016 : le transfert hors du territoire exige un niveau de protection adéquat, apprécié par l’ANPDP, ou l’une des dérogations prévues, comme le consentement non ambigu de la personne. Richard prévoit le consentement dans le formulaire et la mention du transfert dans la politique de confidentialité.'],
        ['q' => 'Le devis est-il en dobras ou en euros ?', 'r' => 'En euros. La dobra étant arrimée à l’euro, avec 24,50 dobras pour 1 euro au cours affiché par la banque centrale le 6 octobre 2026, le montant se convertit simplement. Le règlement se fait par virement, par carte bancaire ou par PayPal.'],
        ['q' => 'Quel est le décalage horaire entre São Tomé et Cotonou ?', 'r' => 'Une heure. L’archipel est à UTC+0 toute l’année depuis le 1er janvier 2019, alors que Cotonou est à UTC+1 : quand il est 10 h à São Tomé, il est 11 h à Cotonou. Richard étant joignable de 7 h à 20 h à Cotonou, la plage correspond à 6 h à 19 h côté São Tomé.'],
        ['q' => 'Le SYSCOHADA s’applique-t-il aux entreprises santoméennes ?', 'r' => 'Le pays ne figure pas dans la liste des dix-sept États membres de l’OHADA publiée par l’organisation. Un déploiement d’Odoo ou de Dolibarr ne reçoit donc pas le plan comptable SYSCOHADA par défaut : le comptable du client choisit son plan de comptes avant que la moindre écriture soit saisie.'],
        ['q' => 'Quelle est la TVA applicable à une facture numérique ?', 'r' => 'Le pays applique l’IVA depuis le 1er juin 2023, au taux normal de 15 %, avec un taux de 7,5 % sur certains produits de base. Pour les services rendus par un prestataire non résident à une entreprise assujettie, le cabinet VdA indiquait en 2019 que l’impôt est dû par l’acquéreur. Le traitement exact se confirme avec la Direction des impôts et le comptable du client.'],
        ['q' => 'Faut-il parler portugais pour travailler avec Richard ?', 'r' => 'Non. Richard travaille en français, avec l’anglais en renfort. Les textes en portugais destinés au public santoméen sont fournis par le client ou son traducteur, et s’intègrent ensuite au site ou à l’application. Richard ne propose pas de traduction.'],
        ['q' => 'Combien de temps faut-il pour réaliser un site ou une application ?', 'r' => 'Comptez de 1 à 3 semaines pour un site vitrine et de 1 à 3 mois pour une application sur mesure. Le délai exact est fixé au devis, après le cadrage, et dépend surtout du nombre de pages ou de fonctions et de la rapidité avec laquelle le client fournit ses contenus et valide chaque palier.'],
        ['q' => 'Quel est le moyen le plus fiable pour recevoir un paiement en ligne dans l’archipel ?', 'r' => 'Pour une vente entre entreprises, le virement avec une référence unique par commande reste le plus sûr : cinq banques étaient actives fin 2020 selon l’UNCDF, et le rapprochement se fait automatiquement dans Odoo ou Dolibarr. La carte convient aux clients étrangers ; le portefeuille mobile se décide après vérification de l’offre disponible auprès de la banque centrale.'],
    ],

    'sources' => [
        ['titre' => 'Institut national de la statistique, rapport des résultats du Ve recensement général de la population et de l’habitat 2024', 'url' => 'https://www.ine.st/phocadownload/userupload/Documentos/Recenseamentos/2024/Resultado_VRGPH%202024.pdf', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, rapport Digital 2026 sur l’archipel santoméen', 'url' => 'https://datareportal.com/reports/digital-2026-sao-tome-and-principe', 'date' => '2026-10-06'],
        ['titre' => 'UNCDF, évaluation de l’infrastructure de paiement de São Tomé-et-Príncipe (données jusqu’en septembre 2023)', 'url' => 'https://migrantmoney.uncdf.org/wp-content/uploads/2025/05/Payment-Infrastructure-Assessment-SaoTome-April2025.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Banque centrale de São Tomé-et-Príncipe, page d’accueil et cours de la dobra', 'url' => 'https://www.bcstp.st/', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 03/2016 sur la protection des données personnelles, texte publié par l’AFAPDP', 'url' => 'https://www.afapdp.org/wp-content/uploads/2022/02/Loi-de-Protection-des-Donnes-Personnlles-03_2016.pdf', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, les États membres de l’OHADA', 'url' => 'https://www.ohada.org/les-etats-membres-de-lohada/', 'date' => '2026-10-06'],
        ['titre' => 'Miranda, entrée en vigueur du code de l’IVA à São Tomé-et-Príncipe, 1er juin 2023 (loi n° 02/2023)', 'url' => 'https://mirandalawfirm.com/en/insights-knowledge/publications/alerts/vat-code-enters-into-force-in-stp-2', 'date' => '2026-10-06'],
        ['titre' => 'VdA Legal Partners, flash d’information sur l’IVA à São Tomé-et-Príncipe, novembre 2019', 'url' => 'https://www.vda.pt/xms/files/05_Publicacoes/2019/Flashes_Newsletters/Flash_VdA_Legal_Partners_-_Sao_Tome_Principe_-_Imposto_sobre_o_Valor_Acrescentado.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Forbes Portugal, SIBS assure la nouvelle plateforme de paiements, 29 avril 2021', 'url' => 'https://www.forbespt.com/sibs-assegura-nova-plataforma-de-pagamentos-em-sao-tome-e-principe', 'date' => '2026-10-06'],
        ['titre' => 'Forbes Afrique lusophone, lancement du Dobra Digital, 17 mars 2022', 'url' => 'https://forbesafricalusofona.com/sao-tome-e-principe-reforca-sistema-de-pagamento-com-lancamento-do-dobra-digital/', 'date' => '2026-10-06'],
        ['titre' => 'Département du Commerce des États-Unis, guide commercial : vue d’ensemble du marché de São Tomé-et-Príncipe (2022)', 'url' => 'https://www.trade.gov/country-commercial-guides/sao-tome-and-principe-market-overview', 'date' => '2026-10-06'],
        ['titre' => 'AICEP, profil de marché de São Tomé-et-Príncipe, mis à jour en mai 2025', 'url' => 'https://portugalglobal.pt/noticias/2026/julho/perfil-de-mercado-sao-tome-e-principe/', 'date' => '2026-10-06'],
        ['titre' => 'Base de fuseaux horaires de l’IANA, Afrique (Africa/Sao_Tome)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'UIT, indicatifs téléphoniques nationaux (annexe au bulletin d’exploitation n° 982)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Constitution de São Tomé-et-Príncipe de 2003, article 5 (capitale)', 'url' => 'https://www.constituteproject.org/constitution/Sao_Tome_and_Principe_2003', 'date' => '2026-10-06'],
        ['titre' => 'Institut national de la statistique, résultats nationaux du IVe recensement de 2012 (langues parlées)', 'url' => 'https://www.ine.st/phocadownload/userupload/Documentos/Recenseamentos/2012/Dados%20Distritais%20e%20Nacional%20Recenseamento%202012/Resultados%20Nacionais%20do%20IV%20RGPH%202012.pdf', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['systeme-de-reservation-en-ligne', 'application-web-sur-mesure', 'integration-odoo', 'integration-dolibarr', 'site-e-commerce', 'agents-ia-chatbot-whatsapp', 'site-vitrine-professionnel', 'application-mobile-android-ios'],
        'formations'  => ['digitaliser-son-entreprise', 'ia-en-entreprise', 'whatsapp-business', 'visibilite-google', 'odoo-utilisateurs'],
        'comparatifs' => ['odoo-vs-dolibarr'],
        'metiers'     => ['hotellerie-restauration', 'agro-industrie', 'banques-microfinance'],
    ],
];
