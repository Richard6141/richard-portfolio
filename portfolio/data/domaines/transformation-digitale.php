<?php
// ============================================================
// data/domaines/transformation-digitale.php · Page domaine « Transformation
// digitale » (vague 1B). Rôle : aider à CHOISIR entre les six formations du
// domaine ; le gabarit affiche déjà une carte par fiche publiée. Fiches
// fortes (lot A, liens autorisés dans le texte) : strategie-transformation-
// digitale, digitaliser-son-entreprise. Fiches du lot B (publiées le
// 12/10/2026, citées sans lien) : digitalisation-processus,
// conduite-du-changement, chef-de-projet-digital, data-literacy.
// Aucune phrase reprise des fiches : résumé et orientation seulement.
// Faits externes relevés le 05/10/2026 : Eurostat (Digital Decade, extraction
// de juin 2026), Baromètre France Num 2026, UIT (Facts and Figures 2025),
// gouvernement du Bénin, présidence du Sénégal, impots.gouv.fr, SGG du Bénin,
// CNIL, Commission européenne (article 4, fait vérifié du catalogue), FDFP,
// 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formations en transformation digitale : choisir la bonne selon votre rôle, de la feuille de route de direction à l'adoption des outils par les équipes",
    'title'   => "Formations en transformation digitale | Richard SALANON",
    'meta'    => "Six formations en transformation digitale : stratégie, processus, changement, pilotage de projet, données. Laquelle choisir selon votre rôle, sur devis.",
    'en_bref' => "Ce domaine réunit six formations qui traitent la transformation digitale par le côté de l'organisation plutôt que par celui d'un logiciel : décider en direction, digitaliser une petite structure, outiller un processus, faire adopter un outil, piloter un projet, décider avec les chiffres. Cette page aide à choisir la bonne selon votre rôle, à composer un parcours et à préparer la demande. Chaque formation se tient dans vos locaux, entre plusieurs entreprises, à distance ou en formule mixte, et son prix est fixé sur devis.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que change la transformation digitale pour une entreprise, au-delà de l'achat d'outils ?",
            'paragraphes' => [
                "Une entreprise peut acheter un logiciel de gestion, ouvrir une boutique en ligne et abonner ses équipes à un assistant d'IA sans rien transformer. Les factures continuent de partir en retard, les commandes se perdent entre deux personnes, les chiffres du mois se discutent au lieu de se lire. La transformation digitale commence quand l'organisation change sa façon de décider, de faire circuler l'information et de travailler ensemble, et que les outils viennent servir ce changement.",
                "Concrètement, quatre choses bougent. La direction fixe des priorités et un budget au lieu de répondre aux offres au fil de l'eau. Les processus sont redessinés avant d'être outillés, pour ne pas informatiser un circuit absurde. Les équipes adoptent l'outil parce qu'elles ont été préparées, et non parce qu'on a coupé l'ancien. Enfin, les décisions s'appuient sur des chiffres que tout le monde sait lire, avec leurs limites.",
                "Les six formations du domaine suivent ces quatre mouvements. Aucune n'enseigne un logiciel précis : les formations à Odoo, Dolibarr, aux tableurs ou à l'automatisation relèvent d'autres domaines du <a href=\"/formations/\">catalogue des formations</a>. Ici, on apprend à décider, à organiser, à conduire et à mesurer, quel que soit l'outil retenu. C'est aussi ce qui rend ces formations utiles à une association de dix personnes comme à une PME de deux cents salariés.",
                "Ce domaine ne remplace pas une mission de conseil. Si vous souhaitez qu'un consultant établisse le diagnostic et rédige la feuille de route à votre place, la page <a href=\"/services/consultant-digitalisation\">consultant en digitalisation</a> décrit cette prestation, et celle de la <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> la mise en œuvre des chantiers. Les formations, elles, rendent vos équipes capables de faire ce travail et de le poursuivre sans prestataire.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formation du domaine choisir, selon la personne à former ?",
            'legende' => "Les six formations du domaine, leur public, ce qu'elles apprennent et ce qu'il faut savoir avant de commencer. Les deux premières ont déjà leur fiche détaillée ; les quatre autres sont citées par leur nom.",
            'entetes' => ['Formation', 'Pour qui', "Ce qu'elle apprend à faire", 'Prérequis'],
            'lignes'  => [
                ["<a href=\"/formations/strategie-transformation-digitale\">Stratégie de transformation digitale</a>", "Comité de direction, associés, directeurs métiers d'une PME, d'une ONG ou d'un établissement", "Construire et défendre une feuille de route numérique : état des lieux, chantiers classés, coût sur plusieurs années, indicateurs, pilotage", "Connaître les chiffres de l'entreprise ou pouvoir les obtenir ; aucun niveau technique"],
                ["<a href=\"/formations/digitaliser-son-entreprise\">Digitaliser son entreprise pas à pas</a>", "Dirigeant d'une petite structure qui décide seul : commerce, atelier, cabinet, école, association", "Choisir un premier chantier, sécuriser ses comptes, être joignable et payé, facturer, tenir un budget numérique annuel", "Utiliser un smartphone et une messagerie ; venir avec ses propres comptes"],
                ["Digitalisation des processus métiers", "Responsables de service, contrôleurs internes, référents qualité", "Dessiner un processus tel qu'il se déroule, repérer ressaisies et attentes, puis choisir l'outillage adapté", "Maîtriser le processus étudié ; disposer de quelques exemples réels de dossiers"],
                ["Conduite du changement numérique", "Managers, référents, responsables RH et équipes projet chargés d'un déploiement", "Faire adopter un nouvel outil : annonce, formation des utilisateurs, relais internes, traitement des résistances, mesure de l'usage", "Un outil choisi ou en cours de déploiement, et une date de mise en service"],
                ["Chef de projet digital et product owner", "Personne désignée pour piloter un projet numérique côté client, avec ou sans expérience de projet", "Tenir le rôle : besoin écrit, liste priorisée des demandes, relation avec le prestataire, recette avant mise en service", "Un projet réel ou imminent sur lequel travailler pendant la formation"],
                ["Décider avec les données (data literacy)", "Dirigeants, cadres et responsables qui lisent des tableaux de bord", "Lire un chiffre, en questionner la source, repérer une comparaison trompeuse et formuler une décision argumentée", "Savoir ouvrir un tableur ; apporter un rapport ou un tableau de bord utilisé chez vous"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quels signes reconnaît-on la formation dont votre organisation a besoin ?",
            'intro' => "Les demandes arrivent rarement sous la forme d'un intitulé de formation. Elles arrivent sous la forme d'une gêne. Voici les situations les plus courantes, et la formation qui y répond le mieux.",
            'items' => [
                ['titre' => "« Nous avons dix idées et aucun ordre »", 'texte' => "Chaque directeur défend son projet, les budgets se décident au cas par cas, et personne ne sait dire ce qui sera fait cette année. C'est un besoin de feuille de route : la formation stratégie de transformation digitale s'adresse au comité qui doit trancher."],
                ['titre' => "« Je fais tout moi-même et je ne sais pas par où commencer »", 'texte' => "Le dirigeant d'une structure de quelques personnes n'a ni comité ni service informatique. Il lui faut une méthode courte, des outils peu coûteux et un seul chantier à la fois : c'est l'objet de la formation pour digitaliser son entreprise pas à pas."],
                ['titre' => "« Un même dossier passe par cinq mains et trois fichiers »", 'texte' => "Les erreurs naissent des ressaisies, les délais des attentes entre deux validations. Avant de choisir un logiciel, il faut voir le circuit réel : la formation à la digitalisation des processus métiers apprend à le dessiner puis à l'outiller."],
                ['titre' => "« L'outil est payé, mais l'équipe continue sur Excel »", 'texte' => "Le paramétrage est souvent correct ; ce qui manque, c'est la préparation des utilisateurs, des relais dans les services et une date de fin pour l'ancien support. La formation à la conduite du changement numérique traite exactement ce point."],
                ['titre' => "« On m'a confié le projet du nouveau site, et je n'ai jamais piloté de projet »", 'texte' => "Rédiger le besoin, arbitrer les demandes des collègues, recevoir les livraisons du prestataire et dire si elles sont conformes : ce rôle s'apprend. La formation chef de projet digital et product owner prépare la personne désignée."],
                ['titre' => "« Nos réunions débattent des chiffres au lieu de décider »", 'texte' => "Deux rapports donnent deux résultats, une moyenne cache un écart, un graphique exagère une hausse. La formation décider avec les données apprend à questionner un chiffre et à en tirer une décision, sans devenir analyste."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quel parcours suivre selon votre profil ?",
            'intro' => "Un parcours enchaîne deux ou trois formations dans un ordre qui a du sens, avec quelques semaines entre elles pour appliquer. Voici les enchaînements conseillés pour les cinq profils qui consultent le plus ce domaine ; ils s'adaptent au premier échange.",
            'items' => [
                ['titre' => "Dirigeant d'une petite structure", 'texte' => "Commencer par <a href=\"/formations/digitaliser-son-entreprise\">digitaliser son entreprise pas à pas</a>, qui pose le socle : comptes, fichiers, paiement, facture, budget. Après trois mois d'usage, la formation décider avec les données aide à lire ses ventes et ses marges sans attendre le comptable. Si l'IA générative fait partie des questions, la formation <a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a> vient ensuite, une fois les outils de base en place."],
                ['titre' => "Comité de direction", 'texte' => "Le point de départ est la <a href=\"/formations/strategie-transformation-digitale\">stratégie de transformation digitale</a>, suivie par tout le comité. Les chantiers retenus désignent la suite : un responsable de chantier part en formation chef de projet digital, les managers concernés en conduite du changement. Quand l'IA figure dans la feuille de route, le comité complète avec <a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a> pour fixer usages, budget et règles."],
                ['titre' => "Responsable de service", 'texte' => "La digitalisation des processus métiers vient en premier : le responsable cartographie le circuit qu'il connaît le mieux et repart avec un projet d'outillage chiffré. S'il veut confier certaines étapes à l'IA, la formation <a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a> prolonge ce travail en traitant le contrôle humain. La conduite du changement prépare ensuite la mise en service auprès de son équipe."],
                ['titre' => "Chef de projet", 'texte' => "La formation chef de projet digital et product owner donne le rôle, les documents et les réflexes de recette. Elle gagne à être suivie au début du projet, avant la signature avec le prestataire si possible. La conduite du changement la complète pour préparer les utilisateurs, et la digitalisation des processus aide à écrire un besoin fondé sur le circuit réel plutôt que sur les souhaits de chacun."],
                ['titre' => "Équipe qui doit adopter un nouvel outil", 'texte' => "Ici, la formation se fait d'abord sur l'outil lui-même, avec les fiches du catalogue consacrées au logiciel concerné. Côté transformation digitale, la conduite du changement s'adresse aux managers et aux relais qui accompagnent l'équipe, de préférence quatre à six semaines avant la mise en service. Une séance de décider avec les données peut suivre, pour que l'équipe lise les tableaux de bord que le nouvel outil produit."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Faut-il suivre les six formations, et dans quel ordre les enchaîner ?",
            'paragraphes' => [
                "Non. La plupart des organisations n'en suivent qu'une ou deux, parfois trois sur une année. Le domaine n'est pas un cursus : c'est une boîte où l'on prend ce qui répond au problème du moment. Une structure de six personnes n'a aucune raison de former un product owner ; un comité qui a déjà une feuille de route solide n'a pas besoin de la refaire, mais peut avoir besoin de chefs de projet formés pour la réaliser.",
                "Quand plusieurs formations s'enchaînent, l'ordre suit une logique simple : décider, puis organiser, puis faire adopter, puis mesurer. Former les managers à la conduite du changement avant que la direction ait choisi l'outil revient à préparer les équipes à un changement dont personne ne connaît encore la forme. À l'inverse, apprendre à lire des indicateurs avant d'avoir des données fiables produit surtout de la frustration.",
                "Entre deux formations, laissez passer quelques semaines. C'est pendant ces semaines que la feuille de route se confronte au budget réel, que le processus redessiné se teste sur de vrais dossiers, que les premiers utilisateurs butent sur l'outil. La formation suivante part alors de ce qui s'est réellement passé, et non de ce qui était prévu. Le premier échange sert justement à placer ces jalons dans votre calendrier.",
                "Deux formations peuvent aussi être combinées en une session sur mesure, par exemple la digitalisation des processus et la conduite du changement pour une équipe qui remplace son outil de gestion. Le devis le prévoit alors comme un seul programme, avec des exercices qui portent sur le même projet du début à la fin.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels prérequis et quel matériel prévoir avant une formation du domaine ?",
            'intro' => "Aucune de ces formations ne demande de compétence technique. Ce qu'elles demandent, c'est de la matière réelle : vos chiffres, vos dossiers, votre projet. Plus la préparation est sérieuse, plus les exercices ressemblent à votre quotidien.",
            'items' => [
                ['titre' => "Des personnes qui ont le pouvoir de décider", 'texte' => "Une formation de direction sans le dirigeant, ou une formation de chef de projet sans la personne qui pilotera vraiment, produit des documents que personne n'appliquera. Le cadrage vérifie que les bonnes personnes sont inscrites, et qu'elles peuvent être présentes sur toute la durée."],
                ['titre' => "Un cas réel par participant", 'texte' => "Un processus à redessiner, un projet à piloter, un outil à faire adopter, un tableau de bord à lire : chacun arrive avec le sien. Les exemples d'école ne servent qu'à illustrer une méthode ; le travail se fait sur votre organisation."],
                ['titre' => "Des chiffres et des documents préparés", 'texte' => "Selon la formation : liste des logiciels et abonnements payés, volumes traités chaque mois, exemples de dossiers anonymisés, rapports mensuels, cahier des charges en cours. La liste exacte est envoyée après le cadrage, avec le temps de préparation estimé."],
                ['titre' => "Un ordinateur et un tableur", 'texte' => "Un ordinateur portable par participant ou par binôme, avec Excel, Google Sheets ou LibreOffice Calc. Les exercices se font sur des modèles modifiables que vous gardez, sans logiciel payant à acheter pour la formation."],
                ['titre' => "Une salle ou une connexion fiable", 'texte' => "En présentiel : une salle au calme, un écran et un tableau blanc. À distance : une connexion stable, une caméra et un micro par personne, et de préférence deux écrans pour suivre et travailler en même temps. Une coupure prévisible se règle par un calendrier découpé en séances courtes."],
                ['titre' => "Des règles de confidentialité posées d'avance", 'texte' => "Les exercices touchent à des chiffres sensibles : marges, salaires, litiges, données de clients. Ce qui peut être montré en groupe, ce qui doit être anonymisé et ce qui ne sort pas de la salle se décide au cadrage, surtout en session réunissant plusieurs entreprises."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, inter-entreprises, à distance ou hybride : quel format convient à quel besoin ?",
            'legende' => "Les quatre formats proposés pour toutes les formations du domaine. Le choix se fait au premier échange, selon le nombre de personnes, la distance et la confidentialité des sujets.",
            'entetes' => ['Format', 'Quand le choisir', 'Ce qu\'il permet', 'Point d\'attention'],
            'lignes'  => [
                ['Intra-entreprise', "Plusieurs personnes d'une même organisation, sujets internes ou sensibles", "Travailler sur les vrais chiffres et les vrais désaccords, construire un document commun", "Bloquer l'agenda de tous les participants ; un absent clé fragilise le résultat"],
                ['Inter-entreprises', "Un ou deux participants par structure, petites organisations, dirigeants isolés", "Partager le coût, comparer ses pratiques avec celles d'autres structures", "Les exemples restent anonymisés ; les documents internes ne circulent pas"],
                ['À distance', "Participants éloignés, en Afrique de l'Ouest, en Europe ou au Canada", "Séances plus courtes et espacées, travail entre les séances sur ses propres cas", "Connexion, caméra allumée et règles de prise de parole, sinon l'attention se disperse"],
                ['Hybride', "Une partie du groupe sur place, une partie à distance, ou alternance des deux", "Garder un temps fort en présentiel et étaler la suite à distance", "Un animateur doit veiller à ce que les personnes à distance ne deviennent pas spectatrices"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûtent ces formations, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié pour les formations du domaine : chaque prix est fixé sur devis, après un premier échange et un cadrage qui, eux, sont gratuits. Le devis détaille la durée, le nombre de participants, les supports et le suivi prévus.",
            'items'      => [
                ['offre' => 'Formation de direction', 'prix' => 'Sur devis', 'inclus' => ['Cadrage avec le dirigeant', 'Questionnaire préparatoire', 'Travail sur les chiffres de l\'organisation', 'Documents produits remis en fichiers modifiables']],
                ['offre' => 'Formation d\'un service ou d\'une équipe projet', 'prix' => 'Sur devis', 'inclus' => ['Exercices sur un processus ou un projet réel', 'Modèles de documents', 'Évaluation des acquis', 'Attestation de suivi']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Groupe réduit de structures différentes', 'Coût partagé', 'Exemples anonymisés', 'Mêmes supports qu\'en intra']],
                ['offre' => 'Parcours combiné', 'prix' => 'Sur devis', 'inclus' => ['Deux ou trois formations sur un même projet', 'Calendrier étalé sur plusieurs mois', 'Points d\'étape entre les sessions']],
            ],
            'variations' => [
                "La formation choisie et sa durée, ou la combinaison de plusieurs formations en parcours.",
                "Le nombre de participants et de groupes, car les exercices exigent des groupes réduits.",
                "La part de préparation sur mesure : analyse de vos documents, modèles adaptés à votre secteur.",
                "Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.",
                "Le format : présentiel, distance, hybride ou session réunissant plusieurs entreprises.",
                "La durée du suivi prévu après la session et le nombre de points d'étape.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se règle une formation, et un fonds de formation continue peut-il la financer ?",
            'paragraphes' => [
                "Le règlement accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. L'échéancier figure sur le devis. La facture est établie au nom de l'organisation qui commande, avec l'intitulé, les dates, la durée et le nombre de participants, ce que les fonds et les bailleurs demandent en général de retrouver dans un dossier.",
                "Une prise en charge est parfois possible, jamais garantie, et rien n'est promis ici. En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> indique, sur sa page consultée le 5 octobre 2026, que toute entreprise justifiant du paiement régulier des deux taxes peut déposer un plan de formation, qui peut comprendre des actions intra-entreprise ou inter-entreprises ; le règlement n'intervient qu'après le contrôle du Fonds et l'approbation de sa Commission permanente.",
                "Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> propose un guichet dédié au financement du personnel des entreprises et des membres des organisations professionnelles, avec une demande déposée sur sa plateforme en ligne. Au Bénin, les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage (FODEFCA) ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions se vérifient auprès de lui, dossier par dossier.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que depuis le 1er janvier 2022, tout prestataire qui veut accéder à des fonds publics ou mutualisés, dont ceux des opérateurs de compétences (OPCO), doit être certifié Qualiopi. Richard SALANON ne revendique ni cette certification ni aucun agrément de fonds : une entreprise française finance donc ces formations sur son budget. Partout ailleurs, interrogez le fonds par écrit, programme et devis en main, avant de vous engager.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs font échouer une transformation digitale, et quelle formation les prévient ?",
            'intro' => "Les échecs ont rarement une cause technique. Ils tiennent à l'ordre des décisions, au rôle des personnes et à la façon de mesurer. Chaque erreur ci-dessous correspond à une formation du domaine qui apprend à l'éviter.",
            'items' => [
                ['titre' => "Choisir l'outil avant le problème", 'texte' => "Une démonstration convaincante décide de l'achat, puis l'organisation s'adapte à l'outil. La feuille de route remet les objectifs en premier : c'est le cœur de la formation de direction."],
                ['titre' => "Informatiser un circuit absurde", 'texte' => "Trois signatures pour une dépense de faible montant restent trois signatures dans le logiciel, simplement plus lentes à obtenir. Redessiner le processus avant de l'outiller est l'objet de la formation sur les processus métiers."],
                ['titre' => "Couper l'ancien outil sans préparer les équipes", 'texte' => "Le jour de la bascule, chacun découvre l'écran, et les tableurs parallèles réapparaissent dans la semaine. La conduite du changement prépare l'annonce, les relais et la date de fin de l'ancien support."],
                ['titre' => "Laisser le prestataire piloter le projet", 'texte' => "Il réalise, mais il ne peut pas arbitrer entre vos services ni juger si sa livraison répond à votre besoin. Un chef de projet formé côté client tient la liste des priorités et fait la recette."],
                ['titre' => "Tout lancer en même temps", 'texte' => "Une petite structure qui ouvre cinq chantiers n'en termine aucun. Un seul chantier à la fois, avec une date de fin, est la règle de la formation destinée aux dirigeants de petites structures."],
                ['titre' => "Mesurer l'avancement au lieu du résultat", 'texte' => "Des jalons tenus rassurent, mais ne disent pas si les factures partent plus vite. Distinguer indicateur d'activité et indicateur de résultat fait partie de la formation décider avec les données."],
                ['titre' => "Attendre que l'urgence force la main", 'texte' => "Une transformation se finance tant que l'entreprise en a les moyens. L'histoire de <a href=\"/histoires/thomas-cook\">Thomas Cook</a> montre comment un retard d'investissement, accumulé pendant des années, a fini par coûter l'entreprise entière."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi former les équipes avant que la direction ait décidé est-il un piège ?",
            'texte' => "Parce que la formation crée une attente. Des managers formés à la conduite du changement, ou un chef de projet désigné, qui attendent ensuite six mois une décision de la direction perdent ce qu'ils ont appris et la confiance dans le projet. Quand une organisation hésite, la bonne première formation est celle des décideurs ; celles des équipes suivent, calées sur la date réelle de lancement du chantier.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Que disent les statistiques publiques sur les compétences et l'usage des données en entreprise ?",
            'items' => [
                ['valeur' => '60 %', 'libelle' => "Des habitants de l'Union européenne de 16 à 74 ans avaient en 2025 au moins des compétences numériques de base, pour un objectif de 80 % en 2030 (données extraites en juin 2026)", 'source' => 'Eurostat, Towards Digital Decade targets for Europe', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Towards_Digital_Decade_targets_for_Europe'],
                ['valeur' => '71 %', 'libelle' => "Des PME de l'Union atteignaient en 2025 au moins une intensité numérique de base, quand l'objectif fixé pour 2030 dépasse 90 %", 'source' => 'Eurostat, Towards Digital Decade targets for Europe', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Towards_Digital_Decade_targets_for_Europe'],
                ['valeur' => '76 %', 'libelle' => "Des TPE et PME françaises exploitent leurs données pour piloter leur activité, d'abord avec un logiciel métier (51 %) ou un tableur (44 %), selon le baromètre publié le 17 septembre 2026", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '78 %', 'libelle' => "Des TPE et PME françaises ont des projets numériques pour 2026-2027 ; la réforme de la facturation électronique arrive en tête (39 %), la formation est citée par 21 %", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '66 %', 'libelle' => "Des TPE et PME françaises estiment disposer de compétences numériques, en interne ou en externe, en recul de 4 points sur un an (baromètre 2026)", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '36 %', 'libelle' => "De la population africaine utilisait Internet en 2025, contre 74 % de la population mondiale, d'après les chiffres publiés le 15 octobre 2025", 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, factures, données personnelles : que change le contexte local pour choisir et organiser ces formations ?",
            'paragraphes' => [
                "Le premier écart est celui des compétences, en Europe comme en Afrique. D'après Eurostat, dont les données ont été extraites en juin 2026, seuls 60 % des Européens de 16 à 74 ans disposaient en 2025 des compétences numériques de base. Le Baromètre France Num 2026, publié le 17 septembre 2026 par la Direction générale des Entreprises avec le Crédoc, relève que 76 % des TPE et PME françaises pilotent leur activité avec leurs données, mais que 5 % seulement s'appuient pour cela sur l'IA, contre 44 % sur un tableur : savoir lire un chiffre reste la compétence de base, avant tout outil.",
                "En Afrique francophone, la connexion pèse sur le format. L'Union internationale des télécommunications chiffrait le 15 octobre 2025 l'usage d'Internet à 36 % de la population africaine, contre 74 % dans le monde. Pour une formation à distance, cela se traduit par des séances plus courtes, des documents envoyés à l'avance et une solution de repli par téléphone. Pour une feuille de route ou un processus redessiné, cela impose de prévoir des outils qui tolèrent les coupures et s'utilisent sur mobile.",
                "Les obligations fiscales fixent souvent le calendrier. Au Bénin, selon la <a href=\"https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin\">page du gouvernement du 27 février 2020</a>, les entreprises assujetties à la TVA doivent émettre des factures normalisées, et l'oubli coûte dix fois le montant de la facture, avec un minimum d'un million de francs CFA. En France, <a href=\"https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation\">impots.gouv.fr</a> indique que toutes les entreprises doivent recevoir des factures électroniques depuis le 1er septembre 2026, et que les PME et microentreprises devront les émettre à partir du 1er septembre 2027.",
                "Au Sénégal, la <a href=\"https://www.presidence.sn/fr/actualites/new-deal-technologique-une-ambition-nationale-pour-faire-du-senegal-un-leader-de-leconomie-numerique-en-afrique/\">présidence de la République</a> a lancé le 24 février 2025 le New Deal Technologique, avec douze programmes prioritaires et cinquante projets phares, dont un guichet unique entre usagers et administration. Ces échéances publiques sont des chantiers imposés : la formation de direction apprend à les inscrire dans la feuille de route, celle sur les processus à adapter les circuits concernés, celle sur le changement à préparer les équipes à la nouvelle façon de facturer ou de déclarer.",
                "Les données personnelles traversent les six formations, parce que redessiner un processus ou construire un tableau de bord revient à décider qui voit quoi. Au Bénin, elles relèvent de la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>. Le RGPD s'applique, comme l'explique la <a href=\"https://www.cnil.fr/fr/reglement-europeen-protection-donnees\">CNIL</a>, aussi à une organisation établie hors de l'Union qui propose des biens ou des services à des personnes qui s'y trouvent.",
                "Enfin, l'IA entre dans les feuilles de route avec ses propres règles. Selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA de l'article 4 du règlement s'applique depuis le 2 février 2025 ; l'omnibus numérique entré en vigueur mi-juillet 2026 la maintient pour les fournisseurs et les utilisateurs professionnels, sans imposer de niveau « suffisant ». Les formations se tiennent en français, avec des supports possibles en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi suivre une formation en transformation digitale avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Ce qui compte pour ce domaine, c'est qu'il voit la transformation depuis le terrain où elle se réalise. Il développe des applications, paramètre des logiciels de gestion, relie des outils entre eux et mesure ce que coûte vraiment un chantier inscrit dans une feuille de route. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé avec des organisations de " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il n'est certifié par aucun éditeur, ne cite aucun client formé et ne promet aucun résultat chiffré.",
                "Sa façon de former tient en trois règles : partir de votre cas réel, laisser les décisions à ceux qui les porteront, et remettre des documents que vous pourrez reprendre seuls ou confier à n'importe quel prestataire. Une formation ne crée aucune obligation de lui confier la suite. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, et l'organisation commune à toutes les formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. Pour un projet qui demande d'abord une étude, la page <a href=\"/services/audit-etude-de-projet\">audit et étude de projet</a> décrit cette étape.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir pour choisir sa formation en transformation digitale ?",
            'texte' => "Partez de la gêne, pas de l'intitulé : un manque de priorités appelle la formation de direction, un dirigeant seul la démarche pas à pas, un circuit lent le travail sur les processus, un outil boudé la conduite du changement, un projet sans pilote la formation de chef de projet, des chiffres contestés la lecture des données. Formez d'abord ceux qui décident, laissez quelques semaines entre deux sessions, et venez toujours avec un cas réel.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vous hésitez entre deux formations du domaine ?",
            'texte'  => "Décrivez votre organisation, les personnes à former et ce qui vous gêne aujourd'hui. Vous recevez une réponse sous 24 heures, une proposition de formation ou de parcours, puis un devis après un cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Choisir ma formation avec Richard'],
        ],
    ],

    'faq' => [
        ['q' => "Par quelle formation commencer quand on ne sait pas encore ce qu'il faut ?", 'r' => "Par celle des décideurs. Dans une petite structure, c'est la démarche pas à pas destinée au dirigeant ; dans une organisation dotée d'un comité, c'est la formation stratégie de transformation digitale. Les formations destinées aux services et aux équipes se choisissent ensuite, d'après les chantiers retenus."],
        ['q' => "Ces formations enseignent-elles un logiciel précis ?", 'r' => "Non. Elles portent sur la décision, l'organisation, l'adoption et la lecture des chiffres, quel que soit l'outil. Pour apprendre Odoo, Dolibarr, un tableur ou un outil d'automatisation, le catalogue propose des formations dédiées dans d'autres domaines, qui se combinent avec celles-ci."],
        ['q' => "Une entreprise sans service informatique peut-elle suivre ces formations ?", 'r' => "Oui, c'est même le cas le plus fréquent. Aucune connaissance technique n'est demandée. Il faut en revanche connaître son organisation, avoir accès à ses chiffres et venir avec un cas réel. Le prestataire informatique, s'il existe, peut être invité sur une partie de la session."],
        ['q' => "Quelle différence entre ces formations et une mission de conseil en digitalisation ?", 'r' => "En mission de conseil, le consultant établit le diagnostic et rédige les livrables. En formation, ce sont vos équipes qui produisent ces documents, avec une méthode et des modèles, et qui savent ensuite les mettre à jour. Les deux peuvent se combiner : une formation de direction, puis un appui ponctuel sur un chantier."],
        ['q' => "Peut-on regrouper deux formations du domaine en une seule session ?", 'r' => "Oui. Un parcours combiné sur un même projet est souvent plus efficace, par exemple la digitalisation d'un processus suivie de la préparation des équipes à l'outil retenu. Le devis le traite comme un seul programme, avec un calendrier étalé sur plusieurs semaines."],
        ['q' => "Les quatre formations sans fiche détaillée peuvent-elles déjà être demandées ?", 'r' => "Leurs fiches détaillées seront mises en ligne prochainement. Vous pouvez déjà en parler lors du premier échange : le cadrage précise alors le programme, la durée et le format à partir de votre situation, comme pour les deux formations déjà décrites."],
        ['q' => "Les formations se tiennent-elles hors du Bénin ?", 'r' => "Oui. Elles se tiennent dans vos locaux en Afrique francophone ou en Europe quand un déplacement est prévu au devis, ou à distance depuis Cotonou pour des participants en Afrique, en Europe ou au Canada. Le format hybride permet de réunir les deux."],
        ['q' => "Comment le prix est-il fixé ?", 'r' => "Sur devis, après un premier échange et un cadrage gratuits. Le prix dépend de la formation et de sa durée, du nombre de participants et de groupes, de la préparation sur mesure, du lieu, du format et du suivi prévu. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin d'une formation ?", 'r' => "Les documents produits pendant la session, remis en fichiers modifiables, les modèles utilisés, une évaluation des acquis et une attestation de suivi. Ces formations ne délivrent ni diplôme ni titre inscrit à un répertoire officiel."],
        ['q' => "Une formation peut-elle se dérouler en anglais ?", 'r' => "Les séances se tiennent en français. Les supports peuvent être remis en anglais, par exemple pour un conseil d'administration ou un bailleur anglophone ; ce choix se précise au cadrage et figure sur le devis."],
    ],

    'sources' => [
        ['titre' => "Eurostat, Statistics Explained : Towards Digital Decade targets for Europe (données extraites en juin 2026)", 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Towards_Digital_Decade_targets_for_Europe', 'date' => '2026-10-05'],
        ['titre' => "France Num (DGE) et Crédoc, Baromètre France Num 2026 : le numérique et l'intelligence artificielle dans les TPE et PME, publié le 17 septembre 2026", 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => "Union internationale des télécommunications, Facts and Figures 2025 : usage d'Internet (15 octobre 2025)", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)", 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?", 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => "Présidence de la République du Sénégal, New Deal Technologique", 'url' => 'https://www.presidence.sn/fr/actualites/new-deal-technologique-une-ambition-nationale-pour-faire-du-senegal-un-leader-de-leconomie-numerique-en-afrique/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, le règlement général sur la protection des données (RGPD)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['strategie-transformation-digitale', 'digitaliser-son-entreprise', 'digitalisation-processus', 'conduite-du-changement', 'chef-de-projet-digital', 'data-literacy'],
        'services'   => ['consultant-digitalisation', 'digitalisation-d-entreprise', 'audit-etude-de-projet', 'formation-en-entreprise'],
    ],
];
