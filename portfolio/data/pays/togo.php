<?php
// ============================================================
// data/pays/togo.php · Page pays « Togo » (vague 1D, tranche 1, XOF).
// Faits externes relevés le 06/10/2026 : ARCEP Togo (observatoire T1 2026),
// DataReportal (Digital 2026), INSEED (RGPH-5), Journal officiel (loi 2019-014),
// IPDCP, OTR, OHADA, BCEAO, presse économique togolaise.
// Clés de fiche absentes faute de source confirmée : capitale, villes, indicatif.
// Aucun projet de portfolio/data/projets-clients.php n'est situé au Togo.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Des logiciels, des automatisations et des paiements Mixx by Yas et Flooz pour les entreprises togolaises, pilotés à distance depuis Cotonou",
    'title'   => "Développeur et consultant digital au Togo | Richard SALANON",
    'meta'    => "Sites, applications, automatisation, IA, Odoo et Dolibarr pour les entreprises du Togo : paiement Mixx by Yas et Flooz, loi sur les données, devis en FCFA.",
    'en_bref' => "Richard SALANON conçoit pour les entreprises du Togo des sites, des applications, des automatisations et des intégrations d'IA, déploie Odoo ou Dolibarr et forme les équipes. Il travaille à distance depuis Cotonou, avec une heure d'écart sur Lomé, en français et avec des devis en FCFA. Les paiements s'appuient sur Mixx by Yas et Flooz, la facturation sur les règles de l'OTR et la protection des données sur la loi de 2019 contrôlée par l'IPDCP.",
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale' => ['v' => 'Lomé', 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/togo/presentation-du-togo', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+228', 'source' => 'https://www.itu.int/oth/t0202', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Français (langue officielle)', 'Éwé et kabiyè (langues nationales)', 'Mina, langue la plus parlée'], 'source' => 'https://globalvoices.org/2024/02/22/which-local-language-is-most-widely-spoken-in-togo/', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'UTC+0 toute l\'année, sans heure d\'été : une heure de moins qu\'à Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'population' => ['v' => '8 095 498 habitants au recensement de 2022, dont 42,9 % en milieu urbain ; Grand Lomé : 2 188 376', 'source' => 'https://www.koaci.com/article/2023/04/05/togo/societe/togo-5e-rgph-plus-de-8-millions-dhabitants-recenses-regions-et-villes-les-plus-peuplees_168464.html', 'date' => '2026-10-06'],
        'internet' => ['v' => '3,62 millions d\'internautes, soit 37,0 % des habitants, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-togo', 'date' => '2026-10-06'],
        'mobile' => ['v' => '9 947 573 abonnements mobiles actifs au premier trimestre 2026, soit 113,5 % de la population estimée par l\'ARCEP', 'source' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '5 201 299 comptes au premier trimestre 2026 ; 1 844 milliards de FCFA de transactions sur le trimestre', 'source' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Logistique et transit autour du port de Lomé : 2,4 millions d\'équivalents vingt pieds en 2025, en hausse de 16 %'], 'source' => 'https://afrique.le360.ma/economie/togo-le-trafic-de-conteneurs-au-port-de-lome-en-hausse-de-16-en-2025_CZ55MVGPVJDRPOLJMFCX5EY7OY/', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Franc CFA (XOF), monnaie commune de l\'Union monétaire ouest-africaine (UMOA), émise par la BCEAO', 'source' => 'https://www.bceao.int/fr/content/presentation-de-lumoa', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Mixx (YAS Togo)', 'Flooz (Moov Africa Togo)'], 'source' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['PayDunya (T-Money, devenu Mixx by Yas, Flooz et cartes bancaires, selon son annonce de 2022)'], 'source' => 'https://www.wearetech.africa/fr/fils/actualites/finance/la-fintech-senegalaise-paydunya-s-installe-au-togo', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Loi n° 2019-014 du 29 octobre 2019 relative à la protection des données à caractère personnel', 'source' => 'https://www.afapdp.org/wp-content/uploads/2020/02/TOGO-JOS_29_10_2019-64E-ANNEE-N°26-TER.pdf', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Instance de protection des données à caractère personnel (IPDCP), en activité depuis le 28 mars 2025', 'source' => 'https://cio-mag.com/etiquette/protection-des-donnees-personnelles', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture normalisée en vigueur ; facture électronique certifiée prévue par la loi de finances 2026, calendrier non arrêté', 'source' => 'https://edicomgroup.com/fr/blog/facture-electronique-certifiee-togo', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Taux normal de 18 % ; TVA sur les services numériques de fournisseurs non résidents prévue par la loi de finances 2026', 'source' => 'https://www.vatupdate.com/2026/05/14/togo-imposes-18-vat-on-non-resident-digital-services-under-2026-finance-law/', 'date' => '2026-10-06'],
        'ohada' => ['v' => 'Membre : traité ratifié le 27 octobre 1995, en vigueur au Togo depuis le 19 janvier 1996', 'source' => 'https://www.ohada.com/etats-membres/togo.html', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 2017-07 du 22 juin 2017 sur les transactions électroniques (contrats et commerce électroniques)', 'source' => 'https://ictpolicyafrica.org/fr/entity/mlcgw1bs05h', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Fonds national d\'apprentissage, de formation et de perfectionnement professionnels (FNAFPP), créé par une loi de 2010', 'source' => 'https://www.republicoftogo.com/toutes-les-rubriques/politique/miser-sur-la-formation-professionnelle', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à Lomé (UTC+0 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Togo, et que change-t-il pour un projet ?',
            'paragraphes' => [
                "Le Togo compte 8 095 498 habitants selon le recensement de 2022 de l'INSEED, dont 42,9 % vivent en ville ; la région du Grand Lomé en rassemble à elle seule 2 188 376. Le téléphone est l'outil numérique de presque tout le monde. Selon l'observatoire du premier trimestre 2026 de l'ARCEP, le régulateur des communications électroniques, le pays comptait 9 947 573 abonnements mobiles actifs, soit 113,5 % de la population estimée par l'autorité, avec 25 % de plus qu'un an auparavant.",
                "Cette croissance se lit surtout en données mobiles. L'ARCEP dénombre 5 464 688 abonnements haut débit 3G ou 4G au premier trimestre 2026, un taux de pénétration de 62,35 %, et une consommation moyenne passée de 58 à 115 mégaoctets par jour et par abonné en un an. À l'inverse, la fibre à domicile reste marginale : 145 344 abonnements, soit 1,66 % de la population. Pour un projet, cela signifie qu'un site ou une application se pense d'abord pour un écran de téléphone, sur une connexion mobile, avant le poste de bureau.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien de Togolais sont réellement en ligne, et pourquoi les chiffres divergent-ils ?',
            'paragraphes' => [
                "Les sources ne comptent pas la même chose. DataReportal, dans son rapport Digital 2026, relève 3,62 millions d'internautes fin 2025, soit 37,0 % des habitants, et 8,40 millions de connexions mobiles, soit 86,0 % de la population, sur la base d'une population de 9,77 millions. L'ARCEP compte des abonnements, donc des cartes SIM, et les rapporte à une population estimée à 8 764 871 habitants : une même personne peut en détenir deux, d'où un taux supérieur à 100 %.",
                "Retenez deux enseignements pratiques. D'abord, le taux d'internautes de 37 % invite à ne pas bâtir une activité sur un seul canal en ligne : un site vitrine se complète par un numéro WhatsApp et par la fiche d'établissement Google. Ensuite, le nombre d'abonnements dépasse celui des habitants : un identifiant fondé sur le numéro de téléphone doit accepter qu'un client change de numéro ou en possède plusieurs.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir pour travailler avec une entreprise togolaise ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour encaisser au Togo ?',
            'paragraphes' => [
                "Au Togo, encaisser en ligne veut d'abord dire accepter le mobile money. L'ARCEP recense 5 201 299 comptes au premier trimestre 2026, soit 59,3 % de pénétration rapportée à la population, et 61 157 points de vente. Les transactions ont atteint 1 844 milliards de FCFA sur le seul trimestre, 52 % de plus qu'un an plus tôt. Deux services se partagent le marché : Mixx by Yas, anciennement TMoney, chez YAS Togo (ex-Togocom), qui détient 59 % des comptes, et Flooz chez Moov Africa Togo, avec 41 %.",
                "Le changement de nom est récent. Selon la presse économique togolaise, Togocom, propriété du groupe Axian, est devenu Yas et TMoney Mixx by Yas fin novembre 2024. Un cahier des charges rédigé avec l'ancien nom risque donc de viser une marque qui n'existe plus : vérifiez toujours auprès de l'opérateur la documentation de l'interface de programmation en vigueur. Un troisième acteur est apparu : Gozem Money, lancé en octobre 2025 avec NSIA Banque Togo, qui annonce des transferts entre opérateurs.",
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Comment choisir entre Mixx by Yas, Flooz, un agrégateur et la carte ?',
            'intro'  => 'Le bon montage dépend de ce que vous vendez, à qui, et de la place que vous voulez laisser à l\'administration de comptes marchands. Voici les options et leur logique pour une entreprise togolaise.',
            'items'  => [
                ['titre' => 'Un contrat direct avec un opérateur', 'texte' => "Un accord avec YAS Togo pour Mixx ou avec Moov Africa Togo pour Flooz donne la relation la plus directe, au prix de deux dossiers, de deux interfaces et de deux rapprochements bancaires. Il se justifie pour un volume élevé ou une exigence de relation commerciale propre."],
                ['titre' => 'Un agrégateur de paiement', 'texte' => "PayDunya, sénégalais, est présent au Togo depuis mars 2022 et annonçait alors T-Money (devenu Mixx by Yas), Flooz et les cartes bancaires derrière une seule intégration ; vérifiez auprès de lui les moyens actuellement ouverts. Un agrégateur réduit le travail technique, mais ses frais et délais d'ouverture de compte se vérifient dans son contrat, pas dans un article de blog."],
                ['titre' => 'Le paiement à la livraison et le virement', 'texte' => "Pour des produits chers ou des clients méfiants, le paiement à la réception reste courant. Il demande un suivi des commandes et des relances : le logiciel sait marquer une commande comme livrée, encaissée par le livreur, puis versée à l'entreprise."],
                ['titre' => 'La carte bancaire', 'texte' => "Elle compte pour les clients de la diaspora et les achats d'entreprise à entreprise, bien moins pour la vente de détail locale. Elle passe par l'agrégateur ou par une banque, avec les contrôles d'identité de l'entreprise que cela suppose."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule l\'intégration d\'un paiement mobile, du cahier des charges à la mise en production ?',
            'items' => [
                ['titre' => 'Choisir l\'opérateur ou l\'agrégateur', 'texte' => "Le projet peut partir de votre clientèle réelle : combien de vos clients paient en Mixx, en Flooz, par carte. Si votre base est surtout mobile, on commence par le service le plus utilisé, puis on ajoute l'autre.", 'duree' => 'Selon le projet'],
                ['titre' => 'Ouvrir le compte marchand', 'texte' => "L'ouverture du compte dépend de l'opérateur ou de l'agrégateur et de vos pièces d'entreprise ; son délai ne dépend pas de Richard, qui peut préparer le dossier avec vous pour limiter les allers-retours.", 'duree' => 'selon l\'opérateur'],
                ['titre' => 'Développer et tester en bac à sable', 'texte' => "Création du paiement, retour de l'opérateur, notification serveur et page de confirmation. Les cas d'échec peuvent être testés autant que le succès : code mal saisi, délai dépassé, solde insuffisant, coupure du réseau en cours de paiement.", 'duree' => 'Selon le projet'],
                ['titre' => 'Rapprocher et mettre en production', 'texte' => "Chaque paiement reçu est rapproché de sa commande et de sa facture dans votre logiciel. Une série d'essais réels de faible montant peut précéder la bascule en production, suivie d'un suivi des premiers jours.", 'duree' => 'Selon le projet'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Togo ?',
            'paragraphes' => [
                "Trois textes pèsent sur un projet : la loi n° 2019-014 du 29 octobre 2019 sur les données personnelles, la loi n° 2017-07 du 22 juin 2017 sur les transactions électroniques, et les règles fiscales de l'Office togolais des recettes, l'OTR. Le Togo est aussi membre de l'OHADA depuis l'entrée en vigueur du traité le 19 janvier 1996, ce qui impose aux entreprises le droit des affaires et le plan comptable SYSCOHADA communs aux États membres.",
                "Côté données, l'autorité est l'Instance de protection des données à caractère personnel, l'IPDCP. Créée par la loi de 2019, elle a lancé ses activités le 28 mars 2025 à Lomé. Selon le texte de la loi publié au Journal officiel, les traitements hors régimes particuliers font l'objet d'une déclaration à l'IPDCP, qui délivre un récépissé sous un mois, sauf prorogation motivée, et certains traitements demandent une autorisation préalable : données génétiques, recherche en santé, infractions et condamnations, biométrie, interconnexion de fichiers, numéro national d'identification. Le texte prévoit des sanctions de l'Instance (retrait de l'autorisation, amende jusqu'à 100 millions de FCFA) et des peines pénales, par exemple un à cinq ans d'emprisonnement et un à dix millions de FCFA d'amende pour la conservation de données sensibles sans consentement exprès.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où doivent être hébergées les données personnelles des Togolais ?',
            'paragraphes' => [
                "La question est ouverte, et il faut la traiter dès le cadrage. Début 2026, le président de l'IPDCP déclarait que l'objectif final reste d'imposer le stockage des données personnelles des Togolais au Togo, et l'instance faisait état de plaintes et de demandes d'autorisation reçues depuis mars 2025. Au 6 octobre 2026, aucune règle d'hébergement précise n'est publiée : elle peut venir par décret ou par délibération de l'instance.",
                "Concrètement, pour une application qui collecte des données de clients togolais, Richard documente où chaque donnée est stockée, sépare les données personnelles des autres pour pouvoir les déplacer, et prévoit des sauvegardes exportables. Un transfert hors du Togo se prépare avec la base juridique prévue par la loi : consentement ponctuel de la personne ou autorisation de l'IPDCP lorsque des garanties suffisantes sont apportées. Ce travail évite une migration coûteuse le jour où l'exigence devient formelle.",
            ],
        ],
        [
            'type'  => 'tableau',
            'titre' => 'Facture normalisée, facture électronique, TVA : que doit prévoir une entreprise togolaise ?',
            'legende' => 'Points de conformité fiscale à traiter dans un logiciel de gestion ou de vente au Togo, état au 6 octobre 2026',
            'entetes' => ['Sujet', 'Ce que disent les sources', 'Ce que cela change dans le logiciel'],
            'lignes' => [
                ['Facture normalisée', "L'OTR promeut la facture normalisée avec la campagne « Adoptons la facture normalisée » sur son portail.", "Le modèle de facture doit reprendre les mentions de l'OTR et une numérotation continue et sans trou."],
                ['Facture électronique certifiée', "La loi de finances 2026 la prévoit entre assujettis à la TVA ; l'OTR a tenu une séance de travail avec les opérateurs économiques le 10 septembre 2026 sur un déploiement progressif. Aucune date générale n'est confirmée.", "Prévoir un export structuré de chaque facture et un champ pour l'identifiant renvoyé par la plateforme de l'OTR ou d'un opérateur agréé."],
                ['Mode dégradé', "Une coupure internet peut bloquer une validation en temps réel ; aucune règle de repli n'est confirmée au 6 octobre 2026.", "Le logiciel doit pouvoir émettre une facture hors ligne et la transmettre ensuite, avec un journal des envois."],
                ['TVA sur les services numériques', "Un taux de 18 % s'applique ; la loi de finances 2026 vise aussi les fournisseurs numériques non résidents, par l'intermédiaire des plateformes. Les modalités attendaient des précisions.", "La fiscalité de chaque cas ne se tranche pas dans le logiciel : elle se valide avec votre expert-comptable avant la première facture."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises togolaises, selon leur besoin ?',
            'legende' => 'Besoins fréquents des entreprises du Togo, et le service qui y répond',
            'entetes' => ['Besoin typique au Togo', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne et encaisser par Mixx by Yas ou Flooz', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Rassurer un partenaire étranger d\'un transitaire ou d\'un importateur de Lomé', 'Site vitrine bilingue', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Facturer, suivre le stock et tenir une comptabilité SYSCOHADA', 'ERP complet', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Équiper une PME avec un ERP plus léger, installé sur votre serveur', 'ERP modulaire', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp à toute heure', 'Assistant conversationnel', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Relancer les impayés et confirmer les paiements sans ressaisie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Relier le logiciel de gestion, le site et les opérateurs de paiement', 'Interfaces de programmation', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Apparaître sur Google quand on cherche un prestataire à Lomé', 'Référencement local', '<a href="/services/seo-local-google-business">SEO local et fiche Google</a>'],
                ['Suivre des dossiers d\'expédition ou des rotations de camions', 'Application sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Choisir par où commencer la digitalisation', 'Cadrage', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Former les équipes aux nouveaux outils', 'Formation', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs du Togo ?',
            'items' => [
                [
                    'secteur'  => 'Transit et logistique autour du port de Lomé',
                    'probleme' => 'Le port de Lomé a manipulé 2,4 millions d\'équivalents vingt pieds en 2025, en hausse de 16 %, et un transitaire jongle avec des dizaines de dossiers dont le statut se demande par téléphone.',
                    'solution' => 'Un tableau de suivi des dossiers (déclaration, scanner, enlèvement, livraison) avec un message WhatsApp automatique au client à chaque étape, et les documents rangés par dossier. Une vitrine bilingue complète le dispositif pour les donneurs d\'ordre étrangers.',
                    'lien'     => ['url' => '/digitaliser-transit-lome', 'texte' => 'Digitaliser un transitaire à Lomé'],
                ],
                [
                    'secteur'  => 'Plateforme industrielle d\'Adétikopé et port sec',
                    'probleme' => 'Une unité installée au nord de Lomé, dans la zone d\'Adétikopé, reçoit des matières, produit, expédie, et ses stocks vivent dans des tableurs que trois personnes mettent à jour.',
                    'solution' => 'Un ERP déployé par paliers : achats et stock d\'abord, puis ventes, facturation et comptabilité SYSCOHADA, avec des factures conformes aux règles de l\'OTR. Le choix entre Odoo et Dolibarr se tranche sur le nombre d\'utilisateurs et l\'hébergement.',
                    'lien'     => ['url' => '/integration-odoo-lome', 'texte' => 'Odoo à Lomé'],
                ],
                [
                    'secteur'  => 'Commerce de détail et vente en ligne',
                    'probleme' => 'Un commerçant vend déjà par message, reçoit des captures d\'écran de transferts Flooz ou Mixx, et vérifie chaque paiement à la main avant de livrer.',
                    'solution' => 'Une boutique avec paiement mobile intégré : la commande n\'est confirmée qu\'après la notification de l\'opérateur, le reçu part seul, et le paiement à la livraison reste possible pour les clients qui préfèrent. Le catalogue se met à jour depuis un tableau de bord simple.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Boutique en ligne'],
                ],
                [
                    'secteur'  => 'Services payés par mobile money : écoles, cliniques, prestataires',
                    'probleme' => 'Une école privée ou un cabinet encaisse des frais échelonnés par transfert mobile, et le comptable passe des heures à rapprocher chaque versement du bon dossier.',
                    'solution' => 'Un espace où chaque famille ou patient voit son solde, paie par Mixx by Yas ou Flooz et reçoit un reçu ; le versement est rattaché au dossier par la notification de l\'opérateur, puis envoyé à la comptabilité sans ressaisie.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'API et intégrations'],
                ],
                [
                    'secteur'  => 'Entreprises assujetties à la TVA qui anticipent la facture électronique',
                    'probleme' => 'La loi de finances 2026 prévoit la facture électronique certifiée entre assujettis, sans date générale arrêtée : on ne veut ni attendre ni développer à l\'aveugle.',
                    'solution' => 'Un logiciel de facturation dont les données sont déjà structurées, qui sait émettre hors ligne et conserver un journal d\'envoi. Le jour où l\'OTR fixe le calendrier et la plateforme, le raccordement est un ajout et non une refonte.',
                    'lien'     => ['url' => '/digitalisation-entreprise-lome', 'texte' => 'Digitalisation d\'entreprise à Lomé'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes togolaises, et comment financer la formation ?',
            'paragraphes' => [
                "Les formations se donnent à distance, en visioconférence, avec des exercices sur les outils réels de l'entreprise. Le format à distance évite de payer un trajet. Pour une première séance sur l'IA, la page <a href=\"/formation-ia-entreprise-lome\">formation IA en entreprise à Lomé</a> détaille le déroulé.",
                "Pour le financement, le Fonds national d'apprentissage, de formation et de perfectionnement professionnels, le FNAFPP, a été créé par une loi adoptée par l'Assemblée nationale le 30 juin 2010 ; selon la presse togolaise, il finance des projets collectifs de formation et de restructuration des centres d'enseignement technique et d'apprentissage. Les conditions d'accès d'une entreprise à ce fonds pour une formation numérique ne sont pas publiées : renseignez-vous directement auprès de lui avant de compter dessus.",
                "Quelques parcours adaptés au contexte togolais : <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo et la comptabilité SYSCOHADA</a> pour les équipes financières, <a href=\"/formations/whatsapp-business\">WhatsApp Business</a> pour la relation client, <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour les dirigeants et <a href=\"/formations/securite-donnees-dirigeants\">la sécurité des données</a>, utile depuis la mise en route de l'IPDCP. Le catalogue complet est sur <a href=\"/formations/\">la page des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                "Lomé est à environ 150 kilomètres de Cotonou, mais la collaboration se fait à distance. Le Togo vit à l'heure de Greenwich toute l'année, alors que le Bénin a une heure d'avance : quand il est 9 h à Lomé, il est 10 h à Cotonou. Les plages de réponse de Richard, de 7 h à 20 h heure de Cotonou, couvrent donc de 6 h à 19 h chez vous. Le français est la langue de travail, ce qui évite toute traduction dans les échanges et les documents.",
                "Les devis sont libellés en FCFA, la monnaie de l'UEMOA que le Togo partage avec le Bénin : aucune conversion de devise, aucun écart de change. Le règlement se fixe au devis parmi les modes acceptés par Richard, dont le virement et le mobile money. Le suivi peut passer par WhatsApp et par des points en visioconférence. Toute demande reçoit une réponse sous 24 heures.",
            ],
        ],
        [
            'type'        => 'tableau',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise togolaise ?',
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
            'titre'       => 'Qu\'est-ce qui fait varier le prix d\'un projet au Togo ?',
            'paragraphes' => [
                "Au-delà de ces prix de départ, tout autre projet est chiffré sur devis, en FCFA, après un cadrage. Plusieurs éléments propres au Togo font varier le montant. Le nombre de moyens de paiement intégrés : un seul opérateur coûte moins qu'un agrégateur plus le paiement à la livraison. La conformité de facturation : un logiciel qui émet des factures normalisées dès maintenant et se prépare à la facture électronique demande plus de travail qu'un simple modèle de document.",
                "Pèsent aussi l'hébergement des données personnelles, qui peut imposer un serveur choisi et des sauvegardes séparées, le volume de données à reprendre d'anciens fichiers et la formation des équipes. Les frais de l'opérateur ou de l'agrégateur ne font pas partie du devis : ils se règlent directement avec lui, et il est conseillé de les faire figurer par écrit dans votre contrat avec lui avant de bâtir un modèle économique sur eux.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi un cahier des charges rédigé avec « TMoney » ou « Togocom » est-il déjà périmé ?',
            'texte' => 'Fin novembre 2024, Togocom est devenu Yas et son mobile money TMoney a pris le nom de Mixx by Yas, selon la presse économique togolaise. L\'ARCEP désigne désormais les opérateurs sous les noms YAS Togo et Moov Africa Togo, et les services sous les noms Mixx et Flooz. Un prestataire qui vous remet une offre citant encore TMoney travaille peut-être sur une documentation ancienne : demandez la version actuelle de l\'interface de programmation, avec la date.',
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs voit-on le plus souvent dans les projets numériques au Togo ?',
            'intro'  => 'Ces erreurs viennent des particularités togolaises décrites plus haut ; chacune se prévient dès le cadrage.',
            'items'  => [
                ['titre' => 'Traiter des données sans déclaration à l\'IPDCP', 'texte' => "La loi de 2019 prévoit une déclaration préalable, et l'instance, active depuis mars 2025, a imposé, à partir du 1er octobre 2025, la déclaration des caméras installées dans les lieux publics ou collectifs. Une application qui collecte des noms, des numéros et des historiques d'achats mérite sa déclaration avant la mise en ligne."],
                ['titre' => 'Attendre une date officielle pour la facture électronique', 'texte' => "Au 6 octobre 2026, aucune date générale n'est confirmée, mais l'OTR a rencontré les opérateurs économiques et le Conseil national du patronat le 10 septembre 2026 pour préparer un déploiement progressif. Mieux vaut des données de facturation propres dès maintenant qu'une refonte précipitée plus tard."],
                ['titre' => 'Confondre abonnements et habitants', 'texte' => "113,5 % de pénétration mobile ne signifie pas que chaque habitant a un téléphone connecté : le taux compte des cartes SIM. Dimensionner un service sur ce taux surestime la clientèle réelle."],
                ['titre' => 'Prévoir un seul opérateur de mobile money', 'texte' => "Mixx détient 59 % des comptes et Flooz 41 % : une boutique qui n'accepte que l'un des deux écarte une part importante de ses clients potentiels, selon l'ARCEP, et la question se reposera si Gozem Money s'installe."],
                ['titre' => 'Chiffrer en euros une offre pour une entreprise du Togo', 'texte' => "Les clients togolais raisonnent en FCFA. Un devis en euros les expose à une conversion inutile : l'équivalent en euros se donne seulement à titre indicatif."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet numérique togolais à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                "Son expérience dépasse six ans, il s'est formé à EPITECH en 2022, il a conçu Wapy, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d'Afrique francophone, et il a co-fondé <a href=\"https://audyxa.com\">Audyxa</a>. Le Togo est voisin du Bénin : le même franc CFA, la même langue de travail, un décalage d'une heure, ce qui simplifie les devis, les points et les livraisons. Le tableau ci-dessous précise ce qu'il a déjà fait au Togo, sans rien inventer.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Richard a-t-il déjà travaillé avec des entreprises togolaises ?',
            'legende' => 'Expérience de Richard et mode de travail pour les entreprises togolaises',
            'entetes' => ['Question', 'Réponse'],
            'lignes'  => [
                ['Déjà travaillé', 'oui : Richard a déjà travaillé avec des entreprises au Togo.'],
                ['Réalisations', 'Les projets présentés figurent sur <a href="/realisations/">la page des réalisations</a>.'],
                ['Mode de travail', 'À distance depuis Cotonou, en français, avec des devis en FCFA.'],
                ['Pour aller plus loin', '<a href="/richard-salanon">Le parcours de Richard</a> et <a href="/a-propos/">la page À propos</a>.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous dirigez une entreprise au Togo et avez un projet numérique ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels et ce que vous voulez encaisser par Mixx by Yas ou Flooz : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il sur place à Lomé ?', 'r' => "Non, pas pour le moment : l'intervention est à distance, depuis Cotonou. Lomé est à environ 150 kilomètres, mais les points se font en visioconférence et par message, avec une heure d'écart. Cela convient à presque tous les projets de logiciel, d'automatisation et de formation."],
        ['q' => 'Quels moyens de paiement mobile fonctionnent au Togo ?', 'r' => "Mixx by Yas, le nouveau nom de TMoney chez YAS Togo, et Flooz, chez Moov Africa Togo. Selon l'ARCEP, ils totalisent 5 201 299 comptes au premier trimestre 2026, Mixx pour 59 % et Flooz pour 41 %. Gozem Money, lancé en octobre 2025 avec NSIA Banque Togo, s'ajoute comme troisième acteur."],
        ['q' => 'TMoney existe-t-il encore ?', 'r' => "Le nom a changé. Fin novembre 2024, Togocom est devenu Yas et TMoney s'appelle désormais Mixx by Yas, selon la presse économique togolaise. Dans l'observatoire de l'ARCEP du premier trimestre 2026, le service figure sous le nom Mixx. Utilisez la documentation actuelle de l'opérateur."],
        ['q' => 'Faut-il déclarer son site ou son application à l\'IPDCP ?', 'r' => "Selon la loi n° 2019-014 (Journal officiel du 29 octobre 2019), la plupart des traitements de données personnelles se déclarent à l'IPDCP, qui délivre un récépissé, et certains (données génétiques, recherche en santé, données judiciaires, biométrie) demandent son autorisation. Confirmez les formalités actuelles auprès de l'instance, active depuis le 28 mars 2025."],
        ['q' => 'Les données personnelles doivent-elles rester au Togo ?', 'r' => "Au 6 octobre 2026, aucune règle d'hébergement précise n'est publiée, mais le président de l'IPDCP a déclaré début 2026 que l'objectif final était d'imposer le stockage des données personnelles des Togolais au Togo. La loi encadre déjà les transferts hors du pays. Un projet doit donc documenter où sont stockées les données."],
        ['q' => 'La facture électronique est-elle obligatoire au Togo ?', 'r' => "La loi de finances 2026 la prévoit entre assujettis à la TVA et pour certains acomptes, et l'OTR peut créer une plateforme nationale ou agréer des plateformes privées. Au 6 octobre 2026, aucune date générale n'était confirmée ; la facture normalisée reste la référence."],
        ['q' => 'Le Togo applique-t-il l\'OHADA et le SYSCOHADA ?', 'r' => "Oui. Le Togo a ratifié le traité de l'OHADA le 27 octobre 1995 et il y est en vigueur depuis le 19 janvier 1996. Les entreprises togolaises tiennent donc leur comptabilité selon le SYSCOHADA, ce qui conditionne la localisation comptable choisie dans Odoo ou Dolibarr."],
        ['q' => 'Quel est le décalage horaire entre Cotonou et Lomé ?', 'r' => "Une heure : Lomé est à UTC+0 toute l'année, Cotonou à UTC+1. Les plages de réponse de Richard, de 7 h à 20 h heure de Cotonou, correspondent à 6 h à 19 h à Lomé."],
        ['q' => 'En quelle monnaie sont établis les devis pour le Togo ?', 'r' => "En FCFA, monnaie commune de l'UEMOA gérée par la BCEAO. Les prix de départ publiés sont de 150 000 FCFA pour une page d'atterrissage, 300 000 FCFA pour un site vitrine et 75 000 FCFA pour le référencement naturel. Les autres projets se chiffrent sur devis."],
        ['q' => 'Comment financer une formation au numérique au Togo ?', 'r' => "Le FNAFPP, créé par une loi de 2010, finance des projets collectifs de formation et de perfectionnement professionnels. Ses conditions d'accès pour une entreprise ne sont pas publiées : contactez-le directement avant de budgéter."],
    ],

    'sources' => [
        ['titre' => 'ARCEP Togo, observatoire des marchés des communications électroniques, premier trimestre 2026', 'url' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Togo', 'url' => 'https://datareportal.com/reports/digital-2026-togo', 'date' => '2026-10-06'],
        ['titre' => 'Recensement général de la population et de l\'habitat de 2022 (INSEED), résultats rapportés par Koaci', 'url' => 'https://www.koaci.com/article/2023/04/05/togo/societe/togo-5e-rgph-plus-de-8-millions-dhabitants-recenses-regions-et-villes-les-plus-peuplees_168464.html', 'date' => '2026-10-06'],
        ['titre' => 'Ministère français de l\'Europe et des Affaires étrangères, présentation du Togo (capitale)', 'url' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/togo/presentation-du-togo', 'date' => '2026-10-06'],
        ['titre' => 'République du Togo, nouvelle règle pour les caméras de sécurité (IPDCP)', 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/societe/nouvelle-regle-pour-vos-cameras-de-securite', 'date' => '2026-10-06'],
        ['titre' => 'Journal officiel de la République togolaise du 29 octobre 2019 (loi relative à la protection des données personnelles)', 'url' => 'https://www.afapdp.org/wp-content/uploads/2020/02/TOGO-JOS_29_10_2019-64E-ANNEE-N°26-TER.pdf', 'date' => '2026-10-06'],
        ['titre' => 'CIO Mag, au Togo, l\'IPDCP entame sa mission', 'url' => 'https://cio-mag.com/etiquette/protection-des-donnees-personnelles', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, nouvelles exigences de l\'État aux opérateurs sur les données numériques', 'url' => 'https://fr.allafrica.com/stories/202601310167.html', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, protéger les données, protéger la liberté', 'url' => 'https://fr.allafrica.com/stories/202512040384.html', 'date' => '2026-10-06'],
        ['titre' => 'EDICOM, facturation électronique au Togo et loi de finances 2026', 'url' => 'https://edicomgroup.com/fr/blog/facture-electronique-certifiee-togo', 'date' => '2026-10-06'],
        ['titre' => 'Office togolais des recettes, portail officiel', 'url' => 'https://otr.tg', 'date' => '2026-10-06'],
        ['titre' => 'VAT Update, TVA de 18 % sur les services numériques de non-résidents au Togo', 'url' => 'https://www.vatupdate.com/2026/05/14/togo-imposes-18-vat-on-non-resident-digital-services-under-2026-finance-law/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, le Togo', 'url' => 'https://www.ohada.com/etats-membres/togo.html', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, présentation de l\'UMOA (membres, franc CFA émis par la BCEAO)', 'url' => 'https://www.bceao.int/fr/content/presentation-de-lumoa', 'date' => '2026-10-06'],
        ['titre' => 'République du Togo, Togocom devient Yas et TMoney devient Mixx by Yas', 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/eco-finance/nouvelle-marque-nouvelles-ambitions', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, Gozem lance l\'argent mobile au Togo avec NSIA Banque', 'url' => 'https://fr.allafrica.com/stories/202510150468.html', 'date' => '2026-10-06'],
        ['titre' => 'We Are Tech Africa, PayDunya s\'installe au Togo', 'url' => 'https://www.wearetech.africa/fr/fils/actualites/finance/la-fintech-senegalaise-paydunya-s-installe-au-togo', 'date' => '2026-10-06'],
        ['titre' => 'Le360, le trafic de conteneurs du port de Lomé en hausse de 16 % en 2025', 'url' => 'https://afrique.le360.ma/economie/togo-le-trafic-de-conteneurs-au-port-de-lome-en-hausse-de-16-en-2025_CZ55MVGPVJDRPOLJMFCX5EY7OY/', 'date' => '2026-10-06'],
        ['titre' => 'ICT Policy Africa, loi togolaise n° 2017-07 sur les transactions électroniques', 'url' => 'https://ictpolicyafrica.org/fr/entity/mlcgw1bs05h', 'date' => '2026-10-06'],
        ['titre' => 'République du Togo, miser sur la formation professionnelle (FNAFPP)', 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/politique/miser-sur-la-formation-professionnelle', 'date' => '2026-10-06'],
        ['titre' => 'Global Voices, les langues du Togo', 'url' => 'https://globalvoices.org/2024/02/22/which-local-language-is-most-widely-spoken-in-togo/', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires : liens de zones (Africa/Lome)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'site-vitrine-professionnel', 'integration-odoo', 'integration-dolibarr', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'seo-local-google-business', 'application-web-sur-mesure', 'formation-en-entreprise'],
        'formations'  => ['odoo-comptabilite-syscohada', 'whatsapp-business', 'ia-en-entreprise', 'securite-donnees-dirigeants'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'metiers'     => ['logisticiens-transitaires', 'commercants-e-commercants', 'banques-microfinance'],
    ],
];
