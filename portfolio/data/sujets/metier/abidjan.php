<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-commerce-abidjan',
  'ville' => 'Abidjan',
  'ville_slug' => 'abidjan',
  'pays' => 'Côte d\'Ivoire',
  'titre' => 'Digitaliser un commerce ou une distribution à Abidjan',
  'accroche' => 'Vendre en ligne, suivre les livraisons et relier les points de vente.',
  'intro' => 'Le commerce abidjanais est le plus avancé de la sous-région sur la vente en ligne : la clientèle achète depuis son téléphone, paie en Mobile Money ou par carte, et attend une livraison en 24 à 48 heures dans le district. Pour un distributeur ou une enseigne multi-points, la difficulté n\'est plus de vendre en ligne mais de tenir la promesse — un stock juste, une livraison suivie, et des points de vente qui partagent la même information.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Catalogue et prix par canal',
        1 => 'Commande en ligne ou en boutique',
        2 => 'Stock consolidé multi-points',
        3 => 'Préparation et livraison',
        4 => 'Encaissement et retours',
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
          'titre' => 'Le stock en ligne ne reflète pas le stock réel',
          'texte' => 'Quand la boutique et le site tiennent deux inventaires, la vente en ligne d\'un article déjà vendu en magasin est inévitable. C\'est la première cause d\'annulation et de client perdu.',
        ),
        1 => 
        array (
          'titre' => 'La livraison n\'est pas suivie',
          'texte' => 'Sans statut consultable, le client appelle pour savoir où en est sa commande. Le service client passe son temps à répondre à une question qui devrait se régler seule.',
        ),
        2 => 
        array (
          'titre' => 'Les points de vente ne partagent rien',
          'texte' => 'Un article disponible dans une boutique reste invisible pour une autre. Le stock global existe, mais personne ne peut l\'exploiter.',
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
          'titre' => 'Un stock unique pour tous les canaux',
          'texte' => 'Une seule source de vérité, mise à jour par chaque vente d\'où qu\'elle vienne. La survente devient structurellement impossible.',
        ),
        1 => 
        array (
          'titre' => 'Un suivi de livraison partagé avec le client',
          'texte' => 'Statut consultable par lien, notification à chaque étape. Les appels entrants au service client chutent nettement.',
        ),
        2 => 
        array (
          'titre' => 'Une vue consolidée des points de vente',
          'texte' => 'Ce qui est disponible, où, et en quelle quantité. Les transferts entre boutiques se décident sur des chiffres.',
        ),
        3 => 
        array (
          'titre' => 'Les paiements locaux intégrés',
          'texte' => 'Mobile Money Orange, MTN et Wave, plus carte bancaire. Un client qui ne trouve pas son moyen de paiement habituel abandonne son panier.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Faut-il repartir de zéro si nous avons déjà un site ?',
      'r' => 'Rarement. Un site existant peut souvent être relié à un stock consolidé sans être refait. On évalue ce point dès le cadrage, avant toute proposition de refonte.',
    ),
    1 => 
    array (
      'q' => 'Gérez-vous l\'intégration des livreurs ?',
      'r' => 'Oui, soit avec vos livreurs internes via une application de suivi, soit par connexion aux prestataires que vous utilisez déjà, quand ils exposent une interface.',
    ),
    2 => 
    array (
      'q' => 'Combien de temps pour une boutique en ligne opérationnelle ?',
      'r' => '6 à 10 semaines pour une boutique reliée au stock et aux paiements locaux. Moins si le catalogue est réduit et déjà structuré.',
    ),
  ),
);
