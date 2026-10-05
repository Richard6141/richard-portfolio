<?php
// ============================================================
// data/formations/securite-donnees-dirigeants.php · Fiche formation
// « Sécurité des données et sauvegardes pour dirigeants » (vague 1B, lot B,
// domaine cybersecurite-it). Angle propre : les décisions de direction
// (inventaire des données et des accès, sauvegardes 3-2-1 testées, comptes et
// départs, prestataires et contrats, assurance, plan de réponse à incident,
// notification des violations, budget proportionné). Sœurs non traitées :
// cybersecurite-employes (réflexes des salariés), cloud-hebergement (choix
// d'un hébergement), gestion-projet-agile, microsoft-365-google-workspace
// (réglages des suites), gouvernance-ia (charte IA). Faits externes relevés le
// 05/10/2026 : CISA (Data Backup Options, 2012), Cybermalveillance.gouv.fr
// (fiche sauvegardes du 14/09/2026), CNIL (notification, guide 2024), RGPD
// (articles 28 et 33), loi béninoise n° 2017-20 (articles 426, 427, 435 lus
// dans le PDF du SGG), APDP, IPDCP, ARTCI, CDP, Légifrance (article L12-10-1
// du code des assurances), directive NIS 2 sur EUR-Lex (articles 20, 21, 23),
// AMRAE (LUCY 2026), ANSSI (exercice de crise, MonAideCyber), avis de sanction
// de l'ICO (British Airways), BleepingComputer (Maersk), tarifs Backblaze,
// Wasabi, Veeam, restic. Richard SALANON n'est pas auditeur de sécurité certifié.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation sécurité des données et sauvegardes pour dirigeants : décider ce qui se sauvegarde, qui accède à quoi, ce que l'on exige des prestataires, et préparer la réponse à un incident",
    'title'   => "Sécurité des données pour dirigeants | Richard SALANON",
    'meta'    => "Formation pour dirigeants : inventaire des données, sauvegardes testées, accès, prestataires, assurance, plan d'incident et notification. Sur devis.",
    'en_bref' => "Cette formation s'adresse aux personnes qui signent et qui arbitrent : gérants, associés, directeurs administratifs et financiers, responsables d'ONG ou d'école, accompagnés si possible de leur référent informatique. En quatre demi-journées, elle les conduit à prendre par écrit les décisions qui protègent les données de l'organisation : ce qui se sauvegarde et comment on le restaure, qui détient quels accès, ce que l'on exige des prestataires, quelle assurance souscrire et qui fait quoi le jour d'un incident. Elle se tient dans vos locaux, à distance, en formule hybride ou en session inter-entreprises, et se conclut par un point d'étape. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'cybersecurite-it',
    'forte'   => false,
    'duree'   => "Deux jours en quatre demi-journées, puis un point d'étape de deux heures à distance",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : savoir ce que l'organisation possède, où cela se trouve et qui en détient les clés",
            'duree'  => '3 h 30',
            'points' => [
                "Ouverture à huis clos : ce qui inquiète la direction, les incidents déjà vécus, même mineurs, et ce que chacun croit savoir des sauvegardes.",
                "Dresser la carte des données : fichiers clients, comptabilité, paie, dossiers d'élèves ou de patients, contrats, base de l'ERP, messagerie, pages de réseaux sociaux.",
                "Classer chaque ensemble en trois niveaux : vital pour continuer à travailler, gênant à perdre, reconstituable.",
                "Inventorier les accès qui engagent l'entreprise : nom de domaine, hébergement, banque en ligne, compte marchand Mobile Money, ERP, comptes administrateurs, pages publiques.",
                "Pour chaque accès, trois questions : à quel nom est-il ouvert, qui peut s'y connecter aujourd'hui, et qui le récupère si cette personne disparaît demain ?",
                "Exercice : remplir le registre des données et des accès de l'organisation, avec les trous signalés en rouge plutôt que devinés.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : décider des sauvegardes et faire la preuve qu'elles se restaurent",
            'duree'  => '3 h 30',
            'points' => [
                "Fixer, ensemble par ensemble, la perte acceptable (combien d'heures ou de jours de saisie peut-on refaire ?) et la durée d'arrêt supportable.",
                "La règle 3-2-1 en langage de direction : trois copies, deux types de supports, une copie hors des locaux, dont une coupée du réseau.",
                "Ce que couvrent vraiment un disque externe, un NAS, une synchronisation en ligne et un service de sauvegarde, et pourquoi une synchronisation n'est pas une sauvegarde.",
                "Durée de conservation, chiffrement des copies, garde des clés de déchiffrement, sauvegarde des logiciels et des licences nécessaires pour relire les données.",
                "Lire un rapport de sauvegarde transmis par le prestataire : ce qu'il prouve, ce qu'il ne prouve pas, et la question à poser chaque mois.",
                "Exercice : rédiger la politique de sauvegarde d'une page et fixer la date du premier test de restauration complète, avec son responsable.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : accès, départs, prestataires, contrats et assurance",
            'duree'  => '3 h 30',
            'points' => [
                "Le principe du moindre droit traduit en décisions : qui valide un accès, qui le revoit, à quel rythme, et qui garde les comptes d'urgence.",
                "Le départ d'un salarié ou d'un associé vu par la direction : la liste des accès hors messagerie qui restent ouverts, et la personne qui signe la clôture.",
                "Les comptes d'un ancien prestataire : récupérer le nom de domaine, l'hébergement et les identifiants administrateurs sans conflit.",
                "Les clauses à exiger d'un prestataire qui touche aux données : instructions écrites, sauvegardes, délai d'alerte en cas de violation, restitution des accès en fin de contrat.",
                "L'assurance cyber : ce que demande le questionnaire de souscription, les exclusions à lire, et la condition de plainte sous 72 heures en France.",
                "Exercice : relire un contrat de maintenance réel de l'organisation et noter les engagements manquants à négocier.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : le plan de réponse à incident, la notification et le budget",
            'duree'  => '3 h 30',
            'points' => [
                "Simulation sur table : un lundi à 8 heures, les fichiers du serveur sont chiffrés et une demande de rançon s'affiche. Qui décide quoi, heure par heure ?",
                "La cellule de crise d'une PME : trois à cinq personnes, un numéro de secours hors de la messagerie, un cahier de bord tenu dès la première minute.",
                "Notifier une violation de données : CNIL sous 72 heures en Europe, Autorité de protection sans délai au Bénin, interlocuteurs des autres pays des participants.",
                "Prévenir les personnes concernées, la banque, l'assureur, les clients et, le cas échéant, déposer plainte, sans contradiction entre les messages.",
                "Bâtir le budget de sécurité de l'année, proportionné à la taille et aux risques : ce qui se finance d'abord, ce qui peut attendre.",
                "Exercice : écrire la fiche réflexe de la direction, une page, et le plan d'action sur douze mois avec un nom et une date par ligne.",
            ],
        ],
        [
            'titre'  => "Quatre à six semaines plus tard : point d'étape à distance",
            'duree'  => '2 h',
            'points' => [
                "Compte rendu du test de restauration : durée réelle, données retrouvées, difficultés rencontrées.",
                "Revue des accès faite depuis la session : comptes fermés, comptes repris, comptes encore orphelins.",
                "Réponses des prestataires aux clauses demandées, et avenants signés ou en cours.",
                "Mise à jour du registre, de la fiche réflexe et du plan d'action sur douze mois.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "Quatre demi-journées sur deux jours, puis un point d'étape de deux heures"],
        ['l' => 'Public', 'v' => "Gérants, associés, directeurs administratifs et financiers, responsables d'ONG ou d'école"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Quelles décisions la direction saura-t-elle prendre à la fin de la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Dans une petite ou moyenne structure, la sécurité des données dépend moins des outils que de décisions que personne n'a prises. Qui a décidé que la clé USB du vendredi suffisait ? Qui a accepté que le nom de domaine reste au nom du premier prestataire ? Qui sait ce qu'il faudrait faire si la base de l'ERP devenait illisible un lundi matin ? Ces questions n'ont pas de réponse technique. Elles reviennent à celui ou celle qui engage l'organisation, et cette formation leur donne la méthode, le vocabulaire et le temps de les trancher.",
                "À la fin des deux jours, la direction repart avec huit décisions écrites : le registre des données et des accès ; la perte de données et la durée d'arrêt qu'elle accepte pour chaque ensemble ; la politique de sauvegarde d'une page ; la date et le responsable du premier test de restauration ; la règle d'attribution, de revue et de retrait des accès ; la liste des clauses à obtenir des prestataires ; la fiche réflexe en cas d'incident, notification comprise ; et un plan d'action sur douze mois, chiffré et proportionné.",
                "La formation ne traite pas des gestes des salariés devant un faux message, ni de leurs mots de passe : c'est l'objet de la <a href=\"/formations/cybersecurite-employes\">formation cybersécurité pour les employés</a>, qui la complète bien. Les réglages détaillés d'une suite bureautique en ligne relèvent de la formation consacrée à Microsoft 365 et Google Workspace, et le choix d'un hébergeur ou d'un service en nuage de la formation sur le cloud et l'hébergement. Les règles d'usage de l'intelligence artificielle ont leur propre formation, <a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>.",
                "Elle n'est pas non plus un audit. Personne n'examine vos serveurs pendant la session et aucune attestation de conformité n'est délivrée. Ce qui y est appris permet de commander, de suivre et de contrôler le travail des techniciens, internes ou externes. La mise en œuvre des sauvegardes, la reprise des comptes et la surveillance des outils relèvent d'une prestation de <a href=\"/services/maintenance-support\">maintenance et de support</a> ; l'examen d'un existant avant un projet, d'un <a href=\"/services/audit-etude-de-projet\">audit et d'une étude de projet</a>.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui doit participer, avec quel niveau, et quels documents apporter ?",
            'intro' => "Aucun prérequis technique n'est demandé. Il faut en revanche connaître les outils et les prestataires de l'organisation, et avoir le pouvoir de décider, ou d'y associer celui qui l'a.",
            'items' => [
                ['titre' => "Le gérant, le directeur général ou l'associé qui signe", 'texte' => "C'est lui qui arbitre entre le coût d'une mesure et le risque qu'elle couvre, qui signe les contrats et qui parlera aux clients le jour d'un incident. Sans lui dans la salle, les décisions restent des propositions."],
                ['titre' => "Le directeur administratif et financier", 'texte' => "Il tient la paie, la comptabilité, la relation avec la banque et souvent les contrats d'assurance. Il voit aussi passer les factures des prestataires, ce qui en fait le meilleur connaisseur des services réellement payés."],
                ['titre' => "Le responsable d'ONG, d'école ou d'établissement de santé", 'texte' => "Il détient des données sensibles sur des bénéficiaires, des élèves ou des patients, rend des comptes à un conseil ou à un bailleur, et dépend souvent d'un prestataire unique pour toute son informatique."],
                ['titre' => "Le référent informatique, invité de préférence", 'texte' => "Salarié chargé des postes, prestataire de maintenance ou associé à l'aise avec la technique : il apporte les faits, mais ce n'est pas lui qui décide. Sa présence évite que la direction tranche à l'aveugle, ou qu'elle laisse tout trancher à sa place."],
                ['titre' => "Le niveau attendu", 'texte' => "Savoir dire quels logiciels l'organisation utilise et qui intervient dessus suffit. Les notions techniques, comme la différence entre une synchronisation et une sauvegarde, sont expliquées au moment où une décision en dépend."],
                ['titre' => "Les documents à préparer", 'texte' => "La liste des logiciels et services en ligne, même incomplète ; ce que l'on sait des sauvegardes actuelles ; les noms et contrats des prestataires ; les contrats d'assurance ; et, s'il y en a eu, le récit d'un incident passé. Ces pièces restent dans la salle et ne sont jamais emportées."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices la direction fait-elle sur ses propres documents ?",
            'items' => [
                ['titre' => "Le registre des données et des accès", 'duree' => '60 minutes', 'texte' => "Sur un modèle de tableur remis en séance, chaque ensemble de données reçoit un emplacement, un responsable, un niveau d'importance ; chaque accès critique reçoit un titulaire, un suppléant et la date de sa dernière vérification. Les cases vides sont la vraie production de l'exercice : elles deviennent les premières lignes du plan d'action."],
                ['titre' => "La question des cinq jours", 'duree' => '30 minutes', 'texte' => "Le formateur pose la même question pour chaque ensemble : si tout ce qui a été saisi depuis cinq jours disparaissait, que faudrait-il refaire, avec quels documents, et combien cela coûterait-il ? Les réponses fixent la fréquence de sauvegarde mieux que n'importe quelle recommandation générale."],
                ['titre' => "La lecture du rapport de sauvegarde", 'duree' => '30 minutes', 'texte' => "Le référent ou le prestataire affiche le dernier rapport réel, quand il existe. La direction apprend à y lire la date de la dernière copie réussie, ce qui est inclus, ce qui ne l'est pas, et l'absence fréquente de toute trace d'une restauration testée."],
                ['titre' => "Le contrat relu ligne à ligne", 'duree' => '45 minutes', 'texte' => "Un contrat de maintenance, d'hébergement ou d'ERP de l'organisation est relu avec une grille : qui sauvegarde, à quelle fréquence, où, en combien de temps la restauration est garantie, qui prévient qui en cas de violation, que devient l'accès en fin de contrat. Les manques sont notés pour un avenant."],
                ['titre' => "La simulation du lundi matin", 'duree' => '75 minutes', 'texte' => "Un scénario de rançongiciel est déroulé par séquences de quinze minutes, avec des événements imprévus : le prestataire ne répond pas, un client appelle, un journaliste aussi. Chacun joue son propre rôle. Le cahier de bord tenu pendant l'exercice montre ce qui manquait : un numéro, une décision, une copie."],
                ['titre' => "Le plan sur douze mois", 'duree' => '45 minutes', 'texte' => "Les manques relevés depuis le premier matin sont classés par gravité et par coût. Chaque ligne reçoit un responsable, une date et un ordre de grandeur budgétaire, issu des tarifs publics des éditeurs quand ils existent. Le plan est validé en séance par la personne qui signe."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que faut-il inscrire au registre des données et des accès, et qui tranche chaque question ?",
            'legende' => "Contenu type du registre construit le premier matin. Chaque organisation l'adapte à ses activités ; l'important est qu'une personne nommée puisse répondre à chaque ligne sans chercher.",
            'entetes' => ['Élément', 'Exemples', 'Question posée à la direction', 'Qui tranche'],
            'lignes'  => [
                ['Données vitales', "Base de l'ERP, comptabilité, paie, dossiers de patients ou d'élèves", "Combien de jours de saisie pouvons-nous perdre au maximum ?", "La direction, sur avis du responsable de chaque service"],
                ['Données gênantes à perdre', "Archives de devis, historique des échanges, photos de produits", "Faut-il les sauvegarder au même rythme que les données vitales ?", "Le responsable du service concerné"],
                ["Nom de domaine et messagerie", "Le domaine du site et des adresses, son registraire, sa date de renouvellement", "Est-il au nom de l'organisation, et qui reçoit les avis d'expiration ?", "La direction, qui doit en être titulaire"],
                ["Comptes financiers en ligne", "Banque en ligne, compte marchand Mobile Money, passerelle de paiement du site", "Qui peut ordonner un paiement, et qui est prévenu d'un changement de bénéficiaire ?", "La direction et le directeur financier"],
                ["Comptes d'administration", "ERP, hébergement, suite bureautique, sauvegardes, réseau", "Combien de personnes en détiennent, et existe-t-il un accès de secours sous scellé ?", "La direction, sur proposition du référent"],
                ["Pages et comptes publics", "Page Facebook, compte WhatsApp Business, fiche Google, chaîne vidéo", "Si l'administrateur part fâché, pouvons-nous reprendre la main ?", "La direction et le responsable de la communication"],
                ["Prestataires ayant un accès", "Maintenance, développeur, cabinet comptable, éditeur de l'ERP", "Que peuvent-ils voir, depuis où, et avec quelle protection de connexion ?", "La direction, contrat à l'appui"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que doit décider la direction en matière de sauvegarde, et pourquoi la règle 3-2-1 ne suffit-elle pas seule ?",
            'paragraphes' => [
                "La règle la plus citée tient en trois chiffres. Le guide « Data Backup Options » publié en 2012 par l'US-CERT, aujourd'hui rattaché à la CISA américaine, la formule ainsi : garder trois copies de tout fichier important, l'original et deux sauvegardes ; sur deux types de supports différents ; dont une conservée hors des locaux. Elle protège contre la panne d'un disque, le vol d'un ordinateur, l'incendie ou l'inondation du bureau. Elle a l'avantage d'être vérifiable par un non-spécialiste : il suffit de demander où se trouvent les trois copies.",
                "Elle ne dit pourtant rien de deux risques qui dominent aujourd'hui. Le premier est le rançongiciel, qui chiffre tout ce qu'il atteint par le réseau, y compris la sauvegarde restée branchée ou synchronisée. D'où la recommandation de Cybermalveillance.gouv.fr, dans sa fiche sur les sauvegardes mise à jour le 14 septembre 2026, de déconnecter le support après usage. La formation y ajoute une exigence de direction : au moins une copie hors ligne ou non modifiable, et la preuve écrite qu'elle existe.",
                "Le second risque est la sauvegarde qui ne se relit pas. Une copie chiffrée dont personne ne retrouve la clé, une base de données sauvegardée sans le logiciel capable de l'ouvrir, une copie incomplète depuis six mois sans que personne ne lise les alertes : ces cas sont fréquents. La même fiche recommande d'identifier tous les appareils qui contiennent des données, de tester ses sauvegardes et de sauvegarder aussi les logiciels indispensables à l'exploitation des données. La direction n'exécute aucune de ces tâches, mais elle en fixe la fréquence et en exige le compte rendu.",
                "Reste la question que seule la direction peut trancher : combien de travail l'organisation accepte-t-elle de perdre, et pendant combien de temps peut-elle s'arrêter ? Une boutique qui saisit ses ventes à la main le soir peut tolérer une copie quotidienne ; un cabinet qui produit des actes toute la journée, non. La réponse fixe la fréquence des copies, le type de solution et donc le budget. Sans elle, le prestataire choisit à votre place, souvent au plus simple.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment traduire la perte acceptable en règles de sauvegarde ?",
            'legende' => "Grille de décision utilisée pendant l'après-midi du premier jour. Les valeurs sont des points de départ à discuter avec le référent ou le prestataire, pas des normes.",
            'entetes' => ["Perte acceptable décidée", "Fréquence de copie", "Copie isolée du réseau", "Test de restauration", "Situation typique"],
            'lignes'  => [
                ["Une semaine", "Hebdomadaire, plus une copie après chaque clôture importante", "Disque externe déconnecté, conservé hors du bureau", "Deux fois par an, sur quelques fichiers", "Archives, documentation, site vitrine peu modifié"],
                ["Un jour", "Quotidienne, la nuit", "Copie hors ligne hebdomadaire, ou stockage en ligne non modifiable", "Chaque trimestre, sur un dossier complet", "Commerce, école, association, comptabilité saisie en fin de journée"],
                ["Quelques heures", "Plusieurs fois par jour, ou en continu sur la base de données", "Copie non modifiable chez un second fournisseur, plus une copie hors ligne", "Chaque trimestre, restauration complète sur une machine de test", "ERP partagé, cabinet, clinique, vente en ligne"],
                ["Quasiment rien", "Réplication continue et sauvegardes multiples", "Plusieurs copies isolées, dont une hors ligne", "Exercice de reprise annuel, en conditions réelles", "Activités où l'arrêt coûte plus que la protection ; rarement le cas d'une petite structure"],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Quelles questions poser à votre prestataire sur les sauvegardes, avant le prochain incident ?",
            'items' => [
                "Quels ensembles de données sont sauvegardés, et lesquels ne le sont pas, y compris les postes de travail et les services en ligne ?",
                "À quelle fréquence, et à quelle heure se termine la dernière copie de la journée ?",
                "Où se trouvent les trois copies, et laquelle est hors ligne ou non modifiable ?",
                "Combien de temps les copies sont-elles conservées, et peut-on revenir à l'état d'il y a un mois ?",
                "Qui détient la clé de déchiffrement, et où est rangée la copie de cette clé ?",
                "Quand a eu lieu la dernière restauration complète, combien de temps a-t-elle pris, et où en est le compte rendu ?",
                "Qui reçoit les alertes d'échec, et sous quel délai sont-elles traitées ?",
                "Si votre entreprise cessait son activité demain, comment récupérerions-nous nos copies ?",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comptes, droits et départs : qu'est-ce qui revient à la direction plutôt qu'au technicien ?",
            'paragraphes' => [
                "Le technicien sait créer et fermer un compte. Il ne peut pas décider seul qui doit voir les salaires, qui peut valider un paiement ou qui garde l'accès au nom de domaine. Ces choix relèvent de l'organisation du travail et de la confiance, donc de la direction. La formation les ramène à trois règles écrites : chaque accès a un titulaire nommé et un suppléant ; chaque droit est accordé par un responsable désigné, pour un besoin ; et la liste complète est revue à date fixe, au moins une fois par an et à chaque changement de poste.",
                "Le départ d'un salarié est le moment où ces règles se vérifient. La fermeture de la messagerie et des fichiers est un geste technique bien documenté par les éditeurs ; la direction s'intéresse à tout le reste. Le code de la caisse, le compte marchand Mobile Money, l'accès au portail des impôts ou de la sécurité sociale, la page Facebook ouverte avec un compte personnel, le groupe WhatsApp des clients, les identifiants de la banque en ligne : aucun outil ne les ferme automatiquement. La formation produit la liste propre à votre organisation, signée à chaque départ par le responsable du service.",
                "Le cas le plus délicat est celui d'un associé qui s'en va, ou d'un prestataire avec lequel la relation se tend. Le nom de domaine enregistré à son nom, l'hébergement payé avec sa carte, le compte administrateur de l'ERP dont il est le seul détenteur deviennent alors des moyens de pression. La formation montre comment les reprendre à froid, avant le conflit : transfert du domaine au nom de l'organisation, second administrateur nommé, coordonnées de facturation mises à jour, accès de secours conservé sous enveloppe scellée chez la direction.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que faut-il exiger d'un prestataire qui touche à vos données ?",
            'legende' => "Clauses à vérifier dans un contrat de maintenance, d'hébergement, de développement ou d'ERP. Les références aux textes s'appuient sur le RGPD (articles 28 et 33), lu sur le site de la CNIL, et sur la loi béninoise n° 2017-20 (articles 426 et 427), lue dans le PDF publié par le Secrétariat général du Gouvernement, le 5 octobre 2026.",
            'entetes' => ['Sujet', 'Ce que dit le texte', 'Clause à obtenir', 'Signal d\'alerte'],
            'lignes'  => [
                ["Instructions", "RGPD, article 28 : le sous-traitant ne traite les données que sur instruction documentée du responsable du traitement", "Liste écrite de ce que le prestataire peut faire sur les données, et de ce qui lui est interdit", "« Nous gérons tout », sans aucun document"],
                ["Contrat écrit", "Loi n° 2017-20, article 426 : le choix du sous-traitant et le contrat relèvent de la loi, et les éléments relatifs à la protection des données sont consignés par écrit", "Annexe sur la protection des données jointe au contrat principal", "Accord passé par téléphone ou par messages"],
                ["Alerte en cas de violation", "RGPD, article 33, et loi n° 2017-20, article 427 : le sous-traitant prévient le responsable du traitement dans les meilleurs délais, ou sans délai", "Délai d'alerte chiffré en heures, et nom de la personne à prévenir de part et d'autre", "Aucune mention, ou « dans un délai raisonnable »"],
                ["Sauvegardes", "Aucun texte ne fixe de fréquence : c'est à vous de la décider", "Fréquence, lieu des copies, durée de conservation, délai garanti de restauration, test annuel avec compte rendu", "« Sauvegardes incluses », sans autre précision"],
                ["Connexions du prestataire", "L'ICO a sanctionné British Airways en 2020 pour un accès de prestataire protégé par un simple mot de passe", "Double authentification obligatoire pour tout accès à distance, comptes nominatifs, journal des connexions disponible", "Un compte unique partagé par toute l'équipe du prestataire"],
                ["Fin de contrat", "Le RGPD prévoit le sort des données à la fin de la prestation (article 28)", "Restitution des données, des accès et des codes sources dans un format lisible, puis suppression attestée", "Réversibilité payée au prix fort, ou non prévue"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Faut-il souscrire une assurance cyber, et que faut-il savoir avant de signer ?",
            'paragraphes' => [
                "L'assurance ne remplace aucune des décisions précédentes : elle paie une partie des conséquences quand elles ont été prises. Les questionnaires de souscription demandent d'ailleurs, presque toujours, si les sauvegardes sont isolées et testées, si la double authentification protège les accès à distance et si un plan de réponse existe. Une organisation qui a suivi la formation y répond sans mentir ; une organisation qui coche « oui » par commodité prend le risque d'un refus d'indemnisation le jour où l'assureur vérifie.",
                "En France, une condition légale s'ajoute. L'article L12-10-1 du code des assurances, créé par la loi n° 2023-22 du 24 janvier 2023 et en vigueur depuis le 24 avril 2023 selon Légifrance, subordonne l'indemnisation des pertes causées par une cyberattaque au dépôt d'une plainte au plus tard soixante-douze heures après la connaissance de l'atteinte. La règle vaut pour les personnes morales et pour les personnes physiques dans leur activité professionnelle. Le dépôt de plainte figure donc dans la fiche réflexe de la direction, avec le nom de la personne qui s'en charge.",
                "Le marché a changé récemment. L'étude LUCY 2026 de l'AMRAE, l'association des professionnels du risque et des assurances, fondée sur plus de 20 000 contrats et 1 250 sinistres, observe pour 2025 une concurrence plus vive entre assureurs, une baisse significative des taux de prime et un assouplissement des conditions de couverture, qui ouvrent l'assurance à davantage d'entreprises de taille moyenne. L'étude précise que son panel est moins précis pour les petites entreprises. En Afrique de l'Ouest, l'offre se vérifie assureur par assureur : la formation apprend à lire les garanties, pas à choisir un contrat.",
                "Quatre points méritent une lecture attentive : les exclusions, notamment les actes de guerre et les défauts de mise à jour ; la franchise et le plafond, comparés au coût d'une semaine d'arrêt ; les services inclus, comme une assistance technique ou juridique joignable de nuit ; et les obligations de déclaration, avec leurs délais. Richard SALANON ne vend aucune assurance et ne perçoit aucune commission : la session sert à préparer les questions à poser à votre courtier ou à votre assureur.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Que faire, et dans quel ordre, pendant les 72 premières heures d'un incident ?",
            'items' => [
                ['titre' => "Constater et ouvrir le cahier de bord", 'duree' => 'Heure 0', 'texte' => "La personne qui reçoit l'alerte prévient la direction par le numéro de secours, pas par une messagerie peut-être compromise. On note l'heure de découverte : tous les délais légaux partent de ce moment. Le cahier de bord, papier ou fichier hors du réseau, consigne chaque décision et chaque appel."],
                ['titre' => "Contenir sans effacer", 'duree' => 'Première heure', 'texte' => "Le référent ou le prestataire isole les machines touchées du réseau, sans les éteindre ni les réinstaller, pour préserver les traces. Les sauvegardes hors ligne restent débranchées. Les accès à distance des prestataires sont suspendus. Personne ne paie de rançon dans l'urgence."],
                ['titre' => "Réunir la cellule de crise", 'duree' => 'Dans les quatre heures', 'texte' => "Trois à cinq personnes : la direction, le référent informatique, le responsable des données, la personne chargée de la communication. Elles qualifient l'incident : quelles données, combien de personnes, quels services arrêtés, quel risque pour les personnes concernées."],
                ['titre' => "Prévenir l'assureur, la banque et déposer plainte", 'duree' => 'Dans les 24 heures', 'texte' => "L'assureur est prévenu selon les délais du contrat ; la banque si des paiements sont en jeu. En France, la plainte doit être déposée dans les 72 heures pour préserver l'indemnisation. Pour une entité soumise à la directive NIS 2, l'alerte précoce au CSIRT ou à l'autorité est due dans les 24 heures."],
                ['titre' => "Notifier l'autorité de protection des données", 'duree' => 'Avant 72 heures', 'texte' => "Si des données personnelles sont touchées : la CNIL dans les meilleurs délais et si possible sous 72 heures, au besoin en plusieurs temps ; au Bénin, l'APDP sans délai. Les personnes concernées sont informées quand le risque est élevé, avec un message validé par la cellule."],
                ['titre' => "Restaurer et documenter", 'duree' => 'Jours suivants', 'texte' => "La reprise suit l'ordre de priorité fixé dans le registre, à partir de copies saines. Chaque violation est documentée en interne, même sans notification. Un mois plus tard, la cellule relit le cahier de bord et met à jour la fiche réflexe."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "À qui notifier une violation de données, et dans quel délai, selon le pays ?",
            'legende' => "Règles relevées le 5 octobre 2026 sur les textes et les sites officiels cités en sources. Elles évoluent : chaque session vérifie le texte en vigueur dans les pays des participants, et un juriste reste le bon interlocuteur pour un cas réel.",
            'entetes' => ['Pays ou cadre', 'Autorité', 'Ce que prévoit le texte', 'Ce que la direction prépare'],
            'lignes'  => [
                ["Bénin", "Autorité de protection des données personnelles (APDP)", "Loi n° 2017-20, article 427 : notification sans délai à l'Autorité et à la personne concernée de toute rupture de sécurité ayant affecté ses données ; le sous-traitant prévient le responsable sans délai", "Un modèle de notification reprenant les quatre éléments exigés par l'article 427"],
                ["France et Union européenne", "CNIL en France, autorité nationale ailleurs", "RGPD, article 33 : notification dans les meilleurs délais et si possible 72 heures au plus tard, en plusieurs temps si nécessaire ; toute violation se documente en interne", "Le registre interne des violations et le formulaire en ligne repéré à l'avance"],
                ["Entités soumises à NIS 2", "CSIRT ou autorité compétente désignés par l'État", "Directive (UE) 2022/2555, article 23 : alerte précoce sous 24 heures, notification sous 72 heures, rapport final un mois plus tard pour un incident important", "Vérifier si l'organisation entre dans le champ de la directive, selon son secteur et sa taille"],
                ["Togo", "Instance de protection des données à caractère personnel (IPDCP)", "Autorité administrative indépendante créée par la loi n° 2019-014 relative à la protection des données à caractère personnel", "Le délai et la forme se vérifient auprès de l'IPDCP au moment de la session"],
                ["Côte d'Ivoire", "ARTCI, en sa qualité d'Autorité de protection", "Loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel ; l'Autorité met en place un fichier national des correspondants à la protection des données", "Désigner un correspondant et vérifier avec lui les formalités applicables"],
                ["Sénégal", "Commission de protection des données personnelles (CDP)", "La CDP propose sur son site un formulaire pour signaler une violation de données", "Repérer le formulaire et la personne habilitée à le remplir"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que montrent Maersk et British Airways sur les décisions de direction ?",
            'paragraphes' => [
                "Chez <a href=\"/histoires/british-airways-piratage\">British Airways</a>, la règle existait. L'avis de sanction de l'ICO, l'autorité britannique de protection des données, daté du 16 octobre 2020, cite la politique de contrôle d'accès au réseau de la compagnie, datée du 7 octobre 2017 : l'authentification à plusieurs facteurs devait protéger tout accès distant, y compris celui des prestataires. Elle n'était pas appliquée au compte d'un employé de Swissport par lequel l'attaquant est entré en 2018. Une règle écrite que personne ne contrôle ne protège rien : la formation insiste sur la vérification, pas seulement sur la rédaction.",
                "Le même avis montre ce qu'une direction préparée gagne. Alertée par un tiers le 5 septembre 2018, la compagnie a prévenu l'ICO, les banques, les réseaux de cartes et ses clients dès le lendemain, et l'ICO note qu'elle a agi promptement en notifiant l'attaque. Les données d'environ 429 612 personnes ont été touchées, et l'amende finale s'est élevée à 20 millions de livres, contre 183,39 millions envisagés en 2019. Savoir qui notifie, avec quel message, fait partie de ce que la session met en place.",
                "Chez <a href=\"/histoires/maersk-notpetya\">Maersk</a>, la leçon porte sur la reprise. Lors du Forum de Davos, rapporte BleepingComputer le 25 janvier 2018, le président du groupe, Jim Hagemann Snabe, a expliqué qu'il avait fallu installer 4 000 nouveaux serveurs, 45 000 ordinateurs et 2 500 applications en dix jours après l'attaque NotPetya de juin 2017, en traitant à la main environ 80 % du volume habituel. Une petite structure n'a ni ces moyens ni ces équipes. Elle a d'autant plus besoin de savoir, avant l'incident, ce qu'elle restaurera en premier et à partir de quelle copie.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel budget de sécurité est proportionné pour une petite ou moyenne organisation ?",
            'paragraphes' => [
                "Les textes eux-mêmes parlent de proportion. La loi béninoise n° 2017-20, à son article 426, demande un niveau de sécurité approprié compte tenu de l'état de l'art, des coûts de mise en œuvre, de la nature des données et des risques. La directive européenne NIS 2, à son article 21, demande de tenir compte de l'exposition de l'entité aux risques, de sa taille et de la probabilité et de la gravité des incidents. Personne n'attend d'une école de deux cents élèves les moyens d'une banque ; on attend d'elle des choix réfléchis et documentés.",
                "La formation propose un ordre de financement plutôt qu'un montant. D'abord ce qui ne coûte presque rien et protège beaucoup : la reprise des accès critiques au nom de l'organisation, une copie hors ligne des données vitales, un test de restauration, une fiche réflexe. Ensuite ce qui coûte un abonnement modeste : un stockage de sauvegarde chez un second fournisseur, un coffre de mots de passe partagé pour les comptes communs. Enfin ce qui se décide selon les résultats : renouvellement de matériel, contrat de maintenance renforcé, assurance.",
                "Le plan sur douze mois reprend cet ordre, ligne par ligne, avec les prix publiés par les éditeurs quand ils existent. Il a deux mérites pour une direction : il rend la dépense prévisible au lieu de la subir après un incident, et il donne au prestataire une commande claire, qu'il peut chiffrer et que l'on peut vérifier. La <a href=\"/formations/strategie-transformation-digitale\">formation à la stratégie de transformation digitale</a> permet ensuite d'inscrire ce budget dans la feuille de route numérique de l'organisation.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et ressources sont présentés, et combien coûtent-ils ?",
            'legende' => "Prix et conditions publiés par les éditeurs et les organismes, relevés le 5 octobre 2026, hors taxes, frais bancaires et de change. Ils servent à chiffrer le plan d'action ; aucun outil n'est imposé, et Richard SALANON n'est partenaire d'aucun de ces éditeurs.",
            'entetes' => ['Outil ou ressource', 'Prix publié', 'Usage pour la direction', 'Limite à connaître'],
            'lignes'  => [
                ["Backblaze B2, stockage en ligne", "À partir de 6,95 dollars par téraoctet et par mois ; les 10 premiers gigaoctets gratuits ; sortie des données gratuite jusqu'à trois fois le volume stocké", "Héberger une copie des sauvegardes chez un second fournisseur, hors des locaux", "Facturé en dollars ; la restauration d'un gros volume dépend de la connexion"],
                ["Wasabi, stockage en ligne", "À partir de 7,99 dollars par téraoctet et par mois, sans frais de sortie ni de requêtes", "Même usage, avec un coût de restauration prévisible", "Conditions minimales de durée et de volume à lire avant de souscrire"],
                ["restic, logiciel de sauvegarde", "Gratuit, sous licence libre BSD à deux clauses ; version 0.19.1 du 5 juillet 2026", "Sauvegardes chiffrées vers un disque ou un stockage en ligne, vérifiables par commande", "Demande un technicien pour l'installation et la surveillance"],
                ["Veeam Backup & Replication, édition Community", "Gratuite jusqu'à 10 charges de travail (serveurs, postes, NAS) ; offre payante Essentials au-delà", "Sauvegarde et restauration des serveurs d'une petite structure", "Outil d'administrateur, pas de direction"],
                ["Guide de la sécurité des données personnelles de la CNIL", "Gratuit ; édition du 26 mars 2024, 25 fiches", "Référence pour vérifier les mesures, avec une fiche sur le pilotage de la sécurité des données", "Écrit pour le cadre européen"],
                ["MonAideCyber, de l'ANSSI", "Diagnostic gratuit accompagné par un aidant cyber, en France", "Premier état des lieux pour une organisation française", "Non adapté, selon le site, aux particuliers et aux micro-entreprises"],
                ["Kit « Organiser un exercice de gestion de crise cyber », de l'ANSSI", "Gratuit ; guide publié le 14 octobre 2020", "Préparer un exercice plus complet après la simulation de la formation", "Pensé pour des organisations de taille moyenne ou grande"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle conduite, et que reste-t-il à l'organisation ?",
            'intro' => "Une règle guide la méthode : chaque séquence se termine par une décision écrite, prise par la personne qui en a le pouvoir. Les explications servent les décisions, jamais l'inverse.",
            'items' => [
                ['titre' => "Un petit groupe, porte fermée", 'texte' => "La session réunit la direction, le responsable financier et le référent informatique, rarement plus de huit personnes. On y parle de failles, de contrats et d'incidents passés : rien ne sort de la salle, et les documents examinés restent chez le client."],
                ['titre' => "Vos documents comme matière première", 'texte' => "Registre, contrats, rapports de sauvegarde, polices d'assurance : les exercices portent sur les pièces réelles de l'organisation. Quand elles manquent, l'exercice consiste justement à constater le manque et à décider qui le comblera."],
                ['titre' => "Aucun accès demandé au formateur", 'texte' => "Le formateur ne se connecte à aucun système et ne demande aucun mot de passe. Quand une console doit être consultée, c'est le référent ou le prestataire qui l'affiche, et la direction qui lit."],
                ['titre' => "Des textes lus à la source", 'texte' => "Les obligations sont présentées à partir des lois, des directives et des recommandations des autorités, avec leur date de lecture. Un point juridique qui dépasse la formation est noté pour l'avocat ou le juriste de l'organisation, pas tranché en séance."],
                ['titre' => "Des supports modifiables", 'texte' => "Le modèle de registre, la grille de sauvegarde, la grille de lecture des contrats, la fiche réflexe, le modèle de notification, le cahier de bord de crise et le plan sur douze mois, dans des formats que l'organisation peut tenir à jour seule. Chaque participant reçoit une attestation nominative."],
                ['titre' => "Un point d'étape qui vérifie", 'texte' => "Quatre à six semaines plus tard, deux heures à distance pour constater ce qui a été fait : test de restauration, revue des accès, avenants. Entre-temps, un canal direct permet de poser les questions qui surgissent en appliquant les décisions."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon l'activité et le pays ?",
            'items' => [
                ['secteur' => "Distributeur de produits alimentaires, à Cotonou", 'probleme' => "L'ERP tourne sur un serveur dans l'arrière-boutique, sauvegardé chaque vendredi sur une clé USB qui reste branchée. Le nom de domaine est au nom du neveu qui a monté le site.", 'solution' => "Perte acceptable fixée à un jour, copie nocturne chez un second fournisseur, disque hors ligne rapporté chaque semaine au domicile du gérant, domaine transféré au nom de la société, modèle de notification à l'APDP préparé."],
                ['secteur' => "École privée, à Lomé", 'probleme' => "Les dossiers des élèves et les paiements des familles sont gérés par un prestataire unique, sans contrat écrit, qui détient tous les accès d'administration.", 'solution' => "Contrat de prestation avec annexe sur les données, délai d'alerte en cas de violation, second administrateur nommé à la direction, test de restauration demandé avant la rentrée, contact de l'IPDCP noté sur la fiche réflexe."],
                ['secteur' => "ONG présente dans trois pays, siège à Ouagadougou", 'probleme' => "Les fichiers de bénéficiaires sont dispersés entre des ordinateurs portables de terrain et des comptes personnels de stockage en ligne ; le bailleur exige un plan de continuité.", 'solution' => "Registre commun aux trois bureaux, règle la plus exigeante des trois pays retenue, comptes nominatifs de l'organisation, copie centrale chiffrée, cellule de crise à distance avec un numéro de secours par pays."],
                ['secteur' => "Cabinet d'expertise comptable, à Abidjan", 'probleme' => "Le cabinet détient les données de centaines de clients et ignore si son contrat d'hébergement prévoit une restauration en moins d'une semaine en pleine période fiscale.", 'solution' => "Relecture du contrat avec la grille, avenant fixant un délai de restauration, sauvegarde hors ligne des dossiers de l'exercice en cours, correspondant à la protection des données désigné auprès de l'ARTCI."],
                ['secteur' => "Clinique privée, à Dakar", 'probleme' => "Le logiciel de dossiers patients est sauvegardé, mais personne n'a jamais restauré la base, et la clé de chiffrement est connue du seul prestataire.", 'solution' => "Restauration complète testée un dimanche sur une machine isolée, copie de la clé remise sous scellé à la direction, procédure de signalement à la CDP rédigée, exercice de crise sur une panne du logiciel."],
                ['secteur' => "PME de services, à Lyon ou à Bruxelles", 'probleme' => "L'entreprise a souscrit une assurance cyber sans relire les conditions, et ne sait pas si elle entre dans le champ de la directive NIS 2.", 'solution' => "Lecture des exclusions et des délais de déclaration, plainte sous 72 heures inscrite dans la fiche réflexe en France, vérification du champ NIS 2 avec le texte national, registre interne des violations ouvert."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, inter, à distance ou hybride : quel format pour une formation de direction ?",
            'legende' => "Les quatre formats sont possibles. Le choix dépend surtout de la confidentialité des documents examinés et de la disponibilité des dirigeants.",
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Précaution'],
            'lignes'  => [
                ["Intra", "Une organisation qui veut travailler sur ses propres contrats, sauvegardes et incidents", "Deux jours dans vos locaux ou dans une salle extérieure, en quatre demi-journées qui peuvent être espacées d'une semaine", "La formule la plus utile : tout ce qui est produit est directement applicable"],
                ["Inter", "Dirigeants de plusieurs structures d'un même réseau, d'une fédération ou d'un groupement de bailleurs", "Une salle commune, des cas anonymisés, un registre et un plan rédigés par chacun pour sa structure", "Personne ne décrit ses failles réelles devant les autres ; le travail sur les documents se fait seul ou au point d'étape"],
                ["À distance", "Directions dispersées entre plusieurs villes ou plusieurs pays", "Quatre séances de deux heures et demie en visioconférence, avec travail préparatoire entre les séances", "Aucun contrat ni rapport partagé à l'écran sans l'accord de la direction ; la simulation se joue par téléphone"],
                ["Hybride", "Organisations qui veulent la simulation en salle et le reste à distance", "Simulation et exercices de contrats sur place, registre et budget en visioconférence", "Fixer dès le départ la date du point d'étape, sinon il n'a jamais lieu"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun tarif n'est publié : la formation est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les outils retenus ensuite, stockage de sauvegarde, logiciel ou assurance, restent facturés par leurs éditeurs ou leurs assureurs.",
            'items'      => [
                ['offre' => "Session de direction en intra", 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées sur vos documents", "Registre, politique de sauvegarde, fiche réflexe et plan sur douze mois", "Point d'étape à distance"]],
                ['offre' => "Session inter-structures", 'prix' => 'Sur devis', 'inclus' => ["Dirigeants de plusieurs organisations", "Cas anonymisés et modèles communs", "Coût partagé entre les participants"]],
                ['offre' => "Direction puis personnel", 'prix' => 'Sur devis', 'inclus' => ["Session de direction", "Formation des salariés aux réflexes", "Circuit de signalement relié à la fiche réflexe de la direction"]],
            ],
            'variations' => [
                "Le nombre de participants et la présence du référent informatique ou du prestataire.",
                "La préparation : lecture préalable des contrats, des rapports de sauvegarde et des polices d'assurance.",
                "Le nombre de pays couverts, qui multiplie les textes à présenter.",
                "Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.",
                "Le mode : en salle, à distance ou hybride.",
                "Le suivi : point d'étape simple, ou accompagnement pendant la mise en œuvre du plan.",
                "La langue des séances et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer cette session ?",
            'paragraphes' => [
                "C'est possible, sans jamais être acquis. En Côte d'Ivoire, la page du FDFP consacrée au plan de formation, consultée le 5 octobre 2026, réserve le dépôt aux entreprises qui justifient du paiement régulier des deux taxes, et le règlement n'intervient qu'après le suivi et le contrôle des services du fonds, puis l'approbation de sa Commission permanente. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le décret n° 2022-286 du 11 mai 2022 ; au Sénégal, le 3FPT dispose d'un guichet pour le personnel des entreprises, avec une demande déposée en ligne.",
                "En France, France Compétences rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des OPCO. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds africain. Transmettez le programme et le devis à votre fonds avant de vous engager, attendez sa réponse écrite et prévoyez le budget sans aide. Les feuilles de présence, le programme et les attestations vous sont remis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Cette formation remplace-t-elle un audit de sécurité ?",
            'texte' => "Non. Elle apprend à une direction à décider, à commander et à vérifier ; elle n'inspecte ni les serveurs, ni le réseau, ni les configurations, et ne délivre aucune attestation de conformité. Richard SALANON n'est ni auditeur de sécurité certifié, ni prestataire qualifié par une agence nationale de cybersécurité, et le dit avant toute commande. Si un client, un bailleur, un assureur ou une autorité exige un audit de sécurité formel, il doit être confié à un prestataire qualifié ; la formation aide alors à rédiger la demande et à lire le rapport.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on après la formation, et comment les éviter ?",
            'intro' => "Les décisions prises en séance tiennent rarement seules. Voici les glissements les plus fréquents constatés au point d'étape, et la parade prévue dès la session.",
            'items' => [
                ['titre' => "Le test de restauration reporté", 'texte' => "Il dérange, il prend une demi-journée, et le prestataire assure que tout va bien. La date fixée en séance figure dans l'agenda de la direction, et le compte rendu est demandé par écrit."],
                ['titre' => "La copie hors ligne rebranchée en permanence", 'texte' => "Par commodité, le disque reste connecté « pour que la sauvegarde se fasse toute seule ». Il redevient alors une cible. La politique de sauvegarde désigne la personne qui le débranche et l'emporte."],
                ['titre' => "Le registre rempli une fois, puis oublié", 'texte' => "Un nouveau logiciel, un nouveau prestataire, un départ : le registre vieillit vite. Sa mise à jour est inscrite dans la procédure d'arrivée et de départ, et relue à chaque trimestre."],
                ['titre' => "L'avenant jamais signé", 'texte' => "Le prestataire promet oralement les clauses demandées. La direction exige un écrit avant le prochain renouvellement, et conserve la grille de lecture pour les contrats futurs."],
                ['titre' => "La fiche réflexe rangée dans la messagerie", 'texte' => "Le jour où la messagerie est inaccessible, la fiche l'est aussi. Elle est imprimée, conservée chez chaque membre de la cellule de crise, avec les numéros utiles."],
                ['titre' => "Le budget voté puis grignoté", 'texte' => "Les lignes peu coûteuses passent après les urgences du mois. Le plan sur douze mois indique un responsable et une date pour chacune, revus au point d'étape."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change le contexte de l'Afrique de l'Ouest et de l'Europe pour ces décisions ?",
            'paragraphes' => [
                "Les coupures d'électricité et les connexions irrégulières pèsent directement sur la sauvegarde. Une copie en ligne qui doit envoyer des centaines de gigaoctets par une liaison lente prend des jours ; une restauration complète depuis l'étranger aussi. La formation en tire des choix concrets : une première copie locale complète, des envois en ligne incrémentaux la nuit, un onduleur pour le serveur et le disque de sauvegarde, et une estimation honnête du temps de restauration avant d'en faire une promesse aux clients.",
                "Le cadre juridique se densifie. Au Bénin, la loi n° 2017-20 portant code du numérique impose des mesures de sécurité, la notification sans délai des violations et, à son article 435, un registre des activités de traitement. L'APDP béninoise et l'IPDCP togolaise ont signé une convention de partenariat le 18 août 2026, selon le site de l'APDP. Pour une organisation présente dans plusieurs pays, la session retient la règle la plus exigeante de son périmètre, et note les interlocuteurs de chaque pays sur la fiche réflexe.",
                "En Europe, le RGPD et, pour les entités concernées, la directive NIS 2 placent la direction en première ligne. L'article 20 de la directive prévoit que les organes de direction approuvent les mesures de gestion des risques, en supervisent la mise en œuvre et peuvent être tenus responsables de leurs manquements ; il impose aussi à leurs membres de suivre une formation. Une PME hors du champ de la directive n'y est pas tenue, mais la logique est la même : les décisions de sécurité se prennent et se vérifient au sommet.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi suivre cette formation avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Les décisions traitées dans cette formation, il les rencontre dans chaque projet. Déployer un ERP ou mettre en ligne une application oblige à répondre aux mêmes questions : où vivent les données, qui en a les clés, comment on les restaure, qui prévient qui en cas de problème. Il a aussi créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé dans " . count((array) fait('pays_travailles')) . " pays, du Bénin au Mali, du Gabon au Tchad, de la Belgique au Canada. Il n'est ni auditeur de sécurité certifié, ni partenaire d'un éditeur, d'un hébergeur ou d'un assureur : il peut recommander la solution la plus simple, gratuite comprise, ou conseiller de faire appel à un prestataire qualifié.",
                "Ses engagements sont vérifiables : réponse sous 24 heures, programme écrit avant la session, exercices sur vos documents, aucun mot de passe demandé, supports qui restent à l'organisation. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur la page des <a href=\"/zones/\">zones d'intervention</a>, l'organisation commune des formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et les autres formations du domaine sur la page <a href=\"/formations/domaine/cybersecurite-it\">formations cybersécurité et IT</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de réunir votre direction ?",
            'texte' => "La sécurité des données d'une petite organisation se joue sur quelques décisions que seule la direction peut prendre : savoir ce qu'elle possède et qui en détient les clés, fixer la perte acceptable et exiger la preuve d'une restauration, encadrer les prestataires par écrit, et savoir qui fait quoi dans les 72 premières heures d'un incident. Écrivez-les, datez-les, et vérifiez-les quelques semaines plus tard.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous que votre direction prenne ces décisions sur vos propres documents ?",
            'texte'  => "Indiquez la taille de l'organisation, les pays concernés, les logiciels et prestataires en place, un éventuel incident récent et la période souhaitée : vous recevez une réponse sous 24 heures, puis un programme adapté et un devis détaillé. La formation se combine bien avec la <a href=\"/formations/cybersecurite-employes\">formation cybersécurité pour les employés</a> pour le reste du personnel.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour ma direction'],
        ],
    ],

    'faq' => [
        ['q' => "Combien de temps dure la formation ?", 'r' => "Deux jours répartis en quatre demi-journées : inventaire des données et des accès, sauvegardes, accès et prestataires, puis plan de réponse à incident et budget. Un point d'étape de deux heures à distance suit quatre à six semaines plus tard. Les demi-journées peuvent être espacées pour s'adapter à l'agenda d'une direction."],
        ['q' => "Faut-il des connaissances techniques pour la suivre ?", 'r' => "Non. Il suffit de connaître les logiciels et les prestataires de l'organisation. Les notions techniques sont expliquées au moment où une décision en dépend, et le référent informatique, quand il est présent, apporte les faits que la direction ne connaît pas."],
        ['q' => "Le référent informatique ou le prestataire doit-il être présent ?", 'r' => "C'est recommandé pour les deux premières demi-journées et pour la simulation. Il apporte la situation réelle des sauvegardes et des accès. Les décisions restent celles de la direction, qui peut aussi se réunir seule pour certaines séquences, par exemple la lecture des contrats."],
        ['q' => "Qu'est-ce que la règle 3-2-1 des sauvegardes ?", 'r' => "Trois copies des données importantes, l'original et deux sauvegardes, sur deux types de supports différents, dont une conservée hors des locaux, selon le guide publié en 2012 par l'US-CERT. La formation y ajoute une copie isolée du réseau et un test de restauration régulier, parce qu'un rançongiciel atteint les copies restées branchées."],
        ['q' => "Notre prestataire dit qu'il s'occupe des sauvegardes : est-ce suffisant ?", 'r' => "Peut-être, mais il faut pouvoir le vérifier. Demandez-lui par écrit ce qui est sauvegardé, à quelle fréquence, où se trouvent les copies, laquelle est hors ligne, qui détient la clé de chiffrement et quand a eu lieu la dernière restauration complète. La formation fournit la liste des questions et la grille pour lire ses réponses."],
        ['q' => "Dans quel délai faut-il notifier une violation de données ?", 'r' => "En Europe, la CNIL attend une notification dans les meilleurs délais et si possible sous 72 heures, au besoin en plusieurs temps. Au Bénin, la loi n° 2017-20 impose une notification sans délai à l'APDP et à la personne concernée. Pour les autres pays, la session vérifie le texte en vigueur auprès de l'autorité compétente."],
        ['q' => "Faut-il souscrire une assurance cyber ?", 'r' => "Cela dépend de vos risques et de ce que coûterait une semaine d'arrêt. La formation apprend à lire les garanties, les exclusions et les obligations de déclaration, dont la plainte sous 72 heures exigée en France. Richard SALANON ne vend aucune assurance et ne perçoit aucune commission."],
        ['q' => "La formation couvre-t-elle les réflexes des salariés face à l'hameçonnage ?", 'r' => "Non. Elle traite des décisions de direction. Les réflexes du personnel, comme reconnaître un faux message, tenir ses mots de passe ou activer la double authentification, font l'objet de la formation cybersécurité pour les employés, souvent programmée juste après."],
        ['q' => "Nos contrats et nos failles resteront-ils confidentiels ?", 'r' => "Oui. En intra, la session se tient porte fermée et les documents restent chez vous. En inter, les cas sont anonymisés et personne n'expose ses failles devant d'autres structures ; le travail sur vos propres documents se fait seul ou lors du point d'étape."],
        ['q' => "Richard SALANON peut-il auditer notre sécurité après la formation ?", 'r' => "Il n'est pas auditeur de sécurité certifié et ne présente pas ses missions comme des audits de sécurité. Il peut examiner un existant ou un projet dans le cadre d'une mission d'audit et d'étude de projet, ou mettre en œuvre des sauvegardes dans une prestation de maintenance ; un audit formel exigé par un tiers doit être confié à un prestataire qualifié."],
        ['q' => "Quel budget prévoir pour la sécurité après la formation ?", 'r' => "Un budget proportionné à la taille et aux risques, construit pendant la session : d'abord les mesures presque gratuites, comme la reprise des accès, une copie hors ligne et un test de restauration, puis les abonnements modestes, enfin le matériel ou l'assurance. Le plan indique les prix publiés par les éditeurs quand ils existent."],
        ['q' => "La formation peut-elle être financée par un fonds ?", 'r' => "Cela dépend du fonds et de votre situation : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'affiche ni certification Qualiopi ni agrément d'un fonds. Soumettez le programme et le devis au fonds avant de vous engager, et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => "CISA (US-CERT), Data Backup Options, Paul Ruggiero et Matthew A. Heckathorn, 2012 (règle 3-2-1)", 'url' => 'https://www.cisa.gov/sites/default/files/publications/data_backup_options.pdf', 'date' => '2026-10-05'],
        ['titre' => "Cybermalveillance.gouv.fr, bonnes pratiques : les sauvegardes (mise à jour du 14 septembre 2026)", 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes', 'date' => '2026-10-05'],
        ['titre' => "CNIL, notifier une violation de données personnelles", 'url' => 'https://www.cnil.fr/fr/notifier-une-violation-de-donnees-personnelles', 'date' => '2026-10-05'],
        ['titre' => "CNIL, texte du RGPD, chapitre 4 (articles 28, 32 et 33)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "CNIL, guide de la sécurité des données personnelles, édition 2024 (26 mars 2024)", 'url' => 'https://www.cnil.fr/fr/guide-de-la-securite-des-donnees-personnelles-nouvelle-edition-2024', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 426, 427 et 435)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "APDP Bénin, Autorité de protection des données personnelles (convention avec l'IPDCP du 18 août 2026)", 'url' => 'https://apdp.bj/', 'date' => '2026-10-05'],
        ['titre' => "IPDCP Togo, Instance de protection des données à caractère personnel", 'url' => 'https://ipdcp.tg/', 'date' => '2026-10-05'],
        ['titre' => "ARTCI, Autorité de protection de Côte d'Ivoire : lois (loi n° 2013-450 du 19 juin 2013)", 'url' => 'https://www.autoritedeprotection.ci/lois/', 'date' => '2026-10-05'],
        ['titre' => "CDP Sénégal, Commission de protection des données personnelles : signaler une violation", 'url' => 'https://www.cdp.sn/plainte', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, article L12-10-1 du code des assurances (loi n° 2023-22 du 24 janvier 2023)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000047048152', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, directive (UE) 2022/2555 du 14 décembre 2022, dite NIS 2 (articles 20, 21 et 23)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32022L2555', 'date' => '2026-10-05'],
        ['titre' => "AMRAE, LUCY : Lumière sur la cyberassurance, édition 2026", 'url' => 'https://www.amrae.fr/lucy-lumiere-sur-la-cyberassurance-edition-2026', 'date' => '2026-10-05'],
        ['titre' => "ANSSI, organiser un exercice de gestion de crise cyber (14 octobre 2020)", 'url' => 'https://messervices.cyber.gouv.fr/guides/organiser-un-exercice-de-gestion-de-crise-cyber', 'date' => '2026-10-05'],
        ['titre' => "ANSSI, MonAideCyber : diagnostic cyber gratuit", 'url' => 'https://monaide.cyber.gouv.fr/', 'date' => '2026-10-05'],
        ['titre' => "ICO, avis de sanction visant British Airways (16 octobre 2020)", 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf', 'date' => '2026-10-05'],
        ['titre' => "BleepingComputer, Maersk Reinstalled 45,000 PCs and 4,000 Servers to Recover From NotPetya Attack (25 janvier 2018)", 'url' => 'https://www.bleepingcomputer.com/news/security/maersk-reinstalled-45-000-pcs-and-4-000-servers-to-recover-from-notpetya-attack/', 'date' => '2026-10-05'],
        ['titre' => "Backblaze, tarifs du stockage B2 (lus dans le navigateur)", 'url' => 'https://www.backblaze.com/cloud-storage/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wasabi, tarifs du stockage (lus dans le navigateur)", 'url' => 'https://wasabi.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "restic, logiciel libre de sauvegarde (version 0.19.1 du 5 juillet 2026)", 'url' => 'https://restic.net/', 'date' => '2026-10-05'],
        ['titre' => "Veeam, Backup & Replication Community Edition (gratuite jusqu'à 10 charges de travail)", 'url' => 'https://www.veeam.com/products/free/backup-recovery.html', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['cybersecurite-employes', 'cloud-hebergement', 'gestion-projet-agile', 'microsoft-365-google-workspace', 'gouvernance-ia', 'strategie-transformation-digitale'],
        'services'    => ['maintenance-support', 'audit-etude-de-projet', 'formation-en-entreprise'],
        'comparatifs' => [],
    ],
];
