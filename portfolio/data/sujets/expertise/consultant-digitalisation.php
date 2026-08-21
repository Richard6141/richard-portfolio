<?php
// Second pilier. « Consultant » et « expert » sont proches: pour ne pas se
// cannibaliser, cette page ne parle PAS du domaine (c'est le role du pilier
// expert-digitalisation-entreprise) mais de la MISSION DE CONSEIL: audit,
// livrables, tarification au jour, et le cas ou il ne faut PAS de consultant.
// Intention differente: ici on cherche un avis, pas une execution.
declare(strict_types=1);

return [
    'slug'       => 'consultant-digitalisation',
    'ville'      => 'Afrique francophone',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => "Consultant en digitalisation",
    'accroche'   => "Un diagnostic, une feuille de route chiffrée, et la liberté de la faire exécuter par qui vous voulez.",
    'intro'      => "Une mission de conseil ne se confond pas avec une prestation de développement. Vous faites appel à un consultant quand vous ne savez pas encore quoi construire, dans quel ordre, ni pour quel budget. Le livrable n'est pas un logiciel: c'est une décision documentée. Je pratique les deux métiers, ce qui crée un conflit d'intérêt évident, et je préfère l'annoncer d'emblée: mes recommandations vous appartiennent, et rien ne vous oblige à me confier l'exécution. Plusieurs de mes audits ont été réalisés par d'autres prestataires, parfois sur ma recommandation.",

    'sections' => [
        [
            'type' => 'definitions', 'etiquette' => 'Le besoin',
            'titre' => "Quand un consultant est utile, et quand il ne l'est pas.",
            'items' => [
                ['titre' => "Vous avez plusieurs devis et aucun moyen de les comparer", 'texte' => "C'est le cas le plus fréquent. Trois prestataires proposent trois périmètres différents à trois prix incomparables, et personne en interne ne peut arbitrer. Une mission courte suffit à traduire ces devis dans une grille commune et à identifier ce qui manque dans chacun."],
                ['titre' => "Un projet précédent a échoué et vous ne savez pas pourquoi", 'texte' => "Un outil acheté et jamais adopté, une refonte qui n'a rien changé. Comprendre la cause réelle avant de réinvestir évite de reproduire la même erreur avec un budget plus gros. Dans la majorité des cas que j'ai vus, la cause n'était pas technique."],
                ['titre' => "Vous devez arbitrer entre plusieurs chantiers", 'texte' => "Site, ERP, automatisation, application mobile: tout paraît prioritaire et le budget ne couvre qu'une partie. Le rôle du consultant est de chiffrer le gain attendu de chacun pour que l'arbitrage repose sur des ordres de grandeur plutôt que sur des convictions."],
                ['titre' => "Quand vous n'avez PAS besoin de conseil", 'texte' => "Si vous savez déjà précisément ce que vous voulez construire, une mission de conseil vous fera perdre du temps et de l'argent. Passez directement à la réalisation. Un consultant qui accepte une mission alors que la décision est déjà prise vous vend de la réassurance, pas de la valeur."],
            ],
        ],
        [
            'type' => 'definitions', 'etiquette' => 'Les livrables',
            'titre' => "Ce que vous recevez concrètement.",
            'items' => [
                ['titre' => "Une cartographie de vos flux", 'texte' => "Le parcours réel de l'information dans votre entreprise, tel qu'il se pratique et non tel qu'il est censé se pratiquer. Chaque point de rupture est localisé, avec une estimation du temps qu'il coûte chaque semaine. C'est souvent le document qui provoque le plus de discussions en interne."],
                ['titre' => "Une feuille de route par chantiers", 'texte' => "Trois à six chantiers, ordonnés par rapport gain sur effort, chacun avec un périmètre, une fourchette budgétaire et une durée. Vous pouvez en exécuter un, trois ou aucun: l'ordre est justifié, pas imposé."],
                ['titre' => "Un cahier des charges exploitable", 'texte' => "Suffisamment précis pour être envoyé à plusieurs prestataires et obtenir des devis comparables. C'est ce qui vous rend autonome dans la consultation, y compris face à moi."],
                ['titre' => "Une restitution orale", 'texte' => "Une séance avec vos décideurs pour présenter les constats et répondre aux objections. Un rapport qu'on lit seul produit rarement une décision; un rapport qu'on discute, souvent."],
            ],
        ],
        [
            'type' => 'etapes', 'etiquette' => 'Déroulé',
            'titre' => "Comment se déroule une mission de conseil.",
            'items' => [
                ['titre' => "Entretien de cadrage, gratuit", 'texte' => "Une heure pour comprendre votre situation et déterminer si une mission de conseil est justifiée. Si elle ne l'est pas, je vous le dis et nous en restons là. Cet entretien ne vous engage à rien."],
                ['titre' => "Observation sur le terrain", 'texte' => "Entretiens avec les personnes qui saisissent réellement, pas seulement avec la direction. C'est là que l'écart entre la procédure officielle et la pratique apparaît, et cet écart est presque toujours le vrai sujet."],
                ['titre' => "Analyse et chiffrage", 'texte' => "Estimation du temps perdu par chantier, du gain attendu et du coût de mise en oeuvre. Les chiffres sont des ordres de grandeur assumés comme tels, jamais présentés comme des certitudes."],
                ['titre' => "Restitution et remise des livrables", 'texte' => "Présentation aux décideurs, remise du rapport et du cahier des charges. À partir de là, vous êtes libre: exécution en interne, par un autre prestataire, ou par moi."],
            ],
        ],
        [
            'type' => 'prose', 'etiquette' => 'Tarification',
            'titre' => "Combien coûte une mission de conseil.",
            'paragraphes' => [
                "Une mission courte, adaptée à une PME de moins de vingt personnes, se situe généralement entre 250 000 et 600 000 FCFA selon le nombre de services à observer. Elle se déroule sur deux à trois semaines et produit les quatre livrables décrits plus haut.",
                "Pour une structure plus grande ou multi-sites, comptez au-delà, avec un chiffrage établi après l'entretien de cadrage. Je facture à la mission et non au jour: vous connaissez le montant total avant de commencer, et un dépassement de mon côté ne vous est pas répercuté.",
                "Un point de transparence sur lequel je ne transige pas: si vous me confiez ensuite l'exécution d'un chantier issu de la feuille de route, le montant de la mission de conseil est déduit du premier devis. Cela retire l'incitation à recommander des chantiers dont je serais le bénéficiaire.",
            ],
        ],
        [
            'type' => 'liste', 'etiquette' => 'Conflit d\'intérêt',
            'titre' => "Ce que vous devez savoir avant de me choisir.",
            'items' => [
                "Je suis à la fois consultant et prestataire d'exécution. C'est un conflit d'intérêt réel, pas une figure de style: un consultant qui vend aussi la réalisation a intérêt à recommander des projets.",
                "Ce que je fais pour le neutraliser: le cahier des charges est rédigé pour être consultable par plusieurs prestataires, et le coût du conseil est déduit si vous me confiez la suite.",
                "Ce que vous pouvez faire de votre côté: demander mes recommandations sous une forme que vous pouvez faire chiffrer ailleurs, et le faire réellement.",
                "Si vous cherchez une neutralité totale, prenez un consultant qui ne réalise pas. Vous paierez plus cher et il connaîtra moins bien les coûts réels de mise en oeuvre, mais l'indépendance sera entière. C'est un arbitrage légitime.",
            ],
        ],
        [
            'type' => 'liens', 'etiquette' => 'Aller plus loin',
            'titre' => "Le domaine, la méthode et les villes.",
            'items' => [
                ['titre' => "Expert en digitalisation d'entreprise", 'texte' => "Le fond du sujet: définition, méthode en quatre étapes et périmètre d'intervention.", 'url' => '/expert-digitalisation-entreprise'],
                ['titre' => "Audit et étude de projet", 'texte' => "La prestation d'audit détaillée, avec son cadre et ses tarifs.", 'url' => '/services/audit-etude-de-projet'],
                ['titre' => "Digitalisation d'entreprise", 'texte' => "La prestation de mise en oeuvre, une fois la décision prise.", 'url' => '/services/digitalisation-d-entreprise'],
                ['titre' => "Par où commencer et à quel coût", 'texte' => "L'article qui répond à la question la plus fréquente avant une mission.", 'url' => '/blog/digitalisation-des-pme-par-o-commencer-et-quel-cot'],
            ],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un consultant et un prestataire ?", 'r' => "Le prestataire construit ce que vous avez décidé. Le consultant vous aide à décider quoi construire, dans quel ordre et pour quel budget. Si votre décision est déjà prise, vous n'avez pas besoin d'un consultant: allez directement à la réalisation."],
        ['q' => "Suis-je obligé de vous confier l'exécution ensuite ?", 'r' => "Non, et le cahier des charges est justement rédigé pour être envoyé à plusieurs prestataires. Plusieurs de mes audits ont été réalisés par d'autres, parfois sur ma recommandation quand leur spécialité correspondait mieux au besoin."],
        ['q' => "Combien de temps dure une mission ?", 'r' => "Deux à trois semaines pour une PME, incluant les entretiens, l'analyse et la restitution. Au-delà, c'est généralement que le périmètre était mal défini au départ."],
        ['q' => "Intervenez-vous à distance ?", 'r' => "Au Bénin, je me déplace pour les entretiens de terrain: c'est là que se trouve l'essentiel de la valeur d'un audit. Ailleurs en Afrique de l'Ouest, en Europe et au Canada, les missions se mènent en visioconférence, avec des entretiens individuels plutôt que de l'observation directe. C'est un peu moins riche, et je le dis avant."],
        ['q' => "Que se passe-t-il si vous concluez qu'il ne faut rien faire ?", 'r' => "Cela arrive, et c'est un résultat valable. Une entreprise dont les processus fonctionnent et dont le volume ne justifie pas d'investissement n'a rien à digitaliser. Vous aurez payé pour éviter une dépense inutile, ce qui reste un bon calcul."],
        ['q' => "Travaillez-vous avec des structures publiques ou des ONG ?", 'r' => "Oui. Les contraintes y sont différentes: procédures de validation plus longues, exigences de traçabilité, parfois obligations de marché. J'en tiens compte dans le chiffrage et dans le calendrier, plutôt que de découvrir ces contraintes en cours de mission."],
    ],
];
