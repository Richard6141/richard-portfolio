<?php
// Formation outils numeriques et bureautique en entreprise. 05/09/2026.
// Couvre le « tout ce qui est du numerique » annonce par Richard, avec un
// perimetre concret : tableur, messagerie, stockage partage, securite.
declare(strict_types=1);

return [
    'slug'       => 'formation-outils-numeriques',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation aux outils numériques en entreprise',
    'accroche'   => 'Tableur, messagerie, fichiers partagés, mots de passe : les gestes de base qui font la différence entre une équipe outillée et une équipe qui subit son informatique.',
    'intro'      => 'Avant l\'IA et avant les ERP, il y a un socle : savoir tenir un tableur juste, écrire un mail professionnel, retrouver un fichier, ne pas perdre trois ans de données sur une clé USB volée. Dans beaucoup d\'entreprises, ce socle manque, et tout ce qu\'on pose dessus vacille. Cette formation le construit, sans jargon et sans mépris : on part de ce que les équipes font déjà, et on remplace les gestes fragiles par des gestes solides.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Le coût invisible des mauvais gestes numériques.',
            'paragraphes' => [
                'Un fichier « Factures_final_vrai2.xlsx » envoyé par WhatsApp, modifié par trois personnes, dont personne ne sait quelle version fait foi : cette scène coûte des heures chaque semaine et personne ne la chiffre. Même chose pour le mot de passe collé sous le clavier, la boîte mail à douze mille non-lus, ou le classeur où une formule écrasée fausse les totaux depuis des mois.',
                'La formation traite ces situations une par une, telles qu\'elles existent chez vous. Ce n\'est pas un cours d\'informatique : c\'est une remise en état des gestes quotidiens, mesurable à la fin par des choses simples : une arborescence de fichiers que tout le monde respecte, un classeur protégé qui tombe juste, des mots de passe gérés proprement.',
                'Elle sert aussi de marchepied : une équipe à l\'aise sur ce socle absorbe ensuite une formation IA ou un ERP deux fois plus vite. C\'est souvent la première marche que je recommande aux entreprises qui me demandent directement la dernière.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre modules, à composer selon vos besoins.',
            'items'     => [
                ['titre' => 'Le tableur qui tombe juste', 'texte' => 'Formules de base, tri et filtres, mise en forme qui aide au lieu de décorer, protection des cellules, et les erreurs classiques qui faussent les totaux.'],
                ['titre' => 'La messagerie professionnelle', 'texte' => 'Écrire des mails qui obtiennent des réponses, gérer sa boîte sans s\'y noyer, pièces jointes et transferts, et ce qui distingue un mail pro d\'un message WhatsApp.'],
                ['titre' => 'Fichiers et travail partagé', 'texte' => 'Une arborescence commune, des noms de fichiers cohérents, le stockage en ligne avec droits d\'accès, et la fin des versions contradictoires.'],
                ['titre' => 'Sécurité du quotidien', 'texte' => 'Mots de passe et gestionnaire, sauvegardes qui existent vraiment, réflexes face aux messages frauduleux, et ce qu\'on fait le jour où un téléphone disparaît.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Public',
            'titre'     => 'À qui la formation s\'adresse.',
            'items'     => [
                'Les équipes administratives et commerciales dont l\'outil de travail principal est le tableur et la messagerie.',
                'Les entreprises qui préparent un ERP ou une formation IA et veulent d\'abord consolider le socle.',
                'Les structures qui viennent de perdre des données ou de subir une fraude, et veulent que ça ne se reproduise pas.',
                'Les dirigeants qui constatent que chaque document demande trois appels pour être retrouvé.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Chaque module tient en une demi-journée ; le socle complet en deux jours. Les groupes restent réduits et se composent par niveau réel, évalué au cadrage, pas par intitulé de poste. Sessions sur place de préférence pour ce public, en visioconférence quand l\'équipe y est à l\'aise.',
                'Le cadrage est gratuit : on liste les situations qui coûtent le plus cher chez vous, et le programme se compose autour. Devis détaillé poste par poste.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Les marches suivantes.',
            'items'     => [
                ['url' => '/formation-ia-entreprise', 'titre' => 'Formation IA en entreprise', 'texte' => 'La marche d\'après : rédiger, synthétiser et structurer avec les assistants, une fois le socle en place.'],
                ['url' => '/digitalisation-entreprise-cotonou', 'titre' => 'Digitalisation d\'entreprise', 'texte' => 'Quand le besoin dépasse la formation : outiller les processus eux-mêmes.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'Le catalogue complet, avec les formats et tarifs indicatifs.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Nos équipes ont des niveaux très différents. Comment gérez-vous ça ?', 'r' => 'Par une évaluation rapide au cadrage, puis des groupes de niveau réel. Mettre ensemble celui qui découvre le clic droit et celle qui fait des tableaux croisés garantit de perdre les deux.'],
        ['q' => 'Travaillez-vous sur Excel ou sur Google Sheets ?', 'r' => 'Sur ce que vous utilisez. Les gestes enseignés valent pour les deux, et le module fichiers partagés couvre aussi bien Google Drive que OneDrive.'],
        ['q' => 'Est-ce vraiment utile à l\'heure de l\'IA ?', 'r' => 'C\'est le prérequis. Une équipe qui perd ses fichiers et se fait piéger par un faux mail ne tirera rien d\'un assistant IA. Le socle d\'abord, l\'accélération ensuite.'],
        ['q' => 'Combien de personnes par session ?', 'r' => 'Une dizaine au maximum par module, moins si les niveaux l\'exigent. La formation vaut par la pratique sur poste, pas par la projection de diapositives.'],
        ['q' => 'Peut-on ne prendre qu\'un seul module ?', 'r' => 'Oui, chaque module est autonome. Le module sécurité est celui qu\'on choisit le plus souvent seul, généralement après un incident.'],
    ],
];
