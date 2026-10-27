<?php
// ============================================================
// data/formations/claude-en-entreprise.php · Fiche formation « Claude en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : prise en main de Claude (Anthropic) par des équipes non
// techniques : rédiger, synthétiser, analyser, projets, connecteurs,
// consignes, règles de données. Claude Code reste hors sujet (renvoi).
// Faits externes relevés le 25/10/2026 : page des offres de Claude, centre
// d’aide Claude (projets, connecteurs), guide de consignes de la
// documentation d’Anthropic, UIT, Commission européenne, loi béninoise,
// FDFP, 3FPT. Aucune certification ni aucun partenariat attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Claude en entreprise : vos équipes apprennent à rédiger, synthétiser et analyser leurs documents avec Claude, à le relier à leurs outils et à poser des règles de données claires',
    'title'   => 'Formation Claude IA en entreprise | Richard SALANON',
    'meta'    => 'Formation Claude pour vos équipes : rédiger, résumer et analyser vos documents, projets et connecteurs, avec des règles de données claires. Sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes non techniques (administration, commercial, ressources humaines, finances, direction) à travailler chaque jour avec Claude, l’assistant d’Anthropic : rédiger, synthétiser et analyser leurs propres documents, organiser le travail en projets, relier Claude à leurs outils par des connecteurs et écrire des consignes qui donnent des résultats constants. Elle dure deux jours en quatre demi-journées, ou une demi-journée en atelier découverte. Elle se tient dans vos locaux, à distance ou en formule hybride, en intra ou en session mutualisée. Le prix est fixé sur devis.',
    'publie'  => '2026-11-09',
    'maj'     => '2026-11-09',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : découvrir Claude, ses formules et poser les règles de données',
            'duree'  => '3 h 30',
            'points' => [
                'Se repérer dans Claude : conversation, fichiers joints, artéfacts, recherche sur le web, mémoire, mode incognito.',
                'Comprendre les formules (gratuite, Pro, Max, Team, Enterprise) et ce que chacune change pour une équipe.',
                'Classer les documents de l’entreprise en trois familles : ceux qu’on confie à Claude, ceux qu’on anonymise, ceux qui n’en sortent jamais.',
                'Vérifier dans les réglages du compte ce qui touche aux données et à l’entraînement des modèles.',
                'Premier exercice : poser une question sur un document réel du service et relire la réponse avec la source.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : rédiger avec Claude des écrits professionnels',
            'duree'  => '3 h 30',
            'points' => [
                'Écrire une consigne en quatre parties : rôle, contexte, tâche, forme attendue.',
                'Rédiger courriels, offres, comptes rendus et notes de service dans le ton de la maison.',
                'Donner un modèle ou un exemple pour obtenir un style constant, puis corriger par retouches successives.',
                'Traduire et adapter un texte français-anglais en gardant les termes propres au métier.',
                'Relire : faits, chiffres, noms propres et engagements pris au nom de l’entreprise.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : synthétiser et analyser des documents longs, puis organiser en projets',
            'duree'  => '3 h 30',
            'points' => [
                'Résumer un rapport, un contrat ou un compte rendu de réunion en gardant le renvoi aux pages sources.',
                'Comparer deux versions d’un document et lister les écarts.',
                'Transformer un fichier Excel ou CSV en analyse : totaux, tris, graphique, puis recalcul d’un chiffre à la main.',
                'Créer un projet Claude : instructions permanentes, documents de référence, conversations rangées.',
                'Partager un projet avec l’équipe quand la formule le permet et fixer qui peut modifier quoi.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : connecteurs, bibliothèque de consignes et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Brancher un connecteur utile (messagerie, agenda, stockage de fichiers) en comprenant les droits qu’on accorde.',
                'Définir ce que Claude peut lire et ce qu’il peut écrire, et ce qui demande une validation humaine.',
                'Mettre au propre la bibliothèque de consignes de l’équipe, une fiche par tâche.',
                'Évaluation : chaque participant exécute seul sa tâche cible de bout en bout, avec sa vérification et le temps mesuré.',
                'Plan d’usage sur 30 jours et règles écrites de l’équipe.',
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
            'titre'       => 'Que saurez-vous faire avec Claude à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Beaucoup d’équipes ouvrent Claude une fois, posent une question vague, obtiennent une réponse correcte mais générique, puis retournent à leurs habitudes. Ce qui manque n’est pas l’outil, mais une manière de s’en servir sur le travail réel du service. La formation part donc de deux ou trois tâches que chaque participant refait chaque semaine : répondre à des clients, résumer des dossiers, préparer un rapport, nettoyer une liste. Elle les transpose dans Claude, avec la consigne, la vérification et le temps gagné.',
                'À la fin des deux jours, chaque participant sait faire sept choses. Rédiger une consigne complète qui donne le même résultat d’un jour à l’autre. Faire rédiger un écrit professionnel dans le ton de son entreprise. Faire synthétiser un document long en retrouvant la source de chaque affirmation. Faire analyser un tableau et recalculer lui-même un chiffre. Créer un projet Claude avec des instructions permanentes et des documents de référence. Relier un connecteur en sachant quels droits il ouvre. Enfin, appliquer les règles de l’entreprise sur les données qu’on peut confier à l’outil.',
                'La formation ne couvre pas la programmation. Claude Code, l’outil d’Anthropic pour développer des logiciels, relève d’un autre public : les développeurs et ceux qui veulent construire des applications avec un assistant de code se reportent à la formation <a href="/formations/vibecoding">vibecoding</a>. Elle ne traite pas non plus la décision de direction (budget, choix des outils, pilotage d’un projet), qui fait l’objet de la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, ni les usages communs à tous les assistants, que la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a> traite à travers ChatGPT, Claude, Gemini et Copilot. Ici, on va plus loin sur un seul outil, ses réglages et ses fonctions propres.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s’adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'La formation s’adresse à des personnes qui écrivent, lisent et analysent des documents toute la journée, quel que soit leur niveau de départ avec l’IA.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Assistantes et assistants de direction, équipes commerciales et service client, ressources humaines, comptabilité et finances, chargés de projet, juristes d’entreprise, responsables de communication. Aucun prérequis technique n’est demandé : on pilote Claude par écrit, en français.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Un court questionnaire avant la session sépare ceux qui n’ont jamais ouvert Claude de ceux qui s’en servent déjà sans méthode. Les groupes sont composés en conséquence, et les exercices suivent le niveau de chacun.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant, un navigateur récent et une connexion stable. Chacun crée ou utilise un compte Claude, gratuit pour la formation ; l’entreprise garde la main sur les comptes payants qu’elle choisira ensuite. Un téléphone avec l’application sert à tester l’usage mobile.'],
                ['titre' => 'Les documents à apporter', 'texte' => 'Deux ou trois documents réels par participant, déjà classés selon leur sensibilité : un rapport, un échange de courriels, un tableau. Quand ils sont confidentiels, des copies anonymisées sont préparées avec le référent de l’entreprise avant la session.'],
                ['titre' => 'La taille du groupe', 'texte' => 'Dix personnes au plus pour la formation complète, douze pour l’atelier découverte. Au-delà, il devient impossible de regarder le travail de chacun sur ses propres documents.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices chaque métier fait-il avec Claude sur ses propres documents ?',
            'legende' => 'Exemples d’exercices construits à la préparation, à partir des documents fournis par l’entreprise. La dernière colonne est ce que le participant apprend à contrôler avant d’utiliser le résultat.',
            'entetes' => ['Poste', 'Document de départ', 'Ce que Claude produit', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Assistanat de direction', 'Notes d’un comité, agenda de la semaine', 'Compte rendu structuré, actions par responsable, courriel de diffusion', 'Aucune décision ajoutée ou oubliée, échéances et noms exacts'],
                ['Service client', 'Vingt messages reçus par WhatsApp ou courriel', 'Réponses dans le ton de la maison, classement par motif', 'Prix, délais et conditions cités, promesses faites au nom de l’entreprise'],
                ['Commercial', 'Fiche prospect, offre type, échange précédent', 'Relance personnalisée, offre commentée, version anglaise', 'Remises, références, noms propres, secret commercial'],
                ['Ressources humaines', 'Fiche de poste, notes d’entretien anonymisées', 'Annonce, grille d’entretien, synthèse neutre', 'Formulations discriminantes, données personnelles restées dans le texte'],
                ['Finances', 'Export de tableur des dépenses du trimestre', 'Totaux par poste, écarts, graphique, commentaire', 'Recalcul de deux totaux à la main, période et devise'],
                ['Chargé de projet', 'Rapport d’activité de 40 pages, cadre logique', 'Résumé pour le bailleur avec renvoi aux pages, tableau d’indicateurs', 'Chaque chiffre retrouvé dans le rapport source'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’apporte Claude de particulier par rapport à un autre assistant ?',
            'paragraphes' => [
                'La formation ne prétend pas que Claude est le meilleur outil pour tout le monde. Elle apprend à en connaître les points d’appui, pour décider en connaissance de cause. Claude accepte des documents longs : la page des offres d’Anthropic indique une fenêtre de contexte allant jusqu’à 1 million de jetons selon le modèle, ce qui permet de lui confier un dossier entier plutôt que des extraits. Il propose des projets, qui regroupent instructions et documents de référence, des artéfacts, qui sont des documents, tableaux ou pages produits à côté de la conversation, et des connecteurs vers d’autres services.',
                'Chaque équipe garde pourtant le droit de comparer. Le comparatif <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">ChatGPT, Claude ou Gemini</a> aide à choisir quand l’entreprise hésite, et beaucoup d’équipes finissent par en utiliser deux. La formation reste donc honnête sur les limites : Claude peut se tromper, inventer une référence, ou perdre une consigne dans un très long échange. Les sessions apprennent à repérer ces moments et à y répondre par une vérification systématique.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment organiser le travail d’une équipe en projets Claude ?',
            'intro' => 'Selon le centre d’aide de Claude, un projet est un espace de travail avec ses propres conversations et sa base de connaissances : on y dépose des documents, on y définit des instructions, on y mène des échanges ciblés.',
            'items' => [
                ['titre' => 'Un projet par activité récurrente', 'texte' => 'Réponses aux clients, suivi d’un dossier, préparation du rapport mensuel, recrutement. Chaque projet reçoit un nom clair et ses propres documents de référence : charte de ton, catalogue, modèles de courriel.'],
                ['titre' => 'Des instructions permanentes courtes', 'texte' => 'Le rôle, le public, le ton, les interdits. Quelques lignes suffisent : plus les instructions s’allongent, plus elles se contredisent. On les teste sur trois cas avant de les partager.'],
                ['titre' => 'Des connaissances à jour', 'texte' => 'Le centre d’aide précise que le partage et la collaboration sur un projet sont réservés aux formules Team et Enterprise. Les participants apprennent à désigner un responsable de chaque projet, qui retire les documents périmés.'],
                ['titre' => 'Des droits clairs', 'texte' => 'Les participants fixent qui peut modifier les instructions d’un projet partagé. On décide qui édite les instructions, car ce sont elles qui fixent le comportement de tous.'],
                ['titre' => 'Une limite à connaître', 'texte' => 'La formule gratuite autorise jusqu’à cinq projets, d’après le même centre d’aide et la page des offres. Les participants testent donc d’abord l’idée sur un projet, puis décident de la formule.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment brancher un connecteur sans ouvrir trop de portes ?',
            'items' => [
                ['titre' => 'Choisir un seul usage', 'texte' => 'Lire les courriels du jour, chercher un fichier dans le stockage partagé, consulter l’agenda. On commence par un connecteur et une tâche, pas par tous les outils.', 'duree' => '20 min'],
                ['titre' => 'Lire ce que le connecteur peut faire', 'texte' => 'Le centre d’aide indique que les connecteurs permettent à Claude d’accéder à vos applications, de récupérer vos données et d’agir dans les services connectés. Avant d’activer un connecteur, on lit ce qu’il peut faire dans les services connectés : consulter, mais aussi agir.', 'duree' => '20 min'],
                ['titre' => 'Faire activer par l’administrateur', 'texte' => 'Dans les formules Team et Enterprise, d’après la même page, un propriétaire doit d’abord activer le connecteur pour l’organisation, puis chaque personne s’authentifie. Les participants voient où se règle cette étape.', 'duree' => '20 min'],
                ['titre' => 'Vérifier les droits hérités', 'texte' => 'Claude reprend les permissions de la personne dans le service connecté : s’il n’a pas accès à un fichier dans la source, il ne l’a pas depuis Claude. On le démontre avec un dossier interdit à l’un des participants.', 'duree' => '30 min'],
                ['titre' => 'Écrire la règle de validation', 'texte' => 'Tout ce qui envoie, supprime ou modifie quelque chose chez un client ou un partenaire passe par une relecture humaine. La règle est écrite dans la fiche de la tâche.', 'duree' => '30 min'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment écrire une consigne que Claude suit de façon constante ?',
            'intro' => 'La documentation d’Anthropic sur les consignes insiste sur la clarté, les exemples et une structure lisible. La formation en tire une méthode simple que tout le monde peut répéter.',
            'items' => [
                ['titre' => 'Dire à qui s’adresse le texte et pourquoi', 'texte' => 'Une consigne qui précise le lecteur, l’objectif et ce qui sera fait du résultat donne des réponses plus utiles qu’une consigne qui demande seulement un texte.'],
                ['titre' => 'Donner un exemple réel', 'texte' => 'Un courriel que l’entreprise juge réussi vaut dix lignes d’explication. Les participants apprennent à le joindre et à dire ce qu’il faut garder.'],
                ['titre' => 'Séparer les parties avec des repères', 'texte' => 'Documents, instructions et exemples sont étiquetés, par exemple entre des balises simples, pour que Claude ne confonde pas le texte à traiter avec la demande.'],
                ['titre' => 'Fixer la forme de la réponse', 'texte' => 'Tableau, liste, trois phrases, ton formel : ce qui n’est pas demandé varie d’une fois à l’autre. On l’écrit une fois dans les instructions du projet.'],
                ['titre' => 'Retoucher plutôt que recommencer', 'texte' => 'On corrige un point à la fois, puis on enregistre la version qui marche dans la bibliothèque de l’équipe, avec le nom de son auteur et la date.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle : groupe, pratique, supports et suivi ?',
            'intro' => 'La formation s’appuie sur les documents et les comptes de l’équipe, pas sur des exemples de démonstration.',
            'items' => [
                ['titre' => 'Préparation', 'texte' => 'Un échange de cadrage fixe les tâches cibles, les outils déjà utilisés et les règles de données. Il peut conclure qu’un atelier plus court suffit.'],
                ['titre' => 'Pratique', 'texte' => 'La plus grande partie du temps se passe à pratiquer, chacun sur son poste. Chaque démonstration est suivie d’un exercice individuel, puis d’une relecture à deux.'],
                ['titre' => 'Supports remis', 'texte' => 'Le programme, les supports de la session, une bibliothèque de consignes par métier, les fiches de tâches remplies pendant la session et la liste des règles de données de l’entreprise.'],
                ['titre' => 'Évaluation', 'texte' => 'Chaque participant exécute seul sa tâche cible. Une attestation nominative de fin de formation est remise ; ce n’est ni un diplôme ni une certification d’Anthropic.'],
                ['titre' => 'Suivi', 'texte' => 'Un canal direct pour les questions d’application pendant le mois qui suit la session, sans facturation supplémentaire, et un accompagnement mensuel possible sur devis pour étendre l’usage à d’autres tâches.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formule de Claude choisir, et combien coûte-t-elle chez Anthropic ?',
            'legende' => 'Prix affichés par Anthropic sur sa page des offres, consultée le 25 octobre 2026, hors taxes applicables. Ils peuvent changer à la discrétion de l’éditeur et ne sont pas compris dans le prix de la formation.',
            'entetes' => ['Formule', 'Prix affiché', 'Pour qui', 'Ce qui compte pour une équipe'],
            'lignes'  => [
                ['Free', '0 $', 'Découverte, apprentissage', 'Jusqu’à cinq projets, connecteurs et mémoire disponibles ; utilisation limitée'],
                ['Pro', '17 $ par mois en paiement annuel (200 $ facturés à l’avance), 20 $ en mensuel', 'Une personne qui travaille chaque jour avec Claude', 'Plus d’utilisation, projets, plus de modèles ; pas de partage de projets ni d’administration centralisée'],
                ['Max', 'À partir de 100 $ par mois', 'Usage intensif individuel', 'Cinq ou vingt fois l’utilisation de Pro, facturation mensuelle'],
                ['Team, siège Standard', '20 $ par siège et par mois en annuel, 25 $ en mensuel', 'Équipes de 2 à 150 personnes', 'Partage de projets, facturation et administration centralisées, authentification unique, pas d’entraînement sur vos contenus par défaut'],
                ['Team, siège Premium', '100 $ par siège et par mois en annuel, 125 $ en mensuel', 'Utilisateurs très actifs de l’équipe', 'Cinq fois plus d’utilisation que le siège Standard ; les types de sièges peuvent se combiner'],
                ['Enterprise', '20 $ par siège et par mois en annuel, 20 sièges au minimum, plus l’utilisation aux tarifs de l’API', 'Grandes organisations', 'Journaux d’audit, accès par rôles, SCIM, rétention des données personnalisée'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Commerce et distribution, à Cotonou, Lomé ou Abidjan', 'probleme' => 'Les commandes arrivent par WhatsApp en vrac, les fiches produits sont incomplètes et les relances de paiement attendent la fin de semaine.', 'solution' => 'Les vendeurs apprennent à transformer les messages en tableau de commandes, à compléter les fiches à partir d’un modèle et à rédiger les relances dans un projet Claude qui contient le ton de la maison et les conditions de paiement. Un responsable relit avant l’envoi.'],
                ['secteur' => 'Cabinet comptable ou juridique, à Dakar, Douala ou Kinshasa', 'probleme' => 'Les dossiers sont longs, les clients posent les mêmes questions et le secret professionnel interdit de tout confier à un outil en ligne.', 'solution' => 'Classement des pièces en trois familles, anonymisation des noms et des montants avant tout dépôt, synthèse de dossiers avec renvoi aux pages et vérification systématique des références citées. Les écrits adressés aux clients restent signés et relus par le professionnel.'],
                ['secteur' => 'ONG et projets financés, en Afrique de l’Ouest et centrale', 'probleme' => 'Les rapports aux bailleurs et les comptes rendus de mission prennent des jours, et les fiches de bénéficiaires contiennent des données sensibles.', 'solution' => 'Un projet par bailleur, avec son modèle de rapport et son glossaire ; Claude rédige un premier jet à partir de notes non nominatives, et l’équipe vérifie chaque indicateur contre le cadre logique.'],
                ['secteur' => 'PME ou cabinet en France, en Belgique ou en Suisse', 'probleme' => 'L’équipe cherche un assistant qui supporte les longs documents, mais le RGPD s’applique aux données des clients et la direction veut des règles écrites.', 'solution' => 'Séances à distance de deux heures et demie, formule d’équipe choisie après essai sur les tâches cibles, règles de données validées avec le référent, et projets partagés dont les droits d’édition sont attribués nominativement.'],
                ['secteur' => 'Entreprise ou organisme public au Canada', 'probleme' => 'Les équipes travaillent en français et en anglais, avec des documents bilingues, et les courriers suivent des modèles stricts.', 'solution' => 'Un projet par type de courrier avec les deux versions du modèle, traduction relue par un locuteur du métier et règles claires sur les renseignements personnels qui ne doivent jamais être saisis.'],
                ['secteur' => 'Écoles, centres de santé et cliniques', 'probleme' => 'Les équipes produisent des supports, des convocations et des courriers, mais manipulent aussi des données d’élèves ou de patients.', 'solution' => 'Claude sert aux supports de cours, aux courriers types et à la reformulation de consignes, sur des cas fictifs ; aucun dossier nominatif n’est déposé. Le référent contrôle les réglages de données du compte.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir : atelier, formation complète, distance ou accompagnement ?',
            'legende' => 'Les formats peuvent se combiner : un atelier découverte suivi de la formation complète pour un service pilote, ou la formation complète suivie de l’accompagnement mensuel.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une équipe qui n’a jamais utilisé Claude, ou une direction qui veut voir avant d’investir'],
                ['Formation complète, intra', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un usage déjà commencé dans le désordre, ou une tâche volumineuse qui justifie l’investissement'],
                ['Session mutualisée, inter', '1 à 2 jours', 'Plusieurs structures d’un même réseau', 'Une ou deux personnes par organisation ; exercices sur des documents publics ou fictifs'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties sur plusieurs sites ou pays ; séances courtes, plus faciles en visioconférence'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main en salle, puis pratique suivie à distance sur les tâches cibles'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Étendre l’usage à d’autres tâches et ancrer les habitudes'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Le prix est fixé sur devis, après l’échange de cadrage, et le devis détaille chaque poste. Il se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements à Claude restent au nom de l’entreprise et ne sont pas compris dans le prix.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur vos documents', 'Premiers gestes sur deux tâches', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Exercices sur vos documents', 'Projets, connecteurs et bibliothèque de consignes', 'Évaluation sur la tâche cible et attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Nouvelles tâches et corrections', 'Bilan écrit à trois mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le format retenu et le nombre de demi-journées.',
                'Le temps de préparation des exercices sur vos documents et leur anonymisation.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : présentiel, distance ou hybride.',
                'L’accompagnement après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la session ?',
            'paragraphes' => [
                'Cela dépend des règles de chaque dispositif et de votre situation, et aucune prise en charge n’est garantie. En Côte d’Ivoire, le FDFP présente le plan de formation de l’entreprise comme l’ensemble des actions qu’elle prévoit pour ses salariés ; il cite parmi les formations éligibles l’intégration, le perfectionnement, la promotion et la reconversion. Au Sénégal, le 3FPT affiche un guichet de financement du personnel des entreprises.',
                'La démarche sérieuse consiste à demander d’abord au fonds ce qu’il exige d’un organisme de formation, puis à comparer avec ce que Richard SALANON peut fournir. Il n’affiche aucune certification ni aucun agrément de formation reconnu par ces fonds ; l’entreprise doit donc vérifier, avant de signer, si une prise en charge reste possible dans son cas.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui est responsable de ce que Claude a écrit ?',
            'texte' => 'Toujours l’entreprise, et la personne qui envoie. Un courrier rédigé avec Claude engage celui qui le signe exactement comme s’il l’avait écrit seul. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu’une entreprise répond de ce que dit son assistant. La formation fait de la relecture un geste obligatoire : chiffres, noms, engagements, références.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent après la formation, et comment les éviter ?',
            'intro' => 'Une formation se juge un mois plus tard, sur ce que l’équipe fait encore. Ces difficultés reviennent souvent ; elles se préviennent dès la session.',
            'items' => [
                ['titre' => 'Coller un document confidentiel dans un compte personnel', 'texte' => 'La parade est une règle écrite sur les trois familles de documents et des comptes d’entreprise, avec les réglages de données vérifiés par un référent.'],
                ['titre' => 'Croire une référence parce qu’elle est bien présentée', 'texte' => 'Claude peut citer un article ou un chiffre inexact avec aplomb. Toute référence est retrouvée dans la source avant usage.'],
                ['titre' => 'Laisser les instructions de projet grossir', 'texte' => 'Au fil des mois, chacun ajoute une règle et elles se contredisent. Un responsable relit les instructions chaque trimestre.'],
                ['titre' => 'Brancher trop de connecteurs d’un coup', 'texte' => 'Chaque connecteur ouvre des droits. On en active un, on observe, puis on décide du suivant.'],
                ['titre' => 'Rester sur la formule gratuite par habitude', 'texte' => 'Quand les limites d’utilisation bloquent le travail, l’équipe perd du temps. On mesure le besoin sur un mois avant de choisir une formule.'],
                ['titre' => 'Oublier de remettre à jour la bibliothèque', 'texte' => 'Les noms de modèles et les écrans changent souvent. La méthode reste, mais les fiches de tâches se revoient à chaque changement.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels un responsable d’équipe doit-il connaître ?',
            'items' => [
                ['valeur' => '17 $', 'libelle' => 'Prix mensuel affiché par Anthropic pour Claude Pro en paiement annuel, contre 20 $ en mensuel (page des offres consultée le 25 octobre 2026)', 'source' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing'],
                ['valeur' => '20 $', 'libelle' => 'Prix affiché par siège et par mois pour le siège Standard de la formule Team en paiement annuel, pour des équipes de 2 à 150 personnes (consulté le 25 octobre 2026)', 'source' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing'],
                ['valeur' => '5 projets', 'libelle' => 'Maximum de projets pour un compte gratuit, selon le centre d’aide de Claude (consulté le 25 octobre 2026)', 'source' => 'Centre d’aide de Claude, What are projects?', 'url' => 'https://support.claude.com/en/articles/9517075-what-are-projects'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine qui utilise Internet en 2025, (publication du 15 octobre 2025, consultée le 25 octobre 2026)', 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Claude ne fonctionne qu’en ligne. Or, selon l’Union internationale des télécommunications, 36 % de la population africaine utilisait Internet en 2025. Dans les entreprises formées, la connexion existe, mais elle coupe parfois. La formation prévoit donc une marche à suivre pour reprendre une conversation interrompue, et conseille de sauvegarder chaque soir les consignes et les résultats importants dans les dossiers de l’entreprise, pas seulement dans l’historique.',
                'Claude écrit bien en français, mais par défaut un français de France, avec des usages qui ne sont pas toujours ceux d’un courrier administratif à Cotonou, Dakar ou Kinshasa. On lui fournit donc un modèle de courrier local et un petit glossaire (monnaie, formules de politesse, organismes) dans les instructions du projet. Les équipes bilingues, en Suisse, en Belgique ou au Canada, y gagnent aussi pour garder les deux langues cohérentes.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre les données personnelles, y compris leur transfert hors du pays. Les services de Claude étant hébergés à l’étranger, la règle de l’entreprise doit dire quelles données peuvent être envoyées et lesquelles ne le peuvent pas ; en cas de doute, on s’adresse à l’autorité compétente. En Europe, le RGPD s’applique aux mêmes gestes, et l’article 4 du règlement européen sur l’IA ajoute une obligation de maîtrise de l’IA pour ceux qui utilisent ces outils en entreprise, applicable depuis le 2 février 2025 selon la <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">Commission européenne</a>. Pour aller plus loin sur ces règles, voyez la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à Claude avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il intègre l’IA dans des logiciels pour ses clients. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Il compte plus de ' . $ans . ' ans d’expérience, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées et une formation à EPITECH en 2022.',
                'Richard SALANON n’est certifié par aucun éditeur et ne représente pas Anthropic : il forme à un outil du marché, sur les comptes et les documents de ses clients, avec un cadrage qui peut conclure qu’une formation plus courte suffit. Quand le besoin dépasse l’usage quotidien, par exemple relier Claude à vos logiciels, il relève d’une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe ?',
            'texte' => 'Choisissez deux ou trois tâches réelles par groupe, formez sur vos documents et dans les comptes que l’équipe gardera, classez les données avant le premier exercice, activez un connecteur à la fois et faites relire chaque résultat par une personne qui connaît le sujet. Les prix des formules changent : vérifiez-les sur la page de l’éditeur le jour de la décision.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe à travailler avec Claude ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation Claude'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il des connaissances techniques pour suivre la formation ?', 'r' => 'Non. Claude se pilote en français, par écrit. La compétence décisive est de décrire précisément ce qu’on attend et de vérifier le résultat, et elle s’acquiert en pratiquant sur ses propres documents.'],
        ['q' => 'La formation couvre-t-elle Claude Code ?', 'r' => 'Non. Claude Code est l’outil d’Anthropic pour développer des logiciels. Cette formation s’adresse à des équipes non techniques ; pour coder avec un assistant, voyez la formation vibecoding.'],
        ['q' => 'Faut-il acheter des abonnements avant la session ?', 'r' => 'Non. La formule gratuite suffit pour apprendre, avec ses limites d’utilisation. Les abonnements se décident après la formation, sur ce qui a réellement servi, et restent au nom de l’entreprise.'],
        ['q' => 'Combien coûte Claude pour une équipe ?', 'r' => 'Au 25 octobre 2026, la page des offres d’Anthropic affiche 20 $ par siège et par mois en paiement annuel (25 $ en mensuel) pour le siège Standard de la formule Team, de 2 à 150 personnes. Les prix peuvent changer : vérifiez-les sur la page de l’éditeur.'],
        ['q' => 'Quel abonnement Claude choisir pour une équipe ?', 'r' => 'Anthropic propose des formules individuelles (Free, Pro, Max), une formule Team pour les équipes et une formule Enterprise pour les grandes organisations, les deux dernières ajoutant administration centralisée et authentification unique. Le choix suit l’effectif et les contrôles requis. Formules et limites évoluent : la page officielle des tarifs fait foi. Les prix affichés, les taxes et les moyens de paiement peuvent varier selon le pays de facturation (Bénin, Côte d’Ivoire, Sénégal, France, Belgique, Suisse, Canada ou autre) : vérifiez-les à l’étape de commande, depuis le pays qui paiera.'],
        ['q' => 'Nos documents sont confidentiels : est-ce compatible ?', 'r' => 'Oui, avec des règles. Avant la session, les documents sont classés : ceux qu’on peut confier à Claude, ceux qu’on anonymise, ceux qui ne sortent jamais. Les exercices utilisent des copies préparées avec votre référent.'],
        ['q' => 'Claude utilise-t-il nos conversations pour entraîner ses modèles ?', 'r' => 'Cela dépend de la formule et des réglages. La page des offres indique que la formule Team n’utilise pas votre contenu pour l’entraînement des modèles par défaut, et que les comptes individuels offrent une possibilité de désactivation. La formation vérifie ces réglages compte par compte.'],
        ['q' => 'Combien de personnes par session ?', 'r' => 'Dix au plus pour la formation de deux jours, douze pour l’atelier découverte, huit pour une séance à distance.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en cinq à six séances de deux heures et demie en visioconférence, avec partage d’écran. Une connexion stable est nécessaire pour chaque participant.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après l’échange de cadrage. Il dépend du nombre de participants, du format, de la préparation des exercices, du lieu et de l’accompagnement.'],
        ['q' => 'Peut-on obtenir un financement de formation continue ?', 'r' => 'Cela dépend des règles de chaque fonds, et aucune prise en charge n’est garantie. Richard SALANON n’affiche pas de certification de qualité ni d’agrément : vérifiez auprès du fonds ce qu’il exige.'],
        ['q' => 'Richard SALANON est-il certifié par Anthropic ?', 'r' => 'Non. Il n’est certifié par aucun éditeur et ne représente pas Anthropic. Il forme à Claude comme à un outil du marché, sur les comptes et les documents de l’entreprise.'],
        ['q' => 'Quelle différence avec la formation IA en entreprise ?', 'r' => 'Celle-ci compare plusieurs assistants. Cette fiche approfondit un seul outil : ses projets, ses connecteurs, ses artéfacts et ses réglages de données.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, une attestation nominative de fin de formation par participant. Ce n’est ni un diplôme ni une certification d’Anthropic.'],
    ],

    'sources' => [
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team, Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Centre d’aide de Claude, What are projects?', 'url' => 'https://support.claude.com/en/articles/9517075-what-are-projects', 'date' => '2026-10-25'],
        ['titre' => 'Centre d’aide de Claude, Use connectors to extend Claude’s capabilities', 'url' => 'https://support.claude.com/en/articles/11176164-use-connectors-to-extend-claude-s-capabilities', 'date' => '2026-10-25'],
        ['titre' => 'Documentation d’Anthropic, Prompting best practices', 'url' => 'https://platform.claude.com/docs/en/build-with-claude/prompt-engineering/claude-prompting-best-practices', 'date' => '2026-10-25'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d’Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-25'],
        ['titre' => 'Commission européenne, maîtrise de l’IA : questions et réponses sur l’article 4 du règlement sur l’IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-25'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-25'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-25'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, page des tarifs de Claude (formules individuelles, Team, Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'prompt-engineering', 'agents-ia-assistants', 'ia-generative-dirigeants', 'ia-ethique-conformite', 'vibecoding'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
