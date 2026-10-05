<?php
// ============================================================
// data/formations/conduite-du-changement.php · Fiche formation « Conduite
// du changement numérique » (vague 1B, lot B, domaine transformation-
// digitale). Aucune ancienne page. Angle propre : faire adopter un nouvel
// outil numérique, quel qu'il soit (logiciel de gestion, messagerie,
// application métier, assistant d'IA) : diagnostic des résistances, sponsor
// et référents, communication, formation par rôle, accompagnement après le
// démarrage, mesure de l'usage, retour arrière.
// Sœurs non traitées : strategie-transformation-digitale (feuille de route),
// digitalisation-processus (cartographie d'un processus), chef-de-projet-
// digital (pilotage, backlog, recette), data-literacy (lecture des chiffres),
// adoption-erp (projet ERP : choix, reprise des données, bascule).
// Sources consultées le 05/10/2026 : Prosci (ADKAR), Kotter (8 étapes),
// Davis 1989 (MIS Quarterly, via Crossref), CNIL (contrôle de l'activité,
// 09/07/2026), code du travail L2312-8, Microsoft Learn (rapports
// d'utilisation), aide Google Workspace (rapports), GOV.UK Service Manual,
// SEC (ordonnance Knight Capital), UIT, SGG du Bénin (loi n° 2017-20),
// Commission européenne (article 4, fait vérifié du catalogue), tarifs
// Google Workspace et Trello, FDFP, 3FPT, FODEFCA, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation conduite du changement numérique : faire adopter un nouvel outil par vos équipes, du diagnostic des résistances à la mesure de l'usage après le démarrage",
    'title'   => "Formation conduite du changement numérique | Richard SALANON",
    'meta'    => "Formation à la conduite du changement numérique : faire adopter un outil par vos équipes, du diagnostic des résistances à la mesure de l'usage. Sur devis.",
    'en_bref' => "Cette formation apprend aux managers, aux futurs référents et à l'équipe chargée d'un déploiement à faire adopter un nouvel outil numérique : logiciel de gestion, messagerie d'entreprise, application métier ou assistant d'intelligence artificielle. On y diagnostique les résistances, on organise le sponsor et les relais, on écrit l'annonce, la formation par rôle, l'accompagnement des premières semaines, les indicateurs d'usage et le plan de retour arrière. Elle dure deux jours en quatre demi-journées, suivis d'un bilan un mois après la mise en service, dans vos locaux, à distance, en hybride ou en inter-entreprises. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'transformation-digitale',
    'forte'   => false,
    'duree'   => "2 jours en 4 demi-journées, puis un bilan d'une demi-journée un mois après la mise en service",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : mesurer ce que le nouvel outil change pour chaque personne",
            'duree'  => '3 h 30',
            'points' => [
                "Présentation du déploiement par le sponsor : l'outil retenu, la raison de ce choix, la date de mise en service et ce qui ne changera pas.",
                "Carte des publics touchés : pour chaque rôle, les tâches, les écrans, les contrôles et les habitudes qui disparaissent ou qui apparaissent.",
                "Exercice de la journée type : un participant raconte sa journée actuelle, le groupe la réécrit avec le nouvel outil et note chaque écart.",
                "Classement des écarts par intensité : simple changement d'écran, nouvelle manière de travailler, perte d'une compétence reconnue ou d'un pouvoir de décision.",
                "Repérage des périodes à éviter pour le démarrage : clôture, haute saison, inventaire, congés, campagne commerciale.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : diagnostiquer les résistances et constituer le réseau de relais",
            'duree'  => '3 h 30',
            'points' => [
                "Lecture des réponses au questionnaire anonyme envoyé aux futurs utilisateurs : inquiétudes, désaccords argumentés, surcharge, défauts réels de l'outil.",
                "Le modèle ADKAR comme grille de lecture : repérer l'étape où bloque chaque groupe d'utilisateurs, et ce qui le débloquera.",
                "Le rôle du sponsor : ce qu'il dit, ce qu'il montre en se servant lui-même de l'outil, ce qu'il tranche et ce qu'il refuse.",
                "Choisir les référents : crédibilité auprès des collègues, temps accordé noir sur blanc, mandat écrit, et ce qu'on ne leur demande jamais.",
                "Jeu de rôle en binôme : chaque manager prépare puis mène l'entretien avec le collaborateur le plus réticent de son équipe.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : écrire le plan de communication et le plan de formation par rôle",
            'duree'  => '3 h 30',
            'points' => [
                "Le message de lancement en cinq questions : pourquoi, quoi, quand, ce qui ne change pas, où trouver de l'aide.",
                "Le calendrier des messages, de l'annonce au premier mois, avec la personne qui porte chacun et le canal utilisé.",
                "La matrice des formations : pour chaque rôle, les gestes indispensables le premier jour, ceux qui peuvent attendre, et le format adapté.",
                "Les supports courts : fiche d'une page par geste, vidéo de deux minutes, environnement d'essai, foire aux questions interne tenue à jour.",
                "Les publics à prévoir à part : personnes éloignées du numérique, équipes de terrain sur téléphone, nouveaux arrivants.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : préparer le démarrage, la mesure de l'usage et le retour arrière",
            'duree'  => '3 h 30',
            'points' => [
                "Le dispositif des quatre premières semaines : présence des référents, canal de questions, registre des difficultés, point hebdomadaire avec le sponsor.",
                "Cinq indicateurs d'usage au plus, chacun avec sa valeur attendue à une semaine, à deux semaines et à un mois.",
                "Mesurer sans surveiller : données agrégées par équipe, information écrite des salariés, consultation des représentants du personnel quand la loi l'exige.",
                "Les critères de retour arrière, écrits avant le démarrage : seuils, personne qui décide, délai au-delà duquel on ne revient plus, sort des données saisies.",
                "Exercice de crise : au troisième jour, la moitié d'une équipe est revenue à l'ancien outil ; le groupe a trente minutes pour décider et annoncer.",
            ],
        ],
        [
            'titre'  => "Un mois après la mise en service, à distance : le bilan d'adoption",
            'duree'  => '3 h',
            'points' => [
                "Lecture des indicateurs d'usage face aux valeurs attendues, équipe par équipe.",
                "Revue des objections encore actives et des contournements, avec ce que chacun révèle sur l'outil ou sur l'organisation.",
                "Décision pour chaque écart : séance ciblée, réglage de l'outil, message du sponsor ou changement d'une règle de travail.",
                "Date de fermeture de l'ancien outil confirmée ou décalée, avec la raison écrite.",
                "Préparation des équipes suivantes quand le déploiement se fait par vagues.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, puis un bilan à un mois"],
        ['l' => 'Public', 'v' => "Managers, référents, RH et équipe chargée du déploiement"],
        ['l' => 'Formats', 'v' => "Intra, inter-entreprises, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'apprend-on à faire pour qu'un nouvel outil soit vraiment utilisé, et où s'arrête la formation ?",
            'paragraphes' => [
                "Le scénario est familier. Un outil est choisi, payé, paramétré, puis lancé un lundi. Trois semaines plus tard, une partie de l'équipe est revenue à ses groupes WhatsApp personnels, à son tableur ou à son cahier. L'outil fonctionne pourtant. Ce qui a manqué tient en trois phrases : les gens ont appris la date, pas la raison ; ils ont vu toutes les fonctions, pas les quatre gestes de leur poste ; et le jour où ils ont bloqué, personne n'était là pour répondre. Cette formation apprend à ceux qui portent le déploiement à préparer, accompagner et mesurer ce passage.",
                "À la fin des deux jours, le groupe a produit, sur son propre déploiement, six documents relus en séance : une carte d'impact par rôle, un diagnostic des résistances, le mandat du sponsor et des référents, un plan de communication daté, une matrice de formation par rôle, et un tableau d'usage accompagné de critères de retour arrière. L'objectif se vérifie par un jeu de rôle final : chaque manager explique en trois minutes à un collègue pourquoi l'outil arrive, ce qui change pour lui et à qui s'adresser en cas de difficulté. S'il n'y parvient pas, son plan est repris avant de partir.",
                "La méthode vaut pour tout outil qui modifie le travail quotidien : logiciel de gestion ou de facturation, messagerie d'entreprise, application de prise de commande ou de collecte sur téléphone, outil de signature électronique, assistant d'intelligence artificielle mis à disposition des équipes. Les exemples sont tirés de l'outil que vous déployez. Si vous changez de messagerie, on travaille sur la messagerie ; si vous ouvrez un assistant d'IA, sur ses usages autorisés et ses limites.",
                "Plusieurs sujets voisins sont laissés à d'autres formations du domaine. Choisir l'outil et l'inscrire dans une feuille de route relève de la formation <a href=\"/formations/strategie-transformation-digitale\">stratégie de transformation digitale</a>. Dessiner le circuit d'un dossier avant de l'outiller relève de la digitalisation des processus métiers ; piloter le projet avec le prestataire et faire la recette, de la formation chef de projet digital ; lire les tableaux de bord, de la formation décider avec les données. Le projet ERP proprement dit, avec la reprise des données et la bascule, a sa propre formation : Réussir l'adoption d'un ERP.",
                "Elle n'enseigne pas non plus l'outil lui-même. Les gestes de chaque poste s'apprennent dans les formations consacrées au logiciel concerné, par exemple <a href=\"/formations/odoo-utilisateurs\">Odoo pour vos équipes</a>, <a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a> ou <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour les assistants. La conduite du changement prépare le terrain pour que ces formations tombent au bon moment, devant des personnes qui savent pourquoi elles sont là.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui doit suivre la formation, avec quels prérequis, et combien de semaines avant la mise en service ?",
            'intro' => "Le groupe réunit ceux qui feront passer le changement dans les équipes. Une formation suivie par le seul chef de projet produit un plan que personne d'autre ne porte ; une formation suivie sans le sponsor produit un plan que personne n'arbitre.",
            'items' => [
                ['titre' => "Le sponsor", 'texte' => "Dirigeant, directeur métier ou associé qui a décidé du changement et qui en répond. Il ouvre la première demi-journée, revient pour la dernière et valide les documents. Son absence se voit : les participants ne savent pas jusqu'où ils peuvent s'engager."],
                ['titre' => "Les managers de proximité", 'texte' => "Chefs d'équipe, responsables d'agence ou de service. Ce sont eux que les collaborateurs écoutent et regardent. Ils repartent avec l'entretien de leur collaborateur le plus réticent préparé, et leur part du plan de communication."],
                ['titre' => "Les futurs référents", 'texte' => "Une personne par équipe ou par site, choisie pour sa crédibilité auprès des collègues plutôt que pour son aisance avec l'informatique. Ils seront le premier recours pendant les semaines de démarrage."],
                ['titre' => "Les ressources humaines", 'texte' => "Le responsable RH ou formation apporte le calendrier des congés, les fiches de poste, les règles d'information du personnel et, quand elles existent, les relations avec les représentants du personnel."],
                ['titre' => "Le chef de projet et le prestataire", 'texte' => "Le chef de projet suit les deux jours. Le prestataire ou l'éditeur peut être invité sur une partie de la deuxième journée, pour confirmer les dates, l'environnement d'essai et ce qui est réellement prêt."],
                ['titre' => "Prérequis", 'texte' => "Un outil choisi ou en cours de déploiement, et une date de mise en service, même provisoire. Une version d'essai ou, à défaut, des captures d'écran des principaux écrans rendent les exercices concrets. Aucune compétence technique n'est demandée."],
                ['titre' => "Matériel", 'texte' => "Une salle avec écran et tableau, un ordinateur par binôme avec un tableur, et l'accès aux comptes de démonstration de l'outil. À distance : caméra, micro et connexion stable par participant."],
                ['titre' => "Le bon moment", 'texte' => "Quatre à six semaines avant la mise en service. Plus tôt, les détails ne sont pas fixés et l'énergie retombe ; plus tard, il ne reste plus le temps de choisir les référents ni de les former avant leurs collègues."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices réalisez-vous sur votre propre déploiement ?",
            'items' => [
                ['titre' => "Le questionnaire anonyme d'avant-session", 'duree' => "Deux semaines avant", 'texte' => "Dix questions envoyées aux futurs utilisateurs par formulaire en ligne : ce qu'ils savent du projet, ce qui les inquiète, ce qu'ils attendent, le temps qu'ils pensent pouvoir y consacrer. L'anonymat compte : sans lui, les réponses reprennent le discours officiel et le diagnostic ne sert à rien."],
                ['titre' => "La journée type réécrite", 'duree' => "1 heure, jour 1 matin", 'texte' => "Un participant par rôle raconte sa journée réelle, heure par heure. Le groupe la réécrit avec le nouvel outil. Chaque différence devient une ligne de la carte d'impact, avec son intensité : changement d'écran, changement de méthode ou changement de place dans l'équipe."],
                ['titre' => "Le tri des objections", 'duree' => "1 heure, jour 1 après-midi", 'texte' => "Les réponses du questionnaire sont découpées et classées au mur en quatre familles : inquiétude, désaccord argumenté, surcharge, défaut réel de l'outil. Les objections de la quatrième famille partent le soir même vers le chef de projet."],
                ['titre' => "L'entretien difficile", 'duree' => "45 minutes, jour 1 après-midi", 'texte' => "En binôme, un manager joue l'entretien avec son collaborateur le plus réticent, l'autre joue ce collaborateur à partir de ce qu'il en sait. On échange les rôles, puis on note les phrases qui ont fait avancer la conversation et celles qui l'ont fermée."],
                ['titre' => "Le message de lancement lu à voix haute", 'duree' => "45 minutes, jour 2 matin", 'texte' => "Le sponsor lit son projet d'annonce au groupe, qui le minute et le critique avec cinq questions. Un message qui dépasse trois minutes, qui ne dit pas ce qui ne change pas, ou qui n'indique pas où trouver de l'aide est réécrit sur place."],
                ['titre' => "La matrice de formation", 'duree' => "1 h 15, jour 2 matin", 'texte' => "Un tableau croise les rôles et les gestes de l'outil. Pour chaque case : indispensable le premier jour, utile plus tard ou inutile pour ce rôle. Les formations prévues avec l'éditeur ou le prestataire sont ensuite découpées selon cette matrice."],
                ['titre' => "L'exercice de crise", 'duree' => "30 minutes, jour 2 après-midi", 'texte' => "Un scénario arrive par message : au troisième jour, une équipe a repris l'ancien outil. Le groupe doit décider qui appeler, quoi vérifier, quoi dire à l'équipe, et s'il faut déclencher le retour arrière. La décision est relue avec les critères écrits juste avant."],
                ['titre' => "Le tableau d'usage", 'duree' => "1 heure, jour 2 après-midi", 'texte' => "Cinq indicateurs au plus, avec leur mode de relevé, la personne responsable et la valeur attendue à une semaine, deux semaines et un mois. Le même tableau sert de support au bilan d'adoption."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles résistances rencontre-t-on, et que cachent-elles le plus souvent ?",
            'legende' => "Les objections les plus fréquentes lors d'un changement d'outil, avec la lecture qui en est proposée pendant la formation. Une même phrase peut cacher autre chose dans votre équipe : le questionnaire et l'entretien servent à le vérifier.",
            'entetes' => ["Ce qu'on entend", "Ce que cela révèle souvent", "Réponse qui aide", "Réponse qui aggrave"],
            'lignes'  => [
                ["« L'ancien système marchait très bien »", "La peur de perdre une maîtrise reconnue : la personne était l'experte de l'ancien outil", "Reconnaître cette expertise et la mettre au service du projet, comme testeuse ou comme référente", "Dénigrer l'ancien outil devant ceux qui l'ont fait vivre pendant des années"],
                ["« Je n'ai pas le temps d'apprendre »", "Une surcharge réelle pendant la transition, souvent sous-estimée par la direction", "Libérer du temps par écrit, décaler une tâche, former sur des créneaux courts pendant les heures de travail", "Programmer la formation en fin de journée ou le samedi, en plus du reste"],
                ["« C'est encore une idée de la direction qui passera »", "Le souvenir d'un projet précédent lancé puis abandonné", "Le sponsor reconnaît le précédent et s'engage sur une date de fermeture de l'ancien outil", "Promettre que cette fois sera différente, sans aucun engagement vérifiable"],
                ["« On va nous surveiller »", "Une crainte sur l'usage des données que l'outil enregistre", "Dire par écrit ce qui est mesuré, à quel niveau, qui le voit et combien de temps c'est conservé", "Nier toute mesure, puis diffuser un classement nominatif des utilisateurs"],
                ["« Ça ne marche pas pour mon cas »", "Très souvent, un vrai manque fonctionnel ou un réglage oublié", "Noter le cas, le tester avec la personne et répondre par écrit dans la semaine", "Répondre « vous vous habituerez » sans avoir regardé"],
                ["« Je ne suis pas doué avec l'informatique »", "Un manque de confiance, parfois un problème de lecture, de vue ou d'équipement", "Accompagnement individuel, binôme avec un collègue patient, fiche illustrée, matériel vérifié", "Former en grand groupe au rythme de ceux qui vont vite"],
                ["« L'IA va prendre mon poste »", "Une inquiétude sur l'emploi et sur la valeur du métier", "Dire ce que l'assistant fera et ne fera pas, qui relit ses productions, et à quoi servira le temps gagné", "Laisser la rumeur courir faute d'avoir abordé le sujet"],
                ["Le silence complet en réunion", "Un désaccord qui ne s'exprime pas devant la hiérarchie", "Questionnaire anonyme, échanges avec les référents hors de la présence du manager", "Conclure que tout le monde est d'accord"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi traiter une résistance comme une information plutôt que comme un obstacle ?",
            'paragraphes' => [
                "Parce que la plupart des objections contiennent un fait utile. La recherche sur l'acceptation des technologies le montre depuis longtemps. En septembre 1989, Fred D. Davis publie dans la revue MIS Quarterly (volume 13, numéro 3) une étude menée auprès de 152 utilisateurs et de quatre logiciels. Il y mesure deux perceptions : l'utilité de l'outil et sa facilité d'emploi. Dans ses deux études, l'utilité perçue est plus fortement liée à l'usage que la facilité d'emploi, et la facilité semble surtout agir en rendant l'utilité plus visible.",
                "La conséquence pratique est directe. Une interface agréable ne compense pas un outil dont la personne ne voit pas ce qu'il lui apporte, à son poste, dans sa journée. Le message « l'entreprise se modernise » ne répond à aucune question d'une secrétaire médicale ou d'un commercial de terrain. « Vous ne ressaisirez plus les commandes le soir » y répond. C'est pourquoi la carte d'impact par rôle précède le plan de communication : on ne peut pas parler d'utilité à quelqu'un sans savoir ce qui change pour lui.",
                "Le cabinet Prosci décrit le changement individuel en cinq étapes, réunies sous le nom ADKAR : comprendre pourquoi le changement est nécessaire, choisir d'y participer, savoir comment changer, mettre en pratique les nouveaux gestes, puis maintenir la nouvelle façon de faire et éviter le retour en arrière. La formation utilise cette suite comme grille de diagnostic, sans certification ni outil payant : une équipe qui n'a pas compris pourquoi ne sera pas aidée par une séance de plus sur les écrans.",
                "John Kotter propose, à l'échelle de l'organisation, huit étapes : créer un sentiment d'urgence, constituer une coalition, formuler une vision, enrôler des volontaires, lever les obstacles, obtenir des victoires rapides, maintenir l'élan, ancrer le changement. Pour une structure de trente personnes, trois idées suffisent souvent : une coalition réduite au sponsor et aux référents, des volontaires plutôt que des désignés, et une première réussite visible dans les quinze jours.",
                "La règle pratique enseignée est simple : chaque objection entre dans un registre, avec sa famille, la personne qui la traite et une réponse écrite sous une semaine. Celles qui révèlent un défaut de l'outil remontent au chef de projet. Ce sont souvent les retours les plus précieux avant la mise en service, et les ignorer transforme un défaut réparable en contournement durable.",
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "ADKAR, les huit étapes de Kotter ou la méthode courte de la formation : quel cadre retenir ?",
            'options'  => ['Modèle ADKAR (Prosci)', 'Huit étapes de Kotter', 'Méthode courte en six documents'],
            'criteres' => [
                ['critere' => 'Point de départ', 'valeurs' => ["La personne : où en est chacun dans son propre changement", "L'organisation : comment entraîner l'ensemble vers un nouveau fonctionnement", "Le déploiement : un outil, une date, des équipes à préparer"]],
                ['critere' => "Ce qu'il aide à voir", 'valeurs' => ["L'étape où un groupe bloque : compréhension, envie, savoir, pratique ou maintien", "Les leviers collectifs : urgence, alliances, obstacles à lever, premières réussites", "Qui est touché, qui résiste et pourquoi, qui relaie, ce qu'on mesure, quand on revient en arrière"]],
                ['critere' => "Taille d'organisation", 'valeurs' => ["Toutes tailles, utile dès quelques personnes", "Surtout les organisations de plusieurs centaines de personnes", "Petites et moyennes structures, ou une équipe dans une grande"]],
                ['critere' => 'Limite', 'valeurs' => ["Dit où l'on bloque, moins comment organiser les relais", "Lourd pour une PME qui change un seul outil", "Ne remplace pas une démarche de transformation d'ensemble"]],
            ],
            'verdict'  => "La formation s'appuie sur la méthode courte et emprunte aux deux autres ce qui sert : la grille ADKAR pour lire les résistances, l'idée de coalition et de victoire rapide chez Kotter. Une organisation déjà formée à l'un de ces cadres le garde ; les six documents s'y raccordent sans difficulté.",
        ],
        [
            'type'  => 'points',
            'titre' => "Que fait concrètement un sponsor, et que peut-on demander aux référents ?",
            'intro' => "Les rôles d'un changement se jugent à des comportements visibles, pas à des titres. Ceux-ci sont travaillés pendant la deuxième demi-journée et écrits dans un mandat d'une page signé par le sponsor.",
            'items' => [
                ['titre' => "Le sponsor annonce lui-même", 'texte' => "Pas par un courriel du service informatique : en personne, devant les équipes, avec la raison du changement dite dans les mots du métier. Il reste ensuite visible : une phrase en réunion d'équipe, une question sur l'outil, un merci public au premier référent qui a débloqué un collègue."],
                ['titre' => "Le sponsor s'en sert le premier", 'texte' => "Si le directeur continue de demander le rapport par WhatsApp ou par tableur, l'équipe a compris que l'ancien circuit reste le vrai. Valider dans l'outil, commenter dans l'outil, chercher l'information dans l'outil : c'est le message le plus fort et le moins coûteux."],
                ['titre' => "Le sponsor tranche vite", 'texte' => "Une question bloquante qui attend trois semaines devient un contournement. Le mandat fixe un délai de réponse et la personne qui décide en son absence."],
                ['titre' => "Le manager parle à chacun", 'texte' => "Il connaît ses collaborateurs : qui est inquiet, qui est débordé, qui décroche. Il ajuste la charge de travail pendant les semaines de démarrage et signale ce qu'il observe, sans attendre le bilan."],
                ['titre' => "Le référent répond et fait remonter", 'texte' => "Il aide ses collègues sur les gestes courants, note les questions dans le registre et transmet au chef de projet ce qui ressemble à un défaut. Son temps est écrit dans le mandat, avec ce qui lui est retiré pendant ces semaines."],
                ['titre' => "Ce qu'on ne demande jamais au référent", 'texte' => "Contrôler ses collègues, dénoncer ceux qui n'utilisent pas l'outil, ou faire leur travail à leur place. Un référent transformé en surveillant perd en une semaine la confiance qui justifiait son choix."],
                ['titre' => "Les représentants du personnel informés tôt", 'texte' => "Là où ils existent, ils sont informés dès l'annonce, avant les rumeurs. En France, dans les entreprises d'au moins cinquante salariés, le comité social et économique doit même être consulté sur l'introduction de nouvelles technologies."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Qui annonce quoi, par quel canal, et à quel moment ?",
            'legende' => "Le calendrier type construit pendant la troisième demi-journée, pour une mise en service prévue six semaines plus tard. Les dates se décalent avec la vôtre ; l'ordre, lui, se respecte.",
            'entetes' => ['Moment', 'Message', 'Qui le porte', 'Canal'],
            'lignes'  => [
                ["Six semaines avant", "Pourquoi cet outil, ce qui va changer, ce qui ne changera pas, la date prévue", "Le sponsor", "Réunion en présentiel ou en visioconférence, suivie d'un écrit d'une page"],
                ["Cinq semaines avant", "Les noms des référents, la façon dont les formations seront organisées, l'appel aux inquiétudes", "Les managers, chacun dans son équipe", "Réunion d'équipe et questionnaire anonyme"],
                ["Trois semaines avant", "Le calendrier de formation par rôle, l'accès à l'environnement d'essai", "Les référents et les RH", "Messagerie interne, affichage dans les locaux, message vocal pour les équipes de terrain"],
                ["La veille du démarrage", "Ce qui se passe demain, où trouver de l'aide, que faire si l'on est bloqué", "Le manager", "Message court, accompagné de la fiche d'une page du poste"],
                ["Le jour du démarrage", "La présence des référents, le premier retour à la mi-journée", "Le sponsor et les référents", "Passage dans les équipes, sur place ou en visioconférence"],
                ["Fin de la première semaine", "Ce qui fonctionne, ce qui a été corrigé, les réponses aux questions fréquentes", "Le chef de projet", "Note courte et foire aux questions mise à jour"],
                ["Un mois après", "Les résultats d'usage, les ajustements décidés, la date de fermeture de l'ancien outil", "Le sponsor", "Réunion, puis écrit diffusé à tous"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment former chaque rôle sans faire suivre à tous le même cours ?",
            'legende' => "Matrice de départ, ajustée pendant la formation à votre outil et à vos postes. Elle sert ensuite à découper les séances prévues avec l'éditeur ou le prestataire, qui forme aux écrans.",
            'entetes' => ['Rôle', 'À maîtriser le premier jour', 'Format conseillé', 'Quand'],
            'lignes'  => [
                ["Utilisateur quotidien", "Les trois à cinq gestes qui font sa journée, et la façon de demander de l'aide", "Atelier pratique de deux heures en petit groupe, sur l'environnement d'essai, avec des cas de son poste", "Dans les dix jours qui précèdent le démarrage"],
                ["Utilisateur occasionnel", "Retrouver une information, faire une demande, valider un document", "Fiche d'une page et vidéo de deux minutes, puis question au référent", "La semaine du démarrage"],
                ["Manager qui valide", "Valider, suivre le travail de son équipe, lire le tableau d'usage agrégé", "Séance d'une heure, avant celle de ses collaborateurs", "Deux à trois semaines avant"],
                ["Référent", "Tous les gestes de son service, les réponses aux questions courantes, la remontée d'un défaut", "Formation approfondie et accès anticipé à l'outil pour s'entraîner", "Trois à quatre semaines avant"],
                ["Administrateur", "Créer un compte, attribuer des droits, retirer un accès au départ d'un salarié", "Formation par l'éditeur ou le prestataire, avec une procédure écrite", "Avant les référents"],
                ["Personne éloignée du numérique", "Les deux ou trois gestes sans lesquels elle ne peut pas travailler", "Accompagnement individuel, binôme avec un collègue, fiche illustrée de captures d'écran", "Avant le démarrage, puis à ses côtés la première semaine"],
                ["Équipe de terrain sur téléphone", "Les gestes sur mobile, la saisie sans connexion si l'outil le permet, la synchronisation", "Démonstration sur son propre téléphone, dans les conditions réelles de réseau", "Avant le démarrage, sur le terrain"],
                ["Nouvel arrivant", "Les gestes de son poste et les règles d'usage de l'outil", "Parcours d'accueil avec les fiches et une heure avec le référent", "Dès son arrivée, même longtemps après le lancement"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment accompagner ceux qui ont le plus de mal avec le numérique ?",
            'paragraphes' => [
                "Dans presque chaque équipe, quelques personnes risquent de rester au bord du chemin : un magasinier qui travaille sur papier depuis vingt ans, une aide à domicile qui n'a qu'un téléphone ancien, un associé qui délègue tout ce qui ressemble à un écran. Les former avec les autres, au rythme du groupe, revient souvent à les décourager devant témoins. Le plan de formation leur réserve un parcours à part, décidé avec elles et non à leur place.",
                "Le manuel des services numériques du gouvernement britannique, le GOV.UK Service Manual, appelle « assisted digital support » l'aide apportée à ceux qui ont besoin d'un soutien pour utiliser la partie en ligne d'un service. Sa page, mise à jour le 18 décembre 2025, distingue cinq causes : le manque de confiance dans le service ou dans Internet, le manque d'assurance pour s'en servir seul, l'absence d'accès à Internet, le manque de compétences numériques, et le manque de motivation pour surmonter seul ces obstacles. Elle recommande une aide par téléphone ou en personne, parfois par messagerie instantanée.",
                "Cette grille, pensée pour les usagers d'un service public, s'applique très bien aux salariés, et chaque cause appelle une réponse différente. Le manque d'accès se règle par du matériel ou une connexion, pas par une formation. Le manque d'assurance se règle par un binôme patient et des essais sans risque sur l'environnement de test. Le manque de compétences demande des séances courtes et répétées. Le manque de motivation renvoie au message du sponsor et à l'utilité concrète de l'outil pour la personne.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se passent les quatre premières semaines après la mise en service ?",
            'items' => [
                ['titre' => "Le premier jour", 'duree' => "Jour J", 'texte' => "Les référents sont disponibles et n'ont rien d'autre de prévu. Aucune réunion longue n'est programmée dans les équipes concernées. Un premier retour est fait au sponsor à la mi-journée : ce qui bloque, qui est en difficulté, ce qui doit être corrigé avant le lendemain."],
                ['titre' => "La première semaine", 'duree' => "Jours 2 à 5", 'texte' => "Chaque question reçue par un référent est notée dans le registre. Celles qui reviennent trois fois deviennent une fiche ou une réponse de la foire aux questions. Le manager vérifie que personne n'a disparu du circuit : une personne qui ne pose aucune question n'a pas forcément tout compris."],
                ['titre' => "Les deuxième et troisième semaines", 'duree' => "Jours 6 à 15", 'texte' => "C'est la période où les anciennes habitudes reviennent, parce que la pression du lancement retombe. Le point hebdomadaire avec le sponsor lit les premiers indicateurs d'usage et décide des séances de rattrapage, par petits groupes, sur les gestes qui posent encore problème."],
                ['titre' => "La quatrième semaine", 'duree' => "Jours 16 à 30", 'texte' => "Les référents reprennent peu à peu leur travail habituel. Les questions passent par un canal unique et stable. Le bilan d'adoption se prépare avec le tableau d'usage, le registre des objections et la liste des contournements observés."],
                ['titre' => "Le bilan d'adoption", 'duree' => "Un mois après", 'texte' => "Une demi-journée à distance, avec le sponsor, les managers et les référents. On compare les indicateurs aux valeurs attendues, on décide des corrections et l'on confirme, ou non, la date de fermeture de l'ancien outil."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels indicateurs montrent qu'un outil est réellement adopté ?",
            'legende' => "Cinq indicateurs au plus sont retenus pour un déploiement donné. Chacun est relevé au niveau de l'équipe ou du site, jamais sous forme de classement nominatif.",
            'entetes' => ['Indicateur', 'Comment le relever', "Signal d'alerte", "Ce qu'il ne dit pas"],
            'lignes'  => [
                ["Comptes activés", "Console d'administration de l'outil", "Des comptes jamais ouverts après la première semaine", "Que la personne se sert vraiment de l'outil"],
                ["Utilisateurs actifs par semaine", "Rapports d'usage de l'outil, agrégés par équipe", "Une baisse après la deuxième semaine", "Si l'usage est complet ou s'il se limite à une consultation"],
                ["Part des opérations passées par le nouvel outil", "Volume traité dans l'outil comparé au volume total : demandes, commandes, factures, dossiers", "Une part qui stagne sous la valeur attendue", "Pourquoi le reste passe ailleurs"],
                ["Vie de l'ancien canal", "Messages dans l'ancien groupe, fichiers encore modifiés, cahiers encore remplis", "Aucune baisse après deux semaines", "Qui continue, et pour quelle raison"],
                ["Questions reçues par les référents", "Registre tenu par les référents", "Les mêmes questions semaine après semaine", "Ce que pensent ceux qui ne demandent rien"],
                ["Utilité perçue", "Questionnaire anonyme de cinq questions, une semaine puis un mois après", "Une majorité qui ne voit pas ce que l'outil lui apporte", "L'usage réel, qui peut être meilleur ou pire"],
                ["Résultat attendu pour le métier", "Mesure avant et après : délai de réponse, délai de traitement, erreurs de saisie", "Aucune amélioration après un mois d'usage", "Ce qui revient à l'outil et ce qui revient au reste de l'organisation"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment mesurer l'usage sans transformer l'outil en instrument de surveillance ?",
            'paragraphes' => [
                "La tentation est forte : les outils modernes enregistrent tout, et la direction veut savoir qui s'en sert. Dans sa page sur le contrôle de l'activité des personnes employées, datée du 9 juillet 2026, la CNIL rappelle que l'employeur peut contrôler l'activité, mais qu'un dispositif de contrôle doit réunir trois conditions cumulatives : être justifié et proportionné, être soumis aux instances représentatives du personnel selon les règles en vigueur, et être porté à la connaissance des salariés. Elle juge disproportionné un enregistreur de frappe, et proportionné un logiciel qui transmet de façon transparente, chaque trimestre, le nombre de dossiers traités.",
                "Les éditeurs ont intégré cette prudence. La documentation de Microsoft sur les rapports d'utilisation du Centre d'administration Microsoft 365, mise à jour le 28 août 2026, indique que, par défaut, tous les rapports masquent les noms d'utilisateur, les groupes et les sites, afin d'aider les entreprises à respecter les lois locales sur la vie privée. Un administrateur peut lever ce masquage, et l'affichage d'informations identifiables est alors inscrit dans le journal d'audit. Les rapports couvrent en général les 7, 30, 90 ou 180 derniers jours. Côté Google Workspace, l'aide aux administrateurs précise que les rapports disponibles dépendent de l'édition souscrite.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> demande, à son article 383, des données adéquates, pertinentes et non excessives au regard de la finalité poursuivie. En France, l'article L2312-8 du code du travail range l'introduction de nouvelles technologies parmi les sujets sur lesquels le comité social et économique est informé et consulté, dans les entreprises d'au moins cinquante salariés. Ailleurs en Europe, le RGPD pose le même principe de minimisation des données.",
                "La règle enseignée en découle. Avant la mise en service, on annonce par écrit ce qui sera mesuré, à quel niveau, qui verra les chiffres et combien de temps ils seront gardés. On mesure par équipe, on laisse le masquage des noms activé, et l'on n'utilise pas les indicateurs d'adoption pour évaluer les personnes pendant les premiers mois. Un outil vécu comme un mouchard produit exactement ce qu'on voulait éviter : un usage minimal, de façade, et des échanges qui repartent sur les téléphones personnels.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un classement nominatif des « retardataires » fait-il échouer l'adoption ?",
            'texte' => "Parce qu'il transforme un apprentissage en épreuve publique. La personne citée en bas de liste n'apprend pas plus vite : elle apprend à paraître active, en ouvrant l'outil sans s'en servir, et ses collègues retiennent que le projet sert à les surveiller. Les chiffres perdent alors toute valeur, puisqu'ils mesurent la peur plutôt que l'usage. Le tableau d'usage se lit par équipe ; quand une personne décroche, c'est son manager qui va la voir, seul à seul, pour comprendre et proposer de l'aide.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quand faut-il revenir en arrière, et comment le décider avant d'en avoir besoin ?",
            'paragraphes' => [
                "Revenir à l'ancien outil n'est pas un échec quand c'est une décision prévue. C'en est un quand on l'improvise. Le plan de retour arrière s'écrit donc avant la mise en service, au calme, pendant la quatrième demi-journée. Il fixe les situations qui déclenchent la discussion, par exemple des clients qui ne peuvent plus être servis ou des paiements bloqués, la personne qui décide, le moment au-delà duquel le retour n'est plus possible, et ce que deviennent les données saisies entre-temps dans le nouvel outil.",
                "L'histoire de <a href=\"/histoires/knight-capital\">Knight Capital</a> montre ce que coûte l'improvisation. Selon l'ordonnance de la SEC du 16 octobre 2013, ce courtier américain n'avait, le 1er août 2012, aucune procédure de supervision pour réagir à un incident. En cherchant à corriger une mise en production défectueuse, son équipe a désinstallé le nouveau code des sept serveurs où il fonctionnait correctement, ce qui a aggravé le problème. En 45 minutes environ, Knight a perdu plus de 460 millions de dollars. Une PME ne joue pas ces montants, mais le mécanisme est le même : un retour arrière décidé dans la panique est un second changement, sans préparation.",
                "Pour un outil de travail, le retour arrière est rarement total. On peut garder le nouvel outil pour une équipe pilote et faire revenir les autres, rouvrir l'ancien outil en lecture seule, ou suspendre une seule fonction. Dans tous les cas, l'annonce compte autant que la décision : expliquer honnêtement ce qui n'a pas fonctionné, ce qui sera corrigé et la nouvelle date. Un retour arrière caché ou maquillé ruine la crédibilité de la tentative suivante.",
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Que doit contenir un plan de retour arrière avant la mise en service ?",
            'items' => [
                "Les situations qui déclenchent la discussion, décrites en termes concrets : clients non servis, paiements bloqués, données perdues, équipe entière à l'arrêt.",
                "La personne qui décide du retour, et celle qui la remplace si elle est absente.",
                "Le dernier moment où le retour reste possible, et ce qui le rend impossible ensuite.",
                "L'état de l'ancien outil pendant la période de démarrage : ouvert, en lecture seule ou suspendu, et qui en garde les accès.",
                "Le sort des opérations saisies dans le nouvel outil entre le démarrage et le retour, et la personne qui les reporte.",
                "Le message prévu pour les équipes et, s'il y a lieu, pour les clients, avec la personne qui le diffuse.",
                "La procédure de retour elle-même, écrite étape par étape et essayée au moins une fois sur l'environnement de test.",
                "La date à laquelle le plan est relu, puis classé quand l'ancien outil est définitivement fermé.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée : groupe, méthode, supports et suivi ?",
            'intro' => "La formation alterne de courts apports de méthode et un long travail sur votre déploiement. Le formateur apporte les modèles, les questions et les mises en situation ; le groupe apporte son outil, ses équipes et ses contraintes.",
            'items' => [
                ['titre' => "Un groupe de six à douze personnes", 'texte' => "Sponsor, managers, référents, RH et chef de projet d'un même déploiement. Au-delà de douze, les jeux de rôle et la relecture des plans de chacun ne tiennent plus dans le temps imparti ; on constitue alors deux groupes."],
                ['titre' => "Votre outil sur la table", 'texte' => "Les exercices utilisent l'environnement d'essai ou les captures de l'outil que vous déployez, vos fiches de poste et votre calendrier réel. Rien n'est fait sur un logiciel fictif qu'il faudrait ensuite transposer."],
                ['titre' => "Des mises en situation", 'texte' => "Annonce lue à voix haute, entretien avec un collaborateur réticent, réponse à une objection en réunion, décision de crise sous contrainte de temps : les gestes du changement s'apprennent en les faisant, devant des pairs qui posent les questions des équipes."],
                ['titre' => "Des documents qui restent", 'texte' => "Carte d'impact, registre des objections, mandats, calendrier des messages, matrice de formation, tableau d'usage et plan de retour arrière sont remis en fichiers modifiables, avec les supports des deux jours et une attestation nominative."],
                ['titre' => "Une évaluation sur les livrables", 'texte' => "La réussite se juge aux documents terminés et au jeu de rôle final, pas à un questionnaire de satisfaction. Un document incomplet est repris avec la personne concernée avant la fin de la session."],
                ['titre' => "Un suivi jusqu'au bilan", 'texte' => "Entre la formation et le bilan d'adoption, les questions de méthode passent par courriel ou WhatsApp, dans les conditions prévues au devis. Le bilan à un mois, à distance, fait partie du parcours."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils servent pendant la formation, et que coûtent-ils chez l'éditeur ?",
            'legende' => "Prix relevés le 5 octobre 2026 sur les pages officielles citées dans les sources, dans la devise affichée. Ces outils servent aux exercices ; aucun abonnement n'est inclus dans le prix de la formation, aucun n'est imposé, et l'on travaille de préférence avec ceux que vous avez déjà.",
            'entetes' => ['Outil', 'Usage pendant la formation', 'Version ou offre', 'Coût publié'],
            'lignes'  => [
                ["Formulaire en ligne : Google Forms ou Microsoft Forms", "Questionnaire anonyme d'avant-session, puis questionnaires d'utilité perçue à une semaine et à un mois", "Inclus dans les suites bureautiques en ligne de Google et de Microsoft", "Google Workspace : Business Starter à 6,80 €, Business Standard à 13,60 € et Business Plus à 21,10 € par utilisateur et par mois, prix hors promotion en facturation mensuelle ; Microsoft Forms fait partie des services de Microsoft 365, qui suivent son utilisation dans leurs rapports"],
                ["Rapports d'utilisation du Centre d'administration Microsoft 365", "Exercice de lecture d'un tableau d'usage agrégé, noms masqués", "Rapports sur 7, 30, 90 ou 180 jours ; noms d'utilisateur masqués par défaut", "Compris dans l'abonnement Microsoft 365 déjà souscrit"],
                ["Rapports de la console d'administration Google Workspace", "Même exercice pour les organisations équipées de Google", "Rapports et journaux disponibles selon l'édition souscrite", "Compris dans l'abonnement Google Workspace déjà souscrit"],
                ["Trello", "Registre des objections et suivi des actions de changement, une carte par objection ou par action", "Offres Free, Standard, Premium et Enterprise", "Free jusqu'à 10 collaborateurs par espace de travail ; Standard à 5 dollars par utilisateur et par mois en paiement annuel (6 dollars au mois) ; Premium à 10 dollars en annuel (12,50 dollars au mois)"],
                ["Tableur : Excel, Google Sheets ou LibreOffice Calc", "Carte d'impact, matrice de formation, calendrier des messages, tableau d'usage", "Modèles remis compatibles avec les trois", "Celui que vous utilisez déjà ; aucun achat n'est demandé"],
                ["Grilles ADKAR et huit étapes de Kotter", "Lecture des résistances et des leviers collectifs", "Descriptions publiques publiées par Prosci et par Kotter", "Consultation libre ; aucune certification ni aucun outil payant de ces cabinets n'est utilisé"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble un déploiement accompagné selon le secteur, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Cabinet d'expertise comptable, à Cotonou", 'probleme' => "Cas type : les échanges avec les clients et entre collaborateurs passent par des groupes WhatsApp ouverts sur des téléphones personnels ; le cabinet adopte une messagerie d'entreprise, et les plus anciens collaborateurs n'y voient qu'une contrainte de plus.", 'solution' => "L'associé gérant annonce lui-même la règle de ce qui va où, chaque pôle a son référent, les pièces des clients ne transitent plus par les téléphones personnels après une date fixée, et l'on mesure la part des échanges clients passés par le nouvel outil."],
                ['secteur' => "ONG de santé communautaire, à Ouagadougou ou à Niamey", 'probleme' => "Cas type : une application de collecte sur téléphone remplace les fiches papier des agents de terrain, qui travaillent dans plusieurs langues et avec une couverture réseau irrégulière.", 'solution' => "Formation sur le téléphone de chaque agent, dans les zones où il travaille ; référents qui parlent les langues des équipes ; saisie sans connexion testée avant le lancement ; circuit papier gardé deux semaines au plus, puis fermé à une date annoncée."],
                ['secteur' => "Clinique privée, à Abidjan", 'probleme' => "Cas type : un logiciel d'agenda et de dossier administratif remplace le grand cahier de l'accueil ; les secrétaires, expertes du cahier, s'inquiètent, et les médecins ne viennent pas aux séances de formation.", 'solution' => "Le médecin-chef devient sponsor et tient lui-même son agenda dans l'outil ; la secrétaire la plus expérimentée devient référente ; le retour arrière est prévu pour l'accueil seul, avec un seuil de patients non enregistrés qui le déclenche."],
                ['secteur' => "Distributeur de produits de grande consommation, à Dakar", 'probleme' => "Cas type : les commerciaux de terrain reçoivent une application de prise de commande ; une rumeur circule sur le suivi de leurs déplacements.", 'solution' => "Le directeur commercial dit par écrit ce que l'application enregistre et ce qu'elle n'enregistre pas ; la première victoire visible est la commande transmise au dépôt le jour même ; les indicateurs se lisent par secteur, jamais par vendeur, pendant les trois premiers mois."],
                ['secteur' => "PME industrielle de soixante salariés, en France", 'probleme' => "Cas type : la direction ouvre un assistant d'intelligence artificielle au service client et à l'administration des ventes, sans avoir dit ce qui est permis ni qui relit les réponses.", 'solution' => "Le comité social et économique est consulté avant le lancement, une règle d'usage d'une page est écrite, la formation par rôle distingue ceux qui rédigent avec l'assistant et ceux qui relisent, et l'utilité perçue est mesurée à un mois."],
                ['secteur' => "Service d'aide à domicile, en Belgique", 'probleme' => "Cas type : les plannings des intervenantes passent d'un appel téléphonique quotidien à une application mobile ; plusieurs intervenantes ont peu d'expérience des applications.", 'solution' => "Parcours individuel pour celles qui le demandent, binômes entre collègues, ligne téléphonique tenue par une référente pendant le premier mois, et appel du matin maintenu deux semaines puis arrêté à une date annoncée dès le lancement."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur place, à distance, entre plusieurs organisations : comment organiser la formation ?",
            'legende' => "Le contenu reste le même d'un format à l'autre ; seuls le rythme et la composition du groupe changent. Le bilan à un mois se tient à distance dans tous les cas.",
            'entetes' => ['Format', 'Déroulé', 'Ce qui fonctionne bien', "Ce qu'il faut prévoir"],
            'lignes'  => [
                ["Intra-entreprise, en salle", "Deux journées séparées d'une semaine, dans vos locaux ou une salle extérieure, puis le bilan", "Tout le groupe travaille sur le même déploiement et repart avec des documents communs", "Bloquer l'agenda du sponsor pour la première matinée et le dernier après-midi"],
                ["Inter-entreprises", "Deux journées réunissant managers et référents de plusieurs organisations", "Chacun avance sur son propre déploiement et compare ses solutions à celles des autres ; le coût est partagé", "Les documents internes ne circulent pas ; les exemples sont anonymisés, et le bilan se fait par organisation"],
                ["À distance", "Sept séances de deux heures, à raison de deux par semaine", "Équipes réparties entre plusieurs villes ou pays ; les documents avancent entre les séances", "Caméras allumées pour les jeux de rôle, et une solution de repli par téléphone si la connexion tombe"],
                ["Hybride", "Première journée sur place, seconde en trois séances à distance", "Le diagnostic et les mises en situation se font en salle, les plans s'écrivent bien à distance", "Un même support partagé pour les deux parties, et des horaires fixés dès le cadrage"],
                ["Atelier de relance", "Une journée sur place pour un outil déjà en service mais peu utilisé, puis le bilan", "Part des contournements constatés plutôt que d'un plan théorique", "Accès aux chiffres d'usage disponibles et présence du sponsor"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié : chaque formule est chiffrée sur devis, après un premier échange, un cadrage et un devis qui sont gratuits, avec une réponse sous 24 heures. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier inscrit au devis.",
            'items'      => [
                ['offre' => "Parcours complet", 'prix' => 'Sur devis', 'inclus' => ["Questionnaire anonyme d'avant-session et sa synthèse", "Quatre demi-journées sur votre déploiement", "Modèles et documents remis en fichiers modifiables", "Bilan d'adoption à distance un mois après la mise en service"]],
                ['offre' => "Atelier de relance", 'prix' => 'Sur devis', 'inclus' => ["Pour un outil déjà en service mais boudé", "Relevé des contournements et des objections", "Plan de relance avec le sponsor et les référents", "Bilan à un mois"]],
                ['offre' => "Session inter-entreprises", 'prix' => 'Sur devis', 'inclus' => ["Deux journées entre organisations différentes", "Travail de chacun sur son propre déploiement", "Mêmes modèles qu'en intra", "Bilan individuel à distance"]],
            ],
            'variations' => [
                "Le format retenu et le nombre de groupes à former.",
                "Le nombre de sites, d'équipes ou de pays concernés par le déploiement.",
                "La préparation sur mesure : analyse du questionnaire, lecture des fiches de poste et du calendrier du projet.",
                "Le lieu : vos locaux à Cotonou, une autre ville, un autre pays, ou la visioconférence ; les déplacements sont chiffrés à part.",
                "La langue des supports, en français ou en anglais.",
                "Les exigences d'un financeur ou d'un bailleur : programme détaillé, feuilles de présence, attestations particulières.",
                "Les licences de l'outil déployé restent à votre charge et n'entrent jamais dans le devis de formation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il financer tout ou partie du parcours ?",
            'paragraphes' => [
                "Il le peut parfois, mais la décision appartient au fonds, et rien n'est promis ici. Les éléments suivants ont été relevés le 5 octobre 2026 sur les sites officiels. En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> ouvre son plan de formation à toute entreprise qui justifie du paiement régulier des deux taxes ; les actions peuvent être internes, intra-entreprise, inter-entreprises ou à l'étranger, et le règlement n'intervient qu'après le suivi et le contrôle du Fonds, puis l'approbation de sa Commission permanente.",
                "Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> affiche quatre guichets, dont un consacré au personnel des entreprises et aux membres des organisations professionnelles ; la demande se dépose sur sa plateforme en ligne. Au Bénin, les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> : c'est auprès de lui que se vérifient, dossier par dossier, les conditions applicables.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, notamment ceux des OPCO, des régions, de France Travail ou de l'État. Richard SALANON ne revendique ni cette certification ni l'agrément d'un fonds africain : comptez sur votre budget propre, sauf réponse écrite contraire du fonds. Le programme détaillé, les feuilles de présence et les attestations sont fournis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels faux pas guettent l'équipe de déploiement dans les semaines qui suivent la formation ?",
            'intro' => "Le plan sort solide de la salle. Il s'abîme ensuite, quand le calendrier se resserre et que l'activité reprend ses droits. Ces faux pas reviennent d'un déploiement à l'autre ; chacun a sa parade.",
            'items' => [
                ['titre' => "Annoncer par un simple courriel", 'texte' => "Un message écrit informe, il ne convainc pas. L'annonce se fait de vive voix par le sponsor, l'écrit vient ensuite comme mémoire de ce qui a été dit."],
                ['titre' => "Former les utilisateurs un mois trop tôt", 'texte' => "Les gestes appris sans pratique s'oublient vite. La matrice place la formation des utilisateurs dans les dix jours qui précèdent le démarrage, et celle des référents avant."],
                ['titre' => "Choisir les référents parmi les seuls passionnés", 'texte' => "Le plus jeune ou le plus à l'aise avec l'informatique n'est pas toujours celui que ses collègues écoutent. La crédibilité dans le métier compte davantage que l'aisance technique."],
                ['titre' => "Laisser l'ancien outil ouvert sans date de fin", 'texte' => "Tant qu'il reste possible de faire comme avant, une partie de l'équipe le fera. La date de fermeture est annoncée dès le lancement, puis tenue ou décalée par une décision écrite."],
                ['titre' => "Laisser le sponsor disparaître après le lancement", 'texte' => "Les premières semaines sont celles où son attention compte le plus. Le point hebdomadaire est inscrit dans son agenda avant la mise en service."],
                ['titre' => "Prendre toute objection pour de la mauvaise volonté", 'texte' => "Certaines signalent un vrai défaut. Le registre classe chaque objection avant d'y répondre, et celles qui touchent l'outil remontent au chef de projet."],
                ['titre' => "Déclarer victoire à la fin de la première semaine", 'texte' => "L'usage monte souvent au lancement, puis retombe quand la pression baisse. On attend le bilan d'un mois avant de démobiliser les référents."],
                ['titre' => "Oublier ceux qui arrivent après", 'texte' => "Six mois plus tard, les nouveaux salariés apprennent l'outil auprès du collègue disponible, avec ses mauvaises habitudes. Les fiches et une heure avec le référent entrent dans le parcours d'accueil."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés publics éclairent l'adoption d'un nouvel outil ?",
            'items' => [
                ['valeur' => '152', 'libelle' => "Utilisateurs et quatre logiciels étudiés par Fred D. Davis, dont l'article de septembre 1989 montre que l'utilité perçue est plus liée à l'usage que la facilité d'emploi", 'source' => 'Davis, MIS Quarterly, volume 13, numéro 3 (1989)', 'url' => 'https://doi.org/10.2307/249008'],
                ['valeur' => '3', 'libelle' => "Conditions cumulatives qu'un dispositif de contrôle de l'activité du personnel doit réunir : justification et proportionnalité, passage devant les représentants du personnel, information des salariés (page du 9 juillet 2026)", 'source' => "CNIL, contrôle de l'activité des personnes employées", 'url' => 'https://www.cnil.fr/fr/controle-de-lactivite-des-personnes-employees'],
                ['valeur' => '50', 'libelle' => "Salariés à partir desquels, en France, le comité social et économique est informé et consulté sur l'introduction de nouvelles technologies", 'source' => 'Code du travail, article L2312-8', 'url' => 'https://code.travail.gouv.fr/code-du-travail/l2312-8'],
                ['valeur' => '36 %', 'libelle' => "De la population africaine utilisait Internet en 2025, contre 74 % de la population mondiale, selon les chiffres publiés le 15 octobre 2025", 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '4', 'libelle' => "Indicateurs que les services publics numériques britanniques doivent publier : coût par transaction, satisfaction des usagers, taux d'achèvement et part d'usage en ligne (page mise à jour le 6 avril 2021)", 'source' => 'GOV.UK Service Manual, Data you must publish', 'url' => 'https://www.gov.uk/service-manual/measuring-success/data-you-must-publish'],
                ['valeur' => '45 minutes', 'libelle' => "Durée de l'incident du 1er août 2012 chez Knight Capital, qui n'avait pas de procédure de réaction aux incidents, pour une perte de plus de 460 millions de dollars", 'source' => 'SEC, ordonnance du 16 octobre 2013', 'url' => 'https://www.sec.gov/litigation/admin/2013/34-70694.pdf'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langues, WhatsApp et règles sur l'IA : que change le contexte local pour faire adopter un outil ?",
            'paragraphes' => [
                "La connexion d'abord. L'Union internationale des télécommunications indiquait le 15 octobre 2025 que 74 % de la population mondiale utilisait Internet, mais 36 % en moyenne en Afrique, et 23 % dans les pays à faible revenu contre 94 % dans les pays à revenu élevé. Pour un déploiement, cela se traduit en gestes précis : tester l'outil depuis les sites réels et pas seulement depuis le siège, vérifier la saisie sans connexion avant de la promettre, remettre des fiches imprimables, préférer des vidéos courtes téléchargées à l'avance, et prévoir un relais par téléphone quand la formation à distance décroche.",
                "La langue ensuite. La formation se tient en français, avec des supports possibles en anglais. Dans beaucoup d'équipes, une partie des explications passe pourtant mieux en fon, en yoruba, en wolof, en dioula, en mooré ou en lingala. Un référent qui reformule dans la langue de l'équipe évite des malentendus qu'aucune fiche ne corrige. Le vocabulaire de l'outil gagne aussi à être traduit dans les mots du métier : un petit lexique d'une page, construit pendant la formation, épargne bien des appels.",
                "Le rôle de WhatsApp pèse sur presque tous les déploiements en Afrique francophone, où les équipes y travaillent déjà. Interdire WhatsApp sans alternative échoue ; laisser tout y rester rend le nouvel outil inutile. Le plan de communication dit donc clairement ce qui reste sur la messagerie, ce qui passe dans l'outil, et à partir de quand. Quand c'est WhatsApp Business lui-même qui est adopté pour vendre, la formation <a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a> enseigne l'outil ; quand il est relié au logiciel de gestion, c'est la formation <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.",
                "Enfin, l'arrivée d'un assistant d'IA ajoute ses propres règles. Selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> sur l'article 4 du règlement sur l'IA, mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA est applicable depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l'omnibus numérique sur l'IA, entré en vigueur mi-juillet 2026, maintient l'obligation pour fournisseurs et utilisateurs professionnels mais n'impose plus de niveau « suffisant » ; la formation du personnel à la surveillance humaine reste obligatoire pour les systèmes à haut risque.",
                "Pour une équipe qui adopte un assistant, cela signifie former chacun à ce que l'outil fait, à ses limites et à la relecture, en plus des gestes. L'<a href=\"/histoires/air-canada-chatbot\">affaire du chatbot d'Air Canada</a> rappelle qu'une réponse fausse donnée par un assistant engage l'entreprise. Les règles d'usage elles-mêmes relèvent de la formation <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, et le cadre juridique de la formation <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi préparer l'adoption de votre outil avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il connaît les deux moitiés d'un déploiement. D'un côté, il installe et paramètre des outils, relie des logiciels entre eux et sait ce qu'une date de mise en service promet ou ne promet pas. De l'autre, il forme ensuite les personnes qui doivent s'en servir, et il voit au quotidien ce qui les fait adhérer ou décrocher. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, ce qui l'oblige à penser chaque jour à l'usage réel plutôt qu'à la démonstration. Il est aussi co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes. Il a travaillé pour des organisations de " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il n'est certifié par aucun éditeur, ni par Prosci ni par Kotter, ne cite aucun client formé et ne promet aucun taux d'adoption : la formation apprend à mesurer le vôtre, pas à l'annoncer d'avance.",
                "Sa façon de former se résume en quelques engagements vérifiables : une réponse sous 24 heures, un cadrage gratuit qui peut conclure que la formation n'est pas la bonne réponse, des exercices sur votre outil et vos équipes, des documents remis à l'organisation, et aucune obligation de lui confier la suite. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, et l'organisation commune des formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. La mise en œuvre d'un projet plus large est décrite sur la page <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de lancer votre nouvel outil ?",
            'texte' => "Un outil est adopté quand chacun voit ce qu'il lui apporte, sait faire les gestes de son poste et trouve de l'aide le jour où il bloque. Mesurez ce qui change pour chaque rôle, écoutez les objections comme des informations, faites annoncer le changement par un sponsor qui s'en sert lui-même, formez par rôle juste avant le démarrage, mesurez l'usage par équipe sans surveiller les personnes, et écrivez le retour arrière avant d'en avoir besoin. Les autres formations du domaine sont sur la page <a href=\"/formations/domaine/transformation-digitale\">transformation digitale</a>, et l'ensemble du catalogue sur celle des <a href=\"/formations/\">formations</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous préparer l'arrivée de votre nouvel outil avec vos managers et vos référents ?",
            'texte'  => "Décrivez l'outil, le nombre de personnes concernées, les équipes et les sites, et la date de mise en service visée. Vous recevez une réponse sous 24 heures, une proposition de calendrier et un devis après un cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Préparer mon déploiement'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il avoir choisi l'outil avant de suivre la formation ?", 'r' => "Oui. La formation part d'un outil retenu et d'une date de mise en service, même provisoire, car la carte d'impact et la matrice de formation dépendent des écrans réels. Si le choix n'est pas fait, la formation stratégie de transformation digitale ou, pour un logiciel de gestion, la formation Réussir l'adoption d'un ERP viennent d'abord."],
        ['q' => "Combien de temps avant le démarrage faut-il la suivre ?", 'r' => "Quatre à six semaines avant la mise en service. Ce délai laisse le temps d'annoncer, de choisir et de former les référents, puis de former les utilisateurs dans les dix jours qui précèdent le démarrage. Plus tôt, les détails ne sont pas fixés ; plus tard, le calendrier ne tient plus."],
        ['q' => "La formation enseigne-t-elle à se servir de l'outil ?", 'r' => "Non. Elle apprend à préparer, accompagner et mesurer son adoption. Les gestes de chaque poste s'apprennent avec l'éditeur, le prestataire ou une formation dédiée du catalogue, dont la matrice de formation produite pendant les deux jours fixe le contenu et le moment."],
        ['q' => "Vaut-elle pour un assistant d'intelligence artificielle ?", 'r' => "Oui. Les résistances y sont souvent plus fortes, notamment la crainte pour l'emploi, et la formation par rôle doit distinguer ceux qui produisent avec l'assistant et ceux qui relisent. Les règles d'usage et la conformité relèvent des formations consacrées à la gouvernance de l'IA et à l'IA, l'éthique et la conformité."],
        ['q' => "Qui doit y participer au minimum ?", 'r' => "Le sponsor pour la première matinée et le dernier après-midi, le chef de projet, les managers des équipes concernées et les futurs référents. Les RH sont utiles dès qu'il faut informer le personnel ou ses représentants. Former le seul chef de projet donne un plan que personne ne porte dans les équipes."],
        ['q' => "Comment choisir les référents ?", 'r' => "Pour leur crédibilité auprès des collègues plutôt que pour leur aisance avec l'informatique, avec leur accord et du temps libéré par écrit. Un référent par équipe ou par site est le point de départ, ajusté selon le nombre d'utilisateurs et la difficulté de l'outil."],
        ['q' => "Peut-on mesurer qui utilise l'outil et qui ne l'utilise pas ?", 'r' => "On peut mesurer l'usage, mais par équipe et après avoir informé les salariés de ce qui est mesuré. La CNIL exige qu'un dispositif de contrôle soit justifié et proportionné, présenté aux représentants du personnel selon les règles en vigueur et porté à la connaissance des salariés. Les rapports de Microsoft 365 masquent d'ailleurs les noms par défaut."],
        ['q' => "Que faire si l'équipe revient à l'ancien outil après le démarrage ?", 'r' => "Comprendre avant de sanctionner : manque de formation, réglage à reprendre, défaut réel ou message mal passé. Le registre des objections et le tableau d'usage servent à trancher. Si les critères de retour arrière écrits avant le démarrage sont atteints, le sponsor décide du retour, partiel ou total, et l'annonce honnêtement."],
        ['q' => "Notre outil est en service depuis des mois et reste peu utilisé : la formation convient-elle ?", 'r' => "Oui, sous la forme de l'atelier de relance : une journée qui part des contournements constatés et des chiffres d'usage disponibles, puis un plan de relance avec le sponsor et les référents, et un bilan à un mois."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en sept séances de deux heures, à raison de deux par semaine, avec caméras allumées pour les mises en situation. Le format hybride, avec une première journée sur place, reste préférable quand le groupe peut se réunir."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du format, du nombre de groupes, du nombre de sites, de la préparation sur mesure, du lieu et de la langue des supports. Les licences de l'outil déployé ne figurent jamais dans le devis."],
        ['q' => "Un fonds de formation peut-il prendre en charge le coût ?", 'r' => "Peut-être, selon le pays et les règles du fonds : FDFP en Côte d'Ivoire, fonds de formation continue au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'affiche ni certification Qualiopi ni agrément d'un fonds : interrogez le fonds par écrit, programme et devis en main, avant de signer."],
    ],

    'sources' => [
        ['titre' => "Prosci, le modèle ADKAR (Awareness, Desire, Knowledge, Ability, Reinforcement)", 'url' => 'https://www.prosci.com/methodology/adkar', 'date' => '2026-10-05'],
        ['titre' => "Kotter, les huit étapes pour conduire le changement", 'url' => 'https://www.kotterinc.com/methodology/8-steps/', 'date' => '2026-10-05'],
        ['titre' => "Fred D. Davis, « Perceived Usefulness, Perceived Ease of Use, and User Acceptance of Information Technology », MIS Quarterly, vol. 13, n° 3, septembre 1989, p. 319-340", 'url' => 'https://doi.org/10.2307/249008', 'date' => '2026-10-05'],
        ['titre' => "CNIL, travail et ressources humaines : le contrôle de l'activité des personnes employées (9 juillet 2026)", 'url' => 'https://www.cnil.fr/fr/controle-de-lactivite-des-personnes-employees', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L2312-8 (attributions du comité social et économique)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l2312-8', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, vue d'ensemble des rapports d'utilisation du Centre d'administration Microsoft 365 (mise à jour du 28 août 2026)", 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/admin/activity-reports/activity-reports', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Workspace, contrôler l'utilisation et la sécurité avec les rapports", 'url' => 'https://knowledge.workspace.google.com/admin/reports/monitor-usage-and-security-with-reports?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "GOV.UK Service Manual, assisted digital support : introduction (mise à jour du 18 décembre 2025)", 'url' => 'https://www.gov.uk/service-manual/helping-people-to-use-your-service/assisted-digital-support-introduction', 'date' => '2026-10-05'],
        ['titre' => "GOV.UK Service Manual, data you must publish (mise à jour du 6 avril 2021)", 'url' => 'https://www.gov.uk/service-manual/measuring-success/data-you-must-publish', 'date' => '2026-10-05'],
        ['titre' => "SEC, ordonnance du 16 octobre 2013 dans l'affaire Knight Capital Americas LLC", 'url' => 'https://www.sec.gov/litigation/admin/2013/34-70694.pdf', 'date' => '2026-10-05'],
        ['titre' => "Union internationale des télécommunications, Facts and Figures 2025 : usage d'Internet (15 octobre 2025)", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Google, tarifs de Google Workspace", 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Atlassian, tarifs de Trello", 'url' => 'https://trello.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['strategie-transformation-digitale', 'digitalisation-processus', 'chef-de-projet-digital', 'data-literacy', 'adoption-erp', 'outils-collaboratifs'],
        'services'    => ['digitalisation-d-entreprise', 'formation-en-entreprise', 'consultant-digitalisation'],
        'comparatifs' => [],
    ],
];
