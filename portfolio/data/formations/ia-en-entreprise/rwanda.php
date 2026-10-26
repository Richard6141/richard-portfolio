<?php
// ============================================================
// data/formations/ia-en-entreprise/rwanda.php · Formation IA en entreprise au Rwanda.
// Faits externes relevés le 25/10/2026 : tarifs OpenAI, Anthropic, Google,
// Microsoft et DeepSeek ; RURA (T1 2026) ; politique nationale pour l'IA
// (Cabinet, 20/04/2023), Agence nationale pour l'IA (08/06/2026), formation
// des agents publics (12/01/2026), Anthropic et l'État (17/02/2026), Day of AI
// et MINEDUC, AI Scaling Hub, Rwanda Institute of Computing ; loi n° 058/2021
// et NCSA ; Skills Development Fund de la Rwanda TVET Board.
// Devise des devis : euros. Aucun prix de formation. Richard n'est certifié
// par aucun éditeur. Pays sans projet livré : formulation « peut accompagner ».
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise au Rwanda : vos équipes de Kigali et des districts utilisent ChatGPT, Claude et Gemini sur leurs propres documents, en anglais ou en français, avec une règle claire sur les données',
    'title'   => 'Formateur IA en entreprise au Rwanda | Richard SALANON',
    'meta'    => 'Formation IA en entreprise au Rwanda, à Kigali ou en district : ChatGPT, Claude et Gemini sur vos documents, à distance, en anglais ou en français.',
    'en_bref' => 'Au Rwanda, une équipe peut être formée à l\'IA par les programmes publics réservés aux agents de l\'État et aux enseignants, par une université, ou par un formateur indépendant qui travaille sur les documents de l\'entreprise. Richard SALANON forme ainsi les équipes à distance depuis Cotonou, une heure derrière Kigali, en anglais ou en français. Le travail porte sur vos courriers, rapports et tableaux, avec un classement des données selon la loi n° 058/2021. Le prix est fixé sur devis, en euros.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui forme les équipes à l\'IA au Rwanda, et comment choisir ?',
            'paragraphes' => [
                'Une équipe rwandaise a trois portes d\'entrée : les programmes publics, quand elle y a droit, les cursus d\'enseignement supérieur, et les formateurs qui interviennent dans l\'entreprise. Les premiers visent des publics précis, les seconds mènent à des diplômes, les troisièmes travaillent sur le quotidien d\'un service. Pour un dirigeant de PME à Kigali, à Musanze ou à Huye, c\'est cette dernière voie qui correspond le plus souvent au besoin.',
                'Un formateur IA d\'entreprise n\'est ni un ingénieur qui construit des modèles, ni un vendeur de licences. Son travail consiste à prendre une tâche répétée chaque semaine par un employé (répondre à un client, tenir un compte rendu, remplir un tableau de suivi) et à la refaire avec un assistant, sur les vrais documents du service, jusqu\'à ce que la personne sache le refaire seule et contrôler le résultat. La démonstration d\'un outil impressionne le jour même ; une formation se juge un mois plus tard, à ce que l\'équipe fait encore.',
                'Pour choisir, posez cinq questions à n\'importe quel prestataire. Travaille-t-il sur vos documents plutôt que sur des exemples de catalogue ? Vous dit-il quelles données ne doivent jamais quitter l\'entreprise ? Peut-il enseigner en anglais comme en français, selon les participants ? Que laisse-t-il après la session : consignes écrites, modes opératoires, suivi ? Et sait-il vous dire, avant de signer, qu\'une demi-journée suffit si c\'est le cas ? Les réponses valent mieux que n\'importe quelle brochure.',
                'Richard SALANON se place dans cette troisième catégorie. Il intervient à distance, depuis Cotonou, et ne se présente ni comme certifié par un éditeur d\'IA ni comme partenaire de l\'un d\'eux. Ce qu\'il propose se vérifie : les exercices partent de vos fichiers, chaque participant réalise seul sa tâche cible en fin de parcours, et les supports restent la propriété de l\'entreprise.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'IA au Rwanda, et que change la stratégie nationale pour une entreprise ?',
            'paragraphes' => [
                'Le Rwanda dispose d\'une politique nationale pour l\'IA que son Cabinet a approuvée le 20 avril 2023, selon la synthèse du cabinet Access Partnership. Elle fixe six priorités, dont la première concerne les compétences du XXIe siècle et une forte maîtrise de l\'IA, et la dernière des lignes directrices éthiques pratiques. Pour une entreprise, le message est clair : former les personnes qui utiliseront ces outils fait partie de la stratégie du pays.',
                'Le 8 juin 2026, selon KT Press, le Cabinet a approuvé la création d\'une Agence nationale pour l\'IA, chargée d\'accélérer le développement, l\'adoption, l\'investissement et la gouvernance de l\'IA. Le même article cite la ministre de l\'ICT et de l\'Innovation, Paula Ingabire, selon qui 70 % de la politique porte sur les compétences. La structure de l\'agence et son calendrier n\'étaient pas publiés à cette date : une entreprise qui attend des règles précises sur l\'usage de l\'IA doit donc suivre les annonces à venir.',
                'Les initiatives publiques de formation se multiplient, mais elles visent des publics définis. Le 12 janvier 2026, le ministère de l\'ICT a rendu obligatoires des cours d\'IA pour tous les agents publics, de quelques heures par semaine, d\'après l\'agence Ecofin. Fin décembre 2025, selon le ministère de l\'Éducation, un premier cycle de formation a touché plus de 5 000 enseignants dans tous les districts. Ces programmes s\'adressent à ces publics : une entreprise privée qui veut former ses salariés doit prévoir sa propre formation.',
                'Le tissu de recherche et d\'expérimentation est réel. Le Centre pour la quatrième révolution industrielle (C4IR Rwanda) héberge un Rwanda AI Scaling Hub, créé par un protocole d\'accord signé le 4 avril 2025 avec la Fondation Gates, qui s\'est engagée à hauteur de 7,5 millions de dollars au plus sur trois ans, pour la santé, l\'agriculture et l\'éducation. En février 2026, le gouvernement a signé un accord de trois ans avec Anthropic pour former des équipes de développeurs du secteur public. Un cursus supérieur s\'ajoute : le Rwanda Institute of Computing, sous l\'Université du Rwanda, doit proposer des diplômes avancés en IA et en cybersécurité à partir de septembre 2026.',
            ],
        ],
        [
            'type'        => 'chiffres',
            'titre'       => 'Quelles sont les bases connues de l\'équipement numérique rwandais ?',
            'items'       => [
                ['valeur' => '14 001 080', 'libelle' => 'Cartes SIM actives en mars 2026, soit 97,1 pour 100 habitants (rapport du premier trimestre 2026)', 'source' => 'Rwanda Utilities Regulatory Authority (RURA)', 'url' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf'],
                ['valeur' => '74,5', 'libelle' => 'Abonnements internet pour 100 habitants en mars 2026, dont 10 661 122 abonnements mobiles', 'source' => 'Rwanda Utilities Regulatory Authority (RURA)', 'url' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf'],
                ['valeur' => '77 784', 'libelle' => 'Abonnements actifs au haut débit fixe en mars 2026, contre 86 168 un an plus tôt', 'source' => 'Rwanda Utilities Regulatory Authority (RURA)', 'url' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf'],
                ['valeur' => '70 %', 'libelle' => 'Part de la politique nationale pour l\'IA consacrée aux compétences, selon la ministre de l\'ICT (article du 8 juin 2026)', 'source' => 'KT Press', 'url' => 'https://www.ktpress.rw/2026/06/rwandas-ai-ambition-takes-shape-as-cabinet-approves-new-agency/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que signifient ces chiffres pour une formation conçue pour des équipes au Rwanda ?',
            'paragraphes' => [
                'Le téléphone est l\'écran dominant : plus de 10,6 millions d\'abonnements internet mobiles pour moins de 78 000 abonnements fixes. Une formation qui suppose que chacun travaille sur un poste de bureau relié à la fibre ignore donc la majorité des situations. Les exercices doivent pouvoir se faire sur un portable personnel avec une connexion mobile, quitte à réserver l\'analyse de tableaux et la relecture de longs documents à l\'ordinateur de l\'entreprise.',
                'Ces ratios comptent des abonnements, pas des personnes, comme le rappelle le rapport lui-même par sa méthode. Un participant peut posséder deux cartes SIM, et un abonnement ne dit rien de la qualité du réseau dans son bureau de district. Avant la session, un test de connexion sur le lieu réel de travail vaut mieux qu\'une moyenne nationale : il décide si les exercices se font en ligne, ou avec des documents téléchargés la veille.',
                'Un dernier point d\'organisation tient à l\'écosystème : un service qui échange avec une administration ou une école rencontrera des interlocuteurs déjà formés à des notions d\'IA, puisque les agents publics et les enseignants le sont. Parler le même vocabulaire, celui des données, de la vérification et de la responsabilité, facilite ces échanges.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA utiliser dans une équipe au Rwanda, et à quel coût ?',
            'legende' => 'Prix publics relevés le 25 octobre 2026 sur les pages des éditeurs, dans la devise affichée (dollars américains sauf mention contraire), à l\'exclusion des taxes. Ces montants sont ceux des éditeurs : ils ne font pas partie du prix de la formation, et chaque éditeur peut les modifier à tout moment.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Prix de l\'éditeur', 'Point d\'attention au Rwanda'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, reformulation, tableaux à partir de messages en vrac, analyse de fichiers, très large usage en anglais', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle (25 dollars en mensuelle), à partir de 2 utilisateurs', 'Le paiement d\'un abonnement en dollars passe par une carte internationale : à prévoir avant la session'],
                ['Claude (Anthropic)', 'Lecture de longs documents, synthèse avec citations, rédaction nuancée, bonne tenue en français comme en anglais', 'Gratuit ; Pro 20 dollars par mois, ou 17 dollars par mois en abonnement annuel (200 dollars payés d\'avance) ; Team 25 dollars par siège et par mois, 20 dollars en annuel', 'Le gouvernement rwandais a signé un accord avec Anthropic en février 2026 pour ses équipes de développeurs publics : il ne concerne pas les comptes privés'],
                ['Gemini (Google)', 'Questions sur le web, travail dans Gmail et Docs, Google Meet ; pratique pour les équipes déjà sur Google Workspace', 'Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (prix affichés pour la région Bénin) ; Gemini Enterprise Business 21 dollars par siège et par mois', 'Les offres individuelles ne remplacent pas un compte d\'entreprise administré'],
                ['Copilot (Microsoft)', 'Intégré à Word, Excel, Outlook et Teams pour les entreprises déjà abonnées à Microsoft 365', 'Copilot Chat sans surcoût dans les abonnements Microsoft 365 éligibles ; Microsoft 365 Copilot Business 25,20 dollars par utilisateur et par mois en mensuel, 18 dollars en annuel (21 dollars hors promotion, offre valable jusqu\'au 31 décembre 2026, première année)', 'La licence payante suppose un abonnement Microsoft 365 en cours'],
                ['DeepSeek', 'Modèle accessible aussi par interface de programmation, utile aux équipes techniques qui veulent intégrer l\'IA à un logiciel', 'API facturée au million de jetons : de 0,15 à 1,32 dollar en entrée et de 0,6 à 3,96 dollars en sortie selon le modèle et l\'heure (page de l\'éditeur) ; prix de l\'application grand public non relevé', 'À traiter comme tout service en ligne hébergé à l\'étranger : aucun document de client dans un compte personnel'],
                ['NotebookLM (Google)', 'Interroger un lot de documents choisis par l\'utilisateur, avec renvoi aux passages ; utile pour un dossier de projet ou un rapport de bailleur', 'Page d\'accueil de l\'éditeur désormais sous le nom Gemini Notebook, sans tarif lisible : à vérifier dans votre compte Google', 'Ne charger que des documents que l\'entreprise a le droit de transmettre'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels outils fonctionnent avec une connexion limitée ou instable ?',
            'paragraphes' => [
                'Aucun assistant d\'IA n\'a besoin d\'une grande bande passante : une conversation texte pèse peu. Ce qui pèse, c\'est le téléversement de fichiers lourds, l\'écoute de visioconférences et les pages chargées de scripts. Sur un forfait mobile, il vaut mieux préparer ses documents en PDF légers ou en texte brut, les envoyer un par un, et laisser les images de côté tant qu\'elles ne sont pas indispensables à la tâche.',
                'Pour une session à distance, le choix de l\'outil de visioconférence compte autant que celui de l\'assistant. Un participant qui perd le son peut suivre les consignes écrites dans un document partagé, puis rattraper la démonstration sur l\'enregistrement. Les exercices sont conçus pour tenir en séances courtes, avec des étapes qui se reprennent sans repartir de zéro si la connexion tombe.',
                'Les versions gratuites suffisent pour apprendre. Elles imposent des plafonds d\'usage, qui obligent parfois à alterner entre deux assistants dans la journée, ce qui a l\'avantage d\'apprendre une méthode plutôt qu\'un produit. Le choix d\'un abonnement payant arrive après la formation, une fois mesuré ce qui a servi, et en tenant compte du moyen de paiement réellement disponible pour l\'entreprise.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité s\'appliquent avant d\'envoyer un document à un assistant au Rwanda ?',
            'paragraphes' => [
                'Toute équipe qui envoie des données de personnes à un outil d\'IA traite des données personnelles au sens de la loi n° 058/2021, en vigueur depuis le 15 octobre 2021, avec une mise en conformité exigée depuis le 15 octobre 2023 selon Data Protection Africa. L\'autorité de contrôle est la National Cyber Security Authority (NCSA). Il n\'est pas nécessaire d\'être une grande entreprise pour être concerné : un cabinet, une école ou une coopérative qui fait un tableau de ses membres l\'est déjà.',
                'Responsables de traitement et sous-traitants doivent s\'enregistrer auprès de l\'autorité avant de traiter des données personnelles ; selon le cabinet Hogan Lovells, la demande doit indiquer les transferts internationaux prévus et le certificat est délivré en 30 jours au plus. Un assistant d\'IA hébergé à l\'étranger relève de cette logique : l\'envoi d\'un fichier de clients vers un service dont les serveurs sont hors du pays est un transfert, qui suppose un fondement prévu par la loi.',
                'Les enjeux ne sont pas théoriques. Le même cabinet indique que l\'amende administrative maximale est de 1 % du chiffre d\'affaires mondial de l\'exercice précédent, et que les entreprises sans présence locale sont aussi concernées dès qu\'elles traitent des données de personnes situées au Rwanda. Une notification est due dans les 48 heures après la découverte d\'une violation de données. Les informations de santé figurent parmi les données dites sensibles, pour lesquelles les exigences sont plus lourdes.',
                'La politique de 2023 sur l\'IA est un texte d\'orientation et non un code de conduite à respecter ligne à ligne : les obligations qui s\'imposent concrètement à une équipe qui utilise ChatGPT ou Claude sont celles de la loi sur les données. La formation en tire des gestes simples : classer les documents du service en trois groupes (ce qui peut être confié, ce qui doit d\'abord être anonymisé, ce qui ne sort jamais), remplacer noms et numéros avant de soumettre un texte, et utiliser un compte d\'entreprise plutôt que le compte personnel d\'un salarié.',
                'Cette page ne tient pas lieu de conseil juridique. Le registre des traitements, la demande de certificat auprès de la NCSA et le choix des fondements de transfert relèvent de l\'entreprise et de son conseil. Pour approfondir les obligations, la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> prolonge cette session.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels types de données une équipe rwandaise peut-elle confier à un assistant ?',
            'legende' => 'Classement type utilisé pendant la formation, à adapter avec l\'entreprise et son conseil.',
            'entetes' => ['Catégorie', 'Exemples dans une entreprise rwandaise', 'Règle proposée'],
            'lignes'  => [
                ['Peut être confié', 'Texte d\'une offre commerciale publique, modèle de courrier sans nom, brouillon de communication, notes sur une réunion sans donnée nominative', 'Compte d\'entreprise de préférence ; vérification du contenu avant diffusion'],
                ['À anonymiser d\'abord', 'Liste de clients, relevé de cotisations de membres d\'une coopérative, fiche d\'un candidat à un poste, historique de commandes', 'Noms, numéros de téléphone et montants remplacés par des repères ; table de correspondance gardée dans l\'entreprise'],
                ['Ne sort jamais', 'Dossiers de santé de patients, notes d\'élèves identifiables, pièces d\'identité, données de bénéficiaires d\'un projet, contrats confidentiels', 'Aucun envoi à un assistant en ligne sans base légale claire et accord de la direction'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir pour une équipe au Rwanda, et comment s\'organise la distance depuis Cotonou ?',
            'legende' => 'Kigali est à UTC+2 toute l\'année et Cotonou à UTC+1, sans heure d\'été ni d\'un côté ni de l\'autre : le décalage est d\'une heure, Kigali en avance. Les plages d\'ouverture de Richard, de 07 h 00 à 20 h 00 à Cotonou, correspondent à 08 h 00 à 21 h 00 à Kigali. Une séance de 09 h 00 à 11 h 30 à Kigali se tient donc de 08 h 00 à 10 h 30 à Cotonou.',
            'entetes' => ['Format', 'Durée et groupe', 'Quand le choisir', 'Organisation à distance'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée, 12 personnes au plus', 'Une équipe qui n\'a jamais utilisé d\'assistant, ou une direction qui veut voir avant de décider', 'Une seule séance en visioconférence, documents envoyés la veille, langue choisie par le groupe'],
                ['Formation complète', 'Deux jours en quatre demi-journées, 10 personnes au plus par métier', 'Un usage déjà commencé en désordre, ou une tâche volumineuse qui justifie le temps passé', 'Cinq à six séances de 2 h 30 sur deux semaines, 8 participants au plus, plutôt que deux journées entières devant un écran'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant trois mois, pour le groupe déjà formé', 'Étendre l\'usage à d\'autres tâches et ancrer les habitudes', 'Séance de revue en visioconférence, bibliothèque de consignes mise à jour en commun'],
                ['Session bilingue', 'Durée du format retenu, supports en deux langues', 'Équipe mêlant des participants à l\'aise en anglais et d\'autres en français', 'Consignes données en anglais et en français ; chacun choisit la langue de ses propres exercices'],
            ],
            'verdict' => 'Le matériel demandé est simple : un ordinateur par participant si possible, un téléphone en secours, un navigateur à jour et une connexion testée à l\'avance sur le lieu de travail.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Dans quelle langue former : anglais, français ou kinyarwanda ?',
            'paragraphes' => [
                'Le kinyarwanda est la langue nationale du Rwanda ; l\'anglais et le français sont officiels, et le kiswahili l\'est depuis la loi organique n° 02/2017, d\'après la fiche sur la politique linguistique citée en sources. Dans une même entreprise de Kigali, on croise des collègues qui rédigent d\'abord en anglais, d\'autres qui préfèrent le français, et des échanges quotidiens en kinyarwanda. Aucune règle ne dit quelle langue convient : tout dépend des participants.',
                'Richard parle et écrit l\'anglais et le français. La formation peut se donner dans l\'une ou l\'autre, ou dans les deux : consignes et supports dans la langue de la majorité, exercices dans celle du métier. Un service qui rédige ses rapports pour un bailleur anglophone s\'entraîne en anglais ; un cabinet dont la clientèle est francophone, en français.',
                'Les assistants d\'IA lisent et écrivent bien l\'anglais et le français. Pour un texte en kinyarwanda, la qualité est plus inégale et la formation applique une règle : tout résultat dans cette langue est relu par un locuteur avant d\'être utilisé. L\'assistant peut aider à un premier jet ou à une traduction, il ne remplace pas l\'avis d\'une personne qui connaît les usages de politesse, de vocabulaire administratif et de ton propres au pays.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme pour quel métier rwandais : quelle tâche, quel outil, quel résultat ?',
            'items' => [
                ['secteur' => 'Agriculture : coopérative de producteurs', 'probleme' => 'Le comptable de la coopérative rapproche chaque semaine les carnets de pesée, les paiements aux membres et les stocks, et rédige des comptes rendus de visite sur le terrain.', 'solution' => 'Tâche : transformer des notes de pesée et des messages vocaux transcrits en tableau par membre, puis en compte rendu. Outil : ChatGPT ou Claude, avec NotebookLM pour interroger le règlement de la coopérative. Résultat attendu : un tableau que le comptable recalcule sur deux lignes avant de l\'archiver, et un compte rendu où chaque chiffre est retrouvé dans les notes.'],
                ['secteur' => 'Tourisme : lodge, agence de voyage, guide de parc', 'probleme' => 'Les demandes arrivent en anglais, en français et en kinyarwanda, par messagerie et par courriel, avec des questions de dates, de permis de visite et de transport.', 'solution' => 'Tâche : préparer des réponses types en deux langues, des programmes de séjour et des relances d\'acompte. Outil : Claude ou ChatGPT, avec une bibliothèque de consignes qui reprend le ton de la maison. Résultat attendu : une réponse prête en quelques minutes, où le responsable vérifie prix, dates et conditions avant l\'envoi, et jamais un engagement pris par l\'assistant.'],
                ['secteur' => 'Services financiers : coopérative d\'épargne, microfinance', 'probleme' => 'Les agents de crédit rédigent des notes d\'analyse de dossier, des courriers de relance et des états pour la direction à partir de fichiers de membres.', 'solution' => 'Tâche : résumer un dossier de demande de prêt et préparer un courrier de relance après anonymisation. Outil : ChatGPT Business ou Copilot si l\'institution est sur Microsoft 365. Résultat attendu : une note où chaque donnée citée renvoie à la pièce du dossier, et une règle écrite sur ce qui ne quitte jamais la base de l\'institution.'],
                ['secteur' => 'TIC : jeune entreprise de logiciel ou de services numériques', 'probleme' => 'Les équipes rédigent de la documentation, des réponses à des appels d\'offres et des tickets de support, et testent du code.', 'solution' => 'Tâche : rédiger une réponse technique à un appel d\'offres, puis la faire relire par un collègue contre le cahier des charges. Outil : Claude pour la lecture du cahier des charges, ChatGPT pour les variantes, DeepSeek ou une interface de programmation pour les équipes techniques. Résultat attendu : un dossier dont chaque exigence est cochée une à une.'],
                ['secteur' => 'Santé : clinique ou centre de santé privé', 'probleme' => 'L\'administration prépare des convocations, des comptes rendus de réunion et des supports d\'information, sans jamais devoir manipuler de dossier patient dans un assistant.', 'solution' => 'Tâche : rédiger un support d\'information pour les patients en anglais et en français, et un compte rendu de réunion d\'équipe. Outil : Gemini ou ChatGPT sur contenu non nominatif. Résultat attendu : un document relu par un soignant responsable, et une règle affichée : aucune donnée de santé identifiable dans un outil en ligne.'],
                ['secteur' => 'Éducation : école privée ou centre de formation', 'probleme' => 'La direction produit des circulaires, des plans de cours et des rapports pour les parents ou le ministère ; les enseignants préparent des évaluations.', 'solution' => 'Tâche : préparer une circulaire en deux langues et une banque de questions à partir d\'un chapitre fourni. Outil : Gemini, Claude ou ChatGPT, NotebookLM pour interroger un programme. Résultat attendu : des supports corrigés par l\'enseignant, avec les consignes qui ont donné les meilleurs résultats rangées dans un dossier commun.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une formation, de la demande au suivi, pour une équipe au Rwanda ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez le nombre de personnes, leurs postes, les langues de travail et les outils déjà en place. Richard dit si une demi-journée suffit ou si deux jours se justifient.'],
                ['titre' => 'Choix des tâches', 'duree' => 'Avant la session', 'texte' => 'Deux ou trois tâches par groupe, pas davantage, choisies parmi celles qui reviennent chaque semaine et pèsent le plus sur le temps de chacun.'],
                ['titre' => 'Collecte et classement des documents', 'duree' => 'Une à deux semaines avant', 'texte' => 'L\'entreprise envoie des exemples réels. Ils sont triés selon le tableau des trois catégories de données, et ceux qui contiennent des noms ou des numéros sont anonymisés avant la séance.'],
                ['titre' => 'Test de connexion', 'duree' => 'La veille', 'texte' => 'Chaque participant ouvre l\'outil de visioconférence et son compte d\'assistant depuis son lieu de travail, télécharge les documents d\'exercice et signale ce qui bloque.'],
                ['titre' => 'Séances', 'duree' => 'Selon le format', 'texte' => 'Courte démonstration sur un cas du groupe, puis temps de pratique, chacun sur son poste, avec relecture croisée entre collègues pour retrouver dans la source chaque fait avancé par l\'assistant.'],
                ['titre' => 'Évaluation sur la tâche réelle', 'duree' => 'Dernière séance', 'texte' => 'Chaque participant exécute seul sa tâche cible de bout en bout : consigne, résultat, vérification. C\'est le critère de réussite, plutôt qu\'un questionnaire de satisfaction.'],
                ['titre' => 'Suivi', 'duree' => 'Le mois qui suit', 'texte' => 'Un canal direct pour les questions d\'application, puis, si l\'entreprise le souhaite, l\'accompagnement mensuel sur trois mois.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer ou budgéter une formation IA au Rwanda ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est garantie, et la prudence veut qu\'on budgète la formation sur fonds propres, tout en examinant les dispositifs publics. Le plus identifiable est le Skills Development Fund de la Rwanda TVET Board, qui fonctionne par appels à propositions. Les publics visés vont des entreprises aux coopératives, associations, organismes de formation et organisations locales ou internationales.',
                'L\'appel 2024 de ce fonds, dont la date limite était le 10 janvier 2025, comprenait une première fenêtre, « Rapid Response Training », qui devait cofinancer des formations de courte durée pour des salariés d\'entreprises du secteur formel, ou pour de futurs employés d\'un investisseur qui s\'installe. Le taux de cofinancement ne ressort pas de l\'annonce ; les conditions précises figurent dans le guide de l\'appel, qui change à chaque édition.',
                'Pour une entreprise, la démarche consiste à demander à la Rwanda TVET Board si un appel est ouvert et à quelles conditions, puis à préparer un dossier avec un programme détaillé et un devis. Richard peut fournir, sur demande, le programme, les durées de chaque module et le devis. Il n\'affiche ni agrément public ni certification d\'éditeur : le fonds décide si ce profil de prestataire convient.',
                'Pour un budget sans financement, trois lignes suffisent : la formation (devis sur mesure), les abonnements d\'IA que l\'équipe gardera après les mesures de la session, et le temps des participants. Cette dernière ligne est la plus sous-estimée : une demi-journée de formation immobilise un service entier, ce qui plaide pour étaler les séances plutôt que pour les concentrer.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA en entreprise au Rwanda ?',
            'intro'      => 'Le prix est fixé sur devis, en euros, après l\'échange de cadrage, et le devis détaille chaque poste. Richard accepte le virement, la carte bancaire et PayPal. Les abonnements aux assistants restent au nom de l\'entreprise et ne sont pas compris dans le prix de la formation.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en euros', 'inclus' => ['Une demi-journée en visioconférence', 'Premiers gestes sur deux tâches', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en euros', 'inclus' => ['Quatre demi-journées réparties en séances courtes', 'Exercices sur vos documents', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche réelle et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en euros', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Corrections et nouvelles tâches', 'Bilan écrit']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, ainsi que le métier de chaque groupe.',
                'La durée : atelier d\'une demi-journée, deux jours ou accompagnement mensuel.',
                'La distance : la formation se fait à distance, ce qui évite les frais de déplacement, mais demande davantage de séances courtes.',
                'Le temps de préparation sur les documents du client et leur anonymisation.',
                'Le nombre de langues des supports : anglais, français ou les deux.',
                'Le suivi après la session.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les équipes qui démarrent l\'IA au Rwanda ?',
            'intro' => 'Ces écarts reviennent dans les entreprises qui débutent ; chacun se prévient dès la première séance.',
            'items' => [
                ['titre' => 'Se fier à la moyenne nationale de connexion', 'texte' => 'Avec 97,1 cartes SIM pour 100 habitants, on croit tout le monde joignable. Un bureau de district peut pourtant cumuler réseau mobile lent et coupures. On teste la connexion sur place, avec les documents réels, avant la session.'],
                ['titre' => 'Envoyer des listes de clients sans les anonymiser', 'texte' => 'La loi n° 058/2021 vise aussi les traitements faits à l\'étranger. Un fichier de membres, collé tel quel dans un assistant hébergé hors du pays, expose l\'entreprise ; on remplace noms et numéros d\'abord.'],
                ['titre' => 'Attendre une règle nationale pour commencer', 'texte' => 'L\'Agence nationale pour l\'IA a été approuvée en juin 2026 et sa structure n\'était pas publiée à cette date. L\'entreprise n\'a pas à attendre : elle peut déjà écrire ce qu\'elle autorise, avec quelles données et sous la responsabilité de qui.'],
                ['titre' => 'Traduire sans relire', 'texte' => 'Un texte en kinyarwanda produit par un assistant paraît soigné et peut contenir des tournures maladroites ou un ton inadapté. Un locuteur relit tout ce qui sort de l\'entreprise.'],
                ['titre' => 'Croire une référence parce qu\'elle est précise', 'texte' => 'Un assistant peut citer une loi, un décret ou une étude qui n\'existent pas. Toute référence se retrouve dans le texte officiel avant d\'être reprise dans un courrier à une administration ou à un bailleur.'],
                ['titre' => 'Multiplier les abonnements en dollars', 'texte' => 'Trois outils payés par trois personnes avec trois cartes bancaires donnent un suivi impossible. L\'entreprise choisit un outil principal après la formation, sur la base de ce qui a servi.'],
                ['titre' => 'Confondre formation de l\'État et formation de l\'entreprise', 'texte' => 'Les cours obligatoires pour les agents publics donnent des notions générales. Ils ne montrent pas comment traiter le courrier, le tableau ou le rapport d\'un service précis : cette pratique se construit sur les documents de l\'entreprise.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes rwandaises à l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer, et il intègre l\'IA dans des logiciels pour ses clients. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Richard peut accompagner à distance les entreprises rwandaises, en anglais comme en français, avec une heure de décalage seulement. Ses réalisations incluent des intégrations de paiement par mobile money, un usage connu au Rwanda ; elles sont visibles sur <a href="/realisations/">la page des réalisations</a>. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun.',
                'Sa façon de former se résume en engagements vérifiables : une réponse sous 24 heures, un cadrage qui peut conclure qu\'une formation plus courte suffit, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise, aucun chiffre de gain promis à l\'avance. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe rwandaise à l\'usage quotidien de l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, leur langue de travail, les tâches qui leur prennent le plus de temps et les outils déjà en place : vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Rwanda ?", 'r' => "Les trois appellations se côtoient sur le marché, et aucune ne fait l’objet d’un diplôme ou d’un agrément officiel. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Rwanda : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Rwanda ?", 'r' => "Choisissez d’abord un usage précis et un responsable, avant tout abonnement : une tâche qui revient chaque semaine, un jeu de documents d’exercice et une règle claire sur les données confidentielles. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Rwanda, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former les équipes d\'une entreprise à l\'IA au Rwanda ?', 'r' => 'Les programmes publics visent les agents de l\'État et les enseignants. Une entreprise privée peut s\'adresser à un organisme de formation, à une université pour un cursus long, ou à un formateur indépendant qui intervient sur ses documents. Richard SALANON propose ce dernier format, à distance depuis Cotonou, en anglais ou en français.'],
        ['q' => 'La formation peut-elle se faire à Kigali, ou seulement à distance ?', 'r' => 'Pour le Rwanda, la formation se fait à distance, en visioconférence, avec des séances courtes de 2 h 30 plutôt que des journées entières. Elle s\'organise autour du décalage d\'une heure : Kigali est à UTC+2 et Cotonou à UTC+1. Une séance de 09 h 00 à 11 h 30 à Kigali se tient de 08 h 00 à 10 h 30 à Cotonou.'],
        ['q' => 'La formation se donne-t-elle en anglais ou en français ?', 'r' => 'Dans l\'une ou l\'autre langue, voire dans les deux. Les consignes et les supports suivent la langue de la majorité du groupe, et chacun fait ses exercices dans celle de son métier. Les textes produits en kinyarwanda par un assistant sont relus par un locuteur avant tout usage.'],
        ['q' => 'Que prévoit la stratégie nationale rwandaise pour l\'IA, et cela m\'oblige-t-il à quelque chose ?', 'r' => 'La politique nationale a été approuvée par le Cabinet le 20 avril 2023 et fixe six priorités, dont les compétences et des lignes directrices éthiques. C\'est un texte d\'orientation : les obligations qui s\'imposent à une équipe qui envoie des documents à un assistant sont celles de la loi n° 058/2021 sur les données personnelles.'],
        ['q' => 'Une Agence nationale pour l\'IA existe-t-elle au Rwanda ?', 'r' => 'Le Cabinet en a approuvé la création le 8 juin 2026, selon KT Press, pour accélérer le développement, l\'adoption, l\'investissement et la gouvernance de l\'IA. Sa structure et son calendrier n\'étaient pas publiés à cette date. Vérifiez les annonces officielles avant de présumer d\'une règle précise.'],
        ['q' => 'Puis-je envoyer la liste de mes clients à ChatGPT ou à Claude ?', 'r' => 'Pas telle quelle. La loi n° 058/2021 encadre le traitement de données personnelles et leur transfert hors du Rwanda, avec une autorité de contrôle, la NCSA. On remplace d\'abord noms et numéros par des repères, ou on s\'abstient si les données sont sensibles. La formation apprend ce classement.'],
        ['q' => 'Faut-il s\'enregistrer auprès de la NCSA avant d\'utiliser un outil d\'IA ?', 'r' => 'La loi prévoit que les responsables de traitement et les sous-traitants s\'enregistrent auprès de l\'autorité avant de traiter des données personnelles ; la demande doit mentionner les transferts internationaux prévus. Cette démarche est celle de l\'entreprise, avec son conseil. Richard peut aider à lister les traitements, il ne la remplace pas.'],
        ['q' => 'Existe-t-il un financement pour former mon équipe ?', 'r' => 'Le Skills Development Fund de la Rwanda TVET Board cofinançait, dans son appel 2024 clos le 10 janvier 2025, des formations courtes pour des salariés du secteur formel. Rien ne garantit un nouvel appel ni votre éligibilité : interrogez la Rwanda TVET Board par écrit, avec programme et devis.'],
        ['q' => 'Quels abonnements dois-je acheter pour commencer ?', 'r' => 'Aucun. Les versions gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre la méthode. Les abonnements se décident après la formation, sur ce qui a servi, en tenant compte du paiement en dollars ou en euros par carte internationale, que les éditeurs demandent le plus souvent.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, en euros, après le cadrage. Il dépend du nombre de participants, de la durée, de la préparation sur vos documents, du nombre de langues et du suivi retenu. Le règlement se fait par virement, carte bancaire ou PayPal.'],
        ['q' => 'La formation fonctionne-t-elle avec une connexion mobile ?', 'r' => 'Oui, avec des précautions : documents légers téléchargés la veille, consignes préparées hors ligne, test de connexion sur le lieu réel de travail. Au Rwanda, les abonnements internet mobiles dépassent 10,6 millions en mars 2026 contre 77 784 abonnements fixes, selon la RURA ; les exercices sont donc pensés pour le téléphone et l\'ordinateur.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, une attestation nominative de fin de formation avec le programme, les supports et les feuilles de présence. Ce n\'est ni un diplôme ni une certification d\'éditeur : Richard n\'est certifié par aucun éditeur d\'IA.'],
    ],

    'sources' => [
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus, Pro et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI (prix affichés pour la région Bénin)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, tarifs de l\'interface de programmation', 'url' => 'https://api-docs.deepseek.com/quick_start/pricing/', 'date' => '2026-10-25'],
        ['titre' => 'Google, Gemini Notebook (anciennement NotebookLM), page d\'accueil', 'url' => 'https://notebook.google/', 'date' => '2026-10-25'],
        ['titre' => 'RURA, rapport statistique du secteur des TIC, premier trimestre 2026', 'url' => 'https://www.rura.rw/fileadmin/user_upload/RURA/Documents/Sectors/ICT/Statistics/Quarterly_publication/ICT_Sector_Statistics_Report_as_of_the_First_Quarter_2026.pdf', 'date' => '2026-10-25'],
        ['titre' => 'Access Partnership, le gouvernement rwandais approuve la politique nationale pour l\'IA (20 avril 2023)', 'url' => 'https://accesspartnership.com/access-alert-rwandan-government-approves-national-ai-policy', 'date' => '2026-10-25'],
        ['titre' => 'KT Press, le Cabinet approuve une Agence nationale pour l\'IA (8 juin 2026)', 'url' => 'https://www.ktpress.rw/2026/06/rwandas-ai-ambition-takes-shape-as-cabinet-approves-new-agency/', 'date' => '2026-10-25'],
        ['titre' => 'KT Press, l\'Université du Rwanda lance un programme en IA (24 juillet 2026)', 'url' => 'https://www.ktpress.rw/2026/07/university-of-rwanda-launches-ai-degree-program/', 'date' => '2026-10-25'],
        ['titre' => 'Ecofin Agency, formation obligatoire à l\'IA pour tous les agents publics (13 janvier 2026)', 'url' => 'https://www.ecofinagency.com/news-digital/1301-51886-rwanda-rolls-out-mandatory-ai-training-for-all-civil-servants', 'date' => '2026-10-25'],
        ['titre' => 'Ecofin Agency, accord de trois ans entre le Rwanda et Anthropic (19 février 2026)', 'url' => 'https://www.ecofinagency.com/news-digital/1902-53077-rwanda-signs-three-year-ai-partnership-with-anthropic-to-train-public-sector-developers', 'date' => '2026-10-25'],
        ['titre' => 'Ministère de l\'Éducation du Rwanda, formation nationale à l\'IA de plus de 5 000 enseignants', 'url' => 'https://mineduc.gov.rw/news-detail/in-rwanda-first-round-of-national-day-of-ai-training-reaches-5000-teachers', 'date' => '2026-10-25'],
        ['titre' => 'PC Tech Magazine, le Rwanda et la Fondation Gates créent un AI Scaling Hub (avril 2025)', 'url' => 'https://pctechmag.com/2025/04/rwanda-and-gates-foundation-partner-to-launch-ai-scaling-hub/', 'date' => '2026-10-25'],
        ['titre' => 'Data Protection Africa, fiche sur la loi rwandaise n° 058/2021', 'url' => 'https://dataprotection.africa/rwanda/', 'date' => '2026-10-25'],
        ['titre' => 'Hogan Lovells, principales caractéristiques de la loi rwandaise sur la protection des données', 'url' => 'https://hlc.com/en/publications/key-features-of-the-new-rwandan-data-protection-law', 'date' => '2026-10-25'],
        ['titre' => 'Rwanda TVET Board, appel à propositions 2024 du Skills Development Fund', 'url' => 'https://www.rtb.gov.rw/fileadmin/user_upload/RTB/Announcements/ANNOUNCEMENT-_SDF_2024_.pdf', 'date' => '2026-10-25'],
        ['titre' => 'IANA, base des fuseaux horaires (Africa/Kigali)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-25'],
        ['titre' => 'Wikipédia, politique linguistique du Rwanda', 'url' => 'https://en.wikipedia.org/wiki/Language_policy_in_Rwanda', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
