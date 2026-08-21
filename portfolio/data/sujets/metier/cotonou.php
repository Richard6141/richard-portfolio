<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-import-export-cotonou',
  'ville' => 'Cotonou',
  'ville_slug' => 'cotonou',
  'pays' => 'Bénin',
  'titre' => 'Digitaliser une activité d\'import-export à Cotonou',
  'accroche' => 'Suivre les conteneurs, les frais et les échéances sans reconstituer le dossier à chaque appel.',
  'intro' => 'Le port de Cotonou concentre l\'essentiel des flux de marchandises du pays et dessert aussi le Niger et le Burkina Faso. Les entreprises d\'import-export qui y travaillent gèrent des dossiers longs : commande fournisseur, transit maritime, dédouanement, magasinage, livraison. Chaque étape produit des documents et des frais. Quand tout cela vit dans des e-mails, des classeurs et la mémoire du responsable transit, un simple appel client oblige à reconstituer le dossier.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Commande fournisseur et proforma',
        1 => 'Suivi du transit et date d\'arrivée estimée',
        2 => 'Documents douaniers et connaissement',
        3 => 'Frais réels par dossier : fret, douane, magasinage, transport',
        4 => 'Livraison, facturation et encaissement',
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
          'titre' => 'Le coût de revient réel se calcule trop tard',
          'texte' => 'Les frais arrivent en ordre dispersé sur plusieurs semaines. Beaucoup d\'entreprises ne connaissent la marge réelle d\'un conteneur qu\'une fois tout payé, parfois après avoir déjà revendu à un prix fixé au jugé.',
        ),
        1 => 
        array (
          'titre' => 'L\'état d\'un dossier n\'est pas partageable',
          'texte' => 'Quand le client appelle pour savoir où en est sa marchandise, il faut chercher dans les e-mails et rappeler le transitaire. L\'information existe, elle n\'est simplement rassemblée nulle part.',
        ),
        2 => 
        array (
          'titre' => 'Les échéances se rappellent de mémoire',
          'texte' => 'Fin de franchise de magasinage, validité d\'un document, délai de paiement fournisseur : les oublis coûtent cher et se répètent.',
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
          'titre' => 'Un dossier par conteneur, accessible à toute l\'équipe',
          'texte' => 'Un écran unique qui rassemble le statut, les documents, les frais engagés et les dates clés. Répondre à un client redevient immédiat, y compris pour quelqu\'un qui n\'a pas suivi le dossier.',
        ),
        1 => 
        array (
          'titre' => 'Le coût de revient qui se met à jour tout seul',
          'texte' => 'Chaque frais saisi alimente le calcul. La marge se lit en continu, pas trois semaines après la vente.',
        ),
        2 => 
        array (
          'titre' => 'Des alertes sur les échéances',
          'texte' => 'Fin de franchise, documents à renouveler, paiements à venir : une alerte automatique par WhatsApp ou e-mail, plutôt qu\'un pense-bête.',
        ),
        3 => 
        array (
          'titre' => 'Un suivi client sans appel',
          'texte' => 'Un lien de suivi que le client consulte lui-même. Moins d\'appels entrants pour votre équipe, et une image plus professionnelle face aux confrères.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Faut-il remplacer le logiciel du transitaire ?',
      'r' => 'Non. Votre outil sert votre propre suivi commercial et financier, que le transitaire ne couvre pas. Quand une passerelle est possible, on l\'ajoute ; sinon la saisie reste minime.',
    ),
    1 => 
    array (
      'q' => 'Combien de temps pour un premier outil utile ?',
      'r' => 'Le suivi de dossiers avec calcul du coût de revient se livre généralement en 4 à 8 semaines, selon le nombre d\'intervenants et de types de frais.',
    ),
    2 => 
    array (
      'q' => 'Et si nous travaillons aussi vers le Niger et le Burkina ?',
      'r' => 'C\'est prévu : les dossiers portent leur destination, et les frais de transport terrestre entrent dans le coût de revient au même titre que le fret maritime.',
    ),
  ),
);
