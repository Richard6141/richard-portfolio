<?php
// ============================================================
// data/secteurs/cabinets-avocats.php · Page secteur « Cabinets d'avocats et
// services juridiques » (vague 1E, univers Droit et justice).
// Aucun projet du portfolio rattaché ; pas de page locale.
// Faits externes vérifiés le 07/10/2026 : Le Soleil (e-Justice du Sénégal),
// CIO Mag (e-justice du Bénin), ministère français de la Justice (convention
// RPVA), BX1 (DPA belge), impots.gouv.fr (facture électronique),
// OHADA (Acte uniforme de recouvrement), Légifrance et Conseil constitutionnel
// (loi n° 2026-122), Dechert, CNB (guide IA, RIN), base de Damien Charlotin,
// Commission européenne (article 4), CNIL, Cour constitutionnelle du Bénin
// (code de déontologie UEMOA), Odoo, Dolibarr.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Cabinets d\'avocats et directions juridiques : un numérique qui tient les délais, protège le secret professionnel et encadre l\'IA',
    'title'   => 'Cabinets d\'avocats : numérique et IA | Richard SALANON',
    'meta'    => 'Outils pour cabinets d\'avocats et directions juridiques : dossiers, délais, portail client, facturation, IA vérifiée et secret professionnel. Sur devis.',
    'en_bref' => 'Richard SALANON équipe les cabinets d\'avocats et les directions juridiques d\'entreprise : prise de rendez-vous et ouverture de dossier avec contrôle des conflits d\'intérêts, suivi des délais de procédure, portail client et échange sécurisé de pièces, facturation au temps passé et provisions, IA de recherche et de rédaction relue par un humain. Les missions se font à distance, avec déplacement possible au Bénin. Chaque devis suit un premier échange gratuit ; seul le site du cabinet a un prix de départ, 300 000 FCFA (environ 457 €).',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Droit et justice',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Cabinets d\'avocats, avocats installés seuls, directions juridiques d\'entreprise'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation de la justice et des cabinets en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'La justice se dématérialise des deux côtés de la Méditerranée, et le cabinet doit suivre le rythme de la juridiction. Selon <a href="https://lesoleil.sn/justice/le-senegal-mise-sur-le-numerique-pour-rapprocher-les-citoyens-des-tribunaux/">Le Soleil du 4 septembre 2026</a>, le ministère sénégalais de la Justice lance une plateforme e-Justice qui couvre l\'enrôlement des affaires, la gestion du rôle général, les activités du parquet et du greffe, l\'instruction et le traitement des recours, dont le lancement officiel était annoncé pour le 10 septembre 2026, avec le tribunal de grande instance de Pikine-Guédiawaye comme site pilote.',
                'Au Bénin, un projet d\'e-justice vise un système d\'information unique pour toutes les procédures civiles et pénales ; <a href="https://cio-mag.com/le-benin-veut-digitaliser-le-secteur-de-la-justice">CIO Mag, le 31 mai 2022</a>, en attribue le pilotage à l\'Agence des services et systèmes d\'information, sous la tutelle du ministère du Numérique. Un cabinet béninois a donc intérêt à préparer dès maintenant des échanges électroniques avec les greffes.',
                'En Europe, l\'avocat est déjà branché sur les tribunaux. En France, une convention nationale signée le 24 juin 2016 entre le ministère de la Justice et le Conseil national des barreaux a renouvelé, pour trois ans, le cadre des échanges électroniques avec les cours d\'appel et les tribunaux par le réseau privé virtuel des avocats (RPVA), comme l\'indique la <a href="https://www.justice.gouv.fr/node/3282">page du ministère de la Justice</a>. En Belgique, les deux ordres d\'avocats (Avocats.be et l\'OVB) ont développé leur propre plateforme, la DPA, présentée en juin 2017 : elle se raccorde aux services informatiques du ministère de la Justice, dont e-Deposit et e-Box, d\'après <a href="https://bx1.be/categories/news/les-avocats-lancent-une-nouvelle-plateforme-informatique-commune-pour-une-justice-plus-rapide/">BX1</a>.',
                'Ces chantiers publics ne règlent pas le quotidien du cabinet. Là où le dépôt des conclusions se fait en ligne, le calendrier des délais, l\'ouverture du dossier, le contrôle des conflits d\'intérêts, la facturation et les échanges avec le client restent à l\'intérieur du cabinet, dans un tableur, une messagerie et parfois un cahier. C\'est cette partie, invisible pour la juridiction et décisive pour la responsabilité de l\'avocat, que Richard SALANON digitalise.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d\'un cabinet ou d\'une direction juridique gagnent à être digitalisés, et à quels signes le voit-on ?',
            'intro' => 'Le bon point de départ est le processus qui coûte le plus cher en cas d\'oubli : un délai manqué engage la responsabilité de l\'avocat. Les signes suivants reviennent dans les cabinets prêts à s\'équiper.',
            'items' => [
                ['titre' => 'Les délais de procédure vivent dans plusieurs agendas', 'texte' => 'L\'associé a le sien, la collaboratrice un autre, le secrétariat un troisième. Un délai de recours, de dépôt de conclusions ou de réponse à une mise en demeure n\'existe qu\'à un seul endroit, souvent une personne. Le jour où elle est absente, plus personne ne le voit.'],
                ['titre' => 'L\'ouverture d\'un dossier se fait sans contrôle des conflits d\'intérêts', 'texte' => 'Un nouveau client se présente, et l\'on vérifie de mémoire s\'il a déjà été la partie adverse d\'un client du cabinet. Dès que le cabinet compte plusieurs avocats ou plusieurs bureaux, la mémoire ne suffit plus : il faut un fichier des parties, interrogé à chaque ouverture.'],
                ['titre' => 'Les pièces circulent par WhatsApp ou par messagerie ordinaire', 'texte' => 'Contrats scannés, pièces d\'identité, relevés bancaires : le client les envoie là où il est à l\'aise. Le cabinet récupère ensuite chaque fichier à la main dans le bon dossier, sans journal de ce qui a été reçu ni de qui y a eu accès.'],
                ['titre' => 'Les honoraires sont reconstitués en fin de mois', 'texte' => 'Le temps passé est noté sur un coin de feuille, puis reconstitué de mémoire au moment de facturer. Les provisions versées par le client, elles, se suivent dans un fichier à part, et personne ne sait à l\'instant T ce qui reste sur celle d\'un dossier.'],
                ['titre' => 'Le client demande où en est son affaire', 'texte' => 'Chaque appel pour savoir « où en est le dossier » mobilise un avocat ou une assistante. Un portail où le client voit les étapes franchies, les prochaines dates et les pièces demandées retire une grande part de ces appels.'],
                ['titre' => 'La direction juridique d\'une entreprise reçoit des demandes de partout', 'texte' => 'Le commercial veut un contrat avant midi, les ressources humaines une clause, la direction un avis. Sans circuit unique de demandes, le juriste d\'entreprise ne sait ni ce qui est urgent, ni ce qui est déjà traité, ni qui a validé quelle version.'],
                ['titre' => 'La recherche et la rédaction répétitives', 'texte' => 'Recherche de textes, premières versions de courriers, résumés de pièces volumineuses : ce travail est répété dossier après dossier. C\'est l\'endroit où l\'IA aide le plus, à condition de rester sous relecture.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Un avocat seul avec une dizaine de dossiers vivants n\'a pas besoin d\'un logiciel de gestion lourd : un agenda partagé des échéances et un dossier numérique bien rangé suffisent. Mieux vaut commencer petit que payer une licence que personne n\'utilisera.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour un cabinet d\'avocats ou une direction juridique ?',
            'legende' => 'Chaque ligne associe un besoin courant d\'un cabinet ou d\'une direction juridique à la prestation de Richard SALANON qui y répond ; la liste exacte de chaque projet figure dans le devis.',
            'entetes' => ['Besoin typique', 'Ce qui est mis en place', 'Service'],
            'lignes'  => [
                ['Se faire trouver et présenter les domaines d\'intervention dans le respect de la déontologie', 'Site du cabinet : domaines, équipe, honoraires expliqués, formulaire de prise de contact, mentions légales de la profession', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Fixer un rendez-vous sans échange de messages', 'Page de prise de rendez-vous, avec questions préalables et rappel au client', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Donner au client un espace sécurisé pour suivre son dossier et déposer ses pièces', 'Portail client : comptes individuels, pièces demandées, étapes, messages, journal des accès', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Tenir dossiers, parties, délais et rappels dans un même outil', 'Application de gestion de dossiers : fiche dossier, fichier des parties pour les conflits, échéancier avec alertes, tâches par collaborateur', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Relancer le client pour les pièces manquantes ou une provision à régler', 'Automatisations de relances par e-mail ou WhatsApp, déclenchées par l\'état du dossier', '<a href="/services/automatisation-ia">Automatisation avec IA</a>'],
                ['Facturer au temps passé, au forfait ou en succès, et suivre les provisions', 'Feuilles de temps, notes d\'honoraires, suivi des provisions par dossier, relances de factures', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Chercher et résumer sans recopier les pièces dans un outil public', 'Assistant de recherche et de synthèse relié aux documents du cabinet, avec citation de la source de chaque passage et relecture obligatoire', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Produire une première version de courrier, de contrat ou de note', 'Modèles et IA de rédaction dans le cadre du cabinet, avec instructions fixes, garde-fous et validation humaine', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Traiter les demandes internes d\'une direction juridique', 'Formulaire unique de demande, file d\'attente par priorité, suivi des versions et des validations', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Passer d\'une messagerie dispersée à des circuits de travail', 'Automatisations entre messagerie, agenda, stockage et outil de dossiers', '<a href="/services/automatisation-ia">Automatisation avec IA</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Logiciels métier, Odoo, Dolibarr et intégrations : garder l\'existant ou changer ?',
            'legende' => 'Les fonctions citées viennent de la documentation d\'Odoo 20.0 (feuilles de temps) et de la page des fonctionnalités de Dolibarr. Pour les logiciels spécialisés pour avocats, fonctions et prix se vérifient auprès de chaque éditeur.',
            'entetes' => ['Situation du cabinet', 'Réponse conseillée', 'Pourquoi'],
            'lignes'  => [
                ['Un logiciel de gestion de cabinet est déjà en place et le personnel s\'en sert', 'Le garder et le relier : portail client, relances, export vers le tableau de bord', 'Un logiciel adopté vaut mieux qu\'un projet de remplacement ; on ajoute ce qui lui manque par ses exports ou son interface, si l\'éditeur en propose une'],
                ['Le logiciel existant n\'a pas de portail client ni d\'échange sécurisé de pièces', 'Ajouter un portail à côté, alimenté par le dossier', 'Le portail se décide indépendamment de la gestion interne ; il évite de changer de logiciel pour une seule fonction'],
                ['Aucun outil : tableur, messagerie et dossiers partagés', 'Commencer par l\'échéancier des délais et la fiche dossier, puis ajouter le temps passé et la facturation', 'Le premier palier supprime le risque qui coûte le plus cher ; les autres suivent à mesure que l\'équipe s\'y habitue'],
                ['Facturation au temps passé et suivi des projets dans un même outil', 'Odoo : projets, feuilles de temps et facturation du temps passé', 'La documentation d\'Odoo décrit des feuilles de temps reliées aux tâches des projets et, au besoin, aux lignes de commande pour facturer le temps passé'],
                ['Cabinet qui veut un outil léger, où l\'on n\'active que ce qui sert', 'Dolibarr : projets, tâches, feuilles de temps, devis, contrats et agenda', 'Dolibarr décrit ces modules sur sa page des fonctionnalités et permet de n\'activer que ceux dont on a besoin'],
                ['Besoin propre à la profession : fichier des parties pour les conflits, échéancier avec alertes, journal des accès', 'Application sur mesure reliée à l\'outil comptable', 'Ces fonctions sont rarement bien couvertes par un ERP généraliste ; mieux vaut les construire autour de la comptabilité que forcer l\'ERP'],
                ['Direction juridique d\'une entreprise qui utilise déjà un ERP', 'Relier le circuit des demandes juridiques à l\'ERP, sans le remplacer', 'Le juriste a besoin des contrats et des tiers de l\'entreprise : les lire dans l\'ERP évite de les ressaisir'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment relier un cabinet à ses outils sans le rendre dépendant d\'un prestataire ?',
            'paragraphes' => [
                'Richard SALANON propose que le cabinet reste propriétaire de ses données et de ses accès. Les comptes d\'administration, les clés d\'interface, l\'hébergement et le code d\'une application sur mesure sont ouverts au nom du cabinet, avec une documentation qui permet à un autre prestataire de reprendre la suite. Pour une profession tenue au secret, ce point n\'est pas un confort : un dossier client ne peut pas rester accessible à un tiers qui n\'a plus de mission.',
                'Pour la facturation au temps passé, la documentation d\'Odoo décrit des feuilles de temps qui permettent de saisir, consulter et valider le temps de travail par employé, relié aux tâches des projets et aux lignes de commande utilisées pour facturer. Un cabinet qui a déjà une comptabilité sous Odoo peut donc rapprocher les heures de ses avocats de ses notes d\'honoraires sans ressaisie. Les provisions, la comptabilité de tiers et les règles propres au maniement des fonds de clients dépendent en revanche du barreau : elles se règlent avec l\'expert-comptable du cabinet avant de paramétrer quoi que ce soit.',
                'Pour la recherche juridique, le cabinet garde ses bases habituelles. L\'assistant de Richard SALANON travaille sur les documents du cabinet (contrats, conclusions, pièces d\'un dossier) et cite toujours le passage d\'où vient chaque affirmation ; il complète la base de jurisprudence habituelle du cabinet. Les références doivent être vérifiées dans la source officielle, comme le montre la section suivante.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans un cabinet d\'avocats, et que ne doit-elle jamais faire ?',
            'intro' => 'La responsabilité professionnelle reste entière chez l\'avocat ou le juriste qui signe. L\'IA prépare, propose et classe ; elle ne décide pas et ne cite rien sans vérification.',
            'items' => [
                ['titre' => 'Elle peut résumer et classer des pièces', 'texte' => 'Un dossier de plusieurs centaines de pages se résume en chronologie, liste des parties et liste des pièces, avec renvoi à la page d\'origine. Le gain est réel, et l\'erreur se détecte facilement parce que la source est citée.'],
                ['titre' => 'Elle peut proposer une première version', 'texte' => 'Courrier de mise en demeure, projet de clause, note de synthèse : une première version à partir des modèles du cabinet, que l\'avocat réécrit. Le texte final est celui de l\'avocat, pas celui de la machine.'],
                ['titre' => 'Elle peut aider à retrouver et à comparer', 'texte' => 'Chercher dans les contrats et conclusions du cabinet la clause déjà utilisée, ou comparer deux versions d\'un contrat. La recherche s\'applique aux documents du cabinet, pas à la jurisprudence en général.'],
                ['titre' => 'Elle ne doit jamais inventer une référence', 'texte' => 'Une IA générative peut fabriquer une décision ou un article qui n\'existe pas. Au 5 octobre 2026, date de la dernière mise à jour, la base de Damien Charlotin recense 2 149 décisions de justice où des citations hallucinées ont été relevées ; la France y compte 14 cas et la Belgique 8. Ce total augmente régulièrement. Toute référence se vérifie dans la source officielle avant de figurer dans un acte.'],
                ['titre' => 'Elle ne doit pas recevoir les dossiers dans un outil public', 'texte' => 'Le guide pratique du CNB sur l\'IA générative pose que l\'avocat ne doit jamais communiquer à une IA générative des données couvertes par le secret professionnel (nom du client, informations confidentielles, fichiers d\'un dossier) et recommande de pseudonymiser les requêtes. Il alerte aussi sur la réutilisation possible des données transmises par le propriétaire du modèle. Les pièces d\'un client ne se collent donc pas dans un assistant grand public dont on ignore les conditions.'],
                ['titre' => 'Elle ne remplace ni le jugement ni le conseil', 'texte' => 'Évaluer les chances d\'un recours, choisir une stratégie, conseiller un client : ces actes engagent l\'avocat. Une IA peut les documenter, jamais les prendre.'],
                ['titre' => 'Elle ne doit pas alimenter la publicité ni la prospection sans contrôle', 'texte' => 'Un texte généré qui vante les résultats du cabinet ou comparé à ses confrères peut contrevenir aux règles du barreau sur la publicité. Tout texte de présentation passe par l\'avocat, puis, si besoin, par l\'ordre.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Faut-il informer le client quand l\'IA intervient dans son dossier ?',
            'texte' => 'Le guide pratique du CNB recommande la transparence sur l\'usage de l\'IA à l\'intérieur du cabinet (charte informatique) et rappelle les obligations du RGPD ; pour la relation avec le client, il indique que le CNB doit encore se prononcer. Selon le barreau, des règles précises peuvent s\'ajouter : à confirmer auprès de l\'ordre avant de lancer un projet, plutôt que de les découvrir à l\'occasion d\'un litige. Richard SALANON ne remplace pas l\'avis de l\'ordre : il documente, dans la note de cadrage, ce que l\'outil fait, où les données sont traitées et qui relit.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations propres à la profession encadrent un projet numérique d\'avocat ?',
            'paragraphes' => [
                'Le secret professionnel d\'abord. Le <a href="https://www.cnb.avocat.fr/fr/reglement-interieur-national-de-la-profession-davocat-rin">règlement intérieur national de la profession d\'avocat</a>, tenu par le Conseil national des barreaux, en fait l\'objet de son article 2, et son article 10 encadre la publicité et la sollicitation personnalisée, y compris le site internet et le nom de domaine. Dans l\'espace de l\'Union économique et monétaire ouest-africaine, le règlement n° 05/CM/UEMOA du 25 septembre 2014 (<a href="https://africanlii.org/fr/akn/aa-ecowas/act/reg/2014/5-cm-uemoa/fra@2014-09-25/source">texte</a>) harmonise l\'exercice de la profession, et un code de déontologie des avocats de l\'espace a été adopté le 5 juillet 2019 par la conférence des barreaux, comme le rappelle la <a href="https://courconstitutionnelle.bj/files/decisions/DCC21-227_16_septembre_2021.pdf">Cour constitutionnelle du Bénin</a>. Chaque barreau y ajoute son règlement intérieur : un cabinet vérifie les siens avant de publier un site ou de choisir un outil.',
                'Les données personnelles ensuite. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique, publiée par le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">secrétariat général du Gouvernement</a>, fonde l\'autorité béninoise chargée des données personnelles. Côté sénégalais, c\'est la <a href="https://www.osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html">loi n° 2008-12 du 25 janvier 2008</a> qui crée la Commission de protection des données personnelles. Côté ivoirien, la loi n° 2013-450 du 19 juin 2013 confie ce rôle à l\'ARTCI et, selon <a href="https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable">CIO Mag (12 juin 2015)</a>, l\'ARTCI soumet le traitement des données personnelles à autorisation préalable ; la règle en vigueur se vérifie auprès de l\'ARTCI. Un cabinet qui héberge des données de clients hors de son pays vérifie les règles de transfert de sa propre loi avant de choisir un hébergeur.',
                'En Europe, le RGPD s\'applique. L\'article 28, présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, impose un contrat entre le responsable du traitement (le cabinet) et son sous-traitant, qui traite les données sur instruction documentée, assure la confidentialité de son personnel, applique les mesures de sécurité de l\'article 32 et supprime ou restitue les données à la fin du service. Richard SALANON, qui intervient depuis le Bénin, propose de signer ce contrat ; les clauses de transfert vers un pays tiers sont à traiter avec le délégué à la protection des données du cabinet.',
                'La facturation électronique concerne aussi les cabinets français. Selon <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a>, toutes les entreprises doivent pouvoir recevoir leurs factures sous forme électronique depuis le 1er septembre 2026, les grandes entreprises et les entreprises de taille intermédiaire doivent en émettre dès cette date, et les petites et moyennes entreprises, comme les micro-entreprises, doivent en émettre et transmettre leurs données de transaction à partir du 1er septembre 2027. Dans l\'espace OHADA, la règle de facture dépend de chaque pays et se vérifie auprès de l\'administration fiscale et du barreau.',
                'Pour les paiements, le cabinet africain peut proposer le mobile money à ses clients particuliers pour les provisions et les notes d\'honoraires ; l\'agrégateur se choisit avec le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>. Reste un point à confirmer auprès de l\'ordre : le maniement de fonds de clients (provisions, sommes recouvrées pour leur compte) obéit à des règles propres, souvent par un compte dédié, que l\'outil de paiement doit respecter.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change la confidentialité des avis des juristes d\'entreprise pour leurs outils ?',
            'paragraphes' => [
                'La <a href="https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000053568123">loi française n° 2026-122 du 23 février 2026</a>, relative à la confidentialité des consultations des juristes d\'entreprise, protège sous conditions les consultations juridiques écrites de ces juristes. D\'après l\'analyse du cabinet <a href="https://www.dechert.com/knowledge/onpoint/2026/3/confidentialite-des-avis-juridiques-des-juristes-d-entreprise---.html">Dechert</a>, cinq conditions s\'ajoutent : un juriste titulaire d\'un master de droit ou d\'un diplôme équivalent, une formation à la déontologie, un destinataire limité à la direction ou aux organes de l\'entreprise, un avis fondé sur l\'application de règles de droit, et la mention « confidentiel, consultation juridique, juriste d\'entreprise » sur le document.',
                'Le champ est limité aux matières civile, commerciale et administrative, avec exclusion du pénal, du fiscal et des enquêtes de la Commission européenne en droit de la concurrence, selon la même analyse. Le <a href="https://www.conseil-constitutionnel.fr/actualites/communique/decision-n-2026-900-dc-du-18-fevrier-2026-communique-de-presse">Conseil constitutionnel</a> l\'a validée le 18 février 2026 (décision n° 2026-900 DC) avec deux réserves d\'interprétation sur la levée de la confidentialité. Le texte entre en vigueur à une date fixée par décret, au plus tard douze mois après la promulgation, soit en février 2027 ; les modalités exactes se vérifient dans le décret.',
                'La conséquence pratique est numérique. Pour qu\'un avis tienne, il faut pouvoir le marquer, le classer à part et prouver qui y a eu accès. Une direction juridique qui range ses avis dans le même dossier partagé que les autres documents de l\'entreprise ou qui les transmet par messagerie ordinaire affaiblit la protection qu\'elle cherche. Richard SALANON met en place un espace dédié aux avis, avec marquage, droits restreints et journal des consultations.',
                'Hors de France, le régime est différent : certains pays protègent la confidentialité des avis de leurs juristes d\'entreprise, d\'autres non, et dans l\'espace OHADA ce point se vérifie pays par pays avant d\'en faire un argument. La page ne présente donc cette loi que comme un exemple français, pour les entreprises qui ont une direction juridique en France.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique selon le type de cabinet et le pays ?',
            'items' => [
                ['secteur' => 'Cabinet d\'affaires de cinq avocats, Cotonou ou Abidjan', 'probleme' => 'Les délais de recouvrement se suivent dans des agendas personnels, alors que l\'Acte uniforme OHADA révisé, publié au Journal officiel de l\'OHADA le 15 novembre 2023, s\'applique depuis le 16 février 2024 aux procédures engagées après cette date.', 'solution' => 'Échéancier unique par dossier, avec alertes à l\'avocat responsable et à son suppléant, et un modèle de dossier de recouvrement qui range les pièces par étape. Les règles exactes du texte révisé se vérifient dans le texte publié, pas dans le logiciel.'],
                ['secteur' => 'Avocat installé seul, Dakar', 'probleme' => 'Les clients envoient leurs pièces par WhatsApp et il les range le soir, une à une, dans le bon dossier.', 'solution' => 'Un portail simple : le client dépose ses pièces dans le dossier, l\'avocat est averti, l\'accusé de réception est envoyé automatiquement. Une relance part automatiquement pour les pièces manquantes. Avec e-Justice qui se déploie au Sénégal, il prépare aussi ses échanges avec le greffe.'],
                ['secteur' => 'Cabinet de taille moyenne, Bruxelles ou Liège', 'probleme' => 'Les conclusions se déposent par la plateforme du barreau, mais le temps passé se reconstitue à la fin du mois pour les notes d\'honoraires.', 'solution' => 'Feuilles de temps par dossier reliées à la facturation, avec un état des provisions par client. La plateforme de dépôt reste telle quelle : on ne remplace que la partie interne.'],
                ['secteur' => 'Direction juridique d\'une société de services, Paris ou Lyon', 'probleme' => 'Les demandes des services arrivent par messagerie, les contrats par plusieurs circuits, et les avis du juriste se mélangent aux autres documents.', 'solution' => 'Un formulaire de demande, une file par priorité, un registre des contrats avec leurs échéances, et un espace d\'avis marqués avec accès restreint pour s\'aligner sur la loi du 23 février 2026 lorsqu\'elle entrera en vigueur.'],
                ['secteur' => 'Direction juridique d\'un groupe, Lomé ou Douala', 'probleme' => 'Les filiales demandent au juriste de la maison mère des avis sur des contrats de droit local, sans circuit commun.', 'solution' => 'Un circuit de demandes par filiale, avec partage des modèles de contrats approuvés et suivi des avocats extérieurs consultés par pays. Les règles de confidentialité de chaque pays se vérifient avant de déclarer les avis protégés.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment avance un projet de cabinet, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous présentez le cabinet ou la direction juridique, ses effectifs, ses outils et le problème le plus coûteux. Cet échange est gratuit ; il permet de dire franchement si un outil simple suffit.'],
                ['titre' => 'Diagnostic', 'duree' => 'Selon le projet', 'texte' => 'On suit un dossier de bout en bout : prise de contact, ouverture, contrôle des conflits, procédure, facturation, clôture. On note chaque délai, chaque pièce, chaque personne qui y accède, et les obligations du barreau qui s\'appliquent. La méthode proposée est un atelier avec un avocat, une assistante et, s\'il y en a un, l\'expert-comptable.'],
                ['titre' => 'Maquette et choix des outils', 'duree' => 'Selon le projet', 'texte' => 'Une maquette de l\'échéancier, de la fiche dossier et du portail est montrée à l\'équipe. On décide ce qu\'on garde, ce qu\'on relie et ce qu\'on construit, ainsi que l\'hébergement et le pays où les données seront traitées.'],
                ['titre' => 'Premier palier en production', 'duree' => 'Selon le projet', 'texte' => 'Le plus souvent l\'échéancier et la fiche dossier. Le cabinet l\'utilise sur ses vrais dossiers, avec un référent désigné, avant d\'ouvrir le palier suivant.'],
                ['titre' => 'Reprise des dossiers existants', 'duree' => 'Selon le projet', 'texte' => 'Les dossiers vivants sont repris d\'abord, avec leurs délais ; les dossiers archivés suivent ou restent dans leur classement. Les totaux et les dates sont comparés avec l\'équipe avant de supprimer l\'ancien suivi.'],
                ['titre' => 'IA, portail et automatisations', 'duree' => 'Selon le projet', 'texte' => 'Ces paliers s\'ajoutent une fois l\'échéancier stabilisé. L\'assistant de recherche se teste sur des dossiers anciens dont la réponse est connue, avant d\'être confié à un avocat.'],
                ['titre' => 'Formation et suivi', 'duree' => 'Selon le projet', 'texte' => 'Formation par rôle (avocat, collaborateur, assistante, comptable), guide court, puis suivi des premières semaines et support. La <a href="/services/maintenance-support">maintenance</a> couvre ensuite les correctifs et les évolutions.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel budget prévoir pour équiper un cabinet d\'avocats ?',
            'intro'      => 'Trois prix de départ existent : landing page 150 000 FCFA (environ 229 €), site vitrine 300 000 FCFA (environ 457 €), référencement naturel 75 000 FCFA (environ 114 €), au taux de 655,957 FCFA pour 1 €. Portail, dossiers et IA sont chiffrés sur devis. Paiement par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Site du cabinet', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Domaines d\'intervention, équipe, honoraires expliqués', 'Prise de rendez-vous', 'Mentions légales de la profession à valider avec votre ordre']],
                ['offre' => 'Portail client et échange de pièces', 'prix' => 'Sur devis', 'inclus' => ['Comptes individuels et droits par dossier', 'Dépôt et demande de pièces', 'Journal des accès']],
                ['offre' => 'Gestion de dossiers, délais et facturation', 'prix' => 'Sur devis', 'inclus' => ['Fichier des parties pour les conflits', 'Échéancier avec alertes', 'Temps passé, honoraires et provisions']],
                ['offre' => 'IA de recherche et de rédaction', 'prix' => 'Sur devis', 'inclus' => ['Assistant sur les documents du cabinet', 'Citation de la source', 'Relecture humaine obligatoire']],
            ],
            'variations' => [
                'Le nombre d\'avocats, de collaborateurs et de sites, et le nombre de dossiers vivants à reprendre.',
                'Le choix entre garder un logiciel existant et le relier, ou en construire un.',
                'Les règles du barreau et du pays sur l\'hébergement des données, à intégrer à l\'architecture.',
                'La profondeur de la facturation : temps passé seul, forfaits, honoraires de résultat, provisions.',
                'Le portail : simple dépôt de pièces, ou suivi complet du dossier avec messagerie.',
                'L\'IA : recherche sur les seuls documents du cabinet, ou rédaction assistée avec modèles et contrôles.',
                'La formation : nombre de personnes et de profils à former.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans la digitalisation d\'un cabinet d\'avocats ?',
            'intro' => 'Ces erreurs reviennent d\'un cabinet à l\'autre et se corrigent avant le développement, pendant le diagnostic.',
            'items' => [
                ['titre' => 'Copier un dossier dans un assistant grand public', 'texte' => 'Le réflexe est compréhensible : l\'outil est gratuit, rapide et efficace. Mais les pièces d\'un client sortent alors du périmètre que le secret professionnel protège. Le cabinet décide quels outils sont admis et lesquels sont proscrits.'],
                ['titre' => 'Citer une décision sans l\'avoir lue', 'texte' => 'Des juridictions ont déjà examiné des citations hallucinées dans des écritures, selon la base de Damien Charlotin. Une référence produite par une IA se vérifie dans la source officielle, et une collaboratrice qui relit n\'est pas un contrôle si elle ne retrouve pas le texte.'],
                ['titre' => 'Laisser le contrôle des conflits à la mémoire', 'texte' => 'Un fichier des parties, tenu à jour et interrogé à chaque ouverture, évite de découvrir après coup qu\'on représente deux parties opposées. Il doit inclure les adversaires, pas seulement les clients.'],
                ['titre' => 'Un échéancier sans suppléant', 'texte' => 'Une alerte qui ne part qu\'à un avocat absent ne sert à rien. Chaque délai a un responsable et un remplaçant, et un état des délais à venir se consulte chaque semaine.'],
                ['titre' => 'Choisir un hébergeur sans regarder la loi du pays', 'texte' => 'Un outil bon marché hébergé ailleurs peut soulever un problème de transfert de données sous la loi béninoise, sénégalaise, ivoirienne ou le RGPD. La question se pose avant le choix, pas après.'],
                ['titre' => 'Faire du site un outil de démarchage', 'texte' => 'Les règles de publicité des barreaux limitent ce qu\'un site peut annoncer (résultats, comparaisons, sollicitation). Un site qui séduit mais qui expose l\'avocat à une sanction est un mauvais site.'],
                ['titre' => 'Former une seule personne', 'texte' => 'Si l\'outil repose sur l\'assistante, il s\'arrête à son départ. Au moins deux personnes par rôle savent s\'en servir.'],
                ['titre' => 'Facturer avant d\'avoir clarifié les provisions', 'texte' => 'Les fonds de clients obéissent à des règles propres : le paramétrage de la facturation doit suivre l\'avis de l\'expert-comptable et du barreau, pas l\'inverse.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les avocats et les juristes d\'entreprise à ces outils ?',
            'paragraphes' => [
                'Richard a déjà formé des avocats ; sa page <a href="/formations/metier/avocats">formations pour avocats</a> décrit ce qu\'un cabinet peut travailler : recherche, rédaction, gestion des dossiers et des délais, relation client, honoraires et secret professionnel. Il forme à l\'usage des outils ; les avis de droit et de déontologie relèvent de l\'avocat et de son ordre.',
                'Richard peut former des juristes d\'entreprise ; la page <a href="/formations/metier/juristes-entreprise">formations pour juristes d\'entreprise</a> couvre les demandes internes, le cycle de vie des contrats, la conformité et la veille, et le suivi des contentieux. Cette formation se prépare avec la direction juridique, à partir de ses propres documents.',
                'Pour aller plus loin, les fiches <a href="/formations/ia-droit-ohada">IA et droit OHADA</a>, <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>, <a href="/formations/gouvernance-ia">gouvernance de l\'IA</a>, <a href="/formations/ia-processus-metier">IA dans les processus métier</a> et <a href="/formations/ia-en-entreprise">IA en entreprise</a> détaillent chaque sujet. D\'après la <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">Commission européenne</a>, les entreprises qui déploient une IA doivent assurer la maîtrise de l\'IA de leurs équipes (article 4) depuis le 2 février 2025, avec contrôle national dès le 2 août 2026. Un cabinet européen qui équipe ses avocats d\'un assistant a donc de bonnes raisons de les former.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier le numérique de votre cabinet à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d\'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, Richard SALANON intervient pour des cabinets et des directions juridiques d\'Afrique francophone, d\'Europe et du Canada. Il écrit lui-même les applications, du portail client à l\'échéancier, et relie les outils existants plutôt que de les remplacer sans raison.',
                'Sa méthode proposée : partir d\'un dossier réel, mettre un palier en service avant le suivant, ouvrir accès et code au nom du cabinet, proposer un contrat de sous-traitance sur les données personnelles, répondre sous 24 heures. Les règles du barreau et de la loi restent celles que le cabinet et son ordre déterminent.',
                'Vous pouvez consulter ses <a href="/realisations/">réalisations</a> pour juger de la qualité de ses livrables, et son parcours complet sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel est le premier processus à fiabiliser dans votre cabinet ?',
            'texte'  => 'Indiquez le délai de procédure que vous craignez le plus de manquer, la taille de votre équipe et vos outils : une réponse arrive sous 24 heures, puis, après un premier échange gratuit, un plan par paliers chiffré.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon cabinet'],
        ],
    ],

    'faq' => [
        ['q' => 'Un avocat peut-il utiliser l\'IA sans violer le secret professionnel ?', 'r' => 'Seulement si l\'avocat maîtrise où vont les données. Le guide pratique du CNB pose que l\'avocat ne doit jamais communiquer à une IA générative des données couvertes par le secret professionnel, et recommande de pseudonymiser les requêtes. Un assistant branché sur les documents du cabinet, hébergé sous contrat de sous-traitance, ne se compare pas à un outil grand public dans lequel on colle des pièces ; sa conformité se confirme avec l\'ordre avant l\'emploi.'],
        ['q' => 'L\'IA peut-elle inventer des décisions de justice ?', 'r' => 'Oui, c\'est un risque documenté. Au 5 octobre 2026, la base de Damien Charlotin recense 2 149 décisions où des citations hallucinées ont été relevées ; ce total augmente régulièrement. Toute référence se vérifie dans la source officielle avant d\'être utilisée dans un acte, et l\'assistant de Richard SALANON cite le document d\'où vient chaque passage.'],
        ['q' => 'Un site d\'avocat peut-il présenter ses résultats ou se comparer à ses confrères ?', 'r' => 'Cela dépend des règles de l\'ordre. En France, l\'article 10 du règlement intérieur national encadre la publicité et la sollicitation personnalisée, y compris le site et le nom de domaine. Dans l\'espace UEMOA, le code de déontologie de 2019 et le règlement de chaque barreau s\'appliquent. Les textes du site se valident avec l\'ordre avant publication.'],
        ['q' => 'Comment éviter un conflit d\'intérêts à l\'ouverture d\'un dossier ?', 'r' => 'Par un fichier des parties, clients et adversaires, interrogé à chaque ouverture, avant de tenir la première réunion. Le fichier se construit à partir des dossiers existants, avec les noms normalisés pour éviter les doublons. L\'outil signale les correspondances ; c\'est l\'avocat qui décide.'],
        ['q' => 'Peut-on facturer au temps passé et suivre les provisions dans un même outil ?', 'r' => 'Oui. La documentation d\'Odoo décrit des feuilles de temps qui servent à facturer les clients, et Dolibarr propose des projets, des feuilles de temps et de la facturation. Les règles sur les fonds de clients dépendent de votre barreau : elles se règlent avec votre expert-comptable avant de paramétrer.'],
        ['q' => 'Un portail client est-il compatible avec le secret professionnel ?', 'r' => 'Oui, s\'il est conçu pour : comptes individuels, droits limités au dossier, journal des accès, hébergement choisi selon la loi du pays, contrat de sous-traitance. Un portail est souvent plus sûr que l\'échange de pièces par messagerie ordinaire, où rien n\'est tracé.'],
        ['q' => 'La confidentialité des avis des juristes d\'entreprise existe-t-elle hors de France ?', 'r' => 'Cela varie selon les pays. En France, la loi n° 2026-122 du 23 février 2026 crée une confidentialité encadrée, limitée au civil, au commercial et à l\'administratif, qui entre en vigueur après un décret d\'application. Dans les autres pays, y compris de l\'espace OHADA, la règle se vérifie localement avant de déclarer un avis protégé.'],
        ['q' => 'Faut-il remplacer le logiciel de gestion de cabinet que nous utilisons ?', 'r' => 'Rarement. Si l\'équipe l\'utilise, on le garde et on le relie : portail, relances, tableau de bord. On ne remplace que lorsque le logiciel ne couvre plus les délais ou la facturation. Les fonctions et les prix des logiciels spécialisés se vérifient auprès de leurs éditeurs.'],
        ['q' => 'Où mes données de clients seront-elles hébergées ?', 'r' => 'Le choix se fait avec vous, selon la loi du pays du cabinet et les règles du barreau : Bénin (loi n° 2017-20), Sénégal (loi n° 2008-12), Côte d\'Ivoire (loi n° 2013-450) ou RGPD en Europe. L\'hébergeur, le pays et les sauvegardes sont écrits dans la note de cadrage, avant tout développement.'],
        ['q' => 'Combien coûte un projet pour un cabinet d\'avocats ?', 'r' => 'Un site vitrine démarre à 300 000 FCFA, soit environ 457 € à 655,957 FCFA pour 1 €. Le portail, la gestion des dossiers, la facturation et l\'IA se chiffrent sur devis, après un premier échange gratuit.'],
        ['q' => 'Richard SALANON donne-t-il des avis juridiques ?', 'r' => 'Richard SALANON est consultant en digitalisation et développeur logiciel. Il équipe les cabinets et les directions juridiques en outils numériques et forme leurs équipes, sans donner d\'avis de droit ni de déontologie ; ceux-ci relèvent de l\'avocat et de son ordre.'],
    ],

    'sources' => [
        ['titre' => 'Le Soleil, le Sénégal mise sur le numérique pour rapprocher les citoyens des tribunaux (4 septembre 2026)', 'url' => 'https://lesoleil.sn/justice/le-senegal-mise-sur-le-numerique-pour-rapprocher-les-citoyens-des-tribunaux/', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, le Bénin veut digitaliser le secteur de la justice (31 mai 2022)', 'url' => 'https://cio-mag.com/le-benin-veut-digitaliser-le-secteur-de-la-justice', 'date' => '2026-10-07'],
        ['titre' => 'Ministère de la Justice, convention nationale avec le CNB sur les échanges électroniques (2016)', 'url' => 'https://www.justice.gouv.fr/node/3282', 'date' => '2026-10-07'],
        ['titre' => 'BX1, les avocats lancent une plateforme informatique commune (DPA, juin 2017)', 'url' => 'https://bx1.be/categories/news/les-avocats-lancent-une-nouvelle-plateforme-informatique-commune-pour-une-justice-plus-rapide/', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, réforme de la facturation électronique : à partir de quand êtes-vous concerné ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => 'OHADA, publication au Journal officiel de l\'Acte uniforme du 17 octobre 2023 sur le recouvrement et les voies d\'exécution', 'url' => 'https://www.ohada.com/actualite/7010/publication-au-journal-officiel-de-lohada-de-lacte-uniforme-du-17-octobre-2023-portant-organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution.html?langue=fr', 'date' => '2026-10-07'],
        ['titre' => 'Dechert, confidentialité des avis juridiques des juristes d\'entreprise (loi n° 2026-122)', 'url' => 'https://www.dechert.com/knowledge/onpoint/2026/3/confidentialite-des-avis-juridiques-des-juristes-d-entreprise---.html', 'date' => '2026-10-07'],
        ['titre' => 'Légifrance, loi n° 2026-122 du 23 février 2026 relative à la confidentialité des consultations des juristes d\'entreprise', 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000053568123', 'date' => '2026-10-07'],
        ['titre' => 'Conseil constitutionnel, décision n° 2026-900 DC du 18 février 2026 (communiqué)', 'url' => 'https://www.conseil-constitutionnel.fr/actualites/communique/decision-n-2026-900-dc-du-18-fevrier-2026-communique-de-presse', 'date' => '2026-10-07'],
        ['titre' => 'CNB, guide pratique « Mettre l\'IA générative au service de la pratique de l\'avocat »', 'url' => 'https://cnb.avocat.fr/mettre-l-ia-generative-au-service-de-la-pratique-de-l-avocat', 'date' => '2026-10-07'],
        ['titre' => 'CNB, règlement intérieur national de la profession d\'avocat (articles 2 et 10)', 'url' => 'https://www.cnb.avocat.fr/fr/reglement-interieur-national-de-la-profession-davocat-rin', 'date' => '2026-10-07'],
        ['titre' => 'Base de Damien Charlotin, décisions de justice sur les hallucinations d\'IA', 'url' => 'https://www.damiencharlotin.com/hallucinations/', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, article 4 du règlement sur l\'IA : questions et réponses', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre IV (article 28, sous-traitant ; article 32, sécurité)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel (Sénégal)', 'url' => 'https://www.osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, Côte d\'Ivoire : ARTCI, le traitement des données personnelles soumis à autorisation préalable (12 juin 2015)', 'url' => 'https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable', 'date' => '2026-10-07'],
        ['titre' => 'UEMOA, règlement n° 05/CM/UEMOA du 25 septembre 2014 sur l\'harmonisation des règles de la profession d\'avocat (African LII)', 'url' => 'https://africanlii.org/fr/akn/aa-ecowas/act/reg/2014/5-cm-uemoa/fra@2014-09-25/source', 'date' => '2026-10-07'],
        ['titre' => 'Cour constitutionnelle du Bénin, décision DCC 21-227 du 16 septembre 2021 (code de déontologie des avocats de l\'UEMOA, adopté le 5 juillet 2019)', 'url' => 'https://courconstitutionnelle.bj/files/decisions/DCC21-227_16_septembre_2021.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, feuilles de temps', 'url' => 'https://www.odoo.com/documentation/20.0/applications/services/timesheets.html', 'date' => '2026-10-07'],
        ['titre' => 'Dolibarr, fonctionnalités', 'url' => 'https://www.dolibarr.org/features.php', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['saas-espace-client', 'integration-ia-entreprise', 'automatisation-ia', 'site-vitrine-professionnel', 'application-web-sur-mesure', 'maintenance-support'],
        'metiers'     => ['avocats', 'juristes-entreprise'],
        'formations'  => ['ia-droit-ohada', 'ia-ethique-conformite', 'gouvernance-ia', 'ia-processus-metier', 'ia-en-entreprise'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => ['air-canada-chatbot'],
    ],
];
