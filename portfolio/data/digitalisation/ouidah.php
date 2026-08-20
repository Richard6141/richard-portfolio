<?php
// Ouidah — secteur dominant : hotels, maisons d'hotes et restauration,
// tel que declare dans data/villes/ouidah.php.
declare(strict_types=1);

return [
    'ville'      => 'Ouidah',
    'ville_slug' => 'ouidah',
    'pays'       => 'Bénin',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-ouidah',
        'titre'    => "Digitalisation d'entreprise à Ouidah",
        'accroche' => "Une activité saisonnière et une clientèle qui vient de loin : être trouvable avant d'être équipé.",
        'intro'    => "Ouidah vit d'un tourisme culturel et mémoriel dont la clientèle vient d'ailleurs — de Cotonou, de la diaspora, de l'étranger. C'est ce qui distingue la digitalisation ici de celle de n'importe quelle autre ville du Bénin : votre client décide avant d'arriver, souvent depuis un autre pays, sur la base de ce qu'il trouve en ligne. La visibilité et la réservation à distance passent donc avant l'outillage interne. Un établissement invisible sur internet perd la réservation au profit du voisin, quelle que soit la qualité de son accueil.",
        'signaux'  => [
            "Les réservations se prennent uniquement par téléphone, aux heures ouvrables.",
            "Un client étranger ne peut ni voir les disponibilités ni réserver hors de vos horaires.",
            "L'établissement n'apparaît pas ou mal quand on le cherche depuis l'extérieur du Bénin.",
            "Les avis en ligne ne sont ni sollicités ni suivis.",
            "L'activité des périodes creuses n'est jamais anticipée.",
        ],
        'etapes' => [
            ['titre' => "Être trouvable d'abord", 'texte' => "Fiche Google complète, photos réelles, horaires exacts, avis sollicités. C'est presque toujours le chantier au meilleur retour à Ouidah, et il coûte peu."],
            ['titre' => "Permettre de réserver sans vous appeler", 'texte' => "Un client à Paris ou Montréal ne téléphonera pas au Bénin pour vérifier une disponibilité. Un formulaire de demande, même simple, capte cette réservation."],
            ['titre' => "Encaisser à distance", 'texte' => "Un acompte payé en ligne sécurise la réservation et réduit les annulations de dernière minute, qui sont le vrai coût d'une activité saisonnière."],
            ['titre' => "Organiser l'interne ensuite", 'texte' => "Planning des chambres, suivi des arrivées, historique client. Utile, mais après la visibilité : un bon outil interne ne remplit pas un établissement vide."],
        ],
        'budget'  => "À Ouidah, la mise en visibilité — fiche Google, site avec demande de réservation, photos — se situe généralement entre 250 000 et 600 000 FCFA. Un système de réservation avec paiement d'acompte en ligne vient ensuite, comme deuxième étape.",
        'delais'  => "2 à 4 semaines pour la visibilité et la demande de réservation. 4 à 8 semaines de plus pour la réservation avec paiement intégré.",
        'faq' => [
            ['q' => "Nous sommes complets en haute saison, à quoi bon ?", 'r' => "C'est précisément l'argument pour la basse saison. Un établissement visible et réservable en ligne lisse son activité : la haute saison, elle, se remplit de toute façon."],
            ['q' => "Faut-il un site en anglais ?", 'r' => "Si votre clientèle est en partie étrangère, une version anglaise même réduite change beaucoup. On peut commencer par les pages essentielles seulement."],
            ['q' => "Les commissions des plateformes de réservation sont élevées.", 'r' => "Raison de plus pour avoir votre propre canal. L'objectif n'est pas de quitter les plateformes mais de reprendre une part des réservations en direct, sans commission."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-hotellerie-ouidah',
        'nom'      => "hôtellerie et maisons d'hôtes",
        'titre'    => "Digitaliser un hôtel ou une maison d'hôtes à Ouidah",
        'accroche' => "Réservation en ligne, acompte sécurisé, planning des chambres sans double réservation.",
        'intro'    => "Une maison d'hôtes de Ouidah travaille avec une saisonnalité marquée, une clientèle qui réserve de loin et souvent à l'avance, et un planning qui doit rester juste au chambre près. Deux problèmes concrets reviennent partout : la réservation qu'on n'a pas prise parce que personne n'a répondu au téléphone, et la double réservation née d'un planning tenu sur papier.",
        'flux' => [
            "Demande de réservation et disponibilité",
            "Confirmation et acompte",
            "Planning des chambres",
            "Arrivée, séjour, extras",
            "Facturation, départ et avis client",
        ],
        'douleurs' => [
            ['titre' => "Les demandes hors horaires se perdent", 'texte' => "Un client qui écrit à 23 h ou depuis un autre fuseau ne rappellera pas forcément le lendemain. Sans réponse automatique ni réservation en ligne, la demande part chez le voisin."],
            ['titre' => "Le planning papier crée des doubles réservations", 'texte' => "Dès que deux personnes prennent des réservations sur des supports différents, l'erreur devient une question de temps. Et elle coûte un client mécontent plus une nuit perdue."],
            ['titre' => "Les annulations tardives ne coûtent rien au client", 'texte' => "Sans acompte, une réservation ne vaut qu'une promesse. Sur une activité saisonnière, une chambre libérée la veille ne se reloue presque jamais."],
        ],
        'solution' => [
            ['titre' => "Une réservation en ligne 24 h/24", 'texte' => "Disponibilités réelles, réservation possible à toute heure et depuis n'importe quel pays. La demande nocturne d'un client de la diaspora cesse d'être une occasion manquée."],
            ['titre' => "Un acompte par Mobile Money ou carte", 'texte' => "La réservation n'est ferme qu'une fois l'acompte versé. C'est la mesure qui réduit le plus vite les annulations de dernière minute."],
            ['titre' => "Un planning unique et partagé", 'texte' => "Une seule source de vérité pour les chambres, consultable par toute l'équipe en temps réel. La double réservation devient structurellement impossible."],
            ['titre' => "Une demande d'avis automatique", 'texte' => "Un message au départ du client, avec le lien direct vers votre fiche Google. C'est ainsi qu'on construit la réputation qui remplit la basse saison."],
        ],
        'faq' => [
            ['q' => "Nous n'avons que six chambres, est-ce surdimensionné ?", 'r' => "Non, et c'est même sur les petites structures que le gain est le plus net : une réservation captée en plus par semaine rentabilise l'outil, parce qu'il n'y a pas de personnel de réception pour compenser."],
            ['q' => "Le paiement en ligne est-il fiable au Bénin ?", 'r' => "Oui. Mobile Money MTN et Moov fonctionnent bien pour la clientèle locale, et une passerelle carte bancaire couvre la clientèle étrangère. On met souvent les deux."],
            ['q' => "Faut-il quitter les plateformes de réservation ?", 'r' => "Non. Elles apportent de la visibilité. L'objectif est de ne pas dépendre que d'elles et de récupérer une part de réservations directes, sans commission."],
        ],
    ],
];
