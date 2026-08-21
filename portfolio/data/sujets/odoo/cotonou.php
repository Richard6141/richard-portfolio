<?php
// Odoo x Cotonou. Un fichier = une page publiee. Aucune route, aucun
// gabarit, aucun bloc de sitemap a ajouter : le registre s'en charge.
declare(strict_types=1);

return [
    'slug'     => 'odoo-cotonou',
    'ville'    => 'Cotonou',
    'pays'     => 'Bénin',
    'titre'    => "Intégrer Odoo à Cotonou",
    'accroche' => "Un ERP complet, à condition de ne pas tout déployer d'un coup.",
    'intro'    => "Odoo attire les entreprises de Cotonou pour une raison simple : c'est l'un des rares ERP complets accessibles à une PME, avec une version open source qu'on peut héberger soi-même. Le piège est tout aussi simple : Odoo propose des dizaines de modules, et la tentation est de tout activer dès le premier mois. C'est la cause la plus fréquente d'échec — une équipe noyée sous des écrans dont elle ne comprend pas l'usage abandonne l'outil et revient au tableur.",

    'sections' => [
        [
            'type' => 'liste',
            'etiquette' => 'Diagnostic',
            'titre' => "Quand Odoo est le bon choix — et quand il ne l'est pas.",
            'items' => [
                "Vous avez plusieurs services qui doivent partager les mêmes données : ventes, stock, achats, comptabilité. C'est le cas d'usage naturel d'Odoo.",
                "Vos processus sont relativement standards. Odoo excelle sur le classique et coûte cher dès qu'on veut le tordre.",
                "Vous avez au moins une personne capable de devenir référent interne. Sans elle, aucun ERP ne tient dans la durée.",
                "À l'inverse, si votre besoin tient en un seul module — juste une facturation, juste un stock — un outil sur mesure sera plus léger, moins cher et mieux adapté.",
                "Si votre métier repose sur un processus très particulier, le coût de personnalisation d'Odoo dépasse souvent celui d'un développement dédié.",
            ],
        ],
        [
            'type' => 'etapes',
            'etiquette' => 'Méthode',
            'titre' => "Un déploiement par paliers, jamais d'un bloc.",
            'items' => [
                ['titre' => "Cartographier avant d'installer", 'texte' => "On suit un flux réel de bout en bout — une commande, un achat, une facture — et on identifie les deux ou trois points qui coûtent le plus. Odoo s'installe ensuite autour de ces points, pas l'inverse."],
                ['titre' => "Un module, mis en service, mesuré", 'texte' => "Le plus souvent la vente ou le stock. On le met en production réelle, on mesure le gain sur quelques semaines, et l'équipe prend ses marques sur un périmètre qu'elle maîtrise."],
                ['titre' => "Connecter l'existant", 'texte' => "À Cotonou, cela veut presque toujours dire WhatsApp pour la relation client et Mobile Money pour l'encaissement. Odoo ne les remplace pas : il les reçoit, via des connecteurs ou des automatisations."],
                ['titre' => "Former un référent interne", 'texte' => "L'objectif est que vous n'ayez plus besoin de moi pour l'exploitation courante : créer un utilisateur, ajuster un droit, sortir un état. C'est ce qui distingue un déploiement réussi d'une dépendance permanente."],
            ],
        ],
        [
            'type' => 'definitions',
            'etiquette' => 'Réalité locale',
            'titre' => "Ce qui change quand on déploie Odoo au Bénin.",
            'items' => [
                ['titre' => "L'hébergement", 'texte' => "Odoo Online est simple mais facturé par utilisateur et par mois, en devise étrangère. La version open source auto-hébergée supprime cet abonnement récurrent, au prix d'un serveur à administrer. Pour une PME béninoise, l'arbitrage penche souvent vers l'auto-hébergement dès qu'on dépasse une poignée d'utilisateurs."],
                ['titre' => "La connexion", 'texte' => "Odoo est une application web lourde, conçue pour des connexions confortables. Sur une liaison irrégulière, certains écrans deviennent pénibles. Cela se traite — vues allégées, saisie hors ligne sur les postes mobiles — mais il faut l'anticiper, pas le découvrir après la mise en service."],
                ['titre' => "Les paiements", 'texte' => "Odoo ne connaît pas MTN Mobile Money ni Moov Money nativement. Le rapprochement se construit, soit par import structuré, soit par une automatisation qui alimente les règlements. C'est un poste de travail à budgéter explicitement."],
                ['titre' => "La fiscalité", 'texte' => "Le paramétrage comptable livré par défaut n'est pas celui du plan comptable en vigueur ici. C'est du réglage, pas du développement, mais cela demande d'y consacrer du temps avec votre comptable au démarrage."],
            ],
        ],
    ],

    'faq' => [
        ['q' => "Odoo est-il gratuit ?", 'r' => "La version Community est open source et sans licence. Ce qui coûte, c'est le déploiement, le paramétrage, la reprise des données et la formation. La version Enterprise ajoute un abonnement par utilisateur, en devise étrangère, qu'il faut intégrer au calcul sur plusieurs années."],
        ['q' => "Combien de temps pour un premier module en production ?", 'r' => "Comptez 4 à 8 semaines pour un module mis en service réellement, formation comprise. Un déploiement multi-modules s'étale sur plusieurs mois, par paliers successifs, sans jamais arrêter l'activité."],
        ['q' => "Peut-on connecter Odoo à WhatsApp ou au Mobile Money ?", 'r' => "Oui, par automatisation. Les commandes reçues sur WhatsApp peuvent alimenter Odoo, et les règlements Mobile Money être rapprochés. Ce n'est pas natif : c'est un travail d'intégration à prévoir au budget."],
        ['q' => "Odoo ou un logiciel sur mesure ?", 'r' => "Odoo si vos besoins couvrent plusieurs domaines standards et que vous acceptez d'adapter un peu vos procédures. Sur mesure si votre besoin est ciblé ou votre métier atypique — ce sera plus léger et moins cher. Je vous dirai franchement lequel convient, y compris si c'est celui que je ne vends pas."],
        ['q' => "Que se passe-t-il si je veux changer de prestataire ?", 'r' => "Avec Odoo Community auto-hébergé, vous gardez le serveur, la base et les modules. N'importe quel intégrateur Odoo peut reprendre. C'est l'un des arguments réels de cette solution face à un logiciel propriétaire fermé."],
    ],
];
