<?php
// ============================================================
// data/formations/chef-de-projet-digital.php · Fiche formation « Chef de
// projet digital et product owner » (vague 1B, lot B, domaine
// transformation-digitale). Angle propre : le rôle tenu dans l'entreprise
// cliente (mandat, besoin écrit, user stories, backlog et priorisation,
// arbitrages, recette, suivi du prestataire, compte rendu à la direction,
// mesure après la mise en ligne). Sœurs non traitées : gestion-projet-agile
// (la méthode par itérations, les contrats, la revue de livraison),
// conduite-du-changement, digitalisation-processus, data-literacy.
// Aucune ancienne page. Sources lues le 05/10/2026 : Scrum Guide 2020
// (anglais et français), France Travail (ROME M1864, M1881, M1886), Bill Wake
// (INVEST, 2003), Agile Business Consortium (MoSCoW), Cucumber (Gherkin),
// CNIL (RGPD, article 25), SGG du Bénin, EUR-Lex (directive 2019/882), UIT,
// Notion, Trello, Miro, Figma, Microsoft Clarity, FDFP, 3FPT, France
// Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation chef de projet digital et product owner : tenir le rôle côté client, du besoin écrit à la mesure des résultats après la mise en ligne",
    'title'   => "Chef de projet digital et product owner | Richard SALANON",
    'meta'    => "Formation chef de projet digital et product owner : écrire le besoin, prioriser le backlog, arbitrer, recetter, rendre compte et mesurer. Sur devis.",
    'en_bref' => "Cette formation prépare la personne désignée dans votre organisation pour piloter un projet numérique : rédiger le besoin et les user stories, tenir et ordonner le backlog, arbitrer entre les demandes, recetter les livraisons, suivre le prestataire, rendre compte à la direction et mesurer ce que l'outil change après sa mise en ligne. Elle s'adresse aux chefs de projet débutants ou confirmés, en Afrique francophone comme en Europe, et se travaille sur leur projet réel. Elle dure trois jours en six demi-journées, avec un bilan après la mise en ligne en option, dans vos locaux, à distance, en hybride ou en inter-entreprises. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'transformation-digitale',
    'forte'   => false,
    'duree'   => '3 jours en 6 demi-journées, bilan après la mise en ligne en option',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : prendre le rôle, obtenir un mandat écrit et cartographier les parties prenantes",
            'duree'  => '3 h 30',
            'points' => [
                "Ce que recouvrent les intitulés chef de projet digital, product owner, chef de projet maîtrise d'ouvrage, et ce que les référentiels publics en disent.",
                "Le mandat : ce que la personne décide seule, ce qu'elle propose, ce qui remonte au commanditaire, avec quel budget et quel temps réservé chaque semaine.",
                "La carte des parties prenantes : qui finance, qui utilise, qui peut bloquer, qui doit seulement être informé.",
                "Les quatre responsabilités que le Scrum Guide 2020 confie au product owner, traduites en tâches concrètes pour une PME qui travaille avec un prestataire.",
                "Exercice : rédiger le mandat d'une page de son propre projet, à faire signer par le commanditaire avant la fin de la formation.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : comprendre les utilisateurs et rédiger la note de besoin",
            'duree'  => '3 h 30',
            'points' => [
                "L'objectif du produit en une phrase : un état futur mesurable, et non une liste de fonctions.",
                "Recueillir le besoin sans le déformer : entretiens courts, observation d'une journée de travail, analyse des réclamations et des tableurs existants.",
                "Décrire deux à quatre profils d'utilisateurs réels, avec leur appareil, leur connexion et leur langue de travail.",
                "Les exigences que l'on oublie : téléphone d'entrée de gamme, réseau instable, données personnelles, accessibilité, sauvegarde, réversibilité.",
                "Exercice : la note de besoin de trois pages, avec ce qui est expressément hors du périmètre.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : écrire des user stories qui se chiffrent et se vérifient",
            'duree'  => '3 h 30',
            'points' => [
                "La forme « en tant que, je veux, afin de », et pourquoi le « afin de » est la partie la plus utile.",
                "Les six qualités INVEST d'une bonne story, appliquées à des exemples tirés des projets des participants.",
                "Les critères d'acceptation rédigés en « étant donné, quand, alors », cas d'erreur compris.",
                "Découper une story trop grosse : par règle métier, par type d'utilisateur, par canal de paiement, par cas d'exception.",
                "La carte des parcours (story map) : les grandes étapes de l'utilisateur en ligne, le détail en colonne.",
                "Exercice : quinze stories de son projet, chacune avec au moins trois critères d'acceptation.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : tenir le backlog, prioriser et arbitrer",
            'duree'  => '3 h 30',
            'points' => [
                "Le backlog comme liste unique et ordonnée : ce qui y entre, sous quelle forme, et ce qui en sort.",
                "Trois méthodes de priorisation (MoSCoW, valeur et effort, coût du retard) et la façon de choisir entre elles.",
                "Recevoir une demande, la reformuler, l'estimer avec le prestataire, puis dire oui, plus tard ou non, par écrit.",
                "Arbitrer entre deux directeurs : critères annoncés à l'avance, journal des arbitrages, escalade au commanditaire.",
                "Exercice en jeu de rôle : trois demandes urgentes venues de trois services, une seule place dans la prochaine livraison.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : recetter et suivre le prestataire",
            'duree'  => '3 h 30',
            'points' => [
                "Du critère d'acceptation au scénario de recette : jeux de données, rôles, appareils, résultat attendu.",
                "Qualifier une anomalie : bloquante, majeure, mineure, cosmétique, et la demande nouvelle déguisée en anomalie.",
                "La fiche d'anomalie que le développeur peut reproduire du premier coup : étapes, capture, compte utilisé, date.",
                "Le point hebdomadaire de trente minutes avec le prestataire, son ordre du jour et son compte rendu.",
                "Ce que le client doit détenir : accès d'administration, code, documentation, nom de domaine.",
                "Exercice : recette d'une application de démonstration qui contient des défauts volontaires.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : rendre compte à la direction et mesurer après la mise en ligne",
            'duree'  => '3 h 30',
            'points' => [
                "Le rapport d'une page : état, faits de la période, risques, décisions attendues du commanditaire.",
                "Annoncer un retard ou un dépassement sans le cacher ni le dramatiser, avec des options chiffrées.",
                "Le plan de mesure : trois indicateurs (usage, adoption, résultat), leur valeur de départ et la date de relevé.",
                "Recueillir les retours des utilisateurs après la mise en ligne et les faire entrer dans le backlog.",
                "Exercice : présentation de cinq minutes au commanditaire, questions difficiles comprises.",
            ],
        ],
        [
            'titre'  => "En option, après la mise en ligne : bilan du produit et nouvel ordre du backlog",
            'duree'  => '3 h',
            'points' => [
                "Lecture des indicateurs relevés depuis la mise en ligne, comparés aux valeurs de départ.",
                "Tri des retours d'utilisateurs : correctifs, améliorations, idées à écarter.",
                "Nouvel ordre du backlog et préparation de la prochaine décision de la direction.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées de 3 h 30 ; bilan après la mise en ligne en option'],
        ['l' => 'Public', 'v' => 'Chefs de projet et product owners désignés côté client, 4 à 10 personnes par groupe'],
        ['l' => 'Formats', 'v' => 'Intra, inter-entreprises, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire la personne formée au bout des trois jours, et que laisse la formation à d'autres ?",
            'paragraphes' => [
                "Dans beaucoup d'organisations, le projet numérique est confié à quelqu'un « parce qu'il s'y connaît un peu » : la responsable marketing pour le site, le contrôleur de gestion pour l'outil de reporting, l'assistant de direction pour l'application interne. Personne ne lui dit ce qu'il a le droit de décider, ni comment écrire ce que veulent les collègues, ni comment savoir si le prestataire a bien travaillé. Cette formation transforme cette désignation en rôle tenu, avec des documents, des réflexes et une autorité reconnue par la direction.",
                "À la fin de la troisième journée, chaque participant repart avec huit pièces produites sur son propre projet : un mandat signé ou prêt à l'être, une carte des parties prenantes, une note de besoin de trois pages, une carte des parcours, une quinzaine de user stories avec leurs critères d'acceptation, un backlog ordonné avec la méthode de priorisation retenue, un cahier de recette pour la première livraison et un plan de mesure avec ses valeurs de départ. Ce sont ces pièces, relues avec le formateur, qui servent d'évaluation.",
                "L'objectif mesurable tient en trois épreuves passées pendant la session. Écrire une story qu'un développeur qui ne connaît pas votre métier peut chiffrer sans poser de question. Expliquer à un directeur, en moins de deux minutes, pourquoi sa demande passe après une autre. Rédiger une fiche d'anomalie que le prestataire reproduit du premier coup. Si l'une des trois résiste, elle est reprise le lendemain sur un autre exemple du même projet.",
                "La formation ne traite pas la méthode de travail par itérations en elle-même, ni le choix du contrat avec le prestataire, ni la conduite des revues de livraison : ces sujets relèvent de la formation à la gestion de projet IT agile, qui s'adresse à toute l'organisation cliente. Elle n'apprend pas davantage à cartographier un processus avant de l'outiller, à faire adopter l'outil par les équipes ni à interpréter des tableaux de bord : trois autres formations du même domaine s'en chargent. Elle se concentre sur le métier de la personne qui porte le produit.",
                "Elle ne remplace pas non plus une étude préalable. Si le projet n'existe encore qu'à l'état d'intention et qu'il faut un cahier des charges complet, chiffré et prêt pour une consultation de prestataires, c'est l'objet d'une mission d'<a href=\"/services/audit-etude-de-projet\">audit et d'étude de projet</a>. La formation, elle, rend la personne capable de faire vivre ce document une fois le projet lancé, et de l'enrichir à chaque livraison.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui peut suivre la formation, à quel moment du projet, et que faut-il apporter ?",
            'intro' => "Le public se reconnaît à sa situation plus qu'à son titre : une personne de l'organisation cliente doit porter un site, une application, un portail ou un logiciel de gestion réalisé par un prestataire extérieur ou par une petite équipe interne, avec ou sans expérience de projet.",
            'items' => [
                ['titre' => "La personne désignée pour piloter le projet", 'texte' => "Chef de projet nommé pour l'occasion, responsable métier, chargé de programme dans une ONG, responsable commercial à qui l'on confie la boutique en ligne. C'est le premier public : elle suit les six demi-journées et repart avec ses documents."],
                ['titre' => "Le product owner d'un produit qui vit déjà", 'texte' => "Une application ou un espace client en ligne depuis un an ou deux, qui reçoit des demandes de partout et dont personne ne tient l'ordre. La formation sert alors à remettre de l'ordre dans le backlog et à installer la mesure après chaque évolution."],
                ['titre' => "Le commanditaire, pour une demi-journée", 'texte' => "Le directeur ou le dirigeant qui signera le mandat est invité à la fin du premier matin et à la restitution du troisième après-midi. Sans lui, le mandat reste un brouillon et les arbitrages se refont à chaque réunion."],
                ['titre' => "Le moment idéal", 'texte' => "Au début du projet, et si possible avant la signature avec le prestataire : la note de besoin et les premières stories nourrissent alors la consultation. Pendant le projet, la formation reste utile, mais une partie du temps sert à corriger ce qui a été lancé sans cadre."],
                ['titre' => "Niveau et prérequis", 'texte' => "Aucune compétence en développement n'est demandée. Le seul prérequis est un projet réel ou imminent sur lequel travailler pendant les trois jours, et l'accord de la direction pour y consacrer ce temps."],
                ['titre' => "Ce qu'il faut apporter", 'texte' => "Tout ce qui existe : note d'intention, cahier des charges, devis, maquettes, captures de l'outil actuel, tableurs utilisés aujourd'hui, liste des demandes reçues, réclamations des clients ou des usagers. À défaut, une page qui décrit le problème et les personnes concernées suffit."],
                ['titre' => "Le matériel", 'texte' => "Un ordinateur portable par participant, avec un tableur et un navigateur récent, et un téléphone pour tester les parcours mobiles. Des fiches cartonnées et un mur libre servent pour la carte des parcours, que l'on photographie ensuite."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Chef de projet digital, product owner, chef de projet du prestataire : qui fait quoi dans un projet confié à l'extérieur ?",
            'options'  => ['Chef de projet digital côté client', 'Product owner', 'Chef de projet du prestataire'],
            'criteres' => [
                ['critere' => "Pour qui il travaille", 'valeurs' => ["L'organisation cliente, qui l'a nommé et dont il défend le budget et le calendrier", "Le produit et ses utilisateurs ; il est souvent choisi chez le client, parfois chez le prestataire", "Le prestataire, qui doit livrer ce qui a été vendu sans perdre d'argent"]],
                ['critere' => "Ce qu'il décide", 'valeurs' => ["L'organisation interne du projet, les ressources du client, les alertes à la direction", "L'objectif du produit, le contenu et l'ordre du backlog, l'acceptation de ce qui est livré", "L'organisation de son équipe, la façon technique de réaliser, le planning de production"]],
                ['critere' => "Ce qu'il produit", 'valeurs' => ["Le mandat, le planning global, le rapport à la direction, le suivi du budget", "La note de besoin, les stories, les critères d'acceptation, le plan de mesure", "Les estimations, les livraisons, la documentation technique, les comptes rendus de production"]],
                ['critere' => "Ce qu'il ne doit pas faire", 'valeurs' => ["Rédiger les stories à la place des métiers sans les consulter", "Transformer chaque idée d'un collègue en priorité immédiate", "Décider à la place du client de ce qui compte pour ses utilisateurs"]],
                ['critere' => "Dans une PME", 'valeurs' => ["Souvent la même personne que le product owner", "Souvent la même personne que le chef de projet côté client", "Un interlocuteur distinct, même dans une petite agence"]],
            ],
            'verdict'  => "Dans une PME, une ONG ou une collectivité, une seule personne tient en général les deux premières colonnes : elle pilote le projet et porte le produit. La formation la prépare à ce double rôle, en lui apprenant à distinguer ce qui relève de la gestion du projet (temps, budget, risques) et ce qui relève du produit (valeur, ordre, acceptation). La troisième colonne reste chez le prestataire : la confondre avec les deux autres revient à lui confier les décisions qui appartiennent au client.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que disent le Scrum Guide et les référentiels publics de métiers sur ce rôle ?",
            'legende' => "Textes lus le 5 octobre 2026 : le Scrum Guide de novembre 2020 (versions anglaise et française publiées sur scrumguides.org) et les fiches du répertoire ROME de France Travail. Les volumes d'offres portent sur les douze mois précédant le deuxième trimestre 2026 et concernent la France.",
            'entetes' => ['Référence', 'Ce qu\'elle dit du rôle', 'Ce que la formation en retient'],
            'lignes'  => [
                ["Scrum Guide 2020, rôle de Product Owner", "Il est redevable de maximiser la valeur du produit et de la gestion du Product Backlog : formuler et communiquer l'objectif de produit, créer et communiquer les éléments du backlog, les ordonner, veiller à ce que le backlog soit transparent, visible et compris.", "Ces quatre tâches deviennent la colonne vertébrale des trois jours : objectif, stories, ordre, transparence."],
                ["Scrum Guide 2020, délégation et autorité", "Il peut déléguer ce travail mais en reste redevable ; toute l'organisation doit respecter ses décisions ; c'est une personne et non un comité ; qui veut modifier le backlog doit le convaincre.", "D'où le mandat écrit du premier matin : sans autorité reconnue par la direction, le rôle se vide."],
                ["Scrum Guide 2020, affinement", "L'affinement ajoute aux éléments une description, un ordre et une taille ; les développeurs qui feront le travail sont responsables du dimensionnement.", "Le client écrit et ordonne, le prestataire estime : on n'impose pas une durée à une story."],
                ["ROME M1864, Product Owner", "Priorise et gère le backlog produit, participe à la définition des critères d'acceptation des livrables et veille à leur respect, analyse les retours des utilisateurs ; 3 900 offres déposées auprès de France Travail en douze mois, difficulté de recrutement jugée élevée (France Travail et Dares, 2025).", "Le rôle est recherché et difficile à recruter en France : former quelqu'un qui connaît déjà le métier de l'entreprise est une option sérieuse."],
                ["ROME M1881, chef de projet maîtrise d'ouvrage des systèmes d'information", "Définit les besoins des utilisateurs, valide les livrables et s'assure de leur conformité aux exigences, gère les risques, rédige rapports et comptes rendus ; 3 760 offres en douze mois.", "La recette et le compte rendu à la direction font partie du métier, pas d'une tâche annexe."],
                ["ROME M1886, chef de projet Web", "Coordonne sites et applications mobiles, élabore les cahiers des charges, analyse les performances des sites et applications et propose des améliorations continues ; 2 970 offres en douze mois, difficulté de recrutement moyenne.", "La mesure après la mise en ligne clôt chaque cycle : un produit livré n'est pas un projet terminé."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels documents chaque participant produit-il sur son projet, et à quel moment ?",
            'items' => [
                ['titre' => "Le mandat d'une page", 'duree' => 'Jour 1, matin', 'texte' => "Objectif du projet, périmètre, budget connu, ce que la personne décide seule, ce qu'elle soumet, à qui, sous quel délai, et le temps réservé chaque semaine. Le commanditaire le relit pendant sa demi-heure de présence ; les points qu'il refuse sont réécrits avant le soir."],
                ['titre' => "La carte des parties prenantes", 'duree' => 'Jour 1, matin', 'texte' => "Chaque personne ou service concerné est placé selon son influence et son intérêt pour le projet, avec la façon de l'associer : décider, contribuer, tester, être informé. Les oublis apparaissent vite, souvent le service comptable ou le prestataire de maintenance."],
                ['titre' => "La note de besoin", 'duree' => 'Jour 1, après-midi', 'texte' => "Trois pages : le problème vu par les utilisateurs, les profils concernés, l'objectif mesurable, les contraintes (appareils, connexion, langues, données, délais légaux), ce qui est hors périmètre et les questions encore ouvertes. Elle se lit en dix minutes, ce qui la rend utilisable en réunion."],
                ['titre' => "La carte des parcours", 'duree' => 'Jour 2, matin', 'texte' => "Les étapes de l'utilisateur alignées sur une ligne, de la découverte au service rendu, puis sous chaque étape les fonctions nécessaires, de l'indispensable au confortable. Une ligne horizontale tracée sous l'indispensable dessine la première version utilisable."],
                ['titre' => "Les stories et leurs critères", 'duree' => 'Jour 2, matin', 'texte' => "Une quinzaine de stories écrites par le participant, relues en binôme puis par le formateur qui joue le développeur : chaque question qu'il doit poser signale un critère manquant. Les meilleures servent de modèle pour la suite du projet."],
                ['titre' => "Le backlog ordonné", 'duree' => 'Jour 2, après-midi', 'texte' => "Les stories et les demandes en attente sont classées avec une méthode choisie et annoncée, puis confrontées à des demandes contradictoires jouées par les autres participants. Le journal des arbitrages garde la trace de chaque choix."],
                ['titre' => "Le cahier de recette", 'duree' => 'Jour 3, matin', 'texte' => "Pour la première livraison attendue : un scénario par critère d'acceptation, les comptes de test, les appareils, les données fictives, le résultat attendu et une colonne pour le résultat obtenu. Il est remis au prestataire avant la livraison, pas après."],
                ['titre' => "Le rapport et le plan de mesure", 'duree' => 'Jour 3, après-midi', 'texte' => "Le modèle de rapport d'une page, rempli avec l'état réel du projet, et trois indicateurs avec leur valeur de départ, la source du chiffre, la personne qui le relève et la date du premier relevé après la mise en ligne."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "À quoi ressemble une user story que le prestataire peut chiffrer et que vous pouvez recetter ?",
            'legende' => "Exemples de réécriture travaillés le deuxième matin. La grille INVEST vient d'un article de Bill Wake publié le 17 août 2003 : une story doit être indépendante, négociable, utile, estimable, petite et testable. Les critères suivent la forme « étant donné, quand, alors » du langage Gherkin, que sa documentation officielle dit traduit dans plus de 70 langues, dont le français.",
            'entetes' => ['Demande telle qu\'elle arrive', 'Ce qui coince', 'Story réécrite', 'Un critère d\'acceptation'],
            'lignes'  => [
                ["« Il faut un module de paiement. »", "Aucun utilisateur, aucun bénéfice, aucun moyen de paiement précisé : impossible à chiffrer, impossible à refuser.", "En tant que parent d'élève, je veux régler la scolarité par Mobile Money depuis mon téléphone, afin de ne plus me déplacer à la caisse.", "Étant donné un parent connecté avec un solde suffisant, quand il valide le paiement, alors il reçoit un reçu numéroté par SMS et le solde dû de l'élève est mis à jour."],
                ["« Le tableau de bord doit être ergonomique. »", "Ergonomique n'est pas vérifiable : chacun le jugera selon son goût le jour de la recette.", "En tant que directrice commerciale, je veux voir le chiffre d'affaires de la semaine par agence sur une seule page, afin de repérer en réunion l'agence qui décroche.", "Étant donné cinq agences, quand la page s'ouvre sur un téléphone, alors les cinq chiffres sont lisibles sans faire défiler l'écran horizontalement."],
                ["« Gérer les clients. »", "Trop gros : il contient la création, la modification, la fusion des doublons, les droits, l'export. Il ne tient dans aucune livraison.", "En tant que commercial, je veux créer une fiche client depuis le terrain, afin d'enregistrer un prospect pendant la visite.", "Étant donné un numéro de téléphone déjà enregistré, quand le commercial le saisit, alors l'application lui propose la fiche existante au lieu d'en créer une seconde."],
                ["« Comme sur le site du concurrent. »", "La solution est imposée avant le problème, et le prestataire copie une interface dont personne ne connaît les raisons.", "En tant que client, je veux suivre l'état de ma commande sans appeler, afin de savoir quand passer la récupérer.", "Étant donné une commande prête, quand son statut change, alors le client reçoit un message avec l'adresse et les horaires du point de retrait."],
                ["« Le site doit être rapide. »", "Aucun seuil, aucun appareil, aucune connexion de référence.", "En tant que visiteur sur un réseau mobile lent, je veux consulter le catalogue sans attendre, afin de ne pas abandonner avant d'avoir vu les prix.", "Étant donné un téléphone d'entrée de gamme sur une connexion bridée en 3G, quand la page catalogue s'ouvre, alors les prix s'affichent en moins de cinq secondes."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "MoSCoW, valeur et effort ou coût du retard : quelle méthode de priorisation choisir pour votre backlog ?",
            'options'  => ['MoSCoW', 'Matrice valeur et effort', 'Coût du retard'],
            'criteres' => [
                ['critere' => "Principe", 'valeurs' => ["Chaque élément est classé en indispensable (Must), important (Should), souhaitable (Could) ou exclu cette fois (Won't)", "Chaque élément reçoit une note de valeur et une estimation d'effort, puis se place dans un quadrant", "On estime ce que coûte chaque semaine d'attente : ventes perdues, pénalités, heures gaspillées, échéance légale manquée"]],
                ['critere' => "Repère publié", 'valeurs' => ["L'Agile Business Consortium, qui porte la méthode DSDM, recommande que les indispensables ne dépassent pas 60 % de l'effort et que les souhaitables en représentent environ 20 %, pour garder une marge", "Aucun seuil officiel ; la matrice vaut par la discussion qu'elle provoque", "Aucun seuil officiel ; la méthode demande des chiffres que l'organisation n'a pas toujours"]],
                ['critere' => "Quand l'utiliser", 'valeurs' => ["Date de mise en ligne imposée : rentrée scolaire, salon, échéance fiscale", "Backlog d'un produit déjà en ligne, avec beaucoup de petites demandes", "Quelques gros chantiers en concurrence, dont l'un est lié à une obligation datée"]],
                ['critere' => "Piège", 'valeurs' => ["Tout devient indispensable quand chaque service défend sa demande", "L'effort est estimé par le client au lieu du prestataire", "Des montants inventés pour gagner l'arbitrage"]],
                ['critere' => "Ce qu'en garde le product owner", 'valeurs' => ["La liste des exclus, écrite et partagée, qui évite de rouvrir le débat", "Les gains rapides à forte valeur et faible effort, livrés tôt", "L'argument chiffré à présenter au commanditaire"]],
            ],
            'verdict'  => "La formation enseigne les trois, puis demande à chaque participant d'en choisir une seule pour son projet et de l'annoncer aux parties prenantes avant de classer. Pour un premier projet avec une date fixe, MoSCoW est la plus simple à défendre. Pour un produit déjà en ligne, la matrice valeur et effort suffit souvent. Le coût du retard se garde pour les arbitrages lourds présentés à la direction. Dans tous les cas, le backlog reste une seule liste, dans un seul ordre.",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment arbitrer entre la direction, les services et les utilisateurs sans devenir l'ennemi de tous ?",
            'intro' => "Le product owner dit non plus souvent qu'il ne dit oui. Le Scrum Guide 2020 le résume ainsi : ceux qui veulent modifier le backlog doivent convaincre le product owner. Encore faut-il que les règles du jeu soient connues avant le premier désaccord.",
            'items' => [
                ['titre' => "Annoncer les critères avant de classer", 'texte' => "Les critères de priorisation sont présentés aux parties prenantes au lancement, avec la méthode retenue. Un directeur accepte plus facilement de passer après un autre quand la règle était connue avant que sa demande arrive."],
                ['titre' => "Une seule porte d'entrée", 'texte' => "Toute demande passe par un formulaire ou un canal unique, avec trois champs obligatoires : qui en a besoin, pour faire quoi, et ce qui se passe si on ne la fait pas. Une demande arrivée par un couloir ou un message vocal est réécrite dans ce format avant d'être examinée."],
                ['titre' => "Trois réponses possibles", 'texte' => "Oui, avec la place dans l'ordre et la livraison visée ; plus tard, avec la condition qui la fera remonter ; non, avec la raison. Chaque réponse est écrite et envoyée au demandeur dans la semaine, ce qui évite les relances et les rancœurs."],
                ['titre' => "Échanger plutôt qu'ajouter", 'texte' => "Une demande urgente acceptée en cours de route fait sortir un élément de taille comparable, que le demandeur voit partir. Le coût de l'urgence devient visible, et les fausses urgences se raréfient."],
                ['titre' => "Le journal des arbitrages", 'texte' => "Date, demande, décision, raison, personne informée. Trois mois plus tard, quand quelqu'un demande pourquoi une fonction manque, la réponse existe, signée par le bon niveau de décision."],
                ['titre' => "Savoir escalader", 'texte' => "Quand deux directeurs de même rang s'opposent et que les critères ne tranchent pas, la décision revient au commanditaire, présentée sur une page avec les deux options et leurs conséquences. Le product owner prépare la décision ; il ne se substitue pas à la hiérarchie."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment qualifier une anomalie pendant la recette, et que décider pour chaque niveau ?",
            'legende' => "Grille utilisée pendant l'exercice de recette du troisième matin. Les niveaux s'écrivent dans le cahier de recette avant la livraison, et le prestataire les accepte par écrit ; sinon, chaque anomalie devient une négociation.",
            'entetes' => ['Niveau', 'Définition', 'Exemple', 'Conséquence sur la mise en ligne'],
            'lignes'  => [
                ['Bloquante', "Le parcours principal est impossible ou des données sont perdues ou exposées", "Le paiement est débité mais la commande n'est pas enregistrée", "Mise en ligne refusée tant que l'anomalie n'est pas corrigée et vérifiée de nouveau"],
                ['Majeure', "Le parcours aboutit, mais avec un contournement pénible ou un résultat faux dans certains cas", "La remise ne s'applique pas aux clients qui commandent depuis l'application", "Mise en ligne possible seulement si un contournement est documenté et une date de correction fixée"],
                ['Mineure', "Gêne réelle mais limitée, sans erreur de donnée", "Le tri par date ne fonctionne pas dans l'historique des factures", "Mise en ligne acceptée ; correction planifiée dans une livraison suivante"],
                ['Cosmétique', "Défaut d'affichage ou de texte sans effet sur l'usage", "Une faute d'orthographe dans un bouton, un logo décalé", "Mise en ligne acceptée ; correction groupée"],
                ['Demande nouvelle', "Le logiciel fait ce que dit la story, mais l'utilisateur voudrait autre chose", "« Il faudrait aussi pouvoir payer en trois fois »", "Ce n'est pas une anomalie : elle entre dans le backlog et passe par la priorisation"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment suivre un prestataire de près sans faire son travail à sa place ?",
            'intro' => "Le prestataire maîtrise la technique ; le client maîtrise son métier et son argent. Le suivi consiste à garder ces deux savoirs en contact chaque semaine, sans que le client se mette à diriger les développeurs ni que le prestataire devine les priorités.",
            'items' => [
                ['titre' => "Le point hebdomadaire de trente minutes", 'texte' => "Toujours le même jour, avec le même ordre du jour : ce qui a été terminé, ce qui bloque et qui doit agir, les questions sur les stories à venir, les risques nouveaux. Le product owner arrive avec ses réponses préparées, pas avec des questions à découvrir en séance."],
                ['titre' => "Un compte rendu dans les vingt-quatre heures", 'texte' => "Une demi-page envoyée par le client ou par le prestataire, à tour de rôle, avec les décisions prises et les actions nommées. Ce qui n'est pas écrit n'a pas été décidé ; ce qui est écrit et contesté se corrige tout de suite."],
                ['titre' => "Répondre vite aux questions", 'texte' => "Une question restée sans réponse trois jours fait perdre plus de temps au projet qu'un développeur malade. Le product owner fixe son propre délai de réponse, le tient et prévient quand il s'absente, avec un suppléant nommé dans le mandat."],
                ['titre' => "Détenir ce qui appartient au client", 'texte' => "Nom de domaine, comptes d'hébergement, magasins d'applications, dépôt du code, accès d'administration : la liste est tenue par le product owner et vérifiée à chaque livraison. Un prestataire sérieux n'y voit aucun inconvénient ; une réticence est un signal à remonter."],
                ['titre' => "Ne pas dicter la technique", 'texte' => "Le client dit ce dont l'utilisateur a besoin et comment il vérifiera le résultat ; il ne choisit ni le langage, ni la base de données, ni la façon d'écrire le code. Le Scrum Guide 2020 laisse d'ailleurs le dimensionnement aux développeurs qui feront le travail."],
                ['titre' => "Reconnaître les signaux faibles", 'texte' => "Des démonstrations toujours faites sur le poste du développeur, des estimations qui doublent sans explication, un interlocuteur qui change chaque mois, des questions qui ne viennent jamais : chacun justifie une conversation franche avant qu'il ne devienne un retard."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que mettre dans le rapport mensuel au commanditaire, et comment annoncer une mauvaise nouvelle ?",
            'legende' => "Le modèle d'une page rempli pendant le troisième après-midi. Il se lit en trois minutes et se termine toujours par ce que le commanditaire doit décider ; un rapport sans décision attendue est un rapport qu'on cesse de lire.",
            'entetes' => ['Rubrique', 'Ce qu\'on y écrit', 'Ce qu\'on évite', 'Exemple'],
            'lignes'  => [
                ['État général', "Une couleur et une phrase qui la justifie", "Le vert de complaisance qui devient rouge sans passer par l'orange", "Orange : la première livraison est acceptée, la deuxième glisse de deux semaines"],
                ['Ce qui a été accepté', "Les stories passées en recette, en nombre et en valeur pour les utilisateurs", "Les pourcentages d'avancement déclarés par le prestataire", "Huit stories acceptées sur les douze prévues ; le paiement mobile fonctionne en test"],
                ['Budget et délai', "Consommé, restant, écart avec la prévision et sa cause", "Un écart annoncé sans cause ni option", "Cinq jours de développement supplémentaires dus à l'intégration avec la banque"],
                ['Risques', "Deux ou trois risques, leur probabilité et la parade prévue", "La liste exhaustive de tout ce qui pourrait arriver", "Le référent comptable part en congé pendant la recette : suppléant à désigner"],
                ['Décisions attendues', "Une à trois questions fermées, avec les options et leurs conséquences", "« Que faisons-nous ? » sans proposition", "Reporter l'export comptable au lot suivant, ou décaler la mise en ligne de trois semaines ?"],
                ['Après la mise en ligne', "Les indicateurs du plan de mesure et leur évolution", "Les seuls chiffres de fréquentation", "Part des commandes passées en ligne : 12 % le premier mois, contre 0 % avant"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que mesurer après la mise en ligne, et à quel moment ?",
            'intro' => "La mise en ligne n'est pas la fin du travail du product owner, c'est le début de la preuve. Le plan de mesure écrit pendant la formation fixe trois indicateurs, leur valeur de départ relevée avant la mise en ligne et un calendrier de relevés.",
            'items' => [
                ['titre' => "La première semaine : l'usage", 'texte' => "Les utilisateurs arrivent-ils au bout des parcours principaux ? Combien de comptes créés, de commandes passées, de demandes déposées, et où abandonnent-ils ? Un outil gratuit de cartes de clics et d'enregistrement de sessions montre souvent l'écran qui bloque, à condition d'avoir réglé le consentement."],
                ['titre' => "Le premier mois : l'adoption", 'texte' => "Quelle part du travail passe par le nouvel outil plutôt que par l'ancien tableur, le téléphone ou le papier ? Une adoption faible n'est pas toujours un défaut du logiciel : elle peut venir d'une habitude, d'un droit d'accès manquant ou d'une étape inutile."],
                ['titre' => "Le troisième mois : le résultat", 'texte' => "L'objectif du produit écrit le premier jour est-il atteint : délai de traitement réduit, appels évités, ventes en ligne, erreurs de saisie en baisse ? Seule la comparaison avec la valeur de départ permet de répondre."],
                ['titre' => "Les retours des utilisateurs", 'texte' => "Un formulaire court dans l'outil, quelques entretiens, les messages reçus par le service client : chaque retour est trié en correctif, amélioration ou idée à écarter, puis passe par le même backlog que le reste."],
                ['titre' => "Ce que dit l'outil en votre nom", 'texte' => "Textes, prix, règles affichées, réponses automatiques : tout engage l'organisation. L'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a>, condamnée le 14 février 2024 par le Civil Resolution Tribunal de Colombie-Britannique à verser 812,02 dollars canadiens à un passager après une règle inventée par son assistant, rappelle que la relecture des contenus fait partie de la recette et du suivi après la mise en ligne."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment se déroulent les trois jours : groupe, méthode, supports et suivi ?",
            'intro' => "Le formateur parle peu et fait beaucoup écrire. Chaque notion est présentée en quinze minutes au plus, puis appliquée immédiatement au projet du participant, relue par un pair et corrigée.",
            'items' => [
                ['titre' => "Des groupes de quatre à dix personnes", 'texte' => "Au-delà, les relectures croisées deviennent superficielles. En intra, deux personnes du même projet travaillent en binôme ; en inter-entreprises, chacun garde son projet et relit celui d'un autre secteur, ce qui fait apparaître les implicites."],
                ['titre' => "Votre projet, pas un cas d'école", 'texte' => "Les documents produits sont ceux de votre projet. Un projet fictif n'est utilisé que pour la recette du troisième matin, parce qu'il faut une application qui contient des défauts connus du formateur."],
                ['titre' => "Des jeux de rôle tirés de situations courantes", 'texte' => "Le directeur qui exige sa fonction pour lundi, le prestataire qui présente une démonstration sur son propre poste, le commanditaire qui découvre un dépassement : chaque participant tient tour à tour le rôle du product owner et celui de son interlocuteur."],
                ['titre' => "Les supports remis", 'texte' => "Modèles de mandat, de note de besoin, de story, de cahier de recette, de fiche d'anomalie, de rapport mensuel et de plan de mesure, en fichiers modifiables pour un tableur ou un traitement de texte, plus les supports des trois jours et une attestation nominative."],
                ['titre' => "Une évaluation sur les pièces produites", 'texte' => "Les huit documents du participant sont relus au regard des objectifs fixés au cadrage. Les points faibles font l'objet de commentaires écrits, remis avec les documents mis au propre."],
                ['titre' => "Le suivi", 'texte' => "Un mois de questions par courriel ou WhatsApp, dans les conditions du devis, puis le bilan après la mise en ligne si l'option est retenue. Le formateur ne devient pas le product owner : il relit, il ne décide pas."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils sont utilisés pendant la formation, et combien coûtent-ils ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. Aucun abonnement n'est inclus dans le devis de formation ni imposé : la formation part de l'outil déjà utilisé par l'organisation ou par son prestataire, et un tableur suffit pour tout le programme.",
            'entetes' => ['Outil', 'Usage pendant la formation', 'Coût public'],
            'lignes'  => [
                ["Tableur (Excel, Google Sheets, LibreOffice Calc)", "Backlog, journal des arbitrages, cahier de recette, plan de mesure ; tous les modèles remis fonctionnent dans un tableur", "Souvent déjà présent ; Google Sheets s'utilise avec un compte Google gratuit, LibreOffice est gratuit"],
                ["Trello, d'Atlassian", "Backlog visuel en colonnes pour les petits projets, partagé avec le prestataire", "Gratuit jusqu'à 10 collaborateurs par espace de travail ; Standard à 5 dollars par utilisateur et par mois en paiement annuel (6 dollars au mois) ; Premium à 10 dollars (12,50 dollars au mois)"],
                ["Notion", "Note de besoin, stories et base des demandes reliées entre elles", "Gratuit ; Plus à 9,50 euros par membre et par mois en paiement annuel (11,50 euros au mois) ; Business à 19,50 euros (23,50 euros au mois)"],
                ["Miro", "Carte des parcours et carte des parties prenantes à distance", "Gratuit jusqu'à 3 tableaux ; Starter à 8 euros par membre et par mois, Business à 20 euros, en paiement annuel"],
                ["Figma", "Lecture et commentaire des maquettes du prestataire", "Forfait de base gratuit ; sur un forfait payant, d'autres personnes peuvent voir et commenter les fichiers sans licence supplémentaire"],
                ["Microsoft Clarity", "Cartes de clics et enregistrements de sessions après la mise en ligne", "Gratuit, annoncé « gratuit à jamais » par Microsoft ; à installer avec un recueil du consentement conforme"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble le travail du product owner selon le secteur et le pays ?",
            'items' => [
                ['secteur' => "Microfinance, à Abidjan", 'probleme' => "Situation type : l'espace client en ligne doit permettre de consulter son prêt et de rembourser, mais chaque direction (crédit, recouvrement, conformité) envoie ses exigences directement au prestataire.", 'solution' => "La responsable désignée obtient un mandat écrit, ouvre une porte d'entrée unique pour les demandes, classe le backlog en MoSCoW autour de la date de lancement et fait valider par la conformité les critères d'acceptation touchant aux données des clients."],
                ['secteur' => "Coopérative agricole, dans le nord du Bénin", 'probleme' => "Situation type : une application de collecte des livraisons de récoltes doit fonctionner dans des villages où le réseau disparaît plusieurs heures par jour.", 'solution' => "Le chef de projet écrit d'abord les stories des agents de collecte, avec des critères d'acceptation en mode hors connexion puis synchronisation, et organise la recette sur le terrain avec les téléphones réellement utilisés plutôt qu'au bureau sur le wifi."],
                ['secteur' => "Clinique privée, à Douala", 'probleme' => "Situation type : la prise de rendez-vous en ligne est livrée, mais les secrétaires continuent de noter les rendez-vous dans un cahier et les patients appellent toujours.", 'solution' => "Le plan de mesure révèle une adoption faible ; les retours montrent que les médecins ne bloquent pas leurs absences dans l'outil. La story manquante est écrite, priorisée en tête, et l'indicateur suivi chaque semaine pendant deux mois."],
                ['secteur' => "Commerce en ligne, à Dakar", 'probleme' => "Situation type : la boutique en ligne reçoit chaque semaine des idées de la direction, du marketing et du service client, et le prestataire facture au temps passé.", 'solution' => "Le product owner passe à la matrice valeur et effort, fait estimer chaque élément par le prestataire, livre d'abord les correctifs qui réduisent les appels au service client et présente chaque mois au gérant le coût de ce qui a été produit."],
                ['secteur' => "PME de distribution, en France", 'probleme' => "Situation type : la refonte du site marchand est lancée, et personne n'a vérifié ce que l'acte européen sur l'accessibilité impose depuis juin 2025 aux sites de commerce électronique.", 'solution' => "La cheffe de projet ajoute l'accessibilité à la note de besoin, fait vérifier par le commanditaire si l'entreprise dépasse le seuil des microentreprises, et intègre des critères d'accessibilité dans le cahier de recette dès la première livraison."],
                ['secteur' => "Association, en Belgique", 'probleme' => "Situation type : une plateforme d'inscription des bénévoles est confiée à une petite agence, et le bureau de l'association change d'avis à chaque réunion mensuelle.", 'solution' => "Le product owner bénévole fait signer un mandat par le bureau, tient le journal des arbitrages et présente un rapport d'une page à chaque réunion, avec une seule décision attendue à la fois."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans vos locaux, entre plusieurs organisations, à distance ou en formule mixte : quel format retenir ?",
            'legende' => "Le contenu et les documents produits sont les mêmes dans tous les formats ; seuls le rythme et la confidentialité changent. Le choix se fait au premier échange.",
            'entetes' => ['Format', 'Organisation', 'Pour qui', 'Ce qu\'il faut prévoir'],
            'lignes'  => [
                ['Intra, sur place', "Trois journées, consécutives ou réparties sur deux à trois semaines", "Une organisation qui lance un ou plusieurs projets et veut former ses chefs de projet ensemble", "La présence du commanditaire le premier matin et le dernier après-midi"],
                ['Inter-entreprises', "Trois journées réunissant des participants de plusieurs structures", "Une personne seule dans son organisation à tenir ce rôle, réseau d'entreprises, fédération, incubateur", "Aucun contrat ni nom de prestataire n'est montré aux autres ; les exemples restent anonymisés"],
                ['À distance', "Neuf séances de deux heures sur trois à quatre semaines, en visioconférence", "Participants répartis entre plusieurs villes ou pays, en Afrique, en Europe ou au Canada", "Un tableau en ligne léger pour la carte des parcours, et des documents envoyés la veille de chaque séance"],
                ['Hybride', "Le premier jour sur place, les deux suivants en séances à distance calées sur le calendrier du projet", "Une organisation qui veut lancer le travail en salle puis avancer au rythme des premières livraisons", "Fixer toutes les dates à distance avant la fin de la journée sur place"],
                ['Bilan après la mise en ligne', "Une demi-journée de trois heures, sur place ou à distance, un à trois mois après la mise en ligne", "Les participants qui ont suivi la formation, avec leur commanditaire", "Les premiers relevés du plan de mesure et les retours des utilisateurs"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun montant n'est publié : chaque formule est chiffrée sur devis, ligne par ligne. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier inscrit au devis.",
            'items'      => [
                ['offre' => "Formation chef de projet et product owner", 'prix' => 'Sur devis', 'inclus' => ["Cadrage avec le commanditaire", "Six demi-journées sur le projet réel des participants", "Huit modèles de documents en fichiers modifiables", "Relecture écrite des documents produits", "Un mois de questions par courriel ou WhatsApp"]],
                ['offre' => "Formation et bilan après la mise en ligne", 'prix' => 'Sur devis', 'inclus' => ["Tout le contenu de la formation", "Une demi-journée de bilan un à trois mois après la mise en ligne", "Nouvel ordre du backlog et rapport au commanditaire"]],
                ['offre' => "Session inter-entreprises", 'prix' => 'Sur devis', 'inclus' => ["Trois journées entre participants de plusieurs structures", "Travail de chacun sur son propre projet", "Mêmes modèles qu'en intra"]],
            ],
            'variations' => [
                "Le format, le nombre de séances et l'option de bilan après la mise en ligne.",
                "Le nombre de participants et de projets différents à suivre dans le même groupe.",
                "La préparation : lecture du cahier des charges, des devis et des maquettes transmis avant la session.",
                "Le lieu : Cotonou, une autre ville du Bénin, un autre pays, ou à distance ; les déplacements demandés sont chiffrés à part.",
                "La langue des supports, français ou anglais.",
                "Les pièces exigées par un financeur : programme détaillé, feuilles de présence, attestations particulières.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation professionnelle peut-il financer la formation ?",
            'paragraphes' => [
                "Cela dépend du pays, du statut de la personne formée et des règles du fonds, et rien n'est promis ici. En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consacrée au plan de formation, consultée le 5 octobre 2026, ouvre le dépôt d'un plan à toute entreprise qui justifie du paiement régulier des deux taxes, avec des actions intra-entreprise, inter-entreprises, internes ou à l'étranger ; la liquidation n'intervient qu'après le contrôle des services du Fonds et l'approbation de sa Commission permanente.",
                "Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> réserve l'un de ses guichets au financement du personnel des entreprises et des membres des organisations professionnelles, et reçoit les demandes sur sa plateforme en ligne. Au Bénin, les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage (FODEFCA) ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> ; les conditions d'une prise en charge se demandent au Fonds, dossier en main.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> indique que depuis le 1er janvier 2022, les prestataires qui veulent accéder aux fonds publics ou mutualisés, dont ceux des opérateurs de compétences, doivent être certifiés Qualiopi. Richard SALANON ne revendique ni cette certification ni aucun agrément de fonds : une organisation française finance donc cette formation sur son propre budget. Ailleurs, interrogez le fonds par écrit avant de signer, avec le programme et le devis ; ils sont fournis dès le cadrage.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les nouveaux product owners dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "La formation donne les outils ; le quotidien du projet teste la discipline. Ces erreurs reviennent chez la plupart des chefs de projet débutants, et chacune a sa parade simple, à décider avant de quitter la salle.",
            'items' => [
                ['titre' => "Écrire les stories seul dans son bureau", 'texte' => "Le product owner rédige vite et bien, mais sans les utilisateurs, et la recette révèle des besoins que personne n'avait formulés. La parade : faire relire chaque lot de stories par deux utilisateurs avant de les transmettre au prestataire."],
                ['titre' => "Laisser le backlog grossir sans fin", 'texte' => "Trois cents éléments dont personne ne lit le bas de la liste. Tout ce qui n'a pas bougé depuis six mois est archivé avec un message au demandeur ; s'il compte vraiment, il reviendra."],
                ['titre' => "Céder au plus haut placé", 'texte' => "La demande du directeur général passe devant tout, sans critère. La parade est dans le mandat : le directeur peut imposer une priorité, mais il le fait par écrit, et le journal des arbitrages note ce qui recule."],
                ['titre' => "Recetter le jour de la mise en ligne", 'texte' => "Le cahier de recette existe, mais les testeurs ne sont pas disponibles et l'on teste en production. Les dates de recette se réservent dans l'agenda des utilisateurs au moment où le prestataire annonce sa livraison."],
                ['titre' => "Devenir le secrétaire du prestataire", 'texte' => "Le product owner transmet les messages, organise les réunions, relance tout le monde, et n'a plus le temps d'écrire ni de prioriser. Il garde ses deux heures hebdomadaires réservées au backlog, même les semaines chargées."],
                ['titre' => "Oublier la mesure une fois l'outil en ligne", 'texte' => "La fête de lancement passée, personne ne relève les indicateurs. Le premier relevé est daté dans le plan de mesure et inscrit dans le rapport mensuel ; sans lui, le prochain budget se défendra sans preuve."],
                ['titre' => "Mettre en production sans liste de contrôle", 'texte' => "Une mise en ligne faite de mémoire, un soir, sans retour arrière prévu. L'histoire de <a href=\"/histoires/knight-capital\">Knight Capital</a>, dont le routeur d'ordres s'est emballé pendant les 45 premières minutes de la séance du 1er août 2012 après un déploiement incomplet, pour une perte de plus de 460 millions de dollars selon le communiqué de la SEC du 16 octobre 2013, rappelle qu'une procédure écrite et vérifiée vaut pour toutes les tailles d'entreprise."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un product owner sans temps ni autorité est-il pire que pas de product owner du tout ?",
            'texte' => "Parce qu'il donne l'illusion que le rôle est tenu. Le prestataire attend ses réponses, les services lui envoient leurs demandes, la direction le croit responsable, mais il n'a ni les heures pour écrire et recetter, ni le droit de dire non. Les décisions se prennent alors ailleurs, dans les couloirs ou chez le prestataire, et personne n'en répond. Avant d'inscrire quelqu'un à cette formation, vérifiez deux choses : le temps qu'il pourra réellement consacrer au projet chaque semaine, et l'engagement du commanditaire à respecter ses arbitrages. Le mandat écrit du premier matin sert précisément à rendre ces deux points visibles.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Que disent les chiffres publics sur ce métier et sur le contexte des projets ?",
            'items' => [
                ['valeur' => '3 900', 'libelle' => "Offres d'emploi de product owner déposées auprès de France Travail en douze mois, pour une difficulté de recrutement jugée élevée (chiffres du deuxième trimestre 2026)", 'source' => 'France Travail, fiche ROME M1864 Product Owner', 'url' => 'https://candidat.francetravail.fr/metierscope/fiche-metier/M1864/product-owner'],
                ['valeur' => '3 760', 'libelle' => "Offres d'emploi de chef de projet maîtrise d'ouvrage des systèmes d'information sur la même période, métier dont France Travail cite la validation des livrables", 'source' => 'France Travail, fiche ROME M1881', 'url' => 'https://candidat.francetravail.fr/metierscope/fiche-metier/M1881/chef-cheffe-de-projet-maitrise-ouvrage-des-systemes-information-moa'],
                ['valeur' => '60 %', 'libelle' => "Part maximale de l'effort que l'Agile Business Consortium conseille de réserver aux éléments indispensables dans la méthode MoSCoW, page consultée le 5 octobre 2026", 'source' => 'Agile Business Consortium, MoSCoW prioritisation', 'url' => 'https://www.agilebusiness.org/dsdm-project-framework/moscow-prioritisation.html'],
                ['valeur' => '36 %', 'libelle' => "De la population africaine utilisait Internet en 2025, contre 74 % de la population mondiale, selon les chiffres publiés le 15 octobre 2025", 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Réseau, langues, données personnelles, accessibilité : que change le contexte local pour le product owner ?",
            'paragraphes' => [
                "Le réseau dicte une partie des critères d'acceptation. L'Union internationale des télécommunications indiquait le 15 octobre 2025 que 36 % de la population africaine utilisait Internet, contre 74 % dans le monde, et seulement 23 % dans les pays à faible revenu. Pour un product owner d'Afrique francophone, cela se traduit en stories précises : fonctionner hors connexion puis synchroniser, alléger les pages, prévoir l'envoi d'un SMS quand la notification ne passe pas, recetter sur les téléphones et les forfaits réels des utilisateurs.",
                "La langue compte aussi. Les stories s'écrivent dans la langue des utilisateurs et des métiers, pas dans celle du prestataire ; quand l'équipe de développement travaille en anglais, le product owner garde la version française comme référence et fait vérifier la traduction des critères. Le langage Gherkin, utilisé pour les critères d'acceptation, se rédige en français. Les libellés de l'interface, eux, se recettent avec les mots que les clients emploient au guichet, parfois dans une langue nationale.",
                "Les données personnelles entrent dans le backlog dès la note de besoin. Au Bénin, elles relèvent de la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>. En Europe, l'<a href=\"https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4\">article 25 du RGPD</a>, publié par la CNIL, impose la protection des données dès la conception et par défaut : seules les données nécessaires à chaque finalité doivent être traitées. Concrètement, chaque champ de formulaire se justifie dans une story, et la durée de conservation devient un critère d'acceptation.",
                "L'accessibilité s'ajoute pour les produits vendus en Europe. La <a href=\"https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32019L0882\">directive (UE) 2019/882</a>, dite acte européen sur l'accessibilité, s'applique aux services fournis aux consommateurs après le 28 juin 2025, parmi lesquels le commerce électronique et les services bancaires ; elle exclut les microentreprises qui fournissent des services, définies comme employant moins de dix personnes avec un chiffre d'affaires ou un total de bilan annuel d'au plus 2 millions d'euros. Le product owner vérifie le cas de son organisation avec la direction, puis l'inscrit dans les critères de recette.",
                "Le paiement, enfin, a ses propres cas d'erreur. Mobile Money, carte bancaire et virement n'échouent pas de la même façon : solde insuffisant, délai de confirmation, double débit, réseau coupé au milieu de la transaction. Chacun mérite une story et un scénario de recette avec de petits montants réels, en plus des tests du prestataire. La formation se tient en français, et les modèles peuvent être remis en anglais pour un bailleur ou une maison mère anglophone.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre ce rôle avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il a passé l'essentiel de sa carrière de l'autre côté de la table : celui du prestataire qui reçoit les besoins, pose les questions, estime, livre et attend la recette. Il sait donc ce qu'une story floue coûte en allers-retours, ce qu'un client qui répond en deux jours fait gagner, et quels documents un développeur lit vraiment. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, où il tient lui-même le backlog d'un produit en ligne, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                'Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, indique avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé avec des organisations de ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique, d\'Europe et d\'Amérique du Nord. Il n\'est certifié par aucun éditeur ni par aucun organisme de certification agile, ne cite aucun client formé et ne promet aucun résultat chiffré.',
                "Sa règle en formation : le participant tient le crayon et prend les décisions, le formateur joue tour à tour le développeur pointilleux, le directeur pressé et le commanditaire inquiet. La formation n'oblige à rien pour la suite ; les documents produits sont faits pour être remis à n'importe quel prestataire. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, ses pays d'intervention sur celle des <a href=\"/zones/\">zones</a>. L'organisation commune des formations est décrite sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et le domaine entier sur celle des <a href=\"/formations/domaine/transformation-digitale\">formations en transformation digitale</a>, où figure la <a href=\"/formations/strategie-transformation-digitale\">formation stratégie de transformation digitale</a> destinée aux comités de direction.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de désigner votre chef de projet digital ?",
            'texte' => "Le rôle tient en quelques gestes répétés pendant tout le projet : un mandat écrit et respecté, un objectif mesurable, des stories que le prestataire peut chiffrer et que les utilisateurs peuvent vérifier, une seule liste ordonnée, des refus écrits et motivés, une recette préparée avant la livraison, un rapport d'une page qui se termine par une décision, et des indicateurs relevés après la mise en ligne. Donnez à la personne désignée le temps et l'autorité, puis la méthode.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous préparer la personne qui portera votre prochain projet numérique ?",
            'texte'  => "Décrivez le projet, son état d'avancement, le prestataire s'il est choisi et la personne à former : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis après un cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon chef de projet digital'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà avoir géré un projet pour suivre la formation ?", 'r' => "Non. Elle convient à une personne qui découvre le rôle comme à un chef de projet qui veut structurer sa pratique. Le seul prérequis est un projet réel ou imminent sur lequel travailler pendant les trois jours ; sans projet, les documents produits resteraient théoriques."],
        ['q' => "Quelle différence avec la formation à la gestion de projet IT agile ?", 'r' => "La formation agile s'adresse à l'organisation cliente dans son ensemble : travailler par itérations, choisir le contrat, conduire les revues de livraison. Celle-ci forme la personne qui tient le rôle de chef de projet et de product owner : besoin, stories, priorités, arbitrages, recette, compte rendu et mesure. Les deux se complètent quand un même projet les justifie."],
        ['q' => "Mon prestataire travaille sans méthode agile : la formation sert-elle quand même ?", 'r' => "Oui. Un besoin clairement écrit, une liste de priorités, des critères d'acceptation et une recette préparée servent quel que soit le mode de travail du prestataire, en cycle classique comme en itérations. Le vocabulaire du Scrum Guide sert à comprendre le prestataire qui l'emploie, sans l'imposer à celui qui ne l'emploie pas."],
        ['q' => "Vaut-il mieux recruter un product owner ou former quelqu'un en interne ?", 'r' => "En France, France Travail classe le métier de product owner parmi ceux dont le recrutement est difficile. Une personne interne connaît déjà les utilisateurs, les processus et les personnes à convaincre ; ce qui lui manque, c'est la méthode, que la formation apporte. Le recrutement se justifie surtout quand plusieurs produits doivent être portés en même temps."],
        ['q' => "Le product owner peut-il être le dirigeant lui-même ?", 'r' => "Dans une très petite structure, souvent. Le risque est le manque de temps : la recette et les réponses au prestataire passent après tout le reste. Si le dirigeant tient ce rôle, il réserve des créneaux fixes chaque semaine et désigne un suppléant pour les questions courantes."],
        ['q' => "Le prestataire peut-il assister à la formation ?", 'r' => "Il peut être invité à une partie de la session, par exemple pour relire ensemble le format des stories et du cahier de recette. Il n'assiste pas aux séances où le client prépare ses arbitrages, son rapport à la direction et ses questions sur les livraisons."],
        ['q' => "Les documents produits nous appartiennent-ils ?", 'r' => "Oui. Le mandat, la note de besoin, les stories, le backlog, le cahier de recette et le plan de mesure sont rédigés par vos équipes sur vos fichiers. Les modèles fournis sont remis en formats modifiables, sans licence ni abonnement."],
        ['q' => "Faut-il acheter un logiciel de gestion de projet ?", 'r' => "Non. Tous les exercices se font dans un tableur. Si votre prestataire utilise déjà un outil de suivi, la formation s'appuie dessus ; sinon, des outils gratuits ou peu coûteux sont présentés avec leurs prix publics, sans qu'aucun ne soit imposé."],
        ['q' => "La formation peut-elle se dérouler entièrement à distance ?", 'r' => "Oui, en neuf séances de deux heures réparties sur trois à quatre semaines. La carte des parcours se fait sur un tableau en ligne léger, et les documents de travail sont envoyés la veille de chaque séance pour limiter l'effet d'une connexion instable."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis ; le premier échange, le cadrage et le devis sont gratuits. Il dépend du format, du nombre de participants et de projets, de la préparation, du lieu, de la langue des supports et de l'option de bilan après la mise en ligne. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Délivre-t-elle une certification de product owner ?", 'r' => "Non. Elle délivre une attestation nominative de suivi, accompagnée des documents produits et de leur relecture écrite. Elle ne prépare à aucune certification d'organisme agile et ne remplace pas un diplôme ; elle vise la pratique du rôle sur votre projet."],
    ],

    'sources' => [
        ['titre' => "Ken Schwaber et Jeff Sutherland, The Scrum Guide (novembre 2020), version anglaise", 'url' => 'https://scrumguides.org/scrum-guide.html', 'date' => '2026-10-05'],
        ['titre' => "Ken Schwaber et Jeff Sutherland, Le Guide Scrum (novembre 2020), version française", 'url' => 'https://scrumguides.org/docs/scrumguide/v2020/2020-Scrum-Guide-French.pdf', 'date' => '2026-10-05'],
        ['titre' => "France Travail, MétierScope : fiche ROME M1864 Product Owner", 'url' => 'https://candidat.francetravail.fr/metierscope/fiche-metier/M1864/product-owner', 'date' => '2026-10-05'],
        ['titre' => "France Travail, MétierScope : fiche ROME M1881 chef de projet maîtrise d'ouvrage des systèmes d'information", 'url' => 'https://candidat.francetravail.fr/metierscope/fiche-metier/M1881/chef-cheffe-de-projet-maitrise-ouvrage-des-systemes-information-moa', 'date' => '2026-10-05'],
        ['titre' => "France Travail, MétierScope : fiche ROME M1886 chef de projet Web", 'url' => 'https://candidat.francetravail.fr/metierscope/fiche-metier/M1886/chef-cheffe-de-projet-web', 'date' => '2026-10-05'],
        ['titre' => "Bill Wake, INVEST in Good Stories, and SMART Tasks (17 août 2003)", 'url' => 'https://xp123.com/invest-in-good-stories-and-smart-tasks/', 'date' => '2026-10-05'],
        ['titre' => "Agile Business Consortium, MoSCoW prioritisation (méthode DSDM)", 'url' => 'https://www.agilebusiness.org/dsdm-project-framework/moscow-prioritisation.html', 'date' => '2026-10-05'],
        ['titre' => "Cucumber, Gherkin reference", 'url' => 'https://cucumber.io/docs/gherkin/reference/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre IV (article 25)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, directive (UE) 2019/882 du 17 avril 2019 relative aux exigences en matière d'accessibilité applicables aux produits et services", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32019L0882', 'date' => '2026-10-05'],
        ['titre' => "Union internationale des télécommunications, Facts and Figures 2025 : usage d'Internet (15 octobre 2025)", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => "Securities and Exchange Commission, communiqué 2013-222 du 16 octobre 2013 sur Knight Capital", 'url' => 'https://www.sec.gov/news/press-release/2013-222', 'date' => '2026-10-05'],
        ['titre' => "Civil Resolution Tribunal de Colombie-Britannique, Moffatt c. Air Canada, 2024 BCCRT 149 (14 février 2024)", 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do', 'date' => '2026-10-05'],
        ['titre' => "Atlassian, tarifs de Trello", 'url' => 'https://trello.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Notion, tarifs (prix affichés en euros)", 'url' => 'https://www.notion.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Miro, tarifs", 'url' => 'https://miro.com/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Figma, forfaits et tarifs", 'url' => 'https://www.figma.com/fr-fr/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Clarity, présentation du service", 'url' => 'https://clarity.microsoft.com/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['gestion-projet-agile', 'conduite-du-changement', 'digitalisation-processus', 'data-literacy', 'strategie-transformation-digitale', 'analytics-ga4'],
        'services'    => ['audit-etude-de-projet', 'application-web-sur-mesure', 'digitalisation-d-entreprise'],
        'comparatifs' => [],
    ],
];
