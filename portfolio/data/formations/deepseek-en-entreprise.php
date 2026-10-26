<?php
// ============================================================
// data/formations/deepseek-en-entreprise.php · Fiche formation « DeepSeek en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : DeepSeek comme assistant et modèles de raisonnement (mode de
// réflexion, poids ouverts, application et API) ; surtout la vigilance sur les
// données : où elles sont traitées d'après la politique de confidentialité,
// ce qu'on ne saisit jamais, alternatives hébergées par l'entreprise sans rien
// promettre. Richard enseigne DeepSeek (fait donné par lui) ; rien d'autre
// n'est affirmé sur sa pratique.
// Faits externes lus le 26/10/2026 : politique de confidentialité DeepSeek
// (mise à jour du 10 février 2026), conditions d'utilisation (27 mars 2026),
// documentation de l'API (modèles, mode de réflexion, limites de simultanéité),
// dépôt DeepSeek-V3 (poids, licences), Commission européenne (RGPD), SGG du
// Bénin (loi n° 2017-20, titre et date seulement : le texte des articles n'a
// pas été lu). Aucun prix d'éditeur ni limite chiffrée : la page officielle
// fait foi. Aucune certification ni aucun partenariat attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation DeepSeek en entreprise : vos équipes apprennent à rédiger, raisonner et analyser avec DeepSeek, et à décider ce qu\'elles ne lui confient jamais',
    'title'   => 'Formation DeepSeek en entreprise | Richard SALANON',
    'meta'    => 'Formation DeepSeek pour vos équipes : mode de réflexion, rédaction, analyse, API, et règles de données avant tout usage. Intra ou à distance, sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes qui rédigent, analysent et préparent des décisions à travailler avec DeepSeek, un assistant d\'IA et une famille de modèles de raisonnement : bien formuler une demande, exploiter le mode de réflexion, vérifier les résultats, comprendre les différences entre l\'application, l\'API et un modèle hébergé par l\'entreprise, et fixer par écrit ce qui ne lui est jamais confié. Le parcours complet occupe quatre demi-journées sur deux jours ; l\'atelier découverte tient en une demi-journée. Vous choisissez entre vos locaux, la visioconférence ou un mélange des deux, pour votre seule équipe ou dans une session partagée avec d\'autres structures. Tarif établi sur devis.',
    'publie'  => '2026-11-15',
    'maj'     => '2026-11-15',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d\'une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : situer DeepSeek et poser les règles de données avant le premier essai',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qu\'est DeepSeek : un assistant accessible dans une application et un navigateur, une interface de programmation (API) pour les développeurs, et des modèles dont les poids sont publiés pour certains d\'entre eux.',
                'Lecture commentée, en groupe, de la politique de confidentialité de l\'éditeur : données collectées, lieu de traitement, durée de conservation, usage pour améliorer les modèles, droit d\'opposition.',
                'Lecture des conditions d\'utilisation : responsabilité des contenus saisis et des réponses obtenues, absence de conseil professionnel, relecture humaine pour les décisions qui touchent des personnes.',
                'Classer les informations de l\'entreprise en trois familles : ce qu\'on peut saisir dans un service tiers, ce qu\'on anonymise d\'abord, ce qui n\'en sort jamais.',
                'Questions de départ de l\'équipe : qui a déjà essayé DeepSeek, avec quelles données, sur quel appareil, avec quel compte.',
                'Premier exercice sur un texte public ou fictif : une demande simple, puis relecture ligne à ligne de la réponse.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : formuler une demande et lire un raisonnement pas à pas',
            'duree'  => '3 h 30',
            'points' => [
                'Les éléments d\'une demande claire : rôle, destinataire, objectif, informations fournies, forme attendue, contraintes.',
                'Mode de réflexion : ce que l\'éditeur décrit (une chaîne de raisonnement produite avant la réponse finale), et comment la lire sans la prendre pour une preuve.',
                'Comparer une réponse avec et sans réflexion sur un même problème de calcul, de planning ou de comparaison d\'offres fictives.',
                'Demander les hypothèses, les étapes et les points d\'incertitude, puis refaire le calcul à la main sur un chiffre clé.',
                'Rédiger un courrier, une note ou une réponse à un client à partir de consignes écrites, et le faire relire par un collègue.',
                'Repérer les signes d\'une réponse fragile : chiffre sans origine, source inventée, raisonnement qui change de conclusion quand on reformule.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : analyser des textes, des tableaux et un peu de code',
            'duree'  => '3 h 30',
            'points' => [
                'Résumer un rapport ou un cahier des charges fictif en exigeant la citation du passage qui soutient chaque point.',
                'Structurer des notes en tableau : décisions, responsables, échéances, risques.',
                'Analyser un petit tableau de données fictives : totaux, tris, anomalies, puis recalcul d\'un chiffre hors de l\'outil.',
                'Code léger : une formule de tableur, une expression régulière, un petit script d\'automatisation, expliqués ligne par ligne et testés avant tout usage.',
                'Ce qu\'on ne copie jamais dans un assistant en ligne en demandant du code : clés d\'accès, mots de passe, adresses internes, extraits de base de données réels.',
                'Exercice croisé : chaque participant vérifie la production d\'un collègue en revenant à la source ou en rejouant le calcul.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : choisir entre application, API et modèle hébergé, puis écrire les règles de l\'équipe',
            'duree'  => '3 h 30',
            'points' => [
                'Trois façons d\'utiliser DeepSeek : l\'application de l\'éditeur, l\'API de l\'éditeur, un modèle à poids ouverts hébergé par l\'entreprise ou par un prestataire qu\'elle choisit. Ce que chacune change pour les données, la maintenance et la responsabilité.',
                'Ce que la documentation de l\'API décrit : format compatible avec d\'autres interfaces courantes, mode de réflexion activable, raisonnement renvoyé dans un champ séparé, limites de simultanéité par compte.',
                'Ce qu\'implique un modèle hébergé en propre : serveurs, compétences, mises à jour, sécurité, lecture de la licence du modèle. Aucun résultat n\'est garanti à l\'avance.',
                'Arbre de décision en équipe : pour chaque tâche, quel outil, quelles données, qui valide.',
                'Rédaction des règles écrites de l\'équipe : données interdites, comptes autorisés, relecture obligatoire, personne référente.',
                'Plan d\'usage sur 30 jours et liste des sujets à faire examiner par un juriste ou un responsable de la protection des données.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d\'une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes administratives, commerciales, d\'analyse, informatiques et de direction, sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Ce que vos équipes maîtrisent après le parcours DeepSeek, et les sujets laissés de côté',
            'paragraphes' => [
                'DeepSeek est entré dans beaucoup d\'entreprises par la curiosité : un collaborateur l\'a essayé sur son téléphone, un développeur l\'a branché à un outil, un dirigeant a lu qu\'il rivalisait avec les grands assistants. Entre l\'essai et un usage maîtrisé, il y a une question que cette formation traite en premier : quelles données l\'équipe accepte-t-elle de confier à ce service, et lesquelles ne sortent jamais ? Le reste (rédiger, raisonner, analyser) vient ensuite, et c\'est bien plus simple une fois la règle posée.',
                'Au terme du parcours, sept gestes sont acquis pour chaque participant. Écrire à DeepSeek une demande complète. Utiliser le mode de réflexion et lire le raisonnement affiché sans le prendre pour une preuve. Produire un écrit, une synthèse ou un tableau exploitable après relecture. Obtenir une aide de code légère et la tester avant usage. Refaire à la main un chiffre clé. Expliquer ce que change l\'usage de l\'application, de l\'API ou d\'un modèle hébergé par l\'entreprise. Et enfin, énumérer par écrit les informations qui ne lui sont jamais confiées.',
                'Certains sujets restent hors champ. Les assistants de rédaction en général sont l\'objet de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Quant à monter un serveur DeepSeek chez vous, c\'est un chantier technique distinct, celui d\'une <a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. Elle n\'est pas non plus un avis juridique sur les transferts de données : elle apprend à poser les bonnes questions et à les porter devant un juriste.',
                'Aucun gain chiffré n\'est annoncé : avec un modèle de raisonnement, l\'économie de temps varie selon la nature du travail confié, l\'état des documents fournis et la fréquence d\'usage. Le parcours ne pousse ni à adopter DeepSeek ni à le rejeter : elle donne à l\'équipe les éléments pour décider en connaissance de cause, d\'après ce que l\'éditeur publie lui-même.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre le parcours DeepSeek, et que faut-il prévoir avant ?',
            'intro' => 'Sont concernées les équipes qui rédigent, analysent ou préparent des décisions, et celles de la sécurité ou de l\'informatique qui doivent autoriser ou refuser DeepSeek. Aucune compétence technique n\'est demandée pour le tronc commun.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Équipes administratives et commerciales, analystes, chargés d\'études, responsables financiers, juristes d\'entreprise, responsables informatiques, dirigeants qui doivent trancher sur l\'usage d\'un outil que leurs équipes ont déjà essayé.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Débutants complets comme équipes qui se servent déjà de DeepSeek sans aucune règle. Un court questionnaire avant la session permet de savoir qui l\'a essayé, avec quels comptes et quelles données, et de composer des groupes proches.'],
                ['titre' => 'Un groupe pour les décideurs, un autre pour les utilisateurs', 'texte' => 'Quand c\'est possible, les personnes qui valident les outils (informatique, conformité, direction) travaillent ensemble sur la politique de données, et les utilisateurs sur les tâches. Pour l\'atelier découverte, un groupe mêlé fonctionne.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant avec un navigateur récent et une connexion stable, car l\'application et l\'API de l\'éditeur fonctionnent en ligne. Un tableur et un traitement de texte servent aux exercices.'],
                ['titre' => 'Les comptes', 'texte' => 'La formation n\'exige aucun compte personnel. Les exercices utilisent des textes publics ou fictifs. Si l\'entreprise a déjà décidé d\'utiliser un compte de service, c\'est celui-là, et seulement lui, qui est employé ; aucune donnée réelle n\'est saisie. Les conditions et les fonctions évoluent : la page officielle de l\'éditeur fait foi.'],
                ['titre' => 'Les documents à préparer', 'texte' => 'Des documents d\'exercice rendus publics ou fictifs, que l\'équipe choisit avec le formateur et télécharge sur chaque poste avant la session. Tout document qui contient une donnée personnelle ou stratégique est exclu des exercices.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Que contient chaque demi-journée du parcours DeepSeek ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce que DeepSeek, et en quoi ses modèles de raisonnement diffèrent-ils d\'un assistant classique ?',
            'paragraphes' => [
                'DeepSeek désigne à la fois une entreprise, un assistant grand public et une famille de modèles de langage. Pour les développeurs, l\'éditeur publie une documentation d\'API dans laquelle, à la date de consultation, deux noms de modèles sont proposés (deepseek-flash et deepseek-v4-pro) et où l\'interface est décrite comme compatible avec le format d\'autres fournisseurs : un outil conçu pour ces formats peut s\'y brancher en changeant sa configuration. Les noms de modèles changent vite ; la formation ne les apprend pas par cœur, elle apprend à lire la documentation du jour.',
                'La documentation consacrée au mode de réflexion décrit un modèle qui produit un raisonnement avant sa réponse finale. Ce mode est présenté comme activé par défaut, avec un niveau d\'effort réglable, et le raisonnement est renvoyé dans un champ distinct de la réponse. Pour l\'utilisateur, cela signifie qu\'il peut lire les étapes que le modèle s\'est données. Pour l\'équipe, cela impose une règle : une suite d\'étapes cohérente n\'est pas une démonstration exacte. Le raisonnement peut être bien écrit et mener à un résultat faux.',
                'Ce qu\'on peut attendre d\'un modèle de raisonnement : une aide sur les problèmes à plusieurs étapes (calculs, plannings, comparaisons, logique de règles), à vérifier, et une explication qui facilite la relecture. Ce qu\'on y perd : du temps d\'attente, et une confiance parfois excessive dans un texte qui a l\'air rigoureux. La formation en fait un exercice : le même problème, avec et sans réflexion, puis la vérification du résultat par un calcul indépendant.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices chaque métier fait-il avec DeepSeek pendant la formation ?',
            'legende' => 'Exemples d\'exercices construits à la préparation, sur des textes publics ou fictifs. La dernière colonne est ce que le participant contrôle avant de s\'appuyer sur le résultat.',
            'entetes' => ['Poste', 'Exercice de départ', 'Ce que DeepSeek produit', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Administration et secrétariat', 'Reformuler un courrier type fictif pour un autre destinataire', 'Version réécrite dans le ton demandé', 'Noms, dates, engagements pris au nom de l\'entreprise'],
                ['Finance et gestion', 'Comparer deux offres fictives de fournisseurs sur plusieurs critères', 'Tableau comparatif et raisonnement en étapes', 'Chaque total refait à la main, hypothèses citées'],
                ['Commercial', 'Préparer l\'argumentaire d\'une offre à partir d\'une fiche produit publique', 'Plan d\'argumentaire et réponses aux objections', 'Affirmations sur le produit, promesses non tenables'],
                ['Ressources humaines', 'Structurer une fiche de poste et une grille d\'entretien fictives', 'Documents structurés', 'Absence de critère discriminatoire, relecture humaine de toute décision sur une personne'],
                ['Juridique et conformité', 'Résumer un texte public et lister les questions à poser à un professionnel', 'Résumé et liste de questions', 'Lecture du texte lui-même, aucun avis pris pour définitif'],
                ['Informatique', 'Faire expliquer et corriger un script fictif sans donnée réelle', 'Explication ligne par ligne et proposition de correction', 'Exécution dans un environnement de test, aucune clé ni adresse interne collée'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que dit la politique de confidentialité de DeepSeek, et pourquoi la lire avant tout usage ?',
            'intro' => 'La formation fait lire le texte de l\'éditeur en groupe, phrase par phrase. Voici ce que la version consultée le 26 octobre 2026 (mise à jour indiquée : 10 février 2026) énonce. Elle peut changer : le texte officiel prévaut.',
            'items' => [
                ['titre' => 'Ce qui est collecté', 'texte' => 'La politique cite les données de compte, les contenus saisis (demandes, fichiers envoyés, retours, historique des conversations), des données techniques (appareil, réseau, journaux d\'usage) et une localisation approximative déduite de l\'adresse IP.'],
                ['titre' => 'Où les données sont traitées', 'texte' => 'Le texte indique, en anglais : « we directly collect, process and store your Personal Data in People\'s Republic of China ». C\'est ce que dit la politique, sans jugement : la décision de l\'entreprise s\'appuie dessus, avec son juriste.'],
                ['titre' => 'Combien de temps', 'texte' => 'La politique indique que les données personnelles sont conservées tant que le compte existe, et qu\'elles peuvent l\'être plus longtemps pour des démarches juridiques, des intérêts légitimes de l\'éditeur ou en cas de violation de la politique. L\'utilisateur peut gérer ou supprimer son historique dans les paramètres.'],
                ['titre' => 'Usage pour améliorer les modèles', 'texte' => 'La politique indique que les données servent à entraîner et améliorer les technologies de l\'éditeur. Elle mentionne le droit de s\'opposer à cet usage et indique que la demande se fait par courrier électronique à l\'adresse privacy@deepseek.com.'],
                ['titre' => 'Partages', 'texte' => 'Les données peuvent être partagées avec des prestataires et des entités du groupe, communiquées aux autorités dans des cas limités et, en cas d\'opération d\'entreprise, à des tiers concernés. Pour les services de recherche tiers, les mots-clés saisis sont transmis. Un dialogue partagé sur un réseau public peut, selon le texte, être obtenu par des tiers par des moyens techniques comme les robots d\'exploration.'],
                ['titre' => 'Données sensibles', 'texte' => 'Le texte énonce, en anglais : « We do not ask for, and you should not provide sensitive Personal Data to the Services ».'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent les conditions d\'utilisation sur la responsabilité de l\'entreprise ?',
            'paragraphes' => [
                'Les conditions d\'utilisation consultées (mise à jour indiquée : 27 mars 2026) posent que l\'utilisateur est responsable de tout ce qu\'il saisit et des réponses correspondantes. Elles précisent que les réponses sont produites par une IA, peuvent comporter des erreurs ou des omissions, sont fournies à titre indicatif et ne constituent pas un conseil professionnel. Pour les décisions qui ont un effet juridique ou important sur des personnes, elles prévoient une relecture humaine des réponses.',
                'Elles indiquent aussi que l\'éditeur cède à l\'utilisateur les droits qu\'il détient, le cas échéant, sur les réponses, que d\'autres utilisateurs peuvent obtenir des réponses semblables, et que le texte est régi par le droit de la République populaire de Chine continentale. Ces points sont pour l\'entreprise des éléments de décision : la formation les fait relever dans la politique d\'usage de l\'équipe, et les envoie vers un juriste quand le sujet dépasse l\'usage courant.',
                'Retenez la règle de travail qui en découle : l\'entreprise reste responsable de ce qu\'elle saisit, de ce qu\'elle envoie à un client et de ce qu\'elle décide. L\'outil n\'assume rien à sa place.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles informations ne faut-il jamais saisir dans DeepSeek ?',
            'items' => [
                'Le nom, le téléphone, l\'adresse ou la situation d\'un client, d\'un salarié, d\'un patient, d\'un élève ou d\'un bénéficiaire.',
                'Un contrat, une offre commerciale ou une grille de prix qui n\'est pas publique.',
                'Des identifiants, des mots de passe, des clés d\'accès, des numéros de compte ou de carte.',
                'Du code source propriétaire, des adresses de serveurs internes ou des extraits de base de données réels.',
                'Des informations stratégiques non annoncées : fusion, levée de fonds, recrutement, résultats avant publication.',
                'Un dossier juridique, médical ou disciplinaire concernant une personne nommée.',
                'Des voix ou des photos de personnes identifiables, alors que le service accepte ces contenus.',
                'Tout document classé « jamais » dans le classement de l\'entreprise.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Application, API ou modèle hébergé par l\'entreprise : quelle voie pour quelles données ?',
            'legende' => 'Repères travaillés en formation à partir de la politique de confidentialité, de la documentation de l\'API et de la page du dépôt DeepSeek-V3, consultées le 26 octobre 2026. Ce tableau aide à poser les questions ; il ne remplace ni l\'avis d\'un juriste ni un audit de sécurité.',
            'entetes' => ['Voie', 'Ce que décrit l\'éditeur ou le dépôt', 'Ce qu\'elle change pour les données', 'Ce que l\'entreprise doit encore décider'],
            'lignes'  => [
                ['Application ou site de l\'éditeur', 'Assistant en ligne ; les contenus saisis et l\'historique sont collectés et conservés tant que le compte existe', 'Les saisies sont traitées par l\'éditeur, selon sa politique, y compris en Chine', 'Quels usages sont permis, avec quels comptes, sur quels appareils'],
                ['API de l\'éditeur', 'Interface compatible avec des formats courants ; mode de réflexion ; limites de simultanéité par compte', 'Les requêtes passent par les services de l\'éditeur ; lire la politique applicable à la plateforme ouverte', 'Qui crée les clés, où elles sont stockées, ce que les programmes envoient'],
                ['Modèle à poids ouverts hébergé en propre', 'Poids publiés pour des versions du modèle, avec un code sous licence MIT et une licence de modèle distincte qui, selon la page, autorise l\'usage commercial', 'Les données restent dans l\'infrastructure choisie par l\'entreprise, sous sa responsabilité', 'Serveurs, compétences, sécurité, mises à jour, lecture de la licence'],
                ['Modèle hébergé par un prestataire choisi', 'Dépend de ce prestataire et de son contrat', 'À lire dans le contrat et la politique du prestataire, pas dans celle de DeepSeek', 'Pays d\'hébergement, sous-traitants, durée de conservation, réversibilité'],
                ['Aucun usage', 'Option légitime', 'Aucune donnée n\'est transmise', 'Quel autre outil couvre le besoin, par exemple un assistant sur compte d\'entreprise'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Les poids ouverts suffisent-ils à garantir la confidentialité des données ?',
            'paragraphes' => [
                'Non, et la formation insiste sur cette nuance. La page du dépôt DeepSeek-V3 indique que les poids de ce modèle sont disponibles au téléchargement, que le code est sous licence MIT et que le modèle est régi par une licence séparée qui, d\'après la page, permet l\'usage commercial. Le modèle y est décrit comme un modèle à experts multiples de 671 milliards de paramètres au total, dont 37 milliards sont activés pour chaque unité de texte. Un tel modèle demande des moyens de calcul importants : la page liste plusieurs environnements de déploiement, et sa démonstration indique fonctionner sous Linux.',
                'Ce que les poids ouverts permettent, c\'est de ne pas envoyer ses données à l\'éditeur : l\'entreprise, ou un prestataire qu\'elle choisit, fait tourner le modèle chez elle. Ce qu\'ils ne garantissent pas, c\'est la sécurité de l\'ensemble. Un serveur mal protégé, des journaux conservés sans limite, des accès trop larges ou un prestataire d\'hébergement mal choisi recréent le risque sous une autre forme. L\'entreprise devient responsable de ce qu\'elle héberge, de ses sauvegardes et de ses mises à jour.',
                'La formation ne promet donc pas qu\'un hébergement propre soit possible, utile ou rentable pour votre entreprise. Elle donne les questions à poser avant d\'en discuter avec des spécialistes : quels volumes, quelles données, quels profils pour exploiter la machine, quel coût total, quelle alternative plus simple. Pour beaucoup de PME, la réponse sera de ne pas saisir de données sensibles dans un service tiers et d\'utiliser des textes publics ou anonymisés, ce qui suffit à de nombreuses tâches.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment décider si DeepSeek entre dans les outils autorisés de l\'entreprise ?',
            'items' => [
                ['titre' => 'Lister les usages réels', 'texte' => 'Qui a déjà utilisé DeepSeek, pour quoi faire, avec quelles données ? Les réponses au questionnaire d\'avant session servent de point de départ, sans reproche : l\'objectif est de voir ce qui existe.', 'duree' => '30 min'],
                ['titre' => 'Classer les données', 'texte' => 'Appliquer les trois familles (saisie possible, anonymisation d\'abord, jamais) aux documents de chaque service. Cet exercice détermine à lui seul la plupart des décisions.', 'duree' => '45 min'],
                ['titre' => 'Lire les textes de l\'éditeur', 'texte' => 'Politique de confidentialité, conditions d\'utilisation et, pour l\'API, documentation. Chaque participant relève ce qui concerne son service : lieu de traitement, conservation, usage pour améliorer les modèles.', 'duree' => '45 min'],
                ['titre' => 'Confronter au droit applicable', 'texte' => 'Au Bénin, la loi sur le numérique ; en Europe, le RGPD. L\'équipe note les questions à poser à un juriste, par exemple sur le transfert de données hors du pays. La formation ne tranche pas.', 'duree' => '30 min'],
                ['titre' => 'Comparer les voies', 'texte' => 'Application, API, hébergement par l\'entreprise ou prestataire, autre outil, ou aucun. Pour chaque tâche, on retient la voie qui expose le moins de données pour un résultat suffisant.', 'duree' => '45 min'],
                ['titre' => 'Écrire la règle et nommer un référent', 'texte' => 'Un texte d\'une page : usages permis, usages interdits, comptes autorisés, relecture obligatoire, personne à consulter en cas de doute. Elle est revue quand l\'éditeur change ses textes.', 'duree' => '45 min'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que fait-on concrètement avec le mode de réflexion et l\'API ?',
            'intro' => 'Pour les équipes techniques, la formation s\'appuie sur la documentation de l\'éditeur consultée le 26 octobre 2026. Les noms de paramètres et de modèles évoluent ; la page officielle fait foi.',
            'items' => [
                ['titre' => 'Activer ou non la réflexion', 'texte' => 'La documentation décrit un paramètre qui active ou désactive le mode de réflexion et un niveau d\'effort réglable. Le même prompt est essayé dans les deux modes sur un problème fictif, pour comparer qualité, longueur et temps d\'attente.'],
                ['titre' => 'Lire le raisonnement à part', 'texte' => 'La réponse finale et le raisonnement arrivent dans deux champs distincts. Le raisonnement sert à relire et à corriger la demande, il ne se transmet pas tel quel à un client.'],
                ['titre' => 'Paramètres sans effet', 'texte' => 'La documentation indique que certains réglages de variation de la réponse n\'ont pas d\'effet en mode de réflexion et ne provoquent pas d\'erreur. On apprend à ne pas conclure de leur absence d\'effet qu\'ils sont pris en compte.'],
                ['titre' => 'Appels d\'outils', 'texte' => 'Quand le modèle appelle des outils, la documentation demande de renvoyer le raisonnement des tours précédents à chaque requête, faute de quoi l\'API renvoie une erreur. Un point de vigilance pour les développeurs.'],
                ['titre' => 'Limites de simultanéité', 'texte' => 'D\'après la documentation, les limites s\'appliquent par compte et par modèle, et une demande d\'extension est possible. Leurs valeurs changent ; on prévoit dans tout programme la gestion des erreurs et des attentes.'],
                ['titre' => 'Ce que le programme envoie', 'texte' => 'Avant de brancher un outil à l\'API, on écrit ce qu\'il transmet : champs, fichiers, journaux. Une clé d\'accès ne se colle jamais dans une conversation et ne se range pas dans un dépôt de code partagé.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passent les séances DeepSeek : taille du groupe, exercices, supports ?',
            'intro' => 'La formation s\'appuie sur les tâches réelles de l\'équipe, traitées avec des textes publics ou fictifs, pas sur des démonstrations de vitrine.',
            'items' => [
                ['titre' => 'Préparation', 'texte' => 'Un questionnaire avant la session recense les usages existants, les comptes et les attentes. Un ou deux entretiens de cadrage fixent les tâches visées et les règles de données, et peuvent conclure qu\'un atelier plus court suffit.'],
                ['titre' => 'Des groupes réduits', 'texte' => 'Plafond de 10 participants sur les deux jours, 12 pour l\'atelier, 8 en séance à distance : au-delà, relire les demandes et les réponses de chacun devient impossible pour le formateur.'],
                ['titre' => 'Pratique', 'texte' => 'Une démonstration, puis un exercice que chacun fait seul, puis une relecture croisée : on rejoue un calcul ou on retrouve la source d\'une affirmation. La lecture des textes de l\'éditeur se fait en groupe.'],
                ['titre' => 'Documents d\'exercice', 'texte' => 'Le choix des documents se fait avec l\'équipe et ils sont copiés sur chaque poste en amont, afin que la séance ne dépende pas du débit. En cas de coupure, un plan B existe.'],
                ['titre' => 'Supports remis', 'texte' => 'Le programme, les supports de la session, la grille de lecture de la politique de confidentialité, l\'arbre de décision des voies d\'usage et le modèle de règle écrite de l\'équipe.'],
                ['titre' => 'Formats', 'texte' => 'Chez vous, en session partagée entre structures, à distance ou en mixte : mêmes exercices, organisation différente.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels usages de DeepSeek selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Cabinet comptable ou de conseil, à Cotonou, Abidjan ou Dakar', 'probleme' => 'Un collaborateur a essayé DeepSeek pour résumer un dossier client. Personne n\'a vérifié où partent les données ni ce que dit la politique de l\'éditeur.', 'solution' => 'Lecture commune de la politique, classement des documents en trois familles, interdiction écrite de saisir un dossier client, et usage limité à des textes publics ou anonymisés pour la rédaction et la structuration.'],
                ['secteur' => 'PME informatique ou agence web, au Bénin, au Togo ou au Cameroun', 'probleme' => 'Les développeurs utilisent des assistants de code pour aller plus vite et collent parfois du code propriétaire ou des clés d\'accès.', 'solution' => 'Règle écrite sur ce qui ne sort jamais (clés, adresses internes, code client), tests systématiques de tout code proposé, et choix de la voie (application, API ou hébergement propre) selon la sensibilité du projet.'],
                ['secteur' => 'Banque, assurance ou microfinance', 'probleme' => 'La direction veut savoir si un modèle de raisonnement peut aider à analyser des dossiers sans exposer les données des clients.', 'solution' => 'La formation sépare les usages sur textes publics (veille, rédaction de notes) des usages sur dossiers, qui demandent une analyse juridique et technique avant tout test. Aucune décision sur une personne n\'est confiée à l\'outil.'],
                ['secteur' => 'Cabinet, PME ou administration en France, en Belgique ou en Suisse', 'probleme' => 'Le RGPD s\'applique aux données des clients et des salariés ; l\'équipe doit expliquer à sa direction pourquoi un service qui traite ses données en Chine appelle une analyse préalable.', 'solution' => 'Séances à distance, lecture de la politique de l\'éditeur, liste de questions pour le délégué à la protection des données, et règle d\'usage limitée aux contenus sans donnée personnelle.'],
                ['secteur' => 'Entreprise ou organisme au Canada', 'probleme' => 'Les équipes veulent comparer plusieurs assistants en français et en anglais sans multiplier les comptes et les risques.', 'solution' => 'Même exercice joué sur plusieurs assistants avec des textes publics, comparaison des résultats, et décision par service de l\'outil autorisé, avec avis du service juridique.'],
                ['secteur' => 'Écoles, universités et centres de formation', 'probleme' => 'Enseignants et étudiants utilisent DeepSeek pour des devoirs, des cours et des corrections, avec des copies et des noms d\'élèves.', 'solution' => 'Aucune donnée d\'élève n\'est saisie, les raisonnements sont lus en cours comme des objets d\'analyse (où est l\'erreur ?), et la règle de l\'établissement fixe ce qui est permis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Atelier, parcours complet, distance ou hybride : lequel choisir pour DeepSeek ?',
            'legende' => 'Combinaison possible : l\'atelier pour les décideurs, puis le parcours complet pour une équipe pilote.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction appelée à trancher sur DeepSeek, ou une équipe novice en modèles de raisonnement'],
                ['Parcours complet, intra', '2 jours, en 4 demi-journées', '10 personnes au plus', 'Une équipe qui veut des habitudes communes et des règles de données écrites'],
                ['Session partagée, inter', '1 à 2 jours', 'Plusieurs structures d\'un même réseau', 'Un ou deux participants par organisation, avec des textes publics ou fictifs en exercice'],
                ['Visioconférence', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Collaborateurs dispersés entre sites ou pays'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Démarrage en salle, suite en ligne sur les tâches du quotidien'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel budget prévoir pour la formation DeepSeek, et quels modes de paiement ?',
            'intro'      => 'Tout se chiffre sur devis, une fois le cadrage fait, poste par poste. Paiement possible par Mobile Money (MTN, Moov), carte, PayPal, virement ou espèces. Un abonnement DeepSeek ou la facture d\'API éventuelle reste au nom de l\'entreprise, hors du tarif de la formation. Les tarifs de l\'éditeur évoluent ; sa page officielle fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur vos questions', 'Lecture des textes de l\'éditeur', 'Classement des données', 'Conseil sur la suite à donner']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Exercices sur textes publics ou fictifs', 'Mode de réflexion, aide de code légère et choix des voies d\'usage', 'Règle écrite de l\'équipe']],
            ],
            'variations' => [
                'Effectif et nombre de groupes.',
                'Formule choisie et nombre de demi-journées.',
                'Temps passé à préparer les exercices DeepSeek.',
                'Lieu : vos locaux, une salle louée, ou un déplacement hors de Cotonou ou du Bénin.',
                'Présence sur place, visioconférence ou mélange des deux.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue finance-t-il la session DeepSeek ?',
            'paragraphes' => [
                'Tout dépend du dispositif et de votre situation ; rien n\'est garanti d\'avance. Plusieurs pays ont un fonds de formation continue pour les entreprises du secteur privé : le FDFP en Côte d\'Ivoire, le 3FPT au Sénégal, le FODEFCA au Bénin, les opérateurs de compétences (OPCO) en France. Chacun fixe ses conditions, ses formulaires et ses exigences envers l\'organisme de formation.',
                'Avant de signer, écrivez au fonds en joignant le programme et le devis. Richard SALANON n\'affiche ni certification de qualité ni agrément reconnu par ces fonds : à vous de faire confirmer qu\'un financement est encore envisageable, et de bâtir votre budget sans lui si la décision en dépend.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui est responsable de ce que DeepSeek a affirmé ou fait avec vos données ?',
            'texte' => 'Toujours l\'entreprise, et la personne qui s\'appuie sur la réponse ou qui a saisi la donnée. Les conditions de l\'éditeur le disent pour les contenus et les réponses, et une réponse exacte en apparence peut rester fausse. L\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu\'une entreprise répond de ce que dit son assistant. La formation fait de la relecture humaine un geste obligatoire avant tout envoi, toute décision et toute saisie de donnée.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels réflexes se perdent un mois après, et comment les garder avec DeepSeek ?',
            'intro' => 'Le vrai test arrive un mois après : que fait encore l\'équipe ? Voici les glissements fréquents avec DeepSeek, à prévenir dès les séances.',
            'items' => [
                ['titre' => 'Utiliser son compte personnel pour le travail', 'texte' => 'Un collaborateur saisit des documents de l\'entreprise dans son compte privé, hors de toute règle. La règle écrite nomme les comptes autorisés et interdit les autres pour les données de l\'entreprise.'],
                ['titre' => 'Prendre le raisonnement pour une preuve', 'texte' => 'Une suite d\'étapes cohérente rassure. On refait le chiffre clé hors de l\'outil, et on demande les hypothèses.'],
                ['titre' => 'Coller du code, des clés ou des adresses internes', 'texte' => 'Sous la pression d\'un délai, on colle un extrait réel. La liste des éléments qui ne sortent jamais reste affichée près des postes techniques.'],
                ['titre' => 'Croire que « poids ouverts » veut dire « sans risque »', 'texte' => 'Héberger soi-même déplace la responsabilité vers l\'entreprise. On étudie serveurs, accès, journaux et mises à jour avant de promettre quoi que ce soit.'],
                ['titre' => 'Ne pas relire les textes de l\'éditeur', 'texte' => 'Politique et conditions sont mises à jour. Le référent les relit à date fixe et prévient l\'équipe de tout changement.'],
                ['titre' => 'Partager une conversation par lien', 'texte' => 'La politique avertit qu\'un dialogue publié sur un réseau public peut être obtenu par des tiers, par exemple par des robots d\'exploration. On partage avec des personnes nommées, ou on copie le texte utile dans un document de l\'entreprise.'],
                ['titre' => 'Confier une décision sur une personne à l\'outil', 'texte' => 'Recrutement, sanction, crédit : les conditions de l\'éditeur demandent une relecture humaine. L\'outil prépare, la personne décide et assume.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'L\'application et l\'API de l\'éditeur fonctionnent en ligne, et le mode de réflexion allonge le temps d\'attente. Une connexion peut couper ou ralentir. Les documents d\'exercice sont téléchargés sur chaque poste avant la session, avec un plan B si la ligne tombe. La documentation de l\'API précise elle-même que les réponses peuvent être retardées, la connexion restant ouverte pendant l\'attente.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre les données personnelles. Saisir une donnée personnelle dans un service dont les serveurs sont situés à l\'étranger est un traitement qui doit respecter ce cadre. Cette fiche n\'a lu que le titre et la date du texte sur le site du Secrétariat général du Gouvernement et ne cite aucun article : elle ne donne pas d\'avis juridique. En cas de doute, l\'entreprise s\'adresse à l\'autorité compétente et à son conseil.',
                'En Europe, le RGPD s\'applique aux mêmes gestes. La <a href="https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en">Commission européenne</a> rappelle que sont des données personnelles celles qui concernent une personne identifiée ou identifiable, que des données pseudonymisées permettant de réidentifier une personne restent soumises au règlement et que l\'anonymisation doit être irréversible. La page lue ne traite pas des transferts hors de l\'Union : cette question se pose à un juriste ou au délégué à la protection des données. Remplacer un nom par un code ne suffit donc pas toujours.',
                'La langue joue aussi : les assistants répondent en français, mais leur qualité varie selon le sujet et le pays. La formation fait relire par un locuteur du métier tout texte destiné à un client, en particulier dans une langue nationale. Pour aller plus loin sur les obligations, voyez la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la formation DeepSeek de vos équipes à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'DeepSeek figure parmi les outils d\'IA qu\'il enseigne ; il en intègre aussi dans les logiciels de ses clients. On lui doit <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle, et il co-fonde <a href="https://audyxa.com">Audyxa</a>. Son bagage : plus de ' . $ans . ' ans d\'expérience, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées, un passage à EPITECH en 2022.',
                'Sa façon de former tient en quelques règles : lire les textes de l\'éditeur avec l\'équipe plutôt que les résumer à sa place, des exercices sur des textes publics ou fictifs, des supports qui restent à l\'entreprise, et aucune promesse de résultat. Aucun éditeur ne l\'a certifié et il ne représente pas DeepSeek : il forme à un outil du marché, et le cadrage peut aboutir à un autre outil, voire à aucun. Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a> ; la liste des pays figure dans les <a href="/zones/">zones d\'intervention</a>.',
                'Héberger un modèle DeepSeek ou relier l\'IA à vos logiciels dépasse la formation et constitue une <a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. Les autres formations du domaine sont réunies sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Décidez des données avant de décider de l\'outil : classez les informations, lisez la politique de confidentialité et les conditions de l\'éditeur le jour de la décision, faites refaire à la main les chiffres que l\'assistant produit, et ne confiez jamais de donnée sensible à un service tiers sans avis écrit de votre juriste. Les tarifs et les noms de modèles évoluent ; la page officielle fait foi.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe à DeepSeek et fixer vos règles de données ?',
            'texte'  => 'Précisez l\'effectif, les postes, les usages DeepSeek déjà en place, vos contraintes de données et la formule voulue. Réponse sous 24 heures, puis proposition et devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation DeepSeek'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il être technicien pour suivre la formation DeepSeek ?', 'r' => 'Pas pour le tronc commun : DeepSeek se pilote par écrit, en français. Les parties sur l\'API et le code léger s\'adressent surtout aux équipes techniques, et chacun peut les suivre à son niveau.'],
        ['q' => 'Où DeepSeek traite-t-il les données que l\'on saisit ?', 'r' => 'D\'après la politique de confidentialité consultée le 26 octobre 2026, l\'éditeur collecte, traite et conserve les données personnelles en République populaire de Chine. Le texte officiel prévaut et peut changer ; la formation le fait lire en groupe.'],
        ['q' => 'DeepSeek utilise-t-il nos saisies pour entraîner ses modèles ?', 'r' => 'La politique indique que les données servent à entraîner et améliorer les technologies de l\'éditeur, et mentionne le droit de s\'y opposer, par une demande envoyée par courrier électronique à l\'éditeur. Pour des données sensibles, la règle de la formation est de ne pas les saisir.'],
        ['q' => 'Peut-on saisir des données clients dans DeepSeek ?', 'r' => 'La formation recommande que non, sauf avis écrit de votre juriste ou de votre délégué à la protection des données. La politique elle-même précise que l\'éditeur ne demande pas de données personnelles sensibles et qu\'il ne faut pas lui en fournir. Les exercices utilisent des textes publics ou fictifs.'],
        ['q' => 'Que signifie « poids ouverts » pour mon entreprise ?', 'r' => 'Que les paramètres de certains modèles sont publiés et peuvent être exécutés ailleurs que chez l\'éditeur, sous licence. Cela permet d\'héberger le modèle soi-même, mais demande des moyens importants et ne garantit pas la sécurité. Rien n\'est promis sur la faisabilité chez vous.'],
        ['q' => 'Qu\'est-ce que le mode de réflexion de DeepSeek ?', 'r' => 'La documentation de l\'API le décrit comme une chaîne de raisonnement produite avant la réponse finale et renvoyée dans un champ séparé. Il peut aider sur les problèmes à plusieurs étapes, mais un raisonnement bien écrit peut mener à un résultat faux : on refait les chiffres clés.'],
        ['q' => 'La formation couvre-t-elle l\'API et le code ?', 'r' => 'Oui, à un niveau d\'introduction : activer la réflexion, lire le raisonnement, comprendre les limites de simultanéité, savoir ce qu\'un programme envoie, et tester le code proposé. Les montages d\'intégration complets relèvent d\'une mission distincte.'],
        ['q' => 'La formation aide-t-elle à héberger un modèle chez nous ?', 'r' => 'Elle donne les questions à poser (moyens de calcul, sécurité, licence, compétences, coût total) mais n\'installe rien. L\'hébergement ou l\'intégration relève d\'une mission d\'intégration de l\'IA, après étude de votre cas.'],
        ['q' => 'Faut-il un abonnement ou un compte avant la session ?', 'r' => 'Non. Les exercices utilisent des textes publics ou fictifs, et la formation n\'exige aucun compte personnel. Les conditions et les tarifs évoluent ; la page officielle de l\'éditeur fait foi.'],
        ['q' => 'La formation couvre-t-elle aussi ChatGPT, Claude ou Gemini ?', 'r' => 'Non, elle se concentre sur DeepSeek. L\'usage quotidien des autres assistants est traité dans la formation IA en entreprise ; un comparatif aide à choisir entre assistants.'],
        ['q' => 'Quelle taille de groupe pour la formation DeepSeek ?', 'r' => 'Le plafond est de 10 pour les deux jours, 12 pour l\'atelier découverte et 8 pour une séance à distance.'],
        ['q' => 'Peut-on suivre toute la formation DeepSeek en ligne ?', 'r' => 'Oui : cinq à six visioconférences de deux heures et demie. Chacun doit disposer d\'une connexion stable ; les documents sont récupérés avant la séance et un plan B couvre une coupure.'],
        ['q' => 'Quel est le tarif de la formation DeepSeek ?', 'r' => 'Sur devis, une fois le cadrage terminé : effectif, formule, préparation, lieu et mode entrent dans le calcul. Paiement par Mobile Money, carte, PayPal, virement ou espèces.'],
        ['q' => 'Un fonds de formation continue peut-il payer ?', 'r' => 'Chaque fonds a ses règles et rien n\'est garanti. Faute de certification de qualité ou d\'agrément affiché par Richard SALANON, écrivez au fonds avec programme et devis avant de signer.'],
        ['q' => 'Richard SALANON est-il certifié par DeepSeek ?', 'r' => 'Non : aucun éditeur ne l\'a certifié et il ne représente pas DeepSeek. Pour lui, c\'est un outil du marché ; l\'entreprise tranche sur son usage.'],
    ],

    'sources' => [
        ['titre' => 'DeepSeek, politique de confidentialité (mise à jour du 10 février 2026)', 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-26'],
        ['titre' => 'DeepSeek, conditions d\'utilisation (mise à jour du 27 mars 2026)', 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-terms-of-use.html', 'date' => '2026-10-26'],
        ['titre' => 'Documentation de l\'API DeepSeek, présentation et modèles', 'url' => 'https://api-docs.deepseek.com/', 'date' => '2026-10-26'],
        ['titre' => 'Documentation de l\'API DeepSeek, mode de réflexion', 'url' => 'https://api-docs.deepseek.com/guides/thinking_mode', 'date' => '2026-10-26'],
        ['titre' => 'Documentation de l\'API DeepSeek, limites de simultanéité', 'url' => 'https://api-docs.deepseek.com/quick_start/rate_limit', 'date' => '2026-10-26'],
        ['titre' => 'DeepSeek-V3, dépôt officiel (poids, licences, déploiement)', 'url' => 'https://github.com/deepseek-ai/DeepSeek-V3', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, la protection des données expliquée (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'prompt-engineering', 'ia-ethique-conformite', 'ia-generative-dirigeants', 'agents-ia-assistants', 'rag-chatbot-documents'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
