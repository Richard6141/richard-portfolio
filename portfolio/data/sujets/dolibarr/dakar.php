<?php
// Intégration Dolibarr à Dakar, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-dakar',
  'ville' => 'Dakar',
  'ville_slug' => 'dakar',
  'pays' => 'Sénégal',
  'titre' => 'Intégration Dolibarr à Dakar',
  'accroche' => 'Dolibarr déployé par paliers pour l\'e-commerce et la distribution, avec ce que Dakar impose réellement.',
  'intro' => 'Dakar est l\'un des écosystèmes tech les plus actifs d\'Afrique francophone, avec une clientèle habituée aux services en ligne. Les projets sénégalais se mènent à distance ; l\'heure de décalage laisse la journée de travail intégralement commune. Dolibarr, c\'est un ERP-CRM open source léger, écrit en PHP et MySQL, qui tourne sur un hébergement mutualisé ordinaire. Sa force est de sa légèreté : il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite même sur une connexion moyenne, et se prend en main en quelques jours ; sa limite est qu\'il couvre moins de terrain qu\'Odoo sur les processus industriels complexes et son interface est plus austère. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Dakar, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Dakar impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Dakar, les structures qui tirent un bénéfice réel d\'un ERP sont les e-commerçants, distributeurs, startups, cabinets de services et importateurs. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne un catalogue, une commande en ligne, un paiement Wave ou Orange Money, une préparation, une livraison suivie et un retour éventuel. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Dakar, la difficulté principale est l\'intégration des paiements mobiles locaux et la justesse du stock entre le site et l\'entrepôt. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Plateau, Almadies, Ouakam, Pikine, Rufisque et la zone de Diamniadio. Les projets à Dakar se mènent entièrement à distance, par visioconférence et messagerie, avec des comptes rendus écrits à chaque étape.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Dolibarr qui servent vraiment à Dakar.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Tiers et clients',
          'texte' => 'Un fichier unique clients, fournisseurs et prospects, avec tout l\'historique.',
        ),
        1 => 
        array (
          'titre' => 'Devis, commandes, factures',
          'texte' => 'Le circuit commercial complet et les relances d\'impayés. Le module qui rentabilise le plus vite.',
        ),
        2 => 
        array (
          'titre' => 'Stock et entrepôts',
          'texte' => 'Mouvements, entrepôts multiples, seuils. Suffisant pour la plupart des commerces.',
        ),
        3 => 
        array (
          'titre' => 'Projets et temps passé',
          'texte' => 'Pour les cabinets et prestataires : suivi par mission, facturation à l\'avancement.',
        ),
        4 => 
        array (
          'titre' => 'Comptabilité et banques',
          'texte' => 'Rapprochement bancaire et export vers votre expert-comptable.',
        ),
        5 => 
        array (
          'titre' => 'Automatisation n8n',
          'texte' => 'API REST propre : relier WhatsApp, Mobile Money ou un site e-commerce reste simple.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment se déroule une intégration à Dakar.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Cadrage sur le flux réel',
          'texte' => 'On suit une opération complète telle qu\'elle se passe aujourd\'hui. C\'est là qu\'apparaissent les points qui coûtent, jamais ceux qu\'on avait listés.',
        ),
        1 => 
        array (
          'titre' => 'Un module en production, pas une démonstration',
          'texte' => 'Mise en service sur les vraies données, gain mesuré, puis on ouvre le suivant. Un ERP déployé d\'un bloc est un ERP abandonné.',
        ),
        2 => 
        array (
          'titre' => 'Reprise de l\'existant, à dose choisie',
          'texte' => 'Clients, catalogue et soldes en cours : oui. L\'historique complet : rarement, il coûte cher et importe d\'anciennes erreurs.',
        ),
        3 => 
        array (
          'titre' => 'Connexion à ce que vous utilisez déjà',
          'texte' => 'WhatsApp et Mobile Money reliés par automatisation, plutôt que de demander à vos clients de changer d\'habitudes.',
        ),
        4 => 
        array (
          'titre' => 'Formation d\'un référent interne',
          'texte' => 'Sans référent formé sur place, aucun ERP ne survit à deux ans.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Budget',
      'titre' => 'Ce que coûte une intégration Dolibarr à Dakar.',
      'paragraphes' => 
      array (
        0 => 'Dolibarr est gratuit et s\'installe sur un hébergement mutualisé standard, ce qui supprime le coût d\'un serveur dédié. Comptez à partir de 400 000 FCFA pour une mise en service complète avec reprise des données et formation, c\'est l\'option la plus accessible quand le budget est le premier critère.',
        1 => 'Dolibarr se justifie quand vous voulez structurer commercial, stock et facturation sans engager le budget ni l\'infrastructure d\'un ERP lourd. Je découpe systématiquement en chantiers successifs : vous mesurez le retour d\'un module avant d\'engager le suivant. Un devis détaillé et décomposé suit le cadrage, gratuitement et sans engagement.',
      ),
    ),
    4 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Cas concret',
      'titre' => 'Un exemple typique à Dakar.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un e-commerçant qui livre dans la région de Dakar',
          'texte' => 'Quand la boutique en ligne et l\'entrepôt tiennent deux inventaires, la vente d\'un article déjà écoulé devient inévitable : c\'est la première cause d\'annulation et d\'avis négatif. Un stock unique supprime la survente.',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qu\'un écosystème tech dense attend',
      'paragraphes' => 
      array (
        0 => 'Dakar est l\'un des pôles technologiques les plus actifs d\'Afrique francophone : startups nombreuses, adoption massive du paiement mobile, clientèle habituée aux services en ligne. Une entreprise qui s\'équipe ici s\'aligne sur un standard local déjà élevé.',
        1 => 'La conséquence pratique est que l\'ERP ne peut pas rester un outil interne isolé. Il doit dialoguer avec la boutique en ligne, les paiements et la livraison, sous peine de créer une double saisie que personne ne tiendra.',
        2 => 'La difficulté dominante est la justesse du stock entre les canaux. Vendre en ligne un article déjà écoulé est la première cause d\'annulation et d\'avis négatif, sur un marché où les avis comptent beaucoup.',
        3 => 'Vient ensuite la relance de panier abandonné, qui n\'est pas une fonction d\'ERP mais une automatisation branchée dessus. C\'est le meilleur retour sur investissement en e-commerce, et cela se met en place en quelques jours.',
        4 => 'Dolibarr n\'a pas de boutique integree, mais son API REST se connecte proprement a une boutique existante. Pour un e-commerçant dakarois déjà équipe, c\'est souvent le chemin le plus court et le moins cher vers un stock unique.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Dakar',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans verifier qu\'il couvre vos processus. La licence est nulle, le parametrage ne l\'est pas, et un outil inadapte coute plus cher qu\'un outil payant adapte.',
        1 => 'Refaire entièrement une boutique fonctionnelle alors qu\'elle peut souvent être reliée au stock sans refonte.',
        2 => 'Traiter Wave et Orange Money comme une option de fin de projet plutôt que comme un préalable.',
        3 => 'Déployer un ERP sans prévoir le suivi de livraison, ce qui reporte toute la charge sur le service client.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Wave et Orange Money sont indispensables chez nous. Sont-ils intégrables ?',
      'r' => 'Oui, et c\'est un préalable au Sénégal, pas une option de fin de projet. Un parcours qui ne propose pas le moyen de paiement habituel du client perd la vente au dernier écran.',
    ),
    1 => 
    array (
      'q' => 'Dolibarr convient-il à une entreprise de Dakar ?',
      'r' => 'Cela dépend de votre volume et de vos processus, pas de votre ville. Dolibarr se justifie quand vous voulez structurer commercial, stock et facturation sans engager le budget ni l\'infrastructure d\'un ERP lourd. Si votre besoin tient en une seule fonction, un outil sur mesure sera plus léger et moins cher, et je vous le dirai.',
    ),
    2 => 
    array (
      'q' => 'Combien de temps avant une mise en production ?',
      'r' => 'Comptez 4 à 8 semaines pour un premier module réellement en service, formation comprise. Un déploiement couvrant plusieurs métiers s\'étale sur quelques mois, par paliers, sans jamais interrompre votre activité.',
    ),
    3 => 
    array (
      'q' => 'Peut-on connecter Dolibarr à WhatsApp et au Mobile Money ?',
      'r' => 'Oui, par automatisation n8n. Les demandes reçues sur WhatsApp alimentent Dolibarr, et les règlements Mobile Money se rapprochent des factures. Ce n\'est pas natif : c\'est un travail d\'intégration à budgéter explicitement.',
    ),
    4 => 
    array (
      'q' => 'Intervenez-vous sur place à Dakar ?',
      'r' => 'Les projets à Dakar se mènent entièrement à distance, par visioconférence et messagerie, avec des comptes rendus écrits à chaque étape.',
    ),
    5 => 
    array (
      'q' => 'Que se passe-t-il si je change de prestataire ?',
      'r' => 'Dolibarr étant open source et auto-hébergé, vous gardez le serveur, la base et les modules. N\'importe quel intégrateur peut reprendre le dossier. C\'est un argument réel face à un logiciel propriétaire fermé, et une clause que je pose sans qu\'on me la demande.',
    ),
    6 => 
    array (
      'q' => 'Et si mon équipe n\'est pas à l\'aise avec l\'informatique ?',
      'r' => 'C\'est la situation la plus fréquente, et c\'est un critère de conception plutôt qu\'un obstacle. On réduit les écrans à ce qui sert, on forme sur les vraies données pendant le déploiement, et on garde le papier en parallèle le temps que la confiance s\'installe.',
    ),
  ),
);
