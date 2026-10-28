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
  'intro' => 'Un conteneur arrive au port de Cotonou, et son coût de revient réel n\'est connu qu\'une fois tous les frais soldés, souvent après la revente. C\'est le quotidien des importateurs de Dantokpa et de la zone portuaire, où les volumes sont lourds et les marges serrées. Pour eux, Dolibarr est un ERP léger qui s\'installe sur l\'hébergement mutualisé que vous avez déjà. Il modélise moins bien qu\'Odoo les dossiers d\'importation les plus complexes, mais il reste rapide et abordable. Mon rôle est de retenir ce qui sert votre activité et de laisser le reste de côté.',
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
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Cotonou.',
      'paragraphes' => 
      array (
        0 => 'Je commence par le dossier d\'importation, parce que c\'est lui qui fausse les marges. Le premier chantier réunit sur une même fiche le fret, la douane, le magasinage et le transport terrestre, avec un coût de revient qu\'on peut recalculer quand un frais tombe trois semaines après la vente. Viennent ensuite les ventes à crédit : un compte par revendeur, des règlements partiels en espèces ou en Mobile Money imputés au fur et à mesure. Cet ordre suit le trajet de la marchandise, de la commande fournisseur au dernier règlement, et évite que l\'équipe garde son cahier en parallèle.',
        1 => 'Pour une mise en service complète avec reprise des données et formation, comptez à partir de 400 000 FCFA, sans serveur dédié à payer puisque Dolibarr se loge sur un hébergement mutualisé standard. Après le cadrage, vous recevez un devis détaillé, gratuit et sans engagement. Je découpe le travail en chantiers successifs : vous jugez ce que rapporte le premier avant de décider du suivant, qu\'il s\'agisse du stock, du suivi des projets ou de la connexion à WhatsApp et au Mobile Money.',
      ),
    ),
    2 => 
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
    3 => 
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
        4 => 'Dolibarr n\'égale pas Odoo sur la modélisation d\'un dossier d\'importation complexe : le coût de revient multi-frais s\'y construit avec plus d\'efforts. En revanche il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite, et coûte une fraction du déploiement, un arbitrage souvent gagnant quand le volume de dossiers reste mesuré.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Cotonou',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
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
      'q' => 'Mes revendeurs prennent la marchandise à crédit et paient en plusieurs fois, en espèces ou par Mobile Money. L\'outil peut-il suivre ?',
      'r' => 'C\'est même par là que je commence à Cotonou. Chaque revendeur a son compte, chaque règlement partiel vient s\'imputer sur la facture concernée, et vous voyez à tout moment l\'encours total, ce qu\'un cahier ne vous donnera jamais.',
    ),
    1 => 
    array (
      'q' => 'Mon activité à Cotonou justifie-t-elle un ERP ?',
      'r' => 'Cela dépend de votre volume et de vos processus. En dessous d\'un certain volume, un outil ciblé suffit et je vous le dirai. Pour un coût de revient multi-frais, Dolibarr demande plus d\'efforts qu\'Odoo, mais il coûte une fraction du déploiement : l\'arbitrage est souvent gagnant quand le nombre de dossiers reste mesuré.',
    ),
    2 => 
    array (
      'q' => 'À quel moment mon premier module sera-t-il utilisable ?',
      'r' => 'Au bout de 4 à 8 semaines, formation comprise, pour un premier module réellement en service. Si plusieurs métiers sont concernés, le reste suit par paliers sur quelques mois, sans arrêter votre activité.',
    ),
    3 => 
    array (
      'q' => 'Mes clients commandent sur WhatsApp et paient en Mobile Money : Dolibarr peut-il l\'absorber ?',
      'r' => 'Oui, grâce à une automatisation n8n. Les demandes arrivées sur WhatsApp remontent dans Dolibarr et les règlements Mobile Money se rapprochent des factures. Rien de natif là-dedans : c\'est un travail d\'intégration, que je chiffre à part.',
    ),
    4 => 
    array (
      'q' => 'Mes équipes de Dantokpa ou du port sont peu à l\'aise avec l\'informatique. Vous venez les former ?',
      'r' => 'Oui, je suis basé à Cotonou et je me déplace dans vos locaux. Je réduis les écrans à l\'utile, je forme sur vos vraies données pendant le déploiement, et le papier peut continuer en parallèle le temps que la confiance s\'installe.',
    ),
  ),
);
