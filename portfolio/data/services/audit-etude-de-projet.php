<?php
// ============================================================
// data/services/audit-etude-de-projet.php · Pilier « Audit et étude de
// projet » (vague 1A). Le slug existait en base : la fiche de production
// (relue le 04/10/2026) donnait le tarif « sur devis », les inclus (étude de
// faisabilité, cahier des charges, choix des technologies, estimation du
// budget et des délais, feuille de route), le document remis au client et la
// liberté de confier la réalisation à qui il veut ; aucun délai chiffré, donc
// des ordres de grandeur à confirmer au cadrage. Faits externes relevés sur
// les pages de l'ANSSI, de la DGE, de la CNIL, du SGG du Bénin, de l'OWASP,
// de php.net, de Microsoft, d'Odoo, de Légifrance et de Cybermalveillance
// (sources datées du 04/10/2026). Ne reprend ni consultant-digitalisation ni
// digitalisation-d-entreprise ; l'audit SEO relève de audit-seo-complet.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Audit et étude de projet : savoir ce que vaut votre existant et ce que coûtera votre projet, avant d'investir",
    'title'   => 'Audit et étude de projet numérique | Richard SALANON',
    'meta'    => "Audit d'un site, d'une application ou d'un ERP, puis étude avant développement : cahier des charges, estimation par lots et choix technique, sur devis.",
    'en_bref' => "Deux missions ponctuelles de conseil technique, à commander avant de dépenser : l'audit d'un système existant (site, application, ERP, parc d'outils, sauvegardes, sécurité, dette technique, coûts récurrents, propriété des comptes et du code) et l'étude d'un projet avant son développement (expression du besoin, cahier des charges, choix entre outil du marché, ERP paramétré et sur mesure, estimation par lots, maquettes, planning, critères d'acceptation, aide à la consultation de prestataires). Elles s'adressent aux dirigeants de PME, d'ONG, d'écoles et de structures publiques d'Afrique francophone, d'Europe et du Canada. Comptez de quelques jours à quelques semaines selon le périmètre, durée fixée au cadrage. Le prix est fixé sur devis, et le rapport vous appartient.",
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'ERP et gestion',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'De quelques jours à quelques semaines selon le périmètre, fixé au cadrage'],
        ['l' => 'Pour qui', 'v' => 'Dirigeants de PME, ONG, écoles et structures publiques, avant un investissement numérique'],
        ['l' => 'Livrables', 'v' => 'Rapport d\'audit priorisé, cahier des charges, estimation par lots, recommandations'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que couvre une mission d'audit et d'étude de projet, et où s'arrête-t-elle ?",
            'paragraphes' => [
                "Cette page décrit deux prestations courtes, qui ont un point commun : elles se terminent par un document, pas par un logiciel. La première est l'audit d'un système qui existe déjà. On examine votre site, votre application, votre ERP ou l'ensemble de vos outils, et l'on dit ce qui tient, ce qui menace de céder et ce que cela coûte de laisser en l'état. La seconde est l'étude d'un projet qui n'existe pas encore : on transforme une idée en besoin écrit, chiffré et découpé, avant que la première ligne de code soit payée.",
                "L'audit regarde huit choses : l'architecture et les versions des logiciels, la sécurité, les sauvegardes et la capacité réelle à redémarrer, la dette technique, les coûts récurrents (hébergement, licences, abonnements, maintenance), la dépendance envers un prestataire ou une seule personne, la propriété des comptes, des noms de domaine et du code, et la conformité du traitement des données personnelles. L'étude produit l'expression du besoin, le cahier des charges, le choix argumenté entre un outil du marché, un ERP paramétré et un développement sur mesure, une estimation par lots, des maquettes, un planning et des critères d'acceptation.",
                "Les deux missions s'enchaînent souvent. Un dirigeant qui veut refaire son application commence par faire auditer l'ancienne : on sait alors ce qui peut être conservé, quelles données devront être reprises et quels engagements pèsent encore, avant d'écrire le cahier des charges de la nouvelle. À l'inverse, une étude peut conclure qu'il ne faut rien construire, parce qu'un outil existant, mieux réglé, fait déjà l'essentiel. C'est un résultat utile, et il coûte bien moins cher qu'un développement abandonné au bout de six mois.",
                "Trois sujets voisins ont leur propre page. Le choix des chantiers numériques de toute une organisation, sur plusieurs années, relève du <a href=\"/services/consultant-digitalisation\">consultant en digitalisation</a> ; leur mise en œuvre, de la <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. L'examen de votre visibilité sur Google relève de l'<a href=\"/services/audit-seo-complet\">audit SEO complet</a>. Enfin, l'audit décrit ici n'est ni un test d'intrusion certifié, ni une consultation juridique : quand une faille grave ou une question de droit apparaît, le rapport le signale et indique vers quel spécialiste se tourner.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quels signes reconnaît-on qu'un audit ou une étude devient nécessaire ?",
            'intro' => "La demande arrive rarement sous le nom d'« audit ». Elle prend la forme d'une inquiétude précise, d'une facture qui grimpe ou d'un projet qui n'avance pas. Voici les situations qui, dans la pratique, justifient de payer un regard technique extérieur avant de payer des travaux.",
            'items' => [
                ['titre' => 'Votre développeur est parti, et personne ne sait comment l\'outil fonctionne', 'texte' => "L'application tourne, mais le seul qui connaissait le serveur, les mots de passe et l'organisation du code a changé d'employeur ou ne répond plus. Avant de confier la suite à quelqu'un d'autre, il faut savoir ce qui existe, où cela se trouve et à qui cela appartient."],
                ['titre' => 'Les factures techniques augmentent sans explication', 'texte' => "Hébergement, extensions payantes, licences, nom de domaine, abonnements à des services que plus personne n'utilise : les prélèvements s'accumulent sur trois cartes bancaires différentes. L'audit les recense, les rattache à un usage réel et distingue ce qui peut être résilié de ce qui doit être conservé."],
                ['titre' => 'Une panne ou un piratage a fait peur', 'texte' => "Le site est resté inaccessible deux jours, une boîte de messagerie a envoyé des courriels frauduleux, ou un poste a été chiffré par un programme malveillant. L'incident est réglé, mais la question demeure : qu'est-ce qui l'a permis, et que se passerait-il demain si le serveur principal disparaissait ?"],
                ['titre' => 'Chaque modification coûte plus cher que la précédente', 'texte' => "Ajouter un champ à un formulaire prend une semaine, chaque correction en casse une autre, et le prestataire parle de « tout refaire ». C'est le signe d'une dette technique accumulée. Reste à savoir si elle se rembourse par étapes ou si la refonte est vraiment la seule issue."],
                ['titre' => 'Vous avez une idée de projet, mais aucun chiffre fiable', 'texte' => "Une plateforme de réservation, une application pour vos agents de terrain, un portail pour vos revendeurs : l'idée est claire dans votre tête, mais trois personnes vous ont donné trois prix sans rapport. Sans besoin écrit et découpé, il est impossible de savoir lequel est réaliste."],
                ['titre' => 'Un financeur, un partenaire ou un appel d\'offres exige un dossier', 'texte' => "Un bailleur demande des termes de référence techniques, une banque veut comprendre ce qu'elle finance, ou votre organisation doit publier une consultation. Il faut alors un cahier des charges que des prestataires inconnus pourront chiffrer sur la même base."],
                ['titre' => 'Un rachat, une association ou une reprise se prépare', 'texte' => "Avant de racheter une société, d'entrer au capital d'une jeune entreprise ou de reprendre l'activité d'un confrère, mieux vaut savoir ce que valent ses outils : un code maintenable, des comptes à son nom et des données exportables, ou une dépendance totale envers un tiers."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Audit de l'existant, étude de projet ou les deux : laquelle commander ?",
            'options'  => ['Audit d\'un système existant', 'Étude avant développement', 'Audit puis étude, enchaînés'],
            'criteres' => [
                ['critere' => 'Question de départ', 'valeurs' => ['Que vaut ce que nous avons, et que risquons-nous ?', 'Que faut-il construire, comment, pour combien et en combien de temps ?', 'Faut-il garder, corriger ou remplacer, et par quoi ?']],
                ['critere' => 'Matière première', 'valeurs' => ['Accès aux outils, au code, aux contrats et aux factures', 'Entretiens, documents métier, exemples de fichiers et d\'écrans', 'Les deux, l\'audit nourrissant directement le cahier des charges']],
                ['critere' => 'Livrable principal', 'valeurs' => ['Rapport de constats classés par priorité, avec plan d\'action', 'Cahier des charges, estimation par lots, maquettes, planning', 'Rapport d\'audit, scénario retenu et cahier des charges du remplacement']],
                ['critere' => 'Durée indicative, à confirmer au cadrage', 'valeurs' => ['Quelques jours pour un site, davantage pour un parc d\'outils ou un ERP', 'Une à quelques semaines selon la taille du projet', 'La somme des deux, avec un tronc commun d\'entretiens']],
                ['critere' => 'Situation typique', 'valeurs' => ['Départ d\'un prestataire, incident, coûts qui dérivent', 'Projet nouveau, financement à obtenir, consultation à lancer', 'Refonte d\'une application, changement d\'ERP, migration']],
                ['critere' => 'Ce qui vient ensuite', 'valeurs' => ['Corrections par votre équipe, par Richard ou par un autre prestataire', 'Consultation de prestataires ou réalisation directe', 'Réalisation par lots, sur la base du cahier des charges']],
            ],
            'verdict'  => "Si votre système fonctionne et que vous voulez savoir s'il est solide, commandez un audit. Si vous partez d'une feuille blanche, une étude suffit. Dès qu'un projet remplace un outil qui contient des données, des comptes ou des habitudes, enchaînez les deux : l'audit évite d'écrire un cahier des charges qui oublie ce que l'ancien système faisait sans que personne ne le sache.",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule la mission, du premier message à la remise du rapport ?",
            'items' => [
                ['titre' => 'Premier message et échange de cadrage', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez la situation : l'outil concerné ou le projet envisagé, ce qui vous inquiète, l'échéance éventuelle. Un échange, à Cotonou ou en visioconférence, fixe la question exacte à laquelle la mission doit répondre et le périmètre audité. S'il apparaît qu'une simple correction suffit, vous l'entendez dès ce moment."],
                ['titre' => 'Devis et liste des accès à préparer', 'duree' => 'Quelques jours', 'texte' => "Le devis précise le périmètre, les livrables, le calendrier et le prix. Il est accompagné de la liste de ce qu'il faudra fournir : accès en lecture au serveur et à l'administration, dépôt de code, contrats, dernières factures techniques, documents métier. Des comptes en lecture seule suffisent le plus souvent, et ils sont révoqués à la fin."],
                ['titre' => 'Collecte et inventaire', 'duree' => 'Ordre de grandeur : quelques jours, en parallèle', 'texte' => "Pour un audit, chaque élément est recensé : noms de domaine, hébergements, serveurs, logiciels et leurs versions, extensions, comptes d'administration, sauvegardes, abonnements. Pour une étude, on rassemble les fichiers, formulaires, captures d'écran et procédures qui décrivent le travail tel qu'il se fait aujourd'hui."],
                ['titre' => 'Entretiens', 'duree' => 'Ordre de grandeur : 1 à 3 jours', 'texte' => "Direction, utilisateurs quotidiens, comptable, ancien ou actuel prestataire : chaque personne est interrogée séparément, avec des questions préparées. Les entretiens se tiennent sur place au Bénin, en visioconférence, par téléphone ou par WhatsApp ailleurs."],
                ['titre' => 'Analyse technique ou rédaction de l\'étude', 'duree' => 'Ordre de grandeur : quelques jours à 2 semaines', 'texte' => "Audit : application de la grille de contrôle, lecture du code, vérification des sauvegardes et des accès, calcul des coûts récurrents. Étude : rédaction du besoin, des exigences, des lots, des maquettes et de l'estimation. Les points incertains sont listés comme tels, avec la façon de les lever."],
                ['titre' => 'Restitution', 'duree' => 'Une séance', 'texte' => "Les constats ou le cahier des charges sont présentés oralement aux décideurs, qui peuvent les contester avant la version définitive. Un constat grave découvert en cours de mission, comme une sauvegarde inexistante ou un accès administrateur ouvert à tous, vous est signalé tout de suite, sans attendre la restitution."],
                ['titre' => 'Remise des livrables et clôture des accès', 'duree' => 'Après la restitution', 'texte' => "Les documents définitifs vous sont remis dans des formats ouverts et modifiables. Les comptes d'accès créés pour la mission sont supprimés. Vous restez libre de la suite : correction en interne, consultation de prestataires ou réalisation confiée à Richard, sur devis séparé."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que contrôle la grille d'audit, domaine par domaine ?",
            'legende' => "Grille de départ d'un audit de système existant, adaptée au périmètre retenu au cadrage. Les références sont les guides et documentations officiels cités dans les sources, consultés le 4 octobre 2026.",
            'entetes' => ['Domaine', 'Ce qui est vérifié', 'Preuve demandée', 'Référence utilisée'],
            'lignes'  => [
                ['Inventaire', 'Noms de domaine, hébergements, serveurs, postes, logiciels, extensions, services en ligne, avec leur titulaire et leur date d\'échéance', 'Captures des espaces client, liste des abonnements, factures', 'Guide d\'hygiène informatique de l\'ANSSI : connaître son système d\'information'],
                ['Versions et mises à jour', 'Langage, cadriciel, système de gestion de contenu, ERP, système d\'exploitation : version installée, date de fin de support, extensions abandonnées', 'Numéros de version relevés sur le serveur et dans le code', 'Calendriers de php.net, de Microsoft et d\'Odoo'],
                ['Sécurité applicative', 'Contrôle d\'accès, configuration, dépendances, chiffrement, injections, authentification, journalisation, gestion des erreurs', 'Lecture du code, essais non destructifs sur une copie', 'OWASP Top 10:2025 ; OWASP ASVS 5.0.0 pour un niveau d\'exigence écrit'],
                ['Comptes et droits', 'Comptes administrateurs nominatifs ou partagés, anciens salariés encore actifs, double authentification, clés d\'API', 'Liste des comptes et de leurs droits, exportée par vous', 'Guide de la sécurité des données personnelles de la CNIL, édition 2024'],
                ['Sauvegardes et reprise', 'Ce qui est sauvegardé (base, fichiers, configuration), où, à quelle fréquence, hors ligne ou non, et dernier test de restauration', 'Restauration réelle d\'une copie sur un environnement vierge', 'Recommandations de Cybermalveillance.gouv.fr sur les sauvegardes'],
                ['Dette technique', 'Code dupliqué, absence de tests, modifications faites directement en production, documentation absente, cadriciel modifié en son cœur', 'Échantillon de fichiers, historique du dépôt Git', 'Bonnes pratiques du guide RGPD du développeur de la CNIL'],
                ['Coûts récurrents', 'Hébergement, licences, abonnements, maintenance, extensions payantes, rapportés à l\'usage réel', 'Relevés bancaires et factures des douze derniers mois', 'Contrats et grilles tarifaires publiques des fournisseurs'],
                ['Dépendances', 'Prestataire unique, personne unique, service gratuit sans contrat, extension d\'un éditeur disparu', 'Entretiens, contrats, mentions légales des fournisseurs', 'Clauses de réversibilité et de restitution des contrats'],
                ['Propriété', 'Titulaire des noms de domaine, des comptes d\'hébergement, du dépôt de code, des comptes de magasins d\'applications, cession des droits sur le code', 'Fiches des registres, contrats de développement', 'Code de la propriété intellectuelle pour la France ; contrats signés ailleurs'],
                ['Données personnelles', 'Données collectées, lieu d\'hébergement, sous-traitants, registre, durées de conservation, mesures de sécurité', 'Registre des traitements s\'il existe, contrats des sous-traitants', 'Loi n° 2017-20 au Bénin (articles 426 à 435) ; RGPD (articles 28, 32 et 33)'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi les entretiens pèsent-ils autant que l'analyse du code ?",
            'paragraphes' => [
                "Un serveur dit quelle version de PHP il exécute ; il ne dit pas que la comptable exporte chaque soir les ventes dans un tableur parce qu'un rapport est faux depuis deux ans. La moitié des constats utiles d'un audit vient des personnes, pas des machines. C'est aussi vrai pour une étude : le cahier des charges le plus soigné échoue s'il décrit la procédure officielle au lieu du travail réel.",
                "Chaque entretien suit une trame écrite d'avance. Que faites-vous chaque jour dans l'outil, et que faites-vous à côté, sur papier, dans un tableur ou sur WhatsApp ? Qu'est-ce qui vous a fait perdre le plus de temps le mois dernier ? Qui appelez-vous quand cela ne marche pas, et combien de temps attendez-vous la réponse ? Quels mots de passe connaissez-vous, et d'où viennent-ils ? Les réponses à cette dernière question surprennent souvent la direction.",
                "Les entretiens servent enfin à mesurer la dépendance envers une personne. Quand une seule employée sait relancer le serveur, régénérer le certificat du site ou corriger le modèle de facture, l'entreprise ne possède pas vraiment son outil : elle le loue à cette personne. Le rapport le dit sans désigner de coupable, et propose les moyens de répartir ce savoir : procédure écrite, second compte d'administration, transfert de compétences, ou une <a href=\"/services/formation-en-entreprise\">formation en entreprise</a> pour le référent désigné.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui possède vraiment vos comptes, votre code et vos données ?",
            'paragraphes' => [
                "C'est la question la plus simple de l'audit, et celle dont la réponse inquiète le plus souvent. Le nom de domaine est fréquemment enregistré au nom personnel de l'ancien prestataire ou du neveu qui a créé le premier site. L'hébergement est payé par la carte d'un associé parti. L'application mobile est publiée sous le compte développeur d'une agence. Le dépôt de code se trouve sur un compte privé auquel vous n'avez jamais eu accès. Tant que tout va bien, personne ne s'en aperçoit.",
                "Le jour où la relation se dégrade, chacun de ces points devient un moyen de pression, ou simplement un blocage : un domaine qui expire faute de renouvellement emporte le site et les adresses électroniques avec lui. L'audit établit donc, élément par élément, le titulaire réel, la date d'échéance, la personne qui détient les accès et la marche à suivre pour transférer ce qui doit l'être à votre entreprise. Les transferts eux-mêmes se font avec l'accord des titulaires actuels.",
                "Pour le code, la loi ne règle pas tout d'elle-même. En France, l'<a href=\"https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278890\">article L113-9 du Code de la propriété intellectuelle</a> attribue à l'employeur les droits patrimoniaux sur les logiciels créés par ses employés dans l'exercice de leurs fonctions, sauf stipulation contraire. Ce texte vise les salariés ; pour un indépendant ou une agence, ce que vous possédez dépend de ce que dit le contrat. L'audit relit donc les contrats de développement existants et signale l'absence de clause de cession, à faire vérifier par un juriste du pays concerné.",
                "Les données suivent la même logique. Un logiciel en ligne qui ne permet pas d'exporter vos clients, vos factures et leur historique dans un format lisible vous retient autant qu'un contrat. L'audit teste un export réel, sur un échantillon, et vérifie que ce qui en sort est exploitable ailleurs : colonnes compréhensibles, pièces jointes incluses, identifiants conservés. Une sortie impossible n'est pas forcément une raison de partir, mais c'est un risque à connaître avant de construire davantage dessus.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le rapport d'audit classe-t-il les constats par priorité ?",
            'legende' => "Échelle utilisée dans le rapport. Chaque constat porte un niveau, une preuve, une conséquence possible, une correction proposée et un effort estimé ; les délais de traitement sont des recommandations, à adapter à vos moyens.",
            'entetes' => ['Niveau', 'Définition', 'Exemple de constat', 'Traitement conseillé'],
            'lignes'  => [
                ['Critique', 'Risque de perte de données, de piratage ou d\'arrêt de l\'activité, déjà exploitable', 'Aucune sauvegarde hors du serveur ; compte administrateur sans mot de passe robuste exposé sur Internet', 'Immédiatement, souvent avant la fin de la mission'],
                ['Élevé', 'Faiblesse sérieuse qui ne demande qu\'une circonstance défavorable pour devenir un incident', 'Version de PHP ou de Windows sans correctifs de sécurité ; nom de domaine au nom d\'un ancien prestataire', 'Dans les semaines qui suivent'],
                ['Moyen', 'Défaut qui renchérit chaque évolution ou fragilise l\'exploitation', 'Modifications faites directement en production ; absence de documentation ; extensions redondantes', 'Dans le trimestre, ou lors de la prochaine évolution'],
                ['Faible', 'Amélioration souhaitable, sans risque immédiat', 'Abonnement inutilisé à résilier ; nommage incohérent des fichiers', 'Quand l\'occasion se présente'],
                ['À vérifier', 'Point qui n\'a pas pu être établi avec les accès fournis', 'Contrat de développement introuvable ; sauvegarde gérée par un tiers qui n\'a pas répondu', 'Lever le doute avant toute décision qui en dépend'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Sur quels référentiels publics l'audit s'appuie-t-il ?",
            'paragraphes' => [
                "Une grille d'audit inventée pour l'occasion ne prouve rien. Celle-ci s'adosse à des documents publics que vous pouvez lire vous-même. Pour l'organisation et l'hygiène du parc, le <a href=\"https://messervices.cyber.gouv.fr/guides/guide-dhygiene-informatique\">guide d'hygiène informatique de l'ANSSI</a>, publié le 23 janvier 2017, rassemble 42 mesures destinées à la personne qui a la charge du bon fonctionnement de l'informatique d'une organisation. Pour une petite structure, le guide <a href=\"https://www.entreprises.gouv.fr/la-dge/publications/la-cybersecurite-pour-les-tpepme-en-13-questions\">« La cybersécurité pour les TPE/PME en 13 questions »</a>, publié par l'ANSSI avec la Direction générale des Entreprises dans une deuxième édition d'octobre 2022, se lit en une soirée.",
                "Pour une application web, le rapport classe les faiblesses selon l'<a href=\"https://top10.owasp.org/2025\">OWASP Top 10:2025</a>, dont les deux premières catégories sont le contrôle d'accès défaillant et la mauvaise configuration de sécurité, suivies des défaillances de la chaîne d'approvisionnement logicielle, c'est-à-dire des bibliothèques et extensions tierces. Quand l'étude d'un projet doit fixer un niveau d'exigence vérifiable, elle s'appuie plutôt sur l'<a href=\"https://owasp.org/www-project-application-security-verification-standard/\">OWASP ASVS</a>, dont la version stable est la 5.0.0 selon la page du projet : c'est une liste d'exigences que l'on peut écrire dans un cahier des charges et vérifier à la recette.",
                "Pour les données personnelles, le <a href=\"https://www.cnil.fr/fr/guide-de-la-securite-des-donnees-personnelles-nouvelle-edition-2024\">guide de la sécurité des données personnelles de la CNIL</a>, dans son édition du 26 mars 2024, compte 25 fiches réparties en 5 parties, dont de nouvelles fiches sur l'informatique en nuage, les applications mobiles, l'intelligence artificielle et les API. Le <a href=\"https://www.cnil.fr/fr/guide-rgpd-du-developpeur\">guide RGPD du développeur</a>, dont la CNIL a publié une nouvelle version le 13 décembre 2021, sert de référence pour juger la manière dont le code a été écrit : gestion du code source, choix des bibliothèques, tests, durées de conservation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que contient un cahier des charges qui permet de recevoir des devis comparables ?",
            'paragraphes' => [
                "Un bon cahier des charges décrit ce que l'outil doit permettre, pas la façon de le programmer. Il commence par le contexte : qui êtes-vous, combien de personnes utiliseront l'outil, sur quels appareils, avec quelle connexion, dans quels pays. Viennent ensuite les profils d'utilisateurs, puis les besoins rédigés sous forme de situations concrètes : « le magasinier enregistre une réception partielle et le stock se met à jour », plutôt que « module de gestion des stocks ». Chaque besoin porte une priorité : indispensable au lancement, souhaitable, ou plus tard.",
                "La partie la plus souvent oubliée concerne les exigences qui ne sont pas des fonctions : temps de réponse acceptable sur une connexion mobile, fonctionnement pendant une coupure, langues, accessibilité, volumes attendus, hébergement imposé ou non, sauvegardes, journalisation, niveau de sécurité. Ce sont elles qui expliquent la plupart des écarts de prix entre deux devis : un prestataire qui les ignore paraît moins cher, et facture la différence plus tard sous forme d'avenants.",
                "Le document fixe aussi ce qui est hors périmètre, la liste des données à reprendre de l'ancien système, les interfaces avec d'autres logiciels (paiement mobile money, WhatsApp, comptabilité, ERP), les livrables attendus du prestataire (code source, documentation, accès, formation) et les conditions de propriété. Enfin, chaque besoin indispensable reçoit un critère d'acceptation : la phrase vérifiable qui dira, le jour de la recette, si le travail est fait. Sans ces critères, la fin d'un projet se négocie au lieu de se constater.",
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Que recevez-vous concrètement à la fin de la mission ?",
            'items' => [
                'Pour un audit : l\'inventaire complet des éléments techniques, avec pour chacun son titulaire, sa version, son coût annuel et sa date d\'échéance.',
                'Pour un audit : le rapport de constats classés de « critique » à « faible », chacun avec sa preuve, sa conséquence possible, la correction proposée et l\'effort estimé.',
                'Pour un audit : un plan d\'action ordonné, qui sépare ce qui doit être fait cette semaine de ce qui peut attendre la prochaine évolution.',
                'Pour un audit : le relevé des coûts récurrents sur douze mois, avec les abonnements à résilier ou à regrouper.',
                'Pour une étude : l\'expression du besoin et le cahier des charges, avec les priorités, le hors périmètre et les critères d\'acceptation de chaque besoin indispensable.',
                'Pour une étude : la comparaison argumentée entre outil du marché, ERP paramétré et développement sur mesure, avec le scénario recommandé et ses raisons.',
                'Pour une étude : l\'estimation du budget et du délai, lot par lot, avec les hypothèses et les incertitudes qui la font varier.',
                'Pour une étude : les maquettes des écrans principaux et un planning par étapes, utilisables pour consulter des prestataires ou présenter le projet à un financeur.',
                'Dans les deux cas : le support de la restitution, la liste des points restés à vérifier et des documents remis dans des formats ouverts, qui vous appartiennent.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Outil du marché, ERP paramétré ou développement sur mesure : comment l'étude tranche-t-elle ?",
            'options'  => ['Outil du marché en ligne', 'ERP paramétré (Odoo, Dolibarr)', 'Développement sur mesure'],
            'criteres' => [
                ['critere' => 'Quand il s\'impose', 'valeurs' => ['Le besoin est courant et vos processus ressemblent à ceux de milliers d\'autres entreprises', 'Ventes, achats, stock, facturation et comptabilité doivent partager les mêmes données', 'Votre métier repose sur une règle qu\'aucun logiciel ne gère sans contorsion']],
                ['critere' => 'Ce que l\'étude vérifie', 'valeurs' => ['Couverture réelle du besoin sur un essai, export des données, lieu d\'hébergement', 'Écart entre le standard et vos règles, modules nécessaires, édition et hébergement', 'Coût de construction, coût de maintenance annuel, capacité à reprendre le code']],
                ['critere' => 'Coût de départ', 'valeurs' => ['Faible : un abonnement et un peu de réglage', 'Moyen : paramétrage, reprise des données, formation', 'Le plus élevé : conception, développement, tests']],
                ['critere' => 'Coût dans la durée', 'valeurs' => ['Abonnements qui augmentent avec le nombre d\'utilisateurs', 'Hébergement ou licences, montées de version, modules à porter', 'Hébergement, maintenance, mises à jour de sécurité du cadriciel']],
                ['critere' => 'Risque principal', 'valeurs' => ['Fonction manquante découverte après l\'achat, éditeur qui change ses prix', 'Personnalisations qui bloquent les montées de version', 'Projet sans fin si le cahier des charges est flou']],
                ['critere' => 'Combinaison fréquente', 'valeurs' => ['Relié aux autres outils par une automatisation n8n ou Make', 'Complété par une petite application pour le terrain ou un portail', 'Branché sur un ERP qui reste la source des données comptables']],
            ],
            'verdict'  => "L'étude commence toujours par la solution la moins coûteuse et ne remonte vers le sur mesure que lorsque les écarts sont documentés. Pour départager Odoo et Dolibarr, le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> donne les éléments de fond ; pour relier des outils existants, le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a>. Si le sur mesure l'emporte, la réalisation relève de l'<a href=\"/services/application-web-sur-mesure\">application web sur mesure</a>.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "À quoi ressemble une estimation découpée en lots ?",
            'legende' => "Exemple fictif de découpage pour un portail de commande destiné à des revendeurs, relié à un ERP existant. Les fourchettes réelles sont exprimées dans le livrable en jours de travail et en montant, avec leurs hypothèses.",
            'entetes' => ['Lot', 'Contenu', 'Ce qui fait varier l\'estimation', 'Critère d\'acceptation type'],
            'lignes'  => [
                ['Lot 0 : fondations', 'Hébergement, environnements de test et de production, dépôt de code au nom du client, sauvegardes', 'Hébergement imposé ou libre, exigences de sécurité', 'Une restauration complète réussit sur un serveur vierge'],
                ['Lot 1 : accès et comptes', 'Inscription des revendeurs, validation par l\'administration, droits par profil', 'Nombre de profils, double authentification', 'Un revendeur non validé ne voit aucun prix'],
                ['Lot 2 : catalogue et commande', 'Catalogue synchronisé depuis l\'ERP, prix par revendeur, panier, commande', 'Qualité des données de l\'ERP, règles de prix', 'Une commande passée apparaît dans l\'ERP avec le bon prix'],
                ['Lot 3 : paiement', 'Paiement par mobile money et carte via un agrégateur, rapprochement avec la commande', 'Choix de l\'agrégateur, paiements partiels', 'Un paiement confirmé solde la commande sans intervention'],
                ['Lot 4 : suivi et notifications', 'Statut de la commande, messages WhatsApp ou courriels, historique', 'Canal retenu, modèles de messages à faire approuver', 'Le revendeur reçoit chaque changement de statut'],
                ['Lot 5 : reprise et lancement', 'Import des revendeurs existants, formation, accompagnement des premières semaines', 'Volume et propreté des fichiers à reprendre', 'Les totaux importés correspondent aux fichiers d\'origine'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi une estimation honnête se donne-t-elle en fourchette, et par lots ?",
            'paragraphes' => [
                "Un prix unique annoncé pour un projet entier, avant d'en avoir décrit les écrans, est une promesse commerciale, pas une estimation. Une estimation sérieuse part du découpage : chaque lot est assez petit pour être imaginé en détail, ses tâches sont listées, et chacune reçoit une fourchette basse et haute. L'écart entre les deux est une information en soi : un lot dont la fourchette va du simple au triple signale un point mal compris, qu'il vaut mieux éclaircir avant de signer.",
                "Le découpage par lots a un second intérêt : il permet de commencer petit. Le premier lot livré, testé et utilisé apprend plus sur le projet que des semaines de réunions. Si le budget se resserre, on s'arrête après un lot utile au lieu d'abandonner un projet inachevé. L'estimation indique enfin ce qu'elle ne couvre pas : licences, frais de l'agrégateur de paiement, hébergement, maintenance annuelle. Ces coûts récurrents figurent sur une ligne séparée, pour que le budget sur trois ans soit visible dès le départ.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles technologies l'étude peut-elle recommander, et pour quelles raisons ?",
            'legende' => "Technologies que Richard SALANON pratique en réalisation, ce qui lui permet d'en estimer le coût réel. Le cahier des charges reste rédigé pour être chiffré par d'autres prestataires, sans technologie imposée sans raison.",
            'entetes' => ['Technologie', 'Quand l\'étude la retient', 'Pourquoi', 'Ce que l\'audit vérifie sur l\'existant'],
            'lignes'  => [
                ['PHP et Laravel', 'Application de gestion, portail, espace client, API', 'Cadriciel répandu, documenté, avec beaucoup de développeurs disponibles en Afrique comme en Europe', 'Version de PHP encore suivie, version de Laravel, dépendances à jour'],
                ['Node.js', 'Services temps réel, connecteurs, traitements qui attendent beaucoup de réponses externes', 'Même langage que l\'interface web, écosystème vaste', 'Paquets abandonnés ou vulnérables dans les dépendances'],
                ['Vue ou React', 'Interfaces riches, tableaux de bord, écrans très interactifs', 'Composants réutilisables, compétences faciles à trouver', 'Construction reproductible, absence de clés secrètes dans le code envoyé au navigateur'],
                ['Python et Flask', 'Petits services d\'intelligence artificielle, extraction ou classement de documents', 'Brique légère, accès direct aux bibliothèques d\'IA', 'Exposition des clés d\'API des fournisseurs de modèles'],
                ['WordPress', 'Site de contenu que l\'équipe met à jour elle-même', 'Prise en main rapide, nombreux prestataires capables de le reprendre', 'Extensions inutilisées, abandonnées ou en double, comptes administrateurs'],
                ['Odoo ou Dolibarr', 'Gestion commerciale, stock, facturation, comptabilité partagées', 'Logiciels ouverts, utilisables en français, avec plans de comptes SYSCOHADA', 'Version encore suivie, modules spécifiques à porter, sauvegarde de la base et des pièces jointes'],
                ['n8n ou Make', 'Relier des outils existants sans développement lourd', 'n8n peut s\'héberger chez vous, Make se prend en main vite', 'Scénarios documentés, comptes de service, erreurs surveillées'],
                ['Flutter', 'Application Android et iOS pour des agents de terrain ou des clients', 'Une seule base de code pour les deux systèmes', 'Compte des magasins d\'applications au nom du client, clés de signature conservées'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment l'étude aide-t-elle à choisir un prestataire, y compris par appel d'offres ?",
            'paragraphes' => [
                "Le cahier des charges sert d'abord à consulter. Il est rédigé pour qu'un prestataire inconnu puisse le chiffrer sans réunion préalable, et il s'accompagne d'un bordereau de réponse : le même tableau de lots à remplir par chaque candidat, avec ses jours, son prix, ses hypothèses et ses exclusions. Les offres deviennent alors comparables ligne à ligne, et un écart de prix s'explique au lieu d'intriguer.",
                "L'analyse technique des réponses vérifie la cohérence entre l'estimation et le contenu : un lot de paiement chiffré à deux jours alors qu'il suppose un rapprochement automatique, une absence de ligne pour la reprise des données, une technologie que personne ne saura maintenir dans le pays. Elle prépare aussi les questions de clarification à poser aux candidats et, si vous le souhaitez, un petit exercice technique ou une démonstration sur un cas réel du cahier des charges.",
                "Pour une structure publique, une ONG ou un projet financé, la consultation obéit aux règles du financeur ou au code des marchés publics du pays : forme du dossier, critères publiés, délais de réponse, procès-verbaux. L'étude fournit la partie technique de ce dossier (spécifications, critères d'évaluation techniques, grille de notation) ; la procédure elle-même reste conduite par votre organisation. Si Richard est candidat à la réalisation, il ne participe évidemment pas à l'évaluation des offres.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble un audit ou une étude selon le secteur, en Afrique et en Europe ?",
            'items' => [
                ['secteur' => 'Distribution et négoce, Cotonou', 'probleme' => 'Situation type : un ERP installé il y a plusieurs années sur un serveur du bureau, une version qui ne reçoit plus de correctifs, des modules ajoutés par un prestataire injoignable et une sauvegarde copiée sur un disque toujours branché.', 'solution' => 'Audit de l\'ERP et du serveur : inventaire des modules spécifiques, test de restauration sur une machine vierge, relevé des comptes, chiffrage de la montée de version comparé à un changement d\'outil. Le rapport place la sauvegarde hors ligne en tête du plan d\'action.'],
                ['secteur' => 'École privée, Abidjan', 'probleme' => 'Situation type : la direction veut une application pour les inscriptions, les échéanciers de frais de scolarité et les paiements par mobile money, et a reçu trois devis impossibles à comparer.', 'solution' => 'Étude de projet : profils (parents, secrétariat, comptabilité), besoins priorisés, comparaison entre un logiciel de gestion scolaire du marché et un développement, lots chiffrés, critères d\'acceptation, puis bordereau de réponse commun renvoyé aux trois prestataires.'],
                ['secteur' => 'ONG et projet financé, Dakar ou Ouagadougou', 'probleme' => 'Situation type : un bailleur exige des termes de référence techniques pour une plateforme de suivi des activités, avec une procédure de mise en concurrence et une grille d\'évaluation publiée.', 'solution' => 'Étude rédigée au format demandé : contexte, exigences fonctionnelles et techniques, contraintes de connexion sur le terrain, hébergement et données personnelles, critères d\'évaluation technique et grille de notation, laissés à l\'ONG pour conduire la procédure.'],
                ['secteur' => 'Clinique ou cabinet médical, Lomé', 'probleme' => 'Situation type : un logiciel de rendez-vous et de dossiers ouvert à toute l\'équipe avec un seul identifiant, des exports envoyés par messagerie, aucun registre des traitements.', 'solution' => 'Audit centré sur les accès et les données de santé : comptes nominatifs, droits par fonction, chiffrement, sauvegardes, contrat avec l\'éditeur, registre et analyse d\'impact à prévoir au regard de la loi du pays, avec les priorités classées par gravité.'],
                ['secteur' => 'PME de services, Lyon ou Bruxelles', 'probleme' => 'Situation type : l\'agence qui a construit l\'espace client met fin à son contrat ; l\'entreprise ignore où se trouve le code et si elle peut le confier à quelqu\'un d\'autre.', 'solution' => 'Audit de reprise : titulaire du domaine et de l\'hébergement, accès au dépôt Git, clause de cession dans le contrat, état du code et des dépendances, sous-traitants au sens du RGPD, puis note de transfert remise au futur prestataire.'],
                ['secteur' => 'Jeune entreprise, Montréal ou Genève', 'probleme' => 'Situation type : une fondatrice veut lancer une application mobile et doit présenter un budget crédible à des investisseurs, sans équipe technique.', 'solution' => 'Étude d\'une première version réduite : parcours essentiels, maquettes, choix entre application Flutter et application web, lots chiffrés en fourchettes, coûts récurrents sur trois ans et planning, utilisables tels quels dans le dossier de financement.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte un audit ou une étude de projet, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun forfait n'est publié pour l'audit et l'étude de projet : les seuls tarifs de départ affichés sur ce site concernent la landing page, le site vitrine et le référencement naturel. La mission est donc chiffrée sur devis, gratuit et sans engagement, après l'échange de cadrage, avec un périmètre, des livrables et un calendrier écrits. Elle se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Audit d\'un site ou d\'une application', 'prix' => 'Sur devis', 'inclus' => ['Inventaire, versions et dépendances', 'Sécurité applicative selon l\'OWASP Top 10:2025', 'Comptes, propriété, sauvegardes et test de restauration', 'Rapport priorisé et plan d\'action']],
                ['offre' => 'Audit d\'un parc d\'outils ou d\'un ERP', 'prix' => 'Sur devis', 'inclus' => ['Inventaire des logiciels, serveurs, postes et abonnements', 'Coûts récurrents sur douze mois', 'Dépendances envers un prestataire ou une personne', 'Scénarios : corriger, faire évoluer ou remplacer']],
                ['offre' => 'Étude de projet et cahier des charges', 'prix' => 'Sur devis', 'inclus' => ['Entretiens et expression du besoin', 'Choix entre outil du marché, ERP et sur mesure', 'Estimation par lots, maquettes et planning', 'Critères d\'acceptation de chaque besoin indispensable']],
                ['offre' => 'Aide à la consultation de prestataires', 'prix' => 'Sur devis', 'inclus' => ['Bordereau de réponse commun', 'Analyse technique des offres reçues', 'Questions de clarification aux candidats', 'Partie technique d\'un dossier d\'appel d\'offres']],
            ],
            'variations' => [
                'Le nombre d\'outils, de serveurs, de sites et d\'applications compris dans le périmètre.',
                'La taille et l\'état du code à lire : quelques milliers de lignes documentées ou des années de modifications sans historique.',
                'Le nombre de personnes à interroger et de services concernés.',
                'La facilité d\'accès : identifiants rassemblés d\'avance, ou prestataires à relancer pour obtenir chaque accès.',
                'Pour une étude, le nombre de profils d\'utilisateurs, d\'écrans à maquetter et d\'interfaces avec d\'autres logiciels.',
                'Les formats imposés par un bailleur, une banque ou une procédure de marché public.',
                'La langue des livrables, français ou anglais, et les déplacements éventuels hors du Bénin.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs rendent un audit ou une étude inutiles ?",
            'intro' => "Une mission de quelques jours ne vaut que par ce qu'elle permet de décider ensuite. Ces erreurs, toutes fréquentes, la transforment en document de tiroir.",
            'items' => [
                ['titre' => 'Faire auditer le travail par celui qui l\'a réalisé', 'texte' => 'Un prestataire qui juge son propre code ne voit pas ses angles morts, et il a intérêt à les taire. L\'audit doit être confié à quelqu\'un qui n\'a pas construit le système audité.'],
                ['titre' => 'Restreindre les accès au point de ne rien voir', 'texte' => 'Un audit mené sur des captures d\'écran et des déclarations ne mesure que la confiance. Des accès en lecture seule, limités à la durée de la mission et révoqués ensuite, suffisent à travailler sur des preuves.'],
                ['titre' => 'Croire la sauvegarde sur parole', 'texte' => 'Une sauvegarde jamais restaurée reste une hypothèse. Cybermalveillance.gouv.fr recommande de vérifier régulièrement qu\'elle fonctionne ; l\'audit le fait réellement, sur une copie, et note le temps qu\'il a fallu.'],
                ['titre' => 'Écrire un cahier des charges qui impose la solution', 'texte' => 'Exiger une technologie, une marque ou une architecture sans raison écrite écarte des candidats sérieux et fige les prix. Le cahier des charges décrit des besoins et des résultats vérifiables ; les choix techniques imposés sont justifiés un par un.'],
                ['titre' => 'Oublier les exigences qui ne sont pas des fonctions', 'texte' => 'Connexion lente, coupures, volumes, sauvegardes, sécurité, langues : absentes du cahier des charges, elles reviennent sous forme d\'avenants ou de mauvaises surprises après le lancement.'],
                ['titre' => 'Prendre l\'estimation la plus basse pour la plus juste', 'texte' => 'Un devis très inférieur aux autres oublie souvent un lot entier : la reprise des données, le paiement, la formation ou les tests. Le bordereau commun rend ces absences visibles avant la signature.'],
                ['titre' => 'Ranger le rapport sans plan d\'action', 'texte' => 'Un rapport sans responsable ni date pour chaque constat critique n\'a rien changé. La restitution se termine donc par une décision : qui corrige quoi, et quand.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Que faire si l'audit découvre une faille déjà exploitée ?",
            'texte' => "Cela arrive : un compte inconnu dans l'administration, un fichier suspect sur le serveur, des données clients accessibles sans mot de passe. Dans ce cas, l'audit s'interrompt pour vous prévenir le jour même, et la priorité devient de contenir l'incident, pas de finir le rapport. Si des données personnelles sont touchées, l'article 427 de la loi n° 2017-20 impose au Bénin de notifier sans délai l'Autorité de protection des données et les personnes concernées ; en Europe, l'article 33 du RGPD demande de prévenir l'autorité de contrôle si possible dans les 72 heures. Notez tout ce que vous constatez, et n'effacez rien avant d'avoir conservé une copie.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères officiels garder en tête avant de faire auditer votre système ?",
            'items' => [
                ['valeur' => '42 mesures', 'libelle' => 'Mesures d\'hygiène informatique rassemblées par l\'ANSSI dans son guide publié le 23 janvier 2017', 'source' => 'ANSSI, guide d\'hygiène informatique', 'url' => 'https://messervices.cyber.gouv.fr/guides/guide-dhygiene-informatique'],
                ['valeur' => '25 fiches', 'libelle' => 'Fiches du guide de la sécurité des données personnelles, édition du 26 mars 2024, réparties en 5 parties', 'source' => 'CNIL, guide de la sécurité des données personnelles', 'url' => 'https://www.cnil.fr/fr/guide-de-la-securite-des-donnees-personnelles-nouvelle-edition-2024'],
                ['valeur' => '72 heures', 'libelle' => 'Délai, si possible, pour notifier une violation de données personnelles à l\'autorité de contrôle en Europe', 'source' => 'RGPD, article 33, publié par la CNIL', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4'],
                ['valeur' => '31 décembre 2026', 'libelle' => 'Fin du support de sécurité de PHP 8.2 ; les branches 8.0 et 8.1 ne sont plus suivies', 'source' => 'php.net, versions supportées', 'url' => 'https://www.php.net/supported-versions.php'],
                ['valeur' => '14 octobre 2025', 'libelle' => 'Fin de la prise en charge de Windows 10 : plus de correctifs de sécurité hors programme de mises à jour étendues', 'source' => 'Microsoft, fin de la prise en charge de Windows 10', 'url' => 'https://support.microsoft.com/fr-fr/windows/fin-de-la-prise-en-charge-de-windows-10-le-14-octobre-2025-2ca8b313-1946-43d3-b55c-2b95b107f281'],
                ['valeur' => 'Septembre 2026', 'libelle' => 'Fin du support standard d\'Odoo 17.0, sorti en novembre 2023 ; celui d\'Odoo 16.0 a pris fin en septembre 2025', 'source' => 'Odoo, support standard et étendu des versions', 'url' => 'https://www.odoo.com/documentation/20.0/administration/standard_extended_support.html'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Versions hors support : pourquoi l'audit commence-t-il par les dates ?",
            'paragraphes' => [
                "Un logiciel qui ne reçoit plus de correctifs de sécurité ne casse pas du jour au lendemain ; il devient seulement de plus en plus facile à attaquer. Selon la <a href=\"https://www.php.net/supported-versions.php\">page des versions supportées de php.net</a>, PHP 8.2 ne reçoit plus que des correctifs de sécurité, jusqu'au 31 décembre 2026, et les branches 8.0 et 8.1 ne figurent plus parmi les versions suivies. Beaucoup de sites et d'applications construits il y a quelques années tournent encore sur ces versions, souvent sans que leur propriétaire le sache.",
                "Il en va de même pour les postes et les ERP. <a href=\"https://support.microsoft.com/fr-fr/windows/fin-de-la-prise-en-charge-de-windows-10-le-14-octobre-2025-2ca8b313-1946-43d3-b55c-2b95b107f281\">Microsoft</a> a cessé la prise en charge de Windows 10 le 14 octobre 2025, et la <a href=\"https://www.odoo.com/documentation/20.0/administration/standard_extended_support.html\">page de support des versions d'Odoo</a> indique la fin du support standard d'Odoo 17.0 en septembre 2026. Le rapport rassemble ces échéances dans un calendrier unique : pour chaque élément, la date à laquelle il cesse d'être suivi, le coût estimé d'une mise à niveau et ce qu'elle impose, par exemple le portage des modules spécifiques d'un ERP.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Données personnelles, mobile money, connexion, langue : que change le contexte local ?",
            'paragraphes' => [
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> donne à l'audit une partie de sa grille. Son article 426 impose au responsable du traitement et à son sous-traitant des mesures de sécurité appropriées, qui peuvent comprendre le chiffrement, des moyens de rétablir l'accès aux données après un incident et « une procédure visant à tester, à analyser et à évaluer régulièrement l'efficacité » de ces mesures. Un audit périodique répond précisément à ce dernier point. L'article 435 exige un registre des activités de traitement, et l'article 434 que les données restent exploitables quel que soit le support technique.",
                "Pour un projet nouveau, l'étude vérifie aussi l'article 428 de la même loi : un traitement susceptible d'engendrer un risque élevé pour les personnes, en particulier par le recours à de nouvelles technologies, exige une analyse d'impact avant sa mise en œuvre. En Europe, le <a href=\"https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4\">RGPD</a> prévoit la même logique à son article 35, la protection des données dès la conception à son article 25 et des mesures de sécurité à son article 32. La <a href=\"https://www.cnil.fr/fr/RGPD-analyse-impact-protection-des-donnees-aipd\">page de la CNIL sur l'analyse d'impact</a> détaille la méthode ; le cahier des charges l'inscrit au planning au lieu de la découvrir après le lancement.",
                "Le paiement mobile appelle une vérification précise. Sur un site ou une application qui encaisse par mobile money via un agrégateur, l'audit contrôle que la commande n'est validée qu'après la confirmation envoyée par l'agrégateur au serveur, et non sur la simple page de retour affichée au client, que n'importe qui peut ouvrir. Il vérifie aussi que les clés secrètes ne figurent pas dans le code envoyé au navigateur. Le choix de l'agrégateur lui-même est traité dans le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, Kkiapay et CinetPay</a>.",
                "La connexion et la langue complètent le tableau. Une application conçue sur la fibre d'un bureau européen peut devenir inutilisable sur un réseau mobile chargé ou pendant une coupure : l'étude fixe donc des exigences mesurables de poids des pages et de fonctionnement dégradé, et l'audit les mesure sur un téléphone ordinaire. Les livrables sont rédigés en français, en anglais si un partenaire ou un bailleur l'exige, et remis dans des formats légers, lisibles sur téléphone. La facturation suit les règles du pays : devis en francs CFA dans la zone franc, dans la devise convenue ailleurs.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier votre audit ou votre étude de projet à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Avec plus de 6 ans d'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, il a travaillé pour des organisations au Bénin, en Côte d'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il développe en Laravel, PHP, Node.js, Vue, React et Flask, déploie Odoo et Dolibarr, publie des sites WordPress et des applications Flutter, et automatise avec n8n et Make. Cette pratique de la réalisation est ce qui rend ses estimations réalistes : il sait ce que coûte réellement ce qu'il chiffre.",
                "Il construit aussi ses propres produits : <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Passer de l'autre côté, celui qui paie, maintient et dépend de ses outils, aide à juger un système existant avec les yeux de son propriétaire, et pas seulement avec ceux d'un technicien.",
                "Sa façon de travailler se vérifie sur des faits : une réponse sous 24 heures, un devis gratuit et écrit avant de commencer, des constats appuyés sur des preuves, un rapport qui dit franchement quand la bonne solution est plus simple ou moins chère que prévu, et des documents qui vous appartiennent. Vous restez libre de confier la réalisation à qui vous voulez, à lui ou à un autre prestataire. Son parcours complet figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays servis sur la page <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de commander un audit ou une étude de projet ?",
            'texte' => "Un audit utile s'appuie sur des preuves, pas sur des déclarations : inventaire, versions, accès, restauration réelle d'une sauvegarde et propriété de chaque compte. Une étude utile décrit des besoins vérifiables, découpés en lots chiffrés en fourchettes, avec leurs critères d'acceptation. Dans les deux cas, le document vous appartient et doit vous permettre de décider, puis de consulter qui vous voulez.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vous voulez savoir ce que vaut votre système, ou ce que coûtera votre projet ?",
            'texte'  => "Décrivez l'outil à auditer ou le projet envisagé, ce qui vous inquiète et l'échéance éventuelle : vous recevez une réponse sous 24 heures, puis, après un échange de cadrage, un devis gratuit avec le périmètre, les livrables et le calendrier.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un audit ou une étude'],
        ],
    ],

    'faq' => [
        ['q' => "Combien coûte un audit ou une étude de projet ?", 'r' => "La mission est chiffrée sur devis, gratuit et sans engagement, après un échange de cadrage. Le prix dépend du nombre d'outils et de serveurs audités, de la taille du code, du nombre de personnes à interroger, des formats imposés par un financeur et, pour une étude, du nombre d'écrans et d'interfaces. Le montant est connu avant de commencer."],
        ['q' => "Combien de temps dure la mission ?", 'r' => "Comptez de quelques jours pour l'audit d'un site ou d'une petite application à quelques semaines pour un parc d'outils, un ERP ou l'étude d'un projet important. Ce sont des ordres de grandeur : la durée exacte est fixée au cadrage, écrite dans le devis, et dépend surtout de la rapidité avec laquelle les accès et les documents sont fournis."],
        ['q' => "Suis-je obligé de vous confier la réalisation ensuite ?", 'r' => "Non. L'audit et l'étude sont des prestations indépendantes. Les documents vous appartiennent et le cahier des charges est rédigé pour être chiffré par n'importe quel prestataire. Vous êtes libre de confier la suite à votre équipe, à un autre prestataire ou à Richard SALANON, sur devis séparé."],
        ['q' => "Est-ce utile pour un petit projet ?", 'r' => "Oui, à une échelle adaptée. Pour un petit projet, l'étude tient en quelques pages : besoins priorisés, hors périmètre, critères d'acceptation et estimation. Ce cadrage léger suffit à éviter les malentendus qui coûtent cher en fin de projet, quand le prestataire et le client découvrent qu'ils n'imaginaient pas le même résultat."],
        ['q' => "Je suis pressé : pourquoi ne pas lancer directement le développement ?", 'r' => "Parce que quelques jours de cadrage évitent des semaines de développement dans la mauvaise direction. Un besoin non écrit se découvre pendant la réalisation, sous forme de modifications facturées et de retards. Si l'échéance est serrée, l'étude se concentre sur le premier lot, pour démarrer vite sur une base solide."],
        ['q' => "De quels accès avez-vous besoin, et que deviennent-ils ?", 'r' => "Le plus souvent, des comptes en lecture seule : administration du site ou de l'ERP, hébergement, dépôt de code, et la liste des abonnements. Ils sont créés pour la mission, utilisés uniquement pour elle et supprimés à la fin. Les essais qui pourraient modifier quelque chose se font sur une copie, jamais sur votre système en production."],
        ['q' => "L'audit comprend-il un test d'intrusion ?", 'r' => "Non. L'audit vérifie la configuration, le code, les versions, les accès et les sauvegardes, avec des essais non destructifs. Un test d'intrusion, qui simule une attaque réelle, est une prestation distincte confiée à un spécialiste. Quand l'audit révèle qu'il se justifie, par exemple pour une application qui manipule des paiements ou des données de santé, le rapport le recommande."],
        ['q' => "Quelle différence avec un audit SEO ?", 'r' => "L'audit décrit ici porte sur la solidité technique, la sécurité, les coûts et la propriété de vos outils. L'analyse de votre visibilité sur Google, de l'indexation des pages et de leur contenu fait l'objet d'une prestation distincte, l'audit SEO complet, décrite sur sa propre page."],
        ['q' => "Quelle différence avec la mission de consultant en digitalisation ?", 'r' => "Le consultant aide à choisir quels chantiers numériques lancer dans toute l'organisation, dans quel ordre et avec quel budget. L'audit et l'étude de projet portent sur un objet précis : un système existant à examiner, ou un projet identifié à cadrer, chiffrer et découper avant sa réalisation."],
        ['q' => "Pouvez-vous auditer le travail d'un autre prestataire ?", 'r' => "Oui, c'est même l'un des cas les plus fréquents : reprise d'un projet après le départ d'une agence, doute sur la qualité d'une livraison, devis de refonte à vérifier. L'audit s'en tient aux faits constatés, sans jugement sur les personnes, et le rapport peut être transmis au prestataire concerné pour qu'il réponde point par point."],
        ['q' => "Le cahier des charges peut-il servir pour un appel d'offres ?", 'r' => "Oui. Il peut être rédigé au format exigé par un bailleur, une banque ou une procédure de marché public, avec des critères d'évaluation technique et une grille de notation. La procédure elle-même reste conduite par votre organisation, et Richard SALANON ne participe pas à l'évaluation des offres s'il est candidat à la réalisation."],
        ['q' => "Intervenez-vous hors du Bénin ?", 'r' => "Oui. Richard SALANON a travaillé dans dix pays d'Afrique francophone ainsi qu'en France, en Belgique, en Suisse et au Canada. Les entretiens se tiennent sur place à Cotonou, ou en visioconférence, par téléphone ou par WhatsApp ailleurs, et l'analyse technique se fait à distance. Les clients hors d'Afrique règlent par carte bancaire, PayPal ou virement."],
    ],

    'sources' => [
        ['titre' => 'ANSSI, guide d\'hygiène informatique (42 mesures, publié le 23 janvier 2017)', 'url' => 'https://messervices.cyber.gouv.fr/guides/guide-dhygiene-informatique', 'date' => '2026-10-04'],
        ['titre' => 'Direction générale des Entreprises et ANSSI, « La cybersécurité pour les TPE/PME en 13 questions » (2e édition, octobre 2022)', 'url' => 'https://www.entreprises.gouv.fr/la-dge/publications/la-cybersecurite-pour-les-tpepme-en-13-questions', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, guide de la sécurité des données personnelles, nouvelle édition 2024', 'url' => 'https://www.cnil.fr/fr/guide-de-la-securite-des-donnees-personnelles-nouvelle-edition-2024', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, guide RGPD du développeur', 'url' => 'https://www.cnil.fr/fr/guide-rgpd-du-developpeur', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD chapitre IV (articles 25, 28, 32, 33 et 35)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, analyse d\'impact relative à la protection des données (AIPD)', 'url' => 'https://www.cnil.fr/fr/RGPD-analyse-impact-protection-des-donnees-aipd', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 426, 427, 428, 434 et 435)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'OWASP, Top 10:2025', 'url' => 'https://top10.owasp.org/2025', 'date' => '2026-10-04'],
        ['titre' => 'OWASP, Application Security Verification Standard (ASVS)', 'url' => 'https://owasp.org/www-project-application-security-verification-standard/', 'date' => '2026-10-04'],
        ['titre' => 'php.net, versions de PHP supportées', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-04'],
        ['titre' => 'Microsoft, fin de la prise en charge de Windows 10 le 14 octobre 2025', 'url' => 'https://support.microsoft.com/fr-fr/windows/fin-de-la-prise-en-charge-de-windows-10-le-14-octobre-2025-2ca8b313-1946-43d3-b55c-2b95b107f281', 'date' => '2026-10-04'],
        ['titre' => 'Odoo, support standard et étendu des versions', 'url' => 'https://www.odoo.com/documentation/20.0/administration/standard_extended_support.html', 'date' => '2026-10-04'],
        ['titre' => 'Cybermalveillance.gouv.fr, « Pourquoi et comment bien gérer ses sauvegardes ? » (mise à jour du 14 septembre 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes', 'date' => '2026-10-04'],
        ['titre' => 'Légifrance, Code de la propriété intellectuelle, article L113-9 (logiciels créés par des employés)', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278890', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['consultant-digitalisation', 'digitalisation-d-entreprise', 'application-web-sur-mesure', 'refonte-migration-de-site', 'maintenance-support', 'audit-seo-complet'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
