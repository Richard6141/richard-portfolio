<?php
// Maho Multiservices — site web (HTML/CSS, JavaScript, PHP).
// Complements editoriaux : entreprise multiservices, architecture, enseignements.
declare(strict_types=1);

return [
    'secteur' => [
        'titre' => "Le site d'une entreprise multiservices : le piège du fourre-tout",
        'paragraphes' => [
            "Une entreprise multiservices affronte une difficulté que ne connaissent pas les activités mono-métier : elle doit convaincre sur plusieurs terrains à la fois, auprès de publics qui n'ont rien en commun. Le client qui cherche une prestation A et celui qui cherche la prestation B n'ont ni le même vocabulaire, ni les mêmes critères, ni la même urgence. Un site qui les traite ensemble, sur une page unique listant tout, ne convainc ni l'un ni l'autre.",
            "Le réflexe naturel est pourtant celui-là : une page « Nos services » avec une liste. C'est le meilleur moyen de n'apparaître dans aucune recherche. Quand quelqu'un cherche une prestation précise, il tape le nom de cette prestation — pas « multiservices ». Une page qui mentionne huit métiers en trois lignes chacun n'a aucune chance de se positionner sur l'un d'eux, face à des concurrents qui consacrent une page entière au sujet.",
            "La solution structurelle consiste à donner à chaque prestation sa propre page, avec son propre contenu, son propre vocabulaire et sa propre preuve. C'est plus de travail à la conception, mais c'est ce qui transforme un site vitrine en source de contacts : chaque page devient une porte d'entrée sur une recherche précise, et le visiteur atterrit directement sur ce qu'il cherchait.",
            "Cette approche a un bénéfice commercial secondaire souvent sous-estimé. Un visiteur venu pour une prestation découvre les autres une fois la confiance établie. Le maillage entre les pages transforme un besoin ponctuel en relation durable — à condition que chaque page existe réellement et ne soit pas une simple ancre sur une liste.",
            "Reste la question de la crédibilité, particulièrement sensible pour une entreprise multiservices. Proposer beaucoup de choses éveille naturellement le soupçon de ne rien faire vraiment bien. Le seul contrepoids efficace est la preuve concrète : réalisations, avis clients, photos de chantiers ou d'interventions. Sans elles, la diversité de l'offre se retourne contre l'entreprise.",
            "Un point pratique fait souvent la différence sur ce type de site : indiquer les délais d'intervention habituels. Un client qui cherche un service de proximité a presque toujours une contrainte de temps, et savoir si vous intervenez sous vingt-quatre heures ou sous une semaine oriente sa décision autant que le prix. Cette information manque sur la grande majorité des sites du secteur.",
        ],
    ],

    'technique' => [
        'titre' => "Les choix techniques et leur justification",
        'choix' => [
            ['titre' => "Une page dédiée par prestation", 'texte' => "Chaque service dispose de sa propre adresse, de son propre titre et d'un contenu qui lui est propre. C'est la seule architecture qui permette à une entreprise multiservices d'apparaître sur les recherches de chacun de ses métiers. Une page unique listant tout ne peut se positionner sur rien de précis."],
            ['titre' => "Un maillage interne explicite entre les prestations", 'texte' => "Chaque page renvoie vers les services connexes, avec un lien dont le texte décrit la destination. Cela guide le visiteur d'un besoin vers l'autre, et indique aux moteurs comment les pages s'articulent entre elles. Un maillage bien construit fait remonter l'ensemble du site, pas seulement la page d'accueil."],
            ['titre' => "PHP structuré, sans framework lourd", 'texte' => "Pour un site de présentation, un framework complet ajoute du poids et des mises à jour à suivre sans bénéfice fonctionnel. Du PHP organisé sur un hébergement mutualisé standard reste rapide, reprenable par n'importe quel développeur, et n'impose aucune maintenance technique récurrente."],
            ['titre' => "Le contact rendu immédiat sur chaque page", 'texte' => "Numéro cliquable et bouton WhatsApp présents sur toutes les pages de prestation, pas seulement sur une page contact isolée. Un visiteur convaincu par une prestation doit pouvoir appeler depuis l'endroit où il vient d'être convaincu, sans navigation supplémentaire."],
            ['titre' => "Des données structurées par service", 'texte' => "Chaque prestation est décrite dans un balisage que les moteurs lisent directement : nature du service, zone d'intervention, prestataire. C'est ce qui permet à un moteur génératif de citer l'entreprise pour une prestation précise plutôt que de la ranger dans une catégorie vague."],
        ],
    ],

    'transferable' => [
        'titre' => "Ce qu'une autre entreprise multiservices peut en retirer",
        'paragraphes' => [
            "Le premier enseignement est de renoncer à la page unique. C'est contre-intuitif quand on veut montrer l'étendue de son offre, mais une page par prestation multiplie les portes d'entrée. Chaque page cible une recherche précise, avec le vocabulaire réel des clients de ce métier — qui n'est pas celui de l'entreprise, et qu'il faut aller chercher dans les questions qu'on vous pose au téléphone.",
            "Le deuxième porte sur la hiérarchisation. Toutes les prestations ne se valent pas commercialement : certaines apportent l'essentiel du chiffre, d'autres sont marginales. Le site doit refléter cette réalité — les prestations principales méritent un contenu approfondi, les secondaires une page plus courte. Traiter tout à égalité dilue l'effort là où il ne rapporte pas.",
            "Le troisième concerne la preuve. Une entreprise qui propose de nombreux services doit démontrer sa compétence sur chacun, faute de quoi la diversité devient un signal de dispersion. Deux ou trois réalisations par prestation, avec photos et description du travail effectué, suffisent à retourner l'argument.",
            "Le quatrième est un point de méthode : commencer par les prestations qui rapportent le plus, quitte à publier le site avec trois pages seulement et à compléter ensuite. Un site incomplet mais en ligne produit des contacts ; un site complet encore en préparation n'en produit aucun.",
            "Le dernier point vaut pour toute entreprise de services de proximité : la fiche Google est vue avant le site. Une fiche complète, avec horaires exacts, photos réelles et avis sollicités, précède souvent la visite du site dans le parcours du client. Elle mérite au moins autant d'attention.",
            "Un point mérite d'être creusé : la zone d'intervention. Pour une entreprise de services, c'est un critère éliminatoire immédiat, et pourtant il figure rarement de façon explicite sur les sites du secteur. Le visiteur qui ne trouve pas cette information en dix secondes ne prendra pas la peine d'appeler pour la demander — il ira voir le concurrent suivant, qui l'affiche. L'indiquer clairement, ville par ville quand c'est pertinent, coûte une ligne et évite autant d'appels inutiles que de contacts manqués.",
            "La question de la tarification se pose de la même manière. Beaucoup d'entreprises multiservices refusent d'afficher le moindre prix, craignant de se voir comparer. Le résultat est qu'une partie des visiteurs renonce faute de savoir si l'offre correspond à leur budget. Donner un ordre de grandeur, une fourchette ou un tarif de départ filtre les demandes hors sujet et rassure celles qui sont pertinentes. On ne perd que les contacts qu'on n'aurait de toute façon pas convertis.",
            "Enfin, une entreprise multiservices doit surveiller la cohérence de son offre dans le temps. Les prestations s'ajoutent au fil des opportunités, et le site finit par présenter des métiers sans lien entre eux, ce qui brouille le positionnement. Revoir une fois par an la liste des services affichés, et retirer ceux qu'on ne réalise plus vraiment, renforce la crédibilité de ceux qu'on garde.",
        ],
    ],

    'checklist' => [
        'titre' => "À vérifier avant de lancer un site multiservices",
        'intro' => "Ces arbitrages déterminent si le site produira des contacts ou restera une simple carte de visite en ligne. Ils se tranchent au cadrage.",
        'points' => [
            "Quelles sont vos trois prestations les plus rentables ? Ce sont elles qui méritent les pages les plus travaillées.",
            "Quels mots vos clients emploient-ils réellement pour chaque service ? Écoutez comment ils formulent leur demande au téléphone.",
            "Disposez-vous de photos ou de réalisations pour chaque prestation ? Sans preuve, une offre large éveille le soupçon.",
            "Chaque prestation aura-t-elle sa propre page, ou une simple ancre ? Une ancre ne se positionne sur aucune recherche.",
            "Quelle est votre zone d'intervention réelle ? Elle doit apparaître explicitement, c'est un critère de choix immédiat.",
            "Votre fiche Google est-elle complète ? Elle est souvent consultée avant le site pour une entreprise de proximité.",
            "Comment les demandes arrivent-elles aujourd'hui : appel, WhatsApp, passage ? Le site doit prolonger ce canal.",
            "Qui ajoutera une nouvelle prestation dans six mois ? Prévoyez une administration simple plutôt qu'un site figé.",
        ],
    ],

    'faq' => [
        ['q' => "Faut-il une page par service ou une seule page « Nos services » ?", 'r' => "Une page par service, sans hésitation. C'est la seule structure qui permette d'apparaître sur les recherches de chaque métier. Une page unique listant tout ne peut se positionner sur aucune prestation précise, face à des concurrents spécialisés."],
        ['q' => "Combien coûte un site pour une entreprise multiservices ?", 'r' => "Un site vitrine démarre autour de 300 000 FCFA. Le budget dépend surtout du nombre de prestations à détailler : chaque page demande du contenu propre. On peut démarrer avec les trois principales et compléter ensuite."],
        ['q' => "Combien de temps pour la mise en ligne ?", 'r' => "1 à 3 semaines pour un site vitrine. Comme toujours, c'est la fourniture des textes et des photos qui détermine le rythme réel, pas le développement."],
        ['q' => "Puis-je ajouter une prestation plus tard ?", 'r' => "Oui, c'est prévu par la structure : une nouvelle page se crée depuis l'espace d'administration, et le maillage vers les services existants se fait naturellement."],
        ['q' => "Faut-il afficher ses tarifs sur le site ?", 'r' => "Au moins un ordre de grandeur, oui. L'argument contre — se faire comparer — est plus faible qu'il n'y paraît : un visiteur qui ne peut pas situer votre niveau de prix renonce souvent sans appeler. Une fourchette ou un tarif de départ filtre les demandes hors budget et rassure les autres. Vous ne perdez que des contacts que vous n'auriez pas convertis."],
        ['q' => "Comment présenter une zone d'intervention étendue ?", 'r' => "En la nommant explicitement, ville par ville quand la liste reste raisonnable. C'est un critère éliminatoire immédiat pour le visiteur, et une information que les moteurs utilisent pour vous associer à une recherche locale. Une formule vague du type « nous intervenons partout » ne rassure personne et ne se positionne sur rien."],
        ['q' => "Combien de prestations peut-on présenter sans se disperser ?", 'r' => "Il n'y a pas de nombre limite, mais une règle : chaque prestation affichée doit être une activité que vous réalisez réellement et régulièrement. Une offre annoncée mais rarement pratiquée se voit dans le manque de preuves, et affaiblit la crédibilité de celles que vous maîtrisez vraiment."],
        ['q' => "Le site remplacera-t-il les appels téléphoniques ?", 'r' => "Non, et ce n'est pas l'objectif. Il qualifie les demandes en amont : le client arrive en sachant déjà ce que vous faites, dans quelle zone et à quelles conditions. Les appels deviennent plus courts et plus qualifiés."],
    ],
];
