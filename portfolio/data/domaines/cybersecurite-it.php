<?php
// ============================================================
// data/domaines/cybersecurite-it.php · Page domaine « Cybersécurité et IT »
// (vague 1B). Le gabarit affiche en tête les fiches publiées du domaine ;
// cette page aide à choisir entre les quatre formations et à bâtir un parcours
// par profil. Les trois fiches du lot B (securite-donnees-dirigeants,
// cloud-hebergement, gestion-projet-agile) sont citées par leur nom, sans
// lien, jusqu'à leur publication. Faits externes relevés le 05/10/2026 :
// Cybermalveillance.gouv.fr (menaces des professionnels en 2025, fiche
// sauvegardes mise à jour le 14/09/2026), CNIL (notification des violations),
// loi béninoise n° 2017-20 (articles 391, 426 et 427 lus dans le PDF du SGG),
// Commission européenne (Data Act), INTERPOL (rapport Afrique 2026), avis de
// sanction de l'ICO (British Airways), Wired (Maersk, recoupé par recherche),
// Scrum Guide 2020, Manifeste agile, FDFP, décret FODEFCA, 3FPT, France
// Compétences. Richard SALANON n'est pas auditeur de sécurité certifié.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations en cybersécurité et IT : choisir la bonne formation pour les salariés, la direction, le responsable informatique et le chef de projet',
    'title'   => 'Formations en cybersécurité et IT | Richard SALANON',
    'meta'    => 'Quatre formations cybersécurité et IT pour salariés, dirigeants, responsables informatiques et chefs de projet : comparer, choisir un parcours, devis.',
    'en_bref' => 'Le domaine Cybersécurité et IT réunit quatre formations : les réflexes de sécurité des salariés, les décisions de direction sur les données et les sauvegardes, le choix d\'un hébergement ou d\'un cloud, et la conduite d\'un projet numérique par itérations. Cette page aide à repérer celle qui répond au problème de votre organisation, à qui l\'adresser en premier et dans quel ordre enchaîner les suivantes. Chaque formation se déroule en intra, en inter, à distance ou en formule hybride, sur les outils réels de l\'entreprise. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '4 formations : réflexes, décisions, hébergement, projets'],
        ['l' => 'Publics', 'v' => 'Tous les salariés, dirigeants, responsables informatiques, chefs de projet'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre le domaine Cybersécurité et IT, et pourquoi ne tient-il pas en une seule formation ?',
            'paragraphes' => [
                'Dans une PME, l\'informatique n\'est presque jamais un service. C\'est une suite de décisions prises au fil de l\'eau : un neveu qui installe le réseau, un prestataire qui crée la messagerie, une comptable qui garde la clé USB des sauvegardes dans son sac, un hébergeur choisi parce qu\'il était le moins cher l\'année de la création du site. Tant que rien ne casse, personne ne regarde l\'ensemble. Le jour où un compte est volé ou un serveur s\'arrête, on découvre que chacun croyait que quelqu\'un d\'autre s\'en occupait.',
                'Les risques de ce domaine se jouent à quatre niveaux différents. Au poste de travail, un salarié clique, saisit un mot de passe, valide une connexion ou exécute un virement. À la direction, quelqu\'un décide ce qui est sauvegardé, qui a accès à quoi et quel prestataire tient les clés. Au moment de choisir un hébergement ou un cloud, l\'entreprise fixe pour des années où vivent ses données, ce qu\'elles coûtent et si elle pourra partir. Et chaque projet numérique, site, application ou ERP, réussit ou dérape selon la façon dont le client le pilote.',
                'Ces quatre niveaux ne concernent ni les mêmes personnes, ni les mêmes gestes, ni le même vocabulaire. Une journée qui mélange la double authentification, la politique de sauvegarde, les frais de sortie d\'un cloud et la tenue d\'un backlog perd la moitié de la salle à chaque changement de sujet. D\'où quatre formations courtes, chacune pour un public précis, qui se combinent quand l\'organisation veut traiter l\'ensemble.',
                'Ce domaine forme des utilisateurs et des décideurs, pas des techniciens de la sécurité. Il ne prépare à aucune certification professionnelle, ne remplace pas un test d\'intrusion et n\'apprend pas à administrer un pare-feu. Il donne à chacun ce qu\'il doit savoir faire ou décider à sa place. Pour la partie technique, l\'entretien des outils relève de la <a href="/services/maintenance-support">maintenance et du support</a>, et l\'examen d\'un existant ou d\'un projet d\'une mission d\'<a href="/services/audit-etude-de-projet">audit et d\'étude de projet</a>.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation du domaine répond à quel besoin ?',
            'legende' => 'Les quatre formations du domaine, leur public, ce qu\'elles apprennent et le niveau attendu à l\'entrée. La durée, le programme et l\'organisation de chacune sont détaillés sur sa fiche ou sur demande.',
            'entetes' => ['Formation', 'Public', 'Ce qu\'elle apprend', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Tout le personnel : accueil, comptabilité, commerce, service client, direction comprise', 'Repérer un message piégé quel que soit le canal, tenir ses mots de passe, protéger ses comptes et ses appareils, signaler sans délai', 'Aucun : savoir se servir de sa messagerie et de son téléphone'],
                ['Sécurité des données et sauvegardes pour dirigeants', 'Gérants, associés, directeurs administratifs et financiers, responsables d\'ONG ou d\'école', 'Décider ce qui se sauvegarde et comment le restaurer, attribuer et retirer les accès, encadrer les prestataires, préparer la réponse à un incident', 'Aucun prérequis technique ; connaître les outils utilisés par l\'organisation'],
                ['Cloud et hébergement pour décideurs', 'Dirigeants, responsables informatiques, acheteurs, porteurs d\'un projet de site ou d\'ERP', 'Comparer hébergement mutualisé, serveur, cloud et logiciel en ligne, lire une offre et ses coûts cachés, prévoir la réversibilité', 'Avoir sous la main les factures et contrats d\'hébergement en cours, s\'il y en a'],
                ['Gestion de projet IT agile', 'Chefs de projet côté client, responsables métier, dirigeants qui commandent un développement', 'Piloter un projet numérique par livraisons courtes : besoin écrit, priorités, recette, arbitrages avec le prestataire', 'Un projet en cours ou prévu, même au stade de l\'idée'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles questions poser pour savoir par où commencer ?',
            'intro' => 'Le point de départ ne se choisit pas dans un catalogue. Il dépend de ce qui fragilise déjà votre organisation. Ces six questions, passées en revue au premier échange, désignent en général la formation à programmer en premier.',
            'items' => [
                ['titre' => 'Un incident a-t-il déjà eu lieu ?', 'texte' => 'Compte WhatsApp volé, faux fournisseur payé, messagerie piratée : si l\'attaque est passée par un salarié, la priorité va aux réflexes de tout le personnel. Si elle a révélé l\'absence de sauvegarde ou de procédure, c\'est la direction qu\'il faut réunir d\'abord.'],
                ['titre' => 'Une sauvegarde a-t-elle déjà été restaurée ?', 'texte' => 'Beaucoup d\'entreprises sauvegardent sans jamais avoir vérifié qu\'elles savent revenir en arrière. Si personne ne peut dire où se trouve la dernière copie, combien de jours elle couvre et combien de temps prendrait la remise en route, la formation des dirigeants passe devant.'],
                ['titre' => 'Qui détient les mots de passe d\'administration ?', 'texte' => 'Le nom de domaine, l\'hébergement, la messagerie et l\'ERP sont parfois au nom d\'un ancien prestataire ou d\'un salarié parti. Cette situation relève de la direction et du responsable informatique, pas d\'une sensibilisation générale.'],
                ['titre' => 'Un changement d\'hébergement ou un passage au cloud est-il prévu ?', 'texte' => 'Avant de signer, mieux vaut savoir lire une offre, chiffrer ce qu\'elle coûtera au bout de trois ans et vérifier comment récupérer ses données. C\'est l\'objet de la formation sur le cloud et l\'hébergement, à suivre avant la consultation des prestataires.'],
                ['titre' => 'Un projet numérique démarre-t-il ?', 'texte' => 'Site, application, ERP : la personne qui pilotera le projet côté client gagne à se former avant le premier atelier. Une fois le contrat signé et le planning lancé, il devient plus difficile d\'imposer des livraisons courtes et une recette organisée.'],
                ['titre' => 'Les équipes travaillent-elles sur leurs propres appareils ?', 'texte' => 'Téléphones personnels, ordinateurs familiaux, cybercafés : plus les usages sont dispersés, plus la formation des salariés compte, parce qu\'aucun outil central ne pourra compenser un appareil mal tenu.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quel parcours suivre selon votre profil ?',
            'intro' => 'Un parcours enchaîne une à trois formations dans un ordre qui tient compte du rôle de chacun. Ces propositions servent de base de discussion ; elles s\'ajustent au premier échange selon la taille de la structure et l\'urgence du moment.',
            'items' => [
                ['titre' => 'Tous les salariés', 'texte' => 'Une seule formation suffit à la plupart : <a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>, avec sa demi-journée complémentaire pour les personnes qui paient, encaissent ou manipulent des fichiers de clients, de patients ou d\'élèves. Quand les équipes utilisent aussi des assistants comme ChatGPT ou Copilot, la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> prolonge ces réflexes vers ce qu\'on peut confier à un outil d\'intelligence artificielle.'],
                ['titre' => 'Dirigeant, gérant ou associé', 'texte' => 'Commencer par Sécurité des données et sauvegardes pour dirigeants, qui aboutit à des décisions écrites sur les sauvegardes, les accès et les prestataires. Ajouter Cloud et hébergement pour décideurs si un contrat d\'hébergement arrive à échéance ou si un logiciel en ligne est envisagé. Assister ensuite à une partie de la session des salariés donne l\'exemple. Si les équipes utilisent l\'IA, la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> fixe la charte et les responsabilités qui manquent souvent.'],
                ['titre' => 'Responsable informatique ou référent technique', 'texte' => 'Suivre d\'abord Cloud et hébergement pour décideurs, qui lui donne une grille pour comparer les offres et préparer une éventuelle migration. Assister ensuite à la formation des dirigeants, pour que les décisions sur les sauvegardes et les accès soient prises avec lui et non à sa place. Il co-anime volontiers la session des salariés : c\'est lui que l\'on appellera après un clic douteux.'],
                ['titre' => 'Chef de projet ou responsable métier', 'texte' => 'Gestion de projet IT agile est sa formation principale, à suivre avant le lancement du projet. Si le projet concerne un site, une application en ligne ou un ERP hébergé, la formation sur le cloud et l\'hébergement l\'aide à poser les bonnes questions d\'exploitation dès le cahier des charges, et pas au moment de la mise en ligne.'],
                ['titre' => 'Petite structure sans informaticien', 'texte' => 'Deux étapes suffisent souvent : la formation des employés pour tout le monde, gérant compris, puis la formation des dirigeants pour la personne qui tient les comptes et les contrats. Pour remettre l\'ensemble de l\'organisation à plat, la formation <a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a> replace la sécurité parmi les autres chantiers.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Faut-il commencer par les salariés, par la direction ou par l\'infrastructure ?',
            'options'  => ['Les salariés d\'abord', 'La direction d\'abord', 'L\'infrastructure d\'abord'],
            'criteres' => [
                ['critere' => 'Situation typique', 'valeurs' => ['Tentatives d\'hameçonnage fréquentes, comptes volés, fraude au virement évitée de justesse', 'Pas de sauvegarde vérifiée, accès jamais revus, prestataires sans contrat écrit', 'Hébergement à renouveler, migration vers un logiciel en ligne, projet de site ou d\'ERP']],
                ['critere' => 'Première formation', 'valeurs' => ['Cybersécurité pour les employés', 'Sécurité des données et sauvegardes pour dirigeants', 'Cloud et hébergement pour décideurs']],
                ['critere' => 'Résultat obtenu rapidement', 'valeurs' => ['Double authentification active et circuit de signalement connu de tous', 'Décisions écrites sur les sauvegardes, les accès et les prestataires', 'Une grille pour comparer les offres et un plan de sortie possible']],
                ['critere' => 'Limite si l\'on s\'arrête là', 'valeurs' => ['Des salariés vigilants, mais aucune copie de secours si l\'attaque réussit quand même', 'De bonnes décisions que personne n\'applique au poste de travail', 'Un bon contrat, mais des comptes toujours protégés par un seul mot de passe']],
                ['critere' => 'Étape suivante conseillée', 'valeurs' => ['Réunir la direction sur les sauvegardes et les accès', 'Former tout le personnel aux réflexes', 'Former la direction, puis les salariés']],
            ],
            'verdict'  => 'Dans une petite structure sans incident récent, la direction d\'abord coûte le moins de temps et donne un cadre aux autres formations. Après un incident passé par un salarié, mieux vaut former tout le personnel sans attendre, et réunir la direction dans les semaines qui suivent.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qui fait quoi en matière de sécurité, et quelle formation le traite ?',
            'legende' => 'Répartition indicative des gestes et des décisions dans une PME. Elle sert à composer les groupes : chaque ligne indique qui agit, qui tranche, et la formation du domaine où le sujet est travaillé.',
            'entetes' => ['Sujet', 'Qui agit', 'Qui décide', 'Formation qui le traite'],
            'lignes'  => [
                ['Activer la double authentification sur sa messagerie', 'Chaque salarié, aidé si besoin par le référent', 'La direction, qui la rend obligatoire', 'Cybersécurité pour les employés'],
                ['Signaler un message douteux ou une erreur d\'envoi', 'Le salarié concerné, dans les minutes qui suivent', 'La direction, qui désigne la personne à prévenir', 'Cybersécurité pour les employés'],
                ['Fixer ce qui est sauvegardé, à quelle fréquence et où', 'Le responsable informatique ou le prestataire', 'La direction', 'Sécurité des données et sauvegardes pour dirigeants'],
                ['Tester une restauration complète', 'Le responsable informatique ou le prestataire', 'La direction, qui en fixe le calendrier et en lit le compte rendu', 'Sécurité des données et sauvegardes pour dirigeants'],
                ['Ouvrir et fermer les accès d\'un salarié qui arrive ou qui part', 'Le responsable informatique', 'La direction et le responsable du service', 'Sécurité des données et sauvegardes pour dirigeants'],
                ['Choisir un hébergeur ou un logiciel en ligne', 'Le responsable informatique, qui compare', 'La direction, qui signe', 'Cloud et hébergement pour décideurs'],
                ['Prévoir la récupération des données en fin de contrat', 'Le responsable informatique et l\'acheteur', 'La direction', 'Cloud et hébergement pour décideurs'],
                ['Découper un projet en livraisons et les recetter', 'Le chef de projet côté client et le prestataire', 'Le responsable métier, qui arbitre les priorités', 'Gestion de projet IT agile'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels prérequis et quels documents préparer avant la session ?',
            'intro' => 'Aucune formation du domaine n\'exige de compétence technique particulière. Elles gagnent en revanche beaucoup à partir de la situation réelle de l\'organisation, ce qui demande un peu de préparation de votre côté.',
            'items' => [
                ['titre' => 'Pour la formation des employés', 'texte' => 'Un téléphone chargé et l\'ordinateur de travail de chaque participant, l\'accès à sa messagerie professionnelle, et le nom de la personne à qui l\'entreprise veut que l\'on signale un incident. Les mots de passe restent personnels : ils ne sont ni demandés ni montrés.'],
                ['titre' => 'Pour la formation des dirigeants', 'texte' => 'La liste des logiciels et des services utilisés, même approximative, ce que l\'on sait des sauvegardes actuelles, les noms des prestataires qui interviennent et, quand ils existent, leurs contrats. Une page manuscrite suffit pour commencer : la session sert justement à la compléter.'],
                ['titre' => 'Pour la formation sur le cloud et l\'hébergement', 'texte' => 'Les factures d\'hébergement, de nom de domaine, de messagerie et de logiciels en ligne des douze derniers mois, et les contrats en cours. Ces chiffres réels servent d\'exercice : on recalcule ensemble ce que coûte vraiment chaque service.'],
                ['titre' => 'Pour la formation à la gestion de projet', 'texte' => 'Une description du projet, même sommaire : objectif, utilisateurs, échéance souhaitée, budget envisagé, et le cahier des charges ou le devis du prestataire s\'ils existent. Un projet réel rend les exercices de découpage et de priorisation beaucoup plus parlants.'],
                ['titre' => 'Une salle calme et des participants libérés', 'texte' => 'Ces formations abordent parfois des faiblesses que l\'entreprise ne souhaite pas exposer. Les sessions de direction se tiennent porte fermée, et les participants coupent leurs notifications pour la durée de la séance.'],
                ['titre' => 'Une connexion de secours', 'texte' => 'Les activations de comptes et les démonstrations demandent du réseau. Un partage de connexion par téléphone, prévu à l\'avance, évite qu\'une coupure n\'interrompe un exercice à mi-chemin.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format selon la formation ?',
            'legende' => 'Les quatre formats sont possibles pour chacune des formations du domaine. Le choix dépend surtout de la confidentialité des sujets abordés et de la dispersion des participants.',
            'entetes' => ['Format', 'Ce qu\'il permet', 'Formations pour lesquelles il convient le mieux', 'Précaution propre au domaine'],
            'lignes'  => [
                ['Intra', 'Travailler sur les comptes, les contrats, les sauvegardes et les projets réels d\'une seule organisation', 'Formation des dirigeants, formation des employés quand l\'effectif le justifie', 'Aucune faiblesse de l\'entreprise ne sort de la salle ; les groupes se succèdent pour que le service continue'],
                ['Inter', 'Réunir une ou deux personnes de plusieurs structures et partager le coût', 'Cloud et hébergement, gestion de projet agile, réseaux professionnels qui forment leurs membres', 'Les cas étudiés sont fictifs ou anonymisés : personne ne décrit ses failles devant d\'autres entreprises'],
                ['À distance', 'Former des équipes réparties dans plusieurs villes ou plusieurs pays, en séances plus courtes', 'Formation des employés en plusieurs séances, gestion de projet pour une équipe dispersée', 'Ne jamais partager à l\'écran une messagerie, un gestionnaire de mots de passe ou une console d\'administration'],
                ['Hybride', 'Démarrer en salle, puis vérifier à distance ce qui a été mis en place', 'Formation des dirigeants suivie d\'un point d\'étape, formation des employés suivie d\'une séance de contrôle', 'Fixer dès le départ la date du point à distance, sinon la vérification n\'a jamais lieu'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation en cybersécurité et IT, et de quoi dépend le devis ?',
            'intro'      => 'Aucun tarif n\'est publié pour les formations du domaine : chacune est chiffrée sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les logiciels éventuellement retenus après la formation, comme un coffre-fort de mots de passe partagé ou un hébergement, restent facturés par leurs éditeurs et ne sont pas compris dans le prix.',
            'items'      => [
                ['offre' => 'Une formation du domaine', 'prix' => 'Sur devis', 'inclus' => ['Échange de cadrage sur votre situation', 'Exercices construits sur vos outils, vos contrats ou votre projet', 'Supports modifiables et attestation nominative', 'Canal direct pour les questions des semaines suivantes']],
                ['offre' => 'Direction puis personnel', 'prix' => 'Sur devis', 'inclus' => ['Session de direction sur les sauvegardes, les accès et les prestataires', 'Formation de tout le personnel aux réflexes', 'Circuit de signalement écrit pour l\'entreprise', 'Point d\'étape entre les deux sessions']],
                ['offre' => 'Parcours projet', 'prix' => 'Sur devis', 'inclus' => ['Gestion de projet agile pour le pilote côté client', 'Cloud et hébergement pour les décideurs du projet', 'Exercices sur votre cahier des charges ou votre devis', 'Ordre des séances calé sur le calendrier du projet']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, surtout quand chaque appareil doit être vérifié.',
                'La ou les formations retenues, et le nombre de demi-journées.',
                'La préparation : analyse de vos contrats, de vos factures ou de votre cahier des charges.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : en salle, à distance ou hybride.',
                'Le suivi : séance de contrôle, point d\'étape ou accompagnement pendant un projet.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Ces formations peuvent-elles être financées par un fonds de formation ?',
            'paragraphes' => [
                'Elles peuvent l\'être, mais aucune prise en charge n\'est automatique, et la réponse appartient au fonds. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP sur le plan de formation</a>, consultée le 5 octobre 2026, ouvre le dépôt d\'un plan à toute entreprise qui justifie du paiement régulier des deux taxes, et distingue les formations internes, intra, interentreprises et à l\'étranger. Le fonds ne règle qu\'après son propre suivi et son contrôle, puis l\'approbation de sa Commission permanente : la trésorerie doit pouvoir attendre.',
                'Au Bénin, l\'article 5 des statuts du FODEFCA, approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>, le présente comme le principal guichet de financement de la formation professionnelle continue ; son article 35 mentionne une contribution des bénéficiaires comprise, selon les cas, entre 10 et 30 % du coût total. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> dispose d\'un guichet pour le personnel des entreprises et des organisations professionnelles, avec des demandes déposées sur sa plateforme en ligne.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> indique que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des OPCO. Richard SALANON ne détient pas cette certification et n\'est agréé par aucun fonds africain. Prévoyez donc le budget sans aide, et interrogez votre fonds par écrit avec le programme et le devis ; les feuilles de présence et les attestations vous sont remises dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on chez les organisations qui se forment à la sécurité et à l\'informatique ?',
            'intro' => 'La plupart viennent d\'un mauvais aiguillage : la bonne formation envoyée au mauvais public, ou la formation attendue après coup plutôt qu\'avant la décision qu\'elle devait éclairer.',
            'items' => [
                ['titre' => 'Former les salariés et laisser la direction de côté', 'texte' => 'Les équipes apprennent à signaler, mais personne n\'a décidé qui reçoit les signalements, qui coupe un accès ni où se trouve la sauvegarde. Le premier incident sérieux révèle que les réflexes n\'aboutissent nulle part.'],
                ['titre' => 'Croire que le prestataire s\'occupe de tout', 'texte' => 'Un contrat de maintenance ne dit pas toujours ce qui est sauvegardé, où, ni en combien de temps la restauration est garantie. Tant que la direction ne sait pas lire ces engagements, elle ne sait pas ce qu\'elle achète.'],
                ['titre' => 'Choisir un hébergement sur son seul prix mensuel', 'texte' => 'Le tarif d\'appel cache souvent le renouvellement plus cher, les sauvegardes en option ou le coût de sortie. La formation sur le cloud et l\'hébergement apprend à comparer sur trois ans et à vérifier la réversibilité avant de signer.'],
                ['titre' => 'Lancer un projet avant d\'avoir nommé son pilote', 'texte' => 'Sans personne côté client pour trancher les priorités et recetter chaque livraison, le prestataire décide seul, et l\'écart avec le besoin réel n\'apparaît qu\'à la fin. La formation à la gestion de projet vient avant le premier atelier, pas après le premier retard.'],
                ['titre' => 'Envoyer chacun dans le groupe d\'un autre', 'texte' => 'Un chef de projet placé dans une session de réflexes en retire des gestes utiles, mais rien sur le découpage d\'un projet ou la recette. Un dirigeant assis parmi les salariés n\'y trouve pas les décisions qui lui reviennent. Chaque public a sa formation.'],
                ['titre' => 'S\'arrêter après la session', 'texte' => 'Une double authentification désactivée, une restauration jamais testée, un contrat jamais relu : sans point de contrôle quelques semaines plus tard, la moitié des décisions reste sur le papier.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Une formation remplace-t-elle un audit de sécurité ?',
            'texte' => 'Non. Les formations du domaine apprennent des gestes et aident à prendre des décisions ; elles ne vérifient pas la configuration de vos serveurs, ne recherchent pas les failles et ne délivrent aucune attestation de conformité. Richard SALANON n\'est ni auditeur de sécurité certifié ni prestataire qualifié par une agence nationale de cybersécurité, et le précise avant toute commande. Si un client, un bailleur ou une autorité exige un audit de sécurité formel, il faut le confier à un prestataire qualifié ; l\'<a href="/services/audit-etude-de-projet">audit et l\'étude de projet</a> qu\'il propose examinent un existant ou un projet, sans en tenir lieu.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres et quelles règles situent les enjeux du domaine ?',
            'items' => [
                ['valeur' => '8,1 %', 'libelle' => 'Part des demandes d\'assistance des entreprises et associations liées à un rançongiciel en 2025, quatrième menace, en hausse de 9 %, selon Cybermalveillance.gouv.fr (publication du 6 mai 2026)', 'source' => 'Cybermalveillance.gouv.fr, cybermalveillances visant les professionnels en 2025', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025'],
                ['valeur' => '6,6 %', 'libelle' => 'Part de ces demandes portant sur une violation de données en 2025, en hausse de 40 % sur un an, selon la même publication de Cybermalveillance.gouv.fr', 'source' => 'Cybermalveillance.gouv.fr, cybermalveillances visant les professionnels en 2025', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025'],
                ['valeur' => '10', 'libelle' => 'Recommandations de Cybermalveillance.gouv.fr pour gérer ses sauvegardes, parmi lesquelles déconnecter le support après usage et tester régulièrement la sauvegarde (fiche mise à jour le 14 septembre 2026)', 'source' => 'Cybermalveillance.gouv.fr, bonnes pratiques : les sauvegardes', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes'],
                ['valeur' => '17', 'libelle' => 'Pays africains qui ont adopté ou modifié leur législation sur la cybercriminalité en 2025, selon le rapport d\'INTERPOL sur l\'Afrique, fondé sur l\'enquête de 36 pays membres (3 août 2026)', 'source' => 'INTERPOL, évaluation des cybermenaces en Afrique 2026', 'url' => 'https://www.interpol.int/News-and-Events/News/2026/INTERPOL-report-finds-AI-linked-to-more-than-half-of-cybercrime-in-Africa'],
                ['valeur' => '12 janvier 2027', 'libelle' => 'Date à laquelle le règlement européen sur les données supprime entièrement les frais de changement de fournisseur de cloud, frais de sortie des données compris ; le règlement s\'applique depuis le 12 septembre 2025, selon la Commission européenne', 'source' => 'Commission européenne, le Data Act expliqué', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/data-act-explained'],
                ['valeur' => '1 mois', 'libelle' => 'Durée maximale d\'un sprint, cycle de livraison de durée fixe, selon la version de novembre 2020 du Scrum Guide', 'source' => 'Scrum Guide, version de novembre 2020', 'url' => 'https://scrumguides.org/scrum-guide.html'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que montrent les histoires de Maersk et de British Airways pour choisir sa formation ?',
            'paragraphes' => [
                'L\'histoire de <a href="/histoires/british-airways-piratage">British Airways</a> se lit à trois étages. Selon l\'avis de sanction de l\'ICO, l\'autorité britannique de protection des données, daté du 16 octobre 2020, l\'attaquant est entré avec l\'identifiant d\'un salarié de Swissport, prestataire de fret de la compagnie, sur un accès à distance que ne protégeait aucune authentification à plusieurs facteurs. Le geste individuel relève de la formation des employés. La règle imposant ce second facteur aux prestataires, et le contrôle de son application, relèvent de la formation des dirigeants. L\'étendue des droits accordés à ce compte concerne le responsable informatique.',
                'L\'histoire de <a href="/histoires/maersk-notpetya">Maersk</a> parle surtout de reprise. En juin 2017, NotPetya a effacé en quelques heures une grande partie de l\'informatique de l\'armateur, et, d\'après l\'enquête publiée par Wired en août 2018, la remise en route n\'a tenu qu\'à un contrôleur de domaine resté éteint au Ghana à cause d\'une coupure de courant. Aucun salarié formé n\'aurait arrêté cette attaque. Ce qui manquait, c\'était une copie hors ligne prévue et testée : une décision de direction, au cœur de la formation sur la sécurité des données et les sauvegardes.',
                'Deux autres histoires du site éclairent les deux dernières formations du domaine. La bascule de <a href="/histoires/tsb-migration">TSB</a> vers une nouvelle plateforme en un seul week-end, sans retour possible, montre ce que coûte un changement d\'infrastructure mal préparé, et prépare la formation sur le cloud et l\'hébergement. Le projet de <a href="/histoires/hertz-accenture">Hertz confié à Accenture</a>, payé sans qu\'aucun site ne soit mis en ligne, illustre ce que la gestion de projet par livraisons courtes cherche à éviter côté client.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la gestion de projet agile fait-elle partie de ce domaine ?',
            'paragraphes' => [
                'Parce que, dans une PME, la personne qui pilote le site, l\'application ou l\'ERP est souvent la même que celle qui gère les accès, les sauvegardes et l\'hébergement. Et parce qu\'un projet mal conduit crée lui-même des risques : comptes d\'administration jamais transmis, données de test laissées en ligne, mise en service précipitée sans recette. Former le pilote côté client à découper, prioriser et vérifier fait donc partie de la maîtrise de son informatique.',
                'La démarche s\'appuie sur des textes publics. Le Manifeste pour le développement agile de logiciels, publié en 2001, place notamment des logiciels opérationnels avant une documentation exhaustive, et l\'adaptation au changement avant le suivi d\'un plan. Le Scrum Guide, dans sa version de novembre 2020, fixe des cycles de livraison d\'un mois au plus et confie au Product Owner l\'ordre des éléments du backlog. La formation n\'en fait pas une religion : elle retient ce qu\'un client peut appliquer face à un prestataire, quelle que soit la méthode de ce dernier.',
                'Concrètement, le chef de projet apprend à écrire un besoin sous forme de cas d\'usage vérifiables, à classer ce qui doit sortir en premier, à préparer une recette, à refuser une livraison incomplète sans rompre la relation, et à lire un devis découpé en lots. Ces compétences ne demandent aucun bagage technique. Elles évitent surtout de découvrir à la fin, comme dans l\'histoire de Hertz, que des mois de travail n\'ont rien produit d\'utilisable.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que changent les lois du Bénin, de l\'Afrique de l\'Ouest et de l\'Europe pour ces formations ?',
            'paragraphes' => [
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> fait des sauvegardes une obligation de fait. Son article 426, consacré à la sécurité des données personnelles, cite parmi les mesures attendues des moyens de rétablir la disponibilité des données et l\'accès à celles-ci dans des délais appropriés en cas d\'incident physique ou technique, et une procédure pour tester et évaluer régulièrement l\'efficacité des mesures prises. Il soumet aussi le choix du sous-traitant et son contrat aux règles de la loi. C\'est la matière exacte de la formation des dirigeants.',
                'L\'article 427 de la même loi oblige le responsable du traitement à notifier sans délai à l\'Autorité de protection et à la personne concernée toute violation ayant affecté ses données, et le sous-traitant à prévenir le responsable sans délai. L\'article 391 n\'autorise un transfert de données personnelles vers un État tiers que si l\'Autorité constate un niveau de protection équivalent. Or héberger ses fichiers chez un fournisseur de cloud installé hors du Bénin revient souvent à les transférer : la question se pose avant de signer, dans la formation sur le cloud et l\'hébergement.',
                'En Europe, la CNIL rappelle que la violation de données présentant un risque doit lui être notifiée dans les meilleurs délais, si possible sous 72 heures, et que toute violation se documente en interne. Le règlement européen sur les données, applicable depuis le 12 septembre 2025, encadre le changement de fournisseur de cloud et en supprime entièrement les frais à partir du 12 janvier 2027, selon la Commission européenne. Pour une entreprise installée en France, en Belgique ou au Luxembourg, la réversibilité devient un droit à faire valoir, encore faut-il l\'avoir préparée.',
                'À l\'échelle du continent, le rapport 2026 d\'INTERPOL sur l\'Afrique relève que 17 pays ont adopté ou modifié leur législation sur la cybercriminalité en 2025. Les règles évoluent vite, et chaque session commence par celles du pays où travaillent les participants : textes sur les données personnelles, autorité de contrôle, interlocuteurs en cas d\'incident. Les équipes réparties entre plusieurs pays, ce qui est fréquent dans les ONG et les groupes régionaux, travaillent sur la règle la plus exigeante de leur périmètre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi choisir Richard SALANON pour former vos équipes à la sécurité et à l\'informatique ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Les sujets de ce domaine font partie de son travail quotidien. Les sites, applications et ERP qu\'il construit et maintient vivent d\'hébergements, de comptes d\'administration, de sauvegardes et de mises à jour ; il pilote aussi des projets avec des clients qui découvrent souvent la recette en même temps que leur premier logiciel. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin au Togo, du Sénégal à la RD Congo, de la France à la Suisse et au Canada. Il n\'est ni auditeur de sécurité certifié ni partenaire d\'un éditeur ou d\'un hébergeur, ce qui lui laisse la liberté de recommander la solution la plus simple, gratuite comprise, ou de dire qu\'un audit par un prestataire qualifié s\'impose.',
                'Sa façon de former repose sur quelques engagements vérifiables : réponse sous 24 heures, programme écrit avant la session, exercices sur vos comptes, vos contrats ou votre projet, aucun mot de passe vu, supports qui restent à l\'entreprise. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>, et l\'organisation commune des formations sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>. Les autres domaines figurent dans le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir pour choisir sa formation en cybersécurité et IT ?',
            'texte' => 'Partez de ce qui fragilise votre organisation, pas d\'un thème à la mode. Les réflexes concernent tout le personnel ; les sauvegardes, les accès et les prestataires relèvent de la direction ; l\'hébergement se choisit avant de signer ; un projet se pilote avant le premier atelier. Formez chaque public sur son rôle, et prévoyez un point de contrôle quelques semaines plus tard.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous savoir quelle formation programmer en premier ?',
            'texte'  => 'Décrivez votre organisation, le nombre de personnes à former, les outils et prestataires en place, un éventuel incident récent ou le projet qui démarre : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Choisir ma formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Par quelle formation du domaine commencer quand on n\'a jamais rien fait ?', 'r' => 'Dans une petite structure, par une courte session de direction sur les sauvegardes, les accès et les prestataires, puis par la formation Cybersécurité pour les employés pour tout le personnel. Après un incident passé par un salarié, l\'ordre s\'inverse : les réflexes d\'abord, la direction dans la foulée.'],
        ['q' => 'Ces formations conviennent-elles à une entreprise sans service informatique ?', 'r' => 'Oui, elles ont été pensées pour elle. Aucune ne demande de compétence technique. Le rôle du responsable informatique peut être tenu par le gérant, un salarié référent ou le prestataire de maintenance, à condition que quelqu\'un soit désigné.'],
        ['q' => 'Le dirigeant doit-il suivre la formation des employés ?', 'r' => 'C\'est utile : un dirigeant qui active sa double authentification devant son équipe convainc mieux qu\'une note. Mais ses décisions propres, sur les sauvegardes, les accès, les prestataires et la conduite d\'un incident, sont traitées dans la formation qui lui est destinée.'],
        ['q' => 'La formation sur le cloud aide-t-elle à choisir un hébergeur précis ?', 'r' => 'Elle donne une méthode et une grille pour comparer les offres, lire les contrats, calculer le coût sur plusieurs années et prévoir la sortie. Le choix final reste le vôtre ; Richard SALANON n\'est partenaire d\'aucun hébergeur et ne touche aucune commission.'],
        ['q' => 'Faut-il connaître Scrum pour suivre la formation à la gestion de projet ?', 'r' => 'Non. La formation part du rôle du client dans un projet numérique et emprunte aux méthodes agiles ce qui lui sert : livraisons courtes, priorités écrites, recette. Elle fonctionne même si le prestataire travaille autrement.'],
        ['q' => 'Les formations délivrent-elles une certification ?', 'r' => 'Non. Chaque participant reçoit une attestation nominative, le programme et les supports. Ce n\'est ni un diplôme, ni une certification professionnelle en sécurité, ni une attestation de conformité de l\'entreprise.'],
        ['q' => 'Richard SALANON peut-il réaliser un audit de sécurité de notre système ?', 'r' => 'Il n\'est pas auditeur de sécurité certifié et ne présente pas ses missions comme telles. Il peut examiner un existant ou un projet dans le cadre d\'un audit et d\'une étude de projet, mais un audit de sécurité formel exigé par un client ou une autorité doit être confié à un prestataire qualifié.'],
        ['q' => 'Nos faiblesses seront-elles exposées devant d\'autres entreprises ?', 'r' => 'Non. En inter-entreprises, les cas étudiés sont fictifs ou anonymisés. Tout ce qui touche à vos comptes, vos sauvegardes, vos contrats ou vos incidents se traite en intra, porte fermée.'],
        ['q' => 'Les formations peuvent-elles se faire à distance ?', 'r' => 'Oui, en séances plus courtes en visioconférence. Les participants ne partagent jamais à l\'écran leur messagerie, leur gestionnaire de mots de passe ni une console d\'administration ; les gestes sont montrés par le formateur, puis refaits par chacun sur son propre appareil.'],
        ['q' => 'Combien coûte une formation du domaine ?', 'r' => 'Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du nombre de participants, de la ou des formations retenues, de la préparation sur vos documents, du lieu, du mode et du suivi.'],
        ['q' => 'Un fonds de formation peut-il prendre en charge la session ?', 'r' => 'Peut-être, selon les règles du FDFP, du FODEFCA, du 3FPT ou d\'un OPCO, et jamais de façon garantie. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds : soumettez le programme et le devis à votre fonds avant de vous engager.'],
    ],

    'sources' => [
        ['titre' => 'Cybermalveillance.gouv.fr, principales cybermalveillances visant les professionnels en 2025 (6 mai 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, bonnes pratiques : les sauvegardes (mise à jour du 14 septembre 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, notifier une violation de données personnelles', 'url' => 'https://www.cnil.fr/fr/notifier-une-violation-de-donnees-personnelles', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391, 426 et 427)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, le règlement sur les données (Data Act) expliqué', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/data-act-explained', 'date' => '2026-10-05'],
        ['titre' => 'INTERPOL, rapport d\'évaluation des cybermenaces en Afrique 2026 (3 août 2026)', 'url' => 'https://www.interpol.int/News-and-Events/News/2026/INTERPOL-report-finds-AI-linked-to-more-than-half-of-cybercrime-in-Africa', 'date' => '2026-10-05'],
        ['titre' => 'ICO, avis de sanction visant British Airways (16 octobre 2020)', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Wired, The Untold Story of NotPetya, the Most Devastating Cyberattack in History (août 2018)', 'url' => 'https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/', 'date' => '2026-10-05'],
        ['titre' => 'Scrum Guide, version de novembre 2020', 'url' => 'https://scrumguides.org/scrum-guide.html', 'date' => '2026-10-05'],
        ['titre' => 'Manifeste pour le développement agile de logiciels (2001), version française', 'url' => 'https://agilemanifesto.org/iso/fr/manifesto.html', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (articles 5 et 35)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['cybersecurite-employes', 'securite-donnees-dirigeants', 'cloud-hebergement', 'gestion-projet-agile'],
        'services'   => ['maintenance-support', 'audit-etude-de-projet', 'formation-en-entreprise'],
    ],
];
