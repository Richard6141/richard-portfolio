<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-negoce-agricole-parakou',
  'ville' => 'Parakou',
  'ville_slug' => 'parakou',
  'pays' => 'Bénin',
  'titre' => 'Digitaliser un négoce agricole à Parakou',
  'accroche' => 'Collecte, pesées, avances et stocks : arrêter de reconstituer la campagne après coup.',
  'intro' => 'Parakou est la place de commerce du nord béninois, au cœur du bassin cotonnier et sur le corridor qui remonte vers le Niger. Un négoce agricole y gère une saisonnalité forte, des dizaines de points de collecte, des avances aux producteurs et des pesées qui font foi. La difficulté n\'est pas de vendre : c\'est de savoir, en cours de campagne, ce qui a réellement été collecté, à quel prix, et ce qui reste dû à qui.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Avances et engagements auprès des producteurs',
        1 => 'Collecte sur les points d\'achat et pesées',
        2 => 'Transport vers le magasin central',
        3 => 'Stock par qualité et par lot',
        4 => 'Vente, expédition et règlement des producteurs',
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Ce qui bloque',
      'titre' => 'Les points qui coûtent le plus cher.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'La position réelle se connaît en fin de campagne',
          'texte' => 'Les bordereaux remontent par vagues. Tant qu\'ils ne sont pas tous saisis, le tonnage collecté et le prix de revient moyen restent des estimations — au moment précis où il faudrait décider de vendre ou d\'attendre.',
        ),
        1 => 
        array (
          'titre' => 'Les avances producteurs se suivent sur cahier',
          'texte' => 'Qui a reçu quoi, qui a livré combien, ce qui reste dû : l\'information est dispersée entre plusieurs cahiers et plusieurs personnes. Les litiges de fin de campagne viennent presque toujours de là.',
        ),
        2 => 
        array (
          'titre' => 'Les pesées se contestent',
          'texte' => 'Sans trace horodatée et partagée, un désaccord sur un poids se règle de mémoire. C\'est une source de tension récurrente avec les producteurs.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'La réponse',
      'titre' => 'Ce que je mets en place.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Une saisie de collecte qui marche hors connexion',
          'texte' => 'L\'agent enregistre producteur, poids et qualité depuis son téléphone, même sans réseau. Les données remontent seules dès que la connexion revient.',
        ),
        1 => 
        array (
          'titre' => 'Un compte par producteur, à jour en continu',
          'texte' => 'Avances versées, livraisons effectuées, solde restant : lisible à tout moment, par le producteur comme par vous. La plupart des litiges disparaissent d\'eux-mêmes.',
        ),
        2 => 
        array (
          'titre' => 'Le tonnage et le prix de revient en temps réel',
          'texte' => 'Chaque bordereau saisi met à jour la position. Vous décidez de vendre sur des chiffres du jour, pas sur une estimation.',
        ),
        3 => 
        array (
          'titre' => 'Un stock par lot et par qualité',
          'texte' => 'Ce qui est en magasin, sa qualité et son coût d\'entrée. Indispensable dès que plusieurs qualités coexistent au même endroit.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos points de collecte sont hors réseau une partie du temps.',
      'r' => 'C\'est le cas de conception principal : la saisie fonctionne entièrement hors connexion et se synchronise plus tard. Rien ne se perd.',
    ),
    1 => 
    array (
      'q' => 'Peut-on imprimer un reçu au producteur ?',
      'r' => 'Oui, soit sur une petite imprimante Bluetooth de terrain, soit par un SMS ou message WhatsApp de confirmation contenant poids et date. Les deux servent de preuve partagée.',
    ),
    2 => 
    array (
      'q' => 'L\'activité est très saisonnière, est-ce rentable ?',
      'r' => 'C\'est justement l\'argument : l\'outil se rentabilise sur une seule campagne s\'il évite les litiges d\'avances et permet de vendre au bon moment. Hors saison, il ne coûte que son hébergement.',
    ),
  ),
);
