<?php
// ============================================================
// data/formations/flutter.php · Fiche formation « Développement mobile
// Flutter » (vague 1B, lot B, domaine développement, publication reportée).
// Angle propre : construire une application Android et iOS avec Flutter et
// Dart, puis la publier dans Google Play et l'App Store. La conception d'API,
// Laravel, les bases du web, le vibecoding et le SaaS relèvent des fiches
// sœurs ; le choix d'une prestation d'application relève du pilier
// /services/application-mobile-android-ios, dont aucun texte n'est repris.
// Sources consultées le 05/10/2026 : docs.flutter.dev (plateformes, archive
// des versions, installation Android et iOS, déploiement, architecture, hors
// ligne, tests, taille), dart.dev, pub.dev, Android Developers, aide Play
// Console, Apple Developer, Firebase, KkiaPay, FedaPay, Stack Overflow,
// StatCounter, UIT, CNIL, SGG du Bénin, FDFP, 3FPT, France Compétences.
// Aucun projet Flutter attribué à Richard : seuls les faits de faits.php et
// de la page /richard-salanon sont cités.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Flutter : construire en Dart une application Android et iOS qui fonctionne hors connexion, encaisse par mobile money et paraît dans Google Play et l\'App Store',
    'title'   => 'Formation Flutter et Dart, Android et iOS | Richard SALANON',
    'meta'    => 'Formation Flutter et Dart pour développeurs : écrans, état, API, hors ligne, mobile money, tests, publication sur Google Play et l\'App Store. Sur devis.',
    'en_bref' => 'Une formation pratique pour construire avec Flutter 3.47 et Dart une application mobile complète, du premier écran à la version envoyée dans Google Play et l\'App Store : widgets, navigation, état partagé, appels d\'API, stockage hors connexion, fonctions du téléphone, paiement mobile money en mode test, tests et signature. Elle s\'adresse aux développeurs qui programment déjà dans un autre langage et veulent publier sur les deux systèmes avec un seul code. Elle dure cinq jours, soit dix demi-journées, en intra, en inter, à distance ou en formule hybride, avec huit participants au plus ; le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => false,
    'duree'   => '5 jours (10 demi-journées), étalés sur deux à quatre semaines',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '5 jours en 10 demi-journées, sur deux à quatre semaines'],
        ['l' => 'Public', 'v' => 'Développeurs qui veulent publier sur Android et iOS avec un seul code'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, huit participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : un poste qui compile, un téléphone qui affiche',
            'duree'  => '3 h 30',
            'points' => [
                'Lecture commentée de flutter doctor : ce que chaque ligne rouge signifie, et lesquelles bloquent vraiment pour Android ou pour iOS.',
                'Android Studio, plateforme du SDK de niveau 36, outils de ligne de commande, licences acceptées avec flutter doctor --android-licenses.',
                'Émulateur avec accélération matérielle, puis vrai téléphone Android en débogage USB ou sans fil : on garde les deux pour comparer.',
                'flutter create, visite de lib/, pubspec.yaml, android/ et ios/ : ce qui appartient à Flutter, ce qui appartient à chaque système.',
                'Exercice : modifier un texte, sauvegarder, voir le rechargement à chaud sur le téléphone en moins d\'une seconde, puis comprendre quand il ne suffit plus.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : Dart pour qui programme déjà ailleurs',
            'duree'  => '3 h 30',
            'points' => [
                'Types, inférence, final et const ; la sûreté face au null, imposée depuis Dart 3, et les opérateurs ?, ?? et ! expliqués par les erreurs qu\'ils évitent.',
                'Classes, constructeurs nommés, enregistrements et filtrage par motifs pour lire une réponse d\'API sans cascade de if.',
                'Asynchrone : Future, async et await, puis Stream pour les données qui arrivent en plusieurs fois.',
                'flutter analyze et les règles de lint du projet : corriger les avertissements avant qu\'ils ne deviennent des pannes.',
                'Exercice : une petite bibliothèque Dart qui calcule le total d\'une commande en francs CFA, sans centimes, testée en ligne de commande.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : widgets, mise en page et thème',
            'duree'  => '3 h 30',
            'points' => [
                'Penser en arbre de widgets : StatelessWidget, StatefulWidget, et pourquoi un écran se reconstruit souvent sans que ce soit un problème.',
                'Row, Column, Stack, Expanded, ListView.builder : les cinq briques qui composent la plupart des écrans de gestion.',
                'Thème Material 3 défini une seule fois : couleurs, typographie, formes, mode sombre.',
                'Écrans étroits et grands caractères : tester à 360 points de large et avec la taille de texte du système poussée au maximum.',
                'Exercice : le catalogue du fil rouge, avec image, prix, disponibilité et une liste qui reste fluide sur plusieurs centaines de lignes.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : navigation, formulaires et état local',
            'duree'  => '3 h 30',
            'points' => [
                'Navigator et routes nommées, passage d\'arguments entre écrans, retour avec un résultat.',
                'Form, TextFormField et validateurs : numéro de téléphone local, quantité, champ obligatoire, messages en français.',
                'setState pour l\'état propre à un widget, et le moment exact où il ne suffit plus.',
                'Clavier, focus et bouton retour d\'Android : les détails qui font dire à un utilisateur qu\'une application « marche mal ».',
                'Exercice : le parcours de commande en trois écrans, de la sélection à la confirmation.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : architecture et état partagé',
            'duree'  => '3 h 30',
            'points' => [
                'L\'architecture recommandée par la documentation de Flutter : vues et modèles de vue d\'un côté, dépôts et services de l\'autre.',
                'ChangeNotifier, ListenableBuilder et injection des dépendances : un panier partagé par plusieurs écrans sans variable globale.',
                'Choisir un paquet de gestion d\'état sur pub.dev : éditeur vérifié ou non, date de la dernière version, plateformes prises en charge, licence.',
                'Ranger le projet par fonctionnalité plutôt que par type de fichier, pour qu\'un collègue s\'y retrouve.',
                'Exercice : refondre le fil rouge en couches, sans changer ce que voit l\'utilisateur.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : consommer une API REST',
            'duree'  => '3 h 30',
            'points' => [
                'Le paquet http, les en-têtes, les délais d\'attente et les codes de réponse ; une erreur réseau n\'est pas une erreur de l\'utilisateur.',
                'Convertir le JSON en classes Dart typées, et refuser proprement une réponse incomplète.',
                'Les trois états de tout écran qui charge : en cours, réussi, échoué avec un bouton pour réessayer.',
                'Jeton de connexion rangé dans le stockage sécurisé du système, jamais dans les préférences en clair.',
                'Exercice : brancher le catalogue et les commandes sur l\'API de démonstration fournie, ou sur l\'API réelle de l\'organisation en intra.',
            ],
        ],
        [
            'titre'  => 'Jour 4, matin : hors connexion d\'abord, synchronisation ensuite',
            'duree'  => '3 h 30',
            'points' => [
                'Base locale SQLite sur le téléphone, schéma versionné et migrations quand l\'application évolue.',
                'Lecture locale d\'abord puis mise à jour depuis le serveur, sur le modèle du flux décrit par la documentation de Flutter.',
                'Écriture locale avec un indicateur « synchronisé », file d\'envoi, reprise quand le réseau revient, signalée par connectivity_plus.',
                'Règle de conflit écrite avant de coder : qui gagne quand deux personnes modifient la même commande.',
                'Exercice : passer le téléphone en mode avion, saisir trois commandes, rétablir le réseau et vérifier qu\'aucune n\'est perdue ni doublée.',
            ],
        ],
        [
            'titre'  => 'Jour 4, après-midi : fonctions du téléphone et paiement mobile money en test',
            'duree'  => '3 h 30',
            'points' => [
                'Appareil photo et galerie, position, demandes d\'autorisation au moment où la fonction sert, et chemin prévu quand l\'utilisateur refuse.',
                'Notifications par Firebase Cloud Messaging : jeton de l\'appareil, envoi depuis le serveur, ce qui se passe quand l\'application est fermée.',
                'Paiement avec le SDK Flutter de KkiaPay en mode bac à sable, ou avec un lien de paiement FedaPay créé par le serveur.',
                'Vérification de la transaction côté serveur avant de valider la commande : le retour de l\'application ne fait jamais foi.',
                'Exercice : une commande payée en mode test, refusée, puis annulée, avec un écran juste dans chacun des trois cas.',
            ],
        ],
        [
            'titre'  => 'Jour 5, matin : tests, taille de l\'application et préparation de la version',
            'duree'  => '3 h 30',
            'points' => [
                'Tests unitaires du calcul de commande, tests de widgets du formulaire, un test d\'intégration du parcours d\'achat.',
                'flutter build appbundle --analyze-size : lire le rapport, retirer un paquet inutile, compresser les images, mesurer de nouveau.',
                'Numéro de version et numéro de compilation dans pubspec.yaml, icône, nom affiché, écran de lancement.',
                'Textes de l\'interface traduits avec les fichiers de localisation, formats de date et de montant français.',
                'Exercice : une version de publication compilée, testée sur le téléphone le plus modeste du groupe.',
            ],
        ],
        [
            'titre'  => 'Jour 5, après-midi : signer, publier, puis bilan',
            'duree'  => '3 h 30',
            'points' => [
                'Clé d\'envoi Android, fichier key.properties tenu hors du dépôt Git, signature d\'application par Google Play.',
                'Play Console : fiche, formulaire de sécurité des données, piste de test interne, test fermé et ses règles pour les comptes personnels récents.',
                'iOS sur le Mac du formateur ou celui du participant : identifiant de bundle, fiche App Store Connect, flutter build ipa, envoi, TestFlight.',
                'Ce que les examinateurs d\'Apple et de Google refusent le plus souvent, et la liste de contrôle qui l\'évite.',
                'Évaluation individuelle sur une modification demandée sur place, plan de pratique pour les semaines suivantes, remise des supports et de l\'attestation.',
            ],
        ],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire avec Flutter à la fin des cinq jours, et que laisse la formation de côté ?',
            'paragraphes' => [
                'Un développeur qui découvre Flutter obtient en une heure un écran qui défile sur son téléphone. Le chemin entre cette démonstration et une application que des clients installent depuis un magasin est beaucoup plus long : il passe par l\'état partagé entre écrans, les réponses d\'API qui n\'arrivent pas, la coupure de réseau au milieu d\'une saisie, la clé de signature, le formulaire de sécurité des données et la revue d\'Apple. Cette formation parcourt ce chemin en entier, sur une seule application qui grandit d\'une demi-journée à l\'autre.',
                'En fin de session, chaque participant a construit une application de commande en Flutter 3.47 : un catalogue alimenté par une API, un panier partagé, un parcours de commande validé, un enregistrement local qui survit au mode avion, une photo de preuve, une notification et un paiement mobile money simulé, vérifié par le serveur. Il a compilé une version signée, l\'a envoyée sur une piste de test de Google Play et a vu, sur un Mac, le même code partir vers TestFlight. Il sait lire une erreur de compilation Android ou iOS et dire de quel côté elle vient.',
                'Les objectifs se vérifient sur le poste de chacun, pas sur un questionnaire : la liste ci-dessous sert de grille d\'évaluation le dernier après-midi. Celui qui la remplit entièrement peut démarrer seul une application de gestion ou de commande, et sait sur quels points demander une relecture avant de la confier à de vrais utilisateurs.',
                'La formation ne couvre pas la conception du serveur : une API de démonstration est fournie, et apprendre à en écrire une relève de la formation API REST, ou de la formation Laravel et PHP pour le cadre applicatif. Les bases de la programmation ne sont pas reprises ; sans elles, la <a href="/formations/developpement-web">formation au développement web</a> vient d\'abord. Le développement assisté par un agent d\'IA a sa propre <a href="/formations/vibecoding">formation vibecoding</a>. Enfin, si votre organisation a besoin d\'une application livrée plutôt que d\'une compétence, c\'est l\'objet de la prestation d\'<a href="/services/application-mobile-android-ios">application mobile Android et iOS</a>.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quels gestes chaque participant doit-il savoir refaire seul le dernier jour ?',
            'items' => [
                'Installer Flutter, faire passer flutter doctor au vert pour Android, et lancer une application sur un émulateur puis sur un vrai téléphone.',
                'Écrire en Dart une classe sûre face au null, une fonction asynchrone et la conversion d\'une réponse JSON en objets typés.',
                'Composer un écran lisible sur un téléphone de 360 points de large avec la plus grande taille de texte du système.',
                'Relier trois écrans par la navigation et valider un formulaire avec des messages en français.',
                'Partager un état entre plusieurs écrans en séparant vues, modèles de vue, dépôts et services.',
                'Afficher les états chargement, succès et erreur d\'un appel d\'API, avec un bouton pour réessayer.',
                'Enregistrer une saisie hors connexion et la synchroniser au retour du réseau, sans doublon.',
                'Simuler un paiement mobile money en mode test et ne valider la commande qu\'après vérification par le serveur.',
                'Produire un fichier .aab signé, sans jamais versionner la clé ni son mot de passe.',
                'Préparer la fiche Play Console et la liste des informations à fournir aux examinateurs d\'Apple.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation Flutter, avec quel niveau et quel matériel ?',
            'intro' => 'Le niveau d\'entrée est intermédiaire : il faut déjà programmer, peu importe dans quel langage. Avant le devis, un court test demande d\'écrire une fonction, une boucle et une classe dans le langage de son choix, et d\'expliquer ce que fait un appel réseau. Il sert à composer des groupes homogènes et à prévenir celles et ceux pour qui une autre formation conviendrait mieux.',
            'items' => [
                ['titre' => 'Développeurs web qui passent au mobile', 'texte' => 'Ils connaissent PHP, JavaScript ou Python et livrent des sites ou des applications web. Les notions d\'API et de base de données leur sont acquises ; ce qui change, c\'est le cycle de vie d\'une application installée, le stockage sur l\'appareil et la publication dans les magasins.'],
                ['titre' => 'Développeurs Android ou iOS natifs', 'texte' => 'Ils écrivent en Kotlin ou en Swift et veulent un seul code pour deux systèmes. Ils vont vite sur la publication et les fonctions du téléphone, et passent plus de temps sur le modèle déclaratif des widgets et sur Dart.'],
                ['titre' => 'Équipes qui reprennent une application Flutter', 'texte' => 'Un prestataire a livré l\'application, l\'équipe interne doit la faire évoluer. En intra, les exercices se font sur une copie de son dépôt, et la dernière demi-journée porte sur sa propre procédure de publication.'],
                ['titre' => 'Étudiants avancés et personnes en reconversion qui codent déjà', 'texte' => 'Ils ont terminé un premier parcours de programmation et veulent une application publiée à montrer. Le test de positionnement vérifie qu\'ils ne découvriront pas en même temps la programmation et le mobile.'],
                ['titre' => 'Prérequis', 'texte' => 'Variables, conditions, boucles, fonctions et classes dans un langage quelconque ; savoir ce qu\'est une requête HTTP et un format JSON ; usage courant de Git. La documentation de Flutter et de Dart est en anglais : la lire couramment n\'est pas exigé, la formation apprend à y chercher vite.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur portable avec droits d\'installation, assez puissant pour faire tourner un émulateur Android, et un téléphone Android de test avec son câble. Un Mac n\'est nécessaire que pour compiler soi-même vers l\'iPhone ; sans Mac, la partie iOS se suit sur le poste du formateur. La liste d\'installation arrive une semaine avant la première séance.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Windows, Mac ou Linux : que peut-on compiler depuis chaque poste ?',
            'legende' => 'Correspondance entre le système de l\'ordinateur du participant et les plateformes mobiles qu\'il peut compiler et publier lui-même, selon les guides d\'installation de Flutter consultés le 5 octobre 2026.',
            'entetes' => ['Poste du participant', 'Android', 'iOS', 'Conséquence pour la formation'],
            'lignes'  => [
                ['Windows', 'Oui : émulateur, téléphone réel, version signée pour Google Play', 'Non : la compilation iOS passe par Xcode, qui n\'existe que sur macOS', 'Tout le programme Android en autonomie ; la partie iOS se suit en démonstration ou sur un Mac prêté'],
                ['Linux', 'Oui, comme sous Windows', 'Non, pour la même raison', 'Identique à Windows ; vérifier l\'accélération de l\'émulateur avant la première séance'],
                ['macOS', 'Oui', 'Oui, avec Xcode, CocoaPods, et le mode développeur activé sur l\'iPhone de test', 'Programme complet, y compris l\'envoi vers TestFlight depuis son propre poste'],
                ['Tablette ou téléphone seul', 'Non', 'Non', 'Insuffisant pour écrire et compiler du code ; un ordinateur est indispensable'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment l\'application fil rouge se construit-elle au fil des cinq jours ?',
            'items' => [
                ['titre' => 'Choisir le sujet et dessiner les écrans', 'duree' => 'Avant la session, puis 45 minutes le premier jour', 'texte' => 'Par défaut, une application de commande pour un commerce qui livre ses clients : catalogue, panier, commande, suivi. En inter, chacun peut apporter son propre sujet s\'il tient en quatre à six écrans ; en intra, le sujet vient d\'un besoin de l\'organisation, réduit à ce périmètre.'],
                ['titre' => 'Poser le modèle de données en Dart', 'duree' => '1 heure', 'texte' => 'Produit, ligne de commande, commande, client : les classes sont écrites et testées en ligne de commande avant le moindre écran. Le calcul du total, des remises et des frais de livraison vit dans ces classes, pas dans les widgets.'],
                ['titre' => 'Brancher l\'API de démonstration', 'duree' => '1 h 30', 'texte' => 'Le serveur fourni répond lentement, renvoie parfois une erreur et coupe la connexion au hasard, volontairement. Chaque écran doit afficher un état honnête et proposer de réessayer, ce qui se vérifie devant le groupe.'],
                ['titre' => 'Le test du mode avion', 'duree' => '1 heure', 'texte' => 'Chacun passe son téléphone en mode avion, saisit plusieurs commandes, ferme l\'application, la rouvre, puis rétablit le réseau. Le serveur doit recevoir chaque commande une fois et une seule ; les doublons trouvés deviennent des corrections, puis un test.'],
                ['titre' => 'Payer, refuser, annuler', 'duree' => '1 heure', 'texte' => 'Avec les comptes de test de l\'agrégateur, on rejoue les trois issues d\'un paiement. Le serveur vérifie la transaction avant de marquer la commande comme payée, et l\'application n\'affiche « payée » qu\'après cette vérification.'],
                ['titre' => 'Compiler, signer, envoyer', 'duree' => '2 heures', 'texte' => 'Version signée, piste de test interne de Google Play ouverte au nom du participant ou de son organisation, envoi vers TestFlight depuis un Mac. Ce qui reste à faire avant une vraie publication est écrit dans le dépôt, ligne par ligne.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et que reste-t-il après ?',
            'intro' => 'La plus grande partie du temps se passe sur les téléphones des participants, pas sur un écran projeté. Chaque notion suit le même rythme : démonstration de quelques minutes, application au fil rouge, essai sur un appareil réel, puis relecture.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Un problème d\'émulateur, de pilote USB ou de signature peut bloquer un poste une demi-heure. Avec huit personnes, le formateur règle ces blocages sans arrêter le groupe ; au-delà, certains passeraient la formation à attendre.'],
                ['titre' => 'Des téléphones différents dans la salle', 'texte' => 'Les participants apportent leurs propres appareils, souvent d\'entrée de gamme. C\'est voulu : une liste qui saccade ou un texte coupé sur l\'un d\'eux révèle ce que l\'émulateur cache.'],
                ['titre' => 'Un commit par étape', 'texte' => 'Le fil rouge de référence est livré dans un dépôt Git où chaque demi-journée correspond à une étape. Celui qui décroche compare son code avec l\'étape suivante et rattrape le groupe sans tout recommencer.'],
                ['titre' => 'Sur le code et l\'API de l\'organisation, en intra', 'texte' => 'Les exercices peuvent porter sur une copie de l\'application existante et sur un environnement de test de son serveur, avec des données fictives. Un engagement de confidentialité est signé si l\'organisation le demande.'],
                ['titre' => 'Supports remis', 'texte' => 'Dépôt du fil rouge, fiches par notion, liste de contrôle de publication pour Google Play et l\'App Store, modèle de politique de confidentialité à compléter, procédure de signature et de sauvegarde de la clé, dans un format modifiable.'],
                ['titre' => 'Suivi convenu au devis', 'texte' => 'Une période de questions d\'application, une relecture de la première version soumise aux magasins ou une séance de point après la première revue peuvent être prévues. Leur contenu et leur durée figurent dans le devis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quelles versions utilise-t-on, et que coûtent-ils ?',
            'legende' => 'Versions et tarifs relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les comptes des magasins et des services sont ouverts au nom du participant ou de l\'organisation, jamais au nom du formateur, et leurs frais sont payés directement aux éditeurs.',
            'entetes' => ['Outil', 'Usage dans la formation', 'Version ou offre', 'Coût d\'éditeur'],
            'lignes'  => [
                ['Flutter', 'Le cadre de l\'application, pour Android et iOS', '3.47.6, publiée le 1er octobre 2026', 'Gratuit et open source'],
                ['Dart', 'Le langage, livré avec Flutter', '3.13.5', 'Gratuit et open source'],
                ['Android Studio et SDK Android', 'Émulateur, plateforme de niveau 36, outils de compilation', 'Dernière version stable', 'Gratuit'],
                ['Visual Studio Code', 'Éditeur, avec les extensions Flutter et Dart', 'Version stable du jour', 'Gratuit'],
                ['Xcode', 'Compilation et envoi vers l\'App Store, sur Mac uniquement', 'Xcode 26 au moins, exigé par Apple depuis le 28 avril 2026', 'Gratuit, mais suppose un Mac'],
                ['Firebase', 'Notifications (Cloud Messaging) et rapports de plantage (Crashlytics)', 'Formule Spark', 'Sans frais, sans moyen de paiement ; quotas d\'usage par produit'],
                ['Google Play Console', 'Publier sur Android', 'Compte personnel ou d\'organisation', '25 dollars, une seule fois'],
                ['Apple Developer Program', 'Publier sur iOS, TestFlight', 'Adhésion annuelle', '99 dollars par an, affichés en monnaie locale à l\'inscription ; exonération possible pour certaines associations, écoles et entités publiques'],
                ['SDK Flutter de KkiaPay ou API de FedaPay', 'Paiement mobile money en mode test', 'kkiapay_flutter_sdk 1.3.4 ; SDK serveur de FedaPay', 'Installation gratuite ; commission par transaction réelle, détaillée dans le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la formation insiste-t-elle autant sur les versions de Flutter, d\'Android et d\'iOS ?',
            'paragraphes' => [
                'Parce qu\'une application mobile vieillit même quand personne n\'y touche, sous la pression de trois calendriers. Celui de Flutter d\'abord : selon l\'<a href="https://docs.flutter.dev/install/archive">archive officielle des versions</a>, la branche stable en est à Flutter 3.47.6, publiée le 1er octobre 2026 avec Dart 3.13.5. La page <a href="https://dart.dev/get-dart">Get the Dart SDK</a> précise que Dart publie une version stable environ tous les trois mois et que l\'équipe ne maintient que la plus récente. Un projet resté deux ans sans mise à jour accumule donc huit versions de retard.',
                'Celui de Google ensuite. La <a href="https://developer.android.com/google/play/requirements/target-sdk">page des exigences de niveau d\'API cible</a> impose depuis le 31 août 2026 que les nouvelles applications et les mises à jour visent Android 16, soit le niveau d\'API 36, avec une prolongation possible jusqu\'au 1er novembre 2026 sur demande. Flutter règle ces valeurs par défaut dans le fichier Gradle du projet, mais seulement si l\'on suit ses versions : c\'est la première chose vérifiée sur une application reprise.',
                'Celui d\'Apple enfin. Selon la <a href="https://developer.apple.com/news/upcoming-requirements/">page des exigences de soumission</a>, tout envoi vers App Store Connect doit, depuis le 28 avril 2026, être compilé avec Xcode 26 ou plus récent et le SDK d\'iOS 26. Un Mac trop ancien pour installer Xcode 26 ne peut plus publier, même si l\'application compile encore chez lui. La question figure donc dans le test de positionnement, avant toute inscription d\'un participant qui compte publier lui-même sur iOS.',
                'À l\'autre bout, la <a href="https://docs.flutter.dev/reference/supported-platforms">page des plateformes prises en charge</a>, mise à jour le 22 septembre 2026, fixe ce que Flutter 3.47 sait faire tourner : Android à partir du niveau d\'API 24, soit Android 7.0, et iOS à partir de la version 15. Un participant qui vise des téléphones plus anciens apprend dès le premier jour qu\'aucune option de compilation ne contournera ce plancher.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres comptent pour qui apprend à publier une application Flutter ?',
            'items' => [
                ['valeur' => '3.47.6', 'libelle' => 'Version stable de Flutter publiée le 1er octobre 2026, avec Dart 3.13.5', 'source' => 'Flutter, archive des versions du SDK', 'url' => 'https://docs.flutter.dev/install/archive'],
                ['valeur' => 'Android 7.0 et iOS 15', 'libelle' => 'Versions minimales prises en charge par Flutter 3.47 (page mise à jour le 22 septembre 2026)', 'source' => 'Flutter, plateformes prises en charge', 'url' => 'https://docs.flutter.dev/reference/supported-platforms'],
                ['valeur' => '88,24 %', 'libelle' => 'Part cumulée d\'Android 11 à 16 parmi les appareils Android en Afrique en septembre 2026, dont 30,71 % pour Android 16', 'source' => 'StatCounter Global Stats', 'url' => 'https://gs.statcounter.com/android-version-market-share/mobile-tablet/africa'],
                ['valeur' => '12 testeurs, 14 jours', 'libelle' => 'Test fermé exigé avant la production pour les comptes Google Play personnels créés après le 13 novembre 2023', 'source' => 'Aide de la Play Console', 'url' => 'https://support.google.com/googleplay/android-developer/answer/14151465?hl=fr'],
                ['valeur' => 'Plus de 40 %', 'libelle' => 'Part des problèmes non résolus en revue Apple qui relèvent de la règle 2.1 sur l\'application complète : plantages, contenus provisoires, informations manquantes', 'source' => 'Apple Developer, App Review', 'url' => 'https://developer.apple.com/distribute/app-review/'],
                ['valeur' => '20 appareils', 'libelle' => 'Nombre d\'appareils sur lesquels un compte de distribution limitée, sans pièce d\'identité ni frais, peut partager une application Android', 'source' => 'Android Developers, vérification des développeurs', 'url' => 'https://developer.android.com/developer-verification'],
                ['valeur' => '5,9 %', 'libelle' => 'Part des 31 771 répondants de l\'enquête 2025 qui utilisent Dart, contre 10,8 % pour Kotlin et 5,4 % pour Swift', 'source' => 'Stack Overflow, Developer Survey 2025', 'url' => 'https://survey.stackoverflow.co/2025/technology'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que retenir de ces chiffres avant de choisir Flutter pour son équipe ?',
            'paragraphes' => [
                'D\'abord, que le plancher technique de Flutter gêne peu en Afrique francophone. Selon <a href="https://gs.statcounter.com/android-version-market-share/mobile-tablet/africa">StatCounter</a>, Android 11 à 16 représentaient en septembre 2026 un peu plus de 88 % des appareils Android du continent ; le reste se partage entre Android 10 et des versions plus anciennes, dont une partie seulement tombe sous Android 7.0. Pour une clientèle précise, le seul chiffre qui compte reste celui de ses propres utilisateurs : la formation montre où le lire, dans la Play Console, une fois l\'application publiée.',
                'Ensuite, que Dart reste un langage de niche hors de Flutter. L\'<a href="https://survey.stackoverflow.co/2025/technology">enquête 2025 de Stack Overflow</a> le place à 5,9 % des répondants, au niveau de Swift et derrière Kotlin. Recruter un développeur Dart expérimenté peut donc prendre du temps ; former un développeur web déjà en poste est souvent plus rapide, parce que Dart ressemble à ce qu\'il connaît, et c\'est le pari de la première journée.',
                'Enfin, que la publication échoue rarement pour des raisons techniques. Apple indique sur sa <a href="https://developer.apple.com/distribute/app-review/">page App Review</a> que plus de 40 % des problèmes non résolus touchent la règle 2.1 : plantages, contenus provisoires, informations manquantes, comme un compte de démonstration oublié. Côté Google, un compte personnel récent doit faire tester l\'application par au moins 12 personnes pendant 14 jours sans interruption, et un testeur qui se désinscrit puis revient fait repartir son décompte. Ces règles s\'anticipent ; elles ne se contournent pas.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment intègre-t-on un paiement mobile money dans une application Flutter, et que dit la documentation des agrégateurs ?',
            'paragraphes' => [
                'Deux agrégateurs très utilisés en Afrique de l\'Ouest servent d\'exemple, et ils ne s\'intègrent pas de la même façon. La <a href="https://docs.kkiapay.me/v1/plugin-et-sdk/sdk-flutter">documentation de KkiaPay</a> publie un SDK Flutter : on crée un objet de paiement avec le montant en XOF, la clé publique, le mode bac à sable et une fonction de rappel, puis on l\'ouvre comme un écran. Le rappel reçoit un statut, parmi lesquels un paiement réussi, annulé, initié ou en attente, et l\'identifiant de la transaction.',
                'Ce statut ne suffit pas pour livrer. Le SDK serveur de KkiaPay, décrit dans sa <a href="https://docs.kkiapay.me/v1/plugin-et-sdk/admin-sdks-server-side/php-admin-sdk">page PHP</a>, vérifie une transaction à partir de son identifiant avec les clés publique, privée et secrète, qui ne quittent jamais le serveur. Dans la formation, l\'application envoie l\'identifiant à l\'API, l\'API interroge KkiaPay, et la commande ne passe à « payée » qu\'après cette réponse. Une application modifiée ou un réseau capricieux ne peut donc pas faire passer un paiement qui n\'a pas eu lieu.',
                'FedaPay suit une autre logique. Sa <a href="https://docs.fedapay.com/fr/sdks/overview">page des SDK</a>, consultée le 5 octobre 2026, propose des bibliothèques serveur en PHP, Node.js et Ruby et des composants web pour React et Angular, mais aucun SDK Flutter officiel ; les paquets que l\'on trouve sur pub.dev sous ce nom sont publiés par des tiers. La méthode enseignée est donc la suivante : le serveur crée la transaction, demande à l\'API de FedaPay son lien de paiement, l\'application l\'ouvre, et la confirmation arrive au serveur par les <a href="https://docs.fedapay.com/fr/integration-api/webhooks">webhooks</a> transaction.approved, transaction.declined ou transaction.canceled.',
                'Le choix d\'un paquet fait partie de l\'exercice. Sur <a href="https://pub.dev/packages/kkiapay_flutter_sdk">pub.dev</a>, la version 1.3.4 du SDK de KkiaPay date du 22 avril 2025 et son éditeur n\'y porte pas le badge d\'éditeur vérifié, qui atteste, selon <a href="https://dart.dev/tools/pub/verified-publishers">dart.dev</a>, que pub.dev a contrôlé l\'identité de l\'éditeur par son nom de domaine. Cela n\'interdit pas de l\'utiliser, puisque la documentation de l\'agrégateur y renvoie, mais impose de figer sa version et de la tester à chaque mise à jour de Flutter. Les frais et les pays couverts se comparent dans le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a>.',
                'Reste la règle des magasins, rappelée en une phrase : un repas, une livraison ou un service réel se paie hors de l\'achat intégré, tandis qu\'un contenu numérique débloqué dans l\'application passe en principe par le système de facturation de Google ou d\'Apple. Les participants dont le projet vend du numérique le signalent au cadrage, car cela change l\'architecture du paiement. Le détail commercial de ces règles est présenté sur la page de prestation <a href="/services/application-mobile-android-ios">application mobile Android et iOS</a>.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation Flutter selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Commerce de gros, Cotonou ou Parakou', 'probleme' => 'Les revendeurs passent leurs commandes par messages vocaux ; le développeur web de l\'entreprise a construit l\'administration en PHP, mais personne ne sait produire l\'application que réclament les commerciaux.', 'solution' => 'Formation intra avec l\'API existante comme serveur du fil rouge : catalogue consultable hors connexion, commande enregistrée en mode avion, publication sur la piste de test interne de Google Play pour dix revendeurs pilotes.'],
                ['secteur' => 'ONG de santé communautaire, Burkina Faso ou Mali', 'probleme' => 'Les agents de terrain collectent des données sur papier dans des zones sans réseau pendant plusieurs jours ; l\'équipe informatique connaît Python mais jamais le mobile.', 'solution' => 'Jours 3 et 4 adaptés à la collecte : formulaires validés sur l\'appareil, base locale chiffrée, synchronisation par lot au retour en ville, et règle écrite sur ce qui reste stocké dans le téléphone.'],
                ['secteur' => 'Développeur indépendant, Abidjan ou Dakar', 'probleme' => 'Ses clients demandent de plus en plus une application en plus du site, et il refuse ces projets faute de savoir publier sur deux systèmes.', 'solution' => 'Formation en inter sur un projet personnel, avec un Mac emprunté pour la partie iOS ; il repart avec une liste de contrôle de publication qu\'il réutilise sur ses projets suivants.'],
                ['secteur' => 'Établissement de formation, Lomé ou Douala', 'probleme' => 'Les enseignants veulent ajouter le mobile à leur cursus, mais ne l\'ont jamais pratiqué au-delà des tutoriels.', 'solution' => 'Session intra pour l\'équipe pédagogique, puis comptes de distribution limitée d\'Android, qui permettent aux étudiants de partager leurs projets sur une vingtaine d\'appareils sans frais d\'inscription.'],
                ['secteur' => 'Agence numérique, France ou Belgique', 'probleme' => 'L\'agence maintient deux applications natives pour un même client et voudrait les réunir, sans savoir si son équipe web peut prendre le relais.', 'solution' => 'Formation intra centrée sur l\'architecture en couches et les tests, avec réécriture d\'un écran réel en Flutter pour comparer, puis point sur le statut de commerçant exigé par Apple dans l\'Union européenne.'],
                ['secteur' => 'Service informatique, Suisse ou Québec', 'probleme' => 'L\'équipe a hérité d\'une application Flutter restée sur une version ancienne, que Google menace de rendre invisible faute de viser un niveau d\'API récent.', 'solution' => 'Programme resserré à distance, sur le fuseau de l\'équipe : montée de version de Flutter sur une branche, tests autour du parcours principal, nouvelle version signée envoyée en test interne.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : comment la formation Flutter s\'organise-t-elle ?',
            'legende' => 'Le format se choisit au premier échange, selon le nombre de développeurs, leurs postes de travail, la disponibilité d\'un Mac, la confidentialité du code et la connexion disponible. Huit participants au plus par groupe.',
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Ce qui change'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe qui construit ou reprend une application', 'Cinq jours sur deux à quatre semaines', 'Exercices sur l\'API et une copie de l\'application de l\'organisation, procédure de publication écrite pour ses propres comptes'],
                ['Inter-entreprises', 'Développeurs de structures différentes, indépendants', 'Cinq jours consécutifs ou étalés', 'Fil rouge commun ou projet personnel, aucun code interne montré au groupe'],
                ['À distance', 'Participants répartis en Afrique, en Europe ou au Canada', 'Dix séances de trois heures trente avec partage d\'écran', 'Téléphone de test branché sur le poste de chacun, émulateur installé et vérifié avant la première séance'],
                ['Hybride', 'Groupes qui gagnent à installer leurs postes ensemble', 'Premier jour en salle à Cotonou ou dans vos locaux, la suite à distance', 'Pilotes, émulateurs et téléphones réglés côte à côte, ce qui évite la demi-journée la plus fragile à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation Flutter, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun montant n\'est publié : la formation est chiffrée sur devis, après le test de positionnement. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les frais des magasins, des services Firebase au-delà de leurs quotas et des agrégateurs de paiement restent payés directement aux éditeurs.',
            'items'      => [
                ['offre' => 'Formation de cinq jours', 'prix' => 'Sur devis', 'inclus' => ['Dix demi-journées sur le fil rouge ou votre projet', 'Essais sur les téléphones des participants', 'Envoi en piste de test Google Play et démonstration TestFlight', 'Supports, dépôt de référence et attestation']],
                ['offre' => 'Formation sur votre application', 'prix' => 'Sur devis', 'inclus' => ['Exercices sur une copie de votre dépôt', 'Environnement de test de votre API', 'Procédure de publication pour vos comptes', 'Engagement de confidentialité si demandé']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Questions d\'application', 'Relecture avant la première soumission', 'Séance de point après la première revue']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, huit développeurs au plus par groupe.',
                'Le travail sur l\'application et l\'API réelles de l\'organisation, qui demande une copie du code et un environnement de test.',
                'La partie iOS menée par chaque participant sur son propre Mac, ou suivie en démonstration.',
                'Le mode : sur place à Cotonou, dans vos locaux, à distance ou en formule hybride, et les déplacements éventuels.',
                'La durée du suivi après la dernière séance.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la formation Flutter ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est promise : elle se décide fonds par fonds, dossier par dossier. Pour une entreprise ivoirienne, le point de départ est la page du <a href="https://fdfp.ci/procedures-dhabilitation/">FDFP consacrée à l\'habilitation des opérateurs</a>, vérifiée le 5 octobre 2026 : les opérateurs privés qui sollicitent ses financements doivent être habilités pour une année, à l\'exception des structures établies hors de Côte d\'Ivoire, ce qui est le cas d\'un formateur installé à Cotonou. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>, et ses conditions se demandent au fonds lui-même.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet pour le personnel des entreprises et un autre pour les demandes individuelles, déposées en ligne. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> conditionne depuis le 1er janvier 2022 l\'accès aux fonds publics ou mutualisés, dont ceux des opérateurs de compétences, à la certification Qualiopi du prestataire. Richard SALANON ne détient ni Qualiopi ni habilitation d\'un fonds. Envoyez le programme et le devis au fonds avant de signer, et construisez le budget comme si la formation restait à votre charge.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur peut rendre une application Android impossible à mettre à jour ?',
            'texte' => 'Perdre la clé d\'envoi, ou la publier. La <a href="https://docs.flutter.dev/deployment/android">documentation de déploiement Android de Flutter</a> le répète deux fois : le fichier de clés et le fichier key.properties qui contient ses mots de passe restent privés et n\'entrent jamais dans un dépôt public. Un développeur qui quitte l\'équipe avec la seule copie de la clé, ou qui l\'a générée sur son poste personnel au nom de personne, laisse l\'organisation dans une impasse le jour de la mise à jour suivante. La règle enseignée le dernier jour : signature d\'application gérée par Google Play, clé d\'envoi conservée dans le coffre de mots de passe de l\'organisation avec une copie hors ligne, et comptes des magasins ouverts au nom de l\'organisation, le prestataire ou le formateur n\'y ayant qu\'un accès délégué.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?',
            'intro' => 'Une fois seul face à un client ou à une échéance, on retombe sur quelques raccourcis toujours identiques. Les voici, avec le réflexe qui les neutralise.',
            'items' => [
                ['titre' => 'Mettre la logique dans les widgets', 'texte' => 'Calculer un total ou appeler l\'API directement dans la méthode build rend l\'écran impossible à tester et provoque des appels en double. Le calcul vit dans le modèle, l\'appel dans un service, et le widget ne fait qu\'afficher.'],
                ['titre' => 'Tester seulement sur l\'émulateur', 'texte' => 'L\'émulateur tourne sur un ordinateur puissant, en Wi-Fi. Avant chaque version, l\'application passe sur le téléphone le plus modeste dont on dispose, réseau dégradé, et en version de publication, car une compilation de débogage est bien plus lourde et plus lente.'],
                ['titre' => 'Demander toutes les autorisations au démarrage', 'texte' => 'Appareil photo, position et notifications réclamées d\'un coup au premier lancement : l\'utilisateur refuse tout. Chaque autorisation se demande au moment où la fonction sert, avec une explication, et l\'application continue de marcher si la réponse est non.'],
                ['titre' => 'Croire le statut renvoyé par l\'application', 'texte' => 'Valider une commande parce que l\'écran de paiement a répondu « réussi » ouvre la porte à la fraude. Seule la vérification faite par le serveur auprès de l\'agrégateur, ou le webhook reçu par lui, fait foi.'],
                ['titre' => 'Ajouter des paquets sans les regarder', 'texte' => 'Chaque paquet de pub.dev est du code de plus à maintenir. Avant d\'en ajouter un, on regarde son éditeur, la date de sa dernière version, les plateformes prises en charge et ce qu\'il demande comme autorisations ; on fige ensuite sa version.'],
                ['titre' => 'Laisser Flutter vieillir', 'texte' => 'Sauter plusieurs versions rend la montée suivante douloureuse, puis Google ou Apple refusent la mise à jour. Un rappel trimestriel, une branche dédiée et les tests du parcours principal suffisent à rester dans les clous.'],
                ['titre' => 'Soumettre sans compte de démonstration', 'texte' => 'Une application qui demande une connexion et arrive en revue sans identifiants de test revient refusée. Le compte de démonstration, les informations de contact et les explications sur les fonctions difficiles à reproduire font partie de la liste de contrôle.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Réseau, téléphones, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Le réseau d\'abord. Selon les <a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-mobile-network-coverage/">Facts and Figures 2025 de l\'Union internationale des télécommunications</a>, la 4G couvre 93 % de la population mondiale, mais la 5G seulement 12 % de la population africaine, contre 74 % en Europe, et près de la moitié des personnes encore privées de haut débit mobile vivent en Afrique. C\'est pourquoi une journée entière porte sur le fonctionnement hors connexion, et pourquoi la formation elle-même s\'organise ainsi : Flutter, Android Studio, les images d\'émulateur et les dépendances du fil rouge sont téléchargés avant la première séance, souvent plusieurs gigaoctets.',
                'Les téléphones ensuite. Une application pensée sur un appareil récent découvre sur un Android d\'entrée de gamme ses listes saccadées, sa mémoire saturée et ses textes tronqués. La <a href="https://docs.flutter.dev/perf/app-size">documentation de Flutter sur la taille</a> rappelle qu\'une compilation de débogage, alourdie pour le rechargement à chaud, ne représente pas ce que l\'utilisateur télécharge ; on mesure donc toujours une version de publication, avec l\'option --analyze-size. Pour les élèves et les petites structures, les comptes de distribution limitée annoncés par Google en août 2026 permettent de partager une application de test sur 20 appareils au plus sans frais ni pièce d\'identité.',
                'Les données personnelles enfin. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre la collecte et le transfert des données que l\'application enregistre, photos et positions comprises. En Europe, le RGPD s\'applique, et la <a href="https://www.cnil.fr/fr/permissions-applications-mobiles-recommandations-de-la-cnil-pour-respecter-la-vie-privee">recommandation de la CNIL sur les applications mobiles</a>, publiée le 24 septembre 2024, demande de choisir l\'autorisation la moins intrusive, de recueillir le consentement au moment de l\'action plutôt que sur un écran unique au démarrage, et de ne pas présenter la seconde demande quand la première a été refusée.',
                'La publication en Europe ajoute une formalité souvent ignorée. Selon la page des exigences d\'Apple, depuis le 17 février 2025, une application dont l\'éditeur n\'a pas déclaré son statut de commerçant au titre du règlement européen sur les services numériques est retirée de l\'App Store dans l\'Union européenne. Côté langue, les séances se donnent en français ou en anglais ; l\'application, elle, utilise les fichiers de localisation de Flutter pour afficher des dates à la française, des montants en francs CFA sans décimales ou en euros, et des numéros de téléphone au format local.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre Flutter avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Le développement d\'applications mobiles Android et iOS figure parmi ses compétences, à côté des API et des applications web. Côté serveur, celui que consomme une application mobile, son travail se lit en public : l\'API REST de la plateforme Allo Artisan, écrite avec NestJS et PostgreSQL, gère réservations, paiements, messagerie en temps réel et notifications, et l\'API du découpage administratif du Bénin, écrite avec Laravel, expose les départements jusqu\'aux quartiers. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Il enseigne la programmation depuis 2019, d\'abord auprès d\'étudiants chez VULCAIN-TECH, à Abomey-Calavi. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), avec ' . $ans . ' ans d\'expérience dans le numérique, il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA et aux ERP, et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et d\'Amérique du Nord.',
                'Sa manière d\'enseigner Flutter tient en quelques engagements vérifiables : un test de positionnement avant le devis, huit participants au plus, des essais sur les vrais téléphones des participants, une vérification de chaque paiement par le serveur, des comptes de magasin ouverts au nom de l\'organisation, et la franchise d\'orienter vers une autre formation quand les bases de la programmation manquent. Son parcours complet est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/developpement">formations en développement</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de vous inscrire ?',
            'texte' => 'Flutter donne deux applications pour un seul code, mais pas deux publications pour le prix d\'une : il faut un Mac pour iOS, des comptes à votre nom, une clé d\'envoi bien gardée et une mise à jour au moins une fois par an. Venez en sachant déjà programmer, avec un téléphone Android de test et, si possible, un vrai besoin de commande ou de collecte. Repartez avec une application qui tient en mode avion, un paiement vérifié par le serveur et une version signée. Le reste du catalogue est sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former vos développeurs à Flutter, sur un fil rouge ou sur votre propre application ?',
            'texte'  => 'Indiquez le nombre de développeurs, les langages qu\'ils pratiquent, les ordinateurs dont ils disposent (Windows, Mac ou Linux), l\'existence éventuelle d\'une application ou d\'une API, et le format souhaité. Vous recevez une réponse sous 24 heures, un test de positionnement, puis un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation Flutter'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il connaître Dart avant de suivre la formation Flutter ?', 'r' => 'Non. La première après-midi est consacrée à Dart pour des personnes qui programment déjà dans un autre langage : types, sûreté face au null, classes, asynchrone. Ce qui est exigé, c\'est de savoir programmer ; le test de positionnement le vérifie et oriente si besoin vers la formation au développement web.'],
        ['q' => 'Faut-il un Mac pour suivre la formation ?', 'r' => 'Non pour apprendre et publier sur Android, qui se fait depuis Windows, Linux ou macOS. Oui pour compiler et envoyer soi-même une application vers l\'App Store, car cela passe par Xcode, disponible seulement sur Mac, et désormais en version 26 au moins. Sans Mac, la partie iOS se suit en démonstration sur le poste du formateur.'],
        ['q' => 'Quel téléphone faut-il apporter ?', 'r' => 'Un téléphone Android sous Android 7.0 ou plus récent, avec son câble, sur lequel vous pouvez activer les options pour les développeurs. Un appareil d\'entrée de gamme est même préférable, car il révèle les lenteurs. Un iPhone n\'est utile que si vous compilez vous-même sur Mac, avec le mode développeur activé.'],
        ['q' => 'Faut-il payer les comptes Google Play et Apple avant la formation ?', 'r' => 'Non, ce n\'est pas exigé pour s\'inscrire. L\'API de démonstration, les émulateurs et le mode test des paiements suffisent pour presque tout le programme. Pour envoyer réellement en test, il faut un compte Google Play, 25 dollars une seule fois, et pour iOS l\'Apple Developer Program, 99 dollars par an, ouverts au nom de votre organisation.'],
        ['q' => 'Flutter, React Native ou natif : la formation aide-t-elle à choisir ?', 'r' => 'Elle enseigne Flutter, et signale au fil des séances ce qu\'il fait bien et moins bien. La décision d\'architecture pour un projet précis, avec ses coûts, relève plutôt du cadrage d\'une prestation. Une équipe déjà experte en React peut avoir de bonnes raisons de rester sur React Native ; le premier échange sert aussi à le dire.'],
        ['q' => 'Apprend-on à écrire le serveur et l\'API de l\'application ?', 'r' => 'Non. Une API de démonstration est fournie, et en intra on se branche sur l\'environnement de test de votre propre serveur. Concevoir, sécuriser et documenter une API est le sujet de la formation API REST ; construire le serveur avec un cadre PHP, celui de la formation Laravel et PHP.'],
        ['q' => 'Le paiement mobile money est-il fait avec de vrais montants ?', 'r' => 'Non. Tout se passe en mode test, avec le bac à sable de l\'agrégateur. L\'exercice montre surtout la vérification côté serveur : la commande n\'est marquée payée qu\'après la réponse de KkiaPay ou le webhook de FedaPay, jamais sur la seule réponse de l\'application.'],
        ['q' => 'Peut-on publier réellement une application pendant les cinq jours ?', 'r' => 'On publie sur une piste de test interne de Google Play et, depuis un Mac, sur TestFlight. Une sortie publique demande souvent plus de temps : un compte Google Play personnel récent doit d\'abord mener un test fermé de 14 jours avec au moins 12 testeurs, et la première version de TestFlight ouverte à des testeurs externes passe en revue chez Apple.'],
        ['q' => 'Notre application Flutter est ancienne : la formation peut-elle servir à la reprendre ?', 'r' => 'Oui, en intra. Les exercices se font alors sur une copie de votre dépôt : montée de version de Flutter sur une branche, vérification du niveau d\'API visé pour Google Play, tests autour du parcours principal, nouvelle version signée. La clé d\'envoi doit être retrouvée avant la formation, faute de quoi la mise à jour se complique.'],
        ['q' => 'La formation peut-elle se suivre entièrement à distance ?', 'r' => 'Oui, en dix séances de trois heures trente avec partage d\'écran, le téléphone de test branché sur le poste de chacun. La première séance est la plus délicate, car les pilotes et l\'émulateur doivent fonctionner ; une formule hybride, avec un premier jour en salle, évite ce risque.'],
        ['q' => 'Combien coûte la formation, et comment la régler ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de développeurs, le format, le travail sur votre propre application, la partie iOS et le suivi prévu. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Obtient-on une certification Flutter ?', 'r' => 'Non. La formation se conclut par une évaluation sur une modification faite seul et par une attestation de fin de formation. Richard SALANON n\'est certifié par aucun éditeur, et n\'affiche ni Qualiopi ni habilitation de fonds ; l\'application compilée, signée et envoyée en test reste la preuve la plus parlante.'],
    ],

    'sources' => [
        ['titre' => 'Flutter, plateformes prises en charge par Flutter 3.47 (page mise à jour le 22 septembre 2026)', 'url' => 'https://docs.flutter.dev/reference/supported-platforms', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, archive des versions du SDK (3.47.6 et Dart 3.13.5)', 'url' => 'https://docs.flutter.dev/install/archive', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, nouveautés des versions 3.41 à 3.47', 'url' => 'https://docs.flutter.dev/release/whats-new', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, configurer le développement Android', 'url' => 'https://docs.flutter.dev/platform-integration/android/setup', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, configurer le développement iOS (Xcode, CocoaPods, mode développeur)', 'url' => 'https://docs.flutter.dev/platform-integration/ios/setup', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, compiler et publier une application Android (app bundle, signature)', 'url' => 'https://docs.flutter.dev/deployment/android', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, compiler et publier une application iOS (flutter build ipa, TestFlight)', 'url' => 'https://docs.flutter.dev/deployment/ios', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, guide d\'architecture des applications', 'url' => 'https://docs.flutter.dev/app-architecture/guide', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, modèle de conception hors connexion d\'abord', 'url' => 'https://docs.flutter.dev/app-architecture/design-patterns/offline-first', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, approches de gestion de l\'état', 'url' => 'https://docs.flutter.dev/data-and-backend/state-mgmt/options', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, vue d\'ensemble des tests', 'url' => 'https://docs.flutter.dev/testing/overview', 'date' => '2026-10-05'],
        ['titre' => 'Flutter, mesurer et réduire la taille d\'une application', 'url' => 'https://docs.flutter.dev/perf/app-size', 'date' => '2026-10-05'],
        ['titre' => 'Dart, obtenir le SDK et rythme des versions', 'url' => 'https://dart.dev/get-dart', 'date' => '2026-10-05'],
        ['titre' => 'Dart, sûreté face au null', 'url' => 'https://dart.dev/null-safety', 'date' => '2026-10-05'],
        ['titre' => 'Dart, éditeurs vérifiés sur pub.dev', 'url' => 'https://dart.dev/tools/pub/verified-publishers', 'date' => '2026-10-05'],
        ['titre' => 'pub.dev, paquet kkiapay_flutter_sdk', 'url' => 'https://pub.dev/packages/kkiapay_flutter_sdk', 'date' => '2026-10-05'],
        ['titre' => 'Android Developers, exigences de niveau d\'API cible pour Google Play', 'url' => 'https://developer.android.com/google/play/requirements/target-sdk', 'date' => '2026-10-05'],
        ['titre' => 'Android Developers, Android App Bundle', 'url' => 'https://developer.android.com/guide/app-bundle', 'date' => '2026-10-05'],
        ['titre' => 'Android Developers, vérification des développeurs et comptes de distribution limitée', 'url' => 'https://developer.android.com/developer-verification', 'date' => '2026-10-05'],
        ['titre' => 'Aide de la Play Console, exigences de test pour les nouveaux comptes personnels', 'url' => 'https://support.google.com/googleplay/android-developer/answer/14151465?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide de la Play Console, créer un compte de développeur (frais d\'inscription)', 'url' => 'https://support.google.com/googleplay/android-developer/answer/6112435?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Apple Developer, inscription à l\'Apple Developer Program', 'url' => 'https://developer.apple.com/programs/enroll/', 'date' => '2026-10-05'],
        ['titre' => 'Apple Developer, exigences de soumission récentes et à venir', 'url' => 'https://developer.apple.com/news/upcoming-requirements/', 'date' => '2026-10-05'],
        ['titre' => 'Apple Developer, App Review', 'url' => 'https://developer.apple.com/distribute/app-review/', 'date' => '2026-10-05'],
        ['titre' => 'Apple Developer, TestFlight', 'url' => 'https://developer.apple.com/testflight/', 'date' => '2026-10-05'],
        ['titre' => 'Firebase, tarifs (formule Spark et produits sans frais)', 'url' => 'https://firebase.google.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, documentation du SDK Flutter', 'url' => 'https://docs.kkiapay.me/v1/plugin-et-sdk/sdk-flutter', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, SDK administrateur PHP (vérification d\'une transaction)', 'url' => 'https://docs.kkiapay.me/v1/plugin-et-sdk/admin-sdks-server-side/php-admin-sdk', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, aperçu des SDK', 'url' => 'https://docs.fedapay.com/fr/sdks/overview', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, webhooks et événements', 'url' => 'https://docs.fedapay.com/fr/integration-api/webhooks', 'date' => '2026-10-05'],
        ['titre' => 'Stack Overflow, Developer Survey 2025 : technologies', 'url' => 'https://survey.stackoverflow.co/2025/technology', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, versions d\'Android en Afrique (septembre 2026)', 'url' => 'https://gs.statcounter.com/android-version-market-share/mobile-tablet/africa', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : couverture des réseaux mobiles', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-mobile-network-coverage/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, recommandation sur les permissions et les applications mobiles (24 septembre 2024)', 'url' => 'https://www.cnil.fr/fr/permissions-applications-mobiles-recommandations-de-la-cnil-pour-respecter-la-vie-privee', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['api-rest', 'laravel-php', 'developpement-web', 'vibecoding', 'creer-son-saas', 'nextjs-react'],
        'services'    => ['application-mobile-android-ios', 'api-rest-integrations'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
