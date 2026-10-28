<?php
// ============================================================
// data/metiers/ressources-humaines/niger.php · Formation IA pour les
// responsables RH et les gestionnaires de paie au Niger.
// Statut F du métier, mais texte au conditionnel : Richard peut former ce
// public. Pays : « Déjà travaillé » = oui (faits.php). Aucun projet client du
// Niger dans projets-clients.php : aucun projet cité.
// Sources lues le 27/10/2026 : guide de l'employeur de la CNSS (décembre 2019) et
// page « déclaration de salaire » de cnss.ne, Cleiss (régime 2024, cotisations au
// 01/01/2024), WageIndicator (contrats, mise à jour du 20/04/2026), code général
// des impôts de 2012 dans sa version à jour de la loi de finances 2023 (articles
// 60, 65, 117 bis, 118, 127 à 133, 1055), Le Sahel (15/01/2026) et Aïr Info
// (15/07/2025) sur le nouveau code, FAFPA (page « public cible »), ARCEP (T3 2025),
// BCEAO (liste du 28/02/2026), INS et AFRISTAT (ERI-ESI 2017), Data Protection
// Africa, SysWake, base IANA des fuseaux.
// Non repris car non lus à la source : texte du nouveau code général des impôts
// (barème, abattements, échéances), texte de la loi sur les données personnelles
// (PDF numérisé), site de la HAPDP (inaccessible), texte du code du travail de 2012,
// SMIG actuel, taux ANPE (0,5 % dans le guide de 2019, 1 % chez le Cleiss en 2024).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les responsables RH et les gestionnaires de paie nigériens : déclarations à la CNSS, retenue de l'ITS, contrats et dossiers du personnel préparés avec un assistant, sans exposer les données des salariés",
    'title'   => "Formation IA pour les RH au Niger | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Niger : CNSS, ITS, contrats et HAPDP. À distance depuis Cotonou, même heure, devis en FCFA.",
    'en_bref' => "Qui peut former les services du personnel nigériens à l'IA ? Richard SALANON, consultant en digitalisation basé à Cotonou, peut intervenir à distance auprès des équipes RH, des gestionnaires de paie et des chargés de recrutement de Niamey, de Zinder ou de Maradi, en travaillant sur des copies anonymisées de leurs relevés et de leurs contrats. Niamey et Cotonou sont à UTC+1 : aucun décalage. La CNSS, l'impôt sur les traitements et salaires et le code du travail de 2012 servent de fil conducteur, relus à leur source. Le devis est établi en FCFA, sans aucun montant affiché ici.",
    'publie'  => '2026-12-31',
    'maj'     => '2026-12-31',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "À qui confier la formation IA d'un service du personnel à Niamey, et à quoi reconnaît-on une vraie formation ?",
            'paragraphes' => [
                "Richard SALANON peut conduire, depuis Cotonou, des séances à distance pour les équipes RH et paie d'entreprises nigériennes, qu'elles soient installées à Niamey, à Maradi, à Zinder ou ailleurs dans le pays. Il enseigne l'usage d'un assistant d'IA sur des tâches de bureau. Le droit social, la fiscalité et la sécurité sociale restent l'affaire de la CNSS, de la direction générale des impôts, de l'inspection du travail et du juriste de la société.",
                "Pour choisir, une direction nigérienne peut comparer un cabinet de conseil, l'éditeur de son logiciel de paie, un centre de formation habilité et un indépendant. Le critère utile tient en peu de mots : combien de temps la séance consacre-t-elle à vos pièces, et lesquelles ? Un relevé nominatif de la CNSS vidé de ses noms, un tableau de variables de paie, un projet de contrat écrit en français, une annonce à diffuser : voilà de quoi juger une formation, bien plus que le nombre d'outils présentés.",
                "Deux vérifications complètent le choix. Chaque taux, chaque délai, chaque seuil est-il rattaché à son texte ou à la page de l'organisme, avec le jour de lecture ? Et la dernière demi-journée met-elle chaque participant seul devant une tâche réelle de son poste, chronomètre en main ? Une démonstration sans épreuve laisse les gens admiratifs mais incapables de recommencer le lundi suivant.",
                "Avant le premier exercice, le service classe ses documents en trois groupes : ceux qui servent tels quels, ceux qu'on anonymise d'abord, et ceux qui ne quittent jamais l'entreprise, comme un certificat médical, un acte de naissance fourni pour l'immatriculation d'un salarié ou un bulletin nominatif.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelle place tient le salariat dans l'économie nigérienne, et quels guichets un employeur utilise-t-il ?",
            'paragraphes' => [
                "Le salariat n'est qu'une fraction de l'emploi, d'où l'importance, pour les entreprises qui l'emploient, de tenir leurs dossiers avec rigueur. L'enquête régionale intégrée sur l'emploi et le secteur informel, menée par l'Institut national de la statistique (INS) avec l'appui d'AFRISTAT sur les données de 2017 et synthétisée en juillet 2019, donne un taux de salarisation de 25,1 % dans le secteur non agricole : 30,8 % chez les hommes, 14,8 % chez les femmes. Ces chiffres ont près de dix ans, et la page ne les présente que comme un repère de contexte.",
                "Côté guichets, trois institutions reviennent dans le quotidien d'un service du personnel. La Caisse nationale de sécurité sociale (CNSS), établissement public placé sous la tutelle du ministère chargé du travail, gère les prestations familiales, les accidents du travail et les maladies professionnelles, ainsi que les pensions de vieillesse, d'invalidité et de survivants. La direction générale des impôts reçoit l'impôt sur les traitements et salaires retenu chaque mois. L'Agence nationale pour la promotion de l'emploi (ANPE) est financée en partie par une cotisation patronale prélevée avec celles de la CNSS.",
                "Le Cleiss, organisme public français d'information sur les régimes étrangers, précise dans son édition 2024 que le régime nigérien ne comporte pas d'assurance chômage pour les salariés. À sa place, l'employeur qui licencie pour motif économique verse une indemnité de licenciement d'un mois de salaire brut, plus une indemnité de départ pour les salariés ayant au moins un an d'ancienneté continue, calculée à 20 % par année de un à cinq ans, 30 % de six à dix ans et 35 % au-delà. Ce sont des repères pour construire un tableau de simulation, jamais une règle à appliquer sans l'avis du juriste.",
                "Le Cleiss relève aussi que la couverture santé obligatoire des salariés est un projet : la stratégie nationale de couverture sanitaire universelle 2021-2030, adoptée par le décret n° 2021-583 du 23 juillet 2021, prévoit un régime contributif d'assurance maladie obligatoire pour les salariés. Un service RH n'a donc pas, aujourd'hui, de ligne de cotisation maladie à paramétrer d'après cette source, et il vérifie auprès de la CNSS si cela a changé.",
                "L'IA intervient en amont de ces guichets, jamais à leur place. Elle aide à préparer les tableaux, à ranger les pièces et à rédiger les courriers ; les déclarations, les versements et les signatures reviennent à la personne mandatée par la société.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se calculent et se paient les cotisations de la CNSS, et que laisser au tableur ?",
            'paragraphes' => [
                "Deux documents de la CNSS donnent les taux, avec une divergence qui mérite d'être notée. Le guide de l'employeur de décembre 2019, publié sur cnss.ne, indique 8,4 % de prestations familiales et 1,75 % d'accidents du travail à la charge exclusive de l'employeur, 11,50 % pour les retraites dont 6,25 % côté employeur et 5,25 % côté salarié, et 0,5 % pour l'ANPE. Le tableau du Cleiss au 1er janvier 2024 reprend les mêmes branches mais compte 1 % pour l'ANPE, d'où un total employeur de 17,40 % et un total salarié de 5,25 %.",
                "La différence de 0,5 point entre les deux sources appelle une règle de travail : un taux ne se saisit dans un classeur qu'après confirmation par la CNSS, avec la date de la réponse en commentaire. Le plafond, lui, concorde : 6 000 000 FCFA par an et par salarié dans le guide, 500 000 FCFA par mois chez le Cleiss. La partie du salaire au-delà n'entre pas dans l'assiette.",
                "L'assiette elle-même est détaillée dans le guide, qui renvoie à l'arrêté n° 0697/MFP/T/E du 11 juin 1997 : salaire de base, indemnités de congés payés et de préavis, heures supplémentaires, gratifications et primes même bénévoles, pourboires, avantages en nature comme le logement ou l'eau et l'électricité. Les indemnités de licenciement, les indemnités de transport, les remboursements de frais de mission ou les primes de panier en sont exclus. Une colonne du tableur par élément, avec la mention « dans l'assiette : oui ou non », évite bien des erreurs.",
                "Le rythme de paiement dépend de la taille de l'entreprise. D'après le même guide, les employeurs de vingt salariés et plus paient chaque mois, dans les trente jours qui suivent la fin du mois, et ceux de moins de vingt salariés paient chaque trimestre, dans les trente jours qui suivent la fin du trimestre. Les cotisations sont « portables et non quérables » : ne pas recevoir les imprimés ne justifie pas un retard.",
                "Exemple fictif, à refaire à la main : un salarié inventé gagne 120 000 FCFA par mois, sans élément hors assiette. La part salariale de retraite à 5,25 % donne 6 300 FCFA, et la part employeur à 6,25 % donne 7 500 FCFA. L'assistant explique la formule, le participant recalcule deux lignes seul avant de se fier au tableau.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels délais et quelles pénalités jalonnent la relation avec la CNSS, et comment les surveiller ?",
            'paragraphes' => [
                "Le guide de l'employeur de 2019 fixe plusieurs échéances que le service peut transformer en alertes. L'immatriculation d'un salarié est demandée huit jours après l'embauche, sur un imprimé de la CNSS signé par le travailleur et l'employeur, accompagné d'une copie certifiée de l'acte de naissance ou du jugement qui en tient lieu. L'accident du travail se déclare dans les quarante-huit heures, le premier jour étant à la charge de l'employeur.",
                "La déclaration nominative est trimestrielle pour tous les employeurs : le guide cite l'article 34 du décret n° 2005-64 du 11 mars 2005 et demande de l'envoyer dans les trente premiers jours de chaque trimestre, avec, pour chaque salarié, le total des rémunérations jusqu'au plafond et la durée du travail. Les employeurs de vingt salariés ou plus y ajoutent, avec le paiement mensuel, une déclaration du montant global des salaires.",
                "Les sanctions décrites par le guide sont précises. Une cotisation payée hors délai est majorée de 5 %, puis de 2 % par mois ou fraction de mois après trois mois de retard. Le défaut de déclaration dans les délais coûte 200 FCFA par salarié figurant sur la dernière déclaration, et la même somme s'applique en cas d'inexactitude ou d'omission d'un salarié. Une demande gracieuse de réduction des pénalités peut être adressée à la commission de recours gracieux de la CNSS, mais le guide précise qu'elle n'est recevable qu'après règlement de toutes les cotisations en cause.",
                "Un calendrier de suivi se construit simplement : une feuille d'embauches avec la date limite d'immatriculation calculée à côté, une feuille de trimestres avec la date d'envoi de la déclaration nominative, une feuille de mois avec la fin du délai de paiement. L'assistant propose les formules ; le texte du guide, ou mieux la réponse écrite de la CNSS, fixe les dates. Le guide date de 2019 et la page « déclaration de salaire » de cnss.ne ne porte aucune date : un échange avec la direction du recouvrement ou l'agence régionale vérifie qu'aucun délai n'a changé.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Le nouveau code des impôts change-t-il la retenue de l'ITS, et que relire avant de paramétrer un classeur ?",
            'paragraphes' => [
                "Un employeur nigérien doit dater tout ce qu'il lit sur l'impôt sur les traitements et salaires (ITS), parce que le code a changé. Aïr Info a rapporté le 15 juillet 2025 qu'un nouveau code général des impôts, signé le 14 juillet 2025, entrerait en vigueur le 1er janvier 2026 et abrogerait le code en vigueur depuis 2012. Le Sahel, quotidien de l'ONEP, a ensuite publié le 15 janvier 2026 le compte rendu d'une conférence du directeur général des impôts, qui désigne ce texte comme l'ordonnance n° 2025-22 du 14 juillet 2025 et cite l'article 150 pour l'ITS.",
                "Selon cet article, le directeur général a déclaré que la loi de finances pour 2026 rétablit le barème de retenue utilisé depuis plus de dix ans, après des erreurs de rédaction dans le barème introduit par l'ordonnance, et que l'ITS « n'augmentera pas d'un franc » en 2026. L'article ne reproduit ni tranches ni abattements. Le service paie lit donc le barème dans le texte à jour, ou le demande à son centre des impôts, avant de le saisir.",
                "L'ancien code, la loi n° 2012-37 du 20 juin 2012 dans la version mise à jour à la loi de finances 2023, éclaire pourtant la logique générale. Son article 61 calculait l'impôt sur un revenu net mensuel arrondi au millier de francs inférieur. L'article 60 déduisait du revenu les retenues de pension limitées à 6 % de la rémunération principale brute, puis un abattement de 13 % pour frais professionnels. L'article 65 accordait un abattement pour charges de famille de 5 % pour une charge, 10 % pour deux, jusqu'à 15 % pour six et 30 % pour sept. Ce code est abrogé : ces chiffres servent de modèle de structure pour des colonnes de tableur, pas de valeurs à reprendre.",
                "Sur le calendrier, l'ancien code demandait, à l'article 117 bis, une déclaration mensuelle de l'ITS au plus tard le 15 du mois suivant, et l'article 1055 chargeait tout employeur établi au Niger de calculer et de retenir l'impôt chaque mois sur les salaires nets taxables, quels que soient le statut, la nationalité ou le domicile fiscal du salarié. Les numéros d'articles du nouveau code diffèrent, et la date limite se confirme sur le texte en vigueur ou auprès de la DGI.",
                "En séance, le même classeur sert à ranger les paramètres : une feuille « paramètres » avec une ligne par taux, la source, la date de lecture et le nom de la personne qui a confirmé. L'assistant aide à structurer cette feuille, à expliquer une formule imbriquée et à rédiger en deux phrases la raison d'une variation de retenue d'un mois à l'autre. Il ne devine aucune tranche.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que dit le code du travail de 2012 du contrat écrit, du CDD et de l'essai, et comment s'en servir sans interpréter ?",
            'paragraphes' => [
                "Le Niger a son code du travail dans la loi n° 2012-45 du 25 septembre 2012, que le guide de la CNSS cite pour définir l'employeur et le travailleur. WageIndicator, dans sa page mise à jour le 20 avril 2026, y ajoute une convention collective interprofessionnelle de 2022 et le décret n° 2017-682. Cette page ne remplace pas le texte : pour une situation précise, le service s'adresse à l'inspection du travail et au juriste de la société.",
                "D'après WageIndicator, un contrat verbal est considéré comme conclu pour une durée indéterminée ; le contrat à durée déterminée, celui des travailleurs étrangers et celui qui suppose un déplacement doivent être écrits. Un contrat écrit est rédigé en français et en cinq exemplaires. Un CDD ne peut pas servir à un emploi permanent, sinon il est réputé indéterminé. Sa durée maximale est de deux ans, renouvelable une fois, dans la limite de quarante-huit mois au total, et la poursuite du travail après son terme le transforme en contrat à durée indéterminée.",
                "Pour l'essai, la même page distingue trois niveaux : huit jours pour les travailleurs payés à l'heure ou à la journée, un mois pour les ouvriers, agents de maîtrise et techniciens payés au mois, trois mois pour les cadres et ingénieurs. Il est facultatif, doit être écrit s'il existe, et peut être renouvelé une fois avec l'accord des parties, avec un maximum d'un mois pour un CDD et de six mois pour un CDI, et jusqu'à un an pour une personne recrutée hors du Niger. La source est un site d'information sur le droit du travail, pas le Journal officiel.",
                "L'assistant n'est donc la source d'aucune de ces durées. Il peut proposer une trame à partir d'un modèle validé par l'entreprise, faire un tableau des mentions à remplir (poste, catégorie, salaire, essai, préavis), compter cinq exemplaires à imprimer et lister les points que le juriste doit confirmer. Un participant qui prépare un CDD de remplaçant calcule la date de fin avec le tableur, puis vérifie qu'elle respecte le plafond lu dans le texte.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles obligations de la HAPDP pèsent sur les dossiers du personnel et les candidatures reçues ?",
            'paragraphes' => [
                "L'autorité de protection des données est la Haute Autorité de Protection des Données à caractère Personnel (HAPDP). Data Protection Africa, dans une fiche mise à jour le 25 mai 2022, cite la loi n° 2017-28 du 3 mai 2017, modifiée par la loi n° 2019-71 de décembre 2019, et indique que la HAPDP a annoncé son lancement officiel le 5 août 2020. Des textes plus récents ont pu s'y substituer : la HAPDP précise lequel s'applique à une situation donnée, et la page n'en tire aucune lecture juridique.",
                "La même fiche rapporte que les transferts de données vers un autre pays ne sont permis qu'avec un niveau de protection supérieur ou équivalent. SysWake, un prestataire spécialisé, ajoute dans une liste de contrôle non officielle que les traitements sensibles, comme la santé, la biométrie ou les infractions, demandent une autorisation préalable plus exigeante qu'une simple déclaration. Pour un service du personnel, certificats médicaux, mesures d'aptitude du travail et accidents entrent dans cette zone de prudence.",
                "Un fichier de salariés contient identité, filiation, numéro de CNSS, salaire, situation de famille et parfois santé. Les candidatures reçues par courriel ou par WhatsApp en contiennent tout autant. En séance, les règles sont concrètes : des dossiers inventés pour s'exercer, aucun bulletin ni acte de naissance réel collé dans un assistant en ligne, un responsable nommé qui décide de ce qui peut sortir de l'entreprise.",
                "Le tri des candidatures appelle une précaution à part. Les critères se fixent par écrit avant d'ouvrir les CV, l'assistant résume des dossiers fictifs, et la décision d'embaucher revient à une personne qui peut l'expliquer à un candidat qui la conteste. La nécessité d'une déclaration ou d'une autorisation pour un usage donné est une question à poser à la HAPDP ou à un juriste, pas à un assistant.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels gestes du service du personnel nigérien se préparent avec un assistant, et qui les relit ?",
            'legende' => "Sept exercices bâtis sur les documents et les échéances décrits plus haut, chacun répété sur une pièce inventée. Le service peut s'appuyer sur ses propres logiciels, ou sur des comptes gratuits créés pour la formation.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Calendrier des immatriculations à la CNSS pour les embauches du mois', 'Classeur Excel ou Sheets, formule expliquée par l\'assistant', 'Une ligne par salarié fictif, avec la date limite de huit jours calculée à côté de la date d\'embauche', 'Délai confirmé auprès de la CNSS ; dates rapprochées du dossier papier ; aucun vrai nom saisi'],
                ['Relevé nominatif trimestriel des rémunérations', 'Tableur de contrôle', 'Total par salarié plafonné à 500 000 FCFA par mois, durée du travail en regard, écarts avec le trimestre précédent signalés', 'Plafond et taux relus dans les documents de la CNSS ; deux lignes recalculées à la main ; imprimé officiel rempli par la personne mandatée'],
                ['Tableau de l\'assiette des cotisations', 'Classeur avec une colonne par élément de salaire', 'Chaque prime classée « dans l\'assiette » ou « hors assiette », avec le motif', 'Liste confrontée à l\'arrêté cité par le guide de la CNSS ; cas douteux transmis à l\'agence régionale'],
                ['Feuille de paramètres fiscaux de la paie', 'Tableur', 'Une ligne par taux ou seuil avec source, date de lecture et nom du confirmant', 'Barème de l\'ITS lu dans le code en vigueur ou confirmé par le centre des impôts ; aucune valeur reprise de l\'ancien code sans vérification'],
                ['Projet de contrat à durée déterminée pour un poste de remplacement', 'Assistant d\'IA et modèle du service', 'Trame en français avec poste, catégorie, salaire, essai et préavis à renseigner, cinq exemplaires prévus', 'Mentions et durées confrontées au code du travail et validées par le juriste ; contrat remis par écrit au salarié'],
                ['Annonce de recrutement et grille de sélection', 'Assistant d\'IA', 'Texte de l\'annonce, version courte pour un message, critères fixés avant ouverture des CV', 'Salaire annoncé repris de la direction ; aucun critère étranger au poste ; décideur nommé'],
                ['Note interne sur un changement d\'horaires ou de congés', 'Assistant d\'IA, traitement de texte', 'Brouillon clair, en français, avec la date d\'effet', 'La direction relit et décide ; le texte ne promet rien que le contrat ne prévoit'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles échéances un employeur nigérien place-t-il dans son calendrier de paie ?",
            'legende' => "Repères tirés du guide de la CNSS (décembre 2019), du Cleiss et de l'ancien code des impôts. Aucun ne se saisit sans confirmation de l'organisme concerné.",
            'entetes' => ['Moment', 'Obligation relevée', 'Texte ou organisme', 'Appui de l\'assistant'],
            'lignes'  => [
                ['Huit jours après l\'embauche', 'Demande d\'immatriculation du salarié à la CNSS', 'Guide de la CNSS, arrêté n° 477/MFP/T de 1968', 'Calculer la date limite dans le calendrier d\'embauches'],
                ['Quarante-huit heures après un accident', 'Déclaration de l\'accident du travail', 'Guide de la CNSS ; Cleiss', 'Préparer une trame de message à compléter par le responsable'],
                ['Chaque mois, pour vingt salariés et plus', 'Paiement des cotisations dans les trente jours après la fin du mois, avec déclaration du total des salaires', 'Guide de la CNSS, décret n° 2005-64', 'Afficher la fin du délai dans la feuille du mois'],
                ['Chaque trimestre, sous vingt salariés', 'Paiement dans les trente jours après la fin du trimestre', 'Guide de la CNSS', 'Rappeler les quatre échéances de l\'année'],
                ['Trente premiers jours du trimestre', 'Déclaration nominative des rémunérations du trimestre écoulé', 'Guide de la CNSS, article 34 du décret de 2005', 'Rapprocher les totaux de l\'état de paie'],
                ['Le 15 du mois suivant', 'Déclaration de l\'ITS de l\'ancien code (article 117 bis), à reconfirmer dans le code en vigueur', 'Ancien code des impôts de 2012, version loi de finances 2023', 'Signaler les échéances dépassées dans le calendrier'],
                ['En cas de retard à la CNSS', 'Majoration de 5 %, puis 2 % par mois après trois mois', 'Guide de la CNSS, article 33 du décret de 2005', 'Chiffrer l\'écart sur un exemple fictif'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que prévoir côté connexion et organisation pour former à distance un service RH nigérien ?",
            'paragraphes' => [
                "L'heure ne pose aucun problème. Dans la base de fuseaux de l'IANA, Africa/Niamey est lié à Africa/Lagos, comme Africa/Porto-Novo, et la zone Africa/Lagos est à UTC+1 sous le sigle WAT, sans règle d'heure d'été. Niamey et Cotonou partagent donc la même heure toute l'année : une séance fixée à 9 h à Niamey démarre à 9 h pour Richard.",
                "Pour la connexion, l'ARCEP, le régulateur des communications électroniques, a compté 17 737 818 lignes mobiles à la fin de septembre 2025, soit 62,93 % de la population estimée par l'INS à 28 184 991 habitants, et 8 488 371 abonnés à l'internet mobile. Le premier opérateur, Celtel Niger, détient 46,68 % du parc, devant Moov Africa Niger (24,50 %), Zamani Com (23,41 %) et Niger Telecoms (5,41 %). Une ligne n'est pas une personne connectée : un participant peut suivre depuis son téléphone et perdre le réseau par moments.",
                "Le déroulement en tient compte : les classeurs d'exercice arrivent avant la séance, les supports sont écrits, et en cas de coupure on applique la solution de repli décrite sur la fiche IA en entreprise. Le questionnaire d'avant-session recense le poste de chacun, l'appareil qu'il utilise et le logiciel de paie du service.",
                "Les contrats écrits se rédigent en français, d'après WageIndicator, et les formations se déroulent dans cette langue, sur le classeur ou le logiciel que le service utilise déjà. Aucun abonnement n'est présumé : des comptes gratuits suffisent pour apprendre la méthode.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Atelier, deux jours ou séances courtes : quelle formule pour un service du personnel à Niamey ou en région ?",
            'legende' => "Les durées et les effectifs sont ceux de la fiche IA en entreprise. Les séances ont lieu à distance, Cotonou et Niamey étant à la même heure.",
            'entetes' => ['Format', 'Durée', 'Effectif', 'Situation type'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction qui veut voir deux tâches réelles avant de décider'],
                ['Formation complète', '2 jours en 4 demi-journées', '10 personnes au plus, un seul métier par groupe', 'Un service dont l\'usage de l\'IA a commencé sans règle commune'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipe répartie entre le siège de Niamey et des agences en région'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Plusieurs sociétés d\'un même groupe ou réseau ; exercices sur cas inventés'],
                ['Accompagnement mensuel', 'Une demi-journée par mois, trois mois de suite', 'Le groupe déjà formé', 'Étendre l\'usage à de nouvelles tâches une fois les premières maîtrisées'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule une formation RH pour une société nigérienne, du premier message au suivi ?",
            'items' => [
                ['titre' => "Premier message", 'duree' => "Réponse sous 24 heures", 'texte' => "Vous décrivez la société, le nombre de salariés (ce qui fixe le rythme de paiement à la CNSS), les postes concernés et le logiciel de paie. Un ou deux entretiens de cadrage choisissent la formule et les tâches."],
                ['titre' => "Préparation", 'duree' => "Questionnaire et documents", 'texte' => "Chaque participant remplit un questionnaire. Le service prépare des copies vidées de tout nom réel de ses relevés, tableaux de variables et modèles de contrats, téléchargées avant la première séance."],
                ['titre' => "Séances", 'duree' => "Demi-journées ou séances de 2 h 30", 'texte' => "Une tâche du service ouvre chaque séquence, le texte ou la page de l'organisme est lu en groupe, puis le geste est refait dans l'outil sur une pièce fictive."],
                ['titre' => "Épreuve finale", 'duree' => "Dernière demi-journée", 'texte' => "Seul et chronomètre en main, chaque participant traite une tâche de son poste et dit ce qu'il a contrôlé avant d'utiliser le résultat."],
                ['titre' => "Remise", 'duree' => "Fin de session", 'texte' => "Supports, exercices corrigés et attestation nominative sont remis à chacun."],
                ['titre' => "Suivi", 'duree' => "Le mois suivant", 'texte' => "Un canal direct reste ouvert un mois pour les questions d'application ; un accompagnement mensuel peut suivre."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels scénarios de séance travaille-t-on avec une équipe RH nigérienne, et que vérifie chaque participant ?",
            'intro' => "Toutes les situations sont inventées : sociétés, salariés et montants n'existent que dans l'exercice.",
            'items' => [
                ['titre' => "Séance 1 : cinq embauches d'un grossiste de Maradi en un mois", 'texte' => "Situation : une société fictive de vingt-deux salariés recrute cinq personnes. Consigne : bâtir le calendrier des immatriculations et préparer la liste des pièces à réunir pour chaque dossier. Le participant fait confirmer le délai de huit jours par la CNSS, rapproche les dates du dossier papier et vérifie qu'aucun acte de naissance réel n'a été collé dans l'assistant."],
                ['titre' => "Séance 2 : le relevé du trimestre d'une entreprise de transport de Zinder", 'texte' => "Situation : un tableau fictif de dix-huit chauffeurs dépasse le plafond pour deux personnes et omet un salarié parti en cours de trimestre. Consigne : repérer les écarts avec le trimestre précédent et résumer le dossier en deux phrases. Le participant recalcule le plafond mensuel à la main et laisse l'envoi du relevé à la personne mandatée."],
                ['titre' => "Séance 3 : une prime de fin d'année et la question de l'assiette", 'texte' => "Situation : une société fictive de Niamey verse une gratification et une indemnité de transport. Consigne : classer chaque élément dans l'assiette ou hors assiette et rédiger la note d'explication. Le participant confronte le classement à la liste de l'arrêté citée par la CNSS et pose les cas douteux à l'agence régionale."],
                ['titre' => "Séance 4 : un CDD de remplacement et une grille de présélection", 'texte' => "Situation : un poste de comptable à pourvoir pour un congé, quatorze candidatures fictives. Consigne : esquisser le contrat écrit en français et des critères arrêtés avant d'ouvrir les CV. Le participant fait valider la durée et l'essai par un juriste, prévoit les exemplaires et vérifie que la décision revient à une personne nommée."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Une société nigérienne peut-elle faire financer la formation de son personnel RH, et par quel canal ?",
            'paragraphes' => [
                "Le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA) est le fonds public de référence. Sa page « public cible » vise les salariés des entreprises assujetties ou non à la taxe d'apprentissage, les organismes de formation et les maîtres d'apprentissage. Elle pose trois conditions : être une structure légalement reconnue, formuler une demande de financement, et, pour une entreprise assujettie à la taxe d'apprentissage, disposer d'un plan de formation. Un organisme de formation doit en outre être habilité par le FAFPA comme opérateur. Aucun taux ni montant n'y figure.",
                "Cette dernière condition concerne directement Richard SALANON, qui n'affiche l'habilitation d'aucun fonds public : une prise en charge par le FAFPA ne doit pas être présumée, et la question d'un prestataire installé hors du Niger se pose au fonds par écrit, devis et programme joints. Le fonds a ses bureaux à Niamey et des antennes à Agadez, Diffa, Tillabéri, Dosso, Tahoua, Maradi et Zinder.",
                "L'ancien code des impôts, dans sa version à jour de la loi de finances 2023, instituait par ses articles 127 à 133 une taxe d'apprentissage de 3 % sur les salaires versés aux travailleurs nigériens et de 5 % sur ceux des travailleurs non nigériens, due par les entreprises soumises à un régime réel. L'article 132 prévoyait des réductions, sur demande jointe à la déclaration annuelle, pour les dépenses de formation des travailleurs déjà en activité. Ce texte ayant été remplacé, la comptable ou l'expert-comptable vérifie dans le code en vigueur si ce mécanisme existe encore avant d'y compter ; la page n'en tire aucune promesse.",
                "Le plus sûr reste d'inscrire la formation au budget courant de la société, en FCFA, et de traiter toute aide comme un complément éventuel. La dépense peut se fractionner : un atelier d'une demi-journée avec une équipe pilote, puis la formation complète ou l'accompagnement mensuel si les résultats convainquent.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien prévoir pour former un service du personnel nigérien, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est affiché sur cette page. Le devis se rédige en FCFA après le cadrage ; les abonnements aux assistants d'IA restent à la charge de la société.",
            'items'      => [
                ['offre' => 'Atelier découverte pour le personnel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée en visioconférence', 'Deux tâches sur pièces inventées', 'Règles de base sur les données du personnel']],
                ['offre' => 'Formation complète RH et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Deux jours répartis en quatre demi-journées', 'Exercices bâtis sur vos relevés anonymisés', 'Épreuve chronométrée et attestation nominative', 'Canal direct pendant un mois']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois, trois mois de suite', 'Reprise des cas du mois et nouvelles tâches']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, un groupe ne mêlant qu'un seul métier.",
                "La formule retenue et le nombre de séances à distance.",
                "Le temps de préparation des exercices à partir de vos relevés et de vos modèles.",
                "Les outils à couvrir : un tableur seul, ou aussi le logiciel de paie utilisé.",
                "Le suivi souhaité après la dernière séance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs guettent un service du personnel nigérien qui se lance dans l'IA ?",
            'intro' => "Elles naissent de la pression des échéances : huit jours pour l'immatriculation, trente jours pour les cotisations, un poste à pourvoir.",
            'items' => [
                ['titre' => "Retenir un taux sans le dater", 'texte' => "Deux documents de la CNSS donnent 0,5 % et 1 % pour l'ANPE. Le taux qui entre dans le classeur est celui que la caisse confirme par écrit, avec la date."],
                ['titre' => "Appliquer un barème de l'ancien code", 'texte' => "Un nouveau code est en vigueur depuis le 1er janvier 2026. Un assistant qui répond de mémoire peut citer des tranches, des abattements ou des articles d'avant ; la feuille de paramètres porte la source et la date."],
                ['titre' => "Confondre rythme mensuel et trimestriel", 'texte' => "Le seuil est de vingt salariés. Une société qui passe de dix-neuf à vingt embauches change de calendrier : le tableur recompte l'effectif chaque mois."],
                ['titre' => "Oublier un élément dans l'assiette", 'texte' => "Une prime « bénévole » entre dans l'assiette, selon le guide de la CNSS, alors qu'une indemnité de transport n'y entre pas. Une colonne « dans l'assiette » par élément évite les redressements."],
                ['titre' => "Laisser un CDD sans écrit ou sans fin", 'texte' => "D'après WageIndicator, un CDD doit être écrit, il est réputé à durée indéterminée s'il occupe un emploi permanent, et il se convertit en contrat indéterminé si le travail continue à son terme. Le tableur calcule la fin, et le juriste valide le texte."],
                ['titre' => "Coller un acte de naissance dans un assistant", 'texte' => "L'immatriculation exige une copie certifiée de l'acte de naissance, pièce d'état civil qui ne sort jamais du service. Les exercices utilisent des copies inventées."],
                ['titre' => "Laisser l'outil trier les candidats", 'texte' => "Le résumé devient un classement que nul ne conteste. Une grille écrite avant la lecture et un décideur nommé gardent la main."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi choisir Richard SALANON pour former une équipe RH ou paie au Niger ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Niger fait partie des " . count((array) fait('pays_travailles')) . " pays où Richard a travaillé. Auprès d'un service du personnel nigérien, il peut animer en visioconférence des séances sur les assistants d'IA et les tableurs, sur la même heure légale qu'à Niamey. Il n'occupe aucun poste RH : les cas viennent de vos modèles vidés de leurs données, et le droit reste l'affaire du conseil de la société.",
                "Il compte " . $ans . " ans dans le numérique et sort de " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "). Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Aucun éditeur d'IA ni de logiciel de paie ne l'a certifié.",
                "Ses travaux sont décrits sur la page des <a href='/realisations/'>réalisations</a>, son parcours sur la page <a href='/richard-salanon'>Richard SALANON</a> et les pays servis sur les <a href='/zones/'>zones d'intervention</a>. Pour prolonger cette page : <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, <a href='/formations/excel-google-sheets'>Excel et Google Sheets pour la gestion</a> et <a href='/formations/ia-en-entreprise'>IA en entreprise</a>. Le fonctionnement des sessions est détaillé sur la page <a href='/services/formation-en-entreprise'>formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Un service du personnel nigérien à former à l'IA : comment démarrer ?",
            'texte'  => "Écrivez le nombre de salariés, les postes concernés, la ville et le logiciel de paie utilisé. Vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon équipe RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH à l'IA au Niger ?", 'r' => "Richard SALANON, depuis Cotonou, peut conduire en visioconférence des séances pour des équipes RH et paie nigériennes, avec un assistant d'IA essayé sur des copies anonymisées de leurs documents. Il transmet la maîtrise de l'outil, pas celle du droit social ni de la fiscalité."],
        ['q' => "Quels taux de cotisation la CNSS applique-t-elle ?", 'r' => "Le Cleiss, au 1er janvier 2024, donne 17,40 % à la charge de l'employeur et 5,25 % à celle du salarié, avec un plafond mensuel de 500 000 FCFA. Le guide de la CNSS de 2019 compte 0,5 % pour l'ANPE contre 1 % chez le Cleiss : la CNSS confirme le taux avant paramétrage."],
        ['q' => "Dans quel délai immatriculer un salarié à la CNSS ?", 'r' => "Le guide de l'employeur de la CNSS (décembre 2019) indique huit jours après l'embauche, sur un imprimé signé du salarié et de l'employeur, avec une copie certifiée de l'acte de naissance. Un accident du travail se déclare dans les quarante-huit heures."],
        ['q' => "Un employeur paie-t-il ses cotisations chaque mois ou chaque trimestre ?", 'r' => "Selon le guide de la CNSS, chaque mois pour vingt salariés et plus, chaque trimestre en dessous, dans les trente jours suivant la fin de la période. Une majoration de 5 % s'applique en cas de retard."],
        ['q' => "Le Niger a-t-il un nouveau code des impôts ?", 'r' => "Aïr Info rapportait le 15 juillet 2025 un nouveau code entrant en vigueur le 1er janvier 2026 et abrogeant celui de 2012. Le Sahel cite l'ordonnance n° 2025-22 du 14 juillet 2025. Lisez le barème de l'ITS dans le texte à jour."],
        ['q' => "Un assistant d'IA peut-il calculer l'ITS à ma place ?", 'r' => "Il explique une formule et aide à structurer le tableau, mais il ne fixe aucune tranche. Le participant lit le barème dans le texte en vigueur, recalcule deux lignes à la main et laisse la déclaration à la personne mandatée."],
        ['q' => "Un CDD doit-il être écrit au Niger ?", 'r' => "D'après WageIndicator (page mise à jour le 20 avril 2026), oui, et en français, en cinq exemplaires. Sa durée maximale est de deux ans, renouvelable une fois. Vérifiez le code du travail avec un juriste."],
        ['q' => "Peut-on coller des dossiers de salariés dans un assistant en ligne ?", 'r' => "Pas avec les identités. Data Protection Africa rapporte que les transferts de données vers l'étranger exigent un niveau de protection équivalent ou supérieur. Les exercices emploient donc des cas inventés ; la HAPDP précise les démarches."],
        ['q' => "Y a-t-il un décalage horaire entre Niamey et Cotonou ?", 'r' => "Aucun. La base IANA lie Africa/Niamey et Africa/Porto-Novo à Africa/Lagos, en UTC+1 sans heure d'été : les deux villes ont la même heure toute l'année."],
        ['q' => "Le FAFPA peut-il financer la formation d'un service RH ?", 'r' => "Sa page définit un public et des conditions (demande, plan de formation, opérateur habilité) sans taux ni montant. Interrogez-le par écrit avant de bâtir un budget sur lui, en demandant si un prestataire hors du Niger peut être retenu."],
        ['q' => "Comment le prix est-il fixé pour une équipe RH nigérienne ?", 'r' => "En FCFA, sur devis, une fois le cadrage fait : le nombre de personnes, la formule, le travail de préparation sur vos relevés et les logiciels à couvrir font varier le montant. Aucun tarif n'est publié sur cette page."],
        ['q' => "Que reçoivent les participants en fin de formation ?", 'r' => "Des supports, les exercices corrigés et une attestation nominative qui confirme leur participation et leur épreuve finale. Ce document n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "CNSS du Niger, guide de l'employeur (décembre 2019)", 'url' => 'https://cnss.ne/wp-content/uploads/2021/07/GUIDE-EMPLOYEURS.pdf', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Niger, déclaration de salaire", 'url' => 'https://cnss.ne/employeur/declaration-de-salaire/', 'date' => '2026-10-27'],
        ['titre' => "Cleiss, cotisations au Niger au 1er janvier 2024", 'url' => 'https://www.cleiss.fr/docs/cotisations/niger.html', 'date' => '2026-10-27'],
        ['titre' => "Cleiss, le régime nigérien de sécurité sociale (édition 2024)", 'url' => 'https://www.cleiss.fr/docs/regimes/regime_niger.html', 'date' => '2026-10-27'],
        ['titre' => "WageIndicator, contrats et licenciements au Niger (mise à jour du 20 avril 2026)", 'url' => 'https://wageindicator.org/fr-ne/travail-au-niger/droit-du-travail/contrats-et-licenciements', 'date' => '2026-10-27'],
        ['titre' => "Code général des impôts du Niger, loi n° 2012-37 du 20 juin 2012, version mise à jour à la loi de finances 2023 (abrogée au 1er janvier 2026)", 'url' => 'https://www.profisc.net/wp-content/uploads/2023/05/CGI-MAJ-LF-2023-17-01-2023.pdf', 'date' => '2026-10-27'],
        ['titre' => "Aïr Info, un nouveau code général des impôts adopté (15 juillet 2025)", 'url' => 'https://airinfoagadez.com/2025/07/15/niger-un-nouveau-code-general-des-impots-adopte/', 'date' => '2026-10-27'],
        ['titre' => "Le Sahel, loi de finances 2026 : le directeur général des impôts explique les nouvelles mesures fiscales (15 janvier 2026)", 'url' => 'https://www.lesahel.org/loi-de-finances-2026-le-directeur-general-des-impots-explique-les-nouvelles-mesures-fiscales/', 'date' => '2026-10-27'],
        ['titre' => "FAFPA Niger, public cible et conditions d'accès", 'url' => 'https://fafpa.org/index.php/fafpa/typography', 'date' => '2026-10-27'],
        ['titre' => "Data Protection Africa, fiche Niger", 'url' => 'https://dataprotection.africa/niger/', 'date' => '2026-10-27'],
        ['titre' => "SysWake, protection des données personnelles au Niger : la liste de contrôle", 'url' => 'https://syswake.org/fr/ressources/protection-des-donnees-personnelles-au-niger-et-da/', 'date' => '2026-10-27'],
        ['titre' => "ARCEP Niger, observatoire des communications électroniques, troisième trimestre 2025", 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf', 'date' => '2026-10-27'],
        ['titre' => "INS Niger et AFRISTAT, enquête régionale intégrée sur l'emploi et le secteur informel 2017, rapport de synthèse (juillet 2019)", 'url' => 'https://stat-niger.org/wp-content/uploads/rapport_enquete/Rapport_Synthese_Niger_Final_V4.pdf', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Niamey, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : Afrique (Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
