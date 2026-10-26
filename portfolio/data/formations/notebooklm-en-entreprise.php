<?php
// ============================================================
// data/formations/notebooklm-en-entreprise.php · Fiche formation « NotebookLM en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : carnets de sources, réponses citées, résumés audio, rapports et
// guides d’étude, cartes mentales, cas métiers (procédures, comptes rendus, cahiers
// des charges, veille), limites (réponses limitées aux sources, confidentialité,
// quotas). Richard enseigne NotebookLM (fait donné par lui) ; rien d’autre n’est
// affirmé sur sa pratique.
// Faits externes lus le 26/10/2026 : aide NotebookLM de Google (présentée sous le nom
// Gemini Notebook), pages sources, résumé audio, rapports, cartes mentales,
// confidentialité, limites d’utilisation ; SGG du Bénin ; Commission européenne.
// Aucun prix ni limite chiffrée d’abonnement ou de quota : la page officielle fait foi.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation NotebookLM en entreprise : vos équipes apprennent à transformer leurs documents en carnets de sources, à obtenir des réponses citées et à produire synthèses, résumés audio et rapports fiables',
    'title'   => 'Formation NotebookLM en entreprise | Richard SALANON',
    'meta'    => 'Formation NotebookLM pour vos équipes : carnets de sources, réponses citées, résumés audio, rapports, limites et confidentialité. Sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes qui travaillent sur des dossiers de documents (procédures, comptes rendus, cahiers des charges, veille) à utiliser NotebookLM, l’outil de Google qui répond uniquement à partir des sources que l’on lui donne : composer un carnet, poser des questions, contrôler les citations, produire un résumé audio ou un rapport, et savoir ce qu’on ne lui confie pas. Comptez deux jours répartis sur quatre demi-journées, ou une demi-journée si un atelier de découverte suffit. Les séances ont lieu chez vous, en visioconférence ou en alliant les deux, pour une seule entreprise ou pour plusieurs structures réunies. Le tarif s’établit sur devis.',
    'publie'  => '2026-11-14',
    'maj'     => '2026-11-14',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comprendre le principe du carnet de sources et poser les règles de données',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qui distingue NotebookLM d’un assistant généraliste : il répond à partir des sources importées dans le carnet, et l’aide de Google précise qu’il ne répond pas aux questions dont la réponse ne figure pas dans ces sources.',
                'Créer un premier carnet sur un sujet réel du service, importer trois ou quatre documents et lire la première réponse avec ses citations.',
                'Passer de la citation au passage d’origine : ouvrir la source, retrouver la phrase, dire si la réponse la reflète bien.',
                'Classer les documents de l’entreprise en trois familles : ceux qu’on peut importer, ceux qu’on prépare ou anonymise d’abord, ceux qui n’y entrent jamais.',
                'Lire ensemble la page de confidentialité de l’éditeur et repérer ce qui diffère entre un compte personnel et un compte d’organisation.',
                'Premier exercice : poser cinq questions dont la réponse est dans les documents et deux dont elle n’y est pas, et observer la différence.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : bien choisir ses sources et interroger son carnet',
            'duree'  => '3 h 30',
            'points' => [
                'Les types de sources que l’aide de Google cite : PDF, documents texte, Word, présentations, tableurs, pages web, vidéos YouTube publiques avec sous-titres, fichiers audio.',
                'Préparer un document avant import : retirer les pages inutiles, nommer clairement le fichier, vérifier que le texte est lisible et non scanné en image.',
                'Sélectionner certaines sources seulement dans le panneau pour cibler une question, et citer le titre d’un document dans la question plutôt que d’écrire « résume cette source ».',
                'Formuler des questions de travail : comparer deux versions d’une procédure, repérer les contradictions entre documents, lister les obligations d’un contrat.',
                'Utiliser la recherche de nouvelles sources proposée par l’outil, et décider ce qui entre réellement dans le carnet.',
                'Exercice croisé : chaque participant contrôle les citations du carnet d’un collègue.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : produire des supports à partir du carnet',
            'duree'  => '3 h 30',
            'points' => [
                'Générer un résumé audio : choisir le format, la langue, ajouter une consigne pour cibler un thème, puis écouter en consultant les citations pendant la lecture.',
                'Comprendre ce que dit l’éditeur des limites du résumé audio : généré par IA, il peut contenir des inexactitudes ou des défauts sonores.',
                'Produire un rapport sous forme de document, le modifier avant génération et relire chaque affirmation face aux citations.',
                'Créer une carte mentale pour explorer un dossier, et s’en servir pour poser des questions ciblées sur une branche.',
                'Enregistrer une réponse utile comme note dans le carnet, pour garder la trace des questions qui ont servi.',
                'Décider du bon format selon le public : note écrite pour la direction, audio pour une équipe en déplacement, carte pour un atelier.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : cas métiers, partage, limites et plan d’usage',
            'duree'  => '3 h 30',
            'points' => [
                'Travail sur la tâche cible de chaque participant : base de procédures, comptes rendus de réunions, cahier des charges ou dossier de veille.',
                'Règles de partage d’un carnet : à qui, avec quels droits, et ce que voient les personnes invitées.',
                'Gérer les limites d’utilisation : où consulter le quota restant dans l’outil, planifier les générations lourdes, ne pas bâtir un processus sur une limite qui peut changer.',
                'Rédiger la fiche de tâche : documents à importer, questions types, vérifications obligatoires, personne qui valide.',
                'Mise à l’épreuve : seul devant son poste, chacun déroule sa tâche cible du premier document à la note finale, citations vérifiées.',
                'Calendrier d’usage pour les trente jours suivants et charte écrite de l’équipe sur les documents déposés.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d’une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes qui travaillent sur des dossiers de documents : procédures, comptes rendus, cahiers des charges, veille ; sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Ce que vous saurez faire avec NotebookLM après la formation, et ce qu’elle laisse de côté',
            'paragraphes' => [
                'Dans beaucoup d’entreprises, le savoir est dans des documents que personne n’a le temps de relire : procédures de dix pages, comptes rendus empilés, cahiers des charges modifiés trois fois, notes de veille dispersées. NotebookLM répond à ce problème d’une façon particulière. Selon l’aide de Google, on y importe ses propres sources, et le chat répond à partir de ces sources en intégrant des citations qui permettent de vérifier l’information. Ce que la formation apprend, c’est à bâtir un carnet utile et à ne jamais cesser de contrôler.',
                'Au terme des deux jours, chaque stagiaire maîtrise six gestes : monter un carnet de sources propre et ciblé, interroger plusieurs documents d’un seul coup, ouvrir chaque citation pour voir si elle appuie vraiment la réponse, tirer du carnet un résumé audio, un rapport ou une carte mentale taillés pour son public, partager un carnet en sachant quels droits on accorde, et trier ce qui a le droit d’entrer dans l’outil selon les règles de la maison.',
                'Le champ reste volontairement étroit. On n’y étudie pas les assistants de rédaction généralistes : l’usage de ChatGPT, Claude, Gemini ou Copilot pour rédiger relève de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Elle n’apprend pas non plus à construire un robot interne branché sur vos archives, sujet de la formation <a href="/formations/rag-chatbot-documents">chatbot sur vos documents</a>. Elle ne remplace pas enfin l’avis d’un juriste, d’un comptable ou d’un médecin : l’aide de Google recommande elle-même de consulter un professionnel pour les conseils médicaux, juridiques ou financiers.',
                'Aucun gain de temps chiffré n’est annoncé : tout varie avec l’état des documents, la précision des questions et la régularité de l’usage. Le premier matin, puis le soir du second jour, chacun chronomètre donc la tâche qu’il a choisie, et l’entreprise reste libre de reprendre cette mesure ultérieurement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut suivre cette formation, avec quel bagage et quel équipement ?',
            'intro' => 'Elle s’adresse à tous ceux qui, dans leur métier, lisent, comparent et résument des documents. Aucune compétence technique n’est demandée : si l’on sait ouvrir un document et écrire une question, on peut suivre.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Responsables qualité et procédures, assistantes et assistants de direction qui rédigent des comptes rendus, chargés de projet et de maîtrise d’ouvrage qui reçoivent des cahiers des charges, juristes d’entreprise, responsables de veille, formateurs et enseignants, dirigeants qui veulent comprendre un dossier sans le relire en entier.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Les débutants complets y côtoient des équipes qui ont déjà déposé quelques fichiers sans méthode. Un petit questionnaire envoyé en amont sert à former des groupes homogènes et à prévoir, si nécessaire, une remise à niveau.'],
                ['titre' => 'Un groupe par famille de documents', 'texte' => 'Une équipe qualité travaille sur des procédures, une équipe projet sur des cahiers des charges, une équipe de direction sur des comptes rendus. Quand c’est possible, les groupes sont composés par famille de documents ; pour l’atelier découverte, un groupe mêlé fonctionne bien.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant avec un navigateur récent et une connexion stable, car l’outil fonctionne en ligne dans le navigateur. Un traitement de texte sert à rédiger les notes issues des rapports.'],
                ['titre' => 'Les comptes', 'texte' => 'Il faut un compte Google. Selon la nature du compte, personnel ou d’organisation, les règles de confidentialité de l’éditeur ne sont pas les mêmes, ce qui se règle avant la session. Les formules et limites évoluent ; la page officielle de l’éditeur fait foi.'],
                ['titre' => 'Les documents à préparer', 'texte' => 'Chacun apporte entre trois et cinq documents authentiques, rattachés à sa tâche, et les copie à l’avance sur son poste. Ceux qui contiennent des noms de clients, de patients ou d’élèves sont reformulés ou écartés avant la session.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Comment se découpent les quatre demi-journées ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels dossiers chaque métier verse-t-il dans son carnet pendant la formation ?',
            'legende' => 'Exercices types, montés lors de la préparation avec les pièces que l’entreprise remet. La colonne finale rappelle ce que le stagiaire contrôle avant de se fier au résultat.',
            'entetes' => ['Poste', 'Carnet de départ', 'Ce que l’outil produit', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Qualité et procédures', 'Procédures, instructions de travail, fiches de poste', 'Réponses citées aux questions du personnel, comparaison de deux versions, guide d’étude pour l’accueil des nouveaux', 'Version en vigueur de chaque document, passages cités, procédures absentes du carnet'],
                ['Assistance de direction', 'Comptes rendus et ordres du jour de plusieurs réunions', 'Synthèse des décisions, liste des points restés ouverts, résumé audio pour un dirigeant en déplacement', 'Noms, dates et décisions retrouvés dans le compte rendu d’origine'],
                ['Chargé de projet', 'Cahier des charges, échanges avec le client, avenants', 'Liste des exigences, contradictions entre versions, questions à poser au client', 'Exigences confrontées au document signé, avenants bien importés'],
                ['Juridique et conformité', 'Contrats, conditions générales, textes officiels', 'Repérage des clauses, durées, obligations, avec renvoi au passage', 'Lecture du texte lui-même, avis d’un professionnel avant toute décision'],
                ['Veille et études', 'Articles, rapports, pages web retenues pour un sujet', 'Carte mentale du sujet, rapport de synthèse, questions de suivi', 'Date et origine de chaque source, sources manquantes'],
                ['Formation interne', 'Supports de cours, manuels, notes de stage', 'Guide d’étude, questions de révision, résumé audio de révision', 'Exactitude des questions et des réponses proposées, niveau adapté au public'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'En quoi un carnet de sources diffère-t-il d’un assistant généraliste ?',
            'paragraphes' => [
                'Un assistant généraliste puise dans ce qu’il a appris et, selon les cas, dans le web ; il peut répondre à presque tout, y compris ce qu’il ne sait pas. NotebookLM est conçu à l’inverse : l’aide de Google indique qu’il répond à partir de vos sources et qu’il ne répond pas aux questions dont la réponse ne figure pas dans ces sources. Pour une entreprise, c’est un avantage : la réponse a une origine que l’on peut montrer à un collègue.',
                'Cette différence ne dispense pas de vigilance. L’aide précise aussi que le service peut se tromper. Une citation indique où chercher, pas que la réponse est juste. Et un carnet n’est jamais plus fiable que ses documents : une procédure périmée importée dans le carnet produira une réponse propre, bien citée, et fausse. La formation fait de ces deux risques un exercice, avec un carnet volontairement incomplet et un carnet contenant deux versions d’un même document.',
                'Le choix de l’outil dépend donc de la tâche. Pour rédiger une lettre ou reformuler un courriel, un assistant généraliste convient. Pour interroger quinze documents précis et savoir d’où vient chaque réponse, le carnet de sources est plus adapté. Pour chercher de l’information qui n’est pas dans vos fichiers, un moteur de recherche reste nécessaire. Les participants apprennent à passer de l’un à l’autre sans confusion.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel outil choisir selon la tâche : carnet de sources, assistant ou moteur de recherche ?',
            'legende' => 'Repères travaillés en formation à partir des descriptions de l’aide de Google. Ils servent à choisir, pas à remplacer le jugement de la personne.',
            'entetes' => ['Besoin', 'Outil le plus adapté', 'Pourquoi', 'Précaution'],
            'lignes'  => [
                ['Interroger un ensemble de documents internes', 'Carnet de sources', 'Les réponses viennent des documents importés et sont citées', 'Vérifier la version et la complétude des documents importés'],
                ['Rédiger un courrier ou reformuler un texte', 'Assistant de rédaction généraliste', 'Le travail porte sur le style, pas sur des sources', 'Relire, ne pas coller de données personnelles'],
                ['Trouver une information absente de vos fichiers', 'Moteur de recherche ou moteur de réponse', 'Le carnet ne sait pas ce qui n’est pas dans ses sources', 'Contrôler la source d’origine et la date'],
                ['Préparer une révision ou une prise en main', 'Carnet de sources, guide d’étude ou résumé audio', 'Le support est généré à partir des documents du carnet', 'Relire le contenu généré avant de le diffuser'],
                ['Comparer deux versions d’un document', 'Carnet avec les deux versions comme sources', 'Une question peut porter sur les deux sources à la fois', 'Nommer clairement les fichiers pour savoir de quelle version il s’agit'],
                ['Décision juridique, médicale ou financière', 'Un professionnel, avec le carnet comme aide à la lecture', 'L’aide de Google recommande de consulter un professionnel', 'Ne jamais décider sur la seule réponse de l’outil'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment vérifier une citation de NotebookLM ?',
            'intro' => 'Une réponse citée n’est pas une réponse confirmée. La formation apprend une grille de contrôle qui prend peu de temps par réponse et que chacun garde à côté de son poste.',
            'items' => [
                ['titre' => 'Ouvrir le passage cité', 'texte' => 'Le premier réflexe est de cliquer sur la citation et de lire le passage dans la source. On vérifie qu’il dit bien ce que la réponse affirme, et non quelque chose de voisin.'],
                ['titre' => 'Contrôler la version du document', 'texte' => 'Un carnet contient parfois la version 2 et la version 3 d’une même procédure. On vérifie de quel fichier vient la citation, et on retire du carnet ce qui est périmé.'],
                ['titre' => 'Chercher ce qui manque', 'texte' => 'L’outil ne voit que les sources importées. Une exception, un avenant ou un document récent absent du carnet n’apparaîtra pas dans la réponse. On se demande toujours quel document aurait dû être là.'],
                ['titre' => 'Se méfier de la réponse trop lisse', 'texte' => 'Quand plusieurs documents se contredisent, la réponse peut en choisir un sans le dire. On pose alors une question explicite sur les différences entre les sources.'],
                ['titre' => 'Vérifier les chiffres et les dates', 'texte' => 'Montants, délais, noms et dates se retrouvent dans le document d’origine avant d’être repris dans un courrier ou un rapport.'],
                ['titre' => 'Tenir la trace', 'texte' => 'La note finale garde le nom du document, la page et la date de consultation. C’est ce qui permet à un collègue de refaire le contrôle plus tard.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment construire un carnet de sources fiable à partir d’un dossier ?',
            'items' => [
                ['titre' => 'Définir la question du carnet', 'texte' => 'Un carnet répond à un projet précis : l’aide de Google le décrit comme un ensemble de sources pour un projet donné, chaque carnet étant indépendant. On écrit en une phrase ce que le carnet doit permettre de savoir.', 'duree' => '10 min'],
                ['titre' => 'Trier les documents', 'texte' => 'On retient les documents à jour, lisibles et utiles, et on écarte les doublons, les brouillons et les versions périmées. Un carnet plus court et mieux choisi donne de meilleures réponses.', 'duree' => '30 min'],
                ['titre' => 'Préparer les fichiers', 'texte' => 'Noms de fichiers explicites, texte réellement sélectionnable, pages inutiles retirées, informations personnelles masquées. Les pages web protégées par un accès payant, selon l’aide, ne sont pas récupérées.', 'duree' => '30 min'],
                ['titre' => 'Importer et vérifier l’import', 'texte' => 'On contrôle que chaque source a bien été lue : titre, contenu, aperçu. Une source mal importée donne un carnet silencieusement incomplet.', 'duree' => '15 min'],
                ['titre' => 'Tester avec des questions connues', 'texte' => 'On pose trois questions dont on connaît déjà la réponse, et trois dont la réponse n’est pas dans les documents. L’outil doit répondre aux premières et reconnaître son ignorance sur les secondes.', 'duree' => '20 min'],
                ['titre' => 'Documenter le carnet', 'texte' => 'Une fiche note l’objectif, la date de constitution, la liste des sources, le responsable qui les met à jour et les règles de partage.', 'duree' => '15 min'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que valent un résumé audio, un rapport et une carte mentale générés par NotebookLM ?',
            'paragraphes' => [
                'L’aide de Google décrit le résumé audio comme une discussion entre présentateurs générés par IA qui résume les thèmes clés des sources importées, conçue pour refléter le contenu des sources plutôt que l’opinion des présentateurs. Plusieurs formats existent, dont une conversation approfondie, un exposé bref, une critique et un débat, et la langue se choisit parmi plus de quatre-vingts. Une consigne personnalisée peut recentrer l’audio sur un thème ou ajuster le niveau d’expertise.',
                'Ce support est pratique pour un dirigeant qui écoute dans un véhicule, ou pour une équipe qui découvre un dossier. Il a une limite que l’éditeur indique lui-même : les résumés audio sont générés par IA et peuvent contenir des inexactitudes ou des défauts sonores. Un audio sert donc à se familiariser, jamais à citer. La formation fait écouter un résumé, puis le confronter aux sources pour noter ce qui a été simplifié, déformé ou omis.',
                'Pour les rapports, l’aide présente deux familles : des rapports interactifs, disponibles dans le navigateur, et des rapports sous forme de document en texte seul, à partir d’un modèle ou d’un format suggéré. Le modèle peut être modifié avant la génération. L’éditeur écrit que les rapports sont générés par IA et peuvent contenir des inexactitudes : un rapport est un brouillon de travail à relire, non un livrable.',
                'La carte mentale, enfin, présente selon l’aide un résumé visuel des sources sous forme d’arborescence, avec les thèmes principaux et les idées associées. On peut développer ou réduire les branches et sélectionner un nœud pour poser une question dans le chat sur ce thème. Elle sert à explorer un dossier avant de le lire, pas à le remplacer.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles fonctions de NotebookLM la formation utilise-t-elle ?',
            'legende' => 'Fonctions décrites par l’aide de Google, consultée le 26 octobre 2026. L’aide présente désormais le produit sous le nom Gemini Notebook ; les noms de fonctions, les formules et les limites évoluent, la page officielle de l’éditeur fait foi, et aucun prix n’est repris ici.',
            'entetes' => ['Fonction', 'Ce que décrit l’éditeur', 'Usage en formation', 'À savoir'],
            'lignes'  => [
                ['Carnet et sources', 'Ensemble de sources pour un projet, chaque carnet étant indépendant ; import de fichiers, de pages web, de vidéos et de documents Google', 'Constituer le dossier d’une tâche réelle', 'N’importer que des documents pour lesquels on a les droits, rappelle l’aide'],
                ['Chat avec citations', 'Réponses à partir des sources, avec des citations pour vérifier', 'Questions sur les procédures, comptes rendus, cahiers des charges', 'Le service peut se tromper et ne répond pas hors des sources'],
                ['Découverte de sources', 'Recherche rapide sur le web ou dans Drive, et recherche approfondie qui produit un rapport avec des sources à importer', 'Compléter un carnet de veille', 'La recherche approfondie est réservée aux adultes et l’import peut être partiel si les limites sont atteintes'],
                ['Résumé audio', 'Discussion générée entre présentateurs, formats et langues au choix', 'Prise en main d’un dossier', 'Peut contenir des inexactitudes ; le lien partagé cesse de fonctionner si l’audio est supprimé'],
                ['Rapports', 'Rapports interactifs ou en document, modèle modifiable', 'Notes de synthèse, guides d’étude', 'Générés par IA, à relire'],
                ['Cartes mentales', 'Arborescence des thèmes, questions sur un nœud', 'Explorer un dossier', 'Non disponible dans l’application mobile, selon l’aide'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passent les séances : taille des groupes, travail en salle, documents remis, suites',
            'intro' => 'Le travail porte sur les dossiers véritables de l’équipe et jamais sur des cas de démonstration.',
            'items' => [
                ['titre' => 'Préparation', 'texte' => 'Avant tout, un entretien de cadrage arrête les tâches visées, les documents en jeu, les comptes Google déjà ouverts et les règles sur les données. À son issue, il peut très bien recommander un atelier plus bref.'],
                ['titre' => 'Des groupes réduits', 'texte' => 'Plafond de dix personnes pour les deux jours, de douze pour l’atelier découverte, de huit pour les séances en visioconférence : plus nombreux, le formateur ne parviendrait plus à regarder le carnet de chaque stagiaire.'],
                ['titre' => 'Pratique sur vos documents', 'texte' => 'L’essentiel du temps sert à bâtir et à questionner des carnets, chacun avec ses fichiers déjà copiés sur son poste. Une démonstration appelle toujours un exercice en solo, puis un échange à deux où l’on vérifie les citations de son voisin.'],
                ['titre' => 'Supports remis', 'texte' => 'Repartent avec vous le déroulé, les documents de séance, les exercices corrigés, la grille de contrôle des citations, le modèle de fiche de carnet et le texte des règles de données de l’entreprise.'],
                ['titre' => 'Évaluation', 'texte' => 'Le stagiaire mène seul sa tâche cible, depuis le choix des documents jusqu’à la note contrôlée. Il reçoit ensuite une attestation à son nom, qui ne vaut ni diplôme ni certification de l’éditeur.'],
                ['titre' => 'Suivi', 'texte' => 'Pendant le mois suivant la session, vos questions sur l’application en situation passent par un canal direct, sans supplément. Au-delà, trois demi-journées espacées d’un mois peuvent s’ajouter sur devis.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que deviennent les documents importés dans NotebookLM ?',
            'paragraphes' => [
                'Un document importé est une donnée de l’entreprise. Selon la page de confidentialité de l’éditeur, le contenu n’est pas utilisé directement pour entraîner ses modèles d’IA fondamentaux, sauf si l’utilisateur envoie des commentaires. Ces commentaires (J’aime ou Je n’aime pas) sont examinés par des équipes spécialement formées après avoir été dissociés du compte, et l’éditeur demande de ne pas y mettre d’informations confidentielles ou sensibles.',
                'Pour les comptes Workspace ou Workspace for Education, la même page indique que les importations, les requêtes et les réponses ne servent pas à entraîner les modèles et ne sont pas examinées par des réviseurs humains, même en cas de commentaire. Pour les autres comptes, elle renvoie aux conditions d’utilisation de Google. La formation fait donc le point, avant tout import, sur le type de compte réellement utilisé par chaque participant.',
                'Ces engagements sont ceux de l’éditeur à la date de consultation. Ils peuvent changer, et le texte officiel prévaut. Une garantie annoncée n’est pas une vérification indépendante : l’entreprise qui manipule des documents sensibles lit les conditions applicables à son compte, et décide d’après elles ce qui entre ou non dans un carnet.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quels documents ne faut-il jamais importer dans un carnet ?',
            'items' => [
                'Les dossiers qui contiennent le nom, l’adresse ou la situation d’un client, d’un patient, d’un élève ou d’un bénéficiaire, sans anonymisation.',
                'Un contrat, une offre ou une grille de prix confidentielle, sans décision de la direction sur le compte utilisé.',
                'Des identifiants, des mots de passe, des numéros de compte ou de carte.',
                'Un dossier disciplinaire ou juridique concernant une personne nommée.',
                'Des informations stratégiques non annoncées (fusion, levée de fonds, recrutement).',
                'Un document dont l’entreprise n’a pas les droits : l’aide de Google demande de n’importer que des documents pour lesquels on dispose des droits.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment partager un carnet sans exposer plus que nécessaire ?',
            'intro' => 'Le partage est la fonction la plus simple à mal utiliser. La formation en fait un exercice, à partir de ce que décrit l’aide de Google.',
            'items' => [
                ['titre' => 'Savoir qui voit quoi', 'texte' => 'Selon l’aide, un carnet non partagé affiche un cadenas, un carnet partagé avec des personnes précises une icône de partage, et un carnet public une icône de globe. Chaque participant vérifie l’état de ses carnets.'],
                ['titre' => 'Un carnet partagé donne accès à ses sources', 'texte' => 'Une personne qui ouvre le carnet voit le contenu, pas seulement la réponse. On ne partage donc pas un carnet de travail qui contient des documents que le destinataire n’a pas à connaître.'],
                ['titre' => 'Préférer le partage nominatif', 'texte' => 'Inviter des personnes précises plutôt que publier. L’aide indique que le partage public d’un résumé audio n’est possible que pour les comptes personnels, pas pour les comptes Workspace Enterprise ou Education.'],
                ['titre' => 'Savoir ce que devient le lien', 'texte' => 'Selon l’aide, un lien vers un résumé audio cesse de fonctionner quand l’audio est supprimé. On supprime ce qui n’a plus d’utilité.'],
                ['titre' => 'Attention aux contenus sous licence', 'texte' => 'L’aide signale des limites d’accès pour les destinataires des carnets bâtis sur des livres numériques Google Play Livres. Les documents du commerce ne se redistribuent pas par un carnet.'],
                ['titre' => 'Désigner un responsable', 'texte' => 'Une personne tient la liste des carnets de l’équipe, de leurs sources et de leurs destinataires, et retire les accès à chaque départ.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles sont les limites de NotebookLM, y compris les quotas ?',
            'intro' => 'Une bonne formation nomme les limites. Celles de l’outil sont de deux ordres : celles de l’exactitude et celles de l’usage.',
            'items' => [
                ['titre' => 'Une réponse hors sources', 'texte' => 'L’outil ne répond pas aux questions dont la réponse ne figure pas dans le carnet. Parade : savoir quelle information manque, et la chercher ailleurs.'],
                ['titre' => 'Une erreur malgré les citations', 'texte' => 'L’éditeur reconnaît que le service peut se tromper. Parade : ouvrir le passage cité pour toute information qui compte.'],
                ['titre' => 'Des documents mal importés', 'texte' => 'Selon l’aide, les notes de bas de page et commentaires des documents Google ne sont pas importés, ni les pages protégées par un accès payant, ni les images et vidéos intégrées aux pages web. Parade : vérifier l’import.'],
                ['titre' => 'Un contenu généré à relire', 'texte' => 'Résumés audio, rapports et cartes sont générés par IA et peuvent contenir des erreurs. Parade : relecture et mention de l’origine du support.'],
                ['titre' => 'Des quotas d’utilisation', 'texte' => 'L’aide indique que l’usage est encadré par des limites, qui dépendent de la complexité des demandes, des fonctions utilisées et de la longueur des conversations, et qui peuvent changer. Le quota restant se consulte dans les paramètres et en bas du chat. Parade : ne pas bâtir un processus sur une limite, planifier les générations lourdes. Les formules et limites évoluent ; la page officielle fait foi.'],
                ['titre' => 'Des fonctions variables selon l’appareil et la langue', 'texte' => 'D’après l’aide, certaines fonctions sont limitées sur mobile, et certaines options du résumé audio ne sont proposées qu’en anglais. Parade : tester la fonction dans la langue et l’appareil réellement utilisés.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Dans quels contextes métier et pays la formation trouve-t-elle son usage ?',
            'items' => [
                ['secteur' => 'PME industrielle ou agroalimentaire, à Abidjan, Cotonou ou Douala', 'probleme' => 'Les consignes de sécurité, de qualité et de maintenance sont dans des documents différents, et les nouveaux employés posent toujours les mêmes questions.', 'solution' => 'Un carnet par poste avec les procédures à jour ; les questions du personnel reçoivent des réponses citées, que le responsable qualité vérifie ; un guide d’étude sert à l’accueil des nouveaux. Aucun document avec des données de salariés n’y entre.'],
                ['secteur' => 'Cabinet d’avocats, d’expertise ou de conseil, à Dakar, Lomé ou Cotonou', 'probleme' => 'Les dossiers comptent de nombreuses pièces, et retrouver une clause, une date ou une obligation prend du temps.', 'solution' => 'Un carnet par dossier, avec des pièces anonymisées ou une décision écrite sur le compte utilisé ; l’outil repère les passages, le professionnel lit le texte et signe l’analyse.'],
                ['secteur' => 'ONG et programmes à bailleurs, en Afrique de l’Ouest comme en Afrique centrale', 'probleme' => 'Cahiers des charges des bailleurs, comptes rendus de comités et rapports d’étape s’accumulent, avec peu d’heures pour les relire.', 'solution' => 'Un carnet par bailleur ; liste des exigences, comparaison entre versions du cahier des charges, résumé audio pour préparer une réunion. Aucune donnée de bénéficiaire n’est importée.'],
                ['secteur' => 'Entreprise de services en France, en Belgique ou en Suisse', 'probleme' => 'Les comptes rendus de réunions s’empilent, les décisions se perdent et le RGPD s’applique aux documents des clients.', 'solution' => 'Un carnet par projet, une synthèse des décisions vérifiée par l’assistante de direction, des règles écrites sur les documents importés. Séances à distance possibles.'],
                ['secteur' => 'Entreprise ou organisme public au Canada', 'probleme' => 'Les équipes gèrent des documents en français et en anglais et doivent s’y retrouver dans les deux langues.', 'solution' => 'Un carnet contenant les deux versions, des questions posées dans chaque langue, et un contrôle des citations dans la langue d’origine ; les options de langue du résumé audio sont testées avant usage.'],
                ['secteur' => 'Écoles, universités et centres de formation', 'probleme' => 'Les enseignants préparent des révisions à partir de supports dispersés et manquent de temps pour produire des questions.', 'solution' => 'Un carnet par cours, un guide d’étude et des questions de révision relues par l’enseignant ; aucune donnée d’élève n’est importée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formule choisir pour un parc de carnets : atelier, deux jours, visioconférence ou suivi ?',
            'legende' => 'Rien n’interdit d’enchaîner : un atelier pour une équipe pilote avant les deux jours complets, ou les deux jours puis le suivi mensuel.',
            'entetes' => ['Formule', 'Temps', 'Effectif', 'Cas d’usage'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une équipe qui n’a jamais monté de carnet de sources, ou une direction qui veut voir l’outil à l’œuvre avant de s’engager'],
                ['Formation complète, intra', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Des dossiers volumineux à dépouiller et le besoin d’une méthode partagée par tout un service'],
                ['Session mutualisée, inter', '1 à 2 jours', 'Plusieurs structures d’un même réseau', 'Un ou deux représentants par organisation, qui s’exercent sur des textes publics ou inventés'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Collègues dispersés entre sites ou entre pays'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Lancement en salle, puis entraînement en visioconférence sur les carnets réels du groupe'],
                ['Accompagnement mensuel', 'Une demi-journée mensuelle, trois mois de suite', 'Le groupe déjà formé', 'Installer l’habitude et ouvrir de nouveaux carnets sur d’autres dossiers'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel budget prévoir pour la formation NotebookLM, et par quels moyens payer ?',
            'intro'      => 'Rien n’est affiché d’avance : le montant est établi sur devis une fois le cadrage terminé, poste par poste. Le paiement passe par Mobile Money (MTN, Moov), carte, PayPal, virement ou espèces. Si vous souscrivez un abonnement Google, il reste à votre nom et n’entre pas dans ce montant. Formules et plafonds changent : la page officielle de l’éditeur fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée centrée sur vos fichiers', 'Un premier carnet et la vérification de ses citations', 'Règles de base sur les données', 'Avis sur la suite à donner']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Exercices tirés de vos dossiers', 'Résumés audio, rapports et cartes mentales', 'Tâche cible évaluée, attestation remise', 'Échanges directs le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Trois demi-journées, une par mois', 'Relecture des carnets en cours', 'Tâches nouvelles et correctifs', 'Bilan rédigé au troisième mois']],
            ],
            'variations' => [
                'Combien de stagiaires, répartis en combien de groupes.',
                'La formule choisie et le nombre de demi-journées qu’elle suppose.',
                'Les heures consacrées à fabriquer des exercices avec vos pièces.',
                'L’endroit : chez vous, dans une salle louée, ou loin de Cotonou, voire hors du Bénin.',
                'La modalité : sur place, en visioconférence ou mixte.',
                'Le suivi prévu une fois la session terminée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La session peut-elle être financée par un fonds de formation continue ?',
            'paragraphes' => [
                'Tout dépend du dispositif et de votre situation ; rien ne garantit une prise en charge. Des fonds existent pour les entreprises privées dans plusieurs pays : le FDFP en Côte d’Ivoire, le 3FPT au Sénégal, le FODEFCA au Bénin, les opérateurs de compétences (OPCO) en France. Chaque fonds impose ses propres conditions, formulaires et exigences à l’organisme de formation.',
                'Avant de signer, écrivez au fonds en joignant le programme et le devis. Richard SALANON ne met en avant ni certification de qualité ni agrément reconnu par ces organismes : à vous de vérifier que votre dossier reste finançable, et de bâtir votre budget sans cette aide si la décision en dépend.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond d’une erreur reprise depuis un carnet de sources ?',
            'texte' => 'Toujours l’entreprise, et la personne qui s’appuie sur la réponse. Une citation donne l’impression d’une preuve, mais l’éditeur rappelle que le service peut se tromper. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu’une entreprise répond de ce que dit son assistant. La formation fait du contrôle du passage cité un geste obligatoire avant tout envoi, toute décision et toute citation.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels travers réapparaissent avec NotebookLM, et comment les devancer ?',
            'intro' => 'C’est un mois après la session que l’on voit ce qui reste dans les habitudes. Voici les dérives les plus courantes, que l’on désamorce dès les séances.',
            'items' => [
                ['titre' => 'Cesser d’ouvrir les citations', 'texte' => 'Au bout de quelques semaines, les réponses paraissent fiables et on ne clique plus. La grille de contrôle reste affichée, et les notes importantes sont relues par une autre personne.'],
                ['titre' => 'Laisser des documents périmés dans le carnet', 'texte' => 'Une procédure remplacée continue de produire des réponses. Un responsable relit la liste des sources à chaque révision du document.'],
                ['titre' => 'Importer des données sensibles par habitude', 'texte' => 'Sous la pression d’un délai, on dépose un dossier complet. La règle écrite en trois familles sert à décider vite.'],
                ['titre' => 'Prendre le résumé audio pour une source', 'texte' => 'Un audio se cite d’autant moins qu’il peut être inexact. On cite le document d’origine.'],
                ['titre' => 'Multiplier les carnets sans responsable', 'texte' => 'Chacun crée les siens, personne ne sait lesquels sont à jour. Une liste commune nomme un responsable par carnet.'],
                ['titre' => 'Bâtir un processus sur un quota', 'texte' => 'Les limites d’utilisation changent. Un processus critique ne dépend pas d’une génération quotidienne.'],
                ['titre' => 'Se lier à un seul outil', 'texte' => 'Les fonctions et les noms évoluent, l’aide présente déjà le produit sous un nouveau nom. La méthode (documents choisis, citations contrôlées, note rédigée par une personne) reste valable.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'NotebookLM fonctionne en ligne, dans le navigateur, et la génération d’un résumé audio ou d’un rapport peut prendre un certain temps, d’après l’aide. Une connexion peut couper ou ralentir. Les fichiers d’exercice sont copiés sur chaque poste en amont, les résultats importants rangés dans les dossiers de l’entreprise, et un plan de secours attend l’éventuelle coupure.',
                'La langue compte autant. Les documents d’une entreprise sont parfois en français, parfois en anglais, parfois mêlés. Les participants apprennent à tester l’outil dans la langue de leurs documents, à vérifier la langue des résumés audio et à faire relire par un locuteur du métier tout contenu généré dans une langue nationale.',
                'Côté béninois, avant de décider quels documents chargés de données personnelles entrent dans un carnet, l’entreprise lit la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>. La règle de l’entreprise dit quels documents peuvent partir et lesquels ne le peuvent pas. Cette fiche n’apporte pas d’avis juridique et ne résume pas la loi : le texte intégral se lit sur le site du Secrétariat général du Gouvernement.',
                'En Europe, le RGPD s’applique aux mêmes gestes. La <a href="https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en">Commission européenne</a> rappelle que sont des données personnelles celles qui concernent une personne identifiée ou identifiable. Un document qui nomme des clients ou des salariés reste donc concerné tant que la personne est reconnaissable. Pour aller plus loin, voyez la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à NotebookLM avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'NotebookLM fait partie des outils d’IA qu’il enseigne, et il branche aussi l’IA sur les logiciels de ses clients. On lui doit <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp doté d’intelligence artificielle ; il co-fonde <a href="https://audyxa.com">Audyxa</a>. Son bagage : plus de ' . $ans . ' ans de métier, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées et un passage par EPITECH en 2022.',
                'Ses principes : partir de vos propres pièces pour les exercices, évaluer sur une tâche vraie, laisser les supports à l’entreprise et ne promettre aucun gain de temps. Aucun éditeur ne l’a certifié et il ne représente pas Google ; il enseigne un outil du marché, quitte à conclure au cadrage qu’une session plus courte suffit. Pour son parcours, voyez la page <a href="/richard-salanon">Richard SALANON</a> ; la liste des pays figure sur les <a href="/zones/">zones d’intervention</a>.',
                'Si votre besoin dépasse la prise en main d’un outil, par exemple relier l’IA à vos archives ou à vos applications, il s’agit d’une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>. Les autres formations du domaine sont réunies sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe ?',
            'texte' => 'Retenez deux ou trois tâches vraies par groupe, travaillez sur vos fichiers, triez avant le premier exercice ce qui peut entrer dans l’outil, cliquez chaque citation importante et faites relire la note par quelqu’un qui connaît le dossier. Les formules et limites de l’éditeur changent : vérifiez-les sur sa page officielle le jour de la décision.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Prêt à former votre équipe à NotebookLM ?',
            'texte'  => 'Précisez l’effectif, les postes, les documents les plus chronophages, les comptes Google existants et la formule envisagée : réponse sous 24 heures, puis proposition et devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation NotebookLM'],
        ],
    ],

    'faq' => [
        ['q' => 'Un bagage technique est-il requis ?', 'r' => 'Aucun. NotebookLM se manie par écrit, dans le navigateur, en français. La compétence décisive est de choisir de bons documents et de contrôler les citations, et elle s’acquiert en pratiquant sur ses propres dossiers.'],
        ['q' => 'NotebookLM répond-il à partir d’internet ou de nos documents ?', 'r' => 'Selon l’aide de Google, il répond à partir des sources que vous importez et ne répond pas aux questions dont la réponse ne figure pas dans ces sources. Une fonction de découverte permet d’ajouter des sources trouvées sur le web ou dans Drive.'],
        ['q' => 'Peut-on se fier aux citations ?', 'r' => 'Pas sans les ouvrir. Les citations permettent de vérifier, mais l’éditeur reconnaît que le service peut se tromper. La formation apprend à ouvrir le passage cité, contrôler la version du document et chercher ce qui manque.'],
        ['q' => 'À quoi sert le résumé audio, et peut-on s’y fier ?', 'r' => 'Il présente, sous forme de discussion générée, les thèmes clés des sources. L’éditeur indique qu’il peut contenir des inexactitudes ou des défauts sonores : il sert à se familiariser avec un dossier, jamais de référence citée.'],
        ['q' => 'Nos documents servent-ils à entraîner les modèles de Google ?', 'r' => 'Selon la page de confidentialité de l’éditeur, le contenu n’est pas utilisé directement pour entraîner ses modèles fondamentaux, sauf commentaires envoyés. Les règles diffèrent pour les comptes Workspace. La formation fait vérifier le type de compte de chaque participant.'],
        ['q' => 'Quels documents peut-on importer ?', 'r' => 'L’aide cite notamment des PDF, des fichiers Word, texte, PowerPoint, des documents Google, des pages web, des vidéos YouTube publiques avec sous-titres et des fichiers audio. La page officielle fait foi, car les formats pris en charge évoluent.'],
        ['q' => 'Y a-t-il des limites d’utilisation ?', 'r' => 'Oui. D’après l’aide, l’usage est encadré par des limites qui dépendent des demandes et des fonctions, et qui peuvent changer. Le quota restant se consulte dans l’outil. La formation apprend à planifier les générations sans bâtir un processus sur une limite.'],
        ['q' => 'Faut-il acheter un abonnement avant la session ?', 'r' => 'Non. Un compte suffit pour apprendre la méthode, avec ses limites. Les formules et leurs limites évoluent ; la page officielle de l’éditeur fait foi, et l’abonnement se décide après la formation, au nom de l’entreprise.'],
        ['q' => 'La formation couvre-t-elle aussi ChatGPT, Claude ou Perplexity ?', 'r' => 'Non, elle se concentre sur NotebookLM. L’usage des assistants de rédaction est traité dans la formation IA en entreprise ; un comparatif aide à choisir entre assistants.'],
        ['q' => 'Quelle taille de groupe ?', 'r' => 'Le groupe compte dix personnes au plus sur les deux jours, douze à l’atelier découverte et huit en visioconférence.'],
        ['q' => 'Peut-on la suivre intégralement en ligne ?', 'r' => 'Oui : cinq à six séances de deux heures et demie, en visioconférence avec partage d’écran. Chacun doit disposer d’une connexion fiable, et un plan de secours existe si le réseau lâche.'],
        ['q' => 'Quel est le tarif ?', 'r' => 'Il est établi sur devis après le cadrage et varie selon l’effectif, la formule, le temps de préparation des exercices, le lieu et le suivi. Mobile Money, carte, PayPal, virement et espèces sont acceptés.'],
        ['q' => 'Un fonds peut-il financer la session ?', 'r' => 'Chaque fonds a ses règles et rien n’est garanti. Richard SALANON ne revendique ni certification de qualité ni agrément : écrivez au fonds, programme et devis joints, avant tout engagement.'],
        ['q' => 'La formation est-elle délivrée par un formateur certifié Google ?', 'r' => 'Non, aucun éditeur ne l’a certifié et il ne représente pas Google. NotebookLM y est enseigné comme un outil du marché, avec les documents et les comptes de l’entreprise.'],
        ['q' => 'Un justificatif est-il remis ?', 'r' => 'Oui, chaque stagiaire obtient une attestation à son nom en fin de parcours, sans valeur de diplôme ni de certification de l’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Aide NotebookLM, En savoir plus sur Gemini Notebook', 'url' => 'https://support.google.com/notebooklm/answer/16164461?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Créer un notebook dans Gemini Notebook', 'url' => 'https://support.google.com/notebooklm/answer/16206563?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Ajouter ou découvrir de nouvelles sources pour votre notebook', 'url' => 'https://support.google.com/gemininotebook/answer/16215270?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Générer un résumé audio dans Gemini Notebook', 'url' => 'https://support.google.com/notebooklm/answer/16212820?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Générer des rapports dans Gemini Notebook', 'url' => 'https://support.google.com/gemininotebook/answer/18323649?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Utiliser des cartes mentales dans Gemini Notebook', 'url' => 'https://support.google.com/gemininotebook/answer/16212283?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Confidentialité et Conditions d’utilisation dans Gemini Notebook', 'url' => 'https://support.google.com/gemininotebook/answer/17004255?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Gérer vos limites d’utilisation de Gemini Notebook', 'url' => 'https://support.google.com/gemininotebook/answer/17670842?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Aide NotebookLM, Questions fréquentes', 'url' => 'https://support.google.com/notebooklm/answer/16269187?hl=fr', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, la protection des données expliquée (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'prompt-engineering', 'rag-chatbot-documents', 'ia-ethique-conformite', 'ia-generative-dirigeants', 'agents-ia-assistants'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
