<?php
// ============================================================
// data/metiers/medecins-cliniques.php · Page « formations par métier » :
// médecins, cabinets médicaux et cliniques privées (vague 1C, univers Santé
// et social, non prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : la vie administrative et numérique d'une structure de soins
// (secrétariat médical, prise de rendez-vous, dossier patient informatisé,
// comptes rendus et courriers, facturation et tiers payant), sous le secret
// médical et le régime des données de santé. Les fiches ia-ethique-conformite,
// cybersecurite-employes, securite-donnees-dirigeants et digitalisation-
// processus sont citées et reliées, jamais répétées (leurs cas de cliniques à
// Cotonou, Douala et Dakar ne sont pas repris), pas plus que la page ONG.
// Faits externes lus le 05/10/2026 : loi béninoise n° 2017-20 (articles 394,
// 402, 407, 428, 430, 435, 437, texte du SGG), loi béninoise n° 2020-37
// (article 6), RGPD article 9 (CNIL), CNIL (donnée de santé ; professionnels
// de santé libéraux), code de la santé publique (R.4127-4 sur le site du CNOM,
// L.1111-8 sur Légifrance), arrêté du 26 avril 2024 (référentiel HDS), code
// pénal (226-13), OMS (18/01/2024), HAS (30/10/2025, mise à jour 15/04/2026),
// Assurance maladie (dotation numérique 2026), CNAM de Côte d'Ivoire (CMU),
// ANPS du Bénin (ARCH), OpenMRS, DoliMed, FDFP, 3FPT, France Compétences, et
// les « Faits déjà vérifiés » du catalogue (WhatsApp, Odoo).
// Richard ne pratique aucun acte médical et ne donne aucun conseil médical :
// il forme à l'usage des outils.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les médecins et les cliniques privées : tenir le secrétariat, les rendez-vous, les dossiers patients et la facturation avec des outils fiables, sans rompre le secret médical",
    'title'   => "Formation IA pour médecins et cliniques | Richard SALANON",
    'meta'    => "Former un cabinet médical ou une clinique à l'IA et au numérique : secrétariat, rendez-vous, dossier patient, tiers payant et secret médical.",
    'en_bref' => "Cette page s'adresse aux médecins installés en cabinet, aux cabinets de groupe et aux cliniques privées qui veulent organiser leur secrétariat, leurs rendez-vous, leurs dossiers patients et leur facturation avec des outils numériques, et savoir où l'intelligence artificielle peut aider sans jamais toucher au diagnostic. Le parcours type dure deux jours et demi en cinq demi-journées, plus une séance de suivi à un mois, et se construit sur les logiciels et les circuits réels de la structure, avec des données fictives. Il se déroule dans vos locaux, à distance ou en hybride, en dehors des heures de consultation, et son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Santé et social',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : le trajet d'une information médicale, de l'appel du patient à l'archivage",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé, avec l'équipe, du parcours réel d'un patient et de ses informations : appel ou message pour le rendez-vous, accueil, constantes, consultation, examens, compte rendu, facture, classement.",
                "Qui voit quoi aujourd'hui, poste par poste : accueil, secrétariat, infirmiers, médecins, caisse, comptabilité, prestataire du logiciel ; puis ce que chacun devrait voir.",
                "Repérage des copies qui dorment hors du dossier : cahier d'accueil, photos d'ordonnances dans les téléphones, résultats transférés par une messagerie personnelle, clés USB du secrétariat.",
                "Tri des tâches en trois groupes : ce qu'un outil peut faire seul (rappel de rendez-vous), ce qu'il peut préparer pour un humain (brouillon de courrier type), ce qui reste au médecin (examen, diagnostic, prescription, annonce).",
                "Exercice : dessiner sur une page la carte des informations de la structure et entourer les endroits où le secret est aujourd'hui exposé.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : secrétariat médical, agenda partagé et rappels de rendez-vous",
            'duree'  => '3 h 30',
            'points' => [
                "Un agenda unique pour toute la structure : types de consultation, durées, créneaux réservés aux urgences, praticiens, salles et appareils.",
                "Prendre un rendez-vous par téléphone, par WhatsApp ou par une plateforme en ligne : ce que le secrétariat inscrit, et ce qu'il n'inscrit pas dans l'agenda (symptômes, résultats, motif détaillé).",
                "Confirmations et rappels automatiques rédigés de façon neutre, sans spécialité ni motif ; annulations, liste d'attente, patients qui ne viennent pas.",
                "WhatsApp Business au secrétariat : un numéro au nom de la structure, un appareil qui reste au cabinet, des réponses rapides, et la liste de ce qui ne s'échange jamais par message.",
                "Exercice : réécrire les messages de confirmation et de rappel de la structure, puis paramétrer un agenda type avec ses règles de créneaux.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : dossier patient informatisé, comptes rendus et place de l'IA",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qu'un logiciel de dossier patient doit permettre : identité vérifiée, antécédents, consultations, documents, droits par rôle, journal des accès, export et restitution.",
                "Le bon patient dans le bon dossier : homonymes, dates de naissance approximatives, numéro de dossier unique, contrôle de l'identité à chaque venue.",
                "Comptes rendus et courriers : modèles par type de consultation, dictée, relecture et validation par le médecin signataire.",
                "L'IA sur des modèles vides et des textes sans patient : courrier type, fiche d'information remise au patient, résumé d'une recommandation publiée ; aucun dossier réel dans un assistant grand public.",
                "Exercice : construire trois modèles de comptes rendus et une fiche d'information, relus et corrigés par un médecin du groupe.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : facturation, tiers payant et caisse",
            'duree'  => '3 h 30',
            'points' => [
                "Le circuit d'une facture de soins : acte, tarif, part du patient, part de l'assureur ou de la caisse, pièce justificative, encaissement, reçu.",
                "Conventions avec les assurances, les mutuelles, les employeurs et les régimes publics : accords préalables, plafonds, bordereaux, rejets et relances.",
                "Caisse et Mobile Money : clôture quotidienne, rapprochement avec le relevé de l'opérateur, écarts expliqués le jour même.",
                "Un tableau de suivi des sommes dues par chaque organisme payeur, dans un tableur ou dans le logiciel de gestion de la clinique.",
                "Exercice : reconstituer le bordereau mensuel d'un organisme à partir de dossiers fictifs et repérer les lignes qui seront rejetées.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : règles écrites, prestataire du logiciel et plan d'action",
            'duree'  => '3 h 30',
            'points' => [
                "Les gestes qui protègent le secret à l'accueil : comptes nominatifs, session fermée au départ du poste, écran tourné vers l'intérieur, impressions récupérées aussitôt.",
                "Lecture, dans le texte, des règles du pays de la structure : loi n° 2017-20 au Bénin, RGPD en Europe, code de la santé publique en France ; démarches auprès de l'autorité de protection des données.",
                "Le prestataire du logiciel : lieu d'hébergement, sauvegardes, accès de maintenance, restitution des données en fin de contrat.",
                "Charte d'usage du numérique et de l'IA de la structure : outils autorisés, informations interdites dans les assistants, circuit de validation d'un courrier.",
                "Plan d'action de trente jours : trois changements, un responsable et une date pour chacun.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Revue du plan d'action : ce qui est en place, ce qui bloque, et pourquoi.",
                "Relecture des messages de rappel en service et des premiers modèles de comptes rendus utilisés.",
                "Point sur les rejets de facturation du mois et sur le tableau de suivi des organismes payeurs.",
                "Ajustement de la charte d'usage après un mois de pratique.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Médecins, directions de clinique, secrétaires et assistants médicaux, responsables de la facturation et de l'administration, référents informatiques"],
        ['l' => 'Durée', 'v' => "2 jours et demi en cinq demi-journées de 3 h 30, plus 2 h de suivi à un mois"],
        ['l' => 'Formats', 'v' => "Intra au cabinet ou à la clinique, à distance ou hybride, hors des heures de consultation"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour un cabinet médical ou une clinique privée ?",
            'paragraphes' => [
                "Dans un cabinet ou une clinique, le temps médical se perd rarement en consultation. Il fuit autour : le téléphone qui sonne pendant l'examen, le cahier de rendez-vous illisible, le dossier papier introuvable quand le patient revient, le compte rendu dicté puis retapé, la facture de l'assureur rejetée trois mois plus tard pour une pièce manquante. Ces pertes ne relèvent pas de la médecine. Elles relèvent de l'organisation, et c'est sur elles que les outils numériques agissent d'abord.",
                "La digitalisation commence par le secrétariat. Un agenda partagé remplace le cahier, chaque praticien voit ses créneaux, et les rappels partent sans que personne n'y pense. Le dossier patient informatisé suit la personne d'une venue à l'autre, avec ses antécédents, ses résultats et ses courriers, au lieu de dépendre de la mémoire d'une secrétaire. La facturation, enfin, devient traçable : chaque acte a son tarif, sa part patient, sa part d'organisme payeur, et l'on sait à tout moment ce que doit chaque assureur.",
                "L'automatisation relie ces étapes. Une prise de rendez-vous peut déclencher une confirmation, puis un rappel la veille ; une annulation libère le créneau pour un patient en liste d'attente ; une facture validée alimente le bordereau mensuel de l'organisme concerné. Ces liaisons ne demandent pas un système hospitalier complet : un logiciel de cabinet bien paramétré, un tableur tenu avec rigueur ou un logiciel de gestion suffisent souvent à une structure de quelques praticiens.",
                "L'intelligence artificielle intervient surtout dans l'écrit administratif et documentaire. Elle aide à rédiger un courrier type, une fiche d'information remise aux patients, une procédure d'accueil, ou à résumer une recommandation publiée. Certains logiciels proposent aussi la transcription d'une dictée. Mais elle n'examine personne, ne connaît pas l'histoire du patient, et peut produire avec assurance une information fausse. La règle de la page tient en une phrase : l'IA ne pose pas de diagnostic à la place du médecin, et elle ne décide d'aucun traitement.",
                "Le dernier changement concerne le secret. Dès qu'une information médicale circule par un téléphone, une messagerie, un logiciel hébergé ou un assistant en ligne, elle peut sortir du cercle des soignants sans que personne l'ait voulu. La formation traite donc le secret médical et la protection des données de santé comme une compétence de chaque poste, de l'accueil à la direction, et non comme un paragraphe du règlement intérieur.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et les outils numériques ne doivent-ils jamais faire dans un cabinet ou une clinique ?",
            'intro' => "Ces limites ne sont pas une méfiance de principe envers la technique. Elles découlent du secret médical, des textes sur les données de santé et de la responsabilité personnelle du médecin. Pendant la formation, l'équipe les transforme en règles écrites, adaptées à sa structure.",
            'items' => [
                ['titre' => "Poser un diagnostic ou choisir un traitement", 'texte' => "Un assistant d'IA peut aider à rédiger ; il ne remplace ni l'interrogatoire, ni l'examen, ni le raisonnement clinique. Aucun diagnostic, aucune prescription, aucune posologie ne sort d'un outil sans que le médecin l'ait établi lui-même. La formation n'enseigne d'ailleurs aucun usage clinique de l'IA : elle s'arrête à la porte de la consultation."],
                ['titre' => "Répondre aux questions médicales des patients", 'texte' => "Un robot de messagerie peut donner les horaires, confirmer un rendez-vous ou indiquer les pièces à apporter. Il ne commente pas un symptôme, ne lit pas un résultat d'analyse et ne conseille aucun médicament. Un patient qui décrit un malaise reçoit le numéro à appeler, pas une réponse générée."],
                ['titre' => "Recevoir un dossier patient dans un assistant grand public", 'texte' => "Un compte rendu, une ordonnance, une photo de lésion ou un résultat d'examen n'entrent jamais dans un assistant en ligne utilisé avec un compte personnel. Même sans le nom, l'âge, la date de consultation et la pathologie suffisent souvent à reconnaître quelqu'un. On travaille sur des modèles vides, ou dans un outil retenu par la direction avec un contrat qui encadre les données."],
                ['titre' => "Signer à la place du médecin", 'texte' => "Un compte rendu préparé par une transcription automatique ou par un modèle reste un brouillon tant que le médecin ne l'a pas relu en entier et validé. Un mot mal entendu dans une dictée, un côté gauche devenu droit, un dosage déplacé : l'erreur porte alors la signature du praticien."],
                ['titre' => "Révéler le motif d'une consultation", 'texte' => "Un rappel de rendez-vous peut être lu par un conjoint, un parent ou un collègue sur l'écran d'un téléphone. Il ne mentionne ni la spécialité quand elle est révélatrice, ni l'examen, ni le motif. « Votre rendez-vous à la clinique est confirmé mardi à 10 h » suffit."],
                ['titre' => "Ouvrir tout le dossier à tout le monde", 'texte' => "La secrétaire qui gère l'agenda n'a pas besoin des comptes rendus ; le comptable n'a pas besoin des antécédents. Les droits du logiciel suivent la fonction de chacun, et un journal permet de savoir qui a consulté quel dossier."],
                ['titre' => "Trier seul les urgences", 'texte' => "Un formulaire en ligne ou un robot peut recueillir une demande. Il ne décide pas qu'elle peut attendre. Toute demande qui évoque une douleur, une fièvre chez un nourrisson, une grossesse ou une détresse est transmise sans délai à un soignant, selon une règle écrite connue de l'accueil."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels textes encadrent le secret médical et les données de santé, et où les lire ?",
            'legende' => "Repères lus le 5 octobre 2026 dans les textes publiés par les autorités. Ils ne remplacent ni le code de déontologie de votre pays, ni les avis de votre ordre des médecins, ni le conseil d'un juriste : ces textes se lisent à la source, dans leur dernière version.",
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Ce que la structure en retient'],
            'lignes'  => [
                ["Loi n° 2017-20 du 20 avril 2018 portant code du numérique (Bénin), article 394", "Les données concernant la santé font partie des données sensibles dont le traitement est interdit, sauf exceptions ; l'une d'elles vise la médecine préventive, les diagnostics médicaux, l'administration de soins et la gestion de services de santé, sous la surveillance d'un professionnel de santé soumis au secret", "Le dossier patient est permis parce qu'il sert les soins et reste sous la responsabilité d'un soignant ; le même fichier utilisé à d'autres fins ne l'est plus"],
                ["Même loi, articles 402 et 407", "Le responsable du traitement désigne les catégories de personnes qui ont accès aux données, avec leur fonction, tient cette liste à la disposition de l'Autorité et veille à leur obligation de confidentialité ; les traitements de données de l'article 394 sont soumis à l'autorisation préalable de l'Autorité", "Une clinique au Bénin écrit qui accède à quoi et vérifie ses démarches auprès de l'APDP avant de mettre en service un logiciel de dossiers"],
                ["Même loi, articles 428, 430 et 435", "Analyse d'impact et délégué à la protection des données requis en cas de traitement à grande échelle de données de l'article 394 ; registre des activités de traitement, dont les petites structures ne sont pas dispensées quand elles traitent ces données", "Une clinique ou un réseau de cabinets évalue s'il traite à grande échelle ; le registre se tient dans tous les cas"],
                ["Loi n° 2020-37 du 3 février 2021 portant protection de la santé des personnes (Bénin), article 6", "La personne malade a droit au respect de sa vie privée et de sa dignité, à l'information et au respect de la confidentialité, à se plaindre et à la sécurité des soins", "La confidentialité est un droit du patient, pas seulement une obligation du médecin : l'accueil et le secrétariat y sont tenus aussi"],
                ["Règlement général sur la protection des données (Union européenne), article 9", "Le traitement des données concernant la santé est interdit, sauf exceptions ; il est permis notamment pour les diagnostics médicaux et la prise en charge sanitaire, par un professionnel de santé soumis au secret professionnel ou sous sa responsabilité", "En Europe comme au Bénin, le principe est le même : la donnée de santé sert les soins, sous la garde de personnes tenues au secret"],
                ["Code de la santé publique (France), article R.4127-4, article 4 du code de déontologie médicale", "Le secret couvre tout ce qui est venu à la connaissance du médecin dans l'exercice de sa profession : ce qui lui a été confié, mais aussi ce qu'il a vu, entendu ou compris", "Le secret ne s'arrête pas au dossier : une remarque à l'accueil, un message, une photo prise en consultation en font partie"],
                ["Code pénal (France), article 226-13", "La révélation d'une information à caractère secret par la personne qui en est dépositaire est punie d'un an d'emprisonnement et de 15 000 euros d'amende", "Une fuite par négligence numérique n'est pas une simple maladresse technique"],
                ["Code de la santé publique (France), article L.1111-8, et arrêté du 26 avril 2024", "Toute personne qui héberge, sur support numérique, des données de santé recueillies lors d'activités de prévention, de diagnostic ou de soins doit être certifiée ; l'arrêté met à jour le référentiel de certification des hébergeurs", "Un cabinet ou une clinique en France vérifie que l'éditeur de son logiciel en ligne, ou son hébergeur, détient cette certification"],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Un assistant d'IA peut-il poser un diagnostic à la place du médecin ?",
            'texte' => "Non. Les assistants conversationnels grand public ne sont ni conçus ni validés pour diagnostiquer, et leurs réponses peuvent être fausses ou biaisées tout en paraissant sûres. L'Organisation mondiale de la santé, dans ses orientations du 18 janvier 2024 sur les grands modèles multimodaux, cite ces informations inexactes et le « biais d'automatisation », la tendance des professionnels à ne plus voir les erreurs d'une machine ou à lui confier des décisions difficiles. En France, la Haute Autorité de santé demande, dans son guide du 30 octobre 2025, que chaque usage de l'IA générative soit conscient, supervisé et raisonné. Richard SALANON n'est pas professionnel de santé : il forme aux outils qui entourent le soin, jamais au soin.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Secrétariat médical et rendez-vous : que peut-on automatiser sans exposer les patients ?",
            'paragraphes' => [
                "Le secrétariat est la porte d'entrée de toutes les informations. En Afrique de l'Ouest, une grande partie des demandes arrive désormais par WhatsApp : un message pour un rendez-vous, une note vocale qui décrit des douleurs, la photo d'une ordonnance ou d'un résultat de laboratoire. Quand ces échanges passent par le téléphone personnel de la secrétaire, la structure ne les maîtrise plus : ils restent dans l'appareil après son départ, se sauvegardent dans un compte privé et se mélangent à sa vie familiale. Le premier chantier n'est donc pas un robot, mais un numéro et un appareil qui appartiennent au cabinet.",
                "Vient ensuite l'agenda. Un agenda partagé ne sert que s'il porte des règles : une durée par type de consultation, des créneaux gardés pour les urgences et les patients suivis, une couleur par praticien ou par salle, une liste d'attente pour les annulations. La CNIL donne dans sa fiche pour les professionnels de santé libéraux, publiée le 1er juin 2018, un exemple qui résume la bonne pratique : la secrétaire médicale accède aux données administratives qui permettent de gérer les rendez-vous, mais pas à la totalité du dossier médical. L'agenda reçoit donc un motif court et neutre, jamais une anamnèse.",
                "Les rappels sont l'automatisation la plus rentable d'un cabinet : chaque patient qui oublie son rendez-vous laisse un créneau vide qu'un autre aurait pris. Ils partent par SMS, par courriel ou par WhatsApp, à partir de l'agenda. Pour un volume modeste, l'application WhatsApp Business suffit, avec des réponses rapides pour les horaires, l'adresse et les pièces à apporter ; sa prise en main détaillée relève de la <a href=\"/formations/whatsapp-business\">formation WhatsApp Business</a>. Les envois automatiques en nombre passent par la plateforme de Meta : depuis le 1er octobre 2026, chaque numéro professionnel y dispose de 1 000 messages de service gratuits par mois, et les modèles de messages envoyés à l'initiative de la structure suivent la grille de tarifs de Meta.",
                "La prise de rendez-vous en ligne, par une plateforme spécialisée ou par un module ajouté au site de la clinique, soulage le téléphone aux heures de pointe. Avant de l'ouvrir, la structure vérifie où sont hébergées les données, ce que le patient doit saisir et qui le lit, comment il annule, et ce qui se passe pour les patients sans téléphone intelligent, qui gardent l'accès par l'accueil. Quand la clinique veut un outil sur mesure relié à son agenda, le <a href=\"/services/systeme-de-reservation-en-ligne\">système de réservation en ligne</a> en décrit la construction ; la formation, elle, apprend à l'équipe à le faire vivre au quotidien.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels messages le secrétariat peut-il automatiser, et lesquels restent entre les mains d'un soignant ?",
            'legende' => "Grille de travail utilisée pendant la première après-midi. Chaque structure l'adapte à ses spécialités et à sa patientèle, puis la fait valider par un médecin.",
            'entetes' => ['Message', 'Automatisable ?', 'Règle de rédaction ou de traitement'],
            'lignes'  => [
                ["Confirmation d'un rendez-vous", "Oui", "Date, heure, adresse et nom de la structure ; ni motif, ni examen, ni spécialité quand elle est révélatrice"],
                ["Rappel la veille ou le matin", "Oui", "Même règle, avec le moyen d'annuler ou de déplacer le rendez-vous sans rappeler"],
                ["Pièces à apporter", "Oui", "Liste générique par type de rendez-vous : carte d'assurance ou de prise en charge, ordonnance, anciens examens"],
                ["Annulation par la structure et nouveau créneau", "Oui, sous contrôle", "Deux créneaux proposés ; le médecin est prévenu si un suivi régulier se trouve interrompu"],
                ["Rappel de suivi ou de vaccination", "Oui, si le patient l'a accepté", "Formulation neutre : « il est temps de prendre rendez-vous pour votre suivi » ; aucune pathologie citée"],
                ["Document disponible", "En partie", "Le message annonce qu'un document est prêt et dit comment le récupérer ; il ne contient jamais le résultat lui-même"],
                ["Résultat anormal, annonce d'un diagnostic", "Non", "Appel ou consultation par le médecin, selon sa décision"],
                ["Question sur un symptôme, un traitement ou un effet indésirable", "Non", "Transmission immédiate à un soignant selon la règle d'urgence écrite de l'accueil"],
                ["Relance d'une facture", "Oui, sous contrôle", "Montant, date et référence de la facture, sans détail des actes réalisés"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Dossier patient informatisé : comment passer du papier à un dossier fiable ?",
            'paragraphes' => [
                "Aucune structure ne numérise vingt ans d'archives en un mois, et ce n'est pas nécessaire. La méthode enseignée commence par les patients nouveaux et par ceux qui reviennent : à chaque venue, le dossier papier actif est repris dans le logiciel, les documents utiles sont numérisés et rattachés, et le papier est rangé selon la règle de conservation. En France, la CNIL rappelle que les médecins libéraux conservent, selon les recommandations du Conseil national de l'Ordre des médecins, les dossiers pendant 20 ans à compter de la dernière consultation. Ailleurs, la durée se vérifie auprès de l'ordre du pays.",
                "Le point faible d'un dossier informatisé, c'est l'identité. Deux patients qui portent le même nom, une date de naissance approximative inscrite au 1er janvier, un numéro de téléphone partagé par toute une famille : les doublons et, pire, les mélanges de dossiers arrivent vite. La formation fixe des règles simples : un numéro de dossier unique, la vérification d'une pièce ou de plusieurs éléments d'identité à chaque venue, l'interdiction de créer un nouveau dossier sans recherche préalable, et une personne désignée pour fusionner les doublons.",
                "Les droits d'accès traduisent ensuite le secret en paramètres. L'accueil voit l'identité, l'agenda et la situation administrative ; l'infirmier voit ce dont il a besoin pour les soins qu'il réalise ; le médecin voit le dossier de ses patients ; la direction voit les chiffres d'activité, pas les comptes rendus. Au Bénin, l'article 402 de la loi n° 2017-20 demande précisément de désigner ces catégories de personnes et leur fonction, et de tenir la liste à la disposition de l'Autorité. Un journal des accès, consulté de temps en temps, rend la règle crédible.",
                "Le choix du logiciel n'est pas l'objet de la formation, mais elle apprend à poser les bonnes questions à l'éditeur : où les données sont-elles hébergées, qui peut s'y connecter pour la maintenance, à quelle fréquence sont-elles sauvegardées, sous quel format peut-on les récupérer si l'on change de logiciel. Les décisions qui reviennent à la direction, sauvegardes, contrats et réponse à un incident, sont traitées dans la <a href=\"/formations/securite-donnees-dirigeants\">formation sécurité des données et sauvegardes pour dirigeants</a> ; ici, chaque poste apprend à utiliser correctement le dossier qu'il ouvre tous les jours.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comptes rendus, courriers et fiches d'information : où l'IA aide-t-elle vraiment ?",
            'paragraphes' => [
                "Le gain le plus sûr ne vient pas de l'IA, mais des modèles. Un compte rendu de consultation de suivi, une lettre d'adressage à un confrère, un compte rendu opératoire ou d'échographie suivent toujours la même structure. Construits une fois dans le logiciel, avec des champs à compléter et des listes de choix, ces modèles divisent le temps de rédaction et rendent les documents plus lisibles pour le confrère qui les reçoit. La dictée, avec ou sans reconnaissance vocale, complète le dispositif ; le texte dicté reste relu par le médecin avant validation.",
                "L'IA générative trouve sa place autour de ces documents, jamais dans le dossier d'un patient. Elle aide à rédiger la première version d'un modèle vide, à écrire une fiche d'information remise aux patients dans un français simple, à préparer une procédure d'accueil, à résumer une recommandation publiée que le médecin vérifie ensuite contre le texte d'origine. Elle peut proposer une traduction d'une consigne pratique vers une langue nationale, à condition qu'une personne qui parle cette langue la relise à voix haute avec un soignant.",
                "Les outils de transcription de consultation, qui écoutent l'échange et proposent un compte rendu, changent la nature de la question. Ils traitent la voix du patient et le contenu de la consultation, donc des données de santé. Avant tout essai, la structure obtient un contrat qui dit où ces enregistrements sont traités et conservés, vérifie en France la certification de l'hébergeur, informe les patients, et garde la relecture complète du médecin. La Haute Autorité de santé résume la démarche par quatre verbes, apprendre, vérifier, estimer, communiquer, dans ses premières clefs d'usage de l'IA générative en santé, mises à jour le 15 avril 2026.",
                "Les règles générales d'usage des assistants, réglages de confidentialité et différences entre comptes personnels et professionnels, sont l'objet de la <a href=\"/formations/ia-ethique-conformite\">formation IA, éthique et conformité des données</a>, et le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir un outil. La page métier ne reprend pas ces sujets : elle les applique aux documents propres à un cabinet ou à une clinique, avec une règle constante, le médecin relit et signe.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Facturation et tiers payant : comment réduire les rejets et les impayés des organismes ?",
            'paragraphes' => [
                "Dans la plupart des cliniques privées d'Afrique francophone, la recette arrive par deux chemins. Le patient paie au comptoir, en espèces ou par Mobile Money ; les assurances, mutuelles, employeurs et régimes publics paient plus tard, sur bordereau, la part qu'ils couvrent. Ce second chemin est celui des difficultés : bon de prise en charge manquant, carte expirée, acte hors convention, plafond dépassé, signature oubliée. Chaque rejet découvert trois mois après la consultation coûte une relance, parfois une perte sèche, et pèse sur la trésorerie de la structure.",
                "Le tiers payant se développe avec les régimes publics. En Côte d'Ivoire, la Caisse nationale d'assurance maladie affichait le 5 octobre 2026, pour la couverture maladie universelle, jusqu'à 70 % de réduction sur les soins et les médicaments, pour une cotisation de 1 000 francs CFA par personne et par mois. Au Bénin, l'assurance maladie fait partie des quatre volets du programme ARCH présentés par l'Agence nationale de protection sociale, qui l'annonçait le même jour comme « bientôt disponible ». Dans les deux cas, une structure qui accueille des assurés doit vérifier les droits à l'accueil et conserver chaque pièce.",
                "En France, la facturation passe par la carte Vitale, les feuilles de soins électroniques et la télétransmission. L'Assurance maladie a remplacé au 1er janvier 2026 le forfait structure des médecins par une dotation numérique : la valeur du point y est fixée à 7 euros, et la rémunération atteint 2 940 euros par an si tous les indicateurs sont atteints. Les indicateurs socles demandent notamment un logiciel référencé Ségur dans sa dernière version, avec une aide à la prescription certifiée par la HAS, et un usage moyen de 60 % des téléservices. La formation montre au secrétariat comment ces indicateurs se lisent et se nourrissent au quotidien.",
                "L'outil de suivi compte plus que le logiciel choisi. Un tableau par organisme payeur, avec les factures émises, transmises, payées et rejetées, le motif de chaque rejet et la date de relance, suffit à reprendre la main ; sa construction relève de la <a href=\"/formations/excel-google-sheets\">formation Excel et Google Sheets pour la gestion</a>. Les cliniques qui ont dépassé le tableur gèrent facturation, achats et stock de consommables dans un logiciel de gestion comme Odoo ou Dolibarr, avec une comptabilité tenue selon le SYSCOHADA dans l'espace OHADA ; le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> aide à les départager.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans des cabinets et des cliniques d'Afrique francophone et d'Europe ?",
            'items' => [
                ['secteur' => "Cabinet de médecine générale, à Cotonou", 'probleme' => "Situation type : les patients écrivent au numéro personnel de la secrétaire ; les notes vocales décrivent des symptômes, les photos d'ordonnances s'accumulent dans la galerie du téléphone, et personne ne sait ce qui a été répondu pendant ses congés.", 'solution' => "Un numéro WhatsApp Business au nom du cabinet sur un téléphone qui reste au bureau, des réponses rapides pour les questions pratiques, une règle écrite qui fait passer toute question médicale à un médecin, et un report au dossier des informations utiles avant l'archivage des conversations."],
                ['secteur' => "Clinique privée conventionnée, à Abidjan", 'probleme' => "Situation type : une part importante des factures adressées aux assureurs revient rejetée des semaines plus tard, pour des bons expirés ou des actes non couverts, et la direction découvre l'ampleur des impayés à la clôture.", 'solution' => "Vérification des droits à l'accueil avant l'acte, liste des pièces exigées par chaque organisme affichée au guichet, tableau de suivi des factures par organisme mis à jour chaque semaine, et motif de chaque rejet analysé pour corriger la cause plutôt que la facture."],
                ['secteur' => "Maternité privée, à Parakou", 'probleme' => "Situation type : les dossiers papier se dédoublent, plusieurs patientes portent le même nom, et les dates de naissance approximatives rendent les recherches incertaines au moment d'un accouchement.", 'solution' => "Un numéro de dossier unique, une recherche obligatoire avant toute création, la vérification de plusieurs éléments d'identité à chaque venue, la reprise progressive des seuls dossiers actifs, et une sage-femme référente chargée de fusionner les doublons."],
                ['secteur' => "Cabinet dentaire, à Lomé", 'probleme' => "Situation type : les plans de traitement se paient en plusieurs fois par Mobile Money, les échéances se suivent sur un cahier, et les rappels de séance oubliés désorganisent le fauteuil.", 'solution' => "Un devis modèle par type de traitement, un échéancier relié à la fiche du patient, un rapprochement quotidien avec le relevé de l'opérateur, et des rappels neutres envoyés la veille de chaque séance."],
                ['secteur' => "Cabinet de groupe, à Lyon", 'probleme' => "Situation type : les médecins veulent tester un outil de transcription de consultation, alors que le secrétariat utilise déjà un assistant en ligne avec des comptes personnels pour reformuler des courriers.", 'solution' => "Un inventaire des outils réellement utilisés, l'arrêt des comptes personnels pour tout document de patient, une vérification de l'hébergement certifié et du contrat de l'outil de transcription, une information des patients, et une relecture intégrale par le médecin avant validation."],
                ['secteur' => "Polyclinique, en Belgique", 'probleme' => "Situation type : chaque service a adopté ses propres outils numériques, et la direction ne sait ni quelles informations sortent de l'établissement, ni comment montrer que son personnel a été formé à l'IA.", 'solution' => "Une charte d'usage commune, une liste d'outils autorisés, des modèles de documents partagés, des sessions par service et une attestation par participant, utile pour documenter la maîtrise de l'IA que l'article 4 du règlement européen demande aux utilisateurs professionnels."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un cabinet ou une clinique utilise-t-il, et que coûtent-ils ?",
            'legende' => "Prix et chiffres relevés le 5 octobre 2026 sur les pages des éditeurs et des organismes. Aucun outil n'est à acheter pour suivre la formation, qui se fait sur les logiciels déjà en service ou sur des comptes de démonstration.",
            'entetes' => ['Outil ou système', 'Usage dans la structure', 'Coût ou condition relevés'],
            'lignes'  => [
                ["Logiciel de cabinet ou de dossier patient d'un éditeur", "Agenda, dossier, comptes rendus, ordonnances, facturation", "Prix propre à chaque éditeur ; en France, un logiciel référencé Ségur dans sa dernière version est un indicateur socle de la dotation numérique de l'Assurance maladie"],
                ["OpenMRS", "Dossier médical électronique open source, adapté aux soins primaires et aux programmes de santé", "Sans frais de licence ; son site revendique plus de 8 000 établissements de santé, plus de 70 pays et 15 millions de dossiers de patients ; installation, hébergement et support à prévoir"],
                ["DoliMed (Dolibarr et son module médical)", "Patients, consultations et documents pour médecins, dentistes et infirmiers, avec la gestion de Dolibarr", "Logiciel libre sous licence GPL v3 ou ultérieure, gratuit à télécharger ; version hébergée proposée par DoliCloud avec un essai de 15 jours"],
                ["Odoo", "Facturation, achats, stock de consommables, comptabilité de la clinique", "Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 €"],
                ["Application WhatsApp Business", "Échanges pratiques avec les patients, réponses rapides, étiquettes", "Application gratuite, à installer sur un appareil appartenant à la structure"],
                ["Plateforme WhatsApp Business (API)", "Rappels automatisés à grande échelle, robot d'information pratique", "1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026 ; modèles de messages facturés selon la grille de Meta"],
                ["Tableur (Excel ou Google Sheets)", "Suivi des organismes payeurs, caisse quotidienne, indicateurs d'activité", "Inclus dans les suites bureautiques ; aucun dossier médical ne doit y être tenu"],
                ["Mon espace santé et sa messagerie (France)", "Dossier médical partagé du patient, envoi de documents et de messages au patient", "Service public ; l'alimentation de l'espace numérique et l'envoi de messages comptent parmi les indicateurs optionnels de la dotation numérique de l'Assurance maladie en 2026"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour l'équipe d'un cabinet ou d'une clinique, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation s'organise-t-elle sans interrompre les consultations ?",
            'intro' => "Une structure de soins ne ferme pas pour se former. Le calendrier, les groupes et les exercices sont construits autour des consultations, des gardes et des contraintes du secret.",
            'items' => [
                ['titre' => "Des horaires qui respectent l'activité", 'texte' => "Les demi-journées se placent là où l'activité est la plus faible : début d'après-midi, samedi matin, jours de consultation réduite. À distance, elles peuvent se découper en séances de deux heures en fin de journée, réparties sur trois ou quatre semaines."],
                ['titre' => "Des groupes par fonction", 'texte' => "Les médecins et la direction suivent l'ensemble du parcours. L'accueil et le secrétariat rejoignent les demi-journées sur l'agenda, les messages, le dossier et les règles écrites ; les responsables de la facturation, celle sur le tiers payant et la caisse. Dix participants au plus par groupe."],
                ['titre' => "Aucune donnée réelle de patient", 'texte' => "Les exercices se font sur des patients fictifs, construits sur la structure du logiciel de la clinique, ou dans l'environnement de démonstration de l'éditeur. Le formateur ne consulte aucun dossier, aucun agenda réel et aucune conversation avec un patient."],
                ['titre' => "Les outils réellement en service", 'texte' => "L'agenda, le logiciel de dossier, le numéro WhatsApp et le tableur de facturation de la structure servent de support. Une équipe qui change de logiciel travaille sur le nouveau, avant sa mise en service, pour fixer les droits et les modèles au bon moment."],
                ['titre' => "Un médecin référent dans chaque groupe", 'texte' => "Les modèles de comptes rendus, les fiches d'information et la grille des messages contiennent des choix médicaux : un médecin de la structure les valide. Le formateur apporte la méthode et l'outil, jamais le contenu clinique."],
                ['titre' => "Des supports remis en fichiers modifiables", 'texte' => "Grille des messages automatisables, modèles de comptes rendus produits en séance, procédure de vérification de l'identité, tableau de suivi des organismes payeurs, charte d'usage du numérique et de l'IA, et une attestation de fin de formation pour chaque participant."],
                ['titre' => "Un suivi un mois plus tard", 'texte' => "La séance de suivi part du plan d'action et des premiers rejets de facturation du mois. Entre-temps, les questions sur l'usage des outils peuvent être posées par courriel ou par WhatsApp, dans les conditions prévues au devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir selon la taille et l'organisation de la structure ?",
            'legende' => "Le contenu s'adapte au format ; la règle des données fictives vaut partout.",
            'entetes' => ['Structure', 'Format conseillé', 'Rythme habituel'],
            'lignes'  => [
                ["Cabinet individuel ou à deux praticiens", "Intra, au cabinet, ou à distance pour le médecin et sa secrétaire", "Deux ou trois demi-journées centrées sur l'agenda, les messages, le dossier et les modèles de courriers"],
                ["Cabinet de groupe ou centre médical", "Intra, avec des groupes mixtes de médecins et de secrétaires", "Le parcours complet, en demi-journées espacées d'une semaine, puis la séance de suivi"],
                ["Clinique privée", "Intra, par groupes de fonction, sur place", "Le parcours complet étalé sur deux à trois semaines, pour ne jamais vider un service"],
                ["Réseau de cabinets ou de cliniques sur plusieurs villes ou pays", "Hybride", "Séances communes à distance sur les règles et les outils, ateliers pratiques sur chaque site"],
                ["Mise en service d'un nouveau logiciel", "Atelier ciblé, sur place", "Une journée sur les droits, l'identité des patients, les modèles et les messages, avant la bascule"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier prévu au devis.",
            'items'      => [
                ['offre' => "Parcours complet de deux jours et demi", 'prix' => 'Sur devis', 'inclus' => ["Cinq demi-journées sur les outils et les circuits de la structure", "Grille des messages, modèles de comptes rendus et charte d'usage produits en séance", "Supports modifiables et attestations de fin de formation", "Séance de suivi à un mois"]],
                ['offre' => "Atelier secrétariat et rendez-vous", 'prix' => 'Sur devis', 'inclus' => ["Agenda partagé et règles de créneaux", "Messages de confirmation et de rappel réécrits", "Règle d'urgence écrite pour l'accueil"]],
                ['offre' => "Atelier facturation et tiers payant", 'prix' => 'Sur devis', 'inclus' => ["Circuit d'une facture et pièces par organisme", "Tableau de suivi des organismes payeurs", "Analyse des motifs de rejet de la structure"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes de fonction, dix personnes au plus par groupe.",
                "La préparation sur mesure : lecture du logiciel en service, patients fictifs construits sur sa structure, modèles de départ.",
                "Le lieu et le format : au cabinet, à la clinique ou en visioconférence ; les déplacements hors de Cotonou sont chiffrés à part.",
                "Les horaires décalés, en soirée ou le samedi, pour ne pas toucher aux consultations.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer la session d'une clinique ou d'un cabinet ?",
            'paragraphes' => [
                "Une clinique ou un cabinet qui emploie du personnel est un employeur comme un autre, et peut donc relever des fonds de formation continue de son pays. En Côte d'Ivoire, la page du FDFP consacrée au plan de formation, lue le 5 octobre 2026, ouvre le dépôt à toute entreprise qui justifie du paiement régulier des deux taxes. Au Sénégal, le 3FPT propose un guichet de financement du personnel des entreprises et des membres des organisations professionnelles. Au Bénin, les statuts du FODEFCA ont été approuvés par le décret n° 2022-286 du 11 mai 2022.",
                "En France, France Compétences rappelle que, depuis le 1er janvier 2022, les prestataires qui veulent accéder aux fonds publics ou mutualisés doivent être certifiés Qualiopi. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds, ni par aucun dispositif propre aux professions de santé. Aucune prise en charge n'est donc promise sur cette page : envoyez au fonds, avant de signer, le programme demi-journée par demi-journée et le devis, et décidez avec sa réponse écrite.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs les cabinets et les cliniques commettent-ils en se numérisant, et comment les éviter ?",
            'intro' => "Ces erreurs reviennent d'une structure à l'autre, du cabinet de quartier à la clinique de plusieurs services. Chacune a une parade simple que l'équipe met en place pendant la formation.",
            'items' => [
                ['titre' => "Le téléphone personnel comme standard", 'texte' => "Le numéro de la secrétaire devient celui du cabinet, et les échanges avec les patients partent avec elle. Un numéro et un appareil appartenant à la structure, dès le premier jour."],
                ['titre' => "L'agenda qui raconte la maladie", 'texte' => "Le motif détaillé, saisi « pour gagner du temps », s'affiche ensuite sur l'écran de l'accueil et dans les rappels. Un motif court et neutre dans l'agenda, le reste dans le dossier."],
                ['titre' => "Le logiciel paramétré avant les règles", 'texte' => "L'éditeur installe des profils par défaut, et tout le monde voit tout. Les droits par fonction se décident avant la mise en service, poste par poste, et s'écrivent."],
                ['titre' => "Les dossiers créés en double", 'texte' => "Un patient pressé, une recherche trop rapide, et deux dossiers coexistent, chacun incomplet. Recherche obligatoire avant toute création, et une personne chargée des fusions."],
                ['titre' => "L'assistant en ligne « juste pour l'orthographe »", 'texte' => "On colle un compte rendu pour corriger les fautes, et le dossier est parti. Les corrections se font dans le logiciel ou sur un texte sans aucun élément du patient."],
                ['titre' => "Le compte rendu validé sans relecture", 'texte' => "La transcription semble propre, le médecin signe en fin de journée. La relecture intégrale fait partie de l'acte, surtout pour les chiffres, les côtés et les médicaments."],
                ['titre' => "Les rejets de factures traités un par un", 'texte' => "Chaque rejet est corrigé et renvoyé, sans que personne ne cherche pourquoi il revient. Le motif est noté, compté chaque mois, et corrigé à la source, souvent à l'accueil."],
                ['titre' => "Former les médecins et oublier l'accueil", 'texte' => "Le secret se joue d'abord au guichet et au téléphone. L'accueil et le secrétariat suivent les demi-journées qui les concernent, avec les mêmes règles que les médecins."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue choisir selon le poste et le besoin ?",
            'legende' => "Les fiches détaillent chaque formation ; cette page indique seulement ce qu'elles apportent à un cabinet ou à une clinique.",
            'entetes' => ['Formation', 'Ce qu\'elle apporte à la structure', 'Pour qui'],
            'lignes'  => [
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Les règles d'usage des assistants d'IA pour chaque salarié : réglages, données interdites, droit applicable", "Toute l'équipe qui écrit ou utilise un assistant"],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Hameçonnage, mots de passe, double authentification, appareils de l'accueil et du secrétariat", "Toute l'équipe, accueil compris"],
                ['<a href="/formations/securite-donnees-dirigeants">Sécurité des données et sauvegardes pour dirigeants</a>', "Les décisions de direction : sauvegardes du logiciel de dossiers, accès du prestataire, réponse à un incident", "Direction, médecin gérant, référent informatique"],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "Cartographier et simplifier un circuit administratif, comme les achats ou les admissions, avant de l'outiller", "Responsables administratifs et de services"],
                ['<a href="/formations/whatsapp-business">WhatsApp Business</a>', "La prise en main de l'application : catalogue, étiquettes, réponses rapides", "Secrétariat et accueil"],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Tableaux fiables de suivi des organismes payeurs, de la caisse et de l'activité", "Facturation, comptabilité, direction"],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', "Charte, inventaire des usages, rôles et contrôle de l'IA à l'échelle de l'établissement", "Direction de clinique, responsable qualité"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change le pays d'exercice : électricité, connexion, autorités de contrôle ?",
            'paragraphes' => [
                "Un logiciel de dossiers entièrement en ligne s'arrête avec la connexion ou le courant. Dans beaucoup de villes d'Afrique de l'Ouest, la structure prévoit donc une marche dégradée : une fiche de consultation papier prête à l'accueil, un agenda imprimé chaque soir pour le lendemain, et la saisie des fiches dès le retour du réseau, par une personne désignée. Certains logiciels fonctionnent sur un serveur installé dans la clinique ; ils supportent mieux les coupures, mais reportent sur la structure la charge des sauvegardes et des mises à jour.",
                "Le lieu d'hébergement a aussi une portée juridique. Au Bénin, l'article 407 de la loi n° 2017-20 soumet à l'autorisation préalable de l'Autorité de protection des données personnelles, outre les traitements de données de santé, le transfert de données personnelles vers un État tiers. Une clinique de Cotonou qui choisit un logiciel hébergé en Europe ou aux États-Unis fait donc sortir des données de santé du pays, et doit le traiter comme tel dans ses démarches. En Côte d'Ivoire, l'autorité compétente est l'ARTCI ; au Sénégal, la Commission de protection des données personnelles.",
                "En Europe, la CNIL publie pour les professionnels de santé libéraux des réponses pratiques : registre des traitements obligatoire, information des patients par une affiche ou dans le logiciel, contrat avec chaque prestataire qui traite des données pour le cabinet. Elle rappelle aussi qu'un médecin exerçant à titre individuel n'a pas l'obligation de désigner un délégué à la protection des données ni de mener une analyse d'impact, sauf traitement à grande échelle. Une clinique ou un groupe de cabinets se pose la question avec son conseil, et la formation aide à préparer les éléments de réponse.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre cabinet ou votre clinique avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des médecins et des équipes de cliniques à l'usage des outils numériques et de l'IA. Il n'exerce pas la médecine, ne donne aucun conseil médical et ne valide aucun contenu clinique : il forme à l'organisation et aux outils qui entourent le soin, l'agenda, le dossier informatisé, les modèles de documents, la messagerie avec les patients, la facturation et les automatisations. Les choix médicaux restent ceux des médecins de la structure.",
                "Son métier de développeur le place du côté où se fabriquent ces outils. Il construit des agendas et des systèmes de réservation, des applications avec comptes et droits d'accès, des automatisations reliées à WhatsApp ; il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il sait donc ce qu'un paramétrage par défaut laisse ouvert, et quelles questions poser à un éditeur.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il travaille dans le numérique depuis " . $ans . " ans, dit avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a mené des missions dans " . count((array) fait('pays_travailles')) . " pays. Aucun éditeur ne l'a certifié, aucune structure formée n'est citée, et aucun gain chiffré n'est promis. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, ses pays d'intervention sur celle des <a href=\"/zones/\">zones</a>, l'organisation commune de ses formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et l'ensemble des parcours dans le <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre cabinet ou votre clinique ?",
            'texte' => "Commencez par l'accueil et le secrétariat : un numéro et un appareil à la structure, un agenda aux motifs neutres, des rappels qui ne révèlent rien. Donnez à chaque poste les droits dont il a besoin, et pas davantage. Fiabilisez l'identité des patients avant de multiplier les dossiers. Laissez l'IA travailler sur des modèles vides, jamais sur un dossier, et faites tout relire par le médecin qui signe. Suivez les rejets de factures par organisme, et corrigez leur cause à la source.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre secrétariat ou votre facturation vous coûte-t-il du temps médical ?",
            'texte'  => "Décrivez votre structure, le nombre de praticiens et de secrétaires, les logiciels en service et ce qui vous pèse le plus aujourd'hui. Vous recevez une réponse sous 24 heures, puis une proposition de cadrage gratuit et un devis détaillé, avec des horaires compatibles avec vos consultations.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon cabinet ou ma clinique'],
        ],
    ],

    'faq' => [
        ['q' => "La formation apprend-elle à utiliser l'IA pour poser un diagnostic ou prescrire ?", 'r' => "Non. Elle ne traite aucun usage clinique de l'IA : ni aide au diagnostic, ni choix d'un traitement, ni lecture d'examens. Elle porte sur l'organisation et les outils qui entourent le soin : secrétariat, agenda, dossier informatisé, modèles de documents, messages aux patients, facturation. Les décisions médicales restent celles du médecin, et Richard SALANON, qui n'est pas professionnel de santé, ne donne aucun conseil médical."],
        ['q' => "Faut-il déjà disposer d'un logiciel de dossier patient ?", 'r' => "Non. Une structure qui travaille encore sur papier et sur tableur repart avec des règles d'agenda, d'identité et de messages applicables tout de suite, et avec la liste des questions à poser aux éditeurs. Une structure qui change de logiciel gagne à placer la formation juste avant la mise en service, pour fixer les droits et les modèles au bon moment."],
        ['q' => "Le formateur aura-t-il accès à nos dossiers ou à nos conversations avec les patients ?", 'r' => "Non. Les exercices se font sur des patients fictifs, construits sur la structure de votre logiciel, ou dans un environnement de démonstration de l'éditeur. Le formateur ne consulte ni dossier réel, ni agenda nominatif, ni échange avec un patient, et ne demande aucun mot de passe."],
        ['q' => "Peut-on utiliser ChatGPT ou un autre assistant pour rédiger nos comptes rendus ?", 'r' => "Pas avec le contenu d'un dossier réel dans un assistant grand public. L'IA peut aider à construire des modèles vides, des fiches d'information et des courriers types. Un outil qui traite de vrais comptes rendus doit être retenu par la direction, avec un contrat qui encadre l'hébergement des données, et chaque document reste relu et validé par le médecin qui le signe."],
        ['q' => "Peut-on envoyer les rappels de rendez-vous par WhatsApp ?", 'r' => "Oui, depuis un numéro au nom de la structure, avec un texte neutre qui ne cite ni le motif, ni l'examen, ni une spécialité révélatrice. Pour quelques dizaines de rappels par jour, l'application WhatsApp Business suffit ; au-delà, la plateforme de Meta permet l'envoi automatique, avec un quota de 1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026 et des modèles de messages facturés selon sa grille."],
        ['q' => "Que doit voir la secrétaire médicale dans le logiciel ?", 'r' => "Ce dont elle a besoin pour sa mission : l'identité, les coordonnées, l'agenda et la situation administrative du patient. La CNIL prend cet exemple dans sa fiche destinée aux professionnels de santé libéraux : la secrétaire médicale accède aux données administratives qui permettent de gérer les rendez-vous, pas à la totalité du dossier médical."],
        ['q' => "Une clinique installée au Bénin doit-elle faire une démarche auprès de l'APDP ?", 'r' => "La loi n° 2017-20 soumet à l'autorisation préalable de l'Autorité de protection des données personnelles les traitements de données sensibles, dont les données de santé, ainsi que les transferts de données vers un État tiers. La formation lit ces articles avec l'équipe et prépare les éléments utiles ; la démarche elle-même se vérifie auprès de l'APDP, et au besoin avec un juriste."],
        ['q' => "Notre logiciel est hébergé en ligne : que faut-il vérifier ?", 'r' => "Le pays et le prestataire d'hébergement, les sauvegardes, les accès de maintenance et la restitution des données en fin de contrat. En France, l'hébergeur de données de santé doit être certifié selon l'article L.1111-8 du code de la santé publique. Au Bénin, un hébergement hors du pays constitue un transfert de données vers un État tiers au sens de la loi n° 2017-20."],
        ['q' => "La formation couvre-t-elle la facturation aux assurances et le tiers payant ?", 'r' => "Oui, pour le circuit : vérification des droits à l'accueil, pièces exigées par chaque organisme, bordereaux, suivi des rejets et relances. Elle ne négocie pas les conventions avec les assureurs et ne remplace pas votre comptable ou votre expert-comptable pour la tenue de la comptabilité."],
        ['q' => "Les médecins doivent-ils suivre toute la formation ?", 'r' => "C'est préférable, parce que les règles de secret, les modèles et les droits d'accès demandent leurs décisions. Quand leur emploi du temps ne le permet pas, ils suivent au minimum la première matinée, celle sur le dossier et les comptes rendus et celle sur les règles écrites, et un médecin référent valide les productions des autres groupes."],
        ['q' => "Richard a-t-il déjà formé des médecins ?", 'r' => "Oui, Richard a déjà formé des médecins et des équipes de cliniques. Il ne cite aucune structure formée, n'exerce pas la médecine et ne forme qu'à l'usage des outils numériques et de l'IA."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Il dépend du nombre de groupes, de la préparation sur votre logiciel, du lieu et des horaires. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 394, 402, 407, 428, 430 et 435)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2020-37 du 3 février 2021 portant protection de la santé des personnes (article 6)", 'url' => 'https://sgg.gouv.bj/doc/loi-2020-37/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre II (article 9)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-05'],
        ['titre' => "CNIL, qu'est-ce qu'une donnée de santé ? (8 janvier 2018)", 'url' => 'https://www.cnil.fr/fr/quest-ce-ce-quune-donnee-de-sante', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD et professionnels de santé libéraux : ce que vous devez savoir (1er juin 2018)", 'url' => 'https://www.cnil.fr/fr/rgpd-et-professionnels-de-sante-liberaux-ce-que-vous-devez-savoir', 'date' => '2026-10-05'],
        ['titre' => "Conseil national de l'Ordre des médecins, code de déontologie médicale, article 4 : secret professionnel (article R.4127-4 du code de la santé publique)", 'url' => 'https://www.conseil-national.medecin.fr/code-deontologie/devoirs-generaux-medecins-art-2-31/article-4-secret-professionnel', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la santé publique, article L.1111-8 (hébergement des données de santé)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000033862549', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, arrêté du 26 avril 2024 portant approbation du référentiel de certification pour l'hébergement de données de santé", 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000049537692', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code pénal, article 226-13 (atteinte au secret professionnel)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006417945', 'date' => '2026-10-05'],
        ['titre' => "Organisation mondiale de la santé, orientations sur l'éthique et la gouvernance des grands modèles multimodaux en santé (18 janvier 2024)", 'url' => 'https://www.who.int/news/item/18-01-2024-who-releases-ai-ethics-and-governance-guidance-for-large-multi-modal-models', 'date' => '2026-10-05'],
        ['titre' => "Haute Autorité de santé, premières clefs d'usage de l'IA générative en santé (30 octobre 2025, mise à jour du 15 avril 2026)", 'url' => 'https://www.has-sante.fr/jcms/p_3703115/fr/premieres-clefs-d-usage-de-l-ia-generative-en-sante', 'date' => '2026-10-05'],
        ['titre' => "Assurance maladie, la nouvelle dotation numérique des médecins (janvier 2026)", 'url' => 'https://www.ameli.fr/medecin/exercice-liberal/facturation-remuneration/nouvelle-dotation-numerique-janvier-2026', 'date' => '2026-10-05'],
        ['titre' => "Caisse nationale d'assurance maladie de Côte d'Ivoire, couverture maladie universelle", 'url' => 'https://ipscnam.ci/', 'date' => '2026-10-05'],
        ['titre' => "Agence nationale de protection sociale du Bénin, programme ARCH", 'url' => 'https://anps.bj/', 'date' => '2026-10-05'],
        ['titre' => "OpenMRS, dossier médical électronique open source", 'url' => 'https://openmrs.org/', 'date' => '2026-10-05'],
        ['titre' => "DoliMed, logiciel de dossier médical fondé sur Dolibarr", 'url' => 'https://www.dolimed.com/', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle et technique", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-ethique-conformite', 'cybersecurite-employes', 'securite-donnees-dirigeants', 'digitalisation-processus', 'whatsapp-business', 'excel-google-sheets'],
        'services'    => ['formation-en-entreprise', 'systeme-de-reservation-en-ligne', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'odoo-vs-dolibarr'],
    ],
];
