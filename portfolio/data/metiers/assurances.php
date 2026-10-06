<?php
// ============================================================
// data/metiers/assurances.php · Page « formations par métier » pour les
// compagnies, agents généraux et courtiers d'assurance (vague 1C, univers
// « Chiffre et finance », non prioritaire, statut P : Richard peut former
// ce public, il ne l'a pas encore fait ; ne jamais écrire « a formé »).
// Angle propre : souscription, déclaration et gestion des sinistres, fraude,
// relation client et réclamations, données de santé, assurance par
// téléphone mobile et micro-assurance, réglementation CIMA. La page oriente
// vers ia-processus-metier, ia-ethique-conformite, chatbot-whatsapp et
// data-literacy sans en reprendre le texte ; aucun conseil réglementaire.
// Sources lues le 05/10/2026 : CIMA (règlements n° 01/2024 sur la
// distribution numérique, n° 010/2024 sur la sécurité des TIC, n° 0004/2021
// et n° 0002/2025 sur les régimes du contrat, n° 0002/2026 sur la
// micro-assurance, liste des règlements ; code, édition 2019 : articles 13,
// 18, 414, 415, 505, 508, 700, 701, 710, 731 ; page de présentation),
// directive (UE) 2016/97 (articles 10, 17 et 20), règlement (UE) 2024/1689
// (annexe III, point 5 c, et article 27), page de la Commission du
// 3 août 2026, page de l'ACPR sur le règlement IA, recommandation ACPR
// 2024-R-02, avis de l'EIOPA du 6 août 2025, RGPD (article 9, CNIL), loi
// béninoise n° 2017-20 (article 394), ALFA (exercice 2025).
// Richard n'est ni assureur, ni intermédiaire, ni conseiller réglementaire.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les assurances : des souscripteurs, des gestionnaires de sinistres et des intermédiaires qui gagnent du temps avec les outils, sans leur confier la décision, les données de santé ni la parole de la compagnie",
    'title'   => "Formation IA pour assureurs et courtiers | Richard SALANON",
    'meta'    => "Former assureurs, agents et courtiers à l'IA : souscription, sinistres, fraude, assurance mobile, réclamations, règles CIMA et européennes. Sur devis.",
    'en_bref' => "Cette page s'adresse aux compagnies d'assurance, aux agences générales et aux cabinets de courtage qui veulent former leurs équipes à l'intelligence artificielle, à l'automatisation et aux canaux numériques, de la proposition d'assurance au règlement du sinistre. Elle décrit ce que ces outils changent au métier, ce qu'ils ne doivent jamais faire au regard du Code des assurances de la CIMA, du droit européen et des données de santé, et quelles formations du catalogue retenir selon le poste. Le parcours type compte six demi-journées, en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Chiffre et finance',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : la vie d'un contrat, de la proposition au règlement, et la carte de ce que chaque outil touche",
            'duree'  => '3 h 30',
            'points' => [
                "Le trajet réel d'un contrat sur un mois : proposition, encaissement de la prime, émission, avenant, déclaration de sinistre, expertise, règlement, réclamation, renouvellement ; temps passé et ressaisies à chaque étape.",
                "Les deux registres que le code impose de tenir, celui des contrats et celui des sinistres, et la place qu'y prennent les messages reçus sur WhatsApp ou par courriel.",
                "Classement des données manipulées : identité, situation familiale, véhicule, bien assuré, état de santé, coordonnées bancaires, rapport d'expertise ; ce qui ne sort jamais du système de la compagnie.",
                "Inventaire, sans reproche, des outils déjà utilisés par les équipes et par les intermédiaires : téléphones personnels, groupes de discussion, comptes gratuits d'assistants d'IA, tableurs de suivi.",
                "Choix de trois chantiers pour la suite, chacun mesuré avant la session : délai d'émission d'une attestation, délai entre la déclaration et l'offre, nombre de réclamations en attente.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : souscrire et conseiller, ce que l'assistant prépare et ce que le client déclare lui-même",
            'duree'  => '3 h 30',
            'points' => [
                "Recueillir les besoins du client avant de proposer un produit : grille d'entretien, questions à ne jamais omettre, trace écrite de ce qui a été dit.",
                "Faire rédiger par l'assistant une fiche produit en langage simple à partir des conditions générales, puis la confronter ligne à ligne au contrat : exclusions, franchises, plafonds, délais de carence.",
                "La déclaration du risque appartient au souscripteur : pourquoi un questionnaire prérempli par l'outil ou par l'agent expose le contrat à la nullité.",
                "Pas de garantie sans prime encaissée : où placer le contrôle dans un circuit automatisé, pour qu'aucune attestation ne parte avant le paiement.",
                "Exercice : une proposition d'assurance habitation et une proposition prévoyance, préparées avec l'outil puis relues par un binôme qui joue le client.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : déclarer et instruire un sinistre, du premier message au dossier enregistré",
            'duree'  => '3 h 30',
            'points' => [
                "Recevoir une déclaration sur WhatsApp ou par formulaire : accusé de réception, liste des pièces selon la garantie, numéro de dossier unique, transfert dans le système de gestion.",
                "Synthèse d'un dossier par l'assistant sur des pièces fictives : chronologie, garanties en jeu, pièces manquantes, questions pour l'expert ; jamais de position sur la prise en charge.",
                "Tableau des délais réglementaires par branche, avec des alertes : offre aux victimes d'accidents de la circulation, règlement en micro-assurance, versement des capitaux en assurance vie.",
                "Lettre au sinistré préparée avec l'outil, puis complétée et signée par le gestionnaire : ce qui est accepté, ce qui manque, ce qui est refusé et pourquoi.",
                "Exercice en binôme : un dégât des eaux et un accident matériel, instruits par l'un et contrôlés par l'autre avant l'envoi de la lettre.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : fraude, repérer les signaux sans accuser personne",
            'duree'  => '3 h 30',
            'points' => [
                "Les signaux classiques d'un dossier atypique : sinistre peu après la souscription, factures de même présentation, témoins récurrents, coordonnées bancaires partagées entre plusieurs assurés.",
                "Photos et documents retouchés ou fabriqués par l'IA : vérifications simples (original demandé, date de prise de vue, cohérence des lieux) et recours à l'expert sur place.",
                "Le score de fraude d'un outil est une alerte qui déclenche une vérification, jamais un motif de refus : comment le documenter et comment l'expliquer.",
                "Échanges avec l'assuré pendant la vérification : ton, délais, droit d'être entendu, et ce qui ne s'écrit jamais dans un message.",
                "Exercice : dix dossiers fictifs, dont trois atypiques ; chaque participant décide de ce qu'il vérifie, de ce qu'il transmet et de ce qu'il règle sans attendre.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : relation client, réclamations, assurance mobile et micro-assurance",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qu'un assuré attend d'un numéro WhatsApp d'agence : attestation, échéance, état d'un dossier ; ce qu'il ne doit jamais obtenir sans vérification de son identité.",
                "Robot de premier niveau : périmètre écrit, mention qu'il s'agit d'une machine, passage à un conseiller, journal des échanges, et cas où le robot doit se taire.",
                "Repérer une réclamation dans un message vocal ou une conversation, l'enregistrer, accuser réception et répondre dans le délai que la compagnie s'est fixé.",
                "Contrats vendus par téléphone mobile avec un opérateur ou une fintech : reçu de transaction, information du client, rôle exact du partenaire, données qui restent à l'assureur.",
                "Exercice : douze messages réels, anonymisés, traités avec la réponse type adaptée ou transférés au bon service.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : données de santé, sécurité et règles d'usage de la compagnie",
            'duree'  => '3 h 30',
            'points' => [
                "Questionnaires médicaux, certificats, rapports d'expertise corporelle : qui y accède, où ils sont rangés, et pourquoi ils ne passent jamais par un assistant en ligne.",
                "Les fraudes qui visent les équipes : faux assuré qui change son numéro de téléphone ou son RIB avant un règlement, faux expert, faux collègue du siège.",
                "Rédaction, avec la direction technique, la conformité et l'informatique, des règles d'usage de l'IA de la compagnie ou du cabinet : outils autorisés, données interdites, relecture obligatoire, signalement d'une erreur.",
                "Évaluation sur un dossier fil rouge, de la proposition au règlement du sinistre, avec les contrôles écrits à chaque étape.",
                "Plan d'action à trois mois par service ou par agence : qui fait quoi, avec quel outil, et quel contrôle le vérifie.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Souscripteurs, gestionnaires de contrats et de sinistres, chargés de clientèle, agents généraux, courtiers et leurs collaborateurs, équipes fraude, conformité et direction"],
        ['l' => 'Durée', 'v' => "Parcours type de 3 jours en 6 demi-journées, découpé par poste"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent dans une compagnie, une agence générale ou un cabinet de courtage ?",
            'paragraphes' => [
                "L'assurance vend une promesse qui ne se vérifie que le jour du sinistre. Entre la signature et ce jour-là, le métier tient en quelques gestes répétés des milliers de fois : comprendre le besoin, apprécier le risque, encaisser la prime, émettre le contrat, recevoir une déclaration, instruire, régler, répondre à une réclamation. Chacun de ces gestes produit des documents que l'on ressaisit, que l'on relance et que l'on cherche. C'est là que les outils numériques font gagner du temps. Ils ne changent rien, en revanche, à la question qui fonde la relation avec l'assuré : qui a décidé, sur quelles pièces, et dans quel délai.",
                "Dans la zone CIMA, le cadre a beaucoup bougé en trois ans. Le Conseil des ministres des assurances a adopté le 16 janvier 2024 un règlement sur la distribution et la gestion des contrats par voie numérique, qui vise expressément la téléphonie mobile et internet. Le 17 décembre 2024, un autre règlement a fixé des règles de sécurité et de gouvernance des technologies de l'information pour les entreprises d'assurance et de réassurance, avec un délai de vingt-quatre mois pour s'y conformer. Le 10 juillet 2025, les délais de versement en assurance vie ont été resserrés à quinze jours ouvrés, et le texte précise que les pièces peuvent être transmises par voie électronique.",
                "En Europe, la pression vient d'autres textes. Le règlement européen sur l'IA classe à haut risque les systèmes destinés à l'évaluation des risques et à la tarification des personnes physiques en assurance vie et en assurance maladie (annexe III, point 5 c), et la page de la Commission mise à jour le 3 août 2026 fixe l'application de ces règles au 2 décembre 2027. En France, l'ACPR a été désignée autorité de surveillance du marché pour les systèmes d'IA à haut risque du secteur financier. L'EIOPA, de son côté, a publié le 6 août 2025 un avis sur la gouvernance de l'IA dans l'assurance, qui demande une formation suffisante du personnel chargé de la surveillance humaine.",
                "Dans les agences et les cabinets, la réalité est plus simple et plus pressante. Les assurés écrivent sur WhatsApp à toute heure, envoient la photo d'un pare-brise ou d'un plafond effondré, demandent leur attestation avant un contrôle routier. Les collaborateurs répondent depuis leur téléphone, parfois avec un assistant d'IA ouvert dans un autre onglet. Aucun texte n'interdit ces outils ; tous demandent qu'on sache ce qu'ils font des données et qui répond de leurs erreurs. La formation part de ces usages réels, pas d'une démonstration de produit.",
                "Une précision dès maintenant : Richard SALANON n'est ni assureur, ni agent général, ni courtier, ni actuaire. Il forme à l'usage des outils numériques, de l'IA et de l'automatisation dans le cadre que la compagnie ou le cabinet a fixé. Les textes de la CIMA, de la Commission régionale de contrôle des assurances (CRCA), de l'Union européenne ou de l'ACPR sont cités ici pour tracer les limites de l'outil et renvoyer à la source, jamais pour les interpréter à la place de la direction technique ou de la conformité.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches de l'assurance changent avec les outils, et lesquelles restent au souscripteur, au gestionnaire ou à l'intermédiaire ?",
            'legende' => "Répartition travaillée pendant le parcours. La dernière colonne indique la formation du catalogue qui approfondit l'outil ou la méthode.",
            'entetes' => ['Tâche', "Ce que l'outil peut préparer", "Ce qui reste à une personne", 'Pour aller plus loin'],
            'lignes'  => [
                ["Recueil des besoins et conseil", "Grille d'entretien, fiche produit en langage simple, comparaison de garanties tirée des conditions générales", "Recommander un contrat, expliquer les exclusions, répondre du conseil donné", "<a href=\"/formations/ia-en-entreprise\">IA en entreprise : productivité des équipes</a>"],
                ["Souscription", "Contrôle de complétude du dossier, rappel des pièces, calcul de prime selon le tarif paramétré", "Accepter, ajourner ou refuser un risque, fixer une surprime, déroger au tarif", "<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>"],
                ["Encaissement et émission", "Rapprochement des paiements par mobile money ou virement, émission de l'attestation une fois la prime reçue", "Traiter un impayé, accorder un délai dans les cas prévus par le code, annuler un contrat", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Déclaration de sinistre", "Accusé de réception, liste des pièces par garantie, numéro de dossier, alertes de délai", "Ouvrir le dossier au bon registre, apprécier la garantie, mandater un expert", "<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>"],
                ["Instruction et règlement", "Chronologie du dossier, synthèse du rapport d'expertise, brouillon de lettre au sinistré", "Décider de la prise en charge, chiffrer l'indemnité, signer l'offre ou le refus motivé", "<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>"],
                ["Lutte contre la fraude", "Signaux d'alerte, rapprochement de dossiers, vérification de documents", "Ouvrir une enquête, entendre l'assuré, refuser ou poursuivre", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Relation client et réclamations", "Réponses types, robot de premier niveau, classement des réclamations par motif", "Toute information sur un contrat ou un dossier après vérification d'identité, réponse signée à une réclamation", "<a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a>"],
                ["Pilotage du portefeuille", "Tableaux de primes, de sinistres, d'arriérés et de délais par agence ou par intermédiaire", "Lire les écarts, décider d'une mesure tarifaire ou commerciale, répondre devant le contrôle", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation chez un assureur, un agent ou un courtier ?",
            'intro' => "Chaque limite ci-dessous vient d'un texte que la profession applique déjà. Le parcours la traduit en gestes de poste ; son interprétation fine reste l'affaire de la direction technique et de la conformité.",
            'items' => [
                ['titre' => "Émettre une garantie avant l'encaissement de la prime", 'texte' => "L'article 13 du Code des assurances de la CIMA subordonne la prise d'effet du contrat au paiement de la prime et interdit de souscrire ou de renouveler un contrat dont la prime n'est pas payée, sauf les exceptions qu'il énumère. Le règlement du 16 janvier 2024 applique cette règle aux contrats distribués par voie numérique et interdit aux entreprises d'assurance de consentir du crédit à leur clientèle, sous quelque forme que ce soit. Un flux qui envoie l'attestation dès la saisie de la proposition contourne donc le code."],
                ['titre' => "Remplir la déclaration du risque à la place du client", 'texte' => "Selon l'article 18 du même code, la réticence ou la fausse déclaration intentionnelle qui change l'objet du risque ou en diminue l'opinion pour l'assureur rend le contrat nul, même si le risque omis n'a joué aucun rôle dans le sinistre. Un questionnaire prérempli par un assistant, puis signé sans relecture, met l'assuré en danger le jour où il en a besoin. L'outil aide à poser les questions ; les réponses viennent du client."],
                ['titre' => "Refuser un sinistre ou fixer une indemnité sans décision humaine motivée", 'texte' => "En micro-assurance, l'article 710 impose d'accepter ou de rejeter une demande de règlement dans les sept jours, de payer dans les dix jours et d'indiquer par écrit le motif d'un rejet. Partout, un refus engage la compagnie et doit pouvoir être expliqué par une personne qui a lu le dossier. Dans l'Union européenne, l'article 27 du règlement sur l'IA impose en outre une analyse d'impact sur les droits fondamentaux aux utilisateurs de systèmes d'évaluation et de tarification en assurance vie et maladie."],
                ['titre' => "Faire circuler des données de santé hors du cadre prévu", 'texte' => "Au Bénin, l'article 394 de la loi n° 2017-20 portant code du numérique interdit le traitement des données concernant la santé, sauf dans des cas énumérés, parmi lesquels l'exécution d'un contrat auquel la personne est partie. Dans l'Union européenne, l'article 9 du RGPD pose la même interdiction de principe. Ces exceptions permettent à l'assureur de gérer un contrat santé ou prévoyance ; elles n'autorisent pas un collaborateur à coller un certificat médical dans un assistant grand public."],
                ['titre' => "Laisser un partenaire technique maître des données", 'texte' => "Le règlement du 16 janvier 2024 autorise les partenariats avec des prestataires de services techniques, opérateurs mobiles ou plateformes, mais sans clause d'exclusivité et sous la responsabilité de l'assureur. Son article 4 interdit toute disposition qui limiterait l'accès de l'entreprise d'assurance aux données nées des opérations, et son article 5 exige une traçabilité pendant toute la durée du contrat et dix ans après sa fin. Un outil d'IA ou d'automatisation branché sur ces flux entre dans le même périmètre."],
                ['titre' => "Laisser filer un délai légal parce que l'outil n'a pas alerté", 'texte' => "Les délais du code ne se négocient pas avec un logiciel. En responsabilité civile automobile, l'article 231, dans sa rédaction issue du règlement n° 0004 de 2021, impose une offre d'indemnité à la victime dans les six mois de l'accident, et l'article 236 fait courir un intérêt de 5 % par mois sur les sommes payées en retard. En assurance vie, le règlement du 10 juillet 2025 fixe quinze jours ouvrés et un intérêt de 2,5 % par mois au-delà. Une alerte automatique aide ; elle a un responsable nommé."],
                ['titre' => "Parler au nom de la compagnie sans contrôle", 'texte' => "L'article 505 du code rend l'employeur ou le mandant civilement responsable des fautes, imprudences ou négligences de ses employés et mandataires qui présentent des opérations d'assurance. Une réponse d'un robot ou d'un agent qui promet une prise en charge engage donc l'assureur. Les réponses types se valident une fois par la direction technique, et toute question sur une garantie précise passe par une personne habilitée."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi la photo de sinistre envoyée sur WhatsApp est-elle devenue une pièce fragile ?",
            'texte' => "Pendant des années, la photo d'un véhicule accidenté ou d'une toiture arrachée envoyée par message a suffi pour ouvrir un dossier et parfois pour le régler. Les outils de retouche et de génération d'images rendent désormais possible la fabrication d'un dégât crédible en quelques minutes, et la compression des messageries efface une partie des informations qui permettaient de dater un cliché. La réponse n'est ni de tout refuser ni de soupçonner chaque assuré : on demande le fichier original quand l'enjeu le justifie, on compare avec les pièces déjà reçues, on mandate un expert pour les dossiers importants, et l'on note dans le dossier ce qui a été vérifié.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés une compagnie ou un intermédiaire doit-il avoir en tête avant de former ses équipes ?",
            'items' => [
                ['valeur' => '16 janvier 2024', 'libelle' => "Adoption à Dakar du règlement de la CIMA sur la distribution et la gestion des contrats d'assurance par voie numérique ; les entreprises déjà actives disposaient de douze mois pour s'y conformer après son entrée en vigueur.", 'source' => "CIMA, règlement n° 01/CIMA/PCMA/CE/SG/2024", 'url' => 'https://cima-afrique.org/wp-content/uploads/2024/02/Reglement-01-24-Portant-sur-la-distribution-et-la-gestion-du-contrat-dassurance-par-voie-numerique-electronique.pdf'],
                ['valeur' => '10 ans', 'libelle' => "Durée pendant laquelle l'assureur doit assurer la traçabilité des opérations conclues par voie numérique après la fin du contrat, en plus de toute la durée du contrat (article 5 du même règlement).", 'source' => "CIMA, règlement n° 01/CIMA/PCMA/CE/SG/2024", 'url' => 'https://cima-afrique.org/wp-content/uploads/2024/02/Reglement-01-24-Portant-sur-la-distribution-et-la-gestion-du-contrat-dassurance-par-voie-numerique-electronique.pdf'],
                ['valeur' => '24 mois', 'libelle' => "Délai laissé aux entreprises d'assurance et de réassurance en activité pour appliquer le règlement du 17 décembre 2024 sur la sécurité et la gouvernance des technologies de l'information, qui impose notamment des programmes de formation à la sécurité de l'information pour tout le personnel.", 'source' => "CIMA, règlement n° 010/CIMA/PCMA/CE/SG/2024", 'url' => 'https://cima-afrique.org/wp-content/uploads/2024/12/Reglement-N%C2%B0010-24-Relatif-a-la-securite-et-a-la-gouvernance-des-technologies-de-linformation-e_compressed.pdf'],
                ['valeur' => '15 jours ouvrés', 'libelle' => "Délai maximal de versement d'une avance, d'un capital échu ou d'un capital décès en assurance vie, à compter de la réception des pièces, qui peuvent être transmises par voie électronique ; au-delà, intérêt de 2,5 % par mois (règlement adopté à Lomé le 10 juillet 2025).", 'source' => "CIMA, règlement n° 0002/CIMA/PCMA/PCE/2025", 'url' => 'https://cima-afrique.org/wp-content/uploads/2025/07/Reglement-N%C2%B0002-25-Modifiant-et-Completant-les-regimes-du-contrat-dassurance.pdf'],
                ['valeur' => '946 millions d\'euros', 'libelle' => "Fraude identifiée par les adhérents de l'Agence pour la lutte contre la fraude à l'assurance en France sur l'exercice 2025, dont près de 627 millions en IARD et 294 millions en assurance de personnes ; l'agence précise que ce chiffre mesure l'activité de détection, pas l'ampleur de la fraude.", 'source' => "ALFA, la fraude à l'assurance, chiffres clés", 'url' => 'https://www.alfa.asso.fr/fraude-a-lassurance/'],
                ['valeur' => '15 heures', 'libelle' => "Minimum annuel de formation ou de développement professionnels sur lequel les États de l'Union fondent le contrôle des connaissances des distributeurs d'assurance et du personnel des compagnies (article 10 de la directive (UE) 2016/97).", 'source' => "Directive (UE) 2016/97 sur la distribution d'assurances", 'url' => 'https://publications.europa.eu/resource/celex/32016L0097'],
                ['valeur' => '2 décembre 2027', 'libelle' => "Application, dans l'Union européenne, des règles sur les systèmes d'IA à haut risque de l'annexe III, dont l'évaluation des risques et la tarification en assurance vie et maladie (page de la Commission mise à jour le 3 août 2026, page de l'ACPR consultée le 5 octobre 2026).", 'source' => "Commission européenne, cadre réglementaire de l'IA", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble l'usage de ces outils dans l'assurance, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Compagnie IARD, service sinistres automobile, à Abidjan", 'probleme' => "Situation type : les procès-verbaux, certificats médicaux et devis de garage arrivent par courrier, par courriel et par WhatsApp. Les gestionnaires découvrent les échéances d'offre aux victimes quand l'avocat relance, et les intérêts de retard s'accumulent.", 'solution' => "Point d'entrée unique par dossier, numéro attribué dès la déclaration, tableau des délais de l'article 231 avec alertes à trente jours, synthèse du dossier préparée sur pièces anonymisées, offre rédigée et signée par le gestionnaire."],
                ['secteur' => "Agence générale de quatre collaborateurs, à Cotonou", 'probleme' => "Situation type : les renouvellements automobiles se gèrent de mémoire, les assurés réclament leur attestation sur le téléphone personnel de l'agent, et des attestations partent parfois avant que la prime soit réglée.", 'solution' => "Numéro WhatsApp Business de l'agence avec réponses types, relance d'échéance programmée, émission de l'attestation bloquée tant que le paiement n'est pas rapproché, journal des échanges rattaché au contrat."],
                ['secteur' => "Cabinet de courtage d'entreprises, à Dakar", 'probleme' => "Situation type : les chargés de clientèle comparent à la main les conditions de cinq compagnies pour chaque appel d'offres de flotte ou de santé collective, et la note de synthèse au client prend une semaine.", 'solution' => "Tableau comparatif construit à partir des conditions générales et particulières, premier jet de la note préparé avec l'assistant dans l'offre validée par le cabinet, chaque garantie citée vérifiée dans le contrat avant l'envoi."],
                ['secteur' => "Micro-assurance santé distribuée par téléphone mobile, à Lomé", 'probleme' => "Situation type : les adhérents souscrivent en quelques clics avec leur portefeuille mobile, mais ne savent pas à qui s'adresser après une hospitalisation, et le partenaire technique garde seul l'historique des transactions.", 'solution' => "Reçu électronique conforme à l'article 11 du règlement de 2024, numéro de réclamation affiché par l'assureur, convention qui garantit l'accès de l'assureur aux données, et réponses types dans les langues des adhérents, comme l'article 701 le permet pour le contrat."],
                ['secteur' => "Compagnie d'assurance vie, à Douala", 'probleme' => "Situation type : depuis le règlement de juillet 2025, les capitaux décès doivent être versés en quinze jours ouvrés après réception des pièces, mais les dossiers circulent encore sur papier entre l'agence, le siège et la comptabilité.", 'solution' => "Liste des pièces envoyée aux bénéficiaires dès le premier contact, dépôt électronique accepté, date de complétude enregistrée dans le système, alerte au cinquième jour ouvré et contrôle par sondage des versements en retard."],
                ['secteur' => "Courtier en assurance de personnes, en France", 'probleme' => "Situation type : le cabinet veut utiliser l'IA pour préparer ses recommandations personnalisées et répondre aux réclamations, sans savoir ce qui relève du règlement européen ni comment tenir les délais de l'ACPR.", 'solution' => "Grille de recueil des besoins inspirée de l'article 20 de la directive sur la distribution, recommandations rédigées par le courtier avec un assistant d'offre professionnelle sans données de santé, réclamations suivies selon la recommandation 2024-R-02 de l'ACPR."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un professionnel de l'assurance doit-il savoir manier aujourd'hui ?",
            'legende' => "Outils courants dans les compagnies, agences et cabinets de la zone CIMA et d'Europe. Les prix cités ont été relevés le 5 octobre 2026 sur les pages des éditeurs ; ils sont payés à l'éditeur, jamais au formateur.",
            'entetes' => ['Outil ou système', 'Usage dans le métier', "Point d'attention", 'Formation liée'],
            'lignes'  => [
                ["Logiciel de gestion d'assurance de la compagnie", "Contrats, avenants, quittances, sinistres, commissions des intermédiaires, états pour le contrôle", "Le règlement de décembre 2024 en décrit les fonctions minimales, dont l'enregistrement des contrats et des sinistres prévu aux articles 414 et 415 et l'historisation des opérations : il reste la seule source de vérité", "<a href=\"/formations/digitalisation-processus\">Digitalisation des processus métiers</a>"],
                ["Assistants d'IA en offre professionnelle", "Fiches produits, synthèses de dossiers, lettres aux assurés, recherche dans les conditions générales", "Aucun questionnaire médical ni dossier identifiable dans un compte gratuit ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir l'offre", "<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>"],
                ["Assistant interrogeant les documents de la compagnie", "Réponses aux questions des collaborateurs sur les produits, les procédures et les barèmes, avec citation du passage source", "Une réponse sans référence au document ne s'utilise pas ; les conditions générales changent, l'index doit suivre", "<a href=\"/formations/rag-chatbot-documents\">RAG : chatbot sur vos documents internes</a>"],
                ["WhatsApp Business et son API", "Attestations, rappels d'échéance, déclarations de sinistre, suivi des dossiers", "Meta facture les messages à l'unité depuis le 1er juillet 2025 et, depuis le 1er octobre 2026, au-delà de 1 000 messages de service gratuits par mois et par numéro", "<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>"],
                ["Paiement mobile et agrégateurs", "Encaissement des primes par mobile money ou carte, reçus de transaction", "Le règlement de 2024 exige des moyens de paiement autorisés par la banque centrale et, le cas échéant, une option non numérique ; le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, KKiaPay et CinetPay</a> met les frais côte à côte", "<a href=\"/formations/integrations-api-no-code\">Intégrations API en no-code et low-code</a>"],
                ["Odoo ou Dolibarr", "CRM et facturation d'une agence générale ou d'un cabinet de courtage : prospects, rendez-vous, commissions", "Odoo Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; Dolibarr est libre et gratuit", "<a href=\"/formations/crm-pipeline\">CRM : pipeline commercial et reporting</a>"],
                ["Tableur", "Suivi des délais de sinistres, rapprochement des primes encaissées, contrôles avant arrêté", "Les calculs se font dans des formules visibles et verrouillées, jamais dans la réponse rédigée d'un assistant", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Outils d'automatisation (n8n, Make)", "Relances d'échéance, accusés de réception, alertes de délai, transfert des pièces vers le dossier", "n8n Cloud Starter à 20 € par mois en paiement annuel pour 2 500 exécutions, ou auto-hébergement pour garder les données chez l'assureur ; le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a> aide au choix", "<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>"],
                ["Tableaux de bord", "Primes, sinistralité, arriérés et délais par agence, par branche et par intermédiaire", "Un indicateur sans définition écrite se discute au lieu de se lire ; chaque chiffre renvoie à son extraction", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours pour l'assurance, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il à chaque poste d'une compagnie, d'une agence ou d'un cabinet ?",
            'legende' => "Chaque poste suit les demi-journées utiles à son travail, puis, si besoin, la formation du catalogue qui approfondit son outil principal.",
            'entetes' => ['Poste', "Ce qu'il doit savoir faire à la fin", 'Demi-journées du parcours type', 'Formation complémentaire'],
            'lignes'  => [
                ["Souscripteur", "Préparer un dossier avec l'outil, repérer ce qui manque, décider seul d'accepter ou de refuser un risque", "Jour 1, jour 3 après-midi", "<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>"],
                ["Gestionnaire de sinistres", "Instruire un dossier sans perdre un délai, rédiger une lettre claire, repérer un dossier atypique", "Jour 1 matin, jour 2", "<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>"],
                ["Chargé de clientèle et centre d'appels", "Répondre sur WhatsApp sans rien révéler d'un dossier, enregistrer une réclamation, passer la main au bon moment", "Jour 1 matin, jour 3 matin", "<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>"],
                ["Agent général et collaborateurs d'agence", "Tenir les échéances, émettre au bon moment, organiser le numéro de l'agence, protéger les données des assurés", "Jour 1, jour 3", "<a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a>"],
                ["Courtier et chargé de compte", "Comparer des contrats, documenter le conseil, préparer une note au client sans erreur de garantie", "Jour 1, jour 3 matin", "<a href=\"/formations/crm-pipeline\">CRM : pipeline commercial et reporting</a>"],
                ["Équipe fraude et contrôle interne", "Exploiter les alertes sans en faire des verdicts, documenter une vérification, tester un échantillon de dossiers", "Jour 1 matin, jour 2 après-midi, jour 3 après-midi", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Actuariat, tarification et données", "Questionner un modèle de fournisseur, lire un indicateur de portefeuille, expliquer une tarification", "Jour 1 matin, jour 3 après-midi", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
                ["Direction générale, conformité et informatique", "Décider des outils autorisés, des responsabilités, des partenariats techniques et des contrôles", "Jour 1 matin, jour 3 après-midi", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Le parcours répond-il aux obligations de formation qui pèsent déjà sur les assureurs et les intermédiaires ?",
            'paragraphes' => [
                "En partie seulement, et il faut le dire clairement. Dans la zone CIMA, l'article 508 du code soumet les personnes qui présentent des opérations d'assurance à des conditions de capacité professionnelle fixées par la Commission de contrôle pour chaque catégorie. Ces conditions relèvent des compagnies, des associations professionnelles et des écoles spécialisées, et ce parcours n'y prétend pas. En revanche, l'article 14 du règlement du 17 décembre 2024 demande aux entreprises d'assurance et de réassurance d'établir des programmes de formation à la sécurité de l'information pour tout le personnel et pour les administrateurs, afin de limiter l'erreur humaine, le vol, la fraude, les abus et les pertes.",
                "La troisième après-midi du parcours, consacrée aux fraudes qui visent les équipes, aux postes de travail et aux règles d'usage de l'IA, peut donc s'inscrire dans ce programme, à condition que la compagnie l'y rattache elle-même et le documente. Le formateur remet un programme détaillé, des feuilles de présence, une évaluation et une attestation nominative ; c'est l'entreprise qui décide de leur place dans son dispositif et qui en répond devant la Direction nationale des assurances ou la CRCA.",
                "Dans l'Union européenne, l'article 10 de la directive sur la distribution d'assurances fonde le contrôle des connaissances des intermédiaires et du personnel des compagnies sur au moins quinze heures de formation ou de développement professionnels par an, en tenant compte des produits vendus et de la fonction occupée. Chaque État fixe ce qui entre dans ce décompte. Un module sur l'usage des outils numériques n'y figure pas automatiquement : la question se pose à l'organisme ou à l'association qui tient le registre des formations, programme en main, avant la session. Aucune reconnaissance n'est annoncée ici.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour un siège, un réseau d'agences, un cabinet de courtage ou un intermédiaire seul ?",
            'legende' => "Les séances évitent les périodes d'inventaire et d'arrêté des comptes, les campagnes de renouvellement automobile et les semaines qui suivent un événement climatique, quand les déclarations de sinistres affluent.",
            'entetes' => ['Format', 'Organisation', 'Données utilisées', 'Quand le retenir'],
            'lignes'  => [
                ["Intra, au siège", "Six demi-journées par groupes de postes, direction technique et conformité associées à la préparation", "Dossiers fictifs construits avec vos procédures, captures de vos écrans de gestion", "Une compagnie qui veut une méthode commune avant de déployer un outil ou un robot"],
                ["Intra, réseau d'agences générales", "Une demi-journée en salle par ville, la suite à distance au rythme des agences", "Échéances, attestations et déclarations réelles, anonymisées", "Un réseau d'agents qui travaille surtout sur WhatsApp et sur tableur"],
                ["Inter, entre cabinets ou agences", "Deux à trois jours réunissant des intermédiaires de plusieurs structures", "Jeu de données entièrement fictif, aucun dossier d'assuré partagé", "Petites structures qui forment une ou deux personnes chacune"],
                ["À distance", "Séances de deux heures en visioconférence, avec partage d'écran et exercices sur téléphone", "Fichiers fictifs envoyés avant chaque séance", "Équipes réparties entre plusieurs pays de la zone CIMA, ou cabinet européen avec des correspondants en Afrique"],
                ["Hybride", "Première journée sur place, suite à distance sur six à huit semaines", "Indicateurs réels du service sinistres ou de l'agence, suivis d'une séance à l'autre", "Quand le diagnostic demande d'être sur place mais que l'activité ne peut pas s'arrêter"],
                ["Séance de direction", "Une demi-journée avec la direction générale, la direction technique, la conformité et l'informatique", "Inventaire des usages réalisé en amont", "Avant de signer avec un opérateur mobile, une fintech ou un éditeur d'IA"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation des équipes d'un assureur ou d'un intermédiaire ?",
            'intro'      => "Aucun montant n'est affiché : chaque proposition est chiffrée sur devis, une fois connus les postes, les branches pratiquées, le nombre d'agences et les outils en place. L'échange initial, le cadrage et le devis ne sont pas facturés. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences des logiciels de gestion, des assistants d'IA et les frais de messagerie de Meta restent payés par la compagnie ou le cabinet, directement aux éditeurs.",
            'items'      => [
                ['offre' => 'Cadrage', 'prix' => 'Gratuit', 'inclus' => ["Entretien avec la direction technique et la conformité", "Relevé des canaux, des partenaires et des outils en usage", "Proposition de parcours par poste et devis écrit"]],
                ['offre' => 'Parcours type', 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur des dossiers fictifs construits avec vos procédures", "Réponses types, tableau des délais et règles d'usage de l'IA rédigés en séance", "Évaluation sur un dossier fil rouge et attestation nominative"]],
                ['offre' => "Module pour un réseau d'agents ou de distributeurs", 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée sur l'émission, les échéances et WhatsApp", "Fiche réflexe d'une page par poste", "Version à distance pour les agences éloignées"]],
                ['offre' => 'Suivi', 'prix' => 'Sur devis', 'inclus' => ["Séance de retour à trois mois", "Relecture des réponses types et des règles", "Bilan des indicateurs retenus au départ"]],
            ],
            'variations' => [
                "Le nombre de participants, de groupes et d'agences à couvrir.",
                "Le nombre de branches traitées (automobile, santé, vie, IARD d'entreprise, micro-assurance).",
                "Le nombre de pays, donc de lois de protection des données à étudier.",
                "Le temps de construction des dossiers fictifs avec la direction technique.",
                "Les déplacements hors de Cotonou ou hors du Bénin, ou le choix de la distance.",
                "Le suivi retenu après la session.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation des équipes d'assurance ?",
            'paragraphes' => [
                "Dans la plupart des cas, la compagnie ou le cabinet règle la formation sur son propre budget. Selon le pays, un fonds public de formation continue peut prendre en charge une partie du coût, mais rien n'est jamais acquis d'avance et chaque fonds applique ses propres règles. Le FDFP en Côte d'Ivoire accepte les plans de formation des entreprises à jour de leurs taxes de formation et ne paie qu'après contrôle. Au Bénin, les statuts du FODEFCA, approuvés par le décret n° 2022-286, prévoient une participation de l'entreprise bénéficiaire de 10 à 30 % du coût. Au Sénégal, le 3FPT ouvre un guichet au personnel des entreprises.",
                "Pour un cabinet installé en France, les fonds publics ou mutualisés ne sont accessibles, depuis le 1er janvier 2022, qu'aux prestataires certifiés Qualiopi, selon France Compétences ; Richard SALANON n'a pas cette certification, et la session se règle donc sur les fonds propres du cabinet. Où que vous soyez, la demande se fait par écrit auprès du fonds, avec le programme et le devis, et les dates ne se fixent qu'une fois la réponse obtenue.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand une compagnie ou un intermédiaire équipe ses équipes de nouveaux outils ?",
            'intro' => "Elles tiennent rarement à la technologie. Elles tiennent à l'ordre des décisions, aux délais oubliés et aux personnes qu'on n'a pas associées.",
            'items' => [
                ['titre' => "Automatiser l'émission avant l'encaissement", 'texte' => "Un flux pensé pour aller vite envoie l'attestation dès la saisie de la proposition, et la compagnie se retrouve à couvrir des risques impayés. Le contrôle du paiement se place avant l'émission, dans l'outil lui-même, et non dans une consigne que l'on demande aux agents de respecter."],
                ['titre' => "Laisser le robot parler de garanties", 'texte' => "Un assuré qui demande si son sinistre est couvert attend un oui ou un non. Un robot qui répond oui engage la compagnie, comme le rappelle l'article 505 pour ses mandataires. Le premier robot donne des informations générales, enregistre et transmet ; la réponse sur une garantie vient d'une personne habilitée."],
                ['titre' => "Traiter le score de fraude comme un verdict", 'texte' => "Un dossier signalé par l'outil n'est pas un dossier frauduleux. Si les gestionnaires refusent ou retardent sur la seule foi du score, les assurés de bonne foi paient pour les autres et les délais légaux courent. Le score ouvre une vérification documentée, avec une date limite."],
                ['titre' => "Signer avec un opérateur mobile sans lire la clause des données", 'texte' => "Dans les partenariats de distribution par téléphone, le partenaire voit passer les souscriptions et les paiements. Le règlement de 2024 interdit qu'une clause limite l'accès de l'assureur à ces données et exige d'envoyer la convention aux autorités de supervision. La direction technique relit ce point avant la signature, pas après le premier litige."],
                ['titre' => "Former le siège et oublier le réseau", 'texte' => "Les agents généraux, les courtiers et les distributeurs de micro-assurance sont souvent les premiers à utiliser WhatsApp et les assistants d'IA, avec leurs propres téléphones. Le règlement de 2024 demande aux assureurs de veiller à ce que leurs intermédiaires appliquent les règles de sécurité et de vigilance : ils entrent dans le parcours, au moins pour un module court."],
                ['titre' => "Confondre la conversation et le dossier", 'texte' => "Une déclaration reçue sur WhatsApp qui n'est jamais enregistrée dans le système de gestion n'existe pas pour le registre des sinistres de l'article 415, ni pour le contrôle. Chaque message utile est rattaché à un numéro de dossier, et le téléphone n'est qu'un point d'entrée."],
                ['titre' => "Négliger la cybersécurité des postes", 'texte' => "Les compagnies détiennent des données de santé, des RIB et des rapports d'expertise : une cible de choix. L'<a href=\"/histoires/maersk-notpetya\">histoire de NotPetya</a> montre aussi qu'après une attaque, les assurés eux-mêmes ont dû discuter avec leurs assureurs des exclusions pour fait de guerre. Les gestes de base se travaillent avec tout le personnel, administrateurs compris."],
                ['titre' => "Ne rien mesurer", 'texte' => "Sans le délai moyen entre déclaration et offre, ni le nombre de réclamations en attente relevés avant la session, personne ne saura dire trois mois plus tard si les outils ont servi. Trois indicateurs suffisent, notés chaque mois par service ou par agence."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue se rattachent aux métiers de l'assurance ?",
            'legende' => "Formations du catalogue utiles aux compagnies, aux agences générales et aux cabinets de courtage. Chacune a sa page, son programme et ses formats.",
            'entetes' => ['Formation', "Pour qui dans l'assurance", "Ce qu'elle apporte au métier", 'Durée'],
            'lignes'  => [
                ["<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>", "Responsables souscription, sinistres et service client", "Décider étape par étape ce qui revient à une règle, à l'IA ou à une personne, et organiser le contrôle", "2 jours en 4 demi-journées, point d'étape en option"],
                ["<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>", "Tout collaborateur qui utilise un assistant d'IA", "Données personnelles et de santé, secret, biais, règlement européen sur l'IA", "1 jour de socle, ou 2 jours"],
                ["<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>", "Équipe digitale, service client, informatique", "Robot de premier niveau avec reprise humaine, modèles de messages, coûts de Meta", "2 jours, puis une séance de suivi"],
                ["<a href=\"/formations/data-literacy\">Décider avec les données</a>", "Directeurs techniques, responsables d'agence, comités de direction", "Lire une sinistralité, un taux de chute ou un délai moyen sans se tromper", "2 jours en 4 demi-journées, plus 2 h de suivi"],
                ["<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "Direction générale, conformité, contrôle interne, informatique", "Inventaire des usages, charte, rôles et revue périodique", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>", "Tout le personnel, agences comprises", "Hameçonnage, mots de passe, faux changement de RIB avant un règlement", "1 jour, plus une demi-journée pour les postes sensibles"],
                ["<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>", "Équipes fraude, audit interne, contrôle permanent", "Tests sur des populations entières de dossiers, traçabilité des vérifications", "3 jours en 6 demi-journées"],
                ["<a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a>", "Agents généraux, courtiers de proximité, distributeurs", "Numéro d'agence, étiquettes, réponses rapides, relances d'échéance", "Une demi-journée ou une journée"],
                ["<a href=\"/formations/rag-chatbot-documents\">RAG : chatbot sur vos documents internes</a>", "Direction technique, équipe digitale", "Un assistant qui répond à partir des conditions générales et des procédures, avec citations", "3 jours en 6 demi-journées, dont une journée technique facultative"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former les équipes d'un assureur ou d'un intermédiaire avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des professionnels de l'assurance : collaborateurs de compagnies, agents généraux, courtiers et distributeurs de micro-assurance. Il conçoit des assistants WhatsApp, des automatisations et des intégrations d'IA reliées aux logiciels de gestion, ce qui lui permet de montrer aux équipes, sur leurs propres écrans, ce qu'un robot ou un flux fait réellement d'une déclaration de sinistre ou d'une attestation. Avec " . $ans . " ans d'expérience et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il indique plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au total et des missions dans " . count((array) fait('pays_travailles')) . " pays, dont neuf États signataires du traité de la CIMA, ainsi que la France, la Belgique, la Suisse et le Canada. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il n'est ni assureur, ni intermédiaire inscrit, ni actuaire, ni certifié par un éditeur de logiciel d'assurance ou d'IA. Il enseigne l'usage des outils et les garde-fous qui l'accompagnent ; la souscription, l'appréciation des sinistres, la tarification et l'interprétation du Code des assurances de la CIMA ou des textes européens restent l'affaire des professionnels de la compagnie et de leurs autorités de contrôle. Les séances se tiennent en petits groupes, sur des dossiers fictifs construits avec vos procédures, et les supports sont remis dans un format modifiable. Aucun gain de délai n'est promis : on mesure avant et après.",
                "Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Le catalogue complet figure sur la page des <a href=\"/formations/\">formations</a> ; les formations voisines se trouvent dans les domaines <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a> et <a href=\"/formations/domaine/automatisation\">automatisation</a>. Quand le besoin dépasse la formation, par exemple construire le robot de déclaration de sinistre ou relier WhatsApp au logiciel de gestion, il relève des <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbots WhatsApp</a>, de l'<a href=\"/services/integration-whatsapp\">intégration WhatsApp</a> ou de l'<a href=\"/services/automatisation-ia\">automatisation avec l'IA</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former les équipes de votre compagnie, de votre agence ou de votre cabinet ?",
            'texte' => "Décrivez d'abord le trajet réel d'un contrat et d'un sinistre, avec les outils déjà utilisés ; placez le contrôle de la prime avant l'émission ; gardez chaque acceptation de risque, chaque refus de sinistre et chaque réponse sur une garantie entre des mains humaines ; ne laissez aucune donnée de santé partir vers un compte gratuit ; inscrivez chaque délai légal dans un tableau qui a un responsable ; et associez le réseau d'agents dès le départ.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former les équipes de votre compagnie, de votre agence ou de votre cabinet de courtage au numérique et à l'IA ?",
            'texte'  => "Indiquez le type de structure, les branches pratiquées, le nombre de personnes et d'agences, le pays et les tâches qui vous coûtent le plus de temps : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander un parcours pour l'assurance"],
        ],
    ],

    'faq' => [
        ['q' => "L'IA va-t-elle remplacer les gestionnaires de sinistres et les souscripteurs ?", 'r' => "Elle remplace une partie de la ressaisie, du classement et de la rédaction, pas le métier. Accepter un risque, apprécier une garantie, chiffrer une indemnité, refuser un dossier et répondre à un assuré mécontent restent des décisions humaines, que le Code des assurances de la CIMA et, en Europe, le règlement sur l'IA placent sous la responsabilité de l'assureur. Le temps gagné va au contrôle et à l'explication."],
        ['q' => "Un collaborateur peut-il coller un certificat médical ou un questionnaire de santé dans un assistant d'IA ?", 'r' => "Non, pas dans un compte gratuit ou personnel. Les données de santé sont interdites de traitement par principe, à l'article 394 de la loi béninoise n° 2017-20 comme à l'article 9 du RGPD, et les exceptions qui permettent de gérer un contrat ne couvrent pas un envoi à un service en ligne choisi par un salarié. Le parcours apprend à travailler sur des pièces fictives ou anonymisées."],
        ['q' => "Peut-on utiliser l'IA pour détecter la fraude ?", 'r' => "Oui, pour signaler des dossiers à vérifier : doublons, coordonnées bancaires partagées, documents incohérents. Non, pour refuser un sinistre à la place d'un gestionnaire. Le signal déclenche une vérification documentée et datée, l'assuré est entendu, et la décision revient à une personne habilitée, dans les délais du code."],
        ['q' => "Un robot WhatsApp peut-il recevoir les déclarations de sinistre ?", 'r' => "Il peut accuser réception, demander les pièces prévues par la garantie, attribuer un numéro et transmettre le dossier au gestionnaire. Il ne dit jamais si le sinistre est couvert. Chaque déclaration doit aussi entrer dans le registre des sinistres de la compagnie : la conversation n'est qu'un point d'entrée."],
        ['q' => "Que change le règlement CIMA de 2024 pour la vente par téléphone mobile ?", 'r' => "Il encadre la distribution et la gestion des contrats par voie numérique, notamment par téléphonie mobile et internet : partenariats sans exclusivité avec des prestataires techniques, accès de l'assureur aux données garanti, traçabilité pendant le contrat et dix ans après, reçu électronique pour chaque transaction, dispositif de réclamations accessible par plusieurs canaux. Les agents doivent savoir l'expliquer aux clients."],
        ['q' => "La micro-assurance demande-t-elle des outils différents ?", 'r' => "Elle demande surtout des outils plus simples et plus rapides. Le code de la CIMA veut un contrat rédigé dans un langage simple, qui peut être traduit dans la langue locale, et un règlement des demandes très court : acceptation ou rejet dans les sept jours, paiement dans les dix jours. Les réponses types, les relances et le suivi des délais sont donc au cœur du module."],
        ['q' => "Nous utilisons un score de tarification fourni par un éditeur européen : que faut-il savoir ?", 'r' => "Si le système évalue les risques ou tarifie des personnes en assurance vie ou maladie dans l'Union européenne, il est classé à haut risque par l'annexe III du règlement sur l'IA, avec des règles applicables à partir du 2 décembre 2027, et l'article 27 impose à l'assureur qui l'utilise une analyse d'impact sur les droits fondamentaux. Partout, l'équipe doit comprendre le modèle et pouvoir s'en écarter."],
        ['q' => "Le parcours concerne-t-il les agents généraux et les courtiers, ou seulement les compagnies ?", 'r' => "Les deux. Les intermédiaires sont souvent les premiers à utiliser WhatsApp et les assistants d'IA, et le règlement CIMA de 2024 demande aux assureurs de veiller à ce qu'ils appliquent les règles de sécurité et de vigilance. Une agence ou un cabinet peut suivre le parcours seul, ou un module court organisé par sa compagnie."],
        ['q' => "Ce parcours compte-t-il pour la formation continue des intermédiaires ?", 'r' => "Ce n'est pas au formateur de le décider. Dans l'Union européenne, la directive sur la distribution d'assurances fixe un minimum de quinze heures par an et chaque État définit ce qui entre dans le décompte ; dans la zone CIMA, la capacité professionnelle relève des conditions fixées par la Commission de contrôle. Le programme, les feuilles de présence et l'attestation permettent de poser la question à l'organisme compétent."],
        ['q' => "Richard SALANON travaille-t-il dans l'assurance ?", 'r' => "Non. Il est consultant en digitalisation et développeur, et il forme à l'usage de l'IA, de l'automatisation, de WhatsApp et des tableurs. Les questions de souscription, de sinistres, d'actuariat et de réglementation restent tranchées par les professionnels de la compagnie et par leurs autorités de contrôle."],
        ['q' => "Combien coûte le parcours ?", 'r' => "Il est chiffré sur devis, selon le nombre de personnes, d'agences, de branches et de pays, la préparation des dossiers fictifs, le lieu et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits ; le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "CIMA, règlement n° 01/CIMA/PCMA/CE/SG/2024 du 16 janvier 2024 portant sur la distribution et la gestion du contrat d'assurance par voie numérique/électronique (articles 1, 4, 5, 8, 9, 11, 12, 16, 17)", 'url' => 'https://cima-afrique.org/wp-content/uploads/2024/02/Reglement-01-24-Portant-sur-la-distribution-et-la-gestion-du-contrat-dassurance-par-voie-numerique-electronique.pdf', 'date' => '2026-10-05'],
        ['titre' => "CIMA, règlement n° 010/CIMA/PCMA/CE/SG/2024 du 17 décembre 2024 relatif à la sécurité et à la gouvernance des technologies de l'information et au plan de continuité d'activités (articles 3, 14, 15, 27 et 28)", 'url' => 'https://cima-afrique.org/wp-content/uploads/2024/12/Reglement-N%C2%B0010-24-Relatif-a-la-securite-et-a-la-gouvernance-des-technologies-de-linformation-e_compressed.pdf', 'date' => '2026-10-05'],
        ['titre' => "CIMA, règlement n° 0004/CIMA/PCMA/PCE/2021 modifiant et complétant les régimes du contrat d'assurance et d'indemnisation des victimes (articles 231 et 236)", 'url' => 'https://cima-afrique.org/wp-content/uploads/2023/04/Reglement-N%C2%B0004-21-Modifiant-et-completant-les-regime-du-contrat-dassurance-et-dindemnisation-des-victimes.pdf', 'date' => '2026-10-05'],
        ['titre' => "CIMA, règlement n° 0002/CIMA/PCMA/PCE/2025 du 10 juillet 2025 modifiant et complétant les régimes du contrat d'assurance (article 74)", 'url' => 'https://cima-afrique.org/wp-content/uploads/2025/07/Reglement-N%C2%B0002-25-Modifiant-et-Completant-les-regimes-du-contrat-dassurance.pdf', 'date' => '2026-10-05'],
        ['titre' => "CIMA, règlement n° 0002/CIMA/PCMA/CE/2026 du 3 juillet 2026 modifiant certaines dispositions du Code des assurances (sociétés de micro-assurance)", 'url' => 'https://cima-afrique.org/wp-content/uploads/2026/07/Reglement-N%C2%B0002-26-Modifiant-et-completant-certaines-dispositions-du-Code-des-Assurances.pdf', 'date' => '2026-10-05'],
        ['titre' => "CIMA, règlements du Conseil des ministres des assurances (liste par année, dont le règlement n° 001 du 2 mars 2021 sur la lutte contre le blanchiment)", 'url' => 'https://cima-afrique.org/reglements-du-conseil-des-ministres/', 'date' => '2026-10-05'],
        ['titre' => "CIMA, Code des assurances des États membres, édition 2019 consultable en ligne (articles 13, 18, 414, 415, 505, 508, 700, 701, 710 et 731)", 'url' => 'https://cima-afrique.org/wp-content/code-cima/fr/CODE%20CIMA%202019.html', 'date' => '2026-10-05'],
        ['titre' => "CIMA, présentation et historique de la Conférence (traité signé à Yaoundé le 10 juillet 1992)", 'url' => 'https://cima-afrique.org/presentation/', 'date' => '2026-10-05'],
        ['titre' => "Directive (UE) 2016/97 sur la distribution d'assurances, articles 10, 17 et 20 (Office des publications de l'Union européenne)", 'url' => 'https://publications.europa.eu/resource/celex/32016L0097', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : annexe III du règlement (UE) 2024/1689, point 5 c)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : article 27, analyse d'impact sur les droits fondamentaux (version consolidée au 27 juillet 2026)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-27', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, cadre réglementaire de l'IA : calendrier d'application (mise à jour du 3 août 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => "ACPR, règlement européen sur l'IA (AI Act) : rôle de l'ACPR et systèmes à haut risque du secteur financier", 'url' => 'https://acpr.banque-france.fr/fr/reglementation/focus-sur-la-reglementation/transverse/reglement-europeen-sur-lia-ai-act', 'date' => '2026-10-05'],
        ['titre' => "ACPR, recommandation 2024-R-02 du 2 juillet 2024 sur le traitement des réclamations", 'url' => 'https://acpr.banque-france.fr/fr/publications-et-statistiques/publications/recommandation-2024-r-02-du-2-juillet-2024-sur-le-traitement-des-reclamations', 'date' => '2026-10-05'],
        ['titre' => "EIOPA, Opinion on Artificial Intelligence governance and risk management (6 août 2025)", 'url' => 'https://www.eiopa.europa.eu/publications/opinion-artificial-intelligence-governance-and-risk-management_en', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre II (article 9)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 394)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "ALFA, la fraude à l'assurance : définition, chiffres clés de l'exercice 2025, sanctions", 'url' => 'https://www.alfa.asso.fr/fraude-a-lassurance/', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-processus-metier', 'ia-ethique-conformite', 'chatbot-whatsapp', 'data-literacy', 'gouvernance-ia', 'cybersecurite-employes'],
        'services'    => ['formation-en-entreprise', 'agents-ia-chatbot-whatsapp', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
