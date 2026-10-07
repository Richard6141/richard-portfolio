<?php
// ============================================================
// data/secteurs/ong.php · Page secteur « ONG et projets de développement »
// (vague 1E, univers Santé et social). Aucun projet du portfolio rattaché,
// aucune page locale. Public du questionnaire : F (Richard a déjà formé ce
// public). Faits externes lus le 07/10/2026 : KoboToolbox, ODK, DHIS2, IATI,
// CHS 2024, OHADA (SYCEBNL), GSMA, UIT, CICR, CNIL, SGG du Bénin, ARTCI, CDP,
// associations.gouv.fr, CiviCRM, Dolibarr, Odoo ; Meta et règlement européen
// sur l'IA repris des « faits déjà vérifiés » du catalogue (05/10/2026).
// Les liens s'écrivent [[/chemin|texte]] et sont convertis en fin de fichier.
// ============================================================
declare(strict_types=1);

$page = [
    'titre'   => "Collecter sur le terrain, rendre compte aux bailleurs et protéger les bénéficiaires : le numérique et l'IA au service des ONG et des projets de développement",
    'title'   => "Digitalisation et IA pour les ONG | Richard SALANON",
    'meta'    => "Collecte hors connexion, suivi des indicateurs, rapports aux bailleurs, finances par projet et IA maîtrisée pour les ONG et projets de développement.",
    'en_bref' => "Cette page s'adresse aux ONG nationales et internationales, aux associations et aux unités de gestion de projets financés par des bailleurs. Richard SALANON y construit des applications de collecte hors connexion, des tableaux de suivi des indicateurs, des circuits de rapports et de justificatifs, des automatisations et des usages encadrés de l'IA, en reliant ce qui existe déjà (KoboToolbox, DHIS2, tableurs, logiciel comptable) plutôt qu'en le remplaçant. Un site vitrine démarre à 300 000 FCFA (environ 457 €) ; le reste est chiffré sur devis, établi après un premier échange gratuit.",
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Santé et social',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'ONG, associations, unités de gestion de projets et bailleurs partenaires'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Où en est la digitalisation des ONG et des projets de développement en Afrique francophone et en Europe ?",
            'paragraphes' => [
                "Le terrain d'une ONG reste souvent hors réseau. Selon le rapport Facts and Figures 2025 de l'Union internationale des télécommunications, 36 % de la population africaine utilise Internet, le taux le plus bas des régions de l'UIT, et l'écart entre citadins et ruraux y est le plus large, avec un rapport de 2,6 contre 1,1 en Europe : les projets se déroulent souvent du côté où le réseau manque le plus. Un outil conçu pour une connexion permanente échoue donc au premier village : les formulaires doivent se remplir hors connexion et se synchroniser plus tard.",
                "Les outils existent et sont éprouvés. Selon la page d'accueil d'ODK, plus de 2 millions de personnes envoient plus de 250 millions de soumissions par an avec cette plateforme libre de collecte mobile. DHIS2, plateforme libre coordonnée par l'université d'Oslo, sert de système d'information sanitaire national dans plus de 80 pays à revenu faible ou intermédiaire, d'après sa présentation officielle. La question n'est plus de savoir s'il existe un outil, mais comment le relier au reste de la chaîne : cadre de résultats, finances, rapports.",
                "La transparence progresse aussi du côté des bailleurs. L'initiative internationale pour la transparence de l'aide (IATI) définit un standard de données ouvert pour publier les activités de développement et d'aide humanitaire, et la norme humanitaire fondamentale (CHS), révisée en 2022 et 2023 et publiée dans sa version 2024, place le respect des droits et de la dignité des personnes touchées au centre des engagements des organisations. Les équipes doivent donc produire plus de données, et mieux les protéger.",
                "Côté paiement, l'Afrique est le terrain du mobile money. Dans son rapport 2026 sur l'état de l'industrie, la GSMA compte 2,3 milliards de comptes enregistrés dans le monde fin 2025 et 593 millions de comptes actifs sur 30 jours, dont 347 millions en Afrique, soit près de 60 % du total mondial. Verser une aide ou rembourser des frais de transport par téléphone devient réaliste pour une partie des bénéficiaires, avec les précautions d'identification que le texte sur les données impose.",
                "En Europe, les associations de solidarité internationale et les ONG ont un autre problème : rassembler les rapports de partenaires dispersés dans plusieurs pays, rendre des comptes à des financeurs publics et privés, et répondre au RGPD. Dans les deux cas, la digitalisation ne vise pas la modernité, mais la fiabilité d'une chaîne qui part d'une fiche remplie au village et finit dans un rapport signé par un bailleur.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels processus d'une ONG gagnent à être digitalisés, et à quels signes voit-on que le moment est venu ?",
            'intro' => "Un projet financé est une chaîne : un cadre de résultats, des activités, des données de terrain, des dépenses, des rapports. Chaque maillon qui repose sur une saisie répétée ou sur un seul fichier est un risque. Les signes suivants reviennent dans les organisations qui franchissent le pas ; deux ou trois suffisent à justifier un diagnostic.",
            'items' => [
                ['titre' => "Les fiches papier du terrain sont saisies deux fois", 'texte' => "Un enquêteur remplit une fiche au village, un opérateur la ressaisit au bureau régional, et un troisième agrège le tout dans un tableur. Les erreurs de saisie, les fiches perdues et les semaines de retard se paient à chaque rapport trimestriel."],
                ['titre' => "Les indicateurs du cadre de résultats ne se calculent qu'en fin de période", 'texte' => "Le responsable suivi-évaluation découvre à l'approche du rapport que la cible d'un indicateur est en retard de moitié. Quand les données arrivent chaque semaine dans une base unique, l'écart se voit tôt et le plan d'action se corrige à temps."],
                ['titre' => "Chaque bailleur impose son modèle de rapport", 'texte' => "Un même chiffre est reformaté trois fois, avec trois périmètres de dates. Une base unique qui sépare la donnée du modèle de présentation évite que deux rapports donnent deux totaux différents pour la même activité."],
                ['titre' => "Les dépenses ne sont pas rattachées au bon bailleur au moment de l'achat", 'texte' => "La ventilation par ligne budgétaire se refait en fin de mois à partir de pièces papier. L'achat doit porter dès la commande le code du projet, de la ligne budgétaire et du bailleur, sinon l'audit retrouve des dépenses inéligibles trop tard."],
                ['titre' => "Les justificatifs sont dispersés", 'texte' => "Factures, bordereaux de livraison, feuilles de présence, devis comparatifs : quand l'auditeur demande la pièce d'une dépense de dix-huit mois, personne ne sait dans quel classeur ni sur quel téléphone elle se trouve."],
                ['titre' => "Les listes de bénéficiaires circulent par messagerie", 'texte' => "Un tableur contenant noms, numéros de téléphone et situations de vulnérabilité passe de téléphone en téléphone. Un accès par rôle, une base chiffrée et une trace des consultations remplacent ce circuit sans l'alourdir."],
                ['titre' => "Les dons et les adhésions se gèrent à la main", 'texte' => "Virements, mobile money et chèques sont notés dans un cahier, et le reçu ou le remerciement part des semaines plus tard. Pour une association qui vit de la générosité du public, ce délai coûte des donateurs fidèles."],
                ['titre' => "Un projet se termine et laisse peu de traces", 'texte' => "À la clôture, l'équipe se disperse avec ses fichiers. Sans base commune ni documentation, la capitalisation et la préparation de la demande de financement suivante repartent de zéro."],
                ['titre' => "Les contre-signaux", 'texte' => "Une petite structure avec un seul projet et deux salariés n'a pas besoin d'un système sur mesure : un formulaire de collecte libre et un tableur bien tenu suffisent souvent. L'outil sur mesure se justifie quand plusieurs projets, plusieurs bailleurs ou plusieurs sites se croisent."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels services numériques pour une ONG, selon le besoin à couvrir ?",
            'legende' => "Besoins relevés dans les ONG, associations et unités de gestion de projets ; chaque service renvoie à sa page, et le devis précise le périmètre exact.",
            'entetes' => ['Besoin typique de l\'ONG', 'Service', 'Page du service'],
            'lignes'  => [
                ["Collecter des données de terrain hors connexion avec des formulaires adaptés à vos indicateurs, sur téléphone ou tablette", "Application mobile Android et iOS, avec synchronisation différée", "[[/services/application-mobile-android-ios|Application mobile Android et iOS]]"],
                ["Suivre le cadre de résultats : cibles, valeurs réalisées, écarts, par site et par période", "Base et tableaux de bord de suivi-évaluation sur mesure", "[[/services/application-web-sur-mesure|Application web sur mesure]]"],
                ["Relier un outil de collecte libre (KoboToolbox, ODK, DHIS2) à la base de suivi, au tableur et au rapport", "Connecteurs et interfaces entre logiciels", "[[/services/api-rest-integrations|API REST et intégrations]]"],
                ["Produire des rapports de bailleur à partir de données déjà validées, au bon format et à la bonne date", "Automatisation des exports, des relances et des tableaux", "[[/services/automatisation-ia|Automatisation avec n8n et Make]]"],
                ["Rédiger un premier jet de rapport narratif, résumer des entretiens, trier des retours communautaires", "IA branchée sur vos données, avec relecture humaine", "[[/services/integration-ia-entreprise|Intégration de l'IA en entreprise]]"],
                ["Suivre les dépenses par projet et par bailleur, rattacher achats et justificatifs, préparer l'audit", "Paramétrage d'un ERP en comptabilité analytique", "[[/services/integration-odoo|Intégration d'Odoo]]"],
                ["Gérer adhérents, cotisations et dons d'une association avec un outil léger", "Déploiement d'un module libre de gestion d'adhérents", "[[/services/integration-dolibarr|Intégration de Dolibarr]]"],
                ["Prévenir des bénéficiaires ou des partenaires par un canal qu'ils utilisent vraiment, sans exposer leurs données", "Messages WhatsApp encadrés, modèles approuvés", "[[/services/integration-whatsapp|Intégration WhatsApp]]"],
                ["Présenter l'ONG, ses programmes, ses rapports publics et collecter des dons en ligne", "Site vitrine avec formulaire de contact et page de dons", "[[/services/site-vitrine-professionnel|Site vitrine professionnel]]"],
                ["Offrir à un partenaire local ou à un bailleur un espace sécurisé où déposer et consulter ses pièces", "Espace partenaire avec droits par rôle", "[[/services/saas-espace-client|Espace client et SaaS]]"],
                ["Garder l'outil en état après la fin du projet : correctifs, sauvegardes, montées de version", "Maintenance et support", "[[/services/maintenance-support|Maintenance et support]]"],
                ["Faire adopter les outils par des équipes dispersées, avec des référents formés dans chaque bureau", "Formation en entreprise", "[[/services/formation-en-entreprise|Formation en entreprise]]"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels logiciels existent déjà dans le secteur, quand les garder et les relier, quand les remplacer ?",
            'legende' => "Descriptions relevées sur les pages officielles de chaque outil le 07/10/2026 ; les limites de chaque offre se relisent sur la page de l'éditeur avant tout choix.",
            'entetes' => ['Outil', 'Ce qu\'il fait', 'Quand le garder et le relier', 'Quand le remplacer'],
            'lignes'  => [
                ['KoboToolbox', "Formulaires de collecte, application Android KoboCollect, qui offre des capacités hors connexion selon sa documentation", "Presque toujours : c'est un standard du terrain et les enquêteurs le connaissent. On le relie à la base de suivi par ses données exportées ou son interface", "Quand une règle propre au projet (validation hiérarchique, visite de suivi, fiche liée à un bénéficiaire) dépasse le formulaire"],
                ['ODK (Collect, Central, XLSForm)', "Plateforme libre de collecte hors connexion, auto-hébergeable, avec formulaires écrits en tableur", "Quand l'ONG ou le bailleur l'impose, ou qu'une équipe technique peut héberger le serveur", "Rarement ; on peut s'en servir comme moteur de collecte sous une application aux couleurs du projet"],
                ['DHIS2', "Système d'information sanitaire libre, utilisé par les ministères de la santé de plus de 80 pays", "Dès que le projet touche un programme de santé : les indicateurs doivent alimenter le système du ministère, pas un système parallèle", "Pas de remplacement pour la santé publique : on le complète par des outils de gestion interne, qui ne sont pas son rôle"],
                ['CiviCRM', "Gestion de contacts, de dons, d'adhésions et d'événements pour les organisations à but non lucratif, sous licence libre AGPL version 3", "Pour une association qui collecte des dons auprès du public et envoie des reçus", "Quand l'hébergement ou la maintenance dépassent les moyens de l'équipe ; un module d'adhérents plus léger suffit parfois"],
                ['Dolibarr, module Adhérents', "Types de membres, fiches, cotisations, liaison avec les modules Banques et Caisses, d'après le wiki officiel", "Pour une petite association qui veut suivre sa trésorerie et la gestion de ses membres dans un seul outil", "Quand plusieurs bailleurs et plusieurs projets exigent une comptabilité analytique plus fine"],
                ['Odoo, comptabilité analytique', "Plans analytiques, répartition des coûts sur plusieurs comptes, disponibles dans l'application de comptabilité et de facturation", "Quand l'organisation a déjà Odoo : on ajoute un plan analytique par projet et par bailleur", "Quand l'existant est un tableur qui ne tient plus : l'ERP rattache achats et notes de frais au bon projet dès l'écriture"],
                ['Tableurs et logiciel comptable de bureau', "Suivi budgétaire et comptable historique de la plupart des structures", "Tant qu'un seul projet et un seul bailleur sont suivis, avec un contrôle des formules", "Dès que trois personnes modifient le même fichier ou qu'un audit demande la trace des changements"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Faut-il un ERP pour une ONG, ou un outil sur mesure suffit-il ?",
            'paragraphes' => [
                "La réponse tient à la comptabilité. Selon la documentation d'Odoo 20.0, la comptabilité analytique permet de répartir les coûts sur un ou plusieurs comptes analytiques, regroupés en plans ; un plan peut être rendu obligatoire, ce qui interdit de confirmer une écriture sans compte analytique. Pour une ONG, cette règle sert directement : un plan par projet et un plan par bailleur forcent chaque dépense à porter ses deux étiquettes au moment de la saisie, et non en fin de mois.",
                "Ce n'est pourtant pas un ERP de bout en bout qu'il faut prévoir pour toutes les structures. Une association de quartier gère mieux ses adhérents et ses cotisations avec le module libre d'adhérents de Dolibarr, dont le wiki décrit les types de membres, les cotisations et la liaison avec les comptes bancaires et la caisse. Une unité de gestion de projets qui suit six bailleurs a besoin de plus. Le choix entre les deux est traité dans le [[/comparatifs/odoo-vs-dolibarr|comparatif Odoo ou Dolibarr]].",
                "L'application sur mesure intervient quand le métier de l'ONG n'entre dans aucune case : suivi d'un parcours de bénéficiaire sur plusieurs mois, orientation vers un service, remontée hiérarchique d'une alerte de protection, validation d'une liste de distribution par le chef de zone. Dans ce cas, l'[[/services/application-web-sur-mesure|application web sur mesure]] se connecte à l'ERP ou au logiciel comptable existant plutôt que de refaire la comptabilité.",
                "Une dernière règle de prudence : un logiciel imposé par un bailleur (portail de rapports, système d'information du ministère) ne se remplace pas. On travaille autour, par des exports ou des interfaces, et l'on vérifie avant le projet quelles données le bailleur accepte de recevoir par un autre canal que son propre portail.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que peut faire l'IA dans une ONG, et que ne doit-elle jamais faire ?",
            'intro' => "L'IA aide à traiter du texte et des tableaux, pas à décider du sort de personnes. Voici les usages qui tiennent la route, puis les limites à écrire dans la charte de l'organisation avant le premier essai.",
            'items' => [
                ['titre' => "Premier jet d'un rapport narratif", 'texte' => "À partir de chiffres validés et de notes de visite, l'IA propose un plan et un texte que le responsable du projet réécrit et signe. Les chiffres viennent de la base, jamais de l'IA, qui ne doit pas calculer un indicateur à leur place."],
                ['titre' => "Synthèse d'entretiens et de groupes de discussion", 'texte' => "Résumer vingt comptes rendus d'entretiens ou classer des retours communautaires par thème gagne des journées. Les résumés sont relus par une personne qui connaît le contexte, car un thème mal compris peut changer une recommandation."],
                ['titre' => "Traduction et adaptation de supports", 'texte' => "Un guide de sensibilisation passe du français à une langue locale ou à l'anglais avec un premier jet automatique, relu par un locuteur de la communauté : une traduction non relue peut dire autre chose que prévu sur un sujet de santé."],
                ['titre' => "Contrôle de cohérence des données collectées", 'texte' => "Repérer des âges impossibles, des doublons de bénéficiaires, des coordonnées hors zone, des réponses recopiées d'un formulaire à l'autre. L'IA signale, une personne tranche et corrige."],
                ['titre' => "Aide à la préparation d'une demande de financement", 'texte' => "Structurer une note conceptuelle, vérifier la cohérence entre cadre logique et budget, reformuler un texte pour un appel à projets. Le contenu, les chiffres et les engagements restent ceux de l'ONG."],
                ['titre' => "Ce que l'IA ne doit jamais recevoir", 'texte' => "Noms, adresses, photos, situations de santé, de violence ou de déplacement des bénéficiaires ne partent jamais dans un assistant grand public. Si un modèle doit traiter ces données, il s'exécute dans un environnement maîtrisé par l'organisation, avec un contrat et une évaluation des risques."],
                ['titre' => "Ce qu'elle ne décide jamais", 'texte' => "Éligibilité à une aide, priorité d'un cas, sanction contre un partenaire ou un employé : ces décisions restent humaines, justifiées par écrit, et la personne concernée peut les contester."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Que risque-t-on à saisir des données de bénéficiaires dans un assistant d'IA grand public ?",
            'texte' => "Le manuel du CICR sur la protection des données dans l'action humanitaire, dont la troisième édition est parue en ligne le 24 octobre 2024, rappelle que les organisations humanitaires doivent appliquer les principes de la protection des données aux personnes les plus vulnérables. Concrètement, une liste de bénéficiaires collée dans un outil grand public sort du périmètre de l'organisation et peut exposer une personne aux autorités, à un groupe armé ou à son entourage. Écrivez une règle claire, formez les équipes, et réservez tout traitement de données nominatives à un environnement dont l'ONG maîtrise l'accès.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles encadrent les paiements, la comptabilité et les données personnelles d'une ONG ?",
            'paragraphes' => [
                "Les entités à but non lucratif ont leur propre référentiel comptable. Selon le site de l'OHADA, l'Acte uniforme relatif au système comptable des entités à but non lucratif (SYCEBNL), adopté le 22 décembre 2022 à Niamey par le Conseil des ministres, est entré en vigueur le 1er janvier 2024 dans les 17 États membres. Il couvre les associations, les fondations, les ordres professionnels et les entités assimilées, y compris les projets de développement. Le plan de comptes d'un ERP se règle donc sur ce référentiel avec l'expert-comptable, et non sur celui des sociétés commerciales.",
                "Pour les données personnelles, les règles varient par pays. Au Bénin, c'est le code du numérique (loi n° 2017-20), mis en œuvre par l'Autorité de protection des données à caractère personnel (APDP), qui s'applique ; ses articles 391 et 392 encadrent les transferts hors du pays, qui supposent que l'autorité constate un niveau de protection équivalent dans le pays de destination et que le responsable du traitement obtienne son autorisation préalable, avec des exceptions dont le consentement exprès de la personne concernée. En Côte d'Ivoire, l'ARTCI rappelle que tout traitement de données personnelles exige une déclaration préalable ou une autorisation, au titre de la loi n° 2013-450 du 19 juin 2013 ; elle cite notamment les fichiers de clients et d'employés, la biométrie, la géolocalisation et les transferts internationaux.",
                "Le Sénégal s'appuie sur la loi n° 2008-12 du 25 janvier 2008 et sur sa Commission de protection des données personnelles (CDP), qui contrôle la légalité des collectes et des traitements. Avant de lancer une enquête dans un pays, l'ONG se renseigne sur les formalités locales : déclaration ou autorisation, durée de conservation, hébergement à l'étranger. Cela se confirme avec l'autorité nationale et le conseil juridique de l'organisation, car les textes évoluent.",
                "En Europe, l'article 9 du RGPD, présenté par la CNIL, interdit en principe le traitement des données révélant l'origine raciale ou ethnique, les opinions politiques, les convictions religieuses ou la santé, sauf exceptions dont le consentement explicite et le traitement par un organisme à but non lucratif, avec garanties appropriées, portant sur ses seuls membres ou contacts réguliers. Les bénéficiaires d'une ONG relèvent souvent de ces catégories : la conception de la base commence par la liste des champs vraiment nécessaires.",
                "Le règlement européen sur l'IA ajoute une obligation de formation. D'après les questions et réponses de la Commission européenne, l'obligation de maîtrise de l'IA (article 4) s'applique depuis le 2 février 2025 aux fournisseurs et aux déployeurs de systèmes d'IA, qui doivent prendre des mesures pour développer la maîtrise de leur personnel, sans format de formation imposé. Une ONG européenne qui équipe ses équipes d'assistants d'IA a donc intérêt à les former, ce que prévoit la fiche de [[/formations/ia-ethique-conformite|formation IA, éthique et conformité des données]].",
                "Pour les paiements, deux sujets se distinguent. Pour la collecte de dons en ligne, le choix de l'agrégateur de paiement par mobile money et par carte se fait avec le [[/comparatifs/fedapay-vs-kkiapay-vs-cinetpay|comparatif FedaPay, Kkiapay et CinetPay]]. Pour verser une aide ou rembourser des frais par mobile money, les plafonds et l'identification des destinataires sont fixés par l'opérateur et par la banque centrale : le circuit se valide avec l'opérateur du pays avant de lancer la distribution.",
                "En France, selon associations.gouv.fr, l'association doit nommer un commissaire aux comptes quand elle reçoit plus de 153 000 euros par an de subventions publiques, ou plus de 153 000 euros de dons ouvrant droit à un avantage fiscal ; les deux montants ne s'additionnent pas. L'association soumise à cette obligation publie ses comptes annuels et le rapport du commissaire sur le site officiel du Journal officiel (article L. 612-4 du Code de commerce). L'outil de suivi budgétaire doit donc sortir un état conforme sans reprise manuelle.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel texte s'applique à quel pays, et qu'est-ce que cela change pour le projet ?",
            'legende' => "Repères relevés le 07/10/2026 sur les pages officielles ou de presse spécialisée citées en sources ; à confirmer par le conseil juridique de l'organisation avant la mise en service.",
            'entetes' => ['Pays ou espace', 'Texte', 'Autorité', 'Ce que cela change pour une ONG'],
            'lignes'  => [
                ['Bénin', "Loi n° 2017-20 portant code du numérique", "Autorité de protection des données à caractère personnel (APDP)", "Transfert hors du pays soumis à autorisation, sauf exceptions ; hébergement et sauvegardes à choisir en conséquence"],
                ["Côte d'Ivoire", "Loi n° 2013-450 du 19 juin 2013", "ARTCI", "Déclaration préalable ou autorisation avant de constituer une base de bénéficiaires ou d'employés"],
                ['Sénégal', "Loi n° 2008-12 du 25 janvier 2008", "Commission de protection des données personnelles", "Formalités à vérifier avant une enquête ; version du texte à confirmer auprès de la commission"],
                ['Union européenne', "RGPD, article 9", "Autorités nationales, dont la CNIL en France", "Données sensibles interdites sauf exceptions : consentement explicite ou activité d'organisme à but non lucratif avec garanties"],
                ['France', "Code de commerce, article L. 612-4", "Commissaire aux comptes, direction de l'information légale et administrative", "Plus de 153 000 euros de subventions publiques, ou de dons ouvrant droit à avantage fiscal : commissaire aux comptes et comptes publiés"],
                ['Espace OHADA', "Acte uniforme SYCEBNL, en vigueur depuis le 1er janvier 2024", "Conseil des ministres de l'OHADA", "Plan de comptes et états financiers propres aux associations, fondations et projets de développement"],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés garder en tête avant de concevoir un outil pour une ONG ?",
            'items' => [
                ['valeur' => '36 %', 'libelle' => "de la population africaine utilise Internet en 2025, le taux le plus bas des régions de l'UIT", 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/facts-figures-2025/'],
                ['valeur' => '250 millions', 'libelle' => "de soumissions par an envoyées avec ODK par plus de 2 millions de personnes", 'source' => 'ODK, page d\'accueil', 'url' => 'https://getodk.org/'],
                ['valeur' => '80 pays', 'libelle' => "à revenu faible ou intermédiaire qui utilisent DHIS2 comme système national de données de santé", 'source' => 'DHIS2, à propos', 'url' => 'https://dhis2.org/about/'],
                ['valeur' => '347 millions', 'libelle' => "de comptes mobile money actifs sur 30 jours en Afrique fin 2025, près de 60 % du total mondial", 'source' => 'GSMA, rapport 2026 sur l\'état de l\'industrie', 'url' => 'https://www.gsma.com/sotir/'],
                ['valeur' => '1er janvier 2024', 'libelle' => "entrée en vigueur du système comptable des entités à but non lucratif dans les 17 États de l'OHADA", 'source' => 'OHADA, actualité SYCEBNL', 'url' => 'https://www.ohada.com/actualite/6569/acte-uniforme-relatif-au-systeme-comptable-des-entites-a-but-non-lucratif-sycebnl.html'],
                ['valeur' => '153 000 €', 'libelle' => "de subventions publiques par an, ou de dons ouvrant droit à avantage fiscal : seuil au-delà duquel une association française nomme un commissaire aux comptes et publie ses comptes", 'source' => 'associations.gouv.fr', 'url' => 'https://associations.gouv.fr/quand-faut-il-nommer-un-commissaire-aux-comptes'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble un projet numérique selon le type d'organisation et le pays ?",
            'items' => [
                ['secteur' => "ONG de santé communautaire, Burkina Faso", 'probleme' => "Des agents de santé remplissent des fiches papier dans des villages sans réseau, et les indicateurs du trimestre ne sont connus qu'à la remise du rapport.", 'solution' => "Formulaires de collecte sur téléphone Android, remplis hors connexion et synchronisés dès qu'un réseau apparaît, avec contrôles de cohérence à la saisie. Une base de suivi calcule les indicateurs par district et alimente un tableau de bord hebdomadaire ; le jeu de données validé part ensuite vers le système du ministère quand le projet l'exige."],
                ['secteur' => "Association locale gérant deux subventions, Bénin", 'probleme' => "Deux bailleurs financent deux volets du même programme, chacun avec ses lignes budgétaires, et la comptable ventile les dépenses à la main en fin de mois.", 'solution' => "Dolibarr ou Odoo paramétré avec le plan de comptes des entités à but non lucratif validé par l'expert-comptable, un axe analytique par bailleur et un autre par volet. Chaque achat et chaque note de frais porte son code dès la saisie, et les pièces justificatives sont jointes à l'écriture."],
                ['secteur' => "Programme de transferts monétaires, Sénégal", 'probleme' => "Des bénéficiaires reçoivent une aide par mobile money, et l'équipe rapproche à la main la liste des paiements, les relevés de l'opérateur et les listes d'émargement.", 'solution' => "Une liste de bénéficiaires validée, un fichier de paiement généré sans ressaisie, un rapprochement automatique entre fichier envoyé et confirmations reçues, et un écran qui isole les paiements en échec pour relance. Les numéros ne sont accessibles qu'aux deux personnes habilitées ; le circuit est validé avec l'opérateur avant la première distribution."],
                ['secteur' => "Association de solidarité internationale, France", 'probleme' => "Dons en ligne, virements et chèques sont suivis dans trois fichiers, les reçus fiscaux partent avec trois semaines de retard et les rapports des partenaires du Sud arrivent dans des formats différents.", 'solution' => "Une base de donateurs avec reçus générés à l'encaissement, un site avec page de dons sécurisée et un espace où chaque partenaire dépose son rapport dans un modèle commun. Le budget par projet sort un état conforme aux exigences de certification des comptes dès que le seuil de subventions ou de dons est franchi."],
                ['secteur' => "ONG partenaire d'organisations du Sud, Belgique", 'probleme' => "Le siège consolide à la main les rapports financiers de plusieurs partenaires dans trois pays, et chaque version du tableur contient des chiffres différents.", 'solution' => "Un portail où chaque partenaire saisit ses dépenses par ligne budgétaire, avec droits par pays, validation à deux niveaux et historique des modifications. Le siège voit la consolidation en temps réel et exporte le rapport au format demandé par le bailleur."],
                ['secteur' => "Projet de gouvernance locale, RD Congo", 'probleme' => "Des relais communautaires recueillent des plaintes et des retours des habitants sur les services publics, sur papier ou par appel, sans suite ni statistique.", 'solution' => "Un registre de plaintes sur téléphone, avec catégories, niveau de confidentialité et suivi du traitement, et une synthèse mensuelle préparée avec l'aide de l'IA sur des données dépersonnalisées. Seuls les cas de protection remontent à une personne identifiée, par un circuit à accès restreint."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule un projet numérique pour une ONG, du diagnostic au suivi ?",
            'items' => [
                ['titre' => "Premier échange", 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez l'organisation, les projets en cours, les bailleurs, les outils actuels et ce qui coince. L'échange est gratuit ; il permet de dire franchement si un outil libre existant suffit ou si un développement sur mesure se justifie."],
                ['titre' => "Diagnostic de la chaîne de données", 'duree' => 'Selon le projet', 'texte' => "On suit un indicateur et une dépense du terrain jusqu'au rapport : qui collecte, où la donnée est saisie, qui la valide, où elle est stockée, qui la voit. Le diagnostic liste les données sensibles, les formats exigés par chaque bailleur et les contraintes de connexion du terrain."],
                ['titre' => "Choix des outils et du périmètre", 'duree' => 'Selon le projet', 'texte' => "Outils existants à conserver, outils à relier, développements à prévoir, hébergement et pays de stockage des données. Le devis détaille ce qui est livré et ce qui reste à votre charge, par exemple les abonnements des outils tiers."],
                ['titre' => "Prototype testé sur le terrain", 'duree' => 'Selon le projet', 'texte' => "Une première version du formulaire ou de l'écran est essayée par quelques agents, sur les téléphones qu'ils utilisent vraiment, dans une zone au réseau instable. Les remarques corrigent le prototype avant tout déploiement général."],
                ['titre' => "Développement et configuration par étapes", 'duree' => 'Selon le projet', 'texte' => "La collecte d'abord, puis le suivi des indicateurs, puis les finances et les rapports. Chaque étape est mise en service avant la suivante, avec des données réelles, pour que les équipes gardent leurs habitudes là où elles fonctionnent."],
                ['titre' => "Sécurité, droits et conformité", 'duree' => 'En continu', 'texte' => "Comptes individuels, droits par rôle, sauvegardes chiffrées, journal des accès, durée de conservation décidée avec la direction. Les formalités locales de protection des données restent à la charge de l'organisation, avec son conseil."],
                ['titre' => "Formation des équipes et des référents", 'duree' => 'Selon le projet', 'texte' => "Séances par métier : enquêteurs, superviseurs, responsable du suivi-évaluation, comptable, direction. Un référent par bureau est formé pour répondre aux questions du quotidien après le départ de l'intervenant."],
                ['titre' => "Suivi, maintenance et clôture du projet", 'duree' => 'Selon le projet', 'texte' => "Correctifs, ajustements des formulaires quand le cadre de résultats change, sauvegarde finale et archivage à la clôture du financement. Un [[/services/maintenance-support|contrat de maintenance]] peut prendre le relais."],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte un projet numérique pour une ONG, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Le site publie trois tarifs de départ : 150 000 FCFA pour une landing page (environ 229 €), 300 000 FCFA pour un site vitrine (environ 457 €) et 75 000 FCFA pour un référencement naturel (environ 114 €). Pour une ONG, une application de collecte, une base de suivi, une intégration ou un paramétrage comptable relèvent du devis, établi après un premier échange gratuit. La prestation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Site vitrine de l\'organisation', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Présentation des programmes et de l\'équipe', 'Formulaire de contact et publications', 'Délai habituel de 1 à 3 semaines']],
                ['offre' => 'Application de collecte et de suivi', 'prix' => 'Sur devis', 'inclus' => ['Formulaires hors connexion et base de suivi', 'Tableaux de bord par indicateur', 'Application sur mesure : délai habituel de 1 à 3 mois selon le périmètre']],
                ['offre' => 'Finances par projet et par bailleur', 'prix' => 'Sur devis', 'inclus' => ['Paramétrage analytique par projet et bailleur', 'Reprise des données et formation de la comptabilité', 'Rattachement des pièces aux écritures']],
                ['offre' => 'Automatisations, IA et formation', 'prix' => 'Sur devis', 'inclus' => ['Exports et relances automatisés', 'IA branchée sur des données dépersonnalisées', 'Formation des équipes et des référents']],
            ],
            'variations' => [
                "Le nombre de projets, de bailleurs et de sites à couvrir, et la différence de format entre leurs rapports.",
                "La qualité des données de départ : tableurs propres ou années de fichiers à rapprocher et à dédoublonner.",
                "La part de développement : connecter un outil libre existant coûte moins qu'une application entière sur mesure.",
                "Les contraintes de terrain : langues de l'interface, appareils des enquêteurs, zones sans réseau, usage de photos et de coordonnées GPS.",
                "La sensibilité des données : bases chiffrées, droits fins, journaux d'accès et hébergement dans un pays choisi.",
                "Les abonnements d'outils tiers, facturés par leurs éditeurs et non par la prestation.",
                "Le nombre de personnes à former et de bureaux à équiper, ainsi que les séances à distance ou sur place.",
                "La durée de la maintenance après la fin du financement du projet.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs fréquentes font échouer un projet numérique dans une ONG ?",
            'intro' => "Ces erreurs se retrouvent d'un projet financé à l'autre. Presque toutes se décident avant la première ligne de code.",
            'items' => [
                ['titre' => "Concevoir l'outil sans l'enquêteur", 'texte' => "Un formulaire de quarante questions, testé au bureau avec une bonne connexion, devient inutilisable au village avec un téléphone d'entrée de gamme. Les agents doivent l'essayer sur le terrain avant le déploiement."],
                ['titre' => "Collecter plus que nécessaire", 'texte' => "Chaque champ nominatif ajouté, comme le nom, la photo ou la localisation exacte, augmente le risque. On part de l'indicateur à produire et l'on retire tout ce qui ne sert à aucune décision."],
                ['titre' => "Créer un système parallèle à celui du ministère ou du bailleur", 'texte' => "Si les indicateurs de santé doivent alimenter DHIS2, un second système local crée deux vérités. On relie plutôt qu'on duplique."],
                ['titre' => "Laisser les bases de bénéficiaires dans des tableurs partagés", 'texte' => "Un lien de partage resté ouvert, un téléphone volé, un ancien salarié qui garde l'accès : tous ces incidents sont évitables par des comptes individuels et des droits par rôle."],
                ['titre' => "Dépendre d'un outil gratuit sans plan de sortie", 'texte' => "Les conditions d'un service gratuit peuvent changer, et ses limites de volume ou de stockage varient selon l'offre. On vérifie les conditions de l'éditeur au départ, on exporte régulièrement les données dans un format ouvert et l'on prévoit un hébergement de secours."],
                ['titre' => "Confier tous les accès à un prestataire ou à un stagiaire", 'texte' => "Comptes d'administration, nom de domaine, serveur, dépôt de code : ils appartiennent à l'organisation, avec au moins deux responsables nommés, pour survivre au départ d'une personne."],
                ['titre' => "Brancher l'IA sur des données nominatives sans cadre", 'texte' => "Les données personnelles de bénéficiaires ne se confient pas à un assistant grand public. Une charte, un inventaire des usages et une formation des équipes précèdent tout essai."],
                ['titre' => "Oublier la fin du projet", 'texte' => "Quand le financement s'arrête, qui héberge, qui sauvegarde, qui corrige ? Sans réponse, l'outil devient inutilisable, et les données des bénéficiaires restent sur un serveur que personne ne surveille."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment former les équipes d'une ONG à ces outils ?",
            'paragraphes' => [
                "Un outil que personne ne sait utiliser retourne au tableur. Richard a déjà formé des équipes d’ONG et de projets de développement, aux outils numériques et à l'IA, et il propose de découper la formation par métier : enquêteurs et superviseurs pour la collecte, responsable du suivi-évaluation pour les indicateurs, comptable pour la ventilation par bailleur, direction pour le pilotage et les risques.",
                "La page [[/formations/metier/ong-projets-developpement|formations pour les ONG et les projets de développement]] détaille le parcours proposé à ce public. Parmi les fiches de formation, [[/formations/ia-en-entreprise|l'IA en entreprise]] couvre l'usage quotidien des assistants par les équipes, [[/formations/ia-ethique-conformite|l'IA, l'éthique et la conformité des données]] traite le secret, les biais et les textes sur la protection des données, et [[/formations/cybersecurite-employes|la cybersécurité pour les employés]] apprend les réflexes de base contre l'hameçonnage et la perte de téléphone.",
                "Pour un déploiement multi-sites, la formation passe par des référents : une personne par bureau, formée plus à fond, qui répond aux questions de ses collègues et remonte les problèmes. La page [[/services/formation-en-entreprise|formation en entreprise]] décrit le cadre général, et les modalités exactes (à distance ou sur place au Bénin, durée, nombre de groupes) se fixent au devis.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier la digitalisation de votre ONG à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Son parcours : plus de 6 ans d'expérience, une formation à EPITECH en 2022, plus de 50 projets livrés, plus de 100 clients et plus de 200 personnes formées. Richard est intervenu, sur place ou à distance, dans quinze pays, dont le Burkina Faso, le Sénégal, la RD Congo, la France et la Belgique, cités dans les cas ci-dessus, ainsi qu'au Bénin, en Côte d'Ivoire, au Togo, au Mali, au Niger, au Cameroun, au Tchad, au Gabon, en Suisse et au Canada.",
                "Côté produits, il a créé [[https://wapy.pro|Wapy]], un assistant WhatsApp à IA pour les entreprises d'Afrique francophone, et co-fonde Audyxa. Pour une ONG, ce métier de développeur compte : relier un outil de collecte à une base, à un tableur et à un rapport relève de l'ingénierie, pas seulement de la configuration.",
                "Sa méthode, proposée comme cadre de travail, tient en quelques engagements vérifiables : un diagnostic de la chaîne de données avant tout achat d'outil, des outils libres et existants gardés quand ils suffisent, des accès et un code au nom de l'organisation, une documentation remise à chaque étape. Pour voir ses travaux, consultez la page [[/realisations/|réalisations]] ; le détail de son parcours se trouve sur [[/richard-salanon|sa page personnelle]].",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de lancer un projet numérique dans votre ONG ?",
            'texte' => "Partez de l'indicateur et de la dépense, pas de l'outil ; gardez ce qui marche et reliez-le ; collectez le strict nécessaire ; mettez les données des bénéficiaires hors de portée des outils grand public ; confirmez les formalités de protection des données du pays avant la première enquête ; préparez la fin du financement dès le début du projet.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vous voulez savoir par où commencer la digitalisation de votre ONG ?",
            'texte'  => "Décrivez votre organisation, vos projets, vos bailleurs, vos outils actuels et vos contraintes de terrain : la réponse arrive sous 24 heures ; après un premier échange gratuit, vous recevez un plan par étapes et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => "Quel outil choisir pour collecter des données hors connexion dans une ONG ?", 'r' => "KoboToolbox et ODK sont les deux outils libres les plus répandus ; leurs applications Android fonctionnent hors connexion, ce qui convient aux zones sans réseau stable. On choisit selon l'exigence du bailleur, l'hébergement souhaité et le besoin de règles propres au projet. Quand le formulaire ne suffit plus, une application sur mesure s'appuie sur le même principe."],
        ['q' => "KoboToolbox suffit-il pour le suivi-évaluation d'un projet ?", 'r' => "Il suffit pour collecter et exporter les données, mais le suivi des indicateurs, la comparaison avec les cibles, la validation hiérarchique et le lien avec les finances demandent une base et des tableaux de bord autour. C'est l'intégration que Richard propose : garder Kobo pour la collecte et relier ses données à la base de suivi, plutôt que de le remplacer."],
        ['q' => "Peut-on relier les données de terrain à DHIS2 ?", 'r' => "Oui quand le projet touche un programme de santé dont le ministère utilise DHIS2, plateforme libre déployée dans plus de 80 pays à revenu faible ou intermédiaire selon sa présentation officielle. L'objectif est d'alimenter le système national plutôt que de créer un système parallèle. La faisabilité technique se confirme au diagnostic, avec la personne qui administre l'instance."],
        ['q' => "Un ERP est-il adapté à une petite association ?", 'r' => "Rarement. Une petite association gère souvent mieux ses adhérents et ses cotisations avec un module libre comme celui de Dolibarr. L'ERP, avec sa comptabilité analytique par projet et par bailleur, se justifie quand plusieurs financements et plusieurs sites se croisent. Le diagnostic tranche, et le comparatif Odoo ou Dolibarr du site détaille les deux logiciels."],
        ['q' => "Comment suivre les dépenses par bailleur et par projet ?", 'r' => "Avec des axes analytiques : un pour le projet, un pour le bailleur, et si besoin un pour la ligne budgétaire. Dans Odoo 20.0, un plan analytique peut être rendu obligatoire, ce qui empêche de confirmer une écriture sans compte analytique. Le plan de comptes lui-même se règle avec l'expert-comptable sur le référentiel des entités à but non lucratif."],
        ['q' => "Quel référentiel comptable s'applique aux ONG de la zone OHADA ?", 'r' => "Le système comptable des entités à but non lucratif (SYCEBNL), adopté le 22 décembre 2022 par le Conseil des ministres de l'OHADA et en vigueur depuis le 1er janvier 2024 dans les 17 États membres, selon le site de l'OHADA. Il couvre les associations, fondations et projets de développement. Le plan de comptes d'un logiciel se confirme avec l'expert-comptable."],
        ['q' => "Peut-on verser une aide par mobile money avec un outil numérique ?", 'r' => "Oui, techniquement, mais le circuit se valide avec l'opérateur du pays : plafonds, identification des destinataires et frais dépendent de lui et de la banque centrale. On automatise surtout la préparation du fichier de paiement et le rapprochement des confirmations, et l'on limite l'accès aux numéros de téléphone aux personnes habilitées."],
        ['q' => "Les données des bénéficiaires peuvent-elles être traitées par une IA ?", 'r' => "Pas dans un assistant grand public. Des données nominatives de personnes vulnérables ne doivent pas sortir du périmètre de l'organisation. Si un modèle doit les traiter, il s'exécute dans un environnement maîtrisé, avec un contrat, une évaluation des risques et la formalité exigée par le pays ; sinon on travaille sur des données dépersonnalisées."],
        ['q' => "Quelles formalités faut-il avant de collecter des données de bénéficiaires ?", 'r' => "Elles dépendent du pays. En Côte d'Ivoire, l'ARTCI rappelle qu'une déclaration préalable ou une autorisation est exigée ; au Bénin, la loi n° 2017-20 est appliquée par l'APDP ; au Sénégal, c'est la CDP. En Europe, l'article 9 du RGPD encadre les données sensibles. Confirmez ces formalités auprès de l'autorité du pays."],
        ['q' => "Que devient l'outil quand le financement du projet se termine ?", 'r' => "La question se traite dès le diagnostic : qui héberge, qui sauvegarde, qui peut modifier un formulaire. On prévoit un export des données dans un format ouvert, un accès à votre nom et, si vous le souhaitez, un contrat de maintenance léger. Les données de bénéficiaires sont archivées ou supprimées selon la durée de conservation décidée avec la direction."],
        ['q' => "Combien coûte une application de collecte pour une ONG ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit : il dépend du nombre de formulaires, de la base de suivi, des connexions à vos outils et de la sensibilité des données. Seuls les tarifs de départ des sites sont publiés, à partir de 300 000 FCFA (environ 457 €) pour un site vitrine. Une application sur mesure demande en général de 1 à 3 mois."],
        ['q' => "Intervenez-vous hors du Bénin, sur place ?", 'r' => "Le cadrage, le développement et les formations se font à distance, quel que soit le pays ; sur place, Richard intervient au Bénin. Il est intervenu dans plusieurs pays d'Afrique francophone, en France, en Belgique, en Suisse et au Canada. Depuis l'Europe ou le Canada, le règlement se fait par carte, PayPal ou virement."],
    ],

    'sources' => [
        ['titre' => "UIT, Measuring digital development : Facts and Figures 2025", 'url' => 'https://www.itu.int/itu-d/reports/statistics/facts-figures-2025/', 'date' => '2026-10-07'],
        ['titre' => "ODK, plateforme libre de collecte de données hors connexion", 'url' => 'https://getodk.org/', 'date' => '2026-10-07'],
        ['titre' => "KoboToolbox, application KoboCollect pour Android", 'url' => 'https://support.kobotoolbox.org/kobocollect_on_android_latest.html', 'date' => '2026-10-07'],
        ['titre' => "DHIS2, présentation de la plateforme", 'url' => 'https://dhis2.org/about/', 'date' => '2026-10-07'],
        ['titre' => "IATI, initiative internationale pour la transparence de l'aide", 'url' => 'https://iatistandard.org/en/about/', 'date' => '2026-10-07'],
        ['titre' => "Core Humanitarian Standard, CHS 2024", 'url' => 'https://www.corehumanitarianstandard.org/the-standard', 'date' => '2026-10-07'],
        ['titre' => "GSMA, rapport 2026 sur l'état de l'industrie du mobile money", 'url' => 'https://www.gsma.com/sotir/', 'date' => '2026-10-07'],
        ['titre' => "OHADA, Acte uniforme relatif au système comptable des entités à but non lucratif (SYCEBNL)", 'url' => 'https://www.ohada.com/actualite/6569/acte-uniforme-relatif-au-systeme-comptable-des-entites-a-but-non-lucratif-sycebnl.html', 'date' => '2026-10-07'],
        ['titre' => "CICR, Handbook on Data Protection in Humanitarian Action, 3e édition (Cambridge University Press, 2024)", 'url' => 'https://doi.org/10.1017/9781009414630', 'date' => '2026-10-07'],
        ['titre' => "CNIL, RGPD chapitre II (article 9, catégories particulières de données)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-07'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => "CIO Mag, ARTCI : déclaration préalable ou autorisation pour les données personnelles (loi n° 2013-450)", 'url' => 'https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable', 'date' => '2026-10-07'],
        ['titre' => "Commission de protection des données personnelles du Sénégal (loi n° 2008-12)", 'url' => 'https://www.cdp.sn/', 'date' => '2026-10-07'],
        ['titre' => "associations.gouv.fr, quand faut-il nommer un commissaire aux comptes ?", 'url' => 'https://associations.gouv.fr/quand-faut-il-nommer-un-commissaire-aux-comptes', 'date' => '2026-10-07'],
        ['titre' => "CiviCRM, présentation du projet", 'url' => 'https://civicrm.org/about', 'date' => '2026-10-07'],
        ['titre' => "Wiki Dolibarr, module de gestion des adhérents", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Membership_management', 'date' => '2026-10-07'],
        ['titre' => "Documentation Odoo 20.0, comptabilité analytique", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting/analytic_accounting.html', 'date' => '2026-10-07'],
        ['titre' => "Commission européenne, questions et réponses sur la maîtrise de l'IA (article 4 du règlement sur l'IA)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'application-mobile-android-ios', 'automatisation-ia', 'integration-ia-entreprise', 'site-vitrine-professionnel', 'formation-en-entreprise', 'integration-odoo', 'api-rest-integrations', 'maintenance-support'],
        'metiers'     => ['ong-projets-developpement'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'cybersecurite-employes', 'data-literacy', 'power-bi-looker-studio'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => [],
    ],
];

// Les liens du texte s'écrivent [[/chemin|texte]] : conversion en balises <a>.
array_walk_recursive($page, static function (&$valeur): void {
    if (is_string($valeur)) {
        $valeur = preg_replace('#\[\[([^|\]]+)\|([^\]]+)\]\]#u', '<a href="$1">$2</a>', $valeur);
    }
});

return $page;
