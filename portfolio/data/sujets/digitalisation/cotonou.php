<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitalisation-entreprise-cotonou',
  'ville' => 'Cotonou',
  'ville_slug' => 'cotonou',
  'pays' => 'Bénin',
  'titre' => 'Digitalisation d\'entreprise à Cotonou',
  'accroche' => 'Passer du cahier et de WhatsApp à des outils qui tiennent quand l\'activité monte.',
  'intro' => 'À Cotonou, la plupart des entreprises que je rencontre ne partent pas de zéro : elles ont déjà un téléphone qui sonne, des commandes qui rentrent et un carnet qui déborde. Le problème n\'est pas l\'absence d\'outils, c\'est qu\'ils ne se parlent pas. Les commandes arrivent sur WhatsApp, le stock vit dans un cahier, les factures se font sur Word et la comptabilité se reconstitue en fin de mois. Digitaliser, ici, ce n\'est pas tout remplacer : c\'est relier ce qui existe déjà et supprimer les doubles saisies.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Diagnostic',
      'titre' => 'Les signes qu\'il est temps de digitaliser.',
      'items' => 
      array (
        0 => 'La même information est saisie deux ou trois fois : sur WhatsApp, dans le cahier, puis dans le tableur.',
        1 => 'Personne ne sait dire le stock exact sans aller compter physiquement.',
        2 => 'Quand un employé est absent, une partie de l\'activité s\'arrête parce que l\'information est dans sa tête ou dans son téléphone.',
        3 => 'Les relances clients se font de mémoire, donc certaines n\'ont jamais lieu.',
        4 => 'Le chiffre d\'affaires réel du mois n\'est connu qu\'après plusieurs jours de reconstitution.',
      ),
    ),
    1 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment je procède à Cotonou.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Cadrer sur le terrain, pas sur le papier',
          'texte' => 'On suit une commande de bout en bout, telle qu\'elle se passe vraiment aujourd\'hui : qui la reçoit, où elle est notée, qui prépare, qui facture, qui encaisse. C\'est presque toujours à ce moment qu\'on découvre les deux ou trois points qui coûtent le plus de temps, et ce ne sont jamais ceux qu\'on imaginait.',
        ),
        1 => 
        array (
          'titre' => 'Traiter d\'abord le point le plus douloureux',
          'texte' => 'Un seul chantier à la fois, choisi parce qu\'il fait gagner du temps dès la première semaine. Le plus souvent à Cotonou : le suivi de stock ou la facturation. On mesure le gain avant de passer à la suite.',
        ),
        2 => 
        array (
          'titre' => 'Relier au lieu de remplacer',
          'texte' => 'WhatsApp reste le canal client, parce que c\'est là que sont vos clients. Mais ce qui y transite alimente automatiquement le stock et les factures. On garde les habitudes, on supprime la ressaisie.',
        ),
        3 => 
        array (
          'titre' => 'Former l\'équipe pendant, pas après',
          'texte' => 'Un outil que l\'équipe n\'utilise pas est un outil perdu. La prise en main se fait sur les vraies commandes, pendant le développement, pas dans une session de formation en fin de projet.',
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
        0 => 'À Cotonou, une première étape utile, facturation ou suivi de stock, formation comprise, se situe généralement entre 300 000 et 900 000 FCFA selon la complexité. Une plateforme métier complète dépasse ce cadre. Je découpe volontairement en chantiers successifs : vous mesurez le retour avant d\'engager la suite.',
        1 => 'Un premier chantier utile est livré en 2 à 5 semaines. Une digitalisation complète s\'étale sur plusieurs mois, par paliers, sans jamais arrêter l\'activité.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Faut-il abandonner WhatsApp ?',
      'r' => 'Non, et ce serait une erreur. Vos clients y sont, ils y resteront. L\'objectif est que ce qui arrive sur WhatsApp alimente automatiquement vos outils, au lieu d\'être recopié à la main.',
    ),
    1 => 
    array (
      'q' => 'Mon équipe n\'est pas à l\'aise avec l\'informatique.',
      'r' => 'C\'est la situation la plus fréquente, et c\'est un critère de conception, pas un obstacle. Un outil pensé pour une équipe peu à l\'aise est plus simple pour tout le monde : moins de champs, moins d\'écrans, des libellés en français courant.',
    ),
    2 => 
    array (
      'q' => 'Par où commencer avec un petit budget ?',
      'r' => 'Par le point qui vous fait perdre le plus de temps chaque semaine. Souvent la facturation ou le suivi de stock. Un chantier ciblé coûte moins cher qu\'une refonte et se rentabilise plus vite.',
    ),
    3 => 
    array (
      'q' => 'Et si l\'activité change dans un an ?',
      'r' => 'C\'est prévu dès le cadrage : on choisit des outils qu\'on peut faire évoluer, et vous restez propriétaire des données. Une digitalisation qui vous enferme est une digitalisation ratée.',
    ),
  ),
);
