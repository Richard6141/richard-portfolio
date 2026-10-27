<?php
// ============================================================
// data/metiers/ressources-humaines/mali.php · Formation IA pour les
// responsables RH et les gestionnaires de paie au Mali.
// Statut F du métier, mais texte au conditionnel : Richard peut former ce
// public. Pays : « Déjà travaillé » = oui (faits.php). Aucun projet client du
// Mali dans projets-clients.php : aucun projet cité.
// Sources lues le 27/10/2026 : code général des impôts du Mali publié sur le
// site de la DGI (articles 1, 4, 9 à 12 de l'ITS, articles 159 et 160 de la CFE,
// articles 297 et 298, 413 à 415 et 421 du livre de procédures fiscales),
// pages de la DGI (ITS, déclarations mensuelles, actualités des 3 et 21 août
// 2026), Cleiss (régime et cotisations, édition 2025), WageIndicator (contrats,
// mise à jour du 30/03/2026), Ecofin Agency (02/06/2026), OIT (28/07/2026),
// Osiris (19/05/2024), Data Protection Africa, base IANA des fuseaux.
// Non repris car non lus à la source : texte intégral du code du travail de 1992
// et du code de prévoyance sociale, plafond de cotisation INPS, site de l'INPS
// (inaccessible), SMIG actuel, calendrier de la déclaration annuelle.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les responsables RH et les gestionnaires de paie maliens : états de salaires, retenues d'ITS, déclarations à l'INPS et contrats de travail préparés avec un assistant, sans exposer les données du personnel",
    'title'   => "Formation IA pour les RH au Mali | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Mali : INPS, ITS, CFE et données personnelles. À distance depuis Cotonou, devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former en visioconférence les responsables RH, les gestionnaires de paie et les chargés de recrutement des entreprises maliennes au travail avec un assistant d'IA, sur des copies anonymisées de leurs états de salaires, tableaux de déclarations sociales et fiscales, annonces et notes internes, avec une vérification humaine avant tout usage. L'heure de Bamako retarde d'une heure sur celle de Cotonou. Les barèmes de l'ITS, les cotisations de l'INPS et la contribution forfaitaire des employeurs servent de fil conducteur, relus à leur source. Le devis est établi en FCFA, sans aucun montant affiché ici.",
    'publie'  => '2026-12-27',
    'maj'     => '2026-12-27',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes RH d'une entreprise malienne à l'IA, et comment éviter la simple démonstration d'outil ?",
            'paragraphes' => [
                "Richard SALANON peut animer, depuis Cotonou et en visioconférence, des séances pour les services du personnel de Bamako, de Sikasso, de Ségou ou de Kayes. Il forme à l'usage d'un assistant d'IA, pas au droit social ni à la fiscalité : ces matières restent à la DGI, à l'INPS, à l'inspection du travail et aux juristes de chaque entreprise.",
                "Une entreprise malienne qui cherche un prestataire compare en général un cabinet de conseil, un éditeur de logiciel de paie, un organisme de formation et un indépendant. Le bon critère n'est pas le nombre d'outils montrés, mais la part de la séance passée sur des pièces du service : un état nominatif des salaires vidé de ses noms, une liste d'embauches à déclarer à l'INPS, un projet de contrat à durée déterminée.",
                "Trois questions permettent de trancher. Les exercices partent-ils de vos documents anonymisés ? Le formateur nomme-t-il, pour chaque taux ou chaque délai, le texte ou la page officielle d'où il vient, avec le jour où il l'a lu ? Et la séance finale exige-t-elle de chaque participant une tâche réelle de son poste, menée seul et mesurée au chronomètre ?",
                "Avant le premier exercice, le service trie ses documents en trois piles : ceux qu'on peut utiliser tels quels, ceux qu'on anonymise avant, et ceux qui restent dans l'entreprise. Un dossier médical, une copie de pièce d'identité ou un bulletin nominatif ne vont pas dans un assistant hébergé hors du Mali.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en sont l'emploi salarié et les démarches en ligne pour un employeur malien ?",
            'paragraphes' => [
                "Le salariat formel occupe une place étroite dans l'emploi malien, ce qui donne leur poids aux services du personnel des entreprises structurées. Ecofin Agency a rapporté le 2 juin 2026 qu'en 2024 près de 7 millions de personnes occupaient un emploi, selon l'Observatoire national de l'emploi et de la formation, et que 643 407 d'entre elles avaient un emploi salarié, soit 11,6 % de l'emploi total.",
                "Le même article décrit le Salon international de recrutement, dont la sixième édition s'est tenue à Bamako les 31 mai et 1er juin 2026. Sa nouveauté annoncée est la plateforme PLIO, qui permet de consulter des offres d'emploi et de postuler en ligne. L'article ne dit pas qui l'a développée : un service RH qui publie ses offres sur une plateforme en lit les conditions d'utilisation avant d'y déposer quoi que ce soit.",
                "Pour les impôts, la direction générale des impôts (DGI) met en avant sur son site trois téléservices, E-impôts, E-Quitus et E-Liasses. Un article du 3 août 2026 décrit E-impôts comme le portail des déclarations et des paiements en ligne, avec télédéclaration et télépaiement, et indique que la DGI a reçu le premier prix de l'administration la plus digitalisée lors de la quatrième Semaine du numérique, à Bamako. La page des déclarations de la DGI range l'ITS et la contribution forfaitaire à la charge des employeurs parmi les déclarations mensuelles.",
                "Côté protection sociale, le Cleiss, organisme public français d'information sur les régimes étrangers, présente dans son édition 2025 l'Institut national de prévoyance sociale (INPS) comme l'organisme qui gère, pour le secteur privé, les accidents du travail, la vieillesse-invalidité-décès et les prestations familiales, et qui recouvre les cotisations. L'assurance maladie obligatoire relève de la Caisse nationale d'assurance maladie (CANAM), avec délégation à l'INPS pour les salariés du privé. La même page précise que l'Agence nationale pour l'emploi, créée en 2001, n'est pas un régime d'assurance chômage.",
                "Le rôle de l'IA s'arrête donc avant le guichet en ligne : elle aide à construire et à contrôler les tableaux, puis à classer les justificatifs, sans jamais détenir un identifiant. Dépôts et paiements restent l'affaire de la personne mandatée par l'entreprise.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles cotisations l'INPS et la CANAM réclament-elles sur un salaire, et que garder pour l'assistant ?",
            'paragraphes' => [
                "Le Cleiss publie un tableau des cotisations des salariés du secteur privé au 1er janvier 2025. Côté employeur : 8 % pour les prestations familiales et les indemnités de maternité, 3,5 % pour l'assurance maladie obligatoire, de 1 à 4 % pour les accidents du travail selon les risques, 5,4 % pour la vieillesse, l'invalidité et les survivants, et 1 % de taxe ANPE. Côté salarié : 3,06 % pour l'assurance maladie et 3,6 % pour les pensions.",
                "Le Cleiss en tire un total employeur compris entre 18,9 et 21,9 % et un total salarié de 6,66 %. Sa page précise que les cotisations sont payées sur la totalité du salaire, sans plafond, n'indique pas la périodicité du paiement des salariés et date de 2025 : le service paie confirme taux, assiette et échéances auprès de l'INPS avant de les figer dans un classeur.",
                "Deux délais figurent sur la même source. Chaque embauche et chaque licenciement se déclarent à l'INPS dans les huit jours, et l'employeur déclare un accident du travail ou une maladie professionnelle immédiatement ou au plus tard dans les quarante-huit heures. Un tableau de suivi qui calcule ces échéances à partir de la date d'embauche est un exercice simple, utile et sans donnée sensible.",
                "Aucune cotisation réelle n'est calculée par l'assistant en séance. Chaque taux va dans sa propre cellule étiquetée ; l'outil explique une formule, puis le participant recalcule deux lignes sans lui. Pour un salarié fictif payé 300 000 FCFA, la part salariale de pension à 3,6 % donne 10 800 FCFA : le participant refait ce calcul avant de faire confiance au tableau.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment l'employeur malien retient-il l'ITS, et que lui laisse-t-on à vérifier dans un tableur ?",
            'paragraphes' => [
                "Dans le code général des impôts publié sur le site de la DGI, l'article 1 institue un impôt sur les traitements et salaires (ITS) applicable à toutes les sommes payées dans l'année aux salariés par les employeurs publics et privés, primes, gratifications et pourboires compris. L'article 9 le calcule en deux temps : un barème appliqué au revenu imposable, puis des réductions pour charges de famille sur l'impôt brut.",
                "L'article 10, issu de la loi n° 2016-10, fixe sept tranches à compter du 1er juillet 2015, de 0 % jusqu'à 330 000 FCFA à 37 % au-delà de 3 494 130 FCFA. L'article 11 prévoit une réduction de 10 % pour une personne mariée sans enfant à charge et de 2,5 % par enfant jusqu'au dixième. Ces montants datent du texte publié ; une loi de finances postérieure a pu les modifier, et le centre des impôts de rattachement confirme le barème applicable.",
                "Le livre de procédures fiscales dit qui retient et quand. L'article 413 oblige toute personne qui paie des sommes imposables à retenir l'impôt pour le compte du Trésor. Selon l'article 414, les retenues d'un mois sont déclarées et versées au plus tard le 15 du mois suivant, ou le premier jour ouvrable après cette date, à la caisse du receveur du centre des impôts ou, pour les grandes entreprises, du chef de la division de recouvrement concernée. L'article 415 permet un versement par trimestre lorsque la retenue d'un mois reste sous 5 000 FCFA.",
                "Un retard coûte cher : l'article 421 ajoute une amende fiscale de 2 % par mois de retard, plafonnée à 20 %. Dans le tableur, cela devient une colonne d'échéance et une alerte, pas un calcul confié à l'outil. L'assistant aide à nommer les colonnes (brut, avantages en nature, retenue de pension, revenu imposable, réductions de famille, impôt retenu), à décortiquer une formule imbriquée et à écrire en deux lignes pourquoi la retenue a varié depuis le mois dernier.",
                "Un point d'attention revient souvent : l'arrêté n° 99-0894/MFC-SG du 18 mai 1999, reproduit dans le code, retient les avantages en nature à la rémunération pour 50 % de leur valeur. Le participant relit cette règle dans le texte à jour avant de la coder dans une cellule, puis refait à la main la ligne d'un salarié fictif logé par l'entreprise.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que la contribution forfaitaire à la charge des employeurs change dans le budget paie d'une société malienne ?",
            'paragraphes' => [
                "La contribution forfaitaire à la charge des employeurs (CFE) pèse sur la masse salariale, pas sur le salarié. Les articles 159 et 160 du code général des impôts l'imposent aux particuliers et sociétés redevables de l'impôt sur les sociétés, de l'impôt sur les bénéfices industriels et commerciaux ou de l'impôt sur les bénéfices agricoles, au taux de 3,5 % du montant brut des rémunérations, avantages en nature compris, la base étant arrondie aux mille francs inférieurs.",
                "Le versement suit le même rythme que l'ITS. L'article 297 du livre de procédures fiscales demande de verser la contribution d'un mois dans les quinze premiers jours du mois suivant, au service des impôts dont relève le siège de l'employeur, et l'article 298 autorise un versement trimestriel quand la contribution mensuelle n'excède pas 5 000 FCFA. Chaque versement s'accompagne d'une déclaration datée et signée, selon l'article 301.",
                "Pour une société fictive dont la masse salariale brute du mois est de 4 000 000 FCFA, la CFE à 3,5 % ressort à 140 000 FCFA. L'exemple sert à vérifier une cellule, pas à fixer une obligation : la formation apprend à poser le taux dans une cellule étiquetée avec le numéro d'article et la date de lecture, afin que le prochain changement de loi de finances ne se cache pas dans dix formules.",
                "Le code prévoit aussi des exonérations temporaires pour certains recrutements de jeunes diplômés et pour des salariés précédemment licenciés pour motif économique, ainsi que la déduction de l'allocation versée à un stagiaire dans un cadre défini par décret. Ces cas d'espèce se confirment auprès du centre des impôts ; l'assistant peut préparer la liste des pièces à réunir, jamais conclure sur le droit à l'exonération.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que disent le code du travail et ses textes sur la forme du contrat, le CDD et l'essai, et comment s'en servir sans interpréter ?",
            'paragraphes' => [
                "Le code du travail malien est la loi n° 92-020 du 23 septembre 1992. WageIndicator, dont la page a été mise à jour le 30 mars 2026, y ajoute le décret n° 2022-0125/PT-RM du 4 mars 2022. Cette page ne résume pas leurs articles : pour une situation précise, les participants sont renvoyés au texte officiel, à l'inspection du travail et au juriste de l'entreprise.",
                "Selon WageIndicator, le contrat de travail peut être conclu par écrit ou verbalement, mais le contrat à durée déterminée doit obligatoirement être écrit, faute de quoi il est réputé à durée indéterminée. La période d'essai doit être stipulée par écrit, elle est en principe égale au préavis exigé pour rompre le contrat et ne peut pas dépasser six mois, renouvellement compris. Ces lectures viennent d'un site de référence, non du Journal officiel.",
                "L'usage prudent pour l'assistant tient en trois gestes. Il propose une trame de contrat à partir d'un modèle validé par l'entreprise. Il met en regard, dans un tableau, les mentions que le service doit remplir : poste, catégorie, durée, essai. Et il liste les points à faire confirmer par le juriste, sans jamais décider si une clause est valable.",
                "Une habitude simple protège : avant de faire rédiger un CDD, un renouvellement d'essai ou une lettre de rupture, le participant ouvre le texte en vigueur, note le numéro d'article et la date de sa lecture dans la marge du document. L'assistant n'est la source d'aucune règle ; il aide à rédiger ce que le service a déjà décidé.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que prévoit la loi malienne sur les données personnelles pour les fichiers du personnel et les candidatures ?",
            'paragraphes' => [
                "Le texte de base est la loi n° 2013-015 du 21 mai 2013, complétée par la loi n° 2017-070 du 18 décembre 2017. Data Protection Africa situe en 2016 le lancement de l'autorité chargée de l'appliquer, l'APDP. Les fiches individuelles, les états de paie et les candidatures reçues par courriel sont autant de fichiers de données personnelles.",
                "La fiche de Data Protection Africa, mise à jour pour la dernière fois le 25 mai 2022, mentionne une notification du traitement et subordonne l'envoi de données vers un autre pays à une protection juridique suffisante. La présente page n'est pas un avis juridique.",
                "En séance, cela se traduit par trois habitudes : des cas inventés pour s'exercer, aucun dossier nominatif collé dans un assistant en ligne, un responsable désigné pour trancher. Savoir si un usage précis exige une notification ou une démarche auprès de l'APDP revient à l'autorité et au juriste de l'entreprise.",
                "Le tri des candidatures demande une vigilance propre. L'assistant peut aider à rédiger des critères fixés avant d'ouvrir les CV et à résumer des dossiers fictifs ; la décision d'embaucher reste humaine, et un responsable nommé doit pouvoir l'expliquer au candidat qui la conteste.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels gestes de la paie et du recrutement maliens se préparent avec l'IA, et que relit-on à la main ?",
            'legende' => "Huit exercices tirés des échéances et des textes lus pour cette page, chacun joué sur une pièce fictive. Les outils sont ceux que le service possède ou des comptes gratuits créés pour la séance.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Offre d\'emploi d\'une société de Bamako, destinée à une plateforme de recrutement en ligne', 'Un assistant d\'IA au choix du service', 'Texte de l\'offre, variante courte pour mobile, critères de sélection fixés avant le dépouillement', 'Rémunération annoncée reprise de la direction, aucun critère étranger au poste, conditions de la plateforme relues'],
                ['Suivi des déclarations d\'embauche et de départ à l\'INPS', 'Classeur Excel ou Sheets, formule expliquée par l\'assistant', 'Chaque embauche sur sa ligne, avec la date limite de huit jours calculée en face', 'Délai confirmé sur la page du Cleiss et auprès de l\'INPS, dossier papier consulté pour la date réelle'],
                ['État des cotisations du mois', 'Excel ou Google Sheets', 'Colonnes par branche, parts patronale et salariale, total par salarié', 'Taux relus dans le tableau du Cleiss et confirmés à l\'INPS ; deux lignes recalculées à la main'],
                ['Tableau de l\'ITS retenu', 'Tableur de rapprochement', 'Revenu imposable, réductions de famille, impôt retenu, total à verser', 'Tranches relues à l\'article 10 du code dans sa version à jour ; jour limite du versement confirmé par le receveur'],
                ['Calcul de la CFE sur la masse salariale', 'Tableur de contrôle', 'Base arrondie, taux de 3,5 %, montant à verser', 'Articles 159 et 160 relus ; masse salariale rapprochée de celle de l\'état de paie'],
                ['Projet de contrat à durée déterminée', 'Assistant d\'IA, modèle du service', 'Trame écrite avec poste, catégorie, durée et clause d\'essai à valider', 'Mentions confrontées au code du travail et validées par le juriste ; exemplaire écrit remis au salarié'],
                ['Annonce interne d\'un changement de planning d\'équipe', 'Assistant d\'IA, traitement de texte', 'Brouillon d\'annonce clair et court', 'La direction relit et décide ; l\'outil ne tranche rien'],
                ['Synthèse d\'un entretien de fin d\'année', 'Assistant d\'IA, notes sans nom', 'Résumé factuel, suites à donner, dates', 'Pas de jugement sur la personne produit par l\'outil ; le responsable signe'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles échéances rythment le mois d'un employeur malien ?",
            'legende' => "Six repères tirés du code général des impôts de la DGI et des pages du Cleiss. Aucun ne se saisit dans un tableur sans confirmation de l'organisme concerné.",
            'entetes' => ['Moment', 'Obligation relevée', 'Organisme ou texte', 'Appui de l\'assistant'],
            'lignes'  => [
                ['Embauche ou licenciement', 'Déclaration à l\'INPS dans les huit jours', 'INPS, d\'après le Cleiss', 'Calculer la date limite dans le tableau de suivi'],
                ['Accident du travail', 'Déclaration immédiate ou au plus tard sous quarante-huit heures', 'INPS, d\'après le Cleiss', 'Préparer un modèle de message à compléter par le responsable'],
                ['Chaque paie', 'Retenue de l\'ITS pour le compte du Trésor ; part salariale des cotisations', 'Articles 413 du livre de procédures fiscales ; Cleiss', 'Vérifier que bulletin et tableau reprennent les mêmes lignes'],
                ['Le 15 du mois suivant', 'Déclaration et versement de l\'ITS retenu le mois précédent', 'Articles 414 et 415 du livre de procédures fiscales', 'Afficher le jour limite à ceux qui saisissent les variables'],
                ['Quinze premiers jours du mois suivant', 'Versement de la CFE', 'Article 297 du livre de procédures fiscales', 'Comparer la base à la masse salariale du mois'],
                ['En cas de retard sur l\'ITS', 'Amende de 2 % par mois, plafonnée à 20 %', 'Article 421 du livre de procédures fiscales', 'Signaler dans le tableau les échéances dépassées'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain prévoir pour une formation à distance auprès d'un service RH malien ?",
            'paragraphes' => [
                "Le décalage est d'une heure, et il ne bouge pas. Dans la base de fuseaux de l'IANA, Africa/Bamako renvoie à Africa/Abidjan, qui suit l'heure de Greenwich (UTC+0), tandis qu'Africa/Porto-Novo renvoie à Africa/Lagos (UTC+1). Aucune de ces zones ne change d'heure en cours d'année : une séance fixée à 9 h à Bamako démarre à 10 h pour Richard, à Cotonou.",
                "Pour la connexion, le ministre de l'Économie numérique du Mali a avancé, dans un discours repris par Osiris le 19 mai 2024, plus de 25 millions d'abonnés mobiles fin 2023 (téledensité de 109 %) et plus de 13 millions de clients internet, soit 42 % d'après son estimation. Les lignes dépassent largement les internautes réguliers : un participant peut suivre depuis son téléphone et se connecter par intermittence.",
                "La séance s'organise en conséquence. Les fichiers d'exercice sont téléchargés avant le début, chacun reçoit des supports écrits, et la solution de repli de la fiche IA en entreprise s'applique en cas de coupure. Un questionnaire préalable note, pour chaque personne, son poste, son navigateur, son tableur et son logiciel de paie.",
                "Tout se déroule en français, sur le classeur ou le logiciel qu'utilise déjà le service. Aucun abonnement n'est supposé : des comptes gratuits, ouverts pour l'occasion, suffisent à apprendre la méthode.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Atelier, deux jours ou séances courtes : quel format convient à un service du personnel malien ?",
            'legende' => "Durées et effectifs reprennent la fiche IA en entreprise. Le travail se fait en visioconférence depuis Cotonou, avec une heure d'avance sur Bamako.",
            'entetes' => ['Format', 'Durée', 'Effectif', 'Situation type'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Un service qui n\'a pas essayé d\'assistant, ou une direction qui veut voir avant de s\'engager'],
                ['Formation complète', '2 jours en 4 demi-journées', '10 personnes au plus, un seul métier par groupe', 'Paie et recrutement déjà outillés, sans règle commune entre collègues'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipe répartie entre Bamako et des antennes en région'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Plusieurs sociétés d\'un même réseau ; cas inventés plutôt que dossiers internes'],
                ['Accompagnement mensuel', 'Une demi-journée par mois, trois mois de suite', 'Le groupe déjà formé', 'Ancrer les habitudes et élargir à de nouvelles tâches'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quelles étapes une entreprise malienne parcourt-elle entre le premier message et le suivi qui suit la formation ?",
            'items' => [
                ['titre' => "Le premier message", 'duree' => "Réponse sous 24 heures", 'texte' => "Vous indiquez l'effectif, les postes, la ville, le logiciel de paie et la taille du fichier du personnel. Un ou deux entretiens de cadrage fixent la formule et les tâches retenues."],
                ['titre' => "La préparation", 'duree' => "Questionnaire et documents", 'texte' => "Chaque participant répond à un questionnaire sur son poste et son matériel. Le service télécharge à l'avance les fichiers d'exercice, vidés de tout nom réel."],
                ['titre' => "Les séances", 'duree' => "Demi-journées ou séances de 2 h 30", 'texte' => "Chaque séquence part d'une tâche du service, passe par l'article ou la page officielle concernés, puis refait le geste dans l'outil sur une pièce fictive."],
                ['titre' => "L'épreuve finale", 'duree' => "Dernière demi-journée", 'texte' => "Seul devant son écran et chronomètre en main, chacun traite une tâche de son poste et explique ce qu'il a vérifié."],
                ['titre' => "La remise", 'duree' => "Fin de session", 'texte' => "Les participants emportent les supports, les exercices corrigés et une attestation à leur nom."],
                ['titre' => "Le suivi", 'duree' => "Le mois suivant", 'texte' => "Un canal direct reste ouvert pendant un mois pour les questions d'application, avec un accompagnement mensuel possible ensuite."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels scénarios travaille-t-on en séance avec une équipe RH malienne, et que doit contrôler chaque participant ?",
            'intro' => "Tous les cas sont inventés : sociétés, salariés et montants n'existent que dans l'exercice.",
            'items' => [
                ['titre' => "Séance 1 : trois embauches en une semaine dans une société de négoce de Ségou", 'texte' => "Situation : une société fictive recrute trois vendeurs lundi. Consigne : construire le tableau de suivi qui calcule la date limite de déclaration à l'INPS et rédiger le message de relance pour les pièces manquantes. Le participant fait confirmer le délai de huit jours par l'INPS, rapproche les dates du dossier papier et contrôle qu'aucun vrai nom n'a été saisi dans l'assistant."],
                ['titre' => "Séance 2 : l'état de paie d'octobre d'une entreprise de 18 salariés", 'texte' => "Situation : un tableau fictif contient une erreur de somme et un salarié marié avec trois enfants. Consigne : repérer les écarts avec septembre et résumer le dossier en deux phrases. Le participant relit les réductions de l'article 11, refait à la main la ligne du salarié concerné et laisse la déclaration à la personne mandatée."],
                ['titre' => "Séance 3 : la CFE et l'ITS d'une société fictive d'imprimerie", 'texte' => "Situation : masse salariale brute de 6 000 000 FCFA en octobre. Consigne : préparer le récapitulatif et le rappel d'échéance. Le participant relit les articles 160 et 414, retrouve 210 000 FCFA de CFE à 3,5 %, vérifie le jour limite du mois suivant et confirme le barème de l'ITS dans le texte en vigueur."],
                ['titre' => "Séance 4 : un CDD de remplacement et une grille de présélection", 'texte' => "Situation : un poste de comptable à pourvoir pour six mois, douze candidatures fictives. Consigne : esquisser un contrat écrit et des critères de choix arrêtés avant d'ouvrir les CV. Le participant fait valider la trame par un juriste, vérifie que la décision revient à une personne nommée et que les critères s'expliquent au candidat qui le demande."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment budgéter la formation d'un service du personnel malien, et le FAFPA peut-il y contribuer ?",
            'paragraphes' => [
                "Le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA) est en pleine réforme. L'Organisation internationale du Travail a rendu compte le 28 juillet 2026 d'un atelier de validation tenu à Bamako les 30 juin et 1er juillet 2026, avec plus de 80 représentants d'institutions publiques, du secteur privé et d'organisations d'employeurs et de travailleurs.",
                "Selon l'étude présentée, la taxe de formation professionnelle finançait 83 % des activités de formation sur la période étudiée, avant d'être remplacée par une subvention de l'État. L'OIT évoque la possibilité de rétablir une contribution des entreprises, et rapporte que 68 % des managers interrogés jugent inadapté le cadre législatif, fondé sur des textes de 1997. Aucun critère d'éligibilité ni taux de prise en charge n'y figure.",
                "Les règles du jour se demandent donc au FAFPA lui-même, par écrit, devis et programme joints, en demandant si un prestataire installé hors du Mali peut être retenu. Aucune prise en charge n'est annoncée ici, et Richard SALANON n'affiche l'agrément d'aucun fonds public.",
                "La démarche la plus sûre consiste à inscrire la formation au budget courant de l'entreprise, en FCFA, et à traiter une aide éventuelle comme un complément. La dépense peut se répartir : un atelier d'une demi-journée avec une équipe pilote, puis, si la direction est convaincue, la formation complète ou le suivi mensuel.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Quel prix prévoir pour former une équipe RH malienne, et de quoi dépend le devis ?",
            'intro'      => "Aucun montant n'est affiché sur cette page. Le devis se rédige en FCFA une fois le cadrage achevé ; les abonnements aux assistants restent à la charge de l'entreprise.",
            'items'      => [
                ['offre' => 'Atelier découverte pour le personnel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée en visioconférence', 'Deux tâches sur pièces inventées', 'Premières règles sur les données personnelles']],
                ['offre' => 'Formation complète RH et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Deux jours répartis en quatre demi-journées', 'Exercices bâtis sur votre état de paie anonymisé', 'Épreuve chronométrée, attestation nominative', 'Canal direct pendant un mois']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois, trois mois de suite', 'Retour sur les cas du mois et tâches nouvelles']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes par poste.",
                "La formule choisie et le nombre de séances en visioconférence.",
                "Le temps de préparation des exercices à partir de vos modèles.",
                "Les outils à couvrir : un tableur seul, ou aussi le logiciel de paie en service.",
                "Le suivi souhaité après la dernière séance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs guettent un service du personnel malien qui s'essaie à l'IA ?",
            'intro' => "Elles naissent de la pression des échéances : le 15 pour l'ITS et pour la CFE, huit jours pour l'INPS, un poste à pourvoir.",
            'items' => [
                ['titre' => "Fixer un taux de mémoire", 'texte' => "Un assistant répond avec assurance, quitte à citer le taux d'un autre pays ou d'une autre année. Les 3,5 % de la CFE ou les tranches de l'ITS se relisent dans le code, avec le numéro d'article."],
                ['titre' => "Confondre cotisations et impôt", 'texte' => "Les cotisations se versent à l'INPS, qui recouvre aussi pour la CANAM, l'ITS et la CFE au centre des impôts. Deux colonnes, deux totaux, deux rappels, deux interlocuteurs."],
                ['titre' => "Laisser passer les huit jours", 'texte' => "Une embauche en fin de mois se perd dans le dossier papier. Le tableur affiche la date limite dès la saisie de la date d'embauche."],
                ['titre' => "Rédiger un CDD sans écrit", 'texte' => "Selon WageIndicator, un CDD non écrit est réputé à durée indéterminée. Un modèle validé, rempli et signé évite que l'assistant n'invente une formule."],
                ['titre' => "Verser un dossier réel dans un compte personnel", 'texte' => "Nom, situation de famille et salaire partent vers un serveur étranger, alors que la loi malienne conditionne les transferts. Pour s'exercer, on prend un dossier inventé."],
                ['titre' => "Laisser le classement décider", 'texte' => "Le résumé de l'outil devient un tri, puis une liste que plus personne ne remet en cause. Une grille écrite avant la lecture et un décideur nommé gardent la main."],
                ['titre' => "Se fier à un barème ancien", 'texte' => "Le barème de l'ITS du code publié date de la loi de 2016. Le participant note la date de ce qu'il lit et vérifie auprès du centre des impôts."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former avec Richard SALANON quand on gère les RH ou la paie au Mali ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Mali figure parmi les " . count((array) fait('pays_travailles')) . " pays où Richard a travaillé. Auprès d'un service du personnel malien, il peut conduire en visioconférence des séances sur les assistants d'IA et les tableurs. Il n'occupe pas de poste RH : les cas pratiques viennent de vos modèles vidés de leurs données, et le droit reste l'affaire du conseil de l'entreprise.",
                "Il compte " . $ans . " ans dans le numérique et sort de " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "). Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Aucun éditeur d'IA ni de logiciel de paie ne l'a certifié.",
                "Ses travaux sont décrits sur la page des <a href='/realisations/'>réalisations</a>, son parcours sur la page <a href='/richard-salanon'>Richard SALANON</a> et les pays servis sur les <a href='/zones/'>zones d'intervention</a>. Pour prolonger cette page : <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, <a href='/formations/excel-google-sheets'>Excel et Google Sheets pour la gestion</a> et <a href='/formations/ia-en-entreprise'>IA en entreprise</a>. Le fonctionnement des sessions est détaillé sur la page <a href='/services/formation-en-entreprise'>formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Un service du personnel malien à former à l'IA : par où commencer ?",
            'texte'  => "Écrivez l'effectif, les postes, la ville et le logiciel de paie utilisé. Vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon équipe RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH à l'IA au Mali ?", 'r' => "Richard SALANON, qui travaille depuis Cotonou, peut conduire en visioconférence des séances pour des équipes RH et paie maliennes, avec un assistant d'IA essayé sur leurs modèles vidés de données réelles. Il transmet la maîtrise de l'outil, pas celle du droit social ni de la fiscalité."],
        ['q' => "Quelles cotisations l'INPS et la CANAM prélèvent-elles ?", 'r' => "Le Cleiss, édition 2025, donne 18,9 à 21,9 % à la charge de l'employeur et 6,66 % à celle du salarié, branche par branche. Sa page précise qu'elles portent sur la totalité du salaire, sans plafond : confirmez taux et assiette auprès de l'INPS avant de les paramétrer."],
        ['q' => "Dans quel délai déclarer une embauche à l'INPS ?", 'r' => "Selon le Cleiss, chaque embauche et chaque licenciement se déclarent à l'INPS dans les huit jours, et un accident du travail immédiatement ou au plus tard sous quarante-huit heures."],
        ['q' => "Quand verser l'ITS retenu sur les salaires ?", 'r' => "Dans le livre de procédures fiscales publié par la DGI, l'article 414 prévoit la déclaration et le versement au plus tard le 15 du mois suivant. Confirmez l'échéance auprès de votre centre des impôts."],
        ['q' => "Que prévoit le code pour la contribution forfaitaire des employeurs ?", 'r' => "L'article 160 fixe un taux de 3,5 % sur le brut des rémunérations, avantages en nature compris, et l'article 297 du livre de procédures un versement dans les quinze premiers jours du mois suivant. Le centre des impôts confirme votre situation."],
        ['q' => "Un assistant d'IA peut-il déclarer l'ITS à ma place sur E-impôts ?", 'r' => "Non. Aucun identifiant E-impôts ne lui est donné. Il aide à monter le tableau des retenues et à contrôler les sommes ; seule la personne mandatée dépose la déclaration."],
        ['q' => "Un CDD doit-il être écrit ?", 'r' => "D'après WageIndicator (page mise à jour le 30 mars 2026), oui, faute de quoi il est réputé à durée indéterminée. Vérifiez le texte du code du travail et faites valider vos modèles par un juriste."],
        ['q' => "Peut-on copier des CV ou des états de paie dans un assistant en ligne ?", 'r' => "Pas avec les identités. Data Protection Africa résume la loi n° 2013-015 ainsi : un envoi de données à l'étranger suppose une protection juridique suffisante du pays destinataire. Les exercices emploient donc des cas inventés."],
        ['q' => "Y a-t-il un décalage horaire entre Bamako et Cotonou ?", 'r' => "Une heure, toute l'année : la base IANA rattache Bamako à la zone d'Abidjan, à l'heure de Greenwich, et Porto-Novo à celle de Lagos, en UTC+1 : Cotonou a une heure d'avance sur Bamako."],
        ['q' => "Le FAFPA peut-il financer la formation d'un service RH ?", 'r' => "L'OIT décrit en juillet 2026 un fonds dont la gouvernance et le financement sont en chantier, sans condition de prise en charge publiée. Interrogez-le par écrit avant de bâtir un budget sur lui."],
        ['q' => "Comment le prix est-il fixé pour une équipe RH malienne ?", 'r' => "Le devis, établi en FCFA après le cadrage, varie avec l'effectif, la formule, la préparation de vos pièces anonymisées et les outils à couvrir. Aucun tarif n'est publié ici."],
        ['q' => "Que remet-on aux participants à la fin ?", 'r' => "Supports, exercices corrigés et une attestation à leur nom, qui atteste leur présence et l'épreuve finale. Elle ne vaut ni diplôme ni certification d'un éditeur."],
    ],

    'sources' => [
        ['titre' => "Direction générale des impôts du Mali, code général des impôts (ITS, CFE, livre de procédures fiscales)", 'url' => 'https://www.dgi.gouv.ml/CGI/', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Mali, impôt sur les traitements et salaires", 'url' => 'https://www.dgi.gouv.ml/impots-sur-le-traitement-de-salaires-its/', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Mali, déclarations et paiements annuels et mensuels", 'url' => 'https://www.dgi.gouv.ml/les-declarations-et-paiements-annuels-et-mensuels-des-impots-et-taxes/', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Mali, Semaine du numérique (3 août 2026)", 'url' => 'https://www.dgi.gouv.ml/semaine-du-numerique-au-mali-la-dgi-sacree-meilleure-administration-digitalisee/', 'date' => '2026-10-27'],
        ['titre' => "Cleiss, le régime malien de sécurité sociale (édition 2025)", 'url' => 'https://www.cleiss.fr/docs/regimes/regime_mali.html', 'date' => '2026-10-27'],
        ['titre' => "Cleiss, cotisations au Mali au 1er janvier 2025", 'url' => 'https://www.cleiss.fr/docs/cotisations/mali.html', 'date' => '2026-10-27'],
        ['titre' => "WageIndicator, contrats et licenciements au Mali (mise à jour du 30 mars 2026)", 'url' => 'https://wageindicator.org/fr-ml/travail-au-mali/droit-du-travail/contrats-et-licenciements', 'date' => '2026-10-27'],
        ['titre' => "Ecofin Agency, le Mali et les outils numériques pour l'emploi (2 juin 2026)", 'url' => 'https://www.ecofinagency.com/news-services/0206-56067-mali-turns-to-digital-tools-to-tackle-youth-unemployment-and-formalize-the-labor-market', 'date' => '2026-10-27'],
        ['titre' => "OIT, réforme du Fonds d'appui à la formation professionnelle et à l'apprentissage du Mali (28 juillet 2026)", 'url' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund', 'date' => '2026-10-27'],
        ['titre' => "Data Protection Africa, Mali : loi n° 2013-015 et modifications", 'url' => 'https://dataprotection.africa/?p=1335', 'date' => '2026-10-27'],
        ['titre' => "Osiris, marché du mobile au Mali (19 mai 2024)", 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Bamako, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : Afrique (Africa/Abidjan, Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
