<?php
// ============================================================
// data/formations/developpement-web.php · Fiche formation « Développement web
// (HTML, CSS, JS, PHP, MySQL) » (vague 1B, lot A, domaine développement).
// Reprend l'ancienne page /formation-developpement-web (quatre paliers : socle
// HTML, CSS et JavaScript ; serveur PHP et MySQL ; outils du métier, module de
// deux jours ; développer avec l'IA ; publics, semaine type, jalons de mise en
// ligne, livrables, portfolio de trois projets, paiement par palier, groupes
// constitués, aucune certification d'éditeur visée) et l'ancienne fiche en base
// /services/formation-en-programmation (cours personnalisés, projets concrets,
// présentiel ou distance, supports inclus, suivi après la formation). Prix ignorés.
// Angle propre : des bases du web à un premier site dynamique. Laravel, React et
// Next.js, WordPress, la conception d'API et le SQL d'analyse relèvent des
// fiches sœurs, reliées par le champ 'liens' uniquement.
// Sources consultées le 05/10/2026 (php.net, W3Techs, Stack Overflow, OWASP,
// MySQL, MDN, VS Code, XAMPP, GitHub, Let's Encrypt, HTTP Archive, UIT, CNIL,
// SGG du Bénin, FDFP, 3FPT, France Compétences).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation développement web : de HTML, CSS et JavaScript à une première application PHP et MySQL, mise en ligne par chaque participant',
    'title'   => 'Formation développement web : HTML à PHP | Richard SALANON',
    'meta'    => 'Formation au développement web pour débutants : HTML, CSS et JavaScript, puis PHP et MySQL, jusqu\'à une application mise en ligne. Prix sur devis.',
    'en_bref' => 'Une formation qui part de zéro et mène chaque participant jusqu\'à une application web dynamique en PHP et MySQL, mise en ligne sur un vrai hébergement avec son code versionné dans Git. Elle s\'adresse aux débutants complets, aux personnes en reconversion, aux entrepreneurs et aux équipes qui veulent reprendre la main sur leur site. Le parcours complet compte dix jours, soit vingt demi-journées en quatre paliers, étalés sur dix à vingt semaines, en intra, en inter, à distance ou en formule hybride ; chaque palier peut aussi se suivre seul. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => true,
    'duree'   => '10 jours (20 demi-journées en 4 paliers), sur 10 à 20 semaines ; module « outils du métier » seul en 2 jours',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '10 jours en 20 demi-journées, sur 10 à 20 semaines'],
        ['l' => 'Public', 'v' => 'Débutants, reconversions, entrepreneurs, équipes qui gèrent un site'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, dix participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comment fonctionne le web, et un poste de travail prêt',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qui se passe entre la saisie d\'une adresse et l\'affichage d\'une page : navigateur, nom de domaine, serveur, requête et réponse.',
                'Installation vérifiée sur chaque poste : Visual Studio Code, un navigateur avec ses outils de développement, un dossier de travail bien rangé.',
                'Première page HTML écrite à la main, avec titres, paragraphes, liens et images, ouverte dans le navigateur.',
                'Ouvrir l\'inspecteur sur un site connu pour constater que tout ce qui s\'affiche est du texte que l\'on peut lire.',
                'Exercice : la page d\'accueil du projet fil rouge choisi par chaque participant, souvent l\'activité d\'un proche ou la sienne.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : un HTML qui a du sens, formulaires compris',
            'duree'  => '3 h 30',
            'points' => [
                'Les balises de structure (en-tête, navigation, contenu principal, pied de page) et ce qu\'en font Google et les lecteurs d\'écran.',
                'Listes, tableaux, images avec texte alternatif, liens entre les pages d\'un même site.',
                'Les formulaires côté HTML : étiquettes, types de champs (courriel, téléphone, date), champs obligatoires.',
                'Passer ses pages au validateur du W3C et corriger chaque erreur signalée, une par une.',
                'Exercice : les trois ou quatre pages du site fil rouge, reliées par un menu commun.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : CSS, la cascade et le modèle de boîte',
            'duree'  => '3 h 30',
            'points' => [
                'Sélecteurs, cascade, héritage et spécificité : comprendre pourquoi une règle « ne s\'applique pas ».',
                'Le modèle de boîte (contenu, marge intérieure, bordure, marge extérieure), observé dans l\'inspecteur.',
                'Couleurs, polices, tailles relatives et contraste suffisant pour lire en plein soleil sur un téléphone.',
                'Ranger une feuille de style pour qu\'un autre, ou soi-même dans six mois, la relise sans peine.',
                'Exercice : la charte graphique du site fil rouge appliquée à toutes ses pages.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : mise en page adaptée au téléphone, et premier site en ligne',
            'duree'  => '3 h 30',
            'points' => [
                'Flexbox et Grid pour les mises en page courantes : menu, colonnes, cartes, pied de page.',
                'Concevoir d\'abord pour l\'écran du téléphone, puis élargir avec les requêtes média.',
                'Alléger les images : format, dimensions, chargement différé, poids total de la page mesuré.',
                'Publication du site statique sur un hébergement réel, à une adresse que chacun peut ouvrir.',
                'Jalon : chaque participant ouvre son site sur son propre téléphone devant le groupe.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : JavaScript, les bases du langage et la page',
            'duree'  => '3 h 30',
            'points' => [
                'Variables, types, conditions, boucles et fonctions, sur des exemples pris dans le site fil rouge.',
                'La console du navigateur : afficher une valeur, lire une erreur, aller à la ligne fautive.',
                'Sélectionner un élément de la page, changer son texte, ses classes ou son affichage.',
                'Réagir à un clic ou à une saisie avec les écouteurs d\'événements.',
                'Exercice : un menu qui s\'ouvre sur mobile et une foire aux questions dépliable.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : JavaScript au service des formulaires et des données',
            'duree'  => '3 h 30',
            'points' => [
                'Vérifier un formulaire avant l\'envoi et afficher un message clair à côté du champ en cause.',
                'Tableaux et objets : afficher une liste de produits ou de services à partir de données.',
                'Pourquoi un contrôle fait dans le navigateur ne protège rien : le serveur revérifiera tout au palier suivant.',
                'Lire un message d\'erreur rédigé en anglais et remonter à sa cause, méthode répétée en groupe.',
                'Jalon du palier 1 : site statique complet, en ligne, avec son code relu par le formateur.',
            ],
        ],
        [
            'titre'  => 'Jour 4, matin : du statique au dynamique, premiers pas en PHP',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que fait le serveur d\'un fichier PHP, et pourquoi le visiteur ne voit jamais ce code.',
                'Environnement local avec XAMPP (Apache, PHP, MariaDB), et le compte administrateur de la base livré sans mot de passe.',
                'Variables, tableaux, conditions, boucles et fonctions en PHP, comparés à ce qui a été vu en JavaScript.',
                'Inclure l\'en-tête et le pied de page une seule fois, pour ne plus recopier le menu sur chaque page.',
                'Exercice : le site fil rouge converti en PHP, sans aucun changement visible pour le visiteur.',
            ],
        ],
        [
            'titre'  => 'Jour 4, après-midi : traiter un formulaire sur le serveur',
            'duree'  => '3 h 30',
            'points' => [
                'Recevoir un formulaire envoyé en POST, valider chaque champ côté serveur, renvoyer les erreurs au visiteur.',
                'Échapper tout ce qui s\'affiche pour empêcher l\'injection de script dans la page (XSS).',
                'Envoyer un courriel de notification, et comprendre pourquoi il finit parfois dans les indésirables.',
                'Freiner les envois automatiques : jeton de formulaire, champ piège, limite par adresse.',
                'Exercice : le formulaire de contact ou de demande de devis du site fil rouge, réellement fonctionnel.',
            ],
        ],
        [
            'titre'  => 'Jour 5, matin : concevoir une base de données MySQL',
            'duree'  => '3 h 30',
            'points' => [
                'Tables, colonnes, types et clé primaire : modéliser les données du projet sur papier avant l\'ordinateur.',
                'Relations entre tables : un client passe plusieurs commandes, une commande compte plusieurs lignes.',
                'Créer la base dans phpMyAdmin, puis écrire les mêmes ordres à la main : CREATE TABLE, INSERT, SELECT, UPDATE, DELETE.',
                'Pourquoi une information ne doit être enregistrée qu\'à un seul endroit.',
                'Exercice : le schéma de l\'application du palier 2, relu par le groupe avant toute ligne de PHP.',
            ],
        ],
        [
            'titre'  => 'Jour 5, après-midi : relier PHP et MySQL sans ouvrir de faille',
            'duree'  => '3 h 30',
            'points' => [
                'Se connecter avec PDO et garder les identifiants dans un fichier de configuration jamais partagé.',
                'Requêtes préparées pour toute donnée venue du visiteur, après une démonstration d\'injection SQL sur une copie volontairement vulnérable.',
                'Lister, afficher, créer, modifier, supprimer : les quatre gestes de toute application de gestion.',
                'Intercepter les erreurs de base de données sans montrer de détail technique au visiteur.',
                'Exercice : enregistrer les demandes du formulaire en base et les afficher dans une page de liste.',
            ],
        ],
        [
            'titre'  => 'Jour 6, matin : comptes, sessions et espace d\'administration',
            'duree'  => '3 h 30',
            'points' => [
                'Inscription et connexion : mot de passe haché avec password_hash, vérifié avec password_verify, jamais stocké en clair.',
                'Les sessions PHP : rester connecté, se déconnecter, expirer après inactivité.',
                'Protéger chaque page d\'administration sur le serveur, et pas seulement en masquant le lien du menu.',
                'Des rôles simples : qui consulte, qui modifie, qui supprime.',
                'Exercice : l\'espace d\'administration de l\'application, fermé aux comptes non autorisés.',
            ],
        ],
        [
            'titre'  => 'Jour 6, après-midi : fichiers envoyés, listes longues et jalon du palier 2',
            'duree'  => '3 h 30',
            'points' => [
                'Recevoir une image ou un justificatif : contrôle du type, de la taille, du nom et du dossier de destination.',
                'Paginer et filtrer une liste qui grandit chaque semaine.',
                'Relecture collective du code de chacun à partir des catégories de l\'OWASP : contrôle d\'accès, injection, configuration.',
                'Jalon du palier 2 : l\'application tourne en local, avec ses données de test et son administration protégée.',
            ],
        ],
        [
            'titre'  => 'Jour 7, matin : versionner son travail avec Git et GitHub',
            'duree'  => '3 h 30',
            'points' => [
                'À quoi sert le versionnage : revenir en arrière, savoir ce qui a changé, travailler à plusieurs.',
                'Les commandes du quotidien (init, add, commit, log, diff) et des messages de commit qui racontent le travail.',
                'Une branche, une fusion, puis un conflit provoqué exprès et résolu calmement.',
                'Publier sur GitHub avec un fichier .gitignore et un modèle de configuration : aucun mot de passe dans le dépôt.',
                'Exercice : les projets des paliers 1 et 2 repris proprement dans deux dépôts.',
            ],
        ],
        [
            'titre'  => 'Jour 7, après-midi : hébergement, nom de domaine et HTTPS',
            'duree'  => '3 h 30',
            'points' => [
                'Hébergement mutualisé, serveur privé virtuel ou plateforme : ce que chacun permet, ce qu\'il exige de vous.',
                'Réserver un nom de domaine au nom du propriétaire du projet, puis régler ses enregistrements DNS.',
                'Certificat HTTPS gratuit avec Let\'s Encrypt, et redirection de toutes les adresses vers HTTPS.',
                'Choisir la version de PHP de l\'hébergement en vérifiant qu\'elle reçoit encore des correctifs.',
                'Exercice : préparer l\'hébergement qui recevra l\'application du palier 2.',
            ],
        ],
        [
            'titre'  => 'Jour 8, matin : mettre en production et diagnostiquer une panne',
            'duree'  => '3 h 30',
            'points' => [
                'Transférer les fichiers, créer la base de production, importer le schéma, régler les accès.',
                'Séparer développement et production : affichage des erreurs coupé, journaux activés.',
                'Diagnostiquer une page blanche, une erreur 500 ou une base injoignable en lisant les journaux du serveur.',
                'Sauvegarder fichiers et base, puis vérifier que la restauration fonctionne vraiment.',
                'Exercice : l\'application du palier 2 en ligne, à son adresse définitive.',
            ],
        ],
        [
            'titre'  => 'Jour 8, après-midi : vitesse, bases du référencement technique et entretien',
            'duree'  => '3 h 30',
            'points' => [
                'Mesurer le poids et le temps de chargement d\'une page sur une connexion mobile simulée, puis l\'alléger.',
                'Ce que le code doit fournir aux moteurs : balise title, description, hiérarchie des titres, adresses lisibles.',
                'Mettre à jour PHP et les bibliothèques sur une copie du site avant de toucher la production.',
                'Rédiger le fichier LISEZMOI du projet : installation, configuration, sauvegarde, restauration.',
                'Jalon du palier 3 : deux projets en ligne, versionnés et documentés.',
            ],
        ],
        [
            'titre'  => 'Jour 9, matin : l\'assistant d\'IA comme tuteur, pas comme auteur',
            'duree'  => '3 h 30',
            'points' => [
                'Faire expliquer une erreur ou un extrait de code par un assistant, puis contrôler l\'explication dans MDN ou le manuel PHP.',
                'Faire relire son propre code et séparer les remarques justes des inventions.',
                'Les erreurs fréquentes des assistants sur ce socle : fonctions qui n\'existent pas, failles, syntaxe d\'une version ancienne de PHP.',
                'Règle du parcours : aucune ligne générée n\'entre dans un projet si son auteur ne sait pas l\'expliquer.',
            ],
        ],
        [
            'titre'  => 'Jour 9, après-midi : cadrer le projet final',
            'duree'  => '3 h 30',
            'points' => [
                'Chaque participant présente un besoin réel : celui de son entourage, de son employeur ou de sa propre activité.',
                'Une fiche d\'une page : utilisateurs, écrans, données enregistrées, et ce qui reste hors du projet.',
                'Découpage en tâches d\'une à deux heures, avec une date de mise en ligne fixée devant le groupe.',
                'Schéma de base de données et croquis des écrans relus par les autres participants.',
            ],
        ],
        [
            'titre'  => 'Jour 10, matin : revue de code croisée du projet final',
            'duree'  => '3 h 30',
            'points' => [
                'Chacun relit le code d\'un autre avec une grille commune : sécurité, lisibilité, erreurs gérées, données validées.',
                'Correction en direct des points bloquants relevés.',
                'Tests à la main sur téléphone et sur ordinateur, avec des saisies volontairement fausses ou vides.',
                'Préparer la démonstration : ce que fait le projet, ce qui manque encore, ce qui viendra ensuite.',
            ],
        ],
        [
            'titre'  => 'Jour 10, après-midi : démonstration, évaluation et suite du parcours',
            'duree'  => '3 h 30',
            'points' => [
                'Démonstration du projet final en ligne, code ouvert devant le groupe.',
                'Évaluation individuelle : une modification demandée sur place, réalisée seul en temps limité.',
                'Bilan du portfolio : trois projets en ligne, trois dépôts Git, un fichier LISEZMOI par projet.',
                'Plan personnel pour les trois mois suivants : quoi pratiquer, à quel rythme, et quelle spécialisation viser ensuite.',
                'Remise des supports, des corrigés et de l\'attestation de fin de formation.',
            ],
        ],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Un site peut aujourd\'hui sortir d\'un générateur sans que personne sache lire ce qu\'il contient. C\'est justement ce qui rend les bases plus précieuses : savoir dire pourquoi une page est lente, pourquoi un formulaire laisse passer n\'importe quoi, pourquoi une base de données renvoie une information fausse. Cette formation construit ces bases dans l\'ordre, du HTML à une application en PHP et MySQL, et chaque notion arrive au moment où le projet en a besoin, pas avant.',
                'À la fin du parcours, chaque participant a construit et mis en ligne trois projets : un site statique adapté au téléphone, une application avec base de données, comptes utilisateurs et espace d\'administration, puis un projet final choisi par lui. Leur code est publié dans des dépôts Git propres. Il sait lire un message d\'erreur, chercher la cause plutôt que le symptôme, sauvegarder et restaurer un site, et expliquer chaque ligne qu\'il a écrite ou acceptée d\'un assistant.',
                'Le choix de PHP et MySQL est un parti pris. Selon <a href="https://w3techs.com/technologies/details/pl-php">W3Techs</a>, PHP était utilisé, au 4 octobre 2026, par 69,8 % des sites dont le langage côté serveur est connu. C\'est la pile que l\'on retrouve chez les PME, celle que proposent tous les hébergements d\'entrée de gamme, et celle qui permet ensuite de comprendre un framework au lieu de le subir.',
                'Ce qui n\'est pas couvert ici a sa propre formation : le framework Laravel, React et Next.js, l\'administration d\'un site WordPress ou d\'une boutique WooCommerce, la conception d\'une API et le SQL d\'analyse pour les métiers. Le développement avec des assistants de code est le sujet de la <a href="/formations/vibecoding">formation vibecoding</a>, qui se suit bien après celle-ci. L\'ensemble du domaine est présenté sur la page <a href="/formations/domaine/developpement">formations en développement</a>.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quels objectifs chaque participant doit-il atteindre seul, en fin de parcours ?',
            'items' => [
                'Écrire une page HTML valide et structurée, lisible par un lecteur d\'écran, sans copier de modèle.',
                'Mettre en forme un site de trois pages en CSS, lisible sur un téléphone d\'entrée de gamme comme sur un ordinateur.',
                'Ajouter en JavaScript un comportement simple (menu, contrôle de formulaire) et corriger une erreur signalée dans la console.',
                'Traiter un formulaire en PHP en validant chaque champ sur le serveur et en échappant tout ce qui s\'affiche.',
                'Concevoir une base MySQL de trois à cinq tables reliées, et l\'interroger avec des requêtes préparées.',
                'Créer un espace d\'administration protégé par des comptes dont les mots de passe sont hachés.',
                'Versionner un projet dans Git et le publier sur GitHub sans y laisser aucun secret.',
                'Mettre une application en ligne avec HTTPS, puis la sauvegarder et la restaurer.',
                'Diagnostiquer une page blanche ou une erreur 500 à partir des journaux du serveur.',
                'Réaliser seul, en temps limité, une modification demandée sur son propre projet.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Le parcours accepte les débutants complets. Ce qui compte n\'est pas le diplôme, mais la régularité : quelques heures de pratique chaque semaine entre les séances. Un test de positionnement de quinze minutes, avant l\'inscription, sert à placer chacun dans un groupe de niveau proche.',
            'items' => [
                ['titre' => 'Étudiants et jeunes diplômés', 'texte' => 'Ils veulent un métier technique et des preuves à montrer. Trois projets en ligne, avec un code que l\'on peut ouvrir, disent davantage à un recruteur ou à un client qu\'une attestation seule.'],
                ['titre' => 'Personnes en reconversion', 'texte' => 'Comptables, enseignants, commerciaux, techniciens : le développement web ne demande pas de mathématiques avancées. Il demande de la logique, de la patience devant une erreur et un rythme tenu dans la durée.'],
                ['titre' => 'Entrepreneurs et porteurs de projet', 'texte' => 'Ils veulent construire eux-mêmes la première version de leur outil, ou au moins comprendre ce que livre leur prestataire, au lieu de chercher tout de suite un budget de développement.'],
                ['titre' => 'Équipes qui gèrent un site', 'texte' => 'Chargés de communication, responsables informatiques de petites structures, assistants qui mettent à jour des pages : le premier palier suffit souvent pour corriger une page, comprendre un devis et dialoguer d\'égal à égal avec un développeur.'],
                ['titre' => 'Autodidactes bloqués en route', 'texte' => 'Ils ont suivi des dizaines de tutoriels sans jamais terminer un projet. Le parcours leur impose un fil rouge, des échéances et une relecture de leur code, ce qui manque presque toujours à l\'apprentissage en solitaire.'],
                ['titre' => 'Prérequis', 'texte' => 'Savoir utiliser un ordinateur au quotidien : créer un dossier, enregistrer un fichier, naviguer sur Internet. Lire l\'anglais n\'est pas exigé, mais les messages d\'erreur et une partie de la documentation sont en anglais ; la formation apprend à s\'en servir.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur portable personnel, même modeste ou d\'occasion, sous Windows, macOS ou Linux, avec les droits pour installer des logiciels. Une tablette ou un téléphone ne suffisent pas pour écrire du code. Une connexion est utile à chaque séance, indispensable à distance.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels projets chaque participant construit-il, et sur quels cas ?',
            'items' => [
                ['titre' => 'Projet 1 : un site statique en ligne', 'duree' => 'Palier 1, jours 1 à 3', 'texte' => 'Trois ou quatre pages pour une activité réelle : la boutique d\'un parent, l\'association du quartier, le cabinet où l\'on travaille, sa propre offre. Le site est mis en ligne dès la fin du palier et testé sur le téléphone de chacun. En intra, le projet peut être une page que l\'entreprise attend vraiment.'],
                ['titre' => 'Projet 2 : une application avec base de données', 'duree' => 'Palier 2, jours 4 à 6', 'texte' => 'Une application de gestion à la mesure d\'un débutant : prise de rendez-vous, suivi des commandes d\'une boutique, inscription à un événement, registre de demandes. Elle comporte un formulaire public, une base MySQL, des comptes et un espace d\'administration qui liste, modifie et supprime.'],
                ['titre' => 'Mise en production des deux projets', 'duree' => 'Palier 3, jours 7 et 8', 'texte' => 'Les deux projets passent dans Git, puis l\'application est installée sur un hébergement réel avec un nom de domaine, HTTPS, une sauvegarde testée et un fichier qui explique comment tout réinstaller. C\'est le palier qui sépare un exercice d\'un site qui sert.'],
                ['titre' => 'Projet final choisi par le participant', 'duree' => 'Palier 4, jours 9 et 10, plus le travail personnel', 'texte' => 'Un besoin réel, cadré sur une page, découpé en tâches, relu par un autre participant, puis présenté en ligne devant le groupe. En formation intra, il peut s\'agir d\'un petit outil interne demandé par un service, construit sur des données de test.'],
                ['titre' => 'Exercices sur les cas de l\'entreprise', 'duree' => 'Formations intra', 'texte' => 'Quand une organisation forme ses équipes, les exercices reprennent ses propres pages, ses formulaires et ses listes, avec des données anonymisées. Les participants travaillent sur une copie, jamais sur le site en production.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se déroule une semaine du parcours, entre deux séances ?',
            'paragraphes' => [
                'Le parcours tient sur un cycle hebdomadaire stable, parce que la régularité prédit mieux la réussite que le niveau de départ. Chaque séance commence par la relecture des travaux de la semaine, continue par une démonstration courte de la notion du jour, puis lance l\'exercice suivant, commencé sur place pour que personne ne reparte devant une page vide. Au rythme d\'une demi-journée par semaine, le samedi matin ou en deux soirées, le parcours dure vingt semaines ; à deux demi-journées par semaine, dix.',
                'Entre deux séances, le travail personnel représente quelques heures, annoncées dès le test de positionnement : c\'est là que l\'apprentissage se fait. Le groupe dispose d\'un canal commun. Une question posée avec son message d\'erreur et le bout de code concerné reçoit une piste, rarement la solution toute faite, car apprendre à chercher fait partie du programme. Un blocage qui dure plus de vingt-quatre heures donne lieu à un court échange en visioconférence.',
                'Chaque palier se termine par un jalon : le projet est en ligne, son auteur le montre et ouvre son code devant le groupe. Ces rendez-vous créent l\'échéance qui fait finir. Celui qui manque une semaine rattrape sans difficulté ; celui qui décroche d\'un palier entier a une conversation franche avec le formateur sur le rythme, et le parcours est ajusté ou mis en pause proprement plutôt que de traîner.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelle méthode pédagogique, et que reçoit-on après les séances ?',
            'intro' => 'La formation inverse la proportion habituelle des cours en ligne : peu de démonstration, beaucoup de construction, et l\'aide arrive sur le problème du participant, pas sur un exemple générique.',
            'items' => [
                ['titre' => 'Des groupes de dix au plus', 'texte' => 'Au-delà, le formateur ne peut plus passer derrière chaque écran. Les groupes sont composés après le test de positionnement, pour que personne ne s\'ennuie ni ne décroche.'],
                ['titre' => 'Lire les erreurs, à chaque séance', 'texte' => 'Devant un message d\'erreur, le réflexe du débutant est la panique ou le copier-coller. Le parcours répète la même méthode : lire, situer la ligne, formuler une hypothèse, tester. C\'est la compétence qui sert le plus longtemps.'],
                ['titre' => 'Une revue de code chaque semaine', 'texte' => 'Le formateur ne dit pas seulement « ton erreur est ligne 12 », il montre comment il l\'aurait cherchée. Les remarques sont écrites dans le dépôt Git du participant, qui garde ainsi la trace de ses progrès.'],
                ['titre' => 'Finir, toujours', 'texte' => 'Les derniers pas d\'un projet (cas d\'erreur, champs vides, mise en ligne, sauvegarde) contiennent l\'essentiel du métier. Aucun palier ne se clôt sur un projet inachevé.'],
                ['titre' => 'Des supports qui restent', 'texte' => 'Fiches par notion, exercices et corrigés, grille de relecture, procédure de mise en ligne : tout est remis au participant ou à l\'entreprise, dans un format modifiable.'],
                ['titre' => 'Un suivi après la dernière séance', 'texte' => 'Pendant la période convenue au devis, les questions d\'application restent possibles sur le canal du groupe, et une relecture du projet final corrigé peut être prévue quelques semaines plus tard.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quelles versions utilise-t-on, et combien coûtent-ils ?',
            'legende' => 'Tarifs et versions relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les comptes et abonnements sont ouverts au nom du participant ou de l\'entreprise, jamais au nom du formateur.',
            'entetes' => ['Outil', 'Usage dans la formation', 'Version ou offre retenue', 'Coût d\'éditeur'],
            'lignes'  => [
                ['Visual Studio Code', 'Éditeur de code de tous les paliers', 'Version stable du jour', 'Gratuit pour un usage privé ou commercial, selon la FAQ de l\'éditeur'],
                ['Navigateur et ses outils de développement', 'Inspecteur, console, mesure du poids des pages', 'Firefox ou Chrome à jour', 'Gratuit'],
                ['XAMPP', 'Serveur local : Apache, PHP, MariaDB', 'Version 8.2.12 pour Windows, la dernière proposée', 'Gratuit, selon Apache Friends'],
                ['PHP', 'Langage côté serveur', '8.4 ou 8.5 en production ; la branche 8.2 ne reçoit plus que des correctifs de sécurité jusqu\'au 31 décembre 2026', 'Gratuit'],
                ['MySQL ou MariaDB', 'Base de données de l\'application', 'MySQL 8.4 LTS, ou MariaDB fournie par l\'hébergement', 'Édition communautaire gratuite'],
                ['Git et GitHub', 'Versionnage et publication du code', 'Offre GitHub Free', '0 dollar par mois, dépôts publics et privés illimités'],
                ['Let\'s Encrypt', 'Certificat HTTPS', 'Certificat automatique', 'Gratuit'],
                ['Hébergement et nom de domaine', 'Mise en ligne des projets', 'Hébergement mutualisé avec PHP 8.4 au moins', 'Payant, variable selon l\'hébergeur et l\'extension du domaine ; pris au nom du participant'],
                ['MDN et manuel PHP', 'Documentation de référence', 'Versions en ligne, en français quand elles existent', 'Gratuit'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent ces technologies aujourd\'hui ?',
            'items' => [
                ['valeur' => '69,8 %', 'libelle' => 'Part des sites utilisant PHP parmi ceux dont le langage côté serveur est connu, au 4 octobre 2026', 'source' => 'W3Techs', 'url' => 'https://w3techs.com/technologies/details/pl-php'],
                ['valeur' => '7,8 %', 'libelle' => 'Part des sites en PHP qui tournent encore sur PHP 5, une version abandonnée depuis des années (W3Techs, 4 octobre 2026)', 'source' => 'W3Techs', 'url' => 'https://w3techs.com/technologies/details/pl-php'],
                ['valeur' => '66 %', 'libelle' => 'Part des 31 771 répondants qui utilisent JavaScript, devant HTML et CSS (61,9 %) et SQL (58,6 %), dans l\'enquête 2025', 'source' => 'Stack Overflow, Developer Survey 2025', 'url' => 'https://survey.stackoverflow.co/2025/technology'],
                ['valeur' => '40,5 %', 'libelle' => 'Part des répondants qui utilisent MySQL, selon la même enquête 2025', 'source' => 'Stack Overflow, Developer Survey 2025', 'url' => 'https://survey.stackoverflow.co/2025/technology'],
                ['valeur' => '2 311 Ko', 'libelle' => 'Poids médian d\'une page web sur mobile, mesuré en octobre 2024', 'source' => 'HTTP Archive, Web Almanac 2024', 'url' => 'https://almanac.httparchive.org/en/2024/page-weight'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine qui utilise Internet en 2025, contre 74 % dans le monde', 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent ces chiffres pour quelqu\'un qui apprend en 2026 ?',
            'paragraphes' => [
                'D\'abord, que le socle reste le même. Dans l\'enquête 2025 de Stack Overflow, JavaScript (66 %), HTML et CSS (61,9 %) puis SQL (58,6 %) sont les langages les plus utilisés par les 31 771 développeurs qui ont répondu à cette question. Ce sont exactement les trois premiers paliers du parcours. PHP n\'y pèse que 18,9 %, mais il fait tourner la grande majorité des sites existants, donc la plupart des sites qu\'un débutant aura à reprendre ou à maintenir.',
                'Ensuite, qu\'une grande partie du web vieillit mal. Le relevé de W3Techs au 4 octobre 2026 indique que 7,8 % des sites en PHP tournent encore sur PHP 5. Le <a href="https://www.php.net/supported-versions.php">calendrier officiel de PHP</a> prévoit deux ans de support actif puis deux ans de correctifs de sécurité seuls pour chaque branche : au-delà, plus rien. Savoir vérifier la version d\'un hébergement, puis faire une mise à jour sur une copie, fait donc partie des bases enseignées.',
                'Enfin, que la sécurité n\'est pas un module avancé. Dans le classement 2025 de l\'<a href="https://top10.owasp.org/2025">OWASP Top 10</a>, la défaillance du contrôle d\'accès arrive en première position et l\'injection en cinquième. Ce sont précisément les erreurs d\'un débutant qui protège ses pages d\'administration en cachant un lien, ou qui colle une saisie dans une requête SQL. Le parcours les traite dès le premier formulaire, avec les requêtes préparées et le hachage des mots de passe.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le métier ou le pays ?',
            'items' => [
                ['secteur' => 'Commerce de détail, à Cotonou ou à Lomé', 'probleme' => 'La gérante a payé un site il y a deux ans ; le prestataire ne répond plus, et changer un horaire ou un prix devient une affaire de semaines.', 'solution' => 'Le premier palier seul, avec un exercice sur une copie du site : elle apprend à lire et modifier ses pages, à vérifier l\'affichage sur téléphone et à savoir ce qu\'il faut exiger du prochain prestataire.'],
                ['secteur' => 'ONG ou projet financé, au Burkina Faso ou au Niger', 'probleme' => 'Les inscriptions aux sessions de terrain se font sur papier puis sont ressaisies dans un tableur, avec des données personnelles qui circulent par courriel.', 'solution' => 'Deux agents suivent les paliers 1 et 2 à distance et construisent un formulaire d\'inscription relié à une base, avec des comptes protégés et une collecte limitée aux champs utiles.'],
                ['secteur' => 'École, centre de formation ou incubateur, à Abidjan ou à Dakar', 'probleme' => 'Les apprenants accumulent les tutoriels mais n\'ont aucun projet terminé à montrer en fin d\'année.', 'solution' => 'Le parcours complet pour une promotion, au rythme de l\'établissement, avec un projet fil rouge par apprenant et des jalons de mise en ligne qui deviennent des rendez-vous internes.'],
                ['secteur' => 'PME de services, à Douala ou à Libreville', 'probleme' => 'L\'équipe suit ses demandes de devis dans un cahier et voudrait un petit outil interne, sans encore savoir ce qu\'elle pourrait demander à un développeur.', 'solution' => 'Un employé suit le parcours et construit, comme projet final, un prototype sur données de test. L\'entreprise sait ensuite ce qu\'elle veut, et peut le faire reprendre proprement par une <a href="/services/application-web-sur-mesure">application web sur mesure</a> si le besoin grandit.'],
                ['secteur' => 'Service communication, en France ou en Belgique', 'probleme' => 'Les chargés de communication dépendent de l\'agence pour la moindre correction de page ou de gabarit de courriel.', 'solution' => 'Les paliers 1 et 3 en séances à distance de trois heures trente : HTML et CSS, puis Git et mise en ligne, sur une copie du site et sans toucher à la production.'],
                ['secteur' => 'Reconversion, au Québec ou en Suisse', 'probleme' => 'Une personne en poste veut changer de métier sans quitter son emploi tout de suite, et ne trouve pas de rythme compatible.', 'solution' => 'Le parcours en inter, à distance, une demi-journée par semaine calée sur son fuseau horaire, avec le portfolio de trois projets comme objectif concret.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir : intra, inter, à distance ou hybride ?',
            'legende' => 'Le format se décide après le test de positionnement. Chaque palier peut se suivre seul ; le palier 3 forme à lui seul le module « outils du métier » de deux jours.',
            'entetes' => ['Format', 'Pour qui', 'Rythme habituel', 'Ce qui change'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe, une école ou un incubateur qui forme ses propres membres', 'Deux demi-journées par semaine, sur dix semaines', 'Exercices sur les pages et les besoins de l\'organisation, groupes composés avec elle, jalons internes'],
                ['Inter-entreprises', 'Particuliers et salariés de structures différentes', 'Une demi-journée par semaine, sur vingt semaines', 'Projet fil rouge personnel, aucun document interne utilisé, groupe de dix au plus'],
                ['À distance', 'Participants dispersés, en Afrique, en Europe ou au Canada', 'Séances de trois heures trente, ou deux soirées par demi-journée', 'Partage d\'écran, relecture dans le dépôt Git, supports envoyés à l\'avance'],
                ['Hybride', 'Débutants complets qui gagnent à démarrer en salle', 'Palier 1 sur place, la suite à distance', 'Installation des postes et premiers pas accompagnés, puis rythme à distance'],
                ['Palier seul', 'Personnes qui ont déjà une partie des bases, ou un besoin ciblé', 'Six, six, quatre ou quatre demi-journées selon le palier', 'Test de positionnement pour vérifier le niveau d\'entrée du palier choisi'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun tarif n\'est publié : le prix est fixé sur devis, après le test de positionnement et un premier échange. Il peut se régler palier par palier, chaque palier étant payé avant de commencer, et l\'on peut s\'arrêter à la fin de n\'importe lequel avec des acquis complets. Moyens de paiement acceptés : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces.',
            'items'      => [
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Vingt demi-journées en quatre paliers', 'Trois projets en ligne', 'Revue de code hebdomadaire', 'Supports, corrigés et attestation']],
                ['offre' => 'Palier seul', 'prix' => 'Sur devis', 'inclus' => ['Socle, serveur, outils du métier ou projet final', 'Test de positionnement', 'Jalon de mise en ligne', 'Supports du palier']],
                ['offre' => 'Module « outils du métier »', 'prix' => 'Sur devis', 'inclus' => ['Deux jours', 'Git, hébergement, domaine, HTTPS', 'Mise en production et sauvegarde', 'Procédure écrite']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Questions d\'application', 'Relecture du projet final corrigé', 'Séance de point à un mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, dix personnes au plus par groupe.',
                'Le nombre de paliers retenus, du palier seul au parcours complet.',
                'Le mode : sur place à Cotonou, dans vos locaux, à distance ou en formule hybride.',
                'Les déplacements hors de Cotonou et la location d\'une salle, le cas échéant.',
                'La préparation d\'exercices sur les pages et les besoins réels de l\'organisation, en intra.',
                'La durée du suivi après la dernière séance.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on faire financer la formation par un fonds public ?',
            'paragraphes' => [
                'Parfois, sans jamais de garantie. Chaque fonds fixe ses propres règles, qui portent à la fois sur l\'entreprise, sur le participant et sur le prestataire. Ce qui suit a été vérifié le 5 octobre 2026 sur les pages officielles des fonds ; seule une réponse écrite du fonds, pour votre dossier, fait foi.',
                'En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/procedures-dhabilitation/">FDFP sur l\'habilitation</a> impose celle-ci à tout opérateur de formation privé qui prétend à ses financements, à l\'exception des structures basées hors de Côte d\'Ivoire, et la prononce pour une année. Un formateur installé au Bénin relève donc de cette exception : demandez au FDFP, avant de signer, comment une telle formation peut entrer dans votre plan.',
                'Au Bénin, les statuts du Fonds de développement de la formation professionnelle continue et de l\'apprentissage (FODEFCA) ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> présente un guichet pour le personnel des entreprises et des organisations professionnelles, et un autre pour les demandes individuelles, utile à une personne en reconversion ; les demandes passent par sa plateforme en ligne.',
                'En France, selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, tout prestataire qui veut accéder aux fonds publics ou mutualisés doit être certifié Qualiopi depuis le 1er janvier 2022, ce qui vaut pour les OPCO comme pour le compte personnel de formation. Richard SALANON n\'affiche aucune certification Qualiopi ni aucun agrément de fonds : prévoyez la formation sur votre budget propre. Le détail des dispositifs par pays figure sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur de débutant coûte le plus cher une fois le site en ligne ?',
            'texte' => 'Publier un dépôt Git qui contient le mot de passe de la base de données, ou laisser en production le compte administrateur sans mot de passe livré par défaut avec un serveur local comme XAMPP. Les robots qui parcourent GitHub et Internet cherchent exactement cela, en continu. La règle enseignée dès le palier 2 : identifiants dans un fichier de configuration exclu du dépôt, un modèle sans secret à sa place, un compte de base dédié à l\'application avec les seuls droits utiles, et l\'affichage des erreurs coupé en production. Si un secret a été publié, même quelques minutes, on le change : le supprimer du dépôt ne suffit pas.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes après la formation, et comment les éviter ?',
            'intro' => 'Les semaines qui suivent la dernière séance décident de ce qui restera. Ce sont presque toujours les mêmes pièges.',
            'items' => [
                ['titre' => 'Arrêter de coder', 'texte' => 'Sans projet en cours, les acquis s\'effacent en quelques semaines. Le plan personnel remis au dernier jour fixe un petit chantier par mois ; le moindre site d\'un proche suffit à garder la main.'],
                ['titre' => 'Sauter trop vite à un framework', 'texte' => 'Attaquer Laravel ou React avant d\'être à l\'aise en PHP ou en JavaScript fait réciter des commandes sans les comprendre. Mieux vaut d\'abord refaire seul l\'application du palier 2, puis choisir une spécialisation.'],
                ['titre' => 'Accepter du code généré sans le lire', 'texte' => 'Un assistant produit vite un formulaire qui fonctionne en apparence, mais oublie souvent la validation côté serveur ou les requêtes préparées. La règle du parcours s\'applique encore : ce que l\'on ne sait pas expliquer n\'entre pas dans le projet.'],
                ['titre' => 'Laisser vieillir le site en ligne', 'texte' => 'Une version de PHP qui ne reçoit plus de correctifs, des bibliothèques jamais mises à jour : le site tourne jusqu\'au jour où il est compromis. Un rappel trimestriel, une mise à jour testée sur une copie, et le tour est joué.'],
                ['titre' => 'Ne jamais tester la restauration', 'texte' => 'Une sauvegarde que l\'on n\'a jamais restaurée reste une hypothèse. L\'exercice du jour 8 est à refaire seul, une fois par trimestre, sur un dossier de test.'],
                ['titre' => 'Mettre le domaine au nom d\'un tiers', 'texte' => 'Domaine et hébergement réservés au nom d\'un ami ou d\'un prestataire : le jour d\'une brouille, le site disparaît. On les prend à son propre nom, ou à celui de l\'entreprise.'],
                ['titre' => 'Ajouter des scripts sans les surveiller', 'texte' => 'Chaque script externe collé dans une page peut lire ce que saisit le visiteur. Le <a href="/histoires/british-airways-piratage">piratage du site de British Airways</a> en 2018 est parti d\'un fichier JavaScript modifié sur la page de paiement : on inventorie ses scripts et l\'on délègue la saisie de la carte à une passerelle de paiement.'],
                ['titre' => 'Modifier directement la production', 'texte' => 'Corriger un fichier en ligne « juste une fois » finit par une panne un vendredi soir. On modifie sur sa copie locale, on versionne, puis on déploie. La <a href="/histoires/tsb-migration">migration ratée de la banque TSB</a> en 2018 montre, à une autre échelle, le prix d\'un passage en production mal testé.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Selon les Facts and Figures 2025 de l\'<a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">Union internationale des télécommunications</a>, 36 % de la population africaine utilisait Internet en 2025, contre 74 % dans le monde. Beaucoup des futurs visiteurs d\'un site en Afrique francophone arrivent donc par un téléphone d\'entrée de gamme et des données mobiles coûteuses. Or le <a href="https://almanac.httparchive.org/en/2024/page-weight">Web Almanac 2024</a> mesurait en octobre 2024 un poids médian de 2 311 Ko par page sur mobile. Le parcours apprend à faire beaucoup plus léger, et à le vérifier.',
                'La connexion pèse aussi sur la formation elle-même. Les logiciels sont installés à la première séance ou avant, la documentation utile est téléchargée, les exercices se font hors ligne quand il le faut, et chaque séance à distance a une solution de repli : partage de connexion, séance enregistrée avec l\'accord du groupe, ou report court.',
                'Les séances se donnent en français, avec des supports en français, mais les messages d\'erreur, une partie de la documentation et la plupart des forums restent en anglais. Le parcours apprend à lire un message d\'erreur anglais et à chercher dans <a href="https://developer.mozilla.org/fr/docs/Learn_web_development">MDN</a> ou dans le manuel PHP, dont une grande partie existe en français. La formation peut aussi se donner entièrement en anglais quand une équipe le demande.',
                'Tout formulaire collecte des données personnelles. Au Bénin, leur traitement est encadré par la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> ; en Europe, par le RGPD, dont la CNIL détaille l\'application au code dans son <a href="https://www.cnil.fr/fr/guide-rgpd-du-developpeur">guide RGPD du développeur</a>. Le parcours en tire des réflexes concrets : ne demander que les champs utiles, hacher les mots de passe, protéger l\'administration, ne jamais exercer sur de vraies données.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que permet le parcours ensuite, sans promesse d\'emploi ?',
            'intro' => 'Personne ne peut promettre honnêtement un emploi ou des clients en fin de formation : cela dépend du temps investi et de la régularité. Le parcours ouvre en revanche des portes précises, preuves à l\'appui.',
            'items' => [
                ['titre' => 'Petites missions locales', 'texte' => 'Sites et petits outils pour les commerces et les associations de son entourage. Le portfolio en ligne sert de preuve, et les premières demandes viennent souvent des proches.'],
                ['titre' => 'Un poste en entreprise', 'texte' => 'Entretenir un site, un outil interne ou un formulaire relié à une base : la pile enseignée est celle que l\'on trouve dans beaucoup de PME et d\'administrations.'],
                ['titre' => 'Des missions à distance', 'texte' => 'Agences et entreprises francophones d\'Europe et du Canada confient des développements à distance. La marche est plus haute : elle exige la rigueur de livraison, Git et la documentation que le parcours impose.'],
                ['titre' => 'Construire son propre outil', 'texte' => 'Beaucoup arrivent avec une idée pour leur métier ou leur communauté. Le parcours leur permet d\'en construire seuls une première version, avant de chercher un budget.'],
                ['titre' => 'Se spécialiser', 'texte' => 'Laravel, React, WordPress, API ou SQL d\'analyse s\'apprennent bien plus vite sur ce socle, parce que l\'on comprend ce que l\'outil fait à sa place. Les formations correspondantes sont listées en bas de page.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre le développement web avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Le développement web est le premier sujet qu\'il a enseigné. D\'avril 2019 à août 2021, il est à la fois développeur junior et formateur chez VULCAIN-TECH, à Abomey-Calavi, où il initie des étudiants à HTML, CSS, JavaScript, PHP et WordPress tout en développant des applications. Au total, il indique avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes, du code aux ERP en passant par l\'IA et l\'automatisation.',
                'Il enseigne ce qu\'il pratique. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il développe des sites et des applications en PHP et en JavaScript, intervient comme <a href="/services/developpeur-web-freelance">développeur web freelance</a> et a travaillé, sur place ou à distance, dans ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et d\'Amérique du Nord. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Sa façon de former tient en quelques engagements que l\'on peut vérifier : une réponse sous 24 heures, un test de positionnement avant tout devis, des projets réels plutôt que des exercices isolés, une relecture du code chaque semaine, une évaluation sur une tâche faite seul, des supports qui restent au participant, et la franchise de dire quand une autre formation, ou aucune, convient mieux. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays où il intervient sur la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de vous inscrire ?',
            'texte' => 'Le développement web ne s\'apprend ni en deux jours ni en regardant des vidéos : il s\'apprend en finissant des projets, au rythme de quelques heures par semaine, avec quelqu\'un qui relit votre code. Choisissez un projet qui vous tient à cœur, réservez le temps de pratique avant la première séance, et visez trois projets en ligne plutôt qu\'un certificat.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous apprendre à construire et mettre en ligne vos propres applications web ?',
            'texte'  => 'Indiquez votre niveau actuel, votre objectif, le temps dont vous disposez chaque semaine et le format souhaité, ou, pour une équipe, le nombre de personnes et leurs postes. Vous recevez une réponse sous 24 heures, un test de positionnement, puis un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il être bon en mathématiques pour apprendre le développement web ?', 'r' => 'Non. Le développement web demande de la logique, de la patience devant une erreur et de la régularité, pas des mathématiques avancées. Dans la pratique, les abandons viennent presque toujours d\'un rythme de travail irrégulier, rarement du niveau scolaire.'],
        ['q' => 'Pourquoi PHP et MySQL plutôt que Python ou Node.js ?', 'r' => 'Parce que c\'est la pile qui fait tourner la majorité des sites existants (69,8 % des sites dont le langage serveur est connu, selon W3Techs au 4 octobre 2026), celle que proposent tous les hébergements d\'entrée de gamme et celle que l\'on rencontre dans les PME. Les autres langages s\'apprennent ensuite plus vite, sur les mêmes notions.'],
        ['q' => 'L\'intelligence artificielle ne rend-elle pas cette formation inutile ?', 'r' => 'Elle rend inutile d\'apprendre la syntaxe par cœur, pas d\'apprendre le métier. Relire un code généré, repérer une faille, structurer une base, diagnostiquer une panne : ces compétences comptent davantage depuis que tout le monde peut générer du code. Le parcours utilise l\'assistant comme tuteur, et la formation vibecoding prend le relais pour développer avec lui.'],
        ['q' => 'Combien de temps faut-il prévoir chaque semaine ?', 'r' => 'Une demi-journée de séance, ou deux au rythme intra, plus quelques heures de travail personnel, annoncées au test de positionnement. Sans ce travail entre les séances, le parcours ne tient pas : c\'est là que l\'apprentissage se fait.'],
        ['q' => 'Peut-on suivre la formation en gardant son emploi ?', 'r' => 'Oui. En inter, les séances ont lieu le samedi matin ou en deux soirées par semaine, à distance ou sur place, et le rythme se règle au départ. Ce qui ne se négocie pas, c\'est la régularité.'],
        ['q' => 'Quel ordinateur faut-il ?', 'r' => 'Un portable personnel, même modeste ou d\'occasion, sous Windows, macOS ou Linux, sur lequel vous pouvez installer des logiciels. Tous les outils utilisés sont gratuits : Visual Studio Code, XAMPP, Git, et l\'offre gratuite de GitHub. Seuls l\'hébergement et le nom de domaine sont payants, à votre nom.'],
        ['q' => 'Obtient-on un diplôme ou une certification ?', 'r' => 'Non. La formation délivre une attestation de fin de formation, et ne prépare à aucune certification d\'éditeur. Ce qu\'elle produit de plus utile, ce sont trois projets en ligne avec leur code consultable : c\'est ce que regardent d\'abord les clients et beaucoup de recruteurs.'],
        ['q' => 'Au bout de combien de temps peut-on trouver un emploi ou des clients ?', 'r' => 'Personne ne peut le promettre honnêtement : cela dépend du temps investi, de la régularité et du marché visé. Le parcours garantit le chemin, pas l\'arrivée : des projets finis, en ligne, avec un code que l\'on peut montrer.'],
        ['q' => 'Le parcours enseigne-t-il WordPress ou Laravel ?', 'r' => 'Non, chacun a sa formation dédiée, listée en bas de page. Le socle enseigné ici rend ensuite WordPress facile à prendre en main et à dépasser, et Laravel rapide à apprendre, parce que l\'on comprend ce que l\'outil fait à votre place en PHP et en MySQL.'],
        ['q' => 'Peut-on suivre un seul palier ?', 'r' => 'Oui. Chaque palier se suit seul, après un test de positionnement qui vérifie le niveau d\'entrée. Le palier 3, consacré à Git, à l\'hébergement et à la mise en production, forme un module de deux jours souvent demandé par des personnes qui codent déjà en local.'],
        ['q' => 'Peut-on régler en plusieurs fois ?', 'r' => 'Oui, palier par palier : chaque palier se règle avant de commencer, et l\'on peut s\'arrêter à la fin de n\'importe lequel avec des acquis complets. Le paiement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Une école ou une entreprise peut-elle inscrire un groupe entier ?', 'r' => 'Oui. Le parcours se donne en intra pour une promotion d\'école, un incubateur ou une équipe. Le programme reste le même ; le rythme, les exercices et la facturation s\'adaptent à la structure, et les jalons de mise en ligne deviennent des rendez-vous internes.'],
        ['q' => 'Peut-on rejoindre un groupe déjà commencé ?', 'r' => 'Non, sauf niveau vérifié équivalent au palier en cours : les groupes avancent ensemble, et une arrivée en route pénalise tout le monde. Le test de positionnement vous place plutôt dans le prochain groupe, ou directement sur le palier qui correspond à votre niveau.'],
        ['q' => 'La formation peut-elle se faire avec une connexion instable ?', 'r' => 'Oui, avec quelques précautions : logiciels installés et documentation téléchargée à l\'avance, exercices réalisables hors ligne, séances enregistrées avec l\'accord du groupe. Pour un débutant complet, la formule hybride, avec un premier palier sur place, évite l\'essentiel des difficultés.'],
    ],

    'sources' => [
        ['titre' => 'PHP, branches actuellement maintenues et calendrier de support', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-05'],
        ['titre' => 'W3Techs, statistiques d\'usage de PHP comme langage côté serveur', 'url' => 'https://w3techs.com/technologies/details/pl-php', 'date' => '2026-10-05'],
        ['titre' => 'Stack Overflow, Developer Survey 2025 : technologies les plus utilisées', 'url' => 'https://survey.stackoverflow.co/2025/technology', 'date' => '2026-10-05'],
        ['titre' => 'OWASP Top 10:2025', 'url' => 'https://top10.owasp.org/2025', 'date' => '2026-10-05'],
        ['titre' => 'Manuel PHP, fonction password_hash', 'url' => 'https://www.php.net/manual/fr/function.password-hash.php', 'date' => '2026-10-05'],
        ['titre' => 'Manuel PHP, requêtes préparées avec PDO', 'url' => 'https://www.php.net/manual/fr/pdo.prepared-statements.php', 'date' => '2026-10-05'],
        ['titre' => 'MySQL 8.4 Reference Manual, versions LTS et Innovation', 'url' => 'https://dev.mysql.com/doc/refman/8.4/en/mysql-releases.html', 'date' => '2026-10-05'],
        ['titre' => 'MDN Web Docs, apprendre le développement web', 'url' => 'https://developer.mozilla.org/fr/docs/Learn_web_development', 'date' => '2026-10-05'],
        ['titre' => 'Visual Studio Code, questions fréquentes (gratuité)', 'url' => 'https://code.visualstudio.com/docs/supporting/faq', 'date' => '2026-10-05'],
        ['titre' => 'Apache Friends, XAMPP', 'url' => 'https://www.apachefriends.org/', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, offres et tarifs', 'url' => 'https://github.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Let\'s Encrypt, autorité de certification gratuite', 'url' => 'https://letsencrypt.org/', 'date' => '2026-10-05'],
        ['titre' => 'HTTP Archive, Web Almanac 2024 : poids des pages', 'url' => 'https://almanac.httparchive.org/en/2024/page-weight', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, guide RGPD du développeur', 'url' => 'https://www.cnil.fr/fr/guide-rgpd-du-developpeur', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['vibecoding', 'laravel-php', 'nextjs-react', 'wordpress-woocommerce', 'api-rest', 'sql-analystes'],
        'services'    => ['developpeur-web-freelance', 'application-web-sur-mesure'],
        'comparatifs' => [],
    ],
];
