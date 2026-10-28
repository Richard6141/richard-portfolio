<?php
// ============================================================
// data/metiers/ressources-humaines/senegal.php · Formation IA pour les
// responsables RH et les gestionnaires de paie au Sénégal.
// Statut P : Richard peut former ce public (faits.php ne confirme pas de
// formation déjà donnée à ce public). Pays : « Déjà travaillé » = oui.
// Sources lues le 26/10/2026 : code du travail (loi n° 97-17, PDF de
// Vie publique du Sénégal, articles L.1, L.29, L.31, L.32, L.37, L.38, L.50,
// L.58, L.100, L.115, L.116, L.117, L.222), loi n° 2008-12 (PDF de Vie
// publique du Sénégal, articles 2, 16, 18, 20, 22, 35, 40, 41, 48, 49, 50,
// 58, 62, 71), eRegulations Sénégal (procédure d'inscription d'une entreprise
// avec salariés : Inspection du travail, IPRES, CSS ; décret n° 75-455 du
// 24 avril 1975, article 3), site du 3FPT, Osiris (APAnews, 15/10/2026).
// Non repris car non confirmés : taux et plafonds IPRES et CSS (ils évoluent ;
// l'organisme fait foi), échéances de déclaration, conditions du 3FPT.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les responsables RH et les gestionnaires de paie au Sénégal : recruter, tenir la paie et les dossiers du personnel avec un assistant, selon le code du travail et la loi sur les données",
    'title'   => "Formation IA pour les RH au Sénégal | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Sénégal : code du travail, IPRES, CSS, loi sur les données. À distance, devis en FCFA.",
    'en_bref' => "Richard SALANON peut former à distance, depuis Cotonou, les responsables RH et les gestionnaires de paie du Sénégal à utiliser un assistant d'IA pour recruter, préparer la paie et tenir les dossiers du personnel, en vérifiant chaque résultat dans le texte du pays. La page présente les règles qui encadrent ce métier à Dakar : code du travail, IPRES, Caisse de sécurité sociale, loi sur les données personnelles. Dakar a une heure de moins que Cotonou. Le devis est établi en FCFA, sans somme annoncée ici.",
    'publie'  => '2026-12-11',
    'maj'     => '2026-12-11',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les responsables RH et les gestionnaires de paie à l'IA au Sénégal, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON peut former à distance, depuis Cotonou, les responsables RH, les chargés de recrutement et les gestionnaires de paie des entreprises sénégalaises à utiliser un assistant d'IA sur leurs propres modèles. Pour choisir un formateur, on compare ses exercices sur vos documents réels, sa lecture des textes du pays et sa façon de juger le résultat.",
                "Les modèles travaillés sont les annonces, contrats types, tableaux de paie et courriers aux salariés. Il forme à l'usage des outils et n'exerce pas le métier. Les règles de droit sont lues dans les textes sénégalais, les cas limites sont renvoyés à votre conseil.",
                "Pour un service RH, la différence entre une démonstration d'outil et une formation se voit sur les documents. Une démonstration montre un assistant qui rédige une annonce brillante sur un exemple inventé. Une formation prend l'annonce que votre cabinet publie chaque mois, le tableau de variables de votre paie, la lettre que vous envoyez à un salarié en fin de contrat, puis refait ces tâches avec l'assistant et montre comment vérifier le résultat avant de le signer.",
                "Cinq questions permettent de comparer les prestataires. Les exercices portent-ils sur vos modèles, avec des données fictives à la place des noms des salariés ? Le formateur sait-il dire quels textes sénégalais s'appliquent à chaque geste, et où s'arrête son rôle ? Combien de personnes par groupe, et qui regarde le travail de chacun ? Que reste-t-il au service après la séance : supports modifiables, mode opératoire par tâche ? Comment juge-t-on le résultat : sur une tâche de paie refaite seul, chronomètre en main, ou sur un questionnaire de satisfaction ?",
                "Un service RH manipule des données qui engagent la carrière et le revenu de personnes réelles. C'est pourquoi la première règle enseignée est de classer les documents avant d'ouvrir l'assistant : ce qui peut y aller tel quel, ce qu'on remplace par des données fictives, ce qui ne sort jamais du service. Les exercices de la formation appliquent cette règle dès la première demi-journée.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est l'IA dans la fonction RH au Sénégal, et que disent les décideurs de Dakar ?",
            'paragraphes' => [
                "Selon une dépêche d'APAnews reprise par Osiris le 15 octobre 2026, la Rencontre des décideurs Dakar 2026 a consacré des débats à l'IA dans les entreprises et dans la fonction RH. Trois préoccupations reviennent : la formation, la confidentialité des données personnelles et la responsabilité en cas d'erreur.",
                "Me Abdoulaye Tine, ministre-conseiller et porte-parole de la présidence, a déclaré en ouverture que l'intelligence artificielle ne remplacera pas l'humain, et que ceux qui ne la maîtrisent pas risquent d'être laissés de côté.",
                "Les intervenants cités par cet article donnent des repères de métier. Le représentant de Skello au Sénégal a présenté l'automatisation de tâches administratives comme un moyen de libérer du temps pour la formation et l'accompagnement des équipes. Le directeur des ressources humaines de Sonatel a cité l'analyse de plus de 2 000 CV en quelques heures grâce à l'IA, et rappelé que les gains de productivité peuvent réduire les effectifs ou être réinvestis dans de nouvelles activités. Un consultant en transformation digitale a recommandé une démarche progressive : diagnostic des processus, repérage des tâches automatisables, mesure des gains avant tout déploiement large.",
                "Le même article note que l'exploitation des CV par l'IA pose des questions de confidentialité des données personnelles, et que le porte-parole de la présidence a évoqué la responsabilité en cas d'erreur, la cybersécurité, l'éthique, ainsi que l'idée d'une commission transdisciplinaire pour encadrer ces enjeux. Ces propos sont ceux d'intervenants à une rencontre, non un texte juridique : ils indiquent surtout les préoccupations que les DRH de Dakar entendent autour d'eux.",
                "Pour un service RH, la leçon est pratique. L'IA arrive déjà dans les discussions des directions, et la question à régler en premier n'est pas le choix d'un logiciel mais la méthode : quelles tâches confier à l'assistant, quelles données ne jamais lui donner, qui vérifie. C'est cette méthode que la formation installe, avec les textes du Sénégal comme point d'appui.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles du code du travail encadrent le recrutement, la paie et les dossiers du personnel au Sénégal ?",
            'paragraphes' => [
                "Le code du travail sénégalais est la loi n° 97-17 du 1er décembre 1997. Les articles ci-dessous ont été lus dans le texte publié par Vie publique du Sénégal. Ils servent de repères pour les exercices, pas d'avis juridique : un cas précis se confirme auprès de l'Inspection du travail ou de votre conseil.",
                "Pour le recrutement, l'article L.1 pose que l'État assure l'égalité de chance et de traitement des citoyens pour l'accès à la formation professionnelle et à l'emploi, sans distinction d'origine, de race, de sexe et de religion. L'article L.29 interdit à l'employeur de prendre en considération l'appartenance à un syndicat ou l'exercice d'une activité syndicale pour ses décisions, notamment l'embauche, la formation professionnelle, l'avancement, la rémunération et les mesures de discipline. En formation, ces deux articles servent à relire une annonce et une grille d'entretien.",
                "Pour le contrat, l'article L.31 laisse les parties libres de la forme du contrat, sous réserve des dispositions dérogatoires, et l'article L.32 précise que la preuve de son existence peut être apportée par tous moyens. L'engagement à l'essai doit, selon l'article L.37, être constaté par écrit à peine de nullité, et l'article L.38 le limite, renouvellement compris, à six mois au maximum. L'article L.50 exige que la résiliation du contrat à durée indéterminée soit précédée d'un préavis notifié par écrit, qui court à compter de la remise de la notification.",
                "Pour la paie, l'article L.115 fixe la périodicité : au plus 15 jours pour le travailleur payé à l'heure ou à la journée, un mois pour le travailleur payé au mois, avec un paiement mensuel au plus tard 8 jours après la fin du mois de travail. L'article L.116 impose un bulletin de paie dressé et certifié par l'employeur et remis au moment du paiement, dont les mentions sont reproduites sur un registre des paiements émargé par chaque travailleur, ou par deux témoins s'il est illettré. L'article L.117 ajoute qu'en cas de contestation, le non-paiement est présumé si l'employeur ne produit ni le registre émargé, ni le double émargé du bulletin, ni une certification bancaire ou postale du paiement.",
                "Pour les dossiers, l'article L.58 oblige l'employeur à remettre à la fin du contrat un certificat de travail indiquant exclusivement la date d'entrée, la date de sortie, la nature et les dates des emplois occupés et la catégorie de la convention collective. L'article L.100 réserve le règlement intérieur à l'organisation technique du travail, à la discipline et à l'hygiène et la sécurité, avec communication aux délégués du personnel et à l'Inspecteur du travail. L'article L.222 institue un dossier du travailleur conservé à l'Inspection du travail du lieu d'emploi, alimenté par une déclaration d'embauche que l'employeur adresse à l'Inspection.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que demandent l'IPRES et la Caisse de sécurité sociale à un employeur de Dakar, et où l'IA peut-elle aider ?",
            'paragraphes' => [
                "L'employeur de Dakar s'adresse à l'Inspection du travail, à l'IPRES pour la retraite et à la Caisse de sécurité sociale. Le portail eRegulations décrit onze étapes et une durée totale de 28 à 40 jours. L'IA aide à préparer les contrôles avant dépôt, mais ne fixe ni taux, ni plafond, ni échéance.",
                "La protection sociale d'un salarié du secteur privé passe par deux organismes que tout service paie connaît : l'Institution de Prévoyance Retraite du Sénégal, l'IPRES, et la Caisse de sécurité sociale, la CSS. La procédure d'inscription d'une entreprise avec salariés, décrite en onze étapes sur le portail eRegulations du Sénégal, les range à la suite de l'Inspection du travail et de la Direction des statistiques du travail et des études : l'employeur achète d'abord à la Chambre de commerce de Dakar la déclaration de mouvement de travailleur (cinq exemplaires pour 500 FCFA), puis dépose ses demandes auprès de l'Inspection du travail, de l'IPRES et de la CSS.",
                "Le portail indique, pour l'IPRES, des pièces telles que l'avis d'immatriculation au NINEA, le certificat du registre du commerce, la demande d'adhésion, le contrat de travail ou la déclaration de mouvement du travailleur, et cite comme fondement le décret n° 75-455 du 24 avril 1975, article 3. Pour la CSS, il liste notamment les statuts de la société, la déclaration d'établissement et la déclaration de mouvement du travailleur. Il note une durée totale de 28 à 40 jours pour l'ensemble de la procédure, presque toute en attente entre les étapes. Ces fiches signalent elles-mêmes que certaines étapes sont en cours d'édition : le service RH vérifie les pièces auprès de chaque organisme.",
                "Deux régimes existent à l'IPRES, un régime général et un régime complémentaire des cadres, d'après la page de paiement publiée sur le même portail. Les taux et les plafonds de cotisation ne sont pas repris ici : ils évoluent, et seul l'organisme fait foi. Ce que la formation enseigne, c'est de ne jamais laisser un assistant fournir un taux, un plafond ou une échéance : ils se lisent sur le document officiel de l'année, puis se saisissent dans une cellule paramétrable du classeur.",
                "L'IA aide en amont et en aval du calcul, pas à sa place. En amont, elle peut expliquer une formule de tableur, aider à structurer le relevé des heures et des absences, proposer des contrôles de cohérence d'un mois sur l'autre. En aval, elle rédige la note qui explique une variation aux salariés ou à la direction, et prépare les listes de contrôle avant le dépôt. Le calcul d'une retenue légale et l'envoi à l'organisme restent à la personne nommée.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles de la loi n° 2008-12 sur les données personnelles s'appliquent à un service RH qui utilise l'IA ?",
            'paragraphes' => [
                "La loi n° 2008-12 du 25 janvier 2008 s'applique au fichier du personnel, au tableur de paie et à la boîte de candidatures. Elle prévoit une déclaration ou une autorisation auprès de la CDP, limite la conservation, interdit certaines collectes, encadre le transfert à l'étranger et écarte la décision fondée sur le seul traitement automatisé.",
                "La loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel, dont le texte a été lu sur Vie publique du Sénégal, soumet à ses règles toute collecte, tout traitement et tout stockage de données personnelles par une personne morale de droit public ou de droit privé (article 2). Le fichier du personnel, le tableur de paie et la boîte de candidatures en relèvent. Elle institue une Commission des données personnelles, la CDP, qui reçoit les formalités préalables et peut sanctionner (article 16).",
                "Les articles suivants servent de grille de lecture au service RH. Hors dispenses, un traitement fait l'objet d'une déclaration à la CDP, qui délivre un récépissé dans un délai d'un mois, ce récépissé permettant de mettre en œuvre le traitement (article 18). Certains traitements, dont ceux qui portent sur des données biométriques ou sur un numéro national d'identification, exigent une autorisation (article 20). La demande précise notamment les finalités, les données traitées, la durée de conservation, le recours à un sous-traitant et les transferts envisagés vers un pays tiers (article 22).",
                "Sur le fond, les données doivent être adéquates, pertinentes et non excessives, et conservées pendant une durée qui n'excède pas la période nécessaire à leur finalité (article 35). L'article 40 interdit la collecte et le traitement de données qui révèlent notamment l'appartenance syndicale ou l'état de santé de la personne, et l'article 41 énumère les cas où cette interdiction ne s'applique pas. La personne doit être informée au plus tard à la collecte de l'identité du responsable, des finalités, des destinataires, de la durée de conservation et des transferts envisagés à l'étranger (article 58), et dispose d'un droit d'accès (article 62).",
                "Deux articles touchent directement l'usage d'un assistant. L'article 48 dispose qu'aucune décision produisant des effets juridiques à l'égard d'une personne ne peut être prise sur le seul fondement d'un traitement automatisé destiné à définir son profil ou à évaluer certains aspects de sa personnalité. Les articles 49 et 50 encadrent le transfert de données vers un pays tiers, qui suppose un niveau de protection suffisant et l'information préalable de la CDP, avec des exceptions limitées. L'article 71 impose au responsable de prendre toute précaution utile pour que des tiers non autorisés n'accèdent pas aux données.",
                "La formation n'interprète pas ces articles. Elle les lit avec les participants et en tire des gestes : ne pas déposer un dossier nominatif dans un assistant en ligne, garder la décision sur les candidats et les salariés à une personne nommée, conserver une trace de qui a eu accès à quel fichier. Pour savoir si un traitement donné relève d'une déclaration ou d'une autorisation, le service s'adresse à la CDP ou à son conseil.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'un service RH sénégalais confier à l'IA, avec quel outil, et que contrôle la personne avant de s'en servir ?",
            'legende' => "Exemples d'exercices construits sur les documents du service, avec des données fictives à la place des noms. Les outils cités sont ceux que l'équipe a déjà ou ouvre en compte gratuit pour l'exercice ; la dernière colonne indique le point de contrôle humain.",
            'entetes' => ['Tâche du service', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Annonce de poste pour un cabinet ou une entreprise de Dakar', 'Assistant d\'IA (ChatGPT, Claude, Gemini ou Copilot)', 'Texte de l\'annonce et variante pour un réseau professionnel', 'Aucun critère d\'origine, de sexe, de religion ou de syndicat (articles L.1 et L.29) ; salaire et lieu confirmés par la direction'],
                ['Contrat d\'engagement à l\'essai', 'Assistant d\'IA et traitement de texte', 'Modèle lisible, clauses reformulées en français simple', 'Écrit obligatoire à peine de nullité (L.37), six mois au plus renouvellement compris (L.38) ; la rédaction finale revient au juriste'],
                ['Relevé des variables de paie du mois', 'Excel ou Google Sheets, avec l\'assistant pour expliquer les formules', 'Tableau d\'une ligne par salarié, avec contrôles d\'écart d\'un mois sur l\'autre', 'Recalcul à la main de deux bulletins et rapprochement du total avec le mois précédent'],
                ['Bulletin de paie et registre des paiements', 'Tableur et modèle validé par le responsable', 'Bulletin et registre alimentés par les mêmes lignes', 'Mentions de l\'article L.116 présentes ; registre émargé et conservé comme une pièce comptable'],
                ['Contrôle avant dépôt auprès de l\'IPRES et de la CSS', 'Tableur de contrôle', 'Liste des écarts d\'effectifs, de matricules et de montants', 'Taux, plafonds et échéances lus sur les documents de l\'organisme, jamais repris d\'un assistant'],
                ['Certificat de travail et courrier de fin de contrat', 'Assistant d\'IA', 'Courrier clair et certificat limité aux mentions de l\'article L.58', 'Préavis notifié par écrit (L.50) ; dates reprises du dossier, pas de l\'assistant'],
                ['Note de service ou projet de règlement intérieur', 'Assistant d\'IA', 'Premier jet structuré par rubriques', 'Contenu limité aux sujets de l\'article L.100 ; communication aux délégués du personnel et à l\'Inspecteur du travail'],
                ['Collecte des informations d\'un nouvel embauché', 'Formulaire en ligne', 'Fiche d\'embauche et liste des pièces à fournir', 'Données strictement nécessaires (article 35 de la loi 2008-12) ; information de la personne à la collecte (article 58)'],
                ['Plan de formation du personnel', 'Tableur partagé et assistant pour la synthèse des besoins', 'Tableau des besoins, des actions et des pièces à joindre à une demande', 'Chiffres et dates confrontés aux devis ; aucune promesse de prise en charge par le 3FPT'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain pèsent sur la formation à Dakar et ailleurs au Sénégal, et comment la formation s'y adapte-t-elle ?",
            'paragraphes' => [
                "Dakar est à GMT toute l'année, Cotonou à GMT+1 : une séance à 9 h à Dakar se tient à 10 h à Cotonou. La formation prévoit des documents téléchargés à l'avance, une solution de repli en cas de coupure et des exercices adaptés au tableur ou au logiciel de paie réellement utilisé par le service.",
                "Pour un service RH, le décalage d'une heure permet de caler les séances sur la matinée, avant les pointes de la fin de mois où la paie occupe tout le monde, et d'éviter les jours de dépôt des déclarations. Le calendrier se fixe avec le responsable du service lors du premier échange.",
                "La connexion et l'équipement dépendent du service. Les documents d'exercice sont envoyés à l'avance et téléchargés sur chaque poste, avec un court questionnaire avant la session pour connaître l'ordinateur, le navigateur et le tableur de chacun. En cas de coupure, une solution de repli est prévue, et les supports écrits permettent de rattraper.",
                "Les logiciels réellement utilisés par un service paie peuvent être un tableur, un logiciel de paie acheté à un éditeur, ou un module d'un ERP comme Odoo ou Dolibarr, que Richard déploie par ailleurs. La formation s'adapte à ce que votre service utilise : elle ne suppose pas qu'un logiciel de paie sénégalais soit déjà configuré. Avant tout achat, on demande à l'éditeur ou à l'intégrateur ce que le logiciel calcule pour le Sénégal et ce qu'il laisse à paramétrer.",
                "Le français est la langue officielle du pays, et les séances comme les supports sont en français. Les assistants écrivent par défaut dans un français de France ; on leur donne un modèle de lettre de votre service et le vocabulaire de l'entreprise. Pour un message destiné à des salariés qui s'expriment surtout en wolof ou dans une autre langue nationale, le texte produit est relu par un locuteur avant diffusion. Quant aux paiements, les salaires et les acomptes versés par mobile money relèvent des règles de l'organisme et de la banque du service : la formation n'enseigne pas ce circuit, elle apprend à contrôler les listes avant leur envoi.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour une équipe RH et paie au Sénégal, et quelle durée ?",
            'legende' => "Les formats sont ceux de la fiche IA en entreprise, adaptés à un service RH ou paie du Sénégal : atelier d'une demi-journée, formation de deux jours, séances à distance, accompagnement mensuel. Les séances à distance se donnent depuis Cotonou, avec un décalage d'une heure : 9 h à Dakar, 10 h à Cotonou.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Un service RH qui n\'a jamais utilisé d\'assistant, ou une direction qui veut voir avant de décider'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un cabinet ou un service dont la paie et le recrutement tournent déjà avec des outils utilisés en ordre dispersé'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre Dakar et d\'autres villes, ou groupes dont le planning interdit les journées entières'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main des outils, puis application suivie sur les dossiers du mois'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Petites structures, réseaux d\'employeurs ; exercices sur des documents fictifs'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes, étendre à d\'autres tâches, corriger ce qui ne tient pas'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se prépare et se déroule une formation pour un service RH au Sénégal ?",
            'items' => [
                ['titre' => "Premier échange", 'duree' => "Réponse sous 24 heures", 'texte' => "Vous décrivez la taille du service, les postes concernés, les logiciels et les assistants déjà utilisés, et la raison de la demande : un recrutement à venir, une erreur de paie, une inquiétude sur les données. Un ou deux entretiens de cadrage suffisent à retenir le format."],
                ['titre' => "Questionnaire et documents", 'duree' => "Avant la session", 'texte' => "Un court questionnaire précise le niveau de chacun. Le service remet des modèles réels dont les noms sont remplacés par des données fictives : annonce, contrat type, tableau de variables, courrier de fin de contrat. C'est déjà un premier exercice de tri."],
                ['titre' => "Animation à distance", 'duree' => "Séances de 2 h 30 ou demi-journées", 'texte' => "Chaque séquence part d'une tâche du service, passe par l'article qui s'applique, puis par le geste dans l'outil. Le temps de manipulation dépasse le temps d'exposé, et le formateur regarde le travail de chacun."],
                ['titre' => "Épreuve finale", 'duree' => "Dernière demi-journée", 'texte' => "Chaque participant refait seul sa tâche cible, chronomètre en main : par exemple le contrôle d'un tableau de paie fictif ou la révision d'une annonce, avec la vérification avant de rendre."],
                ['titre' => "Supports et attestation", 'duree' => "Fin de session", 'texte' => "Les supports de la session, les exercices corrigés et une attestation nominative de fin de formation."],
                ['titre' => "Suivi", 'duree' => "Le mois suivant", 'texte' => "Un canal direct pour les questions d'application, sans facturation supplémentaire, et un accompagnement mensuel si le service le retient."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemblent quatre séances pour un service RH au Sénégal, et que vérifie le participant ?",
            'intro' => "Quatre séances types montrent le travail demandé : une annonce, un contrôle de paie, une fin de contrat et un dossier de financement. Chaque séance part d'une situation fictive, donne une consigne et liste ce que le participant vérifie avant d'utiliser le résultat. Sociétés, salariés et montants sont inventés pour l'exercice.",
            'items' => [
                ['titre' => "Séance 1 : l'annonce d'un poste de gestionnaire de paie", 'texte' => "Situation : une société fictive de transport à Dakar, Teranga Logistique SA, doit publier une annonce. Consigne donnée : rédiger l'annonce à partir d'une fiche de poste de six lignes, puis proposer une grille de cinq critères liés aux missions. Le participant contrôle avant usage qu'aucune mention d'origine, de sexe ou de religion n'a été introduite (article L.1), que rien ne touche à l'appartenance syndicale (article L.29), et que le salaire annoncé est bien celui que la direction a validé."],
                ['titre' => "Séance 2 : le contrôle de la paie d'un mois avant les déclarations", 'texte' => "Situation : un tableau fictif de 38 salariés pour un mois donné, avec trois erreurs glissées dans les heures et un matricule en double. Consigne : demander à l'assistant de lister les incohérences entre ce mois et le précédent, puis de rédiger une note de deux phrases pour la direction. Le participant vérifie chaque écart dans le tableau, recalcule deux bulletins à la main, contrôle que le bulletin et le registre des paiements portent les mêmes lignes (article L.116), et laisse au document de l'IPRES et de la CSS le soin de fixer les taux."],
                ['titre' => "Séance 3 : une fin de contrat à préparer", 'texte' => "Situation : un salarié fictif quitte la société après un préavis ; il faut le courrier de clôture et le certificat de travail. Consigne : reformuler un courrier existant dans un ton simple, puis remplir un certificat à partir d'une fiche de poste. Le participant contrôle que le préavis a été notifié par écrit (article L.50), que le certificat ne comporte que les mentions de l'article L.58, que les dates viennent du dossier et non de l'assistant, et qu'aucune donnée de santé ou de syndicat ne s'y glisse (article 40 de la loi 2008-12)."],
                ['titre' => "Séance 4 : le dossier de demande de financement de la formation", 'texte' => "Situation : un cabinet fictif prépare un dossier pour financer la formation de son équipe. Consigne : synthétiser les besoins recueillis auprès de cinq collègues en un tableau, avec action, durée, nombre de personnes et pièces à joindre. Le participant vérifie les chiffres avec les devis, et écrit la mention qu'aucune décision du fonds n'est acquise avant sa réponse."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation d'un service RH au Sénégal ?",
            'paragraphes' => [
                "Le 3FPT, Fonds de financement de la formation professionnelle et technique, présente un guichet de financement du personnel des entreprises et une plateforme de demande en ligne. Sa page d'accueil ne donne pas les conditions d'éligibilité. Aucune prise en charge n'est promise : sans financement, la formation se budgète sur devis.",
                "Le 3FPT est la première piste à examiner. Son site présente plusieurs guichets : un guichet de financement du personnel des entreprises et des membres des organisations professionnelles, un guichet de financement des demandes individuelles, un guichet pour les établissements de formation professionnelle et technique, et un guichet d'assurance qualité. Un bouton de demande de financement renvoie vers sa plateforme en ligne.",
                "La page d'accueil ne précise ni les conditions d'éligibilité, ni la contribution des employeurs, ni les règles applicables aux organismes de formation. Ces points se demandent au fonds, par écrit, programme et devis en main. Richard SALANON n'affiche pas d'agrément d'un fonds ni de certification d'éditeur, et aucune prise en charge n'est promise : le service qui compte sur une aide attend la réponse du 3FPT avant de signer.",
                "Les pièces que Richard remet servent dans tous les cas : programme détaillé, devis, feuilles de présence, attestation nominative de fin de formation. Si aucun financement n'est obtenu ou demandé, la dépense s'inscrit au budget de l'année comme une ligne de formation interne, que l'on peut étaler en choisissant un atelier d'une demi-journée, puis la formation complète ou l'accompagnement mensuel. Un service RH qui sait monter un plan de formation pour les autres a ici une occasion d'appliquer la méthode à lui-même.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour un service RH au Sénégal ?",
            'intro'      => "Aucun tarif n'est publié ici : le prix est fixé sur devis, en FCFA, après le premier échange, et le devis détaille chaque poste. Les abonnements éventuels aux assistants restent au nom de l'entreprise et ne sont pas compris. Les modes de règlement sont Mobile Money, carte bancaire, PayPal, virement et espèces.",
            'items'      => [
                ['offre' => 'Atelier découverte RH', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Classement des documents du service', 'Deux tâches travaillées sur des modèles fictifs']],
                ['offre' => 'Formation complète RH et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées ou séances à distance', 'Exercices sur vos modèles', 'Épreuve finale et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Corrections et nouvelles tâches']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par poste (recrutement, paie, administration du personnel).",
                "Le nombre de séances à distance et le format retenu.",
                "La préparation des exercices sur vos modèles et leur remplacement par des données fictives.",
                "Les logiciels à couvrir : tableur seul, ou aussi un module de paie, Odoo ou Dolibarr.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services RH sénégalais qui démarrent l'IA ?",
            'intro' => "Les erreurs d'un service RH qui démarre l'IA viennent de la pression des échéances : une paie qui doit partir, un poste à pourvoir pour lundi. Elles touchent les taux repris sans contrôle, les dossiers nominatifs collés dans un compte personnel, la liste courte laissée à l'outil et les durées de conservation oubliées.",
            'items' => [
                ['titre' => "Demander un taux ou un plafond à l'assistant", 'texte' => "Un assistant répond avec assurance, parfois à partir du droit d'un autre pays. Un taux de cotisation, un plafond ou une échéance se lisent sur le document de l'IPRES ou de la CSS de l'année en cours."],
                ['titre' => "Coller un dossier nominatif dans un compte personnel", 'texte' => "Nom, téléphone, situation de santé ou de syndicat partent chez un éditeur étranger. L'article 40 de la loi 2008-12 interdit la collecte de certaines données, et les articles 49 et 50 encadrent le transfert vers un pays tiers. Un résumé aux données fictives rend le même service."],
                ['titre' => "Laisser l'outil faire la liste courte", 'texte' => "Le résumé devient un classement que personne ne remet en cause. L'article 48 de la loi pose qu'une décision aux effets juridiques ne se prend pas sur le seul fondement d'un traitement automatisé : un décideur nommé et une grille écrite avant la lecture évitent l'impasse."],
                ['titre' => "Mélanger registre et fichier de travail", 'texte' => "Le bulletin et le registre des paiements (article L.116) sont des pièces que l'on produit à l'Inspection du travail. Un tableau de travail modifiable ne les remplace pas ; il les alimente."],
                ['titre' => "Garder tous les CV et tous les dossiers sans durée", 'texte' => "L'article 35 limite la conservation à la période nécessaire à la finalité. Une table simple, une ligne par type de document avec sa durée, fixe la règle du service."],
                ['titre' => "Oublier les pièces d'un dossier de financement", 'texte' => "Un plan de formation sans présences signées ni devis fait perdre du temps au moment de la demande. Le tableau partagé liste les pièces dès l'inscription."],
                ['titre' => "Former les RH sans les managers qui recrutent", 'texte' => "Ce sont les managers qui rédigent les demandes de recrutement et les comptes rendus d'entretien. Une demi-journée commune permet d'aligner les pratiques."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former avec Richard SALANON quand on gère les RH ou la paie au Sénégal ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des responsables RH et des gestionnaires de paie à l'usage des assistants d'IA, des tableurs et des formulaires. Il n'exerce pas le métier et n'est ni juriste en droit social, ni gestionnaire de paie : il construit les exercices à partir de vos modèles et renvoie les questions de droit à votre conseil. Richard a déjà travaillé au Sénégal, comme dans quatorze autres pays.",
                "Il compte " . $ans . " ans d'expérience dans le numérique et s'est formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "). Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Il n'est certifié par aucun éditeur d'IA ni de logiciel de paie et ne se présente comme partenaire d'aucun.",
                "Ses projets sont présentés sur la page des <a href='/realisations/'>réalisations</a>. Son parcours est sur la page <a href='/richard-salanon'>Richard SALANON</a> et les pays servis sur celle des <a href='/zones/'>zones d'intervention</a>. Pour aller plus loin, voir les formations <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, <a href='/formations/excel-google-sheets'>Excel et Google Sheets pour la gestion</a> et <a href='/formations/ia-en-entreprise'>IA en entreprise</a>, ainsi que l'organisation des sessions décrite sur la page <a href='/services/formation-en-entreprise'>formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre service RH ou votre équipe paie au Sénégal ?",
            'texte'  => "Indiquez la taille du service, les postes, les logiciels utilisés et ce qui motive la demande. Vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA pour les RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH à l'IA au Sénégal ?", 'r' => "Richard SALANON peut former à distance, depuis Cotonou, les responsables RH, chargés de recrutement et gestionnaires de paie sénégalais à l'usage d'un assistant d'IA sur leurs propres modèles. Il n'exerce pas le métier et n'est certifié par aucun éditeur. Le devis est établi en FCFA après un échange de cadrage."],
        ['q' => "Que dit le code du travail sénégalais sur le bulletin de paie et le registre des paiements ?", 'r' => "L'article L.116 de la loi n° 97-17 exige un bulletin de paie dressé et certifié par l'employeur, remis au moment du paiement, dont les mentions sont reproduites sur un registre des paiements émargé par le travailleur. L'article L.117 précise ce qui prouve le paiement en cas de contestation. Pour un cas précis, adressez-vous à l'Inspection du travail ou à votre conseil."],
        ['q' => "L'essai d'un salarié doit-il être écrit, et pour combien de temps ?", 'r' => "Selon l'article L.37 du code du travail, le contrat d'engagement à l'essai est constaté par écrit à peine de nullité, et selon l'article L.38 il ne peut excéder six mois, renouvellement compris. Un assistant peut aider à la rédaction, mais le texte final se fait relire par un juriste."],
        ['q' => "Un assistant d'IA peut-il me donner les taux de cotisation de l'IPRES ou de la CSS ?", 'r' => "Il peut en fournir, mais ils peuvent venir du droit d'un autre pays ou d'une année passée. La formation enseigne à lire taux, plafonds et échéances sur le document officiel de l'organisme et à les saisir dans une cellule paramétrable. Taux et plafonds évoluent : seul l'organisme fait foi."],
        ['q' => "Un service RH peut-il confier la sélection des candidats à un assistant ?", 'r' => "L'article 48 de la loi n° 2008-12 dispose qu'aucune décision produisant des effets juridiques à l'égard d'une personne ne peut être prise sur le seul fondement d'un traitement automatisé destiné à définir son profil. La formation apprend à utiliser l'assistant pour résumer et préparer, en gardant la décision à une personne nommée."],
        ['q' => "Peut-on déposer des CV ou des bulletins dans ChatGPT, Claude ou Gemini ?", 'r' => "Pas tels quels. La loi n° 2008-12 encadre la collecte, la conservation et le transfert de données vers un pays tiers (articles 35, 49 et 50). La formation apprend à remplacer les noms et les numéros par des données fictives et à ne jamais déposer un dossier nominatif dans un compte personnel. Pour un cas précis, la CDP ou votre conseil tranche."],
        ['q' => "Le 3FPT peut-il financer une formation IA pour mon service RH ?", 'r' => "Le site du 3FPT présente un guichet de financement du personnel des entreprises et une plateforme de demande en ligne, sans publier ses conditions sur sa page d'accueil. Aucune prise en charge n'est garantie : interrogez le fonds par écrit, programme et devis en main, avant de signer."],
        ['q' => "Quelles pièces demandent l'Inspection du travail, l'IPRES et la CSS à l'ouverture d'une entreprise avec salariés ?", 'r' => "Le portail eRegulations du Sénégal décrit une procédure en onze étapes, avec la déclaration de mouvement de travailleur, le NINEA, le registre du commerce et le contrat de travail selon l'organisme, pour une durée totale de 28 à 40 jours. Certaines fiches sont signalées en cours d'édition : confirmez les pièces auprès de chaque organisme."],
        ['q' => "Quel est le décalage horaire entre Dakar et Cotonou ?", 'r' => "Une heure : Dakar est à GMT et Cotonou à GMT+1 toute l'année. Une séance à 9 h à Dakar se tient à 10 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Il varie selon le nombre de participants, les séances, la préparation sur vos modèles et l'accompagnement. Les abonnements aux assistants restent au nom de l'entreprise."],
        ['q' => "Quels formats existent pour une équipe RH ?", 'r' => "Un atelier d'une demi-journée pour 12 personnes au plus, une formation de deux jours en quatre demi-journées pour 10 personnes au plus, des séances à distance de 2 h 30 pour 8 personnes au plus, et un accompagnement mensuel d'une demi-journée pendant trois mois."],
        ['q' => "Reçoit-on une attestation de fin de formation ?", 'r' => "Oui, une attestation nominative, avec le programme, les supports et les feuilles de présence. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Vie publique du Sénégal, Code du travail (loi n° 97-17 du 1er décembre 1997), page du document", 'url' => 'https://www.vie-publique.sn/documents/437/code-travail-senegal', 'date' => '2026-10-26'],
        ['titre' => "Vie publique du Sénégal, texte PDF du Code du travail lu pour les articles L.1, L.29, L.31, L.32, L.37, L.38, L.50, L.58, L.100, L.115 à L.117 et L.222", 'url' => 'https://www.vie-publique.sn/docs/8214312d-ddcc-44fe-896e-0265abaf1835/code-travail-senegal.pdf', 'date' => '2026-10-26'],
        ['titre' => "Vie publique du Sénégal, loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel, page du document", 'url' => 'https://www.vie-publique.sn/documents/438/loi-protection-donnees-a-caractere-personnel', 'date' => '2026-10-26'],
        ['titre' => "Vie publique du Sénégal, texte PDF de la loi n° 2008-12 lu pour les articles 2, 16, 18, 20, 22, 35, 40, 41, 48 à 50, 58, 62 et 71", 'url' => 'https://www.vie-publique.sn/docs/b1d86a17-d452-4546-a8a4-3fff87c1b05a/loi-protection-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-26'],
        ['titre' => "eRegulations Sénégal, inscription d'une entreprise avec salariés (Inspection du travail, IPRES, CSS)", 'url' => 'https://senegal.eregulations.org/procedure/97/63?l=fr', 'date' => '2026-10-26'],
        ['titre' => "eRegulations Sénégal, IPRES : dépôt de la demande d'adhésion employeur (décret n° 75-455, article 3)", 'url' => 'https://senegal.eregulations.org/procedure/97/63/step/188?l=fr', 'date' => '2026-10-26'],
        ['titre' => "eRegulations Sénégal, achat de la déclaration de mouvement de travailleur à la Chambre de commerce de Dakar", 'url' => 'https://senegal.eregulations.org/procedure/97/63/step/296?l=fr', 'date' => '2026-10-26'],
        ['titre' => "eRegulations Sénégal, IPRES : paiement des cotisations (régimes général et complémentaire)", 'url' => 'https://senegal.eregulations.org/procedure/101/62/step/192?l=fr', 'date' => '2026-10-26'],
        ['titre' => "3FPT, site du fonds : guichets de financement et plateforme de demande", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-26'],
        ['titre' => "Osiris, L'IA en débats pour l'avenir des ressources humaines (APAnews, 15 octobre 2026)", 'url' => 'https://www.osiris.sn/senegal-l-ia-en-debats-pour-l-avenir-des-ressources-humaines.html', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus', 'gouvernance-ia'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
