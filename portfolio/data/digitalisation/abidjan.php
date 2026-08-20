<?php
// Abidjan — secteur dominant : commerce et distribution, tel que declare
// dans data/villes/abidjan.php. Projets menes entierement a distance.
declare(strict_types=1);

return [
    'ville'      => 'Abidjan',
    'ville_slug' => 'abidjan',
    'pays'       => "Côte d'Ivoire",

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-abidjan',
        'titre'    => "Digitalisation d'entreprise à Abidjan",
        'accroche' => "Un marché plus mature, des attentes plus hautes — et un projet mené à distance depuis Cotonou.",
        'intro'    => "Abidjan est le marché le plus structuré d'Afrique de l'Ouest francophone, et cela se ressent : vos clients y comparent, vos concurrents y sont déjà équipés, et un outil approximatif se remarque immédiatement. La digitalisation y répond moins à un manque qu'à un besoin de tenir le niveau. Je travaille avec des entreprises ivoiriennes entièrement à distance — même fuseau horaire que le Bénin, aucune contrainte d'horaire, échanges quotidiens par visioconférence et messagerie.",
        'signaux'  => [
            "Vos concurrents proposent des services en ligne que vous ne pouvez pas offrir.",
            "Les outils en place ont été empilés au fil des années sans jamais être reliés.",
            "Le reporting demandé par la direction se fabrique à la main chaque mois.",
            "Les équipes utilisent des tableurs parallèles parce que l'outil officiel ne suit pas.",
            "Un devis de prestataire local dépasse largement votre budget pour un périmètre modeste.",
        ],
        'etapes' => [
            ['titre' => "Cadrer en visioconférence, sérieusement", 'texte' => "Deux à trois séances de travail approfondies remplacent les réunions sur site. Compte rendu écrit à chaque fois : à distance, ce qui n'est pas écrit n'existe pas."],
            ['titre' => "Relier l'existant avant de remplacer", 'texte' => "Beaucoup d'entreprises abidjanaises ont déjà investi dans des outils. Les faire communiquer coûte souvent dix fois moins qu'une refonte, pour un gain comparable."],
            ['titre' => "Livrer par incréments visibles", 'texte' => "À distance, la confiance se construit sur des livraisons régulières et testables, pas sur des promesses. Une mise en ligne toutes les deux semaines, testée par vos équipes."],
            ['titre' => "Transférer la maîtrise", 'texte' => "Documentation, accès complets, formation enregistrée. Vous ne devez jamais dépendre de ma disponibilité pour une opération courante."],
        ],
        'budget'  => "Pour une entreprise abidjanaise, mes tarifs se situent structurellement en dessous du marché local à qualité comparable — c'est le principal intérêt de travailler avec un prestataire basé au Bénin. Une première étape se situe généralement entre 500 000 et 1 500 000 FCFA selon le périmètre. Devis détaillé après cadrage.",
        'delais'  => "4 à 10 semaines pour un premier périmètre livré, avec des mises en ligne intermédiaires toutes les deux semaines.",
        'faq' => [
            ['q' => "Travailler avec un prestataire hors de Côte d'Ivoire, est-ce risqué ?", 'r' => "Le risque se gère par le contrat et la méthode : livrables datés, paiement par jalons, code et données chez vous dès le départ. Concrètement, la distance Cotonou-Abidjan change moins de choses qu'une différence de fuseau horaire."],
            ['q' => "Le décalage horaire pose-t-il problème ?", 'r' => "Il n'y en a pas : Cotonou et Abidjan sont sur le même fuseau. La journée de travail est intégralement commune."],
            ['q' => "Comment se passent les paiements ?", 'r' => "Virement, Mobile Money ou carte, en plusieurs tranches indexées sur les livrables. Facture en bonne et due forme à chaque étape."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-commerce-abidjan',
        'nom'      => "commerce et distribution",
        'titre'    => "Digitaliser un commerce ou une distribution à Abidjan",
        'accroche' => "Vendre en ligne, suivre les livraisons et relier les points de vente.",
        'intro'    => "Le commerce abidjanais est le plus avancé de la sous-région sur la vente en ligne : la clientèle achète depuis son téléphone, paie en Mobile Money ou par carte, et attend une livraison en 24 à 48 heures dans le district. Pour un distributeur ou une enseigne multi-points, la difficulté n'est plus de vendre en ligne mais de tenir la promesse — un stock juste, une livraison suivie, et des points de vente qui partagent la même information.",
        'flux' => [
            "Catalogue et prix par canal",
            "Commande en ligne ou en boutique",
            "Stock consolidé multi-points",
            "Préparation et livraison",
            "Encaissement et retours",
        ],
        'douleurs' => [
            ['titre' => "Le stock en ligne ne reflète pas le stock réel", 'texte' => "Quand la boutique et le site tiennent deux inventaires, la vente en ligne d'un article déjà vendu en magasin est inévitable. C'est la première cause d'annulation et de client perdu."],
            ['titre' => "La livraison n'est pas suivie", 'texte' => "Sans statut consultable, le client appelle pour savoir où en est sa commande. Le service client passe son temps à répondre à une question qui devrait se régler seule."],
            ['titre' => "Les points de vente ne partagent rien", 'texte' => "Un article disponible dans une boutique reste invisible pour une autre. Le stock global existe, mais personne ne peut l'exploiter."],
        ],
        'solution' => [
            ['titre' => "Un stock unique pour tous les canaux", 'texte' => "Une seule source de vérité, mise à jour par chaque vente d'où qu'elle vienne. La survente devient structurellement impossible."],
            ['titre' => "Un suivi de livraison partagé avec le client", 'texte' => "Statut consultable par lien, notification à chaque étape. Les appels entrants au service client chutent nettement."],
            ['titre' => "Une vue consolidée des points de vente", 'texte' => "Ce qui est disponible, où, et en quelle quantité. Les transferts entre boutiques se décident sur des chiffres."],
            ['titre' => "Les paiements locaux intégrés", 'texte' => "Mobile Money Orange, MTN et Wave, plus carte bancaire. Un client qui ne trouve pas son moyen de paiement habituel abandonne son panier."],
        ],
        'faq' => [
            ['q' => "Faut-il repartir de zéro si nous avons déjà un site ?", 'r' => "Rarement. Un site existant peut souvent être relié à un stock consolidé sans être refait. On évalue ce point dès le cadrage, avant toute proposition de refonte."],
            ['q' => "Gérez-vous l'intégration des livreurs ?", 'r' => "Oui, soit avec vos livreurs internes via une application de suivi, soit par connexion aux prestataires que vous utilisez déjà, quand ils exposent une interface."],
            ['q' => "Combien de temps pour une boutique en ligne opérationnelle ?", 'r' => "6 à 10 semaines pour une boutique reliée au stock et aux paiements locaux. Moins si le catalogue est réduit et déjà structuré."],
        ],
    ],
];
