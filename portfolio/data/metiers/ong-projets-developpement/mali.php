<?php
// ============================================================
// data/metiers/ong-projets-developpement/mali.php · Page métier + pays :
// ONG et projets de développement au Mali. Statut de la ligne du métier : F ;
// la tâche impose la formule « Richard peut former ». Déjà travaillé au Mali : oui
// (liste pays_travailles de faits.php).
// Faits externes lus le 27/10/2026 : page OCHA du plan 2026 sur humanitarianaction.info
// (publiée le 05/02/2026), APA (6 février et 1er octobre 2026, 7 octobre 2025), Sida
// (analyse du 31 mars 2026), ICNL (rapport de 2011), DataReportal (Digital 2026), Digital
// Africa Business via OSIRIS (19 mai 2024), Constitution de 2023 (article 31), KoboToolbox, IANA.
// Non établi et donc retiré : conditions d'accès des ONG à un fonds de formation, articles
// des lois (titre et date seulement), décompte officiel des ONG, texte actuel sur les
// associations, tout propos sur la sécurité ou la politique. Aucun projet client du Mali
// dans projets-clients.php (vérifié). Aucune pratique de Richard hors faits.php et fiche
// ia-en-entreprise. Aucune somme pour une formation. Aucune certification d'éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Une formation IA pour les ONG et projets maliens : les équipes programme, suivi-évaluation et finances préparent notes de plaidoyer, rapports de bailleurs et questionnaires avec ChatGPT, Claude, Gemini ou Copilot, puis pointent chaque chiffre dans le document d'origine",
    'title'   => "Formation IA pour ONG et projets au Mali | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Mali : plan 2026, rapports aux bailleurs, collecte de terrain, données protégées. Devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation installé à Cotonou, peut, depuis le Bénin, former en visioconférence les salariés d'organisations et de projets maliens, de Bamako à Mopti, à travailler avec ChatGPT, Claude, Gemini ou Copilot sur leurs notes, rapports et tableaux de suivi. Le fuseau de Bamako est UTC+0 et celui de Cotonou UTC+1 : une heure sépare les deux villes. Les exercices partent de vos pièces, personnes non identifiables. Le devis, sur demande, est libellé en FCFA.",
    'publie'  => '2026-12-29',
    'maj'     => '2026-12-29',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut initier à l'IA une équipe d'ONG basée à Bamako, à Ségou ou à Mopti, et comment le choisir ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation établi à Cotonou, peut former à distance des équipes maliennes d'associations, d'ONG et de projets financés par des bailleurs. Le siège peut se trouver à Bamako, les antennes à Sikasso, Ségou, Kayes ou Mopti : tout se passe en visioconférence, en français, avec une heure de décalage, et le devis se rédige en FCFA.",
                "Une cellule de projet malienne travaille rarement avec un seul texte. Sur un même bureau se croisent le plan de réponse humanitaire de l'année, une convention signée avec un partenaire de financement, un cadre logique, des tableaux de suivi alimentés par des enquêteurs et, parfois, des échanges avec une autorité de protection des données. Un bon formateur part de ce paquet de pièces, pas d'un catalogue d'exemples génériques, et montre à quel moment l'assistant fait gagner du temps et à quel moment il faut le tenir à l'écart.",
                "Pour trier les offres, posez trois exigences simples. Premièrement, que les exercices soient construits sur des documents que votre équipe a rendus anonymes. Deuxièmement, que le formateur explique à voix haute ce qui ne doit jamais quitter l'organisation, avant de parler de gain de temps. Troisièmement, que chaque participant reparte avec des supports qu'il peut modifier, et non avec un diaporama figé. Une proposition qui ne répond pas à ces trois points vend un outil, pas une compétence de travail.",
                "Le périmètre de Richard est volontairement étroit. Il enseigne l'usage des assistants d'IA ; il n'évalue pas de programmes, ne tranche aucune question juridique et ne se prononce ni sur la conception des indicateurs ni sur l'action de terrain. Ces décisions appartiennent à votre direction, à vos bailleurs et à vos conseils.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels chiffres officiels circulent sur le plan de réponse 2026 du Mali, et pourquoi diffèrent-ils d'une date à l'autre ?",
            'paragraphes' => [
                "La page que le système humanitaire consacre au Mali pour 2026 sur humanitarianaction.info, coordonnée par OCHA et publiée le 5 février 2026, affiche 5,1 millions de personnes dans le besoin, 3,8 millions de personnes ciblées et 577,9 millions de dollars américains de besoins de financement. Elle ajoute 1,5 million de personnes « hyper-priorisées » pour 329,2 millions de dollars. À la même adresse, les estimations du lancement du 8 décembre 2025 sont conservées : 551 millions de dollars et 2 millions de personnes hyper-priorisées pour 392,8 millions.",
                "Autrement dit, le même plan porte deux séries de nombres, selon la date de lecture. Le texte de la page précise aussi que 5,1 millions représentent environ 20 % de la population, que la baisse d'environ 24 % par rapport à l'an dernier reflète un changement de méthode plutôt qu'une amélioration, et que les 3,8 millions visés correspondent à 75 % des personnes dans le besoin. Selon APA (6 février 2026), la présentation a eu lieu à Bamako le 5 février et prévoit des interventions prioritaires dans 97 des 159 cercles du pays.",
                "Un deuxième ensemble de chiffres concerne l'argent réellement reçu. APA, citant OCHA, indique le 1er octobre 2026 que le plan était financé à 23 % au 28 septembre 2026 : 135,6 millions de dollars mobilisés sur 577,9 millions recherchés. Pour l'année précédente, deux lectures coexistent : 16 % des besoins couverts au 6 novembre 2025 d'après la page OCHA, et 21 % des 771 millions de dollars requis d'après APA. Les deux taux se rapportent à des dates et à des bases de calcul différentes.",
                "Pour une personne qui rédige, la leçon tient en une habitude : ne jamais écrire un chiffre sans sa date de lecture, son émetteur et son périmètre. Un assistant d'IA peut aider à composer un tableau « chiffre, émetteur, date, ce qu'il mesure », mais il ne sait pas quelle ligne est la plus récente. L'analyse de crise publiée par l'agence suédoise Sida le 31 mars 2026 rappelle d'ailleurs que le chiffre de 6,4 millions de personnes dans le besoin retenu pour 2025 est tombé à 5,1 millions dans l'estimation 2026, et que les évaluations de besoins ont elles-mêmes subi une baisse de capacité. Cette page ne commente aucun de ces chiffres : elle montre comment les manipuler sans les confondre.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels textes un projet malien doit-il faire lire à son juriste avant d'employer un assistant d'IA ?",
            'paragraphes' => [
                "Trois repères concernent le plus souvent une équipe qui s'équipe : la loi n° 04-038 du 5 août 2004 relative aux associations, que l'ordonnance n° 2024-008/PT-RM du 28 mars 2024 a modifiée, la loi n° 2013-015 du 21 mai 2013 sur les données personnelles, modifiée par la loi n° 2017-070 du 18 décembre 2017, et le contrat ou la convention qui lie le projet à son financeur. Cette page se limite aux titres et aux dates, sans commenter aucun article : ce qui vaut pour votre structure relève d'un juriste.",
                "Sur les associations, un rapport de l'ICNL publié en 2011 décrit la loi de 2004 et mentionne un mécanisme d'accord-cadre avec l'État pour les associations et les ONG nationales et étrangères. Ce rapport a plus de quinze ans et la loi a été modifiée depuis : le texte en vigueur, les décrets d'application et les procédures d'enregistrement se vérifient auprès de l'administration compétente avant toute décision. Pour la rédaction, retenez seulement ceci : les dossiers adressés à l'administration sont des pièces officielles, relues comme telles, et un premier jet d'assistant n'y entre qu'après avoir été vérifié ligne à ligne.",
                "Côté données, l'APDP, autorité chargée de cette protection, a ouvert le 6 octobre 2025 une session extraordinaire de cinq jours consacrée à environ deux mille dossiers de formalités déclaratives, selon APA (7 octobre 2025). Le même article rapporte qu'en 2025 l'autorité a infligé une amende de cinq millions de francs CFA à une clinique de Bamako pour entrave à une vérification, et que plus d'une centaine d'entreprises ont reçu des mises en demeure. Retenez-en un usage pratique : un projet qui collecte des données de personnes doit savoir s'il doit déclarer ses traitements, et c'est une question à poser à l'APDP ou à un juriste avant d'y verser des données dans un outil en ligne.",
                "La règle de travail enseignée reste la même pour tous : trois piles écrites par l'équipe. Dans la première, ce qui peut être saisi tel quel (textes publics, documents publiés). Dans la deuxième, les extraits dont on a d'abord effacé les identités (réponses ouvertes, morceaux de fiches). Dans la troisième, tout ce qui reste dans l'organisation en toutes circonstances (listes de noms, numéros de téléphone, photos, dossiers de santé). Le classement est écrit, signé par la direction et révisé quand un partenaire ou un texte l'exige.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels travaux d'une ONG malienne un assistant peut-il préparer, avec quel outil, et que vérifier ensuite ?",
            'legende' => "Chaque exercice repose sur des pièces que l'équipe adresse avant la session, personnes non identifiables. L'outil est celui que la structure possède déjà. La dernière colonne liste ce que le participant contrôle seul avant d'utiliser le texte.",
            'entetes' => ["Travail à confier", "Outil", "Résultat attendu", "Point de contrôle humain"],
            'lignes'  => [
                ["Tableau « chiffre, émetteur, date, périmètre » réunissant les nombres du plan 2026 relevés à deux dates (5,1 millions, 3,8 millions, 551 puis 577,9 millions de dollars)", "Claude ou ChatGPT", "Une page qui dit ce que chaque nombre mesure et à quelle date il a été lu", "Chaque nombre est pointé dans la page de l'émetteur ; l'outil ne calcule ni ne rapproche aucun total"],
                ["Paragraphe d'une note de plaidoyer sur l'écart de financement (23 % au 28 septembre 2026)", "ChatGPT ou Gemini", "Trois phrases sobres, avec montants reçus et recherchés", "Les montants viennent du dernier point d'OCHA ; la date est écrite dans la phrase"],
                ["Fiche de suivi d'un projet par cercle, destinée à un comité de pilotage", "Copilot ou Gemini", "Page unique : cercle, activités, réalisations, écarts, suite", "Les valeurs viennent du tableau de suivi ; elles sont rapprochées des cibles prévues au cadre logique"],
                ["Questionnaire de ménages à alléger avant chargement dans KoboCollect", "ChatGPT", "Questions à une seule idée, sans réponse suggérée", "Essai oral avec les enquêteurs ; aucune question ne subsiste sans indicateur auquel la rattacher"],
                ["Brouillon de description d'un traitement de données (finalité, catégories, durée de conservation) à soumettre au juriste", "Claude", "Fiche structurée en quatre rubriques", "Le juriste valide chaque rubrique ; l'outil n'indique ni obligation ni procédure"],
                ["Regroupement par thèmes des propos recueillis en entretiens collectifs, passés au préalable à l'anonymisation", "Claude ou ChatGPT", "Cinq à sept thèmes, chacun avec deux citations", "Le suivi-évaluation relit un tiers des propos et retire toute citation introuvable dans les notes"],
                ["Relevé d'une réunion entre organisations travaillant dans un même secteur", "Copilot ou Gemini", "Tableau : décision, responsable, date limite", "Chaque décision est retrouvée dans les notes de séance ; une date que personne n'a donnée reste vide"],
                ["Note de deux pages tirée d'une évaluation externe remise par un cabinet partenaire", "Claude", "Conclusions, limites, recommandations et numéros de page", "Une conclusion que le rapport ne contient pas est retirée"],
                ["Message aux relais communautaires annonçant un nouveau calendrier de distribution", "ChatGPT ou Gemini", "Texte court, sans jargon, prêt pour une traduction", "Dates et lieux sont repris du planning ; une personne qui parle la langue visée relit avant l'envoi"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que changent la connexion, les langues et la collecte hors ligne pour une formation à distance au Mali ?",
            'paragraphes' => [
                "Pour le Mali, DataReportal (Digital 2026, données de fin 2025) retient 25,4 millions d'habitants, dont 8,91 millions d'internautes (35,1 %), 23,2 millions de connexions mobiles, soit 91,6 %, et 2,40 millions d'identités de réseaux sociaux. Le rapport prévient que certaines connexions ne servent qu'à la voix et aux SMS et qu'une personne peut en détenir plusieurs. Une autre mesure existe : selon le ministre de l'Économie numérique, rapporté par Digital Africa Business le 19 mai 2024, le pays comptait fin 2023 plus de 25 millions d'abonnés mobiles et plus de 13 millions de clients internet, soit environ 42 %. Les deux séries n'ont ni la même date ni la même méthode et ne se rapprochent pas.",
                "Pour la formation, cela se traduit simplement : un assistant d'IA exige une liaison active, d'où un ordinateur et une connexion stable chez chaque participant. Les pièces de travail sont remises avant la séance, et la solution de repli prévue par la fiche de formation en cas de coupure est présentée en ouverture.",
                "Toujours selon cet exposé, la monnaie électronique comptait près de 17 millions de comptes, après plus de 14 millions en 2022. Aucun paiement mobile n'est enseigné : la session protège les listes de bénéficiaires et de numéros de téléphone qui accompagnent ces versements, car un fichier de transferts contient des données personnelles.",
                "Pour la collecte, KoboToolbox explique dans sa documentation qu'une fois les formulaires téléchargés dans KoboCollect, aucune connexion n'est nécessaire pour saisir, que les mises à jour des formulaires demandent un accès en ligne et que les formulaires terminés hors ligne sont souvent envoyés en lot dès qu'un réseau est disponible. L'application est décrite comme adaptée aux équipes d'enquêteurs munis de téléphones ou de tablettes Android. L'assistant d'IA reste donc en amont, pour alléger le questionnaire, et en aval, pour résumer des données déjà anonymisées. Richard n'enseigne pas la prise en main de KoboToolbox.",
                "Quant aux langues, le texte de la Constitution de 2023 publié par l'université Laval range, à son article 31, les langues nationales parmi les langues officielles, désigne le français comme langue de travail et laisse à l'État la faculté d'en adopter une autre. Les séances de Richard se tiennent en français. Un texte à destination des communautés, produit dans une langue nationale, est toujours relu par un locuteur avant diffusion : un assistant peut produire un message fluide et pourtant inexact.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format pour une équipe malienne, et que faire de l'heure d'écart entre Bamako et Cotonou ?",
            'legende' => "Durées et effectifs sont ceux de la fiche de formation. Depuis Cotonou, une équipe malienne suit en visioconférence, selon le découpage des séances à distance ; le découpage des autres formats se précise au cadrage. Dans la base des fuseaux horaires de l'IANA, Africa/Bamako est rattachée à Africa/Abidjan (heure de Greenwich, UTC+0) et Africa/Porto-Novo à Africa/Lagos (UTC+1). Cotonou est donc en avance d'une heure sur Bamako : 9 h à Bamako, 10 h à Cotonou.",
            'entetes' => ["Format", "Durée", "Groupe", "Quand le choisir"],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "12 personnes au plus", "Une direction qui veut voir l'assistant à l'œuvre sur ses documents avant de décider"],
                ["Formation complète", "Deux jours, soit 4 demi-journées de 3 h 30", "10 personnes au plus, par fonction", "Un service de suivi-évaluation, de finances ou de communication dont les membres rédigent tous les mois"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Une équipe répartie entre Bamako et des antennes régionales, ou rattachée à un siège dans un autre pays"],
                ["Accompagnement mensuel", "Trois mois, une demi-journée par mois", "Les personnes déjà formées", "Ajouter de nouvelles tâches et reprendre les mauvaises habitudes prises depuis la session"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles séances de travail une équipe malienne pourrait-elle suivre ?",
            'intro' => "Quatre situations inventées, sans donnée réelle : un tableau de chiffres du plan à dater, une description de traitement à préparer pour le juriste, un questionnaire à alléger avant la collecte, une liste de transferts à protéger. À chaque fois, le participant contrôle le résultat avant de l'employer.",
            'items' => [
                ['titre' => "Un tableau de chiffres du plan à dater", 'texte' => "Situation : une chargée de plaidoyer fictive, à Bamako, prépare une note et dispose de deux séries de nombres, celles de décembre 2025 et celles de février 2026. Consigne donnée : coller les deux extraits avec leur date et demander un tableau « chiffre, émetteur, date, ce qu'il mesure », sans aucun rapprochement. Vérifications de la participante : elle pointe chaque nombre dans la page de l'émetteur, supprime toute phrase qui compare les deux séries comme si elles étaient simultanées, et fait relire le tableau par le suivi-évaluation."],
                ['titre' => "Une fiche de description de traitement pour le juriste", 'texte' => "Situation : un responsable de données fictif, à Sikasso, veut lancer un registre de bénéficiaires et ne sait pas par où commencer. Consigne donnée : décrire en langage simple l'objectif, les catégories de données, les personnes qui y accèdent et la durée de conservation prévue, puis lister les points laissés vides. Vérifications du participant : l'outil n'a reçu aucune donnée nominative, aucune obligation légale n'est affirmée dans le texte, et le document part au juriste ou à l'APDP pour avis avant tout lancement."],
                ['titre' => "Un questionnaire de ménages à alléger avant la collecte", 'texte' => "Situation : un projet fictif d'appui aux cultures maraîchères à Ségou a un questionnaire de soixante questions, écrit à plusieurs mains, avec des sigles qui changent d'une page à l'autre. Consigne donnée : repérer les questions doubles et les formulations qui soufflent la réponse, puis proposer des versions plus courtes. Ce que le participant contrôle : toute question conservée se rattache à un indicateur, les enquêteurs testent la version courte à voix haute, et la traduction dans la langue de l'enquête est relue par quelqu'un qui la parle avant le passage sur tablette."],
                ['titre' => "Une liste de transferts à ne pas exposer", 'texte' => "Situation : à Mopti, un assistant administratif fictif voudrait confier à un assistant en ligne le registre des ménages inscrits à une aide monétaire (noms, villages, numéros) pour obtenir des totaux par commune. Consigne donnée : ranger chaque colonne dans une des trois piles, puis reformuler la demande avec des identifiants codés. Ce que le participant contrôle : plus aucun nom ni numéro, des villages remplacés par des codes, aucun ensemble de détails qui désigne un foyer précis, et une question écrite au juriste sur un éventuel envoi hors du pays."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment inscrire une formation IA dans le budget d'un projet malien financé par un bailleur ?",
            'paragraphes' => [
                "Le premier réflexe est de relire la convention de financement : une ligne de renforcement des capacités, de formation ou de frais de fonctionnement peut déjà couvrir la dépense. Dans d'autres cas, le bailleur exige une demande de modification budgétaire avant tout engagement. Lui seul décide, et nulle prise en charge n'est assurée par cette page. La demande est accompagnée du programme et d'un devis en FCFA.",
                "Aucun fonds public de formation n'est présenté ici comme ouvert aux ONG : les règles d'accès d'une association à un tel fonds, ni celles qui concernent un prestataire installé à l'étranger, ne sont établies à ce jour. Écrivez au fonds avant d'asseoir un budget sur lui.",
                "Richard ne revendique ni agrément de fonds ni certification d'éditeur. En fin de session, chaque participant reçoit une attestation nominative, avec le programme, les supports et les feuilles de présence, pièces à joindre, si le bailleur les accepte, à un justificatif de dépense. Sans financeur, la structure peut inscrire la dépense à son fonctionnement et la répartir entre un format court et un accompagnement mensuel.",
                "Une précaution de budget : séparer la formation proprement dite des abonnements aux assistants. Ceux-ci sont souscrits par l'organisation, à son nom, sur un compte tenu par un responsable, ce qui évite des abonnements éparpillés sur des cartes personnelles.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien prévoir pour former une équipe d'ONG au Mali, et qu'est-ce qui fait varier le devis ?",
            'intro' => "Il n'existe pas de grille publique : le prix naît d'un devis en FCFA, rédigé poste par poste après l'échange de cadrage. Les licences des assistants restent à la charge de votre organisation. Pour régler, la fiche de l'entreprise cite Mobile Money, carte bancaire, PayPal, virement ou espèces ; les moyens utilisables depuis le Mali se confirment avec le devis.",
            'items' => [
                ['offre' => "Atelier découverte", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée sur des documents de votre structure, personnes non identifiables", "Deux tâches prises en main", "Règles de base sur les fichiers de bénéficiaires", "Avis sur la suite utile"]],
                ['offre' => "Formation complète", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées de 3 h 30, groupes par fonction", "Cas bâtis sur vos rapports et vos tableaux de suivi", "Épreuve finale chronomètre en main, attestation nominative", "Canal direct le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée par mois pendant trois mois", "Point sur l'usage réel", "Corrections et tâches ajoutées"]],
            ],
            'variations' => [
                "Le nombre de participants et la manière de les regrouper par fonction (programme, suivi-évaluation, finances, communication).",
                "Le nombre de séances en visioconférence et leur durée.",
                "Le temps consacré à réunir vos pièces et à en retirer les identités avant la session.",
                "La part de la formation dédiée aux rapports de bailleurs, aux dossiers administratifs ou à la collecte de terrain.",
                "Le choix de prolonger par un accompagnement mensuel.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs menacent une ONG malienne qui débute avec l'IA ?",
            'intro' => "Les débuts se heurtent presque toujours aux mêmes écueils : chiffres sans date, données de bénéficiaires envoyées trop vite, citations arrangées, traductions non relues, comptes personnels. Des règles écrites avant le premier essai évitent la plupart d'entre eux.",
            'items' => [
                ['titre' => "Recopier un chiffre sans sa date", 'texte' => "Le plan 2026 existe en plusieurs versions et le taux de financement change chaque mois. Le chiffre se prend à la source, se date dans la phrase et se pointe dans le résultat de l'outil."],
                ['titre' => "Demander à l'assistant de dire ce qu'exige la loi", 'texte' => "Un assistant formule volontiers une obligation qui n'existe pas, ou en oublie une. Les textes se font lire par un juriste, et l'outil sert au plus à préparer les questions."],
                ['titre' => "Verser un fichier de transferts dans un compte gratuit", 'texte' => "Noms, numéros et villages ne sont pas des données de test. Le tri en trois piles se fait avant l'envoi, jamais après."],
                ['titre' => "Arranger la parole d'une personne interrogée", 'texte' => "L'outil peut inventer une formule crédible que nul n'a prononcée. Une citation vient d'un entretien, avec l'accord de la personne, et se reproduit mot pour mot."],
                ['titre' => "Diffuser une traduction sans relecteur", 'texte' => "Un terme maladroit dans un message de distribution ou une question d'enquête change ce que l'on obtient. Un locuteur relit avant tout envoi."],
                ['titre' => "Laisser chaque agent s'abonner de son côté", 'texte' => "L'organisation ne sait plus qui utilise quoi ni où dorment les conversations. Un compte unique, au nom de la structure, rend les coûts lisibles et protège les historiques à chaque départ."],
                ['titre' => "Reporter la charte de données", 'texte' => "Les règles de tri se mettent par écrit avant tout essai sur des données réelles, reçoivent la signature de la direction, puis évoluent avec les demandes d'un partenaire."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier la formation d'une équipe d'ONG malienne à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Mali figure parmi les " . count((array) fait('pays_travailles')) . " pays où Richard a travaillé, sur place ou à distance. Auprès des organisations maliennes qui portent des projets, il peut former à distance aux gestes de l'assistant, sur des pièces issues de votre quotidien : rapports, tableaux de suivi, courriers. Ses projets sont présentés sur la page des <a href='/realisations/'>réalisations</a>.",
                "Richard n'a ni la mission d'évaluer des projets ni celle de piloter une action humanitaire. Repères : " . $ans . " ans dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), un total déclaré de plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à base d'IA pensé pour les sociétés francophones du continent, et fait partie des fondateurs d'<a href='https://audyxa.com'>Audyxa</a>.",
                "Côté méthode, un premier message reçoit une réponse sous 24 heures, puis vient un échange de cadrage, parfois deux ; l'un d'eux peut aboutir à un simple atelier. Un questionnaire précède la session, vos pièces arrivent avant elle et les supports restent modifiables. Richard ne détient aucun diplôme d'éditeur. Pour approfondir : le tronc commun dans <a href='/formations/ia-en-entreprise'>IA en entreprise</a>, le traitement des données dans <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, la lecture d'un chiffre dans <a href='/formations/data-literacy'>décider avec les données</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Un rapport de bailleur ou une note de plaidoyer est-il en préparation ?",
            'texte'  => "Indiquez la taille de l'équipe, les fonctions concernées, la ville, la prochaine échéance de rapport et les logiciels en place. Une première réponse arrive sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander une formation IA pour mon équipe"],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mon ONG à l'IA à Bamako, à Sikasso ou ailleurs au Mali ?", 'r' => "Depuis Cotonou, Richard SALANON peut animer en visioconférence une session sur l'IA pour du personnel malien de structures associatives ou de projets. Les outils vus : ChatGPT, Claude, Gemini, Copilot, sur vos pièces. Il ne détient aucune certification d'éditeur. Le devis est en FCFA."],
        ['q' => "Pourquoi trouve-t-on 551 puis 577,9 millions de dollars pour le plan 2026 du Mali ?", 'r' => "La page OCHA du plan conserve deux séries : 551 millions de dollars lors du lancement du 8 décembre 2025, 577,9 millions dans les chiffres courants publiés le 5 février 2026. Écrivez toujours la date de lecture à côté d'un montant."],
        ['q' => "Où en était le financement du plan humanitaire 2026 du Mali ?", 'r' => "Selon APA, qui cite OCHA, le plan était financé à 23 % au 28 septembre 2026 : 135,6 millions de dollars sur 577,9 millions recherchés. Ce taux évolue ; la source à citer est le dernier point publié par OCHA."],
        ['q' => "Un assistant d'IA peut-il me dire si mon projet doit déclarer un traitement de données à l'APDP ?", 'r' => "Non. Il peut aider à décrire le traitement (finalité, catégories de données, durée), mais l'obligation et la procédure se demandent à l'APDP ou à un juriste. La loi n° 2013-015 du 21 mai 2013, modifiée en 2017, est le texte à lui faire lire."],
        ['q' => "Peut-on coller une liste de ménages inscrits à une aide monétaire dans ChatGPT ou Claude ?", 'r' => "Non, pas en l'état. Le fichier est d'abord trié colonne par colonne dans les trois piles de la formation ; seuls des extraits codés sont ensuite proposés à l'assistant. Un départ de données hors du pays se discute par écrit avec le juriste, avant le premier essai."],
        ['q' => "KoboCollect fonctionne-t-il sans connexion, et où l'IA intervient-elle ?", 'r' => "La documentation de KoboToolbox précise qu'après téléchargement des formulaires la saisie se fait sans réseau, l'envoi groupé attendant une connexion. L'IA entre en jeu en amont, sur la rédaction du questionnaire, puis en aval sur des données déjà anonymisées."],
        ['q' => "Les séances peuvent-elles se tenir dans une langue nationale du Mali ?", 'r' => "Elles se déroulent en français, langue de travail d'après l'article 31 de la Constitution de 2023. Tout message pour les communautés rédigé dans une langue nationale passe par un locuteur, qui le contrôle avant l'envoi."],
        ['q' => "Que dit-on de l'accès à Internet pour suivre une formation à distance au Mali ?", 'r' => "DataReportal (fin 2025) dénombre 8,91 millions d'internautes, soit 35,1 % des habitants, et 23,2 millions de connexions mobiles, dont certaines limitées à la voix. Il faut un ordinateur et un réseau stable par participant, des documents reçus avant la séance et une solution de repli connue de tous."],
        ['q' => "Quel est le décalage horaire entre Bamako et Cotonou ?", 'r' => "Une heure, toute l'année. Dans la base IANA, Bamako suit Abidjan (UTC+0) et Porto-Novo suit Lagos (UTC+1) : une réunion fixée à 14 h à Bamako débute à 15 h à Cotonou."],
        ['q' => "Un fonds public finance-t-il une formation IA pour une ONG malienne ?", 'r' => "Rien ne permet d'affirmer qu'une ONG malienne y a accès : les règles d'un fonds public ne sont pas établies ici, et aucune prise en charge n'est promise. Interrogez le fonds, ou votre bailleur, par courrier, avec le programme et le devis."],
        ['q' => "Quel est le prix, et en quelle monnaie ?", 'r' => "Aucun montant n'est publié. Le devis, en FCFA et poste par poste, suit l'échange de cadrage et change selon l'effectif, le format, le travail préalable sur vos pièces et un éventuel suivi. Les abonnements aux assistants sont souscrits par vous."],
        ['q' => "Reçoit-on une attestation à la fin ?", 'r' => "Chaque participant repart avec une attestation à son nom, accompagnée du programme, des supports et des feuilles de présence. Ce document n'a valeur ni de diplôme ni de certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "OCHA, Mali : besoins humanitaires et plan de réponse 2026 (humanitarianaction.info, publié le 5 février 2026)", 'url' => 'https://humanitarianaction.info/plan/1511/article/mali-4', 'date' => '2026-10-27'],
        ['titre' => "APA, Mali : 3,8 M de personnes ciblées par le plan humanitaire 2026 (6 février 2026)", 'url' => 'https://fr.apanews.net/community/mali-38-m-de-personnes-ciblees-par-le-plan-humanitaire-2026/', 'date' => '2026-10-27'],
        ['titre' => "APA, Mali : le plan humanitaire financé à seulement 23 % (1er octobre 2026)", 'url' => 'https://fr.apanews.net/society/mali-le-plan-humanitaire-finance-a-seulement-23/', 'date' => '2026-10-27'],
        ['titre' => "Sida, Humanitarian Crisis Analysis 2026 : Mali (31 mars 2026)", 'url' => 'https://cdn.sida.se/app/uploads/2026/04/22144214/Mali-HCA-2026_March-2026-Short.pdf', 'date' => '2026-10-27'],
        ['titre' => "APA, Mali : l'APDP examine 2 000 dossiers et un projet d'arrêté (7 octobre 2025)", 'url' => 'https://fr.apanews.net/community/mali-lapdp-examine-2-000-dossiers-et-un-projet-darrete/', 'date' => '2026-10-27'],
        ['titre' => "ICNL, Report on the Laws and Regulations Governing Civil Society Organizations in Mali (2011)", 'url' => 'https://www.icnl.org/research/library/mali_malien2011/', 'date' => '2026-10-27'],
        ['titre' => "Journal officiel du Mali, loi n° 04-038 du 5 août 2004 relative aux associations", 'url' => 'https://sgg-mali.ml/JO/2004/mali-jo-2004-26.pdf', 'date' => '2026-10-27'],
        ['titre' => "Journal officiel du Mali (29 décembre 2017), loi n° 2017-070 du 18 décembre 2017 modifiant la loi n° 2013-015 du 21 mai 2013", 'url' => 'https://sgg-mali.ml/JO/2017/mali-jo-2017-53.pdf', 'date' => '2026-10-27'],
        ['titre' => "Maliweb, projet de loi de ratification de l'ordonnance n° 2024-008/PT-RM du 28 mars 2024 modifiant la loi n° 04-038", 'url' => 'https://www.maliweb.net/politique/mali-creation-dassociations-au-mali-la-formalite-administrative-dautorisation-et-de-declaration-prealable-rendue-obligatoire-3066638.html', 'date' => '2026-10-27'],
        ['titre' => "DataReportal, Digital 2026 : Mali", 'url' => 'https://datareportal.com/reports/digital-2026-mali', 'date' => '2026-10-27'],
        ['titre' => "OSIRIS, Mali : le marché du mobile et les services financiers numériques (reprise de Digital Africa Business, 19 mai 2024)", 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-27'],
        ['titre' => "Université Laval (CEFAN), Constitution du Mali de 2023, article 31", 'url' => 'https://axl.cefan.ulaval.ca/afrique/mali-const-2023.htm', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Bamako vers Africa/Abidjan, Africa/Porto-Novo vers Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : zones Africa/Abidjan et Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
