<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-hotellerie-ouidah',
  'ville' => 'Ouidah',
  'ville_slug' => 'ouidah',
  'pays' => 'Bénin',
  'titre' => 'Digitaliser un hôtel ou une maison d\'hôtes à Ouidah',
  'accroche' => 'Réservation en ligne, acompte sécurisé, planning des chambres sans double réservation.',
  'intro' => 'Une maison d\'hôtes de Ouidah travaille avec une saisonnalité marquée, une clientèle qui réserve de loin et souvent à l\'avance, et un planning qui doit rester juste au chambre près. Deux problèmes concrets reviennent partout : la réservation qu\'on n\'a pas prise parce que personne n\'a répondu au téléphone, et la double réservation née d\'un planning tenu sur papier.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Demande de réservation et disponibilité',
        1 => 'Confirmation et acompte',
        2 => 'Planning des chambres',
        3 => 'Arrivée, séjour, extras',
        4 => 'Facturation, départ et avis client',
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Ce qui bloque',
      'titre' => 'Les points qui coûtent le plus cher.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Les demandes hors horaires se perdent',
          'texte' => 'Un client qui écrit à 23 h ou depuis un autre fuseau ne rappellera pas forcément le lendemain. Sans réponse automatique ni réservation en ligne, la demande part chez le voisin.',
        ),
        1 => 
        array (
          'titre' => 'Le planning papier crée des doubles réservations',
          'texte' => 'Dès que deux personnes prennent des réservations sur des supports différents, l\'erreur devient une question de temps. Et elle coûte un client mécontent plus une nuit perdue.',
        ),
        2 => 
        array (
          'titre' => 'Les annulations tardives ne coûtent rien au client',
          'texte' => 'Sans acompte, une réservation ne vaut qu\'une promesse. Sur une activité saisonnière, une chambre libérée la veille ne se reloue presque jamais.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'La réponse',
      'titre' => 'Ce que je mets en place.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Une réservation en ligne 24 h/24',
          'texte' => 'Disponibilités réelles, réservation possible à toute heure et depuis n\'importe quel pays. La demande nocturne d\'un client de la diaspora cesse d\'être une occasion manquée.',
        ),
        1 => 
        array (
          'titre' => 'Un acompte par Mobile Money ou carte',
          'texte' => 'La réservation n\'est ferme qu\'une fois l\'acompte versé. C\'est la mesure qui réduit le plus vite les annulations de dernière minute.',
        ),
        2 => 
        array (
          'titre' => 'Un planning unique et partagé',
          'texte' => 'Une seule source de vérité pour les chambres, consultable par toute l\'équipe en temps réel. La double réservation devient structurellement impossible.',
        ),
        3 => 
        array (
          'titre' => 'Une demande d\'avis automatique',
          'texte' => 'Un message au départ du client, avec le lien direct vers votre fiche Google. C\'est ainsi qu\'on construit la réputation qui remplit la basse saison.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nous n\'avons que six chambres, est-ce surdimensionné ?',
      'r' => 'Non, et c\'est même sur les petites structures que le gain est le plus net : une réservation captée en plus par semaine rentabilise l\'outil, parce qu\'il n\'y a pas de personnel de réception pour compenser.',
    ),
    1 => 
    array (
      'q' => 'Le paiement en ligne est-il fiable au Bénin ?',
      'r' => 'Oui. Mobile Money MTN et Moov fonctionnent bien pour la clientèle locale, et une passerelle carte bancaire couvre la clientèle étrangère. On met souvent les deux.',
    ),
    2 => 
    array (
      'q' => 'Faut-il quitter les plateformes de réservation ?',
      'r' => 'Non. Elles apportent de la visibilité. L\'objectif est de ne pas dépendre que d\'elles et de récupérer une part de réservations directes, sans commission.',
    ),
  ),
);
