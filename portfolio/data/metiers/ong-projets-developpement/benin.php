<?php
// ============================================================
// data/metiers/ong-projets-developpement/benin.php · Page couple métier + pays :
// ONG et projets de développement au Bénin (statut F, Déjà travaillé : oui).
// Angle propre : bailleurs et réseau d'ONG du Bénin, cadre associatif (loi du
// 1er juillet 1901, communiqué du ministère de l'Intérieur), Code du numérique
// pour les données des bénéficiaires, collecte en zone rurale, langues du pays.
// Faits externes lus le 26/10/2026 : loi n° 2017-20 (texte intégral, articles
// 391, 394, 405, 426, 430, 433, 437), communiqué du 15 juillet 2022, AFD,
// Union européenne, Banque mondiale, DataReportal, Ecofin (GSMA), KoboToolbox,
// CLEAR Global, CICR, IATI, CHS. Décrets 2001-234 et 2022-286 : titre et date.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les ONG et projets de développement au Bénin : des équipes qui collectent sur téléphone, calculent leurs indicateurs et rédigent leurs rapports aux bailleurs en protégeant les bénéficiaires",
    'title'   => "Formation IA des équipes d'ONG au Bénin | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Bénin : collecte sur téléphone, indicateurs, rapports aux bailleurs et données des bénéficiaires.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à l'IA les équipes d'ONG, les unités de gestion de projets et les responsables de suivi-évaluation du Bénin, à partir de leurs propres documents : cadre de résultats, formulaires de collecte, rapports aux bailleurs. Il forme à l'usage des outils et n'exerce pas le suivi-évaluation lui-même. La formation se donne à Cotonou, dans vos locaux, à distance ou en formule hybride, avec un devis en FCFA fixé après un échange de cadrage et une réponse sous 24 heures.",
    'publie'  => '2026-12-05',
    'maj'     => '2026-12-05',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes d'ONG à l'IA au Bénin, et comment choisir ?",
            'paragraphes' => [
                "Pour une ONG béninoise, un formateur utile est une personne qui travaille sur vos documents de projet et non sur une démonstration d'outils. Richard SALANON, basé à Cotonou, forme les équipes d'ONG et de projets de développement à l'usage des assistants d'IA, des formulaires de collecte et des tableaux de suivi, en partant du cadre de résultats et des conventions de financement de l'organisation.",
                "Le choix se joue sur quelques questions simples. Le formateur demande-t-il le cadre logique du projet, un rapport récent et un questionnaire de terrain avant de proposer un programme, ou arrive-t-il avec des diapositives générales sur ChatGPT ? Les exercices utilisent-ils vos tâches (rapport trimestriel, fiche d'activité, compte rendu d'atelier) ou des exemples d'entreprise sans rapport avec un projet financé ? Précise-t-il ce que l'IA ne doit pas faire avec les listes de bénéficiaires ? Un bon signe : il accepte de conclure qu'un atelier d'une demi-journée suffit, ou qu'une autre formation, par exemple en suivi-évaluation, répond mieux à votre besoin.",
                "Une démonstration d'outil montre ce que ChatGPT, Claude, Gemini ou Copilot savent faire en général. Une formation sur les tâches du métier fait produire à chaque participant un livrable de son poste : une section de rapport dont chaque chiffre renvoie à la base, un formulaire testé sur un téléphone, une règle de conservation des fichiers de bénéficiaires. Le critère de réussite est ce que la personne sait refaire seule le lundi suivant, pas la qualité du diaporama.",
                "Richard n'exerce pas le suivi-évaluation et ne se présente pas comme évaluateur. Il forme à l'usage des outils qui portent ce travail. Les méthodes d'évaluation, l'échantillonnage d'une enquête et la conception d'un cadre logique restent celles de votre organisation et de votre bailleur. Il n'est certifié par aucun éditeur d'IA et ne détient pas d'agrément de fonds de formation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est le numérique pour une ONG ou un projet de développement au Bénin ?",
            'paragraphes' => [
                "Le Bénin compte 14,9 millions d'habitants en octobre 2025, dont 48,6 % vivent hors des villes à la fin de 2025, selon DataReportal (rapport Digital 2026 publié le 8 novembre 2025). Le pays compte 16,4 millions de connexions mobiles actives à la fin de 2025, soit 110 % de la population (DataReportal précise que certaines de ces connexions ne donnent pas accès à Internet), et 4,80 millions d'internautes, soit 32,2 %. Pour une ONG, ces chiffres disent une chose : le téléphone est l'outil de terrain par excellence, mais la connexion de la personne enquêtée, elle, n'est pas acquise.",
                "Les projets du pays sont portés par des financeurs identifiables. L'Agence française de développement indique être présente au Bénin depuis 1956 et y avoir investi 1 milliard d'euros depuis 2016, avec des ONG parmi ses partenaires béninois. La Délégation de l'Union européenne rappelle sa présence depuis 1961 et un programme indicatif pluriannuel 2021-2027 organisé autour du capital naturel, de la croissance économique verte et d'une société prospère. Lors d'une visite officielle de l'Équipe Europe au Bénin du 18 au 20 mars 2024, des accords de financement pour un montant total de 166 millions d'euros ont été signés. La Banque mondiale affiche pour sa part un portefeuille actif de 3,99 milliards de dollars sur 27 opérations et un nouveau cadre de partenariat pays endossé le 16 juin 2026 et adossé à 2,6 milliards de dollars de financement.",
                "Ces financements pèsent sur le travail quotidien des équipes. Un projet financé par l'un d'eux doit produire des rapports aux dates de sa convention, avec des indicateurs définis à l'avance, souvent en français et parfois en anglais. La formation s'adresse à cette réalité : un coordinateur d'ONG à Parakou ou à Cotonou passe moins de temps à collecter qu'à consolider, recopier et vérifier. C'est là que les formulaires numériques, une base unique et un assistant d'IA bien encadré font gagner du temps sans toucher à la fiabilité des chiffres.",
                "Le suivi-évaluation d'un projet dépend d'abord de la convention signée : c'est le bailleur qui précise ce qu'il attend comme indicateurs, rapports et évaluations, et l'équipe de projet les interroge avant de concevoir ses outils.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés un projet béninois peut-il retenir avant de s'équiper ?",
            'items' => [
                ['valeur' => '48,6 %', 'libelle' => "Part de la population béninoise vivant hors des villes à la fin de 2025, (rapport Digital 2026, publié le 8 novembre 2025)", 'source' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '63 %', 'libelle' => "Couverture 4G des zones rurales selon un article d'Ecofin du 17 février 2025 qui reprend des données GSMA, contre près de 100 % en zone urbaine et 96 % en zone périurbaine", 'source' => "Agence Ecofin, l'internet mobile progresse au Bénin mais beaucoup restent sans accès", 'url' => 'https://www.ecofinagency.com/telecom/1702-46429-benin-expands-mobile-internet-but-many-still-lack-access'],
                ['valeur' => '39 à 66 %', 'libelle' => "Fourchette estimée par la GSMA, pour 2023, des habitants vivant à portée d'un réseau haut débit sans l'utiliser (écart d'usage)", 'source' => 'Agence Ecofin, d\'après la GSMA', 'url' => 'https://www.ecofinagency.com/telecom/1702-46429-benin-expands-mobile-internet-but-many-still-lack-access'],
                ['valeur' => '166 M€', 'libelle' => "Montant total d'accords de financement signés lors de la visite officielle de l'Équipe Europe au Bénin du 18 au 20 mars 2024 (page datée du 19 mars 2024)", 'source' => "Délégation de l'Union européenne au Bénin", 'url' => 'https://www.eeas.europa.eu/node/439644_en'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles encadrent une ONG et les données de ses bénéficiaires au Bénin ?",
            'paragraphes' => [
                "Le sujet relève de deux familles de textes : celui qui régit l'existence de l'organisation, et celui qui encadre les données personnelles qu'elle manipule. Cette page les cite pour ce qu'ils demandent aux équipes, sans les interpréter. Toute question d'application se pose à un juriste, au ministère concerné ou à l'Autorité de protection des données personnelles.",
                "Pour l'existence de l'organisation, un communiqué du ministre de l'Intérieur et de la Sécurité publique, daté du 15 juillet 2022 et publié sur le site du gouvernement le 28 juillet 2022, invite les responsables d'associations régulièrement déclarées au Bénin à respecter l'article 5 de la loi du 1er juillet 1901. Cet article demande de déclarer, dans les trois mois, les changements survenus dans l'administration ou la direction ainsi que les modifications des statuts, qui ne sont opposables aux tiers qu'à partir de cette déclaration. Le communiqué fixait la date limite du 30 septembre 2022 à ceux qui n'avaient pas fait ces formalités. Le décret n° 2001-234 du 12 juillet 2001, fixant les conditions d'existence et les modalités de fonctionnement des organisations non gouvernementales et de leurs organisations faîtières, existe aussi ; seuls son titre et sa date sont repris ici.",
                "Pour les données, la loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin consacre son livre V à la protection des données à caractère personnel. Le tableau suivant reprend les articles lus dans le texte publié par le Secrétariat général du Gouvernement.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que demandent les articles du Code du numérique aux équipes qui collectent des données de bénéficiaires ?",
            'legende' => "Articles lus le 26 octobre 2026 dans le texte de la loi n° 2017-20 publié par le Secrétariat général du Gouvernement. Reformulation à titre d'information, sans valeur d'avis juridique : l'application à votre organisation se confirme auprès d'un juriste ou de l'APDP.",
            'entetes' => ['Article', 'Ce qu\'il prévoit', 'Ce que l\'équipe de projet en retient'],
            'lignes'  => [
                ["Article 394 : données sensibles", "Le traitement de données révélant l'origine raciale ou ethnique, les opinions politiques, la religion ou les croyances, l'appartenance syndicale, ainsi que des données génétiques, biométriques ou de santé ou relatives à la vie sexuelle, est interdit. L'interdiction ne s'applique pas dans plusieurs cas, dont celui où la personne a donné son consentement explicite pour une ou plusieurs finalités précises, retirable à tout moment sans frais", "Un questionnaire de santé, de croyances ou d'appartenance syndicale n'est conçu qu'avec un consentement explicite, par finalité, et un moyen de le retirer. Cette question se règle avant le formulaire, pas après la collecte"],
                ["Article 405 : déclaration préalable", "Les traitements automatisés ou non qui comportent des données personnelles font l'objet d'une déclaration préalable auprès de l'Autorité, ou sont inscrits dans un registre tenu par la personne désignée à cet effet par le responsable du traitement", "Le projet décide, avant l'enquête, qui est responsable du traitement et quelle démarche est faite auprès de l'APDP"],
                ["Article 391 : transfert vers un État tiers", "Un transfert de données personnelles vers un État tiers ou une organisation internationale ne peut avoir lieu que lorsque l'Autorité constate un niveau de protection équivalent", "Choisir un serveur de collecte ou un assistant d'IA hébergé à l'étranger relève de cette question. Les listes de bénéficiaires ne sont pas envoyées vers un outil dont on n'a pas vérifié le cadre"],
                ["Article 426 : sécurité", "Le responsable du traitement et son sous-traitant mettent en œuvre des mesures techniques et d'organisation appropriées contre la destruction, la perte, l'altération, la diffusion ou l'accès non autorisés, notamment lors de transmissions de données sur un réseau", "Comptes nominatifs, téléphones de collecte verrouillés, fichiers non diffusés dans des groupes de messagerie : la règle écrite de l'équipe se rattache à cet article"],
                ["Article 430 : délégué à la protection des données", "Un délégué à la protection des données est désigné en tout état de cause lorsque les activités de base consistent en un traitement à grande échelle de catégories particulières de données visées à l'article 394", "Une ONG qui suit à grande échelle des personnes malades ou vulnérables se demande si cette désignation la concerne, avec son juriste"],
                ["Article 433 : conservation", "Les données ne doivent pas être conservées au-delà de la période requise pour les fins pour lesquelles elles ont été recueillies et traitées, sauf exceptions pour l'histoire, la statistique ou la recherche", "La clôture d'un projet s'accompagne d'une date de suppression des fichiers nominatifs, tenue par une personne désignée"],
                ["Article 437 : droit d'accès", "Toute personne dont les données sont traitées peut demander au responsable du traitement les informations permettant de connaître et de contester le traitement, la confirmation qu'il existe et la communication des données sous forme intelligible", "Le mécanisme de plaintes du projet doit pouvoir recevoir et orienter une telle demande, y compris d'une personne qui s'exprime en langue locale"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qu'ajoutent le manuel du CICR et la norme CHS aux textes béninois ?",
            'paragraphes' => [
                "Les textes béninois posent les règles de droit ; les référentiels humanitaires disent comment les appliquer dans le travail d'une organisation. Le manuel du CICR sur la protection des données dans l'action humanitaire, dont la troisième édition est présentée sur la page du CICR datée du 19 novembre 2024, contient des chapitres sur l'identité numérique, la connectivité comme aide, les réseaux sociaux et l'intelligence artificielle. Il rappelle que protéger les données personnelles fait partie de la protection de la vie, de l'intégrité et de la dignité des personnes. C'est un document de référence pour une ONG qui utilise la biométrie, des transferts monétaires ou un assistant d'IA.",
                "La norme humanitaire fondamentale CHS, mise à jour et lancée en mars 2024 après deux ans de consultation de plus de 4 000 contributeurs dans plus de 90 pays, peut servir à toute personne ou organisation qui soutient des populations en crise. Pour une équipe béninoise, son intérêt pratique est de rappeler que les outils numériques, y compris l'IA, servent la redevabilité envers les personnes et ne la remplacent pas : un chatbot n'écoute pas une réclamation sensible, un animateur communautaire le fait.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'un projet béninois confier à l'IA, avec quels outils et quels contrôles ?",
            'legende' => "Exemples construits sur les documents courants d'une ONG ou d'une unité de gestion au Bénin. Les exercices de séance utilisent des dossiers fictifs ou des extraits anonymisés, jamais de liste nominative de bénéficiaires.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Contrôle humain avant usage'],
            'lignes'  => [
                ["Rapport trimestriel au bailleur : section narrative des activités", "ChatGPT, Claude, Gemini ou Copilot, avec des fiches d'activité anonymisées", "Premier jet structuré selon le modèle imposé par la convention", "Chaque nombre pointé contre la base du projet, chaque fait contre une fiche d'activité, aucune citation de bénéficiaire sans consentement"],
                ["Questionnaire d'enquête de ménages pour une commune rurale", "KoboToolbox et KoboCollect, assistant d'IA pour reformuler les questions", "Formulaire avec contraintes, sauts de questions et question de consentement en tête", "Test sur les téléphones des enquêteurs, hors connexion, puis lecture à voix haute de chaque question dans la langue de l'enquête"],
                ["Compte rendu d'un atelier communal ou d'une mission de terrain", "Assistant d'IA à partir de notes brutes ou d'une transcription", "Décisions, actions, responsables et échéances en tableau", "Relecture par un participant à l'atelier : aucune décision ajoutée ni oubliée, noms et dates exacts"],
                ["Fiche de définition d'un indicateur du cadre de résultats", "Tableur, assistant d'IA pour clarifier la rédaction", "Définition, numérateur, dénominateur, source, fréquence, désagrégation", "Validation par le chargé de suivi-évaluation, qui recalcule la valeur sur un échantillon de la base"],
                ["Contrôle qualité quotidien de la collecte", "Export Kobo, tableur", "Liste des doublons, des entretiens trop courts et des fiches hors zone", "Retour au superviseur le jour même et note dans le journal des corrections, avant tout calcul d'indicateur"],
                ["Registre des traitements et règle de conservation des fichiers de bénéficiaires", "Traitement de texte, assistant d'IA pour la mise en forme, sans données nominatives", "Document décrivant les données collectées, les accès, la durée de conservation", "Relecture par le responsable désigné et, au besoin, par un juriste ; échange avec l'APDP pour les formalités"],
                ["Synthèse en anglais pour un bailleur ou un partenaire du Nord", "Assistant d'IA, traduction", "Texte anglais fidèle au rapport en français", "Relecture par une personne qui maîtrise l'anglais, avec retour au texte source pour les chiffres et les noms de lieux"],
                ["Suivi du budget par bailleur et par ligne budgétaire", "Tableur, Odoo ou Dolibarr si l'organisation en dispose", "Tableau d'exécution mis à jour chaque semaine", "Rapprochement avec les pièces justificatives numérisées ; aucun envoi de demande de réallocation sans validation du responsable financier"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain au Bénin, et comment la formation s'y adapte-t-elle ?",
            'paragraphes' => [
                "La première contrainte est la connexion. Selon Ecofin, qui cite la GSMA, la couverture 4G de la population rurale était de 63 % dans un article de février 2025, et l'article cite parmi les freins à l'usage le coût des forfaits et des téléphones, la rareté de l'électricité en zone rurale et le manque de contenu local. Une ONG qui travaille dans l'Alibori, l'Atacora ou le Mono doit donc supposer qu'une partie du terrain est sans réseau fiable et que les téléphones se rechargent difficilement.",
                "KoboCollect répond à cette contrainte : d'après la documentation de KoboToolbox, il faut une connexion pour télécharger le formulaire, puis on peut collecter sans internet, enregistrer en brouillon ou finaliser, et envoyer les fiches finalisées en lot quand le téléphone retrouve une connexion sécurisée. La même documentation précise que l'application convient surtout aux téléphones et tablettes Android, et que, sans aucun accès internet, des soumissions peuvent être déplacées à la main vers un ordinateur par câble USB avec des outils externes. La formation fait pratiquer ce cycle : télécharger le formulaire au bureau, collecter dehors sans réseau, vérifier ce qui est parti.",
                "La deuxième contrainte est la langue. Le français est la langue officielle du Bénin ; selon CLEAR Global, qui reprend le recensement de 2013, le fon est la langue maternelle de 20 % de la population, le baatonum de 9 % et le fulfulde de 8 % (recensement de 2013) ; la même page évoque environ 35 % d'habitants parlant le français comme langue seconde, chiffre qu'elle attribue à Ethnologue. Un formulaire en français ne suffit donc pas partout. KoboToolbox permet d'ajouter des langues à un même formulaire, soit dans l'interface, soit par XLSForm pour les formulaires volumineux. L'assistant d'IA peut proposer une première traduction, mais il ne remplace pas un locuteur : la relecture se fait avec les enquêteurs, question par question, à voix haute.",
                "La troisième contrainte tient aux outils réellement utilisés. Les outils réellement utilisés varient d'une organisation à l'autre : tableur, WhatsApp, messagerie, logiciel de comptabilité ou classeur pour les finances. La formation ne demande pas de les changer : elle fixe des règles sur ce qui y circule, notamment aucune liste nominative dans un groupe de messagerie. Pour l'information des communautés, le paiement de participants par mobile money et la réception de plaintes, le circuit passe par les opérateurs présents au Bénin (MTN, Moov Money, Celtiis Cash), et la formation s'attache à ce que les listes échangées se limitent aux champs nécessaires.",
                "Solution de repli en cas de coupure : les documents d'exercice sont téléchargés à l'avance sur chaque poste, de sorte que la séance se poursuit hors connexion, et une solution de repli est prévue pour les séances à distance quand la connexion d'un participant coupe.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour une ONG béninoise : atelier, formation de deux jours, distance ou accompagnement ?",
            'legende' => "Effectifs et durées de la fiche de formation IA en entreprise. Les formats se combinent : un atelier de démarrage pour l'équipe de coordination, puis la formation de deux jours pour le groupe qui porte la collecte et les rapports.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir dans un projet'],
            'lignes'  => [
                ["Atelier d'une demi-journée", "Une demi-journée", "12 personnes au plus", "Une direction ou une coordination qui veut voir ce que l'IA fait d'un rapport trimestriel avant de décider d'équiper l'équipe"],
                ["Formation de deux jours, dans vos locaux", "2 jours, en 4 demi-journées", "10 personnes au plus, par fonction", "Une équipe de projet qui prépare une enquête ou un rapport et veut des tâches réelles traitées : fiches d'activité, formulaire, rapport, règle de conservation"],
                ["Séances à distance depuis Cotonou", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Un projet dont les équipes sont réparties entre plusieurs communes ou avec un siège en Europe : séances courtes, documents envoyés à l'avance, solution de repli prévue en cas de coupure"],
                ["Hybride", "Une journée en salle, puis séances à distance", "10 personnes au plus", "Prise en main à Cotonou ou dans vos locaux, puis suivi à distance des tâches cibles pendant que l'équipe retourne sur le terrain"],
                ["Session mutualisée", "1 à 2 jours", "Plusieurs structures d'un même réseau", "Quelques ONG partenaires qui se forment ensemble ; les exercices utilisent des documents publics ou fictifs, aucun dossier interne"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Une équipe qui veut étendre l'usage à d'autres tâches après son premier rapport assisté"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se déroule une séance à distance depuis Cotonou, et quel décalage horaire ?",
            'paragraphes' => [
                "Les séances à distance partent de Cotonou, où le fuseau est UTC+1 toute l'année, sans heure d'été. Pour une équipe au Bénin, il n'y a donc aucun décalage. Pour un siège ou un partenaire à Paris, Bruxelles ou Genève, les horaires sont identiques en hiver et la capitale européenne a une heure d'avance en été, lorsque l'heure d'été y est appliquée.",
                "La préparation suit la fiche de formation IA en entreprise : un ou deux entretiens de cadrage, un court questionnaire avant la session, et des documents d'exercice téléchargés à l'avance sur chaque poste pour ne pas dépendre d'une connexion fragile. Après la session, un canal direct reste ouvert pour les questions d'application pendant le mois suivant, et chaque participant reçoit une attestation nominative de fin de formation. La dernière demi-journée est une épreuve finale : chacun exécute seul sa tâche cible, chronomètre en main, de la consigne à la vérification.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemblent trois séances de travail pour une équipe d'ONG au Bénin ?",
            'intro' => "Ces scénarios s'appuient sur des dossiers fictifs, construits sur la structure réelle des documents d'une ONG ou d'un projet. Ils montrent la consigne donnée à l'assistant et ce que le participant contrôle avant d'utiliser le résultat.",
            'items' => [
                ['titre' => "Scénario 1 : le rapport trimestriel d'un projet de santé communautaire (dossier fictif)", 'texte' => "Situation : une coordinatrice doit transmettre à son bailleur une section « résultats du trimestre » à partir de vingt fiches d'activité d'agents de santé communautaires de deux communes fictives. Consigne : elle fournit des fiches dont les noms ont été remplacés par des codes et un tableau d'indicateurs déjà calculé, et demande un texte structuré dans l'ordre du format imposé par le bailleur, sans ajouter aucun chiffre. Contrôle : un binôme retrouve la cellule de la base derrière chaque nombre et la fiche d'activité derrière chaque fait, puis vérifie qu'aucune citation de bénéficiaire ne figure dans le texte."],
                ['titre' => "Scénario 2 : un questionnaire de ménages à traduire en fon et en baatonum (dossier fictif)", 'texte' => "Situation : un chargé de suivi-évaluation prépare une enquête de référence sur la sécurité alimentaire dans une commune fictive du nord. Consigne : il demande à l'assistant de reformuler en langage simple dix questions, puis de proposer des libellés d'aide aux enquêteurs, avant de saisir le formulaire dans KoboToolbox avec deux langues. Contrôle : les enquêteurs qui parlent la langue lisent chaque question à voix haute et corrigent la traduction ; le formulaire est testé hors connexion sur leurs téléphones, et la question de consentement apparaît en tête avec la possibilité de refuser."],
                ['titre' => "Scénario 3 : la règle de conservation à la clôture d'un projet (dossier fictif)", 'texte' => "Situation : un projet d'appui à des groupements de femmes arrive à son terme et la responsable administrative doit décider du sort des fichiers de bénéficiaires, répartis entre un ordinateur de bureau, trois téléphones et un groupe de messagerie. Consigne : elle liste ses fichiers sans y mettre de noms et demande à l'assistant de structurer une règle de conservation en s'appuyant sur ses réponses : données collectées, finalité, accès, durée, date de suppression, responsable. Contrôle : elle confronte le document aux articles 433 et 426 du Code du numérique cités dans cette page, fait relire la règle par un juriste ou par le responsable désigné, et vérifie que le groupe de messagerie a bien été quitté et vidé de ses pièces jointes."],
                ['titre' => "Scénario 4 : le budget d'un projet cofinancé en euros et en FCFA (dossier fictif)", 'texte' => "Situation : un responsable financier suit un projet financé par deux bailleurs, l'un en euros, l'autre en FCFA, avec des lignes budgétaires différentes. Consigne : il fournit un export anonymisé de ses dépenses et demande à l'assistant de calculer l'exécution par ligne et par bailleur, en indiquant la formule utilisée. Contrôle : il recalcule deux totaux à la main, vérifie le taux de conversion que retient chaque convention de financement, et rapproche chaque ligne de ses pièces justificatives avant de l'inclure dans un rapport."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation d'une équipe d'ONG au Bénin ?",
            'paragraphes' => [
                "Le premier réflexe d'une ONG est de regarder si la convention de financement prévoit une ligne de renforcement des capacités des équipes ou des partenaires. Si c'est le cas, la dépense peut y être imputée selon les règles du bailleur ; sinon, une réallocation se demande au bailleur, qui décide. Le devis détaille chaque poste, ce qui permet de le joindre à une telle demande. Aucune prise en charge n'est promise sur cette page.",
                "Au Bénin, le décret n° 2022-286 du 11 mai 2022 porte approbation des statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage, le FODEFCA. Seuls son titre et sa date sont repris ici : une ONG qui emploie du personnel vérifie directement auprès du fonds si elle peut déposer une demande, dans quelles conditions et avec quel type de prestataire. Richard SALANON n'affiche ni agrément d'un fonds de formation ni certification de qualité de formation : prévoyez le budget sans prise en charge et interrogez le fonds par écrit, programme et devis à l'appui, si un financement conditionne votre décision.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe d'ONG au Bénin ?",
            'intro'      => "Aucune somme n'est publiée : le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants d'IA restent au nom de l'organisation et ne sont pas compris dans le prix de la formation. Les formules et les limites des offres des éditeurs évoluent : la page officielle de chaque éditeur fait foi.",
            'items'      => [
                ['offre' => "Atelier d'une demi-journée", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée sur un rapport ou un formulaire de l'organisation", "Règles de données de base", "Recommandation pour la suite"]],
                ['offre' => "Formation de deux jours", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées construites sur vos documents de projet", "Épreuve finale sur la tâche cible et attestation nominative", "Canal direct le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée par mois pendant trois mois", "Reprise des tâches qui servent, correction et extension à de nouvelles tâches"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, dix personnes au plus par groupe pour la formation de deux jours.",
                "Le temps de préparation : lecture du cadre de résultats, de la convention et du questionnaire, anonymisation des extraits d'exercice.",
                "Le lieu : Cotonou, vos locaux, ou un déplacement hors de Cotonou chiffré à part.",
                "Le mode : présentiel, distance ou hybride.",
                "L'accompagnement après la session.",
                "La langue des supports, en français ou en anglais, selon votre bailleur.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commet une équipe d'ONG béninoise qui démarre l'IA, et comment les éviter ?",
            'intro' => "Ces erreurs reviennent dans les projets financés. Chacune a une parade simple, mise en place pendant la formation.",
            'items' => [
                ['titre' => "Coller une liste de bénéficiaires dans un assistant en ligne", 'texte' => "Sous la pression d'un rapport, on prend le raccourci. Les articles 391 et 394 du Code du numérique rappellent pourtant que le transfert à l'étranger et les données sensibles ont leurs conditions. On travaille sur des extraits où les noms sont remplacés par des codes, jamais sur la liste elle-même."],
                ['titre' => "Laisser l'assistant compléter un tableau d'indicateurs", 'texte' => "Il produit volontiers des nombres plausibles. Un chiffre déclaré à un bailleur engage l'organisation : les indicateurs sont calculés à partir de la base, l'assistant ne rédige que le texte autour."],
                ['titre' => "Faire circuler les listes dans des groupes de messagerie", 'texte' => "Un groupe WhatsApp de coordination sert à organiser une distribution, pas à diffuser des noms, des numéros de téléphone ou des localisations de ménages, qui restent ensuite sur chaque téléphone du groupe."],
                ['titre' => "Un formulaire en français seul pour une enquête en langue locale", 'texte' => "Les enquêteurs traduisent à la volée, chacun à sa manière, et les réponses ne sont plus comparables. Les langues sont déclarées dans le formulaire et vérifiées avec ceux qui les parlent."],
                ['titre' => "Tester le formulaire au bureau seulement", 'texte' => "La connexion du bureau masque les problèmes de terrain. Le test se fait sur les téléphones réels des enquêteurs, hors connexion, avec une batterie qui faiblit."],
                ['titre' => "Oublier la date de suppression à la clôture", 'texte' => "Les fichiers de bénéficiaires d'un projet clos restent des années sur les ordinateurs et les téléphones. La règle de conservation fixe une date et une personne chargée de la tenir."],
                ['titre' => "Former le siège sans former les superviseurs", 'texte' => "La qualité des données se joue à la collecte. Les superviseurs et les enquêteurs sont formés au formulaire, au consentement et au contrôle quotidien."],
                ['titre' => "Traduire un rapport sans relecture", 'texte' => "Une traduction automatique peut déformer un nom de lieu ou un chiffre. Une personne qui maîtrise la langue relit, en revenant au texte source."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre ONG ou votre projet avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard vit et travaille au Bénin, où il a déjà travaillé avec des entreprises. Il ne cite aucune organisation formée et ne promet aucun résultat chiffré. Il n'est ni évaluateur ni spécialiste du suivi-évaluation : il forme à l'usage des outils qui portent ce travail, formulaires, bases, tableurs, assistants d'IA et logiciels de gestion, à partir de vos méthodes et de vos obligations envers les bailleurs.",
                "Parmi les projets du portfolio situés au Bénin, GC Pro Consulting est un site bilingue de formation et de conseil en gestion à Cotonou, réalisé en direct, avec un catalogue de formations, des inscriptions et des demandes de devis en ligne. OBA TV est une web TV sur mesure à Cotonou, réalisée en direct, avec un abonnement premium payé par mobile money. IK Fashion House, une boutique en ligne de mode sur mesure à Cotonou, a été réalisé en sous-traitance pour Digital Développement. Richard a aussi créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone. L'ensemble est présenté sur la page des <a href=\"/realisations/\">réalisations</a>.",
                "Il compte " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP, et est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il n'est certifié par aucun éditeur et ne se présente comme partenaire d'aucun. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, l'organisation commune de ses formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et ses autres parcours dans le <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochain rapport ou votre prochaine enquête approche-t-il ?",
            'texte'  => "Indiquez le nombre de personnes, leurs fonctions, le bailleur concerné, les outils déjà en place et l'échéance qui vous préoccupe : vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon équipe de projet'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les équipes d'ONG à l'IA au Bénin ?", 'r' => "Richard SALANON, consultant en digitalisation basé à Cotonou, forme les équipes d'ONG et de projets de développement à l'usage des assistants d'IA, des formulaires de collecte et des tableaux de suivi, à partir de leurs propres documents. Il n'exerce pas le suivi-évaluation et n'est certifié par aucun éditeur d'IA."],
        ['q' => "KoboCollect fonctionne-t-il sans connexion dans les zones rurales du Bénin ?", 'r' => "D'après la documentation de KoboToolbox, une connexion est nécessaire pour télécharger le formulaire, puis la collecte se fait sans internet et les fiches finalisées s'envoient en lot au retour d'une connexion. La couverture 4G rurale étant estimée à 63 % par un article d'Ecofin de février 2025 qui reprend des données GSMA, la formation fait pratiquer ce cycle avant l'enquête."],
        ['q' => "Peut-on utiliser l'IA pour traduire un questionnaire en fon ou en baatonum ?", 'r' => "Pour une première proposition de reformulation, oui, mais un assistant ne remplace pas un locuteur. KoboToolbox permet de déclarer plusieurs langues dans un même formulaire, et la traduction se relit avec les enquêteurs, question par question, à voix haute, avant la collecte."],
        ['q' => "Quelles règles du Code du numérique s'appliquent aux données de nos bénéficiaires ?", 'r' => "Le livre V de la loi n° 2017-20 du 20 avril 2018 en traite. Les articles 394 (données sensibles), 405 (déclaration préalable), 391 (transfert à l'étranger), 426 (sécurité) et 433 (conservation) concernent directement un projet. Cette page les résume sans les interpréter : confirmez leur application auprès d'un juriste ou de l'APDP."],
        ['q' => "Une association béninoise doit-elle déclarer ses changements de direction ?", 'r' => "Un communiqué du ministre de l'Intérieur et de la Sécurité publique du 15 juillet 2022 invite les responsables d'associations régulièrement déclarées à respecter l'article 5 de la loi du 1er juillet 1901, qui demande de déclarer dans les trois mois les changements de direction et les modifications des statuts. Votre situation précise se confirme auprès du ministère."],
        ['q' => "La formation peut-elle se donner à Cotonou, dans nos locaux ou à distance ?", 'r' => "Oui. Richard vit à Cotonou : la formation de deux jours se donne dans vos locaux, une salle louée ou à distance en cinq à six séances de deux heures et demie. Un déplacement hors de Cotonou est chiffré à part dans le devis."],
        ['q' => "Un bailleur comme l'Union européenne ou l'AFD impose-t-il une formation précise ?", 'r' => "Les conditions dépendent de chaque convention de financement, que seul votre bailleur peut interpréter. La formation s'adapte au format de rapport et aux indicateurs que la convention exige, que vous apportez au cadrage."],
        ['q' => "Peut-on payer la formation sur le budget d'un projet financé ?", 'r' => "C'est possible si la convention prévoit une ligne de renforcement des capacités ou si le bailleur accepte une réallocation. La décision lui appartient ; le devis détaille chaque poste pour appuyer votre demande, et aucune prise en charge n'est garantie."],
        ['q' => "Le FODEFCA peut-il financer la formation d'une ONG ?", 'r' => "Le décret n° 2022-286 du 11 mai 2022 approuve les statuts du FODEFCA. Les conditions d'accès d'une ONG se vérifient auprès du fonds, par écrit. Richard SALANON n'affiche aucun agrément d'un fonds de formation."],
        ['q' => "Combien coûte la formation, et dans quelle devise ?", 'r' => "Le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Il dépend du nombre de participants, du format, de la préparation des exercices sur vos documents et du lieu. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391, 394, 405, 426, 430, 433 et 437)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
        ['titre' => "Gouvernement du Bénin, communiqué du ministre de l'Intérieur du 15 juillet 2022 sur la déclaration des changements des associations (article 5 de la loi du 1er juillet 1901)", 'url' => 'https://www.gouv.bj/article/1869/non-renouvellement-structures-dirigeantes-dans-milieux-associatifs-vers-annulation-recepisses-declaration-plusieurs-associations/', 'date' => '2026-10-26'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2001-234 du 12 juillet 2001 sur les organisations non gouvernementales (titre et date)", 'url' => 'https://sgg.gouv.bj/doc/decret-2001-234/', 'date' => '2026-10-26'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (titre et date)", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-26'],
        ['titre' => "Agence française de développement, le groupe AFD et le Bénin", 'url' => 'https://www.afd.fr/fr/page-region-pays/benin', 'date' => '2026-10-26'],
        ['titre' => "Délégation de l'Union européenne au Bénin, coopération Bénin-Union européenne (programme indicatif pluriannuel 2021-2027)", 'url' => 'https://www.eeas.europa.eu/delegations/benin/coop%C3%A9ration-b%C3%A9nin-union-europ%C3%A9enne-un-partenariat-sur-le-long-terme_fr', 'date' => '2026-10-26'],
        ['titre' => "Délégation de l'Union européenne au Bénin, mission Équipe Europe de mars 2024 (accords de financement de 166 millions d'euros)", 'url' => 'https://www.eeas.europa.eu/node/439644_en', 'date' => '2026-10-26'],
        ['titre' => "Banque mondiale, Bénin : vue d'ensemble", 'url' => 'https://www.worldbank.org/en/country/benin/overview', 'date' => '2026-10-26'],
        ['titre' => "DataReportal, Digital 2026 : Bénin (population, ruralité, connexions mobiles)", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-26'],
        ['titre' => "Agence Ecofin, l'internet mobile progresse au Bénin mais beaucoup restent sans accès (17 février 2025, données GSMA et ARCEP)", 'url' => 'https://www.ecofinagency.com/telecom/1702-46429-benin-expands-mobile-internet-but-many-still-lack-access', 'date' => '2026-10-26'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-26'],
        ['titre' => "KoboToolbox, documentation : ajouter des traductions à un formulaire", 'url' => 'https://support.kobotoolbox.org/language_dashboard.html', 'date' => '2026-10-26'],
        ['titre' => "CLEAR Global, Données linguistiques du Bénin (recensement de 2013)", 'url' => 'https://clearglobal.org/language-data-for-benin/', 'date' => '2026-10-26'],
        ['titre' => "CICR, Handbook on data protection in humanitarian action, 3e édition (page du 19 novembre 2024)", 'url' => 'https://www.icrc.org/en/data-protection-humanitarian-action-handbook', 'date' => '2026-10-26'],
        ['titre' => "CHS Alliance, Groupe URD et Sphere, norme humanitaire fondamentale CHS 2024", 'url' => 'https://www.corehumanitarianstandard.org/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
    ],
];
