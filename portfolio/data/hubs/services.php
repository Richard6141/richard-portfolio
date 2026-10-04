<?php
// ============================================================
// data/hubs/services.php · Hub /services/ (vague 1A).
// Le gabarit registre-hub.php affiche au-dessus des sections la grille
// des piliers publiés (champ « liste ») ; les sections présentent les
// familles, le choix du premier service, les enchaînements, la méthode,
// les prix et les engagements. Tarifs et phrase d'entité lus dans faits.php.
// Sources officielles consultées le 03/10/2026 (voir « sources »).
// ============================================================
declare(strict_types=1);

$tarifs = (array) fait('tarifs_depart');
$delais = (array) fait('delais');

return [
    'titre'   => 'Services de Richard SALANON : sites, applications, IA, automatisation, ERP et conseil',
    'liste'   => 'service',
    'title'   => 'Services : sites, applications, IA et ERP | Richard SALANON',
    'meta'    => 'Sites, applications, IA, automatisation, Odoo, Dolibarr et conseil : 27 services en 4 familles, une même méthode, des prix clairs, une réponse sous 24 h.',
    'en_bref' => 'Richard SALANON, consultant en digitalisation et développeur logiciel à Cotonou, propose 27 services réunis en quatre familles : sites et boutiques, applications et IA, visibilité et conseil, ERP et gestion. Ils s\'adressent aux indépendants, TPE, PME, écoles, cabinets et ONG d\'Afrique francophone, d\'Europe et du Canada, sur place au Bénin ou à distance dans 34 pays. Un site vitrine se livre en ' . $delais['Site vitrine'] . ', une application sur mesure en ' . $delais['Application sur mesure'] . '. Les tarifs de départ publiés vont de ' . $tarifs['Référencement naturel'] . ' à ' . $tarifs['Site vitrine'] . ' ; tout le reste est chiffré sur devis gratuit, avec une réponse sous 24 heures.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'faits_hero' => [
        ['l' => 'Familles', 'v' => 'Sites et boutiques, applications et IA, visibilité et conseil, ERP et gestion'],
        ['l' => 'Pour qui', 'v' => 'Indépendants, TPE, PME, écoles, cabinets et ONG'],
        ['l' => 'Zones', 'v' => 'Sur place au Bénin, à distance dans 34 pays'],
        ['l' => 'Devis', 'v' => 'Gratuit, détaillé ligne par ligne'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],
    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvrent ces services, et pour quelles entreprises ont-ils été pensés ?',
            'paragraphes' => [
                'Les services présentés sur cette page couvrent tout ce qu\'une entreprise doit construire pour exister, vendre et s\'organiser avec le numérique : un site qui inspire confiance, une boutique qui encaisse, une application qui remplace les cahiers, des automatisations qui suppriment les ressaisies, un assistant d\'intelligence artificielle qui répond sur WhatsApp, un ERP qui tient le stock et la comptabilité, et le conseil qui permet de décider dans quel ordre faire tout cela. Chaque service a sa propre page détaillée, listée plus haut ; celle-ci sert à choisir par où commencer.',
                'Ils ont été pensés pour des structures qui n\'ont pas de direction informatique : l\'artisan qui veut être trouvé, le commerçant qui vend déjà sur WhatsApp, la PME qui jongle entre trois tableurs, l\'école qui encaisse les frais par mobile money, le cabinet qui veut gagner du temps sur ses courriers, l\'ONG qui doit rendre compte à ses bailleurs. Ils servent aussi les entreprises d\'Europe et du Canada qui cherchent un développeur francophone pour un projet précis ou une équipe en renfort.',
                'Ce qu\'ils ne recouvrent pas mérite d\'être dit aussi. Il n\'y a pas ici de publicité payante gérée au mois, de gestion quotidienne de réseaux sociaux, d\'infogérance d\'un parc d\'ordinateurs ni de prestation comptable : quand votre projet en a besoin, le cadrage le signale et vous oriente vers le bon métier. Il n\'y a pas non plus de forfait unique qui conviendrait à tout le monde : chaque devis part de votre situation.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Sites et boutiques : quels problèmes cette famille de services résout-elle ?',
            'intro' => 'Cette famille répond à une question simple : quand un client cherche votre métier ou votre nom, que trouve-t-il, et peut-il passer à l\'action sans vous appeler ? Elle regroupe six services, du premier site à son entretien dans la durée.',
            'items' => [
                ['titre' => '« Mes clients ne me trouvent pas, ou doutent de mon sérieux »', 'texte' => 'Une page Facebook ne suffit plus pour répondre à un appel d\'offres ou rassurer un client de la diaspora. Le <a href="/services/site-vitrine-professionnel">site vitrine professionnel</a> présente vos services, vos références réelles et vos coordonnées, avec un formulaire et un bouton WhatsApp, sur une adresse qui vous appartient.'],
                ['titre' => '« Je vends sur WhatsApp, mais je perds des commandes et du temps »', 'texte' => 'Catalogue envoyé en photos, prix redemandés dix fois, paiements à vérifier un par un : le <a href="/services/site-e-commerce">site e-commerce</a> met le catalogue en ligne, encaisse par mobile money comme par carte et prépare la livraison, sans vous priver du contact direct.'],
                ['titre' => '« Je lance une offre ou une campagne, et je n\'ai pas de page pour l\'accueillir »', 'texte' => 'Envoyer une publicité vers une page d\'accueil généraliste disperse les visiteurs. La <a href="/services/landing-page-haute-conversion">landing page haute conversion</a> se concentre sur une seule offre et un seul geste attendu : réserver, s\'inscrire, demander un devis.'],
                ['titre' => '« Mon site existe, mais il est lent, daté ou invisible »', 'texte' => 'La <a href="/services/refonte-migration-de-site">refonte et migration de site</a> reprend la structure, la vitesse et les contenus, et redirige chaque ancienne adresse vers la nouvelle pour ne pas perdre ce que le site avait gagné sur Google.'],
                ['titre' => '« Personne ne s\'occupe du site depuis sa mise en ligne »', 'texte' => 'Extensions jamais mises à jour, sauvegardes absentes, nom de domaine oublié : la <a href="/services/maintenance-support">maintenance et le support</a> organisent les mises à jour, les sauvegardes testées et le dépannage, avec un interlocuteur qui connaît votre site.'],
                ['titre' => '« J\'ai besoin d\'un développeur, pas d\'une agence »', 'texte' => 'Pour une évolution ponctuelle, une correction ou un renfort sur un projet existant, le service de <a href="/services/developpeur-web-freelance">développeur web freelance</a> vous met en relation directe avec la personne qui écrit le code, sans intermédiaire.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Applications et IA : quels problèmes ces services règlent-ils dans le quotidien d\'une équipe ?',
            'intro' => 'Ici, le numérique ne sert plus seulement à être vu, il sert à travailler : saisir, suivre, relancer, répondre. Les services de cette famille partent toujours d\'un processus réel de l\'entreprise, jamais d\'une technologie à placer.',
            'items' => [
                ['titre' => '« Nos informations sont éclatées entre cahiers, tableurs et messages »', 'texte' => 'L\'<a href="/services/application-web-sur-mesure">application web sur mesure</a> réunit dans un seul outil les dossiers, les stocks, les rendez-vous ou les tableaux de bord, avec des droits différents selon les rôles.'],
                ['titre' => '« Nos agents de terrain ou nos clients ont besoin d\'une application sur leur téléphone »', 'texte' => 'L\'<a href="/services/application-mobile-android-ios">application mobile Android et iOS</a> est conçue pour des téléphones et des connexions réels, publiée sur les magasins d\'applications et reliée à un espace d\'administration.'],
                ['titre' => '« Nous voulons vendre notre savoir-faire sous forme de logiciel, ou offrir un portail à nos clients »', 'texte' => 'Le service <a href="/services/saas-espace-client">SaaS et espace client</a> construit un logiciel par abonnement ou un portail sécurisé où vos clients suivent leurs dossiers, leurs factures et leurs documents.'],
                ['titre' => '« Nous recopions les mêmes informations d\'un outil à l\'autre »', 'texte' => 'L\'<a href="/services/automatisation-ia">automatisation et l\'IA</a>, avec n8n ou Make, relient vos outils pour que la commande, la facture, la relance et le tableau de suivi se mettent à jour sans ressaisie.'],
                ['titre' => '« Nous ne pouvons pas répondre à tous les messages WhatsApp, le soir et le week-end »', 'texte' => 'Les <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbots WhatsApp</a> répondent aux questions fréquentes, qualifient les demandes et passent la main à un humain quand il le faut.'],
                ['titre' => '« Nous voulons utiliser l\'IA sans exposer nos données ni changer tous nos logiciels »', 'texte' => 'L\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ajoute la lecture de documents, la rédaction assistée ou la recherche dans vos archives à des outils que vous utilisez déjà, avec des règles écrites sur ce que l\'IA peut voir.'],
                ['titre' => '« WhatsApp est notre premier canal, mais il n\'est relié à rien »', 'texte' => 'L\'<a href="/services/integration-whatsapp">intégration WhatsApp</a> branche l\'API WhatsApp Business sur votre site, votre CRM ou votre ERP : confirmations, rappels et notifications partent automatiquement.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Visibilité et conseil : quand faut-il d\'abord être trouvé, ou d\'abord y voir clair ?',
            'intro' => 'Cette famille réunit deux besoins qui se rejoignent souvent : être visible là où vos clients cherchent, sur Google comme dans les assistants d\'IA, et prendre les bonnes décisions numériques avant de dépenser.',
            'items' => [
                ['titre' => '« Mon site existe, mais il ne m\'apporte presque aucune demande »', 'texte' => 'Le <a href="/services/referencement-naturel-seo">référencement naturel SEO</a> corrige la technique, écrit les pages qui répondent aux recherches de vos clients et suit les résultats dans la Search Console, mois après mois.'],
                ['titre' => '« Je veux savoir précisément ce qui bloque avant d\'investir »', 'texte' => 'L\'<a href="/services/audit-seo-complet">audit SEO complet</a> passe le site au crible et remet un plan d\'action priorisé, que vous pouvez exécuter vous-même ou confier.'],
                ['titre' => '« Mes clients sont dans ma ville et cherchent sur Google Maps »', 'texte' => 'Le <a href="/services/seo-local-google-business">SEO local et Google Business</a> soigne votre fiche d\'établissement, vos catégories, vos photos et la cohérence de vos coordonnées partout sur le web.'],
                ['titre' => '« Mes clients posent leurs questions à ChatGPT ou à Gemini »', 'texte' => 'Le <a href="/services/referencement-ia-geo">référencement IA (GEO)</a> rend vos informations lisibles et vérifiables pour que les assistants d\'IA puissent vous citer correctement.'],
                ['titre' => '« Tout se fait encore sur papier, et je ne sais pas par quoi commencer »', 'texte' => 'La <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> cartographie vos processus, choisit les outils et accompagne leur mise en place, étape par étape.'],
                ['titre' => '« J\'ai besoin d\'un regard extérieur pour arbitrer »', 'texte' => 'Le <a href="/services/consultant-digitalisation">consultant en digitalisation</a> vous aide à trancher : faire ou acheter, quel outil, quel budget, dans quel ordre, avec qui.'],
                ['titre' => '« Les outils sont là, mais l\'équipe ne s\'en sert pas »', 'texte' => 'La <a href="/services/formation-en-entreprise">formation en entreprise</a> forme vos équipes sur leurs propres cas : IA, automatisation, Odoo, Dolibarr, référencement ou développement web.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'ERP et gestion : quand faut-il passer du tableur à un vrai logiciel de gestion ?',
            'intro' => 'Un ERP réunit dans un seul logiciel les ventes, les achats, le stock, la facturation et la comptabilité. Le besoin devient mûr quand les mêmes chiffres existent en trois versions, quand l\'inventaire ne tombe jamais juste ou quand la clôture du mois prend une semaine.',
            'items' => [
                ['titre' => '« Nous grandissons et nous voulons un ERP complet, modulaire »', 'texte' => 'L\'<a href="/services/integration-odoo">intégration Odoo</a> couvre la vente, le stock, les achats, la comptabilité, la paie ou le point de vente, module par module, avec un paramétrage adapté à votre pays.'],
                ['titre' => '« Nous voulons un outil libre, plus simple, hébergé où nous le décidons »', 'texte' => 'L\'<a href="/services/integration-dolibarr">intégration Dolibarr</a> convient aux structures qui veulent tiers, devis, factures, stock et projets dans un logiciel léger, sans abonnement par utilisateur pour l\'édition libre.'],
                ['titre' => '« Nos rendez-vous et nos réservations se perdent entre le téléphone et le cahier »', 'texte' => 'Le <a href="/services/systeme-de-reservation-en-ligne">système de réservation en ligne</a> laisse vos clients choisir un créneau, payer un acompte et recevoir un rappel, pendant que votre agenda se remplit seul.'],
                ['titre' => '« Nous avons un projet, mais nous ne savons ni ce qu\'il coûtera ni s\'il est faisable »', 'texte' => 'L\'<a href="/services/audit-etude-de-projet">audit et étude de projet</a> examine la faisabilité, rédige le cahier des charges, compare les options techniques et estime un budget réaliste avant tout engagement.'],
                ['titre' => 'Les contraintes légales qui pèsent sur le choix', 'texte' => 'Au Bénin, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a>, publiée le 27 février 2020 et consultée le 3 octobre 2026, impose aux assujettis à la TVA une machine électronique certifiée ou un logiciel validé par la Direction générale des impôts, sous peine d\'une amende de dix fois le montant de la facture, au minimum un million de francs CFA. Dans l\'espace OHADA, selon <a href="https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/">la page de l\'OHADA sur l\'Acte uniforme comptable</a>, le SYSCOHADA révisé s\'applique aux comptes personnels des entités depuis le 1er janvier 2018. Un ERP se choisit donc aussi sur ces deux points.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Par quel service commencer selon la taille et le secteur de votre entreprise ?',
            'legende' => 'Point de départ conseillé par situation ; à confirmer lors du cadrage gratuit, selon vos priorités et votre budget',
            'entetes' => ['Votre situation', 'Commencer par', 'Puis, quand le premier service tourne', 'Pourquoi cet ordre'],
            'lignes'  => [
                ['Indépendant, artisan ou consultant seul', '<a href="/services/site-vitrine-professionnel">Site vitrine</a> ou <a href="/services/landing-page-haute-conversion">landing page</a>', '<a href="/services/seo-local-google-business">SEO local et Google Business</a>', 'Être trouvé et paraître sérieux coûte moins cher qu\'un outil de gestion dont vous n\'avez pas encore besoin.'],
                ['Commerce qui vend déjà sur WhatsApp ou en boutique', '<a href="/services/site-e-commerce">Site e-commerce</a> avec paiement mobile money', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>, puis <a href="/services/integration-dolibarr">Dolibarr</a> ou <a href="/services/integration-odoo">Odoo</a> pour le stock', 'Les ventes en ligne révèlent vite les besoins de stock et de suivi ; l\'ERP se dimensionne alors sur des volumes réels.'],
                ['PME de 10 à 50 personnes qui jongle entre tableurs', '<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a> ou <a href="/services/audit-etude-de-projet">étude de projet</a>', 'ERP, puis <a href="/services/automatisation-ia">automatisation</a>', 'Cartographier les processus évite d\'acheter un outil qui reproduit le désordre actuel.'],
                ['Cabinet, agence ou bureau d\'études', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA</a> sur les courriers et les comptes rendus', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>, puis <a href="/services/saas-espace-client">espace client</a>', 'Le gain de temps sur l\'écrit est rapide, à condition de fixer d\'abord les règles de confidentialité.'],
                ['École, centre de formation, clinique', '<a href="/services/systeme-de-reservation-en-ligne">Réservation en ligne</a> ou <a href="/services/application-web-sur-mesure">application web</a> de gestion', 'Paiements mobile money, rappels WhatsApp, puis <a href="/services/referencement-naturel-seo">référencement</a>', 'Inscriptions, rendez-vous et encaissements sont le premier goulet d\'étranglement de ces structures.'],
                ['Hôtel, restaurant, lieu d\'événements', '<a href="/services/site-vitrine-professionnel">Site</a> avec <a href="/services/systeme-de-reservation-en-ligne">réservation</a>', '<a href="/services/agents-ia-chatbot-whatsapp">Agent IA WhatsApp</a>, <a href="/services/seo-local-google-business">SEO local</a>', 'Les demandes arrivent le soir et le week-end ; il faut d\'abord un calendrier unique, puis des réponses rapides.'],
                ['ONG ou projet financé par un bailleur', '<a href="/services/application-mobile-android-ios">Application mobile</a> de collecte ou <a href="/services/application-web-sur-mesure">application web</a> de suivi', 'Tableaux de bord, <a href="/services/formation-en-entreprise">formation des équipes</a>, <a href="/services/maintenance-support">maintenance</a>', 'Les rapports aux bailleurs dépendent de données fiables saisies sur le terrain, souvent avec une connexion faible.'],
                ['Porteur d\'une idée de logiciel ou de start-up', '<a href="/services/audit-etude-de-projet">Étude de projet</a>, puis prototype en <a href="/services/vibe-coding">vibe coding</a>', '<a href="/services/saas-espace-client">SaaS</a> ou <a href="/services/application-mobile-android-ios">application mobile</a>', 'Tester l\'idée sur un prototype rapide avant de financer une version complète limite le risque.'],
                ['Entreprise d\'Europe ou du Canada', '<a href="/services/externalisation-developpement">Externalisation du développement</a> ou <a href="/services/developpeur-web-freelance">développeur freelance</a>', '<a href="/services/api-rest-integrations">API et intégrations</a>, <a href="/services/maintenance-support">maintenance</a>', 'Un premier lot délimité permet de juger la collaboration avant de confier un périmètre plus large.'],
                ['Entreprise dont le site existe déjà', '<a href="/services/audit-seo-complet">Audit SEO complet</a>', '<a href="/services/refonte-migration-de-site">Refonte</a> si l\'audit le justifie, sinon <a href="/services/referencement-naturel-seo">référencement</a>, puis <a href="/services/referencement-ia-geo">référencement IA</a>', 'Mesurer avant de refaire : un site corrigé coûte souvent moins cher qu\'un site reconstruit.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Et si votre situation ne rentre dans aucune ligne du tableau ?',
            'paragraphes' => [
                'Le tableau donne des points de départ fréquents, pas des règles. Quand votre cas ne s\'y retrouve pas, trois questions suffisent généralement à trouver le premier service. La première : qu\'est-ce qui vous fait perdre de l\'argent ou du temps aujourd\'hui, chiffres à l\'appui ? Un client qui ne vous trouve pas, une commande oubliée, une facture relancée trois fois, une heure par jour passée à recopier. Le premier service est presque toujours celui qui supprime la perte la plus coûteuse, pas celui qui paraît le plus moderne.',
                'La deuxième : qui utilisera l\'outil, et sur quel appareil ? Une équipe au bureau sur ordinateur, des commerciaux sur la route avec un téléphone d\'entrée de gamme, des clients qui découvrent votre entreprise depuis Facebook : chacune de ces situations oriente vers un site, une application web ou une application mobile. La troisième : de quel budget et de quel délai disposez-vous réellement ? Un projet découpé en lots livrés l\'un après l\'autre vaut mieux qu\'un grand projet suspendu au milieu faute de trésorerie.',
                'Si les réponses restent floues, c\'est que le besoin n\'est pas encore mûr pour un développement : le <a href="/services/consultant-digitalisation">conseil en digitalisation</a> ou l\'<a href="/services/audit-etude-de-projet">étude de projet</a> sont alors le bon point de départ, parce qu\'ils transforment une intuition en cahier des charges chiffré. Cette étape évite l\'erreur la plus répandue : commander un outil avant d\'avoir écrit ce qu\'il doit faire.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment les services s\'enchaînent-ils une fois le premier en place ?',
            'intro' => 'Un service bien livré prépare le suivant : il produit des données, des contenus ou des habitudes sur lesquels le service d\'après s\'appuie. Les enchaînements ci-dessous sont les plus fréquents ; aucun n\'est obligatoire, et chacun peut s\'arrêter après la première étape.',
            'items' => [
                ['titre' => 'Le site, puis le référencement, puis la visibilité dans les assistants d\'IA', 'texte' => 'Un site construit proprement, rapide, bien structuré et rédigé pour vos clients, est la condition du <a href="/services/referencement-naturel-seo">référencement naturel</a> : on ne référence bien que ce qui est solide. Le guide SEO de Google, mis à jour le 18 décembre 2025 et consulté le 3 octobre 2026, prévient que certaines modifications prennent effet en quelques heures et d\'autres en plusieurs mois. Le <a href="/services/seo-local-google-business">SEO local</a> et le <a href="/services/referencement-ia-geo">référencement IA</a> viennent ensuite consolider la présence.'],
                ['titre' => 'L\'ERP, puis l\'automatisation, puis WhatsApp', 'texte' => 'Une fois ventes, stock et factures réunis dans <a href="/services/integration-odoo">Odoo</a> ou <a href="/services/integration-dolibarr">Dolibarr</a>, les données sont propres et accessibles par API. L\'<a href="/services/automatisation-ia">automatisation</a> peut alors relancer les impayés, alerter sur un stock bas ou consolider les ventes, et l\'<a href="/services/integration-whatsapp">intégration WhatsApp</a> envoie confirmations et rappels au client sur le canal qu\'il lit vraiment.'],
                ['titre' => 'L\'IA, puis la formation des équipes', 'texte' => 'Un assistant d\'IA installé sans formation reste un gadget, ou devient un risque si chacun y colle des données confidentielles. Après l\'<a href="/services/integration-ia-entreprise">intégration de l\'IA</a>, la <a href="/services/formation-en-entreprise">formation en entreprise</a> apprend aux équipes à rédiger leurs demandes, à vérifier les réponses et à respecter les règles écrites ; la <a href="/formation-ia-entreprise">formation IA en entreprise</a> en détaille le programme.'],
                ['titre' => 'L\'étude de projet, puis l\'application, puis la maintenance', 'texte' => 'L\'<a href="/services/audit-etude-de-projet">étude de projet</a> produit le cahier des charges et le budget ; l\'<a href="/services/application-web-sur-mesure">application web</a> ou <a href="/services/application-mobile-android-ios">mobile</a> est construite sur cette base ; les <a href="/services/api-rest-integrations">API et intégrations</a> la relient au reste du système ; la <a href="/services/maintenance-support">maintenance</a> la garde à jour et sûre.'],
                ['titre' => 'Le chatbot, puis l\'agent qui agit dans vos outils', 'texte' => 'Un <a href="/services/agents-ia-chatbot-whatsapp">chatbot WhatsApp</a> commence par répondre aux questions fréquentes. Quand ses réponses sont fiables, il peut être relié à l\'ERP ou au système de réservation pour vérifier un stock, réserver un créneau ou suivre une commande, toujours avec une validation humaine sur les actions qui engagent l\'entreprise.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelle méthode s\'applique à tous les services, du premier message au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez votre besoin par le formulaire de contact, par e-mail, par téléphone ou sur WhatsApp. Vous recevez une réponse sous 24 heures, avec les premières questions utiles et une proposition de rendez-vous, sur place à Cotonou ou en visioconférence.'],
                ['titre' => 'Cadrage gratuit', 'duree' => 'Un ou deux entretiens', 'texte' => 'On parle de votre activité avant de parler technique : vos clients, vos processus, vos outils actuels, vos contraintes de budget et de délai. Le cadrage peut conclure qu\'un outil existant suffit, ou qu\'un autre service que celui demandé répond mieux au problème.'],
                ['titre' => 'Devis détaillé', 'duree' => 'Gratuit, remis après le cadrage', 'texte' => 'Le devis décrit le périmètre ligne par ligne, les livrables, le calendrier, le prix, les modalités de paiement et ce qui n\'est pas compris. Il distingue ce qui se paie une fois, ce qui se renouvelle chaque année, comme le domaine ou l\'hébergement, et ce qui reste optionnel.'],
                ['titre' => 'Maquettes et validation', 'duree' => 'Avant tout développement', 'texte' => 'Pour un site ou une application, vous validez des maquettes des écrans principaux avant que le code soit écrit. Une modification sur une maquette coûte quelques minutes ; la même modification après développement coûte des jours.'],
                ['titre' => 'Livraisons par étapes', 'duree' => 'Site vitrine : ' . $delais['Site vitrine'] . ' ; application : ' . $delais['Application sur mesure'], 'texte' => 'Le travail est livré par lots, sur un environnement de test que vous pouvez ouvrir à tout moment. Chaque lot est vérifié avec vous avant de passer au suivant, ce qui évite de découvrir un malentendu à la fin du projet.'],
                ['titre' => 'Mise en service et formation', 'duree' => 'À la livraison', 'texte' => 'La mise en ligne se fait à une date convenue, avec une vérification complète. Les personnes qui utiliseront l\'outil sont formées sur leurs propres cas, et reçoivent une documentation écrite pour les gestes courants.'],
                ['titre' => 'Maintenance et suivi', 'duree' => 'Selon contrat, sur devis', 'texte' => 'Après la livraison, un contrat de maintenance peut couvrir les mises à jour, les sauvegardes, les corrections et les évolutions. Il fixe par écrit ce qui est surveillé et les délais d\'intervention ; sans contrat, les interventions ponctuelles restent possibles sur devis.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que vous reste-t-il entre les mains à la fin d\'un projet ?',
            'items' => [
                'Les comptes, le nom de domaine, l\'hébergement et les abonnements ouverts au nom de votre entreprise, pas à celui du prestataire.',
                'Les accès administrateur à chaque outil livré, et la liste écrite de ces accès.',
                'Le code source des développements sur mesure, ou l\'export des configurations et des workflows pour les outils paramétrés.',
                'Une documentation des gestes courants, rédigée pour les personnes qui utiliseront l\'outil.',
                'Une formation à la prise en main, sur vos propres cas.',
                'Une sauvegarde initiale et la procédure pour en refaire une.',
                'La liste des coûts récurrents à prévoir : domaine, hébergement, abonnements, messages WhatsApp.',
                'Un devis de maintenance, si vous souhaitez être accompagné après la livraison.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûtent ces services, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Trois tarifs de départ sont publiés ; tous les autres services sont chiffrés sur devis, gratuit et détaillé, après le cadrage. Un prix annoncé avant de connaître le besoin serait soit gonflé par prudence, soit révisé en cours de route.',
            'items'      => [
                ['offre' => 'Landing page', 'prix' => 'À partir de ' . $tarifs['Landing page'], 'inclus' => ['Une page unique pour une offre, un lancement ou une campagne', 'Un seul objectif : réserver, s\'inscrire, demander un devis', 'Voir la page <a href="/services/landing-page-haute-conversion">landing page haute conversion</a>']],
                ['offre' => 'Site vitrine professionnel', 'prix' => 'À partir de ' . $tarifs['Site vitrine'], 'inclus' => ['Délai habituel : ' . $delais['Site vitrine'], 'Site responsive, formulaire, liens WhatsApp et téléphone', 'Voir la page <a href="/services/site-vitrine-professionnel">site vitrine professionnel</a>']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de ' . $tarifs['Référencement naturel'], 'inclus' => ['Premier niveau d\'intervention sur un site existant', 'Périmètre précis écrit dans le devis', 'Voir la page <a href="/services/referencement-naturel-seo">référencement naturel SEO</a>']],
                ['offre' => 'Applications, IA, automatisation, ERP, audits, formation et conseil', 'prix' => 'Sur devis', 'inclus' => ['Devis gratuit après le cadrage', 'Application sur mesure : ' . $delais['Application sur mesure'] . ' en général', 'Lots livrés et facturés par étapes quand le projet s\'y prête']],
            ],
            'variations' => [
                'Le périmètre : nombre de pages, d\'écrans, de modules d\'ERP ou de workflows à construire.',
                'Le nombre d\'outils à relier entre eux, et la qualité de leurs API.',
                'L\'état des contenus et des données de départ : textes à rédiger, fichiers à nettoyer, historique à reprendre.',
                'Les langues : une version anglaise ajoute de la rédaction, de la mise en page et du référencement.',
                'Les exigences de sécurité liées aux données traitées : santé, paiements, données d\'enfants.',
                'Le niveau de formation et de suivi souhaité après la livraison.',
                'L\'urgence : un délai plus court que le délai habituel oblige à réorganiser le planning.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment régler une prestation depuis le Bénin, l\'Europe ou le Canada ?',
            'paragraphes' => [
                'Les moyens de paiement acceptés sont le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Un dirigeant de Cotonou ou de Lomé peut régler depuis son téléphone, sans passer par une banque ; une entreprise de Paris, de Bruxelles ou de Montréal paie par virement, par carte ou par PayPal. L\'échéancier figure sur le devis : vous savez avant de signer combien vous payez, à quel moment et pour quel lot livré.',
                'Les tarifs de départ sont exprimés en francs CFA. Pour un client européen, la conversion est simple et stable : selon <a href="https://www.bceao.int/fr/content/histoire-du-franc-cfa">la page de la BCEAO sur l\'histoire du franc CFA</a>, consultée le 3 octobre 2026, le franc CFA est arrimé à l\'euro depuis le 1er janvier 1999, à raison de 655,957 francs CFA pour 1 euro. Un site vitrine à partir de 300 000 FCFA représente ainsi environ 457 euros. Hors de la zone franc, notamment au Canada, le devis est établi dans la devise convenue.',
                'Le devis sépare toujours trois catégories de dépenses. Ce qui se paie une fois : conception, développement, paramétrage, reprise des données, formation. Ce qui se renouvelle et se paie directement aux fournisseurs, à votre nom : nom de domaine, hébergement, abonnements à un outil d\'automatisation, messages WhatsApp, licences éventuelles. Ce qui reste optionnel : maintenance, référencement continu, évolutions. Cette séparation évite la mauvaise surprise la plus fréquente, celle d\'un outil qui s\'arrête au bout d\'un an parce que personne n\'avait prévu le renouvellement.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où Richard intervient-il : sur place au Bénin ou à distance ?',
            'paragraphes' => [
                'Au Bénin, les rendez-vous de cadrage, les ateliers et les formations peuvent se tenir dans vos locaux, à Cotonou et dans son agglomération comme dans le reste du pays selon le projet. Être sur place compte pour certains services : observer un circuit de caisse avant de paramétrer un ERP, former une équipe de terrain sur ses téléphones, vérifier la connexion réelle d\'un entrepôt avant de choisir entre une application en ligne et un fonctionnement hors connexion.',
                'Partout ailleurs, le travail se fait à distance, dans 34 pays : en Afrique de l\'Ouest et centrale, au Maghreb, dans l\'océan Indien, en Europe francophone et au Canada. La liste complète figure sur la page des <a href="/zones/">zones d\'intervention</a>. Richard a déjà travaillé, sur place ou à distance, pour des organisations au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada.',
                'Le travail à distance suit la même méthode que sur place : entretiens en visioconférence, maquettes partagées, environnement de test accessible en ligne, documentation écrite, échanges sur WhatsApp ou par e-mail entre deux rendez-vous. Les formations se donnent en direct, en visioconférence, avec des exercices sur vos propres outils. Les échanges se font en français ou en anglais. Richard est joignable 7 jours sur 7, de 7 h à 20 h, heure de Cotonou.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la connexion et le téléphone de vos clients changent-ils la conception d\'un service ?',
            'paragraphes' => [
                'Un site ou une application conçus sur la fibre d\'un bureau européen peuvent devenir inutilisables sur un réseau mobile chargé. Selon le <a href="https://www.itu.int/en/mediacentre/Pages/PR-2025-11-17-Facts-and-Figures.aspx">communiqué de l\'UIT du 17 novembre 2025</a>, consulté le 3 octobre 2026, environ 6 milliards de personnes, trois quarts de la population mondiale, utilisent Internet en 2025, mais 2,2 milliards restent hors ligne ; 85 % des citadins sont connectés contre 58 % des habitants des zones rurales, et seulement 23 % de la population des pays à faible revenu.',
                'Les écarts entre pays servis sont nets. D\'après les <a href="https://donnees.banquemondiale.org/indicator/IT.NET.USER.ZS?locations=BJ">données de la Banque mondiale sur l\'usage d\'Internet</a>, issues de l\'UIT et consultées le 3 octobre 2026, la part de la population utilisant Internet était en 2024 d\'environ 34 % au Bénin, 39 % au Togo, 41 % en Côte d\'Ivoire, 60 % au Sénégal et 89 % en France. Un même service ne se conçoit donc pas de la même manière pour une clientèle de Dakar et pour une clientèle rurale du nord du Bénin.',
                'Concrètement, chaque service en tient compte : pages légères et images compressées, parcours pensés d\'abord pour le téléphone, formulaires courts, paiement par mobile money, applications capables d\'enregistrer une saisie hors connexion puis de la synchroniser, et WhatsApp comme canal de contact privilégié. Pour les messages automatiques, la <a href="https://developers.facebook.com/docs/whatsapp/pricing">page de tarification de Meta</a>, consultée le 3 octobre 2026, indique une facturation par message depuis le 1er juillet 2025, les messages libres envoyés dans les 24 heures qui suivent celui du client restant gratuits.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de protection des données s\'appliquent à vos projets, au Bénin et en Europe ?',
            'paragraphes' => [
                'Presque tous les services traitent des données personnelles : formulaires, fichiers clients, commandes, conversations WhatsApp, dossiers d\'élèves ou de patients. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>, consultée le 3 octobre 2026 sur le site du Secrétariat général du Gouvernement, s\'applique selon son article 381 aux traitements effectués dans le cadre des activités d\'un responsable ou d\'un sous-traitant établi au Bénin, que le traitement ait lieu au Bénin ou non, et aussi à une entreprise étrangère qui offre des biens ou des services à des personnes situées au Bénin.',
                'L\'article 426 du même code impose au responsable du traitement et à son sous-traitant des mesures techniques et organisationnelles appropriées : chiffrement ou pseudonymisation, moyens de rétablir l\'accès aux données après un incident, procédure de test régulier des mesures. Il demande aussi que les éléments du contrat relatifs à la protection des données soient consignés par écrit. C\'est pourquoi les sauvegardes testées, les accès nominatifs et un contrat écrit font partie de la méthode commune, quel que soit le service.',
                'Pour les entreprises soumises au RGPD, la CNIL publie un <a href="https://www.cnil.fr/fr/guide-rgpd-du-developpeur">guide RGPD du développeur</a>, consulté le 3 octobre 2026, qui sert de référence pour concevoir des applications respectueuses de la vie privée : protection dès la conception, collecte limitée au nécessaire, sécurisation des communications. Sur les sites, la <a href="https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi">fiche de la CNIL sur les cookies</a> rappelle que les traceurs non exemptés ne peuvent pas être déposés avant le consentement, et que refuser doit être aussi simple qu\'accepter.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels engagements accompagnent chaque service, quel que soit son prix ?',
            'intro' => 'Ces engagements valent pour un audit comme pour une application de plusieurs mois. Ils sont vérifiables : vous pouvez constater chacun d\'eux dès le premier échange ou à la lecture du devis.',
            'items' => [
                ['titre' => 'Une réponse sous 24 heures', 'texte' => 'Chaque demande reçoit une réponse sous 24 heures, y compris pour dire qu\'un projet ne relève pas des services proposés, et vers qui se tourner.'],
                ['titre' => 'Un devis gratuit, détaillé ligne par ligne', 'texte' => 'Le cadrage et le devis ne sont pas facturés. Le devis précise le périmètre, les livrables, le calendrier, le prix, l\'échéancier et ce qui n\'est pas compris.'],
                ['titre' => 'Un contact direct avec la personne qui développe', 'texte' => 'Vous échangez avec Richard, qui conçoit et écrit le code, paramètre l\'outil ou anime la formation. Une question technique n\'a pas à traverser un commercial puis un chef de projet pour obtenir une réponse.'],
                ['titre' => 'Un paiement adapté à votre pays', 'texte' => 'Mobile Money MTN et Moov, carte bancaire, PayPal, virement ou espèces : le moyen de paiement ne doit pas être un obstacle au projet.'],
                ['titre' => 'Des accès et des comptes à votre nom', 'texte' => 'Domaine, hébergement, comptes d\'outils et clés d\'API sont ouverts au nom de l\'entreprise. Vous pouvez changer de prestataire sans rien reconstruire.'],
                ['titre' => 'Aucune promesse que personne ne peut tenir', 'texte' => 'Aucune première place sur Google n\'est promise : la page de Google « Dois-je faire appel à un expert SEO ? », mise à jour le 9 juin 2026 et consultée le 3 octobre 2026, rappelle que personne ne peut garantir la première position dans ses résultats. Les objectifs se fixent sur ce qui se mesure et dépend du travail fourni.'],
                ['titre' => 'Une recommandation qui suit votre besoin', 'texte' => 'Odoo ou Dolibarr, n8n ou Make, site sur mesure ou outil existant : le choix suit vos volumes, votre budget et vos compétences internes, et il est expliqué par écrit. Les <a href="/comparatifs/">comparatifs</a> publiés sur ce site exposent les critères utilisés.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui est Richard SALANON, et pourquoi travailler avec un expert accessible plutôt qu\'avec une grande structure ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il exerce depuis plus de 6 ans dans le développement et le numérique, a suivi la formation d\'EPITECH à Cotonou (2022) et compte plus de 50 projets livrés, plus de 100 clients et plus de 200 personnes formées. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Maintenir ses propres produits en production l\'oblige à connaître le coût réel d\'un serveur, d\'un message ou d\'un appel d\'API.',
                'Le positionnement tient en un mot : accessible. Accessible dans le délai, avec une réponse sous 24 heures. Accessible dans la décision, avec un cadrage et un devis gratuits qui permettent de comparer sans engagement. Accessible dans le paiement, avec le mobile money à côté de la carte et du virement. Accessible dans l\'échange, avec un contact direct avec la personne qui développe. Une grande structure apporte d\'autres atouts, comme une équipe nombreuse sur un même projet ; pour une PME qui veut comprendre ce qu\'elle achète, ces quatre points pèsent souvent davantage.',
                'L\'expertise, elle, couvre l\'ensemble de la chaîne : sites et boutiques, applications web et mobiles avec Laravel, Vue, React, Node.js ou Flutter, automatisations avec n8n et Make, intégration de l\'IA, ERP Odoo et Dolibarr avec la logique comptable du SYSCOHADA, référencement et formation. Cette largeur permet de voir les liens entre les services, par exemple qu\'un ERP bien paramétré rend l\'automatisation plus simple, et de vous dire franchement quand un service ne vous est pas utile. Le parcours détaillé figure sur la page <a href="/richard-salanon">Richard SALANON</a> et sur la page <a href="/a-propos/">à propos</a>.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter au moment de choisir un service numérique ?',
            'intro' => 'Ces erreurs se répètent d\'une entreprise à l\'autre, quel que soit le pays. Aucune ne tient à la technologie ; toutes tiennent à une question qui n\'a pas été posée avant de commencer.',
            'items' => [
                ['titre' => 'Choisir l\'outil avant d\'avoir décrit le problème', 'texte' => 'Demander « une application » sans pouvoir dire quelle tâche elle supprime conduit à un outil que personne n\'utilise. Le problème s\'écrit d\'abord, en une phrase, avec un chiffre.'],
                ['titre' => 'Tout lancer en même temps', 'texte' => 'Site, ERP, chatbot et formation dans le même trimestre épuisent l\'équipe et la trésorerie. Un service à la fois, mis en service et adopté, vaut mieux que quatre à moitié faits.'],
                ['titre' => 'Laisser les accès au nom du prestataire', 'texte' => 'Un nom de domaine enregistré au nom d\'un ancien prestataire peut bloquer une entreprise pendant des mois. Les comptes s\'ouvrent au nom de l\'entreprise, dès le premier jour.'],
                ['titre' => 'Oublier les coûts qui reviennent chaque année', 'texte' => 'Hébergement, domaine, abonnements et messages WhatsApp ne figurent pas toujours sur un devis mal fait. Demandez-les par écrit, avec leur fournisseur.'],
                ['titre' => 'Négliger la formation', 'texte' => 'Un ERP sans formation reste un tableur coûteux. La formation fait partie du projet, pas d\'une option à décider plus tard.'],
                ['titre' => 'Croire qu\'un site suffit à être trouvé', 'texte' => 'Un site neuf n\'apparaît pas tout seul en tête de Google. Le référencement se prévoit dès la conception, puis se travaille dans la durée.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que vérifier dans un devis avant de le signer, quel que soit le prestataire ?',
            'texte' => 'Vérifiez cinq points. <strong>Le périmètre</strong> : chaque page, écran, module ou workflow est-il nommé, ou le devis dit-il seulement « site complet » ? <strong>Les coûts récurrents</strong> : domaine, hébergement, abonnements et messages sont-ils listés, avec leur fournisseur ? <strong>La propriété</strong> : le code, les comptes et les données vous reviennent-ils ? <strong>La formation</strong> : est-elle comprise, pour qui et combien de temps ? <strong>L\'après</strong> : qui intervient en cas de panne, dans quel délai et à quel prix ? Un devis qui reste flou sur l\'un de ces points mérite une question écrite avant la signature.',
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de choisir votre premier service ?',
            'texte' => 'Partez de la perte la plus coûteuse de votre entreprise, choisissez le service qui la supprime, faites-le cadrer et chiffrer gratuitement, puis avancez par étapes : un service mis en service et adopté prépare toujours le suivant. Gardez les comptes à votre nom, demandez la liste des coûts récurrents et prévoyez la formation dès le départ.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Par quel service votre entreprise devrait-elle commencer ?',
            'texte'  => 'Décrivez en quelques lignes votre activité, ce qui vous fait perdre du temps ou des clients, et les outils que vous utilisez : vous recevez une réponse sous 24 heures, puis un cadrage et un devis gratuits qui disent franchement par quoi commencer, et ce qui peut attendre.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un cadrage gratuit'],
        ],
    ],

    'faq' => [
        ['q' => 'Quels services propose Richard SALANON ?', 'r' => 'Vingt-sept services, regroupés en quatre familles : sites et boutiques (site vitrine, e-commerce, landing page, refonte, maintenance, développeur freelance), applications et IA (applications web et mobiles, SaaS, API, automatisation, chatbots WhatsApp, intégration de l\'IA, vibe coding, externalisation), visibilité et conseil (référencement naturel, local et IA, audit SEO, digitalisation, conseil, formation), ERP et gestion (Odoo, Dolibarr, réservation en ligne, étude de projet).'],
        ['q' => 'Par quel service commencer quand on n\'a encore rien en ligne ?', 'r' => 'Le plus souvent par un site vitrine, ou par une landing page si une seule offre doit être présentée, puis par le référencement local pour apparaître sur Google Maps. Si votre problème principal est l\'organisation interne plutôt que la visibilité, le cadrage peut au contraire orienter vers une étude de projet ou un ERP. Le cadrage gratuit sert précisément à trancher.'],
        ['q' => 'Le cadrage et le devis sont-ils vraiment gratuits ?', 'r' => 'Oui. Le premier échange, le cadrage et le devis détaillé ne sont pas facturés, et ils ne vous engagent à rien. Seule une étude de projet approfondie, avec cahier des charges complet et comparaison d\'options, constitue un service à part entière, chiffré lui aussi sur devis.'],
        ['q' => 'Quels sont les tarifs ?', 'r' => 'Trois tarifs de départ sont publiés : la landing page à partir de ' . $tarifs['Landing page'] . ', le site vitrine à partir de ' . $tarifs['Site vitrine'] . ' et le référencement naturel à partir de ' . $tarifs['Référencement naturel'] . '. Tous les autres services sont chiffrés sur devis, après le cadrage, selon le périmètre, les intégrations, l\'état des données et le niveau de suivi souhaité.'],
        ['q' => 'Comment puis-je payer ?', 'r' => 'Par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. L\'échéancier figure sur le devis ; pour les projets livrés par lots, le paiement suit en général les étapes de livraison. Les clients hors de la zone franc reçoivent un devis dans la devise convenue.'],
        ['q' => 'Combien de temps dure un projet ?', 'r' => 'Un site vitrine se livre habituellement en ' . $delais['Site vitrine'] . ', une application sur mesure en ' . $delais['Application sur mesure'] . '. Les autres délais dépendent du périmètre et figurent sur le devis. Ce qui allonge le plus un projet n\'est pas le développement, mais l\'attente des contenus, des accès ou des validations : un calendrier partagé dès le départ limite ces retards.'],
        ['q' => 'Travaillez-vous avec des entreprises hors du Bénin ?', 'r' => 'Oui, à distance, dans 34 pays d\'Afrique francophone, du Maghreb, de l\'océan Indien, d\'Europe et au Canada. Richard a déjà travaillé pour des organisations dans quatorze pays, dont la France, la Belgique, la Suisse et le Canada. Entretiens en visioconférence, environnement de test en ligne et documentation écrite permettent de mener tout le projet sans déplacement.'],
        ['q' => 'Est-ce Richard qui réalise le travail ?', 'r' => 'Vous échangez directement avec Richard, qui conçoit, développe, paramètre et forme : aucun commercial ni intermédiaire ne s\'interpose entre vous et la personne qui fait le travail. Le devis précise toujours qui intervient sur quoi, et vos questions techniques reçoivent une réponse de celui qui connaît le code.'],
        ['q' => 'Puis-je ne prendre qu\'une partie d\'un service, par exemple le référencement sans refaire mon site ?', 'r' => 'Oui. Chaque service peut être commandé seul, et un site existant peut être référencé sans être refait. L\'audit SEO dit d\'ailleurs si une correction suffit ou si une refonte coûterait moins cher que des réparations successives. Le même principe vaut pour un ERP déjà installé, que l\'on peut reprendre, compléter ou relier à d\'autres outils.'],
        ['q' => 'Que se passe-t-il après la livraison ?', 'r' => 'L\'outil vous est remis avec les accès, la documentation et une formation. Ensuite, deux options : un contrat de maintenance, sur devis, qui couvre mises à jour, sauvegardes, corrections et évolutions avec des délais d\'intervention écrits ; ou des interventions ponctuelles, demandées quand le besoin se présente.'],
        ['q' => 'Mes équipes peuvent-elles être formées pour devenir autonomes ?', 'r' => 'Oui. Chaque projet comprend une formation à la prise en main, et des formations plus complètes existent, sur place au Bénin ou en visioconférence : IA en entreprise, automatisation, Odoo, Dolibarr, référencement, WhatsApp Business ou développement web. Elles se font sur vos propres cas, pas sur des exemples génériques.'],
        ['q' => 'Odoo ou Dolibarr : lequel convient à mon entreprise ?', 'r' => 'Odoo convient aux entreprises qui veulent un ERP très complet et modulaire, Dolibarr à celles qui cherchent un outil libre plus léger. Le choix dépend du nombre d\'utilisateurs, des modules indispensables, de la comptabilité à produire et du budget annuel. Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille les critères, et le cadrage les applique à votre cas.'],
        ['q' => 'Garantissez-vous la première place sur Google ?', 'r' => 'Non, et personne ne le peut : Google l\'écrit lui-même dans sa page consacrée au choix d\'un expert SEO. Le travail porte sur ce qui dépend de vous et se mesure : technique du site, contenus utiles, fiche d\'établissement, liens obtenus proprement, suivi des impressions et des clics dans la Search Console.'],
        ['q' => 'Comment mes données et celles de mes clients sont-elles protégées ?', 'r' => 'Les comptes sont ouverts à votre nom, les accès sont nominatifs, les sauvegardes sont testées et les données sensibles sont chiffrées quand c\'est nécessaire. Le projet tient compte du code du numérique béninois pour les traitements liés au Bénin, et du RGPD pour les entreprises européennes, notamment sur l\'hébergement et le consentement aux cookies.'],
    ],

    'sources' => [
        ['titre' => 'BCEAO, histoire du franc CFA (arrimage à l\'euro : 655,957 FCFA pour 1 euro depuis le 1er janvier 1999)', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-03'],
        ['titre' => 'UIT, communiqué du 17 novembre 2025 sur Facts and Figures 2025', 'url' => 'https://www.itu.int/en/mediacentre/Pages/PR-2025-11-17-Facts-and-Figures.aspx', 'date' => '2026-10-03'],
        ['titre' => 'Banque mondiale, personnes utilisant Internet (% de la population), données de l\'UIT', 'url' => 'https://donnees.banquemondiale.org/indicator/IT.NET.USER.ZS?locations=BJ', 'date' => '2026-10-03'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 381 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, guide RGPD du développeur', 'url' => 'https://www.cnil.fr/fr/guide-rgpd-du-developpeur', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, cookies et autres traceurs : que dit la loi ?', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-03'],
        ['titre' => 'Google Search Central, guide de démarrage du référencement (mis à jour le 18 décembre 2025)', 'url' => 'https://developers.google.com/search/docs/fundamentals/seo-starter-guide?hl=fr', 'date' => '2026-10-03'],
        ['titre' => 'Google Search Central, Dois-je faire appel à un expert SEO ? (mis à jour le 9 juin 2026)', 'url' => 'https://developers.google.com/search/docs/fundamentals/do-i-need-seo?hl=fr', 'date' => '2026-10-03'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-03'],
        ['titre' => 'OHADA, Acte uniforme relatif au droit comptable et à l\'information financière (AUDCIF) et SYSCOHADA révisé', 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/', 'date' => '2026-10-03'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier', 'fedapay-vs-kkiapay-vs-cinetpay', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
