<?php
// ============================================================
// data/formations/ia-en-entreprise/guinee.php · Page « Formation IA en entreprise en Guinée ».
// Faits externes relevés le 26/10/2026 : DataReportal (Digital 2026), Ecofin (chiffres ARPT de juin 2025),
// Osiris (feuille de route IA 2026-2035, évaluation AILA, programme AI Xcelerate), Data Protection Africa
// (loi L/2016/037/AN), Guinéenews (ONFPP, Simandou), Ecofin (Coris Money), pages des éditeurs (fonctions
// et données, sans aucun montant), politique de DeepSeek, aide de Google (NotebookLM).
// Aucun projet de portfolio/data/projets-clients.php n'est situé en Guinée.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise en Guinée : vos équipes de Conakry, Kankan ou Kindia utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données',
    'title'   => 'Formation IA en entreprise en Guinée | Richard SALANON',
    'meta'    => 'Formation IA en entreprise en Guinée : ChatGPT, Claude et Gemini sur vos documents, à distance depuis Cotonou, avec une règle claire sur les données.',
    'en_bref' => 'Richard SALANON, formateur IA basé à Cotonou, forme à distance les équipes des entreprises guinéennes à rédiger, résumer et analyser leurs propres documents avec ChatGPT, Claude ou Gemini, en vérifiant chaque résultat. Les formats vont de l\'atelier d\'une demi-journée à la formation de deux jours, avec un accompagnement mensuel possible. Conakry a une heure de retard sur Cotonou, les séances se tiennent en français, et les devis sont établis sur demande en euros, la Guinée étant hors zone franc. Le prix se fixe sur devis, après un échange de cadrage.',
    'publie'  => '2026-12-01',
    'maj'     => '2026-12-01',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l\'IA en Guinée, et comment choisir ?',
            'paragraphes' => [
                'Richard SALANON, depuis Cotonou, forme à distance les équipes des entreprises guinéennes à l\'usage quotidien des assistants d\'IA. Un formateur IA d\'entreprise ne vend pas un outil : il apprend à des salariés à confier à un assistant une partie de leurs écrits, de leurs synthèses et de leurs tableaux, puis à contrôler ce qu\'il rend. La Guinée a ses contraintes propres : un réseau inégal selon les quartiers et un coût des données qui pèse sur l\'usage.',
                'Pour choisir, posez quatre questions à n\'importe quel prestataire. Travaille-t-il sur vos documents ou sur des exemples de démonstration ? Que reste-t-il à chaque participant le lundi suivant ? Que dit-il des données qu\'on ne doit pas envoyer à un outil en ligne ? Que propose-t-il si la connexion coupe en pleine séance ? Une démonstration impressionne pendant une heure ; une formation qui change le travail se reconnaît à la tâche que chacun sait refaire seul, sans le formateur.',
                'Cette page répond d\'abord au dirigeant ou au responsable d\'équipe de Guinée qui cherche un formateur, un consultant ou un expert pour mettre ses collaborateurs à niveau. Les deux premiers mots à distinguer : le formateur apprend des gestes à l\'équipe, le consultant conseille la direction sur les usages, l\'expert ou le spécialiste construit des systèmes. Richard SALANON intervient surtout comme formateur, et il oriente vers la mission de conseil ou de développement quand le besoin la justifie.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'IA en Guinée, et que prévoit la politique publique ?',
            'paragraphes' => [
                'Selon DataReportal (Digital 2026), la Guinée comptait 4,02 millions d\'internautes fin 2025, soit 26,5 % de sa population, et 12,8 millions de connexions mobiles cellulaires fin 2025. Le même rapport précise que ces connexions comptent des cartes SIM et non des personnes : certaines ne servent qu\'aux appels. Pour une entreprise, le constat est simple : l\'accès à internet est loin d\'être généralisé, et la formation part des postes et des connexions que l\'équipe a réellement.',
                'Côté réseau, l\'Autorité de régulation des postes et télécommunications relevait 12,8 millions d\'abonnés mobiles et 8,3 millions d\'abonnements internet fin juin 2025, selon Ecofin, qui rapporte aussi qu\'environ 6 % des quartiers et districts manquaient d\'une couverture mobile satisfaisante au deuxième trimestre 2025. Le même article indique, d\'après l\'UIT, qu\'un forfait de 5 Go coûtait en 2025 5,16 % du revenu national brut mensuel par habitant, au-dessus de la cible de 2 % fixée par l\'Union. Une séance en ligne a un coût en données : la formation en tient compte.',
                'Sur le plan public, le ministère chargé des technologies de l\'information a annoncé le 20 décembre 2025 la validation d\'une feuille de route nationale sur l\'IA pour 2026-2035, élaborée avec le PNUD à partir de son diagnostic AILA. Selon Osiris, qui relaie l\'annonce, elle suit trois phases : poser les bases institutionnelles, réglementaires et techniques, intégrer progressivement l\'IA dans les services publics, puis viser un rôle de référence régionale. L\'atelier national d\'évaluation, clos le 17 octobre 2025, avait recommandé une stratégie éthique, un cadre juridique clair et le développement des compétences locales.',
                'Pour les entreprises, un programme nommé AI Xcelerate a été lancé à Conakry le 8 avril 2026, d\'après Osiris. Piloté par la Confédération générale des entreprises de Guinée avec l\'Organisation internationale des employeurs et Microsoft, il cible plus de 250 entreprises, avec une attention aux PME, pour accélérer l\'adoption de l\'IA. La durée du programme n\'est pas précisée dans l\'annonce : renseignez-vous auprès de la confédération patronale avant de compter dessus. La formation de Richard est indépendante de ce programme.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA utiliser en Guinée, et à quel coût ?',
            'legende' => 'Fonctions relevées le 26 octobre 2026 sur les pages officielles des éditeurs. Aucun montant n\'est repris ici : les formules, les limites d\'usage et les devises changent souvent, et elles varient selon le pays ; la page de chaque éditeur fait foi. Ces coûts ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Si la connexion est limitée', 'Coût : page de l\'éditeur'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédiger, reformuler, résumer, analyser un fichier. La page de tarifs mentionne une offre gratuite et une offre Business qui indique « pas d\'entraînement sur vos données par défaut ».', 'Préparer la demande hors ligne, la coller en une fois, garder les réponses dans un document local.', '<a href="https://learn.chatgpt.com/docs/pricing">Tarifs ChatGPT</a>'],
                ['Claude (Anthropic)', 'Lire de longs documents et rédiger en français. La page indique une version gratuite ; pour l\'offre Team, aucun entraînement sur le contenu par défaut, alors que les offres Free, Pro et Max proposent un refus à activer.', 'Même méthode : demande préparée, fichier prêt, réponse enregistrée aussitôt.', '<a href="https://claude.com/pricing">Tarifs Claude</a>'],
                ['Gemini (Google)', 'Travailler dans l\'écosystème Google (Gmail, Docs). La page présente une offre gratuite, des abonnements personnels et des éditions pour les entreprises.', 'Utile quand l\'équipe est déjà sur un compte Google ; les fichiers du Drive évitent les envois répétés.', '<a href="https://gemini.google/subscriptions/">Abonnements Gemini</a>'],
                ['Copilot (Microsoft)', 'S\'appuyer sur les outils Microsoft 365. Copilot Chat est inclus sans surcoût avec les abonnements éligibles ; la protection des données d\'entreprise garde les échanges dans le service Microsoft 365 et exclut leur usage pour entraîner les modèles.', 'Intéressant pour une entreprise déjà abonnée à Microsoft 365 ; sinon, l\'accès passe par la licence existante.', '<a href="https://www.microsoft.com/en-us/microsoft-365-copilot/pricing">Tarifs Microsoft 365 Copilot</a>'],
                ['DeepSeek', 'Répondre à des questions et rédiger. Sa politique indique que les données sont traitées et stockées en Chine, qu\'elles servent à entraîner les modèles, avec un refus possible.', 'À réserver à des textes publics ; aucun document client, aucune donnée de salarié.', '<a href="https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html">Politique de confidentialité DeepSeek</a>'],
                ['NotebookLM (Google)', 'Interroger un corpus de documents fournis, avec citations en ligne. L\'aide de Google indique que les données ne servent pas à l\'entraînement sauf retour envoyé, et que les contenus Workspace ne sont pas relus par des humains.', 'Le téléversement des sources demande de la bande passante : charger les fichiers en dehors des heures de pointe.', '<a href="https://support.google.com/notebooklm/answer/16164461">Aide NotebookLM</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer un abonnement pour commencer, et comment le budget se décide-t-il ?',
            'paragraphes' => [
                'Non : les versions gratuites suffisent pour apprendre à formuler une demande, fournir un document et vérifier la réponse. Elles ont des limites d\'usage que chaque éditeur précise sur sa page. Le choix d\'un abonnement payant se prend après la formation, quand l\'équipe sait lequel lui sert, et il reste au nom de l\'entreprise, jamais sur la carte personnelle d\'un salarié.',
                'Dans un pays où un forfait de données pèse sur le budget d\'un ménage, le coût réel d\'un outil d\'IA comprend aussi la connexion qui le fait tourner. Le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> aide à situer chaque outil avant de choisir.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données s\'appliquent avant d\'envoyer un document à un outil d\'IA ?',
            'paragraphes' => [
                'La loi L/2016/037/AN, adoptée en 2016, couvre la cybersécurité et la protection des données personnelles. Selon la fiche de Data Protection Africa, tout traitement de données personnelles exige une déclaration préalable à l\'autorité compétente et ne peut démarrer qu\'après réception d\'un récépissé ; le consentement exprès de la personne concernée légitime le traitement, sous réserve de dérogations. Envoyer à un assistant en ligne la liste de vos clients ou les fiches de vos salariés peut relever de ce traitement de données personnelles.',
                'Le transfert vers un pays hors de la CEDEAO n\'est permis, toujours selon cette fiche, que si le pays destinataire assure un niveau de protection supérieur ou équivalent, avec une autorisation préalable de l\'autorité. Rien n\'indique que les serveurs des assistants cités plus haut se trouvent dans la zone : le geste de coller un fichier nominatif n\'est donc jamais neutre. Reste une difficulté : la même fiche présente l\'autorité tantôt comme désignée, tantôt comme non encore établie, et sa mise à jour date de mai 2022. À vérifier auprès d\'un conseil juridique guinéen avant tout traitement de grande ampleur.',
                'La formation en tire une règle de travail simple, qui ne dépend pas de l\'état de l\'autorité. Chaque document de l\'équipe est classé en trois catégories : ce qui peut être confié à un assistant, ce qui doit d\'abord être anonymisé (noms, numéros de téléphone, montants identifiants remplacés), et ce qui ne quitte jamais l\'entreprise. Le cadre réglementaire de l\'IA fait partie des chantiers de la feuille de route nationale : l\'entreprise qui écrit sa règle aujourd\'hui n\'aura pas à tout reprendre demain.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats pour quelles équipes, à distance depuis Cotonou ?',
            'legende' => 'Tout se fait à distance, en visioconférence et en français. Conakry applique UTC+0 sans changement d\'heure : 9 h à Conakry correspond à 10 h à Cotonou. Les formats se combinent.',
            'entetes' => ['Format', 'Groupe', 'À qui il convient', 'Organisation à distance'],
            'lignes'  => [
                ['Atelier découverte, une demi-journée', '12 personnes au plus', 'Une direction ou une équipe qui n\'a jamais utilisé d\'assistant et veut voir avant d\'investir', 'Une seule séance ; documents d\'exercice envoyés à l\'avance, à télécharger avant le début'],
                ['Formation complète, deux jours', '10 personnes au plus', 'Une équipe qui utilise déjà ChatGPT ou Gemini sans méthode, ou une tâche répétitive qui justifie l\'effort', 'Séances en visioconférence, avec partage d\'écran et pratique sur les comptes de l\'entreprise'],
                ['Séance à distance pour des équipes dispersées', '8 personnes au plus', 'Un siège à Conakry et des agences à Kankan, Nzérékoré ou Boké', 'Chaque participant se connecte depuis son poste ; solution de repli prévue en cas de coupure'],
                ['Accompagnement mensuel', 'Le groupe déjà formé', 'Les équipes qui veulent étendre l\'usage à d\'autres tâches', 'Un point par mois, plus un canal direct après la session pour les questions d\'application'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que faut-il prévoir côté matériel, connexion et langue ?',
            'intro' => 'La Guinée impose trois précautions que beaucoup d\'organisateurs découvrent le jour de la séance.',
            'items' => [
                ['titre' => 'Un questionnaire avant la séance', 'texte' => 'Chaque participant répond à quelques questions : poste utilisé, outils déjà ouverts, tâches qui lui coûtent le plus de temps. Les réponses servent à composer les groupes et à choisir les exercices.'],
                ['titre' => 'Des documents téléchargés à l\'avance', 'texte' => 'Les supports de séance et les fichiers d\'exercice sont envoyés avant le début. Avec un réseau mobile qui varie selon les quartiers, mieux vaut ne pas dépendre d\'un téléchargement en direct.'],
                ['titre' => 'Une solution de repli', 'texte' => 'Si la connexion d\'un participant tombe, la séance continue pour les autres, et il reprend avec les supports déjà reçus. Le partage d\'écran et le son suffisent : la séance ne repose pas sur la qualité de la vidéo.'],
                ['titre' => 'Le français comme langue de travail', 'texte' => 'Les supports et les séances sont en français. Pour un texte en soussou, en malinké ou en pular, un locuteur doit relire le résultat avant tout usage.'],
                ['titre' => 'Un poste de travail', 'texte' => 'Un ordinateur par participant, un navigateur récent, un traitement de texte et un tableur. Le téléphone aide pour certains exercices, mais pas pour relire un long rapport.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme pour quel métier en Guinée ?',
            'items' => [
                ['secteur' => 'Fournisseurs et sous-traitants des sites miniers', 'probleme' => 'Les premiers chargements de minerai de fer de Simandou ont commencé en octobre 2025, selon Guinéenews, avec un acheminement par rail vers le port. Les fournisseurs doivent répondre à des appels d\'offres, des devis et des rapports volumineux, souvent en français et en anglais.', 'solution' => 'Tâche : préparer une réponse à un appel d\'offres. Outil : Claude ou ChatGPT sur un cahier des charges anonymisé. Résultat attendu : un plan de réponse et un résumé des exigences, avec le numéro de page de chaque exigence, relus avant envoi.'],
                ['secteur' => 'Transit, transport et logistique', 'probleme' => 'Un transitaire échange des documents par photo et des messages WhatsApp avec ses clients, ses chauffeurs et les services du port. Les informations se perdent dans les fils de discussion.', 'solution' => 'Tâche : transformer des messages en tableau de suivi des dossiers. Outil : ChatGPT ou Gemini. Résultat attendu : un tableau exploitable par dossier et des messages de réponse aux clients, dont chaque date et chaque numéro sont recontrôlés dans la source.'],
                ['secteur' => 'Commerce et PME qui vendent par mobile money', 'probleme' => 'Les commandes arrivent en vrac, les captures de paiement s\'accumulent et les relances se font de mémoire. Les services financiers mobiles comptaient 3,2 millions d\'abonnés fin juin 2025, selon Ecofin, dont 92 % chez Orange.', 'solution' => 'Tâche : classer les commandes et rédiger les relances. Outil : Gemini ou ChatGPT. Résultat attendu : un tableau de commandes propre et des messages de relance polis mais fermes, relus avant envoi, sans coller de numéro de client en clair.'],
                ['secteur' => 'Banques, microfinance et assurance', 'probleme' => 'Les agents rédigent des courriers normés, des comptes rendus de comité et des notes de synthèse, avec des données de clients très sensibles.', 'solution' => 'Tâche : produire le premier jet d\'une note à partir d\'un modèle validé. Outil : Copilot si la banque est déjà sur Microsoft 365. Résultat attendu : une note complète, dont le contenu financier est contrôlé par un responsable, sans donnée nominative envoyée à un outil non validé.'],
                ['secteur' => 'ONG, projets de développement et organisations patronales', 'probleme' => 'Les rapports aux bailleurs et les comptes rendus d\'atelier occupent des journées. Les listes de bénéficiaires contiennent des données personnelles.', 'solution' => 'Tâche : rédiger un rapport d\'activité à partir de notes. Outil : NotebookLM sur des sources publiques ou anonymisées, avec citations en ligne. Résultat attendu : un rapport dont chaque chiffre renvoie à sa source, et une règle écrite : aucun nom de bénéficiaire dans un outil en ligne.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA en Guinée ?',
            'paragraphes' => [
                'L\'Office national de formation et de perfectionnement professionnels, l\'ONFPP, a validé à Conakry le 25 mars 2026 le manuel de la Facilité de développement des compétences, selon Guinéenews. Le dispositif doit durer trois ans, avec une extension possible de deux ans, une phase pilote à Conakry, Kindia et Mamou et 800 bénéficiaires visés. Il cible les entreprises de moins de 30 salariés, les demandeurs d\'emploi et les jeunes apprentis, avec Enabel et l\'Union européenne.',
                'L\'article ne détaille aucun critère d\'accès : il est impossible d\'affirmer qu\'une formation d\'IA y serait prise en charge. Contactez l\'ONFPP, programme et devis en main, avant de budgéter. Richard SALANON n\'est agréé par aucun fonds, et aucune prise en charge n\'est promise. Le plus prudent est de prévoir le budget sur la trésorerie de l\'entreprise, quitte à le compléter si un financement est ensuite confirmé par écrit.',
                'Autre piste : le programme AI Xcelerate, piloté par la confédération patronale CGE-GUI, s\'adresse à des entreprises qui veulent passer à l\'usage de l\'IA. Une entreprise membre peut s\'y renseigner. Il s\'agit d\'un accompagnement distinct, qui ne remplace pas la formation sur vos documents.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA pour une équipe guinéenne ?',
            'intro'      => 'Aucune somme n\'est affichée ici : le prix se fixe sur devis, en euros, après un échange de cadrage. La Guinée n\'étant pas dans la zone franc, un devis en euros évite de lier le prix au franc CFA ou au franc guinéen. Le règlement se discute au devis parmi les moyens que Richard accepte, dont le virement. Les abonnements aux outils d\'IA restent au nom de l\'entreprise et ne sont pas compris.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en euros', 'inclus' => ['Une demi-journée en visioconférence', 'Exercices sur vos documents', 'Attestation nominative']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en euros', 'inclus' => ['Deux jours en visioconférence', 'Exercices construits sur vos documents', 'Supports de séance remis à chacun', 'Épreuve finale chronomètre en main', 'Canal direct après la session']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en euros', 'inclus' => ['Un point par mois', 'Ajout de nouvelles tâches', 'Réponses aux questions d\'application']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, parmi 12, 10 ou 8 personnes par session selon le format.',
                'La durée : atelier d\'une demi-journée, formation de deux jours ou accompagnement mensuel.',
                'Le travail de préparation sur vos documents, leur anonymisation et le questionnaire d\'avant séance.',
                'Le fait d\'être à distance : aucun frais de déplacement, mais des séances à organiser autour des horaires de Conakry et de Cotonou.',
                'Le nombre d\'entretiens de cadrage, un ou deux selon la complexité du besoin.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font les équipes guinéennes qui démarrent l\'IA ?',
            'intro' => 'Ces écarts reviennent quand l\'outil arrive avant la règle. Chacun se prévient dès la première séance.',
            'items' => [
                ['titre' => 'Prendre le chiffre des SIM pour celui des usagers', 'texte' => 'Avec 12,8 millions de connexions mobiles mais 4,02 millions d\'internautes, selon DataReportal, dimensionner un projet sur le nombre de cartes SIM mène à surestimer les personnes réellement en ligne. Formez les collaborateurs qui ont un accès régulier, pas toute l\'entreprise d\'un coup.'],
                ['titre' => 'Envoyer un fichier de clients au premier outil ouvert', 'texte' => 'Sous la pression d\'un délai, on colle une liste nominative dans un assistant gratuit. La loi de 2016 prévoit déclaration et autorisation de transfert : classez le document avant de l\'envoyer.'],
                ['titre' => 'Confondre outil gratuit et outil confidentiel', 'texte' => 'La politique de DeepSeek indique un stockage en Chine et un usage pour l\'entraînement des modèles, avec un refus possible. Gratuit n\'est pas synonyme de privé : le choix de l\'outil suit la sensibilité du document.'],
                ['titre' => 'Compter sur une connexion parfaite', 'texte' => 'Environ 6 % des quartiers manquaient de couverture satisfaisante au deuxième trimestre 2025 selon l\'ARPT. Une séance sans documents préchargés échoue au premier ralentissement.'],
                ['titre' => 'Croire une réponse parce qu\'elle est précise', 'texte' => 'Un assistant peut citer un article de loi, un taux ou une date inexistants avec aplomb. Toute référence se retrouve dans sa source ou disparaît du texte.'],
                ['titre' => 'Attendre le cadre national pour fixer sa règle', 'texte' => 'La feuille de route 2026-2035 pose les bases d\'un cadre réglementaire ; elle n\'exonère pas l\'entreprise d\'écrire dès maintenant ce qui peut être envoyé à un outil d\'IA, et par qui.'],
                ['titre' => 'Laisser chacun payer son abonnement', 'texte' => 'Trois abonnements sur trois cartes personnelles, sans règle commune, coûtent plus cher et se contrôlent mal. L\'entreprise désigne un outil principal après la formation.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard compte ' . $ans . ' ans d\'expérience, s\'est formé à ' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Richard peut accompagner à distance les entreprises de Guinée : même langue de travail, une heure d\'écart, des échanges par WhatsApp et par visioconférence.',
                'Sa façon de former tient en peu d\'engagements : un ou deux entretiens de cadrage, un questionnaire avant la séance, des exercices sur les documents de l\'entreprise, des supports de séance remis à chacun, une épreuve finale chronomètre en main, une attestation nominative, puis un canal direct après la session. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun.',
                'Ses réalisations sont présentées sur la page <a href="/realisations/">réalisations</a>, son parcours sur la page <a href="/richard-salanon">Richard SALANON</a> et les pays servis sur la page des <a href="/zones/">zones d\'intervention</a>. Pour les autres formations, voir le <a href="/formations/">catalogue</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe guinéenne à l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps et les outils déjà en place : une réponse vous parvient sous 24 heures, puis un devis en euros suit l\'échange de cadrage.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Un formateur IA peut-il former une équipe guinéenne entièrement à distance ?', 'r' => 'Oui. Richard SALANON anime les séances en visioconférence depuis Cotonou, en français, avec partage d\'écran et documents envoyés à l\'avance. Une solution de repli est prévue en cas de coupure de connexion.'],
        ['q' => 'Quel est le décalage horaire entre Conakry et Cotonou ?', 'r' => 'Une heure. Conakry reste en UTC+0 toute l\'année et Cotonou en UTC+1 : une séance fixée à 10 h à Cotonou se tient à 9 h à Conakry.'],
        ['q' => 'En quelle monnaie est établi le devis pour la Guinée ?', 'r' => 'En euros, sur demande. La Guinée est hors zone franc ; le montant est fixé sur devis après l\'échange de cadrage, et le mode de règlement se précise au devis.'],
        ['q' => 'Que prévoit la Guinée en matière de politique publique sur l\'IA ?', 'r' => 'Le ministère chargé des technologies de l\'information a annoncé le 20 décembre 2025 la validation d\'une feuille de route nationale 2026-2035, élaborée avec le PNUD, en trois phases : bases, services publics, rôle régional.'],
        ['q' => 'Qu\'est-ce que le programme AI Xcelerate en Guinée ?', 'r' => 'Un programme lancé à Conakry le 8 avril 2026 par la Confédération générale des entreprises de Guinée, avec l\'Organisation internationale des employeurs et Microsoft, pour plus de 250 entreprises. Sa durée n\'est pas précisée dans l\'annonce ; renseignez-vous auprès de la confédération.'],
        ['q' => 'Quelle loi guinéenne encadre l\'envoi de données personnelles à un outil d\'IA ?', 'r' => 'La loi L/2016/037/AN de 2016 sur la cybersécurité et la protection des données personnelles. Selon Data Protection Africa, elle exige une déclaration préalable et une autorisation pour les transferts hors de la CEDEAO. L\'état de l\'autorité chargée de l\'appliquer est à confirmer.'],
        ['q' => 'Peut-on utiliser DeepSeek avec des documents d\'entreprise ?', 'r' => 'Mieux vaut l\'éviter pour tout document sensible. Sa politique de confidentialité indique que les données sont traitées et stockées en Chine et peuvent servir à entraîner ses modèles, avec un refus possible. Réservez-le à des textes publics.'],
        ['q' => 'L\'ONFPP peut-il financer une formation IA ?', 'r' => 'Aucune prise en charge n\'est garantie. L\'ONFPP a validé le 25 mars 2026 le manuel de la Facilité de développement des compétences, destinée notamment aux entreprises de moins de 30 salariés. Ses critères précis ne sont pas détaillés : contactez l\'office avant de budgéter.'],
        ['q' => 'Comment composer avec une connexion instable en Guinée ?', 'r' => 'Les fichiers d\'exercice sont envoyés avant la séance, les demandes se préparent hors ligne, et chaque participant garde ses réponses dans un document local. Si la connexion tombe, il reprend avec ses supports déjà reçus.'],
        ['q' => 'Les entreprises minières et leurs fournisseurs ont-elles des besoins particuliers ?', 'r' => 'Elles rédigent beaucoup en français et en anglais : appels d\'offres, rapports, correspondance. La formation travaille sur des documents anonymisés et apprend à contrôler chaque exigence et chaque chiffre avant envoi.'],
        ['q' => 'Faut-il acheter des abonnements avant la formation ?', 'r' => 'Non. Les versions gratuites suffisent pour apprendre la méthode. Les formules et leurs limites évoluent : consultez la page officielle de chaque éditeur avant de choisir un abonnement.'],
        ['q' => 'Combien de personnes par session ?', 'r' => 'Douze au plus pour l\'atelier d\'une demi-journée, dix pour la formation de deux jours, huit pour une séance à distance sur plusieurs sites.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, une attestation nominative de fin de formation par participant. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Guinée', 'url' => 'https://datareportal.com/reports/digital-2026-guinea', 'date' => '2026-10-26'],
        ['titre' => 'Ecofin, la Guinée demande à Orange d\'améliorer son service (ARPT, juin 2025)', 'url' => 'https://www.ecofinagency.com/news-digital/0907-57232-guinea-urges-orange-to-improve-service-and-expand-network-coverage', 'date' => '2026-10-26'],
        ['titre' => 'Ecofin, Coris Bank entre sur le marché guinéen du mobile money', 'url' => 'https://www.ecofinagency.com/news-digital/1802-53017-coris-bank-enters-guinea-s-mobile-money-market', 'date' => '2026-10-26'],
        ['titre' => 'Osiris, la Guinée adopte une feuille de route nationale sur dix ans pour l\'IA', 'url' => 'https://www.osiris.sn/ia-la-guinee-adopte-une-feuille-de-route-nationale-sur-dix-ans.html', 'date' => '2026-10-26'],
        ['titre' => 'Osiris, la Guinée évalue son degré de préparation à l\'IA', 'url' => 'https://osiris.sn/la-guinee-evalue-son-degre-de-preparation-a-l-ia.html', 'date' => '2026-10-26'],
        ['titre' => 'Osiris, la Guinée lance AI Xcelerate', 'url' => 'https://www.osiris.sn/la-guinee-lance-ai-xcelerate-un-programme-pour-accelerer-l-adoption-de-l-ia.html', 'date' => '2026-10-26'],
        ['titre' => 'Data Protection Africa, fiche Guinée', 'url' => 'https://dataprotection.africa/guinea/', 'date' => '2026-10-26'],
        ['titre' => 'Guinéenews, l\'ONFPP valide son dispositif de développement des compétences', 'url' => 'https://guineenews.org/2026/03/25/guinee-lonfpp-valide-son-dispositif-de-developpement-des-competences/', 'date' => '2026-10-26'],
        ['titre' => 'Guinéenews, Simandou : premier chargement de minerai (octobre 2025)', 'url' => 'https://guineenews.org/2025/10/17/simandou-rio-tinto-lance-le-premier-chargement-de-minerai-vers-le-port-de-moribaya/', 'date' => '2026-10-26'],
        ['titre' => 'OpenAI, ChatGPT : offres et tarifs', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Anthropic, offres de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Google, abonnements Gemini', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft, Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-26'],
        ['titre' => 'DeepSeek, politique de confidentialité', 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-26'],
        ['titre' => 'Google, aide NotebookLM : confidentialité des sources', 'url' => 'https://support.google.com/notebooklm/answer/16164461', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
