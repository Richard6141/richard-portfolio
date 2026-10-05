<?php
// ============================================================
// data/formations/integrations-api-no-code.php · Fiche formation
// « Intégrations API en no-code et low-code » (vague 1B, lot B). Angle
// propre : un profil non développeur lit une documentation d'API,
// s'authentifie (clé, OAuth), envoie une requête, reçoit un webhook, gère
// limites de débit et erreurs dans n8n, Make ou Zapier, sans écrire de code.
// Sœurs à ne pas traiter : n8n, n8n-avance, make (bases et exploitation des
// outils), chatbot-whatsapp (modèles, coûts et robot WhatsApp), api-rest
// (concevoir une API, pour développeurs). Aucune ancienne page. Documentations
// lues le 05/10/2026 : FedaPay (fichiers .md officiels), Odoo 20.0 (API
// JSON-2), Google Sheets (limites, périmètres, values.append), Google OAuth,
// Meta (versions de la Graph API, message texte, codes d'erreur), n8n (HTTP
// Request, Webhook, identifiants Odoo), Make (application HTTP, webhooks),
// Zapier (webhooks, API by Zapier, API Request, tarifs), RFC 6585 et 6749.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Intégrations API en no-code et low-code : lire une documentation, s'authentifier, envoyer des requêtes et recevoir des webhooks dans n8n, Make ou Zapier, sans écrire de code",
    'title'   => 'Formation intégrations API sans coder | Richard SALANON',
    'meta'    => 'Formation API sans code : lire une documentation, clé ou OAuth, requêtes, webhooks, limites et erreurs dans n8n, Make ou Zapier, avec FedaPay et Odoo.',
    'en_bref' => "Cette formation apprend à des profils non développeurs à brancher n8n, Make ou Zapier sur une API qui n'a pas de connecteur prêt à l'emploi : lire la documentation, s'authentifier par clé ou par OAuth, envoyer une requête, recevoir un webhook, puis gérer les limites de débit et les erreurs. Les exercices portent sur des API réelles, FedaPay, Google Sheets, la plateforme WhatsApp de Meta et Odoo, toujours en mode test. Elle s'adresse aux personnes qui ont déjà construit au moins un flux et butent sur un logiciel sans connecteur. Elle dure deux jours en quatre demi-journées, en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'automatisation',
    'forte'   => false,
    'duree'   => "2 jours (4 demi-journées), ou atelier d'une demi-journée sur une seule API",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : lire une documentation d'API comme une notice de montage",
            'duree'  => '3 h 30',
            'points' => [
                "Le vocabulaire minimal : adresse de base, point d'accès (endpoint), méthode, en-têtes, paramètres, corps JSON, code de réponse.",
                "Repérer les rubriques qui comptent : authentification, environnement de test, erreurs, limites, webhooks, journal des versions.",
                "Lire la page « Créer une transaction » de FedaPay : champs obligatoires, exemple de requête, réponses possibles.",
                "Trouver la version dans l'adresse d'une API de Meta, et la date jusqu'à laquelle cette version reste servie.",
                "Exercice : remplir la fiche d'identité d'une API que l'entreprise utilise réellement.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : s'authentifier sans exposer ses secrets",
            'duree'  => '3 h 30',
            'points' => [
                "La clé d'API dans l'en-tête Authorization : le cas FedaPay, avec ses clés de test et ses clés live.",
                "La clé à durée limitée portée par un utilisateur technique : le cas de l'API JSON-2 d'Odoo.",
                "OAuth 2.0 sans jargon avec Google Sheets : écran de consentement, périmètres, jeton d'accès, jeton de rafraîchissement.",
                "Ranger le secret au bon endroit : identifiants de n8n, trousseau de Make, connexion d'API by Zapier.",
                "Exercice : première requête authentifiée en lecture, puis lecture de la réponse JSON champ par champ.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : envoyer des requêtes qui écrivent, sans doublon ni donnée faussée",
            'duree'  => '3 h 30',
            'points' => [
                "Importer l'exemple cURL d'une documentation dans le nœud HTTP Request de n8n, puis le régler champ par champ.",
                "Créer une transaction FedaPay en mode test, avec le moyen de paiement fictif prévu par la documentation.",
                "Ajouter des lignes à un Google Sheets par l'API, en choisissant entre valeurs brutes et valeurs interprétées.",
                "Lire des contacts dans Odoo avec search_read, puis récupérer une longue liste page par page.",
                "Exercice : provoquer puis corriger des erreurs 400, 401, 404 et 422 à partir du seul message renvoyé.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : recevoir des webhooks, encaisser les limites et passer en production",
            'duree'  => '3 h 30',
            'points' => [
                "Adresse de test et adresse de production d'un webhook : ce qui change au moment de publier.",
                "Recevoir la notification d'un paiement FedaPay, ne garder que les événements utiles, relire le statut réel.",
                "Reconnaître une limite de débit (code 429), espacer les tentatives, regrouper les écritures.",
                "Écarter les doublons quand un service renvoie plusieurs fois le même événement.",
                "Rédiger la fiche de l'intégration : secrets, échéance des clés, limites connues, personne à prévenir.",
                "Évaluation : brancher seul une API inconnue à partir de sa seule documentation.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, ou atelier d'une demi-journée"],
        ['l' => 'Public', 'v' => 'Non-développeurs qui ont déjà construit un flux et butent sur un logiciel sans connecteur, 8 personnes au plus'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à la fin de la formation, et qu'est-ce qu'elle ne couvre pas ?",
            'paragraphes' => [
                "À la fin des deux jours, chaque participant sait mener seul une intégration simple de bout en bout. Ouvrir la documentation d'un service inconnu et y trouver en dix minutes l'adresse à appeler, la méthode, les champs obligatoires et le mode d'authentification. Créer les identifiants au bon endroit dans n8n, Make ou Zapier, sans recopier la clé dans un champ de texte. Envoyer une requête en mode test, lire la réponse et s'en servir dans la suite du flux. Recevoir un webhook, vérifier qu'il vient du service attendu et répondre comme celui-ci l'exige. Enfin, reconnaître une limite de débit ou une erreur, puis décider s'il faut réessayer, corriger ou alerter.",
                "Ces objectifs se vérifient sur pièce. L'évaluation finale remet à chacun la documentation d'une API qu'il n'a jamais ouverte et une tâche précise : lire un enregistrement, en créer un autre, réagir à une notification. Le participant travaille sans aide, en mode test, pendant que le formateur observe la méthode plus que le résultat. Celui qui sait où chercher dans la documentation et comment interpréter un code d'erreur a atteint l'objectif, même si son flux demande encore une retouche.",
                "Plusieurs sujets voisins restent hors programme. Les bases de n8n et de Make sont supposées acquises : la <a href=\"/formations/n8n\">formation n8n de zéro à l'autonomie</a> et la fiche Make de zéro à expert les couvrent. Concevoir et publier sa propre API relève de la fiche API REST, écrite pour les développeurs. Les modèles de messages, les coûts et le robot de la plateforme WhatsApp ont leur fiche Chatbot WhatsApp et API WhatsApp Business ; ici, WhatsApp sert seulement à apprendre à lire une documentation versionnée et ses codes d'erreur. L'appel aux modèles d'IA depuis un logiciel se traite dans <a href=\"/formations/integrer-ia-logiciels-existants\">intégrer l'IA dans ses logiciels existants</a>.",
                "La formation ne remplace pas non plus un projet de développement. Quand une intégration touche des paiements en volume, des écritures comptables ou des données sensibles, un code écrit, testé et documenté par un professionnel reste préférable : c'est l'objet du service <a href=\"/services/api-rest-integrations\">API REST et intégrations</a>. La formation donne alors à l'équipe de quoi comprendre ce qui a été livré, poser les bonnes questions au prestataire et assurer les retouches courantes. Les autres formations du <a href=\"/formations/domaine/automatisation\">domaine automatisation</a> sont proposées en bas de page.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pour qui est cette formation, avec quel niveau et quel matériel ?',
            'intro' => "Le participant type n'écrit pas de code, mais il a déjà vu un flux tourner et s'est heurté au même mur : le logiciel dont il a besoin n'apparaît pas dans la liste des connecteurs, ou le connecteur ne propose pas l'action voulue. Les groupes comptent huit personnes au plus, parce que chacun manipule ses propres identifiants et qu'une erreur d'authentification se diagnostique écran contre écran.",
            'items' => [
                ['titre' => 'Les profils fréquents', 'texte' => "Responsable administratif ou financier qui veut relier l'agrégateur de paiement au suivi des ventes, référent n8n ou Make d'une PME, chargé de projet numérique, consultant fonctionnel Odoo, chef de produit qui dialogue avec des prestataires techniques. Les développeurs n'y apprendraient rien de neuf ; la fiche API REST leur convient mieux."],
                ['titre' => 'Le prérequis', 'texte' => "Avoir déjà construit et publié au moins un flux dans n8n ou un scénario dans Make ; un Zap à plusieurs étapes dans Zapier convient aussi. Il faut savoir ce qu'est un déclencheur, une étape et un champ que l'on fait passer d'un outil à l'autre. Un court questionnaire envoyé avant la session le vérifie."],
                ['titre' => 'L\'anglais technique', 'texte' => "Les documentations de Google, de Meta, d'Odoo et des trois outils d'automatisation sont pour l'essentiel en anglais ; celle de FedaPay existe en français. Une lecture lente, traducteur ouvert, suffit : la formation apprend surtout à reconnaître une structure qui se répète d'une documentation à l'autre."],
                ['titre' => 'Le matériel', 'texte' => "Un ordinateur portable par personne avec un navigateur récent. Un second écran aide beaucoup, car on lit la documentation d'un côté et l'on règle la requête de l'autre. Un téléphone sert à recevoir les notifications et les messages de test."],
                ['titre' => 'Les comptes à préparer', 'texte' => "Un accès à n8n, Make ou Zapier au nom de l'entreprise ; un compte FedaPay en mode test ; un compte Google réservé aux essais avec un tableur vide ; si l'entreprise utilise Odoo, une base de test et un utilisateur technique. La liste précise part une semaine avant la session, avec une vérification à distance des accès."],
                ['titre' => 'Ce qui ne vient jamais en salle', 'texte' => "Les clés live, les mots de passe personnels du dirigeant et les fichiers clients complets. Tout se fait en mode test ou sur une copie, et les clés créées pour la formation sont révoquées en fin de session, sauf celles que l'équipe décide de garder pour la production."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connecteur prêt à l'emploi ou requête HTTP : quand faut-il lire la documentation soi-même ?",
            'paragraphes' => [
                "Un connecteur, qu'on l'appelle nœud, module ou application, est une requête d'API déjà écrite par l'éditeur de l'outil d'automatisation. Il choisit à votre place l'adresse, la méthode et les champs, et il ne propose que les actions que cet éditeur a jugées utiles. Tant que votre besoin entre dans ce menu, il faut s'en servir : c'est plus rapide et mieux entretenu. La documentation de l'API n'entre en jeu que dans trois situations, et la formation apprend d'abord à les reconnaître.",
                "Première situation : le service n'a pas de connecteur du tout, ce qui arrive souvent avec les outils locaux ; lors de la préparation de cette page, FedaPay n'avait de page d'intégration ni dans le catalogue de n8n ni dans celui de Zapier. Deuxième situation : le connecteur existe mais ne fait pas ce qu'il faut, par exemple lire un champ personnalisé ou appeler une méthode métier. Troisième situation : le connecteur casse après une évolution de l'API, et il faut comprendre pourquoi. Dans les trois cas, le module HTTP générique de l'outil prend le relais, et c'est la documentation qui dit comment le remplir.",
                "Les trois outils l'ont prévu. Make présente son application HTTP comme le moyen de joindre les services qui n'ont pas d'intégration ; sa version 4, selon le centre d'aide consulté le 5 octobre 2026, range les identifiants dans un trousseau et gère la pagination. n8n propose le nœud HTTP Request, qui importe une commande cURL copiée depuis une documentation. Zapier présente API by Zapier, encore en bêta, pour appeler avec une clé ou OAuth2 les API dépourvues d'intégration. Le geste est le même partout : traduire une page de documentation en réglages.",
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles rubriques chercher en premier dans une documentation d'API ?",
            'legende' => "Les huit rubriques que la formation apprend à repérer, illustrées par ce que contenaient le 5 octobre 2026 les documentations officielles de FedaPay, d'Odoo 20.0, de Google Sheets et de la plateforme WhatsApp de Meta.",
            'entetes' => ['Rubrique', 'La question à laquelle elle répond', 'Exemple relevé dans une documentation réelle'],
            'lignes'  => [
                ['Adresse de base et environnements', 'Où envoyer la requête, en test et en production ?', "FedaPay publie deux serveurs : sandbox-api.fedapay.com pour les essais, api.fedapay.com pour les transactions réelles, chacun avec ses propres clés."],
                ['Authentification', "Comment prouver qui l'on est ?", "FedaPay attend l'en-tête Authorization: Bearer suivi de la clé ; Odoo aussi, avec le mot bearer suivi d'une clé d'API créée dans les préférences de l'utilisateur."],
                ["Référence des points d'accès", 'Quelle adresse et quelle méthode pour quelle action ?', "Chez Odoo, une requête POST vers /json/2/ suivi du modèle technique et de la méthode, par exemple res.partner puis search_read."],
                ['Champs obligatoires', "Que faut-il envoyer au minimum ?", "Pour créer une transaction FedaPay : une description, un montant et une devise désignée par son code ISO, par exemple XOF."],
                ['Réponses et erreurs', "Comment savoir si cela a marché, et sinon pourquoi ?", "La création d'une transaction FedaPay répond 201 en cas de succès, 400, 401 ou 422 en cas d'erreur ; Meta renvoie un objet error avec un code chiffré, un message et un identifiant de trace."],
                ['Limites', "Combien de requêtes a-t-on le droit d'envoyer ?", "Google Sheets accepte 300 requêtes de lecture par minute et par projet, 60 par minute et par utilisateur, puis répond 429."],
                ['Webhooks', 'Comment le service prévient-il d\'un événement ?', "FedaPay envoie une requête POST, attend une réponse de la famille 2xx et réessaie jusqu'à 9 fois en cas d'échec."],
                ['Versions et changements', "Jusqu'à quand ce que l'on construit fonctionnera-t-il ?", "Meta conserve chaque version de son API au moins deux ans ; la version 25.0, sortie le 18 février 2026, reste servie jusqu'au 29 juillet 2028."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se lit une requête d'API, morceau par morceau ?",
            'paragraphes' => [
                "Une requête ressemble à une lettre recommandée. L'adresse dit à qui elle va : une adresse de base, puis un chemin qui désigne la ressource, comme /v1/transactions chez FedaPay. La méthode dit ce que l'on veut faire : GET pour lire, POST pour créer, PUT pour modifier, DELETE pour supprimer, selon la liste que la page « Envoi de requêtes » de FedaPay donne elle-même. Les en-têtes forment l'enveloppe : qui écrit, avec quelle clé, dans quel format. Le corps, enfin, contient la lettre, presque toujours en JSON, avec des accolades, des noms de champs entre guillemets et leurs valeurs.",
                "La réponse suit le même schéma. Un code de statut à trois chiffres résume l'issue, puis un corps JSON donne le détail. L'exemple que Meta publie pour envoyer un texte par WhatsApp renvoie l'identifiant du message créé et le numéro du destinataire tel que WhatsApp l'a compris. Un participant qui sait retrouver ces deux informations sait déjà prouver qu'un envoi est parti, et retrouver plus tard le message en cause quand un client affirme n'avoir rien reçu.",
                "Les documentations se contredisent parfois, et la formation le montre exprès. Chez FedaPay, la page générale sur l'envoi de requêtes indique qu'une réponse réussie porte « généralement » le code 200, alors que la référence de la création d'une transaction annonce 201. Les deux codes signalent un succès, mais un flux réglé pour n'accepter que 200 échouerait. La règle enseignée : la référence d'un point d'accès l'emporte sur la page générale, et un essai en mode test tranche toujours.",
                "Dernier réflexe : regarder la version. L'exemple d'envoi de texte de Meta appelle graph.facebook.com/v25.0, alors que le journal des versions de la Graph API donne la 26.0, sortie le 29 juillet 2026, comme la plus récente. Meta garde chaque version au moins deux ans, puis redirige les appels vers la plus ancienne version encore servie. Noter la version utilisée et sa date de fin dans la fiche de l'intégration évite de découvrir un changement de comportement par la plainte d'un client.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants réalisent-ils sur des API réelles et sur vos outils ?',
            'items' => [
                ['titre' => "La fiche d'identité d'une API", 'duree' => '45 minutes, jour 1', 'texte' => "Chacun choisit une API dont son entreprise a besoin et remplit une page : adresse de base, environnements, mode d'authentification, trois points d'accès utiles, limites annoncées, existence de webhooks, version en cours. Les trous de la fiche disent exactement ce qu'il faudra demander à l'éditeur ou au prestataire."],
                ['titre' => 'Lire son premier contact Odoo', 'duree' => '1 heure, jour 1', 'texte' => "Sur une base de test, le participant crée un utilisateur technique, lui génère une clé d'API d'une journée, puis lit dans n8n, Make ou Zapier la liste des sociétés clientes avec search_read. La page /doc de la base sert à trouver le nom technique des modèles et des champs."],
                ['titre' => 'Une transaction FedaPay en mode test', 'duree' => '1 h 15, jour 2', 'texte' => "La requête de création d'une transaction est construite à partir de la référence officielle, avec le montant, la devise XOF et une description. Le paiement est simulé avec le moyen de test momo_test : la documentation réserve les numéros 64000001 et 66000001 au scénario de succès, tout autre numéro produisant un échec."],
                ['titre' => 'Le tableur alimenté par l\'API', 'duree' => '45 minutes, jour 2', 'texte' => "Les lignes d'un export sont ajoutées à un Google Sheets par l'opération append. On compare le mode RAW, qui écrit les valeurs telles quelles, et le mode USER_ENTERED, qui les interprète comme une saisie au clavier : une date ou un numéro de téléphone ne donnent pas le même résultat."],
                ['titre' => 'La notification de paiement', 'duree' => '1 heure, jour 2', 'texte' => "Un webhook FedaPay est déclaré vers l'adresse de test du flux, limité aux événements de transaction utiles. À chaque notification, le flux relit la transaction par l'API avant de toucher au suivi des ventes, puis note l'identifiant de l'événement pour ignorer une éventuelle répétition."],
                ['titre' => 'La rafale et la limite', 'duree' => '45 minutes, jour 2', 'texte' => "Deux cents lignes sont envoyées d'un coup vers le tableur de test. Le participant observe les réponses 429, règle les lots et l'intervalle entre deux envois, puis relance jusqu'à ce que tout passe sans perte ni doublon."],
                ['titre' => "L'API inconnue", 'duree' => '45 minutes, jour 2', 'texte' => "Pour l'évaluation, chacun reçoit la documentation d'une API publique qu'il n'a pas vue pendant la session et une tâche précise. Il remplit d'abord la fiche d'identité, puis construit l'appel. La méthode compte autant que le résultat."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "n8n, Make ou Zapier : avec quels outils appelle-t-on une API sans connecteur ?",
            'options'  => ['n8n', 'Make', 'Zapier'],
            'criteres' => [
                ['critere' => 'Module générique', 'valeurs' => ["Nœud HTTP Request, qui importe une commande cURL copiée depuis une documentation (toutes les valeurs arrivent alors comme du texte)", "Application HTTP, version 4 : modules Make a request, Download a file et Resolve URL", "API by Zapier (bêta), Webhooks by Zapier, et l'action API Request (bêta) des applications déjà connectées"]],
                ['critere' => 'Authentifications proposées', 'valeurs' => ["Identifiants génériques : Basic, Header, Query, Digest, OAuth1, OAuth2, Custom", "Basic Auth, clé d'API ou OAuth 2.0", "API by Zapier : clé en en-tête ou en paramètre, ou OAuth2 ; Webhooks by Zapier : Basic ou aucune"]],
                ['critere' => 'Où vit le secret', 'valeurs' => ["Dans les identifiants enregistrés de l'instance, jamais dans un champ de texte du nœud", "Dans un trousseau ou une connexion ; le centre d'aide déconseille de passer la clé par les en-têtes ou les paramètres", "Dans une connexion pour API by Zapier ; en clair dans les champs de l'étape pour Webhooks by Zapier, lisible par toute personne qui accède au Zap"]],
                ['critere' => 'Réponse en erreur', 'valeurs' => ["Option Never Error pour ne pas faire échouer le nœud, et option pour récupérer en-têtes et code de statut", "Option Return error if HTTP request fails pour arrêter le scénario sur un code 4xx ou 5xx ; délai d'attente de 1 à 300 secondes", "Réglage Stop on error de l'action API Request : arrêt sur erreur, avec rafraîchissement automatique du jeton"]],
                ['critere' => 'Réception de webhooks', 'valeurs' => ["Nœud Webhook avec adresse de test et adresse de production, 16 Mo par requête au plus", "Webhook personnalisé avec file d'attente ; 300 requêtes par tranche de 10 secondes, puis code 429", "Catch Hook ou Catch Raw Hook ; 10 Mo, ou 2 Mo en brut ; 20 000 requêtes par tranche de 5 minutes et par utilisateur"]],
            ],
            'verdict'  => "Relevé le 5 octobre 2026 dans les documentations de n8n, de Make et de Zapier. Les trois outils savent appeler une API ; la différence tient surtout à l'endroit où dort le secret. La formation se fait sur l'outil que votre équipe utilise déjà ; si le choix reste ouvert, le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a> pose les critères de prix et d'hébergement.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Clé d'API ou OAuth 2.0 : comment s'authentifier sans fragiliser l'entreprise ?",
            'paragraphes' => [
                "La clé d'API est la forme la plus courante : une longue chaîne que l'on place dans un en-tête de la requête. Elle se traite comme la clé d'un coffre. FedaPay distingue une clé publique, prévue pour les pages web et les applications mobiles, et une clé secrète qui « donne accès à toutes les fonctionnalités de l'API » ; sa page d'authentification demande de ne jamais la partager, de ne jamais la placer dans un système de gestion de versions et de la régénérer aussitôt en cas de doute. Dans un flux, seule la clé secrète de test entre en jeu pendant la formation.",
                "Odoo ajoute deux règles utiles. Sa documentation de l'API externe, dans la version 20.0, interdit les clés de plus de trois mois et conseille une journée pour un usage interactif ; une intégration qui tourne seule doit donc changer de clé au moins chaque trimestre, sous peine de s'arrêter un matin sans prévenir. La clé ne s'affiche qu'une fois, au moment de sa création. Odoo recommande enfin un utilisateur technique dédié, aux droits réduits au strict nécessaire, plutôt que le compte d'une personne. La fiche de l'intégration note donc la date d'échéance de chaque clé et le nom de la personne qui la renouvelle.",
                "OAuth 2.0 répond à une autre question : laisser un outil agir sur un compte sans lui confier le mot de passe. La RFC 6749, publiée en octobre 2012, décrit le principe : un jeton d'accès de courte durée, obtenu après l'accord du titulaire du compte, et un jeton de rafraîchissement qui permet d'en obtenir de nouveaux. Pour le participant, cela se résume à un écran de consentement, à une liste de périmètres demandés et à un jeton que l'outil d'automatisation renouvelle tout seul, tant que rien ne le casse.",
                "Google montre ce qui peut le casser. Selon sa documentation OAuth 2.0, un projet dont l'écran de consentement est configuré pour des utilisateurs externes et resté au statut « Testing » reçoit des jetons de rafraîchissement valables 7 jours : le flux qui marchait en formation tombe en panne la semaine suivante. Un jeton inutilisé pendant six mois expire aussi, et Google limite à 100 le nombre de jetons de rafraîchissement par compte et par identifiant client, le plus ancien étant invalidé sans avertissement. Côté périmètres, la documentation de Google Sheets conseille le plus étroit possible : drive.file, non sensible, plutôt que spreadsheets, qui ouvre tous les tableurs du compte.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que veut dire chaque code de réponse, et que doit faire le flux ?",
            'legende' => "Les codes rencontrés pendant les exercices, avec des exemples tirés des documentations de FedaPay, d'Odoo 20.0, de Google Sheets et de la plateforme WhatsApp de Meta, consultées le 5 octobre 2026. La colonne de droite est la règle que l'on écrit dans la fiche de l'intégration.",
            'entetes' => ['Code', 'Ce que dit le service', 'Exemple réel', 'Ce que fait le flux'],
            'lignes'  => [
                ['200 ou 201', "C'est fait ; 201 précise qu'une ressource a été créée", "FedaPay répond 201 à la création d'une transaction", "Lire l'identifiant renvoyé et le conserver pour les étapes suivantes"],
                ['400', 'La requête est mal formée', "Meta répond 400, code 131047, à un message libre envoyé plus de 24 heures après la dernière réponse du client", "Ne pas réessayer : corriger les données ou la requête, puis alerter si le cas se répète"],
                ['401', "L'appelant n'est pas reconnu", "Odoo renvoie « Invalid apikey » ; Meta signale un jeton expiré par le code 190", "Ne pas réessayer en boucle : vérifier la clé, son environnement et sa date d'échéance"],
                ['403', "L'appelant est reconnu mais n'a pas le droit", "Le nœud Webhook de n8n répond 403 à une adresse IP absente de la liste autorisée", "Revoir les droits de l'utilisateur technique ou le périmètre accordé"],
                ['404', "La ressource ou l'adresse n'existe pas", "FedaPay conseille de vérifier l'adresse et l'existence de la ressource", "Contrôler l'adresse de base, l'environnement et l'identifiant passé dans le chemin"],
                ['422', 'La requête est lisible mais les valeurs sont refusées', "FedaPay répond 422 en cas d'erreur de validation", "Lire le message champ par champ, corriger la valeur fautive, mettre la ligne de côté"],
                ['429', 'Trop de requêtes dans un délai donné', "Google Sheets au-delà de 60 requêtes par minute et par utilisateur ; Meta, codes 130429 et 131056", "Attendre, puis réessayer avec un délai croissant ; regrouper les envois"],
                ['500 ou 503', 'Le service a un problème de son côté', "FedaPay invite à contacter son assistance si l'erreur 500 persiste ; Meta, code 131000", "Réessayer quelques fois, puis alerter une personne nommée"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que faire quand une API répond « trop de requêtes » ?",
            'paragraphes' => [
                "Toute API publique rationne ses appels. La RFC 6585, publiée en avril 2012, définit le code 429 : l'utilisateur a envoyé trop de requêtes dans un délai donné, et la réponse peut contenir un en-tête Retry-After qui indique combien de temps attendre. Les limites varient beaucoup d'un service à l'autre, et la rubrique qui les annonce est celle que les débutants lisent en dernier. Un flux qui fonctionne sur dix lignes de test peut s'effondrer le jour où il traite le fichier de fin de mois.",
                "Google Sheets en donne un exemple chiffré. Sa page des limites, consultée le 5 octobre 2026, accorde 300 requêtes de lecture et 300 d'écriture par minute et par projet, mais seulement 60 par minute et par utilisateur ; au-delà, le service répond 429. Il n'y a pas de plafond quotidien tant que l'on respecte ces quotas par minute. Google recommande d'attendre de plus en plus longtemps entre deux essais, en doublant l'attente à chaque fois et en ajoutant une part de hasard, avec un plafond de 32 à 64 secondes. Il conseille aussi des envois de 2 Mo au plus et coupe toute requête qui dépasse 180 secondes.",
                "Dans les outils, cela se traduit par trois réglages. Regrouper : une seule requête qui ajoute cinquante lignes vaut mieux que cinquante requêtes d'une ligne. Espacer : n8n propose dans le nœud HTTP Request un nombre d'éléments par lot et un intervalle entre deux lots, en millisecondes. Réessayer avec mesure : une erreur 429 ou 503 se relance après une attente, une erreur 400 ou 422 jamais, puisque la même requête produira la même erreur. La formation fait écrire ces trois choix dans la fiche de chaque intégration.",
                "Certaines limites ne visent pas le volume total mais un destinataire précis. La liste des codes d'erreur de la plateforme WhatsApp distingue le code 130429, débit global du numéro atteint, et le code 131056, trop de messages envoyés au même destinataire depuis le même numéro. Le second se règle en espaçant les messages vers une même personne ou en les regroupant, pas en ralentissant tout le flux. Savoir lire le code exact évite de corriger le mauvais problème.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment recevoir un webhook proprement, sans perdre ni doubler d'événement ?",
            'paragraphes' => [
                "Un webhook inverse le sens de l'échange : au lieu d'interroger le service toutes les cinq minutes, on lui donne une adresse, et c'est lui qui prévient quand quelque chose se passe. La documentation de FedaPay décrit la mécanique : une requête POST contenant l'événement, par exemple transaction.approved ou transaction.declined, et une réponse attendue dans la famille 2xx ; toute autre réponse compte comme un échec. Il est possible, dans le tableau de bord, de ne recevoir que les événements choisis, ce que FedaPay recommande pour ne pas encombrer le flux.",
                "Les outils d'automatisation ajoutent leur propre logique. Dans n8n, le nœud Webhook a deux adresses : l'adresse de test, active quand on écoute un événement depuis l'éditeur, et l'adresse de production, enregistrée à la publication du flux ; un service resté branché sur l'adresse de test ne déclenchera plus rien une fois l'éditeur fermé. Make répond « Accepted » avec un code 200 dès que la requête entre dans la file, et désactive au bout de 5 jours, soit 120 heures, un webhook relié à aucun scénario. Zapier répond 200 par défaut et peut renvoyer une réponse vide si l'on ajoute silent/ à l'adresse.",
                "Deux incidents reviennent toujours. Le premier est l'échec répété : FedaPay réessaie au plus 9 fois à intervalles croissants, sans dépasser 2 minutes d'attente, puis désactive le webhook après 10 essais infructueux, sauf si l'option correspondante a été décochée. Une adresse en panne pendant un après-midi peut donc couper toutes les notifications suivantes. Le second est le doublon : FedaPay prévient que le même événement peut arriver plusieurs fois et conseille d'enregistrer les identifiants déjà traités. Le flux d'exercice tient ce registre dans un tableur, ce qui suffit à un volume modeste.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel raccourci transforme un webhook de paiement en porte ouverte ?',
            'texte' => "Marquer une commande comme payée parce qu'une requête est arrivée sur l'adresse du webhook. Cette adresse est publique : quiconque la connaît peut y envoyer un faux « transaction.approved ». FedaPay signe ses notifications avec l'en-tête X-FEDAPAY-SIGNATURE et une clé secrète propre à chaque point de réception, différente en test et en live, mais vérifier cette signature demande en général quelques lignes de code. La parade enseignée aux profils sans code est plus simple et tout aussi solide : traiter la notification comme un simple signal, relire la transaction par l'API avec la clé secrète, et ne livrer que si le statut relu le confirme. Le montant relu doit en plus correspondre à celui de la commande.",
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle menée pour que chacun reparte capable de lire seul une documentation ?',
            'intro' => "Chaque notion suit le même trajet : la page de documentation projetée et lue à voix haute, la requête construite ensemble, puis la même démarche refaite seul sur une autre API. Le formateur ne donne jamais la réponse avant que le participant ait cherché dans la documentation.",
            'items' => [
                ['titre' => 'Huit personnes au plus', 'texte' => "Une clé collée au mauvais endroit ou un en-tête mal orthographié ne se voient qu'en regardant l'écran. Au-delà de huit, le formateur ne peut plus passer derrière chacun au moment où la réponse 401 tombe."],
                ['titre' => 'Des API réelles, en mode test', 'texte' => "FedaPay en mode test, un Google Sheets de démonstration, une base Odoo de test, le numéro de test de la plateforme WhatsApp quand l'entreprise en dispose. Aucune transaction réelle, aucun message à un vrai client."],
                ['titre' => "Vos outils et vos cas", 'texte' => "Les exercices de la deuxième journée partent des API dont l'entreprise a réellement besoin, recensées avant la session. Le participant repart avec au moins un appel qui servira dès la semaine suivante."],
                ['titre' => 'Des erreurs provoquées', 'texte' => "Clé de test utilisée sur le serveur live, champ obligatoire oublié, rafale de requêtes, webhook resté sur l'adresse de test : chaque panne est provoquée en séance, pour que la première rencontre avec elle ne se fasse pas en production."],
                ['titre' => 'Des supports qui restent', 'texte' => "Le modèle de fiche d'identité d'une API, la fiche de l'intégration avec ses échéances de clés, un lexique français des termes que l'on croise dans les documentations, la grille des codes de réponse et les flux d'exercice exportés."],
                ['titre' => 'Un suivi après la session', 'texte' => "Pendant la période prévue au devis, un canal direct reste ouvert pour les questions, et la première intégration mise en service par chaque participant est relue à distance, fiche comprise."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et quelles versions utilise-t-on, et que facturent leurs éditeurs ?",
            'legende' => "Repères relevés le 5 octobre 2026 sur les pages officielles des éditeurs. Ces sommes sont payées aux éditeurs, au nom de votre entreprise, jamais à Richard SALANON ; prix hors taxes, en euros pour n8n et Odoo, en dollars américains pour Make et Zapier.",
            'entetes' => ['Outil', 'Version ou offre', "Ce que publie l'éditeur", 'Ce que cela change pour la formation'],
            'lignes'  => [
                ['n8n', 'Version 2.41, publiée le 22 septembre 2026', "Cloud Starter à 20 € par mois en paiement annuel pour 2 500 exécutions ; Pro à 50 € pour 10 000 ; le paiement mensuel coûte environ 17 % de plus", "L'essai de n8n Cloud ou l'instance déjà en place suffit : HTTP Request et Webhook font partie des nœuds de base de l'éditeur"],
                ['Make', 'Application HTTP, version 4', "Free jusqu'à 1 000 crédits par mois, avec 15 minutes au moins entre deux passages planifiés ; Core à partir de 9 $ par mois en paiement annuel", "Suffisant pour les exercices ; chaque appel HTTP consomme des crédits comme tout module"],
                ['Zapier', 'Webhooks by Zapier et API by Zapier (bêta)', "Free : 100 tâches par mois, sans webhooks ; Professional à 19,99 $ par mois en annuel, 29,99 $ sans engagement ; essai de 14 jours sans carte bancaire", "Les deux applications utiles à la formation demandent Professional, Team ou Enterprise, ou l'essai en cours"],
                ['FedaPay', 'Environnement de test et environnement live', "Deux serveurs et deux jeux de clés ; moyen de paiement fictif momo_test pour les essais", "Toute la formation se déroule en mode test"],
                ['Odoo', 'Version 20.0, API externe JSON-2 apparue en 19.0', "Accès externe réservé aux offres Personnalisé : 35,90 € par utilisateur et par mois en paiement annuel pendant 12 mois, puis 44,90 € ; l'offre Standard n'y donne pas accès", "Sur Odoo Online, vérifier l'offre avant la session ; sinon, travailler sur une base de test"],
                ['Google Sheets', 'API v4', "Quotas par minute, sans plafond quotidien tant qu'on les respecte", "Un compte Google réservé aux essais suffit"],
                ['Plateforme WhatsApp de Meta', 'Graph API v26.0, sortie le 29 juillet 2026', "Facturation par message depuis le 1er juillet 2025 ; depuis le 1er octobre 2026, 1 000 messages de service gratuits par mois et par numéro, non reportables", "Utilisée seulement pour lire une documentation versionnée ; les coûts et les modèles relèvent de la fiche Chatbot WhatsApp"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quelles intégrations les participants construisent-ils, selon leur métier et leur pays ?',
            'items' => [
                ['secteur' => 'Boutique en ligne, à Cotonou', 'probleme' => "Les clients paient par Mobile Money, envoient une capture d'écran, et une vendeuse vérifie chaque paiement dans le tableau de bord avant de préparer le colis.", 'solution' => "Un webhook FedaPay limité aux transactions approuvées, une relecture de la transaction par l'API, puis une ligne dans le suivi des ventes et un message à la préparatrice. Les identifiants d'événements déjà traités sont notés pour écarter les doublons."],
                ['secteur' => "Distributeur de fournitures, à Abidjan", 'probleme' => "Les commandes des revendeurs arrivent par formulaire et sont ressaisies dans Odoo par une assistante, avec des erreurs de références.", 'solution' => "Un utilisateur technique Odoo aux droits limités, une clé renouvelée chaque trimestre selon un calendrier écrit, et un flux qui crée le devis par l'API JSON-2 puis le laisse confirmer par un commercial."],
                ['secteur' => 'ONG de santé, à Niamey ou à Ouagadougou', 'probleme' => "Les fiches des équipes de terrain arrivent par paquets quand la connexion revient, et l'envoi groupé vers le tableur échoue une fois sur deux.", 'solution' => "Des écritures regroupées par lots, un délai croissant entre deux essais après une réponse 429, et une alerte au coordinateur si un lot échoue encore après cinq tentatives."],
                ['secteur' => 'École privée, à Dakar', 'probleme' => "Un prestataire a installé des rappels de scolarité par la plateforme WhatsApp, et plus personne ne comprend pourquoi certains parents ne reçoivent rien.", 'solution' => "La responsable administrative apprend à lire les réponses de l'API et les codes d'erreur, repère les envois rejetés pour cadence trop rapide vers un même parent, et documente la version de l'API utilisée."],
                ['secteur' => 'Cabinet comptable, à Bruxelles', 'probleme' => "Le logiciel de facturation d'un client n'a pas de connecteur Zapier, et les factures sont téléchargées à la main chaque fin de mois.", 'solution' => "Un appel par API by Zapier avec une clé rangée dans une connexion, et non dans un champ en clair, plus une fiche qui inscrit le logiciel parmi les sous-traitants du registre RGPD du cabinet."],
                ['secteur' => 'Organisme de formation, à Lyon ou à Montréal', 'probleme' => "Les inscriptions sont saisies dans un Google Sheets partagé, et le connecteur utilisé jusque-là a perdu son autorisation au bout d'une semaine.", 'solution' => "Diagnostic d'un projet Google resté au statut « Testing », publication de l'écran de consentement, périmètre réduit à drive.file et nouvelle autorisation testée sur un tableur de démonstration."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format, quelle durée et quelle organisation retenir ?',
            'legende' => "Les formats proposés pour cette formation. L'atelier d'une demi-journée convient quand une seule API pose problème ; la formation complète vise l'autonomie face à n'importe quelle documentation.",
            'entetes' => ['Format', 'Durée et rythme', 'Ce que l\'on y fait', 'Pour qui'],
            'lignes'  => [
                ['Atelier sur une API', 'Une demi-journée', "Fiche d'identité de l'API qui bloque, première requête authentifiée, liste des questions à poser à l'éditeur", "Une équipe qui bute sur un logiciel précis et veut savoir si elle peut s'en sortir seule"],
                ['Formation complète en intra', 'Deux jours, en quatre demi-journées', "Le programme complet, la deuxième journée sur les API dont l'entreprise a besoin", 'Une équipe de la même structure, huit personnes au plus par groupe'],
                ['Session inter-entreprises', 'Deux jours', "Le même programme sur FedaPay en mode test, Google Sheets et une base Odoo de démonstration, sans aucun accès interne", 'Le référent isolé d\'une petite structure, ou un réseau d\'associations'],
                ['À distance', 'Quatre séances de trois heures et demie, sur deux semaines', "Écran partagé, documentation lue ensemble, exercices à finir entre deux séances", 'Équipes réparties entre plusieurs pays, structures en Europe ou au Canada'],
                ['Hybride', 'Une journée en salle, puis deux séances à distance', "Lecture de documentation et authentification en présentiel ; webhooks et mise en production suivis à distance sur les vrais outils", "Équipes qui veulent appliquer entre deux séances sur leurs propres API"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Chaque session fait l'objet d'un devis, précédé d'un premier échange gratuit sur les API visées, les outils en place et le nombre de participants. Les abonnements à n8n, Make, Zapier ou Odoo restent à votre nom et se règlent directement aux éditeurs. La formation se paie par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Atelier sur une API', 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée", "Fiche d'identité de l'API concernée", 'Première requête authentifiée en mode test', 'Liste écrite des points à clarifier']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Deux jours en quatre demi-journées', 'Exercices sur FedaPay, Google Sheets, Odoo et vos propres API', 'Modèles de fiches et grille des codes de réponse', 'Évaluation sur une API inconnue et attestation']],
                ['offre' => "Relecture d'intégration", 'prix' => 'Sur devis', 'inclus' => ['Relecture à distance de la première intégration mise en service', 'Contrôle des secrets, des échéances et des limites', 'Canal direct pendant la période convenue']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, chaque groupe comptant huit personnes au plus.",
                "Le format : atelier, deux jours, séances à distance ou formule hybride.",
                "Le nombre d'API propres à l'entreprise à étudier pendant la deuxième journée, et la préparation de leurs comptes de test.",
                "Les déplacements hors de Cotonou pour une session en salle.",
                "La durée du suivi après la formation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il financer cette session ?',
            'paragraphes' => [
                "Peut-être, selon le pays et le dossier, et cette page ne garantit aucune prise en charge. En Côte d'Ivoire, le FDFP accepte le plan de formation de toute entreprise qui justifie du paiement régulier de ses deux taxes ; une session animée chez elle par un intervenant extérieur entre dans la catégorie intra. Le fonds ne paie qu'une fois le suivi et le contrôle de ses services effectués, puis la décision de sa Commission permanente rendue : la trésorerie doit donc pouvoir avancer la dépense.",
                "Au Bénin, le FODEFCA, fonds de développement de la formation professionnelle continue et de l'apprentissage, fonctionne selon les statuts approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le 3FPT ouvre un guichet consacré au financement du personnel des entreprises et des membres des organisations professionnelles. En France, France Compétences rappelle qu'à partir du 1er janvier 2022 tout prestataire qui veut accéder aux fonds publics ou mutualisés doit être certifié Qualiopi ; Richard SALANON n'a pas cette certification et n'est agréé par aucun fonds.",
                "En pratique, adressez au fonds le programme demi-journée par demi-journée et le devis avant toute signature, conservez sa réponse écrite et bâtissez le budget comme si l'aide n'arrivait pas. Les feuilles de présence, l'évaluation sur l'API inconnue et l'attestation remises en fin de session alimentent le dossier, quel que soit le dispositif. Les règles de chaque fonds sont détaillées sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent après une formation aux API, et comment les éviter ?',
            'intro' => "Une intégration qui marche le jour de sa mise en service n'est pas encore une intégration fiable. Les pannes des semaines suivantes ont presque toujours l'une de ces causes.",
            'items' => [
                ['titre' => 'La clé qui expire en silence', 'texte' => "La clé Odoo arrive à son terme de trois mois, le jeton Google d'un projet en test meurt au bout de 7 jours, et le flux s'arrête sans bruit. Chaque clé a sa date d'échéance dans la fiche de l'intégration, avec un rappel une semaine avant et une personne désignée."],
                ['titre' => 'La clé live dans un champ en clair', 'texte' => "Recopiée dans un en-tête de Webhooks by Zapier, dans une note ou dans une capture d'écran envoyée sur une messagerie, elle devient lisible par trop de monde. Elle vit dans les identifiants, le trousseau ou la connexion de l'outil, et se régénère au moindre doute."],
                ['titre' => 'Le mélange des environnements', 'texte' => "Une clé de test envoyée au serveur live, ou l'inverse, produit un 401 que l'on prend pour une panne de l'éditeur. FedaPay sépare ses deux mondes : les objets créés en test n'existent pas en live. La fiche indique clairement quel environnement utilise chaque flux."],
                ['titre' => "Le webhook resté sur l'adresse de test", 'texte' => "Tout fonctionnait pendant la construction, puis plus rien après la fermeture de l'éditeur de n8n. On déclare l'adresse de production chez le service avant de publier, et l'on vérifie la première notification réelle."],
                ['titre' => 'La relance qui crée des doublons', 'texte' => "Réessayer une création après une coupure peut créer deux transactions ou deux devis. On ne relance automatiquement que les lectures et les erreurs 429 ou 503 ; pour une création, on vérifie d'abord si elle a abouti."],
                ['titre' => 'Le connecteur abandonné trop tôt', 'texte' => "Certains passent au module HTTP par habitude alors qu'un connecteur entretenu existait. La requête générique se justifie quand le connecteur manque ou ne suffit pas, pas par goût de la technique."],
                ['titre' => "L'intégration que personne ne connaît", 'texte' => "Une requête HTTP sans fiche devient une boîte noire. La fiche d'une page suffit : API appelée, version, environnement, secrets et échéances, limites connues, comportement en cas d'erreur, personne à prévenir."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local pour une intégration ?',
            'paragraphes' => [
                "Une intégration fait voyager des données entre plusieurs services, souvent hébergés hors du pays. Au Bénin, l'article 391 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique ne permet de transférer des données personnelles vers un État tiers que si l'Autorité constate qu'il assure un niveau de protection équivalent. Un flux qui fait passer un numéro de client par Zapier, Make ou n8n Cloud, puis par un tableur Google, franchit plusieurs frontières en quelques secondes. La fiche de chaque intégration liste donc les services traversés et les données transmises, pour que la question puisse être posée avant la mise en service.",
                "En Europe, le RGPD, dont la CNIL publie le texte, aborde la même réalité sous deux angles. L'article 28 impose de ne recourir qu'à des sous-traitants offrant des garanties suffisantes, ce que deviennent l'outil d'automatisation et chaque API appelée. L'article 32 exige des mesures de sécurité adaptées au risque : une clé d'API rangée dans un coffre, aux droits limités et renouvelée à échéance en fait partie. La fiche d'intégration ne remplace pas le registre des traitements, mais elle donne à la personne qui le tient la liste exacte des outils concernés.",
                "La connexion pèse sur la conception. Selon l'UIT, en 2025, 36 % des habitants de l'Afrique utilisent Internet, contre 74 % de la population mondiale. Un flux hébergé dans le cloud continue de recevoir les webhooks quand le bureau est coupé, ce qu'un ordinateur local ne fait pas ; en revanche, les envois groupés des équipes de terrain arrivent par vagues et heurtent les limites de débit. D'où l'importance, enseignée ici, des lots, des délais croissants et des réessais bornés.",
                "Restent les moyens de paiement et la langue. La documentation de FedaPay liste, pour les collectes, MTN, Moov, Celtiis, BMO et Coris Money au Bénin, Mixx By Yas et Moov au Togo, MTN en Côte d'Ivoire, Airtel au Niger, Free au Sénégal, et les cartes Visa et Mastercard partout ; un flux de paiement se conçoit avec les opérateurs réellement utilisés par vos clients. Côté langue, FedaPay documente en français, mais Google, Meta, Odoo et les trois outils d'automatisation surtout en anglais. Les séances se font en français, lexique des termes techniques à l'appui.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre les intégrations API avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                "Il connaît les API des deux côtés. Comme développeur, il en conçoit et en branche pour ses clients : agrégateurs de paiement, Odoo, Dolibarr, messageries. Son compte GitHub contient le dépôt <a href=\"https://github.com/Richard6141/bj-decoupage\">bj-decoupage</a>, une API REST du découpage administratif du Bénin publiée en mars 2024. Comme utilisateur de n8n et de Make, il relie ces mêmes services sans code quand c'est suffisant. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il exerce dans le numérique depuis " . $ans . " ans et indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP. Il a travaillé, sur place ou à distance, au Bénin, en Côte d'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada.",
                "Il n'est ni certifié ni partenaire de FedaPay, d'Odoo, de Google, de Meta, de n8n, de Make ou de Zapier ; la formation se conclut par une évaluation sur une API inconnue et une attestation. Il forme sur vos comptes de test plutôt que sur les siens, répond sous 24 heures, et dit franchement quand une intégration mérite un vrai développement plutôt qu'un module HTTP. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe à une formation aux intégrations API ?",
            'texte' => "Utilisez un connecteur tant qu'il suffit ; lisez la documentation dans l'ordre authentification, environnements, référence, erreurs, limites, webhooks, versions ; rangez chaque secret dans l'outil, jamais dans un champ en clair ; notez l'échéance de chaque clé ; traitez un webhook comme un signal à vérifier ; ne relancez automatiquement que ce qui peut l'être ; et tenez une fiche par intégration.",
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe bute-t-elle sur un logiciel qui n\'a pas de connecteur ?',
            'texte'  => "Indiquez l'outil d'automatisation utilisé, les logiciels ou les API à relier, le nombre de personnes et leur niveau : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation intégrations API'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer pour suivre cette formation ?', 'r' => "Non. On lit des exemples de requêtes, on manipule du JSON et des en-têtes, mais tout se règle dans les champs de n8n, de Make ou de Zapier. Il faut en revanche avoir déjà construit au moins un flux ou un scénario, pour ne pas apprendre l'outil et les API en même temps."],
        ['q' => 'Quelle différence entre cette formation et la fiche API REST ?', 'r' => "La fiche API REST s'adresse aux développeurs qui conçoivent, sécurisent et documentent leur propre API. Celle-ci apprend à des non-développeurs à utiliser les API des autres depuis un outil d'automatisation. Les deux fiches se complètent quand une équipe métier travaille avec des développeurs."],
        ['q' => 'Peut-on suivre la formation avec Zapier ?', 'r' => "Oui, à condition de disposer d'une offre Professional, Team ou Enterprise, ou de l'essai de 14 jours : selon le centre d'aide de Zapier, Webhooks by Zapier et API by Zapier ne sont pas disponibles sur l'offre Free. API by Zapier est encore en bêta et peut évoluer."],
        ['q' => "Qu'est-ce qu'un webhook, en une phrase ?", 'r' => "C'est une adresse que vous donnez à un service pour qu'il vous prévienne lui-même d'un événement, un paiement approuvé par exemple, au lieu que votre flux l'interroge à intervalles réguliers. Il économise des appels, mais il faut vérifier ce qu'il annonce avant d'agir."],
        ['q' => "Pourquoi FedaPay, Odoo, Google Sheets et WhatsApp comme exemples ?", 'r' => "Parce qu'ils couvrent les quatre cas qu'un participant rencontrera : une clé d'API simple avec environnements de test et live, une clé à durée limitée portée par un utilisateur technique, OAuth 2.0 avec des quotas stricts, et une API versionnée aux codes d'erreur détaillés. Ce sont aussi des outils courants en Afrique francophone."],
        ['q' => "Peut-on brancher Odoo sur n8n avec l'offre Standard d'Odoo Online ?", 'r' => "Non. La documentation d'Odoo 20.0 et celle des identifiants Odoo de n8n réservent l'accès à l'API externe aux offres Personnalisé ; ni l'application gratuite ni l'offre Standard ne l'ouvrent. Une base Odoo installée sur votre serveur n'a pas cette restriction."],
        ['q' => 'Les requêtes HTTP coûtent-elles plus cher que les connecteurs ?', 'r' => "Non, en règle générale : un module HTTP se décompte comme n'importe quel autre module ou nœud. Chez n8n, un passage complet compte une exécution quel que soit le nombre d'étapes ; chez Make, chaque module consomme des crédits ; chez Zapier, chaque action réussie consomme des tâches."],
        ['q' => 'Que faire si la documentation de l\'API est incomplète ou introuvable ?', 'r' => "Remplir la fiche d'identité avec ce que l'on sait, puis poser par écrit à l'éditeur les questions restées ouvertes : environnement de test, authentification, limites, webhooks. Une API sans documentation ni environnement de test est un signal à remonter à la direction avant d'y brancher un processus critique."],
        ['q' => "La formation délivre-t-elle une certification d'un éditeur ?", 'r' => "Non. Richard SALANON n'est certifié ni partenaire d'aucun des éditeurs cités. La formation se termine par une évaluation sur une API inconnue et une attestation de fin de formation, remises avec les feuilles de présence."],
        ['q' => 'Que garde l\'équipe après la session ?', 'r' => "Ses flux d'exercice exportés, au moins un appel utile à son activité, le modèle de fiche d'identité d'une API, le modèle de fiche d'intégration avec les échéances de clés, la grille des codes de réponse et un lexique des termes techniques en français."],
    ],

    'sources' => [
        ['titre' => 'FedaPay, documentation : envoi de requêtes (serveurs de test et live, en-tête Authorization, momo_test, codes d\'erreur)', 'url' => 'https://docs.fedapay.com/fr/integration-api/sending-requests', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : authentification et clés d\'API', 'url' => 'https://docs.fedapay.com/fr/integration-api/authentication', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, référence de l\'API : créer une transaction (champs obligatoires, codes 201, 400, 401, 422)', 'url' => 'https://docs.fedapay.com/api-reference/transactions/create', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : webhooks et événements (nouvelles tentatives, désactivation, signature, doublons)', 'url' => 'https://docs.fedapay.com/fr/integration-api/webhooks', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : méthodes de paiement par pays', 'url' => 'https://docs.fedapay.com/fr/payment-methods', 'date' => '2026-10-05'],
        ['titre' => 'Odoo 20.0, documentation : External JSON-2 API (clés d\'API, offres Personnalisé, transactions, dépréciation des RPC)', 'url' => 'https://www.odoo.com/documentation/20.0/developer/reference/external_api.html', 'date' => '2026-10-05'],
        ['titre' => 'Google, Sheets API : limites d\'utilisation (quotas, code 429, attente exponentielle)', 'url' => 'https://developers.google.com/workspace/sheets/api/limits', 'date' => '2026-10-05'],
        ['titre' => 'Google, Sheets API : périmètres OAuth 2.0', 'url' => 'https://developers.google.com/workspace/sheets/api/scopes', 'date' => '2026-10-05'],
        ['titre' => 'Google, Sheets API : méthode spreadsheets.values.append', 'url' => 'https://developers.google.com/workspace/sheets/api/reference/rest/v4/spreadsheets.values/append', 'date' => '2026-10-05'],
        ['titre' => 'Google Identity, utiliser OAuth 2.0 (expiration des jetons de rafraîchissement)', 'url' => 'https://developers.google.com/identity/protocols/oauth2', 'date' => '2026-10-05'],
        ['titre' => 'Meta, journal des versions de la Graph API (v26.0 du 29 juillet 2026)', 'url' => 'https://developers.facebook.com/docs/graph-api/changelog', 'date' => '2026-10-05'],
        ['titre' => 'Meta, gestion des versions de la Graph API (deux ans au moins par version)', 'url' => 'https://developers.facebook.com/docs/graph-api/guides/versioning', 'date' => '2026-10-05'],
        ['titre' => 'Meta, plateforme WhatsApp : envoyer un message texte', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/messages/text-messages', 'date' => '2026-10-05'],
        ['titre' => 'Meta, plateforme WhatsApp : codes d\'erreur', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/support/error-codes', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (quota de messages de service depuis le 1er octobre 2026)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, HTTP Request node (import cURL, authentification, lots, pagination, options d\'erreur)', 'url' => 'https://docs.n8n.io/integrations/builtin/core-nodes/n8n-nodes-base.httprequest/', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Webhook node (adresses de test et de production, réponses, 16 Mo)', 'url' => 'https://docs.n8n.io/integrations/builtin/core-nodes/n8n-nodes-base.webhook/', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, identifiants Odoo (offre Personnalisé requise)', 'url' => 'https://docs.n8n.io/integrations/builtin/credentials/odoo/', 'date' => '2026-10-05'],
        ['titre' => 'n8n, Plans and Pricing (offres Cloud)', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Make, application HTTP version 4 (modules, authentification, pagination, délai, erreurs)', 'url' => 'https://apps.make.com/http', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Webhooks (file d\'attente, 300 requêtes par 10 secondes, désactivation)', 'url' => 'https://help.make.com/webhooks', 'date' => '2026-10-05'],
        ['titre' => 'Make, Pricing', 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Zapier Help Center, Trigger Zaps from webhooks (Catch Hook, tailles, offres)', 'url' => 'https://help.zapier.com/hc/en-us/articles/8496288690317-Trigger-Zaps-from-webhooks', 'date' => '2026-10-05'],
        ['titre' => 'Zapier Help Center, Webhooks by Zapier rate limits', 'url' => 'https://help.zapier.com/hc/en-us/articles/29972220283789-Webhooks-by-Zapier-rate-limits', 'date' => '2026-10-05'],
        ['titre' => 'Zapier Help Center, Ways to make API requests in Zapier', 'url' => 'https://help.zapier.com/hc/en-us/articles/44391646192397-Ways-to-make-API-requests-in-Zapier', 'date' => '2026-10-05'],
        ['titre' => 'Zapier Help Center, How to get started with API by Zapier (bêta, offres)', 'url' => 'https://help.zapier.com/hc/en-us/articles/44391660158733-How-to-get-started-with-API-by-Zapier', 'date' => '2026-10-05'],
        ['titre' => 'Zapier Help Center, Create an API Request action', 'url' => 'https://help.zapier.com/hc/en-us/articles/12899607716493-Create-an-API-Request-action', 'date' => '2026-10-05'],
        ['titre' => 'Zapier, Plans and Pricing', 'url' => 'https://zapier.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'IETF, RFC 6585 « Additional HTTP Status Codes » (avril 2012) : code 429', 'url' => 'https://www.rfc-editor.org/rfc/rfc6585.html', 'date' => '2026-10-05'],
        ['titre' => 'IETF, RFC 6749 « The OAuth 2.0 Authorization Framework » (octobre 2012)', 'url' => 'https://www.rfc-editor.org/rfc/rfc6749.html', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, dépôt bj-decoupage (API REST du découpage administratif du Bénin)', 'url' => 'https://github.com/Richard6141/bj-decoupage', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025 : Internet use (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD chapitre IV : responsable du traitement et sous-traitant (articles 28 et 32)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['n8n', 'make', 'n8n-avance', 'chatbot-whatsapp', 'api-rest', 'integrer-ia-logiciels-existants'],
        'services'    => ['api-rest-integrations', 'automatisation-ia', 'formation-en-entreprise'],
        'comparatifs' => ['n8n-vs-make-vs-zapier', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
