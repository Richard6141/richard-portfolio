<?php
// Intégration Dolibarr à Bohicon, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-bohicon',
  'ville' => 'Bohicon',
  'ville_slug' => 'bohicon',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Bohicon',
  'accroche' => 'Dolibarr déployé par paliers pour le commerce de gros et l\'agro-transformation, avec ce que Bohicon impose réellement.',
  'intro' => 'À Bohicon, la marchandise entre le matin et repart l\'après-midi, avec des clients venus de tout le centre du pays. Un ERP n\'y a de chance que s\'il enregistre une vente en deux secondes, pas s\'il propose trente champs. Dolibarr a ici un atout : il s\'affiche plus vite qu\'Odoo sur une connexion moyenne. Sa faiblesse est un module de caisse plus sommaire, à arbitrer si vos tickets sont nombreux. Je vous dis quels modules garder, dans quel ordre, et ce qu\'il vaut mieux laisser dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Bohicon impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Bohicon, les structures qui tirent un bénéfice réel d\'un ERP sont les grossistes et demi-grossistes, agro-transformateurs, transporteurs et commerces du carrefour. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne un arrivage, une mise en stock par lot, une vente au comptant ou à crédit, un encours revendeur et un réapprovisionnement. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Bohicon, la difficulté principale est la vitesse de la vente au comptoir : tout écran qui rallonge le geste sera contourné. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Gare, Ahouaga, Sodohomè, Passagon et les abords du marché. Je suis basé à Cotonou : un déplacement à Bohicon pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Bohicon.',
      'paragraphes' => 
      array (
        0 => 'Je mesure d\'abord le geste de vente actuel, chronomètre en main, puis je dessine l\'écran à partir de ce chiffre : dix secondes de plus qu\'aujourd\'hui et l\'outil est contourné en trois semaines. Le premier chantier est donc le comptoir, avec un prix de référence modifiable et la marge calculée sur le prix réellement pratiqué. Le carnet de crédit suit : un compte par revendeur rend l\'encours visible, et les relances reposent sur des critères plutôt que sur la mémoire. Le catalogue démarre par les vingt références qui font l\'essentiel du chiffre.',
        1 => 'Une mise en service complète, avec reprise des données et formation, démarre à 400 000 FCFA. La licence de Dolibarr est gratuite et l\'outil se loge sur un hébergement mutualisé standard, sans serveur dédié. Le cadrage débouche sur un devis détaillé, gratuit et sans engagement. Je fonctionne par chantiers successifs : le comptoir d\'abord, puis vous mesurez son effet avant de décider d\'ouvrir le suivant.',
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Cas concret',
      'titre' => 'Un exemple typique à Bohicon.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un grossiste du carrefour qui sert cinquante revendeurs par jour',
          'texte' => 'L\'encours total dû par les revendeurs n\'est calculé nulle part, alors qu\'il représente souvent plusieurs mois de trésorerie. Un compte par revendeur le rend visible, et les relances se déclenchent sur des critères au lieu de la mémoire.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce que le rythme du carrefour impose',
      'paragraphes' => 
      array (
        0 => 'Bohicon vit du flux : la marchandise entre le matin et repart l\'après-midi, avec des clients venus de tout le centre du pays. Dans ce rythme, la contrainte numéro un d\'un ERP n\'est pas fonctionnelle, elle est chronométrique.',
        1 => 'Concrètement : si enregistrer une vente prend dix secondes de plus qu\'aujourd\'hui, l\'outil sera contourné en trois semaines. On mesure donc le geste actuel avant de paramétrer quoi que ce soit, et on conçoit à partir de ce chiffre.',
        2 => 'Le second chantier est le carnet de crédit. L\'encours dû par les revendeurs représente souvent plusieurs mois de trésorerie et n\'est calculé nulle part. Le rendre visible change immédiatement les décisions, avant même toute automatisation.',
        3 => 'Vient enfin la marge par référence. Quand les prix d\'achat varient d\'un arrivage à l\'autre et que les remises se négocient au cas par cas, la rentabilité réelle se perd. C\'est souvent la découverte du projet : les produits qu\'on croyait rentables ne le sont pas.',
        4 => 'Dolibarr est plus rapide à l\'affichage qu\'Odoo sur une connexion moyenne, ce qui sert directement le rythme du comptoir. Son module de caisse est plus sommaire : si votre volume de tickets est élevé, c\'est le point à arbitrer.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Bohicon',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
        1 => 'Imposer un prix figé par article. À Bohicon le prix se négocie : il faut un prix de référence modifiable, avec la marge réelle calculée sur le prix pratiqué.',
        2 => 'Vouloir référencer tout le catalogue dès le départ. On commence par les vingt références qui font l\'essentiel du chiffre.',
        3 => 'Choisir un outil qui exige un ordinateur allumé en permanence dans un contexte de coupures fréquentes.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Mes vendeurs servent à la chaîne et n\'ont pas le temps de saisir. Comment procédez-vous ?',
      'r' => 'Je chronomètre le geste actuel avant de paramétrer quoi que ce soit. Si la saisie allonge la vente, c\'est l\'outil qui est mal conçu, pas l\'équipe mal formée. À Bohicon, ce critère passe avant toute fonctionnalité.',
    ),
    1 => 
    array (
      'q' => 'Un grossiste de Bohicon a-t-il intérêt à passer à un ERP ?',
      'r' => 'Cela dépend de son volume et de ses processus. Dolibarr convient quand on veut structurer vente, stock et facturation sans le budget d\'un ERP lourd. Si votre besoin tient en une seule fonction, un outil sur mesure sera plus léger et moins cher, et je vous le dirai.',
    ),
    2 => 
    array (
      'q' => 'Quand pourrai-je compter sur un premier module ?',
      'r' => 'Comptez 4 à 8 semaines pour un premier module réellement en service, formation comprise. Un projet qui couvre plusieurs métiers s\'étale sur quelques mois, par paliers, sans jamais interrompre votre activité.',
    ),
    3 => 
    array (
      'q' => 'Je négocie les prix au cas par cas. L\'outil le supporte-t-il ?',
      'r' => 'Oui, à condition de ne pas figer un prix par article. Je prévois un prix de référence modifiable, et la marge réelle se calcule sur le prix pratiqué. C\'est souvent là qu\'on découvre que des produits jugés rentables ne le sont pas.',
    ),
    4 => 
    array (
      'q' => 'Peut-on relier WhatsApp et le Mobile Money à Dolibarr ?',
      'r' => 'Oui, avec une automatisation n8n. Les demandes reçues sur WhatsApp alimentent Dolibarr et les règlements Mobile Money se rapprochent des factures. Ce n\'est pas natif : c\'est un travail d\'intégration à budgéter. Basé à Cotonou, je me déplace à Bohicon pour le cadrage et la formation.',
    ),
  ),
);
