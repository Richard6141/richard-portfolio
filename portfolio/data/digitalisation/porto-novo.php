<?php
// Porto-Novo — secteur dominant : etablissements scolaires et structures
// para-publiques, tel que declare dans data/villes/porto-novo.php.
declare(strict_types=1);

return [
    'ville'      => 'Porto-Novo',
    'ville_slug' => 'porto-novo',
    'pays'       => 'Bénin',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-porto-novo',
        'titre'    => "Digitalisation d'entreprise à Porto-Novo",
        'accroche' => "Des procédures écrites, des dossiers traçables, et une transition qui respecte l'existant.",
        'intro'    => "Porto-Novo est une ville administrative avant d'être commerçante, et cela change la façon d'aborder la digitalisation. Les structures qu'on y trouve — écoles, établissements para-publics, cabinets, associations — fonctionnent avec des procédures écrites, des validations en cascade et des archives qui doivent rester consultables des années. Ici, le sujet n'est pas la vitesse : c'est la traçabilité. Une digitalisation réussie à Porto-Novo est celle qui rend un dossier retrouvable en trente secondes et qui garde la trace de qui a validé quoi.",
        'signaux'  => [
            "Retrouver un dossier de l'année précédente prend plus d'une demi-heure.",
            "Les validations circulent en version papier signée, sans copie de sécurité.",
            "Le même document existe en plusieurs versions et personne ne sait laquelle fait foi.",
            "Le départ d'une personne emporte avec lui une partie de la mémoire des procédures.",
            "Les statistiques annuelles se reconstituent à la main, dossier par dossier.",
        ],
        'etapes' => [
            ['titre' => "Écrire la procédure réelle", 'texte' => "Avant tout outil, on met à plat le circuit tel qu'il se pratique, pas tel qu'il est censé se pratiquer. L'écart entre les deux est souvent la première source de perte de temps."],
            ['titre' => "Numériser l'entrant, pas l'archive", 'texte' => "On démarre à une date donnée. Reprendre rétroactivement des années d'archives coûte cher et sert rarement : le papier ancien reste consultable comme il l'est aujourd'hui."],
            ['titre' => "Tracer les validations", 'texte' => "Qui a validé, quand, sur quelle version. C'est ce qui protège la structure en cas de contestation, et c'est souvent le vrai bénéfice attendu."],
            ['titre' => "Rendre les statistiques automatiques", 'texte' => "Les chiffres que vous reconstituez chaque année en fin d'exercice deviennent consultables en continu, sans travail supplémentaire."],
        ],
        'budget'  => "À Porto-Novo, un premier chantier — dossiers centralisés et circuit de validation tracé, formation comprise — se situe généralement entre 400 000 et 900 000 FCFA. Les structures para-publiques ont souvent des contraintes de marché à anticiper : je fournis un devis détaillé et décomposé.",
        'delais'  => "4 à 8 semaines pour un premier circuit opérationnel, en comptant le temps de validation interne propre à ce type de structure.",
        'faq' => [
            ['q' => "Nos procédures sont imposées par la tutelle.", 'r' => "L'outil doit alors épouser la procédure, pas l'inverse. C'est le sens du cadrage : on part du circuit obligatoire et on le rend traçable, sans jamais le modifier."],
            ['q' => "Faut-il numériser toutes les archives ?", 'r' => "Presque jamais. On démarre à une date et on ne remonte que si un besoin précis le justifie. La numérisation rétroactive est le poste qui fait exploser les budgets sans contrepartie."],
            ['q' => "Que se passe-t-il si le prestataire disparaît ?", 'r' => "Vous restez propriétaire des données et du code, et l'export reste possible à tout moment. C'est une clause que je pose systématiquement, sans qu'on ait à me la demander."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-ecole-porto-novo',
        'nom'      => "établissements scolaires",
        'titre'    => "Digitaliser une école privée à Porto-Novo",
        'accroche' => "Inscriptions, scolarités et bulletins : arrêter de courir après les impayés.",
        'intro'    => "Une école privée de Porto-Novo gère chaque année une rentrée, des centaines de dossiers d'élèves, des scolarités payées en plusieurs tranches et des bulletins à produire trois fois par an. La difficulté n'est pas pédagogique : elle est administrative et financière. Savoir, à une date donnée, qui a payé quelle tranche et combien il reste à recouvrer — c'est souvent la question à laquelle personne ne sait répondre sans plusieurs heures de travail.",
        'flux' => [
            "Inscription et dossier élève",
            "Échéancier de scolarité et tranches",
            "Encaissements et reçus",
            "Notes, moyennes et bulletins",
            "Communication avec les parents",
        ],
        'douleurs' => [
            ['titre' => "L'état des impayés n'est jamais à jour", 'texte' => "Les paiements arrivent en espèces, par Mobile Money et parfois par virement, notés sur des supports différents. Le total réellement recouvré à une date donnée demande une reconstitution complète."],
            ['titre' => "Les bulletins mobilisent l'équipe des jours entiers", 'texte' => "Saisie des notes, calcul des moyennes, rangs, appréciations, impression : un travail répétitif qui revient trois fois par an et immobilise plusieurs personnes."],
            ['titre' => "Les parents appellent pour des informations simples", 'texte' => "Solde restant, date de la prochaine tranche, résultats : autant d'appels qui pourraient être évités si l'information était consultable."],
        ],
        'solution' => [
            ['titre' => "Un échéancier par élève, à jour en permanence", 'texte' => "Chaque encaissement met à jour le solde. L'état des impayés se lit à tout moment, par classe ou pour l'établissement entier."],
            ['titre' => "Des bulletins générés automatiquement", 'texte' => "Les enseignants saisissent leurs notes, moyennes et rangs se calculent seuls, les bulletins sortent en un clic. Le travail de plusieurs jours devient l'affaire d'une matinée."],
            ['titre' => "Des rappels de tranche automatiques", 'texte' => "Un message WhatsApp ou SMS quelques jours avant l'échéance. C'est la mesure qui améliore le plus vite le recouvrement, et elle est indolore."],
            ['titre' => "Un espace parents", 'texte' => "Solde, échéances et résultats consultables en ligne. Moins d'appels au secrétariat, et une image plus professionnelle à la rentrée suivante."],
        ],
        'faq' => [
            ['q' => "Les parents paient en espèces, est-ce compatible ?", 'r' => "Oui. L'encaissement en espèces se saisit au secrétariat avec édition d'un reçu numéroté. Le mode de paiement ne change rien au suivi, il est juste enregistré."],
            ['q' => "Peut-on démarrer en cours d'année ?", 'r' => "Oui, en reprenant les soldes à une date de bascule. C'est même souvent plus simple qu'attendre la rentrée, parce que le volume est plus faible."],
            ['q' => "Nos enseignants ne sont pas tous équipés.", 'r' => "La saisie des notes se fait depuis un téléphone, et reste possible au secrétariat pour ceux qui préfèrent remettre une feuille. On n'impose rien."],
        ],
    ],
];
