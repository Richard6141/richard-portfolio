<?php
// ============================================================
// data/pays/benin.php · Page pays « Bénin » (vague 1D). Pays de Richard :
// intervention sur place et à distance. Faits externes relevés le 06/10/2026
// sur les pages de l'ARCEP Bénin, de la BCEAO, du Secrétariat général du
// gouvernement (Code du numérique, décret du FODEFCA), de la Cour
// constitutionnelle, de la DGI, de DataReportal, de Bpifrance, de FedaPay et
// de KKiaPay. Valeurs non confirmées : clé absente de la fiche (villes).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Cotonou, Porto-Novo, Parakou : Richard SALANON branche vos ventes sur MTN MoMo, Moov Money et Celtiis Cash et vos factures sur e-MECeF',
    'title'   => 'Digitalisation d\'entreprise au Bénin | Richard SALANON',
    'meta'    => 'Consultant basé à Cotonou : sites, applications, Odoo, Dolibarr, IA et formation pour les entreprises du Bénin, sur place ou à distance, devis en FCFA.',
    'en_bref' => 'Richard SALANON vit et travaille à Cotonou : il crée sites, applications, automatisations et intégrations d\'IA pour les entreprises béninoises, déploie Odoo et Dolibarr, et forme leurs équipes, sur place ou à distance. Les projets tiennent compte du paiement par MTN MoMo, Moov Money et Celtiis Cash, de la facture normalisée e-MECeF et du Code du numérique. Les devis sont rédigés en FCFA et reçoivent une réponse sous 24 heures.',
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'Sur place et à distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun : Richard est à Cotonou'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'fiche' => [
        'capitale' => [
            'v' => 'Porto-Novo, d\'après l\'article 1er de la Constitution ; Cotonou abrite le port, par où transite le commerce des pays voisins sans accès à la mer.',
            'source' => 'https://courconstitutionnelle.bj/files/documents/1677952525_constitution_de_.pdf',
            'date' => '2026-10-06',
        ],
        'fuseau' => [
            'v' => 'UTC+1 toute l\'année (heure d\'Afrique de l\'Ouest), sans heure d\'été.',
            'source' => 'https://data.iana.org/time-zones/tzdb/africa',
            'date' => '2026-10-06',
        ],
        'indicatif' => [
            'v' => '+229 ; numéros à 10 chiffres depuis le 30 novembre 2024, avec le préfixe 01 ajouté aux anciens numéros, quel que soit le réseau.',
            'source' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/',
            'date' => '2026-10-06',
        ],
        'langues' => [
            'v' => ['Français (langue officielle selon l\'article 1er de la Constitution)'],
            'source' => 'https://courconstitutionnelle.bj/files/documents/1677952525_constitution_de_.pdf',
            'date' => '2026-10-06',
        ],
        'population' => [
            'v' => '14,9 millions d\'habitants en 2025 (données des Nations unies reprises par DataReportal), dont 51,4 % en ville fin 2025.',
            'source' => 'https://datareportal.com/reports/digital-2026-benin',
            'date' => '2026-10-06',
        ],
        'internet' => [
            'v' => '10 814 141 abonnements internet mobile actifs et 105 715 abonnements internet fixe (0,80 % de pénétration) au 31 décembre 2025.',
            'source' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T4_2025_TaB.pdf',
            'date' => '2026-10-06',
        ],
        'mobile' => [
            'v' => '16,4 millions de connexions mobiles actives fin 2025 (110 % de la population) ; 4,80 millions d\'internautes (32,2 %).',
            'source' => 'https://datareportal.com/reports/digital-2026-benin',
            'date' => '2026-10-06',
        ],
        'mobile_money' => [
            'v' => '10 926 793 comptes actifs et 18 448 508 comptes dormants au 30 juin 2025.',
            'source' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf',
            'date' => '2026-10-06',
        ],
        'secteurs' => [
            'v' => ['Agriculture et pêche (25 % de la valeur ajoutée en 2024)', 'Commerce, hôtellerie et restauration (16 %)', 'Transports et communications (15 %)', 'Industrie manufacturière (11 %)'],
            'source' => 'https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_benin_052026_dif.pdf',
            'date' => '2026-10-06',
        ],
        'devise' => [
            'v' => 'Franc CFA (XOF), à parité fixe avec l\'euro : 655,957 FCFA pour 1 euro.',
            'source' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa',
            'date' => '2026-10-06',
        ],
        'operateurs' => [
            'v' => ['MTN Mobile Money', 'Moov Money', 'Celtiis Cash'],
            'source' => 'https://arcep.bj/interconnexion-des-plateformes-mobile-money-aux-reseaux-des-operateurs-mobiles/',
            'date' => '2026-10-06',
        ],
        'agregateurs' => [
            'v' => ['FedaPay', 'KKiaPay'],
            'source' => 'https://www.fedapay.com/pricing',
            'date' => '2026-10-06',
        ],
        'donnees' => [
            'v' => 'Loi n° 2017-20 du 20 avril 2018 portant Code du numérique (livre V pour les données personnelles), modifiée par la loi n° 2020-35 du 6 janvier 2021.',
            'source' => 'https://sgg.gouv.bj/doc/loi-2017-20/download',
            'date' => '2026-10-06',
        ],
        'autorite' => [
            'v' => 'Autorité de protection des données à caractère personnel (APDP), qui reçoit les plaintes, notamment par son numéro vert 150.',
            'source' => 'https://cio-mag.com/benin-comment-exercer-ses-droits-en-cas-de-vol-de-donnees-personnelles',
            'date' => '2026-10-06',
        ],
        'facturation' => [
            'v' => 'Facture normalisée émise par une machine électronique certifiée ou un système homologué par la DGI, pour les opérations des assujettis à la TVA, à l\'impôt sur les sociétés, aux bénéfices d\'affaires ou à la taxe professionnelle synthétique (articles 481 et 482 du Code général des impôts).',
            'source' => 'https://sgg.gouv.bj/doc/loi-2021-15/download',
            'date' => '2026-10-06',
        ],
        'tva' => [
            'v' => 'Taux normal de 18 % (article 241) ; toutes les affaires réalisées au Bénin sont soumises à la TVA, même par une société établie à l\'étranger (article 232).',
            'source' => 'https://sgg.gouv.bj/doc/loi-2021-15/download',
            'date' => '2026-10-06',
        ],
        'ohada' => [
            'v' => 'Le Bénin figure parmi les 17 États membres de l\'OHADA.',
            'source' => 'https://www.ohada.org/les-etats-membres-de-lohada/',
            'date' => '2026-10-06',
        ],
        'ecommerce' => [
            'v' => 'Code du numérique, articles 328 et suivants : informations obligatoires du vendeur en ligne et interdiction de la prospection directe sans consentement (article 332).',
            'source' => 'https://sgg.gouv.bj/doc/loi-2017-20/download',
            'date' => '2026-10-06',
        ],
        'financement' => [
            'v' => 'FODEFCA, alimenté par la taxe d\'apprentissage, qui finance des actions de formation continue des salariés.',
            'source' => 'https://sgg.gouv.bj/doc/decret-1999-053/download',
            'date' => '2026-10-06',
        ],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quel numérique attend une entreprise béninoise, entre 16,4 millions de connexions mobiles et 0,80 % d\'internet fixe ?',
            'paragraphes' => [
                'D\'après <a href="https://datareportal.com/reports/digital-2026-benin">DataReportal (Digital 2026)</a>, le pays comptait 14,9 millions d\'habitants en 2025, d\'après les Nations unies, dont 51,4 % vivaient en ville fin 2025. Le même rapport relève 4,80 millions d\'internautes, soit 32,2 % de la population, et 16,4 millions de connexions mobiles actives, soit 110 % des habitants. Il prévient que certaines cartes SIM ne servent qu\'à la voix et aux SMS. Un projet béninois se conçoit donc d\'abord pour un téléphone, avec des pages qui restent légères.',
                'L\'<a href="https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T4_2025_TaB.pdf">Observatoire de l\'Internet de l\'ARCEP</a> donne la mesure par opérateur : au 31 décembre 2025, 10 814 141 abonnements internet mobile actifs, dont 4 627 281 chez Spacetel Bénin, 3 611 685 chez Celtiis et 2 575 175 chez Moov Africa Bénin. Un an plus tôt, au quatrième trimestre 2024, le total atteignait 12 361 382. Celtiis a gagné plus d\'un million d\'abonnements en un an, quand Spacetel Bénin en perdait plus de deux millions : la clientèle d\'une application ne se prévoit pas sur un seul réseau.',
                'L\'internet fixe reste marginal. Le même observatoire compte 105 715 abonnements fixes à fin 2025, soit une pénétration de 0,80 %, dont 95 354 en fibre. Le site ou l\'outil métier d\'une PME de Cotonou, de Parakou ou de Natitingou doit donc se charger vite sur une connexion mobile moyenne : images légères, pages peu lourdes, saisie qui supporte une coupure, sans dépendre d\'une connexion fixe, que peu d\'abonnés possèdent.',
                'Dernier changement qui touche toutes les bases de contacts : depuis le 30 novembre 2024, les numéros béninois comptent dix chiffres, avec le préfixe 01 ajouté aux anciens numéros quel que soit le réseau, <a href="https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/">selon l\'ARCEP</a>. Un formulaire qui n\'accepte que huit chiffres, un CRM aux anciens numéros ou un envoi WhatsApp mal formaté échouent en silence. La reprise d\'un fichier clients commence par ce nettoyage.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir sur le Bénin avant de lancer un projet ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer dans un projet béninois ?',
            'paragraphes' => [
                'Le paiement au Bénin passe par le mobile money. Le <a href="https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf">tableau de bord des services financiers mobiles de l\'ARCEP</a> recense, au 30 juin 2025, 10 926 793 comptes actifs, 448 706 agents de distribution actifs et 287 036 accepteurs actifs de paiements marchands. Sur le seul deuxième trimestre 2025, 77 920 673 dépôts ont été passés pour 1 146,38 milliards de FCFA. Une boutique ou un service en ligne qui n\'accepte pas ce moyen de paiement se prive d\'un canal que des millions de comptes actifs utilisent.',
                'Trois portefeuilles se partagent le marché : MTN Mobile Money, Moov Money et Celtiis Cash. La page de la <a href="https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique">BCEAO sur les établissements de monnaie électronique</a> liste, pour le Bénin, trois établissements (MTN Mobile Money Bénin SA, Moov Money SA, ID Money Bénin), le Trésor public avec une carte prépayée et quatre partenariats entre banques et télécoms, dont Celtiis Cash et Coris Money. Pour l\'encaissement d\'une entreprise, ce sont ces trois portefeuilles qui comptent.',
                'Depuis janvier 2025, grâce à l\'action de régulation de l\'ARCEP, les opérateurs ont mis en œuvre l\'<a href="https://arcep.bj/interconnexion-des-plateformes-mobile-money-aux-reseaux-des-operateurs-mobiles/">interconnexion des plateformes de mobile money</a> : un même numéro peut être associé aux comptes MTN Mobile Money, Moov Money et Celtiis Cash, quel que soit le réseau de l\'abonné. Conséquence concrète pour un paiement en ligne : on ne devine plus le portefeuille d\'un client à partir du préfixe de son numéro. Le paiement doit proposer les trois portefeuilles et laisser le client choisir.',
                'Reste à relier tout cela à votre site ou à votre logiciel. Deux agrégateurs béninois couvrent l\'essentiel du besoin, FedaPay et KKiaPay ; ils s\'intègrent par un widget, un SDK ou une API, avec des webhooks qui confirment chaque paiement à votre serveur. Le tableau ci-dessous reprend leurs tarifs publiés pour le Bénin le 6 octobre 2026. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KKiaPay et CinetPay</a> détaille les critères de choix.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que coûte chaque agrégateur de paiement pour encaisser au Bénin ?',
            'legende' => 'Tarifs publiés par FedaPay et KKiaPay pour le Bénin, relevés le 6 octobre 2026. Les montants KKiaPay sont hors taxes.',
            'entetes' => ['Critère', 'FedaPay', 'KKiaPay'],
            'lignes'  => [
                ['Mobile money (MTN, Moov, Celtiis)', '1,8 % par paiement reçu pour MTN, Moov et Celtiis', 'Offre Intégration : 1,5 % à la charge du client ; offre TPE : 1 % à la charge du marchand'],
                ['Cartes bancaires', 'Visa et Mastercard : 3,6 %', 'Cartes de l\'UEMOA : 1,8 % (offre TPE, marchand) ou 2,1 % (offre Intégration, client) ; cartes hors UEMOA : 2,3 % (marchand) ou 3 % (client)'],
                ['Abonnement', 'Aucun : pas de frais tant qu\'aucun paiement n\'est reçu', 'Offre Intégration : 9 900 FCFA HT par mois, premier mois gratuit ; offre TPE : 4 900 FCFA HT par mois'],
                ['Retrait vers un compte bancaire', '3 500 FCFA par retrait', 'Reversement vers un compte bancaire proposé ; frais non publiés sur la page des tarifs'],
                ['Retrait vers le mobile money', '0 FCFA (frais d\'opérateur possibles entre réseaux)', 'Reversement vers le mobile money proposé ; frais non publiés sur la page des tarifs'],
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles obligations légales changent un projet numérique au Bénin ?',
            'intro'  => 'Sept textes ou régimes pèsent sur un projet béninois. Richard ne remplace ni un avocat ni un expert-comptable : il signale ce qui change la conception, pour que votre conseil valide au bon moment.',
            'items'  => [
                [
                    'titre' => 'Données personnelles : déclarer avant de traiter',
                    'texte' => 'L\'article 405 du <a href="https://sgg.gouv.bj/doc/loi-2017-20/download">Code du numérique</a> impose que tout traitement de données personnelles, automatisé ou non, fasse l\'objet d\'une déclaration préalable auprès de l\'APDP ou soit inscrit dans un registre tenu par une personne désignée. Un site avec formulaire de contact, une boutique, un CRM sont concernés. L\'APDP peut publier des normes simplifiées pour les traitements courants (article 406).',
                ],
                [
                    'titre' => 'Autorisation pour certains traitements',
                    'texte' => 'L\'article 407 soumet à autorisation préalable de l\'APDP, entre autres, les traitements qui portent sur un numéro national d\'identification, les données biométriques, l\'interconnexion de fichiers et le transfert de données vers un État tiers. Un pointage par empreinte digitale ou un hébergement du fichier clients hors du Bénin n\'est donc pas un simple choix technique.',
                ],
                [
                    'titre' => 'Commerce électronique : mentions et information',
                    'texte' => 'Selon l\'article 328, toute personne qui exerce une activité de commerce électronique au Bénin ou à destination d\'utilisateurs béninois donne un accès direct et permanent à ses nom ou raison sociale, adresse, courriel et téléphone, ainsi que, selon sa situation, à son numéro RCCM et à son identifiant fiscal. L\'article 339 exige, sous peine de nullité, l\'accès aux caractéristiques du bien ou du service avant tout contrat.',
                ],
                [
                    'titre' => 'Prospection directe : le consentement d\'abord',
                    'texte' => 'L\'article 332 interdit la prospection directe par communications électroniques, et l\'article 333 n\'ouvre qu\'une exception étroite : coordonnées recueillies lors d\'une vente, produits analogues, refus possible sans frais. Une campagne par SMS ou par courriel sur une liste achetée est donc exclue.',
                ],
                [
                    'titre' => 'Facture normalisée et e-MECeF',
                    'texte' => 'Selon l\'article 481 du <a href="https://sgg.gouv.bj/doc/loi-2021-15/download">Code général des impôts</a>, toute opération d\'une personne soumise à l\'impôt sur les sociétés, à l\'impôt sur les bénéfices d\'affaires, à la taxe professionnelle synthétique ou à la TVA fait l\'objet d\'une facture normalisée, qui porte le numéro d\'identification de la machine électronique certifiée, une signature et un code électronique. L\'article 482 exige une machine ou un système homologué par la DGI : un ERP qui édite des factures doit donc être homologué et dialoguer avec <a href="https://edicomgroup.com/blog/electronic-invoicing-benin-facture-normalisee">e-MECeF, le système en ligne de facturation électronique certifiée</a>.',
                ],
                [
                    'titre' => 'TVA et plateformes numériques',
                    'texte' => 'Le taux normal est de 18 % (article 241 du <a href="https://sgg.gouv.bj/doc/loi-2021-15/download">Code général des impôts</a>). L\'article 232 soumet à la TVA toutes les affaires réalisées au Bénin, même par une société établie ailleurs, et l\'article 258 confie aux opérateurs de plateformes de commerce électronique la déclaration et le reversement de la TVA sur les ventes réalisées par leur intermédiaire. La loi de finances rectificative 2026, <a href="https://beninwebtv.bj/benin-adoptee-a-lunanimite-ce-que-change-la-loi-des-finances-rectificative-2026/">adoptée en juin</a>, place en outre les plateformes numériques (hébergement, ventes en ligne, transferts d\'argent) dans le champ de la retenue à la source.',
                ],
                [
                    'titre' => 'OHADA : comptabilité et droit des affaires',
                    'texte' => 'Membre de l\'<a href="https://www.ohada.org/">OHADA</a>, le Bénin applique le droit comptable de l\'organisation, le SYSCOHADA révisé. Un ERP déployé à Cotonou doit donc partir d\'un plan comptable SYSCOHADA et non d\'un plan français. La <a href="/formations/odoo-comptabilite-syscohada">formation Odoo et comptabilité SYSCOHADA</a> couvre cette étape.',
                ],
            ],
        ],
        [
            'type'    => 'prose',
            'titre'   => 'Où en est le Code du numérique, et que dit-il en 2026 ?',
            'paragraphes' => [
                'Le texte de référence reste la loi n° 2017-20 du 20 avril 2018 portant Code du numérique, modifiée par la loi n° 2020-35 du 6 janvier 2021 (<a href="https://sgg.gouv.bj/doc/loi-2020-35/download">texte de la loi de 2021</a>, <a href="https://www.dlapiperdataprotection.com/index.html?c=BJ&amp;t=law">résumé de DLA Piper</a>). Ce qui a changé en 2025, ce sont ses textes d\'application : le conseil des ministres du 2 juillet 2025 a adopté huit décrets, sur l\'archivage électronique, l\'identification électronique, la cryptologie, les déchets électroniques ou l\'interception des données, <a href="https://www.banouto.bj/societe/article/20250702-code-du-numerique-au-benin-le-gouvernement-adopte-08-decrets-d-application-de-la-loi">rapporte Banouto</a>.',
                'Pour votre projet, deux points demandent de la vigilance. D\'abord, l\'archivage électronique de vos factures et contrats relève désormais d\'un cadre réglementaire de prestataires : si votre ERP archive des factures ou des contrats pour les conserver, il faut s\'en préoccuper dès le cadrage. Ensuite, la cryptologie est soumise à déclaration ou autorisation : un chiffrement maison, hors des outils courants d\'un hébergeur, mérite une vérification juridique avant mise en production.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises béninoises, selon leur besoin ?',
            'legende' => 'Besoins fréquents au Bénin, service correspondant et page détaillée.',
            'entetes' => ['Besoin typique au Bénin', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne avec paiement MTN MoMo, Moov Money ou Celtiis Cash', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Présenter une entreprise ou un cabinet et être trouvé à Cotonou ou Porto-Novo', 'Site vitrine et référencement local', '<a href="/services/site-vitrine-professionnel">Site vitrine</a> et <a href="/services/seo-local-google-business">SEO local</a>'],
                ['Remplacer les cahiers et les tableurs par un ERP SYSCOHADA', 'Intégration d\'Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Gérer factures, devis et stock avec un outil léger et gratuit', 'Intégration de Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Raccorder la facturation à e-MECeF ou le site à FedaPay et KKiaPay', 'API et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp à toute heure', 'Chatbot WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Envoyer devis, relances et rapports sans ressaisie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Prendre des réservations pour un hôtel, un restaurant ou un cabinet', 'Réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Système de réservation</a>'],
                ['Donner à une équipe terrain un outil sur Android', 'Application mobile', '<a href="/services/application-mobile-android-ios">Application mobile</a>'],
                ['Concevoir un outil métier que le marché ne propose pas', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Cadrer la transformation numérique d\'une PME', 'Digitalisation d\'entreprise', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>'],
                ['Mettre les équipes à niveau sur l\'IA ou sur un logiciel', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'   => 'prose',
            'titre'  => 'Quelles pages locales pour mon entreprise, selon ma ville ?',
            'paragraphes' => [
                'Richard est à Cotonou, et plusieurs villes du pays ont leur propre page, avec le contexte de leurs entreprises. À Cotonou : <a href="/developpeur-web-cotonou">développeur web</a>, <a href="/digitalisation-entreprise-cotonou">digitalisation d\'entreprise</a>, <a href="/integration-odoo-cotonou">intégration d\'Odoo</a>, <a href="/integration-dolibarr-cotonou">intégration de Dolibarr</a> et <a href="/formation-ia-entreprise-cotonou">formation à l\'IA</a>. Pour le commerce d\'import et d\'export, la page <a href="/digitaliser-import-export-cotonou">digitaliser l\'import-export à Cotonou</a> part du quotidien d\'un transitaire.',
                'Ailleurs, les pages visent un secteur précis : <a href="/digitaliser-negoce-agricole-parakou">le négoce agricole à Parakou</a>, <a href="/digitaliser-hotellerie-ouidah">l\'hôtellerie à Ouidah</a>, <a href="/digitaliser-clinique-abomey-calavi">une clinique à Abomey-Calavi</a>, <a href="/digitaliser-ecole-porto-novo">une école à Porto-Novo</a> et <a href="/digitaliser-commerce-gros-bohicon">le commerce de gros à Bohicon</a>. Pour une autre ville, le travail à distance ou le déplacement se règle au devis.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas d\'usage dans les secteurs qui font l\'économie du Bénin ?',
            'items' => [
                [
                    'secteur'  => 'Coton, anacarde et négoce agricole',
                    'probleme' => 'Les achats auprès des producteurs se notent encore sur des cahiers, et le stock ne se connaît qu\'à la fin de la campagne.',
                    'solution' => 'Selon <a href="https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_benin_052026_dif.pdf">Bpifrance</a>, le coton pourrait atteindre près de 632 000 tonnes en 2025/26 et l\'anacarde est la deuxième filière d\'exportation. Un outil de collecte, relié à un ERP, enregistre chaque achat et chaque lot, même sans réseau, puis synchronise.',
                    'lien'     => ['url' => '/digitaliser-negoce-agricole-parakou', 'texte' => 'Le négoce agricole à Parakou'],
                ],
                [
                    'secteur'  => 'Transit, import-export et logistique',
                    'probleme' => 'Les dossiers de transit circulent par courriels et par WhatsApp, et chaque client demande où en est son conteneur.',
                    'solution' => 'Le port de Cotonou dessert le Niger, le Burkina Faso et le Mali, rappelle la même fiche Bpifrance. Un suivi de dossier avec statuts, pièces jointes et notifications WhatsApp réduit les appels de relance et garde la trace de chaque étape.',
                    'lien'     => ['url' => '/digitaliser-import-export-cotonou', 'texte' => 'L\'import-export à Cotonou'],
                ],
                [
                    'secteur'  => 'Commerce, hôtellerie et restauration',
                    'probleme' => 'Un hôtel ou un restaurant prend ses réservations par téléphone, et les acomptes se perdent entre deux messages.',
                    'solution' => 'Le secteur pèse 16 % de la valeur ajoutée du pays en 2024. Un moteur de réservation avec acompte par mobile money, confirmation par WhatsApp et calendrier partagé évite les doubles réservations.',
                    'lien'     => ['url' => '/digitaliser-hotellerie-ouidah', 'texte' => 'L\'hôtellerie à Ouidah'],
                ],
                [
                    'secteur'  => 'Santé privée et cliniques',
                    'probleme' => 'Les dossiers patients sont sur papier, et la facturation se refait chaque soir.',
                    'solution' => 'Un dossier patient informatisé avec facturation, stock de pharmacie et rendez-vous. Les données de santé étant sensibles, la déclaration à l\'APDP et l\'hébergement se décident avant le premier écran.',
                    'lien'     => ['url' => '/digitaliser-clinique-abomey-calavi', 'texte' => 'Une clinique à Abomey-Calavi'],
                ],
                [
                    'secteur'  => 'Éducation et écoles privées',
                    'probleme' => 'Les frais de scolarité se paient en espèces et se pointent à la main.',
                    'solution' => 'Un paiement par mobile money, un reçu envoyé aux parents, des bulletins édités depuis une base unique, avec droits d\'accès par rôle.',
                    'lien'     => ['url' => '/digitaliser-ecole-porto-novo', 'texte' => 'Une école à Porto-Novo'],
                ],
                [
                    'secteur'  => 'Commerce de gros et distribution',
                    'probleme' => 'Les ventes à crédit et les stocks se suivent dans plusieurs tableurs qui ne concordent jamais.',
                    'solution' => 'Un ERP avec ventes, achats et stock, des factures normalisées reliées à e-MECeF et un plan comptable SYSCOHADA.',
                    'lien'     => ['url' => '/digitaliser-commerce-gros-bohicon', 'texte' => 'Le commerce de gros à Bohicon'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes au Bénin, et qui peut financer la formation ?',
            'paragraphes' => [
                'Deux formats existent. À distance, la formation se fait en visioconférence, sur des cas tirés de votre activité, avec les mêmes supports qu\'en salle. Sur place au Bénin, Richard se rend dans vos locaux à Cotonou ou dans les villes qui ont une page locale, par exemple la <a href="/formation-ia-entreprise-cotonou">formation à l\'IA en entreprise à Cotonou</a>. Les durées et les contenus se fixent au devis, d\'après votre niveau de départ et le nombre de participants.',
                'Côté catalogue, plusieurs fiches répondent aux besoins décrits plus haut : l\'<a href="/formations/ia-en-entreprise">IA en entreprise</a>, <a href="/formations/whatsapp-business">WhatsApp Business</a>, la <a href="/formations/digitaliser-son-entreprise">digitalisation d\'une entreprise</a>, <a href="/formations/odoo-comptabilite-syscohada">Odoo et la comptabilité SYSCOHADA</a> et l\'<a href="/formations/e-commerce">e-commerce</a>. Chaque fiche détaille le programme, le public visé et le format.',
                'Pour le financement, le Fonds de développement de la formation continue et de l\'apprentissage (FODEFCA) est l\'organisme à connaître. Son statut, approuvé par le <a href="https://sgg.gouv.bj/doc/decret-1999-053/download">décret n° 99-053 du 12 février 1999</a>, le place sous la tutelle du ministre chargé du Travail, avec son siège à Cotonou. Il est alimenté essentiellement par le prélèvement sur le versement patronal sur salaire, la taxe d\'apprentissage, ainsi que par les contributions des bénéficiaires et des partenaires. Sa mission inclut le financement des actions de formation et de perfectionnement de la main-d\'œuvre en cours d\'emploi.',
                'Les conditions pratiques d\'une prise en charge (agrément de l\'organisme de formation, plan de formation, plafonds, calendrier des demandes) se confirment directement auprès du FODEFCA, avant la signature, et non après. Richard fournit le programme, le devis et la facture.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Richard SALANON vit à Cotonou : le Bénin est l\'heure de référence de la collaboration. Selon la base des fuseaux horaires de l\'IANA, le pays est à UTC+1 toute l\'année, sans heure d\'été. Un appel avec Parakou, Lokossa ou Natitingou n\'a aucun décalage, et le travail avec une filiale en Europe reste dans les heures de bureau. La langue du travail est le français ; l\'anglais est possible pour les échanges avec des partenaires. Les devis sont rédigés en FCFA.',
                'Les réponses arrivent sous 24 heures, et les horaires publiés vont de 7 h à 20 h, tous les jours. Un premier échange sert à comprendre l\'activité, pas à vendre : qui saisit quoi, sur quel téléphone, avec quel réseau, quelles factures sont émises et comment elles sont payées. Le suivi peut se faire par messagerie et par visioconférence.',
                'Le paiement se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, au choix. Pour un projet à Cotonou, une réunion sur place est simple à organiser. Hors de Cotonou, la décision entre déplacement et visioconférence se prend au cadrage, selon l\'utilité d\'être sur le terrain : un atelier de formation ou un relevé de processus en entrepôt justifie un déplacement ; une recette d\'écran, rarement.',
            ],
        ],
        [
            'type'   => 'etapes',
            'titre'  => 'Comment se déroule un projet béninois, du premier message à la mise en service ?',
            'items'  => [
                ['titre' => 'Premier échange et cadrage', 'texte' => 'Un appel ou un message WhatsApp pour fixer le besoin, les utilisateurs, les paiements et les obligations qui s\'appliquent : APDP, e-MECeF, TVA, OHADA. Vous recevez un devis en FCFA.', 'duree' => 'Réponse sous 24 heures'],
                ['titre' => 'Maquette ou prototype', 'texte' => 'Les écrans peuvent être validés sur votre téléphone, pas seulement sur un ordinateur, avant le développement.', 'duree' => 'Selon le projet'],
                ['titre' => 'Développement et paiement de test', 'texte' => 'Le projet peut être réalisé par paliers, avec des paiements d\'essai sur FedaPay ou KKiaPay avant tout paiement réel.', 'duree' => 'Site vitrine : 1 à 3 semaines ; application : 1 à 3 mois'],
                ['titre' => 'Formation et mise en service', 'texte' => 'Les équipes peuvent utiliser l\'outil sur des cas réels ; sur place si le projet est au Bénin, à distance sinon.', 'duree' => 'Fixée au devis'],
                ['titre' => 'Suivi après livraison', 'texte' => 'Corrections, évolutions et maintenance peuvent être prévues au devis, avec un interlocuteur qui connaît le terrain et le projet.', 'duree' => 'Continu'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet numérique au Bénin ?',
            'intro'      => 'Prix de départ publiés par Richard, en FCFA, avec l\'équivalent en euros au taux fixe de 655,957 FCFA pour 1 euro. Un projet plus large se chiffre sur devis, après le cadrage.',
            'items'      => [
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Devis rédigé en FCFA', 'Paiement par MTN MoMo, Moov Money, carte, PayPal, virement ou espèces']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Délai habituel : 1 à 3 semaines', 'Devis rédigé en FCFA']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Devis rédigé en FCFA', 'Réponse sous 24 heures']],
            ],
            'variations' => [
                'Le nombre de moyens de paiement à raccorder : un seul agrégateur, ou FedaPay et KKiaPay en parallèle, avec les trois portefeuilles de mobile money.',
                'Le raccordement d\'un logiciel de facturation à e-MECeF, qui demande un cadrage avec le comptable et des essais sur l\'environnement de la DGI.',
                'La reprise des données existantes : anciens numéros à huit chiffres à corriger, doublons, fichiers de clients saisis à la main.',
                'Les formalités de données personnelles : déclaration à l\'APDP, et autorisation si un traitement relève de l\'article 407.',
                'Le lieu d\'hébergement : un hébergement hors du Bénin impose de traiter la question du transfert de données avant la mise en production.',
                'La formation : à distance, ou sur place avec le déplacement de Richard hors de Cotonou.',
                'L\'abonnement du logiciel choisi : une licence Odoo Enterprise ou un hébergement de base de données reste un coût à part de la prestation.',
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs voit-on le plus souvent dans les projets béninois ?',
            'intro'  => 'Sept pièges propres au contexte du pays, que le cadrage permet d\'éviter.',
            'items'  => [
                ['titre' => 'Deviner le portefeuille d\'après le préfixe', 'texte' => 'Depuis l\'interconnexion de janvier 2025, un même numéro peut ouvrir un compte MTN, Moov ou Celtiis. Un paiement qui n\'affiche qu\'un opérateur selon le numéro perd des clients.'],
                ['titre' => 'Laisser les numéros à huit chiffres', 'texte' => 'Un formulaire, un CRM ou une liste WhatsApp qui refuse ou tronque le préfixe 01 introduit depuis le 30 novembre 2024 échoue sans message d\'erreur visible.'],
                ['titre' => 'Facturer hors e-MECeF', 'texte' => 'Un logiciel qui édite des factures pour une entreprise assujettie à la TVA sans passer par la validation de la DGI crée une facture non normalisée, avec le risque fiscal qui va avec. Mieux vaut le vérifier avant d\'acheter l\'ERP.'],
                ['titre' => 'Oublier la déclaration à l\'APDP', 'texte' => 'La déclaration préalable de l\'article 405 se prépare avec la liste des données, des finalités et des durées de conservation. Elle est plus simple à rédiger avant la mise en ligne qu\'après une plainte.'],
                ['titre' => 'Héberger sans regarder où', 'texte' => 'L\'article 407 soumet à autorisation le transfert de données vers un État tiers. Choisir un serveur à l\'étranger par habitude, sans examiner cette règle, est une erreur de conception.'],
                ['titre' => 'Concevoir pour un grand écran et une fibre', 'texte' => 'Avec 0,80 % de pénétration fixe fin 2025 et la majorité des internautes sur mobile, une page lourde ou un outil qui exige une connexion constante ne sera pas utilisé.'],
                ['titre' => 'Partir d\'un plan comptable français', 'texte' => 'Un ERP configuré avec les comptes français ne produira pas les états attendus par un comptable qui travaille en SYSCOHADA.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels chiffres et quelles règles faut-il confirmer auprès de l\'administration ?',
            'texte' => 'Trois points se confirment auprès de l\'administration avant de signer. Le seuil de chiffre d\'affaires de l\'assujettissement à la TVA est fixé par arrêté du ministre chargé des finances (article 228 du Code général des impôts) et le texte du code n\'en donne pas le montant : la DGI le confirme. Les conditions de prise en charge d\'une formation par le FODEFCA se demandent au fonds. Enfin, le nombre exact de comptes de mobile money réellement utilisés dépend des critères de chaque opérateur : l\'ARCEP distingue comptes actifs et comptes dormants, et le taux d\'activité publié est de 37,2 % au deuxième trimestre 2025.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet numérique à Richard SALANON au Bénin ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Bénin, le pays où il est basé, à Cotonou. Il compte plus de six ans d\'expérience, il est passé par EPITECH à Cotonou, il a créé Wapy, son propre assistant WhatsApp à IA, et il co-fonde <a href="https://audyxa.com">Audyxa</a>. Il connaît donc les contraintes de ce marché de l\'intérieur : un client qui paie en mobile money, une facture à normaliser, un fichier à déclarer, un réseau qui s\'interrompt.',
                'Il écrit en français et chiffre en FCFA. Les réalisations ci-dessous situent le travail déjà fait au Bénin ; la page <a href="/realisations/">réalisations</a> en détaille d\'autres, et la page <a href="/richard-salanon">Richard SALANON</a> présente son parcours.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels projets Richard a-t-il déjà menés au Bénin ?',
            'legende' => 'Projets de Cotonou présentés dans les réalisations, avec leur cadre de réalisation.',
            'entetes' => ['Projet', 'Secteur', 'Ce qui a été construit', 'Cadre'],
            'lignes'  => [
                ['Wapy', 'Logiciel en ligne', 'Un assistant WhatsApp à intelligence artificielle qui répond aux clients des entreprises d\'Afrique francophone.', 'Produit de Richard'],
                ['OBA TV', 'Médias', 'Une chaîne en ligne avec direct, replays, grille des programmes, rédaction autonome et abonnement premium payé par mobile money (MTN MoMo et Moov Money).', 'Client direct'],
                ['GC Pro Consulting', 'Formation et conseil en gestion', 'Un site bilingue de plus de cent pages : catalogue de formations, inscriptions, demandes de devis en ligne et pages locales par ville.', 'Client direct'],
                ['IK Fashion House', 'Mode féminine sur mesure', 'Une boutique en ligne avec commande sur mesure à distance, payée avec FedaPay, et une page de lancement de collection.', 'Réalisé en sous-traitance pour Digital Développement'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel projet voulez-vous lancer au Bénin ?',
            'texte'  => 'Décrivez votre besoin, votre ville et le moyen de paiement de vos clients. Vous recevez une réponse sous 24 heures et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il déclarer mon site ou mon application à l\'APDP au Bénin ?', 'r' => 'Oui dans la plupart des cas. L\'article 405 du Code du numérique impose une déclaration préalable auprès de l\'APDP, ou une inscription dans un registre tenu par une personne désignée, pour tout traitement de données personnelles, automatisé ou non. Un formulaire de contact, une boutique ou un CRM en font partie. L\'APDP peut publier des normes simplifiées pour les traitements courants (article 406).'],
        ['q' => 'Mon logiciel de facturation doit-il produire des factures normalisées e-MECeF ?', 'r' => 'Si votre entreprise est assujettie à la TVA (ou à l\'impôt sur les sociétés, aux bénéfices d\'affaires ou à la taxe professionnelle synthétique), oui : la facture normalisée est obligatoire, et les articles 481 et 482 du Code général des impôts demandent une machine ou un système de facturation homologué par la DGI. Pour un ERP comme Odoo ou Dolibarr, le raccordement à e-MECeF se cadre avant le déploiement, avec votre comptable.'],
        ['q' => 'FedaPay ou KKiaPay : lequel choisir pour encaisser par mobile money ?', 'r' => 'Sur leurs pages de tarifs du 6 octobre 2026, FedaPay prend 1,8 % par paiement mobile money reçu, sans abonnement, quand KKiaPay propose une offre Intégration à 9 900 FCFA HT par mois, avec 1,5 % payés par le client. Le point d\'équilibre dépend de votre volume mensuel ; le comparatif du site détaille le calcul.'],
        ['q' => 'Peut-on payer avec Celtiis Cash sur une boutique en ligne ?', 'r' => 'Oui : FedaPay affiche Celtiis parmi ses moyens de paiement au Bénin, à 1,8 %. Depuis janvier 2025, l\'interconnexion imposée par l\'ARCEP permet en outre d\'ouvrir un compte MTN, Moov ou Celtiis avec le même numéro, donc le portefeuille ne se déduit plus du réseau du client.'],
        ['q' => 'Puis-je héberger les données de mes clients à l\'étranger ?', 'r' => 'Cela se prépare. L\'article 407 du Code du numérique place le transfert de données personnelles vers un État tiers parmi les traitements qui exigent l\'autorisation préalable de l\'APDP. Un hébergement hors du Bénin se choisit donc en connaissance de cette règle, et la décision est consignée dans le dossier de conformité.'],
        ['q' => 'La TVA s\'applique-t-elle aux services numériques vendus au Bénin ?', 'r' => 'Le taux normal est de 18 % (article 241), et l\'article 232 du Code général des impôts soumet à la TVA toutes les affaires réalisées au Bénin, même par une société établie ailleurs. La loi de finances rectificative 2026, adoptée en juin, place en plus les plateformes numériques dans le champ de la retenue à la source. Votre expert-comptable valide le traitement exact.'],
        ['q' => 'Puis-je envoyer des messages WhatsApp ou SMS promotionnels à mes clients ?', 'r' => 'Seulement avec leur consentement, sauf l\'exception étroite de l\'article 333 : coordonnées recueillies lors d\'une vente, produits ou services analogues, possibilité de refuser gratuitement. L\'article 332 interdit la prospection directe électronique pour le reste. Une liste achetée est donc à écarter.'],
        ['q' => 'Le FODEFCA peut-il financer une formation de mon équipe ?', 'r' => 'Le FODEFCA a pour mission de financer des actions de formation et de perfectionnement des salariés, avec la taxe d\'apprentissage comme principale ressource. Les conditions pratiques d\'une prise en charge se demandent au fonds avant de signer ; Richard fournit le programme, le devis et la facture.'],
        ['q' => 'Richard se déplace-t-il dans mon entreprise au Bénin ?', 'r' => 'Oui : il habite à Cotonou, intervient sur place et à distance, et plusieurs villes ont une page locale. Pour un projet à Cotonou, la réunion sur place est simple. Hors de Cotonou, le déplacement se décide au cadrage, selon ce qu\'il apporte : formation, relevé de processus ou mise en service.'],
        ['q' => 'Mon fichier clients contient des numéros à huit chiffres : que faire ?', 'r' => 'Depuis le 30 novembre 2024, les numéros mobiles béninois ont dix chiffres, avec le préfixe 01. Un nettoyage du fichier ajoute ce préfixe aux anciens numéros, corrige les formulaires de saisie et vérifie le format attendu par WhatsApp avant toute campagne ou toute relance.'],
        ['q' => 'Combien de temps faut-il pour un site vitrine au Bénin ?', 'r' => 'Comptez 1 à 3 semaines à partir d\'un contenu prêt, et 1 à 3 mois pour une application sur mesure. Le prix de départ d\'un site vitrine est de 300 000 FCFA, soit environ 457 euros ; il augmente avec le nombre de pages, de langues et de moyens de paiement.'],
        ['q' => 'Quels moyens de paiement Richard accepte-t-il pour ses prestations ?', 'r' => 'Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Le devis est établi en FCFA, avec une réponse sous 24 heures.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026, rapport sur le Bénin (population, internautes, connexions mobiles)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-06'],
        ['titre' => 'ARCEP Bénin, Observatoire de l\'Internet au 31 décembre 2025', 'url' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T4_2025_TaB.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ARCEP Bénin, Observatoire des services financiers mobiles au 30 juin 2025', 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ARCEP Bénin, interconnexion des plateformes de mobile money', 'url' => 'https://arcep.bj/interconnexion-des-plateformes-mobile-money-aux-reseaux-des-operateurs-mobiles/', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, établissements de monnaie électronique au Bénin', 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2017-20 du 20 avril 2018 portant Code du numérique (Secrétariat général du gouvernement)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-06'],
        ['titre' => 'Edicom, la facture normalisée au Bénin et le système e-MECeF', 'url' => 'https://edicomgroup.com/blog/electronic-invoicing-benin-facture-normalisee', 'date' => '2026-10-06'],
        ['titre' => 'DLA Piper, Data protection laws of the world : Bénin', 'url' => 'https://www.dlapiperdataprotection.com/index.html?c=BJ&t=law', 'date' => '2026-10-06'],
        ['titre' => 'Banouto, huit décrets d\'application du Code du numérique (2 juillet 2025)', 'url' => 'https://www.banouto.bj/societe/article/20250702-code-du-numerique-au-benin-le-gouvernement-adopte-08-decrets-d-application-de-la-loi', 'date' => '2026-10-06'],
        ['titre' => 'CIO Mag, protection des données personnelles et APDP', 'url' => 'https://cio-mag.com/benin-comment-exercer-ses-droits-en-cas-de-vol-de-donnees-personnelles', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2021-15 du 23 décembre 2021 portant Code général des impôts (Secrétariat général du gouvernement)', 'url' => 'https://sgg.gouv.bj/doc/loi-2021-15/download', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2020-35 du 6 janvier 2021 modifiant la loi n° 2017-20 portant Code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2020-35/download', 'date' => '2026-10-06'],
        ['titre' => 'Bénin Web TV, loi de finances rectificative 2026', 'url' => 'https://beninwebtv.bj/benin-adoptee-a-lunanimite-ce-que-change-la-loi-des-finances-rectificative-2026/', 'date' => '2026-10-06'],
        ['titre' => 'Décret n° 99-053 du 12 février 1999 portant statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-1999-053/download', 'date' => '2026-10-06'],
        ['titre' => 'Constitution de la République du Bénin (Cour constitutionnelle)', 'url' => 'https://courconstitutionnelle.bj/files/documents/1677952525_constitution_de_.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Bpifrance, fiche pays Bénin, mai 2026', 'url' => 'https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_benin_052026_dif.pdf', 'date' => '2026-10-06'],
        ['titre' => 'FedaPay, tarifs pour le Bénin', 'url' => 'https://www.fedapay.com/pricing', 'date' => '2026-10-06'],
        ['titre' => 'KKiaPay, tarifs pour le Bénin', 'url' => 'https://kkiapay.me/tarifs/', 'date' => '2026-10-06'],
        ['titre' => 'ARCEP Bénin, passage des numéros à dix chiffres le 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-06'],
        ['titre' => 'BCEAO, histoire du franc CFA et parité avec l\'euro', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base des fuseaux horaires (Afrique)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, États membres', 'url' => 'https://www.ohada.org/les-etats-membres-de-lohada/', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'integration-odoo', 'integration-dolibarr', 'api-rest-integrations', 'agents-ia-chatbot-whatsapp', 'automatisation-ia', 'digitalisation-d-entreprise', 'formation-en-entreprise', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['ia-en-entreprise', 'whatsapp-business', 'odoo-comptabilite-syscohada', 'digitaliser-son-entreprise', 'e-commerce'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'metiers'     => ['commercants-e-commercants', 'logisticiens-transitaires', 'ong-projets-developpement'],
    ],
];
