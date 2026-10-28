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
  'intro' => 'À Ouidah, le client choisit avant d\'arriver, souvent depuis Cotonou, la diaspora ou l\'étranger. Dans ce tourisme culturel, la réservation en ligne pèse plus que l\'ERP, qui intervient ensuite pour organiser l\'interne quand les chambres se remplissent. Dolibarr, ERP-CRM open source léger, convient bien à la facturation et au suivi client d\'un hébergeur, mais pas au planning de chambres : on le relie à un outil de réservation, solution moins chère qu\'un ERP complet pour une structure de six à douze chambres. Je vous dis aussi ce qu\'il vaut mieux laisser en dehors.',
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
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Ouidah.',
      'paragraphes' => 
      array (
        0 => 'Je mets en service d\'abord un planning unique, branché sur un outil de réservation puisque Dolibarr ne gère pas les chambres. Deux personnes qui prennent des réservations sur deux supports finissent par produire une double réservation : un client mécontent et une nuit perdue. Vient ensuite l\'acompte, rattaché à la demande de réservation, car une chambre libérée la veille ne se reloue presque jamais en basse saison. Les extras du séjour et la facturation au départ passent en dernier : ils reposent sur un séjour correctement enregistré. Tout cela suppose que votre visibilité en ligne soit déjà réglée.',
        1 => 'Dolibarr s\'obtient sans frais de licence et se contente d\'un hébergement mutualisé standard. Pour une mise en service complète à Ouidah, reprise des données et formation incluses, le point de départ est de 400 000 FCFA. Je découpe en chantiers : vous voyez ce que rapporte le planning avant d\'engager le suivant. Après le cadrage, un devis détaillé et décomposé vous est remis, gratuitement et sans engagement.',
      ),
    ),
    2 => 
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
    3 => 
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
        4 => 'Dolibarr couvre bien la facturation et le suivi client d\'un hébergeur, mais pas le planning de chambres. On le relie donc à un outil de réservation, ce qui reste plus économique qu\'un ERP complet pour une structure de six à douze chambres.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Ouidah',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
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
      'q' => 'Mon établissement ne travaille bien qu\'une partie de l\'année : l\'investissement tient-il ?',
      'r' => 'Il se rentabilise sur la basse saison, pas sur la haute, qui se remplit de toute façon. L\'intérêt est de lisser l\'activité et d\'éviter les annulations tardives, qui sont le vrai coût d\'une saison courte.',
    ),
    1 => 
    array (
      'q' => 'Faut-il équiper l\'interne d\'abord, ou se rendre visible en ligne ?',
      'r' => 'La visibilité d\'abord : être trouvable, avec une fiche Google, et réservable. L\'ERP vient ensuite, quand les chambres ou les couverts se remplissent. L\'ordre inverse est presque toujours moins rentable.',
    ),
    2 => 
    array (
      'q' => 'Dolibarr peut-il tenir mon planning de chambres ?',
      'r' => 'Pas seul. Il couvre bien la facturation et le suivi des clients, et je le relie à un outil de réservation pour le planning. Pour une structure de six à douze chambres, cet assemblage coûte moins qu\'un ERP complet.',
    ),
    3 => 
    array (
      'q' => 'Comment réduire ma dépendance aux plateformes et à leurs commissions ?',
      'r' => 'L\'ERP seul n\'y suffit pas : il faut un canal de réservation direct, visible, avec une version anglaise si une part de vos clients vient de l\'étranger. L\'acompte sécurise ensuite ces réservations directes.',
    ),
    4 => 
    array (
      'q' => 'Au bout de combien de temps le premier module est-il utilisable ?',
      'r' => 'Entre 4 et 8 semaines, formation comprise, pour un premier module réellement en service. L\'extension à d\'autres métiers se fait par paliers sur quelques mois, sans interrompre votre activité.',
    ),
  ),
);
