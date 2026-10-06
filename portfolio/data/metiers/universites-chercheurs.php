<?php
// ============================================================
// data/metiers/universites-chercheurs.php · Page « formations par métier »
// pour les universités publiques et privées, les laboratoires, les écoles
// doctorales et les chercheurs (vague 1C, univers « Secteur public et
// éducation », non prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : le travail de recherche à l'heure de l'IA générative.
// Recherche bibliographique, lecture d'un corpus, rédaction scientifique et
// publication, analyse de données, intégrité scientifique, encadrement des
// mémoires et des thèses, évaluation par les pairs. La page sœur
// enseignants-etablissements traite la classe, les devoirs scolaires et la
// gestion des écoles : rien de son contenu n'est repris ici (ni détecteurs,
// ni enquête UNESCO, ni annexe III du règlement européen).
// Sources lues début octobre 2026 : COPE (position du 13 février 2023),
// ALLEA (code européen de 2023), Commission européenne (lignes directrices
// évolutives, troisième version de mai 2026), Springer Nature (cadre de
// risque), Elsevier (politique d'IA des revues), Walters et Wilder
// (Scientific Reports, 7 septembre 2023), CNIL (RGPD, article 89), Hcéres
// (note du CoFIS du 17 février 2022), loi béninoise n° 2010-40 (articles 6,
// 21 et 43), loi béninoise n° 2017-20 (articles 391 et 396), OpenAlex (API
// et tarifs), AJOL, FDFP, 3FPT, décret FODEFCA, France Compétences,
// Elicit, Zotero, KoboToolbox, R, et les « Faits déjà vérifiés » du
// catalogue (article 4 du règlement européen sur l'IA, Odoo).
// Richard n'est pas enseignant-chercheur : il forme à l'usage des outils.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour universités, laboratoires et chercheurs : chercher la littérature, lire un corpus, rédiger, analyser des données et encadrer mémoires et thèses plus vite, sans rien céder sur l'intégrité scientifique",
    'title'   => "Formation IA universités et chercheurs | Richard SALANON",
    'meta'    => "Former chercheurs, doctorants et laboratoires à l'IA : bibliographie vérifiée, rédaction, analyse de données, thèses et intégrité scientifique. Sur devis.",
    'en_bref' => "Cette page s'adresse aux enseignants-chercheurs, aux chercheurs, aux doctorants, aux ingénieurs d'études et aux directions de laboratoires et d'écoles doctorales des universités publiques et privées. Elle montre ce que l'intelligence artificielle et les outils numériques changent dans la recherche bibliographique, la rédaction scientifique, l'analyse de données et l'encadrement des mémoires et des thèses, et ce qu'ils ne doivent jamais faire au regard de l'intégrité scientifique. Le parcours type tient en six demi-journées, que l'on peut suivre séparément, plus une séance de suivi à distance. Il se déroule sur le campus, à distance ou en hybride, au rythme du calendrier universitaire, et son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Secteur public et éducation',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : l'état des usages du laboratoire et les règles qui s'appliquent à lui",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de table outillé : quels assistants chacun utilise déjà, pour quoi faire, avec quel compte, et ce qu'il y a déposé (articles, données, chapitres de thèse).",
                "Lecture des règles qui pèsent réellement sur l'équipe : politique des revues visées, consignes de l'école doctorale, règlement de l'université, exigences du bailleur du projet.",
                "Classement des usages en trois couleurs, d'après le cadre de risque publié par Springer Nature : vert pour l'aide à l'expression, orange pour ce qui touche à l'interprétation, rouge pour ce qui remplace le jugement ou viole une confidentialité.",
                "Ce qui ne sort jamais du laboratoire : manuscrits reçus en évaluation, données nominatives d'enquêtés, résultats non publiés d'un partenaire, dossiers de candidature d'autres équipes.",
                "Exercice : chaque participant classe dix usages réels de son équipe dans le tableau des trois couleurs, puis le groupe arbitre les cas discutés.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : recherche bibliographique outillée et références vérifiées",
            'duree'  => '3 h 30',
            'points' => [
                "Construire une équation de recherche : concepts, synonymes en français et en anglais, opérateurs, filtres de date, de discipline et de type de document.",
                "Interroger les bases ouvertes et les catalogues : OpenAlex, Google Scholar, PubMed, HAL, African Journals Online, et les ressources payées par la bibliothèque de l'université.",
                "Les assistants de recherche documentaire : ce qu'ils trouvent vite, ce qu'ils omettent, pourquoi un résumé d'article produit par une machine peut trahir l'article.",
                "Vérifier chaque référence : existence, DOI, auteurs, année, revue, pages, et lecture du passage réellement cité.",
                "Zotero en équipe : bibliothèque de groupe, collections par chapitre, notes de lecture, styles de citation, insertion dans le traitement de texte.",
                "Exercice : faire produire vingt références par un assistant sur le sujet d'un participant, puis les contrôler une à une et dresser le bilan de ce qui existe vraiment.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : lire et synthétiser un corpus avec un outil qui répond sur vos propres documents",
            'duree'  => '3 h 30',
            'points' => [
                "Le principe d'un outil qui interroge un corpus déposé et cite ses passages : ce qu'il fait mieux qu'un assistant généraliste, et ses limites.",
                "Préparer le corpus : articles en libre accès ou dont la licence permet l'usage, fichiers nommés proprement, une version par document.",
                "Grille de lecture commune : question, terrain, méthode, échantillon, résultats, limites ; remplissage assisté, puis contrôle à la page citée.",
                "Tableau de synthèse d'une revue de littérature, convergences et contradictions entre auteurs, angles morts du corpus.",
                "Exercice : interroger un corpus de quinze articles sur une question de recherche réelle et vérifier chaque réponse contre le passage d'origine.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : rédaction scientifique, publication et évaluation par les pairs",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qu'un assistant apporte à l'écriture : plan d'un article, cohérence entre résumé et conclusion, reformulation d'un paragraphe confus, traduction d'un résumé en anglais.",
                "Ce qu'il n'apporte pas : la question, l'argument, l'interprétation des résultats, la discussion avec la littérature, la responsabilité d'auteur.",
                "La déclaration d'usage de l'IA : où elle se place selon la revue, ce qu'elle doit dire (outil, finalité, étendue de la vérification humaine).",
                "Lettre à l'éditeur, réponse point par point aux évaluateurs, et règles strictes quand on est soi-même évaluateur d'un manuscrit.",
                "Exercice : rédiger la déclaration d'usage de l'IA d'un article en cours et traduire son résumé, relus par un collègue de la même discipline.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : analyse de données avec un assistant de code, sans perdre la reproductibilité",
            'duree'  => '3 h 30',
            'points' => [
                "Préparer un fichier d'enquête : dictionnaire des variables, codage des valeurs manquantes, pseudonymisation avant toute analyse.",
                "Faire écrire un script R ou Python par un assistant à partir d'une consigne précise, sans jamais lui transmettre les données réelles.",
                "Contrôler le script : lecture ligne à ligne, recalcul à la main sur un petit échantillon, comparaison avec un logiciel de statistiques connu.",
                "Interroger une base de données avec quelques requêtes SQL de lecture, et documenter chaque étape dans un journal d'analyse.",
                "Exercice : reproduire une analyse descriptive et un test simple sur un jeu de données fictif, puis échanger les scripts entre binômes pour les rejouer.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : encadrer mémoires et thèses, puis écrire la règle du laboratoire",
            'duree'  => '3 h 30',
            'points' => [
                "Les étapes d'un mémoire ou d'une thèse vues sous l'angle de l'IA : sujet, revue de littérature, protocole, collecte, analyse, rédaction, soutenance.",
                "Le journal de bord de l'étudiant : consignes données aux outils, réponses obtenues, ce qui a été gardé, vérifié ou rejeté.",
                "Entretiens d'étape : questions qui montrent si l'étudiant maîtrise ce qu'il a écrit, sans procès d'intention.",
                "Rédaction de la règle du laboratoire ou de l'école doctorale : usages autorisés, usages à déclarer, usages interdits, outils retenus, données exclues.",
                "Plan d'action de soixante jours : trois décisions, un responsable et une échéance pour chacune.",
            ],
        ],
        [
            'titre'  => "Huit semaines plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Retour sur la règle du laboratoire après sa première mise en pratique : cas tranchés, cas encore flous.",
                "Revue de deux déclarations d'usage de l'IA réellement soumises à des revues ou jointes à un mémoire.",
                "Questions sur les scripts d'analyse et sur la bibliothèque Zotero de l'équipe.",
                "Ajustement du plan d'action pour le semestre suivant.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Enseignants-chercheurs, chercheurs, doctorants, ingénieurs d'études, bibliothécaires, directions de laboratoires et d'écoles doctorales"],
        ['l' => 'Durée', 'v' => "3 jours en six demi-journées de 3 h 30, modulables, plus 2 h de suivi à distance"],
        ['l' => 'Formats', 'v' => "Sur le campus, à distance ou hybride, 12 personnes au plus par groupe"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour un chercheur, un laboratoire ou une université ?",
            'paragraphes' => [
                "Le métier de chercheur repose sur trois gestes qui prennent un temps considérable : trouver ce qui a déjà été publié, produire des données fiables et les analyser, puis écrire pour convaincre des pairs. Les assistants d'IA générative touchent directement aux trois. Ils proposent des mots-clés et des pistes de lecture, résument un article en quelques secondes, écrivent un script d'analyse, reformulent un paragraphe ou traduisent un résumé en anglais. Un doctorant qui passait une semaine à défricher un champ peut désormais en obtenir une première carte en une matinée. Ce gain est réel, mais il est fragile : une carte fausse fait perdre plus de temps qu'elle n'en fait gagner.",
                "La recherche bibliographique est le premier terrain transformé. Les bases ouvertes comme OpenAlex, qui recensait plus de 332 millions de travaux en octobre 2026, les archives ouvertes, les catalogues de revues africaines et les outils de recherche assistée se combinent désormais. La difficulté s'est déplacée : il ne s'agit plus de trouver des références, mais de vérifier qu'elles existent, qu'elles disent bien ce qu'on leur fait dire, et qu'elles sont les bonnes. Un assistant conversationnel peut produire une bibliographie élégante dont une partie n'a jamais été publiée.",
                "L'analyse de données change aussi de visage. Un chercheur en sciences sociales qui ne programmait pas peut faire écrire un script R ou Python qui nettoie une enquête, calcule des tableaux croisés et produit des graphiques. Un biologiste peut faire documenter un code hérité d'un ancien doctorant. L'automatisation relie la collecte sur tablette, le stockage, l'analyse et la production des tableaux d'un rapport. Mais le script généré peut contenir une erreur silencieuse, un mauvais codage des valeurs manquantes ou un test inadapté, et c'est le chercheur qui signera le résultat.",
                "La rédaction scientifique, enfin, est le terrain le plus sensible. L'IA aide à structurer un article, à corriger l'anglais d'un auteur francophone, à rédiger une lettre à l'éditeur. Elle peut aussi produire un texte entier, avec des phrases plausibles et un raisonnement qui n'appartient à personne. Les éditeurs, les codes d'intégrité et les institutions ont donc fixé des règles : déclaration des usages, interdiction de faire de l'IA un auteur, confidentialité de l'évaluation par les pairs. Une université qui n'a pas formé ses équipes à ces règles les découvre souvent au moment d'un refus de manuscrit ou d'une contestation de soutenance.",
                "Cette page s'adresse aux universités publiques et privées, aux laboratoires, aux écoles doctorales, aux instituts et centres de recherche, et aux chercheurs qui travaillent seuls. Richard SALANON n'est pas enseignant-chercheur et ne juge ni les méthodes ni les résultats d'une discipline : il forme à l'usage des outils, sur les sujets, les corpus et les données fictives de l'équipe. La règle qui traverse tout le parcours tient en une phrase : l'outil accélère la recherche, il ne la fait pas, et chaque phrase publiée engage un auteur humain.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles étapes d'un travail de recherche un assistant peut-il préparer, et que garde le chercheur ?",
            'legende' => "Répartition travaillée en séance avec chaque équipe. La dernière colonne indique la trace à conserver pour pouvoir rendre compte de l'usage de l'outil à un éditeur, à un jury ou à un bailleur.",
            'entetes' => ["Étape", "Ce que l'outil peut préparer", "Ce que le chercheur garde", "Trace à conserver"],
            'lignes'  => [
                ["Question de recherche", "Reformulations, sous-questions, objections possibles", "Le choix de la question et son intérêt scientifique", "Notes de cadrage datées"],
                ["Recherche bibliographique", "Mots-clés, synonymes, équation de recherche, premières pistes", "La sélection des sources et la vérification de chacune", "Équations, bases interrogées, dates, bibliothèque Zotero"],
                ["Lecture d'un corpus", "Résumés, extraction de passages, tableau de synthèse", "La lecture des passages cités et l'interprétation", "Liste des documents déposés et des questions posées"],
                ["Protocole", "Relecture de cohérence, liste de contrôle des points à décrire", "Le plan d'échantillonnage, les choix éthiques, la demande d'avis", "Versions successives du protocole"],
                ["Collecte", "Formulaires numériques, contrôles de saisie, traduction des questions", "Le consentement des participants et la qualité du terrain", "Formulaires versionnés, notices d'information"],
                ["Nettoyage et analyse", "Scripts R, Python ou SQL, explication d'un résultat statistique", "Le choix des tests, la vérification des calculs, l'interprétation", "Scripts commentés, journal d'analyse, versions des logiciels"],
                ["Rédaction", "Plan, reformulation, correction de la langue, traduction", "L'argument, la discussion, les conclusions", "Déclaration d'usage de l'IA, versions du manuscrit"],
                ["Soumission et révisions", "Mise en forme selon la revue, brouillon de réponse aux évaluateurs", "Le fond de chaque réponse et les modifications acceptées", "Correspondance avec la revue"],
                ["Évaluation d'un manuscrit ou d'un projet", "Rien qui implique de déposer le document évalué dans un outil externe", "Toute l'évaluation", "Rapport rédigé par l'évaluateur"],
                ["Encadrement d'un mémoire ou d'une thèse", "Grilles de suivi, modèles de journal de bord, calendrier", "Le jugement sur le travail de l'étudiant", "Comptes rendus d'entretiens d'étape"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce que l'IA ne doit jamais faire dans un travail de recherche, et quels textes le disent ?",
            'intro' => "Les limites ci-dessous ne viennent pas du formateur. Elles sont écrites dans des codes d'intégrité, des positions d'organismes de déontologie de la publication, des politiques d'éditeurs et des textes sur les données personnelles, lus dans leur version publiée. Chaque établissement les complète par ses propres règles.",
            'items' => [
                ['titre' => "Figurer parmi les auteurs", 'texte' => "Le Committee on Publication Ethics (COPE) l'écrit dans sa position sur l'auteur et les outils d'IA, revue le 13 février 2023 : ces outils ne peuvent pas être auteurs d'un article, parce qu'ils ne peuvent pas assumer la responsabilité du travail soumis, déclarer l'absence de conflit d'intérêts ni gérer les droits d'auteur. Les lignes directrices de la Commission européenne sur l'IA générative dans la recherche, dans leur troisième version de mai 2026, le redisent : les systèmes d'IA ne sont ni auteurs ni coauteurs."],
                ['titre' => "Inventer des données, des résultats ou des références", 'texte' => "Le code européen de conduite pour l'intégrité de la recherche, publié par ALLEA dans sa version révisée du 23 juin 2023, définit la fabrication comme le fait d'inventer des données ou des résultats et de les enregistrer comme s'ils étaient réels. Une référence produite par un assistant et jamais vérifiée, une valeur manquante complétée par un outil sans le dire, une figure générée présentée comme une observation : ce ne sont pas des maladresses techniques, mais des manquements."],
                ['titre' => "Être utilisée en cachette", 'texte' => "Le même code d'ALLEA range parmi les pratiques inacceptables le fait de cacher l'usage de l'IA ou d'outils automatisés dans la création de contenus ou la rédaction de publications. COPE demande de décrire l'outil utilisé et la façon dont il l'a été dans la section des méthodes, ou une section équivalente, dès qu'il a servi à écrire, à produire des images ou à collecter et analyser des données."],
                ['titre' => "Lire à votre place le manuscrit que vous évaluez", 'texte' => "La politique d'Elsevier demande aux évaluateurs de ne pas déposer un manuscrit soumis, ni aucune de ses parties, dans un outil d'IA, parce que cela peut violer la confidentialité et les droits des auteurs. La Commission européenne recommande aux chercheurs de s'abstenir d'un usage substantiel de l'IA générative dans les activités sensibles comme l'évaluation par les pairs ou l'évaluation de projets, et Springer Nature classe la délégation d'une évaluation à un modèle de langage parmi les usages interdits."],
                ['titre' => "Recevoir les données personnelles des participants", 'texte' => "Les lignes directrices européennes demandent de ne pas fournir les données personnelles de tiers à un système d'IA générative externe sans le consentement des personnes concernées ou une autre base légale, et de ne pas y déposer de travaux non publiés sans garantie qu'ils ne seront pas réutilisés. L'article 89 du RGPD soumet la recherche à des garanties fondées sur la minimisation des données, dont la pseudonymisation. Au Bénin, la loi n° 2010-40 range l'anonymat et la confidentialité parmi les principes de toute recherche impliquant des sujets humains."],
                ['titre' => "Rédiger le mémoire ou la thèse à la place de l'étudiant", 'texte' => "Un diplôme de recherche certifie la capacité d'une personne à conduire un travail scientifique. En France, la loi de programmation de la recherche du 24 décembre 2020 impose au nouveau docteur, à l'issue de la soutenance, un serment par lequel il s'engage à respecter les principes et les exigences de l'intégrité scientifique, comme le rappelle le Conseil français de l'intégrité scientifique dans sa note du 17 février 2022. Ailleurs, les règlements des écoles doctorales posent la même exigence d'un travail personnel."],
                ['titre' => "Décider seule d'un financement, d'un recrutement ou d'une sélection", 'texte' => "Pour les organismes qui financent la recherche, les lignes directrices de la Commission européenne sont nettes : l'IA générative peut améliorer leurs processus internes, mais elle ne peut pas prendre part à l'évaluation du contenu scientifique des projets. Le code d'ALLEA demande aussi que les dossiers de publication, de financement, de recrutement ou de promotion soient évalués de façon transparente et justifiable, en déclarant l'usage d'outils automatisés."],
                ['titre' => "Fabriquer des images présentées comme réelles", 'texte' => "Le cadre de risque de Springer Nature place la création d'images photoréalistes parmi les usages non autorisés, et la politique d'Elsevier n'admet l'IA dans les figures que dans des cas précis, comme les schémas explicatifs ou les diagrammes de processus. Une photographie de microscope, un gel ou une image de terrain ne se retouchent pas avec un générateur, même pour « rendre plus lisible »."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une bibliographie produite par un assistant doit-elle être vérifiée référence par référence ?",
            'texte' => "Parce qu'une partie des références peut ne pas exister. Dans une étude publiée le 7 septembre 2023 dans Scientific Reports, William H. Walters et Esther Isabelle Wilder ont contrôlé les 636 références de 84 revues de littérature rédigées par ChatGPT : 55 % de celles produites par GPT-3.5 et 18 % de celles produites par GPT-4 étaient inventées, et 43 % et 24 % des références réelles contenaient des erreurs substantielles. Les modèles ont progressé, mais les lignes directrices européennes de mai 2026 rappellent qu'une citation exacte peut encore s'accompagner d'un résumé faux. Règle enseignée : aucune référence n'entre dans un manuscrit sans que le chercheur ait ouvert le document et lu le passage cité.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Feu vert, orange ou rouge : comment classer les usages de l'IA dans un laboratoire ?",
            'legende' => "Grille inspirée du cadre de risque publié par Springer Nature pour les auteurs, les évaluateurs et les éditeurs de ses revues, consulté en octobre 2026. Chaque laboratoire l'adapte à sa discipline et aux exigences des revues qu'il vise.",
            'entetes' => ['Niveau', 'Exemples dans la vie du laboratoire', 'Condition'],
            'lignes'  => [
                ["Vert : aide à l'expression et à l'organisation", "Corriger l'anglais d'un manuscrit, proposer une structure de section, traduire ou clarifier des commentaires d'évaluateurs, nettoyer et dédoublonner un fichier de données", "Permis ; la déclaration renforce la confiance et montre que la responsabilité reste humaine"],
                ["Orange : aide qui touche à l'interprétation", "Suggérer une méthode ou un test statistique, rédiger un résumé explicatif, comparer des résultats à la littérature, repérer des tendances dans une analyse exploratoire, expliquer un modèle en langage simple", "Permis avec contrôle humain, vérification et déclaration ; le chercheur doit pouvoir défendre chaque choix"],
                ["Rouge : remplacement du jugement ou rupture de confidentialité", "Présenter comme humaines des hypothèses ou des conclusions générées, inventer des données ou des citations, confier une évaluation par les pairs à un modèle, faire de l'IA un auteur, créer des images photoréalistes", "Interdit"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Recherche bibliographique : comment gagner du temps sans perdre la trace de ses sources ?",
            'paragraphes' => [
                "La méthode enseignée part d'une question, pas d'un outil. Le chercheur écrit d'abord ce qu'il cherche en une phrase, en tire trois ou quatre concepts, puis demande à un assistant des synonymes, des termes anglais, des notions voisines et des disciplines où la question a pu être traitée sous un autre nom. Cette étape, où l'IA est réellement utile, produit une équation de recherche. L'équation s'exécute ensuite dans des bases dont on connaît le périmètre, et c'est là que se trouvent les références, pas dans la réponse d'un assistant conversationnel.",
                "Les bases ouvertes ont beaucoup changé la situation des équipes qui n'ont pas d'abonnements coûteux. L'API d'OpenAlex, interrogée en octobre 2026, comptait 332 066 364 travaux, dont 25 450 rattachés à au moins une institution située au Bénin ; ses données sont publiées sous licence CC0, et chaque compte dispose d'un budget gratuit d'usage de l'API d'un dollar par jour. African Journals Online affichait 977 revues africaines, dont 457 en libre accès, et 291 386 articles en texte intégral. S'y ajoutent Google Scholar, PubMed pour la santé, HAL pour les archives ouvertes francophones et les ressources acquises par la bibliothèque universitaire.",
                "Les outils de recherche assistée occupent une place intermédiaire. Elicit, par exemple, propose une offre gratuite qui permet de chercher parmi plus de 138 millions d'articles et d'en obtenir des résumés, avec des offres payantes pour les revues systématiques. Ces outils trouvent vite des articles pertinents et les présentent en tableau ; ils ont aussi leurs angles morts, en particulier les revues non indexées, les thèses, les rapports et la littérature grise produite en Afrique. La formation apprend à les utiliser comme un complément, en notant chaque fois l'outil, la date et la requête, pour pouvoir décrire la méthode de recherche dans le mémoire ou l'article.",
                "Reste la gestion des références. Une bibliothèque Zotero de groupe, organisée par chapitre ou par axe du laboratoire, évite que chaque doctorant reconstruise la même bibliographie et que les références se perdent avec son départ. Le logiciel est gratuit ; son stockage en ligne est gratuit jusqu'à 300 Mo, puis facturé 20 dollars par an pour 2 Go, 60 dollars pour 6 Go et 120 dollars pour un stockage illimité, et les bibliothèques de groupe puisent dans le stockage de leur propriétaire. Les exercices de la formation se font sur le sujet réel de chaque participant, et l'approfondissement des consignes relève de la <a href=\"/formations/prompt-engineering\">formation au prompt engineering professionnel</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Lire un corpus avec l'IA : que peut-on confier à un outil qui répond sur vos propres documents ?",
            'paragraphes' => [
                "Un assistant généraliste répond à partir de ce qu'il a appris et de ce qu'il trouve en ligne. Un outil qui interroge un corpus déposé par l'utilisateur, selon la méthode dite de génération augmentée par récupération, répond à partir des documents fournis et indique les passages qui fondent sa réponse. Pour une revue de littérature, la différence est considérable : la question « quelles méthodes d'échantillonnage utilisent ces quinze articles ? » reçoit une réponse vérifiable, page par page. C'est l'usage le plus productif de l'IA pour un doctorant en début de thèse, à condition de lire chaque passage cité avant de le reprendre.",
                "Trois précautions encadrent cet usage. La première porte sur les droits : un article en libre accès sous licence ouverte peut être déposé, un article téléchargé par l'abonnement de l'université relève des conditions de la licence signée avec l'éditeur, que la bibliothèque connaît. La deuxième porte sur la confidentialité : les manuscrits non publiés d'un collègue, les rapports confidentiels d'un partenaire et les données de terrain n'entrent dans un outil externe que si ses conditions garantissent qu'ils ne seront pas réutilisés. La troisième porte sur la complétude : l'outil ne voit que ce qu'on lui donne, et un corpus mal constitué produit une synthèse biaisée.",
                "La formation fait travailler chaque participant sur un corpus d'une quinzaine d'articles de son propre sujet. Il construit une grille de lecture commune, la fait remplir par l'outil, puis contrôle un échantillon de cases contre le texte d'origine et note le taux d'erreurs qu'il rencontre. Les équipes qui veulent aller plus loin, avec un outil hébergé par l'université ou relié à une base documentaire du laboratoire, trouveront la méthode technique dans la <a href=\"/formations/rag-chatbot-documents\">formation RAG : chatbot sur vos documents internes</a>, et un exemple de construction sur mesure dans le pilier <a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Rédaction scientifique et publication : où l'IA aide-t-elle, et que faut-il déclarer ?",
            'paragraphes' => [
                "Pour un chercheur francophone qui publie en anglais, l'aide à la langue est souvent le premier usage, et le moins risqué. Corriger la grammaire, rendre une phrase plus directe, harmoniser les temps : le cadre de Springer Nature range ce travail sur la langue dans la catégorie verte, et la traduction d'un résumé se relit avec le même soin. L'IA aide aussi à vérifier la cohérence interne d'un manuscrit : le résumé annonce-t-il les mêmes résultats que la conclusion, chaque figure est-elle appelée dans le texte, les abréviations sont-elles définies ? Ces contrôles prennent du temps à l'œil nu et se font bien avec un assistant, sur un texte dont l'auteur reste maître.",
                "Les difficultés commencent quand l'outil écrit à la place de l'auteur. Une discussion générée relie les résultats à la littérature avec aisance, mais elle peut attribuer à un auteur une thèse qu'il n'a pas soutenue, ou présenter comme établi ce qui reste discuté. La règle de la formation est que l'argument, l'interprétation et la discussion se rédigent d'abord par l'auteur, même maladroitement, et que l'assistant n'intervient qu'ensuite pour la forme. Un texte dont l'auteur ne peut pas défendre chaque phrase devant un jury ou un évaluateur n'est pas prêt à partir.",
                "La déclaration d'usage est désormais attendue par la plupart des éditeurs. Elsevier demande une section distincte, placée dans le manuscrit au moment de la soumission, qui nomme l'outil, explique à quoi il a servi et précise l'étendue de la vérification humaine ; elle interdit de citer un outil d'IA comme auteur. COPE demande que l'usage soit décrit dans la section des méthodes quand il a touché à l'écriture, aux images ou aux données. Les lignes directrices européennes ajoutent qu'une référence à l'outil peut comprendre son nom, sa version et la date d'usage. La formation fait rédiger cette déclaration sur un article réel en cours.",
                "Reste l'autre côté de la publication : l'évaluation. Un chercheur sollicité comme évaluateur reçoit un manuscrit confidentiel. Le déposer dans un assistant en ligne pour en obtenir un résumé ou une première critique expose le travail d'autrui, et la politique d'Elsevier comme les lignes directrices européennes le déconseillent nettement. L'évaluateur peut utiliser un outil pour corriger la langue de son propre rapport, jamais pour lire le manuscrit à sa place. Pour comparer les assistants grand public et leurs réglages de confidentialité, le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> donne les critères.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Analyse de données : comment utiliser un assistant de code sans compromettre la reproductibilité ?",
            'paragraphes' => [
                "Les assistants de code ont rendu R et Python accessibles à des chercheurs qui n'avaient jamais programmé. R est un environnement logiciel libre pour le calcul statistique, jamovi est un logiciel de statistiques ouvert à interface graphique, et Python dispose de bibliothèques d'analyse gratuites. Un assistant peut écrire le script qui importe un fichier, recode des variables, calcule des statistiques descriptives, lance un test et produit un graphique. Le gain est immense pour une enquête de terrain. Le risque l'est aussi : un script qui tourne sans erreur peut produire un résultat faux, parce qu'une valeur manquante a été codée comme zéro ou qu'un test suppose une distribution que les données ne suivent pas.",
                "La méthode enseignée sépare le code et les données. On décrit à l'assistant la structure du fichier, le nom et le type des variables, la question posée, mais on ne lui transmet jamais le fichier réel d'une enquête qui contient des personnes. Le script obtenu est relu ligne à ligne, exécuté localement, puis contrôlé par un recalcul à la main sur une dizaine de lignes. Chaque étape est consignée dans un journal d'analyse, avec la version des logiciels, pour qu'un autre membre de l'équipe puisse rejouer l'analyse. Les lignes directrices européennes insistent sur ce point : la nature aléatoire des réponses de l'IA impose de viser explicitement la reproductibilité.",
                "La collecte elle-même se numérise. KoboToolbox, conçu pour collecter des données dans des environnements difficiles, propose son offre Community gratuitement aux organisations à but non lucratif, aux administrations et aux établissements d'enseignement, avec 5 000 soumissions par mois et 1 Go de stockage. Les formulaires numériques réduisent les erreurs de saisie, mais ils posent des questions de consentement, d'hébergement et d'accès aux données que le protocole doit traiter avant la première enquête. Les équipes qui stockent leurs données dans une base apprendront à l'interroger dans la <a href=\"/formations/sql-analystes\">formation SQL pour analystes métiers</a> ; la lecture critique des chiffres relève de la formation « décider avec les données », reliée en bas de page.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment encadrer un mémoire ou une thèse quand l'étudiant dispose d'un assistant d'IA ?",
            'legende' => "Repères pour les directeurs de mémoire, les directeurs de thèse et les comités de suivi. Ils se discutent avec l'étudiant dès la première réunion et s'écrivent dans la charte de l'école doctorale ou du master quand elle existe.",
            'entetes' => ["Étape du travail", "Usage acceptable, s'il est déclaré", "Ce que l'encadrant vérifie", "Trace demandée à l'étudiant"],
            'lignes'  => [
                ["Choix et cadrage du sujet", "Explorer des formulations, lister des objections, repérer des champs voisins", "Que l'étudiant sait justifier l'intérêt et la faisabilité de sa question", "Note de cadrage personnelle"],
                ["Revue de littérature", "Construire l'équation de recherche, interroger un corpus déposé, organiser Zotero", "Un échantillon de références ouvertes ensemble, passage cité compris", "Bibliothèque partagée et journal des recherches"],
                ["Protocole et éthique", "Relecture de cohérence, liste de contrôle des points à décrire", "Les choix d'échantillonnage, le consentement, l'avis du comité compétent", "Versions datées du protocole et décision du comité"],
                ["Collecte et analyse", "Formulaire numérique, script généré puis vérifié", "Que l'étudiant explique chaque test et retrouve un résultat à la main", "Scripts commentés, journal d'analyse"],
                ["Rédaction", "Correction de la langue, cohérence d'ensemble, traduction du résumé", "Que l'argument et la discussion sont les siens", "Journal de bord des consignes et des réponses gardées"],
                ["Prédépôt et soutenance", "Préparation des diapositives, entraînement aux questions", "La maîtrise orale du contenu, chapitre par chapitre", "Déclaration d'usage de l'IA jointe au manuscrit"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans des universités et des laboratoires d'Afrique francophone et d'Europe ?",
            'items' => [
                ['secteur' => "Laboratoire de sciences sociales d'une université publique, à Abomey-Calavi", 'probleme' => "Situation type : chaque doctorant utilise un assistant différent avec un compte personnel ; deux d'entre eux y ont déposé les transcriptions complètes de leurs entretiens, noms des enquêtés compris, pour en obtenir une analyse thématique.", 'solution' => "Une règle de laboratoire en trois couleurs, des transcriptions pseudonymisées avant tout traitement, un outil retenu par la direction pour l'analyse de corpus, un journal de bord par doctorant, et une séance sur la description de ces usages dans le chapitre méthodologique."],
                ['secteur' => "École doctorale pluridisciplinaire, à Dakar", 'probleme' => "Situation type : des manuscrits de thèse arrivent au prédépôt avec des bibliographies dont plusieurs références sont introuvables, et les directeurs découvrent le problème au moment des rapports des rapporteurs.", 'solution' => "Une vérification des références intégrée au comité de suivi annuel, une bibliothèque Zotero par thèse partagée avec le directeur, un contrôle par échantillon avant le prédépôt et une déclaration d'usage de l'IA jointe au manuscrit."],
                ['secteur' => "Université privée, à Abidjan", 'probleme' => "Situation type : les enseignants-chercheurs doivent publier pour leur avancement, mais rédigent en français et soumettent rarement en anglais ; les premiers essais de traduction automatique ont produit des textes refusés pour la qualité de la langue.", 'solution' => "Un atelier d'écriture scientifique outillée : plan de l'article rédigé par l'auteur, traduction assistée paragraphe par paragraphe, relecture terminologique par un collègue de la discipline, déclaration d'usage conforme aux règles de la revue visée."],
                ['secteur' => "Institut de recherche agronomique, à Ouagadougou", 'probleme' => "Situation type : les données d'essais en station s'accumulent dans des tableurs différents d'une campagne à l'autre, et les analyses sont refaites à la main par chaque nouveau chercheur, sans pouvoir être comparées.", 'solution' => "Un dictionnaire des variables commun, des fichiers d'essais au même format, des scripts R générés avec un assistant puis vérifiés et versionnés, et une procédure de passation quand un chercheur quitte le projet."],
                ['secteur' => "Master de santé publique, à Lomé", 'probleme' => "Situation type : les étudiants préparent des enquêtes épidémiologiques sur formulaires numériques, mais les protocoles ne décrivent ni l'hébergement des réponses, ni l'accès aux données, ni l'usage prévu des outils d'IA.", 'solution' => "Un modèle de section « gestion des données » ajouté au protocole, des formulaires KoboToolbox paramétrés pour ne collecter que le nécessaire, des données exportées pseudonymisées pour l'analyse, et un dossier complet avant la demande d'avis du comité d'éthique compétent."],
                ['secteur' => "Laboratoire universitaire, en Belgique ou en France", 'probleme' => "Situation type : l'université a ouvert un assistant d'IA hébergé pour ses personnels, mais une partie de l'équipe continue d'utiliser des comptes personnels, y compris pour des rapports d'évaluation de manuscrits.", 'solution' => "Un inventaire des usages réels, l'arrêt des comptes personnels pour les documents confidentiels, des consignes écrites pour les évaluateurs, et des attestations de formation qui documentent la maîtrise de l'IA demandée par l'article 4 du règlement européen aux utilisateurs professionnels."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes un chercheur ou un laboratoire travaille-t-il, et que coûtent-ils ?",
            'legende' => "Prix et chiffres relevés en octobre 2026 sur les pages des éditeurs et des organismes. Aucun abonnement n'est à prendre pour suivre la formation, qui utilise les outils déjà disponibles dans l'établissement ou leurs offres gratuites.",
            'entetes' => ['Outil ou système', 'Usage dans la recherche', 'Coût ou condition relevés'],
            'lignes'  => [
                ["OpenAlex", "Recherche bibliographique, analyse bibliométrique, export de métadonnées", "Données ouvertes sous licence CC0 ; budget gratuit d'usage de l'API d'un dollar par jour ; formules annuelles pour les institutions à partir de 5 000 dollars"],
                ["African Journals Online (AJOL)", "Revues scientifiques publiées en Afrique, articles en texte intégral", "977 revues indexées, dont 457 en libre accès ; organisation à but non lucratif"],
                ["Zotero", "Collecte, classement et citation des références, bibliothèques de groupe", "Logiciel gratuit ; stockage gratuit jusqu'à 300 Mo, puis 20, 60 ou 120 dollars par an selon le volume"],
                ["Elicit et outils de recherche assistée", "Repérage d'articles, résumés, tableaux d'extraction, aide aux revues systématiques", "Offre de base gratuite sur plus de 138 millions d'articles ; offres payantes par utilisateur pour les usages intensifs"],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Reformulation, traduction, explication, écriture de scripts", "Versions gratuites et abonnements individuels ou d'établissement ; compte administré par l'université de préférence"],
                ["R, Python et jamovi", "Nettoyage, analyse statistique, graphiques, rapports reproductibles", "Logiciels libres et gratuits ; les logiciels de statistiques commerciaux restent payants selon leurs éditeurs"],
                ["KoboToolbox", "Formulaires d'enquête sur téléphone ou tablette, collecte hors ligne", "Offre Community gratuite pour les organisations à but non lucratif, les administrations et les établissements d'enseignement : 5 000 soumissions par mois, 1 Go de stockage"],
                ["Odoo ou Dolibarr", "Suivi budgétaire des projets de recherche financés, achats, gestion d'une université privée", "Odoo : une application gratuite, puis 19,90 € par utilisateur et par mois en paiement annuel les douze premiers mois ; Dolibarr : logiciel libre"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour une équipe de recherche, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation s'organise-t-elle dans le calendrier d'une université ?",
            'intro' => "Une équipe de recherche ne se libère ni pendant les examens, ni pendant les campagnes de terrain, ni la veille d'une échéance d'appel à projets. Le parcours se découpe donc selon le calendrier de l'établissement, et chaque groupe travaille sur ses propres sujets.",
            'items' => [
                ['titre' => "Des modules séparables", 'texte' => "Les six demi-journées se suivent ensemble ou séparément. Une école doctorale peut retenir la bibliographie et la rédaction pour ses doctorants de première année ; un laboratoire de sciences expérimentales, l'analyse de données et l'encadrement ; une direction de la recherche, la première et la dernière demi-journée pour écrire sa règle."],
                ['titre' => "Des groupes homogènes par besoin", 'texte' => "Doctorants entre eux, encadrants entre eux, ou équipes mixtes d'un même laboratoire : la composition se décide au premier échange. Douze personnes au plus par groupe, pour que chacun travaille sur son propre sujet pendant les exercices."],
                ['titre' => "Les sujets et les corpus des participants", 'texte' => "Chaque participant arrive avec une question de recherche, une quinzaine d'articles en libre accès sur son sujet et, pour l'analyse, la description d'un jeu de données. Les exercices produisent ainsi des livrables directement réutilisables : équation de recherche, grille de lecture, déclaration d'usage, script vérifié."],
                ['titre' => "Aucune donnée réelle de participant à une recherche", 'texte' => "Les exercices d'analyse se font sur des jeux de données fictifs ou publics, construits sur la structure des enquêtes de l'équipe. Le formateur ne reçoit ni transcription d'entretien, ni fichier nominatif, ni manuscrit en cours d'évaluation."],
                ['titre' => "La bibliothèque universitaire associée", 'texte' => "Quand l'université en dispose, un bibliothécaire est invité à la demi-journée sur la recherche bibliographique : il connaît les abonnements, les licences et les conditions de dépôt des articles, et devient le relais naturel de l'équipe après la formation."],
                ['titre' => "Des supports remis en fichiers modifiables", 'texte' => "Grille des usages en trois couleurs, modèle de règle de laboratoire, modèle de déclaration d'usage de l'IA, procédure de vérification des références, modèle de journal de bord pour les étudiants, gabarit de journal d'analyse, et une attestation de fin de formation pour chaque participant."],
                ['titre' => "Un suivi au bout de huit semaines", 'texte' => "La séance de suivi part des premiers cas réels : une déclaration soumise à une revue, une règle de laboratoire appliquée, un script contesté. Entre-temps, les questions d'usage des outils peuvent être posées par courriel ou par WhatsApp, dans les conditions prévues au devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un laboratoire, une école doctorale ou une université entière ?",
            'legende' => "Les formats se combinent. Les intersemestres, les semaines doctorales et les journées de laboratoire sont souvent les meilleurs moments.",
            'entetes' => ['Structure', 'Format conseillé', 'Contenu habituel'],
            'lignes'  => [
                ["Chercheur isolé ou petite équipe", "À distance, en séances de deux heures", "Bibliographie vérifiée, rédaction et déclaration d'usage, sur le sujet de chacun"],
                ["Laboratoire ou unité de recherche", "Sur le campus, une équipe mixte", "Le parcours complet ou quatre demi-journées choisies, puis la règle du laboratoire"],
                ["École doctorale", "Sessions par cohorte, dans le cadre des formations transversales", "Recherche bibliographique, lecture de corpus, rédaction, intégrité ; une séance distincte pour les directeurs de thèse"],
                ["Université ou réseau de campus", "Hybride : séances communes à distance, ateliers sur chaque site", "Socle commun d'intégrité et d'usage, puis modules disciplinaires"],
                ["Direction de la recherche ou conseil scientifique", "Atelier de trois heures", "Inventaire des usages, règle d'établissement, choix d'un outil hébergé, plan de formation des équipes"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe de recherche, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié : chaque formule est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier prévu au devis. Les abonnements éventuels aux outils restent réglés par l'établissement à leurs éditeurs.",
            'items'      => [
                ['offre' => "Parcours complet en six demi-journées", 'prix' => 'Sur devis', 'inclus' => ["Bibliographie, corpus, rédaction, analyse et encadrement, sur les sujets des participants", "Règle de laboratoire et déclaration d'usage rédigées en séance", "Supports modifiables et attestations", "Séance de suivi à huit semaines"]],
                ['offre' => "Module pour une école doctorale", 'prix' => 'Sur devis', 'inclus' => ["Deux à quatre demi-journées par cohorte de doctorants", "Séance distincte pour les directeurs de thèse", "Modèle de journal de bord et de déclaration d'usage"]],
                ['offre' => "Atelier de direction de la recherche", 'prix' => 'Sur devis', 'inclus' => ["Trois heures avec la direction et quelques chercheurs référents", "Inventaire des usages et projet de règle d'établissement", "Plan de formation des équipes"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, douze personnes au plus par groupe.",
                "Les demi-journées retenues et la préparation sur les sujets, les corpus et les jeux de données fictifs de l'équipe.",
                "Les disciplines représentées, quand elles demandent des exercices distincts (sciences expérimentales, sciences sociales, santé).",
                "Le lieu et le format : campus à Cotonou, autre ville ou autre pays, visioconférence ; les déplacements sont chiffrés à part.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation d'une équipe universitaire ou d'un laboratoire ?",
            'paragraphes' => [
                "La réponse dépend d'abord du statut de l'établissement. Une université publique engage ses dépenses selon les règles de la comptabilité publique et les procédures d'achat qui s'appliquent à elle ; la formation de ses enseignants-chercheurs se décide par ses instances, souvent la direction de la recherche, l'école doctorale ou le service de la formation des personnels. La demande suit donc la voie interne, programme et devis à l'appui, et rien n'est engagé avant l'accord écrit de l'ordonnateur compétent. La formation s'insère dans ce cadre sans le discuter.",
                "Un laboratoire dispose parfois d'une autre ressource : le budget d'un projet de recherche financé. Beaucoup de bailleurs acceptent une ligne de renforcement des capacités, de formation à la gestion des données ou de diffusion des résultats, à condition qu'elle figure dans le budget approuvé ou qu'une réallocation soit autorisée. Le chercheur responsable vérifie les règles d'éligibilité des dépenses dans sa convention avant de commander quoi que ce soit, et garde le programme, les feuilles d'émargement et les attestations pour le rapport financier.",
                "Une université privée est, selon les pays, une société ou une association, et peut à ce titre interroger un fonds de formation professionnelle. En Côte d'Ivoire, la page du FDFP consacrée au plan de formation permet à toute entreprise qui justifie du paiement régulier des deux taxes de formation de déposer un plan. Au Sénégal, le 3FPT présente un guichet consacré au personnel des entreprises et des membres des organisations professionnelles. Au Bénin, les statuts du FODEFCA ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Les conditions précises se demandent au fonds lui-même, avant toute signature.",
                "En France, France Compétences rappelle que, depuis le 1er janvier 2022, l'accès aux fonds publics ou mutualisés de la formation suppose un prestataire certifié Qualiopi. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds : aucune prise en charge n'est promise sur cette page. Pour une université de l'Union européenne, les attestations ont une autre utilité : l'article 4 du règlement européen sur l'IA demande depuis le 2 février 2025 aux utilisateurs professionnels de veiller à la maîtrise de l'IA de leur personnel, et la Commission précise que l'omnibus numérique entré en vigueur à la mi-juillet 2026 maintient cette obligation.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs les équipes de recherche commettent-elles avec l'IA, et comment les éviter ?",
            'intro' => "Ces erreurs ne viennent presque jamais d'une volonté de tricher. Elles naissent d'une échéance de soumission, d'un rapport de bailleur à rendre, d'un doctorant seul face à sa revue de littérature, ou d'un outil adopté parce qu'il était disponible ce jour-là.",
            'items' => [
                ['titre' => "Citer une référence qu'on n'a pas ouverte", 'texte' => "La référence proposée par l'assistant semble parfaite et entre directement dans la bibliographie. Elle n'existe pas, ou elle dit autre chose. Aucune référence sans document ouvert et passage lu ; un contrôle par échantillon avant chaque dépôt de manuscrit."],
                ['titre' => "Déposer ses entretiens dans un assistant grand public", 'texte' => "Les transcriptions partent avec les noms, les villages, les fonctions des enquêtés. Pseudonymiser avant tout traitement, et n'utiliser qu'un outil dont les conditions excluent la réutilisation des données, retenu par l'établissement."],
                ['titre' => "Évaluer un manuscrit avec un outil en ligne", 'texte' => "Le rapport d'évaluation est en retard, le manuscrit finit dans un assistant pour un résumé. C'est une rupture de confidentialité envers des collègues. L'évaluateur lit et juge lui-même ; l'outil ne sert, au plus, qu'à corriger la langue de son propre rapport."],
                ['titre' => "Oublier la déclaration d'usage", 'texte' => "L'IA a servi à traduire et à restructurer, personne ne l'a écrit. La revue le découvre ou le demande après coup. La déclaration se rédige en même temps que le manuscrit, avec l'outil, la finalité et l'étendue du contrôle humain."],
                ['titre' => "Faire tourner un script sans le comprendre", 'texte' => "Le script généré produit un tableau propre ; personne ne sait quel test il applique ni comment il traite les valeurs manquantes. Lecture ligne à ligne, recalcul à la main sur un échantillon, journal d'analyse versionné."],
                ['titre' => "Laisser chaque doctorant inventer sa propre règle", 'texte' => "Un directeur encourage l'usage, un autre l'interdit, l'école doctorale se tait. Les étudiants ne savent plus ce qui sera reproché en soutenance. La règle se fixe au niveau du laboratoire ou de l'école doctorale, par écrit, et se présente dès la première année."],
                ['titre' => "Confondre aide à la langue et rédaction déléguée", 'texte' => "On demande une correction, on accepte une réécriture complète, puis une discussion entière. L'argument n'appartient plus à l'auteur. L'auteur rédige d'abord le fond ; l'assistant n'intervient ensuite que sur la forme, et chaque modification substantielle se relit."],
                ['titre' => "Perdre la bibliographie au départ d'un doctorant", 'texte' => "Les références, les notes de lecture et les scripts dorment sur l'ordinateur personnel de celui qui part. Une bibliothèque Zotero de groupe, des scripts déposés dans un espace commun et une procédure de passation écrite."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une équipe de recherche ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours métier reprend seulement les gestes utiles à la recherche ; les fiches permettent d'approfondir un outil ou une méthode.",
            'entetes' => ['Formation', "Ce qu'elle apporte à la recherche", 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/prompt-engineering">Prompt engineering professionnel</a>', "Écrire des consignes fiables et réutilisables, évaluer la qualité des réponses, construire des gabarits pour l'équipe", "Doctorants, chercheurs qui utilisent un assistant chaque jour"],
                ['<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>', "Indexer un corpus, obtenir des réponses avec citations, comprendre les limites et la mise à jour", "Laboratoires qui veulent un outil sur leur propre fonds documentaire"],
                ['<a href="/formations/sql-analystes">SQL pour analystes métiers</a>', "Interroger une base de données d'enquêtes ou d'essais sans être développeur", "Ingénieurs d'études, chercheurs qui gèrent des bases"],
                ['<a href="/formations/data-literacy">Décider avec les données</a>', "Lire, questionner et présenter des chiffres sans contresens", "Directions de laboratoire, responsables de projets financés"],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Données personnelles, secret, biais, règlement européen et loi n° 2017-20 appliqués aux usages de l'IA", "Tout le personnel de recherche, en particulier ceux qui traitent des données de participants"],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', "Charte, inventaire des usages, rôles et contrôle, à l'échelle d'un établissement", "Directions de la recherche, vice-présidences, conseils scientifiques"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langues, comités d'éthique : que change le terrain pour une équipe de recherche ?",
            'paragraphes' => [
                "Sur beaucoup de campus d'Afrique de l'Ouest, la connexion reste la première contrainte. Les outils en ligne, les assistants et les bases bibliographiques demandent une bande passante que les salles de travail n'offrent pas toujours, et de nombreux doctorants travaillent avec le forfait de leur téléphone. La formation en tient compte : téléchargement des articles et constitution des corpus quand la connexion le permet, Zotero et les logiciels d'analyse installés localement, formulaires d'enquête utilisables hors ligne et synchronisés au retour du réseau. Une séance à distance se prépare aussi avec des supports téléchargeables à l'avance.",
                "La langue pèse autant. Un chercheur francophone lit une littérature majoritairement anglophone, publie souvent en anglais et mène parfois ses entretiens dans une langue nationale. Les assistants aident à lire et à traduire, mais ils maîtrisent inégalement les langues nationales et les vocabulaires disciplinaires. Une traduction d'un questionnaire vers le fon, le wolof, le mooré ou une autre langue se fait par un locuteur, se rétrotraduit, puis se teste auprès de quelques personnes avant l'enquête ; l'outil peut proposer un premier jet, jamais la version finale.",
                "Les données de recherche ont enfin leurs règles propres, qui se lisent dans les textes du pays où l'on travaille. Au Bénin, la loi n° 2010-40 du 8 décembre 2010 portant code d'éthique et de déontologie pour la recherche en santé pose, à son article 6, les principes de toute recherche impliquant des sujets humains, dont l'anonymat et la confidentialité ; son article 21 rend obligatoire le consentement éclairé de chaque participant à une recherche épidémiologique, et son article 43 crée le Comité national d'éthique pour la recherche en santé, chargé d'examiner les protocoles.",
                "Pour toutes les disciplines, la loi n° 2017-20 portant code du numérique fixe les règles des données personnelles. Son article 396 interdit en principe le traitement ultérieur de données personnelles à des fins historiques, statistiques ou scientifiques, sauf conditions cumulées : objectif de recherche impossible à atteindre sans données identifiantes, sécurité et confidentialité garanties, suppression des identifiants le plus tôt possible, engagement écrit de la personne qui reçoit les données ; le même traitement fait à partir de données anonymes est admis. Son article 391 n'autorise le transfert vers un État tiers que si l'Autorité constate un niveau de protection équivalent : un point à vérifier avant de déposer des données de terrain dans un service hébergé à l'étranger.",
                "En Europe, l'article 89 du RGPD soumet les traitements à des fins de recherche scientifique à des garanties appropriées, avec des mesures techniques et organisationnelles qui assurent la minimisation des données, et demande de travailler sur des données qui ne permettent plus d'identifier les personnes chaque fois que la finalité le permet. Une équipe qui mène un projet entre l'Afrique et l'Europe applique la règle la plus protectrice des pays concernés et documente ses choix dans son plan de gestion des données. Le parcours ne remplace ni le comité d'éthique, ni le délégué à la protection des données de l'université : il apprend des gestes qui facilitent leur travail.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés une équipe de recherche doit-elle connaître ?",
            'items' => [
                ['valeur' => '55 % et 18 %', 'libelle' => "Part des références inventées dans 84 revues de littérature rédigées par GPT-3.5 et GPT-4 sur 42 sujets, soit 636 références contrôlées (étude publiée le 7 septembre 2023)", 'source' => 'Walters et Wilder, Scientific Reports', 'url' => 'https://www.nature.com/articles/s41598-023-41032-5'],
                ['valeur' => '13 février 2023', 'libelle' => "Date de la position de COPE selon laquelle un outil d'IA ne peut pas être auteur d'un article scientifique", 'source' => 'Committee on Publication Ethics', 'url' => 'https://publicationethics.org/guidance/cope-position/authorship-and-ai-tools'],
                ['valeur' => 'Mai 2026', 'libelle' => "Troisième version des lignes directrices évolutives sur l'usage responsable de l'IA générative dans la recherche, issues du Forum de l'Espace européen de la recherche", 'source' => 'Commission européenne', 'url' => 'https://research-and-innovation.ec.europa.eu/document/download/2b6cf7e5-36ac-41cb-aab5-0d32050143dc_en'],
                ['valeur' => '332 millions', 'libelle' => "Travaux recensés dans OpenAlex en octobre 2026 (332 066 364), dont 25 450 rattachés à une institution située au Bénin", 'source' => 'OpenAlex', 'url' => 'https://help.openalex.org/access/pricing/'],
                ['valeur' => '977', 'libelle' => "Revues africaines indexées par African Journals Online en octobre 2026, dont 457 en libre accès, pour 291 386 articles en texte intégral", 'source' => 'AJOL', 'url' => 'https://www.ajol.info/index.php/ajol'],
                ['valeur' => '5 000', 'libelle' => "Soumissions mensuelles d'enquête incluses dans l'offre gratuite de KoboToolbox pour les établissements d'enseignement et les organisations à but non lucratif (octobre 2026)", 'source' => 'KoboToolbox', 'url' => 'https://www.kobotoolbox.org/pricing/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre laboratoire ou votre université avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des chercheurs et des équipes universitaires à l'usage des outils numériques et de l'IA. Il n'est pas enseignant-chercheur, ne dirige aucune thèse et ne se prononce ni sur la méthode ni sur les résultats d'une discipline : il apporte la maîtrise des outils, la méthode de vérification et la manière d'écrire des règles d'usage, à partir des sujets, des corpus et des données fictives de l'équipe. Les choix scientifiques restent ceux des chercheurs, et les questions de droit ou d'éthique soulevées en séance sont renvoyées au comité, au délégué à la protection des données ou au juriste de l'établissement.",
                "Son métier de développeur lui donne une connaissance de l'intérieur des outils dont il parle. Il construit des applications qui interrogent des modèles d'IA, des automatisations et des bases de données ; il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il sait donc où vont les données déposées dans un assistant, ce qu'un script généré peut cacher, et pourquoi un outil qui cite ses sources n'est pas pour autant infaillible.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il travaille dans le numérique depuis " . $ans . " ans, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a mené des missions dans " . count((array) fait('pays_travailles')) . " pays. Il n'est certifié par aucun éditeur, ne cite aucun établissement formé et ne promet aucun gain chiffré. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, ses pays d'intervention sur celle des <a href=\"/zones/\">zones</a>, l'organisation de ses formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et l'ensemble des parcours dans le <a href=\"/formations/domaine/intelligence-artificielle\">domaine Intelligence artificielle</a> du <a href=\"/formations/\">catalogue des formations</a>. Une équipe tentée de confier ses réponses au public à un robot lira l'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre équipe de recherche ?",
            'texte' => "Écrivez la règle du laboratoire avant de multiplier les outils : ce qui est permis, ce qui se déclare, ce qui est interdit. N'acceptez aucune référence sans avoir ouvert le document cité. Ne déposez ni manuscrit en évaluation, ni données nominatives, ni travail non publié d'autrui dans un assistant externe. Faites écrire le code par l'outil, jamais l'argument. Déclarez vos usages à chaque soumission, et demandez à vos étudiants de tenir un journal de bord dès le premier jour.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre laboratoire ou votre école doctorale a-t-il déjà sa règle d'usage de l'IA ?",
            'texte'  => "Décrivez votre établissement (public ou privé), vos disciplines, le nombre de chercheurs et de doctorants concernés, les outils déjà utilisés et ce qui vous préoccupe le plus : bibliographies douteuses, rédaction, analyse de données, encadrement ou évaluation. Vous recevez une réponse sous 24 heures, puis une proposition de cadrage gratuit et un devis détaillé, calés sur votre calendrier universitaire.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon équipe de recherche'],
        ],
    ],

    'faq' => [
        ['q' => "La formation apprend-elle à faire écrire un article ou une thèse par l'IA ?", 'r' => "Non. Elle apprend à se servir des outils pour chercher, lire, analyser et améliorer la forme d'un texte, en gardant la question, l'argument, l'interprétation et la discussion entre les mains de l'auteur. Les codes d'intégrité et les politiques des éditeurs refusent qu'un outil d'IA soit auteur, et un diplôme de recherche certifie le travail personnel de l'étudiant."],
        ['q' => "Peut-on utiliser ChatGPT pour trouver des références bibliographiques ?", 'r' => "Pour trouver des mots-clés, des synonymes et des pistes, oui ; pour fournir directement les références d'une bibliographie, non. Une étude publiée en 2023 dans Scientific Reports a montré qu'une part importante des références produites par ChatGPT étaient inventées. Les références se cherchent dans des bases comme OpenAlex, PubMed, HAL ou AJOL, et chacune s'ouvre avant d'être citée."],
        ['q' => "Faut-il déclarer l'usage de l'IA quand on soumet un article ?", 'r' => "Dans la plupart des revues, oui, et la forme dépend de l'éditeur. Elsevier demande une section de déclaration distincte qui nomme l'outil et sa finalité ; COPE demande une description dans la section des méthodes quand l'outil a servi à écrire, à produire des images ou à analyser des données. Les consignes aux auteurs de la revue visée font foi."],
        ['q' => "Un évaluateur peut-il utiliser l'IA pour relire un manuscrit ?", 'r' => "Il ne doit pas déposer le manuscrit, ni aucune de ses parties, dans un outil d'IA externe : c'est un document confidentiel qui appartient à ses auteurs. Il peut au plus faire corriger la langue de son propre rapport. Elsevier, Springer Nature et les lignes directrices de la Commission européenne convergent sur ce point."],
        ['q' => "Nos données d'enquête peuvent-elles être analysées avec un assistant d'IA ?", 'r' => "Le code d'analyse peut être écrit avec un assistant, à partir d'une description de la structure du fichier. Les données réelles, surtout quand elles concernent des personnes, restent sur les postes ou les serveurs de l'équipe, pseudonymisées, et ne partent dans un outil externe que s'il a été retenu par l'établissement avec des garanties écrites sur leur usage."],
        ['q' => "Comment encadrer un doctorant qui utilise l'IA sans tomber dans la suspicion ?", 'r' => "En fixant la règle dès le début, en demandant un journal de bord des usages, en ouvrant ensemble un échantillon de références à chaque comité de suivi et en vérifiant à l'oral que l'étudiant maîtrise chaque chapitre. Un usage déclaré et contrôlé n'est pas une faute ; c'est l'usage caché ou non vérifié qui pose problème."],
        ['q' => "La formation convient-elle aux sciences expérimentales comme aux sciences humaines ?", 'r' => "Oui. La recherche bibliographique, la rédaction et l'intégrité sont communes. Les exercices d'analyse se construisent sur la discipline : essais en station ou mesures de laboratoire d'un côté, enquêtes et entretiens de l'autre. Quand un groupe réunit des disciplines très différentes, les demi-journées d'analyse se dédoublent."],
        ['q' => "Le formateur aura-t-il accès à nos données ou à nos manuscrits ?", 'r' => "Non. Les exercices se font sur des articles en libre accès, sur les sujets des participants et sur des jeux de données fictifs ou publics. Le formateur ne reçoit ni transcription d'entretien, ni fichier nominatif, ni manuscrit en cours d'évaluation, ni identifiant des plateformes de l'université."],
        ['q' => "Peut-on former seulement les doctorants d'une école doctorale ?", 'r' => "Oui, par cohorte, en deux à quatre demi-journées centrées sur la bibliographie, la lecture de corpus, la rédaction et l'intégrité. Une séance distincte pour les directeurs de thèse est conseillée, pour que les règles présentées aux doctorants soient celles que leurs encadrants appliqueront."],
        ['q' => "Une université publique peut-elle commander cette formation ?", 'r' => "Oui, selon ses propres règles d'achat et par ses instances habituelles : direction de la recherche, école doctorale ou service de formation des personnels. Le programme, le devis et les pièces nécessaires sont fournis pour la procédure interne, et rien n'est engagé avant l'accord écrit de l'établissement."],
        ['q' => "Richard a-t-il déjà formé des chercheurs ?", 'r' => "Oui, Richard a déjà formé des chercheurs et des équipes universitaires à l'usage des outils numériques et de l'IA. Il ne cite aucun établissement formé, n'est pas enseignant-chercheur et ne forme qu'à l'usage des outils."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Il dépend du nombre de participants, des demi-journées retenues, des disciplines, du lieu et du format. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Committee on Publication Ethics (COPE), Authorship and AI tools : position revue le 13 février 2023", 'url' => 'https://publicationethics.org/guidance/cope-position/authorship-and-ai-tools', 'date' => '2026-10-05'],
        ['titre' => "ALLEA, The European Code of Conduct for Research Integrity, édition révisée de 2023 (publiée le 23 juin 2023)", 'url' => 'https://allea.org/code-of-conduct/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, Forum de l'Espace européen de la recherche, Living guidelines on the responsible use of generative AI in research, troisième version (mai 2026, PDF)", 'url' => 'https://research-and-innovation.ec.europa.eu/document/download/2b6cf7e5-36ac-41cb-aab5-0d32050143dc_en', 'date' => '2026-10-05'],
        ['titre' => "Springer Nature, politiques éditoriales des revues Nature Portfolio : Artificial Intelligence (AI), cadre d'évaluation des risques", 'url' => 'https://www.nature.com/nature-portfolio/editorial-policies/ai', 'date' => '2026-10-05'],
        ['titre' => "Elsevier, Generative AI policies for journals (auteurs, évaluateurs, éditeurs)", 'url' => 'https://www.elsevier.com/about/policies-and-standards/generative-ai-policies-for-journals', 'date' => '2026-10-05'],
        ['titre' => "Walters W. H. et Wilder E. I., « Fabrication and errors in the bibliographic citations generated by ChatGPT », Scientific Reports, vol. 13 (7 septembre 2023)", 'url' => 'https://www.nature.com/articles/s41598-023-41032-5', 'date' => '2026-10-05'],
        ['titre' => "Hcéres, Conseil français de l'intégrité scientifique, note d'expression sur le serment du doctorant en faveur de l'intégrité scientifique (17 février 2022, PDF)", 'url' => 'https://www.hceres.fr/sites/default/files/media/downloads/220217-note-dexpression-du-cofis-serment-is.pdf', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre IX (article 89 : garanties pour la recherche scientifique)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre9', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2010-40 du 8 décembre 2010 portant code d'éthique et de déontologie pour la recherche en santé (articles 6, 21 et 43)", 'url' => 'https://sgg.gouv.bj/doc/loi-2010-40/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 396)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "OpenAlex, tarifs et accès (données sous licence CC0, budget gratuit quotidien de l'API)", 'url' => 'https://help.openalex.org/access/pricing/', 'date' => '2026-10-05'],
        ['titre' => "African Journals Online (AJOL), page d'accueil et statistiques de la plateforme", 'url' => 'https://www.ajol.info/index.php/ajol', 'date' => '2026-10-05'],
        ['titre' => "Elicit, tarifs", 'url' => 'https://elicit.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Zotero, stockage en ligne et tarifs individuels", 'url' => 'https://www.zotero.org/storage', 'date' => '2026-10-05'],
        ['titre' => "KoboToolbox, tarifs (offre Community pour les organisations à but non lucratif et les établissements d'enseignement)", 'url' => 'https://www.kobotoolbox.org/pricing/', 'date' => '2026-10-05'],
        ['titre' => "The R Project for Statistical Computing", 'url' => 'https://www.r-project.org/', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs (page en français)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle et technique", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['prompt-engineering', 'rag-chatbot-documents', 'sql-analystes', 'data-literacy', 'ia-ethique-conformite', 'gouvernance-ia'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
