<?php
// Parakou — digitalisation. Secteur dominant retenu : negoce agricole et
// coton, tel que declare dans data/villes/parakou.php.
declare(strict_types=1);

return [
    'ville'      => 'Parakou',
    'ville_slug' => 'parakou',
    'pays'       => 'Bénin',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-parakou',
        'titre'    => "Digitalisation d'entreprise à Parakou",
        'accroche' => "Des outils qui fonctionnent avec une connexion irrégulière et une équipe souvent en déplacement.",
        'intro'    => "Parakou n'est pas Cotonou, et une digitalisation copiée du sud échoue souvent ici. La connexion est plus capricieuse, les équipes se déplacent vers les zones de collecte, et une partie de l'activité se traite en dehors du bureau. Un outil qui exige une connexion permanente et un ordinateur fixe ne sera pas utilisé. Ce qui marche à Parakou tient en trois mots : mobile, léger, tolérant aux coupures.",
        'signaux'  => [
            "Les données collectées sur le terrain sont recopiées le soir, quand elles ne se perdent pas.",
            "Il faut attendre le retour d'une équipe pour connaître les quantités réellement collectées.",
            "Les outils testés jusqu'ici ont été abandonnés parce qu'ils ne fonctionnaient pas hors connexion.",
            "Les mêmes chiffres circulent en trois versions différentes selon la personne qui les donne.",
        ],
        'etapes' => [
            ['titre' => "Partir du terrain, pas du bureau", 'texte' => "Le cadrage se fait avec les personnes qui saisissent réellement : agents de collecte, magasiniers, chauffeurs. Un outil conçu depuis le bureau seul ne survit jamais au premier mois."],
            ['titre' => "Concevoir pour la coupure", 'texte' => "La saisie fonctionne hors connexion et se synchronise quand le réseau revient. Ce n'est pas une option confortable à Parakou, c'est la condition pour que l'outil serve."],
            ['titre' => "Alléger jusqu'à l'essentiel", 'texte' => "Moins de champs, moins d'écrans, des pages qui se chargent sur un téléphone d'entrée de gamme en 3G. Chaque élément superflu est un abandon potentiel."],
            ['titre' => "Former sur place, en conditions réelles", 'texte' => "La prise en main se fait avec le vrai réseau et les vrais téléphones de l'équipe, pas sur une démonstration en Wi-Fi."],
        ],
        'budget'  => "À Parakou, un premier outil de collecte ou de suivi, formation comprise, se situe généralement entre 300 000 et 800 000 FCFA. Le travail sur le mode hors connexion représente une part réelle du budget — c'est aussi ce qui fait la différence entre un outil utilisé et un outil abandonné.",
        'delais'  => "3 à 6 semaines pour un premier outil de terrain opérationnel, en comptant une phase de test avec les équipes avant déploiement général.",
        'faq' => [
            ['q' => "Nos agents n'ont pas tous un smartphone récent.", 'r' => "C'est intégré dès la conception : les outils que je livre fonctionnent sur des appareils d'entrée de gamme et des connexions 3G. C'est un critère de conception, pas une contrainte à subir."],
            ['q' => "Que se passe-t-il quand il n'y a pas de réseau ?", 'r' => "La saisie continue normalement, les données restent sur le téléphone et remontent automatiquement dès que le réseau revient. L'agent n'a rien à faire de particulier."],
            ['q' => "Nous avons déjà essayé un logiciel qui n'a pas pris.", 'r' => "C'est fréquent, et la cause est presque toujours la même : outil pensé pour le bureau, imposé au terrain. On inverse l'ordre — on part de ceux qui saisissent."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-negoce-agricole-parakou',
        'nom'      => "négoce agricole et coton",
        'titre'    => "Digitaliser un négoce agricole à Parakou",
        'accroche' => "Collecte, pesées, avances et stocks : arrêter de reconstituer la campagne après coup.",
        'intro'    => "Parakou est la place de commerce du nord béninois, au cœur du bassin cotonnier et sur le corridor qui remonte vers le Niger. Un négoce agricole y gère une saisonnalité forte, des dizaines de points de collecte, des avances aux producteurs et des pesées qui font foi. La difficulté n'est pas de vendre : c'est de savoir, en cours de campagne, ce qui a réellement été collecté, à quel prix, et ce qui reste dû à qui.",
        'flux' => [
            "Avances et engagements auprès des producteurs",
            "Collecte sur les points d'achat et pesées",
            "Transport vers le magasin central",
            "Stock par qualité et par lot",
            "Vente, expédition et règlement des producteurs",
        ],
        'douleurs' => [
            ['titre' => "La position réelle se connaît en fin de campagne", 'texte' => "Les bordereaux remontent par vagues. Tant qu'ils ne sont pas tous saisis, le tonnage collecté et le prix de revient moyen restent des estimations — au moment précis où il faudrait décider de vendre ou d'attendre."],
            ['titre' => "Les avances producteurs se suivent sur cahier", 'texte' => "Qui a reçu quoi, qui a livré combien, ce qui reste dû : l'information est dispersée entre plusieurs cahiers et plusieurs personnes. Les litiges de fin de campagne viennent presque toujours de là."],
            ['titre' => "Les pesées se contestent", 'texte' => "Sans trace horodatée et partagée, un désaccord sur un poids se règle de mémoire. C'est une source de tension récurrente avec les producteurs."],
        ],
        'solution' => [
            ['titre' => "Une saisie de collecte qui marche hors connexion", 'texte' => "L'agent enregistre producteur, poids et qualité depuis son téléphone, même sans réseau. Les données remontent seules dès que la connexion revient."],
            ['titre' => "Un compte par producteur, à jour en continu", 'texte' => "Avances versées, livraisons effectuées, solde restant : lisible à tout moment, par le producteur comme par vous. La plupart des litiges disparaissent d'eux-mêmes."],
            ['titre' => "Le tonnage et le prix de revient en temps réel", 'texte' => "Chaque bordereau saisi met à jour la position. Vous décidez de vendre sur des chiffres du jour, pas sur une estimation."],
            ['titre' => "Un stock par lot et par qualité", 'texte' => "Ce qui est en magasin, sa qualité et son coût d'entrée. Indispensable dès que plusieurs qualités coexistent au même endroit."],
        ],
        'faq' => [
            ['q' => "Nos points de collecte sont hors réseau une partie du temps.", 'r' => "C'est le cas de conception principal : la saisie fonctionne entièrement hors connexion et se synchronise plus tard. Rien ne se perd."],
            ['q' => "Peut-on imprimer un reçu au producteur ?", 'r' => "Oui, soit sur une petite imprimante Bluetooth de terrain, soit par un SMS ou message WhatsApp de confirmation contenant poids et date. Les deux servent de preuve partagée."],
            ['q' => "L'activité est très saisonnière, est-ce rentable ?", 'r' => "C'est justement l'argument : l'outil se rentabilise sur une seule campagne s'il évite les litiges d'avances et permet de vendre au bon moment. Hors saison, il ne coûte que son hébergement."],
        ],
    ],
];
