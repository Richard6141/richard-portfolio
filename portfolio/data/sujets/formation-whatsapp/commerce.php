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
    ],
];
