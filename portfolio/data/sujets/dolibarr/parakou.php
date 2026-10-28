<?php
// Intégration Dolibarr à Parakou, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-parakou',
  'ville' => 'Parakou',
  'ville_slug' => 'parakou',
  'pays' => 'Bénin',
  'titre' => 'Intégration Dolibarr à Parakou',
  'accroche' => 'Dolibarr déployé par paliers pour le négoce agricole et le transport, avec ce que Parakou impose réellement.',
  'intro' => 'À Parakou, l\'activité se passe sur les points de collecte, dans les magasins et sur le corridor vers le Niger, rarement derrière un bureau. Un ERP qui réclame un poste fixe et une connexion permanente n\'y sera pas utilisé : c\'est pourquoi beaucoup d\'entreprises du nord ont déjà abandonné un outil. Dolibarr est léger et servi en PHP, ses écrans s\'affichent correctement même sur une connexion faible. Pour la saisie franchement hors réseau, je lui adjoins une application terrain, ce qui reste nettement moins coûteux. Je vous dis aussi ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Parakou impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Parakou, les structures qui tirent un bénéfice réel d\'un ERP sont les négociants agricoles, coopératives cotonnières, transporteurs du corridor nord et commerces de gros. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne une avance producteur, une collecte pesée sur un point d\'achat, un transport vers le magasin, un stock par qualité et une vente. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Parakou, la difficulté principale est la saisie sur le terrain, souvent hors connexion, et le suivi des avances aux producteurs. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Zongo, Guéma, Titirou, Banikanni et la zone du marché central. Je suis basé à Cotonou : un déplacement à Parakou pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Parakou.',
      'paragraphes' => 
      array (
        0 => 'Je commence par la saisie des avances producteurs et des pesées sur les téléphones des agents, testée avec le vrai réseau. La raison : les avances vivent dans plusieurs cahiers tenus par plusieurs personnes, et c\'est de là que naissent presque tous les litiges de fin de campagne. Quand qui a reçu quoi, qui a livré combien et ce qui reste dû se retrouvent au même endroit, le transport, le stock par qualité et la vente s\'appuient sur des chiffres fiables. Les écrans se dessinent avec les agents qui saisiront, pas seulement avec le gérant, et les champs obligatoires restent rares.',
        1 => 'Aucune licence à payer, un hébergement mutualisé standard suffit. Une mise en service complète à Parakou, avec reprise des données et formation, démarre à 400 000 FCFA. Une seule campagne peut rembourser l\'outil s\'il évite les litiges d\'avances et vous aide à vendre au bon moment ; hors saison, il ne coûte que son hébergement. J\'avance chantier par chantier, et le devis détaillé suit le cadrage, gratuit et sans engagement.',
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Cas concret',
      'titre' => 'Un exemple typique à Parakou.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un négociant qui collecte sur douze points d\'achat',
          'texte' => 'En pleine campagne, le tonnage réellement collecté n\'est connu qu\'une fois tous les bordereaux remontés, au moment précis où il faudrait décider de vendre ou d\'attendre. La saisie mobile hors connexion remonte les pesées dès que le réseau revient.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce que le terrain impose dans le nord',
      'paragraphes' => 
      array (
        0 => 'À Parakou, l\'activité ne se passe pas au bureau. Elle se passe sur les points de collecte, dans les magasins et sur le corridor. Un ERP conçu pour un poste fixe et une connexion permanente n\'y sera pas utilisé, c\'est la raison pour laquelle beaucoup d\'entreprises du nord ont déjà abandonné un outil.',
        1 => 'La saisie doit donc fonctionner sur téléphone, hors connexion, et se synchroniser seule au retour du réseau. Ce n\'est pas un confort : c\'est la condition pour que les données existent.',
        2 => 'Le suivi des avances producteurs vient ensuite. Qui a reçu quoi, qui a livré combien, ce qui reste dû : cette information vit aujourd\'hui dans plusieurs cahiers tenus par plusieurs personnes, et c\'est de là que naissent la quasi-totalité des litiges de fin de campagne.',
        3 => 'La saisonnalité, enfin, change le calcul de rentabilité. L\'outil se rentabilise sur une seule campagne s\'il évite les litiges d\'avances et permet de décider de vendre au bon moment. Hors saison, il ne coûte que son hébergement.',
        4 => 'Dolibarr étant léger et servi en PHP, ses écrans s\'affichent correctement même sur une connexion faible, un avantage réel à Parakou. Pour la saisie franchement hors réseau, on lui adjoint la même application terrain, mais l\'ensemble reste nettement moins coûteux.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Parakou',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
        1 => 'Déployer un ERP testé uniquement en Wi-Fi au bureau. Il faut le tester avec le vrai réseau et les vrais téléphones des agents avant de généraliser.',
        2 => 'Concevoir les écrans avec le seul gérant, sans les agents qui saisiront réellement. L\'outil est alors abandonné dès la première campagne.',
        3 => 'Multiplier les champs obligatoires pour « avoir des données propres ». Sur le terrain, chaque champ superflu est un abandon de saisie.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Mes agents perdent le réseau pendant la journée. Pourront-ils quand même saisir ?',
      'r' => 'C\'est le cas de conception principal ici. La saisie se fait sur le téléphone sans connexion et se synchronise d\'elle-même au retour du réseau. Rien ne se perd, et l\'agent n\'a aucune manipulation à faire.',
    ),
    1 => 
    array (
      'q' => 'Combien de champs mes agents devront-ils remplir ?',
      'r' => 'Le moins possible. Sur le terrain, chaque champ superflu pousse à abandonner la saisie : je dessine les écrans avec les agents eux-mêmes, puis je les teste avec leurs téléphones et le réseau réel avant de généraliser.',
    ),
    2 => 
    array (
      'q' => 'Comment éviter les litiges sur les avances aux producteurs ?',
      'r' => 'En réunissant au même endroit ce que chaque cahier contient séparément : qui a reçu quoi, qui a livré combien, ce qui reste dû. C\'est là que naissent presque tous les litiges de fin de campagne.',
    ),
    3 => 
    array (
      'q' => 'Dolibarr fonctionne-t-il avec une connexion faible ?',
      'r' => 'Oui, il est léger et ses écrans s\'affichent correctement même sur un réseau médiocre. Pour une saisie vraiment sans réseau, on lui adjoint une application terrain, pour un ensemble nettement moins coûteux qu\'un ERP lourd.',
    ),
    4 => 
    array (
      'q' => 'Dans quel délai un premier module tourne-t-il ?',
      'r' => 'Comptez 4 à 8 semaines, formation comprise, pour un premier module en service. Un déploiement qui touche plusieurs métiers s\'étale sur quelques mois, par paliers, sans arrêter votre activité.',
    ),
  ),
);
