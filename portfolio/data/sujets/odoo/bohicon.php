<?php
// Intégration Odoo à Bohicon, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-odoo-bohicon',
  'ville' => 'Bohicon',
  'ville_slug' => 'bohicon',
  'pays' => 'Bénin',
  'titre' => 'Intégration Odoo à Bohicon',
  'accroche' => 'Odoo déployé par paliers pour le commerce de gros et l\'agro-transformation, avec ce que Bohicon impose réellement.',
  'intro' => 'Bohicon est un carrefour routier avant d\'être une ville de bureaux. La marchandise entre le matin et repart l\'après-midi. Un ERP y réussit s\'il enregistre une vente en deux secondes, pas s\'il propose trente champs. Odoo, c\'est un ERP complet et modulaire, avec une version open source auto-hébergeable. Sa force est de couvrir plusieurs métiers dans un seul système : ventes, achats, stock, comptabilité, RH, point de vente ; sa limite est qu\'il devient coûteux dès qu\'on veut tordre ses processus standards, et son interface exige une connexion confortable. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Bohicon, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
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
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Odoo qui servent vraiment à Bohicon.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Ventes et CRM',
          'texte' => 'Devis, commandes, suivi des opportunités. Presque toujours le premier module mis en service.',
        ),
        1 => 
        array (
          'titre' => 'Stock et inventaire',
          'texte' => 'Entrées, sorties, emplacements multiples, alertes de seuil.',
        ),
        2 => 
        array (
          'titre' => 'Achats et fournisseurs',
          'texte' => 'Commandes, réceptions partielles, coûts d\'approvisionnement, base du calcul de marge.',
        ),
        3 => 
        array (
          'titre' => 'Comptabilité',
          'texte' => 'Le paramétrage par défaut n\'est pas le plan OHADA : c\'est du réglage à prévoir avec votre comptable.',
        ),
        4 => 
        array (
          'titre' => 'Point de vente',
          'texte' => 'Caisse tactile qui continue de fonctionner pendant une coupure réseau.',
        ),
        5 => 
        array (
          'titre' => 'Automatisation n8n',
          'texte' => 'Relier Odoo à WhatsApp et au Mobile Money, c\'est là que je fais la différence.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'etapes',
      'etiquette' => 'Méthode',
      'titre' => 'Comment se déroule une intégration à Bohicon.',
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
      'titre' => 'Ce que coûte une intégration Odoo à Bohicon.',
      'paragraphes' => 
      array (
        0 => 'Odoo Community n\'a pas de licence, mais le déploiement, le paramétrage, la reprise de données et la formation représentent l\'essentiel du coût. Comptez à partir de 900 000 FCFA pour un premier module en production, davantage pour un déploiement multi-modules. La version Enterprise ajoute un abonnement par utilisateur en devise étrangère, à intégrer au calcul sur trois ans.',
        1 => 'Odoo se justifie quand plusieurs services doivent partager les mêmes données et que vos processus restent proches des standards du marché. Je découpe systématiquement en chantiers successifs : vous mesurez le retour d\'un module avant d\'engager le suivant. Un devis détaillé et décomposé suit le cadrage, gratuitement et sans engagement.',
      ),
    ),
    4 => 
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
    5 => 
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
        4 => 'Le point de vente d\'Odoo est concu pour la vitesse et fonctionne pendant une coupure : c\'est son meilleur argument a Bohicon. Le reste de l\'interface, lui, est trop lourd pour le comptoir, on garde donc Odoo en arrière-plan et la caisse en frontal.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Bohicon',
      'items' => 
      array (
        0 => 'Activer des modules Odoo « parce qu\'ils sont inclus ». Chaque module active est un ecran de plus pour l\'équipe et une raison de plus de decrocher : on n\'ouvre que ce qui sert.',
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
      'q' => 'Nos vendeurs n\'auront pas le temps de saisir pendant la vente. Comment on fait ?',
      'r' => 'On chronomètre le geste actuel avant de paramétrer. Si la saisie rallonge la vente, l\'outil est mal conçu, pas l\'équipe mal formée. À Bohicon, c\'est le critère numéro un, avant toute fonctionnalité.',
    ),
    1 => 
    array (
      'q' => 'Odoo convient-il à une entreprise de Bohicon ?',
      'r' => 'Cela dépend de votre volume et de vos processus, pas de votre ville. Odoo se justifie quand plusieurs services doivent partager les mêmes données et que vos processus restent proches des standards du marché. Si votre besoin tient en une seule fonction, un outil sur mesure sera plus léger et moins cher, et je vous le dirai.',
    ),
    2 => 
    array (
      'q' => 'Combien de temps avant une mise en production ?',
      'r' => 'Comptez 4 à 8 semaines pour un premier module réellement en service, formation comprise. Un déploiement couvrant plusieurs métiers s\'étale sur quelques mois, par paliers, sans jamais interrompre votre activité.',
    ),
    3 => 
    array (
      'q' => 'Peut-on connecter Odoo à WhatsApp et au Mobile Money ?',
      'r' => 'Oui, par automatisation n8n. Les demandes reçues sur WhatsApp alimentent Odoo, et les règlements Mobile Money se rapprochent des factures. Ce n\'est pas natif : c\'est un travail d\'intégration à budgéter explicitement.',
    ),
    4 => 
    array (
      'q' => 'Intervenez-vous sur place à Bohicon ?',
      'r' => 'Je suis basé à Cotonou : un déplacement à Bohicon pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
    ),
    5 => 
    array (
      'q' => 'Que se passe-t-il si je change de prestataire ?',
      'r' => 'Odoo étant open source et auto-hébergé, vous gardez le serveur, la base et les modules. N\'importe quel intégrateur peut reprendre le dossier. C\'est un argument réel face à un logiciel propriétaire fermé, et une clause que je pose sans qu\'on me la demande.',
    ),
    6 => 
    array (
      'q' => 'Et si mon équipe n\'est pas à l\'aise avec l\'informatique ?',
      'r' => 'C\'est la situation la plus fréquente, et c\'est un critère de conception plutôt qu\'un obstacle. On réduit les écrans à ce qui sert, on forme sur les vraies données pendant le déploiement, et on garde le papier en parallèle le temps que la confiance s\'installe.',
    ),
  ),
);
