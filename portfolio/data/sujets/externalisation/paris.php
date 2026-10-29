<?php
// Paris (France), créé le 21/08/2026. Angle acheteur : conformite,
// fiscalite et recours, plutot qu'un argumentaire geographique.
declare(strict_types=1);

return array (
  'slug' => 'externaliser-developpement-web-paris',
  'robots' => 'noindex',
  'ville' => 'Paris',
  'ville_slug' => 'paris',
  'pays' => 'France',
  'titre' => 'Externaliser son développement web depuis Paris',
  'accroche' => 'Côté équipe : un développeur francophone, un fuseau compatible, et un cadre contractuel et RGPD qui tient.',
  'intro' => 'Paris compte la plus forte densité d\'agences et de studios du pays, et les tarifs journaliers les plus élevés. Beaucoup d\'entreprises parisiennes n\'y cherchent pas moins cher par principe : elles veulent absorber un pic de charge sans recruter, ou financer un projet secondaire que leur budget ne couvre plus. Depuis Cotonou, au Bénin, je travaille à distance avec des entreprises françaises, en développement comme en automatisation. Cette page traite ce qu\'un décideur parisien vérifie avant de signer avec un prestataire hors de France : le sort des données, la TVA de la facture, le recours si le projet dérape.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Les vraies objections',
      'titre' => 'Ce qui bloque réellement une décision à Paris.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Le sort des données',
          'texte' => 'C\'est l\'objection la plus légitime que l\'on m\'oppose. Le RGPD s\'applique dès que des données personnelles de résidents européens sont traitées, quel que soit le lieu du prestataire. Trois moyens y répondent : l\'hébergement des données dans l\'UE (je déploie chez OVH, Scaleway ou Hetzner), les clauses contractuelles types annexées au contrat et les accès nominatifs tracés. Le prestataire que je suis se trouve hors UE ; les données, elles, restent à l\'intérieur.',
        ),
        1 => 
        array (
          'titre' => 'La facturation',
          'texte' => 'Pour une entreprise française, acheter une prestation de services à un prestataire établi hors de l\'Union européenne relève de l\'autoliquidation. J\'émets une facture hors taxes ; dans la même opération, vous déclarez la TVA et vous la déduisez. La trésorerie n\'en subit aucun effet, et la facture reste parfaitement déductible.',
        ),
        2 => 
        array (
          'titre' => 'En cas de litige',
          'texte' => 'Droit français, juridiction française : le contrat peut prévoir les deux. Je ne m\'y oppose jamais, car il s\'agit de la contrepartie normale d\'une relation menée à distance. Refuser cette clause serait un signal d\'alerte.',
        ),
        3 => 
        array (
          'titre' => 'Ce qu\'on omet souvent de dire',
          'texte' => 'Le Crédit d\'Impôt Recherche et le CII appellent à la prudence : ils excluent les dépenses sous-traitées hors UE. Si votre projet repose sur ces dispositifs, un prestataire européen sera plus pertinent. Je vous le dis avant que vous ne le découvriez au bilan.',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Collaborer depuis Cotonou',
      'titre' => 'Comment s\'organise la collaboration avec une entreprise de Paris.',
      'paragraphes' => 
      array (
        0 => 'Pour un pic de charge ou un projet secondaire, la question parisienne est moins le prix que la sécurité juridique. Le RGPD s\'applique même avec un prestataire hors UE ; mes déploiements restent donc chez OVH, Scaleway ou Hetzner, avec clauses contractuelles types et accès nominatifs tracés. Je facture hors taxes, vous pratiquez l\'autoliquidation. Le contrat peut relever du droit français, avec juridiction française. Avant tout devis, un cadrage écrit en deux à trois visioconférences, chacune suivie d\'un compte rendu que vous validez, puis un contrat à jalons : vous ne payez jamais tout d\'avance.',
        1 => 'Je peux renforcer votre équipe sur l\'automatisation de processus avec n8n ou Make, sur des applications métier sur mesure en PHP/Laravel, Node.js ou Python, ou sur un ERP open source comme Odoo ou Dolibarr. Mon décalage avec Paris va de zéro à deux heures : nous travaillons dans la même journée. Si votre projet exige des ateliers en présentiel réguliers ou une intégration dans une équipe en place, une agence ou un freelance parisien reste préférable. Si vous comptez sur le CIR ou le CII, prenez un prestataire européen.',
      ),
    ),
    2 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Le tissu local',
      'titre' => 'Avec quelles entreprises de Paris je travaille.',
      'paragraphes' => 
      array (
        0 => 'À Paris, ce fonctionnement sert surtout les agences web saturées, les startups en phase de traction, les PME de services et les e-commerçants. Ce n\'est pas une affaire de taille : il faut un besoin défini, un interlocuteur joignable et une préférence pour l\'écrit.',
        1 => 'Une structure qui ne valide qu\'en réunion physique, ou qui ne peut pas dégager un point par semaine, souffrira de la distance avec n\'importe quel prestataire. Le critère est organisationnel, pas géographique : mieux vaut s\'en rendre compte avant de lancer le projet.',
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Mes données quittent-elles l\'Union européenne ?',
      'r' => 'Non. Je déploie chez OVH, Scaleway ou Hetzner, ce qui garde les données en UE, même si je suis établi hors de l\'Union. Le RGPD reste applicable, des clauses contractuelles types sont annexées au contrat et les accès sont nominatifs et tracés.',
    ),
    1 => 
    array (
      'q' => 'Dois-je payer de la TVA sur vos factures ?',
      'r' => 'Je facture hors taxes. Votre entreprise applique l\'autoliquidation, puisque le prestataire est hors de l\'Union : vous déclarez et déduisez la TVA dans une même opération, sans effet sur la trésorerie.',
    ),
    2 => 
    array (
      'q' => 'Puis-je imposer le droit français ?',
      'r' => 'Oui, avec une juridiction française si vous le souhaitez. Je ne le refuse jamais.',
    ),
    3 => 
    array (
      'q' => 'Le CIR ou le CII couvrent-ils votre prestation ?',
      'r' => 'Non, les dépenses sous-traitées hors UE n\'y ouvrent pas droit. Si votre projet en dépend, il vaut mieux un prestataire européen.',
    ),
    4 => 
    array (
      'q' => 'Intervenez-vous en renfort ponctuel ?',
      'r' => 'Oui, en complément de votre équipe interne sur un pic de charge. Le décalage de zéro à deux heures avec Cotonou permet de travailler dans la même journée, et le paiement par jalons limite votre exposition.',
    ),
  ),
);
