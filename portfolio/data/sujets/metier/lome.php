<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-transit-lome',
  'ville' => 'Lomé',
  'ville_slug' => 'lome',
  'pays' => 'Togo',
  'titre' => 'Digitaliser une activité de transit à Lomé',
  'accroche' => 'Dossiers, frais et délais : suivre le corridor sans reconstituer chaque dossier.',
  'intro' => 'Le port de Lomé est le premier port en eau profonde de la sous-région et la porte d\'entrée du corridor vers le Burkina Faso, le Mali et le Niger. Un transitaire y traite des dossiers longs, multi-intervenants, avec des frais qui s\'accumulent sur plusieurs semaines et des délais de franchise qui coûtent cher dès qu\'ils sont dépassés. Le problème n\'est pas la complexité du métier : c\'est que l\'information du dossier vit dans des e-mails, des classeurs et la tête de celui qui le suit.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Ouverture de dossier et documents',
        1 => 'Dédouanement et formalités',
        2 => 'Magasinage et franchise',
        3 => 'Transport sur le corridor',
        4 => 'Facturation client et règlements',
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
          'titre' => 'Les dépassements de franchise se découvrent trop tard',
          'texte' => 'La fin de franchise de magasinage se surveille de mémoire. Un dépassement de quelques jours représente un coût sans contrepartie, et il se répète.',
        ),
        1 => 
        array (
          'titre' => 'Le dossier n\'est pas reprenable par un collègue',
          'texte' => 'Quand celui qui suit le dossier est absent, il faut le reconstituer depuis les e-mails. Le client attend pendant ce temps.',
        ),
        2 => 
        array (
          'titre' => 'La rentabilité par dossier n\'est jamais calculée',
          'texte' => 'Les frais arrivent en désordre sur plusieurs semaines. La marge réelle sur un dossier se connaît, au mieux, une fois tout soldé.',
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
          'titre' => 'Un dossier unique par opération',
          'texte' => 'Documents, statut, intervenants, frais et échéances au même endroit. N\'importe quel collègue reprend le dossier en deux minutes.',
        ),
        1 => 
        array (
          'titre' => 'Des alertes sur les échéances critiques',
          'texte' => 'Fin de franchise, validité de document, délai de règlement : une alerte automatique quelques jours avant. C\'est la fonction qui se rentabilise le plus vite sur ce métier.',
        ),
        2 => 
        array (
          'titre' => 'Une marge par dossier calculée en continu',
          'texte' => 'Chaque frais saisi alimente le calcul. La rentabilité se lit pendant l\'opération, pas après.',
        ),
        3 => 
        array (
          'titre' => 'Un suivi consultable par le client',
          'texte' => 'Un lien de statut que le client consulte lui-même. Moins d\'appels, et un argument commercial face aux confrères.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Peut-on se connecter au système douanier ?',
      'r' => 'Quand une interface est disponible, oui. Sinon la saisie reste limitée aux informations utiles à votre suivi commercial, que le système douanier ne couvre pas de toute façon.',
    ),
    1 => 
    array (
      'q' => 'Nous traitons aussi le corridor vers le Burkina et le Niger.',
      'r' => 'C\'est prévu : chaque dossier porte sa destination, et le transport terrestre entre dans le calcul de marge au même titre que les frais portuaires.',
    ),
    2 => 
    array (
      'q' => 'Combien de temps pour un outil utile ?',
      'r' => '4 à 8 semaines pour un suivi de dossiers avec alertes d\'échéances et calcul de marge, selon le nombre d\'intervenants.',
    ),
  ),
);
