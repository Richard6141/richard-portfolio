<?php
// ============================================================
// data/services/developpeur-web-freelance.php · Pilier « Développeur web
// freelance full stack » (vague 1A). Nouveau slug : reprend sans les copier
// les informations utiles de /developpeur-web-cotonou (devis gratuit, accès
// et code au nom du client, formation à la livraison, paiement en tranches,
// maintenance au forfait ou à la demande). Faits de Richard lus dans
// faits.php ; faits externes relevés sur les pages officielles le 03/10/2026.
// ============================================================
declare(strict_types=1);

$ans      = (int) fait('experience_ans');
$tarifs   = fait('tarifs_depart');
$delais   = fait('delais');
$reponse  = 'sous ' . fait('delai_reponse');
$liste    = static fn(array $v): string => count($v) > 1 ? implode(', ', array_slice($v, 0, -1)) . ' et ' . $v[count($v) - 1] : (string) ($v[0] ?? '');
$pays     = array_values(fait('pays_travailles'));
$paiement = $liste(array_values(fait('paiements')));
$h        = fait('horaires');
$horaires = (count($h['jours']) === 7 ? 'tous les jours' : 'en semaine') . ', de ' . (int) substr($h['ouverture'], 0, 2) . ' h à ' . (int) substr($h['fermeture'], 0, 2) . ' h';
$projets  = 'plus de ' . rtrim((string) fait('projets_livres'), '+');
// Conversion indicative au taux fixe publié par la BCEAO (655,957 FCFA pour un euro).
$euros    = static fn(string $fcfa): string => 'environ ' . number_format((int) round((int) preg_replace('/\D/', '', $fcfa) / 655.957), 0, ',', ' ') . ' euros';

