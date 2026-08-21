<?php
// Dolibarr x Abidjan — genere le 21/08/2026.
// Squelette commun, substance propre a la ville (secteur, flux, contrainte,
// quartiers, tissu economique) et a l'ERP (modules, budget, positionnement).
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-abidjan',
  'ville' => 'Abidjan',
  'ville_slug' => 'abidjan',
  'pays' => 'Côte d\'Ivoire',
  'titre' => 'Intégration Dolibarr à Abidjan',
  'accroche' => 'Dolibarr déployé par paliers pour le commerce et la distribution, avec ce que Abidjan impose réellement.',
  'intro' => 'Abidjan est le marché le plus structuré d\'Afrique de l\'Ouest francophone. Vos concurrents y sont déjà équipés, et un outil approximatif se remarque immédiatement. Les projets ivoiriens se mènent entièrement à distance, sans décalage horaire avec Cotonou. Dolibarr, c\'est un ERP-CRM open source léger, écrit en PHP et MySQL, qui tourne sur un hébergement mutualisé ordinaire. Sa force est de sa légèreté : il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite même sur une connexion moyenne, et se prend en main en quelques jours ; sa limite est qu\'il couvre moins de terrain qu\'Odoo sur les processus industriels complexes et son interface est plus austère. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Abidjan, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Abidjan impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Abidjan, les structures qui tirent un bénéfice réel d\'un ERP sont les distributeurs multi-points, importateurs, cabinets de services, franchises et e-commerçants. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet — je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne un approvisionnement, un stock réparti sur plusieurs points de vente, une commande en ligne ou en boutique, une livraison et un encaissement mobile. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Abidjan, la difficulté principale est la consolidation du stock entre plusieurs points de vente et l\'intégration des paiements Wave et Orange Money. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Plateau, Treichville, Yopougon, Cocody, Marcory et la zone industrielle de Vridi. Les projets à Abidjan se mènent entièrement à distance, par visioconférence et messagerie, avec des comptes rendus écrits à chaque étape.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Dolibarr qui servent vraiment à Abidjan.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Tiers, prospects et clients',
          'texte' => 'Un fichier unique pour les clients, fournisseurs et prospects, avec l\'historique complet des échanges. Le socle sur lequel tout le reste s\'appuie.',
        ),
        1 => 
        array (
          'titre' => 'Devis, commandes et factures',
          'texte' => 'Le circuit commercial complet, de la proposition au règlement, avec relances des impayés. C\'est le module qui rentabilise Dolibarr le plus vite.',
        ),
        2 => 
        array (
          'titre' => 'Stock et entrepôts',
          'texte' => 'Mouvements, entrepôts multiples et alertes de seuil. Suffisant pour la grande majorité des commerces et distributeurs, sans la complexité d\'un WMS.',
        ),
        3 => 
        array (
          'titre' => 'Projets et temps passé',
          'texte' => 'Utile aux cabinets et prestataires de services : suivi du temps par mission et facturation à l\'avancement.',
        ),
        4 => 
        array (
          'titre' => 'Comptabilité et banques',
          'texte' => 'Rapprochement bancaire, journaux et export vers votre expert-comptable. Le plan OHADA se paramètre, comme sur tout ERP généraliste.',
        ),
        5 => 
        array (
          'titre' => 'Automatisation n8n',
          'texte' => 'Dolibarr expose une API REST propre : relier WhatsApp, le Mobile Money ou un site e-commerce est plus simple et moins cher que sur beaucoup d\'ERP plus lourds.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment se déroule une intégration à Abidjan.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Cadrage sur le flux réel',
          'texte' => 'On suit une opération complète telle qu\'elle se passe aujourd\'hui à Abidjan : un approvisionnement, un stock réparti sur plusieurs points de vente, une commande en ligne ou en boutique, une livraison et un encaissement mobile. C\'est presque toujours là qu\'apparaissent les deux ou trois points qui coûtent le plus — et ce ne sont jamais ceux qu\'on avait listés.',
        ),
        1 => 
        array (
          'titre' => 'Un module mis en production, pas une démonstration',
          'texte' => 'On choisit le module qui règle le point le plus douloureux, on le met en service sur les vraies données, et on mesure le gain avant d\'ouvrir le suivant. Un ERP déployé d\'un bloc est un ERP abandonné.',
        ),
        2 => 
        array (
          'titre' => 'Reprise de l\'existant, à dose choisie',
          'texte' => 'Fichier clients, catalogue et soldes en cours : oui. L\'historique complet des années passées : rarement. Il coûte cher à migrer et importe d\'anciennes erreurs dans un système neuf.',
        ),
        3 => 
        array (
          'titre' => 'Connexion à ce que vous utilisez déjà',
          'texte' => 'WhatsApp reste votre canal client, le Mobile Money votre moyen d\'encaissement. On les relie à Dolibarr par automatisation plutôt que de demander à vos clients de changer leurs habitudes.',
        ),
        4 => 
        array (
          'titre' => 'Formation d\'un référent interne',
          'texte' => 'L\'objectif est que vous n\'ayez plus besoin de moi pour l\'exploitation courante : créer un utilisateur, ajuster un droit, sortir un état. Sans référent formé sur place, aucun ERP ne survit à deux ans.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Budget',
      'titre' => 'Ce que coûte une intégration Dolibarr à Abidjan.',
      'paragraphes' => 
      array (
        0 => 'Dolibarr est gratuit et s\'installe sur un hébergement mutualisé standard, ce qui supprime le coût d\'un serveur dédié. Comptez à partir de 400 000 FCFA pour une mise en service complète avec reprise des données et formation — c\'est l\'option la plus accessible quand le budget est le premier critère.',
        1 => 'Dolibarr se justifie quand vous voulez structurer commercial, stock et facturation sans engager le budget ni l\'infrastructure d\'un ERP lourd. Je découpe systématiquement en chantiers successifs : vous mesurez le retour d\'un module avant d\'engager le suivant. Un devis détaillé et décomposé suit le cadrage, gratuitement et sans engagement.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Dolibarr convient-il à une entreprise de Abidjan ?',
      'r' => 'Cela dépend de votre volume et de vos processus, pas de votre ville. Dolibarr se justifie quand vous voulez structurer commercial, stock et facturation sans engager le budget ni l\'infrastructure d\'un ERP lourd. Si votre besoin tient en une seule fonction, un outil sur mesure sera plus léger et moins cher — et je vous le dirai.',
    ),
    1 => 
    array (
      'q' => 'Combien de temps avant une mise en production ?',
      'r' => 'Comptez 4 à 8 semaines pour un premier module réellement en service, formation comprise. Un déploiement couvrant plusieurs métiers s\'étale sur quelques mois, par paliers, sans jamais interrompre votre activité.',
    ),
    2 => 
    array (
      'q' => 'Peut-on connecter Dolibarr à WhatsApp et au Mobile Money ?',
      'r' => 'Oui, par automatisation n8n. Les demandes reçues sur WhatsApp alimentent Dolibarr, et les règlements Mobile Money se rapprochent des factures. Ce n\'est pas natif : c\'est un travail d\'intégration à budgéter explicitement.',
    ),
    3 => 
    array (
      'q' => 'Intervenez-vous sur place à Abidjan ?',
      'r' => 'Les projets à Abidjan se mènent entièrement à distance, par visioconférence et messagerie, avec des comptes rendus écrits à chaque étape.',
    ),
    4 => 
    array (
      'q' => 'Que se passe-t-il si je change de prestataire ?',
      'r' => 'Dolibarr étant open source et auto-hébergé, vous gardez le serveur, la base et les modules. N\'importe quel intégrateur peut reprendre le dossier. C\'est un argument réel face à un logiciel propriétaire fermé, et une clause que je pose sans qu\'on me la demande.',
    ),
    5 => 
    array (
      'q' => 'Et si mon équipe n\'est pas à l\'aise avec l\'informatique ?',
      'r' => 'C\'est la situation la plus fréquente, et c\'est un critère de conception plutôt qu\'un obstacle. On réduit les écrans à ce qui sert, on forme sur les vraies données pendant le déploiement, et on garde le papier en parallèle le temps que la confiance s\'installe.',
    ),
  ),
);
