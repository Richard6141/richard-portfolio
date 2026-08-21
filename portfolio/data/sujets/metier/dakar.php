<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-ecommerce-dakar',
  'ville' => 'Dakar',
  'ville_slug' => 'dakar',
  'pays' => 'Sénégal',
  'titre' => 'Digitaliser un e-commerce à Dakar',
  'accroche' => 'Paiement Wave et Orange Money, livraison suivie, paniers abandonnés récupérés.',
  'intro' => 'Le e-commerce dakarois est le plus mature de la sous-région francophone : le client compare, paie par mobile en quelques secondes et attend une livraison rapide dans la région. Ce niveau d\'exigence est aussi ce qui rend les erreurs coûteuses, un moyen de paiement manquant, une livraison sans suivi ou un stock faux se traduisent immédiatement en panier abandonné et en avis négatif.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Catalogue, prix et disponibilité',
        1 => 'Panier et paiement mobile',
        2 => 'Préparation de commande',
        3 => 'Livraison et suivi',
        4 => 'Retours, avis et fidélisation',
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
          'titre' => 'Le paiement fait abandonner le panier',
          'texte' => 'Un parcours qui ne propose pas Wave ou Orange Money perd le client au dernier écran, après tout le travail d\'acquisition. C\'est la fuite la plus coûteuse d\'une boutique dakaroise.',
        ),
        1 => 
        array (
          'titre' => 'La livraison n\'est pas suivie',
          'texte' => 'Sans statut consultable, le client écrit pour savoir où en est sa commande. Le service client répond en boucle à la même question.',
        ),
        2 => 
        array (
          'titre' => 'Les paniers abandonnés ne sont jamais relancés',
          'texte' => 'La majorité des paniers n\'aboutit pas. Sans relance automatique, cette part est définitivement perdue alors qu\'elle a déjà coûté en acquisition.',
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
          'titre' => 'Wave, Orange Money et carte au checkout',
          'texte' => 'Les trois moyens attendus, sans redirection hasardeuse. C\'est la première correction à faire, et souvent la plus rentable.',
        ),
        1 => 
        array (
          'titre' => 'Un suivi de livraison automatique',
          'texte' => 'Statut par lien et notification à chaque étape. Les sollicitations du service client baissent nettement.',
        ),
        2 => 
        array (
          'titre' => 'Une relance de panier abandonné',
          'texte' => 'Un message automatique quelques heures après l\'abandon. C\'est l\'automatisation au meilleur retour sur investissement en e-commerce, et elle se met en place en quelques jours.',
        ),
        3 => 
        array (
          'titre' => 'Un stock juste, relié au catalogue',
          'texte' => 'Ce qui est vendu disparaît du site. La survente, qui coûte un client et un avis, devient impossible.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Faut-il refaire notre boutique existante ?',
      'r' => 'Pas nécessairement. Une boutique fonctionnelle peut souvent recevoir les paiements locaux, le suivi et les relances sans refonte. On l\'évalue avant de proposer quoi que ce soit.',
    ),
    1 => 
    array (
      'q' => 'Gérez-vous l\'intégration des livreurs ?',
      'r' => 'Oui, avec vos livreurs internes via une application de suivi, ou par connexion aux prestataires que vous utilisez déjà lorsqu\'ils l\'autorisent.',
    ),
    2 => 
    array (
      'q' => 'Combien de temps pour être opérationnel ?',
      'r' => '6 à 10 semaines pour une boutique complète. Deux à trois semaines si le besoin se limite à ajouter les paiements locaux et les relances sur une boutique existante.',
    ),
  ),
);
