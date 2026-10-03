<?php
// Intégration Odoo à Porto-Novo, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-odoo-porto-novo',
  'ville' => 'Porto-Novo',
  'ville_slug' => 'porto-novo',
  'pays' => 'Bénin',
  'titre' => 'Intégration Odoo à Porto-Novo',
  'accroche' => 'Odoo déployé par paliers pour l\'enseignement privé et les structures para-publiques, avec ce que Porto-Novo impose réellement.',
  'intro' => 'Porto-Novo est une ville administrative. Les structures y fonctionnent avec des procédures écrites et des validations en cascade : ce qu\'on attend d\'un ERP ici, c\'est d\'abord de retrouver un dossier et de prouver qui a validé quoi. Odoo, c\'est un ERP complet et modulaire, avec une version open source auto-hébergeable. Sa force est de couvrir plusieurs métiers dans un seul système : ventes, achats, stock, comptabilité, RH, point de vente ; sa limite est qu\'il devient coûteux dès qu\'on veut tordre ses processus standards, et son interface exige une connexion confortable. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Porto-Novo, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
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
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Odoo qui servent vraiment à Porto-Novo.',
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
      'titre' => 'Comment se déroule une intégration à Porto-Novo.',
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
      'titre' => 'Ce que coûte une intégration Odoo à Porto-Novo.',
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
    5 => 
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
        4 => 'L\'atout d\'Odoo à Porto-Novo est son moteur de validation : les circuits d\'approbation en cascade s\'y paramètrent sans développement. C\'est précisément ce qu\'attend une structure qui doit prouver qui a validé quoi.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Porto-Novo',
      'items' => 
      array (
        0 => 'Activer des modules Odoo « parce qu\'ils sont inclus ». Chaque module active est un ecran de plus pour l\'équipe et une raison de plus de decrocher : on n\'ouvre que ce qui sert.',
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
      'q' => 'Nos procédures sont imposées par la tutelle. L\'ERP va-t-il nous obliger à les changer ?',
      'r' => 'Non, l\'inverse : le paramétrage épouse le circuit obligatoire et le rend traçable. Si un ERP vous demande de modifier une procédure imposée, c\'est qu\'il est mal paramétré.',
    ),
    1 => 
    array (
      'q' => 'Odoo convient-il à une entreprise de Porto-Novo ?',
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
      'q' => 'Intervenez-vous sur place à Porto-Novo ?',
      'r' => 'Je suis basé à Cotonou, à une trentaine de kilomètres : un déplacement à Porto-Novo pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
