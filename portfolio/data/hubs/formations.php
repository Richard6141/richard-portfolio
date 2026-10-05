<?php
// ============================================================
// data/hubs/formations.php · Hub /formations/ (vague 1B).
// Le gabarit registre-hub.php affiche en tête les fiches publiées, rangées
// par domaine (champ « liste ») ; les sections présentent la méthode de
// formation, le tableau des huit domaines, le tri et les parcours types,
// les formats, la demande et le devis, le financement par pays et le
// contexte africain et européen. Faits de Richard lus dans faits.php.
// Sources officielles consultées le 05/10/2026 (voir « sources »).
// ============================================================
declare(strict_types=1);

$plus      = static fn(string $cle): string => 'plus de ' . rtrim((string) fait($cle), '+');
$paiements = (array) fait('paiements');
$payerPar  = implode(', ', array_slice($paiements, 0, -1)) . ' ou ' . end($paiements);
$nbPays    = count((array) fait('pays_travailles'));
$nbZones   = count((array) fait('zones'));
$reponse   = (string) fait('delai_reponse');

return [
    'titre'   => 'Formations au numérique et à l\'IA pour les entreprises : huit domaines, des petits groupes, vos propres outils',
    'liste'   => 'formation',
    'title'   => 'Formations IA, ERP, web et numérique | Richard SALANON',
    'meta'    => 'Soixante formations en huit domaines : IA, automatisation, ERP, web, marketing, cybersécurité. En petits groupes, sur vos outils, au Bénin ou à distance.',
    'en_bref' => 'Richard SALANON forme les équipes d\'entreprises, de cabinets, d\'écoles, d\'ONG et d\'administrations au numérique et à l\'intelligence artificielle : soixante formations réparties en huit domaines, de l\'usage quotidien des assistants d\'IA à la comptabilité SYSCOHADA dans Odoo, du premier site web à la gouvernance de l\'IA. Les sessions durent de deux heures à dix jours selon la formation, le plus souvent deux jours en quatre demi-journées, en petits groupes et sur les outils et les documents de l\'organisation. Elles se tiennent en intra, en inter, à distance ou en formule hybride, sur place au Bénin et à distance ailleurs. Le prix est fixé sur devis, après un cadrage gratuit.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'faits_hero' => [
        ['l' => 'Catalogue', 'v' => '60 formations en 8 domaines'],
        ['l' => 'Pour qui', 'v' => 'Salariés, dirigeants, équipes métier et techniques'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Lieu', 'v' => 'Sur place au Bénin, à distance dans ' . $nbZones . ' pays'],
        ['l' => 'Prix', 'v' => 'Sur devis, cadrage et devis gratuits'],
    ],
    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que contient ce catalogue de formations, et à qui s\'adresse-t-il ?',
            'paragraphes' => [
                'Le catalogue réunit soixante formations, rangées en huit domaines : intelligence artificielle, automatisation, développement, ERP et outils de gestion, marketing et visibilité, cybersécurité et IT, transformation digitale, et IA dans vos systèmes existants. Les fiches détaillées déjà en ligne apparaissent en haut de cette page, domaine par domaine ; chacune donne le programme demi-journée par demi-journée, le public, les prérequis et l\'organisation. Les autres formations du catalogue sont présentées dans les pages de domaine, en attendant leur fiche complète.',
                'Ces formations s\'adressent à des organisations, pas au grand public : une PME qui vient d\'installer un ERP, un cabinet qui veut encadrer l\'usage de ChatGPT, une boutique qui vend sur WhatsApp, une école qui forme ses enseignants au numérique, une ONG qui doit renforcer les capacités de ses équipes, une administration qui modernise ses courriers. Une personne seule peut aussi s\'inscrire à une session inter-entreprises ou demander une séance individuelle quand la fiche le prévoit.',
                'Cette page ne refait pas le travail des fiches. Elle sert à quatre choses : comprendre comment Richard forme, quel que soit le sujet ; repérer le domaine qui correspond à votre besoin ; choisir un format et un parcours ; préparer la demande, le devis et, le cas échéant, le dossier de financement. Elle dit aussi ce qu\'une formation ne fait pas : elle ne délivre ni diplôme ni titre inscrit à un répertoire officiel, elle ne remplace pas un projet technique, et elle ne garantit aucun résultat chiffré.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment Richard forme-t-il, quel que soit le domaine ?',
            'intro' => 'Les soixante formations ne se ressemblent pas, mais elles suivent les mêmes règles. Ces règles viennent d\'un constat simple : une compétence numérique ne sert que si elle survit au retour au bureau, devant ses propres écrans, sans le formateur à côté.',
            'items' => [
                ['titre' => 'Partir de ce qui changera le lundi suivant', 'texte' => 'Avant tout programme, une question : quelle tâche ces personnes feront-elles autrement après la session ? « Émettre un avoir dans Dolibarr sans aide », « résumer un rapport de mission avec Claude et vérifier chaque chiffre », « répondre à un avis Google négatif ». Ces objectifs écrits servent à construire les exercices, puis à vérifier les acquis.'],
                ['titre' => 'Travailler sur vos outils et vos documents', 'texte' => 'Les exercices utilisent votre Odoo, votre classeur de stock, vos modèles de courrier, vos conversations clients, vos flux n8n. Quand des données personnelles sont en jeu, on travaille sur une copie anonymisée ou sur une base de test qui reproduit votre paramétrage, jamais sur la base de production.'],
                ['titre' => 'Des groupes assez petits pour passer sur chaque poste', 'texte' => 'Dix personnes au plus dans la plupart des formations, de trois à six pour une formation Odoo par métier, huit au plus pour un groupe de dirigeants ou une séance à distance. Au-delà, la pratique guidée, qui fait l\'essentiel de la valeur d\'une session, devient impossible.'],
                ['titre' => 'Montrer peu, faire pratiquer longtemps', 'texte' => 'Chaque séquence commence par une démonstration courte sur un cas réel, puis laisse un temps long de pratique, chacun sur son poste. Les questions qui reviennent sont notées et alimentent les supports remis à la fin.'],
                ['titre' => 'Vérifier sur une tâche réelle, pas sur un questionnaire', 'texte' => 'En fin de session, chaque participant exécute seul une tâche complète de son poste, comparée aux objectifs écrits. Un questionnaire recueille son avis sur le rythme et le contenu, mais ce n\'est pas lui qui dit si la formation a atteint son but.'],
                ['titre' => 'Laisser des supports qui restent à l\'entreprise', 'texte' => 'Fiches réflexes construites pendant la séance, gabarits de consignes, classeurs, flux d\'automatisation, procédures écrites avec le vocabulaire de vos écrans : tout ce qui est produit appartient à l\'organisation et sert aux personnes qui arriveront après.'],
                ['titre' => 'Prévoir l\'après dès le devis', 'texte' => 'Selon la formation, une séance de suivi à distance, un retour à un mois, un point d\'étape à six semaines ou une revue à trois mois sont prévus et chiffrés dans le devis. C\'est dans les semaines qui suivent la session que les habitudes se prennent ou se perdent.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qui fait quoi avant, pendant et après une session ?',
            'legende' => 'Répartition des rôles entre le formateur et l\'organisation qui commande la formation ; le détail figure dans chaque devis',
            'entetes' => ['Moment', 'Ce que fait Richard', 'Ce que fait l\'organisation', 'Ce qui en sort'],
            'lignes'  => [
                ['Cadrage', 'Entretien avec le commanditaire, puis avec deux ou trois futurs participants ; court test de niveau quand les profils sont mélangés', 'Dit ce qu\'elle attend, désigne les participants, donne un accès de consultation aux outils concernés', 'Objectifs écrits, composition des groupes, format recommandé'],
                ['Préparation', 'Construit les exercices sur vos cas, prépare la base de test ou les copies anonymisées, envoie les supports à télécharger', 'Fournit les documents types, crée les comptes, vérifie le matériel et la connexion, réserve la salle', 'Programme définitif, exercices prêts, postes vérifiés'],
                ['Session', 'Anime, passe sur chaque poste, note les blocages, fait exécuter la tâche finale', 'Libère réellement les participants : pas de réunion ni de caisse à tenir pendant la séance', 'Tâche réalisée seul par chacun, fiches réflexes, questions consignées'],
                ['Après la session', 'Répond aux questions d\'application, assure les séances de suivi prévues au devis, relit les premiers travaux', 'Fait utiliser l\'outil dès le lendemain, nomme un référent interne, regarde les indicateurs convenus', 'Usage réel mesuré, liste des points à reprendre'],
                ['Bilan', 'Rédige un bilan écrit : objectifs atteints, personnes à revoir, obstacles qui ne relèvent pas de la formation', 'Décide de la suite : rattrapage, nouvelle formation, projet technique ou rien de plus', 'Décision argumentée, documents utiles à un éventuel dossier de financement'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que garde l\'organisation à la fin d\'une formation ?',
            'items' => [
                'Une attestation de formation pour chaque participant, avec l\'intitulé, les dates et la durée suivie.',
                'Le programme réalisé, les feuilles de présence et le résultat de l\'évaluation finale, regroupés pour le commanditaire.',
                'Les supports de la session, rédigés avec les noms de vos écrans, de vos documents et de vos procédures.',
                'Les fiches réflexes construites en séance, à afficher ou à partager dans l\'outil de l\'équipe.',
                'Ce que les participants ont produit : gabarits de consignes, classeurs, flux d\'automatisation, pages corrigées, projets mis en ligne.',
                'La liste des questions restées ouvertes et des personnes qui gagneraient à une séance de rattrapage.',
                'La liste des coûts d\'éditeur à prévoir pour continuer : abonnements, licences, hébergement, au nom de l\'organisation.',
                'Un bilan écrit qui dit franchement ce qui a fonctionné et ce qui relève d\'un autre chantier que la formation.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel domaine de formation correspond au besoin de votre équipe ?',
            'legende' => 'Les huit domaines du catalogue ; les liens mènent aux pages de domaine et aux fiches détaillées déjà en ligne, les autres formations sont décrites dans la page de leur domaine',
            'entetes' => ['Domaine', 'Pour qui', 'Exemples de formations', 'Le signe que c\'est le bon domaine'],
            'lignes'  => [
                ['<a href="/formations/domaine/intelligence-artificielle">Intelligence artificielle</a>', 'Salariés de bureau, dirigeants, comptables, équipes marketing et techniques', '<a href="/formations/ia-en-entreprise">IA en entreprise</a>, <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, <a href="/formations/ia-ethique-conformite">IA, éthique et conformité</a>, <a href="/formations/ia-comptables-syscohada">IA pour comptables SYSCOHADA</a> ; aussi prompt engineering, agents IA, chatbot sur documents internes, contenu avec l\'IA', 'Chacun utilise déjà un assistant d\'IA à sa façon, sans règle commune ni vérification des réponses.'],
                ['<a href="/formations/domaine/automatisation">Automatisation</a>', 'Commerçants, assistantes, gestionnaires, service client, référents techniques', '<a href="/formations/n8n">n8n de zéro à l\'autonomie</a>, <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> ; aussi n8n avancé, Make, chatbot et API WhatsApp Business, intégrations API sans code', 'Les mêmes informations sont recopiées d\'un outil à l\'autre, ou les mêmes questions reçoivent chaque jour les mêmes réponses.'],
                ['<a href="/formations/domaine/developpement">Développement</a>', 'Débutants, personnes en reconversion, développeurs, analystes, porteurs de projet', '<a href="/formations/developpement-web">Développement web</a>, <a href="/formations/vibecoding">Vibecoding</a> ; aussi Laravel, Next.js et React, WordPress et WooCommerce, Flutter, API REST, SQL pour analystes, créer son SaaS', 'L\'équipe veut construire ou maintenir elle-même un site, une application ou un outil interne.'],
                ['<a href="/formations/domaine/erp-gestion">ERP et outils de gestion</a>', 'Vente, achats, stock, comptabilité, assistants de direction, dirigeants', '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>, <a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>, <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>, <a href="/formations/excel-google-sheets">Excel et Google Sheets</a> ; aussi Odoo pour dirigeants, adoption d\'un ERP, CRM, Microsoft 365 et Google Workspace, Power BI et Looker Studio, outils collaboratifs', 'Le logiciel de gestion est installé, mais les factures sortent encore d\'un tableur et les chiffres ne concordent pas.'],
                ['<a href="/formations/domaine/marketing-visibilite">Marketing et visibilité</a>', 'Commerces, boutiques en ligne, entreprises qui vendent à des professionnels, équipes marketing', '<a href="/formations/visibilite-google">Visibilité Google</a>, <a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>, <a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>, <a href="/formations/e-commerce">Vendre en ligne</a> ; aussi SEO et contenu, LinkedIn, publicité Meta et Google, emailing, Google Analytics 4', 'Les clients ne vous trouvent pas, ou l\'équipe publie et dépense sans savoir ce que cela rapporte.'],
                ['<a href="/formations/domaine/cybersecurite-it">Cybersécurité et IT</a>', 'Tous les salariés, la direction, le responsable informatique, les chefs de projet', '<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a> ; aussi sécurité des données pour dirigeants, cloud et hébergement, gestion de projet agile', 'Des tentatives d\'hameçonnage arrivent déjà dans les boîtes, et personne ne sait à qui signaler un incident.'],
                ['<a href="/formations/domaine/transformation-digitale">Transformation digitale</a>', 'Comités de direction, dirigeants de petites structures, chefs de projet, managers', '<a href="/formations/strategie-transformation-digitale">Stratégie de transformation digitale</a>, <a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a> ; aussi processus métiers, conduite du changement, chef de projet digital, décider avec les données', 'Les outils s\'empilent sans plan d\'ensemble, ou la direction ne sait pas par quel chantier commencer.'],
                ['<a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>', 'Développeurs, responsables métier, utilisateurs d\'Odoo et de Dolibarr, juristes, auditeurs, direction', '<a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels</a>, <a href="/formations/ia-processus-metier">IA dans les processus métier</a>, <a href="/formations/odoo-ia">Odoo et IA</a>, <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>, <a href="/formations/ia-droit-ohada">IA et droit OHADA</a>, <a href="/formations/gouvernance-ia">Gouverner l\'IA</a> ; aussi Dolibarr et IA, IA pour l\'audit', 'L\'IA doit entrer dans le logiciel, le processus ou le dossier, et plus seulement dans un onglet du navigateur.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles questions poser pour trouver la bonne formation ?',
            'intro' => 'Le nom d\'un outil ne suffit pas à choisir une formation. Deux entreprises qui demandent « une formation Odoo » peuvent avoir besoin, l\'une d\'une prise en main par poste, l\'autre d\'une formation comptable, la troisième de rien du tout tant que le paramétrage n\'est pas terminé. Six questions permettent de trier.',
            'items' => [
                ['titre' => 'Qui doit travailler autrement ?', 'texte' => 'Les personnes qui saisissent, celles qui décident ou celles qui construisent ne suivent pas la même formation. Un vendeur apprend son écran de commande, un gérant apprend à lire ses tableaux de bord, un développeur apprend à appeler une API. Listez les postes avant les sujets.'],
                ['titre' => 'Le problème vient-il d\'un geste, d\'une règle ou d\'une décision ?', 'texte' => 'Un geste mal maîtrisé se règle par une formation utilisateur. Une règle absente, par exemple sur les données qu\'on peut confier à un assistant d\'IA, appelle une formation de conformité ou de gouvernance. Une décision en suspens, comme le choix d\'un outil ou d\'un budget, relève d\'une formation de direction.'],
                ['titre' => 'L\'outil est-il installé, et dans sa version définitive ?', 'texte' => 'Former sur des écrans qui vont encore changer fait perdre la moitié des acquis. Si l\'ERP n\'est pas encore paramétré ou si l\'automatisation n\'existe pas encore, le premier besoin est souvent un projet, puis la formation juste avant la mise en service.'],
                ['titre' => 'D\'où partent les participants ?', 'texte' => 'Une comptable rompue aux tableurs et un magasinier qui découvre l\'ordinateur ne progressent pas au même rythme. Le cadrage évalue les niveaux et peut conduire à deux groupes, ou à une courte séance de mise à niveau avant la formation principale.'],
                ['titre' => 'Combien de personnes, où, et avec quelle connexion ?', 'texte' => 'Huit personnes dans les mêmes locaux à Cotonou, douze réparties entre Abidjan et Paris, ou une seule personne qui tient toute la gestion : chacune de ces situations oriente vers un format différent, et parfois vers une autre formation du même domaine.'],
                ['titre' => 'Qui gardera le savoir après le départ du formateur ?', 'texte' => 'Une formation sans référent interne s\'érode en quelques mois. Désigner dès le cadrage la personne qui répondra aux questions et tiendra les supports à jour change la durée de vie de tout le reste.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel parcours suivre selon la situation de votre organisation ?',
            'legende' => 'Parcours types construits à partir du catalogue ; ils servent de point de départ au cadrage gratuit, qui les adapte à vos priorités et à votre calendrier',
            'entetes' => ['Votre situation', 'Première formation', 'Ensuite, si le besoin se confirme', 'Pourquoi cet ordre'],
            'lignes'  => [
                ['Petite structure de quelques personnes, encore sur papier et sur WhatsApp', '<a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a>', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, puis <a href="/formations/visibilite-google">Visibilité Google</a>', 'Choisir le premier chantier évite d\'acheter trois outils à la fois ; la vente et la visibilité viennent ensuite, sur des bases claires.'],
                ['PME qui démarre Odoo ou Dolibarr', '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> ou <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>, juste avant la mise en service', '<a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a> pour le service comptable, puis la formation Odoo pour dirigeants', 'Les opérations quotidiennes doivent être justes avant que la comptabilité et les tableaux de bord puissent l\'être.'],
                ['Équipe qui utilise déjà l\'IA sans règle', '<a href="/formations/ia-ethique-conformite">IA, éthique et conformité</a> pour tous', '<a href="/formations/ia-en-entreprise">IA en entreprise</a> par métier, puis la formation prompt engineering pour les référents', 'On fixe d\'abord ce qu\'il est permis de confier à un assistant, puis on apprend à s\'en servir efficacement.'],
                ['Direction qui veut décider avant d\'engager un budget', '<a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> ou <a href="/formations/strategie-transformation-digitale">Stratégie de transformation digitale</a>', '<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>, puis les formations des équipes', 'Les équipes appliquent mieux ce que leur direction a compris, arbitré et écrit.'],
                ['Commerce qui vend surtout par messages', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', '<a href="/formations/e-commerce">Vendre en ligne</a>, puis <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a> quand un logiciel de gestion existe', 'Structurer la conversation avant d\'ouvrir une boutique, puis relier l\'ensemble quand les volumes le justifient.'],
                ['Cabinet comptable ou juridique de la zone OHADA', '<a href="/formations/ia-comptables-syscohada">IA pour comptables SYSCOHADA</a> ou <a href="/formations/ia-droit-ohada">IA et droit OHADA</a>', '<a href="/formations/ia-ethique-conformite">IA, éthique et conformité</a> pour tout le cabinet, <a href="/formations/gouvernance-ia">gouvernance de l\'IA</a> pour les associés', 'Le gain de temps est réel sur la recherche et la rédaction, à condition que le secret professionnel soit protégé par des règles écrites.'],
                ['Équipe technique qui doit brancher l\'IA sur un logiciel', '<a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>', '<a href="/formations/odoo-ia">Odoo et IA</a> si le logiciel est Odoo, <a href="/formations/ia-processus-metier">IA dans les processus métier</a> avec les responsables concernés', 'Le code se sécurise et se teste d\'abord ; les métiers décident ensuite quelles étapes confier à l\'IA.'],
                ['Organisation déjà visée par des tentatives d\'hameçonnage', '<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Sécurité des données et sauvegardes pour la direction, puis le choix de l\'hébergement', 'Les réflexes des salariés protègent dès le lendemain ; les décisions de direction se prennent ensuite, sans urgence.'],
                ['Personne en reconversion ou équipe qui veut gérer son site', '<a href="/formations/developpement-web">Développement web</a>', '<a href="/formations/vibecoding">Vibecoding</a>, puis un framework comme Laravel ou Next.js', 'Comprendre le code avant de le faire écrire par une IA permet de relire, de corriger et de livrer un code qui tient.'],
                ['Entreprise qui vend à d\'autres entreprises', '<a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>', '<a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>, puis LinkedIn ou SEO et contenu', 'Le ciblage et l\'offre se clarifient d\'abord ; la visibilité amplifie ensuite un message déjà juste.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Combien de temps dure une formation selon ce qu\'elle doit produire ?',
            'legende' => 'Durées relevées dans les fiches publiées au 5 octobre 2026 ; chaque fiche précise la sienne, et le cadrage peut l\'adapter',
            'entetes' => ['Durée', 'Ce qu\'elle permet', 'Exemples dans le catalogue'],
            'lignes'  => [
                ['Session de deux heures', 'Éclairer une décision de direction, sans prise en main détaillée', '<a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, en version courte'],
                ['Une demi-journée', 'Découvrir un outil, installer quelques réflexes, décider si une formation complète est utile', 'Ateliers de <a href="/formations/ia-en-entreprise">IA en entreprise</a>, <a href="/formations/n8n">n8n</a> ou <a href="/formations/vibecoding">vibecoding</a>, version resserrée de <a href="/formations/visibilite-google">Visibilité Google</a>'],
                ['Une journée', 'Maîtriser un usage précis et repartir avec un premier résultat', '<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>, <a href="/formations/visibilite-google">Visibilité Google</a>, <a href="/formations/whatsapp-business">WhatsApp Business</a>'],
                ['Deux jours en quatre demi-journées', 'Devenir autonome sur un outil ou une méthode, avec des exercices sur ses propres cas', '<a href="/formations/ia-en-entreprise">IA en entreprise</a>, <a href="/formations/n8n">n8n</a>, <a href="/formations/dolibarr-utilisateurs">Dolibarr</a>, <a href="/formations/excel-google-sheets">Excel et Google Sheets</a>, <a href="/formations/gouvernance-ia">Gouverner l\'IA</a>'],
                ['Trois jours', 'Maîtriser un sujet technique ou comptable qui demande de l\'entraînement', '<a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>, <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels</a>'],
                ['Dix jours sur plusieurs semaines', 'Apprendre un métier par paliers, avec un projet mis en ligne', '<a href="/formations/developpement-web">Développement web</a>, en 20 demi-journées réparties sur 10 à 20 semaines'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Intra, inter, à distance ou hybride : quel format convient à votre équipe ?',
            'options'  => ['Intra-entreprise', 'Inter-entreprises', 'À distance', 'Hybride'],
            'criteres' => [
                ['critere' => 'Principe', 'valeurs' => ['Une session réservée à votre organisation, dans vos locaux ou en ligne', 'Des participants de plusieurs organisations réunis dans une même session', 'Des séances en visioconférence, en direct, découpées en blocs de deux à trois heures', 'Une partie en salle pour la prise en main, puis des séances à distance pour la mise en pratique']],
                ['critere' => 'Travail sur vos données', 'valeurs' => ['Complet : votre base de test, vos documents, vos procédures', 'Limité : exercices sur des cas proches du vôtre, données confidentielles exclues', 'Complet, si les accès et les copies de test sont prêts', 'Complet sur la partie en salle comme à distance']],
                ['critere' => 'Confidentialité', 'valeurs' => ['La plus forte : on peut parler de vos clients, de vos marges, de vos incidents', 'Les échanges restent généraux, entre pairs', 'Forte, avec des règles de partage d\'écran fixées au départ', 'Forte']],
                ['critere' => 'Rythme', 'valeurs' => ['Aux dates qui arrangent vos équipes, souvent en demi-journées', 'Calendrier fixé pour l\'ensemble du groupe', 'Séances espacées, compatibles avec plusieurs fuseaux horaires', 'Un temps fort, puis un suivi étalé']],
                ['critere' => 'Logistique', 'valeurs' => ['Salle, postes et connexion chez vous', 'Salle prévue par l\'organisateur', 'Un ordinateur, un casque et une connexion par participant', 'Les deux']],
                ['critere' => 'Quand le choisir', 'valeurs' => ['Dès que trois ou quatre personnes d\'une même équipe sont concernées', 'Une ou deux personnes à former, ou l\'envie d\'échanger avec d\'autres entreprises', 'Équipes réparties entre plusieurs villes ou pays, organisations en Europe ou au Canada', 'Adoption d\'un logiciel, où la première prise en main gagne à se faire côte à côte']],
            ],
            'verdict'  => 'L\'intra-entreprise reste le format le plus efficace dès qu\'une équipe partage les mêmes outils, parce qu\'il permet de travailler sur vos vraies données ; l\'inter-entreprises convient aux besoins individuels, et la distance comme l\'hybride répondent surtout à la géographie de l\'équipe.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Sur place au Bénin, à distance ailleurs : comment les sessions sont-elles organisées ?',
            'paragraphes' => [
                'Au Bénin, les sessions peuvent se tenir dans vos locaux, à Cotonou et dans son agglomération, et ailleurs dans le pays selon le projet. Le présentiel a un intérêt précis : voir comment la caisse ou l\'entrepôt fonctionnent avant de former à Odoo, vérifier la connexion réelle d\'une salle avant une formation sur un outil en ligne, faire travailler une équipe de terrain sur ses propres téléphones. Les sessions inter-entreprises se tiennent dans une salle prévue pour l\'occasion, indiquée dans la proposition.',
                'Hors du Bénin, les formations se donnent à distance, en direct, dans les ' . $nbZones . ' pays de la zone servie : Afrique de l\'Ouest et centrale, Maghreb, océan Indien, Europe francophone et Canada. La liste complète figure sur la page des <a href="/zones/">zones d\'intervention</a>. Les séances durent en général deux à trois heures, pour garder l\'attention et laisser le temps de pratiquer entre deux rendez-vous ; leur horaire tient compte du fuseau de l\'équipe, ce qui compte pour une organisation qui réunit Dakar, Lyon et Montréal.',
                'La connexion fait partie de l\'organisation. Les supports sont envoyés avant la session pour être téléchargés à l\'avance, une partie des exercices se fait hors ligne, et chaque séance à distance a une solution de repli : partage de connexion, report court, ou enregistrement avec l\'accord des participants pour celui dont la ligne a coupé. Les formations se donnent en français, et en anglais quand une partie de l\'équipe ou la maison mère le demande.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que faut-il préparer côté entreprise avant la première séance ?',
            'items' => [
                'La liste des participants, avec leur poste et ce qu\'ils font déjà avec l\'outil ou le sujet.',
                'Un commanditaire qui assiste au cadrage et, si possible, à l\'ouverture de la session.',
                'Les comptes et les droits d\'accès de chaque participant, créés et testés avant le premier jour.',
                'Une base de test ou une copie des documents, anonymisée dès qu\'elle contient des données personnelles.',
                'Trois ou quatre exemples réels de ce qui pose problème aujourd\'hui : un devis, une relance, un rapport, un message client.',
                'Une salle au calme, des postes chargés et une connexion vérifiée, ou un ordinateur et un casque par personne à distance.',
                'Des créneaux réellement libérés dans les agendas, sans clientèle à servir pendant la séance.',
                'Le nom du référent interne qui suivra l\'usage après la formation.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment demander une formation, et que contient le devis ?',
            'items' => [
                ['titre' => 'Votre message', 'duree' => 'Réponse sous ' . $reponse, 'texte' => 'Par le <a href="/contact">formulaire de contact</a>, par e-mail, par téléphone ou sur WhatsApp, décrivez en quelques lignes l\'équipe concernée, l\'outil ou le sujet, ce qui ne va pas aujourd\'hui et l\'échéance qui compte pour vous. Inutile de connaître le nom exact de la formation : c\'est le rôle du cadrage.'],
                ['titre' => 'Cadrage', 'duree' => 'Gratuit, un ou deux entretiens', 'texte' => 'Un entretien avec la personne qui commande, puis souvent avec un ou deux futurs participants. Le cadrage peut conclure qu\'une autre formation que celle demandée répond mieux au besoin, qu\'un projet doit passer avant la formation, ou qu\'aucune formation n\'est nécessaire.'],
                ['titre' => 'Proposition et devis', 'duree' => 'Gratuits, remis après le cadrage', 'texte' => 'Vous recevez le programme découpé en demi-journées, le format, la composition des groupes, le lieu ou le mode à distance, le calendrier, le suivi prévu, le prix et l\'échéancier. Le devis sépare la formation des coûts d\'éditeur, qui restent à votre nom. Rien n\'est engagé avant votre accord écrit.'],
                ['titre' => 'Préparation', 'duree' => 'En général une à deux semaines', 'texte' => 'Les exercices sont construits sur vos cas, la base de test est préparée, les accès sont vérifiés avec votre référent. Les supports à télécharger partent avant la première séance.'],
                ['titre' => 'Session et évaluation', 'duree' => 'Selon la fiche de la formation', 'texte' => 'Démonstrations courtes, pratique longue, tâche finale réalisée seul par chaque participant. Les attestations et les documents de la session sont remis à la fin.'],
                ['titre' => 'Suivi et bilan', 'duree' => 'Selon ce que prévoit le devis', 'texte' => 'Séance de suivi, retour à un mois ou revue à trois mois selon la formation, puis bilan écrit au commanditaire, qui décide de la suite en connaissance de cause.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucune formation n\'a de prix catalogue : chacune est chiffrée sur devis, après le cadrage. Un tarif affiché d\'avance ignorerait le travail de préparation sur vos documents, qui fait pourtant la différence entre une session utile et une démonstration générique. Le premier échange, le cadrage et le devis sont gratuits.',
            'items'      => [
                ['offre' => 'Atelier court', 'prix' => 'Sur devis', 'inclus' => ['Deux heures à une demi-journée', 'Découverte d\'un outil ou session de décision pour la direction', 'Utile pour trancher avant une formation complète']],
                ['offre' => 'Formation intra-entreprise', 'prix' => 'Sur devis', 'inclus' => ['Programme construit sur vos outils et vos documents', 'Un ou plusieurs groupes, dans vos locaux, à distance ou en hybride', 'Suivi après la session, selon la formation']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Pour une ou quelques personnes d\'une même organisation', 'Exercices sur des cas proches du vôtre', 'Attestation et supports remis']],
                ['offre' => 'Parcours sur plusieurs formations', 'prix' => 'Sur devis', 'inclus' => ['Plusieurs formations enchaînées selon un ordre convenu', 'Calendrier étalé sur plusieurs semaines ou mois', 'Bilan à chaque étape avant de lancer la suivante']],
            ],
            'variations' => [
                'La durée retenue, de la session de deux heures au parcours de dix jours.',
                'Le nombre de participants et de groupes, chaque groupe restant limité pour garder la pratique sur poste.',
                'La préparation sur vos données : base de test à reproduire, documents à anonymiser, exercices propres à chaque métier.',
                'Le lieu : vos locaux à Cotonou, un déplacement ailleurs au Bénin, une salle à louer pour une session inter, ou la distance.',
                'Le suivi après la session : séance à distance, retour à un mois, revue à trois mois.',
                'La langue : une session ou des supports en anglais demandent une préparation supplémentaire.',
                'L\'urgence : une session à organiser en quelques jours oblige à réorganiser le planning.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se règle une formation, et quels frais restent à part ?',
            'paragraphes' => [
                'Le règlement se fait par ' . $payerPar . '. Une PME de Cotonou ou de Lomé peut payer depuis son téléphone, une organisation de Bruxelles ou de Montréal par virement, par carte ou par PayPal. L\'échéancier figure sur le devis ; pour un parcours étalé sur plusieurs mois, le paiement peut suivre les étapes. La facture est établie au nom de l\'organisation qui commande, avec l\'intitulé de la formation, les dates, la durée et le nombre de participants : ce sont les mentions qu\'un fonds de formation ou un bailleur demandent en général.',
                'Les abonnements et licences des éditeurs ne sont jamais compris dans le prix de la formation, et ils restent au nom de votre organisation. Deux exemples relevés le 5 octobre 2026 : selon la page tarifaire d\'Odoo, l\'offre Standard coûte 19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € ; selon la page tarifaire de n8n, l\'offre Starter de n8n Cloud coûte 20 € par mois en paiement annuel, pour 2 500 exécutions par mois. Le devis signale les coûts de ce type qu\'il faut prévoir pour continuer après la session.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels fonds de formation existent selon votre pays, et que disent-ils ?',
            'legende' => 'Dispositifs publics relevés sur leurs pages officielles le 5 octobre 2026 ; ils ne remplacent pas la réponse écrite du fonds pour votre dossier, et aucune prise en charge n\'est promise',
            'entetes' => ['Pays', 'Dispositif', 'Ce que dit la source officielle', 'Ce que cela implique pour votre demande'],
            'lignes'  => [
                ['Côte d\'Ivoire', 'FDFP, plan de formation', 'La <a href="https://fdfp.ci/plan-de-formation/">page du FDFP sur le plan de formation</a> l\'ouvre à toute entreprise qui justifie du paiement régulier des deux taxes ; le plan peut être interne, intra, interentreprises ou à l\'étranger, et la liquidation intervient après le contrôle des services du Fonds et l\'approbation de la Commission permanente.', 'Le dossier se monte avant la session, avec programme, devis et calendrier ; le paiement par le fonds vient après contrôle, ce qui pèse sur votre trésorerie.'],
                ['Côte d\'Ivoire', 'FDFP, habilitation des opérateurs', 'La <a href="https://fdfp.ci/procedures-dhabilitation/">page des procédures d\'habilitation</a> impose l\'habilitation, prononcée pour une année, à tout opérateur de formation privé qui prétend aux financements du FDFP, à l\'exception notamment des structures basées hors de Côte d\'Ivoire.', 'Un formateur installé au Bénin n\'est pas dans la situation d\'un cabinet d\'Abidjan : demandez au FDFP, par écrit, si et comment la session peut entrer dans votre plan.'],
                ['Bénin', 'FODEFCA', 'Les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> en font, à l\'article 5, le principal guichet de financement de la formation professionnelle continue dans le secteur privé, chargé de favoriser une assurance qualité pour sélectionner les organismes de formation agréés ; l\'article 35 prévoit des contributions des bénéficiaires de 10 à 30 % du coût total de la formation selon les cas.', 'Même accepté, un dossier laisse une part à votre charge ; vérifiez aussi auprès du fonds les exigences qui visent l\'organisme de formation.'],
                ['Sénégal', '3FPT', 'Le <a href="https://www.3fpt.sn/">site du 3FPT</a> présente un « guichet financement du personnel des entreprises et des membres des organisations professionnelles », avec des demandes déposées sur sa plateforme de financement en ligne.', 'La demande se fait en ligne, en amont de la session ; le programme et le devis détaillés en sont les pièces de base.'],
                ['France', 'Contribution à la formation et OPCO', 'La <a href="https://entreprendre.service-public.gouv.fr/vosdroits/F22570">fiche de Service-public</a>, vérifiée le 21 janvier 2026, fixe la contribution à 0,55 % de la masse salariale brute sous 11 salariés et à 1 % à partir de 11, collectée par l\'Urssaf ; les contributions conventionnelles supplémentaires sont versées aux opérateurs de compétences (OPCO).', 'Les OPCO financent des prestataires qui remplissent l\'obligation qualité décrite à la ligne suivante.'],
                ['France', 'Qualiopi', 'Selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi, par un organisme accrédité par le COFRAC, pour accéder aux fonds publics ou mutualisés : OPCO, régions, France Travail, Caisse des dépôts, Agefiph, État, associations Transitions Pro.', 'Richard SALANON n\'affiche pas la certification Qualiopi : une entreprise française finance donc ces formations sur son propre budget.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne faut-il jamais signer en comptant sur une prise en charge ?',
            'texte' => 'Parce qu\'un fonds de formation décide sur dossier, selon des règles qui changent et qui visent autant l\'entreprise que le formateur. Richard SALANON n\'affiche ni la certification Qualiopi ni l\'agrément d\'un fonds africain, et ne promet aucune prise en charge. La bonne démarche tient en trois gestes : <strong>budgéter la formation sans financement</strong>, <strong>interroger le fonds par écrit avant de signer</strong>, programme et devis en main, et <strong>conserver les pièces</strong> remises pendant la session (programme réalisé, feuilles de présence, attestations, évaluation), utiles quand un dossier est recevable. Un financement obtenu devient alors une bonne nouvelle, jamais une condition dont dépend tout le projet.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte de l\'Afrique francophone pour une formation au numérique ?',
            'paragraphes' => [
                'La connexion d\'abord. Selon l\'<a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">Union internationale des télécommunications</a>, dans ses chiffres publiés le 15 octobre 2025, 74 % de la population mondiale utilise Internet en 2025, mais la moyenne africaine n\'est que de 36 %. Dans beaucoup d\'équipes, le téléphone est le premier, parfois le seul outil numérique. Une formation pensée pour des postes fixes et la fibre ne tient pas : on prévoit des supports téléchargeables, des exercices réalisables hors ligne, et des gestes appris sur l\'appareil que chacun utilise vraiment.',
                'Le cadre comptable et juridique ensuite. D\'après la <a href="https://www.ohada.org/en/state-members/">liste des États membres publiée par l\'OHADA</a>, consultée le 5 octobre 2026, dix-sept États appliquent ses Actes uniformes, dont le Bénin, la Côte d\'Ivoire, le Sénégal, le Togo, le Cameroun et la RD Congo. C\'est pourquoi le catalogue enseigne la comptabilité SYSCOHADA dans Odoo, les usages de l\'IA par les comptables de la zone et la recherche juridique dans les textes OHADA, plutôt que des plans comptables étrangers.',
                'Les données personnelles enfin. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> n\'autorise, selon son article 391, le transfert de données personnelles vers un État tiers que si l\'Autorité constate un niveau de protection équivalent ; son article 426 impose des mesures de sécurité appropriées, comme la pseudonymisation et le chiffrement. Coller une liste de clients dans un assistant d\'IA hébergé à l\'étranger n\'a donc rien d\'anodin : les exercices se font sur des copies anonymisées, et les formations à l\'IA apprennent ce qu\'on peut confier ou non à un outil.',
                'Les usages, eux, sont souvent en avance sur les outils de gestion. La vente passe par WhatsApp, le paiement par mobile money, et la relation client par messages vocaux. Les formations du catalogue partent de ces pratiques au lieu de les ignorer : un commerce de Cotonou apprend à structurer ses conversations avant d\'ouvrir une boutique en ligne, une PME d\'Abidjan apprend à relier WhatsApp à son logiciel de gestion plutôt qu\'à abandonner le canal que ses clients préfèrent.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte européen pour les entreprises qui forment leurs équipes ?',
            'paragraphes' => [
                'L\'intelligence artificielle est devenue une obligation de compétence. Selon les questions et réponses de la <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">Commission européenne sur l\'article 4 du règlement sur l\'IA</a>, mises à jour le 27 juillet 2026, l\'obligation de maîtrise de l\'IA s\'applique depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026. L\'omnibus numérique sur l\'IA, entré en vigueur mi-juillet 2026, maintient l\'obligation pour les fournisseurs et les utilisateurs professionnels, mais n\'impose plus de niveau « suffisant » ; la formation du personnel à la surveillance humaine reste obligatoire pour les systèmes à haut risque.',
                'L\'usage progresse plus vite que la formation. D\'après <a href="https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2">Eurostat</a>, le 11 décembre 2025, 20 % des entreprises de l\'Union d\'au moins dix salariés utilisaient des technologies d\'IA en 2025, contre 13,5 % en 2024. En France, le <a href="https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le">Baromètre France Num 2026</a>, publié le 17 septembre 2026 par la Direction générale des Entreprises, établit que 40 % des TPE et PME utilisent au moins une solution d\'IA, contre 13 % en 2024, alors que 21 % des entreprises seulement ont suivi une formation au numérique en 2025.',
                'Le même baromètre, construit sur 9 655 entreprises interrogées du 23 mars au 18 avril 2026, indique que 39 % des TPE et PME ont subi au moins un incident de cybersécurité en douze mois, l\'hameçonnage en tête avec 18 %, et que 32 % seulement ont mis en place la formation et la sensibilisation du personnel. Dans la répartition des dépenses engagées pour l\'IA, la formation pèse 5 %, contre 17 % pour les abonnements et licences. Le RGPD s\'ajoute à ce tableau : les exercices sur données réelles se font sur des copies réduites au nécessaire.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent le besoin de formation en 2026 ?',
            'items' => [
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine qui utilise Internet en 2025, contre 74 % dans le monde', 'source' => 'UIT, Facts and Figures 2025, 15 octobre 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '17 États', 'libelle' => 'Membres de l\'OHADA, où s\'applique le SYSCOHADA enseigné dans les formations comptables du catalogue', 'source' => 'OHADA, liste des États membres', 'url' => 'https://www.ohada.org/en/state-members/'],
                ['valeur' => '20 %', 'libelle' => 'Entreprises de l\'Union d\'au moins dix salariés qui utilisaient l\'IA en 2025, contre 13,5 % en 2024', 'source' => 'Eurostat, 11 décembre 2025', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '40 %', 'libelle' => 'TPE et PME françaises qui utilisent au moins une solution d\'IA en 2026, contre 13 % en 2024', 'source' => 'Baromètre France Num 2026, 17 septembre 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '21 %', 'libelle' => 'TPE et PME françaises qui ont suivi une formation au numérique en 2025', 'source' => 'Baromètre France Num 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '10 à 30 %', 'libelle' => 'Contribution des bénéficiaires au coût total d\'une formation financée par le FODEFCA, selon les cas', 'source' => 'Décret n° 2022-286 du 11 mai 2022, article 35', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs rendent une formation inutile, et comment les éviter ?',
            'intro' => 'Ces erreurs se voient d\'un pays à l\'autre et d\'un domaine à l\'autre. Aucune ne tient à la qualité du formateur ou à l\'intelligence des participants ; toutes tiennent à une décision prise trop vite au moment de commander.',
            'items' => [
                ['titre' => 'Choisir une formation d\'après le nom de l\'outil', 'texte' => '« Une formation Excel » peut vouloir dire des formules, des tableaux croisés, un classeur de stock à fiabiliser ou un tableau de bord pour la direction. Partez de la tâche à améliorer, pas du logiciel.'],
                ['titre' => 'Former toute l\'entreprise de la même façon', 'texte' => 'Le comptable, le vendeur et le directeur n\'ont pas les mêmes écrans ni les mêmes décisions à prendre. Un programme identique pour tous finit par ne servir pleinement à personne ; mieux vaut des groupes par métier et un socle commun court.'],
                ['titre' => 'Former trop tôt ou trop tard', 'texte' => 'Trop tôt, on apprend des écrans qui changeront. Trop tard, les mauvaises habitudes sont prises. La bonne date se situe juste avant la mise en service, ou dès que l\'usage désordonné commence.'],
                ['titre' => 'Laisser la direction hors de la salle', 'texte' => 'Une équipe abandonne vite un outil que ses responsables ne regardent pas. Si le dirigeant continue de demander le tableur, l\'ERP restera vide, quelle que soit la qualité de la formation.'],
                ['titre' => 'Vouloir tout couvrir en une seule fois', 'texte' => 'Quinze fonctions présentées en une journée, c\'est peu de choses retenues. Deux ou trois gestes maîtrisés, utilisés dès le lendemain, valent davantage qu\'un tour complet du logiciel.'],
                ['titre' => 'Ne prévoir ni référent ni suivi', 'texte' => 'Sans personne pour répondre aux questions en interne et sans rendez-vous fixé après la session, chaque difficulté redevient un appel extérieur ou un abandon discret.'],
                ['titre' => 'Faire dépendre le projet d\'un financement non confirmé', 'texte' => 'Un dossier refusé ou payé après contrôle peut retarder une session de plusieurs mois. Le budget se prévoit sans prise en charge ; le financement, s\'il vient, allège la facture.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il exerce depuis ' . $plus('experience_ans') . ' ans dans le développement et le numérique, a suivi la formation d\'EPITECH à Cotonou (' . fait('formation')['annee'] . ') et déclare ' . $plus('personnes_formees') . ' personnes formées, ' . $plus('projets_livres') . ' projets livrés et ' . $plus('clients') . ' clients. Il a travaillé, sur place ou à distance, pour des organisations dans ' . $nbPays . ' pays, dont la Côte d\'Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada. La transmission fait partie de son parcours depuis le début : d\'avril 2019 à août 2021, il était à la fois développeur junior et formateur en programmation web chez VULCAIN-TECH, à Abomey-Calavi.',
                'Il enseigne ce qu\'il pratique. Il déploie Odoo et Dolibarr, construit des automatisations avec n8n et Make, intègre l\'IA dans des logiciels, crée des sites et des applications. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Faire tourner ses propres produits l\'oblige à connaître le coût réel d\'un abonnement, d\'un appel d\'API ou d\'une erreur de paramétrage, et c\'est ce qu\'il transmet. Il n\'est certifié par aucun éditeur et n\'affiche pas la certification Qualiopi.',
                'Sa façon de former se vérifie dès le premier échange : une réponse sous ' . $reponse . ', un cadrage et un devis gratuits qui peuvent conclure qu\'une formation n\'est pas la bonne réponse, des exercices construits sur vos cas, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise. Il est aussi l\'interlocuteur du jour où le besoin dépasse la formation : la personne qui a formé vos équipes connaît déjà vos flux quand il faut paramétrer un ERP ou brancher l\'IA sur un logiciel. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et l\'offre aux organisations sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de choisir une formation pour votre équipe ?',
            'texte' => 'Commencez par la tâche que vos équipes doivent faire autrement, pas par le nom d\'un outil ; choisissez le domaine, puis la formation et le format avec le cadrage gratuit ; formez juste avant l\'usage, sur vos propres données, en petits groupes ; nommez un référent et prévoyez le suivi ; budgétez sans compter sur un financement, puis interrogez le fonds de votre pays par écrit.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quelle équipe voulez-vous former, et sur quel outil ?',
            'texte'  => 'Décrivez en quelques lignes les personnes à former, leurs postes, l\'outil ou le sujet et l\'échéance qui compte pour vous. Vous recevez une réponse sous ' . $reponse . ', puis un cadrage et un devis gratuits qui proposent la formation, le format et le calendrier adaptés, ou qui disent franchement qu\'une formation n\'est pas encore la bonne réponse.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un cadrage gratuit'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien de formations compte le catalogue, et comment sont-elles organisées ?', 'r' => 'Soixante formations, réparties en huit domaines : intelligence artificielle, automatisation, développement, ERP et outils de gestion, marketing et visibilité, cybersécurité et IT, transformation digitale, et IA dans vos systèmes existants. Chaque domaine a sa page, qui compare ses formations et propose des parcours ; chaque formation a ou aura sa fiche détaillée, avec un programme demi-journée par demi-journée.'],
        ['q' => 'Comment savoir quelle formation choisir ?', 'r' => 'Partez de la tâche à améliorer et des personnes concernées, puis utilisez le tableau des domaines et les parcours types de cette page. Le cadrage gratuit sert ensuite à trancher : il évalue les niveaux, vérifie que l\'outil est prêt et peut recommander une autre formation que celle demandée, ou aucune formation si le problème vient d\'ailleurs.'],
        ['q' => 'Les formations se font-elles sur nos propres outils et documents ?', 'r' => 'Oui, c\'est le principe commun à tout le catalogue en intra-entreprise : votre Odoo ou votre Dolibarr reproduit sur une base de test, vos classeurs, vos modèles de courrier, vos conversations clients. Les documents qui contiennent des données personnelles sont anonymisés avant d\'être utilisés, et on ne travaille jamais sur une base de production.'],
        ['q' => 'Combien de participants par groupe ?', 'r' => 'Dix au plus dans la plupart des formations, douze pour certains ateliers de découverte, huit au plus pour un groupe de dirigeants ou une séance à distance, et de trois à six pour une formation Odoo par métier. Au-delà, la pratique guidée sur chaque poste devient impossible ; une équipe plus nombreuse est répartie en plusieurs groupes.'],
        ['q' => 'Combien de temps dure une formation ?', 'r' => 'De deux heures pour une session de direction à dix jours pour le développement web, répartis sur plusieurs semaines. La plupart des formations complètes durent deux jours, découpés en quatre demi-journées pour laisser le temps de pratiquer entre deux séances. Chaque fiche indique sa durée, et le cadrage peut l\'adapter.'],
        ['q' => 'Une personne seule peut-elle se former ?', 'r' => 'Oui, en rejoignant une session inter-entreprises, ou en séance individuelle quand la fiche le prévoit, par exemple pour la personne qui tient seule la gestion dans Dolibarr. Le format intra-entreprise devient plus intéressant dès que trois ou quatre personnes d\'une même équipe sont concernées.'],
        ['q' => 'Les formations sont-elles possibles hors du Bénin ?', 'r' => 'Oui, à distance, en direct, dans les ' . $nbZones . ' pays de la zone servie, d\'Afrique de l\'Ouest et centrale au Maghreb, à l\'océan Indien, à l\'Europe francophone et au Canada. Les séances de deux à trois heures sont calées sur le fuseau horaire de l\'équipe. Au Bénin, elles peuvent aussi se tenir dans vos locaux.'],
        ['q' => 'Combien coûte une formation ?', 'r' => 'Chaque formation est chiffrée sur devis, selon la durée, le nombre de participants et de groupes, la préparation sur vos données, le lieu, le suivi et la langue. Le premier échange, le cadrage et le devis sont gratuits. Les abonnements et licences des éditeurs restent à part, au nom de votre organisation.'],
        ['q' => 'Quels moyens de paiement sont acceptés ?', 'r' => 'Le règlement se fait par ' . $payerPar . '. L\'échéancier figure sur le devis, et la facture est établie au nom de l\'organisation qui commande, avec l\'intitulé, les dates, la durée et le nombre de participants.'],
        ['q' => 'Le FDFP, le FODEFCA, le 3FPT ou un OPCO peuvent-ils financer la formation ?', 'r' => 'Cela dépend des règles de chaque fonds et de votre dossier, et rien n\'est promis. En Côte d\'Ivoire, au Bénin et au Sénégal, interrogez le fonds par écrit avant de signer, programme et devis en main. En France, les OPCO ne financent que des prestataires certifiés Qualiopi, ce que Richard SALANON n\'affiche pas : la formation se finance alors sur le budget de l\'entreprise.'],
        ['q' => 'Richard SALANON est-il certifié par un éditeur ou par Qualiopi ?', 'r' => 'Non. Il n\'est certifié par aucun éditeur de logiciel, ni Odoo ni un autre, et il n\'affiche pas la certification Qualiopi. Ce qu\'il enseigne vient de sa pratique : déploiements d\'ERP, automatisations, intégrations d\'IA, sites et applications, et de ses propres produits.'],
        ['q' => 'Que reçoit-on à la fin de la formation ?', 'r' => 'Une attestation par participant, les supports de la session, les fiches réflexes et tout ce qui a été produit pendant les exercices, ainsi qu\'un dossier pour le commanditaire : programme réalisé, feuilles de présence, résultat de l\'évaluation finale. Un bilan écrit suit, selon ce que prévoit le devis.'],
        ['q' => 'Que se passe-t-il après la session ?', 'r' => 'Selon la formation, une séance de suivi à distance, un retour à un mois, un point d\'étape à six semaines ou une revue à trois mois sont prévus et chiffrés dans le devis. Ils servent à lever les blocages apparus à l\'usage et à vérifier que l\'outil est réellement utilisé.'],
        ['q' => 'Peut-on combiner plusieurs formations ou plusieurs domaines ?', 'r' => 'Oui, sous forme de parcours : par exemple IA, éthique et conformité pour toute l\'équipe, puis IA en entreprise par métier ; ou Odoo pour les équipes, puis la comptabilité SYSCOHADA dans Odoo pour le service comptable. Les formations s\'enchaînent avec un bilan entre chaque étape, pour ne lancer la suivante que si elle reste utile.'],
    ],

    'sources' => [
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (articles 5 et 35)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement de la formation professionnelle', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Service-public (entreprendre), contribution à la formation professionnelle, fiche vérifiée le 21 janvier 2026', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F22570', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Eurostat, usage de l\'intelligence artificielle par les entreprises de l\'UE en 2025 (11 décembre 2025)', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2', 'date' => '2026-10-05'],
        ['titre' => 'France Num (Direction générale des Entreprises) et Crédoc, Baromètre France Num 2026 : le numérique et l\'intelligence artificielle dans les TPE et PME (17 septembre 2026)', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, liste des États membres', 'url' => 'https://www.ohada.org/en/state-members/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, page Tarification', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, page Pricing', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'services' => ['formation-en-entreprise', 'consultant-digitalisation', 'integration-ia-entreprise'],
    ],
];
