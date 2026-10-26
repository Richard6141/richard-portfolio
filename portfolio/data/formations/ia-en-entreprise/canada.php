<?php
// ============================================================
// data/formations/ia-en-entreprise/canada.php · Formation IA en entreprise, page Canada
// (angle : Québec francophone ; devis en dollars canadiens).
// Faits externes relevés le 25/10/2026 : Commission d'accès à l'information du Québec
// (communication hors Québec, sanctions, incidents, principaux changements de la Loi 25),
// Commissariat à la protection de la vie privée du Canada, LEGISinfo (C-36), Statistique
// Canada, Institut de la statistique du Québec, Montréal International, DataReportal, OQLF,
// ministère de l'Emploi et de la Solidarité sociale (loi du 1 %, communiqué du 10/04/2026,
// guide de la Mesure de formation), tarifs publics de Microsoft (Canada), OpenAI, Anthropic, Google.
// Aucun projet du portfolio n'est situé au Canada : renvoi neutre vers /realisations/.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise au Québec et au Canada : vos équipes utilisent ChatGPT, Claude, Gemini et Copilot sur leurs documents, en français, avec une règle claire sur les renseignements personnels',
    'title'   => 'Former vos équipes à l’IA au Canada | Richard SALANON',
    'meta'    => 'Formation IA en entreprise au Québec et au Canada : ChatGPT, Claude, Copilot sur vos documents, Loi 25 respectée, à distance depuis Cotonou. Devis en CAD.',
    'en_bref' => 'Richard SALANON, consultant basé à Cotonou, forme à distance les équipes des entreprises du Québec et du reste du Canada à utiliser l’IA sur leurs propres documents, en français, avec une règle de confidentialité posée avant le premier exercice. Il le fait en visioconférence, le matin heure de Montréal, par atelier d’une demi-journée, par formation de deux jours ou par accompagnement mensuel. Le prix est établi sur devis, en dollars canadiens, et aucune prise en charge n’est promise. Le Québec impose la Loi 25 : la formation en tient compte dès la préparation.',
    'publie'  => '2026-11-18',
    'maj'     => '2026-11-18',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance, en visioconférence, en français'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Montréal a 5 h de retard jusqu’au 1er novembre 2026, puis 6 h jusqu’au 14 mars 2027'],
        ['l' => 'Devis', 'v' => 'Sur devis, en dollars canadiens (CAD)'],
        ['l' => 'Réponse', 'v' => 'Sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l’IA au Québec et au Canada, et comment choisir ?',
            'paragraphes' => [
                'Richard SALANON peut former à distance les équipes d’une entreprise québécoise ou canadienne, en français, sur leurs propres documents, depuis Cotonou. Il n’est certifié par aucun éditeur et n’affiche aucun agrément d’organisme formateur : son atout est de construire chaque exercice sur le travail réel du service et de poser la règle des renseignements personnels avant l’outil.',
                'Un dirigeant de Montréal, de Québec, de Gatineau ou de Sherbrooke qui tape « formateur IA Québec » trouve surtout des offres d’emploi, des programmes d’université ou des catalogues de grands organismes. Ce sont des offres sérieuses, mais elles répondent à une autre question : celle de savoir ce qu’est l’IA, ou comment la faire entrer dans un parcours de carrière. Un gestionnaire, lui, veut savoir ce que son équipe de dix personnes fera de différent le lundi suivant.',
                'La différence tient en trois critères simples. D’abord, la formation travaille-t-elle sur vos documents, ou sur des exemples de démonstration ? Ensuite, dit-elle ce qui peut sortir de l’entreprise et ce qui doit rester, avec la loi québécoise en tête ? Enfin, mesure-t-elle un résultat sur une tâche réelle, ou seulement la satisfaction de la salle ? Posez ces trois questions à tout formateur, y compris à Richard.',
                'Le choix dépend aussi de la taille du besoin. Une direction qui veut décider avant d’investir commence souvent par la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>. Une équipe qui écrit, résume et classe beaucoup suit la formation décrite sur cette page, dont la version générale est présentée dans la fiche <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Un service qui veut brancher l’IA sur ses logiciels passe plutôt par une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l’usage de l’IA dans les entreprises canadiennes et québécoises ?',
            'paragraphes' => [
                'Statistique Canada mesure que 19,2 % des entreprises canadiennes avaient utilisé l’IA pour produire des biens ou fournir des services au deuxième trimestre de 2026, contre 12,2 % un an plus tôt et 6,1 % deux ans plus tôt (publication du 11 juin 2026). Le chiffre progresse vite, mais quatre entreprises sur cinq n’ont pas encore franchi le pas : l’équipe qui se forme maintenant n’est pas en retard.',
                'Au Québec, l’Institut de la statistique du Québec relevait, dans un portrait publié le 28 novembre 2025, que 12,7 % des entreprises avaient utilisé des applications d’IA à des fins de production dans les douze mois précédant le deuxième trimestre de 2025, et que l’analyse de textes semblait le type d’usage le plus fréquent. Ce sont les tâches d’écriture, de lecture et de tri qui occupent la formation décrite ici.',
                'Les usages se concentrent dans quelques tâches. Selon l’enquête fédérale de 2026, les entreprises utilisatrices recourent surtout à l’analyse de données (36,6 %), à l’analyse de texte (34,5 %) et aux agents virtuels ou robots conversationnels (28,2 %). L’écart entre ville et campagne est net : 21,0 % des entreprises urbaines contre 9,9 % des entreprises rurales. Une PME de région a donc moins de collègues auprès de qui apprendre, ce qui plaide pour une formation à distance.',
                'Côté infrastructure, DataReportal compte 38,2 millions d’internautes au Canada fin 2025, soit 95,1 % de la population, et 42,4 millions de connexions mobiles actives. La connexion n’est pas le frein ici, contrairement à ce que Richard rencontre dans d’autres pays : le frein, c’est la règle d’usage, qui manque souvent. Montréal International recense en outre plus de 1 400 chercheurs et experts à Mila et 60 000 travailleurs aux compétences liées à l’IA : vos employés entendent parler d’IA tous les jours, et beaucoup l’essaient déjà seuls.',
                'Sur le plan des politiques publiques, le projet de loi C-36, déposé le 15 juin 2026 pour édicter une loi sur la vie privée et les données des consommateurs, n’a pas dépassé la première lecture selon LEGISinfo, qui mentionne aussi l’annonce, le 4 juin 2026, de la stratégie nationale « L’IA pour tous ». Aucune loi fédérale propre à l’IA n’est en vigueur à cette date : ce sont les lois sur les renseignements personnels, la consommation et les contrats qui s’appliquent à l’usage quotidien dans votre équipe.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres retenir avant de lancer la formation ?',
            'items' => [
                ['valeur' => '19,2 %', 'libelle' => 'Part des entreprises canadiennes ayant utilisé l’IA pour produire des biens ou fournir des services, deuxième trimestre de 2026 (12,2 % un an plus tôt)', 'source' => 'Statistique Canada, publication 11-621-M du 11 juin 2026', 'url' => 'https://www150.statcan.gc.ca/n1/pub/11-621-m/11-621-m2026010-fra.htm'],
                ['valeur' => '12,7 %', 'libelle' => 'Part des entreprises québécoises ayant utilisé l’IA dans les douze mois précédant le deuxième trimestre de 2025 ; l’analyse de textes semble l’usage le plus fréquent (publication du 28 novembre 2025)', 'source' => 'Institut de la statistique du Québec', 'url' => 'https://statistique.quebec.ca/fr/document/intelligence-artificielle-entreprises-quebec'],
                ['valeur' => '95,1 %', 'libelle' => 'Part de la population canadienne qui utilisait Internet fin 2025, soit 38,2 millions de personnes', 'source' => 'DataReportal, Digital 2026 : Canada', 'url' => 'https://datareportal.com/reports/digital-2026-canada'],
                ['valeur' => '60 000', 'libelle' => 'Travailleurs aux compétences liées à l’IA dans le Grand Montréal, selon l’organisme de promotion économique', 'source' => 'Montréal International', 'url' => 'https://www.montrealinternational.com/fr/secteurs/intelligence-artificielle/'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d’IA une équipe canadienne utilise-t-elle, et combien coûtent-ils ?',
            'legende' => 'Prix publics relevés le 25 octobre 2026 sur les pages des éditeurs, taxes exclues, dans la devise affichée. Ces montants sont ceux des éditeurs : ils ne font pas partie du prix de la formation, et un prix affiché peut changer ou différer selon le pays de facturation.',
            'entetes' => ['Outil', 'Ce qu’il fait bien pour une équipe', 'Coût de l’éditeur', 'À savoir au Canada'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, reformulation, tableaux à partir de notes, analyse de fichiers', 'Free ; Go 8 $ US par mois ; Plus 20 $ US ; Business 20 $ US par utilisateur et par mois en facturation annuelle, 25 $ US en mensuelle (2 utilisateurs ou plus), prix affichés en dollars américains', 'Les comptes personnels gratuits restent au nom de chaque employé : les documents de l’entreprise n’y vont pas'],
                ['Claude (Anthropic)', 'Longs documents, synthèses avec citations, rédaction nuancée en français', 'Free ; Pro 17 $ par mois en abonnement annuel ou 20 $ en mensuel ; Team 20 $ par siège et par mois en annuel, 25 $ en mensuel (la page ne précise pas la devise)', 'Vérifiez dans le compte d’entreprise les réglages de conservation et de partage avant tout dossier client'],
                ['Gemini (Google)', 'Courriels et documents dans Google Workspace, recherche, résumés', 'Gratuit ; Google AI Plus 4,69 € par mois ; Google AI Pro 18,87 € (euros affichés lors de la consultation, selon la région du visiteur)', 'Pour une entreprise sur Google Workspace, l’IA passe par l’abonnement de l’entreprise et non par un compte personnel'],
                ['Copilot (Microsoft)', 'Résumés de réunions Teams, courriels Outlook, documents Word, Excel et PowerPoint', 'Copilot Chat inclus sans surcoût dans les abonnements Microsoft 365 admissibles ; Microsoft 365 Copilot Business 24,43 $ CA par utilisateur et par mois en annuel (28,50 $ CA au tarif régulier, promotion du 1er juillet au 31 décembre 2026 pour des clients admissibles), 34,20 $ CA en mensuel', 'Microsoft affiche que les invites et les réponses restent dans la limite du service Microsoft 365 et ne servent pas à entraîner les modèles'],
                ['NotebookLM et carnets de notes de Google', 'Poser des questions à un ensemble de documents choisis, avec renvoi aux passages', 'La page de Google liste un produit de carnets dans chaque formule, gratuite comprise ; les limites augmentent avec les abonnements payants', 'Le nom du produit et ses limites se confirment dans votre compte, car la page de l’éditeur emploie une autre appellation'],
                ['DeepSeek', 'Assistant généraliste, souvent évoqué pour le coût ; utile à connaître pour en parler en équipe', 'Tarifs et conditions non relevés pour cette page : à lire chez l’éditeur', 'Lire la politique de confidentialité de l’éditeur avant tout usage professionnel ; Richard n’y fait traiter aucun document d’entreprise ni renseignement personnel pendant une formation'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel assistant choisir pour une entreprise québécoise, et que faire de la connexion ?',
            'paragraphes' => [
                'Le choix suit d’abord l’environnement bureautique déjà payé. Une entreprise sur Microsoft 365 commence par Copilot Chat, déjà inclus dans les abonnements admissibles, avant de décider d’une licence payante. Une entreprise sur Google Workspace regarde Gemini dans son abonnement. Les autres comparent ChatGPT et Claude sur leurs propres textes ; le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille les offres d’équipe et leurs conditions sur les données.',
                'La formation se donne sur l’outil que l’équipe gardera, dans le compte de l’entreprise lorsqu’il existe, et sur des versions gratuites avec des documents anonymisés dans le cas contraire. Aucun abonnement n’est exigé avant la première séance. Côté connexion, un poste de bureau branché à une ligne ordinaire suffit : la visioconférence et les assistants fonctionnent sans précaution particulière dans les grands centres, et dans une région éloignée on prévoit seulement un second moyen de se connecter en cas de coupure.',
                'Le français demande une attention propre au Québec. Les assistants écrivent par défaut un français de France : ils proposent « mail » là où l’on dit courriel, oublient « téléverser » ou « infolettre », et choisissent le vouvoiement ou le tutoiement sans connaître vos usages. La formation apprend à fournir un modèle maison et un petit glossaire, en s’appuyant sur le vocabulaire que l’Office québécois de la langue française met à disposition des entreprises, puis à relire le résultat comme le ferait un client de Trois-Rivières ou de Saguenay.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit la Loi 25 quand un employé colle un document dans un assistant d’IA ?',
            'paragraphes' => [
                'Au Québec, la Loi 25 modifie la loi sur la protection des renseignements personnels dans le secteur privé, appliquée par la Commission d’accès à l’information. Coller dans un assistant le courriel d’un client, une fiche d’employé ou un dossier de plainte revient à communiquer ces renseignements à un tiers. La règle de départ, selon la Commission, est d’obtenir le consentement des personnes avant de communiquer leurs renseignements, les exceptions étant interprétées de manière restrictive.',
                'Quand l’outil est exploité hors du Québec, ce que l’éditeur précise dans ses conditions d’utilisation, la Commission exige une évaluation des facteurs relatifs à la vie privée avant la communication, et une entente écrite. La communication n’a lieu que si les renseignements bénéficieront d’une protection adéquate. Pour un usage courant, cela donne un choix pratique : soit le document est anonymisé avant d’être soumis, soit l’entreprise a fait l’évaluation et signé l’entente avec l’éditeur de son compte professionnel.',
                'La Commission précise aussi qu’une évaluation est requise pour tout projet d’acquisition, de développement ou de refonte d’un système d’information qui touche des renseignements personnels. Déployer un assistant d’équipe branché sur le courriel ou les fichiers partagés relève donc d’une réflexion de ce type, que le responsable de la protection des renseignements personnels de l’entreprise est bien placé pour conduire.',
                'Enfin, la loi encadre la décision fondée exclusivement sur un traitement automatisé : la personne doit être informée au plus tard au moment où la décision lui est communiquée et pouvoir présenter ses observations à un membre du personnel capable de la réviser. Un assistant qui trie des candidatures ou classe des demandes de clients sans relecture humaine entre dans ce cadre. La formation apprend à garder une personne nommée entre la réponse de l’outil et la décision.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles règles de conformité l’entreprise doit-elle garder en tête avant de former ses équipes ?',
            'intro' => 'Ces repères viennent de la Commission d’accès à l’information et du Commissariat fédéral. Ils ne remplacent pas l’avis d’un juriste, et la formation n’est pas un cours de droit.',
            'items' => [
                ['titre' => 'Un responsable désigné et publié', 'texte' => 'Dans une entreprise, la personne ayant la plus haute autorité exerce par défaut la fonction de responsable de la protection des renseignements personnels, et peut la déléguer par écrit. Son titre et ses coordonnées sont publiés sur le site de l’entreprise. C’est à elle que les employés signalent un doute sur un document avant de le soumettre à un assistant.'],
                ['titre' => 'Un registre des incidents', 'texte' => 'Un incident de confidentialité couvre tout accès, utilisation ou communication non autorisés, ou toute perte de renseignements personnels, y compris un envoi au mauvais destinataire. Toute entreprise tient un registre de ses incidents, conservé au moins cinq ans, et avise la Commission quand l’incident présente un risque de préjudice sérieux. Un dossier client collé dans un outil non autorisé se discute avec le responsable pour savoir s’il doit y figurer.'],
                ['titre' => 'Des sanctions élevées', 'texte' => 'La Commission indique que les sanctions administratives pécuniaires peuvent atteindre 2 % du chiffre d’affaires mondial ou 10 millions de dollars. Les amendes pénales pour une entreprise vont de 15 000 $ au plus élevé de 25 millions de dollars ou 4 % du chiffre d’affaires mondial de l’exercice précédent, et elles sont doublées en cas de récidive.'],
                ['titre' => 'Une politique de confidentialité à jour', 'texte' => 'Une organisation qui recueille des renseignements par un moyen technologique rédige en termes simples une politique de confidentialité, la publie sur son site et avise les personnes de toute modification. Si l’entreprise introduit un assistant d’IA qui traite des données de clients, cette politique se relit.'],
                ['titre' => 'Le régime fédéral pour les activités qui y relèvent', 'texte' => 'La LPRPDE s’applique aux activités commerciales relevant du fédéral, sous la surveillance du Commissariat à la protection de la vie privée du Canada. Le 7 décembre 2023, le Commissariat et les autorités provinciales et territoriales ont publié ensemble des principes pour une IA générative responsable ; ce texte n’a pas force de loi, mais il indique comment les autorités lisent les règles actuelles.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment la formation traite-t-elle les renseignements personnels, concrètement ?',
            'paragraphes' => [
                'Avant le premier exercice, chaque équipe classe ses documents en trois groupes : ceux qui peuvent être soumis tels quels à l’assistant (un texte public, une procédure interne sans nom), ceux qu’on anonymise d’abord (remplacer noms, numéros d’assurance, adresses et montants identifiants), et ceux qui ne sortent jamais de l’entreprise (dossiers de santé, évaluations de rendement nominatives, pièces d’un litige). Ce classement s’écrit sur une page que le responsable de la protection des renseignements personnels relit.',
                'Richard travaille avec des documents fictifs ou anonymisés, fournis par l’équipe. Si un exercice exige de vrais renseignements personnels, il n’a lieu qu’après l’évaluation et l’entente écrite décrites plus haut, et dans un compte professionnel dont l’entreprise contrôle les réglages. Les supports remis à la fin sont dans un format que l’entreprise peut modifier pour sa propre politique d’utilisation de l’IA, que la formation <a href="/formations/gouvernance-ia">Gouverner l’IA dans l’entreprise</a> permet de rédiger plus en détail.',
                'Pour une équipe juridique, comptable ou de santé, le secret professionnel s’ajoute à la loi : la formation ne remplace pas l’avis de l’ordre professionnel concerné ni celui d’un avocat. Elle prépare plutôt les employés à reconnaître un renseignement personnel, à choisir la bonne option parmi les trois groupes, et à savoir à qui poser la question en cas de doute. Le détail de chaque cas se traite dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un assistant d’IA doit-il s’exprimer en français, selon la Charte de la langue française ?',
            'paragraphes' => [
                'Pour tout ce qui est remis à un client ou à un employé au Québec, oui, en pratique. L’Office québécois de la langue française rappelle que les travailleurs ont le droit d’exercer leurs activités en français et que les consommateurs ont le droit d’être informés et servis en français. Depuis le 1er juin 2023, un nouveau contrat d’adhésion est d’abord remis en français, et pour un contrat conclu par un moyen technologique, la version française doit être accessible dans l’outil ou les clauses types en français remises à l’adhérent.',
                'Pour une équipe qui rédige des courriels, des réponses de clavardage ou des conditions de service avec un assistant, la conséquence est directe : le premier jet est écrit en français, relu par une personne, puis traduit s’il y a lieu, et non l’inverse. La formation fait ce travail dans cet ordre, avec des modèles de courriel et de réponse écrits en français du Québec. L’obligation de francisation des entreprises de 25 personnes ou plus relève de l’Office ; elle n’est pas un sujet de la formation, mais le formateur sait où renvoyer.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir : atelier, formation de deux jours ou accompagnement, et à quelle heure ?',
            'legende' => 'Tous les formats se tiennent à distance. Les heures sont données en heure de Montréal ; Cotonou est à UTC+1 toute l’année. Les formats peuvent se combiner.',
            'entetes' => ['Format', 'Durée et groupe', 'Horaire type pour le Québec', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée, 12 personnes au plus', 'Une séance le matin, de 9 h à 12 h 30', 'Une direction ou une équipe qui n’a jamais utilisé d’assistant et veut voir avant de décider'],
                ['Formation de deux jours', 'Quatre demi-journées, 10 personnes au plus, un groupe par métier', 'Quatre matinées, de 9 h à 12 h 30', 'Un usage commencé en désordre, ou une tâche volumineuse qui justifie l’effort'],
                ['Séances courtes', 'Cinq à six séances de 2 h 30, 8 personnes au plus', 'Matinées de 9 h à 11 h 30, réparties sur deux à trois semaines', 'Équipes réparties sur plusieurs bureaux, du Québec aux provinces voisines'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant trois mois, pour le groupe déjà formé', 'Un matin par mois, fixé au début', 'Étendre l’usage à d’autres tâches et corriger les habitudes qui dérivent'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment une session avec un formateur à Cotonou s’organise-t-elle, avec le décalage horaire ?',
            'paragraphes' => [
                'Cotonou est à UTC+1 toute l’année. Montréal et Québec sont à UTC-4 du deuxième dimanche de mars au premier dimanche de novembre, puis à UTC-5. Depuis le 1er novembre 2026, l’écart est de 6 heures ; il était de 5 heures jusqu’à cette date et redevient 5 heures le dimanche 14 mars 2027. Une session fixée à 9 h à Montréal commence à 14 h à Cotonou en été, à 15 h en hiver. Pour la page lue après le 1er novembre, c’est l’heure d’hiver qui compte : 9 h à Montréal, 15 h à Cotonou.',
                'Richard est joignable de 7 h à 20 h, heure de Cotonou. En heure d’hiver, cette plage va de 1 h à 14 h à Montréal ; en heure d’été, de 2 h à 15 h. La fenêtre de formation est donc le matin et le début d’après-midi du Québec. Une session ne se tient pas en fin d’après-midi québécoise. Plus à l’ouest, en Ontario, au Manitoba ou en Colombie-Britannique, l’écart augmente et la fenêtre se réduit : un groupe de Vancouver commence tôt le matin et termine avant midi, ce qui se confirme au cadrage.',
                'Les documents sont reçus et anonymisés avant la session, par un canal convenu avec le responsable de la protection des renseignements personnels. Les exercices sont téléchargés avant chaque séance sur les postes des participants. Pendant la visioconférence, le formateur partage son écran, puis demande aux participants de partager le leur pour lire les consignes et la vérification. Une réponse arrive sous 24 heures aux demandes, et les horaires publiés de Richard couvrent les sept jours de la semaine.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels exercices chaque métier fait-il, avec quel outil et quel résultat ?',
            'items' => [
                ['secteur' => 'Cabinets de services professionnels (comptabilité, droit, conseil)', 'probleme' => 'Les courriels de clients arrivent avec des pièces jointes et des questions mêlées, et le secret professionnel interdit de tout confier à un compte personnel.', 'solution' => 'Dans le compte professionnel du cabinet (Copilot Chat ou un compte d’équipe), les participants classent les demandes, résument une pièce anonymisée en citant les pages et rédigent une réponse relue avant envoi. Le résultat attendu est une réponse prête à valider, avec chaque fait retrouvé dans la source.'],
                ['secteur' => 'Jeunes pousses et entreprises de logiciel à Montréal', 'probleme' => 'L’équipe connaît les modèles de langage, mais ses notes de produit, ses réponses au soutien et ses comptes rendus de réunion sont écrits chacun à sa façon.', 'solution' => 'Les participants construisent une bibliothèque de consignes partagée, comparent deux assistants sur les mêmes textes et fixent une règle sur ce qui ne sort jamais (code, contrats, données d’utilisateurs). Le résultat est un mode opératoire par tâche que les nouveaux employés relisent.'],
                ['secteur' => 'Commerce de détail et vente en ligne au Québec', 'probleme' => 'Les fiches produits, les courriels de commande et les réponses de clavardage existent en anglais et en français, avec des écarts de ton.', 'solution' => 'Avec ChatGPT ou Claude, l’équipe rédige d’abord en français du Québec, fait relire par une personne, puis produit la version anglaise. Elle apprend à vérifier prix, délais et conditions cités avant publication. Le résultat attendu est un lot de fiches et de réponses types validées.'],
                ['secteur' => 'Ressources humaines et administration', 'probleme' => 'Annonces de poste, comptes rendus de rencontre et grilles d’entretien se rédigent à partir de notes qui contiennent des renseignements personnels.', 'solution' => 'Les participants apprennent à remplacer les noms et les identifiants avant de soumettre un texte, à produire une annonce et une grille, et à relire les formulations discriminantes. Le résultat est un gabarit anonymisé et la règle des trois groupes de documents.'],
                ['secteur' => 'Gestion de projet et direction de PME', 'probleme' => 'Les rapports mensuels, les comptes rendus de comités et les réponses aux appels d’offres prennent plusieurs heures chacun.', 'solution' => 'Avec NotebookLM ou Claude sur des documents choisis, les participants posent des questions à un dossier, obtiennent un résumé avec renvoi aux passages et produisent un tableau de décisions et d’échéances. Le résultat attendu est un compte rendu vérifié, que l’équipe compare au temps habituel.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Québec : loi du 1 %, Services Québec ou budget interne ?',
            'paragraphes' => [
                'Il existe deux pistes à connaître, et aucune ne garantit un remboursement. La première est la loi du 1 % : un employeur dont la masse salariale d’une année civile dépasse 2 000 000 $ (seuil en vigueur depuis 2015 selon le rapport quinquennal du ministère de l’Emploi, à confirmer pour l’année en cours) doit consacrer à des dépenses de formation admissibles au moins 1 % de cette masse. Une formation à l’IA peut compter si elle répond aux critères de la loi, à confirmer auprès de la Commission des partenaires du marché du travail.',
                'Le 10 avril 2026, le ministère de l’Emploi et de la Solidarité sociale a annoncé l’élargissement des critères d’admissibilité (capacité d’adaptation, travail d’équipe, communication), une meilleure reconnaissance de la formation informelle comme le coaching entre collègues, et un outil en ligne sur Québec.ca pour évaluer si une formation donne lieu à une dépense admissible. L’accompagnement mensuel de Richard, qui ressemble à du coaching d’équipe sur les tâches réelles, peut intéresser ces employeurs : l’admissibilité se vérifie au cas par cas avec l’outil.',
                'La seconde piste est la Mesure de formation de la main-d’œuvre de Services Québec. Selon le guide des modalités du volet entreprises, mis à jour le 28 juin 2023, l’aide du ministère s’élève à 40 % au plus des dépenses admissibles, et à 65 % pour la formation rendue nécessaire par une nouvelle technologie visant à accroître la productivité et pour les technologies de l’information. La formation à distance, synchrone ou asynchrone, y est admissible, et le choix du formateur, laissé à l’entreprise, doit être approuvé par le ministère. Les règles ont pu changer depuis 2023 : vérifiez la version en vigueur.',
                'Deux limites utiles. Richard n’affiche aucun agrément d’organisme formateur ni aucune certification d’éditeur ; si votre programme exige un formateur agréé, c’est une question à poser à l’organisme avant de signer. Et le guide de Services Québec prévoit des conditions pour la formation suivie hors du Québec, sans décrire le cas d’un formateur établi à Cotonou qui enseigne à distance : posez la question à Services Québec avant l’inscription, avec le programme et le devis. À défaut de financement, le plus sûr est de budgéter la formation sans prise en charge et d’intégrer les frais d’abonnement aux outils dans le même budget.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte une formation IA pour une équipe canadienne ?',
            'paragraphes' => [
                'Aucune somme n’est publiée pour la formation : le prix est établi sur devis, en dollars canadiens (CAD), après un échange de cadrage dont la réponse arrive sous 24 heures. Le devis détaille chaque poste, ce qui permet à votre comptable d’en suivre le traitement fiscal. Le traitement de la TPS et de la TVQ sur les services d’un prestataire non résident dépend de votre situation : votre comptable confirme la règle pour votre entreprise.',
                'Les abonnements aux assistants, facturés par les éditeurs, restent à part et au nom de l’entreprise. Le règlement de la formation se fait par virement, carte bancaire ou PayPal ; les autres modes de la fiche de faits, comme le Mobile Money ou les espèces, sont surtout utiles aux clients du Bénin.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qu’est-ce qui fait varier le prix pour une entreprise du Québec ou du Canada ?',
            'intro' => 'Ces éléments se discutent au cadrage et se retrouvent un par un dans le devis.',
            'items' => [
                ['titre' => 'Le nombre de participants et de groupes', 'texte' => 'Un groupe par métier donne de meilleurs exercices qu’un grand groupe mêlé, mais multiplie les séances. Au-delà de dix personnes, le formateur ne peut plus lire le travail de chacun.'],
                ['titre' => 'Le format et le nombre de séances', 'texte' => 'L’atelier, les quatre demi-journées, les séances courtes et l’accompagnement mensuel ne demandent pas la même préparation ni le même temps de suivi.'],
                ['titre' => 'La préparation sur vos documents', 'texte' => 'Collecter, anonymiser et trier des documents réels prend du temps. Plus le service manipule de renseignements personnels, plus la préparation s’alourdit, car la règle des trois groupes doit être précise.'],
                ['titre' => 'Les créneaux imposés par le fuseau', 'texte' => 'Des séances placées uniquement le matin, heure de Montréal, limitent le nombre de groupes menés par semaine. Une équipe située à l’ouest du pays resserre encore ce calendrier.'],
                ['titre' => 'Le suivi après la session', 'texte' => 'Un canal direct le mois suivant fait partie de l’échange de cadrage ; une demi-journée mensuelle pendant trois mois s’ajoute au devis si elle est retenue.'],
                ['titre' => 'La langue des supports', 'texte' => 'Des supports uniquement en français du Québec sont plus rapides à produire que des supports bilingues, qui demandent une double relecture.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs les équipes canadiennes font-elles en démarrant l’IA ?',
            'intro' => 'Chaque erreur découle d’une règle ou d’un usage du Québec et se désamorce dès la première séance.',
            'items' => [
                ['titre' => 'Utiliser des comptes personnels pour le travail', 'texte' => 'Un employé qui colle un dossier client dans son compte gratuit communique des renseignements à un tiers sans évaluation ni entente écrite. L’entreprise reste responsable. Un compte professionnel, avec ses réglages, évite l’essentiel du problème.'],
                ['titre' => 'Attendre une loi fédérale sur l’IA pour agir', 'texte' => 'Le projet de loi C-36 n’a pas dépassé la première lecture et ne tient pas lieu de loi sur l’IA. La Loi 25 et la LPRPDE s’appliquent déjà à vos usages d’aujourd’hui.'],
                ['titre' => 'Laisser l’assistant décider seul', 'texte' => 'Trier des candidatures ou refuser une demande sur la seule réponse de l’outil expose l’entreprise à l’obligation d’informer la personne et de lui permettre de présenter ses observations à un humain.'],
                ['titre' => 'Livrer des textes qui sentent le français de France', 'texte' => 'Un client québécois remarque « mail », « week-end » ou des tournures qu’il n’emploie pas. La relecture par une personne du Québec et un glossaire maison règlent cela.'],
                ['titre' => 'Rédiger d’abord en anglais pour traduire ensuite', 'texte' => 'Pour un contrat ou des conditions de service destinés au Québec, la version française est remise d’abord. Écrire en français dès le premier jet évite une traduction hâtive.'],
                ['titre' => 'Planifier sans penser au changement d’heure', 'texte' => 'Le passage à l’heure normale le 1er novembre 2026 décale d’une heure un rendez-vous fixé en heure de Cotonou. Fixez les séances en heure de Montréal.'],
                ['titre' => 'Prendre une promesse de financement pour acquise', 'texte' => 'Ni la loi du 1 % ni la Mesure de formation ne garantissent un remboursement, et l’admissibilité d’une formation à distance donnée depuis l’étranger se confirme avant de signer.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes canadiennes à l’IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Canada. Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer, et il intègre l’IA dans des logiciels pour ses clients. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d’Afrique francophone, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>. Avec ' . $ans . ' ans d’expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes, et il a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays.',
                'Sa façon de former tient en engagements simples : une réponse sous 24 heures, un cadrage qui peut conclure qu’un atelier suffit, des exercices construits sur vos documents, une règle de confidentialité posée avant le premier exercice, des supports qui restent à l’entreprise et aucun gain chiffré promis. Il n’est certifié par aucun éditeur d’IA. Les projets livrés par Richard sont présentés sur la page des <a href="/realisations/">réalisations</a>, et son parcours sur la page <a href="/richard-salanon">Richard SALANON</a>.',
                'Pour une entreprise de Montréal ou de Québec qui souhaite d’abord lire un descriptif local, les pages <a href="/formation-ia-entreprise-montreal">formation IA en entreprise à Montréal</a> et <a href="/formation-ia-entreprise-quebec">à Québec</a> existent. Pour aller plus loin après la formation, <a href="/formations/prompt-engineering">Prompt engineering</a> perfectionne l’écriture des consignes, <a href="/formations/agents-ia-assistants">Agents IA et assistants</a> montre comment faire agir un assistant dans vos outils, et <a href="/formations/n8n">n8n</a> automatise les tâches répétitives.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe ?',
            'texte' => 'Classez vos documents avant le premier exercice, faites une évaluation et signez une entente écrite si des renseignements personnels doivent sortir du Québec, écrivez en français d’abord, choisissez des séances le matin heure de Montréal, vérifiez le financement avant de signer et mesurez le temps d’une tâche réelle avant et après.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe québécoise ou canadienne à l’IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et la province où elles se trouvent : la réponse arrive sous 24 heures, puis un devis en dollars canadiens suit l’échange de cadrage.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Canada ?", 'r' => "Les trois appellations se côtoient sur le marché, et aucune ne fait l’objet d’un diplôme ou d’un agrément officiel. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Canada : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Canada ?", 'r' => "Choisissez d’abord un usage précis et un responsable, avant tout abonnement : une tâche qui revient chaque semaine, un jeu de documents d’exercice et une règle claire sur les données confidentielles. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Canada, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mon équipe à l’IA au Québec si je veux un formateur qui travaille sur mes documents ?', 'r' => 'Richard SALANON le fait à distance depuis Cotonou, en français, par atelier d’une demi-journée, formation de deux jours ou accompagnement mensuel. Les exercices portent sur des documents de votre équipe, anonymisés au préalable. Il n’est certifié par aucun éditeur et n’affiche aucun agrément d’organisme formateur.'],
        ['q' => 'La Loi 25 m’interdit-elle de faire travailler un assistant d’IA sur des documents de clients ?', 'r' => 'Elle ne l’interdit pas, elle l’encadre. Selon la Commission d’accès à l’information, une communication hors du Québec suppose une évaluation des facteurs relatifs à la vie privée, une entente écrite et une protection adéquate. Le plus simple est d’anonymiser le document avant de le soumettre, ou d’utiliser un compte professionnel après évaluation.'],
        ['q' => 'Faut-il une évaluation des facteurs relatifs à la vie privée pour utiliser ChatGPT, Claude ou Copilot ?', 'r' => 'Cela dépend de ce que l’équipe y soumet. La Commission la demande avant une communication hors du Québec et pour les projets de systèmes d’information qui touchent des renseignements personnels. Sans renseignements personnels dans les documents, la question ne se pose pas de la même façon. Le responsable de la protection des renseignements personnels de l’entreprise tranche.'],
        ['q' => 'Quel est le décalage horaire entre Montréal et Cotonou ?', 'r' => 'Cinq heures jusqu’au 1er novembre 2026, puis six heures jusqu’au 14 mars 2027, Montréal étant en retard sur Cotonou, qui reste à UTC+1 toute l’année. Une séance à 9 h à Montréal commence à 15 h à Cotonou en heure d’hiver.'],
        ['q' => 'À quelle heure se déroulent les séances pour une équipe du Québec ?', 'r' => 'Le matin, heure de Montréal, de 9 h à 12 h 30 pour une demi-journée. L’horaire publié de Richard va de 7 h à 20 h, heure de Cotonou, ce qui laisse le Québec joignable jusqu’à 14 h en heure d’hiver et jusqu’à 15 h en heure d’été. Une séance en fin d’après-midi québécoise n’est pas possible.'],
        ['q' => 'La formation se donne-t-elle en français du Québec ?', 'r' => 'Oui. Les modèles de courriel, les réponses types et le glossaire de l’équipe sont rédigés en français du Québec, et les résultats des assistants sont relus par une personne avant envoi. Pour un contrat d’adhésion destiné au Québec, la version française est remise d’abord, selon l’Office québécois de la langue française.'],
        ['q' => 'Le Canada a-t-il une loi sur l’IA que mon équipe doit respecter ?', 'r' => 'Pas à ce jour au fédéral. Le projet de loi C-36, déposé le 15 juin 2026, porte sur la vie privée et les données des consommateurs et n’avait pas dépassé la première lecture selon LEGISinfo. Les règles à suivre sont celles de la vie privée, de la consommation et des contrats, dont la Loi 25 au Québec.'],
        ['q' => 'Une formation IA peut-elle compter dans la loi du 1 % ?', 'r' => 'Peut-être. La loi du 1 % vise les employeurs québécois dont la masse salariale dépasse 2 000 000 $ et exige des dépenses de formation admissibles d’au moins 1 %. Le ministère a élargi les critères le 10 avril 2026 et propose un outil en ligne sur Québec.ca. Vérifiez l’admissibilité avant de signer ; rien n’est garanti.'],
        ['q' => 'Services Québec peut-il financer une formation donnée à distance depuis Cotonou ?', 'r' => 'Le guide de la Mesure de formation (mis à jour le 28 juin 2023) admet la formation à distance et exige que le choix du formateur soit approuvé par le ministère. La situation d’un formateur établi à l’étranger n’y est pas décrite : posez la question à Services Québec avec le programme et le devis, avant toute inscription.'],
        ['q' => 'Combien coûte la formation, et en quelle monnaie est le devis ?', 'r' => 'Le prix est fixé sur devis, en dollars canadiens, après un échange de cadrage. Il dépend du nombre de participants, du format, de la préparation sur vos documents, des créneaux et du suivi. Les abonnements aux assistants sont facturés à part par les éditeurs.'],
        ['q' => 'Richard se déplace-t-il à Montréal ou à Québec ?', 'r' => 'Non, la formation se donne à distance, en visioconférence, avec partage d’écran et exercices envoyés avant chaque séance. Les rendez-vous se placent le matin, heure de Montréal.'],
        ['q' => 'Les employés peuvent-ils utiliser leur compte gratuit pour s’exercer ?', 'r' => 'Seulement avec des documents anonymisés ou fictifs. Les documents contenant des renseignements personnels attendent un compte professionnel dont l’entreprise contrôle les réglages, ou ne sortent pas de l’entreprise.'],
    ],

    'sources' => [
        ['titre' => 'Commission d’accès à l’information du Québec, utilisation et communication de renseignements personnels (entreprises privées)', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/utilisation-communication-renseignements-personnels', 'date' => '2026-10-25'],
        ['titre' => 'Commission d’accès à l’information du Québec, sanctions et poursuites applicables aux entreprises', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/sanctions-entreprises-poursuites', 'date' => '2026-10-25'],
        ['titre' => 'Commission d’accès à l’information du Québec, principaux changements apportés par la Loi 25', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25', 'date' => '2026-10-25'],
        ['titre' => 'Commission d’accès à l’information du Québec, incidents de confidentialité et mesures de sécurité', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/incidents-confidentialite-mesures-securite-entreprises', 'date' => '2026-10-25'],
        ['titre' => 'Commissariat à la protection de la vie privée du Canada, principes pour des technologies d’IA générative responsables (7 décembre 2023)', 'url' => 'https://www.priv.gc.ca/fr/sujets-lies-a-la-protection-de-la-vie-privee/ia-technologie-et-innovation/intelligence-artificielle/gd_principes_ia/', 'date' => '2026-10-25'],
        ['titre' => 'Parlement du Canada, LEGISinfo : projet de loi C-36 (45e législature)', 'url' => 'https://www.parl.ca/legisinfo/fr/projet-de-loi/45-1/c-36', 'date' => '2026-10-25'],
        ['titre' => 'Statistique Canada, utilisation de l’intelligence artificielle par les entreprises au Canada, deuxième trimestre de 2026', 'url' => 'https://www150.statcan.gc.ca/n1/pub/11-621-m/11-621-m2026010-fra.htm', 'date' => '2026-10-25'],
        ['titre' => 'Institut de la statistique du Québec, intelligence artificielle dans les entreprises du Québec', 'url' => 'https://statistique.quebec.ca/fr/document/intelligence-artificielle-entreprises-quebec', 'date' => '2026-10-25'],
        ['titre' => 'DataReportal, rapport Digital 2026 sur le Canada', 'url' => 'https://datareportal.com/reports/digital-2026-canada', 'date' => '2026-10-25'],
        ['titre' => 'Montréal International, intelligence artificielle', 'url' => 'https://www.montrealinternational.com/fr/secteurs/intelligence-artificielle/', 'date' => '2026-10-25'],
        ['titre' => 'Office québécois de la langue française, contrats d’adhésion', 'url' => 'https://www.oqlf.gouv.qc.ca/francisation/entreprises/contrats-adhesion.html', 'date' => '2026-10-25'],
        ['titre' => 'Ministère de l’Emploi et de la Solidarité sociale du Québec, rapport quinquennal sur la Loi favorisant le développement et la reconnaissance des compétences de la main-d’œuvre', 'url' => 'https://cdn-contenu.quebec.ca/cdn-contenu/adm/min/emploi-solidarite-sociale/publications-adm/rapport/RA_Rapport_quinquennal_LDRCMO_2018-2023.pdf', 'date' => '2026-10-25'],
        ['titre' => 'Gouvernement du Québec, Loi sur les compétences : Québec élargit les formations admissibles (communiqué du 10 avril 2026)', 'url' => 'https://www.quebec.ca/nouvelles/actualites/details/loi-sur-les-competences-quebec-elargit-les-formations-admissibles-et-simplifie-les-demarches-pour-les-employeurs-69701', 'date' => '2026-10-25'],
        ['titre' => 'Services Québec, guide de la Mesure de formation de la main-d’œuvre, volet entreprises (mis à jour le 28 juin 2023)', 'url' => 'https://cdn-contenu.quebec.ca/cdn-contenu/adm/min/emploi-solidarite-sociale/gmse/02Guide_MFOR_volet_entreprises.pdf', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft Canada, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-ca/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus, Pro et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite', 'gouvernance-ia'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
