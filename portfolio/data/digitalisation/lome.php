<?php
// Lome — secteur dominant : transit et logistique portuaire, tel que
// declare dans data/villes/lome.php. Projets menes a distance.
declare(strict_types=1);

return [
    'ville'      => 'Lomé',
    'ville_slug' => 'lome',
    'pays'       => 'Togo',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-lome',
        'titre'    => "Digitalisation d'entreprise à Lomé",
        'accroche' => "Deux heures de route, aucun décalage horaire : la proximité d'un voisin, à distance.",
        'intro'    => "Lomé est la capitale la plus proche de Cotonou — deux heures de route, même fuseau horaire, mêmes moyens de paiement mobile, un tissu économique très comparable. C'est le marché étranger où la distance compte le moins. Les entreprises togolaises que j'accompagne fonctionnent exactement comme leurs homologues béninoises : les mêmes outils marchent, les mêmes écueils reviennent. Les projets se mènent à distance, avec la possibilité d'un déplacement pour un cadrage important.",
        'signaux'  => [
            "L'activité repose sur des fichiers Excel envoyés par e-mail entre plusieurs personnes.",
            "Chaque service tient sa propre version des mêmes données.",
            "Les documents commerciaux se refont manuellement à chaque opération.",
            "Le suivi des règlements clients se fait de mémoire ou sur cahier.",
            "Aucun tableau de bord ne donne l'état de l'activité sans travail préalable.",
        ],
        'etapes' => [
            ['titre' => "Cadrer en une séance dense", 'texte' => "Vu la proximité, un cadrage sur place est envisageable quand le projet le justifie. Sinon, deux visioconférences suffisent presque toujours."],
            ['titre' => "Éliminer la ressaisie d'abord", 'texte' => "Dans la plupart des structures togolaises que je rencontre, la même donnée est saisie deux à trois fois. C'est le gain le plus rapide et le plus incontestable."],
            ['titre' => "Un tableau de bord dès la première livraison", 'texte' => "Même minimal. Voir ses chiffres du jour change le rapport à l'outil et emporte l'adhésion des équipes bien plus qu'une démonstration."],
            ['titre' => "Documenter pour votre autonomie", 'texte' => "Accès, procédures, formation enregistrée. Vous devez pouvoir opérer sans moi au quotidien."],
        ],
        'budget'  => "Tarification identique au Bénin, en FCFA — même monnaie, mêmes moyens de paiement, aucun frais de change. Un premier chantier se situe généralement entre 300 000 et 900 000 FCFA selon le périmètre.",
        'delais'  => "3 à 8 semaines selon le périmètre, avec des livraisons intermédiaires régulières.",
        'faq' => [
            ['q' => "Pouvez-vous vous déplacer à Lomé ?", 'r' => "Oui, pour un cadrage initial ou une formation d'équipe si le projet le justifie. C'est à deux heures de route de Cotonou. Le reste se mène à distance."],
            ['q' => "La monnaie et les paiements sont-ils les mêmes ?", 'r' => "Oui, FCFA des deux côtés, avec Flooz et T-Money au Togo. Aucun frais de change, aucune complication."],
            ['q' => "Le décalage horaire ?", 'r' => "Aucun. Lomé et Cotonou sont sur le même fuseau."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-transit-lome',
        'nom'      => "transit et logistique portuaire",
        'titre'    => "Digitaliser une activité de transit à Lomé",
        'accroche' => "Dossiers, frais et délais : suivre le corridor sans reconstituer chaque dossier.",
        'intro'    => "Le port de Lomé est le premier port en eau profonde de la sous-région et la porte d'entrée du corridor vers le Burkina Faso, le Mali et le Niger. Un transitaire y traite des dossiers longs, multi-intervenants, avec des frais qui s'accumulent sur plusieurs semaines et des délais de franchise qui coûtent cher dès qu'ils sont dépassés. Le problème n'est pas la complexité du métier : c'est que l'information du dossier vit dans des e-mails, des classeurs et la tête de celui qui le suit.",
        'flux' => [
            "Ouverture de dossier et documents",
            "Dédouanement et formalités",
            "Magasinage et franchise",
            "Transport sur le corridor",
            "Facturation client et règlements",
        ],
        'douleurs' => [
            ['titre' => "Les dépassements de franchise se découvrent trop tard", 'texte' => "La fin de franchise de magasinage se surveille de mémoire. Un dépassement de quelques jours représente un coût sans contrepartie, et il se répète."],
            ['titre' => "Le dossier n'est pas reprenable par un collègue", 'texte' => "Quand celui qui suit le dossier est absent, il faut le reconstituer depuis les e-mails. Le client attend pendant ce temps."],
            ['titre' => "La rentabilité par dossier n'est jamais calculée", 'texte' => "Les frais arrivent en désordre sur plusieurs semaines. La marge réelle sur un dossier se connaît, au mieux, une fois tout soldé."],
        ],
        'solution' => [
            ['titre' => "Un dossier unique par opération", 'texte' => "Documents, statut, intervenants, frais et échéances au même endroit. N'importe quel collègue reprend le dossier en deux minutes."],
            ['titre' => "Des alertes sur les échéances critiques", 'texte' => "Fin de franchise, validité de document, délai de règlement : une alerte automatique quelques jours avant. C'est la fonction qui se rentabilise le plus vite sur ce métier."],
            ['titre' => "Une marge par dossier calculée en continu", 'texte' => "Chaque frais saisi alimente le calcul. La rentabilité se lit pendant l'opération, pas après."],
            ['titre' => "Un suivi consultable par le client", 'texte' => "Un lien de statut que le client consulte lui-même. Moins d'appels, et un argument commercial face aux confrères."],
        ],
        'faq' => [
            ['q' => "Peut-on se connecter au système douanier ?", 'r' => "Quand une interface est disponible, oui. Sinon la saisie reste limitée aux informations utiles à votre suivi commercial, que le système douanier ne couvre pas de toute façon."],
            ['q' => "Nous traitons aussi le corridor vers le Burkina et le Niger.", 'r' => "C'est prévu : chaque dossier porte sa destination, et le transport terrestre entre dans le calcul de marge au même titre que les frais portuaires."],
            ['q' => "Combien de temps pour un outil utile ?", 'r' => "4 à 8 semaines pour un suivi de dossiers avec alertes d'échéances et calcul de marge, selon le nombre d'intervenants."],
        ],
    ],
];
