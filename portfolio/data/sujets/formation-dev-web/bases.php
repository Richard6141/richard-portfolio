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
            'type'       => 'prose',
            'etiquette'  => 'Débouchés',
            'titre'      => 'Ce que le marché attend réellement d\'un développeur junior.',
            'paragraphes' => [
                'Le marché local du développement a une particularité que les formations généralistes ignorent : les clients sont des PME, des commerces et des institutions qui veulent des choses concrètes, livrées, qui marchent. Personne ne demande la dernière bibliothèque à la mode ; on demande un site qui charge vite sur une connexion moyenne, un formulaire qui enregistre sans perdre de données, un back-office qu\'une secrétaire peut utiliser. Le parcours est calibré sur cette demande réelle, pas sur les offres d\'emploi de la Silicon Valley.',
                'C\'est aussi pour cela que le parcours impose la mise en ligne dès le premier palier. Un développeur qui n\'a jamais déployé, configuré un nom de domaine ou diagnostiqué un site en panne n\'est pas employable, quelle que soit la qualité de son code local. La différence entre celui qui trouve des clients et celui qui cherche encore tient rarement à la connaissance des langages : elle tient à la capacité de livrer de bout en bout, preuves à l\'appui.',
                'Le portfolio construit pendant le parcours vise exactement cela : trois projets en ligne, avec leur code consultable sur un dépôt Git propre, valent tous les certificats. C\'est ce que je regarde moi-même quand un junior me propose ses services, et c\'est ce que regardent les plateformes de freelance comme les employeurs sérieux.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Blocages',
            'titre'     => 'Pourquoi les autodidactes se bloquent, et comment le parcours l\'évite.',
            'items'     => [
                ['titre' => 'L\'enfer des tutoriels', 'texte' => 'Suivre des tutoriels en boucle donne l\'illusion d\'apprendre : tout semble clair tant qu\'on recopie. Le blocage survient au premier projet sans guide. Le parcours inverse la proportion : peu de démonstration, beaucoup de construction, l\'aide arrivant sur VOTRE problème.'],
                ['titre' => 'Apprendre dans le désordre', 'texte' => 'Attaquer un framework avant de comprendre le langage, ou le JavaScript avancé avant le HTML : chaque trou de fondation se paie plus tard avec intérêts. Les paliers du parcours existent précisément pour interdire ce désordre.'],
                ['titre' => 'Coder sans lire les erreurs', 'texte' => 'Le réflexe débutant devant un message d\'erreur est la panique ou le copier-coller aveugle. Lire l\'erreur, la comprendre, remonter à la cause : c\'est LA compétence transversale, travaillée à chaque session parce qu\'elle ne s\'acquiert que par répétition.'],
                ['titre' => 'Rester seul', 'texte' => 'L\'autodidacte bloqué n\'a personne pour dire « ton erreur est ligne 12 » et surtout « voilà comment j\'aurais cherché ». La revue de code hebdomadaire du parcours sert à transmettre cette façon de chercher, pas seulement la correction.'],
                ['titre' => 'Ne jamais finir', 'texte' => 'Dix projets commencés, zéro terminé : le mal le plus répandu. Le parcours impose de finir, précisément parce que les vingt derniers pour cent, formulaires validés, cas d\'erreur, mise en ligne, contiennent l\'essentiel du métier.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que chaque participant construit pendant le parcours.',
            'items'     => [
                'Un site complet mis en ligne dès le premier palier, sur un vrai hébergement avec un vrai nom de domaine.',
                'Une application avec base de données au second palier : formulaires, sessions, espace d\'administration.',
                'Un dépôt Git propre par projet, avec un historique de commits qui raconte le travail.',
                'Un projet final choisi par le participant, idéalement relié à un besoin réel de son entourage ou de son employeur.',
                'Une attestation de formation, et un portfolio de projets consultables qui constitue le vrai passeport vers le marché.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Comparaison',
            'titre'      => 'Pourquoi pas une plateforme en ligne gratuite ?',
            'paragraphes' => [
                'La question est légitime : les cours en ligne existent, souvent gratuits, parfois excellents. Si vous avez la discipline de fer qu\'ils exigent, prenez-les, sincèrement. Mais les chiffres publiés par ces plateformes elles-mêmes racontent l\'autre moitié de l\'histoire : l\'immense majorité des inscrits n\'atteint jamais la fin. Non par manque d\'intelligence, mais parce qu\'apprendre seul, le soir, sans personne pour débloquer une erreur incompréhensible ni personne à qui rendre des comptes, use la motivation la plus solide.',
                'Ce que cette formation ajoute au contenu, qui est largement disponible partout, c\'est la structure qui fait finir : un rythme imposé, un formateur qui débloque en minutes ce qui coûterait des soirées entières, des projets calibrés sur le marché d\'ici plutôt que sur des exemples américains, et un groupe dont l\'émulation porte dans les semaines creuses. Le contenu s\'achète partout ; la traversée complète, beaucoup plus rarement.',
                'Et il y a le contexte local, absent des plateformes : héberger à petit prix, encaisser par Mobile Money, servir des utilisateurs sur téléphone d\'entrée de gamme avec une connexion instable, facturer un client béninois. Ces savoirs ne figurent dans aucun cours international, et ils font la différence entre un diplômé de plateforme et quelqu\'un qui livre ici.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Débouchés',
            'titre'     => 'Les portes que le parcours ouvre.',
            'items'     => [
                ['titre' => 'Freelance local', 'texte' => 'Sites et petits outils pour les commerces et PME de sa ville. Le marché le plus accessible en sortie de parcours : la demande existe, le portfolio en ligne sert de preuve, et les premiers clients viennent souvent de l\'entourage.'],
                ['titre' => 'Salarié en entreprise', 'texte' => 'Les entreprises d\'ici recrutent des profils capables d\'entretenir leur site, leurs outils internes et leurs intégrations. La stack enseignée est exactement celle qu\'on trouve dans leurs systèmes.'],
                ['titre' => 'Prestataire à distance', 'texte' => 'Agences et clients francophones d\'Europe et du Canada externalisent des développements. La marche est plus haute : elle exige la rigueur de livraison et le Git propre que le parcours impose précisément.'],
                ['titre' => 'Créateur de son propre outil', 'texte' => 'Beaucoup de participants viennent avec une idée : un service pour leur secteur, une plateforme pour leur communauté. Le parcours leur donne de quoi construire la première version eux-mêmes, au lieu de chercher un budget de développement.'],
                ['titre' => 'Poursuite vers les frameworks', 'texte' => 'Pour ceux qui visent les stacks modernes, le socle rend l\'apprentissage de Laravel ou de React rapide et solide : on comprend ce que le framework automatise au lieu de le réciter.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Rythme',
            'titre'      => 'Une semaine type dans le parcours.',
            'paragraphes' => [
                'Le parcours vit sur un cycle hebdomadaire stable, parce que la régularité est la seule variable qui prédit la réussite. La session de la semaine, en soirée ou le samedi selon le groupe, ouvre une capacité nouvelle : elle commence par la revue des travaux de la semaine passée, continue par une démonstration courte de la notion du jour, et se termine par le lancement de l\'exercice suivant, entamé sur place pour que personne ne reparte devant une page blanche.',
                'Entre deux sessions, le travail personnel représente quelques heures, annoncées honnêtement au cadrage : c\'est là que l\'apprentissage se fait réellement, la session ne servant qu\'à ouvrir et à débloquer. Le groupe reste relié toute la semaine : une question postée avec son message d\'erreur reçoit une piste, rarement la solution toute faite, parce qu\'apprendre à chercher fait partie du programme. Les blocages de plus de vingt-quatre heures remontent en visioconférence courte, pour qu\'aucune semaine ne soit perdue.',
                'Toutes les trois ou quatre semaines, un palier se clôt par la mise en ligne d\'un projet, et ce rendez-vous est non négociable : on présente ce qui marche, on montre son code, on encaisse la revue. Ces jalons publics font ce que la volonté seule ne fait pas : ils créent l\'échéance qui fait finir. Les participants qui décrochent d\'une semaine reprennent sans drame ; ceux qui décrochent d\'un palier ont une conversation franche avec moi sur le rythme, et le parcours s\'ajuste ou se suspend proprement plutôt que de s\'éterniser en inscription fantôme.',
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
        ['q' => 'Quel matériel faut-il ?', 'r' => 'Un ordinateur portable correct, même modeste : tout ce qu\'on utilise fonctionne sur une machine d\'occasion à petit budget. La connexion compte davantage ; les sessions sont conçues pour économiser la bande passante, et les projets s\'hébergent sur des offres à quelques milliers de FCFA par an.'],
        ['q' => 'En combien de temps devient-on employable ?', 'r' => 'Personne ne peut le promettre honnêtement : cela dépend de la régularité et du temps investi entre les sessions. Ce que le parcours garantit, c\'est le chemin : des projets finis, en ligne, avec un code consultable. Le rythme auquel vous le parcourez vous appartient.'],
        ['q' => 'Enseignez-vous WordPress ?', 'r' => 'Le parcours enseigne le socle, qui rend ensuite WordPress facile à prendre en main et surtout à dépasser : comprendre PHP et MySQL, c\'est comprendre ce que WordPress fait sous le capot. Un module d\'orientation WordPress peut s\'ajouter pour ceux qui visent ce marché spécifique.'],
        ['q' => 'Puis-je payer le parcours en plusieurs fois ?', 'r' => 'Oui, le paiement se fractionne par palier : chaque étape se règle avant de commencer, et vous pouvez vous arrêter à la fin de n\'importe laquelle avec des acquis complets. Le détail se fixe au devis, après le cadrage gratuit.'],
    ],
];
