<?php
// ============================================================
// data/formations/api-rest.php · Fiche formation « API REST » (vague 1B,
// lot B, domaine développement ; date de publication reportée ensuite).
// Angle propre : concevoir, sécuriser, documenter et tester une API, pour
// des développeurs. Consommer une API sans coder relève de la fiche
// integrations-api-no-code ; le framework lui-même, de laravel-php ; la
// prestation, du pilier /services/api-rest-integrations, dont aucun texte
// n'est repris. Exemple réel : dépôt public bj-decoupage (Laravel 10, routes
// GET, mars 2024), lu le 05/10/2026, et l'API d'Allo Artisan citée sur la
// page /richard-salanon.
// Sources consultées le 05/10/2026 : RFC 9110, 9457, 6750, 9745, brouillon
// Idempotency-Key de l'IETF, OpenAPI 3.2.1, OWASP API Security Top 10 2023,
// documentation Laravel 13.x (notes de version, routage, Sanctum, ressources
// Eloquent, tests HTTP), php.net, Spectral, Scramble, Scribe, Postman, Bruno,
// rapport Postman 2025, CNIL, UIT, SGG du Bénin, FDFP, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation API REST : concevoir, sécuriser, documenter et tester une API que d\'autres développeurs utilisent sans avoir à vous appeler',
    'title'   => 'Formation API REST pour développeurs | Richard SALANON',
    'meta'    => 'Formation API REST pour développeurs : concevoir un contrat OpenAPI, sécuriser selon l\'OWASP, documenter et tester une API Laravel. Prix sur devis.',
    'en_bref' => 'Une formation pour les développeurs qui doivent ouvrir une API à une application mobile, à un partenaire ou à un autre logiciel : écrire le contrat OpenAPI avant le code, l\'implémenter avec Laravel 13, authentifier et limiter les appelants, fermer les risques de l\'OWASP, tester chaque refus, puis documenter et versionner. Elle s\'adresse aux développeurs back-end, aux intégrateurs et aux équipes qui relient plusieurs logiciels, avec huit participants au plus. Elle dure trois jours en six demi-journées, ou une journée de revue sur votre propre API, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => false,
    'duree'   => '3 jours (6 demi-journées), ou journée de revue sur votre propre API',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, ou une journée de revue de votre API'],
        ['l' => 'Public', 'v' => 'Développeurs back-end, intégrateurs, équipes qui relient plusieurs logiciels'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride ; huit participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : HTTP tel que la norme le définit, puis le contrat avant le code',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que la RFC 9110 dit vraiment des méthodes : GET, HEAD, OPTIONS et TRACE ne modifient rien ; PUT et DELETE peuvent être rejouées sans effet supplémentaire ; POST ne le peut pas.',
                'Découper le métier du fil rouge en ressources (revendeurs, produits, commandes, lignes de commande) et décider quelles relations méritent une adresse imbriquée.',
                'Écrire à la main une première description OpenAPI 3.1 en YAML : chemins, paramètres, schémas, exemples de réponses réussies et d\'erreurs.',
                'Passer le fichier au linter Spectral et corriger chaque avertissement avant d\'écrire une seule ligne de PHP.',
                'Exercice : relecture croisée des contrats, chaque participant cherchant ce qu\'un développeur mobile ne pourrait pas deviner.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : du contrat au code avec Laravel 13',
            'duree'  => '3 h 30',
            'points' => [
                'La commande install:api : le fichier routes/api.php, le préfixe /api ajouté d\'office, le groupe de middleware sans état et l\'installation de Sanctum.',
                'Contrôleurs d\'API et requêtes de formulaire : valider sur le serveur et répondre 422 avec la liste des champs en cause.',
                'Ressources Eloquent (JsonResource) pour choisir champ par champ ce qui sort, avec des relations incluses seulement quand elles ont été chargées.',
                'Pagination : les clés data, links et meta produites par Laravel, et une taille de page plafonnée côté serveur, quoi que demande le client.',
                'Un format d\'erreur unique pour toute l\'API, sur le modèle application/problem+json de la RFC 9457, sans trace technique dans la réponse.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : authentifier les appelants',
            'duree'  => '3 h 30',
            'points' => [
                'Jetons personnels de Sanctum : émission, stockage haché en SHA-256, valeur en clair montrée une seule fois, révocation.',
                'Capacités des jetons (abilities) pour cantonner un partenaire à la lecture, et middleware qui les vérifie route par route.',
                'Durée de vie : Sanctum ne fait expirer aucun jeton par défaut ; on fixe une expiration et l\'on purge les jetons échus avec sanctum:prune-expired.',
                'Le jeton voyage dans l\'en-tête Authorization, jamais dans l\'adresse, comme le recommande la RFC 6750 sur les jetons porteurs.',
                'Clé par partenaire, jeton par appareil, OAuth 2.0 quand un tiers agit au nom de vos utilisateurs : trancher sur trois situations concrètes.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : autoriser, limiter, résister aux abus',
            'duree'  => '3 h 30',
            'points' => [
                'Les dix risques du Top 10 de l\'OWASP pour les API, édition 2023, chacun reproduit sur le fil rouge avant d\'être corrigé.',
                'Contrôle d\'appartenance de chaque objet par une Policy, et liaisons imbriquées limitées à leur parent avec scopeBindings.',
                'Champs modifiables déclarés un par un : un revendeur ne change ni son plafond de crédit ni son propre statut.',
                'Limitation de débit avec RateLimiter : quota par jeton ou par adresse IP, réponse 429, et compteur réservé aux réponses 404 pour freiner l\'énumération des identifiants.',
                'Origines CORS limitées aux applications connues, mode débogage coupé, en-têtes de réponse relus un par un.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : tester l\'API et son contrat',
            'duree'  => '3 h 30',
            'points' => [
                'Tests de fonctionnalité avec getJson et postJson, assertions sur le statut, assertJsonPath et assertJsonStructure.',
                'Sanctum::actingAs pour tester chaque capacité de jeton, et un test qui échoue dès qu\'une route accepte un appel sans droit.',
                'Vérifier que les réponses réelles respectent toujours les schémas du fichier OpenAPI, pour que le contrat et le code ne divergent pas.',
                'Une collection de requêtes Bruno rangée dans le dépôt Git, à côté du code, que n\'importe quel développeur peut rejouer.',
                'Exercice : écrire d\'abord le test qui prouve une faille trouvée la veille, le voir échouer, puis corriger.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : documenter, versionner, publier',
            'duree'  => '3 h 30',
            'points' => [
                'Générer la documentation à partir du code avec Scramble ou Scribe, puis la confronter au contrat écrit le premier matin.',
                'Rédiger ce qu\'aucun générateur n\'écrit : démarrage en cinq minutes, obtention d\'un jeton, exemples complets, erreurs les plus fréquentes.',
                'Préparer la version suivante : ajouts sans rupture, préfixe /v2 pour une rupture, en-têtes Deprecation et Sunset sur l\'ancienne version.',
                'Émettre ses propres webhooks : événement nommé, signature calculée avec un secret partagé, nouvelles tentatives espacées, identifiant d\'événement unique.',
                'Évaluation : chacun ajoute une ressource à l\'API d\'un autre participant en ne s\'aidant que de sa documentation.',
            ],
        ],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et qu\'est-ce qu\'elle laisse de côté ?',
            'paragraphes' => [
                'Une API a des utilisateurs que vous ne rencontrerez peut-être jamais : le développeur de l\'application mobile, l\'équipe technique d\'un partenaire, la personne qui reprendra le code dans trois ans. Tous vont deviner votre intention à partir de ce que renvoie le serveur. Cette formation apprend à concevoir depuis leur place : un contrat lisible avant le code, des réponses prévisibles, des refus explicites, une documentation qui suffit. Elle traite ensuite ce qui fait tomber les API en production, à savoir les contrôles d\'accès oubliés, les jetons éternels et les listes sans limite.',
                'À la fin des trois jours, chaque participant a produit et défendu une API complète. Un contrat OpenAPI 3.1 validé par un linter. Son implémentation en Laravel 13, avec des ressources qui filtrent les champs, une pagination plafonnée et un format d\'erreur unique. Une authentification par jetons à durée limitée et à capacités restreintes. Des tests qui prouvent qu\'un appelant ne peut ni lire ni modifier l\'objet d\'un autre. Une documentation qu\'un collègue a suivie sans aide jusqu\'à son premier appel réussi, et un plan écrit pour la prochaine version.',
                'Plusieurs sujets voisins ont leur propre formation. Les bases du framework (routes, Eloquent, authentification par session, déploiement) sont traitées dans la fiche Laravel et PHP, reliée en bas de page ; les bases de PHP et de MySQL dans la <a href="/formations/developpement-web">formation au développement web</a>. Utiliser l\'API d\'un autre éditeur depuis n8n ou Make, sans écrire de code, relève de la fiche Intégrations API en no-code et low-code. Appeler un modèle d\'IA depuis un logiciel en service se travaille dans la formation <a href="/formations/integrer-ia-logiciels-existants">intégrer l\'IA dans ses logiciels existants</a>. GraphQL et gRPC sont seulement situés par rapport à REST.',
                'La formation ne livre pas non plus une API à votre place. Si l\'enjeu est d\'obtenir rapidement un connecteur ou une API métier en production, la prestation <a href="/services/api-rest-integrations">API REST et intégrations</a> répond mieux. Les deux se combinent souvent : une API construite par un prestataire, puis une équipe interne formée pour la relire, la tester et la faire évoluer sans repartir de zéro à chaque demande d\'un partenaire.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que doit-on savoir faire sans aide au terme des trois jours ?',
            'items' => [
                'Choisir la méthode et le code de statut de chaque opération en citant la règle de la RFC 9110 qui le justifie.',
                'Rédiger une description OpenAPI 3.1 qui passe le linter Spectral sans erreur, exemples de réponses en erreur compris.',
                'Transformer un modèle Eloquent en réponse JSON qui n\'expose que les champs prévus par le contrat.',
                'Paginer une liste avec une taille maximale imposée par le serveur, quelle que soit la valeur demandée par le client.',
                'Émettre, restreindre, faire expirer et révoquer un jeton d\'accès, puis prouver chaque refus par un test automatisé.',
                'Démontrer, route par route, qu\'un appelant ne lit ni ne modifie l\'objet d\'un autre appelant.',
                'Renvoyer toutes les erreurs dans un format unique, sans pile d\'appels, nom de table ni requête SQL.',
                'Publier une documentation qu\'un développeur extérieur suit seul jusqu\'à son premier appel réussi.',
                'Annoncer le retrait d\'une ancienne version avec une date, sans casser les applications qui l\'utilisent encore.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pour qui est cette formation, à quel niveau et avec quel poste de travail ?',
            'intro' => 'Elle vise des personnes qui savent déjà écrire une application côté serveur et une requête SQL. Avant le devis, un court test de positionnement demande d\'écrire une route qui lit une table et renvoie du JSON, puis de la publier sur une branche Git. Il sert à composer des groupes homogènes de huit personnes au plus, pas à écarter qui que ce soit.',
            'items' => [
                ['titre' => 'Développeurs back-end PHP et Laravel', 'texte' => 'Ils renvoient déjà du JSON depuis leurs contrôleurs, souvent en retournant le modèle entier. Ils apprennent à concevoir avant de coder, à filtrer ce qui sort, à protéger chaque objet et à prouver ces protections par des tests.'],
                ['titre' => 'Développeurs Node.js, Python ou Java', 'texte' => 'Le contrat, les codes de statut, les risques de l\'OWASP et la documentation ne dépendent d\'aucun langage. Le fil rouge de référence est écrit en Laravel 13 ; en inter, un participant peut implémenter le sien avec NestJS, Express ou Flask, et le formateur relit son code dans ce langage.'],
                ['titre' => 'Développeurs mobiles et front-end', 'texte' => 'Ils consomment des API tous les jours et subissent leurs défauts : champs qui changent de nom, erreurs illisibles, listes énormes. Ils viennent apprendre à négocier le contrat avec l\'équipe serveur, ou à écrire eux-mêmes la petite API dont leur application a besoin.'],
                ['titre' => 'Équipes qui ouvrent leurs données', 'texte' => 'Intégrateurs, éditeurs de logiciels, services informatiques de PME : un partenaire, un bailleur ou un client réclame un accès automatisé. Il faut décider ce que l\'on expose, à qui, pour combien de temps, et comment on le retire.'],
                ['titre' => 'Prérequis', 'texte' => 'Écrire une application côté serveur dans un langage au moins, des requêtes SQL simples, l\'usage courant de Git et la lecture d\'un document JSON. Pour suivre le fil rouge en Laravel, connaître les routes, les contrôleurs et Eloquent. Les normes et les documentations sont en anglais ; une lecture lente suffit.'],
                ['titre' => 'Poste de travail', 'texte' => 'Un ordinateur portable avec droits d\'installation, PHP 8.3 au moins, Composer, une base de données locale, Git, Node.js pour faire tourner Spectral, et un client d\'API ; la version gratuite de Bruno suffit. La liste d\'installation part une semaine avant la première séance, avec une vérification à distance.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Sur quel fil rouge et avec quels exercices les participants travaillent-ils ?',
            'items' => [
                ['titre' => 'Le fil rouge : l\'API d\'un grossiste', 'duree' => 'Fourni avant la session', 'texte' => 'Un grossiste approvisionne des revendeurs. Leur application mobile lit le catalogue et passe des commandes ; un livreur partenaire lit les commandes prêtes à partir. Trois consommateurs, trois niveaux de droits, des montants en francs CFA : assez pour rencontrer tous les problèmes réels. En intra, le sujet est remplacé par un besoin de l\'organisation, toujours sur des données fictives.'],
                ['titre' => 'Le contrat relu par un autre', 'duree' => '1 heure, jour 1', 'texte' => 'Chaque contrat OpenAPI passe entre les mains d\'un autre participant, qui joue le développeur mobile et note chaque question qu\'il devrait poser par téléphone. Format des dates, montant avec ou sans décimales, champ absent ou nul, tri par défaut : chaque question notée est un trou du contrat à combler.'],
                ['titre' => 'Changer de revendeur', 'duree' => '1 heure, jour 2', 'texte' => 'Connecté avec le jeton du revendeur A, le participant demande la commande du revendeur B, puis tente de modifier son propre plafond de crédit, puis appelle une route réservée au grossiste. Chaque porte qui s\'ouvre devient une règle dans une Policy ou une liste de champs, puis un test qui doit échouer avant la correction.'],
                ['titre' => 'La rafale et l\'énumération', 'duree' => '45 minutes, jour 2', 'texte' => 'Un petit script envoie cinq cents requêtes en quelques secondes, puis essaie les identifiants de commande un par un. On observe ce que l\'API répond, on règle les quotas, et l\'on vérifie que les tentatives sur des identifiants inexistants sont freinées plus tôt que les appels normaux.'],
                ['titre' => 'La commande envoyée deux fois', 'duree' => '45 minutes, jour 3', 'texte' => 'La connexion du téléphone coupe juste après l\'envoi d\'une commande ; l\'application renvoie la même requête au retour du réseau, et le grossiste reçoit deux commandes. Les participants conçoivent la parade côté serveur : une clé fournie par le client, enregistrée avec la première réponse, et la même réponse renvoyée à chaque répétition.'],
                ['titre' => 'La revue d\'une API publique réelle', 'duree' => '1 heure, jour 3', 'texte' => 'Le groupe lit le code de l\'API du découpage administratif du Bénin publiée par le formateur en 2024, décrite plus bas. Chacun dresse la liste de ce qu\'il garderait et de ce qu\'il changerait aujourd\'hui, en s\'appuyant sur ce qui a été vu depuis le premier matin.'],
                ['titre' => 'L\'appel sans aide', 'duree' => '1 heure, évaluation finale', 'texte' => 'Chaque participant reçoit l\'URL de la documentation d\'un autre, un jeton de test et une tâche : ajouter une ressource côté client, la créer, la relire, provoquer une erreur de validation. Ce qui bloque est noté par écrit et renvoyé à l\'auteur, qui corrige sa documentation avant la fin de la journée.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Avec quelle version d\'OpenAPI écrit-on le contrat, et pourquoi pas avec la plus récente ?',
            'paragraphes' => [
                'Selon l\'OpenAPI Initiative, la version 3.2.1 de la <a href="https://spec.openapis.org/oas/latest.html">spécification OpenAPI</a> a été publiée le 10 septembre 2026. Elle permet de décrire une API HTTP sans dépendre d\'aucun langage, dans un document JSON ou YAML que les personnes comme les programmes savent lire ; ses schémas s\'appuient sur JSON Schema dans sa version 2020-12. Elle connaît cinq types de mécanismes de sécurité : apiKey, http, oauth2, openIdConnect et mutualTLS. C\'est le texte que l\'on ouvre en séance pour trancher une question de syntaxe, plutôt qu\'un tutoriel de blog.',
                'Le contrat du fil rouge s\'écrit pourtant en 3.1, et ce choix fait partie de la leçon. Les outils suivent la norme avec retard : la page du dépôt de <a href="https://github.com/stoplightio/spectral">Spectral</a>, lue le 5 octobre 2026, annonce la prise en charge d\'OpenAPI 2.0, 3.0 et 3.1, et <a href="https://scramble.dedoc.co/">Scramble</a> indique produire des documents au format 3.1.0. Rédiger en 3.2 dès aujourd\'hui, c\'est risquer qu\'un linter, un générateur de documentation ou un générateur de clients refuse le fichier. On choisit une version en vérifiant toute la chaîne d\'outils, pas en retenant le numéro le plus élevé.',
                'Deux méthodes coexistent dans les équipes. Le contrat d\'abord : on écrit le fichier à la main, on le fait valider par les consommateurs, puis on vérifie que le code le respecte. Le code d\'abord : on développe, et un outil comme Scramble ou Scribe produit la description. La formation pratique les deux, dans cet ordre, puis compare les fichiers obtenus. Les écarts sont instructifs : un champ oublié dans une ressource, un code d\'erreur jamais décrit, un paramètre de pagination que le générateur n\'a pas vu. Chaque équipe repart en sachant lequel des deux documents fait foi chez elle.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel code de statut l\'API doit-elle renvoyer, et dans quel cas ?',
            'legende' => 'Les décisions que chaque participant doit savoir justifier côté serveur, d\'après la RFC 9110 (juin 2022), la RFC 6585 (avril 2012), la RFC 6750 (octobre 2012) et la RFC 9457 (juillet 2023), consultées le 5 octobre 2026. Le point de vue inverse, celui de la personne qui reçoit ces codes dans un outil d\'automatisation, relève de la fiche sur les intégrations sans code.',
            'entetes' => ['Situation côté serveur', 'Réponse', 'Ce que dit la norme', 'Erreur fréquente constatée en séance'],
            'lignes'  => [
                ['Une commande vient d\'être créée', '201', 'Un en-tête Location désigne la ressource créée (RFC 9110)', 'Répondre 200 sans dire où retrouver la commande'],
                ['Suppression réussie, rien à renvoyer', '204', 'Aucun contenu dans le corps de la réponse', 'Renvoyer 200 et un message « supprimé » que personne ne lit'],
                ['JSON illisible ou paramètre de forme invalide', '400', 'La requête ne peut pas être comprise telle quelle', 'Confondre ce cas avec une valeur métier refusée'],
                ['JSON correct, mais quantité négative ou produit inconnu', '422', 'Contenu bien formé mais impossible à traiter (RFC 9110, section 15.5.21)', 'Laisser la base rejeter la valeur et répondre 500'],
                ['Jeton absent, expiré ou révoqué', '401', 'En-tête WWW-Authenticate obligatoire ; erreur invalid_token selon la RFC 6750', 'Répondre 403, ce qui laisse croire que le jeton est valide'],
                ['Jeton valide mais capacité insuffisante', '403', 'Erreur insufficient_scope selon la RFC 6750', 'Masquer tous les refus derrière un 404 au point de rendre le diagnostic impossible'],
                ['Commande appartenant à un autre revendeur', '404', 'La RFC 9110 admet que le serveur ne révèle pas l\'existence d\'une ressource', 'Répondre 403, qui confirme à l\'appelant que l\'identifiant existe'],
                ['Méthode non prévue sur cette adresse', '405', 'En-tête Allow obligatoire, avec les méthodes acceptées', 'Laisser le framework renvoyer une page HTML'],
                ['Modification fondée sur une version périmée de la commande', '412 ou 409', 'Requête conditionnelle avec ETag et If-Match contre la mise à jour perdue', 'Écraser sans prévenir la modification d\'un collègue'],
                ['Corps envoyé en XML ou en formulaire', '415', 'Type de contenu non pris en charge par l\'opération', 'Lire quand même et enregistrer des champs vides'],
                ['Quota dépassé, ou maintenance en cours', '429 ou 503', 'Retry-After indique quand revenir : RFC 6585 pour 429, RFC 9110 pour 503', 'Ne rien indiquer, ce qui pousse les clients à réessayer en boucle'],
                ['Toute erreur, quel que soit son code', 'Corps application/problem+json', 'Membres type, title, status, detail et instance ; pas de pile d\'appels (RFC 9457)', 'Un format d\'erreur différent dans chaque contrôleur'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel exercice révèle chacun des dix risques de l\'OWASP pour les API ?',
            'legende' => 'Les dix risques du Top 10 de l\'OWASP consacré à la sécurité des API, édition 2023, la dernière que le site du projet présentait le 5 octobre 2026, et la façon dont chacun est provoqué puis fermé sur le fil rouge.',
            'entetes' => ['Risque (OWASP 2023)', 'Comment on le provoque en séance', 'Ce que l\'on met en place, et le test qui le prouve'],
            'lignes'  => [
                ['API1, autorisation au niveau de l\'objet', 'Le revendeur A demande la commande du revendeur B en changeant l\'identifiant', 'Policy appelée dans chaque action, liaison limitée au parent ; le test attend un 404'],
                ['API2, authentification', 'Rejouer un jeton révoqué, le passer dans l\'adresse, essayer cent mots de passe sur la route d\'émission', 'Expiration fixée, révocation, limite par adresse e-mail sur l\'émission ; le test attend un 401 après révocation'],
                ['API3, autorisation au niveau des propriétés', 'Glisser le plafond de crédit dans un PATCH ; chercher des champs internes dans les réponses', 'Champs modifiables listés, ressource qui choisit les champs lus ; le test vérifie que le champ protégé n\'a pas bougé'],
                ['API4, consommation de ressources sans limite', 'Demander cent mille lignes par page, envoyer un fichier énorme, lancer la rafale', 'Taille de page plafonnée, taille des requêtes bornée, quotas ; le test attend un 429 au-delà du quota'],
                ['API5, autorisation au niveau des fonctions', 'Appeler la route de modification des tarifs avec un jeton de revendeur', 'Capacité du jeton et rôle vérifiés sur la route, refus par défaut ; le test attend un 403'],
                ['API6, accès sans limite aux flux métier sensibles', 'Réserver par script tout le stock d\'un produit en promotion', 'Limite propre au flux, par revendeur et par jour ; le test porte sur la quantité cumulée'],
                ['API7, falsification de requête côté serveur', 'Déclarer une adresse interne comme destination de webhook', 'Liste de domaines autorisés, adresses privées refusées ; le test essaie 127.0.0.1 et une adresse du réseau local'],
                ['API8, mauvaise configuration de sécurité', 'Provoquer une erreur avec le mode débogage actif, appeler depuis une origine inconnue', 'Débogage coupé, CORS restreint, erreurs au format problème ; le test vérifie l\'absence de trace dans le corps'],
                ['API9, inventaire des API mal tenu', 'Retrouver une route de test oubliée en listant les routes de l\'application', 'Contrat comparé à la sortie de php artisan route:list, dates de retrait inscrites ; un test échoue si une route n\'est pas décrite'],
                ['API10, consommation non sûre d\'API tierces', 'Faire renvoyer au faux service du livreur un JSON inattendu ou une réponse très lente', 'Réponses du tiers validées, délai d\'attente borné ; le test simule le tiers avec Http::fake'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que montre la revue d\'une API réelle, celle du découpage administratif du Bénin ?',
            'paragraphes' => [
                'Le dépôt public <a href="https://github.com/Richard6141/bj-decoupage">bj-decoupage</a> contient une API écrite par Richard SALANON avec Laravel 10 : selon l\'historique GitHub consulté le 5 octobre 2026, son premier commit date du 19 mars 2024 et le dernier du lendemain. Ses routes, toutes en lecture, suivent la hiérarchie du pays, des départements aux communes, aux arrondissements puis aux quartiers, et désignent les parents par leur nom. Les contrôleurs portent des annotations en français destinées à Scribe, présent parmi les dépendances de développement, qui en tire la documentation. Un projet réel, petit et public : exactement ce qu\'il faut pour une revue honnête.',
                'La revue fait apparaître ce qu\'un participant doit savoir repérer seul. Appelée sans paramètre, la route des quartiers renvoie la liste entière en une seule réponse ; avec la pagination, la taille de page demandée n\'a pas de plafond. L\'OWASP range ces deux points sous la consommation de ressources sans limite. Une recherche sans résultat répond 404 avec un message, là où beaucoup de clients attendent un 200 et une liste vide. Aucune version n\'apparaît dans les adresses, et le dossier des tests ne contient que l\'exemple livré avec le framework.',
                'Rien de cela n\'est grave pour un référentiel de données publiques en lecture seule, et c\'est l\'intérêt de l\'exercice : peser chaque défaut selon l\'usage. Le même choix deviendrait dangereux sur des commandes ou des données personnelles. Le calendrier compte aussi : selon les <a href="https://laravel.com/docs/13.x/releases">notes de version de Laravel</a>, la version 10 ne reçoit plus de correctifs de sécurité depuis le 4 février 2025. Les participants rédigent donc un plan de reprise dans l\'ordre : tests de caractérisation, pagination plafonnée, préfixe /v1 gardé pour les clients actuels, puis montée de version.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelle méthode, et que garde chaque participant une fois les trois jours passés ?',
            'intro' => 'Chaque demi-journée suit le même rythme : un problème montré sur le fil rouge, la règle qui le résout avec sa source, puis une à deux heures sur le projet de chacun. Le formateur relit le code dans les requêtes de fusion des dépôts, comme le ferait un collègue exigeant.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Relire sérieusement des Policies, des ressources et des tests sur huit dépôts différents prend déjà toute l\'attention du formateur. Au-delà, une route mal protégée passe inaperçue jusqu\'à l\'évaluation finale, ce qui est trop tard.'],
                ['titre' => 'Une source primaire pour chaque règle', 'texte' => 'Chaque décision renvoie à la RFC, à la spécification OpenAPI, au Top 10 de l\'OWASP ou à la documentation de Laravel. Le but est que le participant y cherche seul la réponse à la prochaine question, au lieu de recopier l\'habitude du dernier projet.'],
                ['titre' => 'L\'attaque avant la défense', 'texte' => 'Aucune protection n\'est présentée sans l\'attaque qui la justifie, menée par un participant sur la copie locale de l\'API d\'un autre. Une faille que l\'on a soi-même exploitée ne s\'oublie pas.'],
                ['titre' => 'Votre propre API, en intra', 'texte' => 'Les exercices peuvent porter sur une copie du dépôt de l\'organisation, avec une base anonymisée ou remplie de données fictives. Un engagement de confidentialité est signé avant tout accès au code si l\'organisation le souhaite.'],
                ['titre' => 'Des supports qui servent ensuite', 'texte' => 'Contrat OpenAPI de référence, dépôt du fil rouge découpé en étapes, grille de revue d\'API, collection Bruno, modèle de page de démarrage et liste de contrôle avant publication, dans des formats modifiables.'],
                ['titre' => 'Un suivi convenu au devis', 'texte' => 'Pendant la période prévue, la relecture du contrat de la première API réelle de chaque participant, ou d\'une branche de son projet, et les questions d\'application par un canal direct.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils travaille-t-on, et lesquels sont payants ?',
            'legende' => 'Versions et tarifs relevés le 5 octobre 2026 sur les pages officielles citées dans les sources ; montants en dollars américains, hors taxes, susceptibles de changer. Aucun abonnement n\'est exigé pour suivre la formation.',
            'entetes' => ['Outil', 'Rôle pendant la formation', 'Version ou offre', 'Coût d\'éditeur'],
            'lignes'  => [
                ['Laravel et Sanctum', 'Framework du fil rouge et jetons d\'accès', 'Laravel 13, sorti le 17 mars 2026 ; Sanctum installé par install:api', 'Gratuits et open source'],
                ['PHP', 'Langage du fil rouge', '8.3 au minimum pour Laravel 13 ; 8.4 et 8.5 reçoivent des correctifs de sécurité jusqu\'à fin 2028 et fin 2029', 'Gratuit'],
                ['Spécification OpenAPI', 'Le contrat de l\'API', 'Version 3.2.1 publiée le 10 septembre 2026 ; contrat du fil rouge rédigé en 3.1', 'Spécification ouverte'],
                ['Spectral', 'Linter du contrat, règles de style et règles de sécurité', 'OpenAPI 2.0, 3.0 et 3.1', 'Gratuit, licence Apache 2.0'],
                ['Scramble', 'Documentation tirée du code Laravel, sans annotations', 'Documents au format OpenAPI 3.1.0', 'Version gratuite et open source ; offre PRO payante pour certains paquets'],
                ['Scribe', 'Documentation tirée du code et d\'annotations : page HTML avec testeur, collection Postman, fichier OpenAPI', 'Version 5, pour Laravel 9 ou plus récent', 'Gratuit et open source'],
                ['Pest ou PHPUnit', 'Tests de fonctionnalité de l\'API', 'Fournis avec le squelette d\'application Laravel', 'Gratuits'],
                ['Bruno', 'Client d\'API dont les collections sont des fichiers rangés dans Git', 'Édition open source', 'Gratuit ; Pro à 6 dollars et Ultimate à 11 dollars par utilisateur et par mois, en paiement annuel'],
                ['Postman', 'Client d\'API, utilisé quand l\'équipe s\'en sert déjà', 'Offre Free limitée à un utilisateur', 'Solo à 9 dollars par mois ; Team à 19 dollars par utilisateur et par mois, en paiement annuel'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que disent les enquêtes sur la façon dont les équipes conçoivent et testent leurs API ?',
            'items' => [
                ['valeur' => '93 %', 'libelle' => 'Répondants qui utilisent REST, devant les webhooks (50 %), les WebSockets (35 %) et GraphQL (33 %), parmi plus de 5 700 développeurs, architectes et dirigeants interrogés en 2025', 'source' => 'Postman, 2025 State of the API Report', 'url' => 'https://www.postman.com/state-of-api/2025/'],
                ['valeur' => '55 %', 'libelle' => 'Répondants gênés par une documentation incohérente ou périmée ; 34 % ne retrouvent pas les API qui existent déjà dans leur organisation (2025)', 'source' => 'Postman, 2025 State of the API Report', 'url' => 'https://www.postman.com/state-of-api/2025/'],
                ['valeur' => '17 %', 'libelle' => 'Équipes qui pratiquent les tests de contrat, contre 67 % pour les tests fonctionnels comme pour les tests d\'intégration (2025)', 'source' => 'Postman, 2025 State of the API Report', 'url' => 'https://voyager.postman.com/doc/postman-state-of-the-api-report-2025.pdf'],
                ['valeur' => '26 %', 'libelle' => 'Équipes qui appliquent une gestion sémantique des versions, alors que 60 % versionnent leurs API (2025)', 'source' => 'Postman, 2025 State of the API Report', 'url' => 'https://voyager.postman.com/doc/postman-state-of-the-api-report-2025.pdf'],
                ['valeur' => '25 %', 'libelle' => 'Organisations qui se disent entièrement « API-first », contre 82 % qui le sont au moins en partie (2025)', 'source' => 'Postman, 2025 State of the API Report', 'url' => 'https://www.postman.com/state-of-api/2025/'],
                ['valeur' => '4 février 2025', 'libelle' => 'Fin des correctifs de sécurité de Laravel 10 ; Laravel 13, sorti le 17 mars 2026, en reçoit jusqu\'au 17 mars 2028 (notes consultées le 5 octobre 2026)', 'source' => 'Laravel, notes de version 13.x', 'url' => 'https://laravel.com/docs/13.x/releases'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que retenir de ces chiffres avant de concevoir votre propre API ?',
            'paragraphes' => [
                'Ils viennent de l\'enquête annuelle d\'un éditeur d\'outils, Postman, et se lisent comme tels : ils décrivent surtout des équipes déjà équipées. Ils confirment pourtant ce que montrent les projets. REST reste la base, utilisée par 93 % des répondants, et la moitié d\'entre eux manipulent aussi des webhooks, ce qui justifie le temps passé sur l\'émission d\'événements. Ce qui manque n\'est pas la technique mais la discipline : 55 % des répondants se heurtent à une documentation incohérente ou périmée, et un tiers ne retrouvent pas les API déjà construites chez eux.',
                'Une API que personne ne trouve ni ne comprend finit recodée à côté, avec ses propres failles. C\'est pourquoi la documentation est ici un livrable vérifié par un autre participant, et non une tâche de fin de projet. L\'écart sur les tests dit la même chose : deux tiers des équipes vérifient que leur code fonctionne, 17 % seulement qu\'il tient la promesse faite à ses clients. La matinée du troisième jour sert à combler cet écart, avec des tests qui comparent les réponses réelles au contrat.',
                'Reste le versionnage. Selon la même enquête, 60 % des équipes versionnent leurs API, mais 26 % seulement appliquent une numérotation qui dit si un changement casse quelque chose. Les clients découvrent alors la rupture en production. Depuis la <a href="https://www.rfc-editor.org/rfc/rfc9745.html">RFC 9745</a>, publiée en mars 2025, l\'en-tête Deprecation annonce dans chaque réponse qu\'une ressource est ou sera dépréciée ; combiné à l\'en-tête Sunset, qui ne peut pas porter une date antérieure, il donne aux consommateurs une échéance lisible par leurs propres programmes.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets d\'API les participants mènent-ils, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Éditeur de logiciel scolaire, Cotonou', 'probleme' => 'L\'application des parents doit afficher notes, absences et reçus de scolarité ; les premières routes renvoient les modèles entiers, numéros de téléphone des enseignants compris.', 'solution' => 'Contrat écrit avec l\'équipe mobile, ressources qui ne laissent sortir que les champs prévus, jeton par appareil avec expiration, et un test qui vérifie qu\'un parent ne voit que ses propres enfants.'],
                ['secteur' => 'Logisticien, Lomé ou Douala', 'probleme' => 'Des boutiques en ligne veulent suivre leurs colis sans appeler le service client ; aujourd\'hui, un fichier part chaque soir par e-mail.', 'solution' => 'API en lecture par clé de partenaire aux capacités limitées, webhooks émis à chaque changement de statut, signés et renvoyés en cas d\'échec, et une page de documentation en français avec des exemples complets.'],
                ['secteur' => 'Projet de données ouvertes, Burkina Faso ou Bénin', 'probleme' => 'Un référentiel public de localités et d\'établissements doit servir à des développeurs inconnus sans faire tomber un serveur modeste.', 'solution' => 'API en lecture seule sur le modèle du découpage administratif, pagination plafonnée, réponses mises en cache, quotas par adresse IP et documentation générée, avec un préfixe de version dès la première publication.'],
                ['secteur' => 'Réseau de pharmacies, Abidjan ou Dakar', 'probleme' => 'Les officines commandent au grossiste depuis une application mobile ; sur un réseau instable, un seul appui sur le bouton produit parfois deux commandes.', 'solution' => 'Clé d\'idempotence sur la création des commandes, contrôle d\'appartenance de chaque officine, format d\'erreur unique, et des tests qui envoient deux fois la même requête.'],
                ['secteur' => 'Éditeur SaaS, Paris ou Bruxelles', 'probleme' => 'Les clients réclament une API publique ; la première version, livrée vite, doit déjà renommer trois champs.', 'solution' => 'Version 2 sous un nouveau préfixe, en-têtes Deprecation et Sunset sur la version 1, journal des appels par client pour savoir qui prévenir, et contrat OpenAPI tenu comme référence unique.'],
                ['secteur' => 'Service informatique, Genève ou Montréal', 'probleme' => 'Deux applications internes lisent directement la base l\'une de l\'autre, et chaque changement de schéma casse la voisine.', 'solution' => 'Une API interne décrite par un contrat remplace l\'accès direct ; les tests de contrat tournent dans l\'intégration continue des deux équipes, formées à distance sur leur fuseau horaire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour former votre équipe aux API ?',
            'legende' => 'Le format se décide au premier échange, selon le nombre de développeurs, l\'existence d\'une API à reprendre, la confidentialité du code et la connexion disponible. Huit participants au plus par groupe.',
            'entetes' => ['Format', 'Durée et rythme', 'Contenu', 'Pour qui'],
            'lignes'  => [
                ['Intra-entreprise', 'Trois jours, consécutifs ou répartis sur deux semaines', 'Le fil rouge cède la place à l\'API réelle ou en projet de l\'organisation, sur une copie ; règles d\'équipe écrites en fin de session', 'Une équipe qui construit ou maintient une API'],
                ['Inter-entreprises', 'Trois jours', 'Fil rouge du grossiste, ou projet personnel dans le langage du participant', 'Développeurs indépendants, petites structures, profils isolés'],
                ['Journée de revue', 'Une journée, soit deux demi-journées', 'Votre API passée au crible des dix risques de l\'OWASP, du contrat et de la documentation ; premiers tests écrits sur place ; rapport remis le soir', 'Équipes dont l\'API est déjà en production'],
                ['À distance', 'Six séances de trois heures trente, sur deux semaines', 'Partage d\'écran, revue dans les requêtes de fusion, attaques menées sur des copies locales', 'Équipes réparties entre plusieurs pays'],
                ['Hybride', 'Premier jour en salle à Cotonou ou dans vos locaux, la suite à distance', 'Contrat et premières routes côte à côte, puis sécurité et tests à distance', 'Groupes qui veulent démarrer ensemble'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation API REST, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun montant n\'est affiché : la formation est chiffrée sur devis, après le test de positionnement. Ni le premier échange, ni le cadrage, ni le devis ne sont facturés. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; un éventuel abonnement à Postman, à Bruno ou à un hébergement reste payé directement à l\'éditeur.',
            'items'      => [
                ['offre' => 'Formation de trois jours', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur le fil rouge ou votre API', 'Revue du code dans les dépôts', 'Contrat, tests et documentation de référence', 'Évaluation finale et attestation']],
                ['offre' => 'Journée de revue de votre API', 'prix' => 'Sur devis', 'inclus' => ['Analyse au regard des dix risques de l\'OWASP', 'Comparaison du contrat et des routes réelles', 'Premiers tests de sécurité écrits avec l\'équipe', 'Rapport de revue écrit']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Relecture du contrat de votre première API réelle', 'Relecture d\'une branche', 'Questions d\'application pendant la période convenue']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, huit développeurs au plus par groupe.',
                'Le travail sur votre propre API, qui suppose une copie du dépôt et une base anonymisée.',
                'L\'ajout de la journée de revue, avant ou après la formation.',
                'La relecture dans un autre langage que PHP, quand des participants implémentent en Node.js, en Python ou en Java.',
                'Le mode : sur place à Cotonou, dans vos locaux, à distance ou en formule hybride, avec les déplacements éventuels.',
                'La langue des séances et des supports, en français ou en anglais, et la durée du suivi.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la formation API REST ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est promise ici : chaque fonds décide selon ses propres règles, et seule sa réponse écrite engage. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/procedures-dhabilitation/">FDFP consacrée à l\'habilitation</a>, consultée le 5 octobre 2026, l\'exige de tout opérateur privé qui sollicite ses financements, centres de formation internes compris, en dispense les structures situées hors du pays, et l\'accorde pour une année. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> a un guichet pour le personnel des entreprises et un autre pour les demandes individuelles, avec un dépôt en ligne.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, un prestataire n\'accède aux fonds publics ou mutualisés qu\'avec la certification Qualiopi. Richard SALANON n\'est pas certifié Qualiopi et n\'est ni habilité ni agréé par aucun fonds. Avant de signer, transmettez au fonds le programme demi-journée par demi-journée et le devis, conservez sa réponse, et budgétez la formation comme si elle n\'était pas financée. Les feuilles de présence, l\'évaluation finale et l\'attestation servent quel que soit le dispositif ; les règles par pays figurent sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur coûte le plus cher une fois l\'API ouverte à des partenaires ?',
            'texte' => 'Distribuer des jetons qui ne meurent jamais. La <a href="https://laravel.com/docs/13.x/sanctum">documentation de Sanctum</a> le dit sans détour : par défaut, aucun jeton n\'expire, et seule une révocation l\'invalide. Un jeton remis à un partenaire, copié dans un script, collé dans une messagerie ou glissé dans une adresse que les journaux d\'un serveur conservent reste alors une porte ouverte des années après la fin du contrat. La RFC 6750 demande d\'ailleurs de ne jamais faire passer ces jetons dans l\'adresse d\'une page. La parade tient en quatre gestes : une expiration fixée dans la configuration, des capacités réduites au besoin réel, une purge planifiée des jetons échus et un inventaire écrit de qui détient quel jeton.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels défauts réapparaissent après la formation, et comment les empêcher de revenir ?',
            'intro' => 'Sous la pression d\'une livraison, les raccourcis reviennent. Voici les plus fréquents ; chacun a une parade mécanique plutôt qu\'une bonne résolution.',
            'items' => [
                ['titre' => 'Renvoyer le modèle entier', 'texte' => 'Retourner directement la commande depuis le contrôleur expose demain la colonne ajoutée aujourd\'hui, même confidentielle. Toute réponse passe par une ressource qui liste ses champs, et un test vérifie la structure exacte avec assertJsonStructure.'],
                ['titre' => 'Vérifier qui appelle, oublier ce qu\'il demande', 'texte' => 'Le jeton est valide, donc la requête passe : c\'est le premier risque du classement de l\'OWASP. Chaque route qui reçoit un identifiant a son test de refus pour un autre appelant, écrit avant la route elle-même.'],
                ['titre' => 'Laisser le contrat vieillir', 'texte' => 'Le code évolue, le fichier OpenAPI non, et la documentation devient fausse en quelques semaines. Le linter et les tests de contrat tournent dans l\'intégration continue : une réponse qui s\'écarte du schéma bloque la fusion.'],
                ['titre' => 'Renommer un champ sans changer de version', 'texte' => 'Remplacer total par montant_total paraît anodin ; toutes les applications qui lisaient total cassent le même jour. Un ajout ne casse rien, alors qu\'un renommage ou une suppression exige une nouvelle version et une date annoncée.'],
                ['titre' => 'Des erreurs trop bavardes', 'texte' => 'Une exception non interceptée renvoie la requête SQL, le nom d\'une table ou le chemin d\'un fichier. Le gestionnaire d\'exceptions convertit tout au format problème, et le mode débogage reste coupé partout ailleurs que sur le poste du développeur.'],
                ['titre' => 'Compter sur le client pour se limiter', 'texte' => 'L\'application mobile ne demande que vingt lignes, alors personne ne plafonne côté serveur ; un script, lui, en demande cent mille. Les limites vivent sur le serveur : taille de page, taille des requêtes, quotas.'],
                ['titre' => 'Émettre des webhooks sans signature ni reprise', 'texte' => 'Le partenaire ne peut pas savoir si l\'appel vient bien de vous, et un échec à trois heures du matin perd l\'événement pour toujours. Signature, identifiant unique, nouvelles tentatives espacées et journal des envois font partie de la conception, pas des finitions.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, paiements, données personnelles, langue : que change le contexte local pour une API ?',
            'paragraphes' => [
                'Selon les <a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">chiffres 2025 de l\'UIT</a>, 36 % des habitants de l\'Afrique utilisent Internet, contre 74 % de la population mondiale et 23 % dans les pays à faible revenu. Une API destinée à des applications utilisées en Afrique francophone doit donc économiser chaque octet : réponses paginées et légères, champs choisis par le client quand c\'est utile, compression, et en-têtes qui évitent au téléphone de télécharger de nouveau ce qui n\'a pas changé. Les ressources JSON:API de Laravel 13, présentées le premier après-midi, gèrent justement les ensembles de champs partiels et le paramètre include.',
                'Les paiements par Mobile Money arrivent souvent en deux temps : l\'API enregistre une commande, puis reçoit plus tard la confirmation de l\'agrégateur. Le contrat prévoit donc des statuts intermédiaires (en attente, confirmé, échoué) et des montants en francs CFA stockés en nombres entiers. Le choix de l\'agrégateur relève du <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KKiaPay et CinetPay</a>. Pour les requêtes répétées après une coupure, l\'en-tête Idempotency-Key est très répandu sans être normalisé : le <a href="https://datatracker.ietf.org/doc/draft-ietf-httpapi-idempotency-key-header/">brouillon de l\'IETF</a> qui le décrivait, révisé le 15 octobre 2025, a expiré sans devenir une RFC. On le décrit donc dans son propre contrat.',
                'Avec des données personnelles, un défaut de contrôle d\'accès ne fait pas fuir une fiche, mais une base entière. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre ces traitements et leur transfert hors du pays. En France, la CNIL a adopté par la <a href="https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000047740097">délibération n° 2023-050 du 25 mai 2023</a> une recommandation technique sur le partage de données par API ; sa <a href="https://www.cnil.fr/fr/api-les-recommandations-de-la-cnil-sur-le-partage-de-donnees">synthèse du 24 novembre 2023</a> insiste sur l\'authentification, des droits réévalués régulièrement, la transmission des seules données nécessaires, la journalisation, le chiffrement et une documentation tenue à jour. Le programme recoupe ces points un à un.',
                'Les normes, la spécification et la documentation des outils sont en anglais ; les séances et les supports sont en français, ou en anglais à la demande. La documentation que les participants écrivent pour leurs propres consommateurs se rédige dans la langue de ces derniers : exemples en français, champ detail des erreurs compréhensible par un développeur francophone, formats de date et de numéros de téléphone locaux écrits noir sur blanc dans le contrat. Un développeur d\'Abidjan ou de Bruxelles doit pouvoir réussir son premier appel sans traduire quoi que ce soit.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à concevoir des API avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Ses API se lisent en public. Outre le dépôt du découpage administratif écrit avec Laravel en 2024, son compte GitHub contient l\'<a href="https://github.com/Richard6141/alloartisan-api">API REST d\'Allo Artisan</a>, plateforme béninoise de mise en relation entre particuliers et artisans, écrite en TypeScript avec NestJS et PostgreSQL. Ses dépendances, lues le 5 octobre 2026, comprennent le module Swagger de NestJS pour la documentation, un module de limitation du débit et Jest pour les tests. Entre ces deux projets se dessine le chemin que la formation fait parcourir en trois jours : de routes qui fonctionnent à une API documentée, limitée et testée.',
                'Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il travaille dans le numérique depuis ' . $ans . ' ans, a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et co-fondé <a href="https://audyxa.com">Audyxa</a>. Il indique avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP, et a travaillé, sur place ou à distance, dans ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et d\'Amérique du Nord. Il n\'est certifié par aucun éditeur.',
                'Sa manière de former tient en engagements vérifiables : un test de positionnement avant le devis, huit participants au plus, une source primaire derrière chaque règle, aucune donnée réelle dans les exercices, une évaluation sur l\'API d\'un autre participant et une réponse sous 24 heures. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/developpement">formations en développement</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire vos développeurs ?',
            'texte' => 'Écrivez le contrat avant le code et faites-le relire par ceux qui l\'utiliseront ; vérifiez l\'appartenance de chaque objet, pas seulement l\'identité de l\'appelant ; donnez une date de fin à chaque jeton ; plafonnez tout côté serveur ; prouvez chaque refus par un test ; documentez pour quelqu\'un qui ne pourra pas vous appeler ; annoncez toute rupture avec une date. Le reste du catalogue est sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vos développeurs doivent-ils ouvrir une API, ou reprendre celle qui existe déjà ?',
            'texte'  => 'Indiquez le nombre de développeurs, leur langage, l\'API à construire ou à reprendre et le format souhaité : vous recevez une réponse sous 24 heures, un test de positionnement, puis un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation API REST'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il connaître Laravel pour suivre la formation API REST ?', 'r' => 'Pour suivre le fil rouge, il faut connaître les routes, les contrôleurs et Eloquent ; la fiche Laravel et PHP les enseigne et se suit très bien avant celle-ci. Un développeur Node.js, Python ou Java peut implémenter son projet dans son propre langage : le contrat, les codes de statut, les risques de l\'OWASP et la documentation ne dépendent d\'aucun framework.'],
        ['q' => 'Quelle différence avec la formation aux intégrations API sans code ?', 'r' => 'Celle-ci s\'adresse aux développeurs qui construisent une API et la mettent à disposition des autres. La fiche Intégrations API en no-code et low-code apprend à des profils non développeurs à utiliser les API existantes depuis n8n, Make ou Zapier. Une équipe métier et une équipe technique peuvent suivre les deux et partager ensuite le même vocabulaire.'],
        ['q' => 'Pourquoi REST plutôt que GraphQL ?', 'r' => 'Parce que REST reste de loin le style le plus utilisé : 93 % des répondants de l\'enquête Postman de 2025, contre 33 % pour GraphQL. La formation situe GraphQL et gRPC et dit quand ils se justifient, mais consacre son temps aux erreurs qui touchent toutes les API HTTP : autorisations, limites, documentation et versions.'],
        ['q' => 'Jetons Sanctum, JWT ou OAuth 2.0 : que choisit-on ?', 'r' => 'Sanctum suffit pour vos propres applications et pour des partenaires à qui vous remettez un jeton : il stocke les jetons hachés et gère des capacités et une expiration. OAuth 2.0 se justifie quand une application tierce agit au nom de vos utilisateurs avec leur accord. Les jetons JWT sont présentés avec leur limite principale : un jeton signé reste valable jusqu\'à son expiration, sauf mécanisme de révocation ajouté.'],
        ['q' => 'Faut-il acheter un abonnement à Postman ?', 'r' => 'Non. L\'édition open source de Bruno suffit et range les collections dans le dépôt Git ; l\'offre gratuite de Postman, limitée à un utilisateur au 5 octobre 2026, convient aussi pour travailler seul. Les offres payantes ne servent qu\'au travail à plusieurs sur une même collection.'],
        ['q' => 'Peut-on travailler sur l\'API de notre entreprise ?', 'r' => 'Oui, en intra ou lors de la journée de revue, sur une copie du dépôt et une base anonymisée ou remplie de données fictives. Un engagement de confidentialité peut être signé avant l\'accès au code. La session se termine par des règles d\'équipe écrites : contrat, tests exigés, procédure de publication des versions.'],
        ['q' => 'Notre API tourne sur une ancienne version de Laravel : par où commencer ?', 'r' => 'Par des tests de caractérisation sur les routes les plus utilisées, avant de toucher au code, puis par les corrections de sécurité les moins risquées : plafonds de pagination, expiration des jetons, contrôles d\'appartenance. La montée de version vient ensuite. Pour mémoire, Laravel 10 ne reçoit plus de correctifs de sécurité depuis le 4 février 2025.'],
        ['q' => 'La formation traite-t-elle les webhooks ?', 'r' => 'Du côté de celui qui les émet : choix des événements, signature, identifiant unique, nouvelles tentatives et journal des envois. Recevoir et traiter les webhooks d\'un agrégateur de paiement depuis un outil d\'automatisation relève de la fiche sur les intégrations sans code.'],
        ['q' => 'Combien coûte la formation, et comment la régler ?', 'r' => 'Le prix est établi sur devis, selon le nombre de développeurs, le format, le travail sur votre propre API, l\'ajout de la journée de revue et la durée du suivi. Ni le premier échange, ni le cadrage, ni le devis ne sont facturés. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Obtient-on une certification ?', 'r' => 'Non. La formation se conclut par une évaluation sur l\'API d\'un autre participant et une attestation de fin de formation. Richard SALANON n\'est certifié par aucun éditeur ni par aucun organisme de normalisation : le contrat, les tests et la documentation produits restent la meilleure preuve des acquis.'],
        ['q' => 'Un fonds de formation peut-il financer la session ?', 'r' => 'Peut-être, selon le pays et le dossier. Le FDFP exige l\'habilitation des opérateurs privés, sauf ceux situés hors de Côte d\'Ivoire ; en France, les fonds publics ou mutualisés exigent la certification Qualiopi, que Richard SALANON ne détient pas. Interrogez le fonds par écrit, programme et devis en main, avant de vous engager.'],
    ],

    'sources' => [
        ['titre' => 'IETF, RFC 9110 « HTTP Semantics » (juin 2022) : méthodes sûres et idempotentes, codes de statut, requêtes conditionnelles', 'url' => 'https://www.rfc-editor.org/rfc/rfc9110.html', 'date' => '2026-10-05'],
        ['titre' => 'IETF, RFC 9457 « Problem Details for HTTP APIs » (juillet 2023)', 'url' => 'https://www.rfc-editor.org/rfc/rfc9457.html', 'date' => '2026-10-05'],
        ['titre' => 'IETF, RFC 6750 « OAuth 2.0 Bearer Token Usage » (octobre 2012)', 'url' => 'https://www.rfc-editor.org/rfc/rfc6750.html', 'date' => '2026-10-05'],
        ['titre' => 'IETF, RFC 6585 « Additional HTTP Status Codes » (avril 2012) : code 429', 'url' => 'https://www.rfc-editor.org/rfc/rfc6585.html', 'date' => '2026-10-05'],
        ['titre' => 'IETF, RFC 9745 « The Deprecation HTTP Response Header Field » (mars 2025)', 'url' => 'https://www.rfc-editor.org/rfc/rfc9745.html', 'date' => '2026-10-05'],
        ['titre' => 'IETF Datatracker, brouillon « The Idempotency-Key HTTP Header Field » (révision 07, expirée)', 'url' => 'https://datatracker.ietf.org/doc/draft-ietf-httpapi-idempotency-key-header/', 'date' => '2026-10-05'],
        ['titre' => 'OpenAPI Initiative, OpenAPI Specification 3.2.1 (10 septembre 2026)', 'url' => 'https://spec.openapis.org/oas/latest.html', 'date' => '2026-10-05'],
        ['titre' => 'OWASP, API Security Top 10, édition 2023', 'url' => 'https://api-security.owasp.org/editions/2023/en/0x11-t10', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, notes de version 13.x et politique de support', 'url' => 'https://laravel.com/docs/13.x/releases', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, routage : install:api, liaisons imbriquées et limitation de débit', 'url' => 'https://laravel.com/docs/13.x/routing', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, Sanctum : jetons d\'API, capacités, expiration et tests', 'url' => 'https://laravel.com/docs/13.x/sanctum', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, ressources d\'API Eloquent et ressources JSON:API', 'url' => 'https://laravel.com/docs/13.x/eloquent-resources', 'date' => '2026-10-05'],
        ['titre' => 'Laravel, tests HTTP et tests d\'API JSON', 'url' => 'https://laravel.com/docs/13.x/http-tests', 'date' => '2026-10-05'],
        ['titre' => 'PHP, branches maintenues et calendrier de support', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-05'],
        ['titre' => 'Stoplight, dépôt GitHub de Spectral (versions d\'OpenAPI prises en charge, licence)', 'url' => 'https://github.com/stoplightio/spectral', 'date' => '2026-10-05'],
        ['titre' => 'Scramble, générateur de documentation OpenAPI pour Laravel', 'url' => 'https://scramble.dedoc.co/', 'date' => '2026-10-05'],
        ['titre' => 'Scribe, documentation d\'API pour Laravel', 'url' => 'https://scribe.knuckles.wtf/laravel/', 'date' => '2026-10-05'],
        ['titre' => 'Postman, offres et tarifs', 'url' => 'https://www.postman.com/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Bruno, offres et tarifs', 'url' => 'https://www.usebruno.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Postman, 2025 State of the API Report (page de présentation)', 'url' => 'https://www.postman.com/state-of-api/2025/', 'date' => '2026-10-05'],
        ['titre' => 'Postman, 2025 State of the API Report (rapport complet, PDF)', 'url' => 'https://voyager.postman.com/doc/postman-state-of-the-api-report-2025.pdf', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, dépôt bj-decoupage (API REST du découpage administratif du Bénin)', 'url' => 'https://github.com/Richard6141/bj-decoupage', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, dépôt alloartisan-api (API REST d\'Allo Artisan)', 'url' => 'https://github.com/Richard6141/alloartisan-api', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, API : les recommandations de la CNIL sur le partage de données (24 novembre 2023)', 'url' => 'https://www.cnil.fr/fr/api-les-recommandations-de-la-cnil-sur-le-partage-de-donnees', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, délibération n° 2023-050 du 25 mai 2023 portant adoption d\'une recommandation technique relative à l\'utilisation des API', 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000047740097', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['laravel-php', 'integrations-api-no-code', 'developpement-web', 'vibecoding', 'integrer-ia-logiciels-existants', 'creer-son-saas'],
        'services'    => ['api-rest-integrations', 'application-web-sur-mesure'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
