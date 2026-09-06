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
            'type'       => 'prose',
            'etiquette'  => 'Terrain',
            'titre'      => 'Du cahier à Dolibarr : ce qui change vraiment.',
            'paragraphes' => [
                'La plupart des entreprises qui passent à Dolibarr viennent du cahier et du tableur, et la transition est plus culturelle que technique. Le cahier pardonne tout : une rature, une ligne sautée, un montant corrigé après coup. Dolibarr, lui, exige que les choses se fassent dans l\'ordre et laisse une trace de tout. C\'est précisément sa valeur, et c\'est ce qui déroute les premières semaines. La formation accompagne ce passage en montrant ce que la rigueur rapporte : des relances qui ne s\'oublient plus, un chiffre d\'affaires qui se consulte en deux clics, un historique client qui survit aux départs.',
                'Le moment le plus délicat est la reprise de l\'existant. Faut-il ressaisir l\'historique du cahier ? La réponse enseignée est pragmatique : on reprend les tiers actifs, les produits vivants et les impayés en cours, rien de plus. Ressaisir trois ans d\'historique épuise l\'équipe avant même le premier jour d\'utilisation réelle, pour un bénéfice marginal. L\'historique papier reste consultable ; le système, lui, démarre propre.',
                'Autre spécificité des petites structures : la continuité. Quand une seule personne maîtrise l\'outil, son absence paralyse la facturation. La formation prévoit donc systématiquement un second utilisateur formé au minimum vital, émettre une facture et encaisser un règlement, même dans les équipes de trois personnes. C\'est une assurance qui coûte une heure de session.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Erreurs',
            'titre'     => 'Les pièges classiques des premiers mois.',
            'items'     => [
                ['titre' => 'Facturer hors de la séquence', 'texte' => 'Créer des factures à la volée sans passer par le devis et la commande quand le flux le demande, puis perdre le lien entre ce qui a été promis, livré et facturé. La formation ancre la séquence, et montre les raccourcis légitimes pour les ventes simples.'],
                ['titre' => 'Supprimer au lieu d\'annuler', 'texte' => 'Effacer une facture erronée plutôt que de créer l\'avoir qui la corrige. La numérotation saute, et le contrôle qui remarque un trou dans la séquence pose des questions désagréables. L\'avoir prend une minute et garde l\'historique propre.'],
                ['titre' => 'Coder les produits n\'importe comment', 'texte' => 'Des références improvisées au fil de l\'eau, et six mois plus tard trois codes pour le même article. La convention de nommage se pose au premier jour, elle est écrite pendant la formation et affichée à côté du poste.'],
                ['titre' => 'Ignorer les règlements partiels', 'texte' => 'Un client paie en deux fois, le premier versement n\'est pas enregistré comme partiel, et la relance part pour le montant total : dégât commercial garanti. Le geste correct est simple et fait partie des exercices obligatoires.'],
                ['titre' => 'Ne jamais sauvegarder', 'texte' => 'Toute la gestion vit sur un hébergement dont personne ne vérifie les sauvegardes. La formation se termine par un test de restauration réel : une sauvegarde qui n\'a jamais été restaurée n\'est pas une sauvegarde, c\'est un espoir.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que l\'entreprise garde après la session.',
            'items'     => [
                'Les fiches réflexes du cycle complet, capturées sur votre instance : devis, commande, facture, avoir, règlement, relance.',
                'La convention de nommage des tiers et des produits, écrite et validée pendant la session.',
                'Un second utilisateur formé au minimum vital de facturation, pour que l\'activité survive aux absences.',
                'La procédure de sauvegarde vérifiée par une restauration réelle, documentée en une page.',
                'La liste de ce qui a été volontairement laissé de côté à la reprise, pour que personne ne le cherche dans le système.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Extensions',
            'titre'     => 'Au-delà du socle : les modules qui valent le détour.',
            'items'     => [
                ['titre' => 'Projets et interventions', 'texte' => 'Pour les prestataires de services : rattacher temps passé et dépenses à chaque affaire, et savoir enfin quels chantiers gagnent de l\'argent. Une extension naturelle une fois le cycle de vente maîtrisé.'],
                ['titre' => 'Contrats et abonnements', 'texte' => 'Maintenance, loyers, services récurrents : le module génère les factures périodiques et signale les échéances. Il supprime le fameux cahier des renouvellements que quelqu\'un doit penser à consulter.'],
                ['titre' => 'Banque et rapprochement', 'texte' => 'Pointer les règlements contre le relevé bancaire, repérer ce qui manque. Une heure de formation qui rend le suivi de trésorerie enfin fiable, et prépare le terrain du comptable.'],
                ['titre' => 'Adhérents', 'texte' => 'Pour les associations, coopératives et ordres professionnels : cotisations, relances, listes à jour. Dolibarr est un des rares outils libres qui traite ce besoin correctement.'],
                ['titre' => 'Point de vente', 'texte' => 'Le module caisse pour les boutiques, qui relie les ventes du comptoir au stock et à la facturation. À n\'ouvrir qu\'une fois le stock discipliné, et la formation dit honnêtement quand ce prérequis n\'est pas atteint.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Préparation',
            'titre'     => 'Ce que l\'entreprise prépare avant la session.',
            'items'     => [
                'Un accès à l\'instance pour le cadrage : je vérifie son état avant de bâtir le programme, jamais l\'inverse.',
                'La liste des dix opérations les plus fréquentes de votre gestion, dans vos mots à vous, sans vocabulaire logiciel.',
                'Vos documents types actuels : un devis, une facture, un bon de livraison, pour caler les modèles imprimés.',
                'La décision sur la reprise : quels tiers, quels produits, quels impayés entrent dans le système au premier jour.',
                'Deux heures de calme par participant : une session interrompue par le comptoir toutes les cinq minutes ne forme personne.',
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
        ['q' => 'Faut-il ressaisir tout notre historique papier ?', 'r' => 'Non, et je le déconseille : on reprend les tiers actifs, les produits vivants et les impayés en cours. Ressaisir des années d\'historique épuise l\'équipe pour un bénéfice marginal, le papier restant consultable en archive.'],
        ['q' => 'Dolibarr gère-t-il le Mobile Money ?', 'r' => 'Les règlements Mobile Money s\'enregistrent comme un mode de paiement à part entière, ce qui permet de suivre ce qui entre par ce canal. La formation montre le paramétrage et le geste d\'encaissement correspondant.'],
        ['q' => 'Odoo ou Dolibarr, comment choisir ?', 'r' => 'Question de taille et de complexité : Dolibarr couvre remarquablement la gestion d\'une petite structure avec peu de moyens ; Odoo prend le relais quand les circuits de validation, les entrepôts multiples ou les volumes l\'exigent. Le cadrage tranche honnêtement, et je forme sur les deux.'],
        ['q' => 'Et si nous n\'avons pas encore installé Dolibarr ?', 'r' => 'L\'installation et la configuration sont une prestation distincte, décrite sur les pages d\'intégration. Le bon ordre : configurer d\'abord, former ensuite, idéalement dans la même quinzaine pour que l\'élan ne retombe pas.'],
    ],
];
