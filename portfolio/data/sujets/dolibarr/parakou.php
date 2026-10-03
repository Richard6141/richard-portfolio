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
  'intro' => 'Parakou vit au rythme des campagnes agricoles et du corridor vers le Niger. Un ERP qui exige une connexion permanente et un poste fixe n\'y sera jamais utilisé : la saisie se fait sur les points de collecte, parfois sans réseau. Dolibarr, c\'est un ERP-CRM open source léger, écrit en PHP et MySQL, qui tourne sur un hébergement mutualisé ordinaire. Sa force est de sa légèreté : il s\'installe sur l\'hébergement que vous avez déjà, s\'affiche vite même sur une connexion moyenne, et se prend en main en quelques jours ; sa limite est qu\'il couvre moins de terrain qu\'Odoo sur les processus industriels complexes et son interface est plus austère. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Parakou, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
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
          'texte' => 'J\'interviens pour les entreprises de Zongo, Guéma, Titirou, Banikanni et la zone du marché central. Je suis basé à Abomey-Calavi : un déplacement à Parakou pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Dolibarr qui servent vraiment à Parakou.',
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
      'titre' => 'Comment se déroule une intégration à Parakou.',
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
      'titre' => 'Ce que coûte une intégration Dolibarr à Parakou.',
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
    5 => 
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
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Parakou',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans verifier qu\'il couvre vos processus. La licence est nulle, le parametrage ne l\'est pas, et un outil inadapte coute plus cher qu\'un outil payant adapte.',
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
      'q' => 'Nos points de collecte sont hors réseau une partie de la journée. L\'ERP fonctionne-t-il quand même ?',
      'r' => 'C\'est le cas de conception principal à Parakou. La saisie se fait sur téléphone sans connexion et se synchronise au retour du réseau. Rien ne se perd, et l\'agent n\'a aucune manipulation à faire.',
    ),
    1 => 
    array (
      'q' => 'Dolibarr convient-il à une entreprise de Parakou ?',
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
      'q' => 'Intervenez-vous sur place à Parakou ?',
      'r' => 'Je suis basé à Abomey-Calavi : un déplacement à Parakou pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
