<?php
// ============================================================
// data/pays/rwanda.php · Page pays « Rwanda » (vague 1D, tranche T5).
// Faits externes vérifiés le 06/10/2026 : NISR (recensement 2022), RURA
// (statistiques du premier trimestre 2026), Banque nationale du Rwanda et
// eKash (juillet 2026), documentation MTN MoMo et Flutterwave, NCSA et loi
// n° 058/2021, Rwanda Revenue Authority (arrêtés n° 004/26/10/TC sur la TVA
// en ligne et n° 006/26/10/TC sur la facturation électronique), Rwanda TVET
// Board, RDB, OHADA.
// Devise des devis : euros. Aucun prix chiffré de Richard.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Entreprises du Rwanda : sites, paiements MTN MoMo et Airtel Money, ERP et automatisations, pilotés à distance depuis Cotonou',
    'title'   => 'Développeur web au Rwanda, à distance | Richard SALANON',
    'meta'    => 'Richard SALANON accompagne à distance les entreprises du Rwanda : sites, paiement MTN MoMo et Airtel Money, ERP, automatisation et IA. Devis en euros.',
    'en_bref' => 'Richard SALANON conçoit pour les entreprises rwandaises des sites, des applications, des automatisations, des intégrations d\'IA et des déploiements Odoo ou Dolibarr, entièrement à distance depuis Cotonou. Les paiements se branchent sur MTN MoMo et Airtel Money, les factures suivent les règles de la Rwanda Revenue Authority, les données respectent la loi n° 058/2021. Le cadrage se fait en français ou en anglais, avec une heure de décalage. Chaque projet est chiffré sur devis, en euros.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Kigali', 'source' => 'https://en.wikipedia.org/wiki/Kigali', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'Heure d\'Afrique centrale, UTC+2 toute l\'année, sans heure d\'été ; Cotonou est à UTC+1, soit une heure de décalage', 'source' => 'https://en.wikipedia.org/wiki/Time_in_Rwanda', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+250', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Kinyarwanda (langue nationale)', 'anglais', 'français', 'kiswahili (langues officielles)'], 'source' => 'https://en.wikipedia.org/wiki/Language_policy_in_Rwanda', 'date' => '2026-10-06'],
        'population' => ['v' => '13 246 394 habitants au recensement d\'août 2022, dont 1 745 555 dans la ville de Kigali', 'source' => 'https://statistics.gov.rw/node/87', 'date' => '2026-10-06'],
        'internet' => ['v' => '74,5 abonnements internet pour 100 habitants en mars 2026, dont 10 661 122 abonnements internet mobiles actifs', 'source' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf', 'date' => '2026-10-06'],
        'mobile' => ['v' => '14 001 080 cartes SIM actives en mars 2026, soit 97,1 pour 100 habitants ; MTN Rwandacell 66,3 %, Airtel Rwanda 33,7 %', 'source' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '8 558 024 cartes SIM liées à un compte actif en mars 2026 (+15,1 % sur un an) ; MTN 85,7 %, Airtel 14,3 %', 'source' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Agriculture', 'tourisme', 'services financiers', 'TIC', 'santé', 'éducation', 'mines', 'construction et immobilier'], 'source' => 'https://rdb.rw/investment-opportunities/', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Franc rwandais (RWF) ; depuis le 14 juillet 2026, les transferts interopérables entre comptes bancaires et portefeuilles mobiles passent par eKash (frais de 20 RWF au plus, jusqu\'à 10 millions de RWF par transfert)', 'source' => 'https://techafricanews.com/2026/07/13/rwanda-launches-full-interoperability-on-ekash-national-payment-system/', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['MTN MoMo (MTN Rwandacell)', 'Airtel Money (Airtel Rwanda)'], 'source' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['Flutterwave (mobile money en RWF, avec redirection et webhook)'], 'source' => 'https://developer.flutterwave.com/docs/rwanda', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Loi n° 058/2021 sur la protection des données personnelles et de la vie privée, en vigueur depuis le 15 octobre 2021', 'source' => 'https://dataprotection.africa/rwanda/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'National Cyber Security Authority (NCSA), autorité de contrôle de la loi', 'source' => 'https://dataprotection.africa/rwanda/', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Système de facturation électronique certifié par l\'administration fiscale, selon l\'arrêté ministériel n° 006/26/10/TC du 24 septembre 2026, qui abroge l\'arrêté de 2013 sur les machines de facturation électronique (EBM) ; un contribuable non tenu de déposer la déclaration annuelle d\'impôt sur le revenu n\'a pas à l\'utiliser pour chaque vente', 'source' => 'https://www.rra.gov.rw/fileadmin/user_upload/Ministerial_order_EBM.pdf', 'date' => '2026-10-06'],
        'tva' => ['v' => 'TVA au taux normal de 18 %, étendue aux biens et services fournis en ligne par l\'arrêté ministériel n° 004/26/10/TC du 29 avril 2026', 'source' => 'https://www.rra.gov.rw/fileadmin/Folder_for_2025/Ministerial_Order_VAT_on_Online_Services_April_2026.pdf', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 18/2010 du 12 mai 2010 sur les messages, les signatures et les transactions électroniques', 'source' => 'https://ictpolicyafrica.org/en/entity/tdbqoq8ft4', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Skills Development Fund de la Rwanda TVET Board : appel à propositions 2024 (échéance du 10 janvier 2025), dont un guichet de cofinancement de formations courtes pour les salariés d\'entreprises du secteur formel', 'source' => 'https://www.rtb.gov.rw/fileadmin/user_upload/RTB/Announcements/ANNOUNCEMENT-_SDF_2024_.pdf', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure : Kigali est à UTC+2, Cotonou à UTC+1'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Rwanda, et que change-t-il pour un projet ?',
            'paragraphes' => [
                'Le recensement d\'août 2022 de l\'Institut national de la statistique du Rwanda (NISR) a compté 13 246 394 habitants, dont 1 745 555 dans la ville de Kigali. Les villes ne regroupent pourtant qu\'une minorité du pays : 72,1 % de la population résidente vit en milieu rural selon le même recensement, et même à Kigali 13,1 % des habitants sont classés ruraux. Un site ou une application rwandaise se conçoit donc d\'abord pour un téléphone et une connexion mobile, pas pour un poste de bureau relié à la fibre.',
                'Les statistiques du régulateur, la Rwanda Utilities Regulatory Authority (RURA), confirment ce choix. Au 31 mars 2026, le pays comptait 14 001 080 cartes SIM actives, soit 97,1 pour 100 habitants, et 10 661 122 abonnements internet mobiles actifs, comptés sur les 90 derniers jours. Le haut débit fixe se limite à 77 784 abonnements actifs, en baisse de 9,8 % sur un an, la RURA ayant retiré les abonnés inactifs depuis 90 jours. Pour la plupart des clients rwandais, le téléphone est le seul écran.',
                'Ces ratios se lisent avec prudence. Le chiffre de 74,5 abonnements internet pour 100 habitants en mars 2026 compte des abonnements, pas des personnes : un même client peut en détenir plusieurs, et un abonnement ne dit rien de la fréquence d\'usage. L\'audience réelle d\'un service se mesure donc après sa mise en ligne, avec des statistiques de visite et des essais sur des téléphones d\'entrée de gamme, plutôt qu\'en s\'appuyant sur un taux national.',
                'L\'argent suit le même chemin. D\'après la RURA, 8 558 024 cartes SIM étaient liées à un compte de mobile money actif en mars 2026, en hausse de 15,1 % en un an. Selon les chiffres d\'inclusion financière repris par la presse lors du lancement d\'eKash en juillet 2026, 96 % des adultes rwandais avaient accès à des services financiers formels en 2024 et 68,5 % possédaient un portefeuille mobile. La caisse d\'un service en ligne rwandais est donc, avant tout, le portefeuille mobile.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les repères à connaître avant de lancer un projet numérique au Rwanda ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer dans un site ou une application au Rwanda ?',
            'paragraphes' => [
                'Deux opérateurs se partagent le mobile money. Selon la RURA, MTN Rwandacell détenait 85,7 % des cartes SIM liées à un compte actif en mars 2026 et Airtel Rwanda 14,3 %. Un service qui n\'accepte que MTN MoMo se prive donc d\'environ un porte-monnaie mobile sur sept, une part non négligeable pour un commerce qui vit de l\'achat d\'impulsion. Les deux marques sont à prévoir dès le premier jour, quitte à lancer MTN en tête.',
                'La voie directe passe par le portail développeur de MTN MoMo. Sa documentation décrit des interfaces de collecte, dont la demande de paiement qui déclenche un règlement en temps réel depuis le site ou l\'application, la facture payable plus tard par MoMo, le suivi de statut et le solde de compte, ainsi que des interfaces de versement pour les salaires, les prestations et les fournisseurs. Le portail propose aussi un bac à sable pour tester sans argent réel.',
                'Les agrégateurs évitent un contrat par opérateur. La documentation de Flutterwave décrit pour le Rwanda un paiement en francs rwandais en deux temps : l\'appel d\'API avec le numéro de téléphone, le montant, l\'adresse électronique et une référence unique, puis la redirection du client vers la page où il autorise le paiement, avec un webhook qui permet ensuite de vérifier le paiement avant de livrer. Pesapal, régulé par la Banque nationale du Rwanda, propose pour sa part MoMo et cartes bancaires en ligne, terminaux de paiement et liens de paiement.',
                'Depuis le 14 juillet 2026, le virement a lui aussi changé de nature. La Banque nationale du Rwanda a lancé eKash à l\'échelle nationale ; selon la presse, la directive n° 45/2026 impose d\'y faire passer les transferts de détail interopérables, sur un système national de paiement instantané exploité par RSwitch. Un transfert entre comptes bancaires et portefeuilles mobiles, dans un sens comme dans l\'autre, coûte 20 RWF au plus pour le client, jusqu\'à 10 millions de RWF, chaque établissement pouvant fixer des plafonds plus bas. Régler une facture entre entreprises par virement devient ainsi aussi simple qu\'un envoi de portefeuille.',
            ],
        ],
        [
            'type'     => 'tableau',
            'titre'    => 'Quel canal de paiement choisir selon le type d\'activité ?',
            'legende'  => 'Canaux de paiement au Rwanda et manière de les intégrer',
            'entetes'  => ['Canal', 'Pour quel usage', 'Intégration', 'Point de vigilance'],
            'lignes'   => [
                ['MTN MoMo en direct', 'Fort volume de clients MTN, abonnements, versements aux fournisseurs', 'Demande de paiement, suivi de statut et décaissement par l\'API du portail MoMo', 'Accès de production à demander à MTN une fois les essais faits ; clés distinctes pour le bac à sable'],
                ['Airtel Money', 'Les 14,3 % de cartes liées à Airtel', 'Par un agrégateur, ou en accès direct selon l\'accord de l\'entreprise', 'Ne pas l\'oublier au lancement : le client Airtel quitte sinon le panier'],
                ['Flutterwave', 'Une seule intégration pour le mobile money en RWF', 'Appel d\'API, redirection de l\'acheteur, webhook de confirmation', 'Vérifier la signature du webhook avant de livrer la commande'],
                ['Pesapal', 'Commerce avec caisse physique et boutique en ligne', 'Paiement MoMo et cartes, liens de paiement, terminaux', 'Les cartes servent surtout à la clientèle internationale ; vérifier l\'affichage du montant en RWF'],
                ['Virement eKash', 'Factures entre entreprises, cotisations, loyers', 'Pas d\'API à brancher : référence unique par facture et rapprochement dans l\'ERP', 'Le plafond de 10 millions de RWF par transfert impose de scinder les très gros règlements'],
            ],
            'verdict' => 'Les frais varient avec le contrat de l\'entreprise : le devis peut les comparer canal par canal.',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelles étapes prévoir pour intégrer un paiement, de l\'ouverture du compte marchand au premier encaissement réel ?',
            'items' => [
                ['titre' => 'Choix des canaux et du parcours', 'texte' => 'Le projet peut commencer par décider, avec l\'entreprise, des canaux à ouvrir au lancement, du moment où le client voit le prix en RWF et de ce qui se passe quand il abandonne le paiement sur son téléphone.', 'duree' => 'Durée à fixer au devis'],
                ['titre' => 'Compte marchand', 'texte' => 'L\'entreprise ouvre son compte auprès de l\'opérateur ou de l\'agrégateur ; le projet peut prévoir la préparation du dossier technique et de la liste des pièces demandées. Le délai dépend du prestataire.', 'duree' => 'Variable selon le prestataire'],
                ['titre' => 'Développement en bac à sable', 'texte' => 'La demande de paiement, la page d\'attente, le webhook et le rapprochement avec la commande peuvent être écrits et testés sans argent réel.', 'duree' => 'Durée à fixer au devis'],
                ['titre' => 'Cas limites', 'texte' => 'Paiement refusé, solde insuffisant, délai dépassé, double clic, webhook reçu deux fois : chaque cas peut recevoir un message clair, en français ou en anglais.', 'duree' => 'Durée à fixer au devis'],
                ['titre' => 'Essais réels et mise en production', 'texte' => 'Le projet peut prévoir quelques paiements de faible montant sur de vraies cartes SIM MTN et Airtel, puis la bascule des clés de production et le remboursement des essais.', 'duree' => 'Durée à fixer au devis'],
                ['titre' => 'Suivi des premières semaines', 'texte' => 'Un contrôle des paiements en attente, des écarts de rapprochement et des taux d\'abandon peut être prévu, pour corriger avant que le volume ne monte.', 'duree' => 'Selon le volume attendu'],
            ],
        ],
        [
            'type'     => 'tableau',
            'titre'    => 'Quelles obligations légales changent un projet numérique au Rwanda ?',
            'legende'  => 'Obligations légales rwandaises et effet sur un projet',
            'entetes'  => ['Sujet', 'Texte ou autorité', 'Ce que cela change pour le projet'],
            'lignes'   => [
                ['Données personnelles', 'Loi n° 058/2021, en vigueur depuis le 15 octobre 2021 ; National Cyber Security Authority (NCSA)', 'Registre des traitements, enregistrement auprès de l\'autorité de contrôle, sous-traitants liés par des instructions écrites'],
                ['Hébergement hors du pays', 'Loi n° 058/2021 (dispositions sur le transfert et le stockage hors du Rwanda)', 'Transfert possible dans des cas limités (autorisation de l\'autorité, consentement de la personne, nécessité contractuelle) ; stockage à l\'étranger lié au certificat d\'enregistrement'],
                ['Facturation', 'Rwanda Revenue Authority (RRA), arrêté ministériel n° 006/26/10/TC du 24 septembre 2026 sur le système de facturation électronique', 'Facture émise par un système certifié, qui remplace la machine EBM de l\'arrêté de 2013 ; dispense pour qui ne dépose pas de déclaration annuelle d\'impôt sur le revenu'],
                ['TVA des services numériques', 'Arrêté ministériel n° 004/26/10/TC du 29 avril 2026', 'TVA de 18 % sur logiciels, sites et hébergement web, maintenance à distance et cours en ligne'],
                ['Commerce électronique', 'Loi n° 18/2010 du 12 mai 2010 sur les messages, signatures et transactions électroniques', 'Cadre des signatures électroniques et des contrats conclus en ligne'],
            ],
            'verdict'  => 'Chaque ligne se traduit par une décision de cadrage : où l\'on héberge, quel logiciel émet les reçus, qui déclare la TVA sur la prestation.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit la loi rwandaise sur les données personnelles, et que doit prévoir un site ?',
            'paragraphes' => [
                'La loi n° 058/2021 est entrée en vigueur le 15 octobre 2021, avec deux ans de délai pour les organisations déjà actives : depuis le 15 octobre 2023, elle s\'applique pleinement. La NCSA en est l\'autorité de contrôle, et les responsables de traitement comme les sous-traitants doivent s\'enregistrer auprès d\'elle avant de traiter des données personnelles. Le certificat d\'enregistrement décrit aussi les transferts internationaux prévus : il se prépare donc avant la mise en ligne, pas après.',
                'Le texte vise aussi les acteurs étrangers : les responsables de traitement et sous-traitants sans présence locale doivent le respecter dès qu\'ils traitent des données de personnes situées au Rwanda. Un site, une boutique ou une application destinée à des clients rwandais entre donc dans le champ de la loi, même s\'il est développé et hébergé ailleurs.',
                'Pour un projet, trois choses en découlent. D\'abord un registre des traitements, tenu à jour : quelles données, pour quoi faire, combien de temps. Ensuite le choix de l\'hébergement : un transfert hors du Rwanda n\'est permis que dans des cas limités (autorisation de la NCSA, consentement de la personne, nécessité contractuelle, entre autres) et suppose un contrat écrit avec le destinataire, ce qui pèse sur le choix d\'un serveur européen. Enfin, les amendes administratives peuvent atteindre 1 % du chiffre d\'affaires mondial de l\'exercice précédent.',
                'Le cadrage d\'un projet peut inclure ces éléments : carte des données collectées, mentions d\'information du formulaire, rôle de chaque prestataire (hébergeur, agrégateur de paiement, outil d\'envoi de messages) et dossier à remettre à la NCSA quand l\'hébergement sort du pays. La décision juridique finale revient à l\'entreprise et à son conseil.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment émettre des factures conformes, et que change la TVA sur les services numériques ?',
            'paragraphes' => [
                'Le régime de facturation vient de changer. Depuis l\'arrêté ministériel n° 006/26/10/TC du 24 septembre 2026, publié au Journal officiel du 25 septembre, la Rwanda Revenue Authority s\'appuie sur un système de facturation électronique certifié par l\'administration fiscale, qui remplace la machine de facturation électronique (EBM) de l\'arrêté de 2013, abrogé. Le contribuable doit se procurer le système que détermine l\'administration, ou avoir un contrat de service avec un fournisseur s\'il en externalise un autre, et le tenir à son point de vente. Un logiciel de caisse ou d\'ERP se vérifie donc auprès de la RRA avant achat, et non après.',
                'L\'arrêté prévoit une dispense : un contribuable qui n\'est pas tenu de déposer la déclaration annuelle d\'impôt sur le revenu n\'a pas à utiliser le système à chaque transaction, mais il doit approuver la facture initiée par l\'acheteur. Les annonces de presse de juillet 2026 évoquaient un seuil de 2 millions de RWF de chiffre d\'affaires ; le texte publié ne retient pas ce seuil. Le calendrier de bascule des systèmes déjà installés est à confirmer auprès de la RRA avant de lancer un projet.',
                'La TVA touche aussi les services numériques. L\'arrêté n° 004/26/10/TC, publié le 29 avril 2026, soumet à la TVA, au taux normal de 18 %, les logiciels et leurs mises à jour, les moteurs de recherche, les sites et l\'hébergement web, la maintenance à distance de programmes et d\'équipements, les cours en ligne ou encore les plateformes d\'intermédiation. Une prestation est réputée rendue au Rwanda si le client s\'y trouve, ou si son adresse de facturation, sa carte SIM ou son compte bancaire y sont rattachés.',
                'Un fournisseur étranger peut s\'enregistrer auprès de la RRA, directement ou par un représentant local. À défaut, la banque ou l\'opérateur de mobile money qui effectue le paiement peut retenir la taxe. Le texte laisse trois mois pour installer le portail en ligne et raccorder les institutions financières, soit jusqu\'à fin juillet 2026. Le devis peut préciser qui déclare la taxe sur chaque ligne, et l\'entreprise confirme le traitement avec la RRA ou son conseil fiscal.',
            ],
        ],
        [
            'type'     => 'tableau',
            'titre'    => 'Quels services Richard propose-t-il aux entreprises rwandaises ?',
            'legende'  => 'Besoins fréquents au Rwanda et service correspondant',
            'entetes'  => ['Besoin typique au Rwanda', 'Service', 'Page'],
            'lignes'   => [
                ['Encaisser par MTN MoMo et Airtel Money sur une boutique en ligne', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Répondre aux clients, prendre commandes et rendez-vous sur WhatsApp', 'Intégration de WhatsApp', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Un assistant qui répond en français et en anglais, jour et nuit', 'Agents IA et chatbots WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots</a>'],
                ['Relier le paiement mobile, la caisse et la facturation de la RRA', 'API REST et intégrations', '<a href="/services/api-rest-integrations">API et intégrations</a>'],
                ['Suivre ventes, stocks et achats dans un seul outil', 'Intégration Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Facturer, suivre clients et trésorerie avec un ERP léger', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Supprimer les saisies répétées entre fichiers, messageries et outils', 'Automatisation et IA', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Ajouter une fonction d\'IA à un logiciel déjà en place', 'Intégration de l\'IA en entreprise', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA</a>'],
                ['Réservations de lodge, de salle ou de visite avec acompte', 'Système de réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Réservation en ligne</a>'],
                ['Lancer un logiciel en ligne avec abonnements et espace client', 'SaaS et espace client', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Cadrer un projet avant de choisir outils et prestataires', 'Consultant en digitalisation', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Comment ces services s\'appliquent-ils dans les secteurs porteurs du Rwanda ?',
            'items' => [
                [
                    'secteur'  => 'Agriculture',
                    'probleme' => 'Une coopérative paie ses membres en espèces après chaque collecte et rapproche les carnets à la main.',
                    'solution' => 'Une application enregistre les pesées de chaque membre, calcule ce qui lui revient et déclenche le versement par l\'interface de décaissement de MTN MoMo, avec un relevé par membre. Le rapprochement entre pesée, paiement et stock se fait sans ressaisie.',
                    'lien'     => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Application web sur mesure'],
                ],
                [
                    'secteur'  => 'Tourisme',
                    'probleme' => 'Un lodge reçoit des demandes par messagerie, confirme à la main et attend des virements internationaux pour valider un séjour.',
                    'solution' => 'Un moteur de réservation affiche les disponibilités, demande un acompte par carte pour les voyageurs de l\'étranger et par MoMo pour la clientèle locale, puis envoie la confirmation en français ou en anglais. Les pages existent aussi en kinyarwanda quand l\'établissement vise les clients du pays.',
                    'lien'     => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Réservation en ligne'],
                ],
                [
                    'secteur'  => 'Services financiers',
                    'probleme' => 'Une coopérative d\'épargne reçoit des cotisations par plusieurs canaux et reconstitue chaque mois le solde de ses membres.',
                    'solution' => 'Chaque cotisation porte une référence unique, que le virement eKash ou le paiement mobile reprend ; un ERP rapproche automatiquement le règlement du bon membre et sort le tableau de suivi pour l\'assemblée.',
                    'lien'     => ['url' => '/services/integration-dolibarr', 'texte' => 'Intégration Dolibarr'],
                ],
                [
                    'secteur'  => 'TIC',
                    'probleme' => 'Une jeune entreprise de logiciel veut facturer des abonnements mensuels à des clients qui paient par portefeuille mobile.',
                    'solution' => 'Une application avec espaces clients, plans d\'abonnement, relance par message avant l\'échéance et gestion de la TVA de 18 % sur le service. La facturation peut tenir compte de l\'arrêté d\'avril 2026 sur les services numériques.',
                    'lien'     => ['url' => '/services/saas-espace-client', 'texte' => 'SaaS et espace client'],
                ],
                [
                    'secteur'  => 'Santé',
                    'probleme' => 'Un cabinet médical note les rendez-vous sur papier et stocke des dossiers de patients sur des ordinateurs sans sauvegarde.',
                    'solution' => 'Un agenda en ligne avec rappels et consentement du patient, des droits d\'accès par rôle et une journalisation des consultations. La loi n° 058/2021 range les informations de santé parmi les données sensibles, d\'où un hébergement choisi avec soin.',
                    'lien'     => ['url' => '/services/digitalisation-d-entreprise', 'texte' => 'Digitalisation d\'entreprise'],
                ],
                [
                    'secteur'  => 'Éducation',
                    'probleme' => 'Une école privée encaisse les frais de scolarité en trois versements et ne sait pas, un mois sur l\'autre, quelles familles sont à jour.',
                    'solution' => 'Une application de suivi des élèves affecte chaque paiement à la bonne famille, relance par WhatsApp les familles en retard et sort un état de caisse par trimestre pour la direction.',
                    'lien'     => ['url' => '/services/integration-whatsapp', 'texte' => 'Intégration WhatsApp'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d\'une entreprise rwandaise, et qui peut financer la formation ?',
            'paragraphes' => [
                'Richard forme des équipes à distance : une formation peut se donner en visioconférence, en français ou en anglais, sur les documents propres à chaque entreprise (factures, fichiers de clients, modèles de devis). Les sessions peuvent se caler sur l\'heure de Kigali, une heure en avance sur Cotonou, en plages courtes plutôt qu\'en journées entières, pour que chaque équipe garde sa journée de travail.',
                'Pour une équipe commerciale ou de direction, <a href="/formations/ia-en-entreprise">l\'IA au quotidien en entreprise</a> est le point d\'entrée. Les équipes administratives et comptables préfèrent <a href="/formations/odoo-utilisateurs">Odoo pour les équipes</a>, tandis que les responsables d\'opérations commencent par <a href="/formations/n8n">n8n, de zéro à l\'autonomie</a>. Les entreprises qui vendent par message suivent <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, et celles qui manipulent des données de clients ajoutent <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>, utile face à la loi n° 058/2021. Tous les domaines sont listés dans le <a href="/formations/">catalogue des formations</a>.',
                'Côté financement, le Skills Development Fund de la Rwanda TVET Board procède par appels à propositions. L\'appel publié en 2024, clos le 10 janvier 2025, comprenait un guichet « Rapid Response Training » qui cofinançait des formations courtes pour les salariés d\'entreprises du secteur formel, ou pour de futurs employés d\'un investisseur qui s\'installe. Pouvaient candidater des entreprises, des associations, des coopératives, des centres de formation et des organisations locales ou internationales, selon l\'annonce de la RTB.',
                'L\'éligibilité dépend de l\'appel en cours et du dossier déposé, qui est celui de l\'entreprise ou de son organisme de formation. Avant toute inscription, il faut vérifier auprès de la Rwanda TVET Board si un nouvel appel est ouvert, son calendrier et ses conditions de cofinancement. Pour un tel dossier, Richard peut fournir sur demande le programme détaillé et la durée de chaque module.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'intro' => 'Aucun voyage n\'est nécessaire. Voici le quotidien d\'une entreprise installée à Kigali ou ailleurs dans le pays.',
            'items' => [
                ['titre' => 'Une heure de décalage', 'texte' => 'Kigali est à UTC+2 toute l\'année, Cotonou à UTC+1, ni l\'un ni l\'autre n\'ayant d\'heure d\'été. Les plages d\'ouverture de Richard, de 07 h 00 à 20 h 00 à Cotonou, sept jours sur sept, correspondent à 08 h 00 à 21 h 00 à Kigali : une réunion à 14 h à Kigali tombe à 13 h à Cotonou.'],
                ['titre' => 'Une langue de travail au choix', 'texte' => 'Richard écrit et parle français et anglais, deux des quatre langues officielles du Rwanda. Les devis, la documentation et les formations peuvent suivre la langue de l\'équipe. Pour une interface en kinyarwanda ou en kiswahili, le projet peut prévoir une traduction relue par un locuteur natif avant la mise en ligne.'],
                ['titre' => 'Un devis en euros', 'texte' => 'Chaque projet est chiffré sur devis, en euros, avec les lignes de TVA rwandaise à part quand elles s\'appliquent. Richard accepte le virement, la carte bancaire et PayPal.'],
                ['titre' => 'Un suivi visible', 'texte' => 'Le projet peut prévoir un canal de messagerie dédié, un point régulier en visioconférence et un lien de démonstration mis à jour à chaque étape, pour que l\'entreprise voie l\'avancement et valide les écrans sur son propre téléphone avant l\'étape suivante.'],
                ['titre' => 'Une réponse sous 24 heures', 'texte' => 'Toute demande reçoit une réponse sous 24 heures, avec un premier avis sur la faisabilité et les questions à clarifier pour établir le devis.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise du Rwanda ?',
            'paragraphes' => [
                'Chaque projet destiné au Rwanda est chiffré sur devis, en euros. L\'écart entre un paiement mobile simple et un portail avec ERP, facturation électronique de la RRA et hébergement autorisé est trop grand pour un tarif unique. Le devis peut détailler chaque ligne, ce qui permet à l\'entreprise de retirer une option sans refaire le calcul.',
                'Plusieurs éléments propres au pays font varier le prix. Le nombre de canaux de paiement d\'abord : MTN MoMo seul, ou MTN MoMo, Airtel Money et cartes, avec un rapprochement pour chacun. Le lien avec le système de facturation électronique de la RRA ensuite, selon que le logiciel de caisse en place est déjà compatible ou doit être remplacé. Le nombre de langues compte également, car chaque langue de plus double la relecture, et l\'hébergement, selon que les données restent au Rwanda ou sortent avec l\'autorisation de la NCSA.',
                'D\'autres postes se décident en cadrage : la reprise des données d\'un ancien tableur, le nombre d\'utilisateurs à former, le niveau d\'exigence du support (réponse sous 24 heures ou astreinte sur les jours de paie) et la fréquence des évolutions. Pour une première idée du budget, un message décrivant l\'activité, les canaux de paiement visés et le nombre d\'utilisateurs suffit à fixer le périmètre ; le devis écrit arrive ensuite.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent dans un projet numérique au Rwanda ?',
            'intro' => 'Ces pièges reviennent dans les projets destinés au marché rwandais ; chacun se corrige au cadrage, bien moins cher qu\'après la mise en ligne.',
            'items' => [
                ['titre' => 'Brancher MTN MoMo seul', 'texte' => 'MTN pèse 85,7 % des cartes SIM liées à un compte de mobile money, mais Airtel Money en détient encore 14,3 %. Un client Airtel qui ne trouve pas son moyen de paiement quitte le panier ; les deux canaux se prévoient dès le premier jour.'],
                ['titre' => 'Concevoir pour un ordinateur de bureau', 'texte' => 'Avec 77 784 abonnements de haut débit fixe contre plus de 10 millions d\'abonnements internet mobiles, une page de 2 Mo avec des vidéos en fond décourage le visiteur. On vise des pages légères, des formulaires courts et des boutons larges, testés sur un téléphone d\'entrée de gamme.'],
                ['titre' => 'Acheter un logiciel de caisse sans vérifier sa compatibilité avec la RRA', 'texte' => 'Depuis l\'arrêté du 24 septembre 2026, la facturation passe par un système électronique certifié par l\'administration fiscale. Avant tout achat ou développement, il vaut mieux vérifier auprès de la RRA que le logiciel est accepté, et garder la preuve de cette vérification.'],
                ['titre' => 'Héberger en Europe sans préparer l\'enregistrement auprès de la NCSA', 'texte' => 'La loi n° 058/2021 encadre le transfert et le stockage de données hors du Rwanda. Un serveur choisi pour son prix, sans avoir prévu le transfert dans l\'enregistrement ni les autorisations utiles, expose l\'entreprise à une amende administrative pouvant aller jusqu\'à 1 % du chiffre d\'affaires mondial.'],
                ['titre' => 'Ignorer la TVA sur les services numériques', 'texte' => 'Depuis l\'arrêté du 29 avril 2026, les sites et l\'hébergement web, les logiciels et la maintenance à distance sont soumis à la TVA de 18 %. Les devis et les budgets annuels doivent faire apparaître cette ligne, sinon le coût réel dépasse le prix annoncé.'],
                ['titre' => 'Traduire sans relecture', 'texte' => 'Le Rwanda compte quatre langues officielles, dont le kinyarwanda, langue nationale. Une traduction automatique non relue de l\'interface de paiement ou des mentions légales crée des malentendus ; mieux vaut faire relire ces textes par un locuteur natif avant la mise en ligne.'],
                ['titre' => 'Compter sur le plafond d\'un virement pour tout règlement', 'texte' => 'Le transfert eKash plafonne à 10 millions de RWF. Une facture au-delà doit être scindée ou réglée par un autre canal bancaire ; le logiciel de facturation doit alors accepter plusieurs règlements pour une seule facture.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet rwandais à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut accompagner à distance les entreprises au Rwanda, en proposant un cadrage écrit, des livraisons par étapes et la formation des équipes. Il compte plus de six ans d\'expérience, plus de cinquante projets livrés, plus de cent clients et plus de deux cents personnes formées. Sorti d\'EPITECH en 2022, il édite Wapy, un assistant WhatsApp doté d\'IA, et co-fonde Audyxa.',
                'Sa page de réalisations présente des projets avec paiement par mobile money : OBA TV, une web TV de Cotonou, propose des abonnements premium payés par MTN MoMo et Moov Money, et KossKoss Select, une boutique en ligne du Cameroun, encaisse par Orange Money et MTN MoMo. Au Rwanda, le paiement mobile se branche sur les comptes MTN MoMo et Airtel Money locaux, avec les interfaces décrites par MTN et par Flutterwave. Tous les projets sont visibles sur <a href="/realisations/">la page des réalisations</a>.',
                'Pour en savoir plus sur son parcours, rendez-vous sur <a href="/richard-salanon">la page de Richard SALANON</a> ou sur <a href="/a-propos/">la page À propos</a>. Les histoires de projets sont rassemblées dans <a href="/histoires/">les histoires clients</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Un projet pour votre entreprise au Rwanda ?',
            'texte'  => 'Décrivez votre activité, les canaux de paiement que vos clients utilisent et ce que vous voulez automatiser. Richard répond sous 24 heures, en français ou en anglais, avec un premier avis et les questions utiles pour le devis, en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard peut-il intervenir au Rwanda sans se déplacer ?', 'r' => 'Oui. Le cadrage, le développement, le paramétrage d\'un ERP et les formations se font en visioconférence depuis Cotonou. Le décalage horaire n\'est que d\'une heure : Kigali est à UTC+2 et Cotonou à UTC+1. Les livraisons se valident sur le téléphone de l\'équipe, qui est de toute façon l\'écran principal de ses clients.'],
        ['q' => 'En quelle devise Richard établit-il ses devis pour le Rwanda ?', 'r' => 'En euros, sur devis. Richard accepte le virement bancaire, la carte et PayPal. Les frais de l\'agrégateur de paiement et les éventuelles taxes rwandaises peuvent être indiqués à part, de sorte que l\'entreprise sache ce qu\'elle paie à Richard et ce qu\'elle verse à des tiers.'],
        ['q' => 'Quel mobile money brancher en premier : MTN MoMo ou Airtel Money ?', 'r' => 'MTN MoMo en premier, mais pas seul. D\'après la RURA, MTN détenait 85,7 % des cartes SIM liées à un compte actif en mars 2026 et Airtel 14,3 %. Airtel s\'ajoute par un agrégateur ou par un accès direct, selon l\'accord de l\'entreprise. Les deux marques sont testées avant l\'ouverture au public.'],
        ['q' => 'Que change eKash pour une facture payée par virement ?', 'r' => 'Depuis le 14 juillet 2026, les transferts entre comptes bancaires et portefeuilles mobiles passent par eKash, le système national de paiement instantané. Le coût est de 20 RWF au plus par transfert pour le client, jusqu\'à 10 millions de RWF, chaque établissement pouvant fixer des plafonds plus bas. Une facture peut donc se régler par virement vers un portefeuille d\'entreprise ; il suffit d\'une référence unique par facture pour que le logiciel rapproche le paiement.'],
        ['q' => 'Faut-il enregistrer mon site ou mon application auprès de la NCSA ?', 'r' => 'Toute entreprise qui traite des données personnelles de personnes situées au Rwanda relève de la loi n° 058/2021 et de la National Cyber Security Authority, auprès de laquelle les responsables de traitement et les sous-traitants doivent s\'enregistrer. Richard peut préparer la liste des traitements et les mentions d\'information. La démarche d\'enregistrement est celle de l\'entreprise, qui la confirme avec la NCSA.'],
        ['q' => 'Un site hébergé en Europe peut-il stocker les données de clients rwandais ?', 'r' => 'Pas sans précaution. La loi n° 058/2021 n\'autorise le transfert de données personnelles hors du Rwanda que dans des cas limités : autorisation de la NCSA, consentement de la personne ou nécessité contractuelle, entre autres, avec un contrat écrit avec le destinataire. Le choix de l\'hébergement se décide donc au cadrage, avec un dossier si le serveur est situé à l\'étranger.'],
        ['q' => 'Une boutique en ligne doit-elle encore émettre un reçu EBM ?', 'r' => 'L\'arrêté ministériel n° 006/26/10/TC du 24 septembre 2026 abroge celui de 2013 sur les machines de facturation électronique (EBM) et institue un système de facturation électronique certifié par l\'administration fiscale. Un contribuable qui n\'est pas tenu de déposer la déclaration annuelle d\'impôt sur le revenu n\'a pas à l\'utiliser à chaque transaction. Le calendrier de bascule des boutiques déjà équipées est à confirmer auprès de la RRA.'],
        ['q' => 'Les prestations de Richard sont-elles soumises à la TVA rwandaise sur les services numériques ?', 'r' => 'L\'arrêté ministériel n° 004/26/10/TC du 29 avril 2026 cite notamment les logiciels, l\'hébergement de sites et la maintenance à distance de programmes. Le traitement d\'une prestation facturée depuis l\'étranger dépend de sa nature et de la qualité du client. Le devis peut préciser la ligne concernée, et l\'entreprise la confirme avec la RRA ou son conseil fiscal.'],
        ['q' => 'Le SYSCOHADA s\'applique-t-il à la comptabilité d\'une entreprise rwandaise ?', 'r' => 'Le SYSCOHADA est le plan comptable des 17 États membres de l\'OHADA, dont la liste figure sur le site de l\'organisation et ne comprend pas le Rwanda. Une entreprise rwandaise suit le cadre comptable que son expert-comptable lui indique. Richard paramètre l\'ERP selon ce cadre : plan de comptes, taxes et modèles de factures, validés avec le comptable avant la première écriture.'],
        ['q' => 'Dans quelle langue publier un site pour le marché rwandais ?', 'r' => 'La Constitution fait du kinyarwanda la langue nationale ; l\'anglais et le français sont officiels, et le kiswahili l\'est devenu par la loi organique n° 02/2017. Le choix dépend de la clientèle : l\'anglais et le kinyarwanda pour le grand public, le français et l\'anglais pour une clientèle d\'affaires internationale. Il vaut mieux faire relire les textes en kinyarwanda par un locuteur natif.'],
        ['q' => 'La formation d\'une équipe peut-elle être cofinancée au Rwanda ?', 'r' => 'Le Skills Development Fund de la Rwanda TVET Board cofinance, par son guichet « Rapid Response Training », des formations courtes pour les salariés d\'entreprises du secteur formel. L\'éligibilité dépend de l\'appel en cours et du dossier déposé par l\'entreprise ou son organisme de formation ; Richard peut fournir les programmes détaillés qu\'un dossier demande. Le dernier appel relevé date de 2024 : il faut vérifier si un nouvel appel est ouvert.'],
    ],

    'sources' => [
        ['titre' => 'NISR, cinquième recensement de la population et de l\'habitat 2022, indicateurs principaux', 'url' => 'https://statistics.gov.rw/node/87', 'date' => '2026-10-06'],
        ['titre' => 'RURA, rapport statistique du secteur des TIC, premier trimestre 2026', 'url' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Tech Africa News, Rwanda launches full interoperability on eKash (13 juillet 2026)', 'url' => 'https://techafricanews.com/2026/07/13/rwanda-launches-full-interoperability-on-ekash-national-payment-system/', 'date' => '2026-10-06'],
        ['titre' => 'MTN MoMo, portail développeur : interfaces de collecte et de versement', 'url' => 'https://momodeveloper.mtn.com/', 'date' => '2026-10-06'],
        ['titre' => 'Flutterwave, documentation du paiement par mobile money au Rwanda', 'url' => 'https://developer.flutterwave.com/docs/rwanda', 'date' => '2026-10-06'],
        ['titre' => 'Pesapal Rwanda, solutions de paiement', 'url' => 'https://www.pesapal.com/rw', 'date' => '2026-10-06'],
        ['titre' => 'Hogan Lovells, Key features of the new Rwandan data protection law', 'url' => 'https://www.hlc.com/en/publications/key-features-of-the-new-rwandan-data-protection-law', 'date' => '2026-10-06'],
        ['titre' => 'Data Protection Africa, fiche sur la loi rwandaise n° 058/2021', 'url' => 'https://dataprotection.africa/rwanda/', 'date' => '2026-10-06'],
        ['titre' => 'Rwanda Revenue Authority, machines de facturation électronique (EBM)', 'url' => 'https://www.rra.gov.rw/fileadmin/img/electronic-billing-machines.html', 'date' => '2026-10-06'],
        ['titre' => 'RRA, arrêté ministériel n° 004/26/10/TC du 29 avril 2026 sur la TVA des biens et services fournis en ligne', 'url' => 'https://www.rra.gov.rw/fileadmin/Folder_for_2025/Ministerial_Order_VAT_on_Online_Services_April_2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'RRA, arrêté ministériel n° 006/26/10/TC du 24 septembre 2026 sur le système de facturation électronique', 'url' => 'https://www.rra.gov.rw/fileadmin/user_upload/Ministerial_order_EBM.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Banque nationale du Rwanda, communiqué sur la performance d\'eKash (5 août 2026)', 'url' => 'https://www.bnr.rw/documents/Press_Release-_Update_on_the_Performance_of_eKash_Aug_2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs téléphoniques nationaux (E.164)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ICT Policy Africa, loi n° 18/2010 sur les messages, signatures et transactions électroniques', 'url' => 'https://ictpolicyafrica.org/en/entity/tdbqoq8ft4', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, histoire et liste des États membres', 'url' => 'https://www.ohada.org/en/history-of-ohada/', 'date' => '2026-10-06'],
        ['titre' => 'Rwanda TVET Board, appel à propositions 2024 du Skills Development Fund', 'url' => 'https://www.rtb.gov.rw/fileadmin/user_upload/RTB/Announcements/ANNOUNCEMENT-_SDF_2024_.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Rwanda Development Board, secteurs d\'investissement', 'url' => 'https://rdb.rw/investment-opportunities/', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, langues officielles du Rwanda (loi organique n° 02/2017 sur le kiswahili)', 'url' => 'https://en.wikipedia.org/wiki/Language_policy_in_Rwanda', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'api-rest-integrations', 'integration-odoo', 'integration-dolibarr', 'automatisation-ia', 'systeme-de-reservation-en-ligne'],
        'formations'  => ['ia-en-entreprise', 'odoo-utilisateurs', 'n8n', 'whatsapp-business', 'ia-ethique-conformite'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['commercants-e-commercants', 'chefs-entreprise-dirigeants', 'ong-projets-developpement'],
    ],
];

