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
            'type'       => 'prose',
            'etiquette'  => 'Méthode',
            'titre'      => 'Comment une session se prépare et se déroule.',
            'paragraphes' => [
                'Tout commence par le cadrage, gratuit : deux échanges pour identifier les deux ou trois tâches qui coûtent le plus de temps à vos équipes. Pas dix, deux ou trois. Une formation qui promet de transformer tous les usages en une session n\'en transforme aucun ; celle qui installe deux gains solides crée l\'appétit pour la suite. Je demande ensuite des exemples réels de ces tâches : les messages types, les rapports, les tableaux. C\'est sur eux que les exercices se construisent.',
                'Le jour venu, chaque module suit le même rythme : une démonstration courte sur votre cas, puis un long temps de pratique où chacun travaille sur son poste pendant que je circule. Les consignes qui fonctionnent sont notées au fur et à mesure dans un document partagé qui devient votre bibliothèque interne. En fin de session, chaque participant exécute sa tâche cible de bout en bout, sans aide : c\'est le critère de réussite, pas un questionnaire de satisfaction.',
                'Après la session, la bibliothèque de consignes reste chez vous et continue de vivre : c\'est elle qui fait la différence entre une formation qui s\'évapore et une pratique qui s\'installe. Les entreprises qui choisissent l\'accompagnement mensuel me retrouvent une demi-journée par mois pour mesurer ce qui a servi, corriger ce qui accroche et étendre à de nouvelles tâches. Trois mois suffisent en général pour que l\'usage tienne debout tout seul.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Idées reçues',
            'titre'     => 'Ce qu\'on croit sur l\'IA en entreprise, et ce qui est vrai.',
            'items'     => [
                ['titre' => '« Nos équipes ne sont pas assez techniques »', 'texte' => 'Les assistants se pilotent en français, par écrit. La compétence décisive est de savoir décrire précisément ce qu\'on veut, et elle s\'apprend en quelques heures. Les meilleurs participants sont souvent ceux qui connaissent le mieux leur métier, pas les plus technophiles.'],
                ['titre' => '« On a essayé, ça ne marche pas pour notre métier »', 'texte' => 'Dans presque tous les cas, l\'essai a porté sur une question générale posée sans contexte. Les mêmes outils, alimentés avec vos documents et une consigne construite, produisent des résultats sans rapport. C\'est toute la différence entre essayer et être formé.'],
                ['titre' => '« L\'IA se trompe, donc elle est inutilisable »', 'texte' => 'Elle se trompe, et elle se trompe avec assurance : c\'est un fait, pas une objection. La réponse est un circuit de vérification adapté à chaque usage, enseigné pendant la formation. Un brouillon faux à dix pour cent, corrigé en deux minutes, bat toujours une page blanche.'],
                ['titre' => '« C\'est un effet de mode, attendons »', 'texte' => 'Les gains mesurés sur la rédaction, la synthèse et la structuration de données sont déjà là, chez vos concurrents peut-être. Attendre a un coût précis : les heures que vos équipes passent encore sur des tâches que d\'autres ont ramenées à quelques minutes.'],
                ['titre' => '« Il faut l\'interdire pour protéger nos données »', 'texte' => 'Interdire sans former garantit le pire des deux mondes : l\'usage continue en cachette, sur les téléphones personnels, sans aucune règle. La session dirigeants existe pour cadrer ce qui est autorisé, avec quelles données, et par écrit.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que votre entreprise garde après la session.',
            'items'     => [
                'La bibliothèque de consignes construite sur vos cas, dans un document partagé qui appartient à l\'entreprise, pas au formateur.',
                'Pour chaque tâche travaillée, un mode opératoire court : quel outil, quelle consigne, quelle vérification avant envoi.',
                'La charte d\'usage issue de la session dirigeants quand elle a eu lieu : données autorisées, données interdites, qui valide quoi.',
                'Les supports de formation, et une attestation nominative par participant.',
                'Un canal direct pendant le mois qui suit pour les questions d\'application, sans facturation supplémentaire.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Secteurs',
            'titre'     => 'Ce que la formation change, secteur par secteur.',
            'items'     => [
                ['titre' => 'Commerce et distribution', 'texte' => 'Fiches produits normalisées à partir de photos et de notes, réponses aux clients en français comme en anglais, relances de paiement qui gardent le ton commercial. Le gain le plus visible : le catalogue qui se met à jour en heures au lieu de semaines.'],
                ['titre' => 'Import-export et logistique', 'texte' => 'Synthèse de dossiers documentaires volumineux, extraction des informations clés d\'un connaissement ou d\'une facture, correspondance bilingue avec les fournisseurs. Un secteur où la précision prime : le circuit de vérification y occupe une place centrale.'],
                ['titre' => 'Cabinets et services professionnels', 'texte' => 'Comptes rendus structurés à partir de notes de réunion, premiers jets de courriers et de rapports périodiques, préparation de présentations. La confidentialité des dossiers clients y est traitée en module à part entière.'],
                ['titre' => 'Administration et para-public', 'texte' => 'Rédaction normée, notes de synthèse, publipostage intelligent. Les structures à circuits de validation stricts apprécient le cadrage écrit des usages : qui peut soumettre quoi, qui valide, qui signe.'],
                ['titre' => 'Éducation et santé', 'texte' => 'Supports de cours et d\'évaluation d\'un côté, courriers et comptes rendus non médicaux de l\'autre. Deux secteurs où la règle des données sensibles est la plus stricte, et où la formation commence précisément par elle.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Mesure',
            'titre'      => 'Ce qu\'on mesure trois mois après.',
            'paragraphes' => [
                'Une formation qui ne se mesure pas est une dépense ; une formation mesurée est un investissement dont on connaît le rendement. Le dispositif de mesure se pose dès le cadrage, et il est volontairement simple : pour chacune des deux ou trois tâches cibles, on note avant la session le temps qu\'elle prend et qui la fait. Trois mois après, on repose les mêmes questions. La demi-heure de compte rendu hebdomadaire tombée à cinq minutes, la journée de fiches produits ramenée à une heure : voilà les chiffres qui justifient, ou non, d\'étendre la démarche.',
                'On mesure aussi ce qui ne se chiffre pas directement mais se constate : les relances qui partent réellement au lieu d\'attendre le courage du vendredi, les réponses aux clients étrangers qui ne restent plus deux jours en attente de la personne à l\'aise en anglais, les rapports qui arrivent à l\'heure. Ces gains de régularité valent souvent plus que les gains de vitesse, parce qu\'ils touchent la relation client.',
                'Enfin, un indicateur honnête à surveiller : le taux d\'abandon. Si trois mois après, plus personne n\'utilise ce qui a été appris, la formation a échoué, quelle que soit la satisfaction du jour même. C\'est précisément contre ce risque que l\'accompagnement mensuel existe, et c\'est pour cela que je le recommande aux équipes qui partent de loin plutôt que de vendre une session unique de plus.',
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
        ['q' => 'Combien de personnes par session ?', 'r' => 'Jusqu\'à douze pour un atelier découverte, dix pour une formation complète. Au-delà, on ne peut plus travailler sur les documents de chacun, et c\'est justement ce qui fait la valeur de la session.'],
        ['q' => 'Faut-il équiper les participants avant la session ?', 'r' => 'Un ordinateur ou un téléphone par participant et une connexion correcte suffisent. Les comptes se créent en début de session sur les paliers gratuits ; aucun achat n\'est nécessaire avant d\'avoir mesuré ce qui sert.'],
        ['q' => 'Formez-vous des équipes non francophones ?', 'r' => 'Les sessions se donnent en français, et les usages bilingues sont couverts : répondre en anglais à un client étranger, traduire un document en gardant le vocabulaire du métier. C\'est même l\'un des gains les plus demandés.'],
        ['q' => 'Que devient la formation quand les outils changent ?', 'r' => 'Les assistants évoluent vite, la méthode reste : décrire précisément, donner le contexte, vérifier la sortie. Les consignes construites pendant la session survivent aux changements de version, et c\'est pour cela qu\'on investit dans la méthode plutôt que dans les boutons.'],
    ],
];
