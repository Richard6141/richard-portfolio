<?php
// Intégration Odoo à Cotonou — angle ERP differencie le 21/08/2026 : la ville est la
// meme pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-odoo-cotonou',
  'ville' => 'Cotonou',
  'ville_slug' => 'cotonou',
  'pays' => 'Bénin',
  'titre' => 'Intégration Odoo à Cotonou',
  'accroche' => 'Odoo déployé par paliers pour l\'import-export et la distribution, avec ce que Cotonou impose réellement.',
  'intro' => 'Cotonou concentre le port, Dantokpa et l\'essentiel des importateurs du pays. Les entreprises y traitent de gros volumes avec des marges serrées : la moindre erreur de stock ou de créance se paie comptant. Odoo, c\'est un ERP complet et modulaire, avec une version open source auto-hébergeable. Sa force est de couvrir plusieurs métiers dans un seul système : ventes, achats, stock, comptabilité, RH, point de vente ; sa limite est qu\'il devient coûteux dès qu\'on veut tordre ses processus standards, et son interface exige une connexion confortable. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Cotonou, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
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
          'texte' => 'À Cotonou, les structures qui tirent un bénéfice réel d\'un ERP sont les importateurs, grossistes, transitaires, commerces de détail multi-points et prestataires de services. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet — je vous le dirai plutôt que de vous équiper inutilement.',
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
          'texte' => 'J\'interviens pour les entreprises de Ganhi, Akpakpa, Dantokpa, Cadjèhoun, Fidjrossè, Godomey et la zone portuaire. Je suis basé à Abomey-Calavi : un déplacement à Cotonou pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Odoo qui servent vraiment à Cotonou.',
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
          'texte' => 'Commandes, réceptions partielles, coûts d\'approvisionnement — base du calcul de marge.',
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
          'texte' => 'Relier Odoo à WhatsApp et au Mobile Money — c\'est là que je fais la différence.',
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
          'texte' => 'On suit une opération complète telle qu\'elle se passe aujourd\'hui. C\'est là qu\'apparaissent les points qui coûtent — jamais ceux qu\'on avait listés.',
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
      'titre' => 'Ce que coûte une intégration Odoo à Cotonou.',
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
      'titre' => 'Un exemple typique à Cotonou.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un importateur de Dantokpa qui reçoit trois conteneurs par mois',
          'texte' => 'Le coût de revient réel d\'un conteneur n\'est connu qu\'une fois tous les frais soldés — souvent après la revente. L\'ERP rassemble fret, douane, magasinage et transport sur un même dossier, et la marge se lit pendant l\'opération au lieu d\'être découverte après.',
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
        2 => 'La seconde particularité est le crédit revendeur. À Dantokpa comme à Akpakpa, une part importante du chiffre part à crédit, avec des règlements partiels en espèces et en Mobile Money. Le paramétrage doit accepter qu\'une facture soit soldée en quatre fois par deux canaux différents — sinon l\'équipe contourne l\'outil et note dans un cahier.',
        3 => 'Enfin, le rythme. Les entreprises cotonoises traitent de gros volumes avec des marges serrées : un écran de saisie mal pensé coûte des heures cumulées chaque semaine. On réduit à l\'essentiel avant d\'ajouter quoi que ce soit.',
        4 => 'Sur ce terrain, Odoo prend l\'avantage grace a son module d\'achats : les receptions partielles et les couts d\'approvisionnement s\'y modelisent nativement, ce qui est exactement ce qu\'exige un dossier d\'importation. En contrepartie, son interface reste lourde pour une saisie rapide au comptoir — on l\'allege ou on la reserve au bureau.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Cotonou',
      'items' => 
      array (
        0 => 'Activer des modules Odoo « parce qu\'ils sont inclus ». Chaque module active est un ecran de plus pour l\'equipe et une raison de plus de decrocher : on n\'ouvre que ce qui sert.',
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
      'r' => 'Oui, et c\'est même le point de départ à Cotonou. Chaque revendeur a son compte, les règlements partiels s\'imputent au fur et à mesure, et l\'encours total devient lisible à tout moment — ce qu\'aucun cahier ne permet.',
    ),
    1 => 
    array (
      'q' => 'Odoo convient-il à une entreprise de Cotonou ?',
      'r' => 'Cela dépend de votre volume et de vos processus, pas de votre ville. Odoo se justifie quand plusieurs services doivent partager les mêmes données et que vos processus restent proches des standards du marché. Si votre besoin tient en une seule fonction, un outil sur mesure sera plus léger et moins cher — et je vous le dirai.',
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
      'q' => 'Intervenez-vous sur place à Cotonou ?',
      'r' => 'Je suis basé à Abomey-Calavi : un déplacement à Cotonou pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
