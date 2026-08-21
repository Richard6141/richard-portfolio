<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitalisation-entreprise-bohicon',
  'ville' => 'Bohicon',
  'ville_slug' => 'bohicon',
  'pays' => 'Bénin',
  'titre' => 'Digitalisation d\'entreprise à Bohicon',
  'accroche' => 'Un carrefour commercial où tout va vite : des outils qui suivent le rythme du terrain.',
  'intro' => 'Bohicon est un nœud routier avant d\'être une ville de bureaux. Les entreprises qui y prospèrent vivent du flux : marchandise qui entre le matin, repart l\'après-midi, clients qui viennent de tout le centre du pays. Dans ce rythme, un outil qui demande dix clics pour enregistrer une vente ne sera jamais utilisé. La digitalisation qui réussit à Bohicon est celle qui s\'insère dans la vitesse existante — trois champs, deux secondes, et on passe au client suivant.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Diagnostic',
      'titre' => 'Les signes qu\'il est temps de digitaliser.',
      'items' => 
      array (
        0 => 'Les ventes de la journée se totalisent le soir, parfois le lendemain.',
        1 => 'Le crédit accordé aux clients réguliers se suit sur un cahier tenu par une seule personne.',
        2 => 'On découvre une rupture de stock au moment où un client la demande.',
        3 => 'Les prix varient selon qui sert, faute de référence unique.',
        4 => 'Impossible de dire quel produit rapporte réellement le plus.',
      ),
    ),
    1 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment je procède à Bohicon.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Chronométrer le geste réel',
          'texte' => 'On mesure combien de temps prend une vente aujourd\'hui. Tout ce que l\'outil ajoute à ce temps sera abandonné en trois semaines. C\'est la contrainte principale à Bohicon.',
        ),
        1 => 
        array (
          'titre' => 'Sécuriser le carnet de crédit',
          'texte' => 'C\'est presque toujours le premier chantier utile : qui doit quoi, depuis quand. L\'information sort d\'un cahier unique et devient consultable par les personnes autorisées.',
        ),
        2 => 
        array (
          'titre' => 'Suivre le stock sur ce qui compte',
          'texte' => 'Pas tout le catalogue d\'emblée : les vingt références qui font l\'essentiel du chiffre. On étend ensuite, une fois l\'habitude prise.',
        ),
        3 => 
        array (
          'titre' => 'Rendre la marge visible',
          'texte' => 'Prix d\'achat, prix de vente, rotation. C\'est souvent la découverte du projet : les produits qu\'on croyait rentables ne le sont pas toujours.',
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
        0 => 'À Bohicon, un premier outil — caisse simplifiée, crédit client et stock sur les références principales, formation comprise — se situe généralement entre 250 000 et 700 000 FCFA. C\'est l\'un des contextes où le retour se mesure le plus vite, parce que le volume de transactions est élevé.',
        1 => '2 à 4 semaines. Le travail de conception est court ; l\'essentiel du temps passe dans l\'ajustement avec l\'équipe en conditions réelles.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos vendeurs n\'auront pas le temps de saisir.',
      'r' => 'C\'est exactement pour ça qu\'on chronomètre le geste actuel avant de concevoir. Si la saisie rallonge la vente, l\'outil est mal conçu — pas l\'équipe mal formée.',
    ),
    1 => 
    array (
      'q' => 'Peut-on garder le cahier en parallèle ?',
      'r' => 'Oui, pendant la bascule. On arrête le double quand l\'équipe fait confiance aux chiffres de l\'écran, jamais sur décision unilatérale.',
    ),
    2 => 
    array (
      'q' => 'Et en cas de coupure d\'électricité ?',
      'r' => 'La saisie se fait depuis un téléphone, qui a sa propre batterie, et fonctionne hors connexion. Une coupure n\'arrête pas la vente.',
    ),
  ),
);
