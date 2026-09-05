<?php
// Page generique « Formation IA en entreprise », sans ville. Redigee le
// 05/09/2026 pour servir de porte d'entree du catalogue : les 21 pages
// villes ciblent « formation ia <ville> », celle-ci vise la requete nue.
declare(strict_types=1);

return [
    'slug'       => 'formation-ia-entreprise',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation IA en entreprise',
    'accroche'   => 'Former vos équipes à un usage professionnel de l\'IA, sur vos propres documents, pas sur des exercices de démonstration.',
    'intro'      => 'La plupart des équipes ont déjà essayé ChatGPT, puis sont retournées à leurs habitudes la semaine suivante. Le problème n\'est presque jamais l\'outil : c\'est l\'absence de méthode et de cadre. Cette formation part de deux ou trois tâches que vos équipes répètent chaque semaine, et les transforme en gains mesurables. Vous repartez avec des consignes réutilisables qui fonctionnent sur vos documents réels.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le principe',
            'titre'      => 'Une formation qui part de votre travail réel.',
            'paragraphes' => [
                'Une démonstration impressionnante ne change rien au quotidien d\'une équipe. Ce qui change quelque chose, c\'est de repartir avec un résultat déjà fonctionnel : le courrier type qui se rédige en deux minutes, le compte rendu qui se structure tout seul, la réponse commerciale que le vendeur valide d\'un clic au lieu de l\'écrire.',
                'C\'est pourquoi chaque session se prépare avec vos documents : les messages que vous recevez, les rapports que vous produisez, les tableaux que vous ressaisissez. Aucun prérequis technique n\'est demandé. Si quelqu\'un sait écrire un message, il peut suivre.',
                'La formation couvre aussi ce qu\'on ne délègue jamais à une machine : la vérification, la responsabilité de ce qui est envoyé, les données qui ne doivent pas sortir de l\'entreprise. Une équipe qui croit que l\'IA remplace le jugement métier produit vite du travail médiocre en grande quantité.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre formats, selon votre point de départ.',
            'items'     => [
                ['titre' => 'Atelier découverte', 'texte' => 'Une demi-journée, jusqu\'à douze personnes. Prise en main des assistants, premiers résultats sur vos documents, et ce qu\'il ne faut jamais leur confier.'],
                ['titre' => 'Formation complète', 'texte' => 'Deux jours, jusqu\'à dix personnes. Rédaction de consignes, traitement de vos cas réels, automatisations simples si le format s\'y prête.'],
                ['titre' => 'Accompagnement mensuel', 'texte' => 'Une demi-journée par mois pendant trois mois. Le format qui ancre les habitudes : on mesure ce qui a été utilisé, on corrige, on étend.'],
                ['titre' => 'Session dirigeants', 'texte' => 'Deux heures. Ce qu\'on autorise, ce qu\'on interdit, quelles données ne sortent jamais, et comment cadrer l\'usage avant qu\'il ne s\'installe tout seul, mal.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Cas traités',
            'titre'     => 'Ce que les équipes apprennent à produire.',
            'items'     => [
                'Rédiger et répondre : courriers, devis commentés, réponses clients en français comme en anglais, relances de paiement fermes mais correctes.',
                'Synthétiser : compte rendu de réunion à partir de notes brutes, résumé de dossiers volumineux, préparation de rapports périodiques.',
                'Structurer : transformer des notes manuscrites ou des messages WhatsApp en tableaux exploitables, normaliser des fiches produits.',
                'Cadrer : vérifier ce que l\'IA affirme, garder la trace de ce qui a été généré et validé, protéger les données sensibles.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Tarifs',
            'titre'      => 'Tarifs indicatifs.',
            'paragraphes' => [
                'Atelier découverte à partir de 150 000 FCFA. Formation complète de deux jours à partir de 450 000 FCFA. Accompagnement mensuel à partir de 350 000 FCFA par mois. Session dirigeants à partir de 100 000 FCFA. Les tarifs hors Afrique sont établis après cadrage.',
                'Le cadrage est gratuit et sans engagement : deux échanges pour identifier les tâches à travailler et composer les groupes. Le devis final est détaillé poste par poste.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Par ville',
            'titre'     => 'La formation près de chez vous.',
            'items'     => [
                ['url' => '/formation-ia-entreprise-cotonou', 'titre' => 'Cotonou', 'texte' => 'Import-export, commerce et services : les usages qui reviennent dans les entreprises cotonoises.'],
                ['url' => '/formation-ia-entreprise-abomey-calavi', 'titre' => 'Abomey-Calavi', 'texte' => 'PME et commerces de la ville la plus peuplée du Bénin, avec intervention sur place.'],
                ['url' => '/formation-ia-entreprise-porto-novo', 'titre' => 'Porto-Novo', 'texte' => 'Administrations, cabinets et structures para-publiques : des usages cadrés et documentés.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'IA, vibecoding, Odoo, automatisation, web : le catalogue complet avec les formats.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il des connaissances techniques ?', 'r' => 'Aucune. Les formations s\'adressent à des équipes métier : commerciaux, secrétariat, comptabilité, direction. Si quelqu\'un sait écrire un message, il peut suivre.'],
        ['q' => 'Sur quels outils travaille-t-on ?', 'r' => 'ChatGPT, Claude et Gemini pour l\'essentiel, avec leurs versions gratuites quand elles suffisent. Le choix des abonnements payants se décide après la formation, sur la base de ce qui a réellement servi.'],
        ['q' => 'Nos données sont sensibles. Est-ce compatible ?', 'r' => 'Oui, et c\'est un module à part entière : ce qui peut être soumis à un assistant, ce qui ne le peut pas, et comment anonymiser quand le doute existe. Aucune donnée nominative ne sort pendant la formation.'],
        ['q' => 'La formation se donne-t-elle à distance ?', 'r' => 'Oui, en visioconférence, en groupe réduit, sur vos propres documents. Sur place également dans les villes où j\'interviens, de Cotonou à Parakou.'],
        ['q' => 'L\'IA va-t-elle remplacer nos employés ?', 'r' => 'Elle remplace des tâches, pas des postes : la ressaisie, le premier jet, le tri. Le jugement métier, la relation client et la responsabilité de ce qui est envoyé restent humains, et la formation insiste précisément là-dessus.'],
        ['q' => 'Et après la formation ?', 'r' => 'Vous gardez les consignes construites pendant la session, réutilisables telles quelles. L\'accompagnement mensuel prolonge le travail pour les équipes qui veulent ancrer les habitudes et étendre les usages.'],
    ],
];
