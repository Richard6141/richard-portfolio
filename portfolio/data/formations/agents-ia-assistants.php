<?php
// ============================================================
// data/formations/agents-ia-assistants.php · Fiche formation « Agents IA et
// assistants internes » (vague 1B, lot B, domaine intelligence-artificielle).
// Angle propre : concevoir et paramétrer des assistants qui agissent (projets
// et plugins de ChatGPT, GPTs existants, projets et skills de Claude, Gems et
// skills de Gemini, agents de Copilot Studio) : fiche de conception,
// instructions, connaissances, outils, mémoire, garde-fous, droits d'accès,
// tests et maintenance. Ne traite pas : l'usage quotidien (ia-en-entreprise),
// l'écriture de consignes (prompt-engineering), l'indexation d'un fonds
// documentaire (rag-chatbot-documents), l'intégration par API dans le code
// (integrer-ia-logiciels-existants), la charte (gouvernance-ia), ni le robot
// WhatsApp pour les clients (pilier agents-ia-chatbot-whatsapp, aucune phrase
// reprise). Aucune ancienne page. Documentation officielle lue le 05/10/2026 :
// centre d'aide d'OpenAI (création des GPTs, retrait des GPTs et migration vers
// les plugins, plugins, projets, mémoire, actions, envoi de fichiers ; lus dans
// le navigateur, WebFetch étant refusé), page tarifs de ChatGPT, centre d'aide
// d'Anthropic (projets, skills, mémoire, connecteurs), page tarifs de Claude,
// aide de Gemini (Gems, partage, passage aux skills), page des abonnements
// Google, Microsoft Learn (Copilot Studio, connaissances, évaluation, crédits,
// Agent Builder), page tarifs de Copilot Studio, OWASP (agents, 9 décembre
// 2025), Anthropic (« Building effective agents »), modelcontextprotocol.io.
// Faits repris du catalogue : article 4 du règlement sur l'IA, tarifs n8n,
// gratuité du cadrage. Aucune certification ni aucun agrément de Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Agents IA et assistants internes : concevoir des assistants qui consultent vos documents, agissent dans vos outils et respectent des garde-fous, puis les tester avant de les confier à vos équipes",
    'title'   => 'Formation agents IA et assistants internes | Richard SALANON',
    'meta'    => "Formation pour concevoir des assistants IA qui agissent : instructions, connaissances, outils, mémoire, garde-fous, droits d'accès et tests. Sur devis.",
    'en_bref' => "Cette formation apprend aux référents IA, chefs de projet et profils à l'aise avec les outils en ligne à concevoir et paramétrer des assistants internes qui agissent : projets et plugins de ChatGPT, projets et skills de Claude, Gems et skills de Gemini, agents de Copilot Studio, avec leurs instructions, connaissances, outils, mémoire, garde-fous, droits d'accès et tests. Elle dure deux jours, en quatre demi-journées, suivis d'une revue à distance de l'assistant mis en service. Elle se donne dans vos locaux, en inter-entreprises, à distance ou en formule hybride, sur vos comptes et vos cas. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => false,
    'duree'   => '2 jours en 4 demi-journées, puis une revue de 2 h à distance',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : choisir le bon niveau d'autonomie et écrire la fiche de conception",
            'duree'  => '3 h 30',
            'points' => [
                "Assistant qui répond, assistant qui prépare, agent qui agit après confirmation, agent déclenché par un événement : quatre niveaux d'autonomie, et ce que chacun exige comme contrôle.",
                "Tour des plateformes telles qu'elles sont en octobre 2026 : projets et plugins de ChatGPT, GPTs existants, projets et skills de Claude, Gems et skills de Gemini, agents de Copilot Studio et Agent Builder de Microsoft 365.",
                "Les changements annoncés par les éditeurs eux-mêmes (retrait des GPTs personnalisés, passage des Gems aux skills) et ce qu'ils imposent : une conception qui ne dépend pas d'un seul écran.",
                "Choix, par chaque binôme, d'un cas réel de l'entreprise : une tâche répétitive, un public d'utilisateurs connu, des données identifiées.",
                "Rédaction de la fiche de conception : mission en une phrase, utilisateurs, ce que l'assistant fait, ce qu'il ne fait jamais, sources, outils, droits, critères de réussite.",
                "Restitution croisée : chaque binôme défend sa fiche devant le groupe, qui cherche les trous avant qu'ils ne deviennent des incidents.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : écrire les instructions et préparer les connaissances",
            'duree'  => '3 h 30',
            'points' => [
                "Structure des instructions d'un assistant : rôle, public, déroulé par étapes, format de sortie, cas de refus, moment où il passe la main à une personne.",
                "Séparer ce qui relève des instructions (le comportement) de ce qui relève des fichiers de connaissance (la matière), comme le recommandent les éditeurs.",
                "Préparer les fichiers : texte propre, un sujet par document, date de validité en tête, aucune contradiction entre deux versions d'une même procédure.",
                "Limites de chaque plateforme : nombre de fichiers par projet ou par GPT, types acceptés, sources reliées depuis Google Drive, SharePoint ou un dossier partagé.",
                "Exiger une citation de la source dans chaque réponse, puis vérifier qu'elle renvoie au bon passage.",
                "Premier montage de l'assistant sur la plateforme retenue et dix questions d'essai notées sur une grille commune.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : brancher des outils, régler la mémoire et poser les droits d'accès",
            'duree'  => '3 h 30',
            'points' => [
                "Les trois façons de donner des outils à un assistant : applications connectées de l'éditeur, actions décrites par un schéma OpenAPI, connecteurs fondés sur le protocole MCP.",
                "Lecture avant écriture : un assistant commence par consulter, puis propose un brouillon, et n'écrit dans un logiciel qu'après confirmation d'une personne.",
                "Agir avec les droits de l'utilisateur ou avec un compte de service : conséquences sur ce que chacun peut voir, et sur ce que l'assistant peut divulguer.",
                "Réglages d'approbation des actions, domaines autorisés, secrets rangés hors des instructions, journal des appels.",
                "Mémoire de projet, mémoire personnelle, absence de mémoire : ce que l'assistant doit retenir d'une conversation à l'autre, et ce qu'il doit oublier.",
                "Exercice : brancher une action en lecture, puis une action en écriture soumise à confirmation, sur un compte d'essai de l'entreprise ou un flux n8n de démonstration.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : attaquer, tester, partager et maintenir",
            'duree'  => '3 h 30',
            'points' => [
                "Le jeu de tests de l'assistant : trente questions réelles, dont des pièges, avec la réponse attendue écrite par une personne du métier.",
                "Attaques par document piégé, demandes hors périmètre, tentative d'obtenir les instructions, essai d'une action interdite, utilisateur sans droits.",
                "Tests avec deux profils d'utilisateurs pour vérifier que l'assistant ne montre à chacun que ce qu'il a le droit de voir.",
                "Partage et publication : à qui, avec quel niveau d'accès, qui peut modifier, qui est propriétaire, que devient l'assistant au départ de son créateur.",
                "Plan de maintenance : propriétaire nommé, revue mensuelle des conversations difficiles, rejeu du jeu de tests après chaque modification.",
                "Évaluation : chaque binôme fait passer le jeu de tests à son assistant devant le groupe et présente sa fiche de conception mise à jour.",
            ],
        ],
        [
            'titre'  => "Revue à distance, trois à quatre semaines plus tard",
            'duree'  => '2 h',
            'points' => [
                "Lecture des premières semaines d'usage : questions posées, réponses refusées, actions confirmées ou annulées, passages de main.",
                "Rejeu du jeu de tests sur la version en service, et après tout changement de modèle ou d'instructions.",
                "Corrections prioritaires des instructions, des fichiers et des droits, distinguées de ce qui peut attendre.",
                "Décision écrite : étendre l'assistant à d'autres utilisateurs, le garder en pilote ou l'arrêter.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, puis une revue de 2 h à distance"],
        ['l' => 'Public', 'v' => "Référents IA, chefs de projet, responsables métiers et profils techniques qui maîtrisent déjà un assistant"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride, 8 personnes au plus, en binômes"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous construire à la fin de la formation, et qu'est-ce qu'elle ne couvre pas ?",
            'paragraphes' => [
                "Un assistant interne n'est pas une conversation un peu mieux réglée. C'est un petit outil de travail que d'autres personnes vont utiliser sans connaître ses coulisses : il lit des documents choisis, il peut consulter un agenda, un tableur ou un logiciel, parfois y écrire, et il doit savoir s'arrêter. Le construire demande des décisions que personne ne prend quand on bricole seul dans son coin : pour qui il travaille, avec quelles données, avec quels droits, et comment on vérifiera qu'il fait ce qu'on attend de lui.",
                "À la fin des deux jours, chaque participant sait, en binôme puis seul : rédiger la fiche de conception d'un assistant ; écrire des instructions qui décrivent un déroulé, un format et des refus ; préparer des fichiers de connaissance lisibles et datés ; brancher un outil en lecture, puis en écriture soumise à confirmation ; régler la mémoire et le partage ; bâtir un jeu de tests avec des pièges ; décider à qui confier l'assistant et qui le maintient. L'évaluation se fait sur l'assistant que chaque binôme a monté pour un cas réel de l'entreprise.",
                "La formation ne couvre pas l'usage quotidien des assistants par toute une équipe, traité par la formation <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>. Elle n'apprend pas à programmer un appel aux API des modèles dans votre code : c'est l'objet de la formation <a href=\"/formations/integrer-ia-logiciels-existants\">Intégrer l'IA dans ses logiciels existants</a>. L'art d'écrire des consignes fiables et l'indexation d'un grand fonds documentaire ont chacun leur formation, listée en bas de page ; ici, on s'en sert sans en faire le sujet.",
                "Elle ne remplace pas non plus la charte d'usage de l'organisation, construite dans la formation <a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>, ni un robot de service client sur WhatsApp, qui relève d'une prestation décrite sur la page <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbot WhatsApp</a>. Enfin, elle ne promet pas un agent autonome qui travaille seul la nuit : elle apprend à choisir le niveau d'autonomie le plus bas qui fait le travail, et à le justifier.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Assistant, agent ou automatisation : quel niveau d'autonomie donner à votre outil ?",
            'legende' => "Grille utilisée le premier matin. Anthropic distingue, dans son article « Building effective agents » du 19 décembre 2024, les flux où le modèle suit un chemin écrit à l'avance et les agents qui décident eux-mêmes de leurs étapes et de leurs outils, et recommande la solution la plus simple qui fonctionne. La formation applique ce principe : on monte d'un niveau seulement quand le niveau inférieur échoue sur le cas réel.",
            'entetes' => ['Niveau', 'Ce que fait l\'outil', 'Exemple en entreprise', 'Contrôle exigé'],
            'lignes'  => [
                ['Automatisation sans IA', 'Exécute toujours les mêmes étapes, déclenchées par un événement', 'Copier chaque nouvelle commande du formulaire du site dans le tableur des ventes', 'Tests classiques ; l\'IA n\'apporte rien si la règle est stable'],
                ['Assistant qui répond', 'Lit des sources choisies et répond aux questions en les citant', 'Répondre aux salariés sur le règlement intérieur, les congés, les notes de frais', 'Sources à jour, citation vérifiable, refus quand la réponse n\'est pas dans les sources'],
                ['Assistant qui prépare', 'Consulte des outils en lecture et rédige un brouillon qu\'une personne valide', 'Préparer la fiche d\'un prospect à partir du CRM et de ses derniers échanges', 'Droits en lecture seulement, brouillon toujours relu avant usage'],
                ['Agent qui agit après confirmation', 'Propose une action dans un logiciel et l\'exécute quand l\'utilisateur l\'approuve', 'Créer la réservation d\'une salle, ouvrir un ticket informatique, enregistrer une relance', 'Approbation à chaque écriture, journal des actions, annulation possible'],
                ['Agent déclenché par un événement', 'Se met en route seul à l\'arrivée d\'un courriel ou d\'un fichier, et enchaîne plusieurs outils', 'Trier les factures fournisseurs reçues et préparer leur saisie', 'Périmètre étroit, seuils d\'alerte, relecture par échantillon, arrêt d\'urgence'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "La formation vise les personnes qui vont construire et faire vivre des assistants pour les autres, pas l'ensemble des salariés. Elle ne demande pas de savoir programmer, mais elle suppose une pratique régulière d'au moins un assistant et une aisance réelle avec les outils en ligne.",
            'items' => [
                ['titre' => 'Les référents IA et les chefs de projet numérique', 'texte' => "Ils reçoivent les demandes des services (« il nous faudrait un assistant qui… ») et doivent trier ce qui mérite d'être construit. La fiche de conception et le jeu de tests deviennent leurs outils de travail pour toutes les demandes suivantes."],
                ['titre' => 'Les responsables métiers qui connaissent la tâche', 'texte' => "Responsable des ressources humaines, du support, des achats, de la qualité ou d'une équipe commerciale : ce sont eux qui savent ce qu'une bonne réponse contient. Ils écrivent les réponses attendues du jeu de tests, ce qu'aucun technicien ne peut faire à leur place."],
                ['titre' => 'Les profils techniques', 'texte' => "Administrateur des comptes Microsoft 365 ou Google Workspace, développeur, responsable informatique : ils règlent les droits, les connecteurs, les domaines autorisés et les comptes de service. Ils travaillent en binôme avec un profil métier, jamais seuls."],
                ['titre' => 'Prérequis', 'texte' => "Savoir obtenir une bonne réponse d'un assistant sur une tâche courante, et lire sans se perdre une page de réglages ou un tableau de droits. Des notions sur les API aident pour la partie des actions, sans être exigées. Ceux qui débutent commencent par la prise en main, puis par la formation sur les consignes."],
                ['titre' => 'Les comptes', 'texte' => "Le compte d'équipe de l'entreprise quand il existe (ChatGPT Business, Claude Team, Google Workspace, Microsoft 365 avec Copilot Studio), ou des comptes d'essai ouverts à son nom. Certaines fonctions, comme la création de nouveaux GPTs ou le partage dans l'organisation, sont réservées aux espaces de travail professionnels."],
                ['titre' => 'Le matériel', 'texte' => "Un ordinateur par personne avec un navigateur à jour, l'accès administrateur ou un interlocuteur qui l'a pendant la session, et une connexion stable. Le téléphone ne suffit pas : la plupart des éditeurs réservent la création des assistants à la version web ou de bureau."],
                ['titre' => 'Ce qui est préparé avant', 'texte' => "Deux ou trois cas d'assistant envisagés, avec quelques exemples de questions réelles anonymisées, les documents de référence de chaque cas, et la liste des logiciels auxquels l'assistant pourrait accéder, avec la personne qui en gère les droits."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels assistants les participants construisent-ils sur les cas de l'entreprise ?",
            'legende' => "Exemples de cas retenus lors du cadrage. Chaque binôme en monte un seul, de bout en bout, sur la plateforme que l'entreprise utilise déjà. La dernière colonne indique le test qui décide si l'assistant peut être confié aux utilisateurs.",
            'entetes' => ['Service', 'Assistant construit', 'Sources et outils', 'Test décisif'],
            'lignes'  => [
                ['Ressources humaines', "Répond aux questions des salariés sur les congés, les absences, les notes de frais et le règlement intérieur", "Règlement intérieur, accord d'entreprise, procédures datées ; aucune donnée individuelle", "Refuse de répondre sur la situation d'un collègue nommé, et renvoie vers la personne RH pour tout cas particulier"],
                ['Support informatique interne', "Guide un salarié face à une panne courante, puis ouvre un ticket si le problème persiste", "Fiches de dépannage, inventaire des logiciels ; action d'ouverture de ticket soumise à confirmation", "N'ouvre jamais de ticket sans accord, et ne donne aucun mot de passe ni aucune procédure de contournement"],
                ['Commercial', "Prépare la fiche d'un rendez-vous à partir du CRM, des derniers échanges et de l'offre en cours", "CRM en lecture, catalogue et conditions tarifaires validées", "Ne propose aucune remise absente des conditions, et cite la source de chaque prix"],
                ['Achats', "Compare trois offres fournisseurs reçues et rédige un tableau de décision", "Offres en PDF, cahier des charges, grille de critères de l'entreprise", "Retrouve chaque montant dans l'offre d'origine, à la bonne page, et signale toute pièce manquante"],
                ['Qualité et procédures', "Répond aux opérateurs à partir des procédures en vigueur et signale les écarts entre deux versions", "Procédures numérotées avec leur date de validité", "Refuse de répondre à partir d'une procédure périmée et indique la version applicable"],
                ['Direction administrative', "Prépare le compte rendu d'un comité et propose les relances à envoyer, sans les envoyer", "Notes du comité, liste des responsables, agenda en lecture", "Aucune relance ne part sans validation, et chaque échéance correspond aux notes"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que contient la fiche de conception d'un assistant, et pourquoi l'écrire avant de le paramétrer ?",
            'legende' => "La fiche tient sur deux pages et appartient à l'entreprise, pas à la plateforme. Quand un éditeur retire un produit ou change ses écrans, c'est elle qui permet de reconstruire l'assistant ailleurs en une demi-journée au lieu de repartir de zéro.",
            'entetes' => ['Rubrique', 'Question à laquelle elle répond', 'Exemple pour un assistant RH'],
            'lignes'  => [
                ['Mission', "Que fait l'assistant, en une phrase ?", "Répondre aux questions des salariés sur les règles RH écrites de l'entreprise"],
                ['Utilisateurs', "Qui s'en sert, et combien de personnes ?", 'Les 45 salariés, sur leur compte professionnel'],
                ['Hors périmètre', "Que ne fait-il jamais ?", "Commenter une situation individuelle, donner un avis juridique, parler des salaires d'autrui"],
                ['Sources', "Sur quels documents s'appuie-t-il, à quelle date ?", "Règlement intérieur de janvier, accord sur le télétravail, procédure de notes de frais"],
                ['Outils', "Que peut-il consulter, que peut-il modifier ?", "Consultation du calendrier des jours fériés ; aucune écriture"],
                ['Droits', "Avec quel compte agit-il, et que voit chaque utilisateur ?", "Droits de l'utilisateur connecté ; dossier des sources en lecture seule"],
                ['Mémoire', "Que retient-il d'une conversation à l'autre ?", 'Rien : chaque question est traitée sans historique personnel'],
                ['Passage de main', "Quand renvoie-t-il vers une personne, et laquelle ?", "Tout cas particulier, tout conflit, toute question de santé : la responsable RH"],
                ['Critères de réussite', "À quoi saura-t-on qu'il fonctionne ?", "27 bonnes réponses sur 30 au jeu de tests, aucune erreur sur les pièges"],
                ['Propriétaire et revue', "Qui le maintient, et quand le revoit-on ?", 'Le référent IA, revue le premier lundi du mois'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "ChatGPT, Claude, Gemini ou Copilot Studio : où construire un assistant interne en octobre 2026 ?",
            'options'  => ['ChatGPT (OpenAI)', 'Claude (Anthropic)', 'Gemini (Google)', 'Copilot Studio (Microsoft)'],
            'criteres' => [
                ['critere' => 'Unité de construction', 'valeurs' => ["Projets (fichiers, instructions, conversations) ; plugins réunissant skills et applications connectées ; GPTs existants jusqu'à leur retrait", "Projets (connaissances et instructions) ; skills, dossiers d'instructions et de ressources chargés selon la tâche", "Gems (nom, instructions, fichiers) ; skills, qui les remplacent progressivement", "Agents avec instructions, connaissances et outils ; Agent Builder pour des agents simples dans Microsoft 365 Copilot"]],
                ['critere' => 'Qui peut créer', 'valeurs' => ["Projets : tous les comptes connectés ; nouveaux GPTs : seulement les espaces Business, Enterprise et Edu qui l'autorisent", "Projets : tous les comptes, 5 au plus en gratuit ; skills : toutes les offres, exécution de code activée", "Gems : comptes personnels de 13 ans et plus, comptes professionnels et scolaires ; skills : comptes personnels de plus de 18 ans pour l'instant", "Créateurs habilités par l'administrateur, avec une licence Microsoft 365 Copilot ou une capacité Copilot Studio"]],
                ['critere' => 'Connaissances', 'valeurs' => ["5 fichiers par projet en gratuit, 25 en Go et Plus, 40 en Business ; 20 fichiers de 512 Mo au plus par GPT", "Documents du projet ; recherche étendue réservée aux offres payantes, jusqu'à dix fois plus de contenu selon Anthropic", "Fichiers de l'appareil, de Google Drive ou carnets NotebookLM", "Sites publics, fichiers, SharePoint et connecteurs ; 25 sites ou 25 adresses SharePoint en mode génératif"]],
                ['critere' => 'Outils et actions', 'valeurs' => ["Applications connectées ; actions sur schéma OpenAPI pour les GPTs, qui utilisent soit les applications, soit les actions", "Connecteurs MCP, dont des connecteurs distants personnalisés (un seul en offre gratuite)", "Applications connectées comme Gmail ou Drive ; plusieurs outils des Gems ne fonctionnent pas encore avec les skills", "Outils, connecteurs et flux d'agent ; Agent Builder ne crée pas d'actions vers des services externes"]],
                ['critere' => 'Contrôle des actions', 'valeurs' => ["Confirmation possible avant l'usage d'une application ; domaines d'action autorisés par l'administrateur", "Réglage par outil : toujours autorisé, approbation requise ou bloqué, fixé par l'administrateur", "Droits hérités du compte Google de l'utilisateur", "Authentification de l'utilisateur par Microsoft Entra ID : l'agent ne montre que ce que l'utilisateur peut lire"]],
                ['critere' => 'Partage', 'valeurs' => ["Projets partagés en accès « conversation » ou « modification » ; mémoire limitée au projet", "Partage des projets en lecture ou en modification sur Team et Enterprise", "Partage en lecteur ou éditeur ; instructions et fichiers visibles de tous ceux qui ont accès", "Publication dans Teams, Microsoft 365 Copilot, un site ou une application, selon la licence"]],
                ['critere' => 'Changement annoncé', 'valeurs' => ["Retrait des GPTs personnalisés prévu le 11 décembre 2026, migration vers les plugins", "Aucun retrait annoncé ; projets et skills disponibles sur toutes les offres", "Gems retirés en novembre 2026 sur les comptes personnels, en mars 2027 sur les comptes professionnels", "Facturation en crédits Copilot depuis le 1er septembre 2025"]],
            ],
            'verdict'  => "Construisez sur la plateforme que l'entreprise administre déjà : Microsoft 365, Google Workspace ou un compte d'équipe ChatGPT ou Claude. Le choix de l'éditeur compte moins que la fiche de conception, les droits et le jeu de tests, qui se transportent d'une plateforme à l'autre.",
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Faut-il encore construire un nouvel assistant d'entreprise sur un GPT personnalisé ?",
            'texte' => "Non. Le centre d'aide d'OpenAI, consulté le 5 octobre 2026, annonce le retrait des GPTs personnalisés le 11 décembre 2026 (le 11 février 2027 pour les espaces Enterprise ayant obtenu un report) et recommande de migrer vers les plugins. Les comptes personnels, gratuits ou payants, ne peuvent déjà plus créer de nouveaux GPTs. Lors de la migration, les instructions deviennent une skill et les fichiers suivent, mais les actions personnalisées ne sont pas transférées : il faut les reconstruire, parfois avec un serveur MCP. Le même mouvement touche Google, qui remplace les Gems par des skills à partir de novembre 2026. D'où la règle de la formation : la fiche de conception d'abord, la plateforme ensuite.",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment donner des outils à un assistant sans lui ouvrir tous les accès ?",
            'intro' => "Dès qu'un assistant peut agir, la question n'est plus seulement « répond-il juste ? », mais « que peut-il faire s'il se trompe, ou si quelqu'un le trompe ? ». Les éditeurs fournissent les réglages ; la formation apprend à s'en servir dans un ordre précis.",
            'items' => [
                ['titre' => 'Commencer en lecture seule', 'texte' => "Un assistant qui consulte un agenda, un CRM ou un dossier partagé rend déjà service. L'écriture vient ensuite, action par action, quand la lecture a passé le jeu de tests. Beaucoup d'assistants n'ont jamais besoin d'écrire."],
                ['titre' => "Faire confirmer chaque écriture", 'texte' => "Les plateformes permettent de demander l'accord de l'utilisateur avant une action : chez Anthropic, l'administrateur règle chaque outil sur « toujours autorisé », « approbation requise » ou « bloqué ». On garde l'approbation sur tout ce qui crée, modifie, envoie ou supprime."],
                ['titre' => "Agir avec les droits de la personne", 'texte' => "Quand l'assistant interroge SharePoint avec l'identité de l'utilisateur, Microsoft précise qu'il ne fait apparaître que les contenus que cette personne peut lire. Un compte de service commun, lui, voit tout : il ne convient qu'à des sources que tous les utilisateurs ont le droit de consulter."],
                ['titre' => 'Restreindre les domaines et les connecteurs', 'texte' => "Dans un espace de travail ChatGPT géré, l'administrateur peut limiter les actions des GPTs aux domaines approuvés. Côté Claude, un connecteur personnalisé d'origine inconnue appelle la même prudence qu'un logiciel installé sans vérification."],
                ['titre' => 'Ne rien cacher dans les instructions', 'texte' => "Ni mot de passe, ni clé, ni règle d'accès : un utilisateur obstiné finit souvent par faire réciter les instructions, et Google rappelle que toute personne ayant accès à un Gem partagé en voit les instructions et les fichiers. Les secrets restent dans la configuration des connecteurs."],
                ['titre' => 'Garder la trace des actions', 'texte' => "Pour chaque action : qui l'a demandée, ce que l'assistant a proposé, ce qui a été confirmé, et le résultat. Cette trace sert à corriger l'assistant, et à répondre si une action contestée a été déclenchée en son nom."],
                ['titre' => "Prévoir l'arrêt", 'texte' => "Savoir désactiver un outil, retirer un partage ou mettre l'assistant hors service en quelques minutes, et qui a le droit de le faire. Cette procédure s'écrit avant la mise en service, pas pendant l'incident."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels risques propres aux agents faut-il connaître, et quelle parade apprend-on ?",
            'legende' => "Risques tirés du Top 10 de l'OWASP pour les applications agentiques, publié le 9 décembre 2025 et consulté le 5 octobre 2026, ramenés à ce qu'un concepteur d'assistant peut régler lui-même sans écrire de code.",
            'entetes' => ['Risque (OWASP)', 'Comment il se présente dans un assistant interne', 'Parade enseignée'],
            'lignes'  => [
                ["ASI01 Détournement de l'objectif de l'agent", "Un document ou un courriel lu par l'assistant contient une instruction cachée qui le pousse à faire autre chose", "Sources choisies et relues, aucune action d'écriture sans confirmation, test avec un document piégé"],
                ['ASI02 Mauvais usage des outils', "L'assistant utilise un outil légitime de travers : suppression au lieu d'archivage, envoi à la mauvaise liste", "Outils limités à ce que la mission exige, approbation sur les actions sensibles, essais sur un compte de test"],
                ["ASI03 Abus d'identité et de privilèges", "Un connecteur branché avec le compte d'un administrateur donne à tous les utilisateurs ses droits", "Droits de l'utilisateur connecté, compte de service limité, revue des connecteurs au départ de leur créateur"],
                ["ASI04 Chaîne d'approvisionnement", "Un connecteur, une skill ou un plugin tiers installé sans vérification change de comportement", "Liste des connecteurs autorisés, source vérifiée, relecture de chaque skill importée"],
                ['ASI06 Empoisonnement de la mémoire et du contexte', "Une information fausse retenue une fois continue d'orienter les réponses des semaines plus tard", "Mémoire désactivée ou limitée au projet, relecture de ce qui est retenu, remise à zéro planifiée"],
                ["ASI09 Confiance excessive de l'utilisateur", "Une explication bien tournée convainc l'utilisateur d'approuver une action qu'il n'a pas vérifiée", "Confirmation qui affiche l'action exacte, formation des utilisateurs à lire avant d'approuver"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que doit retenir un assistant d'une conversation à l'autre, et que doit-il oublier ?",
            'intro' => "La mémoire rend un assistant plus agréable, et parfois plus dangereux. Les éditeurs l'ont découpée en couches distinctes ; la formation apprend à choisir pour chaque assistant, et à l'écrire dans la fiche de conception.",
            'items' => [
                ['titre' => 'La mémoire personnelle', 'texte' => "Chez OpenAI, elle peut s'appuyer sur les conversations passées, les souvenirs enregistrés, les instructions personnalisées et des applications connectées comme Gmail. Utile pour un usage individuel, elle n'a rien à faire dans un assistant partagé, où elle mélangerait les contextes."],
                ['titre' => 'La mémoire limitée au projet', 'texte' => "Les projets partagés de ChatGPT utilisent automatiquement une mémoire restreinte au projet, sans accès aux souvenirs de chaque membre. Chez Anthropic, chaque projet a son propre espace de mémoire et son résumé. C'est le réglage par défaut des assistants d'équipe."],
                ['titre' => 'Pas de mémoire du tout', 'texte' => "Pour un assistant qui répond sur des règles écrites, chaque question doit être traitée à partir des sources, sans rien d'autre. Toute mémoire y est une source de divergence : la réponse donnée à l'un ne doit pas dépendre de ce qu'un autre a dit la veille."],
                ['titre' => 'Les réglages des administrateurs', 'texte' => "Sur les offres Team et Enterprise de Claude, la mémoire reste désactivée tant que le propriétaire de l'organisation ne l'a pas ouverte, et sa désactivation au niveau de l'organisation efface les données mémorisées. L'entreprise décide donc avant les utilisateurs."],
                ['titre' => "Ce qu'il faut savoir effacer", 'texte' => "Supprimer une conversation n'efface pas forcément un souvenir enregistré à partir d'elle : OpenAI le précise et indique conserver jusqu'à 30 jours les journaux de souvenirs supprimés. Une donnée sensible confiée par erreur se traque donc à plusieurs endroits."],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Quels tests un assistant doit-il réussir avant d'être partagé avec une équipe ?",
            'items' => [
                "Les trente questions réelles du jeu de tests, notées par la personne du métier qui a écrit les réponses attendues, avec un seuil de réussite fixé avant le premier essai.",
                "Cinq questions dont la réponse n'est pas dans les sources : l'assistant doit le dire et renvoyer vers la bonne personne, sans inventer.",
                "Trois demandes hors périmètre, polies ou insistantes, qui doivent recevoir un refus clair.",
                "Un document piégé qui contient une instruction cachée, glissé parmi les sources ou joint par l'utilisateur.",
                "Une tentative d'obtenir les instructions complètes ou le contenu intégral des fichiers de connaissance.",
                "Chaque action d'écriture déclenchée une fois en test : vérifier la demande de confirmation, le résultat dans le logiciel et la trace laissée.",
                "Les mêmes questions posées par deux utilisateurs aux droits différents, pour vérifier que l'assistant ne montre à chacun que ce qu'il peut voir.",
                "Une question en anglais et une question mal orthographiée, telles que les poseront vraiment les utilisateurs.",
                "Le rejeu complet du jeu de tests après toute modification des instructions, des fichiers, des outils ou du modèle.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment les éditeurs aident-ils à tester un assistant, et que faut-il ajouter soi-même ?",
            'paragraphes' => [
                "Chaque plateforme offre un aperçu pour essayer l'assistant avant de l'enregistrer. C'est utile pour régler le ton, insuffisant pour décider d'une mise en service : on y pose quelques questions, une à une, sans pouvoir rejouer exactement les mêmes le mois suivant. Le jeu de tests, conservé dans un tableur de l'entreprise avec les réponses attendues, comble ce manque sur toutes les plateformes.",
                "Microsoft va plus loin dans Copilot Studio. Sa documentation, mise à jour le 1er octobre 2026, décrit des jeux de tests que l'on peut générer, importer ou écrire à la main, une note par cas et une note d'ensemble, la possibilité de simuler un profil d'utilisateur, et quatre évaluateurs de sécurité. Elle précise aussi leurs limites : ces évaluations ne garantissent pas qu'un agent est sûr dans tous les cas, et elles ne fonctionnent pas avec tous les modes d'authentification.",
                "Le même éditeur propose un réglage qui illustre bien la notion de garde-fou : quand les réponses non fondées sont interdites, l'agent bloque toute réponse produite sans s'appuyer sur une source ou un outil. Microsoft prévient que ce blocage n'empêche pas totalement le modèle de mêler ses connaissances générales aux sources, et qu'une bonne réponse sans citation peut être retenue. La formation en tire une leçon valable partout : un réglage réduit un risque, seul un test montre ce qu'il en reste.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment se déroule la formation : binômes, comptes de l'entreprise, supports et suivi ?",
            'intro' => "On apprend à construire un assistant en le construisant, sur un vrai cas, puis en voyant d'autres participants essayer de le mettre en défaut. Le formateur montre peu et relit beaucoup : fiches, instructions, réglages de droits, résultats des tests.",
            'items' => [
                ['titre' => 'Huit personnes au plus, en binômes', 'texte' => "Chaque binôme associe, autant que possible, une personne du métier et une personne à l'aise avec les réglages techniques. Au-delà de quatre binômes, le formateur ne peut plus relire chaque assistant en détail, et c'est cette relecture qui fait progresser."],
                ['titre' => "Sur les comptes de l'entreprise", 'texte' => "Les assistants sont montés dans l'espace de travail que l'entreprise gardera, ou dans des comptes d'essai ouverts à son nom. Rien n'est construit sur le compte du formateur : l'assistant doit pouvoir vivre le lundi suivant sans lui."],
                ['titre' => 'Des données préparées', 'texte' => "Les fichiers de connaissance sont des copies anonymisées ou des documents sans donnée personnelle. Les actions d'écriture s'essaient sur un agenda, un tableur ou un logiciel de test, jamais sur la base de production pendant la session."],
                ['titre' => 'Un attaquant désigné', 'texte' => "À chaque test, un autre binôme reçoit pour mission de faire dérailler l'assistant : question piège, document piégé, demande insistante. On découvre plus de failles en une heure de cet exercice qu'en une journée d'essais bienveillants."],
                ['titre' => 'Des supports remis à chacun', 'texte' => "Le modèle de fiche de conception, la grille de niveaux d'autonomie, le modèle de jeu de tests, la liste de contrôle avant partage, les supports de la session et une attestation nominative, dans des formats modifiables qui restent à l'entreprise."],
                ['titre' => 'Une revue sur un assistant en service', 'texte' => "Trois à quatre semaines plus tard, deux heures à distance sur ce qui s'est réellement passé : questions posées, refus, actions confirmées, corrections. C'est là que se règlent les problèmes qu'aucun test n'avait prévus."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils utilise-t-on, et que coûtent-ils chez leurs éditeurs ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée : dollars pour OpenAI, Anthropic et Microsoft, euros pour Google (prix affichés pour la France) et pour n8n. Ces abonnements restent au nom de l'entreprise et ne font jamais partie du prix de la formation.",
            'entetes' => ['Outil', 'Usage en formation', "Prix de l'éditeur", 'À savoir'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Projets partagés, plugins et skills, GPTs existants, applications connectées', "Gratuit ; Go 8 dollars par mois ; Plus 20 dollars ; Business 20 dollars par utilisateur et par mois en annuel, 25 dollars en mensuel, à partir de 2 utilisateurs", "Les nouveaux GPTs ne se créent plus que dans les espaces Business, Enterprise et Edu, avant leur retrait annoncé"],
                ['Claude (Anthropic)', 'Projets, skills, connecteurs, mémoire de projet', "Gratuit ; Pro 17 dollars par mois en annuel, 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 dollars au mois, 2 sièges au moins", "Le partage des projets dans l'organisation demande l'offre Team ou Enterprise"],
                ['Gemini (Google)', 'Gems, puis skills, avec fichiers et Google Drive', "Gratuit, Gems compris ; Google AI Plus 4,99 euros par mois ; Google AI Pro 21,99 euros par mois", "Pour une équipe sur Google Workspace, Gemini passe par l'abonnement de l'entreprise"],
                ['Copilot Studio (Microsoft)', 'Agents avec connaissances, outils, authentification et évaluations', "Pack de 25 000 crédits Copilot à 200 dollars par mois, ou paiement à l'usage par un abonnement Azure", "Une réponse générative coûte 2 crédits, une action d'agent 5 ; usage gratuit pour les employés dotés d'une licence Microsoft 365 Copilot"],
                ['n8n', "Petit flux appelé par l'assistant pour écrire dans un tableur ou un agenda de test", "Version Cloud Starter à 20 euros par mois en paiement annuel pour 2 500 exécutions mensuelles ; Pro à 50 euros pour 10 000", "Le paiement mensuel coûte environ 17 % de plus ; la version auto-hébergée évite l'abonnement"],
                ['Tableur et traitement de texte', "Fiche de conception, jeu de tests, journal des versions", "Ceux que l'entreprise possède déjà", "Ces fichiers sont l'actif durable : ils survivent aux changements de plateforme"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Quels assistants internes construit-on selon le secteur, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Groupe de distribution, à Abidjan', 'probleme' => "Les chefs de magasin appellent le siège pour les mêmes questions de procédure (inventaire, retours, caisse), et les réponses varient selon la personne qui décroche.", 'solution' => "Assistant de procédures dans un projet partagé, fondé sur les procédures datées du siège, avec citation obligatoire. Il ne répond jamais sur une procédure périmée et renvoie tout cas particulier au responsable des opérations, nommé dans la fiche de conception."],
                ['secteur' => 'Organisation non gouvernementale, à Cotonou et à Ouagadougou', 'probleme' => "Les chargés de programme passent des heures à retrouver les règles des bailleurs dans des manuels de plusieurs centaines de pages.", 'solution' => "Assistant qui répond à partir des manuels de procédures retenus, sans aucune donnée de bénéficiaire, et qui indique la page de chaque règle. Quand le fonds documentaire dépasse ce que le projet peut contenir, le cas bascule vers une approche d'indexation, traitée dans une autre formation."],
                ['secteur' => 'Cabinet de conseil, à Dakar', 'probleme' => "Les consultants reprennent à la main les mêmes éléments du CRM pour préparer chaque rendez-vous client.", 'solution' => "Assistant qui consulte le CRM en lecture avec les droits du consultant connecté, prépare une fiche de rendez-vous et propose une relance que le consultant valide. Aucune écriture dans le CRM sans confirmation, et aucun accès aux comptes d'un autre associé."],
                ['secteur' => 'PME industrielle, en France ou en Belgique', 'probleme' => "L'entreprise a Microsoft 365, une équipe qualité débordée, et des opérateurs qui cherchent la bonne version d'une instruction de travail.", 'solution' => "Agent Copilot Studio branché sur la bibliothèque SharePoint des instructions validées, avec l'authentification des salariés, un jeu de tests dans l'outil d'évaluation et un réglage interdisant les réponses sans source. Le responsable qualité en est le propriétaire."],
                ['secteur' => 'Établissement scolaire privé, à Lomé', 'probleme' => "Le secrétariat répond aux enseignants sur les calendriers, les règles d'évaluation et les formalités, pendant les périodes les plus chargées.", 'solution' => "Gem, puis skill, partagé avec les enseignants en lecture, fondé sur le règlement des études et le calendrier de l'année. Aucune note ni aucune donnée d'élève n'entre dans l'assistant, et le secrétariat garde la main sur la mise à jour des fichiers."],
                ['secteur' => 'Société de services informatiques, en Suisse ou au Canada', 'probleme' => "Les techniciens ouvrent des tickets incomplets, et le support de premier niveau répète les mêmes diagnostics.", 'solution' => "Assistant qui guide le diagnostic à partir des fiches de dépannage, puis prépare un ticket complet par un connecteur MCP vers l'outil de tickets, avec approbation à chaque création. Le jeu de tests inclut des demandes de contournement de sécurité, qui doivent être refusées."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir : intra, inter, distance ou hybride ?",
            'legende' => "Le format se décide au premier échange, selon le nombre de concepteurs à former, l'accès aux comptes d'administration et la possibilité de travailler sur des cas internes. Dans tous les formats, chaque binôme repart avec un assistant monté et testé.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, dans vos locaux', '2 jours en 4 demi-journées, puis la revue à distance', '8 personnes au plus, de la même organisation', "Le cas général : cas internes, comptes de l'entreprise, administrateur disponible pendant la session"],
                ['Inter-entreprises', '2 jours', 'Concepteurs de plusieurs organisations', "Une ou deux personnes à former par structure ; les cas sont fictifs ou publics, et chacun adapte sa fiche à son organisation le second après-midi"],
                ['À distance', '6 séances de 2 h 30', '6 personnes au plus', "Équipes réparties sur plusieurs sites ou pays ; l'assistant avance entre deux séances et chaque séance commence par ses tests"],
                ['Hybride', 'Une journée sur place, puis 3 séances à distance', '8 personnes au plus', "Conception et instructions en salle ; outils, droits et tests à distance, sur les comptes de l'entreprise"],
                ['Atelier de cadrage seul', 'Une demi-journée', 'Direction, référent IA, responsables métiers', "Trier les demandes d'assistants, choisir le premier cas et la plateforme avant de former les concepteurs"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun tarif n'est affiché : le prix est fixé sur devis. Le premier échange, le cadrage et le devis sont gratuits, et le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux plateformes et les crédits consommés restent payés par l'entreprise aux éditeurs.",
            'items'      => [
                ['offre' => 'Formation des concepteurs', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos cas et vos comptes', 'Un assistant monté et testé par binôme', 'Fiche de conception, jeu de tests et liste de contrôle', 'Attestation nominative']],
                ['offre' => 'Atelier de cadrage', 'prix' => 'Sur devis', 'inclus' => ["Tri des demandes d'assistants", "Choix du niveau d'autonomie et de la plateforme", 'Premier cas retenu et sa fiche de conception']],
                ['offre' => 'Revue après mise en service', 'prix' => 'Sur devis', 'inclus' => ['Deux heures à distance', "Lecture des premières semaines d'usage", 'Rejeu du jeu de tests et corrections prioritaires']],
            ],
            'variations' => [
                'Le nombre de participants et de binômes.',
                'Le nombre de plateformes à couvrir, une seule ou plusieurs.',
                "La préparation des cas : documents à anonymiser, comptes d'essai, logiciels de test.",
                "La complexité des outils branchés : simple lecture ou actions d'écriture sur un logiciel métier.",
                'Le format et le lieu : vos locaux, une salle, un déplacement hors de Cotonou ou hors du Bénin, la visioconférence.',
                'La revue après la session et le suivi retenu.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "Peut-être, selon le pays, et toujours sur décision du fonds. En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP sur le plan de formation</a>, consultée le 5 octobre 2026, ouvre ce dispositif aux entreprises à jour de leurs deux taxes de formation et ne règle les actions qu'après contrôle de ses services et accord de sa Commission permanente. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> présente un guichet destiné au personnel des entreprises. Au Bénin, le FODEFCA, dont les statuts ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>, renseigne sur ses propres conditions.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics et mutualisés, OPCO compris, suppose depuis le 1er janvier 2022 un prestataire certifié Qualiopi. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds, en Afrique comme en Europe. La démarche prudente : budgéter la formation sans financement, adresser au fonds le programme et le devis avant toute signature, et attendre sa réponse écrite. Programme, feuilles de présence et attestations sont fournis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Les assistants construits juste après la formation échouent rarement pour une raison technique. Ils échouent parce qu'on a élargi trop vite leur rôle, oublié de les entretenir ou laissé leur créateur seul responsable.",
            'items' => [
                ['titre' => "L'assistant qui veut tout faire", 'texte' => "Un succès sur les questions RH donne envie d'y ajouter les achats, le support et la paie. Les instructions s'allongent, les sources se contredisent, les réponses se dégradent. On construit un assistant par mission, quitte à en avoir plusieurs."],
                ['titre' => "Les fichiers qui vieillissent", 'texte' => "La procédure a changé, le fichier de l'assistant non. Il continue d'annoncer l'ancienne règle avec assurance. Chaque fichier porte sa date de validité, et la mise à jour des sources figure dans la routine mensuelle du propriétaire."],
                ['titre' => "L'écriture ouverte trop tôt", 'texte' => "Pour gagner du temps, on retire la confirmation sur une action qui semblait sans risque. Le premier envoi en double ou la première suppression malheureuse coûte plus que tout le temps gagné. La confirmation se retire seulement après des semaines de journal sans erreur."],
                ['titre' => 'Le créateur qui part', 'texte' => "L'assistant vivait sur le compte d'un salarié qui quitte l'entreprise, avec ses connecteurs et ses droits. Il cesse de fonctionner, ou pire, continue avec des droits que plus personne ne surveille. Le propriétaire est un rôle, avec un suppléant, et les assistants vivent dans l'espace de l'entreprise."],
                ['titre' => 'La modification sans rejeu', 'texte' => "Une phrase ajoutée aux instructions corrige un cas et en casse trois autres. Aucune modification, même minime, ne part sans rejouer le jeu de tests, et chaque version est notée dans le journal avec sa date et son auteur."],
                ['titre' => "Le changement d'éditeur subi", 'texte' => "Un produit est retiré ou renommé, comme les GPTs personnalisés ou les Gems en 2026, et personne n'a gardé la trace de la conception. Avec la fiche de conception et le jeu de tests, la reconstruction prend quelques heures au lieu de plusieurs semaines."],
                ['titre' => 'Un assistant sans règles communes', 'texte' => "Chaque service crée ses assistants dans son coin, avec ses propres comptes. L'organisation ne sait plus ce qui existe ni qui y a accès. Le cadre commun, inventaire et circuit de validation compris, se construit dans la formation <a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres de la documentation officielle un concepteur d'assistant doit-il connaître ?",
            'items' => [
                ['valeur' => '11 décembre 2026', 'libelle' => "Date de retrait prévue des GPTs personnalisés, avec migration vers les plugins ; les actions personnalisées ne sont pas transférées (centre d'aide d'OpenAI, page consultée le 5 octobre 2026)", 'source' => "OpenAI, FAQ sur le retrait et la migration des GPTs", 'url' => 'https://help.openai.com/en/articles/20001519-custom-gpt-retirement-and-migration-faq'],
                ['valeur' => 'Novembre 2026', 'libelle' => "Début du remplacement des Gems par des skills sur les comptes Google personnels ; mars 2027 pour les comptes Workspace professionnels, juin 2027 pour l'éducation (page consultée le 5 octobre 2026)", 'source' => 'Google, aide de Gemini, passage des Gems aux skills', 'url' => 'https://support.google.com/gemini/answer/18560919'],
                ['valeur' => '100', 'libelle' => "Nombre de skills qui peuvent être actives en même temps dans Gemini ; le nombre de skills créées n'est pas limité (page consultée le 5 octobre 2026)", 'source' => 'Google, aide de Gemini, passage des Gems aux skills', 'url' => 'https://support.google.com/gemini/answer/18560919'],
                ['valeur' => '20 fichiers', 'libelle' => "Fichiers de connaissance au plus par GPT, chacun limité à 512 Mo ; les projets acceptent 5 fichiers en gratuit, 25 en Go et Plus, 40 en Business (pages consultées le 5 octobre 2026)", 'source' => "OpenAI, création des GPTs et projets dans ChatGPT", 'url' => 'https://help.openai.com/en/articles/8554397-creating-and-editing-gpts'],
                ['valeur' => '125 %', 'libelle' => "Seuil de consommation de la capacité prépayée de Copilot Studio au-delà duquel les agents personnalisés sont désactivés jusqu'à l'ajout de capacité (documentation mise à jour le 1er octobre 2026)", 'source' => 'Microsoft Learn, taux de facturation de Copilot Studio', 'url' => 'https://learn.microsoft.com/en-us/microsoft-copilot-studio/requirements-messages-management'],
                ['valeur' => '10', 'libelle' => "Risques propres aux applications agentiques recensés par l'OWASP, du détournement d'objectif aux agents incontrôlés, dans une liste publiée le 9 décembre 2025 avec plus de 100 experts", 'source' => 'OWASP GenAI Security Project, Top 10 for Agentic Applications', 'url' => 'https://genai.owasp.org/resource/owasp-top-10-for-agentic-applications-for-2026/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langues, données personnelles : que change le contexte local pour un assistant interne ?",
            'paragraphes' => [
                "Un assistant hébergé chez un éditeur ne fonctionne qu'en ligne, et chaque outil branché ajoute un appel réseau. Dans une organisation où la connexion coupe l'après-midi, un assistant qui répond à partir de fichiers chargés reste utilisable ; un agent qui enchaîne quatre outils échoue plus souvent. La formation en tient compte dans le choix du niveau d'autonomie, et prévoit pour chaque action ce qui se passe quand elle n'aboutit pas : message clair, aucune action à moitié faite, reprise possible.",
                "Les assistants comprennent bien le français, mais leurs fichiers de connaissance doivent parler la langue réelle de l'entreprise : sigles internes, noms des services, termes de la zone OHADA ou du droit social local. Un glossaire placé dans les sources évite beaucoup de contresens. Pour les questions posées en anglais par des partenaires, ou dans une langue nationale, le jeu de tests inclut quelques exemples, et l'assistant renvoie vers une personne quand il comprend mal.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> pèse directement sur la conception. Ses articles 391 et 426 soumettent les transferts de données personnelles vers un État tiers au niveau de protection constaté par l'Autorité, et demandent des mesures de sécurité adaptées, pseudonymisation comprise. Un assistant qui puise dans un CRM hébergé localement pour répondre depuis une plateforme étrangère fait sortir ces données : la fiche de conception le mentionne, et les champs inutiles restent hors de portée.",
                "En Europe, le <a href=\"https://eur-lex.europa.eu/eli/reg/2016/679/oj\">RGPD</a> demande, à son article 25, une protection des données dès la conception et par défaut, ce qui se traduit très concrètement ici : sources limitées, mémoire coupée, droits de l'utilisateur plutôt que d'un administrateur. Selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA de l'article 4 s'applique depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l'omnibus numérique la maintient pour les utilisateurs professionnels, sans plus imposer de niveau « suffisant ».",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à concevoir des assistants avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il construit lui-même des assistants qui agissent, au-delà de la démonstration : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il branche des modèles d'IA sur des logiciels, des flux d'automatisation et des outils de gestion pour ses clients. Il est aussi co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Ce travail quotidien lui a appris où les assistants cassent : sources périmées, droits trop larges, actions sans confirmation, créateur parti sans laisser de trace.",
                'Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . " pays, du Bénin, du Togo et de la Côte d'Ivoire jusqu'au Gabon, à la France et au Canada. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
                "Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun : la plateforme se choisit sur les comptes que vous administrez déjà, pas sur une préférence du formateur. Sa façon de former se vérifie : une réponse sous 24 heures, un cadrage qui peut conclure qu'un simple projet partagé suffit, des assistants montés sur vos cas, des tests où l'on cherche à les mettre en défaut, et des supports qui restent à l'entreprise. Les autres formations du domaine figurent sur la page <a href=\"/formations/domaine/intelligence-artificielle\">formations en intelligence artificielle</a>, et le catalogue complet sur la page <a href=\"/formations/\">formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de construire votre premier assistant interne ?",
            'texte' => "Écrivez la fiche de conception avant d'ouvrir une plateforme, choisissez le niveau d'autonomie le plus bas qui fait le travail, donnez à l'assistant les droits de l'utilisateur et des sources datées, faites confirmer chaque écriture, testez-le contre des pièges avant de le partager, et nommez un propriétaire qui le revoit chaque mois.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Quel assistant interne votre équipe devrait-elle construire en premier ?",
            'texte'  => "Décrivez la tâche visée, les personnes qui utiliseraient l'assistant, les documents et logiciels concernés, et les comptes déjà en place (Microsoft 365, Google Workspace, ChatGPT, Claude) : vous recevez une réponse sous 24 heures, puis un programme adapté et un devis détaillé. Si vous préférez faire construire l'assistant plutôt que former vos équipes, voyez le service d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander cette formation'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il savoir programmer pour suivre la formation ?", 'r' => "Non. Les assistants se construisent dans les interfaces des éditeurs, par des réglages et des instructions écrites. Il faut en revanche être à l'aise avec un assistant et avec les pages de réglages. Les actions sur schéma OpenAPI et les connecteurs MCP sont montrés sur des exemples prêts à l'emploi ; les écrire soi-même relève d'une formation technique."],
        ['q' => "Quelle différence entre un assistant et un agent ?", 'r' => "Un assistant répond ou prépare un brouillon à partir de sources choisies. Un agent décide lui-même des étapes et des outils à utiliser pour atteindre un but, et peut agir dans des logiciels. La formation apprend à choisir le niveau le plus simple qui fait le travail, car chaque niveau d'autonomie ajoute des risques et des contrôles."],
        ['q' => "Peut-on encore créer des GPTs personnalisés ?", 'r' => "Seulement dans les espaces ChatGPT Business, Enterprise et Edu qui l'autorisent, et pour peu de temps : OpenAI annonce leur retrait le 11 décembre 2026 et recommande les plugins. Les comptes personnels ne peuvent plus en créer. La formation montre comment préparer la migration d'un GPT existant et comment construire directement dans un projet ou un plugin."],
        ['q' => "Sur quelle plateforme la formation se fait-elle ?", 'r' => "Sur celle que l'entreprise administre déjà : Microsoft 365 avec Copilot Studio, Google Workspace avec Gemini, ou un compte d'équipe ChatGPT ou Claude. Sans choix préalable, on travaille sur deux plateformes, ce qui montre que la fiche de conception et le jeu de tests se transportent de l'une à l'autre."],
        ['q' => "Nos documents sont confidentiels : peut-on les mettre dans un assistant ?", 'r' => "Pendant la formation, on travaille sur des copies anonymisées ou des documents sans donnée personnelle. En service, cela dépend du compte, de l'éditeur, de vos obligations et de votre charte. La fiche de conception oblige à écrire quelles sources entrent dans l'assistant, qui peut les voir et ce qui reste hors de sa portée."],
        ['q' => "Un assistant peut-il envoyer des courriels ou modifier nos logiciels seul ?", 'r' => "Techniquement, oui, si on lui en donne les outils et les droits. La formation enseigne l'inverse comme point de départ : lecture d'abord, brouillon ensuite, écriture seulement après confirmation d'une personne, avec une trace de chaque action. Retirer la confirmation se décide plus tard, sur la base d'un journal sans erreur."],
        ['q' => "Quelle différence avec la formation sur le RAG et les chatbots documentaires ?", 'r' => "Ici, l'assistant s'appuie sur quelques dizaines de fichiers choisis et sur des outils. Quand il faut interroger des milliers de documents, avec une indexation, des citations précises et une mise à jour régulière, la formation RAG : chatbot sur vos documents internes prend le relais. Les deux se complètent souvent."],
        ['q' => "Copilot Studio coûte-t-il cher pour un premier agent ?", 'r' => "Microsoft vend des packs de 25 000 crédits à 200 dollars par mois, ou un paiement à l'usage par Azure. Une réponse générative consomme 2 crédits et une action d'agent 5. Pour les employés dotés d'une licence Microsoft 365 Copilot, l'usage d'un agent interne n'est pas décompté. Un estimateur officiel aide à chiffrer le volume avant de s'engager."],
        ['q' => "Combien de personnes par session ?", 'r' => "Huit au plus en salle, soit quatre binômes, et six à distance. Au-delà, le formateur ne peut plus relire chaque fiche de conception, chaque réglage de droits et chaque résultat de test, alors que c'est cette relecture qui distingue la formation d'une démonstration."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits. Le prix dépend du nombre de binômes, des plateformes, de la préparation des cas, des outils à brancher, du format, du lieu et de la revue retenue. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Un fonds de formation peut-il financer la session ?", 'r' => "Cela dépend du pays et des règles du fonds : FDFP, FODEFCA, 3FPT ou OPCO. Richard SALANON n'est ni certifié Qualiopi ni agréé par un fonds. Soumettez le programme et le devis avant de signer, et prévoyez le budget sans prise en charge."],
        ['q' => "Reçoit-on une attestation ?", 'r' => "Oui, une attestation nominative de fin de formation, avec le programme, les supports, les modèles de fiche de conception et de jeu de tests, et l'assistant monté par chaque binôme dans les comptes de l'entreprise. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "OpenAI, centre d'aide : créer et modifier des GPTs (qui peut créer, connaissances, capacités, actions)", 'url' => 'https://help.openai.com/en/articles/8554397-creating-and-editing-gpts', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, centre d'aide : FAQ sur le retrait des GPTs personnalisés et leur migration vers les plugins", 'url' => 'https://help.openai.com/en/articles/20001519-custom-gpt-retirement-and-migration-faq', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, centre d'aide : les plugins dans ChatGPT (skills, applications connectées, partage)", 'url' => 'https://help.openai.com/articles/20001256', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, centre d'aide : configurer des actions dans les GPTs (OpenAPI, authentification, domaines)", 'url' => 'https://help.openai.com/articles/9442513', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, centre d'aide : les projets dans ChatGPT (fichiers, instructions, partage, mémoire de projet)", 'url' => 'https://help.openai.com/en/articles/10169521-projects-in-chatgpt', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, centre d'aide : la mémoire dans ChatGPT", 'url' => 'https://help.openai.com/en/articles/8590148-memory-faq', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, tarifs de ChatGPT (Free, Go, Plus, Pro, Business, Enterprise)", 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, centre d'aide : que sont les projets ?", 'url' => 'https://support.claude.com/en/articles/9517075-what-are-projects', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, centre d'aide : que sont les skills ?", 'url' => 'https://support.claude.com/en/articles/12512176-what-are-skills', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, centre d'aide : recherche dans les conversations et mémoire de Claude", 'url' => 'https://support.claude.com/en/articles/11817273-using-claude-s-chat-search-and-memory-to-build-on-previous-context', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, centre d'aide : les connecteurs de Claude (MCP, permissions des outils)", 'url' => 'https://support.claude.com/en/articles/11176164-use-connectors-to-extend-claude-s-capabilities', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, tarifs de Claude (Free, Pro, Max, Team, Enterprise)", 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, « Building effective agents » (19 décembre 2024)", 'url' => 'https://www.anthropic.com/engineering/building-effective-agents', 'date' => '2026-10-05'],
        ['titre' => "Google, aide de Gemini : utiliser les Gems", 'url' => 'https://support.google.com/gemini/answer/15146780', 'date' => '2026-10-05'],
        ['titre' => "Google, aide de Gemini : partager un Gem", 'url' => 'https://support.google.com/gemini/answer/16504957', 'date' => '2026-10-05'],
        ['titre' => "Google, aide de Gemini : le passage des Gems aux skills", 'url' => 'https://support.google.com/gemini/answer/18560919', 'date' => '2026-10-05'],
        ['titre' => "Google, abonnements Gemini et Google AI (prix affichés pour la France)", 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, présentation de Copilot Studio (mise à jour du 1er octobre 2026)", 'url' => 'https://learn.microsoft.com/en-us/microsoft-copilot-studio/fundamentals-what-is-copilot-studio', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, sources de connaissances de Copilot Studio", 'url' => 'https://learn.microsoft.com/en-us/microsoft-copilot-studio/knowledge-copilot-studio', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, évaluation des agents dans Copilot Studio", 'url' => 'https://learn.microsoft.com/en-us/microsoft-copilot-studio/analytics-agent-evaluation-intro', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, taux de facturation en crédits Copilot et politique de dépassement", 'url' => 'https://learn.microsoft.com/en-us/microsoft-copilot-studio/requirements-messages-management', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, licences de Copilot Studio", 'url' => 'https://learn.microsoft.com/en-us/microsoft-copilot-studio/billing-licensing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, présentation d'Agent Builder dans Microsoft 365 Copilot", 'url' => 'https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/agent-builder', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, tarifs de Copilot Studio", 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing/copilot-studio', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Model Context Protocol, présentation officielle du protocole", 'url' => 'https://modelcontextprotocol.io/docs/getting-started/intro', 'date' => '2026-10-05'],
        ['titre' => "OWASP GenAI Security Project, Top 10 for Agentic Applications (9 décembre 2025)", 'url' => 'https://genai.owasp.org/resource/owasp-top-10-for-agentic-applications-for-2026/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 426)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2016/679 (RGPD), article 25", 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['prompt-engineering', 'rag-chatbot-documents', 'ia-en-entreprise', 'integrer-ia-logiciels-existants', 'gouvernance-ia', 'ia-processus-metier'],
        'services'    => ['agents-ia-chatbot-whatsapp', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'n8n-vs-make-vs-zapier'],
    ],
];
