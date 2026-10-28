<?php
// Intégration Dolibarr à Abidjan, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-abidjan',
  'ville' => 'Abidjan',
  'ville_slug' => 'abidjan',
  'pays' => 'Côte d\'Ivoire',
  'titre' => 'Intégration Dolibarr à Abidjan',
  'accroche' => 'Dolibarr déployé par paliers pour le commerce et la distribution, avec ce que Abidjan impose réellement.',
  'intro' => 'À Abidjan, vos concurrents sont déjà équipés, et un outil approximatif se remarque immédiatement, chez vos clients comme dans vos équipes. Les attentes y sont plus élevées que dans le reste de la sous-région : le projet consiste à tenir un niveau, pas à combler un manque. Dolibarr, ERP léger, défend bien le commercial et la facturation ; il est moins à l\'aise sur la logistique multi-sites complexe. Je mène ces projets entièrement à distance, sans décalage horaire avec Cotonou, et je vous dis franchement si votre activité demande autre chose.',
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
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Abidjan.',
      'paragraphes' => 
      array (
        0 => 'Je commencerais par le stock consolidé entre les points de vente. C\'est la difficulté dominante à Abidjan : un article présent dans une boutique reste invisible pour les autres, et le stock global existe sans que personne puisse l\'exploiter. Avec des chiffres communs, les transferts entre Cocody et Yopougon se décident sur des données. Les paiements Wave et Orange Money viennent juste après, car un parcours qui ne les propose pas perd le client au dernier écran. Ouvrir la boutique en ligne avant ce stock unique, c\'est vendre des articles déjà écoulés.',
        1 => 'Dolibarr est gratuit et tient sur un hébergement mutualisé standard : aucun serveur dédié à payer. Une mise en service complète, reprise des données et formation comprises, démarre à 400 000 FCFA. Je découpe le projet en chantiers qui se suivent, si bien que vous constatez ce que rapporte le stock unique avant de financer la suite. Une fois le cadrage terminé, vous recevez un devis détaillé et décomposé, gratuit et sans engagement.',
      ),
    ),
    2 => 
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
    3 => 
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
        4 => 'Sur un marché où vos concurrents sont déjà équipés, Dolibarr tient la comparaison sur le commercial et la facturation, moins sur la logistique multi-sites complexe. C\'est le bon choix si vous avez un ou deux points de vente, pas cinq.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Abidjan',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
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
      'q' => 'Mes concurrents ont déjà un ERP : pourquoi passer par vous plutôt que par un prestataire installé ici ?',
      'r' => 'Parce que je suis basé au Bénin et que je travaille structurellement sous le marché ivoirien, à qualité comparable. C\'est le vrai différenciateur. Si la présence physique pèse lourd dans votre projet, je vous l\'écris franchement plutôt que de forcer.',
    ),
    1 => 
    array (
      'q' => 'Mon volume d\'activité justifie-t-il Dolibarr ?',
      'r' => 'La réponse dépend de vos processus, pas de la ville. L\'outil se justifie quand vous voulez structurer commercial, stock et facturation sans le budget ni l\'infrastructure d\'un ERP lourd. Si votre besoin se résume à une seule fonction, un outil sur mesure sera plus léger et moins cher, et je vous le dirai.',
    ),
    2 => 
    array (
      'q' => 'Au bout de combien de temps verrai-je un premier résultat ?',
      'r' => 'Un premier module réellement en service demande 4 à 8 semaines, formation comprise. Si plusieurs métiers sont concernés, le déploiement s\'étale sur quelques mois, palier par palier, sans jamais interrompre votre activité.',
    ),
    3 => 
    array (
      'q' => 'Mes clients paient par Wave et Orange Money : comment cela rejoint-il Dolibarr ?',
      'r' => 'Par une automatisation n8n. Les demandes arrivées sur WhatsApp alimentent Dolibarr, et les règlements Mobile Money se rapprochent des factures. Rien de natif là-dedans : c\'est un travail d\'intégration, à inscrire clairement dans le budget.',
    ),
    4 => 
    array (
      'q' => 'Mes équipes de boutique vont-elles abandonner leur cahier ?',
      'r' => 'C\'est justement le risque que je cherche à éviter. Je réduis les écrans à l\'utile, je forme sur vos vraies données pendant le déploiement, et le papier continue en parallèle tant que la confiance n\'est pas établie.',
    ),
  ),
);
