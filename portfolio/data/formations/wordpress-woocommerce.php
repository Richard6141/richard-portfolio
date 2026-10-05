<?php
// ============================================================
// data/formations/wordpress-woocommerce.php · Fiche formation « WordPress et
// WooCommerce » (vague 1B, lot B, domaine développement, publication reportée).
// Angle propre : l'OUTIL. Une équipe sans formation de développeur apprend à
// administrer elle-même son site WordPress et sa boutique WooCommerce : rôles
// et accès, contenus, choix et entretien des extensions, versions, mises à
// jour sur copie de test, sauvegardes et restauration, réglages de la boutique,
// extensions de paiement mobile money (FedaPay, KkiaPay, CinetPay).
// Hors sujet : la création du site ou de la boutique (piliers
// site-vitrine-professionnel et site-e-commerce), l'exploitation commerciale
// (formation e-commerce), le code PHP (developpement-web, laravel-php).
// Sources consultées le 05/10/2026 : wordpress.org (versions, prérequis,
// rôles, mises à jour automatiques, fiches des extensions WooCommerce, FedaPay,
// KkiaPay), developer.wordpress.org (mise à jour, renforcement, sauvegarde),
// developer.woocommerce.com (PHP 8.1, calendrier, HPOS), woocommerce.com
// (rôles, blocs Panier et Commande), php.net, Patchstack, documentation
// FedaPay et KkiaPay, pages CinetPay lues dans un navigateur (docs.cinetpay.com
// injoignable ce jour-là), tarifs FedaPay, KkiaPay et CinetPay, StatCounter,
// CNIL, SGG du Bénin, FDFP, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation WordPress et WooCommerce : administrer soi-même son site et sa boutique, mettre à jour sans casse, sauvegarder, restaurer et brancher le paiement mobile money',
    'title'   => 'Formation WordPress et WooCommerce | Richard SALANON',
    'meta'    => 'Formation WordPress et WooCommerce pour administrer site et boutique : extensions, mises à jour, sauvegardes, paiement mobile money. Prix sur devis.',
    'en_bref' => 'Cette formation apprend à une équipe sans bagage de développeur à administrer elle-même un site WordPress et une boutique WooCommerce : comptes et rôles, contenus, choix et entretien des extensions, mises à jour testées sur une copie, sauvegardes réellement restaurées, réglages de la boutique et extensions de paiement mobile money comme FedaPay, KkiaPay ou CinetPay. Elle dure trois jours, soit six demi-journées, suivis d\'une séance de suivi à distance ; deux jours suffisent pour un site sans boutique. Elle se déroule en intra, en inter, à distance ou en formule hybride, sur votre site ou sur sa copie, et son prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => false,
    'duree'   => '3 jours (6 demi-journées) et une séance de suivi de 2 heures ; 2 jours pour un site sans boutique',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, puis 2 heures de suivi à distance'],
        ['l' => 'Public', 'v' => 'Personnes qui administrent un site ou une boutique sans être développeurs'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, huit participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : savoir ce que l\'on administre, et verrouiller les accès',
            'duree'  => '3 h 30',
            'points' => [
                'Les quatre pièces d\'un site WordPress : les fichiers, la base de données, l\'hébergement et le nom de domaine ; qui détient chaque accès aujourd\'hui, et à quel nom.',
                'Lire l\'écran Santé du site et la page des mises à jour : version de WordPress, version de PHP, extensions en retard, alertes de sécurité.',
                'Les rôles de WordPress (administrateur, éditeur, auteur, contributeur, abonné) et ceux qu\'ajoute WooCommerce (gestionnaire de boutique, client) : qui reçoit quoi, et pourquoi presque personne n\'a besoin d\'être administrateur.',
                'Un compte nominatif par personne, un mot de passe long tenu dans un gestionnaire, la validation en deux étapes pour chaque compte qui peut installer quelque chose.',
                'Exercice : la carte des accès du site, tenue dans un document que l\'entreprise garde, et la suppression des comptes dont personne ne sait plus à qui ils appartiennent.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : publier et corriger du contenu sans abîmer la mise en page',
            'duree'  => '3 h 30',
            'points' => [
                'L\'éditeur de blocs : paragraphes, titres hiérarchisés, colonnes, boutons, blocs réutilisables, et la différence entre modifier une page et modifier le modèle qui l\'habille.',
                'Brouillon, relecture, programmation, publication, puis retour à une révision antérieure quand une modification tourne mal.',
                'La médiathèque : dimensions, poids et format des images avant envoi, texte alternatif, noms de fichiers lisibles, ménage des doublons.',
                'Menus, pied de page, réglages généraux (langue, fuseau horaire, format de date) et structure des adresses, à ne pas changer sur un site déjà référencé.',
                'Exercice : trois pages réelles du site reprises par chaque participant sur la copie de test, puis relues sur un téléphone par un autre.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : choisir, garder ou retirer une extension',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qu\'une extension peut faire sur le site, et pourquoi chacune ajoute du code à surveiller.',
                'Lire la fiche d\'une extension sur le répertoire officiel : date de dernière mise à jour, mention « testée jusqu\'à », nombre d\'installations actives, version de PHP exigée, forum d\'assistance, journal des modifications.',
                'Les sources à refuser : archives « gratuites » d\'extensions payantes, fichiers reçus par messagerie, extensions abandonnées par leur auteur.',
                'L\'inventaire des extensions et des thèmes du site : utilité, remplaçante possible, responsable, décision (garder, remplacer, supprimer).',
                'Couper l\'éditeur de fichiers du tableau de bord et réserver l\'installation d\'extensions à un ou deux comptes.',
                'Exercice : l\'inventaire complet du site de chaque participant, avec au moins une extension retirée sur la copie de test, puis le site contrôlé page par page.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : mettre à jour sur une copie, sauvegarder, restaurer pour de vrai',
            'duree'  => '3 h 30',
            'points' => [
                'Créer ou demander à l\'hébergeur une copie de test du site, protégée et fermée aux moteurs de recherche.',
                'L\'ordre des mises à jour : sauvegarde, cœur de WordPress, extensions une par une, thème, contrôle des pages clés après chacune.',
                'Ce que WordPress met à jour seul, ce qu\'il vaut mieux activer extension par extension, et ce qui ne doit jamais partir sans essai préalable, comme le paiement.',
                'La version de PHP de l\'hébergement : où la lire, quand demander à l\'hébergeur de la changer, et comment l\'essayer d\'abord sur la copie.',
                'Sauvegarder la base et les fichiers, ranger les copies à trois endroits, dont un hors ligne, puis restaurer une sauvegarde complète en chronométrant l\'opération.',
                'Exercice : la première mise à jour mensuelle faite par l\'équipe elle-même, consignée dans le journal d\'entretien du site.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : régler WooCommerce et gérer produits et commandes dans l\'outil',
            'duree'  => '3 h 30',
            'points' => [
                'Les réglages qui comptent : pays et devise de la boutique (franc CFA sans décimales, euro), adresses, taxes, zones et méthodes de livraison, comptes clients, e-mails envoyés par la boutique.',
                'Créer un produit simple, puis un produit variable avec ses attributs (taille, couleur, contenance), son stock par variante et son seuil d\'alerte.',
                'Le cycle d\'une commande dans l\'écran de WooCommerce : statuts, notes internes, remboursement manuel ou par la passerelle, et ce que chacun déclenche.',
                'Le stockage des commandes dans des tables dédiées (HPOS) et la vérification de la compatibilité des extensions dans les réglages avancés.',
                'Panier et commande en blocs ou en code court classique : repérer la version utilisée et savoir revenir à l\'autre si une extension l\'exige.',
                'Exercice : un produit variable complet créé sur la copie de test, puis une commande fictive suivie de bout en bout jusqu\'au remboursement.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : brancher le paiement mobile money par extension, puis bilan',
            'duree'  => '3 h 30',
            'points' => [
                'Installer et activer l\'extension de la passerelle retenue : FedaPay, KkiaPay ou CinetPay, en vérifiant d\'abord sa fiche et sa compatibilité.',
                'Clés de test et clés de production, où les trouver dans le tableau de bord de la passerelle, où les saisir, et qui doit y avoir accès.',
                'Le mode test et les numéros de test : payer, échouer, abandonner, puis vérifier le statut de chaque commande dans WooCommerce et dans la passerelle.',
                'HTTPS obligatoire en production, adresse de notification, journaux de l\'extension : les trois causes les plus fréquentes d\'une commande payée restée « en attente ».',
                'Le plan de repli si l\'extension cède après une mise à jour : désactivation, moyen de paiement provisoire, message aux clients, alerte au prestataire.',
                'Évaluation individuelle sur une tâche réelle, puis remise des procédures écrites et du journal d\'entretien.',
            ],
        ],
        [
            'titre'  => 'Séance de suivi, quatre à six semaines plus tard : la première mise à jour faite sans formateur',
            'duree'  => '2 h, à distance',
            'points' => [
                'Relecture du journal d\'entretien et des sauvegardes réalisées depuis la session.',
                'Revue des alertes de l\'écran Santé du site et des extensions signalées comme non testées.',
                'Commande de test rejouée avec la passerelle de paiement après la dernière mise à jour.',
                'Questions de l\'équipe et liste écrite de ce qu\'il reste à confier à un prestataire.',
            ],
        ],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saura faire votre équipe après la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Beaucoup d\'organisations reçoivent un site WordPress clé en main, avec un identifiant administrateur et une consigne vague : « ne touchez à rien ». Deux ans plus tard, une dizaine d\'extensions attendent leur mise à jour, la version de PHP n\'est plus maintenue, personne ne sait où se trouve la dernière sauvegarde, et l\'ajout d\'une page devient une demande de devis. Cette formation sort de cette dépendance : elle apprend à tenir l\'outil, avec des gestes sûrs, sans transformer les participants en développeurs.',
                'À la fin des trois jours, chaque participant sait, sur son propre site ou sur sa copie : attribuer le bon rôle à chaque compte ; publier et corriger une page sans casser la mise en page ; juger une extension avant de l\'installer ; tenir l\'inventaire des extensions ; mettre à jour le site sur une copie avant la version en ligne ; sauvegarder puis restaurer le site complet ; régler les livraisons, les taxes et les produits de WooCommerce ; configurer une extension de paiement mobile money en mode test, puis vérifier qu\'une commande payée remonte correctement.',
                'La formation ne construit ni le site ni la boutique : le choix du thème, la maquette, la rédaction des pages et l\'intégration initiale relèvent de la <a href="/services/site-vitrine-professionnel">création de site vitrine</a> ou de la <a href="/services/site-e-commerce">création de site e-commerce</a>. Elle n\'enseigne pas non plus à vendre : fiches produits rédigées pour convaincre, marge, livraison, retours et service client sont le sujet de la <a href="/formations/e-commerce">formation e-commerce</a>, qui se suit très bien juste après.',
                'Enfin, on n\'écrit pas une ligne de PHP pendant ces trois jours. Créer un thème ou une extension, modifier le code d\'une passerelle ou développer une fonction sur mesure demande les bases du langage, enseignées dans la <a href="/formations/developpement-web">formation au développement web</a>. La place de WordPress parmi les autres formations du domaine est expliquée sur la page <a href="/formations/domaine/developpement">formations en développement</a>.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quels gestes chaque participant doit-il réussir seul avant la fin de la session ?',
            'items' => [
                'Dresser la carte des accès du site : hébergement, nom de domaine, base de données, comptes WordPress, passerelle de paiement, avec le titulaire de chacun.',
                'Créer un compte avec le rôle juste, activer la validation en deux étapes et supprimer un compte inutile.',
                'Publier une page structurée par des titres, avec des images allégées et un texte alternatif, puis revenir à une révision antérieure.',
                'Évaluer une extension sur sa fiche officielle et justifier par écrit la décision de l\'installer ou non.',
                'Tenir l\'inventaire des extensions et des thèmes, et retirer proprement une extension inutile.',
                'Appliquer une mise à jour sur la copie de test, contrôler les pages clés, puis la reporter sur le site en ligne.',
                'Restaurer une sauvegarde complète de la base et des fichiers, et noter la durée de l\'opération.',
                'Créer un produit variable avec son stock par variante dans WooCommerce.',
                'Configurer une extension de paiement en mode test et réussir une commande de bout en bout, puis une commande échouée.',
                'Remplir le journal d\'entretien et dire ce qui doit être confié à un prestataire.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pour qui est faite cette formation, avec quel niveau et quel matériel ?',
            'intro' => 'Le public type n\'a jamais appris à programmer et ne le souhaite pas. Il doit en revanche faire vivre un site ou une boutique au quotidien, et en répondre devant sa direction quand quelque chose ne marche plus.',
            'items' => [
                ['titre' => 'Chargés de communication et assistants', 'texte' => 'Ils publient les actualités, changent les visuels, mettent à jour les horaires et les offres. Ce sont souvent eux que l\'on appelle quand le site affiche une erreur, sans qu\'ils aient jamais reçu les accès ni les explications pour réagir.'],
                ['titre' => 'Gérants de petite boutique en ligne', 'texte' => 'Ils ont une boutique WooCommerce livrée par un prestataire et veulent ajouter des produits, régler une zone de livraison ou comprendre pourquoi une commande payée reste en attente, sans rappeler le développeur à chaque fois.'],
                ['titre' => 'Référents informatiques de petites structures', 'texte' => 'Associations, écoles, cabinets, ONG : une personne « qui s\'y connaît » hérite du site. La formation lui donne une méthode d\'entretien, une liste de contrôle et les limites au-delà desquelles il faut un professionnel.'],
                ['titre' => 'Indépendants qui tiennent leur propre site', 'texte' => 'Consultants, artisans, formateurs, créateurs : leur site est leur vitrine et parfois leur caisse. Ils apprennent à le garder à jour sans y passer leurs week-ends et sans le mettre en panne.'],
                ['titre' => 'Niveau et prérequis', 'texte' => 'Aucune connaissance en code. Il faut savoir utiliser un navigateur, ranger des fichiers et retoucher une photo simple. Un questionnaire de positionnement, envoyé avant la session, sépare ceux qui découvrent le tableau de bord de ceux qui le pratiquent déjà.'],
                ['titre' => 'Accès et matériel à prévoir', 'texte' => 'Un ordinateur portable par participant, un accès administrateur au site ou à sa copie de test, l\'accès à l\'espace client de l\'hébergeur, et, pour la boutique, un compte marchand chez la passerelle avec ses clés de test. Le téléphone de travail sert à vérifier l\'affichage et la validation en deux étapes. Sans site encore en ligne, un site d\'exercice est installé avant la session, si possible chez le futur hébergeur.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leur propre site ?',
            'items' => [
                ['titre' => 'La carte des accès', 'duree' => '40 minutes', 'texte' => 'Qui possède le nom de domaine, qui paie l\'hébergement, qui détient le compte administrateur, où sont les clés de la passerelle de paiement ? Dans beaucoup d\'entreprises, la réponse est « l\'ancien prestataire » ou « un stagiaire parti l\'an dernier ». Le document produit reste à l\'entreprise et sert ensuite à chaque changement de personne.'],
                ['titre' => 'L\'inventaire des extensions', 'duree' => '1 heure', 'texte' => 'Chaque extension active ou désactivée est listée avec sa fonction, sa dernière mise à jour, sa compatibilité déclarée et son utilité réelle. Les extensions désactivées depuis longtemps sont supprimées sur la copie, puis le site est contrôlé. Il est fréquent de découvrir deux extensions qui font la même chose.'],
                ['titre' => 'La copie de test', 'duree' => '45 minutes', 'texte' => 'Selon l\'hébergeur, la copie se crée en un clic depuis l\'espace client, par une extension de clonage ou avec l\'aide du prestataire. Elle est protégée par un mot de passe et fermée aux moteurs. À partir de là, toute manipulation risquée se fait d\'abord sur elle.'],
                ['titre' => 'La restauration chronométrée', 'duree' => '1 heure', 'texte' => 'On efface volontairement une page et un produit sur la copie, puis on restaure la dernière sauvegarde complète. Le chronomètre tourne : la durée obtenue indique combien de temps le site resterait hors service en cas de vrai incident, et donc quelle fréquence de sauvegarde l\'entreprise doit choisir.'],
                ['titre' => 'La commande en mode test', 'duree' => '1 heure', 'texte' => 'Avec les clés de test de la passerelle et ses numéros fictifs, chaque participant passe une commande payée, une commande refusée et une commande abandonnée. Il note pour chacune le statut affiché dans WooCommerce et celui du tableau de bord de la passerelle, puis cherche l\'explication de tout écart.'],
                ['titre' => 'Le journal d\'entretien', 'duree' => '30 minutes', 'texte' => 'Un tableau simple : date, intervention, version avant et après, personne, contrôle effectué, incident éventuel. Il paraît administratif, mais c\'est lui qui permet, le jour d\'une panne, de savoir en deux minutes quelle mise à jour l\'a provoquée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles versions de WordPress, de WooCommerce et de PHP viser en octobre 2026 ?',
            'legende' => 'Versions relevées le 5 octobre 2026 sur wordpress.org, developer.woocommerce.com et php.net. Ces chiffres bougent vite : la formation apprend surtout à les retrouver soi-même dans le tableau de bord et sur les pages officielles.',
            'entetes' => ['Composant', 'Situation au 5 octobre 2026', 'Ce que l\'équipe vérifie'],
            'lignes'  => [
                ['WordPress', 'Version 7.1.2 du 22 septembre 2026, publiée pour corriger une faille de gravité critique ; la page des versions précise que seule la dernière de la série 7.1 est maintenue', 'Le numéro affiché en bas du tableau de bord et dans l\'écran des mises à jour'],
                ['Branche 7.0 de WordPress', 'Version 7.0.6 publiée le même jour, pour les sites qui ne sont pas encore passés à 7.1', 'Prévoir le passage à 7.1 sur la copie de test, puis en ligne'],
                ['WooCommerce', 'Version 11.1.2 ; exige WordPress 7.0 au moins et PHP 7.4 au moins ; plus de 7 millions d\'installations actives', 'La version installée, et l\'avis de mise à jour de la boutique'],
                ['WooCommerce 11.6', 'Prévue pour février 2027, elle exigera PHP 8.1 ou plus récent ; WooCommerce 11.5 sera la dernière version prévue compatible avec PHP 7.4 et 8.0', 'La version de PHP indiquée dans WooCommerce, État, Environnement serveur'],
                ['PHP', 'Branche 8.2 : correctifs de sécurité jusqu\'au 31 décembre 2026 ; 8.3 jusqu\'au 31 décembre 2027 ; 8.4 jusqu\'au 31 décembre 2028', 'La version choisie dans l\'espace client de l\'hébergeur'],
                ['Base de données', 'WordPress recommande MySQL 8.0 ou plus, ou MariaDB 10.11 ou plus, ainsi que PHP 8.3 ou plus et HTTPS', 'L\'écran Santé du site, onglet Informations, rubrique Serveur et Base de données'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le numéro de version compte-t-il autant pour une équipe qui n\'est pas technique ?',
            'paragraphes' => [
                'Parce que les mises à jour ne sont pas des nouveautés facultatives : une bonne partie corrige des failles. Selon les <a href="https://wordpress.org/news/category/releases/">annonces officielles de WordPress</a>, la version 7.1.1 du 17 septembre 2026 apportait 11 corrections de sécurité, et la 7.1.2, cinq jours plus tard, une seule correction pour une faille de gravité critique. Un site resté sur une version ancienne garde ces portes ouvertes. Savoir lire l\'écran des mises à jour et réagir dans la semaine fait donc partie des gestes de base.',
                'WordPress applique de lui-même une partie des mises à jour. La <a href="https://developer.wordpress.org/advanced-administration/upgrade/upgrading/">documentation de mise à niveau</a>, révisée le 1er juillet 2026, indique que les mises à jour automatiques sont activées sur la plupart des sites, et recommande une sauvegarde avant toute mise à jour manuelle. Pour les extensions et les thèmes, l\'administrateur choisit au cas par cas depuis WordPress 5.5, selon la <a href="https://wordpress.org/documentation/article/plugins-themes-auto-updates/">page consacrée aux mises à jour automatiques</a>, et WordPress tente ces mises à jour deux fois par jour.',
                'WooCommerce avance à son propre rythme. Sa <a href="https://developer.woocommerce.com/docs/contribution/releases/schedule/">page de calendrier</a> annonce une version majeure environ toutes les cinq semaines, suivie de versions correctives au besoin. L\'<a href="https://developer.woocommerce.com/2026/09/29/php-8-1-requirement/">avis publié le 29 septembre 2026</a> annonce que WooCommerce 11.6, prévue en février 2027, exigera PHP 8.1 ; un avertissement apparaîtra dès la version 11.3 sur les boutiques encore en PHP 7.4 ou 8.0. L\'éditeur recommande PHP 8.3 ou plus récent, et conseille d\'essayer le changement sur une copie de la boutique avant la production.',
                'La formation tire de ces règles une conduite simple. Les corrections de sécurité de WordPress passent vite. Les versions majeures de WordPress et de WooCommerce attendent quelques jours, le temps que les extensions importantes suivent, puis passent d\'abord sur la copie. La version de PHP se change une fois par an environ, toujours sur la copie d\'abord, avec un contrôle complet du paiement et des e-mails. Ce calendrier est écrit dans le journal d\'entretien pour ne dépendre de la mémoire de personne.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres montrent que l\'entretien d\'un site WordPress ne peut pas attendre ?',
            'items' => [
                ['valeur' => '11 334', 'libelle' => 'Nouvelles vulnérabilités recensées dans l\'écosystème WordPress en 2025, soit 42 % de plus qu\'en 2024 (rapport mis à jour le 25 février 2026)', 'source' => 'Patchstack, State of WordPress Security in 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '91 %', 'libelle' => 'Part de ces vulnérabilités situées dans les extensions, contre 9 % dans les thèmes et seulement 6 failles dans le cœur de WordPress', 'source' => 'Patchstack, State of WordPress Security in 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '46 %', 'libelle' => 'Part des vulnérabilités qui n\'avaient reçu aucun correctif au moment de leur publication', 'source' => 'Patchstack, State of WordPress Security in 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '5 heures', 'libelle' => 'Délai médian pondéré avant la première exploitation des failles les plus attaquées, selon le même rapport', 'source' => 'Patchstack, State of WordPress Security in 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '11', 'libelle' => 'Corrections de sécurité livrées par WordPress 7.1.1 le 17 septembre 2026, avec 17 corrections du cœur et 19 de l\'éditeur de blocs', 'source' => 'WordPress.org, annonces de versions', 'url' => 'https://wordpress.org/news/category/releases/'],
                ['valeur' => '7 millions', 'libelle' => 'Installations actives de WooCommerce et plus, selon sa fiche du répertoire officiel consultée le 5 octobre 2026', 'source' => 'WordPress.org, fiche de l\'extension WooCommerce', 'url' => 'https://wordpress.org/plugins/woocommerce/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que faut-il retenir de ces chiffres pour votre propre site ?',
            'paragraphes' => [
                'Le cœur de WordPress n\'est presque jamais le problème : le rapport de Patchstack n\'y compte que 6 failles en 2025, toutes de faible priorité. Le risque se loge dans les extensions et les thèmes, c\'est-à-dire dans ce que chaque site ajoute. Un site qui tourne avec huit extensions maintenues prend beaucoup moins de risques qu\'un site qui en accumule quarante, dont la moitié ne servent plus. C\'est pourquoi la deuxième journée de la formation est consacrée au tri, bien plus qu\'à la découverte de nouvelles extensions.',
                'Le délai d\'exploitation change aussi la façon de travailler. Quand une faille est attaquée quelques heures après sa publication, attendre la visite trimestrielle du prestataire ne suffit plus. L\'équipe doit savoir voir l\'alerte, appliquer la correction sur la copie, contrôler les pages clés et la reporter en ligne le jour même. Et quand aucun correctif n\'existe, ce qui arrive pour près de la moitié des failles publiées, la bonne décision est souvent de désactiver l\'extension en attendant.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment juger une extension avant de l\'installer ?',
            'legende' => 'Grille de lecture remise aux participants et appliquée pendant la formation aux extensions de leur propre site. Aucun critère ne suffit seul : c\'est leur combinaison qui fonde la décision.',
            'entetes' => ['Critère', 'Où le lire', 'Signal rassurant', 'Signal d\'alerte'],
            'lignes'  => [
                ['Dernière mise à jour', 'Fiche du répertoire officiel, colonne de droite', 'Quelques semaines ou quelques mois', 'Plus d\'un an sans nouvelle version'],
                ['Compatibilité déclarée', 'Mention « testée jusqu\'à » et bandeau jaune éventuel', 'La version de WordPress en cours, ou la précédente', 'Bandeau indiquant que l\'extension n\'a pas été testée avec les trois dernières versions majeures'],
                ['Installations actives', 'Fiche de l\'extension', 'Un nombre en rapport avec l\'usage : élevé pour une fonction courante', 'Très peu d\'installations pour une fonction sensible comme le paiement ou les sauvegardes'],
                ['Version de PHP exigée', 'Fiche de l\'extension', 'Compatible avec la version de votre hébergement', 'Exigence plus récente que votre serveur, ou très ancienne et jamais révisée'],
                ['Assistance', 'Onglet du forum d\'assistance', 'Questions récentes résolues par l\'auteur', 'Questions sans réponse depuis des mois'],
                ['Éditeur', 'Nom de l\'auteur, site officiel, documentation', 'Éditeur identifiable, documentation à jour, canal de contact', 'Extension obtenue hors du répertoire, archive « gratuite » d\'un produit payant'],
                ['Utilité réelle', 'Votre inventaire', 'Une fonction dont l\'entreprise a besoin et qu\'aucune autre extension ne remplit', 'Doublon d\'une extension existante, ou fonction déjà offerte par WordPress'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi l\'extension de paiement est-elle le point le plus fragile d\'une boutique ?',
            'texte' => 'Parce que c\'est souvent la moins entretenue du site, alors que c\'est elle qui encaisse. Le 5 octobre 2026, sur le répertoire officiel, l\'extension FedaPay pour WooCommerce était en version 0.3.9, mise à jour le 4 janvier 2025, et celle de KkiaPay en version 2.4.7 ; toutes deux étaient testées jusqu\'à WordPress 6.4.12 seulement, alors que WooCommerce exige désormais WordPress 7.0. Elles peuvent très bien fonctionner, mais rien ne le garantit après une mise à jour. Chaque mise à jour de WordPress, de WooCommerce ou de PHP est donc suivie d\'une commande de test sur la copie, et l\'équipe tient prêt un moyen de paiement de secours.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'FedaPay, KkiaPay ou CinetPay : comment chaque extension s\'installe-t-elle et se règle-t-elle ?',
            'legende' => 'Relevé du 5 octobre 2026 sur les fiches du répertoire wordpress.org, la documentation de FedaPay et de KkiaPay, et la page produits de CinetPay lue dans un navigateur. La formation n\'aide pas à choisir la passerelle : elle apprend à faire fonctionner et à surveiller celle que l\'entreprise a retenue.',
            'entetes' => ['Passerelle', 'Où trouver l\'extension', 'Réglages à saisir', 'Mode test', 'Point d\'attention'],
            'lignes'  => [
                ['FedaPay', 'Répertoire officiel (FedaPay Gateway for WooCommerce, plus de 600 installations actives), ou recherche « FedaPay WooCommerce » depuis le tableau de bord', 'Case « Activer FedaPay », clés privées copiées depuis le tableau de bord FedaPay : la clé de production commence par sk_live, celle de test par sk_sandbox', 'Case « Mode Test (sandbox) », à décocher au passage en production', 'Version 0.3.9 testée jusqu\'à WordPress 6.4.12 ; certificat SSL exigé en production ; la FAQ indique que les paiements récurrents ne sont pas encore pris en charge'],
                ['KkiaPay', 'Répertoire officiel (KKiapay WooCommerce Plugin, plus de 400 installations actives), ou archive proposée par la documentation de KkiaPay', 'Clés récupérées dans le tableau de bord KkiaPay, menu Développeurs, Clés API ; préférences d\'affichage puis enregistrement', 'Mode test à activer impérativement avec les clés de la sandbox, et numéros de téléphone de test fournis par KkiaPay', 'Version 2.4.7 testée jusqu\'à WordPress 6.4.12, PHP 7.4 au moins ; un compte marchand KkiaPay est requis avant usage'],
                ['CinetPay', 'Module WooCommerce annoncé sur la page produits de CinetPay, distribué par CinetPay et absent du répertoire wordpress.org', 'Identifiants du compte marchand (clé d\'API et identifiant de site) et adresse de notification de la boutique', 'Selon les réglages du compte marchand', 'La documentation technique, hébergée sur docs.cinetpay.com, n\'était pas joignable le 5 octobre 2026 : on vérifie la version du module et sa compatibilité directement auprès de CinetPay'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment brancher une extension mobile money sans risquer les vraies commandes ?',
            'paragraphes' => [
                'Tout commence par la fiche de l\'extension, avant le bouton « Installer ». On relève sa version, sa date de mise à jour, la version de WordPress et de PHP qu\'elle exige, puis on cherche dans sa documentation si elle fonctionne avec la page de commande en blocs. Selon la <a href="https://woocommerce.com/document/cart-checkout-blocks-status/">documentation de WooCommerce sur les blocs Panier et Commande</a>, ces blocs sont l\'expérience par défaut des boutiques créées depuis la version 8.3, en novembre 2023. Une extension de paiement qui ne connaît que l\'ancienne page n\'apparaît alors tout simplement pas au moment de payer.',
                'Dans ce cas, la même documentation explique comment revenir à la page classique : dans l\'éditeur, on sélectionne le bloc Commande, puis le bouton Transformer et l\'option du code court classique. Les participants font ce va-et-vient sur la copie de test, pour savoir le refaire le jour où une mise à jour change la donne. On vérifie aussi que le stockage des commandes en tables dédiées, activé par défaut sur les nouvelles installations depuis WooCommerce 8.2 selon la <a href="https://developer.woocommerce.com/docs/features/high-performance-order-storage/">documentation HPOS</a>, ne signale pas l\'extension comme incompatible.',
                'Vient ensuite le paramétrage. Chez FedaPay, la <a href="https://docs.fedapay.com/libraries/fr/plugin-fr">documentation des plugins</a> fait passer par WooCommerce, Réglages, Paiements, puis par deux cases et deux clés privées ; chez KkiaPay, la <a href="https://docs.kkiapay.me/v1/plugin-et-sdk/woo-commerce">page WooCommerce de la documentation</a> renvoie aux clés du menu Développeurs et impose le mode test avec la sandbox. Les clés de test sont saisies d\'abord, jamais celles de production. Les clés ne circulent ni par messagerie ni par courriel : la personne habilitée les copie elle-même depuis le tableau de bord de la passerelle.',
                'La phase de test suit une liste fixe : paiement réussi, paiement refusé, client qui ferme la page avant la fin, client qui paie deux fois, commande remboursée. Pour chacun, on compare le statut dans WooCommerce, celui de la passerelle et l\'e-mail reçu par le client. Une commande payée qui reste « en attente » vient presque toujours d\'une adresse de notification injoignable, d\'un site encore en HTTP ou d\'un pare-feu de l\'hébergeur qui bloque l\'appel de la passerelle. Le passage aux clés de production n\'a lieu qu\'une fois toute la liste cochée, puis on refait une vraie commande de faible montant.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle menée, et que garde l\'équipe ensuite ?',
            'intro' => 'La règle de base est de ne jamais apprendre sur un site de démonstration quand le vôtre existe, et de ne jamais faire une manipulation risquée ailleurs que sur sa copie.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Le formateur doit voir chaque écran au moment des mises à jour, de la restauration et du paramétrage du paiement. Au-delà de huit postes, ces moments se font à l\'aveugle.'],
                ['titre' => 'Votre site, puis sa copie', 'texte' => 'Les contenus se reprennent sur le vrai site, avec une relecture. Tout ce qui peut casser, de la suppression d\'extension à la restauration, se fait sur la copie de test créée le deuxième jour.'],
                ['titre' => 'Des comptes à vos noms', 'texte' => 'Chacun travaille avec son propre compte et le rôle qui correspond à son poste. Le formateur reçoit un accès temporaire, supprimé à la fin de la période de suivi, et ne devient jamais titulaire d\'un compte d\'hébergement ou de paiement.'],
                ['titre' => 'Des procédures écrites et modifiables', 'texte' => 'Carte des accès, grille d\'évaluation des extensions, procédure de mise à jour, procédure de sauvegarde et de restauration, liste des tests de paiement, journal d\'entretien : tout est remis dans un format que l\'équipe peut adapter.'],
                ['titre' => 'Une évaluation sur une tâche réelle', 'texte' => 'Le dernier après-midi, chaque participant reçoit une mission tirée au sort sur la copie : restaurer une page supprimée, retirer une extension, créer un produit variable, rejouer un paiement de test. Il la mène seul, devant le groupe.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Les questions d\'application restent possibles pendant la période convenue au devis, puis la séance de suivi à distance part du journal d\'entretien réellement tenu par l\'équipe.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils la formation utilise-t-elle, et que coûtent-ils chez l\'éditeur ?',
            'legende' => 'Prix et versions relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Ces frais sont payés par l\'entreprise à ses fournisseurs et ne font jamais partie du devis de la formation.',
            'entetes' => ['Outil', 'Version ou offre', 'Coût publié', 'Usage pendant la formation'],
            'lignes'  => [
                ['WordPress', '7.1.2', 'Gratuit, logiciel libre', 'Administration du site, rôles, contenus, mises à jour'],
                ['WooCommerce', '11.1.2', 'Extension gratuite ; certaines extensions complémentaires sont payantes', 'Réglages de la boutique, produits, commandes, paiement'],
                ['Extension FedaPay', '0.3.9', 'Extension gratuite ; aucun frais tant qu\'aucun paiement n\'est reçu, puis 1,80 % par paiement MTN, Moov ou Celtiis au Bénin et 3,60 % par carte Visa ou Mastercard ; retrait vers une banque à 3 500 XOF', 'Paramétrage et paiements en mode test'],
                ['Extension KkiaPay', '2.4.7', 'Extension gratuite ; offre Intégration à 9 900 FCFA HT par mois, commission de 1,5 % sur le mobile money supportée par le client', 'Paramétrage et paiements avec les numéros de test'],
                ['Module CinetPay', 'Version fournie par CinetPay', 'Grille propre à chaque pays et opérateur ; pour le Mali, affiché par défaut, entre 1,5 % et 3,5 % selon le volume d\'encaissement', 'Lecture des réglages, sur demande'],
                ['Hébergement', 'Offre avec PHP 8.3 ou plus, HTTPS et copie de test si possible', 'Payant, variable selon l\'hébergeur', 'Version de PHP, copie de test, sauvegardes du serveur'],
                ['Extension de sauvegarde', 'Celle déjà en place, ou une extension maintenue du répertoire', 'Formules gratuites et payantes selon l\'éditeur', 'Sauvegarde complète, envoi hors du serveur, restauration'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle routine d\'entretien l\'équipe tient-elle une fois la formation terminée ?',
            'legende' => 'Calendrier construit pendant la deuxième journée et adapté à l\'activité du site. La documentation de WordPress conseille une sauvegarde hebdomadaire pour un site peu actif et quotidienne pour un site très actif ; la CNIL recommande de garder 3 copies, sur 2 supports différents, dont 1 hors ligne.',
            'entetes' => ['Fréquence', 'Tâche', 'Durée indicative', 'Trace laissée'],
            'lignes'  => [
                ['Chaque jour, pour une boutique active', 'Sauvegarde automatique de la base, contrôle des commandes restées en attente', 'Quelques minutes', 'Rapport de l\'extension de sauvegarde'],
                ['Chaque semaine', 'Lecture de l\'écran des mises à jour et de Santé du site ; corrections de sécurité appliquées', '20 minutes', 'Ligne dans le journal d\'entretien'],
                ['Chaque mois', 'Mises à jour des extensions et du thème sur la copie, contrôle, report en ligne ; commande de test avec la passerelle', '1 à 2 heures', 'Versions avant et après, résultat des contrôles'],
                ['Chaque trimestre', 'Restauration complète d\'une sauvegarde sur la copie ; revue de l\'inventaire des extensions et des comptes', '2 heures', 'Durée de restauration, extensions et comptes retirés'],
                ['Chaque année', 'Changement de version de PHP sur la copie puis en ligne ; renouvellement du domaine et de l\'hébergement vérifié', 'Une demi-journée', 'Version de PHP, dates d\'échéance'],
                ['À chaque départ d\'un collaborateur', 'Suppression de son compte, changement des mots de passe partagés, mise à jour de la carte des accès', '30 minutes', 'Carte des accès datée'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'École privée, à Cotonou', 'probleme' => 'Le site WordPress publie les inscriptions et les actualités, mais tout passe par l\'ancien prestataire, injoignable pendant la rentrée, et le compte administrateur est partagé par quatre personnes.', 'solution' => 'Deux jours sans la partie boutique pour la secrétaire de direction et le chargé de communication : comptes nominatifs avec des rôles d\'éditeur, administrateur unique, carte des accès, et calendrier des actualités publié par l\'équipe.'],
                ['secteur' => 'Boutique de cosmétiques, à Abidjan', 'probleme' => 'Une mise à jour de WooCommerce a fait disparaître le moyen de paiement mobile money de la page de commande, et les ventes se sont arrêtées pendant un week-end sans que personne comprenne pourquoi.', 'solution' => 'Copie de test, vérification de la compatibilité de l\'extension avec la page de commande en blocs, retour au code court classique sur la copie, puis procédure écrite : aucune mise à jour le vendredi, commande de test après chaque mise à jour.'],
                ['secteur' => 'ONG de santé, à Ouagadougou', 'probleme' => 'Le site publie des rapports et des appels à candidatures ; des dizaines d\'extensions ont été ajoutées au fil des projets, et un message d\'alerte de l\'hébergeur signale un fichier suspect.', 'solution' => 'Inventaire et retrait des extensions abandonnées sur la copie, restauration d\'une sauvegarde saine, validation en deux étapes pour tous les comptes, et suivi à distance pour la première mise à jour mensuelle.'],
                ['secteur' => 'Artisan maroquinier, à Dakar', 'probleme' => 'Il vend à la diaspora et sur place, avec des produits en plusieurs couleurs dont le stock ne correspond jamais à ce qu\'affiche la boutique.', 'solution' => 'Produits variables refaits avec un stock par variante et un seuil d\'alerte, rôle de gestionnaire de boutique pour son assistante, et réglage des zones de livraison par quartier et par pays.'],
                ['secteur' => 'Cabinet de conseil, à Bruxelles', 'probleme' => 'L\'agence qui a créé le site a fermé ; l\'hébergement tourne encore sur une version de PHP sans correctifs, et personne n\'ose y toucher.', 'solution' => 'Formation à distance en séances de trois heures : carte des accès récupérée, copie de test, passage de PHP sur la copie avec contrôle des pages et du formulaire, puis en ligne, et sauvegardes rangées hors du serveur.'],
                ['secteur' => 'Épicerie fine en ligne, à Lyon', 'probleme' => 'La boutique WooCommerce est saine, mais la gérante craint chaque mise à jour et laisse les alertes s\'accumuler pendant des mois.', 'solution' => 'Routine mensuelle sur la copie fournie par l\'hébergeur, mises à jour automatiques activées pour les extensions secondaires seulement, et restauration chronométrée qui lui montre qu\'une erreur se rattrape en moins d\'une heure.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quelle organisation choisir ?',
            'legende' => 'Le format se décide au premier échange, selon le nombre de personnes, l\'existence d\'une boutique et l\'accès possible à une copie de test. Dans tous les formats, chacun travaille sur son propre site.',
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Ce qui change'],
            'lignes'  => [
                ['Intra-entreprise', 'Une organisation et les personnes qui tiennent son site ou sa boutique', 'Trois jours, ou deux sans boutique, puis la séance de suivi', 'Exercices sur votre site et votre hébergement, carte des accès et procédures écrites pour votre équipe'],
                ['Inter-entreprises', 'Indépendants, commerçants, associations d\'un même réseau ou incubateur', 'Trois jours', 'Chacun vient avec son site ou sa copie ; les écrans projetés au groupe sont choisis pour ne rien révéler de confidentiel'],
                ['À distance', 'Équipes dispersées, sites hébergés en Europe, participants hors de Cotonou', 'Six séances de trois heures environ', 'Partage d\'écran, exercices préparés entre deux séances, restauration et paiement de test faits en direct'],
                ['Hybride', 'Équipes qui débutent et préfèrent un premier contact en salle', 'Un jour en salle, puis séances courtes à distance', 'Accès, contenus et inventaire en salle ; mises à jour, sauvegardes et paiement à distance, au rythme du site'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation WordPress et WooCommerce, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun montant n\'est publié : le prix est fixé sur devis, après un premier échange qui, comme le cadrage et le devis, est gratuit. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. L\'hébergement, les extensions payantes et les commissions des passerelles restent payés par l\'entreprise à leurs éditeurs.',
            'items'      => [
                ['offre' => 'Site et boutique', 'prix' => 'Sur devis', 'inclus' => ['Trois jours sur votre site et sa copie', 'Paramétrage du paiement en mode test', 'Procédures écrites et journal d\'entretien', 'Séance de suivi à distance']],
                ['offre' => 'Site sans boutique', 'prix' => 'Sur devis', 'inclus' => ['Deux jours : accès, contenus, extensions, mises à jour et sauvegardes', 'Restauration chronométrée', 'Séance de suivi à distance']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Trois jours en groupe', 'Travail de chacun sur son propre site', 'Coût partagé entre les participants']],
                ['offre' => 'Parcours à distance', 'prix' => 'Sur devis', 'inclus' => ['Six séances en visioconférence', 'Exercices entre les séances', 'Relecture du journal d\'entretien']],
            ],
            'variations' => [
                'Le nombre de participants, huit au plus par groupe, et le nombre de groupes.',
                'La présence d\'une boutique et le nombre de passerelles de paiement à paramétrer.',
                'L\'état du site : nombre d\'extensions, retard de mises à jour, absence de copie de test ou de sauvegarde.',
                'Le mode : vos locaux, une salle louée, un déplacement hors de Cotonou, la distance ou l\'hybride.',
                'La durée du suivi après la séance prévue.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge la session ?',
            'paragraphes' => [
                'Peut-être, selon le pays et le fonds, et jamais sans réponse écrite préalable. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> ouvre le dépôt d\'un plan de formation à toute entreprise qui justifie du paiement régulier des deux taxes ; la demande passe ensuite par l\'analyse, le contrôle de ses services et une commission avant tout règlement. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> distingue trois guichets, dont l\'un finance le personnel des entreprises et les membres des organisations professionnelles, et reçoit les demandes sur une plateforme en ligne. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que tout prestataire qui veut accéder à des fonds publics ou mutualisés doit être certifié Qualiopi depuis le 1er janvier 2022. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds : soumettez le programme et le devis au fonds concerné avant de signer, et prévoyez le budget sans prise en charge.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent après la formation, et comment les éviter ?',
            'intro' => 'Les semaines qui suivent la session décident de ce qui restera. Voici les dérives que l\'on retrouve le plus souvent à la séance de suivi, et le réflexe qui les prévient.',
            'items' => [
                ['titre' => 'Mettre à jour directement en ligne', 'texte' => 'Par manque de temps, on saute la copie de test « pour une petite mise à jour ». C\'est précisément celle qui casse la page de commande un samedi. La règle tient en une phrase : aucune mise à jour d\'extension en ligne qui n\'ait d\'abord tourné sur la copie.'],
                ['titre' => 'Réinstaller des extensions « pour essayer »', 'texte' => 'Le tri fait pendant la formation se défait vite si chaque besoin nouveau se traduit par une installation. Toute extension nouvelle passe par la grille d\'évaluation et entre dans l\'inventaire, ou ne s\'installe pas.'],
                ['titre' => 'Croire que la sauvegarde existe', 'texte' => 'L\'extension affiche « sauvegarde réussie » depuis des mois, mais les fichiers restent sur le même serveur que le site, ou ne contiennent que la base. La restauration trimestrielle sur la copie est la seule preuve qui compte.'],
                ['titre' => 'Redonner le rôle d\'administrateur à tout le monde', 'texte' => 'Pour dépanner un collègue, on lui accorde le rôle le plus large, et il le garde. Les rôles d\'éditeur et de gestionnaire de boutique suffisent pour publier, gérer les produits et traiter les commandes.'],
                ['titre' => 'Oublier la commande de test', 'texte' => 'Le site s\'affiche, donc tout va bien. Pourtant, une boutique dont le paiement ne répond plus semble parfaitement normale jusqu\'au moment de payer. Une commande de test après chaque mise à jour, et chaque mois au minimum.'],
                ['titre' => 'Laisser filer la version de PHP', 'texte' => 'L\'hébergeur ne change pas toujours la version seul, et l\'avertissement de WooCommerce finit par être ignoré. La date de fin de support de la branche utilisée est notée dans le journal, avec un rappel trois mois avant.'],
                ['titre' => 'Coller une clé de paiement dans une conversation', 'texte' => 'Pour « aller plus vite », la clé de production part par messagerie vers un prestataire. Elle se copie depuis le tableau de bord par la personne habilitée, et se change si elle a circulé. La <a href="/formations/cybersecurite-employes">formation cybersécurité pour les employés</a> approfondit ces réflexes.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local pour un site WordPress ?',
            'paragraphes' => [
                'Les visiteurs arrivent surtout par le téléphone. Selon <a href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin">StatCounter</a>, en septembre 2026, le mobile représentait 60,3 % des pages vues au Bénin, contre 38,65 % pour l\'ordinateur ; en France, la même mesure donne 53,05 % au mobile et 44,45 % à l\'ordinateur. Chaque page modifiée pendant la formation est donc relue sur un téléphone, et les images sont allégées avant d\'être envoyées dans la médiathèque. L\'administration, elle, se fait sur ordinateur : on ne lance pas une mise à jour depuis un téléphone sur une connexion qui peut tomber au milieu.',
                'La connexion pèse aussi sur l\'entretien. Une mise à jour interrompue peut laisser le site en mode maintenance ; une sauvegarde envoyée vers un stockage externe peut échouer sans bruit. Les participants apprennent à reconnaître ces situations, à vérifier la taille des archives produites et à planifier les tâches lourdes à des heures creuses. WordPress et WooCommerce s\'utilisent en français, mais une partie des fiches d\'extensions, des forums et des messages d\'erreur reste en anglais : la formation apprend à les lire sans se décourager.',
                'Une boutique collecte des noms, des numéros, des adresses et l\'historique des achats. Au Bénin, ces traitements sont encadrés par la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> ; pour des clients situés dans l\'Union européenne, le RGPD s\'applique. Concrètement, l\'équipe apprend à limiter les comptes qui voient les commandes, à supprimer les comptes de test, à ne jamais exporter la liste des clients vers un fichier partagé sans raison, et à vérifier que les sauvegardes, qui contiennent toutes ces données, sont protégées comme le site lui-même.',
                'Sur ce dernier point, la fiche de la <a href="https://www.cnil.fr/fr/securite-sauvegarder">CNIL consacrée aux sauvegardes</a> recommande la règle dite 3, 2, 1 : trois copies, sur deux supports différents, dont une hors ligne, ainsi que des tests réguliers de restauration. L\'<a href="/histoires/maersk-notpetya">histoire de Maersk face à NotPetya</a> montre ce que vaut une copie restée hors ligne, et celle du <a href="/histoires/british-airways-piratage">piratage de British Airways</a> rappelle qu\'un script modifié sur une page de paiement peut passer inaperçu longtemps. Ce sont deux arguments concrets pour tenir la routine d\'entretien.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à administrer WordPress et WooCommerce avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'WordPress fait partie de son parcours depuis ses débuts. Chez VULCAIN-TECH, à Abomey-Calavi, entre 2019 et 2021, il initiait déjà des étudiants à la programmation web, WordPress compris ; chez Le KARAKATA SA, à Cotonou, il a ensuite dirigé l\'équipe de développement et travaillé sur des sites WordPress. Aujourd\'hui, il construit des boutiques et branche leurs passerelles de paiement : il connaît donc l\'outil des deux côtés, celui du développeur qui livre et celui de l\'équipe qui doit le faire vivre ensuite.',
                'Fort de ' . $ans . ' ans d\'expérience dans le numérique et formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP, et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, de l\'Afrique de l\'Ouest et centrale à l\'Europe et au Canada.',
                'Sa manière de former se vérifie : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur votre site et sa copie, des procédures remises dans un format modifiable, une évaluation sur une tâche réelle, et un avis franc quand le site demande une intervention plutôt qu\'une formation. Dans ce cas, le contrat de <a href="/services/maintenance-support">maintenance et support</a> ou une <a href="/services/refonte-migration-de-site">refonte avec migration</a> prennent le relais. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>, et l\'ensemble du catalogue sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Un site WordPress se tient par quelques habitudes plus que par des connaissances techniques : des comptes nominatifs avec le rôle juste, peu d\'extensions et toutes maintenues, chaque mise à jour essayée sur une copie, des sauvegardes rangées à trois endroits et restaurées pour de vrai, une commande de test après chaque changement, et un journal qui garde la trace de tout.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que votre équipe administre votre site et votre boutique en toute sécurité ?',
            'texte'  => 'Indiquez l\'adresse du site, la présence ou non d\'une boutique, la passerelle de paiement utilisée, le nombre de personnes à former et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation WordPress'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir coder pour suivre cette formation ?', 'r' => 'Non. Elle s\'adresse justement aux personnes qui administrent un site sans être développeuses. On n\'y écrit aucune ligne de PHP : on apprend à utiliser le tableau de bord, à juger les extensions, à mettre à jour, à sauvegarder et à paramétrer la boutique. Pour apprendre à programmer, la formation au développement web est la bonne porte.'],
        ['q' => 'Notre site existe déjà : la formation se fait-elle dessus ?', 'r' => 'Oui. Les contenus se travaillent sur le site réel, avec relecture, et toutes les manipulations risquées se font sur une copie de test créée pendant la deuxième journée, avec l\'hébergeur ou une extension de clonage. Si aucune copie n\'est possible, le programme est ajusté au premier échange.'],
        ['q' => 'Quelle version de WordPress faut-il avoir ?', 'r' => 'Au 5 octobre 2026, la version recommandée est WordPress 7.1.2, publiée le 22 septembre pour corriger une faille critique ; seule la dernière version de la série 7.1 est maintenue. WooCommerce 11.1.2 exige au moins WordPress 7.0. Un site plus ancien n\'empêche pas la formation : sa mise à niveau devient l\'un des exercices.'],
        ['q' => 'Faut-il activer les mises à jour automatiques des extensions ?', 'r' => 'Pour les extensions secondaires et bien maintenues, souvent oui. Pour celles qui touchent au paiement, aux commandes ou à la mise en page, mieux vaut garder la main et passer par la copie de test. WordPress permet ce choix extension par extension depuis la version 5.5 ; la formation aide à le faire pour chacune.'],
        ['q' => 'Quelle passerelle mobile money choisir pour WooCommerce ?', 'r' => 'La formation ne fait pas ce choix à votre place : elle apprend à installer, tester et surveiller l\'extension de la passerelle déjà retenue. Pour comparer les commissions, les pays et les moyens de paiement couverts, le comparatif FedaPay, KkiaPay et CinetPay publié sur ce site est le bon point de départ.'],
        ['q' => 'Pourquoi mon moyen de paiement n\'apparaît-il pas sur la page de commande ?', 'r' => 'Le plus souvent parce que la boutique utilise la page de commande en blocs, par défaut depuis WooCommerce 8.3, et que l\'extension de paiement ne la prend pas en charge. On le vérifie dans sa documentation, puis on revient au code court classique si nécessaire. Le bloc se transforme depuis l\'éditeur ; l\'exercice est fait sur la copie de test.'],
        ['q' => 'Une sauvegarde de l\'hébergeur ne suffit-elle pas ?', 'r' => 'Elle aide, mais elle reste chez le même fournisseur que le site, et l\'on ne sait pas toujours la restaurer soi-même. La formation ajoute une sauvegarde complète de la base et des fichiers rangée ailleurs, dont une copie hors ligne, et surtout une restauration réellement essayée chaque trimestre.'],
        ['q' => 'Qui, dans l\'équipe, doit être administrateur ?', 'r' => 'Une ou deux personnes au plus, celles qui installent et mettent à jour. Les autres reçoivent le rôle d\'éditeur pour publier, ou celui de gestionnaire de boutique, ajouté par WooCommerce, pour gérer les produits, les commandes, les remboursements et les codes promo. Chaque compte est nominatif et protégé par la validation en deux étapes.'],
        ['q' => 'Notre hébergeur annonce un changement de version de PHP : que faire ?', 'r' => 'Le faire d\'abord sur la copie de test, puis contrôler les pages, le formulaire, la commande et le paiement. WooCommerce 11.6, prévue en février 2027, exigera PHP 8.1 au moins, et l\'éditeur recommande PHP 8.3 ou plus récent. La version actuelle se lit dans WooCommerce, État, Environnement serveur.'],
        ['q' => 'La formation couvre-t-elle la vente en ligne et le référencement ?', 'r' => 'Non. Elle porte sur l\'outil. Faire tourner la boutique au quotidien (catalogue rédigé pour vendre, marge, livraison, retours, service client) relève de la formation e-commerce, et la visibilité sur Google de la formation visibilité Google. Les deux se combinent bien avec celle-ci.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, de la présence d\'une boutique, du nombre de passerelles, de l\'état du site, du format et du suivi souhaité. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Obtient-on une certification WordPress ou WooCommerce ?', 'r' => 'Non. La formation délivre une attestation de fin de formation, après une évaluation sur une tâche réelle. Richard SALANON n\'est certifié ni partenaire d\'aucun éditeur, et n\'affiche aucune certification Qualiopi. Ce que l\'équipe garde de plus utile, ce sont ses procédures écrites et son journal d\'entretien.'],
    ],

    'sources' => [
        ['titre' => 'WordPress.org, historique des versions (7.1.2 et 7.0.6 du 22 septembre 2026)', 'url' => 'https://wordpress.org/download/releases/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, annonces des versions 7.1, 7.1.1 et 7.1.2', 'url' => 'https://wordpress.org/news/category/releases/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, configuration serveur recommandée (modifiée le 7 mai 2026)', 'url' => 'https://wordpress.org/about/requirements/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, rôles et capacités', 'url' => 'https://wordpress.org/documentation/article/roles-and-capabilities/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, mises à jour automatiques des extensions et des thèmes', 'url' => 'https://wordpress.org/documentation/article/plugins-themes-auto-updates/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress Developer Resources, mettre à niveau WordPress (1er juillet 2026)', 'url' => 'https://developer.wordpress.org/advanced-administration/upgrade/upgrading/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress Developer Resources, renforcer la sécurité de WordPress (7 janvier 2026)', 'url' => 'https://developer.wordpress.org/advanced-administration/security/hardening/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress Developer Resources, sauvegarder WordPress (4 juin 2026)', 'url' => 'https://developer.wordpress.org/advanced-administration/security/backup/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, fiche de l\'extension WooCommerce (version 11.1.2)', 'url' => 'https://wordpress.org/plugins/woocommerce/', 'date' => '2026-10-05'],
        ['titre' => 'WooCommerce Developer, nouvelle exigence PHP 8.1 pour WooCommerce 11.6 (29 septembre 2026)', 'url' => 'https://developer.woocommerce.com/2026/09/29/php-8-1-requirement/', 'date' => '2026-10-05'],
        ['titre' => 'WooCommerce Developer, calendrier des versions', 'url' => 'https://developer.woocommerce.com/docs/contribution/releases/schedule/', 'date' => '2026-10-05'],
        ['titre' => 'WooCommerce Developer, stockage des commandes haute performance (HPOS)', 'url' => 'https://developer.woocommerce.com/docs/features/high-performance-order-storage/', 'date' => '2026-10-05'],
        ['titre' => 'WooCommerce, rôles et capacités (client, gestionnaire de boutique)', 'url' => 'https://woocommerce.com/document/roles-capabilities/', 'date' => '2026-10-05'],
        ['titre' => 'WooCommerce, état des blocs Panier et Commande et retour au code court classique', 'url' => 'https://woocommerce.com/document/cart-checkout-blocks-status/', 'date' => '2026-10-05'],
        ['titre' => 'PHP, branches maintenues et calendrier de support', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-05'],
        ['titre' => 'Patchstack, State of WordPress Security in 2026 (mis à jour le 25 février 2026)', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, extension FedaPay Gateway for WooCommerce (version 0.3.9)', 'url' => 'https://wordpress.org/plugins/woo-gateway-fedapay/', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation des plugins (WooCommerce)', 'url' => 'https://docs.fedapay.com/libraries/fr/plugin-fr', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, page tarifs', 'url' => 'https://www.fedapay.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, extension KKiapay WooCommerce Plugin (version 2.4.7)', 'url' => 'https://wordpress.org/plugins/kkiapay-woocommerce/', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, documentation du plugin WooCommerce', 'url' => 'https://docs.kkiapay.me/v1/plugin-et-sdk/woo-commerce', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, page tarifs', 'url' => 'https://kkiapay.me/tarifs/', 'date' => '2026-10-05'],
        ['titre' => 'CinetPay, page produits (modules e-commerce, lue dans un navigateur)', 'url' => 'https://cinetpay.com/products/payments', 'date' => '2026-10-05'],
        ['titre' => 'CinetPay, page tarifs (lue dans un navigateur)', 'url' => 'https://cinetpay.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, mobile, ordinateur et tablette au Bénin (septembre 2026)', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, mobile, ordinateur et tablette en France (septembre 2026)', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/france', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, sécurité : sauvegarder (14 mars 2024)', 'url' => 'https://www.cnil.fr/fr/securite-sauvegarder', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['e-commerce', 'developpement-web', 'visibilite-google', 'cybersecurite-employes', 'laravel-php', 'seo-contenu'],
        'services'    => ['site-vitrine-professionnel', 'site-e-commerce', 'maintenance-support'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
