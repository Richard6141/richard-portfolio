<?php
// ============================================================
// data/metiers/banques-microfinance/togo.php · Formation IA des agents de
// banque et de microfinance au Togo (couple métier + pays, statut « peut former »).
// Sources lues le 27/10/2026 : Togonews via AllAfrica (10, 26 et 27 mars 2026 ;
// 23 mars 2026 ; 11 et 29 décembre 2025 ; 6 mars 2026), Togo First via FinDev,
// ARCEP Togo (observatoire T1 2026), CENTIF du Togo (accueil, déclarants, présentation),
// Osiris (PI-SPI), CIO Mag (IPDCP), Journal officiel du 29 octobre 2019,
// République du Togo (FNAFPP), Global Voices, IANA.
// Non lus et donc non cités : articles de la loi sur la microfinance et de la loi LBC/FT,
// procédure de déclaration de la CENTIF du Togo (page sans contenu), bancarisation nationale 2025.
// Aucun établissement en difficulté, aucune mesure nominative.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA des agents de banque et de microfinance au Togo : notes de crédit, relances d'échéance et réponses aux clients préparées avec un assistant, dans le respect du secret professionnel et des données personnelles",
    'title'   => "Formation IA pour banques et IMF au Togo | Richard SALANON",
    'meta'    => "Formation IA pour agents de banque et de microfinance au Togo : crédit, recouvrement, mobile money, PI-SPI, CENTIF et données. À distance, devis en FCFA.",
    'en_bref' => "Depuis Cotonou, Richard SALANON propose aux agents des banques et des institutions de microfinance togolaises une formation à distance à l'IA, centrée sur leurs gestes de tous les jours : présenter un prêt, relancer un retard, répondre à un client, suivre le portefeuille. Aucune donnée réelle d'un client n'entre dans les exercices, bâtis sur des cas inventés. C'est la conformité de l'établissement qui relit les cas et qui interprète les textes. Les séances suivent l'horaire de Lomé, se tiennent en français et donnent lieu à un devis en FCFA.",
    'publie'  => '2026-12-16',
    'maj'     => '2026-12-16',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Quel formateur choisir pour initier à l'IA les équipes d'une banque ou d'une IMF au Togo ?",
            'paragraphes' => [
                "Depuis Cotonou, Richard SALANON assure des formations à distance pour les équipes des banques et des IMF du Togo. Le travail porte sur les assistants d'IA appliqués au métier, à partir de cas inventés préparés avec la conformité, seule habilitée à interpréter les textes. Il ne se présente ni comme banquier ni comme conseiller en réglementation ; le devis est en FCFA.",
                "Un agent de crédit ou un chargé de clientèle n'a pas besoin qu'on lui présente toutes les fonctions d'un assistant. Il a besoin d'une méthode sur trois ou quatre tâches qu'il répète chaque semaine : la note qui accompagne une demande de prêt, le message qui rappelle une échéance, la réponse à un client qui conteste un frais, le tableau qui montre les retards par agence. Une démonstration d'outil séduit sur le moment. Une formation centrée sur le métier se juge plus tard, quand l'agent refait le geste sans aide et contrôle chaque chiffre avant l'envoi.",
                "Avant de signer, posez six questions à tout prestataire. La conformité relit-elle les cas avant la séance ? Travaille-t-on sur des cas inventés, ou réclame-t-on des pièces réelles ? Quelle position prend-il sur le secret professionnel et sur les informations des clients, avant même la première démonstration ? Quelle taille de groupe garantit un suivi individuel ? Par quelle épreuve finale le geste est-il vérifié ? Et à la sortie, l'établissement garde-t-il des règles d'usage rédigées avec lui, ou un simple jeu de diapositives ?",
                "Une confusion revient souvent. Les rencontres que la CENTIF du Togo organise avec les professionnels, comme la rencontre des responsables de la conformité et des risques tenue à Lomé les 8 et 9 juillet 2025 ou l'atelier sur les sanctions financières ciblées des 25 et 26 septembre 2025, portent sur la lutte contre le blanchiment et sur la conformité. Elles ne montrent pas comment un agent prépare une note ou une relance avec un assistant. Chacune a son rôle : la première éclaire la vigilance, la seconde outille le geste quotidien.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que montrent les chiffres récents sur la banque, la microfinance et le paiement mobile au Togo ?",
            'paragraphes' => [
                "La microfinance occupe une place centrale dans la vie financière togolaise. Selon un article de Togonews du 10 mars 2026, qui donne les chiffres arrêtés au 31 décembre 2025, les institutions de microfinance comptaient 4,6 millions de bénéficiaires regroupés en 495 579 groupements, pour un encours de dépôts de 447,5 milliards de FCFA et un encours de crédits de 352,1 milliards. Un autre article de Togonews, daté du 27 mars 2026, parle de près de 4,7 millions de clients et d'un encours de crédit de 352 milliards de FCFA, en hausse de 18,5 % entre 2022 et 2025. Les deux décomptes, bénéficiaires dans un cas et clients dans l'autre, ne se superposent pas : chacun se cite avec sa source.",
                "La qualité du portefeuille est le sujet du moment. Le même article du 27 mars 2026 chiffre le taux brut de dégradation du portefeuille des institutions de microfinance à 4,2 % en 2022, 7,8 % en 2024 et 6,7 % en 2025, contre une norme maximale de 3 % fixée par la BCEAO. Il rend compte d'une rencontre tenue à Lomé, organisée par la BCEAO avec la Direction de la Microfinance et l'Association professionnelle des systèmes financiers décentralisés du Togo, l'APSFD-Togo, qui a réuni 150 participants (dirigeants d'institutions, autorités de supervision, représentants des consommateurs et partenaires techniques), avec la création envisagée d'un comité de suivi au sein de l'association. Au quotidien, l'agent y consacre une bonne part de son temps : appels de relance, visites et tableaux de retards.",
                "Du côté des banques, le Conseil national du crédit, que le ministère de l'Économie et des Finances présente comme un observatoire des évolutions économiques du Togo réuni quatre fois par an, avec des représentants des banques, de la microfinance, de la BCEAO et des associations de consommateurs, a fait le point à deux reprises. Selon Togonews du 11 décembre 2025, les nouveaux crédits bancaires avaient augmenté de 22 % en un an pour atteindre 903 milliards de FCFA à fin septembre 2025, avec un taux de créances douteuses de 8,1 % dans les banques et de 9,3 % dans la microfinance. Selon Togonews du 23 mars 2026, les nouveaux crédits bancaires de l'année 2025 totalisaient 1 111 milliards de FCFA, en hausse de 15 %, le taux débiteur moyen s'établissait à 7,4 % contre 7,6 % en 2024, et le taux brut de créances douteuses des banques était de 13 % en 2025 contre 7 % en 2024. Les deux articles ne portent pas sur les mêmes périodes : un agent qui cite un taux précise la date et la source.",
                "Le numérique de paiement progresse vite. L'observatoire de l'ARCEP pour le premier trimestre 2026, régulateur togolais des communications électroniques, recense 5 201 299 comptes de mobile money, soit un taux de pénétration de 59,34 %, et 61 157 points de vente. Les transactions ont atteint 1 844 milliards de FCFA sur le trimestre, 52 % de plus qu'un an plus tôt. Mixx (YAS Togo) détient 59 % des comptes et Flooz (Moov Africa Togo) 41 %. Le détail du tableau de l'ARCEP montre l'écart entre les deux services : Mixx totalise 3 051 288 comptes et 1 199 milliards de FCFA de transactions au trimestre, Flooz 2 150 011 comptes et 645 milliards, en hausse de 61 % sur un an. Un agent de banque ou de microfinance répond donc chaque jour à des clients qui comparent un guichet et un portefeuille mobile, et dont les habitudes diffèrent selon l'opérateur.",
                "Les petits commerces sont au cœur de cette clientèle. Une étude de l'APSFD auprès de 1 680 commerçantes des grands marchés togolais, rapportée par Togonews le 26 mars 2026, indique que 89,29 % d'entre elles ont déjà sollicité un financement, que l'épargne (52,23 %) et le crédit (47,45 %) sont les services utilisés, et que l'argent emprunté sert surtout à acheter des marchandises (54,36 %) et à agrandir les stocks (36,24 %). Ces données portent sur ces commerçantes, pas sur l'ensemble des clients des institutions.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres datés garder sous la main avant de lancer une formation IA dans un établissement togolais ?",
            'items' => [
                ['valeur' => '352,1 milliards', 'libelle' => "Encours de crédits des institutions de microfinance togolaises au 31 décembre 2025 (4,6 millions de bénéficiaires, 495 579 groupements, encours de dépôts de 447,5 milliards de FCFA).", 'source' => "Togonews via AllAfrica, 10 mars 2026", 'url' => 'https://fr.allafrica.com/stories/202603110192.html'],
                ['valeur' => '6,7 %', 'libelle' => "Taux brut de dégradation du portefeuille des institutions de microfinance en 2025, contre 7,8 % en 2024 et une norme maximale de 3 % fixée par la BCEAO.", 'source' => "Togonews via AllAfrica, 27 mars 2026", 'url' => 'https://fr.allafrica.com/stories/202603270580.html'],
                ['valeur' => '1 111 milliards', 'libelle' => "Nouveaux crédits bancaires de l'année 2025 (+15 %), selon le Conseil national du crédit ; taux débiteur moyen de 7,4 %.", 'source' => "Togonews via AllAfrica, 23 mars 2026", 'url' => 'https://fr.allafrica.com/stories/202603240177.html'],
                ['valeur' => '13 %', 'libelle' => "Taux brut de créances douteuses des banques en 2025, contre 7 % en 2024, selon la même séance du Conseil national du crédit.", 'source' => "Togonews via AllAfrica, 23 mars 2026", 'url' => 'https://fr.allafrica.com/stories/202603240177.html'],
                ['valeur' => '5 201 299', 'libelle' => "Comptes de mobile money au premier trimestre 2026, dont 59 % chez Mixx (YAS Togo) et 41 % chez Flooz (Moov Africa Togo) ; 1 844 milliards de FCFA de transactions sur le trimestre.", 'source' => "ARCEP Togo, observatoire des marchés, T1 2026", 'url' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf'],
                ['valeur' => '2 novembre 2026', 'libelle' => "Échéance fixée par la BCEAO, d'après Osiris du 5 octobre 2026, pour que les paiements en monnaie électronique interopérables de l'UEMOA passent par la PI-SPI ; 175 structures y étaient raccordées au 30 septembre 2026.", 'source' => "Osiris, 5 octobre 2026", 'url' => 'https://www.osiris.sn/la-bceao-impose-la-plateforme-pi-spi-pour-les-paiements-electroniques-dans-l.html'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quel cadre juridique togolais borne l'usage de l'IA par un agent de banque ou de microfinance ?",
            'intro' => "Chaque texte est mentionné pour fixer ce que l'outil n'a pas le droit de faire, avec son intitulé et sa date tels que lus à la source ou dans la presse citée. L'établissement les fait interpréter par sa direction de la conformité, et par un juriste dans les cas douteux.",
            'items' => [
                ['titre' => "La CENTIF du Togo et ses déclarants", 'texte' => "La page de présentation de la CENTIF du Togo indique que la cellule nationale de traitement des informations financières a été créée par le décret n° 2008-037/PR du 28 mars 2008. Sa page des déclarants énumère les professionnels qui lui adressent des déclarations : le Trésor public et la BCEAO, les banques, les mutuelles et coopératives d'épargne et de crédit, les structures non mutualistes qui collectent l'épargne ou accordent des crédits, les assureurs, les experts-comptables, entre autres. Banques, mutuelles et structures non mutualistes figurent ainsi dans la même liste de déclarants. La page renvoie à des textes de 2007 et de 2009 ; un nouveau texte a été adopté depuis, comme le montre le point suivant, et l'établissement confirme auprès de sa conformité la version en vigueur."],
                ['titre' => "Une nouvelle loi sur la lutte contre le blanchiment", 'texte' => "Selon Togonews du 29 décembre 2025, l'Assemblée nationale a adopté une loi consacrée à la lutte contre le blanchiment, au financement du terrorisme et à la prolifération des armes de destruction massive, qui met l'accent sur une approche fondée sur les risques, étend les obligations de vigilance aux prestataires d'actifs virtuels et renforce l'identification des bénéficiaires effectifs. Un article du 10 mars 2026 la dit adoptée en dernière lecture le 27 février 2026. Pour l'outil, la conséquence est nette : l'analyse d'un cas suspect et la déclaration restent hors de portée d'un assistant d'IA, auquel on ne confie aucun élément du dossier."],
                ['titre' => "Une loi sur la microfinance adoptée en mars 2026", 'texte' => "D'après Togonews du 10 mars 2026, l'Assemblée nationale a adopté une loi portant réglementation de la microfinance, qui abroge le texte de 2011 et impose aux institutions des règles de gouvernance, des exigences de transparence comptable et des obligations de lutte contre le blanchiment et le financement du terrorisme. L'article ne détaille ni les articles ni les sanctions. Les exercices de la formation partent des procédures que l'institution applique, sans les réinterpréter."],
                ['titre' => "La loi n° 2019-014 et l'IPDCP", 'texte' => "Le Journal officiel du 29 octobre 2019 publie la loi n° 2019-014, relative à la protection des données à caractère personnel. Ce texte a institué l'Instance de protection des données à caractère personnel (IPDCP), dont CIO Mag situe le lancement des activités au vendredi 28 mars 2025 à Lomé ; sa mission est de contrôler la conformité des traitements et d'accompagner institutions et entreprises. Fichier de clients, photo de pièce d'identité, numéro de téléphone : tout cela devient donnée personnelle dès qu'on le saisit dans un assistant en ligne. Les formalités liées à un outil se demandent à l'IPDCP et à la conformité en amont, jamais après coup."],
                ['titre' => "La PI-SPI, entre les banques et les opérateurs mobiles", 'texte' => "Selon Togonews du 6 mars 2026, la BCEAO venait d'autoriser quatre institutions financières implantées au Togo, BIA, Cofina, Bank of Africa et Coris Bank, à utiliser la plateforme de paiement instantané PI-SPI, qui comptait déjà Ecobank et Orabank depuis la phase pilote. Osiris indique le 5 octobre 2026 qu'à compter du 2 novembre 2026, les paiements de monnaie électronique interopérables de la zone UEMOA devront obligatoirement emprunter cette plateforme, la politique de gratuité restant à détailler. Les échéances de la BCEAO ont pu bouger : seule la page de la banque centrale est à jour, et l'agent répond à partir de la fiche approuvée par sa direction."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi le recouvrement est-il le premier terrain de l'IA pour une institution togolaise ?",
            'paragraphes' => [
                "Le Togo compte 495 579 groupements de bénéficiaires dans la microfinance au 31 décembre 2025, selon Togonews du 10 mars 2026. Un groupement ne se suit pas comme un client isolé : plusieurs membres, plusieurs échéances, parfois une caution partagée, et un agent qui jongle entre des dizaines de dossiers. Les tableaux de suivi, les rappels et les comptes rendus de visite sont des tâches répétitives, donc de bons candidats à un assistant, à condition que l'agent garde la main sur chaque chiffre.",
                "Les autorités ont placé le recouvrement au centre du débat. Le ministre des Finances et du Budget a déclaré, selon Togonews du 27 mars 2026, que la dégradation de la qualité du portefeuille « met à mal la protection des épargnes », et la rencontre de Lomé a envisagé un comité de suivi au sein de l'APSFD-Togo, chargé de rendre compte périodiquement aux autorités. À la session du Conseil national du crédit du 23 mars 2026, son président a demandé, d'après le même média, une analyse du risque renforcée et des mécanismes de recouvrement plus actifs.",
                "Ce contexte oriente la formation. Elle ne cherche pas à automatiser une décision de crédit ou de recouvrement, qui reste humaine et motivée. Elle apprend à préparer plus vite ce qui entoure la décision : la liste des membres à contacter, le brouillon d'un message neutre, la synthèse d'un historique fictif de remboursements, le tableau des retards à présenter au comité. Chaque production est relue contre le système de gestion, et la trace du contact est conservée dans le dossier de l'institution.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels gestes d'un agent togolais déléguer à l'assistant, et avec quel outil ?",
            'legende' => "Huit gestes courants d'un agent togolais, répétés sur des cas inventés. On n'utilise que les outils autorisés par l'établissement, et les conditions des éditeurs se vérifient sur leur site.",
            'entetes' => ['Geste', 'Outil utilisé', 'Production attendue', "Contrôle par l'humain"],
            'lignes'  => [
                ["Note de présentation pour le prêt d'une commerçante de marché", "Claude ou ChatGPT, via l'abonnement professionnel de l'établissement", "Plan de note : activité, besoin de financement, remboursement possible, risques, garanties", "Les hypothèses sont rédigées par l'agent qui a vu l'activité sur place ; le calcul est refait dans un tableur"],
                ["Tableau de suivi des retards par agence et par ancienneté", "Excel ou Google Sheets, l'assistant aidant à écrire les formules", "Retards répartis par ancienneté, avec l'écart par rapport à la norme BCEAO de 3 %", "Deux totaux recalculés à la main ; les colonnes sont celles du système central"],
                ["Plan de recouvrement d'un groupement dont plusieurs membres sont en retard", "Assistant pour proposer une trame de visites et d'appels", "Calendrier de contacts par membre fictif, avec ce qui est dit et noté à chaque contact", "Le responsable valide la trame ; aucune pression ni menace ne figure dans les textes"],
                ["Message de rappel avant échéance, en français", "ChatGPT ou Gemini pour suggérer le libellé", "Texte sobre, sans somme due ni allusion au retard, approuvé une seule fois par la direction", "Le numéro est revérifié à chaque renouvellement de prêt ; le contact est consigné au dossier"],
                ["Réponse à un client sur un frais ou sur un transfert vers un portefeuille mobile", "Réponse type préparée avec l'assistant", "Trois phrases claires, puis renvoi vers un conseiller dès qu'une opération précise est concernée", "Seule la fiche approuvée par la direction fait référence ; rien sur un compte tant que le client n'est pas authentifié"],
                ["Note interne type pour une alerte de surveillance", "Assistant d'une offre professionnelle, appliqué à un cas inventé sans donnée identifiante", "Synthèse des opérations et points à vérifier, que l'analyste complète", "L'analyste décide seul de saisir ou non le responsable de la conformité ; rien ne quitte le système de l'établissement"],
                ["Fiche d'explication de la PI-SPI pour les agents de guichet", "Assistant chargé de reformuler un texte déjà approuvé", "Une page en mots simples sur ce que le client verra changer", "La conformité approuve la fiche avant diffusion ; date et conditions sont recoupées avec la BCEAO"],
                ["Synthèse d'une procédure interne pour un nouvel agent", "NotebookLM ou Claude, dans un compte professionnel", "Fiche de dix lignes, chaque point renvoyant à une page de la procédure", "Chaque renvoi est vérifié dans le document source"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles réalités de terrain une formation IA doit-elle intégrer pour des agents togolais ?",
            'paragraphes' => [
                "Les agents de crédit travaillent entre le guichet, l'écran de gestion et le terrain. Auprès des commerçantes des marchés, un agent note, photographie et appelle depuis son téléphone plutôt que d'ouvrir un ordinateur. Les exercices sont donc conçus pour que l'étape qui exige un tableur ou un document se fasse au bureau, et que l'étape de terrain se prépare sur une fiche courte, lisible sur un petit écran.",
                "Le téléphone est aussi le canal du client. Avec 59,34 % de pénétration du mobile money au premier trimestre 2026 selon l'ARCEP, beaucoup de clients paient, épargnent et posent leurs questions depuis un portefeuille mobile. La formation travaille donc des réponses courtes et validées à l'avance, plutôt que des improvisations avec un assistant devant le client. Les noms et les règles des opérateurs se reprennent dans la documentation officielle de chacun, jamais de mémoire.",
                "La langue compte autant que l'outil. Le français est langue officielle du Togo, l'éwé et le kabyè sont ses deux langues nationales, et le mina serait la langue la plus parlée, selon Global Voices, qui s'appuie sur la plateforme Minalingo. Les séances et les supports sont en français. Pour un message dans une langue nationale, le résultat est relu par un locuteur de l'établissement avant tout envoi, car un assistant peut produire une phrase fluide mais fausse dans une langue moins bien représentée.",
                "Pour la connexion, les documents d'exercice sont envoyés à l'avance et téléchargés sur chaque poste. Une connexion stable reste nécessaire pour chaque participant, car les assistants travaillent en ligne ; une solution de repli est prévue en cas de coupure. Lomé suit l'heure GMT toute l'année, selon la base de fuseaux horaires de l'IANA, et Cotonou l'heure GMT+1 : une séance à 9 h à Lomé se tient à 10 h à Cotonou.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour une banque, une mutuelle ou une IMF au Togo ?",
            'legende' => "Pour le Togo, tout se passe en visioconférence. Les durées et les tailles de groupe reprennent la fiche générale de la formation IA en entreprise.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ["Atelier découverte pour la direction et la conformité", "Une demi-journée", "12 personnes au plus", "Avant tout projet d'outil, pour décider ensemble de ce qui est permis et de ce qui est interdit aux agents"],
                ["Formation complète par poste", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Une équipe d'agents de crédit, de chargés de clientèle ou d'analystes qui utilise déjà des assistants sans méthode commune"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Des agences dispersées entre Lomé et l'intérieur du pays, dont les agents ne peuvent pas quitter leur guichet plusieurs jours de suite"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Ancrer les gestes, relire les réponses types, étendre à d'autres tâches ce qui a servi"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemble une séance : quels scénarios pour un agent de banque ou de microfinance togolais ?",
            'intro' => "Les cinq situations ci-dessous sont inventées de toutes pièces. Pour chacune, on lit ce qui est demandé au participant, puis ce qu'il doit vérifier avant de reprendre le texte produit.",
            'items' => [
                ['titre' => "Scénario 1 : le prêt d'une vendeuse de tissu d'un grand marché", 'texte' => "Situation : une agente de crédit prépare le dossier fictif d'une commerçante qui demande un prêt pour renouveler son stock, comme le font beaucoup de commerçantes selon l'étude de l'APSFD. Consigne : demander à l'assistant la trame de la note et une liste de questions à poser à la cliente, puis rédiger soi-même les hypothèses et la recommandation. Le participant contrôle que la capacité de remboursement est calculée dans le tableur, que chaque chiffre vient du dossier, et que la décision reste motivée par des personnes."],
                ['titre' => "Scénario 2 : le groupement dont trois membres sont en retard", 'texte' => "Situation : un groupement fictif de dix membres a trois échéances impayées, et le responsable d'agence veut un plan de contacts. Consigne : faire proposer par l'assistant un calendrier d'appels et de visites, avec ce que l'agent dit et note à chaque fois, sans aucun ton menaçant. Le participant contrôle que le plan respecte la procédure de recouvrement de l'institution, qu'aucun montant ni nom réel n'est entré dans l'outil, et que le comité de suivi, s'il existe, reçoit des chiffres vérifiés."],
                ['titre' => "Scénario 3 : un client écrit au sujet d'un transfert vers son portefeuille mobile", 'texte' => "Situation : un client fictif demande pourquoi un virement vers son compte de mobile money n'est pas arrivé comme il l'attendait, au moment où les règles de la PI-SPI évoluent. Consigne : préparer avec l'assistant une réponse de trois phrases à partir de la seule fiche validée par la direction, et un message de transfert vers un conseiller. Le participant contrôle que le texte reprend la fiche sans y ajouter de montant, qu'il ne contient aucune information de compte, et que toute date citée est celle de la source de la BCEAO."],
                ['titre' => "Scénario 4 : l'alerte de surveillance d'un analyste", 'texte' => "Situation : un analyste fictif reçoit une alerte sur un compte dont les dépôts changent de rythme. Consigne : faire résumer la suite d'opérations par l'assistant, sans nom ni numéro, et préparer la liste des points à vérifier. Le participant contrôle qu'aucune donnée identifiante n'est sortie du système, que le résumé n'est pas une conclusion, et que la décision de transmettre appartient au responsable de la conformité, la déclaration éventuelle relevant de la CENTIF."],
                ['titre' => "Scénario 5 : le tableau des retards pour le comité", 'texte' => "Situation : un directeur d'agence fictif reçoit un export du système central et doit présenter ses retards par ancienneté. Consigne : construire le tableau avec l'aide de l'assistant pour les formules, puis le confronter au plafond de 3 % fixé par la BCEAO. Le participant contrôle deux totaux à la main, la cohérence des périodes, et que la norme citée est celle de la source."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation IA d'une banque ou d'une IMF au Togo ?",
            'paragraphes' => [
                "Le Fonds national d'apprentissage, de formation et de perfectionnement professionnels, le FNAFPP, est la piste à examiner en premier. Selon la République du Togo, qui rendait compte en juin 2010 du vote de la loi portant sa création, il finance en priorité des projets collectifs de formation et la restructuration de centres d'enseignement technique et d'apprentissage, et son soutien financier vise des institutions, des organismes et des entreprises qui conçoivent et conduisent des programmes d'apprentissage. L'article ne publie pas de conditions d'accès : elles se demandent au fonds, par écrit, avant toute inscription, et aucune prise en charge n'est jamais acquise d'avance.",
                "Pour une demande de financement, Richard fournit le programme, le devis et, à la fin, une attestation nominative ; il ne détient ni agrément de fonds ni certification d'éditeur. Quand une aide pèse dans la décision, le plus sûr est d'attendre la réponse écrite du fonds avant de caler un calendrier. À défaut, le coût entre dans l'enveloppe de formation de l'exercice, que l'on peut répartir entre un atelier court et un accompagnement mensuel. Les licences des assistants sont souscrites par l'établissement lui-même, hors devis.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour les agents d'une banque ou d'une IMF au Togo ?",
            'intro' => "Richard ne publie aucun tarif pour cette formation. Le chiffrage se fait sur devis, en FCFA, une fois le cadrage terminé, poste par poste. Parmi les modes de règlement qu'il accepte (Mobile Money MTN ou Moov, carte bancaire, PayPal, virement, espèces), le devis retient ceux qui conviennent à un établissement togolais. Les offres des éditeurs d'outils changent souvent et leur site officiel fait foi.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée avec la direction et la conformité', 'Inventaire des usages réels des agents', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète par poste', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées sur dossiers fictifs construits avec vos procédures', 'Épreuve finale sur une tâche réelle, chronomètre en main', 'Attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Relecture des réponses types', 'Nouvelles tâches à travailler']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par poste ou par agence.",
                "Le nombre de séances à distance et leur durée.",
                "La préparation des dossiers fictifs avec la conformité, et leur validation avant la session.",
                "La langue des supports, en français ou avec des passages en langue nationale relus par un locuteur.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs font les équipes de banque et de microfinance togolaises qui démarrent l'IA ?",
            'intro' => "Chacune de ces erreurs se règle avant la première séance, au moment où l'on fixe les règles d'usage.",
            'items' => [
                ['titre' => "Coller un dossier de client dans un compte personnel", 'texte' => "Par habitude de la messagerie, un agent envoie une photo de pièce ou un relevé au premier outil ouvert. La loi n° 2019-014 protège ces données, l'IPDCP est l'interlocuteur pour les formalités, et la décision d'utiliser un outil appartient à l'établissement, jamais à l'agence."],
                ['titre' => "Confondre taux de banque et taux de microfinance", 'texte' => "Les articles cités donnent des taux de créances douteuses pour les banques et un taux de dégradation pour les institutions de microfinance, à des dates différentes. Un tableau qui mélange les deux, ou qui oublie la date, donne une comparaison fausse."],
                ['titre' => "Répondre sur la PI-SPI de mémoire", 'texte' => "Les échéances et les conditions évoluent, et les détails de la gratuité étaient annoncés après l'article d'Osiris du 5 octobre 2026. Une réponse écrite sans fiche validée finit par contredire celle d'une autre agence."],
                ['titre' => "Confier à l'outil le texte d'une déclaration", 'texte' => "La déclaration de soupçon relève de la CENTIF, qui met un modèle de déclaration à disposition sur son site. Aucun détail du cas ne s'écrit dans un assistant, qu'il soit gratuit ou payant."],
                ['titre' => "Écrire un message de relance qui menace", 'texte' => "Un assistant écrit volontiers sur un ton ferme. Le modèle de relance est neutre, validé une fois par la direction, et le contact est noté au dossier avec sa date et son canal."],
                ['titre' => "Ne pas relire une langue nationale", 'texte' => "Un message fluide en éwé, en kabyè ou en mina peut être faux ou maladroit. Chaque texte est relu par un locuteur avant de partir, et le modèle validé est ensuite réutilisé tel quel."],
                ['titre' => "Former seulement les agents", 'texte' => "La direction, la conformité et les agents de proximité manipulent les mêmes téléphones et les mêmes groupes de discussion. Ils sont associés à l'atelier découverte, sinon les règles restent des consignes sans suite."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former les agents de votre banque ou de votre IMF avec Richard SALANON au Togo ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Depuis Cotonou, Richard peut former à distance les agents des banques et des institutions de microfinance du Togo. Il a déjà travaillé avec des entreprises au Togo, tout comme dans quatorze autres pays dont le Bénin et le Sénégal. Le SYSCOHADA dans les ERP figure parmi ses compétences, et le Mobile Money (MTN, Moov) parmi ses modes de règlement. Ses réalisations sont visibles sur la page des <a href=\"/realisations/\">réalisations</a>.",
                "Formé à " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", il compte " . $ans . " ans de métier dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, tous publics confondus. On lui doit <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Pendant les séances, il montre aux agents, sur leur écran, où vont les données qu'ils confient à un outil.",
                "Richard n'est pas banquier, ne tient pas la conformité d'un établissement et ne détient aucune certification d'éditeur d'IA. Son terrain est l'usage des outils ; l'octroi du crédit, le recouvrement, la vigilance, la déclaration de soupçon et la lecture des textes demeurent du ressort des professionnels et des autorités. Concrètement, il s'engage sur une réponse sous 24 heures, un ou deux entretiens de cadrage, un questionnaire envoyé avant la session, des documents à télécharger d'avance, des supports remis à la fin, une épreuve finale chronomètre en main et une attestation nominative. Pour aller plus loin, voir les formations <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>, <a href=\"/formations/cybersecurite-employes\">cybersécurité pour les employés</a>, <a href=\"/formations/chatbot-whatsapp\">chatbot WhatsApp</a> et <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, ou le parcours général <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>.",
                "Richard a déjà formé des équipes de banques et d'institutions de microfinance : ce public ne lui est pas nouveau, et chaque séance part des dossiers et des procédures de l'établissement.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former les agents de votre banque ou de votre IMF togolaise à l'IA ?",
            'texte'  => "Décrivez votre structure (banque, mutuelle ou IMF non mutualiste), le nombre d'agents et d'agences, les postes visés, les tâches les plus longues et votre ville. Une réponse vous parvient sous 24 heures, suivie d'une proposition et d'un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les agents d'une banque ou d'une IMF à l'IA au Togo ?", 'r' => "Richard SALANON, à Cotonou, peut animer à distance une formation pour les agents des banques et des IMF togolaises : ChatGPT, Claude, Gemini ou Copilot appliqués à leurs propres tâches, sur des cas inventés et dans les limites posées par la conformité. Aucun éditeur ne l'a certifié."],
        ['q' => "Un agent peut-il confier à un assistant d'IA le contenu d'une déclaration de soupçon à la CENTIF du Togo ?", 'r' => "Non. La CENTIF du Togo est la cellule nationale de traitement des informations financières, créée par le décret n° 2008-037/PR du 28 mars 2008, et les banques comme les mutuelles et les structures non mutualistes figurent parmi ses déclarants. Aucun détail d'un cas ne se confie à un assistant."],
        ['q' => "La loi n° 2019-014 s'applique-t-elle à un fichier de clients saisi dans un outil d'IA ?", 'r' => "La loi n° 2019-014 du 29 octobre 2019 porte sur la protection des données à caractère personnel, et un fichier de clients en contient. Les formalités d'un outil se confirment auprès de l'IPDCP, active depuis le 28 mars 2025, et de la conformité de l'établissement avant tout usage."],
        ['q' => "Quel est l'état de la microfinance togolaise selon les dernières données publiées ?", 'r' => "Selon Togonews du 10 mars 2026, les institutions comptaient 4,6 millions de bénéficiaires et un encours de crédits de 352,1 milliards de FCFA au 31 décembre 2025. Le taux brut de dégradation du portefeuille était de 6,7 % en 2025, contre une norme de 3 % de la BCEAO, selon Togonews du 27 mars 2026."],
        ['q' => "Que prévoit la loi sur la microfinance adoptée en 2026 au Togo ?", 'r' => "Selon Togonews du 10 mars 2026, l'Assemblée nationale a adopté une loi portant réglementation de la microfinance, qui abroge le texte de 2011 et impose des règles de gouvernance, de transparence comptable et de lutte contre le blanchiment. Le détail des articles n'est pas publié dans cet article : la conformité de l'établissement lit le texte."],
        ['q' => "Que doit savoir un agent sur la PI-SPI ?", 'r' => "D'après Osiris du 5 octobre 2026, la BCEAO exige, à compter du 2 novembre 2026, que les paiements en monnaie électronique interopérables de l'UEMOA passent par la PI-SPI. L'agent répond à partir d'une fiche validée par sa direction, qui renvoie à la source de la BCEAO."],
        ['q' => "Le FNAFPP peut-il financer une formation IA pour le personnel d'une banque ou d'une IMF ?", 'r' => "Il finance en priorité des projets collectifs de formation, selon la République du Togo, et aucune condition d'accès n'y est publiée. Aucune prise en charge n'est garantie : interrogez le fonds par écrit, programme et devis à l'appui, avant de signer."],
        ['q' => "Quelle part des clients utilise le mobile money au Togo ?", 'r' => "L'ARCEP compte 5 201 299 comptes de mobile money au premier trimestre 2026, soit 59,34 % de pénétration, dont 59 % chez Mixx (YAS Togo) et 41 % chez Flooz (Moov Africa Togo). Ce taux compte des comptes, pas des personnes."],
        ['q' => "La formation peut-elle se donner à Lomé, Kara ou Sokodé ?", 'r' => "Oui : la séance se tient en visioconférence là où la connexion est stable, que ce soit à Lomé, Kara ou Sokodé. Les pièces d'exercice arrivent avant la session, et un dispositif de repli existe si la ligne se coupe."],
        ['q' => "Quel est le décalage horaire entre Lomé et Cotonou ?", 'r' => "Cotonou a une heure d'avance sur Lomé, sans changement saisonnier : Lomé est à GMT, Cotonou à GMT+1. Quand il est 9 h à Lomé, il est 10 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Le devis est libellé en FCFA une fois le cadrage fait. Il dépend de l'effectif, du nombre de séances, du temps passé à préparer les cas inventés et de l'accompagnement choisi ; les licences des outils sont payées par l'établissement."],
        ['q' => "Reçoit-on une attestation en fin de formation ?", 'r' => "Chaque participant reçoit une attestation à son nom, accompagnée du programme et des supports. Elle n'a valeur ni de diplôme ni de certificat d'éditeur, et ne tient pas lieu de la formation sur le blanchiment que l'établissement dispense de son côté."],
    ],

    'sources' => [
        ['titre' => "AllAfrica (Togonews), microfinance et faux monnayage : un cadre juridique moderne (10 mars 2026)", 'url' => 'https://fr.allafrica.com/stories/202603110192.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica (Togonews), le talon d'Achille de la microfinance togolaise (27 mars 2026)", 'url' => 'https://fr.allafrica.com/stories/202603270580.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica (Togonews), le crédit finance le présent, pas l'avenir : étude de l'APSFD (26 mars 2026)", 'url' => 'https://fr.allafrica.com/stories/202603270200.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica (Togonews), financer plus, risquer moins, digitaliser vite : Conseil national du crédit (23 mars 2026)", 'url' => 'https://fr.allafrica.com/stories/202603240177.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica (Togonews), le Conseil national du crédit fixe les priorités pour 2026 (11 décembre 2025)", 'url' => 'https://fr.allafrica.com/stories/202512120108.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica (Togonews), le pays consolide son dispositif de lutte contre le blanchiment de capitaux (29 décembre 2025)", 'url' => 'https://fr.allafrica.com/stories/202512300089.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica (Togonews), six institutions financières togolaises intègrent la PI-SPI (6 mars 2026)", 'url' => 'https://fr.allafrica.com/stories/202603060731.html', 'date' => '2026-10-27'],
        ['titre' => "Osiris, la BCEAO impose la plateforme PI-SPI pour les paiements électroniques (5 octobre 2026)", 'url' => 'https://www.osiris.sn/la-bceao-impose-la-plateforme-pi-spi-pour-les-paiements-electroniques-dans-l.html', 'date' => '2026-10-27'],
        ['titre' => "ARCEP Togo, observatoire des marchés des communications électroniques, premier trimestre 2026", 'url' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-27'],
        ['titre' => "Ministère de l'Économie et des Finances du Togo, dernier Conseil national du crédit de 2023 (présentation de l'instance)", 'url' => 'https://finances.gouv.tg/dernier-conseil-national-du-credit-cnc-pour-le-compte-de-lannee-2023/', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Togo, site officiel : actualités et rencontres avec les professionnels", 'url' => 'https://centif.tg', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Togo, page de présentation : décret de création de 2008", 'url' => 'https://centif.tg/?p=qui_sommes_nous', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Togo, page des déclarants", 'url' => 'https://centif.tg/?p=ass', 'date' => '2026-10-27'],
        ['titre' => "Journal officiel de la République togolaise du 29 octobre 2019 (loi n° 2019-014)", 'url' => 'https://www.afapdp.org/wp-content/uploads/2020/02/TOGO-JOS_29_10_2019-64E-ANNEE-N°26-TER.pdf', 'date' => '2026-10-27'],
        ['titre' => "CIO Mag, au Togo, l'IPDCP entame sa mission (29 mars 2025)", 'url' => 'https://cio-mag.com/etiquette/protection-des-donnees-personnelles', 'date' => '2026-10-27'],
        ['titre' => "République du Togo, miser sur la formation professionnelle (FNAFPP, 30 juin 2010)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/politique/miser-sur-la-formation-professionnelle', 'date' => '2026-10-27'],
        ['titre' => "Global Voices, les langues du Togo (22 février 2024)", 'url' => 'https://globalvoices.org/2024/02/22/which-local-language-is-most-widely-spoken-in-togo/', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Lome, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
