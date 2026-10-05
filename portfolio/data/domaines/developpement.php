<?php
// ============================================================
// data/domaines/developpement.php · Page domaine « Développement » (vague 1B).
// Aide à choisir parmi les 9 formations du domaine ; le gabarit affiche en
// tête les cartes des fiches publiées (vibecoding, developpement-web). Les 7
// fiches du lot B (publiées le 2026-10-12) sont citées sans lien.
// Faits externes relevés le 05/10/2026 : W3Techs, Stack Overflow 2025,
// Laravel, Flutter, Apple, Google Play, StatCounter, UIT, CNIL, fonds.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations en développement : choisir entre le web, les frameworks, le mobile, les API, le SQL et le code assisté par l\'IA, selon votre profil',
    'title'   => 'Formations en développement web et mobile | Richard SALANON',
    'meta'    => 'Neuf formations en développement, du premier site au SaaS : tableau pour choisir, parcours par profil, prérequis, formats et financement, sur devis.',
    'en_bref' => 'Le domaine Développement réunit neuf formations : les bases du web, le vibecoding, Laravel et PHP, Next.js et React, WordPress et WooCommerce, Flutter, les API REST, le SQL pour analystes métiers et la création d\'un SaaS. Cette page sert à choisir laquelle suivre, et dans quel ordre, selon que vous partez de zéro, que vous codez déjà, que vous portez un produit ou que vous voulez seulement lire vos données. Chaque formation se suit en intra, en inter, à distance ou en formule hybride, en petit groupe, et le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '9, du premier site HTML au produit vendu par abonnement'],
        ['l' => 'Publics', 'v' => 'Débutants, reconversions, développeurs, analystes, porteurs de projet'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, en petit groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change, pour une entreprise, le fait de savoir développer en interne ?',
            'paragraphes' => [
                'Une organisation qui ne sait rien du code dépend entièrement de ses prestataires : elle ne peut ni juger un devis, ni corriger une virgule sur son site, ni sortir un chiffre de sa propre base sans ouvrir un ticket. Former une ou deux personnes au développement ne supprime pas le recours aux spécialistes, mais change la relation. On sait décrire un besoin, relire une livraison, exiger un dépôt Git et une procédure de sauvegarde, et repérer le moment où une demande « simple » cache un vrai chantier.',
                'Le gain le plus rapide n\'est souvent pas là où on l\'attend. Un analyste qui écrit lui-même ses requêtes de lecture obtient en dix minutes le tableau qu\'il réclamait depuis un mois. Une chargée de communication qui administre correctement WordPress cesse de payer chaque mise à jour de page. Un dirigeant qui sait prototyper avec un assistant d\'IA arrive chez son développeur avec une maquette qui tourne, et non avec une intuition : la discussion sur le budget devient concrète.',
                'Le domaine compte neuf formations, qui ne s\'adressent pas aux mêmes personnes. Deux sont publiées en détail : la <a href="/formations/developpement-web">formation au développement web</a>, qui part de zéro jusqu\'à une application PHP et MySQL en ligne, et la <a href="/formations/vibecoding">formation vibecoding</a>, qui apprend à coder avec Claude, Cursor ou Copilot sans livrer du code jetable. Les sept autres (Laravel et PHP, Next.js et React, WordPress et WooCommerce, Flutter, API REST, SQL pour analystes métiers, Créer son SaaS de A à Z) ont chacune leur fiche, reliée en bas de page.',
                'Cette page ne résume pas ces fiches : elle aide à choisir. Elle compare les formations entre elles, propose un ordre de passage pour six profils fréquents, liste le matériel et les comptes à prévoir, puis explique les formats, le prix sur devis et les pistes de financement. Si votre besoin est un résultat livré plutôt qu\'une compétence acquise, la bonne porte est ailleurs : une <a href="/services/application-web-sur-mesure">application web sur mesure</a> ou une mission de <a href="/services/developpeur-web-freelance">développeur web freelance</a>.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation du domaine correspond à ce que vous voulez apprendre ?',
            'legende' => 'Les neuf formations du domaine Développement, leur public, ce qu\'elles apprennent à faire et le niveau d\'entrée conseillé. Un test de positionnement court confirme le niveau avant l\'inscription.',
            'entetes' => ['Formation', 'Pour qui', 'Ce qu\'elle apprend à faire', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/developpement-web">Développement web (HTML, CSS, JS, PHP, MySQL)</a>', 'Débutants complets, personnes en reconversion, équipes qui entretiennent un site', 'Construire des pages, puis une application avec base de données, comptes et administration, et la mettre en ligne', 'Aucun en code ; être à l\'aise avec un ordinateur et ses fichiers'],
                ['<a href="/formations/vibecoding">Vibecoding : coder avec Claude, Cursor, Copilot</a>', 'Développeurs, porteurs de projet, équipes métier qui veulent bâtir leurs outils', 'Cadrer un projet, faire écrire le code par un assistant, relire chaque modification, tester, versionner et publier', 'Aucun niveau de code exigé ; un projet réel en tête'],
                ['Laravel et PHP', 'Développeurs PHP, sortants du parcours web, équipes qui maintiennent une application Laravel', 'Structurer une application avec routes, contrôleurs, modèles Eloquent, authentification, puis la déployer', 'PHP objet, Composer, bases de SQL et de Git'],
                ['Next.js et React', 'Développeurs qui connaissent JavaScript et visent des interfaces riches', 'Découper une interface en composants, choisir entre rendu serveur et rendu navigateur, router, déployer', 'JavaScript moderne : fonctions, objets, modules, appels asynchrones'],
                ['WordPress et WooCommerce', 'Équipes qui administrent elles-mêmes leur site ou leur boutique', 'Gérer pages, médias, extensions, mises à jour, produits, commandes et sauvegardes sans casser le site', 'Aucun en code ; un site existant ou un projet de site'],
                ['Développement mobile Flutter', 'Développeurs qui veulent publier sur Android et iOS avec un seul code', 'Construire des écrans en Dart, gérer l\'état et les données, publier dans le Play Store et l\'App Store', 'Bases de programmation dans un langage quelconque'],
                ['API REST', 'Développeurs back-end, intégrateurs, équipes qui relient plusieurs logiciels', 'Concevoir des points d\'accès, les sécuriser, les documenter et les tester', 'Savoir écrire une application côté serveur et une requête SQL'],
                ['SQL pour analystes métiers', 'Contrôleurs de gestion, comptables, analystes, responsables commerciaux', 'Écrire des requêtes de lecture : filtrer, regrouper, joindre des tables, calculer des indicateurs', 'Aucun en code ; maîtriser un tableur et connaître ses propres données'],
                ['Créer son SaaS de A à Z', 'Porteurs de produit, développeurs indépendants, éditeurs en devenir', 'Passer de l\'idée au premier client payant : abonnements, comptes multi-clients, paiement en ligne', 'Avoir un produit à vendre ; savoir coder ou être prêt à piloter un développeur'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles questions trancher avant de choisir une formation ?',
            'intro' => 'La plupart des hésitations disparaissent quand on répond par écrit à cinq ou six questions simples. Ce sont celles que pose le premier échange, avant tout devis.',
            'items' => [
                ['titre' => 'Construire soi-même, ou savoir superviser ?', 'texte' => 'Quelqu\'un qui veut produire du code doit passer par les bases, puis par un framework. Quelqu\'un qui veut seulement piloter un prestataire tire davantage d\'une formation courte qui apprend à lire, à tester et à poser les bonnes questions, comme le vibecoding sur un petit projet personnel.'],
                ['titre' => 'Un site à faire vivre, ou une application à concevoir ?', 'texte' => 'Mettre à jour des pages, des produits et des extensions relève de WordPress et WooCommerce. Gérer des règles métier, des droits d\'accès et des calculs relève de Laravel, de Next.js ou des API. Les confondre, c\'est apprendre à coder pour changer une photo, ou bricoler une extension pour gérer une facturation.'],
                ['titre' => 'Le navigateur, le téléphone, ou les deux ?', 'texte' => 'Une application web s\'ouvre partout, sans magasin d\'applications. Une application installée sur le téléphone se justifie pour l\'appareil photo, le travail hors connexion ou les notifications. Flutter couvre Android et iOS avec un seul code, mais demande des comptes développeur et, pour iOS, un Mac.'],
                ['titre' => 'Écrire des données, ou seulement les lire ?', 'texte' => 'Analyser ses ventes, ses stocks ou ses impayés ne demande pas de savoir programmer une application : des requêtes de lecture suffisent. C\'est l\'objet de la formation SQL pour analystes, qui ne touche jamais à l\'écriture en base.'],
                ['titre' => 'Savez-vous lire du code aujourd\'hui ?', 'texte' => 'Un assistant d\'IA écrit vite, mais il faut juger ce qu\'il écrit. Sans aucune base, le vibecoding reste possible sur un prototype ; pour un outil qui accueillera de vrais utilisateurs, mieux vaut suivre d\'abord au moins les premiers paliers du parcours web.'],
                ['titre' => 'Combien d\'heures par semaine, pendant combien de temps ?', 'texte' => 'Apprendre à développer se joue entre les séances. Une personne qui ne peut pas réserver quelques heures de pratique par semaine progressera mieux avec une formation courte et ciblée qu\'avec un parcours long qu\'elle abandonnera au milieu.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Coder à la main, coder avec l\'IA, administrer un outil ou faire développer : quelle voie pour votre projet ?',
            'options'  => ['Bases du web, puis framework', 'Vibecoding', 'WordPress et WooCommerce', 'Confier le projet à un prestataire'],
            'criteres' => [
                ['critere' => 'Ce que vous obtenez', 'valeurs' => ['Une compétence durable : comprendre, écrire et maintenir une application', 'Un prototype ou un outil interne construit vite, que vous savez relire', 'Un site ou une boutique que votre équipe fait vivre sans développeur', 'Un résultat livré, sans compétence acquise en interne']],
                ['critere' => 'Investissement en temps', 'valeurs' => ['Le plus élevé : plusieurs semaines de pratique régulière', 'Court pour démarrer, plus long pour atteindre un code fiable', 'Modéré : quelques séances et des procédures écrites', 'Faible pour vous, mais du temps de cadrage et de recette']],
                ['critere' => 'Ce qu\'il faut savoir avant', 'valeurs' => ['Rien pour les bases ; les bases pour le framework', 'Décrire précisément son métier ; lire un peu de code aide beaucoup', 'Rien en code', 'Savoir exprimer son besoin et vérifier une livraison']],
                ['critere' => 'Risque principal', 'valeurs' => ['Abandonner en route faute de projet fil rouge', 'Accepter du code qu\'on ne comprend pas', 'Empiler les extensions jusqu\'à rendre le site fragile', 'Dépendre d\'un tiers pour la moindre modification']],
                ['critere' => 'Le bon choix quand', 'valeurs' => ['Vous visez un métier technique ou un poste de référent', 'Vous voulez tester une idée avant d\'investir', 'Le site existe et doit simplement être bien tenu', 'Le délai compte plus que l\'autonomie']],
            ],
            'verdict'  => 'Ces voies se combinent : beaucoup de porteurs de projet font développer le cœur de leur produit, apprennent le vibecoding pour leurs outils annexes et forment une personne à l\'administration du site. Le premier échange sert à trouver ce dosage.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Laravel, Next.js, WordPress ou Flutter : quel outil pour quel projet ?',
            'legende' => 'Correspondance entre les projets les plus fréquents et la formation qui y prépare le mieux. Un même projet peut en mobiliser deux, par exemple une API Laravel servant une application Flutter.',
            'entetes' => ['Projet', 'Outil le plus adapté', 'Formation conseillée', 'Pourquoi'],
            'lignes'  => [
                ['Site vitrine mis à jour par l\'équipe', 'WordPress', 'WordPress et WooCommerce', 'L\'interface d\'administration est connue, les hébergeurs l\'installent en un clic, et l\'équipe publie sans écrire de code.'],
                ['Boutique en ligne de taille modeste', 'WooCommerce', 'WordPress et WooCommerce, puis la <a href="/formations/e-commerce">formation e-commerce</a> pour l\'exploitation', 'L\'outil se maîtrise vite ; faire tourner la boutique (catalogue, livraison, service client) est un autre métier.'],
                ['Application de gestion interne : demandes, stocks, interventions', 'Laravel', 'Laravel et PHP', 'Authentification, droits, validation et base de données sont fournis par le framework, sur un hébergement PHP courant.'],
                ['Interface très interactive ou site de contenu à fort trafic', 'Next.js et React', 'Next.js et React', 'Le rendu côté serveur et les composants réutilisables conviennent aux interfaces riches et aux pages qui doivent s\'afficher vite.'],
                ['Application installée sur Android et iPhone', 'Flutter', 'Développement mobile Flutter', 'Un seul code pour deux plateformes, avec accès à l\'appareil photo, aux notifications et au mode hors connexion.'],
                ['Relier un logiciel à un autre, ou ouvrir ses données à un partenaire', 'API REST', 'API REST', 'Une API documentée et sécurisée évite les exports manuels et les accès directs à la base.'],
                ['Tableau de bord à partir de la base de l\'entreprise', 'SQL', 'SQL pour analystes métiers', 'Des requêtes de lecture suffisent ; aucune application à développer.'],
                ['Produit vendu par abonnement à plusieurs clients', 'Selon l\'équipe : Laravel ou Next.js', 'Créer son SaaS de A à Z', 'Abonnements, séparation des données de chaque client et paiement se conçoivent dès le départ.'],
                ['Premier prototype pour convaincre un associé ou un financeur', 'Un assistant de code', '<a href="/formations/vibecoding">Vibecoding</a>', 'Une démonstration qui tourne en quelques jours, à condition de la traiter comme un prototype.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel parcours suivre selon votre profil ?',
            'legende' => 'Six profils fréquents, l\'ordre des formations conseillé pour chacun et ce qu\'il faut savoir faire avant de passer à l\'étape suivante. L\'ordre s\'ajuste après le test de positionnement.',
            'entetes' => ['Profil', 'Ordre conseillé', 'Point de contrôle avant l\'étape suivante'],
            'lignes'  => [
                ['Débutant complet', 'Développement web, puis WordPress et WooCommerce ou Laravel et PHP selon l\'objectif, puis vibecoding', 'Un site en ligne dont on sait expliquer chaque ligne'],
                ['Développeur en reconversion', 'Paliers manquants du développement web, puis Laravel et PHP ou Next.js et React, puis API REST et vibecoding', 'Deux projets publiés dans des dépôts Git propres'],
                ['Développeur PHP qui veut un framework', 'Laravel et PHP, puis API REST, puis vibecoding ou Créer son SaaS', 'Écrire une classe, installer une dépendance avec Composer, travailler sur une branche Git'],
                ['Porteur de projet SaaS', 'Vibecoding pour le prototype, puis Créer son SaaS ; si l\'on code soi-même, Laravel et PHP ou Next.js et React avant', 'Un premier client prêt à payer, ou au moins à tester sérieusement'],
                ['Analyste qui veut lire ses données', 'SQL pour analystes métiers, éventuellement précédé de la <a href="/formations/excel-google-sheets">formation Excel et Google Sheets</a>', 'Un accès en lecture seule à une copie de la base'],
                ['Entrepreneur qui veut prototyper avec l\'IA', 'Atelier découverte ou formation complète de vibecoding, puis Créer son SaaS si le prototype devient un produit', 'Une fiche d\'une page qui décrit utilisateurs, écrans et interdits'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment chaque profil avance-t-il, étape par étape ?',
            'paragraphes' => [
                '<strong>Débutant complet.</strong> Tout commence par les bases du web, parce qu\'un framework ou un assistant de code cache ce qu\'on n\'a jamais vu. La question décisive arrive après le premier site en ligne : voulez-vous faire vivre des sites pour d\'autres, ou construire des applications ? Dans le premier cas, WordPress et WooCommerce donnent vite un métier concret ; dans le second, Laravel prolonge directement le PHP appris. Le vibecoding vient en dernier, quand on sait juger ce que l\'assistant propose.',
                '<strong>Développeur en reconversion.</strong> Celui qui a déjà suivi des tutoriels n\'a pas besoin de tout reprendre : le test de positionnement repère les paliers du parcours web qui manquent, souvent la base de données, la sécurité des formulaires et la mise en production. Le choix entre Laravel et Next.js dépend ensuite des offres que l\'on vise localement. Les API REST et le vibecoding complètent le profil. Aucune formation ne garantit un emploi ; des projets en ligne, avec un code ouvert, restent la meilleure preuve à présenter.',
                '<strong>Développeur PHP qui veut un framework.</strong> Il entre directement dans la formation Laravel, à condition d\'écrire du PHP orienté objet et d\'utiliser Composer et Git sans hésiter. S\'il code encore en fichiers mêlant HTML, SQL et logique, une remise à niveau sur les paliers avancés du parcours web évite de subir le framework. La suite logique est l\'API REST, qui sert dès qu\'une application mobile ou un partenaire doit consommer ses données.',
                '<strong>Porteur de projet SaaS.</strong> S\'il ne code pas, il commence par le vibecoding pour construire une démonstration et vérifier que des clients s\'y intéressent, puis suit Créer son SaaS pour comprendre abonnements, séparation des clients et paiement, et décider en connaissance de cause de ce qu\'il confie à un prestataire, par exemple pour un <a href="/services/saas-espace-client">SaaS ou un espace client</a>. S\'il code, il passe d\'abord par Laravel ou Next.js. Dans les deux cas, chercher le premier client avant de bâtir l\'architecture complète évite des mois de travail inutile.',
                '<strong>Analyste qui veut lire ses données.</strong> Il n\'a besoin d\'aucune autre formation du domaine. La formation SQL pour analystes métiers lui apprend à interroger une copie de la base de son logiciel de gestion, de sa boutique ou de son application métier, en lecture seule. Si ses calculs se font encore à la main dans des tableurs fragiles, la formation Excel et Google Sheets du domaine ERP et outils de gestion peut précéder, pour fiabiliser ce qui existe avant d\'aller chercher la donnée à la source.',
                '<strong>Entrepreneur qui veut prototyper avec l\'IA.</strong> Une demi-journée d\'atelier suffit à savoir si l\'approche lui convient ; les deux jours de formation complète lui apprennent à mener un vrai prototype jusqu\'à une version en ligne. Si le prototype séduit, deux chemins s\'ouvrent : suivre Créer son SaaS pour en faire un produit, ou le confier à un développeur avec une fiche de projet claire. Pour ajouter de l\'IA à un logiciel déjà en service, c\'est une autre formation, présentée plus bas.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels prérequis, quel matériel et quels comptes prévoir pour chaque formation ?',
            'legende' => 'Matériel et comptes à préparer avant la première séance. Les frais d\'éditeur, relevés le 5 octobre 2026 sur les pages officielles citées dans les sources, sont payés par le participant ou l\'entreprise, à leur nom, en dehors du prix de la formation.',
            'entetes' => ['Formation', 'Niveau d\'entrée', 'Matériel', 'Comptes et frais d\'éditeur'],
            'lignes'  => [
                ['Développement web', 'Débutant', 'Ordinateur portable sous Windows, macOS ou Linux, avec droits d\'installation', 'Compte GitHub gratuit ; hébergement et nom de domaine pris au nom du participant pour les mises en ligne'],
                ['Vibecoding', 'Débutant à confirmé', 'Ordinateur portable, connexion stable', 'Compte GitHub ; compte sur l\'assistant retenu, avec une formule gratuite ou payante selon l\'usage'],
                ['Laravel et PHP', 'Intermédiaire', 'Ordinateur capable de faire tourner PHP 8.3 au moins, Composer et une base de données en local', 'Aucun abonnement obligatoire ; hébergement compatible avec la version de PHP exigée'],
                ['Next.js et React', 'Intermédiaire', 'Ordinateur avec Node.js installé', 'Compte sur une plateforme d\'hébergement, une formule gratuite suffit pour les exercices'],
                ['WordPress et WooCommerce', 'Débutant', 'Ordinateur ; accès administrateur au site, ou copie de test', 'Hébergement du site ; extensions payantes seulement si votre site en utilise déjà'],
                ['Développement mobile Flutter', 'Intermédiaire', 'Ordinateur assez puissant pour un émulateur ; un Mac obligatoire pour compiler vers iOS ; un téléphone Android de test', 'Google Play : 25 dollars une seule fois ; Apple Developer Program : 99 dollars par an, avec exonération possible pour certaines ONG, écoles et administrations'],
                ['API REST', 'Intermédiaire', 'Ordinateur avec l\'environnement de son langage et un client d\'API', 'Aucun abonnement obligatoire'],
                ['SQL pour analystes métiers', 'Débutant', 'Ordinateur ; outil de requête installé ou accessible en ligne', 'Accès en lecture seule à une copie de la base de l\'entreprise, ou jeu de données d\'exercice fourni'],
                ['Créer son SaaS de A à Z', 'Variable', 'Ordinateur ; le projet et ses premiers documents', 'Compte de test chez un prestataire de paiement, sans transaction réelle pendant la formation'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que faut-il savoir sur les outils et leurs versions avant de s\'inscrire ?',
            'paragraphes' => [
                'Laravel sort une version majeure par an. Selon les <a href="https://laravel.com/docs/13.x/releases">notes de version officielles</a>, consultées le 5 octobre 2026, Laravel 13 est sorti le 17 mars 2026 et exige au minimum PHP 8.3 ; chaque version reçoit des corrections de bogues pendant 18 mois et des correctifs de sécurité pendant 2 ans. Une application restée sur Laravel 11 ne reçoit plus rien depuis le 12 mars 2026. C\'est pourquoi la formation Laravel porte sur la version en cours et apprend aussi à monter de version.',
                'Pour Flutter, la <a href="https://docs.flutter.dev/reference/supported-platforms">page des plateformes prises en charge</a>, mise à jour le 22 septembre 2026, décrit Flutter 3.47. La <a href="https://docs.flutter.dev/platform-integration/ios/setup">documentation iOS</a> fait passer toute compilation pour l\'iPhone par Xcode, l\'outil d\'Apple distribué sur le Mac App Store. Concrètement, un participant sans Mac peut apprendre Flutter et publier sur Android, mais ne publiera pas lui-même sur l\'App Store.',
                'Publier dans les magasins a un coût fixe. Selon l\'<a href="https://support.google.com/googleplay/android-developer/answer/6112435?hl=fr">aide de la Play Console</a>, l\'inscription comme développeur Google Play coûte 25 dollars, payés une seule fois. Selon la <a href="https://developer.apple.com/programs/enroll/">page d\'inscription d\'Apple</a>, l\'Apple Developer Program coûte 99 dollars par année d\'adhésion, avec une exonération possible pour les organisations à but non lucratif, les établissements d\'enseignement accrédités et les entités publiques. Ces comptes s\'ouvrent au nom de l\'entreprise, jamais à celui du formateur.',
                'Pour WordPress, la <a href="https://w3techs.com/technologies/details/cm-wordpress">mesure de W3Techs au 5 octobre 2026</a> donne une idée de l\'enjeu : 40,1 % de tous les sites web l\'utilisent, soit 58,6 % des sites dont le système de gestion de contenu est connu, et la version 7 équipe 64,4 % d\'entre eux. Selon <a href="https://w3techs.com/technologies/details/cm-woocommerce">W3Techs</a>, WooCommerce équipe 7,9 % de tous les sites et 47,6 % des systèmes de commerce en ligne repérés. Savoir tenir ces outils à jour est donc une compétence utile très largement.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres aident à choisir une technologie en 2026 ?',
            'items' => [
                ['valeur' => '40,1 %', 'libelle' => 'Part de tous les sites web qui utilisent WordPress, relevée le 5 octobre 2026', 'source' => 'W3Techs', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress'],
                ['valeur' => '13,6 %', 'libelle' => 'Part des 23 678 développeurs répondants qui ont travaillé de façon approfondie avec WordPress dans l\'année, contre 44,7 % pour React (enquête 2025)', 'source' => 'Stack Overflow, Developer Survey 2025', 'url' => 'https://survey.stackoverflow.co/2025/technology'],
                ['valeur' => '20,8 %', 'libelle' => 'Part des mêmes répondants qui travaillent avec Next.js, contre 8,9 % pour Laravel (enquête 2025)', 'source' => 'Stack Overflow, Developer Survey 2025', 'url' => 'https://survey.stackoverflow.co/2025/technology'],
                ['valeur' => '55,6 %', 'libelle' => 'Part des 26 083 répondants qui utilisent PostgreSQL, devant MySQL (40,5 %) et SQLite (37,5 %), en 2025', 'source' => 'Stack Overflow, Developer Survey 2025', 'url' => 'https://survey.stackoverflow.co/2025/technology'],
                ['valeur' => '83,38 %', 'libelle' => 'Part d\'Android dans les systèmes mobiles utilisés en Afrique en septembre 2026, contre 16,58 % pour iOS', 'source' => 'StatCounter Global Stats', 'url' => 'https://gs.statcounter.com/os-market-share/mobile/africa'],
                ['valeur' => '35,31 %', 'libelle' => 'Part d\'iOS dans les systèmes mobiles utilisés en Europe en septembre 2026, contre 64,68 % pour Android', 'source' => 'StatCounter Global Stats', 'url' => 'https://gs.statcounter.com/os-market-share/mobile/europe'],
                ['valeur' => '18 mois', 'libelle' => 'Durée des corrections de bogues pour chaque version majeure de Laravel, suivie de correctifs de sécurité jusqu\'à 2 ans (notes consultées le 5 octobre 2026)', 'source' => 'Laravel, notes de version', 'url' => 'https://laravel.com/docs/13.x/releases'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent ces chiffres pour votre choix de formation ?',
            'paragraphes' => [
                'Le contraste le plus parlant oppose WordPress à sa place chez les développeurs. Il fait tourner 40,1 % des sites selon W3Techs, mais seuls 13,6 % des répondants de l\'enquête 2025 de Stack Overflow disent y avoir travaillé de façon approfondie. Autrement dit, la plupart des sites WordPress sont tenus par des personnes qui ne sont pas développeurs. C\'est exactement le public de la formation WordPress et WooCommerce : apprendre à administrer proprement, pas à écrire des extensions.',
                'Côté applications, React reste l\'outil d\'interface le plus cité par les développeurs (44,7 %), et Next.js, qui s\'appuie sur lui, atteint 20,8 %. Laravel pèse moins dans cette enquête mondiale (8,9 %), mais il s\'appuie sur PHP, que proposent tous les hébergements d\'entrée de gamme en Afrique francophone comme en Europe. Le bon choix dépend moins de la popularité que du projet et du marché visé : une PME qui veut une application de gestion sur un hébergement simple sera mieux servie par Laravel.',
                'Pour le mobile, la carte n\'est pas la même des deux côtés de la Méditerranée. En septembre 2026, selon StatCounter, Android représente 83,38 % des systèmes mobiles utilisés en Afrique, contre 64,68 % en Europe, où iOS dépasse 35 %. Une application destinée à une clientèle africaine doit d\'abord bien fonctionner sur des téléphones Android d\'entrée de gamme ; une application destinée à l\'Europe ne peut pas négliger l\'iPhone. Flutter répond aux deux cas avec un seul code.',
                'Pour les données, enfin, PostgreSQL, MySQL et SQLite se partagent l\'usage des développeurs interrogés en 2025. Les requêtes de lecture s\'écrivent presque de la même façon dans les trois. La formation SQL pour analystes enseigne ce socle commun, puis signale les quelques différences propres au moteur de votre logiciel, pour que les requêtes apprises restent utiles si l\'entreprise change d\'outil.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : comment s\'organisent les formations du domaine ?',
            'legende' => 'Les quatre formats valent pour les neuf formations. Le choix se fait au premier échange, selon le nombre de personnes, leur dispersion, la connexion disponible et la confidentialité du code.',
            'entetes' => ['Format', 'Ce qu\'il permet en développement', 'Exemple de situation'],
            'lignes'  => [
                ['Intra-entreprise', 'Travailler sur le code, la base et les outils réels de l\'organisation, ou sur une copie anonymisée ; fixer des règles d\'équipe (revue, branches, mises en production)', 'Une équipe reprend une application Laravel livrée par un prestataire et doit apprendre à la maintenir'],
                ['Inter-entreprises', 'Chacun avance sur son propre projet, sans montrer de code interne au groupe ; coût partagé', 'Deux porteurs de projet et un développeur indépendant veulent apprendre à construire un SaaS'],
                ['À distance', 'Séances courtes avec partage d\'écran et relecture directement dans le dépôt Git du participant', 'Une équipe répartie entre Cotonou, Abidjan et Bruxelles suit la formation API REST'],
                ['Hybride', 'Installation des postes et premiers pas en salle, puis séances à distance et suivi en ligne', 'Des débutants complets démarrent le parcours web ensemble, puis continuent depuis chez eux'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment enchaîner plusieurs formations sans perdre le fil ?',
            'paragraphes' => [
                'Le plus efficace est de garder le même projet d\'une formation à l\'autre. Le site construit dans le parcours web devient l\'application reprise en Laravel, puis exposée par une API, puis consommée par une application Flutter. Chaque formation ajoute une couche à un code que le participant connaît déjà, au lieu de repartir d\'un exemple neuf. Ce fil rouge se décide dès le premier devis, quand plusieurs formations sont commandées ensemble.',
                'Entre deux formations, il faut laisser quelques semaines de pratique seule : c\'est là que l\'on découvre ce qui n\'était pas acquis. Enchaîner trois formations en un mois donne l\'illusion d\'avancer vite, mais la deuxième s\'appuie alors sur des bases encore fragiles. Le calendrier proposé tient compte de ce temps, et un court bilan entre deux étapes permet d\'ajuster la suite, voire de supprimer une formation devenue inutile.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûtent les formations en développement, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun montant n\'est publié : chaque formation du domaine est chiffrée sur devis, après un premier échange. Ce premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Une formation seule', 'prix' => 'Sur devis', 'inclus' => ['Test de positionnement', 'Séances en petit groupe', 'Supports, exercices et corrigés', 'Attestation de fin de formation']],
                ['offre' => 'Un parcours de plusieurs formations', 'prix' => 'Sur devis', 'inclus' => ['Ordre de passage établi selon le profil', 'Projet fil rouge conservé d\'une étape à l\'autre', 'Bilan entre deux formations', 'Calendrier étalé sur plusieurs mois']],
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Quelques heures sur un sujet', 'Démonstration et premier résultat de chacun', 'Conseil sur la formation à suivre ensuite']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Questions d\'application pendant la période convenue', 'Relecture du code du projet', 'Séance de rattrapage si nécessaire']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, car on ne relit bien que le code d\'un petit groupe.',
                'La durée totale et le nombre de formations enchaînées.',
                'La personnalisation : exercices sur votre propre code ou votre propre base, copie anonymisée à préparer.',
                'Le mode : présentiel, à distance ou hybride, et les déplacements hors de Cotonou.',
                'La durée du suivi après la dernière séance.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge un parcours en développement ?',
            'paragraphes' => [
                'Parfois, et jamais sans vérification préalable. En Côte d\'Ivoire, la page des <a href="https://fdfp.ci/procedures-dhabilitation/">procédures d\'habilitation du FDFP</a>, consultée le 5 octobre 2026, impose l\'habilitation à tout opérateur de formation privé qui prétend à ses financements, en exemptant les structures basées hors du pays, et l\'accorde pour une année. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> propose un guichet pour le personnel des entreprises, avec une demande de financement en ligne.',
                'En France, selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, tout prestataire qui veut accéder aux fonds publics ou mutualisés, dont ceux des opérateurs de compétences, doit être certifié Qualiopi depuis le 1er janvier 2022. Richard SALANON n\'affiche ni certification Qualiopi ni habilitation ou agrément d\'un fonds. Pour un parcours de plusieurs formations, posez la question au fonds par écrit, programme et devis en main, avant de signer, et prévoyez le budget sans prise en charge. Le détail des dispositifs figure sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font perdre des mois quand on apprend à développer ?',
            'intro' => 'Ces erreurs reviennent chez les débutants comme chez des développeurs expérimentés qui changent d\'outil. Les éviter compte davantage que le choix de la technologie.',
            'items' => [
                ['titre' => 'Commencer par le framework', 'texte' => 'Laravel ou Next.js font beaucoup de choses à votre place. Sans les bases, on recopie des commandes sans comprendre ce qu\'elles produisent, et la première erreur inhabituelle bloque tout. Le framework s\'apprend en quelques semaines quand le socle est là, en plusieurs mois de frustration sinon.'],
                ['titre' => 'Accumuler les tutoriels sans rien terminer', 'texte' => 'Regarder un tutoriel donne l\'impression d\'apprendre. Seul un projet mené jusqu\'à la mise en ligne, avec ses cas d\'erreur et sa sauvegarde, apprend le métier. Chaque formation du domaine se termine donc sur un résultat qui tourne.'],
                ['titre' => 'Accepter le code de l\'assistant sans le lire', 'texte' => 'L\'IA écrit vite et se trompe avec aplomb : fonction inventée, contrôle d\'accès oublié, mot de passe laissé dans le code. Celui qui ne lit pas les modifications finit par livrer des failles qu\'il ne sait même pas chercher.'],
                ['titre' => 'Choisir Flutter pour l\'iPhone sans Mac', 'texte' => 'La compilation pour iOS passe par Xcode, qui ne tourne que sur un Mac. On le découvre parfois après avoir promis l\'application à un client. Le matériel se vérifie avant l\'inscription, pas le jour de la publication.'],
                ['titre' => 'Construire tout le SaaS avant le premier client', 'texte' => 'Gestion fine des droits, tarifs à plusieurs niveaux, tableau de bord complet : des mois de travail pour un produit que personne n\'a encore accepté de payer. Une version minimale vendue à quelques clients en dit plus que n\'importe quelle architecture.'],
                ['titre' => 'Interroger la base de production', 'texte' => 'Une requête mal écrite peut ralentir le logiciel de toute l\'entreprise, et une modification par erreur peut effacer des données. L\'analyste travaille sur une copie ou avec un compte en lecture seule, sans exception.'],
                ['titre' => 'Empiler les extensions WordPress', 'texte' => 'Chaque extension ajoutée est un code de plus à mettre à jour et une faille possible. Un site qui en accumule des dizaines devient lent et fragile. On apprend à choisir peu d\'extensions, maintenues, et à tester chaque mise à jour sur une copie.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel risque prendre au sérieux dès la première mise en ligne ?',
            'texte' => 'Mettre en production sans procédure écrite. La plupart des pannes graves ne viennent pas d\'un code complexe, mais d\'une étape oubliée : un fichier non copié sur un serveur, une ancienne fonction restée active, une sauvegarde jamais testée. L\'<a href="/histoires/knight-capital">histoire de Knight Capital</a> montre jusqu\'où peut aller une mise en production incomplète, et celle de <a href="/histoires/british-airways-piratage">British Airways</a> ce que coûte un script de page de paiement que personne ne surveille. Quelle que soit la formation suivie, chaque projet du domaine se termine par une liste de contrôle de mise en ligne et une restauration de sauvegarde réellement essayée.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, téléphones, paiements, données : que change le contexte local ?',
            'paragraphes' => [
                'La connexion conditionne la façon d\'apprendre autant que la façon de développer. Selon les <a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">chiffres 2025 de l\'Union internationale des télécommunications</a>, 74 % de la population mondiale utilise Internet, mais seulement 36 % en Afrique, contre 88 à 93 % en Europe. Les formations du domaine en tiennent compte : installations faites avant la première séance, dépendances téléchargées à l\'avance, exercices qui continuent hors ligne. Les applications construites doivent elles aussi supporter une connexion lente : pages légères, images compressées, enregistrement local quand le réseau tombe.',
                'Le paiement change la conception d\'un produit. En Afrique de l\'Ouest, une boutique ou un SaaS qui n\'accepte que la carte bancaire perd une grande partie de ses clients, habitués au Mobile Money. La formation Créer son SaaS traite l\'abonnement payé par ces moyens, et le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KKiaPay et CinetPay</a> aide à choisir la passerelle. Pour une clientèle européenne, la carte et le prélèvement restent la norme, et la facturation doit suivre les règles fiscales du pays du client.',
                'Les données personnelles s\'invitent dès le premier formulaire. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre leur collecte et, dans son article 391, leur transfert vers un État tiers. En Europe, le RGPD s\'applique, et la CNIL publie un <a href="https://www.cnil.fr/fr/guide-rgpd-du-developpeur">guide RGPD du développeur</a> en dix-sept fiches, de la gestion du code source à la durée de conservation des données. Dans toutes les formations du domaine, les exercices se font sur des données fictives ou anonymisées, jamais sur de vrais fichiers clients.',
                'La langue, enfin : les séances se donnent en français, ou en anglais quand l\'équipe le demande, mais la documentation des outils et les messages d\'erreur sont souvent en anglais. Les formations apprennent à s\'en servir sans le subir. Les interfaces construites, elles, se relisent pour un public francophone : formats de date, montants en francs CFA sans centimes, numéros de téléphone locaux acceptés par les formulaires.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Et pour brancher l\'intelligence artificielle sur vos logiciels existants ?',
            'paragraphes' => [
                'Le vibecoding apprend à écrire du code avec l\'aide de l\'IA. C\'est une autre compétence que d\'ajouter de l\'IA dans une application déjà en service : appeler l\'API d\'un modèle depuis votre logiciel de gestion, résumer des tickets, classer des documents, en maîtrisant les coûts et les données envoyées. Ce sujet a sa propre formation, <a href="/formations/integrer-ia-logiciels-existants">intégrer l\'IA dans ses logiciels existants</a>, rattachée au domaine IA dans vos systèmes existants.',
                'Elle se suit naturellement après Laravel, Next.js ou API REST, quand on sait déjà où se trouvent les données et comment le logiciel est construit. Les frameworks s\'y préparent d\'ailleurs : les notes de version de Laravel 13 annoncent un kit de développement d\'IA intégré au framework. Si vous préférez confier ce branchement, il relève de l\'<a href="/services/api-rest-integrations">intégration par API</a> ou de l\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre le développement avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il enseigne des outils qu\'il utilise en production : PHP et Laravel, applications web et mobiles, intégrations par API, et développement assisté par l\'IA, avec lequel il construit ses propres projets. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il a travaillé au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Sa façon de former le développement tient en quelques règles : un test de positionnement avant l\'inscription, un projet réel par participant, une relecture du code à chaque étape, une mise en ligne avant la fin, et une réponse franche quand une autre formation, ou une prestation, convient mieux. Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>, et l\'ensemble des domaines sur la page <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de choisir une formation en développement ?',
            'texte' => 'Partez de ce que vous voulez faire, pas de l\'outil à la mode : administrer un site, lire des données, construire une application ou lancer un produit sont quatre besoins différents. Posez les bases avant le framework, lisez tout code produit par un assistant, vérifiez le matériel et les comptes avant l\'inscription, gardez le même projet d\'une formation à l\'autre, et faites confirmer tout financement par écrit.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous hésitez entre plusieurs formations du domaine ?',
            'texte'  => 'Décrivez votre profil, votre projet et le temps dont vous disposez chaque semaine : vous recevez une réponse sous 24 heures, une proposition d\'ordre de passage et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Choisir ma formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Par quelle formation commencer si je n\'ai jamais écrit une ligne de code ?', 'r' => 'Par la formation au développement web, qui part de zéro et mène jusqu\'à une application en ligne. Si votre seul objectif est de faire vivre un site existant, la formation WordPress et WooCommerce suffit, sans apprendre à coder. Le test de positionnement confirme le choix.'],
        ['q' => 'Peut-on apprendre directement avec l\'IA, sans passer par les bases ?', 'r' => 'Pour un prototype ou un petit outil interne, oui : la formation vibecoding n\'exige pas de savoir coder. Pour une application qui accueillera de vrais utilisateurs et leurs données, il faut savoir juger ce que l\'assistant produit, donc avoir suivi au moins les premiers paliers du parcours web.'],
        ['q' => 'Laravel ou Next.js : lequel choisir ?', 'r' => 'Laravel convient aux applications de gestion sur un hébergement PHP courant et prolonge directement le parcours web. Next.js convient aux interfaces très interactives et à ceux qui maîtrisent déjà JavaScript. Le choix dépend du projet, de l\'équipe qui maintiendra le code et des offres visées sur votre marché.'],
        ['q' => 'Faut-il un Mac pour suivre la formation Flutter ?', 'r' => 'Non pour apprendre et publier sur Android, oui pour compiler et publier soi-même sur iOS, car la documentation de Flutter fait passer cette étape par Xcode. Prévoyez aussi le compte Google Play, 25 dollars une seule fois, et l\'Apple Developer Program, 99 dollars par an.'],
        ['q' => 'La formation SQL pour analystes demande-t-elle de savoir programmer ?', 'r' => 'Non. Elle s\'adresse aux personnes qui maîtrisent un tableur et connaissent leurs données. On y écrit uniquement des requêtes de lecture, sur une copie de la base ou avec un compte en lecture seule, sans jamais modifier les données de l\'entreprise.'],
        ['q' => 'Combien coûtent les formations du domaine ?', 'r' => 'Chaque formation est chiffrée sur devis, après un premier échange gratuit. Le prix dépend du nombre de participants, de la durée, du nombre de formations enchaînées, de la personnalisation des exercices, du mode et du suivi prévu. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Peut-on regrouper plusieurs formations dans un même devis ?', 'r' => 'Oui, c\'est même conseillé pour un parcours : l\'ordre de passage, le projet fil rouge conservé d\'une étape à l\'autre et les bilans intermédiaires sont alors prévus dès le départ, avec un calendrier étalé sur plusieurs mois.'],
        ['q' => 'Les formations peuvent-elles se suivre entièrement à distance ?', 'r' => 'Oui, en séances courtes avec partage d\'écran et relecture du code dans le dépôt Git du participant. Pour des débutants complets, une formule hybride, avec un démarrage en salle, évite de perdre la première séance sur les installations.'],
        ['q' => 'Une entreprise peut-elle former son équipe sur son propre code ?', 'r' => 'Oui, en intra : les exercices portent alors sur l\'application, la base ou le site de l\'organisation, ou sur une copie anonymisée, et la formation se termine par des règles d\'équipe écrites sur la revue de code et les mises en production.'],
        ['q' => 'Obtient-on un diplôme ou une certification ?', 'r' => 'Non. Chaque formation se conclut par une évaluation sur un projet réel et une attestation de fin de formation. Richard SALANON n\'est certifié par aucun éditeur et n\'affiche aucune certification Qualiopi ; les projets mis en ligne restent la preuve la plus parlante des compétences acquises.'],
        ['q' => 'Une formation suffit-elle pour lancer un SaaS ?', 'r' => 'Elle donne la méthode et les briques (abonnements, comptes multi-clients, paiement), pas un produit fini ni des clients. La formation Créer son SaaS insiste sur la recherche du premier client payant avant de construire, et aide à décider ce que l\'on développe soi-même et ce que l\'on confie à un prestataire.'],
    ],

    'sources' => [
        ['titre' => 'W3Techs, statistiques d\'usage de WordPress', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress', 'date' => '2026-10-05'],
        ['titre' => 'W3Techs, statistiques d\'usage de WooCommerce', 'url' => 'https://w3techs.com/technologies/details/cm-woocommerce', 'date' => '2026-10-05'],
        ['titre' => 'Stack Overflow, Developer Survey 2025 : technologies (frameworks web et bases de données)', 'url' => 'https://survey.stackoverflow.co/2025/technology', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, notes de version 13.x et politique de support', 'url' => 'https://laravel.com/docs/13.x/releases', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, plateformes de déploiement prises en charge', 'url' => 'https://docs.flutter.dev/reference/supported-platforms', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, configurer le développement iOS', 'url' => 'https://docs.flutter.dev/platform-integration/ios/setup', 'date' => '2026-10-05'],
        ['titre' => 'Apple, page Xcode', 'url' => 'https://developer.apple.com/xcode/', 'date' => '2026-10-05'],
        ['titre' => 'Apple, inscription à l\'Apple Developer Program (frais annuels et exonérations)', 'url' => 'https://developer.apple.com/programs/enroll/', 'date' => '2026-10-05'],
        ['titre' => 'Aide Play Console, créer un compte de développeur Google Play (frais d\'inscription)', 'url' => 'https://support.google.com/googleplay/android-developer/answer/6112435?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, parts des systèmes mobiles en Afrique (septembre 2026)', 'url' => 'https://gs.statcounter.com/os-market-share/mobile/africa', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, parts des systèmes mobiles en Europe (septembre 2026)', 'url' => 'https://gs.statcounter.com/os-market-share/mobile/europe', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, guide RGPD du développeur', 'url' => 'https://www.cnil.fr/fr/guide-rgpd-du-developpeur', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['developpement-web', 'vibecoding', 'laravel-php', 'nextjs-react', 'wordpress-woocommerce', 'flutter', 'api-rest', 'sql-analystes', 'creer-son-saas'],
        'services'   => ['application-web-sur-mesure', 'developpeur-web-freelance', 'vibe-coding', 'formation-en-entreprise'],
    ],
];
