<?php
// ============================================================
// data/domaines/intelligence-artificielle.php · Page domaine « Intelligence
// artificielle » (vague 1B). Le gabarit affiche en tête les fiches publiées du
// domaine ; cette page aide à choisir entre les huit formations et à bâtir un
// parcours par profil. Les quatre fiches du lot B (prompt-engineering,
// agents-ia-assistants, rag-chatbot-documents, contenu-avec-ia) sont citées
// par leur nom, sans lien, jusqu'à leur publication. Faits externes relevés le
// 05/10/2026 : Eurostat, UIT, OIT, OHADA, Commission européenne (article 4,
// fait vérifié du catalogue), loi béninoise n° 2017-20 (articles 391 et 426 lus
// dans le PDF du SGG), décret n° 2022-286 (articles 5 et 35 lus dans le PDF du
// SGG), FDFP, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations en intelligence artificielle : choisir la formation et le parcours qui conviennent à chaque poste, du salarié au comité de direction',
    'title'   => 'Formations en intelligence artificielle | Richard SALANON',
    'meta'    => 'Huit formations à l\'IA pour salariés, dirigeants, comptables, marketing et équipes techniques : comparer, choisir un parcours, formats et devis.',
    'en_bref' => 'Le domaine Intelligence artificielle réunit huit formations : l\'usage quotidien des assistants, les décisions de direction, les règles de conformité, l\'IA en comptabilité OHADA, l\'écriture de consignes, les agents, les chatbots sur documents internes et la création de contenu. Cette page aide à choisir celle qui répond au besoin de chaque poste, et l\'ordre dans lequel les enchaîner. Les sessions déjà détaillées durent de deux heures à deux jours, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '8 formations, de la prise en main aux usages techniques'],
        ['l' => 'Publics', 'v' => 'Salariés, dirigeants, comptables, équipes marketing et techniques'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change l\'intelligence artificielle pour une entreprise, et pourquoi faut-il plusieurs formations ?',
            'paragraphes' => [
                'Dans la plupart des organisations, l\'IA est entrée par la petite porte : un commercial qui fait reformuler ses offres, une assistante qui résume des comptes rendus, un stagiaire qui traduit un courriel fournisseur. Personne ne l\'a décidé, personne ne sait quelles données sont passées par quel compte, et chacun a sa recette. Le premier changement n\'est donc pas technique. Il est d\'organisation : qui a le droit de s\'en servir, pour quoi faire, avec quels documents, et qui relit avant que le résultat parte chez un client.',
                'Le deuxième changement porte sur le travail lui-même. Les tâches qui consistent à produire un premier jet, à extraire une information d\'un long document ou à mettre en forme des données en vrac se font en minutes au lieu d\'heures. En contrepartie, la vérification devient une compétence centrale : un assistant se trompe avec aplomb, invente une référence, oublie un passage. Une équipe qui gagne du temps sans apprendre à contrôler finit par envoyer une erreur au mauvais moment, et la confiance tombe d\'un coup.',
                'Ces deux changements ne touchent pas tout le monde de la même façon. Un dirigeant n\'a pas besoin de savoir écrire une consigne avancée ; il doit savoir arbitrer un budget et fixer des règles. Un comptable travaille sous un droit et un secret professionnel qui encadrent chaque fichier qu\'il manipule. Une équipe marketing publie, donc engage l\'image et parfois le droit d\'auteur. Une équipe technique veut construire des assistants qui agissent. Une formation unique, identique pour tous, laisse chacun sur sa faim : d\'où huit formations, chacune centrée sur un public et un résultat.',
                'Ce domaine traite de l\'usage de l\'IA par les personnes : écrire, analyser, décider, se conformer, créer des contenus, concevoir des assistants. Brancher l\'IA sur l\'ERP, le CRM ou les logiciels métier de l\'entreprise relève d\'un domaine voisin, <a href="/formations/domaine/ia-systemes-existants">l\'IA dans vos systèmes existants</a>, plus technique et centré sur les données et les connecteurs. L\'automatisation de flux entre applications a, elle aussi, son propre domaine, <a href="/formations/domaine/automatisation">l\'automatisation</a>. Les trois se complètent, mais un parcours commence presque toujours ici, par les usages.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation du domaine répond à quel besoin ?',
            'legende' => 'Les huit formations du domaine, leur public, ce que les participants savent faire à la sortie et le niveau attendu à l\'entrée. Le programme détaillé, la durée et les formats figurent sur la fiche de chaque formation.',
            'entetes' => ['Formation', 'Public', 'Ce qu\'elle apprend', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', 'Administration, commerce, ressources humaines, direction, services supports', 'Se servir chaque jour d\'un assistant sur ses propres documents pour écrire, résumer et mettre des données au propre, puis contrôler chaque résultat', 'Aucun : savoir utiliser un traitement de texte et un navigateur suffit'],
                ['<a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>', 'Gérants, associés, comités de direction, responsables de service qui arbitrent', 'Retenir les usages utiles, chiffrer un budget annuel, choisir entre abonnements, IA intégrée aux logiciels et projet sur mesure, cadrer un pilote', 'Aucun prérequis technique ; venir avec deux ou trois idées d\'usage'],
                ['Prompt engineering professionnel', 'Personnes qui utilisent déjà un assistant et veulent des résultats constants', 'Rédiger des consignes fiables et réutilisables, bâtir des gabarits pour l\'équipe, évaluer les réponses avec une grille', 'Une pratique régulière d\'au moins un assistant'],
                ['Agents IA et assistants internes', 'Référents IA, chefs de projet, profils techniques ou curieux de technique', 'Concevoir un assistant qui consulte des outils, garde une mémoire de travail et respecte des garde-fous, avec les GPTs ou les projets Claude', 'Maîtrise des consignes ; notions de base sur les API appréciées'],
                ['RAG : chatbot sur vos documents internes', 'Équipes techniques, responsables de la documentation, qualité, support', 'Indexer un fonds documentaire, faire répondre un assistant en citant ses sources, connaître ses limites et organiser la mise à jour', 'Aisance avec les fichiers et les outils en ligne ; base technique pour la partie installation'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Tout salarié qui utilise un assistant, et plus encore les postes qui traitent des données de personnes', 'Savoir ce qu\'on peut confier à un outil, protéger le secret et les données personnelles, repérer un biais, signaler un contenu généré', 'Aucun prérequis juridique'],
                ['Créer du contenu avec l\'IA', 'Communication, marketing, community management, petites entreprises qui publient elles-mêmes', 'Produire textes, visuels et vidéos courtes avec l\'IA, les relire, respecter les droits et garder une voix propre à la marque', 'Une ligne éditoriale ou au moins des exemples de contenus déjà publiés'],
                ['<a href="/formations/ia-comptables-syscohada">IA pour comptables (SYSCOHADA)</a>', 'Comptables, aides-comptables, cabinets et directions financières de la zone OHADA', 'Préparer la saisie depuis les pièces, rapprocher banque et Mobile Money, analyser une balance et contrôler un dossier, sans laisser l\'outil valider une écriture', 'Pratique de la comptabilité OHADA et d\'un tableur'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles questions poser avant de choisir une formation ?',
            'intro' => 'Le bon choix se fait rarement à partir du nom d\'un outil. Il se fait à partir de la situation de l\'équipe. Six questions suffisent en général à trancher, et le premier échange sert justement à les parcourir ensemble.',
            'items' => [
                ['titre' => 'Qui décide, et la décision est-elle prise ?', 'texte' => 'Si la direction n\'a encore fixé ni budget ni règles, former les équipes en premier crée des habitudes que l\'on devra corriger. Une session de direction courte, en amont, évite ce retour en arrière et donne aux formations suivantes un cadre clair.'],
                ['titre' => 'L\'équipe se sert-elle déjà d\'un assistant ?', 'texte' => 'Une équipe débutante a besoin de la prise en main sur ses documents. Une équipe qui utilise déjà ChatGPT ou Copilot sans méthode gagne davantage à travailler la qualité de ses consignes et la vérification, ce que vise le prompt engineering professionnel.'],
                ['titre' => 'Quelles données passent par les mains des participants ?', 'texte' => 'Dossiers de patients, fiches de salariés, données de clients, comptes bancaires, contrats confidentiels : plus les données sont sensibles, plus la formation à la conformité doit venir tôt, parfois avant toute pratique sur de vrais documents.'],
                ['titre' => 'Le métier a-t-il des règles propres ?', 'texte' => 'Les comptables de la zone OHADA travaillent avec un plan de comptes, des pièces normalisées et un secret professionnel qui changent la manière d\'utiliser l\'IA. Pour eux, une formation métier vaut mieux qu\'une formation générale suivie avec d\'autres services.'],
                ['titre' => 'L\'équipe publie-t-elle au nom de l\'entreprise ?', 'texte' => 'Une équipe qui produit des articles, des visuels ou des vidéos engage la marque et touche au droit d\'auteur. Elle a besoin d\'une méthode de création, mais aussi d\'une chaîne de relecture et de validation avant chaque publication.'],
                ['titre' => 'Veut-on utiliser l\'IA, ou construire avec elle ?', 'texte' => 'Utiliser un assistant et concevoir un assistant interne sont deux métiers. Le second demande de comprendre les outils, la mémoire, les garde-fous et l\'indexation de documents ; il s\'adresse à quelques personnes, pas à toute l\'équipe.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quel parcours suivre selon votre profil ?',
            'intro' => 'Un parcours enchaîne deux ou trois formations dans un ordre qui a du sens pour le poste. Les propositions ci-dessous sont des points de départ ; elles s\'ajustent après le premier échange, selon le niveau réel et le calendrier de l\'équipe.',
            'items' => [
                ['titre' => 'Salarié d\'un service administratif, commercial ou RH', 'texte' => 'Commencer par <a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>, qui installe les gestes de base sur deux ou trois tâches réelles. Ajouter le socle de <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> dès que le poste manipule des données de clients ou de collègues. Quelques semaines plus tard, quand l\'usage est devenu quotidien, le prompt engineering professionnel permet de passer de bonnes réponses ponctuelles à des résultats réguliers.'],
                ['titre' => 'Dirigeant, gérant ou membre d\'un comité de direction', 'texte' => 'Ouvrir avec <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> : la journée aboutit à une note de décision, un budget et un projet pilote. Enchaîner avec <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> pour écrire la charte et répartir les rôles, puis lancer la formation des équipes concernées par le pilote. Si l\'entreprise est en transformation plus large, la formation <a href="/formations/strategie-transformation-digitale">Stratégie de transformation digitale</a> replace l\'IA dans la feuille de route.'],
                ['titre' => 'Comptable, collaborateur de cabinet ou responsable financier', 'texte' => 'Aller directement à <a href="/formations/ia-comptables-syscohada">IA pour comptables (SYSCOHADA)</a>, construite sur le droit comptable OHADA et le secret professionnel. Compléter, si besoin, par <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> pour solidifier les formules utilisées dans les rapprochements. Pour un service équipé d\'Odoo, la suite logique se trouve dans le domaine <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>, avec la formation <a href="/formations/odoo-ia">Odoo et IA</a>.'],
                ['titre' => 'Équipe marketing, communication ou commerciale', 'texte' => 'Partir de la formation Créer du contenu avec l\'IA, centrée sur la production de textes, de visuels et de vidéos courtes, avec relecture et respect des droits. La faire précéder du socle conformité si l\'équipe utilise des photos de personnes ou des fichiers de prospects. Pour être cité par les moteurs conversationnels, la formation <a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>, du domaine marketing, prolonge naturellement ce parcours.'],
                ['titre' => 'Équipe technique, référent IA ou chef de projet numérique', 'texte' => 'Le prompt engineering professionnel pose les bases, puis Agents IA et assistants internes apprend à concevoir des assistants qui agissent, et RAG : chatbot sur vos documents internes à les faire répondre sur le fonds documentaire de l\'entreprise. Pour relier l\'IA aux logiciels déjà en place, le parcours continue dans le domaine <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>, notamment avec <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>.'],
                ['titre' => 'Organisation entière, de la direction aux services', 'texte' => 'L\'ordre qui fonctionne le mieux : une demi-journée ou une journée pour la direction, le socle conformité pour tous, la prise en main par service, puis des formations spécialisées pour quelques personnes relais. Étalé sur deux à trois mois, ce découpage laisse le temps de mesurer ce qui sert avant d\'engager la suite, et évite de bloquer tous les services la même semaine.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Faut-il former d\'abord la direction, les équipes ou les règles ?',
            'options'  => ['La direction d\'abord', 'Les équipes d\'abord', 'Les règles d\'abord'],
            'criteres' => [
                ['critere' => 'Situation typique', 'valeurs' => ['Aucun usage organisé, une direction qui hésite ou qui doit arbitrer un budget', 'Usage déjà répandu, mais désordonné, avec des résultats inégaux d\'un poste à l\'autre', 'Données sensibles (santé, finances, ressources humaines), ou incident déjà survenu']],
                ['critere' => 'Première formation', 'valeurs' => ['IA générative pour dirigeants', 'IA en entreprise : productivité des équipes', 'IA, éthique et conformité des données']],
                ['critere' => 'Ce que l\'entreprise obtient vite', 'valeurs' => ['Une note de décision, un budget et un pilote cadré', 'Des gestes solides sur deux ou trois tâches réelles par service', 'Une frontière claire entre ce qui peut sortir et ce qui reste dans l\'entreprise']],
                ['critere' => 'Risque si l\'on s\'arrête là', 'valeurs' => ['Des décisions sans personne formé pour les appliquer', 'Des habitudes prises sans cadre, à corriger plus tard', 'Une équipe prudente, mais qui n\'utilise pas l\'outil']],
                ['critere' => 'Étape suivante conseillée', 'valeurs' => ['Former l\'équipe du projet pilote', 'Fixer les règles avec la direction', 'Passer à la pratique sur les tâches autorisées']],
            ],
            'verdict'  => 'Pour une PME qui démarre, la direction d\'abord donne le meilleur rapport entre temps passé et clarté obtenue. Quand l\'usage est déjà partout, mieux vaut ne pas attendre : former les équipes et écrire les règles en parallèle.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels prérequis et quel matériel faut-il prévoir ?',
            'intro' => 'Aucune des formations du domaine ne demande d\'acheter un logiciel avant la session. Ce qui compte, c\'est d\'arriver avec des cas réels, des postes en état de marche et du temps libéré.',
            'items' => [
                ['titre' => 'Le niveau de départ', 'texte' => 'Quatre formations s\'adressent à des débutants complets. Le prompt engineering suppose une pratique régulière d\'un assistant, les formations sur les agents et le RAG une aisance avec les outils en ligne, et la formation des comptables une pratique de la comptabilité OHADA. Un court questionnaire, avant la session, vérifie ce niveau.'],
                ['titre' => 'Un ordinateur par personne', 'texte' => 'Avec un navigateur récent, un traitement de texte et un tableur. Un téléphone suffit pour découvrir un assistant, pas pour relire un rapport de trente pages ou contrôler un tableau de chiffres ligne à ligne.'],
                ['titre' => 'Des comptes, gratuits ou professionnels', 'texte' => 'Les versions gratuites de ChatGPT, Claude, Gemini ou Copilot suffisent pour apprendre la méthode. Si l\'entreprise possède déjà des comptes professionnels, on travaille dessus. Le choix d\'un abonnement se fait après la formation ; le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> aide à le préparer.'],
                ['titre' => 'Des documents réels, préparés', 'texte' => 'Courriers types, comptes rendus, exports de tableur, pièces comptables, contenus publiés : chaque participant apporte quelques exemples de son travail. Ceux qui contiennent des noms, des numéros ou des montants sensibles sont anonymisés avant la session.'],
                ['titre' => 'Une connexion qui tient la journée', 'texte' => 'Les assistants fonctionnent en ligne. Les documents d\'exercice sont téléchargés la veille sur chaque poste, et une solution de repli est prévue pour les séances à distance, afin qu\'une coupure n\'arrête pas le groupe.'],
                ['titre' => 'Du temps libéré et un référent', 'texte' => 'Une formation suivie entre deux appels ne produit rien. Les participants sont libérés pour la durée de la session, et une personne de l\'entreprise est désignée pour suivre l\'usage dans les semaines qui suivent et faire remonter les questions.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats sont proposés, et dans quelle situation choisir chacun ?',
            'legende' => 'Les quatre formats valent pour les huit formations du domaine. La durée exacte et la taille des groupes sont indiquées sur chaque fiche : à titre de repère, les formations déjà détaillées vont d\'une session de direction de deux heures à deux jours répartis en quatre demi-journées.',
            'entetes' => ['Format', 'Comment il se déroule', 'Quand le choisir', 'Point d\'attention'],
            'lignes'  => [
                ['Intra', 'Un groupe d\'une seule organisation, dans ses locaux ou une salle louée, sur ses propres documents', 'Une équipe qui veut repartir avec des consignes, des modes opératoires et des règles adaptés à son activité', 'Libérer les participants pour toute la session, téléphones compris'],
                ['Inter', 'Quelques personnes de plusieurs structures, réunies sur une même session', 'Une ou deux personnes à former par organisation, ou un réseau professionnel qui mutualise', 'Les exercices utilisent des documents fictifs ou publics : aucun dossier interne ne circule entre entreprises'],
                ['À distance', 'Des séances plus courtes en visioconférence, avec partage d\'écran et documents envoyés à l\'avance', 'Des équipes réparties sur plusieurs villes ou plusieurs pays, ou une entreprise en Europe', 'Une connexion stable pour chacun, et une caméra allumée pour que le formateur suive le travail'],
                ['Hybride', 'Une première journée en salle, puis des séances à distance espacées de quelques semaines', 'Ancrer les gestes : on découvre ensemble, puis on applique seul et on revient avec ses questions', 'Fixer les dates des séances à distance dès le départ, sinon elles glissent'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation en intelligence artificielle, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif n\'est affiché : chaque formation du domaine est chiffrée sur devis, après un premier échange, un cadrage et un devis qui sont gratuits. Le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants d\'IA restent au nom de l\'entreprise et ne font pas partie du prix.',
            'items'      => [
                ['offre' => 'Une formation du domaine', 'prix' => 'Sur devis', 'inclus' => ['Échange de cadrage et questionnaire de niveau', 'Exercices préparés sur vos documents', 'Supports, corrigés et attestation nominative', 'Canal direct pour les questions qui suivent la session']],
                ['offre' => 'Un parcours de deux ou trois formations', 'prix' => 'Sur devis', 'inclus' => ['Ordre des formations choisi selon le profil', 'Une préparation commune, sans redite d\'une session à l\'autre', 'Point d\'étape entre deux formations', 'Calendrier étalé sur quelques semaines']],
                ['offre' => 'Un programme pour toute l\'organisation', 'prix' => 'Sur devis', 'inclus' => ['Session de direction, socle pour tous, formations par service', 'Groupes composés par métier et par niveau', 'Mesure de l\'usage avant, pendant et après', 'Bilan écrit à la fin du programme']],
            ],
            'variations' => [
                'Le nombre de participants, et donc de groupes.',
                'La formation choisie et le nombre de demi-journées.',
                'Le travail de préparation sur vos documents et leur anonymisation.',
                'Le lieu de la session : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : en salle, à distance ou hybride.',
                'Le suivi après la session, ponctuel ou sur plusieurs mois.',
                'La langue des supports, français ou anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il financer une formation à l\'IA ?',
            'paragraphes' => [
                'Cela se vérifie fonds par fonds, et rien n\'est acquis d\'avance. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP consacrée au plan de formation</a>, lue le 5 octobre 2026, ouvre ce dispositif aux entreprises qui justifient du paiement régulier de leurs deux taxes de formation ; elle cite les actions internes, intra, interentreprises et à l\'étranger, et prévoit un paiement après contrôle des services du fonds et approbation de sa Commission permanente.',
                'Au Bénin, le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> approuve les statuts du FODEFCA. L\'article 5 en fait le principal guichet de financement de la formation professionnelle continue dans le secteur privé, et l\'article 35 prévoit une contribution des bénéficiaires de 10 à 30 % du coût total de la formation selon les cas. Au Sénégal, le site du <a href="https://www.3fpt.sn/">3FPT</a> présente un guichet réservé au personnel des entreprises et des organisations professionnelles, avec une plateforme de demande en ligne.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, les prestataires qui veulent accéder aux fonds publics ou mutualisés, dont ceux des OPCO, doivent être certifiés Qualiopi. Richard SALANON n\'affiche ni cette certification ni l\'agrément d\'un fonds africain. Le plus sûr est donc de budgéter la formation sans prise en charge, puis d\'interroger votre fonds par écrit, programme et devis en main ; les feuilles de présence et les attestations remises servent dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les entreprises qui se forment à l\'IA ?',
            'intro' => 'Ces erreurs ne viennent pas d\'un manque de bonne volonté. Elles viennent presque toujours d\'un mauvais choix de départ : la mauvaise formation, pour le mauvais public, au mauvais moment.',
            'items' => [
                ['titre' => 'Choisir une formation à partir d\'un outil', 'texte' => 'Demander « une formation ChatGPT » enferme la session dans les écrans d\'un éditeur qui changent tous les trimestres. Partir des tâches de l\'équipe donne une méthode qui survit au changement d\'outil, et permet de comparer plusieurs assistants sur un même cas.'],
                ['titre' => 'Mettre tout le monde dans la même salle', 'texte' => 'Le comptable, le commercial et le directeur n\'ont ni les mêmes documents ni les mêmes risques. Un groupe mêlé convient pour une découverte ; pour une formation qui doit changer le travail, les groupes se composent par métier.'],
                ['titre' => 'Former les équipes avant d\'avoir fixé les règles', 'texte' => 'Les participants repartent motivés, mais sans savoir quelles données ils peuvent soumettre ni sur quel compte travailler. Chacun improvise. Quelques règles écrites avant la formation, même provisoires, évitent de devoir corriger des habitudes déjà prises.'],
                ['titre' => 'Acheter des licences pour tout le monde dès le départ', 'texte' => 'Les abonnements payés avant de savoir ce qui sert finissent souvent inutilisés. Les versions gratuites suffisent pour apprendre ; les licences se décident ensuite, poste par poste, sur la base de ce que la formation a montré.'],
                ['titre' => 'Envoyer les profils techniques trop tôt sur les agents', 'texte' => 'Concevoir un assistant interne sans savoir écrire une consigne fiable produit des outils fragiles. Les formations sur les agents et le RAG gagnent à venir après le prompt engineering, quand les bases de formulation et d\'évaluation sont acquises.'],
                ['titre' => 'S\'arrêter à la dernière heure de la session', 'texte' => 'Les questions arrivent dans les semaines qui suivent, quand chacun travaille seul. Sans référent interne ni point de suivi, l\'usage retombe. Prévoir dès le devis un canal de questions et un rendez-vous de bilan change le résultat.'],
                ['titre' => 'Ne rien mesurer', 'texte' => 'Une équipe satisfaite de sa journée peut ne rien changer à son travail. Noter le temps passé sur deux ou trois tâches avant la formation, puis un mois après, donne le seul argument solide pour étendre la démarche ou l\'arrêter.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Une formation suffit-elle à mettre l\'entreprise en règle ?',
            'texte' => 'Non. Une formation fait comprendre les risques et donne les bons gestes, mais elle ne remplace ni une charte d\'usage, ni la liste des outils autorisés, ni la vérification des contrats signés avec les éditeurs. Elle n\'efface pas non plus la responsabilité de l\'entreprise : l\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu\'une organisation répond de ce que son outil affirme à un client. Pour poser ce cadre, la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> complète celles de ce domaine.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent l\'IA dans les entreprises, en Europe et en Afrique ?',
            'items' => [
                ['valeur' => '20,0 %', 'libelle' => 'Part des entreprises de l\'Union européenne de 10 salariés ou plus qui utilisaient une technologie d\'IA en 2025, contre 13,5 % en 2024, selon Eurostat (publication du 11 décembre 2025)', 'source' => 'Eurostat', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '11,8 %', 'libelle' => 'Part de ces entreprises qui utilisaient l\'IA pour analyser du texte écrit en 2025, l\'usage le plus répandu devant la création d\'images, de vidéos ou de sons (9,5 %), selon la même publication d\'Eurostat', 'source' => 'Eurostat', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '1 sur 4', 'libelle' => 'Travailleurs dans le monde dont le métier comporte une part de tâches exposées à l\'IA générative ; les emplois de bureau sont les plus exposés, et la transformation des postes reste l\'effet le plus probable, selon l\'Organisation internationale du Travail (20 mai 2025)', 'source' => 'Organisation internationale du Travail, document de travail 140', 'url' => 'https://www.ilo.org/publications/generative-ai-and-jobs-refined-global-index-occupational-exposure'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine qui utilisait Internet en 2025, contre 74 % dans le monde et 88 à 93 % en Europe, selon l\'Union internationale des télécommunications (15 octobre 2025)', 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '17', 'libelle' => 'États membres de l\'OHADA, dont le Bénin, la Côte d\'Ivoire, le Sénégal, le Cameroun et la RD Congo, où s\'applique le droit comptable sur lequel repose la formation des comptables (liste consultée le 5 octobre 2026)', 'source' => 'OHADA, liste des États membres', 'url' => 'https://www.ohada.org/en/state-members/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langues, lois sur les données : que change le pays de l\'équipe ?',
            'paragraphes' => [
                'La connexion d\'abord. Selon l\'Union internationale des télécommunications, 36 % de la population africaine utilisait Internet en 2025, contre 74 % dans le monde. Les entreprises formées sont connectées, mais le réseau peut couper en pleine séance ou coûter cher en données mobiles. Toutes les formations du domaine sont préparées en conséquence : fichiers d\'exercice copiés sur les postes la veille, consignes rédigées hors ligne puis envoyées d\'un bloc, temps de relecture qui ne demandent pas de réseau.',
                'La langue ensuite. Les assistants rédigent bien en français, mais dans un français de France qui ne colle pas toujours aux usages d\'une administration de Cotonou, d\'un cabinet de Dakar ou d\'une PME de Kinshasa. Les participants apprennent à fournir leurs propres modèles et leur vocabulaire. Pour un texte en fon, en wolof ou en lingala, une relecture par un locuteur reste indispensable ; pour l\'anglais des échanges avec les fournisseurs, le gain est immédiat.',
                'Le droit enfin. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> n\'autorise, à son article 391, un transfert de données personnelles vers un État tiers que si l\'Autorité constate un niveau de protection équivalent ; son article 426 cite la pseudonymisation et le chiffrement parmi les mesures de sécurité attendues. Or la plupart des assistants sont hébergés hors du continent : chaque formation du domaine apprend donc à retirer noms et numéros avant de soumettre un texte.',
                'En Europe, le RGPD encadre les mêmes gestes, et le règlement européen sur l\'IA ajoute une obligation de maîtrise de l\'IA à son article 4. D\'après les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, elle s\'applique depuis le 2 février 2025, son contrôle et les sanctions ont commencé le 3 août 2026, et l\'omnibus numérique la maintient pour les fournisseurs et les utilisateurs professionnels sans plus exiger un niveau « suffisant ». Aucun certificat n\'est demandé ; garder la trace des formations suivies reste utile.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi choisir Richard SALANON pour former vos équipes à l\'IA ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il ne se contente pas d\'enseigner l\'IA : il s\'en sert chaque jour pour écrire, analyser et développer, et il l\'intègre dans des logiciels pour ses clients. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, d\'Afrique de l\'Ouest et centrale à la France, à la Belgique, à la Suisse et au Canada.',
                'Ce qui distingue sa façon de former tient en quelques règles : un premier échange qui peut conclure qu\'une formation plus courte, ou une autre formation, suffit ; des exercices construits sur les documents de l\'équipe ; des groupes composés par métier ; une évaluation sur une tâche réelle plutôt qu\'un questionnaire de satisfaction ; des supports qui restent la propriété de l\'entreprise. Il n\'est certifié par aucun éditeur d\'IA et ne se dit partenaire d\'aucun, ce qui lui laisse la liberté de recommander l\'outil le mieux adapté, gratuit compris.',
                'Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>. Quand le besoin dépasse la formation, il prend la forme d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>, d\'un <a href="/services/agents-ia-chatbot-whatsapp">agent IA ou chatbot WhatsApp</a> ou d\'un accompagnement de <a href="/services/consultant-digitalisation">consultant en digitalisation</a>. L\'organisation commune à tous les domaines est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>, et les autres domaines dans le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir pour choisir sa formation en intelligence artificielle ?',
            'texte' => 'Partez des tâches et des données de chaque poste, pas du nom d\'un outil. Formez la direction tôt, posez quelques règles avant la pratique, composez les groupes par métier, réservez les formations techniques à quelques personnes déjà à l\'aise, et prévoyez dès le départ un référent et un point de mesure un mois après.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous construire le parcours IA de votre équipe ?',
            'texte'  => 'Décrivez les postes concernés, le nombre de personnes, ce qu\'elles font déjà avec l\'IA, les données qu\'elles manipulent et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Choisir ma formation IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Par quelle formation commencer quand personne dans l\'équipe n\'utilise l\'IA ?', 'r' => 'Par IA en entreprise : productivité des équipes, éventuellement précédée d\'une courte session pour la direction. Elle part de zéro, sur les documents de l\'équipe, et installe deux ou trois gestes solides avant d\'aller plus loin.'],
        ['q' => 'Peut-on suivre plusieurs formations du domaine à la suite ?', 'r' => 'Oui, et c\'est souvent le plus efficace, à condition de laisser quelques semaines entre deux sessions. Ce délai permet d\'appliquer, de buter sur de vraies difficultés et d\'arriver à la formation suivante avec des questions précises.'],
        ['q' => 'Quelle différence entre ce domaine et celui de l\'IA dans les systèmes existants ?', 'r' => 'Ce domaine apprend aux personnes à se servir de l\'IA et à concevoir des assistants. Le domaine IA dans vos systèmes existants traite de son branchement sur l\'ERP, le CRM, WhatsApp ou les logiciels métier : API, connecteurs, données, coûts et sécurité.'],
        ['q' => 'Les formations se font-elles sur ChatGPT, Claude, Gemini ou Copilot ?', 'r' => 'Sur l\'assistant que l\'entreprise utilise ou envisage. Sans choix préalable, on travaille sur deux assistants en version gratuite, ce qui montre que la méthode ne dépend pas de l\'éditeur et prépare le choix d\'un abonnement.'],
        ['q' => 'Faut-il des connaissances techniques ?', 'r' => 'Pas pour la majorité des formations du domaine. Seules les formations sur les agents IA et sur le RAG demandent une aisance avec les outils en ligne, et une base technique pour la partie installation. Le prompt engineering suppose simplement une pratique régulière d\'un assistant.'],
        ['q' => 'Nos données sont confidentielles : peut-on quand même se former sur nos documents ?', 'r' => 'Oui. Les documents sont triés avant la session : ceux qui peuvent être soumis, ceux qu\'on anonymise d\'abord et ceux qui restent dans l\'entreprise. Les exercices se font sur des copies préparées, sans nom de client, de patient ni de salarié.'],
        ['q' => 'Combien coûte une formation du domaine ?', 'r' => 'Le prix est fixé sur devis, après un premier échange et un cadrage gratuits. Il dépend du nombre de participants et de groupes, de la formation et de sa durée, de la préparation sur vos documents, du lieu, du mode et du suivi retenu.'],
        ['q' => 'Un fonds de formation peut-il prendre en charge la session ?', 'r' => 'Parfois, selon les règles du FDFP, du FODEFCA, du 3FPT ou d\'un OPCO, et jamais de façon garantie. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds : renseignez-vous par écrit auprès du vôtre, programme et devis à l\'appui.'],
        ['q' => 'Les formations peuvent-elles se dérouler entièrement à distance ?', 'r' => 'Oui, en séances plus courtes en visioconférence, avec documents envoyés à l\'avance et partage d\'écran. Ce format convient bien aux équipes réparties entre plusieurs pays ; il demande une connexion stable pour chaque participant.'],
        ['q' => 'Une formation à l\'IA répond-elle à l\'article 4 du règlement européen ?', 'r' => 'Elle y contribue : cet article demande aux organisations qui utilisent l\'IA de développer la maîtrise de l\'IA de leur personnel. La Commission européenne n\'exige aucun certificat ; conserver la trace des formations suivies, avec programme et attestations, reste une bonne pratique.'],
        ['q' => 'Reçoit-on une attestation à la fin ?', 'r' => 'Oui, une attestation nominative par participant, accompagnée du programme, des supports et des exercices corrigés. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Eurostat, usage de l\'intelligence artificielle par les entreprises de l\'UE en 2025 (publication du 11 décembre 2025)', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Organisation internationale du Travail, Generative AI and jobs: a refined global index of occupational exposure (document de travail 140)', 'url' => 'https://www.ilo.org/publications/generative-ai-and-jobs-refined-global-index-occupational-exposure', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, liste des États membres', 'url' => 'https://www.ohada.org/en/state-members/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (articles 5 et 35)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['ia-en-entreprise', 'ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'rag-chatbot-documents', 'ia-ethique-conformite', 'contenu-avec-ia', 'ia-comptables-syscohada'],
        'services'   => ['integration-ia-entreprise', 'formation-en-entreprise', 'consultant-digitalisation'],
    ],
];
