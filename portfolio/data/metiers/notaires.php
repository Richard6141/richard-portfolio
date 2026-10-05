<?php
// ============================================================
// data/metiers/notaires.php · Page « formations par métier » : notaires
// (vague 1C, univers Droit et justice, prioritaire, statut F).
// Angle propre : l'étude notariale (réception du client, pièces et
// vérifications, rédaction des actes authentiques, signature, formalités,
// minutes, répertoire, copies, fonds de tiers, relation client, secret,
// vigilance contre le blanchiment). La recherche juridique OHADA relève de
// la fiche ia-droit-ohada ; le cabinet d'avocats, de sa propre page métier.
// Faits externes lus le 05/10/2026 : loi béninoise n° 2002-015 portant
// statut du notariat (articles 37, 55, 56, 58, 76, 77, 81, 82, 84 à 87) et
// arrêté n° 0972 de 2004 portant code de déontologie notariale (articles 7,
// 8, 13, 20, 37), publiés par la Chambre des notaires du Bénin ; loi
// n° 2017-20 portant code du numérique (articles 266, 267, 301, 391) ;
// projet de loi uniforme LBC/FT de l'UMOA (décision n° 26 du 2 juillet 2015 :
// articles 1er, 6, 79, 82, 96) ; communiqué du Secrétariat permanent de
// l'OHADA sur les articles 10, 311 et 314 de l'AUSCGIE (2 juillet 2014) ;
// AUS du 15 décembre 2010, article 205 ; UINL (principes de 2005, code de
// Lima du 8 octobre 2013, 93 notariats) ; CSN (guide IA du 12 décembre 2025,
// partenariat Mistral AI du 9 juillet 2026, page sur le numérique) ; décret
// français n° 2023-1297 (articles 8, 9, 11, 19) ; rapport 2025 de Tracfin
// présenté par Actu-Juridique (11 septembre 2026) ; ANDF (e-Notaire 2020,
// e-Foncier 2025, 20 hectares) ; service-public.bj (état descriptif) ;
// FDFP, 3FPT ; « Faits déjà vérifiés » du catalogue (article 4, Odoo,
// WhatsApp). Richard n'est pas notaire : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et numérique pour notaires : préparer les actes, contrôler les pièces, conserver les minutes et suivre les clients avec des outils maîtrisés, sans jamais exposer le secret de l\'étude',
    'title'   => 'Formation IA et numérique pour notaires | Richard SALANON',
    'meta'    => 'Former une étude notariale à l\'IA et au numérique : actes authentiques, vérifications, archives, relation client, secret et vigilance LBC. Sur devis.',
    'en_bref' => 'Cette page s\'adresse aux notaires, aux clercs, aux formalistes, aux comptables et au personnel d\'accueil des études qui veulent utiliser l\'intelligence artificielle, la numérisation et quelques automatisations sans rien céder sur l\'authenticité, la conservation des minutes et le secret professionnel. Le parcours type dure trois jours en six demi-journées, se découpe par poste et se tient dans l\'étude, en session commune à plusieurs études, à distance ou en formule hybride. Richard SALANON forme à l\'usage des outils ; l\'acte, sa rédaction et sa signature restent au notaire. Le prix est fixé sur devis.',
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Droit et justice',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : le parcours d\'un dossier dans l\'étude, de la première visite à l\'archivage de la minute',
            'duree'  => '3 h 30',
            'points' => [
                'Dessin collectif du trajet d\'une vente immobilière et d\'une constitution de société dans l\'étude des participants : accueil, ouverture du dossier, demande des pièces, état descriptif, projet, lecture, signature, formalités, copies, répertoire, classement.',
                'Pour chaque étape, ce qui relève de la préparation matérielle, ce qui peut être outillé sous contrôle d\'un clerc, et ce que la loi réserve au notaire en personne.',
                'Inventaire des outils réellement présents : traitement de texte et modèles, tableur des dossiers, scanner, messagerie, WhatsApp, portails fonciers, logiciel comptable, assistants d\'IA ouverts par tel ou tel collaborateur.',
                'Les textes qui gouvernent l\'étude : statut du notariat et code de déontologie du pays, principes de l\'Union internationale du notariat, et pour les offices de France le code de déontologie de 2023 et le guide du CSN.',
                'Exercice : chaque poste (clerc, formaliste, comptable, accueil) liste ses dix tâches les plus longues et les place sur la carte.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : recevoir, classer et contrôler les pièces sans perdre la trace',
            'duree'  => '3 h 30',
            'points' => [
                'Une liste de pièces par type d\'acte, tenue à jour par l\'étude, et un message de demande clair envoyé au client, avec relance automatique tant que la liste n\'est pas complète.',
                'Nommage des fichiers, arborescence par dossier, séparation entre copies de travail numérisées et originaux, droits d\'accès par collaborateur.',
                'Pièces reçues par WhatsApp ou par courriel : versement au dossier le jour même, suppression des copies restées dans les téléphones, numéro professionnel de l\'étude.',
                'Contrôles d\'identité, de capacité et de pouvoirs : ce qu\'un tableau de contrôle aide à ne pas oublier, ce que seul le notaire constate.',
                'Exercice : ouverture complète d\'un dossier de vente fictif, avec deux pièces volontairement incohérentes à détecter.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : préparer un projet d\'acte avec des modèles à jour et un assistant sous contrôle',
            'duree'  => '3 h 30',
            'points' => [
                'Revue des modèles de l\'étude : date de la dernière mise à jour, texte sur lequel chaque clause s\'appuie, mentions imposées par le statut du notariat.',
                'Ce qu\'un assistant d\'IA peut faire sur une matière neutralisée : comparer deux versions d\'un modèle, relever les écarts avec un texte publié, reformuler une clause pour la rendre lisible au client, préparer une note d\'information.',
                'Ce qu\'il ne fait jamais : recevoir le nom des parties, les montants réels, l\'adresse du bien ou le contenu d\'un testament.',
                'Contrôle d\'un projet : sommes en lettres et en chiffres, identité des parties, désignation du bien, références du titre, pouvoirs annexés, absence de blanc.',
                'Exercice en binôme : mise à jour d\'un modèle de statuts de SARL selon le pays du siège, puis contrôle croisé par un autre binôme.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : formalités, portails publics, minutes, répertoire et archives',
            'duree'  => '3 h 30',
            'points' => [
                'Les formalités en ligne de l\'étude : portail foncier, demande d\'état descriptif, guichet de création d\'entreprise, comptes et habilitations nominatives.',
                'Suivi des formalités après signature dans un tableau partagé ou un outil de gestion, avec alertes sur les dossiers bloqués.',
                'Minute papier et copie numérisée : ce que la loi du pays exige, ce que la numérisation apporte pour la recherche et la consultation, ce qu\'elle ne remplace pas.',
                'Plan de numérisation des archives : ordre de priorité, format, nommage, sauvegarde hors de l\'étude, contrôle de lisibilité, journal des opérations.',
                'Exercice : rédaction de la procédure d\'archivage de l\'étude, de la signature au versement de la minute dans son carton et de sa copie dans le dossier numérique.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : relation client, fonds de tiers et vigilance contre le blanchiment',
            'duree'  => '3 h 30',
            'points' => [
                'Informer le client sans exposer le dossier : messages types, prise de rendez-vous, état d\'avancement communiqué aux seules personnes qui y ont droit.',
                'WhatsApp pour l\'étude : téléphone et numéro professionnels, sauvegarde chiffrée, étiquettes par dossier, aucune réponse sur le fond par un robot.',
                'Reçus, comptes clients et fonds détenus pour des tiers : ce qu\'un logiciel de gestion facilite, ce que la réglementation notariale du pays impose.',
                'Vigilance : bénéficiaire effectif, origine des fonds, opérations inhabituelles, et la confidentialité absolue d\'une déclaration de soupçon.',
                'Exercice : un dossier de cession de parts avec un paiement en espèces, un mandataire pressé et une société étrangère au capital, à traiter jusqu\'à la décision du notaire.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : la règle écrite de l\'étude, la sécurité et l\'évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Rédaction de la règle d\'usage de l\'étude : outils autorisés, comptes, données interdites, relecture, rôle de chacun, procédure en cas d\'incident.',
                'Sécurité minimale : double authentification sur les portails et la messagerie, sauvegardes testées, départ d\'un collaborateur, perte d\'un téléphone.',
                'Pour les offices établis dans l\'Union européenne : l\'obligation de maîtrise de l\'IA de l\'article 4 du règlement européen et la trace des formations suivies.',
                'Évaluation : un dossier fictif complet, avec une clause périmée dans un modèle, une pièce manquante et une réponse d\'assistant erronée à repérer.',
                'Remise des supports : carte des tâches, listes de pièces, grille de contrôle de projet, procédure d\'archivage, trame de règle d\'usage, fiche réflexe de vigilance.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Notaires, clercs, formalistes, comptables et accueil des études'],
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, découpables par poste'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA, la numérisation et l\'automatisation dans une étude notariale ?',
            'paragraphes' => [
                'Une étude notariale vit au rythme de ses dossiers : une famille qui achète une maison, une société qui se constitue, une banque qui prend une hypothèque, une succession à régler. Chaque dossier traverse les mêmes étapes, de la réception du client à la conservation de la minute, en passant par les pièces à réunir, les vérifications, le projet d\'acte, la lecture, la signature, les formalités et les copies. La formation porte sur ce trajet entier, et sur la place que des outils peuvent y prendre sans toucher à ce qui fait la valeur de l\'acte authentique.',
                'Les portails publics ont déjà transformé une partie du travail. Au Bénin, l\'Agence nationale du domaine et du foncier a lancé le 1er avril 2020 la plateforme e-Notaire, réservée aux notaires, pour accomplir en ligne les formalités foncières ; l\'agence annonçait alors qu\'un titre foncier pouvait changer de propriétaire en 72 heures. Depuis le 1er janvier 2025, selon son communiqué du 2 décembre 2024, la formalisation foncière passe exclusivement par la base numérique du cadastre, sur la plateforme e-Foncier, dans douze communes dont Cotonou, Porto-Novo, Parakou et Abomey-Calavi.',
                'L\'intelligence artificielle arrive à son tour, et la profession l\'encadre. En France, le Conseil supérieur du notariat a publié le 12 décembre 2025 un guide de son Institut d\'études juridiques qui rappelle trois principes : le respect absolu du secret professionnel, la maîtrise du traitement des données personnelles et la responsabilité pleine et entière de l\'acte notarié. Le 9 juillet 2026, il a annoncé un partenariat de dix-huit mois avec Mistral AI et l\'hébergeur Scaleway pour offrir aux offices un environnement d\'IA hébergé en Europe, en laissant chaque notaire libre d\'utiliser d\'autres outils conformes à la charte IA de la profession.',
                'La formation part de l\'étude telle qu\'elle fonctionne, avec ses modèles, ses cartons d\'archives, ses téléphones et ses habitudes. Elle apprend à chaque poste ce qu\'un outil peut préparer, ce qu\'il fait sous le contrôle d\'un clerc et ce que la loi réserve au notaire ; elle installe des listes de pièces, une grille de contrôle des projets, une procédure d\'archivage et une règle écrite. Richard SALANON n\'est pas notaire : il forme à l\'usage des outils, et c\'est le notaire présent qui dit, pendant les exercices, si un projet d\'acte est juridiquement correct.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles étapes d\'un dossier notarial un outil peut-il préparer, et lesquelles restent au notaire ?',
            'legende' => 'Répartition travaillée pendant la formation, étape par étape. La dernière colonne signale le point qui fait le plus souvent défaut quand une étude s\'équipe trop vite.',
            'entetes' => ['Étape du dossier', 'Ce qu\'un outil peut préparer', 'Ce qui reste au notaire ou à l\'étude', 'Point de vigilance'],
            'lignes'  => [
                ['Premier rendez-vous et ouverture du dossier', 'Fiche d\'ouverture, liste des pièces propre au type d\'acte, message de demande envoyé au client', 'Écouter le projet, conseiller, accepter ou refuser son ministère', 'Une fiche remplie par un robot de messagerie avant que le notaire ait vu le client'],
                ['Collecte des pièces', 'Relances automatiques tant que la liste n\'est pas complète, classement par dossier, accusé de réception', 'Juger qu\'une pièce suffit, demander un complément', 'Des pièces d\'identité qui restent dans le téléphone d\'un collaborateur'],
                ['Identité, capacité et pouvoirs', 'Tableau de contrôle qui rappelle chaque vérification à faire et sa date', 'Constater l\'identité et la capacité des parties, apprécier les pouvoirs du mandataire', 'Un contrôle coché sans que la pièce ait été vue en original'],
                ['Situation du bien ou de la société', 'Demande en ligne de l\'état descriptif, consultation du registre, rappel des délais de validité', 'Lire l\'état, relever les inscriptions, en tirer les conséquences pour l\'acte', 'Un état descriptif ancien réutilisé pour un nouveau projet'],
                ['Vigilance contre le blanchiment', 'Questionnaire sur l\'origine des fonds et le bénéficiaire effectif, alerte sur les paiements en espèces', 'Apprécier le risque, décider de poursuivre, déclarer un soupçon', 'Une alerte discutée devant le client ou dans un groupe de messagerie'],
                ['Projet d\'acte', 'Modèle à jour, comparaison de versions, reformulation d\'une clause pour la note au client', 'Rédiger l\'acte, choisir les clauses, contrôler chaque mention', 'Un modèle ancien qui ignore une réforme ou le texte national applicable'],
                ['Lecture et signature', 'Préparation matérielle de la salle, des annexes, des documents à parapher', 'Lire l\'acte, s\'assurer du consentement libre et éclairé, recevoir les signatures', 'Une signature prévue à distance là où la loi du pays ne la prévoit pas'],
                ['Formalités après signature', 'Tableau de suivi, alertes sur les dossiers bloqués, dépôt en ligne quand le portail le permet', 'Valider ce qui part au nom de l\'étude, répondre de la formalité', 'Des habilitations au portail partagées entre plusieurs personnes'],
                ['Minute, répertoire et copies', 'Copie numérisée de consultation, index de recherche, journal des copies délivrées', 'Conserver la minute, tenir le répertoire, délivrer grosses et expéditions', 'Une copie numérisée considérée à tort comme l\'original'],
                ['Fonds et comptes clients', 'Rapprochements, état des sommes détenues par dossier, rappel des échéances de versement', 'Encaisser, payer, rendre compte au client', 'Des fonds de tiers suivis dans le même tableur que les dépenses de l\'étude'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que l\'IA et l\'automatisation ne doivent-elles jamais faire dans une étude notariale ?',
            'intro' => 'Ces limites ne sont pas une prudence de formateur : elles découlent du statut du notaire, officier public qui tient de l\'État le pouvoir de conférer l\'authenticité. Les textes qui les fondent sont présentés juste après ; la formation les transforme en gestes de tous les jours.',
            'items' => [
                ['titre' => 'Rédiger l\'acte à la place du notaire', 'texte' => 'Les principes de l\'Union internationale du notariat, adoptés à Rome le 8 novembre 2005, font du notaire « le seul maître de la rédaction de ses actes », et son code modèle adopté à Lima le 8 octobre 2013 précise que la fonction notariale est personnelle et ne peut pas être déléguée. Un assistant peut proposer une formulation ; il ne choisit ni la clause, ni la structure de l\'acte, ni ce qui sera lu aux parties.'],
                ['titre' => 'Constater l\'identité ou le consentement', 'texte' => 'Le notaire vérifie l\'identité, la capacité et les pouvoirs des parties, et s\'assure que leur volonté a été librement exprimée en sa présence, quel que soit le support de l\'acte. Au Bénin, l\'article 55 du statut du notariat exige que l\'identité des parties inconnues du notaire soit établie par des documents justificatifs. Aucun outil de lecture automatique de pièces ne remplace ce constat.'],
                ['titre' => 'Faire sortir un dossier de l\'étude vers un service non maîtrisé', 'texte' => 'Le code de déontologie notariale du Bénin étend le secret à tout ce qui est porté à la connaissance du notaire dans l\'exercice de sa profession, et l\'oblige à en instruire ses collaborateurs. En France, le décret du 28 décembre 2023 qualifie ce secret de général et absolu. Un acte en projet, un testament ou une liste d\'héritiers ne se colle donc pas dans un compte gratuit ouvert par un clerc.'],
                ['titre' => 'Prendre la place de la minute', 'texte' => 'Au Bénin, le statut impose de conserver la minute de tous les actes reçus, sauf ceux délivrés en brevet, et interdit au notaire de s\'en dessaisir hors des cas prévus par la loi. La minute y est établie sur un papier offrant une garantie de conservation. Une copie numérisée sert à chercher et à consulter ; elle n\'est jamais l\'original.'],
                ['titre' => 'Renseigner n\'importe qui sur un acte', 'texte' => 'L\'article 82 du statut béninois interdit de donner connaissance des actes à d\'autres personnes que les intéressés en nom direct, leurs héritiers ou ayants droit, sans ordonnance du président du tribunal, sous peine d\'une amende de 50 000 francs. Un robot qui annonce l\'état d\'un dossier à toute personne qui écrit depuis un numéro inconnu viole cette règle.'],
                ['titre' => 'Traiter une déclaration de soupçon dans un outil partagé', 'texte' => 'Le projet de loi uniforme de l\'UMOA sur la lutte contre le blanchiment, que les États de l\'Union ont transposé, rend la déclaration de soupçon confidentielle et interdit d\'en révéler l\'existence au client ou à des tiers. Elle ne se rédige ni dans un assistant en ligne, ni dans un groupe de discussion de l\'étude, ni dans un tableau visible par tous.'],
                ['titre' => 'Publier ou démarcher au nom de l\'étude', 'texte' => 'Le code de déontologie béninois interdit toute publicité à caractère personnel du notaire, et le code modèle de l\'UINL proscrit la propagande commerciale. Un outil qui « génère des publications » pour les réseaux sociaux ne modifie en rien cette règle : l\'information du public passe par la Chambre et par les formules qu\'elle agrée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels textes encadrent les outils numériques d\'une étude en Afrique francophone ?',
            'legende' => 'Textes lus le 5 octobre 2026 dans leur version publiée. L\'exemple pris est le Bénin, dont les textes sont publiés par la Chambre des notaires ; les participants d\'autres pays apportent leur statut, leur code de déontologie et leur loi de transposition, qui priment pour eux.',
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Conséquence pour les outils de l\'étude'],
            'lignes'  => [
                ['Loi béninoise n° 2002-015 du 30 décembre 2002 portant statut du notariat, articles 37, 56 et 58', 'Conservation de la minute de tous les actes ; minutes sur papier offrant une garantie de conservation, établies par ordinateur après accord de la Chambre nationale des notaires ; paraphes et signatures manuscrits sur les grosses et expéditions', 'Le modèle de l\'étude produit l\'acte, la minute papier reste l\'original ; la numérisation est une copie de travail et de recherche'],
                ['Même loi, articles 76, 77 et 81', 'Répertoire de tous les actes, présenté tous les trois mois aux inspecteurs de l\'enregistrement ; interdiction de se dessaisir d\'une minute', 'Un index numérique aide à retrouver un acte ; le répertoire réglementaire se tient comme la loi l\'exige'],
                ['Même loi, articles 84 à 87', 'Sommes détenues pour des tiers versées à la caisse des dépôts et consignations après six mois ; reçus numérotés avec doubles ; procédés automatisés de comptabilité agréés après accord de la Chambre', 'Un logiciel de gestion ne remplace pas la comptabilité notariale réglementée sans cet agrément ; il peut suivre les échéances'],
                ['Arrêté n° 0972 de 2004 portant code de déontologie notariale, articles 7, 20 et 37', 'Secret couvrant tout ce qui est porté à la connaissance du notaire ; collaborateurs instruits de cette obligation ; personnel choisi pour sa discrétion ; communication des actes aux seules personnes autorisées', 'Chaque collaborateur connaît la règle d\'usage des outils et la signe ; les accès sont nominatifs'],
                ['Loi n° 2017-20 portant code du numérique, articles 266, 267 et 301', 'L\'écrit électronique vaut l\'écrit papier sous réserve des dispositions légales particulières ; exceptions pour les actes que la loi exige sur papier ; conditions de l\'archivage électronique', 'Le statut du notariat est une disposition particulière ; l\'archivage numérique de l\'étude doit rester lisible, intègre et daté'],
                ['Même code, article 391', 'Un transfert de données personnelles vers un État tiers n\'a lieu que si l\'Autorité de protection constate un niveau de protection équivalent', 'Un assistant hébergé hors du Bénin reçoit au plus des textes neutralisés, jamais l\'identité des clients'],
                ['Projet de loi uniforme LBC/FT de l\'UMOA (décision n° 26 du 2 juillet 2015), articles 6, 79, 82 et 96', 'Notaires assujettis pour les transactions immobilières, la gestion de fonds et la constitution de sociétés ; déclaration de soupçon à la CENTIF ; confidentialité de la déclaration ; secret non opposable à la CENTIF', 'La vigilance laisse une trace écrite dans le dossier ; la déclaration reste hors de tout outil partagé'],
                ['Acte uniforme OHADA sur les sociétés commerciales révisé le 30 janvier 2014, articles 10 et 314', 'Statuts établis par acte notarié ou déposés au rang des minutes d\'un notaire, déclaration notariée de souscription et de versement, sauf dispositions nationales contraires', 'Chaque modèle de statuts indique le pays pour lequel il vaut, car plusieurs États ont ouvert l\'acte sous seing privé pour la SARL'],
                ['Acte uniforme OHADA portant organisation des sûretés du 15 décembre 2010, article 205', 'Hypothèque conventionnelle par acte authentique du notaire territorialement compétent ou par acte sous seing privé sur un modèle agréé, selon la loi nationale du lieu de l\'immeuble', 'Les modèles d\'actes d\'hypothèque se rattachent à l\'immeuble et au pays, et se revoient à chaque réforme'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles règles internationales et européennes s\'appliquent aux outils du notariat ?',
            'legende' => 'Textes et communiqués lus le 5 octobre 2026. Les principes de l\'UINL servent de modèle aux 93 notariats membres, dont ceux du Bénin, de la Côte d\'Ivoire, du Sénégal, du Togo, du Cameroun, de la France, de la Belgique et de la Suisse.',
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Ce que cela change pour l\'étude'],
            'lignes'  => [
                ['UINL, principes de la fonction notariale (Rome, 8 novembre 2005)', 'Le notaire vérifie identité, capacité et pouvoirs, contrôle la légalité, s\'assure du libre consentement « sans égard au support » et reste seul maître de la rédaction', 'Le passage au numérique ne déplace aucune de ces vérifications vers un outil'],
                ['UINL, déontologie et règles d\'organisation du notariat (Lima, 8 octobre 2013), articles 12 et 30', 'L\'étude se dote des moyens techniques adaptés ; archives conservées en parfait état, avec des moyens matériels et informatiques assurant conservation et recherche', 'La numérisation des archives fait partie des devoirs d\'organisation, à condition d\'être fiable'],
                ['Même code, article 48', 'Secret et confidentialité pour le notaire, ses employés et ses collaborateurs ; secret particulièrement gardé pour les documents électroniques, contre la copie, la perte, la diffusion ou la publication', 'Chaque copie numérique d\'un acte est un risque à maîtriser : où elle se trouve, qui la voit, combien de temps elle reste'],
                ['Même code, article 17', 'Refus du blanchiment ; la communication aux autorités d\'opérations douteuses ne viole pas le secret', 'La vigilance fait partie de la déontologie, pas seulement de la conformité'],
                ['Décret français n° 2023-1297 du 28 décembre 2023 portant code de déontologie des notaires, articles 8, 9, 11 et 19', 'Secret général et absolu pour le notaire et toute personne placée sous son autorité ; procédures de lutte contre le blanchiment ; entretien des connaissances ; conservation des minutes et du répertoire', 'Les collaborateurs d\'un office sont tenus au même secret que le notaire quand ils utilisent un assistant'],
                ['Conseil supérieur du notariat, guide « Introduction à l\'intelligence artificielle » (12 décembre 2025)', 'Secret absolu, maîtrise des données personnelles, responsabilité pleine et entière de l\'acte', 'L\'outil se choisit d\'après ces trois exigences, pas d\'après sa rapidité'],
                ['Règlement européen sur l\'IA, article 4', 'Obligation de maîtrise de l\'IA pour les utilisateurs professionnels, applicable depuis le 2 février 2025, contrôlée et sanctionnée depuis le 3 août 2026', 'Un office établi dans l\'Union forme ses collaborateurs qui utilisent l\'IA et garde la trace de ces formations'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Une copie numérisée peut-elle remplacer la minute dans une étude africaine ?',
            'texte' => 'Non, pas au Bénin ni dans les pays dont le statut suit la même logique. Le code du numérique reconnaît l\'écrit électronique « sous réserve de dispositions légales particulières » et excepte les actes que la loi exige sur papier ; le statut du notariat impose une minute sur papier de qualité et interdit de s\'en dessaisir. L\'acte authentique électronique existe en France depuis 2008, mais il repose sur une signature qualifiée, un minutier central et un cadre légal propres. Un PDF scanné n\'a rien de tout cela : il facilite la recherche et la consultation, il ne fait pas foi.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés situent la transformation numérique du notariat ?',
            'items' => [
                ['valeur' => '93', 'libelle' => 'Notariats membres de l\'Union internationale du notariat, dont ceux de la plupart des pays d\'Afrique francophone, de la France, de la Belgique, de la Suisse et du Québec (page consultée le 5 octobre 2026)', 'source' => 'UINL, page d\'accueil et liste des membres', 'url' => 'https://uinl.org/fr/'],
                ['valeur' => 'Plus de 90 %', 'libelle' => 'Part des actes authentiques signés électroniquement en France, où le 20 millionième acte authentique électronique a été déposé au minutier central en novembre 2021, treize ans après le premier en 2008 (page consultée le 5 octobre 2026)', 'source' => 'Conseil supérieur du notariat, l\'évolution numérique dans le notariat', 'url' => 'https://www.csn.notaires.fr/fr/levolution-numerique-dans-le-notariat'],
                ['valeur' => '18 mois', 'libelle' => 'Durée du partenariat annoncé le 9 juillet 2026 par le Conseil supérieur du notariat avec Mistral AI et Scaleway, pour que les offices expérimentent l\'IA dans un environnement hébergé en Europe et respectueux du secret', 'source' => 'Conseil supérieur du notariat, communiqué du 9 juillet 2026', 'url' => 'https://www.csn.notaires.fr/fr/actualites/intelligence-artificielle-le-conseil-superieur-du-notariat-choisit-mistral-ai-et'],
                ['valeur' => 'Près de 6 600', 'libelle' => 'Déclarations de soupçon adressées à Tracfin par les notaires de France en 2025, en hausse de 64 % sur un an, sur 278 484 déclarations reçues au total (rapport présenté le 11 septembre 2026)', 'source' => 'Actu-Juridique, présentation du rapport d\'activité et d\'impact 2025 de Tracfin', 'url' => 'https://www.actu-juridique.fr/breves/notaires/publication-du-rapport-dactivite-et-dimpact-2025-de-tracfin/'],
                ['valeur' => '5 500 FCFA', 'libelle' => 'Coût de l\'état descriptif d\'un titre foncier demandé en ligne au Bénin, délivré en 24 heures selon la fiche du service, que les officiers ministériels peuvent demander (page consultée le 5 octobre 2026)', 'source' => 'Portail national des services publics du Bénin, fiche « État descriptif »', 'url' => 'https://service-public.bj/public/services/service/PS00126'],
                ['valeur' => '20 hectares', 'libelle' => 'Superficie au-delà de laquelle l\'acquéreur d\'un bien rural au Bénin doit prouver la provenance des fonds pour faire approuver son projet de mise en valeur, selon la décision de l\'ANDF du 27 décembre 2024', 'source' => 'Agence nationale du domaine et du foncier, communiqué du 27 décembre 2024', 'url' => 'https://andf.bj/lutte-contre-le-blanchiment-de-capitaux-de-nouvelles-exigences-pour-lacquisition-de-terrains-ruraux-de-plus-de-20-hectares-au-benin/'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation dans des études d\'Afrique francophone et d\'Europe ?',
            'items' => [
                ['secteur' => 'Étude de taille moyenne, à Cotonou', 'probleme' => 'Les clients envoient leurs pièces par WhatsApp sur les téléphones personnels des clercs, les formalités passent par e-Notaire et e-Foncier avec un seul identifiant partagé, et personne ne sait dire quelles pièces manquent dans quel dossier.', 'solution' => 'Numéro professionnel de l\'étude, pièces versées au dossier le jour même, listes de pièces par type d\'acte avec relances, habilitations nominatives aux portails, tableau de suivi des formalités consulté chaque matin.'],
                ['secteur' => 'Étude spécialisée en droit des sociétés, à Abidjan', 'probleme' => 'Les modèles de statuts de SARL datent d\'avant l\'ordonnance ivoirienne de 2014 qui a ouvert l\'acte sous seing privé, et les clercs servent aussi des clients qui créent leur société au Togo ou au Burkina Faso.', 'solution' => 'Revue des modèles pays par pays avec le notaire, mention du pays de validité en tête de chaque modèle, comparaison assistée sur des modèles neutralisés et contrôle croisé de chaque clause modifiée.'],
                ['secteur' => 'Étude travaillant pour des banques, à Dakar', 'probleme' => 'Un volume important d\'actes d\'hypothèque et de mainlevée, des délais imposés par les établissements de crédit, et une vigilance contre le blanchiment qui se limite à une photocopie de pièce d\'identité.', 'solution' => 'Modèles d\'actes rattachés à l\'article 205 de l\'Acte uniforme sur les sûretés et au texte national, questionnaire de vigilance intégré à l\'ouverture du dossier, fiche réflexe sur la confidentialité d\'une déclaration de soupçon.'],
                ['secteur' => 'Étude ancienne, à Lomé', 'probleme' => 'Des décennies de minutes dans des cartons exposés à l\'humidité, un répertoire tenu à la main et des recherches d\'actes anciens qui prennent des journées entières.', 'solution' => 'Plan de numérisation par ordre de priorité, index de recherche, sauvegarde hors de l\'étude, journal des copies délivrées, sans jamais déplacer ni remplacer les minutes, qui restent conservées comme la loi l\'exige.'],
                ['secteur' => 'Office notarial de province, en France', 'probleme' => 'Certains collaborateurs utilisent un assistant grand public pour reformuler des courriers et résumer des actes, alors que le CSN propose depuis juillet 2026 un environnement encadré et diffuse une charte IA.', 'solution' => 'Inventaire des usages réels, règle d\'usage de l\'office alignée sur le guide du CSN, choix d\'un outil conforme à la charte, formation tracée au titre de l\'article 4 du règlement européen.'],
                ['secteur' => 'Étude bruxelloise aux clients africains', 'probleme' => 'Des successions et des achats immobiliers qui mêlent un bien en Belgique et un bien au Sénégal ou au Cameroun, avec des pièces dans plusieurs langues et des héritiers dispersés.', 'solution' => 'Listes de pièces par pays, traductions préparées sur des textes neutralisés puis vérifiées, correspondance avec les confrères africains hors des outils non maîtrisés, vigilance renforcée sur les fonds venant de l\'étranger.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils et systèmes une étude notariale travaille-t-elle, et que faut-il en savoir ?',
            'legende' => 'Outils rencontrés dans les études de la zone OHADA et d\'Europe. Les prix d\'éditeurs ou d\'administrations ont été relevés le 5 octobre 2026 ; ils sont payés par l\'étude ou le client et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil ou système', 'Usage dans l\'étude', 'Coût ou accès', 'Point d\'attention'],
            'lignes'  => [
                ['Logiciel de rédaction d\'actes et modèles de l\'étude', 'Projets d\'actes, clauses, mentions obligatoires, numérotation, répertoire', 'Licence d\'éditeur, ou traitement de texte et bibliothèque de modèles internes', 'Chaque modèle porte une date de révision, le texte qui le fonde et le pays où il vaut'],
                ['Portails fonciers au Bénin (e-Notaire, e-Foncier, état descriptif en ligne)', 'Formalités foncières, consultation du cadastre, état descriptif d\'un titre', 'Compte nominatif ; état descriptif à 5 500 FCFA, délivré en 24 heures selon la fiche du service', 'Un identifiant par personne habilitée, double authentification quand elle existe, aucun mot de passe affiché au mur'],
                ['Registre du commerce et guichets de création d\'entreprise', 'Immatriculation des sociétés, dépôt des statuts, formalités modificatives', 'Selon le pays et le guichet', 'Le statut national de la SARL décide si l\'acte notarié est obligatoire ou non'],
                ['Assistant d\'IA en offre professionnelle', 'Comparaison de modèles neutralisés, reformulation d\'une note au client, résumé d\'un texte publié', 'Abonnement par utilisateur ; les offres et leurs garanties sont comparées dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>', 'Conditions d\'usage des données lues avant tout usage, comptes de l\'étude seulement, rien d\'identifiant'],
                ['Modèle d\'IA installé sur un poste de l\'étude', 'Travail sur des documents qui ne doivent pas quitter l\'étude', 'Logiciel gratuit ; le coût est celui de l\'ordinateur', 'Moins performant ; ses réponses se vérifient de la même façon'],
                ['Odoo ou Dolibarr', 'Suivi des dossiers, relances, facturation des honoraires non tarifés, tableaux de bord', 'Odoo : une application gratuite, offre Standard à 19,90 € par utilisateur et par mois la première année en paiement annuel ; Dolibarr : logiciel libre, coût d\'hébergement et de paramétrage', 'La comptabilité notariale réglementée et les fonds de tiers suivent les règles du pays et l\'agrément prévu ; voir le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a>'],
                ['WhatsApp et WhatsApp Business', 'Rendez-vous, demandes de pièces, avancement général du dossier', 'Application gratuite ; l\'API est facturée par message au-delà de 1 000 messages de service gratuits par mois et par numéro', 'Numéro de l\'étude, sauvegarde chiffrée, pièces versées au dossier, rien sur le fond ni sur un acte à un inconnu'],
                ['Scanner, gestion électronique des documents et sauvegarde', 'Copies de consultation des minutes, pièces des dossiers, archives anciennes', 'Matériel et stockage achetés par l\'étude', 'Formats durables, nommage stable, sauvegarde hors de l\'étude, essai de restauration régulier'],
                ['Automatisation (n8n, Make)', 'Relances de pièces manquantes, alertes sur les formalités bloquées, rappels de rendez-vous', 'n8n Cloud à partir de 20 € par mois en paiement annuel ; n8n peut aussi s\'installer sur un serveur de l\'étude', 'Aucune automatisation n\'envoie un acte, une copie ou une information sur un dossier sans validation humaine'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation s\'organise-t-elle dans une étude ?',
            'intro' => 'Une étude ne ferme pas pour se former : les signatures sont fixées, les banques attendent leurs actes et les clients passent sans rendez-vous. L\'organisation part de ces contraintes et du rôle de chaque poste dans le dossier.',
            'items' => [
                ['titre' => 'Un découpage par poste', 'texte' => 'Le notaire suit la première et la dernière demi-journée, parce qu\'il fixe la règle et répond de l\'acte. Les clercs suivent tout le parcours. Les formalistes rejoignent les demi-journées sur les pièces et les portails, le comptable celle sur les fonds de tiers, l\'accueil celle sur la relation client.'],
                ['titre' => 'Les outils de l\'étude', 'texte' => 'Les exercices se font dans les modèles, le logiciel, les portails et la messagerie que l\'étude utilise vraiment. Les identifiants restent dans les mains de leurs titulaires : le formateur ne demande aucun mot de passe et ne se connecte à aucun portail au nom de l\'étude.'],
                ['titre' => 'Des dossiers fictifs construits avec le notaire', 'texte' => 'Aucun dossier en cours, aucun testament, aucune minute ne sert de matière. Les dossiers d\'exercice reproduisent les situations de l\'étude, avec des noms, des montants et des biens inventés, et des erreurs placées volontairement pour être trouvées.'],
                ['titre' => 'Des groupes de huit personnes au plus', 'texte' => 'Chacun travaille sur son poste, et les erreurs de classement ou de contrôle se voient tout de suite. Une étude importante est répartie en groupes par métier plutôt que par ancienneté, pour que les échanges portent sur les mêmes tâches.'],
                ['titre' => 'Un calendrier qui épargne les signatures', 'texte' => 'Les demi-journées se placent en dehors des périodes chargées, fins de mois et fins d\'année notamment, et peuvent s\'étaler sur plusieurs semaines. La partie sur l\'archivage gagne à être suivie d\'une journée de mise en pratique dans les archives elles-mêmes.'],
                ['titre' => 'Des supports que l\'étude garde', 'texte' => 'Carte des tâches, listes de pièces, grille de contrôle des projets, procédure d\'archivage, trame de règle d\'usage et fiche réflexe de vigilance, dans des formats modifiables, avec une attestation nominative de fin de formation.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Un canal reste ouvert pendant une période fixée au devis pour les questions d\'usage des outils. Les questions de droit, de déontologie ou de tarif sont renvoyées au notaire, à la Chambre et aux confrères.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir selon la taille et l\'organisation de l\'étude ?',
            'legende' => 'Formats indicatifs, recomposés après un premier échange sur l\'effectif, les types d\'actes les plus fréquents, l\'état des archives et les outils en place.',
            'entetes' => ['Situation', 'Format conseillé', 'Durée', 'Ce qui est privilégié'],
            'lignes'  => [
                ['Notaire exerçant avec deux ou trois collaborateurs', 'Séances dans l\'étude, en petit comité', '4 à 6 séances de 2 heures', 'Listes de pièces, WhatsApp, portails et règle d\'usage simple'],
                ['Étude de 5 à 15 personnes', 'Intra, dans les locaux de l\'étude', '3 jours en 6 demi-journées', 'Le parcours complet, avec une règle d\'usage adoptée à la fin'],
                ['Étude de plus de 15 personnes ou à plusieurs bureaux', 'Intra en plusieurs groupes, ou hybride', '3 jours par groupe, plus une demi-journée pour les notaires associés', 'Référents par bureau, modèles communs, procédure d\'archivage partagée'],
                ['Clercs et stagiaires de plusieurs études', 'Inter, avec la Chambre ou une association professionnelle, sur dossiers fictifs', '2 jours', 'Méthode de contrôle des pièces et des projets, bonnes habitudes dès l\'entrée dans le métier'],
                ['Étude dont les archives sont à reprendre', 'Formation suivie d\'un accompagnement sur place', '1 jour de formation, puis séances de mise en pratique', 'Plan de numérisation, index, sauvegarde et journal des copies'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d\'une étude, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Le prix est fixé sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux logiciels et les frais des portails restent payés par l\'étude ou le client.',
            'items'      => [
                ['offre' => 'Parcours étude complet', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur les outils de l\'étude', 'Carte des tâches et règle d\'usage', 'Listes de pièces et grille de contrôle des projets', 'Évaluation finale et attestation nominative']],
                ['offre' => 'Module notaires associés', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée de décision', 'Choix des outils et des comptes', 'Règle d\'usage et circuit de relecture', 'Plan de formation des collaborateurs']],
                ['offre' => 'Module archives et formalités', 'prix' => 'Sur devis', 'inclus' => ['Plan de numérisation des archives', 'Index et journal des copies', 'Portails fonciers et suivi des formalités', 'Procédure d\'archivage écrite']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, et le découpage par poste.',
                'Le travail de préparation sur les modèles de l\'étude et la construction des dossiers fictifs.',
                'L\'état des archives et l\'accompagnement éventuel de leur numérisation.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le choix du présentiel, de la distance ou de l\'hybride.',
                'La durée du suivi retenu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation ou la profession peuvent-ils financer la session ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est garantie ici. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> reçoit le plan de formation que l\'entreprise présente pour ses salariés, y compris des formations intra assurées par un intervenant extérieur : une étude qui emploie des clercs et du personnel peut l\'interroger, programme et devis en main. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche un guichet pour le personnel des entreprises et des membres des organisations professionnelles, et un autre pour les demandes individuelles. Au Bénin, les conditions du FODEFCA se demandent au fonds au moment du projet.',
                'En France, le code de déontologie des notaires de 2023 demande au notaire d\'entretenir et de renouveler ses connaissances, et le CSN habilite certaines formations pour la formation continue de la profession. Richard SALANON ne figure pas parmi ces organismes habilités, n\'est pas certifié Qualiopi et ne détient l\'agrément d\'aucun fonds africain. Le budget de l\'étude se construit donc d\'abord sans financement extérieur ; le programme, les feuilles de présence, l\'évaluation et les attestations sont fournis dans tous les cas, pour toute démarche que l\'étude voudrait engager.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les études qui s\'équipent, et comment les éviter ?',
            'intro' => 'Les mêmes faux pas reviennent d\'une étude à l\'autre. Aucun n\'est une question de technique : ce sont des habitudes, et elles se corrigent par une règle écrite et un contrôle régulier.',
            'items' => [
                ['titre' => 'Numériser sans plan', 'texte' => 'Scanner les archives au fil de l\'eau produit des milliers de fichiers mal nommés, qu\'aucune recherche ne retrouve. On décide d\'abord l\'ordre des cartons, le format, le nommage, l\'index et le lieu de sauvegarde, puis on numérise.'],
                ['titre' => 'Partager un identifiant de portail', 'texte' => 'Un seul compte e-Notaire ou e-Foncier utilisé par trois collaborateurs empêche de savoir qui a fait quoi. Chaque personne habilitée a son accès, et un départ entraîne la fermeture de ses comptes le jour même.'],
                ['titre' => 'Laisser vieillir les modèles', 'texte' => 'Un modèle de statuts ou d\'acte d\'hypothèque recopié depuis des années finit par contredire le texte en vigueur ou la loi nationale prise depuis. Chaque modèle reçoit une date de révision et un responsable.'],
                ['titre' => 'Coller un acte dans un assistant gratuit', 'texte' => 'Le clerc pressé qui veut « juste reformuler » une clause transmet souvent l\'acte entier, avec les noms et l\'adresse du bien. La règle est simple : aucun élément identifiant ne sort de l\'étude, et les comptes gratuits personnels sont exclus.'],
                ['titre' => 'Confier la relation client à un robot', 'texte' => 'Un robot de messagerie peut confirmer un rendez-vous ou rappeler une pièce manquante. Il ne communique pas l\'état d\'un dossier à une personne non identifiée et ne répond jamais sur le fond d\'un acte ou d\'une succession.'],
                ['titre' => 'Tenir la vigilance à l\'oral', 'texte' => 'Un doute sur l\'origine des fonds évoqué dans un couloir ne laisse aucune trace. Le questionnaire de vigilance est rempli dans le dossier, la décision du notaire y est notée, et une éventuelle déclaration reste hors des outils partagés.'],
                ['titre' => 'Former seulement les plus jeunes', 'texte' => 'Si le notaire et le principal clerc ne connaissent pas la règle, personne ne la fait respecter. Ceux qui relisent et signent suivent au moins les demi-journées d\'ouverture et de clôture.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours pour une étude ?',
            'legende' => 'Fiches du catalogue qui approfondissent un point de cette page. Chacune a son programme, sa durée et sa FAQ ; une étude en combine souvent deux, selon ses priorités.',
            'entetes' => ['Formation', 'Pour qui dans l\'étude', 'Ce qu\'elle ajoute', 'Durée indicative'],
            'lignes'  => [
                ['<a href="/formations/ia-droit-ohada">IA et droit OHADA : recherche, rédaction, veille</a>', 'Notaires et clercs rédacteurs', 'La recherche dans les Actes uniformes et la vérification de chaque référence avant qu\'elle entre dans un acte ou une consultation', '2 jours'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Tout le personnel', 'Les règles de données personnelles pays par pays, le secret des affaires et les biais, pour chaque geste devant un assistant', '1 à 2 jours'],
                ['<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>', 'Études qui veulent interroger leurs propres modèles et procédures', 'Un assistant interne qui répond à partir des modèles validés de l\'étude, avec citation du passage utilisé', '3 jours'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Accueil, formalistes, comptable, clercs', 'Hameçonnage, mots de passe, double authentification, téléphones perdus, fraude au changement de coordonnées bancaires', '1 jour'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', 'Notaires associés des grandes études', 'L\'inventaire des usages, les rôles, les contrôles et la revue périodique quand l\'étude compte plusieurs bureaux', '2 jours'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', 'Principal clerc et responsable administratif', 'La cartographie d\'un processus de l\'étude, de l\'ouverture du dossier aux formalités, et le choix des outils pour l\'équiper', '2 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre étude avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des notaires. Il conçoit lui-même des assistants d\'IA et les relie aux outils de gestion des entreprises : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il sait donc où partent les textes confiés à un outil, ce qu\'un abonnement professionnel garantit vraiment et comment une automatisation mal réglée envoie le mauvais document à la mauvaise personne. Fort de ' . $ans . ' ans d\'expérience et formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin et du Togo au Gabon, à la France et à la Suisse.',
                'Il n\'est pas notaire et le dit dès la première séance : il enseigne les outils, l\'organisation des dossiers, la numérisation et la méthode de contrôle ; l\'acte, sa rédaction, la déontologie et le tarif restent au notaire, à sa Chambre et à son autorité de tutelle. Il n\'est certifié par aucun éditeur et ne se présente comme partenaire d\'aucun. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et toutes les formations dans le <a href="/formations/">catalogue</a>, dont le domaine <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>.',
                'Quand l\'étude veut aller plus loin que la formation, par exemple un outil de suivi des dossiers et des formalités paramétré pour elle, ou un assistant interne qui ne répond qu\'à partir de ses modèles validés, le besoin relève d\'une mission de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> ou d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. La manière dont Richard organise ses sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'engager l\'étude dans la formation ?',
            'texte' => 'L\'outil prépare, le notaire reçoit l\'acte : rien d\'identifiant ne sort de l\'étude, chaque modèle porte sa date et son pays, chaque pièce rejoint le dossier le jour où elle arrive, la minute papier reste l\'original et la copie numérisée sert à chercher, chaque accès aux portails est nominatif, la vigilance laisse une trace écrite et la déclaration de soupçon reste hors des outils partagés.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre étude à l\'IA et au numérique sans exposer le secret de vos clients ?',
            'texte'  => 'Indiquez l\'effectif de l\'étude, les postes à former, vos actes les plus fréquents, l\'état de vos archives, le pays où vous exercez et les outils déjà utilisés : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour mon étude'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il notaire ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils d\'IA, à la numérisation, à l\'organisation des dossiers et à la méthode de contrôle. Il ne rédige aucun acte, ne donne aucun conseil juridique et ne tranche aucune question de déontologie : c\'est le notaire présent qui juge du fond pendant les exercices.'],
        ['q' => 'Peut-on travailler sur nos vrais dossiers pendant la formation ?', 'r' => 'Non. Aucun dossier en cours, aucun testament et aucune minute ne servent de matière. Les dossiers d\'exercice sont fictifs, construits avec le notaire pour ressembler à la pratique de l\'étude, et le secret professionnel s\'applique aussi pendant la session.'],
        ['q' => 'Un clerc peut-il utiliser un assistant d\'IA gratuit pour reformuler une clause ?', 'r' => 'Pas avec un compte personnel, et jamais sur un texte qui permet de reconnaître les parties, le bien ou l\'opération. L\'étude choisit un outil dont elle a lu les conditions, fournit des comptes professionnels et définit ce qui peut y entrer : une clause neutralisée, un texte publié, une note générale au client.'],
        ['q' => 'Peut-on numériser les minutes et détruire les originaux ?', 'r' => 'Non au Bénin : le statut du notariat impose de conserver la minute de tous les actes reçus et interdit de s\'en dessaisir hors des cas prévus par la loi. La numérisation produit une copie de consultation et un index de recherche ; les originaux restent conservés comme la loi du pays l\'exige.'],
        ['q' => 'L\'acte authentique électronique existe-t-il en Afrique francophone ?', 'r' => 'La France le pratique depuis 2008 avec un cadre propre : signature électronique qualifiée du notaire, minutier central, textes dédiés. Dans les États de la zone OHADA, il faut un texte national qui l\'organise ; au Bénin, le code du numérique réserve les dispositions légales particulières, et le statut du notariat prévoit encore la minute sur papier.'],
        ['q' => 'Les clients peuvent-ils envoyer leurs pièces par WhatsApp ?', 'r' => 'C\'est souvent ce qu\'ils font déjà. La formation montre comment l\'encadrer : numéro et téléphone de l\'étude, sauvegarde chiffrée, versement des pièces au dossier le jour même, suppression des copies restées dans le téléphone, et aucune information sur un acte donnée à une personne non identifiée.'],
        ['q' => 'Un outil d\'IA peut-il détecter le blanchiment à la place du notaire ?', 'r' => 'Il peut aider à ne rien oublier : questionnaire sur l\'origine des fonds et le bénéficiaire effectif, alerte sur un paiement en espèces ou une société étrangère au capital. L\'appréciation du risque, la décision de poursuivre et la déclaration éventuelle restent au notaire, qui en répond.'],
        ['q' => 'Où rédiger une déclaration de soupçon ?', 'r' => 'Hors de tout outil partagé et de tout assistant en ligne. La loi uniforme de l\'UMOA rend la déclaration confidentielle et interdit d\'en révéler l\'existence au client ou à des tiers ; elle se prépare par le notaire ou la personne désignée, et se transmet à la CENTIF par écrit.'],
        ['q' => 'L\'étude peut-elle mettre un robot de discussion sur son site ou sur WhatsApp ?', 'r' => 'Un robot limité aux informations pratiques, aux horaires, à la liste des pièces et à la prise de rendez-vous se conçoit. Un robot qui annonce l\'état d\'un dossier ou commente un acte est à écarter : le statut du notariat réserve la connaissance des actes aux personnes qui y ont droit, et la publicité personnelle du notaire est interdite.'],
        ['q' => 'Quelle différence avec la formation IA et droit OHADA ?', 'r' => 'La formation IA et droit OHADA approfondit la recherche dans les Actes uniformes, la rédaction et la vérification des références pour tous les professionnels du droit. Cette page décrit un parcours pour l\'étude entière : pièces, vérifications, modèles, formalités, minutes et archives, fonds de tiers, relation client, vigilance et règle d\'usage.'],
        ['q' => 'La formation est-elle habilitée pour la formation continue des notaires de France ?', 'r' => 'Non. Le CSN habilite certains programmes au titre de la formation continue de la profession, et Richard SALANON ne figure pas parmi les organismes habilités. Pour un office établi dans l\'Union européenne, la session peut en revanche contribuer aux mesures de maîtrise de l\'IA prévues par l\'article 4 du règlement européen, dont l\'office garde la trace.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants et de groupes, la préparation des modèles et des dossiers fictifs, l\'état des archives, le lieu, le format et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits.'],
    ],

    'sources' => [
        ['titre' => 'Chambre des notaires du Bénin, loi n° 2002-015 du 30 décembre 2002 portant statut du notariat en République du Bénin (articles 37, 55, 56, 58, 76, 77, 81, 82, 84 à 87)', 'url' => 'https://notaires.bj/statuts-du-notariat.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Chambre des notaires du Bénin, arrêté n° 0972/MJLDH/DC/SGM/DLCS/SA de 2004 portant code de déontologie notariale (articles 7, 8, 13, 20 et 37)', 'url' => 'https://notaires.bj/Code-de-D%C3%A9ontologie-Notariale-en-R%C3%A9publique-du-B%C3%A9nin.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Chambre des notaires du Bénin, site officiel : annuaire, fichier des dernières volontés, calculateur de prix', 'url' => 'https://www.notaires.bj/', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de l\'Économie et des Finances du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 266, 267, 301 et 391)', 'url' => 'https://finances.bj/wp-content/uploads/2019/11/code_du_numerique_du_benin_2018.pdf', 'date' => '2026-10-05'],
        ['titre' => 'BCEAO, annexe à la décision n° 26 du 2 juillet 2015 du Conseil des ministres de l\'UMOA : projet de loi uniforme relative à la lutte contre le blanchiment de capitaux et le financement du terrorisme (articles 1er, 6, 79, 82 et 96)', 'url' => 'https://www.bceao.int/sites/default/files/2017-11/annexe_a_la_decision_no_26_portant_adoption_du_projet_de_loi_uniforme_lbc_ft.pdf', 'date' => '2026-10-05'],
        ['titre' => 'OHADA.com (UNIDA), communiqué du Secrétariat permanent de l\'OHADA sur l\'application de l\'AUSCGIE aux SARL et les textes nationaux de 2014 (2 juillet 2014)', 'url' => 'https://www.ohada.com/actualite/2234/application-de-lauscgie-aux-sarl-textes-internes-complementaires-de-lacte-uniforme-ohada-revise-du-30-janvier-2014.html', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice du Sénégal, Acte uniforme portant organisation des sûretés du 15 décembre 2010, Journal officiel de l\'OHADA n° 22 (article 205)', 'url' => 'https://justice.sec.gouv.sn/wp-content/uploads/textes-reglements/OHADA/Acte-uniforme-portant-organisations-surete-revises-1512-2010.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale du notariat, principes de la fonction notariale (Rome, 8 novembre 2005)', 'url' => 'https://uinl.org/fr/principes-fondamentaux-du-notariat/principes-de-la-fonction-notariale/', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale du notariat, déontologie et règles d\'organisation du notariat (Lima, 8 octobre 2013 : articles 12, 17, 30 et 48)', 'url' => 'https://uinl.org/fr/principes-fondamentaux-du-notariat/deontologie-et-regles-dorganisation-du-notariat/', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale du notariat, page d\'accueil (93 notariats) et liste des membres', 'url' => 'https://uinl.org/fr/mission/membres/', 'date' => '2026-10-05'],
        ['titre' => 'Conseil supérieur du notariat, introduction à l\'intelligence artificielle : le nouveau guide juridique de l\'IEJ (12 décembre 2025)', 'url' => 'https://www.csn.notaires.fr/fr/actualites/introduction-lintelligence-artificielle-le-nouveau-guide-juridique-de-liej', 'date' => '2026-10-05'],
        ['titre' => 'Conseil supérieur du notariat, communiqué : le CSN choisit Mistral AI et Scaleway (9 juillet 2026)', 'url' => 'https://www.csn.notaires.fr/fr/actualites/intelligence-artificielle-le-conseil-superieur-du-notariat-choisit-mistral-ai-et', 'date' => '2026-10-05'],
        ['titre' => 'Conseil supérieur du notariat, l\'évolution numérique dans le notariat (acte authentique électronique, Micen, comparution à distance)', 'url' => 'https://www.csn.notaires.fr/fr/levolution-numerique-dans-le-notariat', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, décret n° 2023-1297 du 28 décembre 2023 relatif au code de déontologie des notaires (articles 8, 9, 11 et 19)', 'url' => 'https://www.legifrance.gouv.fr/loda/id/JORFTEXT000048706693/', 'date' => '2026-10-05'],
        ['titre' => 'Notariat Services, formations IA habilitées par le Conseil supérieur du notariat pour 2026', 'url' => 'https://solutions.notariat-services.com/post/intelligence-artificielle-et-notariat-les-formations-de-notariat-services-habilitees-par-le-conseil-superieur-du-notariat', 'date' => '2026-10-05'],
        ['titre' => 'Actu-Juridique, publication du rapport d\'activité et d\'impact 2025 de Tracfin (11 septembre 2026)', 'url' => 'https://www.actu-juridique.fr/breves/notaires/publication-du-rapport-dactivite-et-dimpact-2025-de-tracfin/', 'date' => '2026-10-05'],
        ['titre' => 'Agence nationale du domaine et du foncier, lancement de la plateforme e-Notaire (4 avril 2020)', 'url' => 'https://andf.bj/dematerialisation-du-foncier-l-agence-nationale-du-domaine-et-du-foncier-lance-la-plate-forme-e-notaire/', 'date' => '2026-10-05'],
        ['titre' => 'Agence nationale du domaine et du foncier, formalisation foncière par la plateforme e-Foncier dans 12 communes (2 décembre 2024)', 'url' => 'https://andf.bj/formalisation-fonciere-12-communes-desormais-integrees-a-la-plateforme-e-foncier-benin-des-janvier-2025/', 'date' => '2026-10-05'],
        ['titre' => 'Agence nationale du domaine et du foncier, preuve de la provenance des fonds pour les terrains ruraux de plus de 20 hectares (27 décembre 2024)', 'url' => 'https://andf.bj/lutte-contre-le-blanchiment-de-capitaux-de-nouvelles-exigences-pour-lacquisition-de-terrains-ruraux-de-plus-de-20-hectares-au-benin/', 'date' => '2026-10-05'],
        ['titre' => 'Portail national des services publics du Bénin, fiche du service « État descriptif »', 'url' => 'https://service-public.bj/public/services/service/PS00126', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs des offres', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, tarifs de n8n Cloud', 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-droit-ohada', 'ia-ethique-conformite', 'rag-chatbot-documents', 'cybersecurite-employes', 'gouvernance-ia', 'digitalisation-processus'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise', 'digitalisation-d-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'odoo-vs-dolibarr'],
    ],
];
