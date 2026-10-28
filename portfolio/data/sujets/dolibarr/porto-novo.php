<?php
// Intégration Dolibarr à Porto-Novo, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-porto-novo',
  'ville' => 'Porto-Novo',
  'ville_slug' => 'porto-novo',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Porto-Novo',
  'accroche' => 'Dolibarr déployé par paliers pour l\'enseignement privé et les structures para-publiques, avec ce que Porto-Novo impose réellement.',
  'intro' => 'À Porto-Novo, on ne demande pas à un ERP d\'aller vite, on lui demande de prouver. Les structures y travaillent avec des procédures écrites et des validations en cascade, et la question revient toujours : où est le dossier, et qui a validé quoi ? Dolibarr, un ERP-CRM open source léger, se loge sur l\'hébergement mutualisé que vous avez déjà. Il garde la trace des documents et de leurs statuts, mais ses circuits de validation restent plus simples que ceux d\'Odoo : si votre tutelle exige des approbations à plusieurs niveaux, nous le vérifions ensemble avant tout choix. Je vous dis aussi ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Porto-Novo impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Porto-Novo, les structures qui tirent un bénéfice réel d\'un ERP sont les établissements scolaires, structures para-publiques, cabinets, associations et artisans organisés. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne un dossier entrant, un circuit de validation, une pièce justificative, une décision archivée et un état statistique annuel. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Porto-Novo, la difficulté principale est la traçabilité des validations et la conservation des pièces sur plusieurs exercices. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Ouando, Djègan-Kpèvi, Attaké, Houinmè et Adjina. Je suis basé à Cotonou, à une trentaine de kilomètres : un déplacement à Porto-Novo pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Porto-Novo.',
      'paragraphes' => 
      array (
        0 => 'Je commence par le dossier entrant et son circuit de validation, pas par les ventes ni par le stock. Chaque étape reçoit un statut et une date : on sait qui a validé quoi sans rouvrir un classeur. Les pièces justificatives se rattachent ensuite à ce dossier, puis la décision est archivée au même endroit. Cet ordre répond à la contrainte de la ville, conserver les pièces sur plusieurs exercices. L\'état statistique annuel arrive en dernier, parce qu\'il se nourrit de ce qui a été tracé avant. Le paramétrage suit la procédure imposée par la tutelle, il ne la réforme pas.',
        1 => 'La licence de Dolibarr ne coûte rien et un hébergement mutualisé standard suffit, donc aucun serveur dédié à payer. Pour une mise en service complète à Porto-Novo, avec reprise des données et formation, comptez à partir de 400 000 FCFA. J\'avance par chantiers successifs : le circuit des dossiers d\'abord, un autre module seulement quand le premier a prouvé son utilité. Une fois le cadrage fait, vous recevez un devis détaillé poste par poste, gratuit et sans engagement.',
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Cas concret',
      'titre' => 'Un exemple typique à Porto-Novo.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un établissement scolaire qui doit justifier trois exercices',
          'texte' => 'Retrouver un dossier de l\'année précédente prend une demi-heure et personne ne sait quelle version fait foi. L\'ERP horodate chaque validation et rend le dossier consultable en quelques secondes, avec sa trace complète.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qu\'une ville administrative attend d\'un ERP',
      'paragraphes' => 
      array (
        0 => 'À Porto-Novo, les structures fonctionnent avec des procédures écrites, des validations en cascade et des archives qui doivent rester consultables plusieurs exercices. Ce n\'est pas la vitesse qu\'on y cherche, c\'est la preuve.',
        1 => 'Un ERP y réussit s\'il répond à deux questions : où est le dossier, et qui a validé quoi. Tout le reste, tableaux de bord, automatisations sophistiquées, vient après, et souvent ne vient jamais parce que le besoin réel était celui-là.',
        2 => 'Le paramétrage doit donc épouser le circuit obligatoire plutôt que de proposer un circuit idéal. Quand une procédure est imposée par une tutelle, l\'ERP la trace ; il ne la réforme pas.',
        3 => 'La production des états annuels est le second gain attendu. Les statistiques que vous reconstituez chaque fin d\'exercice deviennent consultables en continu, sans travail supplémentaire, c\'est souvent ce qui justifie le projet à lui seul.',
        4 => 'Dolibarr trace les documents et leurs statuts, mais ses circuits de validation restent plus rudimentaires que ceux d\'Odoo. Si votre tutelle impose des approbations en plusieurs niveaux, c\'est le point à vérifier avant de choisir.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Porto-Novo',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
        1 => 'Choisir un outil dont on ne peut pas exporter les données. Dans une structure qui doit justifier sur plusieurs années, c\'est disqualifiant.',
        2 => 'Vouloir dématérialiser la signature avant d\'avoir tracé le circuit. On commence par savoir qui valide, ensuite seulement comment.',
        3 => 'Sous-estimer le temps de validation interne : dans ce type de structure, il pèse plus lourd que le développement.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Notre tutelle impose sa procédure. Faudra-t-il la modifier pour entrer dans l\'outil ?',
      'r' => 'Non. Je pars du circuit obligatoire et je le rends traçable. Un outil qui vous pousse à toucher une procédure imposée est mal réglé.',
    ),
    1 => 
    array (
      'q' => 'Dolibarr gère-t-il des approbations à plusieurs niveaux ?',
      'r' => 'Il trace les documents et leurs statuts, mais ses circuits de validation sont plus rudimentaires que ceux d\'Odoo. Si votre tutelle impose plusieurs niveaux d\'approbation, c\'est le point à vérifier avant de choisir.',
    ),
    2 => 
    array (
      'q' => 'Pourra-t-on retrouver un dossier d\'il y a trois exercices ?',
      'r' => 'C\'est le but. Chaque validation est horodatée, et le dossier se consulte en quelques secondes avec sa trace complète, là où il faut aujourd\'hui une demi-heure pour le retrouver sans savoir quelle version fait foi.',
    ),
    3 => 
    array (
      'q' => 'Quand le premier circuit sera-t-il réellement utilisé ?',
      'r' => 'Comptez 4 à 8 semaines pour un premier module en service, formation comprise. Si plusieurs métiers sont concernés, le déploiement s\'étale ensuite sur quelques mois, par paliers.',
    ),
    4 => 
    array (
      'q' => 'Que deviennent nos archives si nous changeons de prestataire ?',
      'r' => 'Elles restent chez vous : Dolibarr est open source et auto-hébergé, vous gardez le serveur, la base et les modules, et n\'importe quel intégrateur peut reprendre le dossier. Pour une structure qui doit justifier sur plusieurs années, pouvoir exporter ses données est une exigence.',
    ),
  ),
);
