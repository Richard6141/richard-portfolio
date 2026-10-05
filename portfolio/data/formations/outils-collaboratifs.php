<?php
// ============================================================
// data/formations/outils-collaboratifs.php · Fiche formation « Outils
// collaboratifs : Notion, Trello, Asana, Teams » (vague 1B, lot B, domaine
// erp-gestion). Angle propre : organiser le travail d'équipe (tâches,
// responsables, échéances, documentation partagée, règles d'usage,
// adoption) et choisir l'outil. Aucune ancienne page.
// Sœurs non traitées : microsoft-365-google-workspace (messagerie, agenda,
// partage de fichiers, droits), gestion-projet-agile (méthode de projet IT
// par itérations), conduite-du-changement, crm-pipeline, excel-google-sheets.
// Sources consultées le 05/10/2026 : pages de tarifs de Notion (prix en
// euros extraits de la page, paiement annuel et mensuel), Trello et Asana
// (prix affichés en dollars), Microsoft (comparatif des offres Teams pour
// les PME, offres du Planificateur, lues dans le navigateur), DataReportal
// (Côte d'Ivoire 2026), CNIL (RGPD, article 28), loi n° 2017-20 (article
// 391), FDFP, FODEFCA, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation outils collaboratifs : organiser le travail d'équipe dans Notion, Trello, Asana ou Microsoft Teams, répartir les tâches, tenir les échéances et choisir l'outil qui convient",
    'title'   => "Formation Notion, Trello, Asana, Teams | Richard SALANON",
    'meta'    => "Formation aux outils collaboratifs : organiser tâches, échéances et documentation d'équipe dans Notion, Trello, Asana ou Teams, et choisir le bon outil.",
    'en_bref' => "Cette formation apprend à une équipe à organiser son travail commun dans un outil collaboratif : tableaux, tâches, responsables, échéances, documentation partagée et règles d'usage, puis à choisir entre Notion, Trello, Asana et Microsoft Teams avec le Planificateur selon sa taille, ses projets et son budget. Elle s'adresse aux équipes projet, aux services administratifs, aux associations et aux petites entreprises qui coordonnent aujourd'hui leur travail par WhatsApp, par courriel ou dans un classeur. Elle dure deux jours en quatre demi-journées, plus une séance de suivi de deux heures un mois après, dans vos locaux, à distance, en formule hybride ou en inter-entreprises. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => false,
    'duree'   => "2 jours en quatre demi-journées, puis 2 h de suivi à un mois",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : décrire le travail de l'équipe avant de toucher à un outil",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire de l'existant : où naissent les demandes (groupe WhatsApp, courriel, réunion, couloir), où elles sont suivies, où elles se perdent.",
                "Trois natures de travail à ne pas mélanger : les tâches récurrentes, les projets à échéance et les demandes venues d'autres services ou de clients.",
                "La règle de base, valable dans tous les outils : une tâche, un seul responsable, une échéance, un état visible de tous.",
                "Le vocabulaire commun aux quatre outils : espace de travail, tableau ou projet, colonne ou section, carte ou tâche, étiquette, commentaire, sous-tâche, invité.",
                "Distinguer ce qui se fait de ce qui se sait : les tâches d'un côté, la documentation partagée (procédures, modèles, comptes rendus) de l'autre.",
                "Exercice : transformer les messages d'une semaine réelle du groupe de l'équipe en liste de tâches, chacune avec son responsable et sa date.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : choisir l'outil selon l'équipe, pas selon la mode",
            'duree'  => '3 h 30',
            'points' => [
                "La grille de choix : taille de l'équipe, nature du travail, besoin de documentation, suite bureautique déjà payée, usage sur téléphone, connexion, budget, hébergement des données.",
                "Ce que chaque offre gratuite permet vraiment : collaborateurs par espace chez Trello, utilisateurs chez Asana, blocs et invités chez Notion, absence d'offre gratuite dans les offres Teams pour entreprises.",
                "Le coût sur douze mois pour votre effectif, en paiement annuel et en paiement mensuel, avec les licences vendues par tranches.",
                "Les moyens de paiement acceptés par les éditeurs, et ce qu'ils imposent à une entreprise qui règle surtout en Mobile Money.",
                "Essai comparé : le même projet réel monté par deux sous-groupes dans deux outils différents, avec des comptes d'essai gratuits.",
                "Exercice : chaque sous-groupe défend son choix devant la grille ; la décision est notée par écrit, avec ses raisons et une date de réexamen.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : construire l'espace de travail réel dans l'outil retenu",
            'duree'  => '3 h 30',
            'points' => [
                "Structure : un espace par équipe, un tableau ou un projet par flux de travail, des colonnes qui décrivent des états et jamais des personnes.",
                "Responsabilités : le responsable unique de chaque tâche, les personnes qui suivent sans agir, celle qui valide quand une validation est nécessaire.",
                "Échéances : date de début et date limite, rappels, vues calendrier ou chronologie quand l'offre les contient, jalons d'un projet.",
                "Modèles de tâches récurrentes avec leur liste de contrôle : clôture du mois, rapport au bailleur, préparation de la paie, publication hebdomadaire.",
                "Documentation partagée : page de procédure, fiche projet, compte rendu de réunion, reliés aux tâches qui les appliquent.",
                "Automatisations simples prévues par l'outil lui-même : déplacer une carte terminée, assigner une demande entrante, prévenir le responsable d'un retard.",
                "Exercice : l'équipe construit son propre espace avec ses projets en cours, et chacun y retrouve ses tâches de la semaine.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : règles d'usage, rituels et adoption",
            'duree'  => '3 h 30',
            'points' => [
                "La charte d'usage d'une page : ce qui va dans l'outil, ce qui reste sur WhatsApp, ce qui passe par courriel, ce qui se décide en réunion.",
                "Les notifications : réglages de chacun pour être prévenu de ce qui le concerne sans être noyé, mentions, résumés quotidiens.",
                "Les rituels qui font vivre l'outil : la revue hebdomadaire de quinze minutes devant le tableau, la liste du jour de chacun, la fermeture des tâches terminées.",
                "Les invités extérieurs (prestataires, partenaires, bénévoles) : qui peut inviter, à quoi ils accèdent, quand on les retire.",
                "Mesurer l'adoption sans fichier de suivi : tâches sans responsable, tâches en retard, demandes encore passées hors de l'outil.",
                "Le plan des trente premiers jours et le rôle du référent interne.",
                "Exercice final : un participant tiré au sort conduit seul la revue de la semaine sur le tableau réel de l'équipe.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Lecture de l'espace de travail tel qu'il vit depuis un mois : cartes oubliées, colonnes engorgées, tâches sans date.",
                "Ce que l'équipe a contourné, et pourquoi : règle de la charte à préciser, réglage de notifications, structure à simplifier.",
                "Décision sur l'offre : rester sur la version gratuite ou passer à une offre payante, sur la base de l'usage constaté et non des promesses de l'éditeur.",
                "Mise à jour de la charte et des fiches réflexes, et liste des points que le référent suivra seul.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en quatre demi-journées, plus 2 h de suivi à un mois"],
        ['l' => 'Public', 'v' => "Équipes projet, services administratifs, associations, petites entreprises"],
        ['l' => 'Formats', 'v' => "Intra, à distance, hybride ou inter-entreprises"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire l'équipe après la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Dans beaucoup de PME et d'associations, le travail d'équipe se coordonne dans un groupe WhatsApp. Une demande y arrive entre deux photos, quelqu'un répond « je m'en occupe », et trois semaines plus tard personne ne sait si c'est fait. Les échéances vivent dans la tête du responsable, les procédures dans la messagerie d'une ancienne collègue, et la réunion du lundi sert surtout à reconstituer qui fait quoi. Un outil collaboratif ne règle rien tout seul : bien des équipes ont ouvert un compte Trello ou Notion, l'ont rempli pendant deux semaines, puis l'ont abandonné. Cette formation traite les deux moitiés du problème : l'organisation du travail et l'outil qui la porte.",
                "À la fin des deux jours, l'équipe sait faire cinq choses, vérifiées sur ses propres projets. Décrire son travail en tâches qui ont chacune un responsable, une échéance et un état. Choisir entre Notion, Trello, Asana et Microsoft Teams avec le Planificateur, par écrit et pour des raisons qu'elle peut défendre, coût sur douze mois compris. Construire son espace de travail : tableaux ou projets, colonnes, modèles de tâches récurrentes, pages de documentation. Écrire et appliquer une charte d'usage qui dit ce qui va dans l'outil et ce qui reste sur WhatsApp. Enfin, conduire seule la revue hebdomadaire devant le tableau.",
                "Plusieurs sujets voisins relèvent d'autres fiches du catalogue. La messagerie, l'agenda, le partage des fichiers et les droits d'accès des suites Microsoft 365 et Google Workspace sont traités dans la formation Microsoft 365 et Google Workspace avancés : ici, Teams n'est abordé que comme outil de coordination de projets. La conduite d'un projet informatique par itérations, avec ses rôles et ses cycles, relève de la formation Gestion de projet IT agile. Les automatisations qui relient plusieurs logiciels entre eux se construisent avec la <a href=\"/formations/n8n\">formation n8n</a>, et la vente sur WhatsApp avec la <a href=\"/formations/whatsapp-business\">formation WhatsApp Business</a>.",
                "La formation ne remplace pas non plus une réflexion d'organisation plus large. Si les tâches se perdent parce que personne n'a autorité pour trancher, ou parce qu'un processus entier repose sur des ressaisies, l'outil n'y changera rien : l'entretien de cadrage le dit franchement, et la suite relève alors d'une mission de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. Le parcours part du principe que l'équipe existe, qu'elle a des projets en cours et qu'elle veut cesser de les suivre de mémoire.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le public se définit par une situation commune : plusieurs personnes avancent sur les mêmes dossiers et perdent du temps à savoir où ils en sont. On forme une équipe qui travaille réellement ensemble, pas des individus réunis au hasard.",
            'items' => [
                ['titre' => "Les équipes projet", 'texte' => "Chargés de projet d'ONG, équipe d'une agence de communication, cellule de suivi d'un programme financé : plusieurs personnes produisent des livrables communs, avec des dates imposées par un client ou un bailleur. Elles gagnent une vue partagée de l'avancement que chacun consulte sans avoir à demander."],
                ['titre' => "Les services administratifs", 'texte' => "Secrétariat, ressources humaines, services généraux, comptabilité fournisseurs : les demandes arrivent de partout, se ressemblent d'un mois sur l'autre et se perdent dans la messagerie. Un tableau des demandes et des modèles de tâches récurrentes y changent le quotidien."],
                ['titre' => "Les associations et les réseaux de bénévoles", 'texte' => "Des personnes qui changent souvent, travaillent à temps partiel et se voient peu. La documentation partagée y compte autant que les tâches : comment on organise un événement, à qui l'on écrit, où se trouvent les modèles de courrier."],
                ['titre' => "Le responsable d'équipe", 'texte' => "Il suit au moins la première demi-journée et la revue hebdomadaire de l'exercice final. Un outil que le responsable n'ouvre jamais est abandonné en un mois ; c'est lui qui fixe la règle : une demande qui n'est pas dans l'outil n'a pas été faite."],
                ['titre' => "Le futur référent", 'texte' => "Une personne de l'équipe, à l'aise sans être forcément technicienne, qui administrera l'espace : création des tableaux, invitations, archivage des projets terminés, mise à jour de la charte. Elle suit tout le parcours, séance de suivi comprise."],
                ['titre' => "Prérequis", 'texte' => "Aucune connaissance technique. Il faut savoir se servir d'un navigateur et d'un téléphone, et apporter la liste des projets en cours et des tâches qui reviennent chaque semaine ou chaque mois. Aucun outil n'a besoin d'être choisi avant la formation : le choix fait partie du programme."],
                ['titre' => "Matériel", 'texte' => "Un ordinateur par participant pour construire l'espace de travail, et le téléphone de chacun, sur lequel l'application de l'outil retenu est installée pendant la séance. Des comptes d'essai gratuits suffisent pour comparer les outils le premier jour."],
                ['titre' => "Taille du groupe", 'texte' => "De quatre à douze personnes, idéalement toute l'équipe concernée. Au-delà, on sépare en deux groupes qui se retrouvent pour l'après-midi du jour 2, consacré aux règles communes."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Où vit aujourd'hui le travail de votre équipe, et où le ranger dans l'outil ?",
            'legende' => "Les habitudes relevées le plus souvent lors des entretiens de cadrage, ce qu'elles coûtent et ce qu'elles deviennent une fois l'espace de travail construit. Le premier matin de la formation part de ce relevé, fait sur votre équipe.",
            'entetes' => ['Habitude actuelle', 'Ce qu\'elle fait perdre', 'Ce qu\'elle devient dans l\'outil'],
            'lignes'  => [
                ["Une demande postée dans le groupe WhatsApp de l'équipe", "Elle disparaît sous les messages suivants, sans responsable ni date", "Une carte ou une tâche créée par le demandeur, avec un responsable nommé et une échéance"],
                ["Un « je m'en occupe » en réponse", "Personne ne sait si c'est fait, ni quand ce le sera", "La tâche passe de la colonne « À faire » à « En cours », puis à « Terminé », sous les yeux de tous"],
                ["Une liste de tâches dans un cahier ou un classeur personnel", "Invisible pour les collègues, perdue pendant une absence", "Une vue « Mes tâches » propre à chacun, alimentée par le tableau commun"],
                ["Une procédure expliquée de vive voix par la plus ancienne", "Elle part avec la personne qui la connaît", "Une page de documentation, reliée aux tâches qui l'appliquent"],
                ["Un compte rendu de réunion envoyé par courriel", "Les décisions ne deviennent jamais des actions", "Chaque décision devient une tâche datée, rattachée au compte rendu"],
                ["Une pièce jointe qui circule en cinq versions", "Plus personne ne sait laquelle fait foi", "Un lien vers le fichier unique, posé dans la tâche ; le partage lui-même relève de la suite bureautique"],
                ["La relance du responsable par téléphone", "Elle interrompt tout le monde et ne laisse aucune trace", "Un filtre des tâches en retard, ouvert pendant la revue hebdomadaire"],
                ["Les tâches répétitives refaites de mémoire : paie, déclarations, rapport mensuel", "Oublis, étapes sautées, panique à la veille de l'échéance", "Un modèle de tâche récurrente avec sa liste de contrôle, recréé automatiquement chaque mois"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle, et sur quels projets réels l'équipe s'exerce-t-elle ?",
            'items' => [
                ['titre' => "Entretien de cadrage", 'duree' => "Une heure, en visioconférence", 'texte' => "Avec le responsable : les projets en cours, la composition de l'équipe, les outils déjà en place, les abonnements déjà payés (une suite Microsoft 365 change souvent la réponse), le budget et les contraintes sur les données. L'entretien dit aussi, quand c'est le cas, que le problème n'est pas d'outil."],
                ['titre' => "Relevé d'une semaine de travail", 'duree' => "La semaine qui précède la session", 'texte' => "Le référent rassemble, sous forme anonymisée, les demandes d'une semaine ordinaire : messages du groupe, courriels, notes de réunion. On y compte les tâches, celles qui reviennent chaque mois et celles qui n'ont jamais eu de responsable. Ce relevé sert de matière au premier matin."],
                ['titre' => "La semaine en tâches", 'duree' => "1 h 30, jour 1", 'texte' => "Par binômes, les participants transforment le relevé en tâches : un verbe d'action, un responsable, une date, un état. Les demandes floues sont réécrites, les doublons fusionnés. L'exercice montre souvent qu'un tiers des demandes n'avait aucun responsable désigné."],
                ['titre' => "Le même projet dans deux outils", 'duree' => "1 h 30, jour 1", 'texte' => "Deux sous-groupes montent un projet réel de l'équipe, l'un dans Trello ou Asana, l'autre dans Notion ou le Planificateur de Teams, avec des comptes d'essai. Chacun présente ce qui a été simple, ce qui a coincé et ce que l'offre gratuite ne permettait pas."],
                ['titre' => "L'espace réel", 'duree' => "2 h, jour 2", 'texte' => "Dans l'outil retenu, l'équipe construit son espace avec ses projets en cours, ses modèles de tâches récurrentes et ses premières pages de documentation. Les tâches tenues jusque-là dans un classeur sont reprises, à la main ou par import quand l'outil le propose."],
                ['titre' => "La charte d'une page", 'duree' => "1 h, jour 2", 'texte' => "L'équipe rédige ensemble ses règles : où naît une demande, qui peut créer un tableau, quand une tâche est terminée, ce qui reste sur WhatsApp. Le responsable la valide séance tenante, et elle est épinglée en tête de l'espace de travail."],
                ['titre' => "La première revue", 'duree' => "45 minutes, jour 2", 'texte' => "Un participant tiré au sort conduit la revue de la semaine devant le tableau projeté : tâches en retard, tâches sans responsable, priorités de la semaine suivante. Le formateur observe sans intervenir, puis l'on corrige ensemble ce qui a ralenti la revue."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Notion, Trello, Asana ou Teams : quel outil correspond à quelle équipe ?",
            'options'  => ['Notion', 'Trello', 'Asana', 'Microsoft Teams et Planificateur'],
            'criteres' => [
                ['critere' => 'Logique de départ', 'valeurs' => ["Des pages et des bases de données que l'on assemble soi-même", "Un tableau de colonnes et de cartes que l'on fait glisser", "Des projets découpés en tâches et sous-tâches, avec responsables et dates", "Des conversations par équipe et par canal, et des plans de tâches dans le Planificateur"]],
                ['critere' => 'Ce qu\'il fait le mieux', 'valeurs' => ["Réunir la documentation et les tâches : procédures, comptes rendus, base de connaissances", "Montrer d'un coup d'œil où en est chaque dossier", "Suivre plusieurs projets à la fois, avec échéances, dépendances et charge de chacun", "Coordonner une équipe déjà sur Microsoft 365, réunions et conversations comprises"]],
                ['critere' => 'Prise en main', 'valeurs' => ["La plus longue : la structure comme les règles sont à construire", "La plus rapide : une heure suffit pour un premier tableau utile", "Intermédiaire : vocabulaire riche, écrans nombreux", "Rapide pour la conversation, plus lente pour ranger canaux et plans"]],
                ['critere' => 'Offre gratuite relevée le 5 octobre 2026', 'valeurs' => ["Sans limite pour une personne seule ; blocs limités dès deux membres, fichiers de 5 Mo, 10 invités, historique de 7 jours", "Jusqu'à 10 collaborateurs et 10 tableaux par espace de travail, fichiers de 10 Mo", "Formule Personal limitée à 2 utilisateurs", "Aucune parmi les offres pour entreprises présentées ; Teams Essentials est la moins chère"]],
                ['critere' => 'Dérive fréquente', 'valeurs' => ["Une structure trop libre, que chacun réorganise à sa façon", "Des tableaux qui se multiplient sans vue d'ensemble", "Trop de champs et de règles pour une équipe de cinq personnes", "Des dizaines de canaux, et des tâches restées dans les conversations"]],
                ['critere' => 'IA proposée par l\'éditeur', 'valeurs' => ["Essai limité en Gratuit et Plus ; Agent Notion et Notes d'IA dans Business", "Atlassian Intelligence à partir de Premium", "5 requêtes par utilisateur et par mois dès Starter, dans une limite par compte", "Copilot en module complémentaire, à 26 € HT par utilisateur et par mois en paiement annuel"]],
                ['critere' => 'Pour quelle équipe', 'valeurs' => ["Une équipe qui a autant à documenter qu'à faire : association, service support, cabinet", "Une petite équipe aux flux simples : demande, production, livraison", "Une équipe qui mène plusieurs projets datés en parallèle", "Une entreprise qui paie déjà Microsoft 365 et vit dans Teams"]],
            ],
            'verdict'  => "Il n'existe pas de meilleur outil dans l'absolu. Une entreprise qui paie déjà Microsoft 365 commence presque toujours par Teams et le Planificateur, puisqu'ils sont inclus. Une petite équipe aux flux simples démarre vite avec Trello. Asana se justifie dès que plusieurs projets datés se croisent, et Notion quand la documentation pèse autant que les tâches. Le bon choix est celui que l'équipe ouvrira encore dans trois mois.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Combien coûtent ces outils, en paiement annuel ou mensuel ?",
            'legende' => "Prix relevés le 5 octobre 2026 sur les pages officielles des éditeurs : Notion en euros (prix de la zone euro de sa page de tarifs), Trello et Asana en dollars américains tels que leurs pages les affichaient, Microsoft en euros hors taxes pour la France. Ils changent souvent et varient selon le pays de facturation. Ils sont dus aux éditeurs et ne figurent jamais dans le devis de formation.",
            'entetes' => ['Outil et offre', 'Prix relevé', 'Ce que l\'offre change pour l\'équipe'],
            'lignes'  => [
                ['Notion, Gratuit', '0 €', "Illimité pour une personne seule ; à partir de deux membres, nombre de blocs limité, fichiers de 5 Mo au plus, historique des pages de 7 jours, 10 invités extérieurs"],
                ['Notion, Plus', "9,50 € par membre et par mois en facturation annuelle ; 11,50 € en facturation mensuelle", "Blocs illimités, historique de 30 jours, invités illimités, automatisations de bases de données"],
                ['Notion, Business', "19,50 € par membre et par mois en facturation annuelle ; 23,50 € en facturation mensuelle", "Agent Notion et Notes d'IA, espaces d'équipe privés, autorisations fines sur les bases de données, historique de 90 jours, authentification unique SAML"],
                ['Trello, Free', '0 dollar', "Jusqu'à 10 collaborateurs et 10 tableaux par espace de travail, fichiers de 10 Mo, 250 exécutions d'automatisation par mois"],
                ['Trello, Standard', "5 dollars par utilisateur et par mois en facturation annuelle ; 6 dollars en facturation mensuelle", "Tableaux illimités, champs personnalisés, listes de contrôle avancées, invités sur un tableau, fichiers de 250 Mo, 1 000 exécutions par mois"],
                ['Trello, Premium', "10 dollars par utilisateur et par mois en facturation annuelle ; 12,50 dollars en facturation mensuelle", "Vues Calendrier, Chronogramme, Tableur, Tableau de bord et Plan, IA, automatisations illimitées ; l'éditeur la destine aux équipes de 100 membres au plus"],
                ['Asana, Personal', '0 dollar', "2 utilisateurs, tâches et projets illimités, vues Liste, Tableau et Calendrier, fichiers de 100 Mo"],
                ['Asana, Starter', "10,99 dollars par utilisateur et par mois en facturation annuelle ; 13,49 dollars en facturation mensuelle", "Vues Chronologie et Gantt, règles d'automatisation illimitées, formulaires, champs personnalisés, invités gratuits illimités, tableaux de bord de rapports"],
                ['Asana, Advanced', "24,99 dollars par utilisateur et par mois en facturation annuelle ; 30,49 dollars en facturation mensuelle", "Portefeuilles de projets, objectifs, gestion des ressources, approbations, suivi du temps"],
                ['Microsoft Teams Essentials', "3,50 € HT par utilisateur et par mois, paiement annuel", "Conversations, appels, réunions jusqu'à 300 participants et 30 heures, collaboration avec partage de fichiers, tâches et sondages, 10 Go de stockage par utilisateur"],
                ['Microsoft 365 Business Basic', "6,07 € HT par utilisateur et par mois, paiement annuel", "Teams, avec le Planificateur, Bookings et Forms parmi les applications citées par Microsoft, et 1 To de stockage par utilisateur"],
                ['Planificateur (plan 1)', "8,70 € HT par utilisateur et par mois, paiement annuel", "Ajoute au Planificateur inclus dans Microsoft 365 la chronologie en diagramme de Gantt, les dépendances, les sous-tâches, les jalons et les objectifs de projet"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi une offre gratuite peut-elle bloquer une équipe au bout de quelques mois ?",
            'paragraphes' => [
                "Les offres gratuites conviennent pour essayer, rarement pour durer, et leurs limites ne se voient pas le premier jour. Selon la page de tarifs de Trello consultée le 5 octobre 2026, l'offre Free accepte jusqu'à 10 collaborateurs et 10 tableaux par espace de travail. Une équipe de huit personnes qui invite son comptable externe et deux prestataires atteint la limite sans s'en apercevoir, et le onzième tableau, celui du nouveau client, ne peut plus être créé. La formation fait le compte à l'avance, invités compris.",
                "Chez Notion, la page de tarifs indique que l'usage est illimité pour une personne seule, mais que le nombre de blocs devient limité dès deux membres. Sa foire aux questions précise qu'une fois la limite atteinte, on peut encore lire, modifier et réorganiser le contenu existant, mais plus rien ajouter. Deux autres limites gênent vite une équipe : des fichiers de 5 Mo au plus, ce qu'un contrat scanné dépasse souvent, et un historique des pages de sept jours, trop court pour retrouver une procédure effacée le mois précédent.",
                "Asana limite sa formule Personal à deux utilisateurs, et vend ses licences payantes par tranches : une par une entre deux et cinq utilisateurs, puis par cinq jusqu'à trente. Une équipe de huit personnes paie donc dix licences. Avec les prix relevés le même jour, un calcul simple sur douze mois en facturation annuelle donne 1 318,80 dollars pour dix licences Asana Starter, 480 dollars pour huit utilisateurs de Trello Standard, 912 € pour huit membres de Notion Plus et 582,72 € HT pour huit comptes Microsoft 365 Business Basic, si l'entreprise ne les paie pas déjà.",
                "Le moyen de paiement compte aussi. La foire aux questions de Trello indique que les offres Standard et Premium se règlent, au mois ou à l'année, avec les principales cartes de crédit. Asana annonce qu'elle ne rembourse pas, alors que Notion rembourse intégralement le passage à une offre inférieure dans les trois jours suivant l'inscription pour un paiement mensuel, ou dans les trente jours pour un paiement annuel. Une entreprise qui règle surtout en Mobile Money prévoit donc une carte à son nom, commence par quelques mois en paiement mensuel et ne passe à l'annuel qu'une fois l'usage confirmé.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment les séances sont-elles menées pour que l'outil soit encore utilisé un mois après ?",
            'intro' => "Un outil collaboratif ne s'apprend pas comme un logiciel de saisie : sa valeur dépend de ce que tous en font, en même temps. La méthode vise donc moins la maîtrise des fonctions que l'accord de l'équipe sur une manière de travailler.",
            'items' => [
                ['titre' => "Votre équipe, vos projets", 'texte' => "Les exercices portent sur les projets en cours et sur le relevé d'une semaine réelle, anonymisé quand il contient des noms de clients ou de bénéficiaires. À la fin du jour 2, l'espace de travail construit en séance est celui que l'équipe utilise le lundi suivant."],
                ['titre' => "Peu de fonctions, bien comprises", 'texte' => "Chacun des quatre outils compte des centaines de réglages. On en retient une quinzaine : créer, assigner, dater, commenter, filtrer, archiver, modèles et notifications. Le reste s'apprend plus tard, quand un besoin réel le justifie."],
                ['titre' => "Comparer avant d'acheter", 'texte' => "Aucune licence n'est achetée avant l'après-midi du premier jour. Les essais se font avec des comptes gratuits ou des périodes d'essai, et la décision s'appuie sur la grille de choix et sur le coût calculé pour votre effectif, pas sur une démonstration commerciale."],
                ['titre' => "Le responsable dans la salle", 'texte' => "Sa présence au premier matin et lors de la revue finale n'est pas une formalité : les règles qu'il valide en séance sont celles que l'équipe appliquera. S'il ne peut pas venir, la formation est reportée plutôt que menée sans lui."],
                ['titre' => "Des supports par rôle", 'texte' => "Une fiche réflexe pour le contributeur, une pour le responsable, une pour le référent, la grille de choix remplie, la charte d'usage et un guide d'une page de l'espace de travail. Tout est remis dans un format modifiable et reste à l'entreprise."],
                ['titre' => "Une évaluation sur une tâche réelle", 'texte' => "Chaque participant crée, assigne, date et clôt une tâche de son travail, puis retrouve seul ce qui est en retard dans son périmètre. Le résultat est comparé aux objectifs écrits au cadrage, et une attestation de fin de formation est remise à chacun."],
                ['titre' => "Un suivi sur l'usage constaté", 'texte' => "Pendant le mois qui suit, un canal direct reste ouvert pour les questions d'application. La séance de suivi part de l'espace de travail tel qu'il est, avec ses cartes oubliées et ses colonnes engorgées, pas des souvenirs de la formation."],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Que doit contenir la charte d'usage de l'outil collaboratif ?",
            'items' => [
                "Le nom de l'outil retenu, l'adresse de l'espace de travail et le nom du référent qui l'administre.",
                "Où naît une demande : dans l'outil, créée par le demandeur, et jamais seulement dans un message.",
                "Ce qui reste sur WhatsApp ou au téléphone : l'urgence du jour, la question rapide, l'information sans suite.",
                "La règle d'or : une tâche, un seul responsable, une échéance ; une tâche sans responsable est rediscutée à la revue.",
                "La définition de « terminé » pour l'équipe, et qui déplace la carte dans la dernière colonne.",
                "Qui peut créer un tableau ou un projet, et la règle de nommage commune.",
                "Qui peut inviter une personne extérieure, à quoi elle accède, et quand son accès est retiré.",
                "Le jour, l'heure et la durée de la revue hebdomadaire, et qui la conduit.",
                "Les réglages de notifications recommandés, pour que chacun soit prévenu sans être submergé.",
                "Le sort des projets terminés : archivés à la fin du mois, jamais supprimés.",
                "La date de réexamen de la charte, en général à un mois puis à six mois.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon l'organisation, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "ONG de santé, à Ouagadougou", 'probleme' => "Trois projets financés par des bailleurs différents, des rapports trimestriels à rendre à date fixe et des tâches réparties dans quatre groupes WhatsApp, un par projet et un pour la direction.", 'solution' => "Choix d'Asana pour ses vues chronologiques et ses projets parallèles, un projet par financement, des modèles de tâches pour chaque rapport trimestriel, et une revue hebdomadaire conduite par la coordinatrice. Le calcul des licences par tranches est fait avant d'acheter, et la remise annoncée par l'éditeur pour les organisations à but non lucratif est vérifiée."],
                ['secteur' => "Agence de communication, à Abidjan", 'probleme' => "Les demandes des clients arrivent par message à n'importe quel membre de l'équipe, et les livrables partent parfois sans relecture.", 'solution' => "Un tableau Trello par grand client, des colonnes qui suivent le chemin d'un livrable (demandé, en production, en relecture, livré), une étiquette par type de contenu, et une règle : rien ne part sans passer par la colonne de relecture."],
                ['secteur' => "Cabinet comptable, à Cotonou", 'probleme' => "Les déclarations mensuelles de chaque client sont suivies de mémoire, et un oubli coûte une pénalité au client.", 'solution' => "Le cabinet paie déjà Microsoft 365 : un canal Teams par portefeuille de clients, un plan du Planificateur par mois, des tâches récurrentes avec leur liste de contrôle par client, et un filtre des échéances de la semaine ouvert chaque lundi."],
                ['secteur' => "Association culturelle, à Dakar", 'probleme' => "Chaque édition du festival est organisée par des bénévoles nouveaux, qui repartent de zéro faute de traces de l'édition précédente.", 'solution' => "Un espace Notion avec une page par édition, une base de tâches par commission et les procédures de l'année écrites au fil de l'eau. Le passage à l'offre Plus est budgété dès le départ, puisque le noyau dépasse deux membres."],
                ['secteur' => "PME industrielle, à Douala", 'probleme' => "Les demandes d'intervention aux services généraux arrivent par téléphone, et personne ne peut dire combien attendent ni depuis quand.", 'solution' => "Un formulaire de demande relié à un plan du Planificateur dans Teams, un canal par site, un responsable par demande et un point hebdomadaire sur les demandes de plus de sept jours."],
                ['secteur' => "Société de services, à Lyon ou à Bruxelles", 'probleme' => "Une équipe hybride mène des projets pour des clients, avec des données personnelles dans les tâches, et chacun suit son travail dans son propre outil.", 'solution' => "Formation à distance en séances de deux heures, choix d'un outil commun après comparaison, contrôle de l'accord de sous-traitance proposé par l'éditeur au titre du RGPD, et charte qui interdit de copier des données de clients dans les commentaires."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, à distance, hybride ou inter : quel format choisir pour former une équipe à un outil collaboratif ?",
            'legende' => "Le format se décide lors de l'entretien de cadrage, selon la dispersion de l'équipe, son aisance avec l'ordinateur et la connexion disponible. Dans les formats intra, l'espace de travail construit en séance est celui de votre équipe.",
            'entetes' => ['Format', 'Pour qui', 'Déroulement', 'Point d\'attention'],
            'lignes'  => [
                ['Intra, sur place', "Une équipe réunie sur un même site, ou des participants peu à l'aise avec l'ordinateur", "Quatre demi-journées dans vos locaux, puis la séance de suivi à distance", "Libérer toute l'équipe au même moment, responsable compris"],
                ['Intra, à distance', "Une équipe répartie entre plusieurs sites ou pays, une organisation en Europe ou au Canada", "Six séances de deux heures en visioconférence, avec de courts exercices entre les séances", "Chacun sur son propre poste ; l'outil est testé sur la connexion réelle de chaque participant"],
                ['Hybride', "Une équipe qui veut un lancement commun, puis un rythme plus léger", "Le jour 1 en salle, la construction de l'espace et la charte à distance", "Tenir le calendrier des séances à distance, que les urgences grignotent vite"],
                ['Inter-entreprises', "Référents de petites structures, membres d'un même réseau d'associations ou de coopératives", "Espaces de démonstration communs, puis une heure sur l'espace de chacun", "Aucun projet interne montré devant les autres participants"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après l'entretien de cadrage. Le premier échange, le cadrage et le devis sont gratuits, avec une réponse sous 24 heures. Les abonnements aux outils se règlent directement aux éditeurs.",
            'items'      => [
                ['offre' => "Cadrage", 'prix' => 'Gratuit', 'inclus' => ["Entretien d'une heure avec le responsable", "Inventaire des outils et abonnements existants", "Proposition écrite et devis"]],
                ['offre' => "Formation de l'équipe", 'prix' => 'Sur devis', 'inclus' => ["Relevé d'une semaine de travail", "Quatre demi-journées sur vos projets", "Grille de choix, charte d'usage et fiches réflexes par rôle", "Évaluation et attestation par participant"]],
                ['offre' => "Suivi à un mois", 'prix' => 'Sur devis', 'inclus' => ["Séance de deux heures à distance", "Lecture de l'espace de travail réel", "Charte et fiches mises à jour"]],
            ],
            'variations' => [
                "Le nombre de participants, et donc de groupes quand l'équipe dépasse douze personnes.",
                "Le nombre d'outils comparés le premier jour, de deux à quatre.",
                "La reprise des tâches tenues jusque-là dans un classeur ou un autre outil.",
                "Le lieu : vos locaux à Cotonou, une autre ville ou un autre pays, ou la visioconférence.",
                "La langue des séances et des supports, en français ou en anglais.",
                "Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; les licences des éditeurs restent à votre charge et ne figurent pas dans le devis.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer la session ?",
            'paragraphes' => [
                "Aucune prise en charge n'est promise : c'est au fonds de décider, selon ses propres règles. En Côte d'Ivoire, la page du FDFP sur le plan de formation, consultée le 5 octobre 2026, ouvre ce plan aux entreprises à jour de la taxe d'apprentissage et de la taxe additionnelle à la formation continue, et soumet à un régime particulier les formations qui reposent sur l'ordinateur ; un outil en ligne entre dans ce cas. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le 3FPT affiche un guichet pour le personnel des entreprises et des organisations professionnelles.",
                "En France, France Compétences rappelle que la certification Qualiopi conditionne, depuis le 1er janvier 2022, l'accès d'un prestataire aux fonds publics et mutualisés, dont ceux des opérateurs de compétences. Richard SALANON ne la détient pas, pas plus qu'un agrément de fonds africain. Avant de signer, adressez au fonds une question écrite accompagnée du programme et du devis, et bâtissez le budget en supposant un refus. Le programme, les feuilles d'émargement et le résultat de l'évaluation remis en fin de parcours serviront si le dossier se révèle recevable.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel piège vide un outil collaboratif dès les premières semaines ?",
            'texte' => "Laisser WhatsApp rester le canal des demandes « le temps que tout le monde s'habitue ». Dès qu'une demande envoyée par message est traitée aussi vite qu'une demande créée dans l'outil, l'équipe comprend que l'outil est facultatif, et il se vide en quelques semaines. La règle se pose le jour du démarrage et le responsable la tient le premier : à une demande reçue par message, il répond en la créant lui-même dans l'outil, lien à l'appui, et en rappelant où elle devait naître. Au bout de deux semaines, il cesse de la créer à la place du demandeur.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs apparaissent après la formation, et comment les éviter ?",
            'intro' => "Elles se voient presque toutes à la séance de suivi, sur l'espace de travail lui-même. Chacune a une parade simple, inscrite dans la charte avant la fin du jour 2.",
            'items' => [
                ['titre' => "Une colonne par personne", 'texte' => "Le tableau montre alors qui est occupé, mais plus où en est le travail. Les colonnes décrivent des états (à faire, en cours, en attente, terminé) ; la personne se lit sur la carte, et chacun filtre ses propres tâches."],
                ['titre' => "Tout mettre dans l'outil", 'texte' => "Une question de trente secondes transformée en tâche noie les vraies tâches. Ce qui se règle dans l'heure reste une conversation ; ce qui demande un suivi, une date ou une autre personne devient une tâche."],
                ['titre' => "Les notifications laissées par défaut", 'texte' => "Chacun reçoit tout, puis coupe tout, et ne voit plus ce qui le concerne. Les réglages recommandés par la charte se font en séance, téléphone en main, et se revoient à la séance de suivi."],
                ['titre' => "Des tâches datées « un jour »", 'texte' => "Une tâche sans échéance ne remonte jamais dans les filtres de retard. Toute tâche reçoit une date, quitte à la repousser explicitement lors de la revue, ce qui laisse une trace de la décision."],
                ['titre' => "Le modèle copié d'une autre organisation", 'texte' => "Un gabarit téléchargé, avec ses vingt colonnes et ses quinze étiquettes, décrit le travail d'une autre équipe. On part du relevé de votre semaine et l'on n'ajoute un champ que lorsqu'une revue en a montré le besoin."],
                ['titre' => "Ne jamais archiver", 'texte' => "Au bout de six mois, les projets terminés encombrent les écrans et l'on ne trouve plus les tâches vivantes. Le référent archive chaque fin de mois ; archiver n'efface rien et se défait d'un clic."],
                ['titre' => "Changer d'outil au premier obstacle", 'texte' => "La tentation est forte quand une fonction manque. Le choix noté au jour 1 comporte une date de réexamen : jusque-là, on contourne la difficulté avec l'outil retenu, et l'on garde la liste de ce qui a manqué pour la décision suivante."],
                ['titre' => "Des invités jamais retirés", 'texte' => "Le prestataire d'un projet terminé garde l'accès à tout ce qu'on lui a ouvert. La fin d'une mission déclenche le retrait de ses accès par le référent, comme le prévoit la charte."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, hébergement des données, langue : que change le contexte local ?",
            'paragraphes' => [
                "Une partie de l'équipe ne travaillera que sur téléphone, avec une connexion irrégulière. Le rapport Digital 2026 de DataReportal consacré à la Côte d'Ivoire, publié le 8 novembre 2025, compte 13,4 millions d'internautes à la fin de 2025, soit 40,7 % de la population. La formation installe donc l'application mobile de l'outil retenu et vérifie qu'on peut y créer et clore une tâche sur la connexion réelle de chacun. Selon sa page de tarifs, Notion permet sur l'offre gratuite de choisir les pages à télécharger pour un usage hors ligne, et télécharge automatiquement les pages récentes et les favoris sur les offres payantes.",
                "Ces quatre outils hébergent vos tâches hors de vos murs, et souvent hors de votre pays : la page de tarifs d'Asana indique par exemple que son service est hébergé dans des centres de données exploités par Amazon Web Services. Au Bénin, l'article 391 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique subordonne le transfert de données personnelles vers un État tiers à un niveau de protection jugé équivalent par l'Autorité. La charte d'usage en tire une règle concrète : pas de données de santé, de pièces d'identité ni de coordonnées de bénéficiaires dans les commentaires, seulement une référence au dossier tenu ailleurs.",
                "En Europe, l'article 28 du RGPD, publié par la CNIL, demande au responsable du traitement de ne faire appel qu'à des sous-traitants présentant des garanties suffisantes, et d'encadrer la relation par un contrat. L'éditeur de l'outil collaboratif est ce sous-traitant : avant le déploiement, on lit l'accord de traitement des données qu'il propose. Les options d'hébergement diffèrent selon les offres ; chez Asana, la résidence des données relève de la formule Enterprise+. Pour les fonctions d'IA, la page de Notion indique une conservation de trente jours chez ses fournisseurs de modèles, sauf sur l'offre Enterprise.",
                "Les séances se tiennent en français, avec l'interface de l'outil dans la langue de l'équipe, et peuvent se donner en anglais quand une partie des participants ou la maison mère le demande. Pour une équipe répartie entre plusieurs pays, on fixe dans la charte le fuseau horaire de référence des échéances : une date limite à minuit n'a pas le même sens à Dakar, à Cotonou et à Montréal.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi organiser le travail de votre équipe avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Les outils collaboratifs touchent à ce qui précède chacune de ses missions de digitalisation : avant de déployer un logiciel de gestion ou une automatisation, il faut savoir qui fait quoi, pour quand, et où cela se note. Il compte " . $ans . " ans d'expérience dans le numérique et a été formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "). Il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Selon ses propres déclarations, il a formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP.",
                "Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, d'Afrique francophone, d'Europe et du Canada, ce qui l'a habitué aux équipes réparties et aux connexions inégales. Il n'est partenaire d'aucun des quatre éditeurs présentés ici, et peut donc conseiller une offre gratuite quand elle suffit, ou dire qu'un groupe WhatsApp bien tenu vaut mieux qu'un outil que personne n'ouvrira. Ses engagements se vérifient : un cadrage gratuit, des exercices sur vos projets, une évaluation sur une tâche réelle, des supports qui restent chez vous. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'équiper votre équipe d'un outil collaboratif ?",
            'texte' => "Décrivez le travail avant de choisir l'outil. Une tâche, un responsable, une échéance, un état visible de tous ; des colonnes qui disent où en est le travail ; une charte d'une page ; une revue hebdomadaire de quinze minutes conduite par le responsable. Comparez sur un projet réel, calculez le coût sur douze mois, commencez en paiement mensuel. Les autres formations du domaine sont présentées sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, et une petite structure qui débute trouvera ses priorités dans la formation <a href=\"/formations/digitaliser-son-entreprise\">Digitaliser son entreprise pas à pas</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous que votre équipe sache enfin qui fait quoi, et pour quand ?",
            'texte'  => "Indiquez la taille de l'équipe, ses projets en cours, les outils et abonnements déjà en place et la façon dont les demandes circulent aujourd'hui : vous recevez une réponse sous 24 heures et une proposition de cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un cadrage'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il avoir choisi l'outil avant la formation ?", 'r' => "Non. Le choix fait partie du programme : l'après-midi du jour 1 compare les outils sur un projet réel de l'équipe, avec des comptes d'essai, puis la décision est notée par écrit. Si l'outil est déjà choisi et payé, cette demi-journée sert à vérifier qu'il convient et à en connaître les limites."],
        ['q' => "Notre entreprise paie déjà Microsoft 365 : faut-il quand même regarder Notion, Trello ou Asana ?", 'r' => "On commence par ce qui est déjà payé. Selon la page de Microsoft consultée le 5 octobre 2026, Microsoft 365 Business Basic comprend Teams et cite le Planificateur parmi ses applications. Si l'essai sur un projet réel montre un manque précis, on compare avec un autre outil ; sinon, ajouter un abonnement ne se justifie pas."],
        ['q' => "Une offre gratuite suffit-elle pour une petite équipe ?", 'r' => "Pour essayer, oui ; pour durer, cela dépend de l'outil. Trello Free accepte 10 collaborateurs par espace de travail, Asana Personal 2 utilisateurs, et Notion limite le nombre de blocs dès deux membres. La formation fait le compte avec votre effectif et vos invités avant toute décision."],
        ['q' => "Faut-il abandonner le groupe WhatsApp de l'équipe ?", 'r' => "Non, mais il change de rôle. Il garde l'urgence du jour, la question rapide et l'information sans suite ; les demandes qui demandent un suivi, une date ou une autre personne passent dans l'outil. La charte d'usage écrit cette frontière, et le responsable la fait respecter dès le premier jour."],
        ['q' => "La formation couvre-t-elle la messagerie, l'agenda et le partage de fichiers de Teams ?", 'r' => "Non. Teams y est traité comme outil de coordination de projets : canaux, plans du Planificateur, tâches et revues. La messagerie, l'agenda, le partage des fichiers et les droits d'accès des suites relèvent de la formation Microsoft 365 et Google Workspace avancés, présentée sur la page du domaine."],
        ['q' => "Est-ce une formation aux méthodes agiles ?", 'r' => "Non. Elle organise le travail courant d'une équipe, projets compris, sans imposer de méthode de projet. La conduite d'un projet informatique par itérations, avec ses rôles et ses cycles, fait l'objet de la formation Gestion de projet IT agile."],
        ['q' => "Peut-on ne former que le responsable ou le futur référent ?", 'r' => "Oui, en inter-entreprises ou en séance individuelle, et c'est utile pour préparer un déploiement. Mais un outil collaboratif ne vit que si toute l'équipe applique les mêmes règles : la formation de l'équipe entière, au moins pour l'après-midi du jour 2, reste recommandée."],
        ['q' => "Comment payer les abonnements sans carte bancaire ?", 'r' => "C'est une vraie contrainte. La foire aux questions de Trello indique que les offres Standard et Premium se règlent avec les principales cartes de crédit, et les autres éditeurs vendent eux aussi en ligne. Prévoyez une carte au nom de l'entreprise avant de choisir une offre payante ; la formation, elle, se règle aussi en Mobile Money."],
        ['q' => "Nos données sont-elles en sécurité dans ces outils ?", 'r' => "Elles sont hébergées par l'éditeur, souvent hors de votre pays. La charte d'usage exclut donc les données sensibles des tâches et des commentaires, et l'on vérifie qui peut inviter des personnes extérieures. En Europe, on lit l'accord de traitement des données de l'éditeur, comme le demande l'article 28 du RGPD."],
        ['q' => "Les fonctions d'intelligence artificielle de ces outils sont-elles abordées ?", 'r' => "Elles sont présentées dans la grille de choix, avec ce que chaque offre inclut, mais la formation ne s'y attarde pas : un outil collaboratif mal tenu ne devient pas meilleur avec de l'IA. L'usage des assistants au travail relève de la formation <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>."],
        ['q' => "Combien de temps faut-il bloquer dans l'agenda de l'équipe ?", 'r' => "Quatre demi-journées de 3 h 30, consécutives ou espacées d'une semaine, puis une séance de suivi de deux heures un mois plus tard. À distance, le parcours se découpe en six séances de deux heures. La revue hebdomadaire de quinze minutes s'ajoute ensuite à l'agenda, pour de bon."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est chiffrée sur devis, après un cadrage gratuit. Le prix dépend du nombre de participants, du nombre d'outils comparés, de la reprise de tâches existantes, du lieu et de la langue. Les abonnements aux outils se règlent aux éditeurs et ne figurent pas dans le devis."],
        ['q' => "Un fonds de formation peut-il prendre en charge le coût ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, opérateurs de compétences en France. Richard SALANON n'est pas certifié Qualiopi et n'a l'agrément d'aucun fonds : interrogez le fonds par écrit, programme et devis en main, avant de signer."],
    ],

    'sources' => [
        ['titre' => "Notion, tarifs des forfaits Gratuit, Plus, Business et Enterprise (prix en euros, facturation annuelle et mensuelle)", 'url' => 'https://www.notion.com/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Trello, offres et tarifs (Free, Standard, Premium, Enterprise) et foire aux questions", 'url' => 'https://trello.com/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Asana, tarifs des formules Personal, Starter, Advanced et Enterprise, licences par tranches et foire aux questions", 'url' => 'https://asana.com/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, comparatif des offres Microsoft Teams pour les TPE et PME (Teams Essentials, Microsoft 365 Business Basic)", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-teams/compare-microsoft-teams-business-options', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, offres et prix du Planificateur (Planificateur inclus dans Microsoft 365, plan 1, plan 3)", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/planner/microsoft-planner-business-plans-and-pricing', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré à la Côte d'Ivoire (8 novembre 2025)", 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD, chapitre 4 : responsable du traitement et sous-traitant (article 28)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['microsoft-365-google-workspace', 'gestion-projet-agile', 'conduite-du-changement', 'digitalisation-processus', 'excel-google-sheets', 'digitaliser-son-entreprise'],
        'services'    => ['digitalisation-d-entreprise', 'formation-en-entreprise'],
        'comparatifs' => [],
    ],
];
