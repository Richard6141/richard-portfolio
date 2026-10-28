<?php
// ============================================================
// data/metiers/ong-projets-developpement/togo.php · Page métier + pays :
// ONG et projets de développement au Togo. Statut de la ligne du métier : F ;
// la tâche impose la formule « Richard peut former ».
// Faits externes lus le 27/10/2026 : Journal officiel du 29 octobre 2019 (loi relative
// à la protection des données, articles 2, 4, 6, 21, 28 et 29, lus dans le PDF),
// CIVICUS Monitor (décret 2022-002/PR, 15 juillet 2022), délégation de l'Union
// européenne (rencontre du 8 avril 2026 ; appel à propositions 2024), Republic of Togo
// (aide américaine, 3 mars 2025 ; FNAFPP, 30 juin 2010), Global Voices (aide américaine,
// langues), Banque mondiale (Novissi), ARCEP (T1 2026), DataReportal, KoboToolbox, IANA.
// Non établi et donc retiré : texte du décret 2022-002/PR (non lu), circulaire de 2024
// (article inaccessible), conditions d'accès des ONG au FNAFPP (non publiées).
// Aucun projet de portfolio/data/projets-clients.php n'est situé au Togo.
// Aucune pratique de Richard hors faits.php et fiche ia-en-entreprise ; il ne forme
// pas à un outil de collecte. Aucune somme pour une formation. Aucune certification.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les ONG et les projets de développement au Togo : vos équipes de suivi-évaluation, de terrain et de coordination rédigent, résument et vérifient avec ChatGPT, Claude, Gemini ou Copilot, sans exposer les données des bénéficiaires",
    'title'   => "Formation IA des équipes d'ONG au Togo | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Togo : notes aux bailleurs, suivi-évaluation, données des bénéficiaires. À distance, devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les équipes d'ONG et de projets de développement du Togo à utiliser ChatGPT, Claude, Gemini ou Copilot sur leurs propres documents, en vérifiant chaque chiffre et en protégeant les données des bénéficiaires. Les séances suivent les heures de bureau de Lomé, une heure de moins qu'à Cotonou, en français. Les exercices partent des notes succinctes, des rapports et des tableaux d'indicateurs de votre projet, anonymisés. Le devis est établi en FCFA, après un échange de cadrage.",
    'publie'  => '2026-12-17',
    'maj'     => '2026-12-17',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes d'ONG et de projets au Togo à l'IA, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les équipes d'ONG et de projets de développement du Togo à l'usage quotidien des assistants d'IA, sur leurs propres documents et dans leurs propres comptes. Les séances suivent les heures de bureau de Lomé, en français, et le devis est établi en FCFA après un échange de cadrage.",
                "Pour une ONG, le choix d'un formateur se joue sur la nature des écrits. Ce qu'une équipe rédige sert rarement à vendre : il rend compte à un financeur, à un ministère de tutelle ou à une communauté. Une note succincte déposée pour un appel à propositions, un rapport d'étape, un compte rendu de tournée, un courrier de clarification adressé à un bailleur engagent l'organisation. Une bonne formation s'appuie donc sur ces documents précis, et non sur un tour d'horizon des possibilités d'un assistant.",
                "Pour trier les offres, posez au formateur des questions concrètes. Travaille-t-il sur vos notes succinctes, vos fiches d'activité et vos tableaux, une fois les noms retirés, ou sur des textes d'exemple sans lien avec votre projet ? Quelles informations sur les familles et les enfants que vous suivez refuse-t-il de voir entrer dans un assistant en ligne ? Le groupe est-il assez petit pour qu'il lise le travail de chaque participant ? Et à la fin, que garde l'équipe : une méthode pour contrôler les textes, des fiches pratiques, des documents qu'elle peut modifier ?",
                "Le périmètre est volontairement étroit. Richard n'est ni évaluateur, ni gestionnaire de projet, ni spécialiste du suivi : son métier ici est d'apprendre à se servir des assistants d'IA. Votre cadre de résultats et vos indicateurs restent ceux de votre équipe. Le logiciel de collecte, lui, s'apprend dans la documentation de son éditeur. La séance porte sur ce qui l'entoure : préparer un texte, le rédiger avec l'assistant, puis le contrôler avant qu'il quitte l'organisation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels financeurs pèsent sur les ONG togolaises, et que changent-ils à la rédaction des projets ?",
            'paragraphes' => [
                "Chaque financeur impose son format de compte rendu, et la rédaction suit le bailleur. Trois faits datés situent le contexte togolais : un appel de l'Union européenne ouvert en 2024, une rencontre de la délégation européenne avec les réseaux d'ONG en avril 2026, et les effets de la suspension de l'aide américaine décrits par la presse en 2025.",
                "Le 25 mars 2024, la délégation de l'Union européenne au Togo a publié l'appel à propositions EuropeAid/181086/DD/ACT/TG, consacré à la société civile et aux droits de l'homme. Il annonçait une enveloppe d'environ 1 967 500 000 FCFA, soit 3 millions d'euros, pour des projets de 36 à 48 mois mis en oeuvre au Togo. Il s'adressait aux organisations de la société civile formellement constituées ; le chef de file devait agir avec deux codemandeurs établis au Togo, et les subventions à des tiers devaient figurer parmi les principaux moyens de mise en oeuvre. Les notes succinctes se déposaient en ligne avant le 7 mai 2024 à 12 h, heure de Bruxelles. Cet exemple est un appel parmi d'autres : il montre simplement que le premier écrit d'une organisation est souvent une note courte, à rédiger avec précision.",
                "Le 14 avril 2026, la même délégation a rendu compte d'une rencontre tenue le 8 avril avec quatre réseaux de la société civile togolaise, RONGITO, UONGTO, FONGTO et COFET, et avec l'Équipe Europe, composée de l'Union européenne, de la France, de l'Allemagne et du Luxembourg. Étaient à l'ordre du jour l'évolution du cadre légal, la nouvelle loi sur la microfinance, la situation dans la région des Savanes, la feuille de route 2025-2027 pour la société civile et les opportunités de financement à venir. La page présente aussi un appel à propositions en cours, en deux lots : les droits de l'homme (conditions carcérales) et la société civile (violences basées sur le genre, notamment dans les Savanes, et protection de l'enfance en situation de grande vulnérabilité dans le Grand Lomé). Elle ne donne ni montant ni date limite.",
                "Du côté américain, Republic of Togo a publié le 3 mars 2025 un article sur la suspension de l'aide américaine et ses effets sur la prévention du VIH. Le président national d'une organisation de lutte contre le VIH y explique que sa structure disposait de deux sources de financement, le Fonds mondial et le financement américain, et que la suspension a arrêté des campagnes de sensibilisation, la distribution d'intrants de prévention et le dépistage. Global Voices, dans un article daté en français du 14 février 2025, rappelle pour sa part que le programme d'alimentation scolaire McGovern-Dole, financé par l'USAID et mis en oeuvre par Catholic Relief Services, représentait 33 millions de dollars en 2023, et cite Togo First pour les décaissements du PEPFAR : 9,2 millions de dollars en 2023 et 6,2 millions en 2024.",
                "Ces faits décrivent des programmes précis, pas l'ensemble du secteur : aucun ne mesure le financement des ONG togolaises dans leur ensemble. Ils éclairent seulement le quotidien de la rédaction, où un même chiffre doit se retrouver à l'identique dans une note, un rapport d'étape et un courrier. L'assistant peut accélérer ce travail, mais seul un contrôle contre la base du projet garantit que le chiffre est le bon.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel cadre juridique s'applique aux ONG et aux fiches de bénéficiaires au Togo ?",
            'paragraphes' => [
                "Deux textes se lisent côte à côte : le décret qui organise la coopération entre les ONG et le gouvernement, et la loi n° 2019-014 du 29 octobre 2019 sur les données personnelles. Ni l'un ni l'autre ne traite de l'IA. Les voici rapportés tels quels, sans commentaire juridique : pour votre situation, seul un juriste, ou l'Instance de protection des données à caractère personnel (IPDCP), peut conclure.",
                "Côté ONG, CIVICUS Monitor a publié le 15 juillet 2022 une note sur le décret n° 2022-002/PR. Selon cette note, le Conseil des ministres l'a approuvé le 5 janvier 2022 ; une note circulaire n° 0079 du 6 avril 2022 demande aux entités décentralisées de veiller à la conformité des activités des ONG avec les critères du gouvernement ; l'entrée en vigueur est annoncée pour avril 2023, après une période transitoire d'un an. La note rapporte que le décret demande aux ONG d'aligner leurs activités sur les priorités de développement du gouvernement et de notifier leurs activités aux préfets, aux maires et aux directeurs régionaux de la planification du développement, sous peine de suspension. Le texte du décret n'a pas été lu pour cette page : avant de vous fier à ce résumé, vérifiez le régime actuel auprès de l'administration compétente.",
                "Pour les données personnelles, la loi est publiée au Journal officiel de la République togolaise du 29 octobre 2019. Son article 4 définit les données sensibles comme toutes les données relatives, entre autres, à l'origine raciale ou ethnique, aux opinions ou activités religieuses, philosophiques, politiques ou syndicales, à la vie sexuelle, à la santé, aux mesures d'ordre social, aux poursuites et aux sanctions. L'article 21 interdit de collecter et de traiter des données qui révèlent notamment l'origine raciale ou ethnique, les opinions politiques, les convictions religieuses ou philosophiques, l'appartenance syndicale, la vie sexuelle ou l'état de santé ; l'article 22 énumère des exceptions. Dans un projet de santé, de protection de l'enfance ou d'appui social, presque chaque fiche de ménage tombe donc dans ces catégories.",
                "L'article 2 vise notamment tout traitement conduit par un responsable, qu'il soit établi ou non au Togo, dès lors qu'il utilise des moyens de traitement situés au Togo, le simple transit mis à part. L'article 28 n'autorise le transfert vers un pays tiers, c'est-à-dire selon l'article 4 tout État autre que le Togo, qu'à la condition que cet État offre une protection suffisante ; avant tout transfert, le responsable du traitement doit informer l'IPDCP, qui donne un avis motivé. L'article 29 prévoit des cas de transfert ponctuel. L'article 6 soumet à déclaration auprès de l'IPDCP les traitements qui ne relèvent pas des autres régimes, avec un récépissé délivré dans un délai maximal d'un mois. Déposer un fichier de ménages dans un assistant dont les serveurs sont à l'étranger soulève d'abord la question du transfert, avant toute utilisation.",
                "Le texte qui vous vise se fait confirmer par l'IPDCP. En attendant, la formation met l'équipe au travail sur trois listes écrites : ce qui peut être saisi dans un assistant, ce qui ne l'est qu'après anonymisation, ce qui reste hors de l'outil.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches de projet déléguer à un assistant au Togo, avec quel outil, et que vérifie le participant ?",
            'legende' => "Exercices montés pendant la préparation à partir des pièces anonymisées que le projet remet. L'outil employé est celui que l'organisation a déjà : ChatGPT, Claude, Gemini ou Copilot. La colonne de droite liste ce que chacun apprend à vérifier lui-même avant de se servir du résultat.",
            'entetes' => ["Tâche à déléguer", "Outil", "Résultat attendu", "Point de contrôle humain"],
            'lignes'  => [
                ["Note succincte pour un appel à propositions, à partir du cadre logique et des priorités annoncées", "Claude ou ChatGPT", "Premier jet structuré selon les rubriques et la longueur imposées par l'appel", "Chaque critère d'éligibilité de l'appel est relu à la source ; aucun montant, aucune durée ni aucun partenaire n'a été ajouté par l'assistant"],
                ["Chapitre « résultats du trimestre » d'un rapport narratif, tiré des fiches d'activité", "Claude ou ChatGPT", "Ébauche organisée selon le plan imposé par le financeur", "Chaque nombre se retrouve dans la base du projet ; l'assistant n'en a complété aucun"],
                ["Résumé de 40 pages de rapport annuel à présenter au comité de pilotage", "Claude ou Copilot", "Résumé qui renvoie aux pages, avec un tableau des indicateurs", "Chaque chiffre est vérifié à sa page dans le rapport d'origine"],
                ["Version anglaise d'une note destinée à un partenaire étranger", "ChatGPT ou Gemini", "Traduction qui garde le ton de l'organisation", "Lecture par une personne bilingue : sigles, localités, noms propres et dates"],
                ["Compte rendu d'une tournée en préfecture ou en canton, rédigé depuis des notes en vrac", "Copilot ou Gemini", "Décisions, actions, responsables et échéances présentés en tableau", "Pas de décision inventée ni oubliée ; chaque date vient des notes"],
                ["Courrier d'information aux autorités locales sur les activités du projet", "ChatGPT ou Claude", "Projet de courrier courtois, avec lieux, dates et nature des activités", "Les informations sont conformes à ce que la direction a validé ; le texte exigé par l'administration est confirmé auprès d'elle"],
                ["Questionnaire à raccourcir et à clarifier, question par question", "ChatGPT", "Questions allégées, une seule idée chacune", "Essai auprès des enquêteurs ; chaque traduction en éwé, en kabyè ou en mina passe par un locuteur"],
                ["Réponses ouvertes déjà anonymisées, à regrouper en thèmes", "ChatGPT ou Claude", "Thèmes suggérés, illustrés de verbatims", "Un échantillon relu à la main ; l'équipe nomme et valide les thèmes, l'outil ne le fait jamais seul"],
                ["Échanges WhatsApp de coordination, pleins d'abréviations et de fautes", "ChatGPT", "Tableau des activités rangées par lieu puis par date", "On confronte le tableau aux fiches d'activité ; il ne contient aucun nom de bénéficiaire"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain pèsent sur la formation au Togo, et comment s'y adapte-t-elle ?",
            'paragraphes' => [
                "Deux limites s'imposent sur place : le réseau et la diversité des langues. Selon DataReportal (Digital 2026), le Togo comptait 3,62 millions d'internautes fin 2025, soit 37,0 % de la population, pour 8,40 millions de connexions mobiles. Chaque séance suppose donc un ordinateur relié à un réseau fiable, des pièces déjà téléchargées, et un plan B prévu à l'avance.",
                "L'observatoire du premier trimestre 2026 de l'ARCEP, le régulateur des communications électroniques, compte 9 947 573 abonnements mobiles actifs, soit un taux de pénétration de 113,5 %, puisqu'il dénombre des cartes SIM et non des personnes. Il relève 5 464 688 abonnements à la data mobile haut débit, soit 62,35 % de la population, contre 145 344 abonnements à la fibre à domicile, soit 1,66 %. La consommation moyenne de data mobile est passée de 58 à 115 mégaoctets par jour et par abonné entre le premier trimestre 2025 et le premier trimestre 2026.",
                "Ces mesures valent pour le pays, pas pour un bureau de projet donné, mais elles montrent que le téléphone est l'appareil le plus répandu et la fibre une rareté. La formation s'ajuste sur deux points. Les assistants fonctionnant en ligne, chaque participant doit disposer d'un ordinateur et d'une connexion stable. Pour le travail de terrain, les exercices retiennent ce qui se prépare au bureau et se contrôle sans réseau : consignes rédigées hors ligne, pièces récupérées la veille, relecture d'un fichier enregistré sur le poste.",
                "Le fonctionnement de la collecte se lit dans l'aide en ligne des éditeurs. D'après celle de KoboToolbox, une fois les formulaires chargés dans KoboCollect, on peut collecter sans aucune connexion, les formulaires étant souvent remplis hors ligne puis expédiés ensemble au retour du réseau, et l'application s'adresse surtout aux enquêteurs munis d'un téléphone ou d'une tablette Android. L'assistant d'IA reste en dehors de cette phase de terrain : il sert en amont, pour clarifier le questionnaire, et en aval, pour résumer ou rédiger à partir de données consolidées puis anonymisées.",
                "Les langues sont la seconde contrainte. Selon Global Voices (22 février 2024), le français est langue officielle, l'éwé et le kabyè sont désignés langues nationales par la constitution, l'éwé étant parlé dans le sud et le kabyè dans le nord ; plus de 50 langues sont en usage. L'article désigne le mina, puis un parler mixte, le miwé, comme la langue la plus répandue, et ne donne aucun pourcentage. Côté outil, KoboToolbox admet dans un même formulaire autant de traductions qu'on le souhaite ; un texte oublié dans l'une d'elles s'affiche comme un champ vide. Les assistants s'expriment bien en français. En éwé, en kabyè ou en mina, un locuteur doit lire la production avant qu'on s'en serve, et l'on essaie la traduction d'un questionnaire à voix haute devant les enquêteurs.",
                "Une coupure en pleine séance à distance ne l'arrête pas : les supports d'exercice sont déjà sur chaque poste, et le groupe poursuit sans réseau le temps que la connexion revienne.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formule choisir pour une équipe d'ONG togolaise, et comment se passent les séances menées depuis Cotonou ?",
            'legende' => "Pour le Togo, toutes les formules passent par la visioconférence. Les horaires s'alignent sur ceux des bureaux de Lomé, en heure GMT sans changement saisonnier : quand il est 9 h à Lomé, il est 10 h à Cotonou, en GMT+1 (fuseau Afrique de l'Ouest dans la base de l'IANA). On peut associer plusieurs formules.",
            'entetes' => ["Format", "Durée", "Groupe", "Quand le choisir"],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "12 personnes au plus", "Une direction qui veut voir le travail avant de décider, ou une équipe qui n'a encore jamais ouvert un assistant"],
                ["Formation complète", "2 jours, en 4 demi-journées de 3 h 30", "10 personnes au plus, par fonction", "Une cellule de suivi-évaluation ou de coordination qui utilise déjà l'IA sans méthode, ou un rapport volumineux à retravailler étape par étape"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Des agents répartis entre Lomé, les Savanes et d'autres régions, ou rattachés à un siège hors du Togo"],
                ["Session mutualisée", "1 à 2 jours", "Plusieurs structures d'un même réseau", "Une ou deux personnes de chaque structure du réseau ; les cas sont publics ou inventés, aucun dossier interne n'est ouvert"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Ajouter d'autres tâches et rattraper ce qui s'est effacé avec le temps"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que fait-on concrètement pendant quatre séances avec une équipe d'ONG togolaise ?",
            'intro' => "Quatre scènes imaginées pour une équipe togolaise : une note succincte, un questionnaire de ménages, un tableau de bénéficiaires à protéger et une synthèse en deux langues. Aucune donnée réelle n'est utilisée en séance, et chaque résultat est contrôlé par la personne avant tout emploi.",
            'items' => [
                ['titre' => "La note succincte d'un projet de protection de l'enfance à Lomé", 'texte' => "Situation : une responsable de projet doit répondre à un appel à propositions avec une note de quelques pages, à partir d'un cadre logique et de trois rapports précédents écrits par des personnes différentes. Consigne donnée : fournir à l'assistant les rubriques et la limite de longueur de l'appel, le cadre logique et les rapports anonymisés, lui demander un plan conforme, puis un premier jet par rubrique, en lui interdisant tout chiffre, tout partenaire et toute durée absents des documents fournis. Ce que la participante contrôle : chaque critère de l'appel est relu à la source officielle, chaque nombre renvoie à un document du projet, et aucune phrase ne promet un résultat que l'équipe n'a pas décidé de s'engager à atteindre. Un collègue relit ensuite l'ensemble et réclame la source de chaque affirmation."],
                ['titre' => "Un questionnaire de ménages à clarifier avant la collecte", 'texte' => "Situation : un projet d'eau et d'assainissement veut enquêter dans des villages de la région des Savanes ; son questionnaire de soixante-dix questions, rédigé par plusieurs auteurs, contient des tournures équivoques. Consigne donnée : l'assistant doit signaler les questions redondantes, le jargon et les formulations suggestives, puis proposer des variantes plus brèves qui conservent le sens des indicateurs ciblés. Ce que le participant contrôle : toute question gardée correspond encore à un indicateur du cadre de résultats ; les enquêteurs entendent la version allégée lue à haute voix ; un locuteur relit les traductions en kabyè ou en éwé avant l'essai de terrain, car l'équipe ne les tient jamais pour acquises."],
                ['titre' => "Une liste de bénéficiaires qu'un collègue veut coller dans un assistant", 'texte' => "Situation : une échéance approche et un coordinateur suggère de verser dans un assistant en ligne un tableau de ménages (noms, quartiers, numéros de téléphone) afin d'obtenir un récapitulatif par préfecture. Le téléphone sert déjà à l'aide sociale dans le pays : la Banque mondiale décrit le programme Novissi, dont la première phase, du 7 avril au 1er septembre 2020, a soutenu 572 852 travailleurs du secteur informel dans l'agglomération du Grand Lomé, la préfecture de Tchaoudjo et le canton de Soudou, avec des transferts par argent mobile. Consigne donnée : passer le tableau à la grille de la formation, qui compte trois couleurs : vert pour l'information publique, orange pour celle qu'on anonymise avant tout, rouge pour celle qui reste dans le projet. Ce que le participant contrôle : il supprime noms et numéros, remplace les quartiers par des codes, s'assure qu'aucun élément de santé ou de situation sociale ne permet d'identifier quelqu'un, et constate que le récapitulatif par préfecture se calcule tout aussi bien sur la version anonymisée. Il se demande aussi, avant de poursuivre, si le fichier quittera le Togo, comme le texte de loi y invite."],
                ['titre' => "Une note de synthèse bilingue pour un comité de pilotage", 'texte' => "Situation : le partenaire étranger d'un projet demande deux pages en anglais extraites d'un rapport français de quarante pages. Consigne donnée : demander un résumé qui cite la page de chaque point, puis sa traduction, en ayant fourni à l'assistant la liste des sigles et des noms de localités du projet. Ce que le participant contrôle : chaque chiffre se trouve à la page indiquée, sigles et noms de lieux sont restés intacts, et une personne bilingue relit l'anglais avant l'envoi."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment budgéter ou faire financer la formation d'une équipe d'ONG au Togo ?",
            'paragraphes' => [
                "Première étape : rouvrir la convention signée avec votre bailleur, qui prévoit parfois une ligne pour le renforcement des capacités ; à défaut, une demande de réaffectation budgétaire s'impose. La décision appartient au bailleur seul, et rien ici ne vaut promesse de financement. Joignez le devis en FCFA à votre demande.",
                "Côté public, le Fonds national d'apprentissage, de formation et de perfectionnement professionnels (FNAFPP) mérite un coup d'oeil. Republic of Togo a rapporté le 30 juin 2010 que les députés avaient adopté la loi qui le crée, avec pour objet d'appuyer financièrement les institutions, organismes et entreprises qui conçoivent et mettent en oeuvre des programmes d'apprentissage, en priorité pour des projets collectifs de formation et de restructuration des établissements d'enseignement technique et d'apprentissage. L'article ne dit rien des ONG ni des formations à l'IA : c'est à l'organisation de demander par écrit au fonds si elle relève de son champ, et à quelles conditions.",
                "Richard ne se prévaut d'aucun agrément de fonds ni d'aucune certification d'éditeur. À l'issue de chaque formation, il remet le programme détaillé, le devis, les feuilles de présence et une attestation au nom de chaque participant, des pièces que n'importe quel dossier de demande réclame. Si une aide décide de votre choix, adressez-les au fonds ou au financeur et patientez jusqu'à sa réponse avant de signer. À défaut, inscrivez la dépense comme une formation interne, répartie au besoin entre un format court et un suivi mensuel.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour une équipe d'ONG au Togo ?",
            'intro' => "Pas de tarif affiché : le montant se fixe sur devis en FCFA une fois l'échange de cadrage passé, chaque poste y étant détaillé. Les abonnements aux assistants demeurent souscrits par l'organisation. Le règlement (Mobile Money, carte bancaire, PayPal, virement ou espèces) se décide à la signature du devis, selon ce qui arrange une structure togolaise.",
            'items' => [
                ['offre' => "Atelier découverte", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée de travail sur des pièces de votre projet rendues anonymes", "Deux tâches prises en main", "Premières règles sur les données des familles suivies", "Conseil sur la suite à donner"]],
                ['offre' => "Formation complète", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées en visioconférence, groupe par fonction", "Cas bâtis sur vos rapports et vos tableaux de suivi", "Épreuve finale sur une tâche réelle, puis attestation", "Canal direct pendant le mois qui suit"]],
                ['offre' => "Suivi mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Trois rendez-vous d'une demi-journée, un par mois", "Bilan de ce qui est réellement utilisé", "Reprises et tâches supplémentaires"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, séparés par fonction (suivi-évaluation, coordination, finances).",
                "Le nombre de séances en visioconférence et leur longueur.",
                "Le temps de préparer vos pièces et de retirer les noms avant la session.",
                "La langue des supports : français seul, ou avec des passages en anglais.",
                "Le suivi mensuel qui prolonge la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les équipes d'ONG togolaises qui démarrent l'IA ?",
            'intro' => "Une équipe d'ONG qui s'initie à l'IA bute souvent sur les mêmes points : chiffres inventés, données de bénéficiaires exposées, témoignages arrangés, traductions non relues, abonnements éparpillés, règles remises à plus tard, textes envoyés sans second regard. Des règles écrites, posées en amont, suffisent à les éviter.",
            'items' => [
                ['titre' => "Laisser l'assistant compléter un tableau d'indicateurs", 'texte' => "Demandez à un assistant de rédiger des résultats à partir d'un tableau troué : il inventera des valeurs vraisemblables. La règle d'équipe est de ne lui confier que des chiffres déjà calculés, puis de pointer chaque nombre du texte final dans la base."],
                ['titre' => "Coller une liste de bénéficiaires dans un compte gratuit", 'texte' => "Une échéance proche pousse au raccourci. La grille verte, orange, rouge tranche en quelques secondes, et le possible transfert vers un pays tiers se pose avant l'envoi du fichier, jamais après."],
                ['titre' => "Inventer ou arrondir la parole d'un bénéficiaire", 'texte' => "Une phrase plausible écrite par l'outil n'est pas une parole recueillie. Une citation doit avoir été prononcée, notée avec l'accord de la personne et reprise telle quelle."],
                ['titre' => "Traduire vers une langue nationale sans relecture", 'texte' => "Aucun texte en éwé, en kabyè ou en mina ne part sans qu'un locuteur l'ait lu : un seul mot mal choisi dans une question peut fausser les réponses d'un village entier."],
                ['titre' => "Un compte payé par chaque salarié", 'texte' => "Chacun paie son abonnement avec sa carte, sans règle commune : la dépense grossit et personne ne maîtrise rien. Un seul compte au nom de l'organisation, confié à un responsable, clarifie le coût, les accès et le sort des conversations quand quelqu'un s'en va."],
                ['titre' => "Repousser l'écriture des règles de données", 'texte' => "Mieux vaut fixer par écrit, avant la première utilisation sur des données vivantes, trois listes : ce qui peut entrer, ce qui entre après anonymisation, ce qui reste hors de l'outil. Elles se corrigent plus tard si les textes applicables changent."],
                ['titre' => "Envoyer un texte au financeur ou aux autorités sans relecture croisée", 'texte' => "La confiance s'installe vite et la relecture s'efface. Or un rapport ou un courrier engage l'organisation : une personne désignée le vérifie, le signe et en répond."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former une équipe d'ONG togolaise avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà travaillé au Togo, comme dans " . (count((array) fait('pays_travailles')) - 1) . " autres pays dont le Bénin, la Côte d'Ivoire, le Sénégal et le Mali. Pour les équipes d'ONG et de projets, il peut former à distance à l'usage des assistants d'IA, en partant de vos rapports et de vos tableaux. La page des <a href='/realisations/'>réalisations</a> présente ses projets.",
                "Il n'est pas évaluateur et ne se présente pas comme spécialiste du suivi-évaluation. Il compte " . $ans . " ans d'expérience dans le numérique, s'est formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href='https://audyxa.com'>Audyxa</a>.",
                "Ses engagements se vérifient un à un : réponse sous 24 heures, un ou deux entretiens de cadrage (qui peuvent aboutir à recommander seulement un atelier court), questionnaire envoyé avant la session, cas bâtis sur vos pièces, épreuve finale chronomètre en main, supports modifiables et attestation nominative. Aucun éditeur d'IA ne l'a certifié et il ne se dit partenaire d'aucun. Pour le socle de la méthode, voir la formation <a href='/formations/ia-en-entreprise'>IA en entreprise</a> ; pour les règles de données en détail, <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a> ; pour lire un indicateur avant de le rapporter, <a href='/formations/data-literacy'>décider avec les données</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochaine note ou votre prochain rapport à un financeur approche-t-il ?",
            'texte'  => "Décrivez votre équipe (effectif, fonctions, ville), le financeur concerné, le prochain texte à rendre et les outils que vous utilisez déjà. Une réponse arrive sous 24 heures, suivie d'une proposition et d'un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander une formation IA pour mon équipe"],
        ],
    ],

    'faq' => [
        ['q' => "Un formateur IA peut-il remplacer une formation en suivi-évaluation pour mon équipe ?", 'r' => "Non. Richard enseigne l'usage des assistants d'IA, rien de plus : cadre de résultats, méthodes d'évaluation et échantillonnage d'enquête restent du ressort de votre organisation et de ceux qui la financent."],
        ['q' => "Qui peut former mon équipe d'ONG à l'IA à Lomé ou dans les régions du Togo ?", 'r' => "Richard SALANON peut former à distance, depuis Cotonou, les équipes d'ONG et de projets togolaises à ChatGPT, Claude, Gemini et Copilot sur leurs propres documents. Les séances suivent vos heures de bureau, en français. Il n'est certifié par aucun éditeur d'IA, et le devis est établi en FCFA."],
        ['q' => "Peut-on utiliser un assistant d'IA pour rédiger une note succincte ou un rapport à un financeur ?", 'r' => "Oui, pour ébaucher, reformuler ou traduire, à condition de partir de pièces anonymisées et d'indicateurs déjà calculés. Les critères de l'appel se relisent dans le texte officiel, chaque chiffre se pointe dans la base du projet, et une personne désignée approuve le texte avant qu'il parte."],
        ['q' => "Peut-on mettre une liste de bénéficiaires dans ChatGPT ou Claude ?", 'r' => "Non. La loi n° 2019-014 range notamment la santé et les mesures d'ordre social parmi les données sensibles (article 4), interdit en principe de collecter et de traiter celles qui révèlent entre autres l'état de santé ou la vie sexuelle (article 21) et encadre le transfert vers un pays tiers (article 28). On travaille sur des extraits anonymisés. Pour un cas précis, l'IPDCP ou votre juriste tranche."],
        ['q' => "Quelle loi protège les données des bénéficiaires d'un projet au Togo ?", 'r' => "La loi n° 2019-014 du 29 octobre 2019 sur la protection des données à caractère personnel, publiée au Journal officiel du même jour. L'Instance de protection des données à caractère personnel (IPDCP) confirme le texte applicable à votre situation."],
        ['q' => "Une ONG étrangère qui collecte au Togo est-elle concernée par cette loi ?", 'r' => "L'article 2 vise notamment un traitement mis en oeuvre par un responsable, établi ou non sur le territoire togolais, qui recourt à des moyens de traitement situés sur ce territoire, hors simple transit. Faites confirmer l'application à votre projet par un juriste ou par l'IPDCP."],
        ['q' => "Que dit-on du décret sur la coopération entre les ONG et le gouvernement ?", 'r' => "CIVICUS Monitor, le 15 juillet 2022, rapporte que le décret n° 2022-002/PR a été approuvé le 5 janvier 2022 et demande aux ONG d'aligner leurs activités sur les priorités du gouvernement et de notifier leurs activités aux autorités locales. Cette page n'a pas lu le texte : confirmez le régime en vigueur auprès de l'administration."],
        ['q' => "Le FNAFPP peut-il financer une formation IA pour une équipe d'ONG ?", 'r' => "La presse a rapporté en 2010 la loi qui crée ce fonds, destiné aux institutions, organismes et entreprises qui mettent en oeuvre des programmes d'apprentissage. Rien n'y dit qu'une ONG ou une formation à l'IA en relève. Aucune prise en charge n'est garantie : interrogez le fonds par écrit, programme et devis à l'appui."],
        ['q' => "Que dit-on de la connexion au Togo pour une formation à distance ?", 'r' => "Selon DataReportal, 37,0 % des Togolais étaient internautes fin 2025. L'ARCEP compte 145 344 abonnements à la fibre à domicile, soit 1,66 % de la population, et 5 464 688 abonnements à la data mobile haut débit au premier trimestre 2026. La formation se tient avec un ordinateur et une connexion stable, documents téléchargés à l'avance, et une solution de repli est prévue en cas de coupure."],
        ['q' => "Les assistants d'IA savent-ils travailler en éwé, en kabyè ou en mina ?", 'r' => "Ils écrivent bien en français. Pour un texte en éwé, en kabyè ou en mina, le résultat est relu par un locuteur avant tout usage, et une traduction de questionnaire se teste à voix haute avec les enquêteurs. Le français est langue officielle, l'éwé et le kabyè sont langues nationales selon la constitution, d'après Global Voices."],
        ['q' => "Quel est le décalage horaire entre Lomé et Cotonou ?", 'r' => "Une heure : Lomé vit à l'heure GMT et Cotonou à GMT+1, toute l'année. Une séance à 9 h à Lomé se tient à 10 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Aucune somme n'est affichée : un devis en FCFA est établi après l'échange de cadrage. Il dépend de l'effectif, du nombre de séances, du temps passé à préparer vos pièces et du suivi choisi. Les abonnements aux assistants ne sont pas inclus."],
        ['q' => "Reçoit-on une attestation en fin de formation ?", 'r' => "Oui : chaque participant reçoit une attestation à son nom, accompagnée du programme, des supports et des feuilles de présence. Elle ne vaut ni diplôme ni certification délivrée par un éditeur."],
    ],

    'sources' => [
        ['titre' => "Journal officiel de la République togolaise, numéro spécial du 29 octobre 2019 : loi n° 2019-014 relative à la protection des données à caractère personnel (articles 2, 4, 6, 21, 28 et 29)", 'url' => 'https://www.afapdp.org/wp-content/uploads/2020/02/TOGO-JOS_29_10_2019-64E-ANNEE-N°26-TER.pdf', 'date' => '2026-10-27'],
        ['titre' => "CIVICUS Monitor, nouveau décret : les ONG devront aligner leurs activités sur les priorités de développement du gouvernement (15 juillet 2022)", 'url' => 'https://monitor.civicus.org/explore/new-decree-mandates-NGOs-to-align-their-activities-to-governmental-development-priorities/', 'date' => '2026-10-27'],
        ['titre' => "Délégation de l'Union européenne au Togo, la société civile, un acteur clé du partenariat UE au Togo (14 avril 2026)", 'url' => 'https://www.eeas.europa.eu/delegations/togo/la-soci%C3%A9t%C3%A9-civile-un-acteur-cl%C3%A9-du-partenariat-ue-au-togo_fr', 'date' => '2026-10-27'],
        ['titre' => "Délégation de l'Union européenne au Togo, appel à propositions 2024 EuropeAid/181086/DD/ACT/TG, lignes thématiques OSC et droits de l'homme (25 mars 2024)", 'url' => 'https://www.eeas.europa.eu/delegations/togo/europeaid181086ddacttg-appel-%C3%A0-propositions-2024-lignes-th%C3%A9matiques-osc-et-droits-de-lhomme-0_fr', 'date' => '2026-10-27'],
        ['titre' => "Republic of Togo, VIH/sida : la suspension de l'aide américaine freine les efforts de prévention (3 mars 2025)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/sante/vih-sida-la-suspension-de-l-aide-us-freine-les-efforts-de-prevention', 'date' => '2026-10-27'],
        ['titre' => "Global Voices, Togo : la suspension de l'aide américaine aura un impact négatif sur la santé publique et l'éducation (14 et 27 février 2025)", 'url' => 'https://globalvoices.org/2025/02/27/togo-us-aid-suspension-will-negatively-impact-public-health-and-education/', 'date' => '2026-10-27'],
        ['titre' => "ARCEP Togo, observatoire des marchés des communications électroniques, premier trimestre 2026", 'url' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-27'],
        ['titre' => "DataReportal, Digital 2026 : Togo", 'url' => 'https://datareportal.com/reports/digital-2026-togo', 'date' => '2026-10-27'],
        ['titre' => "Global Voices, quelle langue locale est la plus parlée au Togo (22 février 2024)", 'url' => 'https://globalvoices.org/2024/02/22/which-local-language-is-most-widely-spoken-in-togo/', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, la plateforme Novissi du Togo pour la protection sociale (13 avril 2021)", 'url' => 'https://www.banquemondiale.org/fr/results/2021/04/13/prioritizing-the-poorest-and-most-vulnerable-in-west-africa-togo-s-novissi-platform-for-social-protection-uses-machine-l', 'date' => '2026-10-27'],
        ['titre' => "Republic of Togo, miser sur la formation professionnelle : la loi créant le FNAFPP (30 juin 2010)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/politique/miser-sur-la-formation-professionnelle', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect, hors connexion", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : ajouter des traductions et des langues à un formulaire", 'url' => 'https://support.kobotoolbox.org/language_dashboard.html', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Lome, Africa/Porto-Novo) et zone Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
