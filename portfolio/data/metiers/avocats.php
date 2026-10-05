<?php
// ============================================================
// data/metiers/avocats.php · Page « formations par métier » : avocats
// (vague 1C, univers Droit et justice, prioritaire, statut F).
// Angle propre : le cabinet d'avocats dans son ensemble (recherche,
// rédaction d'actes et de conclusions, gestion des dossiers et des délais,
// relation client, honoraires, secret professionnel). La recherche
// juridique détaillée et la vérification des références relèvent de la
// fiche ia-droit-ohada, vers laquelle la page oriente sans la répéter.
// Faits externes lus le 05/10/2026 : code de déontologie des avocats de
// l'espace UEMOA (5 juillet 2019 : articles 5, 6, 8, 9, 12, 13, 15, 17, 25),
// guide du CCBE (2 octobre 2025, parties 3.1, 4.1, 4.2, 4.5 et 5), guide du
// CNB (septembre 2024 : cas d'usage, compte rendu, RGPD, charte), page de
// l'OHADA sur l'Acte uniforme de recouvrement (17 octobre 2023), base des
// décisions sur les hallucinations de Damien Charlotin (2 149 décisions au
// 5 octobre 2026), aide WhatsApp (sauvegarde chiffrée), Commission
// européenne (article 4), et les « Faits déjà vérifiés » du catalogue
// (Odoo, n8n, WhatsApp). Richard n'est pas avocat : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et numérique pour avocats : chercher, rédiger, tenir dossiers et délais et répondre aux clients plus sûrement, sans rien céder sur le secret professionnel',
    'title'   => 'Formation IA et numérique pour avocats | Richard SALANON',
    'meta'    => 'Former un cabinet d\'avocats à l\'IA et au numérique : recherche, conclusions, actes, dossiers, délais, relation client et secret professionnel. Sur devis.',
    'en_bref' => 'Cette page s\'adresse aux avocats, à leurs collaborateurs et au personnel des cabinets qui veulent se servir de l\'intelligence artificielle, d\'une gestion numérique des dossiers et de quelques automatisations sans exposer le secret professionnel. Le parcours type dure trois jours en six demi-journées, se découpe par profil (associés, collaborateurs, secrétariat) et se tient en intra, en inter, à distance ou en formule hybride, sur les outils du cabinet. Richard SALANON forme à l\'usage des outils ; le droit, la stratégie et la signature restent ceux des avocats. Le prix est fixé sur devis.',
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Droit et justice',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : le cabinet de l\'ouverture du dossier à la facture, et la carte de ce que l\'on peut confier à un outil',
            'duree'  => '3 h 30',
            'points' => [
                'Relevé, avec les participants, du parcours réel d\'un dossier dans leur cabinet : prise de contact, contrôle des conflits, convention d\'honoraires, recherche, écritures, audience, compte détaillé, archivage.',
                'Pour chaque étape, trois couleurs : ce qu\'un outil peut préparer, ce qu\'il peut faire sous contrôle, ce qui lui est fermé par le secret, la déontologie ou la responsabilité de l\'avocat.',
                'Inventaire des outils déjà présents, y compris ceux où l\'IA est entrée sans bruit : traduction, lecteur de PDF, traitement de texte, messagerie, transcription sur le téléphone.',
                'Les règles qui s\'imposent au cabinet : code de déontologie des avocats de l\'espace UEMOA ou règles du barreau concerné, guides du CNB et du CCBE pour les cabinets d\'Europe.',
                'Exercice : chaque participant classe dix gestes de sa semaine passée selon cette carte, puis le groupe confronte les classements.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : recherche et veille, la méthode commune du cabinet',
            'duree'  => '3 h 30',
            'points' => [
                'Formuler une recherche avec l\'assistant, puis la conduire dans les sources officielles : texte de l\'OHADA, Journal officiel, bases de jurisprudence, textes nationaux.',
                'Le cas du recouvrement : l\'Acte uniforme de 1998 remplacé par celui du 17 octobre 2023, en vigueur depuis le 16 février 2024, et les modèles du cabinet à mettre à jour.',
                'La fiche de recherche du cabinet : question, sources lues, date de consultation, auteur, mention de l\'outil utilisé.',
                'Organisation d\'une veille partagée entre associés et collaborateurs : qui lit quoi, à quel rythme, où l\'on range les résumés relus.',
                'Exercice : une question de la pratique du cabinet, de la formulation à la fiche de recherche contrôlée par un autre participant.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : rédiger conclusions, actes et courriers avec des consignes du cabinet',
            'duree'  => '3 h 30',
            'points' => [
                'Préparer la matière avant tout envoi : extrait pseudonymisé, faits reformulés, montants et lieux élargis, pièces jamais versées telles quelles.',
                'Gabarits de consignes du cabinet : plan de conclusions, tableau chronologique, bordereau de pièces, comparaison de deux versions d\'un contrat, lettre de mise en demeure, courrier d\'information au client.',
                'Relire une première version produite par l\'outil : vérifier chaque fait contre les pièces, chaque référence contre la source, chaque chiffre contre le dossier.',
                'Ce que l\'outil ne fait pas : choisir les moyens, qualifier les faits, décider de ce qui sera plaidé.',
                'Exercice en binôme : un jeu de conclusions courtes sur un dossier fictif, rédigé avec les gabarits puis relu par un autre binôme.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : dossiers, pièces, délais et temps passé dans un outil de gestion',
            'duree'  => '3 h 30',
            'points' => [
                'Arborescence et nommage des dossiers et des pièces, versions, droits d\'accès par dossier, archivage en fin de mission.',
                'L\'agenda des délais : saisie à la réception de l\'acte, double contrôle, rappels automatiques, ce qu\'aucune automatisation ne remplace.',
                'Contrôle des conflits d\'intérêts à l\'ouverture : recherche dans la base des clients et des parties adverses, y compris les anciens dossiers.',
                'Temps passé, provisions, frais et débours, compte détaillé par dossier : démonstration dans le logiciel du cabinet, ou dans Odoo ou Dolibarr quand le cabinet n\'en a pas.',
                'Exercice : ouverture complète d\'un dossier fictif, du contrôle des conflits au premier rappel de délai.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : relation client, WhatsApp, comptes rendus et communication du cabinet',
            'duree'  => '3 h 30',
            'points' => [
                'Informer le client par écrit et en garder la trace : courriel, espace client, WhatsApp, et l\'archivage de ces échanges dans le dossier.',
                'Configurer WhatsApp pour un cabinet : téléphone professionnel, sauvegarde chiffrée de bout en bout, verrouillage, séparation des discussions personnelles.',
                'Comptes rendus de rendez-vous : prise de notes assistée après l\'entretien, jamais transcription en direct d\'un échange confidentiel dans un service en ligne.',
                'Convention d\'honoraires, information sur l\'évolution des honoraires, compte détaillé : modèles préparés avec l\'outil, validés par l\'avocat.',
                'Site, fiche en ligne et réseaux : ce que les règles du barreau autorisent, l\'autorisation préalable du Conseil de l\'Ordre dans l\'espace UEMOA, les règles propres aux barreaux d\'Europe.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : la règle écrite du cabinet, la sécurité et l\'évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Rédaction de la règle d\'usage du cabinet en une ou deux pages : outils autorisés, comptes, données interdites, relecture, mention au client.',
                'Sécurité de base : comptes professionnels, double authentification, sauvegardes, départ d\'un collaborateur, perte d\'un téléphone.',
                'Pour les cabinets établis dans l\'Union européenne : l\'obligation de maîtrise de l\'IA de l\'article 4 du règlement européen, applicable aux utilisateurs professionnels.',
                'Évaluation : un dossier fictif complet traité seul, avec une erreur glissée dans une réponse d\'assistant et un délai mal reporté à repérer.',
                'Remise des supports : carte des usages, gabarits de consignes, modèle de fiche de recherche, trame de règle d\'usage, liste de contrôle d\'ouverture de dossier.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Avocats, collaborateurs, stagiaires et personnel des cabinets'],
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, découpables par profil'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change l\'arrivée de l\'IA et des outils numériques dans la vie d\'un cabinet d\'avocats ?',
            'paragraphes' => [
                'Un cabinet d\'avocats ne se résume pas à la recherche juridique. Entre le premier appel d\'un client et le classement du dossier, il y a un contrôle des conflits d\'intérêts, une convention d\'honoraires, des pièces à recevoir et à numéroter, des conclusions à écrire, des délais à ne jamais manquer, des audiences, des comptes rendus, des relances, une facture et un compte détaillé. L\'intelligence artificielle, la gestion numérique des dossiers et l\'automatisation touchent chacune de ces étapes, et c\'est à cette échelle, celle du cabinet entier, que la formation se place.',
                'Le changement est souvent déjà là sans avoir été décidé. Le guide publié par le Conseil des barreaux européens (CCBE) le 2 octobre 2025 relève que des fonctions d\'IA générative arrivent par les mises à jour des logiciels courants, outils de traduction, lecteurs de PDF, traitements de texte, navigateurs, et que leurs utilisateurs ne savent pas toujours qu\'un modèle d\'IA traite ce qu\'ils y déposent. Un cabinet qui pense « ne pas utiliser l\'IA » en utilise donc souvent, sans règle ni contrôle.',
                'Le Conseil national des barreaux, dans son guide pratique de septembre 2024, en tire la conséquence : il juge indispensable que l\'avocat se forme et forme l\'ensemble des membres de son cabinet, et il recommande une règle interne connue de tous, associés, collaborateurs et personnel. Le CCBE ajoute un risque propre à la profession : si les tâches qui formaient les jeunes avocats à la rédaction et à la relecture sont confiées aux outils, leur apprentissage du métier doit être repensé, faute de quoi leurs compétences s\'érodent.',
                'La formation part donc du cabinet tel qu\'il travaille. Elle apprend à chacun ce que l\'outil peut préparer, ce qu\'il fait sous contrôle et ce qui lui reste fermé ; elle installe une méthode commune de recherche, de rédaction et de suivi des délais ; elle aboutit à une règle écrite du cabinet. Richard SALANON n\'est pas avocat : il forme à l\'usage des outils, et ce sont les avocats présents qui disent, pendant les exercices, si un résultat est juridiquement juste.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles tâches du cabinet un outil peut-il préparer, et lesquelles restent à l\'avocat ?',
            'legende' => 'Répartition enseignée pendant la formation. La dernière colonne indique le risque que le cabinet doit maîtriser avant d\'outiller la tâche.',
            'entetes' => ['Tâche du cabinet', 'Ce qu\'un outil peut préparer', 'Ce qui reste à l\'avocat', 'Risque à maîtriser'],
            'lignes'  => [
                ['Ouverture du dossier et contrôle des conflits', 'Recherche du client et de l\'adversaire dans la base du cabinet, anciens dossiers compris', 'Décider d\'accepter ou de refuser le dossier', 'Une base incomplète qui laisse passer un ancien client devenu adversaire'],
                ['Recherche juridique et veille', 'Mots-clés, notions voisines, résumé d\'une décision téléchargée par l\'avocat', 'Lire la source officielle et retenir ce qui sert le dossier', 'Une référence inventée ou un texte remplacé, comme l\'ancien Acte uniforme de recouvrement'],
                ['Conclusions et écritures', 'Plan, tableau chronologique, reformulation des faits, liste des pièces', 'Choisir les moyens, qualifier les faits, signer', 'Un fait déformé ou une pièce citée qui ne dit pas ce qu\'on lui prête'],
                ['Actes et contrats', 'Trame de clause, comparaison de deux versions, liste des écarts', 'Valider l\'acte, dont l\'avocat rédacteur assure la validité', 'Un modèle ancien repris sans contrôle du texte en vigueur'],
                ['Agenda des délais', 'Rappels automatiques à partir d\'une date saisie et contrôlée', 'Calculer le délai et vérifier la saisie', 'Un rappel jamais créé parce que la date d\'origine était fausse'],
                ['Comptes rendus de rendez-vous', 'Mise au propre de notes prises par l\'avocat, liste des actions à mener', 'Ce qui figure au dossier et ce qui est dit au client', 'Une transcription en direct envoyée à un service en ligne'],
                ['Correspondance avec le client', 'Brouillon de courrier, adoucissement du ton, résumé d\'un long échange', 'Le conseil donné et l\'envoi', 'Un conseil juridique parti sans relecture, sous la responsabilité de l\'avocat'],
                ['Honoraires et compte détaillé', 'Relevé du temps passé, provisions, frais et débours par dossier', 'Le montant, la convention, la discussion avec le client', 'Un compte qui mélange honoraires et sommes reçues pour le client'],
                ['Communication du cabinet', 'Brouillon de texte de présentation ou d\'article', 'Ce qui est publié, dans le respect des règles du barreau', 'Une publicité ou une sollicitation interdite par le code de déontologie applicable'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que l\'IA et l\'automatisation ne doivent-elles jamais faire dans un cabinet ?',
            'intro' => 'Ces interdits ne viennent pas de la prudence du formateur : ils découlent des textes qui gouvernent la profession, cités plus bas. La formation les fait appliquer sur des cas concrets, pour qu\'ils deviennent des réflexes et non une liste affichée au mur.',
            'items' => [
                ['titre' => 'Recevoir le dossier dans un compte personnel', 'texte' => 'Le secret professionnel couvre ce que le client confie et ce que l\'avocat produit. Un compte gratuit ouvert par un collaborateur sur son téléphone n\'offre aucune garantie contractuelle sur l\'usage des données. Rien du dossier n\'y entre, même pour gagner dix minutes la veille d\'une audience.'],
                ['titre' => 'Calculer seule un délai de procédure', 'texte' => 'Un assistant peut se tromper de texte, de point de départ ou de règle de computation, et l\'automatisation ne fait que répéter la date qu\'on lui a donnée. Le délai se calcule par l\'avocat ou sous son contrôle, puis se saisit et se vérifie par une seconde personne.'],
                ['titre' => 'Transcrire en direct un entretien confidentiel', 'texte' => 'Le guide du CNB le souligne : la pseudonymisation est impossible pour un compte rendu réalisé en direct, puisque tout ce qui se dit pendant le rendez-vous part vers l\'outil. Les notes se prennent par l\'avocat et se mettent au propre ensuite, hors ligne ou sur des éléments neutralisés.'],
                ['titre' => 'Répondre au client à la place de l\'avocat', 'texte' => 'Un robot de messagerie peut confirmer un rendez-vous ou accuser réception d\'une pièce. Il ne donne pas de consultation, n\'évalue pas les chances d\'un procès et n\'annonce pas une stratégie : l\'avocat assume la responsabilité de la mission qui lui est confiée.'],
                ['titre' => 'Mêler les données de plusieurs clients', 'texte' => 'Le CCBE signale qu\'un outil nourri des dossiers du cabinet peut servir contre un ancien client, par exemple quand celui-ci devient la partie adverse. Les espaces de travail se séparent par dossier, et un assistant branché sur les archives se conçoit avec ce risque en tête.'],
                ['titre' => 'Publier ou démarcher au nom du cabinet', 'texte' => 'Dans l\'espace UEMOA, le code de déontologie interdit à l\'avocat toute publicité, tout démarchage et toute sollicitation, et subordonne un site ou tout support numérique destiné au public à l\'autorisation préalable du Conseil de l\'Ordre. Un outil qui « génère des publications » ne change rien à cette règle.'],
                ['titre' => 'Déposer ou signer sans relecture humaine', 'texte' => 'Une écriture déposée, un acte signé ou une lettre envoyée engagent l\'avocat. Aucune chaîne automatique ne va jusqu\'à l\'envoi ou au dépôt : il y a toujours, à la fin, un avocat qui lit et qui décide.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels textes encadrent l\'usage des outils numériques par un cabinet, en zone OHADA et en Europe ?',
            'legende' => 'Textes lus le 5 octobre 2026 dans leur version publiée. Ils ne remplacent ni le règlement intérieur de chaque barreau ni les décisions de l\'ordre, que les participants apportent et qui priment pour eux.',
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Ce que cela change pour les outils du cabinet'],
            'lignes'  => [
                ['Code de déontologie des avocats de l\'espace UEMOA (Abidjan, 5 juillet 2019), articles 5 et 6', 'Strict respect du secret professionnel ; respect du secret de l\'enquête et de l\'instruction en matière pénale', 'Un dossier pénal en cours ne passe par aucun service en ligne ; le reste du dossier n\'y entre que pseudonymisé, dans un compte professionnel'],
                ['Même code, article 8', 'L\'avocat informe régulièrement le client de l\'évolution de la mission, par tout moyen laissant une trace écrite', 'Les échanges WhatsApp et les courriels avec le client se conservent dans le dossier, pas seulement dans un téléphone'],
                ['Même code, article 9', 'Respect des règles relatives aux conflits d\'intérêts', 'Le contrôle des conflits s\'appuie sur une base des clients et des parties adverses complète et tenue à jour'],
                ['Même code, articles 12, 13 et 15', 'Information du client sur les honoraires dès l\'ouverture ; comptabilité précise et distincte par dossier ; compte détaillé séparant frais et débours, émoluments et honoraires ; sous-compte CARPA pour les sommes recouvrées', 'Le logiciel de gestion du cabinet doit suivre chaque dossier séparément et produire ce compte détaillé'],
                ['Même code, article 17', 'Publicité, démarchage et sollicitation interdits ; site web ou support numérique destiné au public soumis à l\'autorisation préalable du Conseil de l\'Ordre', 'Aucun site, aucune page de réseau social au nom du cabinet sans cette autorisation, quel que soit l\'outil qui l\'a produit'],
                ['Même code, article 25', 'Les correspondances entre avocats de barreaux de l\'Union sont confidentielles par principe', 'Une lettre d\'un confrère ne se soumet pas plus à un assistant en ligne qu\'une pièce du client'],
                ['Guide du CCBE sur l\'IA générative (2 octobre 2025)', 'Secret, compétence, indépendance, transparence envers le client, conflits d\'intérêts', 'Configurer les outils pour éviter le partage, lire les conditions de l\'éditeur, informer le client quand il pourrait s\'opposer à l\'usage de l\'outil'],
                ['Guide pratique du CNB (septembre 2024)', 'Transparence interne par une charte ou un guide d\'usage ; formation de tous les membres du cabinet ; respect du RGPD', 'Le RGPD vise aussi les données des collaborateurs, des salariés et des prestataires du cabinet, pas seulement celles des clients'],
                ['Règlement européen sur l\'IA, article 4', 'Obligation de maîtrise de l\'IA pour les fournisseurs et les utilisateurs professionnels de systèmes d\'IA', 'Un cabinet établi dans l\'Union qui utilise un assistant prend des mesures de maîtrise de l\'IA pour son personnel ; garder la trace des formations suivies permet d\'en rendre compte'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Un logiciel peut-il tenir l\'agenda des délais à la place du cabinet ?',
            'texte' => 'Non. Un logiciel rappelle une échéance, il ne la calcule pas mieux que la personne qui l\'a saisie. Le cabinet garde donc trois gestes humains : le calcul du délai par l\'avocat ou sous son contrôle, la vérification de la saisie par une seconde personne, et la consultation quotidienne de l\'agenda par quelqu\'un de désigné, avec un suppléant pendant les congés. L\'automatisation ajoute des rappels, elle ne retire aucun de ces contrôles.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés situent l\'enjeu pour un cabinet ?',
            'items' => [
                ['valeur' => '2 149', 'libelle' => 'Décisions de justice recensées dans le monde au 5 octobre 2026 où une juridiction a constaté qu\'une partie s\'était appuyée sur des contenus inventés ou déformés par une IA ; 854 visent des avocats, 14 la France et 8 la Belgique ; aucun État de la zone OHADA n\'y figure', 'source' => 'Damien Charlotin, AI Hallucination Cases Database', 'url' => 'https://www.damiencharlotin.com/hallucinations/'],
                ['valeur' => '16 février 2024', 'libelle' => 'Entrée en vigueur du nouvel Acte uniforme sur le recouvrement et les voies d\'exécution, adopté le 17 octobre 2023 en remplacement du texte de 1998 (page consultée le 5 octobre 2026)', 'source' => 'OHADA, Acte uniforme portant organisation des procédures simplifiées de recouvrement et des voies d\'exécution', 'url' => 'https://www.ohada.org/organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution/'],
                ['valeur' => '41 %', 'libelle' => 'Part des avocats interrogés en 2023 aux États-Unis, au Royaume-Uni, en France et au Canada qui avaient déjà utilisé l\'IA générative, dont 15 % à des fins juridiques, selon l\'enquête de LexisNexis citée par le CCBE', 'source' => 'CCBE, guide sur l\'IA générative (2 octobre 2025)', 'url' => 'https://www.ccbe.eu/fileadmin/speciality_distribution/public/documents/IT_LAW/ITL_Guides_recommendations/FR_ITL_20251002_CCBE-guide-on-the-use-of-the-use-of-generative-AI-for-lawyers.pdf'],
                ['valeur' => '3 août 2026', 'libelle' => 'Début du contrôle et des sanctions de l\'obligation de maîtrise de l\'IA, applicable depuis le 2 février 2025 aux utilisateurs professionnels établis dans l\'Union européenne (mise à jour du 27 juillet 2026)', 'source' => 'Commission européenne, questions et réponses sur l\'article 4', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'],
                ['valeur' => '1 000', 'libelle' => 'Messages de service gratuits par mois et par numéro professionnel sur l\'API WhatsApp Business depuis le 1er octobre 2026, facturés au-delà (page lue le 5 octobre 2026)', 'source' => 'Meta, tarification de WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation dans des cabinets d\'Afrique francophone et d\'Europe ?',
            'items' => [
                ['secteur' => 'Cabinet de recouvrement de créances, à Abidjan', 'probleme' => 'Plusieurs centaines de dossiers d\'injonction de payer pour des banques et des distributeurs, des modèles de requêtes écrits sous l\'ancien Acte uniforme et un agenda tenu dans un tableur partagé que tout le monde modifie.', 'solution' => 'Revue des modèles contre l\'Acte uniforme du 17 octobre 2023, gabarits de consignes pour les requêtes et les courriers de relance, agenda des délais déplacé dans un outil de gestion avec double saisie contrôlée et rappels automatiques.'],
                ['secteur' => 'Cabinet généraliste de deux associés, à Cotonou', 'probleme' => 'Les clients écrivent et envoient leurs pièces par WhatsApp sur le téléphone personnel des associés ; aucune trace dans le dossier, aucune sauvegarde chiffrée, et un collaborateur qui résume les échanges avec un compte gratuit.', 'solution' => 'Téléphone et numéro du cabinet, sauvegarde chiffrée activée, pièces versées au dossier le jour même, résumé des échanges réalisé sur des éléments neutralisés dans un compte professionnel, règle d\'usage signée par chacun.'],
                ['secteur' => 'Cabinet d\'affaires, à Dakar', 'probleme' => 'Un audit d\'acquisition oblige à comparer des dizaines de statuts, de pactes et de contrats en quelques jours, avec une équipe réduite et un client qui exige une confidentialité totale.', 'solution' => 'Comparaison de versions et tableau des écarts préparés sur un poste du cabinet, sans envoi des documents à un service en ligne, puis chaque écart validé par un avocat avant le rapport.'],
                ['secteur' => 'Cabinet de droit pénal, à Lomé', 'probleme' => 'Un collaborateur propose de faire résumer par un assistant les procès-verbaux d\'audition d\'un dossier en cours d\'instruction.', 'solution' => 'Rappel du secret de l\'enquête et de l\'instruction, usage de l\'IA limité aux textes publics et aux décisions publiées, chronologies et tableaux de pièces construits à la main ou avec des outils hors ligne.'],
                ['secteur' => 'Cabinet parisien conseillant des clients d\'Afrique de l\'Ouest', 'probleme' => 'Le cabinet est soumis au RGPD et à l\'article 4 du règlement européen sur l\'IA, ses avocats travaillent en droit français et en droit OHADA, et chacun s\'est équipé à sa façon.', 'solution' => 'Charte du cabinet conforme au guide du CNB, inventaire des outils et des comptes, formation tracée de tout le personnel, consignes séparées par système juridique et méthode commune de vérification.'],
                ['secteur' => 'Cabinet bruxellois aux dossiers multilingues', 'probleme' => 'Les échanges avec les clients et les confrères passent par le français, le néerlandais et l\'anglais, et les traductions se font dans le navigateur ou le traitement de texte, sans savoir où partent les textes.', 'solution' => 'Inventaire des fonctions de traduction et d\'IA intégrées aux logiciels du cabinet, choix d\'un outil professionnel aux conditions lues, correspondances entre confrères tenues hors des outils non maîtrisés.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils et systèmes un cabinet d\'avocats travaille-t-il, et que faut-il en savoir ?',
            'legende' => 'Outils rencontrés dans les cabinets de la zone OHADA et d\'Europe. Les prix d\'éditeurs cités ont été relevés le 5 octobre 2026 ; ils sont payés par le cabinet à l\'éditeur et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil ou système', 'Usage dans le cabinet', 'Coût ou accès', 'Point d\'attention'],
            'lignes'  => [
                ['Sources officielles du droit OHADA et des États', 'Textes en vigueur, Journal officiel de l\'OHADA, décisions publiées, textes nationaux', 'Bibliothèque numérique de l\'OHADA consultable gratuitement ; Journaux officiels nationaux', 'Ce sont elles qui font foi, jamais la réponse d\'un assistant'],
                ['Assistant d\'IA en offre professionnelle', 'Recherche assistée, brouillons, comparaison de textes, reformulation', 'Abonnement par utilisateur ; les offres et leurs garanties sont détaillées dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>', 'Lire les conditions sur l\'usage des données, désactiver ce qui peut l\'être, aucun compte personnel pour le dossier'],
                ['Logiciel de gestion de cabinet', 'Dossiers, parties, conflits, agenda des délais, temps passé, facturation', 'Abonnement d\'éditeur, variable selon l\'offre et le nombre d\'utilisateurs', 'Vérifier qu\'il produit un compte détaillé par dossier et qu\'il exporte les données si le cabinet en change'],
                ['Odoo', 'Projets utilisés comme dossiers, feuilles de temps, facturation, documents', 'Une application gratuite ; offre Standard à 19,90 € par utilisateur et par mois la première année en paiement annuel, puis 24,90 €', 'Paramétrage à faire pour le contrôle des conflits et le compte détaillé ; voir le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a>'],
                ['Dolibarr', 'Tiers, projets, temps passé, factures, documents joints', 'Logiciel libre ; le coût est celui de l\'hébergement et du paramétrage', 'Adapté au petit cabinet qui veut maîtriser ses données, à condition de sauvegarder sérieusement'],
                ['WhatsApp et WhatsApp Business', 'Prise de rendez-vous, échanges courants, réception de pièces', 'Application gratuite ; l\'API est facturée par message au-delà de 1 000 messages de service gratuits par mois', 'Numéro du cabinet, sauvegarde chiffrée de bout en bout à activer, pièces versées au dossier'],
                ['Suite bureautique (Microsoft 365, Google Workspace)', 'Courriel, agenda, stockage, rédaction', 'Abonnement par utilisateur', 'Des fonctions d\'IA y sont intégrées : savoir lesquelles sont actives et où partent les textes'],
                ['Automatisation (n8n, Make)', 'Rappels de délais, accusés de réception, classement des pièces reçues', 'n8n Cloud à partir de 20 € par mois en paiement annuel ; n8n peut aussi s\'installer sur un serveur du cabinet', 'Aucune automatisation jusqu\'à l\'envoi d\'un conseil ou le dépôt d\'un acte'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation s\'organise-t-elle dans un cabinet ?',
            'intro' => 'Un cabinet ne s\'arrête pas pour se former : les audiences, les délais et les rendez-vous continuent. L\'organisation part de ces contraintes et de la place de chacun dans le dossier.',
            'items' => [
                ['titre' => 'Un découpage par profil', 'texte' => 'Les associés suivent au moins la première et la dernière demi-journée, parce qu\'ils fixent la règle et relisent ; les collaborateurs suivent tout le parcours ; le secrétariat suit les demi-journées sur les dossiers, les délais et la relation client.'],
                ['titre' => 'Les outils du cabinet', 'texte' => 'Les exercices se font dans le logiciel, la messagerie et les comptes que le cabinet utilise vraiment, ou dans ceux qu\'il envisage. Si le cabinet n\'a pas encore d\'outil de gestion, la démonstration se fait dans Odoo ou Dolibarr, sans engagement de les adopter.'],
                ['titre' => 'Des dossiers fictifs ou neutralisés', 'texte' => 'Aucun dossier en cours ne sert de matière. Le cabinet peut fournir des dossiers clos et anonymisés, ou le formateur apporte des dossiers fictifs construits avec les avocats présents pour coller à leur pratique.'],
                ['titre' => 'Des petits groupes', 'texte' => 'Huit personnes au plus par groupe, pour que chacun travaille sur son poste et que les erreurs de méthode se voient. Un cabinet plus important est réparti en plusieurs groupes, par profil plutôt que par ancienneté.'],
                ['titre' => 'Un calendrier qui respecte le palais', 'texte' => 'Les demi-journées se placent hors des jours d\'audience chargés et peuvent s\'étaler sur plusieurs semaines. Les vacations judiciaires sont souvent le meilleur moment pour la partie sur la règle d\'usage et l\'outil de gestion.'],
                ['titre' => 'Des supports que le cabinet garde', 'texte' => 'Carte des usages, gabarits de consignes, fiche de recherche, trame de règle d\'usage, liste de contrôle d\'ouverture de dossier, dans des formats modifiables, avec une attestation nominative de fin de formation.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Un canal reste ouvert pour les questions d\'usage des outils pendant une période fixée au devis. Les questions de droit et de déontologie sont renvoyées aux confrères, au bâtonnier ou à l\'ordre.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir selon la taille et l\'organisation du cabinet ?',
            'legende' => 'Formats indicatifs : le parcours se recompose après un premier échange sur l\'effectif, les matières pratiquées et les outils en place.',
            'entetes' => ['Situation', 'Format conseillé', 'Durée', 'Ce qui est privilégié'],
            'lignes'  => [
                ['Avocat exerçant seul, avec ou sans secrétaire', 'Séances individuelles à distance ou sur place', '4 à 6 séances de 2 heures', 'Règle d\'usage simple, dossiers et délais, WhatsApp et comptes rendus'],
                ['Cabinet de 3 à 10 personnes', 'Intra, dans les locaux du cabinet', '3 jours en 6 demi-journées', 'Le parcours complet, avec une règle d\'usage adoptée à la fin'],
                ['Cabinet de plus de 10 personnes ou à plusieurs bureaux', 'Intra en plusieurs groupes, ou hybride', '3 jours par groupe, plus une demi-journée pour les associés', 'Référents par bureau, méthode commune, outil de gestion partagé'],
                ['Jeunes avocats d\'un barreau ou d\'une association', 'Inter, sur dossiers fictifs uniquement', '2 jours', 'Méthode de recherche, rédaction sous contrôle, bonnes habitudes dès l\'installation'],
                ['Équipe répartie entre plusieurs pays', 'À distance, avec partage d\'écran', '6 à 9 séances de 2 heures', 'Une méthode commune malgré des règles de barreau différentes'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d\'un cabinet, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Le prix est fixé sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils restent payés par le cabinet aux éditeurs.',
            'items'      => [
                ['offre' => 'Parcours cabinet complet', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur les outils du cabinet', 'Carte des usages et règle d\'usage du cabinet', 'Gabarits de consignes et fiche de recherche', 'Évaluation finale et attestation nominative']],
                ['offre' => 'Module associés', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée de décision', 'Choix des outils et des comptes', 'Règle d\'usage et contrôle de la relecture', 'Plan de formation du reste du cabinet']],
                ['offre' => 'Module secrétariat et assistants', 'prix' => 'Sur devis', 'inclus' => ['Dossiers, pièces et nommage', 'Agenda des délais et rappels', 'Relation client et WhatsApp', 'Comptes détaillés et relances']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, et le découpage par profil.',
                'Le travail de préparation sur les modèles, les dossiers clos et les outils du cabinet.',
                'Le paramétrage éventuel d\'un outil de gestion ou d\'une automatisation pendant la formation.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le choix du présentiel, de la distance ou de l\'hybride.',
                'La durée du suivi retenu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation, l\'ordre ou la formation continue peuvent-ils financer la session ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est garantie, et la page n\'en promet aucune. Ce qui suit indique seulement où poser la question. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> ouvre son plan de formation aux entreprises à jour de leurs taxes de formation : un cabinet constitué en société d\'avocats peut se renseigner, programme et devis en main. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> propose des guichets pour le personnel des entreprises et pour les demandes individuelles. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286</a> ; ses conditions se demandent au fonds.',
                'En France, le <a href="https://cnb.avocat.fr/les-obligations-de-formation-continue">Conseil national des barreaux</a> impose aux avocats 20 heures de formation continue par année civile, ou 40 heures sur deux années consécutives, selon des modalités qu\'il fixe. Savoir si une session sur les outils numériques peut y compter se vérifie auprès de l\'ordre ou de l\'école d\'avocats avant l\'inscription. Dans l\'espace UEMOA, la question se pose au barreau concerné.',
                'Richard SALANON n\'est titulaire ni de la certification Qualiopi, ni d\'un agrément de fonds africain, ni d\'une habilitation d\'école d\'avocats. Le budget du cabinet se construit donc d\'abord sans financement extérieur. Le programme, les feuilles de présence, l\'évaluation et les attestations sont fournis dans tous les cas, pour toute démarche que le cabinet ou un avocat voudrait engager de lui-même.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les cabinets qui s\'équipent, et comment les éviter ?',
            'intro' => 'Les mêmes faux pas reviennent d\'un cabinet à l\'autre, à Abidjan comme à Paris. Aucun n\'est technique : ce sont des erreurs d\'organisation, qui se corrigent par une règle et une habitude.',
            'items' => [
                ['titre' => 'Acheter l\'outil avant d\'écrire la règle', 'texte' => 'Un abonnement souscrit sans décider qui s\'en sert, pour quoi et avec quelles données devient vite un outil personnel de plus. La règle d\'usage se rédige d\'abord, l\'outil se choisit ensuite.'],
                ['titre' => 'Laisser chacun utiliser son propre compte', 'texte' => 'Le collaborateur qui utilise son compte gratuit le fait souvent par bonne volonté. Le cabinet fournit des comptes professionnels, ou interdit clairement l\'usage pour les dossiers ; l\'entre-deux est le pire des cas.'],
                ['titre' => 'Automatiser l\'agenda sans double contrôle', 'texte' => 'La date fausse saisie une fois se propage dans tous les rappels. La seconde vérification de chaque délai reste obligatoire, même avec le meilleur logiciel.'],
                ['titre' => 'Garder les échanges clients dans un téléphone', 'texte' => 'Le jour où le téléphone est perdu, ou le collaborateur parti, la trace écrite des informations données au client disparaît. Les échanges et les pièces reçues se versent au dossier, et la sauvegarde chiffrée s\'active.'],
                ['titre' => 'Mettre un robot de consultation sur le site', 'texte' => 'Un assistant en ligne qui répond aux questions juridiques des visiteurs donne des consultations que personne ne relit, et peut constituer une sollicitation. Sur un site autorisé par l\'ordre, un robot se limite aux informations pratiques et à la prise de rendez-vous.'],
                ['titre' => 'Réutiliser les vieux modèles', 'texte' => 'Les modèles de requêtes, de mises en demeure et de statuts vieillissent avec les textes. Après une réforme comme celle du recouvrement de 2023, on les reprend un par un avant de les confier à un outil qui les multipliera.'],
                ['titre' => 'Oublier les données du personnel', 'texte' => 'Le cabinet traite aussi les données de ses collaborateurs, de ses salariés et de ses prestataires. Le guide du CNB le rappelle pour le RGPD ; au Bénin, la loi n° 2017-20 portant code du numérique couvre de la même façon toutes les personnes dont le cabinet traite les données.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue choisir selon le besoin du cabinet ?',
            'legende' => 'Fiches du catalogue qui prolongent cette page. Chacune a son programme, sa durée et sa FAQ ; le parcours d\'un cabinet en combine souvent deux ou trois.',
            'entetes' => ['Formation', 'Pour qui dans le cabinet', 'Ce qu\'elle apporte', 'Durée indicative'],
            'lignes'  => [
                ['<a href="/formations/ia-droit-ohada">IA et droit OHADA : recherche, rédaction, veille</a>', 'Avocats et collaborateurs', 'La recherche dans les Actes uniformes et la jurisprudence de la CCJA, et le protocole de vérification des références, en profondeur', '2 jours'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Tout le personnel', 'Les données personnelles, le secret des affaires, le droit d\'auteur et les biais, pays par pays', '1 à 2 jours'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', 'Associés et gérants', 'La charte, l\'inventaire des usages, les rôles et les contrôles, quand le cabinet grandit', '2 jours'],
                ['<a href="/formations/prompt-engineering">Prompt engineering professionnel</a>', 'Collaborateurs qui rédigent beaucoup', 'Des gabarits de consignes partagés et une façon de noter les réponses', '2 jours'],
                ['<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>', 'Cabinets qui veulent interroger leurs propres modèles', 'Un assistant qui répond à partir des modèles et des textes vérifiés du cabinet, avec citations', '3 jours'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Secrétariat, collaborateurs, stagiaires', 'Hameçonnage, mots de passe, double authentification, téléphones perdus', '1 jour'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a> ou <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', 'Secrétariat et associés', 'La prise en main de l\'outil de gestion retenu pour les dossiers, le temps et la facturation', '2 à 3 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre cabinet avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des avocats. Il construit lui-même des outils d\'IA et les relie à des logiciels de gestion : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il connaît donc de l\'intérieur ce qu\'un assistant fait des textes qu\'on lui confie, ce que garantit un abonnement professionnel et ce qu\'une automatisation peut casser. Avec ' . $ans . ' ans d\'expérience, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, d\'Afrique de l\'Ouest et centrale jusqu\'à la France, la Belgique, la Suisse et le Canada.',
                'Il n\'est pas avocat et le dit dès la première séance : il enseigne les outils, l\'organisation des dossiers et la méthode de contrôle ; le droit, la déontologie et la stratégie restent aux avocats, à leur bâtonnier et à leur ordre. Il n\'est certifié par aucun éditeur et ne se présente comme partenaire d\'aucun. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et l\'ensemble des formations dans le <a href="/formations/">catalogue</a>, dont le domaine <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>.',
                'Quand le cabinet veut aller au-delà de la formation, par exemple un outil de gestion paramétré pour le contrôle des conflits et le compte détaillé, ou un assistant interne qui ne répond qu\'à partir de ses propres modèles, le besoin relève d\'une mission de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> ou d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. La façon dont Richard organise les sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'engager le cabinet dans la formation ?',
            'texte' => 'L\'outil prépare, l\'avocat décide et signe : le dossier n\'entre que pseudonymisé dans un compte professionnel, le pénal en cours n\'y entre pas, chaque délai est calculé par un avocat et vérifié par une seconde personne, chaque échange avec le client rejoint le dossier, rien n\'est publié sans l\'accord de l\'ordre, et tout le cabinet, associés compris, suit la même règle écrite.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre cabinet à l\'IA et au numérique sans exposer le secret professionnel ?',
            'texte'  => 'Indiquez la taille du cabinet, les profils à former, vos matières, les pays où vous exercez et les outils déjà utilisés : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour mon cabinet'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il avocat ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils d\'IA, à l\'organisation numérique des dossiers et à la méthode de contrôle. Il ne donne aucune consultation et ne tranche aucune question de droit ou de déontologie : ce sont les avocats présents qui jugent du fond pendant les exercices.'],
        ['q' => 'Faut-il déjà utiliser un assistant d\'IA ou un logiciel de gestion ?', 'r' => 'Non. La première demi-journée part de ce que fait le cabinet aujourd\'hui, même sans aucun outil. Un ordinateur par participant et, si possible, les comptes du cabinet suffisent.'],
        ['q' => 'Peut-on travailler sur nos vrais dossiers pendant la formation ?', 'r' => 'Pas sur des dossiers en cours. Le cabinet peut fournir des dossiers clos et anonymisés, ou le formateur apporte des dossiers fictifs construits avec les avocats pour ressembler à leur pratique. Le secret professionnel s\'applique aussi pendant la formation.'],
        ['q' => 'Un collaborateur peut-il utiliser son compte ChatGPT gratuit pour un dossier ?', 'r' => 'Non. Un compte gratuit n\'offre pas de garantie contractuelle sur l\'usage des données, et le secret couvre tout ce que le client confie. Le cabinet fournit des comptes professionnels aux conditions lues, ou interdit l\'usage pour les dossiers.'],
        ['q' => 'Peut-on faire transcrire automatiquement un rendez-vous avec un client ?', 'r' => 'Pas avec un service en ligne quand l\'entretien est confidentiel : tout ce qui se dit part vers l\'outil, et le guide du CNB rappelle que la pseudonymisation est alors impossible. On prend des notes, puis on les met au propre sur des éléments neutralisés.'],
        ['q' => 'Le cabinet peut-il communiquer avec ses clients par WhatsApp ?', 'r' => 'Le code de déontologie de l\'espace UEMOA demande d\'informer le client par un moyen laissant une trace écrite, ce qu\'un message permet. La formation montre comment utiliser un numéro du cabinet, activer la sauvegarde chiffrée de bout en bout et verser les échanges et les pièces au dossier.'],
        ['q' => 'Un logiciel peut-il gérer les délais de procédure à notre place ?', 'r' => 'Il peut rappeler une échéance, pas la calculer de façon fiable. Le délai est calculé par l\'avocat ou sous son contrôle, saisi puis vérifié par une seconde personne ; les rappels automatiques s\'ajoutent à ces contrôles.'],
        ['q' => 'Faut-il dire au client qu\'on utilise l\'IA ?', 'r' => 'Le guide du CCBE du 2 octobre 2025 demande la transparence lorsqu\'il est raisonnable de penser qu\'un client informé s\'y opposerait ou poserait des conditions, et note que certains clients exigent l\'IA quand d\'autres la refusent. La formation aide à rédiger la mention ; la décision appartient au cabinet et aux règles de son barreau.'],
        ['q' => 'Un cabinet peut-il mettre un chatbot sur son site ?', 'r' => 'Dans l\'espace UEMOA, le site lui-même suppose l\'autorisation préalable du Conseil de l\'Ordre, et la sollicitation est interdite. Un robot limité aux informations pratiques et à la prise de rendez-vous se discute avec l\'ordre ; un robot qui donne des consultations est à écarter.'],
        ['q' => 'Quelle différence avec la formation IA et droit OHADA ?', 'r' => 'La formation IA et droit OHADA approfondit la recherche dans les Actes uniformes et la jurisprudence de la CCJA, la rédaction et la vérification des références, pour tous les professionnels du droit. Cette page décrit un parcours pour le cabinet entier : dossiers, délais, relation client, honoraires, règle d\'usage et sécurité, avec une demi-journée de recherche qui renvoie à cette formation pour aller plus loin.'],
        ['q' => 'La formation compte-t-elle pour la formation continue obligatoire ?', 'r' => 'En France, le CNB fixe l\'obligation à 20 heures par an ou 40 heures sur deux ans, selon ses propres modalités, et Richard SALANON n\'est pas habilité par une école d\'avocats : vérifiez auprès de votre ordre avant l\'inscription. Ailleurs, la règle est celle de votre barreau.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants et de groupes, la préparation des dossiers et des modèles, le paramétrage éventuel d\'un outil, le lieu, le format et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits.'],
    ],

    'sources' => [
        ['titre' => 'Ordre des avocats du Sénégal, code de déontologie des avocats de l\'espace UEMOA (Abidjan, 5 juillet 2019), articles 5, 6, 8, 9, 12, 13, 15, 17 et 25', 'url' => 'https://ordredesavocats.sn/admin/documentheques/201/201_1738671726362.pdf', 'date' => '2026-10-05'],
        ['titre' => 'CCBE, guide sur l\'utilisation de l\'intelligence artificielle générative par les avocats (2 octobre 2025)', 'url' => 'https://www.ccbe.eu/fileadmin/speciality_distribution/public/documents/IT_LAW/ITL_Guides_recommendations/FR_ITL_20251002_CCBE-guide-on-the-use-of-the-use-of-generative-AI-for-lawyers.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Conseil national des barreaux, guide pratique : utilisation des systèmes d\'intelligence artificielle générative (1re édition, septembre 2024)', 'url' => 'https://cnb.avocat.fr/medias/cnb-guidepratique-utilisation-systemes-iag-2024-68f7b1d86e4570.98487114.pdf', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, Acte uniforme portant organisation des procédures simplifiées de recouvrement et des voies d\'exécution (17 octobre 2023, en vigueur le 16 février 2024)', 'url' => 'https://www.ohada.org/organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, bibliothèque numérique : Actes uniformes, Journal officiel et décisions', 'url' => 'https://biblio.ohada.org/', 'date' => '2026-10-05'],
        ['titre' => 'Damien Charlotin, AI Hallucination Cases Database (mise à jour du 5 octobre 2026)', 'url' => 'https://www.damiencharlotin.com/hallucinations/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : à propos de la sauvegarde chiffrée de bout en bout', 'url' => 'https://faq.whatsapp.com/490592613091019/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs des offres', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, tarifs de n8n Cloud', 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Conseil national des barreaux, les obligations de formation continue', 'url' => 'https://cnb.avocat.fr/les-obligations-de-formation-continue', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-droit-ohada', 'ia-ethique-conformite', 'gouvernance-ia', 'prompt-engineering', 'rag-chatbot-documents', 'cybersecurite-employes'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise', 'digitalisation-d-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'odoo-vs-dolibarr'],
    ],
];
