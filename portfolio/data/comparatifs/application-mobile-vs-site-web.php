<?php
// ============================================================
// data/comparatifs/application-mobile-vs-site-web.php · Comparatif site web
// responsive, application web progressive (PWA) et application mobile (native
// ou multiplateforme) pour les entreprises d'Afrique francophone (vague 1F).
// Frais des magasins, règles, parts de marché et chiffres de connectivité
// relevés sur les pages officielles ou les sources citées le 07/10/2026 ;
// à revérifier à chaque mise à jour.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Application mobile, PWA ou site web : que développer en premier ?',
    'title'   => 'App mobile ou site web : que choisir | Richard SALANON',
    'meta'    => 'Site web, PWA ou application mobile : coût sur trois ans, frais Apple et Google, data mobile en Afrique, mobile money et profils d\'entreprise comparés.',
    'en_bref' => 'Pour la plupart des entreprises d\'Afrique francophone, le site web responsive se construit en premier : il se fait trouver sur Google, se publie sans magasin et reste le moins cher sur trois ans. La PWA ajoute l\'installation, un mode hors connexion et des notifications sans passer par les magasins. L\'application mobile se justifie quand l\'usage est quotidien, que le matériel du téléphone compte ou que les notifications font le chiffre d\'affaires. Android pèse 83,38 % des mobiles africains en septembre 2026 selon Statcounter, et le compte de développeur Apple coûte 99 dollars par an.',
    'publie'  => '2026-10-07',
    'maj'     => '2026-10-07',

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Dirigeants de TPE et PME qui hésitent entre site, PWA et application, Afrique francophone et Europe'],
        ['l' => 'Options comparées', 'v' => 'Site web responsive, application web progressive (PWA), application mobile native ou multiplateforme (Flutter, React Native)'],
        ['l' => 'Critères pondérés', 'v' => '8 critères, trois profils de poids publiés'],
        ['l' => 'Sources consultées', 'v' => 'Pages officielles d\'Apple, de Google, de Statcounter, de l\'UIT et de la GSMA, le 7 octobre 2026'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi comparer site web, PWA et application, et que faut-il entendre par chaque option ?',
            'paragraphes' => [
                '« J\'hésite entre un site web et une application mobile. » La question arrive presque toujours au mauvais moment : le dirigeant a vu un concurrent publier son application, un prestataire lui a parlé de « mobile first », ou un client lui a demandé s\'il existait une application. Or les trois options ne résolvent pas le même problème, et la mauvaise réponse coûte de l\'argent et surtout des mois.',
                'Un <strong>site web responsive</strong> est un site qui s\'adapte à l\'écran du téléphone et s\'ouvre par un lien. Une <strong>application web progressive</strong> (PWA) est un site enrichi par des technologies récentes pour s\'installer sur l\'écran d\'accueil, charger vite et fonctionner en partie sans réseau ; selon la <a href="https://web.dev/learn/pwa/">formation PWA de web.dev</a> consultée le 7 octobre 2026, c\'est une application web enrichie par des API modernes pour offrir « des capacités, une fiabilité et une installabilité accrues » avec une seule base de code. Une <strong>application mobile</strong> est un programme installé depuis l\'App Store d\'Apple ou Google Play, écrit en code natif (Swift, Kotlin) ou avec un outil multiplateforme comme Flutter ou React Native, qui produisent une application pour Android et iOS à partir d\'une base commune.',
                'Cette page ne désigne pas de gagnant. Elle publie une grille de huit critères pondérés, montre que trois profils d\'entreprise aboutissent à trois ordres de priorité différents, puis détaille le coût sur trois ans, les frais et règles des magasins, la découverte, la connexion, la data mobile, le mobile money et les délais. Flutter et React Native y sont traités comme des options techniques de l\'application mobile, pas comme des concurrents à départager. Aucun lien d\'affiliation : les liens externes mènent aux pages officielles consultées le 7 octobre 2026.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Site, PWA ou application : que change chaque option, critère par critère ?',
            'legende' => 'Synthèse qualitative établie par l\'auteur à partir des sources citées plus bas, au 7 octobre 2026. Les détails chiffrés suivent dans les sections thématiques.',
            'entetes' => ['Critère', 'Site web responsive', 'PWA', 'Application mobile'],
            'lignes'  => [
                ['Comment l\'utilisateur arrive', 'Google, lien WhatsApp, QR code, réseaux sociaux', 'Les mêmes, plus l\'icône sur l\'écran d\'accueil après installation', 'Recherche dans le magasin ou lien vers la fiche du magasin ; page web nécessaire pour être trouvé ailleurs'],
                ['Installation', 'Aucune', 'Depuis le navigateur, quelques secondes', 'Téléchargement depuis un magasin, avec un poids à charger sur la data mobile'],
                ['Hors connexion', 'Très limité', 'Pages et données mises en cache par un service worker', 'Complet, avec base de données locale et synchronisation'],
                ['Notifications', 'Aucune', 'Possibles sur Android ; sur iPhone, seulement une fois installée sur l\'écran d\'accueil', 'Complètes sur Android et iPhone'],
                ['Accès au matériel', 'Géolocalisation, caméra via le navigateur', 'Idem, avec des fonctions variables selon le navigateur', 'Bluetooth, NFC, capteurs, tâches en arrière-plan, fichiers : le plus large'],
                ['Publication', 'Mise en ligne immédiate', 'Mise en ligne immédiate', 'Soumission, revue du magasin, comptes de développeur à payer'],
                ['Mise à jour', 'Immédiate pour tous', 'Immédiate pour tous', 'À télécharger par chaque utilisateur, et à valider par le magasin'],
                ['Compétences à trouver', 'Les plus répandues', 'Développeur web avec connaissance des service workers', 'Développeur mobile Flutter, React Native, Swift ou Kotlin, plus rare localement'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles sont les trois erreurs de départ les plus fréquentes ?',
            'intro' => 'Elles viennent presque toujours d\'une confusion entre ce que veut le dirigeant et ce que fera l\'utilisateur.',
            'items' => [
                ['titre' => 'Vouloir une application « parce que tout le monde en a une »', 'texte' => 'Une application qu\'on télécharge puis qu\'on n\'ouvre jamais ne produit aucune vente. Elle n\'a de valeur que si le client revient souvent, ce qui dépend de votre activité et non de la technologie.'],
                ['titre' => 'Croire que l\'application fait gagner en visibilité', 'texte' => 'Un client qui ne vous connaît pas ne cherche pas votre application : il cherche un service sur Google ou une recommandation sur WhatsApp. L\'application sert à fidéliser ceux qui vous connaissent déjà, pas à en trouver de nouveaux.'],
                ['titre' => 'Oublier que l\'application se maintient comme un produit', 'texte' => 'Chaque nouvelle version d\'Android ou d\'iOS, chaque changement de règle d\'un magasin et chaque mise à jour d\'une bibliothèque demande du travail. Un site s\'entretient moins souvent et se corrige en quelques minutes.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles questions poser avant de choisir ?',
            'paragraphes' => [
                'Trois questions simples tranchent la majorité des cas. Premièrement : vos clients vous utiliseront-ils chaque semaine, voire chaque jour ? Si la réponse est non, une application ne sera pas ouverte assez souvent pour justifier son coût, et un site suffit. Deuxièmement : avez-vous besoin d\'être trouvé par des gens qui ne vous connaissent pas ? Presque toujours oui, et c\'est le terrain du site, car une application ne s\'indexe pas comme une page web. Troisièmement : quel budget et quel délai avez-vous pour la première version ? Un site se lance plus vite qu\'une application sur deux plateformes, qui ajoute la publication et la revue des magasins.',
                'Une quatrième question s\'ajoute pour les applications métier : vos utilisateurs ont-ils besoin du capteur, du lecteur de codes, du Bluetooth ou d\'une synchronisation fiable sans réseau ? Si oui, le natif prend l\'avantage. Sinon, une PWA couvre souvent l\'essentiel pour une fraction du budget. Le reste de la page chiffre chacun de ces arbitrages.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment pondérer les critères selon votre profil d\'entreprise ?',
            'legende' => 'Appréciation de l\'auteur, publiée avec sa justification pour chaque critère (dernière colonne) : notes de 1 à 5 attribuées à partir des faits sourcés de cette page (Site, PWA, Application) ; poids en pour cent pour trois profils, fixés selon ce que le profil perd si le critère est mal servi. Score sur 100 = somme des notes multipliées par le poids, divisée par 5. Profil A : commerce ou artisan local qui cherche de nouveaux clients. Profil B : service récurrent à clientèle d\'abonnés (livraison, salle de sport, école). Profil C : application métier interne (techniciens, livreurs, relevés de terrain).',
            'entetes' => ['Critère', 'Poids A', 'Poids B', 'Poids C', 'Site', 'PWA', 'Application', 'Ce qui fonde les notes'],
            'lignes'  => [
                ['Découverte et acquisition de clients', '25', '5', '0', '5', '5', '2', 'Une page web s\'indexe et se partage par lien ; une application ne se trouve que dans un magasin.'],
                ['Coût sur trois ans', '25', '10', '10', '5', '4', '2', 'Une base de code web contre deux plateformes à publier, comptes de développeur et maintenance des versions.'],
                ['Rapidité de lancement et de correction', '10', '5', '5', '5', '5', '2', 'Aucune revue de magasin pour le web ; Apple annonce 90 % des revues en moins de 48 heures, Google jusqu\'à sept jours pour un premier compte personnel.'],
                ['Hors connexion, poids et data', '5', '15', '20', '2', '4', '3', 'La PWA met en cache sans télécharger un paquet ; l\'application fonctionne hors ligne mais pèse à l\'installation.'],
                ['Notifications et fidélisation', '5', '30', '10', '2', '3', '5', 'Les notifications web existent mais l\'iPhone les limite aux applications ajoutées à l\'écran d\'accueil.'],
                ['Accès au matériel et performances', '0', '10', '40', '1', '2', '5', 'Bluetooth, NFC, capteurs et arrière-plan se traitent surtout en natif.'],
                ['Indépendance vis-à-vis des plateformes', '10', '10', '10', '5', '5', '2', 'Un magasin peut refuser une version, changer ses règles ou ses commissions ; le web n\'a pas d\'intermédiaire.'],
                ['Encaissement par mobile money', '20', '15', '5', '5', '5', '4', 'Les agrégateurs proposent une page de paiement web ; en application, les règles de paiement des magasins s\'ajoutent.'],
                ['<strong>Score profil A</strong>', '100', '', '', '<strong>94</strong>', '<strong>92</strong>', '<strong>52</strong>', 'Pour trouver des clients au moindre coût, le site passe devant, la PWA le suit de près.'],
                ['<strong>Score profil B</strong>', '', '100', '', '<strong>65</strong>', '<strong>77</strong>', '<strong>73</strong>', 'La PWA mène, l\'application talonne dès que la notification est le moteur de la fidélisation.'],
                ['<strong>Score profil C</strong>', '', '', '100', '<strong>50</strong>', '<strong>66</strong>', '<strong>76</strong>', 'Le poids du matériel et du hors connexion fait passer l\'application devant.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la même grille donne-t-elle trois ordres de priorité différents ?',
            'paragraphes' => [
                'Les notes ne changent pas d\'un profil à l\'autre : seuls les poids bougent. Une boutique de quartier a besoin de se faire trouver et d\'encaisser par mobile money ; l\'application obtient 52 sur 100 parce que la découverte et le coût pèsent la moitié de la décision. Un service à abonnés (livraison de repas, salle de sport, paiement des frais de scolarité) a besoin que le client reçoive un rappel au bon moment : la notification pèse trente points, et l\'application passe à 73, à quatre points de la PWA.',
                'Pour une équipe de techniciens qui lit des codes-barres, utilise le Bluetooth d\'un appareil de mesure ou travaille toute la journée sans réseau, le matériel et le hors connexion pèsent soixante points : l\'application l\'emporte avec 76, la PWA arrive à 66 et le site à 50. Ce profil est le seul où l\'application mobile devient le premier choix dès le départ.',
                'Les poids sont un jugement, pas une mesure : le commerce local donne 25 points à la découverte parce que son premier besoin est d\'être trouvé, l\'équipe de terrain donne 40 points au matériel parce que l\'outil ne sert à rien sans lui. Refaites le calcul avec vos propres poids. Si votre clientèle est surtout sur iPhone, la note de notification de la PWA baisse. Si vous ne payez jamais de publicité et comptez sur Google, la note de découverte devient décisive. Un poids que vous n\'osez pas assumer révèle souvent la vraie priorité du projet. Les scores indiquent aussi un ordre d\'investissement : le site d\'abord, la PWA ensuite si l\'usage le demande, l\'application quand une fonction ne peut vivre que dans le natif.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qu\'est-ce qui fait monter le coût de chaque option sur trois ans ?',
            'legende' => 'Comparaison qualitative établie par l\'auteur : aucun prix de marché n\'est publié ici, parce que les devis varient trop avec le périmètre. Seuls les frais de compte des magasins viennent des pages officielles d\'Apple et de Google consultées le 7 octobre 2026. Les prix de projet se fixent sur devis.',
            'entetes' => ['Poste sur trois ans', 'Site web responsive', 'PWA', 'Application Android et iOS'],
            'lignes'  => [
                ['Conception et développement initial', 'Une seule base de code web, un seul jeu de tests', 'Le site, plus un service worker, un mode hors ligne et des tests d\'installation sur plusieurs navigateurs', 'Le plus lourd : deux plateformes (ou un outil multiplateforme à maîtriser), maquettes propres au mobile, tests sur de nombreux appareils'],
                ['Hébergement et nom de domaine', 'Un hébergement web, au prix de l\'hébergeur choisi', 'Identique au site', 'Serveur d\'API et stockage, plus le site de présentation à côté'],
                ['Comptes des magasins', 'Aucun', 'Aucun', 'Apple : 99 dollars par an, soit 297 dollars sur trois ans ; Google Play : 25 dollars, une seule fois'],
                ['Maintenance', 'Mises à jour du serveur et des extensions, corrections publiées dans la journée', 'Celle du site, plus le suivi des navigateurs et des service workers', 'La plus fréquente : nouvelles versions d\'Android et d\'iOS, bibliothèques, changements de règles des magasins'],
                ['Évolutions et corrections', 'Publiées en minutes', 'Publiées en minutes', 'Une soumission par mise à jour ; Apple et Google doivent valider'],
                ['Ce qui multiplie le coût', 'Le nombre de pages et de fonctions', 'Le niveau de hors connexion et de notifications visé', 'Le nombre de plateformes, la publication, chaque mise à jour et la maintenance des comptes de magasin'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Quels prix de départ pour un site chez Richard SALANON, et comment se situe l\'application ?',
            'intro' => 'Prix de départ publiés pour le web au 7 octobre 2026, à 655,957 francs CFA pour un euro, arrondis à l\'euro. Une application mobile, une PWA métier ou un espace client se chiffrent toujours après un cadrage, donc sur devis : on peut indiquer ce qui fait monter la facture, pas l\'écart exact.',
            'items' => [
                ['offre' => 'Landing page', 'prix' => '150 000 FCFA (229 euros)', 'inclus' => ['Une page unique conçue pour convertir', 'Lisible sur téléphone', 'Idéale pour tester une offre avant de développer plus']],
                ['offre' => 'Site vitrine', 'prix' => '300 000 FCFA (457 euros)', 'inclus' => ['Plusieurs pages, base de la présence en ligne', 'Adapté au téléphone', 'Premier pas logique avant une PWA ou une application']],
                ['offre' => 'Référencement naturel', 'prix' => '75 000 FCFA (114 euros)', 'inclus' => ['Travail de visibilité sur Google', 'À ajouter au site pour que les clients vous trouvent']],
                ['offre' => 'PWA, application web, application mobile', 'prix' => 'Sur devis', 'inclus' => ['Le périmètre, le nombre de plateformes et les intégrations changent le prix', 'Chiffrage après cadrage du besoin']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que coûtent et que règlent Apple et Google pour publier une application ?',
            'paragraphes' => [
                'Selon la <a href="https://developer.apple.com/programs/whats-included/">page des avantages de l\'Apple Developer Program</a>, consultée le 7 octobre 2026, l\'adhésion coûte 99 dollars par an ou l\'équivalent en monnaie locale, avec des exonérations pour certaines organisations à but non lucratif, établissements d\'enseignement agréés et administrations. Sans ce compte, une application ne peut pas être publiée sur l\'App Store. Selon la <a href="https://support.google.com/googleplay/android-developer/answer/6112435">page d\'aide de la Google Play Console</a>, l\'inscription coûte 25 dollars, une seule fois, avec une vérification d\'identité et, selon le pays, une carte bancaire internationale (les cartes prépayées sont refusées).',
                'Les magasins prélèvent aussi une commission sur les ventes numériques. Selon le <a href="https://developer.apple.com/app-store/small-business-program/">programme Small Business d\'Apple</a>, la commission standard est de 30 %, ramenée à 15 % pour les développeurs dont les gains de l\'année précédente ne dépassent pas 1 million de dollars. Selon la <a href="https://support.google.com/googleplay/android-developer/answer/112622">page des frais de service de Google Play</a>, dans les marchés hors Australie, Espace économique européen, Japon, Royaume-Uni et États-Unis, la commission est de 15 % sur le premier million de dollars, puis 30 % au-delà, les abonnements restant à 15 %. Ces taux changent : vérifiez la page avant de signer un plan financier.',
                'Une condition mérite l\'attention d\'une PME qui crée son compte à titre personnel : selon la <a href="https://support.google.com/googleplay/android-developer/answer/14151465">page d\'aide de Google Play sur les exigences de test</a>, un compte personnel créé après le 13 novembre 2023 doit réunir au moins 12 testeurs inscrits en continu pendant 14 jours avant d\'accéder à la production, puis attendre une revue qui prend en général sept jours ou moins. Un compte d\'organisation évite en principe cette étape, mais exige des justificatifs d\'entreprise.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles des magasins peuvent bloquer ou renchérir votre projet ?',
            'paragraphes' => [
                'Les <a href="https://developer.apple.com/app-store/review/guidelines/">règles de revue d\'Apple</a>, consultées le 7 octobre 2026, refusent une application qui n\'est qu\'un site reconditionné : la règle 4.2 demande des fonctions, un contenu et une interface qui dépassent un site web, et la règle 4.2.2 exclut les applications qui sont surtout du marketing, des liens ou des pages découpées. Habiller votre site dans une coque d\'application pour le publier a donc de bonnes chances d\'être refusé.',
                'La règle 3.1.1 impose le paiement intégré à l\'application pour débloquer des fonctions numériques (abonnements, contenus premium, accès à une version complète), ce qui déclenche la commission du magasin. La règle 3.1.3(e) prévoit l\'inverse pour les biens physiques et les services consommés hors de l\'application : le paiement doit alors passer par d\'autres moyens, comme Apple Pay ou la carte. Pour un restaurant, un commerce ou un transporteur, le paiement par mobile money se fait donc hors du système du magasin, mais il faut le décrire correctement à la revue.',
                'Pour une entreprise qui vend un abonnement numérique, la commission de 15 % à 30 % se calcule dès le plan financier. Pour une entreprise qui vend des repas, des cours en présentiel ou des produits physiques, elle ne s\'applique pas. Le site web, lui, n\'a pas ce type de règle : l\'encaissement passe directement par votre agrégateur, sans intermédiaire de plateforme.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment vos clients vous trouvent-ils : référencement ou magasin d\'applications ?',
            'paragraphes' => [
                'Un site se trouve par Google, par un lien posé dans une conversation WhatsApp, par un QR code sur une vitrine ou par une publication sur les réseaux sociaux. Chaque page est une porte d\'entrée possible : une page « plombier à Cotonou » ou « livraison de repas à Abidjan » peut attirer des clients qui n\'ont jamais entendu parler de vous. C\'est le terrain du <a href="/services/site-vitrine-professionnel">site vitrine</a> et du travail de référencement.',
                'Une application se trouve dans un magasin, où la concurrence est mondiale et où la plupart des gens cherchent un nom de marque qu\'ils connaissent déjà. Un inconnu qui tape « coiffeur Cotonou » dans Google Play ne trouve pas votre salon : il trouve une liste d\'applications génériques. Vous devez donc amener le client vers le magasin par un autre canal, souvent votre site ou une publicité, ce qui ajoute un clic et un téléchargement entre l\'intention et l\'usage.',
                'La conclusion pratique est asymétrique : le site sert à acquérir, l\'application à retenir. Même une entreprise qui vise l\'application a besoin d\'une page web pour la présenter, la faire trouver, expliquer ses conditions et renvoyer vers le bon magasin selon le téléphone. Une PWA combine les deux : elle reste une page indexable tout en proposant l\'installation sur l\'écran d\'accueil.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Hors connexion, notifications, matériel : que permet réellement chaque option ?',
            'intro' => 'Les capacités du web progressent, mais l\'écart avec le natif reste réel sur trois points, surtout sur iPhone.',
            'items' => [
                ['titre' => 'Hors connexion', 'texte' => 'Selon la <a href="https://web.dev/learn/pwa/">formation PWA de web.dev</a>, les service workers sont le socle de la PWA : ils permettent un chargement rapide quel que soit le réseau et un accès hors ligne. Ils mettent en cache des pages et des données, pas une application métier complète avec base locale et conflits de synchronisation, que le natif gère mieux. Pour un catalogue, un menu ou une fiche de réservation, la PWA suffit largement.'],
                ['titre' => 'Notifications', 'texte' => 'Selon l\'<a href="https://webkit.org/blog/13878/web-push-for-web-apps-on-ios-and-ipados/">annonce de WebKit sur le Web Push</a>, l\'iPhone accepte les notifications web depuis iOS et iPadOS 16.4 (version de test du 16 février 2023), à condition que l\'application web soit ajoutée à l\'écran d\'accueil et que l\'utilisateur accepte une demande de permission après une action de sa part. Sur Android, les navigateurs courants les acceptent sans cette étape d\'installation. Le taux d\'acceptation dépend alors de la confiance que vous avez construite.'],
                ['titre' => 'Accès au matériel', 'texte' => 'Géolocalisation, caméra et partage fonctionnent dans le navigateur. Le Bluetooth, le NFC, la lecture de capteurs en arrière-plan, la gestion fine de la batterie et l\'accès aux fichiers dépendent du navigateur et du système et sont souvent absents ou limités sur iPhone. Si votre outil de terrain en dépend, comptez sur le natif.'],
                ['titre' => 'Performances', 'texte' => 'Flutter et React Native produisent des applications fluides pour la grande majorité des usages d\'entreprise. Le natif pur se justifie pour des animations très lourdes, des jeux ou un usage intensif du matériel, rarement pour une PME. Le choix entre Flutter et React Native relève d\'une décision technique distincte, liée aux compétences disponibles chez votre prestataire.'],
                ['titre' => 'Intégration avec le système', 'texte' => 'Une application peut ouvrir des appels, lire des contacts, partager vers WhatsApp et s\'afficher en widget. Une PWA peut s\'installer, s\'ouvrir en plein écran et partager, mais reste moins intégrée à l\'écran de verrouillage et aux raccourcis du téléphone.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Android, iPhone et data mobile en Afrique francophone : que disent les chiffres ?',
            'paragraphes' => [
                'Selon <a href="https://gs.statcounter.com/os-market-share/mobile/africa">Statcounter Global Stats</a>, consulté le 7 octobre 2026, Android représente 83,38 % des systèmes mobiles en Afrique en septembre 2026, iOS 16,58 %. Une application iOS touche donc moins d\'un utilisateur africain sur six : pour une clientèle locale, une application Android seule couvre la grande majorité, une PWA couvre les deux avec un seul développement, et le site atteint tout le monde. Sur une clientèle de la diaspora en Europe, la proportion d\'iPhone est bien plus élevée et mérite une mesure sur vos propres statistiques.',
                'Le téléphone est le premier écran, mais la connexion reste un frein. Selon <a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">Facts and Figures 2025 de l\'Union internationale des télécommunications</a>, 74 % de la population mondiale utilise Internet en 2025, contre 71 % un an plus tôt, mais la moyenne pour l\'Afrique n\'est que de 36 %. Le <a href="https://www.itu.int/en/mediacentre/Pages/PR-2025-11-17-Facts-and-Figures.aspx">communiqué de l\'UIT du 17 novembre 2025</a> ajoute que l\'accès reste inabordable dans environ 60 % des pays à revenu faible ou intermédiaire.',
                'Le prix de la data pèse sur la taille de ce que vous demandez de télécharger. L\'étude de comparaison tarifaire de <a href="https://bestbroadbanddeals.co.uk/mobiles/worldwide-data-pricing/">Cable.co.uk (devenu Best Broadband Deals)</a>, sur des données de 2023, donne 2,61 dollars le gigaoctet en moyenne mondiale, 2,37 dollars au Bénin, 1,63 dollar au Sénégal et 1,18 dollar en Côte d\'Ivoire, et note que trois des cinq pays les plus chers du monde sont en Afrique subsaharienne. Ces chiffres datent de 2023 et aucun relevé plus récent par pays n\'a été trouvé : relevez le prix du gigaoctet auprès de l\'opérateur de vos clients avant de dimensionner votre application.',
                'Conséquence directe : une application à télécharger, qui pèse souvent plusieurs dizaines de mégaoctets, coûte de la data avant de servir à quoi que ce soit, alors qu\'une page web légère se charge à la demande et qu\'une PWA ne télécharge que ce qu\'elle affiche. Les mises à jour d\'application s\'ajoutent à chaque version. Pour un client qui recharge un petit forfait, cette différence décide parfois de l\'installation.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels retenir avant de décider ?',
            'items' => [
                ['valeur' => '83,38 %', 'libelle' => 'Part d\'Android parmi les systèmes mobiles en Afrique, septembre 2026 (iOS : 16,58 %)', 'source' => 'Statcounter Global Stats', 'url' => 'https://gs.statcounter.com/os-market-share/mobile/africa'],
                ['valeur' => '99 dollars par an', 'libelle' => 'Adhésion à l\'Apple Developer Program', 'source' => 'Apple Developer', 'url' => 'https://developer.apple.com/programs/whats-included/'],
                ['valeur' => '25 dollars', 'libelle' => 'Frais d\'inscription unique à la Google Play Console', 'source' => 'Aide Google Play Console', 'url' => 'https://support.google.com/googleplay/android-developer/answer/6112435'],
                ['valeur' => '15 % puis 30 %', 'libelle' => 'Commission d\'Apple sous et au-dessus de 1 million de dollars de gains annuels (programme Small Business)', 'source' => 'Apple Developer', 'url' => 'https://developer.apple.com/app-store/small-business-program/'],
                ['valeur' => '12 testeurs, 14 jours', 'libelle' => 'Test exigé d\'un compte Google Play personnel créé après le 13 novembre 2023 avant la production', 'source' => 'Aide Google Play Console', 'url' => 'https://support.google.com/googleplay/android-developer/answer/14151465'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine utilisant Internet en 2025 (monde : 74 %)', 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '1 400 milliards de dollars', 'libelle' => 'Valeur des transactions de mobile money en Afrique subsaharienne en 2025', 'source' => 'Connecting Africa, d\'après la GSMA', 'url' => 'https://www.connectingafrica.com/mobile-money/-1-4t-flowed-through-mobile-money-in-sub-saharan-africa-in-2025-gsma'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment encaisser par mobile money depuis un site, une PWA ou une application ?',
            'paragraphes' => [
                'Selon la <a href="https://www.connectingafrica.com/mobile-money/-1-4t-flowed-through-mobile-money-in-sub-saharan-africa-in-2025-gsma">synthèse de Connecting Africa du rapport 2026 de la GSMA</a>, 1 400 milliards de dollars ont transité par le mobile money en Afrique subsaharienne en 2025, soit 66 % de la valeur mondiale, et l\'Afrique compte 347 millions de comptes actifs sur 30 jours, près de 60 % du total mondial de 593 millions. Pour un commerçant ou un prestataire, le mobile money n\'est pas une option : c\'est le moyen de paiement du client.',
                'Sur un site ou une PWA, l\'encaissement passe par la page de paiement d\'un agrégateur, qui ouvre MTN MoMo, Moov Money, Orange Money ou Wave sans que vous manipuliez de données bancaires. Le comparatif <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">FedaPay, KkiaPay et CinetPay</a> détaille les frais, les délais de reversement et les pays couverts. Ce type de paiement s\'ajoute à un site en quelques jours de développement.',
                'Dans une application, le même agrégateur s\'intègre par un kit de développement ou une fenêtre web intégrée. Le travail est un peu plus lourd, et les règles des magasins imposent de bien distinguer le service consommé hors application, payable par mobile money, du contenu numérique débloqué dans l\'application, qui relève du paiement du magasin. Dans les deux cas, testez le rapprochement automatique entre le paiement et la commande, y compris quand la connexion coupe en plein paiement.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien de temps faut-il pour publier et mettre à jour chaque option ?',
            'paragraphes' => [
                'Un site se met en ligne dès qu\'il est prêt, et une correction se publie en quelques minutes pour tous les visiteurs en même temps. Une PWA se publie de la même façon : à la prochaine ouverture, le navigateur récupère la nouvelle version. Aucune revue, aucun compte à créer, aucun testeur à recruter.',
                'Une application passe par les magasins. Selon la <a href="https://developer.apple.com/distribute/app-review/">page sur la revue des applications d\'Apple</a>, au moins la moitié des soumissions sont examinées en moins de 24 heures et 90 % en moins de 48 heures, ce délai pouvant s\'allonger si la soumission est incomplète. Chez Google, le premier passage en production d\'un compte personnel demande 14 jours de test puis une revue de sept jours ou moins. Prévoyez ces semaines dans le planning, et un temps de correction en cas de refus.',
                'Les mises à jour ralentissent aussi la correction d\'un bogue : même validée par le magasin, la nouvelle version n\'atteint que les utilisateurs qui la téléchargent, certains restant des semaines sur l\'ancienne. Un site ou une PWA corrige tout le monde d\'un coup. Pour un outil dont le tarif ou le règlement change souvent, cette différence compte.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel choix selon votre type d\'entreprise ?',
            'items' => [
                ['secteur' => 'Commerce de proximité ou artisan', 'probleme' => 'Se faire trouver dans sa ville, montrer ses produits, recevoir des commandes par téléphone ou WhatsApp.', 'solution' => 'Un site vitrine avec fiche Google et paiement par mobile money couvre presque tout. L\'application n\'apporte rien tant que les clients ne reviennent pas plusieurs fois par semaine.'],
                ['secteur' => 'Restaurant et livraison', 'probleme' => 'Commandes répétées, suivi de livraison, rappels de promotions.', 'solution' => 'Commencez par un site de commande avec paiement mobile ; une PWA installable ajoute l\'icône sur l\'écran d\'accueil. L\'application native devient utile quand le volume justifie la notification et le suivi en temps réel.'],
                ['secteur' => 'École, salle de sport, service à abonnés', 'probleme' => 'Rappels de paiement, calendrier, relation continue avec des clients connus.', 'solution' => 'Une PWA avec espace client suffit au lancement ; l\'application se justifie quand les notifications deviennent le moteur de fidélisation. Voir le service <a href="/services/saas-espace-client">SaaS et espace client</a>.'],
                ['secteur' => 'Application métier interne', 'probleme' => 'Techniciens, livreurs ou agents de terrain qui saisissent des données sans réseau et lisent des codes.', 'solution' => 'C\'est le profil où l\'application native ou multiplateforme se justifie d\'emblée : matériel, hors connexion et synchronisation. Pour un outil de bureau sans contrainte de terrain, une <a href="/services/application-web-sur-mesure">application web sur mesure</a> suffit souvent.'],
                ['secteur' => 'Marketplace ou plateforme à forte audience', 'probleme' => 'Millions de visites, usage quotidien, comparaison avec des applications mondiales.', 'solution' => 'Le site reste la porte d\'entrée Google, et l\'application vient sur les profils les plus actifs. C\'est le cas où les deux se justifient, dans cet ordre.'],
                ['secteur' => 'Lancement d\'activité avec budget serré', 'probleme' => 'Valider une idée avant d\'investir.', 'solution' => 'Landing page ou site vitrine d\'abord, mesure des demandes, puis PWA si l\'usage se confirme. Une application construite avant la preuve d\'usage reste l\'investissement le plus risqué.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Dans quel ordre investir pour ne pas perdre de budget ?',
            'items' => [
                ['titre' => 'Le site web responsive', 'duree' => 'Le plus court', 'texte' => 'Il vous rend visible, crédible et vous apporte des demandes de contact. Il sert aussi de socle : même une application s\'appuie sur une page de présentation, des conditions et une politique de confidentialité.'],
                ['titre' => 'Mesurer l\'usage réel', 'duree' => 'Le temps de mesurer', 'texte' => 'Combien de clients reviennent chaque semaine, quelles actions répétées, quelle part d\'iPhone, quelles demandes de notification. Ces données remplacent l\'intuition dans la grille de poids.'],
                ['titre' => 'La PWA', 'duree' => 'Court', 'texte' => 'Elle ajoute installation, vitesse et hors connexion partiel sur la base du site, sans magasin ni double développement. Elle teste l\'appétit pour une « application » à moindre coût.'],
                ['titre' => 'L\'application mobile', 'duree' => 'Le plus long', 'texte' => 'Elle vient quand une fonction ne peut vivre que dans le natif ou quand la fidélisation par notification est démontrée. Préparez les comptes de développeur, la revue, la maintenance des versions et un budget de mise à jour continue.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles erreurs éviter avant de lancer ?',
            'items' => [
                'Développer l\'application avant d\'avoir un site : personne ne trouve la fiche du magasin.',
                'Publier un site reconditionné en application et subir un refus au titre de la règle 4.2 d\'Apple.',
                'Calculer le budget sans les comptes de développeur, la maintenance des versions et les évolutions de chaque magasin.',
                'Ignorer la part des utilisateurs sur iPhone auprès de la diaspora ou de la clientèle aisée, ou au contraire ignorer Android localement.',
                'Imposer une application très lourde à un client qui recharge un petit forfait de data.',
                'Mélanger paiement du magasin et mobile money sans vérifier que le service est bien consommé hors de l\'application.',
                'Créer un compte Google Play personnel sans prévoir les 12 testeurs et les 14 jours exigés.',
                'Confier les comptes, les clés de signature et le code source au seul prestataire, sans copie ni documentation.',
                'Choisir Flutter ou React Native avant d\'avoir listé les fonctions du téléphone réellement nécessaires.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faut-il revérifier avant de décider, tant cela change vite ?',
            'texte' => 'Les frais d\'Apple et de Google, les taux de commission, les règles de revue, les exigences de test des comptes personnels et la prise en charge des notifications web sur iPhone ont changé plusieurs fois ces dernières années. Les montants de cette page datent du 7 octobre 2026 ; consultez les pages officielles citées avant de signer un devis. Les parts de marché varient aussi d\'un mois à l\'autre et d\'un pays à l\'autre : mesurez la répartition Android et iPhone de vos propres visiteurs.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui a rédigé ce comparatif, et avec quel parti pris ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou. Il crée des sites, des applications web et des applications mobiles, et n\'a donc pas de raison de pousser l\'une des options plutôt qu\'une autre : un site se chiffre à partir de 300 000 FCFA, une application toujours sur devis, et la meilleure recommandation est parfois de ne pas développer d\'application.',
                'Ses notes de la grille sont des appréciations de praticien, publiées avec leurs justifications pour que vous puissiez les contester. Les faits viennent des pages officielles citées en fin de page. Pour aller plus loin, voir le service de <a href="/services/application-mobile-android-ios">développement d\'applications mobiles Android et iOS</a>, la <a href="/services/site-vitrine-professionnel">création de site vitrine</a>, les <a href="/services/application-web-sur-mesure">applications web sur mesure</a> et les <a href="/services/saas-espace-client">espaces client</a>. Les autres comparatifs sont regroupés sur la page <a href="/comparatifs/">comparatifs</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir en une phrase ?',
            'texte' => 'Commencez par le site pour être trouvé, ajoutez la PWA quand l\'usage se confirme, et ne construisez l\'application mobile que lorsque le matériel, le hors connexion ou la notification quotidienne la rendent indispensable.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Pas sûr de votre choix entre site, PWA et application ?',
            'texte'  => 'Décrivez votre activité, vos clients, leur téléphone et votre budget : vous recevez une orientation qui applique cette grille à votre entreprise et l\'ordre d\'investissement à suivre.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un avis'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il un site web avant une application mobile ?', 'r' => 'Presque toujours oui. Le site vous fait trouver sur Google, présente votre offre, porte les conditions légales et renvoie vers le bon magasin. Une application seule ne s\'indexe pas comme une page web et dépend des recherches dans les magasins.'],
        ['q' => 'Qu\'est-ce qu\'une PWA et remplace-t-elle une application ?', 'r' => 'Une PWA est un site installable sur l\'écran d\'accueil, qui charge vite et fonctionne en partie sans réseau grâce aux service workers. Elle remplace une application pour un catalogue, une réservation ou un espace client ; elle ne remplace pas le natif pour le Bluetooth, le NFC ou les tâches en arrière-plan.'],
        ['q' => 'Combien coûte le compte développeur d\'Apple et de Google ?', 'r' => 'Selon les pages officielles consultées le 7 octobre 2026, Apple facture 99 dollars par an et Google Play 25 dollars une seule fois. Les commissions sur les ventes numériques s\'y ajoutent : 15 % ou 30 % chez Apple selon vos gains annuels, 15 % puis 30 % chez Google dans les marchés hors Australie, Espace économique européen, Japon, Royaume-Uni et États-Unis.'],
        ['q' => 'Une application Android suffit-elle en Afrique ?', 'r' => 'Pour une clientèle locale, souvent : Android représente 83,38 % des systèmes mobiles africains en septembre 2026 selon Statcounter. Pour la diaspora en Europe ou une clientèle aisée, l\'iPhone pèse davantage. Une PWA ou un site évitent d\'avoir à choisir.'],
        ['q' => 'Apple peut-il refuser une application qui reprend mon site ?', 'r' => 'Oui. La règle 4.2 des règles de revue demande des fonctions, un contenu et une interface qui dépassent un site reconditionné, et exclut les applications qui sont surtout du marketing ou une collection de liens. Une coque autour du site ne passe pas.'],
        ['q' => 'Les notifications fonctionnent-elles sur une PWA iPhone ?', 'r' => 'Depuis iOS 16.4, oui, mais seulement si l\'utilisateur a ajouté la PWA à l\'écran d\'accueil et accepté une demande de permission déclenchée par une action. Sur Android, elles fonctionnent sans cette étape d\'installation.'],
        ['q' => 'Peut-on encaisser par mobile money dans une application ?', 'r' => 'Oui, par l\'agrégateur de votre choix, intégré par un kit ou une fenêtre web. Pour un service ou un produit physique consommé hors de l\'application, les règles d\'Apple demandent un paiement hors paiement intégré. Pour un contenu numérique débloqué dans l\'application, c\'est le paiement du magasin qui s\'applique.'],
        ['q' => 'Combien de temps dure la publication sur l\'App Store et Google Play ?', 'r' => 'Selon Apple, la moitié des soumissions sont revues en moins de 24 heures et 90 % en moins de 48 heures. Chez Google, un compte personnel récent doit d\'abord réunir 12 testeurs pendant 14 jours, puis attendre une revue de sept jours ou moins.'],
        ['q' => 'Flutter ou React Native : lequel choisir ?', 'r' => 'Les deux produisent une application Android et iOS à partir d\'une base commune. Le choix dépend des compétences de votre prestataire et de vos fonctions, pas d\'un classement général. Cette page ne les départage pas : elle compare le type de produit, pas l\'outil.'],
        ['q' => 'Une application coûte-t-elle plus qu\'un site sur trois ans ?', 'r' => 'Oui, presque toujours : deux plateformes, comptes de développeur (99 dollars par an chez Apple, 25 dollars une fois chez Google), maintenance des versions et validations de magasin s\'additionnent. L\'écart exact dépend du périmètre et se chiffre sur devis ; aucun prix de marché n\'est publié sur cette page.'],
    ],

    'sources' => [
        ['titre' => 'Apple Developer, avantages et coût de l\'Apple Developer Program', 'url' => 'https://developer.apple.com/programs/whats-included/', 'date' => '2026-10-07'],
        ['titre' => 'Apple Developer, App Store Small Business Program', 'url' => 'https://developer.apple.com/app-store/small-business-program/', 'date' => '2026-10-07'],
        ['titre' => 'Apple Developer, délais de la revue des applications', 'url' => 'https://developer.apple.com/distribute/app-review/', 'date' => '2026-10-07'],
        ['titre' => 'Apple Developer, règles de revue de l\'App Store', 'url' => 'https://developer.apple.com/app-store/review/guidelines/', 'date' => '2026-10-07'],
        ['titre' => 'Aide Google Play Console, frais d\'inscription du compte développeur', 'url' => 'https://support.google.com/googleplay/android-developer/answer/6112435', 'date' => '2026-10-07'],
        ['titre' => 'Aide Google Play Console, frais de service de Google Play', 'url' => 'https://support.google.com/googleplay/android-developer/answer/112622', 'date' => '2026-10-07'],
        ['titre' => 'Aide Google Play Console, exigences de test des comptes personnels', 'url' => 'https://support.google.com/googleplay/android-developer/answer/14151465', 'date' => '2026-10-07'],
        ['titre' => 'Statcounter Global Stats, systèmes mobiles en Afrique', 'url' => 'https://gs.statcounter.com/os-market-share/mobile/africa', 'date' => '2026-10-07'],
        ['titre' => 'UIT, Facts and Figures 2025, utilisation d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-07'],
        ['titre' => 'UIT, communiqué sur Facts and Figures 2025 (17 novembre 2025)', 'url' => 'https://www.itu.int/en/mediacentre/Pages/PR-2025-11-17-Facts-and-Figures.aspx', 'date' => '2026-10-07'],
        ['titre' => 'Best Broadband Deals (ex Cable.co.uk), prix mondial de la data mobile', 'url' => 'https://bestbroadbanddeals.co.uk/mobiles/worldwide-data-pricing/', 'date' => '2026-10-07'],
        ['titre' => 'Connecting Africa, mobile money en Afrique subsaharienne en 2025 (d\'après la GSMA)', 'url' => 'https://www.connectingafrica.com/mobile-money/-1-4t-flowed-through-mobile-money-in-sub-saharan-africa-in-2025-gsma', 'date' => '2026-10-07'],
        ['titre' => 'WebKit, Web Push pour les applications web sur iOS et iPadOS', 'url' => 'https://webkit.org/blog/13878/web-push-for-web-apps-on-ios-and-ipados/', 'date' => '2026-10-07'],
        ['titre' => 'web.dev, Learn PWA', 'url' => 'https://web.dev/learn/pwa/', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'services'    => ['application-mobile-android-ios', 'site-vitrine-professionnel', 'application-web-sur-mesure', 'saas-espace-client'],
    ],
];
