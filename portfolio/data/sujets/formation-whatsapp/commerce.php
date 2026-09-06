<?php
// Formation WhatsApp Business pour les commerces. 05/09/2026.
// Angle : WhatsApp est le canal de vente numero un des commerces d'ici ;
// presque aucun ne l'exploite au-dela de la conversation.
declare(strict_types=1);

return [
    'slug'       => 'formation-whatsapp-business',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation WhatsApp Business pour les commerces',
    'accroche'   => 'WhatsApp est déjà votre premier canal de vente. Cette formation en fait un vrai outil de travail : catalogue, réponses rapides, suivi des commandes, sans risquer votre numéro.',
    'intro'      => 'Au Bénin comme dans toute la sous-région, les clients commandent, négocient et réclament sur WhatsApp. La plupart des commerces gèrent ce flux à main levée : les commandes se perdent dans le fil, les prix se rediscutent à chaque message, et tout repose sur le téléphone d\'une seule personne. WhatsApp Business, la version gratuite déjà installée sur des millions de téléphones, contient de quoi structurer tout cela. Cette formation l\'exploite à fond, et dit honnêtement où s\'arrête l\'outil gratuit et où commence l\'automatisation sérieuse.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Passer de la conversation au canal de vente.',
            'paragraphes' => [
                'La différence entre un commerce qui subit WhatsApp et un commerce qui s\'en sert se voit en trois points : le client trouve les produits et les prix sans les demander, chaque commande laisse une trace exploitable, et l\'activité survit à l\'absence de la personne qui tient le téléphone.',
                'La formation travaille ces trois points avec les fonctions natives de WhatsApp Business : profil complet, catalogue avec prix, réponses rapides, étiquettes de suivi, messages d\'absence et de bienvenue. Des fonctions gratuites, présentes dans le téléphone de tout le monde, et utilisées par presque personne au-delà du nom de la boutique.',
                'Elle traite aussi ce que les vendeurs de « bots WhatsApp » ne disent pas : les limites d\'usage de la version gratuite, ce qui distingue WhatsApp Business de l\'API officielle payante, et les pratiques qui font bannir un numéro, avec le fichier clients qui disparaît avec lui.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre modules, du profil au pilotage.',
            'items'     => [
                ['titre' => 'Un profil qui vend', 'texte' => 'Profil complet, catalogue avec photos et prix, lien wa.me à diffuser. Le client obtient les réponses de base sans poser de question.'],
                ['titre' => 'Répondre vite et juste', 'texte' => 'Réponses rapides pour les questions qui reviennent, messages de bienvenue et d\'absence, et le ton qui reste commercial même dans le refus.'],
                ['titre' => 'Suivre les commandes', 'texte' => 'Étiquettes par étape, du premier contact à la livraison payée, et la sortie hebdomadaire vers un tableau simple : ce qui transforme un fil de discussion en carnet de commandes.'],
                ['titre' => 'Grandir sans se faire bannir', 'texte' => 'Listes de diffusion et leurs règles, limites de la version gratuite, quand l\'API officielle devient nécessaire, et les pratiques qui coûtent un numéro.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Public',
            'titre'     => 'À qui la formation s\'adresse.',
            'items'     => [
                'Commerces et boutiques dont WhatsApp est déjà le premier canal de commande, du prêt-à-porter à l\'alimentaire.',
                'E-commerçants qui livrent sur commande WhatsApp et perdent le fil dès que les volumes montent.',
                'Prestataires de services qui prennent leurs rendez-vous et leurs devis dans la messagerie.',
                'Équipes de deux à cinq personnes qui se partagent un même numéro professionnel et ont besoin de règles communes.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Une demi-journée suffit pour le socle : chaque participant repart avec son profil refait, son catalogue amorcé et ses premières réponses rapides en place, sur son propre téléphone. Une journée complète ajoute le suivi des commandes et le module croissance. Sur place ou en visioconférence.',
                'Le cadrage est gratuit. Si votre volume justifie déjà l\'API officielle et une vraie automatisation, je le dis au cadrage et la formation s\'ajuste : inutile de vous former sur un outil que vous êtes en train de dépasser.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Terrain',
            'titre'      => 'Une journée type dans un commerce qui vend sur WhatsApp.',
            'paragraphes' => [
                'Suivons une commande réelle, telle qu\'elle se passe sans structure. Une cliente écrit à 9 h pour demander le prix d\'un article vu en story. La vendeuse répond à 11 h, entre deux clients au comptoir. La cliente négocie, commande, promet de passer. Son message se noie ensuite sous quarante conversations. Le soir, impossible de dire combien de commandes sont en attente, lesquelles sont payées, lesquelles livrées. À la fin du mois, impossible de dire combien WhatsApp a rapporté. Le canal vend, mais personne ne sait combien, et chaque journée chargée fait perdre des ventes que personne ne voit.',
                'La même journée, structurée : le catalogue répond aux questions de prix avant même la conversation. Le message de bienvenue annonce les délais de réponse. Chaque commande confirmée reçoit son étiquette, et le tableau de bord du soir se lit en une minute : tant à préparer, tant à livrer, tant à encaisser. La relance des commandes non retirées part chaque vendredi, en quelques minutes, à partir des étiquettes. Rien de tout cela ne demande un outil payant : tout est dans l\'application gratuite, correctement utilisée.',
                'L\'écart entre ces deux journées est exactement ce que la formation installe. Et il se mesure vite : le simple fait de compter ses commandes WhatsApp de la semaine, ce que la plupart des commerces n\'ont jamais fait, change la façon de voir ce canal.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Erreurs',
            'titre'     => 'Les pratiques qui coûtent des ventes ou un numéro.',
            'items'     => [
                ['titre' => 'Le prix seulement en privé', 'texte' => 'Refuser d\'afficher les prix pour forcer la conversation fait fuir une partie des acheteurs et noie la vendeuse sous des demandes sans suite. Le catalogue avec prix filtre les curieux et fait arriver des clients déjà décidés.'],
                ['titre' => 'Les envois en masse sauvages', 'texte' => 'Arroser tout le carnet de contacts avec la promotion du jour, c\'est le chemin le plus court vers les signalements, et les signalements mènent au bannissement. Les listes de diffusion ont des règles précises, enseignées au module croissance.'],
                ['titre' => 'Le numéro personnel comme numéro commercial', 'texte' => 'L\'activité entière repose sur le numéro privé du gérant, invérifiable et intransmissible. La migration vers un numéro professionnel dédié, avec conservation de l\'historique, est traitée pas à pas en session.'],
                ['titre' => 'Aucune trace des ventes', 'texte' => 'Les commandes vivent et meurent dans les conversations. Sans étiquettes ni sortie hebdomadaire vers un tableau, impossible de connaître son chiffre WhatsApp, ses clients fidèles ou ses relances à faire. C\'est le cœur du module suivi.'],
                ['titre' => 'Répondre à toute heure, ou plus du tout', 'texte' => 'Sans cadre, le canal dévore les soirées du gérant puis finit abandonné par épuisement. Messages d\'absence, horaires annoncés et réponses rapides ramènent le canal à un outil de travail qui respecte des horaires.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que chaque commerce repart avec.',
            'items'     => [
                'Un profil professionnel complet : nom, description, horaires, adresse, lien de localisation.',
                'Un catalogue amorcé en session avec vos produits, vos photos et vos prix, et la méthode pour l\'entretenir.',
                'Vos réponses rapides enregistrées pour les dix questions qui reviennent le plus chez vous.',
                'Un système d\'étiquettes posé sur vos conversations réelles, du premier contact à la livraison payée.',
                'Le lien wa.me prêt à diffuser sur vos supports, et la fiche des règles anti-bannissement en une page.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Par activité',
            'titre'     => 'Ce que la formation ajuste selon votre commerce.',
            'items'     => [
                ['titre' => 'Prêt-à-porter et mode', 'texte' => 'Le catalogue par collections avec tailles et coloris, la réponse type aux demandes de disponibilité, et la gestion des réservations qui expirent : l\'article gardé trois jours pour une cliente qui ne vient pas est la plaie du secteur.'],
                ['titre' => 'Alimentaire et traiteur', 'texte' => 'Les commandes du jour avec heure limite, le message de disponibilité quotidien envoyé proprement, et le circuit des commandes récurrentes des habitués. La rapidité de réponse y pèse plus que partout ailleurs.'],
                ['titre' => 'Cosmétique et soins', 'texte' => 'Le conseil avant vente en réponses rapides documentées, les photos avant-après avec l\'accord des clientes, et la relance de réapprovisionnement au bon intervalle : le produit fini se rachète, encore faut-il y penser au bon moment.'],
                ['titre' => 'Services et rendez-vous', 'texte' => 'La prise de rendez-vous cadrée par des créneaux annoncés, la confirmation de la veille, et la liste d\'attente pour les désistements. Un salon ou un cabinet perd moins au rendez-vous manqué qu\'au créneau resté vide faute d\'organisation.'],
                ['titre' => 'E-commerce avec livraison', 'texte' => 'Le circuit complet commande, paiement Mobile Money, remise au livreur, confirmation de réception, avec une étiquette par étape. C\'est le profil qui bascule le plus vite vers l\'automatisation, et la formation prépare cette suite.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Préparation',
            'titre'      => 'Comment se préparer pour tirer le maximum de la session.',
            'paragraphes' => [
                'La session travaille sur votre matière réelle, alors la préparation compte. Avant le jour J, rassemblez trois choses. D\'abord vos photos produits : une vingtaine d\'images correctes suffisent à amorcer le catalogue, et la session inclut les règles simples qui rendent une photo de téléphone vendeuse : lumière du jour, fond propre, produit net. Ensuite, votre liste de prix à jour, celle que vous donnez réellement, pas celle de l\'an dernier. Enfin, relisez vos vingt dernières conversations clients et notez les questions qui reviennent : elles deviendront vos réponses rapides.',
                'Prévoyez aussi la décision sur le numéro. Si l\'activité tourne sur le numéro personnel du gérant, la session est le bon moment pour trancher : le garder en le professionnalisant, ou migrer vers un numéro dédié. Les deux se font proprement, mais la décision doit être prise avant de construire le profil, pas après. Le cadrage gratuit aide à choisir selon votre situation : ancienneté du numéro, volume de contacts, nombre de personnes qui répondent.',
                'Dernier point pratique : venez avec le téléphone qui sert réellement à vendre, chargé, avec de l\'espace de stockage et le code de validation accessible. Tout se construit dessus pendant la session, et c\'est précisément ce qui fait qu\'à la fin, il n\'y a rien à « mettre en place plus tard » : c\'est déjà en place.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Règles',
            'titre'      => 'Ce que WhatsApp autorise vraiment, et pourquoi c\'est votre allié.',
            'paragraphes' => [
                'Les règles de WhatsApp tiennent en un principe : le destinataire doit vouloir vos messages. Un client qui vous a écrit, vous a enregistré ou a accepté d\'être tenu informé est un contact légitime ; un numéro récupéré dans un groupe ou acheté dans une liste ne l\'est pas. Tout le système de détection, les signalements des utilisateurs en tête, mesure cette différence. Les comptes bannis ne le sont presque jamais par hasard : ils le sont parce qu\'ils écrivent massivement à des gens qui ne leur ont rien demandé.',
                'Bien comprises, ces règles jouent pour vous. Elles maintiennent WhatsApp comme un canal où les messages sont lus, ce qui est précisément sa valeur commerciale : votre relance de commande arrive au milieu des conversations familiales, pas dans un dossier de courrier indésirable. Le module croissance enseigne donc les pratiques qui respectent le principe tout en développant l\'audience : faire enregistrer son numéro par les clients, proposer l\'inscription à la liste de diffusion au moment de l\'achat, espacer les envois, et donner une vraie porte de sortie à qui ne veut plus recevoir.',
                'La formation apprend aussi à reconnaître les signaux d\'alerte avant la sanction : messages qui n\'arrivent plus, restrictions temporaires, avertissements dans l\'application. À ce stade, il est encore temps de corriger, et la marche à suivre est couverte. L\'objectif est simple : que votre numéro professionnel, avec son historique et son carnet de clients, soit un actif protégé, pas une roulette russe.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Les marches suivantes.',
            'items'     => [
                ['url' => '/formation-automatisation', 'titre' => 'Formation automatisation', 'texte' => 'Quand les volumes dépassent le geste manuel : relier WhatsApp à un tableau, trier, accuser réception automatiquement.'],
                ['url' => '/services/site-e-commerce', 'titre' => 'Site e-commerce', 'texte' => 'La vitrine qui complète le canal : catalogue en ligne, commandes structurées, paiement Mobile Money.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'Le catalogue complet, avec formats et tarifs indicatifs.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'WhatsApp Business est-il vraiment gratuit ?', 'r' => 'L\'application l\'est, avec le catalogue, les étiquettes et les réponses rapides. L\'API officielle, elle, est payante et s\'adresse aux volumes importants. La formation couvre la première et explique quand la seconde se justifie.'],
        ['q' => 'Peut-on garder notre numéro actuel ?', 'r' => 'Oui, un numéro existant se migre vers WhatsApp Business en conservant les conversations. La manipulation se fait ensemble pendant la session, avec les précautions qui évitent toute perte.'],
        ['q' => 'Les bots WhatsApp qu\'on nous propose partout, qu\'en penser ?', 'r' => 'Beaucoup reposent sur des solutions non officielles qui exposent le numéro au bannissement. Le module croissance apprend à les reconnaître et présente les alternatives conformes, avec leurs coûts réels.'],
        ['q' => 'Nous sommes plusieurs sur le même numéro. Est-ce gérable ?', 'r' => 'Jusqu\'à un certain volume, oui : l\'application autorise plusieurs appareils, et la formation pose les règles communes, étiquettes et réponses types en tête. Au-delà, c\'est le signe qu\'il faut passer à l\'API.'],
        ['q' => 'Que repart-on avec, concrètement ?', 'r' => 'Un profil professionnel complet, un catalogue amorcé avec vos produits, vos réponses rapides enregistrées et un système d\'étiquettes en place. Tout est fait sur vos téléphones pendant la session, pas sur un exemple.'],
        ['q' => 'Comment mesurer ce que WhatsApp rapporte vraiment ?', 'r' => 'Par les étiquettes et la sortie hebdomadaire vers un tableau simple : nombre de commandes, montants, clients récurrents. La plupart des commerces découvrent leur chiffre WhatsApp réel à ce moment-là, et c\'est souvent la surprise de la formation.'],
        ['q' => 'WhatsApp peut-il encaisser les paiements ?', 'r' => 'Pas directement dans la sous-région : les paiements passent par Mobile Money ou en boutique. La formation montre comment cadrer proprement la confirmation de paiement dans la conversation, pour que l\'étiquette « payé » corresponde toujours à un encaissement vérifié.'],
        ['q' => 'Faut-il aussi une page Facebook ou Instagram ?', 'r' => 'Elles amènent du monde vers WhatsApp, où la vente se conclut. La formation se concentre sur la conclusion, mais le lien wa.me et le catalogue s\'intègrent à vos pages existantes, et le sujet est couvert dans le module croissance.'],
        ['q' => 'Et quand les volumes dépasseront l\'application gratuite ?', 'r' => 'C\'est un bon problème, et il a une réponse propre : l\'API officielle WhatsApp Business, avec de vraies automatisations. La formation vous apprend à reconnaître ce seuil, et la marche suivante est couverte par la formation automatisation ou par une prestation dédiée.'],
    ],
];
