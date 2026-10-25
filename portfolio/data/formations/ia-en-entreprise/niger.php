<?php
// ============================================================
// data/formations/ia-en-entreprise/niger.php · Page « formation IA en entreprise » du Niger.
// Faits externes relevés le 25/10/2026 : tarifs Anthropic, OpenAI, Google, Microsoft,
// politique de confidentialité DeepSeek, limites NotebookLM, plan Niger 2.0 (Ecofin), programme
// Haské (AFP), FAFPA (Fonds fiduciaire de l'UE pour l'Afrique). Faits repris de la fiche pays
// (relevés le 06/10/2026) : ARCEP, DataReportal, BCEAO, loi n° 2023-31, SECeF.
// Aucune certification ni aucun agrément attribué à Richard. Aucune somme pour la formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formateur IA en entreprise au Niger : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données et des séances pensées pour une connexion qui coupe",
    'title'   => "Formateur IA en entreprise au Niger | Richard SALANON",
    'meta'    => "Formation IA pour les équipes au Niger : ChatGPT, Claude et Gemini sur vos documents, règles de données de la HAPDP, à distance depuis Cotonou, sur devis.",
    'en_bref' => "Au Niger, une équipe peut se former à l'IA auprès d'un formateur d'entreprise qui travaille sur ses propres documents : Richard SALANON, consultant basé à Cotonou, anime à distance, à la même heure qu'à Niamey, des ateliers et des formations en français sur ChatGPT, Claude et Gemini. Les séances tiennent compte d'une connexion qui peut couper. Chaque groupe apprend d'abord quelles données ne doivent jamais quitter l'entreprise, puis traite deux ou trois tâches réelles. Le devis est établi en FCFA, sur demande.",
    'publie'  => '2026-11-02',
    'maj'     => '2026-11-02',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes à l'IA au Niger, et comment choisir ?",
            'paragraphes' => [
                "Un formateur IA d'entreprise apprend à des salariés à se servir d'un assistant sur leur travail réel, puis à vérifier ce qu'il produit. Au Niger, le choix se porte sur une école, un cabinet étranger ou un consultant indépendant. Le bon critère est simple : la formation se fait-elle sur vos documents ?",
                "Beaucoup de responsables nigériens commencent leur recherche par une requête comme « formation IA Niamey » et obtiennent surtout des pages d'encyclopédie ou de boutique d'applications. En attendant, les équipes se débrouillent seules : un salarié découvre ChatGPT sur son téléphone, un autre colle un contrat dans un compte personnel, et personne n'a défini ce qui est permis. Une formation d'entreprise sert d'abord à remplacer ces usages dispersés par une pratique commune.",
                "Une démonstration d'outil dure une heure et laisse un bon souvenir. Une formation qui change le travail suit une autre logique : on choisit deux ou trois tâches que la personne répète chaque semaine (une note de synthèse pour la direction, une réponse à un client, un tableau de suivi de livraisons), on les refait avec l'assistant sur de vrais fichiers de l'entreprise, et on termine par un exercice que la personne réussit seule. Le critère de réussite n'est pas la satisfaction du jour, c'est ce que l'équipe fait encore un mois plus tard.",
                "Pour comparer des offres, quatre questions suffisent. Qui anime, et sur quels outils a-t-il lui-même travaillé ? Les exercices utilisent-ils vos documents, anonymisés au besoin ? Que se passe-t-il quand la connexion s'interrompt pendant la séance ? Le devis détaille-t-il la préparation, les supports remis et le suivi qui suit la session ? Un prestataire qui répond précisément à ces quatre points mérite un entretien, qu'il soit nigérien ou étranger.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est le numérique nigérien, et que change-t-il pour une formation à l'IA ?",
            'paragraphes' => [
                "Le Niger compte 28,1 millions d'habitants fin 2025 selon DataReportal, dont 6,52 millions d'internautes (23,2 %). Pour une formation, cela signifie que la plupart des participants se connecteront depuis un téléphone ou un poste de bureau partagé, sur un réseau qui varie d'un quartier de Niamey à l'autre. L'organisation part de cette réalité.",
                "L'ARCEP, le régulateur, comptait à la fin de septembre 2025 plus de 17,7 millions de lignes mobiles, 8,49 millions d'abonnés à l'internet mobile et seulement 57 936 abonnés à l'internet fixe. Dans une entreprise, le poste de travail est donc souvent relié par un modem mobile ou un partage de connexion, et le débit se dégrade quand plusieurs personnes l'utilisent en même temps. Dans un atelier de huit personnes, ce détail décide du déroulement : mieux vaut télécharger les documents la veille que les ouvrir ensemble pendant la séance.",
                "L'électricité pèse aussi sur l'organisation. Lors du lancement du programme Haské avec la Banque mondiale en septembre 2022, le taux national d'accès à l'électricité était estimé à 17,5 %, avec un objectif de 30 % en 2026 et de 80 % en 2035 (dépêche AFP reprise par Le360). Les bureaux de Niamey et des grandes villes sont mieux lotis que les zones rurales, mais une coupure pendant une journée de formation reste un scénario à prévoir : ordinateurs chargés, séances découpées en blocs courts, travail déjà enregistré.",
                "Côté politique publique, le plan Niger 2.0, présenté par Ecofin en juillet 2023, vise à démocratiser l'accès aux technologies de l'information et de la communication depuis 2021 ; l'Agence nationale de la société de l'information (ANSI) y pilote notamment un appel d'offres pour l'internet à haut débit dans 1 000 écoles et 300 cases de santé. Ce plan concerne l'infrastructure et l'administration. Pour l'usage d'un assistant d'IA en entreprise, le cadre applicable se lit aujourd'hui dans les textes généraux sur les données personnelles et les transactions électroniques, traités plus bas.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres retenir avant de planifier une formation au Niger ?",
            'items' => [
                ['valeur' => '23,2 %', 'libelle' => "Part des habitants du Niger qui utilisent internet fin 2025, soit 6,52 millions de personnes (rapport Digital 2026)", 'source' => 'DataReportal, Digital 2026 : Niger', 'url' => 'https://datareportal.com/reports/digital-2026-niger'],
                ['valeur' => '62,93 %', 'libelle' => "Lignes mobiles rapportées à la population estimée par l'INS, à la fin de septembre 2025 : 17 737 818 lignes, dont une même personne peut posséder plusieurs cartes SIM", 'source' => "ARCEP Niger, observatoire du troisième trimestre 2025", 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf'],
                ['valeur' => '57 936', 'libelle' => "Abonnés à l'internet fixe chez les fournisseurs d'accès à la fin de septembre 2025, contre 8 488 371 abonnés à l'internet mobile", 'source' => "ARCEP Niger, observatoire du troisième trimestre 2025", 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf'],
                ['valeur' => '17,5 %', 'libelle' => "Taux national d'accès à l'électricité au lancement du programme Haské en septembre 2022, avec un objectif de 30 % en 2026 et de 80 % en 2035", 'source' => 'Le360 Afrique, dépêche AFP du 14 septembre 2022', 'url' => 'https://afrique.le360.ma/autres-pays/economie/2022/09/14/39299-niger-banque-mondiale-lancement-dun-programme-pour-atteindre-un-taux-delectrification-de-80/'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils d'IA une équipe nigérienne peut-elle utiliser, et à quel coût ?",
            'legende' => "Tarifs publics des éditeurs relevés le 25 octobre 2026, hors taxes, dans la devise affichée par chaque page (dollars pour Anthropic, OpenAI et Microsoft ; euros pour Google, dont la page était réglée sur le Bénin). Ces montants sont ceux des éditeurs et ne font pas partie du prix de la formation. Un éditeur peut modifier ses offres à tout moment.",
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Coût chez l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', "Rédaction de courriers, reformulation, tableaux à partir de messages en vrac, assistant polyvalent pour les premiers essais", "Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars en mensuelle, à partir de 2 utilisateurs", "Application mobile utilisable sur téléphone ; préparer les consignes hors ligne et les coller en une fois"],
                ['Claude (Anthropic)', "Lecture de documents longs, synthèse avec citation des passages, réponses mesurées et bien structurées en français", "Gratuit ; Pro 20 dollars par mois, ou 17 dollars par mois pour 200 dollars payés d'avance ; Team standard 25 dollars par siège et par mois, 20 dollars en annuel", "Les fichiers se téléversent une fois ; un document lourd consomme plus de données qu'un message court"],
                ['Gemini (Google)', "Équipes déjà sur Gmail, Google Docs ou Google Drive ; résumé de pièces jointes et de réunions dans l'écosystème Google", "Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (prix affichés pour le Bénin) ; offres Business à partir de 21 dollars par utilisateur et par mois", "S'ouvre depuis un compte Google que beaucoup de salariés ont déjà, sans nouvelle inscription"],
                ['Copilot (Microsoft)', "Équipes qui travaillent dans Word, Excel, Outlook et Teams avec une licence Microsoft 365", "Copilot Chat inclus sans surcoût dans les abonnements éligibles ; Microsoft 365 Copilot Business 21 dollars par utilisateur et par mois en annuel (18 dollars en promotion jusqu'au 31 décembre 2026, première année, clients Microsoft 365 Business existants), 25,20 dollars en mensuel", "Dépend de la licence que l'entreprise possède déjà ; à vérifier avant la séance"],
                ['DeepSeek', "Raisonnement et code, pour des questions techniques ou des contenus publics", "Prix de l'interface de programmation sur la page de l'éditeur ; la politique de confidentialité du 10 février 2026 indique que les données sont traitées et stockées en Chine", "À réserver aux contenus publics ; ne rien y déposer de confidentiel"],
                ['NotebookLM (Google)', "Interroger un ensemble de documents choisis et obtenir des réponses qui renvoient à ces sources ; utile pour un dossier de projet", "Version gratuite : 100 carnets par utilisateur, 50 sources par carnet ; Plus : 200 carnets, 100 sources ; Pro : 500 carnets, 300 sources (page d'aide de Google, prix non affichés)", "Les sources se chargent une fois, puis les questions pèsent peu"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel outil choisir quand on débute, et faut-il payer d'emblée ?",
            'paragraphes' => [
                "Non : une équipe nigérienne peut commencer sans abonnement. Les versions gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre la méthode, avec leurs limites d'usage quotidiennes. L'abonnement se décide après les premières semaines, quand l'entreprise sait lequel de ces outils sert vraiment à ses tâches.",
                "Le plus simple est de partir de ce que les salariés ont déjà : un compte Google pour Gemini et NotebookLM, une licence Microsoft 365 pour Copilot Chat. Pour comparer en détail les offres d'équipe de ChatGPT, Claude et Gemini, le <a href='/comparatifs/chatgpt-vs-claude-vs-gemini'>comparatif de ces trois assistants</a> donne les conditions et le coût pour dix personnes.",
                "Deux précautions s'appliquent au Niger. D'abord, le paiement : les abonnements se règlent en dollars ou en euros avec une carte internationale, ce que toutes les entreprises ne possèdent pas ; la question se règle avant l'achat, pas le jour de la formation. Ensuite, la version gratuite sert à apprendre sur des documents anonymisés ; elle ne remplace pas un compte d'entreprise pour les dossiers sensibles.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles de données et de conformité s'appliquent au Niger ?",
            'paragraphes' => [
                "Avant d'envoyer un document à un assistant d'IA, une entreprise nigérienne doit regarder la loi n° 2022-59 du 16 décembre 2022 sur les données à caractère personnel, modifiée par la loi n° 2023-31 du 4 juillet 2023. L'autorité de contrôle est la Haute Autorité de Protection des Données à caractère Personnel (HAPDP).",
                "Le réflexe pratique est de distinguer trois familles de documents. Les documents publics (plaquette, appel d'offres publié, modèle de courrier vierge) peuvent être soumis à un assistant. Les documents internes sans donnée personnelle (procédure, tableau de prix interne) demandent un compte professionnel et un réglage de l'historique. Les documents contenant des noms, des numéros de téléphone, des salaires, des dossiers de clients ou des données de santé sont anonymisés avant tout envoi, ou ne sortent pas de l'entreprise.",
                "Avant d'envoyer des données personnelles à un outil d'IA, il faut vérifier auprès de la HAPDP les formalités qui s'appliquent au traitement concerné (déclaration ou autorisation). Si la loi exige des formalités pour un traitement de données de clients, il ne suffit pas qu'un assistant le fasse à votre place : la responsabilité reste celle de l'entreprise. La procédure applicable à votre cas se confirme auprès de la HAPDP ou d'un avocat avant de déposer des dossiers nominatifs dans un outil hébergé à l'étranger.",
                "Le cadre plus large s'appuie sur la loi n° 2019-03 du 30 avril 2019 sur les transactions électroniques. Pour une équipe, cela concerne les documents numériques qui engagent l'entreprise : une offre, un devis ou une facture rédigés avec un assistant gardent la même valeur que s'ils étaient écrits à la main, et la facture certifiée SECeF reste obligatoire pour les sociétés assujetties à la TVA, quel que soit l'outil qui a préparé le brouillon. Le Niger est aussi membre de l'OHADA depuis 1995, ce qui commande le plan comptable SYSCOHADA dans les tableaux qu'un assistant aide à préparer.",
                "Pour un assistant d'IA, les obligations découlent de ces lois et des contrats de l'entreprise, par exemple avec un bailleur ou un donneur d'ordre qui interdit de partager ses documents. Un service qui travaille pour un projet financé par un partenaire étranger relit d'abord les clauses de confidentialité de ce partenaire, qui peuvent être plus strictes que la loi.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que faire concrètement avant d'envoyer un document à un assistant ?",
            'intro' => "Cinq gestes forment la règle que chaque participant applique à la fin de la formation. Ils tiennent sur une carte posée près du poste de travail.",
            'items' => [
                ['titre' => "Classer le document", 'texte' => "Public, interne ou sensible : la décision se prend en dix secondes, avant d'ouvrir l'outil, et pas après l'avoir collé."],
                ['titre' => "Remplacer les noms et les numéros", 'texte' => "Un client devient « Client A », un numéro de téléphone disparaît, un montant garde son ordre de grandeur. L'assistant n'a pas besoin de l'identité pour reformuler un courrier."],
                ['titre' => "Utiliser le bon compte", 'texte' => "Compte d'entreprise pour les documents internes, jamais le compte personnel d'un salarié que l'entreprise ne contrôle pas et qui part avec lui."],
                ['titre' => "Régler l'historique", 'texte' => "Vérifier si les conversations servent à améliorer les modèles et désactiver cette option quand l'offre le permet."],
                ['titre' => "Garder une trace", 'texte' => "Noter quel document a été soumis, à quel outil et par qui, dans un cahier ou un tableur partagé. Cette habitude répond aussi aux demandes d'un bailleur ou d'un auditeur."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format de formation choisir pour quelle équipe, et comment l'organiser à distance ?",
            'legende' => "Tous les formats se donnent à distance depuis Cotonou, en français, sur la même heure légale qu'à Niamey (UTC+1 toute l'année). Les durées et tailles de groupe sont celles de la fiche de formation en entreprise.",
            'entetes' => ['Format', 'Durée et groupe', 'Pour quelle équipe', 'Organisation à Niamey et ailleurs au Niger'],
            'lignes'  => [
                ['Atelier découverte', "Une demi-journée, 12 personnes au plus", "Direction ou service qui n'a jamais travaillé avec un assistant et veut voir avant d'investir", "Deux blocs d'une heure trente avec une pause ; documents envoyés la veille ; salle avec une bonne couverture ou connexion de secours par téléphone"],
                ['Formation complète', "Deux jours en quatre demi-journées, 10 personnes au plus", "Équipe qui utilise déjà l'IA sans méthode, ou service avec des tâches répétitives bien identifiées", "Séances de matinée ou d'après-midi selon l'électricité et le trafic ; enregistrement disponible pour qui a décroché"],
                ['Séances à distance étalées', "Cinq à six séances de 2 h 30, 8 personnes au plus", "Équipe répartie entre Niamey, Maradi, Zinder ou Agadez, ou sur un chantier", "Une séance par jour ou par semaine ; chacun se connecte de son lieu de travail ; exercices à terminer hors ligne"],
                ['Session de direction', "Une demi-journée, 6 personnes au plus", "Dirigeants et responsables qui décident des outils, du budget et des règles", "Appel en petit groupe, support écrit remis ensuite, sans exercice lourd"],
                ['Accompagnement mensuel', "Une demi-journée par mois pendant 3 mois", "Équipe déjà formée qui veut étendre l'usage à d'autres tâches", "Bilan des usages du mois, correction des consignes, nouvelle tâche ajoutée"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel matériel, quelle langue et quel horaire prévoir pour une formation depuis Cotonou ?",
            'paragraphes' => [
                "Niamey et Cotonou sont toutes deux à UTC+1 sans heure d'été : il n'y a aucun décalage à gérer. Richard est joignable de 7 h à 20 h, ce qui laisse de la marge pour une séance à 8 h 30, avant la chaleur de l'après-midi, ou à 15 h, après la pause.",
                "Chaque participant a besoin d'un ordinateur, d'un navigateur à jour et d'un casque ou d'écouteurs ; un téléphone sert de secours pour le partage de connexion. Les supports sont envoyés en pièces jointes légères avant la séance, avec les documents d'exercice, pour qu'une coupure n'arrête personne. Quand un participant décroche, le groupe poursuit et l'enregistrement permet de rattraper le passage manqué.",
                "La formation se tient en français, langue de travail dans les entreprises, alors que le haoussa est aujourd'hui la langue nationale du pays et que le français y est langue de travail depuis 2025. Les assistants écrivent par défaut un français de France : on leur fournit donc un courrier modèle de l'entreprise pour reprendre ses formules. Un texte en haoussa produit par un assistant est relu par un locuteur avant tout usage, car la qualité varie selon les outils et les sujets.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Que fait chaque métier nigérien avec l'IA pendant la formation ?",
            'items' => [
                ['secteur' => "Pétrole et sous-traitance, de Niamey à Agadem", 'probleme' => "Autour de l'activité pétrolière, de petites entreprises de transport, de maintenance et de fournitures répondent à des donneurs d'ordre qui exigent des offres complètes, souvent en anglais, et des rapports d'intervention réguliers.", 'solution' => "Tâche : transformer les notes d'une intervention en rapport structuré et rédiger l'offre de réponse à un appel. Outil : Claude ou ChatGPT sur un modèle de rapport de l'entreprise. Résultat attendu : un premier jet complet que le responsable relit, avec vérification des quantités, des dates et des engagements de délai."],
                ['secteur' => "Agriculture, élevage et négoce de céréales", 'probleme' => "Une coopérative ou un négociant note ses achats, ses stocks et ses avances dans des cahiers et des messages vocaux, et prépare à la main les comptes rendus demandés par ses partenaires.", 'solution' => "Tâche : convertir des notes de collecte en tableau de stocks par site, et résumer un rapport de campagne. Outil : ChatGPT sur téléphone pour structurer, tableur pour calculer. Résultat attendu : un tableau propre dont deux totaux sont recalculés à la main avant diffusion."],
                ['secteur' => "Banques, microfinance et services de monnaie électronique", 'probleme' => "Les équipes commerciales et conformité rédigent des courriers, des notes d'information et des comptes rendus de visite, tout en manipulant des informations de clients protégées par la loi sur les données.", 'solution' => "Tâche : produire une note d'information client et un compte rendu de visite à partir de notes anonymisées. Outil : Copilot Chat si la licence Microsoft 365 existe, sinon un assistant sur compte d'entreprise. Résultat attendu : des textes cohérents, sans nom ni numéro de client dans l'outil."],
                ['secteur' => "Commerce de détail et vente par messagerie", 'probleme' => "Un commerçant de Niamey répond à des dizaines de messages par jour, avec des prix qui changent et des commandes notées dans des fils de discussion.", 'solution' => "Tâche : rédiger des réponses types, classer les demandes par motif et dresser le tableau des commandes de la journée. Outil : ChatGPT ou Gemini. Résultat attendu : une bibliothèque de réponses relues par le gérant, et un tableau de commandes qui correspond aux messages."],
                ['secteur' => "Administration, projets de développement et organisations humanitaires", 'probleme' => "Les équipes de projet produisent des rapports pour des bailleurs, des notes de synthèse et des procès-verbaux, avec des dates butoirs serrées et des informations parfois sensibles sur des bénéficiaires.", 'solution' => "Tâche : résumer un rapport long en citant les pages, préparer un tableau d'indicateurs et un procès-verbal de réunion. Outil : Claude ou NotebookLM sur des documents non nominatifs. Résultat attendu : une synthèse dont chaque chiffre est retrouvé dans la source."],
                ['secteur' => "Sociétés assujetties à la TVA et cabinets comptables", 'probleme' => "La facture certifiée SECeF, la comptabilité SYSCOHADA et les relances de paiement occupent les équipes administratives chaque fin de mois.", 'solution' => "Tâche : rédiger les relances, préparer le commentaire d'un tableau de dépenses et vérifier la cohérence d'un export. Outil : un assistant sur compte d'entreprise et le tableur de la société. Résultat attendu : des textes de relance utilisables et un contrôle chiffré fait à la main, jamais délégué à l'assistant."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer une formation IA, ou la faire financer, au Niger ?",
            'paragraphes' => [
                "Aucune prise en charge n'est garantie, et le plus sûr est de budgéter la formation comme une dépense de l'entreprise. Le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA), placé sous la tutelle du ministère de l'Enseignement professionnel et technique, est l'organisme public à interroger pour connaître ses conditions.",
                "Les documents publics consultés montrent que le FAFPA intervient surtout dans l'apprentissage et la formation des jeunes. Une page du Fonds fiduciaire de l'Union européenne pour l'Afrique, publiée le 26 juillet 2018, décrit son partenariat avec LuxDev dans les régions de Zinder et d'Agadez : 1 995 jeunes en première vague, dont 860 à Agadez et 1 135 à Zinder, avec l'équipement d'opérateurs de formation. Ces programmes visent des publics précis. Une entreprise qui veut former ses salariés à l'IA ne doit pas supposer que son projet entre dans ces dispositifs.",
                "La démarche sûre consiste à écrire au FAFPA avec le programme, le public, la durée et le devis, et à demander trois choses : le type de formation éligible, la nécessité ou non d'une habilitation du prestataire, et le délai d'instruction. Richard n'affiche aucun agrément d'un fonds public. Si un financement conditionne votre décision, la réponse écrite doit précéder la signature.",
                "Pour une organisation qui exécute un projet financé par un partenaire étranger, le budget prévoit souvent une ligne de renforcement des capacités. Relisez la convention avant de commander : elle indique si la formation d'un salarié en IA est dépensable, avec quelles pièces justificatives. Le programme remis, les feuilles de présence et l'attestation nominative de fin de formation servent de justificatifs dans tous les cas.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour une équipe au Niger ?",
            'intro'      => "Aucune somme n'est affichée ici : le prix est fixé sur devis, en FCFA, après un échange de cadrage de trente minutes. Le devis détaille la préparation, l'animation, les supports et le suivi. Les abonnements aux assistants ne sont pas inclus dans le prix de la formation.",
            'items'      => [
                ['offre' => "Atelier découverte", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Une demi-journée à distance", "Deux tâches travaillées sur vos documents", "Règle de classement des données", "Recommandation pour la suite"]],
                ['offre' => "Formation complète", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Quatre demi-journées à distance", "Exercices préparés avec vos documents anonymisés", "Bibliothèque de consignes et modes opératoires", "Évaluation sur la tâche cible et attestation", "Suivi par message le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Une demi-journée par mois pendant trois mois", "Mesure de ce qui sert", "Nouvelles tâches ajoutées", "Bilan écrit à trois mois"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes à former.",
                "La durée retenue et le nombre de demi-journées.",
                "Le choix entre une session à distance, suivie depuis Niamey ou Maradi, et un déplacement convenu au préalable.",
                "La préparation sur les documents du client, notamment leur anonymisation.",
                "La langue des supports, en français ou en anglais.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment payer et budgéter la formation depuis le Niger ?",
            'paragraphes' => [
                "Le devis est libellé en FCFA, monnaie commune au Niger et au Bénin, donc sans conversion. Richard accepte Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces ; le mode de règlement se fixe au devis. Une société qui règle par virement depuis sa banque nigérienne en précise les frais avant l'émission de la facture.",
                "Pour budgéter, séparez trois lignes : la formation, les abonnements aux assistants (en dollars ou en euros, avec une carte internationale) et le temps des salariés pendant les séances. La troisième est la plus oubliée. Une équipe de huit personnes qui suit quatre demi-journées mobilise l'équivalent de plusieurs journées de travail ; mieux vaut le décider avant la première séance que de le subir au milieu.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs reviennent chez les équipes nigériennes qui démarrent l'IA ?",
            'intro' => "Ces écarts naissent des conditions du pays autant que de l'outil. Chacun se prévient pendant la session.",
            'items' => [
                ['titre' => "Tout faire passer par le téléphone personnel", 'texte' => "Faute de poste fiable, des salariés collent des documents de l'entreprise dans une application installée sur leur téléphone. La règle de classement écrite et le compte d'entreprise remplacent cette habitude."],
                ['titre' => "Prendre la ligne mobile pour un accès fiable", 'texte' => "62,93 % de lignes mobiles ne signifient pas que chaque salarié est connecté en continu. Une séance qui suppose un débit constant échoue dès la première coupure ; les documents se préparent à l'avance."],
                ['titre' => "Mettre des données de clients ou de bénéficiaires dans l'outil", 'texte' => "La loi n° 2022-59 protège ces informations. Une liste de clients, un dossier d'élève ou une fiche de bénéficiaire ne se soumet jamais à un assistant sans anonymisation."],
                ['titre' => "Utiliser DeepSeek pour des documents internes", 'texte' => "Sa politique de confidentialité indique un traitement des données en Chine. Cet outil convient à des contenus publics, pas à une offre commerciale ni à un rapport de bailleur."],
                ['titre' => "Laisser l'assistant faire les calculs", 'texte' => "Un total de stock, une marge ou un montant de TVA se recalcule dans le tableur. L'assistant sert à structurer et à rédiger, pas à garantir un chiffre."],
                ['titre' => "Négliger la relecture en haoussa ou en français local", 'texte' => "Un message envoyé à des clients dans une autre langue que le français est relu par un locuteur. Une formule maladroite abîme la confiance plus vite qu'un retard de réponse."],
                ['titre' => "Acheter plusieurs abonnements avant d'avoir mesuré", 'texte' => "Avec un paiement en devises, chaque abonnement pèse sur la trésorerie. On commence par la version gratuite, on mesure le temps gagné sur une tâche, puis on décide."],
                ['titre' => "Former tout le monde de la même façon", 'texte' => "Un comptable, une commerciale et un conducteur de travaux n'ont pas les mêmes tâches. Les groupes se composent par métier, comme dans la formation <a href='/formations/ia-generative-dirigeants'>IA générative pour dirigeants</a> pour la direction."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Qui répond d'un document rédigé avec un assistant dans votre entreprise ?",
            'texte' => "La personne qui le signe et l'entreprise qui l'envoie. Une offre, une facture ou une réponse à un bailleur rédigée avec un assistant engage l'entreprise comme un document écrit à la main. Désignez par service une personne qui relit, qui connaît la source de chaque fait avancé et qui peut dire d'où vient un chiffre. Si personne ne peut répondre à la question « d'où vient ce nombre ? », le document ne part pas.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos équipes nigériennes à l'IA avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), Richard déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP, dans " . count((array) fait('pays_travailles')) . " pays. Il a conçu <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href='https://audyxa.com'>Audyxa</a>. Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun.",
                "Richard a déjà travaillé avec des entreprises au Niger. Il connaît le contexte qui revient dans ses échanges : la facture certifiée SECeF, les paiements par monnaie mobile, la loi sur les données personnelles contrôlée par la HAPDP et une connexion qui ne se décrète pas. Il forme à distance, depuis Cotonou, sur la même heure qu'à Niamey.",
                "Sa façon de former tient en quelques engagements : un cadrage qui peut conclure qu'un atelier d'une demi-journée suffit, des exercices bâtis sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l'entreprise et aucun gain chiffré promis à l'avance. Quand le besoin va au-delà de l'usage quotidien, il peut aussi relier l'IA à vos logiciels, par une mission d'<a href='/services/integration-ia-entreprise'>intégration de l'IA en entreprise</a> ou par un <a href='/services/agents-ia-chatbot-whatsapp'>assistant WhatsApp</a>.",
                "Dans la région, ses réalisations visibles incluent la web TV OBA TV et le site de GC Pro Consulting, tous deux à Cotonou et menés en direct, ainsi que la boutique en ligne d'IK Fashion House à Cotonou, réalisée en sous-traitance pour Digital Développement. Elles se consultent sur la page des <a href='/realisations/'>réalisations</a>. Son parcours est détaillé sur la page <a href='/richard-salanon'>Richard SALANON</a> et les pays servis sur celle des <a href='/zones/'>zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de lancer une formation IA au Niger ?",
            'texte' => "Choisissez deux ou trois tâches réelles par groupe, préparez les documents et les comptes avant la séance, classez les données selon la loi n° 2022-59, prévoyez une coupure de courant ou de réseau, mesurez le temps de la tâche avant et un mois après, et demandez par écrit au FAFPA si un financement vous concerne.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe au Niger à l'IA ?",
            'texte'  => "Indiquez la ville, le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps et les outils déjà en place : vous recevez une réponse sous 24 heures, puis un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les équipes à l'IA au Niger ?", 'r' => "Un formateur d'entreprise qui travaille sur vos documents peut le faire à distance. Richard SALANON, consultant basé à Cotonou, anime en français, sur la même heure qu'à Niamey, des ateliers et des formations sur ChatGPT, Claude et Gemini. Le devis est établi en FCFA."],
        ['q' => "La formation peut-elle se faire entièrement à distance depuis Niamey ?", 'r' => "Oui, en visioconférence avec partage d'écran, documents envoyés à l'avance et enregistrement des séances. Le format est découpé en blocs courts pour résister aux coupures de réseau ou d'électricité. Chaque participant a besoin d'un ordinateur et d'un téléphone de secours."],
        ['q' => "Quelle loi s'applique aux données que l'on confie à un assistant d'IA au Niger ?", 'r' => "La loi n° 2022-59 du 16 décembre 2022 sur les données à caractère personnel, modifiée par la loi n° 2023-31 du 4 juillet 2023, contrôlée par la HAPDP. Les formalités applicables à votre traitement se confirment auprès de l'autorité avant tout envoi de dossiers nominatifs."],
        ['q' => "Peut-on utiliser DeepSeek avec des documents de l'entreprise ?", 'r' => "Mieux vaut le réserver aux contenus publics. Sa politique de confidentialité, mise à jour le 10 février 2026, indique que les données saisies sont traitées et stockées en Chine. Les documents internes se traitent dans un compte d'entreprise dont les conditions sont connues."],
        ['q' => "Faut-il un abonnement payant pour suivre la formation ?", 'r' => "Non. Les versions gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre la méthode. L'abonnement se décide ensuite, sur la base des tâches qui ont réellement fait gagner du temps. Un paiement en devises demande une carte internationale, à prévoir à l'avance."],
        ['q' => "Le FAFPA finance-t-il une formation à l'IA ?", 'r' => "Cela dépend de ses conditions, qu'il faut obtenir par écrit, programme et devis à l'appui. Le fonds est connu pour l'apprentissage et la formation de jeunes, comme dans les régions de Zinder et d'Agadez en 2018. Aucune prise en charge n'est garantie."],
        ['q' => "Que faire quand la connexion ou le courant coupent pendant la séance ?", 'r' => "Les séances durent au plus deux heures et demie, les documents sont téléchargés la veille et un enregistrement permet de rattraper un passage manqué. Les exercices de relecture se font hors ligne, et un téléphone en partage de connexion sert de secours."],
        ['q' => "En quelle langue se donne la formation ?", 'r' => "En français, langue de travail des entreprises nigériennes. Un texte produit en haoussa par un assistant est relu par un locuteur avant tout usage. Les supports peuvent aussi être fournis en anglais pour les équipes qui répondent à des appels d'offres internationaux."],
        ['q' => "Un assistant d'IA peut-il préparer une facture certifiée SECeF ?", 'r' => "Il peut rédiger un brouillon de devis ou un message d'accompagnement, mais la facture certifiée, avec son code SECeF/DGI et son code QR, passe par le système de la DGI. Les montants et la TVA se vérifient dans le tableur ou le logiciel de facturation."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Il dépend du nombre de participants, de la durée, de la distance ou d'un déplacement convenu, et de la préparation sur vos documents. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Richard est-il certifié par OpenAI, Anthropic ou Google ?", 'r' => "Non. Il utilise ces outils chaque jour et forme à leur usage, mais il n'est certifié par aucun éditeur et ne se présente comme partenaire d'aucun. L'attestation remise est une attestation nominative de fin de formation, pas un diplôme."],
    ],

    'sources' => [
        ['titre' => "Anthropic, tarifs de Claude (Free, Pro, Max, Team)", 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => "OpenAI, ChatGPT : tarifs des offres Free, Go, Plus, Pro et Business", 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => "Google, abonnements Gemini et Google AI (prix affichés pour le Bénin)", 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => "Microsoft, tarifs de Microsoft 365 Copilot", 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => "DeepSeek, politique de confidentialité (mise à jour le 10 février 2026)", 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-25'],
        ['titre' => "Google, aide NotebookLM : limites des offres", 'url' => 'https://support.google.com/notebooklm/answer/16213268', 'date' => '2026-10-25'],
        ['titre' => "ARCEP Niger, observatoire des communications électroniques, troisième trimestre 2025", 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf', 'date' => '2026-10-06'],
        ['titre' => "DataReportal, Digital 2026 : Niger", 'url' => 'https://datareportal.com/reports/digital-2026-niger', 'date' => '2026-10-06'],
        ['titre' => "Le360 Afrique, Niger-Banque mondiale : programme Haské pour l'électrification (14 septembre 2022)", 'url' => 'https://afrique.le360.ma/autres-pays/economie/2022/09/14/39299-niger-banque-mondiale-lancement-dun-programme-pour-atteindre-un-taux-delectrification-de-80/', 'date' => '2026-10-25'],
        ['titre' => "Agence Ecofin via OSIRIS, le plan Niger 2.0 et l'appel d'offres de l'ANSI (12 juillet 2023)", 'url' => 'https://www.osiris.sn/le-niger-recherche-des-partenaires-pour-fournir-de-l-internet-a-haut-debit-dans.html', 'date' => '2026-10-25'],
        ['titre' => "Loi n° 2023-31 du 4 juillet 2023 modifiant la loi n° 2022-59 sur la protection des données à caractère personnel", 'url' => 'https://www.dataguidance.com/sites/default/files/loi_ndeg_2023-31_modifiant_la_loi_ndeg_2022-59.pdf', 'date' => '2026-10-06'],
        ['titre' => "Journal officiel du Niger du 30 avril 2019 : loi n° 2019-03 portant sur les transactions électroniques", 'url' => 'https://www.africa-laws.org/Niger/Comercial%20law/Loi%20n%C2%B0%202019-03%20du%2030%20avril%202019,%20portant%20sur%20les%20transactions%20%C3%A9lectroniques%20au%20Niger.pdf', 'date' => '2026-10-06'],
        ['titre' => "EDICOM, la facturation électronique au Niger (SECeF)", 'url' => 'https://edicomgroup.com/fr/facture-electronique/niger', 'date' => '2026-10-06'],
        ['titre' => "OHADA, le Niger", 'url' => 'https://www.ohada.com/etats-membres/niger.html', 'date' => '2026-10-06'],
        ['titre' => "Fonds fiduciaire de l'UE pour l'Afrique, formation technique de 1 995 jeunes à Zinder et Agadez (26 juillet 2018)", 'url' => 'https://trust-fund-for-africa.europa.eu/news/formation-technique-de-1-995-jeunes-dans-les-regions-de-zinder-et-dagadez-au-niger-2018-07-26_et', 'date' => '2026-10-25'],
        ['titre' => "Wikipédia, les langues au Niger (Charte de la refondation, 2025)", 'url' => 'https://fr.wikipedia.org/wiki/Langues_au_Niger', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite', 'securite-donnees-dirigeants'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise', 'agents-ia-chatbot-whatsapp'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
