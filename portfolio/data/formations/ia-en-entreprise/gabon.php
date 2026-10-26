<?php
// ============================================================
// data/formations/ia-en-entreprise/gabon.php · Formation IA en entreprise, Gabon.
// Faits relevés le 2026-10-26 : DataReportal (Digital 2026), Journal officiel du
// 15 juillet 2023 (loi n° 025/2023, articles 78, 81, 142 et 171 relus dans le texte),
// APDPVP, Gabonmediatime, Gabonreview, Droit, médias et finance, IANA, pages des
// éditeurs (OpenAI, Anthropic, Google, Microsoft Learn) lues sans reprise de prix.
// Aucune certification ni aucun agrément attribué à Richard. Aucun projet du
// portfolio n'est situé au Gabon : renvoi neutre vers /realisations/.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise au Gabon : vos équipes de Libreville et d’ailleurs utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données',
    'title'   => 'Formateur IA en entreprise au Gabon | Richard SALANON',
    'meta'    => 'Formation IA pour les équipes au Gabon : ChatGPT, Claude et Gemini sur vos documents, loi de 2023 sur les données, à distance, devis en FCFA.',
    'en_bref' => 'Une entreprise gabonaise peut former ses équipes à l’IA auprès d’un centre, d’une école ou d’un formateur indépendant ; Richard SALANON, basé à Cotonou, le fait à distance, sur les documents réels du service, sans décalage horaire avec Libreville. La formation couvre ChatGPT, Claude, Gemini et Copilot, et traite la loi gabonaise sur les données avant le premier exercice. Elle existe en atelier d’une demi-journée, en deux jours ou en accompagnement mensuel. Le devis est établi en FCFA.',
    'publie'  => '2026-11-29',
    'maj'     => '2026-11-29',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance, en français'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun (UTC+1 des deux côtés)'],
        ['l' => 'Devis', 'v' => 'Sur devis, en FCFA'],
        ['l' => 'Réponse', 'v' => 'Sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l’IA au Gabon, et comment choisir ?',
            'paragraphes' => [
                'Une équipe gabonaise a trois portes d’entrée : une école ou une université, un centre de formation professionnelle, ou un formateur indépendant qui travaille avec les entreprises. Pour un usage quotidien au bureau, le critère qui compte est simple : la formation doit se faire sur vos propres courriers, rapports et tableaux, dans les comptes que vos collaborateurs garderont. Richard SALANON propose ce format à distance, depuis Cotonou, pour les entreprises du pays.',
                'Un formateur IA d’entreprise ne cherche pas à expliquer comment fonctionne un réseau de neurones. Son travail est plus concret : montrer à un service quelles tâches répétitives confier à un assistant, comment relire ce que l’assistant produit, et quelles règles écrire pour que chacun fasse pareil. Une démonstration d’outil impressionne le jour même. Une formation qui change le travail se reconnaît un mois plus tard, quand l’équipe a encore ses consignes, ses modes opératoires et un réflexe de vérification.',
                'Pour comparer les offres disponibles à Libreville ou ailleurs au Gabon, cinq questions suffisent. Les exercices partent-ils de vos documents, ou d’exemples tirés de nulle part ? Le formateur explique-t-il ce que la loi gabonaise sur les données personnelles impose avant d’envoyer un fichier à un outil hébergé à l’étranger ? Chaque participant repart-il avec une tâche qu’il sait faire seul ? Les supports restent-ils à l’entreprise, dans un format modifiable ? Existe-t-il un moyen de poser une question quand l’équipe se retrouve seule devant son écran ?',
                'Le contexte gabonais ajoute un critère. Avec 71,9 % d’internautes selon DataReportal, un même service peut mêler des collègues très à l’aise avec le numérique et d’autres qui n’ont jamais ouvert un assistant. Une bonne formation compose des groupes par métier et ne suppose aucun prérequis technique.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Où en est le numérique au Gabon, et que change-t-il pour une équipe qui découvre l’IA ?',
            'items' => [
                ['valeur' => '71,9 %', 'libelle' => 'Part de la population gabonaise qui utilisait internet fin 2025, soit 1,87 million de personnes sur 2,61 millions d’habitants (octobre 2025)', 'source' => 'DataReportal, Digital 2026 : Gabon', 'url' => 'https://datareportal.com/reports/digital-2026-gabon'],
                ['valeur' => '126 %', 'libelle' => 'Connexions mobiles rapportées à la population fin 2025 : 3,27 millions de connexions cellulaires pour 2,61 millions d’habitants', 'source' => 'DataReportal, Digital 2026 : Gabon', 'url' => 'https://datareportal.com/reports/digital-2026-gabon'],
                ['valeur' => '41,49 Mbit/s', 'libelle' => 'Débit médian en accès fixe fin 2025, quasiment stable sur les douze mois jusqu’en août 2025 (+0,2 %)', 'source' => 'DataReportal, Digital 2026 : Gabon', 'url' => 'https://datareportal.com/reports/digital-2026-gabon'],
                ['valeur' => '3 179 889', 'libelle' => 'Abonnements mobiles fin mars 2025 selon l’observatoire de l’ARCEP : 51,12 % chez Moov Africa Gabon Télécom, 48,88 % chez Airtel Gabon', 'source' => 'Gabonmediatime, d’après l’ARCEP', 'url' => 'https://gabonmediatime.com/gabon-31-millions-dabonnes-aux-services-mobiles-a-fin-mars-2025/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent ces chiffres, et où en sont les politiques publiques sur l’IA ?',
            'paragraphes' => [
                'Avec 71,9 % d’internautes et plus de connexions mobiles que d’habitants, selon DataReportal, la grande majorité des salariés gabonais est déjà en ligne. Le frein n’est donc pas l’accès au premier assistant, mais la méthode : comment s’en servir sur un dossier réel sans se tromper. Le débit fixe médian de 41,49 Mbit/s suffit pour des assistants textuels et pour une visioconférence de formation ; la qualité varie d’un quartier ou d’un site à l’autre, et la formation prévoit une solution de repli.',
                'Le marché mobile se partage presque à égalité entre deux opérateurs, d’après l’ARCEP rapportée par Gabonmediatime. Pour une formation à distance, la conséquence est pratique : on demande à chaque participant de tester sa connexion avant la séance, de prévoir un second accès (le partage de connexion d’un téléphone d’un autre opérateur, par exemple) et de télécharger les documents d’exercice la veille plutôt que de les ouvrir en direct.',
                'Côté pouvoirs publics, le sujet vient de s’ouvrir. Selon Gabonmediatime et Gabonreview, le ministère de l’Économie numérique, de la Digitalisation et de l’Innovation et le Programme des Nations unies pour le développement ont lancé à Libreville, le 28 septembre 2026, les ateliers d’élaboration de la première stratégie nationale d’intelligence artificielle. D’après Gabonmediatime, six thèmes sont au programme : compétences et formation, valorisation et gestion des données, robustesse des infrastructures numériques, gouvernance, cybersécurité et protection des droits fondamentaux. Les articles ne donnent pas de date de publication du texte final.',
                'Ce chantier a des antécédents. Un atelier organisé le 18 juin 2025 à Libreville par le bureau de l’UNESCO, le ministère du numérique et la Commission nationale pour l’UNESCO a porté sur l’éthique de l’IA, avec des appels à protéger la souveraineté des données, à éviter les discriminations algorithmiques et à encadrer l’usage de l’IA dans la santé, l’éducation et l’administration, d’après Gabonreview. À la suite d’une évaluation soutenue par l’UNESCO, un comité technique national sur l’IA a été mis en place, selon Droit, médias et finance.',
                'Pour un dirigeant, le message est utile : le texte final n’est pas encore connu, mais la direction annoncée est claire (compétences, données, éthique). Une entreprise qui forme ses équipes dès maintenant, avec des pratiques écrites sur les données, aborde les futurs textes avec une longueur d’avance. Elle n’a pas non plus à compter sur une aide publique chiffrée : aucun montant ni dispositif pour les entreprises n’est annoncé dans ces articles.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d’IA utiliser au Gabon, et à quel coût ?',
            'legende' => 'Les formules, les limites d’usage et les prix des éditeurs changent souvent, et Google précise que la disponibilité de ses offres varie selon les pays : la page officielle de chaque éditeur fait foi, à relire le jour de la décision. Aucun montant n’est repris ici, et les abonnements ne font pas partie du prix de la formation. Pages lues le 26 octobre 2026.',
            'entetes' => ['Outil', 'Ce qu’il fait bien pour une équipe', 'Formules à connaître', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction souple, reformulation, mise en tableau de messages en vrac, analyse d’un fichier', 'La page des offres liste Free, Go, Plus, Pro, Business, Enterprise et Edu : une formule gratuite y figure', 'Préparer les consignes hors ligne, les coller en une fois, garder le texte produit dans un document local'],
                ['Claude (Anthropic)', 'Lecture de longs documents en français, synthèses citées, rédaction nuancée, projets réutilisables', 'Free, Pro, Max, Team, Enterprise et une offre pour l’éducation ; la page présente une formule gratuite', 'Charger un seul document à la fois, éviter les pièces très lourdes, enregistrer le résultat avant de fermer la page'],
                ['Gemini (Google)', 'Aide dans l’environnement Google (Gmail, Docs, Sheets), recherche approfondie, images', 'Une formule gratuite, puis Google AI Plus, Pro et Ultra ; Google précise que la disponibilité varie selon les pays', 'Utile surtout aux équipes qui travaillent déjà dans Google Workspace, car tout reste dans le navigateur'],
                ['Copilot (Microsoft)', 'Rédaction, synthèse et analyse de fichiers dans Copilot Chat, et selon l’abonnement dans Outlook ou Teams, pour les équipes déjà abonnées à Microsoft 365', 'Copilot Chat est disponible avec les licences Microsoft 365 éligibles, sans licence Copilot ; la licence payante élargit l’accès aux données de l’entreprise', 'Dépend du compte professionnel de l’entreprise : à tester avant la séance avec l’administrateur'],
                ['NotebookLM (Google)', 'Questions et résumés limités aux documents que vous lui donnez, ce qui réduit le risque d’invention', 'Google propose son carnet de recherche dans une formule gratuite ; le nom et les conditions du service se vérifient sur la page de Google', 'Convient bien à un dossier de référence chargé une fois puis interrogé à plusieurs reprises'],
                ['DeepSeek', 'Test comparatif sur des textes publics, pour voir ce que donne un autre modèle', 'Conditions d’utilisation et d’hébergement des données à lire par l’entreprise avant tout dépôt de document', 'À traiter comme un service public ouvert : aucun document interne ni donnée de client n’y est envoyé'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer pour commencer, et comment choisir l’outil à garder ?',
            'paragraphes' => [
                'Non. Les formules gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre la méthode, et Copilot Chat est déjà disponible aux équipes qui ont une licence Microsoft 365 éligible. Les limites quotidiennes des comptes gratuits se font sentir sur une journée intensive : on alterne alors entre deux outils, ce qui montre aussi que la méthode ne dépend d’aucun éditeur.',
                'Le choix d’un abonnement vient après la formation, sur ce qui a servi. Une entreprise de Libreville qui travaille avec Microsoft 365 commence souvent par Copilot Chat. Celle dont les équipes vivent dans Gmail et Google Sheets regarde Gemini. Les équipes qui lisent beaucoup de rapports en français testent Claude et ChatGPT sur leurs propres dossiers. Ces deux dernières étapes se font sur des documents anonymisés tant qu’aucun compte professionnel n’est en place.',
                'Le paiement mérite d’être anticipé. Un abonnement en ligne se règle souvent par carte bancaire internationale. Une entreprise gabonaise sans carte adaptée peut interroger sa banque : la question se règle avant la formation, pas le matin de la première séance. Les montants affichés changent, c’est pourquoi cette page n’en donne aucun.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données suivre au Gabon avant d’envoyer un document à un outil d’IA ?',
            'paragraphes' => [
                'La loi n° 025/2023 du 12 juillet 2023, publiée au Journal officiel n° 218 bis du 15 juillet 2023, modifie la loi n° 001/2011 sur la protection des données à caractère personnel. Elle place le contrôle sous l’APDPVP, l’Autorité pour la protection des données à caractère personnel et de la vie privée, qui a remplacé la CNPDCP : le Conseil des ministres du 1er février 2023 avait approuvé cette transformation, d’après Gabonmediatime. Le site de l’autorité présente trois missions : informer, veiller et contrôler, avec une possibilité de sanction en cas de manquement constaté.',
                'Pour une équipe qui utilise un assistant, trois articles de la loi comptent. L’article 78 soumet les traitements automatisés de données à une déclaration auprès de l’APDPVP, sauf cas particuliers. L’article 81 réserve à une autorisation préalable de l’autorité certaines catégories de traitements, comme les données génétiques ou celles relatives aux infractions et aux condamnations. L’article 142 oblige le responsable de traitement à informer l’autorité, sans délai, de toute violation de données.',
                'Le point qui concerne le plus directement l’IA est l’article 171 : un responsable de traitement ne peut transférer des données personnelles vers un autre État que sur autorisation de l’APDPVP, qui doit s’assurer que cet État offre un niveau de protection suffisant de la vie privée. Or les grands assistants sont exploités depuis l’étranger. Coller dans l’un d’eux un fichier de clients ou de salariés gabonais n’est donc pas un geste neutre : c’est un transfert potentiel que l’entreprise doit pouvoir justifier.',
                'La formation en tire une règle de travail simple, appliquée avant le premier exercice. Les documents sont classés en trois groupes : ceux qui peuvent partir tels quels (une lettre type, un texte déjà public), ceux qu’on anonymise d’abord (noms, numéros, montants remplacés) et ceux qui ne sortent jamais (dossiers du personnel, données de santé, contrats confidentiels). Une personne est désignée pour valider chaque envoi.',
                'L’hébergement local fait l’objet d’un projet. Dans un article du 10 juin 2026, Gabonmediatime présentait un premier centre de données gabonais, porté par ST Digital et décrit par son responsable comme conforme au standard Tier III, destiné à garder sur le territoire des données d’administrations, d’entreprises et de particuliers. Cela ne change pas l’endroit où travaillent les assistants grand public. Pour les fichiers qu’une entreprise veut conserver au pays, la disponibilité et les conditions de ce service se vérifient directement auprès de l’exploitant.',
                'Les règles propres à l’IA sont en préparation, comme vu plus haut. Pour un cas précis (un outil de recrutement, un traitement de données de santé, un chatbot qui répond aux clients), la bonne démarche est d’interroger l’autorité ou un conseil juridique avant de déployer, et de garder la trace de la décision. Cette page ne remplace ni l’un ni l’autre.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats retenir pour quelle équipe, et comment se déroule une formation à distance depuis Cotonou ?',
            'legende' => 'Les formats se combinent : un atelier découverte puis la formation de deux jours pour un service pilote, ou la formation suivie de l’accompagnement mensuel. Tous se donnent à distance pour le Gabon.',
            'entetes' => ['Format', 'Durée', 'Effectif', 'Pour qui, et comment cela se passe'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Direction ou équipe qui veut voir avant de décider ; deux tâches travaillées sur des documents du service, puis une recommandation pour la suite'],
                ['Formation de deux jours', '4 demi-journées', '10 personnes au plus, un groupe par métier', 'Service qui utilise déjà un assistant sans méthode ; une tâche cible par participant, évaluée chronomètre en main à la fin'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre Libreville et d’autres villes ; partage d’écran, documents envoyés la veille, solution de repli en cas de coupure'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Pour étendre l’usage à d’autres tâches et corriger les mauvaises habitudes'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoir côté fuseau, langue, matériel et connexion ?',
            'paragraphes' => [
                'Le Gabon et le Bénin sont tous deux listés sous le fuseau Africa/Lagos de la base IANA, soit UTC+1 sans changement d’heure : les séances suivent l’horaire de bureau de Libreville, sans calcul de décalage. La formation se donne en français, la langue officielle du pays, avec des supports rédigés en français ; l’anglais ne sert que pour les courriers à des partenaires étrangers.',
                'Chaque participant a besoin d’un ordinateur avec un navigateur à jour, d’un traitement de texte et d’un tableur. Un téléphone convient pour reformuler un message, mais pas pour analyser un fichier de stocks ou relire un rapport de trente pages. Un casque évite l’écho dans un open space ; une caméra n’est pas obligatoire, un partage d’écran l’est.',
                'Un questionnaire envoyé avant la séance recueille le niveau de chacun, les outils déjà installés, la qualité de la connexion au poste de travail et les trois à cinq documents de l’exercice. Les documents contenant des données personnelles sont anonymisés avant l’envoi. La veille, chacun les télécharge sur son poste : si la connexion tombe en pleine séance, l’exercice se poursuit sur la copie locale.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme type pour quel métier au Gabon ?',
            'items' => [
                ['secteur' => 'Pétrole et services aux sociétés pétrolières', 'probleme' => 'Un sous-traitant reçoit des bons de commande, des spécifications techniques et des relances de paiement en plusieurs formats, en français et parfois en anglais, et les courriers de suivi prennent une demi-journée par semaine.', 'solution' => 'Tâche : résumer un cahier des charges et préparer les courriers de relance. Outil : Claude ou ChatGPT sur des copies anonymisées, avec citation de la page pour chaque exigence. Résultat attendu : une fiche d’exigences vérifiée contre l’original et des relances prêtes à relire, avec montants et échéances contrôlés ligne à ligne.'],
                ['secteur' => 'Manganèse et mines', 'probleme' => 'Les rapports de maintenance, de sécurité et de livraison arrivent de sites éloignés sous forme de notes, de photos et de messages, et le siège les remet en forme à la main.', 'solution' => 'Tâche : transformer des notes brutes et des messages en rapport hebdomadaire structuré. Outil : ChatGPT ou Gemini, à partir du format de rapport déjà utilisé par le siège. Résultat attendu : un tableau d’incidents et d’actions par site, dont chaque ligne renvoie à la note d’origine, et une règle sur les photos de personnes qui ne partent pas dans l’outil.'],
                ['secteur' => 'Bois et transformation', 'probleme' => 'Les équipes commerciales répondent à des acheteurs étrangers, rédigent des offres en plusieurs langues et assemblent des dossiers de documents d’expédition.', 'solution' => 'Tâche : rédiger une offre et sa version anglaise à partir d’une fiche produit, puis contrôler les quantités. Outil : Claude ou Gemini avec la fiche et un courrier déjà validé comme modèle. Résultat attendu : une offre relue par le commercial, avec noms, quantités et conditions vérifiés avant envoi.'],
                ['secteur' => 'Construction et travaux publics', 'probleme' => 'Les conducteurs de travaux écrivent des comptes rendus de chantier, des réponses aux maîtres d’ouvrage et des lettres de réserve, avec des échéances qu’un oubli rend coûteuses.', 'solution' => 'Tâche : compte rendu de réunion de chantier avec décisions, responsables et dates. Outil : Copilot si la licence de l’entreprise le permet, sinon ChatGPT sur des notes anonymisées. Résultat attendu : un tableau d’actions diffusable le jour même, comparé aux notes par un second lecteur.'],
                ['secteur' => 'Commerce et services à Libreville', 'probleme' => 'Une enseigne répond à ses clients sur WhatsApp, au téléphone et par courriel, avec des réponses qui varient selon la personne présente.', 'solution' => 'Tâche : classer vingt messages par motif et rédiger des réponses dans le ton de la maison. Outil : Gemini ou ChatGPT. Résultat attendu : des réponses types validées par le responsable, et la règle que prix, délais et promesses sont relus avant chaque envoi.'],
                ['secteur' => 'Administration, écoles et cliniques', 'probleme' => 'Les agents rédigent des notes, des convocations et des comptes rendus à partir de modèles stricts, et manipulent des dossiers d’usagers, d’élèves ou de patients.', 'solution' => 'Tâche : premier jet d’une note normée à partir d’un modèle validé. Outil : Copilot Chat ou un assistant au choix du service. Résultat attendu : un gain de temps sur la forme, et une frontière écrite : aucun dossier nominatif n’est déposé dans un outil en ligne sans accord du responsable de traitement.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Gabon, ou la budgétiser ?',
            'paragraphes' => [
                'Aucune prise en charge n’est garantie, et cette page n’en promet aucune. L’effort public visible passe par les infrastructures de formation : selon Gabonreview, le projet de budget 2026 présenté à la commission des finances le 23 octobre 2025 prévoyait 2,83 milliards de FCFA pour la mission « Formation pour l’emploi », en hausse de 207 %, incluant la réhabilitation du complexe Basile Ondimba et la modernisation de 15 centres de formation. Ces lignes ne décrivent pas un dispositif de prise en charge pour les salariés d’une entreprise.',
                'Pour une formation continue de salariés, le plus sûr est donc de la budgétiser dans le plan de dépenses de l’entreprise, comme une charge de fonctionnement, et d’en discuter avec l’expert-comptable pour son traitement. Si un financeur ou un partenaire du projet est impliqué, par exemple un bailleur d’une organisation non gouvernementale, il faut lui demander par écrit ce qu’il accepte avant de signer, programme et devis à l’appui.',
                'Richard SALANON n’affiche ni certification d’éditeur ni agrément d’un fonds de formation. Il remet en revanche un devis détaillé (objectifs, durée, participants, livrables), un programme, des supports et une attestation nominative de fin de formation : ces pièces servent à toute demande de remboursement ou de justification interne. Le devis est établi en FCFA.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA en entreprise au Gabon ?',
            'intro'      => 'Aucune somme n’est affichée ici : chaque devis est établi après un ou deux entretiens de cadrage, en FCFA, avec le détail de chaque poste. Les abonnements aux assistants restent au nom de l’entreprise et ne font pas partie de ce prix.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Deux tâches travaillées sur vos documents', 'Règle de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation de deux jours', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées à distance', 'Exercices sur vos documents', 'Supports et attestation nominative', 'Épreuve finale sur la tâche cible', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Retour sur ce qui sert', 'Nouvelles tâches ajoutées']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, et donc de séances à animer.',
                'La durée retenue : atelier, deux jours ou séances échelonnées.',
                'La préparation sur vos documents : collecte, anonymisation et construction des exercices.',
                'Le mode : tout à distance pour le Gabon.',
                'Le suivi après la session, ponctuel ou mensuel.',
                'Le mode de règlement : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, à convenir au devis.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs guettent les équipes gabonaises qui démarrent avec l’IA ?',
            'intro' => 'Ces écarts reviennent dans les entreprises qui commencent. Chacun se prévient avant la première séance.',
            'items' => [
                ['titre' => 'Envoyer un fichier de personnes sans se poser la question du transfert', 'texte' => 'Une liste de clients, un tableau de paie ou un dossier de candidats déposé dans un assistant hébergé à l’étranger relève de l’article 171 de la loi de 2023. Anonymiser d’abord, ou ne pas envoyer.'],
                ['titre' => 'Croire une référence parce qu’elle est précise', 'texte' => 'Un assistant peut citer un article de loi, un décret ou un chiffre inexistants, avec aplomb. Toute référence juridique ou fiscale se retrouve dans le texte officiel avant d’entrer dans un courrier.'],
                ['titre' => 'Tester sur un compte personnel avec des documents de l’entreprise', 'texte' => 'Le compte gratuit d’un salarié appartient au salarié, et part avec lui. Les exercices utilisent des copies anonymisées ; les documents sensibles attendent un compte professionnel.'],
                ['titre' => 'Dépendre d’une seule connexion', 'texte' => 'Avec deux opérateurs mobiles de poids presque égal, un second accès est facile à prévoir. Avoir la veille les documents sous la main évite l’exercice interrompu par une coupure.'],
                ['titre' => 'Former tout le monde sur tout', 'texte' => 'Deux ou trois tâches par groupe valent mieux que dix. Un geste solide, vérifié à l’épreuve finale, convainc plus qu’une journée de découvertes.'],
                ['titre' => 'Empiler les abonnements', 'texte' => 'Trois outils payés par trois services, sans règle commune, coûtent plus et se contrôlent moins. L’équipe retient un outil principal après la formation, sur la base de ce qu’elle a mesuré.'],
                ['titre' => 'Attendre la stratégie nationale pour commencer', 'texte' => 'Le texte est en préparation et aucune date n’est annoncée. Les principes déjà posés (données, éthique, compétences) justifient de poser dès maintenant des règles internes écrites.'],
                ['titre' => 'Laisser l’assistant parler au nom de l’entreprise', 'texte' => 'Un prix, un délai ou une promesse écrits par l’outil engagent celui qui signe. Une personne nommée relit et assume chaque envoi.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faut-il vérifier avant de s’appuyer sur cette page ?',
            'texte' => 'Les formules des éditeurs, la stratégie nationale d’IA en préparation et les services d’hébergement locaux évoluent vite. Les faits de cette page ont été relevés le 26 octobre 2026 : confirmez-les sur les pages officielles citées en bas de page avant toute décision. Elle ne remplace ni un avocat ni un expert-comptable, et l’APDPVP reste l’interlocuteur pour une question précise sur un traitement de données.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes gabonaises à l’IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Gabon. Il compte ' . $ans . ' ans d’expérience dans le numérique, s’est formé à ' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ' et déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d’Afrique francophone, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>.',
                'Sa façon de former tient en peu de choses : une réponse sous 24 heures, un ou deux entretiens de cadrage qui peuvent conclure qu’un atelier suffit, des exercices bâtis sur vos documents, une épreuve finale chronomètre en main, des supports qui restent à l’entreprise. Il n’est certifié par aucun éditeur d’IA et ne se présente comme partenaire d’aucun.',
                'Les projets réalisés pour d’autres clients d’Afrique et d’Europe, avec leur description, sont présentés sur la page des <a href="/realisations/">réalisations</a>. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>. Pour aller plus loin que l’usage quotidien, voir les formations <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, <a href="/formations/prompt-engineering">prompt engineering</a>, <a href="/formations/agents-ia-assistants">agents IA et assistants</a> et <a href="/formations/n8n">n8n</a>, ainsi que la fiche générale <a href="/formations/ia-en-entreprise">IA en entreprise</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe gabonaise à l’IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui prennent le plus de temps et les outils déjà en place : vous recevez une réponse sous 24 heures, puis un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Qui peut former les équipes d’une entreprise à l’IA au Gabon ?', 'r' => 'Une école, un centre de formation ou un formateur indépendant. Richard SALANON forme à distance, depuis Cotonou, en partant de vos documents et de vos comptes, avec la règle de données du pays traitée avant le premier exercice.'],
        ['q' => 'Quelle loi encadre les données personnelles au Gabon ?', 'r' => 'La loi n° 025/2023 du 12 juillet 2023, publiée au Journal officiel du 15 juillet 2023, qui modifie la loi n° 001/2011. Elle confie le contrôle à l’APDPVP.'],
        ['q' => 'Que devient la CNPDCP au Gabon ?', 'r' => 'Le Conseil des ministres du 1er février 2023 a approuvé sa transformation en Autorité pour la protection des données à caractère personnel et de la vie privée, l’APDPVP, aujourd’hui chargée du contrôle.'],
        ['q' => 'Peut-on envoyer des données de clients gabonais à ChatGPT ou à Claude ?', 'r' => 'L’article 171 de la loi de 2023 n’autorise le transfert de données personnelles vers un autre État que sur autorisation de l’APDPVP. Les données de personnes s’anonymisent d’abord, ou ne partent pas ; la formation apprend à faire ce tri.'],
        ['q' => 'Faut-il déclarer l’usage d’un assistant d’IA à l’APDPVP ?', 'r' => 'L’article 78 soumet les traitements automatisés de données à déclaration, sauf exceptions. La réponse dépend de ce que vous faites des données : posez la question à l’APDPVP ou à un conseil juridique pour votre cas.'],
        ['q' => 'Le Gabon a-t-il une stratégie nationale d’intelligence artificielle ?', 'r' => 'Elle est en préparation : les ateliers ont été lancés à Libreville le 28 septembre 2026 par le ministère de l’Économie numérique et le PNUD. Aucune date de publication du texte final n’est annoncée.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance au Gabon ?', 'r' => 'Oui, en cinq à six séances de deux heures et demie, avec huit participants au plus. Le Gabon et le Bénin partagent le fuseau UTC+1, donc aucun décalage. Les documents sont envoyés à l’avance et une solution de repli est prévue en cas de coupure.'],
        ['q' => 'Les connexions gabonaises suffisent-elles pour un assistant d’IA ?', 'r' => 'Selon DataReportal, 71,9 % de la population était en ligne fin 2025 et le débit fixe médian atteignait 41,49 Mbit/s. La qualité varie d’un site à l’autre : la formation prévoit un second accès et des documents téléchargés d’avance.'],
        ['q' => 'Existe-t-il un financement public pour former des salariés gabonais à l’IA ?', 'r' => 'Aucun dispositif de prise en charge n’est garanti. Le projet de budget 2026 de la mission « Formation pour l’emploi », d’après Gabonreview, porte sur des centres et des équipements de formation, sans dispositif annoncé pour les salariés d’entreprise. Une entreprise budgétise la formation, ou interroge son financeur par écrit avant de signer.'],
        ['q' => 'Combien coûte la formation, et en quelle devise ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après le cadrage. Il dépend du nombre de participants, de la durée, du mode (distance ou présence) et de la préparation sur vos documents.'],
        ['q' => 'Faut-il acheter des abonnements avant la formation ?', 'r' => 'Non. ChatGPT, Claude et Gemini ont une formule gratuite, et Copilot Chat est disponible avec les licences Microsoft 365 éligibles. Les formules et limites évoluent : la page officielle de chaque éditeur fait foi.'],
        ['q' => 'Reçoit-on une attestation de formation ?', 'r' => 'Oui, une attestation nominative de fin de formation, avec le programme et les supports. Ce n’est ni un diplôme ni une certification d’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Gabon', 'url' => 'https://datareportal.com/reports/digital-2026-gabon', 'date' => '2026-10-26'],
        ['titre' => 'Journal officiel du 15 juillet 2023 : loi n° 025/2023 sur les données personnelles (AFAPDP)', 'url' => 'https://www.afapdp.org/wp-content/uploads/2023/12/Gabon-Loi-025-2023-du-12-juillet-2023-portant-modification-de-la-loi-001-2011-du-25-septembre-relative-a-la-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-26'],
        ['titre' => 'APDPVP, site officiel', 'url' => 'https://www.apdpvp.ga', 'date' => '2026-10-26'],
        ['titre' => 'Gabonmediatime : la CNPDCP transformée en APDPVP', 'url' => 'https://gabonmediatime.com/gabon-cnpdcp-transformee-autorite-pour-protection-des-donnees-caractere-personnel-vie-privee/', 'date' => '2026-10-26'],
        ['titre' => 'Gabonmediatime : le Gabon lance l’élaboration de sa stratégie nationale d’IA', 'url' => 'https://gabonmediatime.com/souverainete-numerique-le-gabon-lance-lelaboration-de-sa-strategie-nationale-dia/', 'date' => '2026-10-26'],
        ['titre' => 'Gabonreview : le Gabon ouvre le chantier d’une stratégie nationale d’IA', 'url' => 'https://www.gabonreview.com/intelligence-artificielle-le-gabon-ouvre-le-chantier-dune-strategie-nationale-inclusive-et-souveraine/', 'date' => '2026-10-26'],
        ['titre' => 'Gabonreview : l’IA au cœur d’une stratégie éthique et inclusive (atelier UNESCO du 18 juin 2025)', 'url' => 'https://www.gabonreview.com/gabon-lintelligence-artificielle-au-coeur-dune-strategie-ethique-et-inclusive/', 'date' => '2026-10-26'],
        ['titre' => 'Droit, médias et finance : la stratégie nationale de l’IA se prépare', 'url' => 'https://www.droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1395-gabon-la-strategie-nationale-de-lintelligence-artificielle-se-prepare', 'date' => '2026-10-26'],
        ['titre' => 'Gabonmediatime : lancement du premier centre de données', 'url' => 'https://gabonmediatime.com/gabon-lancement-du-premier-data-center-le-30-juin/', 'date' => '2026-10-26'],
        ['titre' => 'Gabonmediatime : abonnés mobiles fin mars 2025 (ARCEP)', 'url' => 'https://gabonmediatime.com/gabon-31-millions-dabonnes-aux-services-mobiles-a-fin-mars-2025/', 'date' => '2026-10-26'],
        ['titre' => 'Gabonreview : budget 2026 et mission « Formation pour l’emploi »', 'url' => 'https://www.gabonreview.com/budget-2026-une-hausse-historique-de-130-milliards-de-fcfa-pour-leducation-nationale/', 'date' => '2026-10-26'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Afrique', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-26'],
        ['titre' => 'OpenAI, ChatGPT : offres et tarifs', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Anthropic, offres de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft Learn, présentation de Microsoft Copilot Chat', 'url' => 'https://learn.microsoft.com/en-us/copilot/overview', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
