<?php
// Lome — capitale etrangere la plus proche (2 h de route). Port en eaux profondes, zone franche.
return [
'nom' => 'Lomé', 'slug' => 'lome', 'pays' => 'Togo', 'pays_slug' => 'togo',
'region' => 'Maritime', 'distance_km' => 150, 'sur_place' => true,

'accroche' => 'À deux heures de route de Cotonou, avec la même réactivité',

'intro' => "Lomé est à environ 150 kilomètres de Cotonou : c'est la capitale étrangère la plus proche de mon bureau, et un déplacement y reste envisageable dans la journée. La ville vit de son port en eaux profondes, de sa zone franche et de sa fonction de hub logistique pour toute la sous-région.",

'contexte' => "L'économie togolaise s'organise largement autour du port de Lomé, l'un des rares en eaux profondes de la côte ouest-africaine, et de la zone franche industrielle. Cela crée un tissu dense de transitaires, de sociétés de logistique, d'importateurs et de prestataires de services aux entreprises. À cela s'ajoute un secteur bancaire et financier régional important, plusieurs institutions ayant leur siège dans la ville. Les besoins numériques y sont proches de ceux de Cotonou — visibilité locale, outils de gestion, automatisation — avec un marché de prestataires moins encombré. La proximité géographique et culturelle simplifie beaucoup de choses : même monnaie, même langue de travail, aucun décalage horaire, et des habitudes commerciales très comparables.",

'quartiers' => [
    ['Le port et la zone franche', "Transitaires, commissionnaires en douane, entrepôts et unités industrielles. Le site sert de référence auprès de donneurs d'ordre étrangers qui vérifient une société avant de lui confier une marchandise. Le bilinguisme y est un vrai avantage."],
    ['Le centre administratif et bancaire', "Sièges de banques, institutions financières régionales, assurances et cabinets. Des attentes de sobriété et de sécurité, avec des besoins d'espaces client et de portails documentaires plus que de vitrines."],
    ['Bè et le grand marché', "Le pôle commerçant historique, très dense. Commerce de détail et de gros, avec une adoption forte de T-Money et Flooz. Un potentiel e-commerce local encore peu exploité."],
    ['Tokoin et Nyékonakpoè', "Zones mixtes avec cliniques, écoles privées, cabinets et commerces de services. Des recherches locales actives et une concurrence en ligne modérée : les premières positions restent atteignables."],
    ['Adidogomé et la périphérie ouest', "Extension résidentielle rapide, avec commerces de proximité, artisanat et petites unités de production. Un tissu comparable à celui d'Abomey-Calavi, largement absent du web."],
],

'concurrence' => "Le marché togolais est nettement moins encombré que celui d'Abidjan et un peu moins que celui de Cotonou. Quelques agences locales occupent les requêtes génériques, mais la profondeur manque : sur les requêtes sectorielles — « transitaire Lomé », « logiciel de gestion Togo », « automatisation entreprise Lomé » — les résultats sont pauvres et souvent dominés par des annuaires. Pour une entreprise togolaise, il y a là une fenêtre réelle, d'autant que beaucoup de structures du port et de la zone franche traitent avec des partenaires internationaux qui les cherchent en ligne avant de les contacter. Un site bilingue bien référencé y a une valeur commerciale directe, pas seulement une valeur d'image.",

'secteurs' => ['Transit et logistique portuaire', 'Import-export et zone franche', 'Services aux entreprises', 'Banque et assurance', 'Commerce de détail', 'Hôtellerie'],

'besoins' => [
    ['Un site professionnel pour rassurer un partenaire', "Dans le transit et l'import-export, le site sert de carte de visite auprès de partenaires étrangers qui vérifient avant de traiter.", 'site-vitrine-professionnel'],
    ['Connecter ses outils entre eux', "Une API sur mesure relie logiciel de gestion, site et outils de suivi, pour arrêter les doubles saisies entre systèmes.", 'api-rest-integrations'],
    ['Automatiser les échanges répétitifs', "Confirmations, relances, transmission de documents : des séquences qui tournent seules et libèrent du temps administratif.", 'automatisation-ia'],
    ['Être trouvé sur les requêtes togolaises', "Le marché des prestataires est moins encombré qu'à Abidjan : les premières positions locales restent accessibles.", 'referencement-naturel-seo'],
],

'comparatif' => [
    ['Transitaire ou commissionnaire', 'Vitrine bilingue avec services, références et demande de cotation', 'à partir de 400 000 FCFA', '3 à 5 semaines'],
    ['Importateur ou zone franche', 'Outil de suivi des expéditions et documents', 'à partir de 600 000 FCFA', '6 à 9 semaines'],
    ['Banque, assurance ou cabinet', 'Espace client sécurisé avec documents', 'à partir de 700 000 FCFA', '6 à 10 semaines'],
    ['Commerce de détail', 'Boutique avec T-Money, Flooz et carte bancaire', 'à partir de 500 000 FCFA', '4 à 7 semaines'],
    ['Hôtel ou restaurant', 'Vitrine bilingue avec réservation en ligne', 'à partir de 350 000 FCFA', '3 à 4 semaines'],
],

'erreurs' => [
    ['Un site figé depuis dix ans', "C'est très courant chez les transitaires et importateurs lomeéns : un site créé au début des années 2010, jamais mis à jour, illisible sur téléphone. Il produit l'effet inverse de celui recherché — un partenaire qui le consulte en conclut que la société n'est plus active. Mieux vaut trois pages actuelles qu'un site daté."],
    ['Aucune version anglaise dans un port international', "Le port de Lomé traite avec des armateurs, des chargeurs et des donneurs d'ordre anglophones. Un site strictement francophone se coupe d'une partie importante de sa clientèle naturelle, alors que traduire trois ou quatre pages clés représente une dépense marginale."],
    ['Ressaisir les mêmes données dans trois outils', "Dans le transit, la même expédition est souvent enregistrée dans un logiciel métier, un tableur et un e-mail de suivi. Chaque ressaisie est une source d'erreur et une perte de temps quotidienne. Relier ces outils par une API coûte moins cher qu'une année de doubles saisies."],
    ['Croire que la frontière complique tout', "Beaucoup d'entreprises togolaises hésitent à travailler avec un prestataire béninois par crainte des complications. En pratique il n'y en a aucune : même monnaie, même fuseau, même langue, deux heures de route. C'est plus simple que de travailler avec un prestataire européen."],
],

'apres_livraison' => "La proximité change la nature du suivi, et c'est ce qui distingue Lomé des autres villes étrangères couvertes ici. Un déplacement reste possible dans la journée : pour une formation d'équipe, une réunion de cadrage importante ou une intervention qui se règle mieux sur place, je peux venir, et cela se convient simplement au devis. Pour tout le reste — corrections, évolutions, questions courantes — le suivi se fait à distance par WhatsApp, sans décalage horaire ni délai de prise en charge. Vous recevez les accès complets à votre nom dès le départ, ainsi que le code source à la livraison. Un point pratique qui compte : la facturation se fait en francs CFA, la même monnaie qu'au Bénin, ce qui supprime toute conversion, tout frais de change et toute discussion sur le taux applicable.",

'budget' => "Le franc CFA ouest-africain étant commun au Togo et au Bénin, les tarifs s'appliquent tels quels, sans conversion ni frais de change — un point qui simplifie nettement la comparaison avec un prestataire européen ou nord-américain. Ce qui fait varier le budget à Lomé tient surtout à deux facteurs. Le premier est le bilinguisme : dans le portuaire et l'import-export, une version anglaise n'est pas un supplément esthétique mais une nécessité commerciale, et elle ajoute environ un tiers au travail rédactionnel. Le second est l'intégration avec l'existant : beaucoup de transitaires disposent déjà d'un logiciel métier, et relier ce système à un site ou à un outil de suivi demande du développement spécifique, dont le coût dépend entièrement de la qualité de la documentation du logiciel en question. Ce point est évalué au cadrage, avant tout engagement chiffré.",

'delais' => "Une vitrine bilingue se livre en trois à cinq semaines, un outil de suivi des expéditions en six à neuf, un espace client sécurisé en six à dix. Le déplacement possible dans la journée raccourcit sensiblement certaines phases : un cadrage qui prendrait trois visioconférences se règle souvent en une seule réunion sur place, et la formation d'équipe est bien plus efficace en présentiel. Le facteur qui allonge le plus les projets lomeéns est l'intégration avec un logiciel métier existant : si sa documentation technique est disponible, le raccordement se fait en une à deux semaines ; si elle ne l'est pas et qu'il faut procéder par rétro-ingénierie, comptez le double. C'est le premier point vérifié au cadrage, précisément pour ne pas découvrir le problème en cours de route.",

'rythme' => "L'activité lomeénne suit les flux portuaires plus que le calendrier civil. Les périodes de forte intensité correspondent aux pics d'importation, notamment avant les fêtes de fin d'année et lors des campagnes d'approvisionnement régionales vers le Burkina, le Niger et le Mali. Pendant ces phases, les équipes de transit sont mobilisées jour et nuit et n'ont aucune disponibilité pour un projet. Les creux, plus propices, se situent généralement en milieu d'année. Pour les commerces et l'hôtellerie, le rythme est plus classique, avec une fréquentation portée par les déplacements d'affaires régionaux, réguliers toute l'année.",

'cas_type' => "Une société de transit d'une vingtaine de personnes, installée près du port, qui traite pour des chargeurs béninois, burkinabè et nigériens. Elle a un site, fait il y a une dizaine d'années, en français uniquement, illisible sur téléphone. Le déclencheur est souvent une remarque d'un partenaire étranger qui n'a pas réussi à trouver d'informations en ligne avant de traiter. Le besoin est double : une présentation bilingue crédible, et surtout la fin des doubles saisies entre le logiciel métier, le tableur de suivi et les e-mails de confirmation envoyés manuellement aux clients. On traite les deux : un site sobre en français et en anglais, et une automatisation qui envoie les confirmations d'étape à partir des données déjà saisies dans le logiciel existant.",

'pourquoi_moi' => "C'est la seule ville étrangère de cette liste où un déplacement dans la journée reste possible : deux heures de route depuis Cotonou. S'ajoutent la même monnaie, donc aucun frais de change, le même fuseau horaire, la même langue de travail et des habitudes commerciales très proches. Concrètement, travailler avec moi depuis Lomé est plus simple que de travailler avec un prestataire installé à Abidjan.",

'travailler' => "Lomé est à environ deux heures de route de Cotonou : un déplacement pour un cadrage ou une formation est possible dans la journée, ce qui est rare pour un projet transfrontalier. Le reste se mène à distance, sans décalage horaire.",

'paiement' => "T-Money, Flooz, virement bancaire, carte ou PayPal.",

'faq' => [
    ["Pouvez-vous vous déplacer à Lomé ?", "Oui, c'est envisageable dans la journée : Lomé est à environ deux heures de route de Cotonou, ce qui en fait la capitale étrangère la plus accessible depuis mon bureau. Un déplacement se convient au devis, généralement pour le cadrage initial ou la formation à la livraison."],
    ["Acceptez-vous T-Money et Flooz ?", "Oui. Les moyens de paiement togolais sont acceptés pour le règlement du projet, et peuvent être intégrés à votre boutique ou plateforme si vos clients les utilisent. Le virement bancaire, la carte et PayPal restent également possibles selon ce qui vous arrange."],
    ["Facturez-vous en francs CFA ?", "Oui. Le Togo et le Bénin partagent la même monnaie, le franc CFA ouest-africain, ce qui évite toute conversion et tout frais de change. Le devis est établi en FCFA et le règlement se fait par tranches liées à l'avancement du projet."],
    ["Faut-il une version anglaise ?", "Dans le portuaire et l'import-export, c'est presque indispensable : le port de Lomé traite avec des armateurs et des donneurs d'ordre anglophones. Traduire les pages clés représente une dépense marginale si c'est prévu au cadrage, et ouvre une clientèle nettement plus large."],
    ["Peut-on relier le site à notre logiciel métier ?", "Oui, c'est un besoin fréquent chez les transitaires lomeéns. Le délai dépend d'un point vérifié dès le cadrage : si la documentation technique du logiciel existe, le raccordement prend une à deux semaines ; s'il faut procéder par rétro-ingénierie, comptez le double. C'est la première chose que j'examine avant de chiffrer."],
    ["La frontière complique-t-elle le projet ?", "Non, en rien. Même monnaie, même fuseau horaire, même langue de travail, deux heures de route et des habitudes commerciales très proches. C'est nettement plus simple que de travailler avec un prestataire européen, et souvent plus simple qu'avec une agence abidjanaise."],
    ["Travaillez-vous avec les sociétés de la zone franche ?", "Oui. Ces structures ont des besoins spécifiques : présentation bilingue destinée à des donneurs d'ordre étrangers, suivi documentaire des expéditions, et souvent connexion avec un logiciel métier déjà en place. Le cadrage commence toujours par un inventaire précis des outils existants avant d'envisager quoi que ce soit."],
    ["Comment vérifier que vous êtes fiable depuis le Togo ?", "Demandez à voir des réalisations en ligne et à parler à un client, c'est légitime. Les accès et le code source vous étant remis à votre nom dès le départ, vous ne dépendez techniquement de personne. Et un premier déplacement à Lomé permet de se rencontrer avant tout engagement."],
],

'demarrer' => "Concrètement, un projet lomeén commence par un échange d'une heure, en visioconférence ou sur place selon ce qui vous arrange. L'objectif de ce premier temps n'est pas de vous vendre quelque chose mais de comprendre trois choses : ce que vous vendez et à qui, quels outils vous utilisez déjà, et ce qui vous fait perdre du temps ou de l'argent aujourd'hui. Dans le transit et l'import-export, cette conversation révèle presque toujours un enjeu d'intégration que vous n'aviez pas identifié comme tel — des données ressaisies trois fois, des confirmations envoyées à la main, un logiciel métier isolé du reste. Vous recevez ensuite un devis détaillé poste par poste, en francs CFA, valable trois mois, qui distingue clairement ce qui relève du site, ce qui relève de l'intégration et ce qui est optionnel. Rien ne vous engage à ce stade. Si le projet se confirme, le travail démarre par la collecte des contenus et l'inventaire technique de vos outils existants, deux étapes qui conditionnent tout le reste et qu'il vaut mieux ne pas bâcler.",
];
