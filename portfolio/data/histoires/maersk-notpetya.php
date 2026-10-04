<?php
// ============================================================
// data/histoires/maersk-notpetya.php · Histoire externe (non cliente) :
// la cyberattaque NotPetya du 27 juin 2017 chez A.P. Moller-Maersk et la
// reconstruction de son informatique. Faits relevés les 03 et 04/10/2026 dans
// les communiqués de Maersk repris par la presse, l'enquête de Wired (août 2018),
// les déclarations des gouvernements britannique et américain et les sources
// listées dans 'sources'. Les rapports de Maersk (investor.maersk.com) ne
// répondaient pas : leurs chiffres sont cités d'après la presse. Wired bloque
// la lecture automatique : l'enquête a été lue dans sa reprise intégrale par
// Portside et recoupée par recherche. ZDNet France, illisible par l'outil de
// lecture, répond à une requête directe (vérifié le 04/10/2026) : il reste
// cité, recoupé par SecurityWeek et BleepingComputer.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Maersk et NotPetya : l\'armateur sauvé par un serveur resté hors ligne au Ghana',
    'title'   => 'NotPetya chez Maersk : leçons de sauvegarde pour une PME',
    'meta'    => 'En juin 2017, NotPetya a effacé l\'informatique de Maersk en quelques heures. Ce qui a cédé, ce qui a sauvé la reprise, et les leçons pour une PME.',
    'en_bref' => 'Le 27 juin 2017, le logiciel destructeur NotPetya, entré par un seul ordinateur du bureau ukrainien de Maersk où était installé un logiciel de déclaration fiscale, a paralysé en quelques heures les réservations et une partie des terminaux portuaires du premier armateur mondial. Maersk a chiffré l\'attaque entre 250 et 300 millions de dollars dans ses résultats du troisième trimestre 2017 et a dû réinstaller 4 000 serveurs et 45 000 ordinateurs, selon son président. Selon l\'enquête de Wired, la reprise n\'a été possible que grâce à un contrôleur de domaine resté éteint au Ghana après une coupure de courant. La leçon : une copie hors ligne, testée, ne doit jamais dépendre de la chance.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-04',

    'relation' => 'externe',
    'client'   => 'Maersk',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Transport maritime, terminaux portuaires et logistique'],
        ['l' => 'Période', 'v' => 'Juin 2017 à février 2018'],
        ['l' => 'Issue', 'v' => 'Bilan contrasté'],
        ['l' => 'Leçon', 'v' => 'Garder une copie hors ligne testée'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était Maersk en juin 2017, et pourquoi son informatique comptait-elle autant ?',
            'paragraphes' => [
                'En 2017, A.P. Moller-Maersk est un conglomérat danois dont le siège donne sur le port de Copenhague. Selon l\'<a href="https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/">enquête publiée par Wired en août 2018</a>, le groupe compte alors près de 80 000 salariés, 574 bureaux dans 130 pays, 76 terminaux portuaires réunis dans sa filiale APM Terminals et près de 800 navires, soit près d\'un cinquième de la capacité mondiale de transport maritime. Computer Weekly, le 30 juin 2017, retient une autre mesure : le groupe manipule un conteneur sur sept expédiés dans le monde.',
                'Ce métier repose sur l\'information autant que sur les navires. Une réservation se prend en ligne ou par échange de données informatisé (EDI) ; un camion se présente à la grille d\'un terminal, où un lecteur identifie le conteneur et un système attribue sa place dans le parc ; une grue charge ensuite le navire selon un plan qui dépend du fichier de cargaison transmis par le bord. Sans ces fichiers, un terminal ne sait plus quel conteneur sortir d\'une pile de plusieurs étages. Wired décrit ainsi le terminal d\'Elizabeth, dans le New Jersey, qui reçoit environ 3 000 camions un jour normal.',
                'Le groupe compte aussi, à l\'époque, des activités pétrolières et de forage. C\'est un point important pour la suite : le rapport intermédiaire du deuxième trimestre 2017, cité par Computer Weekly le 16 août 2017, précise que six de ses neuf activités, dont toutes celles liées à l\'énergie, ont continué de fonctionner normalement. L\'attaque a frappé le cœur conteneurs du groupe : la ligne maritime Maersk Line, les terminaux d\'APM Terminals et le transitaire Damco.',
                'Ce récit s\'appuie sur les déclarations publiques de Maersk, reprises par la presse quand les pages de l\'entreprise n\'étaient pas accessibles, sur l\'enquête de Wired, construite à partir de témoignages d\'employés et de clients souvent anonymes, et sur les positions officielles des gouvernements britannique et américain. Maersk n\'a pas accepté de commenter officiellement l\'enquête de Wired, qui l\'écrit elle-même. Les faits qui ne reposent que sur ces témoignages sont signalés comme tels.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent Maersk au moment de l\'attaque ?',
            'items' => [
                ['valeur' => '76', 'libelle' => 'Terminaux portuaires exploités par APM Terminals, filiale de Maersk, en 2017', 'source' => 'Wired, août 2018', 'url' => 'https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/'],
                ['valeur' => '1 sur 7', 'libelle' => 'Part des conteneurs expédiés dans le monde manipulés par le groupe, selon Computer Weekly le 30 juin 2017', 'source' => 'Computer Weekly, 30 juin 2017', 'url' => 'https://www.computerweekly.com/news/450421756/Danish-shipping-giant-Maersk-recovering-from-major-Petya-cyber-attack'],
                ['valeur' => '130 pays', 'libelle' => 'Pays où le groupe avait des bureaux, 574 au total, pour près de 80 000 salariés', 'source' => 'Wired, août 2018', 'url' => 'https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/'],
                ['valeur' => '6 sur 9', 'libelle' => 'Activités du groupe restées en fonctionnement normal, dont toutes celles de l\'énergie, selon le rapport du deuxième trimestre 2017', 'source' => 'Computer Weekly, 16 août 2017', 'url' => 'https://www.computerweekly.com/news/450424559/NotPetya-attack-cost-up-to-300m-says-Maersk'],
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Comment l\'attaque, la reprise et l\'attribution se sont-elles enchaînées, date par date ?',
            'items' => [
                ['date' => '14 mars 2017', 'titre' => 'Microsoft corrige la faille', 'texte' => 'Le bulletin de sécurité MS17-010, classé critique, corrige des failles du protocole de partage de fichiers SMBv1 de Windows qui permettent d\'exécuter du code à distance. EternalBlue, l\'outil que NotPetya utilisera trois mois plus tard, exploite l\'une d\'elles.'],
                ['date' => '14 avril 2017', 'titre' => 'Première mise à jour piégée de M.E.Doc', 'texte' => 'Selon l\'analyse publiée par l\'éditeur de sécurité ESET le 4 juillet 2017, une porte dérobée est insérée dans un module du logiciel de déclaration fiscale ukrainien M.E.Doc. Deux autres mises à jour piégées suivent, le 15 mai et le 22 juin 2017.'],
                ['date' => '27 juin 2017', 'titre' => 'NotPetya se propage', 'texte' => 'La veille de la fête de la Constitution ukrainienne, le logiciel destructeur part des serveurs de mise à jour de M.E.Doc. Chez Maersk, il entre par un ordinateur du bureau d\'Odessa sur lequel un responsable financier avait fait installer M.E.Doc, selon Wired. Déconnecter le réseau mondial prend plus de deux heures.'],
                ['date' => '28 et 29 juin 2017', 'titre' => 'Les réservations reprennent par des voies de secours', 'texte' => 'Maersk Line accepte de nouveau des réservations par la plateforme INTTRA, puis, dans sa mise à jour du 29 juin au soir, par trois canaux : INTTRA, l\'EDI et un formulaire en ligne simplifié et isolé. Le groupe écrit qu\'il est trop tôt pour fixer une date de retour à la normale.'],
                ['date' => '3 au 9 juillet 2017', 'titre' => 'Retour progressif à la normale', 'texte' => 'Selon le rapport du deuxième trimestre, Maersk Line, Damco et APM Terminals retrouvent un fonctionnement plus normal au cours de cette semaine. Les utilisateurs et les applications sont rétablis méthodiquement sur 500 sites.'],
                ['date' => '16 août 2017', 'titre' => 'Premier chiffrage public', 'texte' => 'Le directeur général Søren Skou annonce un impact négatif de 200 à 300 millions de dollars sur les résultats, concentré sur le troisième trimestre. Le groupe affirme qu\'aucune donnée n\'a fuité vers des tiers.'],
                ['date' => '7 novembre 2017', 'titre' => 'Le coût est resserré', 'texte' => 'Dans ses résultats du troisième trimestre, Maersk chiffre l\'attaque entre 250 et 300 millions de dollars, l\'essentiel en juillet et en août et pour Maersk Line, selon Logistics Manager.'],
                ['date' => '24 janvier 2018', 'titre' => 'Le président raconte la reconstruction à Davos', 'texte' => 'Au Forum économique mondial, Jim Hagemann Snabe décrit la réinstallation de 4 000 serveurs, 45 000 ordinateurs et 2 500 applications en dix jours, et une baisse de volume limitée à 20 %.'],
                ['date' => '15 février 2018', 'titre' => 'Londres et Washington accusent l\'armée russe', 'texte' => 'Le gouvernement britannique juge l\'armée russe presque certainement responsable de NotPetya ; la Maison-Blanche le qualifie le même jour de cyberattaque la plus destructrice et la plus coûteuse de l\'histoire. La Russie dément.'],
                ['date' => '19 octobre 2020', 'titre' => 'Une unité du renseignement militaire est nommée', 'texte' => 'Le gouvernement britannique désigne l\'unité 74455 du GRU, le renseignement militaire russe, et relève que le ministère américain de la Justice a annoncé des poursuites pénales contre des officiers de ce service.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment un logiciel de déclaration fiscale ukrainien a-t-il arrêté un armateur danois ?',
            'paragraphes' => [
                'M.E.Doc est un logiciel de comptabilité et de déclaration fiscale très répandu en Ukraine ; Wired le compare aux logiciels grand public de déclaration d\'impôts américains. Selon l\'analyse publiée par ESET le 4 juillet 2017, un module légitime du logiciel a été modifié pour contenir une porte dérobée, activée lors des vérifications de mise à jour. Les chercheurs jugent très improbable que les attaquants aient pu le faire sans accès au code source. La porte dérobée relevait notamment le code d\'identification de l\'entreprise utilisatrice, ce qui permettait de savoir exactement quelle organisation était infectée.',
                'Le 27 juin 2017, cinq jours après la dernière mise à jour piégée, cette porte dérobée sert à lancer NotPetya. Le logiciel affiche une demande de rançon de 300 dollars en bitcoins, mais l\'alerte publiée le 1er juillet 2017 par l\'agence américaine de cybersécurité, aujourd\'hui appelée CISA, relève qu\'il se comporte davantage comme un programme destructeur : il modifie la zone de démarrage du disque pour chiffrer la table des fichiers, puis redémarre la machine, devenue inutilisable. Wired résume : aucune clé de déchiffrement n\'existait, et payer ne servait à rien.',
                'Chez Maersk, une seule machine suffit. D\'après Wired, un responsable financier du bureau d\'Odessa, port ukrainien de la mer Noire, avait demandé aux administrateurs d\'installer M.E.Doc sur un seul ordinateur. Cela a suffi. Une fois dans le réseau, NotPetya ne s\'arrête pas aux frontières de l\'Ukraine, parce que le réseau du groupe est mondial : Wired rapporte que 17 des 76 terminaux sont touchés, de Los Angeles à Algésiras, Rotterdam et Bombay, avec des grilles fermées, des grues à l\'arrêt et des dizaines de milliers de camions refoulés.',
                'Le 27 juin, à Copenhague, des employés se présentent au guichet d\'assistance avec des écrans noirs ou rouges. En une demi-heure, selon Wired, des techniciens courent dans les couloirs pour faire éteindre les ordinateurs et débrancher les machines en pleine réunion. Déconnecter tout le réseau mondial prend plus de deux heures ; même les téléphones de bureau, qui passent par le réseau, deviennent inutilisables. Dans l\'après-midi, une partie du personnel est renvoyée chez elle, faute d\'outil pour travailler.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles faiblesses ont transformé une infection locale en panne mondiale ?',
            'intro' => 'L\'alerte TA17-181A de l\'agence américaine de cybersécurité et l\'enquête de Wired permettent de reconstituer le mécanisme. Aucune de ces faiblesses n\'était propre à Maersk ; c\'est leur addition qui a été fatale.',
            'items' => [
                ['titre' => 'Un logiciel tiers qui se met à jour seul', 'texte' => 'Le point d\'entrée n\'était ni un courriel piégé ni une erreur d\'utilisateur, mais la mise à jour automatique d\'un logiciel métier légitime, fourni par un éditeur de confiance. Aucun antivirus ne pouvait la distinguer d\'une mise à jour ordinaire, puisque c\'était l\'éditeur lui-même qui la distribuait.'],
                ['titre' => 'Des correctifs absents sur une partie du parc', 'texte' => 'NotPetya utilisait EternalBlue et EternalRomance, deux outils visant le protocole SMBv1 de Windows, corrigé par Microsoft le 14 mars 2017. Selon des employés interrogés par Wired, certains serveurs de Maersk tournaient encore sous Windows 2000, un système que Microsoft ne prenait plus en charge et ne corrigeait plus.'],
                ['titre' => 'Des mots de passe récupérables en mémoire', 'texte' => 'NotPetya embarquait une version modifiée de Mimikatz, qui lit les identifiants restés dans la mémoire de Windows. Le chercheur Benjamin Delpy, auteur de l\'outil, l\'explique à Wired : on infecte les machines non corrigées, puis on se sert des mots de passe volés pour entrer dans celles qui le sont.'],
                ['titre' => 'Des comptes d\'administration trop puissants', 'texte' => 'Un compte d\'administrateur ouvert sur une machine infectée donne au logiciel les clés de tout ce que ce compte gère. Les outils d\'administration de Windows, PsExec et WMI, cités par l\'alerte américaine, servaient ensuite à se propager comme le ferait un technicien légitime.'],
                ['titre' => 'Un réseau à plat, sans cloisons', 'texte' => 'D\'après Wired, un groupe de responsables informatiques avait signalé en 2016 des correctifs mal appliqués, des systèmes obsolètes et surtout une segmentation insuffisante du réseau, qui permettrait à un programme malveillant de s\'étendre bien au-delà de son point d\'entrée. Le chantier de refonte avait été approuvé et budgété, mais jamais mené.'],
                ['titre' => 'Une sauvegarde pensée pour la panne, pas pour la destruction', 'texte' => 'Les quelque 150 contrôleurs de domaine de Maersk, les serveurs qui gèrent les comptes et les droits d\'accès, se synchronisaient entre eux : chacun servait de copie aux autres. Wired souligne que cette stratégie ne prévoyait pas le cas où tous seraient effacés en même temps, ce qui est précisément arrivé.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Maersk a-t-il remis son informatique sur pied en dix jours ?',
            'paragraphes' => [
                'La reconstruction est pilotée depuis Maidenhead, à l\'ouest de Londres, où se trouvait la direction des services d\'infrastructure du groupe. Selon Wired, deux étages d\'un immeuble y deviennent un centre d\'opérations ouvert jour et nuit, géré avec le cabinet Deloitte : jusqu\'à 200 consultants et 400 employés de Maersk y travaillent en même temps. Tout le matériel d\'avant l\'attaque est confisqué, par crainte d\'une nouvelle infection, et des employés achètent dans les magasins de la ville des ordinateurs portables neufs et des modems mobiles prépayés.',
                'Les équipes retrouvent rapidement des sauvegardes de presque tous les serveurs, datées de trois à sept jours avant l\'attaque. Il leur manque l\'essentiel : une copie des contrôleurs de domaine, sans laquelle aucun utilisateur ne peut s\'authentifier et aucun système ne peut être rebranché. Un employé cité par Wired résume la situation : sans eux, on ne peut rien récupérer. Les administrateurs appellent alors des centaines de collègues dans les centres de données du monde entier pour en trouver un seul intact.',
                'Il est au Ghana. Avant l\'attaque, une coupure de courant avait mis ce serveur hors ligne, et il n\'avait pas été reconnecté : il contenait la seule copie connue de l\'annuaire épargnée par NotPetya. La connexion du bureau ghanéen est trop lente pour transférer plusieurs centaines de gigaoctets vers le Royaume-Uni, et aucun employé sur place n\'a de visa britannique. Selon Wired, un salarié prend donc l\'avion du Ghana vers le Nigeria, où il remet le disque dur à un collègue qui l\'apporte à l\'aéroport d\'Heathrow.',
                'Le reste suit, à un rythme que le président du groupe qualifiera d\'héroïque. D\'après le rapport du deuxième trimestre, l\'attaque est contenue dès le mercredi 28 juin et le plan de reprise technique est aussitôt engagé ; les clients existants peuvent de nouveau réserver au bout de deux jours, selon CNBC. Environ deux semaines après l\'attaque, selon Wired, le siège de Copenhague transforme sa cantine en chaîne de réinstallation où les ordinateurs, alignés par vingt, reçoivent une image neuve de Windows. Tout ce que les salariés avaient stocké sur leur poste est perdu.',
                'Pendant ce temps, l\'activité continue à la main. Wired rapporte des commandes prises par des comptes Gmail personnels, par WhatsApp et dans des tableurs Excel ; un client raconte avoir réservé 500 conteneurs par WhatsApp. Jim Hagemann Snabe dira à Davos que le groupe a traité manuellement 80 % de son volume habituel. Le travail de fond n\'est pas fini en dix jours pour autant : certains membres de l\'équipe de Maidenhead ont travaillé jour et nuit pendant près de deux mois.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui reste débattu ?',
            'texte' => 'Sont établis par des sources publiques : la date de l\'attaque, le rôle des mises à jour de M.E.Doc (ESET), le coût annoncé par Maersk (de 200 à 300 millions de dollars en août 2017, puis de 250 à 300 millions en novembre) et l\'attribution à l\'armée russe par Londres et Washington en février 2018, que la Russie conteste. Reposent sur des témoignages anonymes recueillis par Wired : l\'histoire du contrôleur de domaine ghanéen, les serveurs sous Windows 2000 et le projet de refonte de 2016 resté sans suite. Maersk a écrit en août 2017 que mises à jour et antivirus n\'avaient pas suffi ; Wired décrit au contraire un parc mal corrigé.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quelles conséquences mesurables l\'attaque a-t-elle eues pour Maersk ?',
            'items' => [
                ['valeur' => '250 à 300 M$', 'libelle' => 'Coût de l\'attaque annoncé par Maersk avec ses résultats du troisième trimestre, le 7 novembre 2017', 'source' => 'Logistics Manager, 7 novembre 2017', 'url' => 'https://www.logisticsmanager.com/cyber-attack-costs-maersk-250m/'],
                ['valeur' => '4 000 serveurs', 'libelle' => 'Réinstallés avec 45 000 ordinateurs et 2 500 applications, en dix jours, selon le président de Maersk le 24 janvier 2018', 'source' => 'BleepingComputer, 25 janvier 2018', 'url' => 'https://www.bleepingcomputer.com/news/security/maersk-reinstalled-45-000-pcs-and-4-000-servers-to-recover-from-notpetya-attack/'],
                ['valeur' => '- 20 %', 'libelle' => 'Baisse de volume pendant la panne, le reste étant traité à la main, selon Jim Hagemann Snabe à Davos en janvier 2018', 'source' => 'ZDNet France, 29 janvier 2018', 'url' => 'https://www.zdnet.fr/actualites/les-10-nuits-en-enfer-de-maersk-pour-reinstaller-4000-serveurs-et-45000-pc-39863304.htm'],
                ['valeur' => '- 2,5 %', 'libelle' => 'Volumes de Maersk Line au troisième trimestre 2017, avec un coût unitaire en hausse de 3,9 %, attribués aux mesures de reprise', 'source' => 'Logistics Manager, 7 novembre 2017', 'url' => 'https://www.logisticsmanager.com/cyber-attack-costs-maersk-250m/'],
                ['valeur' => '17 sur 76', 'libelle' => 'Terminaux d\'APM Terminals bloqués le 27 juin 2017, de Los Angeles à Bombay', 'source' => 'Wired, août 2018', 'url' => 'https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/'],
                ['valeur' => '150 postes', 'libelle' => 'Suppressions envisagées en 2020 au centre de Maidenhead qui avait reconstruit l\'informatique du groupe', 'source' => 'The Register, 3 mars 2020', 'url' => 'https://www.theregister.com/2020/03/03/maersk_redundancies_maidenhead_notpetya_rescuers/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que mesurent ces chiffres, et que laissent-ils de côté ?',
            'paragraphes' => [
                'Le 16 août 2017, en présentant ses résultats du deuxième trimestre, Søren Skou explique que l\'attaque a surtout touché Maersk Line, APM Terminals et Damco, que les volumes ont souffert pendant quelques semaines de juillet et que l\'impact se situera entre 200 et 300 millions de dollars, d\'après CNBC. Le 7 novembre, avec les résultats du troisième trimestre, la fourchette devient 250 à 300 millions, l\'essentiel du coût tombant en juillet et en août. Le groupe maintient pourtant ses prévisions annuelles, portées par la hausse des taux de fret.',
                'Ces montants recouvrent la perte d\'activité et la reconstruction, mais pas tout le reste. Wired rapporte que Maersk a remboursé de nombreux clients pour le stockage ou le réacheminement de marchandises bloquées, l\'un d\'eux évoquant un chèque d\'environ un million de dollars pour un avion affrété en urgence. Les transporteurs routiers du port de Newark, eux, n\'ont pas été indemnisés : le président de leur association estime à plusieurs dizaines de millions de dollars leurs pertes non remboursées. Le coût pour les chaînes d\'approvisionnement de toute la planète n\'a jamais été chiffré.',
                'Il y a aussi ce que les tableaux ne montrent pas. Un transitaire raconte à Wired n\'avoir reçu, le premier jour, qu\'un seul courriel incompréhensible, envoyé depuis le compte Gmail d\'un employé débordé, et que certains de ses conteneurs sont restés égarés trois mois dans des ports. Les salariés ont perdu tout ce qu\'ils avaient enregistré sur leur ordinateur. Pour une entreprise dont le métier est la fiabilité, la confiance des clients a été mise à l\'épreuve, même si Søren Skou a souligné, d\'après Computer Weekly, l\'aide reçue de ces mêmes clients.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Maersk était-il un cas isolé parmi les victimes de NotPetya ?',
            'legende' => 'Pertes déclarées par quelques grandes victimes internationales, telles que les rapporte Wired en août 2018, complétées par des procédures d\'assurance rapportées par la presse. Montants en dollars, non comparables entre eux, car chaque entreprise a calculé les siens à sa manière.',
            'entetes' => ['Entreprise', 'Activité', 'Perte rapportée', 'Ce qui a suivi'],
            'lignes'  => [
                ['Merck', 'Pharmacie', '870 millions de dollars, selon Wired', 'Plus de 40 000 ordinateurs touchés ; une cour d\'appel du New Jersey a refusé aux assureurs l\'exclusion pour fait de guerre, selon The Register le 3 mai 2023'],
                ['FedEx, par sa filiale TNT Express', 'Livraison de colis', '400 millions de dollars, selon Wired', 'Des mois pour récupérer certaines données, d\'après Wired'],
                ['Saint-Gobain', 'Matériaux de construction', '384 millions de dollars, selon Wired','Groupe français cité parmi les victimes internationales'],
                ['Mondelēz', 'Agroalimentaire', '188 millions de dollars, selon Wired', '1 700 serveurs et 24 000 portables endommagés ; litige de plus de 100 millions de dollars avec son assureur, réglé à l\'amiable en 2022, selon Cybersecurity Dive'],
                ['Reckitt Benckiser', 'Produits de grande consommation', '129 millions de dollars, selon Wired', 'Une perte de chiffre d\'affaires de 100 millions de livres annoncée dès l\'été 2017, selon SiliconANGLE le 16 août 2017'],
                ['Maersk', 'Transport maritime et ports', '250 à 300 millions de dollars, selon le groupe', 'Réinstallation complète du parc ; sécurité érigée en priorité de la direction'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le montant total des dégâts reste-t-il discuté ?',
            'paragraphes' => [
                'Les estimations globales divergent fortement. Wired cite une évaluation de la Maison-Blanche, confirmée par l\'ancien conseiller Tom Bossert, qui dépasse 10 milliards de dollars de dégâts. The Guardian, le 15 février 2018, évoquait de son côté un coût estimé à plus de 1,2 milliard de dollars pour les entreprises. L\'écart tient à ce que l\'on compte : les seules pertes déclarées par les sociétés cotées, ou aussi celles des victimes qui n\'ont rien publié, ce que Wired résume par des pertes comptées en secret.',
                'L\'autre débat porte sur l\'intention. Jim Hagemann Snabe a présenté Maersk comme un dommage collatéral, probablement d\'une attaque d\'État, selon BleepingComputer. Craig Williams, de Cisco Talos, soutient au contraire dans Wired que les dégâts internationaux étaient voulus, pour punir quiconque travaillait en Ukraine. Cette question a eu une conséquence très concrète pour les assurés : Mondelēz et Merck se sont heurtés à des assureurs qui invoquaient l\'exclusion pour fait de guerre. Pour une PME, la leçon est simple : lire les exclusions de son contrat avant l\'incident, pas après.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui a été fait, et qu\'est-ce qui aurait limité les dégâts ?',
            'options'  => ['Ce qui a été fait chez Maersk avant le 27 juin 2017', 'Ce qui aurait limité les dégâts'],
            'criteres' => [
                ['critere' => 'Correctifs de sécurité', 'valeurs' => ['Parc hétérogène, avec des serveurs sous Windows 2000 selon des employés cités par Wired', 'Appliquer MS17-010 dès mars 2017, retirer ou isoler les systèmes qui ne reçoivent plus de correctifs, désactiver SMBv1 comme le recommande l\'alerte américaine']],
                ['critere' => 'Logiciels tiers', 'valeurs' => ['Un logiciel fiscal local installé à la demande d\'un service, sur une machine reliée au réseau mondial', 'Recenser les logiciels installés, isoler ceux qui se mettent à jour depuis l\'extérieur sur un poste ou un segment dédié']],
                ['critere' => 'Cloisonnement du réseau', 'valeurs' => ['Segmentation jugée insuffisante dès 2016 ; refonte budgétée mais non menée', 'Séparer les pays, les métiers et les serveurs critiques pour qu\'une infection locale reste locale']],
                ['critere' => 'Comptes d\'administration', 'valeurs' => ['Identifiants réutilisables d\'une machine à l\'autre, exploités par Mimikatz', 'Appliquer le moindre privilège, séparer les comptes d\'administration du travail courant, ajouter un second facteur']],
                ['critere' => 'Sauvegarde de l\'annuaire', 'valeurs' => ['Contrôleurs de domaine synchronisés entre eux, sans copie isolée ; un seul rescapé par hasard', 'Une sauvegarde hors ligne de l\'annuaire et des serveurs critiques, conservée à part et restaurée à blanc régulièrement']],
                ['critere' => 'Gouvernance', 'valeurs' => ['Projet de sécurité absent des objectifs des dirigeants informatiques, selon Wired', 'Faire de la sécurité un objectif suivi par la direction, avec un budget et une échéance']],
            ],
            'verdict'  => 'Aucune mesure isolée n\'aurait suffi contre une attaque passée par un éditeur de confiance ; ensemble, cloisonnement, correctifs, comptes limités et copie hors ligne auraient réduit l\'étendue de la panne et le temps de reprise.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Qu\'est-ce qui a fonctionné pendant la crise ?',
            'intro' => 'L\'histoire de Maersk n\'est pas seulement celle d\'une défaillance : la reprise a été rapide pour une panne de cette ampleur, et plusieurs décisions méritent d\'être retenues.',
            'items' => [
                ['titre' => 'Couper vite et partout', 'texte' => 'Le réseau mondial a été déconnecté en plus de deux heures, selon Wired, et le rapport du deuxième trimestre indique que le programme a été contenu aux activités conteneurs. Les six activités restantes, dont l\'énergie, ont continué de fonctionner normalement.'],
                ['titre' => 'Repartir sur du matériel propre', 'texte' => 'Tout l\'ancien matériel a été mis de côté, sous peine de sanction pour qui l\'utiliserait, et les postes ont été réinstallés à partir d\'images neuves. Rebrancher trop tôt une machine infectée aurait relancé l\'épidémie.'],
                ['titre' => 'Ouvrir des canaux de secours isolés', 'texte' => 'Dès le 28 juin, Maersk Line accepte des réservations par la plateforme INTTRA, puis par l\'EDI et un formulaire en ligne simplifié, présenté comme isolé de ses systèmes et vérifié par la sécurité, d\'après les mises à jour publiées par le groupe et reprises par gCaptain.'],
                ['titre' => 'Informer régulièrement', 'texte' => 'Le groupe publie au moins une mise à jour quotidienne de l\'état de ses terminaux et de ses réservations, et précise ce qui reste sûr : les réservations antérieures au 27 juin à 8 heures sont conservées, inutile de les refaire. Le premier jour, en revanche, des clients sont restés sans réponse.'],
                ['titre' => 'Continuer à la main', 'texte' => 'Papier, WhatsApp, Gmail et tableurs ont permis de traiter 80 % du volume habituel, selon le président du groupe. Cela suppose des équipes qui connaissent leur métier sans l\'écran, et des clients prêts à coopérer.'],
                ['titre' => 'Tirer les leçons au plus haut niveau', 'texte' => 'À Davos, Jim Hagemann Snabe a reconnu : « Nous étions fondamentalement moyens en matière de cybersécurité », selon la traduction de ZDNet France, et annoncé l\'ambition d\'en faire un avantage concurrentiel. Wired rapporte ensuite le déploiement de l\'authentification à plusieurs facteurs et le passage à Windows 10.'],
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle leçon retenir en une phrase ?',
            'texte' => 'Une entreprise ne se relève d\'une attaque destructrice que si elle possède, quelque part hors de portée de son réseau, une copie récente et déjà restaurée une fois de ce qui la fait fonctionner ; chez Maersk, cette copie existait au Ghana par accident, chez vous elle doit exister par décision.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une PME de Cotonou, d\'Abidjan ou de Lyon est-elle concernée par une attaque visant un géant ?',
            'paragraphes' => [
                'Une PME n\'a ni 76 terminaux ni 4 000 serveurs, mais elle a souvent les mêmes faiblesses en plus petit : un serveur de fichiers ou un ERP sur lequel tout repose, des postes sous des versions de Windows qui ne reçoivent plus de correctifs, un compte administrateur partagé par toute l\'équipe, et une sauvegarde branchée en permanence sur le réseau qu\'elle est censée protéger. Un programme destructeur qui touche ce réseau détruit en même temps l\'original et la copie.',
                'NotPetya n\'a pas choisi Maersk : le groupe a été touché parce qu\'un de ses bureaux utilisait un logiciel compromis. C\'est le scénario qui menace une PME, qui sera rarement visée nommément. Selon le rapport d\'Interpol sur les cybermenaces en Afrique publié le 23 juin 2025, les détections de rançongiciels ont augmenté en 2024, avec 17 849 détections en Afrique du Sud et 12 281 en Égypte d\'après les données de Trend Micro, et la cybercriminalité représente plus de 30 % des infractions signalées en Afrique de l\'Ouest et de l\'Est.',
                'Le même rapport souligne que 95 % des pays africains interrogés manquent de formation, de moyens ou d\'outils spécialisés pour faire appliquer leurs lois sur la cybercriminalité, et que seuls 30 % disposent d\'un système de signalement des incidents. Une entreprise victime à Lomé ou à Douala doit donc s\'attendre à se relever d\'abord avec ses propres moyens et ceux de son prestataire. Le détail de l\'histoire de Maersk compte ici : le serveur rescapé se trouvait dans un bureau d\'Afrique de l\'Ouest, sauvé par une coupure de courant.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que nous apprend M.E.Doc sur la dépendance aux logiciels comptables et fiscaux ?',
            'paragraphes' => [
                'M.E.Doc était un outil ordinaire, installé parce qu\'il servait aux déclarations fiscales ukrainiennes. Les PME d\'Afrique francophone dépendent elles aussi de logiciels imposés ou très répandus. Au Bénin, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a>, publiée le 27 février 2020, impose aux assujettis à la TVA d\'émettre leurs factures avec une machine électronique certifiée ou un logiciel validé par la Direction générale des impôts, sous peine d\'une amende égale à dix fois le montant de la facture. Ces outils sont reliés à l\'administration et se mettent à jour.',
                'Il ne s\'agit pas de soupçonner ces outils, mais d\'en tirer une règle d\'architecture : tout logiciel qui reçoit des mises à jour de l\'extérieur est un point d\'entrée possible, y compris le logiciel comptable, l\'ERP Odoo ou Dolibarr, ses modules tiers, le logiciel de paie ou l\'outil de facturation. Ces programmes tournent souvent avec des droits élevés, sur le poste du comptable ou du gérant, au cœur des données les plus sensibles de l\'entreprise.',
                'La dépendance est aussi opérationnelle. Quand le logiciel comptable s\'arrête, l\'entreprise ne facture plus, ne paie plus ses fournisseurs et ne peut plus prouver ce qu\'on lui doit. Il faut donc savoir où sont ses données, sous quel format on peut les exporter, comment reconstruire le logiciel sur une machine neuve, et combien de temps l\'entreprise peut tenir avec des factures manuelles numérotées. Chez Maersk, les équipes ont tenu à la main ; dans une PME, cette procédure doit être écrite avant d\'en avoir besoin.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux d\'alerte doivent faire réagir un dirigeant de PME ?',
            'intro' => 'Chacun de ces signaux correspond à l\'une des faiblesses qui ont aggravé la panne de Maersk. Un seul suffit à justifier un état des lieux.',
            'items' => [
                ['titre' => 'Personne ne sait quand la dernière restauration a été testée', 'texte' => 'Une sauvegarde qui n\'a jamais été restaurée est une hypothèse, pas une garantie. Le site public français Cybermalveillance.gouv.fr recommande de vérifier régulièrement que la sauvegarde fonctionne, par exemple en la recopiant dans le système d\'origine.'],
                ['titre' => 'Le disque de sauvegarde reste branché en permanence', 'texte' => 'La même page conseille de déconnecter le support de sauvegarde de l\'ordinateur ou du réseau quand on ne s\'en sert pas. Une copie accessible depuis le réseau sera chiffrée ou effacée avec le reste.'],
                ['titre' => 'Des postes ou un serveur sous un Windows en fin de support', 'texte' => 'Un système qui ne reçoit plus de correctifs reste ouvert aux failles connues, comme celles du bulletin MS17-010 exploitées par NotPetya trois mois après leur correction.'],
                ['titre' => 'Un seul mot de passe administrateur pour tout le monde', 'texte' => 'Si le gérant, le comptable et le stagiaire utilisent le même compte d\'administration, un seul poste infecté donne la main sur tous les autres.'],
                ['titre' => 'Un logiciel installé « en urgence » sur un poste quelconque', 'texte' => 'C\'est exactement la porte d\'entrée de Maersk à Odessa. Tout logiciel métier doit être recensé, avec la personne qui le gère, sa source et son mode de mise à jour.'],
                ['titre' => 'Aucune procédure écrite pour travailler sans informatique', 'texte' => 'Sans liste des contacts clés imprimée, sans carnet de factures de secours et sans répartition des rôles, la première journée de panne se passe à improviser.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Agir maintenant ou après l\'incident : qu\'est-ce que cela change pour une PME ?',
            'legende' => 'Comparaison qualitative, sans montant : les coûts dépendent de la taille du parc, des logiciels et des tarifs du prestataire. Elle reprend les postes de dépense observés chez Maersk.',
            'entetes' => ['Poste', 'Action à temps', 'Action après une attaque destructrice'],
            'lignes'  => [
                ['Sauvegardes', 'Un support hors ligne et un service en ligne, un test de restauration planifié', 'Données perdues depuis la dernière copie saine, s\'il en existe une ; ressaisie manuelle des pièces'],
                ['Postes et serveurs', 'Mises à jour régulières, remplacement planifié des systèmes en fin de support', 'Réinstallation de tout le parc en urgence, achat de matériel au prix du jour, comme les portables achetés en magasin à Maidenhead'],
                ['Logiciel comptable et ERP', 'Procédure de réinstallation écrite, exports réguliers, droits limités', 'Facturation arrêtée, relances impossibles, retard de déclaration fiscale'],
                ['Comptes d\'accès', 'Comptes nominatifs, administration séparée, second facteur', 'Tous les mots de passe à changer, accès à reconstruire un par un'],
                ['Activité', 'Procédure dégradée connue des équipes', 'Clients sans réponse, commandes perdues, pénalités ou dédommagements, comme ceux versés par Maersk'],
                ['Temps de direction', 'Quelques réunions de préparation par an', 'Des jours ou des semaines consacrés à la crise au lieu des clients'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble ce risque selon le secteur de votre entreprise ?',
            'items' => [
                ['secteur' => 'Transit et logistique', 'probleme' => 'Un transitaire de Cotonou ou de Lomé suit ses dossiers, ses déclarations et sa facturation sur un même serveur au bureau.', 'solution' => 'Copie quotidienne vers un stockage en ligne, copie hebdomadaire sur un disque débranché, et liste imprimée des dossiers en cours pour continuer les déclarations à la main pendant la reconstruction.'],
                ['secteur' => 'Commerce et distribution', 'probleme' => 'Une chaîne de boutiques d\'Abidjan encaisse avec une caisse reliée à l\'ERP, qui gère aussi le stock et les achats.', 'solution' => 'Caisses capables de fonctionner seules quelques heures, ERP sauvegardé hors du réseau et restauré à blanc chaque trimestre, comptes vendeurs sans droits d\'administration.'],
                ['secteur' => 'Cabinet comptable ou d\'expertise', 'probleme' => 'Un cabinet de Dakar détient les dossiers de dizaines de clients et plusieurs logiciels fiscaux qui se mettent à jour seuls.', 'solution' => 'Postes fiscaux isolés du reste du réseau, sauvegardes chiffrées par client, et plan de reprise qui fixe l\'ordre de redémarrage avant les échéances déclaratives.'],
                ['secteur' => 'Industrie et transformation', 'probleme' => 'Une unité de transformation de Douala pilote sa production avec un vieux poste sous un Windows qui ne reçoit plus de correctifs.', 'solution' => 'Isoler ce poste sur un réseau séparé sans accès à Internet, prévoir son remplacement, et garder une image disque prête à être réinstallée.'],
                ['secteur' => 'PME de services en Europe', 'probleme' => 'Une agence lyonnaise travaille en ligne, mais toutes ses sauvegardes sont synchronisées automatiquement avec les mêmes identifiants.', 'solution' => 'Ajouter une copie que les comptes ordinaires ne peuvent ni modifier ni effacer, activer le second facteur et documenter la restauration.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelle liste de contrôle suivre pour qu\'un programme destructeur ne paralyse pas votre entreprise ?',
            'items' => [
                'Tenir à jour l\'inventaire des postes, des serveurs et des logiciels installés, avec pour chacun la personne qui le gère, sa source et son mode de mise à jour, logiciels fiscaux et comptables compris.',
                'Appliquer les correctifs de sécurité de Windows et des logiciels métier chaque mois, et sans attendre quand l\'éditeur les classe critiques, comme le bulletin MS17-010 de mars 2017.',
                'Remplacer, ou à défaut isoler sur un réseau séparé sans accès à Internet, tout poste ou serveur dont le système ne reçoit plus de correctifs.',
                'Désactiver les protocoles anciens qui ne servent plus, à commencer par SMBv1, comme le recommandent Microsoft et l\'agence américaine de cybersécurité.',
                'Découper le réseau en zones (postes, serveurs, comptabilité, production, invités) pour qu\'une infection dans l\'une n\'atteigne pas les autres.',
                'Donner à chaque personne un compte nominatif sans droits d\'administration, réserver les comptes d\'administration aux seules tâches d\'administration et les protéger par un second facteur.',
                'Installer les logiciels qui se mettent à jour depuis l\'extérieur sur des postes dédiés, avec le moins de droits possible sur le reste du réseau.',
                'Garder au moins une copie des données, de l\'ERP et de l\'annuaire des comptes hors ligne, ou dans un espace que les comptes ordinaires ne peuvent ni modifier ni effacer, en plus des copies synchronisées.',
                'Conserver une copie dans un autre lieu que les originaux et débrancher le support après chaque sauvegarde, comme le recommande Cybermalveillance.gouv.fr.',
                'Restaurer réellement une sauvegarde sur une machine vierge à intervalles réguliers, noter le temps nécessaire et corriger ce qui a bloqué.',
                'Écrire le plan de reprise : qui décide de couper le réseau, dans quel ordre redémarrer les systèmes, qui prévient les clients, les fournisseurs et l\'assureur.',
                'Imprimer la liste des contacts clés et des dossiers en cours, et préparer un carnet de factures de secours numérotées pour travailler sans informatique.',
                'Relire avec l\'assureur les exclusions du contrat, en particulier celles qui visent les actes de guerre ou les attaques attribuées à un État.',
                'Après chaque exercice ou incident, mettre le plan à jour et refaire le test, au lieu de classer le dossier.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard SALANON aide-t-il une PME à se préparer à une attaque destructrice ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Maersk n\'a jamais été son client : cette page raconte une histoire publique pour en tirer une méthode. Le point de départ est souvent un <a href="/services/audit-etude-de-projet">audit et une étude de projet</a> : l\'inventaire de ce qui fait tourner l\'entreprise, l\'endroit où se trouvent les données, les comptes qui y ont accès, les logiciels qui se mettent à jour seuls et la façon dont chaque outil serait remis en service sur une machine neuve. Le rapport classe les faiblesses par gravité et distingue ce qui doit être corrigé tout de suite de ce qui peut être planifié, que vous confiiez ensuite le travail à Richard ou à un autre prestataire.',
                'La <a href="/services/maintenance-support">maintenance et le support</a> transforment ensuite la liste de contrôle en routine : mises à jour appliquées chaque mois, correctifs critiques posés dès leur publication, sauvegardes envoyées hors du serveur, test de restauration complet consigné dans un compte rendu daté, revue des accès et suppression des comptes administrateurs inutiles. Pour un ERP Odoo ou Dolibarr, la sauvegarde comprend la base et les pièces jointes, sans lesquelles rien ne redémarre. Les accès, le code et la documentation restent à votre nom, pour que la reprise ne dépende jamais d\'une seule personne.',
                'Quand l\'état des lieux révèle une entreprise qui ne tient que par un serveur ou par une personne, le sujet dépasse la technique. Le <a href="/services/consultant-digitalisation">conseil en digitalisation</a> aide le dirigeant à décider quoi protéger en priorité, avec quel budget et quels prestataires, et à rédiger le cahier des charges d\'un hébergement ou d\'une sauvegarde externalisée. La <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> remet à plat les processus, de la facturation aux encaissements, pour qu\'ils puissent continuer en mode dégradé : exports réguliers, procédures écrites et équipes formées à les appliquer.',
                'Vous obtenez une réponse sous 24 heures. Le parcours de Richard est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et d\'autres récits publics, d\'incidents comme de virages réussis, sont réunis dans les <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre entreprise se relèverait-elle d\'une attaque comme NotPetya ?',
            'texte'  => 'Décrivez vos postes, vos serveurs, vos logiciels et la façon dont vous sauvegardez aujourd\'hui : vous recevez un diagnostic de vos sauvegardes, de vos accès et de votre plan de reprise, avec des mesures classées par priorité et un devis pour celles que vous souhaitez confier.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        ['q' => 'Qu\'est-ce que NotPetya, et en quoi diffère-t-il d\'un rançongiciel ordinaire ?', 'r' => 'NotPetya est le programme malveillant apparu le 27 juin 2017 en Ukraine. Il affichait une demande de rançon de 300 dollars en bitcoins, selon CNBC, mais l\'alerte TA17-181A de l\'agence américaine de cybersécurité, publiée le 1er juillet 2017, relève qu\'il se comportait davantage comme un programme destructeur : il chiffrait la zone de démarrage et la table des fichiers, puis redémarrait la machine. Il se propageait par EternalBlue, EternalRomance, des mots de passe volés en mémoire, PsExec et WMI.'],
        ['q' => 'Payer la rançon aurait-il permis à Maersk de récupérer ses données ?', 'r' => 'Non. Selon l\'alerte de l\'agence américaine de cybersécurité, l\'adresse électronique qui servait à valider le paiement a été fermée par son fournisseur de messagerie, et Wired ajoute qu\'aucune clé de déchiffrement n\'existait. Les victimes ne pouvaient compter que sur leurs propres sauvegardes, ce qui explique pourquoi la recherche d\'une copie intacte des contrôleurs de domaine est devenue décisive chez Maersk.'],
        ['q' => 'Qu\'est-ce qu\'un contrôleur de domaine, et pourquoi Maersk n\'en avait-il plus de copie saine ?', 'r' => 'Un contrôleur de domaine est le serveur Windows qui tient l\'annuaire des comptes : il vérifie qui se connecte et ce que chacun a le droit de faire. Sans lui, aucun utilisateur n\'ouvre de session et les serveurs restaurés restent inutilisables. Selon Wired, les quelque 150 contrôleurs de Maersk se synchronisaient entre eux et servaient de copie les uns aux autres ; NotPetya les a effacés en même temps, sauf celui du Ghana, resté hors ligne.'],
        ['q' => 'Combien de temps Maersk a-t-il mis à reconstruire son informatique ?', 'r' => 'Selon son président, Jim Hagemann Snabe, à Davos le 24 janvier 2018, 4 000 serveurs, 45 000 ordinateurs et 2 500 applications ont été réinstallés en dix jours, un travail qui aurait en principe demandé jusqu\'à six mois, rapporte ZDNet France. Le rapport du deuxième trimestre situe le retour à un fonctionnement plus normal dans la semaine du 3 au 9 juillet 2017, et Wired précise que certains membres de l\'équipe ont travaillé près de deux mois.'],
        ['q' => 'Les données des clients de Maersk ont-elles été dérobées ?', 'r' => 'Maersk a affirmé, dans son rapport du deuxième trimestre 2017 cité par Computer Weekly et dans sa communication rapportée par CNBC le 16 août 2017, qu\'aucune fuite ni perte de données au profit de tiers n\'avait eu lieu. Le dommage a été d\'une autre nature : des systèmes effacés, une activité arrêtée et, selon Wired, des fichiers perdus par les salariés sur leurs ordinateurs réinstallés.'],
        ['q' => 'Qui a été désigné comme responsable de NotPetya ?', 'r' => 'Le 15 février 2018, le gouvernement britannique, sur l\'avis de son centre national de cybersécurité, a jugé l\'armée russe presque certainement responsable ; la Maison-Blanche l\'a accusée le même jour. Le 19 octobre 2020, Londres a désigné l\'unité 74455 du GRU, le renseignement militaire russe, et relevé les poursuites pénales annoncées par le ministère américain de la Justice contre des officiers de ce service. La Russie a démenti, selon The Guardian.'],
        ['q' => 'Une assurance cyber couvre-t-elle une attaque attribuée à un État ?', 'r' => 'Cela dépend du contrat, et NotPetya l\'a montré. Mondelēz réclamait plus de 100 millions de dollars à son assureur, qui invoquait l\'exclusion pour fait de guerre ; le litige s\'est conclu en 2022 par un accord confidentiel, selon Cybersecurity Dive. Pour Merck, une cour d\'appel du New Jersey a jugé en 2023 que cette exclusion ne s\'appliquait pas, rapporte The Register. Une PME doit lire ces clauses avec son assureur avant tout incident.'],
        ['q' => 'Une sauvegarde dans le cloud suffit-elle à se protéger ?', 'r' => 'Pas si elle est synchronisée en permanence avec les mêmes identifiants que le réseau qu\'elle protège : un programme qui efface ou chiffre les originaux peut atteindre la copie, comme les contrôleurs de domaine synchronisés de Maersk. Cybermalveillance.gouv.fr recommande plusieurs copies, dont une dans un autre lieu, et un support débranché après usage. Le plus sûr combine un service en ligne protégé contre l\'effacement et une copie hors ligne, restaurées régulièrement.'],
        ['q' => 'Que faire dans la première heure si un programme destructeur frappe votre entreprise ?', 'r' => 'Isoler d\'abord : débrancher du réseau les machines touchées, puis couper les liaisons entre sites, ce que Maersk a mis plus de deux heures à faire, selon Wired. Ne reconnecter aucune machine suspecte, ne pas payer, prévenir son prestataire et son assureur, puis informer les clients par un canal sûr. La suite se joue sur des sauvegardes saines et un plan écrit à l\'avance, pas sur l\'improvisation.'],
        ['q' => 'Faut-il encore se préoccuper de SMBv1 et d\'EternalBlue aujourd\'hui ?', 'r' => 'Oui, dès qu\'un réseau contient des machines anciennes. Microsoft a corrigé les failles de SMBv1 par le bulletin MS17-010 du 14 mars 2017, classé critique, et indique comment désactiver ce protocole ; l\'agence américaine de cybersécurité recommandait en juillet 2017 de le désactiver et de bloquer SMB en bordure de réseau. Un poste ou un serveur jamais mis à jour reste exposé à ces outils, comme l\'étaient les machines non corrigées touchées par NotPetya.'],
        ['q' => 'Une PME peut-elle se préparer sans le budget d\'un grand groupe ?', 'r' => 'Oui, car l\'essentiel relève de l\'organisation plus que de l\'achat : un inventaire, des mises à jour régulières, des comptes séparés, une copie hors ligne et un test de restauration. Les mesures qui auraient limité la panne de Maersk, décrites par Wired et par l\'alerte américaine, ne demandent aucune technologie rare. Leur coût dépend de la taille du parc et des logiciels ; il se chiffre sur devis, après un état des lieux.'],
    ],

    'sources' => [
        ['titre' => 'Wired, « The Untold Story of NotPetya, the Most Devastating Cyberattack in History », Andy Greenberg, 22 août 2018', 'url' => 'https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/', 'date' => '2026-10-04'],
        ['titre' => 'Portside, reprise intégrale de l\'enquête de Wired sur NotPetya, août 2018', 'url' => 'https://portside.org/node/18008/printable/print', 'date' => '2026-10-04'],
        ['titre' => 'Computer Weekly, « Danish shipping giant Maersk recovering from major Petya cyber attack », Eeva Haaramo, 30 juin 2017', 'url' => 'https://www.computerweekly.com/news/450421756/Danish-shipping-giant-Maersk-recovering-from-major-Petya-cyber-attack', 'date' => '2026-10-04'],
        ['titre' => 'Computer Weekly, « NotPetya attack cost up to $300m, says Maersk », Warwick Ashford, 16 août 2017', 'url' => 'https://www.computerweekly.com/news/450424559/NotPetya-attack-cost-up-to-300m-says-Maersk', 'date' => '2026-10-04'],
        ['titre' => 'CNBC, « Shipping company Maersk says June cyberattack could cost it up to $300 million », Jordan Novet, 16 août 2017', 'url' => 'https://www.cnbc.com/2017/08/16/maersk-says-notpetya-cyberattack-could-cost-300-million.html', 'date' => '2026-10-04'],
        ['titre' => 'Logistics Manager, « Cyber attack costs Maersk $250m », résultats du troisième trimestre 2017, 7 novembre 2017', 'url' => 'https://www.logisticsmanager.com/cyber-attack-costs-maersk-250m/', 'date' => '2026-10-04'],
        ['titre' => 'gCaptain, « Maersk Provides Operational Updates After Cyber Attack », mises à jour publiées par Maersk, 29 juin 2017', 'url' => 'https://gcaptain.com/maersk-operational-update-on-cyber-attack/', 'date' => '2026-10-04'],
        ['titre' => 'BleepingComputer, « Maersk Reinstalled 45,000 PCs and 4,000 Servers to Recover From NotPetya Attack », Catalin Cimpanu, 25 janvier 2018', 'url' => 'https://www.bleepingcomputer.com/news/security/maersk-reinstalled-45-000-pcs-and-4-000-servers-to-recover-from-notpetya-attack/', 'date' => '2026-10-04'],
        ['titre' => 'ZDNet France, « Les 10 nuits en enfer de Maersk pour réinstaller 4000 serveurs et 45000 PC », Christophe Auffray, 29 janvier 2018', 'url' => 'https://www.zdnet.fr/actualites/les-10-nuits-en-enfer-de-maersk-pour-reinstaller-4000-serveurs-et-45000-pc-39863304.htm', 'date' => '2026-10-04'],
        ['titre' => 'SecurityWeek, « Maersk Reinstalled 50,000 Computers After NotPetya Attack », Eduard Kovacs, 26 janvier 2018', 'url' => 'https://www.securityweek.com/maersk-reinstalled-50000-computers-after-notpetya-attack/', 'date' => '2026-10-04'],
        ['titre' => 'Forum économique mondial, session « Securing a Common Future in Cyberspace », Davos, 24 janvier 2018', 'url' => 'https://www.weforum.org/events/world-economic-forum-annual-meeting-2018/sessions/securing-a-common-future-in-cyberspace', 'date' => '2026-10-04'],
        ['titre' => 'Gouvernement britannique, « Foreign Office Minister condemns Russia for NotPetya attacks », 15 février 2018', 'url' => 'https://www.gov.uk/government/news/foreign-office-minister-condemns-russia-for-notpetya-attacks', 'date' => '2026-10-04'],
        ['titre' => 'Maison-Blanche, « Statement from the Press Secretary » sur NotPetya, 15 février 2018', 'url' => 'https://trumpwhitehouse.archives.gov/briefings-statements/statement-press-secretary-25/', 'date' => '2026-10-04'],
        ['titre' => 'The Guardian, « US joins UK in blaming Russia for NotPetya cyber-attack », Sarah Marsh, 15 février 2018', 'url' => 'https://www.theguardian.com/technology/2018/feb/15/uk-blames-russia-notpetya-cyber-attack-ukraine', 'date' => '2026-10-04'],
        ['titre' => 'Gouvernement britannique, « UK exposes series of Russian cyber attacks against Olympic and Paralympic Games », 19 octobre 2020', 'url' => 'https://www.gov.uk/government/news/uk-exposes-series-of-russian-cyber-attacks-against-olympic-and-paralympic-games', 'date' => '2026-10-04'],
        ['titre' => 'CISA, alerte TA17-181A « Petya Ransomware », 1er juillet 2017', 'url' => 'https://www.cisa.gov/news-events/alerts/2017/07/01/petya-ransomware', 'date' => '2026-10-04'],
        ['titre' => 'ESET WeLiveSecurity, « Analysis of TeleBots\' cunning backdoor », Anton Cherepanov, 4 juillet 2017', 'url' => 'https://www.welivesecurity.com/2017/07/04/analysis-of-telebots-cunning-backdoor/', 'date' => '2026-10-04'],
        ['titre' => 'Microsoft, bulletin de sécurité MS17-010, classé critique, 14 mars 2017', 'url' => 'https://learn.microsoft.com/en-us/security-updates/securitybulletins/2017/ms17-010', 'date' => '2026-10-04'],
        ['titre' => 'The Register, « Maersk prepares to lay off the Maidenhead staffers who rescued it from NotPetya », Gareth Corfield, 3 mars 2020', 'url' => 'https://www.theregister.com/2020/03/03/maersk_redundancies_maidenhead_notpetya_rescuers/', 'date' => '2026-10-04'],
        ['titre' => 'The Register, « Insurers can\'t use \'act of war\' excuse to avoid Merck\'s $1.4B NotPetya payout », Jessica Lyons, 3 mai 2023', 'url' => 'https://www.theregister.com/2023/05/03/merck_14bn_insurance_payout_upheld/', 'date' => '2026-10-04'],
        ['titre' => 'Cybersecurity Dive, « Mondelēz settlement in NotPetya case renews concerns about cyber insurance coverage », David Jones, 8 novembre 2022', 'url' => 'https://www.cybersecuritydive.com/news/mondelez-zurich-notpetya-cyber-insurance-settlement/636029/', 'date' => '2026-10-04'],
        ['titre' => 'SiliconANGLE, « Shipping giant Maersk says NotPetya attack cost it up to $300M », Duncan Riley, 16 août 2017', 'url' => 'https://siliconangle.com/2017/08/16/shipping-giant-maesrk-says-notpetya-attack-cost-300m/', 'date' => '2026-10-04'],
        ['titre' => 'Interpol, « New INTERPOL report warns of sharp rise in cybercrime in Africa », 23 juin 2025', 'url' => 'https://www.interpol.int/News-and-Events/News/2025/New-INTERPOL-report-warns-of-sharp-rise-in-cybercrime-in-Africa', 'date' => '2026-10-04'],
        ['titre' => 'Gouvernement du Bénin, « Tout savoir sur les factures normalisées au Bénin », 27 février 2020', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-04'],
        ['titre' => 'Cybermalveillance.gouv.fr, « Pourquoi et comment bien gérer ses sauvegardes ? »', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['maintenance-support', 'audit-etude-de-projet', 'consultant-digitalisation', 'digitalisation-d-entreprise'],
        'comparatifs' => [],
    ],
];
