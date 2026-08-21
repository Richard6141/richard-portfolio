<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitalisation-entreprise-abomey-calavi',
  'ville' => 'Abomey-Calavi',
  'ville_slug' => 'abomey-calavi',
  'pays' => 'Bénin',
  'titre' => 'Digitalisation d\'entreprise à Abomey-Calavi',
  'accroche' => 'Une commune qui grandit vite, avec des structures qui ont dépassé leurs outils.',
  'intro' => 'Abomey-Calavi est l\'une des communes qui grandissent le plus vite du Bénin, et cela se voit dans les entreprises qui s\'y installent : beaucoup ont démarré petit, avec des méthodes qui fonctionnaient à dix clients et qui craquent à deux cents. Écoles privées, cliniques, pharmacies, structures de services : la difficulté n\'est presque jamais technique, elle est organisationnelle. L\'outil qui convenait au démarrage est devenu le goulot d\'étranglement.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Diagnostic',
      'titre' => 'Les signes qu\'il est temps de digitaliser.',
      'items' => 
      array (
        0 => 'Le fichier client ou élève tient dans un tableur que plusieurs personnes modifient en parallèle.',
        1 => 'Les rendez-vous ou inscriptions se prennent par téléphone et se notent sur un registre papier.',
        2 => 'Les relances de paiement se font quand quelqu\'un y pense.',
        3 => 'Une même information existe en plusieurs versions selon qui la consulte.',
        4 => 'La croissance récente a rendu ingérable ce qui fonctionnait il y a deux ans.',
      ),
    ),
    1 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment je procède à Abomey-Calavi.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Identifier ce qui casse à l\'échelle',
          'texte' => 'On cherche précisément ce qui fonctionnait avant et ne fonctionne plus depuis que le volume a augmenté. C\'est presque toujours là que se trouve le vrai chantier, et il est souvent plus petit qu\'on ne le craint.',
        ),
        1 => 
        array (
          'titre' => 'Centraliser une seule donnée de référence',
          'texte' => 'Un fichier client, élève ou patient unique, avec une seule source de vérité. C\'est le socle : tant que la donnée existe en trois versions, aucun outil au-dessus ne tiendra.',
        ),
        2 => 
        array (
          'titre' => 'Automatiser les relances et les rappels',
          'texte' => 'Rappels de rendez-vous, échéances de scolarité, renouvellements : ce sont des tâches répétitives à forte valeur, qui se traitent une fois pour toutes.',
        ),
        3 => 
        array (
          'titre' => 'Ouvrir progressivement aux usagers',
          'texte' => 'Prise de rendez-vous en ligne, consultation d\'un dossier, paiement à distance. On l\'ajoute une fois l\'interne stabilisé, jamais avant.',
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
        0 => 'Une première étape, fichier centralisé et relances automatiques, formation comprise, se situe généralement entre 300 000 et 800 000 FCFA. Un espace en ligne pour les usagers vient ensuite, comme deuxième chantier.',
        1 => '2 à 5 semaines pour la centralisation et les relances. Comptez 6 à 10 semaines de plus pour un espace usager complet.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nous sommes à 20 minutes de Cotonou, cela change quelque chose ?',
      'r' => 'Sur le plan pratique, oui : je suis basé à Abomey-Calavi, donc les réunions sur place ne posent aucun problème. Sur le plan technique, non, l\'essentiel du travail se fait à distance de toute façon.',
    ),
    1 => 
    array (
      'q' => 'Nos données sont sensibles (patients, élèves).',
      'r' => 'C\'est un point de conception : accès par rôle, traçabilité des consultations, sauvegardes chiffrées. On définit ensemble qui voit quoi avant d\'écrire la première ligne de code.',
    ),
    2 => 
    array (
      'q' => 'Peut-on garder nos tableurs en parallèle au début ?',
      'r' => 'Oui, et c\'est même recommandé pendant la période de bascule. On arrête le double quand l\'équipe a confiance, pas avant.',
    ),
  ),
);
