<?php
// ============================================================
// data/pays/comores.php · Page pays « Comores » (vague 1D, tranche T5).
// Faits externes relevés le 06/10/2026 sur les textes de loi publiés par le
// ministère de la Justice, le code général des impôts (édition 2023), le site
// de l'OHADA, DataReportal, la Banque mondiale, le Trésor français, l'AFD,
// la SFI et la presse financière. Devise des devis : euro (aucun prix chiffré).
// Clés de fiche absentes faute de source établie : villes, agregateurs,
// ecommerce, financement.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Comores : branchez MVola, Huri Money et Holo sur votre boutique, déclarez la taxe sur la consommation sans erreur et pilotez vos ventes d\'Ngazidja à Mwali',
    'title'   => 'Digitalisation d\'entreprises comoriennes | Richard SALANON',
    'meta'    => 'Sites, automatisation, IA, Odoo et Dolibarr pour les entreprises des Comores : MVola, Huri Money, Holo, taxe sur la consommation, devis en euros.',
    'en_bref' => 'Richard SALANON accompagne à distance les entreprises des Comores : site ou boutique en ligne, application sur mesure, assistant WhatsApp, automatisation, intégration d\'Odoo ou de Dolibarr, formation des équipes. Le travail avance en français, en visioconférence et sur un groupe WhatsApp dédié, à deux heures d\'écart de Cotonou. Les paiements se raccordent aux portefeuilles locaux (MVola, Huri Money, Holo) et les devis sont établis en euros.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale'  => ['v' => 'Moroni', 'source' => 'https://constituteproject.org/constitution/Comoros_2018?lang=en', 'date' => '2026-10-06'],
        'fuseau'    => ['v' => 'UTC+3, soit deux heures de plus qu\'à Cotonou (UTC+1)', 'source' => 'https://en.wikipedia.org/wiki/Comoros', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+269', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'   => ['v' => ['comorien (shikomor)', 'français', 'arabe'], 'source' => 'https://constituteproject.org/constitution/Comoros_2018?lang=en', 'date' => '2026-10-06'],
        'population' => ['v' => 'Environ 883 000 habitants en 2025', 'source' => 'https://data.worldbank.org/country/comoros', 'date' => '2026-10-06'],
        'internet'  => ['v' => '32,5 % des habitants utilisent internet en 2024', 'source' => 'https://data.worldbank.org/country/comoros', 'date' => '2026-10-06'],
        'mobile'    => ['v' => '760 000 connexions mobiles actives, soit 85,7 % de la population, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-comoros', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Commutateur national de paiement interopérable, opérationnel depuis le 25 août 2025', 'source' => 'https://osiris.sn/comores-vers-une-interoperabilite-complete-des-transactions-financieres.html', 'date' => '2026-10-06'],
        'secteurs'  => ['v' => ['services', 'vanille et girofle', 'transferts de la diaspora (18,1 % du PIB en 2025)'], 'source' => 'https://www.tresor.economie.gouv.fr/Pays/KM/indicateurs-et-conjoncture', 'date' => '2026-10-06'],
        'devise'    => ['v' => 'Franc comorien (KMF), arrimé à l\'euro', 'source' => 'https://en.wikipedia.org/wiki/Comoros', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['MVola (Yas, ex-Telma)', 'Huri Money (Huri, ex-Comores Télécom)', 'Holo (Banque de Développement des Comores)'], 'source' => 'https://www.ifc.org/content/dam/ifc/doc/mgrt/comoros-building-resilience-through-dfs.pdf', 'date' => '2026-10-06'],
        'donnees'   => ['v' => 'Loi portant protection des données à caractère personnel, adoptée par l\'Assemblée de l\'Union le 26 juin 2014', 'source' => 'https://justice.gouv.km/wp-content/uploads/2025/03/loi-du-26-juin-2014-portant-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-06'],
        'autorite'  => ['v' => 'Commission nationale de l\'informatique et des libertés (CNIL), instituée par l\'article 19 de la loi', 'source' => 'https://justice.gouv.km/wp-content/uploads/2025/03/loi-du-26-juin-2014-portant-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture obligatoire avec NIF, taux et montant de la taxe ; caisse enregistreuse dès 20 millions de KMF de chiffre d\'affaires commercial', 'source' => 'https://justice.gouv.km/wp-content/uploads/2025/03/comores-cgi-2023.pdf', 'date' => '2026-10-06'],
        'tva'       => ['v' => 'Taxe sur la consommation : 10 % au taux normal, autoliquidée par le bénéficiaire d\'un service rendu par un prestataire non domicilié', 'source' => 'https://justice.gouv.km/wp-content/uploads/2025/03/comores-cgi-2023.pdf', 'date' => '2026-10-06'],
        'ohada'     => ['v' => 'État membre : traité ratifié le 20 février 1995, en vigueur depuis le 18 septembre 1995', 'source' => 'https://www.ohada.org/en/history-of-ohada/', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '+2 heures (UTC+3 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique aux Comores, et que change-t-il pour un projet ?',
            'paragraphes' => [
                'Selon la <a href="https://data.worldbank.org/country/comoros">Banque mondiale</a>, l\'archipel comptait environ 883 000 habitants en 2025, et 32,5 % d\'entre eux utilisaient internet en 2024. DataReportal, dans son <a href="https://datareportal.com/reports/digital-2026-comoros">édition 2026</a>, compte à la fin de 2025 316 000 internautes, soit 35,7 % de la population, et 760 000 connexions mobiles actives, soit 85,7 %. Les deux séries mesurent des choses différentes (une enquête d\'usage d\'un côté, des abonnements de l\'autre), mais elles disent la même chose : un habitant sur trois environ est en ligne, et presque chaque foyer possède un téléphone.',
                'Le même rapport note que 79,7 % des connexions mobiles passent par la 3G, la 4G ou la 5G, et que 69,2 % des habitants vivent hors des villes. Pour un projet, la conséquence est concrète. Le téléphone est l\'écran principal : un site doit se lire et se commander au pouce, sur une page légère, avant de se penser pour un grand écran. Et comme les deux tiers de la population ne se connectent pas encore, WhatsApp, l\'appel et le passage en boutique restent des canaux à garder à côté du site.',
                'Reste la contrainte des distances. Le pays est un archipel, et les traversées entre îles pèsent sur les livraisons, les rendez-vous et les déplacements des équipes. Une application qui centralise les commandes, les stocks et les encaissements de plusieurs îles évite des allers-retours que le téléphone ne peut pas remplacer. C\'est le premier argument pour numériser : non pas suivre une mode, mais gagner les jours que coûte une traversée.',
                'Richard accompagne les entreprises des Comores à distance depuis Cotonou, et cette organisation a une logique propre à ce marché. Les sites et les outils de gestion se construisent, se recettent et se forment par visioconférence, et les paiements, les factures et les données se règlent par le droit comorien, sans avoir besoin d\'un bureau dans l\'archipel.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les repères à connaître avant de lancer un projet aux Comores ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour vendre aux Comores ?',
            'paragraphes' => [
                'Trois portefeuilles se partagent le mobile money. Dans une étude de marché de la <a href="https://www.ifc.org/content/dam/ifc/doc/mgrt/comoros-building-resilience-through-dfs.pdf">SFI</a>, la filiale financière du groupe de la Banque mondiale, ils figurent sous les noms de M\'Vola (opérateur Telma), de Huri (Comores Télécom) et de Holo (Banque de Développement des Comores). Les noms ont depuis évolué : Telma Comores s\'appelle Yas depuis le 26 novembre 2024, d\'après <a href="https://developingtelecoms.com/telecom-business/operator-news/17668-axian-rebrands-mobile-units-as-yas-for-pan-african-growth.html">Developing Telecoms</a>, et le <a href="https://www.axian-telecom.com/2026/09/14/axian-telecom-to-operate-as-yas-across-its-telecom-digital-infrastructure-and-fintech/">communiqué d\'Axian Telecom</a> du 14 septembre 2026 rappelle ce changement de novembre 2024 aux Comores. Le site de Yas présente MVola parmi ses solutions financières pour les professionnels.',
                'Holo est né en septembre 2019 comme solution de banque mobile de la BDC, avec TagPay comme partenaire technique, selon <a href="https://www.financialafrik.com/2019/09/06/lancement-du-service-holo-la-solution-de-banque-mobile-de-la-bdc/">Financial Afrik</a>. C\'est un compte utilisable avec une application ou un téléphone simple, qui permet notamment les achats, le règlement des factures et le versement des salaires. Huri Money est le portefeuille de Huri, l\'ancienne Comores Télécom.',
                'Le cadre juridique est la loi n° 20-005/AU du 23 juin 2020 sur les services de paiement et leurs prestataires, citée par la SFI : elle règle les services de paiement, les établissements de monnaie électronique, les institutions de paiement, les émetteurs et les agents. Un commerçant qui encaisse par portefeuille doit donc passer par un prestataire régulé, et non par un simple numéro de téléphone personnel affiché sur la page de commande.',
                'L\'événement récent est l\'interopérabilité. D\'après le <a href="https://osiris.sn/comores-vers-une-interoperabilite-complete-des-transactions-financieres.html">compte rendu d\'Osiris</a> de l\'annonce de PayLogic, le commutateur national de paiement, mis en œuvre avec l\'appui du projet de développement du secteur financier de la Banque mondiale, était opérationnel le 25 août 2025 : banques, institutions de microfinance et opérateurs de mobile money y sont reliés pour les virements, les paiements marchands et les envois de la diaspora. Un vendeur n\'a plus besoin, en principe, d\'exiger que son client ait le même portefeuille que lui.',
                'Côté intégration, Richard commence par lire la documentation technique de chaque prestataire : certains proposent une interface de programmation pour les marchands, d\'autres un paiement par code USSD ou par lien. Il choisit ensuite le mode le moins fragile pour l\'entreprise, branche la confirmation de paiement sur la commande, et prévoit le cas fréquent où le client paie mais ferme l\'application avant le retour au site. Les frais et les délais de versement dépendent des conditions commerciales de chaque prestataire : ils se demandent par écrit avant de s\'engager.',
                'Les cartes bancaires et PayPal restent possibles pour les clients de la diaspora ou les touristes qui paient depuis l\'étranger. Le virement et les espèces à la livraison complètent le dispositif. Un bon site comorien affiche donc au moins deux moyens de paiement locaux et un moyen international, sans les mélanger dans un même formulaire.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique aux Comores ?',
            'paragraphes' => [
                'Les données personnelles relèvent d\'une loi adoptée par l\'Assemblée de l\'Union le 26 juin 2014 et publiée par le <a href="https://justice.gouv.km/wp-content/uploads/2025/03/loi-du-26-juin-2014-portant-protection-des-donnees-a-caractere-personnel.pdf">ministère de la Justice</a>. Le texte publié ne porte pas de numéro : on la cite par sa date. Elle s\'applique aux traitements automatisés comme aux fichiers papier, et institue une Commission nationale de l\'informatique et des libertés (article 19). L\'article 41 impose, avant la mise en œuvre d\'un traitement, une déclaration à la Commission ou l\'inscription dans un registre tenu par une personne désignée par le responsable.',
                'Certains traitements en sont dispensés : la comptabilité générale, la gestion des rémunérations, la gestion des fournisseurs, et les fichiers d\'associations limités à leurs membres (article 42). D\'autres exigent une autorisation préalable (article 43) : numéro national d\'identification, données biométriques, données de santé, interconnexion de fichiers, traitements pouvant exclure quelqu\'un d\'un droit ou d\'un contrat, et transferts de données vers d\'autres États. La Commission dispose de deux mois pour répondre ; son silence vaut avis favorable (article 44).',
                'Deux articles pèsent directement sur la manière de travailler avec un prestataire à distance. L\'article 50 oblige le responsable à protéger les données contre l\'accès de tiers non autorisés. L\'article 51 exige que le sous-traitant n\'agisse que sur instruction, avec un contrat qui fixe ses obligations de sécurité et de confidentialité. Un contrat avec Richard reprend donc ces clauses, et un transfert des données hors de l\'archipel, par exemple vers un serveur européen, se déclare comme tel dans le dossier.',
                'Le texte renvoie ses modalités d\'application à un décret. Avant de lancer un traitement sensible (santé, scolarité, biométrie), le plus sûr est de faire confirmer par écrit, auprès des autorités comoriennes compétentes, la procédure de déclaration en vigueur et de garder la réponse au dossier du projet.',
                'La facturation est encadrée par le <a href="https://justice.gouv.km/wp-content/uploads/2025/03/comores-cgi-2023.pdf">code général des impôts, édition 2023</a>. Tout redevable qui livre des biens ou rend des services délivre une facture mentionnant son nom, son adresse et son numéro d\'identification fiscale, la désignation des opérations, le montant hors taxe, le taux de la taxe sur la consommation et le montant toutes taxes comprises (article 148). L\'absence de NIF sur une facture entraîne une pénalité de 10 % de son montant. Les entreprises commerciales dont le chiffre d\'affaires atteint 20 millions de KMF, soit environ 40 650 euros, doivent employer une caisse enregistreuse.',
                'La taxe sur la consommation tient lieu de TVA. Son taux normal est de 10 %, avec des taux réduits : 7,5 % sur les recharges mobiles en voix et en données, 5 % sur la restauration et les activités bancaires, 3 % sur l\'eau, l\'électricité et les titres de transport entre îles (article 152). Les entreprises sous 20 millions de KMF de chiffre d\'affaires hors taxe en sont exonérées, sauf importateurs entre 15 et 20 millions (article 141). Pour un service numérique, l\'article 149 compte : lorsque le prestataire n\'est pas domicilié aux Comores, la taxe est autoliquidée par le bénéficiaire sur sa déclaration mensuelle. Une entreprise assujettie qui achète un site ou un abonnement à l\'étranger l\'inscrit donc sur sa déclaration.',
                'Ces règles sont celles de l\'édition 2023 du code. Les mesures fiscales de la <a href="https://finances.gouv.km/wp-content/uploads/2026/01/Decret-N%C2%B026-003PR-du-16-jan-2026-portant-Prom-Loi-25-020AU-portant-Loi-de-Finan.pdf">loi de finances 2026</a> (loi n° 25-020/AU du 26 décembre 2025) portent sur la procédure (flagrance fiscale, télédéclaration et télépaiement, dont la date d\'entrée en vigueur sera fixée par arrêté) et ne touchent ni au taux ni au seuil ci-dessus. Aucune obligation de facture électronique n\'est fixée à ce jour : la date de la télédéclaration se confirme auprès de la direction générale des impôts avant le lancement ; Richard conçoit donc les modèles de facture pour qu\'ils portent déjà toutes les mentions de l\'article 148, et un export au format structuré si l\'administration en réclame un.',
                'Le droit des affaires est celui de l\'OHADA. Selon le <a href="https://www.ohada.org/en/history-of-ohada/">site de l\'organisation</a>, les Comores ont ratifié le traité le 20 février 1995, déposé leurs instruments de ratification le 10 avril 1995, et le traité y est en vigueur depuis le 18 septembre 1995. Les actes uniformes sur les sociétés, les sûretés, le recouvrement et le droit comptable s\'y appliquent donc. Quand un projet touche la comptabilité (Odoo, Dolibarr), le plan de comptes et les états financiers se paramètrent selon le SYSCOHADA, après validation par l\'expert-comptable de l\'entreprise.',
                'Côté télécoms, la loi n° 14-031/AU du 17 mars 2014 relative aux communications électroniques a été modifiée par la loi n° 23-024/AU, adoptée le 26 décembre 2023 et promulguée par le <a href="https://justice.gouv.km/wp-content/uploads/2025/03/decret-n-24-003pr-du-2-fevrier-2024-portant-promulgation-de-la-loi-n-23-024au-portant-modification-de-la-loi-n-14-031au-du-17-mars-2014-relative-aux-communications-electroniques.pdf">décret n° 24-003/PR</a>. L\'ANRTIC, l\'autorité de régulation, délivre les licences, les autorisations et les agréments aux opérateurs et aux importateurs d\'équipements. Une entreprise qui ne fait qu\'utiliser un site ou une application n\'en dépend pas ; un projet qui revend de la connectivité, des SMS ou des services de télécommunications doit en revanche s\'y renseigner.',
                'Pour le commerce électronique, un site marchand applique les règles générales : mentions du vendeur, prix toutes taxes comprises, conditions de vente et de retour écrites, facture remise. Richard rédige ces rubriques avec l\'entreprise et conseille de les faire relire par un juriste local.',
            ],
        ],
        [
            'type'     => 'tableau',
            'titre'    => 'Quels services pour les entreprises des Comores, selon leur besoin ?',
            'legende'  => 'Besoins typiques de l\'archipel et service correspondant',
            'entetes'  => ['Besoin typique aux Comores', 'Service', 'Page'],
            'lignes'   => [
                ['Encaisser par MVola, Huri Money ou Holo sur une boutique', 'Site e-commerce avec paiement mobile', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Recevoir les commandes de la diaspora qui paie depuis l\'étranger', 'Boutique en euros, carte, PayPal, virement', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Répondre aux clients sur WhatsApp à toute heure', 'Assistant WhatsApp à IA', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Raccorder WhatsApp aux commandes et aux relances', 'Intégration de l\'API WhatsApp', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Suivre des stocks et des ventes réparties sur plusieurs îles', 'ERP Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Facturer avec NIF et taxe de 10 %, sans logiciel lourd', 'ERP Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Gérer des réservations de traversées, chambres ou excursions', 'Système de réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Réservation en ligne</a>'],
                ['Relier le portefeuille mobile, la caisse et la comptabilité', 'API et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Digitaliser un processus propre à un ministère, une école ou une ONG', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Être trouvé quand un client cherche un produit de l\'île', 'Référencement naturel', '<a href="/services/referencement-naturel-seo">Référencement naturel</a>'],
                ['Choisir par où commencer, avec un budget serré', 'Cadrage et conseil', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs de l\'archipel ?',
            'items' => [
                ['secteur' => 'Commerce et services', 'probleme' => 'Un grossiste de Moroni prend ses commandes par appel et par message, note les ventes à crédit dans un cahier et découvre les écarts de stock à l\'inventaire.', 'solution' => 'Un outil de gestion en ligne, Dolibarr ou Odoo selon la taille : catalogue, bons de commande, factures avec NIF et taxe sur la consommation à 10 %, encours par client. Chaque règlement par portefeuille mobile ou en espèces est rattaché à sa facture, et le gérant lit ses soldes depuis son téléphone. Le seuil de 20 millions de KMF de chiffre d\'affaires, qui impose la caisse enregistreuse, se surveille dans les rapports.', 'lien' => ['url' => '/services/integration-dolibarr', 'texte' => 'Voir l\'intégration Dolibarr']],
                ['secteur' => 'Vanille et girofle', 'probleme' => 'Un exportateur achète à des dizaines de petits producteurs répartis sur plusieurs villages, pèse, paie en espèces et reconstitue ensuite les lots pour l\'acheteur étranger.', 'solution' => 'Une application de collecte simple, utilisable sur téléphone : fiche producteur, poids, qualité, prix du jour, reçu envoyé par message. Les achats alimentent des lots qui suivent la marchandise jusqu\'à la facture d\'export en euros. Le paiement du producteur peut passer par un portefeuille mobile, ce qui laisse une trace et évite de transporter des espèces.', 'lien' => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Voir les applications sur mesure']],
                ['secteur' => 'Transferts de la diaspora', 'probleme' => 'Les familles reçoivent de l\'argent de l\'étranger, qui pèse 18,1 % du PIB en 2025 selon le Trésor, et les commerçants cherchent à capter cette dépense sans attendre le retour au pays.', 'solution' => 'Une boutique en ligne pensée pour la diaspora : prix en euros, paiement par carte ou virement depuis l\'étranger, livraison à une adresse de proche, et confirmation par WhatsApp à la famille sur place. Le commerçant garde la gestion du stock en un seul endroit, quel que soit le canal d\'achat.', 'lien' => ['url' => '/services/site-e-commerce', 'texte' => 'Voir le e-commerce']],
                ['secteur' => 'Transport entre les îles et tourisme', 'probleme' => 'Les places sur les traversées, les chambres et les excursions se réservent par téléphone, avec des doubles réservations et des acomptes non suivis.', 'solution' => 'Un calendrier de disponibilités partagé, une réservation en ligne avec acompte par mobile money, un message de confirmation et un rappel la veille. La taxe sur la consommation, à 3 % sur les titres de transport entre îles et à 10 % au taux normal sur les autres services, est calculée par ligne de facture.', 'lien' => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Voir la réservation en ligne']],
                ['secteur' => 'Éducation et formation professionnelle', 'probleme' => 'Un établissement ou un centre de formation gère inscriptions, frais de scolarité et attestations sur des fichiers dispersés.', 'solution' => 'Un espace d\'inscription et de suivi des élèves, avec paiement des frais par portefeuille mobile, Holo notamment. Le projet PROFI de l\'AFD, doté de 21,5 millions d\'euros depuis mars 2022, cible notamment les services numériques dans six établissements : de quoi alimenter une demande d\'outils de gestion scolaire.', 'lien' => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Voir les applications sur mesure']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d\'une entreprise comorienne, et qui paie ?',
            'paragraphes' => [
                'Les formations se donnent à distance, en visioconférence, en petits groupes ou en séance individuelle, avec des exercices sur les propres documents de l\'entreprise. Le décalage de deux heures avec Cotonou est sans conséquence pour la plage du matin : une séance de 9 h à Moroni commence à 7 h à Cotonou, et le début d\'après-midi comorien convient aux équipes qui travaillent tôt. Les supports sont en français et restent la propriété de l\'entreprise.',
                'Les formats les plus demandés sont l\'usage quotidien des assistants d\'IA (<a href="/formations/ia-en-entreprise">IA en entreprise</a>), les premiers flux d\'automatisation (<a href="/formations/n8n">n8n de zéro à l\'autonomie</a>), la vente avec l\'application <a href="/formations/whatsapp-business">WhatsApp Business</a>, l\'<a href="/formations/ia-ethique-conformite">éthique et la conformité des données</a> pour les équipes qui manipulent des fichiers de clients, et l\'<a href="/formations/ia-comptables-syscohada">IA pour les comptables en zone OHADA</a>. Le catalogue complet se parcourt sur <a href="/formations/">la page des formations</a>.',
                'Pour le financement, la formation d\'un salarié s\'impute le plus souvent sur le budget de l\'entreprise ou sur celui d\'un projet de bailleur. Parmi les programmes de bailleurs, le projet PROFI, financé par l\'<a href="https://www.afd.fr/fr/projets/professionnalisation-offre-de-formation-et-insertion-comores">Agence française de développement</a> à hauteur de 21,5 millions d\'euros, vise l\'employabilité des jeunes dans six établissements d\'enseignement, avec cinq secteurs dont les services numériques, mais il concerne la formation initiale et non les entreprises. Une ONG ou un projet financé peut inscrire la formation numérique de ses équipes dans une ligne du budget : Richard fournit alors le programme et le devis détaillés que le bailleur demande.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Richard vit à Cotonou, au Bénin. Les Comores sont en UTC+3, le Bénin en UTC+1 : l\'écart est de deux heures toute l\'année, sans changement d\'heure. Les plages de travail communes vont de 7 h à 20 h à Cotonou, soit de 9 h à 22 h à Moroni, ce qui laisse une large fenêtre pour les réunions, y compris en fin de journée pour un dirigeant qui doit d\'abord tenir sa boutique.',
                'La langue de travail est le français, langue officielle avec le comorien et l\'arabe. Les contenus d\'un site destiné au public local peuvent être livrés en français, avec une version en comorien ou en arabe si l\'entreprise fournit les textes : Richard prévoit les gabarits, les polices et le sens d\'écriture, et ne traduit pas lui-même ce qu\'il ne maîtrise pas.',
                'Le devis est établi en euros, la devise de référence des échanges avec l\'archipel, dont le franc comorien est arrimé à l\'euro. Le prix est fixé sur devis, après un premier échange, selon la taille du projet. Le paiement se règle par virement ou par les moyens convenus au devis.',
                'Le suivi se fait par un canal WhatsApp dédié pour les échanges rapides, par visioconférence pour les points d\'étape, et par un tableau de suivi partagé où chaque livrable a une date. La première réponse arrive sous 24 heures. Tout se déroule à distance : les recettes se font en partage d\'écran, la formation par visioconférence, et les documents se signent à distance.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise comorienne ?',
            'paragraphes' => [
                'Le prix est fixé sur devis, en euros, après le cadrage. Aucun tarif n\'est affiché d\'avance, parce que deux projets de même nom diffèrent beaucoup : une boutique de dix produits à Moroni et un outil de collecte multi-îles ne demandent pas le même travail.',
                'Ce qui fait varier le prix dans l\'archipel tient à quelques éléments. Le nombre de moyens de paiement à raccorder compte d\'abord : chaque portefeuille a sa documentation, ses tests et ses cas d\'échec, et un deuxième raccordement ajoute du travail. Le nombre d\'îles ou de sites à gérer, la nécessité de fonctionner avec une connexion coupée par moments et le nombre de langues du contenu pèsent ensuite.',
                'Les données à reprendre comptent aussi. Un fichier clients tenu sur un cahier se ressaisit, un tableur désordonné se nettoie, et c\'est souvent la partie la plus longue d\'un déploiement d\'ERP. Vient enfin la part conformité : modèles de facture à mentions complètes, clauses de sous-traitance des données, autorisation préalable si le traitement est sensible.',
                'Les coûts hors prestation sont à prévoir à part : nom de domaine, hébergement, abonnement d\'un éventuel ERP, frais des prestataires de paiement, achat de crédit pour les messages WhatsApp. Richard les liste dans le devis avec leur fournisseur, pour que l\'entreprise puisse les payer directement et garder la main sur ses comptes.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelles erreurs éviter quand on numérise une entreprise aux Comores ?',
            'texte' => 'Fermer les canaux hors ligne trop tôt, alors que deux tiers des habitants ne sont pas encore connectés. Ne proposer qu\'un portefeuille mobile, quand les clients se répartissent entre MVola, Huri Money et Holo. Afficher des prix sans préciser la taxe sur la consommation. Oublier l\'autoliquidation de la taxe sur un service acheté à l\'étranger. Héberger des données sensibles à l\'étranger sans le déclarer. Concevoir un site lourd pour des connexions mobiles inégales. Lancer un outil de gestion sans y ressaisir d\'abord le stock réel. Négliger la saisonnalité des récoltes de vanille et de girofle dans le calendrier du projet.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard peut accompagner à distance les entreprises aux Comores. Il compte plus de six ans d\'expérience, sort de l\'école EPITECH (2022), a conçu Wapy, son assistant WhatsApp à IA, et co-fonde Audyxa. Son travail sur l\'OHADA et le SYSCOHADA dans les ERP intéresse directement les entreprises d\'un pays membre de l\'organisation.',
                'Les réalisations publiées sur <a href="/realisations/">la page des réalisations</a> montrent des méthodes transposables à l\'archipel. OBA TV, une web TV sur mesure réalisée pour un client direct, vend un abonnement premium payé par MTN MoMo et Moov Money : le même schéma de confirmation de paiement s\'applique à un portefeuille comorien. KossKoss Select, une boutique en ligne lancée avec paiement par Orange Money et MTN MoMo, illustre la vente avec plusieurs portefeuilles mobiles. Le premier échange sert à vérifier ce qui se transpose et ce qui doit être refait pour MVola, Huri Money ou Holo.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre entreprise comorienne a un projet numérique à cadrer ?',
            'texte'  => 'Décrivez votre activité, vos moyens de paiement et vos contraintes (îles, connexion, factures) : Richard répond sous 24 heures, puis propose un plan par étapes avec un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Parler de mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il sur place aux Comores ?', 'r' => 'Richard accompagne les entreprises des Comores à distance, depuis Cotonou. Le cadrage, le développement, les recettes et les formations se font par visioconférence et par WhatsApp, avec deux heures d\'écart. Les documents du projet sont échangés en ligne.'],
        ['q' => 'Quelle est la devise du devis pour une entreprise comorienne ?', 'r' => 'Le devis est établi en euros. Le franc comorien étant arrimé à l\'euro, la conversion est stable ; le paiement se règle par virement ou par les moyens convenus. Le prix lui-même est fixé sur devis, après le cadrage.'],
        ['q' => 'Quels portefeuilles mobiles peut-on intégrer aux Comores ?', 'r' => 'Trois portefeuilles ressortent : MVola, de Yas (ex-Telma Comores), Huri Money, de Huri (ex-Comores Télécom), et Holo, de la Banque de Développement des Comores. Richard lit la documentation de chacun, choisit le mode d\'intégration le plus fiable et confirme les frais par écrit auprès du prestataire.'],
        ['q' => 'Qu\'est-ce que le commutateur national de paiement comorien ?', 'r' => 'C\'est une plateforme interopérable, mise en œuvre par PayLogic avec l\'appui de la Banque mondiale et opérationnelle depuis le 25 août 2025 selon Osiris. Elle relie banques, institutions de microfinance et opérateurs de mobile money pour les virements, les paiements marchands et les envois de la diaspora.'],
        ['q' => 'La taxe sur la consommation comorienne s\'applique-t-elle à un site ou à un abonnement acheté à l\'étranger ?', 'r' => 'Selon l\'article 149 du code général des impôts, édition 2023, lorsque le prestataire d\'un service n\'est pas domicilié aux Comores, la taxe est autoliquidée par le bénéficiaire sur sa déclaration mensuelle. Une entreprise assujettie doit donc l\'inscrire, au taux normal de 10 %. Confirmez la version en vigueur auprès de la direction des impôts.'],
        ['q' => 'À partir de quel chiffre d\'affaires doit-on facturer la taxe sur la consommation ?', 'r' => 'L\'article 141 exonère les entreprises dont le chiffre d\'affaires hors taxe est inférieur à 20 millions de KMF, avec une exception pour les importateurs entre 15 et 20 millions. Au-delà, la taxe s\'applique, et une caisse enregistreuse devient obligatoire pour les activités commerciales. À vérifier chaque année avec le comptable.'],
        ['q' => 'Une entreprise comorienne doit-elle déclarer un traitement de données personnelles ?', 'r' => 'La loi adoptée le 26 juin 2014 impose, avant tout traitement, une déclaration à la Commission nationale de l\'informatique et des libertés ou l\'inscription dans un registre interne. Certains traitements courants, comme la paie ou la comptabilité, sont dispensés. Santé, biométrie et transferts de données hors du pays exigent une autorisation préalable.'],
        ['q' => 'Les Comores font-elles partie de l\'OHADA ?', 'r' => 'Oui. Le traité a été ratifié le 20 février 1995 et est en vigueur depuis le 18 septembre 1995, selon le site de l\'OHADA. Les actes uniformes s\'appliquent, y compris le droit comptable : un ERP déployé aux Comores se paramètre donc avec le plan de comptes du SYSCOHADA, validé par l\'expert-comptable.'],
        ['q' => 'Un site pour les Comores doit-il être en comorien ?', 'r' => 'Le français est langue officielle avec le comorien et l\'arabe, et la plupart des sites d\'entreprise sont rédigés en français. Une version en comorien ou en arabe se prépare si l\'entreprise fournit les textes ; Richard prévoit alors les gabarits, la police et le sens d\'écriture.'],
        ['q' => 'Comment un site doit-il s\'adapter à la connexion mobile aux Comores ?', 'r' => 'Un tiers environ des habitants utilise internet, presque tous sur téléphone, d\'après la Banque mondiale et DataReportal. Richard conçoit des pages légères, des formulaires courts et une commande qui se termine par un message WhatsApp, pour qu\'une connexion intermittente n\'empêche pas la vente.'],
    ],

    'sources' => [
        ['titre' => 'Union des Comores, loi portant protection des données à caractère personnel, adoptée le 26 juin 2014', 'url' => 'https://justice.gouv.km/wp-content/uploads/2025/03/loi-du-26-juin-2014-portant-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Union des Comores, code général des impôts, édition 2023', 'url' => 'https://justice.gouv.km/wp-content/uploads/2025/03/comores-cgi-2023.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Union des Comores, décret n° 24-003/PR portant promulgation de la loi n° 23-024/AU sur les communications électroniques', 'url' => 'https://justice.gouv.km/wp-content/uploads/2025/03/decret-n-24-003pr-du-2-fevrier-2024-portant-promulgation-de-la-loi-n-23-024au-portant-modification-de-la-loi-n-14-031au-du-17-mars-2014-relative-aux-communications-electroniques.pdf', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, histoire de l\'organisation et états membres', 'url' => 'https://www.ohada.org/en/history-of-ohada/', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, indicateurs des Comores (population, internet)', 'url' => 'https://data.worldbank.org/country/comoros', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Comores', 'url' => 'https://datareportal.com/reports/digital-2026-comoros', 'date' => '2026-10-06'],
        ['titre' => 'Trésor français, indicateurs et conjoncture des Comores', 'url' => 'https://www.tresor.economie.gouv.fr/Pays/KM/indicateurs-et-conjoncture', 'date' => '2026-10-06'],
        ['titre' => 'SFI, Renforcer la résilience grâce aux services financiers numériques : Union des Comores', 'url' => 'https://www.ifc.org/content/dam/ifc/doc/mgrt/comoros-building-resilience-through-dfs.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, Comores : vers une interopérabilité complète des transactions financières', 'url' => 'https://osiris.sn/comores-vers-une-interoperabilite-complete-des-transactions-financieres.html', 'date' => '2026-10-06'],
        ['titre' => 'Developing Telecoms, Axian rebrands mobile units as Yas', 'url' => 'https://developingtelecoms.com/telecom-business/operator-news/17668-axian-rebrands-mobile-units-as-yas-for-pan-african-growth.html', 'date' => '2026-10-06'],
        ['titre' => 'Financial Afrik, lancement de Holo, la solution de banque mobile de la BDC', 'url' => 'https://www.financialafrik.com/2019/09/06/lancement-du-service-holo-la-solution-de-banque-mobile-de-la-bdc/', 'date' => '2026-10-06'],
        ['titre' => 'AFD, projet PROFI : professionnalisation de l\'offre de formation et insertion aux Comores', 'url' => 'https://www.afd.fr/fr/projets/professionnalisation-offre-de-formation-et-insertion-comores', 'date' => '2026-10-06'],
        ['titre' => 'Yas Comores, offres pour particuliers et professionnels', 'url' => 'https://yas.km/', 'date' => '2026-10-06'],
        ['titre' => 'Axian Telecom, communiqué : le groupe opère sous la marque Yas', 'url' => 'https://www.axian-telecom.com/2026/09/14/axian-telecom-to-operate-as-yas-across-its-telecom-digital-infrastructure-and-fintech/', 'date' => '2026-10-06'],
        ['titre' => 'Union des Comores, décret n° 26-003/PR portant promulgation de la loi de finances 2026', 'url' => 'https://finances.gouv.km/wp-content/uploads/2026/01/Decret-N%C2%B026-003PR-du-16-jan-2026-portant-Prom-Loi-25-020AU-portant-Loi-de-Finan.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Constitution de l\'Union des Comores (2018) : capitale et langues officielles', 'url' => 'https://constituteproject.org/constitution/Comoros_2018?lang=en', 'date' => '2026-10-06'],
        ['titre' => 'UIT, indicatifs de pays de la recommandation E.164', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, Comoros (fuseau horaire, monnaie)', 'url' => 'https://en.wikipedia.org/wiki/Comoros', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'agents-ia-chatbot-whatsapp', 'integration-whatsapp', 'integration-odoo', 'integration-dolibarr', 'application-web-sur-mesure', 'systeme-de-reservation-en-ligne', 'api-rest-integrations', 'consultant-digitalisation'],
        'formations'  => ['ia-en-entreprise', 'n8n', 'whatsapp-business', 'ia-ethique-conformite', 'ia-comptables-syscohada'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['commercants-e-commercants', 'hotellerie-restauration', 'experts-comptables'],
    ],
];
