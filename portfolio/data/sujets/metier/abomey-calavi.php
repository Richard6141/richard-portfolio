<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-clinique-abomey-calavi',
  'ville' => 'Abomey-Calavi',
  'ville_slug' => 'abomey-calavi',
  'pays' => 'Bénin',
  'titre' => 'Digitaliser une clinique ou une pharmacie à Abomey-Calavi',
  'accroche' => 'Dossiers patients, rendez-vous et stock de médicaments, sans registre papier.',
  'intro' => 'Les structures de santé de proximité d\'Abomey-Calavi absorbent une population en forte croissance avec des moyens constants. Le registre papier et le téléphone y tiennent encore la plus grande part de l\'organisation. Le risque n\'est pas seulement la perte de temps : c\'est le dossier introuvable au moment de la consultation, la rupture de stock découverte au comptoir, et le rendez-vous oublié qui laisse un créneau vide.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Prise de rendez-vous et accueil',
        1 => 'Dossier patient et historique',
        2 => 'Consultation, prescription et actes',
        3 => 'Stock de médicaments et dates de péremption',
        4 => 'Facturation, encaissement et prise en charge',
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
          'titre' => 'Le dossier patient n\'est pas retrouvable rapidement',
          'texte' => 'Un registre papier ne se cherche pas par nom en trois secondes. En consultation, cela signifie soit du temps perdu, soit une décision prise sans l\'historique.',
        ),
        1 => 
        array (
          'titre' => 'Les ruptures de stock se découvrent au comptoir',
          'texte' => 'Sans suivi en continu ni seuil d\'alerte, le manque se constate au moment où un patient en a besoin. Et les péremptions se repèrent trop tard.',
        ),
        2 => 
        array (
          'titre' => 'Les rendez-vous non honorés ne sont pas anticipés',
          'texte' => 'Sans rappel automatique, une part significative des créneaux reste vide sans possibilité de les réattribuer.',
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
          'titre' => 'Un dossier patient consultable en quelques secondes',
          'texte' => 'Recherche par nom ou téléphone, historique complet des passages, accès limité selon le rôle de chacun. La confidentialité est une contrainte de conception, pas une option.',
        ),
        1 => 
        array (
          'titre' => 'Un stock avec seuils et alertes de péremption',
          'texte' => 'Alerte automatique sous un seuil défini, et signalement des lots qui approchent de leur date. Les ruptures et les pertes se traitent avant, pas après.',
        ),
        2 => 
        array (
          'titre' => 'Des rappels de rendez-vous automatiques',
          'texte' => 'Un SMS ou message WhatsApp la veille. C\'est la mesure la plus simple à mettre en place et l\'une des plus rentables.',
        ),
        3 => 
        array (
          'titre' => 'Une facturation reliée aux actes',
          'texte' => 'Ce qui est réalisé alimente la facture, y compris pour les prises en charge. Moins d\'oublis de facturation, et une clôture de journée qui prend quelques minutes.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Les données de santé imposent-elles des précautions particulières ?',
      'r' => 'Oui, et elles structurent le projet : accès strictement par rôle, journal des consultations, sauvegardes chiffrées, et suppression de tout accès partagé. On définit la matrice des droits avant de développer.',
    ),
    1 => 
    array (
      'q' => 'Faut-il tout basculer d\'un coup ?',
      'r' => 'Non. On commence en général par les rendez-vous et le stock, qui donnent un gain immédiat sans toucher au dossier médical. Le dossier patient vient ensuite, une fois l\'équipe en confiance.',
    ),
    2 => 
    array (
      'q' => 'Que deviennent les registres papier existants ?',
      'r' => 'On ne les saisit pas rétroactivement, sauf besoin précis : c\'est long et rarement rentable. On démarre à une date donnée, et le papier reste consultable comme archive.',
    ),
  ),
);
