<?php
// ============================================================
// data/metiers/banques-microfinance/cote-d-ivoire.php · Page « formation IA par métier et par pays » :
// agents de banque et d'institutions de microfinance en Côte d'Ivoire (statut F).
// Sources lues le 26/10/2026 : BCEAO (rapport annuel 2025 de la Commission bancaire, situation de la
// microfinance au 31/12/2025, site PI-SPI, recueil des textes sur les SFD), portail économique ivoirien
// (système bancaire, microfinance), CENTIF-CI, Autorité de protection (ARTCI), rapport ARTCI du premier
// trimestre 2026, AIP (transfert à l'ANSSI), CIO Mag et Osiris (PLCC), Fratmat et Abidjan.net (APBEF-CI),
// FDFP, IANA. Aucun article de la loi n° 2013-450 ni de la loi n° 2016-992 n'est cité : leurs textes n'ont
// pas été lus à la source. Aucun établissement ni aucune mesure nominative n'est mentionné.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les agents de banque et de microfinance en Côte d'Ivoire : des tâches d'agence plus rapides, sans sortir de données de clients et sans contourner la CENTIF-CI ni l'ARTCI",
    'title'   => "Formation IA banques et microfinance en Côte d'Ivoire",
    'meta'    => "Formation IA pour agents de banque et de microfinance en Côte d'Ivoire : PI-SPI, CENTIF-CI, données ARTCI, mobile money. À distance, sur devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, forme à distance les agents de banque et d'institutions de microfinance de Côte d'Ivoire à l'usage de l'IA sur leurs tâches de guichet, de crédit et de suivi, avec des dossiers fictifs et sans donnée de client. La formation s'arrête là où commencent les décisions du responsable de la conformité et du correspondant auprès de la CENTIF-CI. Elle tient compte du dispositif de paiement instantané PI-SPI, des règles de l'Autorité de protection ivoirienne et de la cybercriminalité qui vise les portefeuilles mobiles. Le prix est fixé sur devis, en FCFA.",
    'publie'  => '2026-12-08',
    'maj'     => '2026-12-08',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les agents de banque et de microfinance à l'IA en Côte d'Ivoire, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation basé à Cotonou, forme à distance les agents de banque et d'institutions de microfinance de Côte d'Ivoire à l'usage de l'IA sur leurs tâches de guichet, de crédit et de suivi. Les exercices reposent sur des dossiers fictifs, sans donnée de client, et la formation s'arrête là où commencent les décisions du responsable de la conformité.",
                "L'offre de formation du secteur existe déjà, et elle vient d'abord de ses propres organisations. L'Association professionnelle des banques et établissements financiers de Côte d'Ivoire, l'APBEF-CI, a par exemple organisé entre le 22 juin et le 14 juillet 2021 des sessions sur la protection des données pour 60 personnes du secteur bancaire, d'après un compte rendu de Fratmat du 16 juillet 2021. Cette association, dont Abidjan.net décrit en janvier 2022 le siège au Plateau, est l'interlocutrice naturelle d'un projet qui concerne plusieurs banques.",
                "Côté microfinance, le texte-cadre sur les systèmes financiers décentralisés publié par la BCEAO oblige chaque institution à adhérer à l'association professionnelle de son État dans les trois mois de son inscription (article 23), et cette association a notamment pour objectif d'assurer la formation de ses membres (article 24).",
                "Ces formations couvrent la réglementation. Celle que propose Richard couvre autre chose : ce qu'un agent peut confier à un assistant d'IA un mardi matin, au milieu de ses dossiers, et ce qu'il contrôle avant d'envoyer le résultat. Pour choisir un formateur, quatre questions suffisent. Travaille-t-il sur des dossiers fictifs construits avec votre conformité, ou sur des exemples génériques ? Part-il de vos canaux réels, comme le téléphone de l'agent de crédit, le numéro WhatsApp de l'agence ou le portefeuille mobile de vos clients ? Sait-il dire ce qu'il ne fait pas, par exemple interpréter un texte de la BCEAO ? Prévoit-il une règle d'usage écrite que l'établissement garde après son départ ?",
                "Richard n'est ni banquier ni juriste. Il enseigne l'usage des outils, les gestes de vérification et les limites que l'établissement a déjà fixées. Les textes cités sur cette page servent à situer ces limites, avec leur titre et leur date, et chaque interprétation reste celle de votre direction juridique et de votre responsable de la conformité.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en sont le numérique et l'IA dans les banques et la microfinance ivoiriennes ?",
            'paragraphes' => [
                "Le portail économique du ministère ivoirien compte 32 établissements de crédit agréés au 31 décembre 2024, dont 28 banques et 4 établissements financiers à caractère bancaire. Ils tiennent 7 744 745 comptes bancaires, contre 3 277 292 en 2017, et exploitent 765 agences et 1 200 distributeurs ou guichets automatiques. Le total de bilan atteint 25 645 milliards de francs CFA, soit 35,6 % de celui de l'Union monétaire ouest-africaine. La page indique une mise à jour au 27 novembre 2025.",
                "La microfinance ivoirienne est plus petite en nombre d'institutions, plus large en visages. Le même portail recense 46 systèmes financiers décentralisés en 2023, contre 62 en 2015, dont 4 unions mutualistes, 20 sociétés anonymes et 22 caisses unitaires non affiliées à un réseau. Ils disposent de 461 points de service et comptent 2 309 469 membres ou clients, soit environ 1,4 million d'hommes, 0,7 million de femmes et 0,1 million de personnes morales. Les chiffres 2023 y sont présentés comme provisoires.",
                "Pour la période récente, la BCEAO relève, dans sa fiche du 31 décembre 2025, que l'encours des dépôts des IMF ivoiriennes a progressé de 41,7 milliards de francs CFA (6,1 %) et celui des crédits de 40,9 milliards (5,7 %) sur le trimestre.",
                "Le téléphone est l'autre grand guichet. Selon le rapport de l'ARTCI du premier trimestre 2026, publié le 1er juin 2026, le pays compte 26 880 005 abonnements au mobile money au 31 mars 2026 pour les opérateurs Orange, MTN et Moov, contre 27 713 683 un an plus tôt, soit 3,0 % de moins. Les données de Wave Côte d'Ivoire n'étaient pas disponibles au moment de la rédaction du rapport, de sorte que ce total ne couvre pas tous les portefeuilles.",
                "Un abonnement n'est pas une personne, et les années ne sont pas les mêmes que celles des comptes bancaires, mais l'ordre de grandeur suffit à comprendre pourquoi une agence répond autant de questions sur un transfert mobile que sur un compte.",
                "Quant à l'IA, les textes et les pages officielles lus pour cette page encadrent les données, la vigilance et la cybersécurité, sans définir de règle propre à l'usage d'un assistant par un agent de banque. La règle se construit donc à l'intérieur de l'établissement, dans une charte d'usage que la formation aide à rédiger : quels outils, quelles données, quelle relecture, qui signale une erreur.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés une banque ou une IMF ivoirienne doit-elle avoir en tête avant de former ses agents ?",
            'items' => [
                ['valeur' => '32', 'libelle' => "Établissements de crédit agréés en Côte d'Ivoire au 31 décembre 2024 (28 banques et 4 établissements financiers à caractère bancaire), pour 7 744 745 comptes bancaires, contre 3 277 292 en 2017.", 'source' => "Portail économie-ivoirienne.ci, présentation du système bancaire ivoirien (page mise à jour le 27 novembre 2025)", 'url' => 'https://economie-ivoirienne.ci/banques-et-finances/presentation-du-systeme-bancaire-ivoirien.html'],
                ['valeur' => '46', 'libelle' => "Systèmes financiers décentralisés en 2023 (62 en 2015), avec 461 points de service et 2 309 469 membres ou clients ; chiffres 2023 provisoires.", 'source' => "Portail économie-ivoirienne.ci, présentation du secteur des microfinances (page mise à jour le 13 novembre 2025)", 'url' => 'https://economie-ivoirienne.ci/banques-et-finances/presentation-du-secteur-des-microfinances.html'],
                ['valeur' => '26 880 005', 'libelle' => "Abonnements au mobile money chez Orange, MTN et Moov au 31 mars 2026, contre 27 713 683 au 31 mars 2025 (moins 3,0 %) ; les données de Wave n'étaient pas disponibles.", 'source' => "ARTCI, statistiques du marché des télécommunications, premier trimestre 2026 (publié le 1er juin 2026)", 'url' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf'],
                ['valeur' => '40 912 479', 'libelle' => "Abonnements à l'internet mobile au 31 mars 2026 (plus 15,2 % sur un an), contre 816 207 abonnements à l'internet fixe, dont 65 % en fibre optique.", 'source' => "ARTCI, statistiques du marché des télécommunications, premier trimestre 2026", 'url' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf'],
                ['valeur' => '12 100', 'libelle' => "Plaintes traitées en 2024 par la plateforme de lutte contre la cybercriminalité, contre 8 132 en 2023 et 6 579 en 2022 ; préjudice déclaré de 6,9 milliards de francs CFA contre 9,2 milliards en 2023 (rapport 2024 de l'ANSSI, tel que repris par la presse).", 'source' => "CIO Mag, repris par Osiris le 4 juin 2025", 'url' => 'https://www.osiris.sn/cybercriminalite-en-cote-d-ivoire-en-2024-les-points-saillants-du-rapport-de-l.html'],
                ['valeur' => '30 septembre 2025', 'libelle' => "Lancement de la plateforme PI-SPI de la BCEAO selon la presse spécialisée ; à partir du 2 novembre 2026, les transactions de monnaie électronique interopérables entre particuliers dans l'UEMOA doivent passer par cette plateforme.", 'source' => "Droit, médias et finances, article sur le communiqué de la BCEAO du 2 octobre 2026", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1402-uemoa-la-bceao-rend-pi-spi-obligatoire-et-elargit-la-gratuite-des-transferts-de-monnaie-electronique-des-le-2-novembre-2026'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui contrôle une banque ou une IMF en Côte d'Ivoire, et que change cela pour une formation ?",
            'paragraphes' => [
                "Pour une banque, le contrôle est régional. Le portail ivoirien précise que l'activité bancaire de l'Union relève de la loi-cadre portant réglementation bancaire et de ses textes d'application, avec la BCEAO comme régulateur et la Commission bancaire de l'UMOA comme organe de supervision. Dans son rapport annuel 2025, daté du 27 août 2026, la Commission indique avoir supervisé 493 entités à la fin de décembre 2025 dans l'Union, dont 161 établissements de crédit, 293 grandes institutions de microfinance et 18 établissements de monnaie électronique, et mené 82 missions de vérification sur place. Ces chiffres sont ceux de l'Union, pas ceux de la Côte d'Ivoire.",
                "Pour la microfinance, la chaîne comprend davantage d'acteurs. Le portail ivoirien cite, pour la Côte d'Ivoire, la loi n° 96-562 du 22 juillet 1996 sur les institutions mutualistes ou coopératives d'épargne et de crédit, modifiée par l'ordonnance n° 2011-367 du 3 novembre 2011, et le décret n° 2014-20 du 22 janvier 2014. Il nomme la Direction de la réglementation et de la surveillance des systèmes financiers décentralisés, la Commission nationale pour la microfinance, la BCEAO et l'Association professionnelle des SFD de Côte d'Ivoire. Dans le texte-cadre de la BCEAO, la BCEAO et la Commission bancaire contrôlent, après information du ministre, tout système financier décentralisé dont le niveau d'activités atteint un seuil fixé par instruction de la BCEAO (article 44).",
                "Deux dispositions de ce texte-cadre se retrouvent dans le travail quotidien d'un agent d'IMF. L'article 25 impose que, dans un SFD, les fonctions de gestion et de contrôle soient exercées par des organes distincts : un assistant qui rédige le compte rendu d'un comité ne rend pas pour autant le comité inutile, et il ne fusionne jamais ces deux fonctions. L'article 33 permet à un SFD d'ouvrir des comptes de dépôt à ses membres ou à sa clientèle, sans possibilité d'en disposer par chèque. L'article 50 impose enfin un rapport annuel qui comprend les états financiers approuvés par l'assemblée générale.",
                "Le formateur ne remplace pas la direction des risques. Il demande à l'établissement de désigner une personne, côté conformité, qui valide les dossiers fictifs et la charte d'usage avant la première séance.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change la CENTIF-CI pour l'agent de banque ou de microfinance qui utilise un outil d'IA ?",
            'paragraphes' => [
                "La CENTIF-CI est la cellule de renseignements financiers de la Côte d'Ivoire. Son site la présente comme une cellule de type administratif, placée auprès du ministère de l'Économie et des Finances et créée par le décret n° 2006-261 du 9 août 2006. Il liste parmi ses textes la loi n° 2016-992 du 14 novembre 2016 relative à la lutte contre le blanchiment de capitaux et le financement du terrorisme, l'ordonnance n° 2023-875 du 23 novembre 2023 et l'arrêté n° 391 du 30 octobre 2017, qui fixe le modèle de déclaration de soupçon.",
                "Du point de vue de l'agent, plusieurs précisions du site comptent. La CENTIF-CI se dit la seule structure habilitée à recevoir les déclarations de soupçon. Elle peut s'opposer à une opération pendant 48 heures au plus sur des informations sérieuses, concordantes et fiables, et transmettre un rapport au procureur de la République lorsque des opérations révèlent un possible blanchiment. Le secret professionnel ne peut pas être invoqué pour refuser de lui répondre.",
                "Les transmissions se font en ligne par un espace réservé, « Mon Espace CENTIF », et un guide d'inscription des correspondants et points focaux est publié sur le site, de même qu'un outil pour vérifier si un client figure sur une liste de sanctions financières ciblées.",
                "La conséquence pour une formation à l'IA tient en une phrase : la déclaration de soupçon est un acte de personnes désignées, transmis par un canal officiel, et aucun assistant n'y participe. Les exercices de la formation portent sur la préparation en amont, par exemple la trame d'une note interne rédigée à partir d'un dossier entièrement fictif, et jamais sur le contenu réel d'une déclaration ni sur l'identité d'un client. Les rapports annuels de la CENTIF-CI pour 2020, 2022, 2023 et 2024 sont listés sur son site : ils servent de lecture de départ pour le responsable de la conformité, qui choisit les cas d'exercice.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que disent la loi ivoirienne de 2013 et l'ARTCI sur les données que manipule une agence ?",
            'paragraphes' => [
                "La loi n° 2013-450 du 19 juin 2013 est relative à la protection des données à caractère personnel. Le site « Autorité de protection », qui présente l'ARTCI dans ce rôle, la liste avec deux autres lois du même ensemble : la loi n° 2013-451 du 19 juin 2013 relative à la lutte contre la cybercriminalité et la loi n° 2013-546 du 30 juillet 2013 relative aux transactions électroniques. Pour une agence, la première est celle qui s'applique à la copie d'une pièce d'identité, à une photographie de boutique, à un numéro de téléphone ou à un fichier de membres.",
                "L'intérêt pratique de ce site est la liste de ses formulaires, qui dit ce que l'Autorité distingue. On y trouve la demande d'autorisation préalable de traitement, la déclaration préalable, la demande de transfert de données hors de l'espace CEDEAO, la demande d'autorisation d'un dispositif biométrique, celle d'un système de vidéosurveillance, et deux demandes d'agrément, l'une pour l'audit de traitement et l'autre pour la formation en protection des données. Trois fiches explicatives aident à remplir les formulaires d'autorisation, de déclaration et de transfert.",
                "Pour une banque ou une IMF, trois situations se reconnaissent dans cette liste. Un dispositif de vérification d'identité à distance par photographie ou par empreinte renvoie à la rubrique biométrique. Un assistant d'IA hébergé hors de la zone CEDEAO, alimenté par des données de clients, renvoie à la demande de transfert. Une base de membres partagée avec un prestataire renvoie à la déclaration ou à l'autorisation. La formation ne choisit jamais le formulaire : elle apprend à repérer le cas et à prévenir à temps le correspondant ou le juriste. La classification des documents en trois couleurs, ceux qui peuvent être confiés à l'assistant, ceux qu'on anonymise, ceux qui ne sortent pas, sert précisément à cela.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui s'occupe de la cybersécurité en Côte d'Ivoire, et quelles fraudes visent les agents et leurs clients ?",
            'paragraphes' => [
                "Depuis 2025, la cybersécurité ivoirienne a changé de tutelle. Selon l'AIP, dans une dépêche du 8 mai 2025, l'ARTCI a remis le 30 avril 2025 à l'Agence nationale de la sécurité des systèmes d'information, l'ANSSI, ses missions en matière de cybersécurité et de confiance numérique, sur la base du décret n° 2024-958 du 30 octobre 2024 qui crée l'agence. Le site de l'Autorité de protection présente, lui, l'ARTCI dans son rôle de protection des données personnelles et ne mentionne pas l'ANSSI. La conformité vérifie donc, pour chaque sujet, le bon interlocuteur.",
                "La plateforme de lutte contre la cybercriminalité, la PLCC, reste le point d'entrée des plaintes. D'après le rapport 2024 de l'ANSSI repris par la presse, elle a traité 12 100 plaintes en 2024, avec un taux de résolution de 68 %. Les catégories les plus fréquentes sont les atteintes à la dignité humaine (2 822), l'escroquerie sur internet (2 326) et l'usurpation d'identité (1 638). Le même compte rendu attribue la baisse des préjudices liés aux accès non autorisés à une coopération accrue avec le secteur bancaire.",
                "Les chiffres détaillés lus ici sur les fraudes aux portefeuilles mobiles datent de 2018. Dans un article du 14 juin 2020, CIO Mag rapporte 538 cas de fraude au portefeuille électronique en 2018, soit 18,81 % des infractions traitées par les agents de la PLCC. Le procédé décrit part d'un faux message annonçant un transfert reçu, suivi de l'appel d'un inconnu qui prétend s'être trompé et demande de rendre la moitié de la somme ou de vérifier son solde. Ce scénario sert d'exercice dans la formation, avec des numéros fictifs, parce qu'il touche autant le client que le conseiller qui l'accueille au guichet.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doit pas faire l'IA dans une agence ivoirienne, au regard de ces textes ?",
            'intro' => "Chaque limite vient d'une page officielle lue pour cette formation. Le parcours la traduit en geste de poste, sans l'interpréter.",
            'items' => [
                ['titre' => "Préparer ou transmettre une déclaration de soupçon", 'texte' => "La CENTIF-CI reçoit les déclarations par son espace en ligne et d'après un modèle fixé par arrêté. La déclaration relève de la personne désignée par l'établissement. Un assistant peut aider à structurer une note interne sur un cas fictif ; il n'écrit jamais, ne relit jamais et ne conserve jamais le contenu d'une déclaration réelle."],
                ['titre' => "Envoyer des données de clients vers un service hors de la zone CEDEAO", 'texte' => "L'Autorité de protection publie un formulaire de demande de transfert hors de l'espace CEDEAO. Un compte gratuit d'assistant hébergé à l'étranger est un transfert de fait. La règle est écrite avant le premier exercice : documents fictifs ou anonymisés, outil validé par la conformité."],
                ['titre' => "Mettre en service un contrôle d'identité biométrique sans passer par le correspondant", 'texte' => "L'Autorité distingue une demande d'autorisation d'un dispositif biométrique. Un agent n'installe pas une application de reconnaissance sur son téléphone pour accélérer une ouverture de compte ; il signale le besoin à la conformité."],
                ['titre' => "Remplacer l'organe de contrôle par un compte rendu automatique", 'texte' => "Le texte-cadre sur les SFD sépare la gestion et le contrôle (article 25). Un compte rendu de comité préparé avec l'assistant est relu par le secrétaire, qui retrouve chaque décision dans ses notes."],
                ['titre' => "Répondre sur un compte ou un solde par message non authentifié", 'texte' => "Le procédé de fraude décrit par CIO Mag repose sur la confiance d'un client dans un message ou un appel. Le robot ou l'assistant donne des informations générales, jamais un solde, et renvoie vers un conseiller dès qu'une opération est en cause."],
                ['titre' => "Laisser des conversations de clients sur un téléphone personnel", 'texte' => "L'article 28 du texte-cadre soumet au secret professionnel les personnes qui concourent au fonctionnement d'un SFD. Les images et messages d'un dossier restent dans le système de l'établissement, pas dans la galerie de l'agent."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une banque ou d'une IMF ivoirienne confier à l'IA, avec quels outils ?",
            'legende' => "Exemples d'exercices construits avec la conformité de l'établissement, sur des documents fictifs. La dernière colonne est ce que le participant contrôle lui-même avant d'utiliser le résultat.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ["Fiche de réponse sur PI-SPI pour le guichet : alias, gratuité jusqu'à 8 000 francs CFA par jour, frais au-delà", "Assistant d'IA de l'offre validée et traitement de texte", "Une page claire en français que le conseiller peut lire au client", "Chaque chiffre est relu sur le site PI-SPI et validé par la conformité avant diffusion"],
                ["Note de visite d'une commerçante de marché, par l'agent de crédit", "Téléphone professionnel, assistant, tableur", "Fiche structurée : activité, stocks, charges, risques, recommandation", "Les montants sont retrouvés dans le cahier de la commerçante ; l'agent écrit lui-même ses hypothèses"],
                ["Tableau de suivi des échéances d'une caisse, à partir d'un export", "Tableur et assistant", "Retards par ancienneté et liste des relances de la semaine", "Deux totaux recalculés à la main ; le numéro de téléphone d'un emprunteur n'est jamais deviné"],
                ["Compte rendu d'un comité de crédit ou d'un conseil d'administration de SFD", "Assistant et traitement de texte", "Décisions, responsables et échéances en tableau", "Le secrétaire compare avec ses notes ; aucune décision ajoutée ni oubliée"],
                ["Réponse à une réclamation de transfert mobile envoyé à un mauvais numéro", "Assistant", "Brouillon de réponse courtois qui explique la suite sans promettre le remboursement", "Les faits sont établis par le service compétent ; le responsable signe"],
                ["Message de sensibilisation contre le faux message de transfert reçu", "Assistant", "SMS ou affichette en français simple, avec les gestes à retenir", "La conformité valide le texte une fois pour toutes, puis il sert tel quel"],
                ["Inventaire des champs d'un formulaire client pour préparer l'échange avec le correspondant à la protection des données", "Assistant et tableur", "Liste des champs, de leur finalité et de leur durée de conservation proposée", "Le juriste décide du formulaire à déposer auprès de l'Autorité de protection"],
                ["Trame du rapport annuel d'un SFD : parties narratives et mise en forme", "Traitement de texte et assistant", "Plan et premier jet des parties narratives", "La direction valide les chiffres ; les états financiers restent ceux que l'assemblée générale approuve"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain une agence ivoirienne impose-t-elle à la formation : connexion, portefeuilles mobiles, langues, logiciels ?",
            'paragraphes' => [
                "Le rapport de l'ARTCI au 31 mars 2026 compte 816 207 abonnements à l'internet fixe, dont 65 % en fibre optique, contre 40 912 479 abonnements à l'internet mobile. Une agence bancaire du centre d'Abidjan et une caisse d'une petite ville de l'intérieur n'ont donc pas la même connexion, et beaucoup d'agents travaillent sur un téléphone connecté au réseau mobile. La formation prévoit les deux cas : les documents d'exercice sont téléchargés à l'avance sur chaque poste, les consignes sont rédigées hors ligne puis collées en une fois, et les exercices de relecture ne demandent pas de connexion. En cas de coupure, une solution de repli est prévue.",
                "Les portefeuilles mobiles sont le deuxième terrain. Au 31 mars 2026, l'ARTCI recense 16 579 863 abonnements au mobile money chez Orange (plus 0,7 % sur un an), 7 806 828 chez MTN (moins 4,4 %) et 2 493 314 chez Moov (moins 19,1 %). Ce sont les seules données chiffrées par opérateur retenues ici : le rapport ne contient pas celles de Wave, et la page ne tire aucune conclusion sur la part de chacun. Le client d'une agence peut détenir plusieurs portefeuilles, et le conseiller doit savoir répondre sans prendre parti pour l'un d'eux.",
                "PI-SPI est le troisième. D'après le site de la plateforme, conçue et opérée par la BCEAO, les banques, les émetteurs de monnaie électronique, les institutions de microfinance et les établissements de paiement s'y connectent. Un utilisateur envoie de l'argent avec un alias, par exemple un numéro de téléphone, la plateforme affichant le nom du destinataire et son pays. Un seul code QR accepte tous les types de paiement, les opérations sont traitées en moins de dix secondes, tous les jours et à toute heure, et les transferts entre particuliers sont gratuits.",
                "La presse spécialisée rapporte que, à compter du 2 novembre 2026, la gratuité couvre les transferts nationaux dont le cumul quotidien ne dépasse pas 8 000 francs CFA, avec des frais plafonnés à 0,8 % du montant hors taxe au-delà et une réception gratuite. La formation fait écrire par chaque agent une fiche de réponse et la fait valider par la conformité avant diffusion.",
                "Côté équipement, l'agent de crédit travaille sur un téléphone professionnel ou personnel, l'agent de guichet sur le poste de l'agence, avec le logiciel central de l'établissement et des exports en tableur. La formation part de ce que les participants ont réellement : le questionnaire envoyé avant la session sert à connaître le niveau de départ de chacun et les outils qu'il utilise déjà. Les séances se tiennent en français ; un message destiné à des clients dans une langue locale est relu par un locuteur avant diffusion.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats pour les agents de banque et de microfinance, à distance depuis Cotonou ?",
            'legende' => "En Côte d'Ivoire, tous les formats se donnent à distance, sans déplacement. Abidjan est à l'heure GMT et Cotonou à l'heure d'Afrique de l'Ouest, d'après la base des fuseaux horaires de l'IANA : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou, toute l'année, sans changement saisonnier.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "12 personnes au plus", "Une direction ou un comité qui veut voir l'outil sur des dossiers fictifs avant de rédiger sa charte d'usage"],
                ["Formation complète", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Un groupe de conseillers, d'agents de crédit ou d'analystes dont l'usage a déjà commencé, sans règle commune"],
                ["Séances en visioconférence", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Équipes réparties entre Abidjan et des agences éloignées ; des séances courtes tolèrent mieux une connexion irrégulière"],
                ["Session mutualisée", "1 à 2 jours", "Plusieurs structures d'un même réseau", "Une ou deux personnes par institution, par exemple des membres d'une même association professionnelle, sur des documents fictifs"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Étendre l'usage à de nouvelles tâches une fois la charte d'usage adoptée"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble une séance : trois situations d'agence et une situation de fraude ?",
            'items' => [
                ['secteur' => "Guichet d'une banque, quelques jours avant le 2 novembre 2026", 'probleme' => "Situation et consigne : un client demande si son transfert mobile sera gratuit. Le participant demande à l'assistant une réponse de trois phrases pour un conseiller, à partir de la seule fiche fournie par le formateur, construite sur le site PI-SPI.", 'solution' => "Ce que le participant contrôle : chaque chiffre est relu sur la fiche, aucune promesse n'est faite sur les frais d'un autre prestataire, et toute question sur une opération précise est renvoyée à un conseiller après authentification."],
                ['secteur' => "Caisse d'un système financier décentralisé, dans une ville de l'intérieur", 'probleme' => "Situation et consigne : un export fictif de 400 prêts est classé par ancienneté de retard. Le participant prépare avec l'assistant un message de rappel avant échéance, à valider par la direction.", 'solution' => "Ce que le participant contrôle : le message ne contient ni le montant dû ni la nature du retard, le numéro est vérifié avant l'envoi, et chaque contact est consigné dans le dossier avec la date et le nom de l'agent."],
                ['secteur' => "Service de conformité d'une banque", 'probleme' => "Situation et consigne : un client fictif dont les dépôts changent de rythme. Le participant demande à l'assistant une trame de note interne, sans nom ni numéro de compte, à remettre à la personne désignée.", 'solution' => "Ce que le participant contrôle : la note ne contient aucune donnée identifiante, l'assistant ne conclut jamais, et la décision d'aller plus loin appartient à la personne désignée, qui passe par l'espace de transmission de la CENTIF-CI si elle le juge utile."],
                ['secteur' => "Service client d'un émetteur de monnaie électronique ou d'une banque, face à la fraude au faux transfert", 'probleme' => "Situation et consigne : un faux message annonce un transfert reçu, puis un inconnu appelle pour dire qu'il s'est trompé. Le participant rédige avec l'assistant un message d'alerte pour les clients et un court script d'accueil pour le conseiller.", 'solution' => "Ce que le participant contrôle : aucun lien, aucun code demandé, aucune consigne qui ressemble à celle d'un fraudeur, et validation du texte par la conformité avant diffusion."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation des agents d'une banque ou d'une IMF en Côte d'Ivoire ?",
            'paragraphes' => [
                "Le premier financeur reste l'établissement, sur son budget de formation. Le Fonds de développement de la formation professionnelle, le FDFP, peut intervenir dans certains cas. Selon sa page sur le plan de formation, consultée le 26 octobre 2026, toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan, interne, intra, interentreprises ou à l'étranger, pour l'intégration de nouveaux embauchés, le perfectionnement, la promotion ou la reconversion. La liquidation et le règlement n'interviennent qu'après le suivi et le contrôle des services du Fonds, et l'approbation de sa Commission permanente.",
                "Les actions de formation associées à l'utilisation de l'ordinateur figurent parmi celles qui relèvent de dispositions particulières : une formation à l'IA doit donc être soumise au Fonds avant toute décision.",
                "La page des dates clés de l'exercice 2026 indique, à la date de consultation, le 31 octobre pour le financement des plans de formation, le 13 novembre pour les demandes de remboursement de 2025 et le 31 décembre pour le renouvellement des habilitations. Une session prévue en 2027 relève du calendrier de l'exercice suivant, que le Fonds communique. Concernant l'intervenant, la page sur l'habilitation indique qu'elle s'impose aux opérateurs de formation privés, pour un an, à l'exception des structures basées hors de Côte d'Ivoire. Que cette exception s'applique à un formateur établi à Cotonou, et à quelles conditions, seul le Fonds peut le dire.",
                "Aucune prise en charge n'est promise. Le plus prudent est de budgéter la formation sans financement, puis de déduire l'aide si le Fonds la confirme par écrit. Richard remet le programme, les objectifs, les feuilles de présence et l'attestation de fin de formation que le dossier peut demander. Pour une banque qui a une filiale ou un partenaire dans un autre pays, le financement de ce pays se traite séparément.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation des agents d'une banque ou d'une IMF ivoirienne ?",
            'intro'      => "Aucune somme n'est publiée : le prix est fixé sur devis, en FCFA, après l'échange de cadrage, et le devis détaille chaque poste. Le paiement peut se faire par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants d'IA restent au nom de l'établissement et ne sont pas compris dans le prix de la formation. Les formules et les limites des éditeurs évoluent : la page officielle de chaque éditeur fait foi.",
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur des dossiers fictifs', 'Premiers gestes sur deux tâches du poste', 'Règles de données de base']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices construits avec votre conformité', 'Épreuve finale chronomètre en main', 'Attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Nouvelles tâches et corrections', 'Mesure de ce qui sert']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par métier ou par agence.",
                "Le format retenu : demi-journée, deux jours, séances courtes ou accompagnement mensuel.",
                "Le temps de préparation des dossiers fictifs avec la conformité.",
                "Le nombre d'outils d'IA et de canaux à couvrir, comme le téléphone de l'agent de crédit ou le numéro WhatsApp de l'agence.",
                "Les abonnements aux assistants, facturés par l'éditeur dans sa propre devise.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand une banque ou une IMF ivoirienne démarre l'IA ?",
            'intro' => "Elles tiennent à l'ordre des décisions plus qu'à l'outil choisi, et se préviennent dès la première séance.",
            'items' => [
                ['titre' => "Expliquer PI-SPI de mémoire", 'texte' => "Les seuils, les dates et les frais d'un dispositif récent se retrouvent sur la page officielle, pas dans le souvenir d'un collègue. Une fiche validée par la conformité circule dans toutes les agences, avec sa date."],
                ['titre' => "Prendre une donnée de l'Union pour une donnée de la Côte d'Ivoire", 'texte' => "Les 493 entités supervisées par la Commission bancaire sont celles de l'Union. Un chiffre de présentation interne se reconnaît à son périmètre, écrit à côté."],
                ['titre' => "Traiter la CENTIF-CI comme une boîte de dépôt", 'texte' => "Le modèle de déclaration, l'espace de transmission et les correspondants relèvent de la conformité. L'agent qui a un doute le signale en interne, il ne rédige pas de déclaration avec un assistant."],
                ['titre' => "Adresser un incident de sécurité au mauvais guichet", 'texte' => "Les missions de cybersécurité sont passées de l'ARTCI à l'ANSSI en 2025, tandis que l'Autorité de protection publie les formulaires relatifs aux données personnelles. La conformité tient à jour la liste des contacts et la remet aux agents."],
                ['titre' => "Écrire des réponses types qui promettent", 'texte' => "Une réponse à une réclamation de transfert qui annonce un remboursement engage l'établissement. Le brouillon de l'assistant décrit la suite, et la promesse reste à la personne qui signe."],
                ['titre' => "Former seulement les guichets", 'texte' => "Avec 461 points de service en microfinance en 2023, une partie des clients est servie par des agents de crédit et des caissiers qui n'ont pas de poste fixe. Le parcours prévoit leur tâche et leur téléphone."],
                ['titre' => "Brancher un robot sur WhatsApp avant d'écrire son périmètre", 'texte' => "Un robot qui répond sur un solde sans authentification ouvre la porte aux scénarios de faux transfert décrits plus haut. Le premier robot répond aux questions générales, avec passage à un conseiller."],
                ['titre' => "Compter sur le FDFP avant sa réponse écrite", 'texte' => "L'habilitation de l'intervenant et l'éligibilité d'une formation liée à l'ordinateur se confirment auprès du Fonds. Le budget se bâtit d'abord sans financement."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos agents de banque et de microfinance avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des agents de banque et d'institutions de microfinance. Il compte la Côte d'Ivoire parmi les pays où il a travaillé et il compte " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>. Il n'est ni banquier ni conseiller en réglementation, et il n'est certifié par aucun éditeur d'IA.",
                "Ses projets ivoiriens relèvent d'autres secteurs que la finance. Réalisés en sous-traitance pour Digital Développement, ils comprennent Afro Joy'ce (commande de repas en ligne avec paiement Wave), INOVIS Côte d'Ivoire (refonte d'un site de conseil), AT Consulting International (catalogue de formations et fiche d'évaluation en ligne) et Laura Cosmetics (boutique en deux devises, entre Paris et Abidjan). Ils sont décrits sur la page des <a href=\"/realisations/\">réalisations</a>. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>.",
                "Sa façon de former tient en quelques engagements : une réponse sous 24 heures, un ou deux entretiens de cadrage, un questionnaire envoyé avant la session, des documents téléchargés à l'avance, des exercices sur dossiers fictifs, une épreuve finale chronomètre en main, des supports remis et une attestation nominative. Aucun gain chiffré n'est promis à l'avance. Pour brancher un assistant sur vos logiciels plutôt que former vos équipes, voir l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a> ; pour l'organisation commune des formations, la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos agents de banque ou de microfinance à l'IA ?",
            'texte'  => "Indiquez le type d'établissement, le nombre d'agents et leurs postes, les tâches qui leur prennent le plus de temps, les outils et les canaux déjà utilisés : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA pour banque ou IMF'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former des agents de banque à l'IA en Côte d'Ivoire sans qu'ils se déplacent ?", 'r' => "Richard SALANON forme à distance depuis Cotonou, avec un décalage d'une heure seulement : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou. Les séances se tiennent en visioconférence, sur des dossiers fictifs construits avec votre conformité. Aucun déplacement n'est prévu en Côte d'Ivoire."],
        ['q' => "Un agent de banque ivoirien peut-il utiliser ChatGPT avec des données de clients ?", 'r' => "Non, pas avec des données identifiantes ni dans un compte personnel. La loi n° 2013-450 du 19 juin 2013 protège les données personnelles, et l'Autorité de protection publie un formulaire de transfert hors de l'espace CEDEAO. La formation travaille sur des dossiers fictifs ou anonymisés, avec l'outil que l'établissement a validé."],
        ['q' => "L'IA peut-elle aider à rédiger une déclaration de soupçon adressée à la CENTIF-CI ?", 'r' => "Non. Les déclarations passent par l'espace de transmission de la CENTIF-CI, selon un modèle fixé par arrêté, et relèvent des personnes désignées. L'assistant ne sert qu'à préparer, sur un cas fictif, la trame d'une note interne. Le responsable de la conformité fixe le cadre exact."],
        ['q' => "Que doit savoir un agent sur PI-SPI à partir du 2 novembre 2026 ?", 'r' => "Selon la presse spécialisée qui rapporte le communiqué de la BCEAO du 2 octobre 2026, les transactions de monnaie électronique interopérables entre particuliers dans l'UEMOA doivent passer par PI-SPI. Les transferts nationaux jusqu'à 8 000 francs CFA cumulés par jour sont gratuits, avec des frais plafonnés à 0,8 % du montant hors taxe au-delà. Le site PI-SPI et la conformité de l'établissement font foi."],
        ['q' => "Les microfinances ivoiriennes sont-elles concernées par la même formation que les banques ?", 'r' => "Oui, avec des cas différents : suivi d'un portefeuille de petits prêts, relances, comités, rapport annuel. Le portail ivoirien compte 46 SFD en 2023 et 461 points de service, et le texte-cadre de la BCEAO distingue les organes de gestion et de contrôle. Les exercices sont construits avec la direction de l'institution."],
        ['q' => "Qui s'occupe de la cybersécurité en Côte d'Ivoire depuis 2025 ?", 'r' => "Selon l'AIP, l'ARTCI a remis ses missions de cybersécurité et de confiance numérique à l'ANSSI le 30 avril 2025, en application du décret n° 2024-958 du 30 octobre 2024. Le site de l'Autorité de protection présente l'ARTCI dans son rôle de protection des données. La conformité de l'établissement tient la liste des contacts à jour."],
        ['q' => "Le FDFP peut-il financer cette formation ?", 'r' => "Peut-être, mais rien n'est promis. Le FDFP finance des plans de formation d'entreprises à jour de leurs taxes, classe les formations liées à l'ordinateur parmi les dispositions particulières et exige l'habilitation des opérateurs privés, sauf les structures basées hors de Côte d'Ivoire. Demandez au Fonds une réponse écrite avant de bâtir le budget."],
        ['q' => "Quelle connexion faut-il pour suivre les séances dans une agence ?", 'r' => "Une connexion stable, sur ordinateur de préférence. Les documents d'exercice sont téléchargés à l'avance, les consignes préparées hors ligne et une solution de repli est prévue en cas de coupure. Le questionnaire envoyé avant la session sert à connaître le niveau de départ de chacun."],
        ['q' => "Les données d'Orange, MTN, Moov et Wave sont-elles toutes publiées ?", 'r' => "Le rapport de l'ARTCI du premier trimestre 2026 donne les abonnements mobile money d'Orange, de MTN et de Moov au 31 mars 2026, soit 26 880 005 au total. Il précise que les données de Wave Côte d'Ivoire n'étaient pas disponibles au moment de sa rédaction."],
        ['q' => "Combien coûte la formation, et comment la régler depuis la Côte d'Ivoire ?", 'r' => "Le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Il dépend du nombre de participants, du format, de la préparation des dossiers fictifs et du suivi retenu. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces ; le mode se fixe au devis."],
        ['q' => "Reçoit-on une attestation à la fin de la formation ?", 'r' => "Oui, une attestation nominative de fin de formation par participant, avec le programme et les feuilles de présence. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "BCEAO, rapport annuel 2025 de la Commission bancaire de l'UMOA (daté du 27 août 2026)", 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-de-la-commission-bancaire-de-lumoa-2025', 'date' => '2026-10-26'],
        ['titre' => "BCEAO, situation de la microfinance dans l'UMOA au 31 décembre 2025", 'url' => 'https://www.bceao.int/sites/default/files/2026-05/Situation_de_la_microfinance_%C3%A0_fin_d%C3%A9cembre_2025.pdf', 'date' => '2026-10-26'],
        ['titre' => "BCEAO, recueil des textes régissant les systèmes financiers décentralisés de l'UMOA (édition de décembre 2011) : loi-cadre, articles 23, 24, 25, 28, 33, 44 et 50", 'url' => 'https://www.bceao.int/sites/default/files/2017-11/-recueil-des-textes-legaux-et-reglementaires-regissant-les-sfd-de-lumoa.pdf', 'date' => '2026-10-26'],
        ['titre' => "BCEAO, plateforme interopérable du système de paiement instantané (PI-SPI)", 'url' => 'https://pispi.bceao.int/', 'date' => '2026-10-26'],
        ['titre' => "Droit, médias et finances, la BCEAO rend PI-SPI obligatoire et élargit la gratuité des transferts de monnaie électronique dès le 2 novembre 2026", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1402-uemoa-la-bceao-rend-pi-spi-obligatoire-et-elargit-la-gratuite-des-transferts-de-monnaie-electronique-des-le-2-novembre-2026', 'date' => '2026-10-26'],
        ['titre' => "Portail économie-ivoirienne.ci, présentation du système bancaire ivoirien", 'url' => 'https://economie-ivoirienne.ci/banques-et-finances/presentation-du-systeme-bancaire-ivoirien.html', 'date' => '2026-10-26'],
        ['titre' => "Portail économie-ivoirienne.ci, présentation du secteur des microfinances", 'url' => 'https://economie-ivoirienne.ci/banques-et-finances/presentation-du-secteur-des-microfinances.html', 'date' => '2026-10-26'],
        ['titre' => "CENTIF-CI, site officiel (présentation, textes, déclarations, rapports annuels)", 'url' => 'https://www.centif.ci/', 'date' => '2026-10-26'],
        ['titre' => "CENTIF-CI, prérogatives et obligations", 'url' => 'https://www.centif.ci/prerogatives-et-obligations/', 'date' => '2026-10-26'],
        ['titre' => "ARTCI, statistiques du marché des télécommunications en Côte d'Ivoire, premier trimestre 2026", 'url' => 'https://www.artci.ci/wp-content/uploads/2026/06/RAPPORT_ARTCI_T1_2026_010626v3.pdf', 'date' => '2026-10-26'],
        ['titre' => "Autorité de protection (ARTCI), accueil", 'url' => 'https://www.autoritedeprotection.ci/', 'date' => '2026-10-26'],
        ['titre' => "Autorité de protection (ARTCI), lois : n° 2013-450, n° 2013-451 et n° 2013-546", 'url' => 'https://www.autoritedeprotection.ci/lois/', 'date' => '2026-10-26'],
        ['titre' => "Autorité de protection (ARTCI), formulaires de déclaration, d'autorisation et de transfert", 'url' => 'https://www.autoritedeprotection.ci/documents/', 'date' => '2026-10-26'],
        ['titre' => "AIP, l'ARTCI transfère ses missions de cybersécurité et de confiance numérique à l'ANSSI (8 mai 2025)", 'url' => 'https://www.aip.ci/cote-divoire-aip-lartci-transfere-ses-missions-en-matiere-de-cybersecurite-et-de-confiance-numerique-a-lanssi/', 'date' => '2026-10-26'],
        ['titre' => "Osiris, cybercriminalité en Côte d'Ivoire en 2024 : points saillants du rapport de l'ANSSI (4 juin 2025)", 'url' => 'https://www.osiris.sn/cybercriminalite-en-cote-d-ivoire-en-2024-les-points-saillants-du-rapport-de-l.html', 'date' => '2026-10-26'],
        ['titre' => "CIO Mag, la fraude au portefeuille électronique, une cyber-escroquerie redoutable (14 juin 2020)", 'url' => 'https://cio-mag.com/cote-divoire-la-fraude-au-portefeuille-electronique-une-cyber-escroquerie-redoutable', 'date' => '2026-10-26'],
        ['titre' => "Fratmat, protection des données à caractère personnel : des acteurs du secteur bancaire renforcent leurs capacités (16 juillet 2021)", 'url' => 'https://www.fratmat.info/article/213984/economie/protection-des-donnees-a-caractere-personnel-des-acteurs-du-secteur-bancaire-renforcent-leurs-capacites', 'date' => '2026-10-26'],
        ['titre' => "Abidjan.net, distinction de 21 membres de l'APBEF-CI (14 janvier 2022)", 'url' => 'https://news.abidjan.net/articles/702984/distinction-de-21-membres-de-lapbef-ci-le-ministre-adama-coulibaly-le-marche-bancaire-ivoirien-connait-une-croissance-de-15', 'date' => '2026-10-26'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, informations et dates clés de l'exercice 2026", 'url' => 'https://fdfp.ci/informations-dates-cles-fdfp-exercice-2026/', 'date' => '2026-10-26'],
        ['titre' => "FDFP, procédures d'habilitation des opérateurs de formation", 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-26'],
        ['titre' => "IANA, base des fuseaux horaires : zones Africa/Abidjan et Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-en-entreprise', 'ia-ethique-conformite', 'cybersecurite-employes', 'gouvernance-ia', 'whatsapp-business'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
