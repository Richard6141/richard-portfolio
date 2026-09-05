<?php
// Formation automatisation avec n8n et Make. Redigee le 05/09/2026.
// Adossee au service « Automatisation & IA » que Richard vend deja.
declare(strict_types=1);

return [
    'slug'       => 'formation-automatisation',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation automatisation avec n8n et Make',
    'accroche'   => 'Apprendre à relier vos outils entre eux pour que les tâches répétitives s\'exécutent seules, sans dépendre d\'un prestataire à chaque modification.',
    'intro'      => 'Copier des commandes WhatsApp dans un tableur, ressaisir des factures, envoyer les mêmes rappels chaque semaine : ces tâches se relient et s\'automatisent avec des outils comme n8n ou Make, sans écrire de code ou presque. Je construis ces automatisations pour mes clients ; cette formation apprend à vos équipes à construire et surtout à entretenir les leurs. La différence est importante : une automatisation qu\'on ne sait pas modifier soi-même devient une dépendance de plus.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Automatiser sans devenir prisonnier de son prestataire.',
            'paragraphes' => [
                'Le marché regorge d\'automatisations vendues clés en main, qui fonctionnent jusqu\'au jour où un formulaire change, où un mot de passe expire, où une condition doit évoluer. L\'entreprise rappelle alors le prestataire pour chaque virgule. La formation vise l\'autonomie : comprendre ce qui a été construit, savoir le modifier, savoir diagnostiquer quand ça casse.',
                'On y apprend à raisonner en flux : un déclencheur, des étapes, des conditions, des cas d\'erreur. Ce raisonnement vaut pour tous les outils du marché. n8n sert de support principal parce qu\'il s\'héberge chez vous et ne facture pas à l\'opération, ce qui compte quand les volumes montent ; Make est couvert pour les équipes qui l\'utilisent déjà.',
                'La formation est honnête sur les limites : tout ne mérite pas d\'être automatisé. Une tâche rare, mal définie ou pleine d\'exceptions coûte plus cher en maintenance qu\'en exécution manuelle. Savoir renoncer fait partie du programme.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre modules, du premier flux à la maintenance.',
            'items'     => [
                ['titre' => 'Penser en flux', 'texte' => 'Déclencheurs, étapes, conditions, erreurs. Cartographier une tâche réelle de votre entreprise avant de toucher à l\'outil.'],
                ['titre' => 'Construire avec n8n', 'texte' => 'Prise en main complète : connecter un formulaire, un tableur, une boîte mail, WhatsApp. Chaque participant construit un flux utile à son poste.'],
                ['titre' => 'Ajouter l\'IA au bon endroit', 'texte' => 'Trier des messages entrants, extraire des données d\'un document, rédiger une réponse à valider. L\'IA comme étape d\'un flux, pas comme gadget.'],
                ['titre' => 'Fiabiliser et maintenir', 'texte' => 'Gérer les pannes, les cas limites et les notifications d\'échec. Documenter le flux pour que son auteur ne soit pas le seul à le comprendre.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Cas travaillés',
            'titre'     => 'Des automatisations qui reviennent dans presque toutes les PME.',
            'items'     => [
                'Les demandes reçues sur WhatsApp ou par formulaire arrivent triées dans un tableau, avec accusé de réception automatique.',
                'Les relances de paiement partent seules selon l\'échéance, avec un texte ferme mais correct, et s\'arrêtent dès que le règlement est enregistré.',
                'Les pièces jointes des fournisseurs sont extraites, renommées et classées, au lieu de dormir dans la boîte mail.',
                'Un rapport hebdomadaire se compile tout seul depuis vos outils et arrive le lundi matin, déjà mis en forme.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Atelier découverte d\'une demi-journée pour cartographier vos tâches automatisables et construire un premier flux, ou formation complète de deux jours couvrant les quatre modules, chaque participant repartant avec un flux en production. Groupes réduits, en visioconférence ou sur place.',
                'Prérequis : être à l\'aise avec ses propres outils, rien de plus. Le devis est établi après un cadrage gratuit qui liste vos tâches candidates et vérifie que l\'automatisation est bien la bonne réponse.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Formations et services liés.',
            'items'     => [
                ['url' => '/services/automatisation-ia', 'titre' => 'Automatisation & IA sur mesure', 'texte' => 'Quand vous préférez confier la construction : je réalise, vous exploitez, la formation assure la relève.'],
                ['url' => '/formation-ia-entreprise', 'titre' => 'Formation IA en entreprise', 'texte' => 'Le volet bureau : rédiger, synthétiser, structurer avec les assistants, sans automatisation.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'Le catalogue complet, avec les formats et les tarifs indicatifs.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer ?', 'r' => 'Non. n8n et Make se manipulent visuellement. Un peu de logique suffit : si ceci, alors cela. Les rares cas qui demandent une ligne de code sont traités ensemble pendant la session.'],
        ['q' => 'Pourquoi n8n plutôt que Make ou Zapier ?', 'r' => 'Parce qu\'il s\'héberge chez vous et ne facture pas à l\'opération : à volumes croissants, la différence de coût devient significative. Make reste couvert pour les équipes déjà équipées, et la méthode enseignée vaut pour les deux.'],
        ['q' => 'Peut-on automatiser WhatsApp ?', 'r' => 'Oui, dans le cadre des solutions officielles WhatsApp Business, avec leurs contraintes réelles : ce qui est permis, ce qui ne l\'est pas, et ce qui risque de faire bannir un numéro. Le module y consacre un temps dédié.'],
        ['q' => 'Que devient le flux construit pendant la formation ?', 'r' => 'Il vous appartient et tourne sur votre compte ou votre serveur, pas sur le mien. C\'est un principe : vous repartez avec quelque chose qui fonctionne et que vous savez modifier.'],
        ['q' => 'Et si une automatisation casse après la formation ?', 'r' => 'Le module maintenance sert précisément à ça : notifications d\'échec, diagnostic, documentation. Pour le reste, un accompagnement ponctuel reste possible, en visioconférence.'],
    ],
];
