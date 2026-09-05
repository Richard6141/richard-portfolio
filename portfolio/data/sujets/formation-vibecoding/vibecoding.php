<?php
// ============================================================
// Formation vibecoding : developpement assiste par IA.
// Page unique, sans rattachement a une ville. Redigee le 05/09/2026.
// Regle tenue : aucun chiffre de resultat invente, aucun temoignage
// fabrique. Les formats reprennent ceux, deja publies, des formations IA.
// ============================================================
declare(strict_types=1);

return [
    'slug'       => 'formation-vibecoding',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation vibecoding : développer avec l\'IA',
    'accroche'   => 'Apprendre à construire des applications avec Claude, Cursor ou Copilot, sans en faire du code jetable.',
    'intro'      => 'Le vibecoding désigne une façon de développer où l\'on décrit ce que l\'on veut à une IA, qui écrit le code, pendant que l\'humain cadre, relit et tranche. Bien pratiqué, il divise les délais de prototypage. Mal pratiqué, il produit des applications qui fonctionnent en démonstration et s\'effondrent au premier utilisateur réel. Cette formation enseigne la différence. Je l\'anime en praticien : mes propres projets sont développés avec ces outils au quotidien, ce site compris.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Ce que le vibecoding change réellement.',
            'paragraphes' => [
                'Écrire du code n\'est plus le goulot d\'étranglement. Un assistant produit en quelques minutes ce qui demandait des heures : formulaires, écrans, appels d\'API, scripts de migration. Ce qui devient rare, c\'est la capacité à formuler précisément un besoin, à découper un projet en étapes vérifiables, et à reconnaître un code dangereux avant qu\'il parte en production.',
                'La formation déplace donc l\'effort là où il compte. On y apprend moins à taper des consignes qu\'à conduire un projet : spécifier, faire produire, tester, corriger, recommencer. La méthode vaut pour un développeur qui veut multiplier sa vitesse comme pour un entrepreneur qui veut construire son premier outil sans équipe technique.',
                'Un point de vocabulaire, pour être honnête sur les limites : un prototype construit en deux jours reste un prototype. La formation consacre un module entier à ce qui sépare une démonstration convaincante d\'une application qu\'on peut confier à de vrais utilisateurs, avec leurs données.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre modules, du cadrage au déploiement.',
            'items'     => [
                [
                    'titre' => 'Les outils et leurs différences',
                    'texte' => 'Claude Code, Cursor, GitHub Copilot, ChatGPT : ce que chacun fait bien, ce qu\'il fait mal, et lequel choisir selon qu\'on part de zéro ou qu\'on travaille dans un code existant.',
                ],
                [
                    'titre' => 'Spécifier avant de générer',
                    'texte' => 'La compétence centrale. Découper un besoin flou en étapes précises et vérifiables, donner du contexte, imposer des contraintes. La qualité du code produit dépend presque entièrement de cette étape.',
                ],
                [
                    'titre' => 'Relire, tester, corriger',
                    'texte' => 'Un code généré se lit avant de se déployer. Repérer les failles classiques : données non validées, secrets en clair, dépendances inutiles, code mort. Faire tester par l\'IA elle-même, puis vérifier autrement.',
                ],
                [
                    'titre' => 'Du prototype à la production',
                    'texte' => 'Hébergement, sauvegarde, gestion des accès, versionnage avec Git. Ce qui transforme un projet de week-end en outil qu\'une équipe peut utiliser sans risque.',
                ],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Public',
            'titre'     => 'À qui la formation s\'adresse.',
            'items'     => [
                'Développeurs et équipes techniques qui veulent intégrer ces outils sans dégrader la qualité de leur base de code.',
                'Entrepreneurs et porteurs de projet qui veulent construire un premier outil, un tableau de bord ou un site sans recruter.',
                'Équipes métier outillées, capables de bâtir leurs propres petits utilitaires internes plutôt que d\'attendre la DSI.',
                'Étudiants et personnes en reconversion qui veulent apprendre le développement par la pratique, avec l\'IA comme accélérateur et non comme béquille.',
            ],
        ],
        [
            'type'      => 'etapes',
            'etiquette' => 'Déroulé',
            'titre'     => 'Comment se passe une session.',
            'items'     => [
                ['titre' => 'Cadrage du projet support', 'texte' => 'Chaque participant vient avec un vrai besoin: un outil interne, un site, une automatisation. C\'est sur ce projet qu\'on travaille, pas sur un exercice inventé.'],
                ['titre' => 'Pratique guidée', 'texte' => 'On construit ensemble, outil en main. Chaque module alterne une démonstration courte et un temps de pratique où j\'interviens poste par poste.'],
                ['titre' => 'Revue croisée', 'texte' => 'Les participants relisent le code généré des autres. C\'est l\'exercice qui ancre le réflexe le plus important du vibecoding: ne jamais déployer ce qu\'on n\'a pas lu.'],
                ['titre' => 'Repartir autonome', 'texte' => 'Chacun repart avec son projet fonctionnel, les consignes réutilisables construites pendant la session, et une liste de vérification avant toute mise en production.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Deux formats, alignés sur ceux de mes formations IA en entreprise : un atelier découverte d\'une demi-journée pour comprendre les outils et produire un premier résultat, ou une formation complète de deux jours pour couvrir les quatre modules sur le projet de chaque participant. Groupes volontairement réduits, car la pratique guidée ne fonctionne pas au-delà d\'une dizaine de postes.',
                'Les sessions se donnent en visioconférence, ou sur place à Cotonou, Abomey-Calavi et dans les villes où j\'interviens déjà. Le devis est établi après un cadrage gratuit, qui sert aussi à vérifier que la formation correspond à votre besoin réel : quand un simple accompagnement projet suffit, je le dis.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Les formations et services liés.',
            'items'     => [
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'IA en entreprise, vibecoding et programmation: le catalogue complet, avec les formats et les tarifs indicatifs.'],
                ['url' => '/formation-ia-entreprise-cotonou', 'titre' => 'Formation IA en entreprise', 'texte' => 'Pour les équipes métier: rédaction, synthèse, automatisation des tâches répétitives, sur vos propres documents.'],
                ['url' => '/services/formation-en-programmation', 'titre' => 'Formation en programmation', 'texte' => 'Le socle classique: bases du développement web, pour comprendre ce que l\'IA écrit à votre place.'],
            ],
        ],
    ],

    'faq' => [
        [
            'q' => 'Faut-il déjà savoir coder ?',
            'r' => 'Non, mais le parcours diffère. Un développeur ira plus vite sur les modules avancés; un débutant complet passera plus de temps sur la lecture du code généré. Le cadrage gratuit sert précisément à composer un groupe cohérent.',
        ],
        [
            'q' => 'Quels outils sont utilisés pendant la formation ?',
            'r' => 'Claude Code, Cursor et GitHub Copilot pour le développement, ChatGPT et Claude pour la spécification. Les outils évoluent vite: la méthode enseignée reste valable quand l\'outil change, c\'est son intérêt.',
        ],
        [
            'q' => 'Le code produit par IA est-il fiable pour la production ?',
            'r' => 'Pas sans relecture, et c\'est le cœur de la formation. Un module entier porte sur ce qui sépare un prototype d\'une application déployable: validation des données, gestion des accès, sauvegardes, versionnage.',
        ],
        [
            'q' => 'Combien de participants par session ?',
            'r' => 'Une dizaine au maximum. La pratique guidée exige que je puisse passer sur chaque poste, ce qui devient impossible au-delà.',
        ],
        [
            'q' => 'La formation se donne-t-elle à distance ?',
            'r' => 'Oui, en visioconférence avec partage d\'écran, ce qui se prête bien à l\'exercice. Sur place également à Cotonou, Abomey-Calavi et dans les villes où j\'interviens déjà.',
        ],
        [
            'q' => 'Que se passe-t-il après la session ?',
            'r' => 'Chaque participant repart avec son projet, ses consignes réutilisables et une liste de vérification. Un accompagnement mensuel est possible ensuite, sur le même modèle que celui des formations IA.',
        ],
    ],
];
