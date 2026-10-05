<?php
// ============================================================
// data/formations/laravel-php.php · Fiche formation « Laravel et PHP »
// (vague 1B, lot B, domaine développement, publication reportée ensuite).
// Angle propre : le framework Laravel (routes, Eloquent, authentification,
// autorisations, tests, déploiement, montée de version). Les bases du web,
// le vibecoding, React et Next.js, la conception d'API, le SaaS et l'IA
// intégrée relèvent des fiches sœurs, reliées par 'liens' ou, pour les
// fiches du lot A, par un lien dans le texte. Le pilier
// /services/application-web-sur-mesure n'est pas repris.
// Sources consultées le 05/10/2026 : documentation Laravel 13.x (notes de
// version, mise à niveau, installation, déploiement, kits de démarrage,
// Eloquent, chiffrement, IA), php.net, Apache Friends, Herd, Forge, Cloud,
// JetBrains, OWASP, CNIL, UIT, SGG du Bénin, FDFP, 3FPT, France Compétences.
// Projets Laravel de Richard : uniquement ceux de la page /richard-salanon.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Laravel et PHP : construire une application Laravel 13 avec ses routes, Eloquent, l\'authentification et les tests, puis la mettre en production',
    'title'   => 'Formation Laravel et PHP pour développeurs | Richard SALANON',
    'meta'    => 'Formation Laravel 13 pour développeurs PHP : routes, Eloquent, authentification, autorisations, tests et mise en production d\'une application. Sur devis.',
    'en_bref' => 'Une formation pratique au framework Laravel 13 : routes et contrôleurs, modèles Eloquent et relations, authentification, autorisations, tests automatisés, puis mise en production d\'une application complète. Elle s\'adresse aux développeurs qui écrivent déjà du PHP orienté objet, aux personnes qui sortent du parcours web et aux équipes qui maintiennent une application Laravel. Elle dure quatre jours, soit huit demi-journées, avec un module optionnel d\'un jour pour reprendre et mettre à niveau une application existante, en intra, en inter, à distance ou en formule hybride ; le prix est établi sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => false,
    'duree'   => '4 jours (8 demi-journées), plus un module optionnel d\'un jour sur la reprise et la montée de version',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '4 jours en 8 demi-journées, module de reprise en option'],
        ['l' => 'Public', 'v' => 'Développeurs PHP, sortants du parcours web, équipes qui maintiennent une application Laravel'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, huit participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : ce que Laravel fait à votre place, et un projet qui démarre',
            'duree'  => '3 h 30',
            'points' => [
                'Le trajet d\'une requête dans Laravel : public/index.php, fichier de routes, middleware, contrôleur, réponse ; dessiné au tableau avant d\'ouvrir l\'éditeur.',
                'Postes vérifiés : PHP 8.3 au moins, Composer, Node.js, Git, et Laravel Herd sous Windows ou macOS quand XAMPP n\'offre que PHP 8.2.',
                'Création du projet avec laravel new, lecture des dossiers app, routes, database, resources et config, puis lancement avec composer run dev.',
                'Le fichier .env et la clé APP_KEY : ce qui reste hors du dépôt Git, ce qui se règle par environnement, et pourquoi on ne change jamais la clé à la légère.',
                'Exercice : choisir le fil rouge (registre de demandes d\'intervention, ou besoin réel du participant) et afficher sa première page.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : routes, contrôleurs, vues Blade et validation',
            'duree'  => '3 h 30',
            'points' => [
                'Routes nommées, paramètres, groupes et middleware ; php artisan route:list pour voir ce que l\'application expose réellement.',
                'Contrôleurs de ressource : une ligne Route::resource crée les sept actions de liste, création, affichage, modification et suppression.',
                'Liaison implicite des modèles : l\'identifiant de l\'adresse devient directement un objet, ou une erreur 404 s\'il n\'existe pas.',
                'Gabarits et composants Blade ; l\'échappement automatique de l\'affichage entre doubles accolades, et le danger de la syntaxe non échappée pour une donnée saisie par un visiteur.',
                'Requêtes de formulaire (Form Requests) pour valider sur le serveur, et messages d\'erreur traduits en français après publication des fichiers de langue.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : migrations, modèles Eloquent et données de test',
            'duree'  => '3 h 30',
            'points' => [
                'Les migrations comme historique versionné du schéma : créer, modifier, annuler, et ne jamais retoucher une migration déjà jouée en production.',
                'Choisir sa base : SQLite par défaut au démarrage, MySQL ou MariaDB comme chez la plupart des hébergeurs, PostgreSQL selon le projet.',
                'Modèles Eloquent, conventions de nommage, conversions de types et attribut Fillable contre l\'affectation de masse.',
                'Fabriques et jeux de données fictives en français, avec la locale de Faker réglée sur fr_FR, pour ne jamais exercer sur de vraies personnes.',
                'Exercice : le schéma du fil rouge en trois à cinq tables, rempli de plusieurs centaines de lignes de test.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : relations, chargement anticipé et listes qui grandissent',
            'duree'  => '3 h 30',
            'points' => [
                'Relations belongsTo, hasMany et belongsToMany avec table pivot, sur les vraies règles du fil rouge.',
                'Le problème N + 1 mesuré : compter les requêtes d\'une liste, puis les réduire avec with() et vérifier le nouveau compte.',
                'Model::preventLazyLoading activé hors production, pour que l\'erreur apparaisse sur le poste du développeur et pas chez l\'utilisateur.',
                'Pagination, filtres, portées de requête et tri, sur une liste de plusieurs centaines de lignes.',
                'Suppression douce (SoftDeletes) : ce qu\'elle protège, et ce qu\'elle ne supprime pas vraiment.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : authentification avec un kit de démarrage',
            'duree'  => '3 h 30',
            'points' => [
                'Les quatre kits officiels (Livewire, React, Vue, Svelte) et le choix du kit Livewire, en PHP et Blade, pour rester centré sur Laravel.',
                'Ce que Fortify installe : connexion, inscription, mot de passe oublié, vérification de l\'adresse e-mail, confirmation du mot de passe, double authentification.',
                'Hachage des mots de passe par Bcrypt, limitation des tentatives de connexion, et désactivation de l\'inscription publique pour un outil interne.',
                'Configurer l\'envoi des e-mails de réinitialisation et les tester sans écrire à de vraies adresses.',
                'Exercice : le fil rouge protégé par des comptes, avec la double authentification activée pour l\'administrateur.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : autorisations, rôles et données des autres',
            'duree'  => '3 h 30',
            'points' => [
                'Gates et Policies : qui peut voir, modifier ou supprimer quelle demande, écrit dans une classe et non dispersé dans les vues.',
                'L\'attribut Authorize de Laravel 13 posé directement sur une méthode de contrôleur, et son équivalent dans les versions précédentes.',
                'Le test du voisin : changer l\'identifiant dans l\'adresse pour ouvrir la fiche d\'un autre utilisateur, puis fermer chaque porte trouvée.',
                'Protection contre la falsification de requêtes (middleware PreventRequestForgery), fichiers envoyés rangés dans storage, lien public créé avec storage:link.',
                'Revue croisée des autorisations entre participants, avec une grille commune.',
            ],
        ],
        [
            'titre'  => 'Jour 4, matin : tests automatisés, style de code, files et tâches planifiées',
            'duree'  => '3 h 30',
            'points' => [
                'Tests de fonctionnalité avec Pest ou PHPUnit, base remise à zéro par le trait RefreshDatabase, données créées par les fabriques.',
                'Tester d\'abord ce qui coûte cher : l\'accès refusé à un autre utilisateur, la validation, le calcul métier central du projet.',
                'Laravel Pint, installé d\'office, pour un style de code identique chez tous les membres de l\'équipe.',
                'Envoyer les e-mails et les traitements lents dans une file d\'attente stockée en base, et planifier les tâches récurrentes avec une seule entrée cron.',
                'Exercice : une suite de tests qui échoue quand on retire volontairement une règle d\'autorisation.',
            ],
        ],
        [
            'titre'  => 'Jour 4, après-midi : mise en production, puis bilan',
            'duree'  => '3 h 30',
            'points' => [
                'Vérifier le serveur : version de PHP, extensions exigées, droits d\'écriture sur storage et bootstrap/cache.',
                'Racine web sur le dossier public, APP_DEBUG à false, migrate --force, php artisan optimize, et la route /up pour la surveillance.',
                'Hébergement mutualisé, serveur privé virtuel, Forge ou Laravel Cloud : ce que chacun impose, coûte et laisse faire.',
                'Liste de contrôle de mise en production appliquée au fil rouge, sauvegarde de la base restaurée sur une copie.',
                'Évaluation individuelle sur une modification demandée sur place, plan de pratique pour les semaines suivantes, remise des supports et de l\'attestation.',
            ],
        ],
        [
            'titre'  => 'Jour 5 (module optionnel), matin : reprendre une application Laravel existante',
            'duree'  => '3 h 30',
            'points' => [
                'Lire une application que l\'on n\'a pas écrite : composer.json, php artisan about, route:list, état des migrations, tests présents ou absents.',
                'Situer sa version de Laravel et de PHP dans les calendriers de support officiels, et en déduire l\'urgence réelle.',
                'Repérer les dépendances abandonnées, le code modifié dans vendor, les secrets dans le dépôt et les routes ouvertes sans contrôle.',
                'Écrire des tests de caractérisation autour des écrans critiques avant de toucher au code.',
            ],
        ],
        [
            'titre'  => 'Jour 5 (module optionnel), après-midi : monter de version sans casser la production',
            'duree'  => '3 h 30',
            'points' => [
                'Lire le guide de mise à niveau de Laravel 12 vers 13 : dépendances à relever, changements à fort et moyen impact.',
                'Une version majeure à la fois, sur une branche, tests verts à chaque étape, puis déploiement sur une copie avant la production.',
                'Ce que peuvent apporter Laravel Boost et son assistant de mise à niveau, ou le service communautaire Shift, et ce qu\'il faut relire derrière eux.',
                'Plan de mise à niveau écrit pour l\'application réelle de l\'équipe, avec ses risques et son calendrier.',
            ],
        ],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire avec Laravel à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Beaucoup de développeurs PHP arrivent à Laravel par un tutoriel, recopient des commandes artisan et obtiennent vite un écran qui fonctionne. Les ennuis commencent plus tard : une liste qui met dix secondes à s\'afficher, un utilisateur qui ouvre la fiche d\'un autre en changeant un chiffre dans l\'adresse, une mise en ligne qui expose le fichier .env. Cette formation part de ces situations réelles. Elle apprend le framework par ce qu\'il fait à votre place, et surtout par ce qu\'il ne fait pas tant qu\'on ne le lui demande pas.',
                'À la fin des quatre jours, chaque participant a construit une application Laravel 13 complète sur un sujet de gestion : un schéma versionné par des migrations, des modèles Eloquent reliés entre eux, des écrans protégés par des comptes et par des règles d\'autorisation, une suite de tests qui échoue quand on retire une protection, et une version en ligne sur un vrai serveur. Il sait lire une erreur de Laravel, trouver la route, le contrôleur ou la requête en cause, et expliquer chaque fichier qu\'il a ajouté au projet.',
                'Le module optionnel du cinquième jour vise les équipes qui héritent d\'une application existante. Elles y apprennent à faire l\'inventaire d\'un projet écrit par d\'autres, à le situer dans le calendrier de support du framework, puis à préparer une montée de version par étapes, tests à l\'appui. C\'est souvent la raison même de la demande de formation : un prestataire est parti, l\'application tourne encore, et personne en interne n\'ose plus y toucher.',
                'Plusieurs sujets voisins ont leur propre formation. Les bases de HTML, de PHP et de MySQL se travaillent dans la <a href="/formations/developpement-web">formation au développement web</a>, à suivre d\'abord si le PHP objet n\'est pas acquis. Coder avec un assistant d\'IA relève de la <a href="/formations/vibecoding">formation vibecoding</a>, et brancher un modèle d\'IA dans une application en service, de la formation <a href="/formations/integrer-ia-logiciels-existants">intégrer l\'IA dans ses logiciels existants</a>. La conception d\'API, React et Next.js, ou la facturation d\'un SaaS sont traités dans les fiches reliées en bas de page.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quels gestes chaque participant doit-il savoir refaire seul en fin de formation ?',
            'items' => [
                'Installer un projet Laravel 13 sur son poste et expliquer le rôle des dossiers app, routes, database, resources, config et public.',
                'Déclarer des routes nommées et un contrôleur de ressource, puis vérifier avec route:list ce que l\'application expose.',
                'Valider chaque formulaire côté serveur avec une requête de formulaire, messages d\'erreur en français compris.',
                'Écrire et annuler une migration, et remplir la base avec des données fictives générées par des fabriques.',
                'Relier trois modèles Eloquent et afficher une liste paginée sans problème N + 1, nombre de requêtes à l\'appui.',
                'Protéger une application par des comptes, avec double authentification pour les administrateurs et inscription publique fermée si besoin.',
                'Écrire une Policy qui interdit à un utilisateur d\'ouvrir ou de modifier les données d\'un autre, et le prouver par un test.',
                'Mettre l\'application en ligne avec la racine web sur public, le mode débogage coupé et les caches générés.',
                'Situer une application dans le calendrier de support de Laravel et de PHP, et dire quand sa mise à niveau devient urgente.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation Laravel, avec quels prérequis et quel poste de travail ?',
            'intro' => 'Laravel s\'apprend vite quand le PHP est solide, et très lentement sinon. Un court test de positionnement, avant le devis, demande d\'écrire une petite classe, d\'installer une bibliothèque avec Composer et de créer une branche Git. Il sert à composer des groupes de niveau proche, pas à écarter qui que ce soit.',
            'items' => [
                ['titre' => 'Développeurs PHP sans framework', 'texte' => 'Ils écrivent des applications en fichiers où se mêlent HTML, SQL et logique, et veulent une structure que d\'autres développeurs sauront reprendre. Pour eux, le gain le plus visible est la séparation des routes, des contrôleurs, des modèles et des vues.'],
                ['titre' => 'Sortants du parcours web', 'texte' => 'Après la formation au développement web, Laravel prolonge directement le PHP et le MySQL appris. Ils retrouvent sous une forme plus courte ce qu\'ils ont écrit à la main : sessions, requêtes préparées, mots de passe hachés.'],
                ['titre' => 'Équipes qui maintiennent une application Laravel', 'texte' => 'Un prestataire a livré l\'outil, il faut maintenant le faire évoluer. Ces équipes suivent les quatre jours sur une copie de leur propre code, puis le module de reprise et de montée de version.'],
                ['titre' => 'Développeurs venus d\'un autre framework', 'texte' => 'Symfony, CodeIgniter, Express ou Django : les notions existent déjà, seules les conventions changent. Ils vont plus vite sur les deux premiers jours et passent plus de temps sur Eloquent, les Policies et le déploiement.'],
                ['titre' => 'Prérequis', 'texte' => 'PHP orienté objet (classes, espaces de noms, interfaces), Composer, requêtes SQL simples et usage courant de Git. Lire l\'anglais technique aide, car la documentation officielle n\'existe qu\'en anglais ; la formation montre comment s\'en servir efficacement.'],
                ['titre' => 'Poste de travail', 'texte' => 'Un ordinateur portable avec droits d\'installation, capable de faire tourner PHP 8.3 au moins, Composer, Node.js et une base de données en local. Windows, macOS ou Linux conviennent ; aucun Mac n\'est nécessaire. La liste d\'installation arrive une semaine avant la première séance.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment le projet fil rouge avance-t-il pendant la formation ?',
            'items' => [
                ['titre' => 'Choisir un sujet de gestion réel', 'duree' => 'Avant la session, puis 30 minutes le premier jour', 'texte' => 'Par défaut, un registre de demandes d\'intervention : un client dépose une demande, un responsable l\'attribue, un technicien la traite. En inter, chacun peut venir avec son propre besoin ; en intra, le sujet vient d\'un service de l\'organisation et reste limité à trois ou quatre écrans.'],
                ['titre' => 'Dessiner le schéma avant de coder', 'duree' => '45 minutes', 'texte' => 'Tables, colonnes, relations et règles d\'accès sont posées sur papier, relues par un autre participant, puis traduites en migrations. Chaque désaccord sur le schéma tranché à ce moment évite une migration corrective plus tard.'],
                ['titre' => 'Remplir la base de fausses données', 'duree' => '30 minutes', 'texte' => 'Les fabriques produisent des centaines de demandes, de clients et de techniciens fictifs, avec des noms et des adresses à la française. Les listes et les filtres se testent ainsi dans des conditions proches de la réalité, sans exposer personne.'],
                ['titre' => 'Compter les requêtes', 'duree' => '45 minutes', 'texte' => 'Sur la liste des demandes, on mesure le nombre de requêtes envoyées à la base, on corrige avec le chargement anticipé, puis on mesure à nouveau. Le chiffre, affiché avant et après, convainc mieux qu\'un discours sur la performance.'],
                ['titre' => 'Le test du voisin', 'duree' => '1 heure', 'texte' => 'Chaque participant se connecte avec un compte de technicien et tente d\'ouvrir, de modifier puis de supprimer la demande d\'un autre en changeant l\'identifiant dans l\'adresse. Chaque porte ouverte devient une règle dans une Policy, puis un test automatisé.'],
                ['titre' => 'Mettre en ligne et restaurer', 'duree' => '1 h 30', 'texte' => 'Le fil rouge part sur un hébergement réel ou sur un serveur de démonstration ouvert au nom du participant. La liste de contrôle est cochée ligne par ligne, et une sauvegarde de la base est restaurée sur une copie pour vérifier qu\'elle sert vraiment.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelle méthode pédagogique, et que garde-t-on après les séances ?',
            'intro' => 'La formation se passe dans l\'éditeur, pas dans les diapositives : une démonstration courte sur le fil rouge, puis la même chose sur le projet de chacun, et une relecture du code avant de passer à la suite.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Une relecture sérieuse du code d\'un framework demande du temps sur chaque poste. Au-delà de huit personnes, le formateur ne voit plus les erreurs d\'autorisation ou de requêtes avant qu\'elles s\'installent.'],
                ['titre' => 'Une étape, un commit', 'texte' => 'Le fil rouge de référence est livré dans un dépôt Git où chaque étape correspond à un commit. Un participant qui décroche rattrape le groupe en comparant son code avec l\'étape suivante, sans repartir de zéro.'],
                ['titre' => 'Sur le code de l\'organisation, en intra', 'texte' => 'Les exercices peuvent porter sur une copie du dépôt de l\'entreprise, avec une base anonymisée ou remplie par les fabriques. Un accord de confidentialité peut être signé avant tout accès au dépôt.'],
                ['titre' => 'La documentation officielle comme réflexe', 'texte' => 'Chaque notion renvoie à la page correspondante de la documentation de Laravel 13. L\'objectif est que le participant y cherche seul la réponse à sa prochaine question, plutôt que dans un tutoriel daté d\'une version ancienne.'],
                ['titre' => 'Supports remis', 'texte' => 'Dépôt du fil rouge, fiches par notion, grille de relecture du code, liste de contrôle de mise en production et modèle de plan de mise à niveau, dans un format modifiable.'],
                ['titre' => 'Suivi convenu au devis', 'texte' => 'Une période de questions d\'application, une relecture d\'une branche du projet réel ou une séance de point quelques semaines plus tard peuvent être prévues. Leur durée et leur contenu figurent dans le devis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quelles versions utilise-t-on, et que coûtent-ils ?',
            'legende' => 'Versions et tarifs relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les tarifs des plateformes sont en dollars ou en euros, hors taxes, et se vérifient au moment de l\'achat ; les comptes s\'ouvrent au nom de l\'entreprise ou du participant.',
            'entetes' => ['Outil', 'Usage dans la formation', 'Version ou offre', 'Coût d\'éditeur'],
            'lignes'  => [
                ['Laravel', 'Le framework de tout le parcours', 'Laravel 13, sorti le 17 mars 2026', 'Gratuit et open source'],
                ['PHP', 'Le langage, sur le poste et sur le serveur', '8.3 au minimum pour Laravel 13 ; 8.4 ou 8.5 conseillés en production', 'Gratuit'],
                ['Composer et Node.js', 'Dépendances PHP, puis compilation des fichiers CSS et JavaScript avec Vite', 'Versions stables du jour', 'Gratuits'],
                ['Laravel Herd', 'Environnement local sous Windows et macOS : PHP, Nginx, Composer et l\'installateur Laravel', 'Version gratuite ; Herd Pro en option', 'Gratuit ; Herd Pro à 99 euros pour un an, Herd Teams à 299 euros pour dix licences'],
                ['XAMPP', 'Souvent déjà installé chez les participants', 'Dernière version proposée : 8.2.12, avec PHP 8.2', 'Gratuit, mais insuffisant pour Laravel 13'],
                ['SQLite, MySQL ou MariaDB', 'Base du fil rouge', 'SQLite 3.26, MySQL 5.7, MariaDB 10.3 ou PostgreSQL 10 au minimum selon la documentation', 'Gratuits'],
                ['Pest ou PHPUnit, et Pint', 'Tests automatisés et style de code', 'Pest 4 ou PHPUnit 12 pour Laravel 13 ; Pint installé d\'office', 'Gratuits'],
                ['Laravel Boost', 'Serveur MCP qui donne à un assistant de code le contexte de l\'application', 'Version 2 pour Laravel 13', 'Gratuit, installé comme dépendance de développement'],
                ['Laravel Forge', 'Gérer un serveur privé virtuel et y déployer', 'Formules Hobby, Growth et Business', '12, 19 ou 39 dollars par mois en paiement mensuel, serveur facturé à part'],
                ['Laravel Cloud', 'Plateforme gérée, sans administration de serveur', 'Formule Starter', '5 dollars par mois plus l\'usage, avec 5 dollars de crédit mensuel et le premier mois offert'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi tant d\'attention aux versions de Laravel et de PHP ?',
            'paragraphes' => [
                'Parce qu\'une application Laravel vieillit sans que personne n\'y touche. Selon les <a href="https://laravel.com/docs/13.x/releases">notes de version de Laravel</a>, consultées le 5 octobre 2026, le framework publie une version majeure par an et assure 18 mois de corrections de bogues puis 2 ans de correctifs de sécurité. Laravel 13, sorti le 17 mars 2026, est couvert jusqu\'au 17 mars 2028 ; Laravel 12 ne recevra plus de correctifs de sécurité après le 24 février 2027 ; Laravel 10 n\'en reçoit plus depuis le 4 février 2025.',
                'PHP suit son propre calendrier. La <a href="https://www.php.net/supported-versions.php">page des versions maintenues de php.net</a> indique que PHP 8.3, minimum exigé par Laravel 13, ne reçoit plus que des correctifs de sécurité depuis le 31 décembre 2025, et cela jusqu\'au 31 décembre 2027. PHP 8.4 est couvert pour la sécurité jusqu\'au 31 décembre 2028, PHP 8.5 jusqu\'au 31 décembre 2029. Un serveur neuf part donc sur PHP 8.4 ou 8.5, pas sur le minimum.',
                'Le piège le plus fréquent se trouve sur le poste lui-même. La page d\'<a href="https://www.apachefriends.org/">Apache Friends</a> propose toujours XAMPP 8.2.12, livré avec PHP 8.2 : beaucoup de participants l\'ont installé pour apprendre PHP, et découvrent que Laravel 13 refuse de s\'installer. La première demi-journée règle ce point avec <a href="https://herd.laravel.com/">Laravel Herd</a>, gratuit sous Windows et macOS, ou avec le script d\'installation indiqué par la <a href="https://laravel.com/docs/13.x/installation">documentation officielle</a>.',
                'La bonne nouvelle est que les montées de version récentes sont courtes. Le <a href="https://laravel.com/docs/13.x/upgrade">guide de mise à niveau</a> estime à dix minutes le passage de Laravel 12 à 13 pour une application ordinaire, et ne classe que trois changements à fort impact, dont la nouvelle protection contre la falsification de requêtes. Ce chiffre suppose des tests qui tournent et une seule version à franchir : une application restée sur Laravel 10 en a trois devant elle.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent Laravel et les pratiques des développeurs PHP ?',
            'items' => [
                ['valeur' => '64 %', 'libelle' => 'Part des 1 720 développeurs PHP interrogés qui utilisent Laravel, devant WordPress (25 %) et Symfony (23 %), enquête publiée le 15 octobre 2025', 'source' => 'JetBrains, The State of PHP 2025', 'url' => 'https://blog.jetbrains.com/phpstorm/2025/10/state-of-php-2025/'],
                ['valeur' => '32 %', 'libelle' => 'Part des développeurs PHP de la même enquête qui n\'écrivent aucun test', 'source' => 'JetBrains, The State of PHP 2025', 'url' => 'https://blog.jetbrains.com/phpstorm/2025/10/state-of-php-2025/'],
                ['valeur' => '17 %', 'libelle' => 'Part des répondants qui utilisent Pest, contre 50 % pour PHPUnit, en 2025', 'source' => 'JetBrains, The State of PHP 2025', 'url' => 'https://blog.jetbrains.com/phpstorm/2025/10/state-of-php-2025/'],
                ['valeur' => '17 mars 2028', 'libelle' => 'Fin des correctifs de sécurité de Laravel 13, sorti le 17 mars 2026 (notes de version consultées le 5 octobre 2026)', 'source' => 'Laravel, notes de version 13.x', 'url' => 'https://laravel.com/docs/13.x/releases'],
                ['valeur' => '26 contre 2', 'libelle' => 'Requêtes envoyées pour afficher 25 livres et leur auteur, sans puis avec chargement anticipé, dans l\'exemple de la documentation', 'source' => 'Laravel, relations Eloquent', 'url' => 'https://laravel.com/docs/13.x/eloquent-relationships'],
                ['valeur' => '1er rang', 'libelle' => 'Place de la défaillance du contrôle d\'accès dans le classement OWASP Top 10:2025 des risques des applications web', 'source' => 'OWASP Top 10:2025', 'url' => 'https://top10.owasp.org/2025'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent ces chiffres à une équipe qui se forme à Laravel ?',
            'paragraphes' => [
                'D\'abord, que le choix de Laravel n\'est pas un pari. Dans l\'enquête <a href="https://blog.jetbrains.com/phpstorm/2025/10/state-of-php-2025/">State of PHP 2025 de JetBrains</a>, publiée le 15 octobre 2025, 64 % des 1 720 développeurs dont PHP est le langage principal déclarent l\'utiliser. Une entreprise qui fait construire une application Laravel trouvera d\'autres développeurs pour la reprendre, à condition que le code suive les conventions du framework au lieu de les contourner.',
                'Ensuite, que les tests restent le maillon faible : selon la même enquête, 32 % des développeurs PHP n\'en écrivent aucun. C\'est pourquoi une demi-journée entière leur est consacrée, et pourquoi le premier test écrit porte sur une autorisation, pas sur un calcul trivial. Le classement <a href="https://top10.owasp.org/2025">OWASP Top 10:2025</a> place la défaillance du contrôle d\'accès au premier rang des risques ; un test qui prouve qu\'un utilisateur ne peut pas lire les données d\'un autre protège exactement contre cela.',
                'Enfin, que la performance se joue souvent dans une seule ligne. L\'exemple de la <a href="https://laravel.com/docs/13.x/eloquent-relationships">documentation d\'Eloquent</a> affiche 25 livres et leur auteur : 26 requêtes sans chargement anticipé, 2 avec. Sur un hébergement modeste et une liste de plusieurs centaines de lignes, cette différence sépare une page qui s\'affiche d\'une page qui expire. La formation fait mesurer ce nombre plutôt que de le supposer.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation Laravel selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Distribution, Cotonou ou Porto-Novo', 'probleme' => 'L\'application de stock et de livraisons a été écrite en Laravel par un prestataire qui n\'est plus joignable ; les deux développeurs internes corrigent à tâtons et redoutent chaque mise en ligne.', 'solution' => 'Formation intra sur une copie de leur dépôt, puis module de reprise : inventaire du projet, tests autour des écrans de commande, procédure de déploiement écrite et plan de mise à niveau daté.'],
                ['secteur' => 'Développeur indépendant, Abidjan ou Lomé', 'probleme' => 'Ses applications PHP sont rapides à livrer mais pénibles à modifier : chaque nouvelle demande d\'un client touche dix fichiers mélangeant HTML, SQL et règles métier.', 'solution' => 'Formation en inter, avec comme fil rouge la réécriture d\'un module réel de son application dans Laravel : routes, contrôleurs, modèles, tests, puis comparaison des deux versions au dernier jour.'],
                ['secteur' => 'ONG ou projet de développement, Burkina Faso ou Niger', 'probleme' => 'L\'outil de suivi des bénéficiaires est consulté par des agents de plusieurs régions, et chacun voit aujourd\'hui toutes les fiches, y compris celles qui ne le concernent pas.', 'solution' => 'Policies par région et par rôle, journal des consultations, suppression réelle quand une personne demande l\'effacement, et hébergement choisi en connaissance des règles de transfert des données.'],
                ['secteur' => 'École ou centre de formation, Dakar ou Thiès', 'probleme' => 'Les inscriptions, les paiements et les notes passent par trois tableurs que l\'administration recopie chaque trimestre, avec des erreurs à chaque recopie.', 'solution' => 'Le service informatique suit la formation avec ce besoin comme fil rouge : rôles enseignant, scolarité et direction, double authentification pour l\'administration, données de test générées par les fabriques.'],
                ['secteur' => 'Agence web, France ou Belgique', 'probleme' => 'L\'agence maintient une dizaine d\'applications clientes réparties entre Laravel 10, 11 et 12, sans calendrier de mise à niveau ni tests sur la plupart.', 'solution' => 'Module de reprise et de montée de version pour l\'équipe, avec une méthode commune : tests de caractérisation d\'abord, une version majeure à la fois, et un tableau de suivi des versions par client.'],
                ['secteur' => 'Service informatique interne, Suisse ou Canada', 'probleme' => 'L\'équipe connaît Symfony et doit reprendre un outil de demandes internes développé en Laravel par un ancien collègue.', 'solution' => 'Deux premiers jours accélérés sur les correspondances entre les deux frameworks, puis travail approfondi sur Eloquent, les Policies et le déploiement, à distance et sur le fuseau horaire de l\'équipe.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : comment la formation Laravel s\'organise-t-elle ?',
            'legende' => 'Le format se choisit au premier échange, selon le nombre de développeurs, leur niveau, la confidentialité du code et la connexion disponible. Huit participants au plus par groupe.',
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Ce qui change'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe qui maintient ou va construire une application Laravel', 'Quatre jours sur deux semaines, puis le module de reprise si besoin', 'Exercices sur une copie du dépôt de l\'organisation, règles d\'équipe écrites en fin de session (revue, tests, déploiement)'],
                ['Inter-entreprises', 'Développeurs de structures différentes, indépendants', 'Quatre jours, consécutifs ou étalés sur deux à quatre semaines', 'Fil rouge commun ou projet personnel, aucun code interne montré au groupe'],
                ['À distance', 'Participants répartis en Afrique, en Europe ou au Canada', 'Huit séances de trois heures trente, partage d\'écran', 'Relecture du code dans les requêtes de fusion du dépôt de chacun, installations faites avant la première séance'],
                ['Hybride', 'Groupes qui gagnent à s\'installer ensemble', 'Premier jour en salle à Cotonou ou dans vos locaux, la suite à distance', 'Postes vérifiés et premier projet lancé côte à côte, puis rythme à distance'],
                ['Module seul', 'Équipes qui pratiquent déjà Laravel et doivent reprendre ou mettre à niveau une application', 'Un jour, deux demi-journées', 'Travail exclusivement sur l\'application réelle de l\'équipe, plan de mise à niveau remis en fin de journée'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation Laravel, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun tarif n\'est affiché : chaque formation est chiffrée sur devis, après le test de positionnement. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; les éventuels abonnements d\'hébergement ou de plateforme restent payés directement aux éditeurs.',
            'items'      => [
                ['offre' => 'Formation de quatre jours', 'prix' => 'Sur devis', 'inclus' => ['Huit demi-journées sur le fil rouge ou votre projet', 'Relecture du code à chaque étape', 'Mise en ligne réelle', 'Supports, dépôt de référence et attestation']],
                ['offre' => 'Module reprise et montée de version', 'prix' => 'Sur devis', 'inclus' => ['Un jour sur votre application', 'Inventaire et situation dans le calendrier de support', 'Tests de caractérisation', 'Plan de mise à niveau écrit']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre jours et le module de reprise', 'Calendrier étalé selon la disponibilité de l\'équipe', 'Règles d\'équipe écrites pour le dépôt']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Questions d\'application', 'Relecture d\'une branche du projet réel', 'Séance de point à un mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, huit développeurs au plus par groupe.',
                'Le travail sur le code réel de l\'organisation, qui demande de préparer une copie du dépôt et une base anonymisée.',
                'L\'ajout du module de reprise et de montée de version.',
                'Le mode : sur place à Cotonou, dans vos locaux, à distance ou en formule hybride, et les déplacements éventuels.',
                'La durée du suivi après la dernière séance.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il financer la formation Laravel ?',
            'paragraphes' => [
                'Cela dépend du fonds, du pays et du dossier, et aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/procedures-dhabilitation/">FDFP sur l\'habilitation des opérateurs</a>, lue le 5 octobre 2026, exige cette habilitation de tout opérateur privé qui veut bénéficier de ses financements, sauf des structures basées hors du pays, et l\'accorde pour une année. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions se demandent directement au fonds.',
                'Au Sénégal, le site du <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet pour le personnel des entreprises et un autre pour les demandes individuelles, avec un dépôt de dossier en ligne. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que l\'accès aux fonds publics ou mutualisés, ceux des opérateurs de compétences compris, suppose la certification Qualiopi depuis le 1er janvier 2022. Richard SALANON ne détient ni cette certification ni aucune habilitation de fonds : envoyez le programme et le devis au fonds avant de vous engager, et budgétez la formation comme si elle n\'était pas financée.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur de mise en production coûte le plus cher avec Laravel ?',
            'texte' => 'Laisser APP_DEBUG à true sur le serveur, ou publier le projet entier dans le dossier web au lieu de faire pointer la racine sur public. La <a href="https://laravel.com/docs/13.x/deployment">documentation de déploiement</a> est explicite sur les deux points : le mode débogage en production risque d\'exposer des valeurs de configuration sensibles, et servir l\'application depuis la racine du projet expose de nombreux fichiers de configuration sur Internet, dont le fichier .env avec les mots de passe de la base et des services. Sur un hébergement mutualisé où l\'on dépose tout dans public_html par habitude, c\'est l\'erreur la plus courante. La liste de contrôle du dernier jour commence par ces deux lignes.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?',
            'intro' => 'Une fois seul face à un délai, on retombe dans les raccourcis que la formation a appris à éviter. Ce sont presque toujours les mêmes.',
            'items' => [
                ['titre' => 'Lever la protection contre l\'affectation de masse', 'texte' => 'Déclarer tout le modèle modifiable pour « gagner du temps » permet à un visiteur d\'envoyer un champ inattendu, par exemple un indicateur d\'administrateur. On garde une liste Fillable explicite, et l\'on fait échouer en développement toute tentative de remplir un champ non autorisé.'],
                ['titre' => 'Contrôler les droits dans les menus seulement', 'texte' => 'Masquer un bouton ne protège rien : l\'adresse reste accessible. Toute action sensible passe par une Policy, et chaque Policy a son test qui vérifie le refus.'],
                ['titre' => 'Laisser revenir le problème N + 1', 'texte' => 'Une nouvelle colonne affichée dans une liste réintroduit une requête par ligne. Model::preventLazyLoading activé hors production signale l\'oubli immédiatement sur le poste du développeur.'],
                ['titre' => 'Lancer une commande destructrice sur la mauvaise base', 'texte' => 'migrate:fresh supprime toutes les tables avant de rejouer les migrations. On vérifie la connexion ciblée avant toute commande de ce type, et la production ne se met à jour qu\'avec migrate --force, jamais en repartant de zéro.'],
                ['titre' => 'Changer la clé APP_KEY sans précaution', 'texte' => 'Selon la documentation du chiffrement, changer la clé déconnecte tous les utilisateurs et rend illisibles les données chiffrées avec l\'ancienne. L\'ancienne clé se déclare dans APP_PREVIOUS_KEYS pendant la transition.'],
                ['titre' => 'Oublier les processus qui tournent en continu', 'texte' => 'Après un déploiement, les processus de file d\'attente exécutent encore l\'ancien code tant qu\'on ne les relance pas avec php artisan reload. Une partie du système tourne alors sur une version périmée, le scénario de l\'<a href="/histoires/knight-capital">histoire de Knight Capital</a>, à une autre échelle.'],
                ['titre' => 'Corriger le framework dans vendor', 'texte' => 'Une modification dans le dossier vendor disparaît à la prochaine mise à jour de Composer. Le comportement se change par configuration, par extension ou dans le code de l\'application, jamais dans les bibliothèques installées.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, hébergement, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Un projet Laravel télécharge beaucoup au démarrage : bibliothèques Composer, paquets JavaScript, outils de compilation. Or, selon les <a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">Facts and Figures 2025 de l\'Union internationale des télécommunications</a>, 36 % de la population africaine utilise Internet, et 23 % dans les pays à faible revenu. La formation s\'organise en conséquence : installations faites et dépendances téléchargées avant la première séance, cache de Composer partagé en salle, fichiers CSS et JavaScript compilés sur le poste puis envoyés au serveur, plutôt que reconstruits en ligne à chaque déploiement.',
                'L\'hébergement pose deux questions. La première est technique : beaucoup d\'offres mutualisées proposent encore une version de PHP trop ancienne, sans accès SSH ni processus permanent ; on vérifie PHP 8.3 au moins, la tâche cron et la possibilité de choisir la racine web avant de signer. La seconde est juridique. La <a href="https://laravel.com/cloud/pricing">page de tarifs de Laravel Cloud</a> ne liste aucune région en Afrique, les plus proches étant Francfort, l\'Irlande et Londres ; or, au Bénin, l\'article 391 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> encadre le transfert de données personnelles vers un État tiers.',
                'En Europe, la CNIL traduit le RGPD en gestes de développeur. Sa fiche <a href="https://www.cnil.fr/fr/gerer-les-utilisateurs">gérer les utilisateurs</a> demande des profils d\'accès qui limitent chacun aux seules données utiles et juge en général adéquate une conservation des journaux de six mois ; c\'est le rôle des Policies vues au troisième jour. Sa fiche sur l\'<a href="https://www.cnil.fr/fr/preparer-lexercice-des-droits-des-personnes">exercice des droits</a> recommande une fonction qui efface toutes les données d\'une personne, avec un effacement étendu aux sauvegardes ou un moyen de ne pas y restaurer ces données. Une suppression douce d\'Eloquent ne suffit pas : la ligne reste en base. On prévoit donc une suppression définitive ou une purge planifiée des modèles concernés.',
                'La langue, enfin. Les fichiers de langue fournis par Laravel sont en anglais ; la <a href="https://laravel.com/docs/13.x/localization">documentation de la localisation</a> indique comment les publier dans le projet avec lang:publish pour les traduire, ce que la formation fait dès le premier jour pour les messages de validation. Les séances se donnent en français ou en anglais. La documentation officielle et les messages d\'erreur restent en anglais, et l\'on apprend à y chercher vite plutôt qu\'à les contourner.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre Laravel avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Laravel fait partie de son travail depuis plusieurs années. En stage chez TOP CHRONO, à Cotonou, de mai à octobre 2022, il participe à l\'application de gestion des livraisons de l\'entreprise, avec Laravel côté PHP. De novembre 2022 à juillet 2023, il dirige l\'équipe de développement de Le KARAKATA SA, où il travaille avec Laravel et WordPress. Il publie aussi en accès libre l\'<a href="https://github.com/Richard6141/bj-decoupage">API du découpage administratif du Bénin</a>, écrite avec Laravel 10 et MySQL, dont le dépôt date de mars 2024 : des routes en lecture seule, des départements jusqu\'aux quartiers, que chacun peut lire.',
                'Il forme depuis ses débuts : d\'avril 2019 à août 2021, il initie des étudiants à la programmation web chez VULCAIN-TECH tout en développant. Passé par ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), avec ' . $ans . ' ans d\'expérience dans le numérique, il revendique plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées au numérique, à l\'IA et aux ERP, et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et d\'Amérique du Nord. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Sa manière d\'enseigner Laravel tient en quelques engagements vérifiables : un test de positionnement avant le devis, huit participants au plus, un fil rouge qui finit en ligne, une relecture du code à chaque étape, un test qui prouve chaque règle d\'accès, et la franchise de conseiller d\'abord les bases du web quand le PHP objet n\'est pas acquis. Son parcours complet est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/developpement">formations en développement</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de vous inscrire ?',
            'texte' => 'Laravel accélère tout ce qui est répétitif, mais il ne décide ni des droits d\'accès, ni du nombre de requêtes, ni de la manière de mettre en ligne. Venez avec un PHP objet solide, un poste qui fait tourner PHP 8.3 au moins et, si possible, un vrai besoin de gestion. Repartez avec une application en ligne, des tests qui protègent ses règles d\'accès et une date pour sa prochaine montée de version. Le reste du catalogue est sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former vos développeurs à Laravel, sur un fil rouge ou sur votre propre application ?',
            'texte'  => 'Indiquez le nombre de développeurs, leur niveau en PHP, la version de Laravel de votre application s\'il en existe une, et le format souhaité. Vous recevez une réponse sous 24 heures, un test de positionnement, puis un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation Laravel'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il déjà connaître PHP pour suivre la formation Laravel ?', 'r' => 'Oui : le PHP orienté objet, Composer, des requêtes SQL simples et Git sont nécessaires. Sans ces bases, le framework paraît magique et les erreurs deviennent incompréhensibles. Le test de positionnement le vérifie, et oriente si besoin vers la formation au développement web avant celle-ci.'],
        ['q' => 'Notre application est en Laravel 11 ou 12 : la formation sur Laravel 13 nous sert-elle ?', 'r' => 'Oui. Les routes, Eloquent, les Policies, les tests et le déploiement fonctionnent de la même façon ; les différences de Laravel 13, comme les attributs PHP sur les contrôleurs, sont signalées au fil des séances. Le module de reprise traite justement le passage de votre version à la plus récente, sachant que Laravel 11 ne reçoit plus de correctifs de sécurité depuis le 12 mars 2026.'],
        ['q' => 'Livewire, React ou Vue : quelle interface utilise-t-on ?', 'r' => 'Le kit de démarrage Livewire, en PHP et Blade, pour que tout le temps aille au framework lui-même. Une équipe qui a déjà choisi React, Vue ou Svelte peut partir du kit correspondant, qui passe par Inertia ; React et Next.js en profondeur relèvent de leur propre formation.'],
        ['q' => 'Peut-on mettre une application Laravel sur un hébergement mutualisé ?', 'r' => 'Souvent, si l\'offre propose PHP 8.3 au moins avec les extensions exigées, permet de faire pointer la racine web sur le dossier public et accepte une tâche cron. Sans accès SSH ni processus permanent, les files d\'attente demandent un montage particulier. La formation montre comment vérifier ces points avant de choisir.'],
        ['q' => 'La formation couvre-t-elle les API et l\'authentification par jetons ?', 'r' => 'Elle montre comment Laravel sert des données au format JSON, mais la conception d\'une API, son authentification par jetons, sa documentation et ses tests sont le sujet de la formation API REST, qui se suit très bien après celle-ci.'],
        ['q' => 'Utilise-t-on l\'intelligence artificielle pendant la formation ?', 'r' => 'Avec mesure. Laravel Boost est présenté pour donner à un assistant de code le contexte de l\'application, mais les exercices se font d\'abord à la main, pour comprendre ce que l\'on validera plus tard. Développer avec un assistant fait l\'objet de la formation vibecoding, et ajouter de l\'IA à une application de la formation intégrer l\'IA dans ses logiciels existants.'],
        ['q' => 'Faut-il un Mac ou un ordinateur puissant ?', 'r' => 'Non. Un portable sous Windows, macOS ou Linux suffit, s\'il fait tourner PHP 8.3 au moins, Composer, Node.js et une base locale. Sous Windows et macOS, Laravel Herd simplifie l\'installation ; XAMPP, limité à PHP 8.2 dans sa dernière version, ne suffit pas pour Laravel 13.'],
        ['q' => 'Peut-on travailler sur le code de notre propre application ?', 'r' => 'Oui, en intra, sur une copie du dépôt et une base anonymisée ou remplie de données fictives. Un engagement de confidentialité peut être signé. La formation se termine alors par des règles d\'équipe écrites pour ce dépôt : relecture, tests exigés et procédure de mise en production.'],
        ['q' => 'Combien coûte la formation, et comment la régler ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de développeurs, le format, l\'ajout du module de reprise, le travail sur votre code et le suivi prévu. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Délivre-t-on une certification Laravel ?', 'r' => 'Non. La formation se conclut par une évaluation sur une modification faite seul et par une attestation de fin de formation. Richard SALANON n\'est certifié par aucun éditeur ; l\'application mise en ligne et son code restent la meilleure preuve de ce qui a été appris.'],
        ['q' => 'Combien de temps faut-il pour être autonome sur Laravel ?', 'r' => 'Les quatre jours donnent les gestes et la méthode ; l\'autonomie vient avec la pratique régulière dans les semaines suivantes, sur un projet réel. Un développeur qui code chaque semaine reprend seul les tâches courantes après quelques semaines ; un suivi au devis aide à franchir ce cap.'],
        ['q' => 'La formation peut-elle être financée par le FDFP, le 3FPT ou un OPCO ?', 'r' => 'Peut-être, selon chaque fonds. Le FDFP exige l\'habilitation des opérateurs privés, sauf ceux basés hors de Côte d\'Ivoire ; les OPCO exigent la certification Qualiopi, que Richard SALANON ne détient pas. Interrogez le fonds par écrit, programme et devis en main, avant de vous engager.'],
    ],

    'sources' => [
        ['titre' => 'Laravel, notes de version 13.x et politique de support', 'url' => 'https://laravel.com/docs/13.x/releases', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, guide de mise à niveau de 12.x vers 13.0', 'url' => 'https://laravel.com/docs/13.x/upgrade', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, installation (PHP, Composer, Herd, configuration)', 'url' => 'https://laravel.com/docs/13.x/installation', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, déploiement (prérequis du serveur, optimisation, mode débogage, route /up)', 'url' => 'https://laravel.com/docs/13.x/deployment', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, kits de démarrage et authentification avec Fortify', 'url' => 'https://laravel.com/docs/13.x/starter-kits', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, Eloquent : affectation de masse, rigueur et purge des modèles', 'url' => 'https://laravel.com/docs/13.x/eloquent', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, relations Eloquent et chargement anticipé', 'url' => 'https://laravel.com/docs/13.x/eloquent-relationships', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, chiffrement et rotation de la clé APP_KEY', 'url' => 'https://laravel.com/docs/13.x/encryption', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, localisation et publication des fichiers de langue', 'url' => 'https://laravel.com/docs/13.x/localization', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, développement assisté par l\'IA et Laravel Boost', 'url' => 'https://laravel.com/docs/13.x/ai', 'date' => '2026-10-05'],
        ['titre' => 'PHP, branches maintenues et calendrier de support', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-05'],
        ['titre' => 'Apache Friends, téléchargement de XAMPP', 'url' => 'https://www.apachefriends.org/', 'date' => '2026-10-05'],
        ['titre' => 'Laravel Herd, environnement local et tarifs de Herd Pro', 'url' => 'https://herd.laravel.com/', 'date' => '2026-10-05'],
        ['titre' => 'Laravel Forge, tarifs', 'url' => 'https://laravel.com/forge/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Laravel Cloud, tarifs et régions', 'url' => 'https://laravel.com/cloud/pricing', 'date' => '2026-10-05'],
        ['titre' => 'JetBrains, The State of PHP 2025 (15 octobre 2025)', 'url' => 'https://blog.jetbrains.com/phpstorm/2025/10/state-of-php-2025/', 'date' => '2026-10-05'],
        ['titre' => 'OWASP Top 10:2025', 'url' => 'https://top10.owasp.org/2025', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, guide RGPD du développeur : gérer les utilisateurs', 'url' => 'https://www.cnil.fr/fr/gerer-les-utilisateurs', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, guide RGPD du développeur : préparer l\'exercice des droits des personnes', 'url' => 'https://www.cnil.fr/fr/preparer-lexercice-des-droits-des-personnes', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['developpement-web', 'vibecoding', 'api-rest', 'nextjs-react', 'creer-son-saas', 'integrer-ia-logiciels-existants'],
        'services'    => ['application-web-sur-mesure', 'api-rest-integrations', 'developpeur-web-freelance'],
        'comparatifs' => [],
    ],
];
