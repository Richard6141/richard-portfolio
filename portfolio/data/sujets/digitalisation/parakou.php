<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitalisation-entreprise-parakou',
  'ville' => 'Parakou',
  'ville_slug' => 'parakou',
  'pays' => 'Bénin',
  'titre' => 'Digitalisation d\'entreprise à Parakou',
  'accroche' => 'Des outils qui fonctionnent avec une connexion irrégulière et une équipe souvent en déplacement.',
  'intro' => 'Parakou n\'est pas Cotonou, et une digitalisation copiée du sud échoue souvent ici. La connexion est plus capricieuse, les équipes se déplacent vers les zones de collecte, et une partie de l\'activité se traite en dehors du bureau. Un outil qui exige une connexion permanente et un ordinateur fixe ne sera pas utilisé. Ce qui marche à Parakou tient en trois mots : mobile, léger, tolérant aux coupures.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Diagnostic',
      'titre' => 'Les signes qu\'il est temps de digitaliser.',
      'items' => 
      array (
        0 => 'Les données collectées sur le terrain sont recopiées le soir, quand elles ne se perdent pas.',
        1 => 'Il faut attendre le retour d\'une équipe pour connaître les quantités réellement collectées.',
        2 => 'Les outils testés jusqu\'ici ont été abandonnés parce qu\'ils ne fonctionnaient pas hors connexion.',
        3 => 'Les mêmes chiffres circulent en trois versions différentes selon la personne qui les donne.',
      ),
    ),
    1 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment je procède à Parakou.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Partir du terrain, pas du bureau',
          'texte' => 'Le cadrage se fait avec les personnes qui saisissent réellement : agents de collecte, magasiniers, chauffeurs. Un outil conçu depuis le bureau seul ne survit jamais au premier mois.',
        ),
        1 => 
        array (
          'titre' => 'Concevoir pour la coupure',
          'texte' => 'La saisie fonctionne hors connexion et se synchronise quand le réseau revient. Ce n\'est pas une option confortable à Parakou, c\'est la condition pour que l\'outil serve.',
        ),
        2 => 
        array (
          'titre' => 'Alléger jusqu\'à l\'essentiel',
          'texte' => 'Moins de champs, moins d\'écrans, des pages qui se chargent sur un téléphone d\'entrée de gamme en 3G. Chaque élément superflu est un abandon potentiel.',
        ),
        3 => 
        array (
          'titre' => 'Former sur place, en conditions réelles',
          'texte' => 'La prise en main se fait avec le vrai réseau et les vrais téléphones de l\'équipe, pas sur une démonstration en Wi-Fi.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Budget et délais',
      'titre' => 'Ce que ça coûte, ce que ça prend.',
      'paragraphes' => 
      array (
        0 => 'À Parakou, un premier outil de collecte ou de suivi, formation comprise, se situe généralement entre 300 000 et 800 000 FCFA. Le travail sur le mode hors connexion représente une part réelle du budget — c\'est aussi ce qui fait la différence entre un outil utilisé et un outil abandonné.',
        1 => '3 à 6 semaines pour un premier outil de terrain opérationnel, en comptant une phase de test avec les équipes avant déploiement général.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos agents n\'ont pas tous un smartphone récent.',
      'r' => 'C\'est intégré dès la conception : les outils que je livre fonctionnent sur des appareils d\'entrée de gamme et des connexions 3G. C\'est un critère de conception, pas une contrainte à subir.',
    ),
    1 => 
    array (
      'q' => 'Que se passe-t-il quand il n\'y a pas de réseau ?',
      'r' => 'La saisie continue normalement, les données restent sur le téléphone et remontent automatiquement dès que le réseau revient. L\'agent n\'a rien à faire de particulier.',
    ),
    2 => 
    array (
      'q' => 'Nous avons déjà essayé un logiciel qui n\'a pas pris.',
      'r' => 'C\'est fréquent, et la cause est presque toujours la même : outil pensé pour le bureau, imposé au terrain. On inverse l\'ordre — on part de ceux qui saisissent.',
    ),
  ),
);
