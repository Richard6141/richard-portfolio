<?php
// Intégration Dolibarr à Cotonou, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-cotonou',
  'ville' => 'Cotonou',
  'ville_slug' => 'cotonou',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Cotonou',
  'accroche' => 'Dolibarr déployé par paliers pour l\'import-export et la distribution, avec ce que Cotonou impose réellement.',
  'intro' => 'Cotonou concentre le port, Dantokpa et l\'essentiel des importateurs du pays. Les entreprises y traitent de gros volumes avec des marges serrées : la moindre erreur de stock ou de créance se paie comptant. Dolibarr, c\'est un ERP-CRM open source léger, écrit en PHP et MySQL, qui tourne sur un hébergement mutualisé ordinaire. Sa force est de sa légèreté : il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite même sur une connexion moyenne, et se prend en main en quelques jours ; sa limite est qu\'il couvre moins de terrain qu\'Odoo sur les processus industriels complexes et son interface est plus austère. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Cotonou, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Cotonou impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Cotonou, les structures qui tirent un bénéfice réel d\'un ERP sont les importateurs, grossistes, transitaires, commerces de détail multi-points et prestataires de services. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne une commande fournisseur, un conteneur, un dédouanement, une mise en stock, une vente à crédit et un règlement en plusieurs tranches. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Cotonou, la difficulté principale est la coexistence du comptant et du crédit revendeur, avec des règlements partiels en espèces et en Mobile Money. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Ganhi, Akpakpa, Dantokpa, Cadjèhoun, Fidjrossè, Godomey et la zone portuaire. Je suis basé à Cotonou : un rendez-vous dans vos locaux pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Dolibarr qui servent vraiment à Cotonou.',
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
      'titre' => 'Comment se déroule une intégration à Cotonou.',
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
      'titre' => 'Ce que coûte une intégration Dolibarr à Cotonou.',
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
      'titre' => 'Un exemple typique à Cotonou.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un importateur de Dantokpa qui reçoit trois conteneurs par mois',
          'texte' => 'Le coût de revient réel d\'un conteneur n\'est connu qu\'une fois tous les frais soldés, souvent après la revente. L\'ERP rassemble fret, douane, magasinage et transport sur un même dossier, et la marge se lit pendant l\'opération au lieu d\'être découverte après.',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce que le port change à tout projet ERP',
      'paragraphes' => 
      array (
        0 => 'Cotonou n\'est pas une ville de commerce comme une autre : c\'est le point d\'entrée de la marchandise pour le Bénin, mais aussi pour une partie du Niger et du Burkina Faso. Une entreprise qui s\'y équipe ne gère pas seulement des ventes, elle gère des dossiers d\'importation dont le cycle s\'étale sur des semaines et dont les frais arrivent en ordre dispersé.',
        1 => 'Cela a une conséquence directe sur le paramétrage : le coût de revient ne peut pas être un simple prix d\'achat. Il doit agréger le fret, la douane, le magasinage et le transport terrestre, et rester recalculable quand un frais tombe trois semaines après la vente. Un ERP paramétré comme pour un commerce de détail donne des marges fausses à Cotonou.',
        2 => 'La seconde particularité est le crédit revendeur. À Dantokpa comme à Akpakpa, une part importante du chiffre part à crédit, avec des règlements partiels en espèces et en Mobile Money. Le paramétrage doit accepter qu\'une facture soit soldée en quatre fois par deux canaux différents, sinon l\'équipe contourne l\'outil et note dans un cahier.',
        3 => 'Enfin, le rythme. Les entreprises cotonoises traitent de gros volumes avec des marges serrées : un écran de saisie mal pensé coûte des heures cumulées chaque semaine. On réduit à l\'essentiel avant d\'ajouter quoi que ce soit.',
        4 => 'Dolibarr n\'egale pas Odoo sur la modelisation d\'un dossier d\'importation complexe : le cout de revient multi-frais s\'y construit avec plus d\'efforts. En revanche il s\'installe sur l\'hebergement que vous avez déjà, s\'affiche vite, et coute une fraction du deploiement, un arbitrage souvent gagnant quand le volume de dossiers reste mesure.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Cotonou',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans verifier qu\'il couvre vos processus. La licence est nulle, le parametrage ne l\'est pas, et un outil inadapte coute plus cher qu\'un outil payant adapte.',
        1 => 'Vouloir couvrir l\'import, le stock, la vente et la comptabilité dès le premier mois. C\'est la cause d\'échec numéro un ici : l\'équipe décroche, et six mois plus tard le cahier est toujours là.',
        2 => 'Négliger le paramétrage du coût de revient parce qu\'il est complexe. C\'est pourtant la seule raison valable de s\'équiper quand on importe.',
        3 => 'Confier les mêmes droits à tout le monde pour aller plus vite. Dans une entreprise où plusieurs personnes encaissent, la traçabilité par utilisateur n\'est pas un luxe.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos revendeurs achètent à crédit et règlent en plusieurs fois, parfois en espèces, parfois par Mobile Money. Est-ce gérable ?',
      'r' => 'Oui, et c\'est même le point de départ à Cotonou. Chaque revendeur a son compte, les règlements partiels s\'imputent au fur et à mesure, et l\'encours total devient lisible à tout moment, ce qu\'aucun cahier ne permet.',
    ),
    1 => 
    array (
      'q' => 'Dolibarr convient-il à une entreprise de Cotonou ?',
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
      'q' => 'Intervenez-vous sur place à Cotonou ?',
      'r' => 'Je suis basé à Cotonou : un rendez-vous dans vos locaux pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
