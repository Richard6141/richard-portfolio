<?php
// ============================================================
// data/formations/ia-en-entreprise/rd-congo.php · Formation IA en entreprise en RD Congo.
// Faits externes relevés le 26/10/2026 : DataReportal (Digital 2026), Agence
// Ecofin (chiffres de fin 2025), UNESCO et FEC (stratégie
// nationale de l'IA validée en août 2026), CongoQuotidien (plan numérique 2026-2030),
// Droit-Numérique.cd (Code du numérique, autorité de protection des données),
// INPP (formation continue), Kadea Academy, pages tarifaires d'OpenAI, Anthropic,
// Google, Microsoft et DeepSeek (noms d'offres seulement, aucun montant repris).
// Devise des devis : euros. Aucun prix de formation. Richard n'est certifié par
// aucun éditeur. « Déjà travaillé » = oui (catalogue-pays.md).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formateur IA en entreprise en RD Congo : vos équipes de Kinshasa, Lubumbashi ou Goma utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données",
    'title'   => "Formateur IA en entreprise en RD Congo | Richard SALANON",
    'meta'    => "Formation IA pour les équipes en RD Congo : ChatGPT, Claude et Gemini sur vos documents, règles du Code du numérique, à distance, devis en euros.",
    'en_bref' => "En RD Congo, une équipe peut être formée à l'IA par une école de métiers du numérique à Kinshasa ou à Lubumbashi, par un organisme public de formation continue ou par un formateur indépendant qui travaille sur ses documents. Richard SALANON forme les équipes à distance depuis Cotonou, sans décalage horaire avec Kinshasa, en français, par ateliers d'une demi-journée, sessions de deux jours ou suivi mensuel. Il apprend à rédiger, résumer et analyser avec ChatGPT, Claude et Gemini, en vérifiant chaque résultat. Le prix est fixé sur devis, en euros.",
    'publie'  => '2026-11-30',
    'maj'     => '2026-11-30',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes d'une entreprise congolaise à l'IA, et comment choisir ?",
            'paragraphes' => [
                "Trois familles de prestataires se partagent le terrain en RD Congo. Les écoles de métiers du numérique, comme Kadea Academy, qui indique sur son site des campus à Kinshasa et à Lubumbashi, des parcours longs de développeur IA ou d'analyste de données et des modules pour cadres, dont un intitulé « Generative IA for Business ». L'Institut national de préparation professionnelle (INPP), qui propose de la formation continue en modules courts pour les personnes déjà en emploi. Enfin les formateurs indépendants, qui interviennent dans l'entreprise elle-même. Chacune de ces portes d'entrée répond à un besoin différent.",
                "Un formateur IA d'entreprise ne fabrique pas des développeurs. Il apprend à des comptables, des assistantes de direction, des commerciaux ou des chargés de projet à confier une partie de leur travail écrit à un assistant, puis à contrôler ce qui revient. La nuance compte : une démonstration d'outil montre ce que l'assistant sait faire sur un exemple propre, tandis qu'une formation qui change le travail part du courrier, du rapport ou du tableau que la personne traite réellement le lundi matin.",
                "Pour choisir, posez quatre questions au prestataire. Les exercices se font-ils sur vos documents, anonymisés au besoin, ou sur des exemples génériques ? Chaque participant repart-il avec une tâche qu'il sait faire seul ? La séance dit-elle clairement quelles données ne doivent jamais quitter l'entreprise ? Que se passe-t-il le mois suivant, quand les premières difficultés apparaissent ? Une réponse précise à ces quatre points vaut davantage qu'un programme long.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est l'IA en RD Congo, et que change la stratégie nationale de 2026 ?",
            'paragraphes' => [
                "Le pays comptait 114 millions d'habitants en octobre 2025 selon les Nations unies, et 34,7 millions d'internautes fin 2025, soit 30,5 % de la population, d'après le rapport Digital 2026 de DataReportal, qui note aussi 64,7 millions de connexions mobiles cellulaires, soit 56,9 %. Agence Ecofin rapporte de son côté 73,9 millions d'abonnements mobiles actifs fin 2025, soit 65,9 % de pénétration, et une pénétration de l'internet mobile de 33 %. Les deux séries ne comptent pas la même chose, mais elles disent la même réalité : la téléphonie mobile est bien plus répandue que l'accès à internet.",
                "Sur le plan des politiques publiques, l'UNESCO rapporte qu'une cérémonie tenue à Kinshasa le 4 août 2026 a validé la Politique sectorielle de l'économie numérique et la première Stratégie nationale de l'intelligence artificielle, deux documents qui fixent les orientations jusqu'en 2030 et sont portés par le ministère de l'Économie numérique. La Fédération des entreprises du Congo précise que des ateliers de validation se sont tenus en juillet 2026 (les 21 et 22 juillet pour la politique sectorielle, les 23 et 24 juillet pour la stratégie) avec l'appui de la Banque mondiale, et que la stratégie met l'accent sur la gouvernance et la régulation, la maîtrise des données et des infrastructures, le développement des compétences et de la recherche, puis l'industrialisation et la création de valeur. CongoQuotidien, en octobre 2025, mentionnait déjà le projet d'une Académie congolaise de l'intelligence artificielle, présentée comme un centre de formation, un incubateur et un pôle de recherche.",
                "Pour une entreprise, ces textes donnent un cap, pas encore une obligation nouvelle. Leur contenu détaillé, et les obligations éventuelles qui en découleraient pour les entreprises, se lisent dans les documents eux-mêmes. Une direction n'a donc aucune raison d'attendre : le Code du numérique de 2023 s'applique déjà aux données que ses équipes confieraient à un assistant, et la formation des salariés est la partie de la stratégie sur laquelle l'entreprise peut agir tout de suite.",
            ],
        ],
        [
            'type'        => 'points',
            'titre'       => "Que signifient ces chiffres pour une formation donnée à des équipes congolaises ?",
            'intro'       => "Les statistiques nationales ne disent pas ce que vit un bureau de Goma ou de Kolwezi, mais elles orientent la manière de concevoir les séances.",
            'items'       => [
                ['titre' => "Le téléphone avant l'ordinateur", 'texte' => "Avec moins d'un habitant sur trois en ligne, selon DataReportal, beaucoup de salariés ont d'abord appris à se servir d'un smartphone. La formation prévoit donc des exercices sur ordinateur pour l'analyse et la relecture longue, et des gestes réalisables au téléphone pour le reste : dicter une note, photographier un document, relire une réponse."],
                ['titre' => "Une moyenne qui cache des écarts", 'texte' => "DataReportal relève un débit médian de 47,18 Mbps en internet fixe fin 2025, selon Ookla. Ce chiffre concerne le fixe et ne dit rien de la connexion d'un bureau de province qui dépend du réseau mobile : le questionnaire envoyé avant la séance demande la qualité de connexion de chaque participant plutôt que de la supposer."],
                ['titre' => "Les réseaux sociaux ne font pas un usage professionnel", 'texte' => "Le rapport compte 10,4 millions d'identités d'utilisateurs de réseaux sociaux en octobre 2025, soit 9,2 % de la population. Savoir publier n'est pas savoir formuler une demande à un assistant : le premier matin de la session sert à poser ce vocabulaire de travail."],
                ['titre' => "Plusieurs cartes SIM par personne", 'texte' => "Le nombre d'abonnements mobiles dépasse celui des internautes, et DataReportal rappelle que certaines connexions ne servent qu'à la voix et aux SMS. Pour la formation, cela se traduit en pratique : on prévoit une solution de repli par partage de connexion si le réseau d'un participant tombe."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils d'IA utiliser dans une équipe congolaise, et à quel coût ?",
            'legende' => "Offres relevées sur les pages officielles des éditeurs le 26 octobre 2026. Les formules, les limites d'usage et la disponibilité de certaines fonctions selon les régions évoluent : la page de l'éditeur fait foi, et ces montants ne font pas partie du prix de la formation. Aucun prix n'est repris ici, pour ne pas figer une information qui change.",
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Offres annoncées par l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', "Rédiger et reformuler, transformer des messages en tableau, analyser un fichier, dialoguer à voix haute", "Free, Go, Plus, Pro pour les particuliers ; Business et Enterprise pour les entreprises ; accès par clé API. La page signale que certaines fonctions sont limitées à des régions précises", "Le texte seul passe sur un réseau faible ; les fichiers volumineux et la voix demandent une connexion stable"],
                ['Claude (Anthropic)', "Lire des documents longs, produire des synthèses structurées, rédiger dans un ton maîtrisé", "Free, Pro, Max pour les particuliers ; Team en sièges Standard et Premium ; Enterprise", "Les limites d'usage de chaque formule se ressentent sur une journée intensive : l'équipe prévoit un second outil"],
                ['Gemini (Google)', "Travailler avec Gmail et Docs selon l'offre, rechercher, résumer, produire des images", "Version gratuite, Google AI Plus, Pro et Ultra pour les particuliers ; Gemini Enterprise pour les entreprises", "Utile aux équipes qui ont déjà des comptes Google, car l'outil s'ouvre dans le navigateur ou l'application du téléphone"],
                ['Copilot (Microsoft)', "Travailler dans Word, Excel, Outlook et Teams quand l'entreprise a ces licences", "Copilot Chat inclus dans les abonnements Microsoft 365 éligibles ; Microsoft 365 Copilot Business en complément d'un abonnement Microsoft 365 éligible, ou inclus dans certaines formules Business", "Dépend des licences déjà payées ; peu d'intérêt si l'équipe n'utilise pas Microsoft 365"],
                ['DeepSeek', "Raisonner sur un texte ou un code, tester une seconde réponse", "La page lue décrit l'interface de programmation, facturée à l'usage selon le volume de texte traité, et ne décrit pas l'application de chat", "À réserver à des documents non sensibles : la formation en compare les résultats avec ceux des autres outils"],
                ['NotebookLM (Google)', "Interroger un ensemble de documents choisis et obtenir des réponses qui renvoient aux sources, résumés audio", "Outil de Google ; la page d'abonnements de l'éditeur présente un assistant « Gemini Notebook » dans l'offre gratuite, et la page fait foi pour les conditions","Les sources sont déposées une fois, puis consultées : pratique pour revenir sur un dossier sans tout renvoyer"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Faut-il payer un abonnement pour commencer, et quel outil choisir quand le réseau est capricieux ?",
            'paragraphes' => [
                "Non : les versions gratuites suffisent pour apprendre la méthode. La session alterne volontiers deux assistants, ce qui montre que le savoir-faire (donner le contexte, fournir un modèle, exiger les références, vérifier) ne dépend d'aucun éditeur. Les abonnements payants se décident après la formation, sur ce qui a servi. Comme les formules et les plafonds évoluent régulièrement, chaque entreprise consulte la page de l'éditeur à la date de son achat et compare avec le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a>.",
                "Quand la connexion est irrégulière, quelques habitudes évitent les mauvaises surprises. Les documents d'exercice sont téléchargés avant la séance. Les consignes longues sont écrites hors ligne, dans un traitement de texte, puis collées en une fois. Les résultats importants sont copiés dans un fichier au fur et à mesure plutôt que laissés dans la conversation. Et un partage de connexion par téléphone est prévu comme solution de repli en cas de coupure pendant une séance à distance.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles de données s'appliquent avant d'envoyer un document à un assistant en RD Congo ?",
            'paragraphes' => [
                "Le texte de référence est l'ordonnance-loi n° 23/010 du 13 mars 2023 portant Code du numérique. D'après le plan publié par Droit-Numérique.cd, les données personnelles relèvent de son livre III, titre III, articles 183 à 261, qui traitent des conditions de traitement, de la transmission et du transfert, des droits des personnes, des obligations du responsable du traitement et du sous-traitant, puis des mesures administratives. Les obligations de sécurité figurent au livre IV, titre III, articles 281 à 297. Le détail des articles se lit dans le texte officiel, qu'il vaut mieux faire relire par un juriste congolais avant tout projet à grande échelle ; cette page ne reproduit pas leur contenu.",
                "Le Code prévoit une autorité de protection des données, aux articles 262 à 270, qui n'est pas encore mise en place. Selon la même source, un arrêté ministériel du 17 août 2024 confie ses missions au régulateur des postes et télécommunications (écrit ARPTIC sur cette page, ARPTC dans la presse), en attendant un décret du Premier ministre. Parmi les missions listées, l'autorité reçoit les formalités préalables à la création de traitements de données personnelles et autorise ou refuse les transferts de données vers des États tiers. Or un assistant d'IA en ligne est, pour l'essentiel, un service hébergé hors du pays : coller la fiche d'un client dans ChatGPT, Claude ou Gemini est un geste qui peut relever de cette question de transfert.",
                "En pratique, la formation ne tranche pas le droit à la place du juriste ; elle donne un réflexe. Avant chaque exercice, l'équipe classe ses documents et décide, pour chaque catégorie, ce qui peut partir, ce qu'il faut anonymiser et ce qui reste dans l'entreprise. Pour un cadre écrit plus complet, la formation <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a> prend le relais.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles données une équipe congolaise peut-elle confier à un assistant, lesquelles non ?",
            'legende' => "Classement en trois catégories proposé pendant la première demi-journée, à adapter par le responsable des données de l'entreprise",
            'entetes' => ['Catégorie', 'Exemples dans une entreprise congolaise', 'Règle de séance'],
            'lignes'  => [
                ['Peut partir', "Modèle de courrier, texte déjà publié sur le site, fiche produit sans prix négociés, plan d'une présentation", "Utilisable dans un compte gratuit ou d'équipe, avec relecture avant envoi"],
                ["À anonymiser d'abord", "Liste de clients avec noms et numéros de téléphone, compte rendu de réunion citant des personnes, extrait de relevé de mobile money", "Noms, numéros et montants remplacés avant de coller le texte ; les correspondances restent dans l'entreprise"],
                ['Ne sort jamais', "Dossiers de paie, données de patients ou d'élèves identifiables, contrats avec clauses de confidentialité, mots de passe, documents d'un bailleur interdisant la diffusion", "Traité sur place, sans assistant en ligne, ou sous un cadre écrit validé par la direction"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une équipe en RD Congo, et comment s'organise la distance depuis Cotonou ?",
            'legende' => "Les formats se combinent : un atelier pour une direction, puis la formation de deux jours pour un service pilote, puis le suivi mensuel",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Organisation en RD Congo'],
            'lignes'  => [
                ['Atelier découverte', "Une demi-journée", "12 personnes au plus", "Une direction ou un service qui veut voir l'IA sur ses propres documents avant d'investir ; séance en visioconférence"],
                ['Formation complète', "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Un usage déjà commencé sans méthode, ou une tâche volumineuse qui justifie l'investissement"],
                ['À distance', "5 à 6 séances de 2 h 30", "8 personnes au plus", "Équipes réparties entre Kinshasa, Lubumbashi, Goma ou un site minier ; séances courtes, plus faciles à suivre sur une connexion variable"],
                ['Accompagnement mensuel', "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Mesurer ce qui sert, corriger les consignes, ajouter de nouvelles tâches"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Fuseau, langue et matériel : que prévoir pour une session à distance avec la RD Congo ?",
            'paragraphes' => [
                "Kinshasa est à l'heure de Cotonou, c'est-à-dire UTC+1, sans heure d'été. Pour une équipe de Lubumbashi, il est UTC+2 : les séances sont planifiées en indiquant l'heure de chaque ville, pour éviter qu'un participant arrive une heure trop tôt. Les échanges et les supports sont en français, langue officielle du pays ; un exemple en lingala, en swahili ou en tshiluba peut illustrer un passage, mais le résultat d'un assistant dans ces langues se fait relire par un locuteur avant tout usage externe.",
                "Chaque participant a besoin d'un ordinateur avec un navigateur à jour, d'un traitement de texte et d'un tableur. Un questionnaire envoyé avant la séance recueille le niveau de départ, les outils déjà en place, les comptes disponibles et la qualité de la connexion de chacun. Les documents d'exercice sont téléchargés à l'avance sur chaque poste.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Quel programme pour quel métier congolais : quelle tâche, quel outil, quel résultat ?",
            'items' => [
                ['secteur' => "Sous-traitance minière et logistique, Lubumbashi et Kolwezi", 'probleme' => "Les bons de livraison, les rapports de chantier et la correspondance avec les donneurs d'ordre étrangers, souvent en anglais, s'accumulent dans les boîtes de messagerie.", 'solution' => "L'assistant extrait les quantités et les dates d'un bon, prépare un courrier bilingue et résume un rapport de chantier en citant les pages. Chaque quantité est recomptée sur le document source avant envoi. Outil principal : Claude pour les documents longs, ChatGPT pour les courriers."],
                ['secteur' => "Commerce et distribution, Kinshasa", 'probleme' => "Les commandes arrivent par WhatsApp en vrac, les prix circulent en francs congolais comme en dollars, et les relances de paiement partent quand quelqu'un a le temps.", 'solution' => "Transformation des messages en tableau de commandes avec la devise de chaque ligne, réponses types aux clients, relances courtoises mais fermes, toutes relues avant envoi. Outil : ChatGPT ou Gemini selon les comptes de l'équipe."],
                ['secteur' => "ONG et projets de développement, Goma, Bukavu et Kisangani", 'probleme' => "Les rapports aux bailleurs, les comptes rendus de mission et les fiches de bénéficiaires consomment des journées, et les fiches contiennent des données sensibles.", 'solution' => "Rédaction de rapports à partir de sources vérifiées, tableau d'indicateurs avec renvoi aux pages, et règle nette : aucun nom de bénéficiaire dans un assistant en ligne. Outil : NotebookLM pour interroger les documents du projet, Claude pour les synthèses."],
                ['secteur' => "Banque, microfinance et services de mobile money", 'probleme' => "Les équipes répondent à de nombreuses demandes de clients, rédigent des notes internes et des procédures, avec une exigence forte de confidentialité.", 'solution' => "Brouillons de réponses et de procédures à partir de modèles validés, sans aucune donnée de compte ni numéro de client ; chaque réponse engage la personne qui l'envoie. Outil : Copilot si l'établissement a des licences Microsoft 365."],
                ['secteur' => "Écoles, universités et centres de santé", 'probleme' => "Les équipes produisent des supports, des convocations et des courriers, mais manipulent des données d'élèves, d'étudiants ou de patients.", 'solution' => "L'assistant sert aux supports de cours, aux courriers et aux comptes rendus administratifs ; la séance commence par la frontière à ne pas franchir : aucun dossier médical ni aucune note identifiable. Outil : Gemini ou ChatGPT, versions gratuites au départ."],
                ['secteur' => "Administration et organismes parapublics", 'probleme' => "Les notes de synthèse, les courriers normés et les procès-verbaux passent par plusieurs signataires et prennent beaucoup de temps.", 'solution' => "Premier jet d'une note ou d'un courrier à partir d'un modèle validé, relecture par la personne qui signe, et clarté sur ce qui peut être soumis à un outil en ligne. Outil : ChatGPT ou Copilot selon l'équipement."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter une formation IA en RD Congo ?",
            'paragraphes' => [
                "L'organisme public de référence est l'Institut national de préparation professionnelle (INPP). D'après sa page « offres de formation », il organise de la formation continue en modules courts pour les personnes en emploi, chefs d'entreprise, salariés du public ou du privé et auto-entrepreneurs, dans ses entités à travers le pays. Il propose aussi des formations « à la carte » pour lesquelles il peut se déplacer dans l'entreprise, où qu'elle soit. La page renvoie à un catalogue téléchargeable et ne mentionne aucune formation à l'IA : renseignez-vous directement auprès de l'institut sur son catalogue et sur d'éventuelles conditions de prise en charge.",
                "Aucune prise en charge n'est promise ici, et Richard SALANON n'affiche aucun agrément auprès de l'INPP. Le plus sûr est de budgéter la formation sur les fonds propres de l'entreprise, comme une ligne de dépenses de fonctionnement, puis de mesurer le temps gagné sur la tâche choisie avant d'étendre à d'autres équipes. Si un bailleur finance un projet, une ligne de renforcement de capacités peut exister : l'attestation et les supports remis en fin de session peuvent alors servir de justificatifs.",
                "Pour décider, comparez ce que l'entreprise paierait en heures de travail sur la tâche cible avec le coût d'un atelier d'une demi-journée, plutôt qu'avec le catalogue d'une école. Une école de métiers prépare à une carrière ; une session d'entreprise vise un gain sur un poste donné.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA en entreprise en RD Congo ?",
            'intro'      => "Le prix est fixé sur devis, en euros, après un échange de cadrage. Un montant en euros évite de réécrire le devis chaque fois que le franc congolais ou le dollar bouge. Le règlement se choisit au devis parmi les modes de paiement habituels de Richard (Mobile Money, carte bancaire, PayPal, virement). Les abonnements aux assistants restent au nom de l'entreprise et ne sont pas compris.",
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en euros', 'inclus' => ["Une demi-journée sur vos documents", "Deux tâches travaillées", "Règles de données de base", "Recommandation pour la suite"]],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en euros', 'inclus' => ["Quatre demi-journées", "Exercices sur vos documents", "Supports remis et attestation de fin de formation", "Canal direct le mois suivant"]],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en euros', 'inclus' => ["Une demi-journée par mois pendant trois mois", "Mesure de ce qui sert", "Corrections et nouvelles tâches"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par exemple une équipe à Kinshasa et une autre à Lubumbashi.",
                "La durée et le nombre de demi-journées.",
                "Le temps de préparation sur vos documents et leur anonymisation.",
                "Le suivi après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les équipes qui démarrent l'IA en RD Congo ?",
            'intro' => "Ces écarts reviennent d'une organisation à l'autre ; chacun se prévient dès la session.",
            'items' => [
                ['titre' => "Attendre la stratégie nationale pour commencer", 'texte' => "La stratégie de 2026 donne un cap, sans remplacer les règles déjà en vigueur. Le Code du numérique de 2023 s'applique déjà : une entreprise gagne à documenter dès maintenant ce qu'elle envoie à un assistant."],
                ['titre' => "Se fier à la moyenne nationale de connexion", 'texte' => "Un chiffre national ne dit rien du bureau de province. On interroge chaque site sur sa connexion avant la séance, et on prévoit des exercices qui ne dépendent pas du réseau."],
                ['titre' => "Coller une liste de clients telle quelle", 'texte' => "Noms, numéros de téléphone et montants de transferts ne devraient pas partir dans un service hébergé à l'étranger sans anonymisation préalable."],
                ['titre' => "Croire une référence parce qu'elle est précise", 'texte' => "Un assistant peut citer un article de loi, un décret ou une étude inexistants. Toute référence juridique congolaise se retrouve dans le texte officiel avant d'être reprise dans un courrier."],
                ['titre' => "Confondre prix en francs congolais et en dollars", 'texte' => "Un tableau généré par un assistant ne mentionne pas toujours la devise d'un montant. Elle figure dans chaque ligne, et un total en deux devises est recalculé à la main."],
                ['titre' => "Choisir l'outil avant la tâche", 'texte' => "Trois abonnements payés par trois personnes sans règle commune coûtent plus et se contrôlent mal. L'entreprise retient un outil principal après la formation, sur ce qu'elle a mesuré."],
                ['titre' => "Prendre une formation de métiers pour une formation d'équipe", 'texte' => "Un cursus de développeur IA répond à un projet de carrière. Il ne remplace pas une séance sur le courrier, le rapport et le tableau d'un service précis."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos équipes congolaises à l'IA avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il compte " . $ans . " ans d'expérience, a suivi la formation d'" . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", a conçu l'assistant WhatsApp à intelligence artificielle <a href=\"https://wapy.pro\">Wapy</a> et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>. Il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP, et avoir travaillé dans " . count((array) fait('pays_travailles')) . " pays. Richard a déjà travaillé avec des entreprises en RD Congo, et l'heure de Kinshasa est celle de Cotonou.",
                "Sa façon de former tient en engagements vérifiables : une réponse sous 24 heures, un ou deux entretiens de cadrage, des exercices sur vos documents, une évaluation chronomètre en main sur une tâche réelle, des supports remis à l'entreprise et aucun gain chiffré promis à l'avance. Il n'est certifié par aucun éditeur d'IA. Les projets présentés sur la page des <a href=\"/realisations/\">réalisations</a> montrent sa manière de travailler, son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
                "Quand le besoin dépasse l'usage quotidien, il existe des suites : la formation <a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a> pour les décisions de budget et de règles, <a href=\"/formations/prompt-engineering\">l'ingénierie de consignes</a> pour les équipes qui veulent aller plus loin, <a href=\"/formations/agents-ia-assistants\">les agents et assistants IA</a> et <a href=\"/formations/n8n\">l'automatisation avec n8n</a>. Le <a href=\"/formations/\">catalogue complet</a> les regroupe.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe congolaise à l'usage quotidien de l'IA ?",
            'texte'  => "Indiquez le nombre de personnes, leurs postes, la ville de chaque site, les outils déjà en place et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis en euros.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mes équipes à l'IA en RD Congo ?", 'r' => "Des écoles de métiers du numérique à Kinshasa et à Lubumbashi, l'INPP pour la formation continue en modules courts, et des formateurs indépendants. Richard SALANON intervient à distance, sur vos documents, avec des ateliers d'une demi-journée, des sessions de deux jours et un suivi mensuel."],
        ['q' => "Richard SALANON intervient-il à Kinshasa, Lubumbashi ou Goma ?", 'r' => "La formation se donne à distance depuis Cotonou, en visioconférence, avec partage d'écran et documents envoyés à l'avance. Kinshasa partage le fuseau de Cotonou (UTC+1) ; Lubumbashi a une heure de plus."],
        ['q' => "Quelle est la stratégie nationale de l'IA de la RD Congo ?", 'r' => "Selon l'UNESCO, la Stratégie nationale de l'intelligence artificielle et la Politique sectorielle de l'économie numérique ont été validées à Kinshasa le 4 août 2026 et fixent les orientations jusqu'en 2030. Leur contenu détaillé se lit dans les documents eux-mêmes."],
        ['q' => "Mes équipes peuvent-elles envoyer des documents clients à ChatGPT ou Claude ?", 'r' => "Cela dépend du document. Le Code du numérique de 2023 encadre les données personnelles et leur transfert vers des États tiers. La formation apprend à classer les documents : ceux qui peuvent partir, ceux qu'on anonymise, ceux qui ne sortent jamais."],
        ['q' => "Qui contrôle la protection des données personnelles en RD Congo ?", 'r' => "Le Code prévoit une autorité de protection des données, pas encore mise en place d'après Droit-Numérique.cd. Un arrêté du 17 août 2024 confie ses missions au régulateur des postes et télécommunications. Confirmez auprès de lui la formalité à accomplir."],
        ['q' => "La formation fonctionne-t-elle avec une connexion instable ?", 'r' => "Oui, avec des précautions : documents téléchargés avant la séance, consignes rédigées hors ligne, résultats copiés au fur et à mesure et solution de repli en cas de coupure. Un questionnaire avant la séance relève la qualité de connexion de chaque participant."],
        ['q' => "L'INPP finance-t-il une formation à l'IA ?", 'r' => "La page de l'INPP présente de la formation continue en modules courts pour les personnes en emploi, mais ne mentionne pas l'IA ni ses conditions de prise en charge. Aucune prise en charge n'est garantie : interrogez l'institut avant de budgéter."],
        ['q' => "En quelle devise le devis est-il établi ?", 'r' => "En euros, sur devis, après l'échange de cadrage. Le franc congolais et le dollar coexistent dans le pays ; un montant en euros évite de le réécrire à chaque variation du taux."],
        ['q' => "Faut-il payer un abonnement avant la formation ?", 'r' => "Non. Les versions gratuites suffisent pour apprendre la méthode. Les formules et les limites d'usage des éditeurs évoluent : la page officielle de chacun fait foi à la date de votre achat."],
        ['q' => "Quelle langue pour la formation, et pour les outils ?", 'r' => "Le français, langue officielle du pays. Les assistants fonctionnent bien en français ; pour du lingala, du swahili ou du tshiluba, un locuteur relit le résultat avant tout usage externe."],
        ['q' => "Combien de personnes par session ?", 'r' => "Douze au plus pour l'atelier d'une demi-journée, dix pour la formation de deux jours, huit pour une séance à distance."],
        ['q' => "Reçoit-on une attestation ?", 'r' => "Oui, une attestation nominative de fin de formation, avec les supports et les exercices. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "DataReportal, Digital 2026 : République démocratique du Congo", 'url' => 'https://datareportal.com/reports/digital-2026-democratic-republic-of-the-congo', 'date' => '2026-10-26'],
        ['titre' => "Agence Ecofin, RDC : l'internet mobile devient la principale source de revenus des télécoms (mai 2026)", 'url' => 'https://www.osiris.sn/rdc-l-internet-mobile-devient-la-principale-source-de-revenus-des-telecoms.html', 'date' => '2026-10-26'],
        ['titre' => "UNESCO, la RDC se dote d'une stratégie nationale pour une intelligence artificielle éthique et inclusive", 'url' => 'https://www.unesco.org/fr/articles/la-rdc-se-dote-dune-strategie-nationale-pour-une-intelligence-artificielle-ethique-et-inclusive', 'date' => '2026-10-26'],
        ['titre' => "Fédération des entreprises du Congo, le Comité professionnel du numérique et les ateliers de validation de juillet 2026", 'url' => 'https://fec-rdc.com/le-comite-professionnel-du-numerique-de-la-fec-renforce-son-engagement-pour-la-transformation-numerique/', 'date' => '2026-10-26'],
        ['titre' => "CongoQuotidien, RDC 2030 : le pari numérique pour une nation digitale (10 octobre 2025)", 'url' => 'https://www.congoquotidien.com/2025/10/10/rdc-numerique-intelligence-artificielle-strategie/', 'date' => '2026-10-26'],
        ['titre' => "Droit-Numérique.cd, le Code du numérique congolais (ordonnance-loi n° 23/010 du 13 mars 2023)", 'url' => 'https://droitnumerique.cd/code-du-numerique-congolais/', 'date' => '2026-10-26'],
        ['titre' => "Droit-Numérique.cd, l'autorité de protection des données", 'url' => 'https://droitnumerique.cd/autorite-de-protection-des-donnees/', 'date' => '2026-10-26'],
        ['titre' => "INPP, offres de formation", 'url' => 'https://inpp.cd/offres-de-formation/', 'date' => '2026-10-26'],
        ['titre' => "Kadea Academy, école des métiers du numérique en RD Congo", 'url' => 'https://kadea.academy', 'date' => '2026-10-26'],
        ['titre' => "OpenAI, ChatGPT : offres et tarifs", 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-26'],
        ['titre' => "Anthropic, offres de Claude", 'url' => 'https://claude.com/pricing', 'date' => '2026-10-26'],
        ['titre' => "Google, abonnements Gemini et Google AI", 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-26'],
        ['titre' => "Microsoft, offres de Microsoft 365 Copilot", 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-26'],
        ['titre' => "IANA, base des fuseaux horaires (Africa/Kinshasa et Africa/Lubumbashi)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-26'],
        ['titre' => "DeepSeek, documentation de l'interface de programmation et tarification", 'url' => 'https://api-docs.deepseek.com/quick_start/pricing/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
