<?php
// Formation developpement web. Redigee le 05/09/2026. Prolonge le service
// « Formation en programmation » deja en base, avec un angle assume :
// apprendre les fondations a l'ere des assistants IA.
declare(strict_types=1);

return [
    'slug'       => 'formation-developpement-web',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation développement web',
    'accroche'   => 'Apprendre à construire de vrais sites et applications, avec les fondations qui permettent de comprendre ce que l\'IA écrit à votre place.',
    'intro'      => 'On peut aujourd\'hui générer un site sans comprendre une ligne de ce qu\'il contient. C\'est précisément pour cela que les fondations valent plus cher qu\'avant : le marché se remplit de gens qui produisent du code sans savoir le lire, et manque de gens capables de dire pourquoi une page est lente, pourquoi un formulaire est vulnérable, pourquoi une base de données ment. Cette formation construit ces fondations, en s\'appuyant sur l\'IA comme accélérateur d\'apprentissage plutôt qu\'en la fuyant.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Apprendre le métier, pas seulement la syntaxe.',
            'paragraphes' => [
                'La syntaxe s\'apprend vite, et l\'IA la connaît mieux que tout le monde. Ce qui s\'apprend lentement, et qui fait la valeur d\'un développeur, c\'est le reste : découper un problème, structurer des données, lire un message d\'erreur sans paniquer, chercher la cause plutôt que le symptôme, livrer quelque chose qui tient quand un vrai utilisateur s\'en sert.',
                'La formation est donc construite autour de projets complets plutôt que d\'exercices isolés : un site qu\'on met réellement en ligne, un formulaire qui enregistre réellement des données, une page d\'administration qui les affiche. Chaque notion arrive au moment où le projet la rend nécessaire.',
                'J\'enseigne avec la stack qui fait tourner l\'essentiel du web réel : HTML, CSS, JavaScript, PHP et MySQL. Ce choix est un parti pris assumé : c\'est la stack qu\'on rencontre dans les entreprises d\'ici, celle qui s\'héberge partout à petit prix, et celle qui permet de comprendre les frameworks plus tard au lieu de les subir.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Un parcours en quatre paliers.',
            'items'     => [
                ['titre' => 'Le socle : HTML, CSS, JavaScript', 'texte' => 'Construire des pages propres, comprendre la cascade, manipuler la page avec JavaScript. Premier site en ligne dès ce palier.'],
                ['titre' => 'Le serveur : PHP et MySQL', 'texte' => 'Formulaires, sessions, base de données, sécurité de base : validation des entrées, mots de passe, injections. Le palier qui sépare une vitrine d\'une application.'],
                ['titre' => 'Les outils du métier', 'texte' => 'Git et le versionnage, l\'hébergement, les noms de domaine, la mise en production. Ce qu\'on n\'apprend nulle part et qui bloque tout le monde.'],
                ['titre' => 'Développer avec l\'IA', 'texte' => 'Utiliser les assistants pour aller plus vite sans s\'y dissoudre : générer, relire, corriger. Le pont vers la formation vibecoding pour qui veut aller plus loin.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Public',
            'titre'     => 'À qui la formation s\'adresse.',
            'items'     => [
                'Étudiants et jeunes diplômés qui veulent un métier technique avec des preuves : un portfolio de projets en ligne vaut plus qu\'une attestation.',
                'Personnes en reconversion, y compris sans bagage scientifique : la sélection naturelle du parcours est la régularité, pas les mathématiques.',
                'Professionnels en poste qui veulent comprendre ce que font leurs prestataires et reprendre la main sur leur site.',
                'Autodidactes bloqués au milieu du gué, qui ont suivi des tutoriels sans jamais réussir à finir un projet complet.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Le développement ne s\'apprend pas en deux jours : le parcours complet s\'étale sur plusieurs semaines, en sessions régulières avec du travail personnel entre chacune. Des modules courts existent pour un besoin ciblé, comme le palier outils du métier seul, qui se donne en deux jours.',
                'Sessions en visioconférence ou sur place, en groupe réduit. Le cadrage gratuit sert à évaluer votre point de départ et à composer des groupes de niveau homogène : c\'est la condition pour que personne ne s\'ennuie ni ne coule. Devis détaillé après cadrage.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Formations et services liés.',
            'items'     => [
                ['url' => '/formation-vibecoding', 'titre' => 'Formation vibecoding', 'texte' => 'Le prolongement naturel : développer avec l\'IA une fois les fondations posées, ou en parallèle pour les profils pressés.'],
                ['url' => '/services/formation-en-programmation', 'titre' => 'Le service formation', 'texte' => 'La fiche service correspondante, avec la demande de devis directe.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'IA, vibecoding, Odoo, automatisation : le catalogue complet.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il un bagage en mathématiques ?', 'r' => 'Non. Le développement web demande de la logique et de la régularité, pas des mathématiques avancées. Les blocages viennent presque toujours de l\'irrégularité du travail, jamais du niveau scolaire.'],
        ['q' => 'Pourquoi PHP plutôt qu\'un framework moderne ?', 'r' => 'Parce que c\'est la stack du web réel d\'ici : celle des entreprises, des hébergements abordables et de l\'essentiel des sites en production. Les frameworks s\'apprennent ensuite d\'autant mieux qu\'on comprend ce qu\'ils automatisent.'],
        ['q' => 'L\'IA ne rend-elle pas cette formation inutile ?', 'r' => 'Elle rend inutile l\'apprentissage de la syntaxe par cœur, pas celui du métier. Relire du code généré, repérer une faille, structurer un projet : ces compétences valent plus cher depuis que tout le monde peut générer du code sans les avoir.'],
        ['q' => 'Y a-t-il un diplôme à la clé ?', 'r' => 'Une attestation de formation, et surtout des projets en ligne qui constituent un début de portfolio. Sur ce marché, c\'est ce que les recruteurs et les clients regardent en premier.'],
        ['q' => 'Peut-on suivre en travaillant à côté ?', 'r' => 'Oui, le rythme se cale au cadrage : sessions en soirée ou le samedi, avec un volume de travail personnel annoncé honnêtement à l\'avance. Ce qui ne se négocie pas, c\'est la régularité.'],
    ],
];
