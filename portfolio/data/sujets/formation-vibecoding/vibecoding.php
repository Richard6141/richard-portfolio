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
            'type'       => 'prose',
            'etiquette'  => 'Contexte',
            'titre'      => 'Pourquoi cette compétence compte particulièrement ici.',
            'paragraphes' => [
                'Dans la sous-région, le coût d\'une équipe de développement met la plupart des projets numériques hors de portée des PME. Un outil de gestion sur mesure, un portail de commandes, un tableau de bord : autant d\'idées qui restent dans les cartons faute de budget. Le développement assisté par IA change cette équation. Un entrepreneur méthodique peut construire en quelques semaines ce qui demandait une équipe, et un développeur local peut servir trois fois plus de clients au même niveau de qualité. C\'est une opportunité rare de rattrapage, et elle se joue maintenant, pendant que la compétence est encore peu répandue.',
                'La contrepartie existe, et je la constate déjà en mission : le marché commence à se remplir de prestations vendues comme du développement, qui sont en réalité du code généré jamais relu. Sites qui s\'effondrent à la première montée de trafic, applications dont personne ne peut corriger un bug parce que personne ne comprend le code, données clients exposées par une faille triviale. Les clients échaudés par ces prestations se méfient ensuite de tout le monde. Savoir faire la différence, comme prestataire ou comme client, devient une compétence économique en soi.',
                'C\'est exactement la position de cette formation : ni l\'enthousiasme naïf des démonstrations sur les réseaux sociaux, ni le rejet corporatiste de développeurs qui voient leur métier changer. Les outils sont réels, les gains sont réels, les pièges aussi. On apprend les trois ensemble, sur des projets réels, avec quelqu\'un qui livre avec ces outils toutes les semaines.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Pièges',
            'titre'     => 'Les cinq erreurs qui ruinent un projet vibecodé.',
            'items'     => [
                ['titre' => 'Déployer sans relire', 'texte' => 'L\'erreur capitale. Un code qui fonctionne en démonstration peut contenir des failles béantes : données non validées, mots de passe stockés en clair, requêtes ouvertes à l\'injection. La règle enseignée est simple et non négociable : ce qui n\'a pas été lu ne part pas en production.'],
                ['titre' => 'Tout demander d\'un coup', 'texte' => 'Décrire l\'application entière en un paragraphe et espérer un résultat cohérent. L\'IA produit alors une masse de code enchevêtré, impossible à corriger. La méthode inverse, une fonctionnalité à la fois, testée avant de passer à la suivante, produit dix fois mieux avec le même outil.'],
                ['titre' => 'Ignorer le versionnage', 'texte' => 'Travailler sans Git, c\'est avancer sans filet : la modification qui casse tout devient irréversible. Une part de la formation installe ce réflexe, car les assistants eux-mêmes travaillent mieux sur un projet correctement versionné.'],
                ['titre' => 'Laisser les secrets dans le code', 'texte' => 'Clés d\'API, mots de passe de base de données, identifiants de paiement : les assistants les placent volontiers en dur dans le code, et les débutants les publient tels quels. On apprend où ces valeurs doivent vivre, et comment vérifier qu\'aucune ne traîne.'],
                ['titre' => 'Confondre prototype et produit', 'texte' => 'Montrer un prototype comme s\'il était fini, signer, puis découvrir que la moitié du travail reste à faire : sécurité, sauvegardes, cas limites, montée en charge. La formation donne la liste de contrôle qui sépare les deux, précisément pour éviter cette situation.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que chaque participant emporte.',
            'items'     => [
                'Son projet support fonctionnel, versionné avec Git et déployé sur un hébergement réel, pas une démonstration locale qui meurt avec la session.',
                'Sa bibliothèque de consignes personnelles, construite pendant la formation et directement réutilisable sur les projets suivants.',
                'La liste de contrôle avant mise en production : sécurité, sauvegardes, secrets, accès, la même que j\'utilise sur mes propres livraisons.',
                'Une méthode de travail documentée : spécifier, générer, relire, tester, versionner, dans cet ordre et sans étape sautée.',
                'Une attestation de formation, et l\'accès aux corrections de la session pour prolonger le travail.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Après',
            'titre'      => 'Ce que le vibecoding ne remplace pas.',
            'paragraphes' => [
                'Un mot honnête pour finir, parce que cette page serait incomplète sans lui. Le développement assisté par IA excelle sur les applications de gestion, les sites, les tableaux de bord, les automatisations : des problèmes bien balisés, où les modèles ont vu des milliers d\'exemples. Il reste faible sur les systèmes réellement complexes : forte charge, temps réel, contraintes de sécurité élevées, logique métier très spécifique. Savoir situer son projet sur cette échelle fait partie de la formation.',
                'Il ne remplace pas non plus la compréhension du domaine. L\'outil de gestion d\'une pharmacie encode des règles de péremption et de traçabilité ; celui d\'un transitaire encode des régimes douaniers. L\'IA ne connaît pas vos règles : elle implémente ce qu\'on lui décrit, y compris les erreurs de description. Les participants qui réussissent le mieux sont ceux qui connaissent leur métier à fond et apprennent à le décrire précisément, pas ceux qui tapent le plus vite.',
                'Enfin, pour les projets critiques, le vibecoding déplace la dépense plus qu\'il ne la supprime : ce qu\'on économise en écriture de code se réinvestit en relecture, en tests et en architecture. C\'est un excellent marché, mais c\'est un marché, pas un miracle. Ceux qui vous promettent le contraire vendent autre chose que de la formation.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Exemples',
            'titre'     => 'Des projets réalisables pendant ou juste après la formation.',
            'items'     => [
                ['titre' => 'Un outil de stock et de caisse', 'texte' => 'Entrées, sorties, alerte de seuil, total du jour. Le classique des projets supports, parce que la moitié des participants en ont besoin dans leur propre activité.'],
                ['titre' => 'Un portail de commandes', 'texte' => 'Un formulaire propre qui alimente un tableau de suivi, avec accusé de réception au client. Remplace le carnet et les captures d\'écran WhatsApp.'],
                ['titre' => 'Un tableau de bord', 'texte' => 'Les chiffres de l\'activité, lus depuis un tableur ou une base, présentés en graphiques qui se mettent à jour seuls. Le projet préféré des dirigeants participants.'],
                ['titre' => 'Un site vitrine sérieux', 'texte' => 'Pages, formulaire de contact, hébergement, nom de domaine : l\'ensemble mis en ligne pendant la formation, pas promis pour après.'],
                ['titre' => 'Un utilitaire interne', 'texte' => 'Le générateur de reçus, le calculateur de devis, le suivi de véhicules : ces petits outils qu\'aucune PME ne fait développer parce que le devis dépasserait leur valeur, et qui deviennent enfin possibles.'],
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
        [
            'q' => 'Quelle différence avec la formation développement web classique ?',
            'r' => 'La formation développement web construit les fondations sur plusieurs semaines : comprendre le code, le serveur, la base de données. Le vibecoding apprend à produire vite avec l\'IA en s\'appuyant sur ces fondations, ou en les contournant pour des projets simples. Les deux se combinent bien, dans un sens comme dans l\'autre.',
        ],
        [
            'q' => 'Les outils sont-ils payants ?',
            'r' => 'Les principaux ont des paliers gratuits suffisants pour la formation. Pour un usage professionnel régulier, comptez un abonnement mensuel de l\'ordre de ce que coûte un bon forfait téléphonique. Le choix des abonnements se décide en fin de session, sur la base de ce qui a réellement servi à chacun.',
        ],
        [
            'q' => 'Peut-on vibecoder une application mobile ?',
            'r' => 'Oui, les mêmes outils génèrent des applications mobiles, et le sujet est traité si le projet d\'un participant s\'y prête. La marche vers la publication sur les magasins d\'applications est en revanche plus haute que pour le web, et la formation le dit clairement plutôt que de le découvrir en fin de projet.',
        ],
        [
            'q' => 'J\'ai déjà commencé un projet avec l\'IA et je suis bloqué. La formation peut-elle servir ?',
            'r' => 'C\'est même un excellent point de départ : un projet bloqué contient toutes les leçons de la formation en condensé. On le reprend ensemble, on diagnostique ce qui coince, et il devient votre projet support. Le déblocage fait alors partie du résultat.',
        ],
        [
            'q' => 'La formation couvre-t-elle l\'hébergement et la mise en ligne ?',
            'r' => 'Oui, jusqu\'au bout : hébergement réel, nom de domaine, certificat, sauvegardes. Un projet qui ne tourne que sur l\'ordinateur de son auteur n\'est pas terminé, et la formation refuse de s\'arrêter là. Les coûts d\'hébergement réels, modestes, sont présentés sans surprise.',
        ],
        [
            'q' => 'Une entreprise peut-elle envoyer une équipe entière ?',
            'r' => 'Oui, et le format intra-entreprise s\'y prête bien : l\'équipe travaille alors sur un projet interne commun, ce qui double l\'intérêt de la session. La revue croisée entre collègues installe en plus une culture de relecture qui survit à la formation.',
        ],
        ['q' => 'Le vibecoding est-il adapté aux projets avec paiement en ligne ?', 'r' => 'Avec prudence : l\'intégration Mobile Money ou carte bancaire se vibecode techniquement, mais l\'argent exige une relecture renforcée et des tests stricts, couverts dans le module production. Pour un premier projet, je recommande de commencer par le reste et d\'ajouter le paiement en second palier.'],
    ],
];
