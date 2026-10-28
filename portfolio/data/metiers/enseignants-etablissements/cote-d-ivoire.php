<?php
// ============================================================
// data/metiers/enseignants-etablissements/cote-d-ivoire.php · Page « formation IA par métier et par pays » :
// enseignants et établissements, Côte d'Ivoire.
// Sources lues le 26/10/2026 : projet de formation à l'IA de l'enseignement technique (Burkina 24),
// projet DCNPEE phase 2 et atelier des inspecteurs (Fratmat via AllAfrica), résultats CEPE (AIP), BEPC
// (Fratmat via AllAfrica) et BAC (Koaci), liste nationale des manuels (Osiris), conférence de l'INPHB (AIP),
// projet d'université de l'IA (We Are Tech Africa), connexion des lycées (Ecofin), connectivité rurale
// (Ecofin, UIT), DataReportal, ARTCI et Autorité de protection, FDFP.
// Statut F du catalogue : faits.php ne contient aucune mention d'enseignants formés ; la page n'écrit donc
// pas « a déjà formé des enseignants » et s'en tient aux personnes formées tous publics confondus.
// Articles de la loi n° 2013-450 : non lus à la source, jamais cités. Aucune certification attribuée à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour enseignants et directeurs d'établissement en Côte d'Ivoire : préparer les cours, les devoirs et les compositions plus vite, garder la main sur la note et protéger les données des élèves",
    'title'   => "Formation IA enseignants en Côte d'Ivoire | Richard SALANON",
    'meta'    => "Formation IA pour enseignants et directeurs d'établissement en Côte d'Ivoire : préparer les cours, le BEPC et le BAC, et protéger les données des élèves.",
    'en_bref' => "Richard SALANON, formateur basé à Cotonou, peut former à distance les enseignants, les directeurs d'établissement et les formateurs ivoiriens à l'usage de l'intelligence artificielle, sur leurs propres cours, devoirs et documents de gestion. Les séances partent des programmes et des examens du pays, du CEPE au BAC. L'enseignant vérifie chaque contenu et pose lui-même la note. Le prix est fixé sur devis, en FCFA, et aucune prise en charge n'est promise.",
    'publie'  => '2026-12-10',
    'maj'     => '2026-12-10',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les enseignants ivoiriens à l'IA, et comment choisir entre une démonstration d'outil et une vraie formation ?",
            'paragraphes' => [
                "Les enseignants ivoiriens ont aujourd'hui deux voies : les dispositifs publics, ouverts aux personnels de l'État, et les formateurs privés, sollicités par un établissement ou par un enseignant seul. Richard SALANON se place dans la seconde voie : il forme à distance, depuis Cotonou, à l'usage des outils d'IA sur les documents réels de l'équipe.",
                "Les dispositifs publics existent et se renforcent. Le 17 septembre 2026, au lycée technique d'Abidjan, le ministère délégué chargé de l'Enseignement technique a lancé, avec l'appui technique de l'UNESCO, un projet visant près de 3 000 enseignants, encadreurs pédagogiques et chefs d'établissement. Un enseignant concerné par ce projet n'a donc pas besoin d'un prestataire pour la base. Le prestataire privé répond à un autre besoin : travailler sur la séquence de lundi, le devoir de la semaine prochaine, le bulletin du trimestre ou l'échéancier des familles de son établissement.",
                "Pour distinguer une démonstration d'outil d'une formation sur les tâches du métier, quatre questions suffisent. La session part-elle de votre progression annuelle et de vos sujets, ou d'exemples américains traduits ? Apprend-on à contrôler une date, une formule ou une règle d'accord avant de distribuer un support ? Le formateur précise-t-il, avant le premier exercice, quelles données d'élèves ne doivent jamais entrer dans un assistant ? Une personne peut-elle poser une question lorsque, trois semaines plus tard, un cas réel se présente ?",
                "Une formation pour ce public ne remplace ni l'inspection, ni l'animateur pédagogique, ni le projet d'établissement. Richard n'est pas enseignant : il forme à l'usage des outils, et le contenu disciplinaire reste celui du manuel et du programme officiels. Chaque exercice est construit avec les participants, du primaire à l'enseignement technique, du directeur d'école privée au formateur d'un centre.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en sont l'IA et le numérique dans l'éducation en Côte d'Ivoire en 2026 ?",
            'paragraphes' => [
                "Le numérique éducatif est devenu une politique publique suivie par plusieurs ministères. La Stratégie nationale de digitalisation de l'éducation (SNDECI) couvre la période 2024-2028, et un atelier de pré-validation du cadre conceptuel et du plan d'échantillonnage de son étude de référence s'est tenu à Yamoussoukro du 20 au 22 octobre 2025, avec le soutien de l'Organisation internationale de la Francophonie. La formation à l'IA des personnels en est l'une des applications visibles en 2026.",
                "Le projet DCNPEE, consacré aux compétences numériques des personnels d'encadrement et d'enseignement, a été conduit par le ministère de l'Éducation nationale, de l'Alphabétisation et de l'Enseignement technique avec la GIZ et l'UNESCO. Sa première phase, d'octobre 2024 à juin 2025, a formé 699 personnels, dont 640 enseignants de sciences. La phase 2 a été lancée le 5 mars 2026 à Abidjan-Plateau, avec l'objectif d'une extension nationale. Du 4 au 7 mai 2026, 75 inspecteurs pédagogiques issus de 25 régions ont suivi à Yamoussoukro une formation sur le numérique et l'intelligence artificielle.",
                "Le projet d'enseignement technique annoncé en septembre 2026 prévoit une phase pilote de 1 000 enseignants de la zone d'Abidjan, du 1er octobre au 30 décembre 2026, avant une extension vers 3 000 bénéficiaires d'ici 2027. Les modules annoncés vont des fondamentaux de l'IA à l'évaluation des acquis, en passant par l'ingénierie pédagogique, les travaux pratiques et l'éthique et la sécurité des données. Une formation privée n'entre donc pas en concurrence avec cette offre : elle prolonge ces notions sur les tâches quotidiennes de chaque établissement.",
                "Du côté de l'enseignement supérieur, le colloque « Intelligence artificielle et sciences de données appliquées à l'éducation » s'est ouvert le 9 avril 2026 à l'INPHB de Yamoussoukro, à l'intention notamment des informaticiens et mathématiciens de l'Université Félix Houphouët-Boigny, de l'ESATIC et de l'Université de Korhogo. Le directeur général de la Recherche et de l'Innovation du ministère de l'Enseignement supérieur et de la Recherche scientifique y a mis en avant l'éthique, la protection des données et l'accès équitable. Une dépêche du 2 juin 2026 indique en outre que le Plan national de développement 2026-2030 prévoit une université publique dédiée à l'IA.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels programmes publics de formation numérique et d'IA concernent les enseignants, et qu'apportent-ils ?",
            'legende' => "Les dispositifs publics existent déjà pour les bases : un enseignant ivoirien peut d'abord s'informer auprès de sa hiérarchie. Le tableau, établi le 26 octobre 2026 à partir de la presse et des communiqués, indique ce que chacun couvre ; la formation privée porte sur les tâches propres à chaque établissement.",
            'entetes' => ['Dispositif', 'Date et public', 'Ce qui est annoncé', 'Ce qu\'une formation sur vos documents ajoute'],
            'lignes'  => [
                ['DCNPEE, phase 1', "Octobre 2024 à juin 2025 : 699 personnels dont 640 enseignants de sciences", "Usages pédagogiques des technologies, avec la GIZ et l'UNESCO", "Les tâches de gestion et d'évaluation des autres disciplines"],
                ['DCNPEE, phase 2', "Lancée le 5 mars 2026 ; 75 inspecteurs formés du 4 au 7 mai 2026", "Extension nationale, accompagnement plus structuré", "Le travail quotidien de l'enseignant sur ses séquences et ses devoirs"],
                ["Projet IA de l'enseignement technique", "Lancé le 17 septembre 2026 ; phase pilote de 1 000 enseignants du 1er octobre au 30 décembre 2026", "Fondamentaux de l'IA, ingénierie pédagogique, évaluation, éthique et sécurité des données", "Des exercices sur les rapports de stage, les travaux pratiques et les supports de votre filière"],
                ['Liste nationale des manuels 2026-2027', "Publiée pour la rentrée 2026-2027", "Préscolaire, primaire et secondaire général", "Vérifier qu'un support généré reste conforme au manuel de la liste"],
                ["Colloque IA et sciences de données de l'INPHB", "Ouvert le 9 avril 2026 à Yamoussoukro", "Réflexion de chercheurs sur l'IA dans l'enseignement supérieur", "Des gestes concrets pour l'enseignant qui prépare son cours magistral et ses travaux dirigés"],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Que changent le CEPE, le BEPC et le BAC pour un enseignant qui prépare ses élèves avec l'IA ?",
            'items' => [
                ['valeur' => '85,76 %', 'libelle' => "Taux de réussite national au CEPE 2026 : 512 106 admis sur 597 171 candidats, résultats proclamés le 1er juin 2026", 'source' => 'AIP', 'url' => 'https://www.aip.ci/?p=387198'],
                ['valeur' => '52,17 %', 'libelle' => "Taux de réussite au BEPC 2026 : 306 001 admis sur 586 587 candidats présents, résultats annoncés le 16 juin 2026 par la Direction des examens et concours", 'source' => 'Fratmat, via AllAfrica', 'url' => 'https://fr.allafrica.com/stories/202606160409.html'],
                ['valeur' => '40,60 %', 'libelle' => "Taux de réussite au BAC 2026, contre 40,15 % en 2025, résultats annoncés le 6 juillet 2026", 'source' => 'Koaci', 'url' => 'https://www.koaci.com/article/2026/07/06/cote-divoire/societe/cote-divoire-proclamation-des-resultats-du-bac-2026-40-60-declares-admis-contre-4015-en-2025_198304.html'],
                ['valeur' => '3 590', 'libelle' => "Établissements secondaires recensés en 2024 ; le gouvernement a annoncé en mai 2025 l'objectif de relier plus de 1 000 lycées et établissements de santé au haut débit d'ici fin 2025", 'source' => 'Ecofin Agency', 'url' => 'https://www.ecofinagency.com/news-digital/2205-46937-cote-d-ivoire-to-link-1-000-schools-clinics-to-high-speed-internet-this-year'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelle place pour l'IA dans la préparation des élèves aux examens nationaux, du CEPE au BAC ?",
            'paragraphes' => [
                "L'IA sert à préparer les élèves, jamais à remplacer les examens : les sujets officiels relèvent de la Direction des examens et concours, et la correction reste humaine. Pour un enseignant, l'outil produit des exercices d'entraînement, des corrigés à vérifier et des grilles de relecture.",
                "Les chiffres de 2026 rappellent l'enjeu. Près de 600 000 candidats se sont présentés au CEPE et au BEPC chacun, et le BAC a vu son taux de réussite se situer à 40,60 %. Dans une classe de troisième aux effectifs chargés, un professeur de mathématiques ou de français ne peut pas préparer un entraînement individualisé pour chaque élève. Il peut en revanche demander à un assistant dix variantes d'un exercice de factorisation ou de grammaire, avec les corrigés, puis contrôler chaque énoncé avant de le distribuer.",
                "La formation insiste sur trois règles. Aucun sujet d'examen en cours de préparation ne se confie à un assistant dans un compte personnel. Chaque exercice généré est refait à la main par l'enseignant avant la photocopie, car une valeur erronée copiée en cinquante exemplaires coûte une séance entière. Enfin, l'entraînement reste ancré dans les programmes en vigueur et dans le manuel de la liste nationale, et non dans des exemples venus d'un autre système scolaire.",
                "Un cas particulier mérite l'attention : l'élève qui prépare le BAC avec un assistant sur son téléphone. L'enseignant n'a pas à le lui interdire en bloc ; il peut lui demander de rapporter la question posée, la réponse obtenue et sa propre correction. Cette consigne rend l'usage visible et apprend à douter d'une réponse trop fluide.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles encadrent les données des élèves et l'usage d'un outil d'IA dans un établissement ivoirien ?",
            'paragraphes' => [
                "Le texte de référence est la loi n° 2013-450 du 19 juin 2013 portant protection des données à caractère personnel, que l'ARTCI cite sur sa page consacrée à la protection des données, consultée le 26 octobre 2026. Cette page précise que les transferts de données personnelles hors de Côte d'Ivoire sont soumis à des restrictions et à des garanties particulières. Pour la portée exacte de ces règles dans votre établissement, adressez-vous à votre juriste ou à l'Autorité de protection.",
                "L'Autorité de protection publie sur son site les formulaires utiles : déclaration préalable, demande d'autorisation préalable, demande de transfert hors de l'espace CEDEAO, demande d'autorisation d'un système de vidéosurveillance et demande d'autorisation d'un dispositif biométrique. Pour une école, la question pratique est de savoir si le fichier des élèves, les photos ou les relevés de notes sortent de l'établissement, et vers quel service.",
                "La formation en tire des règles de travail simples, sans interprétation juridique. Une liste de classe avec noms, matricules et téléphones des parents ne se colle pas dans un assistant en ligne. Les copies servant aux exercices sont anonymisées par l'établissement, ou rédigées pour l'occasion. Une photo d'élève ne se publie qu'avec l'accord écrit de sa famille, quel que soit le support, et une image retouchée par un générateur appelle la même prudence.",
                "Un autre texte d'organisation touche la préparation des supports. La liste nationale des manuels et supports didactiques de l'année 2026-2027, publiée pour le préscolaire, le primaire et le secondaire général, indique qu'aucun établissement public ou privé ne peut imposer un manuel qui n'y figure pas. Un enseignant qui prépare une fiche avec un assistant s'assure donc qu'elle s'appuie sur le manuel de la liste, et ne présente pas comme manuel un texte généré.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'un enseignant ou d'un directeur ivoirien confier à l'IA, avec quel outil, et que contrôle l'humain ?",
            'legende' => "L'assistant prépare un premier jet, l'adulte responsable vérifie et décide. Le tableau est travaillé en séance sur les documents de l'établissement, avec les assistants que l'équipe utilise déjà : ChatGPT, Claude, Gemini ou Copilot, ou le tableur de l'école.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Contrôle humain'],
            'lignes'  => [
                ['Fiche de préparation à partir de la progression annuelle', "Assistant d'IA", "Une séquence avec objectifs, déroulé et trace écrite, adaptée au niveau de la classe", "L'enseignant vérifie chaque notion dans le manuel de la liste nationale"],
                ['Exercices d\'entraînement au BEPC et au BAC', "Assistant d'IA et traitement de texte", "Plusieurs variantes d'un même exercice avec corrigé, prêtes à photocopier", "Chaque énoncé et chaque corrigé est refait à la main avant diffusion"],
                ["Grille de correction d'une dissertation ou d'une composition", "Assistant d'IA", "Barème détaillé par critère, formulé en phrases courtes pour les élèves", "L'enseignant ajuste les points et pose lui-même la note et l'appréciation"],
                ['Version simplifiée d\'un texte du programme', "Assistant d'IA", "Texte à la portée des lecteurs fragiles, avec quelques mots expliqués", "Un collègue relit ; les mots en langue nationale sont validés par un locuteur"],
                ['Moyennes du trimestre et bulletins', "Tableur (Excel ou Google Sheets)", "Moyennes pondérées par coefficient et tableau prêt à imprimer", "Une seconde personne refait trois moyennes avant impression"],
                ['Échéancier de scolarité et relances dans une école privée', "Tableur, assistant pour les messages", "Une ligne par famille, des reçus numérotés, un message de relance poli et individuel", "La direction décide des remises et des délais ; aucune liste de familles n'est diffusée"],
                ["Rapport de stage ou dossier technique d'un lycée professionnel", "Assistant d'IA pour la grille de lecture", "Une grille qui sépare ce que l'élève a observé de ce qu'il a recopié", "Soutenance orale de dix minutes ; le soupçon se traite par un entretien"],
                ['Cours magistral et travaux dirigés à l\'université', "Assistant d'IA, outil de diaporama", "Plan de séance, exercices progressifs, questions d'auto-évaluation", "L'enseignant-chercheur contrôle les références avant de citer un auteur"],
                ['Lettre aux parents sur la réunion, la sortie ou les absences', "Assistant d'IA", "Un message en français simple, au ton de l'établissement", "Le directeur relit et signe ; aucun nom d'élève n'est transmis à l'outil"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain une formation à l'IA doit-elle prendre en compte dans les établissements ivoiriens ?",
            'paragraphes' => [
                "La connexion varie fortement selon l'endroit où l'on enseigne, et la formation est conçue pour cette inégalité. Selon DataReportal (Digital 2026), la Côte d'Ivoire comptait 13,4 millions d'internautes fin 2025, soit 40,7 % de la population, et 49,7 millions de connexions mobiles, soit 151 % des habitants. L'UIT relevait en 2024 que 25,4 % des habitants des zones rurales utilisaient Internet, contre 57 % en ville, selon un article d'Ecofin du 24 juin 2026.",
                "Le même article indique que l'ANSUT prévoit de relier 300 localités rurales supplémentaires en 2026, après 500 villages équipés depuis 2025. Pour les lycées, le gouvernement a annoncé en mai 2025 la connexion au haut débit de plus de 1 000 lycées et établissements de santé d'ici la fin de 2025. Le calendrier de réalisation et la liste des établissements se demandent au ministère : la formation ne suppose aucune connexion d'établissement et s'appuie sur ce que les participants ont réellement.",
                "Concrètement, les gestes enseignés fonctionnent sur un téléphone, et les consignes se préparent hors ligne avant d'être collées en une fois. Les documents d'exercice sont envoyés à l'avance, pour être téléchargés sur chaque appareil avant la séance. Le fichier de notes, la progression annuelle et un devoir déjà donné suffisent pour commencer. Un ordinateur reste préférable pour les tableaux, et le poste de la salle des professeurs est parfois partagé : on évite alors de laisser ouvert un compte personnel.",
                "Dans bien des classes, le français est la langue de l'école et non celle de la maison. Les assistants écrivent par défaut un français de France : un support qui comporte une phrase en langue nationale se fait relire par un locuteur avant d'être distribué. Pour les logiciels, la formation s'adapte à ce que l'école utilise réellement, du tableur de l'économat à la suite bureautique gratuite, sans en imposer un.",
                "Les séances se calent sur le rythme scolaire : fin d'après-midi, samedi matin, périodes de congés ou journées pédagogiques. Pour les coupures de courant ou de réseau, une solution de repli est prévue en cas de coupure, sur les documents déjà téléchargés par chaque participant.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour des enseignants et des directeurs depuis Abidjan, Bouaké ou l'intérieur du pays, et avec quel décalage horaire ?",
            'legende' => "Toutes les séances se tiennent à distance, depuis Cotonou. Le décalage est d'une heure : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou, toute l'année. Les durées et effectifs sont ceux de la fiche de la formation « IA en entreprise ».",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', "Un directeur d'école privée qui veut voir l'outil sur ses propres documents avant de décider"],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', "Une équipe d'enseignants d'un même cycle qui veut une méthode partagée pour ses séquences, ses devoirs et ses bulletins"],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', "Enseignants dispersés entre Abidjan et l'intérieur du pays, ou formateurs de plusieurs centres"],
                ['Session mutualisée', '1 à 2 jours', "Plusieurs structures d'un même réseau", "Petites écoles privées d'un quartier ou d'un réseau confessionnel ; exercices sur des documents fictifs ou publics"],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', "Le groupe déjà formé", "Ancrer les habitudes après la rentrée ou le premier trimestre, avec un canal direct pour les questions"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels scénarios de séance un enseignant ivoirien travaille-t-il, et que vérifie-t-il avant d'utiliser le résultat ?",
            'legende' => "Les trois dossiers ci-dessous sont fictifs : aucun nom, aucun établissement et aucun élève réel n'y figure. Chaque scénario part d'une situation de classe ou de direction, donne une consigne précise à l'assistant et fixe ce que le participant contrôle avant de s'en servir.",
            'entetes' => ['Situation fictive', 'Consigne donnée à l\'assistant', 'Ce que le participant contrôle'],
            'lignes'  => [
                ["Un professeur de français de troisième, dans un collège public d'Abidjan, prépare un entraînement au BEPC sur le texte argumentatif, pour des classes très chargées.", "« Propose quatre sujets de rédaction d'un niveau de troisième, ancrés dans la vie d'un collégien ivoirien, avec une grille de six critères et un exemple de plan, sans reprendre un sujet d'examen existant. »", "Les sujets correspondent au programme de la classe ; la grille est lisible par un élève ; aucun extrait n'est attribué à un auteur sans vérification dans le manuel."],
                ["La directrice d'une école primaire privée à Bouaké veut tenir l'échéancier des scolarités de cent vingt familles fictives, payées par tranches, sans exposer personne.", "« À partir d'un tableau fictif de familles, de montants et de dates, construis un échéancier avec le solde de chaque famille et trois modèles de message de relance poli, sans nom d'enfant. »", "Les soldes sont recalculés sur trois lignes à la main ; la direction décide de toute remise ; aucune liste de retardataires n'est affichée ni envoyée à un groupe."],
                ["Un enseignant d'un lycée technique corrige des rapports de stage dont plusieurs se ressemblent ; il soupçonne un texte généré sans pouvoir le prouver.", "« Prépare une grille de soutenance de dix minutes qui permet de vérifier qu'un élève comprend son rapport : questions sur les tâches faites, les outils vus en stage et les difficultés rencontrées. »", "La grille s'appuie sur ce que l'élève a vécu en entreprise ; aucun score d'outil de détection n'est utilisé comme preuve ; l'entretien et la décision restent collégiaux."],
                ["Un enseignant-chercheur d'une université publique prépare une séance de travaux dirigés de statistique pour un amphithéâtre nombreux.", "« Propose cinq exercices progressifs avec des données fictives sur le prix du cacao, les corrigés détaillés et trois questions d'auto-évaluation. »", "Les calculs sont refaits sur le tableur ; les données fictives sont signalées comme telles ; les références citées sont retrouvées dans la bibliographie du cours."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter cette formation dans un établissement ivoirien, public ou privé ?",
            'paragraphes' => [
                "Aucune prise en charge n'est promise : le financement dépend du statut de l'établissement. Un établissement public passe par sa hiérarchie et ses règles d'achat. Un établissement privé peut interroger le Fonds de Développement de la Formation Professionnelle (FDFP) ou prévoir la dépense sur son budget de fonctionnement.",
                "Selon la page « plan de formation » du FDFP, consultée le 26 octobre 2026, toute entreprise qui justifie du paiement régulier des deux taxes requises peut déposer un plan de formation. Les actions éligibles sont l'intégration des nouveaux embauchés, le perfectionnement, la promotion et la reconversion. Le règlement intervient après le suivi et le contrôle des services du Fonds et l'approbation de sa Commission permanente. La page ne dit pas si une école privée, une association gestionnaire ou un enseignant du secteur public peuvent déposer un plan : la question se pose au Fonds par écrit.",
                "La page du FDFP sur les procédures d'habilitation indique que l'habilitation s'impose aux opérateurs de formation privés qui prétendent bénéficier de ses financements, à l'exception des structures basées hors de Côte d'Ivoire, et que les structures publiques de formation sont habilitées d'office. Que cette exception s'applique à un formateur établi au Bénin, et sous quelles conditions, seul le Fonds peut le dire. Richard fournit le programme, les objectifs, les feuilles de présence et l'attestation de fin de formation que le dossier demande.",
                "La page des dates clés de l'exercice 2026 du FDFP fixe notamment au 31 octobre la date limite de financement des plans de formation, au 13 novembre celle des demandes de remboursement de 2025 et au 31 décembre celle du renouvellement d'habilitation. Pour une session en 2027, interrogez le Fonds sur le calendrier de l'exercice suivant.",
                "Pour budgéter sans financement, le plus simple est de partir du devis : un atelier d'une demi-journée pour la direction, puis une formation d'équipe, éventuellement mutualisée entre plusieurs écoles d'un même réseau. Les frais d'abonnement aux assistants ne sont pas obligatoires pour apprendre la méthode, et les offres gratuites suffisent pour commencer ; les formules et leurs limites évoluent, et la page officielle de chaque éditeur fait foi.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour des enseignants ou un établissement ivoirien ?",
            'intro'      => "Aucune somme n'est affichée : chaque formule est chiffrée sur devis, en FCFA, après le premier échange, et le devis détaille ce qu'il comprend. Le règlement peut se faire par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements éventuels aux assistants restent au nom de l'établissement.",
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée avec la direction ou une équipe", "Exercices sur vos propres séquences et documents", "Règles sur les données des élèves"]],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', "Exercices sur vos devoirs, bulletins et échéanciers", "Épreuve finale chronomètre en main et attestation"]],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée par mois pendant trois mois", "Reprise des cas rencontrés en classe ou à l'économat", "Canal direct pour les questions"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par cycle, par discipline ou par établissement.",
                "La durée retenue : atelier, deux jours ou accompagnement sur trois mois.",
                "Le temps de préparation des séquences, des devoirs et des modèles de votre établissement.",
                "Le niveau de départ de l'équipe et les outils déjà en place.",
                "Les abonnements aux assistants, facturés par l'éditeur dans sa devise.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on chez les enseignants et les établissements ivoiriens qui démarrent avec l'IA ?",
            'intro' => "Les erreurs ci-dessous naissent de l'urgence d'une rentrée, de classes chargées ou d'un outil adopté parce qu'il était gratuit ce jour-là. Chacune se prévient dès la première séance.",
            'items' => [
                ['titre' => "Préparer un sujet d'examen dans un compte personnel", 'texte' => "Un sujet de composition ou de BEPC blanc rédigé dans un compte gratuit part avec le compte. Les sujets en préparation se travaillent sur un compte géré par l'établissement, ou hors de l'outil."],
                ['titre' => "Distribuer un exercice généré sans l'avoir refait", 'texte' => "Une valeur numérique fausse, une règle d'accord inventée ou un exemple absent du programme se retrouvent photocopiés pour toute la classe. Le corrigé se refait toujours à la main."],
                ['titre' => "Croire un détecteur de texte généré", 'texte' => "Un score ne prouve pas qu'un élève a triché, et il pénalise surtout ceux qui écrivent dans une langue qui n'est pas celle de leur maison. Le doute se traite par un entretien, les brouillons et des questions sur le contenu."],
                ['titre' => "Coller la liste de classe dans un assistant", 'texte' => "Noms, matricules et téléphones des parents n'ont pas leur place dans un outil en ligne. L'établissement remplace lui-même ces valeurs par des valeurs fictives avant l'exercice."],
                ['titre' => "Laisser les groupes de classe devenir un lieu de réclamations", 'texte' => "Un groupe ouvert à tous les parents mélange annonces, photos et remarques sur un enfant. Les annonces collectives passent par un canal administré par l'école ; ce qui concerne un élève se traite en privé."],
                ['titre' => "Publier la liste des familles qui n'ont pas payé", 'texte' => "L'échéancier et les relances restent individuels. Un arrangement accordé à une famille ne regarde que cette famille et la direction."],
                ['titre' => "Attendre une connexion de qualité pour commencer", 'texte' => "Une séance conçue pour une fibre stable échoue à la première coupure. Les consignes se préparent hors ligne, les documents se téléchargent à l'avance et un repli est prévu."],
                ['titre' => "Supposer que l'IA connaît le programme ivoirien", 'texte' => "Un assistant propose volontiers un exemple tiré d'un autre pays ou d'une autre année scolaire. Le programme et le manuel de la liste nationale restent la référence de l'enseignant."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former les enseignants et les établissements ivoiriens avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard forme les équipes aux outils d'IA sur leurs documents, et il peut former des enseignants, des directeurs d'établissement et des formateurs ivoiriens selon la même méthode : une réponse sous 24 heures, un ou deux entretiens de cadrage, un questionnaire avant la session, des documents téléchargés à l'avance, une épreuve finale chronomètre en main et une attestation nominative. Il n'enseigne pas en classe et ne remplace ni l'inspection ni l'animateur pédagogique.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Il n'est certifié par aucun éditeur et ne revend aucune licence.",
                "Richard a déjà travaillé avec des entreprises en Côte d'Ivoire. Les projets ivoiriens du portfolio sont des sites et des applications pour des clients d'Abidjan, réalisés en sous-traitance pour Digital Développement : Afro Joy'ce, qui a mis en ligne la commande de repas avec paiement Wave et livraison Yango, INOVIS Côte d'Ivoire, refonte d'un site de conseil, AT Consulting International, avec un catalogue de dix-sept formations et une fiche d'évaluation des stagiaires en ligne, et Laura Cosmetics, boutique en deux devises. Ils sont décrits sur la page des <a href='/realisations/'>réalisations</a>. Son parcours figure sur la page <a href='/richard-salanon'>Richard SALANON</a>, et le catalogue complet dans les <a href='/formations/'>formations</a>.",
                "Richard a déjà formé des enseignants et des personnels d'établissements scolaires : ce public ne lui est pas nouveau, et chaque séance part des documents que l'enseignant utilise vraiment.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos enseignants ou votre équipe de direction à l'IA ?",
            'texte'  => "Indiquez le statut de l'établissement (public ou privé), la ville, les niveaux, le nombre de participants et ce qui vous prend le plus de temps : préparation des cours, évaluation, bulletins ou scolarités. Vous recevez une réponse sous 24 heures, puis un programme et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA pour mon établissement'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les enseignants ivoiriens à l'IA ?", 'r' => "Les dispositifs publics s'adressent aux personnels de l'État : le projet DCNPEE, lancé avec la GIZ et l'UNESCO, et le projet de l'enseignement technique annoncé en septembre 2026. Un formateur privé comme Richard SALANON intervient à la demande d'un établissement, à distance depuis Cotonou, sur les séquences, les devoirs et les documents de gestion de l'équipe."],
        ['q' => "Un enseignant ivoirien peut-il préparer le BEPC ou le BAC de ses élèves avec l'IA ?", 'r' => "Il peut préparer des exercices d'entraînement, des corrigés et des grilles, à condition de refaire chaque énoncé à la main et de rester dans le programme et le manuel de la liste nationale. Les sujets officiels relèvent de la Direction des examens et concours, et aucun sujet en préparation ne se confie à un compte personnel."],
        ['q' => "Peut-on corriger des copies avec un assistant d'IA en Côte d'Ivoire ?", 'r' => "L'assistant peut aider à rédiger un barème détaillé ou des commentaires types à partir d'erreurs anonymisées. La note et l'appréciation restent posées par l'enseignant, et les copies ne sont jamais transmises avec le nom de l'élève."],
        ['q' => "Comment protéger les données des élèves selon la loi 2013-450 ?", 'r' => "La loi n° 2013-450 du 19 juin 2013 portant protection des données à caractère personnel est le texte de référence cité par l'ARTCI, qui rappelle que les transferts hors de Côte d'Ivoire sont soumis à des restrictions. En séance, les données d'élèves sont remplacées par des valeurs fictives ; la portée juridique pour votre établissement se confirme auprès d'un juriste ou de l'Autorité de protection."],
        ['q' => "L'établissement doit-il déclarer l'usage d'un assistant d'IA à l'Autorité de protection ?", 'r' => "Cela dépend des données traitées et de leur destination. L'Autorité de protection publie des formulaires de déclaration préalable, d'autorisation préalable et de transfert hors de l'espace CEDEAO. Faites examiner votre cas par un juriste avant de généraliser l'usage."],
        ['q' => "Le FDFP peut-il financer la formation d'une école privée ?", 'r' => "Rien n'est promis. Le FDFP finance des plans de formation d'entreprises à jour de leurs deux taxes, et la page consultée ne dit pas si une école privée ou une association gestionnaire peut en déposer un. Demandez une réponse écrite au Fonds, y compris sur l'habilitation d'un opérateur établi au Bénin."],
        ['q' => "Comment suivre la formation avec une connexion limitée hors d'Abidjan ?", 'r' => "Avec des séances de deux heures et demie, des documents téléchargés à l'avance, des consignes préparées hors ligne et un téléphone au besoin. Une solution de repli est prévue en cas de coupure. Chaque participant vérifie sa connexion avant la première séance."],
        ['q' => "Quel est le décalage horaire entre Abidjan et Cotonou ?", 'r' => "Une heure, toute l'année : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou. Les séances se placent en fin d'après-midi, le samedi matin ou pendant les journées pédagogiques."],
        ['q' => "Un détecteur de texte généré prouve-t-il qu'un élève a triché ?", 'r' => "Non. Un score oriente au mieux une conversation et ne fonde jamais une sanction. La formation propose de concevoir des devoirs par étapes, une soutenance orale courte et un entretien appuyé sur les brouillons de l'élève."],
        ['q' => "Combien coûte la formation, et comment la régler depuis la Côte d'Ivoire ?", 'r' => "Le prix est fixé sur devis, en FCFA, après un premier échange. Il dépend du nombre de participants, de la durée et de la préparation sur vos documents. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin de la formation ?", 'r' => "Une attestation nominative de fin de formation. Ce n'est ni un diplôme, ni une habilitation pédagogique, ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Burkina 24, relais du gouvernement ivoirien : près de 3 000 enseignants formés à l'usage pédagogique de l'IA (lancement du 17 septembre 2026)", 'url' => 'https://burkina24.com/?p=455448', 'date' => '2026-10-26'],
        ['titre' => "Fratmat via AllAfrica, digitalisation de l'éducation : lancement de la phase 2 du projet DCNPEE (mars 2026)", 'url' => 'https://fr.allafrica.com/stories/202603090267.html', 'date' => '2026-10-26'],
        ['titre' => "Fratmat via AllAfrica, 75 inspecteurs pédagogiques formés au numérique et à l'IA à Yamoussoukro (8 mai 2026)", 'url' => 'https://fr.allafrica.com/stories/202605080540.html', 'date' => '2026-10-26'],
        ['titre' => "Fratmat via AllAfrica, BEPC 2026 : résultats et taux de réussite (16 juin 2026)", 'url' => 'https://fr.allafrica.com/stories/202606160409.html', 'date' => '2026-10-26'],
        ['titre' => "AIP, résultats du CEPE 2026 (1er juin 2026)", 'url' => 'https://www.aip.ci/?p=387198', 'date' => '2026-10-26'],
        ['titre' => "Koaci, proclamation des résultats du BAC 2026 : 40,60 % d'admis contre 40,15 % en 2025 (6 juillet 2026)", 'url' => 'https://www.koaci.com/article/2026/07/06/cote-divoire/societe/cote-divoire-proclamation-des-resultats-du-bac-2026-40-60-declares-admis-contre-4015-en-2025_198304.html', 'date' => '2026-10-26'],
        ['titre' => "Osiris, rentrée 2026-2027 : initiatives pour l'éducation africaine, liste nationale unique des manuels en Côte d'Ivoire (28 septembre 2026)", 'url' => 'https://www.osiris.sn/rentree-2026-2027-10-initiatives-qui-transforment-l-education-africaine.html', 'date' => '2026-10-26'],
        ['titre' => "AIP, l'INPHB de Yamoussoukro abrite une conférence sur l'IA et les sciences de données appliquées à l'éducation (10 avril 2026)", 'url' => 'https://www.aip.ci/cote-divoire-aip-linphb-de-yamoussoukro-abrite-une-conference-sur-lia-et-les-sciences-de-donnees/', 'date' => '2026-10-26'],
        ['titre' => "We Are Tech Africa, un projet d'université dédiée à l'IA dans le Plan national de développement 2026-2030 (2 juin 2026)", 'url' => 'https://www.wearetech.africa/fr/fils/actualites/tech/cote-d-ivoire-un-projet-d-universite-dediee-a-l-ia-pour-repondre-au-deficit-de-competences-numeriques', 'date' => '2026-10-26'],
        ['titre' => "Fratmat, digitalisation de l'éducation : atelier de pré-validation de l'étude de référence de la SNDECI 2024-2028 (octobre 2025)", 'url' => 'https://www.fratmat.info/article/2637757/societe/digitalisation-de-leducation-la-cote-divoire-pose-ses-bases', 'date' => '2026-10-26'],
        ['titre' => "Ecofin Agency, la Côte d'Ivoire veut relier plus de 1 000 lycées et centres de santé au haut débit (22 mai 2025)", 'url' => 'https://www.ecofinagency.com/news-digital/2205-46937-cote-d-ivoire-to-link-1-000-schools-clinics-to-high-speed-internet-this-year', 'date' => '2026-10-26'],
        ['titre' => "Ecofin Agency, connectivité rurale : 300 localités visées en 2026, usage d'Internet rural et urbain selon l'UIT (24 juin 2026)", 'url' => 'https://www.ecofinagency.com/news-digital/2406-56765-cote-d-ivoire-expands-rural-connectivity-push-with-300-new-localities-targeted', 'date' => '2026-10-26'],
        ['titre' => "DataReportal, Digital 2026 : Côte d'Ivoire", 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-26'],
        ['titre' => "ARTCI, protection des données (loi n° 2013-450 du 19 juin 2013)", 'url' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-26'],
        ['titre' => "Autorité de protection, formulaires de déclaration, d'autorisation et de transfert", 'url' => 'https://www.autoritedeprotection.ci/documents/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, procédures d'habilitation des opérateurs de formation", 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, informations et dates clés de l'exercice 2026", 'url' => 'https://fdfp.ci/informations-dates-cles-fdfp-exercice-2026/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-en-entreprise', 'contenu-avec-ia', 'outils-collaboratifs', 'microsoft-365-google-workspace'],
        'services'   => ['formation-en-entreprise'],
    ],
];
