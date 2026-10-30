<?php
// ============================================================
// data/pays/cote-d-ivoire.php · Page pays « Côte d'Ivoire » (vague 1D, spec 6.5).
// Faits externes relevés le 06/10/2026 sur : le rapport de l'ARTCI du 1er trimestre 2026,
// les pages de l'ARTCI et de l'Autorité de protection, le portail de la facture normalisée
// électronique de la DGI (FAQ et procédure d'interfaçage par API), le site du FDFP,
// France Diplomatie, DataReportal, l'OHADA, Deloitte (loi de finances 2026) et les
// documentations d'Orange, de Wave, de CinetPay, de KkiaPay et de FedaPay.
// Clés de fiche absentes : aucune. Projets d'Abidjan repris de projets-clients.php,
// tous en sous-traitance pour Digital Développement ; QueenK Beauty n'apparaît pas.
// ============================================================
declare(strict_types=1);

$tarifs = (array) fait('tarifs_depart');

return [
    'titre'   => 'Digitaliser son entreprise en Côte d\'Ivoire : sites, ERP, WhatsApp et facture normalisée, menés à distance depuis Cotonou',
    'title'   => 'Développeur et consultant en Côte d\'Ivoire | Richard SALANON',
    'meta'    => 'Sites, ERP Odoo et Dolibarr, WhatsApp, IA et facture normalisée électronique pour les entreprises ivoiriennes, à distance, devis en FCFA sous 24 heures.',
    'en_bref' => 'Richard SALANON accompagne à distance, depuis Cotonou, les entreprises d\'Abidjan et de l\'intérieur du pays : sites et boutiques en ligne, ERP Odoo et Dolibarr, automatisations, assistants WhatsApp et formation des équipes. Les projets tiennent compte de la facture normalisée électronique de la DGI, de la loi de 2013 sur les données personnelles et des quatre portefeuilles de mobile money du pays. Les échanges se font en français, avec un seul décalage horaire d\'une heure, et les devis sont établis en francs CFA.',
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale' => ['v' => 'Yamoussoukro (Abidjan abriterait près de 80 % de l\'activité économique)', 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Abidjan', 'Bouaké', 'San Pedro', 'Gagnoa', 'Korhogo', 'Daloa', 'Yamoussoukro'], 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'GMT, soit UTC+0, sans heure d\'été (une heure de moins qu\'à Cotonou)', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+225', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => 'Français, langue officielle', 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],

        'population' => ['v' => '32 millions d\'habitants en 2025', 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],
        'internet' => ['v' => '13,4 millions d\'internautes fin 2025, soit 40,7 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-06'],
        'mobile' => ['v' => '60 155 998 abonnements mobiles et 40 912 479 abonnements à l\'internet mobile au 31 mars 2026', 'source' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '26 880 005 abonnements au 31 mars 2026, hors Wave dont les données manquaient au rapport', 'source' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Agriculture et cacao', 'Pétrole et énergie', 'Agroalimentaire', 'Bâtiment et travaux publics', 'Télécommunications', 'Transport et port', 'Commerce', 'Finance'], 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],

        'devise' => ['v' => 'Franc CFA (XOF) : 1 euro vaut 655,957 francs CFA', 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Orange Money', 'MTN MoMo', 'Moov Money', 'Wave'], 'source' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['CinetPay'], 'source' => 'https://github.com/cinetpay/cinetpay-php-sdk', 'date' => '2026-10-06'],

        'donnees' => ['v' => 'Loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel', 'source' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'ARTCI, désignée autorité de protection des données personnelles', 'source' => 'https://www.autoritedeprotection.ci/', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture normalisée électronique (FNE) de la DGI, obligatoire pour toutes les entreprises hors dispenses', 'source' => 'https://www.fne.dgi.gouv.ci/faq.php', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Taux normal de 18 %, taux réduit de 9 % sur certains intrants agricoles', 'source' => 'https://blog.avocats.deloitte.fr/cote-divoire-les-principales-mesures-de-la-loi-de-finances-pour-2026/', 'date' => '2026-10-06'],
        'ohada' => ['v' => 'Pays membre de l\'OHADA, qui compte 17 États', 'source' => 'https://www.ohada.org/les-etats-membres-de-lohada/', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi n° 2013-546 du 30 juillet 2013 relative aux transactions électroniques', 'source' => 'https://artci.ci/textes-juridiques/lois/', 'date' => '2026-10-06'],

        'financement' => ['v' => 'FDFP, financé par la taxe d\'apprentissage (0,4 % de la masse salariale) et la taxe additionnelle à la formation continue (1,2 %)', 'source' => 'https://fdfp.ci/presentation-du-fdfp/', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '1 heure de moins à Abidjan'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique en Côte d\'Ivoire, et que change-t-il pour un projet ?',
            'paragraphes' => [
                'Le rapport de l\'<a href="https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf">ARTCI sur le premier trimestre 2026</a> compte 60 155 998 abonnements à la téléphonie mobile au 31 mars 2026 : 30 539 135 chez Orange (chiffre indiqué « en cours de vérification » par le rapport), 17 202 842 chez MTN et 12 414 021 chez Moov. Le total recule de 0,6 % sur un an, de 60 539 852 à 60 155 998. Il dépasse pourtant la population, estimée à 32 millions d\'habitants en 2025 par <a href="https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire">France Diplomatie</a>, parce qu\'une même personne détient souvent plusieurs cartes SIM.',
                'Cette différence entre abonnements et personnes compte pour un projet. Selon <a href="https://datareportal.com/reports/digital-2026-cote-divoire">DataReportal</a>, 13,4 millions d\'Ivoiriens utilisaient internet fin 2025, soit 40,7 % de la population, alors que l\'ARTCI recense 40 912 479 abonnements à l\'internet mobile au 31 mars 2026. Le même rapport dénombre 816 207 abonnements à l\'internet fixe, dont 65 % en fibre optique. Concevoir un site ou une application pour la Côte d\'Ivoire, c\'est donc concevoir d\'abord pour un téléphone, souvent sur une connexion mobile, plutôt que pour un ordinateur de bureau relié à la fibre.',
                'L\'âge de la population pèse aussi. DataReportal donne un âge médian de 18,3 ans fin 2025 et 54,3 % d\'habitants en ville. Abidjan concentre 36 % de la population urbaine selon le recensement de 2021, dont les résultats définitifs, annoncés le 7 juillet 2022, comptent 29 389 150 habitants. Pour une entreprise, la clientèle jeune, urbaine et équipée de mobile money se joint par WhatsApp et se paie par téléphone ; un site qui n\'offre qu\'un virement bancaire ou un formulaire de contact passe à côté de la majorité des acheteurs.',
                'Le poids d\'Abidjan structure enfin l\'offre. France Diplomatie estime que près de 80 % de l\'activité économique relève de cette seule ville, qui abrite moins du quart de la population, et que l\'économie reste largement informelle, pour 30 à 40 % du produit intérieur brut. Beaucoup de commerçants, de transporteurs et d\'artisans n\'ont donc ni logiciel de gestion ni site, mais ils tiennent déjà leurs ventes par WhatsApp et leurs encaissements par mobile money. Un bon projet part de ces habitudes au lieu de les remplacer.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître sur la Côte d\'Ivoire avant de lancer un projet ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer sur un site ou une application ivoirienne ?',
            'paragraphes' => [
                'Le mobile money domine les paiements en ligne. L\'ARTCI recense, au 31 mars 2026, 26 880 005 abonnements : 16 579 863 chez Orange Money, 7 806 828 chez MTN MoMo et 2 493 314 chez Moov Money. Le rapport précise que les données de Wave Côte d\'Ivoire n\'étaient pas disponibles, de sorte que le total sous-estime le parc réel. Orange progresse de 0,7 % sur un an, MTN recule de 4,4 % et Moov de 19,1 % ; un site qui ne propose qu\'un seul opérateur ferme la porte à une partie de ses clients, et le choix des portefeuilles à intégrer se discute avec les chiffres de sa propre clientèle.',
                'Deux voies existent : le contrat direct avec chaque opérateur, ou un agrégateur qui en regroupe plusieurs derrière une seule intégration. La <a href="https://developer.orange.com/apis/om-webpay">page développeurs d\'Orange</a> liste la Côte d\'Ivoire parmi les pays de l\'API Orange Money Web Payment, où le client demande un code à usage unique par USSD puis le saisit sur la page de paiement ; le marchand doit être référencé comme commerçant Orange Money, avec un dossier d\'identification complet. L\'<a href="https://docs.wave.com/checkout">API Checkout de Wave</a> repose sur une clé liée à un portefeuille professionnel, créée dans le portail Wave Business, et refuse les décimales pour les montants en francs CFA.',
                'Côté agrégateurs, le <a href="https://github.com/cinetpay/cinetpay-php-sdk">kit PHP officiel de CinetPay</a> liste la Côte d\'Ivoire avec la devise XOF et l\'indicatif +225, en prévenant qu\'un pays présent dans la liste ne garantit pas qu\'un opérateur soit déjà activé sur votre compte. La <a href="https://kkiapay.me/tarifs/">page des tarifs de KkiaPay</a> propose la Côte d\'Ivoire dans sa sélection de pays. La <a href="https://docs.fedapay.com/fr/payment-methods">documentation de FedaPay</a> ne cite que MTN pour ce pays en mobile money, à la date de consultation, ce qui change tout pour un site dont les clients paient surtout par Orange ou Wave. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a> détaille ces écarts.',
                'Les taux de commission et les délais de reversement ne sont pas détaillés ici : les barèmes changent et varient selon l\'opérateur et le contrat. Avant de signer, on demande le barème écrit à chaque prestataire. Techniquement, l\'intégration suit toujours le même fil : création d\'une session de paiement côté serveur, redirection ou fenêtre de paiement, puis confirmation par une notification que le serveur vérifie avant de marquer la commande payée. La commande ne se valide jamais sur le simple retour du navigateur du client.',
            ],
        ],
        [
            'type'      => 'tableau',
            'titre'     => 'Quel moyen de paiement choisir selon le besoin ?',
            'legende'   => 'Voies d\'encaissement les plus courantes en Côte d\'Ivoire et leurs contraintes documentées',
            'entetes'   => ['Besoin', 'Voie possible', 'Point à vérifier avant de commencer'],
            'lignes'    => [
                ['Vendre à des clients qui paient par Wave', 'API Checkout de Wave', 'Un portefeuille professionnel et une clé API ; montants en francs CFA entiers'],
                ['Vendre à des clients d\'Orange Money', 'Orange Money Web Payment, ou un agrégateur', 'Statut de marchand Orange Money avec dossier d\'identification complet'],
                ['Couvrir plusieurs opérateurs avec une seule intégration', 'Un agrégateur comme CinetPay ou KkiaPay', 'Les opérateurs réellement activés sur votre compte, pays par pays'],
                ['Accepter MTN MoMo seul, au début', 'FedaPay, dont la documentation ne cite que MTN en Côte d\'Ivoire', 'Prévoir un second moyen dès que la clientèle Orange ou Wave demande à payer'],
                ['Facturer des entreprises clientes', 'Virement bancaire et facture normalisée électronique', 'Le rapprochement manuel du virement, à automatiser dans l\'ERP'],
                ['Recevoir des acomptes à la commande', 'Lien de paiement mobile money', 'Un statut « acompte reçu » distinct de « payé » dans l\'outil de gestion'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La loi ivoirienne sur les données personnelles et l\'ARTCI changent-elles un projet ?',
            'paragraphes' => [
                'Oui, et plus qu\'on ne le croit. La page de l\'<a href="https://artci.ci/protection-des-donnees/">ARTCI sur la protection des données</a> cite toujours, le 6 octobre 2026, la loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel : aucun texte de remplacement n\'y figure. Le site dédié, <a href="https://www.autoritedeprotection.ci/">autoritedeprotection.ci</a>, présente l\'ARTCI comme « Autorité de protection » : l\'organe qui régule les télécommunications est aussi celui qui veille aux données personnelles. La <a href="https://artci.ci/textes-juridiques/lois/">liste des lois</a> du régulateur ajoute la loi n° 2024-352 du 6 juin 2024 sur les communications électroniques et la loi n° 2013-451 sur la cybercriminalité.',
                'Concrètement, un site qui collecte des noms, des numéros de téléphone ou des adresses relève de cette loi. La <a href="https://www.autoritedeprotection.ci/documents/">page des formulaires</a> de l\'Autorité distingue la déclaration préalable, la demande d\'autorisation préalable, la demande d\'autorisation d\'un système de vidéosurveillance, celle d\'un dispositif biométrique et la demande de transfert de données hors de l\'espace CEDEAO. Elle publie aussi des fiches explicatives pour les remplir. Quel formulaire s\'applique dépend de la nature du traitement : un fichier clients simple et un contrôle d\'accès biométrique ne relèvent pas du même régime, et le choix se fait avec votre juriste.',
                'Le transfert à l\'étranger mérite une attention particulière. La décision n° 2025-1261 de l\'Autorité, datée du 19 juin 2025, autorise Advans Côte d\'Ivoire à transférer des données personnelles vers le Portugal, et la décision n° 2025-1262, de la même date, vers la Tunisie. Ces décisions montrent que l\'autorisation se demande pour chaque destination et chaque finalité. Pour un projet, cela pèse sur le choix de l\'hébergement et des outils : héberger la base d\'un client ivoirien en Europe, ou utiliser un service d\'envoi de courriels américain, est un transfert à examiner, pas un détail technique.',
                'L\'Autorité a aussi lancé un recensement des entités publiques et privées qui traitent des données, créé un fichier national des correspondants à la protection des données et agréé des cabinets pour les accompagner. Un communiqué du 8 septembre 2022 annonçait des contrôles sur tout le territoire du 12 juillet au 30 novembre 2022. Dans ses projets, Richard limite donc les données collectées, documente chaque champ d\'un formulaire, chiffre les échanges et fournit la liste des sous-traitants techniques, afin que votre correspondant ou votre cabinet puisse remplir le dossier sans reconstituer l\'architecture.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment la facture normalisée électronique de la DGI change-t-elle un logiciel de gestion ?',
            'paragraphes' => [
                'Elle change tout pour un outil de facturation. Selon la <a href="https://www.fne.dgi.gouv.ci/documents/FNE-procedureapi.pdf">procédure d\'interfaçage par API</a> de la Direction générale des impôts (mai 2025), la loi de finances 2025 a institué l\'obligation de délivrer une facture normalisée électronique et un reçu normalisé électronique, en reprenant les articles 384 et 385 du code général des impôts et les articles 144 et suivants du livre de procédures fiscales. La facture doit être certifiée par un cachet électronique, composé d\'un code QR, d\'un visuel FNE et d\'une numérotation en série ininterrompue annuelle.',
                'Le <a href="https://www.fne.dgi.gouv.ci/">portail de la FNE</a> retrace le calendrier : ouverture des inscriptions le 19 mai 2025, début de la génération des factures certifiées le 26 mai, lancement officiel le 21 juillet 2025. Après une prorogation annoncée le 5 septembre 2025, les échéances de fin d\'usage de la facture normalisée physique sont fixées au 1er décembre 2025 pour les régimes du réel normal et du réel simplifié, au 11 décembre pour la microentreprise et au 22 décembre pour l\'entreprenant. Au 6 octobre 2026, ces dates sont passées : une entreprise qui émet encore des factures libres ne respecte plus le calendrier de la DGI.',
                'La <a href="https://www.fne.dgi.gouv.ci/faq.php">foire aux questions de la DGI</a> décrit trois voies de génération : la plateforme directe, ouverte à toutes les entreprises ; l\'interfaçage par API, pour celles qui ont leur propre système de facturation ; et les terminaux d\'émission de reçus normalisés électroniques, pour les régimes forfaitaires, les entreprises à caisse enregistreuse et les magasins à rayons multiples. Le cachet coûte 20 francs CFA toutes taxes comprises par facture, 15 par reçu et 25 par reçu pour un achat en espèces supérieur à 100 000 francs CFA ; selon la même FAQ, il est gratuit pour les transactions de 1 à 5 000 francs CFA. Les factures sont produites au format PDF.',
                'Pour un ERP, c\'est un chantier à part entière. La procédure d\'interfaçage exige que l\'entreprise s\'inscrive d\'abord sur l\'environnement de test, développe et teste la génération des ventes, des avoirs et des bordereaux, transmette des spécimens, puis obtienne l\'autorisation du directeur général des impôts avant la clé de production. L\'authentification repose sur un jeton JWT, avec OAuth 2.0 ou un certificat. Une entreprise sans équipe technique peut passer par un éditeur ou un intégrateur agréé, dont la liste figure sur le portail. Le projet peut donc prévoir, dans Odoo ou Dolibarr, le circuit complet : facture validée, appel de certification, réception du cachet, impression et archivage.',
                'Certaines activités sont dispensées, selon la même FAQ : services publics d\'eau, d\'électricité et de téléphone, pharmacies, compagnies aériennes, banques, assurances, stations-service, La Poste, concessionnaires de transport et entreprises sans installation en Côte d\'Ivoire. Une agence de voyage n\'émet pas de FNE pour un billet d\'avion, mais en émet pour ses autres prestations. Les redevables de la taxe communale de l\'entrepreneur ne peuvent pas encore s\'inscrire. Vérifiez donc votre catégorie auprès de votre centre des impôts avant de choisir le mode d\'émission, car le bon mode dépend de votre régime.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoient la TVA, l\'OHADA et le droit du commerce électronique pour un projet numérique ?',
            'paragraphes' => [
                'Le taux normal de TVA est de 18 %. Selon l\'analyse de <a href="https://blog.avocats.deloitte.fr/cote-divoire-les-principales-mesures-de-la-loi-de-finances-pour-2026/">Deloitte sur la loi de finances 2026</a> (loi n° 2025-987 du 19 décembre 2025, en vigueur depuis le 5 janvier 2026), certains intrants agricoles et d\'élevage relèvent désormais du taux réduit de 9 %. Le même texte institue un impôt sur les bénéfices des plateformes étrangères de services en ligne, fixé à 30 % d\'un bénéfice forfaitaire de 10 % du chiffre d\'affaires lorsque celui-ci atteint ou dépasse 50 millions de francs CFA en Côte d\'Ivoire. Cet impôt vise les grandes plateformes, pas votre site.',
                'Deux dispositions du même texte concernent directement un projet. Les startups numériques labellisées, hors zone franche, sont exonérées pendant trois ans de l\'impôt sur les bénéfices ou de la taxe d\'État de l\'entreprenant, selon leur régime. Et tout document rédigé en langue étrangère remis à l\'administration fiscale doit être accompagné d\'une traduction française certifiée, à peine d\'irrecevabilité. Un outil de gestion qui sort des états ou des pièces jointes en anglais doit donc pouvoir les produire en français.',
                'La Côte d\'Ivoire appartient à l\'<a href="https://www.ohada.org/les-etats-membres-de-lohada/">OHADA</a>, aux côtés de 16 autres États. L\'<a href="https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/">acte uniforme sur le droit comptable et l\'information financière</a>, adopté le 26 janvier 2017, impose le SYSCOHADA révisé : en vigueur le 1er janvier 2018 pour les comptes personnels des entités, le 1er janvier 2019 pour les comptes consolidés et combinés. Le plan de comptes d\'un ERP ivoirien doit suivre ce référentiel, et c\'est le premier point que Richard règle avec votre expert-comptable, avant d\'enregistrer la moindre écriture. Dolibarr et Odoo savent le faire, à condition de le paramétrer.',
                'Le commerce électronique relève de la loi n° 2013-546 du 30 juillet 2013 sur les transactions électroniques, que le régulateur range parmi les lois en vigueur. Sur chaque boutique, Richard affiche l\'identité du vendeur, les conditions de vente et les moyens de contacter l\'entreprise. Aucune obligation d\'hébergement local n\'est établie ici ; la question porte sur les transferts de données personnelles, traités plus haut, et non sur l\'emplacement du serveur lui-même.',
            ],
        ],
        [
            'type'      => 'tableau',
            'titre'     => 'Quels services pour les entreprises ivoiriennes, selon leur besoin ?',
            'legende'   => 'Besoins fréquents en Côte d\'Ivoire et service correspondant',
            'entetes'   => ['Besoin typique en Côte d\'Ivoire', 'Service', 'Page'],
            'lignes'    => [
                ['Émettre des factures conformes à la FNE depuis un logiciel de gestion', 'Intégration d\'Odoo avec certification de la facture', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Gérer ventes, stock et factures d\'un commerce sans ERP lourd', 'Déploiement de Dolibarr, plus léger', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Vendre en ligne avec Orange Money, MTN MoMo, Moov Money ou Wave', 'Boutique en ligne avec paiement mobile', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp à toute heure', 'Intégration de l\'API WhatsApp Business', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Filtrer les demandes et relancer sans tout traiter à la main', 'Assistant WhatsApp à intelligence artificielle', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Relier la caisse, le tableur et le logiciel comptable', 'Automatisation entre outils avec n8n ou Make', '<a href="/services/automatisation-ia">Automatisation</a>'],
                ['Raccorder un logiciel existant à la plateforme de la DGI ou à un agrégateur', 'API et connecteurs sur mesure', '<a href="/services/api-rest-integrations">API et intégrations</a>'],
                ['Présenter un cabinet, une école ou une PME à une clientèle d\'Abidjan', 'Site vitrine rapide, lisible sur mobile', '<a href="/services/site-vitrine-professionnel">Site vitrine</a>'],
                ['Sortir des classeurs et des tableurs, dans le bon ordre', 'Plan de digitalisation par paliers', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Faire adopter l\'outil par les équipes', 'Formation sur mesure à distance', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas d\'usage dans les secteurs porteurs du pays ?',
            'items' => [
                [
                    'secteur'  => 'Agriculture et cacao',
                    'probleme' => 'Une coopérative ou un exportateur suit ses lots, ses producteurs et ses paiements sur des cahiers et des tableurs.',
                    'solution' => 'Le pays est le premier producteur mondial de cacao, avec plus de 40 % du marché selon France Diplomatie. Un ERP paramétré en SYSCOHADA tient les achats par lot, les stocks par magasin et les règlements aux producteurs par mobile money, avec une facture certifiée par la DGI pour chaque vente locale.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Voir l\'intégration Odoo'],
                ],
                [
                    'secteur'  => 'Commerce et restauration livrée',
                    'probleme' => 'Les commandes arrivent par messages WhatsApp, se recopient à la main et se perdent aux heures de pointe.',
                    'solution' => 'Un site de commande en ligne branche le paiement Wave ou Orange Money, une livraison par coursier et des messages de suivi automatiques. C\'est la logique d\'un projet livré à Abidjan, décrit plus bas, où les commandes quotidiennes se comptent par centaines.',
                    'lien'     => ['url' => '/digitaliser-commerce-abidjan', 'texte' => 'Digitaliser un commerce à Abidjan'],
                ],
                [
                    'secteur'  => 'Transport, port et logistique',
                    'probleme' => 'Les transitaires jonglent entre dossiers de dédouanement, factures aux clients et relances par téléphone.',
                    'solution' => 'Le port d\'Abidjan est le deuxième d\'Afrique subsaharienne, selon France Diplomatie. Un outil de suivi par dossier, des notifications WhatsApp aux clients à chaque étape et des factures émises par l\'API de la DGI évitent la ressaisie entre le dossier, la facture et la relance.',
                    'lien'     => ['url' => '/services/automatisation-ia', 'texte' => 'Voir l\'automatisation'],
                ],
                [
                    'secteur'  => 'Bâtiment et travaux publics',
                    'probleme' => 'Les chantiers, les achats de matériaux et les situations de travaux se gèrent dans des fichiers séparés par conducteur de travaux.',
                    'solution' => 'Le plan national 2026-2030 annonce l\'achèvement du métro d\'Abidjan, 150 000 logements et cinq nouvelles universités. Dolibarr ou Odoo regroupe devis, commandes, bons de livraison et factures par chantier, et donne au gérant un état des encours sans attendre la clôture du mois.',
                    'lien'     => ['url' => '/services/integration-dolibarr', 'texte' => 'Voir l\'intégration Dolibarr'],
                ],
                [
                    'secteur'  => 'Télécommunications et finance',
                    'probleme' => 'Une fintech ou une microfinance relie des comptes mobile money, des fichiers clients et des pièces d\'identité sensibles.',
                    'solution' => 'Ce secteur manipule les données que la loi de 2013 protège le plus. Richard conçoit des API qui limitent les champs collectés, journalisent les accès et laissent à l\'entreprise la maîtrise de la base, ce qui facilite les démarches auprès de l\'Autorité de protection.',
                    'lien'     => ['url' => '/services/api-rest-integrations', 'texte' => 'Voir les API et intégrations'],
                ],
                [
                    'secteur'  => 'Formation et conseil en qualité, hygiène, sécurité et environnement',
                    'probleme' => 'Un cabinet vend un catalogue de stages mais prend les inscriptions et les évaluations sur papier.',
                    'solution' => 'Un catalogue en ligne, des fiches d\'évaluation remplies à l\'écran et des attestations générées automatiquement remplacent les formulaires papier. Un cabinet d\'Abidjan en a bénéficié, comme le montre le tableau de la dernière section.',
                    'lien'     => ['url' => '/realisations/', 'texte' => 'Voir les réalisations'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes ivoiriennes, et le FDFP peut-il financer la formation ?',
            'paragraphes' => [
                'Les formations se déroulent à distance, en visioconférence, avec des exercices sur vos propres données. Richard intervient sur place au Bénin seulement ; pour la Côte d\'Ivoire, tout se fait par écran partagé, ce qui évite les frais de déplacement et permet de répartir les séances sur plusieurs semaines. Les thèmes proposés sont l\'<a href="/formations/ia-en-entreprise">intelligence artificielle en entreprise</a>, la <a href="/formations/odoo-comptabilite-syscohada">comptabilité SYSCOHADA dans Odoo</a>, <a href="/formations/whatsapp-business">WhatsApp Business</a>, l\'<a href="/formations/n8n">automatisation avec n8n</a> et l\'<a href="/formations/adoption-erp">adoption d\'un ERP</a>. Une page locale détaille l\'offre pour <a href="/formation-ia-entreprise-abidjan">la formation à l\'IA à Abidjan</a>.',
                'Le <a href="https://fdfp.ci/presentation-du-fdfp/">Fonds de Développement de la Formation Professionnelle</a> gère la taxe d\'apprentissage, soit 0,4 % de la masse salariale, et la taxe additionnelle à la formation professionnelle continue, soit 1,2 %. Selon la page <a href="https://fdfp.ci/plan-de-formation/">Plan de formation</a>, toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan : intégration des nouveaux embauchés, perfectionnement, promotion, reconversion. Les actions de formation associées à l\'utilisation de l\'ordinateur relèvent de dispositions particulières, point à clarifier avec le Fonds avant de bâtir un plan sur l\'informatique.',
                'Le FDFP publie ses échéances pour l\'exercice 2026 : le 30 septembre (échéance passée au 6 octobre) pour déposer les projets et les nouvelles demandes d\'habilitation, le 31 octobre pour le financement des plans de formation, le 13 novembre pour les demandes de remboursement de 2025 et le 31 décembre pour le renouvellement des habilitations. Il annonce aussi, le 18 août 2026, une réforme de son cadre juridique en cours de validation : les règles décrites ici peuvent donc changer. Consultez la <a href="https://fdfp.ci/informations-dates-cles-fdfp-exercice-2026/">page des dates clés</a> avant de planifier.',
                'La question de l\'habilitation reste à trancher avec le Fonds. Selon sa <a href="https://fdfp.ci/procedures-dhabilitation/">page sur les procédures d\'habilitation</a>, celle-ci s\'impose à tout opérateur de formation privé qui prétend aux financements, pour un an, « à l\'exception des structures basées hors Côte d\'Ivoire ». Que cette exception s\'applique à un consultant établi au Bénin, et sous quelles conditions, seul le Fonds peut le dire : demandez la réponse écrite du FDFP avant de signer. Richard ne promet pas qu\'un financement sera accordé ; il fournit le programme, les objectifs pédagogiques et les justificatifs que le dossier demande.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Richard travaille depuis Cotonou. D\'après la base de données des fuseaux horaires de l\'IANA, Abidjan est à l\'heure GMT, sans changement saisonnier, et Cotonou à l\'heure d\'Afrique de l\'Ouest, une heure en avance, également toute l\'année. Quand il est 9 heures à Abidjan, il est donc 10 heures à Cotonou. Cet écart d\'une heure laisse presque toute la journée de travail en commun, du début de matinée à la fin d\'après-midi, et ne se modifie jamais en cours d\'année, ce qui simplifie la planification des réunions.',
                'Le français est la langue de travail, comme langue officielle du pays selon France Diplomatie. Les documents sont rédigés en français, y compris les spécifications et les manuels, ce qui répond aussi à l\'exigence de traduction française des pièces remises à l\'administration fiscale. Le suivi peut se faire par WhatsApp pour les questions rapides, par courriel pour les décisions écrites, et par visioconférence pour les démonstrations. Prenez garde aux numéros : depuis le 31 janvier 2021, ils comptent dix chiffres avec les préfixes 01, 05 et 07, et un champ de formulaire qui attend huit chiffres rejette vos clients.',
                'Les devis sont établis en francs CFA, la monnaie du pays. Aucun déplacement n\'est prévu en Côte d\'Ivoire : les ateliers de cadrage, les recettes et les formations se tiennent à distance. Le premier échange sert à décrire l\'activité, à lister les outils existants et à identifier les obligations qui pèsent sur le projet. Une réponse arrive sous 24 heures. Le devis peut s\'accompagner d\'un plan par étapes, avec des livrables datés, des points d\'étape et la remise des accès à votre nom : domaine, hébergement, comptes de paiement.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelles étapes suit un projet mené pour une entreprise ivoirienne ?',
            'items' => [
                ['titre' => 'Premier échange et vérification des obligations', 'duree' => 'Réponse sous 24 heures', 'texte' => 'On décrit l\'activité, le régime d\'imposition, les moyens de paiement des clients et les outils actuels. On repère ce qui dépend de la FNE, de l\'Autorité de protection ou du SYSCOHADA.'],
                ['titre' => 'Cadrage et devis en francs CFA', 'duree' => 'Selon le projet', 'texte' => 'Périmètre par paliers, choix des opérateurs de paiement, hébergement, données à reprendre et calendrier. Le devis indique ce qui est inclus et ce qui reste à votre charge, comme les cachets de la DGI ou les abonnements.'],
                ['titre' => 'Réalisation et recette sur mobile', 'duree' => 'Selon le périmètre', 'texte' => 'Chaque palier peut être testé sur des téléphones d\'entrée de gamme et sur une connexion mobile réelle avant la mise en ligne. Les essais de paiement peuvent se faire sur les environnements de test des opérateurs.'],
                ['titre' => 'Formation et mise en service', 'duree' => 'Fixée au devis', 'texte' => 'Les équipes peuvent apprendre sur leurs propres données. La documentation peut être remise en français, avec les procédures de sauvegarde et de reprise.'],
                ['titre' => 'Suivi après livraison', 'duree' => 'Selon le contrat', 'texte' => 'Correction des écarts, réglages après les premiers encaissements réels et premières factures certifiées, puis support si un contrat de maintenance est prévu.'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet numérique pour une entreprise ivoirienne ?',
            'intro' => 'Les prix de départ de Richard sont publiés en francs CFA ; l\'équivalent en euros est donné à 655,957 francs CFA pour 1 euro, parité fixe. Un projet réel dépasse souvent ces points de départ : le devis détaille chaque palier.',
            'items' => [
                ['offre' => 'Landing page', 'prix' => 'À partir de ' . ($tarifs['Landing page'] ?? '150 000 FCFA') . ' (environ 229 €)', 'inclus' => ['Une page de conversion lisible sur mobile', 'Un bouton WhatsApp et un formulaire de contact']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de ' . ($tarifs['Site vitrine'] ?? '300 000 FCFA') . ' (environ 457 €)', 'inclus' => ['Plusieurs pages pour présenter l\'entreprise', 'Un référencement de base et un hébergement à votre nom']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de ' . ($tarifs['Référencement naturel'] ?? '75 000 FCFA') . ' (environ 114 €)', 'inclus' => ['Un audit des pages et des mots recherchés', 'Des corrections techniques priorisées']],
                ['offre' => 'ERP, boutique, application, intégration de la FNE', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Chiffrage par paliers après cadrage', 'Prix communiqué après cadrage']],
            ],
            'variations' => [
                'Le nombre d\'opérateurs de paiement à intégrer : un seul portefeuille se branche plus vite que quatre, et chaque opérateur a son propre dossier d\'ouverture de compte marchand.',
                'La FNE : une connexion par API exige un environnement de test, des spécimens de factures et l\'autorisation du directeur général des impôts, avec des délais qui ne dépendent pas de Richard.',
                'L\'état des données à reprendre : un tableur propre se charge en quelques jours, des fichiers contradictoires demandent un nettoyage.',
                'Le régime des données personnelles : un fichier simple n\'implique pas le même travail documentaire qu\'un système biométrique ou un transfert à l\'étranger.',
                'Le cachet électronique de la DGI et les frais d\'opérateurs de paiement ne sont pas des honoraires : ils se règlent à part.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes guettent les projets numériques en Côte d\'Ivoire ?',
            'intro' => 'Ces erreurs reviennent dans les projets du pays ; chacune se corrige tôt, rarement à la fin.',
            'items' => [
                ['titre' => 'Garder des factures libres après les échéances de la DGI', 'texte' => 'Les dates de fin de la facture normalisée physique sont passées pour tous les régimes. Un logiciel qui n\'appelle pas la plateforme de certification ne suit plus le calendrier de la DGI.'],
                ['titre' => 'Brancher un seul opérateur de mobile money', 'texte' => 'Orange compte 16 579 863 abonnements, MTN 7 806 828, Moov 2 493 314, et Wave n\'est même pas dans les statistiques. Un seul portefeuille laisse une part des clients sans moyen de payer.'],
                ['titre' => 'Valider la commande au retour du navigateur', 'texte' => 'Une coupure de réseau interrompt le retour après paiement. Seule la notification serveur, vérifiée auprès de l\'opérateur, doit marquer la commande comme payée.'],
                ['titre' => 'Ignorer les dix chiffres des numéros', 'texte' => 'Les formulaires, les imports de contacts et les liens WhatsApp doivent accepter les numéros ivoiriens à dix chiffres, avec les préfixes 01, 05 et 07, sans retirer le zéro initial dans les liens.'],
                ['titre' => 'Envoyer les données clients à l\'étranger sans y penser', 'texte' => 'Hébergeur, messagerie, outil d\'envoi de messages : chaque service qui reçoit des données personnelles hors de l\'espace CEDEAO relève du régime de transfert de l\'Autorité de protection.'],
                ['titre' => 'Paramétrer l\'ERP avec un plan de comptes générique', 'texte' => 'Le SYSCOHADA révisé s\'applique depuis 2018. Un plan de comptes importé d\'un autre référentiel oblige à tout reprendre au premier bilan.'],
                ['titre' => 'Concevoir pour un grand écran et une fibre', 'texte' => 'Seuls 816 207 abonnements fixes existent, contre plus de 40 millions d\'abonnements à l\'internet mobile. Un site lourd de plusieurs mégaoctets pénalise la majorité des visiteurs.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelles règles peuvent encore changer avant votre mise en service ?',
            'texte' => 'Trois textes évoluent : la réforme du FDFP annoncée en août 2026, les paramètres de la FNE, qui a connu une prorogation en septembre 2025, et le droit des données personnelles, dont la loi de 2013 date d\'avant l\'essor de l\'intelligence artificielle, sans qu\'aucun texte de remplacement figure sur le site de l\'ARTCI. Les informations datent des sources du 6 octobre 2026. Avant de signer, vérifiez les pages officielles citées en bas de page et faites valider les points juridiques par votre expert-comptable ou votre juriste.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet ivoirien à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises en Côte d\'Ivoire. Il compte plus de six ans d\'expérience, a suivi sa formation à EPITECH en 2022 et co-fonde <a href="https://audyxa.com">Audyxa</a>. Il édite Wapy, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d\'Afrique francophone, ce qui lui donne une pratique directe de l\'API WhatsApp, du paiement mobile et des contraintes de connexion. Les projets ci-dessous, liés à Abidjan, ont été livrés.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels projets Richard a-t-il menés à Abidjan ?',
            'legende' => 'Projets liés à Abidjan, tous réalisés en sous-traitance pour Digital Développement',
            'entetes' => ['Projet', 'Secteur', 'Ce qui a été fait'],
            'lignes'  => [
                ['Afro Joy\'ce', 'Cuisine ivoirienne livrée', 'Les commandes prises à la main sur WhatsApp sont passées en ligne, avec paiement Wave, livraison Yango et suivi par WhatsApp : plus de 200 commandes par jour au début d\'octobre 2026. Réalisé en sous-traitance pour Digital Développement.'],
                ['INOVIS Côte d\'Ivoire', 'Études et conseil', 'Un site ancien et lent remplacé par un site rapide qui présente les références du cabinet : de 2,26 Mo à 577 Ko pour la page d\'accueil. Réalisé en sous-traitance pour Digital Développement.'],
                ['AT Consulting International', 'QHSE et formation', 'Un catalogue de dix-sept formations et une fiche d\'évaluation des stagiaires remplie en ligne. Réalisé en sous-traitance pour Digital Développement.'],
                ['Laura Cosmetics', 'Cosmétiques, Paris et Abidjan', 'Une boutique en deux devises et deux zones de livraison, avec un back-office complet : stocks, coupons et indicateurs de vente. Réalisé en sous-traitance pour Digital Développement.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où trouver les pages locales et les réalisations qui complètent celle-ci ?',
            'paragraphes' => [
                'Six pages détaillent l\'offre pour Abidjan : le <a href="/developpeur-web-abidjan">développeur web à Abidjan</a>, la <a href="/digitalisation-entreprise-abidjan">digitalisation d\'entreprise à Abidjan</a>, l\'<a href="/integration-dolibarr-abidjan">intégration Dolibarr</a>, l\'<a href="/integration-odoo-abidjan">intégration Odoo</a> et la <a href="/formation-ia-entreprise-abidjan">formation à l\'IA</a>, sans oublier la page sur la <a href="/digitaliser-commerce-abidjan">digitalisation du commerce</a>. L\'ensemble des projets figure sur la page des <a href="/realisations/">réalisations</a>, et la page <a href="/zones/">zones d\'intervention</a> récapitule les pays servis.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet en Côte d\'Ivoire ?',
            'texte'  => 'Décrivez votre activité, votre régime d\'imposition, les moyens de paiement de vos clients et vos outils actuels. Vous recevez une réponse sous 24 heures et, après un premier échange à distance, un plan par étapes avec un devis en francs CFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet ivoirien'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard intervient-il en Côte d\'Ivoire sans se déplacer ?', 'r' => 'Oui. Richard travaille depuis Cotonou et intervient à distance en Côte d\'Ivoire : cadrage, développement, recette et formation se font en visioconférence, avec un décalage d\'une heure seulement. Aucun déplacement n\'est prévu ; il n\'intervient sur place qu\'au Bénin.'],
        ['q' => 'Mon logiciel de facturation doit-il émettre la facture normalisée électronique ?', 'r' => 'Oui, sauf dispense. D\'après la FAQ de la DGI, toutes les entreprises en activité doivent délivrer une FNE ou un reçu normalisé, hors services publics, pharmacies, banques, assurances et quelques autres catégories. Les échéances de fin de la facture physique sont passées depuis décembre 2025 : le logiciel doit appeler la plateforme par API ou passer par un terminal.'],
        ['q' => 'Dois-je déclarer mon fichier clients à l\'ARTCI ?', 'r' => 'La loi n° 2013-450 prévoit une déclaration préalable ou, selon le traitement, une autorisation préalable auprès de l\'Autorité de protection, c\'est-à-dire l\'ARTCI. Le formulaire dépend de la nature du traitement, par exemple vidéosurveillance, biométrie ou transfert hors de l\'espace CEDEAO. Votre juriste tranche ; Richard documente les données collectées pour faciliter le dossier.'],
        ['q' => 'Quel mobile money brancher sur ma boutique ivoirienne ?', 'r' => 'Cela dépend de vos clients. Au 31 mars 2026, l\'ARTCI compte 16 579 863 abonnements Orange Money, 7 806 828 MTN MoMo et 2 493 314 Moov Money, sans compter Wave, dont les données manquaient. Le plus sûr est de proposer au moins Orange et un second moyen, soit en direct, soit par un agrégateur.'],
        ['q' => 'Le FDFP peut-il financer une formation animée par Richard ?', 'r' => 'Peut-être, mais rien n\'est promis. Le FDFP finance des plans de formation d\'entreprises à jour de leurs deux taxes, et exige l\'habilitation des opérateurs privés, sauf les structures basées hors de Côte d\'Ivoire. Demandez au Fonds une confirmation écrite pour un opérateur établi au Bénin. Richard fournit le programme et les justificatifs.'],
        ['q' => 'Quel plan comptable utiliser dans un ERP en Côte d\'Ivoire ?', 'r' => 'Le SYSCOHADA révisé, imposé par l\'acte uniforme OHADA du 26 janvier 2017 et en vigueur depuis le 1er janvier 2018 pour les comptes personnels des entités. Dolibarr et Odoo savent le gérer ; on le règle avec votre expert-comptable avant la première écriture, pour éviter une reprise au premier bilan.'],
        ['q' => 'Mes données peuvent-elles être hébergées hors de Côte d\'Ivoire ?', 'r' => 'Aucune obligation d\'hébergement local n\'est établie ici, mais le transfert de données personnelles à l\'étranger est encadré. L\'Autorité de protection a autorisé, le 19 juin 2025, des transferts d\'Advans Côte d\'Ivoire vers le Portugal et la Tunisie par deux décisions distinctes, ce qui montre que chaque destination se déclare.'],
        ['q' => 'Quels numéros de téléphone accepter dans un formulaire ivoirien ?', 'r' => 'Des numéros à dix chiffres, précédés de l\'indicatif +225. Depuis le 31 janvier 2021, les préfixes sont 01 pour Moov, 05 pour MTN et 07 pour Orange. Un formulaire ou une base qui attend encore huit chiffres rejette vos clients, et un lien WhatsApp mal formé échoue sans message d\'erreur.'],
        ['q' => 'Combien coûte un site pour une entreprise d\'Abidjan ?', 'r' => 'Les points de départ publiés sont de ' . ($tarifs['Landing page'] ?? '150 000 FCFA') . ' pour une landing page (environ 229 euros), ' . ($tarifs['Site vitrine'] ?? '300 000 FCFA') . ' pour un site vitrine (environ 457 euros) et ' . ($tarifs['Référencement naturel'] ?? '75 000 FCFA') . ' pour le référencement naturel (environ 114 euros). Une boutique, un ERP ou une connexion à la FNE se chiffrent sur devis, en francs CFA.'],
        ['q' => 'Comment régler Richard depuis la Côte d\'Ivoire ?', 'r' => 'Richard accepte le mobile money MTN ou Moov, la carte bancaire, PayPal, le virement et les espèces. Le mode retenu pour un règlement depuis la Côte d\'Ivoire se fixe au devis, avec l\'échéancier par palier. Les devis sont en francs CFA.'],
    ],

    'sources' => [
        ['titre' => 'ARTCI, statistiques du marché des télécommunications, 1er trimestre 2026', 'url' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ARTCI, statistiques trimestrielles (liste des rapports)', 'url' => 'https://artci.ci/statistiques-trimestrielles/', 'date' => '2026-10-06'],
        ['titre' => 'ARTCI, protection des données (loi n° 2013-450)', 'url' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-06'],
        ['titre' => 'ARTCI, textes juridiques : lois (transactions électroniques, données personnelles, communications électroniques)', 'url' => 'https://artci.ci/textes-juridiques/lois/', 'date' => '2026-10-06'],
        ['titre' => 'Autorité de protection (ARTCI), accueil', 'url' => 'https://www.autoritedeprotection.ci/', 'date' => '2026-10-06'],
        ['titre' => 'Autorité de protection (ARTCI), formulaires de déclaration, d\'autorisation et de transfert', 'url' => 'https://www.autoritedeprotection.ci/documents/', 'date' => '2026-10-06'],
        ['titre' => 'Autorité de protection (ARTCI), décision n° 2025-1261 (transfert vers le Portugal)', 'url' => 'https://www.autoritedeprotection.ci/decision-n2025-1261/', 'date' => '2026-10-06'],
        ['titre' => 'Autorité de protection (ARTCI), décision n° 2025-1262 (transfert vers la Tunisie)', 'url' => 'https://www.autoritedeprotection.ci/decision-n2025-1262/', 'date' => '2026-10-06'],
        ['titre' => 'DGI, portail de la facture normalisée électronique (calendrier et faits marquants)', 'url' => 'https://www.fne.dgi.gouv.ci/', 'date' => '2026-10-06'],
        ['titre' => 'DGI, FNE : foire aux questions (procédures, dispenses, tarifs du cachet)', 'url' => 'https://www.fne.dgi.gouv.ci/faq.php', 'date' => '2026-10-06'],
        ['titre' => 'DGI, FNE : procédure d\'interfaçage des entreprises par API (mai 2025)', 'url' => 'https://www.fne.dgi.gouv.ci/documents/FNE-procedureapi.pdf', 'date' => '2026-10-06'],
        ['titre' => 'FDFP, présentation (taxe d\'apprentissage et taxe additionnelle)', 'url' => 'https://fdfp.ci/presentation-du-fdfp/', 'date' => '2026-10-06'],
        ['titre' => 'FDFP, plan de formation', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-06'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-06'],
        ['titre' => 'FDFP, informations et dates clés de l\'exercice 2026', 'url' => 'https://fdfp.ci/informations-dates-cles-fdfp-exercice-2026/', 'date' => '2026-10-06'],
        ['titre' => 'FDFP, réforme du Fonds : atelier de validation des avant-projets de textes (18 août 2026)', 'url' => 'https://fdfp.ci/reforme-du-fdfp-les-parties-prenantes-reunies-pour-consolider-les-avant-projets-de-textes/', 'date' => '2026-10-06'],
        ['titre' => 'France Diplomatie, présentation de la Côte d\'Ivoire (mise à jour du 3 juin 2026)', 'url' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Côte d\'Ivoire', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-06'],
        ['titre' => 'Abidjan.net, résultats globaux définitifs du RGPH 2021 (29 389 150 habitants)', 'url' => 'https://news.abidjan.net/articles/710138/resultats-globaux-definitifs-du-rgph-2021-la-population-vivant-habituellement-sur-le-territoire-ivoirien-se-chiffre-a-29-389-150-habitants', 'date' => '2026-10-06'],
        ['titre' => 'Deloitte Société d\'Avocats, principales mesures de la loi de finances ivoirienne pour 2026', 'url' => 'https://blog.avocats.deloitte.fr/cote-divoire-les-principales-mesures-de-la-loi-de-finances-pour-2026/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, les États membres', 'url' => 'https://www.ohada.org/les-etats-membres-de-lohada/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, acte uniforme relatif au droit comptable et à l\'information financière (AUDCIF)', 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/', 'date' => '2026-10-06'],
        ['titre' => 'Orange Developer, API Orange Money Web Payment', 'url' => 'https://developer.orange.com/apis/om-webpay', 'date' => '2026-10-06'],
        ['titre' => 'Wave, documentation de l\'API Checkout', 'url' => 'https://docs.wave.com/checkout', 'date' => '2026-10-06'],
        ['titre' => 'CinetPay, kit de développement PHP officiel (pays pris en charge)', 'url' => 'https://github.com/cinetpay/cinetpay-php-sdk', 'date' => '2026-10-06'],
        ['titre' => 'KkiaPay, tarifs par pays', 'url' => 'https://kkiapay.me/tarifs/', 'date' => '2026-10-06'],
        ['titre' => 'FedaPay, documentation des méthodes de paiement par pays', 'url' => 'https://docs.fedapay.com/fr/payment-methods', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs téléphoniques nationaux (recommandation E.164)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ARTCI, FAQ sur le passage des numéros de 8 à 10 chiffres (31 janvier 2021)', 'url' => 'https://artci.ci/en/faq/', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires : zone Africa/Abidjan et ses liens', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['integration-odoo', 'integration-dolibarr', 'site-e-commerce', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'api-rest-integrations', 'site-vitrine-professionnel', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'formations'  => ['ia-en-entreprise', 'odoo-comptabilite-syscohada', 'whatsapp-business', 'n8n', 'adoption-erp'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'metiers'     => ['experts-comptables', 'commercants-e-commercants', 'logisticiens-transitaires'],
    ],
];
