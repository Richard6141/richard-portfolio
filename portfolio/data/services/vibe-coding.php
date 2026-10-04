<?php
// ============================================================
// data/services/vibe-coding.php · Pilier « Développement en vibe coding :
// prototypes et MVP livrés vite, code repris proprement » (spec 6.2).
// Nouveau slug, aucune fiche en base : délais donnés comme fourchettes de
// déroulé, prix sur devis (aucun tarif de départ dans la fiche de faits).
// Origine du terme vérifiée le 04/10/2026 : message de Karpathy sur X
// (identifiant 1886192184808149383, horodaté le 2 février 2025 à 23 h 17 UTC ;
// la page de Simon Willison qui le reproduit indique par erreur le 6 février).
// Outils décrits d'après leurs pages officielles ; chiffres externes sourcés.
// Ne paraphrase pas /formation-vibecoding : il y renvoie pour apprendre.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Développement en vibe coding : prototypes et MVP livrés vite, code repris proprement',
    'title'   => 'Vibe coding : MVP livré vite, code repris | Richard SALANON',
    'meta'    => 'Prototype ou MVP construit vite avec Claude Code, Cursor ou Lovable, puis repris en développeur : sécurité, tests, base de données, mise en ligne.',
    'en_bref' => 'Un prototype ou un MVP construit rapidement avec des assistants de code à intelligence artificielle (Claude Code, Cursor, GitHub Copilot, Lovable, Bolt, v0), puis repris par un développeur avant d\'accueillir de vrais utilisateurs : relecture, sécurité, tests, base de données, déploiement et documentation ; le service couvre aussi le sauvetage d\'une application déjà générée qui ne tient plus. Il s\'adresse aux fondateurs, PME, écoles, ONG et équipes métier d\'Afrique francophone, d\'Europe et du Canada qui veulent tester une idée sans engager tout de suite le budget d\'un logiciel complet. Comptez en général 1 à 2 semaines pour un prototype de démonstration, 4 à 8 semaines pour un MVP repris et mis en ligne, et environ une semaine pour l\'audit d\'une application existante. Le prix est fixé sur devis, après un premier échange.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Applications et IA',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '1 à 2 semaines pour un prototype, 4 à 8 semaines pour un MVP repris'],
        ['l' => 'Pour qui', 'v' => 'Fondateurs, PME, écoles, ONG, et auteurs d\'une application générée qui ne tient plus'],
        ['l' => 'Livrables', 'v' => 'Code dans votre dépôt Git, rapport de reprise, tests, application en ligne, documentation'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre ce service de vibe coding, et où s\'arrête-t-il ?',
            'paragraphes' => [
                'Le service tient en deux temps. D\'abord, construire vite : un écran cliquable, puis une première version utilisable, en faisant écrire l\'essentiel du code par un assistant d\'IA guidé pas à pas. Ensuite, reprendre ce code comme le ferait n\'importe quel développeur avant une mise en service : le lire, le ranger, fermer les accès qui ne devraient pas exister, écrire les tests, poser une vraie base de données, déployer sur un hébergement maîtrisé et documenter. Le premier temps sert à apprendre vite ce que veulent vos utilisateurs ; le second, à ne pas leur confier une application fragile.',
                'Un troisième cas arrive de plus en plus souvent : le sauvetage. Un dirigeant, un enseignant ou un commercial a construit seul son outil sur Lovable, Bolt ou v0, il fonctionne, des collègues ou des clients s\'en servent, puis chaque nouvelle demande à l\'assistant casse une autre partie. Le travail consiste alors à récupérer le code, à établir un diagnostic écrit, à sécuriser ce qui expose des données, puis à décider avec vous s\'il faut consolider, reprendre en partie ou reconstruire.',
                'Le service ne couvre pas tout. Un logiciel de gestion central, avec des années de vie devant lui et des règles métier lourdes, relève d\'une <a href="/services/application-web-sur-mesure">application web sur mesure</a> conçue comme telle dès le départ. Ajouter une fonction d\'IA à un logiciel qui existe déjà, comme la lecture de factures ou la recherche dans vos documents, relève de l\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. Et si vous voulez apprendre à pratiquer vous-même, la <a href="/formation-vibecoding">formation au vibecoding</a> est faite pour cela : ici, c\'est le résultat qui est livré, pas la méthode enseignée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'D\'où vient l\'expression « vibe coding », et que disait vraiment Andrej Karpathy ?',
            'paragraphes' => [
                'Le mot a été lancé par Andrej Karpathy, ancien directeur de l\'IA chez Tesla et membre fondateur d\'OpenAI, dans un <a href="https://x.com/karpathy/status/1886192184808149383">message publié sur X le 2 février 2025</a>. Il y décrit « une nouvelle façon de coder » où l\'on « se laisse porter », jusqu\'à « oublier que le code existe ». Il précise sa pratique : il accepte toutes les modifications proposées, ne lit plus les différences, colle les messages d\'erreur sans commentaire, et reconnaît que le code dépasse ce qu\'il comprend d\'habitude. Sa conclusion tient en une phrase, citée en entier par <a href="https://simonwillison.net/2025/Mar/19/vibe-coding/">Simon Willison le 19 mars 2025</a> : c\'est « pas mal pour des projets jetables du week-end ».',
                'L\'expression a ensuite quitté le cercle des développeurs. Le 6 novembre 2025, selon une dépêche de l\'agence PA reprise par <a href="https://www.irishnews.com/news/uk/collins-word-of-the-year-for-2025-revealed-NC3TDYDUVNIIRB4SCZVZMTJXKU">The Irish News</a>, le dictionnaire Collins a fait de « vibe coding » son mot de l\'année 2025, défini comme un développement logiciel qui transforme le langage naturel en code informatique grâce à l\'IA. Les lexicographes de Collins y notent une très forte hausse d\'usage depuis son apparition en février.',
                'Karpathy a lui-même mis des limites à sa formule. Dans un billet de son blog daté du 27 avril 2025, <a href="https://karpathy.bearblog.dev/vibe-coding-menugen/">consacré à son application MenuGen</a>, il raconte que le prototype local lui a demandé peu de temps, mais que l\'essentiel du travail s\'est passé ailleurs : dans les réglages d\'hébergement, d\'authentification, de paiement et de clés d\'API. Il y relève qu\'un assistant a voulu rapprocher les paiements Stripe des comptes par l\'adresse e-mail, alors que l\'adresse saisie au paiement peut différer de celle du compte. Sa conclusion : construire ainsi une application web complète reste « assez brouillon » et « pas une bonne idée pour quoi que ce soit d\'important ».',
                'C\'est exactement l\'écart que ce service comble. Simon Willison, dans le même article, distingue le vibe coding du développement assisté par IA : quand le code produit est relu, testé et compris, ce n\'est plus du vibe coding, c\'est du développement logiciel. Le prototype peut naître « aux vibes » ; ce qui part chez vos clients doit avoir été lu par quelqu\'un capable de l\'expliquer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes voit-on que le vibe coding convient à votre projet, ou qu\'une reprise s\'impose ?',
            'intro' => 'Construire vite avec l\'IA rapporte quand l\'incertitude porte sur l\'usage plus que sur la technique. La reprise devient urgente dès que de vraies personnes confient de vraies données à l\'outil. Les situations ci-dessous reviennent dans la plupart des demandes.',
            'items' => [
                ['titre' => 'Une idée à confronter au terrain avant d\'investir', 'texte' => 'Vous pensez qu\'un portail de commande, un outil de réservation ou un tableau de suivi ferait gagner du temps, sans savoir si les équipes ou les clients l\'adopteront. Un prototype montré à dix utilisateurs tranche plus vite qu\'un cahier des charges de quarante pages.'],
                ['titre' => 'Une démonstration à présenter', 'texte' => 'Un partenaire, un investisseur, un comité de sélection ou un bailleur veut voir quelque chose qui fonctionne, pas des maquettes. Un prototype construit sur des données fictives suffit, à condition d\'être présenté pour ce qu\'il est.'],
                ['titre' => 'Un petit outil interne que personne ne développera', 'texte' => 'Générateur de reçus, suivi des véhicules, calculateur de devis : le besoin est réel, mais trop modeste pour un projet classique. Construit vite puis relu, il peut rendre service des années.'],
                ['titre' => 'Une application générée qui a trouvé ses utilisateurs', 'texte' => 'L\'outil fait sur Lovable, Bolt ou v0 a quitté le stade de l\'essai : des clients s\'y inscrivent, des paiements y passent. C\'est le moment de vérifier qui peut lire quoi dans la base, avant que quelqu\'un d\'autre ne le fasse.'],
                ['titre' => 'Chaque correction en provoque une autre', 'texte' => 'Vous demandez à l\'assistant de réparer un formulaire, et c\'est la page d\'accueil qui casse. Ce cercle signale un code sans structure ni tests ; il ne se résout pas par une consigne de plus.'],
                ['titre' => 'Personne ne sait plus expliquer le code', 'texte' => 'L\'auteur du prototype est parti, ou n\'a jamais lu ce que l\'outil écrivait. Aucune évolution sérieuse n\'est possible tant que quelqu\'un n\'a pas cartographié l\'application.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Données de santé, dossiers d\'élèves mineurs, calculs de paie ou de taxes, forte charge dès le premier jour : le prototype rapide reste utile pour valider l\'interface, mais le produit doit être conçu et vérifié comme un logiciel critique, pas repris après coup.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Claude Code, Cursor, Copilot, Lovable, Bolt ou v0 : quel outil pour quelle étape ?',
            'options'  => ['Claude Code', 'Cursor', 'GitHub Copilot', 'Lovable', 'Bolt', 'v0'],
            'criteres' => [
                ['critere' => 'Ce que dit la page officielle', 'valeurs' => ['Outil de codage agentique qui lit le code, modifie les fichiers et lance des commandes', 'Agent de code pour comprendre un dépôt, planifier, corriger et relire', 'Assistant intégré à GitHub et aux éditeurs, du code tapé à la revue de requêtes', 'Plateforme qui génère des applications web complètes à partir de langage naturel', 'Outil qui construit sites et applications, base de données et publication comprises', 'Agent de Vercel qui produit interfaces et applications, déployées en un clic']],
                ['critere' => 'Où il s\'utilise', 'valeurs' => ['Terminal, extensions d\'éditeur, application de bureau, navigateur', 'Éditeur de code, avec intégrations GitHub, GitLab, Slack ou Linear', 'Éditeurs, ligne de commande, GitHub.com', 'Navigateur', 'Navigateur', 'Navigateur']],
                ['critere' => 'Point de départ idéal', 'valeurs' => ['Code existant à reprendre, tests à écrire, tâches répétitives', 'Code existant, travail fichier par fichier', 'Dépôt déjà hébergé sur GitHub', 'Idée sans code, premier prototype', 'Idée sans code, site ou petit outil', 'Interface React ou Next.js à partir d\'une maquette']],
                ['critere' => 'Récupération du code', 'valeurs' => ['Le code est déjà dans votre dépôt', 'Le code est déjà dans votre dépôt', 'Le code est déjà dans votre dépôt', 'Synchronisation avec GitHub, GitLab ou Bitbucket', 'Export du projet', 'Requête de fusion ouverte sur votre dépôt']],
                ['critere' => 'Rôle conseillé dans ce service', 'valeurs' => ['Reprise, tests, refactorisation, revue', 'Reprise et évolutions', 'Complétion et revue au quotidien', 'Prototype à montrer', 'Prototype à montrer', 'Écrans du prototype']],
            ],
            'verdict'  => 'Les outils qui partent d\'une page blanche dans le navigateur sont imbattables pour montrer une idée en quelques jours ; ceux qui travaillent dans votre dépôt servent à la reprise, parce qu\'ils obligent à tout faire passer par Git, par des différences relues et par des tests. Le choix se fait projet par projet, et le code doit toujours finir dans un dépôt à votre nom.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le choix de l\'outil compte-t-il moins que la relecture ?',
            'paragraphes' => [
                'Les éditeurs le disent eux-mêmes. La <a href="https://docs.github.com/en/copilot/get-started/what-is-github-copilot">documentation de GitHub Copilot</a> rappelle que l\'utilisateur reste responsable de relire et d\'approuver le travail de l\'assistant. La <a href="https://code.claude.com/docs/en/security">page de sécurité de Claude Code</a> écrit que c\'est à vous de vérifier le code et les commandes proposés avant de les approuver. La <a href="https://docs.lovable.dev/features/security">page de sécurité de Lovable</a> va plus loin : ses analyses automatiques aident à repérer les problèmes courants mais « ne peuvent pas garantir une sécurité complète », et une application qui traite des données sensibles mérite une revue de sécurité professionnelle supplémentaire.',
                'Les mesures indépendantes vont dans le même sens. En juillet 2025, l\'organisme de recherche <a href="https://metr.org/blog/2025-07-10-early-2025-ai-experienced-os-dev-study/">METR</a> a suivi 16 développeurs expérimentés sur 246 tâches de leurs propres projets : avec les outils d\'IA, ils ont mis 19 % de temps en plus, alors qu\'ils s\'attendaient à gagner 24 % et croyaient encore, après coup, avoir accéléré de 20 %. L\'étude porte sur des experts dans un code qu\'ils connaissaient bien ; elle ne dit pas que l\'IA ralentit tout le monde, elle dit que l\'impression de vitesse ne vaut pas mesure.',
                'L\'<a href="https://survey.stackoverflow.co/2025/ai">enquête 2025 de Stack Overflow auprès des développeurs</a> donne la même image : 84 % des répondants utilisent ou prévoient d\'utiliser des outils d\'IA, mais 46 % se méfient de l\'exactitude de leurs réponses, contre 33 % qui leur font confiance. La première frustration citée, par 66 % d\'entre eux, concerne des solutions « presque justes, mais pas tout à fait ». Et 72,2 % déclarent que le vibe coding ne fait pas partie de leur travail professionnel. L\'outil accélère l\'écriture ; la vérification, elle, ne s\'automatise pas.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet, du prototype généré au code repris et mis en ligne ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l\'idée, les personnes qui s\'en serviront, les données en jeu et l\'échéance. Si une application existe déjà, vous donnez son adresse et, si possible, un accès au code. On sait dès cet échange s\'il s\'agit d\'un prototype, d\'un MVP ou d\'un sauvetage.'],
                ['titre' => 'Fiche produit d\'une page', 'duree' => '2 à 4 jours', 'texte' => 'Les trois à cinq parcours qui comptent sont écrits noir sur blanc : qui se connecte, ce qu\'il voit, ce qu\'il peut modifier, ce qui doit rester interdit. Cette fiche sert ensuite de consigne aux assistants et de grille de recette ; sans elle, l\'IA invente les règles à votre place.'],
                ['titre' => 'Prototype généré', 'duree' => '3 à 10 jours ouvrés', 'texte' => 'Les écrans sont produits avec l\'outil le plus adapté, sur des données fictives, avec un premier dépôt Git dès le premier jour. Le prototype se montre en ligne sur une adresse de démonstration, jamais avec les données réelles de vos clients.'],
                ['titre' => 'Essais avec de vrais utilisateurs', 'duree' => '1 à 2 semaines, de votre côté', 'texte' => 'Quelques personnes représentatives s\'en servent devant vous ou à distance. On note ce qu\'elles cherchent sans le trouver, ce qu\'elles ignorent, ce qu\'elles demandent. C\'est cette étape qui justifie tout le reste : beaucoup de fonctions prévues disparaissent ici.'],
                ['titre' => 'Décision écrite', 'duree' => '1 jour', 'texte' => 'Trois issues possibles : arrêter, ce qui est aussi un résultat ; consolider le code généré ; ou le reconstruire sur une base propre en gardant les écrans validés. La décision s\'appuie sur un état du code chiffré, pas sur l\'attachement au prototype.'],
                ['titre' => 'Reprise du code', 'duree' => '1 à 4 semaines', 'texte' => 'Structure des dossiers, base de données avec migrations, contrôle d\'accès côté serveur, secrets sortis du code, dépendances vérifiées, gestion des erreurs, données personnelles réduites au nécessaire. Chaque modification passe par une branche, une différence relue et une requête de fusion.'],
                ['titre' => 'Tests et recette', 'duree' => 'Environ 1 semaine', 'texte' => 'Tests automatisés sur les parcours de la fiche produit, y compris les accès qui doivent échouer : un client qui tente d\'ouvrir la commande d\'un autre doit recevoir un refus. Vous déroulez ensuite la recette sur un environnement de test.'],
                ['titre' => 'Mise en ligne', 'duree' => '2 à 5 jours', 'texte' => 'Hébergement à votre nom, variables d\'environnement, nom de domaine, certificat, sauvegardes testées par une restauration réelle, journal des erreurs. Les comptes de l\'outil de génération, de la base et de l\'hébergeur vous sont remis.'],
                ['titre' => 'Suivi', 'duree' => 'Premières semaines, puis à la demande', 'texte' => 'Les premiers vrais usages révèlent toujours des cas oubliés. Ils sont corrigés en priorité ; la <a href="/services/maintenance-support">maintenance</a> prend ensuite le relais pour les mises à jour de dépendances et les évolutions.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que contrôle la reprise d\'un code généré par IA, point par point ?',
            'legende' => 'Défauts rencontrés le plus souvent dans les applications générées et mesures de reprise ; la dernière colonne renvoie aux catégories de l\'OWASP Top 10:2025 consultées le 4 octobre 2026.',
            'entetes' => ['Point contrôlé', 'Ce que l\'on trouve souvent', 'Ce que fait la reprise', 'OWASP 2025'],
            'lignes'  => [
                ['Secrets', 'Clé d\'API d\'un service d\'IA ou de paiement écrite en clair dans un fichier envoyé au navigateur, fichier .env publié dans le dépôt', 'Secrets déplacés côté serveur, clés exposées révoquées puis régénérées, historique Git nettoyé, détection automatique avant chaque envoi', 'A02, A04'],
                ['Contrôle d\'accès', 'Vérification faite seulement dans l\'interface : le bouton est caché, mais la requête passe', 'Règles appliquées côté serveur ou dans la base, test de chaque accès interdit', 'A01'],
                ['Règles de la base', 'Tables Supabase sans politique de sécurité au niveau des lignes, ou politique qui autorise tout le monde', 'Activation des règles sur chaque table exposée, politiques par rôle, essai avec un compte anonyme', 'A01'],
                ['Injections', 'Requête SQL assemblée avec la saisie de l\'utilisateur, texte affiché sans échappement', 'Requêtes paramétrées, validation de chaque entrée, échappement à l\'affichage', 'A05'],
                ['Dépendances', 'Bibliothèque au nom inventé, abandonnée, ou dans une version vulnérable', 'Vérification de l\'existence et de l\'éditeur de chaque paquet, versions verrouillées, audit npm ou Composer', 'A03'],
                ['Authentification', 'Réinitialisation de mot de passe sans expiration, rôle administrateur stocké côté client', 'Fournisseur d\'identité éprouvé, sessions qui expirent, double authentification des administrateurs', 'A07'],
                ['Paiement', 'Commande validée sur simple retour du navigateur, notification de paiement acceptée sans vérification', 'Statut confirmé auprès du prestataire, signature des notifications vérifiée, traitement idempotent', 'A08'],
                ['Erreurs', 'Trace technique complète affichée à l\'utilisateur, données enregistrées à moitié', 'Messages neutres, transactions, journal des erreurs consultable', 'A10, A09'],
                ['Base de données', 'Schéma modifié à la main, sans historique, sans index, sans sauvegarde', 'Migrations versionnées, index sur les recherches fréquentes, sauvegarde restaurée au moins une fois', 'A02'],
                ['Maintenabilité', 'Fichiers de plusieurs milliers de lignes, logique copiée dix fois, code mort', 'Découpage en modules, suppression du code inutile, conventions écrites pour les prochaines sessions avec l\'IA', 'A06'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels risques de sécurité sont propres au code écrit par une IA ?',
            'paragraphes' => [
                'Le premier est la fréquence des failles. Le <a href="https://www.veracode.com/resources/analyst-reports/2025-genai-code-security-report/">rapport 2025 de Veracode sur la sécurité du code généré</a>, mis à jour en octobre 2025, a testé plus de 100 grands modèles de langage en Java, JavaScript, Python et C# : le code produit introduisait des failles de sécurité dans 45 % des tests, et les modèles plus grands ou plus récents ne faisaient pas mieux. Un assistant écrit un code qui marche ; rien ne garantit qu\'il écrive un code qui résiste.',
                'Le deuxième est propre aux modèles de langage : les dépendances inventées. Une étude présentée au symposium USENIX Security 2025, « <a href="https://www.usenix.org/conference/usenixsecurity25/presentation/spracklen">We Have a Package for You!</a> », a analysé 576 000 extraits de code produits par 16 modèles : au moins 5,2 % des paquets recommandés par les modèles commerciaux n\'existaient pas, et 21,7 % pour les modèles ouverts, soit 205 474 noms inventés distincts. Un attaquant peut publier un paquet malveillant sous l\'un de ces noms et attendre qu\'un assistant le recommande. L\'<a href="https://genai.owasp.org/llmrisk/llm092025-misinformation/">OWASP range ce danger dans la désinformation (LLM09:2025)</a>, en citant les bibliothèques non sûres ou inexistantes suggérées par les modèles.',
                'Le troisième est la fuite de secrets. Le <a href="https://www.gitguardian.com/state-of-secrets-sprawl-report-2026">rapport 2026 de GitGuardian sur la dispersion des secrets</a> compte 28 649 024 nouveaux secrets détectés dans les commits publics de GitHub en 2025, en hausse de 34 % sur un an, dont 1 275 105 identifiants de services d\'IA, en hausse de 81 %. Le même rapport observe que les commits co-signés par Claude Code exposent des secrets environ deux fois plus souvent que la moyenne des commits publics, et relève 24 008 secrets dans des fichiers de configuration MCP. La <a href="https://docs.github.com/en/code-security/secret-scanning/introduction/about-push-protection">protection à l\'envoi de GitHub</a> bloque ces envois avant qu\'ils n\'atteignent le dépôt ; elle est active par défaut pour les comptes personnels, mais désactivée par défaut au niveau des dépôts.',
                'Le quatrième tient aux plateformes elles-mêmes. Le <a href="https://nvd.nist.gov/vuln/detail/CVE-2025-48757">registre américain des vulnérabilités</a> a publié le 30 mai 2025 la faille CVE-2025-48757, notée 9,3 sur 10 : des règles de sécurité au niveau des lignes insuffisantes dans les applications générées par Lovable jusqu\'au 15 avril 2025 permettaient à un attaquant non authentifié de lire ou d\'écrire dans leurs tables. Lovable conteste la qualification, au motif que chaque client reste responsable de la protection des données de son application. Que l\'on donne raison à l\'un ou à l\'autre, la conclusion pratique est la même : quelqu\'un doit vérifier ces règles, application par application.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Une clé visible dans le navigateur est-elle forcément une faille ?',
            'texte' => 'Pas toujours, et c\'est ce qui trompe. Une application Supabase envoie au navigateur une clé publique : c\'est prévu. Ce qui protège les données, ce sont les règles de sécurité au niveau des lignes, que la <a href="https://supabase.com/docs/guides/database/postgres/row-level-security">documentation de Supabase</a> demande d\'activer « sur chaque table d\'un schéma exposé » ; une fois activées, aucune donnée n\'est accessible avec la clé publique tant qu\'aucune politique ne l\'autorise. La clé secrète, elle, contourne ces règles, et la même documentation interdit de l\'utiliser dans le navigateur. Une application générée qui fonctionne parfaitement peut donc laisser toute sa base ouverte : seul un essai avec un compte anonyme, table par table, le révèle.',
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Faut-il consolider le code généré, le reprendre en partie ou tout reconstruire ?',
            'options'  => ['Consolider', 'Reprendre en partie', 'Reconstruire'],
            'criteres' => [
                ['critere' => 'État du code constaté à l\'audit', 'valeurs' => ['Structure lisible, peu de duplication, base cohérente', 'Écrans bons, logique et données fragiles', 'Code incompréhensible, failles partout, aucune base saine']],
                ['critere' => 'Ce que l\'on garde', 'valeurs' => ['Presque tout', 'Les écrans et les parcours validés', 'La fiche produit, les maquettes et les leçons des essais']],
                ['critere' => 'Travail principal', 'valeurs' => ['Sécurité, tests, déploiement', 'Nouvelle couche serveur, nouvelle base, migration des données', 'Nouvelle application, souvent avec les mêmes assistants mieux guidés']],
                ['critere' => 'Données réelles déjà présentes', 'valeurs' => ['Conservées sur place', 'Migrées avec contrôle des totaux', 'Exportées puis réimportées']],
                ['critere' => 'Risque principal', 'valeurs' => ['Laisser passer un défaut caché', 'Sous-estimer les liens entre l\'ancien et le nouveau code', 'Vouloir ajouter des fonctions pendant la reconstruction']],
            ],
            'verdict'  => 'La décision se prend après l\'audit, chiffres et exemples à l\'appui, et jamais par principe. Reconstruire n\'est pas un échec : quand le prototype a servi à découvrir ce que voulaient les utilisateurs, il a rempli son rôle, et la seconde version se construit beaucoup plus vite que la première.',
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que recevez-vous concrètement à la fin du projet ?',
            'items' => [
                'Le code source complet dans un dépôt Git ouvert à votre nom, avec un historique de modifications lisible.',
                'La fiche produit d\'une page qui décrit les parcours, les rôles et les interdits, mise à jour à la livraison.',
                'Un rapport de reprise : défauts trouvés, gravité, correction apportée, et ce qui reste volontairement hors du périmètre.',
                'Les tests automatisés des parcours principaux et des accès interdits, avec la commande pour les relancer.',
                'Le schéma de la base de données, ses migrations versionnées et une procédure de sauvegarde testée par une restauration.',
                'L\'application en ligne sur un hébergement à votre nom, avec nom de domaine, certificat et journal des erreurs.',
                'La liste des comptes et des services utilisés (outil de génération, base, hébergement, paiement, IA), tous ouverts au nom de votre entreprise.',
                'Les fichiers de consignes du projet pour les assistants de code, afin que la prochaine session avec l\'IA respecte les mêmes règles.',
                'Une documentation courte : installation, variables d\'environnement, déploiement, et premiers gestes en cas d\'incident.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles technologies pour reprendre un prototype, et pourquoi celles-là ?',
            'legende' => 'Choix de départ, revus au cadrage selon ce que l\'outil de génération a produit et selon les compétences de l\'équipe qui maintiendra l\'application.',
            'entetes' => ['Brique', 'Ce que produisent souvent les outils', 'Choix à la reprise', 'Raison'],
            'lignes'  => [
                ['Interface', 'React, souvent avec Vite ou Next.js', 'React conservé s\'il est propre ; Vue.js pour une interface reconstruite', 'Garder ce qui est validé par les utilisateurs, éviter une réécriture gratuite'],
                ['Logique serveur', 'Appels directs à la base depuis le navigateur, fonctions dispersées', 'Laravel et PHP, ou Node.js ; Flask pour un traitement en Python', 'Les règles métier et les contrôles d\'accès vivent côté serveur, testables'],
                ['Base de données', 'PostgreSQL hébergé par Supabase ou par la plateforme', 'PostgreSQL conservé avec règles d\'accès revues, ou MySQL sur un hébergement maîtrisé', 'Partir des données déjà là, ajouter migrations, index et sauvegardes'],
                ['Authentification', 'Service fourni par la plateforme', 'Service conservé s\'il est bien configuré, ou authentification de Laravel', 'Ne jamais réécrire seul une brique de sécurité qui existe déjà'],
                ['Application mobile', 'Rarement générée correctement', 'Flutter, quand le mobile est vraiment nécessaire', 'Une seule base de code pour Android et iOS'],
                ['Automatisations', 'Scripts éparpillés, tâches lancées à la main', 'n8n ou Make', 'Relier l\'application à WhatsApp, aux tableurs ou au paiement sans multiplier le code'],
                ['Gestion du code', 'Parfois aucune, ou un dépôt sans branches', 'Git, avec branches, requêtes de fusion et protection à l\'envoi', 'Pouvoir revenir en arrière et confier le projet à quelqu\'un d\'autre'],
                ['Tests', 'Aucun, le plus souvent', 'PHPUnit ou Pest côté Laravel, tests de bout en bout dans le navigateur', 'Prouver que les accès interdits restent interdits après chaque modification'],
                ['Assistants de code', 'Outil unique utilisé sans consignes', 'Agent dans le dépôt, avec fichier de règles et relecture humaine', 'L\'IA reste utile après la reprise, à condition de travailler dans un cadre'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble ce service selon votre secteur ?',
            'items' => [
                ['secteur' => 'Jeune entreprise de livraison, Cotonou ou Lomé', 'probleme' => 'Le fondateur doit montrer à un partenaire une application de suivi de courses, sans budget pour un développement complet avant d\'avoir signé.', 'solution' => 'Prototype généré en quelques jours sur des données fictives : écran client, écran livreur, suivi de statut. Après accord, reprise avec une vraie base, des rôles vérifiés côté serveur et le paiement par mobile money ajouté en second palier, notifications vérifiées.'],
                ['secteur' => 'École privée, Abidjan ou Dakar', 'probleme' => 'Le directeur a construit seul sur une plateforme de génération un outil de notes et de suivi des frais de scolarité ; les parents s\'y connectent, et personne n\'a vérifié qui voit quoi.', 'solution' => 'Audit en priorité des accès : un parent ne doit voir que ses enfants, un enseignant que ses classes. Règles de la base corrigées, données d\'élèves mineurs réduites au nécessaire, sauvegardes mises en place, puis consolidation du code.'],
                ['secteur' => 'Distribution et commerce, Afrique de l\'Ouest', 'probleme' => 'Les revendeurs commandent par messages vocaux et captures d\'écran ; le gérant veut un portail de commande, sans savoir si ses clients l\'utiliseront.', 'solution' => 'Prototype de portail montré à quelques revendeurs, ajusté après leurs retours, puis MVP repris : catalogue relié au stock, historique par revendeur, accusé de réception par WhatsApp grâce à une <a href="/services/integration-whatsapp">intégration WhatsApp</a>.'],
                ['secteur' => 'ONG et projets de terrain', 'probleme' => 'Les équipes collectent des données de bénéficiaires dans des tableurs, et un salarié a généré un tableau de bord qui lit ces fichiers sans contrôle d\'accès.', 'solution' => 'Tableau de bord gardé pour son interface, données déplacées dans une base avec des droits par projet et par bailleur, formulaires de collecte légers pour les zones à faible connexion, journal des consultations.'],
                ['secteur' => 'PME de services, France ou Belgique', 'probleme' => 'Un associé a construit un espace client avec un outil en ligne ; il plaît, mais les clients y déposent des documents personnels et le code n\'est relu par personne.', 'solution' => 'Code récupéré dans un dépôt de l\'entreprise, audit de sécurité, stockage des fichiers revu, contrat de sous-traitance prévu par le RGPD signé avec le prestataire de reprise, puis mise en ligne sur un hébergement européen.'],
                ['secteur' => 'Cabinet ou association, Suisse ou Canada', 'probleme' => 'Un outil interne de prise de rendez-vous ou d\'inscription est nécessaire pour la rentrée, et le devis d\'un développement classique dépasse le budget.', 'solution' => 'MVP construit vite autour d\'un seul parcours, repris avant l\'ouverture aux usagers, avec tests sur les cas limites (doublons, annulations, créneaux complets) et passage à un système de réservation en ligne plus complet si l\'usage grandit.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un prototype, un MVP ou un sauvetage, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun forfait n\'est publié pour ce service : les seuls tarifs de départ affichés sur ce site concernent la landing page, le site vitrine et le référencement naturel. Chaque prestation se chiffre sur devis, après un premier échange ou un audit. Les abonnements aux outils restent à part et se paient en dollars par carte : au 4 octobre 2026, la <a href="https://cursor.com/pricing">page tarifs de Cursor</a> affiche un plan Pro à 20 dollars par mois, et la <a href="https://github.com/features/copilot/plans">page des plans de GitHub Copilot</a> un plan gratuit limité à 2 000 complétions par mois et un plan Pro à 10 dollars par mois. La prestation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Prototype de démonstration', 'prix' => 'Sur devis', 'inclus' => ['Fiche produit d\'une page', 'Écrans générés sur données fictives', 'Mise en ligne sur une adresse de démonstration', 'Dépôt Git à votre nom dès le premier jour']],
                ['offre' => 'MVP repris et mis en ligne', 'prix' => 'Sur devis', 'inclus' => ['Prototype, essais et décision écrite', 'Reprise du code, base et contrôle d\'accès', 'Tests des parcours et des accès interdits', 'Hébergement, sauvegardes et documentation']],
                ['offre' => 'Audit d\'une application générée', 'prix' => 'Sur devis', 'inclus' => ['Récupération du code et cartographie', 'Essais d\'accès anonymes table par table', 'Rapport des défauts classés par gravité', 'Recommandation : consolider, reprendre ou reconstruire']],
                ['offre' => 'Sauvetage', 'prix' => 'Sur devis', 'inclus' => ['Fermeture immédiate des failles critiques', 'Révocation et rotation des clés exposées', 'Consolidation ou reconstruction selon l\'audit', 'Migration des données réelles avec contrôle']],
            ],
            'variations' => [
                'Le point de départ : une idée, un prototype existant, ou une application déjà utilisée par de vrais clients.',
                'Le nombre de rôles et de parcours (client, livreur, administrateur, comptable) à sécuriser et à tester.',
                'La nature des données : coordonnées simples, ou données sensibles comme la santé, les élèves mineurs, les documents d\'identité.',
                'Le paiement : aucun, carte, ou mobile money avec notifications à vérifier.',
                'L\'état du code généré, qui décide entre consolidation, reprise partielle et reconstruction.',
                'Les intégrations : WhatsApp, automatisations n8n ou Make, logiciel de gestion existant.',
                'L\'hébergement retenu et la migration éventuelle hors de la plateforme de génération.',
                'Le suivi souhaité après la mise en ligne.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer un projet construit avec l\'IA ?',
            'intro' => 'Ces erreurs ne tiennent pas à l\'outil choisi. Elles viennent de décisions prises, ou évitées, pendant les premiers jours, et coûtent ensuite plusieurs semaines de reprise.',
            'items' => [
                ['titre' => 'Brancher les vraies données dès le prototype', 'texte' => 'Importer le fichier clients « pour que ce soit plus parlant » transforme une démonstration en traitement de données personnelles, avec toutes les obligations qui vont avec. Un prototype vit sur des données fictives.'],
                ['titre' => 'Laisser l\'assistant choisir l\'architecture', 'texte' => 'Sans consigne, l\'outil empile tout dans le navigateur, y compris des règles qui devraient être vérifiées sur le serveur. Fixer dès le départ où vivent les données et les contrôles évite la moitié des corrections.'],
                ['titre' => 'Installer un paquet parce que l\'IA l\'a proposé', 'texte' => 'Un nom de bibliothèque plausible n\'est pas une preuve d\'existence, ni de sérieux. Chaque dépendance se vérifie : registre officiel, éditeur, date de dernière version, nombre de téléchargements.'],
                ['titre' => 'Prendre l\'analyse intégrée pour un audit', 'texte' => 'Les scanners des plateformes repèrent des défauts courants, et leurs éditeurs écrivent eux-mêmes qu\'ils ne garantissent pas une sécurité complète. Ils ne connaissent pas vos règles : qu\'un parent ne voie que ses enfants, par exemple.'],
                ['titre' => 'Corriger par consignes en boucle', 'texte' => 'Coller l\'erreur, accepter la correction, recommencer : c\'est la méthode décrite par Karpathy pour des projets jetables. Sur une application utilisée, chaque tour peut réintroduire un défaut déjà corrigé. Au troisième tour sans résultat, on lit le code.'],
                ['titre' => 'Tout laisser au nom de l\'auteur du prototype', 'texte' => 'Compte de la plateforme, base de données, nom de domaine, clés de paiement ouverts sur l\'adresse personnelle d\'un salarié ou d\'un prestataire : le jour où il part, l\'entreprise perd la main sur son propre outil.'],
                ['titre' => 'Ajouter le paiement la veille du lancement', 'texte' => 'L\'argent est la partie la moins tolérante de l\'application : notifications à vérifier, cas d\'échec, remboursements, rapprochement avec les commandes. Il se construit et se teste à part, jamais dans la précipitation.'],
                ['titre' => 'Ne pas écrire ce qui doit être interdit', 'texte' => 'Une fiche produit qui ne décrit que ce que l\'utilisateur peut faire laisse l\'assistant décider du reste. Les interdits écrits deviennent des tests ; les interdits oubliés deviennent des failles.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui ne doit jamais partir en production sans avoir été repris ?',
            'texte' => 'Tout ce qui touche à l\'argent (paiements, remboursements, soldes), aux identités (connexion, réinitialisation de mot de passe, rôles d\'administrateur), aux données sensibles (santé, élèves mineurs, pièces d\'identité, salaires), aux calculs qui engagent l\'entreprise (taxes, factures, paie) et aux envois en masse (messages WhatsApp, courriels, SMS). Une seule règle : si une erreur dans cette partie peut faire perdre de l\'argent, exposer une personne ou engager votre responsabilité, un développeur doit avoir lu le code, écrit les tests et vérifié les accès avant la première vraie utilisation.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres publiés retenir avant de confier son code à une IA ?',
            'items' => [
                ['valeur' => '45 %', 'libelle' => 'Part des tests où le code généré par plus de 100 modèles introduisait une faille de sécurité (mise à jour d\'octobre 2025)', 'source' => 'Veracode, rapport 2025 sur la sécurité du code généré', 'url' => 'https://www.veracode.com/resources/analyst-reports/2025-genai-code-security-report/'],
                ['valeur' => '205 474', 'libelle' => 'Noms de paquets inventés distincts relevés dans 576 000 extraits de code produits par 16 modèles', 'source' => 'Spracklen et al., USENIX Security 2025', 'url' => 'https://www.usenix.org/conference/usenixsecurity25/presentation/spracklen'],
                ['valeur' => '28 649 024', 'libelle' => 'Nouveaux secrets détectés dans les commits publics de GitHub en 2025, en hausse de 34 % sur un an', 'source' => 'GitGuardian, State of Secrets Sprawl 2026', 'url' => 'https://www.gitguardian.com/state-of-secrets-sprawl-report-2026'],
                ['valeur' => '+19 %', 'libelle' => 'Temps supplémentaire mis par 16 développeurs expérimentés avec les outils d\'IA, sur 246 tâches de leurs propres projets', 'source' => 'METR, étude publiée le 10 juillet 2025', 'url' => 'https://metr.org/blog/2025-07-10-early-2025-ai-experienced-os-dev-study/'],
                ['valeur' => '72,2 %', 'libelle' => 'Développeurs interrogés pour qui le vibe coding ne fait pas partie de leur travail professionnel', 'source' => 'Stack Overflow, enquête 2025 auprès des développeurs', 'url' => 'https://survey.stackoverflow.co/2025/ai'],
                ['valeur' => '9,3 sur 10', 'libelle' => 'Gravité de la faille CVE-2025-48757 sur les règles d\'accès des applications générées par Lovable, contestée par l\'éditeur', 'source' => 'NIST, National Vulnerability Database', 'url' => 'https://nvd.nist.gov/vuln/detail/CVE-2025-48757'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données personnelles, mobile money, connexion et langue : que change le contexte local ?',
            'paragraphes' => [
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> ne fait aucune différence entre une application écrite à la main et une application générée. Son article 426 oblige le responsable du traitement et son sous-traitant à protéger les données contre la perte, l\'altération et l\'accès non autorisé, par des mesures qui peuvent comprendre le chiffrement, des moyens de rétablir l\'accès aux données après un incident et une procédure pour tester régulièrement l\'efficacité des mesures. L\'article 427 impose de notifier sans délai à l\'Autorité et à la personne concernée toute atteinte à la sécurité de ses données, et au sous-traitant d\'avertir sans délai le responsable. Une table laissée ouverte par un outil de génération entre dans ce cadre.',
                'En Europe, le RGPD, présenté article par article par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, demande une protection des données dès la conception (article 25), un niveau de sécurité adapté au risque (article 32) et la notification d\'une violation à l\'autorité dans les 72 heures au plus tard quand c\'est possible (article 33). Un développeur qui reprend à distance, depuis le Bénin, l\'application d\'une entreprise française ou belge agit comme sous-traitant : un contrat conforme à l\'article 28 s\'impose avant tout accès aux données réelles. Le <a href="https://www.cnil.fr/fr/guide-rgpd-du-developpeur">guide RGPD du développeur de la CNIL</a> rappelle aussi que chaque dépendance ajoutée augmente la surface d\'attaque.',
                'Le paiement demande une attention particulière en Afrique de l\'Ouest. Les agrégateurs de mobile money se branchent par leur API et par des notifications envoyées au serveur de l\'application : c\'est du code à écrire, à signer et à tester, pas un interrupteur à activer dans l\'outil de génération. Une commande ne se valide qu\'après confirmation du statut auprès de l\'agrégateur, et chaque notification se traite une seule fois, même reçue deux fois. Le choix de l\'agrégateur lui-même se prépare avec le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>.',
                'Restent la connexion et la langue. Les applications générées sont souvent lourdes : elles chargent tout le code d\'un coup et s\'arrêtent au premier réseau instable. La reprise allège les pages, met en cache ce qui peut l\'être et prévoit un message clair quand la connexion tombe, plutôt qu\'un écran blanc. Côté langue, les assistants comprennent très bien les consignes en français ; il faut en revanche vérifier ce qu\'ils produisent : textes d\'interface traduits mot à mot, dates au format américain, montants en francs CFA affichés avec des décimales. Ces détails font qu\'un utilisateur de Cotonou ou de Dakar fait confiance à l\'outil, ou non.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre prototype ou votre reprise à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d\'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, tous types confondus, il a travaillé pour des organisations au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Le vibe coding figure parmi ses compétences déclarées, à côté du développement d\'applications web et mobiles : c\'est cette double pratique qui permet de construire vite, puis de lire ce qui a été construit.',
                'Il développe aussi ses propres produits, dont <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il connaît donc les deux côtés : celui qui veut une démonstration pour la semaine prochaine, et celui qui devra maintenir l\'application dans deux ans.',
                'Sa façon de travailler tient en engagements vérifiables : un dépôt Git et des comptes à votre nom dès le premier jour, une décision écrite avant toute reprise, un rapport qui dit ce qui a été corrigé et ce qui ne l\'a pas été, aucune donnée réelle dans un prototype, et une réponse sous 24 heures. Il a formé plus de 200 personnes au numérique ; si votre équipe veut ensuite pratiquer seule, la <a href="/formation-vibecoding">formation vibecoding</a> prend le relais. Son parcours complet figure sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer un projet en vibe coding ?',
            'texte' => 'Construisez vite pour apprendre, jamais pour stocker de vraies données ; écrivez ce qui doit être interdit avant de générer quoi que ce soit ; gardez le code, les comptes et les clés à votre nom ; et faites lire, tester et vérifier par un développeur tout ce qui touche à l\'argent, aux identités ou aux données personnelles avant la première vraie utilisation.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez une idée à tester, ou une application générée qui ne tient plus ?',
            'texte'  => 'Décrivez votre projet, les personnes qui s\'en serviront et l\'outil utilisé s\'il existe déjà (Lovable, Bolt, v0, Cursor ou autre) : vous recevez une réponse sous 24 heures et, après un premier échange, une proposition écrite pour un prototype, un MVP ou un audit.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],
    'faq' => [
        ['q' => 'Qu\'appelle-t-on exactement le vibe coding ?', 'r' => 'Une façon de développer où l\'on décrit en langage courant ce que l\'on veut à un assistant d\'IA, qui écrit le code. Andrej Karpathy a lancé l\'expression sur X le 2 février 2025, pour une pratique où l\'on accepte les modifications sans les lire, et la jugeait bonne pour des projets jetables. Le dictionnaire Collins en a fait son mot de l\'année 2025.'],
        ['q' => 'Combien de temps faut-il pour un prototype ou un MVP ?', 'r' => 'Comptez en général 1 à 2 semaines pour un prototype de démonstration sur données fictives, fiche produit comprise, et 4 à 8 semaines pour un MVP repris, testé et mis en ligne. L\'audit d\'une application déjà générée demande environ une semaine. Les durées exactes sont fixées après le premier échange, selon le nombre de parcours et la nature des données.'],
        ['q' => 'Combien coûte ce service ?', 'r' => 'Le prix est fixé sur devis, après un premier échange ou un audit : aucun forfait n\'est publié pour ce service. Il dépend du point de départ, du nombre de rôles à sécuriser, de la sensibilité des données, du paiement et de l\'état du code généré. Les abonnements aux outils d\'IA se paient à part, à leurs éditeurs.'],
        ['q' => 'Peut-on mettre en production une application faite avec Lovable, Bolt ou v0 ?', 'r' => 'Oui, à condition qu\'elle ait été reprise : règles d\'accès vérifiées table par table, secrets sortis du code, dépendances contrôlées, tests des accès interdits, sauvegardes en place. Lovable écrit lui-même que ses analyses automatiques ne garantissent pas une sécurité complète et recommande une revue professionnelle pour les données sensibles.'],
        ['q' => 'Mon application générée casse dès que je demande une modification : que faire ?', 'r' => 'Arrêtez les demandes en boucle et récupérez le code dans un dépôt Git. Un audit établit ensuite l\'état réel de l\'application, ferme d\'abord ce qui expose des données, puis propose de consolider, de reprendre en partie ou de reconstruire. Les écrans et les parcours que vos utilisateurs ont validés ne sont presque jamais perdus.'],
        ['q' => 'Le code m\'appartient-il vraiment ?', 'r' => 'Il doit l\'être, et c\'est vérifié dès le départ. Lovable synchronise ses projets avec GitHub, GitLab ou Bitbucket, Bolt permet d\'exporter le projet, v0 peut ouvrir une requête de fusion sur votre dépôt, et les agents comme Claude Code ou Cursor travaillent directement dans votre dépôt. Dans tous les cas, le dépôt, la base et l\'hébergement sont ouverts au nom de votre entreprise.'],
        ['q' => 'Le code écrit par une IA contient-il plus de failles ?', 'r' => 'Il en contient souvent, et d\'un type particulier. Le rapport 2025 de Veracode trouve des failles dans 45 % des tests de code généré, et une étude présentée à USENIX Security 2025 a relevé 205 474 noms de paquets inventés par les modèles. D\'où la règle de ce service : rien ne part chez vos clients sans avoir été lu et testé.'],
        ['q' => 'Faut-il tout réécrire après le prototype ?', 'r' => 'Pas forcément. Un code lisible, avec une base cohérente, se consolide ; un code dont seule l\'interface tient se reprend en partie ; un code incompréhensible et plein de failles se reconstruit, en gardant la fiche produit et les écrans validés. La décision se prend après l\'audit, exemples à l\'appui.'],
        ['q' => 'Peut-on intégrer le mobile money dans une application construite avec l\'IA ?', 'r' => 'Oui, mais pas par un simple réglage. Les agrégateurs se branchent par leur API et par des notifications envoyées au serveur, qu\'il faut vérifier, traiter une seule fois et rapprocher de la bonne commande. Ce module s\'ajoute de préférence en second palier, testé à part, une fois le reste de l\'application stabilisé.'],
        ['q' => 'Quels outils utilisez-vous ?', 'r' => 'Ceux qui conviennent à l\'étape : Lovable, Bolt ou v0 pour montrer une idée vite, Claude Code, Cursor ou GitHub Copilot pour travailler dans le dépôt pendant la reprise. Le choix se discute avec vous, notamment pour les abonnements, payés en dollars par carte. L\'outil compte moins que la relecture, les tests et les règles écrites.'],
        ['q' => 'Je veux apprendre à le faire moi-même : est-ce possible ?', 'r' => 'Oui. La formation vibecoding publiée sur ce site enseigne la méthode, sur votre propre projet. Ce service-ci livre un résultat : un prototype, un MVP ou une application reprise. Les deux se combinent bien, par exemple une reprise suivie d\'une formation de l\'équipe qui fera évoluer l\'outil.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Richard SALANON a travaillé dans dix pays d\'Afrique francophone ainsi qu\'en France, en Belgique, en Suisse et au Canada. Le cadrage se fait sur place à Cotonou ou en visioconférence, le développement à distance. Pour une entreprise européenne, un contrat de sous-traitance conforme au RGPD est signé avant tout accès aux données réelles.'],
    ],

    'sources' => [
        ['titre' => 'Andrej Karpathy, message d\'origine sur X introduisant le terme « vibe coding » (2 février 2025)', 'url' => 'https://x.com/karpathy/status/1886192184808149383', 'date' => '2026-10-04'],
        ['titre' => 'Simon Willison, « Not all AI-assisted programming is vibe coding (but vibe coding rocks) », 19 mars 2025 (texte intégral du message de Karpathy)', 'url' => 'https://simonwillison.net/2025/Mar/19/vibe-coding/', 'date' => '2026-10-04'],
        ['titre' => 'Andrej Karpathy, « Vibe coding MenuGen », 27 avril 2025', 'url' => 'https://karpathy.bearblog.dev/vibe-coding-menugen/', 'date' => '2026-10-04'],
        ['titre' => 'The Irish News (PA Media), « Collins word of the year for 2025 revealed », 6 novembre 2025', 'url' => 'https://www.irishnews.com/news/uk/collins-word-of-the-year-for-2025-revealed-NC3TDYDUVNIIRB4SCZVZMTJXKU', 'date' => '2026-10-04'],
        ['titre' => 'Claude Code, documentation : présentation', 'url' => 'https://code.claude.com/docs/en/overview', 'date' => '2026-10-04'],
        ['titre' => 'Claude Code, documentation : sécurité et permissions', 'url' => 'https://code.claude.com/docs/en/security', 'date' => '2026-10-04'],
        ['titre' => 'Cursor, documentation officielle', 'url' => 'https://cursor.com/docs', 'date' => '2026-10-04'],
        ['titre' => 'Cursor, tarifs', 'url' => 'https://cursor.com/pricing', 'date' => '2026-10-04'],
        ['titre' => 'GitHub Docs, « What is GitHub Copilot? »', 'url' => 'https://docs.github.com/en/copilot/get-started/what-is-github-copilot', 'date' => '2026-10-04'],
        ['titre' => 'GitHub, plans et tarifs de Copilot', 'url' => 'https://github.com/features/copilot/plans', 'date' => '2026-10-04'],
        ['titre' => 'GitHub Docs, protection à l\'envoi (push protection) de l\'analyse des secrets', 'url' => 'https://docs.github.com/en/code-security/secret-scanning/introduction/about-push-protection', 'date' => '2026-10-04'],
        ['titre' => 'Lovable, documentation : introduction', 'url' => 'https://docs.lovable.dev/introduction', 'date' => '2026-10-04'],
        ['titre' => 'Lovable, documentation : sécurité', 'url' => 'https://docs.lovable.dev/features/security', 'date' => '2026-10-04'],
        ['titre' => 'Bolt, centre d\'aide officiel', 'url' => 'https://support.bolt.new/', 'date' => '2026-10-04'],
        ['titre' => 'v0 par Vercel, documentation officielle', 'url' => 'https://v0.app/docs', 'date' => '2026-10-04'],
        ['titre' => 'Supabase, documentation : Row Level Security', 'url' => 'https://supabase.com/docs/guides/database/postgres/row-level-security', 'date' => '2026-10-04'],
        ['titre' => 'NIST, National Vulnerability Database, CVE-2025-48757', 'url' => 'https://nvd.nist.gov/vuln/detail/CVE-2025-48757', 'date' => '2026-10-04'],
        ['titre' => 'Spracklen et al., « We Have a Package for You! », USENIX Security 2025', 'url' => 'https://www.usenix.org/conference/usenixsecurity25/presentation/spracklen', 'date' => '2026-10-04'],
        ['titre' => 'OWASP, Top 10:2025', 'url' => 'https://top10.owasp.org/2025/', 'date' => '2026-10-04'],
        ['titre' => 'OWASP GenAI Security Project, LLM09:2025 Misinformation', 'url' => 'https://genai.owasp.org/llmrisk/llm092025-misinformation/', 'date' => '2026-10-04'],
        ['titre' => 'Veracode, 2025 GenAI Code Security Report (mise à jour d\'octobre 2025)', 'url' => 'https://www.veracode.com/resources/analyst-reports/2025-genai-code-security-report/', 'date' => '2026-10-04'],
        ['titre' => 'GitGuardian, State of Secrets Sprawl 2026', 'url' => 'https://www.gitguardian.com/state-of-secrets-sprawl-report-2026', 'date' => '2026-10-04'],
        ['titre' => 'METR, « Measuring the Impact of Early-2025 AI on Experienced Open-Source Developer Productivity », 10 juillet 2025', 'url' => 'https://metr.org/blog/2025-07-10-early-2025-ai-experienced-os-dev-study/', 'date' => '2026-10-04'],
        ['titre' => 'Stack Overflow, Developer Survey 2025, section IA', 'url' => 'https://survey.stackoverflow.co/2025/ai', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 426 et 427)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD chapitre IV (articles 25, 28, 32 et 33)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, guide RGPD du développeur', 'url' => 'https://www.cnil.fr/fr/guide-rgpd-du-developpeur', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'integration-ia-entreprise', 'saas-espace-client', 'audit-etude-de-projet', 'maintenance-support', 'externalisation-developpement'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],

];
