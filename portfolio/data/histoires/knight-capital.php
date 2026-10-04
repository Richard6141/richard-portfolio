<?php
// ============================================================
// data/histoires/knight-capital.php · Histoire externe (non cliente) :
// la mise en production incomplète du routeur SMARS de Knight Capital
// (1er août 2012), la recapitalisation, la fusion avec GETCO et
// l'ordonnance de la SEC du 16 octobre 2013 (Release No. 70694).
// Faits relevés le 03/10/2026 dans l'ordonnance, les documents déposés
// par Knight auprès de la SEC et la presse listée en sources.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Knight Capital : le courtier ruiné en 45 minutes par une mise en production incomplète',
    'title'   => 'Knight Capital 2012 : les leçons d\'un déploiement raté',
    'meta'    => 'Août 2012 : un serveur oublié lors d\'un déploiement fait perdre plus de 460 millions de dollars à Knight Capital en 45 minutes. Faits sourcés et leçons.',
    'en_bref' => 'Le 1er août 2012, le courtier américain Knight Capital met en service une nouvelle version de son routeur d\'ordres SMARS, mais un technicien a oublié de copier le code sur l\'un des huit serveurs : ce serveur réveille « Power Peg », une fonction abandonnée en 2003, et inonde la Bourse de New York d\'ordres pendant environ 45 minutes. La perte dépasse 460 millions de dollars, selon l\'ordonnance de la SEC du 16 octobre 2013 ; Knight cède le contrôle de son capital dès le 6 août 2012, puis fusionne avec GETCO le 1er juillet 2013. La leçon pour une PME : déployer selon une procédure écrite et vérifiée, supprimer le code mort, surveiller et savoir arrêter.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',

    'relation' => 'externe',
    'client'   => 'Knight Capital',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Courtage et tenue de marché en actions, États-Unis'],
        ['l' => 'Période', 'v' => 'De 2003 à octobre 2013'],
        ['l' => 'Issue', 'v' => 'Échec'],
        ['l' => 'Leçon', 'v' => 'Déployer avec procédure et double contrôle'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était Knight Capital avant le 1er août 2012 ?',
            'paragraphes' => [
                'Knight Capital Group est une société de courtage fondée en 1995 et introduite en Bourse en 1998, rappelle le <a href="https://archive.nytimes.com/dealbook.nytimes.com/2012/08/02/knight-capital-says-trading-mishap-cost-it-440-million/">New York Times (DealBook) du 2 août 2012</a>. Installée à Jersey City, dans le New Jersey, elle fait surtout de la tenue de marché : elle achète et vend des actions en continu, avec son propre capital, et exécute les ordres que lui transmettent des courtiers en ligne comme TD Ameritrade ou E*Trade. Son entité opérationnelle aux États-Unis, Knight Capital Americas, est un courtier enregistré auprès de la SEC, l\'autorité fédérale des marchés financiers.',
                'Son poids sur le marché américain est considérable. D\'après l\'<a href="https://www.sec.gov/litigation/admin/2013/34-70694.pdf">ordonnance de la SEC du 16 octobre 2013</a>, les transactions de Knight, pour elle-même et pour ses clients, représentaient en 2011 et 2012 environ 10 % de tous les échanges d\'actions cotées aux États-Unis. Le cabinet Tabb Group, cité par le New York Times, l\'estimait à 11 % entre janvier et mai 2012. Le même article indique qu\'à la fin du premier trimestre 2012, la société employait 1 418 personnes dans 21 implantations.',
                'Les comptes 2011, republiés par Knight auprès de la SEC le 6 août 2012, montrent une entreprise rentable : 1,40 milliard de dollars de revenus, 115,2 millions de bénéfice net et 1,46 milliard de capitaux propres au 31 décembre 2011. L\'année 2012 avait mal commencé : lors de l\'introduction en Bourse de Facebook, en mai, Knight a enregistré 35,4 millions de dollars de pertes de négociation, imputées aux défaillances du Nasdaq, selon son rapport annuel 2012.',
                'Au cœur de l\'histoire se trouve SMARS, un routeur d\'ordres automatique, rapide et algorithmique. L\'ordonnance de la SEC décrit son rôle : recevoir de grands ordres, dits « parents », venus des autres systèmes de Knight, puis les découper en petits ordres « enfants » envoyés aux différentes Bourses jusqu\'à ce que la quantité demandée soit exécutée. SMARS représentait à lui seul environ 1 % ou plus des échanges d\'actions cotées aux États-Unis. Pour une PME, l\'équivalent serait le module qui transforme une commande en paiements, en bons de livraison et en messages : un composant invisible dont tout le reste dépend.',
                'Depuis le 14 juillet 2011, une règle de la SEC encadre ce type d\'activité. La règle 15c3-5, adoptée le 3 novembre 2010 selon le <a href="https://www.sec.gov/newsroom/press-releases/2010-210-sec-adopts-new-rule-preventing-unfiltered-market-access">communiqué de la SEC</a>, oblige tout courtier qui accède directement au marché à mettre en place des contrôles empêchant les ordres erronés et le dépassement de plafonds de capital fixés d\'avance. Elle exige aussi une description écrite de ces contrôles, une revue régulière de leur efficacité et une certification annuelle signée par le directeur général.',
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Quelles décisions et quels événements ont mené à la perte, de 2003 à 2013 ?',
            'items' => [
                ['date' => '2003', 'titre' => 'Power Peg n\'est plus utilisé', 'texte' => 'Knight cesse de se servir de la fonction Power Peg de SMARS, mais choisit de laisser son code sur les serveurs de production, où il reste appelable, selon l\'ordonnance de la SEC.'],
                ['date' => '2005', 'titre' => 'Un compteur déplacé, sans nouveau test', 'texte' => 'La fonction qui compte les actions déjà exécutées est déplacée plus tôt dans le code de SMARS pour servir ailleurs. Power Peg n\'est pas retesté : s\'il est rappelé, il ne sait plus quand s\'arrêter.'],
                ['date' => '3 novembre 2010', 'titre' => 'La SEC adopte la règle sur l\'accès au marché', 'texte' => 'La règle 15c3-5 impose aux courtiers des contrôles contre les ordres erronés et des plafonds de capital ; elle s\'applique à partir du 14 juillet 2011.'],
                ['date' => 'Octobre 2011', 'titre' => 'Un premier incident à 7,5 millions de dollars', 'texte' => 'Après un test de reprise d\'activité, un desk de Knight continue de coter avec des données de test le lundi matin. Knight corrige ce cas précis sans revoir l\'ensemble de ses contrôles, relève la SEC.'],
                ['date' => 'Mars 2012', 'titre' => 'Une certification mal rédigée', 'texte' => 'Le directeur général signe la certification annuelle exigée par la règle, qui atteste l\'existence de « processus » et non la conformité des contrôles. La SEC précise que l\'erreur de rédaction n\'était pas intentionnelle.'],
                ['date' => '3 juillet 2012', 'titre' => 'Feu vert au programme de la Bourse de New York', 'texte' => 'La SEC approuve le Retail Liquidity Program (RLP) du NYSE, un dispositif réservé aux ordres des particuliers, prévu pour démarrer le 1er août 2012.'],
                ['date' => '27 juillet 2012', 'titre' => 'Le nouveau code est déployé par étapes', 'texte' => 'Knight installe le code du RLP dans SMARS, quelques serveurs par jour. Un technicien ne le copie pas sur l\'un des huit serveurs, et personne ne vérifie.'],
                ['date' => '1er août 2012, 8 h 01', 'titre' => 'Les premiers messages d\'erreur', 'texte' => 'Un système interne commence à envoyer des e-mails automatiques signalant « Power Peg disabled ». Quatre-vingt-dix-sept partent avant l\'ouverture, sans être traités.'],
                ['date' => '1er août 2012, 9 h 30', 'titre' => 'L\'ouverture et les 45 minutes', 'texte' => 'Le huitième serveur réveille Power Peg et envoie des millions d\'ordres. Au bout d\'environ 45 minutes, Knight a exécuté plus de 397 millions d\'actions dans 154 titres.'],
                ['date' => '2 août 2012', 'titre' => 'Knight annonce environ 440 millions de pertes', 'texte' => 'La société a soldé toutes les positions erronées et indique que son capital est « gravement » touché. Son action clôture en baisse de 63 %, à 2,58 dollars, selon le New York Times.'],
                ['date' => '6 août 2012', 'titre' => 'Sauvetage par six investisseurs', 'texte' => 'Jefferies, Blackstone, GETCO, Stephens, Stifel et TD Ameritrade apportent 400 millions de dollars en actions privilégiées convertibles, soit environ 73 % du capital après conversion.'],
                ['date' => '29 août 2012', 'titre' => 'Enquête formelle de la SEC', 'texte' => 'La SEC ouvre une enquête formelle sur Knight et sa filiale de courtage, après des examens sur place de leur capital et de leur conformité, selon le rapport annuel 2012.'],
                ['date' => '19 décembre 2012', 'titre' => 'Accord de fusion avec GETCO', 'texte' => 'Knight accepte d\'être réunie avec GETCO dans une nouvelle société cotée ; l\'opération valorise Knight à environ 1,4 milliard de dollars, soit 3,75 dollars par action.'],
                ['date' => '1er juillet 2013', 'titre' => 'Knight disparaît dans KCG Holdings', 'texte' => 'La fusion est réalisée : Knight Capital Group et GETCO deviennent deux filiales de KCG Holdings.'],
                ['date' => '16 octobre 2013', 'titre' => 'Ordonnance de la SEC', 'texte' => 'Knight Capital Americas accepte, sans reconnaître ni contester les faits, un blâme, une injonction, une amende de 12 millions de dollars et la revue de ses contrôles par un consultant indépendant.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que s\'est-il passé dans les serveurs de Knight avant l\'ouverture du 1er août 2012 ?',
            'paragraphes' => [
                'Le point de départ est un changement de règles du marché. Le 3 juillet 2012, la SEC approuve, par sa <a href="https://www.sec.gov/files/rules/sro/nyse/2012/34-67347.pdf">décision n° 34-67347</a>, le Retail Liquidity Program de la Bourse de New York, un dispositif à l\'essai pendant douze mois qui offre des conditions particulières aux ordres des particuliers. Knight avait d\'ailleurs adressé à la SEC des lettres de commentaires sur ce projet en novembre 2011 et en mars 2012. Pour que ses clients puissent y participer dès le 1er août, elle modifie plusieurs systèmes, dont SMARS.',
                'Le nouveau code devait prendre la place d\'un code inutilisé dans la même partie du routeur : celui de Power Peg, une fonction que Knight n\'employait plus depuis 2003 mais qui était restée présente et appelable. L\'équipe réutilise aussi un indicateur, un « drapeau » transmis avec les ordres, qui servait autrefois à déclencher Power Peg. L\'intention, écrit la SEC, était de supprimer Power Peg pour que ce drapeau active désormais la nouvelle fonction. Tout reposait donc sur une condition : que l\'ancien code ait disparu de chaque serveur.',
                'Or Power Peg n\'était plus fiable depuis longtemps. Lorsqu\'il fonctionnait, un compteur additionnait les actions exécutées et arrêtait l\'envoi d\'ordres enfants une fois l\'ordre parent entièrement servi. En 2005, Knight a déplacé ce compteur plus tôt dans la séquence du code pour l\'utiliser ailleurs, sans retester Power Peg. L\'ordonnance le dit simplement : personne n\'a vérifié si la vieille fonction marcherait encore correctement si on l\'appelait un jour. Le code mort était devenu un code dangereux, sans que rien ne le signale.',
                'À partir du 27 juillet 2012, Knight déploie le nouveau code par étapes, sur un nombre limité de serveurs chaque jour. L\'un des techniciens ne copie pas le code sur l\'un des huit serveurs de SMARS. Aucun second technicien ne contrôle le déploiement, et aucune procédure écrite ne l\'exige : SMARS n\'en avait pas, alors que d\'autres équipes de Knight disposaient de procédures écrites. Personne ne s\'aperçoit que le huitième serveur conserve Power Peg et ne contient pas le nouveau code.',
                'Le matin du 1er août, le problème se manifeste avant même l\'ouverture. Dès 8 h 01, heure de New York, des ordres reçus pour la séance de pré-ouverture font générer par un système interne des e-mails automatiques, appelés « BNET rejects », qui mentionnent SMARS et une erreur intitulée « Power Peg disabled ». Quatre-vingt-dix-sept de ces messages partent vers un groupe d\'employés avant 9 h 30. Ils n\'avaient pas été conçus comme des alertes et n\'étaient généralement pas lus. La SEC note qu\'ils offraient pourtant une occasion de trouver et de corriger l\'erreur avant l\'ouverture.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment 212 ordres de clients sont-ils devenus 4 millions d\'exécutions en 45 minutes ?',
            'paragraphes' => [
                'À 9 h 30, Knight reçoit des ordres de courtiers dont les clients peuvent participer au nouveau programme. Les sept serveurs mis à jour les traitent correctement. Sur le huitième, les ordres porteurs du drapeau réutilisé déclenchent Power Peg. Comme le compteur n\'est plus à sa place, ce serveur envoie en rafale des ordres enfants pour chaque ordre parent, sans tenir compte des actions déjà achetées ou vendues. Une autre partie du système de Knight savait que les ordres parents étaient servis, mais cette information ne parvenait pas à SMARS.',
                'Pour 212 ordres parents, SMARS envoie des millions d\'ordres enfants. En 45 minutes environ, Knight obtient plus de 4 millions d\'exécutions sur 154 titres, pour plus de 397 millions d\'actions. Elle se retrouve avec une position acheteuse nette d\'environ 3,5 milliards de dollars sur 80 titres et une position vendeuse nette d\'environ 3,15 milliards sur 74 autres, détaille l\'ordonnance. Ces positions ne correspondent à aucune décision d\'investissement : ce sont les traces d\'une boucle qui ne savait plus s\'arrêter.',
                'Le marché en porte la marque. Sur 75 titres, les exécutions de Knight dépassent 20 % du volume échangé et accompagnent des variations de cours supérieures à 5 % ; sur 37 d\'entre eux, elles dépassent la moitié du volume et le cours bouge de plus de 10 %. La SEC note que certains intervenants ont obtenu des prix moins favorables, d\'autres des prix plus favorables. Le <a href="https://archive.nytimes.com/www.nytimes.com/2012/08/02/business/unusual-volume-roils-early-trading-in-some-stocks.html">New York Times du 1er août 2012</a> rapporte que toutes les Bourses ont accepté d\'annuler les transactions sur six titres aux mouvements extrêmes ; les autres sont restées valables.',
                'Pendant ce temps, Knight reste connectée au marché. Elle n\'a aucune procédure de gestion d\'incident pour guider ses équipes et s\'en remet surtout à son équipe technique, qui cherche la panne en pleine séance pendant que les ordres continuent de partir. Lors d\'une de ses tentatives, elle désinstalle le nouveau code des sept serveurs où il fonctionnait. Le remède aggrave le mal : les ordres entrants activent alors Power Peg, toujours présent sur ces serveurs, comme sur le huitième. D\'après le New York Times, l\'agitation retombe vers 10 h 15.',
                'Le lendemain, 2 août, Knight publie un <a href="https://www.sec.gov/Archives/edgar/data/1060749/000119312512332176/d391111dex991.htm">communiqué déposé auprès de la SEC</a> : le problème est lié à l\'installation d\'un logiciel de négociation, ce logiciel a été retiré, toutes les positions erronées ont été soldées et la perte réalisée avant impôt atteint environ 440 millions de dollars. Le capital est « gravement » atteint, même si les filiales de courtage respectent encore leurs exigences de fonds propres. La société dit chercher des solutions de financement. Elle affirme aussi que ses clients n\'ont pas été lésés par les ordres erronés.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pourquoi une simple erreur de copie a-t-elle pu coûter aussi cher ?',
            'intro' => 'L\'ordonnance de la SEC ne s\'arrête pas au serveur oublié. Elle décrit une série de protections absentes ou inopérantes, dont chacune aurait pu empêcher l\'accident ou en limiter le coût. Daniel M. Hawke, chef de l\'unité de la SEC chargée des abus de marché, résume dans le <a href="https://www.sec.gov/news/press-release/2013-222">communiqué du 16 octobre 2013</a> : ne pas s\'être demandé ce qui arriverait si un composant défaillait a eu des « conséquences catastrophiques ».',
            'items' => [
                ['titre' => 'Aucune procédure écrite de déploiement', 'texte' => 'Pour SMARS, Knight n\'avait ni procédure écrite de développement et de mise en production, ni obligation de faire relire un déploiement par un second technicien. La SEC écrit qu\'une procédure imposant une simple double vérification aurait pu révéler le serveur oublié et éviter les événements du 1er août.'],
                ['titre' => 'Du code mort laissé en production', 'texte' => 'Power Peg est resté sur les serveurs neuf ans après son abandon. En 2005, Knight y a touché sans protection contre une activation accidentelle et sans protocole de nouveau test. Un code qui ne sert plus mais peut encore être appelé est un risque sans aucun bénéfice.'],
                ['titre' => 'Un drapeau recyclé', 'texte' => 'Réutiliser l\'indicateur qui déclenchait Power Peg liait le bon fonctionnement du nouveau code à la disparition complète de l\'ancien. Sur tout serveur où l\'ancien code subsistait, le même signal produisait un comportement totalement différent.'],
                ['titre' => 'Des messages d\'erreur que personne ne lisait', 'texte' => 'Les 97 e-mails « Power Peg disabled » décrivaient le problème en temps réel, une heure et demie avant l\'ouverture. Selon la SEC, une procédure intégrant ces messages à la surveillance des systèmes aurait elle aussi pu éviter l\'accident.'],
                ['titre' => 'Rien pour contrôler ce qui sortait du routeur', 'texte' => 'Knight avait des contrôles en amont de SMARS, pas à sa sortie : aucun outil ne comparait les ordres envoyés au marché avec ceux reçus, et aucune procédure ne prévoyait d\'arrêter SMARS face à son propre comportement anormal. Le garde-fou de prix existant ne s\'appliquait pas aux ordres destinés à l\'ouverture.'],
                ['titre' => 'Des plafonds de capital sans effet automatique', 'texte' => 'Le compte qui accumulait les positions, le « 33 Account », avait une limite brute de 2 millions de dollars, mais elle n\'était reliée à aucun blocage automatique. L\'outil de suivi des positions, PMON, n\'émettait aucune alerte, n\'affichait pas les limites et prenait du retard quand les volumes explosaient.'],
                ['titre' => 'Aucune règle pour savoir quand débrancher', 'texte' => 'Knight n\'avait pas de procédure de réponse aux incidents. La SEC estime que ses équipes techniques avaient besoin de consignes claires indiquant à quel moment déconnecter du marché un système défaillant.'],
                ['titre' => 'Des revues qui comptaient les contrôles sans les éprouver', 'texte' => 'Les revues de conformité dressaient l\'inventaire des contrôles existants et vérifiaient qu\'ils fonctionnaient, sans se demander ce qui se passerait si SMARS déraillait. Après l\'incident d\'octobre 2011, Knight avait réglé le cas précis sans en chercher les causes profondes, constate la SEC.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le retour à l\'ancienne version a-t-il aggravé la situation ?',
            'paragraphes' => [
                'Revenir à la version précédente est le réflexe le plus répandu quand une mise en production tourne mal, et il est souvent le bon. Chez Knight, il a échoué pour une raison précise : la version précédente n\'était pas saine. Elle contenait Power Peg, défectueux depuis 2005, et les ordres du jour portaient le drapeau qui le déclenchait. En retirant le nouveau code des sept serveurs, l\'équipe a transformé un serveur fautif en huit serveurs fautifs.',
                'Ce détail renverse une idée reçue. Un retour arrière n\'est sûr que si l\'on sait exactement ce que contient la version vers laquelle on revient et si elle est compatible avec les données qui circulent au moment du retour. Il se prépare donc avant la mise en production, et se teste, au lieu de s\'improviser en pleine crise. Sans cette préparation, il devient un second déploiement, fait dans la précipitation, sans relecture.',
                'L\'ordonnance pointe une priorité qui aurait dû passer avant le diagnostic : couper le flux. Tant que SMARS restait connecté, chaque minute de recherche coûtait des millions d\'ordres supplémentaires. Pour une entreprise de toute taille, la règle qui en découle est simple à écrire : quand un système envoie au-dehors des actions qu\'on ne comprend pas, on l\'arrête d\'abord et on cherche ensuite, à condition d\'avoir décidé à l\'avance qui peut l\'arrêter, comment, et ce que l\'arrêt coupe.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui reste discuté ?',
            'texte' => 'Établi : les faits de l\'ordonnance de la SEC, issue d\'un accord par lequel Knight ne reconnaît ni ne conteste les constatations. Discuté : le montant exact de la perte, qui varie selon le périmètre retenu, et la durée, que CNBC situait le 6 août 2012 entre 30 et 45 minutes. Le même article évoquait un logiciel chargé la veille et environ 148 titres ; l\'ordonnance décrit un déploiement commencé le 27 juillet et 154 titres. L\'ordonnance n\'explique pas pourquoi le technicien a manqué un serveur : les récits qui évoquent un script défaillant ne s\'appuient pas sur elle. Enfin, Knight a affirmé que ses clients n\'avaient pas été lésés, mais la SEC relève des prix moins favorables pour certains intervenants du marché.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que reste-t-il, en chiffres, de ces 45 minutes ?',
            'items' => [
                ['valeur' => '97', 'libelle' => 'E-mails automatiques « Power Peg disabled » envoyés avant l\'ouverture du 1er août 2012, sans être traités', 'source' => 'SEC, ordonnance du 16 octobre 2013', 'url' => 'https://www.sec.gov/litigation/admin/2013/34-70694.pdf'],
                ['valeur' => '397 millions', 'libelle' => 'Actions échangées en environ 45 minutes le 1er août 2012, en plus de 4 millions d\'exécutions sur 154 titres', 'source' => 'SEC, ordonnance du 16 octobre 2013', 'url' => 'https://www.sec.gov/litigation/admin/2013/34-70694.pdf'],
                ['valeur' => '6,65 Md$', 'libelle' => 'Positions involontaires cumulées le 1er août 2012 : 3,5 milliards à l\'achat et 3,15 milliards à la vente', 'source' => 'SEC, ordonnance du 16 octobre 2013', 'url' => 'https://www.sec.gov/litigation/admin/2013/34-70694.pdf'],
                ['valeur' => '457,6 M$', 'libelle' => 'Perte de négociation liée au 1er août, comptabilisée au troisième trimestre 2012', 'source' => 'Knight Capital Group, résultats du 17 octobre 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512425350/d425406dex991.htm'],
                ['valeur' => '-63 %', 'libelle' => 'Baisse de l\'action Knight à la clôture du 2 août 2012, à 2,58 dollars, après -32 % la veille', 'source' => 'The New York Times (DealBook), 2 août 2012', 'url' => 'https://archive.nytimes.com/dealbook.nytimes.com/2012/08/02/knight-capital-says-trading-mishap-cost-it-440-million/'],
                ['valeur' => '73 %', 'libelle' => 'Part du capital revenant, après conversion, aux investisseurs du sauvetage de 400 millions de dollars du 6 août 2012', 'source' => 'Knight Capital Group, communiqué du 6 août 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512338098/d392396dex992.htm'],
                ['valeur' => '347,1 M$', 'libelle' => 'Perte nette de l\'exercice 2012, après un bénéfice net de 115,2 millions en 2011', 'source' => 'Knight Capital Group, rapport annuel 2012 déposé le 1er mars 2013', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312513087636/d449921d10k.htm'],
                ['valeur' => '12 M$', 'libelle' => 'Amende infligée par la SEC le 16 octobre 2013, première sanction prononcée au titre de la règle sur l\'accès au marché', 'source' => 'SEC, communiqué 2013-222', 'url' => 'https://www.sec.gov/news/press-release/2013-222'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi trouve-t-on plusieurs montants pour la même perte ?',
            'paragraphes' => [
                'Les chiffres publiés ne se contredisent pas : ils ne mesurent pas la même chose. Le 2 août 2012, Knight annonce une perte réalisée avant impôt « d\'environ » 440 millions de dollars, une première estimation. Dans ses <a href="https://www.sec.gov/Archives/edgar/data/1060749/000119312512425350/d425406dex991.htm">résultats du troisième trimestre</a>, publiés le 17 octobre 2012, elle chiffre la perte de négociation à 457,6 millions et l\'ensemble des pertes avant impôt liées à l\'incident, frais induits compris, à 461,1 millions. Son <a href="https://www.sec.gov/Archives/edgar/data/1060749/000119312513087636/d449921d10k.htm">rapport annuel 2012</a> retient 468,1 millions en ajoutant les frais juridiques et de conseil engagés ensuite. La SEC, elle, écrit « plus de 460 millions ».',
                'D\'autres coûts s\'ajoutent sans être imputés à l\'incident lui-même. L\'événement a obligé Knight à réexaminer la valeur de ses actifs : elle a déprécié 143 millions de dollars d\'écarts d\'acquisition et d\'actifs incorporels. Le sauvetage du 6 août a coûté environ 40,5 millions de frais, si bien que les 400 millions levés n\'ont rapporté que 359,5 millions nets. Au troisième trimestre 2012, la perte nette atteint 389,9 millions de dollars ; sur l\'année, 347,1 millions, contre un bénéfice de 115,2 millions en 2011.',
                'Mis en regard des capitaux propres, le choc est brutal. Les 440 millions annoncés le 2 août représentent environ 30 % des 1,46 milliard de capitaux propres de fin 2011, un calcul fait pour cette page qui rejoint l\'estimation d\'un analyste de JPMorgan citée par <a href="https://www.cnbc.com/2012/08/06/knight-capital-reaches-400-million-deal-to-save-firm.html">CNBC le 6 août 2012</a>. L\'amende de 12 millions de dollars infligée en 2013 pèse, elle, moins de 3 % de la perte : la sanction financière la plus lourde n\'est pas venue du régulateur, mais des 45 minutes elles-mêmes.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Knight a-t-elle survécu quelques jours, puis perdu son indépendance ?',
            'paragraphes' => [
                'La perte n\'a pas seulement entamé le capital : elle a fait fuir les clients et les contreparties. Dans les comptes 2011 republiés le <a href="https://www.sec.gov/Archives/edgar/data/1060749/000119312512336167/d392288dex991.htm">6 août 2012</a>, Knight explique avoir subi une baisse de ses flux d\'ordres et des tensions de liquidité, et écrit qu\'il existe un doute important sur sa capacité à poursuivre son activité. Son commissaire aux comptes, PricewaterhouseCoopers, ajoute ce même doute à son rapport. CNBC rapporte que la Bourse de New York a transféré temporairement à GETCO les responsabilités de teneur de marché de Knight sur plus de 500 titres.',
                'Le sauvetage est bouclé le 6 août. Six sociétés, dont Jefferies, qui a conçu l\'opération, achètent pour 400 millions de dollars d\'actions privilégiées convertibles en actions ordinaires à 1,50 dollar, environ 267 millions d\'actions. Faute de temps, le comité d\'audit renonce au vote des actionnaires normalement requis, au motif que le délai aurait « gravement compromis » la viabilité financière de Knight, selon son <a href="https://www.sec.gov/Archives/edgar/data/1060749/000119312512338098/d392396dex992.htm">communiqué du 6 août 2012</a>. Les anciens actionnaires sont fortement dilués.',
                'L\'entreprise retrouve ensuite une partie de son activité. Le 17 octobre 2012, son directeur général, Thomas Joyce, affirme que sa part de marché dans les actions américaines a nettement remonté et que des mesures ont été prises pour renforcer les processus et les contrôles. Mais l\'indépendance ne dure pas : le <a href="https://www.sec.gov/Archives/edgar/data/1060749/000089882212000673/ex991.htm">19 décembre 2012</a>, Knight et GETCO annoncent leur rapprochement. Les actionnaires de Knight peuvent choisir 3,75 dollars par action en numéraire ou des titres de la nouvelle société, une prime de 51 % sur le cours du 23 novembre 2012.',
                'La fusion est réalisée le <a href="https://www.sec.gov/Archives/edgar/data/1060749/000119312513284968/d565423d8k.htm">1er juillet 2013</a> : Knight Capital Group et GETCO deviennent des filiales de KCG Holdings, et les anciens actionnaires de Knight reçoivent au total environ 720 millions de dollars en numéraire. Moins d\'un an après l\'incident, la société fondée en 1995 n\'existe plus comme entreprise indépendante. Entre-temps, des actionnaires avaient engagé des actions de groupe, dont une dès le 17 août 2012, et la SEC avait ouvert son enquête formelle le 29 août 2012.',
                'L\'ordonnance du 16 octobre 2013 clôt le volet réglementaire. Knight Capital Americas y accepte, sans reconnaître ni contester les faits, un blâme, l\'interdiction de commettre de nouvelles violations et une amende de 12 millions de dollars. Elle s\'engage surtout à faire examiner par un consultant indépendant son cycle de développement logiciel pour tous ses systèmes critiques, ses procédures de déploiement de code, ses routeurs d\'ordres, le lien automatique entre plafonds de capital et envoi d\'ordres, et ses protocoles de réponse aux incidents. La liste dessine, en creux, tout ce qui manquait le 1er août.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui aurait évité ou limité la perte, étape par étape ?',
            'options'  => ['Ce que Knight a fait, selon la SEC', 'Ce qui aurait évité ou limité la perte'],
            'criteres' => [
                ['critere' => 'Procédure de déploiement', 'valeurs' => ['Aucune procédure écrite pour SMARS ; un technicien seul copie le code serveur par serveur', 'Une procédure écrite, la même à chaque fois, qui liste les serveurs et les vérifications à faire']],
                ['critere' => 'Contrôle après déploiement', 'valeurs' => ['Aucune seconde vérification ; le serveur oublié passe inaperçu', 'Une seconde personne, ou un outil, confirme que chaque serveur exécute la bonne version']],
                ['critere' => 'Code inutilisé', 'valeurs' => ['Power Peg laissé en production depuis 2003, modifié en 2005 sans nouveau test', 'Supprimer le code abandonné ou, à défaut, le désactiver et le retester après chaque modification voisine']],
                ['critere' => 'Indicateur réutilisé', 'valeurs' => ['Le drapeau de Power Peg sert à déclencher la nouvelle fonction', 'Un nouvel indicateur, sans signification ancienne, pour une nouvelle fonction']],
                ['critere' => 'Messages d\'erreur', 'valeurs' => ['97 e-mails envoyés à un groupe, non conçus comme alertes, non lus', 'Des alertes classées par gravité, envoyées à une personne de garde et suivies d\'une action']],
                ['critere' => 'Contrôle en sortie', 'valeurs' => ['Aucune comparaison entre ordres reçus et ordres envoyés', 'Un plafond qui bloque automatiquement tout envoi incohérent avec la demande d\'origine']],
                ['critere' => 'Plafonds de capital', 'valeurs' => ['Limites suivies à l\'œil sur un outil sans alerte ni blocage', 'Des plafonds reliés à l\'envoi des ordres, qui coupent sans attendre une décision humaine']],
                ['critere' => 'Réponse à l\'incident', 'valeurs' => ['Système laissé connecté pendant la recherche de la panne', 'Une consigne écrite : arrêter d\'abord, diagnostiquer ensuite, avec un responsable désigné']],
                ['critere' => 'Retour arrière', 'valeurs' => ['Désinstallation improvisée du nouveau code, qui étend la panne', 'Un retour vers une version connue et testée, préparé avant la mise en production']],
                ['critere' => 'Incidents passés', 'valeurs' => ['L\'incident d\'octobre 2011 corrigé au cas par cas', 'Une analyse des causes profondes qui fait évoluer tous les contrôles concernés']],
            ],
            'verdict'  => 'Aucune de ces mesures n\'exigeait une technologie coûteuse : la plupart tiennent en une procédure écrite, un second regard, une suppression de code et un plafond automatique.',
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que faut-il retenir de l\'histoire de Knight Capital en une idée ?',
            'texte' => 'Une mise en production n\'est terminée que lorsqu\'une seconde personne a vérifié, selon une procédure écrite, que chaque machine exécute la bonne version, que l\'ancien code ne peut plus se réveiller et qu\'un signal d\'alarme suffit à arrêter le système avant que l\'erreur ne coûte plus cher que le projet.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une PME de Cotonou, d\'Abidjan ou de Lyon est-elle concernée par un accident de Wall Street ?',
            'paragraphes' => [
                'Une PME ne route pas d\'ordres de Bourse, mais elle met du code en production bien plus souvent qu\'elle ne le croit : une mise à jour de la boutique en ligne, un nouveau module de paiement par mobile money, une application mobile publiée sur les magasins d\'applications, une API qui relie le site à l\'ERP, un scénario d\'automatisation qui envoie des factures ou des relances WhatsApp. Chaque fois, il existe un moment où la nouvelle version remplace l\'ancienne, et une question que personne ne pose : l\'a-t-elle remplacée partout ?',
                'Le « huitième serveur » prend dans une PME des formes très ordinaires. Une ancienne version de l\'application mobile, restée sur les téléphones des clients, qui appelle encore une adresse d\'API qu\'on croyait abandonnée. Un deuxième serveur derrière un répartiteur de charge, oublié lors de la mise à jour. Une tâche planifiée sur une vieille machine. Une ancienne adresse de notification de paiement encore enregistrée chez l\'opérateur. Un scénario d\'automatisation dupliqué pour un test et jamais désactivé. Dans tous ces cas, le système fonctionne presque partout, et c\'est précisément ce qui rend l\'erreur invisible.',
                'La vitesse joue le même rôle qu\'à Wall Street, à une autre échelle. La SEC écrit dans son ordonnance qu\'en l\'absence de contrôles adaptés, la rapidité des systèmes automatisés peut transformer une erreur gérable en événement extrême. Une automatisation qui boucle peut envoyer des centaines de SMS facturés, un script de remboursement peut rembourser deux fois, un chatbot mal configuré peut répondre à tous les clients avec un prix erroné. Ce qui coûte, ce n\'est pas l\'erreur de départ, c\'est le temps pendant lequel elle se répète sans que personne ne puisse l\'arrêter.',
                'Le risque grandit avec la facilité de produire du code. Les outils d\'intelligence artificielle permettent aujourd\'hui de générer une application ou une automatisation en quelques heures, ce que l\'on appelle le vibe coding. Le code produit ainsi n\'est ni meilleur ni pire qu\'un autre, mais il arrive souvent en production sans relecture, sans tests et sans procédure de mise en ligne, avec des fonctions laissées « au cas où ». Les manquements décrits par la SEC chez Knight, absence de second regard, code inutilisé conservé, alertes non lues, se reproduisent alors à l\'identique, chez des entreprises bien moins armées pour encaisser le choc.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux d\'alerte doivent inquiéter un dirigeant de PME ?',
            'intro' => 'Chacun de ces signaux correspond à un manquement relevé par la SEC chez Knight. Aucun ne suppose une grande entreprise : tous se rencontrent dans des structures de cinq ou dix personnes.',
            'items' => [
                ['titre' => 'Personne ne sait dire quelle version tourne en ligne', 'texte' => 'Si votre prestataire ou votre équipe ne peut pas indiquer, en quelques minutes, la version installée sur chaque serveur et dans chaque magasin d\'applications, une mise à jour partielle passera inaperçue.'],
                ['titre' => 'Les mises en ligne se font de mémoire', 'texte' => 'Une seule personne, aucune liste écrite, des fichiers copiés à la main ou un bouton cliqué sans vérification ensuite : c\'est exactement la situation de SMARS en juillet 2012.'],
                ['titre' => 'Du code est gardé « au cas où »', 'texte' => 'Fonctions désactivées, pages cachées, anciennes routes d\'API, vieux scénarios d\'automatisation en pause : tout ce qui peut encore être appelé peut encore se déclencher, parfois dans un état que personne ne connaît plus.'],
                ['titre' => 'Les e-mails d\'erreur finissent dans un dossier', 'texte' => 'Des notifications automatiques que personne ne lit, filtrées vers une boîte partagée ou envoyées à un ancien salarié, ne protègent de rien. Les 97 e-mails de Knight décrivaient la panne avant qu\'elle ne coûte un dollar.'],
                ['titre' => 'Aucun plafond automatique', 'texte' => 'Pas de limite au nombre de messages envoyés par heure, au montant des remboursements, au nombre de commandes passées par un même client : rien n\'arrête une boucle avant qu\'un humain ne la remarque.'],
                ['titre' => 'On ne sait pas couper une seule fonction', 'texte' => 'Si arrêter un module de paiement ou une automatisation oblige à éteindre tout le site, l\'équipe hésitera à le faire et laissera tourner le problème, comme Knight l\'a laissé tourner en cherchant la panne.'],
                ['titre' => 'Chaque incident est réglé puis oublié', 'texte' => 'Corriger le symptôme sans se demander pourquoi les contrôles ne l\'ont pas arrêté prépare l\'incident suivant. Chez Knight, l\'accident d\'octobre 2011 annonçait déjà l\'absence de contrôle général des ordres erronés.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Agir avant un incident ou après : qu\'est-ce que cela change pour une PME ?',
            'legende' => 'Comparaison qualitative pour un site, une application ou une automatisation de PME. Les coûts dépendent de chaque projet : aucun montant n\'est avancé ici.',
            'entetes' => ['Mesure', 'Prise à temps', 'Prise après un incident'],
            'lignes'  => [
                ['Écrire la procédure de mise en ligne', 'Une ou deux pages rédigées une fois, réutilisées à chaque version', 'Reconstitution en urgence de ce qui a été fait, par qui et dans quel ordre'],
                ['Faire vérifier chaque déploiement', 'Quelques minutes d\'un second regard ou d\'un contrôle automatique', 'Recherche à l\'aveugle de la machine ou de la version fautive, système en marche'],
                ['Supprimer le code inutilisé', 'Un nettoyage planifié, testé avant la mise en ligne', 'Découverte d\'une vieille fonction réveillée, dont plus personne ne connaît le comportement'],
                ['Brancher les erreurs sur une alerte', 'Un réglage de surveillance et une personne désignée pour répondre', 'Lecture après coup de messages qui annonçaient la panne'],
                ['Poser des plafonds automatiques', 'Une limite de volume ou de montant, ajustée une fois', 'Remboursements, messages facturés ou commandes à annuler un par un'],
                ['Prévoir un interrupteur par fonction', 'Un réglage qui coupe un module sans arrêter le reste', 'Choix entre tout éteindre et laisser l\'erreur se répéter'],
                ['Tester le retour arrière', 'Une répétition sur un environnement de test', 'Un retour improvisé qui peut, comme chez Knight, étendre la panne'],
                ['Confier la maintenance à un professionnel', 'Un suivi régulier, des mises à jour planifiées, des sauvegardes vérifiées', 'Une intervention d\'urgence, au tarif de l\'urgence, par quelqu\'un qui découvre le système'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un « huitième serveur » dans une PME ?',
            'items' => [
                ['secteur' => 'Commerce en ligne, Abidjan', 'probleme' => 'La règle des codes promotionnels change sur le site, mais l\'ancienne version de l\'application mobile appelle toujours l\'ancienne route de l\'API, qui applique l\'ancienne remise.', 'solution' => 'Recenser tous les clients de l\'API, versionner les routes, fermer l\'ancienne après une date annoncée et surveiller les commandes dont le prix sort de la fourchette attendue.'],
                ['secteur' => 'Distribution, Cotonou', 'probleme' => 'Un nouveau scénario d\'automatisation envoie les factures par WhatsApp, mais l\'ancien, recopié pour un test, est resté actif : chaque client reçoit tout en double.', 'solution' => 'Supprimer les scénarios remplacés au lieu de les mettre en pause, identifier chaque envoi par une clé unique et comparer chaque jour le nombre de messages au nombre de factures.'],
                ['secteur' => 'Établissement scolaire, Dakar', 'probleme' => 'Après un changement d\'hébergement, l\'opérateur de paiement continue d\'envoyer les confirmations de mobile money à l\'ancien serveur : les frais payés ne sont plus enregistrés.', 'solution' => 'Inscrire les adresses de notification dans la procédure de migration, faire un paiement réel de test après la bascule et rapprocher chaque jour paiements reçus et paiements enregistrés.'],
                ['secteur' => 'Logistique, Lomé', 'probleme' => 'Deux serveurs se partagent les connexions, la mise à jour n\'est faite que sur l\'un d\'eux : un client sur deux voit un suivi de colis différent.', 'solution' => 'Déployer par un script unique sur toutes les machines, afficher le numéro de version sur chacune et faire contrôler la liste par une seconde personne avant d\'ouvrir.'],
                ['secteur' => 'Industrie, Douala', 'probleme' => 'Un script de relance par SMS entre en boucle un vendredi soir et vide le crédit du compte avant le lundi.', 'solution' => 'Plafonner le nombre de messages par heure, déclencher une alerte sur la consommation de crédit et prévoir un interrupteur qui coupe l\'envoi sans arrêter le reste du système.'],
                ['secteur' => 'Agence de services, Lyon', 'probleme' => 'Un outil interne généré avec l\'IA part en production sans relecture ; une route d\'administration créée pour les essais reste ouverte.', 'solution' => 'Relire le code avant la mise en ligne, supprimer tout ce qui a servi aux essais, ajouter des tests sur les fonctions sensibles et passer par un environnement de préproduction.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelle liste de contrôle appliquer avant chaque mise en production ?',
            'items' => [
                'Écrire la procédure de mise en ligne une fois pour toutes : machines concernées, ordre des opérations, vérifications, personne responsable.',
                'Faire contrôler chaque déploiement par une seconde personne ou par un outil qui compare les versions installées.',
                'Afficher ou consigner le numéro de version sur chaque serveur, chaque application et chaque scénario d\'automatisation.',
                'Supprimer le code, les routes d\'API et les scénarios qui ne servent plus, au lieu de les laisser désactivés.',
                'Ne jamais réutiliser un paramètre, un drapeau ou un champ qui avait un autre sens dans une ancienne version.',
                'Retester toute fonction voisine d\'un code modifié, même si elle n\'est plus censée servir.',
                'Transformer les messages d\'erreur automatiques en alertes lues par une personne désignée, avec une réponse attendue.',
                'Poser des plafonds automatiques sur les volumes, les montants et les envois, qui bloquent sans attendre une décision humaine.',
                'Prévoir un interrupteur par fonction sensible et décider à l\'avance qui peut l\'actionner.',
                'Préparer et répéter le retour vers une version connue et testée, avant la mise en production.',
                'Après chaque incident, chercher pourquoi les contrôles ne l\'ont pas arrêté, pas seulement comment le réparer.',
                'Confier le suivi à une maintenance régulière plutôt qu\'à des interventions d\'urgence.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard SALANON aide-t-il une PME à mettre en production sans mauvaise surprise ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Knight Capital n\'a jamais été son client : cette page raconte une histoire publique pour en tirer une méthode. Sur une <a href="/services/application-web-sur-mesure">application web sur mesure</a>, Richard livre avec le code une procédure de mise en ligne écrite, un environnement de test distinct de la production et un numéro de version visible, pour que chacun puisse vérifier ce qui tourne réellement. Les fonctions abandonnées sont supprimées plutôt que cachées, et le retour vers la version précédente est préparé avant chaque mise en ligne, pas pendant la panne.',
                'Les <a href="/services/api-rest-integrations">API et intégrations</a> sont le terrain le plus exposé au « huitième serveur » : applications mobiles anciennes, adresses de notification de paiement, connecteurs vers un ERP ou WhatsApp. Richard commence par l\'inventaire de tout ce qui appelle l\'API, versionne les routes, journalise les échanges et pose des limites sur les volumes. Pour les projets menés en <a href="/services/vibe-coding">vibe coding</a>, il relit et teste le code produit par l\'IA avant toute mise en production et retire ce qui a servi aux essais.',
                'Après la livraison, la <a href="/services/maintenance-support">maintenance et le support</a> prennent le relais : mises à jour planifiées, sauvegardes vérifiées, surveillance des erreurs avec des alertes lues, et analyse de chaque incident pour corriger la cause, pas seulement le symptôme. Les accès administrateur, le code et la documentation restent à votre nom. Vous obtenez une réponse sous 24 heures. Le parcours de Richard est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et d\'autres récits publics sont réunis dans les <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous faire vérifier votre façon de mettre en production avant le prochain incident ?',
            'texte'  => 'Décrivez votre site, votre application ou vos automatisations, qui les met à jour et comment : vous recevez un diagnostic des points faibles du déploiement, de la surveillance et du retour arrière, avec des mesures classées par priorité.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        ['q' => 'Que s\'est-il passé chez Knight Capital le 1er août 2012 ?', 'r' => 'À l\'ouverture de la Bourse de New York, le routeur d\'ordres SMARS de Knight Capital a envoyé des millions d\'ordres non voulus pendant environ 45 minutes. En cause, selon la SEC : un nouveau code installé sur sept serveurs sur huit, et une ancienne fonction défectueuse, Power Peg, réactivée sur le huitième. Knight a perdu plus de 460 millions de dollars.'],
        ['q' => 'Qu\'est-ce que le code « Power Peg » ?', 'r' => 'C\'est une ancienne fonction du routeur SMARS que Knight n\'utilisait plus depuis 2003 mais qu\'elle avait laissée sur ses serveurs de production. En 2005, le compteur qui lui permettait de s\'arrêter une fois un ordre exécuté a été déplacé, sans nouveau test. Rappelée le 1er août 2012 par un indicateur réutilisé, elle envoyait des ordres sans fin.'],
        ['q' => 'Pourquoi un seul serveur sur huit a-t-il suffi à provoquer la perte ?', 'r' => 'Parce qu\'aucun contrôle ne surveillait ce qui sortait du routeur et qu\'aucun plafond de capital n\'était relié automatiquement à l\'envoi des ordres. Le serveur fautif a pu envoyer des ordres en rafale sans être arrêté. Ensuite, en retirant le nouveau code des sept autres serveurs, l\'équipe a réactivé Power Peg sur ceux-là aussi, selon l\'ordonnance de la SEC.'],
        ['q' => 'Combien Knight Capital a-t-elle perdu exactement ?', 'r' => 'Knight a d\'abord annoncé environ 440 millions de dollars avant impôt, le 2 août 2012. Ses résultats du 17 octobre 2012 chiffrent la perte de négociation à 457,6 millions, et son rapport annuel 2012 porte le total à 468,1 millions avec les frais juridiques et de conseil. La SEC écrit « plus de 460 millions ». La perte nette de 2012 atteint 347,1 millions.'],
        ['q' => 'Pourquoi Knight n\'a-t-elle pas arrêté le système plus tôt ?', 'r' => 'La SEC relève que Knight n\'avait aucune procédure de réponse aux incidents ni de consigne indiquant quand déconnecter un système défaillant du marché. L\'équipe technique a cherché la panne pendant que les ordres continuaient de partir. Son outil de suivi des positions n\'émettait aucune alerte automatique et prenait du retard quand les volumes explosaient.'],
        ['q' => 'Qu\'a décidé la SEC en octobre 2013 ?', 'r' => 'Le 16 octobre 2013, la SEC a infligé à Knight Capital Americas un blâme, une injonction de cesser les violations et une amende de 12 millions de dollars, pour manquement à la règle 15c3-5 sur l\'accès au marché et à deux règles sur les ventes à découvert. Knight a dû faire revoir ses procédures par un consultant indépendant. C\'était la première sanction prononcée au titre de cette règle.'],
        ['q' => 'Knight Capital a-t-elle fait faillite ?', 'r' => 'Non, mais elle a perdu son indépendance. Le 6 août 2012, six investisseurs ont apporté 400 millions de dollars en échange d\'environ 73 % du capital après conversion. Le 19 décembre 2012, Knight a accepté de fusionner avec GETCO, pour environ 1,4 milliard de dollars ; la fusion, réalisée le 1er juillet 2013, a donné naissance à KCG Holdings.'],
        ['q' => 'Les clients de Knight ont-ils été touchés ?', 'r' => 'Knight a déclaré le 2 août 2012 que ses clients n\'avaient pas été lésés par les ordres erronés. L\'ordonnance de la SEC note toutefois que les mouvements de cours provoqués ont affecté d\'autres intervenants, certains obtenant des prix moins favorables. Les Bourses ont annulé les transactions sur six titres aux variations extrêmes, selon le New York Times.'],
        ['q' => 'Qu\'est-ce que du code mort, et pourquoi le supprimer ?', 'r' => 'C\'est du code qui ne sert plus mais reste présent dans un logiciel en production : fonction désactivée, page cachée, ancienne route d\'API, vieux scénario d\'automatisation. Tant qu\'il peut être appelé, il peut se déclencher, parfois dans un état que plus personne ne connaît, comme Power Peg. Le supprimer, puis tester, coûte presque toujours moins cher que de le garder.'],
        ['q' => 'Une PME a-t-elle vraiment besoin d\'une procédure de déploiement écrite ?', 'r' => 'Oui, même courte. Une page qui liste les machines ou services à mettre à jour, l\'ordre des opérations, les vérifications après mise en ligne et la façon de revenir en arrière suffit souvent. La SEC estime qu\'une procédure imposant une simple double vérification aurait pu éviter l\'accident de Knight.'],
        ['q' => 'Le vibe coding augmente-t-il ce risque ?', 'r' => 'Il peut l\'augmenter si le code généré par l\'IA part en production sans relecture, sans tests ni procédure de mise en ligne, avec des fonctions d\'essai laissées en place. Le risque ne vient pas de l\'outil mais de l\'absence de contrôle. Relire, tester, supprimer ce qui ne sert plus et surveiller après la mise en ligne restent indispensables.'],
    ],

    'sources' => [
        ['titre' => 'SEC, ordonnance « In the Matter of Knight Capital Americas LLC », Release No. 70694, 16 octobre 2013', 'url' => 'https://www.sec.gov/litigation/admin/2013/34-70694.pdf', 'date' => '2026-10-03'],
        ['titre' => 'SEC, communiqué 2013-222 « SEC Charges Knight Capital With Violations of Market Access Rule », 16 octobre 2013', 'url' => 'https://www.sec.gov/news/press-release/2013-222', 'date' => '2026-10-03'],
        ['titre' => 'SEC, communiqué 2010-210 sur l\'adoption de la règle relative à l\'accès au marché, 3 novembre 2010', 'url' => 'https://www.sec.gov/newsroom/press-releases/2010-210-sec-adopts-new-rule-preventing-unfiltered-market-access', 'date' => '2026-10-03'],
        ['titre' => 'SEC, décision n° 34-67347 approuvant le Retail Liquidity Program du NYSE, 3 juillet 2012', 'url' => 'https://www.sec.gov/files/rules/sro/nyse/2012/34-67347.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, communiqué sur l\'incident du 1er août (formulaire 8-K), 2 août 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512332176/d391111dex991.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, comptes 2011 republiés avec la mention sur la continuité d\'exploitation (formulaire 8-K), 6 août 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512336167/d392288dex991.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, communiqué sur le financement de 400 millions de dollars, 6 août 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512338098/d392396dex991.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, communiqué sur l\'émission sans vote des actionnaires, 6 août 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512338098/d392396dex992.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, résultats du troisième trimestre 2012, 17 octobre 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312512425350/d425406dex991.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group et GETCO, annonce de l\'accord de fusion, 19 décembre 2012', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000089882212000673/ex991.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, rapport annuel 2012 (formulaire 10-K), déposé le 1er mars 2013', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312513087636/d449921d10k.htm', 'date' => '2026-10-03'],
        ['titre' => 'Knight Capital Group, réalisation de la fusion avec GETCO (formulaire 8-K), 1er juillet 2013', 'url' => 'https://www.sec.gov/Archives/edgar/data/1060749/000119312513284968/d565423d8k.htm', 'date' => '2026-10-03'],
        ['titre' => 'The New York Times, « Wave of Volatile Trading Unsettles U.S. Markets », Nathaniel Popper, 1er août 2012', 'url' => 'https://archive.nytimes.com/www.nytimes.com/2012/08/02/business/unusual-volume-roils-early-trading-in-some-stocks.html', 'date' => '2026-10-03'],
        ['titre' => 'The New York Times (DealBook), « Knight Capital Says Trading Glitch Cost It $440 Million », Nathaniel Popper, 2 août 2012', 'url' => 'https://archive.nytimes.com/dealbook.nytimes.com/2012/08/02/knight-capital-says-trading-mishap-cost-it-440-million/', 'date' => '2026-10-03'],
        ['titre' => 'CNBC, « Knight Capital Reaches $400 Million Deal to Save Firm », David Faber et Kate Kelly, 6 août 2012', 'url' => 'https://www.cnbc.com/2012/08/06/knight-capital-reaches-400-million-deal-to-save-firm.html', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['maintenance-support', 'application-web-sur-mesure', 'api-rest-integrations', 'vibe-coding'],
        'comparatifs' => [],
    ],
];
