<?php
// Formation Odoo pour les equipes utilisatrices. Redigee le 05/09/2026.
// Angle assume : Richard integre Odoo (pages integration-odoo-<ville>) ;
// cette formation est le pendant humain de ces deploiements.
declare(strict_types=1);

return [
    'slug'       => 'formation-odoo',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation Odoo pour vos équipes',
    'accroche'   => 'Un ERP ne vaut que ce que les équipes en font. Former les utilisateurs, c\'est ce qui sépare un Odoo adopté d\'un Odoo contourné.',
    'intro'      => 'La plupart des projets Odoo qui échouent ne butent pas sur la technique : ils butent sur l\'adoption. Trois semaines après la mise en service, les équipes ressaisissent dans leur ancien tableur parce que personne ne leur a montré autre chose que des écrans. Cette formation prend le problème à l\'endroit : chaque participant apprend son propre poste de travail, sur les données de l\'entreprise, jusqu\'à ce que le geste soit acquis.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Former sur vos flux, pas sur la théorie du logiciel.',
            'paragraphes' => [
                'Odoo couvre des dizaines de modules, mais une caissière n\'a pas besoin de connaître la comptabilité analytique et un magasinier n\'a pas besoin du CRM. La formation se découpe donc par poste : chacun apprend précisément le chemin qu\'il empruntera chaque jour, de la commande client à la facture, de la réception de stock à l\'inventaire.',
                'Je forme sur votre instance, avec vos articles, vos clients et vos circuits de validation. C\'est plus exigeant à préparer qu\'un jeu de démonstration, mais c\'est ce qui fait que le lundi suivant, les équipes travaillent au lieu de chercher.',
                'Quand je réalise moi-même le déploiement, la formation s\'intègre au projet. Quand l\'intégration a été faite par un autre prestataire, elle fonctionne aussi en rattrapage : c\'est même le cas le plus fréquent.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Des parcours par poste, pas un cours magistral.',
            'items'     => [
                ['titre' => 'Ventes et CRM', 'texte' => 'Du prospect au devis, du devis à la commande, relances et suivi. Pour les équipes commerciales et l\'accueil.'],
                ['titre' => 'Stock et achats', 'texte' => 'Réceptions, livraisons, inventaires, réapprovisionnement. Pour les magasiniers et les responsables achats.'],
                ['titre' => 'Facturation et paiements', 'texte' => 'Factures clients et fournisseurs, avoirs, lettrage, suivi des encaissements, y compris Mobile Money quand le circuit existe.'],
                ['titre' => 'Pilotage pour dirigeants', 'texte' => 'Lire les tableaux de bord, contrôler sans ressaisir, repérer une anomalie avant la fin du mois. Une demi-journée dédiée.'],
            ],
        ],
        [
            'type'      => 'etapes',
            'etiquette' => 'Déroulé',
            'titre'     => 'Comment se passe la mise à niveau d\'une équipe.',
            'items'     => [
                ['titre' => 'Audit des usages', 'texte' => 'Une demi-journée d\'observation : qui fait quoi dans l\'outil, ce qui se fait encore hors de l\'outil, et pourquoi.'],
                ['titre' => 'Sessions par poste', 'texte' => 'Groupes de trois à six personnes du même métier, sur leurs écrans réels. Chaque session se termine par une tâche complète exécutée sans aide.'],
                ['titre' => 'Fiches réflexes', 'texte' => 'Chaque poste repart avec sa fiche : le chemin de ses opérations courantes, capturé sur votre instance, pas sur une version générique.'],
                ['titre' => 'Retour à un mois', 'texte' => 'Une session courte pour traiter les questions apparues à l\'usage. C\'est là que l\'adoption se joue réellement.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Le volume dépend du nombre de postes à couvrir : compter une demi-journée par parcours métier, plus la session dirigeants. Les sessions se donnent sur place à Cotonou, Abomey-Calavi et dans les villes où j\'interviens, ou en visioconférence avec prise en main à distance sur votre instance.',
                'Le devis est établi après un cadrage gratuit qui liste les postes, les modules réellement utilisés et l\'état de votre instance. Si votre Odoo présente des défauts de configuration qui rendraient la formation inutile, je le dis avant, pas après.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Formations et services liés.',
            'items'     => [
                ['url' => '/integration-odoo-cotonou', 'titre' => 'Intégration Odoo', 'texte' => 'Le déploiement lui-même, par paliers : le service dont cette formation est le prolongement naturel.'],
                ['url' => '/formation-dolibarr', 'titre' => 'Formation Dolibarr', 'texte' => 'Le même travail d\'adoption, pour les entreprises équipées de Dolibarr.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'IA, vibecoding, automatisation, web : le catalogue complet.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Vous n\'avez pas installé notre Odoo. Pouvez-vous former quand même ?', 'r' => 'Oui, c\'est le cas le plus fréquent. Je demande un accès à votre instance avant le cadrage pour vérifier son état : on forme sur ce qui existe, pas sur un Odoo idéal.'],
        ['q' => 'Quelles versions d\'Odoo couvrez-vous ?', 'r' => 'Les versions communautaires et entreprise en usage courant. Les écrans changent d\'une version à l\'autre, c\'est justement pour cela que la formation se donne sur votre instance et non sur des captures génériques.'],
        ['q' => 'Combien de personnes par session ?', 'r' => 'Trois à six par parcours métier. Au-delà, la prise en main individuelle sur écran devient impossible, et c\'est elle qui fait la valeur de la session.'],
        ['q' => 'La formation peut-elle se faire à distance ?', 'r' => 'Oui, en visioconférence avec partage d\'écran et prise en main sur votre instance. Le format sur place reste préférable pour les équipes peu à l\'aise avec l\'outil informatique.'],
        ['q' => 'Que reste-t-il après la formation ?', 'r' => 'Les fiches réflexes par poste, capturées sur votre instance, et une session de retour à un mois pour traiter les questions apparues à l\'usage.'],
    ],
];
