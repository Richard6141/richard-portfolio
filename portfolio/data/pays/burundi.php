<?php
// ============================================================
// data/pays/burundi.php · Page pays « Burundi » (vague 1D, tranche T5).
// Le Burundi n'est pas dans faits.php 'pays_travailles' : accompagnement à
// distance, devis en euros, aucun tarif chiffré. Pays hors OHADA : pas de clé
// 'ohada'. Clés de fiche non établies et donc absentes : indicatif,
// agregateurs, ecommerce, financement. Faits relevés le 06/10/2026.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Lumicash, EcoCash, BurundiPay et OBR : le consultant en digitalisation de Cotonou qui relie vos ventes, vos factures et votre IA à Bujumbura et à Gitega',
    'title'   => 'Consultant en digitalisation au Burundi | Richard SALANON',
    'meta'    => 'Création de site WordPress et e-commerce, application mobile, SEO, Google Ads, IA et formations au Burundi : Lumicash, EcoCash, devis en euros.',
    'en_bref' => 'Depuis Cotonou, Richard conçoit à distance des sites, des applications web et mobiles, des automatisations, des intégrations d’IA et des déploiements Odoo pour les entreprises, les ONG et les institutions financières du Burundi. Les paiements passent par Lumicash et EcoCash, la facture suit le système eBMS de l’Office burundais des recettes, et les données personnelles relèvent de la loi du 10 mars 2026. Les échanges se font en français, par visioconférence et WhatsApp, avec un décalage d’une heure. Le devis est gratuit et rédigé en euros ; une première réponse part sous 24 heures.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Gitega, capitale politique depuis le 21 décembre 2018 ; Bujumbura reste la grande ville économique', 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/burundi/presentation-du-burundi', 'date' => '2026-10-06'],
        'villes'   => ['v' => ['Bujumbura', 'Gitega', 'Ngozi', 'Muyinga', 'Rumonge'], 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/burundi/presentation-du-burundi', 'date' => '2026-10-06'],
        'fuseau'   => ['v' => 'Heure d’Afrique centrale, UTC+2, sans heure d’été : une heure de plus qu’à Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        'langues'  => ['v' => ['kirundi', 'français'], 'source' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/burundi/presentation-du-burundi', 'date' => '2026-10-06'],
        'population' => ['v' => '12 332 788 habitants au recensement de 2024 (résultats préliminaires publiés par décret du 27 mars 2025)', 'source' => 'https://leap.unep.org/en/countries/bi/national-legislation/decret-no100032-du-27-mars-2025-portant-publication-des-resultats', 'date' => '2026-10-06'],
        'internet' => ['v' => '1,60 million d’internautes fin 2025, soit 11,1 % de la population, pour 84,4 % de ruraux', 'source' => 'https://datareportal.com/reports/digital-2026-burundi', 'date' => '2026-10-06'],
        'mobile'   => ['v' => '8,79 million de connexions mobiles fin 2025 (60,7 % de la population), dont 66,8 % à haut débit', 'source' => 'https://datareportal.com/reports/digital-2026-burundi', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Environ 2,65 millions d’utilisateurs de services financiers mobiles au premier trimestre 2025, soit 21,45 % de pénétration, selon l’ARCT', 'source' => 'https://cio-mag.com/burundi-hausse-de-la-penetration-mobile-et-internet-au-premier-trimestre-2025-arct/', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['services (51 % du PIB)', 'agriculture (31,6 % du PIB), où travaillent 85 % des habitants', 'industrie (17,4 % du PIB)', 'café et mines à l’exportation'], 'source' => 'https://www.banquemondiale.org/fr/country/burundi/overview', 'date' => '2026-10-06'],
        'devise'   => ['v' => 'Franc burundais (BIF), monnaie des montants de la loi de finances 2026/2027', 'source' => 'https://www.obr.bi/images/Tableau_des_Nvlles_mesures_LB_2026-2027_V_du_3-7-2026.docx', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Lumitel (Viettel Burundi)', 'Econet Leo', 'Onatel'], 'source' => 'https://cio-mag.com/burundi-hausse-de-la-penetration-mobile-et-internet-au-premier-trimestre-2025-arct/', 'date' => '2026-10-06'],
        'donnees'  => ['v' => 'Loi n° 1/03 du 10 mars 2026 relative à la protection des données personnelles, adoptée par l’Assemblée nationale le 15 janvier 2026 (texte promulgué à consulter auprès des autorités)', 'source' => 'https://research.lawlab.africa/burundi/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Agence de protection des données à caractère personnel, prévue par l’article 42 de la loi de 2026 ; organisation fixée par décret, mise en place à confirmer', 'source' => 'https://research.lawlab.africa/burundi/', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facturation électronique eBMS de l’OBR : tout assujetti à la TVA utilise une machine de facturation agréée (loi 1/10 de 2020)', 'source' => 'https://www.dlapiperafrica.com/en/burundi/insights/2022/La-facturation-electronique.html', 'date' => '2026-10-06'],
        'tva' => ['v' => 'Assujettissement d’office dès 25 millions de FBu de chiffre d’affaires taxable, au titre de l’exercice budgétaire 2026/2027 (article 271)', 'source' => 'https://www.obr.bi/images/Tableau_des_Nvlles_mesures_LB_2026-2027_V_du_3-7-2026.docx', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure d’avance au Burundi (UTC+2 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change, pour un projet, un pays de 1,60 million d’internautes et de 8,79 millions de connexions mobiles ?',
            'paragraphes' => [
                'Selon <a href="https://datareportal.com/reports/digital-2026-burundi">DataReportal (Digital 2026)</a>, le Burundi comptait 14,5 millions d’habitants en octobre 2025, dont 84,4 % vivaient à la campagne, et 1,60 million d’internautes à la fin de l’année, soit 11,1 % de la population. Le recensement de 2024, dont les résultats préliminaires ont été publiés par décret du 27 mars 2025, retient pour sa part 12 332 788 habitants. Dans les deux cas, moins d’un habitant sur huit utilise Internet : le pays reste faiblement connecté.',
                'Le téléphone, lui, est partout : 8,79 millions de connexions mobiles fin 2025, dont 66,8 % à haut débit. Pour un projet, cela dicte un ordre de priorité simple. Le mobile passe avant l’ordinateur, la page légère avant la page spectaculaire, le paiement par numéro de téléphone avant la carte, et le parcours qui tient sur une connexion lente avant celui qui suppose la fibre. Une boutique de plusieurs mégaoctets d’images perd ses visiteurs avant la première photo.',
                'Les réseaux sociaux servent de vitrine. DataReportal compte 1,20 million d’identités sociales, et autant d’utilisateurs de Facebook (1,20 million). Un commerçant de Bujumbura ou de Gitega touche donc ses clients là où ils sont déjà, et le site vient ensuite fixer l’offre, les prix et les moyens de contact sur une adresse qui lui appartient.',
                'Le satellite change aussi la donne dans les zones mal couvertes : Starlink a lancé ses services au Burundi en septembre 2024, d’après <a href="https://cio-mag.com/burundi-hausse-de-la-penetration-mobile-et-internet-au-premier-trimestre-2025-arct/">CIO Mag</a>. Pour une ONG ou une coopérative basée loin des grands axes, la connexion cesse d’être un obstacle absolu, à condition de concevoir des applications qui se synchronisent sans bloquer l’utilisateur.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir pour un projet numérique au Burundi ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour vendre au Burundi ?',
            'paragraphes' => [
                'Le paiement burundais est d’abord un paiement par portefeuille mobile. L’Agence de régulation et de contrôle des télécommunications (ARCT) a compté environ 2,65 millions d’utilisateurs de services financiers mobiles au premier trimestre 2025, soit 21,45 % de pénétration. Trois plateformes se partagent le marché : Lumicash, portefeuille lancé en 2017 par <a href="https://www.lumitel.bi/">Lumitel</a>, société Viettel Burundi ; EcoCash, d’Econet Leo ; Smart Pesa, associé à Onatel. Un client qui n’a pas de compte en banque règle presque toujours par l’un d’eux.',
                'Depuis le 23 avril 2026, la Banque de la République du Burundi (BRB) exploite BurundiPay, un système de paiement instantané ouvert jour et nuit, qui relie banques, établissements de microfinance et institutions de paiement selon la norme ISO 20022, avec accès par téléphone de base grâce aux codes USSD, d’après <a href="https://www.wearetech.africa/fr/fils/actualites/tech/le-burundi-lance-le-systeme-national-de-paiement-instantane-burundipay">WeAreTech Africa</a>. Il est financé par la Banque mondiale. Pour un site marchand, c’est la promesse d’un client de Lumicash qui paie un commerçant dont le compte est sur EcoCash.',
                'Concrètement, l’intégration se fait en trois temps. Richard ouvre d’abord, avec l’entreprise, la démarche d’agrément marchand auprès de l’opérateur choisi, car ce sont eux qui délivrent les accès techniques. Il développe ensuite le parcours de paiement : bouton, message de confirmation envoyé au téléphone du client, page d’attente tolérante aux coupures, notification de retour. Il rattache enfin chaque paiement reçu à la bonne commande, puis à la facture eBMS. Les frais et délais de chaque opérateur ne sont pas publics : ils se confirment par écrit auprès d’eux avant de chiffrer.',
                'La carte bancaire reste marginale pour un public local. Elle sert surtout à encaisser des clients de la diaspora, des partenaires étrangers ou des bailleurs, et le virement convient aux factures d’ONG et d’entreprises : le devis de Richard le prévoit en euros, avec les modes de règlement de sa fiche (virement, PayPal, carte, mobile money).',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Burundi ?',
            'paragraphes' => [
                'La première est récente. L’Assemblée nationale du Burundi a adopté à l’unanimité, le 15 janvier 2026, le texte sur la collecte, le traitement et l’exploitation des données personnelles, qui prévoit une autorité administrative indépendante et des sanctions pénales, selon <a href="https://www.wearetech.africa/fr/fils/actualites/tech/burundi-le-parlement-adopte-une-loi-cle-sur-la-protection-des-donnees-personnelles">WeAreTech Africa</a>. Il porte la référence loi n° 1/03 du 10 mars 2026, d’après <a href="https://research.lawlab.africa/burundi/">Law Lab Africa</a> et <a href="https://www.mofo.com/privacy-library/burundi">Morrison Foerster</a>, et repose sur le consentement préalable de la personne concernée ; le texte promulgué se consulte auprès des autorités avant de figer les mentions d’un site. Tout site qui collecte un nom, un téléphone ou un historique d’achat y est soumis.',
                'La conséquence pratique tient en quatre gestes : une case de consentement non précochée, une page de politique de confidentialité en français et en kirundi si le public l’exige, un registre des traitements tenu à jour, et un contrat avec chaque prestataire qui touche aux données. La loi prévoit une Agence de protection des données à caractère personnel (article 42), dont l’organisation relève d’un décret : sa mise en place et les formalités d’enregistrement auprès d’elle sont à confirmer avant la mise en ligne. Richard rédige ces mentions avec le client et lui renvoie le point à vérifier.',
                'La facturation est le deuxième chantier. L’Office burundais des recettes (OBR) impose l’eBMS, la facturation électronique : selon <a href="https://www.dlapiperafrica.com/en/burundi/insights/2022/La-facturation-electronique.html">DLA Piper</a>, la loi n° 1/10 du 16 novembre 2020 oblige les assujettis à la TVA à utiliser des machines de facturation agréées, dont l’ordonnance ministérielle n° 540/48 du 24 janvier 2022 fixe les conditions. Edicom ajoute que les documents générés par ces machines doivent être archivés dix ans. Selon le tableau des mesures de la loi de finances 2026/2027 publié par l’OBR, la TVA n’est déductible ou remboursable que si elle figure sur une facture électronique envoyée à la base eBMS au moment de son établissement. Un site marchand ou un ERP doit donc émettre ou transmettre chaque facture à l’OBR.',
                'La TVA constitue le troisième point. Son taux normal est de 18 %, d’après <a href="https://obr.bi/index.php/actualites/436-la-tva-au-coeur-des-echanges-entre-l-obr-et-les-contribuables">l’OBR</a>. L’article 271 de la loi de finances 2026/2027 (<a href="https://www.dlapiperafrica.com/fr/burundi/insights/2026/Reformes_budgetaires">loi n° 1/10 du 30 juin 2026</a>) fixe à 25 millions de FBu le chiffre d’affaires taxable à partir duquel une personne est assujettie d’office, et à 5 millions de FBu le seuil d’assujettissement par option. La TVA se facture à partir du premier jour du mois suivant celui où le seuil est atteint. Des commerçants plus petits entrent donc dans le système et ont besoin d’un outil qui facture sans erreur.',
                'Le Burundi n’appartient pas à l’OHADA, dont le site officiel annonce 17 États membres : un ERP déployé ici ne s’appuie pas sur la localisation SYSCOHADA livrée par défaut, et le plan de comptes se fixe avec l’expert-comptable de l’entreprise. Quant à l’hébergement, le choix d’un serveur à l’étranger se documente dans le contrat de sous-traitance et se confirme auprès de l’Agence de protection des données avant la mise en ligne.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises du Burundi ?',
            'legende' => 'Dix besoins courants à Bujumbura, Gitega et dans les provinces, avec le service qui y répond.',
            'entetes' => ['Besoin typique au Burundi', 'Service', 'Page'],
            'lignes'  => [
                ['Encaisser par Lumicash et EcoCash une boutique ou un abonnement', 'Site e-commerce', '<a href="/services/site-e-commerce">/services/site-e-commerce</a>'],
                ['Émettre des factures conformes à l’eBMS et suivre la TVA à 18 %', 'Intégration Odoo', '<a href="/services/integration-odoo">/services/integration-odoo</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp en dehors des heures de bureau', 'Intégration WhatsApp', '<a href="/services/integration-whatsapp">/services/integration-whatsapp</a>'],
                ['Suivre des collecteurs et des coopératives sur le terrain, même hors ligne', 'Application mobile Android et iOS', '<a href="/services/application-mobile-android-ios">/services/application-mobile-android-ios</a>'],
                ['Rapprocher les rapports d’activité d’un projet financé par un bailleur', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">/services/application-web-sur-mesure</a>'],
                ['Relier un portefeuille mobile, un ERP et un tableau de bord', 'API et intégrations', '<a href="/services/api-rest-integrations">/services/api-rest-integrations</a>'],
                ['Supprimer les ressaisies entre tableur, caisse et comptabilité', 'Automatisation avec l’IA', '<a href="/services/automatisation-ia">/services/automatisation-ia</a>'],
                ['Cadrer un projet avant de demander un financement ou de lancer un appel d’offres', 'Audit et étude de projet', '<a href="/services/audit-etude-de-projet">/services/audit-etude-de-projet</a>'],
                ['Former une équipe à l’IA, à Odoo ou à l’automatisation', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">/services/formation-en-entreprise</a>'],
                ['Garder un site en ligne malgré les coupures et les changements des règles de l’OBR', 'Maintenance et support', '<a href="/services/maintenance-support">/services/maintenance-support</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets numériques dans le café, la microfinance, les ONG, le commerce et les télécoms burundais ?',
            'items' => [
                [
                    'secteur'  => 'Café et agriculture',
                    'probleme' => 'Selon la Banque mondiale, le café fait partie des moteurs des exportations burundaises, dans un pays où 85 % des habitants travaillent dans l’agriculture. Les achats auprès des producteurs, les pesées et les avances se notent sur papier dans des stations de lavage éloignées, et les écarts apparaissent à la clôture de la campagne.',
                    'solution' => 'Une application mobile de collecte qui fonctionne sans réseau, enregistre chaque livraison et chaque paiement par Lumicash ou EcoCash, puis se synchronise dès qu’une connexion revient. Le tableau de bord de la coopérative se lit chaque soir.',
                ],
                [
                    'secteur'  => 'Banques et microfinance',
                    'probleme' => 'Avec BurundiPay, lancé par la BRB en avril 2026, les clients attendent des virements instantanés entre banques et portefeuilles, alors que les outils internes restent cloisonnés et que les rapprochements se font en fin de journée.',
                    'solution' => 'Des interfaces entre le cœur de gestion, les portefeuilles mobiles et un espace client web, avec rapprochement automatique et alertes sur les opérations en attente. Le cadrage précède tout code, avec le service de conformité.',
                ],
                [
                    'secteur'  => 'ONG et projets de développement',
                    'probleme' => 'Les bailleurs, dont la Banque mondiale qui finance des projets d’appui à l’économie numérique, exigent des indicateurs fiables et des justificatifs. Les équipes de terrain les saisissent dans des tableurs qu’il faut ensuite fusionner à la main.',
                    'solution' => 'Une application web de suivi des activités avec formulaires mobiles, rôles par projet, export pour les rapports aux bailleurs, et consentement des bénéficiaires conforme à la loi de 2026 sur les données personnelles.',
                ],
                [
                    'secteur'  => 'Commerce et distribution',
                    'probleme' => 'Pour l’exercice 2026/2027, les commerçants dont le chiffre d’affaires taxable atteint 25 millions de FBu entrent dans la TVA à 18 % et doivent passer par l’eBMS. Caisse, stock et déclaration ne se parlent pas.',
                    'solution' => 'Un ERP Odoo avec point de vente, stock et module de facturation eBMS, qui transmet chaque facture à l’OBR et rassemble les données de la déclaration de TVA.',
                ],
                [
                    'secteur'  => 'Services et télécoms',
                    'probleme' => 'Lumitel, Econet Leo et Onatel vendent leurs forfaits et leurs services à des revendeurs et à des entreprises qui ont besoin de répondre vite à des centaines de messages par jour.',
                    'solution' => 'Un assistant WhatsApp à IA, relié à la base de clients, qui répond aux questions courantes en français, passe la main à un humain quand le sujet l’exige, et consigne chaque échange.',
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle formation à distance pour une équipe de Bujumbura ou de Gitega, et qui peut la financer ?',
            'paragraphes' => [
                'La formation peut se donner à distance, en visioconférence, par séances de deux à trois heures plutôt que par journées entières : une connexion burundaise supporte mal une session de huit heures, et les équipes gardent ainsi le temps de pratiquer entre deux séances. Les supports sont en français, les exercices peuvent porter sur les documents réels de l’entreprise, et chaque séance peut se terminer par une tâche à rendre.',
                'Les thèmes les plus demandés sont l’usage quotidien de l’IA, avec la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>, la vente par WhatsApp avec <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, la prise en main d’Odoo avec <a href="/formations/odoo-utilisateurs">Odoo pour les utilisateurs</a>, et l’enchaînement de tâches avec <a href="/formations/n8n">n8n de zéro à l’autonomie</a>. Les dirigeants démarrent souvent par <a href="/formations/digitaliser-son-entreprise">digitaliser son entreprise</a>. Le catalogue complet est sur <a href="/formations/">la page des formations</a>.',
                'Le financement dépend de la structure. Une ONG ou un projet adossé à un bailleur inscrit souvent la formation à son budget d’activités ; une entreprise la règle sur ses frais généraux, par virement en euros. Aucun dispositif public burundais de prise en charge n’est établi ici : l’entreprise confirme auprès de son bailleur ou de son conseil les conditions avant de signer le devis. Le premier échange et le devis sont gratuits.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Le Burundi vit à l’heure d’Afrique centrale, UTC+2 sans heure d’été, soit une heure de plus qu’à Cotonou. Une réunion fixée à 10 h à Bujumbura commence à 9 h pour Richard : les plages de 8 h à 12 h au Burundi sont donc ouvertes presque sans effort, et la fin d’après-midi reste utilisable pour les points de suivi. Les horaires de Richard, de 7 h à 20 h tous les jours, recouvrent la journée de travail burundaise.',
                'La langue de travail est le français, langue officielle avec le kirundi. Les écrans destinés au public burundais peuvent proposer le kirundi ; la traduction peut alors se confier à un relecteur local, intégré au projet. Les outils restent simples : visioconférence, WhatsApp pour les questions rapides ; le projet peut aussi prévoir un tableau de suivi partagé et une démonstration à la fin de chaque palier.',
                'Le devis est rédigé en euros. Le règlement se fait par virement, PayPal ou carte bancaire ; les virements en euros vers l’étranger relèvent de la réglementation des changes de chaque pays et se vérifient avec la banque de l’entreprise. Aucun déplacement n’est prévu : les ateliers, les recettes et la formation se déroulent par écran, avec les mêmes livrables qu’une prestation sur place.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise du Burundi ?',
            'paragraphes' => [
                'Le prix est fixé sur devis, en euros, après un premier échange gratuit. Il dépend de quatre choses propres au pays. D’abord le moyen de paiement : un portefeuille mobile demande un agrément marchand auprès de l’opérateur, et chaque opérateur ajoute son propre travail de test. Ensuite l’eBMS : un projet qui facture doit transmettre à l’OBR, ce qui ajoute une intégration que les plateformes standard ne livrent pas.',
                'Vient ensuite la connexion. Une application qui doit fonctionner hors ligne, avec synchronisation, coûte plus qu’un site qui se consulte en ligne. Enfin la langue : une interface en français seul est la plus économique ; ajouter le kirundi suppose une traduction et une relecture locales. Un module d’ERP du commerce de détail s’estime très différemment d’une application de suivi pour une ONG.',
                'Les modules prêts à l’emploi réduisent la facture. Il existe des connecteurs eBMS pour Odoo, vendus sur <a href="https://apps.odoo.com/apps/modules/17.0/aminitech_ebms_invoice/">l’App Store d’Odoo</a>, et pour ERPNext, sur <a href="https://cloud.frappe.io/marketplace/apps/burundi_compliance">Frappe Cloud</a>. Richard compare ces options avec le client avant de proposer du développement sur mesure. Le devis détaille chaque palier, pour que l’entreprise décide palier par palier.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelles erreurs fréquentes éviter dans un projet au Burundi ?',
            'texte' => 'Concevoir une page lourde pour un public qui navigue sur une connexion mobile lente, alors que 84,4 % des habitants vivent à la campagne. Proposer uniquement la carte bancaire, quand l’essentiel des paiements passe par Lumicash, EcoCash ou Smart Pesa. Lancer un module de facturation sans tenir compte de l’eBMS de l’OBR, alors que le seuil de TVA de 25 millions de FBu fait entrer de nouveaux commerçants dans le système au titre de l’exercice 2026/2027. Collecter des données personnelles sans consentement préalable, alors que la loi du 10 mars 2026 s’applique déjà. Appliquer par réflexe la localisation SYSCOHADA, qui est faite pour les pays de l’OHADA, dont le Burundi ne fait pas partie. Enfin, promettre des frais d’opérateur sans les avoir reçus par écrit.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi Richard pour un projet à Bujumbura, Gitega ou Ngozi ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard peut accompagner à distance les entreprises au Burundi : il compte plus de six ans d’expérience, diplômé d’EPITECH en 2022, il est le créateur de Wapy, assistant WhatsApp à intelligence artificielle, et le co-fondateur d’<a href="https://audyxa.com">Audyxa</a>. Il conduit ses projets à distance, par visioconférence et WhatsApp, avec un devis rédigé en euros.',
                'Les réalisations de son portfolio montrent la façon dont il conduit un projet, du site vitrine à l’application sur mesure : elles sont rassemblées sur <a href="/realisations/">la page des réalisations</a>. Les sites et les applications montrés y sont ceux de ses clients directs, ou réalisés en sous-traitance pour Digital Développement lorsque la page le précise. Pour comprendre sa démarche, la page <a href="/richard-salanon">Richard SALANON</a> la détaille.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre projet burundais : un premier échange gratuit ?',
            'texte'  => 'Dites quel public vous visez, si vos clients paient par Lumicash ou EcoCash et si l’eBMS vous concerne : Richard répond sous 24 heures, puis chiffre le projet en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard SALANON travaille-t-il avec des entreprises du Burundi depuis Cotonou ?', 'r' => 'Oui, à distance. Richard peut accompagner les entreprises, les ONG et les institutions financières au Burundi par visioconférence et WhatsApp, avec une heure de décalage seulement. Le premier échange et le devis sont gratuits, la réponse arrive sous 24 heures.'],
        ['q' => 'Faut-il se déplacer à Bujumbura ou à Gitega ?', 'r' => 'Non. Le cadrage, les démonstrations, la recette et la formation se font par écran. Les livrables sont les mêmes qu’avec une présence sur place : documents, application ou site en ligne, équipes formées. Pour les ateliers, des séances courtes tiennent mieux sur une connexion mobile.'],
        ['q' => 'Quels moyens de paiement un site peut-il accepter au Burundi ?', 'r' => 'Les portefeuilles mobiles Lumicash, EcoCash et Smart Pesa sont les plus utilisés, avec environ 2,65 millions d’utilisateurs de services financiers mobiles au premier trimestre 2025 selon l’ARCT. Depuis avril 2026, BurundiPay relie banques, microfinance et institutions de paiement. La carte sert surtout à la diaspora et aux partenaires étrangers.'],
        ['q' => 'Le système eBMS de l’OBR concerne-t-il mon entreprise ?', 'r' => 'Si vous êtes assujetti à la TVA, oui : la loi n° 1/10 du 16 novembre 2020 impose des machines de facturation agréées. Au titre de l’exercice 2026/2027, le seuil d’assujettissement d’office est de 25 millions de FBu de chiffre d’affaires taxable. En cas de doute, l’OBR confirme votre situation.'],
        ['q' => 'Que prévoit la nouvelle loi burundaise sur les données personnelles ?', 'r' => 'La loi n° 1/03 du 10 mars 2026, adoptée par l’Assemblée nationale le 15 janvier 2026, pose le consentement préalable, crée une Agence de protection des données à caractère personnel et prévoit des sanctions pénales. Les formalités d’enregistrement se confirment avant la mise en ligne d’un site qui collecte des données.'],
        ['q' => 'Un ERP au Burundi utilise-t-il le SYSCOHADA ?', 'r' => 'Non par défaut : le Burundi n’appartient pas à l’OHADA, qui compte 17 États membres. Le plan de comptes se fixe avec l’expert-comptable de l’entreprise, puis se paramètre dans Odoo ou Dolibarr. La facturation, elle, se raccorde à l’eBMS de l’OBR.'],
        ['q' => 'Peut-on facturer l’eBMS depuis Odoo ?', 'r' => 'Oui, avec un connecteur. Un module du marché, vendu sur l’App Store d’Odoo, transmet les factures, avoirs et remboursements de caution à l’OBR et garde la signature de l’administration. Richard compare ce module au besoin du client avant de proposer du développement sur mesure.'],
        ['q' => 'Le site fonctionnera-t-il avec une connexion lente ?', 'r' => 'C’est la règle de conception : seuls 11,1 % des Burundais utilisaient Internet fin 2025 selon DataReportal. Pages légères, images compressées, formulaires courts, paiement par USSD ou portefeuille et synchronisation en arrière-plan pour les applications.'],
        ['q' => 'Le devis est-il en francs burundais ?', 'r' => 'Non, le devis est en euros, sur devis après un premier échange gratuit. Le règlement se fait par virement, PayPal ou carte bancaire. Le prix dépend du paiement, de l’eBMS, de la connexion et des langues.'],
        ['q' => 'Les interfaces peuvent-elles être en kirundi ?', 'r' => 'Oui, en prévoyant une traduction et une relecture par un locuteur local. Richard travaille en français et en anglais ; le kirundi, langue officielle avec le français, s’ajoute comme une langue de plus du site, sans refaire le code.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Burundi (population, internautes, connexions mobiles, réseaux sociaux)', 'url' => 'https://datareportal.com/reports/digital-2026-burundi', 'date' => '2026-10-06'],
        ['titre' => 'CIO Mag, Burundi : pénétration mobile et Internet au premier trimestre 2025 (ARCT)', 'url' => 'https://cio-mag.com/burundi-hausse-de-la-penetration-mobile-et-internet-au-premier-trimestre-2025-arct/', 'date' => '2026-10-06'],
        ['titre' => 'WeAreTech Africa, lancement de BurundiPay par la BRB (23 avril 2026)', 'url' => 'https://www.wearetech.africa/fr/fils/actualites/tech/le-burundi-lance-le-systeme-national-de-paiement-instantane-burundipay', 'date' => '2026-10-06'],
        ['titre' => 'WeAreTech Africa, adoption de la loi sur les données personnelles (15 janvier 2026)', 'url' => 'https://www.wearetech.africa/fr/fils/actualites/tech/burundi-le-parlement-adopte-une-loi-cle-sur-la-protection-des-donnees-personnelles', 'date' => '2026-10-06'],
        ['titre' => 'Morrison Foerster, bibliothèque de la vie privée : Burundi (loi n° 1/03 du 10 mars 2026)', 'url' => 'https://www.mofo.com/privacy-library/burundi', 'date' => '2026-10-06'],
        ['titre' => 'Office burundais des recettes, tableau des nouvelles mesures de la loi de finances 2026/2027 (article 271, TVA, eBMS)', 'url' => 'https://www.obr.bi/images/Tableau_des_Nvlles_mesures_LB_2026-2027_V_du_3-7-2026.docx', 'date' => '2026-10-06'],
        ['titre' => 'Office burundais des recettes, la TVA au cœur des échanges avec les contribuables (taux de 18 %)', 'url' => 'https://obr.bi/index.php/actualites/436-la-tva-au-coeur-des-echanges-entre-l-obr-et-les-contribuables', 'date' => '2026-10-06'],
        ['titre' => 'Law Lab Africa, protection des données au Burundi (Agence, article 42)', 'url' => 'https://research.lawlab.africa/burundi/', 'date' => '2026-10-06'],
        ['titre' => 'Ministère des Affaires étrangères, présentation du Burundi (capitale, villes, langues)', 'url' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/burundi/presentation-du-burundi', 'date' => '2026-10-06'],
        ['titre' => 'Wikipedia, Lumitel (portefeuille Lumicash lancé en 2017)', 'url' => 'https://en.wikipedia.org/wiki/Lumitel', 'date' => '2026-10-06'],
        ['titre' => 'Econet Leo Burundi et la marque EcoCash', 'url' => 'https://btw.media/en/econet-leo-burundi-mobile-and-internet-provider', 'date' => '2026-10-06'],
        ['titre' => 'DLA Piper Africa, la facturation électronique au Burundi', 'url' => 'https://www.dlapiperafrica.com/en/burundi/insights/2022/La-facturation-electronique.html', 'date' => '2026-10-06'],
        ['titre' => 'Edicom, la facturation électronique au Burundi (archivage de dix ans)', 'url' => 'https://edicomgroup.com/fr/facture-electronique/burundi', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, Burundi : vue d’ensemble (structure du PIB, exportations)', 'url' => 'https://www.banquemondiale.org/fr/country/burundi/overview', 'date' => '2026-10-06'],
        ['titre' => 'Décret n° 100/032 du 27 mars 2025 publiant les résultats du recensement de 2024', 'url' => 'https://leap.unep.org/en/countries/bi/national-legislation/decret-no100032-du-27-mars-2025-portant-publication-des-resultats', 'date' => '2026-10-06'],
        ['titre' => 'Lumitel (Viettel Burundi), site officiel', 'url' => 'https://www.lumitel.bi/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, site officiel (17 États membres)', 'url' => 'https://www.ohada.org/', 'date' => '2026-10-06'],
        ['titre' => 'Base IANA des fuseaux horaires, fichier Afrique (Africa/Maputo, UTC+2, zone de Bujumbura)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'DLA Piper Africa, réformes budgétaires 2026/2027 au Burundi (loi n° 1/10 du 30 juin 2026)', 'url' => 'https://www.dlapiperafrica.com/fr/burundi/insights/2026/Reformes_budgetaires', 'date' => '2026-10-06'],
        ['titre' => 'Odoo Apps, module EBMS Invoice pour l’OBR du Burundi', 'url' => 'https://apps.odoo.com/apps/modules/17.0/aminitech_ebms_invoice/', 'date' => '2026-10-06'],
        ['titre' => 'Frappe Cloud, application Burundi Compliance pour ERPNext', 'url' => 'https://cloud.frappe.io/marketplace/apps/burundi_compliance', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'integration-odoo', 'integration-whatsapp', 'application-mobile-android-ios', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'audit-etude-de-projet', 'formation-en-entreprise', 'maintenance-support', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['ia-en-entreprise', 'whatsapp-business', 'odoo-utilisateurs', 'n8n', 'digitaliser-son-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['ong-projets-developpement', 'banques-microfinance', 'agro-industrie'],
    ],
];
