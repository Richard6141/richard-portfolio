<?php
// ============================================================
// data/pays/luxembourg.php · Page pays « Luxembourg » (vague 1D).
// Richard n’a pas encore travaillé au Luxembourg : la page parle d’un
// accompagnement à distance, jamais d’un travail déjà fait sur place.
// Faits relevés le 2026-10-06 : STATEC (population au 1er janvier 2026),
// luxembourg.public.lu (frontaliers, secteurs), DataReportal (Digital 2026),
// CNPD, Legilux (lois du 1er août 2018, du 14 août 2000 et du 24 février 1984),
// loi modifiée du 12 février 1979 (TVA, version du 1er janvier 2026),
// portail de la fiscalité indirecte, projet de loi n° 8815 sur la facturation
// électronique (déposé le 30 juillet 2026), Guichet.lu (cofinancement),
// Worldline (Wero), gouvernement.lu, Arendt et Chambre des députés (AI Act), Wikipédia.
// Clés de fiche absentes : mobile_money (service sans équivalent
// au Luxembourg), ohada (le pays n’est pas membre).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Luxembourg : externaliser applications, flux automatisés et assistants IA auprès de Richard, installé à Cotonou',
    'title'   => 'Développement web et IA au Luxembourg | Richard SALANON',
    'meta'    => 'Sites, applications, automatisations et IA pour les PME du Luxembourg, livrés à distance depuis Cotonou : devis en euros, RGPD, TVA, facture électronique.',
    'en_bref' => 'Richard SALANON peut accompagner à distance les entreprises du Luxembourg et les PME frontalières qui externalisent du développement web, de l’automatisation ou de l’intelligence artificielle. Il travaille en français et en anglais depuis Cotonou, avec une heure de décalage en été et aucune en hiver. Chaque projet est cadré pour le RGPD et la CNPD, pour l’autoliquidation de la TVA et pour la facture électronique qui arrive en 2028. Richard répond sous 24 heures, puis chiffre en euros une fois le cadrage posé.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale'  => ['v' => 'Luxembourg-Ville, 137 700 habitants', 'source' => 'https://luxembourg.public.lu/fr/societe-et-culture/population/demographie.html', 'date' => '2026-10-06'],
        'villes'    => ['v' => ['Luxembourg-Ville', 'Esch-sur-Alzette (deuxième ville du pays)', 'Differdange', 'Dudelange'], 'source' => 'https://fr.wikipedia.org/wiki/Luxembourg', 'date' => '2026-10-06'],
        'fuseau'    => ['v' => 'UTC+1 l’hiver et UTC+2 l’été : même heure que Cotonou l’hiver, une heure d’avance l’été', 'source' => 'https://fr.wikipedia.org/wiki/Luxembourg', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+352', 'source' => 'https://en.wikipedia.org/wiki/Telephone_numbers_in_Luxembourg', 'date' => '2026-10-06'],
        'langues'   => ['v' => ['Luxembourgeois (langue nationale)', 'Français et allemand (avec le luxembourgeois, langues utilisables devant l’administration et la justice)'], 'source' => 'https://legilux.public.lu/eli/etat/leg/loi/1984/02/24/n1/jo', 'date' => '2026-10-06'],
        'population' => ['v' => '690 959 habitants au 1er janvier 2026, dont 46,6 % d’étrangers', 'source' => 'https://statistiques.public.lu/fr/actualites/2026/stn15-population-2026.html', 'date' => '2026-10-06'],
        'internet'  => ['v' => '674 000 internautes en octobre 2025, soit 98,8 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-luxembourg', 'date' => '2026-10-06'],
        'mobile'    => ['v' => '941 000 connexions mobiles fin 2025, soit 138 % de la population, dont 98,2 % en haut débit', 'source' => 'https://datareportal.com/reports/digital-2026-luxembourg', 'date' => '2026-10-06'],
        'secteurs'  => ['v' => ['Place financière', 'Technologies de la santé', 'Aérospatial', 'Logistique et infrastructures numériques'], 'source' => 'https://luxembourg.public.lu/fr/investir.html', 'date' => '2026-10-06'],
        'devise'    => ['v' => 'Euro (EUR)', 'source' => 'https://fr.wikipedia.org/wiki/Luxembourg', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Wero, qui remplace Payconiq après l’arrêt annoncé de l’application le 30 septembre 2026', 'Applications bancaires de Spuerkeess, BGL BNP Paribas, BIL, POST Luxembourg et Banque Raiffeisen, qui intègrent Wero'], 'source' => 'https://worldline.com/fr-lu/home/main-navigation/resources/blogs/2026/que-devient-payconiq-avec-l-arrivee-de-wero-au-luxembourg', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['Worldline (encaissement des commerçants, QR codes Wero)'], 'source' => 'https://worldline.com/fr-lu/home/main-navigation/resources/blogs/2026/que-devient-payconiq-avec-l-arrivee-de-wero-au-luxembourg', 'date' => '2026-10-06'],
        'donnees'   => ['v' => 'RGPD (règlement UE 2016/679), complété par la loi du 1er août 2018 sur la CNPD et le régime général de protection des données', 'source' => 'https://legilux.public.lu/eli/etat/leg/loi/2018/08/01/a686/jo', 'date' => '2026-10-06'],
        'autorite'  => ['v' => 'CNPD (Commission nationale pour la protection des données), à Belvaux', 'source' => 'https://cnpd.public.lu/fr.html', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique obligatoire pour les marchés publics (loi du 16 mai 2019) ; projet de loi B2B : réception pour tous le 1er janvier 2028, émission le 1er juillet 2028 puis le 1er janvier 2029', 'source' => 'https://wdocs-pub.chd.lu/docs/Dossiers_parlementaires/8815/20260730_Depot.pdf', 'date' => '2026-10-06'],
        'tva'       => ['v' => '17 % au taux normal ; 14 % au taux intermédiaire, 8 % au taux réduit et 3 % au taux super-réduit (article 39)', 'source' => 'https://pfi.public.lu/dam-assets/pdf/legislation/tva/loi/loi-tva-2026-01-01.pdf', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Loi modifiée du 14 août 2000 relative au commerce électronique : informations dues par le prestataire et contrats conclus en ligne', 'source' => 'https://legilux.public.lu/eli/etat/leg/loi/2000/08/14/n8/jo', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Cofinancement de l’État par l’INFPC : 15 % de l’investissement annuel en formation, 35 % pour certains salariés', 'source' => 'https://guichet.public.lu/fr/entreprises/financement-aides/aides-emploi-recrutement-formation/formation-professionnelle-continue/fpc-entreprise.html', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun l’hiver, une heure l’été'],
        ['l' => 'Devis', 'v' => 'Sur devis, en euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change pour un projet un pays où 98,8 % des habitants sont en ligne ?',
            'paragraphes' => [
                'Le <a href="https://statistiques.public.lu/fr/actualites/2026/stn15-population-2026.html">STATEC</a> compte 690 959 résidents au 1er janvier 2026, dont 46,6 % de nationalité étrangère. Selon <a href="https://datareportal.com/reports/digital-2026-luxembourg">DataReportal (Digital 2026)</a>, 674 000 personnes utilisaient internet en octobre 2025, soit 98,8 % de la population, et le pays comptait 941 000 connexions mobiles fin 2025, soit 138 % des habitants. Presque tout le monde est connecté, presque tout le temps : un site ou une application luxembourgeoise n’a pas à convaincre le public de passer au numérique, il doit seulement être irréprochable.',
                'Le débit est à la hauteur. D’après Ookla, cité par DataReportal, le débit médian de l’accès fixe atteignait 180,22 Mbit/s fin 2025, et celui du mobile 147,45 Mbit/s. Pour un projet, cela retire une contrainte que d’autres marchés imposent : on peut soigner l’image, la vidéo et les interfaces riches sans bâtir une version allégée pour les connexions lentes. L’exigence se déplace vers la qualité de l’interface, la rapidité de réponse et l’accessibilité.',
                'La population est aussi très internationale, et c’est le fait qui pèse le plus sur la conception. Selon <a href="https://luxembourg.public.lu/fr/societe-et-culture/population/demographie.html">luxembourg.public.lu</a>, 180 nationalités sont recensées dans le pays, et quelque 237 200 salariés frontaliers venus de France, d’Allemagne et de Belgique y travaillent chaque jour. Un même site doit donc parler au client luxembourgeois, au salarié portugais, au frontalier français et au prestataire allemand, souvent dans la même journée.',
                'Pour une PME, trois conséquences pratiques en découlent. L’interface doit exister en plusieurs langues dès la première version, et non en option ultérieure. Les formulaires doivent accepter des adresses, des numéros de téléphone et des numéros de TVA de plusieurs pays. Enfin, les clients et les salariés comparent votre service à celui des grandes banques et des administrations du pays, dont la qualité sert d’étalon : la barre est haute, et c’est dans les détails (messages d’erreur, temps de chargement, gestion des langues) qu’elle se franchit.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères chiffrés et juridiques avoir en main avant de lancer un projet au Luxembourg ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Wero, carte ou virement SEPA : que brancher sur un site luxembourgeois ?',
            'paragraphes' => [
                'Le paysage du paiement luxembourgeois vient de changer. Selon <a href="https://worldline.com/fr-lu/home/main-navigation/resources/blogs/2026/que-devient-payconiq-avec-l-arrivee-de-wero-au-luxembourg">Worldline</a>, Payconiq cède la place à Wero, le portefeuille européen de paiement instantané développé par l’European Payments Initiative : la transition court de juillet à septembre 2026, et l’application Payconiq devait être arrêtée le 30 septembre 2026. Wero fonctionne de compte à compte, sans passer par un réseau de cartes, et, pour de nombreux clients, il s’utilise directement dans l’application de leur banque : Spuerkeess, BGL BNP Paribas, BIL, POST Luxembourg ou Banque Raiffeisen.',
                'Pour un commerçant déjà client de Worldline, le passage est décrit comme simple : les QR codes Payconiq sont remplacés par des QR codes Wero, et l’infrastructure reste proche. Un site ou une application créés aujourd’hui doivent donc prévoir Wero comme moyen principal pour les clients du pays, et ne plus s’appuyer sur une documentation Payconiq. Richard vérifie, au moment du cadrage, quelle version de l’interface de paiement l’acquéreur de l’entreprise met à disposition.',
                'Le deuxième moyen est la carte bancaire, indispensable pour les clients de la zone frontalière et pour les visiteurs, qui n’utilisent pas toujours une application bancaire luxembourgeoise. Le troisième est le virement SEPA, adapté aux factures entre entreprises : le client reçoit une facture avec une référence et règle depuis son banquier. Richard branche ces moyens par l’interface de programmation de l’acquéreur de l’entreprise et il fait confirmer chaque paiement par le serveur, jamais par la seule page de retour affichée au client.',
                'L’intégration se déroule en trois temps : un compte d’essai chez l’acquéreur, un paiement de test sur une adresse de recette que l’entreprise ouvre depuis son téléphone, puis le passage en production avec une transaction réelle de faible montant. Les frais et les délais de règlement dépendent du contrat signé avec la banque ou avec l’acquéreur ; Richard les fait préciser par l’acquéreur au cadrage, avant tout engagement sur le budget.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le RGPD, sous le contrôle de la CNPD, quand le prestataire travaille depuis Cotonou ?',
            'paragraphes' => [
                'Le cadre est celui du règlement général sur la protection des données, que la <a href="https://cnpd.public.lu/fr.html">CNPD</a> fait appliquer au Luxembourg. L’autorité, installée à Belvaux, agit sur le fondement de la loi du 1er août 2018 portant organisation de la Commission nationale pour la protection des données et mise en œuvre du régime général sur la protection des données. Le <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679">règlement lui-même</a> fixe ce que doit tenir une entreprise : un registre des traitements (article 30), un délégué à la protection des données dans les cas prévus (article 37), des analyses d’impact (article 35), la notification des violations de données sous 72 heures (article 33) et des règles pour les transferts hors de l’Union européenne (chapitre V).',
                'Ce dernier point concerne directement un prestataire basé à Cotonou. Un développeur du Bénin qui lit, même ponctuellement, des données personnelles stockées dans l’Union européenne effectue, au sens du chapitre V du RGPD, un accès depuis un pays tiers. L’entreprise cliente reste responsable du traitement : elle choisit le fondement du transfert, par exemple des clauses contractuelles types de la Commission européenne, et elle les annexe au contrat de prestation. Richard travaille selon un principe simple : pas de données réelles quand des données de test suffisent.',
                'En pratique, trois dispositions réduisent le risque dès le départ. Les environnements de développement utilisent des jeux de données fictifs ou anonymisés. Les serveurs de production restent dans l’Union européenne, chez un hébergeur choisi par l’entreprise. Les accès de Richard sont nominatifs, limités au projet et retirés à la fin de la mission. Chaque accès est ainsi tracé et peut être justifié devant la CNPD.',
                'Un point de vigilance mérite d’être posé tôt : le projet traite-t-il des données de santé, des données financières ou des données de salariés ? Dans ces cas, une analyse d’impact peut être nécessaire avant le lancement, et le délégué à la protection des données de l’entreprise doit être associé dès le cadrage, pas à la veille de la mise en ligne.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment la TVA s’applique-t-elle à une prestation facturée depuis le Bénin à une entreprise luxembourgeoise ?',
            'paragraphes' => [
                'La loi modifiée du 12 février 1979 sur la TVA, dans sa version du 1er janvier 2026 publiée par le <a href="https://pfi.public.lu/dam-assets/pdf/legislation/tva/loi/loi-tva-2026-01-01.pdf">portail de la fiscalité indirecte</a>, fixe le taux normal à 17 %, avec un taux intermédiaire de 14 %, un taux réduit de 8 % et un taux super-réduit de 3 % (article 39). Pour un service rendu entre assujettis, l’article 17 place le lieu de la prestation là où le client est établi : un développement livré à une société luxembourgeoise est donc imposable au Luxembourg, même si le prestataire est à Cotonou.',
                'L’article 61 organise alors l’autoliquidation : lorsque le prestataire n’est pas établi dans le pays, c’est le client assujetti qui est redevable de la taxe. Concrètement, Richard émet une facture hors taxe luxembourgeoise, avec le numéro de TVA du client, et l’entreprise déclare elle-même les 17 % dans sa déclaration, puis les déduit si elle a droit à la déduction. Le montant à payer au prestataire est donc le prix net, sans TVA.',
                'Deux nuances demandent une confirmation par le comptable de l’entreprise. D’abord, la franchise des petites entreprises : le <a href="https://pfi.public.lu/fr/professionnel/tva/sme.html">portail de la fiscalité indirecte</a> indique un seuil de 50 000 € de chiffre d’affaires annuel depuis le 1er janvier 2025, avec une tolérance de 10 % ; une entreprise en franchise ne se comporte pas comme une société assujettie ordinaire. Ensuite, le traitement des services numériques peut varier selon la nature exacte de la prestation : le paramétrage de la facture se valide avec l’Administration de l’enregistrement, des domaines et de la TVA (AED) avant la première échéance.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La facture électronique est-elle obligatoire entre entreprises au Luxembourg ?',
            'paragraphes' => [
                'Pour les marchés publics, oui depuis plusieurs années : la loi du 16 mai 2019 impose la facture électronique aux opérateurs qui travaillent avec le secteur public, et le Luxembourg s’appuie sur le réseau Peppol pour les échanger. Pour les échanges entre entreprises privées, la réforme est en préparation. D’après <a href="https://paperjam.lu/article/obligations-en-matiere-de-facturation-electronique-b2b-prevues-des-2028">Paperjam</a>, le Conseil de gouvernement a approuvé le 17 juillet 2026 un projet de loi qui étend l’obligation au B2B.',
                'Le <a href="https://wdocs-pub.chd.lu/docs/Dossiers_parlementaires/8815/20260730_Depot.pdf">projet de loi n° 8815</a>, déposé à la Chambre le 30 juillet 2026, prévoit un calendrier en trois temps. Toutes les entreprises devront savoir recevoir une facture électronique à partir du 1er janvier 2028. Les entreprises qui dépassent deux des trois seuils de 7,5 millions d’euros de total de bilan, 15 millions d’euros de chiffre d’affaires net et 50 salariés en équivalent temps plein, sur l’exercice 2026, devront en émettre à partir du 1er juillet 2028 ; les autres, à partir du 1er janvier 2029. Il s’agit d’un projet : le vote et la rédaction finale peuvent encore modifier ces dates, que l’entreprise confirme auprès de son comptable avant de s’engager.',
                'Ce calendrier a une conséquence directe sur les achats de logiciel. Une application de facturation ou un module comptable livré en 2026 doit pouvoir produire et recevoir des factures structurées, c’est-à-dire un format lisible par une machine et non un simple fichier PDF. Richard conçoit les modules de facturation avec des champs structurés et une interface de programmation ouverte, afin de brancher plus tard le point d’accès choisi par l’entreprise sans refaire la base de données.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoit l’AI Act au Luxembourg pour une entreprise qui intègre de l’IA ?',
            'paragraphes' => [
                'Le règlement européen 2024/1689 sur l’intelligence artificielle s’applique directement. Le Luxembourg doit compléter ce cadre en désignant ses autorités nationales, ce que prévoit le <a href="https://www.chd.lu/fr/dossier/8476">projet de loi n° 8476</a>, déposé le 23 décembre 2024. Selon le <a href="https://www.arendt.com/news-insights/news/new-luxembourg-bill-designates-national-authorities-under-the-ai-act-the-cnpd-takes-centre-stage/">cabinet Arendt</a>, la CNPD y devient l’autorité de surveillance du marché par défaut et le principal point de contact, avec des autorités sectorielles autour d’elle, dont la CSSF pour les services financiers et le CAA pour les assurances.',
                'Lors de la conférence « AI Act en action » du 20 janvier 2026, que relate le <a href="https://gouvernement.lu/fr/gouvernement/elisabeth-margue/actualites.gouvernement2024%2Bfr%2Bactualites%2Btoutes_actualites%2Bcommuniques%2B2026%2B01-janvier%2B20-margue-ai-act.html">gouvernement</a>, la ministre Elisabeth Margue a estimé que la mise en œuvre de l’AI Act ne doit pas être perçue comme une contrainte, mais comme une opportunité, et la CNPD a rappelé son bac à sable réglementaire. Parmi les messages retenus figure l’obligation de former les équipes à un usage sûr de l’IA, quelle que soit la taille de l’entreprise.',
                'Pour un projet confié à Richard, cela se traduit par un travail de classification au cadrage : le système d’IA est-il à risque limité, comme un assistant qui répond aux clients, ou touche-t-il à un usage encadré, comme l’évaluation de candidats ou de crédit ? Le cas échéant, Richard documente le fonctionnement, prévoit l’information de l’utilisateur qu’il parle à une machine et garde une trace des décisions. Les formations <a href="/formations/gouvernance-ia">Gouvernance de l’IA</a> et <a href="/formations/ia-ethique-conformite">IA, éthique et conformité</a> préparent les équipes à ces obligations.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services numériques pour les entreprises luxembourgeoises, selon leur besoin ?',
            'legende' => 'Besoins fréquents des PME luxembourgeoises et frontalières, avec le service correspondant ; chaque page de service détaille la méthode, et le prix se fixe au devis, en euros.',
            'entetes' => ['Besoin typique au Luxembourg', 'Service', 'Page'],
            'lignes'  => [
                ['Confier à un prestataire hors UE le développement d’un outil métier, avec un contrat et un RGPD tenus', 'Externalisation du développement', '<a href="/services/externalisation-developpement">Externalisation du développement</a>'],
                ['Une application web en français, allemand et anglais pour des clients et des salariés de plusieurs pays', 'Application web multilingue', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Supprimer la ressaisie entre un logiciel de gestion, des factures et des fichiers de fournisseurs', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Brancher un assistant IA à des documents internes sans sortir de l’Union européenne', 'Intégration d’IA dans les logiciels existants', '<a href="/services/integration-ia-entreprise">Intégration de l’IA en entreprise</a>'],
                ['Préparer la facture électronique de 2028 sans changer de base de données', 'Interfaces de programmation et formats structurés', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Vendre en ligne en euros, avec Wero, carte et virement SEPA', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Un outil de gestion unique pour les ventes, les achats et la comptabilité d’une PME', 'Déploiement d’Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Répondre aux demandes clients en plusieurs langues, à toute heure', 'Agent IA et chatbot', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots</a>'],
                ['Garder un outil en ordre de marche après la livraison, avec des correctifs de sécurité', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Former les équipes à l’IA et aux outils d’automatisation, avec un financement possible par l’INFPC', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets concrets pour la place financière, la santé, l’aérospatial et la logistique du Grand-Duché ?',
            'items' => [
                ['secteur' => 'Place financière', 'probleme' => 'Une société de gestion ou un cabinet de conseil installé à Luxembourg-Ville reçoit chaque semaine des dizaines de documents de clients et de contreparties, qu’une équipe contrôle, renomme et classe à la main avant de les verser dans l’outil de suivi.', 'solution' => 'Un flux d’automatisation lit les pièces, en extrait les champs convenus, signale les manques et dépose le dossier dans le bon espace, avec un journal de chaque étape. L’outil tourne sur un serveur de l’Union européenne choisi par l’entreprise, et aucun modèle d’IA ne reçoit de donnée de client sans accord écrit du responsable de la conformité.'],
                ['secteur' => 'Technologies de la santé', 'probleme' => 'Un laboratoire ou un fournisseur de dispositifs médicaux gère ses commandes de réactifs, ses certificats et ses relances de fournisseurs sur des tableurs partagés, que plusieurs personnes modifient en même temps.', 'solution' => 'Une application web interne remplace les tableurs : suivi des lots, alertes avant échéance d’un certificat, historique des modifications et droits distincts par rôle. Les accès sont nominatifs, et les jeux de données de test sont fictifs, ce qui évite d’exposer des données de santé au prestataire.'],
                ['secteur' => 'Espace', 'probleme' => 'Une petite société qui sous-traite pour une grande entreprise du secteur doit remettre des rapports d’avancement, des listes de livrables et des preuves de conformité dans un format imposé, qu’elle reconstitue à chaque revue.', 'solution' => 'Un outil de suivi centralise les livrables, génère le rapport dans le gabarit exigé par le donneur d’ordre et conserve les versions. Richard ne traite aucune donnée classifiée : le périmètre de l’outil est fixé avec le client au cadrage, et les pièces sensibles restent chez le client.'],
                ['secteur' => 'Logistique et infrastructures numériques', 'probleme' => 'Un transporteur ou un opérateur de plateforme logistique reçoit des commandes par courriel, par fichier et par portail client, dans plusieurs langues, puis les ressaisit dans son logiciel d’exploitation.', 'solution' => 'Une interface de programmation et des automatisations rassemblent les commandes, traduisent les statuts en français, allemand et anglais, et renvoient au client un suivi par message. Les formats structurés sont prévus dès la première version, en vue de la facture électronique de 2028.'],
                ['secteur' => 'Commerce et artisanat de la Grande Région', 'probleme' => 'Une boutique ou un artisan basé près de la frontière vend à des clients luxembourgeois, français, belges et allemands, avec des prix en euros mais des livraisons, des délais et des mentions légales différents selon le pays.', 'solution' => 'Une boutique en ligne multilingue présente les modes de livraison par pays, propose Wero, la carte et le virement SEPA, et affiche les informations exigées par la loi sur le commerce électronique. Le prestataire livre depuis Cotonou, le client gère ses commandes depuis son propre espace.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former une équipe à distance, et l’INFPC peut-il cofinancer la formation ?',
            'paragraphes' => [
                'Richard anime ses formations par visioconférence, avec les vrais fichiers et les vrais outils de l’équipe : agents IA, automatisation, IA dans les logiciels déjà en place, sécurité des données, Odoo. Les séances se calent sur les horaires de bureau luxembourgeois, de 9 heures à 17 heures, soit de 8 heures à 16 heures à Cotonou l’été et de 9 heures à 17 heures l’hiver. Chaque session se prépare avec les cas d’usage de l’équipe, pas avec des exemples génériques.',
                'Les catalogues utiles à une PME du Luxembourg sont <a href="/formations/ia-en-entreprise">l’IA en entreprise</a>, <a href="/formations/n8n">l’automatisation avec n8n</a>, <a href="/formations/securite-donnees-dirigeants">la sécurité des données pour les dirigeants</a> et <a href="/formations/integrer-ia-logiciels-existants">l’intégration de l’IA dans les logiciels existants</a>. Le dirigeant qui doit rendre compte de l’AI Act choisit <a href="/formations/gouvernance-ia">Gouvernance de l’IA</a>, qui donne aux équipes un vocabulaire commun et une méthode de classification des usages.',
                'Le financement existe. Selon <a href="https://guichet.public.lu/fr/entreprises/financement-aides/aides-emploi-recrutement-formation/formation-professionnelle-continue/fpc-entreprise.html">Guichet.lu</a>, l’État cofinance la formation professionnelle continue à hauteur de 15 % de l’investissement annuel éligible, et de 35 % du coût salarial des participants qui n’ont pas de diplôme reconnu et moins de dix ans d’ancienneté, ou qui ont plus de 45 ans. L’investissement retenu est plafonné à 20 % de la masse salariale pour une entreprise de 1 à 9 salariés, à 3 % de 10 à 249 salariés et à 2 % au-delà. L’entreprise doit relever du secteur privé, être légalement établie au Luxembourg et y exercer principalement ses activités ; les participants doivent être affiliés à la sécurité sociale luxembourgeoise et liés à elle par un contrat de travail.',
                'La demande parvient à l’INFPC dans un délai de cinq mois après la clôture de l’exercice, donc au plus tard le 31 mai, sans prolongation possible ; la page de Guichet.lu renvoie vers le service en ligne de lifelong-learning.lu. Les formations continues obligatoires prévues par le législateur pour les professions réglementées sont exclues. Les conditions d’éligibilité d’une formation dispensée à distance par un prestataire établi hors de l’Union se confirment auprès de l’INFPC avant l’inscription : Richard fournit le programme, les dates et la facture détaillée que le dossier demande.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment une entreprise luxembourgeoise travaille-t-elle avec Richard depuis Cotonou ?',
            'items' => [
                ['titre' => 'Premier message et réponse', 'texte' => 'Le formulaire de contact ou un courriel suffit : activité, outils en place, besoin. Richard revient avec ses premières questions, en français ou en anglais.', 'duree' => 'sous 24 heures'],
                ['titre' => 'Cadrage et conformité', 'texte' => 'Un appel en visioconférence liste les flux, les langues, les moyens de paiement et les données concernées. Le cadrage fixe aussi les points de conformité : clauses contractuelles pour l’accès depuis un pays tiers, hébergement dans l’Union européenne, classification IA, traitement de la TVA.', 'duree' => '1 à 2 semaines'],
                ['titre' => 'Devis en euros', 'texte' => 'Le devis est établi en euros, hors TVA luxembourgeoise puisque l’entreprise cliente autoliquide, avec les livrables, le calendrier et les étapes de paiement. Aucun montant n’est donné avant ce cadrage.', 'duree' => 'après le cadrage'],
                ['titre' => 'Réalisation par paliers', 'texte' => 'Chaque palier est montré sur une adresse de recette. Les réunions se tiennent entre 9 heures et 17 heures à Luxembourg, ce qui laisse un recouvrement complet avec la journée de Cotonou, avec une heure de décalage l’été et aucune l’hiver.', 'duree' => 'selon le projet'],
                ['titre' => 'Livraison, formation et accès', 'texte' => 'Le code, la documentation et une séance de prise en main sont remis en visioconférence. Les comptes nominatifs de Richard sont ensuite fermés, sauf contrat de maintenance.', 'duree' => 'en fin de palier'],
                ['titre' => 'Suivi', 'texte' => 'Les retouches et les évolutions passent par un canal écrit. La maintenance, avec correctifs de sécurité et surveillance, s’ajoute au devis si l’entreprise le souhaite.', 'duree' => 'après la livraison'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Dans quelle langue, avec quels outils et quel contrat travaille-t-on ?',
            'paragraphes' => [
                'Richard travaille en français et en anglais. Le Luxembourg compte trois langues administratives, le luxembourgeois, le français et l’allemand, selon la loi du 24 février 1984 sur le régime des langues, et la langue nationale est le luxembourgeois. Pour une interface en allemand ou en luxembourgeois, l’entreprise fournit les textes ou fait appel à un traducteur : Richard prépare une structure qui accepte autant de langues que nécessaire, avec une clé par texte, et vérifie l’affichage des accents et des mots longs de l’allemand dans les boutons et les formulaires.',
                'Les échanges passent par la visioconférence, le courriel et un espace partagé où l’entreprise voit l’avancement. Les décisions sont écrites, et chaque demande de modification donne lieu à un avenant chiffré avant d’être faite. Le contrat précise la propriété du code, la confidentialité, la sous-traitance éventuelle et les clauses de protection des données exigées par le RGPD.',
                'Le règlement se fait par virement SEPA en euros, par étapes, à la signature, à la livraison de chaque palier et à la recette finale. Une facture sans TVA luxembourgeoise, avec le numéro de TVA du client et la mention d’autoliquidation, accompagne chaque échéance.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet numérique pour une entreprise du Luxembourg ?',
            'intro' => 'Tous les projets pour le Luxembourg se chiffrent sur devis, en euros, après un cadrage qui fixe les langues, les données et les livrables.',
            'items' => [
                ['offre' => 'Site vitrine, landing page, référencement', 'prix' => 'Sur devis, en euros', 'inclus' => ['Prix fixé après le cadrage', 'Langues et contenus précisés au devis']],
                ['offre' => 'Boutique en ligne, application, intégration', 'prix' => 'Sur devis, en euros', 'inclus' => ['Prix fixé après le cadrage', 'Paiement par étapes, par virement SEPA']],
                ['offre' => 'Automatisation, IA, ERP, formation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Livrables, calendrier et accès détaillés', 'Facture hors TVA luxembourgeoise, autoliquidation par le client']],
            ],
            'variations' => [
                'Le nombre de langues de l’interface : chaque langue ajoute des textes à traduire, des tests d’affichage et des vérifications de mise en page.',
                'Les données traitées : un projet qui manipule des données financières, de santé ou de salariés demande une analyse d’impact et plus de documentation.',
                'La conformité de la facturation : un module prêt pour la facture électronique structurée de 2028 demande plus de conception qu’un simple export PDF.',
                'Le niveau d’exigence de l’IA : un assistant à risque limité se cadre vite, un usage encadré par l’AI Act demande des journaux et une supervision humaine.',
                'L’hébergement : un serveur dans l’Union européenne choisi par l’entreprise, avec sauvegardes et surveillance, a un coût propre, indépendant du développement.',
                'La maintenance : correctifs de sécurité, surveillance et évolutions se contractualisent à part, après la livraison.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels pièges guettent un projet confié à un prestataire hors de l’Union européenne ?',
            'intro' => 'Sept pièges reviennent quand une société du pays externalise vers l’Afrique de l’Ouest ; chacun se règle avant la signature.',
            'items' => [
                ['titre' => 'Laisser un prestataire hors UE travailler sur des données réelles sans clauses signées', 'texte' => 'L’accès depuis Cotonou à des données personnelles stockées dans l’Union est un transfert au sens du RGPD. Il faut un fondement écrit avant le premier accès, et des données de test chaque fois que c’est possible.'],
                ['titre' => 'Payer le prestataire avec de la TVA luxembourgeoise', 'texte' => 'Le prestataire non établi n’émet pas de TVA luxembourgeoise : le client s’autoliquide. Une facture avec 17 % de TVA ajoutée par erreur oblige à corriger la facture et à régulariser la déclaration.'],
                ['titre' => 'Construire une interface en une seule langue', 'texte' => 'Un site qui n’existe qu’en français écarte les clients et les salariés qui lisent l’allemand, l’anglais ou le portugais. La structure multilingue se prévoit dès la première version, même si une seule langue est livrée d’abord.'],
                ['titre' => 'Brancher un moyen de paiement dont l’application a été arrêtée', 'texte' => 'L’application Payconiq devait s’arrêter le 30 septembre 2026. Une intégration écrite d’après une ancienne documentation peut cesser de fonctionner ; on part de l’offre Wero de l’acquéreur.'],
                ['titre' => 'Acheter un logiciel de facturation qui ne sait produire qu’un PDF', 'texte' => 'La réception de la facture électronique sera obligatoire pour tous au 1er janvier 2028 d’après le projet de loi. Un outil qui ne sait pas lire un format structuré devra être remplacé.'],
                ['titre' => 'Déployer un assistant IA sans l’avoir classé', 'texte' => 'Le règlement européen sur l’IA demande de savoir quel usage on déploie. Un assistant qui trie des candidatures n’appartient pas à la même catégorie qu’un assistant qui répond à des questions de livraison.'],
                ['titre' => 'Déposer la demande de cofinancement trop tard', 'texte' => 'L’INFPC refuse les dossiers reçus après le 31 mai qui suit la clôture de l’exercice, sans prolongation. La formation se déclare dès son inscription, pas à la fin de l’année.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels textes et quelles dates faut-il reconfirmer avant de décider ?',
            'texte' => 'La facture électronique entre entreprises est un projet de loi, déposé le 30 juillet 2026 : le texte final et les dates peuvent changer. Le projet de loi n° 8476 sur les autorités de l’AI Act est en commission à la Chambre des députés, selon le dossier parlementaire mis à jour le 10 juillet 2026. La bascule de Payconiq vers Wero devait s’achever le 30 septembre 2026 et les offres des acquéreurs bougent vite. Les informations sont datées du 6 octobre 2026 ; avant toute décision fiscale ou juridique, confirmez-les avec votre comptable, l’AED ou un avocat.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet numérique luxembourgeois à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard peut accompagner à distance les entreprises au Luxembourg. Il compte plus de six ans d’expérience, a livré plus de 50 projets pour plus de 100 clients et a formé plus de 200 personnes. Il est diplômé d’EPITECH, a fondé le produit Wapy, un assistant WhatsApp à intelligence artificielle, et co-fonde Audyxa. Cette expérience couvre l’automatisation, l’IA, les intégrations par interface de programmation et les ERP, qui sont les besoins des PME luxembourgeoises décrits plus haut.',
                'Sa façon de travailler tient en quelques règles : un cadrage écrit avant tout devis, des paliers montrés sur une adresse de recette, des accès retirés à la fin, et une documentation remise avec le code. Les projets de Richard, avec leur description, sont présentés sur la page des <a href="/realisations/">réalisations</a>, et son parcours détaillé figure sur la page <a href="/richard-salanon">Richard SALANON</a>. Pour comparer des outils avant de choisir, les <a href="/comparatifs/">comparatifs</a> posent les critères de décision.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet numérique au Luxembourg ?',
            'texte'  => 'Indiquez votre activité, vos langues, vos outils et les données en jeu. Richard répond sous 24 heures, puis chiffre en euros une fois le cadrage fait.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard SALANON intervient-il sur place au Luxembourg ?', 'r' => 'Non : tout se fait à distance, par visioconférence, courriel et messagerie. L’écart est nul l’hiver et d’une heure l’été, Luxembourg passant à UTC+2 quand Cotonou reste en UTC+1.'],
        ['q' => 'Richard SALANON peut-il accompagner une entreprise luxembourgeoise ?', 'r' => 'Richard peut accompagner à distance les entreprises au Luxembourg. Ses projets, avec leur description, sont visibles sur la page des réalisations, et ses références en Europe et en Afrique francophone figurent sur sa page de présentation.'],
        ['q' => 'Peut-on confier du développement à un prestataire du Bénin sans enfreindre le RGPD ?', 'r' => 'Oui, à condition de cadrer le transfert. Un accès depuis un pays tiers à des données personnelles de l’Union relève du chapitre V du RGPD : l’entreprise, responsable du traitement, retient un fondement comme les clauses contractuelles types, limite les accès et privilégie des données de test.'],
        ['q' => 'Que fait la CNPD et doit-on lui déclarer un traitement ?', 'r' => 'La CNPD est l’autorité de protection des données du Luxembourg. Le RGPD remplace la déclaration préalable par un registre des traitements tenu par l’entreprise, avec notification des violations sous 72 heures et, selon les cas, un délégué à la protection des données et une analyse d’impact.'],
        ['q' => 'Faut-il payer la TVA luxembourgeoise sur une facture de Richard ?', 'r' => 'Pas au prestataire. Selon les articles 17 et 61 de la loi TVA, le service rendu à une entreprise assujettie est imposable au Luxembourg et le client est redevable de la taxe quand le prestataire n’y est pas établi. Le client autoliquide au taux de 17 % et déduit selon son droit.'],
        ['q' => 'Quel est le taux de TVA luxembourgeois et y a-t-il une franchise ?', 'r' => 'Le taux normal est de 17 %, avec des taux de 14 %, 8 % et 3 %. La franchise des petites entreprises est de 50 000 € de chiffre d’affaires annuel depuis le 1er janvier 2025, avec une tolérance de 10 %.'],
        ['q' => 'La facture électronique est-elle obligatoire entre entreprises au Luxembourg ?', 'r' => 'Pas encore. Elle l’est pour les marchés publics depuis la loi du 16 mai 2019. Un projet de loi prévoit la réception pour tous le 1er janvier 2028, puis l’émission pour les grandes et moyennes entreprises le 1er juillet 2028 et pour les autres le 1er janvier 2029.'],
        ['q' => 'Que devient Payconiq au Luxembourg ?', 'r' => 'Payconiq est remplacé par Wero, le portefeuille de paiement instantané européen. La transition a couru de juillet à septembre 2026 et l’application devait s’arrêter le 30 septembre 2026 ; les commerçants passent de QR codes Payconiq à des QR codes Wero.'],
        ['q' => 'Qui contrôle l’IA au Luxembourg et que dit l’AI Act ?', 'r' => 'Le règlement européen s’applique directement. Le projet de loi n° 8476 désigne la CNPD comme autorité de surveillance du marché par défaut et point de contact, avec des autorités sectorielles comme la CSSF pour la finance et le CAA pour les assurances.'],
        ['q' => 'Une formation de Richard peut-elle être cofinancée par l’État luxembourgeois ?', 'r' => 'Le cofinancement de l’INFPC couvre 15 % de l’investissement annuel éligible, 35 % du coût salarial de certains participants, dans la limite de plafonds selon la taille. Il faut une entreprise du secteur privé établie au Luxembourg et une demande avant le 31 mai suivant la clôture. L’éligibilité d’une formation à distance se confirme auprès de l’INFPC.'],
        ['q' => 'En quelles langues Richard peut-il livrer une interface ?', 'r' => 'Richard travaille en français et en anglais. Pour l’allemand et le luxembourgeois, l’entreprise fournit les textes ou un traducteur, et Richard livre une structure multilingue qui les affiche correctement.'],
        ['q' => 'Combien coûte un projet pour une entreprise du Luxembourg ?', 'r' => 'Le prix se fixe sur devis, en euros, après un cadrage. Il varie selon le nombre de langues, les données traitées, le niveau de conformité et l’hébergement choisi. Le règlement se fait par virement SEPA, par étapes.'],
    ],

    'sources' => [
        ['titre' => 'STATEC : population au 1er janvier 2026', 'url' => 'https://statistiques.public.lu/fr/actualites/2026/stn15-population-2026.html', 'date' => '2026-10-06'],
        ['titre' => 'Luxembourg.lu : une population ouverte et cosmopolite', 'url' => 'https://luxembourg.public.lu/fr/societe-et-culture/population/demographie.html', 'date' => '2026-10-06'],
        ['titre' => 'Luxembourg.lu : investir au Luxembourg, les secteurs', 'url' => 'https://luxembourg.public.lu/fr/investir.html', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Luxembourg', 'url' => 'https://datareportal.com/reports/digital-2026-luxembourg', 'date' => '2026-10-06'],
        ['titre' => 'CNPD, site officiel', 'url' => 'https://cnpd.public.lu/fr.html', 'date' => '2026-10-06'],
        ['titre' => 'Portail de la fiscalité indirecte : loi modifiée du 12 février 1979 sur la TVA', 'url' => 'https://pfi.public.lu/dam-assets/pdf/legislation/tva/loi/loi-tva-2026-01-01.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Portail de la fiscalité indirecte : régime de franchise des petites entreprises', 'url' => 'https://pfi.public.lu/fr/professionnel/tva/sme.html', 'date' => '2026-10-06'],
        ['titre' => 'Chambre des députés : projet de loi n° 8815 sur la facturation électronique, dépôt du 30 juillet 2026', 'url' => 'https://wdocs-pub.chd.lu/docs/Dossiers_parlementaires/8815/20260730_Depot.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Paperjam : obligations de facturation électronique B2B dès 2028', 'url' => 'https://paperjam.lu/article/obligations-en-matiere-de-facturation-electronique-b2b-prevues-des-2028', 'date' => '2026-10-06'],
        ['titre' => 'Worldline : que devient Payconiq avec l’arrivée de Wero au Luxembourg', 'url' => 'https://worldline.com/fr-lu/home/main-navigation/resources/blogs/2026/que-devient-payconiq-avec-l-arrivee-de-wero-au-luxembourg', 'date' => '2026-10-06'],
        ['titre' => 'Arendt : projet de loi sur les autorités nationales de l’AI Act', 'url' => 'https://www.arendt.com/news-insights/news/new-luxembourg-bill-designates-national-authorities-under-the-ai-act-the-cnpd-takes-centre-stage/', 'date' => '2026-10-06'],
        ['titre' => 'Gouvernement : conférence « AI Act en action » du 20 janvier 2026', 'url' => 'https://gouvernement.lu/fr/gouvernement/elisabeth-margue/actualites.gouvernement2024%2Bfr%2Bactualites%2Btoutes_actualites%2Bcommuniques%2B2026%2B01-janvier%2B20-margue-ai-act.html', 'date' => '2026-10-06'],
        ['titre' => 'Guichet.lu : aides à la formation professionnelle continue en entreprise', 'url' => 'https://guichet.public.lu/fr/entreprises/financement-aides/aides-emploi-recrutement-formation/formation-professionnelle-continue/fpc-entreprise.html', 'date' => '2026-10-06'],
        ['titre' => 'Legilux : loi du 1er août 2018 sur la CNPD et le régime général de protection des données', 'url' => 'https://legilux.public.lu/eli/etat/leg/loi/2018/08/01/a686/jo', 'date' => '2026-10-06'],
        ['titre' => 'EUR-Lex : règlement (UE) 2016/679 (RGPD)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679', 'date' => '2026-10-06'],
        ['titre' => 'Chambre des députés : projet de loi n° 8476 (AI Act), dossier parlementaire', 'url' => 'https://www.chd.lu/fr/dossier/8476', 'date' => '2026-10-06'],
        ['titre' => 'Legilux : loi modifiée du 14 août 2000 relative au commerce électronique', 'url' => 'https://legilux.public.lu/eli/etat/leg/loi/2000/08/14/n8/jo', 'date' => '2026-10-06'],
        ['titre' => 'Legilux : loi du 24 février 1984 sur le régime des langues', 'url' => 'https://legilux.public.lu/eli/etat/leg/loi/1984/02/24/n1/jo', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia : Luxembourg', 'url' => 'https://fr.wikipedia.org/wiki/Luxembourg', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia : indicatif téléphonique du Luxembourg', 'url' => 'https://en.wikipedia.org/wiki/Telephone_numbers_in_Luxembourg', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['externalisation-developpement', 'application-web-sur-mesure', 'automatisation-ia', 'integration-ia-entreprise', 'api-rest-integrations', 'site-e-commerce', 'integration-odoo', 'agents-ia-chatbot-whatsapp', 'maintenance-support', 'formation-en-entreprise'],
        'formations'  => ['ia-en-entreprise', 'gouvernance-ia', 'ia-ethique-conformite', 'n8n', 'securite-donnees-dirigeants', 'integrer-ia-logiciels-existants'],
        'comparatifs' => ['n8n-vs-make-vs-zapier', 'chatgpt-vs-claude-vs-gemini'],
        'metiers'     => ['directeurs-financiers', 'juristes-entreprise', 'chefs-entreprise-dirigeants'],
    ],

];
