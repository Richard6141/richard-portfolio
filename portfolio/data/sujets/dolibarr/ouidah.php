<?php
// Intégration Dolibarr à Ouidah, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-ouidah',
  'ville' => 'Ouidah',
  'ville_slug' => 'ouidah',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Ouidah',
  'accroche' => 'Dolibarr déployé par paliers pour l\'hôtellerie et la restauration, avec ce que Ouidah impose réellement.',
  'intro' => 'Ouidah vit d\'un tourisme culturel dont la clientèle décide avant d\'arriver. Ici, l\'ERP compte moins que la réservation en ligne : il vient organiser l\'interne une fois que les chambres se remplissent. Dolibarr, c\'est un ERP-CRM open source léger, écrit en PHP et MySQL, qui tourne sur un hébergement mutualisé ordinaire. Sa force est de sa légèreté : il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite même sur une connexion moyenne, et se prend en main en quelques jours ; sa limite est qu\'il couvre moins de terrain qu\'Odoo sur les processus industriels complexes et son interface est plus austère. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Ouidah, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Ouidah impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Ouidah, les structures qui tirent un bénéfice réel d\'un ERP sont les hôtels et maisons d\'hôtes, restaurants, agences réceptives, artisans et commerces touristiques. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne une demande de réservation, un acompte, un planning de chambres, un séjour avec extras et une facturation au départ. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Ouidah, la difficulté principale est la saisonnalité marquée et une clientèle qui réserve de loin, souvent depuis l\'étranger. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Ouidah centre, la route des Pêches, Djègbadji et Pahou. Je suis basé à Cotonou, à une quarantaine de kilomètres : un déplacement à Ouidah pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Dolibarr qui servent vraiment à Ouidah.',
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
      'titre' => 'Comment se déroule une intégration à Ouidah.',
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
      'titre' => 'Ce que coûte une intégration Dolibarr à Ouidah.',
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
      'titre' => 'Un exemple typique à Ouidah.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Une maison d\'hôtes de la route des Pêches',
          'texte' => 'Le planning tenu sur papier finit toujours par produire une double réservation, qui coûte un client mécontent et une nuit perdue. Un planning unique et partagé rend l\'erreur structurellement impossible.',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qu\'une activité saisonnière et lointaine impose',
      'paragraphes' => 
      array (
        0 => 'À Ouidah, le client décide avant d\'arriver, souvent depuis Cotonou, la diaspora ou l\'étranger. Cela déplace la priorité : avant d\'organiser l\'interne, il faut être trouvable et réservable.',
        1 => 'Un ERP arrive donc en second, une fois que les chambres ou les couverts se remplissent. Le déployer avant la visibilité revient à optimiser une activité qu\'on n\'a pas encore.',
        2 => 'Quand il arrive, son premier apport est le planning unique. Deux personnes prenant des réservations sur deux supports produisent tôt ou tard une double réservation, qui coûte un client mécontent et une nuit perdue.',
        3 => 'Le second est l\'acompte. Sans lui, une réservation ne vaut qu\'une promesse, et une chambre libérée la veille ne se reloue presque jamais en basse saison. C\'est la mesure qui change le plus la trésorerie sur une activité courte.',
        4 => 'Dolibarr couvre bien la facturation et le suivi client d\'un hebergeur, mais pas le planning de chambres. On le relie donc a un outil de reservation, ce qui reste plus economique qu\'un ERP complet pour une structure de six a douze chambres.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Ouidah',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans verifier qu\'il couvre vos processus. La licence est nulle, le parametrage ne l\'est pas, et un outil inadapte coute plus cher qu\'un outil payant adapte.',
        1 => 'Investir dans un ERP complet avant d\'avoir réglé la visibilité en ligne et la fiche Google. L\'ordre inverse est presque toujours plus rentable.',
        2 => 'Dépendre uniquement des plateformes de réservation et de leurs commissions, sans canal direct.',
        3 => 'Négliger la version anglaise quand une part de la clientèle vient de l\'étranger.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Notre activité est très saisonnière. Un ERP se rentabilise-t-il ?',
      'r' => 'Il se rentabilise sur la basse saison, pas sur la haute : celle-ci se remplit de toute façon. L\'intérêt est de lisser l\'activité et d\'éviter les annulations tardives, qui sont le vrai coût d\'une saison courte.',
    ),
    1 => 
    array (
      'q' => 'Dolibarr convient-il à une entreprise de Ouidah ?',
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
      'q' => 'Intervenez-vous sur place à Ouidah ?',
      'r' => 'Je suis basé à Cotonou, à une quarantaine de kilomètres : un déplacement à Ouidah pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