return [
    'titre'   => 'Développeur web freelance full stack à Cotonou : un seul interlocuteur, du cadrage au code remis à votre nom',
    'title'   => 'Développeur web freelance full stack | Richard SALANON',
    'meta'    => 'Développeur web freelance full stack à Cotonou : Laravel, Node.js, Vue, React, WordPress. Devis gratuit, réponse sous 24 heures, code remis à votre nom.',
    'en_bref' => 'Richard SALANON est développeur web freelance full stack à Cotonou : il conçoit, code et met en ligne sites, applications web et API, en PHP et Laravel, Node.js, Vue, React ou WordPress, et reste votre seul interlocuteur du cadrage à la passation. Il travaille au forfait ou au temps passé pour des PME, startups, agences et associations d\'Afrique francophone, d\'Europe et du Canada. Un site vitrine demande ' . $delais['Site vitrine'] . ' à partir de ' . $tarifs['Site vitrine'] . ', une application sur mesure ' . $delais['Application sur mesure'] . ' sur devis ; le devis est gratuit et la réponse arrive ' . $reponse . '.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'famille' => 'Sites et boutiques',
    'matrice' => true,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'Site vitrine en ' . $delais['Site vitrine'] . ', application en ' . $delais['Application sur mesure']],
        ['l' => 'Pour qui', 'v' => 'PME, startups, agences et associations, en Afrique francophone, en Europe et au Canada'],
        ['l' => 'Livrables', 'v' => 'Code source, accès, documentation et formation, à votre nom'],
        ['l' => 'Réponse', 'v' => $reponse],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que fait un développeur web freelance, et qu\'est-ce qui sort de son périmètre ?',
            'paragraphes' => [
                'Un développeur web freelance est un indépendant que vous engagez pour une mission précise, sans le recruter. Richard SALANON exerce ainsi depuis Cotonou, sous le statut d\'' . mb_strtolower((string) fait('statut')) . '. Il est « full stack » : il écrit la partie serveur (base de données, règles métier, API) comme la partie visible (pages, formulaires, tableaux de bord). Une mission peut être un projet complet, un renfort sur un code existant, la reprise d\'un projet laissé en plan ou la maintenance d\'une application déjà en production.',
                'Ce que vous achetez, au fond, c\'est un accès direct. La personne qui vous écoute au premier rendez-vous est celle qui chiffre, qui tranche les questions techniques et qui écrit le code. Il n\'y a ni commercial pour reformuler votre besoin, ni chef de projet pour le transmettre à une équipe que vous ne verrez jamais. Les décisions se prennent plus vite, et ce que vous avez dit arrive intact dans le logiciel.',
                'Le métier a aussi ses frontières. La création d\'une identité visuelle complète (logo, charte, photos) relève d\'un graphiste ; le freelance travaille à partir de votre charte, ou propose une interface sobre. L\'achat de publicité, l\'animation de vos réseaux sociaux, une astreinte jour et nuit avec intervention en quelques minutes, ou un projet qui exige cinq spécialistes en parallèle pendant six semaines sortent du périmètre d\'une seule personne. Mieux vaut le dire au cadrage que le découvrir à la livraison.',
                'Si vous savez déjà ce que vous voulez construire, les pages <a href="/services/site-vitrine-professionnel">site vitrine</a>, <a href="/services/application-web-sur-mesure">application web sur mesure</a> et <a href="/services/application-mobile-android-ios">application mobile</a> détaillent chaque type de projet. Celle-ci traite d\'autre chose : la relation de travail elle-même. Comment choisir un freelance, cadrer la mission, la payer, protéger votre code et vos données, et ce qu\'il est honnête d\'attendre d\'une personne seule.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Freelance, agence web ou développeur salarié : qu\'est-ce qui change vraiment pour vous ?',
            'options'  => ['Développeur freelance', 'Agence web', 'Développeur salarié'],
            'criteres' => [
                ['critere' => 'Votre interlocuteur', 'valeurs' => ['La personne qui code, du devis à la livraison', 'Un chef de projet, entre vous et l\'équipe technique', 'Un membre de votre équipe, sous votre autorité']],
                ['critere' => 'Coût fixe pour vous', 'valeurs' => ['Aucun : vous payez la mission, au forfait ou au temps passé', 'Aucun, mais le prix finance aussi la structure (locaux, commerciaux, gestion)', 'Salaire, cotisations sociales et poste de travail, y compris pendant les mois creux']],
                ['critere' => 'Capacité de production', 'valeurs' => ['Une personne : un rythme régulier, sans renfort instantané', 'Plusieurs profils mobilisables en même temps', 'Une personne à temps plein sur vos seuls sujets']],
                ['critere' => 'Métiers couverts', 'valeurs' => ['Développement de bout en bout ; graphisme et rédaction à prévoir à part', 'Design, développement, rédaction et marketing sous un même toit', 'Ceux du profil recruté']],
                ['critere' => 'Délai de démarrage', 'valeurs' => ['Dès l\'acceptation du devis et du calendrier', 'Selon le planning de l\'agence', 'Après le recrutement et la période d\'intégration']],
                ['critere' => 'Absence ou départ', 'valeurs' => ['Le risque principal, couvert par un code standard, une documentation et des accès à votre nom', 'Un collègue de l\'agence peut reprendre', 'Congés à planifier ; sans documentation, la connaissance part avec la personne']],
                ['critere' => 'Droits sur le code', 'valeurs' => ['Cession à écrire dans le contrat', 'Cession à écrire dans le contrat', 'En France, dévolus à l\'employeur par l\'article L113-9 du Code de la propriété intellectuelle']],
                ['critere' => 'Projet idéal', 'valeurs' => ['Périmètre clair, première version à tester, renfort, maintenance', 'Projet qui mobilise plusieurs métiers à la fois', 'Besoin permanent, à temps plein, sur plusieurs années']],
            ],
            'verdict'  => 'Prenez un freelance quand le projet tient dans les mains d\'une personne et que vous voulez parler à celle qui code ; une agence quand plusieurs métiers doivent travailler en même temps ; un salarié quand le besoin est permanent et occupe un poste à plein temps.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la propriété du code doit-elle être écrite noir sur blanc avec un freelance ?',
            'paragraphes' => [
                'C\'est la différence la moins connue entre un salarié et un indépendant. En France, l\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278890">article L113-9 du Code de la propriété intellectuelle</a>, consulté sur Légifrance le 3 octobre 2026, attribue à l\'employeur les droits patrimoniaux sur les logiciels et leur documentation créés par ses employés dans l\'exercice de leurs fonctions. Ce texte vise les employés : il ne s\'applique pas à un prestataire indépendant. Sans clause écrite, l\'auteur du code en reste titulaire, et le client n\'a souvent qu\'un droit d\'usage implicite.',
                'L\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958">article L131-3</a> du même code fixe la forme de la cession : chaque droit cédé doit faire l\'objet d\'une mention distincte, et le domaine d\'exploitation doit être délimité quant à son étendue, sa destination, son lieu et sa durée. Une phrase vague du type « le site appartient au client » ne suffit donc pas. Le contrat doit nommer la reproduction, l\'adaptation, la modification et la diffusion du code, pour le monde entier et pour toute la durée des droits.',
                'En pratique, la cession porte sur le code écrit pour vous et prend effet au paiement complet. Les briques libres réutilisées, comme le cadre Laravel ou les bibliothèques JavaScript, restent sous leur propre licence, que vous pouvez utiliser sans restriction gênante. Pour un client hors de France, la règle la plus sûre est la même : écrire la cession dans le contrat, désigner la loi applicable, et ne pas compter sur un usage local que personne ne pourra prouver le jour d\'un désaccord.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes reconnaît-on qu\'un freelance est la bonne formule pour votre projet ?',
            'intro' => 'Un freelance n\'est ni une agence au rabais ni un salarié sans contrat : c\'est une formule qui sert certains projets mieux que d\'autres. Ces situations s\'y prêtent particulièrement.',
            'items' => [
                ['titre' => 'Votre besoin tient en une phrase', 'texte' => '« Un site qui présente nos services et reçoit des demandes », « un outil qui suit nos stocks entre deux dépôts », « une API qui relie notre caisse à la comptabilité ». Quand l\'objectif se formule simplement, une seule personne peut le porter de bout en bout sans perte d\'information.'],
                ['titre' => 'Vous voulez parler à celui qui code', 'texte' => 'Les dirigeants de petites structures veulent souvent comprendre ce qu\'ils paient. Avec un freelance, chaque question technique trouve sa réponse auprès de la personne qui a pris la décision, dans des mots que vous comprenez.'],
                ['titre' => 'Le besoin est ponctuel ou arrive par vagues', 'texte' => 'Un site à refaire, une application à faire évoluer deux fois par an, un pic de travail avant un lancement : rien qui justifie un recrutement à temps plein, avec ses cotisations et son poste de travail toute l\'année.'],
                ['titre' => 'Votre agence ou votre équipe manque de bras', 'texte' => 'Une agence qui refuse des projets faute de développeur disponible peut confier un lot à un indépendant, sur son propre dépôt et selon ses conventions. La page <a href="/services/externalisation-developpement">externalisation du développement</a> détaille cette formule.'],
                ['titre' => 'Un projet est resté bloqué', 'texte' => 'Le développeur précédent est parti, le code n\'est pas documenté, personne n\'ose toucher au serveur. Un freelance commence par un état des lieux : ce qui peut être repris, ce qui doit être corrigé, ce qui doit être réécrit.'],
                ['titre' => 'Vous testez une idée avant d\'investir', 'texte' => 'Une startup ou un porteur de projet a besoin d\'une première version resserrée, montrée à de vrais utilisateurs, avant de lever des fonds ou de recruter. Le code propre et documenté servira ensuite de base à l\'équipe qui prendra le relais.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Dans quels cas vaut-il mieux ne pas choisir un freelance ?',
            'paragraphes' => [
                'Trois situations appellent une autre formule. D\'abord, l\'échéance courte sur un grand périmètre : si une plateforme complète doit être en ligne dans six semaines et mobilise un designer, deux développeurs et un testeur en parallèle, une personne seule ne tiendra pas le délai, quelle que soit sa compétence. Une agence, ou une petite équipe constituée pour l\'occasion, est alors plus raisonnable.',
                'Ensuite, l\'astreinte permanente. Un service qui doit être rétabli en quinze minutes à trois heures du matin suppose une rotation entre plusieurs personnes et un contrat d\'exploitation, pas un indépendant qui dort aussi. Enfin, le besoin continu à temps plein : quand votre logiciel est votre activité et qu\'il occupe un développeur tous les jours de l\'année, recruter devient plus logique, et le freelance peut vous aider à préparer ce recrutement plutôt qu\'à le remplacer.',
                'Entre ces extrêmes, les formules se combinent. Un freelance peut construire la première version puis former le développeur que vous embauchez ; une agence peut sous-traiter un lot à un indépendant ; un projet plus large peut passer par un cabinet. Le cadrage sert justement à poser la question franchement, avant tout engagement.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une mission, du premier message au suivi après la mise en ligne ?',
            'items' => [
                ['titre' => 'Premier message', 'duree' => 'Réponse ' . $reponse, 'texte' => 'Par le <a href="/contact">formulaire de contact</a>, par téléphone ou sur WhatsApp, ' . $horaires . ' (heure de Cotonou). Quelques lignes suffisent : votre activité, ce qui vous fait perdre du temps ou de l\'argent, l\'échéance qui compte et, si vous l\'avez, une idée du budget. Aucun cahier des charges n\'est exigé à ce stade.'],
                ['titre' => 'Cadrage gratuit', 'duree' => 'Quelques jours, sans engagement', 'texte' => 'Un ou plusieurs échanges, en visioconférence ou sur place à Cotonou, pour préciser les objectifs, les utilisateurs, les outils déjà en place et les contraintes : paiement, connexion, données personnelles, langue. C\'est aussi le moment où l\'on vous dit si un freelance est la bonne formule, ou si un outil existant suffit.'],
                ['titre' => 'Devis détaillé et mode d\'engagement', 'duree' => 'Après le cadrage', 'texte' => 'Le devis est détaillé poste par poste, souvent en deux versions, minimale et complète, pour que vous choisissiez en connaissance de cause. Il précise le mode d\'engagement (forfait ou temps passé), le découpage en lots, le calendrier, les livrables et l\'échéancier : acompte au démarrage, tranches liées aux étapes validées, solde à la mise en ligne.'],
                ['titre' => 'Maquettes', 'duree' => 'Avant la première ligne de code', 'texte' => 'Les écrans principaux et les parcours des utilisateurs sont dessinés puis validés avec vous. Déplacer un bouton sur une maquette prend une minute ; le déplacer dans une application terminée peut prendre une journée. Pour un site vitrine, la maquette porte sur l\'accueil et les pages types.'],
                ['titre' => 'Développement par lots', 'duree' => 'Site vitrine : ' . $delais['Site vitrine'] . ' ; application : ' . $delais['Application sur mesure'], 'texte' => 'Le projet avance par livraisons successives sur un serveur de recette, une copie privée du site ou de l\'application que vous testez avec vos propres données. Chaque lot fait l\'objet d\'une démonstration, puis de votre validation avant le suivant. Le code est poussé au fil de l\'eau sur un dépôt ouvert à votre nom.'],
                ['titre' => 'Recette et mise en ligne', 'duree' => 'Quelques jours en fin de projet', 'texte' => 'Vous testez les parcours réels, une liste des anomalies est tenue et soldée, puis le site ou l\'application passe en production sur l\'hébergement choisi. Les sauvegardes automatiques sont activées et une restauration est essayée avant de considérer le travail comme terminé.'],
                ['titre' => 'Passation et formation', 'duree' => 'À la livraison', 'texte' => 'Le code, les accès et la documentation vous sont remis, et les personnes qui utiliseront l\'outil sont formées sur leurs propres données : modifier un texte, ajouter un produit, créer un utilisateur, retrouver une commande. L\'objectif est que vous ne dépendiez de personne pour le quotidien.'],
                ['titre' => 'Suivi et maintenance', 'duree' => 'Après la livraison', 'texte' => 'Les premières semaines d\'usage révèlent toujours des ajustements. Ensuite, la maintenance se règle au forfait mensuel ou à la demande, selon le rythme de votre projet : mises à jour, sauvegardes, corrections et évolutions. La page <a href="/services/maintenance-support">maintenance et support</a> détaille cette suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que vous remet-on concrètement à la fin de la mission ?',
            'legende' => 'Livrables remis à la mise en ligne. Leur liste exacte figure dans le devis ; les comptes sont ouverts à votre nom dès le début du projet, pas à la fin.',
            'entetes' => ['Livrable', 'Ce qu\'il contient', 'Pourquoi il compte'],
            'lignes'  => [
                ['Dépôt du code source', 'Le dépôt Git complet, avec tout l\'historique des modifications, sur un compte qui vous appartient (GitHub, GitLab ou équivalent)', 'Un autre développeur peut reprendre le projet sans rien demander à personne. Selon la <a href="https://github.com/pricing">page tarifs de GitHub</a> consultée le 3 octobre 2026, l\'offre gratuite comprend des dépôts privés et des collaborateurs en nombre illimité'],
                ['Accès d\'administration', 'Hébergement, nom de domaine, base de données, messagerie et comptes des services tiers (paiement, envoi d\'e-mails, cartes, statistiques)', 'Vos actifs restent les vôtres si la collaboration s\'arrête, pour quelque raison que ce soit'],
                ['Documentation technique', 'Architecture, installation, liste des réglages (sans les mots de passe), procédure de mise en production, versions des outils utilisés', 'Le temps de prise en main d\'un repreneur passe de plusieurs jours de fouille à quelques heures de lecture'],
                ['Guide d\'utilisation', 'Les tâches courantes expliquées pas à pas, avec captures d\'écran', 'Un nouvel employé apprend l\'outil sans mobiliser le développeur'],
                ['Sauvegardes', 'Copies automatiques de la base de données et des fichiers, et procédure de restauration essayée', 'Une sauvegarde jamais restaurée n\'est qu\'une hypothèse'],
                ['Formation', 'Séance de prise en main à la livraison, sur place à Cotonou ou à distance', 'L\'outil est réellement adopté par ceux qui doivent s\'en servir'],
                ['Pièces du projet', 'Cahier des charges, maquettes, comptes rendus des démonstrations, liste des anomalies corrigées', 'La mémoire des décisions : pourquoi tel choix a été fait, et ce qui a été validé'],
                ['Clause de cession des droits', 'Les droits d\'exploitation du code écrit pour vous, nommés un par un, à compter du paiement complet', 'Vous pouvez modifier, faire évoluer ou confier le code à qui vous voulez'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles technologies, pour quels projets, et qu\'est-ce qui le prouve ?',
            'legende' => 'Technologies du parcours de Richard SALANON, rapprochées des projets où il les a employées. « Déclarée » signifie qu\'aucune preuve publique n\'est citée ici ; « dépôt public » renvoie à son compte GitHub Richard6141.',
            'entetes' => ['Technologie', 'Projets typiques', 'Pourquoi ce choix', 'Preuve'],
            'lignes'  => [
                ['PHP et Laravel', 'Applications de gestion, espaces clients, back-offices, API', 'L\'hébergement PHP existe partout, y compris chez les hébergeurs locaux ; un cadre structuré que d\'autres développeurs savent reprendre', 'Application de livraisons chez TOP CHRONO ; API du découpage administratif du Bénin (dépôt public)'],
                ['Node.js : Express et NestJS', 'API, messagerie en temps réel, notifications', 'Un même langage côté serveur et côté interface ; à l\'aise avec de nombreuses connexions simultanées', 'Application de livraisons chez TOP CHRONO (Express) ; API d\'Allo Artisan (NestJS, dépôt public)'],
                ['Vue.js et React', 'Tableaux de bord, formulaires dynamiques, interfaces riches', 'Des composants réutilisables ; React de préférence si votre équipe le pratique déjà', 'Déclarée'],
                ['Python et Flask', 'Petites API, traitements de données, services d\'intelligence artificielle', 'Python porte une grande partie des bibliothèques d\'IA et d\'analyse de données', 'Projets Fyyur et Trivia API du programme Udacity, en 2022 (dépôts publics)'],
                ['WordPress', 'Sites éditoriaux, blogs, sites vitrines mis à jour par le client', 'Une administration que beaucoup de gens connaissent déjà, et un vaste choix d\'extensions', 'Sites WordPress chez Le KARAKATA SA ; enseigné aux étudiants chez VULCAIN-TECH'],
                ['Flutter', 'Applications mobiles Android et iOS', 'Une seule base de code pour les deux systèmes ; approche détaillée sur la page <a href="/services/application-mobile-android-ios">application mobile</a>', 'Déclarée'],
                ['MySQL, MariaDB et PostgreSQL', 'Stockage des données métier', 'Bases libres, documentées et disponibles chez tous les hébergeurs', 'Modèle des départements aux quartiers de l\'API du découpage ; PostgreSQL et Prisma pour Allo Artisan (dépôts publics)'],
                ['Git, Docker, intégration continue', 'Versionnement, déploiement, tests automatiques', 'Chaque modification est tracée et peut être annulée ; les tests tournent à chaque envoi de code', 'Docker et tests Jest en intégration continue pour Allo Artisan (dépôt public)'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi préférer des technologies éprouvées à la dernière nouveauté ?',
            'paragraphes' => [
                'Avec un freelance, le premier critère technique n\'est pas l\'élégance : c\'est la possibilité qu\'un autre développeur reprenne le code demain. Laravel, Node.js, Vue, React et WordPress se pratiquent à Cotonou comme à Abidjan, à Paris ou à Montréal. Choisir ces outils, c\'est s\'assurer que votre projet ne dépend pas d\'une compétence rare, et donc de la disponibilité d\'une seule personne.',
                'Le second critère est le calendrier de maintenance publié par chaque projet. Selon <a href="https://www.php.net/supported-versions.php">php.net</a>, consulté le 3 octobre 2026, chaque branche de PHP reçoit deux ans de corrections actives puis deux ans de correctifs de sécurité seulement : PHP 8.2 n\'en recevra plus après le 31 décembre 2026, tandis que PHP 8.5, sorti le 20 novembre 2025, est suivi jusqu\'au 31 décembre 2029. Un site resté sur une ancienne branche continue de fonctionner, mais sans protection contre les failles découvertes ensuite.',
                'La <a href="https://laravel.com/docs/releases">politique de support de Laravel</a> prévoit 18 mois de corrections et 2 ans de correctifs de sécurité pour chaque version majeure, publiée une fois par an. Laravel 13, sorti le 17 mars 2026, exige au moins PHP 8.3 et reste couvert jusqu\'au 17 mars 2028. Côté JavaScript, la <a href="https://nodejs.org/en/about/previous-releases">page des versions de Node.js</a> indique que les versions à support long sont maintenues 30 mois au total, que les lignes 22 et 24 sont dans cette phase, et qu\'à partir de Node.js 27 chaque version majeure annuelle passera en support long.',
                'WordPress, enfin, recommande sur sa <a href="https://wordpress.org/about/requirements/">page des prérequis</a>, modifiée le 7 mai 2026, PHP 8.3 ou plus récent, MariaDB 10.11 ou MySQL 8.0 au minimum et une connexion HTTPS ; il tourne encore sur des versions plus anciennes, mais WordPress prévient qu\'elles exposent le site à des failles. Conséquence concrète : le devis indique les versions retenues, l\'hébergement est choisi pour les supporter, et la maintenance prévoit une montée de version par an plutôt qu\'une refonte forcée tous les cinq ans.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Au forfait ou au temps passé : quel mode d\'engagement convient à votre projet ?',
            'legende' => 'Les trois façons d\'engager Richard SALANON. Le mode retenu, le taux ou le prix, et l\'échéancier figurent au devis.',
            'entetes' => ['Point de comparaison', 'Forfait', 'Temps passé', 'Maintenance continue'],
            'lignes'  => [
                ['Principe', 'Un prix fixé pour un périmètre décrit au devis', 'Les heures ou journées réellement travaillées, à un taux fixé au devis', 'Un montant mensuel pour des tâches récurrentes listées, ou une intervention payée à la demande'],
                ['Projets adaptés', 'Site vitrine, landing page, application dont le périmètre est stable', 'Renfort sur un code existant, reprise de projet, sous-traitance pour une agence, périmètre qui bouge', 'Site ou application déjà en production'],
                ['Changement en cours de route', 'Avenant chiffré, ou report dans un lot ultérieur', 'Intégré naturellement : l\'enveloppe suit le travail', 'Hors de la liste convenue : devis séparé'],
                ['Votre risque principal', 'Un périmètre mal décrit, qui multiplie les avenants', 'Une enveloppe qui dérive faute de plafond', 'Payer des mois sans incident, ou sous-estimer une urgence'],
                ['Comment le maîtriser', 'Un cadrage sérieux et des maquettes validées avant le devis ferme', 'Un plafond par période, un relevé du temps par tâche et un point régulier', 'Une liste écrite des tâches incluses et un compte rendu des interventions'],
                ['Paiement', 'Acompte, tranches à chaque étape validée, solde à la mise en ligne', 'Par période, sur la base du temps relevé', 'Chaque mois, ou à chaque intervention'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment choisir entre forfait et temps passé sans se tromper ?',
            'paragraphes' => [
                'La question à se poser n\'est pas « quelle formule coûte le moins ? » mais « qui porte l\'incertitude ? ». Au forfait, c\'est le développeur : il s\'engage sur un prix pour un périmètre, et il a donc besoin que ce périmètre soit précis. Au temps passé, c\'est vous : vous gardez la liberté de changer d\'avis, et vous payez ce changement au fil de l\'eau. Les deux sont honnêtes, à condition de les employer pour le bon type de projet.',
                'Un forfait sur un périmètre flou finit presque toujours mal, de l\'un ou de l\'autre côté : soit le prestataire gonfle son prix par prudence, soit il rogne sur la qualité pour tenir le budget. À l\'inverse, un temps passé sans plafond ni relevé détaillé met le client à la merci d\'une dérive qu\'il ne voit pas venir. D\'où la pratique la plus saine : un cadrage gratuit, puis un forfait pour ce qui est clair et un temps passé plafonné pour ce qui ne l\'est pas encore.',
                'Pour une agence qui sous-traite, le temps passé est souvent le plus simple : l\'agence garde la relation avec son client, découpe le travail en tickets et suit le temps consommé. Pour une PME qui lance son premier site, le forfait rassure : elle connaît le prix avant de commencer. Pour une application déjà en service, la maintenance prend le relais, en forfait mensuel quand les besoins sont réguliers, à la demande quand ils sont rares.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un développeur web freelance, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Prix de départ publiés au 3 octobre 2026, en francs CFA, avec leur conversion indicative en euros au taux fixe de 655,957 FCFA pour un euro publié par la BCEAO. Tout le reste est établi sur devis, gratuit après cadrage.',
            'items'      => [
                ['offre' => 'Landing page', 'prix' => 'À partir de ' . $tarifs['Landing page'], 'inclus' => [ucfirst($euros($tarifs['Landing page'])), 'Une page unique pour une offre, un lancement ou une campagne', 'Une seule action demandée au visiteur : appeler, écrire, s\'inscrire', 'Délai fixé au cadrage']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de ' . $tarifs['Site vitrine'], 'inclus' => [ucfirst($euros($tarifs['Site vitrine'])), 'Délai type : ' . $delais['Site vitrine'], 'Nom de domaine, accès et code à votre nom', 'Formation à la mise à jour des contenus']],
                ['offre' => 'Application web sur mesure', 'prix' => 'Sur devis', 'inclus' => ['Délai type : ' . $delais['Application sur mesure'], 'Cadrage et maquettes avant le prix ferme', 'Livraisons par lots sur un serveur de recette', 'Documentation technique et passation']],
                ['offre' => 'Mission au temps passé', 'prix' => 'Sur devis', 'inclus' => ['Taux et plafond fixés au devis', 'Renfort, reprise de code, sous-traitance d\'agence', 'Travail versé sur votre propre dépôt', 'Points réguliers sur le temps consommé']],
                ['offre' => 'Maintenance', 'prix' => 'Sur devis', 'inclus' => ['Forfait mensuel ou intervention à la demande', 'Mises à jour, sauvegardes et corrections', 'Le même interlocuteur, joignable sur WhatsApp']],
            ],
            'variations' => [
                'Le nombre d\'écrans ou de pages, et le nombre de rôles d\'utilisateurs (client, vendeur, gestionnaire, administrateur).',
                'Les intégrations : paiement par mobile money ou par carte, ERP comme Odoo ou Dolibarr, WhatsApp, cartes, API de partenaires.',
                'La reprise de données existantes : fichiers Excel à nettoyer, ancienne base à migrer, photos à classer.',
                'Les contenus : textes et images fournis par vous, ou à produire avec un rédacteur ou un photographe.',
                'Le niveau d\'exigence sur la sécurité et les données sensibles (santé, finances, mineurs).',
                'Le délai imposé : une échéance serrée réduit la marge de manœuvre et peut obliger à resserrer le périmètre.',
                'Les frais de tiers, payés directement par vous : hébergement, nom de domaine, services d\'envoi, commissions de paiement.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment payer un freelance basé à Cotonou depuis le Bénin, l\'Europe ou le Canada ?',
            'paragraphes' => [
                'Les moyens acceptés sont les suivants : ' . $paiement . '. Le règlement suit l\'échéancier du devis, en plusieurs tranches : un acompte au démarrage, des paiements liés aux étapes validées, le solde à la mise en ligne. Cet étalement protège les deux parties : vous ne payez jamais très en avance sur ce que vous avez vu fonctionner, et le développeur n\'avance pas des semaines de travail sans contrepartie.',
                'Au Bénin et dans la sous-région, le mobile money est le moyen le plus courant. Le <a href="https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024">rapport de la BCEAO sur les services financiers numériques en 2024</a>, publié le 13 mars 2026, recense 248 millions de comptes de monnaie électronique dans l\'UEMOA fin 2024, en hausse de 18,99 % sur un an, et 69 initiatives d\'émission de monnaie par téléphonie mobile au 31 décembre 2024. Payer un acompte depuis son téléphone, à Cotonou comme à Lomé ou à Dakar, ne pose donc aucune difficulté.',
                'Depuis l\'Europe ou le Canada, la carte bancaire et PayPal sont les voies les plus directes. Le virement reste possible, mais ce n\'est pas un virement SEPA : selon la <a href="https://www.ecb.europa.eu/paym/integration/retail/sepa/html/index.en.html">Banque centrale européenne</a>, l\'espace SEPA réunit 41 pays européens (situation au 22 mai 2025), et le Bénin n\'en fait pas partie. Un virement depuis Paris, Bruxelles ou Genève suit donc le circuit international, avec les frais et délais propres à chaque banque, à vérifier avant d\'émettre l\'ordre.',
                'Pour un budget établi en euros, le change ne réserve pas de surprise : la <a href="https://www.bceao.int/fr/content/histoire-du-franc-cfa">BCEAO</a> rappelle que le franc CFA est arrimé à l\'euro depuis le 1er janvier 1999, à 655,957 FCFA pour un euro. Pour un client canadien, le dollar canadien fluctue face à l\'euro et donc face au franc CFA : mieux vaut fixer au devis la devise de référence. Richard SALANON exerce sous le statut d\'' . mb_strtolower((string) fait('statut')) . ' au Bénin, identifié par l\'IFU ' . fait('ifu') . '.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration à distance avec un client d\'Europe ou du Canada ?',
            'paragraphes' => [
                'Le déroulé est le même qu\'à Cotonou, seuls les outils changent. Les ateliers de cadrage et les démonstrations se font en visioconférence, l\'avancement se constate sur le serveur de recette, le code se lit sur le dépôt partagé, et les décisions sont reprises par écrit après chaque réunion pour que personne n\'ait à se fier à sa mémoire. Un seul canal principal pour les échanges, e-mail ou WhatsApp, évite que les décisions se dispersent entre plusieurs messageries.',
                'Le décalage horaire est faible avec l\'Europe et gérable avec le Canada. D\'après la <a href="https://www.iana.org/time-zones">base de données des fuseaux horaires de l\'IANA</a>, version 2026e publiée le 29 septembre 2026, Cotonou vit à UTC+1 toute l\'année, sans heure d\'été. Paris, Bruxelles et Genève passent de UTC+1 à UTC+2 du dernier dimanche de mars au dernier dimanche d\'octobre ; Montréal passe de UTC-5 à UTC-4 du deuxième dimanche de mars au premier dimanche de novembre.',
                'Concrètement, Paris a la même heure que Cotonou en hiver et une heure d\'avance en été ; Montréal a six heures de retard en hiver et cinq en été. Joignable ' . $horaires . ', heure de Cotonou, Richard couvre toute la journée de bureau européenne, et la matinée puis le début d\'après-midi d\'un client montréalais : de 9 h à 14 h, heure de Montréal, en hiver, et de 9 h à 15 h en été. Les réunions avec le Canada se placent donc le matin, côté Montréal.',
                'Les langues de travail sont le français et l\'anglais. Les interfaces sont écrites dans le vocabulaire de vos utilisateurs, et la documentation peut être livrée dans l\'une ou l\'autre langue. Pour un client du Québec ou d\'une région bilingue, prévoir dès le départ des fichiers de traduction permet d\'ajouter l\'anglais plus tard sans reprendre les écrans. Les pays desservis sont présentés sur la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles s\'appliquent quand un freelance du Bénin accède à vos données personnelles ?',
            'paragraphes' => [
                'Dès qu\'il manipule un fichier de clients, de patients, d\'élèves ou d\'employés pour votre compte, le freelance devient juridiquement votre sous-traitant, et vous restez responsable du traitement. Au Bénin, l\'article 386 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>, consultée le 3 octobre 2026, oblige le responsable à choisir un sous-traitant qui présente des garanties suffisantes, à fixer par contrat ses obligations de sécurité et de confidentialité, à convenir qu\'il n\'agit que sur instruction, et à consigner ces éléments par écrit ou sur support électronique.',
                'Le même code précise, à son article 451, qu\'un sous-traitant ne répond d\'un dommage que s\'il a manqué aux obligations qui lui incombent spécifiquement ou s\'il a agi en dehors des instructions licites du responsable. Autrement dit, des instructions écrites claires protègent les deux parties : elles disent au développeur ce qu\'il peut faire des données, et elles vous permettent de démontrer ce que vous lui avez demandé.',
                'Pour des données de résidents européens, l\'article 28 du RGPD, dont la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL publie le texte</a>, impose un contrat de sous-traitance : traitement sur instruction documentée, confidentialité, mesures de sécurité, et, au choix du client, suppression ou restitution des données à la fin de la prestation. Le fait que le développeur travaille depuis Cotonou ajoute une question : celle du transfert hors de l\'Union européenne, encadré par le chapitre V du règlement.',
                'Selon la <a href="https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/adequacy-decisions_en">liste des décisions d\'adéquation de la Commission européenne</a>, consultée le 3 octobre 2026, dix-sept pays, territoires ou organisations sont reconnus comme offrant une protection adéquate, le Brésil étant le dernier ajouté, en janvier 2026 ; aucun pays africain n\'y figure. Un accès depuis le Bénin à des données européennes doit donc reposer sur des garanties appropriées, en pratique les clauses contractuelles types adoptées par la Commission, prévues à l\'<a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5">article 46 du RGPD</a>.',
                'Au Canada, le <a href="https://www.priv.gc.ca/en/privacy-topics/airports-and-borders/gl_dab_090127/">Commissariat à la protection de la vie privée</a> rappelle dans ses lignes directrices de 2009 qu\'une organisation reste responsable des renseignements confiés à un tiers pour traitement, y compris à l\'étranger, et doit lui imposer par contrat une protection comparable. Au Québec, depuis septembre 2023, la <a href="https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25">Commission d\'accès à l\'information</a> exige une évaluation des facteurs relatifs à la vie privée et une entente écrite avant toute communication hors du Québec ; les sanctions peuvent atteindre 10 millions de dollars ou 2 % du chiffre d\'affaires mondial.',
                'La pratique la plus sûre consiste à réduire l\'exposition plutôt qu\'à multiplier les documents. Le développement et les tests se font sur des données fictives ou anonymisées ; l\'accès à la production n\'est ouvert que lorsqu\'il est indispensable, par un compte nominatif que vous supprimez en fin de mission ; l\'hébergement est choisi par vous, dans le pays qui convient à vos obligations. Le freelance met en place les mesures techniques ; la conformité juridique reste une décision du responsable du traitement, éventuellement avec son conseil.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles sont les limites d\'un freelance, et comment chacune se couvre-t-elle ?',
            'intro' => 'Travailler avec une seule personne présente des avantages réels et des limites tout aussi réelles. Les taire serait vous tromper ; voici comment chacune se traite concrètement.',
            'items' => [
                ['titre' => 'La disponibilité', 'texte' => 'Un indépendant mène plusieurs missions de front, comme tout prestataire. La parade est un calendrier écrit : la disponibilité réelle est annoncée avant la signature, les lots sont datés dans le devis, et un projet qui ne tient pas dans l\'agenda est refusé ou décalé plutôt qu\'accepté puis retardé.'],
                ['titre' => 'Le temps de réponse', 'texte' => 'L\'engagement est une réponse ' . $reponse . ', ' . $horaires . ', pas une astreinte immédiate. À Cotonou comme ailleurs, une coupure d\'électricité ou d\'Internet peut retarder un échange de quelques heures ; le délai de 24 heures est fixé pour absorber ces aléas plutôt que pour promettre l\'impossible.'],
                ['titre' => 'La continuité en cas d\'imprévu', 'texte' => 'Maladie, accident, changement de vie : le risque existe avec une personne seule. Il se couvre avant qu\'il survienne, par un code écrit avec des outils répandus, une documentation à jour et des accès à votre nom, de sorte qu\'un autre développeur puisse reprendre sans attendre personne.'],
                ['titre' => 'La sauvegarde du code', 'texte' => 'Le code ne doit jamais vivre uniquement sur l\'ordinateur du développeur. Il est versé régulièrement sur un dépôt qui vous appartient, que vous consultez quand vous voulez ; une copie exportée de ce dépôt peut en plus être conservée hors de la plateforme, sur un stockage que vous contrôlez.'],
                ['titre' => 'La capacité de production', 'texte' => 'Un freelance n\'a pas d\'équipe à mobiliser en renfort du jour au lendemain. Si votre échéance exige plusieurs profils en parallèle, il faut le dire au cadrage, resserrer le périmètre de la première version ou choisir une autre formule.'],
                ['titre' => 'Les métiers voisins', 'texte' => 'Graphisme, rédaction, photographie et publicité ne sont pas inclus d\'office. Ils se prévoient à part, avec vos propres prestataires ou à partir de votre charte existante, et le devis indique clairement ce qui est attendu de vous.'],
                ['titre' => 'Les garanties', 'texte' => 'Aucune grande structure ne se tient derrière un indépendant. Vos garanties sont donc contractuelles et concrètes : un devis détaillé, des étapes validées avant chaque paiement, un code et des accès à votre nom, une cession des droits écrite. Elles valent mieux qu\'une promesse générale.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel est le piège le plus coûteux quand on travaille avec un développeur indépendant ?',
            'texte' => 'Laisser le nom de domaine, l\'hébergement ou le dépôt de code au nom du prestataire. Le jour où il devient injoignable, le domaine expire, le site disparaît, les adresses e-mail cessent de fonctionner, et récupérer le tout peut prendre des semaines, quand c\'est encore possible. Vérifiez dès aujourd\'hui au nom de qui sont enregistrés votre domaine, votre compte d\'hébergement et votre code ; si ce n\'est pas le vôtre, demandez le transfert avant toute nouvelle commande. Avec Richard SALANON, ces comptes sont ouverts à votre nom dès le début du projet.',
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quels besoins répond un développeur freelance, selon les secteurs ?',
            'items' => [
                ['secteur' => 'Agence web, France ou Belgique', 'probleme' => 'Des projets refusés ou livrés en retard faute de développeur disponible pendant les pics de charge.', 'solution' => 'Un renfort au temps passé sur Laravel, Vue ou WordPress, qui travaille sur le dépôt de l\'agence et selon ses conventions, l\'agence gardant la relation avec son client. Richard SALANON travaille ainsi en télétravail pour une agence présente en Afrique et en France depuis janvier 2026.', 'lien' => ['url' => '/services/externalisation-developpement', 'texte' => 'Voir l\'externalisation du développement']],
                ['secteur' => 'Commerce de gros, Cotonou', 'probleme' => 'Stocks, ventes à crédit et relances notés dans des cahiers, avec des écarts découverts trop tard.', 'solution' => 'Le premier besoin d\'un grossiste est souvent un outil de gestion plutôt qu\'un site : un logiciel web simple, utilisable sur téléphone, qui suit le stock, les créances et les encaissements par mobile money, avec un rappel envoyé au client sur WhatsApp.', 'lien' => ['url' => '/services/application-web-sur-mesure', 'texte' => 'Voir l\'application web sur mesure']],
                ['secteur' => 'Startup, Abidjan ou Dakar', 'probleme' => 'Une idée à confronter à de vrais utilisateurs avant de lever des fonds ou de recruter une équipe.', 'solution' => 'Une première version resserrée sur le parcours essentiel, livrée par lots, avec un code documenté que l\'équipe recrutée ensuite pourra reprendre au lieu de tout réécrire.'],
                ['secteur' => 'Cabinet ou association, Suisse ou Belgique', 'probleme' => 'Des documents échangés par e-mail avec des membres ou des clients, sans contrôle de qui lit quoi.', 'solution' => 'Un espace sécurisé avec des rôles distincts, un hébergement choisi en Europe par le client, un contrat de sous-traitance conforme à l\'article 28 du RGPD et des clauses contractuelles types pour l\'accès depuis le Bénin.'],
                ['secteur' => 'Organisme de formation, Québec', 'probleme' => 'Inscriptions, paiements et attestations gérés à la main dans des tableurs.', 'solution' => 'Une plateforme d\'inscription avec paiement par carte et génération des attestations. L\'organisme mène son évaluation des facteurs relatifs à la vie privée avant de confier les données, et le développement se fait sur des données fictives.'],
                ['secteur' => 'Clinique ou cabinet médical, Bénin', 'probleme' => 'Des rendez-vous pris au téléphone, oubliés ou en double, et des fiches papier difficiles à retrouver.', 'solution' => 'Une prise de rendez-vous en ligne avec rappels, des accès limités selon le rôle de chacun et un hébergement choisi en tenant compte du code du numérique, les données de santé étant les plus sensibles.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent le plus souvent les clients qui engagent un freelance ?',
            'intro' => 'La plupart des projets qui déraillent ne butent pas sur la technique, mais sur la façon dont la mission a été préparée et suivie côté client. Ces erreurs reviennent d\'un pays à l\'autre, et chacune se corrige avant même la première ligne de code.',
            'items' => [
                ['titre' => 'Comparer des devis sur leur seul total', 'texte' => 'Deux devis au même périmètre apparent peuvent cacher des contenus très différents : l\'un inclut la recette, la documentation et la formation, l\'autre s\'arrête à la mise en ligne. Comparez poste par poste, livrable par livrable, et demandez ce qui n\'est pas compris avant de regarder le montant.'],
                ['titre' => 'Lancer le développement sans maquette validée', 'texte' => 'Sans écran dessiné et approuvé, chacun imagine son propre logiciel. Les désaccords surgissent alors à la démonstration, quand corriger coûte dix fois plus cher. Une maquette validée par écrit sert de référence commune au moment de juger la livraison.'],
                ['titre' => 'Livrer les contenus au dernier moment', 'texte' => 'Textes, photos, logo, liste des produits, tarifs : un site vitrine annoncé en ' . $delais['Site vitrine'] . ' suppose que ces éléments soient prêts. Quand ils arrivent au compte-gouttes, le calendrier glisse sans que le développeur y puisse rien. Mieux vaut les rassembler pendant la phase de maquettes.'],
                ['titre' => 'Multiplier les donneurs d\'ordres', 'texte' => 'Le gérant valide une couleur, l\'associé la change, le responsable commercial demande une page de plus sur WhatsApp. Désignez une seule personne qui tranche et qui transmet les demandes, et faites passer toutes les décisions par le même canal écrit.'],
                ['titre' => 'Partager ses propres mots de passe', 'texte' => 'Envoyer l\'identifiant du compte du gérant par message expose toute l\'entreprise. Créez plutôt un accès nominatif pour le développeur, avec les seuls droits nécessaires, que vous pourrez retirer à la fin de la mission sans changer vos propres codes.'],
                ['titre' => 'Bâcler la recette', 'texte' => 'Cliquer trois fois sur l\'accueil depuis l\'ordinateur du bureau ne suffit pas. Testez les vrais parcours, avec vos vraies données, sur les téléphones de vos clients et de vos employés, y compris d\'entrée de gamme. Une anomalie trouvée avant la mise en ligne ne coûte presque rien ; après, elle coûte des clients.'],
                ['titre' => 'Oublier l\'après dans le budget', 'texte' => 'Un site ou une application vit après sa livraison : nom de domaine à renouveler, hébergement à payer, mises à jour de sécurité, petites évolutions. Prévoir dès le départ une enveloppe annuelle évite de découvrir ces frais au moment où le site tombe.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Comment vérifier qu\'un freelance existe vraiment avant de lui verser un acompte ?',
            'texte' => 'Un profil séduisant sur un réseau social ne prouve rien. Avant tout paiement, demandez un identifiant fiscal ou professionnel, vérifiez que les profils publics (LinkedIn, GitHub) sont anciens et cohérents, faites au moins un échange en visioconférence et exigez un devis écrit qui nomme les livrables et l\'échéancier. Refusez de payer la totalité d\'avance, en particulier par mobile money à un numéro que rien ne relie à une personne identifiée. Richard SALANON, par exemple, communique son IFU (' . fait('ifu') . '), ses profils publics et son adresse e-mail professionnelle ; tout prestataire sérieux peut en faire autant.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la connexion de vos utilisateurs change-t-elle la façon de coder ?',
            'paragraphes' => [
                'Un logiciel conçu sur une fibre rapide, dans un bureau climatisé, peut devenir inutilisable sur le téléphone d\'un client à Parakou ou d\'un livreur sur une moto. Selon le rapport <a href="https://datareportal.com/reports/digital-2026-benin">Digital 2026 de DataReportal pour le Bénin</a>, publié en novembre 2025, le pays comptait 4,80 millions d\'internautes à la fin de 2025, soit 32,2 % de la population, et 16,4 millions de connexions mobiles, l\'équivalent de 110 % des habitants ; 78,7 % de ces connexions passent par la 3G, la 4G ou la 5G.',
                'Ces chiffres disent deux choses. D\'abord, l\'essentiel de vos visiteurs arrive par le téléphone : l\'écran mobile se conçoit en premier, l\'ordinateur ensuite. Ensuite, une large part de la population n\'est pas encore en ligne, ou l\'est de façon intermittente : pour toucher ces personnes, un rappel par SMS ou par WhatsApp est souvent plus efficace qu\'une notification dans l\'application.',
                'Google publie sur <a href="https://web.dev/articles/vitals">web.dev</a> des seuils de référence pour une bonne expérience : le plus grand élément de la page affiché en 2,5 secondes au plus, une réaction aux interactions en 200 millisecondes au plus, un décalage visuel inférieur ou égal à 0,1, mesurés au 75e centile des chargements, séparément sur mobile et sur ordinateur. Ces seuils servent de cible pendant le développement, et pas seulement au moment de l\'audit.',
                'Concrètement, cela se traduit par des choix précis : images compressées et dimensionnées pour chaque écran, scripts chargés seulement sur les pages qui en ont besoin, formulaires qui conservent la saisie si la connexion tombe, mode hors ligne pour les applications de terrain qui se synchronisent au retour du réseau. Pour un paiement par mobile money, la confirmation arrive parfois après plusieurs secondes : l\'application doit savoir attendre, relancer la vérification et ne jamais encaisser deux fois.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle facture recevez-vous, et comment la TVA se traite-t-elle selon votre pays ?',
            'paragraphes' => [
                'Chaque facture renvoie au devis signé et à l\'étape qu\'elle règle : acompte, lot validé ou solde. Elle porte l\'identité du prestataire, son statut et son IFU, le détail des prestations, le montant et la devise convenus au devis, francs CFA ou euros. Les frais de tiers, comme l\'hébergement ou le nom de domaine, ne transitent pas par elle : vous les réglez directement au fournisseur, à votre nom, ce qui simplifie aussi votre comptabilité.',
                'Au Bénin, la Direction générale des impôts a généralisé la facture normalisée, qui comporte, en plus des mentions classiques, des éléments de sécurité : numéro d\'identification de la machine de facturation certifiée, signature et code électroniques. D\'après la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">présentation publiée par le gouvernement béninois</a> le 27 février 2020, l\'obligation visait d\'abord les entreprises assujetties à la TVA. Si votre comptable exige un type de facture précis pour déduire la dépense, indiquez-le avant le devis.',
                'Pour une entreprise établie en France, la règle est différente. Le <a href="https://bofip.impots.gouv.fr/bofip/3218-PGP.html/identifiant=BOI-TVA-DECLA-10-10-20-20240529">Bulletin officiel des finances publiques</a> (BOI-TVA-DECLA-10-10-20, publié le 29 mai 2024) précise que, pour les services relevant de la règle générale de l\'article 259 du Code général des impôts, le preneur assujetti est redevable de la TVA lorsque le prestataire n\'est pas établi en France. Votre entreprise déclare donc elle-même la taxe : c\'est l\'autoliquidation.',
                'Pour la Belgique, la Suisse, le Canada ou un autre pays, le traitement fiscal d\'un service acheté à un prestataire du Bénin dépend de votre propre statut. Votre expert-comptable le confirmera en quelques minutes, à partir du devis : il vaut mieux poser la question au début du projet que lors de la clôture de vos comptes.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre projet web à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Comme développeur, il réunit ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ', à Cotonou, en ' . fait('formation')['annee'] . '. Il écrit aussi bien la partie serveur que l\'interface, avec les technologies présentées plus haut, et compte ' . $projets . ' projets livrés. Il a également formé ' . 'plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, ce qui se ressent dans la passation : la documentation et la formation de vos équipes font partie du travail, pas d\'une option.',
                'Il a créé <a href="' . fait('produits')[0]['url'] . '">' . fait('produits')[0]['nom'] . '</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est ' . mb_strtolower((string) fait('affiliations')[0]['role']) . ' d\'<a href="' . fait('affiliations')[0]['url'] . '">' . fait('affiliations')[0]['nom'] . '</a>. Faire vivre ses propres produits apprend ce que vit un client : arbitrer entre une fonctionnalité de plus et une date de lancement, payer un hébergement chaque mois, répondre aux utilisateurs le jour où quelque chose casse.',
                'Il a travaillé, sur place ou à distance, avec des clients des pays suivants : ' . $liste($pays) . '. Sa méthode tient en quelques engagements vérifiables : une réponse ' . $reponse . ', un cadrage gratuit avant tout chiffrage, un devis qui nomme chaque livrable, des comptes et un dépôt de code à votre nom dès le premier jour, une démonstration à chaque lot et une formation à la livraison. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a> et dans la présentation <a href="/a-propos/">à propos</a>.',
                'Si vous souhaitez qu\'une personne de votre équipe reprenne ensuite les petites évolutions, la <a href="/formation-developpement-web">formation au développement web</a> lui en donne les bases, et la <a href="/formation-vibecoding">formation au vibe coding</a> lui apprend à travailler avec les assistants de programmation sans perdre la maîtrise du code. Les pays desservis figurent sur la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Avez-vous un projet web à confier à un développeur freelance ?',
            'texte'  => 'Décrivez en quelques lignes votre activité, ce que l\'outil doit changer pour vous, l\'échéance qui compte et, si vous l\'avez, une fourchette de budget. Vous recevez une réponse ' . $reponse . ', puis une proposition de cadrage gratuit, sans engagement.',
            'bouton' => ['url' => '/contact', 'texte' => 'Décrire mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il un cahier des charges avant de vous contacter ?', 'r' => 'Non. Quelques lignes suffisent pour un premier échange : votre activité, le problème à résoudre, l\'échéance et, si possible, une idée du budget. Le cadrage gratuit sert justement à transformer ce besoin en périmètre écrit, avec les maquettes, avant tout prix ferme.'],
        ['q' => 'Que signifie « full stack », et en quoi est-ce utile pour un petit projet ?', 'r' => 'Un développeur full stack écrit à la fois la partie serveur (base de données, règles métier, API) et la partie visible (pages, formulaires, tableaux de bord). Pour un projet de taille raisonnable, cela évite de coordonner deux prestataires et de perdre de l\'information entre eux : la même personne comprend le besoin, conçoit les données et construit les écrans.'],
        ['q' => 'Pouvez-vous reprendre un site ou une application commencés par un autre développeur ?', 'r' => 'Oui, après un état des lieux : récupération des accès, sauvegarde complète, lecture du code et des versions utilisées. Un rapport écrit indique ce qui peut être repris tel quel, ce qui doit être corrigé et ce qui doit être réécrit. Quand une réécriture coûte moins cher qu\'une remise à niveau, le rapport le dit et chiffre les deux options.'],
        ['q' => 'Pouvez-vous intégrer le paiement par mobile money sur mon site ou mon application ?', 'r' => 'Oui, en général par l\'intermédiaire d\'un agrégateur de paiement qui accepte MTN, Moov et d\'autres opérateurs, ainsi que la carte bancaire. Le compte marchand est ouvert à votre nom et les commissions sont payées par vous à l\'agrégateur. Le comparatif de FedaPay, KKiaPay et CinetPay, publié sur ce site, aide à choisir.'],
        ['q' => 'Travaillez-vous avec nos propres outils : dépôt de code, tickets, serveur ?', 'r' => 'Oui. Une agence ou une équipe technique garde ses outils et ses conventions : dépôt GitHub ou GitLab, gestionnaire de tickets, règles de nommage, serveur de recette. Le travail est versé sur votre dépôt, par petites modifications relues, et le temps passé est relevé tâche par tâche.'],
        ['q' => 'Combien de temps faut-il pour démarrer un projet ?', 'r' => 'Le cadrage commence dès la réponse à votre premier message et prend quelques jours. Le développement démarre à l\'acceptation du devis et du calendrier ; la date réelle de disponibilité est annoncée avant la signature, pour que le planning écrit soit tenable plutôt que flatteur.'],
        ['q' => 'Les modifications demandées en cours de projet sont-elles facturées ?', 'r' => 'Les ajustements qui restent dans le périmètre validé, comme une correction de texte ou un réglage d\'écran, sont compris. Une nouvelle fonctionnalité fait l\'objet d\'un avenant chiffré ou passe dans un lot ultérieur si vous êtes au forfait ; au temps passé, elle s\'ajoute simplement au relevé, dans la limite du plafond convenu.'],
        ['q' => 'Pouvez-vous partir d\'une maquette réalisée par un graphiste ?', 'r' => 'Oui. Une maquette fournie, par exemple dans Figma, est intégrée fidèlement, sur ordinateur comme sur téléphone. Avant de la coder, le développeur signale les éléments qui coûteraient cher à réaliser ou qui ralentiraient la page, pour que vous puissiez arbitrer avec le graphiste.'],
        ['q' => 'Faut-il se rencontrer en personne ?', 'r' => 'Ce n\'est pas nécessaire. À Cotonou, une rencontre sur place est possible pour le cadrage ou la formation ; ailleurs, tout se fait en visioconférence, avec des démonstrations sur le serveur de recette et un compte rendu écrit après chaque réunion.'],
        ['q' => 'Utilisez-vous l\'intelligence artificielle pour écrire le code ?', 'r' => 'Les assistants de programmation accélèrent certaines tâches répétitives, comme les tests ou la documentation. Le code qu\'ils proposent est relu, testé et assumé comme le reste, et vos données réelles ne leur sont pas transmises sans votre accord.'],
    ],

    'sources' => [
        ['titre' => 'Légifrance, article L113-9 du Code de la propriété intellectuelle (logiciels créés par des employés)', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278890', 'date' => '2026-10-04'],
        ['titre' => 'Légifrance, article L131-3 du Code de la propriété intellectuelle (forme de la cession des droits)', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958', 'date' => '2026-10-04'],
        ['titre' => 'GitHub, offres et tarifs (dépôts privés et collaborateurs de l\'offre gratuite)', 'url' => 'https://github.com/pricing', 'date' => '2026-10-04'],
        ['titre' => 'php.net, versions de PHP prises en charge', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-04'],
        ['titre' => 'Documentation Laravel, notes de version et politique de support', 'url' => 'https://laravel.com/docs/releases', 'date' => '2026-10-04'],
        ['titre' => 'Node.js, calendrier des versions et support long', 'url' => 'https://nodejs.org/en/about/previous-releases', 'date' => '2026-10-04'],
        ['titre' => 'WordPress.org, prérequis d\'hébergement recommandés', 'url' => 'https://wordpress.org/about/requirements/', 'date' => '2026-10-04'],
        ['titre' => 'BCEAO, rapport annuel sur les services financiers numériques dans l\'UEMOA en 2024', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024', 'date' => '2026-10-04'],
        ['titre' => 'BCEAO, histoire du franc CFA et parité avec l\'euro', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-04'],
        ['titre' => 'Banque centrale européenne, espace unique de paiement en euros (SEPA)', 'url' => 'https://www.ecb.europa.eu/paym/integration/retail/sepa/html/index.en.html', 'date' => '2026-10-04'],
        ['titre' => 'IANA, base de données des fuseaux horaires (version 2026e)', 'url' => 'https://www.iana.org/time-zones', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD, chapitre IV (article 28, sous-traitant)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD, chapitre V (transferts hors de l\'Union, article 46)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5', 'date' => '2026-10-04'],
        ['titre' => 'Commission européenne, décisions d\'adéquation', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/adequacy-decisions_en', 'date' => '2026-10-04'],
        ['titre' => 'Commissariat à la protection de la vie privée du Canada, lignes directrices sur le traitement transfrontalier des données personnelles (2009)', 'url' => 'https://www.priv.gc.ca/en/privacy-topics/airports-and-borders/gl_dab_090127/', 'date' => '2026-10-04'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, principaux changements de la Loi 25', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25', 'date' => '2026-10-04'],
        ['titre' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-04'],
        ['titre' => 'web.dev (Google), Core Web Vitals et seuils recommandés', 'url' => 'https://web.dev/articles/vitals', 'date' => '2026-10-04'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-04'],
        ['titre' => 'BOFiP, TVA, détermination du redevable (BOI-TVA-DECLA-10-10-20)', 'url' => 'https://bofip.impots.gouv.fr/bofip/3218-PGP.html/identifiant=BOI-TVA-DECLA-10-10-20-20240529', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'site-vitrine-professionnel', 'externalisation-developpement', 'maintenance-support', 'api-rest-integrations', 'refonte-migration-de-site'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
    ],
];
