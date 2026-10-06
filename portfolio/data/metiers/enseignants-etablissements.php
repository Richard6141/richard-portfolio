<?php
// ============================================================
// data/metiers/enseignants-etablissements.php · Page « formations par
// métier » pour les enseignants et les établissements scolaires publics et
// privés (vague 1C, univers « Secteur public et éducation », non
// prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : la classe et l'école à l'heure de l'IA générative.
// Préparation des cours et des supports, différenciation, évaluation et
// intégrité des devoirs (détecteurs, charte d'usage, devoirs repensés),
// communication avec les familles, gestion de l'établissement
// (inscriptions, notes, emplois du temps, scolarités, données d'élèves
// mineurs). La page oriente vers les fiches ia-en-entreprise,
// contenu-avec-ia, outils-collaboratifs et microsoft-365-google-workspace
// sans en reprendre le texte.
// Sources lues le 05/10/2026 : UNESCO (orientations sur l'IA générative
// dans l'éducation et la recherche, communiqué du 7 septembre 2023, enquête
// de mai 2023), ministère de l'Éducation du Québec (guide 2026 destiné au
// personnel enseignant, page des documents de référence), AI Act Service
// Desk (article 5, article 113, annexe III), CNIL (photos des élèves,
// fichiers des élèves, droits numériques des mineurs, opération Cactus
// 2026), Liang et al. (détecteurs de texte généré, arXiv 2304.02819),
// loi n° 2017-20 du Bénin (articles 1er, 383, 389, 390 et 391, PDF du
// SGG), EducMaster, MESTFP (dotation du 11 septembre 2026), OHADA (Acte
// uniforme SYCEBNL), Google for Education (éditions et tarifs). La page
// du ministère français de l'Éducation nationale sur le cadre d'usage de
// l'IA n'a pas pu être lue (défi de sécurité) : elle n'est pas citée.
// Faits repris des fiches déjà vérifiées : FDFP, FODEFCA, 3FPT, France
// Compétences, article 4 du règlement européen sur l'IA, quota WhatsApp
// de Meta, tarifs d'Odoo. Richard n'est pas enseignant et n'est certifié
// par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour enseignants et établissements scolaires : préparer cours, supports et évaluations plus vite, faire tourner l'école sans papier, et garder la main sur la note, l'intégrité des devoirs et les données des élèves",
    'title'   => "Formation IA enseignants et écoles | Richard SALANON",
    'meta'    => "Former enseignants et équipes d'écoles à l'IA : cours, devoirs et intégrité, familles, inscriptions, notes, scolarités et données des élèves. Sur devis.",
    'en_bref' => "Cette page s'adresse aux enseignants du primaire et du secondaire, aux directeurs, censeurs, surveillants généraux, secrétaires et économes des établissements publics et privés qui veulent se servir de l'intelligence artificielle et des outils numériques sans perdre le contrôle de ce qui fait l'école : le contenu enseigné, la note, la relation avec les familles et la protection des élèves mineurs. Elle explique ce que ces outils changent dans la préparation des cours, l'évaluation et la gestion de l'établissement, ce qu'ils ne doivent jamais faire, et propose un parcours type de deux jours en quatre demi-journées. La formation se tient dans l'établissement, en session inter-écoles, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Secteur public et éducation',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : préparer une séquence et ses supports avec un assistant, sans sortir du programme officiel",
            'duree'  => '3 h 30',
            'points' => [
                "La règle de l'établissement avant le premier essai : ce qui peut entrer dans un assistant (programme officiel, progression annuelle, cours rédigé par l'enseignant), ce qui n'y entre qu'anonymisé (productions d'élèves), ce qui n'y entre jamais (dossiers, bulletins, santé, situation familiale).",
                "Partir du programme et de la progression de l'école : demander une séquence complète avec objectifs, prérequis, déroulé des séances, activités, trace écrite et évaluation finale.",
                "Contrôler chaque contenu disciplinaire contre le manuel en usage : définitions, dates, formules, unités, orthographe des noms propres, exemples chiffrés.",
                "Ancrer les exemples dans le quotidien des élèves : le marché, les prix en francs CFA, la géographie du pays, les noms et les situations qui leur parlent.",
                "Produire les supports : fiche d'exercices, texte de lecture, questionnaire, schéma à compléter, diaporama court, version imprimable en noir et blanc pour la photocopieuse.",
                "Droits d'auteur : ce qu'on peut confier à l'assistant d'un manuel ou d'une annale, et comment citer ses sources dans un support distribué.",
                "Exercice : chaque enseignant prépare la séquence de la semaine suivante, relue par un collègue de la même discipline avant la pause.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : différencier les supports et préparer la remédiation sans étiqueter les élèves",
            'duree'  => '3 h 30',
            'points' => [
                "Un même exercice décliné en trois niveaux d'exigence, avec des consignes reformulées et un exemple résolu pour le niveau le plus accompagné.",
                "Un texte simplifié pour les lecteurs fragiles, un lexique bilingue pour les élèves dont le français n'est pas la langue de la maison, une version en gros caractères.",
                "Des fiches de remédiation construites à partir des erreurs relevées dans la classe, décrites sans nom ni indice permettant de reconnaître un élève.",
                "Des questions orales de vérification pour s'assurer qu'un élève a compris ce qu'il a rendu.",
                "Ce qu'un assistant ne fait pas : poser un diagnostic, deviner un trouble des apprentissages, classer les élèves en profils.",
                "Exercice : un texte du programme transformé en trois versions, puis échangé et contrôlé par un binôme.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : évaluer à l'heure de l'IA, des sujets aux corrections, et protéger l'intégrité des devoirs",
            'duree'  => '3 h 30',
            'points' => [
                "Soumettre ses propres devoirs maison à un assistant : ce qu'il rédige en trente secondes, ce qu'il réussit mal (travail sur un document local, étape faite en classe, oral).",
                "La charte d'usage par niveau et par activité : IA interdite, IA permise et déclarée, IA attendue ; affichée, expliquée et signée en début d'année.",
                "Barèmes et grilles critériées proposés par l'assistant, puis ajustés aux attendus du programme ; corrigés types vérifiés ligne à ligne.",
                "Aide à la correction : commentaires types rédigés à partir d'erreurs anonymisées ; la note et l'appréciation restent posées par l'enseignant.",
                "Le soupçon de fraude : entretien avec l'élève, brouillons, historique des versions, questions sur le contenu ; jamais un score de détecteur pris seul comme preuve.",
                "Exercice : chaque participant réécrit l'un de ses devoirs maison et sa grille pour qu'ils restent justes en présence d'un assistant.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : l'établissement côté gestion et familles, puis évaluation des participants",
            'duree'  => '3 h 30',
            'points' => [
                "Le dossier de l'élève : formulaire d'inscription ou de réinscription, pièces demandées, personnes qui y ont accès, durée de conservation.",
                "Notes et bulletins : saisie dans le logiciel ou le tableau de l'école, moyennes, coefficients, contrôle croisé avant impression ou publication.",
                "Emplois du temps et remplacements : contraintes des enseignants, salles, agenda partagé, information des classes et des familles.",
                "Scolarités : échéancier par famille, reçus numérotés, paiements Mobile Money rapprochés, relances individuelles, jamais de liste de familles débitrices diffusée.",
                "Familles : canaux officiels, messages types relus avant envoi, groupes de classe administrés par l'école, plages horaires de réponse.",
                "Comptes : un accès nominatif par personne, double authentification, fermeture des accès le jour du départ d'un enseignant ou d'une secrétaire.",
                "Évaluation : chaque participant remet le livrable de son poste (séquence et devoir repensé pour un enseignant, procédure écrite pour la direction ou le secrétariat).",
            ],
        ],
        [
            'titre'  => "Six semaines plus tard, à distance : retour sur une demi-période de classe",
            'duree'  => '2 heures',
            'points' => [
                "Les supports produits depuis la formation : ce qui a servi en classe, ce qu'il a fallu corriger.",
                "La charte d'usage de l'IA à l'épreuve des premiers devoirs, et les cas de fraude ou de doute rencontrés.",
                "Les procédures du secrétariat et de l'économat qui ont tenu, et celles qu'il faut simplifier avant la fin du trimestre.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Enseignants du primaire et du secondaire, directions, vie scolaire, secrétariat et économat d'établissements publics ou privés"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, plus un retour à distance de 2 heures"],
        ['l' => 'Formats', 'v' => "Dans l'établissement, inter-écoles, à distance ou hybride, 12 personnes au plus par groupe"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent pour un enseignant et pour un établissement scolaire ?",
            'paragraphes' => [
                "Un enseignant manque rarement d'idées ; il manque de temps. Préparer la séquence de la semaine, adapter un texte pour les élèves qui lisent difficilement, construire un devoir et son barème, corriger des dizaines de copies, remplir les bulletins, répondre aux parents : presque tout passe par l'écrit, et c'est précisément l'écrit que les assistants d'IA accélèrent. Une fiche d'exercices en trois niveaux, une grille d'évaluation ou une lettre aux familles en français simple sortent en quelques minutes. La responsabilité, elle, ne bouge pas : la justesse du contenu, la note et ce qu'on écrit d'un élève restent l'affaire de l'adulte qui signe.",
                "Le deuxième changement se joue dans les devoirs. Les élèves ont accès aux mêmes assistants que leurs professeurs, souvent sur le téléphone familial, et un devoir maison classique peut désormais être rédigé sans effort. En mai 2023, une enquête de l'UNESCO auprès de plus de 450 écoles et universités relevait que moins de 10 % d'entre elles disposaient d'orientations formelles sur l'IA générative, et environ 7 % seulement des écoles. Depuis, l'UNESCO a publié ses orientations mondiales et plusieurs ministères ont diffusé des guides. La question n'est plus de savoir si les élèves s'en servent, mais comment garder une évaluation juste.",
                "Le troisième changement touche la gestion. Au Bénin, la plateforme EducMaster sert de système d'information et de gestion de l'éducation pour les deux ministères chargés de l'enseignement : selon sa page d'accueil, elle réunit le suivi des apprenants, des enseignants, des établissements et des emplois du temps, et organise les examens. Dans le privé, les inscriptions, les scolarités payées par tranches et les bulletins vivent encore souvent dans un cahier, un tableur ou un groupe WhatsApp. En Europe, l'espace numérique de travail et le logiciel de vie scolaire font partie du quotidien. Partout, chaque gain de temps administratif manipule des données de mineurs.",
                "Un établissement public travaille dans le cadre fixé par son ministère de tutelle : plateformes imposées, calendrier, programmes. La formation s'inscrit dans ce cadre et ne le discute pas. Un établissement privé choisit davantage ses outils, mais répond aussi de sa comptabilité et de la protection des données des familles. Richard SALANON n'est pas enseignant et ne prétend pas apprendre la pédagogie à des professionnels de la classe : il forme à l'usage des outils, à partir des séquences, des devoirs et des procédures de l'établissement. La règle tenue tout au long du parcours est simple : l'assistant propose, l'enseignant ou la direction tranche.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches de la classe et de l'école un outil peut-il préparer, et que garde l'adulte responsable ?",
            'legende' => "Répartition travaillée en formation et ajustée avec chaque établissement. La dernière colonne indique la précaution à mettre en place dès qu'un outil intervient.",
            'entetes' => ['Tâche', "Ce que l'assistant ou le logiciel prépare", "Ce que l'enseignant ou la direction décide", 'Précaution'],
            'lignes'  => [
                ['Préparation de séquence', "Proposition de déroulé, d'activités, de trace écrite et d'évaluation finale", "La conformité au programme officiel et à la progression de l'école", "Chaque notion vérifiée dans le manuel en usage avant la classe"],
                ['Supports et exercices', "Fiches, textes adaptés, questionnaires, corrigés, schémas", "Le choix de ce qui est distribué et dans quel ordre", "Aucun support imprimé sans relecture complète du corrigé"],
                ['Différenciation', "Versions d'un même exercice à plusieurs niveaux, lexique, consignes reformulées", "L'élève qui reçoit quelle version, et pourquoi", "Aucun nom d'élève ni diagnostic transmis à l'assistant"],
                ["Sujets et barèmes", "Propositions de sujets, grilles critériées, barèmes détaillés", "Le sujet retenu et la pondération des critères", "Sujet d'examen blanc jamais rédigé dans un compte personnel partagé"],
                ['Correction', "Commentaires types à partir d'erreurs anonymisées", "La note, l'appréciation et la remarque individuelle", "Copies traitées sans nom ; note toujours posée par l'enseignant"],
                ['Bulletins et conseils de classe', "Calcul des moyennes, mise en forme, brouillon d'appréciation générale", "Les appréciations, les décisions de passage et d'orientation", "Contrôle croisé des moyennes par une seconde personne"],
                ['Communication aux familles', "Brouillons de convocations, de circulaires, de messages en français simple", "Le ton, le contenu et le destinataire de chaque message", "Aucun message sur la situation d'un élève dans un groupe collectif"],
                ['Inscriptions et dossiers', "Formulaire en ligne, liste des pièces manquantes, relances", "L'admission, la classe d'affectation, l'accès au dossier", "Accès au fichier réservé aux personnels qui en ont besoin"],
                ['Emplois du temps', "Propositions de grilles sous contraintes, tableau des remplacements", "Les arbitrages entre enseignants, salles et horaires", "Une seule version publiée, datée, connue de tous"],
                ['Scolarités', "Échéanciers, reçus numérotés, rapprochement des paiements, relances", "Les remises, les délais accordés, les cas sociaux", "Relances toujours individuelles et confidentielles"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce qu'un outil d'IA ne doit jamais faire dans une classe ou une école, et quels textes le disent ?",
            'intro' => "Les limites ci-dessous reposent sur des textes et des recommandations publiques lus dans leur version officielle. Leur application à un établissement précis relève de sa tutelle, de son conseil juridique ou de l'autorité de protection des données du pays, pas du formateur.",
            'items' => [
                ['titre' => "Noter, admettre ou orienter un élève à la place d'un adulte", 'texte' => "Dans l'Union européenne, l'annexe III du règlement sur l'IA classe à haut risque les systèmes destinés à décider de l'admission dans un établissement, à évaluer les acquis d'apprentissage, à déterminer le niveau d'enseignement auquel une personne pourra accéder et à surveiller les comportements interdits pendant les examens. Selon la version consolidée publiée par la Commission, les obligations correspondantes s'appliquent à partir du 2 décembre 2027. Le guide 2026 du ministère de l'Éducation du Québec est plus direct : l'IA générative « ne doit en aucun cas remplacer son jugement professionnel » dans l'évaluation."],
                ['titre' => "Lire les émotions des élèves", 'texte' => "L'article 5 du même règlement interdit, depuis le 2 février 2025, l'utilisation de systèmes d'IA pour déduire les émotions d'une personne sur le lieu de travail et dans les établissements d'enseignement, sauf pour des raisons médicales ou de sécurité. Une caméra qui mesurerait l'attention d'une classe, ou un logiciel de surveillance d'examen qui interpréterait le stress d'un candidat, tombe sous cette interdiction pour un établissement situé dans l'Union."],
                ['titre' => "Recevoir des renseignements personnels sur les élèves", 'texte' => "Le guide québécois demande de ne saisir dans un système d'IA générative « ni information sensible ou confidentielle ni renseignements personnels », sauf avis contraire des responsables de l'organisme scolaire, et rappelle que les réponses d'un élève à une évaluation peuvent l'identifier indirectement. Au Bénin, l'article 383 de la loi n° 2017-20 portant code du numérique exige des données collectées pour des finalités déterminées, non excessives, conservées pas plus longtemps que nécessaire et protégées par des mesures de sécurité adaptées ; son article 1er définit le mineur comme toute personne âgée de moins de dix-huit ans."],
                ['titre' => "Envoyer les données de l'école vers un service hors de portée de la loi", 'texte' => "L'article 391 du code béninois n'autorise le transfert de données personnelles vers un État tiers que lorsque l'Autorité constate que cet État assure un niveau de protection équivalent ; le même code entend par État tiers tout État qui n'est pas membre de la CEDEAO. Coller la liste d'une classe avec noms, dates de naissance et téléphones des parents dans un assistant gratuit hébergé hors de la région n'entre pas dans ce cadre."],
                ['titre' => "Publier la photo d'un élève sans accord écrit", 'texte' => "En France, la CNIL rappelle qu'un établissement qui veut utiliser la photographie de ses élèves dans le journal de l'école, sur un trombinoscope ou sur son site doit obtenir le consentement des parents ou représentants légaux, et que cet accord doit être écrit. La même prudence vaut pour la page Facebook d'une école privée à Cotonou ou à Abidjan, et plus encore pour une image retouchée ou animée par un générateur."],
                ['titre' => "Ouvrir le fichier des élèves à qui le demande", 'texte' => "La CNIL précise que l'accès aux fichiers des élèves du second degré est normalement réservé aux personnels de l'établissement et aux services de l'éducation, et que les tiers autorisés par la loi ne peuvent obtenir que des informations ponctuelles sur des personnes précises, jamais l'intégralité du fichier. Un export complet envoyé à un prestataire « pour tester un outil » ne respecte pas cette logique."],
                ['titre' => "Laisser les plus jeunes converser seuls avec une IA", 'texte' => "Dans son communiqué du 7 septembre 2023, l'UNESCO indique que ses orientations fixent à 13 ans l'âge limite pour l'usage des outils d'IA en classe et appellent à former les enseignants. En France, la CNIL rappelle que le consentement d'un mineur au traitement de ses données en ligne s'accompagne de celui de ses parents lorsqu'il a moins de 15 ans. Les conditions d'utilisation de chaque service, souvent plus strictes, se vérifient avant toute activité avec des élèves."],
                ['titre' => "Verser des œuvres protégées sans en avoir les droits", 'texte' => "Le guide québécois rappelle que les règles du droit d'auteur s'appliquent quand on utilise un système d'IA générative : la personne qui lui transmet une œuvre protégée doit détenir les droits de la reproduire, puisque le système pourrait la reproduire à son tour. Un manuel numérisé en entier, une annale payante ou les cours d'un collègue ne se versent pas dans un assistant sans autorisation."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un détecteur de texte généré par IA ne prouve-t-il jamais qu'un élève a triché ?",
            'texte' => "Parce que ces outils se trompent, et pas au hasard. Dans une étude de chercheurs de Stanford publiée en 2023, sept détecteurs largement utilisés ont analysé 91 rédactions écrites à la main par des candidats non anglophones au TOEFL : ils en ont classé en moyenne 61,22 % comme générées par une IA, et 89 sur 91 ont été signalées par au moins un détecteur, alors que les rédactions d'élèves américains étaient presque toutes reconnues comme humaines. Les auteurs déconseillent ces outils dans un cadre éducatif. Un élève qui écrit dans une langue seconde, ce qui est le cas de nombreux élèves d'Afrique francophone, est donc le premier exposé à une accusation injuste. Un score oriente au mieux une conversation ; il ne fonde jamais une sanction.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment repenser les devoirs pour que l'évaluation reste juste quand chaque élève a un assistant dans la poche ?",
            'legende' => "Formats travaillés pendant la troisième demi-journée. Aucun n'est parfait ; leur combinaison sur un trimestre rend la fraude coûteuse et l'apprentissage visible.",
            'entetes' => ["Format d'évaluation", "Ce que l'IA change", "Comment le garder juste", "Règle à annoncer aux élèves"],
            'lignes'  => [
                ['Devoir maison rédigé', "Un assistant produit une rédaction correcte en quelques secondes", "Le réserver à l'entraînement, ou l'adosser à un échange oral court", "« Ce devoir prépare l'interrogation en classe ; il compte peu dans la moyenne »"],
                ['Production faite en classe', "Peu de chose si les téléphones sont rangés", "Sujet ancré dans une activité vécue en classe ou un document local", "« Le travail noté se fait ici, sur papier ou sur le poste de l'école »"],
                ["Travail avec IA autorisée et déclarée", "L'élève apprend à se servir de l'outil sous contrôle", "Demander la consigne utilisée, la réponse obtenue et ce que l'élève a corrigé", "« Toute aide d'un assistant se déclare, avec ce que tu en as fait »"],
                ['Exposé ou oral de soutenance', "L'assistant peut rédiger le texte, pas le comprendre à la place de l'élève", "Questions imprévues sur le contenu, deux minutes suffisent", "« Tu dois pouvoir expliquer chaque phrase de ton travail »"],
                ['Dossier par étapes', "Le résultat final peut être généré, pas les étapes successives", "Plan, brouillon, version finale datés et relus en classe", "« Chaque étape est vue avant la suivante »"],
                ['Questionnaire en ligne', "Les réponses se trouvent en interrogeant un assistant", "Questions sur des documents ou des observations propres à la classe, temps limité", "« Les questionnaires à la maison servent à réviser, pas à noter »"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans une école, un collège ou un lycée, de Parakou à Bruxelles ?",
            'items' => [
                ['secteur' => "Collège d'enseignement général public, à Parakou", 'probleme' => "Situation type : les professeurs d'une même discipline préparent chacun leurs fiches à la main, sur des classes chargées, avec peu de temps pour adapter les textes aux élèves en difficulté de lecture ; les supports ne circulent pas d'un collègue à l'autre.", 'solution' => "Une banque de séquences partagée par discipline, préparée avec un assistant puis vérifiée par l'animateur pédagogique, des versions simplifiées des textes du programme, et une règle écrite : aucune donnée d'élève n'entre dans l'outil. Les supports se préparent hors ligne quand la connexion du collège ne suit pas."],
                ['secteur' => "Groupe scolaire privé confessionnel, à Abomey-Calavi", 'probleme' => "Situation type : les scolarités se paient en trois tranches, en espèces ou par Mobile Money, et l'économe rapproche les captures d'écran envoyées par les parents avec un cahier de reçus ; en fin de trimestre, personne ne sait exactement quelle famille a payé quoi.", 'solution' => "Un échéancier par famille dans un tableur ou un logiciel de gestion, des reçus numérotés, un rapprochement hebdomadaire avec le relevé du compte marchand, des relances individuelles rédigées à partir d'un modèle relu par la direction, et une comptabilité tenue selon le référentiel applicable à l'association propriétaire de l'école."],
                ['secteur' => "École primaire privée laïque, à Abidjan", 'probleme' => "Situation type : chaque classe a son groupe WhatsApp, créé par un parent ; les enseignants y reçoivent des messages à toute heure, des photos d'élèves y circulent, et une remarque sur un enfant y a été lue par toute la classe.", 'solution' => "Des groupes de diffusion administrés par l'école, des plages horaires annoncées, des messages types pour les sorties, les réunions et les absences, les échanges individuels renvoyés vers un entretien ou un message privé, et une autorisation écrite des parents avant toute photo publiée."],
                ['secteur' => "Lycée technique et professionnel, à Dakar", 'probleme' => "Situation type : les rapports de stage et les dossiers techniques rendus en fin d'année se ressemblent étrangement ; un enseignant a voulu sanctionner sur la seule foi d'un détecteur en ligne, et la famille a contesté.", 'solution' => "Une charte d'usage de l'IA par type de travail, un dossier rendu par étapes datées, une soutenance orale de dix minutes pour chaque rapport, et une procédure écrite en cas de doute : entretien, brouillons, historique des versions, décision collégiale. Le détecteur n'est plus utilisé comme preuve."],
                ['secteur' => "Établissement bilingue privé, à Douala", 'probleme' => "Situation type : les emplois du temps se refont à la main à chaque absence longue, les remplacements s'annoncent la veille au soir, et les enseignants partagent un seul compte pour l'outil bureautique de l'école.", 'solution' => "Un compte nominatif par enseignant sur une suite pour l'éducation, un agenda des salles et des remplacements, une grille d'emploi du temps reconstruite sous contraintes avec l'aide d'un assistant puis arbitrée par le censeur, et une procédure de départ qui ferme les accès le jour même."],
                ['secteur' => "Collège public, en France ou en Belgique", 'probleme' => "Situation type : l'équipe utilise l'espace numérique de travail et le logiciel de vie scolaire, mais certains enseignants corrigent avec un assistant personnel en y collant les copies scannées, noms compris ; un message d'hameçonnage imitant l'ENT a récupéré des mots de passe.", 'solution' => "Un assistant autorisé par l'établissement, des copies anonymisées avant tout traitement, des commentaires types plutôt que des corrections automatiques, la double authentification sur les comptes des personnels, et un rappel des règles européennes sur l'IA en éducation lors d'une journée pédagogique."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes un enseignant ou un établissement travaille-t-il, et que faut-il en savoir ?",
            'legende' => "Informations lues le 5 octobre 2026 sur les pages officielles des administrations et des éditeurs. Les abonnements restent au nom de l'établissement ; la formation s'appuie sur les outils déjà en place et n'en impose aucun.",
            'entetes' => ['Outil ou système', "Usage à l'école", "Ce qu'il faut savoir", 'Formation liée'],
            'lignes'  => [
                ['EducMaster (Bénin)', "Suivi des apprenants, des enseignants et des établissements, emplois du temps, examens, statistiques", "Système d'information unique pour les deux ministères chargés de l'enseignement, en deux sous-systèmes : primaire et secondaire, technique et professionnel", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ["Espace numérique de travail et logiciel de vie scolaire (Europe)", "Cahier de textes, notes, absences, messagerie avec les familles", "Cibles régulières de campagnes d'hameçonnage, selon la CNIL ; les comptes des personnels se protègent comme ceux d'une entreprise", '<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>'],
                ['Google Workspace for Education', "Messagerie, Classroom, documents partagés, visioconférence", "Education Fundamentals est sans coût pour les établissements éligibles et inclut Gemini for Education ; Education Plus est affiché à 5,10 € par utilisateur et par an ; le module Google AI Pro for Education à 19,20 € par utilisateur et par mois avec engagement d'un an", '<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>'],
                ['Microsoft 365 et Teams pour l\'éducation', "Messagerie, équipes de classe, devoirs, réunions avec les parents", "Offres éducation à vérifier selon l'éligibilité de l'établissement ; mêmes réglages de partage et de comptes qu'en entreprise", '<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Préparation de séquences, supports différenciés, barèmes, brouillons de courriers", "Sur un compte administré par l'établissement de préférence ; jamais pour noter seul ni pour traiter des données nominatives d'élèves", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Tableur (Excel, Google Sheets)', "Carnet de notes, moyennes et coefficients, échéancier des scolarités", "Suffisant pour une petite école ; formules protégées, contrôle croisé des moyennes, aucun partage par lien public", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Odoo ou Dolibarr', "Facturation des scolarités, encaissements, achats, comptabilité de l'établissement privé", "Odoo propose une application gratuite, puis une offre Standard à 19,90 € par utilisateur et par mois en paiement annuel les douze premiers mois ; Dolibarr est un logiciel libre", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['WhatsApp et WhatsApp Business', "Informations aux familles, rappels de réunions et d'échéances", "Pour les écoles reliées à la plateforme de Meta, chaque numéro professionnel dispose depuis le 1er octobre 2026 de 1 000 messages de service gratuits par mois, facturés au-delà", '<a href="/formations/whatsapp-business">WhatsApp Business</a>'],
                ['Référentiels comptables OHADA', "Comptes de l'établissement privé, rapports aux propriétaires et aux partenaires", "SYSCOHADA pour une école commerciale ; SYCEBNL, en vigueur depuis le 1er janvier 2024, pour les entités à but non lucratif qui ne relèvent pas de la comptabilité publique", '<a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'une équipe éducative, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles demi-journées suivre selon sa fonction dans l'établissement ?",
            'legende' => "Les quatre demi-journées peuvent être suivies séparément. Les combinaisons ci-dessous sont les plus demandées ; elles se fixent au premier échange avec la direction.",
            'entetes' => ['Fonction', 'Demi-journées conseillées', "Ce que la personne repart en sachant faire"],
            'lignes'  => [
                ['Enseignant du primaire', 'Jour 1 matin et après-midi, jour 2 matin', "Préparer une séquence et ses supports en plusieurs niveaux, vérifier chaque contenu, construire une évaluation qui reste juste"],
                ['Enseignant du secondaire général ou technique', 'Les quatre', "Les mêmes gestes, plus la charte d'usage de l'IA dans sa discipline et la conduite d'un entretien en cas de doute sur un devoir"],
                ['Animateur pédagogique ou coordinateur de discipline', 'Jour 1 matin, jour 2 matin', "Organiser une banque de séquences partagée et harmoniser les règles d'évaluation entre collègues"],
                ['Censeur, surveillant général, vie scolaire', 'Jour 2 matin et après-midi', "Tenir notes, absences et emplois du temps sans double saisie, traiter un cas de fraude selon une procédure écrite"],
                ['Secrétariat et économat', 'Jour 2 après-midi', "Tenir les dossiers d'inscription, l'échéancier des scolarités et les relances sans exposer les familles"],
                ["Directeur, promoteur ou chef d'établissement", 'Jour 1 matin, jour 2 matin et après-midi', "Fixer les règles d'usage de l'IA, les accès aux données des élèves et le circuit de communication avec les familles"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle sans qu'aucune donnée d'élève ne quitte l'établissement ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "La direction décrit l'établissement (public ou privé, niveaux, effectifs, langues d'enseignement), les plateformes imposées par la tutelle, les outils utilisés, le nombre de participants et ce qui pèse le plus aujourd'hui : préparation, correction, fraude, familles, scolarités. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => 'Choix des matériaux', 'duree' => 'Trois semaines avant', 'texte' => "Chaque enseignant apporte une séquence en cours et un devoir déjà donné ; le secrétariat et l'économat apportent un formulaire d'inscription, un modèle de bulletin et un modèle de relance. Les dates évitent les périodes d'examens, de conseils de classe et de rentrée."],
                ['titre' => 'Anonymisation', 'duree' => 'Une semaine avant', 'texte' => "L'établissement remplace lui-même les noms, matricules, téléphones et montants par des valeurs fictives. Les copies servant aux exercices de correction sont des copies d'années passées, sans nom, ou des copies rédigées pour l'occasion. Le formateur ne reçoit aucun identifiant d'EducMaster, de l'ENT ou du logiciel de gestion."],
                ['titre' => 'Accord de la direction', 'duree' => 'Avant la session', 'texte' => "La direction valide les règles qui seront travaillées : assistants autorisés, données interdites, charte d'usage proposée aux élèves, circuit des messages aux familles. Dans un établissement public, ces règles restent subordonnées aux instructions de la tutelle."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "Chaque séquence part d'un cas réel de l'établissement, passe par la règle qui s'applique, puis par le geste dans l'outil, sur le poste ou le téléphone de chaque participant. Les enseignants travaillent par discipline ou par cycle quand c'est possible."],
                ['titre' => 'Supports et suivi', 'duree' => 'Fin de session, puis six semaines après', 'texte' => "Modèle de charte d'usage de l'IA, grille de vérification d'un support généré, procédure en cas de doute sur un devoir, modèles de messages aux familles, procédure d'arrivée et de départ des personnels, attestation nominative ; puis un retour à distance de deux heures."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une école, un collège, un lycée ou un réseau d'établissements ?",
            'legende' => "Les formats se combinent. Le calendrier scolaire décide souvent : journées pédagogiques, congés, mercredis après-midi ou samedis matin.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier de direction', 'Deux heures', "Directeur ou promoteur, censeur, économe, un enseignant référent", "Écrire les règles d'usage de l'IA et d'accès aux données avant de former l'équipe"],
                ['Journée pédagogique', 'Une journée', "Toute l'équipe enseignante, en deux groupes", "Rentrée ou mi-année : préparation et évaluation à l'heure de l'IA"],
                ["Parcours complet dans l'établissement", '2 jours en 4 demi-journées', '12 personnes au plus par groupe', "Établissement qui veut harmoniser ses pratiques de la classe à l'économat"],
                ['Session inter-écoles', '1 ou 2 jours', "Deux ou trois personnes par établissement", "Petites écoles privées d'un même quartier ou d'un même réseau confessionnel"],
                ['À distance', 'Séances de 2 heures', '10 personnes au plus', "Enseignants dispersés, réseau d'écoles sur plusieurs villes ou plusieurs pays"],
                ['Hybride', 'Une demi-journée sur place, puis séances à distance', '12 personnes au plus', "Prise en main en salle, puis application aux séquences de la semaine avec un retour en ligne"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe éducative, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est affiché : chaque formule est chiffrée sur devis après le premier échange, et le devis détaille ce qu'il comprend. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux suites bureautiques, aux assistants d'IA et aux logiciels de gestion restent réglés par l'établissement à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Atelier de direction', 'prix' => 'Sur devis', 'inclus' => ["Deux heures avec l'équipe de direction", "Règles d'usage de l'IA et d'accès aux données des élèves rédigées", "Recommandations pour la suite"]],
                ['offre' => 'Journée pédagogique', 'prix' => 'Sur devis', 'inclus' => ["Une journée pour l'équipe enseignante", "Exercices sur les séquences et les devoirs de l'établissement", "Modèle de charte d'usage de l'IA et attestation"]],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées, de la classe à la gestion', 'Charte, procédures et modèles construits en séance', 'Évaluation sur le livrable de chaque poste', 'Retour à distance six semaines après']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Le nombre de demi-journées et les modules retenus.",
                "Les outils couverts : suite Google ou Microsoft, ENT, tableur, logiciel de gestion, WhatsApp.",
                "Le temps de préparation des séquences, devoirs et modèles de l'établissement.",
                "Le lieu : l'établissement à Cotonou, une autre ville, un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation des enseignants et du personnel d'un établissement ?",
            'paragraphes' => [
                "Tout dépend du statut de l'établissement. Une école publique ne commande pas une formation comme une entreprise : elle suit les règles de dépense et d'achat de sa tutelle, et la formation continue de ses enseignants relève d'abord du ministère, des inspections et des partenaires qui l'accompagnent. Une demande de formation y passe donc par la voie hiérarchique, programme et devis à l'appui, et rien n'est engagé avant l'accord écrit de l'autorité compétente.",
                "Une école privée est, selon les pays, une entreprise ou une association, et peut à ce titre interroger un fonds de formation professionnelle. En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consultée le 5 octobre 2026 ouvre le dépôt d'un plan de formation à toute entreprise qui justifie du paiement régulier de la taxe d'apprentissage et de la taxe additionnelle à la formation continue. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> affiche un guichet pour le personnel des entreprises et un autre pour les établissements de formation professionnelle et technique.",
                "Dans chacun de ces pays, les conditions qui visent le prestataire, les publics éligibles et la part restant à la charge de l'établissement se demandent au fonds lui-même, avant de signer quoi que ce soit ; aucune prise en charge n'est promise ici. En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics et mutualisés exige depuis le 1er janvier 2022 un prestataire certifié Qualiopi, ce que Richard SALANON n'est pas : un établissement privé français règle donc la session sur son budget propre. Le programme, les feuilles d'émargement et les attestations sont fournis dans tous les cas.",
                "Pour un établissement situé dans l'Union européenne, ces pièces ont une autre utilité. Depuis le 2 février 2025, l'article 4 du règlement européen sur l'IA demande aux organisations qui utilisent des systèmes d'IA de prendre des mesures pour que leur personnel en ait une maîtrise adaptée ; la Commission précise que l'omnibus numérique entré en vigueur à la mi-juillet 2026 maintient cette obligation pour les utilisateurs professionnels. Une école qui laisse ses enseignants utiliser des assistants garde ainsi une trace de l'effort de formation consenti.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les écoles qui adoptent l'IA et le numérique sans méthode ?",
            'intro' => "Elles viennent rarement de la mauvaise volonté. Elles naissent de l'urgence d'une rentrée, d'une pile de copies, d'un parent pressant, ou d'un outil adopté parce qu'il était gratuit et disponible ce jour-là.",
            'items' => [
                ['titre' => "Interdire sans expliquer", 'texte' => "Une interdiction générale de l'IA, annoncée sans exemples, pousse les usages dans l'ombre : les élèves s'en servent quand même et apprennent seulement à le cacher. Une charte qui distingue les activités où l'outil est interdit, permis et déclaré, ou attendu, se respecte mieux, parce qu'elle est compréhensible."],
                ['titre' => "Tout autoriser sans règle commune", 'texte' => "Un professeur encourage l'usage, le collègue de la salle voisine le sanctionne. Les élèves ne savent plus ce qui est permis. La règle se fixe au niveau de l'établissement, puis chaque enseignant la précise pour ses activités, par écrit."],
                ['titre' => "Croire le détecteur", 'texte' => "Un pourcentage affiché par un site en ligne devient une accusation. Les faux positifs touchent d'abord les élèves qui écrivent dans une langue seconde. Le doute se traite par un entretien, les brouillons, l'historique des versions et des questions sur le contenu."],
                ['titre' => "Distribuer un support sans l'avoir relu", 'texte' => "Une date fausse, une formule mal recopiée, un exemple qui n'existe pas dans le programme : l'erreur imprimée en soixante exemplaires coûte une séance à corriger. Le corrigé de chaque exercice généré se refait à la main avant la photocopie."],
                ['titre' => "Mélanger élèves et parents dans les mêmes groupes", 'texte' => "Les groupes de classe ouverts à tous deviennent le lieu des réclamations, des photos et des rumeurs. Les annonces collectives passent par un canal administré par l'école ; tout ce qui concerne un élève précis se traite en privé, avec sa famille."],
                ['titre' => "Partager le carnet de notes par un lien ouvert", 'texte' => "Un tableur de notes partagé « à toute personne disposant du lien » finit transféré hors de l'école. Les notes se partagent nommément, en lecture seule quand c'est possible, et les liens ouverts se ferment après usage."],
                ['titre' => "Nommer les familles qui doivent la scolarité", 'texte' => "Afficher une liste de retardataires, ou la publier dans un groupe, humilie des enfants et expose l'école. L'échéancier et les relances restent individuels, et les arrangements accordés à une famille ne regardent qu'elle et la direction."],
                ['titre' => "Garder les accès d'un enseignant parti", 'texte' => "Le compte d'un professeur muté ou d'une secrétaire qui a quitté l'école reste ouvert sur la plateforme, l'ENT ou le logiciel de gestion. Les accès se ferment le jour du départ, et l'établissement récupère d'abord les documents dont il a besoin."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, équipement, langues : que change le terrain africain ou européen pour une équipe éducative ?",
            'paragraphes' => [
                "En Afrique de l'Ouest, l'équipement progresse mais reste inégal d'une école à l'autre. Au Bénin, le ministère des Enseignements secondaire, technique et de la formation professionnelle a annoncé le 11 septembre 2026 la remise par l'UNICEF de 628 équipements informatiques destinés à 43 collèges d'enseignement général répartis dans neuf départements, avec 12 nouvelles salles numériques qui s'ajoutent aux 55 déjà déployées dans les zones d'intervention de l'organisation. Beaucoup d'enseignants préparent pourtant encore leurs cours sur leur téléphone, avec leur propre forfait. La formation en tient compte : les gestes enseignés fonctionnent sur un téléphone et se préparent hors ligne quand c'est possible.",
                "La langue compte autant que la connexion. Les élèves apprennent en français, parfois en anglais dans les établissements bilingues, alors qu'ils parlent souvent une autre langue à la maison. Les assistants d'IA aident à produire des textes simplifiés et des lexiques, mais ils maîtrisent mal les langues nationales : tout support en fon, en wolof, en éwé ou dans une autre langue du pays se relit par un locuteur avant d'être distribué. Cette réalité linguistique explique aussi pourquoi les détecteurs de texte généré se trompent davantage sur les copies de ces élèves.",
                "En Europe, la question n'est plus l'accès aux outils mais la sécurité et la conformité. Selon la CNIL, qui relaie le 30 mars 2026 l'opération nationale de prévention conduite par le ministère de l'Éducation nationale, les établissements font face depuis plusieurs années à des attaques visant les ENT et les outils numériques de vie scolaire, et des campagnes d'hameçonnage ont conduit à des fermetures temporaires de services dans les Hauts-de-France à la fin de 2025. Une enquête menée en septembre 2025 auprès d'élèves de CM1 à la sixième indiquait qu'un sur trois avait déjà été exposé à des actes de cybermalveillance.",
                "Une école qui travaille entre les deux continents, comme un réseau confessionnel ou un établissement d'enseignement français à l'étranger, applique par défaut la règle la plus protectrice des pays concernés pour les données des élèves, et garde une trace écrite de ses choix. Le parcours ne traite pas le droit de l'éducation de chaque pays ; il apprend des gestes qui restent valables partout : moins de données, des accès nominatifs, une vérification humaine avant toute décision qui touche un élève.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés une équipe éducative doit-elle connaître ?",
            'items' => [
                ['valeur' => 'Moins de 10 %', 'libelle' => "Part des écoles et universités disposant d'orientations formelles sur l'IA générative, dans une enquête menée du 4 au 19 mai 2023 auprès de plus de 450 établissements (environ 7 % des écoles)", 'source' => 'UNESCO', 'url' => 'https://www.unesco.org/en/articles/unesco-survey-less-10-schools-and-universities-have-formal-guidance-ai'],
                ['valeur' => '13 ans', 'libelle' => "Âge limite fixé par les orientations de l'UNESCO pour l'usage des outils d'IA en classe (communiqué du 7 septembre 2023)", 'source' => 'UNESCO', 'url' => 'https://www.unesco.org/en/articles/unesco-governments-must-quickly-regulate-generative-ai-schools'],
                ['valeur' => '61,22 %', 'libelle' => "Taux moyen de rédactions humaines de candidats non anglophones classées à tort comme générées par sept détecteurs (91 rédactions du TOEFL, étude de 2023)", 'source' => 'Liang et al., Stanford, arXiv 2304.02819', 'url' => 'https://arxiv.org/abs/2304.02819'],
                ['valeur' => '2 décembre 2027', 'libelle' => "Date d'application des obligations du règlement européen sur l'IA pour les systèmes à haut risque de l'annexe III, dont ceux qui admettent, évaluent ou surveillent des élèves (version consolidée)", 'source' => 'Commission européenne, AI Act Service Desk', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113'],
                ['valeur' => '628', 'libelle' => "Équipements informatiques remis le 11 septembre 2026 pour 43 collèges d'enseignement général du Bénin, avec 12 nouvelles salles numériques", 'source' => 'MESTFP du Bénin', 'url' => 'https://enseignementsecondaire.gouv.bj/actualite/nouvelles/694/enseignement-secondaire-le-gouvernement-accelere-la-transformation-numerique-avec-628-equipements-informatiques'],
                ['valeur' => '1 élève sur 3', 'libelle' => "Élèves de CM1 à la sixième déclarant avoir déjà été exposés à des actes de cybermalveillance, enquête de septembre 2025 dans les territoires numériques éducatifs", 'source' => 'CNIL, opération Cactus 2026', 'url' => 'https://www.cnil.fr/fr/operation-cactus-2026'],
                ['valeur' => '1er janvier 2024', 'libelle' => "Entrée en vigueur du système comptable OHADA des entités à but non lucratif (SYCEBNL), adopté le 22 décembre 2022 à Niamey", 'source' => 'OHADA', 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-systeme-comptable-des-entites-a-but-non-lucratif/'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une équipe éducative ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours métier en reprend les gestes utiles à la classe et à l'administration scolaire ; les fiches permettent d'aller plus loin sur un outil.",
            'entetes' => ['Formation', "Ce qu'elle apporte à l'école", 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/ia-en-entreprise">IA en entreprise</a>', "L'usage quotidien d'un assistant pour rédiger, synthétiser et analyser, avec une méthode de vérification", 'Direction, secrétariat, enseignants qui débutent'],
                ['<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a>', "Visuels, affiches et vidéos courtes générés avec des droits d'utilisation clairs, pour la communication de l'école", "Chargé de communication d'une école privée, enseignants qui produisent des supports visuels"],
                ['<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>', "Organiser le travail commun d'une équipe pédagogique : projets, échéances, documents partagés", 'Coordinateurs de discipline, équipes de projet'],
                ['<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>', "Messagerie, agendas, partages et droits d'accès réglés pour tout l'établissement", "Référent numérique, secrétariat, direction"],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Carnets de notes, moyennes et échéanciers fiables, avec des formules protégées", 'Censeur, économe, professeurs principaux'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Reconnaître un faux message de la plateforme, protéger ses mots de passe, activer la double authentification", "Tout le personnel, en priorité ceux qui ont accès aux données des élèves"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre équipe éducative avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des enseignants et des personnels d'établissements scolaires, sur les outils qu'ils avaient sous la main : le téléphone, la suite bureautique de l'école, les assistants d'IA, le tableur des notes ou des scolarités. Il n'enseigne pas en classe et ne remplace ni l'inspection ni l'animateur pédagogique : il apporte la maîtrise des outils et construit chaque exercice à partir des séquences, des devoirs et des procédures de l'établissement. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont le Bénin, le Togo, la Côte d'Ivoire, le Sénégal, le Gabon, la France, la Belgique et le Canada. Il n'est certifié par aucun éditeur et ne revend aucune licence ; les questions de droit de l'éducation ou de protection des données soulevées en séance sont renvoyées à la tutelle, au délégué à la protection des données ou au conseil de l'établissement.",
                "Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, et sa façon d'organiser une formation sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. Pour choisir un assistant, le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude ou Gemini</a> pose les critères ; pour encaisser les scolarités en ligne, le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, KKiaPay ou CinetPay</a> aide à choisir. Une école qui envisage un robot pour répondre aux parents lira l'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a> : l'organisation répond de ce que dit son robot. Le reste de l'offre figure dans le <a href=\"/formations/domaine/intelligence-artificielle\">domaine Intelligence artificielle</a> du <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire une équipe éducative ?",
            'texte' => "Aucune donnée nominative d'élève dans un assistant, des supports vérifiés avant la photocopie, une charte d'usage de l'IA connue des élèves et des familles, des devoirs pensés pour rester justes, jamais de sanction sur la foi d'un détecteur, des relances de scolarité individuelles, un compte par personne fermé le jour du départ. L'assistant prépare ; l'enseignant note, la direction décide.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos enseignants et votre équipe administrative à l'IA et aux outils numériques ?",
            'texte'  => "Indiquez le statut de l'établissement (public ou privé), les niveaux, le pays, les plateformes et logiciels utilisés, le nombre de participants et ce que vous voulez améliorer en premier : préparation des cours, évaluation, communication avec les familles ou gestion. Vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon établissement'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà se servir d'un assistant d'IA pour suivre la formation ?", 'r' => "Non. Savoir utiliser un téléphone ou un ordinateur, envoyer un courriel et ouvrir un document suffit. La première demi-journée part d'une séquence réelle et du programme officiel, pas de l'outil. Les enseignants qui utilisent déjà ChatGPT, Claude, Gemini ou Copilot y trouvent surtout une méthode de vérification et des règles pour protéger leurs élèves."],
        ['q' => "Un enseignant peut-il corriger ses copies avec l'IA ?", 'r' => "Il peut s'en aider pour préparer des commentaires types, un barème détaillé ou un corrigé, à partir de productions anonymisées. La note et l'appréciation restent les siennes. Le guide 2026 du ministère de l'Éducation du Québec recommande en outre de n'utiliser pour évaluer des travaux d'élèves qu'un système autorisé par l'organisme scolaire, et de s'assurer que les travaux traités ne contiennent pas de renseignements personnels."],
        ['q' => "Comment savoir si un élève a fait son devoir avec ChatGPT ?", 'r' => "Avec certitude, on ne le sait pas, et les détecteurs ne le savent pas mieux : une étude de 2023 a montré qu'ils classaient à tort comme générées plus de la moitié des rédactions de candidats non anglophones. La réponse passe par la conception des devoirs (étapes datées, production en classe, oral court) et, en cas de doute, par un entretien avec l'élève sur le contenu de son travail."],
        ['q' => "Faut-il interdire l'IA aux élèves ?", 'r' => "La décision appartient à l'établissement et, dans le public, à sa tutelle. La formation aide à écrire une charte qui distingue les activités où l'IA est interdite, celles où elle est permise et déclarée, et celles où son usage fait partie de l'apprentissage. L'UNESCO recommande de ne pas laisser les élèves de moins de 13 ans utiliser ces outils en classe."],
        ['q' => "Le formateur aura-t-il accès à EducMaster, à l'ENT ou aux dossiers de nos élèves ?", 'r' => "Non. Aucun identifiant ne lui est transmis et aucun dossier réel ne lui est envoyé. Les démonstrations sur les plateformes de l'établissement se font sur les écrans de l'équipe, par l'équipe, et les exercices utilisent des documents anonymisés par l'établissement lui-même ou rédigés pour l'occasion."],
        ['q' => "Peut-on publier des photos des élèves sur la page Facebook de l'école ?", 'r' => "Seulement avec l'accord écrit des parents ou des représentants légaux, comme le rappelle la CNIL pour les écoles françaises ; c'est aussi la pratique la plus sûre en Afrique francophone. L'autorisation précise les supports concernés et se recueille en début d'année. Une image modifiée ou animée par un générateur appelle la même prudence, et souvent davantage."],
        ['q' => "Peut-on utiliser un groupe WhatsApp pour communiquer avec les parents ?", 'r' => "Oui, à condition qu'il soit administré par l'école, réservé aux annonces collectives et accompagné de plages horaires connues. Tout ce qui concerne un élève précis (résultats, comportement, scolarité impayée) se traite en privé. La formation fournit des messages types pour les sorties, les réunions, les absences et les échéances."],
        ['q' => "Un logiciel peut-il gérer seul les inscriptions et les paiements de scolarité ?", 'r' => "Il peut collecter les formulaires, signaler les pièces manquantes, émettre des reçus et rapprocher les paiements Mobile Money. L'admission, les remises, les délais accordés et les situations particulières restent décidés par la direction. Pour une école privée, la tenue des comptes suit le référentiel OHADA applicable : SYSCOHADA ou, pour une entité à but non lucratif, SYCEBNL."],
        ['q' => "La formation convient-elle à un établissement public ?", 'r' => "Oui, dans le respect des instructions de la tutelle : plateformes imposées, programmes et procédures ne sont pas discutés, la formation s'y insère. La commande passe par les règles d'achat de l'établissement ou de son ministère, et le programme peut être transmis à l'inspection avant la session."],
        ['q' => "Peut-on former une petite école ou un seul enseignant ?", 'r' => "Oui, en session inter-écoles avec d'autres établissements, ou à distance en séances de deux heures. Pour une petite école privée, un atelier de deux heures avec le promoteur ou le directeur est conseillé en ouverture, afin d'écrire les règles d'usage que l'équipe appliquera ensuite."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des demi-journées retenues, des outils couverts, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "Un modèle de charte d'usage de l'IA, une grille de vérification des supports générés, une procédure en cas de doute sur un devoir, des messages types pour les familles, la procédure d'arrivée et de départ des personnels et une attestation nominative de fin de formation. Ce n'est ni un diplôme, ni une habilitation pédagogique, ni une certification."],
    ],

    'sources' => [
        ['titre' => "UNESCO, Orientations pour l'intelligence artificielle générative dans l'éducation et la recherche (page mise à jour le 19 janvier 2026)", 'url' => 'https://www.unesco.org/fr/articles/orientations-pour-lintelligence-artificielle-generative-dans-leducation-et-la-recherche', 'date' => '2026-10-05'],
        ['titre' => "UNESCO, communiqué du 7 septembre 2023 : les gouvernements doivent réglementer rapidement l'IA générative dans les écoles (âge limite de 13 ans)", 'url' => 'https://www.unesco.org/en/articles/unesco-governments-must-quickly-regulate-generative-ai-schools', 'date' => '2026-10-05'],
        ['titre' => "UNESCO, enquête de mai 2023 : moins de 10 % des écoles et universités disposent d'orientations formelles sur l'IA", 'url' => 'https://www.unesco.org/en/articles/unesco-survey-less-10-schools-and-universities-have-formal-guidance-ai', 'date' => '2026-10-05'],
        ['titre' => "Ministère de l'Éducation du Québec, L'utilisation pédagogique, éthique et légale de l'intelligence artificielle générative : guide destiné au personnel enseignant (2026, PDF)", 'url' => 'https://cdn-contenu.quebec.ca/cdn-contenu/education/Numerique/Guide-utilisation-pedagogique-ethique-legale-IA-personnel-enseignant.pdf', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Québec, documents et outils de référence sur l'intelligence artificielle en éducation (mise à jour du 28 avril 2026)", 'url' => 'https://www.quebec.ca/education/numerique/intelligence-artificielle/reseau-education/documents-outils-ia', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : annexe III, systèmes d'IA à haut risque (point 3, éducation et formation professionnelle)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : article 5, pratiques d'IA interdites (reconnaissance des émotions dans les établissements d'enseignement)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-5', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : article 113, entrée en vigueur et dates d'application (version consolidée)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "CNIL, utilisation des photos des élèves : faut-il l'accord des parents ?", 'url' => 'https://www.cnil.fr/fr/cnil-direct/question/utilisation-des-photos-des-eleves-faut-il-laccord-des-parents', 'date' => '2026-10-05'],
        ['titre' => "CNIL, fichiers des élèves du second degré : qui peut les consulter ?", 'url' => 'https://www.cnil.fr/fr/cnil-direct/question/fichiers-des-eleves-du-second-degre-qui-peut-les-consulter', 'date' => '2026-10-05'],
        ['titre' => "CNIL, les droits numériques des mineurs (recommandations)", 'url' => 'https://www.cnil.fr/fr/enjeux-numeriques/les-droits-numeriques-des-mineurs', 'date' => '2026-10-05'],
        ['titre' => "CNIL, opération Cactus 2026 : renforcer la sensibilisation de la communauté éducative aux cybermenaces (30 mars 2026)", 'url' => 'https://www.cnil.fr/fr/operation-cactus-2026', 'date' => '2026-10-05'],
        ['titre' => "Liang, Yuksekgonul, Mao, Wu et Zou, « GPT detectors are biased against non-native English writers », arXiv 2304.02819 (2023)", 'url' => 'https://arxiv.org/abs/2304.02819', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 1er, 383, 389, 390 et 391)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EducMaster, portail national de l'éducation du Bénin (système d'information et de gestion de l'éducation)", 'url' => 'https://educmaster.bj/', 'date' => '2026-10-05'],
        ['titre' => "Ministère des Enseignements secondaire, technique et de la formation professionnelle du Bénin, remise de 628 équipements informatiques (11 septembre 2026)", 'url' => 'https://enseignementsecondaire.gouv.bj/actualite/nouvelles/694/enseignement-secondaire-le-gouvernement-accelere-la-transformation-numerique-avec-628-equipements-informatiques', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au système comptable des entités à but non lucratif (SYCEBNL) : présentation", 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-systeme-comptable-des-entites-a-but-non-lucratif/', 'date' => '2026-10-05'],
        ['titre' => "OHADA, disponibilité de l'Acte uniforme SYCEBNL (29 mars 2023)", 'url' => 'https://www.ohada.org/disponibilite-de-lacte-uniforme-relatif-au-systeme-comptable-des-entites-a-but-non-lucratif/', 'date' => '2026-10-05'],
        ['titre' => "Google for Education, comparer les éditions de Google Workspace for Education (prix affichés en euros)", 'url' => 'https://edu.google.com/intl/ALL_fr/workspace-for-education/editions/compare-editions/', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs (page en français)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business (quota de 1 000 messages de service gratuits depuis le 1er octobre 2026)", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, Fonds de financement de la formation professionnelle et technique : guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'contenu-avec-ia', 'outils-collaboratifs', 'microsoft-365-google-workspace', 'excel-google-sheets', 'cybersecurite-employes'],
        'services'    => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
