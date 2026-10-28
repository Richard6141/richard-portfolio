<?php
// Intégration Dolibarr à Abomey-Calavi, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-abomey-calavi',
  'ville' => 'Abomey-Calavi',
  'ville_slug' => 'abomey-calavi',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Abomey-Calavi',
  'accroche' => 'Dolibarr déployé par paliers pour les structures de santé et d\'enseignement privé, avec ce que Abomey-Calavi impose réellement.',
  'intro' => 'Une école ou une clinique d\'Abomey-Calavi qui gérait cinquante dossiers à ses débuts en traite aujourd\'hui dix fois plus avec les mêmes outils : c\'est ce que produit la commune qui grandit le plus vite du pays. Dolibarr, un ERP léger sur hébergement mutualisé, couvre l\'essentiel pour une école ou une clinique de taille moyenne : fichier unique, échéanciers, relances, facturation. Il demande moins de formation qu\'Odoo et se prend en main en quelques jours. Mon rôle est de dire quels modules vous servent, dans quel ordre, et lesquels laisser de côté.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Abomey-Calavi impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Abomey-Calavi, les structures qui tirent un bénéfice réel d\'un ERP sont les écoles privées, cliniques et pharmacies de quartier, cabinets, promoteurs immobiliers et commerces de proximité. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne une inscription ou un dossier patient, un échéancier de règlement, une consultation ou un trimestre, une facturation et une relance. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Abomey-Calavi, la difficulté principale est la confidentialité des dossiers et la gestion d\'échéanciers payés en plusieurs tranches. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Godomey, Calavi centre, Tokpa-Zoungo, Zogbadjè, Womey et Akassato. Je suis basé à Cotonou, à une vingtaine de kilomètres : un déplacement à Abomey-Calavi pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Abomey-Calavi.',
      'paragraphes' => 
      array (
        0 => 'Je commence par le fichier unique, car élèves, patients ou clients existent aujourd\'hui en trois versions qui divergent. Ce socle posé, je monte l\'échéancier : scolarités payées en tranches, actes réglés partiellement, c\'est la question « qui doit quoi à cette date » qui demande aujourd\'hui des heures de reconstitution. Les droits par rôle et le journal des consultations se fixent avant le premier paramétrage, jamais après. L\'espace en ligne pour les parents ou les patients vient en dernier, quand l\'interne est stable. On démarre à une date de bascule, le papier restant consultable en archive.',
        1 => 'Comptez à partir de 400 000 FCFA pour une mise en service complète avec reprise des données et formation. Dolibarr tient sur un hébergement mutualisé standard, donc pas de serveur dédié à financer, et la licence est gratuite : ce qui se paie, c\'est le paramétrage. Un devis détaillé suit le cadrage, gratuitement et sans engagement. Je procède par chantiers successifs : vous voyez ce que rapporte le premier avant de lancer le suivant.',
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Cas concret',
      'titre' => 'Un exemple typique à Abomey-Calavi.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Une école privée de Godomey avec 400 élèves',
          'texte' => 'Savoir qui a payé quelle tranche à une date donnée demande aujourd\'hui plusieurs heures de reconstitution. L\'ERP tient l\'échéancier par élève et sort l\'état des impayés par classe en quelques secondes.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qu\'une commune en croissance rapide impose',
      'paragraphes' => 
      array (
        0 => 'Abomey-Calavi absorbe une population qui augmente plus vite que les structures qui la servent. Les écoles, cliniques et pharmacies qui s\'y équipent ont presque toutes le même profil : elles ont démarré petit, avec des méthodes qui fonctionnaient à cinquante dossiers et qui craquent à cinq cents.',
        1 => 'Le besoin n\'est donc pas d\'ajouter des fonctions mais de reprendre le contrôle d\'un volume qui a débordé. La priorité est presque toujours la même : un fichier unique, élèves, patients, clients, qui remplace les trois versions divergentes qui circulent aujourd\'hui.',
        2 => 'Vient ensuite l\'échéancier. Scolarités payées en tranches, actes réglés partiellement, prises en charge : savoir qui doit quoi à une date donnée est la question à laquelle personne ne sait répondre sans plusieurs heures de reconstitution. C\'est ce que l\'ERP règle en premier.',
        3 => 'La confidentialité structure enfin tout le projet. Dossiers d\'élèves, dossiers patients : les droits par rôle et le journal des consultations se définissent avant le premier paramétrage, jamais après.',
        4 => 'Pour une école ou une clinique de taille moyenne, Dolibarr couvre l\'essentiel : fichier unique, échéanciers, relances, facturation. Il demande moins de formation qu\'Odoo et se prend en main en quelques jours, ce qui compte quand l\'équipe n\'est pas à l\'aise avec l\'informatique.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Abomey-Calavi',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
        1 => 'Vouloir numériser rétroactivement des années de registres. C\'est long, cher, et cela n\'aide personne : on démarre à une date de bascule et le papier reste consultable en archive.',
        2 => 'Ouvrir un espace en ligne pour les parents ou les patients avant d\'avoir stabilisé l\'interne. L\'ordre inverse produit des données publiques fausses.',
        3 => 'Partager un compte unique entre plusieurs personnes du secrétariat, ce qui annule toute traçabilité sur des données sensibles.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Les dossiers d\'élèves, parfois de patients, sont confidentiels. Qu\'est-ce qui les protège ?',
      'r' => 'Des droits stricts selon le rôle de chacun, un journal des consultations et des sauvegardes chiffrées. Nous décidons ensemble qui voit quoi avant la première ligne de paramétrage : c\'est une contrainte posée dès la conception, pas un complément ajouté plus tard.',
    ),
    1 => 
    array (
      'q' => 'Une petite école ou une clinique a-t-elle vraiment besoin d\'un ERP ?',
      'r' => 'Cela dépend de votre volume, pas de la commune. Dolibarr vaut le coup quand il faut structurer facturation et suivi sans le budget ni l\'infrastructure d\'un ERP lourd. Si votre besoin tient en une seule fonction, un outil sur mesure sera plus léger et moins cher, et je vous le dirai.',
    ),
    2 => 
    array (
      'q' => 'Dans combien de temps peut-on s\'en servir au quotidien ?',
      'r' => 'Un premier module réellement en service demande 4 à 8 semaines, formation comprise. Un déploiement qui touche plusieurs métiers se fait sur quelques mois, par paliers, sans interrompre votre activité.',
    ),
    3 => 
    array (
      'q' => 'Peut-on faire arriver les messages WhatsApp et les paiements Mobile Money dans Dolibarr ?',
      'r' => 'Oui, avec une automatisation n8n : les demandes reçues sur WhatsApp alimentent Dolibarr et les règlements Mobile Money se rapprochent des factures. Ce n\'est pas natif, c\'est un travail d\'intégration à prévoir dans le budget.',
    ),
    4 => 
    array (
      'q' => 'Mon secrétariat est peu à l\'aise avec l\'informatique et partage un seul accès. Que changez-vous ?',
      'r' => 'Chacun reçoit son propre compte : un accès partagé annule toute traçabilité sur des données sensibles. Je réduis les écrans à l\'utile et je forme sur les vraies données. Basé à Cotonou, à une vingtaine de kilomètres, je me déplace à Abomey-Calavi pour le cadrage comme pour la formation.',
    ),
  ),
);
