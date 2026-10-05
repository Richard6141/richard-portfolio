<?php
// ============================================================
// data/formations/data-literacy.php · Fiche formation « Décider avec les
// données (data literacy) » (vague 1B, lot B, domaine transformation-
// digitale). Angle propre : LIRE, QUESTIONNER et UTILISER des chiffres pour
// décider, sans outil technique : définitions d'indicateurs, moyenne et
// médiane, pourcentages et points, échantillons et marges d'erreur,
// corrélation et causalité, graphiques trompeurs, qualité des données,
// chiffres produits par l'IA. Aucune ancienne page.
// Ne traite pas : la construction de tableaux de bord (power-bi-looker-
// studio), les requêtes (sql-analystes), les formules de tableur
// (excel-google-sheets), la feuille de route (strategie-transformation-
// digitale), ni les sœurs rédigées en même temps : chef-de-projet-digital,
// conduite-du-changement, digitalisation-processus.
// Sources consultées le 05/10/2026 : ANSD (ENES T2 2026, IHPC août 2026,
// IHPC annuel 2025, comptes nationaux base 2021, note sur le rebasage de
// novembre 2025), INSEE (chômage T2 2026, IPC provisoire de septembre 2026,
// Insee Première n° 2079), BCEAO (bulletin mensuel des statistiques de
// juillet 2026), Eurostat (estimation rapide de l'inflation, 2 octobre
// 2026), site de l'INStaD (page de maintenance), gouv.ci (création de
// l'ANStat), UIT, tarifs ChatGPT, Claude, Google AI, LibreOffice, Google
// Sheets, Commission européenne (article 4, fait vérifié du catalogue),
// CNIL, FDFP, 3FPT, France Compétences. Les pages du SGG du Bénin (loi
// n° 2017-20, décret n° 2022-286) n'ont pas répondu ce jour-là : références
// reprises de la page domaine, à revérifier.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation décider avec les données (data literacy) : lire un indicateur, questionner moyennes, pourcentages, échantillons et graphiques, puis trancher sur des chiffres dont on connaît les limites",
    'title'   => "Décider avec les données (data literacy) | Richard SALANON",
    'meta'    => "Formation data literacy pour dirigeants et cadres : lire un indicateur, questionner moyennes, échantillons et graphiques, vérifier un chiffre, décider.",
    'en_bref' => "Cette formation apprend aux dirigeants, cadres et responsables qui lisent des rapports et des tableaux de bord à se servir des chiffres pour décider : vérifier ce que mesure un indicateur, distinguer moyenne et médiane, pourcentage et point, repérer un échantillon fragile, une corrélation prise pour une cause, un graphique qui exagère ou un chiffre inventé par une IA. Elle ne demande aucun outil technique, seulement de savoir ouvrir un tableur et d'apporter un rapport utilisé chez vous. Elle dure deux jours en quatre demi-journées, avec une séance de suivi à distance un mois plus tard, en intra, en inter, à distance ou en hybride. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'transformation-digitale',
    'forte'   => false,
    'duree'   => "2 jours en quatre demi-journées, plus 2 h de suivi à un mois",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : savoir de quoi un chiffre est le nom",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de table sur les rapports apportés : le chiffre que chacun regarde en premier, et la dernière décision qu'il a fait prendre.",
                "Les cinq questions qui précèdent toute lecture : que compte-t-on, sur quel périmètre, à quelle date, d'après quelle source, et qui a fait le calcul.",
                "Stock ou flux, nombre ou taux, valeur ou volume, hors taxes ou toutes taxes : les confusions qui font diverger deux rapports censés dire la même chose.",
                "Cas réel : pour le même trimestre, l'ANSD publie au Sénégal un taux de chômage de 19,1 % et un autre de 3,2 %, selon la définition retenue.",
                "Indicateur d'activité et indicateur de résultat : ce qui prouve que l'équipe a travaillé, et ce qui prouve que l'organisation a avancé.",
                "Exercice : rédiger la notice des trois chiffres les plus discutés dans votre comité, puis la comparer à celle d'un collègue.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : résumer une série sans la trahir",
            'duree'  => '3 h 30',
            'points' => [
                "Moyenne et médiane : comment quelques très grandes valeurs tirent la moyenne vers le haut, avec les salaires du secteur privé publiés par l'INSEE.",
                "Regarder la répartition avant de parler du client type, du panier moyen ou du délai habituel.",
                "Pourcentage ou point de pourcentage : quand l'inflation passe de 0,8 % à 1,2 %, elle gagne 0,4 point, soit la moitié de son niveau précédent.",
                "Glissement annuel, variation sur un mois, moyenne de l'année : trois mesures différentes de « l'inflation » d'un même mois.",
                "Euros ou francs courants et constants, effets de base après une année exceptionnelle.",
                "Effet de structure : un taux global qui recule alors que chaque agence progresse.",
                "Exercice : réécrire cinq phrases de vos rapports qui mélangent pourcentages et points, ou qui comparent des périodes incomparables.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : d'où vient le chiffre, et que prouve-t-il ?",
            'duree'  => '3 h 30',
            'points' => [
                "Recensement, enquête par sondage, données de gestion : ce que chaque source permet d'affirmer, et ce qu'elle ne permet pas.",
                "La marge d'erreur : l'INSEE estime son taux de chômage à 0,3 point près, ce qui relativise une variation de 0,2 point sur un trimestre.",
                "Qui a répondu ? Les clients joignables, les bénéficiaires satisfaits, les salariés restés : les échantillons qui se choisissent eux-mêmes.",
                "Les petits nombres : un taux de 50 % calculé sur quatre dossiers, une hausse de 100 % qui fait passer de un à deux incidents.",
                "Corrélation et causalité : facteur caché, cause inversée, coïncidence, retour à la normale après un pic.",
                "Exercice : démonter trois conclusions tirées de vos rapports, puis écrire la comparaison qui permettrait de trancher.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : graphiques, qualité des données, chiffres de l'IA et note de décision",
            'duree'  => '3 h 30',
            'points' => [
                "Les procédés qui déforment un graphique, et la lecture en trente secondes qui les démasque.",
                "Qualité des données : doublons, trous, valeurs par défaut, changement de champ, données provisoires puis révisées.",
                "Cas réel : le rebasage des comptes nationaux du Sénégal relève de 13,5 % le PIB de 2021, sans que l'économie de 2021 ait changé.",
                "Les chiffres fournis par un assistant d'IA : remonter à la source primaire, ou les écarter.",
                "La note de décision d'une page : question posée, chiffres retenus, limites connues, décision, indicateur de suivi et date de revue.",
                "Évaluation : chaque participant présente sa note sur un cas réel, et le groupe la conteste comme le ferait un conseil d'administration.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Relecture des notes de décision rédigées depuis la formation, et de ce qu'elles ont changé en réunion.",
                "Les chiffres contestés depuis un mois, et la façon dont la discussion a été tranchée.",
                "Les questions posées aux auteurs des rapports internes, et les réponses obtenues.",
                "Mise à jour de la grille de questions de l'équipe et des notices d'indicateurs.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en quatre demi-journées de 3 h 30, plus 2 h de suivi à un mois"],
        ['l' => 'Public', 'v' => "Dirigeants, cadres et responsables qui lisent des rapports et des tableaux de bord, dix participants au plus"],
        ['l' => 'Formats', 'v' => "Intra, inter-entreprises, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à la fin des deux jours, et que la formation laisse-t-elle de côté ?",
            'paragraphes' => [
                "Dans beaucoup de comités, le chiffre arrive en fin de discussion, pour appuyer un avis déjà formé. Le directeur commercial présente une hausse, le contrôleur une baisse, et la réunion se passe à savoir lequel a raison. Le plus souvent, les deux ont raison : ils ne mesurent pas la même chose. Cette formation apprend à faire passer le chiffre avant l'avis, en posant à chaque nombre les questions qui révèlent ce qu'il dit vraiment, et ce qu'il ne dit pas.",
                "À la fin des deux jours, chaque participant sait faire seul six choses, vérifiées sur des documents de son organisation. Écrire la définition complète d'un indicateur et repérer quand deux rapports n'utilisent pas la même. Choisir entre moyenne, médiane et répartition pour résumer une série. Distinguer une variation en pourcentage d'un écart en points, et un glissement annuel d'une moyenne. Dire si un écart dépasse la marge d'erreur, si un échantillon représente quelqu'un, et si un lien observé autorise à parler de cause. Repérer un graphique qui déforme et un chiffre invérifiable. Rédiger enfin une note de décision d'une page.",
                "La formation ne construit rien. Elle ne montre ni à concevoir un tableau de bord dans Power BI ou Looker Studio, ni à interroger une base en SQL : ces deux savoir-faire ont leur propre fiche dans le catalogue, reliée en bas de page. Les formules et les tableaux croisés relèvent de la <a href=\"/formations/excel-google-sheets\">formation Excel et Google Sheets pour la gestion</a>. Les statistiques avancées, les tests et la modélisation restent aussi hors du programme : un dirigeant n'a pas besoin de calculer un intervalle de confiance, mais il doit savoir en demander un et le comprendre.",
                "Elle ne remplace pas non plus les autres formations du domaine. Choisir les chantiers numériques et leurs indicateurs de pilotage revient à la <a href=\"/formations/strategie-transformation-digitale\">formation stratégie de transformation digitale</a>, et la mesure des délais d'un circuit à la formation consacrée aux processus métiers. Ici, l'objet est plus étroit et plus quotidien : le rapport du lundi, le tableau du comité, l'étude transmise par un partenaire, la statistique citée dans une réunion, que l'on apprend à lire avant de s'en servir.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quel niveau, et que faut-il apporter ?",
            'intro' => "Le public se reconnaît à une habitude : recevoir des chiffres préparés par d'autres et devoir en tirer une décision. Aucune compétence en statistique n'est demandée ; un court questionnaire avant le devis sert à connaître les rapports que chacun lit et les décisions qu'il prend.",
            'items' => [
                ['titre' => "Dirigeants et associés", 'texte' => "Ceux qui arbitrent un budget, un recrutement ou une ouverture d'agence à partir de tableaux qu'ils n'ont pas construits. Ils apprennent à poser les trois questions qui obligent l'auteur du rapport à préciser sa source et sa méthode."],
                ['titre' => "Cadres et managers", 'texte' => "Directeurs commerciaux, responsables d'exploitation, chefs de service : ils présentent des chiffres autant qu'ils en reçoivent. La formation leur apprend à les présenter de façon honnête, avec leurs limites, ce qui rend leurs propositions plus solides."],
                ['titre' => "Responsables qualité, RH et suivi-évaluation", 'texte' => "Taux de réclamations, absentéisme, satisfaction, résultats d'un projet financé : ces indicateurs reposent souvent sur des enquêtes ou des définitions mouvantes. C'est là que les questions d'échantillon et de définition rendent le plus service."],
                ['titre' => "Administrateurs, élus et membres de comités", 'texte' => "Conseils d'administration d'associations, de coopératives ou d'établissements, commissions de bailleurs : ils disposent de peu de temps pour juger un dossier chiffré. La grille de questions leur sert dès la réunion suivante."],
                ['titre' => "Niveau requis", 'texte' => "Savoir ouvrir un tableur et faire une règle de trois. Les calculs du programme se font à la main ou avec une calculatrice ; aucune formule complexe n'est utilisée, et personne n'est interrogé au tableau sur ses souvenirs de mathématiques."],
                ['titre' => "Ce qu'il faut apporter", 'texte' => "Un rapport, un tableau de bord ou une présentation chiffrée réellement utilisés chez vous, si possible accompagnés de la décision qu'ils ont servi à prendre. Les données nominatives sont retirées avant la session ; les montants peuvent être masqués si la confidentialité l'exige."],
                ['titre' => "Matériel", 'texte' => "Un ordinateur portable par participant, ou une tablette, avec un tableur et un navigateur. Pour l'exercice sur l'IA, l'assistant déjà utilisé dans l'organisation, ou la version gratuite d'un assistant du marché, sans y saisir de données confidentielles."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels exercices les participants réalisent-ils sur les chiffres de leur organisation ?",
            'legende' => "Chaque exercice part d'un document apporté par un participant. En session inter-entreprises, les documents sont anonymisés et les exemples publics remplacent les chiffres internes quand il le faut.",
            'entetes' => ['Exercice', 'Matière utilisée', 'Ce que le participant produit', 'Moment'],
            'lignes'  => [
                ["La notice d'un chiffre", "Les trois indicateurs les plus cités dans le dernier comité", "Pour chacun : définition, périmètre, source, date, auteur du calcul, et les écarts de définition entre services", "Jour 1, matin"],
                ["Deux rapports, deux résultats", "Deux documents internes qui donnent un total différent pour la même période", "L'explication écrite de l'écart, retrouvée sans recalculer les données", "Jour 1, matin"],
                ["Le client qui n'existe pas", "Un panier moyen, un délai moyen ou un montant moyen tiré de vos rapports", "La même série résumée par la médiane et par tranches, et la phrase corrigée", "Jour 1, après-midi"],
                ["Points ou pourcents", "Cinq phrases tirées de vos rapports ou de la presse économique", "Les phrases réécrites sans ambiguïté, avec les deux formulations quand elles sont utiles", "Jour 1, après-midi"],
                ["Qui a répondu ?", "Une enquête de satisfaction, un sondage interne ou un retour de terrain", "La description de l'échantillon réel, de ses absents et de ce qu'il permet d'affirmer", "Jour 2, matin"],
                ["La cause supposée", "Trois conclusions du type « depuis que nous avons fait X, Y a progressé »", "Les explications concurrentes et la comparaison qui permettrait de trancher", "Jour 2, matin"],
                ["Le graphique redressé", "Un graphique présenté récemment en réunion", "Le même graphique corrigé, et la phrase qui dit ce qu'il montre", "Jour 2, après-midi"],
                ["Le chiffre de l'assistant", "Une question de marché posée à un assistant d'IA", "Le chiffre retrouvé dans sa source primaire, corrigé ou écarté", "Jour 2, après-midi"],
                ["La note de décision", "Un vrai dossier en attente de décision dans l'organisation", "Une note d'une page relue par le groupe", "Jour 2, fin d'après-midi"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles questions faut-il poser à un chiffre avant de s'en servir pour décider ?",
            'legende' => "La grille remise à chaque participant, utilisée pendant les deux jours puis en réunion. Une seule réponse inquiétante ne disqualifie pas le chiffre ; elle indique la précaution à prendre avant de décider.",
            'entetes' => ['Question', 'Ce qu\'elle révèle', 'Réponse qui doit alerter'],
            'lignes'  => [
                ["Que compte-t-on exactement ?", "La définition, et ce qu'elle laisse dehors", "« Les ventes » sans préciser commandées, facturées ou encaissées"],
                ["Sur quel périmètre ?", "Les entités, les produits, les zones et les statuts inclus", "Un total qui intègre ou non les avoirs, une filiale, les ventes en ligne, selon le mois"],
                ["À quelle date, et sur quelle période ?", "La fraîcheur du chiffre et la comparabilité des périodes", "Un mois de vingt jours ouvrés comparé à un mois de vingt-trois"],
                ["D'où vient-il ?", "La source primaire et son producteur", "« C'est dans le fichier », « on l'a lu quelque part », « l'IA l'a donné »"],
                ["Par rapport à quoi ?", "La référence qui donne un sens : période précédente, objectif, concurrent", "Un chiffre isolé présenté comme bon ou mauvais"],
                ["Sur combien de cas ?", "La taille de la base et la solidité du pourcentage", "Un taux annoncé sans l'effectif qui le porte"],
                ["Qui manque ?", "Les absents de l'échantillon ou des données", "Seuls les clients actifs, ou seuls ceux qui ont répondu"],
                ["L'écart dépasse-t-il le bruit ?", "La variation habituelle d'un mois sur l'autre, ou la marge d'erreur", "Une alerte déclenchée par une variation que l'on observe tous les ans"],
                ["Le chiffre est-il définitif ?", "Son statut : estimation, provisoire, révisé", "Une donnée provisoire utilisée pour un engagement ferme"],
                ["Quelle autre explication ?", "Les causes concurrentes d'un lien observé", "Une seule cause proposée, celle qui arrange l'auteur"],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Que montrent quelques statistiques publiques récentes quand on les lit de près ?",
            'items' => [
                ['valeur' => '19,1 % et 3,2 %', 'libelle' => "Deux taux de chômage publiés pour le même deuxième trimestre 2026 au Sénégal : le chômage élargi et le chômage au sens strict du Bureau international du travail (mise en ligne du 30 septembre 2026)", 'source' => "ANSD, Enquête nationale sur l'emploi au Sénégal", 'url' => 'https://www.ansd.sn/node/14366'],
                ['valeur' => '2 190 €', 'libelle' => "Salaire net médian du secteur privé en France en 2024, en équivalent temps plein, quand la moyenne atteint 2 733 € : la médiane est inférieure de 19,9 % à la moyenne", 'source' => "INSEE, Insee Première n° 2079 (23 octobre 2025)", 'url' => 'https://www.insee.fr/fr/statistiques/8657156'],
                ['valeur' => '+0,4 point', 'libelle' => "Remontée de l'inflation de l'UEMOA, passée de 0,8 % en juin à 1,2 % en juillet 2026 en glissement annuel : une hausse de moitié si on la lit en pourcentage", 'source' => "BCEAO, Bulletin mensuel des statistiques, juillet 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-09/Bulletin%20mensuel%20des%20statistiques%20-%20Juillet%202026.pdf'],
                ['valeur' => '0,3 point', 'libelle' => "Précision annoncée par l'INSEE pour le niveau du taux de chômage et pour son évolution d'un trimestre à l'autre ; au deuxième trimestre 2026, le taux atteint 8,3 %, en hausse de 0,2 point (publication du 7 août 2026)", 'source' => "INSEE, Informations rapides n° 192", 'url' => 'https://www.insee.fr/fr/statistiques/9032359'],
                ['valeur' => '+13,5 %', 'libelle' => "Réévaluation du PIB du Sénégal pour 2021, porté à 17 316 milliards de francs CFA par le changement d'année de base des comptes nationaux (note de novembre 2025)", 'source' => "ANSD, note sur le changement d'année de base (base 2021)", 'url' => 'https://www.ansd.sn/sites/default/files/2025-11/Note-synthetique-resultats-comptes-nationaux-renoves-base2021.pdf'],
                ['valeur' => '3,8 %', 'libelle' => "Inflation annuelle attendue dans la zone euro en septembre 2026, selon une estimation rapide publiée le 2 octobre 2026 ; l'énergie y progresse de 18,8 %, les biens industriels hors énergie de 1,1 %", 'source' => "Eurostat, Euro indicators, flash estimate", 'url' => 'https://ec.europa.eu/eurostat/web/products-euro-indicators/w/2-02102026-ap'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Moyenne, médiane ou répartition par tranches : quel résumé choisir pour quelle question ?",
            'options'  => ['Moyenne', 'Médiane', 'Répartition par tranches ou déciles'],
            'criteres' => [
                ['critere' => "Ce qu'elle dit", 'valeurs' => ["Le total partagé à parts égales entre tous les cas", "La valeur qui coupe la série en deux moitiés de même effectif", "Combien de cas se trouvent dans chaque tranche, du plus bas au plus haut"]],
                ['critere' => "Réaction aux valeurs extrêmes", 'valeurs' => ["Forte : un très gros client ou un très long retard la déplace", "Faible : elle ignore l'ampleur des extrêmes", "Elle les montre au lieu de les absorber"]],
                ['critere' => "Question à laquelle elle répond", 'valeurs' => ["Combien au total, rapporté à chacun : budget, masse salariale, stock", "Que vit le cas ordinaire : délai, salaire, montant d'une commande courante", "Où se concentrent les problèmes et les gains"]],
                ['critere' => "Piège fréquent", 'valeurs' => ["Présenter la moyenne comme la situation « typique »", "Oublier qu'une moitié des cas reste très au-dessus ou très au-dessous", "Choisir les tranches pour faire apparaître la conclusion voulue"]],
                ['critere' => "Exemple tiré de la statistique publique", 'valeurs' => ["2 733 € de salaire net moyen dans le privé en France en 2024", "2 190 € de salaire net médian la même année", "Un salarié sur dix sous 1 492 €, un sur dix au-dessus de 4 334 €"]],
            ],
            'verdict'  => "Aucun des trois ne suffit seul. Pour une décision qui engage un total, comme un budget, la moyenne est la bonne mesure ; pour juger de la situation de la plupart des clients ou des salariés, la médiane est plus honnête ; pour cibler une action, la répartition montre où agir. La formation apprend à demander les trois quand l'enjeu est important, et à se méfier d'un rapport qui n'en donne qu'un sans dire pourquoi.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourcentage ou point, glissement ou moyenne : pourquoi la même inflation donne-t-elle plusieurs chiffres ?",
            'paragraphes' => [
                "Parce que chaque chiffre répond à une question différente, et qu'un titre de rapport en retient rarement plus d'un. L'INSEE l'illustre dans sa publication du 30 septembre 2026 : sur un an, les prix à la consommation augmenteraient de 3,0 % en septembre, alors que sur un mois ils reculeraient de 0,3 %. Les deux chiffres sont justes. Le premier compare septembre 2026 à septembre 2025 ; le second compare septembre à août, après la fin des tarifs d'été dans les transports et l'hébergement.",
                "Le même communiqué ajoute deux leçons utiles à un dirigeant. Il existe deux indices : l'indice des prix à la consommation progresse de 3,0 %, l'indice harmonisé, calculé pour les comparaisons européennes, de 3,4 %. Et ces résultats sont provisoires : l'INSEE précise qu'ils ne doivent pas servir à des revalorisations contractuelles, et annonce les résultats définitifs pour le 15 octobre 2026. Une clause d'indexation dans un contrat de bail ou de prestation se calcule donc sur l'indice définitif désigné par le contrat, jamais sur le chiffre lu dans la presse.",
                "La différence entre pourcentage et point est l'erreur la plus répandue dans les rapports. La BCEAO écrit dans son bulletin de juillet 2026 que l'inflation de l'UEMOA est passée de 0,8 % à 1,2 %, « soit une remontée de 0,4 point de pourcentage ». En pourcentage, la même évolution s'écrit « +50 % ». Les deux sont exacts ; seule la première formulation laisse au lecteur une idée juste de l'ampleur. La règle enseignée est simple : quand on compare deux taux, on parle en points, et l'on ajoute le pourcentage seulement s'il éclaire.",
                "Le glissement annuel trompe aussi quand on le lit comme une variation récente. D'après le même tableau de la BCEAO, établi à partir des instituts nationaux de la statistique, l'inflation du Bénin en glissement annuel était de -0,6 % en avril et en mai 2026, puis de 0,0 % en juillet. Ce zéro ne signifie pas que les prix n'ont pas bougé depuis un mois : il signifie qu'en juillet 2026 ils se retrouvent au niveau de juillet 2025. Sur l'ensemble de l'année 2025, l'inflation béninoise s'établissait à 1,1 %.",
                "Dernier piège : un ralentissement n'est pas une baisse. En Côte d'Ivoire, le même tableau donne une inflation de 4,4 % en 2023 puis de 3,5 % en 2024. Les prix n'ont pas reculé en 2024 ; ils ont augmenté moins vite. Une entreprise qui annonce « l'inflation a baissé, nos coûts vont baisser » confond les deux, et se trompe dans son budget. Au Sénégal, l'ANSD mesure 1,4 % pour 2025 après 0,8 % en 2024 : une accélération de 0,6 point, qui laisse pourtant l'inflation sous les 5,9 % de 2023.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Échantillon, marge d'erreur, corrélation : comment savoir si un chiffre prouve vraiment quelque chose ?",
            'paragraphes' => [
                "Un chiffre tiré d'une enquête est une estimation, pas un comptage. L'INSEE le dit sans détour : son taux de chômage, mesuré par l'enquête Emploi, est estimé à plus ou moins 0,3 point près, pour son niveau comme pour son évolution d'un trimestre à l'autre. Au deuxième trimestre 2026, le taux atteint 8,3 %, en hausse de 0,2 point sur le trimestre et de 0,7 point sur un an. La hausse trimestrielle, seule, reste dans la marge ; la hausse annuelle la dépasse nettement. C'est exactement la lecture que la formation fait pratiquer sur les enquêtes internes.",
                "La taille ne suffit pas : il faut savoir qui a répondu. Une enquête de satisfaction envoyée par WhatsApp n'atteint que les clients dont on a le numéro, et ne reçoit de réponse que de ceux qui ont envie d'en donner. Les clients partis à la concurrence, eux, ne répondent jamais. Avant de lire un taux de satisfaction, on demande donc combien de personnes ont été sollicitées, combien ont répondu, et qui manque. Un résultat de 92 % obtenu sur quarante réponses volontaires dit peu de chose de l'ensemble de la clientèle.",
                "Les définitions changent aussi ce que l'on mesure. Au Sénégal, l'ANSD publie pour le deuxième trimestre 2026 un taux de chômage élargi de 19,1 % et un chômage au sens strict du BIT de 3,2 %. La différence ne vient pas d'une erreur, mais de la façon de compter les personnes sans emploi qui ne cherchent pas activement ou ne sont pas immédiatement disponibles. En France, l'INSEE classait au deuxième trimestre 2026 1,9 million de personnes dans le « halo autour du chômage » : elles souhaitent travailler sans entrer dans la définition du chômeur. Citer l'un de ces chiffres sans sa définition, c'est choisir sa conclusion.",
                "Reste la confusion la plus coûteuse : prendre un lien pour une cause. Les agences qui ont suivi une formation vendent davantage ; mais ce sont peut-être les meilleures agences qui ont été envoyées en formation. Les ventes montent après une campagne publicitaire ; mais la campagne a été lancée au début de la saison haute. Un service dont les résultats étaient exceptionnellement mauvais s'améliore après un changement de responsable ; il serait peut-être revenu à la normale de toute façon. Pour chaque lien observé, le groupe apprend à chercher le facteur caché, le sens inverse, la coïncidence et le retour à la normale.",
                "La réponse pratique n'est pas un calcul savant, mais une comparaison bien construite. Comparer avant et après ne suffit pas ; il faut un groupe semblable qui n'a pas reçu l'action, sur la même période. Une boutique pilote face à une boutique comparable, une région avec la nouvelle procédure face à une région sans : ces dispositifs simples se montent dans une PME, et la formation les fait rédiger sur les décisions réelles des participants.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels procédés rendent un graphique trompeur, et comment les repérer en trente secondes ?",
            'legende' => "Les procédés relevés le plus souvent dans les documents apportés en session. La plupart ne sont pas des manipulations volontaires : ce sont les réglages par défaut d'un logiciel, que personne n'a relus.",
            'entetes' => ['Procédé', 'Ce que voit le lecteur', 'Le réflexe de lecture'],
            'lignes'  => [
                ["Barres dont l'échelle commence très au-dessus de zéro", "Une barre deux fois plus haute que sa voisine pour un écart de quelques pour cent", "Lire les valeurs de l'axe avant de regarder la hauteur des barres"],
                ["Deux axes verticaux sur un même graphique", "Deux courbes qui semblent évoluer ensemble, ou se croiser à un moment décisif", "Vérifier chaque échelle : leur choix suffit à créer ou à effacer le croisement"],
                ["Période de départ bien choisie", "Une forte progression, mesurée depuis le mois le plus bas de la série", "Demander la même courbe sur deux ou trois ans"],
                ["Cumul présenté au lieu des valeurs du mois", "Une courbe qui ne fait que monter, même quand l'activité ralentit", "Chercher le mot « cumul » et demander les valeurs mensuelles"],
                ["Pictogrammes ou effets de relief", "Une pièce de monnaie deux fois plus large, donc quatre fois plus grande à l'œil", "Ne lire que les nombres, jamais les surfaces"],
                ["Pourcentages sans effectifs", "« +100 % d'incidents » qui correspondent à deux incidents au lieu d'un", "Exiger le nombre de cas sous chaque taux"],
                ["Courbe lissée sans le dire", "Une tendance régulière qui cache un mois catastrophique", "Demander si les valeurs sont brutes, lissées ou corrigées des variations saisonnières"],
                ["Comparaisons entre périodes de longueur différente", "Un trimestre de trois mois face à un trimestre écourté par un changement d'outil", "Vérifier les dates exactes de début et de fin de chaque barre"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment juger la qualité des données d'un rapport avant d'en tirer une conclusion ?",
            'intro' => "Un rapport peut être parfaitement calculé à partir de données fausses. Sans ouvrir la base, un lecteur peut pourtant poser des questions qui révèlent l'essentiel des défauts. Voici celles que la formation fait poser systématiquement.",
            'items' => [
                ['titre' => "Tout est-il là ?", 'texte' => "Une agence qui n'a pas remonté ses chiffres, un mois de saisie en retard, un produit oublié dans l'export : les trous ne se voient pas dans un total. On demande le nombre de lignes, d'agences ou de jours couverts, et on le compare à celui du mois précédent."],
                ['titre' => "Certains cas sont-ils comptés deux fois ?", 'texte' => "Le même client créé sous deux orthographes, une facture annulée puis ressaisie, un bénéficiaire inscrit dans deux projets : les doublons gonflent les effectifs et faussent les moyennes. Un nombre de clients qui croît plus vite que les ventes mérite cette question."],
                ['titre' => "Les valeurs par défaut sont-elles devenues des réponses ?", 'texte' => "Un champ « âge » rempli à 0, une date au 1er janvier 1900, une catégorie « Autre » qui regroupe un tiers des lignes : ce sont des absences de réponse déguisées. Elles ne doivent pas entrer dans une moyenne."],
                ['titre' => "La définition a-t-elle changé en cours de route ?", 'texte' => "L'INSEE avertit que son étude sur les salaires de 2024 intègre désormais les apprentis, les stagiaires et Mayotte, et que ses données ne sont pas comparables à celles des publications précédentes. Dans une entreprise, un nouveau logiciel ou une réorganisation produit le même effet, rarement signalé."],
                ['titre' => "Le chiffre est-il provisoire ?", 'texte' => "Une estimation rapide, un chiffre du mois en cours, une clôture non arrêtée : tous seront révisés. Eurostat publie le 2 octobre 2026 une estimation rapide de l'inflation de septembre dans la zone euro, à 3,8 %, avant les données complètes. Une décision prise sur un chiffre provisoire le dit, et prévoit d'être relue."],
                ['titre' => "La série a-t-elle été révisée ?", 'texte' => "En changeant l'année de base de ses comptes nationaux, l'ANSD a relevé de 13,5 % le PIB du Sénégal pour 2021 et porté la croissance de 2022 à 4,6 % au lieu de 3,9 %. Tout ratio calculé sur l'ancien PIB, comme une dette rapportée à la richesse produite, change du même coup. Comparer deux chiffres issus de deux versions d'une série est une erreur courante."],
                ['titre' => "Qui a saisi la donnée, et avait-il intérêt à l'arrondir ?", 'texte' => "Un objectif attaché à un indicateur modifie la façon dont il est rempli : visites déclarées, dossiers classés « résolus », délais mesurés à partir d'une date choisie. Le lecteur demande comment la donnée est produite avant de récompenser ou de sanctionner sur sa base."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment vérifier un chiffre produit par un assistant d'IA avant de le reprendre ?",
            'items' => [
                ['titre' => "Demander la source exacte", 'duree' => "Une minute", 'texte' => "On demande à l'assistant le document, l'organisme, la date et la page d'où vient le chiffre. Une réponse vague (« selon des études », « d'après les experts ») suffit à classer le chiffre comme non sourcé."],
                ['titre' => "Ouvrir la source soi-même", 'duree' => "Cinq minutes", 'texte' => "Le lien fourni existe-t-il, et le chiffre y figure-t-il ? Un assistant peut produire une référence plausible qui n'existe pas, ou attribuer à un organisme un chiffre qu'il n'a jamais publié. Seule la lecture du document original tranche."],
                ['titre' => "Vérifier la date, le périmètre et la définition", 'duree' => "Cinq minutes", 'texte' => "Un taux de chômage de 2019 présenté comme actuel, un chiffre européen appliqué à l'Afrique de l'Ouest, une définition élargie lue comme stricte : le chiffre peut exister et être pourtant mal employé."],
                ['titre' => "Refaire le calcul", 'duree' => "Quelques minutes", 'texte' => "Quand l'assistant a calculé une évolution, une part ou une moyenne, on refait le calcul à partir des données de la source. Les erreurs d'arithmétique, de points et de pourcentages restent fréquentes dans les réponses générées."],
                ['titre' => "Croiser avec une seconde source", 'duree' => "Selon l'enjeu", 'texte' => "Pour un chiffre qui engage une décision importante, on cherche une seconde source indépendante, de préférence l'institut statistique du pays ou l'organisme qui produit la donnée."],
                ['titre' => "Noter la provenance, ou écarter", 'duree' => "Une ligne", 'texte' => "Le chiffre retenu entre dans la note de décision avec sa source primaire et sa date, jamais avec la mention « selon l'IA ». S'il n'a pas pu être vérifié, il est retiré, même s'il arrangeait la démonstration."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi les chiffres générés par l'IA demandent-ils une vigilance particulière ?",
            'paragraphes' => [
                "Un assistant d'IA écrit des phrases plausibles, et un chiffre plausible lui coûte aussi peu qu'un adjectif. Il peut citer une étude réelle avec un résultat inventé, mélanger deux années, ou arrondir un taux au point de changer la conclusion. Le danger tient à la forme : la réponse est rédigée avec assurance, mise en forme, parfois accompagnée d'une référence. L'exercice du deuxième après-midi part d'une question de marché posée en direct à un assistant ; le groupe vérifie ensuite chaque nombre de la réponse dans sa source.",
                "L'entreprise reste responsable de ce qu'elle publie ou décide sur cette base. L'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a>, condamné à indemniser un passager à qui son assistant avait annoncé une règle de remboursement inexistante, montre qu'un tiers ne fait pas la différence entre ce qu'a écrit la machine et ce qu'a dit l'entreprise. Pour les usages quotidiens des assistants et leurs règles, la formation <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a> et le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> prolongent ce point.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle conduite : groupe, méthode, supports et suivi ?",
            'intro' => "Deux jours sur les chiffres ne ressemblent pas à un cours de statistique. Les notions sont courtes ; le temps est consacré aux documents des participants et aux discussions qu'ils provoquent.",
            'items' => [
                ['titre' => "Dix participants au plus", 'texte' => "Assez pour que les rapports de chacun se confrontent, assez peu pour que chaque document soit lu par le formateur. À distance, le groupe descend à huit, avec des séances plus courtes."],
                ['titre' => "Une notion, un document réel", 'texte' => "Chaque notion est présentée en une dizaine de minutes avec un exemple tiré de la statistique publique, puis appliquée aussitôt à un document apporté par un participant. Les exemples d'école ne servent qu'à fixer le vocabulaire."],
                ['titre' => "Calculer à la main", 'texte' => "Les calculs se font sur papier ou à la calculatrice, parfois dans un tableur pour les vérifier. Refaire soi-même une moyenne ou un écart en points ancre la notion bien mieux qu'un résultat affiché par un logiciel."],
                ['titre' => "Le droit de poser la question gênante", 'texte' => "Les participants s'entraînent à interroger un chiffre présenté par un supérieur, un collègue ou un partenaire, avec des formulations qui restent courtoises. C'est souvent la compétence la plus utile au retour."],
                ['titre' => "Des supports remis en fichiers modifiables", 'texte' => "La grille des dix questions, le modèle de notice d'indicateur, le modèle de note de décision, la liste des procédés graphiques trompeurs, la méthode de vérification d'un chiffre généré par l'IA, les exercices corrigés et les liens vers les sources publiques utilisées."],
                ['titre' => "Une évaluation sur pièce", 'texte' => "L'évaluation porte sur la note de décision de chaque participant, relue par le groupe et par le formateur. Une attestation de fin de formation mentionne les notions travaillées et le résultat de cette évaluation."],
                ['titre' => "Un suivi sur des décisions réelles", 'texte' => "La séance à un mois part des notes rédigées et des réunions tenues depuis la formation. Entre-temps, une question sur un chiffre précis peut être posée par courriel ou par WhatsApp, dans les conditions prévues au devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils sont utilisés pendant la formation, et combien coûtent-ils ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, dans la devise affichée, hors taxes quand l'éditeur le précise. Aucun abonnement n'est à acheter pour suivre la formation, et aucun n'est inclus dans son prix.",
            'entetes' => ['Outil', 'Usage pendant la formation', 'Coût d\'éditeur relevé'],
            'lignes'  => [
                ["Papier, crayon, calculatrice", "Calculs de moyennes, médianes, écarts en points, lecture critique des graphiques imprimés", "Aucun"],
                ["LibreOffice Calc", "Vérifier un calcul, trier une petite série, reconstruire un graphique corrigé", "Gratuit ; version 26.8 annoncée sur le site du projet"],
                ["Google Sheets", "Même usage, dans le navigateur", "Toute personne disposant d'un compte Google peut créer des feuilles de calcul, selon la page produit de Google"],
                ["Microsoft Excel", "Même usage, quand l'entreprise en dispose déjà", "Aucun achat demandé pour la formation"],
                ["Portails statistiques publics (INSEE, Eurostat, ANSD, BCEAO)", "Exemples réels, recherche d'une source primaire, lecture des notes méthodologiques", "Gratuits"],
                ["ChatGPT", "Exercice de vérification d'un chiffre généré", "Free à 0 € ; Go à 8 € par mois ; Plus à 23 € par mois, prix affichés pour la France"],
                ["Claude", "Même exercice, pour comparer les réponses", "Free à 0 dollar ; Pro à 17 dollars par mois en paiement annuel ou 20 dollars au mois, hors taxes"],
                ["Gemini", "Même exercice", "Gratuit avec un compte Google ; Google AI Plus à 4,99 € et Google AI Pro à 21,99 € par mois, prix affichés pour la France"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon le métier et le pays ?",
            'items' => [
                ['secteur' => "Distribution de produits de grande consommation, à Cotonou", 'probleme' => "Situation type : le chiffre d'affaires mensuel progresse, la direction prévoit d'ouvrir un nouveau dépôt, mais personne n'a regardé les quantités vendues.", 'solution' => "La formation fait séparer valeur et volume : une hausse des prix d'achat répercutée sur les tarifs peut faire monter le chiffre d'affaires pendant que les volumes reculent. La note de décision retient le volume par dépôt et la marge, et reporte l'ouverture d'un trimestre pour vérifier la tendance."],
                ['secteur' => "Institution de microfinance, à Abidjan", 'probleme' => "Situation type : le taux de remboursement global baisse alors que chaque agence annonce une amélioration, et le conseil d'administration soupçonne une erreur de calcul.", 'solution' => "L'exercice sur l'effet de structure montre qu'aucun calcul n'est faux : la part des prêts accordés par les agences rurales, aux taux plus bas, a augmenté. Le conseil décide de suivre le taux par agence et par type de prêt, plutôt qu'un taux unique."],
                ['secteur' => "ONG de santé communautaire, à Dakar", 'probleme' => "Situation type : le rapport annuel affiche 94 % de bénéficiaires satisfaits, obtenus par appels téléphoniques, et le bailleur demande ce que ce chiffre représente.", 'solution' => "Le travail sur l'échantillon fait apparaître que seuls les bénéficiaires joignables ont été interrogés. L'équipe de suivi-évaluation rédige la description de l'échantillon, ses absents et une méthode de tirage pour l'année suivante, que le bailleur accepte."],
                ['secteur' => "Groupe scolaire, à Lomé ou à Ouagadougou", 'probleme' => "Situation type : une classe affiche 100 % de réussite et une autre 60 %, et la direction envisage de réaffecter les enseignants sur cette base.", 'solution' => "La lecture des effectifs montre deux candidats d'un côté et quinze de l'autre. La direction apprend à cumuler plusieurs années et à comparer des classes de taille voisine avant toute décision touchant des personnes."],
                ['secteur' => "PME industrielle, en France", 'probleme' => "Situation type : le taux de réclamations clients bondit en mars, au moment où l'entreprise change d'outil de service client.", 'solution' => "La question de la définition révèle que le nouvel outil enregistre aussi les demandes d'information comme réclamations. La série est recalculée sur l'ancienne définition, et le comité retient une rupture de série notée sur tous les graphiques."],
                ['secteur' => "Association ou fondation, en Belgique ou en Suisse", 'probleme' => "Situation type : un dossier de demande de subvention cite des chiffres sur le public visé, rédigés avec l'aide d'un assistant d'IA, sans source vérifiable.", 'solution' => "La méthode de vérification retrouve deux chiffres dans des publications officielles, corrige un troisième daté de plusieurs années, et en écarte un quatrième introuvable. Le dossier final cite chaque nombre avec son organisme et sa date."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, inter-entreprises, à distance ou hybride : comment la formation s'organise-t-elle ?",
            'legende' => "Le contenu reste le même d'un format à l'autre ; le rythme et la confidentialité des documents changent. Dix participants au plus en salle, huit à distance.",
            'entetes' => ['Format', 'Pour qui', 'Rythme habituel', 'Documents travaillés'],
            'lignes'  => [
                ["Intra, dans vos locaux", "Un comité de direction, une équipe de cadres, un conseil d'administration", "Deux journées, consécutives ou séparées d'une semaine, puis la séance de suivi", "Vos rapports et vos tableaux de bord, sans anonymisation entre collègues"],
                ["Inter-entreprises", "Un ou deux participants par structure, dirigeants de petites organisations", "Deux journées consécutives", "Exemples publics et documents anonymisés par chaque participant"],
                ["À distance", "Participants répartis entre plusieurs villes ou pays, en Afrique, en Europe ou au Canada", "Six séances de deux heures et quart sur trois semaines", "Documents envoyés avant chaque séance, travaux entre les séances"],
                ["Hybride", "Une équipe en partie sur place, en partie à distance", "Première journée en salle, seconde en deux séances à distance", "Les mêmes, avec un animateur attentif aux participants connectés"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, une fois connus le groupe, les documents à préparer et le format. Le premier échange, le cadrage et le devis sont gratuits, avec une réponse sous 24 heures. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier inscrit au devis.",
            'items'      => [
                ['offre' => "Formation de deux jours", 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées sur vos documents", "Grille des dix questions et modèles de notice et de note de décision", "Exercices corrigés et sources publiques utilisées", "Évaluation sur pièce et attestation de fin de formation"]],
                ['offre' => "Préparation sur vos rapports", 'prix' => 'Sur devis', 'inclus' => ["Lecture préalable des rapports et tableaux de bord transmis", "Choix des exercices sur vos propres chiffres", "Anonymisation guidée des documents sensibles"]],
                ['offre' => "Séance de suivi à un mois", 'prix' => 'Sur devis', 'inclus' => ["Deux heures à distance", "Relecture des notes de décision rédigées", "Mise à jour de la grille de l'équipe"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, dix personnes au plus par groupe en salle.",
                "La part de préparation sur mesure : nombre de rapports à lire avant la session, exercices construits sur vos chiffres.",
                "Le format : intra, inter-entreprises, à distance ou hybride, et le découpage en séances.",
                "Le lieu : vos locaux à Cotonou, une autre ville ou un autre pays, ou la visioconférence ; les déplacements sont chiffrés à part.",
                "La langue des supports, en français ou en anglais.",
                "Les exigences d'un financeur : feuilles de présence, programme détaillé, attestations nominatives.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il financer une partie du coût ?",
            'paragraphes' => [
                "Peut-être, selon le pays, le statut des participants et les règles propres à chaque fonds, mais aucune prise en charge n'est promise sur cette page. En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> indique, sur sa page consultée le 5 octobre 2026, que toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan de formation ; les actions peuvent y être internes, interentreprises ou exécutées à l'étranger. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> tient un guichet consacré au financement du personnel des entreprises et des membres des organisations professionnelles.",
                "Au Bénin, les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage (FODEFCA) ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions s'apprécient avec lui, dossier par dossier. En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds : envoyez votre question au fonds par écrit, programme et devis joints, et construisez votre budget sans compter sur un accord.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un chiffre exact peut-il quand même conduire à une mauvaise décision ?",
            'texte' => "Parce qu'un agrégat juste peut cacher l'essentiel. Selon l'ANSD, la croissance du Sénégal a atteint 6,5 % en 2025, portée par la première année complète d'exploitation pétrolière à Sangomar et le démarrage de la production gazière ; hors hydrocarbures, le PIB n'a progressé que de 2,4 %, après 3,3 % en 2024. Un fournisseur de biens de consommation qui planifierait ses ventes sur le premier chiffre se tromperait d'économie. Dans une entreprise, le même piège prend la forme d'un chiffre d'affaires porté par un seul gros contrat, ou d'une moyenne d'agences tirée par la plus grande. Avant de décider, demandez toujours de quoi le total est fait.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Les notions sont rarement oubliées ; ce sont les habitudes de réunion qui reprennent le dessus. Ces dérives reviennent d'une organisation à l'autre, et chacune a une parade simple.",
            'items' => [
                ['titre' => "Tout soupçonner, ne plus rien décider", 'texte' => "Après deux jours de doute méthodique, certains participants refusent tout chiffre imparfait. Or aucun chiffre ne l'est. La note de décision sert à décider malgré les limites, en les écrivant, et en fixant la date à laquelle on vérifiera."],
                ['titre' => "Garder la grille pour soi", 'texte' => "Un seul cadre formé qui interroge les chiffres passe pour un contradicteur. La grille des dix questions est présentée à l'équipe et adoptée comme règle commune des réunions, idéalement par le dirigeant lui-même."],
                ['titre' => "Laisser les définitions dans un tiroir", 'texte' => "Les notices d'indicateurs rédigées pendant la formation vieillissent dès le premier changement d'outil. Un responsable par indicateur les tient à jour, et toute modification est signalée sur les graphiques concernés."],
                ['titre' => "Revenir aux pourcentages de pourcentages", 'texte' => "La pression d'un titre accrocheur pousse à écrire « +50 % » là où « +0,4 point » serait juste. La règle de l'équipe : deux taux se comparent en points, et le pourcentage n'est ajouté que s'il éclaire."],
                ['titre' => "Reprendre un chiffre d'IA par manque de temps", 'texte' => "La veille d'une présentation, la tentation est forte de coller une statistique générée. La règle reste la même : sans source primaire ouverte et lue, le chiffre ne sort pas."],
                ['titre' => "Décider sur le provisoire sans le dire", 'texte' => "Un chiffre de clôture non arrêtée ou une estimation rapide peut fonder une décision urgente. La note le mentionne, et la décision est relue quand le chiffre définitif arrive."],
                ['titre' => "Confondre la mesure et l'objectif", 'texte' => "Dès qu'un indicateur sert à évaluer les personnes, la façon de le remplir change. On garde des indicateurs de contrôle que personne n'a intérêt à embellir, et l'on revoit chaque année ceux qui servent aux primes."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, sources locales, langue et données personnelles : que change le contexte pour cette formation ?",
            'paragraphes' => [
                "Trouver la source primaire suppose d'y accéder. L'Union internationale des télécommunications indiquait le 15 octobre 2025 que 74 % de la population mondiale utilisait Internet, mais 36 % seulement en Afrique. En session à distance, les documents de travail et les publications statistiques sont donc envoyés à l'avance en PDF ou en tableur, et chaque participant apprend à conserver une copie datée de la source qu'il cite, plutôt qu'un simple lien.",
                "Cette habitude vaut aussi pour les sites officiels. Le 5 octobre 2026, le <a href=\"https://instad.bj/\">site de l'INStaD</a>, l'Institut national de la statistique et de la démographie du Bénin qui a succédé à l'INSAE, affichait une page de maintenance annonçant une nouvelle plateforme. En Côte d'Ivoire, le Conseil des ministres a adopté le 12 juin 2024 la dissolution de l'Institut national de la statistique et la création de l'Agence nationale de la statistique (ANStat), comme l'a annoncé le <a href=\"https://www.gouv.ci/actualite/systeme-statistique-national-linstitut-national-de-la-statistique-ins-dissous-et-remplace-par-lagence-nationale-de-la-statistique-2393\">portail du gouvernement ivoirien</a>. Savoir quel organisme produit un chiffre aujourd'hui, et où le retrouver, fait partie de la lecture.",
                "Les publications régionales offrent un recours. Le bulletin mensuel de la BCEAO reprend l'inflation des huit pays de l'UEMOA à partir des instituts nationaux, et l'ANSD publie chaque mois son indice des prix au plus tard le 10 du mois suivant, avec des pondérations issues de l'enquête harmonisée sur les conditions de vie des ménages de 2021-2022. Toutes ces publications sont en français, comme les séances ; les supports peuvent être remis en anglais pour un conseil ou un bailleur anglophone.",
                "Lire des chiffres internes, c'est souvent manipuler des données personnelles : listes de clients, salaires, absences, bénéficiaires. Au Bénin, elles relèvent de la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>. En Europe, le RGPD s'applique aussi, comme l'explique la <a href=\"https://www.cnil.fr/fr/reglement-europeen-protection-donnees\">CNIL</a>, à une organisation établie hors de l'Union qui vise des personnes qui s'y trouvent. Les documents apportés en formation sont donc anonymisés, et l'on apprend qu'un rapport de décision n'a presque jamais besoin d'un nom.",
                "Enfin, l'usage de l'IA a désormais un cadre en Europe. Selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA prévue par l'article 4 du règlement s'applique depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l'omnibus numérique entré en vigueur mi-juillet 2026 la maintient pour les fournisseurs et les utilisateurs professionnels, sans plus imposer de niveau « suffisant ». La partie consacrée aux chiffres générés par l'IA contribue à cette maîtrise, sans constituer à elle seule une formation à l'IA.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à décider avec les données auprès de Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Ce qui le rend utile ici, c'est qu'il voit les chiffres avant qu'ils n'arrivent en réunion. En paramétrant des logiciels de gestion, en reliant des outils entre eux et en construisant des applications, il sait comment une donnée est saisie, à quel moment elle se perd, et pourquoi deux écrans du même logiciel affichent deux totaux. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a> : il connaît aussi, de l'intérieur, la manière dont une IA produit des réponses chiffrées.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé avec des organisations de " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il n'est certifié par aucun éditeur, ne cite aucun client formé et ne promet aucun résultat chiffré, ce qui serait un comble pour cette formation.",
                "Sa façon de former suit trois règles : partir des documents que vous utilisez vraiment, faire calculer à la main avant de faire confiance à un logiciel, et laisser la décision à ceux qui la portent. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, et l'organisation commune à ses formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. Les autres <a href=\"/formations/domaine/transformation-digitale\">formations en transformation digitale</a> et le <a href=\"/formations/\">catalogue complet</a> présentent les suites possibles.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Un chiffre ne vaut que par sa définition, sa source, sa date et ce à quoi on le compare. Demandez la médiane à côté de la moyenne, les points à côté des pourcentages, l'effectif sous chaque taux, la marge d'erreur d'une enquête, et une seconde explication à chaque cause annoncée. Lisez les axes avant les courbes, traitez tout chiffre d'IA comme non sourcé tant que vous n'avez pas lu sa source, et décidez quand même, en écrivant les limites et la date de revue.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vos réunions débattent-elles des chiffres au lieu de décider ?",
            'texte'  => "Envoyez un rapport ou un tableau de bord que votre équipe utilise, en indiquant les personnes à former et les décisions qu'il sert à prendre. Vous recevez une réponse sous 24 heures, puis une proposition de cadrage gratuit et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon équipe à lire les chiffres'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il être à l'aise en mathématiques pour suivre la formation ?", 'r' => "Non. Les calculs ne dépassent pas la règle de trois, la moyenne et le classement d'une série pour trouver sa médiane. La difficulté n'est pas le calcul, mais l'habitude de poser les bonnes questions ; c'est elle que la formation installe, sur vos propres documents."],
        ['q' => "Quelle différence avec la formation aux tableaux de bord Power BI et Looker Studio ?", 'r' => "Celle-ci apprend à construire des tableaux de bord : préparer les données, les modéliser, publier les rapports. La formation décider avec les données apprend à lire et à questionner ces tableaux, quel que soit l'outil qui les produit. Les deux se complètent : les constructeurs gagnent à savoir comment leurs lecteurs vont interroger leurs chiffres."],
        ['q' => "Utilise-t-on un logiciel pendant la formation ?", 'r' => "Très peu. Un tableur sert à vérifier un calcul ou à redessiner un graphique, et un assistant d'IA sert à l'exercice de vérification. L'essentiel se fait sur des rapports imprimés ou affichés, avec un crayon et une calculatrice, parce que c'est ainsi que les chiffres se lisent en réunion."],
        ['q' => "Pouvons-nous travailler sur nos propres rapports sans exposer nos données ?", 'r' => "Oui. En intra, vos documents restent entre collègues ; les données nominatives sont retirées avant la session et les montants peuvent être masqués ou multipliés par un coefficient. En inter-entreprises, chaque participant anonymise ses documents selon une consigne envoyée à l'avance, et les exemples publics prennent le relais quand c'est nécessaire."],
        ['q' => "Pourquoi utiliser des statistiques publiques plutôt que des exemples inventés ?", 'r' => "Parce qu'elles sont réelles, datées et documentées. Les publications de l'ANSD, de l'INSEE, de la BCEAO ou d'Eurostat donnent leurs définitions, leurs marges d'erreur et leurs révisions : elles montrent comment un producteur sérieux présente un chiffre, et servent ensuite de modèle pour vos rapports internes."],
        ['q' => "La formation convient-elle à un conseil d'administration ?", 'r' => "Oui, sous une forme resserrée et en intra. Les administrateurs disposent de peu de temps pour juger un dossier chiffré ; la grille des dix questions et la lecture des graphiques leur servent dès la séance suivante. Le cadrage adapte la durée et les exemples à leurs dossiers habituels."],
        ['q' => "Apprend-on à utiliser l'IA pour analyser des données ?", 'r' => "Non. La formation apprend à vérifier les chiffres qu'un assistant d'IA produit, pas à lui confier des analyses. Les usages quotidiens des assistants relèvent de la formation IA en entreprise, et les règles d'usage dans l'organisation de la formation consacrée à la gouvernance de l'IA."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "La grille des dix questions, les modèles de notice d'indicateur et de note de décision, la liste des procédés graphiques trompeurs, la méthode de vérification des chiffres générés, les exercices corrigés, les liens vers les sources utilisées et une attestation de fin de formation. Elle ne délivre ni diplôme ni certification."],
        ['q' => "La formation peut-elle se dérouler entièrement à distance ?", 'r' => "Oui, en six séances d'environ deux heures et quart réparties sur trois semaines, avec huit participants au plus. Les documents sont envoyés avant chaque séance et un exercice est fait entre deux séances. Une connexion stable et une caméra allumée sont demandées."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du nombre de participants, de la préparation sur vos rapports, du format, du lieu et de la langue des supports. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "ANSD, Enquête nationale sur l'emploi au Sénégal, deuxième trimestre 2026 (mise en ligne du 30 septembre 2026)", 'url' => 'https://www.ansd.sn/node/14366', 'date' => '2026-10-05'],
        ['titre' => "ANSD, Indice harmonisé des prix à la consommation, août 2026 (base 100 en 2023)", 'url' => 'https://www.ansd.sn/node/13507', 'date' => '2026-10-05'],
        ['titre' => "ANSD, évolution annuelle de l'indice harmonisé des prix à la consommation en 2025", 'url' => 'https://www.ansd.sn/node/13511', 'date' => '2026-10-05'],
        ['titre' => "ANSD, comptes nationaux du Sénégal (base 2021), comptes provisoires 2025", 'url' => 'https://www.ansd.sn/node/13490', 'date' => '2026-10-05'],
        ['titre' => "ANSD, note sur le changement d'année de base des comptes nationaux du Sénégal (base 2021), novembre 2025", 'url' => 'https://www.ansd.sn/sites/default/files/2025-11/Note-synthetique-resultats-comptes-nationaux-renoves-base2021.pdf', 'date' => '2026-10-05'],
        ['titre' => "INSEE, Informations rapides n° 192 : chômage au sens du BIT au deuxième trimestre 2026 (7 août 2026)", 'url' => 'https://www.insee.fr/fr/statistiques/9032359', 'date' => '2026-10-05'],
        ['titre' => "INSEE, Informations rapides n° 242 : indice des prix à la consommation, résultats provisoires de septembre 2026", 'url' => 'https://www.insee.fr/fr/statistiques/9056956', 'date' => '2026-10-05'],
        ['titre' => "INSEE, Insee Première n° 2079 : les salaires dans le secteur privé en 2024 (23 octobre 2025)", 'url' => 'https://www.insee.fr/fr/statistiques/8657156', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, Bulletin mensuel des statistiques, juillet 2026 (inflation dans les pays de l'UEMOA)", 'url' => 'https://www.bceao.int/sites/default/files/2026-09/Bulletin%20mensuel%20des%20statistiques%20-%20Juillet%202026.pdf', 'date' => '2026-10-05'],
        ['titre' => "Eurostat, Euro indicators : estimation rapide de l'inflation de la zone euro, septembre 2026 (2 octobre 2026)", 'url' => 'https://ec.europa.eu/eurostat/web/products-euro-indicators/w/2-02102026-ap', 'date' => '2026-10-05'],
        ['titre' => "INStaD, Institut national de la statistique et de la démographie du Bénin, page d'accueil (maintenance en cours)", 'url' => 'https://instad.bj/', 'date' => '2026-10-05'],
        ['titre' => "Portail officiel du gouvernement de Côte d'Ivoire, l'INS dissous et remplacé par l'Agence nationale de la statistique (13 juin 2024)", 'url' => 'https://www.gouv.ci/actualite/systeme-statistique-national-linstitut-national-de-la-statistique-ins-dissous-et-remplace-par-lagence-nationale-de-la-statistique-2393', 'date' => '2026-10-05'],
        ['titre' => "Union internationale des télécommunications, Facts and Figures 2025 : usage d'Internet (15 octobre 2025)", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, tarification de ChatGPT (prix affichés pour la France)", 'url' => 'https://chatgpt.com/fr-FR/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, tarifs de Claude", 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Google, abonnements Google AI et Gemini", 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-05'],
        ['titre' => "The Document Foundation, présentation de LibreOffice", 'url' => 'https://www.libreoffice.org/discover/libreoffice/', 'date' => '2026-10-05'],
        ['titre' => "Google, page produit de Google Sheets", 'url' => 'https://workspace.google.com/intl/fr/products/sheets/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, le règlement général sur la protection des données (RGPD)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle et technique", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['power-bi-looker-studio', 'excel-google-sheets', 'sql-analystes', 'strategie-transformation-digitale', 'digitalisation-processus', 'conduite-du-changement'],
        'services'    => ['digitalisation-d-entreprise', 'consultant-digitalisation', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
