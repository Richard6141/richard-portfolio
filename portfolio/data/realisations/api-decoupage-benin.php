<?php
// API Decoupage Administratif du Benin — API REST publique (PHP, MySQL, JSON).
// Projet sans client tiers : les complements portent sur la conception d'API.
declare(strict_types=1);

return [
    'secteur' => [
        'titre' => "Pourquoi une API du découpage administratif manquait au Bénin",
        'paragraphes' => [
            "Presque toute application qui s'adresse au public béninois a besoin, à un moment, de faire choisir une localisation : un formulaire de livraison, une inscription, une fiche client, un formulaire de contact. Le pays est organisé en départements, communes et arrondissements, et cette hiérarchie est stable. Pourtant, chaque équipe qui développe une application recommence le même travail : trouver les listes, les nettoyer, les saisir en dur dans le code, puis découvrir plus tard qu'il manque une commune ou qu'un nom est mal orthographié.",
            "Ce travail répété a un coût invisible mais réel. Il produit des données de qualité inégale d'une application à l'autre, avec des orthographes divergentes pour la même commune. Quand deux systèmes doivent ensuite échanger des informations, ces écarts deviennent des bogues difficiles à diagnostiquer : la même localité existe sous trois graphies, et aucune correspondance automatique ne fonctionne. C'est le genre de problème qu'on ne voit qu'une fois deux applications mises en relation.",
            "Le second manque est celui de la structure hiérarchique. Une simple liste de communes ne suffit pas : une interface correcte propose d'abord le département, puis filtre les communes correspondantes, puis les arrondissements. Cela suppose que les relations entre niveaux soient explicites et interrogeables, et non déduites d'un fichier plat. C'est exactement ce qu'une API expose naturellement et qu'un fichier CSV recopié ne fournit jamais.",
            "Il y a enfin une dimension d'écosystème. Dans beaucoup de pays, ces données de référence sont publiées par une administration sous forme exploitable. Quand ce n'est pas le cas, chaque développeur bricole dans son coin. Publier une ressource ouverte, documentée et stable fait gagner du temps à tout le monde et améliore la qualité générale des applications locales — c'est un travail d'infrastructure discret, dont la valeur se mesure au nombre de projets qui n'ont plus à le refaire.",
            "Ce type de projet a par ailleurs une vertu pour celui qui le développe : une API publique est visible, testable par n'importe qui, et ne pardonne aucune approximation. Elle constitue une démonstration de rigueur bien plus convaincante qu'une capture d'écran, parce que le lecteur peut la vérifier lui-même en une requête.",
        ],
    ],

    'technique' => [
        'titre' => "Les choix techniques et leur justification",
        'choix' => [
            ['titre' => "Des ressources REST calquées sur la hiérarchie réelle", 'texte' => "Départements, communes, arrondissements : chaque niveau est une ressource, et la relation parent-enfant s'exprime dans le chemin de l'URL. Un développeur qui découvre l'API en devine la structure sans documentation, parce qu'elle reproduit l'organisation administrative qu'il connaît déjà. Une API dont on doit lire la documentation pour comprendre l'organisation des ressources a raté sa conception."],
            ['titre' => "JSON avec une enveloppe de réponse constante", 'texte' => "Toutes les réponses partagent la même forme, succès comme erreur. Le code client n'a donc qu'un seul schéma à traiter, et une erreur ne casse pas le parsing. C'est un détail qui ne se remarque pas quand tout fonctionne, et qui économise des heures de débogage quand ce n'est pas le cas."],
            ['titre' => "Des codes HTTP réellement respectés", 'texte' => "200 quand ça marche, 404 quand la ressource n'existe pas, 400 quand la requête est mal formée. Beaucoup d'API renvoient 200 avec un message d'erreur dans le corps, ce qui oblige chaque client à inspecter la réponse pour savoir si elle a réussi. Respecter les codes permet aux bibliothèques HTTP standard de faire leur travail sans code supplémentaire."],
            ['titre' => "PHP et MySQL sans dépendance lourde", 'texte' => "Les données de référence changent rarement et le volume est modeste : quelques milliers d'entrées au total. Un framework complet n'apporterait rien ici, tout en ajoutant une surface de maintenance et des mises à jour à suivre. Du PHP structuré sur un hébergement mutualisé standard suffit largement, et garantit que l'API reste en ligne sans intervention pendant des années."],
            ['titre' => "Des index sur les colonnes de filtrage", 'texte' => "Le cas d'usage dominant est le filtrage par entité parente — les communes d'un département donné. Ces colonnes sont indexées, ce qui rend la réponse quasi instantanée quelle que soit la façon dont l'API est interrogée. Sur un volume modeste, cela peut sembler superflu ; c'est surtout ce qui permet de ne pas s'inquiéter du jour où l'usage augmente."],
        ],
    ],

    'transferable' => [
        'titre' => "Ce qu'on peut en retirer pour concevoir une API",
        'paragraphes' => [
            "Le premier enseignement est que la constance vaut mieux que l'élégance. Une API dont toutes les réponses ont la même forme, dont les noms de champs suivent la même convention et dont les erreurs se présentent toujours pareil est agréable à consommer, même si aucun choix n'est spectaculaire. À l'inverse, une API brillante mais irrégulière oblige le développeur client à traiter chaque cas séparément.",
            "Le deuxième porte sur la documentation. Une API sans exemples exécutables est une API qu'on n'adopte pas. Deux ou trois requêtes complètes, avec leur réponse réelle, valent mieux qu'une description exhaustive de chaque paramètre. Le développeur qui découvre veut copier-coller une requête et voir un résultat en trente secondes ; s'il n'y parvient pas, il ira chercher ailleurs ou refera le travail lui-même.",
            "Le troisième concerne la stabilité. Une ressource publique crée une dépendance : dès que quelqu'un l'utilise en production, tout changement de format casse son application. Cela impose une discipline — n'ajouter que des champs, ne jamais en renommer, et prévoir un versionnement si une rupture devient inévitable. C'est une contrainte qu'on accepte au moment de publier, pas qu'on découvre après.",
            "Le quatrième, plus général, vaut pour toute entreprise qui expose des données : séparer clairement la donnée de référence de la donnée métier. Les communes d'un pays ne changent presque jamais ; les commandes de vos clients changent en permanence. Mélanger les deux dans la même base et le même code conduit à des migrations pénibles à chaque évolution. Les traiter séparément dès le départ coûte peu et simplifie durablement.",
            "Le dernier point est stratégique plus que technique. Publier une ressource utile et gratuite est une forme de démonstration de compétence bien plus crédible qu'un argumentaire commercial. Un prospect développeur qui utilise votre API se fait une opinion sur votre rigueur en quelques minutes, et cette opinion vaut plus que n'importe quelle page de présentation.",
        ],
    ],

    'checklist' => [
        'titre' => "À vérifier avant de publier une API",
        'intro' => "Ces points déterminent si votre API sera adoptée ou contournée. Ils se tranchent avant la mise en ligne, car chacun devient coûteux à modifier une fois des clients connectés.",
        'points' => [
            "Vos réponses ont-elles toutes la même enveloppe, y compris en cas d'erreur ? Un client ne devrait avoir qu'un seul schéma à traiter.",
            "Les codes HTTP sont-ils respectés ? Un 200 accompagné d'un message d'erreur oblige chaque client à écrire du code superflu.",
            "Existe-t-il au moins deux exemples de requêtes copiables-collables, avec leur réponse réelle ?",
            "Les noms de champs suivent-ils une convention unique ? Mélanger les styles d'écriture dans une même API est le défaut le plus fréquent.",
            "Les colonnes servant au filtrage sont-elles indexées ? C'est ce qui détermine le temps de réponse quand l'usage augmente.",
            "Avez-vous prévu comment évoluer sans casser les clients existants ? Ajouter est sûr, renommer ne l'est jamais.",
            "L'API est-elle joignable en HTTPS, avec des en-têtes CORS corrects ? Sans cela, aucune application web ne pourra l'utiliser depuis un navigateur.",
            "Qui maintient la donnée quand la réalité change ? Une ressource de référence non tenue à jour devient rapidement pire qu'absente.",
        ],
    ],

    'faq' => [
        ['q' => "Peut-on développer une API sur mesure pour mon entreprise ?", 'r' => "Oui, c'est l'un de mes domaines. Une API permet de faire communiquer vos outils entre eux, d'alimenter une application mobile ou d'ouvrir vos données à des partenaires, sans dupliquer vos règles de gestion dans chaque système."],
        ['q' => "Quelle différence entre une API et un site web ?", 'r' => "Un site s'adresse à un humain via un navigateur ; une API s'adresse à un autre programme et renvoie des données structurées. Une même base de données peut alimenter les deux, ce qui garantit que le site et l'application mobile affichent toujours la même information."],
        ['q' => "Combien de temps pour développer une API métier ?", 'r' => "Une API couvrant un périmètre défini se livre généralement en 3 à 8 semaines selon le nombre de ressources et la complexité des règles. Le travail de conception initial pèse davantage que le développement lui-même."],
        ['q' => "Faut-il obligatoirement une API pour une application mobile ?", 'r' => "Dès que l'application doit afficher des données qui vivent ailleurs — un stock, un catalogue, des commandes — oui. C'est ce qui évite de dupliquer la logique métier entre le site et l'application, avec le risque de les voir diverger."],
        ['q' => "Comment sécuriser une API qui expose des données sensibles ?", 'r' => "Authentification par jeton, droits par rôle, limitation du nombre de requêtes et HTTPS obligatoire. Le niveau exact se définit selon la sensibilité des données : une ressource publique de référence et une API de gestion de stock n'appellent pas les mêmes mesures."],
    ],
];
