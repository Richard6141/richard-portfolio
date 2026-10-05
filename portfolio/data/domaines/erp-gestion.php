<?php
// ============================================================
// data/domaines/erp-gestion.php · Page domaine « ERP et outils de gestion »
// (vague 1B). Aide à choisir entre les 10 formations du domaine, sans
// refaire la liste des cartes affichée par le gabarit. Seules les 4 fiches
// fortes (odoo-utilisateurs, odoo-comptabilite-syscohada,
// dolibarr-utilisateurs, excel-google-sheets) sont liées dans le texte ;
// les 6 autres, publiées le 12/10/2026, sont citées par leur nom et reliées
// par le champ « liens ». Tarifs et faits relevés le 05/10/2026 sur les
// pages officielles (Odoo, GitHub de Dolibarr, DoliCloud, Microsoft,
// Google, OHADA, gouv.bj, impots.gouv.fr, SGG du Bénin, CNIL, FDFP, 3FPT,
// France Compétences, DataReportal).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations ERP et outils de gestion : choisir, poste par poste, entre Odoo, Dolibarr, la comptabilité OHADA, le tableur et les tableaux de bord',
    'title'   => 'Formations ERP et gestion : Odoo, Dolibarr | Richard SALANON',
    'meta'    => 'Odoo, Dolibarr, comptabilité SYSCOHADA, tableurs, CRM, tableaux de bord : comment choisir la formation de gestion adaptée à chaque poste de votre équipe.',
    'en_bref' => 'Ce domaine regroupe dix formations aux logiciels qui portent la gestion d\'une entreprise : Odoo et Dolibarr, la comptabilité SYSCOHADA dans Odoo, le pipeline commercial, les tableurs, les suites Microsoft 365 et Google Workspace, les tableaux de bord et les outils collaboratifs. Cette page aide à choisir : quelle formation pour quel poste, dans quel ordre, avec quels prérequis et à quel moment d\'un projet ERP. Chaque formation se tient dans vos locaux, en inter-entreprises, à distance ou en formule hybride, sur vos propres outils, et son prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '10, de la prise en main d\'un ERP au pilotage par tableaux de bord'],
        ['l' => 'Public', 'v' => 'Équipes de vente, d\'achat, de stock, comptables, assistants, dirigeants'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change une formation aux outils de gestion pour une entreprise ?',
            'paragraphes' => [
                'Un ERP, un tableur ou un CRM ne produit des chiffres justes que si chaque personne qui le nourrit fait les mêmes gestes, au bon moment. Dans la plupart des PME, le logiciel n\'est pas en cause : il a été acheté, installé, parfois bien paramétré. Ce qui manque, c\'est l\'usage. Le vendeur crée un client en double faute de l\'avoir cherché, le magasinier valide la réception le lendemain, la comptable reprend tout dans un classeur parce qu\'elle ne fait pas confiance aux écritures, et le dirigeant demande ses chiffres par téléphone. Les formations de ce domaine s\'attaquent à cet écart entre l\'outil disponible et la façon dont l\'équipe s\'en sert.',
                'Le domaine couvre trois familles d\'outils. Les progiciels de gestion intégrés, Odoo et Dolibarr, qui portent les ventes, les achats, le stock, la facturation et la comptabilité. Les outils de bureau qui restent au cœur du travail quotidien : le tableur, la messagerie, l\'agenda, le partage de fichiers et les espaces de travail d\'équipe. Enfin les outils de lecture et de pilotage : le pipeline commercial, les rapports et les tableaux de bord qui transforment les données saisies en décisions.',
                'Ce qu\'une entreprise gagne se constate sur des faits simples : un seul fichier client au lieu de quatre, une facture qui part le jour de la livraison, une clôture mensuelle qui ne demande plus une semaine de rapprochements, une réunion commerciale qui s\'appuie sur le pipeline plutôt que sur les souvenirs de chacun. Avant la formation, on choisit deux ou trois de ces indicateurs, on relève leur niveau, puis on les mesure de nouveau un mois après la session.',
                'Ces formations ne remplacent pas le projet technique. Une base Odoo qui n\'est pas encore paramétrée relève de l\'<a href="/services/integration-odoo">intégration Odoo</a>, une instance Dolibarr à installer ou à migrer de l\'<a href="/services/integration-dolibarr">intégration Dolibarr</a>, et une organisation dont les circuits de validation sont à revoir d\'une mission de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a>. La formation intervient quand l\'outil est prêt, ou en même temps que son démarrage, pour que l\'équipe s\'en empare dès le premier jour.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation choisir selon ce que chaque personne doit savoir faire ?',
            'legende' => 'Les dix formations du domaine, leur public, la compétence visée et ce qu\'il faut avoir avant de commencer. La durée et le programme détaillé figurent sur la fiche de chaque formation.',
            'entetes' => ['Formation', 'Pour qui', 'Ce qu\'elle apprend', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', 'Vendeurs, acheteurs, magasiniers, caissiers, personnes chargées de la facturation', 'Réaliser seul les opérations de son poste dans Odoo, du devis à l\'encaissement, et corriger une erreur sans casser la chaîne des documents', 'Une base Odoo installée et paramétrée, un compte nominatif par participant, une copie de test de la base'],
                ['Odoo pour dirigeants', 'Gérants, directeurs, responsables de service', 'Lire les tableaux de bord et les rapports, valider ce qui doit l\'être, suivre l\'activité sans redemander les chiffres', 'Odoo en service ou en cours de démarrage, avec des données réelles à lire'],
                ['<a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>', 'Comptables, chefs comptables, responsables financiers, cabinets', 'Tenir dans Odoo une comptabilité conforme au référentiel OHADA : plan de comptes, journaux, taxes, banque, clôture et états', 'Les bases de la comptabilité OHADA, une base Odoo avec la comptabilité complète et la localisation du pays'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'Gérants, assistantes de direction, vendeurs, magasiniers d\'une PME, d\'un commerce ou d\'une association', 'Faire passer toute la gestion courante dans Dolibarr, du devis signé au règlement, avec les exports attendus par le comptable', 'Une instance Dolibarr installée, les modules utiles activés, un compte par participant'],
                ['Réussir l\'adoption d\'un ERP', 'Direction, chef de projet interne, futurs référents', 'Mener le projet côté entreprise : choisir, décider de la reprise des données, répartir les rôles, faire adopter l\'outil', 'Aucun logiciel requis ; la liste des processus à outiller et une idée des volumes'],
                ['CRM : pipeline commercial et reporting', 'Commerciaux, responsables des ventes, direction commerciale', 'Tenir un pipeline honnête, organiser les relances et produire des rapports commerciaux, quel que soit l\'outil', 'Un outil de suivi commercial choisi ou à l\'essai, et le fichier des clients et prospects'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', 'Comptabilité, administration, commerce, stock, suivi budgétaire', 'Construire des classeurs fiables, écrire les formules utiles, analyser par tableaux croisés et contrôler les totaux', 'Savoir utiliser un ordinateur ; une mise à niveau existe pour ceux qui découvrent le tableur'],
                ['Microsoft 365 et Google Workspace avancés', 'Toute l\'équipe, et le référent qui administre la suite', 'Organiser la messagerie, l\'agenda, le partage et les droits d\'accès, et sécuriser les comptes de la suite', 'Des comptes professionnels de la suite utilisée ; un accès administrateur pour le référent'],
                ['Tableaux de bord Power BI et Looker Studio', 'Dirigeants, contrôleurs de gestion, responsables d\'activité', 'Choisir les indicateurs, relier les données de l\'entreprise et construire des tableaux de bord qui se mettent à jour', 'Des données déjà tenues dans un tableur ou un ERP, et l\'aisance avec les tableaux croisés'],
                ['Outils collaboratifs : Notion, Trello, Asana, Teams', 'Équipes projet, services administratifs, associations', 'Organiser le travail d\'équipe, répartir et suivre les tâches, et choisir l\'outil qui convient à l\'organisation', 'Aucun ; la liste des projets et des tâches récurrentes de l\'équipe'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment trancher quand deux formations semblent répondre au même besoin ?',
            'intro' => 'Plusieurs formations du domaine se touchent. La bonne question n\'est pas « quel logiciel ? » mais « que fera la personne, concrètement, après la session ? ». Voici les hésitations qui reviennent le plus lors du premier échange.',
            'items' => [
                ['titre' => 'Odoo pour vos équipes ou Odoo pour dirigeants ?', 'texte' => 'La première s\'adresse à ceux qui saisissent : elle se joue sur les écrans de chaque poste. La seconde s\'adresse à ceux qui lisent et valident : elle part des rapports, des filtres et des tableaux de bord. Un gérant de petite structure qui facture lui-même suit la première ; un directeur qui ne crée jamais de devis suit la seconde.'],
                ['titre' => 'Odoo pour vos équipes ou la comptabilité SYSCOHADA ?', 'texte' => 'La personne qui émet les factures et enregistre les règlements relève de la formation par poste. Celle qui contrôle les écritures, prépare la déclaration de taxe et produit la balance relève de la formation comptable. Dans une PME où une seule personne fait les deux, on commence par le poste, puis on enchaîne sur la comptabilité.'],
                ['titre' => 'Réussir l\'adoption d\'un ERP ou une formation utilisateurs ?', 'texte' => 'L\'adoption traite du projet : qui décide, quelles données reprendre, qui sera référent, comment mesurer l\'usage. Elle se suit avant ou pendant le déploiement, par la direction et le chef de projet. Les formations utilisateurs traitent des gestes, une fois le logiciel prêt. L\'une ne remplace pas l\'autre.'],
                ['titre' => 'Le pipeline commercial ou la formation Odoo ?', 'texte' => 'La formation au pipeline enseigne une méthode : étapes de vente définies, prochaine action toujours datée, rapport hebdomadaire lisible. Elle vaut pour Odoo, Dolibarr ou un autre outil. La formation Odoo enseigne les écrans. Une équipe commerciale qui ne suit pas ses affaires a d\'abord besoin de la méthode.'],
                ['titre' => 'Le tableur ou les tableaux de bord ?', 'texte' => 'Un tableau de bord ne fait qu\'afficher ce qu\'on lui donne. Si les données sont saisies de cinq façons différentes, il affichera cinq vérités. La formation au tableur apprend à produire des données propres et contrôlées ; celle aux tableaux de bord apprend à les restituer. Dans cet ordre.'],
                ['titre' => 'La suite bureautique ou les outils collaboratifs ?', 'texte' => 'Microsoft 365 et Google Workspace avancés portent sur les fondations : comptes, messagerie, agenda, partage, droits et sécurité. Les outils collaboratifs portent sur l\'organisation du travail : qui fait quoi, pour quand, où en est le projet. Une équipe qui perd ses fichiers commence par la suite ; une équipe qui perd ses tâches, par les outils collaboratifs.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il avoir choisi entre Odoo et Dolibarr avant de se former ?',
            'paragraphes' => [
                'Oui pour les formations utilisateurs, qui se déroulent sur votre propre base : on ne forme pas une équipe sur un logiciel qu\'elle n\'utilisera pas. Non pour la formation à l\'adoption d\'un ERP, qui sert justement à préparer ce choix avec méthode, et pour les formations au tableur, au pipeline commercial ou aux outils collaboratifs, qui ne dépendent pas de l\'ERP retenu.',
                'Si la décision n\'est pas prise, le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> pose les critères qui comptent pour une PME d\'Afrique francophone : périmètre fonctionnel, coût sur plusieurs années, hébergement, comptabilité et compétences disponibles près de chez vous. Cette page ne refait pas ce comparatif ; elle part du principe que l\'outil est connu, ou qu\'il le sera au terme du premier parcours.',
                'Un point de vigilance concerne la comptabilité. Selon la page de comparaison des éditions publiée par Odoo, consultée le 5 octobre 2026, la comptabilité complète (grand livre, rapprochement bancaire, comptabilité analytique, localisations et rapports) est réservée à l\'édition Enterprise. Une entreprise qui compte tenir sa comptabilité SYSCOHADA dans Odoo doit donc le prévoir dans son choix d\'édition, avant d\'inscrire ses comptables à la formation.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quel parcours suivre selon votre situation ?',
            'intro' => 'Peu d\'entreprises ont besoin des dix formations. La plupart en enchaînent deux ou trois, dans un ordre qui dépend de leur point de départ. Voici les cinq parcours que l\'on conseille le plus souvent après le premier échange.',
            'items' => [
                ['titre' => 'Une équipe qui démarre sur Odoo', 'texte' => 'La direction et le chef de projet commencent par Réussir l\'adoption d\'un ERP, pendant le paramétrage. La semaine du démarrage, chaque groupe de métier suit <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> sur la base qui sera réellement utilisée. Un mois plus tard, quand les premières données existent, le dirigeant suit Odoo pour dirigeants pour apprendre à les lire. La comptabilité vient ensuite si elle passe aussi dans Odoo.'],
                ['titre' => 'Un comptable en zone OHADA', 'texte' => 'Le cœur du parcours est <a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>, idéalement calé pour que la séance d\'accompagnement tombe sur une vraie clôture mensuelle. Un comptable qui ne connaît pas encore les écrans de vente et d\'achat gagne à suivre d\'abord la demi-journée de socle commun de la formation par poste. Celui qui tient encore ses rapprochements dans un classeur ajoute la formation au tableur, pour les tables de passage et les contrôles.'],
                ['titre' => 'Une PME sur Dolibarr', 'texte' => 'Le parcours part de <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>, sur votre instance, avec la personne qui tient la gestion et un second utilisateur capable de la remplacer. Quand le cycle du devis au règlement tourne, la formation au pipeline commercial structure le suivi des affaires, et la formation au tableur sert à exploiter proprement les exports. Le lien avec la messagerie des clients se traite plus tard, sur une base saine.'],
                ['titre' => 'Un dirigeant qui veut piloter', 'texte' => 'Si l\'entreprise tourne sous Odoo, Odoo pour dirigeants suffit souvent : les rapports existent, il faut apprendre à les filtrer et à les regrouper. Si les chiffres sont dispersés entre un logiciel, des classeurs et la banque, la formation aux tableaux de bord Power BI et Looker Studio apprend à les réunir. Dans les deux cas, on choisit les indicateurs avant de construire quoi que ce soit, et on les limite à ceux qui déclenchent une décision.'],
                ['titre' => 'Une entreprise encore sur tableurs', 'texte' => 'Le premier pas est rarement l\'ERP. <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> remet de l\'ordre dans les classeurs existants : une ligne par opération, des listes de valeurs, des totaux de contrôle. Ces données propres serviront ensuite de base à la reprise dans un logiciel. Quand le tableur ne suffit plus, Réussir l\'adoption d\'un ERP prépare le choix. Pour une très petite structure qui part de zéro, la formation <a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a> aide à fixer les priorités.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'À quel moment d\'un projet ERP placer chaque formation ?',
            'items' => [
                ['titre' => 'Avant de choisir le logiciel', 'duree' => 'Avant toute signature', 'texte' => 'La direction et le futur chef de projet suivent Réussir l\'adoption d\'un ERP : décrire les processus réels, lister les données à reprendre, désigner les référents, fixer les indicateurs d\'usage. C\'est le moment où une erreur coûte le moins cher à corriger.'],
                ['titre' => 'Pendant le paramétrage', 'duree' => 'Les semaines qui précèdent le démarrage', 'texte' => 'Les référents participent aux choix de paramétrage et préparent la reprise. Les fichiers de clients, de fournisseurs et d\'articles sont nettoyés dans le tableur : c\'est là que la formation Excel et Google Sheets rend le plus de services, avant que les doublons n\'entrent dans l\'ERP.'],
                ['titre' => 'La semaine du démarrage', 'duree' => 'Au plus près de la mise en service', 'texte' => 'Chaque groupe de métier apprend les gestes de son poste sur la base définitive, ou sur sa copie de test. Former trop tôt fait oublier ; former après le démarrage laisse s\'installer les contournements. Les fiches réflexes sont remises le jour même.'],
                ['titre' => 'La première clôture mensuelle', 'duree' => 'Un mois après le démarrage', 'texte' => 'La comptabilité vérifie que ce que les postes ont saisi produit des écritures justes. C\'est le meilleur moment pour la séance accompagnée de la formation comptable : les erreurs du premier mois sont réelles, et on les corrige ensemble.'],
                ['titre' => 'Quand les données existent', 'duree' => 'Deux à trois mois après le démarrage', 'texte' => 'Avec quelques semaines d\'historique, les formations de lecture prennent leur sens : Odoo pour dirigeants, le pipeline commercial, les tableaux de bord. Avant, on apprendrait à lire des écrans vides.'],
                ['titre' => 'Quand les usages sont stables', 'duree' => 'Après trois à six mois', 'texte' => 'Une équipe qui maîtrise ses écrans peut aller plus loin : se servir des fonctions d\'IA de son ERP avec la formation <a href="/formations/odoo-ia">Odoo et IA</a>, ou envoyer devis, factures et relances depuis le logiciel avec la formation <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>. Ajouter ces couches sur une base mal tenue ne ferait qu\'accélérer le désordre.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères publiés faut-il connaître avant de choisir une formation de gestion ?',
            'items' => [
                ['valeur' => 'Odoo 20.0', 'libelle' => 'Version la plus récente d\'Odoo, sortie en septembre 2026, avec un support standard prévu jusqu\'en septembre 2029, selon la documentation de l\'éditeur consultée le 5 octobre 2026.', 'source' => 'Odoo, support standard et étendu', 'url' => 'https://www.odoo.com/documentation/master/administration/standard_extended_support.html'],
                ['valeur' => '24.0.1', 'libelle' => 'Dernière version stable de Dolibarr, publiée sur le dépôt officiel le 7 septembre 2026, relevée le 5 octobre 2026.', 'source' => 'GitHub, dépôt de Dolibarr', 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1'],
                ['valeur' => '17 États', 'libelle' => 'Membres de l\'OHADA, du Bénin à la RD Congo, qui appliquent le même droit comptable, selon la présentation de l\'organisation consultée le 5 octobre 2026.', 'source' => 'OHADA, présentation générale', 'url' => 'https://www.ohada.org/en/general-overview/'],
                ['valeur' => '1er janvier 2018', 'libelle' => 'Entrée en vigueur du SYSCOHADA révisé pour les comptes personnels des entités, après l\'adoption de l\'Acte uniforme le 26 janvier 2017 à Brazzaville.', 'source' => 'OHADA, entrée en vigueur du SYSCOHADA révisé', 'url' => 'https://www.ohada.org/entree-en-vigueur-du-syscohada-revise-l-ohada-met-la-derniere-main/'],
                ['valeur' => '10 fois', 'libelle' => 'Le montant de la facture : amende prévue au Bénin pour une facture non normalisée, avec un minimum de 1 000 000 FCFA par opération, selon l\'article du Gouvernement du 27 février 2020.', 'source' => 'Gouvernement du Bénin, factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin/'],
                ['valeur' => '1er septembre 2027', 'libelle' => 'Date à laquelle les PME et micro-entreprises françaises devront émettre leurs factures sous forme électronique ; toutes doivent pouvoir les recevoir depuis le 1er septembre 2026 (page modifiée le 16 janvier 2026).', 'source' => 'impots.gouv.fr', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels coûts de logiciel prévoir à côté de la formation ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages officielles des éditeurs (Odoo, DoliCloud, Microsoft, Google). Ils ne font pas partie du devis de formation et peuvent changer ; vérifiez-les au moment de commander.',
            'entetes' => ['Outil', 'Ce que l\'éditeur facture', 'Ce que cela change pour la formation'],
            'lignes'  => [
                ['Odoo Online', 'Une application gratuite ; formule Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; formule Personnalisé à 35,90 €, puis 44,90 € ; utilisateur léger à 7,90 €, selon la page Tarification d\'Odoo', 'Chaque participant a besoin de son propre compte : le nombre de comptes se décide avant la session, pas pendant'],
                ['Odoo Community', 'Licence libre, sans abonnement, à installer et héberger soi-même', 'Les formations par poste s\'y déroulent ; la formation comptable demande la comptabilité complète de l\'édition Enterprise'],
                ['Dolibarr', 'Logiciel libre et gratuit ; hébergement DoliCloud Basic à 14 € HT par utilisateur et par mois, Premium à 30 € HT par mois plus 15 € HT par utilisateur, selon la page des tarifs de DoliCloud', 'La formation est la même quel que soit l\'hébergement ; seule l\'adresse de connexion change'],
                ['Microsoft 365', 'Business Basic à 6,07 € HT par utilisateur et par mois en paiement annuel, selon la page des offres de Microsoft', 'Excel pour le web suffit pour l\'essentiel du tableur ; les fonctions avancées demandent l\'application de bureau'],
                ['Google Workspace', 'Business Starter à 6,80 € par utilisateur et par mois hors remise temporaire, selon la page de tarifs de Google', 'Google Sheets est aussi utilisable avec un compte gratuit ; le partage et les droits se règlent mieux avec des comptes professionnels'],
                ['Power BI', 'Compte gratuit ; Power BI Pro à 12,10 € HT par utilisateur et par mois, Premium par utilisateur à 20,80 € HT, en paiement annuel, selon la page de tarification de Microsoft', 'Construire est gratuit ; partager un rapport avec des collègues demande en général une licence payante'],
                ['Looker Studio', 'Sans frais pour créer et lire des rapports ; version Pro à 9 $ par utilisateur, par projet et par mois. Google présente désormais l\'outil sous le nom de Data Studio sur sa page produit', 'Une option sans licence pour une équipe qui travaille déjà avec Google Sheets'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels prérequis et quel matériel prévoir, quelle que soit la formation ?',
            'intro' => 'Chaque fiche précise ses propres prérequis. Certains valent pour tout le domaine, et leur absence est la première cause de séances qui piétinent.',
            'items' => [
                ['titre' => 'Un compte nominatif par participant', 'texte' => 'Pas de compte « vente » ou « magasin » partagé. Chaque personne se connecte avec son identifiant, ce qui permet de lui donner les bons droits, de savoir qui a fait quoi et de répondre aux exigences de traçabilité.'],
                ['titre' => 'Une copie de test de la base', 'texte' => 'Les exercices se font sur une copie de votre ERP, avec vos articles, vos clients et votre paramétrage. On peut s\'y tromper sans conséquence, et chacun retrouve ensuite exactement les mêmes écrans dans la base réelle.'],
                ['titre' => 'Des documents réels, anonymisés si besoin', 'texte' => 'Une facture fournisseur du mois, un relevé bancaire, un export de stock, un classeur de suivi : les exercices partent de vos pièces. Celles qui contiennent des données personnelles sont anonymisées avant la session.'],
                ['titre' => 'Un ordinateur par personne', 'texte' => 'Un ERP, un tableur ou un outil de tableaux de bord s\'apprennent au clavier. Le téléphone sert pour quelques usages précis, comme consulter un stock, mais pas pour la formation elle-même.'],
                ['titre' => 'Une connexion et un plan de repli', 'texte' => 'Odoo Online, DoliCloud ou Google Sheets demandent Internet. On vérifie la connexion avant la session, on prévoit un partage de connexion de secours et on envoie les supports à l\'avance pour qu\'ils soient lus hors ligne.'],
                ['titre' => 'Un référent interne désigné', 'texte' => 'Une personne de l\'équipe, plus à l\'aise que les autres, suit toutes les sessions, garde les supports à jour et répond aux questions du quotidien. Sans elle, chaque difficulté redevient un appel extérieur.'],
                ['titre' => 'La version de chaque outil', 'texte' => 'Odoo 17, 18, 19 ou 20, Dolibarr récent ou ancien, Excel de bureau ou en ligne : les écrans diffèrent. La version est relevée lors du cadrage pour que les supports montrent ce que l\'équipe verra.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Intra, inter, à distance ou hybride : quel format pour former aux outils de gestion ?',
            'options'  => ['Intra dans vos locaux', 'Inter-entreprises', 'À distance', 'Hybride'],
            'criteres' => [
                ['critere' => 'Base utilisée', 'valeurs' => ['Votre ERP ou ses copies de test, avec vos données', 'Une base de démonstration commune, sans aucune donnée interne', 'Votre base, partagée à l\'écran', 'Votre base, en salle puis à distance']],
                ['critere' => 'Quand le choisir', 'valeurs' => ['Une équipe entière démarre sur un outil', 'Une ou deux personnes à former, ou un réseau de structures au même besoin', 'Des équipes dispersées entre plusieurs sites ou pays', 'Une première prise en main, suivie de séances de consolidation']],
                ['critere' => 'Rythme', 'valeurs' => ['Demi-journées par groupe de métier', 'Journées regroupées', 'Séances de deux à trois heures', 'Lancement en salle, puis séances courtes']],
                ['critere' => 'Ce qu\'il faut prévoir', 'valeurs' => ['Une salle, un poste par personne, une connexion stable', 'Le déplacement des participants', 'Caméra, micro, deux écrans si possible', 'Les deux']],
                ['critere' => 'Limite', 'valeurs' => ['Mobilise l\'équipe au même moment', 'Les exercices ne portent pas sur vos propres cas', 'Plus difficile pour les personnes peu à l\'aise avec l\'ordinateur', 'Demande un calendrier tenu']],
            ],
            'verdict'  => 'Pour un ERP qu\'une équipe découvre, l\'intra ou l\'hybride donnent les meilleurs résultats, parce qu\'on travaille sur les vrais écrans et qu\'on corrige les gestes sur place. La distance convient bien au tableur, aux tableaux de bord et aux équipes réparties ; l\'inter, aux besoins individuels.',
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte une formation de ce domaine, et qu\'est-ce qui fait varier le prix ?',
            'intro' => 'Aucune formation du domaine n\'a de prix catalogue : chacune est chiffrée sur devis, une fois le besoin compris. Le premier échange, le cadrage et le devis sont gratuits, avec une réponse sous 24 heures.',
            'items' => [
                ['offre' => 'Une formation du domaine', 'prix' => 'Sur devis', 'inclus' => ['Cadrage du besoin et relevé des versions utilisées', 'Exercices construits sur vos documents', 'Supports et fiches réflexes remis à l\'entreprise', 'Évaluation de chaque participant sur une tâche réelle']],
                ['offre' => 'Un parcours de plusieurs formations', 'prix' => 'Sur devis', 'inclus' => ['Ordre des formations calé sur votre projet', 'Préparation commune de la base de test', 'Un seul interlocuteur du début à la fin', 'Bilan écrit au commanditaire']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance de retour sur l\'usage réel', 'Relecture des premiers travaux faits seuls', 'Mise à jour des fiches réflexes', 'Passage de relais au référent interne']],
            ],
            'variations' => [
                'Le nombre de postes et de groupes : quatre groupes de métier demandent plus de séances qu\'un seul groupe polyvalent.',
                'La préparation : une copie de test à construire, des données à anonymiser ou une reprise à nettoyer avant la session.',
                'La combinaison de formations, et la séance accompagnée lors d\'une clôture réelle quand elle est retenue.',
                'Le lieu : déplacement hors de Cotonou ou dans un autre pays, ou session entièrement à distance.',
                'Le suivi après la formation, sa durée et le nombre de séances de retour.',
                'Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences des éditeurs restent à votre charge et ne figurent pas dans le devis.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il financer une formation aux outils de gestion ?',
            'paragraphes' => [
                'Cela dépend du pays, du fonds et de ce qu\'il exige du formateur ; aucune prise en charge n\'est promise. En Côte d\'Ivoire, la page du FDFP consacrée aux procédures d\'habilitation, consultée le 5 octobre 2026, impose l\'habilitation à tout opérateur de formation privé qui veut bénéficier de ses financements, à l\'exception des structures basées hors de Côte d\'Ivoire. Au Bénin, les statuts du fonds de développement de la formation professionnelle continue et de l\'apprentissage ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le 3FPT tient un guichet consacré au financement du personnel des entreprises et des organisations professionnelles.',
                'En France, la page de France Compétences rappelle que, depuis le 1er janvier 2022, tout prestataire qui veut accéder aux fonds publics ou mutualisés, comme ceux des OPCO, doit être certifié Qualiopi. Richard SALANON n\'affiche ni cette certification ni l\'agrément d\'un fonds africain. La bonne démarche est donc d\'interroger le fonds par écrit avant de signer, avec le programme et le devis en main, et de prévoir le budget sans prise en charge. Les documents remis (programme, feuilles de présence, évaluation) facilitent la constitution d\'un dossier quand il est recevable.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège rend une formation aux outils de gestion inutile dès la première semaine ?',
            'texte' => 'Former l\'équipe sur un logiciel qui n\'est pas encore celui qu\'elle utilisera. Une base de démonstration, un paramétrage qui change encore, des taxes ou des circuits de validation qui seront modifiés après la session : les participants apprennent des gestes qu\'ils ne retrouveront pas, et retournent à leurs anciennes habitudes au premier écart. Fixez d\'abord le paramétrage, puis formez sur la copie de la base définitive, au plus près du démarrage.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent le plus souvent, et comment les éviter ?',
            'intro' => 'Elles ne tiennent presque jamais au logiciel. Elles tiennent à l\'ordre des formations, à l\'organisation autour de l\'outil et à ce que la direction demande ensuite.',
            'items' => [
                ['titre' => 'Garder le tableur en parallèle « par sécurité »', 'texte' => 'Tant que l\'ancien classeur reste la référence, personne ne fait confiance au nouvel outil. Fixez une date à partir de laquelle seul l\'ERP fait foi, et arrêtez de mettre à jour le classeur ce jour-là.'],
                ['titre' => 'Former tout le monde dans la même salle', 'texte' => 'Le magasinier n\'a que faire des écritures de TVA, et la comptable s\'ennuie pendant l\'inventaire. Des groupes par métier, avec un socle commun court, gardent chacun attentif.'],
                ['titre' => 'Basculer tout d\'un coup', 'texte' => 'Démarrer toutes les applications le même jour, sans période de test, multiplie les incidents. L\'<a href="/histoires/tsb-migration">histoire de la banque TSB</a> le montre à grande échelle : on démarre par étapes et on garde un chemin de retour.'],
                ['titre' => 'Partager les comptes', 'texte' => 'Un identifiant commun pour le magasin empêche de savoir qui a validé un mouvement et de retirer un accès au départ d\'un salarié. Un compte par personne, sans exception.'],
                ['titre' => 'Construire les tableaux de bord trop tôt', 'texte' => 'Un tableau de bord construit sur des données mal saisies donne des chiffres faux avec une belle mise en forme. On commence par la discipline de saisie, puis on restitue.'],
                ['titre' => 'Laisser la direction en dehors', 'texte' => 'Si le dirigeant continue de demander ses chiffres dans un classeur envoyé par message, l\'équipe comprend que l\'ERP est facultatif. Il doit lui-même consulter et valider dans l\'outil.'],
                ['titre' => 'Multiplier les outils', 'texte' => 'Un ERP, deux tableurs, trois messageries et quatre outils de tâches : l\'information se perd entre eux. Choisir un outil par usage, et s\'y tenir, vaut mieux qu\'une nouvelle application par service.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un parcours selon le secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Distribution et négoce, Afrique de l\'Ouest', 'probleme' => 'Un grossiste a installé Odoo, mais le stock affiché ne correspond jamais au magasin', 'solution' => 'Formation par poste pour les magasiniers et les vendeurs, centrée sur la validation des mouvements au moment où ils ont lieu, puis inventaire réel mené pendant la session. Le dirigeant suit ensuite la formation de lecture des rapports pour suivre les écarts chaque semaine.'],
                ['secteur' => 'Cabinet comptable, zone OHADA', 'probleme' => 'Un cabinet reprend des dossiers de clients tenus sous Odoo, chacun paramétré différemment', 'solution' => 'Formation comptable SYSCOHADA pour les collaborateurs, avec un contrôle de la localisation et des journaux de chaque dossier, et des fiches de procédure communes au cabinet.'],
                ['secteur' => 'Association ou ONG', 'probleme' => 'Les factures, les dons et les achats sont suivis dans des classeurs différents selon les projets', 'solution' => 'Formation au tableur pour fiabiliser les classeurs existants, puis formation Dolibarr pour passer la gestion courante dans un seul outil, avec un second utilisateur formé pour les absences.'],
                ['secteur' => 'Commerce de détail', 'probleme' => 'Les ventes en caisse et les commandes passées par message ne remontent pas dans la gestion', 'solution' => 'Formation Dolibarr ou Odoo sur le cycle de vente et l\'encaissement, puis, une fois les usages stables, formation au lien entre la messagerie des clients et le logiciel.'],
                ['secteur' => 'PME de services, France ou Belgique', 'probleme' => 'L\'entreprise doit se préparer à la facturation électronique et tient encore ses devis dans un traitement de texte', 'solution' => 'Réussir l\'adoption d\'un ERP pour cadrer le choix et la reprise, formation utilisateurs au démarrage, puis formation au pipeline commercial pour que les devis vivent dans l\'outil.'],
                ['secteur' => 'École privée ou centre de formation', 'probleme' => 'Les inscriptions, les échéanciers et les relances de paiement occupent toute l\'administration', 'solution' => 'Formation au tableur pour les échéanciers et les relances, outils collaboratifs pour répartir le suivi entre les personnes, puis réflexion sur un ERP quand les volumes le justifient.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Facture normalisée, facturation électronique, connexion, données : que change le contexte local ?',
            'paragraphes' => [
                'Dans les dix-sept États de l\'OHADA, la comptabilité suit le même Acte uniforme, entré en vigueur le 1er janvier 2018 pour les comptes personnels des entités selon l\'OHADA. Un ERP doit donc être paramétré avec le référentiel SYSCOHADA, et ceux qui le tiennent doivent savoir où ce référentiel se règle. Au Bénin s\'ajoute la facture normalisée : selon l\'article du Gouvernement du 27 février 2020, ne pas délivrer de facture normalisée expose à une amende de dix fois le montant de la facture, avec un minimum de 1 000 000 FCFA. Une équipe qui facture depuis son ERP doit connaître le circuit retenu dans son entreprise pour respecter cette obligation.',
                'En France, selon impots.gouv.fr (page modifiée le 16 janvier 2026), toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, et les PME et micro-entreprises devront les émettre à partir du 1er septembre 2027. C\'est un argument fort pour qu\'une PME européenne qui facture encore depuis un traitement de texte passe à un outil de gestion, et forme son équipe à s\'en servir avant l\'échéance plutôt qu\'au dernier moment.',
                'Les données personnelles entrent dans chaque ERP : clients, salariés, fournisseurs. Au Bénin, l\'article 426 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique demande des mesures techniques et d\'organisation appropriées, dont les moyens de rétablir l\'accès aux données après un incident, et l\'article 391 encadre leur transfert vers un État tiers. En Europe, la CNIL recommande de définir des profils d\'habilitation et de revoir les accès au moins une fois par an. Comptes nominatifs, droits par poste et sauvegardes testées font donc partie de chaque formation.',
                'La connexion pèse sur le choix du format. Le rapport Digital 2026 de DataReportal consacré au Bénin compte 4,80 millions d\'internautes, soit 32,2 % de la population. Un ERP en ligne reste utilisable, mais on prévoit une connexion de secours, des supports téléchargés à l\'avance et, à distance, des séances courtes. Les supports sont rédigés en français avec le vocabulaire exact de vos écrans, et la formation peut se donner en anglais quand une partie de l\'équipe le demande.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former aux outils de gestion avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il forme aux outils qu\'il met lui-même en place. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déploie Odoo et Dolibarr, travaille l\'OHADA et le SYSCOHADA dans les ERP et relie ces logiciels à d\'autres outils. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il a travaillé au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il n\'est lié à aucun éditeur de logiciel, ce qui lui permet de conseiller Dolibarr, Odoo ou un simple tableur selon ce qui convient. Sa façon de former tient à quelques règles : un cadrage gratuit avant tout devis, des exercices sur vos propres données, des groupes par métier, des supports qui restent à l\'entreprise et une réponse franche quand une formation n\'est pas la bonne réponse. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de choisir une formation de ce domaine ?',
            'texte' => 'Partez de ce que chaque personne devra faire seule après la session, pas du logiciel. Formez par métier, sur votre base définitive, au plus près du démarrage. Commencez par la saisie avant la lecture, par les données propres avant les tableaux de bord, et faites de l\'ERP la seule référence dès la date choisie. Voir l\'ensemble des domaines sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous savoir quelle formation de gestion convient à votre équipe ?',
            'texte'  => 'Indiquez l\'outil que vous utilisez ou envisagez, le nombre de personnes et leurs postes, ce qui ne fonctionne pas aujourd\'hui et la date visée : vous recevez une réponse sous 24 heures, un parcours conseillé et un devis détaillé, sans engagement.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours de formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Par quelle formation commencer quand l\'entreprise n\'a pas encore d\'ERP ?', 'r' => 'Par Réussir l\'adoption d\'un ERP pour la direction et le futur chef de projet, qui prépare le choix et la reprise des données. Si les classeurs actuels sont désordonnés, la formation Excel et Google Sheets pour la gestion vient avant : des données propres facilitent toute reprise. Les formations utilisateurs n\'ont de sens qu\'une fois le logiciel choisi et paramétré.'],
        ['q' => 'Faut-il former toute l\'équipe en même temps ?', 'r' => 'Non. Les sessions se font par groupe de métier (ventes, achats, stock, comptabilité), avec un socle commun court quand c\'est utile. Former tout le monde dans la même salle fait perdre du temps à chacun. Ce qui compte, c\'est que tous les groupes soient formés avant le démarrage, ou dans la semaine qui le suit.'],
        ['q' => 'Ces formations peuvent-elles se faire à distance ?', 'r' => 'Oui, sur votre base partagée à l\'écran, en séances de deux à trois heures. La distance convient bien au tableur, aux tableaux de bord et aux équipes réparties sur plusieurs sites. Pour une équipe qui découvre un ERP ou qui est peu à l\'aise avec l\'ordinateur, une formule hybride, avec un lancement en salle, donne de meilleurs résultats.'],
        ['q' => 'Combien coûte une formation aux outils de gestion ?', 'r' => 'Chaque formation est chiffrée sur devis, après un cadrage gratuit. Le prix dépend du nombre de groupes, de la préparation de la base de test et des données, de la combinaison de formations, du lieu et du suivi retenu. Le premier échange, le cadrage et le devis ne sont pas facturés.'],
        ['q' => 'Les licences d\'Odoo, de Dolibarr ou de Power BI sont-elles comprises ?', 'r' => 'Non. Les abonnements et licences se règlent directement auprès des éditeurs et restent à votre charge. Le devis de formation ne porte que sur la formation. La page indique les prix publics relevés le 5 octobre 2026 pour vous aider à budgéter, mais ils peuvent changer.'],
        ['q' => 'Odoo Community suffit-il pour suivre la formation comptable ?', 'r' => 'Pas pour la comptabilité complète. Selon la page de comparaison des éditions d\'Odoo, consultée le 5 octobre 2026, le grand livre, le rapprochement bancaire, la comptabilité analytique et les rapports comptables relèvent de l\'édition Enterprise. Les formations par poste, elles, peuvent se tenir sur Community.'],
        ['q' => 'Peut-on se former sur une version ancienne d\'Odoo ou de Dolibarr ?', 'r' => 'Oui. La formation porte sur la version que vous utilisez, relevée lors du cadrage, et les supports montrent vos écrans. Quand la version n\'est plus maintenue par l\'éditeur, le cadrage le signale, car une mise à jour prochaine changerait une partie des gestes appris.'],
        ['q' => 'Un fonds de formation peut-il prendre en charge le coût ?', 'r' => 'Parfois, selon le pays et les règles du fonds : FDFP en Côte d\'Ivoire, fonds de formation continue au Bénin, 3FPT au Sénégal, OPCO en France. Chacun a ses exigences envers le formateur, et Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds. Interrogez le fonds par écrit avant de signer.'],
        ['q' => 'Nos données restent-elles confidentielles pendant la formation ?', 'r' => 'Oui. Les exercices se font sur une copie de test qui reste dans votre environnement, et les documents qui contiennent des données personnelles sont anonymisés avant la session. En inter-entreprises, aucune donnée interne n\'est utilisée : on travaille sur une base de démonstration.'],
        ['q' => 'Peut-on combiner plusieurs formations du domaine en un seul parcours ?', 'r' => 'Oui, et c\'est fréquent : formation par poste puis comptabilité, Dolibarr puis pipeline commercial, tableur puis tableaux de bord. Le cadrage fixe l\'ordre et l\'espacement des sessions, car tout enchaîner en une semaine nuit à ce qui est retenu.'],
        ['q' => 'Richard SALANON est-il lié à un éditeur de logiciel ?', 'r' => 'Non. Il n\'est rattaché ni à Odoo ni à Dolibarr ni à Microsoft ou Google, et n\'affiche aucune certification d\'éditeur. Il conseille l\'outil qui convient à votre situation, y compris un simple tableur bien tenu quand un ERP serait prématuré.'],
        ['q' => 'Que reçoit l\'entreprise à la fin d\'une formation ?', 'r' => 'Les supports et les fiches réflexes rédigés sur vos écrans, les exercices et leurs corrigés, les feuilles de présence, le résultat de l\'évaluation de chaque participant et, quand un suivi est prévu, un bilan écrit. Les supports restent à l\'entreprise, qui peut les modifier.'],
    ],

    'sources' => [
        ['titre' => 'Odoo, page Tarification', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, comparaison des éditions Community et Enterprise', 'url' => 'https://www.odoo.com/fr_FR/page/editions', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, documentation : support standard et étendu des versions', 'url' => 'https://www.odoo.com/documentation/master/administration/standard_extended_support.html', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, publication de Dolibarr 24.0.1 (7 septembre 2026)', 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => 'DoliCloud, tarifs des offres Basic et Premium', 'url' => 'https://www.dolicloud.com/fr/fr-faq-pricing.php', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, offres et prix de Microsoft 365 pour les entreprises', 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-plans-and-pricing', 'date' => '2026-10-05'],
        ['titre' => 'Google Workspace, tarifs', 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, tarification de Power BI', 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-bi/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Google Cloud, Data Studio (anciennement Looker Studio) et ses tarifs', 'url' => 'https://cloud.google.com/data-studio?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, présentation générale (États membres)', 'url' => 'https://www.ohada.org/en/general-overview/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, entrée en vigueur du SYSCOHADA révisé', 'url' => 'https://www.ohada.org/entree-en-vigueur-du-syscohada-revise-l-ohada-met-la-derniere-main/', 'date' => '2026-10-05'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin/', 'date' => '2026-10-05'],
        ['titre' => 'impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, sécurité : gérer les habilitations', 'url' => 'https://www.cnil.fr/fr/securite-gerer-les-habilitations', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'odoo-dirigeants', 'odoo-comptabilite-syscohada', 'dolibarr-utilisateurs', 'adoption-erp', 'crm-pipeline', 'excel-google-sheets', 'microsoft-365-google-workspace', 'power-bi-looker-studio', 'outils-collaboratifs'],
        'services'    => ['integration-odoo', 'integration-dolibarr', 'digitalisation-d-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
