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
  'intro' => 'À Dakar, les startups sont nombreuses, le paiement mobile est massivement adopté et la clientèle est habituée aux services en ligne : l\'ERP n\'y reste pas un outil interne isolé. Il doit dialoguer avec la boutique, les paiements et la livraison, sinon la double saisie s\'installe et personne ne la tient. Dolibarr, ERP léger, n\'a pas de boutique intégrée mais se branche par son API sur celle que vous avez. Je travaille avec Dakar à distance, et l\'heure de décalage laisse la journée de travail intégralement commune.',
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
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Dakar.',
      'paragraphes' => 
      array (
        0 => 'Le premier chantier est un stock unique entre la boutique en ligne et l\'entrepôt. Tant que les deux tiennent chacun leur inventaire, vendre un article déjà écoulé est inévitable, et c\'est la première cause d\'annulation et d\'avis négatif, sur un marché où les avis comptent beaucoup. Les paiements Wave et Orange Money se traitent au démarrage, pas en fin de projet. Si votre boutique fonctionne déjà, je la relie par l\'API au lieu de la refaire. La relance de panier abandonné et le suivi de livraison se greffent ensuite, la relance en quelques jours.',
        1 => 'Côté coût, Dolibarr n\'a pas de licence et tient sur un hébergement mutualisé standard, donc pas de serveur dédié. Une mise en service complète, données reprises et équipe formée, commence à 400 000 FCFA. Le projet avance par chantiers successifs : vous jugez le retour du stock unique avant d\'engager le module suivant. Une fois le cadrage fait, je vous remets un devis détaillé et décomposé, sans frais et sans engagement.',
      ),
    ),
    2 => 
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
    3 => 
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
        4 => 'Dolibarr n\'a pas de boutique intégrée, mais son API REST se connecte proprement à une boutique existante. Pour un e-commerçant dakarois déjà équipé, c\'est souvent le chemin le plus court et le moins cher vers un stock unique.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Dakar',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
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
      'q' => 'Nos clients règlent surtout par Wave et Orange Money. Peut-on les brancher ?',
      'r' => 'Oui, et au Sénégal c\'est un préalable, pas un ajout de fin de projet. Un parcours qui n\'offre pas le moyen de paiement habituel du client perd la vente au dernier écran.',
    ),
    1 => 
    array (
      'q' => 'J\'ai déjà une boutique en ligne : faut-il la reconstruire pour utiliser Dolibarr ?',
      'r' => 'Non, en règle générale. Dolibarr n\'embarque pas de boutique, mais son API REST se connecte proprement à celle qui existe. Pour un e-commerçant déjà équipé, c\'est souvent le chemin le plus court et le moins cher vers un stock unique.',
    ),
    2 => 
    array (
      'q' => 'Ma structure est-elle assez grande pour Dolibarr ?',
      'r' => 'Cela tient à votre volume et à vos processus, pas à l\'adresse. Dolibarr vaut le coup quand vous voulez structurer commercial, stock et facturation sans le poids d\'un ERP lourd. Pour un besoin limité à une seule fonction, un outil sur mesure sera plus léger et moins coûteux, et je vous le dirai.',
    ),
    3 => 
    array (
      'q' => 'Quand mon premier module sera-t-il utilisable ?',
      'r' => 'Il faut compter 4 à 8 semaines pour un premier module en service, formation incluse. Un projet qui touche plusieurs métiers se déroule sur quelques mois, par paliers, sans arrêter l\'activité.',
    ),
    4 => 
    array (
      'q' => 'Si je change d\'intégrateur plus tard, que devient mon système ?',
      'r' => 'Il vous appartient : Dolibarr est open source et auto-hébergé, vous gardez le serveur, la base et les modules. Un autre intégrateur peut reprendre le dossier. Cette clause, je la pose sans attendre qu\'on me la demande.',
    ),
  ),
);
