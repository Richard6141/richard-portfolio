<?php
// Abomey-Calavi — digitalisation. Secteur dominant retenu : cliniques et
// pharmacies de quartier, tel que declare dans data/villes/abomey-calavi.php.
declare(strict_types=1);

return [
    'ville'      => 'Abomey-Calavi',
    'ville_slug' => 'abomey-calavi',
    'pays'       => 'Bénin',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-abomey-calavi',
        'titre'    => "Digitalisation d'entreprise à Abomey-Calavi",
        'accroche' => "Une commune qui grandit vite, avec des structures qui ont dépassé leurs outils.",
        'intro'    => "Abomey-Calavi est l'une des communes qui grandissent le plus vite du Bénin, et cela se voit dans les entreprises qui s'y installent : beaucoup ont démarré petit, avec des méthodes qui fonctionnaient à dix clients et qui craquent à deux cents. Écoles privées, cliniques, pharmacies, structures de services : la difficulté n'est presque jamais technique, elle est organisationnelle. L'outil qui convenait au démarrage est devenu le goulot d'étranglement.",
        'signaux'  => [
            "Le fichier client ou élève tient dans un tableur que plusieurs personnes modifient en parallèle.",
            "Les rendez-vous ou inscriptions se prennent par téléphone et se notent sur un registre papier.",
            "Les relances de paiement se font quand quelqu'un y pense.",
            "Une même information existe en plusieurs versions selon qui la consulte.",
            "La croissance récente a rendu ingérable ce qui fonctionnait il y a deux ans.",
        ],
        'etapes' => [
            ['titre' => "Identifier ce qui casse à l'échelle", 'texte' => "On cherche précisément ce qui fonctionnait avant et ne fonctionne plus depuis que le volume a augmenté. C'est presque toujours là que se trouve le vrai chantier, et il est souvent plus petit qu'on ne le craint."],
            ['titre' => "Centraliser une seule donnée de référence", 'texte' => "Un fichier client, élève ou patient unique, avec une seule source de vérité. C'est le socle : tant que la donnée existe en trois versions, aucun outil au-dessus ne tiendra."],
            ['titre' => "Automatiser les relances et les rappels", 'texte' => "Rappels de rendez-vous, échéances de scolarité, renouvellements : ce sont des tâches répétitives à forte valeur, qui se traitent une fois pour toutes."],
            ['titre' => "Ouvrir progressivement aux usagers", 'texte' => "Prise de rendez-vous en ligne, consultation d'un dossier, paiement à distance. On l'ajoute une fois l'interne stabilisé, jamais avant."],
        ],
        'budget'  => "Une première étape — fichier centralisé et relances automatiques, formation comprise — se situe généralement entre 300 000 et 800 000 FCFA. Un espace en ligne pour les usagers vient ensuite, comme deuxième chantier.",
        'delais'  => "2 à 5 semaines pour la centralisation et les relances. Comptez 6 à 10 semaines de plus pour un espace usager complet.",
        'faq' => [
            ['q' => "Nous sommes à 20 minutes de Cotonou, cela change quelque chose ?", 'r' => "Sur le plan pratique, oui : je suis basé à Abomey-Calavi, donc les réunions sur place ne posent aucun problème. Sur le plan technique, non — l'essentiel du travail se fait à distance de toute façon."],
            ['q' => "Nos données sont sensibles (patients, élèves).", 'r' => "C'est un point de conception : accès par rôle, traçabilité des consultations, sauvegardes chiffrées. On définit ensemble qui voit quoi avant d'écrire la première ligne de code."],
            ['q' => "Peut-on garder nos tableurs en parallèle au début ?", 'r' => "Oui, et c'est même recommandé pendant la période de bascule. On arrête le double quand l'équipe a confiance, pas avant."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-clinique-abomey-calavi',
        'nom'      => "cliniques et pharmacies",
        'titre'    => "Digitaliser une clinique ou une pharmacie à Abomey-Calavi",
        'accroche' => "Dossiers patients, rendez-vous et stock de médicaments, sans registre papier.",
        'intro'    => "Les structures de santé de proximité d'Abomey-Calavi absorbent une population en forte croissance avec des moyens constants. Le registre papier et le téléphone y tiennent encore la plus grande part de l'organisation. Le risque n'est pas seulement la perte de temps : c'est le dossier introuvable au moment de la consultation, la rupture de stock découverte au comptoir, et le rendez-vous oublié qui laisse un créneau vide.",
        'flux' => [
            "Prise de rendez-vous et accueil",
            "Dossier patient et historique",
            "Consultation, prescription et actes",
            "Stock de médicaments et dates de péremption",
            "Facturation, encaissement et prise en charge",
        ],
        'douleurs' => [
            ['titre' => "Le dossier patient n'est pas retrouvable rapidement", 'texte' => "Un registre papier ne se cherche pas par nom en trois secondes. En consultation, cela signifie soit du temps perdu, soit une décision prise sans l'historique."],
            ['titre' => "Les ruptures de stock se découvrent au comptoir", 'texte' => "Sans suivi en continu ni seuil d'alerte, le manque se constate au moment où un patient en a besoin. Et les péremptions se repèrent trop tard."],
            ['titre' => "Les rendez-vous non honorés ne sont pas anticipés", 'texte' => "Sans rappel automatique, une part significative des créneaux reste vide sans possibilité de les réattribuer."],
        ],
        'solution' => [
            ['titre' => "Un dossier patient consultable en quelques secondes", 'texte' => "Recherche par nom ou téléphone, historique complet des passages, accès limité selon le rôle de chacun. La confidentialité est une contrainte de conception, pas une option."],
            ['titre' => "Un stock avec seuils et alertes de péremption", 'texte' => "Alerte automatique sous un seuil défini, et signalement des lots qui approchent de leur date. Les ruptures et les pertes se traitent avant, pas après."],
            ['titre' => "Des rappels de rendez-vous automatiques", 'texte' => "Un SMS ou message WhatsApp la veille. C'est la mesure la plus simple à mettre en place et l'une des plus rentables."],
            ['titre' => "Une facturation reliée aux actes", 'texte' => "Ce qui est réalisé alimente la facture, y compris pour les prises en charge. Moins d'oublis de facturation, et une clôture de journée qui prend quelques minutes."],
        ],
        'faq' => [
            ['q' => "Les données de santé imposent-elles des précautions particulières ?", 'r' => "Oui, et elles structurent le projet : accès strictement par rôle, journal des consultations, sauvegardes chiffrées, et suppression de tout accès partagé. On définit la matrice des droits avant de développer."],
            ['q' => "Faut-il tout basculer d'un coup ?", 'r' => "Non. On commence en général par les rendez-vous et le stock, qui donnent un gain immédiat sans toucher au dossier médical. Le dossier patient vient ensuite, une fois l'équipe en confiance."],
            ['q' => "Que deviennent les registres papier existants ?", 'r' => "On ne les saisit pas rétroactivement, sauf besoin précis : c'est long et rarement rentable. On démarre à une date donnée, et le papier reste consultable comme archive."],
        ],
    ],
];
