<?php
// Intégration Dolibarr à Lomé, angle ERP differencie le 21/08/2026 : la ville est la
// même pour Odoo et Dolibarr, ce que chacun y apporte ne l'est pas.
declare(strict_types=1);

return array (
  'slug' => 'integration-dolibarr-lome',
  'ville' => 'Lomé',
  'ville_slug' => 'lome',
  'pays' => 'Togo',
  'titre' => 'Intégration Dolibarr à Lomé',
  'accroche' => 'Dolibarr déployé par paliers pour le transit et la logistique portuaire, avec ce que Lomé impose réellement.',
  'intro' => 'Au port de Lomé, les dossiers durent des semaines, passent entre plusieurs intervenants, et les frais s\'accumulent pendant ce temps. Premier port en eau profonde de la sous-région, il ouvre le corridor vers le Burkina, le Mali et le Niger. Dolibarr, ERP léger, suit ces dossiers avec leurs coûts et le temps passé, pour un investissement bien inférieur à celui d\'un ERP lourd. Lomé n\'est qu\'à deux heures de route de Cotonou, sur le même fuseau horaire : je me déplace volontiers pour un cadrage important.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Le contexte',
      'titre' => 'Ce que Lomé impose à un projet ERP.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le tissu économique concerné',
          'texte' => 'À Lomé, les structures qui tirent un bénéfice réel d\'un ERP sont les transitaires, importateurs, commerçants de la zone franche, transporteurs du corridor et PME de services. En dessous d\'un certain volume, un outil ciblé reste plus pertinent qu\'un ERP complet, je vous le dirai plutôt que de vous équiper inutilement.',
        ),
        1 => 
        array (
          'titre' => 'Le flux à couvrir en priorité',
          'texte' => 'Le parcours type à modéliser ici enchaîne une ouverture de dossier, un dédouanement, une franchise de magasinage, un transport sur le corridor et une facturation client. C\'est ce flux, et non la liste des modules disponibles, qui détermine par où commencer.',
        ),
        2 => 
        array (
          'titre' => 'La contrainte locale déterminante',
          'texte' => 'À Lomé, la difficulté principale est le suivi des échéances de franchise et le calcul de marge par dossier. Un ERP paramétré sans en tenir compte est abandonné dans les mois qui suivent : l\'équipe reprend son cahier « en attendant », et les deux systèmes divergent.',
        ),
        3 => 
        array (
          'titre' => 'Zones couvertes',
          'texte' => 'J\'interviens pour les entreprises de Bè, Tokoin, Adidogomé, Nyékonakpoè et la zone portuaire. Je suis basé à Cotonou : un déplacement à Lomé pour le cadrage ou la formation des équipes ne pose aucune difficulté.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Par où commencer',
      'titre' => 'Par où commencer à Lomé.',
      'paragraphes' => 
      array (
        0 => 'Je commencerais par le dossier unique, doté d\'alertes d\'échéance. Fin de franchise de magasinage, validité d\'un document, délai de règlement : ces dépassements coûtent sans contrepartie et se répètent, et un transitaire qui a quinze dossiers ouverts les surveille de mémoire. Le dossier partagé permet aussi de reprendre le suivi quand son responsable est absent, sans reconstituer l\'historique depuis les e-mails. La marge par dossier vient ensuite, avec le transport terrestre du corridor intégré au coût de revient. Les alertes se construisent par l\'API plutôt qu\'en simple paramétrage.',
        1 => 'Dolibarr ne coûte rien en licence et se loge sur un hébergement mutualisé standard. Pour une mise en service complète, reprise des données et formation incluses, prévoyez au minimum 400 000 FCFA. J\'avance par chantiers consécutifs : les alertes d\'abord, la marge ensuite, chacun mesuré avant de passer au suivant, afin que vous voyiez ce qu\'il rapporte avant de dépenser davantage. Le devis détaillé et décomposé arrive après le cadrage, gratuit et sans engagement.',
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Cas concret',
      'titre' => 'Un exemple typique à Lomé.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un transitaire du port avec quinze dossiers ouverts',
          'texte' => 'La fin de franchise de magasinage se surveille de mémoire, et un dépassement de quelques jours coûte sans contrepartie. Les alertes d\'échéance sont la fonction qui se rentabilise le plus vite sur ce métier.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce que le corridor impose',
      'paragraphes' => 
      array (
        0 => 'Le port de Lomé est le premier port en eau profonde de la sous-région et la porte d\'entrée du corridor vers le Burkina, le Mali et le Niger. Les entreprises qui y travaillent gèrent des dossiers longs, multi-intervenants, avec des frais qui s\'accumulent sur plusieurs semaines.',
        1 => 'Le premier apport d\'un ERP y est la reprenabilité du dossier. Quand celui qui le suit est absent, il faut aujourd\'hui le reconstituer depuis les e-mails pendant que le client attend. Un dossier unique règle cela immédiatement.',
        2 => 'Le second est l\'alerte d\'échéance. Fin de franchise de magasinage, validité de document, délai de règlement : ces dépassements coûtent sans contrepartie et se répètent. C\'est la fonction qui se rentabilise le plus vite sur ce métier.',
        3 => 'Le troisième est la marge par dossier, aujourd\'hui connue au mieux une fois tout soldé. La calculer en continu change les décisions commerciales pendant l\'opération, pas après.',
        4 => 'Le module Projets de Dolibarr permet de suivre un dossier de transit avec ses coûts et son temps passé, pour un investissement bien inférieur. La limite se situe sur les automatisations d\'échéances, qu\'il faut construire via son API plutôt que paramétrer.',
      ),
    ),
    4 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Pièges',
      'titre' => 'Erreurs fréquentes que je corrige à Lomé',
      'items' => 
      array (
        0 => 'Choisir Dolibarr uniquement parce qu\'il est gratuit, sans vérifier qu\'il couvre vos processus. La licence est nulle, le paramétrage ne l\'est pas, et un outil inadapté coûte plus cher qu\'un outil payant adapté.',
        1 => 'Vouloir dupliquer dans l\'ERP ce que fait déjà le système douanier. L\'outil sert votre suivi commercial et financier, que celui-ci ne couvre pas.',
        2 => 'Oublier d\'intégrer le transport terrestre du corridor dans le coût de revient, ce qui fausse toutes les marges.',
        3 => 'Négliger le suivi partageable avec le client, qui est pourtant un argument commercial direct face aux confrères.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Un cadrage en face à face est-il possible à Lomé ?',
      'r' => 'Oui. Je suis basé à Cotonou, à deux heures de route, sans décalage horaire et avec la même monnaie. Je me déplace pour le cadrage initial comme pour la formation des équipes.',
    ),
    1 => 
    array (
      'q' => 'Le système douanier fait déjà une partie du travail : Dolibarr ferait-il doublon ?',
      'r' => 'Pas s\'il reste à sa place. Il serait absurde de recopier dans l\'ERP ce que couvre le système douanier. Dolibarr prend en charge le suivi commercial et financier, que ce système ne traite pas.',
    ),
    2 => 
    array (
      'q' => 'Peut-on être prévenu avant la fin d\'une franchise de magasinage ?',
      'r' => 'Oui, ce sont les alertes d\'échéance, la fonction qui se rentabilise le plus vite pour un transitaire. Elles ne relèvent pas d\'un simple réglage : je les construis via l\'API de Dolibarr.',
    ),
    3 => 
    array (
      'q' => 'Combien de temps faut-il avant de s\'en servir au quotidien ?',
      'r' => 'De 4 à 8 semaines pour un premier module réellement en service, formation comprise. Au-delà, plusieurs métiers s\'ajoutent sur quelques mois, par paliers, sans interrompre l\'activité.',
    ),
    4 => 
    array (
      'q' => 'Mon équipe ne sera-t-elle pas dépendante de vous ?',
      'r' => 'Non. Dolibarr étant open source et auto-hébergé, vous gardez le serveur, la base et les modules, et n\'importe quel intégrateur peut reprendre le dossier. Je pose cette clause sans qu\'on me la demande.',
    ),
  ),
);
