<?php
// ============================================================
// data/services/api-rest-integrations.php · Pilier « API REST et
// intégrations » (vague 1A). Le slug existe en base : la fiche en
// production (lue le 04/10/2026) donne « Sur devis » et cinq livrables
// (API REST sur mesure, intégration paiement, connexion CRM et ERP,
// webhooks et synchronisation, documentation claire), repris ici. Aucun
// délai dans la fiche de faits ni en production : délais donnés comme
// ordres de grandeur à confirmer au cadrage. Faits externes relevés le
// 04/10/2026 (IETF, OpenAPI Initiative, OWASP, Stripe, FedaPay, KkiaPay,
// CinetPay, Meta, Odoo, Dolibarr, SGG du Bénin, CNIL). Réalisation citée :
// dépôt public bj-decoupage (Laravel, routes GET, mars 2024), sans chiffre
// d'usage. Ne paraphrase ni /comparatifs/fedapay-vs-kkiapay-vs-cinetpay ni
// les piliers WhatsApp, automatisation et application web.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "API REST et intégrations : vos logiciels, vos paiements et vos messageries reliés par un code documenté, sécurisé et fiable",
    'title'   => "API REST et intégrations sur mesure | Richard SALANON",
    'meta'    => "Conception d'API REST documentées en OpenAPI et intégration de vos outils : mobile money, Stripe, WhatsApp, Odoo, Dolibarr, CRM, webhooks fiables.",
    'en_bref' => "Conception et développement d'API REST documentées en OpenAPI, et intégration par le code de vos outils : paiement mobile money et carte (FedaPay, KkiaPay, CinetPay, Stripe), API WhatsApp Business Cloud de Meta, Odoo, Dolibarr, comptabilité, CRM, SMS et e-mails, avec webhooks, reprises automatiques et idempotence. Pour les PME, éditeurs, commerces en ligne, ONG et équipes techniques d'Afrique francophone, d'Europe et du Canada dont les outils ne se parlent pas. En ordre de grandeur, à confirmer au cadrage, comptez une à trois semaines pour un connecteur isolé et trois à huit semaines pour une API métier. Le prix est fixé sur devis.",
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Applications et IA',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '1 à 3 semaines par connecteur, 3 à 8 semaines par API métier, à confirmer au cadrage'],
        ['l' => 'Pour qui', 'v' => 'PME, éditeurs, commerces en ligne et ONG, en Afrique et en Europe'],
        ['l' => 'Livrables', 'v' => 'API sur mesure, paiement, CRM et ERP connectés, webhooks, documentation'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que recouvre une API REST sur mesure, et qu'est-ce qui n'en relève pas ?",
            'paragraphes' => [
                "Une API, ou interface de programmation, est la porte par laquelle un logiciel demande ou envoie des données à un autre, sans écran ni personne au milieu. Le style REST organise cette porte autour de ressources (un client, une commande, une facture) désignées par des adresses et manipulées avec les méthodes du protocole HTTP. La <a href=\"https://www.rfc-editor.org/rfc/rfc9110.html\">RFC 9110 de l'IETF</a>, publiée en juin 2022, fixe le sens de ces méthodes et des codes de statut. S'y conformer permet à n'importe quelle bibliothèque HTTP, en PHP, en JavaScript ou en Python, d'utiliser votre API sans code particulier.",
                "Le service a deux faces. La première consiste à construire une API : vous détenez des données, un catalogue, un stock, des dossiers clients, qu'une application mobile, un partenaire ou un revendeur doit pouvoir lire ou modifier. La seconde consiste à intégrer : vos outils existent déjà, chacun avec sa propre API, et il faut écrire le code qui les relie, traduit les formats, absorbe les pannes et garde la trace de chaque échange. Les deux obéissent aux mêmes règles de conception, de sécurité et de fiabilité, détaillées plus bas.",
                "Certains besoins voisins relèvent d'autres pages. Un enchaînement de tâches entre outils standard, sans règle métier lourde ni gros volume, se monte souvent plus vite avec n8n ou Make : c'est le terrain de l'<a href=\"/services/automatisation-ia\">automatisation</a>, et le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a> aide à choisir l'outil. Un logiciel métier complet, avec ses écrans et ses utilisateurs, relève d'une <a href=\"/services/application-web-sur-mesure\">application web sur mesure</a>, dont l'API n'est qu'une partie. L'ouverture d'un numéro sur la plateforme de Meta et la validation des modèles de messages relèvent de l'<a href=\"/services/integration-whatsapp\">intégration WhatsApp</a>.",
                "La frontière se fixe au cadrage, avec une question simple : faut-il un code qui vous appartient, versionné, testé et documenté, ou un scénario visuel suffit-il ? Le code s'impose dès que l'échange touche de l'argent, des données personnelles en nombre, une règle de calcul propre à votre métier, ou un débit que les plateformes sans code facturent cher. Dans les autres cas, il est plus honnête de proposer la solution la plus légère, quitte à la remplacer par du code le jour où le volume la dépasse.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quels signes voit-on qu'il vous faut une API ou une intégration ?",
            'intro' => "Une demande d'API naît rarement d'un goût pour la technique. Elle part d'une gêne concrète, qui coûte du temps ou de l'argent chaque semaine. Voici les situations qui reviennent le plus souvent dans les demandes.",
            'items' => [
                ['titre' => "La même donnée saisie deux ou trois fois", 'texte' => "Une commande prise sur le site est recopiée dans l'ERP, puis dans le tableur du livreur, puis dans le logiciel comptable. Chaque recopie prend du temps et ajoute une chance de se tromper sur un montant, une adresse ou une quantité."],
                ['titre' => "Des paiements confirmés à la main", 'texte' => "Le client paie par mobile money, envoie une capture d'écran, et quelqu'un vérifie sur le tableau de bord de l'agrégateur avant de valider la commande. Le soir et le dimanche, personne ne vérifie, et les clients attendent."],
                ['titre' => "Une application ou un partenaire qui attend vos données", 'texte' => "Vous lancez une application mobile, un revendeur veut afficher votre stock, un assureur veut consulter l'état de vos dossiers. Sans API, il faut envoyer des fichiers par e-mail, périmés dès leur arrivée."],
                ['titre' => "Des chiffres qui divergent d'un outil à l'autre", 'texte' => "Le CRM affiche un chiffre d'affaires, la comptabilité un autre, le tableau de bord un troisième. Personne ne sait lequel croire, faute d'une source de vérité désignée et d'une synchronisation tracée."],
                ['titre' => "Un connecteur qui casse sans prévenir", 'texte' => "Une extension achetée il y a deux ans ne transmet plus rien depuis une mise à jour, et vous l'apprenez par un client mécontent. Aucun journal ne dit depuis quand, ni combien d'échanges ont été perdus."],
                ['titre' => "Des scénarios sans code devenus trop lourds", 'texte' => "Le scénario n8n ou Make tourne, mais les volumes ont été multipliés, la facture des opérations suit, et la logique est devenue si dense que plus personne n'ose la modifier."],
                ['titre' => "Une exigence d'un client, d'un bailleur ou d'un auditeur", 'texte' => "Un grand compte réclame un échange automatisé des commandes, un bailleur une remontée d'indicateurs, un auditeur la preuve que les accès aux données personnelles sont contrôlés et journalisés."],
                ['titre' => "Les contre-signaux", 'texte' => "Si vous n'échangez que quelques dizaines d'enregistrements par mois, un export et un import réguliers suffisent souvent. Si l'un de vos outils n'offre ni API ni export, il faut d'abord le remplacer, et cela se dit avant de chiffrer."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles règles de conception rendent une API REST simple à utiliser et durable ?",
            'legende' => "Règles appliquées à chaque API livrée ; références de l'IETF, de l'OpenAPI Initiative et de l'OWASP consultées le 4 octobre 2026.",
            'entetes' => ['Sujet', 'Règle retenue', 'Pourquoi', 'Référence'],
            'lignes'  => [
                ['Ressources et adresses', 'Des noms au pluriel, imbriqués seulement quand la relation est réelle : /clients/42/factures', 'Le développeur devine la structure avant même de lire la documentation', 'Usage REST courant'],
                ['Méthodes', 'GET lit, POST crée, PUT remplace, PATCH modifie en partie, DELETE supprime', 'GET, HEAD, OPTIONS et TRACE sont dites sûres ; PUT et DELETE sont idempotentes, POST et PATCH ne le sont pas', 'RFC 9110, section 9.2'],
                ['Codes de statut', '200, 201 et 204 en succès ; 400, 401, 403, 404, 409 et 422 pour une erreur du client ; 500 et 503 côté serveur', 'Les bibliothèques HTTP réagissent aux codes ; un 200 qui cache une erreur trompe tous les clients', 'RFC 9110, section 15'],
                ['Format des erreurs', 'Objet problème au format application/problem+json : type, title, status, detail, instance', 'Un seul schéma d\'erreur à traiter, lisible par un programme comme par une personne', 'RFC 9457, juillet 2023'],
                ['Pagination', 'Par curseur pour les listes longues ou très mouvantes, par numéro de page sinon, toujours avec une taille maximale', 'Une liste complète renvoyée d\'un coup sature le serveur et la connexion mobile du client', 'OWASP, API4:2023'],
                ['Filtres et tri', 'Paramètres explicites et validés : statut, date de dernière modification, tris autorisés', 'Le filtre « modifié depuis » rend possible une synchronisation incrémentale, au lieu de tout recharger', 'Choix de conception'],
                ['Versionnage', 'Version majeure dans le chemin (/v1/), ajouts sans rupture, ancienne version maintenue pendant une période annoncée', 'Une API publiée crée des dépendances : renommer un champ casse les applications connectées', 'OWASP, API9:2023'],
                ['Documentation', 'Description OpenAPI tenue à jour avec le code, avec des exemples réels de requêtes et de réponses', 'Elle sert de contrat, produit une page de test et des clients dans plusieurs langages', 'OpenAPI 3.2.1, septembre 2026'],
                ['Limitation de débit', 'Quotas par clé ou par client ; au-delà, réponse 429 avec un en-tête Retry-After', 'Protège le service d\'un script qui boucle et d\'une facture d\'hébergement imprévue', 'RFC 6585, avril 2012'],
                ['Journalisation', 'Identifiant de corrélation par requête, journaux structurés sans mot de passe ni numéro de carte, durée de conservation fixée', 'Retrouver en quelques minutes ce qui s\'est passé, et prouver qui a consulté quoi', 'Loi n° 2017-20, article 426 ; RGPD, article 32'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi décrire l'API en OpenAPI avant d'écrire le code ?",
            'paragraphes' => [
                "La <a href=\"https://spec.openapis.org/oas/latest.html\">spécification OpenAPI</a>, dont la version 3.2.1 a été publiée le 10 septembre 2026 selon l'OpenAPI Initiative, définit une description standard des API HTTP, indépendante du langage de programmation, rédigée en JSON ou en YAML. Elle décrit chaque chemin, chaque paramètre, chaque schéma de données et chaque mécanisme de sécurité : clé d'API, authentification HTTP par jeton, OAuth 2.0, OpenID Connect ou TLS mutuel. Ses schémas reposent sur JSON Schema, version 2020-12, ce qui permet de valider automatiquement une requête ou une réponse.",
                "Écrire cette description d'abord change la conversation. Vous, votre développeur mobile et votre partenaire lisez le même contrat avant qu'une ligne de code n'existe : noms des champs, format des dates, montants en francs CFA sans décimales, cas d'erreur. Les désaccords se règlent sur un document de quelques pages plutôt que sur une application déjà livrée. Le fichier produit ensuite une page de test interactive, un serveur simulé qui permet à l'équipe mobile d'avancer en parallèle, et des tests qui vérifient que le code respecte toujours le contrat.",
                "Le contrat protège aussi la suite. Quand une nouvelle version se prépare, la comparaison automatique de deux descriptions signale les ruptures : champ supprimé, type modifié, paramètre devenu obligatoire. Le jour où un autre prestataire reprend le projet, il trouve la liste exacte de ce qui est exposé, ce que l'OWASP range sous la gestion de l'inventaire des API. Une API non documentée n'est donc pas seulement pénible à utiliser : c'est une API dont plus personne ne sait quelles routes restent ouvertes, ni pour qui.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles failles menacent une API, selon l'OWASP API Security Top 10 de 2023 ?",
            'legende' => "Les dix risques de l'édition 2023 du Top 10 de la sécurité des API publié par l'OWASP, consulté le 4 octobre 2026, avec la parade appliquée dans chaque projet.",
            'entetes' => ['Risque OWASP 2023', 'Ce que cela veut dire', 'Parade appliquée'],
            'lignes'  => [
                ['API1, autorisation défaillante au niveau de l\'objet', 'Changer l\'identifiant dans l\'adresse, /factures/1043 au lieu de 1042, ouvre le dossier d\'un autre client', 'Vérifier à chaque requête que l\'objet appartient à l\'appelant ; identifiants non séquentiels quand c\'est utile'],
                ['API2, authentification défaillante', 'Jetons devinables, sans expiration, ou transmis en clair', 'Jetons courts et signés, HTTPS partout, tentatives de connexion limitées'],
                ['API3, autorisation défaillante au niveau des propriétés', 'La réponse livre des champs que l\'appelant n\'a pas à voir, ou le laisse modifier un champ protégé comme un solde', 'Liste explicite des champs lisibles et modifiables, rôle par rôle'],
                ['API4, consommation de ressources sans limite', 'Une requête qui réclame un million de lignes, ou un script qui appelle l\'API en boucle', 'Pagination plafonnée, quotas, taille maximale des requêtes et des fichiers'],
                ['API5, autorisation défaillante au niveau des fonctions', 'Un simple utilisateur atteint une route d\'administration en devinant son adresse', 'Droits par rôle contrôlés côté serveur sur chaque route, refus par défaut'],
                ['API6, accès sans limite à des flux métier sensibles', 'Des robots réservent tous les créneaux, ou raflent le stock d\'une promotion', 'Limites propres au flux : par client, par numéro de téléphone, par période'],
                ['API7, falsification de requête côté serveur', 'L\'API va chercher une adresse fournie par l\'utilisateur et sert de relais vers le réseau interne', 'Liste fermée des domaines appelés, aucune adresse interne joignable'],
                ['API8, mauvaise configuration de sécurité', 'Mode de débogage resté actif, CORS ouvert à tous, messages d\'erreur qui dévoilent la base', 'Configuration de production relue avant la mise en ligne, en-têtes de sécurité, erreurs neutres'],
                ['API9, inventaire des API mal tenu', 'Une ancienne version oubliée reste en ligne, sans les correctifs de la nouvelle', 'Description OpenAPI à jour, versions recensées, dates de retrait annoncées'],
                ['API10, consommation non sûre d\'API tierces', 'Les réponses d\'un partenaire ou d\'un agrégateur sont crues sans contrôle', 'Données reçues validées, signatures des webhooks vérifiées, délais d\'attente bornés'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Clé d'API, jeton de session ou OAuth 2.0 : quelle authentification pour quel usage ?",
            'options'  => ['Clé d\'API', 'Jeton de session ou JWT', 'OAuth 2.0, identifiants du client', 'OAuth 2.0, code d\'autorisation'],
            'criteres' => [
                ['critere' => 'Usage typique', 'valeurs' => ['Échange de serveur à serveur entre deux systèmes de confiance', 'Application web ou mobile utilisée par vos propres clients', 'Partenaire ou service qui accède à vos données pour son propre compte', 'Application tierce qui agit au nom de l\'un de vos utilisateurs']],
                ['critere' => 'Qui détient le secret', 'valeurs' => ['Le serveur appelant, jamais un navigateur ni une application mobile', 'L\'utilisateur connecté, pour une durée courte', 'Le serveur du partenaire, client dit confidentiel', 'Le serveur de l\'application tierce, avec l\'accord de l\'utilisateur']],
                ['critere' => 'Durée de validité', 'valeurs' => ['Longue, d\'où une rotation planifiée', 'Courte, prolongée par un jeton d\'actualisation', 'Courte, redemandée au serveur d\'autorisation', 'Courte, avec jeton d\'actualisation facultatif']],
                ['critere' => 'Révocation', 'valeurs' => ['Supprimer la clé', 'Fermer la session ou attendre l\'expiration', 'Révoquer le client ou ses jetons', 'L\'utilisateur retire son accord']],
                ['critere' => 'Exemple réel', 'valeurs' => ['En-tête DOLAPIKEY de Dolibarr ; clé d\'API Odoo transmise en jeton bearer', 'Connexion à un espace client', 'Partenaire qui synchronise ses commandes chaque nuit', 'Logiciel comptable autorisé à lire vos factures']],
                ['critere' => 'Complexité', 'valeurs' => ['Faible', 'Moyenne', 'Moyenne, serveur d\'autorisation à prévoir', 'Élevée : écrans de consentement, redirections']],
            ],
            'verdict'  => "La <a href=\"https://www.rfc-editor.org/rfc/rfc6749.html\">RFC 6749</a>, publiée par l'IETF en octobre 2012, définit quatre types d'autorisation pour OAuth 2.0 ; le flux par identifiants du client y est réservé aux clients confidentiels, et TLS est obligatoire sur le point d'obtention des jetons. Pour relier deux de vos propres serveurs, une clé d'API bien gardée et renouvelée suffit souvent. OAuth 2.0 se justifie dès qu'un tiers accède aux données de vos utilisateurs.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment un échange reste-t-il fiable quand le réseau ou un service tiers tombe ?",
            'paragraphes' => [
                "Un échange entre deux logiciels échoue tôt ou tard : coupure de connexion, serveur du partenaire saturé, délai dépassé. La question n'est pas de l'éviter mais de savoir ce qui se passe ensuite. La RFC 9110 pose la base : une méthode est idempotente quand plusieurs requêtes identiques laissent le serveur dans le même état qu'une seule. Un GET, un PUT ou un DELETE peuvent donc être rejoués sans danger. Un POST qui crée une commande ou déclenche un paiement, non : le rejouer à l'aveugle peut créer deux commandes, ou débiter deux fois.",
                "La parade s'appelle la clé d'idempotence. Selon la <a href=\"https://docs.stripe.com/api/idempotent_requests\">documentation de Stripe</a> consultée le 4 octobre 2026, le client joint à sa requête un en-tête Idempotency-Key, chaîne aléatoire de 255 caractères au plus ; Stripe conserve le code et la réponse de la première requête, renvoie le même résultat aux suivantes, refuse une clé réutilisée avec d'autres paramètres, et peut effacer les clés après au moins 24 heures. Les API livrées appliquent ce principe sur leurs routes de création, et les intégrations l'utilisent chez chaque partenaire qui le propose.",
                "Les reprises suivent des règles. On ne relance que ce qui peut l'être : erreur réseau, délai dépassé, code 429 ou 503. Un code 400 ou 422 signale une requête fausse, qu'aucune répétition ne corrigera. Les tentatives s'espacent de plus en plus, avec une part de hasard pour éviter que mille clients reviennent à la même seconde, et respectent l'en-tête Retry-After quand le serveur l'envoie, ce que la <a href=\"https://www.rfc-editor.org/rfc/rfc6585.html\">RFC 6585</a> d'avril 2012 prévoit avec le code 429. Au-delà d'un nombre fixé, l'échange rejoint une file des échecs, visible et rejouable.",
                "Les files d'attente font le reste. Plutôt que d'appeler le logiciel comptable pendant que le client attend sa confirmation, l'application enregistre une tâche et répond tout de suite ; un processus séparé traite les tâches une à une, et les garde tant que le service distant reste indisponible. Avec Laravel, ce sont les files de tâches adossées à la base de données ou à Redis ; avec Node.js, des bibliothèques équivalentes. Pour une boutique de Cotonou dont la connexion tombe en pleine journée, c'est la différence entre une commande retardée de dix minutes et une commande perdue.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un webhook ne doit-il jamais valider une commande à lui seul ?",
            'texte' => "Un webhook est un appel qu'un service tiers envoie à votre serveur, sur une adresse publique que n'importe qui peut viser. Meta signe les siens avec l'en-tête X-Hub-Signature-256 et les relance pendant 36 heures ; Stripe horodate sa signature et ses bibliothèques refusent par défaut un écart de plus de 5 minutes, contre le rejeu ; le SDK PHP de CinetPay rappelle qu'un webhook n'est qu'un signal invitant à vérifier la transaction. La règle vaut partout : vérifier la signature, répondre vite par un code 2xx, relire le statut réel par l'API, noter l'événement comme traité, puis seulement livrer.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils relier, et par quelle porte technique ?",
            'legende' => "Interfaces relevées dans les documentations officielles le 4 octobre 2026 ; le choix entre agrégateurs de paiement est détaillé dans le comparatif dédié.",
            'entetes' => ['Outil', 'Porte d\'entrée', 'Authentification', 'Point d\'attention'],
            'lignes'  => [
                ['FedaPay', 'API REST, bibliothèques officielles (PHP, Node.js et d\'autres), webhooks', 'Clé secrète côté serveur, clé publique côté navigateur ; clés de test et de production séparées', 'Signature X-FEDAPAY-SIGNATURE ; webhook désactivé après 10 échecs'],
                ['KkiaPay', 'Widget et SDK JavaScript côté client, SDK serveur pour vérifier la transaction, webhooks', 'Clés d\'API du tableau de bord ; secret de webhook choisi par le marchand', 'En-tête x-kkiapay-secret ; 5 tentatives seulement sans réponse 2xx'],
                ['CinetPay', 'API de paiement, SDK officiels en PHP, JavaScript et Python, adresse de notification', 'Identifiants du compte marchand ; jeton notify_token', 'Réponse HTTP 200 attendue en moins de 10 secondes ; statut à relire par l\'API'],
                ['Stripe', 'API REST, bibliothèques officielles, webhooks', 'Clés secrètes ; signature Stripe-Signature sur les webhooks', 'Événements livrés sans ordre garanti, relancés jusqu\'à trois jours en production'],
                ['WhatsApp Business Cloud (Meta)', 'API Graph pour l\'envoi, webhooks pour les messages entrants et les statuts', 'Jeton d\'accès de la plateforme Meta', '80 messages par seconde par numéro par défaut ; signature X-Hub-Signature-256'],
                ['Odoo', 'API externe JSON-2, apparue en version 19.0 : requête POST sur /json/2/, suivie du modèle et de la méthode', 'Clé d\'API transmise en jeton bearer ; trois mois de validité au plus', 'Sur Odoo Online, accès externe réservé aux plans Personnalisé ; XML-RPC et JSON-RPC dépréciées'],
                ['Dolibarr', 'Module API REST, adresses en /api/index.php/, explorateur Swagger intégré', 'En-tête DOLAPIKEY, clé d\'un utilisateur dédié', 'Un utilisateur par intégration, avec les seuls droits nécessaires'],
                ['Comptabilité et CRM', 'API REST de l\'éditeur, ou import de fichiers quand l\'API manque', 'Clé d\'API ou OAuth 2.0 selon l\'éditeur', 'Désigner, donnée par donnée, l\'outil qui fait foi'],
                ['SMS et e-mails transactionnels', 'API REST d\'un fournisseur d\'envoi, webhooks de remise', 'Clé d\'API', 'Suivre les rejets, les numéros invalides et les désinscriptions'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Paiement, WhatsApp, Odoo, Dolibarr : que faut-il savoir avant de brancher chaque outil ?",
            'paragraphes' => [
                "Côté paiement, les trois agrégateurs ouest-africains se ressemblent dans le principe : une page ou un widget de paiement, une validation par le client sur son téléphone, puis une notification à votre serveur. Selon la <a href=\"https://docs.fedapay.com/fr/integration-api/webhooks\">documentation des webhooks de FedaPay</a>, consultée le 4 octobre 2026, une notification sans réponse est retentée jusqu'à 9 fois à intervalles exponentiels, et le webhook est désactivé après 10 échecs. La <a href=\"https://docs.kkiapay.me/v1/tableau-de-bord/webhook\">documentation de KkiaPay</a> annonce 5 tentatives à intervalle croissant. Frais, pays et délais de versement sont comparés dans le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, KkiaPay et CinetPay</a>.",
                "FedaPay sépare aussi ses environnements : selon sa <a href=\"https://docs.fedapay.com/fr/integration-api/authentication\">page d'authentification</a>, les objets créés en mode test sont totalement distincts de ceux du mode live, et la clé secrète, qui donne accès à toutes les fonctions de l'API, ne doit jamais figurer dans un système de gestion de versions. Concrètement, la clé vit dans une variable d'environnement du serveur, chaque environnement a la sienne, et une clé exposée par erreur se régénère immédiatement. Stripe, utile pour les clients européens ou canadiens qui paient par carte, suit la même logique de clés séparées.",
                "Pour WhatsApp, la <a href=\"https://developers.facebook.com/docs/whatsapp/cloud-api/overview\">vue d'ensemble de l'API Cloud de Meta</a>, consultée le 4 octobre 2026, fixe le débit par défaut à 80 messages par seconde par numéro, et limite les envois répétés vers un même destinataire. Le code d'intégration doit donc réguler ses envois au lieu de tout lancer d'un coup après une campagne. Côté réception, la <a href=\"https://developers.facebook.com/docs/graph-api/webhooks/getting-started\">documentation des webhooks de Meta</a> exige un HTTPS avec un certificat valide, refuse les certificats autosignés, et supprime les notifications non acquittées au bout de 36 heures.",
                "Pour les ERP, deux points comptent. La <a href=\"https://www.odoo.com/documentation/20.0/developer/reference/external_api.html\">documentation de l'API externe d'Odoo 20.0</a> indique qu'une clé d'API ne peut pas durer plus de trois mois : une intégration qui tourne seule doit donc prévoir la rotation de sa clé, sinon elle s'arrête au bout d'un trimestre. Elle annonce aussi le retrait des services XML-RPC et JSON-RPC avec Odoo 22, à l'automne 2028. Le <a href=\"https://wiki.dolibarr.org/index.php/Module_Web_Services_API_REST_(developer)\">wiki de Dolibarr</a> décrit un module API REST authentifié par l'en-tête DOLAPIKEY, avec un explorateur Swagger intégré ; le paramétrage de chaque ERP relève de l'<a href=\"/services/integration-odoo\">intégration Odoo</a> ou de l'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a>.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule un projet d'API ou d'intégration, du cadrage au suivi ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez les outils à relier, les volumes, ce qui coince aujourd\'hui. Un échange à Cotonou ou en visioconférence permet de dire si une API sur mesure se justifie, ou si un export régulier ou un scénario n8n suffit.'],
                ['titre' => 'Inventaire des systèmes', 'duree' => 'Quelques jours', 'texte' => 'Pour chaque outil : API disponible ou non, documentation, plan d\'abonnement requis, quotas, environnement de test, compte marchand ouvert ou à ouvrir. Le vrai délai apparaît souvent ici : un compte d\'agrégateur à faire valider, un plan Odoo à changer.'],
                ['titre' => 'Contrat d\'interface', 'duree' => '1 à 2 semaines, ordre de grandeur', 'texte' => 'Description OpenAPI des routes, des schémas, des codes d\'erreur et de l\'authentification ; pour une intégration, table de correspondance des champs et outil qui fait foi pour chaque donnée. Le document est validé par écrit avant tout développement.'],
                ['titre' => 'Développement par lots', 'duree' => '1 à 6 semaines selon le périmètre, à confirmer', 'texte' => 'Une ressource ou un connecteur à la fois, sur un serveur de recette, avec les clés de test des partenaires. Chaque lot arrive avec ses tests automatisés et sa documentation mise à jour.'],
                ['titre' => 'Tests de panne', 'duree' => 'Quelques jours', 'texte' => 'On provoque volontairement les incidents : réseau coupé, partenaire qui répond 503, webhook reçu deux fois, paiement abandonné, jeton expiré. Chaque scénario doit finir dans un état connu, jamais sur une commande à moitié créée.'],
                ['titre' => 'Revue de sécurité', 'duree' => '1 à 3 jours', 'texte' => 'Relecture au regard des dix risques de l\'OWASP, configuration de production, rotation des clés, journaux sans donnée sensible, règles CORS et quotas. Les secrets quittent le code pour des variables d\'environnement ou un coffre dédié.'],
                ['titre' => 'Mise en production', 'duree' => 'Un jour, à une heure creuse', 'texte' => 'Clés de production, adresses de webhooks déclarées chez chaque partenaire, premiers échanges suivis en direct, et procédure de retour arrière prête si un indicateur dérape.'],
                ['titre' => 'Suivi et évolutions', 'duree' => 'En continu', 'texte' => 'Alertes sur les taux d\'échec, file des échecs relue, veille sur les versions et dépréciations annoncées par les partenaires, dans le cadre de la <a href="/services/maintenance-support">maintenance et du support</a>.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que vous remet-on à la fin d'un projet d'API ou d'intégration ?",
            'legende' => "Les cinq livrables de la fiche de service, détaillés, et deux compléments ; leur liste exacte figure dans le devis.",
            'entetes' => ['Livrable', 'Contenu', 'Utilité pour vous'],
            'lignes'  => [
                ['API REST sur mesure', 'Code source dans un dépôt Git à votre nom, routes versionnées, tests automatisés, environnement de recette', 'Faire évoluer l\'API, ou confier la suite à un autre développeur'],
                ['Intégration du paiement', 'Paiement mobile money ou carte, webhooks vérifiés, rapprochement de chaque paiement avec sa commande ou sa facture', 'Plus aucune validation manuelle sur capture d\'écran'],
                ['Connexion CRM et ERP', 'Connecteurs vers Odoo, Dolibarr, un CRM ou un logiciel comptable, table de correspondance des champs', 'Une saisie unique, reprise partout où elle sert'],
                ['Webhooks et synchronisation', 'Réception signée, file d\'attente, reprises, file des échecs rejouable, synchronisation incrémentale', 'Aucun échange perdu en silence'],
                ['Documentation claire', 'Description OpenAPI, page de test, exemples, guide d\'exploitation : rotation des clés, lecture des journaux, rejeu d\'un échec', 'Comprendre et administrer sans dépendre du prestataire'],
                ['Accès et secrets', 'Comptes chez les partenaires ouverts au nom de votre entreprise, clé dédiée par intégration, inventaire des secrets', 'Révoquer ou renouveler un accès en quelques minutes'],
                ['Tableau de suivi', 'Volume d\'échanges, taux d\'échec, alertes par e-mail ou par WhatsApp', 'Voir un incident avant vos clients'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles technologies sont retenues, et pour quelles raisons ?",
            'legende' => "Technologies pratiquées par Richard SALANON ; le choix final dépend de votre existant et de l'équipe qui maintiendra le code.",
            'entetes' => ['Brique', 'Choix', 'Pourquoi', 'Quand en changer'],
            'lignes'  => [
                ['Serveur', 'PHP avec Laravel', 'Routage, validation, files de tâches, jetons d\'accès et limitation de débit fournis par le cadre ; hébergement PHP disponible partout', 'Rarement : c\'est le choix par défaut pour une API métier'],
                ['Alternative JavaScript', 'Node.js, avec NestJS ou Express', 'Quand votre équipe travaille déjà en JavaScript, ou quand l\'API garde beaucoup de connexions ouvertes', 'Si personne ne pourra maintenir du JavaScript côté serveur'],
                ['Python', 'Flask', 'Petite API autour d\'un traitement de données ou d\'un modèle d\'IA', 'Dès que l\'API dépasse quelques routes'],
                ['Base de données', 'MySQL ou MariaDB, PostgreSQL', 'Bases libres, connues de tous les hébergeurs ; PostgreSQL pour les requêtes plus riches', 'Selon l\'existant'],
                ['Files et cache', 'Files de tâches Laravel sur la base ou sur Redis', 'Réponses rapides, reprises, absorption des pics', 'Redis dès que le volume monte'],
                ['Contrat', 'OpenAPI, page de test générée', 'Documentation, serveur simulé et tests tirés du même fichier', 'Jamais : c\'est la référence'],
                ['Orchestration légère', 'n8n ou Make, branchés sur l\'API', 'Laisser l\'équipe modifier un enchaînement simple sans développeur', 'Quand le scénario porte une règle métier critique'],
                ['Clients de l\'API', 'Vue ou React pour le web, Flutter pour le mobile', 'Le site, l\'application et les partenaires partagent une seule logique métier', 'Selon les compétences de l\'équipe'],
                ['Hébergement', 'Serveur privé virtuel ou hébergement géré, HTTPS obligatoire', 'Certificat valide exigé par Meta et par FedaPay pour leurs webhooks', 'Selon le lieu de stockage exigé pour les données'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble une intégration selon votre secteur, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Commerce en ligne, Bénin', 'probleme' => 'Les paiements MTN et Moov arrivent chez l\'agrégateur, mais les commandes restent « en attente » jusqu\'à ce que quelqu\'un vérifie.', 'solution' => 'Webhook signé déposé dans une file d\'attente, statut relu par l\'API de l\'agrégateur, commande validée, facture créée dans Dolibarr et confirmation envoyée par WhatsApp, chaque étape journalisée avec la référence de commande.'],
                ['secteur' => 'Distribution, Côte d\'Ivoire', 'probleme' => 'Les commerciaux de terrain prennent les commandes sur papier, ressaisies le soir dans Odoo, sur des stocks déjà faux.', 'solution' => 'API intermédiaire entre une application Flutter et Odoo : catalogue et stock lus par l\'API JSON-2, commandes envoyées avec une clé d\'idempotence, et mode hors ligne qui transmet les commandes au retour du réseau.'],
                ['secteur' => 'Microfinance ou assurance, Sénégal', 'probleme' => 'Un partenaire veut suivre l\'état des dossiers et reçoit un fichier Excel chaque semaine.', 'solution' => 'API en lecture seule documentée en OpenAPI, OAuth 2.0 par identifiants du client, chaque dossier filtré selon le partenaire, quotas, et journal des consultations conservé pour l\'audit.'],
                ['secteur' => 'ONG présente dans plusieurs pays', 'probleme' => 'Les indicateurs remontent des terrains par e-mail et par tableur, et le rapport au bailleur prend une semaine.', 'solution' => 'API de collecte avec schéma validé, synchronisation incrémentale depuis les formulaires mobiles, envoi automatique vers la comptabilité analytique et vers le tableau de bord du bailleur.'],
                ['secteur' => 'PME de services, France ou Belgique', 'probleme' => 'Le CRM, l\'outil de devis et le logiciel comptable ne se parlent pas, et chaque facture est ressaisie.', 'solution' => 'Connecteur entre le CRM et la comptabilité par leurs API, devis signé transformé en facture, paiement Stripe rapproché par webhook, et contrat de sous-traitance conforme à l\'article 28 du RGPD.'],
                ['secteur' => 'Éditeur de logiciel, Canada ou Afrique', 'probleme' => 'Le produit doit ouvrir une API à ses clients, sans documentation ni quotas.', 'solution' => 'API publique versionnée, clé par client, limitation de débit avec réponse 429, documentation OpenAPI avec page de test, et inventaire des routes pour ne laisser aucune ancienne version ouverte.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une API ou une intégration, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun forfait n'est publié pour ce service : les seuls tarifs de départ affichés sur ce site concernent la landing page, le site vitrine et le référencement naturel. Une API ou une intégration se chiffre donc sur devis, après l'inventaire des systèmes, lot par lot. Les frais des partenaires (commission de l'agrégateur, messages facturés par Meta, abonnement à un plan d'ERP) restent à votre charge et se paient à eux directement. La prestation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Diagnostic et contrat d\'interface', 'prix' => 'Sur devis', 'inclus' => ['Inventaire des outils, de leurs API et de leurs limites', 'Description OpenAPI ou table de correspondance des champs', 'Choix argumenté de l\'authentification', 'Plan par lots et calendrier']],
                ['offre' => 'Connecteur entre deux outils', 'prix' => 'Sur devis', 'inclus' => ['Paiement, WhatsApp, ERP, CRM, SMS ou e-mail', 'Webhooks vérifiés, reprises et file des échecs', 'Tests de panne avant la mise en production', 'Guide d\'exploitation']],
                ['offre' => 'API métier sur mesure', 'prix' => 'Sur devis', 'inclus' => ['Ressources, versions et documentation OpenAPI', 'Authentification par clé, par jeton ou OAuth 2.0', 'Limitation de débit et journalisation', 'Revue de sécurité selon l\'OWASP']],
                ['offre' => 'Suivi et évolutions', 'prix' => 'Sur devis', 'inclus' => ['Surveillance des taux d\'échec et alertes', 'Rotation planifiée des clés', 'Adaptation aux nouvelles versions des partenaires', 'Nouvelles routes et nouveaux connecteurs']],
            ],
            'variations' => [
                'Le nombre de systèmes à relier, et la qualité de leur documentation.',
                'Le sens des échanges : lecture seule, écriture, ou synchronisation dans les deux sens.',
                'Le volume et la fréquence : quelques échanges par jour, ou des milliers par heure.',
                'L\'authentification exigée : simple clé, jetons d\'utilisateurs, ou OAuth 2.0 avec consentement.',
                'Le niveau de preuve attendu : journal d\'audit, conservation, rapprochement comptable.',
                'La reprise des données existantes et leur nettoyage avant la première synchronisation.',
                'Les délais de validation chez les partenaires : compte marchand, plan d\'ERP, numéro WhatsApp.',
                'Le suivi après la mise en production : ponctuel, ou contrat de maintenance.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs font échouer une API ou une intégration ?",
            'intro' => "Les incidents graves viennent rarement d'un bogue isolé. Ils naissent de décisions prises trop vite au départ, que l'on découvre le jour où un partenaire change ou où le volume grimpe.",
            'items' => [
                ['titre' => 'Faire confiance au statut reçu', 'texte' => 'Valider une commande sur la seule foi d\'un webhook ou d\'une adresse de retour. Une notification peut être falsifiée, rejouée ou arriver avant la fin du paiement : le statut se relit toujours par l\'API.'],
                ['titre' => 'Rejouer un POST sans clé d\'idempotence', 'texte' => 'Après un délai dépassé, le code renvoie la requête de création, et le client se retrouve avec deux commandes ou deux débits. Toute création susceptible d\'être relancée porte une clé unique.'],
                ['titre' => 'Mettre une clé secrète dans le code', 'texte' => 'Clé poussée dans un dépôt Git, glissée dans une application mobile ou dans le JavaScript d\'une page : elle sera trouvée. Les secrets vivent sur le serveur, un par intégration, avec une rotation prévue.'],
                ['titre' => 'Contrôler la connexion mais pas l\'objet', 'texte' => 'L\'utilisateur est bien authentifié, mais personne ne vérifie que la facture demandée lui appartient. C\'est le premier risque du classement de l\'OWASP, et le plus fréquent dans les API métier.'],
                ['titre' => 'Laisser deux outils faire foi sur la même donnée', 'texte' => 'Le prix modifié dans le CRM et dans l\'ERP, le stock corrigé des deux côtés : la synchronisation écrase l\'un ou l\'autre au hasard. Chaque donnée a un seul outil de référence.'],
                ['titre' => 'Renommer un champ en production', 'texte' => 'Un nom de champ plus joli casse l\'application mobile et le partenaire le lendemain. On ajoute, on annonce, on maintient l\'ancienne version, puis on la retire à une date publiée.'],
                ['titre' => 'Ignorer les échecs silencieux', 'texte' => 'Sans journal ni alerte, une intégration peut ne rien transmettre pendant des semaines. Un taux d\'échec suivi chaque jour et une file des échecs relue valent mieux que n\'importe quelle promesse de fiabilité.'],
                ['titre' => 'Oublier les dates d\'expiration', 'texte' => 'Clé Odoo limitée à trois mois, certificat HTTPS arrivé à échéance, ancienne interface retirée par l\'éditeur : chaque échéance connue s\'inscrit au calendrier de maintenance dès la livraison.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères officiels garder en tête avant de lancer le projet ?",
            'items' => [
                ['valeur' => '10 risques', 'libelle' => 'Dans le Top 10 de la sécurité des API de l\'OWASP, édition 2023, consulté le 4 octobre 2026', 'source' => 'OWASP API Security Top 10 2023', 'url' => 'https://api-security.owasp.org/editions/2023/en/0x11-t10'],
                ['valeur' => '255 caractères', 'libelle' => 'Longueur maximale d\'une clé d\'idempotence chez Stripe, clés effaçables après au moins 24 heures', 'source' => 'Stripe, requêtes idempotentes', 'url' => 'https://docs.stripe.com/api/idempotent_requests'],
                ['valeur' => '36 heures', 'libelle' => 'Durée pendant laquelle Meta relance un webhook non acquitté avant de le supprimer', 'source' => 'Meta, premiers pas avec les webhooks', 'url' => 'https://developers.facebook.com/docs/graph-api/webhooks/getting-started'],
                ['valeur' => '80 messages', 'libelle' => 'Débit par défaut, par seconde et par numéro, de l\'API WhatsApp Cloud', 'source' => 'Meta, vue d\'ensemble de l\'API Cloud', 'url' => 'https://developers.facebook.com/docs/whatsapp/cloud-api/overview'],
                ['valeur' => '3 mois', 'libelle' => 'Durée maximale d\'une clé d\'API dans Odoo 20.0, d\'où une rotation trimestrielle', 'source' => 'Documentation Odoo 20.0, API externe', 'url' => 'https://www.odoo.com/documentation/20.0/developer/reference/external_api.html'],
                ['valeur' => '10 secondes', 'libelle' => 'Délai maximal de réponse HTTP 200 attendu par CinetPay sur l\'adresse de notification', 'source' => 'CinetPay, SDK PHP officiel', 'url' => 'https://github.com/cinetpay/cinetpay-php-sdk'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Mobile money, connexion, données personnelles et langue : que change le contexte local ?",
            'paragraphes' => [
                "Le mobile money impose un temps d'attente que la carte ne connaît pas : le client valide le paiement sur son téléphone, parfois une ou deux minutes plus tard, parfois jamais. L'API doit donc gérer un état « en attente » durable, expirer proprement les paiements abandonnés et ne jamais bloquer la page du client pendant ce temps. Les montants en francs CFA se transmettent en entiers, sans décimales, et chaque paiement garde la référence de la commande, le numéro de l'opérateur et l'identifiant de l'agrégateur, pour que la comptabilité retrouve chaque encaissement.",
                "La connexion ensuite. Une application de terrain au Bénin, au Togo ou au Burkina Faso doit supposer que le réseau tombera au mauvais moment. D'où des réponses légères et paginées, une compression des échanges, un enregistrement local des opérations sur le téléphone et un envoi différé avec clé d'idempotence, pour qu'une commande saisie hors réseau ne soit ni perdue ni doublée. Côté serveur, les webhooks exigent un HTTPS avec certificat valide : un serveur au bureau, derrière une connexion grand public sans adresse fixe, convient mal pour les recevoir.",
                "Les données personnelles enfin. L'article 426 de la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> oblige le responsable du traitement et son sous-traitant à protéger les données, notamment lorsque le traitement comporte des transmissions dans un réseau, et cite le chiffrement, la pseudonymisation et des tests réguliers des mesures. L'article 391 subordonne tout transfert vers un État tiers à un niveau de protection équivalent constaté par l'Autorité. Une intégration qui envoie des fichiers clients vers un service hébergé hors du Bénin doit donc être examinée sous cet angle avant d'être branchée.",
                "En Europe, le <a href=\"https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4\">RGPD, présenté par la CNIL</a>, impose un contrat de sous-traitance à l'article 28, des mesures de sécurité adaptées à l'article 32, dont le chiffrement, et à l'article 33 la notification d'une violation à l'autorité si possible dans les 72 heures. Une API qui journalise sans filtre, ou qui renvoie plus de champs que nécessaire, complique chacune de ces obligations. Pour la langue, les messages d'erreur destinés aux utilisateurs se rédigent en français, tandis que les noms de champs suivent une convention unique, souvent en anglais, fixée dès le contrat.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier votre API ou vos intégrations à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il compte plus de 6 ans d'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, pour des organisations au Bénin, en Côte d'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il développe ses propres produits : <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Relier une messagerie, un paiement et un logiciel de gestion fait donc partie de son quotidien de développeur.",
                "Son travail sur les API se vérifie en public. Son compte GitHub contient le <a href=\"https://github.com/Richard6141/bj-decoupage\">dépôt bj-decoupage</a>, une API REST du découpage administratif du Bénin construite avec Laravel et publiée en mars 2024. Ses routes, toutes en lecture, suivent la hiérarchie réelle du pays : la liste des départements, les communes d'un département, les arrondissements d'une commune, puis les quartiers. N'importe quel développeur peut lire ce code avant de vous le confier, ce qui vaut mieux qu'une promesse ; son parcours complet figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>.",
                "Sa méthode tient en engagements vérifiables : un contrat d'interface validé avant le code, des lots livrés avec leurs tests, des tests de panne avant la mise en production, des comptes, des clés et un dépôt Git à votre nom, une documentation remise à chaque lot, et une réponse sous 24 heures. Il a formé plus de 200 personnes au numérique ; si votre équipe veut reprendre la main sur le code, la <a href=\"/formation-developpement-web\">formation au développement web</a> couvre la consommation et la création d'API.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de faire communiquer vos logiciels ?",
            'texte' => "Écrivez le contrat avant le code, désignez un seul outil de référence par donnée, relisez toujours le statut d'un paiement par l'API, donnez une clé d'idempotence à chaque création, gardez les secrets hors du code et à votre nom, et surveillez les échecs chaque jour plutôt que de les découvrir par vos clients.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vous voulez que vos outils échangent enfin leurs données sans ressaisie ?",
            'texte'  => "Listez les logiciels à relier, les paiements à encaisser, les volumes et vos contraintes (mobile money, WhatsApp, Odoo, Dolibarr, données personnelles) : vous recevez une réponse sous 24 heures et, après l'inventaire des systèmes, un plan par lots avec un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet d\'intégration'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre une API et une intégration ?", 'r' => "Une API est la porte qu'un logiciel ouvre aux autres pour lire ou modifier ses données. Une intégration est le code qui relie deux ou plusieurs logiciels par leurs API, traduit les formats et gère les pannes. Le service couvre les deux : construire votre propre API, ou relier vos outils existants entre eux."],
        ['q' => "Combien de temps faut-il pour développer une API ou un connecteur ?", 'r' => "En ordre de grandeur, à confirmer au cadrage : une à trois semaines pour un connecteur entre deux outils bien documentés, trois à huit semaines pour une API métier, selon le nombre de ressources et la complexité des règles. Le délai dépend souvent des partenaires : validation d'un compte marchand, d'un numéro WhatsApp ou d'un changement de plan d'ERP."],
        ['q' => "Combien coûte une API REST sur mesure ?", 'r' => "Le prix est fixé sur devis, après l'inventaire des systèmes. Il dépend du nombre d'outils à relier, du sens des échanges, du volume, de l'authentification exigée et du suivi souhaité. Les frais des partenaires, commissions de paiement ou messages WhatsApp facturés par Meta, se paient à part, directement à eux."],
        ['q' => "Pouvez-vous connecter des logiciels que nous utilisons déjà ?", 'r' => "Oui, dès que chacun propose une API ou, à défaut, un export de fichiers exploitable. L'inventaire vérifie ce point outil par outil, avec le plan d'abonnement requis : sur Odoo Online, par exemple, l'accès externe est réservé aux plans Personnalisé. Si un outil n'offre aucune porte d'entrée, mieux vaut le savoir avant de chiffrer."],
        ['q' => "Comment encaisser par mobile money sans perdre de paiements ?", 'r' => "En traitant chaque notification de l'agrégateur comme un signal : signature vérifiée, réponse immédiate, statut relu par l'API, événement noté comme traité, puis commande validée. Une file d'attente absorbe les pics et les coupures. Le choix entre FedaPay, KkiaPay et CinetPay se fait avec le comparatif publié sur ce site."],
        ['q' => "Intégration ou automatisation avec n8n et Make : que choisir ?", 'r' => "L'intégration fait communiquer les outils par du code qui vous appartient ; l'automatisation enchaîne des actions avec une plateforme visuelle. Pour un flux simple et un volume modeste, n8n ou Make suffit souvent. Le code s'impose quand l'échange touche de l'argent, des données personnelles en nombre ou une règle métier critique."],
        ['q' => "Comment sécurisez-vous une API ?", 'r' => "HTTPS partout, authentification adaptée à l'usage (clé, jeton ou OAuth 2.0), contrôle à chaque requête que l'objet demandé appartient à l'appelant, liste explicite des champs exposés, quotas avec réponse 429, journaux sans donnée sensible, et revue au regard des dix risques du Top 10 de l'OWASP de 2023 avant la mise en ligne."],
        ['q' => "Que se passe-t-il quand un service tiers est en panne ?", 'r' => "Les échanges sont mis en file d'attente au lieu d'être perdus, relancés à intervalles croissants en respectant l'en-tête Retry-After, et protégés par une clé d'idempotence pour éviter les doublons. Après un nombre fixé d'échecs, ils rejoignent une file des échecs, visible et rejouable, et une alerte prévient votre équipe."],
        ['q' => "Fournissez-vous une documentation de l'API ?", 'r' => "Oui. Chaque API est livrée avec une description OpenAPI tenue à jour, une page de test interactive, des exemples réels de requêtes et de réponses, et un guide d'exploitation : rotation des clés, lecture des journaux, rejeu d'un échec. Un autre développeur doit pouvoir reprendre le projet sans vous appeler."],
        ['q' => "À qui appartiennent le code et les accès ?", 'r' => "À votre entreprise. Le dépôt Git, les comptes chez les agrégateurs, chez Meta ou chez l'éditeur de l'ERP, les clés et l'hébergement sont ouverts à votre nom, avec une clé dédiée par intégration. Vous pouvez ainsi révoquer un accès, changer de prestataire ou internaliser la maintenance quand vous le souhaitez."],
        ['q' => "Intervenez-vous hors du Bénin ?", 'r' => "Oui. Richard SALANON a travaillé dans onze pays d'Afrique francophone ainsi qu'en France, en Belgique, en Suisse et au Canada. Le cadrage se fait sur place à Cotonou ou en visioconférence, le développement à distance. Les clients hors d'Afrique règlent par carte bancaire, PayPal ou virement."],
    ],

    'sources' => [
        ['titre' => 'IETF, RFC 9110 « HTTP Semantics » (juin 2022) : méthodes sûres et idempotentes, codes de statut, Retry-After', 'url' => 'https://www.rfc-editor.org/rfc/rfc9110.html', 'date' => '2026-10-04'],
        ['titre' => 'IETF, RFC 6585 « Additional HTTP Status Codes » (avril 2012) : code 429', 'url' => 'https://www.rfc-editor.org/rfc/rfc6585.html', 'date' => '2026-10-04'],
        ['titre' => 'IETF, RFC 9457 « Problem Details for HTTP APIs » (juillet 2023)', 'url' => 'https://www.rfc-editor.org/rfc/rfc9457.html', 'date' => '2026-10-04'],
        ['titre' => 'IETF, RFC 6749 « The OAuth 2.0 Authorization Framework » (octobre 2012)', 'url' => 'https://www.rfc-editor.org/rfc/rfc6749.html', 'date' => '2026-10-04'],
        ['titre' => 'OpenAPI Initiative, OpenAPI Specification 3.2.1 (10 septembre 2026)', 'url' => 'https://spec.openapis.org/oas/latest.html', 'date' => '2026-10-04'],
        ['titre' => 'OWASP, API Security Top 10, édition 2023', 'url' => 'https://api-security.owasp.org/editions/2023/en/0x11-t10', 'date' => '2026-10-04'],
        ['titre' => 'Stripe, documentation : requêtes idempotentes', 'url' => 'https://docs.stripe.com/api/idempotent_requests', 'date' => '2026-10-04'],
        ['titre' => 'Stripe, documentation : webhooks (signature, rejeu, nouvelles tentatives, ordre des événements)', 'url' => 'https://docs.stripe.com/webhooks', 'date' => '2026-10-04'],
        ['titre' => 'FedaPay, documentation : webhooks et événements', 'url' => 'https://docs.fedapay.com/fr/integration-api/webhooks', 'date' => '2026-10-04'],
        ['titre' => 'FedaPay, documentation : authentification et clés d\'API', 'url' => 'https://docs.fedapay.com/fr/integration-api/authentication', 'date' => '2026-10-04'],
        ['titre' => 'KkiaPay, documentation : webhook', 'url' => 'https://docs.kkiapay.me/v1/tableau-de-bord/webhook', 'date' => '2026-10-04'],
        ['titre' => 'CinetPay, SDK PHP officiel (notifications, vérification, dédoublonnage)', 'url' => 'https://github.com/cinetpay/cinetpay-php-sdk', 'date' => '2026-10-04'],
        ['titre' => 'Meta, vue d\'ensemble de l\'API WhatsApp Cloud (débit, limites, authentification)', 'url' => 'https://developers.facebook.com/docs/whatsapp/cloud-api/overview', 'date' => '2026-10-04'],
        ['titre' => 'Meta, premiers pas avec les webhooks (vérification, X-Hub-Signature-256, nouvelles tentatives)', 'url' => 'https://developers.facebook.com/docs/graph-api/webhooks/getting-started', 'date' => '2026-10-04'],
        ['titre' => 'Documentation Odoo 20.0, API externe JSON-2 (clés d\'API, dépréciation de XML-RPC et JSON-RPC)', 'url' => 'https://www.odoo.com/documentation/20.0/developer/reference/external_api.html', 'date' => '2026-10-04'],
        ['titre' => 'Wiki Dolibarr, module Web Services API REST (développeur)', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Web_Services_API_REST_(developer)', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD chapitre IV (articles 28, 32 et 33)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-04'],
        ['titre' => 'GitHub, dépôt de l\'API REST du découpage administratif du Bénin (bj-decoupage)', 'url' => 'https://github.com/Richard6141/bj-decoupage', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'automatisation-ia', 'integration-whatsapp', 'integration-odoo', 'integration-dolibarr', 'saas-espace-client'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'n8n-vs-make-vs-zapier', 'odoo-vs-dolibarr'],
    ],

];
