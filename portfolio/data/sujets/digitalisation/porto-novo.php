<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitalisation-entreprise-porto-novo',
  'ville' => 'Porto-Novo',
  'ville_slug' => 'porto-novo',
  'pays' => 'Bénin',
  'titre' => 'Digitalisation d\'entreprise à Porto-Novo',
  'accroche' => 'Des procédures écrites, des dossiers traçables, et une transition qui respecte l\'existant.',
  'intro' => 'Porto-Novo est une ville administrative avant d\'être commerçante, et cela change la façon d\'aborder la digitalisation. Les structures qu\'on y trouve — écoles, établissements para-publics, cabinets, associations — fonctionnent avec des procédures écrites, des validations en cascade et des archives qui doivent rester consultables des années. Ici, le sujet n\'est pas la vitesse : c\'est la traçabilité. Une digitalisation réussie à Porto-Novo est celle qui rend un dossier retrouvable en trente secondes et qui garde la trace de qui a validé quoi.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Diagnostic',
      'titre' => 'Les signes qu\'il est temps de digitaliser.',
      'items' => 
      array (
        0 => 'Retrouver un dossier de l\'année précédente prend plus d\'une demi-heure.',
        1 => 'Les validations circulent en version papier signée, sans copie de sécurité.',
        2 => 'Le même document existe en plusieurs versions et personne ne sait laquelle fait foi.',
        3 => 'Le départ d\'une personne emporte avec lui une partie de la mémoire des procédures.',
        4 => 'Les statistiques annuelles se reconstituent à la main, dossier par dossier.',
      ),
    ),
    1 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment je procède à Porto-Novo.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Écrire la procédure réelle',
          'texte' => 'Avant tout outil, on met à plat le circuit tel qu\'il se pratique, pas tel qu\'il est censé se pratiquer. L\'écart entre les deux est souvent la première source de perte de temps.',
        ),
        1 => 
        array (
          'titre' => 'Numériser l\'entrant, pas l\'archive',
          'texte' => 'On démarre à une date donnée. Reprendre rétroactivement des années d\'archives coûte cher et sert rarement : le papier ancien reste consultable comme il l\'est aujourd\'hui.',
        ),
        2 => 
        array (
          'titre' => 'Tracer les validations',
          'texte' => 'Qui a validé, quand, sur quelle version. C\'est ce qui protège la structure en cas de contestation, et c\'est souvent le vrai bénéfice attendu.',
        ),
        3 => 
        array (
          'titre' => 'Rendre les statistiques automatiques',
          'texte' => 'Les chiffres que vous reconstituez chaque année en fin d\'exercice deviennent consultables en continu, sans travail supplémentaire.',
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
        0 => 'À Porto-Novo, un premier chantier — dossiers centralisés et circuit de validation tracé, formation comprise — se situe généralement entre 400 000 et 900 000 FCFA. Les structures para-publiques ont souvent des contraintes de marché à anticiper : je fournis un devis détaillé et décomposé.',
        1 => '4 à 8 semaines pour un premier circuit opérationnel, en comptant le temps de validation interne propre à ce type de structure.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos procédures sont imposées par la tutelle.',
      'r' => 'L\'outil doit alors épouser la procédure, pas l\'inverse. C\'est le sens du cadrage : on part du circuit obligatoire et on le rend traçable, sans jamais le modifier.',
    ),
    1 => 
    array (
      'q' => 'Faut-il numériser toutes les archives ?',
      'r' => 'Presque jamais. On démarre à une date et on ne remonte que si un besoin précis le justifie. La numérisation rétroactive est le poste qui fait exploser les budgets sans contrepartie.',
    ),
    2 => 
    array (
      'q' => 'Que se passe-t-il si le prestataire disparaît ?',
      'r' => 'Vous restez propriétaire des données et du code, et l\'export reste possible à tout moment. C\'est une clause que je pose systématiquement, sans qu\'on ait à me la demander.',
    ),
  ),
);
