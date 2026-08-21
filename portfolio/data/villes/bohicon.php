<?php
// Bohicon, noeud routier et ferroviaire du centre. Commerce de gros, agro-transformation.
return [
'nom' => 'Bohicon', 'slug' => 'bohicon', 'pays' => 'Bénin', 'pays_slug' => 'benin',
'region' => 'Zou', 'distance_km' => 130, 'sur_place' => false,

'accroche' => 'Sites et outils de gestion pour le carrefour commercial du centre',

'intro' => "Bohicon est le nœud routier et ferroviaire du centre du Bénin : tout ce qui monte vers le nord ou redescend vers la côte y passe. La ville vit de son marché, du commerce de gros et de l'agro-transformation, dans l'ombre médiatique de sa voisine Abomey mais avec une activité économique nettement plus dense.",

'contexte' => "Le commerce de gros et la transformation agricole dominent : produits vivriers, huile de palme, transformation locale, revente vers Cotonou et vers le nord. Ce sont des entreprises qui traitent des volumes réels mais gèrent encore beaucoup sur cahier ou sur des tableurs improvisés. Le besoin numérique porte donc moins sur la vitrine que sur l'outil : savoir ce qui est en stock, ce qui a été livré, ce qui reste à encaisser. La visibilité en ligne vient ensuite, sur des requêtes peu disputées. C'est une différence de fond avec Cotonou : ici, on ne me demande presque jamais « un beau site », on me demande d'arrêter de perdre de l'argent sur des comptes mal tenus.",

'quartiers' => [
    ['Le marché central', "Le cœur commercial, très dense, où se traitent les volumes de vivriers. Des grossistes qui manipulent chaque jour des sommes importantes sans aucun outil de suivi, et pour qui une erreur de comptage se solde directement en perte."],
    ['La zone de la gare', "Le point de rupture de charge entre le rail, la route du nord et celle de Cotonou. Transporteurs, messageries et entrepôts. Une activité de flux où la traçabilité des livraisons est le vrai sujet."],
    ['Avogbanna et les axes commerçants', "Quincailleries, matériaux de construction, pièces détachées. Des commerces qui vendent aussi bien aux particuliers qu'aux artisans, avec des tarifs différenciés difficiles à tenir sans outil."],
    ['Les unités de transformation', "Huileries, décortiqueries, transformation de manioc et de soja. Des structures qui vendent à des acheteurs régionaux et pour lesquelles une présentation en ligne sérieuse ouvre des marchés hors de la région."],
    ['Sodohomè et la périphérie agricole', "Producteurs et coopératives des environs, qui approvisionnent le marché. Un maillon encore presque entièrement hors ligne, alors que la demande d'approvisionnement direct existe."],
],

'concurrence' => "Bohicon est probablement le marché où le rapport entre l'effort et le résultat est le plus favorable de tout ce site. La ville est économiquement importante mais numériquement quasi vierge : sur des requêtes comme « grossiste vivrier Bohicon », « huilerie Zou » ou « quincaillerie Bohicon », il n'y a tout simplement rien à déloger. Le paradoxe est que la visibilité y est rarement la priorité des entreprises : leur problème immédiat est la gestion interne, pas la prospection. Ce qui signifie qu'une structure qui traite les deux, d'abord son outil, puis sa présence en ligne, prend une avance considérable sur des concurrents qui, eux, ne feront ni l'un ni l'autre avant plusieurs années.",

'secteurs' => ['Commerce de gros et demi-gros', 'Agro-transformation', 'Transport et messagerie', 'Quincaillerie et matériaux', 'Établissements scolaires', 'Restauration et hébergement'],

'besoins' => [
    ['Savoir où en sont stocks et livraisons', "Un outil de gestion accessible depuis un téléphone, qui remplace le cahier et les tableurs éparpillés, avec un historique consultable et des exports.", 'application-web-sur-mesure'],
    ['Facturer proprement et se faire payer', "Factures générées automatiquement, suivi des impayés et relances programmées : le point qui coûte le plus cher quand il est mal tenu.", 'automatisation-ia'],
    ['Se rendre visible sans grosse dépense', "Sur les requêtes de Bohicon, la concurrence est quasi nulle. Une fiche Google et une vitrine bien construite suffisent souvent à capter les recherches locales.", 'seo-local-google-business'],
    ['Vendre au-delà du marché local', "Une boutique en ligne permet de toucher Cotonou et le nord sans multiplier les intermédiaires, avec paiement Mobile Money et suivi des commandes.", 'site-e-commerce'],
],

'comparatif' => [
    ['Grossiste vivrier', 'Outil de gestion stocks, livraisons et encaissements', 'à partir de 500 000 FCFA', '6 à 9 semaines'],
    ['Unité de transformation', 'Vitrine avec catalogue produits et capacités de production', 'à partir de 350 000 FCFA', '3 à 4 semaines'],
    ['Quincaillerie ou matériaux', 'Catalogue en ligne avec tarifs différenciés pro et particulier', 'à partir de 450 000 FCFA', '4 à 6 semaines'],
    ['Transporteur ou messagerie', 'Suivi de livraisons avec confirmation automatique', 'à partir de 400 000 FCFA', '4 à 6 semaines'],
    ['Coopérative agricole', 'Vitrine simple orientée acheteurs et partenaires', 'à partir de 250 000 FCFA', '2 à 3 semaines'],
],

'erreurs' => [
    ['Le tableur qui circule par clé USB', "C'est la situation que je rencontre le plus souvent ici : trois versions d'un même fichier de stock, chacune modifiée par une personne différente, et plus personne ne sait laquelle fait foi. Le problème n'est pas le tableur en soi, c'est qu'il n'existe qu'en copies. Un outil partagé, où chacun voit la même donnée au même moment, règle cela définitivement."],
    ['Des reçus manuscrits sans double', "Un carnet à souche perdu ou mouillé, et c'est un mois d'encaissements qui devient invraisemblable. La facturation générée automatiquement laisse une trace consultable, exportable, et supprime les litiges sur ce qui a été payé ou non."],
    ['Confondre urgence et priorité', "Beaucoup d'entreprises de Bohicon veulent d'abord « un site », parce que c'est visible, alors que leur perte d'argent vient de la gestion. Faire le site d'abord, c'est soigner l'apparence d'un problème qu'on n'a pas traité. Je conseille systématiquement l'inverse ici."],
    ['Un outil pensé pour un ordinateur', "Dans un entrepôt ou sur un marché, personne ne travaille devant un écran fixe. Un outil de gestion conçu pour le bureau ne sera jamais utilisé. Ici, la conception part du téléphone : gros boutons, peu de champs, utilisable debout et d'une main."],
],

'apres_livraison' => "Le vrai risque, sur ce type de projet, n'est pas technique : c'est que l'outil ne soit pas adopté. Une équipe habituée au cahier depuis quinze ans ne bascule pas en une démonstration d'une heure. L'accompagnement est donc calibré pour cela. La formation se fait en deux temps : une première session à la livraison, puis une seconde deux à trois semaines plus tard, quand les vraies questions ont émergé de l'usage réel, et ce sont rarement celles qu'on anticipe. Entre les deux, le support par WhatsApp est ouvert sans compter, parce que c'est la période où tout se joue. Je prévois aussi une période de double saisie : on continue le cahier en parallèle pendant deux ou trois semaines, le temps que la confiance s'installe. Cela paraît redondant, mais c'est ce qui évite l'abandon au premier doute.",

'budget' => "Un outil de gestion coûte plus cher qu'une vitrine, et il faut comprendre pourquoi avant de comparer les devis. Une vitrine présente une information qui existe déjà ; un outil de gestion doit d'abord modéliser votre façon de travailler, qui n'a jamais été écrite nulle part. Concrètement, sur un projet à 500 000 FCFA, une part importante du budget passe en entretiens et en cadrage : comprendre comment vous comptez un sac, ce que vous appelez une livraison partielle, comment vous gérez un client qui paie en trois fois. C'est ce travail-là qui fait qu'un outil est utilisé plutôt qu'abandonné, et c'est précisément celui que les devis les moins chers suppriment. À l'inverse, une vitrine ou une fiche Google restent accessibles : 250 000 à 350 000 FCFA suffisent pour être trouvable, et c'est un bon point de départ si le budget est serré.",

'delais' => "Une vitrine se livre en deux à quatre semaines. Un outil de gestion demande six à neuf semaines, et ce délai est difficilement compressible : il inclut les entretiens de cadrage, une première version testée en conditions réelles, puis les ajustements qui en découlent. Vouloir aller plus vite produit systématiquement un outil qui ne correspond pas à la réalité du terrain et que personne n'utilise. Le calendrier tient compte de votre activité : à Bohicon, les jours de marché sont intouchables, et les sessions de travail se calent en dehors. Enfin, la période d'adoption, les deux à trois semaines de double saisie après la livraison, fait partie du projet et doit être prévue dans votre planning, pas traitée comme un bonus optionnel.",

'rythme' => "Le calendrier agricole commande tout ici. Les périodes de récolte et les pics de collecte, variables selon les filières mais concentrés en fin et en début d'année, saturent l'activité des grossistes et des transformateurs : ce sont les pires moments pour lancer un projet, personne n'a une heure à donner. La fenêtre favorable se situe dans les creux de saison, où les équipes peuvent réellement participer au cadrage. Le marché hebdomadaire impose son propre rythme, plus court : les jours de marché sont entièrement mobilisés, et toute réunion doit être calée en dehors. Anticiper ces deux calendriers dès le devis évite un projet qui traîne six mois faute de disponibilité.",

'cas_type' => "Un grossiste en produits vivriers, une quinzaine d'employés, plusieurs tonnes en stock, une trésorerie importante. Tout est tenu sur des cahiers et un tableur qui circule par clé USB. Le patron sait qu'il perd de l'argent, des sacs qui manquent sans explication, des clients qui contestent des livraisons, des créances qu'il découvre trop tard, mais il ne sait pas où ni combien. Sa demande initiale : « je veux un site pour être connu ». Après un entretien, le sujet est ailleurs : il lui faut d'abord voir son stock en temps réel et facturer proprement. On construit donc l'outil, accessible sur téléphone, avec des écrans réduits à l'essentiel. Le site vient six mois plus tard, quand les comptes sont enfin fiables et qu'il a du temps pour se montrer.",

'pourquoi_moi' => "Je ne vends pas un site à quelqu'un dont le problème est la gestion. Le cadrage sert précisément à distinguer les deux, et il m'arrive régulièrement de recommander un budget plus petit que celui envisagé, ou de reporter la vitrine. Ce qui est livré ici est pensé pour le terrain : conçu pour le téléphone, en français simple, avec une formation en deux temps et une période de double saisie pour que l'outil soit réellement adopté et pas seulement installé.",

'travailler' => "Bohicon est à environ 130 kilomètres d'Abomey-Calavi. Les projets s'y mènent principalement à distance ; un déplacement reste possible pour un cadrage important ou une formation sur site, à convenir au devis.",

'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte ou espèces.",

'demarrer' => "À Bohicon, un projet ne commence pas devant un écran mais dans votre activité. Le premier échange sert à comprendre comment vous travaillez réellement aujourd'hui : comment vous comptez un sac, ce que vous appelez une livraison partielle, comment vous notez un client qui paie en trois fois, qui a le droit de modifier un prix. Ces questions paraissent triviales, elles sont pourtant tout le projet : un outil qui ne colle pas à ces règles-là ne sera jamais utilisé. Cette phase demande deux à trois séances, idéalement avec la personne qui tient les cahiers au quotidien et pas seulement avec le dirigeant, parce que ce sont rarement les mêmes informations. Vous recevez ensuite un devis qui distingue le cadrage, le développement et la formation, poste par poste. Si vous décidez de continuer, une première version est mise entre vos mains rapidement, volontairement incomplète, pour être testée en conditions réelles pendant une semaine. Les corrections qui en sortent valent mieux que trois réunions de spécifications, et c'est ce va-et-vient qui fait la différence entre un outil adopté et un outil abandonné.",

'faq' => [
    ["J'ai surtout besoin d'un outil de gestion, pas d'un site. Est-ce possible ?", "Tout à fait, et c'est le besoin le plus courant à Bohicon. Un outil sur mesure pour les stocks, les livraisons et la facturation, accessible depuis un téléphone, se conçoit indépendamment de toute vitrine. Le site peut venir plus tard, ou jamais si vous n'en voyez pas l'utilité."],
    ["Mes employés ne sont pas à l'aise avec l'informatique.", "C'est pris en compte dès la conception : les écrans sont réduits à l'essentiel, en français, pensés pour un téléphone plutôt qu'un ordinateur. Une formation est incluse à la livraison, et les premières semaines d'utilisation font l'objet d'un accompagnement rapproché, le temps que chacun prenne ses repères sans pression."],
    ["Vous déplacez-vous jusqu'à Bohicon ?", "C'est possible pour un cadrage important ou une formation sur site, à convenir dans le devis. La plupart des projets se mènent toutefois entièrement à distance, par téléphone et visioconférence, ce qui évite de répercuter des frais de déplacement sur le budget."],
    ["Pourquoi un outil de gestion coûte-t-il plus cher qu'un site ?", "Parce qu'un site présente une information qui existe déjà, alors qu'un outil doit d'abord modéliser votre façon de travailler, qui n'est écrite nulle part. Une part importante du budget passe en entretiens de cadrage, et c'est justement ce que les devis les moins chers suppriment."],
    ["Et si mon équipe n'utilise pas l'outil finalement ?", "C'est le vrai risque, et il est traité comme tel. La formation se fait en deux temps, avec une seconde session après trois semaines d'usage réel. Une période de double saisie en parallèle du cahier est prévue, le temps que la confiance s'installe avant d'abandonner l'ancien système."],
    ["Quand vaut-il mieux démarrer ?", "Hors période de récolte et hors jours de marché, quand vos équipes sont réellement disponibles pour les entretiens de cadrage. Un projet lancé en pleine collecte s'étire sur des mois faute de créneaux, alors que les mêmes travaux se bouclent en six semaines dans un creux de saison."],
],
];
