<?php
// Page pilier du positionnement d'expert. Elle ne vise aucune ville : elle
// vise le terme principal, qui n'avait aucune page dediee. Les 9 pages villes,
// les 3 articles de blog et la page service lui servent de grappe.
// ville_slug vide: le gabarit saute alors l'echelon ville du fil d'Ariane.
declare(strict_types=1);

return [
    'slug'       => 'expert-digitalisation-entreprise',
    'ville'      => 'Afrique francophone',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => "Expert en digitalisation d'entreprise",
    'accroche'   => "Relier ce qui existe déjà plutôt que tout remplacer, et mesurer chaque étape avant d'engager la suivante.",
    'intro'      => "La digitalisation d'entreprise ne consiste pas à acheter des logiciels. Elle consiste à supprimer les endroits où l'information se perd, se recopie ou s'arrête. Dans la quasi-totalité des entreprises que j'accompagne, les outils existent déjà : un téléphone, un cahier, un tableur, WhatsApp. Le problème n'est pas leur absence, c'est qu'ils ne se parlent pas. Mon travail consiste à identifier ces ruptures, à les traiter une par une en commençant par la plus coûteuse, et à m'assurer que l'équipe utilise réellement ce qui est livré.",

    'sections' => [
        [
            'type' => 'definitions', 'etiquette' => 'Définition',
            'titre' => "Ce qu'est réellement la digitalisation d'entreprise.",
            'items' => [
                ['titre' => "Ce n'est pas de l'informatisation", 'texte' => "Informatiser, c'est remplacer un support papier par un écran. Digitaliser, c'est faire circuler l'information entre les étapes sans intervention humaine. Une entreprise peut être entièrement informatisée et pas du tout digitalisée: si vos commandes arrivent dans un logiciel, votre stock dans un deuxième et vos factures dans un troisième, sans lien entre eux, vous avez trois saisies là où il en faudrait une."],
                ['titre' => "Ce n'est pas un projet, c'est une suite de chantiers", 'texte' => "Une digitalisation présentée comme un projet global à douze mois échoue presque toujours: le budget dérape, l'équipe décroche, et l'on revient aux anciennes méthodes en attendant. Une suite de chantiers courts, chacun mesuré avant d'ouvrir le suivant, produit un résultat visible dès les premières semaines et finance la suite."],
                ['titre' => "Ce n'est pas une question de taille d'entreprise", 'texte' => "Un commerce de trois personnes qui perd deux heures par jour en ressaisie a plus à gagner qu'une structure de cinquante salariés déjà outillée. Le critère n'est pas l'effectif, c'est le volume de tâches répétitives et le nombre d'endroits où la même information est saisie deux fois."],
                ['titre' => "Ce n'est pas irréversible", 'texte' => "Une digitalisation bien conduite vous laisse propriétaire de vos données et libre de changer d'outil. Si un prestataire vous enferme dans une solution dont vous ne pouvez pas sortir, ce n'est pas de la digitalisation: c'est de la dépendance."],
            ],
        ],
        [
            'type' => 'etapes', 'etiquette' => 'Méthode',
            'titre' => "Ma méthode: quatre étapes, jamais dans le désordre.",
            'items' => [
                ['titre' => "Suivre un flux réel de bout en bout", 'texte' => "Pas un organigramme, pas une réunion de cadrage théorique: on suit une commande, un dossier ou un patient depuis son arrivée jusqu'à l'encaissement, en notant qui saisit quoi et où. C'est presque toujours à ce moment qu'apparaissent les deux ou trois points qui coûtent le plus, et ce ne sont jamais ceux qu'on avait listés au départ."],
                ['titre' => "Traiter d'abord le point le plus douloureux", 'texte' => "Un seul chantier, choisi parce qu'il fait gagner du temps dès la première semaine. On le met en production réelle, sur les vraies données, et on mesure. Ce gain mesuré est ce qui donne à l'équipe l'envie de passer au suivant."],
                ['titre' => "Relier plutôt que remplacer", 'texte' => "WhatsApp reste votre canal client parce que c'est là que sont vos clients. Le Mobile Money reste votre moyen d'encaissement. On ne demande pas à vos clients de changer d'habitudes: on fait en sorte que ce qui y transite alimente automatiquement vos outils."],
                ['titre' => "Former pendant, pas après", 'texte' => "Un outil que l'équipe n'utilise pas est un outil perdu, quel que soit son coût. La prise en main se fait sur les vraies opérations, pendant le développement, avec les personnes qui saisiront réellement. Une formation en fin de projet arrive trop tard pour corriger ce qui ne va pas."],
            ],
        ],
        [
            'type' => 'liste', 'etiquette' => 'Diagnostic',
            'titre' => "Les signes qui montrent qu'il est temps.",
            'items' => [
                "La même information est saisie deux ou trois fois: sur WhatsApp, dans un cahier, puis dans un tableur.",
                "Personne ne peut dire le stock exact, l'encours client ou le chiffre du mois sans plusieurs heures de reconstitution.",
                "Quand une personne est absente, une partie de l'activité s'arrête parce que l'information est dans sa tête ou son téléphone.",
                "Les relances clients se font de mémoire, donc certaines n'ont jamais lieu.",
                "Vous avez déjà acheté un logiciel qui n'a pas été adopté, et personne ne sait vraiment pourquoi.",
                "Vos outils fonctionnent chacun correctement, mais aucun ne parle aux autres.",
            ],
        ],
        [
            'type' => 'definitions', 'etiquette' => 'Périmètre',
            'titre' => "Les trois compétences que je réunis.",
            'items' => [
                ['titre' => "Construire les outils", 'texte' => "Applications métier sur mesure, sites et boutiques en ligne, intégration d'ERP open source comme Odoo ou Dolibarr. Le choix entre sur-mesure et progiciel se fait au cadrage, sur le périmètre réel, pas sur ce que je préfère vendre."],
                ['titre' => "Automatiser les tâches répétitives", 'texte' => "C'est le terrain où le retour sur investissement est le plus rapide et le plus mesurable. Relier deux outils qui s'ignorent, déclencher une relance automatique, alimenter un tableau de bord: quelques jours de travail suppriment parfois plusieurs heures hebdomadaires."],
                ['titre' => "Rendre visible sur les moteurs", 'texte' => "Une entreprise digitalisée mais introuvable n'a résolu que la moitié du problème. Le référencement naturel fait partie de la démarche, pas d'une prestation séparée vendue ensuite."],
                ['titre' => "Ce que je ne fais pas", 'texte' => "Le design graphique pur, le développement mobile natif avancé, et les projets exigeant une présence physique quotidienne. Sur ces sujets, vous serez mieux servi ailleurs et je vous le dirai."],
            ],
        ],
        [
            'type' => 'liens', 'etiquette' => 'Par ville',
            'titre' => "La digitalisation près de chez vous.",
            'items' => [
                ['titre' => "Digitalisation à Cotonou", 'texte' => "Import-export, crédit revendeur et gros volumes.", 'url' => '/digitalisation-entreprise-cotonou'],
                ['titre' => "Digitalisation à Abomey-Calavi", 'texte' => "Écoles, cliniques et structures en forte croissance.", 'url' => '/digitalisation-entreprise-abomey-calavi'],
                ['titre' => "Digitalisation à Porto-Novo", 'texte' => "Traçabilité des validations et archives justifiables.", 'url' => '/digitalisation-entreprise-porto-novo'],
                ['titre' => "Digitalisation à Parakou", 'texte' => "Saisie de terrain hors connexion et avances producteurs.", 'url' => '/digitalisation-entreprise-parakou'],
                ['titre' => "Digitalisation à Bohicon", 'texte' => "Vitesse au comptoir et encours revendeurs.", 'url' => '/digitalisation-entreprise-bohicon'],
                ['titre' => "Digitalisation à Ouidah", 'texte' => "Saisonnalité, réservation et acomptes.", 'url' => '/digitalisation-entreprise-ouidah'],
                ['titre' => "Digitalisation à Abidjan", 'texte' => "Consolidation multi-points et paiements mobiles.", 'url' => '/digitalisation-entreprise-abidjan'],
                ['titre' => "Digitalisation à Lomé", 'texte' => "Transit portuaire et suivi des échéances.", 'url' => '/digitalisation-entreprise-lome'],
                ['titre' => "Digitalisation à Dakar", 'texte' => "E-commerce, stock unique et paiements Wave.", 'url' => '/digitalisation-entreprise-dakar'],
            ],
        ],
        [
            'type' => 'liens', 'etiquette' => 'Approfondir',
            'titre' => "Mes articles sur le sujet.",
            'items' => [
                ['titre' => "Qu'est-ce que la digitalisation d'entreprise ?", 'texte' => "Définition et guide pour bien démarrer.", 'url' => '/blog/qu-est-ce-que-la-digitalisation-d-entreprise-definition-et-guide-pour-bien-demarrer'],
                ['titre' => "Comment digitaliser son entreprise", 'texte' => "Le guide étape par étape.", 'url' => '/blog/comment-digitaliser-son-entreprise-le-guide-etape-par-etape'],
                ['titre' => "Digitalisation des PME", 'texte' => "Par où commencer et à quel coût.", 'url' => '/blog/digitalisation-des-pme-par-o-commencer-et-quel-cot'],
                ['titre' => "Le service et ses tarifs", 'texte' => "Le détail de la prestation de digitalisation.", 'url' => '/services/digitalisation-d-entreprise'],
                ['titre' => "Consultant en digitalisation", 'texte' => "Si vous cherchez un diagnostic et une feuille de route avant d'engager une réalisation.", 'url' => '/consultant-digitalisation'],
            ],
        ],
    ],

    'faq' => [
        ['q' => "Par où commencer quand on ne sait pas ?", 'r' => "Par le point qui vous fait perdre le plus de temps chaque semaine. Si vous ne savez pas lequel c'est, le cadrage sert exactement à cela: on suit un flux réel et le point le plus coûteux apparaît de lui-même. Ce cadrage est gratuit et sans engagement."],
        ['q' => "Combien coûte une digitalisation d'entreprise ?", 'r' => "Un premier chantier utile, formation comprise, se situe généralement entre 300 000 et 900 000 FCFA selon la complexité. Une transformation complète dépasse ce cadre, mais elle se découpe en étapes que vous financez au fur et à mesure du retour constaté. Je ne propose jamais un budget global à douze mois."],
        ['q' => "Combien de temps avant de voir un résultat ?", 'r' => "Un premier chantier se livre en 2 à 5 semaines et produit un gain mesurable dès sa mise en service. C'est volontaire: un projet dont le premier résultat arrive au bout de six mois perd l'adhésion de l'équipe bien avant."],
        ['q' => "Mon équipe n'est pas à l'aise avec l'informatique.", 'r' => "C'est la situation la plus fréquente, et c'est un critère de conception plutôt qu'un obstacle. Un outil pensé pour une équipe peu à l'aise est plus simple pour tout le monde: moins de champs, moins d'écrans, des libellés en français courant. On forme sur les vraies opérations, pendant le développement."],
        ['q' => "Faut-il tout remplacer ?", 'r' => "Presque jamais. Beaucoup d'entreprises ont déjà investi dans des outils qui fonctionnent correctement chacun de leur côté. Les faire communiquer coûte souvent dix fois moins qu'une refonte, pour un gain comparable. Le remplacement ne se justifie que si l'outil existant bloque réellement."],
        ['q' => "Que se passe-t-il si mon activité change dans deux ans ?", 'r' => "C'est prévu dès le cadrage: on choisit des solutions qui évoluent, et vous restez propriétaire des données et du code. Une digitalisation qui vous enferme est une digitalisation ratée, même si elle fonctionne le jour de la livraison."],
        ['q' => "Travaillez-vous en dehors du Bénin ?", 'r' => "Oui. J'accompagne des entreprises en Côte d'Ivoire, au Togo, au Sénégal, et à distance en France, en Belgique, en Suisse et au Canada. Les projets hors du Bénin se mènent entièrement à distance, avec un cadre contractuel adapté au pays."],
    ],
];
