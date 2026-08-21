<?php
// Intégration Odoo à Abidjan, angle ERP differencie le 21/08/2026 : la ville est la
// meme pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-odoo-abidjan',
  'ville' => 'Abidjan',
  'ville_slug' => 'abidjan',
  'pays' => 'Côte d\'Ivoire',
  'titre' => 'Intégration Odoo à Abidjan',
  'accroche' => 'Odoo déployé par paliers pour le commerce et la distribution, avec ce que Abidjan impose réellement.',
  'intro' => 'Abidjan est le marché le plus structuré d\'Afrique de l\'Ouest francophone. Vos concurrents y sont déjà équipés, et un outil approximatif se remarque immédiatement. Les projets ivoiriens se mènent entièrement à distance, sans décalage horaire avec Cotonou. Odoo, c\'est un ERP complet et modulaire, avec une version open source auto-hébergeable. Sa force est de couvrir plusieurs métiers dans un seul système : ventes, achats, stock, comptabilité, RH, point de vente ; sa limite est qu\'il devient coûteux dès qu\'on veut tordre ses processus standards, et son interface exige une connexion confortable. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Abidjan, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Abidjan impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Abidjan, les structures qui tirent un bénéfice réel d\'un ERP sont les distributeurs multi-points, importateurs, cabinets de services, franchises et e-commerçants. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne un approvisionnement, un stock réparti sur plusieurs points de vente, une commande en ligne ou en boutique, une livraison et un encaissement mobile. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Abidjan, la difficulté principale est la consolidation du stock entre plusieurs points de vente et l\'intégration des paiements Wave et Orange Money. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Plateau, Treichville, Yopougon, Cocody, Marcory et la zone industrielle de Vridi. Les projets à Abidjan se mènent entièrement à distance, par visioconférence et messagerie, avec des comptes rendus écrits à chaque étape.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Odoo qui servent vraiment à Abidjan.',
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
      'titre' => 'Comment se déroule une intégration à Abidjan.',
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
      'titre' => 'Ce que coûte une intégration Odoo à Abidjan.',
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
      'titre' => 'Un exemple typique à Abidjan.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un distributeur avec quatre points de vente à Cocody et Yopougon',
          'texte' => 'Un article disponible dans une boutique reste invisible pour les autres : le stock global existe mais personne ne peut l\'exploiter. Un stock consolidé rend les transferts décidables sur des chiffres.',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qu\'un marché mature attend',
      'paragraphes' => 
      array (
        0 => 'Abidjan est le marché le plus structuré d\'Afrique de l\'Ouest francophone. Vos concurrents y sont souvent déjà équipés, et le niveau d\'exigence de la clientèle est plus élevé qu\'ailleurs dans la sous-région.',
        1 => 'Cela change la nature du projet : il ne s\'agit plus de combler un manque mais de tenir un niveau. Un ERP approximatif se remarque immédiatement, en interne comme chez les clients.',
        2 => 'La difficulté dominante à Abidjan est la consolidation multi-points. Un article disponible dans une boutique reste invisible pour les autres : le stock global existe mais personne ne peut l\'exploiter. C\'est le premier chantier dans la plupart des cas.',
        3 => 'Le second est l\'intégration des paiements. Wave et Orange Money ne sont pas des options sur ce marché : un parcours qui ne les propose pas perd le client au dernier écran, après tout le coût d\'acquisition.',
        4 => 'La gestion multi-entrepots et multi-societes d\'Odoo repond directement a la consolidation multi-points abidjanaise, sans developpement specifique. C\'est le cas ou son cout se justifie le plus clairement.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Abidjan',
      'items' => 
      array (
        0 => 'Activer des modules Odoo « parce qu\'ils sont inclus ». Chaque module active est un ecran de plus pour l\'equipe et une raison de plus de decrocher : on n\'ouvre que ce qui sert.',
        1 => 'Empiler des outils sans jamais les relier. Beaucoup d\'entreprises abidjanaises ont déjà investi : les faire communiquer coûte souvent dix fois moins qu\'une refonte.',
        2 => 'Lancer une boutique en ligne sans stock consolidé, ce qui produit des ventes d\'articles déjà écoulés.',
        3 => 'Choisir un prestataire sur le seul critère du prix, sans clause de propriété du code et des données.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos concurrents abidjanais sont déjà équipés. Qu\'est-ce qui change avec vous ?',
      'r' => 'Le rapport qualité-prix, essentiellement. Un intégrateur basé au Bénin travaille structurellement sous le marché ivoirien à qualité comparable. Si la présence physique est déterminante pour votre projet, je vous le dirai plutôt que de forcer.',
    ),
    1 => 
    array (
      'q' => 'Odoo convient-il à une entreprise de Abidjan ?',
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
      'q' => 'Intervenez-vous sur place à Abidjan ?',
      'r' => 'Les projets à Abidjan se mènent entièrement à distance, par visioconférence et messagerie, avec des comptes rendus écrits à chaque étape.',
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
