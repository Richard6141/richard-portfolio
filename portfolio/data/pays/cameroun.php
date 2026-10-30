<?php
// ============================================================
// data/pays/cameroun.php · Page pays « Cameroun » (vague 1D).
// Cameroun ajouté à fait('pays_travailles') par Richard le 07/10/2026 (Déjà travaillé = oui) : projet KossKoss Select (client direct).
// Faits relevés le 2026-10-06 : DataReportal 2026, Banque mondiale, BEAC, DGI,
// loi n° 2024/017, loi de finances 2026, loi n° 2010/021, OHADA, CamPay.
// Limite connue : le texte du décret ou de l'arrêté de la facturation électronique
// n'était pas publié à la date de consultation ; la page le dit.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Digitalisation d’entreprise au Cameroun : sites, applications, ERP et IA, payés en FCFA par mobile money et pensés pour un pays bilingue',
    'title'   => 'Services numériques au Cameroun, en FCFA | Richard SALANON',
    'meta'    => 'Sites, boutiques, Odoo, Dolibarr, WhatsApp et IA pour les entreprises du Cameroun : MTN MoMo, Orange Money, loi de 2024, TVA à 19,25 %, devis en FCFA.',
    'en_bref' => 'Richard SALANON accompagne à distance les entreprises du Cameroun : site et boutique en ligne avec MTN MoMo et Orange Money, application sur mesure, Odoo ou Dolibarr réglé pour le SYSCOHADA et la TVA à 19,25 %, automatisation, WhatsApp et IA. Les échanges se font en français ou en anglais, depuis Cotonou, sans décalage horaire avec Douala ni Yaoundé. Les devis sont établis en FCFA, après un cadrage gratuit, et la réponse arrive sous 24 heures.',
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale'  => ['v' => 'Yaoundé', 'source' => 'https://www.constituteproject.org/constitution/Cameroon_2008', 'date' => '2026-10-06'],
        'villes'    => ['v' => ['Douala (capitale économique et port)', 'Yaoundé', 'Garoua', 'Limbé'], 'source' => 'https://citypopulation.de/en/cameroon/cities/', 'date' => '2026-10-06'],
        'fuseau'    => ['v' => 'UTC+1 (heure d’Afrique de l’Ouest), le même que Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+237', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'   => ['v' => ['Français', 'Anglais (deux langues officielles, de statut égal)'], 'source' => 'https://www.constituteproject.org/constitution/Cameroon_2008', 'date' => '2026-10-06'],
        'population' => ['v' => '30,1 millions d’habitants en octobre 2025, dont 60,6 % vivent en ville', 'source' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-06'],
        'internet'  => ['v' => '12,6 millions d’internautes en octobre 2025, soit 41,9 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-06'],
        'mobile'    => ['v' => '29,0 millions de connexions mobiles en octobre 2025, soit 96,4 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Le Cameroun détient 65,1 % des comptes de mobile money de la CEMAC fin 2024, soit 30,9 millions de comptes, d’après la BEAC', 'source' => 'https://www.ecofinagency.com/news/0705-55325-cameroon-retains-lead-in-central-african-mobile-money-in-2024-as-regional-rivals-gain-ground', 'date' => '2026-10-06'],
        'secteurs'  => ['v' => ['Agriculture (café, cacao, coton)', 'Pétrole et gaz', 'Bois'], 'source' => 'https://www.worldbank.org/en/country/cameroon/overview', 'date' => '2026-10-06'],
        'devise'    => ['v' => 'Franc CFA (XAF), émis par la BEAC pour les six États de la CEMAC', 'source' => 'https://www.beac.int', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['MTN MoMo', 'Orange Money'], 'source' => 'https://campay.net', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['CamPay'], 'source' => 'https://campay.net', 'date' => '2026-10-06'],
        'donnees'   => ['v' => 'Loi n° 2024/017 du 23 décembre 2024, entrée en vigueur le 23 juin 2026 après 18 mois de transition', 'source' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-06'],
        'autorite'  => ['v' => 'Autorité de protection des données à caractère personnel, organisme public indépendant créé par la loi de 2024', 'source' => 'https://www.digitalbusiness.africa/cameroun-lautorite-de-protection-des-donnees-a-caractere-personnel-creee/', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Loi de finances 2026 (loi n° 2025/012) : taxation en temps réel de certaines opérations, avec factures électroniques transmises à la DGI ; modalités à préciser', 'source' => 'https://ecomatin.net/fraude-fiscale-le-cameroun-bascule-vers-la-taxation-en-temps-reel', 'date' => '2026-10-06'],
        'tva'       => ['v' => '19,25 % (17,5 % plus 10 % de centimes additionnels) ; assujettissement dès 50 millions de FCFA de chiffre d’affaires', 'source' => 'https://impots.cm/sites/default/files/documents/FICHE%20TVA.pdf', 'date' => '2026-10-06'],
        'ohada'     => ['v' => 'Membre de l’OHADA, dont le Secrétariat permanent siège à Yaoundé', 'source' => 'https://www.ohada.org', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 2010/021 du 21 décembre 2010 : informations obligatoires avant la commande, rétractation de 15 jours', 'source' => 'https://www.mincommerce.gov.cm/sites/default/files/documents/loi-n-2010-021-du-21-decembre-2010-regissant-le-commerce-electronique-au-cameroun.pdf', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Un fonds national de financement de la formation professionnelle n’était encore qu’une idée en décembre 2024, défendue par le ministre du MINEFOP', 'source' => 'https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun (UTC+1 des deux côtés)'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Cameroun, et qu’est-ce que cela change pour un projet ?',
            'paragraphes' => [
                'Selon <a href="https://datareportal.com/reports/digital-2026-cameroon">DataReportal (Digital 2026)</a>, le Cameroun comptait 30,1 millions d’habitants en octobre 2025, dont 60,6 % vivaient en ville. Seuls 12,6 millions de personnes utilisaient internet, soit 41,9 % de la population, alors que 29,0 millions de connexions mobiles étaient actives, soit 96,4 %. L’écart entre ces deux chiffres explique presque tout : le téléphone est l’appareil que votre client possède, la connexion qu’il paie au mégaoctet est celle qu’il surveille, et l’ordinateur de bureau reste l’exception en dehors des bureaux de Douala et de Yaoundé.',
                'La conséquence directe porte sur le poids des pages. Un site pensé pour une fibre de capitale se charge mal sur une connexion mobile de Garoua ou de Bamenda. Le même rapport relève une vitesse médiane de 11,01 Mbit/s en accès fixe, en hausse de 1,08 Mbit/s sur un an : on ne peut donc pas compter sur un débit généreux. Un site camerounais se construit léger, avec peu d’images lourdes, des pages qui s’affichent avant que tout le script soit chargé, et un formulaire qui fonctionne même quand la connexion saute en pleine saisie.',
                'Le second effet concerne les canaux. Le même rapport compte 5,90 millions d’utilisateurs de réseaux sociaux, et WhatsApp sert de comptoir à beaucoup de commerçants de Douala. Un projet utile ne se contente donc pas de publier un site : il relie ce site au téléphone du client, par un lien WhatsApp, un paiement mobile et un suivi de commande qui arrive par message. C’est cette articulation entre le site, le mobile money et la messagerie qui fait la différence dans ce marché.',
                'Reste la question de la langue. Le français et l’anglais sont tous deux langues officielles, de statut égal, selon l’article premier de la <a href="https://www.constituteproject.org/constitution/Cameroon_2008">Constitution</a>. Un site de commerce ou de formation qui ne parle que français se prive des régions anglophones, et inversement. Richard SALANON travaille en français et en anglais : une interface bilingue se conçoit dès le premier jour, avec deux jeux de textes, deux adresses cohérentes et un sélecteur de langue qui retient le choix du visiteur.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître avant de lancer un projet numérique au Cameroun ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer sur un site ou une application camerounaise ?',
            'paragraphes' => [
                'Deux opérateurs se partagent le paiement mobile : MTN MoMo et Orange Money. Orange Money Cameroun est devenu, d’après <a href="https://www.osiris.sn/orange-money-decroche-le-tout-premier-agrement-d-etablissement-de-paiement-au.html">Osiris</a>, le premier établissement de paiement agréé du pays en 2022, avec un capital de 1,2 milliard de FCFA. Du côté de MTN, MoMo a lancé le 19 décembre 2025, avec Access Bank Cameroun et Mastercard, une <a href="https://www.businessincameroon.com/finance/2412-15553-mtn-launches-mastercard-backed-virtual-momo-prepaid-card-in-cameroon">carte virtuelle MoMo</a> qui permet à un abonné de payer sur des sites étrangers sans compte bancaire. Un site qui vise la clientèle locale accepte les deux opérateurs, sans en privilégier un.',
                'Pour intégrer ces opérateurs sans signer deux contrats techniques, on passe par un agrégateur. <a href="https://campay.net">CamPay</a>, basé à Yaoundé, annonce sur son site la collecte auprès de MTN et d’Orange, des liens de paiement, des paiements de masse, une API HTTP, des modules WooCommerce et Easy Digital Downloads, un kit pour Android et un kit pour Python, avec 2 % de frais sur la collecte. Ces conditions sont celles de la page du fournisseur au 6 octobre 2026 ; elles changent, et le cadrage les revérifie avant tout engagement. D’autres agrégateurs existent sur le marché, et le choix se fait sur la facilité d’intégration, la clarté des frais et les délais de reversement.',
                'L’intégration suit un déroulé précis. On crée le compte marchand, on branche l’API en bac à sable, on traite les trois issues d’un paiement (réussi, refusé, jamais confirmé), puis on réconcilie chaque encaissement avec sa commande. Le troisième cas pose le plus de problèmes : un client valide sur son téléphone, la connexion tombe, le site ne reçoit rien. La solution est un retour automatique du fournisseur vers votre serveur, plus un contrôle périodique des commandes restées en attente, jamais un simple message de remerciement affiché à l’écran.',
                'La carte bancaire reste un complément : elle sert surtout à la diaspora et aux clients qui paient depuis l’étranger. Le virement et le paiement à la livraison complètent le dispositif pour les gros montants et les clients professionnels. Le paiement à la livraison demande une règle écrite : acompte par mobile money à partir d’un certain montant, zone de livraison limitée, délai de confirmation du client. Sans cela, les colis refusés à la porte grignotent la marge, et un site marchand perd plus en retours qu’il ne gagne en commandes supplémentaires.',
                'Une dernière précision sur la zone monétaire. Le Cameroun fait partie de la CEMAC, dont la banque centrale est la <a href="https://www.beac.int">BEAC</a>. La parité avec l’euro est fixe à 655,957 FCFA pour 1 €, ce qui simplifie les devis pour les clients de la diaspora. Les règles de paiement de la zone sont fixées au niveau régional : selon <a href="https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1140-cemac-le-reglement-de-2018-sur-les-services-de-paiement-et-le-reglement-de-2015-sur-la-faillite-bancaire-seront-modifies">Droit, médias et finance</a>, la BEAC et le GIMAC préparent pour 2026 et 2027 une révision du règlement de 2018 sur les services de paiement. Un prestataire sérieux surveille cette révision plutôt que de coder en dur les règles actuelles.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Cameroun en 2026 ?',
            'paragraphes' => [
                'Première obligation, et la plus récente : la protection des données personnelles. La loi n° 2024/017 du 23 décembre 2024 est entrée en vigueur le 23 juin 2026, après dix-huit mois de transition, d’après <a href="https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026">Droit, médias et finance</a>. Elle exige un consentement explicite, libre et éclairé, sans case précochée, la limitation des données collectées à ce qui est nécessaire, des mesures de sécurité comme le chiffrement, un délégué à la protection des données dans les grandes organisations de télécoms, de banque et d’assurance, et prévoit des amendes calculées sur le chiffre d’affaires. Jusque-là, le sujet n’était traité que de façon partielle, par la loi de 2010 sur la cybersécurité et la cybercriminalité.',
                'Elle crée aussi une autorité, l’Autorité de protection des données à caractère personnel, organisme public indépendant, comme le rappelle <a href="https://www.digitalbusiness.africa/cameroun-lautorite-de-protection-des-donnees-a-caractere-personnel-creee/">Digital Business Africa</a>. Les commentaires juridiques publiés par <a href="https://cio-mag.com/?p=59861">CIO Mag</a> indiquent que le traitement de données sur le territoire et leur transfert vers l’étranger sont soumis à une autorisation préalable de cette autorité. La mise en place complète de l’autorité et la procédure de dépôt sont à confirmer : avant tout traitement de masse, faites vérifier l’état des formalités auprès de l’autorité par votre juriste.',
                'Concrètement, pour un projet numérique, cela change quatre choses. Un formulaire de contact ou d’inscription porte un texte de consentement clair. Un registre liste les données collectées, leur finalité et leur durée. Les accès à la base se limitent aux personnes qui en ont besoin. Et la question de l’hébergement se pose : héberger les données d’abonnés camerounais sur un serveur étranger revient à les transférer, ce qui suppose, selon ces commentaires, d’apporter la preuve d’un niveau de protection équivalent dans le pays d’accueil. Un hébergement choisi à la légère devient alors un problème de conformité.',
                'Deuxième sujet, la facturation. La loi de finances 2026, loi n° 2025/012 du 17 décembre 2025, introduit selon <a href="https://blog.avocats.deloitte.fr/cameroun-les-principales-innovations-de-la-loi-de-finances-pour-2026/">Deloitte Société d’Avocats</a> un régime de taxation en temps réel de certaines opérations, dont les modalités pratiques restent à préciser. D’après <a href="https://ecomatin.net/fraude-fiscale-le-cameroun-bascule-vers-la-taxation-en-temps-reel">Ecomatin</a>, ce régime, fondé sur l’article L 8 sexies du Livre des procédures fiscales, passe par des factures standardisées émises avec des dispositifs ou logiciels agréés, dont les données sont transmises automatiquement à la DGI. Aucun calendrier détaillé n’est publié : il reste à confirmer auprès de l’administration fiscale. Votre logiciel de facturation doit donc être capable de s’adapter.',
                'Troisième sujet, la TVA. La <a href="https://impots.cm/sites/default/files/documents/FICHE%20TVA.pdf">fiche de la DGI</a> fixe le taux général à 19,25 %, soit 17,5 % majorés de 10 % de centimes additionnels communaux, avec un taux de 0 % pour les exportations. Sont assujetties les personnes dont le chiffre d’affaires annuel atteint 50 millions de FCFA. Le paramétrage de ce taux et de ses règles de facturation dans Odoo ou Dolibarr se vérifie avec le comptable avant la première facture, pas après la première déclaration.',
                'Le cadre de la fiscalité numérique a aussi bougé. Selon <a href="https://www.investiraucameroun.com/fiscalite/3012-22930-le-cameroun-instaure-un-impot-de-3-sur-le-chiffre-d-affaires-des-entreprises-numeriques-operant-depuis-l-etranger">Investir au Cameroun</a>, l’impôt sur les sociétés, au taux minimum de 3 % du chiffre d’affaires réalisé localement, vise depuis le 1er janvier 2026 les plateformes en ligne exerçant au Cameroun sans établissement physique. La loi de finances prévoit aussi, d’après Deloitte, un précompte sur les achats du secteur numérique et de la téléphonie mobile, et une présence économique significative pour certaines entreprises numériques non résidentes, appréciée selon des seuils fixés par la loi. Richard facture depuis le Bénin : la facturation d’un service numérique se règle avec votre expert-comptable avant la signature.',
                'Reste le droit commercial. Le Cameroun est membre de l’OHADA, dont le Secrétariat permanent siège à Yaoundé selon le <a href="https://www.ohada.org">site de l’organisation</a>. La comptabilité suit le SYSCOHADA révisé : l’acte uniforme sur le droit comptable, adopté le 26 janvier 2017, est applicable aux comptes individuels depuis le 1er janvier 2018, selon <a href="https://blog.avocats.deloitte.fr/acte-uniforme-relatif-droit-comptable-a-linformation-financiere/">Deloitte</a>. Un ERP installé au Cameroun doit donc porter un plan comptable SYSCOHADA, des états financiers conformes et une clôture au 31 décembre.',
                'Enfin, le commerce électronique relève de la loi n° 2010/021 du 21 décembre 2010, consultable sur le <a href="https://www.mincommerce.gov.cm/sites/default/files/documents/loi-n-2010-021-du-21-decembre-2010-regissant-le-commerce-electronique-au-cameroun.pdf">site du ministère du Commerce</a>. L’article 15 impose au vendeur d’informer le consommateur avant la commande : identité, caractéristiques et prix, frais de livraison, modalités de paiement, délais, garanties, possibilité de rétractation. L’article 20 ouvre un délai de rétractation de quinze jours. Une boutique en ligne camerounaise affiche donc ces informations sur ses pages, avant le bouton de paiement, et prévoit un circuit de retour et de remboursement.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services numériques pour les entreprises camerounaises, selon leur besoin ?',
            'legende' => 'Besoins fréquents dans les entreprises camerounaises et service correspondant ; le détail et le prix figurent dans chaque page de service, ou dans le devis après cadrage.',
            'entetes' => ['Besoin typique au Cameroun', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne et encaisser par MTN MoMo et Orange Money', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp à toute heure', 'Intégration de l’API WhatsApp Business', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Un assistant qui répond en français et en anglais', 'Agent IA et chatbot WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots</a>'],
                ['Stock, ventes et comptabilité SYSCOHADA dans un seul outil', 'Déploiement d’Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un ERP léger et sans licence pour une petite structure', 'Déploiement de Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Remplacer les tableurs et les cahiers par un outil sur mesure', 'Application web', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Une application pour les agents de terrain, hors ligne', 'Application Android et iOS', '<a href="/services/application-mobile-android-ios">Application mobile</a>'],
                ['Relier le site, l’ERP et le paiement mobile entre eux', 'API et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Supprimer la double saisie entre factures, mails et fichiers', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Cadrer la transformation numérique avant de dépenser', 'Conseil en digitalisation', '<a href="/services/digitalisation-d-entreprise">Digitalisation d’entreprise</a>'],
                ['Former les équipes à l’outil choisi', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs du Cameroun ?',
            'items' => [
                ['secteur' => 'Agriculture : café, cacao, coton', 'probleme' => 'Une coopérative achète à des centaines de planteurs, paie en espèces ou par mobile money, et reconstitue les volumes et les montants à la main en fin de campagne.', 'solution' => 'Un registre des producteurs, des pesées et des lots sur une application légère utilisable depuis un téléphone, avec paiement groupé par mobile money et export vers la comptabilité. La saisie hors ligne, resynchronisée au retour de la connexion, évite de bloquer l’agent au bord de la plantation.'],
                ['secteur' => 'Pétrole, gaz et services parapétroliers', 'probleme' => 'Un sous-traitant de Douala jongle entre appels d’offres, bons de commande, factures en FCFA et en devises, et subit des retards de paiement difficiles à relancer.', 'solution' => 'Un ERP avec suivi des devis, des commandes et des échéances, factures conformes à la TVA à 19,25 %, relances automatiques et tableau de bord de trésorerie. La préparation aux futures factures électroniques de la DGI entre dans le cadrage dès le départ.'],
                ['secteur' => 'Bois et transformation', 'probleme' => 'Les lots de grumes, de sciages et de produits finis changent de statut sur plusieurs sites, et la traçabilité vit dans des carnets.', 'solution' => 'Une base de lots avec étapes de transformation, rendements par chaîne, stocks par site et documents d’expédition générés automatiquement. Les pertes, les écarts de rendement et les délais de livraison deviennent lisibles semaine par semaine, sans ressaisie entre l’usine et le bureau.'],
                ['secteur' => 'Services et commerce à Douala et Yaoundé', 'probleme' => 'Une boutique reçoit ses commandes sur WhatsApp, note les paiements mobiles dans un cahier et n’arrive plus à suivre les livraisons ni les stocks.', 'solution' => 'Une boutique en ligne avec MTN MoMo et Orange Money par un agrégateur, un statut de commande envoyé par message, un stock tenu dans Odoo ou Dolibarr et une règle claire pour le paiement à la livraison. Le même catalogue sert le site, WhatsApp et la caisse.'],
                ['secteur' => 'Formation, enseignement et conseil bilingues', 'probleme' => 'Un centre accueille des apprenants francophones et anglophones, mais ses inscriptions passent par des messages et des fiches papier.', 'solution' => 'Un site bilingue avec catalogue de sessions, inscription en ligne, paiement mobile, attestation générée et rappel avant chaque session. Les données des apprenants sont collectées avec un consentement explicite, comme l’exige la loi de 2024.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes camerounaises, et qui peut financer la formation ?',
            'paragraphes' => [
                'La formation se déroule à distance, en visioconférence, aux heures de bureau de Douala et de Yaoundé : Richard SALANON travaille en UTC+1, donc sans décalage avec vos équipes. Les sessions se donnent en français ou en anglais, avec des exercices sur vos propres documents plutôt que sur des exemples génériques. Un espace partagé peut servir de support, et les questions qui surviennent après la session peuvent recevoir une réponse écrite sous 24 heures. Cette formule évite les frais de déplacement, qui pèsent lourd dans le budget d’une PME de Douala ou de Bafoussam.',
                'Plusieurs fiches du catalogue correspondent aux besoins déjà décrits plus haut. Pour comprendre ce que l’IA change au quotidien, voir <a href="/formations/ia-en-entreprise">l’IA en entreprise</a> ; pour encadrer son usage au regard de la loi de 2024, <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Pour les équipes qui vendent sur WhatsApp, <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> ; pour les comptables, <a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a> et <a href="/formations/ia-comptables-syscohada">l’IA pour comptables</a>. Les équipes qui automatisent leurs flux regardent <a href="/formations/n8n">n8n</a>, et celles qui vivent dans les tableurs <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>.',
                'Reste le financement. Selon <a href="https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle">Ecomatin</a>, le ministre de l’Emploi et de la Formation professionnelle (MINEFOP) a appelé en décembre 2024, après son passage devant la commission des Finances de l’Assemblée nationale, à créer un fonds national de financement de la formation professionnelle, sans date de création annoncée, et le budget 2025 du ministère s’élevait à 33,1 milliards de FCFA. Au 6 octobre 2026, aucun dispositif public de prise en charge des formations numériques pour une entreprise privée n’est confirmé : à vérifier auprès du MINEFOP avant de budgéter.',
                'En pratique, une entreprise camerounaise qui veut financer une formation interroge d’abord son organisme de cotisation ou sa direction financière, puis le MINEFOP, avant de demander un devis. La formation est facturée en FCFA, et un devis détaillé (objectifs, durée, participants, livrables) sert de pièce justificative si un financeur le demande. Si un dispositif se confirme, il est ajouté à cette page avec sa source et sa date de consultation.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'items' => [
                ['titre' => 'Premier message et réponse', 'texte' => 'Vous décrivez votre activité, vos outils actuels et votre besoin par le formulaire de contact ou par WhatsApp. Richard répond avec ses premières questions, en français ou en anglais.', 'duree' => 'sous 24 heures'],
                ['titre' => 'Cadrage', 'texte' => 'Un appel en visioconférence, aux horaires de Douala puisque les deux villes partagent le même fuseau, permet de lister les flux à couvrir, les moyens de paiement, le nombre d’utilisateurs et les contraintes légales du pays.', 'duree' => 'selon le projet'],
                ['titre' => 'Devis en FCFA', 'texte' => 'Le devis est établi en FCFA, avec les livrables, le calendrier et les étapes de paiement. Un équivalent en euros se donne sur demande, sur la base de 655,957 FCFA pour 1 €.', 'duree' => 'après le cadrage'],
                ['titre' => 'Réalisation par paliers', 'texte' => 'Chaque palier peut être présenté sur une adresse de test que vous ouvrez depuis votre téléphone. Tester sur mobile, avec une vraie connexion, peut faire partie de la recette.', 'duree' => 'une à trois semaines pour un site vitrine, un à trois mois pour une application sur mesure'],
                ['titre' => 'Livraison et formation', 'texte' => 'Les accès, la documentation et une session de prise en main peuvent être remis à la fin de chaque palier, en visioconférence.', 'duree' => 'en fin de palier'],
                ['titre' => 'Suivi', 'texte' => 'Un canal écrit peut rester ouvert pour les corrections et les évolutions ; la maintenance se discute au devis.', 'duree' => 'après la livraison'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se règlent les échanges, la langue et le paiement du prestataire ?',
            'paragraphes' => [
                'Les échanges passent par WhatsApp pour les questions courtes, par courriel pour les documents et par visioconférence pour les décisions. L’absence de décalage horaire entre Cotonou et le Cameroun supprime le principal frein des projets menés à distance : une question posée à neuf heures reçoit sa réponse dans la matinée, pas le lendemain. Richard n’est pas sur place : l’intervention reste à distance, et un projet qui exigerait une présence physique, comme l’installation d’un réseau, doit s’appuyer sur un partenaire local.',
                'Pour le règlement du prestataire, les modes de paiement indiqués sur la fiche de Richard sont le mobile money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Depuis le Cameroun, le virement et PayPal sont les plus simples ; un paiement par mobile money entre opérateurs de deux pays dépend des accords entre eux, et se vérifie au devis. Le devis reste exprimé en FCFA : la valeur du FCFA est fixe face à l’euro, ce qui évite les mauvaises surprises de change pour les clients qui règlent depuis la diaspora.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet numérique au Cameroun ?',
            'intro' => 'Les tarifs de départ ci-dessous sont ceux de Richard SALANON, exprimés en FCFA, avec l’équivalent en euros au taux fixe de 655,957 FCFA pour 1 €. Tout le reste se chiffre sur devis, en FCFA, après le cadrage.',
            'items' => [
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Tarif de départ, ajusté au cadrage', 'Devis en FCFA']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Tarif de départ, ajusté au cadrage', 'Devis en FCFA']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Tarif de départ, ajusté au cadrage', 'Devis en FCFA']],
                ['offre' => 'Boutique, ERP, application, IA', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Prix fixé après le cadrage', 'Paiement par étapes']],
            ],
            'variations' => [
                'Le nombre de langues : un site bilingue français et anglais compte deux jeux de textes à écrire, à relire et à référencer.',
                'Le nombre de moyens de paiement et d’agrégateurs à brancher, chacun avec ses tests et ses frais.',
                'Les obligations légales à intégrer : TVA à 19,25 %, SYSCOHADA, consentement et registre de la loi de 2024, futures factures électroniques de la DGI.',
                'L’état de vos données à reprendre : fichiers clients, stocks, historiques de vente sur tableur ou sur papier.',
                'La qualité de la connexion de vos utilisateurs : une application hors ligne coûte plus qu’une application toujours connectée.',
                'La formation et le suivi après la livraison.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter pour un projet numérique au Cameroun ?',
            'intro' => 'Ces erreurs reviennent dans les projets menés dans le pays ; chacune se corrige au cadrage.',
            'items' => [
                ['titre' => 'Concevoir pour une fibre qui n’existe pas partout', 'texte' => 'Un site lourd fonctionne dans un bureau de Douala et échoue au bord d’une route de l’Adamaoua. On teste sur un téléphone d’entrée de gamme, avec une connexion limitée, avant de valider.'],
                ['titre' => 'Ne brancher qu’un seul opérateur de mobile money', 'texte' => 'MTN MoMo et Orange Money se partagent le marché. Ne proposer que l’un des deux écarte une partie de vos clients, qui n’ont pas toujours les deux comptes.'],
                ['titre' => 'Confondre confirmation à l’écran et paiement reçu', 'texte' => 'Le seul signal fiable est celui que le fournisseur renvoie à votre serveur. Sans lui, des commandes restent impayées ou, pire, des clients sont livrés sans avoir payé.'],
                ['titre' => 'Traiter la loi de 2024 comme une formalité lointaine', 'texte' => 'Elle est applicable depuis le 23 juin 2026. Un formulaire sans consentement clair, une base sans registre ou un hébergement choisi sans vérification exposent à des sanctions.'],
                ['titre' => 'Figer la facturation avant l’arrêté de la DGI', 'texte' => 'Un logiciel de facturation fermé, impossible à adapter, devient un coût quand les factures électroniques seront exigées. Mieux vaut un outil ouvert et un prestataire capable de le mettre à jour.'],
                ['titre' => 'Oublier la moitié anglophone du pays', 'texte' => 'Un site monolingue français perd les clients du Nord-Ouest et du Sud-Ouest, et paraît fermé aux partenaires anglophones. La traduction se prévoit dans l’architecture, pas après le lancement.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel point de vigilance sur les chiffres et les textes de cette page ?',
            'texte' => 'Les règles de la protection des données, de la facturation électronique et des paiements de la zone CEMAC évoluent encore. Cette page est datée du 6 octobre 2026 et signale ce qui n’est pas établi : la mise en place de l’autorité de protection des données, le calendrier de la facturation électronique, les dispositifs de financement de la formation. Elle ne remplace ni un avis juridique ni l’avis de votre expert-comptable.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet numérique camerounais à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard a déjà travaillé avec des entreprises au Cameroun, et il les accompagne à distance, depuis Cotonou. Il a plus de six ans d’expérience, il s’est formé à EPITECH en 2022 et il a déjà accompagné des entreprises d’Afrique centrale, au Gabon, au Tchad et en RD Congo. Il est aussi le créateur de Wapy, un assistant WhatsApp à intelligence artificielle, et co-fondateur d’<a href="https://audyxa.com">Audyxa</a>.',
                'Au Cameroun, il a réalisé pour un client direct KossKoss Select, un concept-store cosmétique. C’est une boutique lancée avec un diagnostic beauté en cinq étapes, quatorze routines de soin et le paiement par Orange Money et MTN MoMo. Les autres projets sont à voir sur la page des <a href="/realisations/">réalisations</a>. Pour l’histoire complète du parcours, voir <a href="/richard-salanon">Richard SALANON</a> et la page <a href="/a-propos/">À propos</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet numérique au Cameroun ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels, vos moyens de paiement et vos contraintes de langue : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard SALANON intervient-il sur place au Cameroun ?', 'r' => 'Non, l’intervention se fait à distance, en visioconférence, par écrit et par WhatsApp. Il n’y a aucun décalage horaire avec Cotonou, puisque le Cameroun et le Bénin sont tous deux en UTC+1. Un besoin de présence physique, comme un câblage, passe par un partenaire local choisi avec vous.'],
        ['q' => 'Richard SALANON peut-il accompagner des entreprises camerounaises ?', 'r' => 'Oui. Richard a déjà travaillé avec des entreprises au Cameroun, à distance depuis Cotonou. Son portfolio compte un projet camerounais, KossKoss Select, une boutique de cosmétiques avec paiement par Orange Money et MTN MoMo.'],
        ['q' => 'Quels moyens de paiement un site camerounais doit-il accepter ?', 'r' => 'MTN MoMo et Orange Money en priorité, par un agrégateur comme CamPay qui annonce 2 % de frais sur la collecte. La carte bancaire complète l’offre pour la diaspora, et le virement convient aux clients professionnels. Les frais se revérifient au cadrage.'],
        ['q' => 'La loi sur les données personnelles s’applique-t-elle déjà au Cameroun ?', 'r' => 'Oui. La loi n° 2024/017 du 23 décembre 2024 est entrée en vigueur le 23 juin 2026, après dix-huit mois de transition. Elle exige un consentement explicite, la limitation des données collectées et des mesures de sécurité, et encadre le transfert de données vers l’étranger.'],
        ['q' => 'Quelle autorité contrôle la protection des données au Cameroun ?', 'r' => 'La loi de 2024 crée l’Autorité de protection des données à caractère personnel, organisme public indépendant. Aucune source publique ne confirme encore sa mise en place complète ; la procédure de dépôt et les formalités préalables se vérifient auprès d’elle.'],
        ['q' => 'La facturation électronique est-elle obligatoire au Cameroun ?', 'r' => 'La loi de finances 2026 institue une taxation en temps réel avec émission de factures électroniques transmises à la DGI, pour certaines opérations, dont les modalités doivent être fixées par arrêté. Aucun calendrier détaillé n’est publié au 6 octobre 2026, à confirmer auprès de l’administration fiscale ; un logiciel de facturation ouvert reste le choix prudent.'],
        ['q' => 'Quel est le taux de TVA et à partir de quand est-on assujetti ?', 'r' => 'Le taux général est de 19,25 %, soit 17,5 % plus 10 % de centimes additionnels communaux, et de 0 % pour les exportations. Selon la fiche de la DGI, les personnes dont le chiffre d’affaires annuel atteint 50 millions de FCFA sont assujetties.'],
        ['q' => 'Un ERP installé au Cameroun doit-il suivre le SYSCOHADA ?', 'r' => 'Oui : le Cameroun est membre de l’OHADA et applique le SYSCOHADA révisé, en vigueur pour les comptes individuels depuis le 1er janvier 2018. Odoo et Dolibarr se paramètrent avec ce plan comptable, que le comptable valide avant la première écriture.'],
        ['q' => 'Quelles informations une boutique en ligne doit-elle afficher au Cameroun ?', 'r' => 'La loi n° 2010/021 impose d’indiquer avant la commande l’identité du vendeur, les caractéristiques et les prix, les frais de livraison, les modalités de paiement, les délais, les garanties et la possibilité de rétractation, qui court quinze jours.'],
        ['q' => 'Combien coûte un site pour une entreprise camerounaise ?', 'r' => 'Les tarifs de départ sont de 150 000 FCFA pour une landing page, 300 000 FCFA pour un site vitrine et 75 000 FCFA pour le référencement naturel, ajustés au cadrage. Les boutiques, ERP et applications se chiffrent sur devis, toujours en FCFA.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, Cameroun : vue d’ensemble', 'url' => 'https://www.worldbank.org/en/country/cameroon/overview', 'date' => '2026-10-06'],
        ['titre' => 'Droit, médias et finance : la loi sur les données personnelles entre en vigueur le 23 juin 2026', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-06'],
        ['titre' => 'Digital Business Africa : l’autorité de protection des données créée', 'url' => 'https://www.digitalbusiness.africa/cameroun-lautorite-de-protection-des-donnees-a-caractere-personnel-creee/', 'date' => '2026-10-06'],
        ['titre' => 'CIO Mag : la protection des données à la lecture de la loi du 23 décembre 2024', 'url' => 'https://cio-mag.com/?p=59861', 'date' => '2026-10-06'],
        ['titre' => 'Deloitte Société d’Avocats : Cameroun, loi de finances 2026', 'url' => 'https://blog.avocats.deloitte.fr/cameroun-les-principales-innovations-de-la-loi-de-finances-pour-2026/', 'date' => '2026-10-06'],
        ['titre' => 'DGI du Cameroun : fiche sur la TVA', 'url' => 'https://impots.cm/sites/default/files/documents/FICHE%20TVA.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Investir au Cameroun : impôt de 3 % sur les entreprises numériques étrangères', 'url' => 'https://www.investiraucameroun.com/fiscalite/3012-22930-le-cameroun-instaure-un-impot-de-3-sur-le-chiffre-d-affaires-des-entreprises-numeriques-operant-depuis-l-etranger', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2010/021 du 21 décembre 2010 régissant le commerce électronique, ministère du Commerce', 'url' => 'https://www.mincommerce.gov.cm/sites/default/files/documents/loi-n-2010-021-du-21-decembre-2010-regissant-le-commerce-electronique-au-cameroun.pdf', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, site officiel', 'url' => 'https://www.ohada.org', 'date' => '2026-10-06'],
        ['titre' => 'Deloitte : acte uniforme relatif au droit comptable et à l’information financière', 'url' => 'https://blog.avocats.deloitte.fr/acte-uniforme-relatif-droit-comptable-a-linformation-financiere/', 'date' => '2026-10-06'],
        ['titre' => 'BEAC, Banque des États de l’Afrique centrale', 'url' => 'https://www.beac.int', 'date' => '2026-10-06'],
        ['titre' => 'Droit, médias et finance : révision du règlement CEMAC de 2018 sur les services de paiement', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1140-cemac-le-reglement-de-2018-sur-les-services-de-paiement-et-le-reglement-de-2015-sur-la-faillite-bancaire-seront-modifies', 'date' => '2026-10-06'],
        ['titre' => 'Ecofin Agency : le Cameroun garde la tête du mobile money en Afrique centrale en 2024', 'url' => 'https://www.ecofinagency.com/news/0705-55325-cameroon-retains-lead-in-central-african-mobile-money-in-2024-as-regional-rivals-gain-ground', 'date' => '2026-10-06'],
        ['titre' => 'Osiris : Orange Money, premier agrément d’établissement de paiement', 'url' => 'https://www.osiris.sn/orange-money-decroche-le-tout-premier-agrement-d-etablissement-de-paiement-au.html', 'date' => '2026-10-06'],
        ['titre' => 'Business in Cameroon : MTN lance la carte virtuelle MoMo', 'url' => 'https://www.businessincameroon.com/finance/2412-15553-mtn-launches-mastercard-backed-virtual-momo-prepaid-card-in-cameroon', 'date' => '2026-10-06'],
        ['titre' => 'CamPay, passerelle de paiement mobile', 'url' => 'https://campay.net', 'date' => '2026-10-06'],
        ['titre' => 'Ecomatin : vers un fonds national de financement de la formation professionnelle', 'url' => 'https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle', 'date' => '2026-10-06'],
        ['titre' => 'Constitution du Cameroun, Constitute Project', 'url' => 'https://www.constituteproject.org/constitution/Cameroon_2008', 'date' => '2026-10-06'],
        ['titre' => 'Ecomatin : le Cameroun bascule vers la taxation en temps réel', 'url' => 'https://ecomatin.net/fraude-fiscale-le-cameroun-bascule-vers-la-taxation-en-temps-reel', 'date' => '2026-10-06'],
        ['titre' => 'CityPopulation : villes du Cameroun, données de l’INS', 'url' => 'https://citypopulation.de/en/cameroon/cities/', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires : liens de zones (Africa/Douala)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs téléphoniques nationaux (recommandation E.164)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'integration-odoo', 'integration-dolibarr', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'whatsapp-business', 'odoo-comptabilite-syscohada', 'n8n', 'excel-google-sheets'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'metiers'     => ['commercants-e-commercants', 'experts-comptables', 'agro-industrie'],
    ],

];
