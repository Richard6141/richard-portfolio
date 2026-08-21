<?php
// Dakar, pole tech d'Afrique francophone. Wave dominant, diaspora importante.
return [
'nom' => 'Dakar', 'slug' => 'dakar', 'pays' => 'Sénégal', 'pays_slug' => 'senegal',
'region' => 'Dakar', 'distance_km' => null, 'sur_place' => false,

'accroche' => 'Développement et automatisation à distance pour le marché sénégalais',

'intro' => "Dakar est l'un des pôles technologiques les plus dynamiques d'Afrique francophone : écosystème de startups actif, adoption massive du paiement mobile, e-commerce en croissance rapide. C'est aussi un marché où les attentes en matière de qualité d'exécution sont élevées, et où les utilisateurs comparent vite.",

'contexte' => "La particularité sénégalaise, c'est la pénétration exceptionnelle de Wave, qui a bouleversé les habitudes de paiement en quelques années et coexiste avec Orange Money et Free Money. Toute boutique en ligne qui ignore Wave se prive d'une part importante de ses clients potentiels, ce n'est pas un détail technique, c'est une condition de viabilité commerciale. Le tissu économique mêle commerce, services, immobilier, tourisme et un secteur numérique local structuré, avec des développeurs sénégalais compétents et une culture produit réelle. S'ajoute un facteur déterminant : une diaspora nombreuse et active, en France, en Italie, en Espagne et en Amérique du Nord, qui achète, envoie et investit depuis l'étranger. Beaucoup de projets dakarois ont donc deux publics à servir simultanément.",

'quartiers' => [
    ['Le Plateau', "Centre administratif et d'affaires : sièges, banques, ministères, cabinets. Des projets institutionnels ou de services, avec des exigences de sécurité et des circuits de validation formels."],
    ['Almadies et Ngor', "Pôle tech, startups, agences, hôtellerie haut de gamme et restauration. C'est le quartier où le niveau d'exigence est le plus élevé et où un site médiocre se remarque immédiatement."],
    ['Point E et Fann', "Professions libérales, cliniques, écoles, services aux particuliers. Une clientèle qui compare en ligne et attend une prise de rendez-vous simple et un site rapide sur téléphone."],
    ['Parcelles Assainies et Pikine', "Zones très peuplées avec un commerce de proximité dense et une adoption de Wave quasi universelle. Un potentiel e-commerce considérable, encore largement inexploité par les commerçants eux-mêmes."],
    ['Diamniadio et le nouveau pôle urbain', "Zone en développement rapide, avec entreprises, administrations relocalisées et projets immobiliers. Des structures nouvelles qui se créent sans historique numérique et ont tout à construire."],
],

'concurrence' => "Dakar dispose d'un vrai écosystème numérique local : développeurs compétents, agences structurées, studios produit. Il serait malhonnête de prétendre y arriver en terrain conquis. Ce que j'y apporte est différent d'une offre locale généraliste : une spécialisation sur l'automatisation et les intégrations, n8n auto-hébergé, connexion entre outils, agents conversationnels, qui reste moins couverte que le développement web classique. Sur les requêtes correspondantes, la concurrence est faible alors que le besoin est réel : beaucoup d'entreprises dakaroises accumulent des abonnements à des outils qui ne se parlent pas. Pour un site vitrine simple, un prestataire local fera très bien l'affaire et je le dis volontiers ; l'intérêt de travailler avec moi se situe sur les projets d'intégration et de plateforme métier.",

'secteurs' => ['E-commerce et distribution', 'Services aux entreprises', 'Immobilier', 'Tourisme et hébergement', 'Santé privée', 'Startups et éditeurs de services'],

'besoins' => [
    ['Une boutique qui accepte Wave', "Au Sénégal, ignorer Wave revient à refuser une part importante des paiements. La boutique doit intégrer les moyens réellement utilisés localement, dès la conception.", 'site-e-commerce'],
    ['Vendre aussi à la diaspora', "Carte bancaire et PayPal en complément du mobile money permettent d'encaisser depuis l'Europe et l'Amérique du Nord, où se trouve une clientèle solvable et fidèle.", 'site-e-commerce'],
    ['Une plateforme métier sur mesure', "Espace client, tableau de bord, suivi de dossiers : les besoins les plus fréquents des structures de services dakaroises.", 'saas-espace-client'],
    ['Automatiser la prospection et le suivi', "Séquences de relance, qualification des demandes entrantes, synchronisation avec un CRM : du temps commercial récupéré chaque semaine.", 'automatisation-ia'],
],

'comparatif' => [
    ['E-commerce ou distribution', 'Boutique avec Wave, Orange Money, carte et PayPal diaspora', 'à partir de 650 000 FCFA', '5 à 8 semaines'],
    ['Société de services', 'Espace client avec suivi de dossiers et facturation', 'à partir de 700 000 FCFA', '6 à 10 semaines'],
    ['Agence immobilière', 'Catalogue de biens avec recherche, alertes et visite virtuelle', 'à partir de 600 000 FCFA', '5 à 8 semaines'],
    ['Clinique ou cabinet', 'Prise de rendez-vous avec rappels SMS et WhatsApp', 'à partir de 450 000 FCFA', '4 à 6 semaines'],
    ['PME avec outils dispersés', 'Automatisation n8n et intégrations entre logiciels', 'à partir de 400 000 FCFA', '3 à 6 semaines'],
],

'erreurs' => [
    ['Une boutique sans Wave', "C'est l'erreur la plus coûteuse du marché sénégalais. Wave s'est imposé très vite et une part considérable des acheteurs n'utilise pas d'autre moyen. Une boutique qui ne propose que la carte bancaire voit son tunnel d'achat s'effondrer à la dernière étape, souvent sans que le commerçant comprenne pourquoi ses visites ne se transforment pas."],
    ['Oublier la diaspora dans la conception', "Un Sénégalais installé à Paris ou à New York qui veut acheter pour sa famille au pays est un client à fort pouvoir d'achat. S'il ne peut payer ni par carte ni par PayPal, il abandonne. Prévoir ces moyens dès le départ coûte peu et ouvre un second marché entier."],
    ['Empiler des outils qui ne communiquent pas', "Un CRM, un tableur, un outil de facturation et une messagerie, tous alimentés à la main. C'est le motif d'appel le plus fréquent de mes clients dakarois : le temps perdu en ressaisies dépasse largement le coût d'une intégration qui les relie une fois pour toutes."],
    ['Négliger la performance mobile', "À Dakar, les utilisateurs sont habitués à des services rapides et comparent immédiatement. Un site qui met plus de trois secondes à s'afficher sur téléphone perd la visite avant d'avoir montré quoi que ce soit, quelle que soit la qualité de l'offre."],
],

'apres_livraison' => "Une heure de décalage seulement sépare Dakar de Cotonou : toute la journée de travail est commune, ce qui rend le suivi aussi réactif que pour un client local. Concrètement, un message envoyé le matin obtient une réponse dans la matinée, pas le lendemain. Le support passe par WhatsApp, sans ticket ni intermédiaire, directement avec la personne qui a écrit le code. Sur les projets e-commerce, une attention particulière est portée aux périodes de forte activité : avant le Ramadan, la Tabaski et les fêtes de fin d'année, je vérifie que le tunnel de paiement fonctionne sur tous les moyens proposés : c'est le pire moment pour découvrir qu'une intégration Wave a cessé de répondre. Le code source et l'ensemble des accès vous sont remis, enregistrés à votre nom dès le premier jour.",

'budget' => "Le Sénégal utilise le franc CFA, comme le Bénin, ce qui supprime toute conversion et tout frais de change. Les budgets indiqués sont légèrement supérieurs à ceux du marché béninois pour une raison précise : les projets dakarois demandent presque systématiquement plusieurs intégrations de paiement, Wave, Orange Money, carte bancaire et souvent PayPal pour la diaspora, là où un projet béninois se contente fréquemment de MTN et Moov. Chaque moyen de paiement représente une intégration à part entière, avec ses tests et son mode de réconciliation. Le second facteur est le niveau d'exigence sur l'interface : sur un marché où les utilisateurs comparent avec des services internationaux, un travail de conception plus poussé se justifie commercialement. En revanche, sur une vitrine simple sans paiement, les tarifs restent alignés sur ceux pratiqués ailleurs.",

'delais' => "Une boutique avec Wave et les autres moyens de paiement se livre en cinq à huit semaines, un espace client en six à dix, une automatisation en trois à six. Le point qui conditionne réellement le calendrier n'est pas le développement mais l'ouverture des comptes marchands : Wave, Orange Money et les prestataires de paiement par carte ont chacun leur procédure de validation, avec des pièces à fournir et des délais qui leur sont propres, indépendants de moi. Il faut engager ces démarches dès le début du projet, pas à la fin : c'est la cause de retard la plus fréquente sur les projets sénégalais. Je fournis la liste des pièces à rassembler dès le cadrage pour que ces demandes avancent en parallèle du développement plutôt qu'après lui.",

'rythme' => "Le calendrier commercial sénégalais est marqué par deux pics majeurs liés aux fêtes religieuses. Le Ramadan et la Tabaski provoquent une intensité d'achat considérable, particulièrement sur l'alimentaire, l'habillement et les transferts depuis la diaspora : une boutique doit être opérationnelle et testée plusieurs semaines avant, pas la veille. Les fêtes de fin d'année constituent un troisième temps fort, plus modéré. Ces dates se décalant chaque année selon le calendrier lunaire, le planning se cale au cas par cas lors du cadrage. Pour le reste, services, immobilier, santé, l'activité est régulière, avec un ralentissement estival lié aux congés et aux retours de la diaspora.",

'cas_type' => "Le profil le plus courant parmi mes clients sénégalais : un commerçant ou une petite marque qui vend déjà bien sur Instagram et WhatsApp, avec une vraie communauté, mais sans boutique en ligne. Les commandes se prennent en messages privés, les paiements arrivent par Wave sans référence claire, et le suivi des expéditions se fait de mémoire. Le volume est là, l'organisation ne suit plus. Le besoin n'est pas de « faire un site » mais de structurer ce qui existe déjà : un catalogue en ligne, un paiement Wave rattaché à chaque commande, une confirmation automatique et un suivi d'expédition. S'ajoute presque toujours une demande liée à la diaspora, permettre à un client installé en France de commander et de payer par carte pour une livraison à Dakar.",

'pourquoi_moi' => "Une heure de décalage seulement, la même monnaie, la même langue de travail, et une spécialisation sur ce qui manque le plus ici : l'intégration entre outils et l'automatisation. Pour un site vitrine simple, un prestataire dakarois fera très bien l'affaire et je le dis franchement. L'intérêt se situe sur les projets où plusieurs systèmes doivent se parler, où plusieurs moyens de paiement doivent cohabiter, ou lorsqu'il faut servir simultanément le marché local et la diaspora.",

'travailler' => "Les projets sénégalais se mènent entièrement à distance, par visioconférence et messagerie. Le décalage horaire avec le Bénin est d'une heure seulement, ce qui laisse toute la journée de travail en commun.",

'paiement' => "Wave, Orange Money, Free Money, virement, carte ou PayPal.",

'demarrer' => "Un projet dakarois commence par un échange d'une heure en visioconférence. Le but n'est pas de vous vendre quelque chose mais de comprendre ce que vous vendez, à qui, avec quels outils, et où vous perdez du temps aujourd'hui. Sur ce marché, cette conversation aboutit presque toujours à deux questions concrètes : quels moyens de paiement vos clients utilisent réellement, et la réponse est rarement celle qu'on imagine, et combien de fois la même information est ressaisie à la main dans votre organisation. Vous recevez ensuite un devis détaillé poste par poste, en francs CFA, valable trois mois, qui sépare clairement le site, chaque intégration de paiement et les options. Rien ne vous engage. Si le projet se confirme, deux chantiers démarrent en parallèle : la production côté développement, et l'ouverture de vos comptes marchands Wave, Orange Money et carte bancaire. Ce second point est celui que je vous demanderai d'attaquer en priorité, parce qu'il ne dépend pas de moi et qu'il conditionne la date de mise en ligne. Je fournis la liste précise des pièces à réunir dès le premier jour.",

'faq' => [
    ["Intégrez-vous Wave à une boutique en ligne ?", "Oui, et c'est fortement recommandé au Sénégal où Wave est devenu un moyen de paiement dominant. La boutique peut combiner Wave, Orange Money et Free Money pour le marché local, avec la carte bancaire et PayPal pour les clients de la diaspora."],
    ["Le décalage horaire pose-t-il problème ?", "Non, il n'est que d'une heure entre Dakar et Cotonou. Toute la journée de travail est commune, ce qui permet des échanges en temps réel par téléphone, WhatsApp ou visioconférence, sans avoir à caler les réunions en début ou en fin de journée."],
    ["Comment se déroule un projet mené entièrement à distance ?", "Par un cadrage en visioconférence, puis des points d'avancement réguliers avec une version en ligne que vous consultez au fur et à mesure. Rien n'est livré en une seule fois à la fin : vous voyez le projet se construire et pouvez ajuster en cours de route."],
    ["Pourquoi vous plutôt qu'un prestataire dakarois ?", "Pour un site vitrine simple, un prestataire local fera très bien l'affaire, et je vous le dirai. L'intérêt de travailler avec moi porte sur l'intégration entre outils, l'automatisation et les projets qui doivent servir à la fois le marché local et la diaspora."],
    ["Combien de temps pour ouvrir les paiements Wave et carte ?", "C'est la principale cause de retard sur les projets sénégalais, et elle ne dépend pas de moi : chaque prestataire a sa procédure de validation. Je fournis la liste des pièces dès le cadrage pour que ces démarches avancent en parallèle du développement, pas après."],
    ["Mes clients en France peuvent-ils commander ?", "Oui, et c'est un besoin quasi systématique ici. La boutique accepte la carte bancaire et PayPal en plus du mobile money, ce qui permet à un client installé en Europe ou en Amérique du Nord de commander et de payer pour une livraison au Sénégal."],
],
];
