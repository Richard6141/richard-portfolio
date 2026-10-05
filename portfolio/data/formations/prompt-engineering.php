<?php
// ============================================================
// data/formations/prompt-engineering.php · Fiche formation « Prompt
// engineering professionnel » (vague 1B, lot B, domaine
// intelligence-artificielle). Angle propre : écrire des consignes fiables et
// réutilisables (structure, contexte, exemples, format de sortie,
// contraintes), bâtir une bibliothèque de gabarits partagée, évaluer et
// comparer les réponses, réduire les erreurs. Ne traite pas l'usage quotidien
// des assistants (ia-en-entreprise), les décisions de direction
// (ia-generative-dirigeants), les assistants qui agissent
// (agents-ia-assistants), l'indexation de documents (rag-chatbot-documents)
// ni la production de contenus marketing (contenu-avec-ia). Aucune ancienne
// page. Faits externes relevés le 05/10/2026 à la source : guides de
// rédaction de consignes et d'évaluation d'OpenAI, d'Anthropic et de Google
// (API Gemini et guide Google Workspace), page d'aide de Microsoft sur les
// consignes Copilot, Microsoft Learn (Copilot Chat), tarifs ChatGPT, Claude
// et API Gemini, Sclar et al. (ICLR 2024), Liu et al. (TACL), Work Trend
// Index 2024, UIT, Commission européenne (article 4, fait vérifié du
// catalogue), SGG du Bénin, FDFP, 3FPT, France Compétences. Aucune
// certification ni aucun agrément attribué à Richard. Publication du lot B
// reportée ensuite : 'publie' reste au 2026-10-05 pendant la rédaction.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation prompt engineering professionnel : écrire des consignes fiables et réutilisables, bâtir la bibliothèque de gabarits de l\'équipe et évaluer les réponses de l\'IA avant de s\'y fier',
    'title'   => 'Formation prompt engineering professionnel | Richard SALANON',
    'meta'    => 'Formation prompt engineering : rédiger des consignes fiables, bâtir des gabarits partagés et évaluer les réponses de ChatGPT, Claude ou Gemini. Sur devis.',
    'en_bref' => 'Cette formation s\'adresse aux personnes qui utilisent déjà un assistant d\'IA et veulent obtenir des résultats constants : elles apprennent à structurer une consigne, à lui donner contexte, exemples, format de sortie et contraintes, à la transformer en gabarit que toute l\'équipe peut réutiliser, puis à évaluer et comparer les réponses sur un jeu de cas réels. Elle dure deux jours en quatre demi-journées, ou six séances de deux heures à distance. Elle se tient en intra, en inter, à distance ou en formule hybride, pour huit personnes au plus. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => false,
    'duree'   => '2 jours en 4 demi-journées, ou 6 séances de 2 heures à distance',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : diagnostiquer ses consignes actuelles et poser l\'anatomie d\'une consigne fiable',
            'duree'  => '3 h 30',
            'points' => [
                'Revue des trois consignes que chaque participant utilise déjà : on les lance trois fois de suite et on note ce qui varie d\'une réponse à l\'autre.',
                'Pourquoi un modèle ne répond jamais deux fois exactement pareil, et ce que cela impose : tester avant de partager, au lieu de juger sur un seul essai réussi.',
                'Les éléments sur lesquels s\'accordent les guides d\'OpenAI, d\'Anthropic et de Google : rôle, tâche formulée par un verbe, contexte, exemples, format attendu, contraintes.',
                'Le test du collègue : faire lire sa consigne à un voisin qui ignore tout du dossier ; s\'il hésite sur ce qu\'il doit produire, le modèle hésitera aussi.',
                'Séparer clairement les parties d\'une consigne avec des titres ou des balises, et placer les documents longs avant la question.',
                'Exercice : réécrire sa consigne la plus utilisée selon cette anatomie, puis comparer trois réponses de l\'ancienne et de la nouvelle version.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : exemples, format de sortie et contraintes qui tiennent',
            'duree'  => '3 h 30',
            'points' => [
                'Choisir des exemples : trois à cinq cas proches du travail réel, variés, présentés tous de la même façon et séparés des instructions.',
                'Imposer un format de sortie exploitable : tableau à colonnes fixes, champs nommés, longueur maximale, plan imposé, mention obligatoire de la source.',
                'Écrire des contraintes positives (ce qu\'il faut faire) plutôt que des interdits, et expliquer la raison de chaque règle pour que le modèle l\'applique aux cas imprévus.',
                'Autoriser explicitement la réponse « information absente du document » et exiger les citations exactes sur lesquelles repose chaque affirmation.',
                'Découper une tâche lourde en consignes successives : extraire, puis rédiger, puis relire le brouillon au regard de critères écrits.',
                'Exercice sur une tâche réelle de l\'équipe : produire une réponse au bon format sur dix documents différents, sans retouche manuelle.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : transformer les consignes en gabarits et organiser la bibliothèque partagée',
            'duree'  => '3 h 30',
            'points' => [
                'Repérer dans une consigne ce qui change à chaque usage (client, document, date, ton) et le remplacer par des champs à remplir, écrits entre crochets.',
                'La fiche de gabarit : nom, objectif, responsable, version, assistant testé, données autorisées, exemple de sortie, limites connues, date de dernière vérification.',
                'Choisir où ranger la bibliothèque (document partagé, tableur, espace d\'équipe déjà utilisé) et fixer les conventions de nommage et de classement.',
                'Gérer les versions : journal des modifications, numéro de version, ancienne version conservée tant que la nouvelle n\'a pas passé les tests.',
                'Qui crée, qui valide, qui retire un gabarit, et à quel rythme la bibliothèque est relue.',
                'Exercice en binôme : chacun convertit une consigne du matin en gabarit documenté, que l\'autre utilise sans explication orale.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : évaluer, comparer les réponses et réduire les erreurs, puis évaluation finale',
            'duree'  => '3 h 30',
            'points' => [
                'Construire un jeu de test de dix à vingt cas réels, en y glissant des cas difficiles : information manquante, document trop long, demande ambiguë, fautes de frappe.',
                'Remplir une grille de notation dans un tableur : exactitude, complétude, respect du format, ton, sources citées, avec un critère éliminatoire.',
                'Comparer deux versions d\'un gabarit, puis deux assistants, sur le même jeu de cas, et décider sur des notes plutôt que sur une impression.',
                'Lancer plusieurs fois la même consigne pour repérer les réponses instables, signe fréquent d\'une erreur ou d\'une invention.',
                'Faire noter les réponses par un second modèle, et vérifier d\'abord que ses notes concordent avec celles d\'une personne.',
                'Évaluation finale : chaque participant remet un gabarit documenté, son jeu de test et ses notes ; plan de déploiement de la bibliothèque sur 30 jours.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou 6 séances de 2 heures à distance'],
        ['l' => 'Public', 'v' => 'Utilisateurs réguliers d\'un assistant d\'IA, référents IA, rédacteurs de consignes pour une équipe'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 8 personnes au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et qu\'est-ce qu\'elle ne couvre pas ?',
            'paragraphes' => [
                'Dans la plupart des équipes qui utilisent l\'IA depuis quelques mois, le constat est le même : une personne obtient d\'excellents résultats, ses collègues n\'arrivent pas à les reproduire, et la même demande donne une réponse soignée le lundi et approximative le mardi. La différence ne tient pas au talent. Elle tient à la consigne, c\'est-à-dire au texte que l\'on donne au modèle, et à l\'absence de méthode pour la tester. OpenAI définit d\'ailleurs le prompt engineering comme l\'art d\'écrire des instructions pour qu\'un modèle produise de façon constante un contenu conforme aux exigences.',
                'À la fin des deux jours, chaque participant sait, seul : rédiger une consigne complète, avec rôle, tâche, contexte, exemples, format de sortie et contraintes ; en retirer les éléments variables pour en faire un gabarit ; rédiger la fiche qui permet à un collègue de l\'utiliser sans aide ; constituer un jeu de dix cas de test ; noter des réponses avec une grille ; comparer deux versions d\'une consigne et retenir la meilleure sur des chiffres ; appliquer quatre techniques qui réduisent les inventions du modèle.',
                'Ces objectifs sont vérifiés la dernière demi-journée : chaque participant remet un gabarit, son jeu de test et les notes obtenues. Un gabarit qui ne passe pas son propre jeu de test n\'entre pas dans la bibliothèque, même si son auteur le trouve bon. C\'est la règle la plus utile de la formation, et la plus difficile à tenir ensuite sans elle.',
                'La formation suppose que la prise en main est faite. Elle n\'apprend pas à ouvrir un compte ni à résumer un premier document : c\'est l\'objet de la formation <a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>. Elle ne construit pas d\'assistant qui consulte des outils ou agit dans un logiciel, sujet de la formation Agents IA et assistants internes, ni de robot qui répond sur un fonds documentaire indexé, sujet de la formation RAG : chatbot sur vos documents internes. Les contenus marketing ont aussi leur formation, Créer du contenu avec l\'IA.',
                'Elle ne traite pas non plus la programmation : brancher un modèle sur vos logiciels par API relève de la formation <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>. Les règles de droit sur les données sont rappelées là où elles touchent l\'écriture des consignes, et détaillées dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Enfin, aucun gain chiffré n\'est promis : la formation apprend justement à mesurer la qualité des réponses, et cette mesure dira ce que vos gabarits valent.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quel niveau de départ et quel matériel ?',
            'intro' => 'La formation vise les personnes qui écrivent des consignes pour elles-mêmes et, de plus en plus, pour d\'autres. Le prérequis est une pratique réelle : sans quelques semaines d\'usage, on ne sait pas encore ce qui ne marche pas.',
            'items' => [
                ['titre' => 'Les référents IA et les relais internes', 'texte' => 'Ceux que les collègues sollicitent déjà pour « la bonne formule ». Ils repartent avec une méthode pour transformer leurs recettes personnelles en gabarits documentés, et pour en garantir la qualité dans le temps.'],
                ['titre' => 'Les métiers qui écrivent beaucoup', 'texte' => 'Assistanat de direction, communication interne, service client, ressources humaines, juristes, chargés de projet, analystes. Leurs tâches répétitives (réponses types, synthèses, extractions, notes) sont celles qui gagnent le plus à un gabarit éprouvé.'],
                ['titre' => 'Les équipes techniques et produit', 'texte' => 'Développeurs, chefs de produit et responsables qualité qui rédigent les instructions d\'une application. Ils y trouvent la méthode d\'évaluation, qui vaut pour une consigne de conversation comme pour une consigne intégrée à un logiciel.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Utiliser au moins un assistant (ChatGPT, Claude, Gemini ou Copilot) plusieurs fois par semaine depuis un mois ou plus. Un questionnaire envoyé avant la session vérifie ce niveau et recueille les consignes de chacun ; une personne débutante est orientée vers la prise en main.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant, un navigateur à jour, un tableur pour la grille de notation, et un accès à au moins deux assistants, en version gratuite ou professionnelle. Comparer deux outils fait partie de la méthode, pas d\'un concours entre éditeurs.'],
                ['titre' => 'Ce que chacun apporte', 'texte' => 'Trois consignes qu\'il utilise vraiment, deux tâches récurrentes de son poste et, pour chacune, cinq à dix documents d\'exemple anonymisés. Ces documents deviennent le jeu de test de l\'après-midi du deuxième jour.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices fait-on sur les tâches réelles de l\'équipe ?',
            'legende' => 'Exemples d\'exercices préparés à partir des consignes et des documents envoyés avant la session. La dernière colonne indique comment le participant prouve que sa nouvelle version fait mieux que l\'ancienne.',
            'entetes' => ['Tâche de l\'équipe', 'Consigne de départ typique', 'Ce que la version travaillée ajoute', 'Comment on la teste'],
            'lignes'  => [
                ['Répondre à une réclamation client', '« Réponds poliment à ce client mécontent »', 'Le rôle du service, la politique de remboursement collée en contexte, deux réponses validées en exemple, une longueur maximale, l\'interdiction de promettre un délai absent de la politique', 'Quinze réclamations réelles anonymisées, dont trois hors politique : aucune réponse ne doit inventer de geste commercial'],
                ['Extraire les données d\'une facture fournisseur', '« Donne-moi les infos de cette facture »', 'La liste des champs attendus, leur format (date, montant, devise), la valeur à écrire quand un champ manque, un exemple complet', 'Vingt factures de formats différents, comparées champ par champ à une saisie faite à la main'],
                ['Synthétiser un rapport de mission', '« Résume ce rapport »', 'Le destinataire et sa décision à prendre, un plan imposé, la citation exacte et la page de chaque chiffre repris', 'Cinq rapports : chaque chiffre de la synthèse est retrouvé dans la source, sinon la réponse est notée zéro'],
                ['Classer des demandes entrantes', '« Classe ces messages »', 'Les catégories définies avec un exemple chacune, une catégorie « autre », une sortie sur une seule ligne par message', 'Cinquante messages déjà classés par l\'équipe : on compte les écarts entre le modèle et le classement humain'],
                ['Rédiger une fiche produit ou une annonce', '« Écris une fiche pour ce produit »', 'Le ton de la maison illustré par trois fiches publiées, les caractéristiques fournies comme seule source, une structure fixe', 'Dix produits : aucune caractéristique absente des données ne doit apparaître dans la fiche'],
                ['Préparer une note juridique ou réglementaire', '« Que dit la loi sur ce point ? »', 'Les textes fournis en contexte, l\'interdiction de citer un article qui n\'y figure pas, la mention « à vérifier » pour toute interprétation', 'Huit questions dont deux sans réponse dans les textes : le modèle doit le dire au lieu d\'inventer'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Sur quoi s\'accordent les guides d\'OpenAI, d\'Anthropic et de Google ?',
            'legende' => 'Synthèse établie à partir des guides officiels lus à la source le 5 octobre 2026. La formation s\'appuie sur ces points communs, qui survivent aux changements de version, plutôt que sur les astuces propres à un modèle.',
            'entetes' => ['Principe', 'OpenAI', 'Anthropic', 'Google'],
            'lignes'  => [
                ['Structurer la consigne', 'Un message d\'instructions organisé en sections : identité, instructions, exemples, contexte, séparées par des titres ou des balises', 'Des balises cohérentes pour séparer instructions, contexte, exemples et données variables', 'Le guide Google Workspace retient quatre éléments : persona, tâche, contexte, format ; la tâche doit toujours contenir un verbe'],
                ['Donner le contexte', 'Ajouter dans la demande les informations dont le modèle a besoin, y compris des données propres à l\'entreprise', 'Expliquer pourquoi une règle existe ; le modèle généralise à partir de l\'explication', 'Fournir les informations et les contraintes nécessaires au lieu de supposer que le modèle les connaît'],
                ['Montrer des exemples', 'Quelques paires d\'entrée et de sortie dans la consigne', 'Trois à cinq exemples pertinents et variés, placés dans des balises distinctes', 'Toujours inclure quelques exemples, avec une mise en forme identique de l\'un à l\'autre'],
                ['Fixer le format et les contraintes', 'Décrire la réponse attendue et ses règles dans les instructions', 'Dire ce qu\'il faut faire plutôt que ce qu\'il ne faut pas faire', 'Préciser longueur, format et périmètre de la réponse'],
                ['Itérer et tester', 'Construire des évaluations qui mesurent le comportement de la consigne, et figer la version du modèle en production', 'Définir des critères de réussite et des tests avant de retoucher la consigne', 'Reformuler, changer l\'ordre des éléments, découper la tâche, puis comparer'],
                ['Vérifier la réponse', 'Associer les mesures automatiques au jugement humain', 'Autoriser le « je ne sais pas », exiger des citations, retirer toute affirmation sans appui', 'Relire chaque résultat pour sa clarté, sa pertinence et son exactitude : le résultat final reste le vôtre'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment une consigne qui a marché une fois devient-elle un gabarit d\'équipe ?',
            'items' => [
                ['titre' => 'Capturer la consigne et ses résultats', 'duree' => 'Au fil du travail', 'texte' => 'Dès qu\'une consigne donne un bon résultat, on la copie telle quelle avec le document utilisé et la réponse obtenue. Sans cette trace, la « bonne formule » se perd dans l\'historique d\'une conversation que personne ne retrouvera.'],
                ['titre' => 'Remplacer ce qui varie par des champs', 'duree' => '15 minutes', 'texte' => 'Le nom du client, le document, la date, le destinataire ou le ton deviennent des champs entre crochets, par exemple [CLIENT] ou [DOCUMENT]. Ce qui reste est la partie stable, celle qu\'on teste.'],
                ['titre' => 'Rédiger la fiche du gabarit', 'duree' => '20 minutes', 'texte' => 'Objectif, responsable, assistant utilisé, données autorisées, exemple de sortie, limites connues. Un collègue doit pouvoir s\'en servir sans poser de question à l\'auteur.'],
                ['titre' => 'Passer le jeu de test', 'duree' => '1 heure environ', 'texte' => 'Dix à vingt cas réels, dont quelques cas difficiles, notés avec la grille commune. Le seuil d\'acceptation est fixé avant de lancer les tests, pas après avoir vu les résultats.'],
                ['titre' => 'Faire relire par un pair', 'duree' => 'Une journée', 'texte' => 'Une autre personne utilise le gabarit sur ses propres cas, sans l\'aide de l\'auteur. Ce qu\'elle ne comprend pas dans la fiche est corrigé avant publication.'],
                ['titre' => 'Publier en version 1.0', 'duree' => 'Le jour de la validation', 'texte' => 'Le gabarit entre dans la bibliothèque avec sa fiche, son jeu de test et ses notes. Le responsable de la bibliothèque l\'annonce à l\'équipe, avec le cas d\'usage auquel il répond.'],
                ['titre' => 'Surveiller et réviser', 'duree' => 'Chaque trimestre, et à chaque changement d\'outil', 'texte' => 'Les erreurs signalées par les utilisateurs sont notées dans le journal du gabarit. Quand l\'assistant change de version, on repasse le jeu de test : une consigne excellente hier peut se dégrader sans prévenir.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que doit contenir la fiche d\'un gabarit pour être utilisée sans son auteur ?',
            'items' => [
                'Un nom explicite, qui dit la tâche et le service : « Service client, réponse à une réclamation de livraison ».',
                'L\'objectif en une phrase et le résultat attendu, avec un exemple de sortie validé.',
                'Le texte du gabarit, avec ses champs entre crochets et, pour chacun, ce qu\'il faut y mettre.',
                'L\'assistant et la version sur lesquels le gabarit a été testé, et la date du dernier test.',
                'Les données autorisées et interdites : ce qu\'on peut coller dans le champ [DOCUMENT], ce qu\'on doit anonymiser, ce qui ne sort pas.',
                'Les limites connues : les cas où le gabarit se trompe, et la vérification à faire avant d\'utiliser la réponse.',
                'Le nom du responsable, le numéro de version et le journal des modifications.',
                'Le lien vers le jeu de test et les notes obtenues, pour que le prochain qui le modifie puisse comparer.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment note-t-on une réponse pour comparer deux consignes ?',
            'legende' => 'Grille de départ remise aux participants, à adapter à chaque tâche. Chaque critère est noté 0, 1 ou 2 ; le critère éliminatoire ramène la note de la réponse à zéro, quelle que soit la qualité du reste.',
            'entetes' => ['Critère', 'Question posée au correcteur', '2 points', '0 point'],
            'lignes'  => [
                ['Exactitude (éliminatoire)', 'Chaque fait, chiffre, nom et date se retrouve-t-il dans la source ?', 'Tout est vérifiable dans le document fourni', 'Au moins une information inventée ou déformée'],
                ['Complétude', 'Les éléments demandés sont-ils tous présents ?', 'Rien ne manque au regard de la consigne', 'Une partie essentielle est absente'],
                ['Respect du format', 'La structure, la longueur et les champs imposés sont-ils respectés ?', 'Réutilisable sans retouche de forme', 'À remettre en forme entièrement'],
                ['Ton et destinataire', 'Le texte convient-il à la personne qui va le lire ?', 'Envoyable tel quel après relecture', 'Ton inadapté ou formules à proscrire'],
                ['Traçabilité', 'Les passages de la source sont-ils cités quand la consigne le demande ?', 'Citation exacte pour chaque point important', 'Aucune citation, ou citation introuvable'],
                ['Aveu d\'ignorance', 'Quand l\'information manque, la réponse le dit-elle ?', 'Le manque est signalé clairement', 'Le vide est comblé par une invention'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle : groupe, pratique, supports et suivi ?',
            'intro' => 'Une consigne s\'améliore en la confrontant à des cas réels et au regard d\'un autre. La méthode suit ce principe du premier au dernier exercice.',
            'items' => [
                ['titre' => 'Huit personnes au plus', 'texte' => 'Le formateur lit les consignes de chacun et les réponses obtenues, ce qui devient impossible au-delà. À distance, le groupe descend à six personnes, pour que chaque écran partagé soit commenté.'],
                ['titre' => 'Vos consignes comme matière première', 'texte' => 'La première heure part des consignes que les participants utilisent déjà, pas d\'exemples choisis pour bien fonctionner. Les défauts réels de l\'équipe sont ceux qui se corrigent.'],
                ['titre' => 'Mesurer avant de discuter', 'texte' => 'Chaque amélioration proposée est testée sur plusieurs cas et notée avec la grille. Les débats sur la « meilleure formulation » se tranchent par les notes, ce qui évite les querelles de goût.'],
                ['titre' => 'La relecture croisée', 'texte' => 'Les gabarits sont échangés entre participants, qui les utilisent sans explication de l\'auteur. Ce qu\'un collègue ne comprend pas, un nouvel arrivant ne le comprendra pas davantage dans six mois.'],
                ['titre' => 'Plusieurs assistants côte à côte', 'texte' => 'Les mêmes consignes sont passées sur deux assistants au moins. On y voit ce qui relève de la méthode, valable partout, et ce qui dépend d\'un outil, à noter dans la fiche du gabarit.'],
                ['titre' => 'Les supports remis', 'texte' => 'Le programme, les supports de la session, le modèle de fiche de gabarit, la grille de notation dans un tableur, les jeux de test construits pendant la formation, les gabarits validés et une attestation nominative, dans des formats modifiables par l\'entreprise.'],
                ['titre' => 'Le suivi après la session', 'texte' => 'Un canal direct pendant le mois suivant pour les questions de mise en œuvre. En option, une revue de la bibliothèque un mois après : relecture des gabarits ajoutés, des notes et des erreurs signalées.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on, et combien coûtent-ils ?',
            'legende' => 'Prix et conditions relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. Ces coûts sont ceux des éditeurs, au nom de l\'entreprise : ils ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Usage pendant la formation', 'Prix de l\'éditeur', 'Ce qu\'il faut savoir'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction et test des consignes en conversation', 'Gratuit ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle (25 dollars au mois), à partir de 2 utilisateurs', 'OpenAI indique ne pas entraîner ses modèles sur les données de l\'offre Business par défaut'],
                ['Claude (Anthropic)', 'Rédaction et test des consignes, comparaison avec un autre assistant', 'Gratuit ; Pro 17 dollars par mois en annuel ou 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel (25 dollars au mois)', 'La version gratuite permet jusqu\'à 5 projets, utiles pour ranger les gabarits pendant la session'],
                ['Google AI Studio et Gemini', 'Essais de consignes avec réglages visibles', 'Google indique que l\'usage de Google AI Studio est gratuit dans toutes les régions où il est disponible', 'En niveau gratuit de l\'API Gemini, les contenus servent à améliorer les produits de Google : aucun document interne n\'y est collé'],
                ['Microsoft Copilot Chat', 'Tests pour les équipes équipées de Microsoft 365', 'Inclus dans les licences Microsoft 365 éligibles, sans licence Microsoft 365 Copilot', 'La licence payante ajoute l\'accès aux données de l\'organisation ; la méthode d\'écriture reste la même'],
                ['API des modèles (consoles des éditeurs)', 'Lancer un jeu de test entier en une fois, pour les équipes techniques', 'À la consommation ; chez Anthropic, par million de jetons en entrée puis en sortie : 1 et 5 dollars (Haiku 4.5), 2 et 10 dollars (Sonnet 5.5), 4 et 20 dollars (Opus 5.5)', 'Facultatif : la plupart des groupes évaluent dans un tableur, en copiant les réponses obtenues en conversation'],
                ['Tableur et document partagé', 'Grille de notation, jeux de test, bibliothèque de gabarits', 'Ceux que l\'entreprise possède déjà (Excel, Google Sheets, LibreOffice)', 'La bibliothèque reste dans un outil de l\'entreprise, indépendant de l\'éditeur d\'IA retenu'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il un abonnement payant ou un accès technique pour évaluer ses consignes ?',
            'paragraphes' => [
                'Non. Les versions gratuites suffisent pour apprendre à écrire et à comparer, et la grille de notation tient dans un tableur. Le seul vrai coût d\'une évaluation est le temps de lecture : noter vingt réponses avec soin prend environ une heure. C\'est pourquoi la formation apprend à choisir des cas de test qui révèlent les défauts, plutôt qu\'à en accumuler.',
                'Pour les équipes techniques qui passent par l\'API, le coût en jetons reste modeste. Un calcul fait à partir des prix publics d\'Anthropic le montre : vingt cas, deux versions de consigne, trois essais par cas, soit 120 appels de 3 000 jetons en entrée et 600 en sortie, coûtent environ 0,72 dollar avec Haiku 4.5, 1,44 dollar avec Sonnet 5.5 et 2,88 dollars avec Opus 5.5. Le temps de la personne qui conçoit et lit les tests pèse beaucoup plus lourd.',
                'Une règle s\'impose en revanche dès la formation : les documents internes ne sont jamais collés dans un compte personnel gratuit, ni dans un service dont les conditions prévoient l\'usage des contenus pour améliorer les modèles. Les jeux de test se construisent donc sur des copies anonymisées, et ceux qui contiennent des données sensibles attendent un compte professionnel. Pour choisir entre les offres d\'équipe, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille leurs conditions.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi servent des gabarits éprouvés, selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Service client d\'un opérateur de distribution, à Cotonou ou à Abidjan', 'probleme' => 'Six agents répondent aux réclamations avec un assistant, chacun avec sa propre formule ; certains promettent des remboursements que la politique ne prévoit pas.', 'solution' => 'Un gabarit unique de réponse, avec la politique en contexte et trois réponses validées en exemple, testé sur quinze réclamations réelles avant d\'être partagé ; toute réponse hors politique est renvoyée au superviseur.'],
                ['secteur' => 'Cabinet comptable ou d\'audit, à Dakar ou à Douala', 'probleme' => 'L\'extraction des données de factures varie selon la personne : formats de dates différents, montants hors taxes et toutes taxes confondus mélangés.', 'solution' => 'Un gabarit d\'extraction à champs fixes, avec la valeur « absent » imposée pour chaque champ manquant, comparé champ par champ à une saisie manuelle sur vingt factures ; les usages propres au métier se poursuivent avec la formation <a href="/formations/ia-comptables-syscohada">IA pour comptables (SYSCOHADA)</a>.'],
                ['secteur' => 'ONG et projets financés par des bailleurs, en Afrique de l\'Ouest', 'probleme' => 'Les synthèses de rapports de terrain reprennent des chiffres introuvables dans les documents sources, découverts par le bailleur.', 'solution' => 'Un gabarit de synthèse qui exige la citation exacte et la page de chaque chiffre, et une grille dont l\'exactitude est éliminatoire ; aucune synthèse ne part sans que ses chiffres aient été retrouvés.'],
                ['secteur' => 'Direction juridique ou cabinet d\'avocats en zone OHADA', 'probleme' => 'Un assistant cite des articles qui n\'existent pas quand on l\'interroge sans lui fournir les textes.', 'solution' => 'Des consignes qui restreignent la réponse aux textes collés en contexte et imposent « non trouvé dans les textes fournis » ; la recherche et la veille juridiques sont approfondies dans la formation <a href="/formations/ia-droit-ohada">IA et droit OHADA</a>.'],
                ['secteur' => 'PME de services en France, en Belgique ou en Suisse', 'probleme' => 'L\'équipe a construit en un an une centaine de consignes dans des conversations dispersées ; personne ne sait lesquelles sont fiables.', 'solution' => 'Tri de l\'existant en séance : une vingtaine de consignes retenues, transformées en gabarits documentés, testées et rangées dans la bibliothèque, les autres archivées ; un responsable de la bibliothèque est nommé.'],
                ['secteur' => 'Éditeur de logiciel ou équipe produit, en Afrique ou en Europe', 'probleme' => 'Les instructions d\'une fonction d\'IA intégrée au logiciel sont modifiées au fil des demandes, sans savoir si chaque retouche améliore ou dégrade les réponses.', 'solution' => 'Un jeu de cinquante cas tirés des demandes réelles, une grille notée en partie par un second modèle calibré sur des notes humaines, et une règle : aucune modification des instructions sans comparaison chiffrée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour votre équipe ?',
            'legende' => 'Les formats se combinent : par exemple une formation intra suivie, un mois plus tard, de la revue de la bibliothèque.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, dans vos locaux', '2 jours en 4 demi-journées', '8 personnes au plus', 'Une équipe qui veut repartir avec sa propre bibliothèque de gabarits, construite sur ses tâches et ses documents'],
                ['Inter-entreprises', '2 jours', '8 personnes de plusieurs structures', 'Une ou deux personnes par organisation, souvent les référents IA ; les exercices se font sur des documents fictifs ou publics'],
                ['À distance', '6 séances de 2 heures, sur 3 semaines', '6 personnes au plus', 'Des équipes réparties entre plusieurs villes ou pays ; les exercices de test se font entre deux séances'],
                ['Hybride', '1 jour en salle, puis 3 séances de 2 heures à distance', '8 personnes au plus', 'Apprendre ensemble l\'anatomie d\'une consigne, puis construire et tester les gabarits sur les cas de chacun, avec un retour à chaque séance'],
                ['Revue de la bibliothèque, en option', 'Une demi-journée, un mois après', 'Le groupe formé et le responsable de la bibliothèque', 'Vérifier ce qui est utilisé, corriger les gabarits signalés, relancer les tests si un assistant a changé de version'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment la régler ?',
            'intro'      => 'Le prix est établi sur devis, une fois le premier échange et le cadrage faits ; ces deux étapes et le devis sont gratuits. Le devis détaille chaque poste. Le règlement est possible par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants d\'IA ne sont pas compris : ils restent au nom de l\'entreprise.',
            'items'      => [
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées, en intra ou en inter', 'Exercices préparés sur vos consignes et vos documents', 'Modèle de fiche, grille de notation et jeux de test', 'Gabarits validés et attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Parcours à distance', 'prix' => 'Sur devis', 'inclus' => ['Six séances de deux heures', 'Exercices de test entre les séances', 'Retour individuel sur chaque gabarit', 'Supports et attestation']],
                ['offre' => 'Revue de la bibliothèque', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée un mois après', 'Relecture des gabarits ajoutés', 'Analyse des erreurs signalées', 'Nouveau passage des tests si besoin']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le format et le nombre de séances.',
                'Le travail de préparation : lecture des consignes existantes, construction des jeux de test, anonymisation des documents.',
                'Le lieu : vos locaux, une salle louée, une autre ville du Bénin ou un autre pays.',
                'La revue de la bibliothèque et le suivi demandés.',
                'La langue des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la session ?',
            'paragraphes' => [
                'Peut-être, selon le pays, le fonds et votre situation, mais aucune prise en charge n\'est acquise. En Côte d\'Ivoire, la <a href="https://fdfp.ci/plan-de-formation/">page du FDFP sur le plan de formation</a>, lue le 5 octobre 2026, réserve ce dispositif aux entreprises qui justifient du paiement régulier des deux taxes ; les actions peuvent être internes, intra, interentreprises ou à l\'étranger, et le règlement n\'intervient qu\'après le contrôle des services du fonds et l\'approbation de sa Commission permanente.',
                'Au Bénin, le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> approuve les statuts du Fonds de développement de la formation professionnelle continue et de l\'apprentissage (FODEFCA). Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche un guichet consacré au personnel des entreprises et des membres des organisations professionnelles, avec une demande de financement en ligne. Dans les deux cas, les conditions se vérifient directement auprès du fonds.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> précise que, depuis le 1er janvier 2022, les prestataires qui veulent accéder aux fonds publics ou mutualisés, dont ceux distribués aux OPCO, doivent être certifiés Qualiopi. Richard SALANON ne détient ni cette certification ni l\'agrément d\'un fonds. Le plus prudent est de budgéter la formation sans financement, puis de poser la question par écrit à votre fonds, programme et devis joints. Programme détaillé, feuilles de présence et attestations sont remis dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent après la formation, et comment les éviter ?',
            'intro' => 'Une bibliothèque de gabarits vit ou meurt dans les trois mois qui suivent la session. Les écarts observés d\'une équipe à l\'autre se ressemblent, et chacun a sa parade.',
            'items' => [
                ['titre' => 'Juger un gabarit sur un seul essai', 'texte' => 'Une réponse brillante ne prouve rien : le même texte peut donner un résultat différent au prochain lancement. Aucun gabarit n\'entre dans la bibliothèque sans avoir passé son jeu de test, même court.'],
                ['titre' => 'Allonger la consigne à chaque problème', 'texte' => 'On ajoute une règle après chaque erreur, jusqu\'à obtenir une page de consignes contradictoires. Mieux vaut repartir de l\'anatomie de base, ajouter un exemple qui montre le bon comportement, puis vérifier que les notes montent vraiment.'],
                ['titre' => 'Laisser la bibliothèque sans responsable', 'texte' => 'Sans personne nommée, les doublons s\'accumulent, les versions se mélangent et plus personne ne sait quel gabarit est le bon. Un responsable, un rythme de relecture et une règle de retrait suffisent à l\'éviter.'],
                ['titre' => 'Oublier de retester après un changement d\'outil', 'texte' => 'Les éditeurs remplacent régulièrement leurs modèles. OpenAI conseille d\'ailleurs aux développeurs de figer la version du modèle utilisée en production pour garder un comportement constant. Côté utilisateurs, on repasse les jeux de test des gabarits les plus utilisés à chaque changement annoncé.'],
                ['titre' => 'Coller des données sensibles dans un champ du gabarit', 'texte' => 'Un champ [DOCUMENT] invite à tout y verser. La fiche de chaque gabarit dit ce qui peut y entrer, ce qui doit être anonymisé et ce qui ne sort pas de l\'entreprise ; la règle s\'applique aussi aux jeux de test.'],
                ['titre' => 'Faire confiance au correcteur automatique sans le vérifier', 'texte' => 'Un second modèle qui note les réponses fait gagner du temps, mais il a ses propres biais. On compare d\'abord ses notes à celles d\'une personne sur une vingtaine de cas ; tant qu\'elles divergent, on ne s\'en sert pas.'],
                ['titre' => 'Confondre bibliothèque et cimetière de consignes', 'texte' => 'Une bibliothèque de deux cents consignes non testées ne sert à personne. Vingt gabarits fiables, documentés et réellement utilisés valent mieux ; les autres sont archivés.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Une consigne bien écrite garantit-elle une réponse exacte ?',
            'texte' => 'Non, et c\'est la limite à garder en tête. Anthropic l\'écrit dans son guide sur la réduction des hallucinations : ces techniques réduisent fortement les erreurs, mais ne les suppriment pas, et les informations critiques doivent toujours être validées. Le guide de Google Workspace rappelle de même que le résultat final reste celui de la personne qui l\'utilise. Un gabarit éprouvé réduit les erreurs ; il ne remplace ni la relecture ni la responsabilité de celui qui envoie. L\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> montre qu\'une entreprise répond de ce que son outil affirme à un client.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que disent les études et les éditeurs sur l\'effet d\'une consigne ?',
            'items' => [
                ['valeur' => '76 points', 'libelle' => 'Écart d\'exactitude maximal mesuré entre deux mises en forme d\'une même consigne, sans changer son sens, sur le modèle LLaMA-2-13B, selon Sclar, Choi, Tsvetkov et Suhr (ICLR 2024)', 'source' => 'Sclar et al., « Quantifying Language Models\' Sensitivity to Spurious Features in Prompt Design », ICLR 2024', 'url' => 'https://arxiv.org/abs/2310.11324'],
                ['valeur' => '30 %', 'libelle' => 'Amélioration de la qualité des réponses pouvant aller jusqu\'à ce niveau, dans les tests d\'Anthropic, quand la question est placée après des documents longs plutôt qu\'avant (guide consulté le 5 octobre 2026)', 'source' => 'Anthropic, Prompting best practices', 'url' => 'https://platform.claude.com/docs/en/build-with-claude/prompt-engineering/claude-prompting-best-practices'],
                ['valeur' => '3 à 5', 'libelle' => 'Nombre d\'exemples recommandé par Anthropic dans une consigne pour obtenir les meilleurs résultats, à condition qu\'ils soient pertinents, variés et séparés des instructions (guide consulté le 5 octobre 2026)', 'source' => 'Anthropic, Prompting best practices', 'url' => 'https://platform.claude.com/docs/en/build-with-claude/prompt-engineering/claude-prompting-best-practices'],
                ['valeur' => '78 %', 'libelle' => 'Part des utilisateurs d\'IA qui apportaient leurs propres outils au travail, alors que 25 % seulement des entreprises prévoyaient une formation à l\'IA générative cette année-là (enquête auprès de 31 000 personnes dans 31 pays, publiée le 8 mai 2024)', 'source' => 'Microsoft et LinkedIn, Work Trend Index 2024', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/ai-at-work-is-here-now-comes-the-hard-part'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la place de l\'information et la forme comptent-elles autant ?',
            'paragraphes' => [
                'Le premier chiffre surprend toujours les participants : modifier des espaces, des séparateurs ou des majuscules dans une consigne, sans en changer le sens, a suffi dans l\'étude de Sclar et ses coauteurs à faire varier l\'exactitude d\'un modèle de plusieurs dizaines de points. Les modèles récents sont moins sensibles que ceux de l\'étude, mais la leçon demeure : une consigne ne se juge pas à sa formulation, elle se juge à ses résultats sur des cas réels.',
                'La place de l\'information compte aussi. Liu et ses coauteurs, dans un article publié par les Transactions of the Association for Computational Linguistics, observent que les modèles utilisent mieux une information placée au début ou à la fin d\'un long contexte qu\'au milieu. D\'où deux réflexes travaillés en formation : mettre les documents d\'abord et la question à la fin, et demander au modèle de citer les passages utiles avant de répondre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données : que change le contexte local ?',
            'paragraphes' => [
                'Écrire et tester des consignes suppose d\'être en ligne. Selon l\'Union internationale des télécommunications, dans ses chiffres publiés le 15 octobre 2025, 36 % de la population africaine utilisait Internet, contre 74 % de la population mondiale et 88 à 93 % en Europe. La formation s\'organise en conséquence : gabarits et jeux de test préparés hors ligne dans le tableur, lancement des tests par lots quand la connexion est bonne, notation des réponses sans réseau.',
                'La langue joue sur les gabarits. Les assistants écrivent bien en français, mais un français de France, avec des formules qui ne sont pas celles d\'un courrier administratif de Cotonou, de Lomé ou de Kinshasa. Les exemples fournis dans le gabarit règlent l\'essentiel : trois courriers de la maison en disent plus que dix lignes de consignes sur le ton. Pour un texte en fon, en wolof, en lingala ou en éwé, la relecture par un locuteur reste obligatoire, et la grille le prévoit.',
                'Les données, enfin. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre les données personnelles, y compris quand elles partent vers un service hébergé hors du pays. En Europe, le RGPD s\'applique aux mêmes gestes. Un gabarit partagé démultiplie le risque, puisque toute l\'équipe y verse ses documents : c\'est pourquoi la fiche de chaque gabarit fixe les données autorisées, et pourquoi les jeux de test se construisent sur des copies anonymisées.',
                'Le règlement européen sur l\'IA ajoute une obligation de maîtrise de l\'IA à son article 4. D\'après les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a>, mises à jour le 27 juillet 2026, elle s\'applique depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l\'omnibus numérique, entré en vigueur mi-juillet 2026, la maintient pour les fournisseurs et les utilisateurs professionnels sans plus imposer de niveau « suffisant ». Une formation documentée y contribue, sans constituer une certification.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à écrire des consignes avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Les consignes, il les écrit chaque jour pour son propre travail et pour les outils d\'IA qu\'il construit : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Dans un produit, une consigne qui se dégrade se voit tout de suite chez les clients ; c\'est de là que vient l\'habitude de tester avant de modifier. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, d\'Afrique de l\'Ouest et centrale à l\'Europe et au Canada.',
                'Sa manière de former tient en quelques engagements : partir des consignes que l\'équipe utilise déjà, comparer plusieurs assistants plutôt que vendre un éditeur, décider sur des notes et non sur des impressions, laisser à l\'entreprise une bibliothèque qui lui appartient. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>.',
                'Pour situer cette formation parmi les autres, la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a> propose des parcours par profil, et le <a href="/formations/">catalogue des formations</a> couvre les autres domaines. Quand la bibliothèque doit alimenter un outil branché sur vos logiciels, le besoin devient une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ; pour encadrer les usages à l\'échelle de l\'organisation, la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> prend le relais. L\'organisation commune des sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Une bonne consigne se reconnaît à ses résultats, pas à sa formulation. Structurez-la, donnez-lui contexte, exemples, format et contraintes, transformez-la en gabarit documenté, testez-la sur dix cas réels avec une grille, nommez un responsable de la bibliothèque, et retestez à chaque changement d\'outil.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous des consignes que toute votre équipe peut réutiliser ?',
            'texte'  => 'Envoyez le nombre de participants, les assistants utilisés, deux ou trois tâches pour lesquelles les résultats varient trop et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation prompt engineering'],
        ],
    ],

    'faq' => [
        ['q' => 'Qu\'est-ce que le prompt engineering, concrètement ?', 'r' => 'C\'est la façon d\'écrire les instructions données à un modèle d\'IA pour qu\'il produise régulièrement un résultat conforme à ce qu\'on attend. Dans une entreprise, cela recouvre trois savoir-faire : rédiger une consigne complète, la transformer en gabarit réutilisable, et vérifier par des tests qu\'elle tient sur des cas réels.'],
        ['q' => 'Faut-il savoir programmer pour suivre la formation ?', 'r' => 'Non. Les consignes s\'écrivent en français, et l\'évaluation se fait dans un tableur. Les équipes techniques peuvent lancer leurs jeux de test par l\'API, mais ce n\'est pas nécessaire pour atteindre les objectifs de la formation.'],
        ['q' => 'Quel niveau faut-il avoir avant de s\'inscrire ?', 'r' => 'Une pratique régulière d\'au moins un assistant, plusieurs fois par semaine depuis un mois ou plus. Une personne qui n\'a jamais utilisé d\'assistant tirera davantage de la formation IA en entreprise, qui installe les premiers gestes sur ses documents.'],
        ['q' => 'Les consignes apprises fonctionnent-elles sur tous les assistants ?', 'r' => 'La méthode, oui : les guides d\'OpenAI, d\'Anthropic et de Google s\'accordent sur la structure, le contexte, les exemples, le format et les tests. Certains détails varient d\'un outil à l\'autre ; c\'est pourquoi les gabarits sont testés sur l\'assistant réellement utilisé, et sa version notée dans la fiche.'],
        ['q' => 'Une formule magique suffit-elle à obtenir de bonnes réponses ?', 'r' => 'Non. Les listes de « meilleures formules » qui circulent ignorent votre contexte, vos documents et vos exigences. Une consigne fiable se construit pour une tâche précise et se prouve sur un jeu de cas ; c\'est ce que la formation apprend à faire.'],
        ['q' => 'Que devient la bibliothèque de gabarits après la formation ?', 'r' => 'Elle appartient à l\'entreprise et reste dans ses outils : document partagé, tableur ou espace d\'équipe. Un responsable interne la tient à jour ; en option, une revue d\'une demi-journée un mois après vérifie ce qui est utilisé et corrige ce qui ne tient pas.'],
        ['q' => 'Combien de temps faut-il pour tester un gabarit ?', 'r' => 'Environ une heure pour un jeu de dix à vingt cas notés avec la grille, un peu plus la première fois. C\'est un investissement modeste au regard d\'un gabarit utilisé chaque semaine par plusieurs personnes.'],
        ['q' => 'Peut-on faire noter les réponses par l\'IA elle-même ?', 'r' => 'Oui, pour gagner du temps sur les gros volumes, à condition de vérifier d\'abord que les notes du modèle correcteur concordent avec celles d\'une personne. OpenAI recommande cet étalonnage, et Anthropic conseille d\'utiliser pour noter un modèle différent de celui qui a produit les réponses.'],
        ['q' => 'Nos documents sont confidentiels : comment construire des jeux de test ?', 'r' => 'Sur des copies anonymisées, préparées avant la session avec l\'aide du formateur si besoin. Les documents qui ne doivent pas sortir de l\'entreprise ne sont soumis à aucun assistant pendant la formation, et la fiche de chaque gabarit précise les données autorisées.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en six séances de deux heures réparties sur trois semaines, pour six personnes au plus. Les exercices de test se font entre les séances, ce qui convient bien à ce sujet : on écrit, on teste, puis on revient avec les résultats.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après un premier échange et un cadrage gratuits. Il varie selon le nombre de participants, le format, la préparation des jeux de test, le lieu et le suivi retenu. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Un fonds de formation peut-il financer la session ?', 'r' => 'Cela se vérifie auprès de chaque fonds, FDFP, FODEFCA, 3FPT ou OPCO, sans garantie. Richard SALANON ne détient ni la certification Qualiopi ni l\'agrément d\'un fonds : interrogez le vôtre par écrit, programme et devis à l\'appui, avant de compter sur une prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'OpenAI, Prompt engineering (guide de l\'API)', 'url' => 'https://developers.openai.com/api/docs/guides/prompt-engineering', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, Evaluation best practices', 'url' => 'https://developers.openai.com/api/docs/guides/evaluation-best-practices', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, Prompt engineering overview', 'url' => 'https://platform.claude.com/docs/en/build-with-claude/prompt-engineering/overview', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, Prompting best practices', 'url' => 'https://platform.claude.com/docs/en/build-with-claude/prompt-engineering/claude-prompting-best-practices', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, Define success criteria and build evaluations', 'url' => 'https://platform.claude.com/docs/en/test-and-evaluate/develop-tests', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, Reduce hallucinations', 'url' => 'https://platform.claude.com/docs/en/test-and-evaluate/strengthen-guardrails/reduce-hallucinations', 'date' => '2026-10-05'],
        ['titre' => 'Google AI for Developers, Prompt design strategies (mise à jour du 17 septembre 2026)', 'url' => 'https://ai.google.dev/gemini-api/docs/prompting-strategies', 'date' => '2026-10-05'],
        ['titre' => 'Google, Workspace with Gemini prompting guide', 'url' => 'https://services.google.com/fh/files/misc/workspace_with_gemini_prompting_guide.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft Support, Learn about Copilot prompts', 'url' => 'https://support.microsoft.com/en-us/topic/learn-about-copilot-prompts-f6c3b467-f07c-4db1-ae54-ffac96184dd5', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft Learn, Overview of Microsoft Copilot Chat (mise à jour du 9 septembre 2026)', 'url' => 'https://learn.microsoft.com/en-us/copilot/overview', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude et de l\'API', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Google AI for Developers, tarifs de l\'API Gemini et de Google AI Studio', 'url' => 'https://ai.google.dev/gemini-api/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Sclar, Choi, Tsvetkov et Suhr, Quantifying Language Models\' Sensitivity to Spurious Features in Prompt Design (ICLR 2024)', 'url' => 'https://arxiv.org/abs/2310.11324', 'date' => '2026-10-05'],
        ['titre' => 'Liu et al., Lost in the Middle: How Language Models Use Long Contexts (Transactions of the ACL)', 'url' => 'https://arxiv.org/abs/2307.03172', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft et LinkedIn, Work Trend Index 2024 : AI at Work Is Here. Now Comes the Hard Part', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/ai-at-work-is-here-now-comes-the-hard-part', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'agents-ia-assistants', 'rag-chatbot-documents', 'contenu-avec-ia', 'ia-ethique-conformite', 'integrer-ia-logiciels-existants'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
