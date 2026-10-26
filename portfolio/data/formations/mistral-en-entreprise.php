<?php
// ============================================================
// data/formations/mistral-en-entreprise.php · Fiche formation « Mistral en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : Mistral AI, son assistant (Le Chat,
// rebaptisé Vibe le 12/08/2026), modèles ouverts, hébergement des données
// dans l’Union européenne par défaut, RGPD, usages en
// français, Skills, connecteurs, bibliothèques, comparaison honnête, limites.
// Nationalité de l’éditeur non confirmée par une source lue : jamais affirmée.
// Faits externes relevés le 26/10/2026 : centre d’aide et documentation de
// Mistral, Commission européenne (protection des données, article 4 du
// règlement sur l’IA), UIT, loi béninoise n° 2017-20. Aucun prix d’éditeur ni
// limite chiffrée d’abonnement. Richard enseigne Mistral (fait donné par lui) ;
// rien d’autre sur sa pratique. Aucune certification ni partenariat attribué.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Mistral en entreprise : vos équipes apprennent à travailler en français avec l’assistant de Mistral AI (Le Chat, devenu Vibe), à maîtriser l’hébergement de leurs données et à bâtir leurs premiers agents',
    'title'   => 'Formation Mistral IA en entreprise | Richard SALANON',
    'meta'    => 'Formation Mistral pour vos équipes : Le Chat devenu Vibe, documents en français, Skills, hébergement européen des données et RGPD. Sur devis.',
    'en_bref' => 'Mistral AI est un éditeur d’IA dont l’assistant, Le Chat, s’appelle désormais Vibe. Ce parcours s’adresse aux équipes de bureau qui veulent s’en servir en français sur leurs vrais dossiers, comprendre où vont leurs données, créer des Skills réutilisables et poser des règles compatibles avec le RGPD. Comptez deux jours répartis en quatre demi-journées, ou une demi-journée d’atelier pour une première prise de contact. Il peut être donné chez vous, à distance ou en formule hybride, pour une seule entreprise ou pour plusieurs. Le prix est fixé sur devis.',
    'publie'  => '2026-11-13',
    'maj'     => '2026-11-13',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : prendre en main l’assistant de Mistral, ses modes, et fixer les règles sur les données',
            'duree'  => '3 h 30',
            'points' => [
                'S’orienter dans l’interface : Le Chat est devenu Vibe le 12 août 2026, avec les modes Work, Chat et Code ; comprendre pourquoi les équipes non techniques travaillent dans Work.',
                'Situer Mistral AI : un éditeur qui publie des modèles ouverts et propose un assistant et une interface pour développeurs, avec des conséquences différentes pour l’entreprise.',
                'Trier les dossiers du service en trois piles : à confier tels quels, à anonymiser d’abord, à garder hors de tout outil en ligne.',
                'Ouvrir les réglages de données du compte : entraînement des modèles, Mémoires, export et suppression des données.',
                'Exercice d’ouverture : interroger l’assistant sur une pièce réelle du service et confronter chaque phrase de la réponse au texte d’origine.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : rédiger et reformuler en français professionnel',
            'duree'  => '3 h 30',
            'points' => [
                'Construire une demande en quatre temps : qui parle, dans quel contexte, pour faire quoi, sous quelle forme.',
                'Produire courriels, offres, notes de service et comptes rendus au registre de la maison, à partir d’un modèle déjà approuvé.',
                'Réécrire un même message pour trois lecteurs : un client, un partenaire institutionnel, un collègue.',
                'Traduire un texte du français vers l’anglais en gardant le vocabulaire du métier, puis chasser les calques et les faux amis.',
                'Grille de contrôle avant envoi : faits, chiffres, noms propres, dates, engagements pris pour le compte de l’entreprise.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : documents longs, bibliothèques et recherche approfondie',
            'duree'  => '3 h 30',
            'points' => [
                'Téléverser PDF, tableurs et présentations pour obtenir résumés, extraits et comparaisons qui indiquent leur source.',
                'Utiliser une bibliothèque, c’est-à-dire une collection de documents déjà téléversés et indexés, pour interroger un corpus stable (procédures, catalogue, contrats types).',
                'Lancer une recherche approfondie sur le web et dans les documents, puis contrôler chaque affirmation et chaque lien cité.',
                'Tirer une analyse d’un export de tableur : totaux, tris, écarts, puis vérification manuelle d’un résultat.',
                'Ranger le travail par projet : une équipe, un client ou un sujet chacun.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : Skills, connecteurs, sécurité et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Créer une Skill : un dossier d’instructions réutilisable que l’assistant applique quand la tâche correspond, personnelle ou partagée avec l’espace de travail.',
                'Activer un seul connecteur (messagerie, agenda ou stockage de fichiers) après avoir lu les droits qu’il demande, et reconnaître les actions sensibles soumises à approbation.',
                'Programmer une tâche récurrente simple et désigner la personne qui en relit le résultat.',
                'Épreuve finale : chacun mène seul sa tâche cible jusqu’au bout, contrôle compris, chronomètre en main.',
                'Calendrier d’usage sur un mois et règles d’équipe consignées par écrit.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d’une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes administratives, commerciales, RH, finances et direction, sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quels gestes maîtriserez-vous sur Mistral en sortant, et qu’est-ce qui reste hors parcours ?',
            'paragraphes' => [
                'Dans de nombreux bureaux, Mistral AI est « l’IA européenne », et la réflexion s’arrête là. On ignore alors ce que cela change concrètement : où partent leurs documents, quels réglages protègent les données, ce que l’assistant fait bien en français et ce qu’il fait moins bien qu’un concurrent. Le parcours prend deux ou trois travaux hebdomadaires de chacun, les rejoue dans l’assistant de Mistral et y ajoute ce qui distingue cet éditeur : des modèles ouverts, des données hébergées dans l’Union européenne par défaut et des réglages à connaître.',
                'Au terme du parcours, chaque participant maîtrise des gestes précis, vérifiés le dernier matin. Il écrit une demande qui reste stable d’une semaine à l’autre. Il obtient un courrier au registre de sa maison, résume un rapport en gardant les numéros de page, contrôle un total calculé par l’outil. Il bâtit une Skill pour une tâche qu’il répète, lit les droits demandés par un connecteur avant de l’activer, et sait ouvrir les réglages de confidentialité pour dire ce que son compte autorise, en s’appuyant sur ce qui est réellement coché.',
                'Hors champ : la programmation. Le mode Code de Mistral vise les développeurs ; pour bâtir une application avec un assistant de code, direction la formation <a href="/formations/vibecoding">vibecoding</a>. Les réflexes valables pour n’importe quel assistant sont traités, avec plusieurs outils à la fois, dans la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>, et le détail des obligations légales dans <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Ici, on reste sur un seul éditeur : ses modes, ses réglages de confidentialité et ses modèles ouverts.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Le Chat de Mistral existe-t-il encore, ou s’appelle-t-il maintenant Vibe ?',
            'paragraphes' => [
                'C’est la première question des participants, parce que les articles, les vidéos et les anciens supports parlent tous du « Chat ». Selon le centre d’aide de Mistral, un article daté du 12 août 2026 annonce que Le Chat est devenu Vibe, l’agent unifié de l’éditeur pour la productivité et le code. Les comptes, les formules, les conversations et les contenus enregistrés sont conservés, et la même adresse et le même identifiant de connexion continuent de fonctionner.',
                'Vibe se présente en trois modes, d’après le même article. Work sert à déléguer des tâches en plusieurs étapes depuis le web ou le mobile. Chat reste l’échange conversationnel classique. Code s’adresse aux développeurs, par ligne de commande, extension d’éditeur ou web. La documentation précise que Chat et Work ont depuis été fusionnés en une seule expérience, et que les anciens agents ont été remplacés par des Skills. La formation emploie donc les noms actuels, mais elle montre à chaque participant la correspondance avec les anciens intitulés, pour qu’il s’y retrouve dans les supports plus anciens.',
                'Un conseil de méthode découle de ce changement de nom : les noms de fonctions et les écrans évoluent vite chez tous les éditeurs, et chez Mistral en particulier. Ce qui s’apprend durablement, c’est la façon de décrire une tâche, de contrôler un résultat et de régler les données. La bibliothèque de consignes de l’équipe est donc rédigée en fonction des tâches, jamais des intitulés de menu.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut suivre ce parcours Mistral, et que faut-il prévoir côté matériel ?',
            'intro' => 'Il est pensé pour les personnes dont le quotidien se passe dans des textes, des tableaux et des dossiers, ainsi que pour les directions soucieuses de la souveraineté de leurs données.',
            'items' => [
                ['titre' => 'Qui vient', 'texte' => 'Secrétariats et assistants de direction, vendeurs, service client, gestionnaires de paie ou de recrutement, comptables, juristes, chargés de communication, et responsables informatiques qui veulent comprendre les réglages avant de déployer. Rien de technique n’est exigé : l’assistant se pilote par écrit, en français.'],
                ['titre' => 'Le point de départ', 'texte' => 'Avant la session, un court questionnaire sépare les débutants complets, les autodidactes et les habitués d’un autre assistant, afin de former des groupes de même niveau.'],
                ['titre' => 'Ce qu’il faut apporter', 'texte' => 'Un ordinateur, un navigateur à jour, une connexion stable, et un compte Mistral : celui que l’entreprise possède déjà, ou un compte gratuit ouvert en début de séance. Le choix d’une formule payante vient après.'],
                ['titre' => 'Les dossiers de travail', 'texte' => 'Chacun apporte deux ou trois pièces réelles (un rapport, un fil de courriels, un tableau), marquées selon leur degré de confidentialité. Celles qui sont sensibles sont anonymisées en amont, avec le formateur si besoin.'],
                ['titre' => 'Le nombre de participants', 'texte' => 'Le groupe compte 10 personnes au plus pour la formation complète et 12 pour l’atelier découverte : le formateur doit pouvoir lire le travail de chacun.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Comment les deux jours sur Mistral s’enchaînent-ils ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices chaque métier fait-il avec Mistral sur ses propres documents ?',
            'legende' => 'Exercices montés avec l’entreprise lors de la préparation, à partir de ses pièces. La dernière colonne indique le réflexe de contrôle que le participant doit acquérir.',
            'entetes' => ['Métier', 'Pièce de départ', 'Production demandée à l’assistant', 'Contrôle à faire soi-même'],
            'lignes'  => [
                ['Secrétariat de direction', 'Notes brutes d’un conseil, planning de la semaine', 'Procès-verbal, liste d’actions avec responsables, message de diffusion', 'Pas de décision inventée ni oubliée ; noms et dates conformes aux notes'],
                ['Relation client', 'Une vingtaine de demandes arrivées par WhatsApp ou courriel', 'Réponses au ton de la maison, tri par motif de contact', 'Tarifs, délais et conditions cités ; engagements pris au nom de la société'],
                ['Vente', 'Fiche prospect, offre standard, dernier échange', 'Message de relance sur mesure, offre annotée, version en anglais', 'Remises accordées, références citées, informations commerciales sensibles'],
                ['Recrutement', 'Fiche de poste, notes d’entretien rendues anonymes', 'Annonce, trame d’entretien, synthèse neutre', 'Formules discriminantes ; données personnelles oubliées dans le texte'],
                ['Gestion financière', 'Export du tableur des dépenses du trimestre', 'Totaux par ligne, écarts, graphique, commentaire', 'Deux totaux recalculés ; période et devise'],
                ['Service juridique', 'Contrat type, avenant, procédure interne', 'Tableau des clauses, relevé des différences entre deux versions', 'Chaque clause retrouvée dans le texte ; aucune interprétation prise pour un avis de droit'],
                ['Pilotage de projet', 'Rapport d’activité de quarante pages, cadre logique', 'Résumé destiné au financeur avec pages citées, tableau d’indicateurs', 'Chaque chiffre repéré dans le rapport source'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le fait que Mistral AI publie des modèles ouverts et héberge les données dans l’Union européenne ?',
            'paragraphes' => [
                'Pour une équipe, trois choses concrètes. La première touche à la localisation des données : d’après le centre d’aide de Mistral, les données sont hébergées dans l’Union européenne par défaut, et l’utilisateur peut choisir explicitement le point d’accès américain de l’API, auquel cas elles sont hébergées aux États-Unis. La deuxième touche à la nature des modèles : certains sont publiés sous forme de poids ouverts, que l’on peut télécharger et faire tourner soi-même, ce qui ouvre des scénarios impossibles avec un modèle fermé. La troisième touche à la langue : la qualité du français se teste sur vos propres textes plutôt qu’elle ne se présume.',
                'Il faut pourtant éviter l’argument « européen donc conforme ». Un hébergement européen par défaut ne dispense ni de classer les documents, ni de lire les conditions d’utilisation, ni de rédiger une règle interne. Le centre d’aide précise lui-même que, selon la fonction utilisée, des données peuvent être transférées temporairement hors de l’Union vers les lieux listés dans l’onglet des sous-traitants de son centre de confiance. La formation apprend donc à lire cette liste, à demander la configuration adaptée à l’entreprise et à garder des traces des choix faits.',
                'Un modèle à poids ouverts ne se confond pas non plus avec un modèle sans conditions. Selon le centre d’aide, la plupart des modèles ouverts de Mistral sont publiés sous licence Apache 2.0. D’autres relèvent d’une licence MIT modifiée : les entreprises dont le chiffre d’affaires mensuel dépasse 20 millions de dollars doivent alors obtenir une licence commerciale ou passer par la plateforme de l’éditeur. Les termes complets se lisent dans la fiche de chaque modèle, et un service juridique doit les lire avant tout déploiement interne.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quels modèles Mistral voit-on pendant la formation ?',
            'legende' => 'Éléments relevés dans la documentation et le centre d’aide de Mistral le 26 octobre 2026. Les noms de produits évoluent : vérifiez les pages officielles. Aucun prix n’est repris ici ; les formules et les limites évoluent, et la page officielle de l’éditeur fait foi.',
            'entetes' => ['Élément', 'Ce que c’est', 'Ce que la formation en fait', 'Qui est concerné'],
            'lignes'  => [
                ['Vibe Work', 'Mode d’échange et de délégation de tâches en plusieurs étapes, sur le web et le mobile', 'Terrain principal : rédaction, documents, recherche, tâches programmées', 'Toute l’équipe'],
                ['Vibe Chat', 'Mode de conversation classique, par échanges successifs', 'Comparé à Work pour choisir le bon mode selon la tâche', 'Toute l’équipe'],
                ['Skills', 'Dossiers d’instructions réutilisables, personnels ou partagés avec l’espace de travail ; ils ont remplacé les anciens agents', 'Création d’une Skill par tâche récurrente, avec exemple et règle de relecture', 'Équipes et référents'],
                ['Connecteurs', 'Liens vers la messagerie, l’agenda, Slack, Notion, GitHub, Google Drive ou SharePoint', 'Un connecteur à la fois, droits lus avant activation', 'Référents et administrateurs'],
                ['Bibliothèques', 'Collections de documents déjà téléversées et indexées', 'Interroger un corpus stable avec renvoi à la source', 'Équipes documentaires'],
                ['Vibe Code', 'Mode pour développeurs, en ligne de commande, extension VS Code ou web', 'Hors programme : renvoi vers la formation vibecoding', 'Développeurs'],
                ['Studio et API', 'Console et interface de programmation pour développeurs et intégrations', 'Présentés comme la porte d’entrée d’un futur projet d’intégration, sans les pratiquer', 'Services informatiques'],
                ['Modèles ouverts', 'Modèles dont les poids sont publiés, sous licence Apache 2.0 pour la plupart', 'Comprendre ce que « ouvert » permet et ce qu’il suppose en équipe technique', 'Directions et services informatiques'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels réglages de données vérifier avant le premier exercice ?',
            'intro' => 'Le centre d’aide de Mistral consacre toute une collection à la gouvernance des données. La formation en tire une liste de contrôle, à parcourir compte par compte avec le référent de l’entreprise.',
            'items' => [
                ['titre' => 'L’entraînement des modèles', 'texte' => 'Selon le centre d’aide, les comptes individuels ne sont pas exclus de l’entraînement par défaut, tandis que les clients Enterprise le sont. Pour les formules d’équipe, les administrateurs peuvent la désactiver pour toute l’organisation ; on vérifie donc le réglage dans le compte lui-même. La désactivation se fait dans le panneau d’administration, section confidentialité, ou dans les réglages de l’application mobile.'],
                ['titre' => 'Deux interrupteurs distincts', 'texte' => 'Le centre d’aide précise que les réglages de l’assistant et ceux de l’API sont séparés : désactiver l’un ne désactive pas l’autre. Une entreprise qui utilise les deux doit donc faire deux vérifications, et noter la date de chacune.'],
                ['titre' => 'Les documents classés « jamais »', 'texte' => 'Quel que soit le réglage, un document classé « jamais » n’entre dans aucun outil en ligne. Les essais sur des textes sensibles se font sur des copies anonymisées, et le réglage retenu est noté avec sa date.'],
                ['titre' => 'Les Mémoires', 'texte' => 'Fonction facultative, en version bêta d’après le centre d’aide, qui retient des préférences d’une conversation à l’autre. Désactiver la fonction ne supprime pas les mémoires existantes : il faut d’abord les effacer. Si l’entraînement n’est pas désactivé, elles peuvent servir à entraîner les modèles. La formation apprend à les relire et à décider si elles ont leur place dans un compte professionnel.'],
                ['titre' => 'La rétention zéro des données', 'texte' => 'Elle existe pour certains accès de l’API des clients en paiement à l’usage, sur demande examinée par l’éditeur, mais le centre d’aide précise qu’elle n’est pas disponible pour Vibe Work ou Chat, quelle que soit la formule. Une direction qui compte sur elle pour l’assistant se trompe : on le lui explique avant l’achat.'],
                ['titre' => 'L’export et la suppression', 'texte' => 'Le centre d’aide décrit comment exporter ses données, supprimer une conversation ou supprimer un compte. La formation fait faire ces trois gestes une fois, sur un compte d’essai, pour que personne ne les découvre le jour d’un départ de salarié.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Mistral se compare-t-il aux autres assistants, sans dénigrer personne ?',
            'paragraphes' => [
                'La formation ne prétend pas que Mistral est le meilleur outil pour tout le monde, ni qu’il est inférieur aux autres. Elle donne aux participants une grille de comparaison fondée sur leurs propres documents. Chaque assistant a ses forces, ses limites d’utilisation, ses conditions sur les données, et ces éléments changent d’un trimestre à l’autre. Les chiffres de prix ne figurent donc pas ici : les formules et limites évoluent, et la page officielle de l’éditeur fait foi.',
                'Le test le plus utile est simple. Chaque participant soumet la même demande, sur le même document, à l’assistant de Mistral et à celui qu’il utilise déjà, puis note dans un tableau le fond, la forme, la qualité du français, les erreurs repérées et le temps passé à corriger. Le comparatif <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">ChatGPT, Claude ou Gemini</a> apporte le point de vue général pour trois autres assistants ; la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a> explique la méthode commune. Beaucoup d’équipes finissent par en utiliser deux, pour des tâches différentes.',
            ],
        ],
        [
            'type'       => 'comparaison',
            'titre'      => 'Dans quels cas choisir Mistral, un autre assistant, ou les deux ?',
            'options'    => ['Mistral (Vibe)', 'Un autre assistant généraliste', 'Les deux en parallèle'],
            'criteres'   => [
                ['critere' => 'Localisation des données', 'valeurs' => ['Hébergement dans l’Union européenne par défaut, point d’accès américain en option, transferts ponctuels listés dans le centre de confiance', 'À lire dans la documentation de chaque éditeur, offre par offre', 'Chaque outil réservé aux données qu’il peut recevoir']],
                ['critere' => 'Modèles ouverts et installation interne', 'valeurs' => ['Poids ouverts pour plusieurs modèles, licence à lire', 'Le plus souvent modèles fermés, accessibles seulement par le service', 'Mistral pour les projets internes, l’autre pour l’usage courant']],
                ['critere' => 'Outils déjà installés dans l’entreprise', 'valeurs' => ['Connecteurs vers messagerie, agenda, stockage, collaboration', 'Intégration native si l’entreprise est déjà chez cet éditeur', 'Chacun reste dans son environnement habituel']],
                ['critere' => 'Qualité du français sur vos textes', 'valeurs' => ['À mesurer sur vos documents, pas à présumer', 'À mesurer de la même façon', 'Le test croisé de la formation tranche']],
            ],
            'verdict'    => 'Il n’existe pas de choix universel. La formation conduit un test sur des documents réels, note ce que chaque assistant fait bien, et laisse la direction décider avec des constats plutôt qu’avec des impressions. Les deux outils en parallèle ne conviennent que si une règle écrite précise quel type de document va dans lequel.',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment écrire une Skill et activer un connecteur en limitant les accès ?',
            'items' => [
                ['titre' => 'Choisir une tâche récurrente', 'texte' => 'Compte rendu de réunion, réponse type à un client, synthèse d’un rapport mensuel. Une Skill par tâche, pas une Skill qui prétend tout faire.', 'duree' => '20 min'],
                ['titre' => 'Rédiger la Skill', 'texte' => 'Selon la documentation, une Skill est un dossier avec un fichier d’instructions, un titre, une description, et éventuellement des fichiers de référence ou des exemples. La description décide du moment où elle s’active : elle décrit donc les situations visées, pas le résultat espéré.', 'duree' => '40 min'],
                ['titre' => 'Choisir sa portée', 'texte' => 'Une Skill est personnelle ou partagée avec l’espace de travail. Les administrateurs peuvent en imposer certaines. Les participants décident qui peut modifier une Skill partagée, puisque ses instructions s’appliquent à tous.', 'duree' => '20 min'],
                ['titre' => 'Lire les droits d’un connecteur', 'texte' => 'La documentation cite la messagerie, l’agenda, Slack, Notion, GitHub, Google Drive et SharePoint. Avant d’activer l’un d’eux, on lit ce qu’il permet : consulter, mais aussi écrire ou supprimer.', 'duree' => '30 min'],
                ['titre' => 'Repérer les approbations', 'texte' => 'D’après la documentation, l’assistant demande une confirmation avant les actions sensibles : envoyer un courriel, publier un message, créer un événement, supprimer un élément, modifier des données dans un outil externe. On exerce ce réflexe et on décide qui valide.', 'duree' => '30 min'],
                ['titre' => 'Écrire la règle de relecture', 'texte' => 'Une action de la Skill qui part chez un client ou un partenaire, ou qui efface ou change une donnée, exige l’accord d’une personne. Le nom du validateur figure dans la fiche de la tâche.', 'duree' => '20 min'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment écrire une consigne que l’assistant suit de façon constante ?',
            'intro' => 'Un bon résultat dépend moins de l’assistant que de la clarté de la demande. La méthode enseignée tient en quelques gestes que tout le monde peut répéter.',
            'items' => [
                ['titre' => 'Dire qui lit et pourquoi', 'texte' => 'Le lecteur, l’objectif et l’usage du résultat. « Une note de deux pages pour le directeur général, qui décide demain » oriente mieux que « un résumé ».'],
                ['titre' => 'Donner un exemple réel', 'texte' => 'Joindre un courriel que la maison trouve réussi explique mieux le ton attendu que de longues consignes ; on indique ensuite ce que l’assistant doit en retenir.'],
                ['titre' => 'Décomposer', 'texte' => 'Le centre d’aide de Mistral recommande lui-même une demande simple, riche en contexte, et les tâches complexes découpées en étapes. Un exercice du parcours met ce conseil en pratique.'],
                ['titre' => 'Fixer la forme', 'texte' => 'Tableau, liste, trois phrases, ton formel : tout ce qui n’est pas précisé change d’un essai à l’autre. La précision va donc une fois pour toutes dans la Skill.'],
                ['titre' => 'Retoucher plutôt que recommencer', 'texte' => 'Mieux vaut amender un seul point à la fois, puis ranger la version qui fonctionne dans la bibliothèque de l’équipe, signée de son auteur et datée.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quel est le déroulé concret : préparation, pratique, supports remis et suivi ?',
            'intro' => 'Le travail porte sur les pièces et les comptes de votre équipe, jamais sur des exemples de démonstration.',
            'items' => [
                ['titre' => 'Avant la session', 'texte' => 'Un ou deux échanges préalables arrêtent les tâches visées, les outils déjà là, les règles sur les données et le format. Ils peuvent déboucher sur la recommandation d’un atelier plus court.'],
                ['titre' => 'Pendant la session', 'texte' => 'On manipule la plupart du temps. Chaque exercice individuel est précédé d’une courte démonstration sur un cas du service, puis relu en binôme.'],
                ['titre' => 'Ce que vous gardez', 'texte' => 'Le programme, les supports projetés, une bibliothèque de consignes classée par métier, les Skills écrites en séance, la liste de contrôle des réglages de données et la charte de l’équipe.'],
                ['titre' => 'Comment on valide', 'texte' => 'Chaque participant est évalué seul, sur sa tâche cible. Il reçoit une attestation nominative de fin de formation, qui n’est ni un diplôme ni une certification de Mistral AI.'],
                ['titre' => 'Après la session', 'texte' => 'Pendant le mois qui suit, vos questions sur l’usage de Mistral passent par un canal direct, sans supplément. Un accompagnement mensuel s’ajoute sur devis si vous le souhaitez.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Dans quels contextes professionnels et dans quels pays Mistral trouve-t-il son usage ?',
            'items' => [
                ['secteur' => 'Cabinet comptable ou juridique, en France, en Belgique ou en Suisse', 'probleme' => 'Les dossiers sont longs, le secret professionnel s’applique et les clients attendent des garanties sur la localisation des données.', 'solution' => 'Pièces rangées en trois familles, contrôle de l’entraînement des modèles et de la localisation avant le moindre dépôt, puis synthèses de dossiers qui citent leurs pages. Tout courrier destiné à un client reste signé par le professionnel, qui l’a relu.'],
                ['secteur' => 'Collectivité ou organisme public francophone', 'probleme' => 'La direction veut un assistant dont les conditions sur les données sont lisibles, mais les agents n’ont aucune règle commune.', 'solution' => 'Charte courte construite pendant la session : données autorisées, outils autorisés, personne qui valide. Les agents exercent la rédaction de courriers normés à partir de modèles validés, sans aucune donnée d’usager.'],
                ['secteur' => 'Boutiques et grossistes, à Cotonou, Lomé ou Abidjan', 'probleme' => 'Les bons de commande défilent dans WhatsApp sans ordre, les descriptifs de produits restent à moitié remplis et les rappels d’impayés se font le vendredi, quand on y pense.', 'solution' => 'Les vendeurs font convertir les messages en tableau de commandes, compléter les descriptifs d’après un gabarit, et écrire les rappels de paiement grâce à une Skill qui porte le ton de la maison et les échéances. Un responsable valide chaque envoi.'],
                ['secteur' => 'Associations et projets sous financement, en Afrique de l’Ouest et du Centre', 'probleme' => 'Rédiger les comptes rendus destinés aux bailleurs mobilise des journées entières, et les dossiers de bénéficiaires renferment des informations sensibles.', 'solution' => 'Chaque bailleur a sa Skill, avec son canevas et son vocabulaire. L’assistant propose une première version à partir de notes sans noms, puis l’équipe confronte chaque indicateur au cadre logique.'],
                ['secteur' => 'Direction informatique d’une PME ou d’une banque, à Dakar, Douala ou Paris', 'probleme' => 'Le service veut savoir si des modèles ouverts, faits tourner en interne, répondraient à une exigence de confidentialité que les services en ligne ne satisfont pas.', 'solution' => 'Une demi-journée de cadrage sépare ce qui relève de l’usage quotidien de ce qui relève d’un projet technique. Le besoin éventuel d’un modèle hébergé en interne est orienté vers une mission d’intégration, avec lecture des licences par le service juridique.'],
                ['secteur' => 'Établissements scolaires, dispensaires et cliniques', 'probleme' => 'Convocations, supports et lettres occupent le personnel, qui traite en parallèle des informations sur des élèves ou des patients.', 'solution' => 'Mistral aide pour les supports de cours, les lettres types et la réécriture de consignes, toujours sur des cas inventés. Aucune fiche nominative n’est déposée, et le référent vérifie les paramètres de confidentialité du compte.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formule choisir pour Mistral : atelier, parcours complet, distance, hybride ou suivi ?',
            'legende' => 'Rien n’interdit d’enchaîner : atelier d’abord, parcours complet ensuite pour un service pilote, puis suivi mensuel si l’équipe veut consolider.',
            'entetes' => ['Formule', 'Temps prévu', 'Effectif maximal', 'Pour qui'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', 'Jusqu’à 12 personnes', 'Équipe novice sur l’assistant de Mistral, ou direction qui souhaite constater avant de s’engager'],
                ['Parcours complet, intra', 'Deux jours en quatre demi-journées', 'Jusqu’à 10 personnes, regroupées par métier', 'Pratique déjà lancée sans méthode, ou exigences sur les données qui demandent un vrai réglage compte par compte'],
                ['Session inter-entreprises', 'Un à deux jours', 'Des structures issues d’un même réseau', 'Un ou deux envoyés par organisation, qui travaillent sur des documents publics ou inventés'],
                ['À distance', 'Cinq à six séances de 2 h 30', 'Jusqu’à 8 personnes', 'Collaborateurs dispersés entre sites ou pays ; un plan B existe si la connexion saute'],
                ['Hybride', 'Un jour sur place, des séances en ligne ensuite', 'Jusqu’à 10 personnes', 'Démarrage en salle, puis entraînement à distance sur les tâches cibles'],
                ['Accompagnement mensuel', 'Trois demi-journées, une chaque mois', 'Les personnes déjà formées', 'Élargir à de nouvelles tâches et fixer les habitudes acquises'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel budget prévoir pour former l’équipe à Mistral, et quels modes de paiement ?',
            'intro'      => 'Aucun tarif n’est affiché : un devis détaillé, poste par poste, suit l’entretien de cadrage. Le règlement passe par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. L’abonnement à Mistral reste à la charge de l’entreprise, à son nom, hors du prix de la formation ; formules et limites bougent, la page officielle de l’éditeur fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée de manipulation de vos pièces dans Vibe', 'Deux tâches abordées pour les premiers gestes', 'Liste de contrôle des paramètres de confidentialité', 'Conseil sur la suite à donner']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées de pratique', 'Exercices tirés de vos propres pièces', 'Skills écrites en séance, connecteurs et bibliothèque de consignes', 'Mise en situation finale individuelle et attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Trois rendez-vous d’une demi-journée, un par mois', 'Relevé de ce qui est vraiment utilisé', 'Tâches nouvelles et correctifs sur les Skills', 'Synthèse écrite au troisième mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'La formule choisie et son nombre de demi-journées.',
                'La préparation des exercices à partir de vos pièces, anonymisation comprise.',
                'L’endroit : chez vous, dans une salle louée, ou hors de Cotonou et du Bénin.',
                'Le mode, en salle, à distance ou mixte.',
                'Le suivi mensuel, une fois la session terminée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il financer ce parcours Mistral ?',
            'paragraphes' => [
                'Tout dépend du dispositif et de votre situation ; rien n’est garanti d’avance. Les fonds de formation continue (FDFP en Côte d’Ivoire, 3FPT au Sénégal, FODEFCA au Bénin, opérateurs de compétences en France) fixent chacun leurs conditions, notamment sur le statut de l’organisme de formation et sur les actions éligibles.',
                'Premier réflexe : interroger le fonds sur ses exigences envers un prestataire, puis les confronter à ce que Richard SALANON est en mesure de présenter. Aucune certification ni aucun agrément reconnu par ces fonds n’est affiché de sa part. À l’entreprise de demander une réponse écrite, programme et devis joints, et de chiffrer son budget comme si l’aide n’existait pas lorsque la décision en dépend.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui est responsable de ce que l’assistant a écrit ?',
            'texte' => 'Toujours l’entreprise, et la personne qui envoie. Le centre d’aide de Mistral prévient lui-même que l’assistant peut donner des réponses ou des faits inexacts, que ses connaissances sur l’actualité sont limitées et qu’il peut produire des contenus biaisés. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu’une entreprise répond de ce que dit son assistant. La formation fait de la relecture un geste obligatoire : chiffres, noms, engagements, références.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels travers guettent les équipes Mistral quelques semaines plus tard, et quelles parades prévoir ?',
            'intro' => 'Le vrai test arrive environ un mois après : que reste-t-il des habitudes ? Voici les glissements les plus fréquents, que la session désamorce à l’avance.',
            'items' => [
                ['titre' => 'Croire que « européen » veut dire « sans risque »', 'texte' => 'L’hébergement par défaut dans l’Union ne remplace ni le classement des documents ni la lecture des sous-traitants. La parade est la liste de contrôle des réglages et la règle écrite.'],
                ['titre' => 'Laisser un compte personnel faire le travail de l’entreprise', 'texte' => 'Un compte individuel n’a pas les contrôles d’une formule d’équipe et part avec le salarié. L’entreprise ouvre des comptes professionnels et fixe qui administre.'],
                ['titre' => 'Croire une référence parce qu’elle est bien présentée', 'texte' => 'Mistral peut avancer un article ou un chiffre erroné d’un ton assuré. Avant tout usage, la référence est vérifiée dans sa source.'],
                ['titre' => 'Laisser les Skills partagées grossir', 'texte' => 'Les ajouts s’empilent et finissent par se contredire. Un responsable passe en revue les Skills partagées chaque trimestre ; les modifications ne touchent que les nouvelles conversations.'],
                ['titre' => 'Brancher trop de connecteurs d’un coup', 'texte' => 'Un connecteur de plus, ce sont des droits de plus. On en ouvre un seul, on regarde ce qui se passe, puis on passe au suivant.'],
                ['titre' => 'Se fier à la rétention zéro pour l’assistant', 'texte' => 'Elle concerne certains accès de l’API, pas l’assistant. Une exigence de ce niveau se discute avec l’éditeur avant d’engager l’équipe.'],
                ['titre' => 'Oublier que les noms changent', 'texte' => 'Le passage du Chat à Vibe l’a montré. Les fiches de tâches se revoient à chaque changement d’interface, et l’accompagnement mensuel peut s’en charger.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères officiels un responsable d’équipe doit-il connaître ?',
            'items' => [
                ['valeur' => '12 août 2026', 'libelle' => 'Date de l’article du centre d’aide annonçant que Le Chat est devenu Vibe, avec conservation des comptes, des formules et des conversations (consulté le 26 octobre 2026)', 'source' => 'Centre d’aide de Mistral, Le Chat is now Vibe', 'url' => 'https://help.mistral.ai/en/articles/682992-le-chat-is-now-vibe'],
                ['valeur' => '25 mai 2018', 'libelle' => 'Date à laquelle le règlement général sur la protection des données est devenu applicable dans l’Union européenne (page consultée le 26 octobre 2026)', 'source' => 'Commission européenne, protection des données', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection_en'],
                ['valeur' => '20 M$', 'libelle' => 'Seuil de chiffre d’affaires mensuel au-delà duquel une licence commerciale est requise pour les modèles ouverts sous licence MIT modifiée (consulté le 26 octobre 2026)', 'source' => 'Centre d’aide de Mistral, licences des modèles ouverts', 'url' => 'https://help.mistral.ai/en/articles/347393-under-which-license-are-mistral-s-open-models-available'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine qui utilise Internet en 2025, contre 74 % dans le monde (publication du 15 octobre 2025, consultée le 26 octobre 2026)', 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Réseau, langue locale, données personnelles : que modifie le contexte du pays ?',
            'paragraphes' => [
                'Mistral exige d’être connecté. Or, d’après l’Union internationale des télécommunications, 36 % des Africains utilisaient Internet en 2025. Chez les entreprises accompagnées, le réseau est là mais décroche parfois. D’où des documents téléchargés avant la séance, un plan B pour les sessions en visioconférence, et le conseil d’archiver consignes et résultats clés dans les dossiers de la société plutôt que dans le seul historique de l’outil.',
                'Livré à lui-même, l’assistant écrit dans un français neutre, pas toujours celui d’une lettre administrative à Cotonou, Dakar ou Kinshasa. Remède : glisser dans la Skill concernée un exemple de lettre locale et un petit lexique (monnaie, politesses, organismes). Pour du fon, de l’éwé, du wolof ou du lingala, un locuteur relit toujours avant usage. Les équipes bilingues, en Suisse, en Belgique ou au Canada, en profitent aussi pour harmoniser leurs deux langues.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> régit les données personnelles, transferts à l’étranger compris. Héberger en Europe ne revient pas à héberger au Bénin : le règlement interne précise ce qu’on peut confier à Mistral et ce qu’on ne peut pas ; au moindre doute, on consulte l’autorité compétente.',
                'Côté européen, le <a href="https://commission.europa.eu/law/law-topic/data-protection_en">RGPD</a>, applicable depuis le 25 mai 2018 selon la Commission européenne, couvre ces mêmes gestes et encadre les transferts hors de l’Union. L’article 4 du règlement sur l’IA y joint une obligation de maîtrise de l’IA. D’après les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission</a> (page mise à jour le 20 octobre 2026), il s’applique depuis le 2 février 2025, les autorités nationales le contrôlent à partir du 2 août 2026, et aucun certificat n’est demandé : une trace interne des formations suivies suffit à l’entreprise.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui est le formateur Mistral, et à quoi reconnaît-on son indépendance vis-à-vis de l’éditeur ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Côté logiciels, il intègre l’IA chez ses clients. On lui doit <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp doté d’intelligence artificielle, et il co-fonde <a href="https://audyxa.com">Audyxa</a>. Son bilan : plus de ' . $ans . ' ans d’expérience, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées, un passage par EPITECH en 2022. Mistral figure parmi les assistants d’IA qu’il enseigne.',
                'Aucun éditeur ne l’a certifié, et il ne représente pas Mistral AI : l’outil enseigné est un produit du marché, pratiqué sur les comptes et les pièces de ses clients. Le cadrage peut même conclure qu’une formation plus courte suffit. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays desservis sur celle des <a href="/zones/">zones d’intervention</a>. Dès que le besoin sort de l’usage quotidien, par exemple pour relier l’assistant à vos logiciels ou héberger un modèle ouvert en interne, on bascule vers une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Avant de réserver : les points à garder en tête pour votre équipe Mistral',
            'texte' => 'Limitez-vous à deux ou trois tâches concrètes par groupe, travaillez sur vos pièces dans les comptes que l’équipe conservera, triez les données avant l’exercice initial et contrôlez les réglages d’entraînement et de Mémoires. Ouvrez les connecteurs un par un, et qu’une personne compétente sur le sujet relise chaque résultat. Les formules, limites et noms de produits évoluent : la page officielle de l’éditeur fait foi le jour de la décision.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe doit-elle apprendre à s’appuyer sur Mistral ?',
            'texte'  => 'Écrivez-nous l’effectif, les fonctions concernées, les tâches les plus chronophages, vos contraintes sur les données et la formule envisagée. Une réponse arrive sous 24 heures, suivie d’une proposition et d’un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation Mistral'],
        ],
    ],

    'faq' => [
        ['q' => 'Le Chat de Mistral existe-t-il encore ?', 'r' => 'Il a changé de nom. Selon le centre d’aide de Mistral, Le Chat est devenu Vibe le 12 août 2026, avec les mêmes comptes, formules et conversations. La formation utilise les noms actuels et montre la correspondance avec les anciens.'],
        ['q' => 'Faut-il un bagage technique pour participer ?', 'r' => 'Non. Mistral se commande en français, par écrit. Ce qui compte, c’est de savoir formuler exactement le résultat attendu puis de le contrôler, et cela se gagne en s’exerçant sur ses propres pièces.'],
        ['q' => 'Mes données restent-elles en Europe avec Mistral ?', 'r' => 'Par défaut, selon le centre d’aide de Mistral, les données sont hébergées dans l’Union européenne ; l’utilisateur peut choisir le point d’accès américain de l’API. Selon la fonction utilisée, des transferts temporaires hors de l’Union sont possibles, vers les lieux listés dans le centre de confiance. La formation apprend à lire cette liste.'],
        ['q' => 'Mistral utilise-t-il nos conversations pour entraîner ses modèles ?', 'r' => 'Le résultat varie avec la formule et les paramètres. Selon le centre d’aide, les comptes individuels ne sont pas exclus par défaut, les clients Enterprise le sont, et l’interrupteur de l’assistant est distinct de celui de l’API. La formation vérifie ces réglages compte par compte.'],
        ['q' => 'Quelle différence entre Mistral et les autres assistants ?', 'r' => 'Des modèles à poids ouverts pour plusieurs d’entre eux et un hébergement des données dans l’Union européenne par défaut. Pour le reste, la qualité sur vos documents se mesure par un test, pas par une réputation. La formation en conduit un.'],
        ['q' => 'Combien coûte l’abonnement à Mistral ?', 'r' => 'Cette fiche ne cite aucun tarif de l’éditeur, car formules et limites changent : consultez sa page officielle. L’abonnement se souscrit au nom de l’entreprise, en plus de la formation.'],
        ['q' => 'La formation couvre-t-elle le mode Code et l’API ?', 'r' => 'Non, sauf présentation. Le mode Code et l’API s’adressent à des développeurs. Pour coder avec un assistant, voyez la formation vibecoding ; pour relier l’assistant à vos logiciels, une mission d’intégration.'],
        ['q' => 'Peut-on faire tourner un modèle de Mistral sur nos propres serveurs ?', 'r' => 'Pour les modèles à poids ouverts, c’est possible en principe, sous réserve de la licence : la plupart sont sous Apache 2.0, d’autres sous une licence MIT modifiée avec un seuil de chiffre d’affaires. C’est un projet technique, hors de cette formation, qui relève d’une mission d’intégration.'],
        ['q' => 'Quelle est la taille maximale d’un groupe ?', 'r' => 'Le plafond est de 10 pour la formation de deux jours, 12 pour l’atelier découverte et 8 pour une série de séances à distance.'],
        ['q' => 'Peut-on suivre le parcours Mistral uniquement en visioconférence ?', 'r' => 'C’est possible : cinq à six séances de 2 h 30 avec partage d’écran. Chaque participant doit disposer d’un réseau fiable, et un plan B couvre les coupures.'],
        ['q' => 'Quel est le tarif de la formation Mistral ?', 'r' => 'Il se fixe sur devis, une fois le cadrage fait, selon l’effectif, la formule, la préparation des exercices, le lieu et le suivi éventuel.'],
        ['q' => 'Un fonds de formation peut-il en couvrir le coût ?', 'r' => 'Aucune garantie : chaque fonds a ses règles. Richard SALANON ne présente ni certification qualité ni agrément ; demandez au fonds ce qu’il attend d’un prestataire.'],
        ['q' => 'Richard SALANON est-il certifié par Mistral AI ?', 'r' => 'Non, aucun éditeur ne l’a certifié et il ne représente pas Mistral AI. Mistral est pour lui un outil du marché, enseigné sur les comptes et documents de l’entreprise.'],
        ['q' => 'Une attestation est-elle remise ?', 'r' => 'Oui, à chaque participant, nominative et de fin de formation. Elle ne vaut ni diplôme ni certification de Mistral AI.'],
    ],

    'sources' => [
        ['titre' => 'Centre d’aide de Mistral, Le Chat is now Vibe', 'url' => 'https://help.mistral.ai/en/articles/682992-le-chat-is-now-vibe', 'date' => '2026-10-26'],
        ['titre' => 'Documentation de Mistral, présentation de Vibe', 'url' => 'https://docs.mistral.ai/vibe/', 'date' => '2026-10-26'],
        ['titre' => 'Documentation de Mistral, Vibe Work : prise en main', 'url' => 'https://docs.mistral.ai/vibe/work/get-started', 'date' => '2026-10-26'],
        ['titre' => 'Documentation de Mistral, Vibe Work : Skills', 'url' => 'https://docs.mistral.ai/vibe/work/skills', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Mistral, où sont stockées mes données', 'url' => 'https://help.mistral.ai/en/articles/347629-where-do-you-store-my-data-or-my-organization-s-data', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Mistral, désactiver l’utilisation des données pour l’entraînement', 'url' => 'https://help.mistral.ai/en/articles/455207-can-i-opt-out-of-my-input-or-output-data-being-used-for-training', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Mistral, rétention zéro des données (ZDR)', 'url' => 'https://help.mistral.ai/en/articles/347612-can-i-activate-zero-data-retention-zdr', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Mistral, fonction Mémoires', 'url' => 'https://help.mistral.ai/en/articles/396497-how-do-you-handle-my-data-when-using-the-memories-feature', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Mistral, licences des modèles ouverts', 'url' => 'https://help.mistral.ai/en/articles/347393-under-which-license-are-mistral-s-open-models-available', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Mistral, peut-on se fier aux réponses des modèles ?', 'url' => 'https://help.mistral.ai/en/articles/704907-can-i-trust-the-models-output', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, protection des données dans l’Union (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection_en', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, maîtrise de l’IA : questions et réponses sur l’article 4 du règlement sur l’IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d’Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'claude-en-entreprise', 'prompt-engineering', 'agents-ia-assistants', 'ia-ethique-conformite', 'gouvernance-ia'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
