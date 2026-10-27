<?php
// ============================================================
// data/metiers/banques-microfinance/mali.php · Formation IA du personnel des banques et des
// institutions de microfinance du Mali (couple métier + pays, statut « peut former »).
// Sources lues le 27/10/2026 : Financial Afrik / FinanceSAO d'après la Commission bancaire de l'UMOA
// (bilan des établissements de crédit fin 2025), Commission bancaire (panorama au 31/12/2025),
// BCEAO (indicateurs des SFD au 30/09/2025, liste des établissements de monnaie électronique au
// 28/02/2026, tableau de bord de l'inclusion financière 2023, résumé du rapport 2025 de la
// Commission bancaire), Ecofin (19/09/2025), Financial Afrik (05/03/2026), Osiris (19/05/2024),
// BEI (25/02/2020), OIT (28/07/2026), Data Protection Africa, Constitution de 2023 (article 31),
// Banque mondiale (API), IANA.
// Non lus et donc non cités : texte des lois de 2013 et 2017 sur les données personnelles, projet de loi
// sur la microfinance, textes de l'UMOA sur la lutte contre le blanchiment, rapports de la cellule
// nationale de renseignement financier, liste nominative des participants maliens au PI-SPI.
// Écarts signalés : 116 SFD (BCEAO fin sept. 2025 et association professionnelle fin 2024), 75 institutions
// (tableau de bord 2023), 26 (Commission bancaire, article 44) et 25 (échantillon BCEAO) viennent de
// périmètres différents et ne se comparent pas. Le décompte des établissements financiers à caractère
// bancaire diffère entre deux publications : seul le nombre de banques (14) est repris.
// Aucun projet client du Mali dans projets-clients.php. Aucun propos sur la sécurité ou la politique.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les équipes des banques et des IMF du Mali : notes de crédit de campagne, suivi des retards et réponses aux déposants préparés avec un assistant, sur des dossiers inventés",
    'title'   => "Formation IA banques et microfinance Mali | Richard SALANON",
    'meta'    => "Formation IA pour le personnel des banques et de la microfinance au Mali : crédit, retards, monnaie électronique, données. À distance, devis en FCFA.",
    'en_bref' => "Qui peut former à l'IA les agents des banques et des caisses de microfinance du Mali ? Richard SALANON, consultant installé à Cotonou, peut animer cette formation par visioconférence, en français, à partir de dossiers imaginaires. Bamako (UTC+0) a une heure de retard sur Cotonou (UTC+1), et le devis se rédige en FCFA. Aucun client réel n'apparaît dans les exercices.",
    'publie'  => '2026-12-28',
    'maj'     => '2026-12-28',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "À qui confier l'initiation à l'IA d'une agence bancaire ou d'une caisse de microfinance malienne, et sur quoi la juger ?",
            'paragraphes' => [
                "Richard SALANON, installé à Cotonou, peut conduire à distance une session pour les agents des banques et des institutions de microfinance (IMF) maliennes. La matière vient des gestes de la semaine d'un chargé de clientèle, d'un agent de crédit ou d'un caissier : une note, un tableau de retards, une réponse à un déposant. Les exercices se jouent avec ChatGPT, Claude ou Gemini sur des cas imaginaires. Richard ne pratique pas la banque, ne se présente pas comme juriste, et aucun éditeur ne lui a délivré de certification. Ses devis sont en FCFA.",
                "Pour juger une offre, regardez ce que l'agent sait faire seul le lendemain. Une démonstration d'outil le laisse face à une fenêtre vide. Une formation de métier lui fait écrire la note de crédit d'une coopérative, ranger un export de portefeuille, puis refaire l'exercice chronomètre en main, chaque montant étant rapproché du logiciel de l'établissement.",
                "Quatre questions au candidat suffisent. Ses exercices reposent-ils sur des cas imaginaires, ou réclame-t-il vos pièces ? Votre conformité les lit-elle avant la séance ? Que répond-il si l'on demande où partent les données tapées dans un assistant en ligne ? Et qu'emporte l'établissement : un diaporama, ou des règles d'usage rédigées avec lui, poste par poste ?",
                "La session ne se substitue ni aux assemblées de l'association professionnelle des SFD, ni aux messages de prudence sur les opérateurs non agréés. Elle vient après : les règles connues, comment préparer plus vite les écrits de l'agent, sans lui retirer ni la décision ni la vérification.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel est le poids des banques maliennes fin 2025, et dans quels sièges un outil d'IA se discute-t-il ?",
            'paragraphes' => [
                "Selon FinanceSAO, qui cite la Commission bancaire de l'UMOA, les établissements de crédit du Mali totalisaient 9 076,2 milliards de FCFA de bilan au 31 décembre 2025, en hausse de 15 % sur un an. Rapporté au total de l'Union que donne le résumé du rapport annuel 2025 de la Commission bancaire, 82 298,8 milliards, cela représente environ 11 % : un calcul fait pour cette page à partir de deux publications.",
                "Le même article indique que les dix premières banques détiennent près de 90 % du bilan et que trois d'entre elles, BMS, BDM et BNDA, en représentent environ 53 %. Il chiffre à 134,2 milliards de FCFA le résultat net cumulé de 2025, contre 68,4 milliards un an plus tôt. Pour un projet de formation, cela signifie que le même sujet se joue dans quelques grands sièges, avec des règles internes écrites, et dans de plus petites banques, où l'agent décide souvent seul de ce qu'il ouvre sur son poste.",
                "Le panorama de la Commission bancaire arrêté au 31 décembre 2025 compte 14 banques au Mali, dont une succursale, et deux établissements de monnaie électronique. Le tableau de bord de l'inclusion financière de la BCEAO pour 2023 recensait 1 011 points de service bancaires et 3 535 291 comptes bancaires au Mali, contre 844 points de service et 1 636 372 comptes pour la microfinance. Ce sont des chiffres de 2023, non additionnables avec ceux de 2025.",
                "Côté population, la Banque mondiale (Global Findex) indique que 54,7 % des Maliens de 15 ans et plus avaient un compte auprès d'une institution financière ou d'un prestataire de monnaie mobile en 2024, contre 43,5 % en 2021 et 35,4 % en 2017. Le client qui entre en agence arrive donc souvent avec un portefeuille mobile déjà ouvert : l'agent doit pouvoir expliquer la différence entre les deux sans improviser.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment lire les chiffres de la microfinance malienne, et pourquoi un projet de loi concerne-t-il les modèles de documents ?",
            'paragraphes' => [
                "Dans la ligne du Mali du tableau publié à Dakar le 22 janvier 2026 par la BCEAO, avec des données au 30 septembre 2025, on lit 116 SFD, dont 25 forment l'échantillon, pour 1 042 points de service et 1 629 544 membres ou clients. Sur ces 25 institutions, les dépôts atteignent 183 833,0 millions de FCFA, les crédits en cours 203 501,2 millions, les impayés 12 347,1 millions : le taux de dégradation ressort à 6,1 %, contre 10,2 % pour l'estimation du secteur dans toute l'Union.",
                "Une autre série existe. D'après Ecofin (19 septembre 2025), l'association professionnelle des SFD du Mali comptait 116 SFD et 1,58 million de clients au 31 décembre 2024, avec 158 milliards de FCFA de dépôts et 191 milliards de crédits. Le tableau de bord de la BCEAO pour 2023 parle de 75 institutions, et la Commission bancaire dénombre 26 SFD relevant de l'article 44 au 31 décembre 2025. Ces décomptes reposent sur des périmètres et des dates différents : on cite l'un d'eux avec sa source, jamais une différence entre deux.",
                "Le cadre juridique est annoncé en mouvement. Toujours selon Ecofin, un conseiller du ministère de l'Économie et des Finances a indiqué à cette assemblée du 18 septembre 2025 qu'un nouveau texte sur la microfinance était en préparation, pour mieux protéger les déposants et redynamiser un secteur jugé essentiel à l'inclusion financière. À cette date le texte n'était pas adopté, et ses dispositions ne sont pas commentées ici. Son avancement se demande au ministère ; la direction de l'établissement décide quels modèles de courrier évoluent.",
                "Les mêmes propos citent parmi les difficultés du secteur l'accès aux ressources, la faible numérisation et la présence d'opérateurs sans agrément. Pour l'agent, deux conséquences concrètes : les outils du quotidien sont souvent des tableurs, que l'assistant sait aider à construire, et le client doit pouvoir être renseigné sur ce qu'est une institution agréée. Cette dernière réponse vient de la direction, pas d'un assistant.",
                "Parmi les institutions mutualistes, la Banque européenne d'investissement présentait Kafo Jiginew, le 25 février 2020, comme une institution de microfinance de premier plan du pays, avec plus de 400 000 membres et 19 coopératives. Ces chiffres datent de 2020 : ils illustrent la taille que peut atteindre un réseau, et non sa situation actuelle.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Sept chiffres maliens à retenir avant d'ouvrir le premier atelier, et d'où viennent-ils ?",
            'items' => [
                ['valeur' => '9 076,2 milliards', 'libelle' => "Total de bilan des 17 établissements de crédit du Mali au 31 décembre 2025 (+15 %), dont 14 banques.", 'source' => "FinanceSAO d'après la Commission bancaire de l'UMOA", 'url' => 'https://financesao.com/mali-classement-des-plus-grandes-banques-en-2025/'],
                ['valeur' => '116', 'libelle' => "Systèmes financiers décentralisés maliens à fin septembre 2025 ; l'échantillon en retient 25, avec 1 042 guichets et 1 629 544 adhérents ou clients.", 'source' => "BCEAO, indicateurs des SFD de l'UMOA, 22 janvier 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf'],
                ['valeur' => '6,1 %', 'libelle' => "Part des impayés dans les crédits en cours des 25 SFD de l'échantillon à fin septembre 2025 : 12 347,1 millions de FCFA sur 203 501,2 millions.", 'source' => "BCEAO, tableau des SFD de l'UMOA, 22 janvier 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf'],
                ['valeur' => '54,7 %', 'libelle' => "Adultes maliens titulaires d'un compte (institution financière ou monnaie mobile) en 2024, contre 43,5 % en 2021.", 'source' => "Banque mondiale, Global Findex", 'url' => 'https://data.worldbank.org/indicator/FX.OWN.TOTL.ZS?locations=ML'],
                ['valeur' => '9', 'libelle' => "Lignes maliennes de la liste BCEAO au 28 février 2026 : deux établissements de monnaie électronique et sept partenariats associant une banque à un prestataire.", 'source' => "BCEAO, établissements de monnaie électronique", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique'],
                ['valeur' => '11', 'libelle' => "Participants maliens parmi les plus de 70 institutions autorisées à ouvrir les services du PI-SPI, selon la liste mise à jour à partir du 24 février 2026.", 'source' => "Financial Afrik, 5 mars 2026", 'url' => 'https://www.financialafrik.com/2026/03/05/paiements-instantanes-pi-spi-dans-luemoa-liste-actualisee-des-etablissements-autorises-par-la-bceao/'],
                ['valeur' => '36,8 %', 'libelle' => "Part de la population connectée à internet en 2024, après 36,0 % en 2023.", 'source' => "Banque mondiale, série IT.NET.USER.ZS", 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=ML'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels textes maliens faut-il connaître avant de laisser un assistant approcher un dossier de banque ou d'IMF ?",
            'intro' => "Chaque texte est donné par son intitulé et sa date, sans article ni commentaire. Il appartient à la conformité de les lire, et à un juriste de trancher les cas douteux.",
            'items' => [
                ['titre' => "Les données personnelles", 'texte' => "Data Protection Africa cite la loi n° 2013-015 du 21 mai 2013, retouchée par la loi n° 2017-070 du 18 décembre 2017, et l'autorité qu'elle a instituée, l'APDP, active depuis 2016. Dans un établissement financier, la question à poser avant tout essai est simple : quel assistant est admis, et quelles données y entrent ? Les exercices n'emploient que des données imaginaires."],
                ['titre' => "La cybercriminalité", 'texte' => "La même fiche mentionne la loi n° 2019-056 du 5 décembre 2019 sur la répression de la cybercriminalité, dont le contenu n'est pas détaillé ici. Un compte partagé, un mot de passe collé dans une conversation ou un export expédié depuis un téléphone personnel relèvent, eux, du règlement de sécurité de l'établissement."],
                ['titre' => "Le texte annoncé sur la microfinance", 'texte' => "Ecofin signalait en septembre 2025 un projet de loi en préparation. La formation s'abstient de le commenter ; elle enseigne seulement à ne jamais faire écrire de tête, par l'assistant, une lettre sur l'agrément, le statut ou la protection des dépôts. Le texte validé par la direction prévaut."],
                ['titre' => "Les règles de l'UMOA et de la BCEAO", 'texte' => "Connaissance de la clientèle, déclaration de soupçon, instructions sur la monnaie électronique : ces obligations découlent de textes de l'Union que cette page ne détaille pas. Les pièces d'un dossier suspect restent hors de l'assistant, et c'est le responsable de la conformité qui décide de déclarer."],
                ['titre' => "Le paiement instantané", 'texte' => "Financial Afrik rapporte, le 5 mars 2026, que la BCEAO a mis à jour la liste des institutions autorisées à ouvrir les services du PI-SPI au public : plus de 70 dans l'Union, dont 11 au Mali, sans que les noms des participants maliens soient donnés. Face à un client, l'agent s'en tient aux documents de son établissement, sans consulter un assistant."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Banque partenaire ou établissement de monnaie électronique : comment un agent malien explique-t-il la différence à son client ?",
            'paragraphes' => [
                "La liste de la BCEAO arrêtée au 28 février 2026 comporte neuf entrées pour le Mali. Deux sont des établissements de monnaie électronique : Orange Finances Mobiles Mali (Orange Money) et Sama Money SA. Sept associent une banque et un prestataire : BDM et Sotelma-Malitel (Moov Money), BAM et Wizall, BSIC Mali et Zelia Gold Solutions (Zelia), Coris Bank Mali et M2I (Coris Money), Orabank Mali et Wave, ainsi que BICIM Mali avec T-Lia et avec Optima.",
                "Cette liste dit que le portefeuille du client ne relève pas toujours de la même maison que son compte. Certains services reposent sur une banque que l'agent connaît, d'autres sur un établissement distinct. Un assistant généraliste mélange volontiers ces cas : il attribue un produit à la mauvaise institution ou promet une opération que le service ne propose pas. D'où un exercice central : reformuler une fiche déjà validée par la conformité, sans y ajouter un seul fait.",
                "Le volume explique l'importance du sujet. Osiris relayait le 19 mai 2024 un discours du ministre de l'Économie numérique, prononcé le 17 mai : près de 17 millions de détenteurs de comptes mobiles, pour plus de 14 millions en 2022. L'article ne date pas précisément ce second chiffre et ne dit pas si une même personne peut compter plusieurs fois : il ne se met pas en regard de la population bancarisée.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans une agence ou une caisse du Mali, quels travaux déléguer en partie à l'assistant, et qu'est-ce que l'agent revérifie ?",
            'legende' => "Neuf exercices sur des dossiers imaginaires. Les outils admis sont ceux que l'établissement autorise ; les conditions des éditeurs évoluent.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', "Contrôle par l'humain"],
            'lignes'  => [
                ["Note de crédit de campagne d'une coopérative de producteurs, côté Sikasso ou Koutiala", "Claude ou ChatGPT, via l'abonnement professionnel de la structure", "Squelette de note : cycle de culture, besoin, remboursement après la récolte, garanties", "Les hypothèses issues de la visite sont écrites par l'agent ; l'échéancier est recalculé sur tableur"],
                ["Classement des impayés d'une caisse selon l'ancienneté du retard", "Excel ou Google Sheets, formules suggérées par l'assistant", "Trois classes d'ancienneté, avec la part d'encours de chacune", "L'agent refait deux totaux à la main et rapproche les colonnes du logiciel de l'institution"],
                ["Courrier de rappel après une échéance manquée", "ChatGPT ou Gemini, pour la tournure", "Texte bref et courtois, qui peut aussi guider un appel", "La direction valide le modèle une fois ; la somme due provient du logiciel"],
                ["Réponse à une déposante qui s'inquiète pour son épargne", "Assistant chargé de reformuler un texte déjà approuvé", "Quelques phrases claires, sans engagement", "La direction relit ; aucune affirmation juridique ne sort de l'assistant"],
                ["Fiche opposant compte bancaire et compte de monnaie électronique", "Assistant, à partir d'un texte validé par la conformité", "Trois lignes : qui tient le compte, qui reçoit les fonds, qui traite un litige", "Les noms d'opérateurs sont vérifiés dans la liste de la BCEAO avant diffusion"],
                ["Message aux membres pour vérifier qu'une institution est agréée", "ChatGPT ou Claude, pour la mise en forme", "Une page de conseils en termes simples", "La direction apporte la démarche officielle ; l'assistant n'en invente aucune"],
                ["Inventaire des pièces d'un dossier avant le passage en comité", "Assistant d'abonnement professionnel, sur un cas imaginaire", "Pièces reçues d'un côté, pièces manquantes de l'autre", "L'agent confronte la liste au dossier papier avant de l'envoyer"],
                ["Relevé de décisions d'un comité de crédit", "Outil de mise en forme, avec l'aval de l'établissement", "Dix lignes : décision, responsable, échéance", "Le secrétaire rapproche chaque ligne du procès-verbal signé"],
                ["Mémo de procédure pour l'agent qui rejoint une caisse villageoise", "NotebookLM ou Claude, sur un compte de la structure", "Dix points, chacun renvoyant à une page de la procédure interne", "Tous les renvois sont rouverts dans la procédure avant la remise"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Électricité, connexion, langues : que change le terrain malien à l'organisation d'une session ?",
            'paragraphes' => [
                "D'après les indicateurs de la Banque mondiale, 36,8 % des habitants utilisaient internet au Mali en 2024, contre 36,0 % en 2023. L'accès à l'électricité s'établissait à 49,5 % en 2024, contre 54,5 % en 2023, et le dernier chiffre publié pour la téléphonie mobile, celui de 2022, est de 112,1 abonnements pour 100 habitants. Ces moyennes ne décrivent aucune agence en particulier : au cadrage, on demande à chaque établissement quels postes ont une connexion stable, un ordinateur et un secours en cas de coupure de courant.",
                "L'article 31 de la Constitution de 2023 dispose que les langues nationales sont les langues officielles du Mali et que le français est la langue de travail. La formation se déroule en français, langue de la plupart des documents bancaires. Au guichet, la conversation peut se tenir dans une langue nationale : montant, échéance ou taux ne passent pas par un assistant généraliste sans relecture d'un collègue qui la parle.",
                "Les pièces d'exercice arrivent avant la séance. Comme les assistants travaillent en ligne, une liaison stable est requise de chaque participant ; une solution de repli est prévue en cas de coupure. Les séances à distance durent 2 h 30.",
                "Pour la planification, un point de repère : dans la base de l'IANA, Bamako est un simple alias d'Abidjan, sur l'heure de Greenwich, alors que Porto-Novo est alias de Lagos, une heure plus avant. Les agences maliennes ont donc une heure de moins que Cotonou en toute saison : 15 h à Cotonou, 14 h à Bamako.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Siège à Bamako ou caisses réparties en région : quelle formule retenir ?",
            'legende' => "Toutes les formules passent par la visioconférence depuis Cotonou. Durées et effectifs suivent la fiche générale du parcours IA en entreprise.",
            'entetes' => ['Formule', 'Durée', 'Effectif', 'Cas typique'],
            'lignes'  => [
                ["Atelier découverte pour direction, conformité et contrôle interne", "Une demi-journée", "12 personnes au plus", "Fixer ensemble, avant tout déploiement, ce qu'un agent a le droit de soumettre à un assistant"],
                ["Formation complète pour un poste donné", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Agents de crédit ou responsables de caisse qui se servent déjà d'un assistant, chacun à sa manière"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Agents éloignés les uns des autres, qui ne peuvent quitter leur poste plusieurs jours de suite"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Ajuster les modèles de réponse quand un produit, un texte ou une procédure change"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que fait un participant malien pendant la session : quatre scénarios de banque et de microfinance ?",
            'intro' => "Tous les dossiers sont imaginaires. Pour chaque cas : la situation, la consigne remise, puis ce que la personne vérifie avant de se servir du résultat.",
            'items' => [
                ['titre' => "Scénario 1 : une coopérative demande un crédit d'intrants", 'texte' => "Situation : un agent de crédit imaginaire monte le dossier d'une coopérative de producteurs avant la campagne. Consigne : obtenir de l'assistant un plan de note et des questions pour la visite, puis écrire de sa main les hypothèses sur les dates de récolte et de vente. Contrôles : il refait l'échéancier sur tableur et associe chaque chiffre à une pièce du dossier."],
                ['titre' => "Scénario 2 : une déposante s'inquiète pour son épargne", 'texte' => "Situation : une cliente imaginaire d'une caisse veut savoir si son argent est en sécurité. Consigne : composer trois phrases simples en partant du seul texte approuvé par la direction, sans rien promettre. Contrôles : chaque mot est comparé au document officiel, la réponse est relue par un collègue, l'échange est consigné au dossier."],
                ['titre' => "Scénario 3 : l'état des impayés à Ségou", 'texte' => "Situation : une responsable d'agence imaginaire prépare sa part du comité. Consigne : bâtir le tableau en réclamant les formules à l'assistant, puis commenter trois lignes sans préjuger de la décision. Contrôles : deux totaux recalculés à la main, mois rapprochés, intitulés de colonnes relus un à un."],
                ['titre' => "Scénario 4 : le client s'enquiert du paiement instantané", 'texte' => "Situation : un client imaginaire de Bamako demande à son conseiller si sa banque est raccordée. Consigne : rédiger avec l'assistant une réponse brève, puis la confronter aux documents de l'établissement. Contrôles : ni gratuité ni délai promis, aucun service cité sans confirmation de la direction, passage de relais à un collègue pour toute opération précise."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelle piste de financement pour la formation IA d'une banque ou d'une IMF malienne, et sinon quel budget prévoir ?",
            'paragraphes' => [
                "Rien n'est acquis. L'organisme national, le FAFPA (Fonds d'appui à la formation professionnelle et à l'apprentissage), traverse une réforme : l'OIT écrit le 28 juillet 2026 que la taxe de formation a laissé place à une subvention de l'État, son budget passant de 9,5 milliards de FCFA (2015) à 2,8 milliards (2022). Les 30 juin et 1er juillet 2026, Bamako a accueilli un atelier de validation de cette réforme. Le texte ne précise pas les conditions pour une entreprise ou un prestataire.",
                "Avant de constituer un dossier, interrogez le fonds par écrit : quelles lignes sont ouvertes, et un organisme établi hors du Mali est-il accepté ? Faute de réponse favorable, la dépense se prévoit dans le budget de formation annuel, étalée en trois temps : atelier pour la direction et la conformité, session par poste, suivi mensuel. Les licences d'assistants, souscrites par l'établissement, ne figurent pas au devis.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Quel budget prévoir pour former le personnel d'une banque ou d'une IMF du Mali ?",
            'intro' => "Pas de somme affichée : un devis en FCFA est rédigé une fois le cadrage terminé, formule par formule, et les modalités de règlement s'y fixent. Les offres des éditeurs bougent souvent ; leur page officielle fait foi.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée réunissant direction et conformité', 'Tour des usages déjà en place', 'Premières règles sur les données', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète pour un poste', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées sur des cas imaginaires tirés de vos procédures', 'Épreuve finale chronomètre en main', 'Attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Trois demi-journées espacées d\'un mois', 'Révision des modèles de réponse', 'Tâches nouvelles ajoutées au fil du suivi']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes constitués.",
                "Le nombre de séances à distance et leur durée.",
                "Le temps passé avec la conformité à préparer les cas imaginaires.",
                "Les inégalités d'équipement entre le siège et les caisses éloignées.",
                "Le suivi voulu une fois la session terminée.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels faux pas guettent une banque ou une IMF malienne qui s'équipe d'un assistant d'IA ?",
            'intro' => "Autant les écarter dès la rédaction des règles d'usage par la direction.",
            'items' => [
                ['titre' => "Copier une carte d'identité dans l'outil de son téléphone", 'texte' => "Un relevé ou une pièce d'identité collés dans un assistant personnel quittent le système de l'établissement. La conformité se réfère à la loi n° 2013-015 et à l'APDP ; l'outil permis est choisi par la direction, pas par l'agence."],
                ['titre' => "Mélanger 116, 75, 26 et 25 institutions", 'texte' => "Selon la source, la date et le périmètre, le décompte des institutions de microfinance change. Une présentation retient un seul chiffre, avec sa source, et n'en soustrait pas un autre."],
                ['titre' => "Prêter un portefeuille mobile à la mauvaise institution", 'texte' => "La liste de la BCEAO sépare des établissements de monnaie électronique et des partenariats avec des banques. Écrite de mémoire, la réponse de l'assistant risque de les confondre : on la compare à la fiche validée."],
                ['titre' => "Annoncer comme voté un texte encore en préparation", 'texte' => "En septembre 2025, la loi sur la microfinance n'était qu'un projet. Tant que la direction n'a pas confirmé son adoption, aucun courrier ne la présente comme une règle en vigueur."],
                ['titre' => "Prendre un total de l'Union pour un total du Mali", 'texte' => "Le résumé de la Commission bancaire chiffre toute l'UMOA, par exemple 82 298,8 milliards de FCFA de bilan. Chaque chiffre porte son périmètre, sa date et sa source."],
                ['titre' => "Demander à l'assistant de classer les emprunteurs", 'texte' => "La décision de crédit demeure humaine et motivée. L'assistant aide à monter le dossier ; il ne hiérarchise pas les demandeurs et ne tient pas lieu de visite."],
                ['titre' => "Ne former que les guichetiers", 'texte' => "Direction, conformité, contrôle interne et agents de crédit emploient les mêmes outils sur les mêmes téléphones. Les convier dès le premier atelier évite des consignes que nul n'applique."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier à Richard SALANON la formation IA des équipes d'une banque ou d'une IMF du Mali ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Mali figure parmi les quinze pays où Richard a travaillé, sur place ou à distance. Il peut former à distance les agents des banques et des IMF maliennes, Bamako étant à UTC+0 et Cotonou à UTC+1. La page des <a href=\"/realisations/\">réalisations</a> présente l'ensemble de ses projets.",
                "Passé par " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", Richard totalise " . $ans . " ans dans le numérique et déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées, tous publics confondus. Il est le créateur de <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Richard n'exerce pas le métier de banquier, n'assure la conformité d'aucun établissement et n'a reçu aucune certification d'éditeur d'IA. Accorder un crédit, recouvrer, appliquer la vigilance, déclarer un soupçon, interpréter un texte : tout cela revient aux professionnels et aux autorités. Avant la session, un questionnaire, un ou deux entretiens de cadrage et des documents à télécharger. À l'issue : des supports, une épreuve finale chronomètre en main, une attestation nominative ; la première demande reçoit une réponse sous 24 heures, et un canal direct reste ouvert le mois suivant. Pour aller plus loin, voir les formations <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>, <a href=\"/formations/cybersecurite-employes\">cybersécurité pour les employés</a>, <a href=\"/formations/chatbot-whatsapp\">chatbot WhatsApp</a> et <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, ou le parcours général <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous organiser une formation IA pour les agents de votre banque ou de votre IMF au Mali ?",
            'texte'  => "Présentez votre structure (banque ou IMF, taille du réseau), le nombre d'agents et d'agences, les postes concernés, les tâches qui prennent le plus de temps et votre ville. Vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut apprendre l'IA aux agents d'une banque ou d'une IMF au Mali ?", 'r' => "Richard SALANON, établi à Cotonou, par visioconférence et en français, avec ChatGPT, Claude ou Gemini, sur des travaux du métier et des cas imaginaires. Les limites viennent de la conformité de l'établissement ; aucun éditeur ne l'a certifié."],
        ['q' => "Quel est le poids des banques maliennes dans l'UMOA ?", 'r' => "Selon FinanceSAO, qui cite la Commission bancaire, le bilan des établissements de crédit maliens atteignait 9 076,2 milliards de FCFA fin 2025. Le total de l'Union étant de 82 298,8 milliards selon le résumé du rapport 2025, le rapport est d'environ 11 %."],
        ['q' => "Combien d'institutions de microfinance compte le Mali ?", 'r' => "La BCEAO en recense 116 à fin septembre 2025, dont 25 dans l'échantillon. D'autres publications avancent 75 (en 2023) ou 26 (article 44, fin 2025) : les périmètres diffèrent, on cite donc un chiffre avec sa source."],
        ['q' => "Que dit la BCEAO des impayés des SFD maliens ?", 'r' => "Pour les 25 SFD de l'échantillon, le taux de dégradation du portefeuille est de 6,1 % à fin septembre 2025, soit 12 347,1 millions de FCFA d'impayés sur 203 501,2 millions de crédits en cours. La formation ne change pas ce taux ; elle raccourcit la préparation des dossiers."],
        ['q' => "Une nouvelle loi sur la microfinance est-elle en vigueur au Mali ?", 'r' => "En septembre 2025, selon Ecofin, un texte était en préparation pour mieux protéger les déposants. Son adoption n'a pas été lue pour cette page : la direction ou le ministère la confirme avant toute mise à jour d'un modèle de courrier."],
        ['q' => "Quelle loi encadre les données personnelles au Mali ?", 'r' => "D'après Data Protection Africa, la loi n° 2013-015 du 21 mai 2013 et la loi n° 2017-070 du 18 décembre 2017, qui touche l'APDP. La lecture revient à la conformité ; les exercices reposent sur des données imaginaires."],
        ['q' => "Quelle différence entre un compte bancaire et un compte Orange Money ou Moov Money ?", 'r' => "Sur la liste de la BCEAO du 28 février 2026, Orange Money relève d'un établissement de monnaie électronique, Orange Finances Mobiles Mali, tandis que Moov Money est associé à BDM et Sotelma-Malitel. L'agent s'en tient à la fiche approuvée par sa conformité."],
        ['q' => "Que sait-on du PI-SPI au Mali ?", 'r' => "Financial Afrik rapporte, le 5 mars 2026, que 11 institutions du Mali figurent parmi les plus de 70 autorisées à ouvrir les services du PI-SPI au public. Les noms ne sont pas donnés : l'agent se réfère à la documentation de son établissement."],
        ['q' => "La formation peut-elle se donner en français seulement ?", 'r' => "Oui : supports et exercices sont rédigés en français, que la Constitution de 2023 désigne comme langue de travail. Une conversation tenue en langue nationale avec un client se fait relire par un collègue qui la parle."],
        ['q' => "Quel est l'écart d'heure entre Cotonou et Bamako ?", 'r' => "Une heure, toute l'année : Bamako est à UTC+0 et Cotonou à UTC+1, selon les liens de zones que publie l'IANA. Une séance fixée à 10 h à Cotonou s'ouvre à 9 h à Bamako."],
        ['q' => "Peut-on compter sur le FAFPA pour cette formation ?", 'r' => "Aucune prise en charge n'est confirmée. L'OIT (28 juillet 2026) décrit un fonds en réforme, dont le budget a reculé de 9,5 à 2,8 milliards de FCFA entre 2015 et 2022. Interrogez-le par écrit sur les lignes ouvertes."],
        ['q' => "Quel prix pour une session destinée à une banque ou une IMF du Mali ?", 'r' => "Pas de somme publiée : un devis en FCFA suit le cadrage, selon les effectifs, les séances, la préparation des cas imaginaires et le suivi. Les licences d'outils incombent à l'établissement."],
        ['q' => "Les participants reçoivent-ils une attestation ?", 'r' => "Oui, nominative, jointe au programme et aux supports. Elle ne vaut ni diplôme ni certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "FinanceSAO, Mali : classement des plus grandes banques en 2025 (d'après la Commission bancaire de l'UMOA)", 'url' => 'https://financesao.com/mali-classement-des-plus-grandes-banques-en-2025/', 'date' => '2026-10-27'],
        ['titre' => "Commission bancaire de l'UMOA, panorama des établissements assujettis au 31 décembre 2025", 'url' => 'https://cb-umoa.org/index%2Ephp/en/landscape-reporting-institutions', 'date' => '2026-10-27'],
        ['titre' => "Commission bancaire de l'UMOA, résumé du rapport annuel 2025", 'url' => 'https://www.cb-umoa.org/sites/default/files/RESUME%20DU%20RAPPORT%20ANNUEL%202025%20DE%20LA%20COMMISSION%20BANCAIRE.pdf', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, principaux indicateurs des SFD de l'UMOA au 30 septembre 2025 (22 janvier 2026)", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, établissements de monnaie électronique (données au 28 février 2026)", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, tableau de bord de l'inclusion financière dans l'UEMOA, année 2023", 'url' => 'https://www.bceao.int/sites/default/files/inline-files/Tableau%20de%20Bord%20de%20l%27inclusion%20financi%C3%A8re%20dans%20l%27UEMOA-2023_Edit%C3%A9.pdf', 'date' => '2026-10-27'],
        ['titre' => "Ecofin, le Mali prépare une loi pour encadrer la microfinance (19 septembre 2025)", 'url' => 'https://www.ecofinagency.com/news-finances/1909-48844-mali-drafts-new-law-to-tighten-oversight-of-microfinance-sector', 'date' => '2026-10-27'],
        ['titre' => "Financial Afrik, PI-SPI : liste actualisée des établissements autorisés (5 mars 2026)", 'url' => 'https://www.financialafrik.com/2026/03/05/paiements-instantanes-pi-spi-dans-luemoa-liste-actualisee-des-etablissements-autorises-par-la-bceao/', 'date' => '2026-10-27'],
        ['titre' => "Osiris, marché du mobile et services financiers numériques au Mali (19 mai 2024)", 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-27'],
        ['titre' => "Banque européenne d'investissement, soutien à Kafo Jiginew (25 février 2020)", 'url' => 'https://www.eib.org/en/press/all/2020-067-90000-smallholders-and-entrepreneurs-to-benefit-from-eib-backed-expansion-of-mali-s-leading-microfinance-institution', 'date' => '2026-10-27'],
        ['titre' => "OIT, réforme du Fonds d'appui à la formation professionnelle et à l'apprentissage du Mali (28 juillet 2026)", 'url' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund', 'date' => '2026-10-27'],
        ['titre' => "Data Protection Africa, fiche du Mali : loi n° 2013-015 et APDP", 'url' => 'https://dataprotection.africa/?p=1335', 'date' => '2026-10-27'],
        ['titre' => "Constitution du Mali de 2023, article 31 sur les langues", 'url' => 'https://axl.cefan.ulaval.ca/afrique/mali-const-2023.htm', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, titulaires d'un compte au Mali (Global Findex)", 'url' => 'https://data.worldbank.org/indicator/FX.OWN.TOTL.ZS?locations=ML', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, individus utilisant internet au Mali", 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=ML', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, accès à l'électricité au Mali", 'url' => 'https://data.worldbank.org/indicator/EG.ELC.ACCS.ZS?locations=ML', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, abonnements mobiles pour 100 habitants au Mali", 'url' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=ML', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Bamako, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : zones Africa/Abidjan et Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
