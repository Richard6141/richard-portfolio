<?php
// Toure Distribution, logiciel de gestion (Laravel, MySQL, API REST).
// Complements editoriaux : métier, architecture, enseignements. Aucune
// affirmation sur le client, dont les faits restent dans les champs case_*.
declare(strict_types=1);

return [
    'secteur' => [
        'titre' => "Le logiciel de gestion pour un distributeur en Afrique de l'Ouest",
        'paragraphes' => [
            "Une entreprise de distribution vit de trois chiffres : ce qu'elle a en stock, ce qu'on lui doit, et ce qu'elle gagne réellement sur chaque produit. Ces trois chiffres existent toujours quelque part, dans un cahier, dans un tableur, dans la tête du gérant. Le problème n'est jamais qu'ils soient inconnus : c'est qu'ils ne sont jamais disponibles au moment où une décision doit être prise. On décide de réapprovisionner au jugé, on accorde un crédit sans connaître l'encours du client, on fixe un prix sans savoir la marge réelle.",
            "En Afrique de l'Ouest, cette difficulté se double d'une particularité : une grande partie du commerce de distribution fonctionne à crédit, sur la confiance et la relation personnelle. Le revendeur prend la marchandise, paie plus tard, souvent en plusieurs fois, parfois partiellement en espèces et partiellement par Mobile Money. Un logiciel qui ne sait pas gérer les règlements partiels, les avoirs et les encours anciens ne sert à rien dans ce contexte, et c'est précisément ce que les solutions importées gèrent le plus mal.",
            "La saisonnalité ajoute une troisième couche. Beaucoup de distributeurs voient leur activité doubler ou tripler sur certaines périodes. Un outil qui tient à vingt commandes par jour doit tenir à cent sans que l'équipe change ses habitudes. Cela impose des choix d'architecture dès le départ : une base de données correctement indexée, des écrans qui restent rapides quand l'historique grossit, et des traitements lourds qui ne bloquent pas la saisie courante.",
            "Enfin, il y a la question de la reprise de l'existant. Une entreprise de distribution qui se digitalise a rarement une page blanche : elle a des mois ou des années de données dans des tableurs, avec des doublons, des noms de clients orthographiés de trois façons et des soldes qui ne tombent pas juste. Une migration réussie ne consiste pas à tout importer, mais à décider ce qui mérite d'être repris, généralement les soldes clients et le catalogue, rarement l'historique complet des ventes.",
            "Le dernier point est humain, et c'est celui qui décide de la réussite du projet. L'équipe qui saisit n'est pas celle qui a demandé le logiciel. Si l'outil rallonge le travail quotidien, il sera contourné : on continuera le cahier « en attendant », et les deux systèmes divergeront en quelques semaines. La conception doit donc partir du geste réel de la personne qui enregistre une vente, pas de l'organigramme.",
        ],
    ],

    'technique' => [
        'titre' => "Les choix techniques et leur justification",
        'choix' => [
            ['titre' => "Laravel pour la logique métier", 'texte' => "Un logiciel de gestion accumule des règles : remises par catégorie de client, seuils d'alerte, règlements partiels, avoirs, droits d'accès par rôle. Écrire cela sans structure conduit rapidement à du code impossible à faire évoluer. Laravel apporte une organisation éprouvée, validation, migrations de base, gestion des rôles, et surtout une convention que n'importe quel développeur PHP reconnaît. C'est un choix de maintenabilité autant que de productivité : le client ne doit jamais être prisonnier de celui qui a écrit le code."],
            ['titre' => "MySQL avec un schéma pensé pour l'historique", 'texte' => "Dans un logiciel de gestion, ce n'est pas la volumétrie instantanée qui pose problème, c'est l'accumulation. Au bout de deux ans, la table des mouvements de stock et celle des règlements deviennent les plus lourdes du système. Les index se posent dès la conception sur les colonnes réellement interrogées, client, date, produit, et les états consolidés se calculent sur des agrégats plutôt qu'en parcourant tout l'historique à chaque affichage."],
            ['titre' => "Une API REST plutôt qu'une application monolithique", 'texte' => "Séparer la logique métier de l'interface a un coût initial, mais il se rembourse au premier besoin d'extension. Une application mobile pour les commerciaux en tournée, un portail de consultation pour les revendeurs, une connexion à un outil comptable : chacun de ces ajouts se branche sur l'API existante sans toucher au cœur du système. Sans cette séparation, chaque nouveau canal impose de dupliquer les règles métier, et donc de les faire diverger."],
            ['titre' => "Les traitements lourds sortis du chemin de saisie", 'texte' => "Générer un état mensuel, envoyer cinquante relances ou recalculer des statistiques ne doit jamais faire attendre la personne qui enregistre une vente au comptoir. Ces traitements s'exécutent en arrière-plan, en file d'attente. C'est ce qui permet à l'outil de rester réactif en période de forte activité, quand précisément on ne peut pas se permettre de ralentir."],
            ['titre' => "Des droits d'accès par rôle dès la conception", 'texte' => "Dans une entreprise de distribution, tout le monde ne doit pas voir les marges ni pouvoir annuler une vente. Ajouter les droits après coup oblige à reprendre chaque écran. Définis dès le départ, ils structurent le code et évitent la solution de facilité, un compte partagé par toute l'équipe, qui rend toute traçabilité illusoire."],
        ],
    ],

    'transferable' => [
        'titre' => "Ce qu'une autre entreprise de distribution peut en retirer",
        'paragraphes' => [
            "Le premier enseignement est de commencer par le crédit client. C'est presque toujours le chantier au meilleur retour dans une entreprise de distribution : l'encours total est rarement connu, il représente souvent plusieurs mois de trésorerie, et le simple fait de le rendre visible change immédiatement les décisions. Avant même d'automatiser quoi que ce soit, savoir précisément qui doit quoi et depuis quand suffit à récupérer des sommes qu'on avait cessé de réclamer.",
            "Le deuxième porte sur le périmètre. La tentation est de vouloir tout couvrir dès la première version, stock, ventes, achats, comptabilité, ressources humaines. C'est le meilleur moyen de livrer tard un outil que personne n'utilise. Un périmètre réduit mis en service en six semaines produit plus de valeur qu'un système complet livré en un an, parce qu'il crée l'habitude et fait remonter les vrais besoins, qui ne sont jamais ceux qu'on avait listés au départ.",
            "Le troisième concerne la reprise des données. Reprendre l'intégralité de l'historique coûte cher, retarde la mise en service et importe des erreurs anciennes dans un système neuf. Le bon arbitrage consiste à reprendre les soldes clients et le catalogue à une date de bascule, et à laisser l'historique dans l'ancien support, consultable en archive. Personne n'a jamais regretté ce choix ; beaucoup ont regretté l'inverse.",
            "Le quatrième est une question à poser avant de signer, avec n'importe quel prestataire : qui possède les données et le code ? Une entreprise de distribution qui construit son fonctionnement autour d'un logiciel doit pouvoir en changer sans repartir de zéro. Accès complet à la base, code source disponible, export possible à tout moment. Ce sont des clauses à obtenir au départ, les négocier après une mise en service se fait toujours en position de faiblesse.",
            "Un point mérite d'être tranché tôt : la gestion des prix. Dans la distribution ouest-africaine, le prix se négocie souvent au cas par cas. Un logiciel qui impose un prix figé par produit sera contourné dès la première négociation. Prévoir un prix de référence modifiable à la vente, tout en conservant la marge réelle calculée sur le prix effectivement pratiqué, est la seule approche qui tienne face au terrain.",
            "Le cinquième, enfin, est de prévoir la formation comme une phase du projet et non comme une réunion finale. Un logiciel de gestion modifie le travail quotidien de plusieurs personnes. Les former sur leurs vraies données, pendant le développement, transforme des utilisateurs subis en utilisateurs qui signalent les problèmes pendant qu'ils sont encore corrigeables.",
        ],
    ],

    'checklist' => [
        'titre' => "À vérifier avant de lancer un logiciel de gestion",
        'intro' => "Ces points reviennent sur presque tous les projets de gestion. Les trancher au cadrage évite les arbitrages coûteux en cours de développement.",
        'points' => [
            "Quel est le montant total de votre encours client aujourd'hui ? Si personne ne sait répondre en moins d'une minute, c'est votre premier chantier.",
            "Combien de personnes saisiront réellement dans l'outil, et avec quel matériel ? La réponse détermine l'interface bien plus que le nombre d'utilisateurs déclarés.",
            "Quelles données faut-il reprendre : soldes clients, catalogue, historique complet ? Chaque niveau supplémentaire allonge le projet.",
            "Vos revendeurs paient-ils en plusieurs fois, en espèces et par Mobile Money ? Les règlements partiels et multi-modes doivent être prévus dès la conception.",
            "Qui doit voir les marges, et qui ne doit pas ? Les droits par rôle se définissent avant, jamais après.",
            "Quel est votre pic d'activité annuel, en nombre de transactions par jour ? C'est ce chiffre qui dimensionne l'architecture, pas la moyenne.",
            "Le code et la base de données seront-ils à votre nom, avec export possible ? À faire écrire dans le contrat.",
            "Qui formera les nouveaux employés dans deux ans ? Sans documentation, la connaissance repart avec la personne qui l'a acquise.",
        ],
    ],

    'faq' => [
        ['q' => "Combien coûte un logiciel de gestion sur mesure ?", 'r' => "Le budget dépend entièrement du périmètre. Un premier module, gestion des stocks ou suivi du crédit client, représente un investissement bien plus accessible qu'une plateforme complète. Je découpe volontairement en chantiers successifs pour que vous mesuriez le retour avant d'engager la suite. Devis détaillé après cadrage."],
        ['q' => "Combien de temps avant la mise en service ?", 'r' => "Un premier module utile se livre généralement en 4 à 8 semaines. Une plateforme de gestion complète s'étale sur plusieurs mois, par paliers successifs, sans jamais interrompre l'activité en cours."],
        ['q' => "Peut-on reprendre nos données existantes ?", 'r' => "Oui, et la vraie question est de savoir ce qu'il faut reprendre. Les soldes clients et le catalogue produits sont presque toujours pertinents. L'historique complet des ventes l'est rarement : il coûte cher à migrer et importe les erreurs anciennes dans un système neuf."],
        ['q' => "Que se passe-t-il si nous voulons ajouter une application mobile plus tard ?", 'r' => "C'est prévu par l'architecture : la logique métier étant exposée par une API REST, une application mobile ou un portail revendeur se branche dessus sans réécrire les règles de gestion. C'est la raison principale de ce choix technique."],
        ['q' => "Sommes-nous propriétaires du logiciel ?", 'r' => "Oui. Code source, base de données et hébergement sont à votre nom, avec un export possible à tout moment. Vous devez pouvoir changer de prestataire sans repartir de zéro : c'est une condition que je pose sans qu'on ait à me la demander."],
        ['q' => "L'outil fonctionne-t-il en cas de connexion instable ?", 'r' => "Les écrans de saisie courante sont conçus pour tolérer une connexion irrégulière, et les traitements lourds s'exécutent en arrière-plan pour ne jamais bloquer une vente. Le niveau exact de fonctionnement hors connexion se décide au cadrage selon vos conditions réelles."],
    ],
];
