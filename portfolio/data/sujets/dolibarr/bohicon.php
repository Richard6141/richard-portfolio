<?php
// Intégration Dolibarr à Bohicon, angle ERP differencie le 21/08/2026 : la ville est la
// meme pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-bohicon',
  'ville' => 'Bohicon',
  'ville_slug' => 'bohicon',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Bohicon',
  'accroche' => 'Dolibarr déployé par paliers pour le commerce de gros et l\'agro-transformation, avec ce que Bohicon impose réellement.',
  'intro' => 'Bohicon est un carrefour routier avant d\'être une ville de bureaux. La marchandise entre le matin et repart l\'après-midi. Un ERP y réussit s\'il enregistre une vente en deux secondes, pas s\'il propose trente champs. Dolibarr, c\'est un ERP-CRM open source léger, écrit en PHP et MySQL, qui tourne sur un hébergement mutualisé ordinaire. Sa force est de sa légèreté : il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite même sur une connexion moyenne, et se prend en main en quelques jours ; sa limite est qu\'il couvre moins de terrain qu\'Odoo sur les processus industriels complexes et son interface est plus austère. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Bohicon, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
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
          'texte' => 'J\'interviens pour les entreprises de Gare, Ahouaga, Sodohomè, Passagon et les abords du marché. Je suis basé à Abomey-Calavi : un déplacement à Bohicon pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Dolibarr qui servent vraiment à Bohicon.',
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
      'titre' => 'Ce que coûte une intégration Dolibarr à Bohicon.',
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
        4 => 'Dolibarr est plus rapide a l\'affichage qu\'Odoo sur une connexion moyenne, ce qui sert directement le rythme du comptoir. Son module de caisse est plus sommaire : si votre volume de tickets est eleve, c\'est le point a arbitrer.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Bohicon',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans verifier qu\'il couvre vos processus. La licence est nulle, le parametrage ne l\'est pas, et un outil inadapte coute plus cher qu\'un outil payant adapte.',
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
      'q' => 'Dolibarr convient-il à une entreprise de Bohicon ?',
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
      'q' => 'Intervenez-vous sur place à Bohicon ?',
      'r' => 'Je suis basé à Abomey-Calavi : un déplacement à Bohicon pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
