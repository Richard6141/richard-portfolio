<?php
// ============================================================
// data/formations/rag-chatbot-documents.php · Fiche formation « RAG : chatbot
// sur vos documents internes » (vague 1B, lot B, domaine intelligence-artificielle).
// Angle propre : faire répondre un assistant à partir des documents internes :
// préparer et découper le fonds, index et recherche, réponses avec citations,
// limites, mise à jour, droits d'accès, évaluation des réponses ; d'abord sans
// code (projets ChatGPT, projets Claude, NotebookLM), puis en version technique
// (File Search d'OpenAI et de Google, citations d'Anthropic, pgvector, Ollama).
// Ne traite pas : l'appel des API en général (integrer-ia-logiciels-existants),
// l'usage quotidien des assistants (ia-en-entreprise), les agents qui agissent
// (agents-ia-assistants), l'écriture de consignes (prompt-engineering), le robot
// WhatsApp (chatbot-whatsapp). Aucune ancienne page.
// Sources lues le 05/10/2026 : aides d'OpenAI (projets, téléversements, dans le
// navigateur), d'Anthropic (projets, RAG des projets, fichiers) et de Google
// (NotebookLM, renommé Gemini Notebook : sources, forfaits, chat, partage, FAQ,
// pays) ; documentations File Search et récupération d'OpenAI, File Search de
// Gemini, citations d'Anthropic, réduction des hallucinations, Contextual
// Retrieval, Ollama, pgvector ; pages tarifs d'OpenAI, de Google, de Claude, de
// ChatGPT et de Google AI ; OWASP LLM08 et LLM09 2025 ; FDFP, 3FPT, France
// Compétences. Loi n° 2017-20 et décret n° 2022-286 : articles déjà lus par les
// fiches sœurs dans les PDF du SGG. Article 4 du règlement sur l'IA : fait
// vérifié du catalogue, repris tel quel.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation RAG : faire répondre un assistant à partir de vos documents internes, avec des citations vérifiables, des droits d'accès respectés et un fonds tenu à jour, d'abord sans code, puis en version technique",
    'title'   => 'Formation RAG : chatbot sur vos documents | Richard SALANON',
    'meta'    => "Formation RAG : préparer vos documents, faire répondre un assistant avec citations, gérer droits et mises à jour, sans code puis en technique. Sur devis.",
    'en_bref' => "Cette formation apprend à une équipe à construire un assistant qui répond aux questions des salariés à partir des documents de l'entreprise, en citant le passage utilisé : préparation du fonds documentaire, découpage, recherche, citations, droits d'accès, mise à jour et évaluation. Elle s'adresse aux responsables de la documentation, de la qualité et du support, et, pour la dernière journée, aux profils techniques. Elle dure trois jours en six demi-journées, dont une journée technique facultative, dans vos locaux, en inter-entreprises, à distance ou en formule hybride. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => false,
    'duree'   => 'Trois jours en six demi-journées, dont une journée technique facultative, puis une revue à distance',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : comprendre comment un assistant retrouve un passage avant de répondre",
            'duree'  => '3 h 30',
            'points' => [
                "Le principe en deux temps : chercher les passages qui parlent de la question, puis rédiger une réponse à partir de ces seuls passages ; ce que cela change par rapport à un assistant qui répond de mémoire.",
                "Pourquoi on ne réentraîne aucun modèle sur vos documents, et pourquoi un fonds de quelques centaines de pages peut tenir entier dans la fenêtre de contexte sans index.",
                "Choisir un périmètre qui tient : une famille de questions, un fonds documentaire, un public, un responsable.",
                "Démonstration sur un petit fonds de l'entreprise : une bonne réponse, une réponse fausse mais citée, un refus justifié.",
                "Collecte des questions réelles : ce que les collègues demandent au support, à la qualité ou aux ressources humaines, et où se trouve la réponse officielle.",
                "Exercice de contrôle : chaque participant rédige dix questions de son service avec, pour chacune, le document et la page qui font foi.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : préparer le fonds documentaire avant de l'indexer",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire : quels documents font foi, lesquels sont périmés, en double, en brouillon ou contradictoires.",
                "Les pièges de format : PDF scanné sans texte, PDF protégé contre la copie, tableaux éclatés, notes de bas de page et commentaires ignorés, images que l'outil ne lit pas.",
                "Remettre de la structure : titres explicites, une procédure par fichier, date et version en tête, sigles développés.",
                "Fiche d'identité de chaque document : propriétaire, date de validité, public autorisé, niveau de confidentialité.",
                "Transformer une foire aux questions éparse en fiches courtes, une question par bloc, rédigées par le métier.",
                "Exercice de contrôle : vingt documents du service triés, nettoyés et renommés selon une règle commune, avec la liste de ceux qui restent dehors.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : monter l'assistant sans code avec ChatGPT, Claude ou NotebookLM",
            'duree'  => '3 h 30',
            'points' => [
                "Créer un projet ChatGPT, un projet Claude et un notebook NotebookLM avec le même fonds, et relever les limites de chacun.",
                "Écrire les instructions du projet : ne répondre qu'à partir des documents, citer le titre et la section, dire clairement quand l'information manque.",
                "Lire une citation : survoler, ouvrir le passage, vérifier qu'il dit vraiment ce que la réponse affirme.",
                "Ce que chaque outil fait des fichiers : copie figée, synchronisation avec Google Drive, texte extrait sans les images.",
                "Passer le même jeu de questions dans les trois outils et noter les écarts.",
                "Exercice de contrôle : un tableau comparatif rempli par binôme, qui servira à choisir l'outil de l'équipe.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : évaluer, partager et tenir à jour",
            'duree'  => '3 h 30',
            'points' => [
                "La grille d'évaluation : bon passage retrouvé, réponse fidèle, citation exacte, refus quand le fonds ne contient rien, document en vigueur.",
                "Les questions pièges : hors sujet, réponse dans un document retiré, deux versions contradictoires, question formulée avec le vocabulaire du terrain.",
                "Partager sans exposer : qui voit les sources dans chaque outil, un projet par public, ce qui ne doit jamais entrer dans un fonds commun.",
                "La procédure de mise à jour : remplacer plutôt qu'ajouter, retirer les versions périmées, dater, rejouer le jeu de questions.",
                "Le journal des questions sans réponse, qui devient la liste des documents à écrire.",
                "Exercice de contrôle : la fiche d'exploitation de l'assistant, avec son propriétaire, son public, son calendrier de revue et son seuil d'arrêt.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin (technique) : construire la chaîne d'indexation",
            'duree'  => '3 h 30',
            'points' => [
                "Extraire le texte proprement, reconnaissance de caractères comprise pour les scans, et garder la trace de la page et de la section d'origine.",
                "Découper : taille des passages, chevauchement, découpage par titres, contexte ajouté en tête de chaque passage.",
                "Calculer les représentations numériques des passages (embeddings) et garder le même modèle à l'indexation et à la recherche.",
                "Trois façons de stocker l'index : magasin géré par OpenAI ou par Google, ou table PostgreSQL avec l'extension pgvector.",
                "Recherche par le sens, recherche par mots-clés et combinaison des deux, nombre de passages transmis au modèle.",
                "Exercice de contrôle : le fonds du deuxième jour indexé de deux façons, et le taux de bons passages retrouvés mesuré sur le jeu de questions.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi (technique) : citations, droits, mises à jour et tests automatiques",
            'duree'  => '3 h 30',
            'points' => [
                "Obtenir des citations exploitables par le code : annotations des outils de recherche d'OpenAI et de Google, fonction de citations d'Anthropic.",
                "Filtrer par droits avant la recherche : métadonnées de public et de confidentialité attachées à chaque passage, jamais après coup dans la réponse.",
                "Mettre à jour sans tout reconstruire : ajout, remplacement, suppression, expiration, et réindexation complète quand le modèle d'embeddings change.",
                "Les faiblesses propres aux index de vecteurs selon l'OWASP : fuite entre publics, documents empoisonnés, contradictions entre sources.",
                "Rejouer le jeu de questions automatiquement à chaque mise à jour, et journaliser les questions, les passages retrouvés et les citations rendues.",
                "Exercice de contrôle : une mise à jour simulée (une procédure remplacée, une retirée) suivie du rejeu, avec la décision de mise en service.",
            ],
        ],
        [
            'titre'  => "Revue à distance, un mois plus tard",
            'duree'  => '2 h',
            'points' => [
                "Rejeu du jeu de questions sur l'assistant en service, et comparaison avec les résultats de la formation.",
                "Lecture du journal des questions sans réponse et des réponses signalées comme fausses par les utilisateurs.",
                "Vérification de la première mise à jour réelle du fonds : ce qui a été remplacé, retiré, oublié.",
                "Liste des corrections prioritaires et calendrier de la revue suivante.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Trois jours en six demi-journées, dont une journée technique facultative, puis 2 h de revue à distance'],
        ['l' => 'Public', 'v' => 'Documentation, qualité, support, ressources humaines, juristes internes ; développeurs pour le troisième jour'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, dix personnes au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire votre équipe à la fin de la formation, et que la formation ne couvre-t-elle pas ?",
            'paragraphes' => [
                "Dans beaucoup d'entreprises, la bonne réponse existe déjà : dans une note de service, une procédure qualité, un règlement intérieur, une fiche produit ou un contrat type. Le problème est de la retrouver. On demande au collègue qui sait, on fouille un dossier partagé, on ouvre trois versions du même fichier. Un assistant qui répond à partir de ces documents, en montrant le passage d'où vient sa réponse, peut faire gagner ce temps. Mal construit, il fait pire : il répond avec assurance à partir d'une version périmée, ou montre à un stagiaire un document qui ne le concernait pas.",
                "À la fin des deux premiers jours, chaque participant sait, seul : constituer un jeu de questions réelles avec leur document de référence ; trier, nettoyer et structurer un fonds documentaire avant de le confier à un outil ; monter un assistant dans un projet ChatGPT, un projet Claude ou un notebook NotebookLM ; écrire des instructions qui imposent la citation et le refus quand l'information manque ; vérifier une citation ; mesurer la qualité des réponses avec une grille ; décider qui peut interroger quel fonds ; organiser la mise à jour. Le troisième jour, les profils techniques savent reconstruire la même chaîne en code, avec un index qu'ils maîtrisent.",
                "Ce que la formation ne couvre pas a sa propre page. L'usage quotidien des assistants pour rédiger et résumer relève de la formation <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>. L'appel des API des modèles depuis vos applications, avec la gestion des coûts et des erreurs, est traité dans <a href=\"/formations/integrer-ia-logiciels-existants\">Intégrer l'IA dans ses logiciels existants</a> ; ici, la journée technique ne porte que sur la recherche dans les documents. Les assistants qui agissent dans d'autres outils, l'art d'écrire des consignes en général et le robot branché sur WhatsApp ont chacun leur formation, listée en bas de page.",
                "Enfin, la formation ne livre pas d'assistant clé en main. Elle apprend à votre équipe à le construire et à l'entretenir. Si vous préférez confier sa réalisation, le service d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a> s'en charge ; pour un assistant qui répond à vos clients sur WhatsApp, voyez le service <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbot WhatsApp</a>.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Les deux premiers jours ne demandent aucune compétence en programmation : ils demandent de connaître ses documents et les questions qu'on vous pose. Le troisième jour s'adresse aux personnes qui écrivent du code. Un groupe peut donc réunir le métier et la technique, ce qui est souvent la meilleure configuration.",
            'items' => [
                ['titre' => 'Les gardiens de la documentation', 'texte' => "Responsables qualité, documentalistes, assistants de direction, responsables des procédures : ils savent quel document fait foi et lequel traîne depuis cinq ans. Ce sont eux qui décideront de ce qui entre dans le fonds, et ils sont les premiers à repérer une réponse fausse."],
                ['titre' => 'Les équipes qui répondent aux questions', 'texte' => "Support interne ou client, ressources humaines, service juridique, administration des ventes, informatique de proximité. Elles apportent les questions réelles, avec leur vocabulaire, et deviennent les premiers utilisateurs de l'assistant."],
                ['titre' => 'Le référent IA ou le chef de projet', 'texte' => "Il porte la fiche d'exploitation : public, périmètre, calendrier de mise à jour, seuil d'arrêt. Il suit les deux premiers jours et, s'il en a la base, le troisième."],
                ['titre' => 'Les développeurs, pour le troisième jour', 'texte' => "Ils doivent savoir appeler une API web, lire du JSON et écrire un script en Python, en PHP ou en JavaScript. Une première expérience de PostgreSQL aide pour la partie pgvector. Ceux qui n'ont jamais appelé l'API d'un modèle gagnent à suivre d'abord la formation sur l'intégration de l'IA dans les logiciels existants."],
                ['titre' => 'Le niveau attendu', 'texte' => "Une pratique régulière d'au moins un assistant, ChatGPT, Claude, Gemini ou Copilot, et une aisance avec les fichiers et les dossiers partagés. Un court questionnaire avant la session vérifie ce niveau et propose, si besoin, une heure de mise à niveau."],
                ['titre' => 'Le matériel', 'texte' => "Un ordinateur par participant, un navigateur à jour, une connexion stable, un compte Google pour NotebookLM et un compte ChatGPT ou Claude. Les versions gratuites suffisent pour apprendre, avec des limites de taille décrites plus bas ; le troisième jour demande en plus un environnement de développement et des clés d'API de test au nom de l'entreprise."],
                ['titre' => 'Ce qui est préparé avant', 'texte' => "Un fonds de vingt à cinquante documents réels choisis avec le métier, copiés et débarrassés des données personnelles qui n'ont rien à y faire, et une première liste d'une trentaine de questions que les collègues posent vraiment, avec le document qui contient la réponse."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce qu'un assistant RAG, et quand n'en a-t-on pas besoin ?",
            'paragraphes' => [
                "RAG est le sigle anglais de génération augmentée par la récupération. Le mot savant cache un fonctionnement simple, en deux temps. D'abord, le système cherche dans vos documents les quelques passages qui semblent parler de la question. Ensuite, il transmet ces passages au modèle de langage, avec la consigne de rédiger sa réponse à partir d'eux seuls et d'indiquer d'où vient chaque affirmation. Le modèle ne connaît pas vos documents ; il les lit au moment de répondre, comme un collègue à qui l'on tendrait trois pages photocopiées.",
                "Cette architecture a une conséquence que les participants retiennent vite : la réponse ne peut pas être meilleure que les passages retrouvés. Si la recherche ramène la procédure de 2021 au lieu de celle de 2025, le modèle rédigera une réponse propre, citée, et fausse. La qualité d'un assistant documentaire se joue donc d'abord dans le fonds et dans la recherche, bien avant le choix du modèle.",
                "Il arrive qu'on n'ait pas besoin de recherche du tout. Dans son article sur la récupération contextuelle publié le 19 septembre 2024, Anthropic indique qu'une base de connaissances de moins de 200 000 jetons, soit environ 500 pages, peut être placée entière dans la consigne du modèle. Un règlement intérieur, un catalogue de procédures d'une centaine de pages ou une convention collective tiennent dans un simple projet. La recherche devient nécessaire quand le fonds grossit, quand les publics diffèrent ou quand il faut des citations au passage près.",
                "Les outils sans code font d'ailleurs ce basculement eux-mêmes. L'aide de Claude explique que, sur les forfaits payants, un projet passe en mode RAG quand ses connaissances approchent de la limite du contexte, ce qui multiplie sa capacité par dix au plus. L'aide de NotebookLM précise que, lorsqu'un notebook contient de nombreuses sources, l'outil récupère les informations les plus pertinentes pour la question, puis génère sa réponse à partir d'elles. Savoir ce qui se passe sous le capot aide à comprendre pourquoi une question vague donne une réponse vague.",
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur les documents de l'entreprise ?",
            'items' => [
                ['titre' => 'Le jeu de questions de référence', 'duree' => 'Avant la session, puis le premier matin', 'texte' => "Chaque service apporte les questions qu'on lui pose réellement, telles qu'elles sont formulées, fautes et raccourcis compris : « combien de jours pour un décès d'un oncle ? », « qui signe un bon de commande au-dessus du plafond ? ». Pour chacune, le métier note le document, la page et la réponse attendue. Ce jeu devient l'étalon de toute la formation, puis de l'assistant en service."],
                ['titre' => "Le tri du fonds", 'duree' => '1 h 30', 'texte' => "Sur les documents apportés, le groupe repère les doublons, les versions contradictoires, les brouillons jamais validés et les fichiers que personne ne sait dater. Ce qui ne peut pas être daté ni attribué à un propriétaire reste dehors. L'exercice surprend toujours : un quart à un tiers des documents d'un dossier partagé ne devraient pas nourrir un assistant."],
                ['titre' => 'Le scan rendu lisible', 'duree' => '45 minutes', 'texte' => "Un PDF scanné est ouvert dans les trois outils pour constater ce qui est lu et ce qui ne l'est pas, puis repassé dans un logiciel de reconnaissance de caractères. On compare les réponses avant et après, sur trois questions dont la réponse se trouve dans ce document."],
                ['titre' => 'Le même fonds dans trois outils', 'duree' => '1 h 30', 'texte' => "Les binômes chargent le fonds nettoyé dans un projet ChatGPT, un projet Claude et un notebook NotebookLM, avec des instructions identiques. Ils passent les trente questions et notent, pour chacune, si le bon passage est cité, si la réponse est fidèle et si l'outil sait dire qu'il ne trouve pas."],
                ['titre' => 'Les questions pièges', 'duree' => '1 heure', 'texte' => "Le formateur glisse des questions hors du fonds, une question dont la réponse figure dans une procédure retirée, deux documents qui se contredisent et une note contenant une consigne cachée adressée à l'assistant. On observe qui se trompe, et pourquoi."],
                ['titre' => 'La mise à jour à blanc', 'duree' => '45 minutes', 'texte' => "Une procédure change : le groupe remplace le fichier, retire l'ancien, rejoue les questions concernées et vérifie que plus aucune réponse ne cite l'ancienne version. Le temps passé à cette opération sert à fixer le rythme réaliste des mises à jour."],
                ['titre' => "La fiche d'exploitation", 'duree' => '45 minutes', 'texte' => "Chaque groupe rédige la page qui décrit son assistant : public, périmètre, outil, propriétaire de chaque famille de documents, fréquence des revues, seuil de bonnes réponses en dessous duquel l'assistant est suspendu, et personne à prévenir quand une réponse est signalée comme fausse."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment préparer chaque type de document avant de le confier à l'assistant ?",
            'legende' => "Traitements enseignés le premier après-midi, par type de document. La dernière colonne indique le contrôle qui permet de savoir si le document est prêt. Les limites citées viennent des aides de Claude, d'OpenAI, de Google et de la documentation des citations d'Anthropic, lues le 5 octobre 2026.",
            'entetes' => ['Type de document', 'Ce qui coince', 'Traitement', 'Contrôle avant indexation'],
            'lignes'  => [
                ['PDF scanné', "Sans couche de texte, il n'est pas lu, ou mal ; la fonction de citations d'Anthropic indique qu'un scan sans texte extractible ne peut pas être cité", "Reconnaissance de caractères, relecture des chiffres et des noms propres", "Copier un paragraphe du PDF dans un éditeur de texte : s'il ne se colle pas, le document n'est pas prêt"],
                ['PDF protégé contre la copie', "L'aide de NotebookLM indique qu'un tel fichier ne peut pas être importé", "Obtenir une version non protégée auprès de son propriétaire", "Import d'essai dans l'outil retenu"],
                ['Document Word ou Google Docs', "Révisions non acceptées, commentaires, notes de bas de page ; NotebookLM n'importe ni les notes de bas de page ni les commentaires des fichiers Google", "Accepter les révisions, intégrer dans le texte ce qui compte, supprimer les commentaires", "Le texte lu par l'outil correspond à la version signée"],
                ['Tableur', "Lignes sorties de leur contexte, en-têtes perdus ; NotebookLM limite une feuille Google Sheets à 100 000 jetons", "Un onglet par sujet, en-têtes explicites, ou conversion en fiches rédigées", "Une question sur une valeur précise retrouve la bonne ligne"],
                ['Présentation', "Phrases tronquées, sens porté par le schéma ; hors PDF, Claude ne lit pas les images intégrées", "Ajouter des notes rédigées ou réécrire le contenu utile en texte", "Les questions sur le schéma trouvent une réponse écrite"],
                ['Procédure en plusieurs versions', "L'assistant cite l'ancienne autant que la nouvelle", "Une seule version en vigueur dans le fonds, date et numéro de version en première ligne", "Aucune réponse ne cite une version retirée"],
                ['Foire aux questions informelle', "Réponses dispersées dans des courriels et des messages", "Fiches courtes, une question par bloc, validées par le métier", "Chaque fiche porte un propriétaire et une date"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment découper un document pour que la recherche trouve le bon passage ?",
            'intro' => "Dans la version technique, chaque document est découpé en passages que l'on indexe un par un. Dans la version sans code, l'outil découpe à votre place, mais la structure du document décide quand même de ce qu'il retrouvera. Les mêmes règles valent donc pour tout le monde.",
            'items' => [
                ['titre' => 'Un passage, une idée', 'texte' => "Un passage qui mélange la procédure d'achat et la politique de déplacement sera ramené pour les deux sujets et ne répondra bien à aucun. Des titres clairs, une section par sujet et des paragraphes courts font l'essentiel du travail, avant toute technique."],
                ['titre' => 'Une taille raisonnable', 'texte' => "La documentation d'OpenAI fixe par défaut des passages de 800 jetons avec un chevauchement de 400, réglables entre 100 et 4 096 jetons, le chevauchement ne devant pas dépasser la moitié du passage. Ces valeurs sont un point de départ : on les ajuste en mesurant, sur le jeu de questions, combien de bons passages sont retrouvés."],
                ['titre' => 'Le contexte en tête de chaque passage', 'texte' => "Un passage isolé qui dit « le délai est de quinze jours » ne sert à rien si l'on ne sait pas de quelle procédure il vient. Ajouter le titre du document, la section et la date en tête de chaque passage aide la recherche. Anthropic a mesuré, dans son article de septembre 2024, qu'ajouter un court contexte à chaque passage réduisait de 49 % les échecs de récupération parmi les vingt premiers passages, et de 67 % avec un reclassement."],
                ['titre' => 'Les tableaux gardés entiers', 'texte' => "Un barème coupé en deux perd ses en-têtes et devient illisible. Les petits tableaux restent dans un seul passage ; les grands sont transformés en lignes rédigées qui répètent l'en-tête, du type « catégorie B, mission de plus de trois jours : indemnité journalière de… »."],
                ['titre' => 'Les fiches de questions découpées une à une', 'texte' => "Une foire aux questions se découpe à la question, jamais au nombre de jetons. Avec la fonction de citations d'Anthropic, chaque fiche peut être transmise comme un bloc de contenu personnalisé, que l'outil cite tel quel sans le redécouper."],
                ['titre' => 'Des métadonnées à chaque passage', 'texte' => "Titre, date de validité, propriétaire, public autorisé, niveau de confidentialité : ces étiquettes servent à filtrer la recherche et à afficher une citation lisible. Sans elles, impossible de dire à un utilisateur que sa réponse vient de la note du 3 mars, ni de lui cacher celle qui ne le concerne pas."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Projet ChatGPT, projet Claude ou NotebookLM : quel outil sans code pour commencer ?",
            'options'  => ['Projet ChatGPT', 'Projet Claude', 'NotebookLM (Gemini Notebook)'],
            'criteres' => [
                ['critere' => 'Volume de documents', 'valeurs' => ["5 fichiers par projet en gratuit, 25 en Go et Plus, 40 en Pro, Business et Enterprise ; 10 fichiers téléversés à la fois", "Jusqu'à 5 projets en gratuit ; fichiers de 30 Mo au plus, en nombre libre tant que le tout tient dans le contexte, ou jusqu'à dix fois plus en mode RAG sur les forfaits payants", "50 sources par notebook en version gratuite, 100 avec Google AI Plus, 300 avec Google AI Pro ; jusqu'à 500 000 mots ou 200 Mo par source"]],
                ['critere' => 'Ce que l\'outil lit', 'valeurs' => ["Hors Enterprise, le texte seulement : les images des documents sont écartées", "Le texte seulement, sauf les PDF traités de façon multimodale", "Texte, PDF, documents Office, pages web, vidéos YouTube sous-titrées, audio transcrit"]],
                ['critere' => 'Citations', 'valeurs' => ["L'aide des projets ne décrit pas de citation au passage près : les instructions exigent le nom du fichier et la section, que l'on vérifie dans la source", "Même situation : l'aide des projets ne décrit pas de citation au passage près, d'où des instructions qui imposent titre et section","Passages exacts cités, à survoler ou à ouvrir dans leur contexte ; l'aide précise qu'une source trop courte est citée en entier"]],
                ['critere' => 'Mise à jour des documents', 'valeurs' => ["Fichiers figés une fois téléversés ; un lien Google Drive ajouté au projet n'est pas synchronisé", "Fichiers figés : on remplace à la main", "Sources Google Drive synchronisées toutes les deux ou trois minutes ; fichiers téléversés et pages web figés"]],
                ['critere' => 'Partage et droits', 'valeurs' => ["Projet partagé : tous les membres voient et téléchargent les fichiers", "Partage réservé aux forfaits Team et Enterprise ; « Can view » donne accès aux connaissances du projet", "Lecteur ou éditeur ; le lecteur a accès en lecture à toutes les sources, et la vue réduite au chat ne retire pas cet accès"]],
                ['critere' => 'Données et entraînement', 'valeurs' => ["Pas d'entraînement par défaut sur Business, Enterprise et Edu ; possible sur les comptes personnels si l'option est activée", "À vérifier dans les réglages de confidentialité du compte et dans les conditions de l'offre retenue", "Données non utilisées pour entraîner le modèle, sauf commentaires envoyés ; pas de relecture humaine pour les comptes Workspace"]],
            ],
            'verdict' => "Pour un premier assistant documentaire, NotebookLM est le plus démonstratif grâce à ses citations au passage près et à la synchronisation avec Google Drive. Un projet ChatGPT ou Claude convient mieux à une équipe déjà équipée de ces outils. Dans les trois cas, un projet partagé se pense comme un dossier partagé : quiconque peut l'interroger peut lire ce qu'il contient.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles options techniques pour bâtir son propre index, et que gère-t-on soi-même ?",
            'legende' => "Les quatre montages comparés le troisième jour, d'après les documentations d'OpenAI, de Google, d'Anthropic, de pgvector et d'Ollama lues le 5 octobre 2026. Les coûts sont ceux des éditeurs, en dollars américains hors taxes ; ils se paient sur les comptes de l'entreprise, jamais au formateur.",
            'entetes' => ['Montage', "Ce que l'éditeur gère", 'Ce que votre équipe gère', 'Coût publié', 'Quand le choisir'],
            'lignes'  => [
                ["File Search d'OpenAI", "Découpage, embeddings, index, recherche par le sens et par mots-clés, citations sous forme d'annotations", "Choix des fichiers, attributs de filtrage (16 clés au plus par fichier), expiration des magasins, journal", "Stockage gratuit jusqu'à 1 Go, puis 0,10 $ par Go et par jour ; 2,50 $ pour 1 000 appels de l'outil", "Une équipe qui utilise déjà l'API d'OpenAI et veut aller vite"],
                ["File Search de l'API Gemini", "Découpage, index, recherche, citations ; stockage et embeddings des questions gratuits", "Métadonnées et filtres, conservation des originaux : le fichier importé est effacé au bout de 48 heures, les données indexées restent jusqu'à suppression", "Indexation au prix des embeddings, 0,20 $ par million de jetons de texte avec Gemini Embedding 2", "Un fonds volumineux, avec un magasin de moins de 20 Go comme le recommande Google"],
                ["Index maison et citations d'Anthropic", "Citations au passage près dans la réponse, sur des documents ou des blocs que vous fournissez", "Toute la recherche : extraction, découpage, embeddings, stockage, sélection des passages", "Prix des jetons du modèle ; le texte cité ne compte pas dans les jetons de sortie", "Une exigence forte sur la traçabilité de chaque phrase de la réponse"],
                ["PostgreSQL avec pgvector", "Rien : extension libre, version 0.8.7 au 5 octobre 2026", "Tout, mais dans votre base : index HNSW ou IVFFlat, distance cosinus, filtres SQL, recherche plein texte combinée", "Le serveur, plus les embeddings : 0,02 $ par million de jetons chez OpenAI avec text-embedding-3-small, ou rien avec un modèle local servi par Ollama", "Des données qui doivent rester chez vous, ou un logiciel qui tourne déjà sur PostgreSQL"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se déroule la journée technique, sans refaire la formation sur les API ?",
            'paragraphes' => [
                "La journée technique part d'un postulat : les développeurs savent déjà appeler un modèle. Elle ne revient ni sur les clés, ni sur la gestion des erreurs, ni sur le calcul du coût au jeton. Elle se concentre sur ce qui est propre à la recherche documentaire : transformer des fichiers en passages propres, les représenter, les retrouver, les citer, les filtrer par droits et les tenir à jour. Le même fonds que les deux premiers jours sert de matière, avec le même jeu de questions comme juge.",
                "Le matin, l'équipe construit deux index du même fonds : l'un dans un magasin géré, File Search d'OpenAI ou de Google, l'autre dans une table PostgreSQL avec pgvector. Les embeddings du second sont calculés soit par une API, soit en local avec Ollama, dont la documentation rappelle une règle souvent oubliée : utiliser le même modèle d'embeddings pour indexer et pour interroger. Changer de modèle impose donc de tout réindexer, ce qui se planifie comme une migration.",
                "L'après-midi porte sur la confiance. Les citations sont extraites par le code et affichées avec le titre, la page et la date du document. Les filtres de droits sont posés avant la recherche. Puis le jeu de questions est rejoué automatiquement, et l'équipe compare ses deux index sur des chiffres mesurés chez elle : part des questions où le bon passage figure dans les cinq premiers résultats, part des citations exactes, part des refus corrects.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres faut-il connaître avant de construire un assistant sur ses documents ?",
            'items' => [
                ['valeur' => '200 000 jetons', 'libelle' => "Taille, soit environ 500 pages, en dessous de laquelle Anthropic indique qu'une base de connaissances peut être placée entière dans la consigne, sans recherche (article du 19 septembre 2024)", 'source' => 'Anthropic, Contextual Retrieval', 'url' => 'https://www.anthropic.com/engineering/contextual-retrieval'],
                ['valeur' => '67 %', 'libelle' => "Baisse du taux d'échec de récupération parmi les vingt premiers passages mesurée par Anthropic en combinant contexte ajouté aux passages, recherche par mots-clés et reclassement (49 % sans reclassement)", 'source' => 'Anthropic, Contextual Retrieval', 'url' => 'https://www.anthropic.com/engineering/contextual-retrieval'],
                ['valeur' => '800 / 400', 'libelle' => "Taille par défaut des passages et chevauchement, en jetons, dans les magasins de vecteurs d'OpenAI, au 5 octobre 2026", 'source' => 'OpenAI, récupération et magasins de vecteurs', 'url' => 'https://developers.openai.com/api/docs/guides/retrieval'],
                ['valeur' => '0,02 $', 'libelle' => "Prix d'un million de jetons pour le modèle d'embeddings text-embedding-3-small d'OpenAI, au 5 octobre 2026 : indexer un fonds de quelques milliers de pages coûte quelques centimes", 'source' => "OpenAI, tarifs de l'API", 'url' => 'https://developers.openai.com/api/docs/pricing'],
                ['valeur' => '50 sources', 'libelle' => "Nombre de sources par notebook dans la version gratuite de NotebookLM, avec 50 questions de discussion par jour, au 5 octobre 2026", 'source' => 'Aide NotebookLM, forfaits et limites', 'url' => 'https://support.google.com/notebooklm/answer/16213268?hl=fr'],
                ['valeur' => '40 fichiers', 'libelle' => "Plafond de fichiers par projet ChatGPT sur les offres Pro, Business, Enterprise et Edu, contre 5 en gratuit et 25 en Go et Plus, au 5 octobre 2026", 'source' => 'Aide OpenAI, projets dans ChatGPT', 'url' => 'https://help.openai.com/en/articles/10169521-projects-in-chatgpt'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment obtenir des réponses avec des citations dignes de confiance ?",
            'paragraphes' => [
                "Une citation n'est utile que si l'utilisateur la lit. La formation apprend d'abord ce geste : ouvrir le passage cité et vérifier qu'il dit bien ce que la réponse affirme, ni plus, ni moins. Les participants découvrent vite les trois défauts classiques : la citation exacte d'un document périmé, la citation juste suivie d'une conclusion que le passage ne contient pas, et la citation décorative qui renvoie à un document entier sans désigner le passage. L'aide de NotebookLM signale d'ailleurs que, lorsqu'une source est trop courte, l'outil cite le document entier plutôt qu'un extrait.",
                "Les instructions du projet font la moitié du travail. Elles demandent de répondre uniquement à partir des documents fournis, de citer pour chaque affirmation le titre et la section, et de répondre « je ne trouve pas cette information dans les documents » plutôt que de compléter de mémoire. La documentation d'Anthropic sur la réduction des hallucinations recommande exactement ces gestes : autoriser le modèle à dire qu'il ne sait pas, s'appuyer sur des citations mot pour mot, retirer toute affirmation qui ne trouve pas de passage à l'appui.",
                "Dans la version technique, les citations deviennent des données. Les outils de recherche d'OpenAI et de Google les rendent sous forme d'annotations rattachées aux fichiers ; la fonction de citations d'Anthropic découpe les documents en phrases et renvoie le texte exact cité, avec la page pour un PDF. Deux limites sont étudiées : un scan sans texte n'est pas citable, et Anthropic précise que les citations ne peuvent pas être combinées avec les sorties structurées en JSON. Il faut donc choisir, pour chaque usage, entre une réponse citée et une réponse au format imposé.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment évaluer les réponses de l'assistant avant de l'ouvrir à toute l'équipe ?",
            'legende' => "Grille utilisée pendant la formation et laissée à l'entreprise. Les seuils de mise en service ne sont pas fixés par le formateur : ils se décident avec le métier, selon la gravité d'une erreur dans le domaine concerné.",
            'entetes' => ['Critère', 'Question à se poser', 'Comment le mesurer', 'Ce qui se corrige'],
            'lignes'  => [
                ['Passage retrouvé', 'Le passage qui contient la réponse fait-il partie de ceux transmis au modèle ?', "Comparer, question par question, le document de référence noté par le métier et les sources citées", 'Structure du document, découpage, métadonnées, recherche par mots-clés en complément'],
                ['Fidélité', "La réponse dit-elle ce que dit le passage, sans ajout ni omission qui change le sens ?", 'Lecture par une personne du métier, notée juste, partielle ou fausse', 'Instructions, longueur de réponse demandée, choix du modèle'],
                ['Citation exacte', 'Chaque affirmation renvoie-t-elle au bon document et au bon endroit ?', 'Ouvrir chaque citation sur un échantillon de réponses', 'Format des sources, citations au passage près plutôt qu\'au document'],
                ['Refus correct', "Quand le fonds ne contient pas la réponse, l'assistant le dit-il ?", 'Dix questions hors fonds glissées dans le jeu', 'Instructions de refus, filtrage des passages trop éloignés de la question'],
                ['Fraîcheur', 'La réponse vient-elle de la version en vigueur ?', 'Questions dont la réponse a changé lors de la dernière mise à jour', 'Retrait des versions périmées, date en tête de chaque document'],
                ['Droits', "Un profil restreint obtient-il une information qu'il ne devrait pas voir ?", 'Mêmes questions posées avec deux comptes de droits différents', 'Séparation des fonds par public, filtres appliqués avant la recherche'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui peut voir quoi : comment respecter les droits d'accès aux documents ?",
            'intro' => "C'est la question que les directions posent en premier, et la plus mal traitée dans les assistants montés à la hâte. La règle enseignée tient en une phrase : l'assistant ne doit jamais pouvoir montrer à quelqu'un un passage que cette personne n'aurait pas le droit d'ouvrir elle-même.",
            'items' => [
                ['titre' => 'Dans les outils sans code, le droit est celui du projet', 'texte' => "Les trois outils partagent un projet entier, pas un document. L'aide de ChatGPT indique que tous les membres d'un projet partagé peuvent voir et télécharger ses fichiers ; celle de NotebookLM, que le lecteur a accès en lecture à toutes les sources, même quand le partage est limité à la vue de discussion. On crée donc un projet par public : un pour tous les salariés, un pour l'encadrement, un pour les ressources humaines."],
                ['titre' => 'Ce qui ne doit jamais entrer dans un fonds commun', 'texte' => "Grilles de salaires, dossiers individuels, contrats de clients nommés, pièces de contentieux, données de santé, mots de passe et procédures de sécurité. La règle se décide avant le chargement, document par document, et figure dans la fiche d'exploitation."],
                ['titre' => 'Dans la version technique, filtrer avant de chercher', 'texte' => "Chaque passage porte le public autorisé et le niveau de confidentialité de son document. La recherche reçoit le profil de l'utilisateur et ne parcourt que les passages permis : attributs de filtrage chez OpenAI, métadonnées chez Google, clause SQL avec pgvector. Filtrer la réponse après coup est trop tard : le modèle a déjà lu le passage interdit."],
                ['titre' => 'Les faiblesses propres aux index', 'texte' => "Le référentiel OWASP 2025 pour les applications de modèles de langage consacre un risque entier, LLM08, aux faiblesses des vecteurs et des embeddings : accès non autorisé, fuite d'un public à l'autre dans un index partagé, document empoisonné qui modifie les réponses, contradictions entre sources. Il recommande des contrôles d'accès fins, des sources authentifiées, la classification des données et un journal des recherches."],
                ['titre' => 'Le document piégé', 'texte' => "Un fichier déposé dans le fonds peut contenir une phrase adressée à l'assistant, du type « ignore les consignes précédentes ». Seules des personnes identifiées alimentent le fonds, chaque ajout est relu, et l'exercice des questions pièges montre comment l'assistant réagit."],
                ['titre' => 'La trace des questions', 'texte' => "Un journal des questions et des passages consultés permet de répondre à un salarié qui conteste une réponse, et de repérer une recherche anormale. Il contient des données personnelles : sa durée de conservation et ses lecteurs se décident par écrit."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment tenir l'assistant à jour sans qu'il cite des documents périmés ?",
            'items' => [
                ['titre' => 'Un propriétaire par famille de documents', 'duree' => 'Dès la mise en service', 'texte' => "Le responsable qualité pour les procédures, les ressources humaines pour le règlement et les notes RH, la direction commerciale pour les conditions de vente. Le propriétaire est la seule personne qui ajoute, remplace ou retire un document de sa famille."],
                ['titre' => 'Remplacer, jamais empiler', 'duree' => 'À chaque nouvelle version', 'texte' => "La nouvelle version prend la place de l'ancienne, qui sort du fonds le même jour. Garder les deux « pour l'historique » est la première cause de réponses contradictoires. L'archive vit ailleurs, hors de portée de l'assistant."],
                ['titre' => 'Savoir ce que fait chaque outil', 'duree' => 'Au choix de l\'outil', 'texte' => "Dans NotebookLM, une source Google Drive se synchronise toute seule, et devient inaccessible si son accès est retiré ; un fichier téléversé reste figé. Dans un projet ChatGPT, un lien Google Drive n'est pas synchronisé à l'avance. Avec File Search de Google, le fichier importé disparaît au bout de 48 heures : l'original se garde chez vous."],
                ['titre' => 'Rejouer le jeu de questions', 'duree' => 'Après chaque mise à jour', 'texte' => "Les questions touchées par le changement sont rejouées, puis l'ensemble une fois par mois. Une baisse du nombre de bonnes réponses se voit tout de suite, avant que les utilisateurs ne la découvrent."],
                ['titre' => 'Lire les questions sans réponse', 'duree' => 'Chaque mois', 'texte' => "Les « je ne trouve pas » et les réponses signalées comme fausses désignent les documents qui manquent ou qui sont mal écrits. Ce journal alimente la liste des fiches à rédiger par le métier."],
                ['titre' => 'Planifier les migrations', 'duree' => 'Quand le modèle change', 'texte' => "Un changement de modèle d'embeddings impose de réindexer tout le fonds ; un changement de modèle de réponse impose de rejouer tout le jeu de questions. Les deux se préparent comme une mise en production, avec une date et un retour arrière possible."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un assistant qui cite ses sources peut-il encore engager l'entreprise sur une erreur ?",
            'texte' => "Parce que la citation prouve d'où vient une phrase, pas qu'elle est juste ni qu'elle est à jour. Le référentiel OWASP 2025 range le risque de désinformation (LLM09) parmi les dix principaux et rappelle que la récupération dans des sources vérifiées réduit les hallucinations sans dispenser de la relecture humaine sur les sujets sensibles. L'histoire d'<a href=\"/histoires/air-canada-chatbot\">Air Canada et de son chatbot</a> illustre le prix d'un écart entre ce que dit l'assistant et ce que dit la politique officielle de l'entreprise : c'est l'entreprise qui a payé. Pour les questions qui engagent un droit, un paiement ou une sanction, l'assistant oriente vers le document et la personne compétente ; il ne tranche pas.",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que l'assistant vive après la session ?",
            'intro' => "Un assistant documentaire ne se juge pas le jour de la démonstration, mais trois mois plus tard, quand les procédures ont changé deux fois. La méthode est construite pour ce moment-là.",
            'items' => [
                ['titre' => 'Dix personnes au plus', 'texte' => "Au-delà, le formateur ne peut plus relire les fonds et les grilles de chacun. Pour la journée technique, huit développeurs au plus, en binômes, chacun sur son poste."],
                ['titre' => 'Vos documents, vos questions', 'texte' => "Aucun exercice ne se fait sur un fonds de démonstration. Les questions viennent du terrain, avec leurs fautes et leurs sigles, parce que c'est ainsi que les collègues interrogeront l'assistant."],
                ['titre' => 'Le métier et la technique dans la même salle', 'texte' => "Le responsable qualité explique pourquoi une réponse est fausse, le développeur comprend ce que la recherche a ramené. Les deux premiers jours leur donnent un vocabulaire commun, qui évite les assistants techniquement réussis que le métier rejette."],
                ['titre' => 'Mesurer plutôt que promettre', 'texte' => "Chaque réglage, chaque outil, chaque découpage est jugé sur le même jeu de questions. Aucun taux de réussite n'est annoncé d'avance : il se mesure sur votre fonds, et c'est ce chiffre qui décide de la mise en service."],
                ['titre' => 'Des supports qui appartiennent à l\'entreprise', 'texte' => "Le jeu de questions annoté, la grille d'évaluation, la règle de nommage des documents, la fiche d'exploitation, les instructions des projets et, pour la journée technique, les scripts d'indexation et de rejeu, remis dans un format modifiable."],
                ['titre' => 'Une revue un mois après', 'texte' => "Deux heures à distance pour rejouer le jeu de questions sur l'assistant réel, lire le journal des questions sans réponse et vérifier que la première mise à jour s'est faite selon la procédure."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils utilise-t-on pendant la formation, et que coûtent-ils chez leurs éditeurs ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée ; les prix de Google AI ont été affichés en euros, pour la France. Ces sommes ne font pas partie du prix de la formation, et aucun abonnement n'est à acheter avant la session.",
            'entetes' => ['Outil', 'Usage en formation', "Prix de l'éditeur", 'À savoir pour un assistant documentaire'],
            'lignes'  => [
                ['NotebookLM (Gemini Notebook)', 'Assistant sans code avec citations au passage près, synchronisation Google Drive', 'Gratuit avec un compte Google ; limites relevées avec Google AI Plus à 4,99 € par mois et Google AI Pro à 21,99 € par mois', '100 notebooks et 50 sources par notebook en gratuit ; chaque notebook est indépendant et ne peut pas interroger les autres'],
                ['ChatGPT (OpenAI)', 'Projet avec fichiers et instructions', 'Gratuit ; Go 8 $ par mois ; Plus 20 $ par mois ; Business 20 $ par utilisateur et par mois en annuel, 25 $ au mois', 'Fichiers de 512 Mo au plus, 2 millions de jetons par fichier texte, 25 Go par utilisateur et 100 Go par organisation'],
                ['Claude (Anthropic)', 'Projet avec connaissances et instructions', 'Gratuit (5 projets) ; Pro 17 $ par mois en annuel ou 20 $ au mois ; Team 20 $ par siège et par mois en annuel, 25 $ au mois', 'Fichiers de projet de 30 Mo au plus ; mode RAG automatique sur les forfaits payants ; partage réservé à Team et Enterprise'],
                ['File Search (OpenAI ou Google)', 'Index géré pour la journée technique', 'OpenAI : 1 Go gratuit, puis 0,10 $ par Go et par jour, et 2,50 $ pour 1 000 appels ; Google : stockage gratuit, indexation à 0,20 $ par million de jetons', 'Documents de 512 Mo et 5 millions de jetons au plus chez OpenAI, de 100 Mo chez Google'],
                ['PostgreSQL et pgvector', 'Index maison dans une base que vous contrôlez', 'Logiciels libres ; seul le serveur se paie', 'Index HNSW ou IVFFlat, filtres SQL, recherche plein texte de PostgreSQL pour combiner sens et mots-clés'],
                ['Ollama', 'Calcul des embeddings en local', 'Logiciel gratuit ; le coût est celui de la machine', 'Modèles embeddinggemma, qwen3-embedding ou all-minilm ; aucun texte ne quitte le serveur'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi sert un assistant documentaire selon le métier, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Institution de microfinance, à Cotonou', 'probleme' => "Les agents de guichet interrogent sans cesse le siège sur les conditions d'un produit, les pièces exigées pour ouvrir un compte ou la conduite à tenir face à une opération inhabituelle. Les réponses varient selon l'interlocuteur.", 'solution' => "Un fonds limité aux fiches produits et aux procédures en vigueur, un notebook par public (agents, encadrement), des réponses qui citent la procédure et renvoient au service conformité pour tout cas douteux. Les données des clients n'entrent jamais dans le fonds."],
                ['secteur' => "Cabinet d'expertise comptable, à Dakar", 'probleme' => "Les collaborateurs recherchent dans des notes internes et des circulaires la façon dont le cabinet traite tel cas fiscal ou comptable, et les notes se contredisent d'une année à l'autre.", 'solution' => "Tri des notes par exercice, une seule doctrine en vigueur par sujet, date en tête de chaque fiche, et questions pièges sur des points qui ont changé. L'assistant cite la note du cabinet ; il ne remplace ni le texte officiel ni l'avis de l'associé."],
                ['secteur' => 'Clinique privée, à Abidjan', 'probleme' => "Les infirmiers de nuit cherchent un protocole d'hygiène ou une procédure d'admission dans des classeurs et des fichiers éparpillés.", 'solution' => "Un fonds limité aux protocoles validés par la direction médicale, sans aucun dossier de patient, des réponses qui renvoient toujours au protocole signé, et une revue mensuelle avec le responsable qualité. Pour un geste de soin, l'assistant indique où se trouve le protocole ; la décision reste au soignant."],
                ['secteur' => 'ONG avec bureaux au Burkina Faso et au Niger', 'probleme' => "Les manuels de procédures des bailleurs et les règles d'achat internes se superposent, et les équipes de terrain ont une connexion irrégulière.", 'solution' => "Un notebook par bailleur pour ne pas mélanger leurs règles, des questions formulées par les logisticiens eux-mêmes, et les réponses importantes enregistrées dans des notes consultables quand le réseau tombe."],
                ['secteur' => 'Éditeur de logiciel, à Lomé', 'probleme' => "Le support répond aux mêmes questions sur le paramétrage du produit, alors que la documentation existe mais que personne ne la retrouve.", 'solution' => "Index technique dans pgvector alimenté par la documentation en Markdown, citations affichées avec le lien vers la page, réindexation à chaque nouvelle version du logiciel, et liste des questions sans réponse transmise à l'équipe qui écrit la documentation."],
                ['secteur' => 'PME industrielle en Belgique ou en France', 'probleme' => "Le service après-vente cherche les fiches techniques et les conditions de garantie de produits livrés depuis dix ans, et le délégué à la protection des données veut savoir où partent les documents.", 'solution' => "Fiches triées par génération de produit, aucune donnée de client dans le fonds, choix d'un outil professionnel dont les conditions sur les données sont vérifiées, et accès réservé à l'équipe après-vente."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans vos locaux, en inter-entreprises, à distance ou en hybride : quel format retenir ?",
            'legende' => "Le format se choisit au premier échange, selon la taille du groupe, la sensibilité des documents et la présence de profils techniques. Dans tous les cas, le jeu de questions et le fonds viennent de votre organisation, sauf en inter-entreprises où chacun travaille sur ses propres documents, sans les partager.",
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une organisation qui veut un premier assistant documentaire sur un périmètre précis', 'Deux jours, plus le troisième pour les développeurs', 'Dans vos locaux, sur votre fonds, avec le métier et la technique dans la même salle'],
                ['Inter-entreprises', "Une ou deux personnes par structure, souvent responsables qualité ou documentation", 'Deux jours', "Fonds d'exercice commun le matin, puis chacun sur une copie de ses propres documents, sans rien mettre en commun"],
                ['À distance', 'Équipes réparties entre plusieurs sites ou pays', 'Six séances de deux heures et demie, plus deux pour la partie technique', 'Visioconférence, partage d\'écran, exercices à terminer entre deux séances'],
                ['Hybride', "Équipes qui veulent lancer ensemble puis construire à leur rythme", 'Deux jours sur place, puis séances à distance', "Préparation du fonds et outils sans code en salle ; évaluation, mise à jour et partie technique à distance, sur l'assistant en construction"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Le prix est fixé sur devis, après un premier échange et un cadrage gratuits sur votre fonds documentaire, votre équipe et le périmètre visé. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements et les consommations d'API restent au nom de l'entreprise et ne sont pas compris dans le prix.",
            'items'      => [
                ['offre' => 'Parcours sans code', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur votre fonds', 'Jeu de questions annoté et grille d\'évaluation', 'Assistant monté dans l\'outil retenu', 'Fiche d\'exploitation et procédure de mise à jour']],
                ['offre' => 'Journée technique', 'prix' => 'Sur devis', 'inclus' => ['Deux demi-journées pour les développeurs', 'Deux index comparés sur le même fonds', 'Filtres de droits, citations et rejeu automatique', 'Scripts remis dans votre dépôt']],
                ['offre' => 'Revue à un mois', 'prix' => 'Sur devis', 'inclus' => ['Deux heures à distance', 'Rejeu du jeu de questions sur l\'assistant réel', 'Lecture du journal des questions sans réponse', 'Corrections prioritaires']],
            ],
            'variations' => [
                'Le nombre de participants, et la présence ou non de la journée technique.',
                'Le volume et l\'état du fonds documentaire : documents propres ou scans à traiter, une famille de documents ou plusieurs.',
                'La sensibilité des documents, qui peut imposer une préparation plus longue avant la session.',
                'Le format et le lieu : vos locaux, une salle, un déplacement hors de Cotonou, la visioconférence.',
                'La revue à un mois et le suivi retenu ensuite.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "C'est possible dans certains pays, jamais automatique, et toujours décidé par le fonds lui-même. En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> permet de déposer un plan de formation à toute entreprise qui justifie du paiement régulier des deux taxes ; sa page, consultée le 5 octobre 2026, précise que la liquidation intervient après le suivi et le contrôle de ses services et l'approbation de sa Commission permanente. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> ouvre un guichet pour le personnel des entreprises et des organisations professionnelles, avec une demande de financement en ligne.",
                "Au Bénin, le FODEFCA tient ses statuts du <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>, qui en fait le principal guichet de financement de la formation continue du secteur privé ; ses conditions se demandent directement à ses services. En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des OPCO. Richard SALANON n'a pas cette certification et n'est agréé par aucun fonds : budgétez la session sans prise en charge, et interrogez votre fonds par écrit, programme et devis en main, avant de signer.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les mois qui suivent, et comment les éviter ?",
            'intro' => "Les assistants documentaires échouent rarement le premier jour. Ils se dégradent doucement, au fil des mises à jour oubliées et des usages qui débordent du périmètre. Chacune de ces dérives est travaillée pendant la session.",
            'items' => [
                ['titre' => 'Verser tout le dossier partagé', 'texte' => "Par souci d'exhaustivité, on charge des centaines de fichiers d'un coup. L'assistant ramène alors des brouillons, des doublons et des documents périmés. Le fonds se construit par familles, chacune triée et datée avant d'entrer."],
                ['titre' => 'Croire la réponse parce qu\'elle est citée', 'texte' => "La présence d'une référence rassure, et plus personne n'ouvre le passage. On garde l'habitude, au moins pour les questions qui engagent l'entreprise, de vérifier la citation, et l'échantillon mensuel du jeu de questions le rappelle à tous."],
                ['titre' => 'Oublier de retirer l\'ancienne version', 'texte' => "La nouvelle procédure est ajoutée, l'ancienne reste, et l'assistant cite l'une ou l'autre selon la formulation de la question. La règle « remplacer, jamais empiler » et le rejeu après chaque mise à jour évitent cette dérive."],
                ['titre' => 'Partager un projet trop largement', 'texte' => "Un projet monté pour la direction est ouvert à toute l'équipe parce que l'assistant donne de bons résultats. Avec lui partent les documents qu'il contient. Un nouveau public signifie un nouveau projet, avec son propre fonds."],
                ['titre' => 'Étendre le périmètre sans réévaluer', 'texte' => "L'assistant des procédures qualité reçoit, un mois plus tard, les notes RH et les conditions de vente. Le jeu de questions, lui, n'a pas bougé. Chaque nouvelle famille de documents arrive avec ses questions de référence et sa propre évaluation."],
                ['titre' => 'Ne lire aucune question sans réponse', 'texte' => "Les « je ne trouve pas » s'accumulent sans que personne n'en tire la liste des documents manquants. Le journal mensuel de ces questions est le meilleur outil de pilotage de la documentation, à condition qu'un propriétaire le lise."],
                ['titre' => 'Changer de modèle sans rejouer', 'texte' => "Un nouveau modèle sort, plus rapide ou moins cher, et quelqu'un le branche. Dans la version technique, un changement de modèle d'embeddings sans réindexation rend même la recherche incohérente. Aucun changement ne passe sans réindexation quand elle est nécessaire et sans rejeu du jeu de questions."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langues, données personnelles : que change le contexte local ?",
            'paragraphes' => [
                "Les outils sans code fonctionnent en ligne. Le 5 octobre 2026, la liste des pays où Google rend NotebookLM accessible comprenait le Bénin, la Côte d'Ivoire, le Sénégal, le Togo, le Cameroun et le Burkina Faso. Mais une connexion qui coupe en pleine séance ou qui coûte cher en données mobiles change l'organisation : documents préparés et nettoyés hors ligne, chargement en une fois quand le réseau est bon, réponses importantes enregistrées en notes. Pour les fonds qui ne doivent pas quitter l'entreprise ou pour un réseau trop instable, la version technique avec pgvector et des embeddings calculés en local par Ollama garde la recherche sur un serveur interne.",
                "Les fonds documentaires d'Afrique francophone ont leurs particularités. Les archives papier numérisées à la va-vite y sont fréquentes, d'où l'importance de la reconnaissance de caractères. Les questions des salariés mêlent sigles maison, termes juridiques OHADA et formulations orales ; le jeu de questions doit les reprendre telles quelles. Les documents rédigés en anglais pour un bailleur ou un partenaire peuvent répondre à une question posée en français, mais la citation doit alors être lue par quelqu'un qui maîtrise les deux langues.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> pèse sur deux décisions. Son article 391 subordonne le transfert de données personnelles vers un État tiers à un niveau de protection jugé équivalent par l'Autorité ; or les outils sans code sont hébergés hors du pays. Son article 426 demande des mesures de sécurité appropriées, dont la pseudonymisation et le chiffrement. D'où la règle de la formation : un fonds documentaire décrit l'organisation, pas les personnes, et les documents nominatifs restent dehors.",
                "En Europe, le <a href=\"https://eur-lex.europa.eu/eli/reg/2016/679/oj\">RGPD</a> s'applique aux documents qui contiennent des données personnelles : son article 5 exige des données exactes et tenues à jour, ce qui rejoint la procédure de mise à jour, et son article 28 encadre l'éditeur de l'outil comme sous-traitant. S'y ajoute l'article 4 du règlement européen sur l'IA : selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA s'applique depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l'omnibus numérique sur l'IA, entré en vigueur mi-juillet 2026, la maintient pour les fournisseurs et les utilisateurs professionnels, sans plus imposer de niveau « suffisant ».",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à construire un assistant documentaire avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il construit lui-même des assistants et des intégrations d'IA pour des entreprises, et il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone ; il est aussi co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Ce travail apprend une chose que les démonstrations cachent : la difficulté n'est presque jamais le modèle, c'est le fonds documentaire, sa mise à jour et la question de savoir qui a le droit de lire quoi. La formation est bâtie sur cette réalité.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique et à l'IA, et a mené des missions dans " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et au Canada. Il n'est certifié par aucun éditeur et ne se présente comme partenaire d'aucun ; il peut donc recommander NotebookLM, un projet ChatGPT ou Claude, ou un index maison, selon ce que mesure votre jeu de questions. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
                "Ses engagements se vérifient : une réponse sous 24 heures, un cadrage qui peut conclure qu'un simple projet suffit et qu'aucun index n'est nécessaire, des exercices sur vos documents, une évaluation chiffrée plutôt qu'une impression, et des supports qui restent à l'entreprise. Les autres formations du domaine sont présentées sur la page <a href=\"/formations/domaine/intelligence-artificielle\">formations en intelligence artificielle</a>, l'organisation commune sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et l'ensemble dans le <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de brancher un assistant sur vos documents ?",
            'texte' => "Partez des questions réelles et notez pour chacune le document qui fait foi, triez le fonds avant de le charger, une seule version en vigueur, un projet par public, des instructions qui imposent la citation et le refus, une grille d'évaluation rejouée à chaque mise à jour, et un propriétaire nommé pour chaque famille de documents.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Sur quels documents votre équipe voudrait-elle pouvoir interroger un assistant ?",
            'texte'  => "Décrivez le fonds concerné (procédures, notes, fiches produits, documentation technique), son volume approximatif, les personnes qui posent les questions, celles qui y répondent aujourd'hui et la présence ou non de développeurs : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillés. Si le besoin est de faire écrire vos équipes avec l'IA plutôt que d'interroger un fonds, la formation <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a> est le meilleur point de départ ; pour poser les règles d'usage, voyez <a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander cette formation'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il savoir programmer pour suivre la formation ?", 'r' => "Non pour les deux premiers jours, qui se font entièrement dans ChatGPT, Claude et NotebookLM. Oui pour le troisième, réservé aux personnes qui savent appeler une API web et écrire un script. Une organisation peut n'inscrire que le métier, que la technique, ou les deux."],
        ['q' => "Nos documents servent-ils à entraîner le modèle ?", 'r' => "Non : un assistant RAG lit vos documents au moment de répondre, il n'est pas réentraîné dessus. Reste la question de l'outil. L'aide de NotebookLM indique que les données ne servent pas à l'entraînement sauf commentaires envoyés ; OpenAI n'entraîne pas ses modèles par défaut sur les offres Business, Enterprise et Edu, mais peut le faire sur les comptes personnels si l'option est activée."],
        ['q' => "Quel outil choisir entre NotebookLM, un projet ChatGPT et un projet Claude ?", 'r' => "Celui qui répond le mieux à votre jeu de questions, avec des conditions de partage et de données acceptables. NotebookLM se distingue par ses citations au passage près et la synchronisation avec Google Drive ; ChatGPT ou Claude conviennent à une équipe déjà équipée. La formation fait passer les mêmes questions dans les trois avant de trancher."],
        ['q' => "Combien de documents peut-on charger ?", 'r' => "Cela dépend de l'outil et du forfait. Au 5 octobre 2026 : 5 fichiers par projet ChatGPT en gratuit, 25 en Go et Plus, 40 en Pro, Business, Enterprise et Edu ; 50 sources par notebook NotebookLM en gratuit, jusqu'à 300 avec Google AI Pro ; des fichiers de 30 Mo dans un projet Claude, avec un mode RAG qui étend la capacité sur les forfaits payants. Au-delà, on passe à la version technique."],
        ['q' => "L'assistant peut-il lire nos documents scannés ?", 'r' => "Mal, ou pas du tout, tant qu'ils n'ont pas de couche de texte. L'aide d'OpenAI indique que, hors Enterprise, ChatGPT n'extrait que le texte des fichiers et écarte les images, et la fonction de citations d'Anthropic ne peut pas citer un scan sans texte. On passe donc les scans dans un logiciel de reconnaissance de caractères, puis on relit chiffres et noms propres."],
        ['q' => "Comment empêcher un salarié de voir un document qui ne le concerne pas ?", 'r' => "Dans les outils sans code, en créant un projet ou un notebook par public, car tout membre d'un projet partagé peut lire ses sources. Dans la version technique, en attachant à chaque passage le public autorisé et en filtrant la recherche avant qu'elle ne s'exécute. Les documents les plus sensibles n'entrent dans aucun fonds."],
        ['q' => "Que se passe-t-il quand une procédure change ?", 'r' => "Son propriétaire remplace le document, retire l'ancienne version le même jour et rejoue les questions qui la concernent. Une source Google Drive se met à jour seule dans NotebookLM ; un fichier téléversé dans un projet ChatGPT ou Claude doit être remplacé à la main. La procédure est écrite dans la fiche d'exploitation."],
        ['q' => "L'assistant peut-il se tromper même en citant ses sources ?", 'r' => "Oui. Il peut citer une version périmée, tirer d'un passage juste une conclusion fausse, ou citer un document entier sans désigner l'endroit précis. C'est pourquoi la formation apprend à ouvrir les citations, à évaluer les réponses avec une grille et à réserver à une personne les décisions qui engagent l'entreprise."],
        ['q' => "Quelle différence avec un chatbot WhatsApp pour nos clients ?", 'r' => "Cette formation porte sur un assistant interne qui répond aux salariés à partir des documents de l'organisation. Un robot qui converse avec vos clients sur WhatsApp pose d'autres questions : canal officiel, modèles de messages, coûts de Meta, passage de main à un humain. Il a sa propre formation, listée en bas de page."],
        ['q' => "Combien coûte l'indexation dans la version technique ?", 'r' => "Peu, au regard du travail de préparation. Au 5 octobre 2026, OpenAI facture 0,02 dollar le million de jetons pour text-embedding-3-small, et Google 0,20 dollar pour Gemini Embedding 2, avec un stockage gratuit dans File Search. Chez OpenAI, le stockage du magasin coûte 0,10 dollar par Go et par jour au-delà du premier Go gratuit, plus 2,50 dollars pour 1 000 appels de l'outil."],
        ['q' => "Peut-on garder tout le fonds sur notre propre serveur ?", 'r' => "Oui, dans la version technique : un index dans PostgreSQL avec l'extension libre pgvector et des embeddings calculés localement par Ollama gardent documents et recherche chez vous. Pour la rédaction de la réponse, il faut alors soit un modèle hébergé, qui reçoit les passages retrouvés, soit un modèle ouvert sur votre serveur, dont la qualité se mesure sur le jeu de questions."],
        ['q' => "Un fonds de formation peut-il financer la session ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'est pas certifié Qualiopi et n'est agréé par aucun fonds. Envoyez le programme et le devis à votre fonds avant de signer, et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => "OpenAI, aide : projets dans ChatGPT (fichiers par forfait, partage, mémoire, Google Drive)", 'url' => 'https://help.openai.com/en/articles/10169521-projects-in-chatgpt', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, aide : foire aux questions sur les fichiers téléversés (512 Mo, 2 millions de jetons, 25 Go et 100 Go, extraction du texte)", 'url' => 'https://help.openai.com/en/articles/8555545-file-uploads-faq', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, File Search (outil de recherche dans les fichiers, annotations, filtres)", 'url' => 'https://developers.openai.com/api/docs/guides/tools-file-search', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, récupération et magasins de vecteurs (découpage par défaut, attributs, limites de fichiers, stockage)", 'url' => 'https://developers.openai.com/api/docs/guides/retrieval', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, tarifs de l'API (embeddings, File Search)", 'url' => 'https://developers.openai.com/api/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, tarifs de ChatGPT", 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, aide : qu'est-ce qu'un projet ? (connaissances, partage Team et Enterprise)", 'url' => 'https://support.claude.com/en/articles/9517075-what-are-projects', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, aide : RAG pour les projets", 'url' => 'https://support.claude.com/en/articles/11473015-retrieval-augmented-generation-rag-for-projects', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, aide : téléverser des fichiers dans Claude (limites des projets)", 'url' => 'https://support.claude.com/en/articles/8241126-what-kinds-of-documents-can-i-upload-to-claude-ai', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, tarifs de Claude", 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, documentation : citations", 'url' => 'https://platform.claude.com/docs/en/build-with-claude/citations', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, documentation : réduire les hallucinations", 'url' => 'https://platform.claude.com/docs/en/test-and-evaluate/strengthen-guardrails/reduce-hallucinations', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, Contextual Retrieval (19 septembre 2024)", 'url' => 'https://www.anthropic.com/engineering/contextual-retrieval', 'date' => '2026-10-05'],
        ['titre' => "Google, aide NotebookLM : ajouter des sources (types, limites, synchronisation Google Drive)", 'url' => 'https://support.google.com/notebooklm/answer/16215270?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, aide NotebookLM : forfaits et limites d'utilisation", 'url' => 'https://support.google.com/notebooklm/answer/16213268?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, aide NotebookLM : créer et partager un notebook", 'url' => 'https://support.google.com/notebooklm/answer/16206563?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, aide NotebookLM : utiliser le chat et les citations", 'url' => 'https://support.google.com/notebooklm/answer/16179559?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, aide NotebookLM : questions fréquentes (citations, import, limites)", 'url' => 'https://support.google.com/notebooklm/answer/16269187?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, aide NotebookLM : présentation et pays où le service est disponible", 'url' => 'https://support.google.com/notebooklm/answer/16164461?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, abonnements Google AI (prix affichés pour la France)", 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-05'],
        ['titre' => "Google AI for Developers, File Search de l'API Gemini", 'url' => 'https://ai.google.dev/gemini-api/docs/file-search', 'date' => '2026-10-05'],
        ['titre' => "Google AI for Developers, tarifs de l'API Gemini (Gemini Embedding 2, mise à jour du 1er octobre 2026)", 'url' => 'https://ai.google.dev/gemini-api/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => "pgvector, recherche de similarité vectorielle pour PostgreSQL", 'url' => 'https://github.com/pgvector/pgvector', 'date' => '2026-10-05'],
        ['titre' => "Ollama, documentation des embeddings", 'url' => 'https://docs.ollama.com/capabilities/embeddings', 'date' => '2026-10-05'],
        ['titre' => "OWASP, LLM08:2025 Vector and Embedding Weaknesses", 'url' => 'https://genai.owasp.org/llmrisk/llm082025-vector-and-embedding-weaknesses/', 'date' => '2026-10-05'],
        ['titre' => "OWASP, LLM09:2025 Misinformation", 'url' => 'https://genai.owasp.org/llmrisk/llm092025-misinformation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 426)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2016/679 (RGPD), articles 5 et 28", 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['integrer-ia-logiciels-existants', 'agents-ia-assistants', 'prompt-engineering', 'ia-en-entreprise', 'chatbot-whatsapp', 'gouvernance-ia'],
        'services'    => ['integration-ia-entreprise', 'agents-ia-chatbot-whatsapp'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
