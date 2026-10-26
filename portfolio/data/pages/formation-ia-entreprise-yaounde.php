<?php
// ============================================================
// data/pages/formation-ia-entreprise-yaounde.php · Page ville « Formation IA en entreprise à Yaoundé ».
// Faits relevés le 2026-10-26 : Wikipédia (Yaoundé), CityPopulation (BUCREP), DataReportal 2026,
// Digital Business Africa (atelier MINPOSTEL, SIN 2026, E-Gov'A, IAI Cameroun), Camer.be (stratégie
// nationale), WeAreTech Africa, AFP (coupure de 2021), Ecomatin (Eneo, janvier 2026),
// tarifs OpenAI, Anthropic, Google, Microsoft relevés au navigateur.
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise à Yaoundé : vos équipes d’administration, de projet et de direction rédigent, synthétisent et vérifient avec ChatGPT, Claude ou Gemini, selon des règles de données écrites',
    'title'   => 'Former vos équipes à l’IA à Yaoundé | Richard SALANON',
    'meta'    => 'Formation IA à Yaoundé pour les équipes d’administration, de projet et de direction : tâches par métier, règles de données, coûts d’éditeur, devis en FCFA.',
    'en_bref' => 'Richard SALANON, consultant basé à Cotonou, forme à distance les équipes de Yaoundé à l’IA : ministères, organismes publics, ONG, bureaux de projet, écoles et PME apprennent à rédiger, synthétiser et vérifier avec ChatGPT, Claude ou Gemini, sur leurs propres documents. Yaoundé et Cotonou partagent le même fuseau, UTC+1, donc aucune séance ne se décale. Le devis est établi en FCFA, après un échange de cadrage. Cette page traite ce qui est propre à Yaoundé, le cadre national étant sur la page du Cameroun.',
    'publie'  => '2026-11-30',
    'maj'     => '2026-11-30',
    'schema'  => 'WebPage',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former les équipes à l’IA à Yaoundé, et comment choisir ?',
            'paragraphes' => [
                'Une équipe de Yaoundé peut se former auprès d’une école, d’un institut ou d’un formateur indépendant. Le bon choix est celui qui travaille sur vos documents réels, dans vos comptes, avec des règles de données écrites avant le premier exercice. Richard SALANON propose ce format à distance depuis Cotonou, en français ou en anglais, avec un devis en FCFA.',
                'La capitale concentre déjà plusieurs offres de formation à l’IA, et c’est une bonne nouvelle pour le lecteur : il peut comparer. Pour comparer utilement, mieux vaut laisser de côté les promesses générales et poser des questions de service. Quelle tâche de mon équipe sera traitée le premier matin ? Sur quel document, le nôtre ou un exemple ? Qui, dans l’équipe, saura refaire le geste seul un mois plus tard ? Une offre qui répond précisément à ces trois questions est une offre de travail, pas une démonstration d’outil.',
                'Un service administratif ne ressemble pas à une entreprise commerciale. Une note à signer passe par plusieurs mains, un compte rendu porte des noms d’agents, un dossier de marché contient des offres confidentielles, un rapport destiné à un bailleur doit retrouver chaque chiffre à sa page. Une formation utile à Yaoundé commence donc par ces contraintes : qui valide, quel document peut sortir de l’organisation, quel outil est permis. L’outil vient ensuite.',
                'Trois critères suffisent pour trancher entre deux propositions. Le premier est la matière : les exercices partent-ils de vos courriers, de vos notes de synthèse, de vos tableaux de suivi ? Le deuxième est la règle : la formation produit-elle une grille écrite de ce qu’on peut confier à un assistant ? Le troisième est la trace : que reste-t-il à l’équipe, en bibliothèque de consignes et en modes opératoires, quand le formateur a quitté la visioconférence ?',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que fait vivre l’économie de Yaoundé, et qu’est-ce que cela change pour une équipe qui utilise l’IA ?',
            'paragraphes' => [
                'Yaoundé vit d’abord de l’administration et des services. Capitale politique du Cameroun, chef-lieu de la région du Centre et du département du Mfoundi, la ville abrite les sièges des institutions, des ministères et des administrations, selon Wikipédia (page lue le 26 octobre 2026). L’économie y est tertiaire, complétée par des industries légères comme les brasseries, les scieries, le tabac, les papeteries et les matériaux de construction, et par une économie informelle très présente.',
                'La géographie des employeurs se lit par quartier. Le Centre administratif regroupe les services de l’État. L’Hippodrome, près de l’hôtel de ville, est le quartier des banques. Bastos, quartier résidentiel, accueille des ambassades : 52 pays y étaient représentés en 2021 selon la même page. Mokolo est le quartier commercial du centre-ouest, avec son grand marché ; les marchés Mfoundi et Central comptent parmi les plus vastes de la ville. Chaque quartier produit un type de document différent, et donc un type d’exercice différent.',
                'La taille de la ville compte aussi. Le BUCREP projette 3 762 900 habitants à Yaoundé au 1er janvier 2025, contre 1 817 524 au recensement de 2005, d’après CityPopulation. En vingt ans, la population a plus que doublé, et les services ont grossi avec elle : plus de dossiers, plus de comptes rendus, plus de rapports à produire par des équipes qui n’ont pas toujours doublé. C’est précisément là qu’un assistant d’IA aide, à condition d’être maîtrisé.',
                'Ce que cela change pour une formation est concret. Un agent d’un ministère rédige des notes et des correspondances normées. Un chargé de projet d’ONG ou de bureau d’études prépare des rapports pour des bailleurs, souvent en deux langues. Une banque de l’Hippodrome ou une assurance traite des courriers clients et des dossiers. Une PME de Mokolo ou de Biyem-Assi gère des commandes reçues sur téléphone. Les exercices sont donc écrits par type de document, pas par secteur abstrait.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent Yaoundé et son environnement numérique ?',
            'items' => [
                ['valeur' => '3 762 900', 'libelle' => 'Habitants de Yaoundé en projection du BUCREP au 1er janvier 2025, contre 1 817 524 au recensement du 11 novembre 2005', 'source' => 'CityPopulation, d’après le BUCREP', 'url' => 'https://citypopulation.de/en/cameroon/cities/'],
                ['valeur' => '7', 'libelle' => 'Communes d’arrondissement de la communauté urbaine de Yaoundé, sur 304 km² dont 183 km² urbanisés', 'source' => 'Wikipédia, Yaoundé', 'url' => 'https://fr.wikipedia.org/wiki/Yaound%C3%A9'],
                ['valeur' => '41,9 %', 'libelle' => 'Part de la population camerounaise qui utilisait internet en octobre 2025, soit 12,6 millions de personnes (chiffre national : aucune mesure propre à Yaoundé n’est publiée)', 'source' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon'],
                ['valeur' => '60 000', 'libelle' => 'Spécialistes en IA que la stratégie nationale vise à former d’ici 2040, dont 40 % de femmes, selon la présentation de juillet 2025', 'source' => 'WeAreTech Africa, 10 juillet 2025', 'url' => 'https://www.wearetech.africa/fr/fils/actualites/tech/60-000-talents-ia-a-former-d-ici-2040-un-defi-de-taille-pour-le-cameroun'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle connexion et quelle électricité les équipes de Yaoundé ont-elles réellement ?',
            'paragraphes' => [
                'Les équipes de bureau de Yaoundé suivent une visioconférence sans difficulté majeure, mais aucun chiffre public ne mesure la connexion de la ville elle-même. Les données disponibles sont nationales : 41,9 % d’internautes et 96,4 % de connexions mobiles en octobre 2025, selon DataReportal, avec un débit fixe médian de 11,01 Mbit/s. La formation se prépare donc comme si la connexion pouvait faiblir, sans supposer qu’elle le fera.',
                'Côté électricité, une coupure de 2021 donne la mesure du risque. Selon l’AFP, reprise par Connaissance des énergies, un incident sur une ligne de transport alimentant la capitale a privé de courant une soixantaine de quartiers sur la centaine que compte Yaoundé, à partir du 24 mars 2021, après un incident sur une ligne de transport la veille ; Eneo avait déjà dû réparer, après de gros orages, une grande ligne de transport. En janvier 2026, Eneo a annoncé des délestages dans le Nord, l’Extrême-Nord et l’Adamaoua ; Yaoundé n’y est pas citée, mais l’opérateur a dit que le réseau interconnecté du Sud subissait aussi des contraintes, d’après Ecomatin.',
                'La conséquence pratique est simple et elle s’applique à chaque séance. Les documents d’exercice sont envoyés la veille et enregistrés sur chaque poste. Les consignes sont préparées dans un fichier texte, puis collées en une fois, ce qui limite le temps de connexion. Les participants qui dépendent d’un groupe électrogène ou d’une batterie le disent au cadrage, et la séance se cale sur leur plage d’alimentation la plus sûre. Une coupure de vingt minutes n’annule plus rien : l’exercice de relecture reprend hors ligne.',
                'Le téléphone mérite une règle propre. Beaucoup d’agents découvrent l’IA sur mobile, où l’on rédige un message ou reformule une phrase sans peine. L’analyse d’un tableau ou la relecture d’un rapport de trente pages demande un ordinateur. La formation distingue donc, pour chaque tâche, ce qui se fait sur téléphone et ce qui attend le poste de bureau, afin que personne ne passe une heure à lire un tableur sur un écran de six pouces.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles ressources locales existent à Yaoundé pour apprendre ou suivre l’IA ?',
            'paragraphes' => [
                'Yaoundé offre plusieurs repères publics et académiques, utiles à connaître avant de budgéter une formation. Ce sont des repères, pas des recommandations commerciales : une équipe qui veut suivre l’actualité de l’IA dans la capitale peut s’y reporter, indépendamment de la formation retenue.',
                'Côté enseignement supérieur, la ville compte l’Université de Yaoundé I à Ngoa-Ekellé et l’Université de Yaoundé II à Soa, ainsi que des écoles comme l’École nationale supérieure polytechnique, l’ENAM, l’EMIA, l’IRIC, SUP’PTIC et l’ESSTIC, et des établissements privés dont l’UCAC, ouverte en 1991, selon Wikipédia. Le 15 mai 2025, la chaire UNESCO ACCES-TIC de l’IAI Cameroun a organisé à Yaoundé une conférence internationale sur le thème « Intelligence artificielle et développement durable en Afrique », d’après Digital Business Africa.',
                'Côté pouvoirs publics, la Stratégie nationale de l’intelligence artificielle a été adoptée le 8 juillet 2025 au Palais des Congrès de Yaoundé, à l’issue de la deuxième édition des Concertations nationales sur l’IA, qui ont réuni plus de 400 participants et un hackathon de dix équipes sur 72 heures, selon Camer.be. Le MINPOSTEL a ensuite organisé les 17 et 18 février 2026 un atelier sur l’IA destiné aux administrations publiques, ouvert par la ministre des Postes et Télécommunications, en présence du ministre de la Fonction publique et de la Réforme administrative, d’après Digital Business Africa.',
                'La Semaine de l’innovation numérique, organisée par le MINPOSTEL, a tenu sa cinquième édition à Yaoundé du 22 juin au 31 juillet 2026, sur le thème de la protection du cyberespace face aux dérives de l’IA, avec un concours national des meilleurs projets TIC. Le salon E-Gov’A, consacré à l’IA et à l’e-gouvernance, était annoncé à Yaoundé du 14 au 16 octobre 2026 (première édition) sous le haut patronage du MINPOSTEL ; les comptes rendus se trouvent auprès des organisateurs. Aucun de ces événements ne remplace une formation d’équipe, mais ils donnent le vocabulaire commun que vos agents entendront.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que retenir de ces repères pour une équipe de Yaoundé ?',
            'legende' => 'Repères relevés le 26 octobre 2026. Ils situent le contexte ; ils ne constituent ni une prise en charge ni un programme de formation des agents.',
            'entetes' => ['Repère', 'Date', 'Ce que cela apporte à une équipe'],
            'lignes'  => [
                ['Stratégie nationale de l’IA, Palais des Congrès', '8 juillet 2025', 'Un vocabulaire public commun : intégrer l’IA dans la gouvernance, protéger les données, bâtir un cadre éthique'],
                ['Atelier du MINPOSTEL pour les administrations', '17 et 18 février 2026', 'Un signal que l’usage de l’IA dans l’administration est discuté au plus haut niveau, avec la protection du citoyen au premier plan'],
                ['Semaine de l’innovation numérique', '22 juin au 31 juillet 2026', 'Un rendez-vous annuel où suivre les projets TIC camerounais'],
                ['Salon E-Gov’A', '14 au 16 octobre 2026 (annoncé)', 'Un rendez-vous, passé à la date de lecture, où voir comment des services publics intègrent l’IA'],
                ['Objectif de 60 000 spécialistes en IA', 'D’ici 2040', 'Une cible nationale de formation de spécialistes : elle ne dit rien de la formation des équipes non techniques, que la présente formation vise'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats choisir à Yaoundé : atelier, deux jours, séances à distance ou accompagnement ?',
            'legende' => 'Les formats se combinent. Effectifs et durées sont ceux de la fiche IA en entreprise. À Yaoundé, tous se donnent à distance.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir à Yaoundé'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction, un cabinet ou une cellule de communication qui veut voir l’IA sur ses propres courriers avant d’investir'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service dont les agents rédigent déjà avec un assistant, sans règle commune, ou une tâche répétitive volumineuse'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes dont les agents ne peuvent pas se libérer deux jours de suite, ou réparties entre plusieurs bâtiments, plusieurs villes ou des missions de terrain'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes, mesurer ce qui sert et étendre à d’autres tâches'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment s’organise une formation à distance entre Cotonou et Yaoundé ?',
            'paragraphes' => [
                'Yaoundé et Cotonou sont toutes deux en UTC+1, d’après la base de fuseaux de l’IANA : le décalage horaire est nul toute l’année, et aucune séance ne se décale. Les plages utiles se calent sur la journée de bureau de votre structure. Les créneaux les plus fréquents sont le matin, de 8 h à 12 h, ou l’après-midi, de 14 h à 17 h, selon les heures de présence de vos agents ; ils se fixent avec vous au cadrage.',
                'Une séance à distance s’organise comme une salle de formation, avec ses règles. Un lien de visioconférence est envoyé la veille. Chaque participant partage son écran à son tour. Les documents d’exercice arrivent à l’avance, déjà anonymisés. Le formateur regarde les demandes écrites et les réponses de chacun en direct, ce qui est possible parce que les groupes sont petits : huit personnes au plus en séances à distance.',
                'Le déplacement à Yaoundé n’est pas nécessaire pour suivre la formation. Pour mémoire, la fiche IA en entreprise prévoit que le lieu, qu’il s’agisse de vos locaux, d’une salle louée ou d’un déplacement hors de Cotonou, fait varier le prix : si votre direction préfère une séance en salle, le facteur déplacement est détaillé au devis, en FCFA, et non ajouté d’office. Une formule hybride est possible : une séance de lancement en salle, puis des séances à distance.',
                'Les échanges entre séances passent par un canal écrit, courriel ou messagerie, et le formateur reste joignable le mois suivant pour les questions d’application, comme le prévoit la fiche IA en entreprise. Les supports sont remis dans un format que l’organisation peut modifier, en français, en anglais ou dans les deux langues, ce qui compte pour les structures qui produisent des documents bilingues.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme pour quel métier à Yaoundé ?',
            'items' => [
                ['secteur' => 'Cellule de communication ou secrétariat d’un ministère', 'probleme' => 'Les communiqués, les discours et les comptes rendus de réunion se préparent dans l’urgence, souvent à partir de notes prises à la main et de textes antérieurs à respecter.', 'solution' => 'Tâche : transformer des notes brutes en compte rendu avec décisions, responsables et échéances. Outil : Claude ou ChatGPT, avec un compte rendu déjà validé comme modèle. Résultat attendu : un projet de texte relu ligne à ligne par l’agent, qui retrouve chaque décision dans ses notes avant de le transmettre à sa hiérarchie.'],
                ['secteur' => 'Direction des affaires financières et des marchés publics', 'probleme' => 'Un dossier d’appel d’offres ou un rapport d’exécution compte des dizaines de pages, des tableaux de prix et des délais à comparer.', 'solution' => 'Tâche : résumer un cahier des charges en citant la page de chaque exigence, puis comparer deux versions d’un document. Outil : Claude ou NotebookLM, sur des pièces sans données nominatives ni offres de concurrents. Résultat attendu : une liste d’exigences vérifiée contre l’original, jamais substituée à lui.'],
                ['secteur' => 'ONG, projet financé ou bureau d’études basé à Yaoundé', 'probleme' => 'Les rapports aux bailleurs demandent des indicateurs chiffrés, des renvois précis et parfois deux langues, dans des délais courts.', 'solution' => 'Tâche : rédiger le rapport d’activité à partir des relevés de terrain et remplir un tableau d’indicateurs. Outil : ChatGPT ou Claude, avec un tableur pour recalculer deux totaux à la main. Résultat attendu : un rapport où chaque chiffre est retrouvé dans la source, et une version anglaise relue par un locuteur.'],
                ['secteur' => 'Banque, assurance ou cabinet du quartier de l’Hippodrome', 'probleme' => 'Les réponses aux clients, les relances et les notes internes se répètent, et chaque courrier engage la signature de l’établissement.', 'solution' => 'Tâche : proposer des réponses dans le ton de la maison et classer les demandes par motif. Outil : ChatGPT ou Copilot si la licence Microsoft 365 existe. Résultat attendu : des réponses relues avant envoi, sans donnée de client collée telle quelle dans l’assistant.'],
                ['secteur' => 'Université, école ou centre de formation', 'probleme' => 'Scolarité, secrétariat et enseignants produisent des convocations, des supports et des courriers, en deux langues, avec des listes d’étudiants.', 'solution' => 'Tâche : préparer supports de cours, convocations et réponses types. Outil : Claude ou ChatGPT, avec une règle stricte sur les listes nominatives. Résultat attendu : une bibliothèque de modèles bilingues relus, et des fichiers d’étudiants qui ne quittent pas l’établissement.'],
                ['secteur' => 'Commerce de marché et PME, de Mokolo à Biyem-Assi', 'probleme' => 'Les commandes arrivent par messages vocaux et textes en vrac sur le téléphone du gérant, et les relances se font de mémoire.', 'solution' => 'Tâche : transformer les messages en tableau de commandes et rédiger les relances. Outil : Gemini ou ChatGPT sur téléphone, relecture sur ordinateur. Résultat attendu : un tableau propre et des messages de relance réutilisables, courtois et fermes.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels assistants utilise-t-on, et que coûtent-ils chez leurs éditeurs ?',
            'legende' => 'Prix publics lus au navigateur le 26 octobre 2026 sur les pages des éditeurs, hors taxes, en dollars américains. Les montants peuvent différer selon le pays ; la page de Google a affiché le tarif des offres d’équipe en dollars. Ces coûts sont ceux des éditeurs, ils ne font pas partie du prix de la formation.',
            'entetes' => ['Assistant', 'Offres utilisées en formation', 'Prix de l’éditeur', 'Pour une équipe d’organisation'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Gratuit, Go, Plus, Business', 'Gratuit ; Go 8 $ par mois ; Plus 20 $ par mois ; Business 20 $ par utilisateur et par mois en facturation annuelle, 25 $ au mois, à partir de 2 utilisateurs', 'L’offre Business place les comptes sous l’administration de l’organisation'],
                ['Claude (Anthropic)', 'Gratuit, Pro, Team', 'Gratuit ; Pro 17 $ par mois en annuel (200 $ payés d’avance) ou 20 $ au mois ; Team 20 $ par siège et par mois en annuel, 25 $ au mois, pour 2 à 150 personnes', 'Bon pour lire de longs documents et respecter un modèle de courrier'],
                ['Gemini (Google)', 'Gratuit, offre Business', 'Offre Business à partir de 21 $ par siège et par mois ; offre Enterprise à partir de 30 $ par siège et par mois', 'Logique pour les équipes déjà sur Google Workspace'],
                ['Copilot (Microsoft)', 'Copilot Business, Business Standard avec Copilot', 'Copilot Business 18 $ par utilisateur et par mois en annuel au prix promotionnel (21 $ indiqué comme prix d’origine), 25,20 $ au mois (module complémentaire, prix promotionnel sans date de fin affichée) ; Business Standard avec Copilot 23,50 $ en annuel', 'Utile surtout si la licence Microsoft 365 est déjà en place'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données s’imposent à une administration ou à une organisation de Yaoundé ?',
            'paragraphes' => [
                'Yaoundé réunit des organisations dont les documents sont sensibles par nature : dossiers d’agents, pièces de marchés publics, correspondances classées, listes d’étudiants, dossiers de clients de banques et de bailleurs. La formation commence par un classement en trois catégories de ce que chaque service manipule : ce qu’on peut confier à un assistant, ce qu’on anonymise d’abord, ce qui ne quitte jamais l’organisation. Dans une administration, ce classement se fait avec le responsable du service, qui connaît les circuits de validation et les mentions de confidentialité.',
                'Le cadre légal national, la loi de 2024 sur les données personnelles, son autorité et les règles de transfert vers l’étranger sont détaillés sur la page <a href="/formations/ia-en-entreprise/cameroun">formation IA en entreprise au Cameroun</a>. Ils ne sont pas repris ici. Le thème de l’atelier du MINPOSTEL de février 2026 (protéger le citoyen, encadrer les usages, bâtir la confiance numérique) rappelle que, dans une institution, l’usage de l’IA se pense d’abord comme une responsabilité envers les administrés. Richard n’est pas juriste : la règle écrite par l’équipe est validée par le service juridique ou la hiérarchie.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA à Yaoundé ?',
            'intro'      => 'Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Aucun montant n’est annoncé sur cette page : le devis détaille chaque poste, et les abonnements aux assistants restent au nom de l’organisation, hors du prix de la formation.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Exercices sur vos courriers et notes', 'Classement des données en trois catégories']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation']],
                ['offre' => 'Séances à distance ou accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Séances de 2 h 30 ou une demi-journée par mois', 'Mesure de ce qui sert', 'Bilan écrit']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par service ou par famille de tâches.',
                'Le nombre de langues : un groupe francophone et un groupe anglophone comptent deux jeux de supports.',
                'Le temps de préparation sur vos documents et leur anonymisation avant la session.',
                'Le lieu, si une séance en salle est demandée à Yaoundé : le déplacement s’ajoute alors au devis.',
                'La durée, le format retenu et l’accompagnement après la session.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent chez les équipes de Yaoundé qui démarrent l’IA ?',
            'intro' => 'Ces écarts se préviennent dès la session ; ils se mesurent un mois plus tard.',
            'items' => [
                ['titre' => 'Coller un dossier nominatif dans un compte personnel', 'texte' => 'Une liste d’agents, d’étudiants ou de clients envoyée telle quelle à un assistant sort de l’organisation. On remplace d’abord les identités par des codes, ou le document reste en interne.'],
                ['titre' => 'Signer une note sans retrouver ses sources', 'texte' => 'Un assistant peut citer un article, une circulaire ou un chiffre qui n’existent pas. Dans une administration, toute référence se retrouve dans le texte officiel avant de partir à la signature.'],
                ['titre' => 'Confondre résumé et pièce d’origine', 'texte' => 'Le résumé d’un dossier d’appel d’offres aide à s’orienter ; il ne remplace jamais la lecture de la pièce contractuelle. La formation fixe cette hiérarchie par écrit.'],
                ['titre' => 'Former seulement la direction', 'texte' => 'Si seuls les cadres suivent la session, les agents qui rédigent au quotidien improvisent. Les groupes sont formés par fonction, et la direction suit une session dédiée aux décisions.'],
                ['titre' => 'Ignorer l’anglais dans une capitale bilingue', 'texte' => 'Un dossier peut arriver d’un partenaire anglophone, et un rapport partir en deux versions. Les consignes et les modèles sont tenus dans les deux langues quand le service travaille ainsi.'],
                ['titre' => 'Attendre une aide publique', 'texte' => 'Des stratégies et des concertations existent à Yaoundé, mais elles ne financent pas la formation d’une équipe. On budgète sur ressources propres, en FCFA, et un cofinancement éventuel est une bonne surprise.'],
                ['titre' => 'Prévoir une séance sans plan pour une coupure', 'texte' => 'Une coupure d’électricité ou de réseau peut interrompre un exercice. Les documents sont sur chaque poste, et un exercice de relecture hors ligne prend le relais.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi choisir Richard SALANON pour former une équipe de Yaoundé ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Cameroun, qu’il accompagne à distance depuis Cotonou. Son portfolio compte KossKoss Select, un concept-store cosmétique camerounais, pour lequel il a réalisé une boutique lancée avec un diagnostic beauté en cinq étapes, quatorze routines de soin et le paiement par Orange Money et MTN MoMo ; ce projet a été conduit pour un client direct. Les autres projets figurent sur la page des <a href="/realisations/">réalisations</a>.',
                'Il compte ' . $ans . ' ans d’expérience, une formation à ' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', et déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l’IA, à l’automatisation et aux ERP. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>. Il n’est certifié par aucun éditeur d’IA et ne se présente comme partenaire d’aucun.',
                'Sa façon de former s’adresse aux équipes d’organisation : des exercices sur vos documents, une grille écrite des données permises, une évaluation sur une tâche réelle, des supports qui restent chez vous et aucun gain chiffré promis. Pour le fonctionnement général, voir la <a href="/formations/ia-en-entreprise">fiche IA en entreprise</a> ; pour les décideurs, <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> ; pour des consignes plus solides, <a href="/formations/prompt-engineering">prompt engineering</a> ; pour des assistants qui agissent, <a href="/formations/agents-ia-assistants">agents IA et assistants</a> ; pour relier vos outils, <a href="/formations/n8n">n8n</a>. Son parcours est sur <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe de Yaoundé à l’IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs fonctions, leur langue de travail, les documents qui leur prennent le plus de temps et le format souhaité : vous recevez une réponse sous 24 heures, puis un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA à Yaoundé ?", 'r' => "Ces trois titres décrivent des rôles voisins et aucun n’est réglementé. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant à Yaoundé : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA à Yaoundé ?", 'r' => "Commencez par une tâche répétitive et mesurable, par exemple la rédaction de courriers, le résumé de comptes rendus ou le classement de documents, et par la règle sur les données qui peuvent quitter l’entreprise. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise à Yaoundé, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former les équipes d’un ministère ou d’un organisme public de Yaoundé à l’IA ?', 'r' => 'Des écoles, des instituts et des formateurs indépendants. Richard SALANON forme à distance, depuis Cotonou, des équipes d’administration et d’organisation, sur leurs propres documents, avec une grille écrite de ce qu’on peut confier à un assistant. Aucun agrément public n’est revendiqué.'],
        ['q' => 'Faut-il se déplacer à Yaoundé pour la formation ?', 'r' => 'Non. Les séances se donnent en visioconférence, sans décalage horaire puisque Yaoundé et Cotonou sont en UTC+1. Une séance en salle reste possible : le déplacement est alors détaillé au devis, en FCFA.'],
        ['q' => 'Quels créneaux sont possibles pour une équipe de bureau de Yaoundé ?', 'r' => 'Le matin, de 8 h à 12 h, ou l’après-midi, de 14 h à 17 h, selon les heures de présence de vos agents. Les séances à distance durent 2 h 30 et se fixent avec vous au cadrage.'],
        ['q' => 'Que faire si le courant ou le réseau coupe pendant une séance ?', 'r' => 'Les documents sont enregistrés sur chaque poste la veille, et un exercice de relecture hors ligne prend le relais. Si une zone entière est touchée, la séance reprend un autre créneau.'],
        ['q' => 'Existe-t-il un programme public de formation à l’IA pour les agents de l’État à Yaoundé ?', 'r' => 'Le MINPOSTEL a organisé un atelier pour les administrations les 17 et 18 février 2026 et la stratégie nationale de 2025 prévoit de renforcer les capacités. Aucun dispositif de prise en charge de la formation d’une équipe n’est confirmé : à vérifier auprès du ministère.'],
        ['q' => 'La formation se donne-t-elle en anglais ?', 'r' => 'Oui. Le français et l’anglais sont les deux langues de travail de Richard, et les supports peuvent être remis dans l’une, l’autre ou les deux. Un groupe bilingue peut être scindé en deux groupes parallèles.'],
        ['q' => 'Quelles données peut-on confier à un assistant dans un service de Yaoundé ?', 'r' => 'Les textes publics et les documents internes sans personne identifiable, dans un compte professionnel. Les dossiers nominatifs sont anonymisés d’abord, les secrets de l’organisation ne sortent pas. Le cadre légal national figure sur la page du Cameroun.'],
        ['q' => 'Combien coûtent les abonnements aux assistants ?', 'r' => 'Au 26 octobre 2026, ChatGPT Business coûte 20 $ par utilisateur et par mois en annuel, Claude Team 20 $ par siège et par mois en annuel, Gemini Business à partir de 21 $ par siège et par mois. Aucun abonnement n’est exigé pour suivre la formation.'],
        ['q' => 'Combien coûte la formation à Yaoundé ?', 'r' => 'Le prix est fixé sur devis, en FCFA. Il dépend du nombre de participants et de groupes, du nombre de langues, de la durée, de la préparation sur vos documents, du lieu et de l’accompagnement retenu.'],
        ['q' => 'En quoi cette formation diffère-t-elle d’une démonstration d’outil ?', 'r' => 'Elle part de vos courriers, de vos notes et de vos rapports, fixe une règle de données et se termine par une évaluation sur une tâche réelle. Elle laisse à l’équipe une bibliothèque de consignes. Ce n’est ni un diplôme ni une certification d’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Wikipédia : Yaoundé', 'url' => 'https://fr.wikipedia.org/wiki/Yaound%C3%A9', 'date' => '2026-10-26'],
        ['titre' => 'CityPopulation : villes du Cameroun, données du BUCREP', 'url' => 'https://citypopulation.de/en/cameroon/cities/', 'date' => '2026-10-26'],
        ['titre' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-26'],
        ['titre' => 'Camer.be : le Cameroun se dote d’une stratégie pour l’IA', 'url' => 'https://www.camer.be/89958/11:1/le-cameroun-se-dote-dune-strategie-pour-lia-enjeux-et-perspectives-dun-tournant-numerique-cameroon.html', 'date' => '2026-10-26'],
        ['titre' => 'WeAreTech Africa : 60 000 talents IA à former d’ici 2040', 'url' => 'https://www.wearetech.africa/fr/fils/actualites/tech/60-000-talents-ia-a-former-d-ici-2040-un-defi-de-taille-pour-le-cameroun', 'date' => '2026-10-26'],
        ['titre' => 'Digital Business Africa : atelier du MINPOSTEL sur l’IA pour les administrations publiques', 'url' => 'https://www.digitalbusiness.africa/cameroun-avancees-piliers-et-dangers-de-l-ia-presentes-a-un-atelier-du-minpostel-dedie-aux-administrations-publics/', 'date' => '2026-10-26'],
        ['titre' => 'Digital Business Africa : Semaine de l’innovation numérique 2026', 'url' => 'https://www.digitalbusiness.africa/sin-2026-le-cameroun-recherche-les-meilleurs-projets-tic-pour-lutter-contre-les-derives-de-lia-et-promouvoir-le-patriotisme-numerique-postulez/', 'date' => '2026-10-26'],
        ['titre' => 'Digital Business Africa : salon E-Gov’A 2026 à Yaoundé', 'url' => 'https://www.digitalbusiness.africa/?p=125158', 'date' => '2026-10-26'],
        ['titre' => 'Digital Business Africa : conférence de l’IAI Cameroun sur l’IA, mai 2025', 'url' => 'https://www.digitalbusiness.africa/dr-michel-boukar-liai-cameroun-peut-signer-un-accord-avec-lecole-polytechnique-de-yaounde/', 'date' => '2026-10-26'],
        ['titre' => 'Connaissance des énergies (AFP) : quartiers de Yaoundé privés d’électricité, mars 2021', 'url' => 'https://www.connaissancedesenergies.org/afp/au-cameroun-de-nombreux-quartiers-de-yaounde-prives-delectricite-210324', 'date' => '2026-10-26'],
        ['titre' => 'Ecomatin : Eneo annonce des délestages dans le septentrion', 'url' => 'https://ecomatin.net/cameroun-eneo-annonce-des-delestages-dans-le-septentrion-des-le-20-janvier', 'date' => '2026-10-26'],
        ['titre' => 'IANA, base des fuseaux horaires (Africa/Douala)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-26'],
        ['titre' => 'OpenAI, ChatGPT : tarifs', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-en-entreprise'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
