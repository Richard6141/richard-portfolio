<?php
// ============================================================
// data/domaines/automatisation.php · Page domaine « Automatisation »
// (vague 1B). Aide à choisir entre les six formations du domaine : n8n et
// whatsapp-business (publiées le 2026-10-05, liées dans le texte) ; n8n-avance,
// make, chatbot-whatsapp et integrations-api-no-code (publiées le 2026-10-12,
// citées par leur nom sans lien, reliées par le champ « liens »). Le gabarit
// affiche en tête une carte par formation publiée : la page ne refait pas la
// liste. Sources officielles consultées le 2026-10-05 ; tarifs WhatsApp de Meta
// repris des faits vérifiés du catalogue (page lue dans un navigateur).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations en automatisation : choisir entre n8n, Make, les API et WhatsApp selon votre poste et vos outils',
    'title'   => 'Formations en automatisation et WhatsApp | Richard SALANON',
    'meta'    => 'Six formations pour automatiser sans coder : n8n, Make, API, WhatsApp Business et chatbot. Comparez publics et prérequis, puis suivez votre parcours.',
    'en_bref' => 'Le domaine Automatisation réunit six formations : n8n de zéro à l\'autonomie, n8n avancé, Make, WhatsApp Business pour vendre, chatbot et API WhatsApp Business, et intégrations API sans coder. Elles s\'adressent aux commerçants, aux assistantes et gestionnaires, aux responsables informatiques et aux équipes de service client qui perdent du temps à ressaisir, relancer ou répondre aux mêmes questions. Cette page compare leurs publics et leurs prérequis et propose un parcours par poste ; toutes existent en intra-entreprise, en inter-entreprises, à distance ou en formule hybride, sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '6 : n8n, n8n avancé, Make, WhatsApp Business, chatbot WhatsApp, intégrations API'],
        ['l' => 'Publics', 'v' => 'Commerçants, assistantes et gestionnaires, responsables informatiques, service client'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change l\'automatisation pour une entreprise, et que ne règle-t-elle pas ?',
            'paragraphes' => [
                'Dans beaucoup de PME, une part des journées part dans des gestes que personne n\'a choisis : recopier dans un tableur une commande reçue sur WhatsApp, renvoyer à la main le même rappel de paiement, déplacer une pièce jointe de la messagerie vers un dossier partagé, répondre vingt fois au même « c\'est combien ? ». Les six formations de ce domaine apprennent à confier ces gestes à un outil, et surtout à garder la main sur ce que l\'outil fait. Elles forment deux familles : les outils qui relient vos logiciels entre eux, n8n, Make et les API, et WhatsApp, le canal sur lequel beaucoup de clients écrivent déjà.',
                'Quand l\'automatisation est bien apprise, une information n\'est plus saisie qu\'une fois, une relance part à l\'heure prévue même si la collègue qui l\'envoyait est en congé, et le client qui écrit à 22 heures reçoit au moins une réponse utile. Un autre changement compte autant, et on l\'oublie souvent : une personne de l\'équipe sait lire ce qui tourne, le corriger et l\'arrêter. Un flux que personne ne comprend n\'est pas un gain de temps, c\'est une panne différée.',
                'L\'automatisation ne répare pas un processus mal défini : elle l\'exécute plus vite, avec les mêmes défauts. Elle ne corrige pas non plus un fichier de clients aux numéros incomplets, ni un désaccord entre services sur qui valide une remise. Ces sujets se traitent avant ou à côté de la formation, par exemple dans une mission de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a>. Et si vous voulez que les flux soient construits pour vous plutôt que par vous, c\'est le service d\'<a href="/services/automatisation-ia">automatisation des processus</a>, ou l\'<a href="/services/integration-whatsapp">intégration de WhatsApp</a> à vos logiciels, qui répond au besoin.',
                'WhatsApp et les outils d\'automatisation partagent ce domaine parce qu\'un message est souvent le point de départ ou d\'arrivée d\'un flux : une commande arrive, une confirmation repart. Le domaine suit ce chemin. On maîtrise d\'abord l\'application à la main, on apprend ensuite à relier ses outils, puis on laisse un robot répondre par la plateforme officielle de Meta. Brancher WhatsApp sur un ERP comme Odoo ou Dolibarr, ou sur un CRM, appartient à un domaine voisin, <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>, qui part du logiciel de gestion plutôt que du message.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui, dans l\'entreprise, doit se former à l\'automatisation, et qui peut s\'en passer ?',
            'intro' => 'Former toute une équipe à n8n ou à l\'API de WhatsApp dilue l\'effort. Le bon groupe réunit les personnes qui font le geste répétitif, celles qui le surveilleront, et celles qui décident.',
            'items' => [
                ['titre' => 'La personne qui ressaisit', 'texte' => 'Elle passe ses fins de journée à recopier des lignes d\'un outil à l\'autre. C\'est elle qu\'il faut former en premier, parce qu\'elle connaît les exceptions : le client sans adresse, la facture en deux fois, le bon de commande raturé. Un flux construit sans elle oubliera ces cas et cassera dès la deuxième semaine.'],
                ['titre' => 'La personne qui répond aux clients', 'texte' => 'Vendeuse, conseiller du service client, secrétaire d\'un cabinet : elle sait quelles questions reviennent et dans quels mots. Ses réponses deviennent les réponses rapides de WhatsApp Business, puis le script d\'un robot. Sans elle, le robot répond juste, mais pas comme votre maison.'],
                ['titre' => 'Le référent technique', 'texte' => 'Il administre les comptes, crée les accès, sait où tourne chaque outil et qui prévenir quand il s\'arrête. Il n\'est pas forcément informaticien : dans une petite structure, c\'est souvent la personne la plus à l\'aise avec les ordinateurs. Il suit le parcours jusqu\'au niveau avancé.'],
                ['titre' => 'Le dirigeant', 'texte' => 'Il n\'a pas besoin de construire de flux. Il doit savoir ce qui tourne en son nom, ce que cela coûte chaque mois, quelles données sortent de l\'entreprise et qui en répond. Une demi-journée de découverte suffit souvent pour trancher et pour nommer le référent.'],
                ['titre' => 'Ceux qui peuvent s\'en passer', 'texte' => 'Les collègues dont le travail n\'a rien de répétitif, ou qui reçoivent seulement le résultat d\'un flux, comme le commercial qui lit un rapport arrivé chaque lundi. Une note d\'une page sur ce qui est automatisé leur suffit.'],
                ['titre' => 'Le prestataire, s\'il y en a un', 'texte' => 'Quand un prestataire construit vos flux, formez au moins une personne interne à les lire et à les arrêter. Si le prestataire disparaît un jour, cette personne évite que tout s\'arrête sans que personne sache pourquoi.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Six formations, six usages : laquelle répond au besoin de votre équipe ?',
            'legende' => 'Une ligne par formation : le public visé, les compétences acquises et les acquis à avoir avant l\'inscription. n8n et WhatsApp Business sont publiées ; n8n avancé, Make, le chatbot WhatsApp et les intégrations API le seront le 12 octobre 2026.',
            'entetes' => ['Formation', 'Public visé', 'Compétences acquises', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/n8n">n8n de zéro à l\'autonomie</a>', 'Non-développeurs qui recopient des données d\'un outil à l\'autre : assistantes, gestionnaires, comptables, chargés de projet', 'Penser une tâche comme un flux, puis construire, tester, publier et entretenir seul ses premiers flux : déclencheurs, nœuds, données, conditions, erreurs simples', 'Aisance avec un ordinateur, une messagerie et un tableur ; aucune notion de programmation'],
                ['n8n avancé', 'Personnes qui ont déjà des flux n8n en service, référents techniques, responsables informatiques', 'Découper en sous-flux, traiter les erreurs de façon systématique, héberger n8n soi-même, gérer les files d\'exécution, placer l\'IA dans un flux', 'Savoir construire seul un flux n8n complet ; des bases d\'administration de serveur pour la partie hébergement'],
                ['Make de zéro à expert', 'Équipes qui ont retenu Make, ou qui veulent un outil entièrement en ligne, sans serveur à gérer', 'Scénarios, routeurs, itérateurs, et lecture de la consommation pour garder la facture de Make sous contrôle', 'Les mêmes bases que pour n8n, et un compte Make ouvert au nom de l\'entreprise'],
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Commerçants, vendeurs en ligne, prestataires sur rendez-vous, équipes qui partagent un numéro', 'Vendre avec l\'application gratuite : profil, catalogue, réponses rapides, étiquettes, statuts et diffusions dans les règles de WhatsApp', 'Le téléphone et le numéro qui servent réellement à vendre ; aucune compétence technique'],
                ['Chatbot WhatsApp et API WhatsApp Business', 'Équipes de service client, responsables marketing ou techniques dont le volume dépasse ce qu\'un téléphone permet', 'La plateforme officielle de Meta : modèles de messages, coûts facturés par Meta, robot qui répond puis passe la main à un humain', 'Pratiquer déjà l\'application WhatsApp Business, un numéro dédié, l\'accès au compte Meta de l\'entreprise ; les bases de n8n ou de Make aident'],
                ['Intégrations API en no-code et low-code', 'Profils fonctionnels ou techniques qui butent sur un logiciel sans connecteur prêt à l\'emploi', 'Lire une documentation d\'API, s\'authentifier, appeler un service, recevoir un webhook, sans écrire de programme', 'Avoir déjà construit au moins un flux dans n8n ou dans Make'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment trancher quand deux formations du domaine semblent convenir ?',
            'legende' => 'Les hésitations les plus fréquentes au moment de choisir, et la question qui permet de les lever en une phrase.',
            'entetes' => ['Vous hésitez entre', 'La question qui tranche', 'Si la réponse est oui', 'Si la réponse est non'],
            'lignes'  => [
                ['n8n ou Make', 'Votre entreprise utilise-t-elle déjà l\'un des deux, ou un prestataire en a-t-il installé un ?', 'Formez-vous sur celui-là : les flux existants deviennent votre matière d\'exercice', 'Lisez d\'abord le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a>, ou commencez par une demi-journée de découverte avant de choisir'],
                ['n8n de zéro ou n8n avancé', 'Avez-vous construit seul un flux qui tourne en production depuis au moins un mois ?', 'n8n avancé : vous y arriverez avec vos premières pannes réelles, ce qui rend la formation utile', 'n8n de zéro à l\'autonomie : sauter cette étape fait buter sur les items et les expressions'],
                ['WhatsApp Business ou chatbot WhatsApp', 'Recevez-vous plus de conversations qu\'une ou deux personnes ne peuvent en traiter, ou devez-vous envoyer des messages depuis un logiciel ?', 'Chatbot WhatsApp et API, après avoir rédigé vos réponses types dans l\'application', 'WhatsApp Business pour vendre : l\'application gratuite suffit, et ses réponses rapides serviront plus tard de script au robot'],
                ['Intégrations API ou n8n avancé', 'Votre difficulté vient-elle d\'un logiciel précis qu\'aucun connecteur ne relie ?', 'Intégrations API en no-code et low-code', 'n8n avancé, si c\'est la fiabilité ou le volume de vos flux qui pose problème'],
                ['Automatisation ou intelligence artificielle', 'Le geste suit-il une règle stable, sans texte à interpréter ?', 'n8n ou Make, sans IA : une règle stable n\'a pas besoin d\'un modèle de langage', 'La formation <a href="/formations/ia-processus-metier">IA dans les processus métier</a> apprend où placer l\'IA et comment la contrôler'],
                ['WhatsApp seul ou relié à vos logiciels', 'Les commandes reçues doivent-elles arriver dans Odoo, Dolibarr ou un CRM sans ressaisie ?', 'La formation <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>, dans le domaine voisin', 'Les formations de ce domaine suffisent'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel parcours suivre selon votre poste ?',
            'legende' => 'Parcours conseillés pour quatre profils. L\'ordre compte plus que le nombre de formations : chaque étape s\'appuie sur ce que la précédente a mis en place.',
            'entetes' => ['Profil', 'Commencer par', 'Continuer avec', 'Ajouter si besoin', 'Le signal pour l\'étape suivante'],
            'lignes'  => [
                ['Commerçant ou vendeur en ligne', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Chatbot WhatsApp et API WhatsApp Business', '<a href="/formations/e-commerce">Vendre en ligne</a>, ou WhatsApp relié à vos logiciels de gestion', 'Des clients attendent plus d\'une heure aux heures d\'affluence, ou plusieurs vendeurs se disputent le même téléphone'],
                ['Assistante, gestionnaire ou comptable', '<a href="/formations/n8n">n8n de zéro à l\'autonomie</a>, ou Make si l\'entreprise l\'a déjà retenu', 'Intégrations API en no-code et low-code', '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>, à placer avant si vos tableurs sont fragiles', 'Vos premiers flux tournent depuis un mois et vous butez sur un logiciel sans connecteur'],
                ['Responsable informatique', 'n8n de zéro à l\'autonomie, ou directement n8n avancé si des flux sont déjà en service', 'n8n avancé, puis Intégrations API en no-code et low-code', '<a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>', 'Plusieurs services publient des flux sans vue d\'ensemble, ou l\'hébergement de n8n devient une question'],
                ['Équipe de service client', 'WhatsApp Business pour vendre, pour les réponses rapides, les étiquettes et le partage du compte', 'Chatbot WhatsApp et API WhatsApp Business', 'n8n de zéro à l\'autonomie, pour relier les conversations à un tableur ou à un outil de suivi', 'Les mêmes questions reviennent par dizaines chaque jour et le téléphone principal ne suffit plus'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pourquoi ces parcours, et comment les adapter à votre situation ?',
            'intro' => 'Chaque parcours répond à une logique simple : maîtriser le geste à la main, puis l\'automatiser, puis le fiabiliser. Voici ce qui justifie l\'ordre proposé pour chaque profil, et les cas où il vaut mieux le modifier.',
            'items' => [
                ['titre' => 'Le commerçant : vendre avant d\'automatiser', 'texte' => 'Un robot WhatsApp ne fait que répéter ce que la boutique sait déjà dire. Tant que le catalogue est incomplet, que les prix changent sans être mis à jour et que les commandes ne sont pas suivies par étiquettes, l\'API ne ferait qu\'industrialiser le désordre. L\'application gratuite donne aussi la mesure du besoin : si deux vendeurs absorbent le volume avec les réponses rapides, le chatbot peut attendre. On passe à l\'étape suivante quand les clients attendent, pas avant.'],
                ['titre' => 'L\'assistante ou la gestionnaire : un outil, puis les cas difficiles', 'texte' => 'Le premier objectif est un flux réel, publié, qui retire une ressaisie de sa semaine. Le choix entre n8n et Make se fait sur l\'outil que l\'entreprise utilisera, jamais sur la préférence du formateur. Les intégrations API viennent ensuite, quand un logiciel métier n\'a pas de connecteur. Si les tableurs de départ sont mal construits, avec des colonnes fusionnées et des dates saisies comme du texte, mieux vaut commencer par les remettre d\'aplomb.'],
                ['titre' => 'Le responsable informatique : la fiabilité avant le volume', 'texte' => 'Il peut parfois aller vite sur les bases, mais il ne doit pas les sauter : c\'est lui qui répondra aux collègues formés au premier niveau. Son parcours vise l\'exploitation : héberger n8n ou décider de rester sur l\'offre en ligne, surveiller les erreurs, organiser les accès, documenter. Quand l\'entreprise veut ajouter un modèle d\'IA à ses logiciels, la formation sur l\'intégration de l\'IA prend le relais sur les questions d\'API des modèles, de coûts et de sécurité.'],
                ['titre' => 'L\'équipe de service client : un même ton, puis un robot', 'texte' => 'L\'équipe commence par partager un compte avec des règles communes : qui répond, quelles étiquettes, quelles formules. Ces règles deviennent le cahier des charges du robot. La formation au chatbot apprend ensuite ce que coûte chaque type de message chez Meta, comment le robot passe la main à un humain et comment éviter les envois que les clients signalent. Le parcours se complète par n8n quand il faut relier les conversations à un suivi.'],
                ['titre' => 'Et le dirigeant ?', 'texte' => 'Il n\'a pas de parcours propre dans ce domaine. Une demi-journée de découverte de n8n, ou la présence à la dernière séance de son équipe, lui suffit pour comprendre ce qui tourne et ce que cela coûte. Pour décider d\'une stratégie plus large, le domaine <a href="/formations/domaine/transformation-digitale">Transformation digitale</a> est mieux adapté.'],
                ['titre' => 'Quand inverser l\'ordre', 'texte' => 'Une entreprise qui a déjà un prestataire et des flux en production peut commencer par n8n avancé pour son référent, puis former les utilisateurs. Une boutique qui reçoit déjà ses commandes par l\'API de WhatsApp, installée par un tiers, suit la formation au chatbot pour reprendre la main, puis revient aux bases de l\'application si besoin.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que faut-il préparer avant la première séance ?',
            'items' => [
                'La liste de cinq à dix tâches répétitives de chaque participant, avec leur fréquence et le temps qu\'elles prennent par semaine.',
                'Un ordinateur par participant pour n8n, Make et les API ; le téléphone qui sert réellement à vendre pour WhatsApp Business.',
                'Des comptes ouverts au nom de l\'entreprise, jamais au nom personnel du gérant : instance n8n ou essai en ligne, compte Make, compte Meta de l\'entreprise pour l\'API.',
                'Des accès dédiés et limités aux outils à relier : messagerie, tableur, dossier partagé, logiciel métier, créés par le référent avant le premier jour.',
                'Un jeu de données de test, ou une copie anonymisée des vraies données, pour ne jamais écrire à de vrais clients pendant les exercices.',
                'Pour la plateforme WhatsApp, un numéro dédié qui n\'est pas déjà utilisé sur l\'application, et un moyen de paiement enregistré chez Meta si des envois payants sont prévus.',
                'Une connexion de secours, comme un partage de connexion depuis un téléphone, et les supports téléchargés la veille.',
                'Le nom de la personne qui sera responsable des flux après la formation, et une demi-journée bloquée dans son agenda la semaine suivante pour construire le premier flux réel.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Salle, visioconférence ou les deux : quel format pour quelle formation du domaine ?',
            'legende' => 'Les quatre formats existent pour chaque formation du domaine, mais certaines s\'y prêtent mieux. On choisit lors du premier échange, d\'après l\'effectif, l\'éloignement des personnes et la qualité de la connexion.',
            'entetes' => ['Format', 'Ce qu\'il permet', 'Il convient surtout à', 'Sa limite'],
            'lignes'  => [
                ['Intra-entreprise', 'Travailler sur vos outils, vos accès et vos vraies tâches, entre collègues', 'n8n, Make et intégrations API, quand les flux construits doivent tourner dès la semaine suivante ; WhatsApp Business pour une boutique à plusieurs vendeurs', 'Il faut préparer les comptes et les données de test avant le premier jour'],
                ['Inter-entreprises', 'Partager le coût avec d\'autres structures et comparer des pratiques', 'WhatsApp Business pour des commerçants d\'un même marché ou d\'une même association ; découverte de n8n pour des personnes isolées dans leur structure', 'Les exercices se font sur des données de démonstration : personne n\'expose ses clients'],
                ['À distance', 'Réunir des personnes éloignées les unes des autres, en séances courtes', 'n8n, Make et API, qui se pratiquent naturellement sur un écran partagé ; équipes en Europe ou au Canada', 'Plus difficile pour un public peu à l\'aise avec l\'ordinateur ; dépend de la connexion de chacun'],
                ['Hybride', 'Démarrer en salle, puis accompagner la mise en pratique à distance', 'Chatbot WhatsApp et n8n avancé, où la mise en service réelle se fait dans les semaines qui suivent', 'Demande de la régularité entre les séances, sinon l\'élan retombe'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on combiner plusieurs formations du domaine, et à quel rythme ?',
            'paragraphes' => [
                'Oui, et c\'est souvent la meilleure façon de faire, à condition de laisser du temps entre les étapes. Une formation à l\'automatisation ne se juge pas le soir de la séance, mais trois semaines plus tard, quand le premier flux a rencontré une vraie commande, un vrai fichier mal rempli et une vraie coupure. Enchaîner n8n et n8n avancé la même semaine prive le participant de ces pannes, qui sont justement la matière du niveau avancé.',
                'Un rythme raisonnable laisse deux à quatre semaines entre deux formations d\'un même parcours. Pendant cet intervalle, chaque participant met en service ce qu\'il a construit et note ce qui coince. La formation suivante part de ces notes plutôt que d\'exemples génériques. Pour un commerce, cela donne par exemple WhatsApp Business un mois, puis n8n le mois suivant pour produire automatiquement le relevé des commandes du soir, puis l\'API quand le volume l\'exige.',
                'Deux combinaisons reviennent souvent. La première associe WhatsApp Business et n8n pour une petite structure qui vend sur WhatsApp et suit ses ventes dans un tableur. La seconde réunit n8n, Intégrations API en no-code et low-code et n8n avancé pour le référent d\'une entreprise qui veut cesser de dépendre d\'un prestataire. Dans les deux cas, le devis présente un programme d\'ensemble, découpé en sessions datées, plutôt qu\'une suite de commandes séparées.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un parcours d\'automatisation selon le secteur et le pays ?',
            'items' => [
                ['secteur' => 'Boutique de cosmétiques à Cotonou', 'probleme' => 'Les commandes arrivent sur trois téléphones, les prix circulent en photos de cahier, et le soir personne ne sait ce qui a été payé.', 'solution' => 'WhatsApp Business pour toute l\'équipe, avec un catalogue et des étiquettes communes ; un mois plus tard, n8n pour la gérante, qui produit chaque soir le relevé des commandes payées dans un tableur.'],
                ['secteur' => 'Cabinet comptable à Abidjan', 'probleme' => 'Les pièces des clients arrivent par courriel, par WhatsApp et sur clé USB ; deux collaboratrices passent leurs lundis à les classer et à relancer les retardataires.', 'solution' => 'n8n de zéro à l\'autonomie pour les deux collaboratrices, sur une copie anonymisée des dossiers, puis Intégrations API pour relier le logiciel du cabinet quand il n\'a pas de connecteur prêt.'],
                ['secteur' => 'ONG au Sénégal', 'probleme' => 'Les formulaires de terrain remontent dans des tableurs différents selon les régions, et le rapport mensuel au bailleur se reconstruit à la main.', 'solution' => 'Make pour la chargée de suivi, puisque l\'ONG ne veut pas administrer de serveur ; les scénarios regroupent les réponses et préparent le tableau du rapport, relu avant envoi.'],
                ['secteur' => 'PME de services en France', 'probleme' => 'Des flux n8n ont été installés par un ancien salarié sur un serveur que personne ne surveille, alors que le RGPD oblige à connaître le trajet des données des clients.', 'solution' => 'n8n avancé pour le responsable informatique : reprise des flux existants, flux d\'erreur, inventaire des données qui circulent et décision écrite sur l\'hébergement.'],
                ['secteur' => 'École privée à Lomé', 'probleme' => 'Les rappels de frais de scolarité et les annonces aux parents partent un par un depuis le téléphone de la secrétaire, qui ne suit plus.', 'solution' => 'WhatsApp Business pour le secrétariat, puis la formation au chatbot et à l\'API pour l\'économe, qui apprend les modèles de messages, la collecte de l\'accord des parents et le budget Meta.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels coûts d\'éditeur faut-il prévoir à côté de la formation ?',
            'legende' => 'Repères lus le 5 octobre 2026 chez chaque éditeur : n8n, Make, WhatsApp et Meta. Ces sommes sont réglées aux éditeurs eux-mêmes, jamais à Richard SALANON, et elles évoluent ; le comparatif n8n, Make et Zapier détaille les paliers.',
            'entetes' => ['Outil', 'Ce qui est gratuit', 'Ce qui est facturé', 'Ce que la formation apprend à estimer'],
            'lignes'  => [
                ['n8n', 'Un essai de l\'offre en ligne, ouvert sans carte bancaire et plafonné à 1 000 exécutions', 'L\'exécution, soit un passage entier du flux, qu\'il compte trois étapes ou trente ; l\'offre Starter coûte 20 € par mois payés à l\'année, environ 13 119 FCFA, et inclut 2 500 exécutions', 'Combien de passages mensuels chaque flux va déclencher'],
                ['Make', 'Offre Free sans limite de durée : 1 000 crédits par mois, un intervalle de 15 minutes au moins entre deux passages planifiés', 'Crédits : chaque action d\'un module compte en général pour un crédit', 'Le nombre de modules multiplié par le nombre de passages'],
                ['Application WhatsApp Business', 'L\'application, la messagerie, le profil et les outils de base restent gratuits selon WhatsApp', 'Abonnements Meta One facultatifs, avec un essai gratuit de 7 jours', 'Ce que l\'on peut faire sans payer, ce qui est longtemps suffisant'],
                ['Plateforme WhatsApp Business de Meta', 'Depuis le 1er octobre 2026, chaque numéro dispose de 1 000 messages de service offerts par mois, qui ne se reportent pas d\'un mois à l\'autre', 'Le message est l\'unité de facturation depuis le 1er juillet 2025 ; passé le quota, les messages de service deviennent payants, et sans moyen de paiement enregistré le compte ne peut plus en envoyer', 'Le volume de messages par catégorie, et le mois où le quota offert sera dépassé'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel budget prévoir pour une formation du domaine, et de quoi dépend-il ?',
            'intro'      => 'Le domaine n\'a pas de grille tarifaire publique : chaque formation fait l\'objet d\'un devis, établi après un premier échange qui, comme le cadrage et le devis lui-même, ne coûte rien. Ce devis isole les abonnements des éditeurs, qui restent à votre nom.',
            'items'      => [
                ['offre' => 'Demi-journée de découverte', 'prix' => 'Sur devis', 'inclus' => ['Inventaire des tâches à automatiser', 'Démonstration sur un cas de l\'entreprise', 'Recommandation de formation et d\'outil']],
                ['offre' => 'Une formation du domaine', 'prix' => 'Sur devis', 'inclus' => ['Programme construit sur vos outils', 'Exercices sur données de test', 'Supports et fiches réflexes', 'Évaluation et attestation']],
                ['offre' => 'Parcours de plusieurs formations', 'prix' => 'Sur devis', 'inclus' => ['Programme d\'ensemble daté', 'Intervalles de mise en pratique', 'Exercices repris des pannes réelles', 'Bilan au commanditaire']],
                ['offre' => 'Accompagnement après formation', 'prix' => 'Sur devis', 'inclus' => ['Relecture des premiers flux mis en service', 'Questions d\'application', 'Séances de suivi espacées']],
            ],
            'variations' => [
                'La taille de l\'effectif : sur ordinateur, un groupe trop nombreux se dédouble.',
                'Le nombre de formations enchaînées dans le parcours et leur durée cumulée.',
                'Le travail préparatoire : comptes, accès et jeux de données de test calqués sur vos outils.',
                'Le format retenu, et les déplacements éventuels hors de Cotonou.',
                'La présence, ou non, d\'un suivi dans les semaines qui suivent la session.',
                'La langue de travail, français ou anglais, pour les séances comme pour les supports.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Les fonds de formation d\'Afrique de l\'Ouest ou de France peuvent-ils payer ces sessions ?',
            'paragraphes' => [
                'Une prise en charge existe dans certains pays, sous conditions, et ne se présume jamais. Côte d\'Ivoire : d\'après la page « plan de formation » du FDFP, lue le 5 octobre 2026, une entreprise à jour de ses deux taxes peut soumettre un plan ; quand un intervenant extérieur forme ses seuls salariés, l\'action est classée « intra », et le fonds ne paie qu\'après ses propres vérifications et l\'accord de sa Commission permanente. Bénin : le FODEFCA agit dans le cadre des statuts que le décret n° 2022-286 a approuvés le 11 mai 2022.',
                'Sénégal : le site du 3FPT ouvre un guichet pour le personnel des entreprises et les membres d\'organisations professionnelles, où la demande se dépose en ligne. France : selon France Compétences, l\'accès d\'un prestataire aux financements des OPCO, et plus largement aux fonds publics et mutualisés, passe par la certification Qualiopi depuis le 1er janvier 2022. Richard SALANON ne détient ni cette certification ni l\'agrément d\'un fonds. Avant tout engagement, adressez au fonds le devis et le programme, attendez sa réponse écrite, et bâtissez votre budget comme si aucune aide ne venait.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs ruinent le plus souvent les effets d\'une formation en automatisation ?',
            'intro' => 'Elles se voient rarement le jour de la séance. Elles apparaissent dans les semaines qui suivent, quand les flux rencontrent la réalité.',
            'items' => [
                ['titre' => 'Choisir la formation d\'après l\'outil à la mode', 'texte' => 'On s\'inscrit au chatbot parce que tout le monde en parle, alors que la boutique n\'a pas encore de catalogue. Partez de la tâche qui coûte du temps, pas du nom de l\'outil.'],
                ['titre' => 'Se former sur un outil qui ne sera pas retenu', 'texte' => 'Apprendre Make quand la direction penche pour n8n, ou l\'inverse, fait perdre une formation. Tranchez l\'outil avant, avec le comparatif ou une demi-journée de découverte.'],
                ['titre' => 'Brancher les comptes personnels', 'texte' => 'Un flux relié à la messagerie du gérant, ou un robot branché sur le numéro personnel d\'un vendeur, s\'arrête le jour où cette personne part. Les comptes et les numéros appartiennent à l\'entreprise.'],
                ['titre' => 'Ne nommer personne responsable', 'texte' => 'Un flux sans responsable finit en panne silencieuse. Chaque flux a un nom, une personne qui le surveille et une personne qui la remplace.'],
                ['titre' => 'Ignorer la facture de l\'éditeur', 'texte' => 'Un passage toutes les minutes, un module de trop ou un message WhatsApp de la mauvaise catégorie suffisent à faire grimper le coût mensuel. L\'estimation se fait avant la mise en service.'],
                ['titre' => 'Envoyer sans accord', 'texte' => 'Automatiser une diffusion vers tout le carnet d\'adresses multiplie les signalements et peut coûter le numéro. On n\'automatise que des envois aux personnes qui les ont acceptés.'],
                ['titre' => 'Ne pas bloquer de temps après la séance', 'texte' => 'Sans une demi-journée réservée la semaine suivante, le premier flux réel n\'est jamais construit et la formation s\'efface.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel risque ignore-t-on le plus souvent en automatisant des messages WhatsApp ?',
            'texte' => 'Le message parti en masse vers des gens qui n\'avaient rien demandé. Dans sa version du 23 septembre 2026, la politique de messagerie de WhatsApp Business pose deux conditions à tout contact : la personne vous a communiqué son numéro, et elle a dit oui à vos messages ; une demande d\'arrêt, même formulée hors de WhatsApp, doit être suivie. Côté béninois, l\'article 332 du code du numérique proscrit la prospection directe automatisée auprès de qui n\'a pas consenti au préalable ; se taire n\'est pas consentir, et c\'est à l\'expéditeur de prouver l\'accord. Un flux mal réglé reproduit cette faute cent fois par minute : c\'est le premier point traité dans chaque formation du domaine qui touche à WhatsApp.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, numéros, données, langue : que change le contexte local ?',
            'paragraphes' => [
                'Où faire tourner les flux dépend d\'abord de la connexion. L\'UIT, dans ses chiffres publiés le 15 octobre 2025, compte 36 % d\'internautes dans la population africaine, quand l\'Europe, les Amériques et la CEI se situent entre 88 et 93 %. Installé sur un poste du bureau, un flux s\'interrompt à chaque coupure ; hébergé en ligne, il continue, pourvu que ses accès restent valides. Chaque séance prévoit donc un partage de connexion de secours et l\'export des flux en fichiers.',
                'Aucune donnée n\'est plus manipulée dans ce domaine que le numéro de téléphone, et aucune ne casse aussi facilement. L\'ARCEP Bénin a porté les numéros nationaux à 10 chiffres le 30 novembre 2024 : le préfixe 01 précède désormais les 8 chiffres d\'origine. Un carnet de clients jamais mis à jour fait échouer des envois sans erreur lisible. Avant de confier un numéro à un flux ou à l\'API de WhatsApp, on apprend à le ramener au format international complet.',
                'Les données des clients franchissent des frontières sans que personne le remarque. Le code du numérique béninois, loi n° 2017-20 du 20 avril 2018, qualifie d\'État tiers tout pays extérieur à la CEDEAO, et son article 391 subordonne un transfert vers un tel pays à un constat de l\'Autorité : la protection doit y être équivalente. Selon sa page tarifs, n8n héberge à Francfort les données de ses offres en ligne. Côté européen, le RGPD, dont la CNIL publie le texte, réclame à l\'article 28 des sous-traitants aux garanties suffisantes, encadrés par un contrat, et à l\'article 30 un registre des traitements.',
                'Reste la langue. Par défaut, n8n présente son éditeur en anglais, et la documentation des outils et des API l\'est en bonne partie. Les séances se font en français, lexique des termes d\'écran à l\'appui. Pour les montants, la BCEAO publie une parité fixe : un euro vaut 655,957 FCFA. Enfin, aucun flux ne marque une commande payée par Mobile Money sans qu\'une personne ait d\'abord vérifié l\'encaissement.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels retenir avant de former une équipe à l\'automatisation ?',
            'items' => [
                ['valeur' => '36 %', 'libelle' => 'Internautes dans la population africaine en 2025, pour 74 % à l\'échelle mondiale (chiffres publiés le 15 octobre 2025)', 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '1 000', 'libelle' => 'Messages de service offerts chaque mois à chaque numéro de la plateforme WhatsApp Business depuis le 1er octobre 2026, payants au-delà', 'source' => 'Meta, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
                ['valeur' => '2 500', 'libelle' => 'Exécutions mensuelles incluses dans l\'offre Starter de n8n, facturée 20 € par mois à l\'année (lu le 5 octobre 2026)', 'source' => 'n8n, Plans and Pricing', 'url' => 'https://n8n.io/pricing/'],
                ['valeur' => '1 000', 'libelle' => 'Crédits par mois de l\'offre Free de Make, sans limite de durée (page consultée le 5 octobre 2026)', 'source' => 'Make, Pricing', 'url' => 'https://www.make.com/en/pricing'],
                ['valeur' => '10 chiffres', 'libelle' => 'Longueur des numéros béninois depuis le 30 novembre 2024, avec le préfixe 01 ajouté devant l\'ancien numéro', 'source' => 'ARCEP Bénin', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/'],
                ['valeur' => '1er janvier 2022', 'libelle' => 'Depuis cette date, un prestataire doit être certifié Qualiopi pour que les OPCO financent ses formations en France', 'source' => 'France Compétences', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former à l\'automatisation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Les outils de ce domaine sont ceux de ses propres chantiers : il monte des automatisations sous n8n et Make et branche WhatsApp sur les logiciels de ses clients. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il cumule ' . $ans . ' ans de pratique du numérique. Il est le créateur de <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp doté d\'intelligence artificielle et pensé pour les entreprises d\'Afrique francophone, et co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. D\'après ses propres chiffres, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes ont suivi ses formations au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Dans ce domaine, il forme selon quelques principes : partir de la tâche que l\'on veut supprimer, pratiquer sur les comptes et les outils de l\'entreprise, terminer chaque session sur un flux ou un réglage effectivement en service, et déconseiller une formation lorsqu\'elle ne résoudrait rien. Il a travaillé, sur place ou à distance, dans quatorze pays : dix en Afrique francophone, plus la France, la Belgique, la Suisse et le Canada. La page <a href="/richard-salanon">Richard SALANON</a> retrace son parcours ; tous les domaines figurent sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelles règles garder en tête au moment de choisir une formation en automatisation ?',
            'texte' => 'Partez d\'une tâche qui vous coûte du temps chaque semaine, choisissez l\'outil avant la formation, maîtrisez WhatsApp à la main avant d\'y mettre un robot, formez la personne qui fait le geste et celle qui surveillera le flux, laissez quelques semaines de pratique entre deux formations, et estimez la facture de l\'éditeur avant toute mise en service.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quelle tâche votre équipe veut-elle ne plus faire à la main ?',
            'texte'  => 'Indiquez les postes concernés, vos outils et la tâche la plus chronophage de la semaine : une réponse arrive sous 24 heures, avec une recommandation de formation ou de parcours, puis un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Choisir ma formation'],
        ],
    ],
    'faq' => [
        ['q' => 'Par quelle formation du domaine commencer quand on n\'a jamais rien automatisé ?', 'r' => 'Si votre problème est la ressaisie entre logiciels, commencez par n8n de zéro à l\'autonomie, ou par Make si l\'entreprise l\'a déjà retenu. Si votre problème est le volume de messages clients, commencez par WhatsApp Business pour vendre. Les formations avancées supposent d\'avoir mis en service au moins un premier flux ou un premier catalogue.'],
        ['q' => 'Faut-il savoir programmer pour suivre ces formations ?', 'r' => 'Non. Aucune formation du domaine ne demande d\'écrire du code. Intégrations API en no-code et low-code apprend justement à lire une documentation d\'API et à appeler un service sans programmer. Seule la partie hébergement de n8n avancé demande des bases d\'administration de serveur.'],
        ['q' => 'Vaut-il mieux apprendre n8n ou Make ?', 'r' => 'Celui que votre entreprise gardera. Si rien n\'est encore installé, lisez le comparatif n8n, Make et Zapier, qui met en regard l\'hébergement, la facturation et le devenir de vos données. Une demi-journée de découverte sur l\'un de vos cas réels permet aussi de décider avant d\'engager une formation complète.'],
        ['q' => 'Quelle différence entre WhatsApp Business et le chatbot WhatsApp ?', 'r' => 'WhatsApp Business pour vendre porte sur l\'application gratuite, utilisée à la main sur le téléphone : catalogue, réponses rapides, étiquettes. Chatbot WhatsApp et API WhatsApp Business porte sur la plateforme officielle de Meta, reliée à un logiciel, avec des modèles de messages et une facturation par message.'],
        ['q' => 'Combien coûtent les formations du domaine ?', 'r' => 'Chacune fait l\'objet d\'un devis, après un premier échange gratuit. Le montant varie avec la taille et le nombre des groupes, le nombre de formations enchaînées, le travail de préparation des comptes et des données de test, le format et le suivi éventuel. Les abonnements à n8n, à Make ou à Meta se règlent directement aux éditeurs.'],
        ['q' => 'Peut-on suivre ces formations à distance depuis l\'Europe ou le Canada ?', 'r' => 'Oui. Les formations à n8n, à Make et aux API se prêtent bien aux séances courtes sur écran partagé. WhatsApp Business se fait aussi à distance, avec le téléphone filmé ou l\'application ouverte sur ordinateur. Les horaires suivent le fuseau de votre équipe, à Paris comme à Montréal.'],
        ['q' => 'Combien de personnes peut-on former en même temps ?', 'r' => 'La pratique sur ordinateur exige des groupes réduits : la formation n8n accueille dix personnes au plus par groupe. Au-delà, le devis prévoit plusieurs groupes, composés par niveau et par poste pour que chacun travaille sur ses propres tâches.'],
        ['q' => 'Quand les quatre autres formations du domaine seront-elles disponibles ?', 'r' => 'n8n avancé, Make de zéro à expert, Chatbot WhatsApp et API WhatsApp Business, et Intégrations API en no-code et low-code seront publiées le 12 octobre 2026. Vous pouvez déjà décrire votre besoin : le premier échange sert à choisir la formation et à préparer le programme.'],
        ['q' => 'Le FDFP, le FODEFCA, le 3FPT ou un OPCO peuvent-ils financer ces formations ?', 'r' => 'Tout dépend des règles du fonds et de votre dossier. Pour les OPCO, le prestataire doit être certifié Qualiopi, ce qui n\'est pas le cas de Richard SALANON. Envoyez au fonds le devis et le programme, obtenez sa réponse écrite avant de signer, et construisez votre budget sans compter sur une aide.'],
        ['q' => 'Que reste-t-il à l\'équipe une fois la session terminée ?', 'r' => 'Chaque participant repart avec les flux ou les réglages construits pendant la session, les supports et une fiche par flux. Un accompagnement peut être prévu au devis pour relire les premiers flux mis en service et répondre aux questions d\'application pendant quelques semaines.'],
    ],

    'sources' => [
        ['titre' => 'n8n, Plans and Pricing (offres en ligne, définition d\'une exécution, essai, hébergement des données à Francfort)', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Make, Pricing (offre Free, crédits par mois, intervalle minimal entre deux passages)', 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (facturation par message, quota de messages de service depuis le 1er octobre 2026)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp Business, Meta One sur l\'application WhatsApp Business (application gratuite, abonnements facultatifs)', 'url' => 'https://whatsappbusiness.com/fr/products/business-app-meta-one/', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025 : Internet use (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, passage des numéros de 8 à 10 chiffres au 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (définition de l\'État tiers, articles 332 et 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD chapitre IV : responsable du traitement et sous-traitant (articles 28 et 30)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'BCEAO, histoire du franc CFA (parité fixe de 655,957 FCFA pour un euro)', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['n8n', 'n8n-avance', 'make', 'whatsapp-business', 'chatbot-whatsapp', 'integrations-api-no-code'],
        'services'    => ['automatisation-ia', 'integration-whatsapp', 'formation-en-entreprise'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
    ],
];
