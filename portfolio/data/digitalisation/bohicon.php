<?php
// Bohicon — secteur dominant : commerce de gros et demi-gros,
// tel que declare dans data/villes/bohicon.php.
declare(strict_types=1);

return [
    'ville'      => 'Bohicon',
    'ville_slug' => 'bohicon',
    'pays'       => 'Bénin',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-bohicon',
        'titre'    => "Digitalisation d'entreprise à Bohicon",
        'accroche' => "Un carrefour commercial où tout va vite : des outils qui suivent le rythme du terrain.",
        'intro'    => "Bohicon est un nœud routier avant d'être une ville de bureaux. Les entreprises qui y prospèrent vivent du flux : marchandise qui entre le matin, repart l'après-midi, clients qui viennent de tout le centre du pays. Dans ce rythme, un outil qui demande dix clics pour enregistrer une vente ne sera jamais utilisé. La digitalisation qui réussit à Bohicon est celle qui s'insère dans la vitesse existante — trois champs, deux secondes, et on passe au client suivant.",
        'signaux'  => [
            "Les ventes de la journée se totalisent le soir, parfois le lendemain.",
            "Le crédit accordé aux clients réguliers se suit sur un cahier tenu par une seule personne.",
            "On découvre une rupture de stock au moment où un client la demande.",
            "Les prix varient selon qui sert, faute de référence unique.",
            "Impossible de dire quel produit rapporte réellement le plus.",
        ],
        'etapes' => [
            ['titre' => "Chronométrer le geste réel", 'texte' => "On mesure combien de temps prend une vente aujourd'hui. Tout ce que l'outil ajoute à ce temps sera abandonné en trois semaines. C'est la contrainte principale à Bohicon."],
            ['titre' => "Sécuriser le carnet de crédit", 'texte' => "C'est presque toujours le premier chantier utile : qui doit quoi, depuis quand. L'information sort d'un cahier unique et devient consultable par les personnes autorisées."],
            ['titre' => "Suivre le stock sur ce qui compte", 'texte' => "Pas tout le catalogue d'emblée : les vingt références qui font l'essentiel du chiffre. On étend ensuite, une fois l'habitude prise."],
            ['titre' => "Rendre la marge visible", 'texte' => "Prix d'achat, prix de vente, rotation. C'est souvent la découverte du projet : les produits qu'on croyait rentables ne le sont pas toujours."],
        ],
        'budget'  => "À Bohicon, un premier outil — caisse simplifiée, crédit client et stock sur les références principales, formation comprise — se situe généralement entre 250 000 et 700 000 FCFA. C'est l'un des contextes où le retour se mesure le plus vite, parce que le volume de transactions est élevé.",
        'delais'  => "2 à 4 semaines. Le travail de conception est court ; l'essentiel du temps passe dans l'ajustement avec l'équipe en conditions réelles.",
        'faq' => [
            ['q' => "Nos vendeurs n'auront pas le temps de saisir.", 'r' => "C'est exactement pour ça qu'on chronomètre le geste actuel avant de concevoir. Si la saisie rallonge la vente, l'outil est mal conçu — pas l'équipe mal formée."],
            ['q' => "Peut-on garder le cahier en parallèle ?", 'r' => "Oui, pendant la bascule. On arrête le double quand l'équipe fait confiance aux chiffres de l'écran, jamais sur décision unilatérale."],
            ['q' => "Et en cas de coupure d'électricité ?", 'r' => "La saisie se fait depuis un téléphone, qui a sa propre batterie, et fonctionne hors connexion. Une coupure n'arrête pas la vente."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-commerce-gros-bohicon',
        'nom'      => "commerce de gros et demi-gros",
        'titre'    => "Digitaliser un commerce de gros à Bohicon",
        'accroche' => "Crédit client, rotation des stocks et marge réelle : les trois chiffres qui manquent.",
        'intro'    => "Un grossiste de Bohicon sert des dizaines de revendeurs venus de tout le centre du Bénin, souvent à crédit, souvent sur des quantités variables. Le chiffre d'affaires n'est pas le problème : il est visible. Ce qui manque, ce sont les trois chiffres qui décident de la santé réelle de l'affaire — combien on me doit, quel stock tourne, et sur quoi je gagne vraiment.",
        'flux' => [
            "Achat fournisseur et réception",
            "Stockage par référence et par lot",
            "Vente au comptant ou à crédit",
            "Suivi des encours revendeurs",
            "Réapprovisionnement",
        ],
        'douleurs' => [
            ['titre' => "L'encours client n'est connu de personne", 'texte' => "Le crédit se donne sur la confiance et se note sur un cahier. Le total réellement dû, à un instant donné, demande de tout additionner à la main — donc il n'est jamais calculé."],
            ['titre' => "Le réapprovisionnement se fait au jugé", 'texte' => "Sans historique de rotation, on recommande ce dont on se souvient d'avoir manqué. Résultat : du capital immobilisé sur certaines références et des ruptures récurrentes sur d'autres."],
            ['titre' => "La marge par produit reste une intuition", 'texte' => "Quand les prix d'achat varient d'un arrivage à l'autre et que les remises se négocient au cas par cas, la rentabilité réelle par référence se perd."],
        ],
        'solution' => [
            ['titre' => "Un compte par revendeur", 'texte' => "Achats, règlements, solde, ancienneté de la dette. L'encours total se lit immédiatement, et les relances se déclenchent sur des critères, pas sur la mémoire."],
            ['titre' => "Une rotation par référence", 'texte' => "Ce qui part vite, ce qui dort. Le réapprovisionnement s'appuie sur des chiffres, et le capital cesse d'être immobilisé sur des invendus."],
            ['titre' => "Une marge calculée sur le prix d'achat réel", 'texte' => "Chaque arrivage porte son coût. La marge se calcule sur ce qui a été payé, pas sur un prix moyen théorique."],
            ['titre' => "Des relances automatiques", 'texte' => "Un message WhatsApp au revendeur dont la dette dépasse un seuil ou une ancienneté. Impersonnel, régulier, et bien plus efficace qu'une relance gênée en face à face."],
        ],
        'faq' => [
            ['q' => "Nos clients n'accepteront pas un suivi formalisé.", 'r' => "L'expérience montre l'inverse : un relevé clair est en général mieux reçu qu'une réclamation de mémoire. Le revendeur voit lui aussi ce qu'il doit, et les contestations diminuent."],
            ['q' => "Les prix changent souvent, est-ce gérable ?", 'r' => "Oui, c'est prévu dès la conception : chaque arrivage porte son prix d'achat, et la vente peut se faire à un prix négocié tout en gardant la marge réelle visible."],
            ['q' => "Combien de temps pour voir un effet ?", 'r' => "Sur l'encours client, l'effet est immédiat dès que le carnet est repris. Sur la rotation des stocks, comptez deux à trois mois d'historique pour que les chiffres deviennent exploitables."],
        ],
    ],
];
