<?php
// ============================================================
// data/metiers/ong-projets-developpement.php · Page « formations par
// métier » : ONG et projets de développement (vague 1C, univers Santé et
// social, prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : la chaîne de données d'un projet financé (cadre de
// résultats, collecte de terrain avec KoboToolbox, suivi-évaluation,
// rapports aux bailleurs, gestion financière par bailleur, protection des
// données des bénéficiaires). Les fiches data-literacy, power-bi-looker-
// studio, ia-en-entreprise et outils-collaboratifs sont citées et reliées,
// jamais répétées (leurs cas d'ONG à Dakar et Ouagadougou ne sont pas repris).
// Faits externes lus le 05/10/2026 : KoboToolbox (tarifs, serveurs,
// KoboCollect), DHIS2 (page « about »), IATI (page d'accueil), CICR (manuel
// sur la protection des données dans l'action humanitaire, 3e édition,
// 19/11/2024), CHS 2024, OHADA (Acte uniforme SYCEBNL), CNIL (données
// sensibles), APDP, Google pour les associations (offres et pays), Microsoft
// pour les associations, PNUD RD Congo (FIKIRI), FDFP, et les « Faits déjà
// vérifiés » du catalogue (WhatsApp, article 4 du règlement sur l'IA).
// Richard n'exerce pas le suivi-évaluation : il forme à l'usage des outils.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les ONG et les projets de développement : collecter sur le terrain, suivre les indicateurs, rédiger les rapports aux bailleurs et tenir les finances du projet sans exposer les bénéficiaires",
    'title'   => "Formation IA et numérique pour les ONG | Richard SALANON",
    'meta'    => "Former une ONG ou un projet à l'IA et au numérique : KoboToolbox, suivi-évaluation, rapports aux bailleurs, finances et données des bénéficiaires.",
    'en_bref' => "Cette page s'adresse aux ONG, aux associations de solidarité internationale et aux unités de gestion de projets financés qui veulent tenir leur chaîne de données avec des outils maîtrisés : formulaires de collecte sur téléphone, base de suivi des indicateurs, rapports aux bailleurs préparés avec l'IA puis vérifiés, budget suivi par bailleur. Le parcours type dure trois jours en six demi-journées, avec une séance de suivi à un mois, et se construit sur le cadre de résultats et les outils réels du projet. Il se déroule en intra, sur le terrain, à distance ou en hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Santé et social',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : la chaîne de données du projet, de l'indicateur au rapport",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé, avec l'équipe, du trajet réel d'une donnée : qui la mesure sur le terrain, qui la saisit, qui la corrige, qui la consolide, qui la transmet au bailleur, et combien de fois elle est recopiée en chemin.",
                "Lecture du cadre de résultats ou du cadre logique du projet : pour chaque indicateur, la source, la fréquence, le responsable et la désagrégation attendue (sexe, âge, zone, handicap).",
                "Repérage des points de rupture : fichiers par enquêteur, versions concurrentes d'un même tableau, chiffres retapés depuis un rapport papier.",
                "Classement des tâches en trois couleurs : ce qu'un outil peut faire seul, ce qu'il peut préparer sous contrôle humain, ce qui reste fermé à l'outil (décision d'éligibilité, analyse de contexte, signature).",
                "Exercice : dessiner sur une page le circuit cible de deux indicateurs du projet, avec le moment où chaque donnée cesse d'être nominative.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : construire un formulaire de collecte qui tient sur le terrain",
            'duree'  => '3 h 30',
            'points' => [
                "Prise en main de KoboToolbox sur le serveur choisi par l'organisation : projet, questions, types de réponses, listes de choix codées.",
                "Contraintes et sauts de questions : empêcher une réponse impossible, n'afficher que les questions utiles, calculer un total sans le faire saisir.",
                "Question de consentement en tête du formulaire, et formulaire qui s'arrête proprement si la personne refuse.",
                "Collecte hors connexion avec KoboCollect sur Android, envoi des fiches finalisées au retour du réseau, gestion des versions du formulaire.",
                "Exercice : transformer un questionnaire papier du projet en formulaire, puis le tester sur les téléphones des participants, dans la salle et dehors.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : protéger les données des bénéficiaires à chaque étape",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qui rend une donnée sensible dans un projet : santé, handicap, statut de réfugié ou de déplacé, appartenance ethnique, violences subies, localisation précise d'un ménage.",
                "Minimiser : ne collecter que ce que le cadre de résultats exige, remplacer le nom par un code, séparer la table d'identification de la table d'analyse.",
                "Comptes nominatifs, droits par rôle, téléphones de collecte verrouillés, exports qui ne quittent pas l'espace prévu, durée de conservation et suppression.",
                "Les canaux à risque : listes de bénéficiaires envoyées dans des groupes WhatsApp, fichiers joints à des courriels personnels, données collées dans un assistant d'IA grand public.",
                "Exercice : passer en revue les droits d'accès réels du projet et rédiger la règle de conservation et de suppression de ses fichiers de bénéficiaires.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : de la base brute aux indicateurs suivis",
            'duree'  => '3 h 30',
            'points' => [
                "Contrôle qualité quotidien de la collecte : doublons, valeurs aberrantes, enquêtes trop courtes, fiches hors zone, retours aux superviseurs le jour même.",
                "Une base consolidée unique, avec un dictionnaire des variables et un journal des corrections, au lieu de fichiers recopiés.",
                "Calcul des indicateurs du cadre de résultats à partir de la base, avec la désagrégation demandée par le bailleur et la valeur de référence.",
                "Un tableau de suivi partagé pour l'équipe : ce qu'il doit montrer chaque semaine, et ce que l'on renvoie vers la formation aux tableaux de bord.",
                "Exercice : recalculer trois indicateurs du dernier rapport à partir des données brutes et expliquer chaque écart trouvé.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : préparer les rapports aux bailleurs avec l'IA, puis tout vérifier",
            'duree'  => '3 h 30',
            'points' => [
                "Ce que l'assistant fait bien : premier jet d'une section narrative à partir des fiches d'activité, reformulation, résumé d'un compte rendu de mission, traduction vers l'anglais.",
                "Ce qu'il ne fait pas : produire un chiffre, citer un bénéficiaire, expliquer un retard qu'on ne lui a pas décrit, juger d'un changement de contexte.",
                "Méthode de vérification : chaque nombre du rapport renvoie à une cellule de la base, chaque fait à une fiche d'activité, chaque citation à un consentement écrit.",
                "Cohérence entre rapport narratif et rapport financier : taux d'exécution, activités reportées, réallocations à justifier.",
                "Exercice : produire la section « résultats du trimestre » d'un vrai rapport, puis la faire relire par un binôme chargé de retrouver la source de chaque affirmation.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : finances du projet, travail d'équipe et plan d'action",
            'duree'  => '3 h 30',
            'points' => [
                "Suivre un budget par bailleur et par ligne : engagements, dépenses, pièces justificatives numérisées et classées dès réception.",
                "Plusieurs devises dans un même projet (francs CFA, euros, dollars) et le taux retenu par chaque convention de financement.",
                "Le calendrier des rapports, des audits et des clôtures dans un outil partagé, avec un responsable par échéance.",
                "Charte d'usage de l'équipe : outils autorisés, comptes, données interdites dans les assistants d'IA, circuit de validation d'un rapport.",
                "Plan d'action de trente jours : trois changements que l'équipe applique tout de suite, avec leur responsable et leur date.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Revue du plan d'action : ce qui est en place, ce qui bloque, et pourquoi.",
                "Relecture d'un formulaire mis en service depuis la formation et des premières données collectées.",
                "Questions sur le rapport en préparation et sur la vérification de ses chiffres.",
                "Mise à jour de la charte d'usage après un mois de pratique.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Coordinateurs, chargés de suivi-évaluation, responsables administratifs et financiers, superviseurs et enquêteurs de terrain"],
        ['l' => 'Durée', 'v' => "3 jours en six demi-journées de 3 h 30, plus 2 h de suivi à un mois"],
        ['l' => 'Formats', 'v' => "Intra au bureau du projet, sur le terrain, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour une ONG ou une unité de gestion de projet ?",
            'paragraphes' => [
                "Un projet de développement vit au rythme de ses obligations de compte rendu. Le bailleur attend un rapport trimestriel ou semestriel, un rapport financier, parfois une enquête de référence au démarrage et une évaluation finale. Entre les deux, l'équipe collecte des données dans des villages, des centres de santé, des écoles ou des marchés, souvent loin du réseau. La plupart des heures perdues ne le sont pas sur le terrain : elles le sont à recopier, consolider, retrouver la bonne version d'un fichier et recalculer un indicateur que personne ne sait plus reproduire.",
                "La digitalisation agit d'abord sur ce trajet. Un questionnaire saisi directement sur téléphone, avec des contrôles qui refusent une réponse impossible, supprime la ressaisie et une bonne part des erreurs. Une base unique, alimentée par les formulaires, remplace les classeurs envoyés par chaque superviseur. Un tableau de suivi calculé à partir de cette base montre chaque semaine où en sont les indicateurs, au lieu de le découvrir trois jours avant l'échéance du rapport. Rien de cela n'exige un logiciel coûteux : des outils gratuits pour les organisations à but non lucratif couvrent l'essentiel.",
                "L'automatisation relie ensuite les étapes. Une soumission de formulaire peut alimenter un tableur, déclencher une alerte au superviseur quand une fiche paraît incohérente, ou préparer chaque lundi la liste des activités du mois. Côté finances, les pièces justificatives numérisées dès réception et rattachées à la bonne ligne budgétaire évitent la chasse aux reçus avant l'audit. Ces liaisons se construisent pas à pas, une fois que la chaîne manuelle est claire : automatiser un circuit confus ne fait qu'accélérer la confusion.",
                "L'intelligence artificielle intervient surtout dans l'écrit. Elle propose un premier jet de rapport narratif à partir des fiches d'activité, résume un compte rendu de mission, reformule un paragraphe trop technique pour un comité, traduit une synthèse vers l'anglais pour un bailleur anglophone. Elle peut aussi aider à classer des réponses ouvertes d'enquête. Mais elle n'observe rien sur le terrain, ne connaît pas le contexte d'une zone, et produit avec aplomb des chiffres qui n'existent pas. Dans un projet, chaque nombre engage l'organisation devant son bailleur : l'IA prépare, une personne vérifie et signe.",
                "Le dernier changement est moins visible et plus important : les données des bénéficiaires circulent désormais par des canaux numériques. Une liste de ménages vulnérables, de patients ou d'enfants suivis peut partir en pièce jointe, finir dans un groupe WhatsApp ou être collée dans un assistant en ligne. La formation traite cette question comme une compétence de métier, au même titre que la conception d'un formulaire, et non comme une annexe juridique lue une fois puis oubliée.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et les outils numériques ne doivent-ils jamais faire dans un projet de développement ?",
            'intro' => "Ces interdits ne viennent pas d'une méfiance de principe envers la technique. Ils découlent des textes sur les données personnelles, des engagements pris envers les populations et des conventions signées avec les bailleurs. La formation les transforme en règles écrites, adoptées par l'équipe.",
            'items' => [
                ['titre' => "Recevoir des données nominatives de bénéficiaires", 'texte' => "Une liste de ménages, un dossier de patient, une fiche de suivi d'enfant ou un témoignage de survivante de violences n'entrent jamais dans un assistant d'IA grand public. Le règlement européen classe les données de santé, l'origine ethnique ou les convictions religieuses parmi les données sensibles, dont le traitement est interdit sauf exceptions, comme le rappelle la CNIL. On travaille sur des extraits anonymisés, ou sur des outils encadrés par un contrat."],
                ['titre' => "Décider seule qui reçoit l'aide", 'texte' => "Un score calculé par un outil peut aider à repérer des ménages à visiter. Il ne décide pas de l'éligibilité à un transfert monétaire, à un kit ou à une prise en charge. La décision reste humaine, motivée, et contestable par un mécanisme de plaintes que les personnes connaissent."],
                ['titre' => "Produire ou arrondir un chiffre d'indicateur", 'texte' => "Un taux de couverture, un nombre de personnes atteintes ou une valeur de référence viennent de la base du projet, jamais d'une réponse générée. Un assistant qui « complète » un tableau d'indicateurs fabrique une déclaration inexacte au bailleur, dont l'organisation répond seule."],
                ['titre' => "Inventer la parole des bénéficiaires", 'texte' => "Une citation de bénéficiaire dans un rapport ou une publication doit avoir été dite, recueillie avec un consentement et rapportée fidèlement. Un témoignage reconstruit par une IA, même vraisemblable, trompe le lecteur et trahit la personne."],
                ['titre' => "Diffuser des listes par messagerie", 'texte' => "Les groupes WhatsApp de coordination sont utiles pour organiser une distribution. Ils ne servent pas à faire circuler des listes nominatives, des photos de documents d'identité ou des localisations de ménages, qui restent ensuite sur chaque téléphone du groupe."],
                ['titre' => "Remplacer la relation avec les communautés", 'texte' => "Un robot de messagerie peut donner un horaire de distribution ou accuser réception d'une plainte. Il ne remplace ni l'animateur communautaire, ni l'écoute d'une réclamation sensible, ni l'explication d'un refus. La norme humanitaire fondamentale CHS, mise à jour en 2024, place les personnes affectées au centre de la redevabilité."],
                ['titre' => "Engager l'organisation sans signature", 'texte' => "Un rapport, une demande de réallocation budgétaire ou une réponse à une observation d'audit engagent l'organisation envers son bailleur. Aucune chaîne automatique n'envoie ces documents sans la relecture et la validation du responsable désigné."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels textes et référentiels encadrent les données et les outils d'un projet ?",
            'legende' => "Repères lus le 5 octobre 2026. Le droit applicable dépend du pays où l'organisation est établie, de celui où vivent les personnes concernées et de la convention de financement ; la formation ne remplace pas l'avis d'un juriste.",
            'entetes' => ['Texte ou référentiel', 'Ce qu\'il prévoit', 'Ce que l\'équipe en retient'],
            'lignes'  => [
                ["Loi n° 2017-20 du 20 avril 2018 portant code du numérique (Bénin)", "Le régime béninois de protection des données à caractère personnel, contrôlé par l'Autorité de protection des données personnelles (APDP), qui publie ses démarches et formulaires de mise en conformité et dispose d'un espace pour les délégués à la protection des données", "Un projet qui collecte des données au Bénin vérifie ses formalités auprès de l'APDP avant la collecte, pas après le premier rapport"],
                ["Règlement général sur la protection des données (Union européenne)", "Les données révélant l'origine ethnique, les opinions, les convictions religieuses, la santé, les données génétiques ou biométriques sont sensibles ; leur traitement est interdit sauf exceptions (fiche de la CNIL)", "Une ONG établie en Europe, ou qui cible des personnes qui s'y trouvent, applique ces règles à ses partenaires et à ses outils"],
                ["Manuel sur la protection des données dans l'action humanitaire, 3e édition (CICR et Brussels Privacy Hub)", "Application des principes de protection des données aux organisations humanitaires, avec des chapitres sur l'identité numérique, la connectivité comme aide, les réseaux sociaux et l'intelligence artificielle (page du CICR du 19 novembre 2024)", "La référence pratique pour les transferts monétaires, la biométrie, les messageries et l'IA en contexte de crise"],
                ["Norme humanitaire fondamentale de qualité et de redevabilité (CHS 2024)", "Norme mise à jour et lancée en mars 2024 après une consultation de plus de 4 000 contributeurs dans plus de 90 pays, utilisable par toute personne ou organisation qui soutient des populations en crise", "Les outils numériques servent la redevabilité envers les personnes, et ne la remplacent pas"],
                ["Acte uniforme OHADA relatif au système comptable des entités à but non lucratif (SYCEBNL)", "Adopté le 22 décembre 2022 à Niamey, publié au Journal officiel de l'OHADA le 22 février 2023, en vigueur depuis le 1er janvier 2024, avec un guide d'application", "Les états financiers des ONG de l'espace OHADA suivent ce référentiel, que le logiciel comptable doit permettre de produire"],
                ["Règlement européen sur l'IA, article 4 (questions et réponses de la Commission, mise à jour du 27 juillet 2026)", "Obligation de maîtrise de l'IA applicable depuis le 2 février 2025, contrôle et sanctions depuis le 3 août 2026, maintenue par l'omnibus numérique pour les utilisateurs professionnels", "Une ONG européenne dont les équipes utilisent l'IA documente la formation de son personnel"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans des projets d'Afrique francophone et d'Europe ?",
            'items' => [
                ['secteur' => "Sécurité alimentaire, enquête de référence dans le nord du Bénin", 'probleme' => "Situation type : une enquête auprès de plusieurs centaines de ménages se fait sur papier, puis trois agents ressaisissent les questionnaires pendant des semaines ; les erreurs de saisie ne se découvrent qu'au moment de l'analyse.", 'solution' => "Le questionnaire devient un formulaire KoboToolbox avec contraintes, sauts et codes de village ; les enquêteurs collectent hors connexion sur KoboCollect et envoient le soir. Le superviseur contrôle chaque jour les fiches trop courtes ou hors zone, et la base est prête pour l'analyse à la fin de la collecte."],
                ['secteur' => "Transferts monétaires par mobile money, au Tchad ou au Niger", 'probleme' => "Situation type : la liste des bénéficiaires circule entre le projet, l'opérateur de paiement et les relais communautaires sous forme de fichiers Excel joints à des courriels, et des doublons apparaissent d'un cycle à l'autre.", 'solution' => "Une table d'identification unique, séparée de la table de paiement, un code par ménage, un contrôle des doublons avant chaque cycle, et un échange avec l'opérateur limité aux champs nécessaires. Les plaintes arrivent par une ligne dédiée et sont enregistrées dans un formulaire, sans liste nominative dans les groupes de messagerie."],
                ['secteur' => "Unité de gestion d'un projet multi-bailleurs, à Abidjan", 'probleme' => "Situation type : chaque rapport trimestriel mobilise l'équipe pendant deux semaines, parce que les fiches d'activité arrivent dans des formats différents et que les chiffres du narratif ne concordent pas avec le rapport financier.", 'solution' => "Une fiche d'activité unique sous forme de formulaire, une base qui alimente les indicateurs, un premier jet narratif préparé avec un assistant d'IA à partir des fiches anonymisées, puis une relecture croisée où chaque nombre renvoie à sa cellule. Le rapport financier et le narratif partagent le même tableau d'exécution."],
                ['secteur' => "Protection de l'enfance, en RD Congo", 'probleme' => "Situation type : les dossiers individuels d'enfants suivis contiennent des informations sur des violences subies, et les travailleurs sociaux partagent un seul compte sur l'ordinateur du bureau.", 'solution' => "Comptes nominatifs, droits par rôle, dossiers séparés des statistiques, aucune donnée de cas dans un outil d'IA en ligne, et un registre des accès. Les statistiques mensuelles envoyées au bailleur sont agrégées et ne permettent de reconnaître aucun enfant."],
                ['secteur' => "Association de solidarité internationale, à Lyon ou à Bruxelles, avec un partenaire à Cotonou", 'probleme' => "Situation type : l'association reçoit les données de bénéficiaires de son partenaire béninois pour ses rapports à un cofinanceur européen, sans règle écrite sur ce qui peut être transmis.", 'solution' => "Un accord de partage de données entre les deux structures, des indicateurs transmis sous forme agrégée, des données nominatives qui restent chez le partenaire, et une formation commune des deux équipes, à distance, sur les mêmes outils. L'association documente la formation de son personnel à l'IA, comme le demande l'article 4 du règlement européen."],
                ['secteur' => "Fondation qui finance des projets éducatifs, en Suisse", 'probleme' => "Situation type : la fondation reçoit les rapports d'une douzaine de partenaires dans des formats différents et ne peut pas comparer leurs résultats.", 'solution' => "Un formulaire de rapport commun, quelques indicateurs définis ensemble avec leur fiche de définition, une base consolidée et un tableau de suivi partagé. Les partenaires sont formés à remplir et à vérifier leurs données avant l'envoi, et les rapports narratifs gardent leur liberté de ton."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes une ONG utilise-t-elle, et que coûtent-ils aux organisations à but non lucratif ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, dans la devise affichée. L'éligibilité aux offres pour associations se vérifie organisation par organisation et pays par pays ; aucun outil n'est à acheter pour suivre la formation.",
            'entetes' => ['Outil ou système', 'Usage dans un projet', 'Coût ou condition relevés'],
            'lignes'  => [
                ["KoboToolbox", "Formulaires d'enquête, de suivi et de plaintes ; base de soumissions ; exports", "Offre Community gratuite pour les organisations à but non lucratif, les administrations, les organisations internationales et l'enseignement non lucratif : 5 000 soumissions par mois et 1 Go de fichiers. Au-delà, Professional à 159 dollars par mois et Teams à 289 dollars par mois dans la grille affichée pour ces organisations"],
                ["KoboCollect", "Collecte sur téléphone ou tablette Android, sans connexion une fois le formulaire téléchargé", "Application gratuite et open source ; pas de version iOS mentionnée dans la documentation"],
                ["DHIS2", "Système d'information sanitaire des ministères ; rapports de structures de santé ; programmes d'ONG", "Logiciel libre sous licence BSD, sans frais de licence ; utilisé par plus de 80 pays à revenu faible ou intermédiaire comme système de référence des données de santé, et dans plus de 100 pays avec les programmes d'ONG"],
                ["Google Workspace for Nonprofits", "Messagerie au nom de l'organisation, Drive, Sheets, Forms, Meet", "0 € par utilisateur et par mois ; Business Standard à 3,40 € et Business Plus à 5,91 € par utilisateur et par mois avec engagement d'un an ; remises limitées à 2 000 utilisateurs"],
                ["Microsoft 365 pour les associations", "Word, Excel, Outlook, Teams, OneDrive", "Business Premium proposé avec une remise de 75 % aux associations éligibles ; Microsoft 365 Copilot à 25,50 dollars par utilisateur et par mois, facturé annuellement"],
                ["Plateforme WhatsApp Business (API)", "Information des communautés, rappels, réception de plaintes", "1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026 ; les organisations à but non lucratif éligibles restent gratuites au-delà de ce quota jusqu'au 31 décembre 2027"],
                ["Odoo ou Dolibarr", "Comptabilité par projet et par bailleur, achats, immobilisations, pièces justificatives", "Odoo : une application gratuite, puis Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois ; Dolibarr : logiciel libre, hébergement et paramétrage à prévoir"],
                ["Publication IATI", "Publier les données d'activités et de dépenses selon le standard international de transparence de l'aide", "Outil en ligne IATI Publisher gratuit ; 1 846 organisations publient et 1 038 446 activités de développement et humanitaires sont publiées, selon la page d'accueil de l'IATI"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Collecte de terrain avec KoboToolbox : que faut-il décider avant la première enquête ?",
            'paragraphes' => [
                "Le premier choix est celui du serveur, et il engage pour longtemps. KoboToolbox propose deux serveurs publics : un serveur mondial, utilisé par la plupart des comptes, et un serveur de l'Union européenne, hébergé en Europe pour les organisations qui exigent ou préfèrent y garder leurs données. La documentation précise que les projets et les données ne peuvent pas être partagés d'un serveur à l'autre : tous les membres d'un projet doivent avoir leur compte sur le même. Une ONG européenne et son partenaire africain décident donc ensemble, avant de créer le premier formulaire.",
                "Le deuxième choix porte sur ce que l'on collecte. Un formulaire de cent quatre-vingts questions fatigue l'enquêteur et la personne interrogée, et produit des réponses de plus en plus approximatives au fil de l'entretien. La formation fait partir du cadre de résultats : chaque question doit servir un indicateur, une désagrégation demandée ou un contrôle. Les questions « au cas où » sont retirées. Le nom, le numéro de téléphone et la position GPS précise ne sont collectés que si une activité les rend indispensables, et jamais dans la même table que les réponses sensibles.",
                "Vient ensuite la robustesse. Les contraintes empêchent un âge de 140 ans ou une date de distribution future ; les listes de choix codées évitent dix orthographes du même village ; les questions conditionnelles n'affichent que ce qui concerne la personne. Le formulaire est testé sur les téléphones réels des enquêteurs, avec des batteries qui faiblissent et des écrans abîmés, puis dans une zone sans réseau. KoboCollect permet de remplir et finaliser les fiches hors connexion, puis de les envoyer en lot au retour du réseau ; encore faut-il que les équipes sachent vérifier qu'une fiche est bien partie.",
                "Le dernier point est l'organisation des comptes. Un compte partagé par toute l'équipe empêche de savoir qui a modifié quoi, et laisse l'accès ouvert après le départ d'un consultant. Chaque superviseur et chaque analyste reçoit son propre compte, avec des droits limités à ce qu'il doit voir. Les enquêteurs collectent sans accéder à la base. Le quota de l'offre gratuite, 5 000 soumissions par mois, se calcule avant une grande enquête : un projet qui le dépasse doit le savoir avant le premier jour de collecte, pas au milieu.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la chaîne de données d'un projet se construit-elle, du cadre de résultats au rapport ?",
            'items' => [
                ['titre' => "Une fiche de définition par indicateur", 'duree' => "Avant la collecte", 'texte' => "Pour chaque indicateur du cadre de résultats : définition exacte, numérateur et dénominateur, source, fréquence, désagrégation, responsable, valeur de référence et cible. C'est cette fiche qui permet à un nouveau chargé de suivi-évaluation de recalculer le chiffre sans deviner."],
                ['titre' => "Un formulaire par source de données", 'duree' => "1 à 2 semaines", 'texte' => "Enquête de ménages, fiche de présence aux formations, registre de distribution, fiche de plainte : chaque source devient un formulaire qui ne demande que ce que les fiches de définition exigent."],
                ['titre' => "Un test pilote sur le terrain", 'duree' => "2 à 3 jours", 'texte' => "Une demi-journée de collecte réelle avec quelques enquêteurs, puis correction des questions mal comprises, des listes incomplètes et des contraintes trop strictes. Les données du pilote sont supprimées avant la collecte réelle."],
                ['titre' => "Une formation des enquêteurs sur le formulaire final", 'duree' => "1 à 2 jours", 'texte' => "Lecture de chaque question, jeux de rôle, consentement, envoi des fiches, que faire en cas de refus ou d'incident. Les superviseurs apprennent à lire les premières soumissions le soir même."],
                ['titre' => "Un contrôle qualité quotidien", 'duree' => "Pendant toute la collecte", 'texte' => "Doublons, durées d'entretien anormales, réponses identiques en série, fiches envoyées depuis une autre zone : la liste des anomalies part chaque jour aux superviseurs, et les corrections sont notées dans un journal."],
                ['titre' => "Une base consolidée et documentée", 'duree' => "À la fin de chaque cycle", 'texte' => "Une seule base, un dictionnaire des variables, un journal des corrections, une copie datée et protégée. Les identifiants nominatifs sont séparés des réponses avant toute analyse."],
                ['titre' => "Des indicateurs calculés, pas recopiés", 'duree' => "Chaque mois ou chaque trimestre", 'texte' => "Les indicateurs sont recalculés à partir de la base selon leur fiche de définition, avec les désagrégations demandées. Les écarts avec la période précédente sont expliqués avant d'être rapportés."],
                ['titre' => "Un rapport vérifié, puis archivé", 'duree' => "À chaque échéance", 'texte' => "Le rapport cite des chiffres qui renvoient tous à la base. Il est archivé avec la version des données qui l'a produit, pour qu'un auditeur ou un évaluateur puisse refaire le chemin."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Rapports aux bailleurs : jusqu'où l'IA peut-elle aider, et où s'arrête-t-elle ?",
            'paragraphes' => [
                "Le rapport narratif est la tâche où l'IA fait gagner le plus de temps, et celle où elle fait courir le plus de risques. Un assistant comme ChatGPT, Claude, Gemini ou Copilot sait transformer vingt fiches d'activité en une section structurée, harmoniser le ton de contributions écrites par cinq personnes, raccourcir un texte à la longueur imposée par le modèle du bailleur, ou traduire une synthèse en anglais. Pour une équipe qui rédige dans sa deuxième ou troisième langue, ce soutien compte. La méthode de base de ces usages relève de la <a href=\"/formations/ia-en-entreprise\">formation IA en entreprise</a> ; ici, on l'applique aux exigences propres aux bailleurs.",
                "Le premier risque est le chiffre inventé. Un assistant à qui l'on demande de « rédiger les résultats du trimestre » complète volontiers les trous avec des nombres plausibles. La règle enseignée est stricte : l'assistant ne reçoit que des fiches anonymisées et un tableau d'indicateurs déjà calculé, et chaque nombre du texte final est pointé, ligne par ligne, contre la base. Un binôme relit en cherchant la source de chaque affirmation. Ce contrôle prend une heure ; une déclaration inexacte découverte à l'audit coûte beaucoup plus.",
                "Le deuxième risque touche à la parole des personnes. Les bailleurs apprécient les histoires de changement, et l'IA écrit volontiers des récits émouvants. Une histoire de bénéficiaire publiée doit pourtant avoir été racontée par la personne, recueillie avec son consentement écrit pour cet usage, et rapportée sans ajout. L'assistant peut corriger la syntaxe d'un témoignage recueilli ; il n'en crée pas. Les photos suivent la même règle, avec une vigilance particulière pour les enfants et les personnes exposées à des représailles.",
                "Le troisième risque est la cohérence. Le rapport narratif annonce des activités réalisées ; le rapport financier montre un taux d'exécution ; les deux doivent raconter la même histoire. La formation fait construire un tableau d'exécution commun, lu par le chargé de suivi-évaluation et par le responsable financier avant l'envoi. Pour les organisations qui publient leurs données selon le standard IATI, ces mêmes chiffres se retrouvent en ligne : la page d'accueil de l'IATI comptait le 5 octobre 2026 1 846 organisations publiant et plus d'un million d'activités publiées. Une incohérence y reste visible.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment tenir les finances d'un projet avec des outils numériques sans perdre la traçabilité ?",
            'paragraphes' => [
                "La gestion financière d'un projet ne ressemble pas à celle d'une entreprise. Le même salarié peut être payé par trois conventions, chacune avec ses lignes budgétaires, son taux de change, ses règles d'éligibilité des dépenses et sa date de clôture. L'outil doit donc permettre de rattacher chaque dépense à un bailleur, à un projet et à une ligne, ce que les logiciels de gestion font avec la comptabilité analytique. Odoo et Dolibarr le permettent tous deux ; le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> aide à choisir selon la taille de la structure.",
                "Dans l'espace OHADA, le référentiel comptable des ONG a changé. L'Acte uniforme relatif au système comptable des entités à but non lucratif, le SYCEBNL, adopté à Niamey le 22 décembre 2022, est entré en vigueur le 1er janvier 2024, et l'OHADA a publié un guide d'application. Le logiciel retenu doit pouvoir produire les états qu'il prévoit, en plus des rapports financiers propres à chaque bailleur. Ce paramétrage relève d'un projet d'intégration ; la formation, elle, apprend aux équipes à saisir, rattacher et contrôler correctement.",
                "La traçabilité se joue à la réception de chaque pièce. Une facture, un reçu, une liste de paiement de per diem ou un bordereau de transfert mobile money est numérisé le jour même, nommé selon une règle commune et rattaché à l'écriture. Les pièces papier restent classées dans le même ordre. Avant un audit, l'équipe n'a plus à reconstituer un dossier : elle le sort. Les paiements par mobile money, de plus en plus courants pour les participants aux activités, demandent leur propre contrôle : liste validée avant paiement, relevé de l'opérateur rapproché après.",
                "L'automatisation trouve ici des usages simples et sûrs : alerte quand une ligne budgétaire dépasse un seuil d'exécution, rappel des pièces manquantes à la fin du mois, tableau d'exécution par bailleur mis à jour chaque semaine. Les tableaux de bord eux-mêmes se construisent dans la <a href=\"/formations/power-bi-looker-studio\">formation aux tableaux de bord Power BI et Looker Studio</a>, et les classeurs de suivi budgétaire dans la <a href=\"/formations/excel-google-sheets\">formation Excel et Google Sheets pour la gestion</a>. La page métier ne fait qu'indiquer où ces outils s'insèrent dans la vie d'un projet.",
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour une équipe de projet, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation s'organise-t-elle dans un projet qui tourne déjà ?",
            'intro' => "Une équipe de projet n'a jamais trois jours libres. La formation s'insère dans son calendrier, au moment où elle sert : avant une enquête, avant un rapport, au démarrage d'une nouvelle convention.",
            'items' => [
                ['titre' => "Un groupe par fonction quand c'est utile", 'texte' => "Les coordinateurs et les chargés de suivi-évaluation suivent l'ensemble ; les responsables financiers rejoignent les demi-journées sur les rapports et les finances ; les superviseurs et enquêteurs suivent le formulaire, la protection des données et le contrôle qualité. Dix participants au plus par groupe."],
                ['titre' => "Le cadre de résultats réel du projet", 'texte' => "La matière vient du projet : son cadre logique, ses questionnaires, un rapport récent, son budget. Les exercices produisent des livrables que l'équipe garde : fiches de définition, formulaire testé, règle de conservation, charte d'usage."],
                ['titre' => "Des données neutralisées", 'texte' => "Aucune donnée nominative de bénéficiaire ne sert d'exercice. Le projet fournit des extraits anonymisés, ou le formateur prépare des jeux de données fictifs construits sur la structure réelle de la base."],
                ['titre' => "Les téléphones de l'équipe", 'texte' => "La collecte se pratique sur les appareils Android que les enquêteurs utiliseront, avec leurs limites. Un test en extérieur, sans réseau, fait partie du programme."],
                ['titre' => "Un calendrier qui respecte le terrain", 'texte' => "Les demi-journées peuvent s'étaler sur plusieurs semaines, hors des périodes de distribution, de collecte ou de clôture. À distance, les séances sont plus courtes et plus nombreuses."],
                ['titre' => "Des supports remis en fichiers modifiables", 'texte' => "Modèle de fiche de définition d'indicateur, formulaire d'exemple, liste de contrôle qualité, modèle de règle de conservation, grille de vérification d'un rapport, charte d'usage de l'IA, et une attestation de fin de formation pour chaque participant."],
                ['titre' => "Un suivi après la session", 'texte' => "La séance à un mois part du plan d'action et du premier formulaire mis en service. Entre-temps, les questions sur les outils peuvent être posées par courriel ou par WhatsApp, dans les conditions prévues au devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir selon l'organisation et le moment du projet ?",
            'legende' => "Le contenu s'adapte au format ; la règle des données neutralisées vaut partout.",
            'entetes' => ['Format', 'Pour quelle situation', 'Rythme habituel'],
            'lignes'  => [
                ["Intra, au bureau de coordination", "Une équipe de projet ou une ONG nationale qui veut revoir toute sa chaîne de données", "Trois journées, consécutives ou espacées d'une semaine, puis la séance de suivi"],
                ["Sur le terrain, avant une enquête", "Superviseurs et enquêteurs qui vont collecter avec un nouveau formulaire", "Une à deux journées centrées sur le formulaire, le consentement et le contrôle qualité"],
                ["À distance, sur plusieurs pays", "Une ONG présente dans plusieurs pays, ou une association européenne et ses partenaires africains", "Huit à dix séances de deux heures sur un mois, avec des exercices entre les séances"],
                ["Hybride", "Un siège en Europe et une équipe pays, ou un bureau national et des antennes", "Séances communes à distance, ateliers pratiques sur place"],
                ["Atelier de démarrage d'un projet", "Une nouvelle convention de financement, avant la première collecte", "Une à deux journées sur les fiches d'indicateurs, les formulaires et les règles de données"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment l'inscrire dans le budget du projet ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Le devis peut reprendre la présentation demandée par le bailleur pour une ligne de renforcement des capacités. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier du devis.",
            'items'      => [
                ['offre' => "Parcours complet de trois jours", 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur le cadre de résultats et les outils du projet", "Formulaire testé, fiches d'indicateurs et charte d'usage produits en séance", "Supports modifiables et attestations de fin de formation", "Séance de suivi à un mois"]],
                ['offre' => "Atelier de collecte avant une enquête", 'prix' => 'Sur devis', 'inclus' => ["Relecture du questionnaire et conversion en formulaire", "Formation des superviseurs et des enquêteurs", "Procédure de contrôle qualité quotidien"]],
                ['offre' => "Atelier rapports aux bailleurs et IA", 'prix' => 'Sur devis', 'inclus' => ["Méthode de rédaction assistée et de vérification", "Tableau d'exécution commun au narratif et au financier", "Règles d'usage de l'IA pour l'équipe"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, dix personnes au plus par groupe.",
                "La préparation sur mesure : lecture du cadre de résultats, conversion des questionnaires, jeux de données fictifs construits sur la base du projet.",
                "Le format et le lieu : bureau de coordination, site de terrain, visioconférence ; les déplacements hors de Cotonou sont chiffrés à part.",
                "La langue des supports, en français ou en anglais, pour une équipe ou un bailleur anglophone.",
                "Les exigences du bailleur : feuilles de présence, programme détaillé, attestations nominatives, présentation budgétaire.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels financements peuvent couvrir la formation d'une équipe d'ONG ?",
            'paragraphes' => [
                "Le plus souvent, c'est le budget du projet lui-même. Beaucoup de conventions comportent une ligne de renforcement des capacités des équipes ou des partenaires ; encore faut-il que la dépense y soit prévue, ou qu'une réallocation soit acceptée par le bailleur selon les règles de la convention. Le devis est rédigé pour être joint à cette demande, mais aucune prise en charge n'est promise sur cette page : la décision appartient au bailleur.",
                "Les fonds de formation continue s'appliquent selon le statut d'employeur de l'organisation. En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> indique que toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan de formation ; une ONG qui emploie du personnel vérifie si elle entre dans ce cas. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> finance la formation du personnel des entreprises et des membres d'organisations professionnelles. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle qu'un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds. Posez la question par écrit au fonds ou au bailleur, programme et devis joints, et construisez le budget sans compter sur un accord qui n'a pas été donné.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une liste de bénéficiaires est-elle la donnée la plus dangereuse d'un projet ?",
            'texte' => "Parce qu'elle dit qui est vulnérable, et où le trouver. Une liste de ménages déplacés, de personnes vivant avec une maladie, d'enfants suivis ou de survivantes de violences peut exposer ces personnes à la stigmatisation, à l'extorsion ou à des représailles si elle sort du cercle prévu. Le manuel du CICR sur la protection des données dans l'action humanitaire rappelle que protéger les données personnelles fait partie de la protection de la vie, de l'intégrité et de la dignité des personnes. La fuite vient souvent d'un fichier transféré dans un groupe de messagerie, d'un téléphone perdu ou d'un compte partagé. Avant de numériser une liste, demandez qui doit vraiment la voir, sous quelle forme, et pendant combien de temps.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs les équipes de projet commettent-elles en s'équipant, et comment les éviter ?",
            'intro' => "Ces erreurs reviennent d'une organisation à l'autre, quel que soit le pays ou le secteur. Chacune a une parade simple, que la formation fait mettre en place avant la fin de la session.",
            'items' => [
                ['titre' => "Le formulaire qui reprend tout le questionnaire papier", 'texte' => "Numériser un questionnaire trop long ne le raccourcit pas. On repart du cadre de résultats et l'on supprime chaque question qui ne sert ni un indicateur, ni une désagrégation, ni un contrôle."],
                ['titre' => "Un fichier par enquêteur", 'texte' => "Dix classeurs fusionnés à la main produisent des doublons et des colonnes décalées. Les données arrivent dans une seule base, par un formulaire, et personne ne les recopie."],
                ['titre' => "L'indicateur sans fiche de définition", 'texte' => "Au départ du chargé de suivi-évaluation, plus personne ne sait comment le taux était calculé. Chaque indicateur a sa fiche, rangée avec la base, et la lecture critique des chiffres se travaille dans la <a href=\"/formations/data-literacy\">formation décider avec les données</a>."],
                ['titre' => "Un compte partagé par toute l'équipe", 'texte' => "Impossible de savoir qui a modifié ou exporté quoi, et l'accès survit aux départs. Comptes nominatifs, droits par rôle, revue des accès à chaque changement d'équipe."],
                ['titre' => "L'offre gratuite choisie sans vérifier l'éligibilité", 'texte' => "Les offres pour associations dépendent du statut et du pays. Le 5 octobre 2026, la liste des pays affichée sur la page d'éligibilité de Google pour les associations comprenait la France, la Belgique, la Suisse et le Canada, mais aucun pays d'Afrique francophone. On vérifie avant de construire l'organisation sur un outil."],
                ['titre' => "Former le siège et oublier le terrain", 'texte' => "La qualité des données se joue au moment de la collecte. Les superviseurs et les enquêteurs sont formés au formulaire, au consentement et au contrôle quotidien, pas seulement les analystes."],
                ['titre' => "Laisser chaque projet choisir ses outils", 'texte' => "Trois projets, trois tableurs, trois messageries : l'organisation ne peut plus rien consolider. Les outils communs et la charte d'usage se décident au niveau de l'organisation ; le travail d'équipe au quotidien se règle dans la <a href=\"/formations/outils-collaboratifs\">formation aux outils collaboratifs</a>."],
                ['titre' => "Supprimer les données « plus tard »", 'texte' => "Les fichiers de bénéficiaires d'un projet clos restent sur des ordinateurs et des téléphones pendant des années. La règle de conservation fixe une date de suppression, et quelqu'un est chargé de la tenir."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue choisir selon le besoin de l'équipe ?",
            'legende' => "Les fiches détaillent chaque formation ; cette page indique seulement ce qu'elles apportent à une ONG ou à une unité de projet.",
            'entetes' => ['Formation', 'Ce qu\'elle apporte à un projet', 'Pour qui'],
            'lignes'  => [
                ['<a href="/formations/data-literacy">Décider avec les données (data literacy)</a>', "Lire un indicateur, un échantillon d'enquête ou un taux avant de le rapporter ou de décider", "Coordinateurs, chargés de suivi-évaluation, membres de conseils d'administration"],
                ['<a href="/formations/power-bi-looker-studio">Tableaux de bord Power BI et Looker Studio</a>', "Construire le tableau de suivi des indicateurs et de l'exécution budgétaire, mis à jour à partir de la base", "Chargés de suivi-évaluation, responsables financiers"],
                ['<a href="/formations/ia-en-entreprise">IA en entreprise</a>', "Utiliser les assistants pour rédiger, résumer et traduire, avec une méthode de vérification", "Toute l'équipe qui écrit : coordination, communication, programmes"],
                ['<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>', "Organiser les échéances de rapports, les tâches et les projets parallèles dans un outil partagé", "Coordinateurs et équipes de bureau"],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Approfondir les règles sur les données personnelles, les biais et le règlement européen sur l'IA", "Directions, responsables de protection des données, juristes"],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "Cartographier un circuit (recrutement, achats, plaintes) et l'outiller", "Responsables administratifs et de programmes"],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Tenir des classeurs fiables de suivi budgétaire et d'indicateurs", "Assistants administratifs et financiers, chargés de suivi-évaluation"],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Hameçonnage, mots de passe, double authentification, téléphones de terrain", "Toute l'équipe, y compris les enquêteurs"],
                ['<a href="/formations/chatbot-whatsapp">Chatbot WhatsApp et API WhatsApp Business</a>', "Informer les communautés et recevoir des plaintes par WhatsApp, avec les coûts et les limites", "Chargés de redevabilité et de communication"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langues, systèmes nationaux : que change le contexte d'intervention ?",
            'paragraphes' => [
                "La connexion décide de l'architecture. Dans beaucoup de zones d'intervention, le réseau est intermittent ou absent : le formulaire doit fonctionner hors connexion, les fiches s'envoient au retour au bureau, et l'équipe sait vérifier ce qui n'est pas parti. Les tableaux de suivi se consultent aussi en version légère ou en PDF, et les supports de formation sont remis en fichiers, pas seulement en liens. Une solution qui suppose une connexion permanente se révèle inutilisable au premier déplacement.",
                "Les langues aussi. Les questionnaires se posent souvent en fon, en wolof, en dioula, en lingala, en haoussa ou en arabe tchadien, alors que le formulaire est rédigé en français. KoboToolbox permet de déclarer plusieurs langues dans un même formulaire ; la traduction de chaque question se vérifie avec les enquêteurs, à voix haute, avant la collecte. Les rapports partent ensuite en français ou en anglais selon le bailleur : l'IA aide à traduire, une personne qui maîtrise la langue relit.",
                "Enfin, un projet ne travaille pas seul. Dans la santé, beaucoup de ministères utilisent DHIS2 comme système national : selon son éditeur, le centre HISP de l'université d'Oslo, plus de 80 pays à revenu faible ou intermédiaire s'en servent comme système de référence des données de santé. Un projet qui soutient des centres de santé alimente souvent ce système plutôt que d'en créer un parallèle. La formation fait identifier, dès le départ, les systèmes publics auxquels le projet doit se raccorder et les données qu'il doit y laisser à sa clôture.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre équipe de projet avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des équipes d'ONG et de projets de développement. Il connaît aussi ce milieu de l'intérieur : depuis mars 2026, il est volontaire au développement auprès du PNUD pour la RD Congo, dans le programme FIKIRI Ecosystem, où il travaille sur la plateforme Fikiri Loyalty et sur l'intégration d'un chatbot. Selon le PNUD, FIKIRI a été lancé le 11 décembre 2023 comme une plateforme numérique qui cartographie les solutions locales et innovantes de la RD Congo.",
                "Il n'est ni évaluateur ni spécialiste du suivi-évaluation, et la formation ne prétend pas l'être : il forme à l'usage des outils qui portent ce travail, formulaires, bases, tableurs, assistants d'IA, logiciels de gestion et automatisations, en partant de vos méthodes et de vos obligations envers les bailleurs. Il construit lui-même ce type d'outils : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé avec des organisations de " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il n'est certifié par aucun éditeur, ne cite aucune organisation formée et ne promet aucun résultat chiffré. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, et l'organisation commune à ses formations sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. Le <a href=\"/formations/\">catalogue des formations</a> présente les autres parcours.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre équipe de projet ?",
            'texte' => "Partez du cadre de résultats, pas de l'outil : chaque question collectée doit servir un indicateur, et chaque indicateur doit avoir sa fiche de définition. Collectez directement sur téléphone, dans une base unique, avec un contrôle qualité quotidien. Laissez l'IA préparer les textes, jamais les chiffres, et faites vérifier chaque nombre contre la base. Traitez les listes de bénéficiaires comme la donnée la plus sensible du projet, et formez le terrain autant que le bureau.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochain rapport ou votre prochaine enquête approche-t-il ?",
            'texte'  => "Décrivez votre projet, son bailleur, les outils que l'équipe utilise et l'échéance qui vous préoccupe. Vous recevez une réponse sous 24 heures, puis une proposition de cadrage gratuit et un devis détaillé, présenté si besoin selon le format demandé par votre bailleur.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon équipe de projet'],
        ],
    ],

    'faq' => [
        ['q' => "La formation remplace-t-elle une formation en suivi-évaluation ?", 'r' => "Non. Elle ne traite ni la conception d'un cadre logique, ni les méthodes d'évaluation, ni l'échantillonnage statistique d'une enquête. Elle forme aux outils qui portent ce travail : formulaires, bases, tableaux de suivi, assistants d'IA et logiciels de gestion. Les méthodes de suivi-évaluation propres à votre organisation ou à votre bailleur restent la référence."],
        ['q' => "Faut-il déjà utiliser KoboToolbox pour suivre la formation ?", 'r' => "Non. La prise en main se fait pendant la première après-midi, sur un compte de l'organisation ou un compte créé en séance. Les équipes qui l'utilisent déjà travaillent sur leurs formulaires existants pour les améliorer : contraintes, consentement, comptes et contrôle qualité."],
        ['q' => "KoboToolbox est-il vraiment gratuit pour une ONG ?", 'r' => "Sa page de tarifs indique, le 5 octobre 2026, une offre Community gratuite pour les organisations à but non lucratif, les administrations, les organisations internationales et l'enseignement non lucratif, avec 5 000 soumissions par mois et 1 Go de fichiers. Au-delà, des offres payantes existent à prix réduit pour ces organisations. Les entreprises privées n'ont pas accès à l'offre gratuite."],
        ['q' => "Peut-on utiliser ChatGPT ou un autre assistant pour rédiger les rapports aux bailleurs ?", 'r' => "Oui, pour préparer un premier jet, reformuler ou traduire, à partir de fiches anonymisées et d'un tableau d'indicateurs déjà calculé. Chaque chiffre est ensuite vérifié contre la base, et aucune donnée nominative de bénéficiaire n'entre dans l'assistant. Le comparatif ChatGPT, Claude et Gemini, relié en bas de page, aide à choisir l'outil."],
        ['q' => "Comment protéger les données des bénéficiaires quand on collecte sur téléphone ?", 'r' => "En collectant moins : seulement ce que le cadre de résultats exige. En séparant l'identité des réponses par un code. En donnant des comptes nominatifs et des droits limités. En verrouillant les téléphones de collecte, en choisissant le serveur avant le premier formulaire et en fixant une date de suppression. Ces règles sont rédigées pendant la deuxième matinée."],
        ['q' => "La formation peut-elle réunir une ONG européenne et ses partenaires africains ?", 'r' => "Oui, à distance ou en hybride. C'est souvent le meilleur moment pour décider ensemble du serveur de collecte, des données qui circulent sous forme agrégée et de celles qui restent chez le partenaire. Les supports peuvent être remis en français et en anglais."],
        ['q' => "Peut-on former les enquêteurs sur le terrain, loin de la capitale ?", 'r' => "Oui. L'atelier de collecte se tient là où l'enquête va se dérouler, sur les téléphones des enquêteurs, avec un test sans réseau. Les déplacements sont chiffrés à part dans le devis."],
        ['q' => "La formation couvre-t-elle la comptabilité SYCEBNL ?", 'r' => "Elle montre comment rattacher les dépenses à un bailleur, à un projet et à une ligne dans un logiciel de gestion, et comment tenir les pièces justificatives. Le paramétrage comptable complet relève d'un projet d'intégration d'Odoo ou de Dolibarr, et la tenue de la comptabilité de votre comptable ou de votre expert-comptable."],
        ['q' => "Richard a-t-il déjà formé des équipes d'ONG ?", 'r' => "Oui, Richard a déjà formé des équipes d'ONG et de projets de développement. Il est aussi, depuis mars 2026, volontaire au développement auprès du PNUD pour la RD Congo, dans le programme FIKIRI. Il ne cite aucune organisation formée."],
        ['q' => "Combien coûte la formation, et peut-elle être payée sur le budget du projet ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il peut être imputé sur une ligne de renforcement des capacités si la convention le permet ; c'est au bailleur d'en décider. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "KoboToolbox, tarifs et offres pour les organisations à but non lucratif (Community, Professional, Teams)", 'url' => 'https://www.kobotoolbox.org/pricing/', 'date' => '2026-10-05'],
        ['titre' => "KoboToolbox, documentation : créer un compte et choisir son serveur (serveur mondial ou de l'Union européenne)", 'url' => 'https://support.kobotoolbox.org/creating_account.html', 'date' => '2026-10-05'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-05'],
        ['titre' => "KoboToolbox, documentation : ajouter des traductions à un formulaire", 'url' => 'https://support.kobotoolbox.org/language_dashboard.html', 'date' => '2026-10-05'],
        ['titre' => "DHIS2, présentation de la plateforme (HISP Centre, université d'Oslo)", 'url' => 'https://dhis2.org/about/', 'date' => '2026-10-05'],
        ['titre' => "IATI, International Aid Transparency Initiative, page d'accueil (publieurs et activités publiées)", 'url' => 'https://iatistandard.org/en/', 'date' => '2026-10-05'],
        ['titre' => "CICR, Handbook on data protection in humanitarian action, 3e édition (page du 19 novembre 2024)", 'url' => 'https://www.icrc.org/en/data-protection-humanitarian-action-handbook', 'date' => '2026-10-05'],
        ['titre' => "CHS Alliance, Groupe URD et Sphere, norme humanitaire fondamentale CHS 2024", 'url' => 'https://www.corehumanitarianstandard.org/', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au système comptable des entités à but non lucratif (SYCEBNL)", 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-systeme-comptable-des-entites-a-but-non-lucratif/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, définition de la donnée sensible", 'url' => 'https://www.cnil.fr/fr/definition/donnee-sensible', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Autorité de protection des données personnelles du Bénin (APDP)", 'url' => 'https://apdp.bj/', 'date' => '2026-10-05'],
        ['titre' => "Google pour les associations, offres Google Workspace for Nonprofits", 'url' => 'https://www.google.com/intl/fr/nonprofits/offerings/workspace/', 'date' => '2026-10-05'],
        ['titre' => "Google pour les associations, critères d'éligibilité et pays", 'url' => 'https://www.google.com/intl/fr/nonprofits/eligibility/', 'date' => '2026-10-05'],
        ['titre' => "Microsoft pour les associations, solutions Microsoft 365", 'url' => 'https://www.microsoft.com/fr-fr/nonprofits/microsoft-365', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "PNUD RD Congo, le CINOLU et le PNUD lancent la cartographie des innovations à Lubumbashi (lancement de FIKIRI)", 'url' => 'https://www.undp.org/fr/drcongo/actualites/le-cinolu-et-le-pnud-lancent-la-cartographie-des-innovations-lubumbashi', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, financement de la formation professionnelle et technique", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite', 'digitalisation-processus'],
        'services'    => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
