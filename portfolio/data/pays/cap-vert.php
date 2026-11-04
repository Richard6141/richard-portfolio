<?php
// ============================================================
// data/pays/cap-vert.php · Page pays « Cap-Vert » (vague 1D, tranche T5).
// Faits externes relevés le 06/10/2026 : DataReportal (Digital 2026), ARME
// (rapport du premier trimestre 2026 relayé par Forbes Afrique Lusophone),
// SISP, CNPD, Boletim Oficial (lois n° 41/X/2024 et décret-loi n° 38/2021),
// PwC, EDICOM, Banque mondiale, INE. Cap-Vert hors OHADA : clé 'ohada' absente.
// Clés absentes faute de source solide : villes, mobile_money, operateurs.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Des outils numériques pensés pour le Cap-Vert : paiement Vinti4, e-Fatura et CNPD, pilotés à distance depuis Cotonou',
    'title'   => 'Digitalisation au Cap-Vert, à distance | Richard SALANON',
    'meta'    => 'Sites, applications, automatisations, IA et formations pour les entreprises du Cap-Vert : suivi à distance, en français, devis en euros, réponse en 24 h.',
    'en_bref' => 'Richard conçoit pour les entreprises du Cap-Vert des sites, des boutiques en ligne, des applications, des automatisations et des intégrations d’IA, et il forme leurs équipes. Le travail se fait à distance, en français, avec deux heures d’écart avec Cotonou. Chaque projet tient compte du réseau de paiement Vinti4, de la facture électronique e-Fatura et de la loi cap-verdienne sur les données personnelles. Les devis sont établis en euros, après un cadrage gratuit.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Praia', 'source' => 'https://www.constituteproject.org/constitution/Cape_Verde_1992', 'date' => '2026-10-06'],
        'fuseau'   => ['v' => 'UTC−1 (heure du Cap-Vert)', 'source' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+238', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'  => ['v' => ['Portugais (langue officielle)', 'Créole capverdien (langue maternelle, dont l\'État promeut l\'officialisation)'], 'source' => 'https://axl.cefan.ulaval.ca/afrique/Cap-Vert-const.htm', 'date' => '2026-10-06'],
        'population' => ['v' => '491 233 habitants au recensement de 2021 (résultats définitifs de l’INE)', 'source' => 'https://macaubusiness.com/cabo-verde-country-had-population-of-491233-residents-in-2021-census/', 'date' => '2026-10-06'],
        'internet' => ['v' => '388 000 internautes en octobre 2025, soit 73,5 % des habitants', 'source' => 'https://datareportal.com/reports/digital-2026-cabo-verde', 'date' => '2026-10-06'],
        'mobile'   => ['v' => '601 000 connexions mobiles fin 2025, soit 114 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-cabo-verde', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Tourisme (environ un quart du PIB)', 'Services', 'Transferts de la diaspora'], 'source' => 'https://www.worldbank.org/en/country/caboverde/overview', 'date' => '2026-10-06'],
        'devise'   => ['v' => 'Escudo capverdien (CVE), rattaché à l’euro : 1 € = 110,265 CVE au cours affiché par la Banque du Cap-Vert', 'source' => 'https://www.bcv.cv', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => 'Vinti4 de la SISP, réseau interbancaire et solution de paiement web', 'source' => 'https://www.sisp.cv', 'date' => '2026-10-06'],
        'donnees'  => ['v' => 'Loi n° 133/V/2001 du 22 janvier, modifiée par les lois n° 41/VIII/2013 et n° 121/IX/2021', 'source' => 'https://boe.incv.cv/Bulletins/Download/5909', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Comissão Nacional de Proteção de Dados (CNPD)', 'source' => 'https://www.cnpd.cv', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique obligatoire depuis le décret-loi n° 79/2020, via le système e-Fatura de la DNRE', 'source' => 'https://edicomgroup.com/pt/blog/como-cumprir-fatura-eletronica-cabo-verde', 'date' => '2026-10-06'],
        'tva'      => ['v' => 'IVA au taux normal de 15 %, avec un régime spécial pour les services vendus par des non-résidents', 'source' => 'https://taxsummaries.pwc.com/cabo-verde/corporate/other-taxes', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 41/X/2024 du 12 août 2024 : régime juridique des services numériques et du commerce électronique', 'source' => 'https://boe.incv.cv/Bulletins/Download/5909', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Fonds de promotion de l’emploi et de la formation (FPEF), institué par le décret-loi n° 38/2021, qui finance des actions de formation par appels', 'source' => 'https://boe.incv.cv/Bulletins/Download/6023', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '2 heures de moins au Cap-Vert, toute l’année'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quel est le niveau d’équipement numérique de l’archipel, et que change-t-il pour un projet ?',
            'paragraphes' => [
                'Le taux d’équipement de l’archipel est la première donnée qui oriente un projet. Selon <a href="https://datareportal.com/reports/digital-2026-cabo-verde">DataReportal (Digital 2026)</a>, 388 000 personnes utilisaient internet en octobre 2025, soit 73,5 % des habitants, et 601 000 connexions mobiles étaient actives, soit 114 % de la population. Le même rapport relève 263 000 identités sur les réseaux sociaux en octobre 2025. Un site ou une boutique y sont donc d’abord consultés sur un téléphone.',
                'Le régulateur, l’<a href="https://forbesafricalusofona.com/?p=175051">ARME</a> (Agência Reguladora Multissectorial da Economia), chiffre le marché à 588 603 cartes SIM actives fin mars 2026. CVTelecom en détient 68 % et Unitel T+ 32 %. Côté fixe, 51 020 abonnements à haut débit étaient recensés, soit 9,9 habitants sur 100, dont un tiers en fibre. Les clients sont donc joignables par mobile presque partout, alors que le fixe reste l’affaire d’une minorité de foyers et de bureaux.',
                'Pour un projet, trois conséquences en découlent. Les pages doivent être légères et lisibles sur un écran de téléphone, avec des formulaires courts. Les relances et la relation client passent bien par la messagerie, ce qui ouvre la voie à l’<a href="/services/integration-whatsapp">intégration WhatsApp</a>. Enfin, l’activité de l’archipel dépend de visiteurs venus d’Europe : un site d’hôtel, d’agence ou de restaurant se juge aussi par sa vitesse sur une connexion étrangère, avant même d’être traduit.',
                'La Banque mondiale rattache la croissance du pays au tourisme et aux services : son <a href="https://www.worldbank.org/en/country/caboverde/overview">aperçu du pays</a> donne une croissance de 6,3 % en 2025 et une prévision de 4,8 % pour 2026. Elle y mentionne aussi le projet Digital Cabo Verde, doté de 40 millions de dollars, qui vise la connectivité, les services publics numériques et le développement des compétences. Les entreprises qui s’équipent aujourd’hui avancent donc avec un cadre public qui encourage le numérique.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères connaître avant de lancer un projet numérique au Cap-Vert ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour vendre au Cap-Vert ?',
            'paragraphes' => [
                'Au Cap-Vert, le paiement en ligne passe d’abord par la carte du réseau Vinti4, exploité par la <a href="https://www.sisp.cv">SISP</a> (Sociedade Interbancária e Sistemas de Pagamentos). Selon <a href="https://forbesafricalusofona.com/?p=120156">Forbes Afrique Lusophone, d’après la banque centrale</a>, ce réseau comptait en 2024 plus de 381 000 porteurs de carte, 233 distributeurs de billets sur toutes les îles et 14 000 terminaux chez les commerçants. Les opérations sur ces canaux ont atteint 208 milliards d’escudos, environ 1,8 milliard d’euros, en hausse de 20 %.',
                'Les cartes internationales comptent aussi : leurs opérations ont progressé de 23 % en 2024, à 24 milliards d’escudos, soit 11 % de l’activité totale. Pour un hôtel, une agence de voyages ou une table réservée par un visiteur, la boutique doit donc accepter à la fois la carte locale Vinti4 et les cartes Visa et Mastercard. La SISP présente sur son site une solution de paiement web portant la marque Vinti4, qui constitue le point d’entrée naturel pour un site marchand.',
                'L’intégration suit un déroulé précis. L’entreprise ouvre d’abord son contrat de commerçant auprès de sa banque ou de la SISP. Richard branche ensuite le site au service de paiement : la commande part, le client s’authentifie sur la page de la banque, puis la confirmation revient et le site marque la commande comme payée. Chaque retour est vérifié côté serveur, jamais seulement dans le navigateur du client, pour qu’une page rechargée ne valide aucun paiement.',
                'Les portefeuilles de téléphone des deux opérateurs mobiles, CVTelecom et Unitel T+, se traitent à part : leurs conditions d’accès pour un site marchand se demandent à l’opérateur avant tout engagement, et l’intégration se cale sur ces conditions. Le virement reste utile pour les factures de grande valeur, les prestataires et les clients étrangers. Les commissions et les délais de versement figurent dans le contrat de commerçant, à lire et à négocier avec la banque avant le lancement.',
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles obligations légales changent un projet numérique au Cap-Vert ?',
            'intro'  => 'Cinq textes ou régimes encadrent le plus souvent un projet de site, de boutique ou de logiciel. Ils sont rappelés ici pour décider avant de coder, et ne remplacent pas l’avis d’un juriste local.',
            'items'  => [
                ['titre' => 'Données personnelles : loi n° 133/V/2001 et CNPD', 'texte' => 'La <a href="https://www.cnpd.cv/obrigacoes">Comissão Nacional de Proteção de Dados</a> applique la loi n° 133/V/2001, modifiée par les lois n° 41/VIII/2013 et n° 121/IX/2021. Son site rappelle aux responsables de traitement d’informer clairement les personnes concernées, de tenir un registre de leurs traitements et de notifier les violations de données à la CNPD sous 72 heures. Un formulaire de commande, un fichier de clients ou un système de réservation entrent dans ce cadre : ces obligations se préparent pendant le cadrage, pas après la mise en ligne.'],
                ['titre' => 'Facturation : e-Fatura, obligatoire par étapes', 'texte' => 'Depuis le décret-loi n° 79/2020, l’émission des factures et documents fiscaux se fait par voie électronique. EDICOM, dans un <a href="https://edicomgroup.com/pt/blog/como-cumprir-fatura-eletronica-cabo-verde">article de synthèse</a>, décrit un déploiement par étapes : importateurs en juillet 2021, grands contribuables en septembre 2021, moyennes entreprises en janvier 2022, puis micro et petites entreprises du régime spécial REMPE en juin 2022. La situation d’une activité donnée se confirme auprès de la DNRE avant de choisir un outil. Un logiciel de gestion doit produire un document signé avec un certificat numérique, portant un identifiant unique que l’on peut imprimer sous forme de code QR.'],
                ['titre' => 'IVA : taux de 15 % et régime spécial pour les services numériques', 'texte' => 'Le <a href="https://taxsummaries.pwc.com/cabo-verde/corporate/other-taxes">résumé fiscal de PwC</a> donne un taux normal de 15 % et un régime particulier pour la vente à distance et les services fournis par des contribuables sans siège ni établissement dans le pays, quand l’acheteur est établi au Cap-Vert. Une société étrangère qui vend un abonnement à un client capverdien doit donc vérifier ses obligations auprès de la DNRE, l’administration fiscale.'],
                ['titre' => 'Commerce électronique : loi n° 41/X/2024', 'texte' => 'Publiée au <a href="https://boe.incv.cv/Bulletins/Download/5909">Boletim Oficial du 12 août 2024</a>, elle approuve le régime juridique des services numériques et du commerce électronique. Son préambule annonce la régulation de l’activité marchande en ligne, des droits des consommateurs, de la publicité en ligne et du régime d’IVA du commerce électronique. L’ARME y est désignée autorité de supervision centrale. Le texte prévoit un droit de rétractation de quatorze jours pour le consommateur.'],
                ['titre' => 'OHADA : pas d’application', 'texte' => 'Le Cap-Vert n’appartient pas à l’espace OHADA : ni acte uniforme ni plan comptable SYSCOHADA ne s’y appliquent. Un ERP s’y paramètre selon le référentiel comptable et fiscal cap-verdien, validé par le comptable de l’entreprise avant la première écriture, jamais avec un modèle copié d’un pays d’Afrique francophone.'],
                ['titre' => 'Hébergement et données', 'texte' => 'Le lieu d’hébergement (Europe, Afrique du Sud, cloud mondial) fait partie des choix à documenter pour la CNPD, notamment en cas de transfert de données hors du pays : il se décide au cadrage, avec l’entreprise, puis se consigne dans le dossier de livraison. Les sauvegardes, leur fréquence et l’accès administrateur y figurent aussi, pour que l’entreprise garde la main sur ses données.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises du Cap-Vert ?',
            'legende' => 'Besoins fréquents des entreprises de l’archipel et service correspondant ; chaque projet est chiffré sur devis, en euros.',
            'entetes' => ['Besoin typique au Cap-Vert', 'Service', 'Page'],
            'lignes'  => [
                ['Un hôtel ou une pension de Sal ou de Boa Vista reçoit ses réservations par messagerie et par courriel', 'Système de réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Voir la page</a>'],
                ['Un commerce veut vendre aux résidents avec Vinti4 et aux visiteurs avec une carte étrangère', 'Site e-commerce', '<a href="/services/site-e-commerce">Voir la page</a>'],
                ['Une agence ou un guide de Mindelo doit apparaître sur Google dans plusieurs langues', 'Référencement naturel', '<a href="/services/referencement-naturel-seo">Voir la page</a>'],
                ['Un restaurant ou un loueur de voitures veut sa fiche Google exacte sur chaque île', 'SEO local et fiche Google', '<a href="/services/seo-local-google-business">Voir la page</a>'],
                ['Un cabinet comptable ou une société de négoce doit émettre des factures e-Fatura sans ressaisie', 'Intégration Odoo', '<a href="/services/integration-odoo">Voir la page</a>'],
                ['Une PME a besoin d’un petit ERP simple pour les devis, le stock et les règlements', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Voir la page</a>'],
                ['Une entreprise répond à ses clients sur WhatsApp à toute heure', 'Agents IA et chatbot WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Voir la page</a>'],
                ['Les mêmes saisies se répètent entre le tableur, la messagerie et la comptabilité', 'Automatisation', '<a href="/services/automatisation-ia">Voir la page</a>'],
                ['Une application de gestion ou de suivi doit servir plusieurs îles à la fois', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Voir la page</a>'],
                ['Un outil existant tombe en panne ou doit être mis à jour', 'Maintenance et support', '<a href="/services/maintenance-support">Voir la page</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas d’usage dans les secteurs porteurs du Cap-Vert ?',
            'items' => [
                ['secteur' => 'Tourisme et hôtellerie', 'probleme' => 'Les demandes de séjour arrivent par courriel et messagerie, à toute heure, depuis l’Europe.', 'solution' => 'Un site rapide avec calendrier de disponibilité, paiement par carte et réponse automatique en dehors des heures de bureau, relié à la messagerie de l’établissement.', 'lien' => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Voir le système de réservation']],
                ['secteur' => 'Commerce et artisanat', 'probleme' => 'Une boutique d’artisanat vend surtout à des visiteurs de passage et veut prolonger la vente après leur départ.', 'solution' => 'Une boutique en ligne qui accepte Vinti4 et les cartes étrangères, avec livraison à l’étranger et fiches produits en plusieurs langues rédigées par l’entreprise.', 'lien' => ['url' => '/services/site-e-commerce', 'texte' => 'Voir le site e-commerce']],
                ['secteur' => 'Services aux entreprises et comptabilité', 'probleme' => 'Un cabinet saisit chaque facture deux fois, une fois dans son logiciel et une fois sur la plateforme de l’administration.', 'solution' => 'Un ERP paramétré pour émettre des documents compatibles avec e-Fatura, avec reprise des clients et des articles, contrôlée avec le comptable.', 'lien' => ['url' => '/services/integration-odoo', 'texte' => 'Voir l’intégration Odoo']],
                ['secteur' => 'Transferts de la diaspora et services financiers', 'probleme' => 'Des familles installées à l’étranger envoient des fonds et cherchent des prestataires fiables au pays.', 'solution' => 'Un espace client sécurisé où l’on suit ses commandes, ses devis et ses règlements, avec notifications par messagerie et journal de chaque action.', 'lien' => ['url' => '/services/saas-espace-client', 'texte' => 'Voir l’espace client']],
                ['secteur' => 'Transport, location et excursions', 'probleme' => 'Les loueurs de véhicules et les organisateurs d’excursions gèrent le planning à la main d’une île à l’autre.', 'solution' => 'Une application web partagée entre îles, avec planning, acomptes et rappels automatiques envoyés avant chaque départ.', 'lien' => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Voir l’application sur mesure']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes capverdiennes, et qui finance la formation ?',
            'paragraphes' => [
                'Richard peut former à distance, en visioconférence, sur les outils réellement utilisés par l’entreprise : séances courtes, exercices sur les données de l’équipe, supports en français. Pour les équipes qui manient l’anglais ou le français au quotidien, la <a href="/formations/ia-en-entreprise">formation à l’IA en entreprise</a> convient aux bureaux, aux agences et aux hôtels. <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> sert les commerces, et <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> accompagne un déploiement.',
                'Côté financement, le Fonds de promotion de l’emploi et de la formation (FPEF) a été institué par le décret-loi n° 38/2021 du 23 avril. Le <a href="https://boe.incv.cv/Bulletins/Download/6023">Boletim Oficial du 24 octobre 2024</a> décrit son fonctionnement : le fonds lance des appels, les « editais », pour choisir et financer des actions de formation conduites par des entités publiques ou privées, au profit surtout des jeunes. Un organisme de formation répond à ces appels ; une entreprise doit donc vérifier auprès du FPEF si son projet entre dans un appel ouvert.',
                'Les formations proposées se choisissent selon le besoin : <a href="/formations/excel-google-sheets">tableurs de gestion</a>, <a href="/formations/n8n">automatisation avec n8n</a>, <a href="/formations/e-commerce">vendre en ligne</a>, <a href="/formations/visibilite-google">visibilité Google</a>. Le programme et la durée se fixent au devis, après un échange sur les postes concernés. L’ensemble du catalogue figure dans le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment travailler avec Richard depuis Praia ou Mindelo, alors qu’il est à Cotonou ?',
            'paragraphes' => [
                'Richard travaille depuis Cotonou, où le fuseau est UTC+1. Le Cap-Vert est en UTC−1 : Praia et Mindelo ont deux heures de moins, toute l’année. Une réunion à 10 h au Cap-Vert tombe à midi à Cotonou. La plage de réponse de Richard, de 7 h à 20 h heure de Cotonou, recouvre donc la journée de bureau capverdienne presque entière, et les échanges du matin sur l’archipel arrivent en début d’après-midi béninois.',
                'La langue de travail est le français, avec l’anglais en renfort. Les textes destinés au public capverdien, en portugais ou en créole, sont rédigés ou relus par l’équipe de l’entreprise ou par son traducteur ; Richard prépare les gabarits, les champs multilingues et les zones de contenu pour qu’elle les remplisse seule. Les échanges techniques et les comptes rendus restent en français, ce qui évite les malentendus sur les réglages.',
                'Le suivi peut être écrit et partagé : un compte rendu après chaque séance, une liste de tâches visible, une version de test que le client peut ouvrir à tout moment, et une réponse sous 24 heures à chaque message. Les visioconférences se fixent à l’avance, de préférence en fin de matinée au Cap-Vert. Les contenus et les accès peuvent être remis à la livraison, avec une documentation courte, pour que l’entreprise reste propriétaire de son site et de ses données. Aucun déplacement n’est prévu : le projet se mène à distance.',
            ],
        ],
        [
            'type'   => 'prix',
            'titre'  => 'Que coûte un projet pour une entreprise capverdienne, et dans quelle monnaie est-il chiffré ?',
            'intro'  => 'Chaque projet est chiffré sur devis, en euros, une fois le cadrage gratuit terminé. L’escudo étant rattaché à l’euro à raison de 110,265 CVE pour 1 €, un devis en euros se convertit sans surprise de change.',
            'items'  => [
                ['offre' => 'Site vitrine ou page de lancement', 'prix' => 'Sur devis, en euros', 'inclus' => ['Pages adaptées au téléphone', 'Formulaire de contact et lien WhatsApp', 'Référencement de base', 'Gabarits prêts pour des textes multilingues']],
                ['offre' => 'Boutique ou réservation en ligne', 'prix' => 'Sur devis, en euros', 'inclus' => ['Paiement par carte via le service Vinti4 et cartes étrangères', 'Gestion des commandes ou des disponibilités', 'Courriels et messages de confirmation', 'Mentions et informations prévues par la loi n° 41/X/2024']],
                ['offre' => 'ERP, application ou automatisation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage sur une opération réelle', 'Paramétrage et reprise des données', 'Documents compatibles avec e-Fatura quand le projet émet des factures', 'Formation des utilisateurs et documentation']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’est-ce qui fait varier le prix d’un projet au Cap-Vert ?',
            'paragraphes' => [
                'Le premier facteur est le nombre de langues. Un site en français, en portugais et en anglais demande une structure de contenu, des urls par langue et des relectures ; ce travail s’ajoute à la mise en page. Le deuxième est le paiement : accepter Vinti4 et les cartes étrangères suppose un contrat de commerçant, des tests avec la banque et un suivi des retours, alors qu’un simple formulaire de demande de devis n’en exige aucun.',
                'Le troisième facteur est la facturation. Un ERP ou une application qui émet des factures doit produire des documents conformes à e-Fatura, avec certificat numérique et identifiant unique ; ce raccordement se chiffre à part. Le quatrième est la dispersion géographique : plusieurs îles, plusieurs sites, une connexion parfois faible, ce qui justifie des écrans légers et une saisie tolérante aux coupures. Chaque devis détaille ces postes.',
                'Les modes de règlement de la prestation sont le virement, la carte bancaire et PayPal ; ils se discutent à la signature du devis. Le devis peut prévoir un acompte au lancement du cadrage, puis des paiements par étape à la livraison de chaque palier. Les éventuels frais d’outils tiers (hébergement, licences, abonnements de messagerie) sont listés à part dans le devis, avec leur coût et leur échéance de renouvellement, afin que le coût sur trois ans soit connu dès le départ.',
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs fréquentes éviter dans un projet au Cap-Vert ?',
            'intro'  => 'Ces écueils reviennent dans les projets numériques de l’archipel ; chacun se règle au cadrage.',
            'items'  => [
                ['titre' => 'Traduire un site sans prévoir la langue de départ', 'texte' => 'Le portugais est la langue officielle, le créole la langue maternelle parlée au quotidien et l’anglais celle de nombreux visiteurs. Un site traduit après coup oblige à refaire les menus et les urls ; la structure multilingue se décide dès la première maquette.'],
                ['titre' => 'Copier un modèle d’Afrique francophone', 'texte' => 'Un plan comptable SYSCOHADA, un code de facture béninois ou une page de paiement par mobile money d’un autre pays ne conviennent pas ici : le Cap-Vert est hors OHADA, et son réseau de paiement, la SISP, a ses propres règles.'],
                ['titre' => 'Oublier e-Fatura dans le choix du logiciel', 'texte' => 'Un logiciel de gestion qui n’émet pas de document signé avec identifiant unique oblige à ressaisir chaque facture sur la plateforme de la DNRE. Le critère se vérifie avant l’achat, pas à la première facture.'],
                ['titre' => 'Négliger l’information et le registre des traitements', 'texte' => 'La CNPD attend des responsables de traitement une information claire des personnes et un registre de leurs traitements. Un formulaire en ligne ouvert au public sans ces éléments expose l’entreprise ; les mentions et le registre se préparent avec la maquette.'],
                ['titre' => 'Ignorer les visiteurs qui paient avec une carte étrangère', 'texte' => 'Avec 11 % du volume des transactions du réseau en 2024 passant par des cartes internationales, une boutique limitée aux cartes locales perd une part visible de ses clients.'],
                ['titre' => 'Négliger le rythme d’une île à l’autre', 'texte' => 'Les livraisons, les rendez-vous et les horaires de ferry ou de vol varient selon l’île. Un calendrier d’activité unique, sans lieu associé à chaque créneau, crée des erreurs de planning.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet à Richard quand on est une entreprise du Cap-Vert ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Depuis Cotonou, Richard peut accompagner à distance un hôtel de Sal, un commerce de Praia ou un cabinet de Mindelo. Formé à EPITECH en 2022, il compte plus de six ans d’expérience, a conçu Wapy, son assistant WhatsApp à intelligence artificielle, et a co-fondé <a href="https://audyxa.com">Audyxa</a>. Chaque projet capverdien se livre en français, avec un devis en euros, une réponse sous 24 heures et des accès remis au nom de l’entreprise.',
                'Les réalisations suivantes illustrent les types de projets qu’il livre, tels qu’ils figurent dans ses <a href="/realisations/">réalisations</a>. Laura Cosmetics : une boutique vendant dans deux devises vers deux zones de livraison, dotée d’un back-office pour les stocks, les coupons et le suivi des ventes, réalisée en sous-traitance pour Digital Développement. IK Fashion House : une boutique en ligne avec commande sur mesure à distance et paiement FedaPay, réalisée en sous-traitance pour Digital Développement. OBA TV : une chaîne en ligne avec abonnement premium payé par mobile money.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Un projet numérique pour votre entreprise au Cap-Vert ?',
            'texte'  => 'Décrivez votre activité, votre île, vos langues et vos outils actuels : vous recevez une réponse sous 24 heures, puis un cadrage gratuit et un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard peut-il travailler avec une entreprise du Cap-Vert sans se déplacer ?', 'r' => 'Oui. Le projet se mène à distance, par visioconférence, messagerie et documents partagés, avec deux heures de décalage entre Cotonou et Praia. Les versions de test peuvent être accessibles en ligne à tout moment, et les formations se donnent en visioconférence.'],
        ['q' => 'Faut-il rédiger le site en portugais, en créole ou en français ?', 'r' => 'Le portugais est la langue officielle et le créole capverdien la langue maternelle de la population ; le public touristique lit souvent le français, l’anglais ou d’autres langues européennes. Le choix dépend de la clientèle visée. Richard met en place la structure multilingue, et l’entreprise ou son traducteur fournit les textes portugais ou créoles.'],
        ['q' => 'Comment accepter les cartes Vinti4 sur un site ?', 'r' => 'Vinti4 est le réseau de la SISP. Le site se raccorde au service de paiement web après la signature d’un contrat de commerçant avec la banque ou la SISP. Le client s’authentifie sur la page de paiement, puis le site vérifie la confirmation côté serveur avant de marquer la commande comme payée.'],
        ['q' => 'Une boutique capverdienne doit-elle accepter les cartes étrangères ?', 'r' => 'C’est utile : selon la banque centrale, les opérations par cartes internationales ont représenté 24 milliards d’escudos en 2024, soit 11 % de l’activité du réseau, en hausse de 23 %. Pour les hôtels, les excursions et la vente à des visiteurs, accepter les cartes Visa et Mastercard évite de perdre ces clients.'],
        ['q' => 'Qu’est-ce que e-Fatura et à qui s’applique-t-il ?', 'r' => 'e-Fatura est le système de facture électronique de la Direction nationale des recettes de l’État. Il découle du décret-loi n° 79/2020 : factures et documents fiscaux sont émis par voie électronique, avec signature numérique. Selon EDICOM, le déploiement s’est achevé en juin 2022 avec les micro et petites entreprises du régime REMPE ; un logiciel de gestion doit s’y raccorder.'],
        ['q' => 'Quelle loi protège les données personnelles au Cap-Vert ?', 'r' => 'La loi n° 133/V/2001 du 22 janvier, modifiée par les lois n° 41/VIII/2013 et n° 121/IX/2021. L’autorité est la Comissão Nacional de Proteção de Dados (CNPD), dont le site rappelle les obligations d’information, de registre des traitements et de notification des violations sous 72 heures. Ces obligations se préparent pendant le cadrage d’un site ou d’un ERP.'],
        ['q' => 'Le Cap-Vert fait-il partie de l’OHADA ?', 'r' => 'Non. Ni les actes uniformes ni le plan comptable SYSCOHADA ne s’appliquent. Un logiciel de gestion s’y règle selon le référentiel comptable et fiscal du pays, avec validation par le comptable de l’entreprise avant toute écriture.'],
        ['q' => 'Quelle TVA faut-il appliquer à une vente en ligne ?', 'r' => 'Le taux normal de l’IVA est de 15 %, d’après le résumé fiscal de PwC, qui décrit aussi un régime particulier pour les services et ventes à distance de contribuables sans établissement au Cap-Vert. Les obligations de votre cas se confirment auprès de la DNRE ou d’un expert-comptable local.'],
        ['q' => 'Dans quelle devise Richard établit-il ses devis pour le Cap-Vert ?', 'r' => 'En euros. L’escudo capverdien étant rattaché à l’euro à raison de 110,265 CVE pour 1 €, le montant se convertit sans variation de change. Le règlement se fait par virement, carte bancaire ou PayPal.'],
        ['q' => 'Qui peut financer une formation au numérique pour une équipe capverdienne ?', 'r' => 'Le Fonds de promotion de l’emploi et de la formation (FPEF), institué par le décret-loi n° 38/2021, finance des actions de formation lancées par appels, confiées à des entités de formation publiques ou privées. Il convient de vérifier auprès du FPEF si un appel ouvert correspond au projet.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Cabo Verde (internet, mobile, réseaux sociaux)', 'url' => 'https://datareportal.com/reports/digital-2026-cabo-verde', 'date' => '2026-10-06'],
        ['titre' => 'Forbes Afrique Lusophone, rapport de l’ARME sur les communications électroniques au premier trimestre 2026', 'url' => 'https://forbesafricalusofona.com/?p=175051', 'date' => '2026-10-06'],
        ['titre' => 'Forbes Afrique Lusophone, transactions électroniques au Cap-Vert en 2024 (banque centrale)', 'url' => 'https://forbesafricalusofona.com/?p=120156', 'date' => '2026-10-06'],
        ['titre' => 'SISP, Sociedade Interbancária e Sistemas de Pagamentos (réseau Vinti4)', 'url' => 'https://www.sisp.cv', 'date' => '2026-10-06'],
        ['titre' => 'CNPD, obligations des responsables de traitement (Comissão Nacional de Proteção de Dados)', 'url' => 'https://www.cnpd.cv/obrigacoes', 'date' => '2026-10-06'],
        ['titre' => 'Boletim Oficial n° 78 du 12 août 2024, loi n° 41/X/2024 sur les services numériques et le commerce électronique', 'url' => 'https://boe.incv.cv/Bulletins/Download/5909', 'date' => '2026-10-06'],
        ['titre' => 'Boletim Oficial n° 100 du 24 octobre 2024, Fonds de promotion de l’emploi et de la formation', 'url' => 'https://boe.incv.cv/Bulletins/Download/6023', 'date' => '2026-10-06'],
        ['titre' => 'EDICOM, facture électronique au Cap-Vert (décret-loi n° 79/2020)', 'url' => 'https://edicomgroup.com/pt/blog/como-cumprir-fatura-eletronica-cabo-verde', 'date' => '2026-10-06'],
        ['titre' => 'e-Fatura, plateforme de la Direction nationale des recettes de l’État', 'url' => 'https://efatura.cv', 'date' => '2026-10-06'],
        ['titre' => 'PwC, Cabo Verde : autres impôts (IVA)', 'url' => 'https://taxsummaries.pwc.com/cabo-verde/corporate/other-taxes', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, Cabo Verde : aperçu du pays', 'url' => 'https://www.worldbank.org/en/country/caboverde/overview', 'date' => '2026-10-06'],
        ['titre' => 'Macau Business, résultats du recensement 2021 de l’INE du Cap-Vert (491 233 habitants)', 'url' => 'https://macaubusiness.com/cabo-verde-country-had-population-of-491233-residents-in-2021-census/', 'date' => '2026-10-06'],
        ['titre' => 'Constitution du Cap-Vert sur Constitute Project (Praia, capitale)', 'url' => 'https://www.constituteproject.org/constitution/Cape_Verde_1992', 'date' => '2026-10-06'],
        ['titre' => 'Aménagement linguistique dans le monde, Constitution du Cap-Vert de 2010 (article 9, langues)', 'url' => 'https://axl.cefan.ulaval.ca/afrique/Cap-Vert-const.htm', 'date' => '2026-10-06'],
        ['titre' => 'Base IANA des fuseaux horaires, fichier Afrique (Atlantic/Cape_Verde, UTC−1)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs de pays de la recommandation E.164 (indicatif 238)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Banque du Cap-Vert, cours de change (euro à 110,265 escudos)', 'url' => 'https://www.bcv.cv', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'systeme-de-reservation-en-ligne', 'integration-odoo', 'integration-whatsapp', 'automatisation-ia', 'application-web-sur-mesure', 'referencement-naturel-seo', 'formation-en-entreprise', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['ia-en-entreprise', 'whatsapp-business', 'odoo-utilisateurs', 'e-commerce'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
        'metiers'     => ['commercants-e-commercants', 'hotellerie-restauration'],
    ],
];
