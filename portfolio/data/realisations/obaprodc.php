<?php
// OBA Production & Communication, complements editoriaux.
// Rien ici n'affirme quoi que ce soit sur le client : le secteur, les choix
// techniques et les enseignements sont generaux et verifiables.
declare(strict_types=1);

return [
    'secteur' => [
        'titre' => "Le web pour une agence de communication au Bénin",
        'paragraphes' => [
            "Une agence de communication vend une compétence qu'on ne peut pas décrire : on la montre. C'est ce qui rend son propre site plus délicat à concevoir que celui d'un commerçant ou d'un cabinet. Le visiteur ne vient pas chercher une information, il vient se faire une idée du niveau de l'agence, et il se la fait en quelques secondes, avant même d'avoir lu une ligne. Un site lent, daté ou mal cadré disqualifie l'agence sur le terrain exact où elle prétend exceller.",
            "Au Bénin, cette exigence rencontre une contrainte technique bien réelle. L'écrasante majorité des visiteurs arrive depuis un téléphone, souvent sur une connexion mobile irrégulière, parfois avec un forfait de données limité. Une agence de communication a naturellement envie de montrer des visuels lourds, des vidéos, des animations. Chaque mégaoctet supplémentaire est pourtant un visiteur perdu avant l'affichage. Toute la difficulté du projet tient dans cet arbitrage : donner une impression de qualité visuelle sans jamais faire attendre.",
            "Le second enjeu est celui du référencement local. Les recherches qui comptent pour une agence béninoise sont peu nombreuses et très disputées : « agence de communication Cotonou », « production audiovisuelle Bénin », « agence événementielle » et quelques variantes. Ce sont des volumes faibles, mais chaque visiteur y a une valeur commerciale élevée, parce qu'il cherche exactement le service. Bien se positionner sur dix requêtes de ce type vaut mieux que d'attirer un trafic large et non qualifié.",
            "Enfin, le secteur de la communication a une particularité que peu d'autres partagent : le site doit vieillir lentement. Un commerçant peut garder le même site cinq ans sans que personne n'y voie de problème. Une agence dont le site paraît daté envoie exactement le signal inverse de ce qu'elle vend. Cela impose des choix de conception sobres, qui résistent au temps, plutôt que de suivre une tendance graphique qui se démodera en dix-huit mois.",
            "Un dernier facteur pèse lourd dans ce métier : la réactivité affichée. Une agence qui indique un délai de réponse et s'y tient se distingue immédiatement dans un secteur où beaucoup de demandes restent sans réponse pendant des jours. C'est une promesse simple à formuler sur un site, facile à tenir, et qui pèse plus qu'un long argumentaire sur la qualité du service.",
        ],
    ],

    'technique' => [
        'titre' => "Les choix techniques et leur justification",
        'choix' => [
            ['titre' => "PHP sans framework lourd", 'texte' => "Pour un site vitrine, un framework complet apporte surtout du poids et une dépendance à des mises à jour régulières. Du PHP structuré, servi par un hébergement mutualisé standard, tient la charge d'un site de présentation sans imposer de maintenance technique récurrente au client. C'est aussi ce qui garantit qu'un autre développeur pourra reprendre le projet sans courbe d'apprentissage."],
            ['titre' => "HTML et CSS écrits à la main plutôt qu'une bibliothèque", 'texte' => "Charger une bibliothèque CSS complète pour n'en utiliser qu'une fraction, c'est faire télécharger plusieurs centaines de kilo-octets inutiles à chaque visiteur. Sur une connexion mobile béninoise, cela se traduit directement en secondes d'attente. Du CSS écrit pour le projet ne contient que ce qui sert réellement, et pèse une fraction du poids."],
            ['titre' => "JavaScript réduit à l'essentiel", 'texte' => "Le contenu est présent dans le HTML servi par le serveur, pas construit par le navigateur. Deux conséquences directes : la page s'affiche même si le script est lent à charger, et les moteurs de recherche comme les moteurs génératifs lisent l'intégralité du contenu sans avoir à exécuter quoi que ce soit. Le JavaScript ne sert plus qu'à l'interaction, jamais à l'affichage."],
            ['titre' => "Images travaillées avant mise en ligne", 'texte' => "Sur un site d'agence, les visuels représentent l'essentiel du poids de la page. Formats modernes, dimensions ajustées à l'affichage réel plutôt qu'à la taille du fichier d'origine, et chargement différé pour tout ce qui se trouve sous la ligne de flottaison. C'est le poste où l'on gagne le plus de temps de chargement, et de loin."],
        ],
    ],

    'transferable' => [
        'titre' => "Ce qu'une autre agence peut en retirer",
        'paragraphes' => [
            "Le premier enseignement vaut pour toute entreprise dont le site est aussi la vitrine du savoir-faire : la vitesse fait partie du design. On oppose souvent performance et qualité visuelle comme s'il fallait choisir. C'est faux dans la quasi-totalité des cas. Un site rapide et sobre donne une meilleure impression qu'un site chargé qui met quatre secondes à s'afficher, parce que le visiteur qui attend ne verra jamais le travail graphique dont il est question.",
            "Le deuxième porte sur les réalisations mises en avant. Une galerie de trente projets sans contexte convainc moins que six projets présentés avec ce qui a été demandé, ce qui a été fait et pour quel résultat. Le visiteur n'évalue pas un volume, il cherche à savoir si l'agence a déjà résolu un problème qui ressemble au sien. C'est exactement le raisonnement qui vaut pour les études de cas de ce site.",
            "Le troisième concerne le référencement local. Une agence n'a aucun intérêt à viser des requêtes génériques et internationales. Se rendre trouvable sur son métier et sa ville, soigner sa fiche Google et obtenir des avis réels produit bien plus de contacts qualifiés qu'une stratégie de contenu large. Le volume de recherche est modeste, l'intention d'achat est maximale.",
            "Enfin, prévoir dès le départ comment le site sera mis à jour. Une agence qui doit rappeler son prestataire pour ajouter une réalisation finit par ne plus en ajouter du tout. Un site qui se met à jour en autonomie reste vivant, et un site vivant se référence mieux qu'un site figé.",
            "Un cinquième point mérite attention : les droits sur les visuels. Une agence de communication présente le travail réalisé pour ses clients, ce qui suppose leur accord. Cet accord est rarement formalisé au moment du projet et devient délicat à obtenir des années plus tard, quand la relation s'est distendue. Le réflexe à prendre est de faire figurer une clause d'autorisation de publication dans le devis initial, cela ne coûte rien sur le moment et évite de devoir retirer des références.",
            "La question du format des réalisations se pose également. Une agence de communication produit souvent de la vidéo, qui est le contenu le plus lourd qui soit. Héberger ces vidéos directement sur le site ralentit tout et sature l'hébergement mutualisé. Les confier à une plateforme de diffusion et les intégrer ensuite permet de conserver la qualité sans dégrader le temps de chargement, tout en profitant de la recherche interne de ces plateformes comme canal supplémentaire.",
            "Il faut enfin distinguer ce qui relève du site et ce qui relève des réseaux sociaux. Une agence active sur les réseaux est tentée d'y concentrer toute sa communication, et de négliger son site. C'est confondre le flux et le socle : les réseaux sociaux font découvrir, le site convainc et convertit. Un contenu publié sur un réseau disparaît en quelques jours ; une page bien construite continue d'attirer des visiteurs pendant des années.",
            "Dernier conseil, souvent négligé dans ce métier : soigner les textes autant que les images. Une agence de communication dont le site contient des fautes ou des formulations approximatives se disqualifie sur son propre terrain. C'est le seul secteur où une relecture professionnelle du site n'est pas un luxe mais une nécessité commerciale.",
            "Reste enfin la question des mentions légales et de la politique de confidentialité, obligatoires dès qu'un formulaire collecte une adresse. Les omettre expose l'entreprise et prive le visiteur d'un repère de sérieux qu'il cherche parfois avant de laisser ses coordonnées.",
        ],
    ],

    'checklist' => [
        'titre' => "À vérifier avant de lancer un site d'agence",
        'intro' => "Les points ci-dessous reviennent sur presque tous les projets de ce type. Les traiter au cadrage évite les allers-retours coûteux en fin de parcours.",
        'points' => [
            "Les visuels des réalisations sont-ils disponibles en haute définition, et avez-vous le droit de les publier ? L'accord du client final est souvent oublié et bloque la mise en ligne.",
            "Combien de projets voulez-vous présenter au lancement ? Six bien documentés valent mieux que trente en vignettes muettes.",
            "Qui rédigera les textes ? C'est le poste qui retarde le plus les projets, bien avant le développement.",
            "Sur quelles requêtes précises voulez-vous être trouvé ? Deux ou trois suffisent pour orienter toute la structure du site.",
            "Votre fiche Google est-elle complète et à jour ? Sur une recherche locale, elle est vue avant le site.",
            "Qui mettra le site à jour, et à quelle fréquence ? Sans réponse claire, prévoyez une administration simple plutôt qu'un site figé.",
            "Le nom de domaine et l'hébergement sont-ils à votre nom ? C'est ce qui vous garantit de rester propriétaire de votre présence en ligne.",
        ],
    ],

    'faq' => [
        ['q' => "Combien coûte un site pour une agence de communication au Bénin ?", 'r' => "Un site vitrine professionnel démarre autour de 300 000 FCFA. Pour une agence, le budget dépend surtout du nombre de réalisations à présenter et du travail sur les visuels. Le devis est établi après cadrage, gratuitement et sans engagement."],
        ['q' => "Combien de temps prend la réalisation ?", 'r' => "Un site vitrine se livre généralement en 1 à 3 semaines. Le délai dépend rarement du développement : c'est la fourniture des textes et des visuels par le client qui détermine le rythme réel."],
        ['q' => "Puis-je ajouter mes réalisations moi-même ensuite ?", 'r' => "Oui, et c'est vivement recommandé. Un espace d'administration permet d'ajouter projets, images et textes sans intervention extérieure. Un site qu'on ne peut pas mettre à jour soi-même cesse d'évoluer au bout de quelques mois."],
        ['q' => "Peut-on héberger nos vidéos directement sur le site ?", 'r' => "Techniquement oui, mais c'est déconseillé. La vidéo est le contenu le plus lourd qui soit : elle sature un hébergement mutualisé et ralentit l'ensemble du site. La confier à une plateforme de diffusion et l'intégrer ensuite conserve la qualité, préserve les performances, et vous fait bénéficier de la recherche interne de ces plateformes comme canal supplémentaire."],
        ['q' => "Faut-il l'accord de nos clients pour publier leurs projets ?", 'r' => "Oui, et c'est un point à régler au moment du devis initial plutôt que des années plus tard. Une clause d'autorisation de publication dans le contrat de prestation ne coûte rien sur le moment et vous évite de devoir retirer des références quand la relation s'est distendue."],
        ['q' => "Le site sera-t-il rapide sur une connexion mobile ?", 'r' => "C'est un critère de conception, pas une optimisation ajoutée à la fin. Images au format moderne et dimensionnées pour l'affichage réel, CSS limité à ce qui sert, JavaScript minimal et contenu rendu par le serveur."],
    ],
];
