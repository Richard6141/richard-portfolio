<?php
// ============================================================
// data/domaines/ia-systemes-existants.php · Page domaine « IA dans vos
// systèmes existants » (vague 1B). Le gabarit affiche en tête les fiches
// publiées du domaine ; cette page aide à choisir entre les huit formations,
// à bâtir un parcours par profil et à situer le domaine par rapport aux
// domaines Intelligence artificielle et Automatisation. Les deux fiches du
// lot B (dolibarr-ia, ia-audit-controle) sont citées par leur nom, sans lien,
// jusqu'à leur publication le 12/10/2026. Faits externes relevés le
// 05/10/2026 : Eurostat (ERP et CRM 2025), IBM (Cost of a Data Breach 2025),
// Commission européenne (calendrier du règlement sur l'IA, article 4), OWASP,
// wiki Dolibarr (module IA), GitHub Dolibarr (24.0.1), tarifs Odoo, n8n et
// Meta (faits vérifiés du catalogue), OHADA, loi béninoise n° 2017-20, FDFP,
// FODEFCA, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations IA dans vos systèmes existants : choisir la formation et le parcours pour brancher l\'IA sur vos logiciels, vos processus et vos dossiers sans en perdre le contrôle',
    'title'   => 'Formations IA dans vos systèmes existants | Richard SALANON',
    'meta'    => 'Huit formations pour brancher l\'IA sur vos logiciels : code, processus, Odoo, Dolibarr, WhatsApp, droit OHADA, audit, gouvernance. Parcours et devis.',
    'en_bref' => 'Le domaine IA dans vos systèmes existants réunit huit formations pour les entreprises qui veulent faire entrer l\'intelligence artificielle dans ce qu\'elles utilisent déjà : leur code, leurs processus, Odoo, Dolibarr, WhatsApp relié au logiciel de gestion, leurs dossiers juridiques, leurs contrôles et leurs règles internes. Cette page aide à repérer la formation qui correspond à chaque poste et l\'ordre dans lequel les suivre. Les sessions déjà détaillées durent de deux à trois jours, avec un suivi à distance selon la formation, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '8 formations, du code à la gouvernance'],
        ['l' => 'Publics', 'v' => 'Développeurs, responsables métier, utilisateurs d\'Odoo et de Dolibarr, juristes, auditeurs, direction'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que change l\'IA quand elle entre dans vos logiciels, et plus seulement dans un navigateur ?',
            'paragraphes' => [
                'Tant que l\'IA reste dans un onglet du navigateur, une personne copie un texte, lit la réponse et décide de ce qu\'elle en fait. Le jour où elle est branchée sur l\'ERP, le CRM, la messagerie des clients ou le code d\'une application maison, tout change d\'échelle. Le modèle lit lui-même des enregistrements, remplit des champs, prépare des brouillons de factures, envoie des relances, classe des pièces par centaines. La bonne question n\'est plus « comment formuler ma demande ? », mais « qui a permis à cette machine de lire cette table, d\'écrire dans ce champ ou d\'envoyer ce message, et qui vérifie ce qu\'elle a fait ? ».',
                'Pour une entreprise, ce passage soulève quatre sujets concrets. Les données d\'abord : quels champs quittent la base, vers quel fournisseur, dans quel pays, sous quelle loi. Les droits ensuite : un utilisateur technique, des clés d\'accès, des permissions réduites au strict nécessaire. Le coût, qui devient variable : jetons consommés, crédits achetés dans le logiciel, messages facturés au-delà d\'un quota. Le contrôle enfin : validation avant action, relecture d\'un échantillon, journal qui permet de retrouver, des mois plus tard, ce que la machine a proposé et qui l\'a accepté.',
                'Ces quatre sujets ne pèsent pas sur les mêmes épaules. Le développeur écrit l\'appel au modèle, le responsable de processus fixe les seuils de validation, le référent Odoo surveille les crédits, le commercial envoie depuis la fiche du client, le juriste vérifie une référence, l\'auditeur refait un contrôle, la direction tranche ce qui est permis. Une seule formation pour tous laisserait chacun devant les problèmes des autres. Le domaine en compte donc huit, chacune bâtie pour un rôle et sur l\'outil réel de l\'entreprise.',
                'Ce domaine ne construit pas l\'intégration à votre place : il apprend aux équipes à la concevoir, à l\'utiliser et à la tenir. Quand le besoin est un projet à livrer, il relève des services d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>, d\'<a href="/services/integration-odoo">intégration d\'Odoo</a>, d\'<a href="/services/integration-dolibarr">intégration de Dolibarr</a> ou d\'<a href="/services/integration-whatsapp">intégration de WhatsApp</a>. Les formations servent alors avant, pour rédiger un cahier des charges lucide, ou après, pour que l\'outil livré soit vraiment utilisé et surveillé.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où s\'arrête ce domaine, et où commencent ceux de l\'intelligence artificielle et de l\'automatisation ?',
            'paragraphes' => [
                'Trois domaines du catalogue parlent d\'IA ou d\'outils qui travaillent seuls, et la confusion est fréquente au moment du devis. Le domaine <a href="/formations/domaine/intelligence-artificielle">Intelligence artificielle</a> part de la personne : un salarié, un dirigeant, un comptable apprend à se servir d\'un assistant sur ses documents, à écrire des consignes, à respecter les règles de conformité. Le domaine <a href="/formations/domaine/automatisation">Automatisation</a> part de la tâche répétitive : relier deux applications avec n8n ou Make, vendre sur WhatsApp, construire un robot de réponse.',
                'Le domaine IA dans vos systèmes existants part du logiciel ou du circuit déjà en place. Il suppose que l\'entreprise a un ERP, un CRM, une application, un processus de validation ou un fonds de dossiers, et il pose la question de ce que l\'IA peut y faire, avec quels droits et sous quel contrôle. Le tableau ci-dessous résume la différence ; en cas de doute, le premier échange sert justement à placer votre besoin dans le bon domaine, quitte à combiner deux formations de domaines différents.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Intelligence artificielle, automatisation ou IA dans vos systèmes : quel domaine correspond à votre projet ?',
            'options'  => ['Intelligence artificielle', 'Automatisation', 'IA dans vos systèmes existants'],
            'criteres' => [
                ['critere' => 'Point de départ', 'valeurs' => ['Une personne et son assistant, sur ses propres documents', 'Une tâche répétitive entre deux applications, ou un canal de vente', 'Un logiciel de gestion, un code, un processus ou un fonds de dossiers déjà en service']],
                ['critere' => 'Question typique', 'valeurs' => ['Comment rédiger, résumer et analyser plus vite sans recopier d\'erreur ?', 'Comment ne plus ressaisir cette commande d\'un outil à l\'autre ?', 'Que peut faire l\'IA dans notre Odoo, notre application ou notre circuit de validation, et qui la contrôle ?']],
                ['critere' => 'Ce que l\'on manipule', 'valeurs' => ['Des consignes, des documents, des réponses à relire', 'Des déclencheurs, des flux, des connecteurs prêts à l\'emploi', 'Des API, des droits d\'accès, des champs de base, des modèles de messages, des journaux']],
                ['critere' => 'Publics les plus fréquents', 'valeurs' => ['Tous les salariés, la direction, les comptables, le marketing', 'Gestionnaires, assistantes, référents techniques, vendeurs', 'Développeurs, référents ERP, responsables de processus, juristes, auditeurs, comité de direction']],
                ['critere' => 'Risque principal à maîtriser', 'valeurs' => ['La réponse fausse reprise sans vérification', 'Le flux qui s\'arrête sans que personne s\'en aperçoive', 'La machine qui lit, écrit ou envoie au nom de l\'entreprise sans trace ni contrôle']],
            ],
            'verdict'  => 'Une équipe qui n\'utilise encore aucun assistant commence par le domaine Intelligence artificielle ; un besoin de liaison entre applications, sans IA, relève de l\'automatisation. Ce domaine devient le bon dès que l\'IA doit agir dans un logiciel que l\'entreprise utilise déjà, ou qu\'une organisation doit encadrer cette présence.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Laquelle des huit formations correspond à votre poste et à votre système ?',
            'legende' => 'Une ligne par formation : le public visé, ce que les participants savent faire en sortant, et le niveau demandé à l\'entrée. Programme, durée et formats se lisent sur chaque fiche ; les deux formations sans lien sont publiées à partir du 12 octobre 2026.',
            'entetes' => ['Formation', 'Public', 'Ce qu\'elle apprend', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>', 'Développeurs PHP ou Node.js, responsables techniques, administrateurs, prestataires qui maintiennent l\'application', 'Appeler les API des modèles depuis le code existant, contraindre et valider les réponses, réduire les données envoyées, estimer et plafonner la dépense, journaliser et tester avant la mise en service', 'Requêtes HTTP, JSON, Git, gestionnaire de paquets ; une copie de l\'application et des clés de test ouvertes au nom de l\'entreprise'],
                ['<a href="/formations/ia-processus-metier">IA dans les processus métier</a>', 'Responsables et adjoints des achats, de la finance, du service client, des ressources humaines ou de la logistique', 'Dessiner un processus tel qu\'il tourne, attribuer chaque étape à une personne, à une règle ou à l\'IA, puis fixer seuils de validation, échantillons et indicateurs', 'Piloter ou pratiquer le processus au quotidien ; une vingtaine de dossiers récents anonymisés'],
                ['<a href="/formations/odoo-ia">Odoo et IA</a>', 'Référents Odoo, achats, ventes, support, communication ; administrateur pour la partie technique', 'Recenser les fonctions d\'IA présentes dans la base, contrôler les factures numérisées, régler agents et champs IA, surveiller les crédits, relier un assistant externe sous droits minimaux', 'Se servir d\'Odoo dans son poste ; terminal et fichiers de configuration pour la demi-journée technique'],
                ['Dolibarr et IA', 'Administrateurs et utilisateurs avancés de Dolibarr, prestataires qui maintiennent l\'installation', 'Relier l\'IA à Dolibarr par le module livré avec le logiciel, par des modules complémentaires ou par l\'API, et décider de ce que l\'IA peut lire ou écrire', 'Pratique quotidienne de Dolibarr ; droits d\'administration sur une installation de test'],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', 'Commerciaux, service client, recouvrement, référent du logiciel de gestion', 'Envoyer devis et factures depuis le document, répondre dans la fenêtre de 24 heures, rattacher chaque échange à la fiche client, régler ou suspendre les relances, respecter le consentement', 'Gestes de base du logiciel acquis ; une liaison WhatsApp installée ou en cours d\'installation'],
                ['<a href="/formations/ia-droit-ohada">IA et droit OHADA</a>', 'Avocats, juristes d\'entreprise, notaires, magistrats et greffiers de la zone OHADA', 'Chercher dans les Actes uniformes et la jurisprudence de la CCJA avec un assistant, préparer actes et consultations, tenir une veille, vérifier chaque référence, protéger le secret', 'Connaître les Actes uniformes de sa matière et savoir lire un arrêt'],
                ['IA pour l\'audit, le contrôle et la conformité', 'Auditeurs internes et externes, contrôleurs internes et de gestion, responsables conformité', 'Utiliser l\'IA pour échantillonner, analyser des populations entières de pièces et repérer des anomalies, en gardant la trace qui permet de refaire chaque contrôle', 'Pratique de l\'audit ou du contrôle ; aisance avec un tableur'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', 'Un membre de la direction, le référent des données, l\'informatique, le juridique, les ressources humaines, deux ou trois responsables métiers', 'Inventorier outils et usages, classer chaque usage selon son risque, rédiger la charte, répartir les rôles, organiser contrôles, incidents et revues', 'Aucun prérequis technique ; un groupe qui a le pouvoir de décider'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Deux formations semblent convenir : comment trancher ?',
            'intro' => 'Certaines formations du domaine se ressemblent sur le papier. Elles ne s\'adressent pourtant ni aux mêmes personnes ni au même moment du projet. Ces six arbitrages reviennent dans presque toutes les demandes.',
            'items' => [
                ['titre' => 'Votre propre code, ou un logiciel du marché ?', 'texte' => 'Si l\'entreprise possède le code de son application, ou le fait maintenir par un prestataire, la formation technique d\'intégration est la bonne : on y écrit l\'appel au modèle. Si elle utilise Odoo ou Dolibarr tels que l\'éditeur les livre, on commence par ce que le logiciel sait déjà faire, avec Odoo et IA ou Dolibarr et IA, et l\'on ne code que ce qui manque.'],
                ['titre' => 'Un processus, ou toute l\'organisation ?', 'texte' => 'La formation sur les processus métier transforme un circuit précis, de la facture fournisseur au recrutement. La formation sur la gouvernance fixe les règles valables pour tous les usages de l\'IA. Une entreprise sans charte qui veut transformer un processus sensible gagne à faire la gouvernance d\'abord ; une entreprise déjà cadrée passe directement au processus.'],
                ['titre' => 'L\'IA d\'Odoo, ou WhatsApp branché sur Odoo ?', 'texte' => 'Odoo et IA porte sur les fonctions d\'intelligence artificielle de l\'ERP : rédaction, lecture des factures, agents, champs calculés. La formation WhatsApp relié aux logiciels porte sur le canal de messagerie et le suivi des clients, avec ou sans IA. Une équipe commerciale qui envoie ses devis par WhatsApp a besoin de la seconde avant la première.'],
                ['titre' => 'Faire tourner le contrôle, ou le vérifier ?', 'texte' => 'Le responsable qui exploite un processus apprend à concevoir ses points de validation dans la formation sur les processus métier. L\'auditeur ou le contrôleur interne, qui vérifie les processus des autres, trouve sa méthode dans IA pour l\'audit, le contrôle et la conformité. Les deux se complètent quand l\'audit interne doit ensuite tester ce que le métier a mis en place.'],
                ['titre' => 'Juriste : droit OHADA ou règles générales ?', 'texte' => 'IA et droit OHADA traite de la recherche, de la rédaction et de la veille juridiques. Ce que chaque salarié doit savoir des données personnelles et du secret est l\'objet de <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>, dans le domaine voisin. Un juriste chargé de rédiger la charte interne rejoint plutôt le groupe de la formation sur la gouvernance.'],
                ['titre' => 'Équipe technique : agents d\'un côté, intégration de l\'autre', 'texte' => 'Concevoir un assistant qui consulte des documents ou des outils relève des formations sur les agents et le RAG, dans le domaine Intelligence artificielle. Faire appeler un modèle par une application qui tourne déjà, avec ses données, ses coûts et ses tests, relève d\'Intégrer l\'IA dans ses logiciels existants. Beaucoup d\'équipes suivent les deux, dans cet ordre-ci.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quel enchaînement de formations conseiller à chaque profil ?',
            'intro' => 'Un parcours relie deux ou trois formations dans un ordre qui suit le projet de l\'entreprise. Les propositions ci-dessous servent de point de départ et s\'ajustent après le premier échange, selon le logiciel réellement en service et le niveau de l\'équipe.',
            'items' => [
                ['titre' => 'Équipe technique ou prestataire qui maintient le logiciel', 'texte' => 'Commencer par <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>, qui part du code de l\'entreprise et s\'achève sur une liste de contrôle de mise en production. Si le logiciel est Odoo, ajouter la demi-journée technique d\'<a href="/formations/odoo-ia">Odoo et IA</a>, consacrée au serveur MCP et à l\'API JSON-2. Le responsable technique a intérêt à siéger aussi dans le groupe de gouvernance : c\'est lui qui ouvre et ferme les accès.'],
                ['titre' => 'Responsable métier : achats, finance, service client, RH, logistique', 'texte' => 'Partir d\'<a href="/formations/ia-processus-metier">IA dans les processus métier</a> avec un processus réel de son service. La carte cible et la fiche de contrôle produites pendant la session deviennent le cahier des charges des développeurs ou de l\'intégrateur. Pour construire soi-même un premier flux sans code, la formation <a href="/formations/n8n">n8n de zéro à l\'autonomie</a>, du domaine Automatisation, prend ensuite le relais.'],
                ['titre' => 'Utilisateurs d\'Odoo', 'texte' => 'Une équipe qui hésite encore sur les écrans de base suit d\'abord <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>. Une fois les gestes acquis, <a href="/formations/odoo-ia">Odoo et IA</a> apprend à se servir de l\'IA déjà présente dans la version 20.0, puis <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a> si les clients écrivent sur WhatsApp. Les services comptables passent aussi par <a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>.'],
                ['titre' => 'Utilisateurs de Dolibarr', 'texte' => 'Le socle reste <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>, du devis au règlement. Viennent ensuite Dolibarr et IA, qui montre ce que le module d\'IA livré avec Dolibarr sait faire et ce qui demande un module complémentaire ou un appel à l\'API, puis la formation WhatsApp reliée aux logiciels pour les commerciaux et le recouvrement. L\'administrateur de l\'installation suit les deux premières en entier.'],
                ['titre' => 'Juristes, avocats, notaires et juridictions', 'texte' => 'Commencer par <a href="/formations/ia-droit-ohada">IA et droit OHADA</a>, qui part de la pratique de la recherche et du secret professionnel. Pour un cabinet ou une direction juridique qui manipule beaucoup de données de clients, ajouter <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Le juriste interne qui portera la charte rejoint enfin <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>.'],
                ['titre' => 'Auditeurs, contrôleurs internes et responsables conformité', 'texte' => 'Le parcours s\'ouvre sur IA pour l\'audit, le contrôle et la conformité, qui leur apprend à analyser des populations entières de pièces sans perdre la trace de leur méthode. Il se prolonge par la formation sur la gouvernance, où ils prennent leur place dans le plan de contrôle, et, pour ceux qui auditeront un processus transformé, par la session sur les processus métier.'],
                ['titre' => 'Direction qui encadre', 'texte' => 'Le comité de direction suit <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> avant d\'engager un projet d\'intégration : inventaire, classement des usages, charte, rôles. S\'il doit encore décider des usages à financer, <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, du domaine voisin, vient avant. Un membre de la direction assiste ensuite à la dernière demi-journée de la formation sur les processus, celle où les choix sont présentés et tranchés.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Dans quel ordre former une organisation qui veut brancher l\'IA sur ses logiciels ?',
            'items' => [
                ['titre' => 'Poser les règles avant le premier branchement', 'texte' => 'Le groupe de gouvernance dresse l\'inventaire de ce qui existe déjà, car l\'IA est souvent arrivée par une mise à jour de l\'ERP ou de la messagerie, puis il décide des usages permis, encadrés ou interdits. Sans cette étape, chaque service branche son outil avec ses propres règles, et personne ne sait plus quelles données sortent.', 'duree' => 'Avant tout projet'],
                ['titre' => 'Choisir un premier processus et le dessiner', 'texte' => 'Un responsable métier met à plat un circuit fréquent et coûteux en temps, puis désigne les étapes à confier à une règle, à l\'IA ou à une personne. Ce dessin, avec ses seuils de validation, sert de cahier des charges et évite de coder une étape que personne n\'a demandée.', 'duree' => 'Premier mois'],
                ['titre' => 'Former ceux qui construisent', 'texte' => 'Les développeurs, le référent Odoo ou l\'administrateur de Dolibarr apprennent à relier l\'IA au système sur une copie de test : droits minimaux, données réduites, coût estimé, journal des appels. C\'est le moment où l\'on découvre qu\'un plan d\'abonnement ou un module manque, et il vaut mieux le découvrir ici qu\'en production.', 'duree' => 'Premier et deuxième mois'],
                ['titre' => 'Former ceux qui utiliseront l\'outil chaque jour', 'texte' => 'Commerciaux, comptables fournisseurs, service client ou juristes apprennent à relire ce que propose la machine, à reprendre la main et à signaler une erreur. Cette formation se place juste avant la mise en service, pas trois mois plus tôt : les gestes s\'oublient vite quand ils ne servent pas.', 'duree' => 'Avant la mise en service'],
                ['titre' => 'Contrôler, mesurer, ajuster', 'texte' => 'Une revue relit les journaux, les corrections et les coûts réels, et l\'audit interne vérifie que les contrôles prévus sont réellement faits. Les seuils sont resserrés ou relâchés selon les erreurs observées, et une étape peut être rendue à la main si elle ne tient pas ses promesses.', 'duree' => 'Trois mois après'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que faut-il préparer avant la session, formation par formation ?',
            'legende' => 'Ce domaine se travaille sur les systèmes de l\'entreprise, ce qui demande une préparation plus lourde qu\'une formation à un assistant en ligne. Le premier échange fixe la liste exacte ; les accès sont ouverts par l\'entreprise, au nom de l\'entreprise, jamais par le formateur.',
            'entetes' => ['Formation', 'Ce que les participants apportent', 'Accès à ouvrir avant le premier jour'],
            'lignes'  => [
                ['Intégrer l\'IA dans ses logiciels existants', 'Le cas choisi dans l\'application, une trentaine d\'exemples anonymisés avec la réponse attendue, une description de l\'architecture', 'Dépôt ou copie du code, base de données de test, clés d\'API de test chez au moins un fournisseur de modèles'],
                ['IA dans les processus métier', 'Un processus par participant ou par binôme, ses volumes approximatifs, vingt à trente dossiers récents anonymisés', 'L\'assistant d\'IA autorisé dans l\'entreprise, s\'il y en a un ; un tableur partagé'],
                ['Odoo et IA', 'Des factures fournisseurs réelles en PDF, des tickets ou fils de discussion à résumer, la liste des applications installées', 'Comptes nominatifs, copie de test de la base si l\'hébergement le permet, quelques crédits d\'essai'],
                ['Dolibarr et IA', 'La liste des modules activés et la version installée, quelques documents types : propositions, factures, courriels', 'Installation de test avec droits d\'administration, clé de l\'API de Dolibarr, clé d\'un fournisseur de modèles'],
                ['WhatsApp relié à Odoo, Dolibarr et au CRM', 'Les modèles de messages déjà approuvés, des exemples de relances, la charte de réponse si elle existe', 'Compte de chaque participant dans le logiciel, téléphone de test, fiches clients de test clairement marquées'],
                ['IA et droit OHADA', 'Des questions tirées de la pratique, sans nom de client, et des trames d\'actes anonymes', 'Accès aux bases gratuites de l\'OHADA et, s\'il existe, au compte professionnel d\'assistant du cabinet'],
                ['IA pour l\'audit, le contrôle et la conformité', 'Une population de pièces anonymisée, extraite de l\'ERP ou du tableur, et un programme de travail récent', 'Tableur, assistant autorisé par la direction de l\'audit, dossier partagé pour les feuilles de travail'],
                ['Gouverner l\'IA dans l\'entreprise', 'Résultats du questionnaire d\'usages, liste des abonnements logiciels, règlement intérieur, charte informatique, registre des traitements s\'il est tenu', 'Consoles d\'administration des outils consultées en séance par leur titulaire'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent l\'IA branchée sur les logiciels de gestion ?',
            'items' => [
                ['valeur' => '46,45 %', 'libelle' => 'Part des entreprises de l\'Union européenne de 10 salariés ou plus qui utilisaient un ERP en 2025, en hausse de 3,07 points depuis 2023, selon Eurostat (données extraites en mai 2026) : un système existant sur lequel l\'IA vient désormais se brancher', 'source' => 'Eurostat, E-business integration', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-business_integration'],
                ['valeur' => '41 % contre 89 %', 'libelle' => 'Usage d\'un ERP en 2025 dans les petites entreprises de l\'Union, comparé aux grandes ; pour le CRM, l\'écart va de 25 % à 65 %, selon Eurostat (publication du 20 mai 2026)', 'source' => 'Eurostat, actualité du 20 mai 2026', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20260520-1'],
                ['valeur' => '13 %', 'libelle' => 'Organisations ayant signalé une violation de leurs modèles ou applications d\'IA ; parmi elles, 97 % n\'avaient pas de contrôle d\'accès à l\'IA, selon le rapport d\'IBM et du Ponemon Institute sur 600 organisations touchées entre mars 2024 et février 2025 (communiqué du 30 juillet 2025)', 'source' => 'IBM, Cost of a Data Breach Report 2025', 'url' => 'https://newsroom.ibm.com/2025-07-30-ibm-report-13-of-organizations-reported-breaches-of-ai-models-or-applications,-97-of-which-reported-lacking-proper-ai-access-controls'],
                ['valeur' => '10', 'libelle' => 'Risques recensés par l\'OWASP dans son Top 10 2025 des applications fondées sur des modèles de langage, de l\'injection de consignes à la consommation non bornée, en passant par l\'autonomie excessive (page consultée le 5 octobre 2026)', 'source' => 'OWASP, Top 10 for LLM Applications 2025', 'url' => 'https://genai.owasp.org/llm-top-10/'],
                ['valeur' => '2 décembre 2027', 'libelle' => 'Date à partir de laquelle s\'appliquent, depuis l\'omnibus numérique, les règles du règlement européen sur l\'IA pour les systèmes à haut risque de l\'annexe III, comme le tri des candidatures ou l\'évaluation de la solvabilité (page mise à jour le 3 août 2026)', 'source' => 'Commission européenne, cadre réglementaire de l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels coûts d\'éditeur s\'ajoutent à la formation, selon le système concerné ?',
            'legende' => 'Ces montants sont payés par l\'entreprise à l\'éditeur, pas au formateur. Ils sont relevés sur les pages officielles le 5 octobre 2026 et changent souvent : on les vérifie de nouveau avant toute décision d\'achat.',
            'entetes' => ['Système', 'Ce qui se paie', 'Repère relevé le 5 octobre 2026', 'Source'],
            'lignes'  => [
                ['Odoo', 'Un abonnement par utilisateur ; l\'IA agentique, Studio et l\'API externe figurent dans le plan Personnalisé, pas dans le plan Standard', 'Standard : 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; Personnalisé : 35,90 €, puis 44,90 € ; une seule application reste gratuite', 'Odoo, page Tarification'],
                ['Fonctions d\'IA d\'Odoo', 'Des crédits prépayés pour l\'IA et la numérisation des documents, consommés à l\'usage', 'Le détail et la surveillance du solde sont traités dans la formation Odoo et IA', 'Odoo, documentation 20.0'],
                ['Dolibarr', 'Rien pour le logiciel, libre ; l\'hébergement, d\'éventuels modules complémentaires et la consommation du fournisseur de modèles choisi', 'Dernière version publiée sur GitHub : 24.0.1, le 7 septembre 2026 ; le module d\'IA est livré avec la distribution', 'GitHub de Dolibarr ; wiki de Dolibarr'],
                ['API des modèles (OpenAI, Anthropic, Google)', 'Un prix par million de jetons lus et produits, facturé en dollars, avec des remises pour le cache et les traitements par lot', 'Prix par modèle comparés dans la formation Intégrer l\'IA dans ses logiciels existants', 'Pages tarifs des fournisseurs'],
                ['WhatsApp par la plateforme de Meta', 'Une facturation par message, selon la catégorie du modèle', 'Depuis le 1er octobre 2026, 1 000 messages de service gratuits par mois et par numéro professionnel, non reportables, puis facturés ; sans moyen de paiement, l\'envoi s\'arrête une fois le quota épuisé', 'Meta, tarification de la plateforme WhatsApp Business'],
                ['n8n Cloud, si un flux relie les systèmes', 'Un abonnement mensuel selon le nombre d\'exécutions', 'Starter : 20 € par mois en paiement annuel pour 2 500 exécutions ; Pro : 50 € pour 10 000 ; environ 17 % de plus en paiement mensuel', 'n8n, page des tarifs'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Salle, visioconférence ou les deux : comment se former sur un système déjà en production ?',
            'legende' => 'Les quatre formats valent pour les huit formations. Ce qui les distingue ici, c\'est l\'environnement sur lequel on travaille : votre système, une copie de test, ou une base de démonstration.',
            'entetes' => ['Format', 'Sur quel environnement', 'Formations qui s\'y prêtent le mieux', 'Condition à réunir'],
            'lignes'  => [
                ['Intra', 'Une copie de test de votre base ou de votre application, avec des données anonymisées, dans vos locaux ou une salle louée', 'Odoo et IA, Dolibarr et IA, WhatsApp relié aux logiciels, intégration technique, gouvernance', 'Copie de test prête la veille, comptes ouverts, participants libérés pour toute la session'],
                ['Inter', 'Une base de démonstration commune et des dossiers fictifs : aucune donnée d\'une entreprise n\'est montrée aux autres', 'IA et droit OHADA, processus métier, audit et contrôle, gouvernance pour une petite structure', 'Accepter de transposer seul les exercices à son propre système après la session'],
                ['À distance', 'Votre environnement de test, partagé à l\'écran, avec des séances plus courtes', 'Intégration technique et revue de code, demi-journée technique d\'Odoo, séances de suivi', 'Connexion stable, accès distant au serveur de test, caméra allumée pendant les exercices'],
                ['Hybride', 'Les premières demi-journées en salle, puis des séances à distance sur le système réel après la mise en service', 'Les formations qui précèdent un lancement : processus métier, WhatsApp relié aux logiciels, Odoo et IA', 'Dates des séances à distance fixées dès le départ et calées sur le calendrier du projet'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Comment le prix d\'une formation du domaine est-il établi ?',
            'intro'      => 'Aucune formation du domaine n\'a de tarif affiché : chacune est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits. Le devis distingue la préparation, l\'animation et le suivi. Il se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements, crédits et messages payés aux éditeurs restent à la charge de l\'entreprise et n\'entrent jamais dans ce prix.',
            'items'      => [
                ['offre' => 'Une formation pour un rôle', 'prix' => 'Sur devis', 'inclus' => ['Cadrage du cas réel et du système concerné', 'Exercices préparés sur une copie de test ou des dossiers anonymisés', 'Supports, consignes et listes de contrôle remis à l\'entreprise', 'Séance de suivi quand la fiche la prévoit']],
                ['offre' => 'Un parcours pour un projet', 'prix' => 'Sur devis', 'inclus' => ['Deux ou trois formations ordonnées selon le calendrier du projet', 'Un même cas fil rouge, de la carte du processus à la mise en service', 'Point d\'étape entre deux sessions', 'Coordination avec l\'intégrateur ou le prestataire, s\'il y en a un']],
                ['offre' => 'Un programme pour l\'organisation', 'prix' => 'Sur devis', 'inclus' => ['Gouvernance pour la direction, formations par rôle pour les équipes', 'Groupes composés par système et par niveau', 'Revue des journaux et des corrections après la mise en service', 'Bilan écrit et liste des ajustements']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, chaque groupe restant réduit pour que tous pratiquent.',
                'Le nombre de systèmes concernés : un seul logiciel, ou l\'ERP plus WhatsApp plus une application maison.',
                'La préparation d\'une copie de test et l\'anonymisation des données qu\'elle contient.',
                'Les modules facultatifs : demi-journée technique, revue de code, séance de suivi, revue à trois mois.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : en salle, à distance ou en formule hybride.',
                'La langue des supports, français ou anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on faire financer ces formations par un fonds de formation continue ?',
            'paragraphes' => [
                'Parfois, et cela se vérifie toujours auprès du fonds concerné, avant de signer. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> sur le plan de formation, consultée le 5 octobre 2026, réserve ce dispositif aux entreprises à jour de leurs deux taxes de formation ; elle couvre les actions internes, intra-entreprise, interentreprises ou à l\'étranger, et le remboursement n\'intervient qu\'après contrôle des services du fonds et approbation de sa Commission permanente.',
                'Au Bénin, les statuts du FODEFCA, approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>, en font à l\'article 5 le principal guichet de financement de la formation continue du secteur privé ; l\'article 35 laisse à la charge du bénéficiaire de 10 à 30 % du coût total, selon les cas. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet au personnel des entreprises et des organisations professionnelles, avec une demande en ligne.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que l\'accès aux fonds publics ou mutualisés, ceux des OPCO compris, exige depuis le 1er janvier 2022 un prestataire certifié Qualiopi. Richard SALANON ne détient pas cette certification et n\'est agréé par aucun fonds africain. La prudence consiste donc à budgéter la formation sans aide, puis à interroger votre fonds par écrit avec le programme et le devis ; la décision lui appartient entièrement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on quand une entreprise forme ses équipes à l\'IA dans ses logiciels ?',
            'intro' => 'Ces erreurs ne tiennent presque jamais à la technique. Elles viennent de l\'ordre des formations, du choix des personnes envoyées et de ce qui n\'a pas été préparé avant la première séance.',
            'items' => [
                ['titre' => 'Former les développeurs et oublier les utilisateurs', 'texte' => 'L\'intégration est livrée, propre et testée, mais les commerciaux ou les comptables ne savent ni relire ce que propose la machine ni la contourner quand elle se trompe. Au bout d\'un mois, ils reviennent à leur tableur. Chaque projet prévoit une formation pour ceux qui construisent et une pour ceux qui utilisent.'],
                ['titre' => 'Brancher l\'IA sur des données en désordre', 'texte' => 'Fournisseurs en double, numéros de téléphone incomplets, catégories saisies au hasard : un modèle qui lit ces données propose des erreurs avec assurance. Le nettoyage des fiches se fait avant la session, ou devient le premier exercice, pas une tâche remise à plus tard.'],
                ['titre' => 'Ouvrir l\'écriture dès le premier jour', 'texte' => 'Un agent autorisé à créer ou modifier des enregistrements avant d\'avoir fait ses preuves en lecture seule multiplie les corrections. On commence par des propositions validées à la main, puis on élargit les droits étape par étape, sur la foi des chiffres du journal.'],
                ['titre' => 'Laisser les clés au nom d\'un salarié', 'texte' => 'La clé d\'API ou le compte de la plateforme de messagerie ouvert sur l\'adresse personnelle d\'un employé disparaît avec lui. Comptes, clés et numéros appartiennent à l\'entreprise, sont rattachés à un utilisateur technique et figurent dans l\'inventaire de la gouvernance.'],
                ['titre' => 'Découvrir la facture variable après coup', 'texte' => 'Jetons, crédits d\'Odoo, messages WhatsApp au-delà du quota gratuit : ces coûts suivent le volume. Une estimation mensuelle, un plafond et une personne qui reçoit l\'alerte se décident pendant la formation, pas à la réception de la première facture.'],
                ['titre' => 'Repousser les règles à plus tard', 'texte' => 'Chaque service branche l\'IA à sa manière, puis la direction découvre trois outils, trois fournisseurs et aucune trace de ce qui a été envoyé. Une charte provisoire d\'une page, écrite avant les formations techniques, coûte moins cher que la remise en ordre.'],
                ['titre' => 'Mesurer la satisfaction au lieu des corrections', 'texte' => 'Une équipe contente de sa session peut ne rien changer. Ce qui compte se lit dans le journal : part des propositions acceptées sans retouche, corrections, reprises à la main, délais. On note ces chiffres avant la formation et un mois après.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne jamais faire les exercices sur la base de production ?',
            'texte' => 'Un exercice réussi peut créer une vraie facture, déclencher une règle d\'automatisation ou envoyer un WhatsApp à un vrai client. Les formations du domaine se font donc sur une copie de test, aux données anonymisées, ou, à défaut, sur des fiches clairement marquées avec les envois sortants coupés. L\'histoire de <a href="/histoires/knight-capital">Knight Capital</a> rappelle ce que coûte une fonction réveillée par erreur sur un système en service : quelques minutes suffisent pour des dégâts que personne n\'avait prévus.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Serveurs, lois sur les données, langues : que change le terrain pour un système relié à l\'IA ?',
            'paragraphes' => [
                'Le lieu où tourne le système compte d\'abord. Une base Odoo hébergée par l\'éditeur, un Dolibarr installé sur un serveur à Cotonou ou une application maison chez un hébergeur européen n\'appellent pas les modèles d\'IA dans les mêmes conditions de délai ni de coupure. Les formations du domaine partent de cette réalité : appels placés dans une file d\'attente, nouvelles tentatives bornées, et surtout un travail qui continue à la main quand le réseau ou le fournisseur ne répond plus. Un système qui s\'arrête avec la connexion n\'est pas prêt pour la production.',
                'Le droit pèse ensuite sur chaque champ envoyé. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> n\'admet, à son article 391, le transfert de données personnelles vers un État tiers que si l\'Autorité y constate une protection équivalente ; son article 401 interdit qu\'une décision produisant des effets juridiques à l\'égard d\'une personne, ou l\'affectant de manière significative, repose sur ce seul traitement automatisé. D\'où deux réflexes enseignés partout : réduire les données transmises au modèle, et garder une personne qui décide quand un client, un candidat ou un salarié est concerné.',
                'En Europe, le <a href="https://eur-lex.europa.eu/eli/reg/2016/679/oj">RGPD</a> pose la même limite à son article 22. Le règlement européen sur l\'IA y ajoute, à son article 4, une obligation de maîtrise de l\'IA : selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, elle s\'applique depuis le 2 février 2025 et se contrôle depuis le 3 août 2026. L\'omnibus numérique la garde pour les fournisseurs et les utilisateurs professionnels, sans exiger un niveau « suffisant », mais la formation du personnel chargé de la surveillance humaine reste obligatoire pour les systèmes à haut risque.',
                'Le droit des affaires, enfin, est commun à une large part de la clientèle. Selon la <a href="https://www.ohada.org/en/general-overview/">présentation générale de l\'OHADA</a> consultée le 5 octobre 2026, dix-sept États appliquent ses Actes uniformes, avec une Cour commune de justice et d\'arbitrage à Abidjan. Juristes et auditeurs de Dakar, de Douala ou de Kinshasa travaillent donc sur les mêmes textes, ce qui permet des sessions interentreprises entre pays. La langue suit la même logique : modèles de messages et consignes en français, réponses de clients parfois en langue locale, que l\'équipe apprend à faire remonter à un humain.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier ces formations à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Les sujets de ce domaine sont ceux de son travail quotidien : il déploie Odoo et Dolibarr, écrit les connecteurs qui relient un logiciel de gestion à WhatsApp ou à un modèle d\'IA, et a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d\'Afrique francophone. Co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, indique avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin et de la Côte d\'Ivoire à la France, à la Suisse et au Canada.',
                'Sa façon de former tient à quelques principes : travailler sur une copie de vos systèmes plutôt que sur une démonstration, composer les groupes par rôle, terminer chaque demi-journée par un exercice de contrôle, remettre des supports qui restent la propriété de l\'entreprise, prévoir un suivi quand le système entre en service. Il n\'est certifié par aucun éditeur et ne se présente comme partenaire officiel ni d\'Odoo, ni de Dolibarr, ni de Meta, ni d\'un fournisseur de modèles. Il n\'est ni avocat ni auditeur : pour les juristes et les contrôleurs, il forme aux outils et à la méthode de vérification, le fond restant l\'affaire des professionnels présents.',
                'Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>. Les règles communes à toutes ses sessions figurent sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>, et les sept autres domaines dans le <a href="/formations/">catalogue des formations</a>. Pour comparer les deux ERP avant de choisir une formation, le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> résume leurs différences.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de choisir une formation de ce domaine ?',
            'texte' => 'Partez du système réel et du rôle de chaque personne, pas du nom d\'un modèle. Écrivez quelques règles avant de brancher quoi que ce soit, dessinez le processus avant de le coder, formez ceux qui construisent puis ceux qui utilisent, travaillez toujours sur une copie de test, et fixez dès le devis la date à laquelle on relira les journaux.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel système voulez-vous ouvrir à l\'IA, et qui doit apprendre à le tenir ?',
            'texte'  => 'Indiquez le logiciel et sa version, son hébergement, la tâche ou le processus visé, les personnes concernées et le format souhaité : vous recevez une réponse sous ' . fait('delai_reponse') . ', puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Construire mon parcours'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer pour suivre une formation de ce domaine ?', 'r' => 'Seule la formation Intégrer l\'IA dans ses logiciels existants s\'adresse à des développeurs. La demi-journée technique d\'Odoo et IA et la partie administration de Dolibarr et IA demandent d\'être à l\'aise avec un terminal ; les cinq autres formations n\'exigent aucune notion de code.'],
        ['q' => 'Notre application a été développée sur mesure : quelle formation choisir ?', 'r' => 'Intégrer l\'IA dans ses logiciels existants, suivie par vos développeurs ou par le prestataire qui maintient le code. Le responsable du processus concerné gagne à suivre en parallèle la formation sur les processus métier, pour fixer ce que l\'IA a le droit de faire.'],
        ['q' => 'Notre Odoo est au plan Standard : la formation Odoo et IA a-t-elle un intérêt ?', 'r' => 'Oui, mais il faut le savoir avant : selon la page Tarification d\'Odoo, l\'IA agentique, Studio et l\'API externe relèvent du plan Personnalisé. Le premier exercice inventorie ce que votre plan permet réellement, et le programme s\'adapte à ce constat.'],
        ['q' => 'Dolibarr contient-il déjà de l\'intelligence artificielle ?', 'r' => 'Un module d\'IA est livré avec Dolibarr. Selon son wiki, consulté le 5 octobre 2026, il ne sert pour l\'instant qu\'à l\'envoi de courriels et à la création de pages du module site web. Le reste passe par des modules complémentaires ou par l\'API, ce que traite la formation Dolibarr et IA.'],
        ['q' => 'Quelle différence avec le domaine Intelligence artificielle ?', 'r' => 'Le domaine Intelligence artificielle apprend aux personnes à se servir d\'un assistant. Celui-ci traite de l\'IA qui agit dans un logiciel déjà en place : données transmises, droits, coûts à l\'usage, validation et journal. Une équipe débutante commence souvent par le premier.'],
        ['q' => 'Peut-on se former avant d\'avoir choisi le fournisseur d\'IA ?', 'r' => 'C\'est même conseillé. La formation technique compare plusieurs fournisseurs sur votre propre cas, et la formation sur la gouvernance fixe les critères de choix : lieu de traitement des données, conservation, coût, réversibilité.'],
        ['q' => 'Nos données ne doivent pas quitter l\'entreprise : est-ce compatible avec ces formations ?', 'r' => 'Oui. Les exercices se font sur des copies anonymisées, et chaque formation apprend à limiter les champs transmis au strict nécessaire. Si aucune donnée ne doit sortir, la question d\'un modèle hébergé sur vos propres serveurs se pose dès le cadrage.'],
        ['q' => 'Les formations Dolibarr et IA et IA pour l\'audit sont-elles déjà disponibles ?', 'r' => 'Leurs fiches détaillées sont publiées à partir du 12 octobre 2026. Une demande peut être faite dès maintenant : le premier échange sert à fixer le contenu sur votre installation ou votre programme de contrôle.'],
        ['q' => 'Combien coûte une formation du domaine ?', 'r' => 'Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du nombre de participants, des systèmes concernés, de la préparation d\'une copie de test, des modules facultatifs, du lieu et du mode. Les coûts des éditeurs restent à part.'],
        ['q' => 'Un fonds de formation peut-il financer la session ?', 'r' => 'Parfois, selon les règles du FDFP, du FODEFCA, du 3FPT ou d\'un OPCO, et sans aucune garantie. Richard SALANON n\'est ni certifié Qualiopi ni agréé par un fonds : interrogez le vôtre par écrit, programme et devis en main.'],
        ['q' => 'La formation peut-elle se faire à distance si notre serveur est dans nos locaux ?', 'r' => 'Oui, à condition d\'ouvrir un accès distant à un environnement de test, ou de partager l\'écran d\'un poste qui y accède. Les séances sont alors plus courtes et les exercices préparés à l\'avance.'],
    ],

    'sources' => [
        ['titre' => 'Eurostat, Statistics Explained : E-business integration (usage des ERP et des CRM en 2025, données extraites en mai 2026)', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-business_integration', 'date' => '2026-10-05'],
        ['titre' => 'Eurostat, actualité du 20 mai 2026 : usage des applications de gestion selon la taille des entreprises en 2025', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20260520-1', 'date' => '2026-10-05'],
        ['titre' => 'IBM, communiqué du 30 juillet 2025 sur le Cost of a Data Breach Report 2025', 'url' => 'https://newsroom.ibm.com/2025-07-30-ibm-report-13-of-organizations-reported-breaches-of-ai-models-or-applications,-97-of-which-reported-lacking-proper-ai-access-controls', 'date' => '2026-10-05'],
        ['titre' => 'OWASP, Top 10 for LLM Applications 2025', 'url' => 'https://genai.owasp.org/llm-top-10/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application et cas à haut risque (mise à jour du 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, page Tarification (plans Standard et Personnalisé, IA agentique, API externe)', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (quota de 1 000 messages de service depuis le 1er octobre 2026)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, Plans and Pricing', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Dolibarr, version 24.0.1 publiée sur GitHub le 7 septembre 2026', 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module AI (Artificial Intelligence)', 'url' => 'https://wiki.dolibarr.org/index.php/Module_AI_(Artificial_Intelligence)', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 401)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2016/679 (RGPD), article 22', 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, présentation générale : États membres et institutions', 'url' => 'https://www.ohada.org/en/general-overview/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (articles 5 et 35)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['integrer-ia-logiciels-existants', 'ia-processus-metier', 'odoo-ia', 'dolibarr-ia', 'whatsapp-odoo-dolibarr-crm', 'ia-droit-ohada', 'ia-audit-controle', 'gouvernance-ia'],
        'services'   => ['integration-ia-entreprise', 'integration-odoo', 'integration-dolibarr', 'integration-whatsapp'],
    ],
];
