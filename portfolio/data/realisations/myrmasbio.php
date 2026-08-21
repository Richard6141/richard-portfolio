<?php
// Myrmas Bio — site web (HTML/CSS, JavaScript, PHP).
// Complements editoriaux : filiere bio et naturelle, architecture, enseignements.
declare(strict_types=1);

return [
    'secteur' => [
        'titre' => "Vendre des produits naturels en ligne en Afrique de l'Ouest",
        'paragraphes' => [
            "Les produits bio et naturels forment l'un des rares segments où l'acheteur ouest-africain cherche activement de l'information avant d'acheter. Contrairement à un produit de grande consommation, on n'achète pas un beurre de karité ou une huile végétale sur la seule impulsion : on veut savoir d'où vient la matière première, comment elle est transformée, et ce qu'elle contient réellement. Le site n'est donc pas un catalogue, c'est un argumentaire de confiance.",
            "Cette confiance se construit sur des éléments précis, et leur absence se remarque immédiatement. L'origine de la matière première, le mode de transformation, la composition complète, la durée de conservation, les conditions de stockage. Un site qui affiche un produit et un prix sans ces informations laisse le visiteur avec ses questions — et un visiteur qui a des questions sans réponse ne commande pas, il va chercher ailleurs ou renonce.",
            "Le second enjeu tient à la nature du canal de vente. Dans la filière naturelle ouest-africaine, une part importante des commandes se conclut sur WhatsApp, après une première découverte en ligne. Le rôle du site n'est donc pas nécessairement d'encaisser : il est de convaincre, puis de rendre la prise de contact évidente. Un bouton WhatsApp visible et un numéro cliquable convertissent souvent mieux qu'un tunnel de paiement complet, surtout pour un premier achat.",
            "La photographie joue ici un rôle disproportionné. Sur un produit naturel, l'aspect visuel porte une grande partie de l'argument : la texture, la couleur, le conditionnement. Des photos approximatives dévaluent le produit plus sûrement qu'un texte médiocre. C'est aussi le poste qui alourdit le plus une page, d'où un arbitrage constant entre qualité perçue et temps de chargement sur une connexion mobile.",
            "Enfin, la recherche dans ce secteur passe massivement par des requêtes de produit et de bienfait plutôt que par le nom de la marque : les gens cherchent une matière ou un usage, pas une enseigne qu'ils ne connaissent pas encore. La structure du site doit donc donner une page propre et descriptive à chaque produit, plutôt que de tout regrouper sur une page unique où aucune requête précise ne peut se positionner.",
        ],
    ],

    'technique' => [
        'titre' => "Les choix techniques et leur justification",
        'choix' => [
            ['titre' => "Une page par produit, servie par le serveur", 'texte' => "Chaque produit dispose de sa propre adresse et de son propre contenu, rendu par le serveur. C'est la condition pour qu'une recherche portant sur un produit précis puisse aboutir sur la bonne page. Un catalogue affiché dynamiquement sur une page unique n'offre aucune cible aux moteurs, et rend le partage d'un produit sur WhatsApp impossible."],
            ['titre' => "Des images optimisées avant mise en ligne", 'texte' => "Formats modernes, dimensions ajustées à l'affichage réel plutôt qu'à la taille du fichier d'origine, chargement différé sous la ligne de flottaison. Sur un site de produits naturels où la photo porte l'argument, c'est le seul moyen de garder une qualité visuelle élevée sans faire attendre le visiteur mobile."],
            ['titre' => "PHP sans framework lourd", 'texte' => "Pour un catalogue de cette taille, un framework complet ajoute du poids, des dépendances et des mises à jour à suivre, sans bénéfice fonctionnel. Du PHP structuré sur un hébergement mutualisé standard tient la charge et n'impose aucune maintenance technique récurrente au client."],
            ['titre' => "Le contact placé avant le tunnel de commande", 'texte' => "Numéro cliquable et bouton WhatsApp présents sur chaque page produit, sans obliger le visiteur à parcourir un formulaire. Dans cette filière, la conversation précède souvent la commande : rendre le contact immédiat convertit mieux qu'un panier complet pour un premier achat."],
            ['titre' => "Des données structurées sur les produits", 'texte' => "Nom, description, disponibilité et images sont décrits dans un balisage que les moteurs de recherche et les moteurs génératifs lisent directement. C'est ce qui permet à un produit d'apparaître avec ses informations dans un résultat enrichi, et d'être cité correctement par un assistant conversationnel."],
        ],
    ],

    'transferable' => [
        'titre' => "Ce qu'une autre marque de produits naturels peut en retirer",
        'paragraphes' => [
            "Le premier enseignement est de répondre aux questions avant qu'elles ne soient posées. Origine, composition, conservation, utilisation : ces informations paraissent évidentes au producteur, qui les connaît par cœur, et manquent presque toujours sur les sites du secteur. Les écrire noir sur blanc lève les objections silencieuses qui font renoncer un acheteur hésitant — celles qu'il ne prendra jamais la peine de vous poser.",
            "Le deuxième porte sur la structure du catalogue. Une page par produit, avec un titre descriptif et un texte propre, permet à chaque référence d'exister dans les résultats de recherche. Un catalogue regroupé sur une page unique ne peut se positionner que sur le nom de la marque — précisément la requête que ne tapent pas les gens qui ne vous connaissent pas encore.",
            "Le troisième concerne la place du paiement en ligne. Beaucoup de petites marques retardent leur site parce qu'elles n'ont pas encore réglé la question de l'encaissement. C'est prendre le problème à l'envers : un site qui présente bien et rend le contact facile génère des ventes par WhatsApp dès sa mise en ligne. Le paiement intégré est une seconde étape, utile quand le volume le justifie, pas un préalable.",
            "Le quatrième est une question de photographie. Investir dans quelques photos correctes de vos produits est probablement le meilleur euro dépensé sur un site de ce type. Une photo médiocre dévalue un bon produit, et aucun travail de développement ne compense ce déficit.",
            "Le dernier point concerne les avis clients. Dans une filière où la confiance est le principal frein à l'achat, les retours d'acheteurs pèsent davantage que n'importe quel argumentaire. Solliciter systématiquement un avis après une vente, et le rendre visible, coûte un message et change la perception d'une marque inconnue.",
            "Un enjeu supplémentaire mérite d'être anticipé : la logistique. Vendre en ligne des produits naturels suppose de savoir les expédier, parfois sur de longues distances, avec des contraintes de conditionnement propres à chaque type de produit. Une huile végétale voyage mal en pleine chaleur, un conditionnement en verre se casse. Ces réalités doivent être réglées avant d'ouvrir la vente en ligne, faute de quoi les premiers colis abîmés produisent des avis négatifs difficiles à rattraper pour une marque qui démarre.",
            "La question de la conformité réglementaire se pose aussi, particulièrement pour les produits cosmétiques et alimentaires. Les mentions obligatoires, les allégations autorisées et l'étiquetage varient selon les catégories, et un site qui promet des effets non démontrés s'expose autant qu'il rassure. Rester factuel — origine, composition, usage traditionnel — protège l'entreprise tout en restant convaincant.",
            "Enfin, une marque de produits naturels gagne à raconter sa filière. D'où vient la matière première, qui la récolte, comment elle est transformée : ce récit est ce qui différencie durablement une marque d'un simple revendeur. C'est aussi un contenu que les moteurs de recherche valorisent, parce qu'il est original et impossible à copier — contrairement à une fiche produit générique.",
        ],
    ],

    'checklist' => [
        'titre' => "À vérifier avant de lancer un site de produits naturels",
        'intro' => "Ces points reviennent sur presque tous les projets de la filière. Les préparer avant le développement raccourcit sensiblement le délai de mise en ligne.",
        'points' => [
            "Disposez-vous de photos correctes pour chaque produit ? C'est le poste qui retarde le plus les projets de ce type.",
            "Pouvez-vous indiquer l'origine et la composition de chaque référence ? Ces informations lèvent l'essentiel des objections d'achat.",
            "Combien de produits au lancement ? Dix références bien décrites valent mieux qu'un catalogue de cinquante lignes sans contenu.",
            "Comment les commandes se concluent-elles aujourd'hui : WhatsApp, téléphone, boutique physique ? Le site doit prolonger ce canal, pas le remplacer d'emblée.",
            "Quelles requêtes vos clients tapent-ils réellement : un nom de produit, un bienfait, un usage ? Cela détermine les titres de vos pages.",
            "Avez-vous les mentions réglementaires nécessaires à votre catégorie de produits ?",
            "Qui ajoutera les nouveaux produits ? Sans espace d'administration, le catalogue se fige au bout de quelques mois.",
            "Sollicitez-vous un avis après chaque vente ? C'est le levier de confiance le plus rentable de la filière.",
        ],
    ],

    'faq' => [
        ['q' => "Combien coûte un site pour vendre des produits naturels ?", 'r' => "Un site vitrine avec catalogue démarre autour de 300 000 FCFA. Une boutique avec paiement en ligne intégré représente un budget supérieur. Pour une marque qui démarre, la vitrine avec contact WhatsApp suffit souvent la première année."],
        ['q' => "Faut-il un paiement en ligne dès le départ ?", 'r' => "Rarement. Dans cette filière, une grande part des premières commandes se conclut par la conversation. Un site qui présente bien et rend le contact immédiat génère des ventes sans tunnel de paiement. Celui-ci s'ajoute quand le volume le justifie."],
        ['q' => "Combien de temps pour la mise en ligne ?", 'r' => "1 à 3 semaines pour un site vitrine avec catalogue. Le délai dépend presque toujours de la disponibilité des photos et des textes produits, rarement du développement."],
        ['q' => "Puis-je ajouter des produits moi-même ?", 'r' => "Oui, via un espace d'administration simple : ajout de produit, photo, description et prix sans intervention extérieure. C'est indispensable pour qu'un catalogue reste vivant."],
        ['q' => "Comment gérer l'expédition des produits ?", 'r' => "C'est à régler avant d'ouvrir la vente en ligne, pas après. Conditionnement adapté au transport, choix du transporteur, zones desservies et délais annoncés : ces éléments figurent sur le site et engagent votre réputation. Pour une marque qui démarre, mieux vaut limiter d'abord la zone de livraison et l'étendre une fois la logistique éprouvée."],
        ['q' => "Quelles mentions sont obligatoires sur des produits cosmétiques ou alimentaires ?", 'r' => "Les obligations varient selon la catégorie et le pays de commercialisation : composition, contenance, durée de conservation, coordonnées du responsable de la mise sur le marché. Sur le plan éditorial, la règle prudente est de rester factuel — origine, composition, usage traditionnel — plutôt que de promettre des effets, ce qui expose autant que cela rassure."],
        ['q' => "Mon site apparaîtra-t-il sur Google ?", 'r' => "Chaque produit dispose de sa propre page avec un titre descriptif et un balisage structuré, ce qui lui donne une chance de se positionner sur les recherches correspondantes. Le référencement se construit ensuite dans le temps, avec du contenu et des avis."],
    ],
];
