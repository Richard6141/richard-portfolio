<?php
// Dakar — secteur dominant : e-commerce et distribution, tel que declare
// dans data/villes/dakar.php. Projets menes entierement a distance.
declare(strict_types=1);

return [
    'ville'      => 'Dakar',
    'ville_slug' => 'dakar',
    'pays'       => 'Sénégal',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-dakar',
        'titre'    => "Digitalisation d'entreprise à Dakar",
        'accroche' => "Un écosystème tech dense, des attentes élevées, et un projet mené à distance.",
        'intro'    => "Dakar est l'un des pôles technologiques les plus actifs d'Afrique francophone : startups nombreuses, adoption massive du paiement mobile, clientèle habituée aux services en ligne. Une entreprise dakaroise qui se digitalise ne part pas d'une page blanche — elle doit s'aligner sur un standard local déjà élevé. Je travaille avec des entreprises sénégalaises entièrement à distance ; l'heure de décalage avec le Bénin laisse la journée de travail intégralement commune.",
        'signaux'  => [
            "Vos concurrents proposent des parcours en ligne que vous n'avez pas.",
            "Wave et Orange Money sont devenus incontournables pour vos clients, sans être intégrés chez vous.",
            "Les données commerciales vivent dans des tableurs que plusieurs personnes modifient.",
            "Le reporting mensuel se fabrique à la main.",
            "Les devis de prestataires dakarois dépassent votre budget pour un périmètre modeste.",
        ],
        'etapes' => [
            ['titre' => "Cadrer avec des comptes rendus écrits", 'texte' => "À distance, la rigueur documentaire remplace la présence. Chaque séance donne lieu à un compte rendu validé avant de continuer."],
            ['titre' => "Intégrer les paiements locaux d'emblée", 'texte' => "Wave et Orange Money ne sont pas des options au Sénégal : un parcours qui ne les propose pas perd le client au moment de payer."],
            ['titre' => "Livrer souvent et testable", 'texte' => "Une mise en ligne toutes les deux semaines, testée par vos équipes. C'est ainsi que la confiance se construit sans se voir."],
            ['titre' => "Vous rendre autonome", 'texte' => "Accès complets, documentation, formation enregistrée. Aucune opération courante ne doit dépendre de ma disponibilité."],
        ],
        'budget'  => "Pour une entreprise dakaroise, mes tarifs se situent nettement sous le marché local à qualité comparable — c'est l'intérêt principal d'un prestataire basé au Bénin. Un premier périmètre se situe généralement entre 500 000 et 1 500 000 FCFA. Même monnaie, aucun frais de change.",
        'delais'  => "4 à 10 semaines selon le périmètre, avec des livraisons intermédiaires régulières.",
        'faq' => [
            ['q' => "Le décalage horaire pose-t-il problème ?", 'r' => "Une heure seulement entre Dakar et Cotonou. Toute la journée de travail est commune, les échanges se font en temps réel."],
            ['q' => "Pourquoi ne pas prendre un prestataire dakarois ?", 'r' => "Pour le rapport qualité-prix, et rien d'autre. Si la présence physique est déterminante pour votre projet, un prestataire local sera plus adapté — je vous le dirai plutôt que de forcer."],
            ['q' => "Wave est-il intégrable ?", 'r' => "Oui, comme Orange Money et la carte bancaire. C'est un préalable au Sénégal, pas une option ajoutée en fin de projet."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-ecommerce-dakar',
        'nom'      => "e-commerce et distribution",
        'titre'    => "Digitaliser un e-commerce à Dakar",
        'accroche' => "Paiement Wave et Orange Money, livraison suivie, paniers abandonnés récupérés.",
        'intro'    => "Le e-commerce dakarois est le plus mature de la sous-région francophone : le client compare, paie par mobile en quelques secondes et attend une livraison rapide dans la région. Ce niveau d'exigence est aussi ce qui rend les erreurs coûteuses — un moyen de paiement manquant, une livraison sans suivi ou un stock faux se traduisent immédiatement en panier abandonné et en avis négatif.",
        'flux' => [
            "Catalogue, prix et disponibilité",
            "Panier et paiement mobile",
            "Préparation de commande",
            "Livraison et suivi",
            "Retours, avis et fidélisation",
        ],
        'douleurs' => [
            ['titre' => "Le paiement fait abandonner le panier", 'texte' => "Un parcours qui ne propose pas Wave ou Orange Money perd le client au dernier écran, après tout le travail d'acquisition. C'est la fuite la plus coûteuse d'une boutique dakaroise."],
            ['titre' => "La livraison n'est pas suivie", 'texte' => "Sans statut consultable, le client écrit pour savoir où en est sa commande. Le service client répond en boucle à la même question."],
            ['titre' => "Les paniers abandonnés ne sont jamais relancés", 'texte' => "La majorité des paniers n'aboutit pas. Sans relance automatique, cette part est définitivement perdue alors qu'elle a déjà coûté en acquisition."],
        ],
        'solution' => [
            ['titre' => "Wave, Orange Money et carte au checkout", 'texte' => "Les trois moyens attendus, sans redirection hasardeuse. C'est la première correction à faire, et souvent la plus rentable."],
            ['titre' => "Un suivi de livraison automatique", 'texte' => "Statut par lien et notification à chaque étape. Les sollicitations du service client baissent nettement."],
            ['titre' => "Une relance de panier abandonné", 'texte' => "Un message automatique quelques heures après l'abandon. C'est l'automatisation au meilleur retour sur investissement en e-commerce, et elle se met en place en quelques jours."],
            ['titre' => "Un stock juste, relié au catalogue", 'texte' => "Ce qui est vendu disparaît du site. La survente, qui coûte un client et un avis, devient impossible."],
        ],
        'faq' => [
            ['q' => "Faut-il refaire notre boutique existante ?", 'r' => "Pas nécessairement. Une boutique fonctionnelle peut souvent recevoir les paiements locaux, le suivi et les relances sans refonte. On l'évalue avant de proposer quoi que ce soit."],
            ['q' => "Gérez-vous l'intégration des livreurs ?", 'r' => "Oui, avec vos livreurs internes via une application de suivi, ou par connexion aux prestataires que vous utilisez déjà lorsqu'ils l'autorisent."],
            ['q' => "Combien de temps pour être opérationnel ?", 'r' => "6 à 10 semaines pour une boutique complète. Deux à trois semaines si le besoin se limite à ajouter les paiements locaux et les relances sur une boutique existante."],
        ],
    ],
];
