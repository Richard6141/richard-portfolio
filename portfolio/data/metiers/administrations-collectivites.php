<?php
// ============================================================
// data/metiers/administrations-collectivites.php · Page « formations par
// métier » : administrations publiques et collectivités territoriales
// (vague 1C, univers « Secteur public et éducation », non prioritaire,
// statut F : Richard a déjà formé ce public).
// Angle propre : le service public vu du guichet et du bureau. Accueil des
// usagers, courrier et parapheur, état civil, actes et délibérations de la
// commune, marchés publics côté collectivité, données publiques et
// transparence, règles d'usage de l'IA par des agents qui décident au nom
// d'une autorité. La page enseignants-etablissements (classe, devoirs,
// élèves) et la page acheteurs (achat d'entreprise, analyse des offres)
// ne sont pas reprises ; les fiches digitalisation-processus,
// ia-ethique-conformite, conduite-du-changement et cybersecurite-employes
// sont citées et reliées, jamais répétées.
// Faits externes lus à la source le 05/10/2026 et le 06/10/2026 :
// loi béninoise n° 2017-20 (articles 266, 268, 269, 401, 411, PDF du SGG) ;
// loi béninoise n° 2021-14 portant code de l'administration territoriale
// (articles 76, 77, 108, 132, 180, 559, 560, PDF du SGG) ; portail
// service-public.bj (fiches PS00393 et PS00961, lues dans un navigateur) ;
// portail des marchés publics du Bénin ; RGPD articles 22 et 37 (CNIL) ;
// loi française n° 2016-1321, article 4 (Légifrance) ; guides de
// data.gouv.fr (mention explicite, qui est concerné par l'open data) ;
// collectivites-locales.gouv.fr (publicité des actes) ; service-public.gouv.fr
// (fiche F1427, vérifiée le 14 août 2026) ; ANSSI (synthèse de la menace sur
// les collectivités, 24 février 2025) ; AI Act Service Desk (annexe III,
// articles 27, 50 et 113, version consolidée au 27 juillet 2026) ; portail
// data.gouv.ci ; API publique de data.gouv.fr ; FDFP ; France Compétences ;
// « Faits déjà vérifiés » du catalogue (WhatsApp, Odoo, n8n, article 4).
// Neutralité (règle du 05/10/2026) : les textes sont cités pour ce qu'ils
// demandent aux agents, jamais jugés ; aucun classement, aucune critique.
// Richard n'est pas agent public : il forme à l'usage des outils.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les administrations et les collectivités : mieux accueillir les usagers, tenir le courrier, l'état civil et les marchés publics, publier des données fiables, et garder chaque décision entre les mains d'un agent",
    'title'   => "Formation IA administrations et mairies | Richard SALANON",
    'meta'    => "Former agents publics et équipes de mairie à l'IA et au numérique : accueil des usagers, courrier, état civil, marchés publics, données publiques.",
    'en_bref' => "Cette page s'adresse aux administrations centrales et déconcentrées, aux mairies, aux communes, aux agences et aux établissements publics qui veulent moderniser l'accueil des usagers, le courrier, l'état civil, la préparation des marchés et la publication des données, sans confier à une machine ce qui relève de l'autorité publique. Elle décrit ce que l'IA, la numérisation et l'automatisation changent au guichet et dans les bureaux, et ce qu'elles ne doivent jamais faire. Le parcours type compte cinq demi-journées et un suivi, sur les outils réels du service et des données fictives, dans vos locaux, en session commune, à distance ou en hybride, sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Secteur public et éducation',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : suivre une démarche de l'usager, du guichet jusqu'au carton d'archives",
            'duree'  => '3 h 30',
            'points' => [
                "Choix, avec les agents, de trois démarches fréquentes du service : une demande d'acte, une demande d'autorisation, un courrier de réclamation ; relevé de chaque étape réelle, avec ses délais et ses allers-retours.",
                "Inventaire des supports qui portent l'information : cahier d'arrivée, registre officiel, parapheur, tableur d'un agent, messagerie personnelle, groupe WhatsApp du service, armoire du secrétariat.",
                "Repérage des points de rupture : dossier perdu entre deux bureaux, usager qui revient trois fois, signature qui attend, pièce demandée deux fois.",
                "Classement des tâches en trois colonnes : ce qu'un outil peut exécuter seul, ce qu'il peut préparer pour un agent, ce qui reste un acte de l'autorité.",
                "Exercice : dessiner sur une seule page le circuit d'une démarche et y marquer les trois changements qui feraient gagner le plus de temps à l'usager.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : accueil des usagers, courrier entrant et réponses écrites",
            'duree'  => '3 h 30',
            'points' => [
                "Un registre numérique du courrier : numéro d'ordre, date d'arrivée, expéditeur, objet, service destinataire, échéance, état de la réponse ; le scan joint à la fiche, l'original rangé selon la règle.",
                "L'imputation et le visa : qui oriente, qui répond, qui signe ; relances automatiques avant l'échéance et tableau des courriers en retard pour le secrétariat général.",
                "Modèles de réponses types relus par le juriste ou le chef de service ; l'IA pour proposer un premier jet à partir d'un modèle vide, sans nom ni dossier d'usager.",
                "Le canal WhatsApp ou le standard du service : réponses rapides sur les horaires, les pièces et les coûts, renvoi vers l'agent pour tout cas particulier.",
                "Exercice : traiter dix courriers fictifs dans le registre, rédiger trois réponses à partir des modèles et mesurer le délai de chaque circuit.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : état civil, registres et délivrance des actes",
            'duree'  => '3 h 30',
            'points' => [
                "La chaîne d'un acte : déclaration, inscription au registre, signature de l'officier, mentions marginales, délivrance d'une copie ou d'un extrait, transmission aux autres services.",
                "Qui peut obtenir quoi : copie intégrale, extrait avec ou sans filiation, selon les règles du pays ; vérification de l'identité et du lien du demandeur, refus motivé.",
                "Numériser les registres anciens sans abîmer l'original : ordre de passage, nommage des fichiers, index, contrôle d'une page sur dix, conservation du registre papier.",
                "Ce qui ne sort jamais du service : registres, index nominatifs, pièces d'identité ; aucun acte réel dans un assistant en ligne, même pour corriger une faute.",
                "Exercice : construire l'index d'un registre fictif, retrouver un acte, préparer une délivrance et un refus, chacun avec sa trace.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : actes de la collectivité, marchés publics et archives",
            'duree'  => '3 h 30',
            'points' => [
                "Délibérations, arrêtés et procès-verbaux : modèles, numérotation, registre, affichage ou publication, copie remise à qui la demande.",
                "Marchés publics de la collectivité : plan de passation, dossiers types, calendrier, publication des avis, conservation du dossier complet de chaque marché.",
                "L'IA sur les pièces publiques ou vides : relire la clarté d'un cahier des charges, comparer deux versions d'un modèle, résumer un texte réglementaire publié ; jamais sur les offres reçues.",
                "Plan de classement et durée de conservation : ce qui part aux archives, ce qui se détruit, ce qui se garde au service, et qui en décide.",
                "Exercice : préparer le dossier d'une délibération fictive de bout en bout, de la convocation à la publication, puis classer le dossier d'un marché fictif.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : données publiques, tableaux de bord, charte d'usage de l'IA et plan d'action",
            'duree'  => '3 h 30',
            'points' => [
                "Les données que produit le service : registres, statistiques d'état civil, recettes, demandes traitées, délais ; ce qui peut être publié, ce qui doit être anonymisé, ce qui reste interne.",
                "Un tableau de bord de service sur un tableur : demandes reçues, délais de réponse, actes délivrés, courriers en retard, sans aucune donnée nominative.",
                "Les règles d'usage de l'IA du service : outils autorisés, informations interdites, relecture obligatoire, mention de l'usage d'un outil auprès de l'usager quand il le faut.",
                "Sécurité au quotidien : comptes nominatifs, double authentification sur la messagerie, sauvegardes hors ligne, conduite à tenir quand un poste se comporte mal.",
                "Plan d'action de six semaines : trois changements, un responsable et une date pour chacun, validés par le secrétaire général ou le chef de service.",
            ],
        ],
        [
            'titre'  => "Six semaines plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Revue du plan d'action, changement par changement : en place, en cours, bloqué, et pourquoi.",
                "Lecture du registre du courrier : délais réels, courriers en retard, relances qui ont fonctionné.",
                "Relecture des modèles de réponses et des messages d'accueil mis en service depuis la formation.",
                "Ajustement de la charte d'usage de l'IA à partir des situations rencontrées par les agents.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Secrétaires généraux et exécutifs, agents d'accueil et du courrier, officiers et agents d'état civil, cellules des marchés, archivistes, responsables informatiques et de la communication"],
        ['l' => 'Durée', 'v' => "2 jours et demi en cinq demi-journées de 3 h 30, plus 2 h de suivi à six semaines"],
        ['l' => 'Formats', 'v' => "Intra dans vos locaux, session commune à plusieurs collectivités, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour une administration ou une collectivité ?",
            'paragraphes' => [
                "Pour l'usager, le service public se résume souvent à une file d'attente, une pièce manquante et un « revenez la semaine prochaine ». Derrière le guichet, la cause est rarement la mauvaise volonté des agents. Elle tient au circuit : un courrier enregistré à la main dans un cahier, transmis de bureau en bureau, un registre qu'il faut feuilleter page par page, une signature qui attend le retour du responsable, un dossier qui dort dans l'armoire d'un agent en congé. Le numérique agit d'abord sur ces circuits, bien avant de toucher à l'intelligence artificielle.",
                "La digitalisation donne une trace à chaque demande. Un registre numérique du courrier indique à tout moment où se trouve une lettre, qui doit y répondre et depuis combien de jours elle attend. Un index des registres d'état civil retrouve un acte en quelques secondes au lieu d'une demi-journée. Les délibérations et les arrêtés suivent un modèle, une numérotation et un circuit de signature connus de tous. Rien de tout cela ne demande un grand logiciel : un tableur partagé bien tenu, une messagerie de service et quelques règles écrites suffisent à beaucoup de communes.",
                "L'automatisation prend ensuite le relais des tâches répétitives. Une relance part toute seule trois jours avant l'échéance d'un courrier ; l'accusé de réception d'une demande en ligne est envoyé sans intervention ; les questions fréquentes de l'accueil, sur les horaires, les pièces à fournir ou le coût d'un document, reçoivent une réponse type validée par le chef de service. Chaque minute ainsi rendue à l'agent se reporte sur les dossiers qui demandent vraiment son jugement.",
                "L'intelligence artificielle, enfin, aide surtout à l'écrit administratif : proposer le premier jet d'une réponse à partir d'un modèle, reformuler une note pour la rendre lisible, résumer un texte réglementaire publié, vérifier la clarté d'un cahier des charges. Elle n'a pourtant aucune autorité. Un acte d'état civil, une autorisation, un refus, une attribution de marché restent des décisions prises par une personne habilitée, qui les signe et en répond. La formation part de cette frontière et la rend concrète, poste par poste.",
                "Le dernier changement touche la confiance. Une administration détient des informations que personne d'autre ne détient : filiations, adresses, situations familiales, offres confidentielles des entreprises, données fiscales. Une fuite par un téléphone personnel, une messagerie piratée ou un assistant en ligne utilisé avec un compte privé n'expose pas seulement l'agent ; elle engage l'institution entière devant les usagers. Chaque demi-journée du parcours traite donc la protection de ces informations comme un geste de métier, et non comme une consigne affichée au mur.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et les outils numériques ne doivent-ils jamais faire dans un service public ?",
            'intro' => "Ces interdits ne viennent pas d'une méfiance envers la technique. Ils découlent des textes sur les données personnelles, des règles propres à l'action administrative et de la responsabilité de l'autorité qui signe. Pendant la formation, chaque service les réécrit avec ses propres exemples.",
            'items' => [
                ['titre' => "Prendre seul une décision individuelle", 'texte' => "Au Bénin, l'article 401 de la loi n° 2017-20 portant code du numérique interdit qu'une décision produisant des effets juridiques à l'égard d'une personne, ou l'affectant de manière significative, soit prise sur le seul fondement d'un traitement automatisé destiné à évaluer certains aspects de sa personnalité. L'article 22 du RGPD pose le même principe en Europe. Un outil peut trier, calculer ou préparer ; l'agent habilité examine et décide."],
                ['titre' => "Recevoir un registre, un fichier d'usagers ou un acte réel", 'texte' => "Un extrait d'acte de naissance, une liste de contribuables, une pièce d'identité scannée ou un dossier d'aide sociale n'entrent jamais dans un assistant en ligne ouvert avec un compte personnel, même « juste pour corriger l'orthographe ». Les essais se font sur des documents vides ou fictifs, ou dans un outil retenu par la direction, avec un contrat qui dit où vont les données."],
                ['titre' => "Délivrer un document à qui n'y a pas droit", 'texte' => "Les règles d'accès aux actes ne se négocient pas au guichet ni par message. En France, la fiche F1427 de service-public.gouv.fr, vérifiée le 14 août 2026, rappelle que toute personne peut obtenir un extrait d'acte de naissance sans filiation, mais que la copie intégrale et l'extrait avec filiation sont réservés à la personne, à ses proches désignés par la loi et aux professionnels autorisés. Un robot ou un agent pressé n'assouplit pas cette règle."],
                ['titre' => "Parler au nom de l'administration sans contrôle", 'texte' => "Une réponse donnée par un robot sur le site ou sur WhatsApp sera lue par l'usager comme une position officielle. Le robot ne répond qu'à partir de textes validés, renvoie vers un agent dès que la situation sort du cas général, et ne promet ni délai, ni droit, ni dérogation."],
                ['titre' => "Publier des données personnelles en croyant ouvrir des données publiques", 'texte' => "Une statistique de naissances par quartier peut être publiée ; le fichier des naissances, non. Les guides juridiques de data.gouv.fr rappellent que les documents contenant des données personnelles ou couvertes par un secret légal doivent être occultés ou anonymisés avant toute diffusion. La même prudence vaut pour un tableau partagé « à toute personne disposant du lien »."],
                ['titre' => "Remplacer le registre officiel par un fichier", 'texte' => "Le tableur, la base de données ou le logiciel aident à retrouver et à suivre. Ils ne remplacent pas le registre que la loi exige quand elle l'exige. En France, le registre des délibérations reste tenu sur papier, un registre numérique n'étant admis qu'à titre complémentaire, selon la page de collectivites-locales.gouv.fr consacrée à la publicité des actes."],
                ['titre' => "Faire circuler les offres des entreprises", 'texte' => "Au Bénin, l'article 67 de la loi n° 2020-26 portant code des marchés publics interdit à l'autorité contractante de divulguer les renseignements que les soumissionnaires lui ont confiés à titre confidentiel, dont leurs secrets techniques ou commerciaux. Une offre ne se transfère pas sur une messagerie personnelle et ne se colle pas dans un assistant pour « faire un résumé »."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels textes encadrent l'usage du numérique et de l'IA par une administration, et que demandent-ils aux agents ?",
            'legende' => "Repères lus dans les textes publiés par les autorités, au 5 octobre 2026. Ils se citent pour ce qu'ils exigent des services, se lisent à la source dans leur dernière version et ne remplacent ni le juriste de la collectivité, ni l'autorité de protection des données du pays.",
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Ce que le service en retient'],
            'lignes'  => [
                ["Loi n° 2017-20 du 20 avril 2018 portant code du numérique (Bénin), articles 266, 268 et 269", "Un acte juridique sous forme électronique a la même valeur que sur papier, sauf dispositions particulières ; la preuve électronique est admise si son auteur est identifiable et si elle est conservée dans des conditions qui en garantissent l'intégrité ; la conservation électronique doit garder les documents accessibles, dans leur format d'origine ou un format qui en garantit l'exactitude, avec leur origine et leurs dates", "Un courrier numérisé ou un acte signé électroniquement compte s'il est conservé proprement : format stable, date, origine, et aucune modification possible après coup"],
                ["Même loi, article 401", "Aucune décision produisant des effets juridiques à l'égard d'une personne, ou l'affectant de manière significative, ne peut être prise sur le seul fondement d'un traitement automatisé destiné à évaluer certains aspects de sa personnalité, sauf cadre prévu par un contrat ou un texte, avec des garanties et le droit pour la personne de faire valoir son point de vue", "Une note, un score ou un tri automatique éclaire l'agent ; il ne décide jamais à sa place"],
                ["Même loi, article 411", "Les traitements de données opérés pour le compte de l'État, d'un établissement public, d'une collectivité locale ou d'un gestionnaire de service public sont autorisés par décret pris en Conseil des ministres après avis motivé de l'Autorité, lorsqu'ils portent notamment sur le recensement, la filiation, la santé, les salaires, les pensions, les impôts et les taxes", "Un nouveau fichier d'état civil, de recettes ou de personnel ne se crée pas sur un coin de bureau : son cadre se vérifie avec la direction et l'APDP"],
                ["Loi n° 2021-14 du 20 décembre 2021 portant code de l'administration territoriale (Bénin), articles 132 et 560", "Le secrétaire exécutif, premier responsable de l'administration de la commune, gère l'information et la communication, organise la gestion des archives, publie les règlements, les délibérations et les travaux du conseil communal ; les formalités écrites prévues par la loi peuvent être accomplies par des moyens électroniques, dans les conditions du code du numérique", "La modernisation d'une mairie béninoise se pilote depuis le secrétariat exécutif, et le passage à l'électronique a une base légale"],
                ["Règlement général sur la protection des données (Union européenne), articles 22 et 37", "Droit de ne pas faire l'objet d'une décision fondée exclusivement sur un traitement automatisé produisant des effets juridiques ; désignation obligatoire d'un délégué à la protection des données lorsque le traitement est effectué par une autorité ou un organisme public, un seul délégué pouvant servir plusieurs organismes", "Chaque administration européenne a un délégué ; les communes rurales peuvent le partager, et il est le premier interlocuteur avant de lancer un outil d'IA"],
                ["Code des relations entre le public et l'administration (France), article L. 311-3-1, créé par l'article 4 de la loi n° 2016-1321 du 7 octobre 2016", "Une décision individuelle prise sur le fondement d'un traitement algorithmique comporte une mention explicite qui en informe l'intéressé ; les règles du traitement et ses principales caractéristiques lui sont communiquées s'il le demande", "Les guides de data.gouv.fr précisent qu'un classeur Excel est un traitement algorithmique : un barème calculé dans un tableur est concerné"],
                ["Règlement européen sur l'IA, annexe III, point 5 a), et article 27", "Sont à haut risque les systèmes d'IA utilisés par ou pour des autorités publiques afin d'évaluer l'éligibilité aux prestations et services d'assistance publique essentiels, ou de les accorder, réduire, révoquer ou récupérer ; les organismes de droit public qui les déploient réalisent au préalable une analyse d'impact sur les droits fondamentaux, applicable à partir du 2 décembre 2027 selon la version consolidée au 27 juillet 2026", "Un outil d'IA qui trie les demandes d'aide sociale n'est pas un gadget : il relève du régime le plus exigeant du règlement"],
                ["Même règlement, articles 4 et 50", "Obligation de maîtrise de l'IA pour les utilisateurs professionnels ; information des personnes qu'elles échangent avec un système d'IA, sauf évidence, et mention des textes générés par IA publiés pour informer le public sur des questions d'intérêt général, sauf relecture humaine sous responsabilité éditoriale", "Former les agents fait partie des obligations ; un robot d'accueil se présente comme tel"],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Un robot conversationnel peut-il répondre aux usagers au nom de la mairie ?",
            'texte' => "Oui, pour l'information générale, et à trois conditions. La première : il se présente comme un robot ; dans l'Union européenne, l'article 50 du règlement sur l'IA impose depuis le 2 août 2026 que les personnes sachent qu'elles échangent avec un système d'IA, et la loyauté le recommande ailleurs. La deuxième : il ne répond qu'à partir de fiches validées par le service, datées et tenues à jour, et renvoie vers un agent dès qu'une situation personnelle apparaît. La troisième : quelqu'un relit chaque semaine un échantillon de conversations. L'<a href=\"/histoires/air-canada-chatbot\">histoire du chatbot d'Air Canada</a> montre qu'une organisation reste tenue par ce que son assistant a affirmé, même à tort. Pour une administration, l'usager croit en plus lire la règle officielle.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Accueil et courrier : comment passer du cahier d'arrivée à un circuit numérique sans perdre la trace ?",
            'paragraphes' => [
                "Le courrier est la colonne vertébrale d'une administration. Dans beaucoup de services, il arrive encore par trois chemins à la fois : le dépôt au guichet, la poste ou le coursier, et désormais la messagerie et WhatsApp. Le cahier d'arrivée ne voit que le premier. Les deux autres finissent dans les boîtes personnelles des agents, sans numéro, sans échéance, et personne ne peut dire combien de demandes attendent une réponse. La première règle enseignée est donc simple : tout ce qui entre reçoit un numéro, quel que soit son canal.",
                "Le registre numérique reprend les colonnes du cahier et en ajoute deux qui changent tout : l'échéance de réponse et l'état du dossier. Il peut vivre dans un tableur partagé, dans le module documentaire d'un logiciel de gestion ou dans un outil de gestion électronique du courrier. L'agent du bureau d'ordre scanne la lettre, la joint à la fiche, l'impute au service compétent ; le secrétaire général voit chaque lundi la liste des courriers dont l'échéance approche. Le papier original, lui, suit la règle de classement et de conservation du service.",
                "Les réponses gagnent ensuite à partir de modèles. Une administration répond cent fois par an à la même demande d'information, à la même réclamation, à la même demande de pièce complémentaire. Des modèles validés par le chef de service, avec les références des textes, font gagner du temps et évitent qu'un usager reçoive deux réponses contradictoires. C'est là que l'IA est utile : proposer le premier jet d'un modèle, reformuler une note trop technique, vérifier qu'une lettre est compréhensible par quelqu'un qui n'est pas juriste. Les noms, les numéros de dossier et les situations personnelles sont ajoutés ensuite, par l'agent, dans l'outil du service.",
                "Le guichet, enfin, se prépare. Un usager qui sait avant de venir quelles pièces apporter et combien coûte le document revient une fois au lieu de trois. Une fiche par démarche, affichée, publiée sur le site ou envoyée en réponse rapide sur WhatsApp, règle une grande partie des allers-retours. La méthode de cartographie d'un circuit, plus générale, est l'objet de la <a href=\"/formations/digitalisation-processus\">formation digitalisation des processus métiers</a> ; ici, elle s'applique aux démarches que reçoit un service public.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches de l'accueil et du courrier confier à un outil, et lesquelles garder à l'agent ?",
            'legende' => "Grille de travail de la première journée. Chaque service la complète avec ses propres démarches, puis la fait valider par le secrétaire général ou le chef de service.",
            'entetes' => ['Tâche', 'Confiable à un outil ?', 'Règle à appliquer'],
            'lignes'  => [
                ["Numéroter et dater un courrier entrant", "Oui", "Le numéro est attribué à l'arrivée, quel que soit le canal ; il figure ensuite sur la réponse"],
                ["Accuser réception d'une demande en ligne", "Oui", "Message type avec le numéro, la date et le délai de traitement annoncé par le service, rien de plus"],
                ["Relancer avant l'échéance d'un courrier", "Oui", "La relance part vers l'agent imputé, avec copie à son chef de service au-delà d'un certain retard"],
                ["Répondre aux questions sur les horaires, les pièces, les coûts", "Oui, sur fiches validées", "Les fiches sont datées ; quand un tarif ou une pièce change, la fiche change le jour même"],
                ["Proposer le premier jet d'une réponse", "Oui, sur modèle vide", "Aucun nom ni numéro de dossier dans l'assistant ; l'agent complète, relit et fait signer"],
                ["Orienter un courrier vers le bon service", "En partie", "L'outil propose une imputation ; un agent du bureau d'ordre la confirme"],
                ["Statuer sur une demande, accorder ou refuser", "Non", "Décision de l'autorité compétente, motivée, signée et notifiée selon les règles du service"],
                ["Répondre à une réclamation sur un cas personnel", "Non", "Traitement par un agent, qui peut s'appuyer sur un modèle mais vérifie chaque élément du dossier"],
                ["Transmettre un document contenant des données personnelles", "Non, pas par une messagerie privée", "Canal du service uniquement, au seul destinataire qui y a droit, avec trace de l'envoi"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "État civil : que peut-on numériser, et que garde l'officier de l'état civil ?",
            'paragraphes' => [
                "L'état civil est le cœur administratif d'une commune. Au Bénin, l'article 108 de la loi n° 2021-14 portant code de l'administration territoriale fait du maire un officier d'état civil : il reçoit les déclarations de naissance et de décès, les fait enregistrer, célèbre les mariages et délivre les extraits ; l'article 180 donne la même qualité au chef d'arrondissement. Chaque geste de cette chaîne a une valeur juridique. Le numérique peut l'accélérer, la rendre plus sûre, mais il ne change ni l'officier compétent, ni la règle de délivrance, ni la valeur du registre.",
                "Les démarches en ligne se développent des deux côtés de la Méditerranée. Au Bénin, le portail national des services publics présente la délivrance d'un acte de naissance sécurisé par l'Agence nationale d'identification des personnes, pour 1 000 francs CFA et une durée estimée de 48 heures, sur présentation de la copie du récépissé RAVIP et de l'ancien acte. Le même portail permet de réserver un créneau de célébration de mariage civil auprès de plusieurs mairies. En France, la fiche F1427 de service-public.gouv.fr précise que la demande d'acte de naissance est gratuite, en ligne, par courrier ou en mairie, et met en garde contre les sites qui réclament une contrepartie financière.",
                "Pour les agents, ces services changent le travail plus qu'ils ne le suppriment. Les demandes arrivent plus nombreuses, plus vite, parfois avec des pièces illisibles, et l'usager attend une réponse rapide. La formation travaille donc la vérification : identité du demandeur, lien avec la personne concernée, type de document auquel il a droit, cohérence des informations, et motif écrit en cas de refus. Elle apprend aussi à répondre à l'usager qui ne comprend pas pourquoi son acte ancien n'est plus accepté, ou qui a payé un intermédiaire pour une démarche gratuite.",
                "Reste la numérisation des registres anciens, chantier fréquent dans les mairies. Elle se prépare comme un projet : ordre de passage des registres, matériel qui ne force pas les reliures, nommage des fichiers, index des actes, contrôle d'une image sur dix par un second agent, sauvegarde en deux lieux. Le registre papier ne se détruit pas parce qu'il a été scanné. Quant à l'IA de reconnaissance d'écriture, elle peut aider à construire un index, sur un outil maîtrisé par la commune ; chaque nom qu'elle propose reste vérifié par un agent avant d'entrer dans l'index officiel.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Marchés publics de la collectivité : où le numérique aide-t-il sans fragiliser la procédure ?",
            'paragraphes' => [
                "Côté collectivité, un marché public est d'abord un dossier qui doit être complet, daté et retrouvable des années plus tard. Au Bénin, l'article 10 de la loi n° 2020-26 portant code des marchés publics confie à la personne responsable des marchés publics, entre autres, la tenue des statistiques, la rédaction des rapports sur la passation et l'exécution, l'enregistrement de toutes les phases de la procédure et leur archivage par des méthodes modernes. Dans les communes autres que celles à statut particulier ou intermédiaire, l'article 559 du code de l'administration territoriale confie ce rôle au secrétaire exécutif de mairie, jusqu'à la mise en place des organes compétents, le maire étant l'autorité approbatrice.",
                "Le numérique sert d'abord ce dossier. Un plan de classement unique par marché, du plan de passation au procès-verbal de réception, avec les mêmes noms de fichiers d'une procédure à l'autre, évite les pièces introuvables lors d'un contrôle. Le portail des marchés publics du Bénin publie les plans de passation, les avis et les procès-verbaux d'attribution provisoire, et met à disposition des dossiers d'appel d'offres types et un référentiel des prix ; la formation montre aux agents comment s'en servir comme point de départ plutôt que de recopier le dossier de l'année précédente.",
                "L'IA trouve sa place sur les pièces publiques ou vierges : relire la clarté d'un cahier des charges avant publication, repérer une incohérence de dates entre l'avis et le règlement, comparer deux versions d'un modèle, résumer un texte réglementaire paru au journal officiel. Elle ne touche pas aux offres reçues, couvertes par l'obligation de confidentialité de l'article 67 du même code. L'analyse des offres et la négociation avec les fournisseurs, vues du côté de l'acheteur, ne sont pas traitées ici : la page se limite à ce que l'administration de la collectivité doit tenir, publier et conserver.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Données publiques et transparence : que publier, sous quelle forme, et que retirer avant ?",
            'paragraphes' => [
                "Une collectivité publie déjà beaucoup sans le savoir : relevés de décisions, arrêtés, budgets, avis de marchés, horaires et tarifs des services. Au Bénin, l'article 76 du code de l'administration territoriale prévoit qu'un relevé des décisions du conseil communal soit affiché à la mairie dans les huit jours suivant la séance, et l'article 77 donne à toute personne le droit de consulter sur place les procès-verbaux, les comptes rendus et les actes communaux, et d'en prendre copie à ses frais. En France, depuis le 1er juillet 2022, les actes réglementaires des communes sont publiés sous forme électronique sur leur site, les communes de moins de 3 500 habitants pouvant choisir un autre mode par délibération.",
                "Publier sous forme électronique ne veut pas dire déposer des photos de documents. Un procès-verbal scanné de travers, un budget en image ou un tableau verrouillé ne se lisent pas sur un téléphone et ne se réutilisent pas. Les guides de data.gouv.fr demandent des données dans un format ouvert, aisément réutilisable et exploitable par une machine. En France, l'obligation d'ouverture par défaut vise notamment les collectivités de plus de 3 500 habitants et de plus de 50 agents. Les exercices de la formation partent des documents réels du service, pour apprendre à produire une version lisible et une version réutilisable du même contenu.",
                "Avant toute publication, une question revient : qu'est-ce qui doit disparaître ? Noms et adresses des usagers, numéros de pièces d'identité, situations familiales, informations fiscales individuelles, secrets des entreprises. Les agents apprennent à occulter correctement, et non en posant un rectangle noir qu'un simple copier-coller fait disparaître, à agréger les chiffres trop fins pour qu'on ne reconnaisse personne dans une petite commune, et à garder une trace de ce qui a été publié, quand et par qui.",
                "Les données servent aussi au pilotage interne. Un tableau de bord tenu chaque mois, nombre de demandes, délai moyen de réponse, actes délivrés, courriers en retard, permet à un secrétaire général de voir où le service peine avant que les usagers ne s'en plaignent. Lire et questionner ces chiffres, sans leur faire dire plus qu'ils ne disent, est le sujet de la <a href=\"/formations/data-literacy\">formation décider avec les données</a> ; ici, l'équipe apprend à les produire proprement à partir de ses propres registres.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés un service public doit-il connaître avant de se numériser ?",
            'items' => [
                ['valeur' => '218', 'libelle' => "Incidents de cybersécurité affectant des collectivités territoriales traités par l'ANSSI en France de janvier à décembre 2024, soit 18 par mois en moyenne et 14 % de tous les incidents traités par l'agence (synthèse publiée le 24 février 2025)", 'source' => "ANSSI, collectivités territoriales, synthèse de la menace", 'url' => 'https://cert.ssi.gouv.fr/uploads/CERTFR-2025-CTI-002.pdf'],
                ['valeur' => '30 %', 'libelle' => "Part des événements signalés par les collectivités en 2024 qui étaient des compromissions de comptes de messagerie (66 cas) ; 25 incidents relevaient de rançongiciels, qui peuvent rendre indisponibles l'état civil, l'urbanisme ou les aides sociales (même synthèse)", 'source' => "ANSSI, collectivités territoriales, synthèse de la menace", 'url' => 'https://cert.ssi.gouv.fr/uploads/CERTFR-2025-CTI-002.pdf'],
                ['valeur' => '1 000 FCFA', 'libelle' => "Coût affiché pour la délivrance en ligne d'un acte de naissance sécurisé au Bénin, avec une durée estimée de 48 heures (fiche PS00393 du portail national des services publics, lue en octobre 2026)", 'source' => "Portail national des services publics du Bénin", 'url' => 'https://service-public.bj/public/services/service/PS00393'],
                ['valeur' => '206', 'libelle' => "Jeux de données publiés sur le portail officiel des données ouvertes de Côte d'Ivoire, avec 125 300 enregistrements et 339 visualisations (compteur de la page d'accueil, consulté en octobre 2026)", 'source' => "data.gouv.ci", 'url' => 'https://data.gouv.ci/'],
                ['valeur' => '74 603', 'libelle' => "Jeux de données référencés sur data.gouv.fr, publiés par 6 740 organisations (compteur de l'interface publique de la plateforme, consulté en octobre 2026)", 'source' => "data.gouv.fr", 'url' => 'https://www.data.gouv.fr/api/1/site/'],
                ['valeur' => '1 000', 'libelle' => "Messages de service WhatsApp gratuits par mois et par numéro professionnel depuis le 1er octobre 2026 ; les organisations gouvernementales éligibles restent gratuites au-delà de ce quota jusqu'au 31 décembre 2027 (page de tarification de Meta lue le 5 octobre 2026)", 'source' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans des administrations d'Afrique francophone et d'Europe ?",
            'items' => [
                ['secteur' => "Mairie d'une commune ordinaire, au Bénin", 'probleme' => "Situation type : le courrier est noté dans un cahier au secrétariat exécutif, les demandes arrivent aussi par WhatsApp sur les téléphones de trois agents, et personne ne sait combien de lettres attendent une réponse ni depuis quand.", 'solution' => "Un registre unique dans un tableur partagé, un numéro pour tout courrier quel que soit son canal, une imputation visée par le secrétaire exécutif, une relance automatique avant l'échéance, et un point hebdomadaire sur les retards en réunion de service."],
                ['secteur' => "Centre d'état civil d'arrondissement, en Afrique de l'Ouest", 'probleme' => "Situation type : retrouver un acte de 1998 prend une demi-journée de recherche dans des registres abîmés, et les usagers repartent souvent sans leur extrait.", 'solution' => "Numérisation progressive des registres les plus demandés, index tenu dans un fichier contrôlé par un second agent, sauvegarde en deux lieux, et registres papier conservés dans un local fermé ; la recherche d'un acte se fait d'abord dans l'index."],
                ['secteur' => "Direction déconcentrée d'un ministère, à Abidjan", 'probleme' => "Situation type : des agents collent des notes internes et des listes nominatives dans un assistant en ligne gratuit pour les reformuler, chacun avec son compte personnel.", 'solution' => "Inventaire des usages réels sans sanction, liste des informations interdites, modèles vides pour les notes récurrentes, choix par la direction d'un outil encadré par contrat, et règle écrite de relecture avant toute signature."],
                ['secteur' => "Service de l'urbanisme d'une ville, au Sénégal", 'probleme' => "Situation type : les demandeurs de permis reviennent plusieurs fois parce que la liste des pièces change selon l'agent qui les reçoit, et les dossiers incomplets bloquent l'instruction.", 'solution' => "Une fiche par démarche validée par le chef de service, publiée et envoyée en réponse rapide, une liste de contrôle à l'accueil avant tout dépôt, et un accusé de réception qui indique la date de dépôt du dossier complet."],
                ['secteur' => "Communauté de communes, en France", 'probleme' => "Situation type : après une compromission de messagerie dans une commune voisine, les élus veulent savoir si leurs agents sont prêts, et la direction doit aussi encadrer les premiers usages de l'IA générative.", 'solution' => "Double authentification sur toutes les messageries, exercice de repérage d'hameçonnage, vérification des sauvegardes hors ligne, charte d'usage de l'IA présentée au délégué à la protection des données mutualisé, et attestation de formation pour chaque agent."],
                ['secteur' => "Commune, en Wallonie", 'probleme' => "Situation type : la commune veut ouvrir un robot conversationnel sur son site pour les questions d'état civil et de population, mais personne n'a défini ce qu'il peut répondre.", 'solution' => "Une base de fiches validées et datées, un message d'accueil qui annonce un robot, un renvoi systématique vers un agent pour toute situation personnelle, aucune donnée de registre accessible au robot, et une relecture hebdomadaire d'un échantillon de conversations."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes une administration travaille-t-elle, et que faut-il en savoir ?",
            'legende' => "Coûts et conditions relevés le 5 octobre 2026 sur les pages des éditeurs et des organismes. La formation se fait sur les outils déjà en service ou sur des comptes de démonstration ; aucun achat n'est nécessaire pour la suivre.",
            'entetes' => ['Outil ou système', 'Usage dans le service', 'Coût ou condition relevés'],
            'lignes'  => [
                ["Tableur partagé (Excel ou Google Sheets)", "Registre du courrier, index d'archives, tableau de bord mensuel, suivi des délais", "Inclus dans les suites bureautiques ; droits d'accès nominatifs, jamais de lien ouvert à tous"],
                ["Logiciel de gestion électronique du courrier et des documents", "Enregistrement, imputation, visa, parapheur, recherche, conservation", "Prix propre à chaque éditeur ; vérifier l'hébergement, la sauvegarde et l'export des données en fin de contrat"],
                ["Logiciel d'état civil de l'éditeur ou de l'État", "Saisie des actes, mentions, délivrance des copies et extraits, statistiques", "Fourni ou imposé selon les pays ; la formation porte sur son bon usage, jamais sur son remplacement"],
                ["Portails publics de démarches en ligne", "Demandes d'actes et de rendez-vous, paiement, suivi par l'usager", "Au Bénin, service-public.bj ; en France, service-public.gouv.fr ; l'agent doit savoir ce que l'usager voit de son côté"],
                ["Portail des marchés publics", "Publication des plans de passation et des avis, dossiers types, référentiel des prix", "Au Bénin, marches-publics.bj et l'accès au SIGMaP ; ailleurs, la plateforme prévue par le code national"],
                ["Odoo ou Dolibarr", "Gestion des recettes, des achats, du stock et des documents d'un établissement public ou d'une régie", "Odoo : une application gratuite, Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; Dolibarr : logiciel libre"],
                ["n8n", "Relances automatiques, accusés de réception, liaisons entre formulaire, tableur et messagerie", "Version auto-hébergée sans frais de licence ; n8n Cloud Starter à 20 € par mois en paiement annuel pour 2 500 exécutions"],
                ["Application WhatsApp Business", "Réponses rapides sur les horaires, les pièces et les coûts, sur un téléphone du service", "Application gratuite, installée sur un appareil qui appartient à l'administration"],
                ["Plateforme WhatsApp Business (API)", "Notifications d'avancement d'une demande, robot d'information générale", "1 000 messages de service gratuits par mois et par numéro ; organisations gouvernementales éligibles gratuites au-delà jusqu'au 31 décembre 2027"],
                ["Assistants d'IA générative (ChatGPT, Claude, Gemini, Copilot)", "Premiers jets de modèles, reformulation, résumé de textes publiés", "Comptes gratuits interdits pour tout document du service ; offre professionnelle choisie par la direction, avec contrat sur l'usage des données"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'un service public, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles demi-journées suivre selon sa fonction dans l'administration ?",
            'legende' => "Proposition de départ, ajustée au cadrage. Le secrétaire général ou le chef de service suit de préférence l'ensemble du parcours, parce que les règles écrites demandent sa validation.",
            'entetes' => ['Fonction', 'Demi-journées conseillées', 'Ce que la personne sait faire à la fin'],
            'lignes'  => [
                ["Secrétaire général, secrétaire exécutif de mairie, chef de service", "Toutes", "Piloter le registre du courrier, valider les modèles et la charte d'usage de l'IA, suivre le tableau de bord mensuel"],
                ["Agents d'accueil, bureau d'ordre, standard", "Jour 1 matin et après-midi, jour 3 matin", "Enregistrer et imputer tout courrier, répondre avec les fiches validées, repérer un message d'hameçonnage"],
                ["Officiers et agents d'état civil", "Jour 1 matin, jour 2 matin, jour 3 matin", "Vérifier un droit d'accès, tenir un index, préparer une numérisation contrôlée, refuser par écrit"],
                ["Cellule des marchés, service financier", "Jour 1 matin, jour 2 après-midi, jour 3 matin", "Classer le dossier complet d'un marché, utiliser les dossiers types, protéger les offres reçues"],
                ["Archiviste, documentaliste", "Jour 2 matin et après-midi, jour 3 matin", "Appliquer un plan de classement, des durées de conservation et un nommage de fichiers commun"],
                ["Responsable informatique, chargé de communication", "Jour 1 après-midi, jour 3 matin", "Paramétrer les relances et les réponses rapides, publier des données lisibles et réutilisables, sécuriser les comptes"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation s'organise-t-elle sans fermer le guichet ni exposer les usagers ?",
            'intro' => "Un service public reste ouvert pendant qu'il se forme. Le calendrier, la composition des groupes et le matériel des exercices sont pensés pour respecter la continuité du service et le secret des informations détenues.",
            'items' => [
                ['titre' => "Un guichet qui reste tenu", 'texte' => "Les agents d'accueil et d'état civil se forment en deux vagues, pour qu'une équipe reste toujours au guichet. Les séances se placent sur les plages de moindre affluence, en début d'après-midi ou sur une matinée de fermeture au public quand le service en a une."],
                ['titre' => "Des données entièrement fictives", 'texte' => "Les courriers, les actes, les registres et les dossiers de marché utilisés en exercice sont fabriqués pour l'occasion, sur le modèle exact des documents du service. Le formateur ne consulte aucun registre réel, aucun fichier d'usagers et aucune offre d'entreprise, et ne demande aucun mot de passe."],
                ['titre' => "Les outils déjà en service", 'texte' => "Le tableur, la messagerie, le logiciel de courrier ou d'état civil, le portail de démarches et le téléphone du service servent de support, sur un environnement de test quand l'éditeur en propose un. Une administration qui change d'outil place la formation juste avant la mise en service."],
                ['titre' => "La hiérarchie dans la salle", 'texte' => "Les règles d'usage, les modèles de réponses et le plan de classement engagent l'autorité. Le secrétaire général ou un chef de service participe aux séances où ils se décident, pour que les productions de la formation soient applicables le lendemain sans nouveau circuit de validation."],
                ['titre' => "Des groupes de douze au plus", 'texte' => "Au-delà, les exercices pratiques deviennent des démonstrations. Une grande administration organise plusieurs groupes, par direction ou par fonction, avec une séance commune de clôture sur les règles."],
                ['titre' => "Des supports remis en fichiers modifiables", 'texte' => "Modèle de registre du courrier, grille des tâches automatisables, fiches de démarches, procédure de délivrance d'un acte, plan de classement d'un marché, charte d'usage de l'IA, tableau de bord type et attestation de fin de formation pour chaque agent."],
                ['titre' => "Un suivi à six semaines", 'texte' => "La séance de suivi part du registre du courrier et du plan d'action. Entre-temps, les questions d'usage des outils peuvent être posées par courriel ou par WhatsApp, dans les conditions prévues au devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une mairie, une direction ou un réseau de collectivités ?",
            'legende' => "Le contenu s'adapte au format ; la règle des données fictives s'applique partout.",
            'entetes' => ['Structure', 'Format conseillé', 'Rythme habituel'],
            'lignes'  => [
                ["Petite commune ou mairie d'arrondissement", "Intra, dans les locaux, avec tout le personnel administratif", "Trois ou quatre demi-journées centrées sur le courrier, l'état civil et la sécurité, espacées d'une semaine"],
                ["Commune à statut particulier, grande ville", "Intra, par groupes de fonction", "Le parcours complet sur trois semaines, en alternant les groupes pour garder le guichet ouvert"],
                ["Plusieurs communes d'un même département ou d'une intercommunalité", "Session commune en inter-collectivités", "Séances communes sur les règles et les outils, puis une demi-journée par commune sur ses propres circuits"],
                ["Direction centrale ou déconcentrée d'un ministère, agence publique", "Intra ou hybride", "Le parcours adapté aux procédures de la direction, avec une séance réservée aux responsables sur la charte d'usage de l'IA"],
                ["Services répartis sur plusieurs sites ou pays", "Hybride", "Séances à distance en petits groupes, ateliers pratiques sur le site principal, suivi commun"],
                ["Lancement d'un nouvel outil (courrier, état civil, portail)", "Atelier ciblé, sur place", "Une journée sur le circuit, les droits d'accès, les modèles et la conduite en cas de panne, avant la bascule"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'un service public, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun tarif n'est affiché sur cette page. Le premier échange, le cadrage et le devis ne coûtent rien ; la réponse arrive sous 24 heures et la proposition chiffrée suit le cadrage. Le devis reprend le programme et la liste des livrables, pour faciliter son instruction par votre service financier. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier convenu.",
            'items'      => [
                ['offre' => "Parcours complet de deux jours et demi", 'prix' => 'Sur devis', 'inclus' => ["Cinq demi-journées sur les circuits et les outils du service", "Registre du courrier, fiches de démarches et charte d'usage de l'IA produits en séance", "Supports modifiables et attestation pour chaque agent", "Séance de suivi à six semaines"]],
                ['offre' => "Atelier courrier et accueil", 'prix' => 'Sur devis', 'inclus' => ["Registre numérique et règles d'imputation", "Modèles de réponses et réponses rapides validés", "Relances avant échéance"]],
                ['offre' => "Atelier état civil et archives", 'prix' => 'Sur devis', 'inclus' => ["Règles de délivrance écrites", "Méthode de numérisation contrôlée et index", "Plan de classement et sauvegardes"]],
            ],
            'variations' => [
                "Le nombre d'agents et de groupes, douze personnes au plus par groupe.",
                "La préparation sur mesure : étude des circuits du service, fabrication de documents fictifs à l'identique des vôtres.",
                "Le lieu : dans vos locaux, en session commune, en visioconférence ; les déplacements hors de Cotonou sont chiffrés à part.",
                "Le nombre de sites et la composition en vagues pour garder le guichet ouvert.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment une administration ou une collectivité peut-elle financer la formation de ses agents ?",
            'paragraphes' => [
                "Une administration finance d'ordinaire la formation de ses agents sur son propre budget, au titre de son plan de formation ou d'une ligne de renforcement des capacités, et l'achat suit ses règles de dépense publique. Une commune béninoise l'inscrit dans son budget communal ; une direction ministérielle, dans les crédits de son ministère ; un projet de modernisation financé par un partenaire peut prévoir un volet de formation que le devis vient alors justifier. Le programme demi-journée par demi-journée de cette page est fourni pour constituer le dossier.",
                "Les fonds de formation continue alimentés par les taxes des employeurs ont souvent un champ précis. En Côte d'Ivoire, la page du FDFP consacrée au plan de formation ouvre le dépôt à toute entreprise qui justifie du paiement régulier des deux taxes : un établissement public ou une société d'économie mixte vérifie donc sa situation auprès du fonds. En France, France Compétences rappelle que, depuis le 1er janvier 2022, seuls les prestataires certifiés Qualiopi accèdent aux fonds publics ou mutualisés. Richard SALANON ne détient pas cette certification et n'est agréé par aucun fonds : aucune prise en charge n'est promise ici, et la réponse écrite de l'organisme financeur fait foi.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs les services publics commettent-ils en se numérisant, et comment les éviter ?",
            'intro' => "Ces erreurs se retrouvent d'une mairie rurale à une direction centrale. Aucune n'est technique au départ : toutes viennent d'une règle qui n'a pas été écrite ou d'un circuit qui n'a pas été redessiné.",
            'items' => [
                ['titre' => "Acheter un logiciel avant de redessiner le circuit", 'texte' => "Un circuit confus reste confus dans un logiciel, avec en plus des écrans à remplir. Le circuit se simplifie d'abord sur papier, avec les agents ; l'outil vient ensuite."],
                ['titre' => "Laisser le courrier numérique hors du registre", 'texte' => "Les courriels et les messages WhatsApp échappent au cahier d'arrivée, donc au suivi. Tout ce qui entre reçoit un numéro, quel que soit son canal."],
                ['titre' => "Traiter les demandes depuis des comptes personnels", 'texte' => "L'agent qui part emporte l'historique des échanges avec les usagers. Adresses et numéros de service, rattachés à la fonction et non à la personne."],
                ['titre' => "Scanner sans index ni contrôle", 'texte' => "Des milliers d'images mal nommées ne valent guère mieux qu'une armoire. Un nommage commun, un index et un contrôle par échantillon, dès le premier registre."],
                ['titre' => "Croire l'assistant sur un point de droit", 'texte' => "Un assistant cite parfois un article qui n'existe pas ou un texte abrogé. Toute référence juridique se vérifie dans le texte publié, dans sa dernière version."],
                ['titre' => "Publier des tableaux qui permettent de reconnaître les gens", 'texte' => "Dans une petite commune, trois naissances dans un quartier suffisent à identifier les familles. On agrège, on arrondit, et un second agent relit avant publication."],
                ['titre' => "Négliger la messagerie", 'texte' => "En 2024, la compromission d'un compte de messagerie était l'incident le plus fréquent parmi ceux que les collectivités françaises ont portés à la connaissance de l'ANSSI. Double authentification pour tous, et un réflexe de vérification par téléphone avant tout changement de coordonnées bancaires d'un fournisseur."],
                ['titre' => "Former les cadres et oublier le guichet", 'texte' => "Les règles se décident en réunion de direction, mais elles s'appliquent à l'accueil, au bureau d'ordre et à l'état civil. Ces agents suivent les demi-journées qui les concernent, avec les mêmes exemples."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour un service public ?",
            'legende' => "Les fiches détaillent chaque formation ; ce tableau indique seulement ce qu'elles apportent à une administration ou à une collectivité.",
            'entetes' => ['Formation', 'Ce qu\'elle apporte au service', 'Pour qui'],
            'lignes'  => [
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "La méthode complète pour cartographier une démarche, la simplifier et choisir l'outil qui la porte", "Secrétariat général, chefs de service, responsables qualité"],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Les réglages des assistants, les informations interdites, les biais et le droit applicable, pour chaque agent qui écrit avec l'IA", "Tous les agents qui rédigent"],
                ['<a href="/formations/conduite-du-changement">Conduite du changement numérique</a>', "Faire adopter un nouvel outil par des équipes installées : communication, relais, accompagnement des agents réticents", "Encadrement, porteurs de projets de modernisation"],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Hameçonnage, mots de passe, double authentification, téléphones et clés USB du service", "Tous les agents, accueil compris"],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', "Charte, inventaire des usages, rôles et contrôle de l'IA à l'échelle d'une institution", "Direction, délégué à la protection des données, référent numérique"],
                ['<a href="/formations/data-literacy">Décider avec les données</a>', "Lire un tableau de bord, questionner un chiffre, éviter les conclusions hâtives", "Élus délégués, secrétaires généraux, cadres"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Électricité, connexion, archives papier : que change le terrain pour un service public ?",
            'paragraphes' => [
                "Un service public ne peut pas fermer parce que le réseau est coupé. Chaque circuit numérique enseigné a donc sa marche dégradée : un cahier de secours au bureau d'ordre, des formulaires papier d'état civil prêts à l'emploi, la liste des courriers en cours imprimée chaque vendredi, et une personne désignée pour reporter dans l'outil, au retour du réseau, tout ce qui a été fait à la main. L'ANSSI décrit, dans sa synthèse du 24 février 2025, des collectivités contraintes après une attaque de basculer vers un fonctionnement dégradé, voire manuel, parfois pendant plusieurs mois ; la même préparation sert face à une panne ordinaire.",
                "Les sauvegardes suivent la même logique. Un registre numérisé qui n'existe que sur l'ordinateur du bureau d'état civil disparaît avec lui. La règle enseignée tient en trois points : une copie sur un support débranché après chaque sauvegarde, une copie dans un autre bâtiment ou chez un hébergeur retenu par la direction, et un essai de restauration au moins une fois par trimestre. L'<a href=\"/histoires/maersk-notpetya\">histoire de Maersk face à NotPetya</a> montre une reprise qui n'a tenu qu'à un serveur resté hors ligne par hasard : une copie débranchée doit être prévue, pas espérée.",
                "La langue compte aussi. Une fiche de démarche rédigée dans un français administratif dense n'aide pas l'usager qui lit peu. Les modèles produits en formation sont relus pour être compris du premier coup, et le service peut prévoir une version orale en langue nationale pour les réponses vocales sur WhatsApp, enregistrée par un agent qui la parle. Enfin, chaque pays a son autorité de protection des données : l'APDP au Bénin, l'ARTCI en Côte d'Ivoire, la CDP au Sénégal, la CNIL en France, l'Autorité de protection des données en Belgique. La formation indique laquelle consulter, sans se substituer à elle.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre administration ou votre collectivité avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des agents d'administrations et des équipes de collectivités à l'usage des outils numériques et de l'IA. Il n'est pas agent public, ne remplace ni le juriste de la collectivité ni l'autorité de protection des données, et ne valide aucun acte : il apprend aux équipes à organiser leurs circuits, à se servir correctement de leurs outils et à poser des règles claires sur l'IA, que l'autorité adopte ensuite.",
                "Développeur, il construit des formulaires en ligne, des applications avec comptes et droits d'accès, des automatisations reliées à WhatsApp et des intégrations d'IA ; il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a>. Il connaît donc ce qu'un robot peut répondre seul, ce qu'il ne doit jamais toucher, et les réglages qu'un paramétrage par défaut laisse ouverts.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il exerce dans le numérique depuis " . $ans . " ans ; il indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et être intervenu dans " . count((array) fait('pays_travailles')) . " pays. Il n'est certifié par aucun éditeur, ne cite aucune institution formée et n'annonce aucun gain chiffré. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, ses pays d'intervention sur celle des <a href=\"/zones/\">zones</a>, l'organisation commune de ses sessions sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et ses autres parcours dans le <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de lancer la formation de vos agents ?",
            'texte' => "Donnez un numéro à tout ce qui entre, quel que soit le canal. Écrivez qui peut obtenir quel document, et appliquez-le au guichet comme en ligne. Numérisez avec un index et un contrôle, sans jamais détruire le registre. Laissez l'IA travailler sur des modèles vides et des textes publiés, jamais sur un acte, un fichier d'usagers ou une offre. Gardez chaque décision entre les mains de l'agent habilité, qui la signe. Protégez d'abord la messagerie, puis vérifiez que vos sauvegardes se restaurent.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre service veut-il réduire ses délais sans perdre la maîtrise de ses actes ?",
            'texte'  => "Décrivez votre administration ou votre collectivité, le nombre d'agents concernés, les outils en service et la démarche qui vous pose le plus de difficultés. La réponse arrive sous 24 heures, avec une proposition de cadrage gratuit, puis un devis détaillé et un calendrier compatible avec l'ouverture au public.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former les agents de mon service'],
        ],
    ],

    'faq' => [
        ['q' => "La formation apprend-elle à faire prendre des décisions administratives par l'IA ?", 'r' => "Non. Elle apprend à confier à des outils les tâches de préparation, d'enregistrement, de relance et de rédaction de premiers jets, et à garder chaque décision individuelle entre les mains de l'agent habilité. Au Bénin, l'article 401 de la loi n° 2017-20 interdit qu'une décision produisant des effets juridiques repose sur le seul fondement d'un traitement automatisé évaluant la personnalité ; l'article 22 du RGPD pose une règle voisine en Europe."],
        ['q' => "Le formateur aura-t-il accès à nos registres, à nos fichiers d'usagers ou à nos dossiers de marchés ?", 'r' => "Non. Tous les exercices se font sur des documents fictifs, fabriqués sur le modèle exact des vôtres, ou sur l'environnement de test de votre éditeur. Le formateur ne consulte ni registre réel, ni fichier nominatif, ni offre d'entreprise, et ne demande aucun mot de passe."],
        ['q' => "Nos agents peuvent-ils utiliser ChatGPT ou un autre assistant pour rédiger leurs courriers ?", 'r' => "Pour des modèles vides, des reformulations de notes générales ou des résumés de textes publiés, oui. Avec un nom d'usager, un numéro de dossier, un acte ou une liste nominative, non, surtout avec un compte gratuit ou personnel. Si l'administration veut aller plus loin, la direction choisit un outil encadré par un contrat, et chaque courrier reste relu et signé par l'agent compétent."],
        ['q' => "Faut-il un logiciel de gestion du courrier pour commencer ?", 'r' => "Non. Un tableur partagé, avec des droits nominatifs et quelques colonnes bien choisies, suffit à tenir un registre fiable et à suivre les échéances dans une petite ou moyenne commune. Le logiciel spécialisé devient utile quand le volume, le nombre de services ou les circuits de signature l'exigent ; la formation aide alors à formuler le besoin."],
        ['q' => "Une mairie peut-elle répondre aux usagers par WhatsApp ?", 'r' => "Oui, depuis un numéro et un appareil qui appartiennent à la mairie, avec des réponses rapides validées sur les horaires, les pièces et les coûts, et un renvoi vers un agent pour toute situation personnelle. Les envois automatisés passent par la plateforme de Meta ; selon sa page de tarification lue le 5 octobre 2026, les organisations gouvernementales éligibles restent gratuites au-delà du quota mensuel jusqu'au 31 décembre 2027. Aucun acte ni document nominatif ne s'envoie par ce canal."],
        ['q' => "Peut-on numériser les registres d'état civil et détruire les originaux ?", 'r' => "La numérisation améliore la recherche et protège les registres de la manipulation, mais elle ne les remplace pas : le registre papier reste conservé selon les règles du pays. La formation montre comment numériser avec un index, un contrôle par échantillon et des sauvegardes en deux lieux, sans jamais présenter l'image comme l'acte lui-même."],
        ['q' => "Un robot conversationnel sur notre site peut-il renseigner les usagers ?", 'r' => "Oui, sur l'information générale, à partir de fiches validées et datées, avec un message qui annonce clairement un robot et un renvoi vers un agent dès qu'un cas personnel apparaît. Dans l'Union européenne, l'article 50 du règlement sur l'IA impose depuis le 2 août 2026 d'informer les personnes qu'elles échangent avec un système d'IA, sauf évidence."],
        ['q' => "La formation couvre-t-elle les marchés publics ?", 'r' => "Elle couvre ce que l'administration de la collectivité doit tenir : plan de passation, dossiers types, publication, dossier complet et archivage de chaque marché, protection des offres reçues. Elle ne traite pas l'analyse des offres ni la négociation avec les fournisseurs, et ne remplace ni la personne responsable des marchés publics ni les organes de contrôle prévus par le code national."],
        ['q' => "Les élus doivent-ils participer ?", 'r' => "Ce n'est pas obligatoire, mais un élu délégué à l'administration ou au numérique gagne à suivre la première matinée et la dernière, où se décident les priorités, les règles d'usage de l'IA et le tableau de bord. Les règles adoptées par l'autorité s'appliquent ensuite plus facilement dans les services."],
        ['q' => "Richard a-t-il déjà formé des agents publics ?", 'r' => "Oui, Richard a déjà formé des agents d'administrations et des équipes de collectivités. Il ne cite aucune institution formée, n'exerce aucune fonction publique et forme uniquement à l'usage des outils numériques et de l'IA."],
        ['q' => "Combien coûte la formation, et comment la payer ?", 'r' => "Le prix est établi sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Il dépend du nombre d'agents et de groupes, de la préparation sur vos circuits, du lieu et du nombre de sites. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 266, 268, 269, 401 et 411)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2021-14 du 20 décembre 2021 portant code de l'administration territoriale (articles 76, 77, 108, 132, 180, 559 et 560)", 'url' => 'https://sgg.gouv.bj/doc/loi-2021-14/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2020-26 du 29 septembre 2020 portant code des marchés publics (articles 10 et 67)", 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/', 'date' => '2026-10-05'],
        ['titre' => "Portail national des services publics du Bénin, délivrance d'acte de naissance sécurisé, fiche PS00393", 'url' => 'https://service-public.bj/public/services/service/PS00393', 'date' => '2026-10-05'],
        ['titre' => "Portail national des services publics du Bénin, demande de célébration de mariage, fiche PS00961", 'url' => 'https://service-public.bj/public/services/service/PS00961', 'date' => '2026-10-05'],
        ['titre' => "Portail des marchés publics du Bénin (plans de passation, avis, dossiers types, référentiel des prix, accès au SIGMaP)", 'url' => 'https://www.marches-publics.bj/', 'date' => '2026-10-05'],
        ['titre' => "Autorité de protection des données personnelles du Bénin (APDP)", 'url' => 'https://apdp.bj/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre III (article 22)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre IV (article 37)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, loi n° 2016-1321 du 7 octobre 2016 pour une République numérique, article 4 (article L. 311-3-1 du code des relations entre le public et l'administration)", 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFARTI000033202841', 'date' => '2026-10-05'],
        ['titre' => "data.gouv.fr, guides : fiche pratique sur l'obligation de mention explicite (mise à jour du 2 octobre 2020)", 'url' => 'https://guides.data.gouv.fr/guides/autres-ressources-utiles/les-algorithmes-publics-pourquoi-et-comment-les-expliquer/fiche-pratique-lobligation-de-mention-explicite', 'date' => '2026-10-05'],
        ['titre' => "data.gouv.fr, guide juridique : qui est concerné par l'ouverture des données ?", 'url' => 'https://guides.data.gouv.fr/guides/guide-juridique/producteurs-de-donnees/qui-est-concerne', 'date' => '2026-10-05'],
        ['titre' => "data.gouv.fr, guide juridique : quelles sont les obligations ? (occultation, formats ouverts et réutilisables)", 'url' => 'https://guides.data.gouv.fr/guides/guide-juridique/producteurs-de-donnees/quelles-sont-les-obligations', 'date' => '2026-10-05'],
        ['titre' => "Collectivités locales (ministère chargé des collectivités), publicité, entrée en vigueur et conservation des actes des collectivités territoriales et de leurs groupements", 'url' => 'https://www.collectivites-locales.gouv.fr/publicite-et-entree-en-vigueur-des-actes-des-collectivites-locales', 'date' => '2026-10-05'],
        ['titre' => "Service-public.gouv.fr, comment obtenir un acte de naissance ? Fiche F1427 (vérifiée le 14 août 2026)", 'url' => 'https://www.service-public.gouv.fr/particuliers/vosdroits/F1427', 'date' => '2026-10-05'],
        ['titre' => "ANSSI, CERT-FR, collectivités territoriales : synthèse de la menace (CERTFR-2025-CTI-002, 24 février 2025)", 'url' => 'https://cert.ssi.gouv.fr/uploads/CERTFR-2025-CTI-002.pdf', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : annexe III, systèmes d'IA à haut risque (point 5 a)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : article 27, analyse d'impact sur les droits fondamentaux", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-27', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : article 50, obligations de transparence", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, AI Act Service Desk : article 113, dates d'application (version consolidée au 27 juillet 2026)", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Portail officiel des données ouvertes de Côte d'Ivoire, data.gouv.ci (compteurs de la page d'accueil)", 'url' => 'https://data.gouv.ci/', 'date' => '2026-10-05'],
        ['titre' => "data.gouv.fr, interface publique de la plateforme : métriques du site (jeux de données et organisations)", 'url' => 'https://www.data.gouv.fr/api/1/site/', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['digitalisation-processus', 'ia-ethique-conformite', 'conduite-du-changement', 'cybersecurite-employes', 'gouvernance-ia', 'data-literacy'],
        'services'    => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'consultant-digitalisation'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'n8n-vs-make-vs-zapier'],
    ],
];
