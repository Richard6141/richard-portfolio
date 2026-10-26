<?php
// ============================================================
// data/metiers/ressources-humaines/cote-d-ivoire.php · Page « formation IA par métier
// et par pays » : ressources humaines en Côte d'Ivoire (statut F).
// Public : responsables RH et gestionnaires de paie. Sources lues le 26/10/2026 :
// Code du travail (loi n° 2015-532 du 20 juillet 2015), compilation de l'UVCI en PDF
// téléchargée et extraite (articles 4, 11.1, 13.23, 13.24, 15.2, 16.1, 31.2, 32.5, 92.2, 92.3) ;
// loi n° 2013-450 du 19 juin 2013, copie hébergée par l'AFAPDP, PDF téléchargé et extrait
// (articles 5, 7, 12, 14, 16, 21, 25, 26, 28, 43) ; page « Employeur » de la CNPS et portail
// e-CNPS ; pages de l'ARTCI et de l'Autorité de protection ; pages du FDFP (plan de formation,
// habilitation, dates clés 2026, présentation) ; DataReportal ; base des fuseaux horaires de l'IANA.
// Aucune somme pour une formation de Richard, aucune prise en charge promise.
// Les montants de salaire plancher et de plafonds affichés par la CNPS ne sont pas repris.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les responsables RH et les gestionnaires de paie en Côte d'Ivoire : préparer annonces, bulletins, déclarations à la CNPS et plan de formation FDFP avec un assistant, en gardant la main sur chaque décision",
    'title'   => "Formation IA pour les RH en Côte d'Ivoire | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie en Côte d'Ivoire : Code du travail, CNPS, ARTCI et FDFP, à distance. Devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant et formateur basé à Cotonou, forme à distance les responsables RH et les gestionnaires de paie des entreprises ivoiriennes à l'IA, sur leurs propres documents : annonces, lettres d'embauche, tableaux de paie, états pour la CNPS, plan de formation. Il n'exerce pas le métier, il apprend à se servir des outils et à contrôler chaque résultat. La formation lit le Code du travail ivoirien, les règles de la CNPS et la loi sur les données personnelles avant le premier exercice. Le prix est fixé sur devis, en FCFA.",
    'publie'  => '2026-12-07',
    'maj'     => '2026-12-07',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les responsables RH et les gestionnaires de paie à l'IA en Côte d'Ivoire, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON forme à distance, depuis Cotonou, les responsables RH et les gestionnaires de paie d'entreprises ivoiriennes à utiliser un assistant d'IA sur leurs propres documents : annonces, lettres d'embauche, tableaux de paie, états pour la CNPS, plan de formation. Il n'exerce pas le métier : il enseigne l'usage des outils et la vérification de ce qu'ils produisent.",
                "Une équipe RH d'Abidjan qui cherche un formateur compare en général des offres de nature différente : le cabinet qui forme à la gestion des ressources humaines, l'école qui propose un cursus sur l'IA, le prestataire qui présente un outil de tri de candidatures. Aucune de ces offres n'est mauvaise en soi, mais elles ne répondent pas à la question d'un responsable RH un lundi matin : que sait faire mon équipe, seule, sur le dossier qui est devant elle, une fois la session terminée ?",
                "Quatre critères permettent de trancher. Le premier est le terrain : les exercices portent-ils sur vos lettres d'embauche, vos tableaux de variables, votre fichier du personnel, ou sur un exemple de démonstration que le formateur a préparé pour une autre entreprise ? Le deuxième est la source du droit : la session renvoie-t-elle au texte ivoirien, ou se contente-t-elle de ce que répond l'assistant, qui s'appuie souvent sur le droit français ? Le troisième est la règle de données, posée avant le premier exercice : quels dossiers de salariés ne quittent jamais l'entreprise, lesquels s'anonymisent d'abord. Le quatrième est la vérification : apprend-on à recalculer un chiffre de paie ou à retrouver une date dans la source avant de signer ?",
                "Une démonstration d'outil impressionne pendant une heure et s'oublie en une semaine. Une formation utile part de deux ou trois tâches que chaque participant répète tous les mois, les reprend avec l'assistant jusqu'à obtenir un résultat qu'il sait contrôler, puis mesure le temps réellement gagné. Richard ne promet aucun gain chiffré à l'avance : il dépend de la tâche, de la qualité des documents de départ et de la régularité de l'usage.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est le numérique dans la fonction RH en Côte d'Ivoire ?",
            'paragraphes' => [
                "Selon DataReportal (Digital 2026), la Côte d'Ivoire comptait 13,4 millions d'internautes fin 2025, soit 40,7 % de la population, et 49,7 millions de connexions mobiles cellulaires, soit 151 % des habitants. DataReportal précise que certaines de ces connexions ne portent que la voix et les messages courts.",
                "L'âge médian était de 18,3 ans et 54,3 % des habitants vivaient en ville. Pour une équipe RH, cela invite à penser que beaucoup de salariés ont un téléphone, sans forcément d'ordinateur ni d'adresse électronique professionnelle, et que les outils choisis doivent s'adapter à ces deux réalités. Le service RH ivoirien travaille déjà en ligne sur plusieurs fronts.",
                "Du côté des organismes, le portail e-CNPS ouvre un compte employeur qui permet, selon sa page d'accueil consultée le 26 octobre 2026, d'accéder directement à ce compte et de faire ses déclarations et ses appels à cotisation en ligne. La page « Employeur » de la CNPS indique de son côté que l'appel à cotisation sociale et le paiement se font en ligne par ce portail. Une gestionnaire de paie d'Abidjan prépare donc, chaque mois ou chaque trimestre, des données qui seront saisies ou transmises dans un outil de l'institution : la qualité du tableau de départ conditionne la qualité de la déclaration.",
                "Le FDFP, de son côté, reçoit les plans de formation des entreprises et publie sur son site une liste des opérateurs de formation habilités ainsi que des procédures d'habilitation. Le responsable RH qui monte un plan manipule donc des tableaux de besoins, des devis, des feuilles de présence et des justificatifs, autant de documents répétitifs que l'assistant aide à structurer. Enfin, le Code du travail admet que l'employeur dispense de produire une partie de son registre papier s'il dispose d'un fichier électronique fiable et à jour : le fichier du personnel numérique n'est pas qu'une commodité, il a une portée juridique.",
                "La fonction RH ivoirienne est ainsi prise entre deux mouvements : les obligations se déclarent de plus en plus par voie électronique, et les assistants d'IA gagnent les bureaux, souvent par des comptes personnels, hors de tout cadre. La formation relie les deux : elle apprend à préparer vite des données exactes pour les portails, et à ne pas exposer à un outil en ligne ce que la loi protège.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que dit le Code du travail ivoirien aux services RH qui s'outillent avec l'IA ?",
            'legende' => "Articles de la loi n° 2015-532 du 20 juillet 2015 portant Code du travail, lus le 26 octobre 2026 dans la compilation 2025 de l'Université virtuelle de Côte d'Ivoire, avec l'ordonnance n° 2021-902 du 22 décembre 2021. Ce sont des repères de lecture, pas un avis juridique : l'interprétation revient au juriste ou à l'inspection du travail.",
            'entetes' => ['Article', 'Ce que dit le texte', 'Geste RH concerné'],
            'lignes'  => [
                ['Article 4', "L'employeur ne peut prendre en considération le sexe, l'âge, l'ascendance nationale, la race, la religion, l'opinion politique et religieuse, l'origine sociale, l'appartenance ou la non-appartenance à un syndicat, la séropositivité ou le handicap pour ses décisions, notamment l'embauchage, la formation professionnelle, la promotion, la rémunération et la discipline.", "Rédaction d'une annonce, grille de lecture des candidatures, consignes données à un assistant : aucune ne s'appuie sur l'un de ces critères."],
                ['Article 11.1', "Les employeurs peuvent embaucher directement leurs travailleurs ou recourir à l'organisme public de placement et aux bureaux ou offices privés de placement.", "Un cabinet de recrutement qui traite des candidatures pour un client agit dans ce cadre ; la question des données se pose pour chacun des deux."],
                ['Article 13.23', "Le travailleur a le droit de bénéficier de la formation professionnelle continue et du perfectionnement que nécessite son emploi, dans un but de promotion sociale et d'adaptation à l'évolution économique et technologique.", "Le plan de formation du service peut inscrire l'usage des outils numériques comme besoin lié à l'emploi."],
                ['Article 15.2', "Le contrat à durée déterminée doit être passé par écrit ou constaté par une lettre d'embauche, sauf les contrats visés à l'article 15.7.", "Un brouillon produit par un assistant ne vaut pas contrat : le texte est relu, complété et signé par les personnes habilitées."],
                ['Article 16.1', "Le règlement intérieur est établi par le chef d'entreprise ; son contenu est limité à l'organisation technique du travail, à la discipline et aux prescriptions d'hygiène et de sécurité.", "Une charte d'usage de l'IA peut en être un complément, mais la forme de sa communication se règle avec le juriste."],
                ['Article 31.2', "Pour un même travail ou un travail de valeur égale, l'employeur assure l'égalité de rémunération entre les salariés, quels que soient leur sexe, leur âge, leur ascendance nationale, leur race, leur religion, leurs opinions, leur origine sociale ou leur affiliation syndicale.", "Tableaux de rémunération et comparaisons préparés avec l'assistant : les critères de comparaison sont fixés par le service, pas par l'outil."],
                ['Article 32.5', "Le paiement du salaire est constaté par une pièce dressée ou certifiée par l'employeur et émargée par chaque intéressé, ou par deux témoins s'il est illettré, conservée comme les pièces comptables ; un bulletin individuel est délivré au moment du paiement, et le paiement est mentionné sur un registre manuel ou électronique.", "Bulletin de paie, état de paiement, pièce justificative d'une avance versée par mobile money : chaque flux laisse une trace que le service sait retrouver."],
                ['Article 92.2', "Tout employeur déclare dans les délais prescrits ses salariés aux institutions de prévoyance sociale, sous peine de dommages et intérêts.", "Le tableau de déclaration des embauches et des départs est tenu à jour, avec une date de première activité pour chaque salarié."],
                ['Article 92.3', "L'employeur tient à jour un registre d'employeur en trois fascicules, peut être dispensé de produire les deux premiers s'il dispose d'un fichier électronique fiable et à jour, et conserve le registre pendant les cinq ans suivant la dernière mention.", "Le fichier électronique du personnel est soumis aux mêmes exigences d'exactitude et de conservation que le registre papier."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que demande la CNPS à l'employeur, et où un tableau ou un assistant peuvent-ils aider ?",
            'intro' => "Les repères ci-dessous viennent de la page « Employeur » de la CNPS et du portail e-CNPS, lus le 26 octobre 2026. Le salaire plancher, les plafonds et les taux se confirment auprès de la CNPS le jour du calcul : ils se paramètrent dans le logiciel du gestionnaire de paie et ne se demandent jamais à un assistant.",
            'items' => [
                ['titre' => "La déclaration du travailleur, dès le premier jour", 'texte' => "Selon la page de la CNPS, la déclaration d'un salarié se fait le premier jour de l'embauche, entendu comme le premier jour d'activité, sur une fiche signée de l'employeur et cachetée pour les entreprises, accompagnée d'une pièce d'identité, de photographies et des pièces d'état civil demandées. Le numéro attribué est unique et permanent, même en cas de changement d'employeur. Un tableau d'accueil des nouveaux embauchés, avec la liste des pièces à réunir, évite les déclarations tardives."],
                ['titre' => "Un rythme de versement qui dépend de l'effectif", 'texte' => "Les cotisations se versent chaque mois si l'entreprise emploie 20 salariés ou plus, chaque trimestre en dessous, dans les 15 premiers jours qui suivent le mois ou le trimestre échu. La CNPS indique que le versement après cette période expose l'employeur à des pénalités, dont une majoration de 0,050 % par jour de retard, que son conseil d'administration peut réduire ou annuler en cas de bonne foi ou de force majeure."],
                ['titre' => "La part salariale prélevée à chaque paie", 'texte' => "La page décrit l'assurance vieillesse comme partagée entre l'employeur et le salarié, et précise que les prestations familiales, la maternité et les accidents du travail sont à la charge de l'employeur seul, avec un taux d'accidents du travail variable selon le secteur d'activité. Le tableau de paie du service sépare donc ces lignes, et la somme des parts salariales se rapproche chaque mois de la ligne comptable correspondante."],
                ['titre' => "La DISA, avant la fin du premier trimestre", 'texte' => "La déclaration individuelle des salaires annuels doit parvenir à la CNPS au plus tard à la fin du premier trimestre de l'année suivante. Son défaut donne lieu, selon la page, à une pénalité de 10 % du montant total mensuel des cotisations dues. Pour un service paie, c'est l'occasion de vérifier que douze mois de variables, salarié par salarié, donnent bien le total annuel."],
                ['titre' => "Les départs et les fermetures", 'texte' => "Chaque départ d'un salarié, quel qu'en soit le motif, donne lieu à une fiche de déclaration de cessation d'emploi adressée à la CNPS. Un tableau des sorties, relié au registre du personnel, évite qu'un ancien salarié continue d'apparaître dans la masse déclarée."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que demandent la loi n° 2013-450 et l'ARTCI pour les données des salariés et des candidats ?",
            'paragraphes' => [
                "Le 26 octobre 2026, la page de l'ARTCI sur la protection des données cite la loi n° 2013-450 du 19 juin 2013, et le site de l'Autorité de protection présente l'ARTCI dans ce rôle. La copie publiée par l'AFAPDP permet de lire plusieurs articles qui touchent un service RH.",
                "Cette copie ne porte ni numéro ni date : ils viennent de la page des lois de l'ARTCI, qui liste le texte sous le même titre. Les articles ci-dessous sont repris de la copie, à titre de repères de lecture et non d'avis juridique.",
                "L'article 14 considère le traitement comme légitime si la personne concernée donne expressément son consentement préalable, avec des dérogations limitées, dont le respect d'une obligation légale et l'exécution d'un contrat. L'article 16 demande des finalités déterminées, des données adéquates, pertinentes et non excessives, et une conservation qui n'excède pas la période nécessaire ; l'article 43 renvoie les durées à l'Autorité de protection, selon les finalités. L'article 28 énumère ce que le responsable du traitement dit à la personne au plus tard lors de la collecte : son identité, les finalités, les catégories de données, les destinataires, le droit d'accès et de rectification, la durée de conservation et l'éventualité d'un transfert vers un pays tiers.",
                "L'article 21 interdit, sous peine d'emprisonnement et d'amende, la collecte et le traitement de données qui révèlent l'origine raciale, ethnique ou régionale, les opinions politiques, les convictions religieuses ou philosophiques, l'appartenance syndicale, la vie sexuelle ou l'état de santé, avec des exceptions énumérées. Pour un recruteur, la conséquence pratique est simple : ces informations ne se recopient pas dans un tableau de candidatures, et encore moins dans un assistant en ligne. L'article 25 prévoit, en son second alinéa, qu'aucune décision administrative ou privée impliquant une appréciation sur un comportement humain ne peut avoir pour seul fondement un traitement automatisé donnant une définition du profil ou de la personnalité de l'intéressé.",
                "L'article 5 soumet le traitement à une déclaration préalable auprès de l'Autorité de protection, et l'article 7 liste les traitements soumis à autorisation préalable, parmi lesquels les données biométriques, les données médicales et le transfert envisagé vers un pays tiers. L'article 26 ne permet un tel transfert que si l'État de destination assure un niveau de protection supérieur ou équivalent, et après autorisation de l'Autorité. L'article 12 prévoit enfin un correspondant à la protection des données, qui ne peut être sanctionné par l'employeur du fait de ses missions. Coller la fiche d'un salarié dans un assistant hébergé à l'étranger est donc une question de transfert, à examiner avec ce correspondant ou avec le juriste, pas un détail technique. La formation ne tranche rien : elle apprend à poser la question avant d'envoyer le document.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches RH confier à l'IA en Côte d'Ivoire, avec quels outils et quels contrôles ?",
            'legende' => "Répartition travaillée en séance sur les documents de l'entreprise, avec des données de personnes remplacées par des données fictives. Chaque ligne associe une tâche du service, un outil, le résultat attendu et, dans la dernière colonne, ce que le participant contrôle avant d'utiliser le résultat.",
            'entetes' => ['Tâche du service', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Annonce de recrutement pour un poste à Abidjan', 'Assistant d\'IA à partir de la fiche de poste', 'Une annonce lisible, avec missions, profil et modalités de candidature', 'Relecture ligne à ligne contre la liste de l\'article 4 du Code du travail : âge, sexe, origine sociale, religion ou autre critère de la liste'],
                ['Lettre d\'embauche ou CDD', 'Assistant avec le modèle validé par le juriste', 'Un brouillon qui reprend les clauses habituelles de l\'entreprise', 'Les dates, la fonction, la rémunération et la durée sont vérifiées sur la décision d\'embauche ; l\'écrit est signé par les personnes habilitées (article 15.2)'],
                ['Tableau des variables de paie du mois', 'Excel ou Google Sheets en tableau structuré', 'Un classeur avec listes de choix et contrôles d\'écart d\'un mois sur l\'autre', 'Deux bulletins sont recalculés à la main avec les paramètres validés du logiciel de paie'],
                ['Données de déclaration CNPS, mensuelles ou trimestrielles', 'Tableur relié au tableau de paie', 'Un état par salarié dont le total égale la masse salariale du mois', 'L\'effectif déclaré est rapproché du registre ; la saisie sur e-CNPS est faite par la personne qui détient l\'accès employeur'],
                ['Préparation de la DISA', 'Tableur annuel par salarié', 'Douze mois de rémunérations par personne, avec le total annuel', 'La somme des mois est comparée à l\'annuel, et chaque entrée ou sortie de l\'année est justifiée par une date'],
                ['Registre d\'employeur sous forme de fichier électronique', 'Tableur à droits restreints ou logiciel de gestion', 'Un fichier à jour avec contrat, poste, salaire et congés de chaque salarié', 'Qui peut lire et modifier, copie de sauvegarde datée, conservation cinq ans après la dernière mention'],
                ['Plan de formation à déposer au FDFP', 'Tableur partagé avec le service formation', 'Besoins, actions, coûts, dates et pièces à fournir, dans un seul classeur', 'Les dates limites de l\'exercice sont reportées depuis le site du FDFP ; le statut de l\'opérateur est confirmé par écrit auprès du Fonds'],
                ['Réponse aux candidats non retenus', 'Assistant avec un modèle maison', 'Un message courtois, adapté au poste, sans motif discriminatoire', 'Le message ne cite aucun détail personnel ; chaque candidat reçoit une réponse, quelle qu\'elle soit'],
                ['Attestation de travail', 'Modèle et fusion de données depuis le fichier du personnel', 'Un document rempli sans ressaisie', 'La signature reste à la personne habilitée ; les données sont vérifiées à chaque émission'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain une équipe RH d'Abidjan rencontre-t-elle, et comment la formation s'y adapte-t-elle ?",
            'paragraphes' => [
                "La première contrainte est la connexion. Les séances se déroulent en visioconférence, et un participant dont la liaison faiblit ne doit pas perdre la matinée. Les documents d'exercice sont envoyés à l'avance et téléchargés sur chaque poste, et une solution de repli est prévue en cas de coupure.",
                "Les séances sont courtes plutôt que longues, et les consignes importantes sont préparées hors ligne pour être collées en une fois.",
                "La deuxième est l'équipement. Un ordinateur par participant reste préférable pour travailler un tableau de paie ou relire une lettre d'embauche. Certains collègues du service travaillent surtout sur téléphone, sans adresse électronique professionnelle. La formation en tient compte dans les exercices. WhatsApp ne sert pas à transmettre un bulletin de paie, un certificat médical ou une sanction.",
                "La troisième tient au droit. Un assistant répond en bon français, mais ses réponses sur le droit du travail peuvent refléter des textes français, avec leurs articles, leurs délais et leurs institutions, alors qu'une entreprise d'Abidjan applique le Code du travail ivoirien et s'adresse à la CNPS et au FDFP. La discipline enseignée est simple : toute règle, tout délai et tout taux se retrouvent dans le texte ivoirien ou sur la page de l'institution, jamais dans la réponse d'un assistant.",
                "La quatrième concerne les logiciels réellement utilisés. Le service RH d'une PME travaille souvent sur Excel ou Google Sheets, le portail e-CNPS et un logiciel de paie acquis auprès d'un éditeur ou d'un cabinet. La formation s'appuie sur ces outils, sans en imposer d'autres. Quand l'entreprise verse une avance ou une prime par mobile money, elle garde aussi la pièce qui constate le paiement, comme l'exige l'article 32.5 du Code du travail pour le salaire : le circuit de preuve est vu en séance, avec un tableau de suivi.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour un service RH d'Abidjan ou de l'intérieur du pays ?",
            'legende' => "Tous les formats se donnent à distance, en visioconférence, depuis Cotonou. Abidjan est à l'heure GMT (UTC+0) toute l'année, Cotonou à UTC+1 : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou. Effectifs et durées sont ceux de la fiche de la formation IA en entreprise.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir pour une équipe RH'],
            'lignes'  => [
                ['Atelier découverte', "Une demi-journée", "12 personnes au plus", "Une direction ou un service qui veut voir l'assistant à l'œuvre sur une annonce et un tableau de paie fictifs, avant de décider d'aller plus loin"],
                ['Formation complète', "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Un service où recrutement, paie et formation se pratiquent déjà avec des assistants, sans règle commune ni contrôle systématique"],
                ['Séances en visioconférence', "5 à 6 séances de 2 h 30", "8 personnes au plus", "Équipe répartie entre le siège à Abidjan et des agences à Bouaké, Yamoussoukro ou San Pedro : des séances plus courtes tolèrent mieux une liaison irrégulière"],
                ['Session mutualisée', "1 à 2 jours", "Une ou deux personnes par structure", "Responsables RH de petites entreprises ou d'un même réseau, avec des exercices sur des dossiers fictifs ou publics"],
                ['Accompagnement mensuel', "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Étendre l'usage à une nouvelle tâche, comme la DISA ou le plan de formation, une fois la première acquise"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se déroule une session à distance avec un formateur installé à Cotonou ?",
            'paragraphes' => [
                "La session se prépare en deux temps. Un court questionnaire envoyé avant la formation recense les postes, les logiciels de paie et de tableur en place, l'effectif et les tâches qui prennent le plus de temps. Un ou deux entretiens de cadrage fixent ensuite les tâches cibles : deux ou trois par groupe, pas dix.",
                "Les exercices partent de vos modèles de lettre d'embauche, de vos tableaux de variables, de votre canevas de plan de formation, avec des données de personnes remplacées par des données fictives. Ce remplacement, que le service effectue lui-même, est déjà un premier exercice de protection des données.",
                "Pendant la session, la démonstration reste brève et le temps de manipulation long : chacun travaille sur son poste, avec son compte, en partageant son écran quand le formateur doit corriger une consigne. Les documents sont téléchargés à l'avance. Un canal direct reste ouvert le mois suivant pour les questions d'application, et chaque participant reçoit une attestation nominative de fin de formation. La dernière demi-journée sert d'épreuve : chaque participant exécute seul sa tâche cible, chronomètre en main, de la consigne à la vérification.",
                "Le décalage d'une heure avec Cotonou laisse presque toute la journée de travail en commun. Les formats décrits ici se donnent tous à distance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels scénarios de séance un service RH ivoirien travaille-t-il, avec quel contrôle avant usage ?",
            'intro' => "Les quatre scénarios ci-dessous reposent sur des dossiers fictifs. Pour chacun, le texte indique la situation, la consigne donnée à l'assistant et ce que le participant contrôle avant d'utiliser le résultat. Aucun dossier réel de salarié ou de candidat n'est manipulé en séance.",
            'items' => [
                ['titre' => "Scénario 1 : l'annonce d'un poste de comptable dans une société de négoce fictive de Marcory", 'texte' => "Situation : le directeur demande une annonce pour mardi et la fiche de poste tient en six lignes. Consigne donnée : rédiger une annonce de 150 mots à partir de la fiche, sans ajouter de condition qui n'y figure pas, avec les missions, le profil et la façon de candidater. Contrôle : le participant relit chaque phrase contre la liste de l'article 4 du Code du travail. Si l'assistant a écrit « jeune diplômé de moins de 30 ans » ou « de sexe masculin », la mention est retirée, et la consigne est corrigée pour que la formule ne revienne pas."],
                ['titre' => "Scénario 2 : le tableau mensuel pour la CNPS d'une entreprise fictive de 24 salariés", 'texte' => "Situation : la gestionnaire de paie a un tableau de variables, un état de paie et une liste des entrées et sorties du mois. Consigne donnée : construire un classeur qui sépare la part salariale de la part patronale, regroupe les lignes par salarié et affiche une cellule de contrôle comparant le total détaillé à la masse salariale. Contrôle : l'effectif du tableau est rapproché du registre ; la date de première activité des nouveaux embauchés est notée ; le rythme de versement est rappelé (mensuel à partir de 20 salariés, trimestriel en dessous, dans les 15 premiers jours), et les taux ne sont jamais fournis par l'assistant mais reportés depuis la page de la CNPS."],
                ['titre' => "Scénario 3 : le plan de formation d'une entreprise fictive de 60 salariés à déposer au FDFP", 'texte' => "Situation : le service recueille des besoins variés, de l'intégration de deux embauchés à une formation de chef d'équipe, en passant par un perfectionnement sur le tableur. Consigne donnée : classer chaque besoin selon les catégories lues sur la page du FDFP (intégration, perfectionnement, promotion, reconversion), indiquer le type d'action (interne, intra, interentreprises, étranger) et lister les pièces à réunir. Contrôle : les dates limites de l'exercice sont reportées depuis le site du Fonds ; l'action liée à l'utilisation de l'ordinateur, que le Fonds range parmi les actions à dispositions particulières, fait l'objet d'une question écrite ; l'habilitation de chaque prestataire est vérifiée."],
                ['titre' => "Scénario 4 : le tri de quinze candidatures pseudonymisées pour un poste de chargé de clientèle", 'texte' => "Situation : un cabinet de recrutement fictif d'Abidjan reçoit quinze dossiers pour une banque cliente. Consigne donnée : résumer chaque dossier en cinq lignes selon une grille écrite avant la lecture (expérience, outils, langues, disponibilité), sans classer les candidats ni mentionner l'origine, la région, la religion ou l'état de santé. Contrôle : le participant compare chaque résumé au dossier d'origine, vérifie qu'aucune information protégée par l'article 21 de la loi de 2013 n'a été recopiée, et prend lui-même la décision de convoquer, conformément à l'article 25 sur les décisions fondées sur le seul traitement automatisé."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter cette formation pour un service RH ivoirien, avec le FDFP ?",
            'paragraphes' => [
                "Le FDFP, qui oriente et met en œuvre la politique de formation professionnelle continue, gère la taxe d'apprentissage (0,4 % de la masse salariale) et la taxe additionnelle à la formation professionnelle continue (1,2 %). Selon sa page « Plan de formation », toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan.",
                "Page consultée le 26 octobre 2026. Le plan est composé des actions qu'elle se propose de réaliser pour ses salariés, et le règlement intervient après le suivi et le contrôle du Fonds et l'approbation de sa Commission permanente. Aucune prise en charge n'est promise : le budget se prévoit sans financement, qui se déduit s'il est accordé.",
                "Deux points se règlent par écrit avec le Fonds avant de construire un plan sur l'usage de l'IA. D'abord, la page range les actions de formation associées à l'utilisation de l'ordinateur parmi les actions soumises à dispositions particulières : il appartient au Fonds de dire si une formation à l'usage d'un assistant en relève. Ensuite, l'habilitation. Selon la page sur les procédures d'habilitation, elle est une procédure administrative qui rend les structures éligibles aux financements du FDFP, prononcée pour un an ; elle s'impose aux opérateurs privés qui prétendent à ces financements, « à l'exception des structures basées hors Côte d'Ivoire ». Les critères listés portent notamment sur l'existence légale, l'existence physique constatée et la capacité formative. Que cette exception s'applique à un formateur établi à Cotonou, et à quelles conditions, seul le Fonds peut le dire : demandez sa réponse écrite avant de signer un devis.",
                "Le calendrier compte. La page des dates clés de l'exercice 2026, lue le 26 octobre 2026, fixait au 31 octobre la date limite de financement des plans de formation, au 13 novembre celle des dossiers de demande de remboursement pour 2025 et au 31 décembre celle des demandes de renouvellement d'habilitation. Pour une session en 2027, le service interroge le Fonds sur le calendrier de l'exercice suivant. Quelle que soit la décision du Fonds, Richard fournit le programme, les objectifs, les feuilles de présence et l'attestation de fin de formation que le dossier demande.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour un service RH en Côte d'Ivoire ?",
            'intro'      => "Aucun tarif n'est publié : le prix est fixé sur devis, en FCFA, après l'échange de cadrage, et le devis détaille chaque poste. Les abonnements aux assistants restent au nom de l'entreprise et ne font pas partie du prix de la formation ; les formules et les limites des éditeurs évoluent, et leur page officielle fait foi.",
            'items'      => [
                ['offre' => 'Atelier découverte RH', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée pour le service', 'Une annonce et un tableau de paie fictifs travaillés ensemble', 'Règle de données de base pour les dossiers de salariés']],
                ['offre' => 'Formation complète RH', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices sur vos modèles, avec des données fictives', 'Épreuve finale sur la tâche cible et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Corrections et nouvelles tâches (DISA, plan de formation)']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes : recrutement, paie et formation peuvent se travailler séparément.",
                "Le nombre de demi-journées et le choix des modules.",
                "Le temps de préparation des exercices sur vos modèles de lettres, de tableaux et de plans, et leur remplacement par des données fictives.",
                "Le nombre de sites à relier à distance : Abidjan seul, ou aussi des agences de l'intérieur du pays.",
                "Le logiciel à couvrir : tableur seul, ou aussi un logiciel de paie déjà en place.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services RH ivoiriens qui démarrent avec l'IA ?",
            'intro' => "Ces erreurs ne viennent pas d'un manque de sérieux : elles naissent de la pression des échéances, quand la déclaration doit partir ou qu'un poste doit être pourvu pour lundi. Chaque erreur est suivie du geste qui l'évite, relié à un texte ivoirien ou à une page d'institution lue le 26 octobre 2026.",
            'items' => [
                ['titre' => "Demander à l'assistant un taux ou un plafond de cotisation", 'texte' => "Un assistant répond avec assurance, parfois avec des valeurs d'un autre pays ou d'une autre année. Les taux, le salaire plancher et les plafonds se lisent sur la page de la CNPS le jour du calcul, et se paramètrent une fois dans le logiciel de paie."],
                ['titre' => "Écrire « jeune » ou « de moins de 30 ans » dans une annonce", 'texte' => "L'article 4 du Code du travail écarte l'âge parmi les critères de décision pour l'embauchage. L'assistant reproduit volontiers des formules d'annonces courantes, d'où une relecture systématique contre la liste de l'article."],
                ['titre' => "Coller un dossier de candidat complet dans un assistant gratuit", 'texte' => "Un numéro de téléphone, une photographie, une région d'origine, un état de santé : tout peut partir chez l'éditeur, depuis un compte personnel. L'article 21 de la loi de 2013 interdit la collecte de certaines de ces informations, et l'article 7 range au rang des traitements soumis à autorisation ceux qui portent sur des identifiants de même nature qu'un numéro national, dont les numéros de téléphone. Un résumé pseudonymisé rend le même service."],
                ['titre' => "Laisser l'assistant classer les candidats", 'texte' => "Le résumé devient un classement, puis une liste que personne ne remet en cause. L'article 25 refuse qu'une décision privée impliquant une appréciation sur un comportement humain repose sur le seul traitement automatisé d'un profil. La grille écrite d'avance et le décideur nommé évitent l'impasse."],
                ['titre' => "Confondre le rythme mensuel et le rythme trimestriel", 'texte' => "La CNPS distingue les entreprises de 20 salariés ou plus, qui versent chaque mois, de celles de moins de 20, qui versent chaque trimestre. Une entreprise qui franchit le seuil change de rythme sans que personne ne le remarque : le tableau de l'effectif porte une alerte à l'approche de 20."],
                ['titre' => "Oublier que la DISA a une date", 'texte' => "La déclaration individuelle des salaires annuels se transmet au plus tard à la fin du premier trimestre de l'année suivante. Un classeur annuel par salarié, alimenté chaque mois, évite la reconstitution en urgence de douze mois de paie."],
                ['titre' => "Bâtir un plan de formation sans avoir demandé au Fonds", 'texte' => "L'action liée à l'ordinateur relève de dispositions particulières, l'habilitation d'un prestataire basé hors du pays se confirme par écrit, et les dates limites changent chaque exercice. Un plan envoyé sans ces vérifications risque d'être refusé, ou payé sans prise en charge."],
                ['titre' => "Laisser le fichier du personnel dans un tableur ouvert à tous", 'texte' => "Le fichier électronique qui tient lieu de registre d'employeur doit être fiable, à jour et conservé cinq ans après la dernière mention. Un lien de partage ouvert à toute personne qui le possède l'expose. Les droits se donnent nommément et se revoient à chaque départ."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre service RH ivoirien avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des professionnels des ressources humaines à ces outils. Il n'exerce pas le métier : il apporte la pratique des assistants d'IA et des automatisations, et construit les exercices à partir des modèles de chaque service. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il n'est ni juriste en droit social, ni gestionnaire de paie, ni correspondant à la protection des données, et il n'est certifié par aucun éditeur d'IA : les textes sont lus dans leur version publiée, les questions de droit sont renvoyées au conseil de l'entreprise.",
                "Richard a déjà travaillé avec des entreprises en Côte d'Ivoire. Il compte plus de " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Les projets ivoiriens de son portfolio sont des sites et des applications, tous réalisés en sous-traitance pour Digital Développement : Afro Joy'ce, une commande de repas en ligne avec paiement Wave et suivi par WhatsApp ; INOVIS Côte d'Ivoire, la refonte du site d'un cabinet d'études et de conseil ; AT Consulting International, un catalogue de dix-sept formations avec une fiche d'évaluation des stagiaires remplie en ligne ; Laura Cosmetics, une boutique en deux devises et deux zones de livraison. Ils sont décrits sur la page des <a href=\"/realisations/\">réalisations</a>. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et l'organisation des sessions pour plusieurs services sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre service RH ivoirien à l'IA ?",
            'texte'  => "Indiquez la ville, l'effectif de l'entreprise, les postes concernés, les tâches qui prennent le plus de temps et les logiciels déjà en place : vous recevez une réponse sous 24 heures, puis un programme adapté et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon service RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mon service RH à l'IA en Côte d'Ivoire sans que l'équipe se déplace ?", 'r' => "Richard SALANON forme à distance depuis Cotonou, en visioconférence, avec un décalage d'une heure seulement. Les séances portent sur vos documents RH, à Abidjan comme dans une agence de l'intérieur du pays. Les formats décrits sur cette page se donnent tous à distance."],
        ['q' => "Un assistant d'IA peut-il calculer la paie ou les cotisations CNPS ?", 'r' => "Non. Il aide à organiser un tableau, à expliquer une formule ou à rédiger une note aux salariés, mais les taux, le salaire plancher et les plafonds se lisent sur la page de la CNPS le jour du calcul et se paramètrent dans le logiciel de paie. La formation apprend à recalculer deux bulletins à la main avant de valider."],
        ['q' => "Peut-on faire trier des candidatures par une IA en Côte d'Ivoire ?", 'r' => "Pour résumer des dossiers pseudonymisés, oui, avec une grille écrite avant la lecture. Pour classer ou écarter des candidats, non : l'article 25 de la loi n° 2013-450 refuse qu'une décision privée impliquant une appréciation sur un comportement humain repose sur le seul traitement automatisé d'un profil, et l'article 4 du Code du travail liste les critères interdits à l'embauche."],
        ['q' => "La loi ivoirienne sur les données interdit-elle d'utiliser un assistant pour des dossiers de salariés ?", 'r' => "Elle encadre ce qu'on y envoie. L'article 26 ne permet le transfert vers un pays tiers qu'avec un niveau de protection équivalent et l'autorisation de l'Autorité de protection, et l'article 21 interdit la collecte de certaines données sensibles. On anonymise donc d'abord, ou on garde le dossier dans l'entreprise. Votre juriste ou votre correspondant tranche les cas sensibles."],
        ['q' => "Faut-il déclarer le fichier du personnel à l'Autorité de protection ?", 'r' => "L'article 5 de la loi soumet le traitement à une déclaration préalable, et l'article 7 liste les traitements soumis à autorisation préalable, dont les données biométriques et médicales. Quel formulaire s'applique dépend du traitement : l'Autorité publie la déclaration préalable, l'autorisation et le transfert hors de l'espace CEDEAO. Le juriste ou le correspondant tranche ; Richard n'est pas conseil juridique."],
        ['q' => "Un fichier électronique peut-il remplacer le registre d'employeur papier ?", 'r' => "L'article 92.3 du Code du travail permet de dispenser l'employeur de produire les deux premiers fascicules du registre s'il dispose d'un fichier électronique fiable et à jour. Le registre se conserve cinq ans après la dernière mention. La formation apprend à tenir ce fichier avec des droits d'accès nominatifs, mais sa conformité se confirme avec l'inspection du travail ou le juriste."],
        ['q' => "À quel rythme verser les cotisations à la CNPS ?", 'r' => "Selon la page « Employeur » de la CNPS, chaque mois pour une entreprise de 20 salariés ou plus et chaque trimestre en dessous, dans les 15 premiers jours qui suivent le mois ou le trimestre échu. Le retard expose à une majoration de 0,050 % par jour. Vérifiez la règle en vigueur auprès de la CNPS avant de paramétrer vos tableaux."],
        ['q' => "Le FDFP peut-il financer cette formation animée par Richard ?", 'r' => "Peut-être, mais rien n'est promis. Le FDFP examine les plans de formation d'entreprises à jour de leurs deux taxes, et exige l'habilitation des opérateurs privés, à l'exception des structures basées hors de Côte d'Ivoire. Demandez au Fonds une réponse écrite pour un opérateur établi à Cotonou, ainsi que son avis sur les actions liées à l'ordinateur. Richard fournit le programme et les justificatifs."],
        ['q' => "Quelles dates limites du FDFP faut-il connaître ?", 'r' => "La page des dates clés de l'exercice 2026 fixait au 31 octobre la date limite de financement des plans de formation, au 13 novembre celle des demandes de remboursement 2025 et au 31 décembre celle du renouvellement des habilitations. Pour une session en 2027, interrogez le Fonds sur le calendrier de l'exercice suivant."],
        ['q' => "Quelle est la différence d'heure entre Abidjan et Cotonou pour les séances ?", 'r' => "Une heure. Abidjan est à l'heure GMT (UTC+0) toute l'année, Cotonou à UTC+1 : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou. Aucun changement saisonnier ne modifie cet écart."],
        ['q' => "Combien coûte la formation, et comment la régler depuis la Côte d'Ivoire ?", 'r' => "Le prix est fixé sur devis, en FCFA, après le cadrage. Il dépend du nombre de participants, des modules, du temps de préparation sur vos modèles et du nombre de sites. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces ; le mode se fixe au devis."],
        ['q' => "Que reçoivent les participants à la fin de la formation ?", 'r' => "Les supports de la session dans des formats modifiables, les exercices et leurs corrigés, et une attestation nominative de fin de formation. Ce n'est ni un diplôme ni une certification d'éditeur. Un canal direct reste ouvert le mois suivant pour les questions d'application."],
    ],

    'sources' => [
        ['titre' => "Université virtuelle de Côte d'Ivoire, Code du travail ivoirien, édition 2025 (loi n° 2015-532 du 20 juillet 2015, avec l'ordonnance n° 2021-902 du 22 décembre 2021)", 'url' => 'https://www.uvci.online/portail/externes/documents/textes_officiels/Le_code_du_travail_ivoirien_-_20251.pdf', 'date' => '2026-10-26'],
        ['titre' => "AFAPDP, copie de la loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel", 'url' => 'https://www.afapdp.org/wp-content/uploads/2018/05/Cote-Ivoire-LOI-SUR-LA-PROTECTION-DES-DONNEES-A-CARACTERE-PERSONNEL.pdf', 'date' => '2026-10-26'],
        ['titre' => "ARTCI, protection des données", 'url' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-26'],
        ['titre' => "ARTCI, textes juridiques : lois", 'url' => 'https://artci.ci/textes-juridiques/lois/', 'date' => '2026-10-26'],
        ['titre' => "Autorité de protection (ARTCI), formulaires de déclaration, d'autorisation et de transfert", 'url' => 'https://www.autoritedeprotection.ci/documents/', 'date' => '2026-10-26'],
        ['titre' => "CNPS, page Employeur : procédure, cotisations, régularisation annuelle (DISA), sanctions", 'url' => 'https://www.cnps.ci/employeur', 'date' => '2026-10-26'],
        ['titre' => "IPS-CNPS, portail e-CNPS des employeurs et des assurés", 'url' => 'https://e.cnps.ci/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, plan de formation", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, procédures d'habilitation des opérateurs de formation", 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, informations et dates clés de l'exercice 2026", 'url' => 'https://fdfp.ci/informations-dates-cles-fdfp-exercice-2026/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, présentation (taxe d'apprentissage et taxe additionnelle)", 'url' => 'https://fdfp.ci/presentation-du-fdfp/', 'date' => '2026-10-26'],
        ['titre' => "DataReportal, Digital 2026 : Côte d'Ivoire", 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-26'],
        ['titre' => "IANA, base des fuseaux horaires : zones d'Afrique (Africa/Abidjan)", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus', 'gouvernance-ia'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
