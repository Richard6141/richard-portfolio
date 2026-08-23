<?php
// Djougou, Donga. Créé le 21/08/2026: la ville figurait au pied
// de page sans qu'aucune URL ne porte cette couverture.
declare(strict_types=1);

return array (
  'nom' => 'Djougou',
  'slug' => 'djougou',
  'pays' => 'Bénin',
  'pays_slug' => 'benin',
  'region' => 'Donga',
  'distance_km' => 460,
  'sur_place' => false,
  'accroche' => 'Sites, outils de gestion et automatisation pour les commerces et transporteurs de la Donga',
  'intro' => 'Djougou est la troisième ville du Bénin et le carrefour commercial du nord-ouest. Sa position sur l\'axe vers le Togo et le Burkina en fait une place de négoce active, où se croisent commerçants, transporteurs et transformateurs. L\'économie y est dominée par le commerce de produits vivriers, l\'anacarde et le karité, avec une forte saisonnalité et une part importante de transactions à crédit.',
  'contexte' => 'Deux réalités structurent tout projet ici. D\'abord la saisonnalité : l\'activité de collecte et de négoce se concentre sur quelques mois, et l\'outil doit tenir un pic sans être un poids le reste de l\'année. Ensuite le crédit : entre commerçants, la confiance tient lieu de contrat, et les carnets remplacent les systèmes. Un outil qui ne sait pas gérer un règlement partiel ou un solde reporté ne sera pas adopté.',
  'quartiers' => 
  array (
    0 => 
    array (
      0 => 'Le grand marché',
      1 => 'Le cœur du négoce, avec des grossistes qui traitent des volumes importants sans aucun suivi formalisé. L\'encours client y est le premier chantier utile.',
    ),
    1 => 
    array (
      0 => 'L\'axe routier vers le Togo',
      1 => 'Transporteurs et transitaires informels. Le suivi des chargements et des frais y est le besoin dominant.',
    ),
    2 => 
    array (
      0 => 'Les zones de transformation',
      1 => 'Unités de traitement de l\'anacarde et du karité, souvent saisonnières, avec des besoins de traçabilité par lot.',
    ),
    3 => 
    array (
      0 => 'Le centre administratif',
      1 => 'Structures publiques et écoles privées, dont les besoins portent sur les dossiers et les échéanciers plus que sur la vente.',
    ),
  ),
  'concurrence' => 'Très peu de prestataires web à Djougou même. Les entreprises font appel à Parakou ou Cotonou. Sur des requêtes locales, la concurrence est quasi inexistante : une page bien construite se positionne rapidement.',
  'secteurs' => 
  array (
    0 => 'Commerce de gros et négoce vivrier',
    1 => 'Anacarde et karité',
    2 => 'Transport et transit',
    3 => 'Artisanat et transformation',
    4 => 'Écoles privées',
    5 => 'Commerce de détail',
  ),
  'besoins' => 
  array (
    0 => 
    array (
      0 => 'Suivre les encours entre commerçants',
      1 => 'Un compte par client, les règlements partiels imputés au fil de l\'eau, et l\'encours total lisible à tout moment.',
      2 => 'application-web-sur-mesure',
    ),
    1 => 
    array (
      0 => 'Tracer les lots de la collecte à la vente',
      1 => 'Origine, poids, qualité et coût d\'entrée par lot, pour connaître la marge réelle plutôt que de l\'estimer.',
      2 => 'application-web-sur-mesure',
    ),
    2 => 
    array (
      0 => 'Automatiser les relances de campagne',
      1 => 'Rappels d\'échéance et confirmations, sur un rythme saisonnier où tout se joue en quelques semaines.',
      2 => 'automatisation-ia',
    ),
    3 => 
    array (
      0 => 'Exister en ligne pour les acheteurs extérieurs',
      1 => 'Beaucoup d\'acheteurs d\'anacarde cherchent leurs fournisseurs en ligne avant de se déplacer.',
      2 => 'site-vitrine-professionnel',
    ),
  ),
  'comparatif' => 
  array (
    0 => 
    array (
      0 => 'Négociant vivrier',
      1 => 'Suivi des encours et des lots',
      2 => 'à partir de 500 000 FCFA',
      3 => '4 à 7 semaines',
    ),
    1 => 
    array (
      0 => 'Transformateur anacarde ou karité',
      1 => 'Traçabilité par lot et calcul de marge',
      2 => 'à partir de 600 000 FCFA',
      3 => '5 à 8 semaines',
    ),
    2 => 
    array (
      0 => 'Transporteur',
      1 => 'Suivi des chargements et des frais',
      2 => 'à partir de 450 000 FCFA',
      3 => '4 à 6 semaines',
    ),
    3 => 
    array (
      0 => 'École privée',
      1 => 'Échéanciers de scolarité et bulletins',
      2 => 'à partir de 500 000 FCFA',
      3 => '4 à 7 semaines',
    ),
    4 => 
    array (
      0 => 'Commerce de détail',
      1 => 'Caisse simplifiée et crédit client',
      2 => 'à partir de 350 000 FCFA',
      3 => '3 à 5 semaines',
    ),
  ),
  'erreurs' => 
  array (
    0 => 
    array (
      0 => 'Imposer un outil pensé pour une activité régulière',
      1 => 'Une activité saisonnière ne se pilote pas comme un commerce constant. L\'outil doit encaisser un pic puis rester quasi gratuit hors campagne.',
    ),
    1 => 
    array (
      0 => 'Refuser les règlements partiels',
      1 => 'À Djougou, une facture se solde souvent en plusieurs fois. Un outil qui n\'accepte que le paiement intégral sera contourné dès la première semaine.',
    ),
    2 => 
    array (
      0 => 'Négliger le mode hors connexion',
      1 => 'Sur les points de collecte de la Donga, le réseau n\'est pas garanti. Une saisie qui échoue sans réseau, c\'est une donnée perdue.',
    ),
    3 => 
    array (
      0 => 'Vouloir tout référencer d\'emblée',
      1 => 'On commence par les quelques produits qui font l\'essentiel du chiffre, on étend ensuite.',
    ),
  ),
  'apres_livraison' => 'Formation en visioconférence sur vos vraies données, documentation écrite et vidéos courtes. L\'objectif est votre autonomie sur les opérations courantes, les interventions techniques restant à ma charge à distance.',
  'budget' => 'Un site vitrine démarre autour de 250 000 FCFA, un outil de gestion autour de 450 000 FCFA selon le périmètre. Tarifs identiques à ceux de Cotonou : le travail se faisant à distance, il n\'y a pas de coût de déplacement à répercuter.',
  'delais' => '1 à 3 semaines pour un site, 4 à 8 semaines pour un outil de gestion. Je recommande de démarrer hors campagne : former une équipe en pleine collecte ne fonctionne pas.',
  'rythme' => 'Un point hebdomadaire et des livraisons testables toutes les deux semaines, avec des comptes rendus écrits à chaque étape.',
  'cas_type' => 'Le cas le plus fréquent à Djougou est celui d\'un négociant qui accorde du crédit à une trentaine de revendeurs et ne connaît son encours total qu\'en additionnant plusieurs cahiers. Rendre ce chiffre visible en permanence suffit souvent à récupérer des sommes qu\'on avait cessé de réclamer.',
  'pourquoi_moi' => 'Je ne suis pas installé à Djougou et je ne le prétends pas. Ce que j\'apporte, c\'est une conception adaptée à la saisonnalité et au crédit informel, plutôt qu\'un progiciel calibré pour une entreprise régulière du sud.',
  'travailler' => 'Visioconférence, WhatsApp et comptes rendus écrits. Les échanges se font dans la même journée, sans décalage horaire ni contrainte de déplacement.',
  'paiement' => 'Mobile Money MTN et Moov, virement ou espèces, en plusieurs tranches liées aux livrables.',
  'demarrer' => 'Un échange gratuit d\'une trentaine de minutes permet de cerner le besoin et de dire franchement si un outil se justifie.',
  'faq' => 
  array (
    0 => 
    array (
      0 => 'Notre activité est très saisonnière. Est-ce rentable ?',
      1 => 'Souvent oui, parce que l\'outil se rentabilise sur une seule campagne s\'il évite les litiges d\'encours et permet de vendre au bon moment. Hors saison, il ne coûte que son hébergement, quelques milliers de francs par an.',
    ),
    1 => 
    array (
      0 => 'Nos clients paient en plusieurs fois, parfois en nature. Est-ce gérable ?',
      1 => 'Les règlements partiels sont prévus dès la conception, c\'est même le point de départ ici. Les règlements en nature se saisissent comme un avoir, avec la contrepartie valorisée.',
    ),
    2 => 
    array (
      0 => 'Y a-t-il du réseau sur nos points de collecte ?',
      1 => 'Pas toujours, et c\'est prévu : la saisie fonctionne hors connexion et remonte automatiquement au retour du réseau. L\'agent n\'a aucune manipulation à faire.',
    ),
    3 => 
    array (
      0 => 'Vous déplacez-vous à Djougou ?',
      1 => 'Rarement, ce n\'est pas nécessaire. Tout se mène à distance. Un déplacement reste possible pour un cadrage important mais serait facturé.',
    ),
    4 => 
    array (
      0 => 'Combien de temps avant de voir un résultat ?',
      1 => 'Sur l\'encours client, l\'effet est immédiat dès la reprise des carnets. Sur la rotation et la marge, comptez deux à trois mois d\'historique pour que les chiffres deviennent exploitables.',
    ),
    5 => 
    array (
      0 => 'Pouvons-nous gérer l\'outil nous-mêmes ?',
      1 => 'Oui, c\'est l\'objectif. Créer un utilisateur, ajuster un prix, sortir un état : ces opérations doivent être à votre portée sans m\'appeler.',
    ),
  ),
);
