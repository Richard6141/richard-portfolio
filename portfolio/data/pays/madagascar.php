<?php
// ============================================================
// data/pays/madagascar.php · Page pays Madagascar (vague 1D, tranche T4).
// Pays hors OHADA : clé 'ohada' absente. Pays hors de la liste des pays travaillés :
// « peut accompagner à distance ». Devis en euros, aucun montant chiffré.
// Faits vérifiés le 06/10/2026 : DataReportal, ARTEC, DGI (impots.mg), décret
// n° 2025-738, loi n° 2014-038, CMIL, FMFP, Banque centrale (via la presse).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Des outils numériques adaptés aux entreprises de Madagascar : facture électronique, mobile money, données personnelles et équipes formées, depuis Cotonou",
    'title'   => "Digitalisation à Madagascar, à distance | Richard SALANON",
    'meta'    => "Richard SALANON accompagne à distance les entreprises à Madagascar : sites, applications, Odoo, automatisation, IA. Devis en euros, réponse sous 24 heures.",
    'en_bref' => "Richard SALANON, depuis Cotonou, peut accompagner à distance les entreprises à Madagascar : site, application, ERP Odoo ou Dolibarr, automatisations, intégration de l'IA et formation des équipes. Il tient compte du mobile money (MVola, Orange Money, Airtel Money), du décret de 2025 sur la facture électronique et de la loi de 2014 sur les données personnelles. Le premier échange et le devis se font en français, en euros, sous 24 heures.",
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Antananarivo', 'source' => 'https://www.constituteproject.org/constitution/Madagascar_2010', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Antananarivo (1,27 million)', 'Toamasina (326 000)', 'Antsirabe (246 000)'], 'source' => 'https://export.agence-adocc.com/fr/fiches-pays/madagascar/introduction', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'UTC+3, soit 2 heures de plus que Cotonou (UTC+1)', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+261', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => 'Malagasy (langue nationale et officielle) et français (langue officielle), selon la Constitution de 2010, dont le pouvoir militaire a annoncé la suspension le 14 octobre 2025', 'source' => 'https://www.constituteproject.org/constitution/Madagascar_2010', 'date' => '2026-10-06'],
        'population' => ['v' => '32,9 millions d\'habitants en octobre 2025', 'source' => 'https://datareportal.com/reports/digital-2026-madagascar', 'date' => '2026-10-06'],
        'internet' => ['v' => '6,71 millions d\'utilisateurs en octobre 2025, soit 20,4 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-madagascar', 'date' => '2026-10-06'],
        'mobile' => ['v' => '21,8 millions de connexions cellulaires fin 2025 (66,2 % de la population), dont 76,3 % en 3G, 4G ou 5G', 'source' => 'https://datareportal.com/reports/digital-2026-madagascar', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Plus de 160 000 agents de distribution recensés en 2024 pour les trois services de mobile money', 'source' => 'https://financialafrik.com/2024/11/21/projet-de-taxation-du-mobile-money-a-madagascar-une-menace-multiple-pour-le-developpement-du-pays', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Nickel', 'girofle', 'vêtements', 'vanille', 'minerai de titane (cinquième exportation en 2025)'], 'source' => 'https://newsmada.com/?p=189574', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Ariary (MGA). Un euro valait 4 810,95 ariary le 30 juin 2026, contre 5 309,31 ariary au début de l\'année.', 'source' => 'https://newsmada.com/?p=190471', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['MVola', 'Orange Money', 'Airtel Money'], 'source' => 'https://financialafrik.com/2024/11/21/projet-de-taxation-du-mobile-money-a-madagascar-une-menace-multiple-pour-le-developpement-du-pays', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Loi n° 2014-038 sur la protection des données à caractère personnel, promulguée le 9 janvier 2015', 'source' => 'https://www.artec.mg/lois/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Commission malagasy de l\'informatique et des libertés (CMIL) : sept membres ont prêté serment le 4 août 2025', 'source' => 'https://newsmada.com/?p=143359', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Décret n° 2025-738 du 2 juillet 2025 : facture électronique obligatoire, déployée par taille d\'entreprise sur deux ans après la plateforme', 'source' => 'https://portal.impots.mg/textes/textes/2025-07-25--N-738-2025-PR-Ref-YVB20M-LN9QE3.pdf', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Taux normal de 20 %, 0 % à l\'export ; assujettissement dès 400 millions d\'ariary de chiffre d\'affaires annuel hors taxes', 'source' => 'https://copeps.fr/actualites/taux-de-tva-madagascar/', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 2014-024 sur les transactions électroniques, complétée par la loi n° 2014-025 sur la signature électronique', 'source' => 'https://agoramada.s3.dualstack.eu-west-3.amazonaws.com/original/1X/044fdd764ce11bb7e1f1862055553122fe06b8df.pdf', 'date' => '2026-10-06'],
        'financement' => ['v' => 'FMFP, créé par la loi 2015-40 : contribution de 1 % de la masse salariale brute plafonnée des entreprises formelles', 'source' => 'https://www.afd.fr/fr/carte-des-projets/fonds-malgache-de-financement-de-la-formation-professionnelle-fmfp', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '+2 heures toute l\'année'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que révèle l'écart entre téléphones et internautes à Madagascar pour un projet numérique ?",
            'paragraphes' => [
                "Dans son étude <a href=\"https://datareportal.com/reports/digital-2026-madagascar\">Digital 2026</a>, DataReportal dénombre pour Madagascar 32,9 millions d'habitants en octobre 2025 et 6,71 millions d'internautes, soit 20,4 % de la population. Les connexions cellulaires, elles, atteignaient 21,8 millions, soit 66,2 % de la population, et 76,3 % d'entre elles passaient par un réseau 3G, 4G ou 5G. L'écart entre les deux séries décrit le pays : le téléphone est l'outil de presque tous les clients, l'accès régulier à internet reste celui d'un habitant sur cinq. Un site ou une application qui suppose un ordinateur et une connexion fixe passe à côté de la plupart de ses clients.",
                "Les réseaux sociaux confirment ce profil. DataReportal compte 4,15 millions d'identités Facebook en octobre 2025, 1,30 million sur Messenger et 610 000 membres sur LinkedIn. Pour une entreprise qui vend aux particuliers, la page Facebook et la messagerie sont donc la vitrine réelle, et le site doit s'y raccorder : fiche produit partageable, bouton de contact, échange sur <a href=\"/services/integration-whatsapp\">WhatsApp</a>. Pour une entreprise qui vend à d'autres entreprises, LinkedIn atteint un public beaucoup plus étroit, et un site vitrine soigné, référencé dans Google, pèse davantage dans la décision d'un acheteur.",
                "La couverture progresse. Le site de l'<a href=\"https://www.artec.mg/\">ARTEC</a>, le régulateur des télécoms, affiche pour 2024 une couverture 4G de 80 % de la population malgache et une couverture 3G de 98 %. DataReportal mesure un débit fixe médian de 31,95 Mbit/s en août 2025, en hausse de 16,6 % sur un an. Le réseau ne limite donc plus tant la taille des pages que la régularité du service : un projet bien conçu reste léger, charge vite sur un forfait de données limité et supporte une coupure.",
                "L'électricité pèse autant que le réseau. Fin juin 2025, la Direction générale des impôts a reporté du 30 juin au 31 juillet l'échéance de la déclaration de droit de communication, en réponse aux demandes des usagers après des coupures d'électricité à répétition, comme l'indique son <a href=\"https://www.impots.mg/accueil\">site</a>. En février 2026, elle a aussi accordé des délais aux contribuables de la région Atsinanana après le passage du cyclone Gezani. Ces deux communiqués fixent le cahier des charges d'un projet à Madagascar : caisse et facturation qui continuent hors connexion, sauvegardes hors du bureau, et une procédure écrite pour reprendre après une panne.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => "Quels repères retenir à Madagascar avant de cadrer un projet ?",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels moyens de paiement intégrer à Madagascar ?",
            'paragraphes' => [
                "Trois services de mobile money se partagent le marché : MVola, Orange Money et Airtel Money, selon l'analyse de <a href=\"https://financialafrik.com/2024/11/21/projet-de-taxation-du-mobile-money-a-madagascar-une-menace-multiple-pour-le-developpement-du-pays\">Financial Afrik</a> de novembre 2024, qui recense aussi plus de 160 000 agents de distribution. L'administration fiscale s'en sert elle-même : le service Hetraphone, annoncé en janvier 2020, permet de déclarer et de payer ses impôts depuis un compte de mobile money, grâce à une convention signée avec les trois opérateurs, rapportée par <a href=\"https://lexpress.mg/30/01/2020/digitalisation-limpot-payable-via-mobile-money/\">L'Express de Madagascar</a>. Un commerçant qui n'accepte pas ces trois portefeuilles se prive d'une grande partie de ses clients.",
                "Le paiement en ligne passe par les interfaces de chaque opérateur. Orange Money Web Payment figure, selon le <a href=\"https://developer.orange.com/apis/om-webpay/\">portail développeurs d'Orange</a>, parmi les pays couverts : le client génère un code à usage unique par USSD, puis le saisit sur le site marchand, et le commerçant doit être un point officiel Orange Money en règle avec les contrôles d'identité. Orange a aussi lancé en mars 2025 l'application Orange Money Pro, relevée par <a href=\"https://www.wearetech.africa/fr/fils/solutions/madagascar-lancement-d-orange-money-pro-pour-les-transactions-de-marchands-et-distributeurs\">We Are Tech Africa</a>, avec des liens de paiement et des codes QR pour les petits commerçants.",
                "Pour MVola comme pour Airtel Money, la documentation d'accès marchand et les accès à l'interface de paiement se demandent auprès de l'opérateur. Les frais et les délais de règlement varient selon le contrat du marchand et ne figurent pas dans une grille publique : ils se négocient à l'ouverture du compte marchand, et ils se reportent dans le cahier des charges plutôt que d'être promis d'avance. Chaque opérateur ayant sa propre interface, une couche d'intégration commune évite de refaire le travail à chaque ajout d'un moyen de paiement.",
                "Cette couche est le vrai travail. Elle reçoit la commande, interroge l'opérateur choisi, attend la confirmation, puis rapproche chaque paiement de sa facture, même quand le client ferme son navigateur au milieu de l'opération. Un article de <a href=\"https://www.lexpress.mg/2024/07/consommation-le-commerce-en-ligne.html\">L'Express de Madagascar</a> (juillet 2024) rappelle que l'espèce domine encore et que les solutions électroniques se multiplient sans interopérer. Le paiement à la livraison et le virement restent donc des options à prévoir, avec un suivi des encaissements dans l'<a href=\"/services/integration-odoo\">ERP</a> ou le tableau de bord de l'entreprise.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que prévoir pour chaque moyen de paiement ?",
            'legende' => "Repères tirés de la documentation d'Orange, de l'analyse de Financial Afrik et de la presse malgache ; la liste exacte des moyens acceptés se fixe au cadrage, avec le contrat marchand de chaque opérateur.",
            'entetes' => ['Moyen', 'Pour qui', 'Ce que Richard met en place', 'Point à vérifier'],
            'lignes'  => [
                ['MVola', 'Clients du service MVola, l\'un des trois services de mobile money du pays','Paiement depuis le site ou l\'application, confirmation reçue par l\'opérateur, rapprochement avec la facture', 'Documentation d\'API et contrat marchand à demander à l\'opérateur'],
                ['Orange Money Web Payment', 'Boutiques en ligne, services payants', 'Code à usage unique saisi sur le site, état de la transaction suivi jusqu\'à la confirmation', 'Marchand enregistré et conforme aux contrôles d\'identité'],
                ['Orange Money Pro', 'Petits commerçants, distributeurs', 'Liens de paiement et codes QR envoyés par WhatsApp, relevé rapproché des ventes', 'Application disponible sur Android, selon la presse de mars 2025'],
                ['Airtel Money', 'Clients du réseau Airtel', 'Même couche d\'intégration que les deux autres', 'Documentation marchand à demander à l\'opérateur'],
                ['Virement bancaire', 'Clients entreprises, factures élevées', 'Référence unique par facture, import du relevé et pointage', 'Délai de réception et jours non ouvrés'],
                ['Espèces à la livraison', 'Boutiques en ligne, livraison urbaine', 'Statut « à encaisser », encaissement saisi par le livreur, écart suivi par jour', 'Remise des fonds et signature du livreur'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que prévoit la loi sur les données personnelles, et la CMIL est-elle en place ?",
            'paragraphes' => [
                "La loi n° 2014-038 sur la protection des données à caractère personnel, promulguée le 9 janvier 2015, s'applique à tout traitement opéré en tout ou partie sur le territoire malagasy (article 5). Son article 43 impose de déclarer à la Commission malagasy de l'informatique et des libertés, la CMIL, les traitements informatisés des organismes publics ou privés, avant leur mise en œuvre, par voie électronique si on le souhaite. L'article 45 précise que la déclaration du secteur privé comporte l'engagement de respecter la loi et que le récépissé est délivré sans délai, sans pour autant décharger le déclarant de sa responsabilité. L'article 46 réserve une autorisation préalable aux traitements à risque particulier.",
                "La CMIL existe-t-elle vraiment ? Longtemps, la loi est restée sans commission en état de marche : en février 2025, DLA Piper relevait encore son application incomplète, faute de décret d'application et de nominations. Le décret n° 2023-1541 du 6 décembre 2023 avait pourtant institué la commission. Sept membres ont prêté serment devant la Cour suprême le 4 août 2025, selon <a href=\"https://newsmada.com/?p=143359\">Newsmada</a>. En février 2026, <a href=\"https://newsmada.com/?p=169904\">un autre article</a> la décrit en phase d'opérationnalisation renforcée, avec des instances en cours de structuration, plusieurs dizaines de dossiers déjà reçus, et des pouvoirs d'avertissement, de sanction et de saisie d'une base de données entière.",
                "Pour un prestataire comme Richard, le cadre tient en quelques gestes. Le client reste responsable du traitement, et l'article 16 veut que le sous-traitant n'agisse que sur ses instructions, dans un contrat qui fixe les obligations de sécurité et de confidentialité. Richard peut donc rédiger, avec le client, une note de traitement : quelles données, pour quoi faire, où elles sont hébergées, qui y accède. Un site avec formulaire, une boutique ou un ERP qui stocke des clients entrent tous dans le champ de la loi.",
                "La sanction est réelle sur le papier. L'article 59 plafonne la sanction pécuniaire à 5 % du chiffre d'affaires hors taxes du dernier exercice clos, et l'article 62 punit de six mois à deux ans d'emprisonnement et d'une amende de 200 000 à 2 000 000 d'ariary le défaut de formalités préalables, y compris par négligence. Les formulaires exacts et la procédure de la CMIL évoluent encore : le projet commence donc par un contact avec la commission ou avec un juriste local, et le planning peut réserver le temps de la déclaration.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un hébergement hors de Madagascar est-il permis pour les données de vos clients ?",
            'paragraphes' => [
                "L'article 20 de la loi de 2014 pose la règle des transferts : le responsable ne peut envoyer des données personnelles vers un État étranger que si celui-ci dispose d'une législation assurant une protection similaire. À défaut, la CMIL peut autoriser le transfert quand le responsable offre des garanties suffisantes, qui peuvent résulter de clauses contractuelles appropriées ou de règles internes. La loi prévoit aussi des exceptions, notamment le consentement indubitable de la personne dûment informée, ou la nécessité d'exécuter un contrat conclu avec elle. Le destinataire ne peut pas retransférer ensuite les données sans accord.",
                "Concrètement, ce texte touche trois situations. Un logiciel en ligne hébergé en Europe ou ailleurs, comme Odoo Online, envoie les données hors du pays. Les sauvegardes d'un serveur d'entreprise stockées chez un hébergeur étranger aussi. Et l'accès à distance d'un prestataire installé à Cotonou, ce qui est le cas de Richard, relève de la même logique. L'article 20 ne pose pas d'interdiction générale de sortie des données : la question est la justification du transfert et le contrat qui l'encadre.",
                "Richard décrit donc dans le cadrage les flux de données entre l'entreprise, son hébergeur et lui-même, choisit l'hébergement selon la sensibilité des fichiers, et fait signer les clauses de confidentialité adaptées. Quand les données concernent la santé, la situation de famille ou d'autres catégories sensibles, la voie la plus prudente est un serveur dans le pays ou chez un hébergeur dont le contrat est validé par la CMIL ou par un juriste. Il le dit avant de produire, pas après.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change la facture électronique obligatoire pour une entreprise malgache ?",
            'paragraphes' => [
                "Le décret n° 2025-738 du 2 juillet 2025 « portant opérationnalisation du système de facturation électronique » impose à tout contribuable tenu de délivrer des factures d'utiliser le système d'e-Facturation pour émettre et recevoir toutes ses factures, y compris celles qui sont exonérées de TVA ou hors de son champ. Selon son article 3, une facture émise ou reçue par un autre moyen n'est pas reconnue comme valide au titre de la législation fiscale et comptable. Le texte figure sur le <a href=\"https://portal.impots.mg/textes/\">portail des textes de la DGI</a>, comme le Code des impôts et le Code des procédures fiscales de 2026.",
                "Le calendrier dépend de la plateforme. L'article 21 prévoit une phase pilote après sa mise en place, puis une obligation au plus tard six mois après pour les grandes entreprises, un an pour les entreprises de taille intermédiaire et deux ans pour les petits contribuables et les micro-entreprises. Le <a href=\"https://www.impots.mg/\">site de la DGI</a> montre que le projet avance : le 30 mars 2026, elle a signé avec l'autorité fiscale du Rwanda un accord d'appui technique pour le système appelé Electronic Billing Machine, qui doit rester interopérable avec le système d'administration fiscale intégré, SAFI. Le décret ne fixe pas de date de lancement de la plateforme : elle est à confirmer auprès de la DGI avant de lancer le projet.",
                "Pour un développeur, l'article 12 est le plus utile. Le système accepte la création des factures sur le portail, mais aussi la transmission automatique depuis l'application de gestion ou l'ERP du contribuable après validation, depuis un terminal de point de vente connecté en temps réel, ou par une API. L'article 10 donne la priorité au format XML, avec le PDF pour la lecture, et l'article 12 prévoit une conservation de dix ans, ramenée à trois pour l'impôt synthétique. L'article 16 prévoit en plus l'homologation de systèmes d'e-Facturation de tiers : les logiciels devront être compatibles avec le référentiel que publiera l'administration.",
                "Le décret décrit aussi un lien avec la TVA : les données de l'e-Facturation alimentent un système « e-TVA » qui propose une déclaration pré-remplie, que l'assujetti vérifie et valide. Pour un projet, cela veut dire une chose simple : tout outil de facturation conçu pour Madagascar, qu'il s'agisse d'un <a href=\"/services/integration-odoo\">ERP</a>, d'une caisse ou d'une <a href=\"/services/application-web-sur-mesure\">application sur mesure</a>, doit numéroter, dater et conserver ses factures sous forme exploitable par une machine, et prévoir un point de raccordement par API le jour où la DGI publiera ses spécifications.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "TVA, comptabilité et commerce électronique : que vérifier avant de lancer ?",
            'paragraphes' => [
                "La TVA est au taux normal de 20 % et de 0 % à l'exportation, et s'impose dès 400 millions d'ariary de chiffre d'affaires annuel hors taxes, d'après le résumé de <a href=\"https://copeps.fr/actualites/taux-de-tva-madagascar/\">Copeps</a>. La loi de finances 2026 ouvre, d'après <a href=\"https://fr.allafrica.com/stories/202602200376.html\">AllAfrica</a>, une option aux contribuables réalisant entre 200 et 400 millions d'ariary : choisir l'impôt sur le revenu sans être assujettis à la TVA, à condition de présenter des états financiers certifiés. Un site marchand ou un ERP doit donc savoir si l'entreprise facture avec ou sans TVA, et ne pas figer le taux dans le code.",
                "La comptabilité n'est pas celle de l'OHADA : Madagascar est hors de cette organisation, et le décret de 2025 vise le Plan comptable général 2005, approuvé par un décret de février 2004. Le plan de comptes à paramétrer dans un logiciel est donc celui-là, et l'existence d'un paquet de localisation qui le reprend se vérifie dans chaque logiciel avant de le choisir. Un expert-comptable local valide le plan, les journaux et les taxes avant la première écriture.",
                "Pour la vente en ligne, la loi n° 2014-024 sur les transactions électroniques, accompagnée de la loi n° 2014-025 sur la signature électronique, fonde la validité des contrats et des écrits conclus par voie électronique. Richard en tire des réflexes de conception : conditions de vente accessibles avant la commande, confirmation écrite envoyée à l'acheteur, conservation des preuves de consentement. Le traitement de la TVA sur une prestation facturée depuis l'étranger, comme celle de Richard, se confirme auprès de la DGI ou de l'expert-comptable de l'entreprise avant la signature du devis.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels services pour les entreprises de Madagascar, selon leur besoin ?",
            'legende' => "Chaque ligne part d'un besoin propre aux entreprises malgaches ; le service renvoie à la page de détail, et le devis est toujours établi en euros.",
            'entetes' => ['Besoin typique à Madagascar', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre sur Facebook et Messenger, puis encaisser par MVola ou Orange Money', 'Boutique en ligne reliée aux portefeuilles mobiles', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Émettre des factures valides pour le système national d\'e-Facturation', 'ERP paramétré, numérotation et export en XML', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Se rendre visible auprès d\'acheteurs qui ne passent pas par LinkedIn', 'Site vitrine rapide et lisible sur mobile', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Répondre aux clients sur WhatsApp sans saisir deux fois', 'Messages automatiques, devis et rappels', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Relier la caisse, le stock et la comptabilité sans ressaisie', 'Connecteurs entre outils et automatisations', '<a href="/services/automatisation-ia">Automatisation</a>'],
                ['Brancher une API de paiement ou la future API de facturation', 'API REST et intégrations sur mesure', '<a href="/services/api-rest-integrations">API et intégrations</a>'],
                ['Piloter un processus que les logiciels du marché ne gèrent pas', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Confier le développement d\'un produit à une équipe de confiance', 'Développement externalisé depuis Cotonou', '<a href="/services/externalisation-developpement">Externalisation du développement</a>'],
                ['Former les équipes sur les outils et sur l\'IA', 'Sessions à distance, sur les données de l\'entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
                ['Décider par où commencer avec un budget limité', 'Diagnostic et feuille de route', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Quels projets numériques pour les exportateurs, la relation client et les mines de Madagascar ?",
            'items' => [
                ['secteur' => 'Externalisation et relation client', 'probleme' => "Le secteur emploie environ 45 000 personnes et dégage 115 millions de dollars de chiffre d'affaires, selon L'Express de Madagascar (décembre 2023), mais les tâches répétitives de suivi, de qualité et de reporting se font encore à la main.", 'solution' => "Tableaux de bord alimentés par les outils de téléphonie, résumés d'appels et de messages préparés avec l'IA, avec relecture humaine et sans données de clients dans des outils non validés. Les données appartenant en général aux donneurs d'ordre, le contrat de traitement se signe avec eux avant tout accès."],
                ['secteur' => 'Vêtements et exportation', 'probleme' => "Les vêtements figurent parmi les premières exportations de 2025, d'après Newsmada (131,3 millions de dollars). Les commandes, les lots et les expéditions passent souvent par des tableurs et des e-mails.", 'solution' => "ERP avec nomenclatures, ordres de fabrication et suivi par lot, factures conformes aux règles d'exportation et au futur format de l'e-Facturation, portail de suivi pour l'acheteur étranger. La TVA à 0 % à l'export doit être testée sur chaque type de facture."],
                ['secteur' => 'Vanille, girofle et produits de la terre', 'probleme' => "La vanille a exporté 128,3 millions de dollars en 2025 et le girofle 150,3 millions, selon la même source ; les collecteurs paient en espèces et le suivi des campagnes tient à des carnets.", 'solution' => "Application mobile de collecte, hors connexion, avec synchronisation à la reprise du réseau, enregistrement des pesées, avances et paiements par mobile money, et dossier de traçabilité par lot pour l'acheteur à l'export."],
                ['secteur' => 'Nickel, titane et mines', 'probleme' => "Le nickel reste le premier produit exporté en 2025 (440 millions de dollars) et le minerai de titane est cinquième ; les sous-traitants locaux de ces filières doivent prouver leurs achats, leurs stocks et leur conformité.", 'solution' => "Gestion des achats, des stocks de pièces et des bons de travail dans un ERP, factures à la norme nationale, droits d'accès par rôle et journal des modifications. Les accès à distance de Richard sont limités et tracés."],
                ['secteur' => 'Tourisme, hôtellerie et artisanat', 'probleme' => "Messenger compte 1,30 million d'utilisateurs : quand les demandes de chambres, de visites ou de commandes arrivent par là et par téléphone, personne n'a de vue d'ensemble sur les disponibilités ni sur les acomptes reçus.", 'solution' => "<a href=\"/services/systeme-de-reservation-en-ligne\">Système de réservation en ligne</a> avec calendrier partagé, acompte par lien de paiement Orange Money Pro ou paiement MVola, et rappels envoyés par WhatsApp. Une page Google Business bien tenue complète l'ensemble."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment former les équipes à Madagascar, et qui peut financer la formation ?",
            'paragraphes' => [
                "Les formations se font à distance, en visioconférence, sur les données et les logiciels de l'entreprise, par petits groupes. Les séances se calent sur l'horaire de Madagascar, de deux heures en avance sur Cotonou. Un module de deux heures n'a pas le même poids dans un bureau d'Antananarivo coupé par une panne de courant : la formation peut donc prévoir des supports téléchargeables, des enregistrements et des exercices à terminer hors séance. Parmi les fiches du catalogue, quatre peuvent servir de point de départ à une équipe malgache : <a href=\"/formations/odoo-utilisateurs\">Odoo pour vos équipes</a>, <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>, <a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a> et <a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>.",
                "Le Fonds malgache de formation professionnelle, le FMFP, est le premier organisme à interroger. L'<a href=\"https://www.afd.fr/fr/carte-des-projets/fonds-malgache-de-financement-de-la-formation-professionnelle-fmfp\">Agence française de développement</a> explique qu'il est né de la loi 2015-40 et qu'il est alimenté par une contribution obligatoire de 1 % de la masse salariale brute plafonnée des entreprises du secteur formel, plus une dotation de l'État. Selon <a href=\"https://newsmada.com/?p=78054\">Newsmada</a>, il a financé en cinq ans plus de 2 000 projets et plus de 77 000 salariés, pour 42 milliards d'ariary investis. Il vise les entreprises qui cotisent.",
                "Le site du <a href=\"https://www.fmfp.mg\">FMFP</a> décrit quatre guichets : la demande individuelle d'une entreprise, les projets interentreprises d'un même secteur, les projets interentreprises de secteurs différents, et un guichet d'équité pour le secteur informel. L'entreprise candidate doit être contributrice et appuyer sa demande sur des besoins de formation documentés. Richard peut préparer avec elle les pièces utiles : objectifs mesurables, durée, contenu, évaluation, budget et calendrier. L'éligibilité d'un organisme et d'un thème relève du FMFP : ses conditions du moment se vérifient avant de signer le devis.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se passe une collaboration avec Richard depuis Cotonou ?",
            'paragraphes' => [
                "Le décalage est de deux heures, toute l'année : Antananarivo est en UTC+3 et Cotonou en UTC+1. Richard est joignable de 7 h à 20 h, heure de Cotonou, soit de 9 h à 22 h à Antananarivo, ce qui couvre une journée de bureau malgache entière et laisse une plage en fin d'après-midi pour les échanges avec l'Europe. La réponse au premier message arrive sous 24 heures. Tout se fait à distance, par visioconférence, par message et par partage d'écran.",
                "La langue de travail est le français, langue officielle de Madagascar avec le malagasy d'après l'article 4 de la Constitution de 2010, dont le pouvoir militaire a annoncé la suspension le 14 octobre 2025, selon l'International IDEA ; un décret du 20 octobre 2025 continue pourtant de la viser, et une nouvelle Constitution est annoncée. Les contrats, les devis, la documentation et les formations sont rédigés en français. Si les utilisateurs de l'outil lisent plus volontiers le malagasy, les libellés des écrans doivent être fournis par le client ou validés par lui : l'interface peut être préparée pour que les libellés se remplacent sans toucher au code, mais Richard ne traduit pas ce qu'il ne parle pas.",
                "Le devis est établi en euros. Ce choix protège les deux parties : selon Newsmada, qui s'appuie sur les chiffres de la Banque centrale, l'ariary a gagné 9,3 % face à l'euro au premier semestre 2026, un euro passant de 5 309,31 à 4 810,95 ariary. Un prix fixé en ariary sur plusieurs mois aurait varié d'autant. Le règlement se fait par carte bancaire, PayPal ou virement international, et le client garde la maîtrise de son change : il convertit au moment de payer.",
                "Le suivi peut être rendu visible à l'entreprise : le projet peut prévoir un tableau d'avancement partagé, un point régulier en visioconférence, et une liste des décisions à prendre côté client, avec leur échéance. Les accès (hébergement, domaine, dépôt de code, comptes de paiement) peuvent être ouverts au nom de l'entreprise dès le premier jour, ce qui compte à distance : si Richard n'est plus disponible, le projet continue sans lui.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte un projet numérique à Madagascar, et qu'est-ce qui fait varier le prix ?",
            'intro' => "Le prix d'un projet malgache se fixe sur devis, en euros, après le cadrage. Les écarts viennent surtout de quatre choses propres au pays : le nombre de moyens de paiement à raccorder, les obligations fiscales et de données personnelles, la tolérance aux coupures, et la part de formation.",
            'items' => [
                ['offre' => 'Diagnostic et cadrage', 'prix' => 'Sur devis, en euros', 'inclus' => ['Les flux réels de l\'entreprise, de la commande à l\'encaissement', 'Moyens de paiement retenus et contrats opérateurs à ouvrir', 'Note sur les données personnelles et sur l\'e-Facturation', 'Plan par étapes et calendrier']],
                ['offre' => 'Site, boutique ou application', 'prix' => 'Sur devis, en euros', 'inclus' => ['Conception pour mobile et pour forfaits de données limités', 'Paiement par MVola, Orange Money ou Airtel Money selon le cahier des charges', 'Mentions légales, conditions de vente et information sur les données', 'Documentation et accès remis au client']],
                ['offre' => 'ERP et facturation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Paramétrage des ventes, achats, stock et facturation', 'Plan de comptes validé avec l\'expert-comptable local', 'Numérotation et conservation prêtes pour l\'e-Facturation', 'Reprise des données et formation des équipes']],
                ['offre' => 'Formation à distance', 'prix' => 'Sur devis, en euros', 'inclus' => ['Programme adapté aux postes et aux données de l\'entreprise', 'Supports téléchargeables pour les séances coupées', 'Dossier de demande de financement au FMFP', 'Suivi après les séances']],
            ],
            'variations' => [
                'Le nombre d\'opérateurs de mobile money à raccorder, chacun avec son contrat marchand et son interface.',
                'Le besoin de fonctionner hors connexion : caisse, collecte sur le terrain, synchronisation.',
                'Le raccordement à l\'API de facturation, dont les spécifications ne sont pas encore publiées.',
                'Le temps consacré aux formalités auprès de la CMIL et à la note sur les transferts de données.',
                'La reprise de données anciennes, souvent tenues sur papier ou dans des tableurs.',
                'Le nombre de personnes à former et la place du FMFP dans le financement.',
                'La traduction des écrans en malagasy, à la charge du client ou d\'un traducteur.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs reviennent dans les projets numériques à Madagascar ?",
            'intro' => "Ces erreurs viennent des particularités du pays : réseau, électricité, monnaie, fiscalité. Elles se corrigent au cadrage, rarement après.",
            'items' => [
                ['titre' => 'Supposer une connexion et un courant permanents', 'texte' => "La DGI a dû reporter une échéance de juin 2025 à cause de coupures d'électricité répétées et accorder des délais après un cyclone en février 2026. Une caisse, une collecte ou une facturation qui s'arrête avec le réseau coûte de l'argent le jour même."],
                ['titre' => "N'accepter qu'un seul portefeuille mobile", 'texte' => "MVola, Orange Money et Airtel Money coexistent. Un site qui n'en propose qu'un oblige une partie des clients à passer par un autre canal, souvent l'espèce, avec un rapprochement manuel à la clé."],
                ['titre' => 'Figer la TVA dans le code', 'texte' => "Le taux normal est de 20 %, le seuil d'assujettissement de 400 millions d'ariary, et la loi de finances 2026 ouvre une option entre 200 et 400 millions. Un outil qui ne peut pas changer ces paramètres se refait à chaque réforme."],
                ['titre' => "Attendre la date de la facture électronique", 'texte' => "Le décret du 2 juillet 2025 prévoit un déploiement sur deux ans après la mise en place de la plateforme, dont le décret ne fixe pas la date. Un outil conçu maintenant sans numérotation propre ni export structuré devra être repris."],
                ['titre' => 'Traiter la CMIL comme une formalité lointaine', 'texte' => "La commission a prêté serment en août 2025 et monte en puissance en 2026. Le défaut de formalités préalables est puni par l'article 62 de la loi de 2014, y compris par négligence."],
                ['titre' => "Copier un projet d'Afrique de l'Ouest", 'texte' => "Ni le franc CFA, ni l'OHADA, ni les agrégateurs de la zone ne s'appliquent ici : la monnaie est l'ariary, le plan comptable est le Plan comptable général 2005, et les paiements passent par trois opérateurs distincts."],
                ['titre' => 'Oublier le malagasy', 'texte' => "La Constitution de 2010 fait du malagasy la langue nationale et, avec le français, une langue officielle ; sa suspension a été annoncée en octobre 2025 et une nouvelle Constitution est en préparation. Une application destinée aux équipes de terrain ou aux clients finals gagne à prévoir des libellés dans les deux langues."],
                ['titre' => 'Laisser le change absorber la marge', 'texte' => "L'ariary a varié de 9,3 % face à l'euro en six mois en 2026. Un fournisseur ou un abonnement payé en devises pèse sur la trésorerie : on prévoit l'écart dans le budget."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier un projet à Madagascar à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut accompagner à distance les entreprises à Madagascar. Il apporte sa méthode et son expérience de projets menés à distance, avec plus de 6 ans d'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés. Ses missions pour des entreprises d'Afrique de l'Ouest et du Centre, d'Europe et du Canada lui ont appris à distinguer ce qui se transpose d'un marché à l'autre et ce qui exige un spécialiste local, comme la déclaration à la CMIL ou la validation du plan comptable.",
                "C'est pourquoi il commence par poser les questions qui relèvent du pays : quel opérateur de paiement, quelle facture, quelle déclaration à la CMIL, quel plan comptable, quel financement de formation. Pour ce qui sort du numérique, il travaille avec l'expert-comptable ou le juriste de l'entreprise plutôt que de se substituer à eux. Il ne présente jamais une obligation comme certaine quand un texte reste à publier, et le dit dans le devis.",
                "Parmi ses produits figure <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à IA, ce qui l'aide à penser les échanges clients sur mobile, et il co-fonde <a href=\"https://audyxa.com\">Audyxa</a>. Ses <a href=\"/realisations/\">réalisations</a> et son parcours sont présentés sur les pages <a href=\"/richard-salanon\">Richard SALANON</a> et <a href=\"/a-propos/\">À propos</a>, pour juger sur pièces avant de s'engager.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vous préparez un projet numérique à Madagascar ?",
            'texte'  => "Décrivez votre activité, vos moyens de paiement actuels, vos obligations de facturation et vos contraintes de connexion : vous recevez une réponse sous 24 heures, puis un cadrage et un devis, en euros.",
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il attendre une visite de Richard à Madagascar ?", 'r' => "Non, tout se fait à distance. Richard peut accompagner les entreprises à Madagascar par visioconférence et partage d'écran, depuis Cotonou : le cadrage, le développement, la formation et le suivi se font en ligne, avec un décalage de deux heures."],
        ['q' => "En quelle devise le devis est-il établi ?", 'r' => "En euros, sans montant affiché d'avance : le prix se fixe sur devis après le cadrage. Le règlement se fait par carte bancaire, PayPal ou virement international. L'ariary a varié de 9,3 % face à l'euro au premier semestre 2026 selon Newsmada, d'où l'intérêt d'un prix fixe en euros."],
        ['q' => "La facture électronique est-elle déjà obligatoire à Madagascar ?", 'r' => "Le décret n° 2025-738 du 2 juillet 2025 en pose l'obligation, mais elle s'applique par étapes : au plus tard six mois après la mise en place de la plateforme pour les grandes entreprises, un an pour les entreprises intermédiaires, deux ans pour les petits contribuables. Le décret ne fixe pas la date de la plateforme : elle est à confirmer auprès de la DGI avant de lancer le projet."],
        ['q' => "Faut-il déclarer son site ou son logiciel de gestion à la CMIL ?", 'r' => "La loi n° 2014-038 impose, par ses articles 43 et 45, de déclarer à la CMIL les traitements informatisés de données personnelles avant leur mise en œuvre, avec un récépissé délivré sans délai pour le secteur privé. La CMIL a prêté serment en août 2025 et monte en puissance en 2026 : les formulaires et la procédure se confirment auprès d'elle ou d'un juriste local."],
        ['q' => "Peut-on encaisser par MVola, Orange Money et Airtel Money sur un site ?", 'r' => "Oui, par les interfaces de chaque opérateur et selon le contrat marchand de l'entreprise. Orange publie Orange Money Web Payment, qui couvre Madagascar ; l'accès marchand de MVola et d'Airtel Money se demande à l'opérateur. Les frais et les délais dépendent du contrat et ne sont pas publics : ils sont fixés à l'ouverture du compte marchand."],
        ['q' => "Mon projet peut-il fonctionner pendant les coupures d'électricité ?", 'r' => "Oui, si on le prévoit au cadrage : caisse et collecte capables de travailler hors connexion, synchronisation à la reprise, sauvegardes hors du bureau et procédure de reprise écrite. La DGI a elle-même reporté une échéance en 2025 après des coupures répétées, et accordé des délais après un cyclone en 2026."],
        ['q' => "Un financement de la formation est-il possible avec le FMFP ?", 'r' => "Le Fonds malgache de formation professionnelle, financé par une contribution de 1 % de la masse salariale brute plafonnée des entreprises formelles, accepte les demandes d'entreprises contributrices, qui doivent documenter leurs besoins de formation. Richard aide à préparer le dossier ; l'éligibilité relève du fonds et se vérifie avant de signer."],
        ['q' => "Madagascar fait-il partie de l'OHADA, et quel plan comptable utiliser ?", 'r' => "Non, Madagascar n'est pas membre de l'OHADA, et le SYSCOHADA ne s'y applique pas. Le décret de 2025 vise le Plan comptable général 2005. L'expert-comptable de l'entreprise valide le plan de comptes, les journaux et les taxes avant la première écriture dans un logiciel."],
        ['q' => "Les données de mes clients peuvent-elles être hébergées hors de Madagascar ?", 'r' => "Oui, sous conditions. L'article 20 de la loi de 2014 n'autorise le transfert vers un État étranger que si sa législation assure une protection similaire ; à défaut, la CMIL peut l'autoriser avec des garanties, comme des clauses contractuelles, et des exceptions existent, dont le consentement. On documente les flux et on choisit l'hébergement selon la sensibilité des données."],
        ['q' => "Dans quelle langue se déroulent les échanges et les formations ?", 'r' => "En français, langue officielle de Madagascar avec le malagasy. Les documents, les devis et les formations sont rédigés en français. Les libellés des écrans en malagasy sont fournis ou validés par le client : l'interface est préparée pour les accueillir sans modifier le code."],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Madagascar (population, internautes, connexions mobiles, réseaux sociaux)', 'url' => 'https://datareportal.com/reports/digital-2026-madagascar', 'date' => '2026-10-06'],
        ['titre' => 'ARTEC, régulateur des télécommunications (page d\'accueil, couverture 3G et 4G en 2024)', 'url' => 'https://www.artec.mg/', 'date' => '2026-10-06'],
        ['titre' => 'ARTEC, textes juridiques : loi n° 2014-038 et loi n° 2014-006', 'url' => 'https://www.artec.mg/lois/', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2014-038 sur la protection des données à caractère personnel (texte intégral, articles 5, 16, 20, 43 à 46, 59, 62)', 'url' => 'https://www.assemblee-nationale.mg/wp-content/uploads/2020/11/Loi-n%C2%B02014-038-sur-la-protection-des-donn%C3%A9es-%C3%A0-Kre-personnel.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Newsmada, CMIL : prestation de serment des nouveaux membres (4 août 2025)', 'url' => 'https://newsmada.com/?p=143359', 'date' => '2026-10-06'],
        ['titre' => 'Newsmada, la CMIL renforce ses actions (février 2026)', 'url' => 'https://newsmada.com/?p=169904', 'date' => '2026-10-06'],
        ['titre' => 'DLA Piper, protection des données à Madagascar (état en février 2025)', 'url' => 'https://www.dlapiperdataprotection.com/?c=MG&t=law', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale des impôts de Madagascar (communiqués, SAFI, accord EBM avec le Rwanda du 30 mars 2026)', 'url' => 'https://www.impots.mg/', 'date' => '2026-10-06'],
        ['titre' => 'Décret n° 2025-738 du 2 juillet 2025 portant opérationnalisation de l\'e-Facturation', 'url' => 'https://portal.impots.mg/textes/textes/2025-07-25--N-738-2025-PR-Ref-YVB20M-LN9QE3.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Copeps, taux de TVA à Madagascar (taux, seuil de 400 millions d\'ariary)', 'url' => 'https://copeps.fr/actualites/taux-de-tva-madagascar/', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, loi de finances 2026 : mesures présentées aux opérateurs', 'url' => 'https://fr.allafrica.com/stories/202602200376.html', 'date' => '2026-10-06'],
        ['titre' => 'Fiche technique sur l\'encadrement de l\'e-commerce à Madagascar (lois n° 2014-024 et n° 2014-025 du 10 décembre 2014)', 'url' => 'https://agoramada.s3.dualstack.eu-west-3.amazonaws.com/original/1X/044fdd764ce11bb7e1f1862055553122fe06b8df.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Financial Afrik, le mobile money à Madagascar (novembre 2024)', 'url' => 'https://financialafrik.com/2024/11/21/projet-de-taxation-du-mobile-money-a-madagascar-une-menace-multiple-pour-le-developpement-du-pays', 'date' => '2026-10-06'],
        ['titre' => 'Orange Developer, Orange Money Web Payment (pays couverts)', 'url' => 'https://developer.orange.com/apis/om-webpay/', 'date' => '2026-10-06'],
        ['titre' => 'We Are Tech Africa, lancement d\'Orange Money Pro (mars 2025)', 'url' => 'https://www.wearetech.africa/fr/fils/solutions/madagascar-lancement-d-orange-money-pro-pour-les-transactions-de-marchands-et-distributeurs', 'date' => '2026-10-06'],
        ['titre' => 'L\'Express de Madagascar, Hetraphone : l\'impôt payable par mobile money (2020)', 'url' => 'https://lexpress.mg/30/01/2020/digitalisation-limpot-payable-via-mobile-money/', 'date' => '2026-10-06'],
        ['titre' => 'L\'Express de Madagascar, le commerce en ligne sur le haut de la vague (juillet 2024)', 'url' => 'https://www.lexpress.mg/2024/07/consommation-le-commerce-en-ligne.html', 'date' => '2026-10-06'],
        ['titre' => 'Newsmada, l\'ariary face à l\'euro et au dollar au premier semestre 2026 (données de la Banque centrale)', 'url' => 'https://newsmada.com/?p=190471', 'date' => '2026-10-06'],
        ['titre' => 'Newsmada, commerce extérieur : produits exportés en 2025', 'url' => 'https://newsmada.com/?p=189574', 'date' => '2026-10-06'],
        ['titre' => 'L\'Express de Madagascar, externalisation : un secteur en croissance continue (décembre 2023)', 'url' => 'https://www.lexpress.mg/2023/12/externalisation-un-secteur-en.html', 'date' => '2026-10-06'],
        ['titre' => 'Agence française de développement, FMFP (loi 2015-40, contribution de 1 %)', 'url' => 'https://www.afd.fr/fr/carte-des-projets/fonds-malgache-de-financement-de-la-formation-professionnelle-fmfp', 'date' => '2026-10-06'],
        ['titre' => 'FMFP, Fonds malgache de formation professionnelle (guichets de financement)', 'url' => 'https://www.fmfp.mg', 'date' => '2026-10-06'],
        ['titre' => 'Newsmada, le FMFP : plus de 77 000 personnes formées (avril 2024)', 'url' => 'https://newsmada.com/?p=78054', 'date' => '2026-10-06'],
        ['titre' => 'Constitution de Madagascar de 2010, article 4 (capitale, langues)', 'url' => 'https://www.constituteproject.org/constitution/Madagascar_2010', 'date' => '2026-10-06'],
        ['titre' => 'Agence Adocc, fiche pays Madagascar (villes)', 'url' => 'https://export.agence-adocc.com/fr/fiches-pays/madagascar/introduction', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires, liens de zones (Indian/Antananarivo)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs de pays (recommandation E.164)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'International IDEA, Democracy Tracker, Madagascar, octobre 2025 (suspension de la Constitution annoncée le 14 octobre)', 'url' => 'https://www.idea.int/democracytracker/report/madagascar/october-2025', 'date' => '2026-10-06'],
        ['titre' => 'Décret n° 2025-1101 du 20 octobre 2025 portant nomination du Premier ministre (vise la Constitution)', 'url' => 'https://cnlegis.gov.mg/uploads/D2025-1101-VF.pdf', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['integration-odoo', 'site-e-commerce', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'integration-whatsapp', 'externalisation-developpement', 'formation-en-entreprise', 'consultant-digitalisation', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['odoo-utilisateurs', 'ia-en-entreprise', 'whatsapp-business', 'excel-google-sheets', 'n8n', 'e-commerce'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['experts-comptables', 'commercants-e-commercants', 'logisticiens-transitaires'],
    ],
];
