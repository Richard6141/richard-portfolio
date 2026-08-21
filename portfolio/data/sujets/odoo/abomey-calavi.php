<?php
// Intégration Odoo à Abomey-Calavi, angle ERP differencie le 21/08/2026 : la ville est la
// meme pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-odoo-abomey-calavi',
  'ville' => 'Abomey-Calavi',
  'ville_slug' => 'abomey-calavi',
  'pays' => 'Bénin',
  'titre' => 'Intégration Odoo à Abomey-Calavi',
  'accroche' => 'Odoo déployé par paliers pour les structures de santé et d\'enseignement privé, avec ce que Abomey-Calavi impose réellement.',
  'intro' => 'Abomey-Calavi est la commune qui grandit le plus vite du pays. Beaucoup de structures y ont démarré petit et gèrent aujourd\'hui dix fois plus de dossiers avec les mêmes outils qu\'au premier jour. Odoo, c\'est un ERP complet et modulaire, avec une version open source auto-hébergeable. Sa force est de couvrir plusieurs métiers dans un seul système : ventes, achats, stock, comptabilité, RH, point de vente ; sa limite est qu\'il devient coûteux dès qu\'on veut tordre ses processus standards, et son interface exige une connexion confortable. Le rôle d\'un intégrateur n\'est pas de vous vendre tous les modules : c\'est de déterminer lesquels servent votre activité à Abomey-Calavi, dans quel ordre les mettre en service, et ce qu\'il vaut mieux laisser en dehors.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Abomey-Calavi impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Abomey-Calavi, les structures qui tirent un bénéfice réel d\'un ERP sont les écoles privées, cliniques et pharmacies de quartier, cabinets, promoteurs immobiliers et commerces de proximité. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne une inscription ou un dossier patient, un échéancier de règlement, une consultation ou un trimestre, une facturation et une relance. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Abomey-Calavi, la difficulté principale est la confidentialité des dossiers et la gestion d\'échéanciers payés en plusieurs tranches. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Godomey, Calavi centre, Tokpa-Zoungo, Zogbadjè, Womey et Akassato. Je suis basé à Abomey-Calavi : un déplacement à Abomey-Calavi pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Modules',
      'titre' => 'Les modules Odoo qui servent vraiment à Abomey-Calavi.',
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
      'titre' => 'Comment se déroule une intégration à Abomey-Calavi.',
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
      'titre' => 'Ce que coûte une intégration Odoo à Abomey-Calavi.',
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
      'titre' => 'Un exemple typique à Abomey-Calavi.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Une école privée de Godomey avec 400 élèves',
          'texte' => 'Savoir qui a payé quelle tranche à une date donnée demande aujourd\'hui plusieurs heures de reconstitution. L\'ERP tient l\'échéancier par élève et sort l\'état des impayés par classe en quelques secondes.',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qu\'une commune en croissance rapide impose',
      'paragraphes' => 
      array (
        0 => 'Abomey-Calavi absorbe une population qui augmente plus vite que les structures qui la servent. Les écoles, cliniques et pharmacies qui s\'y équipent ont presque toutes le même profil : elles ont démarré petit, avec des méthodes qui fonctionnaient à cinquante dossiers et qui craquent à cinq cents.',
        1 => 'Le besoin n\'est donc pas d\'ajouter des fonctions mais de reprendre le contrôle d\'un volume qui a débordé. La priorité est presque toujours la même : un fichier unique, élèves, patients, clients, qui remplace les trois versions divergentes qui circulent aujourd\'hui.',
        2 => 'Vient ensuite l\'échéancier. Scolarités payées en tranches, actes réglés partiellement, prises en charge : savoir qui doit quoi à une date donnée est la question à laquelle personne ne sait répondre sans plusieurs heures de reconstitution. C\'est ce que l\'ERP règle en premier.',
        3 => 'La confidentialité structure enfin tout le projet. Dossiers d\'élèves, dossiers patients : les droits par rôle et le journal des consultations se définissent avant le premier paramétrage, jamais après.',
        4 => 'Odoo se justifie ici des que plusieurs services doivent partager le meme dossier : secretariat, comptabilite, direction. Sa gestion fine des droits par role repond directement a l\'exigence de confidentialite. Son cout de deploiement suppose en revanche un volume suffisant pour etre amorti.',
      ),
    ),
    6 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Abomey-Calavi',
      'items' => 
      array (
        0 => 'Activer des modules Odoo « parce qu\'ils sont inclus ». Chaque module active est un ecran de plus pour l\'equipe et une raison de plus de decrocher : on n\'ouvre que ce qui sert.',
        1 => 'Vouloir numériser rétroactivement des années de registres. C\'est long, cher, et cela n\'aide personne : on démarre à une date de bascule et le papier reste consultable en archive.',
        2 => 'Ouvrir un espace en ligne pour les parents ou les patients avant d\'avoir stabilisé l\'interne. L\'ordre inverse produit des données publiques fausses.',
        3 => 'Partager un compte unique entre plusieurs personnes du secrétariat, ce qui annule toute traçabilité sur des données sensibles.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos données sont sensibles : dossiers d\'élèves, parfois de patients. Comment sont-elles protégées ?',
      'r' => 'Par des droits stricts par rôle, un journal des consultations et des sauvegardes chiffrées. On définit ensemble qui voit quoi avant d\'écrire la première ligne de paramétrage, c\'est une contrainte de conception, pas une option ajoutée après.',
    ),
    1 => 
    array (
      'q' => 'Odoo convient-il à une entreprise de Abomey-Calavi ?',
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
      'q' => 'Intervenez-vous sur place à Abomey-Calavi ?',
      'r' => 'Je suis basé à Abomey-Calavi : un déplacement à Abomey-Calavi pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
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
