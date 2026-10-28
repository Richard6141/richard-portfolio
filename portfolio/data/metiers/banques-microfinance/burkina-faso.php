<?php
// ============================================================
// data/metiers/banques-microfinance/burkina-faso.php · Formation IA des agents de
// banque et de microfinance au Burkina Faso (couple métier + pays, statut « peut former »).
// Sources lues le 27/10/2026 : BCEAO (tableau des indicateurs des SFD au 30/09/2025, liste des
// établissements de monnaie électronique au 28/02/2026), Burkina24 (14 octobre 2024, 1er octobre 2025,
// 25 janvier 2024, 1er septembre 2026), L'Economiste du Faso (3 mars 2025), AllAfrica d'après Sidwaya
// (15 avril 2026, 22 juillet 2026), Sidwaya (6 novembre 2019), loi n° 001-2021/AN (texte lu, articles 31 et 42),
// Banque mondiale (API), IANA.
// Non lus et donc non cités : texte intégral de la loi sur la microfinance de 2025, rapport annuel de la
// Commission bancaire, circulaires de la BCEAO, rapports de la cellule nationale de renseignement financier.
// Écarts signalés : le décompte de 124 SFD (fin 2023) et celui de 73 SFD (BCEAO, fin septembre 2025) viennent de
// publications différentes et ne se comparent pas ; l'article de Burkina24 du 1er septembre 2026 donne un
// pourcentage qui ne recoupe pas le montant, seuls les montants sont repris.
// Aucun établissement en difficulté, aucune mesure nominative, aucun propos sur la sécurité ou la politique.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour le personnel des banques et des IMF du Burkina Faso : dossiers de crédit, retards de remboursement et réponses aux membres préparés avec un assistant, sans jamais lui confier une donnée de client",
    'title'   => "Formation IA banques et IMF Burkina Faso | Richard SALANON",
    'meta'    => "Formation IA pour agents de banque et de microfinance au Burkina Faso : crédit, retards, mobile money, blanchiment, données. À distance, devis en FCFA.",
    'en_bref' => "Qui peut former à l'IA le personnel des banques et des IMF burkinabè ? Richard SALANON, consultant à Cotonou, peut l'animer à distance, en français, autour des tâches du métier et de dossiers fictifs que la conformité peut relire d'avance. Ouagadougou et Bobo-Dioulasso sont une heure en arrière de Cotonou, et le devis est libellé en FCFA. Les exercices n'emploient aucune donnée réelle de client, et la conformité garde la main sur les règles d'usage.",
    'publie'  => '2026-12-24',
    'maj'     => '2026-12-24',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui accompagne les équipes des banques et des IMF du Burkina Faso vers l'IA, et comment départager deux propositions ?",
            'paragraphes' => [
                "Richard SALANON vit à Cotonou. Il peut animer en visioconférence une session destinée au personnel des banques et des institutions de microfinance du Burkina Faso, que l'on abrège en IMF. Le point de départ, ce sont des gestes que ces agents répètent chaque semaine, refaits avec ChatGPT, Claude ou Gemini sur des cas fictifs. Il n'est ni banquier ni juriste, aucun éditeur d'IA ne l'a certifié, et son devis est libellé en FCFA.",
                "Un critère simple départage les offres : qui, dans la salle, sait refaire le travail le lendemain sans le formateur ? Un exposé sur les possibilités de l'IA laisse l'agent devant une fenêtre de discussion vide. Une formation de métier lui fait rédiger une note, trier un tableau de retards ou répondre à un client, puis lui demande de recommencer seul, chronomètre en main, en contrôlant chaque chiffre contre le système de l'établissement.",
                "Quatre questions suffisent à trier. Les exercices s'appuient-ils sur des dossiers fictifs, ou le candidat réclame-t-il des pièces réelles ? La conformité voit-elle les cas avant la séance ? Que répond-il quand on lui demande où vont les données saisies dans un assistant en ligne, au regard de la loi burkinabè sur les données personnelles ? Et que garde l'établissement au dernier jour : des diapositives, ou des règles d'usage rédigées avec lui, poste par poste ?",
                "Ne confondez pas non plus cette session avec une sensibilisation à la lutte contre le blanchiment. En octobre 2024, d'après Burkina24, le projet PIAF-PME a ouvert un atelier consacré à ce sujet pour quelque 300 agents de 30 SFD, répartis sur cinq villes. Un tel atelier rappelle les vérifications dues ; il n'apprend pas à préparer un compte rendu avec un assistant. Les deux démarches se complètent.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que montrent les chiffres de fin 2025 sur les banques burkinabè : un bilan en hausse, des crédits en baisse ?",
            'paragraphes' => [
                "Burkina24 publie le 1er septembre 2026 un article qui reprend le rapport annuel 2025 de la Commission bancaire de l'UMOA. À fin décembre 2025, le total de bilan des établissements de crédit du pays atteignait 10 251,4 milliards de FCFA, en hausse de 7,5 %. Les crédits à la clientèle, eux, s'établissaient à 4 476,2 milliards, soit 4 % de moins, et les créances en souffrance à 188,4 milliards, soit 8,5 % de plus.",
                "Ces trois chiffres décrivent un même climat pour l'agent. Le bilan grossit, mais l'encours de prêts recule : chaque dossier compte davantage, et les retards demandent un suivi plus serré. Un chargé de clientèle qui instruit une demande consacre l'essentiel de son temps à rassembler des pièces, à rédiger une note et à rappeler le client. Ce sont précisément les tâches où un assistant fait gagner du temps, à condition qu'une personne vérifie ce qui sort.",
                "Le même article porte sur l'origine du capital. Il indique que les investisseurs privés nationaux détenaient 176,83 milliards de FCFA du capital des établissements de crédit fin 2025, l'État 77,55 milliards et les investisseurs non nationaux 121,86 milliards, pour un capital total de 376,25 milliards. Ces montants ne servent pas à juger un établissement. Ils rappellent seulement que les directions auxquelles l'agent rend compte peuvent relever de structures très différentes, avec des règles d'outils elles aussi différentes.",
                "Reste le mobile money, déjà présent dans la vie du client. Selon un article de Sidwaya relayé par AllAfrica le 22 juillet 2026, le taux d'inclusion financière du Burkina Faso a fait un bond de 41 % à 81,8 %, et la directrice de l'inclusion financière et de la microfinance de la BCEAO attribue cet essor à l'usage du mobile money. Un client qui entre en agence connaît donc déjà son portefeuille mobile, et il pose des questions sur les différences entre les deux.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est la microfinance burkinabè, et que change la loi de février 2025 pour les agents ?",
            'paragraphes' => [
                "Le tableau des indicateurs des SFD de l'UMOA que la BCEAO a émis à Dakar le 22 janvier 2026, arrêté au 30 septembre 2025, donne pour le Burkina Faso 73 institutions au total, dont 36 forment l'échantillon suivi, avec 776 points de service et 3 120 742 membres ou clients. Sur cet échantillon, les dépôts atteignent 535 973,9 millions de FCFA, l'encours de crédits 428 265,5 millions et les créances en souffrance 46 294,5 millions, soit un taux de dégradation du portefeuille de 10,8 %.",
                "Une précision évite une confusion : ces chiffres portent sur l'échantillon, et non sur chaque institution du pays. Une autre publication donne d'autres ordres de grandeur pour une date plus ancienne. L'Economiste du Faso écrit le 3 mars 2025 que 124 systèmes financiers décentralisés comptaient 1 791 982 clients au 31 décembre 2023, avec 346,56 milliards de FCFA de crédits en cours. Les périmètres diffèrent d'une publication à l'autre : on ne soustrait pas ces chiffres l'un de l'autre.",
                "Le cadre juridique évolue. Une loi qui réglemente la microfinance au Burkina Faso porte la date du 13 février 2025, d'après un article d'AllAfrica du 15 avril 2026 repris de Sidwaya. Son texte n'a pas été lu pour cette page : la conformité de l'institution le lit, avec un juriste en cas de doute, et c'est à elle de dire ce qui change pour les modèles de documents.",
                "Sur le terrain, la bascule se voit dans les agences. Le même article raconte qu'une caisse populaire de Kaya est devenue coopérative de microfinance lors d'assemblées tenues le 11 avril 2026. Ses membres deviennent des « coopérateurs », la part sociale passe de 2 000 à 5 000 FCFA et le quorum de 200 à 300 coopérateurs. Les modèles de courrier, les fiches d'adhésion et les réponses types changent donc de mots, et l'assistant ne les connaît pas : l'agent les lui fournit, puis relit.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés du Burkina Faso garder sous la main avant d'ouvrir une première séance ?",
            'items' => [
                ['valeur' => '10 251,4 milliards', 'libelle' => "Total de bilan des établissements de crédit du Burkina Faso fin 2025 (+7,5 %), pour 4 476,2 milliards de FCFA de crédits à la clientèle (-4 %).", 'source' => "Burkina24 d'après la Commission bancaire de l'UMOA, 1er septembre 2026", 'url' => 'https://burkina24.com/2026/09/01/secteur-bancaire-le-burkina-faso-avance-vers-une-plus-grande-souverainete-financiere/'],
                ['valeur' => '188,4 milliards', 'libelle' => "Créances en souffrance des établissements de crédit fin 2025, en hausse de 8,5 %.", 'source' => "Burkina24 d'après la Commission bancaire de l'UMOA, 1er septembre 2026", 'url' => 'https://burkina24.com/2026/09/01/secteur-bancaire-le-burkina-faso-avance-vers-une-plus-grande-souverainete-financiere/'],
                ['valeur' => '73', 'libelle' => "SFD recensés au Burkina Faso au 30 septembre 2025, dont 36 dans l'échantillon suivi (776 points de service, 3 120 742 membres ou clients).", 'source' => "BCEAO, indicateurs des SFD de l'UMOA, 22 janvier 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf'],
                ['valeur' => '10,8 %', 'libelle' => "Taux de dégradation du portefeuille de l'échantillon des SFD burkinabè au 30 septembre 2025 (46 294,5 millions de FCFA de créances en souffrance pour 428 265,5 millions d'encours).", 'source' => "BCEAO, indicateurs des SFD de l'UMOA, 22 janvier 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf'],
                ['valeur' => '81,8 %', 'libelle' => "Taux d'inclusion financière du Burkina Faso en 2025, contre 41 % en 2015, attribué par la BCEAO à l'essor du mobile money.", 'source' => "Sidwaya via AllAfrica, 22 juillet 2026", 'url' => 'https://fr.allafrica.com/stories/202607220564.html'],
                ['valeur' => '11', 'libelle' => "Entrées du Burkina Faso dans la liste BCEAO des services de monnaie électronique au 28 février 2026 : un établissement de monnaie électronique, le Trésor public et neuf partenariats entre banques et opérateurs.", 'source' => "BCEAO, établissements de monnaie électronique", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique'],
                ['valeur' => '28,3 %', 'libelle' => "Habitants qui utilisent internet au Burkina Faso en 2024, contre 25,4 % en 2023.", 'source' => "Banque mondiale, indicateur IT.NET.USER.ZS", 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=BF'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels textes encadrent ce qu'un assistant d'IA peut toucher dans une banque ou une IMF du pays ?",
            'intro' => "Ne figurent ici que des textes dont l'intitulé et la date ont été lus, avec deux articles de la loi sur les données personnelles reproduits d'après le texte officiel. Aucun n'est interprété : la conformité lit, et un juriste tranche si un doute subsiste.",
            'items' => [
                ['titre' => "La loi sur les données personnelles", 'texte' => "La loi n° 001-2021/AN, adoptée par l'Assemblée nationale le 30 mars 2021, porte sur la protection des personnes à l'égard du traitement des données à caractère personnel. Son article 31 range parmi les traitements soumis à autorisation de l'autorité de contrôle les aides à la décision qui définissent un profil ou reposent sur des techniques d'intelligence artificielle à des fins prédictives, l'interconnexion de fichiers et les transferts de données vers un pays étranger. Un outil de notation de clients ou un assistant hébergé à l'étranger mérite donc une question à la conformité avant tout essai."],
                ['titre' => "Le transfert hors du pays", 'texte' => "L'article 42 de la même loi pose qu'un transfert vers un pays étranger suppose un niveau de protection adéquat, l'autorisation préalable de l'autorité de contrôle, une clause de confidentialité, une clause de réversibilité et des mesures de sécurité comprenant le chiffrement. Pour un agent, la conséquence pratique est simple : coller un relevé ou une pièce d'identité dans un assistant en ligne n'est pas un geste anodin, et c'est la direction qui décide quel outil est admis."],
                ['titre' => "Le nouveau cadre de la microfinance", 'texte' => "Une loi qui réglemente la microfinance porte la date du 13 février 2025, d'après AllAfrica. Elle a conduit des caisses à se transformer en coopératives de microfinance, avec de nouveaux statuts et de nouveaux montants. La formation ne commente pas ce texte. Elle apprend à ne pas laisser un assistant rédiger de mémoire un courrier sur les statuts, la part sociale ou l'adhésion."],
                ['titre' => "La lutte contre le blanchiment", 'texte' => "Les obligations de vigilance et de déclaration relèvent de textes de l'UMOA dont les articles n'ont pas été lus pour cette page. Le fait établi est l'existence d'actions de sensibilisation : l'atelier de PIAF-PME d'octobre 2024, rapporté par Burkina24, visait 300 agents de 30 SFD. Aucun élément d'un dossier suspect ne se confie à un assistant, et la décision de déclarer revient au responsable de la conformité."],
                ['titre' => "Le paiement instantané", 'texte' => "Burkina24 rapporte le 1er octobre 2025 le lancement officiel, le 30 septembre 2025 à Dakar, de la plateforme interopérable PI-SPI de la BCEAO. Elle relie banques, établissements de microfinance, émetteurs de monnaie électronique et sociétés de paiement, et fonctionne à toute heure, tous les jours. Le détail des règles se lit dans les instructions de la BCEAO ; un agent n'improvise pas une explication sur les frais ou les délais."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi un agent burkinabè doit-il savoir expliquer la différence entre son guichet et les portefeuilles mobiles ?",
            'paragraphes' => [
                "La liste des services de monnaie électronique que la BCEAO tient à jour, arrêtée au 28 février 2026, compte onze entrées pour le Burkina Faso. Orange Money Burkina Faso y figure comme établissement de monnaie électronique. Le Trésor public a une carte prépayée. Neuf partenariats associent une banque et un opérateur ou un prestataire technique : Moov Money avec deux banques, Wave avec deux banques, Coris Money avec deux entrées, Wizall, Telecel et BMoney.",
                "Pour l'agent, cette liste a deux lectures. D'abord, la frontière entre produit bancaire et portefeuille mobile n'est pas évidente pour le client : certains services passent par une banque partenaire, d'autres par un établissement de monnaie électronique. Ensuite, une réponse type écrite avec un assistant risque de mélanger ces cas, car l'outil généralise volontiers. La fiche de réponse validée par la direction, qui dit ce que fait la banque, ce que fait l'IMF et ce que fait l'opérateur, est donc un des exercices de la formation.",
                "Le paiement instantané ajoute une couche. Selon Burkina24, la plateforme PI-SPI comptait 45 établissements autorisés dès son lancement, dans les huit pays de l'union, avec des acteurs comme Coris Bank, Ecobank, Orabank, Moov Money (Bénin), Orange Money et Baobab cités par le journal. Un client qui apprend qu'il peut envoyer de l'argent d'un portefeuille à un compte demandera à son agent si c'est possible chez lui. L'agent répond d'après la documentation de son établissement, jamais d'après la réponse d'un assistant.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que faire préparer à l'assistant dans une agence du Burkina Faso, avec quel outil, et que vérifie la personne ensuite ?",
            'legende' => "Huit exercices du quotidien, joués sur des dossiers fictifs. L'établissement fixe les outils autorisés ; chaque éditeur publie ses propres conditions.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', "Contrôle par l'humain"],
            'lignes'  => [
["Note de crédit pour un commerçant de Bobo-Dioulasso ou un transformateur agricole", "Claude ou ChatGPT, dans le cadre de l'abonnement professionnel de la structure", "Canevas de note : activité, saisonnalité, besoin, capacité de remboursement, garanties", "L'agent rédige les hypothèses relevées lors de la visite ; le calendrier de remboursement est recalculé dans un tableur"],
["Suivi mensuel des retards d'une agence, trié par nombre de jours", "Google Sheets ou Excel, avec formules suggérées par l'assistant", "Trois tranches de retard et la part de l'encours que chacune représente", "La personne refait deux totaux à la main et compare chaque colonne à l'état du logiciel de l'institution"],
                ["Message de relance pour une échéance dépassée", "ChatGPT ou Gemini pour proposer la forme", "Texte bref et poli, utilisable par écrit ou comme trame d'appel", "La direction approuve le modèle une seule fois ; le montant vient du logiciel ; le contact est noté au dossier"],
                ["Courrier expliquant un changement de statut à des membres", "Modèle rédigé à partir du texte approuvé par l'institution", "Une page claire sur la part sociale, l'adhésion et les droits du membre", "La direction relit chaque montant ; aucun chiffre ne vient de l'assistant"],
                ["Fiche comparant guichet, IMF et portefeuille mobile", "Assistant chargé de reformuler un texte déjà validé par la conformité", "Un tableau court : qui tient le compte, qui accorde le crédit, qui garde l'argent", "La conformité approuve la fiche ; elle ne cite aucun compte ni aucun frais de mémoire"],
                ["Résumé des mouvements d'un compte pour l'analyste", "Assistant d'une offre professionnelle, sur un cas inventé sans donnée identifiante", "Liste de points à vérifier, sans conclusion", "L'analyste décide seul de saisir ou non le responsable de la conformité"],
                ["Compte rendu d'une réunion de comité de crédit", "Assistant de transcription ou de mise en forme, avec accord de l'établissement", "Décisions, responsables et échéances en dix lignes", "Le secrétaire du comité compare chaque décision au procès-verbal officiel"],
                ["Fiche pratique sur une procédure d'ouverture de compte ou de dossier, pour un nouvel arrivant", "NotebookLM ou Claude, sur un compte ouvert par la structure", "Dix lignes, chacune renvoyant à la page de la procédure interne", "Chaque renvoi est rouvert dans la procédure avant diffusion"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain une formation doit-elle intégrer au Burkina Faso, de l'électricité aux langues ?",
            'paragraphes' => [
                "Les données de la Banque mondiale donnent un cadre prudent. En 2024, 28,3 % des habitants utilisaient internet et 34 % de la population avait accès à l'électricité, contre 21,7 % un an plus tôt. Il y avait 116,6 abonnements mobiles pour 100 habitants. Une agence de Ouagadougou ou de Bobo-Dioulasso n'a pas la même situation qu'un point de service rural : la formation vérifie, avec chaque établissement, qui dispose d'une connexion stable, d'un ordinateur et d'un onduleur ou d'une alimentation de secours.",
                "Pour les langues, Burkina24 précise, dans un article du 25 janvier 2024, que la loi de révision constitutionnelle signée le 22 janvier reconnaît officiellement les langues nationales, le français et l'anglais devenant des langues de travail. L'animation se fait en français, comme la plupart des documents d'une banque ou d'une IMF. Les échanges avec la clientèle, eux, se tiennent souvent dans une langue nationale : un assistant généraliste n'interprète pas de façon sûre un montant ou une échéance, et la session le montre sur des exemples fictifs.",
                "Les pièces d'exercice sont envoyées avant la séance. Comme les assistants fonctionnent en ligne, chaque participant doit disposer d'une liaison stable, et une solution de repli est prévue en cas de coupure. Les séances à distance durent 2 h 30, ce qui limite la perte en cas d'incident de réseau.",
                "Reste l'heure. Pour l'IANA, Africa/Ouagadougou est un simple lien vers Africa/Abidjan, qui suit l'heure de Greenwich (UTC+0) ; Africa/Porto-Novo est un lien vers Africa/Lagos (UTC+1). Une séance planifiée pour 14 h à Cotonou démarre donc à 13 h pour le participant de Bobo-Dioulasso, que ce soit en saison sèche ou en saison des pluies.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une banque, ou pour un réseau d'IMF dont les agences se trouvent dans plusieurs régions ?",
            'legende' => "Ici tout passe par la visioconférence, depuis Cotonou ; les durées et les effectifs reprennent la fiche générale sur l'IA en entreprise.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ["Atelier découverte pour la direction générale, la conformité et les risques", "Une demi-journée", "12 personnes au plus", "Avant d'autoriser le moindre outil, afin de décider ensemble de ce qu'un agent peut soumettre à un assistant"],
                ["Formation complète destinée à un poste", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Chargés de clientèle, agents de crédit ou gestionnaires de portefeuille dont chacun s'est déjà mis à l'IA de son côté"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Un réseau réparti entre Ouagadougou, Bobo-Dioulasso et d'autres villes, dont le personnel ne peut quitter son poste plusieurs jours"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Consolider les réflexes et retoucher les modèles de réponse quand un produit ou un statut change"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que fait concrètement un participant pendant la session : quatre scénarios pour une banque ou une IMF burkinabè ?",
            'intro' => "Ces quatre cas sont fictifs. Chacun donne la situation, la consigne remise au participant et les contrôles qu'il effectue avant de se servir du résultat.",
            'items' => [
                ['titre' => "Scénario 1 : le dossier d'un transformateur de produits agricoles", 'texte' => "Situation : une chargée de clientèle fictive prépare la note d'un atelier de transformation qui demande un crédit de campagne. Consigne : faire proposer à l'assistant le plan de la note et les questions de la visite, puis rédiger elle-même les hypothèses sur les saisons de vente. Avant de reprendre le texte, elle refait le calendrier de remboursement dans le tableur et rattache chaque chiffre à une pièce du dossier."],
                ['titre' => "Scénario 2 : les retards d'une agence d'IMF", 'texte' => "Situation : un responsable d'agence fictif détient l'export de son portefeuille et prépare la part des retards pour son comité. Consigne : construire le tableau en demandant les formules à l'assistant, puis décrire trois lignes sans préjuger de la décision. Avant d'utiliser le résultat, il recalcule deux totaux sans l'outil, rapproche les mois et relit chaque en-tête de colonne."],
                ['titre' => "Scénario 3 : un membre s'étonne d'un changement de statut", 'texte' => "Situation : une coopératrice fictive demande pourquoi la part sociale a changé. Consigne : rédiger trois phrases simples à partir du seul texte validé par la direction, sans y glisser le moindre chiffre issu de l'assistant. Elle vérifie les montants contre le document officiel de l'institution, fait relire la réponse et note l'échange au dossier."],
                ['titre' => "Scénario 4 : un client veut envoyer de l'argent vers un portefeuille mobile", 'texte' => "Situation : un client fictif demande si sa banque peut lui permettre d'envoyer des fonds vers un portefeuille de son choix. Consigne : préparer avec l'assistant une réponse courte, puis la comparer à la fiche approuvée par la conformité. L'agent contrôle que la réponse ne promet ni gratuité ni délai, que l'opérateur est nommé tel qu'il figure dans la liste de la BCEAO et qu'un conseiller prend le relais pour toute opération précise."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles pistes de financement, ou de budget, pour la formation IA d'une banque ou d'une IMF burkinabè ?",
            'paragraphes' => [
                "Rien n'est garanti d'avance. Le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA) est décrit par Sidwaya, dans un article du 6 novembre 2019, comme un outil de développement des entreprises : l'article indique que 500 millions de FCFA ont été mis à sa disposition pour 2019, exclusivement pour financer des plans de formation d'entreprises, avec la subvention d'une grande partie du coût. Ces éléments datent de 2019. Les conditions, les taux et le calendrier actuels se confirment directement auprès du fonds.",
                "Avant de monter un dossier, adressez au fonds deux questions écrites : accepte-t-il un prestataire basé à l'étranger, et à quel moment doit-il recevoir le programme ? Si la réponse tarde ou si elle est négative, la dépense passe par le budget de formation de l'exercice, que l'on échelonne : un atelier pour la direction et la conformité, une session par poste, puis le suivi mensuel. Les licences d'assistants sont souscrites par l'établissement et restent hors devis.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Quel est le prix d'une session IA pour le personnel d'une banque ou d'une IMF du Burkina Faso ?",
            'intro' => "Aucun montant n'est affiché : le prix résulte d'un devis en FCFA, établi après le cadrage et formule par formule. Le paiement passe par virement, carte bancaire, PayPal, Mobile Money (MTN, Moov) ou espèces, au choix fixé dans le devis. Les offres des éditeurs d'outils changent souvent ; leur site officiel fait foi.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée réunissant direction et conformité', 'Inventaire des usages déjà répandus', 'Premiers principes sur les données', 'Avis sur la suite à donner']],
                ['offre' => 'Formation complète par poste', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées sur des dossiers fictifs inspirés de vos procédures', 'Épreuve finale chronomètre en main', 'Attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Trois demi-journées, une par mois', 'Reprise des modèles de réponse', 'Nouvelles tâches ajoutées au fil du suivi']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Le nombre de séances à distance et leur durée.",
                "La préparation des dossiers fictifs avec la conformité.",
                "L'écart de moyens entre agences de grande ville et points de service éloignés.",
                "L'accompagnement souhaité après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels faux pas voit-on dans les banques et les IMF du Burkina Faso qui adoptent un assistant d'IA ?",
            'intro' => "Mieux vaut les prévenir au moment où la direction écrit ses règles d'usage.",
            'items' => [
                ['titre' => "Copier une pièce d'identité dans un outil personnel", 'texte' => "Le transfert de données vers un pays étranger est l'un des traitements que l'article 31 de la loi n° 001-2021/AN soumet à autorisation. Un agent qui colle un relevé dans l'assistant de son téléphone fait sortir des données du système de l'établissement ; la direction, et non l'agence, dit quel outil est permis."],
                ['titre' => "Laisser l'assistant noter le client", 'texte' => "Un outil qui classe les emprunteurs par risque ressemble à l'aide à la décision que le même article range parmi les traitements à autoriser. La décision de crédit reste humaine et motivée, et l'assistant sert à préparer le dossier, non à trancher."],
                ['titre' => "Rédiger de mémoire sur le nouveau statut", 'texte' => "Les caisses qui deviennent coopératives de microfinance changent de mots, de parts sociales et de formalités. Un modèle ancien, glissé dans l'assistant, produit un courrier qui parle d'un état dépassé ; seul le texte validé par l'institution fait foi."],
                ['titre' => "Confondre données de l'UMOA et données du pays", 'texte' => "La BCEAO publie des tableaux pour toute l'union, et la presse reprend parfois un total de zone comme s'il concernait un seul pays. Chaque chiffre porte son pays, sa date et sa source, comme dans les exercices de la formation."],
                ['titre' => "Mélanger 73 et 124 institutions", 'texte' => "Deux publications donnent deux décomptes de SFD à deux dates et sur deux périmètres. Les agents qui préparent une présentation citent l'un ou l'autre avec sa source, jamais une différence entre les deux."],
                ['titre' => "Faire traduire un entretien par l'assistant", 'texte' => "Un client qui s'exprime dans une langue nationale ne se résume pas par un outil généraliste sans relecture d'un collègue qui la parle. Un montant ou une échéance mal rendus créent un litige."],
                ['titre' => "Former seulement les agents de guichet", 'texte' => "Direction, conformité, gestionnaires de portefeuille et agents de crédit se servent des mêmes outils sur les mêmes téléphones. Les associer au premier atelier évite des consignes que personne n'applique."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier à Richard SALANON la formation IA des agents d'une banque ou d'une IMF burkinabè ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Basé à Cotonou, Richard a déjà travaillé avec des entreprises au Burkina Faso, et quinze pays figurent dans son parcours, dont le Bénin, le Mali et le Niger. Il peut former à distance les agents des banques et des IMF burkinabè, avec une heure de décalage. La page des <a href=\"/realisations/\">réalisations</a> présente l'ensemble de ses projets.",
                "Passé par " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", Richard totalise " . $ans . " ans dans le numérique et déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées, tous publics confondus. Il est le créateur de <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Richard n'est pas banquier : il ne tient pas la conformité d'un établissement et ne détient aucune certification d'éditeur d'IA. La décision de crédit, le recouvrement, la vigilance, la déclaration de soupçon et la lecture des textes appartiennent aux professionnels et aux autorités. Un questionnaire et un ou deux entretiens de cadrage précèdent la session, avec des documents à télécharger à l'avance. Elle s'achève par des supports remis, une épreuve finale chronomètre en main et une attestation nominative ; la demande initiale reçoit une réponse sous 24 heures et un canal direct reste ouvert le mois suivant. Pour aller plus loin, voir les formations <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>, <a href=\"/formations/cybersecurite-employes\">cybersécurité pour les employés</a>, <a href=\"/formations/chatbot-whatsapp\">chatbot WhatsApp</a> et <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, ou le parcours général <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>.",
                "Richard a déjà formé des équipes de banques et d'institutions de microfinance : ce public ne lui est pas nouveau, et chaque séance part des dossiers et des procédures de l'établissement.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Souhaitez-vous qu'une session IA soit organisée pour le personnel de votre banque ou de votre IMF au Burkina Faso ?",
            'texte'  => "Présentez votre structure (banque ou IMF, taille du réseau), le nombre d'agents et d'agences, les postes concernés, les tâches qui prennent le plus de temps et votre ville. Vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les agents d'une banque ou d'une IMF à l'IA au Burkina Faso ?", 'r' => "Richard SALANON, qui vit à Cotonou, peut l'animer en visioconférence et en français, avec ChatGPT, Claude ou Gemini, sur des tâches du métier et des dossiers fictifs. Les limites sont posées par la conformité de l'établissement, et aucun éditeur ne l'a certifié."],
        ['q' => "Le crédit bancaire burkinabè a-t-il progressé en 2025 ?", 'r' => "Selon Burkina24, qui reprend le rapport annuel 2025 de la Commission bancaire de l'UMOA, les crédits à la clientèle ont reculé de 4 % à 4 476,2 milliards de FCFA fin 2025, alors que le total de bilan progressait de 7,5 % à 10 251,4 milliards."],
        ['q' => "Combien d'institutions de microfinance compte le Burkina Faso ?", 'r' => "Le tableau de la BCEAO arrêté au 30 septembre 2025 recense 73 SFD, dont 36 dans l'échantillon suivi. Une autre publication, de L'Economiste du Faso, compte 124 SFD fin 2023 : les périmètres diffèrent, et les deux chiffres ne se comparent pas."],
        ['q' => "Quelle est la qualité du portefeuille des SFD burkinabè ?", 'r' => "Pour l'échantillon suivi par la BCEAO, le taux de dégradation du portefeuille était de 10,8 % au 30 septembre 2025, soit 46 294,5 millions de FCFA de créances en souffrance pour 428 265,5 millions d'encours. La formation n'agit pas sur ce taux ; elle fait gagner du temps sur la préparation des dossiers."],
        ['q' => "Un assistant d'IA peut-il noter un client ou un emprunteur ?", 'r' => "Pas sans précaution. L'article 31 de la loi n° 001-2021/AN soumet à l'autorisation de l'autorité de contrôle les aides à la décision qui définissent un profil ou reposent sur l'intelligence artificielle à des fins prédictives. La conformité et un juriste en tirent la conséquence pour l'établissement."],
        ['q' => "Peut-on coller la pièce d'identité d'un client dans un assistant en ligne ?", 'r' => "La question se pose à la conformité avant tout essai : l'article 42 de la même loi encadre le transfert de données vers un pays étranger par l'autorisation préalable et des clauses de confidentialité et de réversibilité. Les exercices de la formation n'emploient donc que des données inventées."],
        ['q' => "Quelle différence entre un compte bancaire et un portefeuille mobile ?", 'r' => "La liste de la BCEAO au 28 février 2026 distingue au Burkina Faso un établissement de monnaie électronique, Orange Money Burkina Faso, et des services bâtis sur un partenariat entre banque et opérateur, comme Moov Money ou Wave. L'agent explique la différence d'après la fiche validée par sa conformité."],
        ['q' => "Qu'est-ce que la plateforme PI-SPI de la BCEAO ?", 'r' => "Selon Burkina24, c'est la plateforme interopérable de paiement instantané lancée officiellement le 30 septembre 2025 à Dakar, ouverte aux banques, aux établissements de microfinance, aux émetteurs de monnaie électronique et aux sociétés de paiement, et accessible à toute heure."],
        ['q' => "La formation peut-elle se donner en français uniquement ?", 'r' => "Oui. Supports et exercices sont en français. Beaucoup d'entretiens avec la clientèle se tiennent dans une langue nationale, que la révision constitutionnelle de janvier 2024 a officialisée selon Burkina24 ; aucun assistant ne remplace un collègue qui la parle."],
        ['q' => "Les séances à distance se calent-elles facilement entre Cotonou et les agences burkinabè ?", 'r' => "Oui, avec une heure d'écart : l'IANA relie Africa/Ouagadougou à Africa/Abidjan (UTC+0) et Africa/Porto-Novo à Africa/Lagos (UTC+1). Un rendez-vous fixé à 15 h à Cotonou est à 14 h pour l'agence, toute l'année."],
        ['q' => "Existe-t-il un financement public pour cette formation ?", 'r' => "Aucune prise en charge n'est confirmée. Le FAFPA finance des plans de formation d'entreprises, selon Sidwaya en 2019, mais ses conditions actuelles se confirment auprès du fonds, qui dira aussi s'il accepte un prestataire établi à l'étranger."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Aucun montant n'est affiché. Le devis en FCFA vient après le cadrage et dépend du nombre de participants, des séances, de la préparation des dossiers fictifs, de l'écart de moyens entre agences et de l'accompagnement. Les licences des outils sont à la charge de l'établissement."],
        ['q' => "Une attestation est-elle remise à la fin ?", 'r' => "Oui, nominative, accompagnée du programme et des supports. Elle n'est ni un diplôme ni une certification d'éditeur, et elle ne remplace pas les actions de lutte contre le blanchiment que l'établissement conduit lui-même."],
    ],

    'sources' => [
        ['titre' => "Burkina24, le secteur bancaire burkinabè d'après le rapport 2025 de la Commission bancaire (1er septembre 2026)", 'url' => 'https://burkina24.com/2026/09/01/secteur-bancaire-le-burkina-faso-avance-vers-une-plus-grande-souverainete-financiere/', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, principaux indicateurs des SFD de l'UMOA au 30 septembre 2025 (22 janvier 2026)", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, établissements de monnaie électronique (données au 28 février 2026)", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica d'après Sidwaya, inclusion financière : le Burkina Faso à 81,8 % en 2025 (22 juillet 2026)", 'url' => 'https://fr.allafrica.com/stories/202607220564.html', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica d'après Sidwaya, la caisse populaire de Kaya se conforme aux nouveaux textes (15 avril 2026)", 'url' => 'https://fr.allafrica.com/stories/202604150472.html', 'date' => '2026-10-27'],
        ['titre' => "L'Economiste du Faso, secteur de la microfinance : près de deux millions de clients en 2023 (3 mars 2025)", 'url' => 'https://leconomistedufaso.com/2025/03/03/secteur-de-la-microfinance-pres-de-deux-millions-de-clients-en-2023/', 'date' => '2026-10-27'],
        ['titre' => "Burkina24, le PIAF-PME renforce les capacités des SFD en matière de lutte contre le blanchiment (14 octobre 2024)", 'url' => 'https://burkina24.com/?p=383810', 'date' => '2026-10-27'],
        ['titre' => "Burkina24, la BCEAO lance le PI-SPI (1er octobre 2025)", 'url' => 'https://burkina24.com/?p=418262', 'date' => '2026-10-27'],
        ['titre' => "Burkina24, la loi portant modification de la Constitution promulguée (25 janvier 2024)", 'url' => 'https://burkina24.com/2024/01/25/burkina-faso-le-capitaine-ibrahim-traore-a-promulgue-la-loi-portant-modification-de-la-constitution/', 'date' => '2026-10-27'],
        ['titre' => "Assemblée nationale du Burkina Faso, loi n° 001-2021/AN du 30 mars 2021 sur la protection des données à caractère personnel", 'url' => 'https://assembleenationale.bf/storage/Loi/kDsWHXOTUCQFVESChh8BlBdiZnCrdTsOpXe1rzmH.pdf', 'date' => '2026-10-27'],
        ['titre' => "Sidwaya, le FAFPA sensibilise des entreprises des Hauts-Bassins (6 novembre 2019)", 'url' => 'https://www.sidwaya.info/formation-continue-et-competitivite-des-entreprises-le-fafpa-sensibilise-des-entreprises-des-hauts-bassins/', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, individus utilisant internet au Burkina Faso", 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=BF', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, accès à l'électricité au Burkina Faso", 'url' => 'https://data.worldbank.org/indicator/EG.ELC.ACCS.ZS?locations=BF', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, abonnements mobiles pour 100 habitants au Burkina Faso", 'url' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=BF', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Ouagadougou, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : zones Africa/Abidjan et Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
