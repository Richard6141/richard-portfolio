<?php
// ============================================================
// data/formations/power-bi-looker-studio.php · Fiche formation « Tableaux de
// bord Power BI et Looker Studio » (vague 1B, lot B, domaine erp-gestion).
// Angle propre : CONSTRUIRE des tableaux de bord hors de l'ERP (indicateurs
// calculables, préparation, modèle en étoile, visualisation, connexion aux
// tableurs, à Odoo, à Dolibarr et aux bases, partage, droits, actualisation)
// avec Power BI ou Looker Studio, que Google présente désormais sous le nom
// de Data Studio. Aucune ancienne page.
// Sœurs non traitées : excel-google-sheets (tableur), sql-analystes (requêtes
// de lecture), odoo-dirigeants (tableaux internes à Odoo), data-literacy
// (lire et questionner les chiffres pour décider), crm-pipeline.
// Sources consultées le 05/10/2026 : page de tarification de Power BI
// (curl), Microsoft Learn (licences, actualisation, passerelle, publier sur
// le web, Power BI Desktop, inscription, schéma en étoile, RLS, connecteurs
// MySQL et PostgreSQL, région Fabric), page produit et documentation de Data
// Studio (fraîcheur, identifiants, partage, MySQL, PostgreSQL, Sheets, Excel,
// CSV, envoi programmé, Pro), Odoo 20.0 (API externe, Odoo Online), wiki
// Dolibarr (API REST, prérequis), DataReportal, SGG du Bénin, CNIL, FDFP,
// 3FPT, France Compétences. Tarifs d'Odoo : fait vérifié du catalogue.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation tableaux de bord Power BI et Looker Studio : définir des indicateurs calculables, relier tableurs, Odoo, Dolibarr et bases de données, puis publier des rapports qui se mettent à jour seuls",
    'title'   => "Formation Power BI et Looker Studio | Richard SALANON",
    'meta'    => "Formation Power BI et Looker Studio (Data Studio) : indicateurs, modèle de données, connexion à Odoo, Dolibarr et aux tableurs, partage et actualisation.",
    'en_bref' => "Cette formation apprend à construire des tableaux de bord de gestion avec Power BI ou avec Looker Studio, que Google présente désormais sous le nom de Data Studio : choisir des indicateurs calculables, préparer et modéliser les données, les relier aux tableurs, à Odoo, à Dolibarr ou à une base, puis partager les rapports avec les bons droits. Elle s'adresse aux dirigeants, aux contrôleurs de gestion et aux responsables d'activité déjà à l'aise avec les tableaux croisés. Elle dure trois jours en six demi-journées, plus deux heures de suivi à distance, en intra, en inter, à distance ou en hybride. Son prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => false,
    'duree'   => "3 jours en six demi-journées, plus 2 h de suivi à distance",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : des questions de gestion aux indicateurs qu'un logiciel sait calculer",
            'duree'  => '3 h 30',
            'points' => [
                "Les questions que la direction pose chaque semaine, recueillies au cadrage, triées entre celles qu'un graphique peut servir et celles qui demandent une conversation.",
                "La fiche d'identité d'un indicateur : formule écrite en toutes lettres, table et colonne d'origine, périmètre retenu (sociétés, agences, statuts), rythme de mise à jour, personne qui en répond.",
                "Chiffre d'affaires commandé, facturé ou encaissé : trois indicateurs distincts que l'on range trop souvent sous le même nom.",
                "Ratios et moyennes : pourquoi la moyenne des marges des agences n'est pas la marge de l'entreprise.",
                "Croquis de la page sur papier : une page par public, cinq ou six visuels au plus, le chiffre principal en haut à gauche.",
                "Exercice : rédiger les fiches de quatre indicateurs de votre entreprise et les faire valider par la personne qui s'en servira.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : préparer des données qu'un outil de visualisation peut lire",
            'duree'  => '3 h 30',
            'points' => [
                "Le format attendu par les deux outils : une ligne par opération, une colonne par information, une seule ligne d'en-tête, aucun sous-total ni cellule fusionnée.",
                "Power Query dans Power BI Desktop : importer, typer les colonnes, retirer les lignes de titre, empiler les exports mensuels, relire chaque étape enregistrée.",
                "Côté Data Studio : préparer la source dans Google Sheets, nommer les colonnes sans accent pour les connecteurs de bases, contrôler le type de chaque champ.",
                "Dates au format jour, mois, année, montants en francs CFA sans décimales, séparateurs des fichiers CSV, encodage UTF-8.",
                "Exercice : charger trois exports réels (ventes, encaissements, stock) et prouver qu'aucune ligne ne s'est perdue au chargement.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : le modèle de données, ou comment ne plus produire de totaux faux",
            'duree'  => '3 h 30',
            'points' => [
                "Tables de faits et tables de dimension : le schéma en étoile que recommande Microsoft, appliqué aux lignes de facture, aux clients, aux articles et aux agences.",
                "La table de dates : exercice comptable, mois, trimestres, semaines, jours ouvrés.",
                "Relations, cardinalité et sens du filtre : ce qui arrive quand un client figure deux fois dans la table des clients.",
                "Premières mesures DAX : SUM, DIVIDE, CALCULATE, cumul depuis le début de l'exercice, comparaison avec l'année précédente.",
                "Dans Data Studio : champs calculés, agrégations, combinaison de deux sources par une clé commune.",
                "Exercice : retrouver, au franc près, le chiffre d'affaires d'un mois que la comptabilité a déjà arrêté.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : des visuels qui répondent en dix secondes",
            'duree'  => '3 h 30',
            'points' => [
                "Choisir le visuel selon la question : évolution, comparaison, répartition, écart à un objectif, liste d'exceptions.",
                "Cartes de chiffres clés avec leur période de comparaison, courbes mensuelles, barres triées, tableaux d'exceptions.",
                "Filtres de page, segments, sélecteur de période, exploration du mois jusqu'à la facture.",
                "Mise en page pour téléphone dans Power BI, lisibilité d'un rapport Data Studio sur petit écran.",
                "Des couleurs qui signalent un écart au lieu de décorer, et des titres qui disent ce que montre le graphique.",
                "Exercice : la page de direction de votre entreprise, testée par un collègue qui ne l'a jamais vue.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : brancher les vraies sources et organiser l'actualisation",
            'duree'  => '3 h 30',
            'points' => [
                "Ranger les fichiers sources sur OneDrive, SharePoint ou Google Drive plutôt que sur le bureau d'un ordinateur.",
                "Odoo : exports réguliers, API externe selon la formule souscrite, copie PostgreSQL quand l'entreprise héberge elle-même son Odoo.",
                "Dolibarr : module API REST avec la clé d'un utilisateur réservé à la lecture, ou copie de la base MySQL ou MariaDB.",
                "La passerelle de données locale de Microsoft pour les sources du réseau de l'entreprise ; les adresses à autoriser pour Data Studio.",
                "Planifier l'actualisation, lire l'historique, comprendre un échec et désigner qui reçoit l'alerte.",
                "Exercice : faire passer le rapport de la veille d'un fichier local à une source qui se met à jour sans intervention.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : partager, protéger et mettre en service",
            'duree'  => '3 h 30',
            'points' => [
                "Licences et partage dans Power BI : espace de travail, rôles, application, et qui doit payer quelle licence.",
                "Sécurité au niveau des lignes : chaque directeur d'agence ne voit que son agence, à condition d'être lecteur de l'espace.",
                "Data Studio : identifiants du propriétaire ou du lecteur, partage par invitation ou par lien, envoi programmé du rapport en PDF.",
                "Publication sur le Web et partage par lien public : dans quels cas les interdire.",
                "Documentation du rapport : sources, fiches d'indicateurs, propriétaire, calendrier d'actualisation.",
                "Évaluation : chaque participant présente son tableau de bord, et le groupe contrôle trois chiffres contre leur source.",
            ],
        ],
        [
            'titre'  => "Trois semaines après la mise en service, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Historique des actualisations depuis la formation : réussites, échecs, causes.",
                "Pages réellement ouvertes par les lecteurs, et visuels que personne ne consulte.",
                "Écarts signalés entre le tableau de bord et les états du logiciel, retracés jusqu'à leur origine.",
                "Liste des évolutions à faire seul, séparée de celles qui demandent un intégrateur.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "3 jours en six demi-journées, plus 2 h de suivi"],
        ['l' => 'Public', 'v' => "Dirigeants, contrôleurs de gestion, responsables d'activité, chargés de reporting"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride, huit participants au plus"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous construire à la fin de la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Dans beaucoup d'entreprises, le tableau de bord du lundi est un classeur rebâti à la main : on exporte les ventes du logiciel, on colle les encaissements de la banque, on recopie le stock, puis on répare les formules qui ont glissé. Le travail occupe une demi-journée, le résultat arrive avec une semaine de retard, et deux personnes qui le refont obtiennent rarement le même total. Power BI, de Microsoft, et Looker Studio, que Google présente désormais sous le nom de Data Studio, permettent de faire ce travail une seule fois, proprement, puis de le laisser se répéter. Cette formation apprend à s'en servir ainsi, sur vos données.",
                "À la fin des trois jours, chaque participant sait faire seul six choses, vérifiées sur un rapport qu'il a lui-même construit. Écrire la fiche d'un indicateur sans ambiguïté sur sa formule ni sur son périmètre. Charger et nettoyer des exports de tableur, d'Odoo ou de Dolibarr sans perdre de lignes. Bâtir un modèle en étoile avec une table de dates et des relations justes. Composer une page que son destinataire comprend en dix secondes. Relier le rapport à une source qui se met à jour, et planifier cette mise à jour. Partager enfin le rapport en sachant précisément qui voit quelles lignes.",
                "La formation reste du côté de la construction. Lire un chiffre avec un œil critique, le questionner et en tirer une décision relève d'une formation distincte du catalogue, Décider avec les données. Les tableaux de bord internes à Odoo, sans outil extérieur, sont traités dans Odoo pour dirigeants, et l'écriture de requêtes de lecture dans SQL pour analystes métiers. Le tableur reste le socle : la <a href=\"/formations/excel-google-sheets\">formation Excel et Google Sheets pour la gestion</a> apprend à produire les classeurs propres sans lesquels aucun tableau de bord ne tient longtemps.",
                "Elle n'aborde pas l'administration d'une plateforme de données. Les capacités et entrepôts de Microsoft Fabric, BigQuery ou les connecteurs développés sur mesure dépassent ce que trois jours permettent, et ne se justifient qu'à des volumes que peu de PME atteignent. Le langage DAX avancé n'apparaît que lorsqu'un exercice l'exige. Si votre besoin est d'abord de faire circuler les données entre logiciels, par exemple pour qu'Odoo reçoive les commandes d'un site, il relève d'un projet d'<a href=\"/services/api-rest-integrations\">intégration par API</a>, pas d'une formation.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le public se reconnaît à une situation : les chiffres existent, dans un logiciel ou dans des classeurs, mais les réunir prend trop de temps et personne n'est sûr du résultat. Un entretien de positionnement, avant le devis, vérifie la pratique du tableur et la connaissance des données de chacun.",
            'items' => [
                ['titre' => "Le dirigeant qui veut son propre tableau de bord", 'texte' => "Il suit au minimum la première matinée, où se fixent les indicateurs, et la dernière après-midi, où se décident les droits. Dans une petite structure, il suit souvent tout le parcours et construit lui-même sa page de direction."],
                ['titre' => "Le contrôleur de gestion ou le responsable financier", 'texte' => "C'est le constructeur principal. Il tient aujourd'hui le reporting dans des classeurs ; il repart avec un modèle qu'il entretient, des mesures documentées et une actualisation planifiée."],
                ['titre' => "Les responsables d'activité", 'texte' => "Directeur commercial, responsable des achats, chef de dépôt, directeur d'agence : chacun construit la page de son périmètre, branchée sur le même modèle que celle de la direction, pour que tout le monde parle des mêmes chiffres."],
                ['titre' => "Le chargé de reporting ou l'assistant de direction", 'texte' => "Celui qui prépare chaque mois les chiffres du comité. La formation transforme sa tâche : il ne recopie plus, il vérifie l'actualisation et signale les écarts."],
                ['titre' => "Le référent informatique", 'texte' => "Il ne suit pas forcément les trois jours, mais prépare avec le formateur les comptes, les accès en lecture, l'installation de la passerelle de données et l'ouverture du pare-feu lorsqu'une base doit être lue depuis l'extérieur."],
                ['titre' => "Prérequis", 'texte' => "Des données déjà tenues dans un tableur ou dans un ERP, et l'aisance avec les tableaux croisés dynamiques. Aucune notion de programmation n'est demandée. Ceux pour qui le tableur reste fragile suivent d'abord la formation Excel et Google Sheets."],
                ['titre' => "Poste de travail", 'texte' => "Selon Microsoft, Power BI Desktop demande Windows 10 ou une version ultérieure, au moins 2 Go de mémoire disponible (4 Go conseillés) et un écran d'au moins 1440 x 900 pixels. Il ne s'installe pas sur macOS : sur un Mac, on construit dans Data Studio, qui fonctionne dans le navigateur."],
                ['titre' => "Comptes", 'texte' => "Le service Power BI exige une adresse professionnelle ou scolaire : Microsoft précise qu'une adresse Gmail ou Hotmail ne suffit pas. Data Studio demande un compte Google. Les comptes sont créés et testés avant la première séance, jamais pendant."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Power BI ou Data Studio : lequel choisir pour votre entreprise ?",
            'options'  => ['Power BI', 'Data Studio (ex-Looker Studio)'],
            'criteres' => [
                ['critere' => "Construire un rapport", 'valeurs' => ["Gratuit avec Power BI Desktop", "Sans frais, dans le navigateur"]],
                ['critere' => "Partager avec des collègues", 'valeurs' => ["Licence Pro à 12,10 € HT par utilisateur et par mois pour l'auteur et pour chaque lecteur, sauf capacité Fabric F64 ou supérieure", "Sans frais ; Data Studio Pro à 9 dollars par utilisateur, par projet et par mois pour les fonctions d'équipe"]],
                ['critere' => "Poste nécessaire", 'valeurs' => ["Windows pour construire ; navigateur ou application mobile pour lire", "Navigateur, sur tout système"]],
                ['critere' => "Compte", 'valeurs' => ["Adresse professionnelle ou scolaire", "Compte Google"]],
                ['critere' => "Sources les plus naturelles", 'valeurs' => ["Excel, SharePoint, OneDrive, bases SQL Server, PostgreSQL et MySQL", "Google Sheets, Google Analytics, BigQuery, MySQL, PostgreSQL ; plus de 1 400 sources annoncées par Google"]],
                ['critere' => "Mise à jour des données", 'valeurs' => ["Jusqu'à 8 actualisations planifiées par jour avec Pro, 48 en Premium par utilisateur", "Selon le connecteur : 15 minutes par défaut pour Sheets, 12 heures pour une base, réglable"]],
                ['critere' => "Modèle de données", 'valeurs' => ["Tables reliées en étoile, mesures en DAX", "Sources simples ou combinées, champs calculés"]],
                ['critere' => "Restreindre les lignes visibles", 'valeurs' => ["Sécurité au niveau des lignes, appliquée aux lecteurs", "Identifiants du lecteur, ou une source distincte par public"]],
            ],
            'verdict'  => "Une entreprise équipée de Microsoft 365, dont les données vivent dans Excel ou dans une base, et qui veut un vrai modèle de données, choisira Power BI. Une petite équipe qui travaille dans Google Sheets et n'a pas de budget de licence commencera par Data Studio. La formation se déroule sur l'outil retenu au cadrage ; l'autre est présenté en contrepoint, et une demi-journée de comparaison s'ajoute seulement si le choix n'est pas fait.",
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment le premier tableau de bord est-il construit sur vos données, de la préparation à la mise en service ?",
            'items' => [
                ['titre' => "Entretien de cadrage", 'duree' => "Une heure, en visioconférence", 'texte' => "On liste les questions auxquelles le tableau de bord doit répondre, les sources qui contiennent les réponses, l'outil déjà disponible dans l'entreprise et les licences en place. Le choix entre Power BI et Data Studio se fait ici, sur des critères écrits."],
                ['titre' => "Inventaire des sources", 'duree' => "Une semaine avant la première séance", 'texte' => "Pour chaque source : où elle se trouve, qui la tient, sous quel format, à quel rythme elle change et comment la lire sans pouvoir la modifier. Un extrait de trois mois, anonymisé si besoin, sert aux premiers exercices."],
                ['titre' => "Fiches d'indicateurs", 'duree' => "Jour 1", 'texte' => "Chaque indicateur reçoit sa formule, sa source, son périmètre et son responsable. Un indicateur dont personne ne sait dire comment il se calcule ne passe pas à l'étape suivante, même s'il figurait dans le classeur de l'ancien reporting."],
                ['titre' => "Maquette sur papier", 'duree' => "Jour 1", 'texte' => "La page est dessinée avant d'ouvrir l'outil : emplacement de chaque visuel, filtres, période par défaut. Le futur lecteur la valide. Cette demi-heure évite des journées de retouches sur un écran déjà construit."],
                ['titre' => "Construction", 'duree' => "Jours 2 et 3", 'texte' => "Préparation des données, modèle, mesures, puis pages. Chaque participant construit son propre rapport ; le formateur relit le modèle de chacun avant que les visuels ne soient posés, car une relation fausse ne se voit plus une fois la page jolie."],
                ['titre' => "Recette des chiffres", 'duree' => "Jour 3", 'texte' => "Trois chiffres du tableau de bord sont rapprochés d'un état officiel : la balance, un journal de ventes, un inventaire. Tant qu'un écart reste inexpliqué, le rapport n'est pas partagé."],
                ['titre' => "Mise en service", 'duree' => "Fin du jour 3, puis suivi", 'texte' => "Un propriétaire nommé, un calendrier d'actualisation, une liste de lecteurs et leurs droits, une date de retrait de l'ancien classeur. La séance de suivi vérifie trois semaines plus tard que ces décisions ont tenu."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment relier vos tableurs, Odoo, Dolibarr et vos bases à Power BI ou à Data Studio ?",
            'legende' => "Chemins vérifiés le 5 octobre 2026 dans la documentation de Microsoft, de Google, d'Odoo 20.0 et de Dolibarr. Le chemin définitif se décide au cadrage, selon la formule souscrite et l'hébergement de chaque logiciel.",
            'entetes' => ['Source', 'Chemin conseillé', 'Point à vérifier avant la formation'],
            'lignes'  => [
                ["Classeur Excel", "Power BI : fichier rangé sur OneDrive ou SharePoint, relu par le service. Data Studio : connecteur Microsoft Excel, par import du fichier.", "Data Studio refuse les classeurs d'Excel Online, ceux protégés par mot de passe ou contenant des tableaux croisés dynamiques, et limite chaque fichier à 100 Mo."],
                ["Google Sheets", "Data Studio : connecteur natif, actualisé toutes les 15 minutes par défaut.", "Le fichier doit se trouver dans un Drive standard : selon Google, Data Studio n'accède pas aux fichiers d'un Drive d'équipe."],
                ["Exports CSV d'un logiciel", "Un dossier partagé où chaque export remplace le précédent ; Power Query empile ou remplace les fichiers.", "L'import de fichiers de Data Studio attend des virgules comme séparateurs et un encodage UTF-8, alors qu'un Excel réglé en français enregistre souvent ses CSV avec des points-virgules."],
                ["Odoo Online, formule Standard", "Exports réguliers vers le dossier partagé.", "La documentation d'Odoo 20.0 réserve l'accès aux données par l'API externe aux formules Personnalisé : il n'existe ni avec l'application gratuite ni avec Standard."],
                ["Odoo, formule Personnalisé", "API externe JSON-2, apparue avec la version 19.0, appelée avec la clé d'un utilisateur aux droits limités ; connecteur à faire écrire.", "Les API XML-RPC et JSON-RPC sont dépréciées ; Odoo annonce leur retrait pour Odoo 22, à l'automne 2028. Un connecteur neuf part donc sur JSON-2."],
                ["Odoo hébergé par l'entreprise", "Lecture d'une copie ou d'une réplique PostgreSQL ; Power BI Desktop embarque le fournisseur Npgsql depuis décembre 2019.", "Jamais la base de production. Data Studio indique avoir testé son connecteur sur PostgreSQL 9.6 à 14 : une version plus récente se teste avant la session."],
                ["Dolibarr", "Module API REST, appelé avec l'en-tête DOLAPIKEY d'un utilisateur dédié ; ou copie de la base MySQL ou MariaDB.", "Power BI exige le pilote MySQL Connector/NET d'Oracle, y compris sur la machine de la passerelle. Data Studio ne se connecte pas à localhost et demande une adresse publique."],
                ["Base d'une application métier", "Connecteur de base, compte en lecture seule, passerelle si la base reste dans vos locaux.", "Data Studio tronque au-delà de 150 000 lignes par requête et refuse les noms de colonnes non ASCII, accents compris."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment construire un modèle de données qui donne des totaux justes ?",
            'intro' => "Le guide de Microsoft sur le schéma en étoile, mis à jour le 30 décembre 2024, demande de classer chaque table du modèle comme table de faits ou table de dimension. Cette règle simple évite la plupart des totaux faux rencontrés en séance ; voici comment elle se traduit sur des données de gestion.",
            'items' => [
                ['titre' => "Une table de faits par processus", 'texte' => "Les lignes de facture, les encaissements, les mouvements de stock : chacun dans sa table, au niveau le plus fin disponible. On additionne ensuite au niveau voulu, jamais l'inverse : un total mensuel importé ne se redécoupe plus par client."],
                ['titre' => "Des dimensions qui décrivent", 'texte' => "Clients, articles, agences, commerciaux : une ligne par élément, une clé unique. Un client présent deux fois dans la table des clients double silencieusement son chiffre d'affaires dans tous les visuels qui le croisent."],
                ['titre' => "Une table de dates complète", 'texte' => "Tous les jours de la période, sans trou, avec le mois, le trimestre et l'exercice de l'entreprise quand il ne suit pas l'année civile. C'est elle qui rend possibles le cumul annuel et la comparaison avec l'an passé."],
                ['titre' => "Des mesures pour les ratios", 'texte' => "Le taux de marge se calcule comme la somme des marges divisée par la somme des ventes, avec DIVIDE pour éviter la division par zéro. Une colonne de taux par ligne, ensuite moyennée, donne un chiffre faux et crédible."],
                ['titre' => "Statuts et avoirs traités à la source", 'texte' => "Brouillons, pièces annulées, avoirs, acomptes : on décide une fois, dans la préparation, ce qui entre dans le chiffre d'affaires. Le filtre posé sur un seul visuel est oublié sur le suivant."],
                ['titre' => "Sociétés et devises séparées", 'texte' => "Une base qui réunit plusieurs sociétés ou plusieurs devises garde une colonne pour chacune. Additionner des francs CFA et des euros dans la même mesure est une erreur qu'aucun graphique ne signale."],
                ['titre' => "Des noms pour le lecteur", 'texte' => "« Chiffre d'affaires HT » plutôt que le nom technique de la colonne. Avec les connecteurs de bases de Data Studio, qui exigent des noms ASCII à la source, le renommage en français se fait dans l'outil."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel visuel répond à quelle question de gestion ?",
            'legende' => "Les associations travaillées le deuxième après-midi. La colonne de droite reprend les erreurs les plus fréquentes dans les premiers rapports des participants.",
            'entetes' => ['Question posée', 'Visuel conseillé', 'Erreur fréquente'],
            'lignes'  => [
                ["Où en sommes-nous ce mois-ci ?", "Carte de chiffre clé avec la valeur du même mois l'an passé", "Un chiffre seul, sans période de comparaison, qui ne dit ni bien ni mal."],
                ["Comment évoluent les ventes ?", "Courbe mensuelle sur douze à vingt-quatre mois", "Un axe vertical qui ne part pas de zéro sur un histogramme, et qui grossit une variation minime."],
                ["Quels clients ou quels articles pèsent le plus ?", "Barres horizontales triées, dix premiers et un regroupement « autres »", "Un camembert à quinze parts que personne ne sait lire."],
                ["Atteignons-nous l'objectif ?", "Barre de réalisé face à l'objectif, écart en valeur et en pourcentage", "Une jauge décorative qui occupe un quart de la page pour un seul nombre."],
                ["Qui faut-il relancer aujourd'hui ?", "Tableau d'exceptions trié par retard, avec mise en forme conditionnelle", "Un graphique là où l'utilisateur a besoin de noms et de montants."],
                ["Quelle agence décroche ?", "Petits graphiques identiques, un par agence, sur la même échelle", "Des échelles différentes d'un graphique à l'autre, qui rendent la comparaison trompeuse."],
                ["D'où vient l'écart du mois ?", "Exploration du mois vers les clients, puis vers les factures", "Une page supplémentaire pour chaque question, jusqu'à vingt pages que personne n'ouvre."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés faut-il connaître avant de choisir l'outil ?",
            'items' => [
                ['valeur' => '12,10 € HT', 'libelle' => "Prix mensuel de Power BI Pro par utilisateur, en paiement annuel, relevé le 5 octobre 2026 ; cette licence sert à publier, et aussi à lire un rapport partagé hors capacité Fabric F64", 'source' => 'Microsoft, tarification de Power BI', 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-bi/pricing'],
                ['valeur' => '8 par jour', 'libelle' => "Actualisations planifiées d'un modèle en capacité partagée, contre 48 en Premium par utilisateur, selon la page mise à jour le 18 septembre 2026", 'source' => 'Microsoft Learn, actualisation des données dans Power BI', 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/connect-data/refresh-data'],
                ['valeur' => '2 mois', 'libelle' => "Sans aucune visite du rapport pendant cette durée, Power BI suspend l'actualisation planifiée et en avertit le propriétaire par courriel", 'source' => 'Microsoft Learn, actualisation des données dans Power BI', 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/connect-data/refresh-data'],
                ['valeur' => '1440 x 900', 'libelle' => "Résolution d'écran minimale de Power BI Desktop ; les résolutions inférieures, comme 1280 x 800, ne sont pas prises en charge (page mise à jour le 22 juillet 2026)", 'source' => 'Microsoft Learn, obtenir Power BI Desktop', 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/fundamentals/desktop-get-the-desktop'],
                ['valeur' => '9 dollars', 'libelle' => "Prix de Data Studio Pro par utilisateur, par projet et par mois ; la version standard reste sans frais pour créer et lire des rapports", 'source' => 'Google Cloud, Data Studio', 'url' => 'https://cloud.google.com/data-studio?hl=fr'],
                ['valeur' => '150 000 lignes', 'libelle' => "Nombre maximal de lignes par requête des connecteurs MySQL et PostgreSQL de Data Studio ; au-delà, les données sont tronquées", 'source' => 'Documentation de Data Studio, connecteur MySQL', 'url' => 'https://docs.cloud.google.com/data-studio/connect-to-mysql?hl=fr'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment les séances se déroulent-elles, et que garde l'équipe ensuite ?",
            'intro' => "Le principe tient en une phrase : chaque participant repart avec un rapport qui fonctionne sur ses données, et dont il peut prouver les chiffres. Une démonstration sur une base fictive ne remplit pas ce contrat.",
            'items' => [
                ['titre' => "Huit participants au plus", 'texte' => "Une relation mal orientée ou une mesure mal écrite ne se voit pas à l'écran. Pour la repérer à temps, le formateur doit ouvrir le modèle de chacun, ce qui n'est possible qu'en petit groupe ; à distance, on descend à six."],
                ['titre' => "Un rapport par personne", 'texte' => "Chacun construit le tableau de bord de son périmètre, sur le même modèle partagé quand le groupe vient d'une même entreprise. Le contrôleur de gestion et le directeur commercial ne repartent pas avec la même page."],
                ['titre' => "Casser pour comprendre", 'texte' => "Des erreurs sont introduites volontairement dans une copie : un client en double, une date en texte, un avoir compté comme une vente. Les participants cherchent pourquoi le total a changé. Après cet exercice, ils vérifient d'eux-mêmes."],
                ['titre' => "Démonstration courte, pratique longue", 'texte' => "Chaque notion est montrée en quelques minutes, puis appliquée aussitôt aux données de chacun. La dernière heure de chaque demi-journée est réservée au travail en autonomie, pendant que le formateur passe d'un écran à l'autre."],
                ['titre' => "Des supports modifiables", 'texte' => "Un guide pas à pas de l'outil retenu, le modèle de fiche d'indicateur, la liste de contrôle de mise en service, les fichiers construits pendant les séances et les corrigés. Tout reste à l'entreprise, qui peut les adapter pour les nouveaux arrivants."],
                ['titre' => "Une évaluation sur pièces", 'texte' => "L'évaluation finale porte sur le rapport de chacun : trois chiffres rapprochés de leur source, une actualisation qui fonctionne, des droits conformes à la décision prise. Une attestation de fin de formation mentionne le résultat."],
                ['titre' => "Un suivi sur l'usage réel", 'texte' => "Pendant les semaines qui suivent, un canal direct reste ouvert pour les questions de construction. La séance de suivi part de l'historique d'actualisation et des pages réellement consultées, pas des souvenirs de la formation."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils, quelles versions et quels coûts d'éditeur prévoir ?",
            'legende' => "Prix relevés le 5 octobre 2026 sur les pages officielles de Microsoft, de Google et d'Odoo. Microsoft précise que ses prix affichés sont indicatifs et que le prix réel, qui dépend de la devise et du pays, s'affiche au moment de l'achat. Ces sommes sont dues aux éditeurs, jamais au formateur.",
            'entetes' => ['Outil', 'Rôle dans la formation', 'Coût d\'éditeur relevé'],
            'lignes'  => [
                ["Power BI Desktop", "Construction des rapports et du modèle ; une nouvelle version chaque mois, seule la dernière étant prise en charge", "Gratuit"],
                ["Compte gratuit (Fabric)", "Rapports pour son propre usage dans le service en ligne, sans partage", "Gratuit"],
                ["Power BI Pro", "Publier, partager, lire les rapports partagés par un autre titulaire de Pro", "12,10 € HT par utilisateur et par mois en paiement annuel ; inclus dans Microsoft 365 E5 et Office 365 E5"],
                ["Power BI Premium par utilisateur", "Modèles jusqu'à 100 Go au lieu de 1 Go, 48 actualisations par jour", "20,80 € HT par utilisateur et par mois en paiement annuel, ou module complémentaire à 12,10 € HT pour un titulaire de Pro"],
                ["Capacité Microsoft Fabric", "Lecteurs sans licence payante à partir de la capacité F64", "Prix variable, réservation annuelle ou paiement à l'usage"],
                ["Passerelle de données locale", "Relier au service les sources restées dans le réseau de l'entreprise", "Application Windows ; Microsoft publie une mise à jour chaque mois et ne prend en charge que les six dernières versions"],
                ["Data Studio", "Création, partage et lecture des rapports dans le navigateur", "Sans frais pour les créateurs et les lecteurs"],
                ["Data Studio Pro", "Contenu détenu par l'organisation, espaces d'équipe, envois programmés étendus", "9 dollars par utilisateur, par projet et par mois ; essai de 30 jours sans frais"],
                ["Odoo, formule Personnalisé", "Accès à l'API externe, nécessaire pour un connecteur direct", "35,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 44,90 €"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "À quelle fréquence vos chiffres se mettent-ils à jour, et pourquoi une actualisation s'arrête-t-elle ?",
            'paragraphes' => [
                "Un tableau de bord n'est jamais en temps réel par défaut. Dans Power BI, le mode le plus courant importe les données dans le modèle, puis les rafraîchit selon un calendrier. La documentation de Microsoft, mise à jour le 18 septembre 2026, limite ce calendrier à huit actualisations planifiées par jour en capacité partagée, celle de la licence Pro, et à 48 en Premium par utilisateur ou sur une capacité Fabric. Le bouton « Actualiser maintenant » n'entre pas dans le quota. Pour un comité hebdomadaire ou une revue quotidienne, deux actualisations par jour suffisent largement.",
                "Dans Data Studio, la logique diffère : l'outil garde en mémoire les résultats des requêtes pendant une durée de fraîcheur propre à chaque source. Selon la documentation de Google, elle vaut 15 minutes par défaut pour Google Sheets et 12 heures pour une base MySQL ou PostgreSQL, réglable de 1 minute à 12 heures. Les produits publicitaires et de mesure de Google, comme Google Analytics ou Google Ads, se rafraîchissent toutes les 12 heures, sans réglage possible. Un éditeur peut forcer l'actualisation ; un lecteur aussi, si l'option est activée dans les paramètres du rapport.",
                "Les arrêts ont presque toujours les mêmes causes. Un fichier source déplacé ou renommé, un mot de passe changé, un ordinateur éteint alors qu'il héberge la passerelle de données locale, une colonne renommée dans l'export. Microsoft prévient aussi qu'après deux mois sans aucune visite du rapport, le modèle est considéré comme inactif et son actualisation planifiée suspendue. Les échecs sont envoyés par courriel au propriétaire du modèle, et une série d'échecs désactive le calendrier.",
                "La formation installe donc des habitudes de mise en service. La passerelle tourne sur une machine allumée en permanence, pas sur le portable du contrôleur de gestion. Le propriétaire du modèle est une personne qui lit ses courriels, et un remplaçant est désigné. La date et l'heure de la dernière actualisation figurent sur chaque page, pour que le lecteur sache de quand datent les chiffres. Enfin, chacun apprend à lire l'historique d'actualisation avant d'accuser le logiciel source.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui voit quoi : comment partager un tableau de bord sans exposer vos données ?",
            'intro' => "Le partage est le moment où un outil de visualisation devient un outil de diffusion de données. Les règles des deux éditeurs, relevées le 5 octobre 2026, ont des conséquences directes sur le budget et sur la confidentialité.",
            'items' => [
                ['titre' => "Dans Power BI, le lecteur paie aussi", 'texte' => "Selon Microsoft, seuls les titulaires de Pro peuvent publier, partager ou consulter le contenu d'autres titulaires de Pro, sauf si ce contenu est hébergé sur une capacité Premium ou Fabric F64 et plus. Un auteur et cinq lecteurs représentent donc six licences : 72,60 € HT par mois, soit 871,20 € HT par an au prix public."],
                ['titre' => "Les rôles de l'espace de travail", 'texte' => "Administrateur, Membre, Contributeur ou Lecteur : seul le dernier convient à un lecteur. Microsoft précise que la sécurité au niveau des lignes ne s'applique pas aux trois premiers rôles. Un directeur d'agence nommé Membre par commodité voit donc toutes les agences."],
                ['titre' => "La publication sur le Web", 'texte' => "Microsoft avertit qu'un rapport publié sur le Web est visible par toute personne sur Internet, sans authentification, et que les données détaillées du modèle deviennent accessibles même si le rapport ne les affiche pas. Pour un tableau de bord de gestion, cette fonction reste désactivée."],
                ['titre' => "Les identifiants du propriétaire dans Data Studio", 'texte' => "Avec cette option, les lecteurs voient les données sans avoir accès à la source elle-même. Google recommande de s'assurer que les destinataires sont dignes de confiance avant de partager. Avec les identifiants du lecteur, chacun doit au contraire disposer de son propre accès à la source."],
                ['titre' => "Le partage par lien", 'texte' => "Data Studio permet d'ouvrir un rapport à toute personne de l'organisation, ou du Web, même sans compte Google. Associé aux identifiants du propriétaire, ce réglage met vos chiffres à la portée de quiconque reçoit le lien transféré."],
                ['titre' => "À qui appartient le rapport ?", 'texte' => "Dans Data Studio standard, les rapports appartiennent à la personne qui les a créés. Data Studio Pro les rattache à l'organisation, par un projet Google Cloud, pour qu'ils continuent de fonctionner après le départ de leur auteur. Sans Pro, on transfère la propriété avant chaque départ."],
                ['titre' => "L'envoi programmé en PDF", 'texte' => "Data Studio peut envoyer régulièrement le rapport en PDF par courriel, et Power BI propose des abonnements aux rapports. Le fichier joint sort alors de l'outil et de ses droits : on choisit les destinataires comme si l'on imprimait le rapport."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon l'entreprise, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Distribution de produits alimentaires, à Cotonou", 'probleme' => "La gestion tourne sur Dolibarr, la caisse des trois points de vente dans des Google Sheets, et le gérant reçoit ses chiffres par message chaque soir, rarement complets.", 'solution' => "Data Studio, sans licence : connecteur Sheets pour les caisses, export quotidien de Dolibarr déposé sur Drive, page de direction avec ventes par point de vente et encaissements par mode de paiement, envoi programmé du PDF chaque lundi."],
                ['secteur' => "Groupe de négoce présent à Abidjan et à Dakar", 'probleme' => "Odoo en formule Personnalisé pour les deux filiales ; chaque directeur pays veut ses chiffres, et le siège la vue consolidée.", 'solution' => "Power BI alimenté par l'API JSON-2 d'Odoo via un connecteur écrit par l'intégrateur, sécurité au niveau des lignes par pays, directeurs nommés lecteurs, direction générale seule membre de l'espace."],
                ['secteur' => "ONG multi-bailleurs, à Ouagadougou", 'probleme' => "Le suivi budgétaire par projet vit dans des classeurs Excel, et chaque rapport aux bailleurs mobilise le service financier pendant une semaine.", 'solution' => "Classeurs restructurés en tables, rangés sur SharePoint, modèle Power BI avec une dimension projet et une dimension ligne budgétaire. Microsoft annonce des tarifs pour les organisations à but non lucratif, à vérifier avant l'achat des licences."],
                ['secteur' => "Réseau d'agences de transfert d'argent, à Lomé", 'probleme' => "Les volumes par agence arrivent d'une application métier sur MySQL, et les responsables d'agence consultent leurs chiffres sur téléphone, entre deux clients.", 'solution' => "Copie de la base en lecture sur un serveur joignable, pages conçues pour le téléphone, une page par agence, et contrôle de la limite de 150 000 lignes par requête en regroupant les opérations par jour."],
                ['secteur' => "PME industrielle, à Lyon", 'probleme' => "Odoo est hébergé dans les locaux, et le contrôleur de gestion reconstruit chaque mois les marges par affaire dans un classeur.", 'solution' => "Réplique PostgreSQL en lecture, passerelle de données locale installée sur un serveur toujours allumé, modèle en étoile sur les lignes de facture et les affaires, puis retrait du classeur à la date fixée en comité."],
                ['secteur' => "Réseau de franchises, en Belgique ou au Québec", 'probleme' => "Les franchisés envoient leurs chiffres dans des Google Sheets de formats différents, et le franchiseur passe ses débuts de mois à les harmoniser.", 'solution' => "Modèle unique de feuille imposé à tous, connecteur Sheets, Data Studio Pro pour que les rapports appartiennent au réseau et non à l'employé qui les a construits, droits limités à chaque franchisé."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, inter, à distance ou hybride : comment la formation s'organise-t-elle ?",
            'legende' => "Le format se choisit au cadrage, selon le nombre de participants, l'accès possible aux données et la dispersion de l'équipe. Huit personnes au plus par groupe, six à distance.",
            'entetes' => ['Format', 'Pour qui', 'Rythme habituel', 'Données utilisées'],
            'lignes'  => [
                ["Intra, dans vos locaux", "Une équipe de gestion qui partage les mêmes sources", "Six demi-journées sur deux ou trois semaines, puis le suivi", "Vos sources réelles, ou leur copie, avec un accès en lecture"],
                ["Inter-entreprises", "Une ou deux personnes par structure, ou les membres d'un même réseau", "Trois journées consécutives", "Jeu de données de démonstration commun ; une heure individuelle sur les données de chacun"],
                ["À distance", "Équipes réparties entre plusieurs sites ou pays, en Afrique, en Europe ou au Canada", "Séances de deux heures et demie à trois heures, avec partage d'écran", "Vos sources, à condition que chaque participant y accède depuis son poste"],
                ["Hybride", "Groupes qui gagnent à installer les postes et ouvrir les accès ensemble", "Première journée en salle, la suite à distance", "Accès testés côte à côte, puis travail depuis le bureau de chacun"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, une fois les sources et le public connus. Le premier échange, le cadrage et le devis sont gratuits, avec une réponse sous 24 heures. Les licences Microsoft, Google ou Odoo se règlent directement aux éditeurs.",
            'items'      => [
                ['offre' => "Formation de trois jours", 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur l'outil retenu", "Relecture du modèle de chaque participant", "Guide pas à pas, fiches d'indicateurs, liste de mise en service", "Évaluation et attestation"]],
                ['offre' => "Préparation des sources", 'prix' => 'Sur devis', 'inclus' => ["Inventaire des sources et des accès", "Comptes en lecture et test de connexion", "Extraits anonymisés pour les exercices"]],
                ['offre' => "Demi-journée de comparaison", 'prix' => 'Sur devis', 'inclus' => ["Power BI et Data Studio sur vos propres données", "Coût de licence calculé pour votre nombre de lecteurs", "Recommandation écrite"]],
                ['offre' => "Suivi après la mise en service", 'prix' => 'Sur devis', 'inclus' => ["Séance de deux heures à distance", "Revue de l'historique d'actualisation", "Liste des évolutions et de leur responsable"]],
            ],
            'variations' => [
                "Le nombre de participants, et donc de groupes, huit personnes au plus par groupe.",
                "Le nombre et la nature des sources : un dossier de tableurs se prépare plus vite qu'une base à ouvrir derrière un pare-feu.",
                "L'outil : Power BI seul, Data Studio seul, ou les deux avec la demi-journée de comparaison.",
                "Le lieu : vos bureaux à Cotonou, une autre ville ou un autre pays, ou la visioconférence.",
                "La langue des séances et des supports, en français ou en anglais.",
                "Les paiements se font par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; aucune licence d'éditeur ne transite par la facture de formation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "Rien n'est promis ici : chaque fonds décide selon ses propres règles. Sur sa page consacrée au plan de formation, lue le 5 octobre 2026, le FDFP de Côte d'Ivoire n'accepte le plan que d'une entreprise à jour de ses deux taxes, et range les « actions de formation associées à l'utilisation de l'ordinateur » parmi celles qui suivent des dispositions particulières : un logiciel de tableaux de bord en relève. Au Bénin, le décret n° 2022-286 du 11 mai 2022 a approuvé les statuts du FODEFCA ; au Sénégal, le 3FPT tient un guichet pour le personnel des entreprises et des organisations professionnelles.",
                "En France, France Compétences rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des opérateurs de compétences. Richard SALANON n'a ni cette certification ni l'agrément d'un fonds africain. Adressez donc au fonds, avant de signer, une question écrite accompagnée du programme et du devis, et bâtissez le budget en supposant un refus. Une association peut aussi interroger Microsoft : sa page de tarification signale des prix réservés aux organisations à but non lucratif, à l'enseignement et aux administrations.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un tableau de bord peut-il divulguer plus que ce qu'il affiche ?",
            'texte' => "Parce que le rapport n'est qu'une vitrine posée sur un modèle ou sur une source. Microsoft l'écrit à propos de la publication sur le Web : toute personne sur Internet peut alors accéder aux données sous-jacentes du modèle, même si le rapport ne les montre pas. Dans Data Studio, un rapport partagé par lien et branché avec les identifiants du propriétaire laisse lire la source à quiconque reçoit ce lien. Avant tout partage, la formation fait vérifier trois points : ce que contient réellement le modèle, quels identifiants la source utilise, et qui peut ouvrir le lien.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Elles n'ont presque rien de technique. Elles apparaissent quand le rapport quitte la salle de formation et rencontre l'organisation réelle de l'entreprise.",
            'items' => [
                ['titre' => "Le classeur gardé « au cas où »", 'texte' => "Tant que l'ancien reporting circule, chacun compare et doute. Une date de retrait est fixée en comité, et l'on cesse ce jour-là de mettre l'ancien fichier à jour."],
                ['titre' => "La source restée sur un ordinateur", 'texte' => "Le fichier qui alimente le modèle dort sur le bureau d'un portable, et l'actualisation échoue dès que son propriétaire part en congé. Toute source vit dans un dossier partagé ou dans une base."],
                ['titre' => "L'export dont on a changé une colonne", 'texte' => "Une mise à jour du logiciel renomme un champ, et la préparation casse. On documente les colonnes attendues, et le propriétaire du modèle surveille les échecs plutôt que d'attendre la plainte d'un lecteur."],
                ['titre' => "Trente visuels sur une page", 'texte' => "Chaque demande ajoute un graphique, jusqu'à ce que la page ne se lise plus et se charge lentement. Une nouvelle demande remplace un visuel existant, ou justifie une page pour un autre public."],
                ['titre' => "Des droits accordés par commodité", 'texte' => "Pour aller vite, un lecteur reçoit le rôle de Membre ou un lien public. On revient à la règle : lecteur pour lire, Contributeur pour construire, et une revue des accès chaque trimestre."],
                ['titre' => "Un seul constructeur", 'texte' => "Quand le contrôleur de gestion part, plus personne ne sait modifier le modèle. Deux personnes sont formées, la documentation du rapport est tenue à jour, et dans Data Studio la propriété est transférée avant tout départ."],
                ['titre' => "La version de Power BI Desktop qui diverge", 'texte' => "Microsoft prévient qu'un fichier enregistré par une version récente ne s'ouvre pas dans une version antérieure. Toute l'équipe installe Power BI Desktop depuis le Microsoft Store, qui le met à jour automatiquement."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, matériel, langue, données personnelles : que change le contexte local ?",
            'paragraphes' => [
                "Un tableau de bord en ligne dépend de la connexion de ceux qui le construisent et de ceux qui le lisent. Le rapport Digital 2026 de DataReportal consacré au Bénin compte 4,80 millions d'internautes en octobre 2025, soit 32,2 % de la population à la fin de l'année, et cite un débit fixe médian de 24,49 Mbit/s mesuré par Ookla. Power BI Desktop travaille sur le modèle importé sans connexion : on construit au bureau, on publie quand le réseau le permet. Data Studio n'existe que dans le navigateur ; on y prévoit des pages légères et un envoi en PDF pour les lecteurs mal connectés.",
                "Le parc informatique pèse autant que le réseau. Beaucoup de portables d'entrée de gamme affichent 1366 x 768 pixels, en dessous du minimum de 1440 x 900 fixé par Microsoft pour Power BI Desktop, et certains n'offrent pas les 4 Go de mémoire que l'éditeur conseille. Le cadrage relève donc la configuration de chaque poste. Un participant mal équipé construit dans Data Studio, ou branche un écran externe à son portable : on le décide avant la session, pas le premier matin.",
                "Selon Microsoft, la version de Power BI Desktop distribuée par le Microsoft Store détecte la langue de l'ordinateur, et cette langue fixe aussi celle des hiérarchies de dates du fichier créé : un modèle construit sur un poste en anglais affichera des mois en anglais à ses lecteurs francophones. On règle donc la langue avant de construire. Les montants en francs CFA s'affichent sans décimales, les dates au format français, et les mesures portent des noms compris par la direction. Les séances se donnent en français, ou en anglais pour une équipe mixte.",
                "Un tableau de bord copie des données dans le nuage de l'éditeur, souvent hors du pays. Au Bénin, la loi n° 2017-20 portant code du numérique encadre, à son article 391, le transfert de données personnelles vers un État tiers. En Europe, la CNIL rappelle qu'un transfert hors de l'Union n'est permis qu'avec un niveau de protection suffisant, encadré par des outils comme les clauses contractuelles types. Microsoft indique dans le menu À propos de Fabric la région où les données sont stockées, et Data Studio Pro propose une résidence des données. La mesure la plus sûre reste de n'envoyer au modèle aucune donnée nominative inutile.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à construire vos tableaux de bord avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Les tableaux de bord sont le dernier maillon des chantiers qu'il conduit. Il déploie Odoo et Dolibarr, relie des logiciels par API et automatise des flux, et c'est presque toujours la direction qui demande ensuite où lire les chiffres. Il connaît donc les tables d'où viennent les données, leurs statuts et leurs pièges, avant même d'ouvrir l'outil de visualisation. Fort de " . $ans . " ans d'expérience dans le numérique et formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Selon ses propres chiffres, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes ont suivi ses formations, et il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, du Bénin au Canada. Il n'est ni partenaire ni certifié de Microsoft ou de Google, ce qui lui laisse la liberté de conseiller Data Studio sans frais quand Power BI coûterait trop cher, ou l'inverse. Ses engagements se vérifient : un cadrage gratuit, des séances sur vos données, un modèle relu pour chaque participant, des supports qui restent chez vous. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Un tableau de bord fiable se décide avant d'ouvrir l'outil : des indicateurs dont la formule est écrite, des sources rangées dans un lieu partagé, un modèle en étoile, un propriétaire qui surveille l'actualisation et des droits choisis lecteur par lecteur. Choisissez Power BI ou Data Studio sur ces critères et sur le coût réel des lectures. Les autres formations du domaine sont présentées sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, et l'ensemble du <a href=\"/formations/\">catalogue des formations</a> reste à votre disposition.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous un tableau de bord qui se met à jour sans qu'on le reconstruise chaque mois ?",
            'texte'  => "Indiquez vos sources (tableurs, Odoo, Dolibarr, base de données), l'outil envisagé, le nombre de personnes à former et celui des lecteurs : vous recevez une réponse sous 24 heures et une proposition de cadrage gratuit, puis un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un cadrage'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il avoir choisi entre Power BI et Data Studio avant de s'inscrire ?", 'r' => "Non. Le choix se fait au cadrage, à partir de vos sources, des licences déjà en place et du nombre de lecteurs. S'il reste ouvert, une demi-journée de comparaison sur vos propres données précède la formation, avec le coût de licence calculé pour votre équipe."],
        ['q' => "Faut-il savoir programmer ?", 'r' => "Non. Il faut être à l'aise avec un tableur, tableaux croisés compris, et connaître ses données. Les quelques formules DAX enseignées ressemblent à des formules de tableur, et Data Studio se manipule entièrement à la souris, champs calculés compris."],
        ['q' => "Peut-on suivre la formation sur un Mac ?", 'r' => "Avec Data Studio, oui : il fonctionne dans le navigateur. Power BI Desktop, selon la configuration minimale publiée par Microsoft, demande Windows 10 ou une version ultérieure. Sur un Mac, on prévoit donc Data Studio, ou un poste Windows prêté pour la durée des séances."],
        ['q' => "Combien coûtent les licences pour partager un tableau de bord avec la direction ?", 'r' => "Avec Power BI, chaque auteur et chaque lecteur a besoin d'une licence Pro, à 12,10 € HT par mois en paiement annuel au 5 octobre 2026, sauf capacité Fabric F64 ou supérieure. Avec Data Studio, la création et la lecture sont sans frais ; la version Pro coûte 9 dollars par utilisateur, par projet et par mois."],
        ['q' => "Notre Odoo est en formule Standard : peut-on le relier à Power BI ou à Data Studio ?", 'r' => "Pas directement par l'API : la documentation d'Odoo 20.0 la réserve aux formules Personnalisé. On travaille alors à partir d'exports réguliers déposés dans un dossier partagé. Si les besoins se limitent aux chiffres d'Odoo, les tableaux internes du logiciel, vus dans la formation Odoo pour dirigeants, suffisent souvent."],
        ['q' => "Dolibarr peut-il alimenter un tableau de bord ?", 'r' => "Oui, de deux façons : par le module API REST, avec la clé d'un utilisateur créé pour la lecture, ou par une copie de sa base MySQL, MariaDB ou PostgreSQL. Le cadrage choisit la voie selon l'hébergement de votre Dolibarr et l'outil retenu."],
        ['q' => "À quelle fréquence les chiffres se mettent-ils à jour ?", 'r' => "Selon le calendrier que vous fixez : jusqu'à huit actualisations planifiées par jour avec Power BI Pro, 48 en Premium par utilisateur. Dans Data Studio, la fraîcheur se règle par source, de 15 minutes par défaut pour Google Sheets à 12 heures pour une base. Pour la plupart des comités, une ou deux mises à jour quotidiennes suffisent."],
        ['q' => "Nos données restent-elles confidentielles pendant la formation ?", 'r' => "Oui. Les exercices utilisent des accès en lecture seule ou des extraits anonymisés, les données nominatives inutiles sont retirées avant la session, et en inter-entreprises seul un jeu de démonstration est montré au groupe. Un engagement de confidentialité peut être signé avant l'inventaire des sources."],
        ['q' => "Quelle différence avec la formation Odoo pour dirigeants ?", 'r' => "Celle-ci apprend à lire et à piloter depuis les écrans d'Odoo. La formation aux tableaux de bord sert quand les chiffres sont répartis entre plusieurs sources (Odoo, classeurs, banque, application métier) et qu'il faut les réunir dans un outil séparé, avec un modèle de données que l'on construit soi-même."],
        ['q' => "Faut-il suivre la formation Excel et Google Sheets avant ?", 'r' => "Seulement si les tableaux croisés et la structure d'une table de données ne sont pas acquis. Un tableau de bord n'affiche que ce qu'on lui donne : la formation tableur apprend à produire les données propres, celle-ci à les modéliser et à les restituer."],
        ['q' => "Peut-on ne former qu'une seule personne ?", 'r' => "Oui, en séances individuelles sur place ou à distance, souvent pour le contrôleur de gestion d'une PME. Il est toutefois conseillé de former un second constructeur, même sur une partie du parcours, pour que le modèle survive à une absence ou à un départ."],
        ['q' => "La formation délivre-t-elle une certification ?", 'r' => "Non. Elle se conclut par une évaluation sur le rapport de chacun et par une attestation de fin de formation. Richard SALANON n'est certifié ni par Microsoft ni par Google ; la preuve la plus utile reste un tableau de bord en service, dont les chiffres ont été rapprochés de leur source."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est chiffrée sur devis, après un cadrage gratuit. Le prix dépend du nombre de participants, des sources à préparer, de l'outil, du lieu, de la langue et du suivi retenu. Les licences des éditeurs restent à votre charge et ne figurent pas dans le devis."],
        ['q' => "Un fonds de formation peut-il financer la session ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, opérateurs de compétences en France. Richard SALANON n'est pas certifié Qualiopi et n'a l'agrément d'aucun fonds : posez la question par écrit au fonds avant de signer."],
    ],

    'sources' => [
        ['titre' => "Microsoft, tarification de Power BI (compte gratuit, Pro, Premium par utilisateur, Fabric)", 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-bi/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, fonctionnalités du service Power BI par type de licence", 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/fundamentals/service-features-license-type', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, actualisation des données dans Power BI", 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/connect-data/refresh-data', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, qu'est-ce qu'une passerelle de données locale ?", 'url' => 'https://learn.microsoft.com/fr-fr/data-integration/gateway/service-gateway-onprem', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, publier sur le web à partir de Power BI", 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/collaborate-share/service-publish-to-web', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, obtenir Power BI Desktop (configuration minimale)", 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/fundamentals/desktop-get-the-desktop', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, inscription au service Power BI (adresse professionnelle ou scolaire)", 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/fundamentals/service-self-service-signup-purchase-for-power-bi', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, découvrir le schéma en étoile et son importance pour Power BI", 'url' => 'https://learn.microsoft.com/fr-fr/power-bi/guidance/star-schema', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, sécurité au niveau des lignes (RLS)", 'url' => 'https://learn.microsoft.com/fr-fr/fabric/security/service-admin-row-level-security', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, connecteur Power Query MySQL", 'url' => 'https://learn.microsoft.com/fr-fr/power-query/connectors/mysql-database', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, connecteur Power Query PostgreSQL", 'url' => 'https://learn.microsoft.com/fr-fr/power-query/connectors/postgresql', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, trouver sa région d'origine Fabric", 'url' => 'https://learn.microsoft.com/fr-fr/fabric/admin/find-fabric-home-region', 'date' => '2026-10-05'],
        ['titre' => "Google Cloud, Data Studio (anciennement Looker Studio) : présentation et tarifs", 'url' => 'https://cloud.google.com/data-studio?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, gérer la fraîcheur des données", 'url' => 'https://docs.cloud.google.com/data-studio/manage-data-freshness?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, identifiants d'accès aux données", 'url' => 'https://docs.cloud.google.com/data-studio/data-credentials?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, partager vos rapports", 'url' => 'https://docs.cloud.google.com/data-studio/ways-to-share-your-reports?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, se connecter à MySQL", 'url' => 'https://docs.cloud.google.com/data-studio/connect-to-mysql?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, se connecter à PostgreSQL", 'url' => 'https://docs.cloud.google.com/data-studio/connect-to-postgresql?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, associer Google Sheets", 'url' => 'https://docs.cloud.google.com/data-studio/connect-to-google-sheets?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, se connecter à Microsoft Excel", 'url' => 'https://docs.cloud.google.com/data-studio/connect-to-microsoft-excel?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, importer des fichiers CSV", 'url' => 'https://docs.cloud.google.com/data-studio/upload-csv-files?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, programmer l'envoi automatique d'un rapport", 'url' => 'https://docs.cloud.google.com/data-studio/schedule-automatic-report-delivery?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Documentation de Data Studio, présentation de Data Studio Pro", 'url' => 'https://docs.cloud.google.com/data-studio/about-pro?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : API externe JSON-2 et dépréciation de XML-RPC et JSON-RPC", 'url' => 'https://www.odoo.com/documentation/20.0/developer/reference/external_api.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Web Services API REST", 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Web_Services_API_REST_(developer)', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, prérequis (bases de données acceptées)", 'url' => 'https://wiki.dolibarr.org/index.php?title=Prerequisites', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré au Bénin", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, transférer des données hors de l'Union européenne", 'url' => 'https://www.cnil.fr/fr/les-outils-de-la-conformite/transferer-des-donnees-hors-de-lue', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['excel-google-sheets', 'sql-analystes', 'odoo-dirigeants', 'data-literacy', 'dolibarr-utilisateurs', 'crm-pipeline'],
        'services'    => ['digitalisation-d-entreprise', 'api-rest-integrations', 'integration-odoo'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
