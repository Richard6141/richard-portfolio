<?php
// ============================================================
// data/metiers/managers.php · Page « formations par métier » pour les
// managers intermédiaires et les chefs d'équipe (vague 1C, univers
// « Direction et gestion », non prioritaire, statut F : Richard a déjà
// formé ce public). Angle propre : animer une équipe, organiser et suivre
// le travail, réunions, délégation, faire adopter un outil, évaluation et
// retours, IA au service du manager sans surveillance abusive des salariés.
// La page oriente vers les fiches outils-collaboratifs,
// conduite-du-changement, ia-en-entreprise et data-literacy, sans en
// reprendre le texte ; elle ne répète rien des pages métier de son
// univers (dirigeants, ressources humaines, assistants de direction).
// Sources lues le 05/10/2026 : code du travail français (L1121-1,
// L1222-4, L2312-38, L2242-17), CNIL (questions-réponses sur le
// télétravail du 12/11/2020, contrôle de l'activité du 09/07/2026,
// 23 sanctions simplifiées du 06/07/2026), délibérations SAN-2023-021 du
// 27/12/2023 et SAN-2024-021 du 19/12/2024 (Légifrance), loi béninoise
// n° 2017-20 (articles 383, 415 et 428), AI Act Service Desk (annexe III),
// Commission européenne (calendrier, 03/08/2026), Gallup (State of the
// Global Workplace 2026 et données régionales), Microsoft (Work Trend
// Index, rapport du 17/06/2025 ; Viva Insights, page du 07/07/2026),
// documentation d'Odoo 20.0 (Projet, Évaluations), wiki de Dolibarr
// (module Projets), Center for Creative Leadership (modèle SBI,
// 19/08/2025). Faits repris des fiches déjà vérifiées : FDFP, 3FPT,
// FODEFCA, France Compétences, article 4 du règlement européen sur l'IA.
// Richard n'exerce pas le métier de manager salarié, n'est ni juriste ni
// délégué à la protection des données, et n'est certifié par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour managers et chefs d'équipe : organiser le travail, tenir des réunions utiles, déléguer, évaluer et faire adopter les outils, sans transformer l'IA en instrument de surveillance de l'équipe",
    'title'   => "Formation IA et numérique pour managers | Richard SALANON",
    'meta'    => "Former managers et chefs d'équipe à l'IA et aux outils : organiser, animer, déléguer, évaluer, sans surveiller les salariés. Intra ou distance, sur devis.",
    'en_bref' => "Cette page s'adresse aux managers intermédiaires, chefs d'équipe, chefs de service et superviseurs qui veulent se servir de l'intelligence artificielle et des outils numériques pour répartir le travail, préparer et tenir leurs réunions, déléguer, suivre l'avancement, conduire les entretiens et faire adopter un nouvel outil par leur équipe. Elle explique aussi où passe la limite entre suivre le travail et surveiller les personnes, avec les textes de la CNIL, du code du travail, de la loi béninoise n° 2017-20 et du règlement européen sur l'IA. Le parcours type tient en quatre demi-journées, suivies d'un bilan à distance un mois plus tard, en intra, en inter, à distance ou en formule hybride ; son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Direction et gestion',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : rendre visible le travail de l'équipe, qui fait quoi et pour quand",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé d'une semaine réelle de l'équipe : demandes reçues, canaux par lesquels elles arrivent (groupe WhatsApp, courriel, couloir, appel du directeur), tâches en cours et retards déjà connus.",
                "Construction d'une liste de tâches partagée, dans un tableur ou dans l'outil collaboratif de l'entreprise : une ligne, un responsable unique, une échéance, un état, une seule source de vérité.",
                "Transformer avec un assistant d'IA une commande floue de la hiérarchie en livrables, en étapes et en questions à reposer avant de promettre une date.",
                "Règles des canaux de l'équipe : ce qui passe par le groupe de messagerie, ce qui va dans l'outil de tâches, ce qui se dit de vive voix, et les heures où personne n'attend de réponse.",
                "Atelier : trier les urgences de la semaine selon leur effet et leur échéance, puis annoncer à l'équipe ce qui sera fait, reporté ou refusé.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : des réunions d'équipe plus courtes, et des points individuels qui servent",
            'duree'  => '3 h 30',
            'points' => [
                "Les trois réunions du manager et leur but : le point d'équipe hebdomadaire, le point individuel, la séance de résolution d'un problème.",
                "Un ordre du jour de trois questions envoyé la veille, que l'assistant aide à rédiger à partir de la liste des tâches et des blocages signalés.",
                "Clore chaque réunion sur un relevé des décisions et des actions saisi directement dans l'outil de suivi, devant les participants.",
                "Transcription et résumé automatiques : quelles réunions peuvent l'être, après quelle annonce, et pourquoi un point individuel ne l'est jamais.",
                "Exercice sur une réunion réelle de l'équipe : passer de soixante à vingt-cinq minutes sans perdre une décision.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : déléguer, suivre l'avancement et mesurer sans surveiller",
            'duree'  => '3 h 30',
            'points' => [
                "Grille de délégation : ce que le manager garde, ce qu'il confie avec un point d'étape, ce qu'il confie entièrement, ce qu'il peut confier à un outil.",
                "Rédiger une consigne de délégation complète (résultat attendu, date, moyens, limites, moment du point d'étape), puis la faire relire par l'assistant pour repérer les trous.",
                "Choisir trois ou quatre indicateurs d'équipe sur les résultats, les délais et la qualité, lus par équipe et sur des périodes assez longues pour être justes.",
                "Ce que les textes interdisent : surveillance permanente, captures d'écran à intervalles, enregistreur de frappe, caméra imposée toute la journée, compteurs d'inactivité à la minute.",
                "Atelier d'inventaire : les rapports d'usage, statistiques de messagerie, badgeuses ou géolocalisations déjà en place autour de l'équipe, et la décision écrite sur ce qui est lu, par qui et pourquoi.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : évaluer, faire des retours et faire adopter un outil par l'équipe",
            'duree'  => '3 h 30',
            'points' => [
                "Préparer un entretien d'évaluation à partir de faits datés (livrables, objectifs, incidents, progrès) que l'assistant aide à ordonner sans rien apprécier lui-même.",
                "Le retour en quatre temps, situation, comportement, impact, intention, répété en binôme sur des cas tirés de l'équipe.",
                "Relire le ton d'un message difficile avec un assistant, sans lui donner le nom de la personne ni un élément de sa santé ou de sa vie privée.",
                "Faire adopter un outil : le manager premier utilisateur, la démonstration sur un vrai dossier de l'équipe, deux semaines d'accompagnement rapproché, puis le retrait de l'ancien canal.",
                "Plan personnel des trente jours (trois changements, une mesure, une date de bilan) et évaluation individuelle sur une situation d'équipe inédite.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, à distance : bilan du plan des trente jours",
            'duree'  => '2 h',
            'points' => [
                "Ce qui a tenu dans la liste des tâches, les réunions et les règles de canaux, et ce qui a été abandonné en route.",
                "Questions concrètes rencontrées en déléguant, en évaluant ou en se servant de l'assistant d'IA.",
                "Décision sur la suite : poursuivre seul, former l'équipe à l'outil retenu, ou approfondir un sujet avec une formation du catalogue.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Managers intermédiaires, chefs d'équipe, chefs de service, superviseurs, nouveaux managers"],
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, puis 2 heures de bilan à un mois'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 12 personnes au plus en salle'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent au travail d'un manager ?",
            'paragraphes' => [
                "Le manager intermédiaire tient une position inconfortable : il reçoit les objectifs d'en haut, les transforme en travail concret pour son équipe, arbitre les priorités quand tout est urgent, et répond des résultats sans faire lui-même tout le travail. Chef d'agence, responsable d'atelier, superviseur d'un plateau d'appels, chef de service dans une administration ou chef de projet sans autorité hiérarchique : le titre change, le métier reste celui de faire travailler ensemble des personnes qui ne se ressemblent pas, avec des moyens toujours un peu justes.",
                "Les outils numériques ont d'abord changé la visibilité du travail. Une tâche notée dans un outil partagé, un état mis à jour, une échéance qui passe au rouge : ce que le manager devait demander à chacun devient lisible d'un coup d'œil. Ils ont aussi multiplié les sollicitations. Dans un rapport publié le 17 juin 2025, Microsoft estime, à partir des signaux anonymisés de Microsoft 365, qu'un salarié est interrompu toutes les deux minutes pendant ses heures de travail principales, soit 275 fois par jour, par une réunion, un courriel ou un message. Le manager en est souvent l'émetteur autant que la victime.",
                "L'intelligence artificielle générative ajoute un troisième changement. Elle rédige en une minute l'ordre du jour, la consigne de délégation, le compte rendu ou le message de recadrage qui coûtaient une soirée. Elle aide aussi à lire un rapport d'activité, à préparer un entretien, à reformuler une demande floue de la direction. Ce temps regagné est réel, à condition que le manager garde la main sur ce qui fait son métier : décider, juger, parler aux personnes.",
                "Reste le changement le plus délicat. Les outils enregistrent tout : connexions, statuts de présence, temps passé, messages lus, clics. La tentation de transformer ces traces en tableau de bord individuel est forte, et le droit la limite sévèrement, en Europe comme en Afrique francophone. Cette page décrit la formation que Richard SALANON propose aux managers pour gagner du temps avec les outils sans franchir cette ligne. Richard n'exerce pas ce métier à leur place : il forme à l'usage des outils, sur les situations réelles de l'équipe.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans la semaine d'un manager, que peut apporter un outil, et quelle décision lui reste ?",
            'legende' => "Répartition discutée en formation avec chaque groupe de managers. La dernière colonne signale le moment où l'outil commence à prendre une place qui n'est pas la sienne.",
            'entetes' => ['Situation du manager', "Apport possible de l'outil", 'Décision qui lui reste', "Signal d'alerte"],
            'lignes'  => [
                ["Répartir le travail du lundi", "Liste des tâches ouvertes, charge visible par personne, échéances triées", "Qui prend quoi, au vu des compétences, des absences et de la charge réelle", "L'outil attribue les tâches seul, d'après un score individuel"],
                ["Préparer le point d'équipe", "Ordre du jour proposé à partir des tâches en retard et des questions remontées", "Les deux ou trois sujets qui méritent vraiment le temps de tout le monde", "La réunion se contente de relire l'écran à voix haute"],
                ["Tenir le relevé des décisions", "Mise en forme des notes, tableau des actions, rappels d'échéance", "La formulation exacte de chaque décision et son responsable", "Un résumé automatique diffusé sans relecture"],
                ["Déléguer un dossier", "Premier jet de la consigne, liste des points oubliés, modèle réutilisable", "Le niveau d'autonomie accordé et la date du point d'étape", "La consigne est écrite par l'outil et jamais expliquée de vive voix"],
                ["Suivre l'avancement", "États des tâches, retards signalés, indicateurs d'équipe sur la semaine ou le mois", "L'interprétation d'un retard et l'aide à apporter", "Un classement individuel affiché ou un compteur d'inactivité"],
                ["Préparer un entretien annuel", "Faits datés regroupés, objectifs de l'an passé, trame de questions", "L'appréciation, la note éventuelle et les engagements pris", "L'assistant reçoit le dossier nominatif et propose une note"],
                ["Faire un retour sur un comportement", "Relecture du ton d'un message, reformulation plus factuelle", "Le moment, le lieu et les mots de l'échange en face à face", "Le recadrage part par écrit, dans le groupe de l'équipe"],
                ["Rendre compte à la direction", "Synthèse des chiffres de l'équipe, tableau de bord mensuel", "Le message principal, les risques et les demandes de moyens", "Des chiffres repris tels quels sans vérification à la source"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce que l'IA et les outils numériques ne doivent jamais faire entre les mains d'un manager, et quels textes le disent ?",
            'intro' => "Le pouvoir de diriger et de contrôler le travail est reconnu à l'employeur, et le manager l'exerce en son nom. Ce pouvoir a des bornes écrites. Chacune des limites ci-dessous repose sur un texte lu dans sa version officielle pendant la formation ; leur application à un cas précis reste l'affaire du service RH, du juriste ou du délégué à la protection des données de l'entreprise.",
            'items' => [
                ['titre' => "Placer l'équipe sous une surveillance continue", 'texte' => "L'article L1121-1 du code du travail français interdit toute restriction aux droits et libertés des personnes qui ne serait pas justifiée par la nature de la tâche ni proportionnée au but recherché. Dans ses questions-réponses sur le télétravail du 12 novembre 2020, la CNIL écarte la visioconférence imposée pendant tout le temps de travail, le partage permanent de l'écran, les enregistreurs de frappe et l'obligation de cliquer toutes les X minutes ou de se prendre en photo à intervalles réguliers pour prouver sa présence."],
                ['titre' => "Recueillir des informations à l'insu des personnes", 'texte' => "L'article L1222-4 du même code pose une règle courte : aucune information concernant personnellement un salarié ne peut être collectée par un dispositif qui n'a pas été porté préalablement à sa connaissance. Au Bénin, l'article 415 de la loi n° 2017-20 portant code du numérique impose d'informer la personne, au plus tard lors de la collecte, de la finalité et des destinataires de ses données. Un rapport d'outil qui révèle à l'équipe une donnée qu'elle ignorait enregistrée est déjà un manquement."],
                ['titre' => "Installer un moyen de contrôle sans passer par les représentants", 'texte' => "En France, l'article L2312-38 prévoit que le comité social et économique est informé et consulté, préalablement à la décision, sur les moyens ou techniques permettant un contrôle de l'activité des salariés. Le manager qui active de sa propre initiative une fonction de suivi dans un logiciel de l'entreprise court-circuite cette étape, même si l'éditeur l'a livrée cochée par défaut."],
                ['titre' => "Mesurer le travail à la seconde", 'texte' => "Par la délibération SAN-2023-021 du 27 décembre 2023, la formation restreinte de la CNIL a infligé une amende de 32 millions d'euros à une société de logistique dont les scanners signalaient un article rangé moins de 1,25 seconde après le précédent, les inactivités de plus de dix minutes et les temps de latence en début et en fin de poste. Elle a jugé disproportionnée la conservation pendant 31 jours de ces indicateurs pour chaque salarié."],
                ['titre' => "Détourner un outil vers un but caché", 'texte' => "Dans sa page du 9 juillet 2026 sur le contrôle de l'activité, la CNIL prend l'exemple d'une géolocalisation installée pour organiser une tournée chez les clients, qui ne doit pas servir en douce à contrôler la vitesse des personnes en temps réel. L'article 383 de la loi béninoise n° 2017-20 dit la même chose autrement : des données collectées pour une finalité déterminée ne sont pas traitées ensuite de manière incompatible avec elle."],
                ['titre' => "Noter ou classer les personnes par un traitement automatisé", 'texte' => "Au Bénin, l'article 428 de la loi n° 2017-20 exige une analyse d'impact préalable pour toute évaluation systématique et approfondie d'aspects personnels fondée sur un traitement automatisé, quand elle débouche sur des décisions qui affectent les personnes. Dans l'Union européenne, l'annexe III du règlement sur l'IA classe à haut risque les systèmes qui répartissent les tâches selon le comportement individuel ou surveillent et évaluent la performance des travailleurs ; selon la Commission européenne, ces règles s'appliquent à partir du 2 décembre 2027."],
                ['titre' => "Déduire l'humeur de l'équipe de son visage ou de sa voix", 'texte' => "L'article 5 du règlement européen sur l'IA range parmi les pratiques interdites, depuis février 2025, les systèmes qui infèrent les émotions d'une personne sur le lieu de travail, hors raisons médicales ou de sécurité. Un outil de visioconférence ou de centre d'appels qui promet de mesurer l'engagement ou le stress de chaque membre de l'équipe pendant les échanges n'a pas sa place dans une entreprise européenne, et pose les mêmes questions de proportionnalité ailleurs."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un logiciel de « productivité » peut-il coûter plus cher à l'équipe qu'il ne lui rapporte ?",
            'texte' => "Parce qu'il mesure l'apparence du travail, pas le travail. Par la délibération SAN-2024-021 du 19 décembre 2024, la CNIL a sanctionné de 40 000 euros une agence immobilière qui faisait tourner sur les postes de ses salariés un logiciel comptant les minutes d'inactivité du clavier et de la souris, prenant des captures d'écran à intervalles réguliers et classant les sites consultés en productifs ou non, tandis que deux caméras filmaient en continu, avec le son, les espaces de travail et de pause. L'information était seulement orale. Pour un manager, la leçon dépasse l'amende : une équipe qui se sait comptée à la minute apprend à bouger la souris, et cesse de dire ce qui ne va pas.",
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Suivre le travail de l'équipe ou surveiller les personnes : où passe la limite au quotidien ?",
            'options'  => ['Suivi du travail, légitime', 'Surveillance des personnes, à proscrire'],
            'criteres' => [
                ['critere' => 'Ce qui est observé', 'valeurs' => ["Les livrables, les échéances tenues, la qualité, les blocages signalés", "Les mouvements de souris, les fenêtres ouvertes, le statut de présence, les sites consultés"]],
                ['critere' => 'Le rythme', 'valeurs' => ["Un point hebdomadaire et un bilan mensuel ; la CNIL juge plus cohérent de mesurer la productivité sur des périodes longues", "Un affichage en temps réel, ou des alertes dès quelques minutes d'inactivité"]],
                ['critere' => 'Le niveau de lecture', 'valeurs' => ["L'équipe d'abord ; la personne lors du point individuel, avec elle", "Un classement nominatif visible par tous, ou consulté sans que la personne le sache"]],
                ['critere' => "L'information des salariés", 'valeurs' => ["Écrite, préalable, avec ce qui est mesuré, qui le lit et combien de temps c'est gardé", "Absente, orale, ou découverte au détour d'un rapport"]],
                ['critere' => 'La visioconférence', 'valeurs' => ["Caméra demandée pour une réunion précise, avec l'arrière-plan flouté proposé par l'outil", "Caméra allumée toute la journée pour vérifier que la personne est devant son écran"]],
                ['critere' => "L'assistant d'IA", 'valeurs' => ["Mise en forme des comptes rendus, préparation des entretiens à partir de faits que le manager a choisis", "Analyse des messages de chacun pour en tirer une note d'engagement ou de loyauté"]],
                ['critere' => 'Le moyen de contrôle', 'valeurs' => ["Objectifs raisonnables et vérifiables, compte rendu régulier du salarié, comme le suggère la CNIL pour le télétravail", "Capture d'écran, enregistreur de frappe, photo à intervalles, géolocalisation détournée de son but"]],
            ],
            'verdict'  => "Le bon suivi répond à la question « le travail avance-t-il, et de quoi l'équipe a-t-elle besoin ? ». La surveillance répond à « qui puis-je prendre en défaut ? ». La formation apprend au manager à concevoir ses indicateurs à partir de la première question, et à refuser poliment les fonctions de l'outil qui ne servent que la seconde, en renvoyant la décision au service RH et aux représentants du personnel quand elle leur revient.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment un manager se sert-il de l'IA dans son propre travail, sans exposer les membres de son équipe ?",
            'paragraphes' => [
                "La formation commence par le bureau du manager, pas par celui de l'équipe. Un chef d'équipe qui s'est servi d'un assistant avec méthode pour ses propres tâches juge mieux ce qu'il peut demander aux autres, combien de temps prend la vérification et où l'outil se trompe. Les exercices partent de sa semaine : la note qui annonce une nouvelle organisation des horaires, le compte rendu mensuel à la direction, la réponse à un client qui se plaint d'un membre de l'équipe, la préparation d'une réunion où il faudra annoncer une mauvaise nouvelle.",
                "L'assistant sert aussi de contradicteur. On lui décrit un projet de répartition des tâches et on lui demande ce qui risque de coincer ; on lui soumet une consigne et on lui demande les cinq questions qu'un nouveau venu poserait. Ce travail se fait sur la situation, jamais sur la personne : on écrit « un technicien expérimenté, souvent en retard sur les rapports » plutôt que son nom, son âge et ses ennuis de santé. Les noms, les évaluations, les arrêts maladie et les conflits restent hors des assistants en ligne, même payants, sauf outil validé par l'entreprise pour cet usage.",
                "Deux réflexes complètent la méthode. Le premier est le compte professionnel : un abonnement personnel payé avec sa carte n'apporte pas les engagements contractuels d'une offre administrée par l'entreprise, et le manager n'a pas à en décider seul. Le second est la vérification : un chiffre, une date, un article de loi ou un délai fourni par l'assistant se contrôle dans la source avant de partir chez l'équipe ou chez la direction. Le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à comprendre ce qui distingue les offres avant d'en parler à son responsable.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces situations de management, de Cotonou à Bruxelles ?",
            'items' => [
                ['secteur' => "Chef d'agence d'une société de distribution, à Cotonou, douze commerciaux sur le terrain", 'probleme' => "Le groupe WhatsApp de l'équipe mélange commandes, photos de rayons, consignes de la direction et messages personnels ; des consignes envoyées à 22 heures sont lues le lendemain midi, et des commandes se perdent dans le fil.", 'solution' => "Un groupe d'annonces où seul le chef d'agence écrit, un formulaire ou un tableau partagé pour les commandes, une plage horaire pour les messages de service, et un point de quinze minutes le lundi matin sur les chiffres de la semaine, relevés par équipe."],
                ['secteur' => "Superviseur d'un centre d'appels, à Abidjan", 'probleme' => "La direction veut afficher sur un écran mural le temps d'inactivité de chaque conseiller, mis à jour en continu.", 'solution' => "Le superviseur apprend à présenter une autre proposition : indicateurs de l'équipe par demi-journée (délai de prise d'appel, appels résolus, rappels clients), lecture individuelle réservée au point mensuel avec le conseiller, information écrite de l'équipe sur ce qui est mesuré, et question posée au service RH sur les règles à respecter."],
                ['secteur' => "Chef de projet entre Paris et Dakar, équipe de huit personnes", 'probleme' => "Les réunions se succèdent à des heures impossibles pour l'un ou l'autre site, et les décisions prises en visioconférence sont contestées la semaine suivante.", 'solution' => "Une réunion hebdomadaire unique à un horaire tournant, un ordre du jour envoyé la veille, un relevé de décisions rédigé avec l'assistant pendant la séance et validé avant de raccrocher, et les questions courantes traitées par écrit dans l'outil de tâches."],
                ['secteur' => "Chef d'atelier dans une PME industrielle, en Belgique", 'probleme' => "Le nouveau module de planification d'Odoo est boudé : les opérateurs continuent de noter les ordres sur un tableau blanc que le chef d'atelier recopie le soir.", 'solution' => "Le chef d'atelier devient le premier utilisateur visible, montre l'outil sur les ordres de la semaine en cours, désigne un référent par équipe, puis efface le tableau blanc à une date annoncée. L'usage est suivi par poste de travail, jamais par opérateur."],
                ['secteur' => "Responsable d'agence d'une société de services, à Douala", 'probleme' => "Les entretiens annuels sont faits en dix minutes, sans préparation, et les salariés en ressortent sans savoir ce qu'on attend d'eux.", 'solution' => "Une fiche de faits tenue tout au long de l'année, un modèle d'entretien préparé avec l'assistant à partir de ces faits sans donnée nominative, des retours formulés en situation, comportement et impact, et trois objectifs écrits avec le salarié."],
                ['secteur' => "Cheffe de service en télétravail partiel, à Lyon", 'probleme' => "Une partie de l'équipe travaille de chez elle deux jours par semaine ; un adjoint propose d'imposer la caméra allumée toute la journée et un logiciel qui relève l'activité des postes.", 'solution' => "La formation fait lire les questions-réponses de la CNIL sur le télétravail, puis construire à la place des objectifs hebdomadaires vérifiables, un compte rendu court du vendredi et un point individuel toutes les deux semaines."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils un manager organise-t-il le travail de son équipe, et que faut-il en savoir ?",
            'legende' => "Informations lues le 5 octobre 2026 dans la documentation officielle des éditeurs. La formation se fait sur les outils déjà payés par l'entreprise ; les abonnements restent à son nom et ne sont pas compris dans le prix.",
            'entetes' => ['Outil ou système', "Usage par le manager", "Ce qu'il faut savoir", 'Formation liée'],
            'lignes'  => [
                ['Tableur partagé (Excel, Google Sheets)', "Liste des tâches, plannings, suivi des congés de l'équipe, indicateurs du mois", "Souvent suffisant pour une équipe de moins de dix personnes, à condition d'une ligne par tâche, de listes de choix et d'un seul fichier de référence", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Trello, Asana, Notion, Planner', "Tableaux de tâches, échéances, responsables, documentation de l'équipe", "Le choix dépend de la taille de l'équipe, de ses projets et de la suite déjà payée ; un outil que le manager n'ouvre pas lui-même sera abandonné en quelques semaines", '<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>'],
                ['Teams, Google Meet et leurs fonctions de notes', "Réunions à distance, enregistrement, transcription, résumé", "Chaque participant doit savoir qu'une transcription a lieu ; les réglages se décident pour l'entreprise, pas réunion par réunion", '<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>'],
                ['Microsoft Viva Insights', "Habitudes de réunion de l'équipe, temps de concentration du manager", "Selon Microsoft Learn (page du 7 juillet 2026), les informations d'équipe ne montrent pas les habitudes de collaboration individuelles des membres de l'équipe ; le manager peut s'en retirer dans les paramètres", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Odoo, applications Projet et Évaluations', "Tâches, sous-tâches, dépendances, jalons ; campagnes d'entretiens, objectifs, compétences", "La documentation d'Odoo 20.0 décrit l'auto-évaluation du salarié, le retour du manager, les retours à 360 degrés, les objectifs, une note privée et une note finale : l'outil range, le manager apprécie", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr, module Projets', "Projets internes ou clients, tâches hiérarchiques, temps passé, facturation au temps", "Le wiki de Dolibarr indique que chaque utilisateur a sa vue des projets et des tâches (cloisonnement) ; la saisie du temps sert à facturer et à planifier, pas à surveiller", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['WhatsApp (groupes, communautés)', "Consignes, rappels, photos du terrain, coordination des équipes mobiles", "Un groupe où seuls les administrateurs écrivent sert aux annonces ; les données des clients et les documents individuels n'y circulent pas", '<a href="/formations/whatsapp-business">WhatsApp Business</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Ordres du jour, consignes, comptes rendus, préparation d'entretiens, synthèses pour la direction", "Le compte professionnel administré par l'entreprise est la seule base acceptable pour des documents de travail ; aucune donnée nominative sur un salarié n'y entre sans règle écrite", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Power BI, Looker Studio', "Indicateurs d'équipe et tableau de bord mensuel", "Un tableau de bord lisible par équipe et par période vaut mieux qu'un classement individuel en temps réel", '<a href="/formations/power-bi-looker-studio">Power BI et Looker Studio</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type des managers, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment déléguer un dossier quand l'équipe travaille avec des outils partagés ?",
            'items' => [
                ['titre' => "Choisir ce qui se délègue", 'duree' => 'Cinq minutes', 'texte' => "Le manager garde ce qui engage sa responsabilité propre (une sanction, une décision budgétaire, un arbitrage entre deux personnes) et délègue le reste, en commençant par ce qui fait progresser la personne. Ce qui se répète sans jugement peut aller à un outil : rappel d'échéance, mise en forme, collecte de chiffres."],
                ['titre' => "Écrire la consigne", 'duree' => 'Un quart d\'heure', 'texte' => "Résultat attendu, date, moyens disponibles, limites à ne pas franchir sans revenir vers le manager, moment du point d'étape. L'assistant d'IA relit la consigne et signale ce qui manque ; il ne l'écrit pas à la place du manager, qui doit pouvoir l'expliquer sans notes."],
                ['titre' => "Remettre la consigne de vive voix", 'duree' => 'Dix minutes', 'texte' => "La consigne écrite rejoint la tâche dans l'outil partagé, mais elle est d'abord expliquée en face à face ou par appel. La personne reformule ce qu'elle a compris ; les écarts apparaissent tout de suite, pas à l'échéance."],
                ['titre' => "Fixer un seul point d'étape", 'duree' => 'Au tiers du délai', 'texte' => "Un point prévu, court, sur ce qui avance et ce qui bloque. Entre-temps, le manager ne vérifie pas l'état de la tâche trois fois par jour dans l'outil : l'autonomie accordée se mesure à ce qu'il s'abstient de regarder."],
                ['titre' => "Clore et reconnaître", 'duree' => 'À la livraison', 'texte' => "Le livrable est relu, la tâche fermée dans l'outil, et le travail reconnu devant l'équipe quand il le mérite. Ce qui a manqué dans la consigne est noté pour la prochaine fois, dans le modèle de délégation que le manager enrichit au fil des mois."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment préparer un entretien d'évaluation ou un retour difficile avec l'aide de l'IA, sans lui confier le jugement ?",
            'paragraphes' => [
                "L'entretien annuel est l'un des moments où le manager a le plus envie d'un assistant, et celui où il doit le tenir le plus loin de la décision. Ce que l'outil fait bien, c'est ordonner : regrouper des faits notés au fil de l'année, rappeler les objectifs fixés, proposer une trame de questions ouvertes, reformuler un paragraphe trop sec. Ce qu'il ne doit pas faire, c'est apprécier une personne à partir d'un dossier qu'il ne connaît que par écrit, ni proposer une note. La règle de la formation est simple : le manager arrive à l'assistant avec ses faits et repart avec un document mieux rangé, jamais avec un avis.",
                "Pour les retours du quotidien, la formation s'appuie sur le modèle situation, comportement, impact du Center for Creative Leadership, que l'organisme complète par une quatrième étape, l'intention, dans un article du 19 août 2025 : décrire la situation précise, s'en tenir aux comportements observés sans jugement, expliquer leur effet, puis demander à la personne ce qu'elle cherchait à faire. Les participants s'y exercent en binôme sur des situations de leur équipe, rendues anonymes.",
                "L'assistant d'IA intervient seulement à la fin, comme relecteur de ton : un message de recadrage trop brutal, une réponse à un salarié qui conteste une décision, une annonce de refus de congé. On lui soumet le texte sans nom, sans élément de santé ni de vie privée, et l'on garde la décision de l'envoyer. Un retour sur un comportement se fait de toute façon d'abord de vive voix, seul à seul ; l'écrit vient après, pour garder une trace de ce qui a été convenu.",
                "Quand l'entreprise utilise un module d'évaluation, comme l'application Évaluations d'Odoo, la formation montre comment s'en servir pour planifier les entretiens, recueillir l'auto-évaluation et suivre les objectifs, en rappelant que la note finale reste celle du manager. Les règles propres à l'entreprise, comme la grille de notation ou le lien avec la rémunération, relèvent du service RH et ne sont pas réinventées pendant la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quel est le rôle propre du manager quand l'entreprise fait arriver un nouvel outil dans son équipe ?",
            'intro' => "Le projet appartient à la direction ou au chef de projet ; l'usage quotidien, lui, se joue dans chaque équipe. La méthode complète de déploiement relève de la formation <a href=\"/formations/conduite-du-changement\">Conduite du changement numérique</a>. Le parcours des managers se concentre sur ce que seul le responsable d'équipe peut faire.",
            'items' => [
                ['titre' => "S'en servir le premier, devant l'équipe", 'texte' => "Une équipe regarde ce que fait son responsable plus qu'elle n'écoute ce qu'il dit. Le manager qui continue de demander les informations par message pendant qu'il annonce le nouvel outil signale qu'il est facultatif. Celui qui ouvre l'outil en réunion, sur un dossier en cours, montre qu'il compte."],
                ['titre' => "Traduire le projet en conséquences pour chacun", 'texte' => "Ce qui change pour le technicien, pour l'assistante, pour le commercial : une phrase par poste, dite par le manager, rassure davantage qu'une présentation générale. Les questions sans réponse sont notées et remontées au chef de projet, avec une date de retour."],
                ['titre' => "Repérer qui aura du mal, sans le désigner", 'texte' => "Certains membres de l'équipe sont moins à l'aise avec l'écrit, avec l'ordinateur ou avec le français. Le manager organise un binôme, un temps de prise en main en petit comité ou une fiche illustrée, sans en faire un sujet devant tout le monde."],
                ['titre' => "Fermer l'ancien canal à une date annoncée", 'texte' => "Tant que l'ancien tableau, l'ancien fichier ou le groupe de messagerie continue de servir, le nouvel outil reste une corvée en plus. La date de bascule se fixe avec l'équipe et se tient."],
                ['titre' => "Remonter ce qui ne marche pas", 'texte' => "Le manager est le mieux placé pour distinguer une résistance de principe d'un vrai défaut de l'outil. Une saisie qui prend dix minutes au lieu de deux, un écran illisible sur téléphone : ce sont des informations pour le projet, pas de la mauvaise volonté."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'ajuste-t-il selon le niveau de responsabilité du manager ?",
            'legende' => "Les quatre demi-journées peuvent être suivies séparément. Les combinaisons ci-dessous sont celles qui reviennent le plus ; elles se fixent au premier échange avec l'entreprise.",
            'entetes' => ['Profil', 'Séquences à privilégier', "Ce qu'il sait faire en sortant"],
            'lignes'  => [
                ["Chef d'équipe de terrain, premier niveau d'encadrement", 'Jour 1 matin, jour 2 matin', "Tenir une liste de tâches partagée sur téléphone, fixer des règles pour le groupe de messagerie, déléguer avec une consigne claire"],
                ['Manager intermédiaire ou chef de service', 'Les quatre', "Organiser le travail de l'équipe dans un outil, tenir des réunions courtes, mesurer par équipe, préparer les entretiens, accompagner un changement d'outil"],
                ["Nouveau manager, promu dans sa propre équipe", 'Jour 1 après-midi, jour 2 matin et après-midi', "Poser son rôle en réunion, déléguer à d'anciens collègues, faire ses premiers retours et ses premiers entretiens"],
                ["Chef de projet sans autorité hiérarchique", 'Jour 1 matin et après-midi', "Coordonner des personnes qui dépendent d'autres responsables, tenir un relevé de décisions accepté par tous"],
                ['Superviseur de plateau ou de centre de contact', 'Jour 1 après-midi, jour 2 matin', "Construire des indicateurs d'équipe sans compteur individuel en temps réel, conduire un point individuel à partir de faits"],
                ['Manager d\'une équipe répartie sur plusieurs sites ou pays', 'Jour 1 après-midi, jour 2 matin', "Organiser le travail asynchrone, choisir les réunions indispensables, suivre l'avancement sans multiplier les visioconférences"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation des managers se prépare-t-elle, de la demande au bilan ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous indiquez le nombre de managers, leur niveau, la taille de leurs équipes, les outils déjà en place et ce qui motive la demande : un nouveau logiciel à déployer, des réunions qui débordent, des managers promus récemment, un projet de suivi de l'activité à cadrer. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => "Lecture des règles de l'entreprise", 'duree' => 'Avant la session', 'texte' => "Charte informatique, éventuelle charte d'usage de l'IA, accord ou charte sur le télétravail et la déconnexion, règles d'évaluation fixées par le service RH. La formation s'inscrit dans ces règles ; quand elles manquent, les points à trancher sont signalés à la direction, pas inventés en séance."],
                ['titre' => "Une semaine réelle, rendue anonyme", 'duree' => 'Une semaine avant', 'texte' => "Chaque participant apporte la liste de ses réunions de la semaine, deux ou trois demandes reçues et une situation d'équipe qu'il trouve difficile, sans nom ni détail permettant de reconnaître quelqu'un. Les exercices partent de ce matériau."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "Chaque séquence part d'une situation de management, passe par la règle ou le texte qui s'applique, puis par le geste dans l'outil de l'entreprise, sur l'ordinateur ou le téléphone du participant. Les mises en situation à deux ou à trois occupent plus de temps que les exposés."],
                ['titre' => 'Documents remis', 'duree' => 'Fin de session', 'texte' => "Le modèle de liste de tâches, la grille de délégation, le gabarit d'ordre du jour et de relevé de décisions, la fiche d'indicateurs d'équipe, la trame d'entretien, le plan des trente jours et une attestation nominative de fin de formation, en fichiers modifiables."],
                ['titre' => 'Bilan', 'duree' => 'Un mois plus tard', 'texte' => "Deux heures à distance pour faire le point sur le plan des trente jours. Entre-temps, les questions d'application passent par courriel ou WhatsApp, dans les limites prévues au devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un manager isolé, toute une ligne managériale ou des chefs d'équipe sur plusieurs sites ?",
            'legende' => "Les formats se combinent : un atelier commun pour aligner la ligne managériale, puis des demi-journées ciblées selon les profils.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier de ligne managériale', 'Une demi-journée', "Tous les managers d'un service ou d'un site, avec leur directeur", "Fixer des règles communes sur les réunions, les canaux, les indicateurs et l'usage de l'IA avant de former chacun"],
                ['Parcours complet, intra', '2 jours en 4 demi-journées, puis 2 heures de bilan', '12 managers au plus', "Une entreprise qui veut des pratiques de management cohérentes d'une équipe à l'autre"],
                ['Module isolé', 'Une demi-journée', "6 à 12 managers d'un même profil", "Des superviseurs avant un changement d'indicateurs, des nouveaux managers à leur prise de poste"],
                ['Manager et équipe ensemble', 'Une demi-journée', "Un manager et son équipe, 10 personnes au plus", "Construire ensemble la liste de tâches, les règles de canaux et le rituel de réunion de l'équipe"],
                ['Session mutualisée, inter', '1 ou 2 jours', 'Un ou deux managers par structure', "PME, associations et projets financés qui n'ont que quelques managers ; les exercices utilisent des cas fictifs"],
                ['À distance ou hybride', 'Séances de 2 heures, ou une demi-journée en salle puis des séances à distance', '8 personnes au plus à distance', "Managers répartis entre un siège et des filiales, ou dans plusieurs pays"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation des managers, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun tarif n'est affiché : chaque formule est chiffrée sur devis après un premier échange, et le devis détaille ce qu'il comprend. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier convenu. Les licences des outils collaboratifs et des assistants d'IA restent payées par l'entreprise à l'éditeur.",
            'items'      => [
                ['offre' => 'Atelier de ligne managériale', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée pour les managers d\'un service ou d\'un site', 'Règles communes sur les réunions, les canaux et l\'usage de l\'IA', 'Liste des chantiers à mener équipe par équipe']],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ['Organisation du travail, réunions, délégation et mesure, ou évaluation et adoption', 'Exercices sur les situations anonymisées des participants', 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours manager complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Grille de délégation, fiche d\'indicateurs d\'équipe et trame d\'entretien construites en séance', 'Évaluation sur une situation inédite', 'Bilan à distance un mois plus tard']],
                ['offre' => 'Accompagnement du nouveau manager', 'prix' => 'Sur devis', 'inclus' => ['Séances individuelles de deux heures à distance, espacées sur deux ou trois mois', 'Préparation des premières réunions, délégations et entretiens', 'Questions entre les séances, selon le devis']],
            ],
            'variations' => [
                "Le nombre de managers et de groupes.",
                "Le nombre de demi-journées et les modules retenus.",
                "Le temps de préparation sur les outils et les règles de l'entreprise.",
                "Les outils à couvrir : tableur seul, outil collaboratif, Odoo, Dolibarr, suite Microsoft ou Google.",
                "Le lieu : vos locaux à Cotonou, une autre ville du Bénin, un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui paie la formation d'un manager, et un fonds de formation peut-il s'en charger ?",
            'paragraphes' => [
                "Un manager tient rarement le budget de formation : la demande passe en général par son responsable ou par le service RH, qui l'inscrit au plan de l'année. C'est aussi par ce circuit qu'une prise en charge éventuelle se demande. Elle dépend du pays et du fonds, n'est jamais automatique, et Richard SALANON n'en promet aucune ; la démarche consiste à interroger le fonds par écrit, programme et devis joints, avant de signer.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consacrée au plan de formation, lue le 5 octobre 2026, ouvre le dépôt d'un plan aux entreprises qui justifient du paiement régulier des deux taxes ; une action pour l'encadrement intermédiaire y figure au même titre qu'une autre. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> propose un guichet pour le personnel des entreprises. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions se demandent directement au fonds.",
                "En France, l'accès aux fonds publics et mutualisés, dont ceux gérés par les opérateurs de compétences, est réservé depuis le 1er janvier 2022 aux prestataires certifiés Qualiopi, comme le rappelle <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a>. Richard SALANON ne détient pas cette certification : le coût se prévoit alors sur le budget propre de l'entreprise, sauf réponse écrite contraire du financeur.",
                "Dans tous les cas, l'entreprise reçoit le programme, les feuilles de présence signées, les résultats de l'évaluation et les attestations. Pour une structure européenne, ces pièces servent aussi de trace des mesures prises au titre de l'article 4 du règlement européen sur l'IA, dont l'obligation de maîtrise de l'IA s'applique depuis le 2 février 2025 et fait l'objet de contrôles depuis le 3 août 2026, selon les questions et réponses de la Commission européenne mises à jour le 27 juillet 2026.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les managers qui s'outillent seuls, et comment les éviter ?",
            'intro' => "Aucune de ces erreurs ne vient de la négligence. Elles naissent presque toujours de la pression : une direction qui veut des chiffres pour vendredi, une équipe débordée, un outil livré sans mode d'emploi.",
            'items' => [
                ['titre' => "Ajouter un outil sans en retirer un", 'texte' => "La liste de tâches arrive, mais le groupe de messagerie, le fichier partagé et le cahier continuent de vivre. L'équipe saisit tout deux fois et finit par ne plus rien saisir. Chaque nouvel outil s'accompagne de la date à laquelle un ancien canal s'arrête."],
                ['titre' => "Piloter l'équipe depuis le groupe WhatsApp", 'texte' => "Consignes, félicitations, reproches, commandes et blagues se mélangent dans un fil que personne ne relit. Les décisions s'y perdent et les absents ne les voient jamais. Le groupe sert aux annonces et aux urgences ; le travail se suit ailleurs."],
                ['titre' => "Coller l'évaluation d'un collaborateur dans un assistant gratuit", 'texte' => "Nom, poste, résultats, conflits, parfois santé : tout part chez l'éditeur, sur un compte personnel. La trame d'entretien se prépare sur des faits sans nom, dans l'outil autorisé par l'entreprise, et l'appréciation reste écrite par le manager."],
                ['titre' => "Confondre le statut « disponible » avec le travail fait", 'texte' => "Une pastille verte dans la messagerie dit seulement qu'une application est ouverte. Juger l'implication de quelqu'un à cet indicateur pousse l'équipe à rester connectée sans travailler davantage. On juge les livrables, les délais et la qualité."],
                ['titre' => "Transcrire tous les points individuels", 'texte' => "Un point individuel enregistré n'est plus un espace où l'on dit ce qui ne va pas. La transcription se réserve aux réunions collectives qui le justifient, annoncées au début de la séance."],
                ['titre' => "Ouvrir les statistiques individuelles d'un logiciel par curiosité", 'texte' => "Beaucoup d'outils proposent des rapports d'usage par personne. Les consulter sans règle annoncée, puis les évoquer en réunion, détruit la confiance en une phrase. La lecture se fait par équipe, sauf cadre écrit validé par l'entreprise."],
                ['titre' => "Confier à un rappel automatique la conversation qu'on n'ose pas avoir", 'texte' => "Une relance automatique chaque matin sur une tâche en retard ne remplace pas la question « qu'est-ce qui te bloque ? ». Le retard répété appelle un échange en face à face, pas un message de plus."],
                ['titre' => "Écrire à l'équipe à toute heure", 'texte' => "Un message envoyé à 23 heures par le responsable est lu comme une demande, même quand il n'en est pas une. On programme l'envoi pour le lendemain matin, et l'on fixe avec l'équipe les heures où personne n'attend de réponse."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres publics récents éclairent le travail des managers ?",
            'items' => [
                ['valeur' => '22 %', 'libelle' => "Des managers étaient engagés dans leur travail en 2025, contre 31 % en 2022 et 27 % en 2024 ; selon Gallup, la baisse de l'engagement des managers explique l'essentiel du recul récent de l'engagement des salariés (rapport publié en avril 2026)", 'source' => 'Gallup, State of the Global Workplace 2026', 'url' => 'https://www.gallup.com/workplace/349484/state-of-the-global-workplace.aspx'],
                ['valeur' => '20 %', 'libelle' => "Des salariés dans le monde étaient engagés en 2025, plus bas niveau depuis 2020 ; Gallup chiffre le coût du faible engagement à environ 10 000 milliards de dollars de productivité perdue, soit 9 % du PIB mondial", 'source' => 'Gallup, State of the Global Workplace 2026', 'url' => 'https://www.gallup.com/workplace/349484/state-of-the-global-workplace.aspx'],
                ['valeur' => '19 % et 12 %', 'libelle' => "Part des salariés engagés en 2025 en Afrique subsaharienne et en Europe ; 46 % des salariés d'Afrique subsaharienne disaient avoir ressenti beaucoup de stress la veille, contre 39 % en Europe", 'source' => 'Gallup, données régionales du State of the Global Workplace 2026', 'url' => 'https://www.gallup.com/workplace/697850/state-of-the-global-workplace-regional-data.aspx'],
                ['valeur' => '275', 'libelle' => "Interruptions par jour pour un salarié qui utilise Microsoft 365, soit une toutes les deux minutes pendant les heures de travail principales, par une réunion, un courriel ou un message (rapport du 17 juin 2025, signaux anonymisés)", 'source' => 'Microsoft, Work Trend Index, Breaking down the infinite workday', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/breaking-down-infinite-workday'],
                ['valeur' => '57 %', 'libelle' => "Des réunions sont des appels improvisés sans invitation dans l'agenda, et les réunions commençant après 20 heures ont augmenté de 16 % en un an ; 48 % des salariés et 52 % des dirigeants disent que leur travail leur paraît chaotique et fragmenté (même rapport)", 'source' => 'Microsoft, Work Trend Index, Breaking down the infinite workday', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/breaking-down-infinite-workday'],
                ['valeur' => '32 M€', 'libelle' => "Amende prononcée par la CNIL le 27 décembre 2023 contre une société de logistique pour des indicateurs de suivi de l'activité des salariés jugés excessifs, dont un signal d'article rangé en moins de 1,25 seconde", 'source' => 'Légifrance, délibération de la CNIL SAN-2023-021', 'url' => 'https://www.legifrance.gouv.fr/cnil/id/CNILTEXT000048989272'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent le parcours des managers ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours des managers en reprend les gestes utiles à l'encadrement ; les fiches vont plus loin sur un outil ou une méthode.",
            'entetes' => ['Formation', "Ce qu'elle apporte à un manager", 'Quand la choisir'],
            'lignes'  => [
                ['<a href="/formations/outils-collaboratifs">Outils collaboratifs : Notion, Trello, Asana, Teams</a>', "Choisir l'outil de l'équipe et construire son espace de travail réel, avec ses règles d'usage", "L'équipe coordonne encore son travail par messagerie et par fichiers dispersés"],
                ['<a href="/formations/conduite-du-changement">Conduite du changement numérique</a>', "La méthode complète de déploiement : résistances, relais, annonce, formation par rôle, mesure de l'usage, retour arrière", "Un logiciel arrive dans plusieurs équipes et les managers en portent l'adoption"],
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', "La pratique quotidienne d'un assistant pour rédiger, synthétiser et analyser ses propres documents", "Le manager veut que toute son équipe, et pas seulement lui, gagne du temps avec l'IA"],
                ['<a href="/formations/data-literacy">Décider avec les données</a>', "Lire un indicateur, une moyenne ou un graphique, et en connaître les limites avant de décider", "Le manager reçoit des tableaux de bord qu'il présente à la direction sans toujours savoir ce qu'ils mesurent"],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Les règles sur les données personnelles, le secret, les biais et la transparence, lues pays par pays", "L'équipe manipule des données de clients ou de salariés avec des outils d'IA"],
                ['<a href="/formations/power-bi-looker-studio">Tableaux de bord Power BI et Looker Studio</a>', "Construire les indicateurs d'équipe à partir des données de l'entreprise", "Le suivi mensuel prend des heures de copier-coller dans un tableur"],
                ['<a href="/formations/gestion-projet-agile">Gestion de projet IT agile</a>', "Mener un projet numérique par itérations, côté client", "Le manager pilote aussi un projet de logiciel pour son service"],
                ['<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>', "Messagerie, agenda, partage, droits et réglages de réunion bien maîtrisés", "Les réglages de partage, de transcription et de délégation d'agenda posent question dans l'équipe"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Téléphone, WhatsApp, hiérarchie, droit du travail : que change le terrain africain ou européen pour un manager ?",
            'paragraphes' => [
                "En Afrique de l'Ouest et du Centre, une grande partie des équipes travaille sans ordinateur attitré : commerciaux, livreurs, techniciens, agents de terrain, personnel de magasin. Le téléphone est l'outil de travail, WhatsApp le canal naturel, et la connexion comme l'électricité peuvent manquer au mauvais moment. La formation en tient compte : liste de tâches consultable sur téléphone, formulaires légers, consignes courtes qui se lisent hors connexion, réunions qui ne supposent pas que tout le monde dispose d'une bonne visioconférence.",
                "La relation hiérarchique pèse aussi sur les réunions. Dans beaucoup d'organisations, un collaborateur ne contredit pas volontiers son responsable devant le groupe, surtout s'il est plus jeune ou nouveau. Le manager apprend donc à recueillir les objections autrement : tour de table où chacun parle avant lui, question posée par écrit avant la séance, point individuel. Les outils numériques peuvent aider, à condition de ne pas devenir un moyen de vérifier qui a lu quoi et à quelle heure.",
                "Côté droit, les textes africains et européens convergent sur l'essentiel : des données adéquates et non excessives, une finalité annoncée, une information préalable des personnes. Au Bénin, la loi n° 2017-20 portant code du numérique pose ces principes à ses articles 383 et 415. Le manager n'a pas à devenir juriste ; il doit savoir reconnaître une fonction d'outil qui pose question et la soumettre à la personne compétente dans l'entreprise avant de l'activer.",
                "En France, la densité des règles est plus grande. L'article L2242-17 du code du travail prévoit que la négociation annuelle porte sur le droit à la déconnexion et, à défaut d'accord, que l'employeur élabore une charte, après avis du comité social et économique, qui prévoit des actions de formation et de sensibilisation à un usage raisonnable des outils numériques destinées aux salariés comme au personnel d'encadrement. Le parcours des managers peut constituer l'une de ces actions. Les mêmes réflexes valent en Belgique, en Suisse ou au Luxembourg, selon les textes de chaque pays, que la formation fait vérifier par l'entreprise.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos managers avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des managers et des chefs d'équipe à l'usage de ces outils. Il n'exerce pas leur métier et ne prétend pas leur apprendre à diriger leur équipe : il leur apporte la maîtrise des outils collaboratifs, des assistants d'IA, des tableurs, des logiciels de gestion et des automatisations simples, et construit chaque exercice à partir des situations qu'ils vivent. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé dans " . count((array) fait('pays_travailles')) . " pays d'Afrique francophone, d'Europe et du Canada.",
                "Il connaît aussi l'autre côté des outils : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Les questions de données collectées, de droits d'accès et de relecture humaine qu'il pose en formation sont celles qu'il règle dans ses propres projets. Il n'est certifié par aucun éditeur, ne revend aucune licence, n'est ni juriste ni délégué à la protection des données, et renvoie les questions de droit au service RH ou au conseil de l'entreprise.",
                "Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. L'organisation des sessions pour plusieurs services est décrite sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. Quand la formation révèle un besoin d'outillage, comme une liste de tâches reliée au logiciel de gestion ou un circuit de demandes de l'équipe, il relève d'une mission de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. L'ensemble de l'offre se trouve dans le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/transformation-digitale\">transformation digitale</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire vos managers ?",
            'texte' => "Rendez le travail visible dans un seul outil et fermez les canaux en double, réservez les réunions à ce qui demande d'être ensemble, déléguez avec une consigne écrite puis expliquée, mesurez les résultats de l'équipe sur des périodes assez longues plutôt que l'activité des personnes en temps réel, préparez les entretiens sur des faits, et gardez à l'IA le rôle d'assistant de rédaction, jamais celui de juge ni de surveillant.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos managers et vos chefs d'équipe à l'IA et aux outils numériques ?",
            'texte'  => "Indiquez le nombre de managers, la taille de leurs équipes, les outils en place et ce que vous voulez améliorer en priorité : vous recevez une réponse sous 24 heures, puis un programme ajusté à vos équipes et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mes managers'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il être à l'aise avec l'informatique pour suivre le parcours ?", 'r' => "Non. Savoir envoyer un courriel, ouvrir un fichier partagé et se servir d'un smartphone suffit. Les séances partent de situations de management, puis montrent le geste dans l'outil ; les managers déjà à l'aise y trouvent surtout une méthode et des limites claires."],
        ['q' => "La formation apprend-elle à manager, ou seulement à utiliser des outils ?", 'r' => "Elle apprend à utiliser les outils au service des gestes du manager : organiser, réunir, déléguer, suivre, évaluer, faire adopter. Elle ne remplace pas un programme complet de développement du leadership. Richard SALANON forme à l'usage des outils et le dit d'entrée."],
        ['q' => "Un manager peut-il utiliser ChatGPT, Claude ou Gemini pour préparer les entretiens annuels ?", 'r' => "Pour ordonner des faits, préparer une trame de questions et relire le ton, oui, sur un compte professionnel autorisé par l'entreprise et sans nom ni donnée personnelle sensible. Pour apprécier la personne ou proposer une note, non : l'appréciation reste celle du manager, dans le cadre fixé par le service RH."],
        ['q' => "A-t-on le droit de suivre l'activité de l'équipe dans les logiciels ?", 'r' => "On peut suivre le travail, à condition que le dispositif soit justifié, proportionné et annoncé. En France, l'article L1222-4 du code du travail interdit de collecter une information sur un salarié par un dispositif dont il n'a pas été prévenu, et l'article L2312-38 impose de consulter le CSE avant tout moyen de contrôle de l'activité. Au Bénin, la loi n° 2017-20 exige des données non excessives et l'information des personnes."],
        ['q' => "Peut-on exiger que la caméra reste allumée en télétravail ?", 'r' => "Pas en permanence. Dans ses questions-réponses sur le télétravail du 12 novembre 2020, la CNIL juge excessive la visioconférence imposée pendant tout le temps de travail ; pour une réunion, elle admet que l'employeur demande la caméra quand l'outil permet de flouter l'arrière-plan, et laisse sinon le choix aux salariés, sauf cas particuliers annoncés à l'avance."],
        ['q' => "Faut-il transcrire les réunions d'équipe avec l'IA ?", 'r' => "Seulement celles qui le justifient, avec l'outil autorisé par l'entreprise, et après l'avoir annoncé aux participants. Le relevé de décisions rédigé pendant la séance suffit souvent. Les points individuels et les échanges sur une situation personnelle ne sont jamais transcrits."],
        ['q' => "Mon équipe travaille surtout sur WhatsApp : faut-il l'abandonner ?", 'r' => "Non. WhatsApp reste le meilleur moyen de joindre une équipe de terrain. La formation apprend à lui donner un rôle précis, annonces et urgences, et à suivre les tâches, les commandes et les décisions dans un outil où elles ne se perdent pas. Les documents personnels et les données des clients n'y circulent pas."],
        ['q' => "Le parcours convient-il à un chef de projet sans équipe hiérarchique ?", 'r' => "Oui. Les séquences sur l'organisation du travail, les réunions et le relevé de décisions s'appliquent à toute personne qui coordonne d'autres personnes. La partie sur l'évaluation peut être remplacée par une séance sur le suivi des engagements entre services."],
        ['q' => "Peut-on former un manager et son équipe en même temps ?", 'r' => "Oui, sous la forme d'une demi-journée commune où l'équipe construit avec son responsable sa liste de tâches, ses règles de canaux et son rituel de réunion. Les séquences sur l'évaluation, la délégation et la mesure se suivent en revanche entre managers, pour que chacun puisse parler librement de ses difficultés."],
        ['q' => "La formation se fait-elle sur nos propres outils ?", 'r' => "Oui. Les exercices se font dans le tableur, l'outil collaboratif, la suite Microsoft ou Google, Odoo ou Dolibarr déjà utilisés par l'entreprise. Si aucun outil n'est encore choisi, le parcours se fait dans un tableur partagé et la formation Outils collaboratifs aide ensuite à choisir."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du nombre de managers, des modules retenus, des outils à couvrir, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les managers à la fin ?", 'r' => "Le modèle de liste de tâches, la grille de délégation, le gabarit d'ordre du jour et de relevé de décisions, la fiche d'indicateurs d'équipe, la trame d'entretien, leur plan des trente jours et une attestation nominative de fin de formation. Ce n'est ni un diplôme ni une certification."],
    ],

    'sources' => [
        ['titre' => "Code du travail numérique, article L1121-1 du code du travail (restrictions aux droits et libertés justifiées et proportionnées)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l1121-1', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L1222-4 du code du travail (information préalable sur les dispositifs de collecte)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l1222-4', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L2312-38 du code du travail (consultation du CSE sur les moyens de contrôle de l'activité)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l2312-38', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L2242-17 du code du travail (droit à la déconnexion, charte et formation de l'encadrement)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l2242-17', 'date' => '2026-10-05'],
        ['titre' => "CNIL, les questions-réponses de la CNIL sur le télétravail (12 novembre 2020)", 'url' => 'https://www.cnil.fr/fr/les-questions-reponses-de-la-cnil-sur-le-teletravail', 'date' => '2026-10-05'],
        ['titre' => "CNIL, travail et ressources humaines : le contrôle de l'activité des personnes employées (9 juillet 2026)", 'url' => 'https://www.cnil.fr/fr/controle-de-lactivite-des-personnes-employees', 'date' => '2026-10-05'],
        ['titre' => "CNIL, 23 nouvelles sanctions depuis janvier au titre de la procédure simplifiée (6 juillet 2026)", 'url' => 'https://www.cnil.fr/fr/23-nouvelles-sanctions-simplifiees', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, délibération de la formation restreinte de la CNIL SAN-2023-021 du 27 décembre 2023 (indicateurs de suivi de l'activité des salariés)", 'url' => 'https://www.legifrance.gouv.fr/cnil/id/CNILTEXT000048989272', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, délibération de la formation restreinte de la CNIL SAN-2024-021 du 19 décembre 2024 (logiciel de mesure de l'activité et vidéosurveillance des salariés)", 'url' => 'https://www.legifrance.gouv.fr/cnil/id/CNILTEXT000051120331', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 383, 415 et 428)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "AI Act Service Desk, annexe III du règlement sur l'IA, point 4 : emploi et gestion des travailleurs", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => "AI Act Service Desk, article 5 du règlement sur l'IA (pratiques interdites)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-5', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, cadre réglementaire de l'IA : calendrier d'application (mise à jour du 3 août 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Gallup, State of the Global Workplace 2026 (données 2025)", 'url' => 'https://www.gallup.com/workplace/349484/state-of-the-global-workplace.aspx', 'date' => '2026-10-05'],
        ['titre' => "Gallup, State of the Global Workplace 2026 : données régionales (avril 2026)", 'url' => 'https://www.gallup.com/workplace/697850/state-of-the-global-workplace-regional-data.aspx', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Work Trend Index, rapport spécial Breaking down the infinite workday (17 juin 2025)", 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/breaking-down-infinite-workday', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, Viva Insights : informations d'équipe et confidentialité des données (7 juillet 2026)", 'url' => 'https://learn.microsoft.com/en-us/viva/insights/org-team-insights/team-insights', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation de l'application Projet", 'url' => 'https://www.odoo.com/documentation/20.0/applications/services/project.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation de l'application Évaluations", 'url' => 'https://www.odoo.com/documentation/20.0/applications/hr/appraisals.html', 'date' => '2026-10-05'],
        ['titre' => "Wiki de Dolibarr, module Projets", 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Projets', 'date' => '2026-10-05'],
        ['titre' => "Center for Creative Leadership, Use Situation-Behavior-Impact (SBI) to understand intent (19 août 2025)", 'url' => 'https://www.ccl.org/articles/leading-effectively-articles/closing-the-gap-between-intent-vs-impact-sbii/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['outils-collaboratifs', 'conduite-du-changement', 'ia-en-entreprise', 'data-literacy', 'ia-ethique-conformite', 'microsoft-365-google-workspace'],
        'services'    => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'odoo-vs-dolibarr'],
    ],
];
