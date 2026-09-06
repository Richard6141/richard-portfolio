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
            'type'       => 'prose',
            'etiquette'  => 'Terrain',
            'titre'      => 'Ce que l\'échec d\'adoption coûte réellement.',
            'paragraphes' => [
                'Un Odoo contourné ne coûte pas seulement le prix du déploiement perdu. Il coûte double : l\'entreprise paie l\'outil et continue de payer les défauts que l\'outil devait corriger. Le stock théorique diverge du stock réel parce que les mouvements se font hors système. Les chiffres du tableau de bord deviennent faux, donc plus personne ne les regarde, donc les décisions se reprennent à l\'instinct. Et le jour où un contrôle, un audit ou un investisseur demande des états fiables, tout se reconstruit à la main depuis les cahiers.',
                'Le scénario se reconnaît à des signes précis : des commandes créées après la livraison pour régulariser, des clients en double avec des orthographes différentes, un utilisateur unique dont tout le monde partage le mot de passe, des inventaires jamais clôturés. Aucun de ces signes n\'est un problème de logiciel. Tous sont des problèmes de formation, et tous se corrigent par la formation, à condition de former sur les vrais flux de l\'entreprise et pas sur des généralités.',
                'C\'est aussi pour cela que la formation commence par une demi-journée d\'observation plutôt que par un plan de cours standard. Deux entreprises qui utilisent les mêmes modules Odoo ne travaillent jamais de la même façon : le circuit de validation d\'un importateur ne ressemble pas à celui d\'une boutique. Observer d\'abord évite de former sur des chemins que personne n\'emprunte.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Erreurs',
            'titre'     => 'Les erreurs d\'utilisation les plus coûteuses.',
            'items'     => [
                ['titre' => 'Régulariser après coup', 'texte' => 'Livrer d\'abord, saisir ensuite, parfois le lendemain. Le stock ment pendant l\'intervalle, et les régularisations en série finissent par rendre l\'historique inutilisable. La formation installe le geste inverse : la saisie fait partie de l\'opération, pas de la paperasse d\'après.'],
                ['titre' => 'Créer des doublons de tiers', 'texte' => 'Chaque vendeur crée « son » client au lieu de chercher l\'existant, et l\'historique d\'un même client s\'éparpille sur trois fiches. Les règles de recherche et de nommage prennent dix minutes à apprendre et évitent des mois de nettoyage.'],
                ['titre' => 'Partager un seul compte', 'texte' => 'Tout le monde travaille sous le même utilisateur, souvent administrateur. Plus de traçabilité, plus de droits différenciés, et une erreur devient anonyme. La formation remet chacun sous son compte, avec les droits de son poste.'],
                ['titre' => 'Ignorer les statuts', 'texte' => 'Des devis jamais confirmés, des livraisons jamais validées, des factures en brouillon : les documents restent à mi-chemin et les rapports comptent faux. Comprendre le cycle de vie d\'un document Odoo est le savoir le plus rentable de toute la formation.'],
                ['titre' => 'Sauter l\'inventaire', 'texte' => 'Sans inventaire régulier et clôturé, l\'écart entre stock théorique et stock réel grandit jusqu\'à ce que plus personne ne fasse confiance au système. Le module stock de la formation se termine par un inventaire réel, mené de bout en bout.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que l\'entreprise garde après les sessions.',
            'items'     => [
                'Les fiches réflexes par poste, capturées écran par écran sur votre instance, imprimables et affichables au poste de travail.',
                'Une convention de nommage écrite pour les tiers et les produits, validée avec la direction pendant l\'audit.',
                'La liste des écarts relevés pendant l\'observation, avec ce qui relève de la formation et ce qui relève de la configuration.',
                'Des comptes utilisateurs propres, aux droits alignés sur les postes réels.',
                'Une session de retour à un mois, comprise dans le devis, pour traiter les questions apparues à l\'usage.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Direction',
            'titre'      => 'Le rôle du dirigeant dans l\'adoption.',
            'paragraphes' => [
                'L\'adoption d\'un ERP se gagne ou se perd au sommet, et il faut le dire sans détour : une équipe n\'utilise durablement que ce que sa direction regarde. Si le dirigeant continue de demander les chiffres sur cahier, l\'équipe comprendra que le cahier fait foi, et Odoo mourra en quelques semaines quoi que la formation ait installé. À l\'inverse, un dirigeant qui ouvre le tableau de bord chaque matin et pose ses questions à partir de l\'écran rend le contournement impossible : ce qui n\'est pas saisi n\'existe pas.',
                'La session dirigeants sert exactement à armer ce rôle. On n\'y apprend pas à saisir des commandes, mais à lire : quel indicateur regarder chaque jour, chaque semaine, chaque fin de mois ; comment repérer une anomalie sans convoquer une réunion ; quelles questions poser quand un chiffre paraît étrange. Une demi-journée suffit, et elle change davantage l\'adoption que toutes les autres sessions réunies.',
                'Un dernier point de gouvernance : la règle d\'or à annoncer publiquement au lancement, puis à tenir. Toute opération passe par le système, sans exception ni régularisation tolérée. Les entreprises où cette règle est portée par le sommet convergent en quelques semaines ; celles où elle reste implicite dérivent en quelques mois. La formation fournit le texte de cette annonce, il tient en cinq lignes.',
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Signes',
            'titre'     => 'Les signes qu\'il est temps de former.',
            'items'     => [
                'Les équipes ressaisissent dans un tableur ce qui existe déjà dans Odoo, « pour être sûres ».',
                'Le stock affiché ne correspond plus au stock du magasin, et plus personne ne s\'en étonne.',
                'Une seule personne sait faire les opérations importantes, et ses congés bloquent la facturation.',
                'Les rapports mensuels se construisent à la main, hors du système, à partir de sources contradictoires.',
                'Les nouveaux embauchés apprennent l\'outil par imitation des anciens, mauvaises habitudes comprises.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Calendrier',
            'titre'      => 'Le déroulé complet, du premier contact au retour à un mois.',
            'paragraphes' => [
                'Semaine zéro : le cadrage, gratuit, en visioconférence. Vous décrivez l\'entreprise, les postes et ce qui coince ; je demande un accès en lecture à l\'instance pour me faire une idée de son état réel. De là sort une proposition datée : quels parcours, pour qui, dans quel ordre, à quel prix. Si l\'instance présente des défauts de configuration qui rendraient la formation contre-productive, c\'est dit à ce moment, avec un chiffrage séparé de la remise en état, et vous restez libre de la confier à qui vous voulez.',
                'Semaine une : la demi-journée d\'audit sur site. J\'observe le travail réel, poste par poste, sans rien changer : qui saisit quoi, ce qui se fait hors système, où les données divergent. L\'après-midi même, la direction reçoit la liste des écarts et la convention de nommage à valider. Les semaines suivantes déroulent les sessions par poste, en commençant toujours par le flux le plus critique pour l\'activité, généralement les ventes, à raison d\'une demi-journée par groupe pour que le comptoir continue de tourner.',
                'La session dirigeants se place en fin de parcours, quand les équipes ont pris leurs marques : le tableau de bord qu\'on apprend à lire reflète alors des données devenues fiables, ce qui change tout à l\'exercice. Un mois après la dernière session, le retour : une demi-journée pour traiter les questions accumulées, corriger les gestes qui ont dérivé et constater, chiffres à l\'appui, ce qui a changé dans la tenue du système. C\'est ce rendez-vous, plus que tout autre, qui transforme une formation en adoption.',
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
        ['q' => 'Nos données réelles peuvent-elles servir sans risque pendant la formation ?', 'r' => 'Oui, en travaillant sur une copie de votre base quand l\'hébergement le permet : les participants manipulent leurs vrais articles et leurs vrais clients sans toucher à la production. Quand la copie n\'est pas possible, on borne les exercices à des documents de test clairement marqués.'],
        ['q' => 'La comptabilité OHADA est-elle couverte ?', 'r' => 'La formation couvre la facturation, les règlements et les exports vers votre comptable. Le paramétrage comptable OHADA lui-même relève de la configuration, à cadrer avec votre cabinet : je refuse de former sur un plan comptable mal posé, ça graverait les erreurs.'],
        ['q' => 'Combien de temps prévoir pour une PME de dix personnes ?', 'r' => 'Le cas courant : une demi-journée d\'audit, deux à trois parcours métier d\'une demi-journée chacun, la session dirigeants, puis le retour à un mois. Soit deux à trois jours étalés sur cinq à six semaines, le tout précisé au devis après l\'audit.'],
        ['q' => 'Formez-vous les nouveaux embauchés plus tard ?', 'r' => 'Les fiches réflexes servent précisément à ça : un nouvel arrivant s\'y forme en autonomie pour l\'essentiel. Pour les recrutements groupés ou les postes clés, une session courte se cale à la demande, au tarif d\'une demi-journée.'],
        ['q' => 'La formation couvre-t-elle le point de vente Odoo ?', 'r' => 'Oui, comme parcours métier à part entière pour les commerces qui l\'utilisent : ouverture et clôture de caisse, encaissements, retours, et le lien avec le stock qui fait la valeur du module. Le prérequis est un stock discipliné, et l\'audit vérifie ce point avant de planifier la session caisse.'],
        ['q' => 'Nos équipes parlent peu français. Comment adaptez-vous ?', 'r' => 'Les sessions se donnent en français, avec un rythme adapté et des fiches réflexes très visuelles, capture par capture, qui servent ensuite de référence quotidienne sans lecture longue. Quand un relais interne bilingue existe, je le forme en priorité et il devient le référent de son groupe.'],
        ['q' => 'Formez-vous aussi sur les modules RH et paie ?', 'r' => 'Sur la partie utilisation : congés, notes de frais, suivi du personnel. Le paramétrage de la paie proprement dite dépend du droit local et se cadre avec votre comptable ou votre juriste social, et je le dis clairement plutôt que d\'improviser sur un sujet qui engage.'],
    ],
];
