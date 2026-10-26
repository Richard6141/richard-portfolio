<?php
// ============================================================
// data/pages/formation-ia-entreprise-bobo-dioulasso.php · Page ville
// « Formation IA en entreprise à Bobo-Dioulasso » (vague pages ville IA).
// Faits relevés et relus à la source le 26/10/2026 : Sidwaya (recensement 2019,
// inondations 2024), Burkina24 (ZAD, D-CLIC, SNC 2026, Sira Labs), Financial Afrik
// (SOFITEX), Wakatsera (Bobo II, Bobo III), AllAfrica (Sitarail), Logistafrica
// (autoroute), Ecofin (Faso Code X), Osiris (Semaine du numérique 2019), Wikipédia
// (Université Nazi Boni), IANA (fuseaux). Aucune donnée de couverture par opérateur
// à Bobo-Dioulasso n'a pu être lue : la page le dit comme une limite.
// Aucune certification attribuée à Richard. Aucune somme pour une formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise à Bobo-Dioulasso : vos équipes de l\'usine, du négoce et des services travaillent avec ChatGPT, Claude ou Gemini sur leurs documents, et vérifient chaque résultat',
    'title'   => 'Former vos équipes à l’IA à Bobo-Dioulasso | Richard SALANON',
    'meta'    => 'Formation IA en entreprise à Bobo-Dioulasso : ChatGPT, Claude et Gemini sur vos documents, séances à distance en français, devis sur mesure en FCFA.',
    'en_bref' => 'À Bobo-Dioulasso, Richard SALANON, consultant basé à Cotonou, forme les équipes à l\'IA en visioconférence et en français, avec une heure de décalage : ChatGPT, Claude ou Gemini se travaillent sur les documents de l\'entreprise, et chaque résultat est vérifié avant usage. Un établissement de la ville ou un consultant installé dans la région peut aussi répondre au besoin. La formation part de tâches réelles : bons de livraison, appels d\'offres, réponses aux clients, comptes rendus. Le prix est fixé sur devis, en FCFA.',
    'publie'  => '2026-11-06',
    'maj'     => '2026-11-06',
    'schema'  => 'WebPage',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance, en français'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure : Bobo-Dioulasso à UTC+0, Cotonou à UTC+1'],
        ['l' => 'Devis', 'v' => 'Sur devis, en FCFA'],
        ['l' => 'Réponse', 'v' => 'sous ' . fait('delai_reponse')],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui forme les équipes à l\'IA à Bobo-Dioulasso, et comment choisir ?',
            'paragraphes' => [
                'Une entreprise de Bobo-Dioulasso a trois façons de former ses équipes à l\'IA : s\'adresser à un établissement ou à un organisme de la ville, faire venir un consultant installé dans la région, ou travailler avec un formateur qui intervient en visioconférence. Aucune n\'est meilleure en soi. Le bon choix dépend de ce que chaque salarié doit savoir faire seul, avec ses propres documents, dès la semaine qui suit la séance.',
                'Dans une ville où une même entreprise peut avoir un bureau en centre-ville, un entrepôt près de la gare et un site dans la zone industrielle, la différence entre une démonstration et une formation se voit vite. La démonstration montre ce qu\'un assistant sait faire sur un exemple soigneusement choisi. La formation prend le bon de livraison mal rempli, le courrier de relance en retard ou la synthèse d\'un cahier des charges, et apprend à obtenir un résultat utilisable, puis à le contrôler ligne par ligne avant de l\'envoyer.',
                'Avant de signer avec quiconque, demandez quatre choses par écrit. Les exercices se feront-ils sur les documents de l\'entreprise, rendus anonymes si nécessaire ? Qu\'est-ce que chaque participant saura refaire sans aide, et comment le vérifie-t-on en fin de session ? Que dit le prestataire des données personnelles des clients, des salariés et des patients ? Quels supports restent à l\'entreprise : consignes modifiables, modes opératoires, bibliothèque partagée ? Un prestataire sérieux répond sans difficulté, et sans critiquer ses confrères.',
                'Richard SALANON appartient à la troisième catégorie. Il forme à distance depuis Cotonou, en français, avec un décalage d\'une heure, sur les comptes et les documents de l\'entreprise. Il ne délivre pas de diplôme et n\'est certifié par aucun éditeur d\'IA : son travail consiste à installer, dans un service précis, deux ou trois gestes solides et une règle claire sur ce qui peut être confié à un assistant. Cette page décrit ce que cela donne à Bobo-Dioulasso, et laisse à la page du pays le cadre commun.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que fait vivre l\'économie de Bobo-Dioulasso, et que change-t-elle pour une équipe qui veut utiliser l\'IA ?',
            'paragraphes' => [
                'Bobo-Dioulasso est la deuxième ville du pays. Au recensement de 2019, elle comptait 904 920 habitants en zone urbaine, soit 16,9 % de la population urbaine du pays, contre 2 415 266 à Ouagadougou, d\'après Sidwaya, qui a rendu compte des résultats définitifs en juillet 2022. Ce poids explique que la ville ait ses propres chambres, ses propres marchés d\'affaires et ses propres chaînes de production, et pas seulement des antennes de la capitale.',
                'Le coton y tient une place à part. Le complexe de Bobo III de la SOFITEX regroupe, selon Wakatsera, un laboratoire de contrôle et de certification de semences, l\'usine d\'égrenage et un laboratoire de technologie du coton, sur 15 hectares, avec une capacité d\'environ 600 tonnes de coton graine par jour ; lors d\'une visite du 18 mars 2023, le ministre du Commerce l\'a qualifiée de plus grande usine d\'égrenage du pays. Le secteur traverse une période de changement : le 16 avril 2026, le Conseil des ministres a décidé la nationalisation de la SOFITEX, dont l\'État et ses organismes détenaient déjà 94 % du capital, et Financial Afrik rappelle que la production de coton graine est passée de 386 794 tonnes en 2023-2024 à 286 623 tonnes en 2024-2025.',
                'La logistique est l\'autre moteur. Le 16 février 2026, quatre locomotives GL 30, d\'un coût de plus de sept milliards de FCFA, ont été mises en service à Bobo-Dioulasso par Sitarail, d\'après AllAfrica, en présence du ministre de la Construction. Une autoroute à huit voies de 332 kilomètres entre Ouagadougou et Bobo-Dioulasso a été lancée le 16 décembre 2025, avec un passage inférieur prévu à l\'entrée de Bobo-Dioulasso, selon Logistafrica. Autour d\'un rail, d\'une route et d\'une usine d\'égrenage, le travail de bureau est fait de documents : factures, bons de livraison, courriers aux clients et aux transporteurs.',
                'Pour une équipe qui veut utiliser l\'IA, trois conséquences en découlent. Le travail est très documentaire : l\'assistant sert d\'abord à rédiger, trier et résumer. Les flux de la ville passent par une ligne ferroviaire et une route vers la capitale : la correspondance écrite avec des interlocuteurs éloignés compte beaucoup. Enfin, une équipe sans service informatique n\'a personne pour fixer des règles d\'usage : la formation les pose avec la direction.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés retenir sur Bobo-Dioulasso avant de former une équipe ?',
            'items' => [
                ['valeur' => '904 920', 'libelle' => 'Habitants de Bobo-Dioulasso en zone urbaine au recensement de 2019, soit 16,9 % de la population urbaine du pays', 'source' => 'Sidwaya, résultats définitifs du recensement (juillet 2022)', 'url' => 'https://www.sidwaya.info/statistiques-socio-demographiques-plus-de-20-millions-de-burkinabe-recenses-en-2019/'],
                ['valeur' => '162', 'libelle' => 'Parcelles aménagées dans la future Zone d\'activités diverses de Bobo-Dioulasso, sur environ 80 hectares, pour un coût d\'aménagement estimé à 10,8 milliards de FCFA', 'source' => 'Burkina24, 27 avril 2026', 'url' => 'https://burkina24.com/?p=439293'],
                ['valeur' => '86,4 MW', 'libelle' => 'Capacité du site de production de Bobo-Dioulasso après l\'inauguration de la centrale thermique Bobo II le 7 août 2026, contre 60 MW avant', 'source' => 'Wakatsera, 7 août 2026', 'url' => 'https://www.wakatsera.com/souverainete-energetique-plus-de-33-milliards-de-f-cfa-investis-dans-la-nouvelle-centrale-thermique-bobo-ii/'],
                ['valeur' => '332 km', 'libelle' => 'Longueur de l\'autoroute à huit voies Ouagadougou-Bobo-Dioulasso, lancée le 16 décembre 2025', 'source' => 'Logistafrica', 'url' => 'https://logistafrica.com/en/highlights/ouaga-bobo-corridor-a-200-billion-fcfa-self-funded-8-lane-highway-to-redefine-burkinabe-hinterland-flows/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle connexion, quelle électricité, quel matériel les équipes ont-elles à Bobo-Dioulasso ?',
            'paragraphes' => [
                'Sur la couverture mobile et la qualité de la connexion quartier par quartier, aucune mesure publique d\'un opérateur ou du régulateur n\'a pu être confirmée pour cette page. La formation ne suppose donc rien : elle s\'organise pour fonctionner avec une connexion moyenne et des coupures possibles, ce qui est aussi la meilleure préparation pour un salarié qui travaillera un jour depuis un entrepôt ou un véhicule.',
                'L\'électricité est un sujet mieux documenté. La SONABEL a inauguré le 7 août 2026 à Bobo-Dioulasso la centrale thermique Bobo II : trois groupes de 8,8 MW, soit 26,4 MW, qui portent la capacité du site de 60 à 86,4 MW, pour plus de 33 milliards de FCFA, financés par la société, d\'après Wakatsera. Le ministre de l\'Énergie, présent à la cérémonie, y a vu un pas vers la souveraineté énergétique. Une centrale ne garantit pas l\'absence de coupure dans un quartier donné : la formation prévoit donc que chaque participant charge son ordinateur avant la séance et garde un téléphone en partage de connexion.',
                'L\'eau est un autre risque. En juin 2024, des inondations ont causé des dégâts à Bobo-Dioulasso, et des opérateurs économiques des Hauts-Bassins ont financé le curage de caniveaux et d\'un bassin de rétention, pour plus de 18 millions de FCFA mobilisés, selon Sidwaya du 29 août 2024 ; la délégation communale leur a aussi demandé de poursuivre le curage de la zone industrielle. Une journée de travail peut donc se perdre pour une cause qui n\'a rien d\'informatique. Les séances sont découpées en blocs courts.',
                'Côté équipement, le minimum est un ordinateur par participant avec navigateur à jour, traitement de texte et tableur, plus un téléphone. Pour les personnes qui gèrent surtout depuis leur téléphone, une partie des exercices (classer des messages de clients, transformer des notes vocales en liste) se fait directement sur l\'application de l\'assistant, et l\'ordinateur sert aux tableaux et aux longs documents.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles ressources locales existent à Bobo-Dioulasso pour se former au numérique et à l\'IA ?',
            'paragraphes' => [
                'La ville accueille l\'Université Nazi Boni, établissement public installé à Nasso, à une quinzaine de kilomètres du centre, d\'après Wikipédia. Elle a débuté en septembre 1995 comme centre universitaire polytechnique, est devenue l\'université polytechnique de Bobo-Dioulasso en 1997 et porte son nom actuel depuis 2017 ; elle compte une École supérieure d\'informatique. Elle n\'est pas un prestataire de formation en entreprise : elle indique surtout que la ville dispose d\'un vivier de diplômés que les employeurs peuvent recruter, puis former à l\'usage quotidien d\'un assistant.',
                'Le numérique a plusieurs repères datés. Le 4 février 2023, l\'Agence universitaire de la Francophonie et l\'Université Nazi Boni ont tenu à Bobo-Dioulasso une séance d\'information sur le programme D-CLIC de l\'Organisation internationale de la Francophonie : 100 jeunes de 18 à 35 ans devaient y être formés, 50 à l\'université et 50 à Wakatlab, en filières de six mois (développement web et mobile, électronique embarquée et objets connectés) ou de trois mois (infonuagique), selon Burkina24. Le 26 octobre 2020, le projet Wuli de l\'incubateur Sira Labs a été lancé dans la ville, dans le cadre du projet E-Burkina : financé par la Banque mondiale pour un coût estimé à 275 millions de FCFA, il visait au moins 15 jeunes entreprises du numérique et 3 000 jeunes formés, d\'après Burkina24.',
                'En janvier 2026, Ecofin a rapporté qu\'un centre de formation numérique nommé Faso Code X devait ouvrir à Bobo-Dioulasso en février 2026, avec des filières d\'intelligence artificielle, d\'infonuagique, d\'automatisation des infrastructures numériques et de cybersécurité, en présentiel et en ligne, projet présenté par le président de la délégation consulaire de la Chambre de commerce. Aucune source lue ne confirme l\'ouverture : elle et les conditions d\'inscription se vérifient directement auprès de la Chambre de commerce.',
                'Deux événements ont fait de la ville un lieu de rendez-vous. La 15e Semaine du numérique, du 19 au 23 novembre 2019, y a été organisée pour la première fois, avec un salon international des TIC, d\'après Osiris. La 22e Semaine nationale de la culture y a été lancée le 25 avril 2026 sur le thème « Culture, jeunesse et transmission des valeurs sociales », avec le Ghana pour invité d\'honneur, selon Burkina24. Ces repères sont informatifs : cette page ne recommande aucune structure et ne les évalue pas.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels formats retenir à Bobo-Dioulasso, et comment s\'organise une séance à distance depuis Cotonou ?',
            'paragraphes' => [
                'Pour une entreprise de Bobo-Dioulasso, la formation se donne à distance, en visioconférence, depuis Cotonou. Le décalage est d\'une heure : la ville est à l\'heure de Greenwich (UTC+0) toute l\'année et Cotonou à UTC+1, d\'après la base des fuseaux horaires de l\'IANA. Une séance qui commence à 9 h à Bobo-Dioulasso commence donc à 10 h à Cotonou. Les plages les plus commodes sont de 8 h 30 à 11 h, et de 14 h 30 à 17 h pour les équipes qui préfèrent travailler après le déjeuner.',
                'Les durées et les effectifs sont ceux de la fiche de la formation : un atelier découverte d\'une demi-journée pour douze personnes au plus, une formation complète de deux jours en quatre demi-journées pour dix personnes au plus, des séances à distance de deux heures et demie, au nombre de cinq ou six, pour huit personnes au plus, et un accompagnement d\'une demi-journée par mois pendant trois mois. Ces formats se combinent. Pour une entreprise de Bobo-Dioulasso qui a plusieurs sites, par exemple un bureau en ville et un entrepôt ou une usine plus loin, les séances de deux heures et demie ont un avantage : chaque site peut se connecter depuis sa propre salle, et une coupure de courant n\'efface pas toute une journée.',
                'Un déplacement à Bobo-Dioulasso n\'est pas un format de départ : s\'il est demandé, il entre dans le devis comme un facteur de prix, après l\'échange de cadrage, et le devis dit ce qu\'il comprend. La plupart des équipes n\'en ont pas besoin, car le travail se fait sur leurs écrans, avec leurs documents.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format pour quelle équipe de Bobo-Dioulasso ?',
            'legende' => 'Durées et effectifs de la fiche de la formation. Tous les formats peuvent se donner en visioconférence ; le prix de chacun est fixé sur devis.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Pour quelle équipe de la ville'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction ou un service qui veut voir ce que l\'assistant fait sur ses propres documents avant de s\'engager'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Une équipe répartie entre un bureau en ville et un site plus éloigné, qui préfère des séances courtes à une longue journée'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service administratif, commercial ou logistique qui répète chaque semaine les mêmes écrits et veut un résultat mesuré sur sa tâche'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Une entreprise qui change d\'organisation ou de direction et veut garder les gestes dans la durée'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Que fait-on concrètement par métier à Bobo-Dioulasso, avec quel outil et pour quel résultat ?',
            'items' => [
                ['secteur' => 'Filière coton : bureaux d\'une société cotonnière, d\'une coopérative ou d\'un fournisseur d\'intrants', 'probleme' => 'La campagne produit des rapports de visite, des comptes rendus de réunion avec les producteurs et des courriers de relance, rédigés dans l\'urgence et souvent à partir de notes manuscrites.', 'solution' => 'Tâche : transformer des notes brutes en compte rendu avec décisions, responsables et échéances. Outil : un assistant comme Claude ou ChatGPT, avec un modèle de compte rendu de la maison. Résultat attendu : un texte prêt à relire et à diffuser, dont chaque chiffre est retrouvé dans les notes.'],
                ['secteur' => 'Transport, rail et transit entre Bobo-Dioulasso, Abidjan et Ouagadougou', 'probleme' => 'Les dossiers mêlent factures, bons de livraison, courriers aux clients et aux transporteurs, parfois en deux langues, et une erreur de quantité se paie.', 'solution' => 'Tâche : extraire d\'une facture ou d\'un bon de livraison les quantités, les dates et les références, puis rédiger la relance ou la réponse au client. Outil : Gemini ou ChatGPT, avec un tableur pour le recalcul. Résultat attendu : un tableau de suivi à jour et un courrier relu, avec les totaux recomptés à la main.'],
                ['secteur' => 'Entreprises qui s\'installent ou investissent dans la zone d\'activités diverses', 'probleme' => 'Un dossier de candidature à une parcelle, un plan d\'investissement ou un échéancier doit respecter un cahier des charges et des délais, faute de quoi la parcelle peut être reprise.', 'solution' => 'Tâche : confronter le dossier au cahier des charges, liste d\'exigences par exigence, et préparer la note de présentation. Outil : un assistant qui lit le document fourni et cite le passage de chaque point. Résultat attendu : une liste de points manquants que le dirigeant vérifie dans le texte officiel avant de déposer.'],
                ['secteur' => 'Commerce de gros et de détail, négoce', 'probleme' => 'Les commandes et les questions des clients arrivent par messages vocaux et par WhatsApp, sans classement, et les relances de paiement attendent la fin de semaine.', 'solution' => 'Tâche : classer les messages par demande, transformer les notes vocales en liste de commandes, rédiger des relances fermes et courtoises. Outil : l\'application de l\'assistant sur téléphone, puis le tableur. Résultat attendu : un tableau de commandes lisible par toute l\'équipe et des relances validées avant envoi.'],
                ['secteur' => 'Chantiers et fournisseurs de travaux (route, énergie)', 'probleme' => 'Les chantiers de la région imposent des offres, des rapports d\'avancement et des courriers de réclamation, avec des pièces nombreuses et des délais courts.', 'solution' => 'Tâche : résumer un cahier des charges en listant les exigences et les pièces à fournir, puis préparer le rapport d\'avancement. Outil : un assistant avec la consigne « cite la page de chaque exigence ». Résultat attendu : une trame de réponse dont chaque exigence renvoie à la page du cahier des charges.'],
                ['secteur' => 'Organisation d\'événements, établissements de formation et associations', 'probleme' => 'Une ville qui accueille des rendez-vous nationaux comme la Semaine nationale de la culture produit des programmes, des communiqués et des dossiers de partenaires à écrire vite.', 'solution' => 'Tâche : rédiger un communiqué, un programme et un message aux partenaires à partir d\'une même fiche d\'information. Outil : un assistant avec un modèle de communiqué validé. Résultat attendu : des textes cohérents entre eux, dont les dates, lieux et noms propres sont contrôlés sur la fiche de départ.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données une entreprise de Bobo-Dioulasso doit-elle respecter avant de confier un document à un assistant ?',
            'paragraphes' => [
                'Le cadre légal est celui du pays : la loi sur la protection des données personnelles et l\'autorité de contrôle sont décrites sur la page <a href="/formations/ia-en-entreprise/burkina-faso">formation IA en entreprise au Burkina Faso</a>, qui s\'applique à Bobo-Dioulasso comme à Ouagadougou. Ce qui change dans la ville, c\'est la nature des documents. Une société cotonnière, une coopérative ou une entreprise de transit manie des listes de producteurs, de chauffeurs, de clients et de salariés, avec des noms, des numéros de téléphone et des montants. Avant d\'en coller une ligne dans un assistant, la formation apprend à les remplacer par des repères neutres, puis à ne rien soumettre de ce qui doit rester dans l\'entreprise.',
                'Les administrations et les structures publiques de la ville ajoutent une difficulté : leurs courriers engagent une signature, et leurs dossiers concernent des habitants. Dans l\'organisation d\'une commune, d\'une chambre ou d\'un établissement de santé ou d\'enseignement, l\'assistant peut aider à reformuler un courrier modèle ou à résumer une note, mais aucun dossier d\'usager, de patient ou d\'élève identifiable ne lui est soumis. Quand l\'organisation d\'une entreprise change, comme celle de la SOFITEX en 2026, la règle de données se réécrit par écrit avec la direction avant d\'être enseignée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte une formation IA à Bobo-Dioulasso, et qu\'est-ce qui fait varier le prix ?',
            'paragraphes' => [
                'Aucune somme n\'est publiée sur cette page : le prix d\'une formation à Bobo-Dioulasso est fixé sur devis, en FCFA, après un échange de cadrage qui décrit l\'équipe, ses tâches et les outils déjà en place. Le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, et les abonnements aux assistants restent au nom de l\'entreprise : ils ne font pas partie du prix de la formation.',
                'Plusieurs éléments font varier le devis : le nombre de participants et de groupes, le format retenu et le nombre de séances, le temps de préparation des exercices sur vos documents et leur anonymisation, l\'accompagnement après la session, la langue des supports et, si un déplacement est demandé, le lieu. Les versions gratuites des assistants suffisent pour apprendre la méthode ; les abonnements payants se décident après la formation, sur ce qui a servi, en consultant les pages tarifaires des éditeurs à la date de la décision, car leurs offres changent souvent.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent quand une équipe de Bobo-Dioulasso démarre l\'IA ?',
            'intro' => 'Ces écarts reviennent d\'une entreprise à l\'autre ; dans une ville de commerce, de transport et de coton, plusieurs ont une forme particulière.',
            'items' => [
                ['titre' => 'Compter sur la connexion sans plan de repli', 'texte' => 'Une séance dépend d\'une liaison que la page ne peut pas garantir quartier par quartier. Chaque participant télécharge ses documents avant le début, charge son ordinateur et garde un téléphone en partage de connexion.'],
                ['titre' => 'Envoyer un chiffre non recompté', 'texte' => 'Dans les écrits de logistique et de négoce, un tonnage, un prix ou une date faux coûte cher. Les totaux importants sont refaits à la main dans le tableur avant tout envoi.'],
                ['titre' => 'Coller une liste de producteurs, de clients ou de salariés dans un compte personnel', 'texte' => 'Le geste est rapide et il expose des personnes. Les listes sont anonymisées ou restent dans l\'entreprise, et les exercices se font sur des copies sans noms ni numéros.'],
                ['titre' => 'Fonder un dossier sur une citation non vérifiée', 'texte' => 'Un assistant peut citer un article, un chiffre ou une étude qui n\'existent pas. Pour une réponse à un appel d\'offres ou un dossier d\'investissement, chaque référence se retrouve dans le texte officiel, sinon elle disparaît.'],
                ['titre' => 'Supposer que l\'assistant comprend les langues locales', 'texte' => 'Les messages en dioula reçus des clients ou des fournisseurs doivent être relus par un locuteur avant toute réponse ou traduction envoyée.'],
                ['titre' => 'Former tout le monde une fois, puis ne plus rien mesurer', 'texte' => 'Sans mesure du temps de la tâche cible à un mois et à trois mois, l\'usage retombe. Un référent désigné tient la bibliothèque de consignes et relit ce qui sert.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes de Bobo-Dioulasso à l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises du Burkina Faso. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Ses réalisations sont présentées sur la page des <a href="/realisations/">réalisations</a>.',
                'Sa façon de former se résume en quelques engagements vérifiables : une réponse sous ' . fait('delai_reponse') . ', un cadrage qui peut conclure qu\'une formation plus courte suffit, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise et une attestation nominative de fin de formation. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Les outils se choisissent sur la base du travail de l\'équipe, et les séances se donnent à distance, en français, depuis Cotonou.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe de Bobo-Dioulasso à l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et le format souhaité : vous recevez une réponse sous ' . fait('delai_reponse') . ', puis une proposition et un devis détaillé en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA à Bobo-Dioulasso ?", 'r' => "Ces trois titres décrivent des rôles voisins et aucun n’est réglementé. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant à Bobo-Dioulasso : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA à Bobo-Dioulasso ?", 'r' => "Commencez par une tâche répétitive et mesurable, par exemple la rédaction de courriers, le résumé de comptes rendus ou le classement de documents, et par la règle sur les données qui peuvent quitter l’entreprise. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise à Bobo-Dioulasso, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mon équipe à l\'IA à Bobo-Dioulasso ?', 'r' => 'Un établissement ou un organisme de la ville, un consultant installé dans la région, ou un formateur qui intervient en visioconférence comme Richard SALANON, basé à Cotonou. Le bon choix dépend de la tâche à transformer, des documents à utiliser et de ce que chaque participant saura refaire seul après la séance.'],
        ['q' => 'La formation se donne-t-elle sur place à Bobo-Dioulasso ou à distance ?', 'r' => 'À distance, en visioconférence, en français. Un déplacement n\'est pas un format de départ : s\'il est demandé, il est traité dans le devis comme un facteur de prix, après l\'échange de cadrage.'],
        ['q' => 'Quel est le décalage horaire entre Bobo-Dioulasso et Cotonou ?', 'r' => 'Une heure. Bobo-Dioulasso est à UTC+0 toute l\'année et Cotonou à UTC+1. Une séance qui commence à 9 h à Bobo-Dioulasso commence à 10 h à Cotonou ; les plages de 8 h 30 à 11 h et de 14 h 30 à 17 h sont les plus commodes.'],
        ['q' => 'Que faire si la connexion ou le courant coupe pendant une séance ?', 'r' => 'Les séances sont découpées en blocs courts. Chaque participant télécharge ses documents avant la séance, charge son ordinateur et garde un téléphone en partage de connexion. Aucune mesure de couverture par opérateur à Bobo-Dioulasso n\'est citée sur cette page.'],
        ['q' => 'Combien de personnes peut-on former à la fois ?', 'r' => 'Douze au plus pour l\'atelier d\'une demi-journée, dix au plus pour la formation de deux jours, huit au plus pour les séances à distance de deux heures et demie. Au-delà, il devient impossible de regarder le travail de chacun sur ses propres documents.'],
        ['q' => 'Combien coûte une formation IA à Bobo-Dioulasso ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Il dépend du nombre de participants, du format, de la préparation des exercices sur vos documents, de l\'accompagnement et, le cas échéant, d\'un déplacement. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'La formation convient-elle à une entreprise du coton, du transport ou du négoce ?', 'r' => 'Oui, car elle part des écrits de chaque métier : comptes rendus de réunion, factures et bons de livraison, relances de paiement, réponses aux clients, dossiers de candidature ou d\'appel d\'offres. Les exercices se font sur vos documents, rendus anonymes si nécessaire.'],
        ['q' => 'Faut-il acheter des abonnements avant la séance ?', 'r' => 'Non. Les versions gratuites des assistants suffisent pour apprendre la méthode. Les abonnements se décident après la formation, sur ce qui a servi, et restent au nom de l\'entreprise.'],
        ['q' => 'Où trouver d\'autres formations au numérique à Bobo-Dioulasso ?', 'r' => 'La ville compte notamment l\'Université Nazi Boni et, d\'après Ecofin, un projet de centre de formation numérique nommé Faso Code X porté avec la Chambre de commerce, dont l\'ouverture se vérifie directement auprès de la Chambre. Cette page les cite comme repères et ne recommande aucune structure.'],
        ['q' => 'Quelles règles de données s\'appliquent à Bobo-Dioulasso ?', 'r' => 'Celles du Burkina Faso, décrites sur la page du pays. Dans tous les cas, aucune liste de producteurs, de clients, de salariés ou de patients identifiables n\'est soumise à un assistant : elle est anonymisée ou reste dans l\'entreprise.'],
        ['q' => 'Reçoit-on une attestation de formation ?', 'r' => 'Oui, une attestation nominative de fin de formation par participant, avec le programme et les supports. Ce n\'est ni un diplôme ni une certification d\'éditeur : Richard SALANON n\'est certifié par aucun éditeur d\'IA.'],
    ],

    'sources' => [
        ['titre' => 'Sidwaya, résultats définitifs du recensement de 2019 : population urbaine de Bobo-Dioulasso (juillet 2022)', 'url' => 'https://www.sidwaya.info/statistiques-socio-demographiques-plus-de-20-millions-de-burkinabe-recenses-en-2019/', 'date' => '2026-10-26'],
        ['titre' => 'Burkina24, zone d\'activités diverses de Bobo-Dioulasso (27 avril 2026)', 'url' => 'https://burkina24.com/?p=439293', 'date' => '2026-10-26'],
        ['titre' => 'Wakatsera, inauguration de la centrale thermique Bobo II (7 août 2026)', 'url' => 'https://www.wakatsera.com/souverainete-energetique-plus-de-33-milliards-de-f-cfa-investis-dans-la-nouvelle-centrale-thermique-bobo-ii/', 'date' => '2026-10-26'],
        ['titre' => 'Logistafrica, autoroute Ouagadougou-Bobo-Dioulasso (lancement du 16 décembre 2025)', 'url' => 'https://logistafrica.com/en/highlights/ouaga-bobo-corridor-a-200-billion-fcfa-self-funded-8-lane-highway-to-redefine-burkinabe-hinterland-flows/', 'date' => '2026-10-26'],
        ['titre' => 'Wakatsera, SOFITEX : le coton qui fait la fierté du Burkina sur le marché international (20 mars 2023)', 'url' => 'https://www.wakatsera.com/?p=83463', 'date' => '2026-10-26'],
        ['titre' => 'Financial Afrik, la SOFITEX nationalisée (16 avril 2026)', 'url' => 'https://www.financialafrik.com/2026/04/16/coton-burkina-faso-la-sofitex-nationalisee-sur-fond-de-crise/', 'date' => '2026-10-26'],
        ['titre' => 'AllAfrica, Sitarail se dote de 4 nouvelles locomotives (17 février 2026)', 'url' => 'https://fr.allafrica.com/stories/202602170401.html', 'date' => '2026-10-26'],
        ['titre' => 'Sidwaya, gestion des inondations à Bobo et opérateurs économiques des Hauts-Bassins (29 août 2024)', 'url' => 'https://www.sidwaya.info/gestion-des-inondations-a-bobo-le-gouvernement-reconnaissant-aux-operateurs-economiques-des-hauts-bassins/', 'date' => '2026-10-26'],
        ['titre' => 'Wikipédia, Université Nazi-Boni', 'url' => 'https://fr.wikipedia.org/wiki/Université_Nazi_Boni', 'date' => '2026-10-26'],
        ['titre' => 'Burkina24, le programme D-CLIC de l\'OIF s\'ouvre aux jeunes de Bobo-Dioulasso (février 2023)', 'url' => 'https://burkina24.com/?p=315577', 'date' => '2026-10-26'],
        ['titre' => 'Burkina24, lancement de l\'incubateur Sira Labs à Bobo-Dioulasso (octobre 2020)', 'url' => 'https://burkina24.com/?p=232270', 'date' => '2026-10-26'],
        ['titre' => 'Ecofin, Burkina Faso : le centre de formation numérique Faso Code X à Bobo-Dioulasso (26 janvier 2026)', 'url' => 'https://www.ecofinagency.com/news-digital/2601-52277-burkina-faso-to-launch-faso-code-x-digital-training-center-in-bobo-dioulasso', 'date' => '2026-10-26'],
        ['titre' => 'Osiris, la 15e Semaine du numérique à Bobo-Dioulasso (novembre 2019)', 'url' => 'https://www.osiris.sn/semaine-du-numerique-la-15e-edition-bat-son-plein-a-bobo-dioulasso.html', 'date' => '2026-10-26'],
        ['titre' => 'Burkina24, lancement de la 22e Semaine nationale de la culture à Bobo-Dioulasso (25 avril 2026)', 'url' => 'https://burkina24.com/?p=439107', 'date' => '2026-10-26'],
        ['titre' => 'IANA, base des fuseaux horaires (Afrique)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-en-entreprise'],
        'services'   => ['integration-ia-entreprise', 'formation-en-entreprise'],
    ],
];
