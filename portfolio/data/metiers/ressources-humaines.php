<?php
// ============================================================
// data/metiers/ressources-humaines.php · Page « formations par métier »
// pour les ressources humaines (vague 1C, univers « Direction et gestion »,
// prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : le service RH au quotidien (recrutement, paie et
// déclarations sociales, formation, dossiers du personnel, données des
// salariés, non-discrimination). La page parle du métier et oriente vers
// les fiches ia-ethique-conformite, ia-en-entreprise, excel-google-sheets
// et digitalisation-processus, sans en reprendre le texte.
// Sources lues le 05/10/2026 : SGG du Bénin (code du travail, loi
// n° 98-004, articles 4, 5, 31, 208, 223, 224, 285 ; loi n° 2017-05,
// articles 8, 12, 14 ; loi n° 2017-20, articles 383, 394, 395, 401, 404,
// 405), CNSS du Bénin (déclaration et paiement, listes nominatives), e-CNPS,
// CNIL (guide du recrutement du 30/01/2023, cinq questions pour les TPE/PME,
// contrôle de l'activité du 09/07/2026, durées de conservation du
// 02/04/2026, sanction d'Uber du 24/08/2026), code du travail français
// (L1132-1, L1221-6 à L1221-9, L3243-2), AI Act Service Desk (article 5,
// article 26, annexe III), Commission européenne (calendrier, mise à jour
// du 03/08/2026), documentation d'Odoo 20.0 (localisations de paie),
// wiki de Dolibarr (modules GRH, Salaires, Congés, Recrutement), FDFP.
// Faits repris des fiches déjà vérifiées : FODEFCA, 3FPT, France
// Compétences, article 4 du règlement sur l'IA. Richard n'est ni juriste
// ni gestionnaire de paie, et n'est certifié par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les ressources humaines : recruter, préparer la paie, organiser la formation et tenir les dossiers du personnel plus sûrement, sans discriminer ni exposer les données des salariés",
    'title'   => "Formation IA et numérique pour les RH | Richard SALANON",
    'meta'    => "Former recruteurs, gestionnaires de paie et chargés de formation à l'IA et aux outils RH, sans discriminer ni exposer les données des salariés. Sur devis.",
    'en_bref' => "Cette page s'adresse aux services de ressources humaines, des PME de Cotonou ou d'Abidjan aux groupes implantés en Europe, qui veulent former leurs équipes à l'intelligence artificielle, au tableur de paie et à la digitalisation de leurs circuits. Elle décrit ce que ces outils changent au recrutement, à la paie, aux déclarations sociales, au plan de formation et aux dossiers du personnel, et les limites que posent le code du travail, la loi béninoise n° 2017-20, le RGPD et le règlement européen sur l'IA. Le parcours type dure deux jours en quatre demi-journées, en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Direction et gestion',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : le fichier du personnel, qui y touche, combien de temps on le garde et ce qui ne sort jamais",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire des fichiers réellement tenus par le service : dossiers papier, tableur des effectifs, dossiers partagés, conversations WhatsApp, boîtes de candidatures, logiciel de paie.",
                "Pour chaque fichier, trois questions posées en groupe : qui le lit, qui le modifie, à quelle date il doit être purgé.",
                "Lecture des articles 383, 394 et 404 de la loi n° 2017-20 au Bénin, ou des passages du RGPD et du code du travail pour une équipe européenne.",
                "Ce qu'un assistant d'IA peut recevoir d'un dossier RH, ce qui doit être retiré avant, et ce qui n'y entre jamais : santé, sanctions, condamnations, opinions.",
                "Atelier : réécrire une note de situation sur un salarié pour qu'elle reste exploitable par l'assistant sans permettre de reconnaître la personne.",
                "Rédaction collective d'une table de conservation du service, une ligne par type de document, validée par le responsable avant la pause.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : recruter avec un assistant sans écarter quelqu'un pour un motif interdit",
            'duree'  => '3 h 30',
            'points' => [
                "Rédiger une annonce à partir d'une fiche de poste réelle, puis la relire à la recherche de critères d'âge, de sexe, d'origine, de lieu de résidence ou de situation familiale.",
                "Construire une grille d'évaluation commune, avec des critères liés au poste, que l'assistant aide à formuler mais ne remplit pas.",
                "Résumer des candidatures pseudonymisées et comparer le résumé au dossier d'origine : ce qui a disparu, ce qui a été ajouté.",
                "Test de biais : deux profils identiques à un critère près (prénom, âge, quartier, langue maternelle), soumis l'un après l'autre, puis comparaison écrite.",
                "Réponses aux candidats retenus et non retenus, convocations, rappel d'entretien par message : des modèles relus une fois pour toutes.",
                "Ce que le candidat doit savoir des outils utilisés à son égard, et la mention à ajouter à l'annonce ou au formulaire.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : la paie et les déclarations sociales, du relevé des variables au fichier transmis",
            'duree'  => '3 h 30',
            'points' => [
                "Le circuit d'un mois de paie dans l'entreprise : qui relève les heures, les absences et les primes, qui calcule, qui contrôle, qui signe.",
                "Un classeur des éléments variables tenu en tableau structuré, avec listes de choix et contrôles de cohérence d'un mois sur l'autre.",
                "Préparer la liste nominative attendue par la caisse sociale du pays, dans le format qu'elle publie, et vérifier que le détail égale le total déclaré.",
                "Rapprocher la masse salariale du mois avec l'écriture passée en comptabilité, et expliquer chaque écart avant la clôture.",
                "Ce que l'assistant d'IA apporte à la paie (expliquer une formule, rédiger une note aux salariés) et ce qu'il ne fait pas (calculer une retenue légale).",
                "Où ranger les doubles des bulletins et les états de paiement, avec qui, et pendant combien de temps.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : formation, demandes des salariés et plan d'action du service",
            'duree'  => '3 h 30',
            'points' => [
                "Le plan de formation dans un tableur partagé : besoins recueillis, actions retenues, coûts, dates, présences et pièces demandées par le fonds de formation.",
                "Un circuit pour les demandes courantes (congés, attestations de travail, avances) qui remplace les messages dispersés par un formulaire et un suivi.",
                "Ce qu'un assistant interne peut répondre aux salariés sur le règlement intérieur, et la relecture que chaque réponse type exige avant mise en service.",
                "Entretiens annuels : préparer un support et une synthèse avec l'assistant, sans lui confier l'appréciation de la personne.",
                "Choix de trois chantiers pour les trois mois suivants, avec un responsable, une date et une mesure simple du temps gagné.",
                "Évaluation individuelle sur des situations RH inédites, et remise de la fiche réflexe du service.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Responsables RH, chargés de recrutement, gestionnaires de paie et de formation, assistants RH'],
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou modules séparés d\'une demi-journée'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus en salle'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent au travail d'un service RH ?",
            'paragraphes' => [
                "Un service de ressources humaines passe une grande partie de son temps à écrire, à recopier et à vérifier. Une annonce de poste, vingt réponses à des candidats, un tableau d'heures supplémentaires ressaisi depuis des feuilles signées, une attestation de travail demandée pour la banque, une liste de présence à joindre à un dossier de financement. Rien de cela n'est difficile ; tout cela est répétitif, urgent et porte sur des personnes. C'est précisément le terrain où un assistant d'IA, un tableur bien construit et un circuit automatisé font gagner des heures, et où une erreur coûte cher.",
                "Sur le recrutement, l'assistant aide à transformer une fiche de poste en annonce lisible, à préparer une grille d'entretien, à rédiger les réponses que les candidats attendent souvent en vain. Sur la paie, le tableur structuré et les contrôles automatiques réduisent les écarts entre le relevé des variables, le calcul et la déclaration envoyée à la caisse sociale. Sur la formation, un plan tenu dans un fichier partagé remplace les relances par message. Sur les demandes des salariés, un formulaire et un suivi évitent qu'une demande de congé se perde dans une conversation.",
                "Ces gains ont une contrepartie que les autres services connaissent moins. Les fichiers RH contiennent des données que la loi protège plus que les autres : santé, situation familiale, sanctions, parfois appartenance syndicale. Les décisions RH touchent la carrière et le revenu des personnes, et le droit refuse qu'elles soient prises par un traitement automatisé seul. Enfin, un outil qui trie ou note des candidats peut reproduire une discrimination sans que personne ne l'ait voulue. Former une équipe RH aux outils, c'est donc lui apprendre à aller plus vite et, dans le même mouvement, à savoir où s'arrêter.",
                "Richard SALANON n'exerce pas le métier de RH et ne remplace ni le juriste en droit social, ni le gestionnaire de paie, ni l'inspecteur du travail. Il forme à l'usage des outils : assistants d'IA, tableurs, formulaires, logiciels de gestion comme Odoo ou Dolibarr, automatisations simples. Les règles de droit présentées pendant la formation sont lues dans les textes officiels du pays de l'équipe, et les questions qui demandent un avis juridique sont renvoyées à ceux dont c'est le métier.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches RH un outil peut-il préparer, et lesquelles restent à une personne nommée ?",
            'legende' => "Répartition proposée en formation et discutée avec chaque service. La dernière colonne indique le garde-fou à installer quand l'outil intervient.",
            'entetes' => ['Tâche du service', 'Ce que l\'outil prépare', 'Ce que la personne décide ou signe', 'Garde-fou'],
            'lignes'  => [
                ['Annonce de recrutement', 'Un premier texte à partir de la fiche de poste, des variantes pour un site d\'emploi ou un réseau social', 'Les critères exigés, le salaire annoncé, la publication', 'Relecture ciblée sur les critères interdits par le code du travail'],
                ['Lecture des candidatures', 'Un résumé de dossiers dont les éléments identifiants ont été retirés', 'La liste des candidats convoqués et la raison de chaque choix', 'Aucun classement automatique, grille commune écrite avant la lecture'],
                ['Convocations et réponses', 'Des modèles de messages et leur envoi programmé', 'Le contenu des modèles, une fois relu', 'Chaque candidat reçoit une réponse, positive ou négative'],
                ['Variables de paie', 'Le relevé des heures et des absences dans un tableau, les contrôles d\'écart', 'Le calcul validé et le bulletin remis', 'Contrôle mensuel du nombre de salariés et de la masse salariale'],
                ['Déclaration à la caisse sociale', 'Le fichier au format publié par la caisse, à partir du tableau de paie', 'L\'envoi et le paiement des cotisations', 'Le détail des lignes doit égaler le total déclaré'],
                ['Attestations et certificats', 'Le document rempli à partir de la fiche du salarié', 'La signature', 'Modèle validé une fois, données vérifiées à chaque émission'],
                ['Plan de formation', 'Le recensement des besoins, le calendrier, les relances de présence', 'Les actions retenues et le budget', 'Pièces demandées par le fonds listées dès l\'inscription'],
                ['Entretien annuel', 'Un support de préparation, une synthèse des notes du manager', 'L\'appréciation et les suites données', 'L\'assistant ne note pas et ne compare pas les salariés'],
                ['Procédure disciplinaire ou rupture', 'Un rappel des étapes et des délais à vérifier dans le texte', 'Toute la procédure', 'Aucun dossier nominatif dans un assistant en ligne'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce qu'un outil numérique ou une IA ne doit jamais faire dans un service RH, et quels textes le disent ?",
            'intro' => "Les limites ci-dessous ne sont pas des précautions de formateur : chacune repose sur un texte en vigueur, lu pendant la formation dans sa version officielle. Elles valent quel que soit l'outil, du tableur partagé à l'assistant d'IA le plus récent.",
            'items' => [
                ['titre' => "Décider seul du sort d'une personne", 'texte' => "Au Bénin, l'article 401 de la loi n° 2017-20 interdit qu'une décision produisant des effets juridiques ou affectant de manière significative une personne soit prise sur le seul fondement d'un traitement automatisé destiné à évaluer sa personnalité. L'article 22 du RGPD pose la même règle en Europe. Le 24 août 2026, la CNIL a relayé l'amende de 824 990 000 euros infligée à Uber par l'autorité néerlandaise pour des désactivations automatiques de comptes de chauffeurs, décidées sans aucune intervention humaine."],
                ['titre' => "Retenir un critère interdit", 'texte' => "Le code du travail béninois (loi n° 98-004) interdit à l'employeur de prendre en compte le sexe, l'âge, la race ou le lien ethnique ou de parenté pour l'embauche, la formation, la promotion ou la rémunération (article 4), ainsi que l'origine sociale, l'activité syndicale ou les opinions (article 5). En France, l'article L1132-1 ajoute notamment le nom de famille, le lieu de résidence et la capacité à s'exprimer dans une autre langue que le français : trois indices qu'un outil de tri peut utiliser sans que personne ne s'en aperçoive."],
                ['titre' => "Recevoir des données sensibles au motif que le salarié a signé", 'texte' => "La santé, les opinions, l'appartenance syndicale ou la religion sont interdites de traitement sauf exceptions (article 394 de la loi n° 2017-20). L'article 404 précise qu'un consentement écrit ne suffit pas quand le responsable est l'employeur présent ou potentiel de la personne, sauf si le traitement vise à lui accorder un avantage. Le lien de subordination empêche de considérer ce consentement comme libre."],
                ['titre' => "Collecter à l'insu du candidat", 'texte' => "En France, l'article L1221-9 du code du travail interdit de collecter une information sur un candidat par un dispositif qui ne lui a pas été présenté, et l'article L1221-8 impose de l'informer avant leur emploi des méthodes d'aide au recrutement utilisées. La CNIL cite comme collecte déloyale l'entretien filmé ou enregistré sans information préalable du candidat."],
                ['titre' => "Surveiller en continu", 'texte' => "Dans sa page du 9 juillet 2026 sur le contrôle de l'activité des personnes employées, la CNIL juge en général excessive une surveillance permanente et cite l'enregistreur de frappe imposé à un salarié en télétravail comme dispositif disproportionné. Dans l'Union européenne, l'article 5 du règlement sur l'IA interdit en outre les systèmes qui déduisent les émotions d'une personne sur le lieu de travail, sauf raisons médicales ou de sécurité."],
                ['titre' => "Tout garder, pour toujours", 'texte' => "L'article 383 de la loi n° 2017-20 limite la conservation des données à la durée nécessaire à la finalité de leur collecte. La CNIL donne un repère concret, dans sa page sur les durées de conservation mise à jour le 2 avril 2026 : deux ans au plus pour les données d'un candidat non retenu, sauf demande d'effacement. Un dossier de candidatures accumulé depuis dix ans n'est pas une base de talents, c'est un manquement."],
                ['titre' => "Répondre aux salariés à la place du service", 'texte' => "Un assistant qui renseigne les salariés sur les congés, les primes ou le règlement intérieur engage l'employeur. L'<a href=\"/histoires/air-canada-chatbot\">histoire du chatbot d'Air Canada</a>, condamnée à indemniser un passager après une règle de remboursement inventée par son robot, montre que l'argument de l'outil autonome ne protège pas l'entreprise. Chaque réponse type passe par la relecture du responsable RH avant d'être mise en service."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Que disent le droit du travail et le droit des données sur les gestes RH, au Bénin et en France ?",
            'options'  => ['Bénin', 'France et Union européenne'],
            'criteres' => [
                ['critere' => 'Critères de choix interdits', 'valeurs' => ['Code du travail, articles 4 et 5 : sexe, âge, race, lien ethnique ou de parenté, origine sociale, activité syndicale, opinions ; article 31 : aucune discrimination envers les personnes handicapées', 'Code du travail, article L1132-1 : plus de vingt critères, dont l\'âge, le nom de famille, le lieu de résidence, l\'état de santé et la langue']],
                ['critere' => 'Égalité de salaire', 'valeurs' => ['Article 208 : à travail de valeur égale, salaire égal, quels que soient l\'origine, le sexe, l\'âge, le statut et la confession', 'Rémunération citée parmi les mesures où toute discrimination est interdite (article L1132-1)']],
                ['critere' => 'Contrat écrit', 'valeurs' => ['Loi n° 2017-05 : écrit obligatoire pour la période d\'essai (article 8), le contrat à durée déterminée (article 12) et le temps partiel (article 14)', 'Règles propres au code du travail, à vérifier contrat par contrat avec un juriste']],
                ['critere' => 'Preuve du paiement', 'valeurs' => ['Article 223 : pièce émargée par le travailleur, ou par deux témoins s\'il est illettré, conservée comme une pièce comptable ; article 224 : bulletin de paie ou document équivalent', 'Article L3243-2 : bulletin remis à chaque paie, sous forme électronique sauf opposition du salarié ; double conservé cinq ans (L3243-4, rappelé par la CNIL)']],
                ['critere' => 'Information sur les outils de recrutement', 'valeurs' => ['Principe de loyauté et de transparence de l\'article 383 de la loi n° 2017-20', 'Articles L1221-8 et L1221-9 : information préalable du candidat sur les méthodes et dispositifs utilisés']],
                ['critere' => 'Décision automatisée', 'valeurs' => ['Article 401 de la loi n° 2017-20', 'Article 22 du RGPD ; outils de recrutement et d\'évaluation classés à haut risque par le règlement sur l\'IA']],
                ['critere' => 'Formalité avant un nouveau fichier', 'valeurs' => ['Article 405 : déclaration préalable auprès de l\'APDP, ou inscription au registre tenu par la personne désignée', 'Registre des activités de traitement ; analyse d\'impact si besoin, selon le guide de la CNIL']],
            ],
            'verdict'  => "Les deux droits convergent sur l'essentiel : choisir sur des critères liés au poste, payer à travail égal un salaire égal, prévenir les personnes des outils employés et garder une décision humaine. Une équipe RH qui travaille entre Cotonou et Paris applique donc les mêmes gestes ; ce qui change, ce sont les formalités, les organismes et les sanctions. La formation lit le texte du pays de chaque participant, sans prétendre couvrir tout le droit social.",
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi le règlement européen sur l'IA vise-t-il particulièrement les outils RH ?",
            'texte' => "Parce que son annexe III range parmi les systèmes à haut risque ceux qui servent à recruter ou sélectionner des personnes (annonces ciblées, analyse et filtrage des candidatures, évaluation des candidats) et ceux qui servent à décider d'une promotion, d'une rupture, à répartir les tâches selon le comportement ou à évaluer la performance. Selon la Commission européenne, page mise à jour le 3 août 2026, ces règles s'appliquent à partir du 2 décembre 2027. L'article 26 impose alors à l'employeur d'informer les représentants du personnel et les salariés concernés avant de mettre un tel système en service. Une entreprise africaine qui recrute pour une filiale ou un client européen peut donc être concernée, et le vérifie avec son conseil.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans un service RH, de Cotonou à Bruxelles ?",
            'items' => [
                ['secteur' => "PME de services à Cotonou, une quarantaine de salariés", 'probleme' => "Situation type : chaque mois, la gestionnaire recopie à la main la liste des salaires dans le fichier attendu par la CNSS, et le total ne tombe jamais juste du premier coup.", 'solution' => "Le tableau de paie est réorganisé en une ligne par salarié et par mois, puis le fichier de la CNSS est produit par formules dans l'ordre exact des colonnes publiées. Une cellule de contrôle compare la somme des lignes au total de la masse salariale avant l'envoi à l'adresse prévue."],
                ['secteur' => "Cabinet de recrutement à Abidjan", 'probleme' => "Situation type : les consultants reçoivent des centaines de CV par offre et commencent à les faire classer par un assistant gratuit, photos et numéros de téléphone compris.", 'solution' => "Les dossiers sont pseudonymisés avant toute lecture assistée, la grille d'évaluation est écrite avec le client avant la parution de l'offre, et le classement redevient le travail du consultant. L'annonce et le formulaire précisent désormais les outils utilisés pour traiter les candidatures."],
                ['secteur' => "Groupe agro-industriel au Sénégal", 'probleme' => "Situation type : le plan de formation est tenu dans plusieurs fichiers, et les pièces demandées pour un financement manquent au moment du dépôt.", 'solution' => "Un seul classeur partagé suit chaque action, de l'expression du besoin à l'attestation de présence, avec la liste des pièces exigées par le fonds remplie au fil de l'eau. Les relances de présence partent d'une automatisation simple, relue par la chargée de formation."],
                ['secteur' => "Hôtel à Lomé, personnel en équipes", 'probleme' => "Situation type : les demandes de congés et d'échanges de service arrivent par messages vocaux au responsable, qui oublie d'en reporter une partie sur le planning.", 'solution' => "Un formulaire court, accessible depuis le téléphone, remplace les messages ; chaque demande reçoit une réponse écrite et alimente le planning partagé. WhatsApp reste le canal de rappel, jamais celui où l'on transmet un bulletin de paie ou un certificat médical."],
                ['secteur' => "Entreprise industrielle en France, plus de 50 salariés", 'probleme' => "Situation type : la direction veut acheter un logiciel qui note automatiquement les candidatures et la productivité des équipes.", 'solution' => "La formation fait lister ce que le droit impose avant tout achat : information des candidats, consultation du CSE, analyse de proportionnalité, et à partir de décembre 2027 les obligations des systèmes à haut risque. Le projet est ramené à un outil d'aide à la lecture, sans notation."],
                ['secteur' => "PME de distribution en Belgique, filiale d'un groupe africain", 'probleme' => "Situation type : le siège veut une seule paie pour Bruxelles et Dakar dans le même logiciel de gestion.", 'solution' => "La documentation d'Odoo 20.0 montre qu'une localisation de paie existe pour la Belgique mais pas pour le Sénégal : l'équipe apprend à distinguer ce qui sera calculé par le logiciel et ce qui devra être paramétré à part ou confié au cabinet social local."],
                ['secteur' => "Association ou projet financé, en Afrique centrale", 'probleme' => "Situation type : les contrats des agents de terrain sont rédigés à partir de vieux modèles et les avenants se perdent entre deux bureaux.", 'solution' => "Une bibliothèque de modèles relus par un juriste, un registre des contrats dans un tableur aux droits restreints, et une règle : l'assistant reformule une clause pour la rendre lisible, il ne rédige pas le contrat."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes une équipe RH travaille-t-elle, et que faut-il en savoir avant de s'y former ?",
            'legende' => "Informations lues le 5 octobre 2026 sur les pages officielles des éditeurs et des organismes. Les abonnements éventuels restent au nom de l'entreprise et ne font pas partie du prix de la formation.",
            'entetes' => ['Outil ou système', 'Usage RH', 'Ce qu\'il faut savoir', 'Formation liée'],
            'lignes'  => [
                ['Excel ou Google Sheets', 'Effectifs, variables de paie, congés, plan de formation, fichiers des caisses sociales', 'La CNSS du Bénin demande chaque mois la liste nominative des salaires sous forme de fichier Excel, avec une première ligne de synthèse dont le total doit égaler la somme des lignes', '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Odoo', 'Applications Employés, Recrutement, Congés, Présences, Évaluations et Paie', 'La documentation d\'Odoo 20.0 liste 24 pays dotés d\'une localisation de paie, dont la Belgique, la Suisse, le Luxembourg et le Maroc, mais aucun pays d\'Afrique de l\'Ouest ni la France', '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr', 'Modules GRH, Congés, Notes de frais, Recrutement et Salaires', 'Le module Salaires enregistre les paiements de salaires ; le wiki de Dolibarr précise que la saisie des salaires n\'est qu\'une petite partie de la paie, dont les écritures peuvent être importées depuis le cabinet', '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Portails des caisses sociales', 'Déclarations et paiement des cotisations', 'En Côte d\'Ivoire, le portail e-CNPS ouvre un compte employeur pour déclarer et appeler les cotisations en ligne ; au Bénin, la CNSS reçoit les listes nominatives par courrier électronique', '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ['Assistants d\'IA (ChatGPT, Claude, Gemini, Copilot)', 'Annonces, réponses aux candidats, notes, synthèses, supports de formation', 'Seul un compte professionnel administré par l\'entreprise apporte des engagements sur les données ; un compte personnel, même payant, n\'en apporte pas', '<a href="/formations/ia-en-entreprise">IA en entreprise</a> et <a href="/formations/ia-ethique-conformite">IA, éthique et conformité</a>'],
                ['WhatsApp', 'Convocations, rappels, informations collectives', 'Pratique pour joindre des équipes sans ordinateur ; inadapté pour transmettre un bulletin, un certificat médical ou une sanction', '<a href="/formations/whatsapp-business">WhatsApp Business</a>'],
                ['Comptabilité SYSCOHADA', 'Écriture mensuelle de la paie, charges sociales, rapprochement avec la masse salariale', 'La paie doit se retrouver à l\'identique en comptabilité ; un écart non expliqué se paie au moment du contrôle', '<a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>'],
                ['Formulaires et automatisations (Google Forms, Microsoft Forms, n8n, Make)', 'Demandes de congés, attestations, candidatures, inscriptions aux formations', 'Une automatisation recopie aussi les erreurs : on la teste sur des données fictives avant de la brancher sur le fichier du personnel', '<a href="/formations/n8n">n8n de zéro à l\'autonomie</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'une équipe RH, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il au poste de chacun dans le service ?",
            'legende' => "Les quatre demi-journées peuvent être suivies séparément. Les combinaisons ci-dessous sont les plus demandées ; elles se décident au premier échange.",
            'entetes' => ['Poste', 'Demi-journées conseillées', 'Ce que la personne repart en sachant faire'],
            'lignes'  => [
                ['Responsable RH ou DRH', 'Les quatre', 'Fixer les règles d\'usage de l\'IA dans le service, choisir les chantiers à outiller, répondre aux questions de la direction et des représentants du personnel'],
                ['Chargé de recrutement', 'Jour 1 matin et après-midi', 'Écrire une annonce sans critère interdit, lire des candidatures pseudonymisées, tester un biais, informer les candidats'],
                ['Gestionnaire de paie et d\'administration du personnel', 'Jour 1 matin, jour 2 matin', 'Tenir un tableau des variables contrôlé, produire le fichier de la caisse sociale, rapprocher paie et comptabilité'],
                ['Chargé de formation', 'Jour 1 matin, jour 2 après-midi', 'Tenir le plan de formation et les pièces des financeurs, automatiser les relances, mesurer la présence'],
                ['Assistant RH', 'Jour 1 matin, jour 2 après-midi', 'Traiter les demandes courantes par formulaire, produire les attestations à partir de modèles, ranger les dossiers au bon endroit'],
                ['Manager qui recrute ou évalue', 'Jour 1 après-midi', 'Préparer un entretien avec une grille commune et rédiger une synthèse factuelle, sans confier l\'appréciation à un outil'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment une formation RH se prépare-t-elle sans faire circuler le moindre dossier de salarié ?",
            'items' => [
                ['titre' => "Premier échange", 'duree' => "Réponse sous 24 heures", 'texte' => "Vous indiquez la taille du service, les postes concernés, le pays ou les pays de rattachement des salariés, les logiciels et les assistants d'IA déjà en service, et ce qui a motivé la demande : un recrutement massif à venir, une erreur de paie, une inquiétude sur les données. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => "Choix des documents d'exercice", 'duree' => "Deux semaines avant", 'texte' => "Les exercices portent sur vos vrais modèles : fiche de poste, annonce, grille d'entretien, tableau de variables, plan de formation. Aucun dossier nominatif n'est transmis au formateur ; les données de personnes sont remplacées par des données fictives, et c'est le service qui fait ce remplacement, ce qui constitue déjà un premier exercice."],
                ['titre' => "Lecture des règles de la maison", 'duree' => "Avant la session", 'texte' => "Règlement intérieur, convention collective applicable, charte informatique et éventuelle charte d'usage de l'IA sont lus pour que la formation n'entre jamais en contradiction avec ce que l'entreprise a décidé. Les points flous sont signalés au responsable du service, pas exposés devant le groupe."],
                ['titre' => "Animation", 'duree' => "Demi-journées de 3 h 30", 'texte' => "Chaque séquence part d'une situation du service, passe par le texte qui s'applique, puis par le geste dans l'outil. Les participants travaillent sur leur poste et leur propre compte, en petit groupe, avec un temps de manipulation plus long que le temps d'exposé."],
                ['titre' => "Supports remis", 'duree' => "Fin de session", 'texte' => "La table de conservation du service, les modèles relus (annonce, réponses aux candidats, convocations), le classeur de contrôle de paie construit en séance, la fiche réflexe RH et une attestation nominative de fin de formation, dans des formats que le service peut modifier."],
                ['titre' => "Suivi", 'duree' => "Le mois suivant", 'texte' => "Un canal direct pour les questions concrètes rencontrées en appliquant la méthode, sans facturation supplémentaire. Les questions qui relèvent du droit social sont renvoyées au conseil de l'entreprise, avec la formulation précise du problème."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour un service RH de deux, de dix ou de trente personnes ?",
            'legende' => "Les formats se combinent : un atelier pour tout le service, puis des demi-journées ciblées selon les postes.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier de découverte', 'Une demi-journée', 'Tout le service RH, avec les managers qui recrutent', 'Poser les règles d\'usage d\'un assistant d\'IA et repérer les trois tâches à outiller en premier'],
                ['Parcours complet, intra', '2 jours en 4 demi-journées', '10 personnes au plus', 'Service RH d\'une entreprise moyenne ou d\'un groupe, qui veut revoir ensemble recrutement, paie et formation'],
                ['Module isolé', 'Une demi-journée', '4 à 10 personnes d\'un même poste', 'Une équipe de recrutement avant une campagne, une équipe paie avant un changement de logiciel'],
                ['Session mutualisée, inter', '1 ou 2 jours', 'Une ou deux personnes par structure', 'Petites entreprises, réseaux d\'employeurs, associations ; les exercices utilisent des données fictives'],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', 'Équipes réparties entre plusieurs sites ou pays, par exemple entre un siège en Europe et des filiales africaines'],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '10 personnes au plus', 'Manipulation des outils en présence, puis application sur les dossiers du mois avec un retour à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe RH, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun tarif n'est publié : le prix est fixé sur devis, après le premier échange, et le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Atelier de découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée pour tout le service', 'Règles d\'usage de l\'IA adaptées aux dossiers RH', 'Liste des chantiers prioritaires']],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ['Recrutement, paie, formation ou dossiers du personnel', 'Exercices sur vos modèles, avec des données fictives', 'Supports modifiables et attestation']],
                ['offre' => 'Parcours RH complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Table de conservation et classeur de contrôle de paie construits en séance', 'Évaluation sur situations inédites', 'Canal direct le mois suivant']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Le nombre de demi-journées et le choix des modules.",
                "Le nombre de pays dont les textes doivent être étudiés.",
                "Le temps de préparation des exercices sur vos propres modèles.",
                "Le lieu : vos locaux à Cotonou, une autre ville du Bénin, un autre pays, ou la distance.",
                "Les logiciels à couvrir : tableur seul, ou aussi Odoo, Dolibarr ou un logiciel de paie.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Le service RH peut-il faire financer sa propre formation par un fonds ?",
            'paragraphes' => [
                "C'est souvent le service RH qui monte les dossiers de financement des autres ; il connaît donc les règles, mais oublie parfois de s'y inscrire lui-même. Une prise en charge reste possible dans certains pays, n'est jamais garantie, et se vérifie auprès du fonds avant la signature du devis. Richard SALANON ne promet aucun financement.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consacrée au plan de formation, consultée le 5 octobre 2026, ouvre le dépôt d'un plan à toute entreprise qui justifie du paiement régulier des deux taxes, et décrit son élaboration de l'analyse de la politique de formation jusqu'à l'évaluation du plan. Le règlement intervient après le contrôle des services du fonds et l'approbation de sa Commission permanente. Une formation des équipes RH y trouve sa place comme les autres actions, si elle figure dans le plan déposé.",
                "Au Bénin, le FODEFCA, fonds de développement de la formation professionnelle continue et de l'apprentissage, a vu ses statuts approuvés par le décret n° 2022-286 du 11 mai 2022 ; au Sénégal, le 3FPT affiche un guichet pour le financement du personnel des entreprises. Les conditions se demandent au fonds, programme et devis à l'appui. En France, France Compétences rappelle que l'accès aux fonds publics ou mutualisés exige depuis le 1er janvier 2022 un prestataire certifié Qualiopi : Richard SALANON ne l'est pas, et le budget doit alors être prévu sans prise en charge.",
                "Dans tous les cas, le service garde les pièces qui prouvent la formation : programme, feuilles de présence signées, évaluation, attestations. Elles servent au fonds quand il y en a un, et elles constituent la trace que la Commission européenne admet pour montrer qu'une entreprise a pris des mesures de maîtrise de l'IA au titre de l'article 4 de son règlement.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services RH qui s'outillent trop vite ?",
            'intro' => "Ces erreurs ne viennent ni de la négligence ni de l'incompétence ; elles naissent de la pression des échéances, quand la paie doit partir ou qu'un poste doit être pourvu pour lundi.",
            'items' => [
                ['titre' => "Coller un CV entier dans un assistant gratuit", 'texte' => "Nom, téléphone, photo, adresse, situation familiale : tout part chez l'éditeur, sur un compte personnel. Un résumé pseudonymisé rend le même service. La règle tient en une phrase, affichée au-dessus des postes de travail du service."],
                ['titre' => "Partager le tableau de paie avec tout le service", 'texte' => "Un lien de partage ouvert « à toute personne disposant du lien » transforme le fichier des salaires en document public. Les droits se donnent nommément, se revoient à chaque départ et s'inscrivent dans la table de conservation."],
                ['titre' => "Envoyer les bulletins par messagerie de groupe", 'texte' => "Un bulletin envoyé dans le mauvais groupe se lit par vingt personnes en une minute. Les bulletins se remettent par un canal individuel et contrôlé ; WhatsApp sert au rappel, pas au document."],
                ['titre' => "Laisser l'outil faire la liste courte", 'texte' => "Le résumé devient un classement, puis une liste que personne ne remet en cause. Le jour où un candidat écarté demande pourquoi, aucune personne ne peut expliquer le choix. La grille commune et le décideur nommé évitent cette impasse."],
                ['titre' => "Acheter un module de paie avant de vérifier la localisation", 'texte' => "Un logiciel peut gérer les employés, les congés et le recrutement d'un pays sans savoir y calculer la paie. Avant de signer, on demande à l'éditeur ou à l'intégrateur la liste exacte des règles fournies pour le pays et celles à paramétrer."],
                ['titre' => "Garder toutes les candidatures « au cas où »", 'texte' => "Le vivier accumulé depuis des années contient des personnes qui n'ont jamais été prévenues. Une date de purge par dossier et une information claire du candidat suffisent à transformer un risque en ressource légitime."],
                ['titre' => "Automatiser une relance sans test", 'texte' => "Une automatisation mal réglée envoie la convocation d'un salarié à un autre ou relance un candidat déjà recruté. Tout circuit se teste d'abord sur des données fictives, puis sur un mois réel en double, avant de remplacer l'ancien."],
                ['titre' => "Former le service RH, mais pas les managers", 'texte' => "Les managers rédigent les comptes rendus d'entretien et les demandes de recrutement. S'ils ignorent les règles, le service RH corrige après coup. Une demi-journée commune sur le recrutement règle une bonne partie du problème."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés un service RH doit-il avoir en tête avant de s'outiller ?",
            'items' => [
                ['valeur' => '2 ans', 'libelle' => "Durée maximale de conservation des données d'un candidat non retenu, sauf demande d'effacement, selon la CNIL (page sur les durées de conservation mise à jour le 2 avril 2026)", 'source' => 'CNIL, les durées de conservation des données', 'url' => 'https://www.cnil.fr/fr/les-durees-de-conservation-des-donnees'],
                ['valeur' => '5 ans', 'libelle' => "Durée pendant laquelle l'employeur conserve en France un double du bulletin de paie, en application de l'article L3243-4 du code du travail rappelé par la CNIL", 'source' => 'CNIL, les durées de conservation des données', 'url' => 'https://www.cnil.fr/fr/les-durees-de-conservation-des-donnees'],
                ['valeur' => '15 jours', 'libelle' => "Délai de versement des cotisations à la CNSS du Bénin après la période due ; versement mensuel à partir de 20 salariés, trimestriel en dessous", 'source' => 'CNSS du Bénin, déclaration et paiement', 'url' => 'https://cnss.bj/declaration-et-paiement/'],
                ['valeur' => '1,50 %', 'libelle' => "Majoration par mois ou fraction de mois de retard appliquée par la CNSS du Bénin aux cotisations versées hors délai", 'source' => 'CNSS du Bénin, déclaration et paiement', 'url' => 'https://cnss.bj/declaration-et-paiement/'],
                ['valeur' => '824 990 000 €', 'libelle' => "Amende infligée à Uber par l'autorité néerlandaise, en coopération avec la CNIL, pour des décisions individuelles automatisées visant les chauffeurs (annonce de la CNIL du 24 août 2026)", 'source' => 'CNIL, sanction à l\'encontre d\'Uber', 'url' => 'https://www.cnil.fr/fr/decisions-automatisees-sanction-de-pres-de-825-millions-deuros-lencontre-duber'],
                ['valeur' => '2 décembre 2027', 'libelle' => "Entrée en application des règles du règlement européen sur l'IA pour les systèmes à haut risque dans l'emploi, après l'omnibus de 2026 (page mise à jour le 3 août 2026)", 'source' => 'Commission européenne, cadre réglementaire de l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une équipe RH ?",
            'legende' => "Chaque fiche décrit son propre programme. Le parcours RH en reprend les gestes utiles au service ; les fiches permettent d'aller plus loin sur un outil ou un sujet.",
            'entetes' => ['Formation', 'Ce qu\'elle apporte au service RH', 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Les règles sur les données personnelles, le secret, les biais et la transparence, lues pays par pays', 'Tout le service, les référents et les managers qui recrutent'],
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', 'La pratique quotidienne d\'un assistant pour rédiger, synthétiser et analyser à partir de ses documents', 'Chargés de recrutement, assistants RH, chargés de formation'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', 'Des classeurs fiables : tableaux structurés, formules, tableaux croisés, contrôles', 'Gestionnaires de paie et d\'administration du personnel'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', 'Cartographier un circuit comme le recrutement, mesurer ses délais, le simplifier avant de l\'outiller', 'Responsable RH, contrôle interne'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', 'La charte d\'usage, l\'inventaire des outils et la répartition des rôles, côté direction', 'DRH avec la direction générale'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Les réflexes face au hameçonnage et aux faux changements de coordonnées bancaires', 'Paie et administration du personnel, très visées'],
                ['<a href="/formations/conduite-du-changement">Conduite du changement numérique</a>', 'Faire adopter un nouvel outil par les salariés et les managers', 'Responsable RH qui pilote un projet de logiciel'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> ou <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'La prise en main du logiciel de gestion retenu, poste par poste', 'Services RH d\'une entreprise équipée ou en cours d\'équipement'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langue, caisses sociales : que change le terrain africain ou européen pour un service RH ?",
            'paragraphes' => [
                "En Afrique de l'Ouest, une partie du personnel n'a ni adresse électronique professionnelle ni ordinateur : chauffeurs, agents de terrain, personnel de salle ou de chantier. Les outils retenus en formation en tiennent compte. Les formulaires doivent fonctionner sur un téléphone ordinaire, les rappels passent par le canal que les salariés consultent vraiment, et les documents individuels restent remis en main propre ou par un canal personnel. Le code du travail béninois prévoit d'ailleurs, à son article 223, que la pièce constatant le paiement soit émargée par deux témoins quand le travailleur est illettré : la paie numérique ne dispense pas de ces garanties.",
                "Les caisses sociales avancent à des rythmes différents. La CNSS du Bénin a mis en place la réception des listes nominatives par voie électronique, dans un format de fichier qu'elle décrit colonne par colonne ; en Côte d'Ivoire, le portail e-CNPS permet aux employeurs de déclarer et d'appeler les cotisations en ligne. Avant d'automatiser quoi que ce soit, l'équipe apprend à partir du format exigé par l'organisme, et non de ce que propose le logiciel par défaut.",
                "La langue compte aussi. Les assistants d'IA répondent en français, mais leurs réponses sur le droit du travail reflètent souvent le droit français, avec ses institutions et ses délais. Un chargé de recrutement à Dakar ou une gestionnaire de paie à Douala apprennent donc à toujours revenir au texte de leur pays, et à ne jamais reprendre tel quel un délai, un taux ou une procédure donnés par un assistant. Cette discipline protège autant l'entreprise que le salarié.",
                "En Europe, la question est moins l'accès aux outils que la densité des règles : RGPD, code du travail, consultation des représentants du personnel, règlement sur l'IA. Les équipes qui travaillent entre les deux continents, par exemple un siège à Paris ou Bruxelles et des filiales à Cotonou ou Abidjan, doivent tenir les deux cadres à la fois. Le parcours leur apprend à reconnaître la règle la plus stricte et à l'appliquer par défaut quand un même fichier sert aux deux.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre service RH avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des professionnels des ressources humaines à ces outils. Il n'exerce pas le métier : il apporte la maîtrise des assistants d'IA, des tableurs, des formulaires, des automatisations et des logiciels de gestion, et il construit les exercices à partir des modèles du service. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a> : les questions de données, de droits d'accès et de relecture humaine qu'il enseigne sont celles qu'il règle dans ses propres projets.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont le Bénin, la Côte d'Ivoire, le Sénégal, le Gabon, la France, la Belgique et le Canada. Il n'est ni juriste en droit social, ni gestionnaire de paie, ni délégué à la protection des données, et il le dit d'entrée : les textes sont lus dans leur version officielle, les questions de droit sont renvoyées au conseil de l'entreprise. Il n'est certifié par aucun éditeur.",
                "Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a> et les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation révèle un besoin d'outillage, comme un circuit de demandes des salariés ou un assistant interne relu par le service, il relève d'une mission de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> ou d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA</a> ; l'organisation des sessions pour plusieurs services est décrite sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et l'ensemble de l'offre dans le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/transformation-digitale\">transformation digitale</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre service RH ?",
            'texte' => "Outillez d'abord ce qui se répète et ne touche pas au jugement sur les personnes : annonces, réponses, relevés, fichiers des caisses, plan de formation. Gardez à une personne nommée chaque choix de candidat, chaque appréciation et chaque décision disciplinaire. Lisez le texte de votre pays plutôt que la réponse d'un assistant, fixez une durée de conservation à chaque fichier, et formez les managers qui recrutent en même temps que le service.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe RH à l'IA et aux outils numériques ?",
            'texte'  => "Indiquez la taille du service, les postes concernés, le ou les pays de vos salariés, les logiciels en place et ce que vous voulez améliorer en priorité : vous recevez une réponse sous 24 heures, puis un programme adapté et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon service RH'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il savoir utiliser un assistant d'IA avant la formation ?", 'r' => "Non. La première demi-journée part de zéro sur les usages et les réglages. Les participants qui utilisent déjà un assistant y trouvent surtout la méthode pour le faire sur des dossiers RH sans exposer les salariés ni les candidats."],
        ['q' => "Peut-on faire trier les candidatures par une IA ?", 'r' => "Pour aider à lire des dossiers pseudonymisés, oui ; pour classer ou écarter des candidats, non. Au Bénin, l'article 401 de la loi n° 2017-20 interdit les décisions fondées sur le seul traitement automatisé, comme l'article 22 du RGPD en Europe, et le règlement européen sur l'IA classe les outils de sélection à haut risque à partir du 2 décembre 2027."],
        ['q' => "Un salarié peut-il consentir à ce que ses données de santé passent par nos outils ?", 'r' => "Au Bénin, l'article 404 de la loi n° 2017-20 écarte le consentement écrit comme base suffisante quand le responsable du traitement est l'employeur, sauf si le traitement vise à accorder un avantage au salarié. Ces données restent hors des assistants en ligne, et toute exception se décide avec le conseil de l'entreprise."],
        ['q' => "La formation couvre-t-elle le calcul de la paie ?", 'r' => "Elle couvre l'organisation et le contrôle de la paie avec un tableur ou un logiciel de gestion : relevé des variables, contrôles d'écart, fichier de la caisse sociale, rapprochement comptable. Les règles de calcul propres à chaque pays (taux, plafonds, barèmes) relèvent du gestionnaire de paie ou du cabinet social, et ne sont jamais confiées à un assistant d'IA."],
        ['q' => "Odoo ou Dolibarr peuvent-ils calculer la paie au Bénin ou en Côte d'Ivoire ?", 'r' => "La documentation d'Odoo 20.0, consultée le 5 octobre 2026, ne liste aucune localisation de paie pour l'Afrique de l'Ouest : la paie y demande un paramétrage spécifique ou un module tiers. Dans Dolibarr, le module Salaires enregistre les paiements, pas le calcul complet. La formation aide à poser ces questions avant l'achat ; le comparatif <a href=\"/comparatifs/odoo-vs-dolibarr\">Odoo ou Dolibarr</a> détaille les deux logiciels."],
        ['q' => "Peut-on envoyer les bulletins de paie par WhatsApp ?", 'r' => "Ce n'est pas recommandé. Un bulletin est un document personnel ; une erreur de destinataire ou de groupe l'expose aussitôt. La formation fait choisir un canal individuel et contrôlé pour les documents, et réserve WhatsApp aux rappels et aux informations collectives."],
        ['q' => "Combien de temps garder les candidatures non retenues ?", 'r' => "Le principe, au Bénin comme en Europe, est une durée limitée à ce qu'exige la finalité (article 383 de la loi n° 2017-20, RGPD). La CNIL retient deux ans au plus pour un candidat non retenu, à compter du dernier contact, et à condition qu'il en ait été informé. La formation fait fixer cette durée par écrit dans la table de conservation du service."],
        ['q' => "Faut-il prévenir les représentants du personnel avant d'utiliser un outil d'IA ?", 'r' => "En France, la CNIL rappelle que le CSE doit être consulté avant tout dispositif de contrôle de l'activité dans les entreprises de 50 salariés et plus, et informé avant l'usage de nouvelles méthodes d'aide au recrutement. Dans l'Union européenne, l'article 26 du règlement sur l'IA imposera d'informer représentants et salariés avant la mise en service d'un système à haut risque au travail."],
        ['q' => "La formation peut-elle être suivie par une seule personne, RH unique d'une PME ?", 'r' => "Oui, en session mutualisée avec d'autres structures ou en formule à distance. Les exercices utilisent alors des données fictives ou les modèles de la personne, et la demi-journée sur la paie peut être remplacée par une seconde séance sur le recrutement si c'est la priorité."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des modules retenus, des pays dont les textes sont étudiés, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Un fonds de formation peut-il la prendre en charge ?", 'r' => "Cela dépend du FDFP, du FODEFCA, du 3FPT ou de votre OPCO, et rien n'est garanti. Richard SALANON n'est ni certifié Qualiopi ni agréé par un fonds : interrogez votre fonds par écrit, programme et devis à l'appui, avant de vous engager."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "La table de conservation du service, les modèles relus, le classeur de contrôle construit en séance, la fiche réflexe RH et une attestation nominative de fin de formation. Ce n'est ni un diplôme ni une certification."],
    ],

    'sources' => [
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 98-004 du 27 janvier 1998 portant code du travail (articles 4, 5, 31, 208, 223, 224 et 285)', 'url' => 'https://sgg.gouv.bj/doc/loi-98-004/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-05 du 29 août 2017 sur l\'embauche, le placement et la résiliation du contrat de travail (articles 8, 12 et 14)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-05/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 383, 394, 395, 401, 404 et 405)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNSS du Bénin, déclaration et paiement des cotisations', 'url' => 'https://cnss.bj/declaration-et-paiement/', 'date' => '2026-10-05'],
        ['titre' => 'CNSS du Bénin, les listes nominatives (format du fichier)', 'url' => 'https://cnss.bj/les-listes-nominatives/', 'date' => '2026-10-05'],
        ['titre' => 'IPS-CNPS, portail e-CNPS des employeurs et des assurés', 'url' => 'https://e.cnps.ci/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, le guide du recrutement en 19 fiches (30 janvier 2023, fiche 16 mise à jour en mai 2026)', 'url' => 'https://www.cnil.fr/fr/le-guide-du-recrutement', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, recrutement et données personnelles dans les TPE/PME : cinq questions incontournables (30 janvier 2023)', 'url' => 'https://www.cnil.fr/fr/recrutement-et-donnees-personnelles-dans-les-tpepme-cinq-questions-incontournables-se-poser', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, travail et ressources humaines : le contrôle de l\'activité des personnes employées (9 juillet 2026)', 'url' => 'https://www.cnil.fr/fr/controle-de-lactivite-des-personnes-employees', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, les durées de conservation des données (mise à jour du 2 avril 2026)', 'url' => 'https://www.cnil.fr/fr/les-durees-de-conservation-des-donnees', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, décisions automatisées : sanction de près de 825 millions d\'euros à l\'encontre d\'Uber (24 août 2026)', 'url' => 'https://www.cnil.fr/fr/decisions-automatisees-sanction-de-pres-de-825-millions-deuros-lencontre-duber', 'date' => '2026-10-05'],
        ['titre' => 'Code du travail numérique, article L1132-1 du code du travail (non-discrimination)', 'url' => 'https://code.travail.gouv.fr/code-du-travail/l1132-1', 'date' => '2026-10-05'],
        ['titre' => 'Code du travail numérique, article L1221-8 du code du travail (méthodes d\'aide au recrutement)', 'url' => 'https://code.travail.gouv.fr/code-du-travail/l1221-8', 'date' => '2026-10-05'],
        ['titre' => 'Code du travail numérique, article L1221-9 du code du travail (dispositifs de collecte)', 'url' => 'https://code.travail.gouv.fr/code-du-travail/l1221-9', 'date' => '2026-10-05'],
        ['titre' => 'Code du travail numérique, article L3243-2 du code du travail (bulletin de paie électronique)', 'url' => 'https://code.travail.gouv.fr/code-du-travail/l3243-2', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, annexe III du règlement sur l\'IA, point 4 : emploi et gestion des travailleurs', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 26 du règlement sur l\'IA, version consolidée au 27 juillet 2026', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-26', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 5 du règlement sur l\'IA (pratiques interdites)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-5', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application (mise à jour du 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'Odoo 20.0, documentation : localisations de paie', 'url' => 'https://www.odoo.com/documentation/20.0/applications/hr/payroll/payroll_localizations.html', 'date' => '2026-10-05'],
        ['titre' => 'Wiki de Dolibarr, module Salaires', 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Salaires', 'date' => '2026-10-05'],
        ['titre' => 'Wiki de Dolibarr, module GRH', 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_GRH', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus', 'gouvernance-ia', 'cybersecurite-employes'],
        'services'    => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
