<?php
// Formation Dolibarr pour les equipes utilisatrices. Redigee le 05/09/2026.
// Distincte de la formation Odoo par son angle : Dolibarr equipe surtout
// des structures plus petites, souvent sans service informatique, ou une
// seule personne cumule facturation, stock et relances.
declare(strict_types=1);

return [
    'slug'       => 'formation-dolibarr',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation Dolibarr pour vos équipes',
    'accroche'   => 'Dolibarr est simple en apparence. Bien utilisé, il tient la gestion complète d\'une PME ; mal pris en main, il devient un carnet de factures amélioré.',
    'intro'      => 'Dolibarr équipe des structures où une même personne cumule souvent les devis, la facturation, le stock et les relances. Quand cette personne n\'utilise que dix pour cent de l\'outil, l\'entreprise paie un logiciel de gestion pour faire des factures, et continue de piloter le reste sur cahier. Cette formation vise l\'autre scénario : un Dolibarr qui tient réellement la gestion, tenu par des gens qui savent pourquoi ils cliquent.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Le piège du logiciel « facile ».',
            'paragraphes' => [
                'Dolibarr s\'installe vite et ses écrans paraissent évidents. C\'est sa force, et c\'est le piège : chacun s\'y met sans formation, prend ses habitudes, et six mois plus tard les tiers sont en double, les produits mal codifiés et les statuts de facture utilisés de travers. Le nettoyage coûte alors plus cher que la formation qui l\'aurait évité.',
                'La formation installe les bons gestes dès le départ, ou remet de l\'ordre quand les mauvais sont déjà pris : conventions de nommage, cycle complet devis, commande, livraison, facture, règlement, et la discipline des statuts qui rend les chiffres fiables.',
                'Comme pour Odoo, je forme sur votre instance et vos données. La différence de taille des structures change le format : les sessions Dolibarr sont plus courtes, plus individualisées, et vont plus loin par personne puisque chacune couvre plusieurs rôles.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Ce qu\'on couvre, dans l\'ordre où l\'entreprise en a besoin.',
            'items'     => [
                ['titre' => 'Le cycle de vente complet', 'texte' => 'Tiers, devis, commande, facture, règlement, relance. Le fil conducteur de toute la formation, exécuté de bout en bout sans aide en fin de session.'],
                ['titre' => 'Produits, services et stock', 'texte' => 'Codifier proprement, gérer les entrées et sorties, faire un inventaire qui tombe juste. Le module où les mauvaises habitudes coûtent le plus cher.'],
                ['titre' => 'Fournisseurs et achats', 'texte' => 'Commandes fournisseurs, réception, factures d\'achat, et le rapprochement qui évite de payer deux fois ou de payer trop.'],
                ['titre' => 'Suivi et exports', 'texte' => 'Ce que les chiffres de Dolibarr disent de l\'activité, les exports pour le comptable, et les listes qui remplacent le cahier de relances.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Public',
            'titre'     => 'À qui la formation s\'adresse.',
            'items'     => [
                'La personne qui tient la gestion au quotidien : assistante de direction, comptable, gérant lui-même dans les petites structures.',
                'Les entreprises fraîchement équipées, avant que les habitudes se prennent : c\'est le moment où une journée de formation en économise dix de nettoyage.',
                'Les Dolibarr hérités, installés il y a des années et utilisés a minima, qu\'on veut remettre au centre de la gestion.',
                'Les équipes qui migrent depuis le tableur et doivent accepter de perdre la souplesse d\'Excel contre la fiabilité d\'un vrai référentiel.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Une journée suffit généralement pour rendre autonome la personne qui tient la gestion, en séance individuelle ou à deux. Pour une équipe, compter une demi-journée par groupe de métier, sur le modèle des formations Odoo. Sur place ou en visioconférence avec prise en main sur votre instance.',
                'Le devis est établi après un cadrage gratuit, qui inclut un coup d\'œil à votre instance : si des réglages de fond doivent être corrigés avant de former, je le chiffre séparément et vous décidez.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Formations et services liés.',
            'items'     => [
                ['url' => '/dolibarr-cotonou', 'titre' => 'Intégration Dolibarr', 'texte' => 'L\'installation et la configuration elles-mêmes, quand l\'outil n\'est pas encore en place.'],
                ['url' => '/formation-odoo', 'titre' => 'Formation Odoo', 'texte' => 'Le même travail d\'adoption pour les structures équipées d\'Odoo.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'IA, vibecoding, automatisation, web : le catalogue complet.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Une seule personne gère tout chez nous. Le format s\'y prête-t-il ?', 'r' => 'C\'est même le cas type. Une journée en séance individuelle couvre le cycle complet sur vos données, et la personne repart avec ses fiches réflexes. C\'est le format le plus efficace de tout le catalogue.'],
        ['q' => 'Notre Dolibarr est mal configuré depuis le début. Former ou corriger d\'abord ?', 'r' => 'Corriger d\'abord si les défauts rendent les gestes faux, sinon la formation grave les mauvaises habitudes. Le cadrage gratuit tranche ce point, et le nettoyage éventuel est chiffré séparément.'],
        ['q' => 'Couvrez-vous la comptabilité dans Dolibarr ?', 'r' => 'La formation couvre la facturation, les règlements et les exports vers le comptable. La tenue comptable complète dans Dolibarr se cadre avec votre comptable, pour rester aligné sur ses écritures.'],
        ['q' => 'À distance ou sur place ?', 'r' => 'Les deux. La visioconférence avec prise en main sur votre instance fonctionne bien pour ce format court. Sur place à Cotonou, Abomey-Calavi et dans les villes où j\'interviens déjà.'],
        ['q' => 'Que reste-t-il après la session ?', 'r' => 'Les fiches réflexes capturées sur votre instance, et la possibilité d\'une session de retour un mois plus tard pour traiter les questions apparues à l\'usage.'],
    ],
];
