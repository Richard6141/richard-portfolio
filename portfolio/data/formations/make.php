<?php
// ============================================================
// data/formations/make.php · Fiche formation « Make de zéro à expert »
// (vague 1B, lot B). Reprend la partie Make de l'ancienne page
// /formation-automatisation (n8n et Make) : atelier d'une demi-journée,
// groupes réduits, cartographie des tâches, notification d'échec, registre
// des automatisations, accès dédiés. La sœur n8n traite les premiers flux
// n8n ; le comparatif n8n, Make et Zapier traite le choix de l'outil.
// Tarifs lus le 05/10/2026 sur make.com/en/pricing dans un navigateur
// (bascule mensuel et annuel vérifiée) ; règles de Make relevées le même
// jour dans son centre d'aide (help.make.com).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Make de zéro à expert : construire des scénarios fiables, maîtriser routeurs et itérateurs, et garder la facture de crédits sous contrôle',
    'title'   => 'Formation Make : de zéro à expert | Richard SALANON',
    'meta'    => 'Formation Make en trois jours : scénarios, routeurs, itérateurs, agrégateurs, erreurs, crédits, sur vos outils, pour automatiser sans exploser la facture.',
    'en_bref' => 'Cette formation apprend à des non-développeurs à construire, fiabiliser et chiffrer leurs scénarios Make : bundles, filtres, routeurs, itérateurs, agrégateurs, gestion des erreurs et lecture des crédits consommés. Elle s\'adresse aux équipes qui ont retenu Make, ou qui veulent un outil d\'automatisation entièrement en ligne, sans serveur à administrer. Elle dure trois jours, découpés en six demi-journées, ou une demi-journée en atelier de découverte, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'automatisation',
    'forte'   => false,
    'duree'   => '3 jours (6 demi-journées), ou atelier d\'une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : de la tâche répétitive au premier scénario Make',
            'duree'  => '3 h 30',
            'points' => [
                'Inventorier les gestes répétitifs de chaque poste et retenir celui que l\'on construira pendant les trois jours.',
                'Esquisser le scénario sur papier : l\'événement qui le lance, les modules, les routes, la personne prévenue en cas d\'échec.',
                'Visiter l\'éditeur : canevas, modules, connexions, bouton Run once, bulles qui affichent opérations et crédits.',
                'Créer les connexions avec les comptes de l\'entreprise, jamais avec la messagerie personnelle d\'un salarié.',
                'Premier scénario complet : une réponse de formulaire devient une ligne de Google Sheets et un accusé de réception.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : bundles, mapping, fonctions et planification',
            'duree'  => '3 h 30',
            'points' => [
                'Ouvrir les bulles d\'une exécution et lire un bundle : les données d\'un contact, d\'une commande, d\'un fichier.',
                'Comprendre pourquoi un déclencheur qui renvoie dix lignes fait tourner dix fois chacun des modules suivants.',
                'Mapper un champ, puis mettre en forme une date ou un montant avec les fonctions intégrées.',
                'Poser un filtre entre deux modules pour ne laisser passer que les commandes payées.',
                'Régler la planification et vérifier le fuseau horaire de l\'organisation avant toute exécution à heure fixe.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : routeurs, filtres et déclencheurs instantanés',
            'duree'  => '3 h 30',
            'points' => [
                'Brancher un scénario avec un routeur, ordonner les routes et prévoir une route de repli.',
                'Exercice : répartir les demandes entrantes entre devis, réclamation et autre demande, chacune vers la bonne personne.',
                'Comparer un déclencheur qui interroge une application à intervalles réguliers et un webhook qui réagit à l\'événement.',
                'Mesurer en direct ce que chaque choix coûte en crédits sur une journée de fonctionnement.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : itérateurs, agrégateurs et data stores',
            'duree'  => '3 h 30',
            'points' => [
                'Découper un tableau avec un itérateur : les pièces jointes d\'un courriel, les lignes d\'une commande.',
                'Recomposer avec un agrégateur de tableau, de texte ou d\'archive ; régler le module source et le regroupement.',
                'Garder une mémoire dans un data store pour ne jamais traiter deux fois la même facture.',
                'Exercice : remplacer vingt messages individuels par un récapitulatif quotidien unique, puis comparer les crédits.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : erreurs, exécutions incomplètes et fiabilité',
            'duree'  => '3 h 30',
            'points' => [
                'Lire l\'historique d\'un scénario et retrouver le module qui a échoué, avec le bundle qui l\'a fait échouer.',
                'Activer le stockage des exécutions incomplètes et observer les nouvelles tentatives automatiques.',
                'Choisir le bon gestionnaire d\'erreurs : Skip, Retry, Resume, Commit ou Rollback.',
                'Régler le traitement dans l\'ordre, le nombre d\'erreurs avant désactivation et la confidentialité des données.',
                'Brancher une alerte d\'échec qui atteint une personne nommée, sur une adresse qu\'elle lit vraiment.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : crédits, choix de l\'offre et mise en production',
            'duree'  => '3 h 30',
            'points' => [
                'Estimer la consommation mensuelle de son scénario à partir d\'une exécution réelle.',
                'Réduire la facture : webhook plutôt qu\'interrogation, filtre placé tôt, agrégation, intervalle adapté.',
                'Choisir entre Free, Core, Pro et Teams, entre paiement mensuel et annuel, et décider qui surveille les crédits.',
                'Rédiger la fiche du scénario et l\'inscrire au registre des automatisations de l\'équipe.',
                'Évaluation : reprendre seul le scénario d\'un autre participant, y apporter une modification et en réduire la consommation.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, ou atelier d\'une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes qui ont retenu Make ou veulent un outil sans serveur, 10 personnes au plus'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire avec Make à la fin des trois jours, et que laisse la formation de côté ?',
            'paragraphes' => [
                'À la fin de la troisième journée, chaque participant sait mener seul six opérations sur Make. Décrire une tâche répétitive sous forme de scénario, avant d\'ouvrir l\'éditeur. Construire ce scénario avec les connexions de l\'entreprise, du déclencheur au dernier module. Brancher plusieurs traitements avec un routeur, découper une liste avec un itérateur et la recomposer avec un agrégateur. Protéger le scénario contre les pannes avec les exécutions incomplètes et les gestionnaires d\'erreurs. Et chiffrer, avant la mise en service, le nombre de crédits que le scénario consommera chaque mois.',
                'Le sixième savoir-faire est le plus important : ouvrir un scénario construit par quelqu\'un d\'autre, comprendre ce qu\'il fait en lisant son historique, puis le modifier sans le casser. C\'est ce qui distingue une équipe autonome d\'une équipe qui rappelle son prestataire chaque fois qu\'une colonne change de nom. La formation est donc évaluée sur cette reprise, pas sur la beauté du scénario construit le premier jour.',
                'Plusieurs sujets voisins ont leur propre formation. Les premiers flux dans n8n relèvent de la formation <a href="/formations/n8n">n8n de zéro à l\'autonomie</a>. Lire la documentation d\'une API, s\'authentifier et appeler un service qui n\'a pas de module prêt à l\'emploi relève de la fiche Intégrations API en no-code et low-code. Construire un robot sur la plateforme WhatsApp Business de Meta relève de la fiche Chatbot WhatsApp et API WhatsApp Business. Ces formations figurent en bas de page, et le <a href="/formations/domaine/automatisation">domaine automatisation</a> aide à choisir l\'ordre.',
                'La formation ne tranche pas non plus le choix de l\'outil à votre place. Si vous hésitez encore entre Make, n8n et Zapier, le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a> pose les critères. Et si vous préférez qu\'un professionnel construise les scénarios pendant que votre équipe se contente de les surveiller, c\'est le service d\'<a href="/services/automatisation-ia">automatisation et IA sur mesure</a> qui répond au besoin ; la formation peut ensuite donner à l\'équipe de quoi faire les retouches courantes.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pour qui est la formation Make, avec quels prérequis et quel matériel ?',
            'intro' => 'La formation vise les personnes qui vivent la tâche répétitive au quotidien, pas les informaticiens. Les groupes comptent dix personnes au plus, pour que chacun soit aidé sur son écran au moment où il bloque.',
            'items' => [
                ['titre' => 'Les équipes qui ont retenu Make', 'texte' => 'Une direction a choisi Make, ou un prestataire l\'a installé et a livré des scénarios que personne en interne ne sait lire. Les scénarios existants deviennent alors la matière des exercices, et la troisième journée sert souvent à les reprendre un par un.'],
                ['titre' => 'Les structures sans serveur ni technicien', 'texte' => 'Make fonctionne entièrement en ligne : il n\'y a rien à installer, à sauvegarder ou à mettre à jour. C\'est la raison qui pousse beaucoup d\'ONG, de cabinets et de petites entreprises vers lui, et la formation part de cette situation.'],
                ['titre' => 'Les profils les plus fréquents', 'texte' => 'Assistantes de direction, gestionnaires administratifs, comptables, chargés de communication, responsables du suivi et de l\'évaluation dans les ONG, gérants de petites structures, responsables commerciaux qui consolident des chiffres chaque semaine.'],
                ['titre' => 'Le prérequis', 'texte' => 'Être à l\'aise avec ses propres outils : messagerie, dossiers partagés, tableur. Aucune ligne de code n\'est demandée. Un tableur mal construit ralentit tout le reste ; dans ce cas, une demi-journée sur les <a href="/formations/excel-google-sheets">tableurs de gestion</a> avant la session fait gagner du temps.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par personne, avec un navigateur récent et son chargeur. Le canevas de Make ne se manipule pas sur un téléphone. À distance, un second écran permet de suivre la démonstration d\'un côté et de construire de l\'autre.'],
                ['titre' => 'Les comptes à préparer', 'texte' => 'Une organisation Make ouverte au nom de l\'entreprise, sur l\'offre gratuite ou sur une offre payante, et des accès dédiés aux outils à relier : une boîte de test, un tableur partagé, un dossier de stockage. La liste exacte part une semaine avant la session, avec une vérification à distance.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la formation insiste-t-elle autant sur les bundles avant les routeurs et les itérateurs ?',
            'paragraphes' => [
                'Parce que presque toutes les surprises de Make viennent de là. Dans Make, chaque module traite les données par paquets appelés bundles : un contact, un courriel, une ligne de tableur. Selon le centre d\'aide de l\'éditeur, une opération est l\'exécution d\'un module sur un bundle, et un module qui envoie cinq courriels produit cinq opérations. Le déclencheur fait exception : il ne compte qu\'une opération par vérification, quel que soit le nombre de bundles qu\'il ramène.',
                'Le centre d\'aide donne un exemple que la formation reprend au tableau. Un scénario de quatre modules surveille les réponses à un formulaire, crée un document pour chaque réponse, le télécharge et l\'envoie par courriel. Quand le déclencheur ramène dix réponses, chacun des trois modules suivants tourne dix fois : le passage coûte 31 opérations, soit une pour le déclencheur et trente pour le reste. Un débutant qui ignore cet effet multiplicateur ne comprend ni sa facture, ni les doublons qu\'il reçoit.',
                'Le même article montre le remède. Un scénario qui envoie un courriel par nouveau contact consomme onze opérations pour dix contacts ; en ajoutant un agrégateur de texte qui rassemble les dix contacts dans un seul message, il n\'en consomme plus que trois. Les routeurs, les itérateurs et les agrégateurs ne sont donc pas des options avancées : ce sont les outils qui décident du nombre de bundles en circulation, et donc du coût. C\'est pourquoi la première après-midi est consacrée à lire des bundles, avant d\'en manipuler.',
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'  => 'etapes',
            'titre' => 'Quels scénarios construit-on sur vos propres outils pendant les trois jours ?',
            'items' => [
                ['titre' => 'Le formulaire qui alimente le tableau de suivi', 'duree' => '45 minutes, jour 1', 'texte' => 'Une demande arrive par formulaire ; Make l\'inscrit dans le tableau de suivi, lui donne un numéro et répond au demandeur. L\'exercice installe le vocabulaire de base : déclencheur, module, connexion, bundle, mapping.'],
                ['titre' => 'Le tri des demandes par routeur', 'duree' => '1 heure, jour 2', 'texte' => 'Les messages reçus sur une adresse de contact partent vers trois routes selon leur objet : devis vers le commercial, réclamation vers le responsable qualité, tout le reste vers une route de repli. Chaque participant écrit les filtres de ses propres routes.'],
                ['titre' => 'Les pièces jointes classées une par une', 'duree' => '1 heure, jour 2', 'texte' => 'Un itérateur découpe les pièces jointes d\'un courriel fournisseur, chaque fichier est renommé selon une règle fixe et rangé dans le bon dossier. On observe dans les bulles le nombre d\'opérations que coûte chaque pièce.'],
                ['titre' => 'Le récapitulatif au lieu de vingt messages', 'duree' => '1 heure, jour 2', 'texte' => 'Un scénario qui envoyait un message par commande est réécrit avec un agrégateur de texte : un seul récapitulatif part chaque soir. Les participants comparent les crédits consommés avant et après, sur les mêmes données.'],
                ['titre' => 'La panne provoquée', 'duree' => '1 heure, jour 3', 'texte' => 'Le formateur coupe un accès, vide un champ obligatoire, renomme une colonne. Chacun retrouve l\'exécution échouée, choisit entre corriger les données, réessayer ou ignorer le bundle fautif, puis règle le gestionnaire d\'erreurs adapté.'],
                ['titre' => 'L\'audit de consommation', 'duree' => '45 minutes, jour 3', 'texte' => 'Chaque participant estime les crédits mensuels de son scénario, propose deux réductions et les applique. L\'estimation est inscrite au registre, à côté du nom du responsable et de l\'offre Make retenue.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Routeur, filtre, itérateur, agrégateur : à quoi sert chaque brique de Make, et quel piège tend-elle ?',
            'legende' => 'Les briques travaillées pendant la formation, décrites d\'après le centre d\'aide de Make consulté le 5 octobre 2026, avec le piège que les débutants rencontrent le plus souvent. Les noms sont ceux de l\'éditeur, en anglais.',
            'entetes' => ['Brique', 'Ce qu\'elle fait', 'Le piège le plus fréquent'],
            'lignes'  => [
                ['Bundle', 'Un paquet de données traité par un module : un contact, une commande, un fichier.', 'Oublier qu\'un module agit une fois par bundle, et s\'étonner de recevoir dix messages.'],
                ['Filtre', 'Posé sur le lien entre deux modules, il ne laisse passer que les bundles qui remplissent la condition.', 'Le placer en fin de scénario, alors qu\'un filtre placé tôt évite d\'exécuter les modules suivants.'],
                ['Router', 'Partage le scénario en plusieurs routes ; Make les traite l\'une après l\'autre, jamais en parallèle.', 'Ne prévoir aucune route de repli, et perdre sans trace les cas qui ne remplissent aucune condition.'],
                ['Iterator', 'Transforme un tableau en série de bundles, un par élément : chaque pièce jointe, chaque ligne de commande.', 'Itérer sans agréger ensuite, et multiplier les actions là où une seule suffisait.'],
                ['Aggregator', 'Rassemble plusieurs bundles en un seul, sous forme de tableau, de texte ou d\'archive, à partir d\'un module source.', 'Choisir le mauvais module source, puis chercher en aval des données que l\'agrégateur n\'a pas transmises.'],
                ['Data store', 'Une petite base de données interne, partagée entre scénarios, pour mémoriser ce qui a été traité.', 'Y entasser des données personnelles inutiles, ou oublier que sa taille dépend des crédits achetés.'],
                ['Webhook', 'Une adresse qui lance le scénario dès qu\'une application lui envoie des données.', 'Laisser le traitement en parallèle par défaut quand l\'ordre d\'arrivée des commandes compte.'],
                ['Error handler', 'Un module branché sur un autre, qui décide quoi faire quand celui-ci échoue : ignorer, réessayer, remplacer, valider ou annuler.', 'N\'en poser aucun, puis découvrir que le scénario a été désactivé après une série d\'erreurs.'],
                ['Planification', 'Fixe quand le scénario tourne : à intervalles, chaque jour, à la demande ou dès l\'arrivée des données.', 'Garder l\'intervalle de 15 minutes proposé par défaut sans se demander ce qu\'il coûte.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles offres de Make, à quel prix et avec quelles limites ?',
            'legende' => 'Offres relevées le 5 octobre 2026 sur la page tarifs de Make, lue dans un navigateur, pour le palier de 10 000 crédits par mois. Prix hors taxes en dollars américains, payés à Make et non à Richard SALANON. L\'unité facturée est le crédit ; le premier montant correspond au paiement annuel ramené au mois, le second au paiement mensuel.',
            'entetes' => ['Offre', 'Prix publié', 'Limites qui comptent pour la formation'],
            'lignes'  => [
                ['Free', '0 $, jusqu\'à 1 000 crédits par mois', 'Deux scénarios actifs, 15 minutes au moins entre deux exécutions planifiées, 5 minutes au plus par exécution, fichiers de 5 Mo, journaux gardés 7 jours. Suffisant pour les exercices et un premier scénario réel.'],
                ['Core', '9 $ par mois en paiement annuel, 10,59 $ en paiement mensuel', 'Scénarios actifs illimités, planification jusqu\'à la minute, 40 minutes par exécution, fichiers de 100 Mo, accès à l\'API de Make, journaux gardés 30 jours.'],
                ['Pro', '16 $ par mois en paiement annuel, 18,82 $ en paiement mensuel', 'Exécution prioritaire, variables personnalisées, recherche plein texte dans l\'historique des exécutions, fichiers de 250 Mo.'],
                ['Teams', '29 $ par mois en paiement annuel, 34,12 $ en paiement mensuel', 'Équipes et rôles, modèles de scénarios partagés, fichiers de 500 Mo. Utile quand plusieurs services construisent.'],
                ['Enterprise', 'Sur devis de l\'éditeur', 'Agent installé sur site pour atteindre un réseau interne, protection contre le dépassement de crédits, journaux gardés 60 jours.'],
                ['Make Code App', '2 crédits par seconde d\'exécution de code, sur toutes les offres', 'Hors du périmètre d\'une formation sans code ; cité pour qu\'un module de code ne surprenne personne sur la facture.'],
                ['Hébergement', 'AWS, en Europe ou en Amérique du Nord, pour toutes les offres', 'À intégrer dans la réflexion sur les données personnelles, détaillée plus bas.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment estimer les crédits qu\'un scénario consommera avant de le mettre en service ?',
            'paragraphes' => [
                'La page tarifs de Make le dit en une phrase : chaque action d\'un module, comme ajouter une ligne à un tableur ou lire un courriel, compte pour un crédit. Le centre d\'aide précise que les crédits ont remplacé les opérations comme unité de facturation, sans changer le prix des offres, et que pour les applications sans intelligence artificielle, une opération vaut un crédit. Deux modules ne coûtent rien selon la page tarifs : le routeur et les gestionnaires d\'erreurs. Les étapes d\'IA fournies par Make, elles, consomment selon les jetons traités.',
                'Le calcul se fait donc en trois questions, posées pendant la troisième journée. Combien de fois le déclencheur se réveille-t-il ? Combien de bundles ramène-t-il en moyenne ? Combien de modules s\'exécutent pour chaque bundle ? Prenons un scénario lancé par webhook à chaque commande, suivi de quatre modules : il consomme cinq crédits par commande, soit 1 500 crédits pour 300 commandes par mois. Si chaque commande compte trois lignes passées dans un itérateur suivi de deux modules, il faut ajouter six crédits par commande : le total monte à 3 300, au-delà des 1 000 crédits de l\'offre gratuite.',
                'Le réveil du déclencheur pèse autant que le reste. Un déclencheur qui interroge un tableur toutes les 15 minutes vérifie 96 fois par jour, soit environ 2 880 crédits sur un mois de 30 jours, même quand aucune ligne n\'a été ajoutée. Réglé à la minute, il en consomme environ 43 200. Pendant l\'exercice d\'audit, chaque participant refait ce calcul sur son propre scénario, puis le compare au compteur de crédits affiché dans les bulles après une vraie exécution.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que se passe-t-il quand les crédits s\'épuisent, et faut-il payer Make au mois ou à l\'année ?',
            'paragraphes' => [
                'Selon la FAQ de la page tarifs, les scénarios s\'arrêtent tant que des crédits n\'ont pas été ajoutés. Make prévient par notification à 75 %, puis à 90 % des crédits achetés. Les données reçues par webhook attendent dans une file, dans la limite de sa taille, et les déclencheurs qui interrogent une application reprennent depuis leur dernier passage réussi. On peut alors changer d\'offre, acheter des crédits par paquets de 1 000 ou de 10 000, ou activer l\'achat automatique de 10 000 crédits sur les offres Core, Pro et Teams.',
                'Ces crédits supplémentaires coûtent plus cher. Le centre d\'aide de Make indique une majoration de 25 % par rapport au prix du crédit inclus dans l\'offre, et un paiement par carte uniquement : sur l\'offre Core à 9 $ pour 10 000 crédits, 1 000 crédits supplémentaires reviennent à 1,125 $. Un dépassement occasionnel reste donc raisonnable ; un dépassement chaque mois signale qu\'il faut passer au palier supérieur ou revoir les scénarios.',
                'Le paiement annuel coûte moins cher, mais il ne fonctionne pas de la même façon selon l\'offre. D\'après le centre d\'aide, l\'offre Core garde une attribution mensuelle de crédits, même payée à l\'année ; seules les offres Pro et Teams reçoivent en une fois le stock de l\'année, utilisable librement d\'un mois sur l\'autre. Les crédits non consommés expirent à la fin de la période. La formation conseille de rester au mois tant que la consommation n\'est pas mesurée sur quelques semaines, puis de décider sur des chiffres.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée pour que l\'équipe reparte autonome sur Make ?',
            'intro' => 'Chaque notion suit le même rythme : une démonstration de dix minutes sur un cas réel, puis une longue pratique, chacun dans l\'organisation Make de son entreprise. Le formateur circule d\'écran en écran plus qu\'il ne parle.',
            'items' => [
                ['titre' => 'Dix personnes au plus', 'texte' => 'Au-delà, il devient impossible d\'être derrière chaque écran quand une connexion refuse de s\'ouvrir. Un service plus nombreux est réparti en deux groupes, composés par poste plutôt que par ancienneté.'],
                ['titre' => 'L\'organisation Make de l\'entreprise', 'texte' => 'Tout se construit dans l\'organisation de l\'entreprise, avec ses connexions. Les scénarios restent donc en place après la session, et leur propriétaire n\'est pas le formateur.'],
                ['titre' => 'Des données d\'exercice anonymisées', 'texte' => 'Les exercices utilisent des copies anonymisées de vrais fichiers : export de commandes, liste de factures, réponses de formulaire. Aucune base clients complète n\'entre dans la salle, et les envois de test partent vers des adresses de test.'],
                ['titre' => 'Le compteur de crédits toujours visible', 'texte' => 'L\'affichage des crédits est activé dans les bulles dès le premier jour. Chaque exercice se termine par la même question : combien ce scénario coûterait-il en un mois ?'],
                ['titre' => 'Des supports qui restent à l\'équipe', 'texte' => 'Les scénarios d\'exercice exportés en plans réimportables, un lexique français des modules et des menus, une fiche pour lire une exécution échouée, une grille de calcul des crédits, le modèle de registre des automatisations.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Pendant la période prévue au devis, un canal direct reste ouvert pour les questions d\'application, et le premier scénario mis en service par chaque participant est relu à distance, consommation comprise.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel scénario Make construisent les participants, selon leur métier et leur pays ?',
            'items' => [
                ['secteur' => 'ONG de santé communautaire, à Dakar ou à Thiès', 'probleme' => 'Les fiches de suivi des agents de terrain arrivent par formulaire, région par région, et le rapport mensuel au bailleur se reconstruit à la main pendant trois jours.', 'solution' => 'Un scénario qui range chaque fiche dans le tableau de sa région, puis un second, planifié le premier du mois, qui agrège les totaux par projet et prépare le tableau du rapport, relu par la chargée de suivi avant envoi.'],
                ['secteur' => 'Distributeur de matériel, à Abidjan', 'probleme' => 'Les bons de commande des revendeurs arrivent en pièces jointes, à plusieurs par courriel, et se perdent dans la boîte du commercial.', 'solution' => 'Un itérateur qui sépare les pièces jointes, un classement par revendeur dans un dossier partagé, et un récapitulatif agrégé envoyé chaque soir à l\'équipe logistique.'],
                ['secteur' => 'Agence de communication, à Cotonou', 'probleme' => 'Les demandes de devis reçues par le site, par courriel et par formulaire de campagne sont traitées par la personne qui les voit en premier, ou par personne.', 'solution' => 'Un routeur qui oriente chaque demande selon le service concerné, avec une route de repli vers la direction, et un data store qui évite de créer deux fois le même prospect.'],
                ['secteur' => 'Cabinet d\'expertise comptable, à Lille ou à Liège', 'probleme' => 'Les relances de pièces manquantes partent à la main en fin de mois, et le RGPD impose de savoir quels outils voient passer les données des clients.', 'solution' => 'Un scénario de relance lancé à date fixe, avec le réglage de confidentialité activé pour ne pas garder les données dans les journaux, et une fiche qui liste les applications traversées.'],
                ['secteur' => 'Organisme de formation, à Montréal ou à Lyon', 'probleme' => 'Les inscriptions arrivent par formulaire, les convocations et les attestations partent une par une, et les doublons se multiplient en période de rentrée.', 'solution' => 'Un scénario déclenché par webhook, traité dans l\'ordre d\'arrivée, qui vérifie dans un data store si la personne est déjà inscrite avant d\'envoyer la convocation.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format, quelle durée et quelle organisation choisir pour la formation Make ?',
            'legende' => 'Les formats possibles. L\'atelier d\'une demi-journée et la session en groupe réduit, en salle ou en visioconférence, reprennent l\'organisation de l\'ancienne page consacrée à l\'automatisation avec n8n et Make.',
            'entetes' => ['Format', 'Durée et rythme', 'Ce que l\'on y fait', 'Pour qui'],
            'lignes'  => [
                ['Atelier de découverte', 'Une demi-journée', 'Inventaire des tâches, premier scénario construit en direct, estimation des crédits et de l\'offre nécessaire', 'Une direction qui veut décider, une équipe qui hésite encore sur l\'outil'],
                ['Formation complète en intra', 'Trois jours, en six demi-journées', 'Le programme complet dans l\'organisation Make de l\'entreprise, scénario mis en service par chaque participant', 'Une équipe d\'une même structure, dix personnes au plus par groupe'],
                ['Parcours en deux temps', 'Deux jours, puis la troisième journée deux à quatre semaines plus tard', 'Les bases d\'abord, puis la fiabilité et les crédits sur les scénarios réellement mis en service entre-temps', 'Les équipes qui veulent arriver à la troisième journée avec leurs propres pannes'],
                ['Session inter-entreprises', 'Trois jours', 'Le même programme sur des données de démonstration, sans aucun document interne', 'Une ou deux personnes par structure, ou un réseau d\'associations'],
                ['À distance', 'Six séances de trois heures et demie, sur trois semaines', 'Partage d\'écran, exercices envoyés la veille, construction entre les séances', 'Équipes réparties sur plusieurs pays, structures en Europe ou au Canada'],
                ['Hybride', 'Une journée en salle, puis des séances à distance', 'Prise en main en présentiel, construction et audit des crédits suivis à distance', 'Équipes peu habituées à l\'ordinateur, ou qui préfèrent espacer'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation Make, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Le prix est fixé sur devis, après un premier échange gratuit sur le nombre de participants, les tâches visées et l\'état de votre organisation Make. Les abonnements à Make sont payés directement à l\'éditeur, au nom de votre entreprise. La formation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Atelier de découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée', 'Inventaire des tâches de l\'équipe', 'Premier scénario construit en direct', 'Estimation des crédits et de l\'offre Make adaptée']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Trois jours en six demi-journées', 'Exercices dans votre organisation Make, sur données anonymisées', 'Scénario mis en service par chaque participant', 'Supports, grille de calcul des crédits et registre', 'Évaluation et attestation']],
                ['offre' => 'Reprise de scénarios existants', 'prix' => 'Sur devis', 'inclus' => ['Lecture des scénarios livrés par un prestataire', 'Documentation de chacun', 'Ajout des alertes et des gestionnaires d\'erreurs manquants', 'Audit de la consommation']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, chaque groupe comptant dix personnes au plus.',
                'Le format retenu : atelier, trois jours d\'affilée, parcours en deux temps, distance ou hybride.',
                'La préparation : données d\'exercice tirées de vos fichiers, vérification préalable des connexions.',
                'Le nombre de scénarios existants à reprendre pendant la troisième journée.',
                'Les déplacements hors de Cotonou pour une session en salle, et la durée du suivi.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge la formation Make ?',
            'paragraphes' => [
                'Cela arrive, sous conditions, et cette page ne promet aucune prise en charge. En Côte d\'Ivoire, le FDFP explique sur sa page consacrée au plan de formation, lue le 5 octobre 2026, qu\'une entreprise à jour de ses deux taxes peut présenter un plan ; une action animée par un intervenant extérieur pour ses seuls salariés y est classée « intra », et le paiement n\'intervient qu\'après le contrôle du fonds et l\'accord de sa Commission permanente. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le décret n° 2022-286 du 11 mai 2022.',
                'Au Sénégal, le 3FPT propose en ligne un guichet de financement destiné au personnel des entreprises et aux membres des organisations professionnelles. En France, France Compétences rappelle que depuis le 1er janvier 2022, seul un prestataire certifié Qualiopi accède aux fonds des OPCO et des autres financeurs publics ou mutualisés ; Richard SALANON ne détient ni cette certification, ni l\'agrément d\'un fonds. Le bon ordre est donc d\'envoyer devis et programme au fonds, d\'attendre sa réponse écrite, puis de budgéter sans compter sur elle. Le détail des dispositifs figure sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel réglage oublié transforme un scénario Make en panne silencieuse ?',
            'texte' => 'Le stockage des exécutions incomplètes, désactivé par défaut selon le centre d\'aide de Make. Sans lui, un bundle qui échoue est perdu, et les nouvelles tentatives automatiques, prévues pour les coupures de connexion ou les limites de débit d\'une application, ne peuvent pas avoir lieu. Le danger redouble avec un webhook : d\'après la page des réglages de scénario, un scénario lancé par un déclencheur instantané est désactivé dès la première erreur, sans attendre la série d\'échecs tolérée pour les autres. Pendant la formation, aucun scénario n\'est activé sans ce réglage, sans gestionnaire d\'erreurs sur les modules sensibles et sans une alerte qui atteint une personne nommée.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent après une formation Make, et comment les éviter ?',
            'intro' => 'Un scénario Make tombe rarement en panne le jour où il est activé. Les ennuis arrivent dans les semaines suivantes, souvent par la facture ou par un client qui reçoit deux fois le même message.',
            'items' => [
                ['titre' => 'Interroger trop souvent', 'texte' => 'Un tableau vérifié chaque minute consomme des crédits jour et nuit, même vide. On préfère un webhook quand l\'application le permet, sinon un intervalle choisi d\'après le délai de réponse réellement attendu.'],
                ['titre' => 'Itérer sans jamais agréger', 'texte' => 'Découper une commande en lignes est utile ; envoyer ensuite un message par ligne l\'est rarement. Un agrégateur placé au bon endroit divise souvent la consommation et le nombre de notifications.'],
                ['titre' => 'Oublier que les webhooks arrivent en parallèle', 'texte' => 'Par défaut, Make traite les requêtes d\'un webhook instantané en parallèle. Deux paiements reçus à la même seconde peuvent créer deux fois le même client. Le réglage de traitement dans l\'ordre et un data store de contrôle règlent la question.'],
                ['titre' => 'Laisser le fuseau horaire au hasard', 'texte' => 'Selon le centre d\'aide, c\'est le fuseau de l\'organisation qui fixe l\'heure d\'exécution, et seuls ses propriétaires et administrateurs peuvent le changer. Celui de chaque utilisateur ne règle que l\'affichage. On le vérifie avant de programmer la moindre relance.'],
                ['titre' => 'Brancher la connexion d\'une seule personne', 'texte' => 'Une connexion ouverte avec la messagerie de la comptable cesse de fonctionner le jour où elle change de mot de passe ou de poste. Les connexions utilisent des comptes de l\'entreprise, aux droits limités à ce que le scénario doit toucher.'],
                ['titre' => 'Confier une décision à un agent d\'IA sans contrôle', 'texte' => 'L\'application Make AI Agent (New), publiée le 2 février 2026, est en bêta ouverte : ses fonctions et son prix peuvent encore changer, précise le centre d\'aide. Un agent peut classer des demandes ; une validation humaine reste nécessaire avant tout paiement ou tout engagement.'],
                ['titre' => 'Ne tenir aucun registre', 'texte' => 'Au bout de six mois, plus personne ne sait quels scénarios tournent ni combien ils coûtent. Une ligne par scénario suffit : nom, responsable, applications traversées, crédits estimés, date de la dernière vérification.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données personnelles, connexion, devise et langue : que change le contexte local pour Make ?',
            'paragraphes' => [
                'Selon sa page tarifs, Make héberge toutes ses offres chez AWS, en Europe ou en Amérique du Nord. Pour une entreprise béninoise, cela signifie que les données d\'un scénario quittent le pays. L\'article 391 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique subordonne un transfert vers un État tiers au constat, par l\'Autorité, d\'une protection équivalente. Avant de faire passer un fichier de clients par un scénario, la formation apprend à dresser la liste des applications traversées et à activer, quand il le faut, le réglage qui empêche Make de garder les données dans ses journaux.',
                'En Europe, la même liste sert le RGPD. D\'après le texte publié par la CNIL, l\'article 28 réserve le recours à des sous-traitants offrant des garanties suffisantes, liés par un contrat, et l\'article 30 impose à chaque responsable de traitement un registre de ses activités. Le registre des automatisations tenu pendant la formation ne remplace pas ce document, mais il donne à la personne qui le tient la liste exacte des outils et des données concernés.',
                'La connexion compte aussi. Selon les chiffres de l\'UIT publiés le 15 octobre 2025, 36 % de la population utilise Internet en Afrique, contre 88 à 93 % en Europe, dans la CEI et dans les Amériques. Un scénario Make tourne dans le cloud et continue pendant une coupure au bureau ; c\'est sa construction qui demande du réseau. Chaque séance prévoit donc un partage de connexion de secours, et les scénarios d\'exercice sont exportés pour être réimportés si la séance coupe.',
                'Reste l\'argent. Make affiche ses prix en dollars et accepte, sur les offres Core, Pro et Teams, les cartes bancaires, le prélèvement ACH et Google Pay ; le virement sur facture est réservé à l\'offre Enterprise. Le coût en FCFA suit donc le cours du dollar et les frais de la banque. Côté données, l\'ARCEP Bénin a porté les numéros nationaux à 10 chiffres le 30 novembre 2024 : un scénario qui envoie des messages doit ramener chaque numéro au format international complet. Enfin, le centre d\'aide de Make est rédigé en anglais ; les séances se font en français, lexique à l\'appui.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre Make avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Make fait partie de ses outils de travail : il construit des automatisations avec Make et n8n pour ses clients, et il connaît les deux unités de facturation pour les avoir chiffrées projet par projet. Il est le créateur de <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Diplômé d\'' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', il compte ' . $ans . ' ans d\'expérience dans le numérique et indique avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il a travaillé, sur place ou à distance, dans onze pays d\'Afrique francophone ainsi qu\'en France, en Belgique, en Suisse et au Canada. Il n\'est ni certifié par Make ni partenaire de l\'éditeur : la formation se termine par une évaluation sur un scénario réel et une attestation. Sa manière de former se vérifie facilement : l\'organisation Make de votre entreprise plutôt que la sienne, vos tâches plutôt que des démonstrations toutes faites, une réponse sous 24 heures, et un avis franc quand un scénario coûterait plus qu\'il ne rapporte. Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page des <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe à une formation Make ?',
            'texte' => 'Ouvrez l\'organisation Make au nom de l\'entreprise, apprenez à lire un bundle avant de construire des routes, filtrez tôt et agrégez dès qu\'une liste produit trop de messages, activez les exécutions incomplètes et une alerte d\'échec avant toute mise en service, et chiffrez les crédits d\'un mois entier avant de choisir entre paiement mensuel et annuel.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe doit-elle reprendre la main sur ses scénarios Make ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les scénarios déjà en place s\'il y en a, et deux tâches qui vous coûtent du temps chaque semaine : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation Make'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer pour suivre la formation Make ?', 'r' => 'Non. Les scénarios se construisent en reliant des modules sur un canevas, et les données se placent par glisser-déposer. Il faut raisonner en conditions simples et connaître ses propres outils. Les modules de code existent, mais ils ne sont pas enseignés ici.'],
        ['q' => 'Peut-on suivre la formation avec l\'offre gratuite de Make ?', 'r' => 'Oui, pour la plupart des exercices. L\'offre Free donne jusqu\'à 1 000 crédits par mois, deux scénarios actifs et un intervalle de 15 minutes au moins entre deux exécutions planifiées, selon la page tarifs lue le 5 octobre 2026. Les essais consomment des crédits eux aussi : une équipe nombreuse prévoit plusieurs organisations de test ou une offre Core.'],
        ['q' => 'Quelle différence entre une opération et un crédit dans Make ?', 'r' => 'L\'opération mesure ce qui s\'est passé : un module exécuté sur un bundle. Le crédit mesure ce que vous payez. Pour les applications sans IA, une opération vaut un crédit, selon le centre d\'aide de Make ; les fonctions d\'IA fournies par Make consomment selon les jetons traités.'],
        ['q' => 'Faut-il apprendre Make ou n8n ?', 'r' => 'Celui que votre entreprise gardera. Make convient aux structures qui veulent un outil entièrement en ligne, sans serveur ; n8n compte un passage entier du flux comme une seule exécution et peut s\'installer chez vous. Le comparatif n8n, Make et Zapier pose les critères, et une demi-journée de découverte permet de trancher sur un cas réel.'],
        ['q' => 'La formation délivre-t-elle une certification Make ?', 'r' => 'Non. Richard SALANON n\'est ni certifié par Make ni partenaire de l\'éditeur. La formation se conclut par une évaluation sur un scénario réel et une attestation de fin de formation. L\'éditeur propose de son côté des ressources d\'apprentissage, dont la Make Academy, que vos participants peuvent suivre ensuite.'],
        ['q' => 'Que deviennent les scénarios construits pendant la formation ?', 'r' => 'Ils restent dans l\'organisation Make de votre entreprise, avec vos connexions, accompagnés de leur fiche, de leur estimation de crédits et de leur ligne au registre. Les scénarios d\'exercice sont aussi remis en fichiers réimportables, pour servir de point de départ aux suivants.'],
        ['q' => 'Peut-on relier WhatsApp à Make ?', 'r' => 'Oui, par la plateforme WhatsApp Business de Meta, avec ses modèles de messages et sa facturation propre : depuis le 1er octobre 2026, chaque numéro professionnel dispose d\'un quota mensuel de 1 000 messages de service gratuits, non reportable, facturés au-delà. Ce sujet a sa fiche dédiée, Chatbot WhatsApp et API WhatsApp Business, proposée en bas de page.'],
        ['q' => 'Les agents d\'IA de Make sont-ils au programme ?', 'r' => 'Ils sont montrés en démonstration, pas enseignés en détail. Le centre d\'aide présente l\'application Make AI Agent (New) comme une bêta ouverte depuis le 2 février 2026, dont les fonctions et le prix peuvent changer. Placer l\'IA dans un processus et la contrôler relève de la formation IA dans les processus métier.'],
        ['q' => 'Que se passe-t-il si l\'entreprise résilie son abonnement Make ?', 'r' => 'Selon la FAQ de la page tarifs, l\'offre payante court jusqu\'à la fin du mois ou de l\'année en cours, puis l\'organisation repasse sur l\'offre gratuite, sauf si son propriétaire possède déjà une autre organisation gratuite. En cas de passage à une offre inférieure, les scénarios actifs qui utilisent des fonctions de l\'offre supérieure sont arrêtés.'],
        ['q' => 'Une ONG peut-elle obtenir de meilleures conditions chez Make ?', 'r' => 'La FAQ de la page tarifs indique que Make soutient les organisations à but non lucratif et invite les ONG à le contacter pour en savoir plus. Aucune remise n\'y est chiffrée : la demande se fait auprès de l\'éditeur, et le devis de formation reste indépendant de sa réponse.'],
        ['q' => 'Combien de temps faut-il pour qu\'une équipe soit autonome sur Make ?', 'r' => 'Le premier scénario est mis en service pendant la formation. L\'autonomie réelle se mesure trois à six semaines plus tard, quand l\'équipe a corrigé seule ses premières pannes et ajusté sa consommation. C\'est la raison du parcours en deux temps, qui place la troisième journée après cette période.'],
    ],

    'sources' => [
        ['titre' => 'Make, Pricing (offres, crédits, paiement mensuel et annuel, limites, hébergement, FAQ), lue dans un navigateur', 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Credits (crédits, opérations et IA)', 'url' => 'https://help.make.com/credits', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Operations (bundles, exemple des 31 opérations, agrégateur de texte)', 'url' => 'https://help.make.com/operations', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Router (routes séquentielles, route de repli)', 'url' => 'https://help.make.com/router', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Iterator', 'url' => 'https://help.make.com/iterator', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Aggregator (module source, regroupement)', 'url' => 'https://help.make.com/aggregator', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Filtering', 'url' => 'https://help.make.com/filtering', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Schedule a scenario (15 minutes par défaut, limite de débit)', 'url' => 'https://help.make.com/schedule-a-scenario', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Webhooks (déclencheurs instantanés, traitement en parallèle)', 'url' => 'https://help.make.com/webhooks', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Scenario settings (exécutions incomplètes, confidentialité, désactivation)', 'url' => 'https://help.make.com/scenario-settings', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Incomplete executions', 'url' => 'https://help.make.com/incomplete-executions', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Automatic retry of incomplete executions', 'url' => 'https://help.make.com/automatic-retry-of-incomplete-executions', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Error handlers (Skip, Retry, Resume, Commit, Rollback)', 'url' => 'https://help.make.com/error-handlers', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Extra credits (majoration de 25 %, achat automatique)', 'url' => 'https://help.make.com/extra-credits', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Monthly and annual subscriptions', 'url' => 'https://help.make.com/monthly-and-annual-subscriptions', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Manage time zones', 'url' => 'https://help.make.com/manage-time-zones', 'date' => '2026-10-05'],
        ['titre' => 'Make Help Center, Introduction to Make AI Agent (New)', 'url' => 'https://help.make.com/introduction-to-make-ai-agent-new', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (quota de messages de service depuis le 1er octobre 2026)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025 : Internet use (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, passage des numéros de 8 à 10 chiffres au 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD chapitre IV : responsable du traitement et sous-traitant (articles 28 et 30)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['n8n', 'integrations-api-no-code', 'chatbot-whatsapp', 'n8n-avance', 'ia-processus-metier', 'excel-google-sheets'],
        'services'    => ['automatisation-ia', 'formation-en-entreprise'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
    ],
];
