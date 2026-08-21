<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-ecole-porto-novo',
  'ville' => 'Porto-Novo',
  'ville_slug' => 'porto-novo',
  'pays' => 'Bénin',
  'titre' => 'Digitaliser une école privée à Porto-Novo',
  'accroche' => 'Inscriptions, scolarités et bulletins : arrêter de courir après les impayés.',
  'intro' => 'Une école privée de Porto-Novo gère chaque année une rentrée, des centaines de dossiers d\'élèves, des scolarités payées en plusieurs tranches et des bulletins à produire trois fois par an. La difficulté n\'est pas pédagogique : elle est administrative et financière. Savoir, à une date donnée, qui a payé quelle tranche et combien il reste à recouvrer, c\'est souvent la question à laquelle personne ne sait répondre sans plusieurs heures de travail.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Inscription et dossier élève',
        1 => 'Échéancier de scolarité et tranches',
        2 => 'Encaissements et reçus',
        3 => 'Notes, moyennes et bulletins',
        4 => 'Communication avec les parents',
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
          'titre' => 'L\'état des impayés n\'est jamais à jour',
          'texte' => 'Les paiements arrivent en espèces, par Mobile Money et parfois par virement, notés sur des supports différents. Le total réellement recouvré à une date donnée demande une reconstitution complète.',
        ),
        1 => 
        array (
          'titre' => 'Les bulletins mobilisent l\'équipe des jours entiers',
          'texte' => 'Saisie des notes, calcul des moyennes, rangs, appréciations, impression : un travail répétitif qui revient trois fois par an et immobilise plusieurs personnes.',
        ),
        2 => 
        array (
          'titre' => 'Les parents appellent pour des informations simples',
          'texte' => 'Solde restant, date de la prochaine tranche, résultats : autant d\'appels qui pourraient être évités si l\'information était consultable.',
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
          'titre' => 'Un échéancier par élève, à jour en permanence',
          'texte' => 'Chaque encaissement met à jour le solde. L\'état des impayés se lit à tout moment, par classe ou pour l\'établissement entier.',
        ),
        1 => 
        array (
          'titre' => 'Des bulletins générés automatiquement',
          'texte' => 'Les enseignants saisissent leurs notes, moyennes et rangs se calculent seuls, les bulletins sortent en un clic. Le travail de plusieurs jours devient l\'affaire d\'une matinée.',
        ),
        2 => 
        array (
          'titre' => 'Des rappels de tranche automatiques',
          'texte' => 'Un message WhatsApp ou SMS quelques jours avant l\'échéance. C\'est la mesure qui améliore le plus vite le recouvrement, et elle est indolore.',
        ),
        3 => 
        array (
          'titre' => 'Un espace parents',
          'texte' => 'Solde, échéances et résultats consultables en ligne. Moins d\'appels au secrétariat, et une image plus professionnelle à la rentrée suivante.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Les parents paient en espèces, est-ce compatible ?',
      'r' => 'Oui. L\'encaissement en espèces se saisit au secrétariat avec édition d\'un reçu numéroté. Le mode de paiement ne change rien au suivi, il est juste enregistré.',
    ),
    1 => 
    array (
      'q' => 'Peut-on démarrer en cours d\'année ?',
      'r' => 'Oui, en reprenant les soldes à une date de bascule. C\'est même souvent plus simple qu\'attendre la rentrée, parce que le volume est plus faible.',
    ),
    2 => 
    array (
      'q' => 'Nos enseignants ne sont pas tous équipés.',
      'r' => 'La saisie des notes se fait depuis un téléphone, et reste possible au secrétariat pour ceux qui préfèrent remettre une feuille. On n\'impose rien.',
    ),
  ),
);
