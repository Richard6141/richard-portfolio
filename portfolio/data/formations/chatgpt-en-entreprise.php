<?php
// ============================================================
// data/formations/chatgpt-en-entreprise.php · Fiche formation « ChatGPT en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : ChatGPT d’OpenAI pour équipes non techniques : rédiger,
// synthétiser, analyser des fichiers, projets, GPTs personnalisés, mémoire,
// recherche, recherche approfondie, dictée, règles de données (comptes
// personnels et comptes d’entreprise). Richard enseigne ChatGPT (fait donné par
// lui) ; rien d’autre n’est affirmé sur sa pratique.
// Faits externes : seules les pages lisibles le 26/10/2026 sont retenues (SGG du
// Bénin, Commission européenne). Les pages d’OpenAI (help.openai.com,
// openai.com) répondent 403 à la lecture : aucun fait d’éditeur n’est affirmé,
// la page officielle de l’éditeur fait foi. Aucun prix ni limite chiffrée.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation ChatGPT en entreprise : vos équipes apprennent à rédiger, synthétiser et analyser leurs fichiers avec ChatGPT, à organiser leurs projets et à protéger leurs données',
    'title'   => 'Formation ChatGPT IA en entreprise | Richard SALANON',
    'meta'    => 'Formation ChatGPT pour vos équipes : rédaction, fichiers, projets, mémoire, recherche approfondie, dictée et règles de données. Format sur devis.',
    'en_bref' => 'Cette formation montre aux équipes non techniques comment travailler avec ChatGPT, l’assistant d’OpenAI : rédiger des écrits professionnels, résumer des documents, analyser un tableur, ranger le travail en projets, utiliser la recherche, la recherche approfondie et la dictée, et choisir ce que l’on confie ou non à l’outil selon le type de compte. Elle tient en deux jours, répartis sur quatre demi-journées, ou en un atelier de découverte d’une demi-journée. Elle se donne chez vous, à distance ou en mode hybride, pour une seule entreprise ou pour plusieurs réunies. Le prix est établi sur devis.',
    'publie'  => '2026-11-17',
    'maj'     => '2026-11-17',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Premier jour, le matin : prendre ChatGPT en main et fixer les règles de données',
            'duree'  => '3 h 30',
            'points' => [
                'Ouvrir ChatGPT sur le compte réellement utilisé par chaque participant et repérer ce qui change entre un compte personnel et un compte d’espace de travail d’entreprise.',
                'Parcourir les réglages de données du compte tel que chaque participant le voit, et noter ce qu’il permet de décider sur l’historique, l’usage des conversations, l’export et la suppression.',
                'Classer les documents du service en trois familles : ceux que l’on peut confier à l’outil, ceux que l’on prépare ou anonymise d’abord, ceux qui n’y entrent jamais.',
                'Comprendre en termes simples pourquoi l’assistant peut se tromper avec aplomb, et ce que cela impose avant tout envoi.',
                'Chacun nomme la tâche qui l’occupe le plus longtemps d’une semaine à l’autre ; elle servira de fil rouge jusqu’à l’épreuve finale.',
                'Premier exercice : reprendre un courriel réel du service, le faire réécrire pour un autre destinataire, puis le relire phrase après phrase.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : rédiger avec méthode',
            'duree'  => '3 h 30',
            'points' => [
                'Construire une demande complète : le rôle de l’auteur, le lecteur, l’objectif, les faits à utiliser, le format attendu, le ton.',
                'Donner un exemple validé de la maison pour que le résultat en reprenne la structure, sans copier de données personnelles.',
                'Travailler les écrits courants du poste : réponses aux clients, relances, annonces, notes internes, comptes rendus, offres.',
                'Corriger par échanges successifs plutôt que de tout recommencer : demander un ajustement précis, comparer deux versions, revenir en arrière.',
                'Passer d’une langue à l’autre pour un fournisseur ou un partenaire, puis faire relire le texte par une personne qui maîtrise la langue.',
                'Mettre au propre la grille de relecture : chiffres, noms, dates, promesses, ton, mentions obligatoires.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : fichiers, synthèses et projets',
            'duree'  => '3 h 30',
            'points' => [
                'Joindre un document ou un tableur à la conversation, demander un résumé avec renvoi aux passages, puis contrôler sur l’original.',
                'Analyser un fichier de chiffres : totaux, tris, écarts, graphique, puis recalcul de deux valeurs à la main pour tester la fiabilité.',
                'Savoir pourquoi un scan, une photo de tableau ou une mise en page complexe donnent des lectures moins sûres qu’un fichier texte ou un tableur.',
                'Ranger un dossier récurrent dans un projet, si le compte le propose : consignes permanentes, fichiers de référence, conversations au même endroit.',
                'Décider ce que l’équipe partage dans un projet et ce qui reste dans un espace personnel.',
                'Exercice de contrôle : chacun vérifie sa propre synthèse en revenant aux sources, passage par passage.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : recherche, dictée, mémoire, GPTs, épreuve finale et plan d’usage',
            'duree'  => '3 h 30',
            'points' => [
                'Distinguer une question à poser au chat, une recherche sur le web avec sources, et une recherche approfondie qui produit un rapport documenté.',
                'Ouvrir les sources citées, vérifier leur date, écarter celles qui ne soutiennent pas la réponse.',
                'Dicter une demande au lieu de la taper, relire la transcription avant envoi, savoir ce que devient le son.',
                'Regarder dans son compte ce que la mémoire retient et comment la régler, et décider quand travailler sans elle.',
                'Voir ce qu’est un GPT personnalisé, à quoi il sert pour une équipe, et pourquoi sa disponibilité se vérifie avant tout investissement.',
                'Épreuve finale chronomètre en main : chacun mène seul sa tâche cible, de la demande à la vérification, puis rédige son plan d’usage pour le mois suivant.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d’une demi-journée'],
        ['l' => 'Public', 'v' => 'Personnel de bureau, vendeurs, gestionnaires du personnel, comptables et cadres dirigeants, sans aucun prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire avec ChatGPT à l’issue de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Dans beaucoup de services, ChatGPT est ouvert sur un onglet, utilisé de temps en temps pour reformuler un message, puis oublié. L’outil n’est pas en cause : il manque une manière de s’en servir pour le travail réel, avec des fichiers réels, sous des règles de données connues. La formation prend donc chaque participant là où il se trouve et lui fait traiter, avec ChatGPT, une tâche qu’il répète chaque semaine.',
                'Au bout des deux jours, chacun sait, seul : écrire une demande complète et la corriger par échanges successifs ; obtenir un courrier, une réponse client ou une note utilisable après relecture ; joindre un document ou un tableur et en tirer un résumé ou une analyse qu’il sait contrôler ; ranger un dossier récurrent dans un projet ; choisir entre le chat, la recherche et la recherche approfondie ; dicter une demande ; régler la mémoire et l’historique ; dire quelles données du poste ne passent jamais par l’outil. La dernière demi-journée vérifie ces acquis, chronomètre en main, sur la tâche choisie le premier matin.',
                'Le champ reste volontairement centré sur un seul assistant. La comparaison entre ChatGPT, Claude et Gemini est traitée dans le comparatif du site, et l’usage de plusieurs assistants à la fois dans la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. La formation ne construit pas non plus de robot branché sur vos archives, sujet de la formation <a href="/formations/rag-chatbot-documents">chatbot sur vos documents</a>, et elle ne remplace ni un juriste ni un comptable.',
                'Aucun gain de temps chiffré n’est annoncé : il varie avec la tâche, l’état des documents et la constance de la pratique. Seule l’épreuve finale est chronométrée ; la société pourra, si elle le souhaite, faire son propre relevé ultérieurement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut suivre cette formation, avec quels prérequis et quel équipement ?',
            'intro' => 'Elle s’adresse aux personnes qui écrivent, lisent, comparent et classent beaucoup au quotidien. Il suffit de savoir écrire un message et ouvrir un fichier ; nul besoin d’être technicien.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Secrétaires et assistantes de direction, vendeurs, conseillers de clientèle, gestionnaires RH, comptables et financiers, chargés de projet, responsables d’agence, patrons de petites structures désireux de manier l’outil eux-mêmes.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Des débutants complets côtoient des personnes qui utilisent déjà ChatGPT au hasard. Un questionnaire envoyé avant la session permet de former des groupes de niveau proche et de prévoir une remise à niveau si elle est utile.'],
                ['titre' => 'Des groupes par famille de tâches', 'texte' => 'Une équipe commerciale n’a pas les exercices d’une équipe comptable. Quand c’est possible, on regroupe par métier ; pour l’atelier de découverte, un groupe mixte convient bien.'],
                ['titre' => 'Le matériel', 'texte' => 'Chaque participant vient avec un ordinateur, un navigateur à jour, une connexion stable et un tableur. Le téléphone aide pour la dictée et la prise de photos, mais pas pour analyser un fichier de chiffres.'],
                ['titre' => 'Les comptes', 'texte' => 'Soit le compte d’entreprise déjà ouvert, soit un compte personnel ouvert avant la session. La nature du compte détermine les règles de données : elle se vérifie avant le premier exercice. Les formules et limites évoluent ; la page officielle de l’éditeur fait foi.'],
                ['titre' => 'Les documents à préparer', 'texte' => 'Chacun apporte trois à cinq pièces authentiques liées à sa tâche, enregistrées d’avance sur son poste. Les noms de clients, de patients ou d’élèves sont remplacés ou les pièces écartées avant la séance.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Que contient le programme, une demi-journée après l’autre ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices chaque métier fait-il avec ChatGPT sur ses propres pièces ?',
            'legende' => 'Exercices préparés en amont à partir des documents confiés par la société. La dernière colonne précise ce que le stagiaire vérifie avant de se servir du résultat.',
            'entetes' => ['Poste', 'Point de départ', 'Ce que ChatGPT produit', 'Ce que le participant contrôle'],
            'lignes'  => [
                ['Assistance de direction', 'Notes brutes d’un comité, ordre du jour', 'Compte rendu, actions classées par responsable, courriel de diffusion', 'Pas de décision inventée ni omise, échéances conformes aux notes'],
                ['Service client', 'Messages de clients reçus par courriel ou messagerie', 'Réponses proposées, demandes triées selon leur motif', 'Tarifs, délais et conditions mentionnés, promesses faites au nom de la société'],
                ['Commercial', 'Dossier d’un prospect, offre modèle, dernier courriel échangé', 'Relance sur mesure, trame d’offre, version dans une autre langue', 'Remises, références, noms propres, éléments confidentiels'],
                ['Ressources humaines', 'Description du poste, notes d’entretien rendues anonymes', 'Annonce, trame d’entretien, bilan sans parti pris', 'Termes discriminatoires, informations personnelles oubliées dans le texte'],
                ['Comptabilité et gestion', 'Export de dépenses en tableur', 'Sommes par catégorie, écarts, courbe, commentaire écrit', 'Deux sommes refaites au crayon, période et devise'],
                ['Chargé de projet', 'Bilan d’activité, cadre logique', 'Synthèse pour le bailleur, tableau des indicateurs', 'Chaque chiffre repéré dans le rapport, avec sa page exacte'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Dans quel mode travailler : chat, recherche, recherche approfondie ou projet ?',
            'paragraphes' => [
                'ChatGPT n’est plus une simple fenêtre de dialogue. Le même outil propose plusieurs façons de travailler, et la première compétence consiste à choisir la bonne avant de taper. Pour reformuler un texte que l’on a sous les yeux, le chat suffit. Pour une question qui dépend de l’actualité, il faut la recherche sur le web, qui cite ses sources. Pour une étude à plusieurs sources, la recherche approfondie livre un rapport plus long. Pour un travail qui revient chaque mois, le projet garde le contexte.',
                'Se tromper de mode coûte du temps ou de la fiabilité. Demander un rapport de marché au chat seul donne un texte plausible sans sources ; lancer une recherche approfondie pour corriger une faute de frappe est absurde. La formation fait manipuler les quatre modes sur des cas du service, puis fait écrire à chaque participant une règle personnelle de choix, sur une demi-page.',
                'Le principe vaut pour toutes les fonctions : les noms, l’emplacement des boutons et la disponibilité selon la formule changent régulièrement. Les participants apprennent donc la logique de chaque mode, et non une suite de clics qui sera périmée dans un trimestre.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles fonctions de ChatGPT la formation travaille-t-elle, et que vérifier dans votre compte ?',
            'legende' => 'Les fonctions, leur nom, leur disponibilité selon la formule et le pays, et leurs limites évoluent : la formation les fait constater dans le compte réel de chaque participant, et la page officielle de l’éditeur fait foi. Aucun prix ni quota n’est repris ici.',
            'entetes' => ['Fonction', 'Usage en formation', 'À vérifier dans votre compte', 'Réflexe de contrôle'],
            'lignes'  => [
                ['Fichiers et analyse de données', 'Résumer un rapport, analyser un export de dépenses', 'Types de fichiers acceptés, taille maximale, outils disponibles', 'Recalculer deux valeurs à la main ; préférer un tableur à une photo ou un scan'],
                ['Projets', 'Un projet par dossier récurrent', 'Si la fonction est offerte, ce que contient un projet, qui peut y accéder', 'Relire les consignes du projet à chaque changement de procédure'],
                ['Mémoire', 'Décider de ce que l’on laisse retenir', 'Où se trouvent les réglages, ce qui est conservé, comment l’effacer', 'Ne jamais y laisser de données de clients'],
                ['GPTs personnalisés', 'Comprendre l’intérêt d’un assistant préréglé', 'Si la création, la modification et le partage sont possibles dans votre espace, et jusqu’à quand', 'Ne pas bâtir un outil d’équipe sans avoir vérifié sa durée de vie'],
                ['Recherche sur le web', 'Question d’actualité, vérification d’un fait', 'Si la fonction est active, et comment les sources s’affichent', 'Ouvrir la source, lire la phrase, regarder la date'],
                ['Recherche approfondie', 'Étude préparatoire, veille', 'Si la fonction est offerte et dans quelles limites d’usage', 'Contrôler les sources du rapport avant de le reprendre'],
                ['Dictée', 'Saisir une demande à la voix', 'Disponibilité dans l’application, langue, sort de l’enregistrement sonore', 'Relire la transcription avant l’envoi'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment ranger un dossier récurrent dans un projet ChatGPT ?',
            'intro' => 'Quand le compte propose des projets, ils servent à regrouper le travail d’un dossier suivi. La formation en fait un outil d’organisation d’équipe, à régler selon ce que le compte de chaque participant permet réellement.',
            'items' => [
                ['titre' => 'Un projet par sujet, pas par personne', 'texte' => 'Offres d’un client, rapports mensuels, recrutement d’un poste : chaque dossier qui revient mérite son projet. On évite un projet fourre-tout qui mélange tout.'],
                ['titre' => 'Des consignes permanentes', 'texte' => 'On y écrit le ton, la langue, la structure attendue et ce qu’il ne faut jamais faire. Avant de s’y fier, on vérifie dans le compte comment ces consignes se combinent avec les réglages généraux.'],
                ['titre' => 'Des fichiers de référence choisis', 'texte' => 'On dépose ce qui sert vraiment : modèle de courrier validé, glossaire, grille de tarifs publics. Un fichier périmé produit des réponses propres et fausses, comme dans tout outil.'],
                ['titre' => 'Un nom clair par dossier', 'texte' => 'Le nom du projet dit le client, le thème et la période. Au bout de deux mois, c’est ce qui permet de retrouver la bonne version.'],
                ['titre' => 'Savoir ce que l’on partage', 'texte' => 'Le partage dépend de la formule du compte et de la configuration de l’espace. Avant d’inviter un collègue, on constate ce qu’il verra : conversations, fichiers, consignes.'],
                ['titre' => 'Un responsable par projet', 'texte' => 'Une personne tient la liste des projets de l’équipe, relit les consignes à chaque changement de procédure et retire les accès à chaque départ.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que peut-on faire avec des fichiers, et où ChatGPT se trompe-t-il ?',
            'paragraphes' => [
                'Dans la pratique courante, on joint à une conversation un document ou un tableur et l’on demande un résumé, des totaux, des tris ou un graphique. Les formats acceptés, les tailles et les limites dépendent de la formule et changent : on les constate dans le compte et l’on lit la page officielle de l’éditeur avant de fonder une procédure sur un chiffre.',
                'Un assistant peut mal lire les valeurs d’une photographie de tableau, d’un document scanné ou d’une mise en page complexe, et il peut aussi se tromper sur un fichier propre. La formation en fait un exercice : le même tableau est fourni sous forme de tableur, puis de photographie, et les écarts sont notés. On en retient une règle : quand l’exactitude compte, on part d’un tableur ou d’un fichier texte.',
                'Reste la règle de contrôle. Quand ChatGPT calcule, le participant recalcule au moins deux valeurs lui-même. Quand il résume, le participant retrouve dans le document d’origine les passages sur lesquels s’appuie chaque point. Un résumé n’est un gain de temps que si la vérification coûte moins cher que la lecture complète ; sur un document de peu d’importance, c’est le cas, sur un contrat, il faut lire.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que retient la mémoire de ChatGPT, et comment la maîtriser ?',
            'intro' => 'La mémoire est pratique pour une personne qui travaille seule et délicate pour une équipe. Ses réglages portent des noms variables selon les comptes et changent avec le temps : la formation les fait constater sur chaque compte.',
            'items' => [
                ['titre' => 'Regarder ce que le compte retient', 'texte' => 'Chaque participant ouvre les réglages de son compte et note ce que l’outil conserve d’une conversation à l’autre, ce qu’il propose de consulter et ce qu’il permet d’effacer.'],
                ['titre' => 'Une mémoire n’est pas une conversation', 'texte' => 'Avant de croire qu’une information a disparu, on vérifie où elle peut encore figurer : conversations, fichiers déposés, souvenirs enregistrés. On teste en vrai plutôt que de supposer.'],
                ['titre' => 'Désactiver sans tout perdre', 'texte' => 'Couper une fonction et supprimer ce qui a déjà été conservé sont deux gestes distincts. On constate dans le compte lequel des deux le réglage produit.'],
                ['titre' => 'La conversation temporaire pour l’occasionnel', 'texte' => 'Quand le compte propose ce mode, il convient à une question ponctuelle ou à un essai. On vérifie ses règles dans la page officielle avant d’y confier quoi que ce soit de sensible.'],
                ['titre' => 'Ne pas y loger de données de clients', 'texte' => 'La mémoire est faite pour retenir des préférences de style et de contexte. On n’y laisse ni noms de clients, ni numéros, ni éléments confidentiels.'],
                ['titre' => 'Une règle d’équipe', 'texte' => 'La règle écrite par l’entreprise à l’issue de la formation dit si la mémoire est autorisée sur ses comptes, pour quels usages, et qui la vérifie.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Les GPTs personnalisés sont-ils un bon investissement pour une équipe ?',
            'paragraphes' => [
                'Un GPT personnalisé est un assistant préréglé avec des consignes et des fichiers de référence. Il paraît idéal pour une équipe : un seul assistant, réglé une fois, utilisé par tous. Mais cette fonction, ses conditions d’accès selon le type de compte et sa durée de vie ont évolué, et peuvent évoluer encore.',
                'La formation tire de cela une conduite pragmatique. On comprend ce qu’un GPT apporte, des consignes stables et des fichiers fixes, puis on obtient un résultat voisin avec un projet bien réglé et une consigne documentée par l’entreprise. On n’investit donc pas de longues heures dans un GPT sans avoir vérifié, dans son propre espace de travail et sur la page officielle de l’éditeur, que la création et le maintien sont possibles.',
                'Les connexions d’un assistant à un service externe posent en outre des questions de données et d’accès. Elles relèvent plutôt d’une mission d’intégration que d’une formation d’utilisateurs.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quand utiliser la recherche, et quand lancer une recherche approfondie ?',
            'paragraphes' => [
                'Une question qui dépend de l’actualité appelle une recherche sur le web plutôt qu’une réponse tirée de la seule conversation. Les réponses qui citent leurs sources se vérifient : on ouvre la page, on lit la phrase citée, on regarde la date et l’on privilégie une source faisant autorité quand la précision compte. Une citation indique où regarder ; elle ne prouve pas que la réponse est juste.',
                'La recherche approfondie répond à un autre besoin : une étude qui rassemble plusieurs sources et aboutit à un rapport plus long. Elle prend en général plus de temps qu’une conversation ordinaire, et sa disponibilité dépend de la formule et du pays. On la réserve aux études qui le méritent et l’on garde le chat pour une demande urgente.',
                'En formation, un exercice type consiste à préparer un point sur un marché, un concurrent ou une réglementation. Les participants lancent la même demande en chat, en recherche, puis en recherche approfondie si leur compte l’offre, et comparent : présence de sources, dates, trous. Ils en retiennent une règle d’équipe simple : ce qui sera cité à un client ou à une autorité se retrouve dans la source d’origine, jamais dans le seul rapport.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La dictée vocale fait-elle gagner du temps, et que devient l’enregistrement ?',
            'paragraphes' => [
                'La dictée permet de parler plutôt que de taper. Le texte transcrit se relit et se corrige avant l’envoi. Pour un commercial en déplacement ou un responsable qui préfère parler, c’est souvent le geste qui fait adopter l’outil.',
                'Le sort du son compte pour l’entreprise : où il est transmis, combien de temps il est conservé, ce qui en est fait. Ces règles dépendent du type de compte et évoluent. Chaque participant les recherche dans les réglages de son compte et dans la page officielle de l’éditeur, puis l’entreprise fixe sa règle.',
                'La formation fait pratiquer la dictée en trois temps : parler une demande complète, relire la transcription, corriger les noms propres. On y apprend aussi à ne pas dicter en public des informations confidentielles, ce qui n’a rien de technique : un bureau ouvert, un transport ou un café exposent autant la parole que l’écran.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Compte personnel ou compte d’entreprise : que devient ce que l’on écrit dans ChatGPT ?',
            'paragraphes' => [
                'Les éditeurs d’assistants distinguent en général les comptes grand public et les comptes d’entreprise, et les règles sur l’usage des conversations, leur conservation et les contrôles d’administration ne sont pas les mêmes d’un type de compte à l’autre. Ces règles figurent dans les réglages du compte et dans les conditions de l’éditeur ; elles évoluent, et la page officielle fait foi.',
                'La formation fait donc vérifier, avant le premier exercice, le type de compte de chaque participant et ce que ses réglages permettent de décider : historique, usage des conversations, export, suppression. Chacun note ce qu’il a constaté, et non ce qu’il croit savoir.',
                'La consigne qui en découle est d’une simplicité volontaire : un document de l’entreprise ne se traite pas dans le compte personnel d’un salarié. Ce compte échappe au contrôle de l’entreprise, ne respecte pas ses règles de conservation et part avec la personne. Si l’entreprise n’a pas d’espace de travail, les exercices se font sur des pièces anonymisées, et les pièces sensibles patientent jusqu’à l’ouverture d’un compte professionnel, ou restent hors de l’outil.',
                'Une promesse affichée par un éditeur n’est pas un audit indépendant. L’entreprise qui traite des données sensibles lit les conditions applicables à son propre compte et en tire sa règle.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles informations ne faut-il jamais saisir dans ChatGPT, même sur un compte professionnel ?',
            'items' => [
                'Le nom, l’adresse, la situation ou l’état de santé d’une personne identifiable (client, patient, élève, salarié, bénéficiaire) sans anonymisation décidée par l’entreprise.',
                'Les mots de passe, clés d’accès, codes secrets, numéros de compte bancaire ou de carte.',
                'Les contrats, grilles de prix et offres confidentielles, tant que la direction n’a pas tranché sur le compte autorisé.',
                'Les dossiers disciplinaires, litiges et pièces de procédure visant une personne nommée.',
                'Les informations stratégiques non annoncées : rachat, levée de fonds, nomination, résultats avant publication.',
                'Les documents protégés dont l’entreprise n’a pas les droits de reproduction ou de traitement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passent les séances : composition des groupes, exercices, supports remis et suivi ?',
            'intro' => 'On n’apprend un assistant qu’en le manipulant sur ses dossiers réels, sous le regard d’un formateur qui reprend l’erreur à temps. Le déroulement suit des règles constantes.',
            'items' => [
                ['titre' => 'Cadrage avant la session', 'texte' => 'Un ou deux entretiens fixent les tâches visées, les comptes existants, les règles de données et les documents. Ils peuvent aboutir à la recommandation d’un atelier plus court, voire d’autre chose qu’une formation.'],
                ['titre' => 'Questionnaire et groupes', 'texte' => 'Un questionnaire envoyé avant la session sert à composer des groupes cohérents. Les groupes sont plafonnés : dix personnes sur les deux jours, douze à l’atelier de découverte, huit à distance, dix en hybride.'],
                ['titre' => 'Documents à l’avance', 'texte' => 'Les exercices s’appuient sur des pièces déjà présentes sur chaque poste avant la séance, de sorte qu’une connexion fragile ne bloque rien. Si le réseau lâche, une solution de repli est prévue.'],
                ['titre' => 'Beaucoup de pratique', 'texte' => 'Une brève démonstration tirée d’un cas de l’équipe ouvre un long temps de pratique, chacun devant son écran et dans son compte. Le formateur parcourt les demandes comme les réponses et dit pourquoi une consigne échoue.'],
                ['titre' => 'Supports remis', 'texte' => 'Les participants repartent avec le déroulé, les documents de séance, les énoncés accompagnés de leur correction, ainsi que la fiche de relecture.'],
                ['titre' => 'Épreuve finale', 'texte' => 'Chacun mène seul sa tâche cible, chronomètre en main, de la demande à la vérification. Une attestation à son nom est remise ; elle ne vaut ni diplôme ni certification de l’éditeur.'],
                ['titre' => 'Suivi', 'texte' => 'Un canal direct demeure ouvert durant le mois suivant pour les difficultés d’application, sans supplément. Un accompagnement mensuel de trois demi-journées peut s’y ajouter sur devis.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Dans quels métiers et dans quels pays la formation trouve-t-elle son usage ?',
            'items' => [
                ['secteur' => 'Boutiques et négoce de détail, à Cotonou, Lomé ou Abidjan', 'probleme' => 'Les demandes des clients arrivent en vrac par messagerie, les descriptifs d’articles manquent de détails et les rappels d’impayés s’envoient en retard.', 'solution' => 'Les vendeurs apprennent à demander un tableau à partir de messages copiés, à reformuler les fiches produits et à rédiger des relances courtoises mais fermes, toujours relues avant envoi.'],
                ['secteur' => 'Transport, négoce et logistique, à Douala, Dakar ou Libreville', 'probleme' => 'Les échanges avec les fournisseurs se déroulent en plusieurs langues, et se tromper sur une quantité revient cher.', 'solution' => 'Courriers bilingues préparés avec ChatGPT, synthèse d’un dossier documentaire, tableau de contrôle où chaque quantité et chaque montant sont vérifiés dans la pièce d’origine.'],
                ['secteur' => 'ONG et programmes financés par des bailleurs, en Afrique de l’Ouest et du Centre', 'probleme' => 'Rédiger les rapports d’étape et les récits de mission occupe des journées entières, et les listes de bénéficiaires contiennent des données sensibles.', 'solution' => 'Rapports écrits d’après des sources contrôlées, tableau d’indicateurs renvoyant aux pages ; les noms des bénéficiaires restent hors de l’outil.'],
                ['secteur' => 'Cabinets d’expertise, de conseil ou d’avocats', 'probleme' => 'Les dossiers comportent beaucoup de pièces et les notes de synthèse se rédigent le soir.', 'solution' => 'ChatGPT aide à structurer une note et à repérer des points dans des pièces anonymisées ; le professionnel relit le texte et signe l’analyse. Les pièces nominatives restent hors de l’outil.'],
                ['secteur' => 'PME de services en France, en Belgique ou en Suisse', 'probleme' => 'Les procès-verbaux de réunion s’entassent, les décisions s’égarent, et le RGPD vise les informations des clients.', 'solution' => 'Un projet par client ou par dossier, des comptes rendus relus par l’assistante, une règle sur les données des clients. Séances possibles à distance.'],
                ['secteur' => 'Entreprise ou organisme public au Canada', 'probleme' => 'Les équipes alternent entre le français et l’anglais et doivent garder une cohérence de terminologie.', 'solution' => 'Un projet avec glossaire bilingue en fichier de référence, des traductions relues par un locuteur du métier, une règle sur les documents à ne pas importer.'],
                ['secteur' => 'Écoles, universités et centres de formation', 'probleme' => 'Les enseignants préparent des supports et des évaluations à partir de sources dispersées, avec peu de temps.', 'solution' => 'Plans de cours, exercices et grilles produits avec ChatGPT puis relus par l’enseignant ; aucune donnée d’élève identifiable n’est saisie.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formule choisir : atelier, deux jours, distance, hybride ou suivi mensuel ?',
            'legende' => 'Les formules s’enchaînent : un atelier pour une équipe pilote avant les deux jours, ou les deux jours suivis de l’accompagnement mensuel.',
            'entetes' => ['Formule', 'Temps', 'Effectif', 'Quand la choisir'],
            'lignes'  => [
                ['Atelier de découverte', 'Une demi-journée', 'Douze personnes maximum', 'Une direction désireuse d’observer ChatGPT sur ses dossiers avant de s’engager, ou une équipe novice'],
                ['Formation complète, intra', 'Deux jours, soit quatre demi-journées', 'Dix personnes maximum, regroupées par métier', 'Des habitudes déjà prises sans méthode, ou de gros volumes de travail qui méritent une vraie montée en compétence'],
                ['Session mutualisée, inter', '1 à 2 jours', 'Plusieurs organisations appartenant à un même réseau', 'Un ou deux représentants par structure, qui s’exercent sur des textes publics ou imaginés'],
                ['À distance', 'Cinq ou six séances de 2 h 30', 'Huit personnes maximum', 'Collègues dispersés entre sites ou pays ; un appel vidéo avec écran partagé suffit'],
                ['Hybride', 'Un jour en salle, puis des séances en ligne', 'Dix personnes maximum', 'Démarrage sur place, puis entraînement en ligne sur le travail courant'],
                ['Accompagnement mensuel', 'Une demi-journée mensuelle durant un trimestre', 'Le groupe déjà formé', 'Fixer les bonnes habitudes et aborder d’autres tâches'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation ChatGPT, et comment la régler ?',
            'intro'      => 'Aucun montant n’est affiché d’avance : le devis arrive après le cadrage et détaille chaque poste. Vous payez comme vous préférez : Mobile Money (MTN ou Moov), carte, PayPal, virement ou espèces. L’abonnement à ChatGPT reste votre affaire et n’entre pas dans ce devis. Les formules d’OpenAI et leurs limites évoluent ; sa page officielle fait foi.',
            'items'      => [
                ['offre' => 'Atelier de découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée avec vos propres pièces', 'Deux tâches abordées pas à pas', 'Cadre pour les données', 'Conseil sur la suite à donner']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées complètes', 'Exercices bâtis sur vos documents', 'Épreuve de fin et attestation', 'Échanges directs le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Trois demi-journées réparties', 'Revue des pratiques en cours', 'Tâches supplémentaires', 'Compte rendu écrit au troisième mois']],
            ],
            'variations' => [
                'Combien de stagiaires et de groupes sont à constituer.',
                'La formule choisie et le nombre de demi-journées.',
                'Le temps passé à bâtir des exercices avec vos pièces.',
                'L’endroit : vos bureaux, une salle réservée, ou un trajet hors de Cotonou et du Bénin.',
                'Le mode : sur place, à distance ou hybride.',
                'Le suivi prévu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on faire financer la session par un fonds de formation ?',
            'paragraphes' => [
                'Parfois, mais jamais automatiquement. Des dispositifs existent pour les entreprises privées de plusieurs pays : le FDFP en Côte d’Ivoire, le 3FPT au Sénégal, le FODEFCA au Bénin, les opérateurs de compétences (OPCO) en France. Chacun a ses conditions, ses formulaires et ses exigences envers le prestataire.',
                'Avant de signer, écrivez au fonds en joignant le programme et le devis. Richard SALANON ne revendique ni certification de qualité ni agrément auprès de ces organismes : si votre décision dépend d’une prise en charge, c’est à vous de vérifier que votre dossier est finançable, et de prévoir votre budget sans cette aide le cas échéant.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond d’une erreur reprise depuis ChatGPT ?',
            'texte' => 'Toujours l’entreprise, et la personne qui envoie ou signe. Un assistant peut produire un texte faux avec aplomb. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> montre qu’une entreprise répond de ce que dit son assistant. La formation en fait une règle de poste : ChatGPT propose, une personne nommée vérifie et décide.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles habitudes se perdent un mois après la session, et comment les garder ?',
            'intro' => 'Le vrai test d’une formation, c’est ce que l’équipe pratique encore un mois après. Voici les dérives les plus fréquentes avec ChatGPT et leur parade.',
            'items' => [
                ['titre' => 'Reprendre le texte sans le lire', 'texte' => 'Après quelques jours, tout semble bien écrit. Un délai erroné ou un rabais jamais consenti se glisse alors dans un courrier. La grille de relecture reste affichée et rien ne part sans lecture complète.'],
                ['titre' => 'Croire une source parce qu’elle est citée', 'texte' => 'Une citation indique où regarder, pas que la réponse est juste. On ouvre la page, on lit la phrase, on regarde la date.'],
                ['titre' => 'Utiliser son compte personnel pour le travail', 'texte' => 'C’est la pente naturelle quand l’échéance presse. La règle en trois familles de documents permet de décider vite, et l’entreprise fournit un compte adapté.'],
                ['titre' => 'Laisser la mémoire retenir ce qu’elle ne devrait pas', 'texte' => 'Un client, un montant ou un litige mentionnés une fois peuvent revenir plus tard. On consulte et on nettoie la mémoire à échéance régulière, ou l’on travaille en conversation temporaire.'],
                ['titre' => 'Bâtir un outil d’équipe sur une fonction qui change', 'texte' => 'Les GPTs personnalisés ont évolué et peuvent évoluer encore. On préfère des projets bien réglés et une méthode documentée à un assistant que l’on ne pourra peut-être pas conserver.'],
                ['titre' => 'Multiplier les conversations sans les ranger', 'texte' => 'Au bout de deux mois, plus personne ne retrouve la bonne version. Chaque dossier récurrent a son projet, avec un nom clair et un responsable.'],
                ['titre' => 'Lancer une recherche approfondie par réflexe', 'texte' => 'Elle est plus lente qu’un chat et sa disponibilité varie selon la formule. On la réserve aux études qui le méritent et l’on garde le chat pour le reste.'],
                ['titre' => 'Interdire sans former', 'texte' => 'Une interdiction sèche renvoie l’usage vers les téléphones privés, hors de toute règle. Mieux vaut un cadre écrit ; le programme <a href="/formations/gouvernance-ia">Gouverner l’IA dans l’entreprise</a> accompagne cette rédaction.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Réseau, langue, données personnelles : en quoi le contexte local compte-t-il ?',
            'paragraphes' => [
                'ChatGPT fonctionne en ligne. Une connexion qui coupe, ralentit en fin de journée ou coûte cher en données mobiles est une contrainte à intégrer au plan de formation. Les fichiers d’exercice sont donc enregistrés à l’avance sur chaque poste, et une solution de repli est prévue si la liaison tombe.',
                'La langue compte autant. Les documents d’une entreprise sont en français, en anglais ou mêlés, avec des tournures propres à chaque pays. Les participants apprennent à fournir un exemple de courrier validé pour fixer le registre, et à faire relire par un locuteur du métier tout texte généré dans une langue nationale.',
                'Côté béninois, avant de décider quelles données personnelles peuvent entrer dans un assistant en ligne, l’entreprise consulte le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">code du numérique béninois</a>, texte de 2018 numéroté 2017-20. Cette fiche ne résume pas la loi et ne donne aucun avis juridique : le texte intégral se lit sur le site du Secrétariat général du Gouvernement, et la règle interne dit ce qui peut partir ou non.',
                'En Europe, le RGPD encadre ces mêmes gestes. La <a href="https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en">Commission européenne</a> rappelle que sont des données personnelles celles qui concernent une personne identifiée ou identifiable : un courriel qui nomme un client reste concerné. Le sujet est approfondi dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui anime la formation ChatGPT, et sur quelle expérience ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'ChatGPT fait partie des outils d’IA qu’il enseigne. Il est l’auteur de <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à base d’IA destiné aux sociétés d’Afrique francophone, et le co-fondateur d’<a href="https://audyxa.com">Audyxa</a>. Son bagage : plus de ' . $ans . ' ans de métier, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées, un passage par EPITECH en 2022.',
                'Sa méthode : des exercices construits avec vos documents, une épreuve de fin portant sur un vrai travail, des supports laissés à la société, et aucun gain annoncé. Aucun éditeur ne l’a certifié et il ne représente pas OpenAI : il enseigne un outil du marché, quitte à conclure au cadrage qu’une session plus courte suffit. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a> ; les pays desservis sont détaillés dans les <a href="/zones/">zones d’intervention</a>.',
                'Si votre besoin dépasse la prise en main, par exemple relier l’IA à vos applications, cela relève d’une prestation d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>. Le reste de l’offre du domaine est rassemblé dans les <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>, et le choix entre assistants dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quels points garder en tête avant d’engager votre équipe ?',
            'texte' => 'Retenez deux ou trois tâches réelles pour chaque groupe, contrôlez le type de compte avant le premier exercice, triez les documents en trois familles, ouvrez toujours la source citée, rangez les dossiers récurrents en projets et gardez la mémoire sous contrôle. Les formules et limites d’OpenAI évoluent : relisez sa page officielle le jour de la décision.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Prêt à former votre équipe à ChatGPT ?',
            'texte'  => 'Indiquez l’effectif, les postes, les tâches les plus longues, les comptes ChatGPT existants et la formule envisagée : réponse sous 24 heures, puis proposition et devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation ChatGPT'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il un bagage technique pour suivre la formation ?', 'r' => 'Aucun. ChatGPT se pilote par écrit ou à la voix, en français. L’essentiel est d’expliquer exactement ce que l’on attend puis de contrôler la réponse ; ces deux réflexes s’acquièrent en s’exerçant sur ses dossiers.'],
        ['q' => 'Nos conversations servent-elles à entraîner les modèles d’OpenAI ?', 'r' => 'Cela dépend du type de compte et des réglages choisis, et ces règles évoluent. La formation fait constater, compte par compte, ce que chaque participant peut régler ; les conditions de l’éditeur et sa page officielle font foi, et aucune promesse n’est reprise ici.'],
        ['q' => 'Peut-on utiliser son compte personnel pour les documents de l’entreprise ?', 'r' => 'Ce n’est pas recommandé. Un compte personnel échappe aux règles de l’entreprise et part avec la personne. Les exercices sur compte personnel se font avec des pièces anonymisées ; les pièces sensibles patientent jusqu’à l’ouverture d’un compte professionnel.'],
        ['q' => 'ChatGPT peut-il analyser un fichier Excel ?', 'r' => 'Oui, on peut joindre un tableur à une conversation et lui demander des totaux, des tris ou un graphique, selon ce que permet le compte. Les valeurs sont moins sûres lues sur une image ou un scan. On recalcule toujours quelques chiffres à la main.'],
        ['q' => 'Que fait la mémoire de ChatGPT, et peut-on la couper ?', 'r' => 'Elle sert à retenir des informations d’une conversation à l’autre. Ses réglages varient selon les comptes : la formation les fait constater, et la règle d’équipe dit s’il faut la couper ou travailler en conversation temporaire.'],
        ['q' => 'À quoi sert la recherche approfondie, et est-elle fiable ?', 'r' => 'Elle rassemble plusieurs sources dans un rapport plus long qu’une réponse de chat. Elle ne dispense pas de contrôle : citations et résultats peuvent être inexacts, on ouvre les sources avant de reprendre un fait.'],
        ['q' => 'Que deviennent les GPTs personnalisés ?', 'r' => 'Leur disponibilité et leurs conditions ont évolué et peuvent encore changer. La formation montre comment obtenir un résultat voisin avec un projet. Vérifiez la page officielle de l’éditeur pour votre espace avant d’investir du temps.'],
        ['q' => 'Faut-il acheter un abonnement avant la session ?', 'r' => 'Non. Un simple compte permet d’apprendre la méthode, avec ses restrictions. Les offres d’OpenAI changent ; sa page officielle fait foi, et l’abonnement de la société se tranche une fois la formation terminée.'],
        ['q' => 'La formation couvre-t-elle aussi Claude, Gemini ou Copilot ?', 'r' => 'Non, elle se limite à ChatGPT. Pour manier plusieurs assistants, voir la formation IA en entreprise ; pour arbitrer entre eux, le comparatif du site.'],
        ['q' => 'Quelle taille de groupe ?', 'r' => 'Pour les deux jours, le groupe compte dix personnes au plus ; l’atelier de découverte en accueille douze, la distance huit, l’hybride dix.'],
        ['q' => 'La formation peut-elle se donner entièrement à distance ?', 'r' => 'Oui : cinq ou six rendez-vous de 2 h 30 par appel vidéo, écran partagé. Une bonne connexion est nécessaire pour chacun, et une solution de repli existe si le réseau tombe.'],
        ['q' => 'Quel est le tarif ?', 'r' => 'Le montant figure dans un devis remis après le cadrage ; il dépend du nombre de stagiaires, de la formule, du travail de préparation, du lieu et du suivi. Le paiement passe par Mobile Money, carte, PayPal, virement ou espèces.'],
        ['q' => 'Un fonds peut-il financer la session ?', 'r' => 'Chaque fonds a ses règles et rien n’est garanti. Richard SALANON ne revendique ni certification de qualité ni agrément : écrivez au fonds, programme et devis joints, avant tout engagement.'],
        ['q' => 'Le formateur est-il certifié OpenAI ?', 'r' => 'Non, aucun éditeur ne l’a certifié et il ne représente pas OpenAI. ChatGPT y est présenté en tant qu’outil du marché, travaillé sur vos pièces et vos comptes. Une attestation nominative est remise, sans valeur de diplôme ni de certification d’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Commission européenne, la protection des données expliquée (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'prompt-engineering', 'ia-ethique-conformite', 'ia-generative-dirigeants', 'rag-chatbot-documents', 'gouvernance-ia'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
