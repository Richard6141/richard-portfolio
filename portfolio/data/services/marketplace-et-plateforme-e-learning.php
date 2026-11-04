<?php
// ============================================================
// data/services/marketplace-et-plateforme-e-learning.php · Pilier service
// « Marketplace et plateforme e-learning ». Place de marché multi-vendeurs et
// site de formation en ligne (WordPress ou sur mesure). Aucun tarif chiffré :
// devis ; seul délai de la fiche de faits : application sur mesure, 1 à 3 mois.
// Chiffres externes relevés le 2026-11-04 sur wordpress.org (Tutor LMS, Dokan,
// LearnPress), la documentation Stripe Connect, la Commission européenne, le
// SGG du Bénin et la CNIL. Les commissions sont un sujet de conception.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Marketplace et plateforme e-learning : une place de marché ou un site de formation en ligne où vendeurs, formateurs et clients paient et sont payés',
    'title'   => 'Marketplace et plateforme e-learning | Richard SALANON',
    'meta'    => 'Création de marketplace multi-vendeurs ou de site e-learning : cours, quiz, certificats, abonnements, Mobile Money et carte. WordPress ou sur mesure.',
    'en_bref' => 'Richard SALANON conçoit des places de marché multi-vendeurs et des plateformes de formation en ligne, sous WordPress ou en développement sur mesure : espace vendeur ou formateur, espace apprenant, cours, quiz, certificats, abonnements, accès par groupe, paiement par Mobile Money et par carte, commissions de la plateforme et modération. Pour les entrepreneurs, centres de formation, écoles, associations et PME d’Afrique francophone, d’Europe et du Canada. Une application sur mesure demande en général 1 à 3 mois ; la durée d’une solution WordPress est annoncée sur le devis. Le prix est fixé sur devis, gratuit.',
    'publie'  => '2026-11-10',
    'maj'     => '2026-11-10',
    'famille' => 'Sites et boutiques',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '1 à 3 mois en sur mesure ; WordPress annoncé sur le devis'],
        ['l' => 'Pour qui', 'v' => 'Entrepreneurs, centres de formation, écoles, associations et PME d’Afrique francophone, d’Europe et du Canada'],
        ['l' => 'Livrables', 'v' => 'Plateforme en ligne, espaces vendeur ou formateur et apprenant, paiements, commissions, modération, guide d’utilisation'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Comment créer une marketplace ou une plateforme de formation en ligne, et que ne comprend pas ce service ?',
            'paragraphes' => [
                'Deux projets voisins se cachent derrière ce service. Une marketplace est une place de marché : plusieurs vendeurs y publient leurs produits ou leurs prestations, les clients achètent sur un seul site, et la plateforme encaisse puis reverse une part à chaque vendeur. Une plateforme e-learning, ou site de formation en ligne, est un site où des apprenants suivent des cours, passent des quiz, obtiennent des certificats et paient à l’unité, par abonnement ou par groupe.',
                'Les deux se rejoignent quand des formateurs différents vendent leurs cours sur la même plateforme : c’est alors une marketplace de formations, avec un espace formateur, un espace apprenant et une part de revenu pour le propriétaire du site. Le service couvre tout le parcours : cadrage du modèle, choix technique, comptes et rôles, catalogue ou cours, paiement, reversements, modération, formation de l’équipe qui exploitera la plateforme.',
                'Il ne comprend pas la production du contenu. Filmer les cours, écrire les quiz, rédiger les fiches des vendeurs, recruter les premiers formateurs ou vendeurs et animer la communauté restent votre travail ou celui d’un spécialiste. Il ne comprend pas non plus la rédaction juridique de vos conditions générales, qui revient à un juriste du pays où vous vendez. La plateforme, elle, affiche ces textes, les fait accepter et en garde la trace.',
                'Les frontières avec les services voisins sont nettes. Une boutique d’un seul vendeur relève du <a href="/services/site-e-commerce">site e-commerce</a>. Un logiciel vendu par abonnement à des organisations, avec des données isolées par client, relève du <a href="/services/saas-espace-client">SaaS et espace client</a>. Un outil réservé à vos équipes relève de l’<a href="/services/application-web-sur-mesure">application web sur mesure</a>. Ici, la particularité tient au fait que trois publics (le propriétaire, les vendeurs ou formateurs, les clients ou apprenants) partagent la même plateforme avec des droits et des revenus différents.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes voit-on qu’une marketplace ou un site de formation en ligne est mûr ?',
            'intro' => 'Le projet naît rarement d’une envie de technologie. Il naît d’une situation qui ne tient plus avec des moyens artisanaux.',
            'items' => [
                ['titre' => 'Vous vendez déjà vos formations par WhatsApp et par virement', 'texte' => 'Chaque inscription demande un échange, une preuve de paiement, l’envoi manuel d’un lien et d’un fichier. Dès que les inscrits se multiplient, il devient difficile de savoir qui a payé quoi. Une plateforme peut inscrire, encaisser, ouvrir l’accès et envoyer le reçu, avec moins d’interventions manuelles.'],
                ['titre' => 'Plusieurs formateurs ou vendeurs veulent publier chez vous', 'texte' => 'Vous avez un réseau de formateurs, d’artisans, de prestataires ou de producteurs qui cherchent une vitrine et un paiement sécurisé. Vous apportez le public, la confiance et l’encaissement ; ils apportent l’offre. Il faut alors un cadre : règles de publication, commission, reversement.'],
                ['titre' => 'Vos formations existent en présentiel et vous voulez toucher plus loin', 'texte' => 'Un centre qui remplit sa salle de Cotonou deux fois par an peut proposer la même matière à des élèves d’Abidjan, de Bruxelles ou de Montréal, en cours enregistrés, en séances en direct ou en parcours mixte, avec un suivi de progression.'],
                ['titre' => 'Vous formez des équipes d’entreprises', 'texte' => 'Une entreprise veut inscrire quinze salariés, suivre qui a terminé quel module et récupérer les certificats. L’accès par groupe, avec un responsable qui gère ses collaborateurs, répond à ce besoin et simplifie la facturation.'],
                ['titre' => 'Vous voulez un revenu récurrent', 'texte' => 'Un abonnement mensuel ou annuel à une bibliothèque de cours, ou l’adhésion à une communauté d’artisans, régularise la trésorerie. Il demande un renouvellement bien conçu, surtout lorsque vos clients paient par Mobile Money.'],
                ['titre' => 'Les grandes plateformes ne répondent pas à votre contexte', 'texte' => 'Paiement en francs CFA, validation sur téléphone, langue, accès avec une connexion faible, commissions et règles à vous : une plateforme internationale impose les siennes. Posséder la sienne, c’est garder le contrôle de la clientèle et des données.'],
                ['titre' => 'Le contre-signal', 'texte' => 'Si vous n’avez ni contenu prêt, ni premiers vendeurs ou formateurs, ni public, commencez plus petit : une page de vente avec liste d’attente, un cours vendu à la main à dix personnes, une boutique simple. La plateforme vient confirmer un modèle qui marche, non l’inventer.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule le projet, du cadrage du modèle à l’exploitation de la plateforme ?',
            'items' => [
                ['titre' => 'Cadrage du modèle', 'texte' => 'Un échange établit qui vend quoi à qui, qui encaisse, qui reverse, quelles commissions la plateforme prélèvera, quels pays sont visés et quels moyens de paiement vos clients utilisent. Le cadrage tranche entre WordPress et sur mesure, et dresse la liste des comptes de paiement à ouvrir. Le devis qui en sort est gratuit.', 'duree' => 'Selon le devis'],
                ['titre' => 'Ouverture des comptes de paiement, en parallèle', 'texte' => 'Les passerelles vérifient l’identité du marchand avant d’ouvrir un compte en production, et celles qui reversent à des tiers demandent des justificatifs supplémentaires. Le dossier se prépare dès le cadrage, car un dossier incomplet est la première cause de retard au lancement.', 'duree' => 'Dès le cadrage'],
                ['titre' => 'Parcours et maquettes', 'texte' => 'Inscription d’un vendeur ou d’un formateur, publication d’un produit ou d’un cours, achat, paiement, accès au cours, quiz, certificat, demande de retrait : chaque parcours est dessiné d’abord pour le téléphone et validé avec quelques futurs utilisateurs avant tout développement.', 'duree' => 'Selon le devis'],
                ['titre' => 'Socle : comptes, rôles, paiements, reversements', 'texte' => 'Authentification, rôles (administrateur, modérateur, vendeur ou formateur, client ou apprenant), calcul des commissions, journal de chaque mouvement d’argent, notifications. Ce socle est le même quelle que soit la spécialité de la plateforme ; il se construit avant les écrans.', 'duree' => 'Selon le devis'],
                ['titre' => 'Catalogue, cours et fonctions métier par lots', 'texte' => 'Fiches vendeurs, produits, avis, ou bien cours, leçons, quiz, certificats, abonnements, accès par groupe. Chaque lot est présenté sur un serveur de recette pour être corrigé avant le suivant. En sur mesure, la durée d’ensemble se situe en général entre 1 et 3 mois pour une application sur mesure.', 'duree' => '1 à 3 mois en sur mesure'],
                ['titre' => 'Modération et règles de publication', 'texte' => 'Validation avant mise en ligne, signalement, suspension d’un vendeur ou d’un cours, litige entre acheteur et vendeur. Ces règles sont écrites avec vous et traduites en écrans que vos modérateurs savent utiliser.', 'duree' => 'Selon le devis'],
                ['titre' => 'Recette complète', 'texte' => 'Achat réussi, refusé, abandonné, en double, remboursé ; reversement d’une commission ; refus d’un cours par la modération ; certificat délivré puis vérifié. Tests sur un téléphone d’entrée de gamme et sur une connexion lente.', 'duree' => 'Selon le devis'],
                ['titre' => 'Mise en ligne et premières semaines', 'texte' => 'Passage des clés de paiement en production et guide d’utilisation écrit ; prévoyez aussi de préparer vos modérateurs et gestionnaires à la prise en main sur vos propres données. Les premiers vendeurs ou formateurs réels révèlent toujours un détail à corriger ; la <a href="/services/maintenance-support">maintenance et le support</a> prennent ensuite le relais si vous le souhaitez.', 'duree' => 'Selon le devis'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que recevez-vous concrètement à la livraison de la plateforme ?',
            'items' => [
                'Une plateforme en ligne accessible depuis un navigateur, conçue d’abord pour le téléphone, à votre nom de domaine.',
                'Un espace vendeur ou formateur : inscription, fiche, publication de produits ou de cours, suivi des ventes, demande de retrait.',
                'Un espace client ou apprenant : achats, accès aux cours, progression, quiz, certificats téléchargeables, factures ou reçus.',
                'Un catalogue structuré : catégories, recherche, filtres, fiches détaillées, avis si vous les retenez.',
                'Un module de cours si le projet l’exige : leçons, vidéos, documents, quiz à notation automatique, certificats, déblocage progressif.',
                'Des paiements configurés par Mobile Money et par carte, avec vérification côté serveur de chaque transaction.',
                'Un calcul de commission paramétrable, un journal de chaque mouvement d’argent et un tableau de reversements.',
                'Une console de modération et d’administration : validation, suspension, signalements, utilisateurs, ventes, exports.',
                'Des notifications par courriel, et sur WhatsApp si vous le choisissez.',
                'Les pages légales structurées (conditions, confidentialité, règles vendeur ou formateur) à compléter avec votre juriste.',
                'Une documentation écrite. Conseil : ouvrez le nom de domaine, l’hébergement et les comptes de paiement à votre nom, et demandez la remise du code.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Créer une marketplace avec WordPress ou en développement sur mesure : quelle base choisir ?',
            'options'  => ['WordPress avec extensions', 'Sur mesure (Laravel, Vue ou React)'],
            'criteres' => [
                ['critere' => 'Point de départ', 'valeurs' => ['Extensions de marketplace ou de LMS déjà écrites, à paramétrer et à habiller', 'Application écrite pour vos règles, de la base de données à l’interface']],
                ['critere' => 'Rapidité de mise en ligne', 'valeurs' => ['Plus courte : les fonctions de base existent déjà', 'Plus longue : en général 1 à 3 mois pour une application sur mesure']],
                ['critere' => 'Règles de commission et de reversement', 'valeurs' => ['Celles que l’extension prévoit (pourcentage, montant fixe, taux par vendeur), complétées par du code si besoin', 'Toutes celles que vous imaginez : paliers, commissions par catégorie, séquestre, retenue de garantie']],
                ['critere' => 'Mobile Money', 'valeurs' => ['Passerelles disposant d’une extension ; reversements aux vendeurs souvent manuels ou à développer', 'Intégration directe des API des passerelles, avec journal de chaque mouvement']],
                ['critere' => 'Évolution et limites', 'valeurs' => ['Chaque extension ajoutée est une dépendance à surveiller et à mettre à jour', 'Pas de dépendance imposée ; le coût est celui du développement et de la maintenance']],
                ['critere' => 'Application mobile', 'valeurs' => ['Possible en s’appuyant sur l’API de WordPress, avec des limites', 'Même API pour le site et pour une application Flutter']],
                ['critere' => 'Bon choix quand', 'valeurs' => ['Le modèle est classique, le budget limité et l’équipe à l’aise avec WordPress', 'Le modèle est spécifique, le volume attendu élevé ou la plateforme est le cœur de votre activité']],
            ],
            'verdict'  => 'Pour tester un modèle avec un budget mesuré, WordPress et des extensions éprouvées sont un bon départ. Quand les règles d’argent, les rôles ou le volume sortent du cadre des extensions, le sur mesure évite de lutter contre l’outil.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils WordPress existent pour une marketplace ou un LMS, et que disent leurs fiches officielles ?',
            'legende' => 'Fiches du répertoire officiel wordpress.org consultées le 4 novembre 2026. Les versions et les chiffres d’installation changent souvent ; une extension se juge aussi sur son suivi, sa compatibilité et un essai sur copie du site.',
            'entetes' => ['Extension', 'Rôle', 'Ce que dit la fiche', 'À retenir'],
            'lignes'  => [
                ['Tutor LMS', 'Cours en ligne et, en option, marketplace de cours', 'Version 4.2.0, plus de 100 000 installations actives, WordPress 5.3 au minimum, testée jusqu’à WordPress 7.1.4. Cours, quiz, certificats vérifiables par identifiant, plusieurs formateurs avec taux de commission et retraits par virement, PayPal ou chèque électronique', 'La fiche cite virement, PayPal et chèque électronique ; le reversement en Mobile Money reste à prévoir'],
                ['LearnPress', 'Cours en ligne, base d’un site de formation', 'Version 4.4.13, plus de 70 000 installations actives, WordPress 6.0 au minimum, testée jusqu’à WordPress 7.1.4', 'Sert de socle ; les fonctions avancées viennent en général de compléments à vérifier un à un'],
                ['Dokan', 'Marketplace multi-vendeurs sur WooCommerce', 'Version 5.3.3, plus de 30 000 installations actives, WordPress 7.0 au minimum, testée jusqu’à WordPress 7.1.4. Boutique indépendante par vendeur, commissions en montant fixe ou en pourcentage, taux modifiable par vendeur, retraits par PayPal ou virement', 'La fiche liste PayPal et virement ; un reversement en Mobile Money demande un module ou un développement'],
                ['WooCommerce', 'Catalogue, panier, commandes', 'Socle sur lequel s’appuient les extensions de marketplace', 'À mettre à jour avec WordPress ; voir le <a href="/services/site-e-commerce">site e-commerce</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi ces choix techniques, et quand abandonner les extensions pour du code sur mesure ?',
            'paragraphes' => [
                'WordPress est le choix par défaut parce qu’il est connu : il est très répandu, un autre développeur peut le reprendre, et les extensions ci-dessus couvrent l’essentiel d’un site de cours ou d’une place de marché de taille modeste. Richard SALANON travaille aussi sous WordPress et peut ainsi vous éviter un développement coûteux quand l’extension suffit.',
                'Le sur mesure se justifie quand une règle d’argent ou de rôle n’entre pas dans le cadre : commission différente par catégorie, retenue de garantie jusqu’à la réception, abonnement d’un vendeur en plus de la commission, accès de groupe avec responsable et facturation consolidée, ou reversements en Mobile Money automatisés. Il s’appuie sur Laravel et PHP pour le cœur, Vue ou React pour les interfaces, Node.js pour le temps réel (messagerie entre acheteur et vendeur, classe virtuelle, notifications), et Flutter si la plateforme doit aussi vivre en <a href="/services/application-mobile-android-ios">application mobile</a>.',
                'Une troisième voie est fréquente : démarrer sous WordPress pour valider le modèle, puis reconstruire sur mesure le jour où le volume ou la règle l’exige. Cela se prépare en conservant les données dans un format exportable et en documentant les règles de commission dès le départ. La plateforme reliée à vos autres outils (comptabilité, ERP, CRM) passe par une <a href="/services/api-rest-integrations">API REST et des intégrations</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment concevoir les commissions de la plateforme ?',
            'paragraphes' => [
                'Une commission est la part du prix que la plateforme conserve quand elle reverse le reste au vendeur ou au formateur. C’est un choix de conception du produit : il se décide au cadrage, se traduit en règle de calcul dans le code et s’affiche aux vendeurs avant leur inscription. Il ne s’agit pas d’une pratique commerciale de Richard SALANON, mais de ce que votre plateforme appliquera à ses propres vendeurs.',
                'La documentation de Stripe Connect décrit ce schéma pour les marketplaces : le client paie la plateforme, qui paie les frais de Stripe, conserve sa commission et verse le solde au vendeur. Son exemple chiffré porte sur un paiement de 100 USD, avec 1,50 de frais Stripe, 1,00 de commission de plateforme et 97,50 versés au vendeur. La même page signale d’autres modèles : un abonnement facturé aux vendeurs, ou des services financiers proposés sous votre marque. Le principe de calcul reste le même, quelle que soit la passerelle retenue.',
                'Plusieurs décisions en découlent. Qui supporte les frais de la passerelle : la plateforme, le vendeur ou l’acheteur ? La commission s’applique-t-elle au prix hors taxes ou toutes taxes comprises, livraison incluse ou non ? Est-elle la même pour tous, différente par catégorie, dégressive selon le volume ? Que se passe-t-il en cas de remboursement : la commission est-elle rendue ? À quelle date le vendeur peut-il retirer son argent, et à partir de quel montant ?',
                'Les plateformes WordPress citées plus haut proposent déjà des commissions en pourcentage ou en montant fixe, avec un taux modifiable par vendeur. Le sur mesure ajoute les paliers, les exceptions et un livre de comptes précis où chaque mouvement est tracé : vente, commission, remboursement, retrait. Ce livre sert à la comptabilité, aux litiges et à la confiance des vendeurs.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels modèles de revenus une marketplace ou un site de formation peut-il prévoir ?',
            'legende' => 'Modèles d’exploitation à titre d’illustration ; aucun taux n’est proposé ici, chaque plateforme fixe les siens avec ses vendeurs et ses formateurs.',
            'entetes' => ['Modèle', 'Principe', 'Ce qu’il demande à la plateforme'],
            'lignes'  => [
                ['Commission sur chaque vente', 'La plateforme garde une part du prix et reverse le reste', 'Calcul exact, livre de comptes, règle de remboursement, seuil et calendrier de retrait'],
                ['Abonnement du vendeur ou du formateur', 'Le vendeur paie une formule pour publier, avec ou sans commission réduite', 'Facturation récurrente, relances, suspension des offres en cas d’impayé'],
                ['Abonnement de l’apprenant', 'Accès illimité ou par niveaux à une bibliothèque de cours', 'Renouvellement actif en Mobile Money, accès coupé sans surprise, résiliation claire'],
                ['Achat de cours à l’unité', 'Paiement unique, accès pour une durée ou à vie', 'Gestion de l’accès, remboursement, facture ou reçu'],
                ['Accès par groupe', 'Une entreprise ou une école achète des places et les attribue', 'Responsable de groupe, invitation en masse, suivi par personne, facture unique'],
                ['Mise en avant payante', 'Le vendeur paie pour apparaître en tête d’une catégorie', 'Libellé « sponsorisé » visible, règles de classement transparentes'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment encaisser en Mobile Money et par carte, puis reverser aux vendeurs ?',
            'paragraphes' => [
                'Le client choisit son opérateur, saisit son numéro et valide le paiement sur son téléphone. Entre la demande et la validation, il peut s’écouler une minute ou deux : la plateforme affiche un écran de paiement en attente, sans conclure à un échec. Pour une carte bancaire, le parcours est plus court mais ne s’adresse qu’à ceux qui en possèdent une, d’où l’intérêt de proposer les deux.',
                'La commande n’est jamais validée sur la simple page de retour, que n’importe qui peut afficher. La passerelle prévient le serveur par une notification ; la plateforme vérifie la signature, interroge l’API pour connaître le statut réel du paiement, ignore les doublons, puis seulement ouvre l’accès au cours ou valide la vente. C’est la règle la plus importante : une extension ou un thème s’y plie ou non, ce qui se vérifie en test.',
                'Le reversement est la difficulté propre aux marketplaces. Encaisser une fois pour le compte de plusieurs vendeurs oblige à tenir un solde par vendeur, à fixer une durée de rétention pour couvrir les remboursements, puis à verser par virement, par Mobile Money ou par une passerelle qui sait répartir les paiements. Les offres de partage de paiement, comme Stripe Connect, imposent aussi un parcours d’identification de chaque vendeur ; leur disponibilité dépend du pays de la plateforme et de celui du vendeur, à vérifier sur la page de l’éditeur le jour du choix.',
                'En Afrique francophone, de nombreux reversements se font encore par lot, validé par un opérateur humain, depuis la console d’administration. C’est un choix prudent au départ : il évite les erreurs et laisse le temps de contrôler les litiges. Il s’automatise ensuite quand le volume et les garanties le permettent. Pour comparer les passerelles, le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a> les met côte à côte.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment créer un site e-learning pour vendre des formations en ligne : cours, quiz, certificats, abonnements, accès par groupe ?',
            'paragraphes' => [
                'Un cours en ligne est une suite de leçons organisées en sections : vidéo, texte, document à télécharger, exercice. Le plus important n’est pas le nombre de fonctions, mais la facilité à terminer : une progression visible, un point de reprise, un déblocage progressif des leçons si vous le souhaitez. Le formateur doit pouvoir publier seul, sans développeur, en glissant ses leçons dans un éditeur.',
                'Les quiz mesurent l’acquis. Questions à choix multiples, vrai ou faux, textes à compléter, appariements, avec note de passage, nombre d’essais et limite de temps. La fiche de Tutor LMS, consultée le 4 novembre 2026, cite par exemple des quiz avec limite de temps, nombre de tentatives restreint et note minimale. Le certificat se génère à la fin du parcours, avec le nom de l’apprenant, la date et un identifiant que l’on peut vérifier en ligne.',
                'L’abonnement ouvre un catalogue pour une durée. L’accès par groupe sert aux entreprises, écoles et associations qui achètent plusieurs places : un responsable invite ses collaborateurs, suit leur avancement et télécharge les attestations. Les séances en direct (classe virtuelle) peuvent s’appuyer sur un outil de visioconférence existant, relié à la plateforme, plutôt que d’être refaites de zéro.',
                'Pour une audience qui se connecte au téléphone, la vidéo mérite un soin particulier : plusieurs qualités, lecture reprise après une coupure, téléchargement des documents en version légère. Un cours sur une connexion faible se juge sur la fluidité avant la finesse de l’image. La plateforme prévoit aussi les droits de diffusion de vos contenus : lien protégé, accès limité à l’apprenant inscrit, et filigrane si nécessaire.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment organiser la modération, l’espace vendeur ou formateur et l’espace apprenant ?',
            'paragraphes' => [
                'Trois espaces cohabitent. L’espace vendeur ou formateur permet de créer une fiche, publier des produits ou des cours, suivre les ventes, consulter ses reversements et répondre aux questions. L’espace client ou apprenant donne accès aux achats, aux cours, aux certificats et aux messages. L’espace d’administration, enfin, sert aux gestionnaires de la plateforme : validations, litiges, indicateurs et paramètres.',
                'La modération protège la réputation de la plateforme. Un nouveau vendeur ou un nouveau cours passe par une validation avant publication, au moins au début. Un signalement permet à un client de contester une annonce ; un modérateur peut masquer, suspendre ou supprimer, avec un motif conservé dans le journal. Les règles de publication (produits interdits, contenus protégés, informations trompeuses) sont écrites et acceptées à l’inscription.',
                'Au niveau européen, le règlement sur les services numériques fixe des obligations aux places de marché. La page de la Commission européenne consultée le 4 novembre 2026 indique qu’il demande aux marketplaces de faire des efforts raisonnables pour effectuer des contrôles aléatoires sur les produits vendus sur leur service. Une plateforme qui vise la clientèle européenne prévoit donc dès la conception l’identification de ses vendeurs et un circuit de signalement.',
                'Pour les litiges, la plateforme définit qui tranche, dans quel délai et selon quelle règle : remboursement, geste commercial, mise en relation directe. Un message interne entre acheteur et vendeur, conservé dans la plateforme, évite les échanges hors circuit qui contournent la commission et privent la modération de preuves.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une marketplace ou un site de formation selon le secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Centre de formation professionnelle, Cotonou ou Abidjan', 'probleme' => 'Les sessions en salle se remplissent deux fois par an, les inscriptions se font par WhatsApp et les attestations sont saisies à la main.', 'solution' => 'Site de cours sous WordPress : inscription et paiement en Mobile Money, cours enregistrés pour ceux qui ne peuvent pas se déplacer, quiz de fin de module, attestation générée avec identifiant vérifiable.'],
                ['secteur' => 'Marketplace d’artisans et de produits locaux, Dakar ou Lomé', 'probleme' => 'Des dizaines d’artisans vendent sur les réseaux sociaux, sans paiement sécurisé ni catalogue commun, et les clients de la diaspora hésitent.', 'solution' => 'Place de marché avec une boutique par artisan, paiement par carte et Mobile Money, commission de la plateforme fixée par catégorie, validation de chaque nouvelle fiche, reversements par lot validés par un gestionnaire.'],
                ['secteur' => 'Réseau de formateurs indépendants, France ou Belgique', 'probleme' => 'Des formateurs vendent chacun leurs cours sur leur site, sans visibilité commune ni paiement simple pour des clients africains et européens.', 'solution' => 'Marketplace de cours : espace formateur, taux de commission par formateur, retraits par virement, paiement par carte pour l’Europe et Mobile Money pour l’Afrique, avis des apprenants modérés.'],
                ['secteur' => 'École ou organisme de formation d’entreprises, Montréal ou Genève', 'probleme' => 'Une entreprise veut former quinze salariés, suivre leur progression et récupérer les certificats sans gérer quinze paiements.', 'solution' => 'Accès par groupe : un responsable achète les places, les attribue, suit l’avancement par personne et télécharge les attestations ; une seule facture est émise.'],
                ['secteur' => 'Association ou ONG qui forme des jeunes, Ouagadougou ou Niamey', 'probleme' => 'Les modules sont distribués en clé USB ou par messagerie, sans suivi de qui a terminé quoi, avec une connexion faible.', 'solution' => 'Plateforme légère avec documents téléchargeables, vidéos en basse définition, quiz sans connexion permanente, suivi par cohorte et certificat de fin de parcours ; abonnement ou financement par un partenaire.'],
                ['secteur' => 'Services et prestataires à domicile, Douala ou Libreville', 'probleme' => 'Des prestataires (ménage, réparation, cours particuliers) cherchent des clients et les clients cherchent des professionnels fiables.', 'solution' => 'Marketplace de services : profil vérifié, avis, paiement bloqué jusqu’à la prestation, commission prélevée à la validation, médiation en cas de litige.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels aident à choisir ses outils et à cadrer le projet ?',
            'items' => [
                ['valeur' => '100 000+', 'libelle' => 'Installations actives de Tutor LMS (version 4.2.0) selon sa fiche wordpress.org, avec cours, quiz, certificats et marketplace de formateurs', 'source' => 'wordpress.org, fiche Tutor LMS, consultée le 4 novembre 2026', 'url' => 'https://wordpress.org/plugins/tutor/'],
                ['valeur' => '70 000+', 'libelle' => 'Installations actives de LearnPress (version 4.4.13), testée jusqu’à WordPress 7.1.4', 'source' => 'wordpress.org, fiche LearnPress, consultée le 4 novembre 2026', 'url' => 'https://wordpress.org/plugins/learnpress/'],
                ['valeur' => '30 000+', 'libelle' => 'Installations actives de Dokan (version 5.3.3), qui exige WordPress 7.0 au minimum', 'source' => 'wordpress.org, fiche Dokan, consultée le 4 novembre 2026', 'url' => 'https://wordpress.org/plugins/dokan-lite/'],
                ['valeur' => '97,50 sur 100 USD', 'libelle' => 'Exemple de la documentation Stripe Connect : sur 100 USD payés, 1,50 de frais Stripe, 1,00 de commission de plateforme et 97,50 versés au vendeur', 'source' => 'Stripe, documentation « Créer une marketplace », consultée le 4 novembre 2026', 'url' => 'https://docs.stripe.com/connect/marketplace'],
                ['valeur' => '1 mois', 'libelle' => 'Délai de réponse à une demande d’exercice de droits sur les données, prolongeable de deux mois pour les demandes complexes, selon l’article 12 du RGPD', 'source' => 'CNIL, chapitre III du RGPD', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une marketplace ou un site e-learning, et qu’est-ce qui fait varier le devis ?',
            'intro'      => 'Le prix est fixé sur devis, gratuit, après le cadrage : deux plateformes qui se ressemblent en apparence peuvent demander un travail du simple au triple. Pour situer l’effort, le site affiche des tarifs de départ pour des projets plus simples : 150 000 FCFA pour une landing page et 300 000 FCFA pour un site vitrine. Une marketplace ou un site de cours n’entre dans aucune de ces catégories. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Site de cours sous WordPress', 'prix' => 'Sur devis', 'inclus' => ['Installation, thème, extension de cours, catalogue', 'Paiement Mobile Money et carte', 'Quiz, certificats, accès par groupe selon le périmètre', 'Guide d’utilisation écrit']],
                ['offre' => 'Marketplace sous WordPress', 'prix' => 'Sur devis', 'inclus' => ['Boutique par vendeur, catalogue, commissions paramétrées', 'Console de modération', 'Paiements et procédure de retrait', 'Guide pour les gestionnaires']],
                ['offre' => 'Plateforme sur mesure', 'prix' => 'Sur devis', 'inclus' => ['Application Laravel avec interface Vue ou React', 'Règles de commission et de reversement propres à vous', 'Livre de comptes, API réutilisable par une application mobile', 'Documentation technique et code source remis']],
                ['offre' => 'Évolution d’une plateforme existante', 'prix' => 'Sur devis', 'inclus' => ['Ajout d’une passerelle, d’un module de cours ou de retraits', 'Correction du parcours de paiement', 'Reprise des données sans perte']],
            ],
            'variations' => [
                'Le nombre de rôles et de parcours : vendeur seul, vendeur et formateur, groupes d’entreprises, modérateurs.',
                'Le modèle de commission : taux unique, paliers, abonnement du vendeur, séquestre jusqu’à la livraison.',
                'Le nombre de passerelles et de pays d’encaissement, et la méthode de reversement aux vendeurs (virement, Mobile Money, lot validé à la main).',
                'Le volume de contenu et de vidéos à héberger, et le niveau de protection attendu.',
                'Les raccordements : comptabilité, ERP, CRM, outil de visioconférence, WhatsApp, automatisations.',
                'Les langues, les devises et les pays visés, avec les règles qui en découlent.',
                'Une application mobile en plus du site.',
                'Les coûts récurrents payés à des tiers : nom de domaine, hébergement, stockage vidéo, extensions payantes, commissions des passerelles, envois de messages.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer une marketplace ou un site de formation en ligne ?',
            'intro' => 'Les plateformes qui ne décollent pas souffrent rarement de leur design. Elles butent presque toujours sur l’une de ces décisions.',
            'items' => [
                ['titre' => 'Construire avant d’avoir des vendeurs ou du contenu', 'texte' => 'Une marketplace vide ne se remplit pas toute seule : sans offre, les clients ne viennent pas, et sans clients les vendeurs ne viennent pas. Recrutez et testez avec une poignée de vendeurs ou de formateurs avant d’investir dans un développement lourd.'],
                ['titre' => 'Fixer la commission sans la tester', 'texte' => 'Une commission trop haute fait fuir les vendeurs, trop basse ne couvre pas les frais de passerelle et le support. Elle se calcule avec les frais réels de paiement, les remboursements et le temps de modération.'],
                ['titre' => 'Promettre un reversement instantané', 'texte' => 'Entre le paiement du client et le retrait du vendeur, il faut laisser le temps aux remboursements et aux litiges. Annoncez la durée de rétention et le seuil de retrait dès l’inscription.'],
                ['titre' => 'Valider une vente sur la page de retour du paiement', 'texte' => 'La page de retour peut être affichée sans paiement. Seule la confirmation vérifiée côté serveur ouvre l’accès au cours ou valide la commande.'],
                ['titre' => 'Laisser les échanges hors de la plateforme', 'texte' => 'Si acheteurs et vendeurs échangent par téléphone dès la première question, la commission est contournée et la modération n’a plus de preuves. Une messagerie interne règle l’essentiel.'],
                ['titre' => 'Négliger la qualité des cours', 'texte' => 'Un catalogue sans relecture, avec des vidéos inaudibles, détruit la confiance. Une validation éditoriale et des avis modérés comptent plus que le nombre de cours.'],
                ['titre' => 'Oublier le téléphone et la connexion faible', 'texte' => 'Des cours en vidéo haute définition sans alternative légère excluent une partie de votre public. Testez sur un Android d’entrée de gamme et sur une connexion lente.'],
                ['titre' => 'Laisser le compte de paiement, le domaine ou le code chez le prestataire', 'texte' => 'Faites ouvrir ces comptes et ces accès à votre nom. Sinon, changer de prestataire revient à repartir de zéro.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi tester les extensions de marketplace et de cours sur une copie du site avant d’ouvrir ?',
            'texte' => 'Les fiches wordpress.org consultées le 4 novembre 2026 montrent des extensions très différentes par leur exigence de version : Dokan demande WordPress 7.0 au minimum, LearnPress 6.0 et Tutor LMS 5.3. Une mise à jour de WordPress, de WooCommerce ou d’une extension peut casser un parcours de paiement ou de retrait sans prévenir. Toute plateforme est donc montée d’abord sur une copie de test, où chaque cas est rejoué (achat, remboursement, commission, retrait, certificat), et chaque mise à jour passe par cette copie avant la production.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de droit, de données et de facturation encadrent une plateforme multi-vendeurs ?',
            'paragraphes' => [
                'Une marketplace n’est pas qu’un site : c’est un intermédiaire, avec des responsabilités. La documentation de Stripe rappelle la notion de marchand attitré, l’entité légalement responsable de la vente et des taxes applicables, qui peut être la plateforme ou le vendeur selon l’organisation. Il faut décider, avec un juriste et un comptable de votre pays, qui vend au sens juridique, qui facture, qui collecte les taxes et qui répond du produit ou du cours.',
                'Côté données, la plateforme traite à la fois celles de ses clients, de ses vendeurs et de ses apprenants. Au Bénin, le cadre est posé par la loi n° 2017-20 du 20 avril 2018 portant code du numérique, publiée par le Secrétariat général du gouvernement. En Europe, le RGPD s’applique : la CNIL en présente le chapitre III, qui prévoit une réponse aux demandes de droits dans un délai d’un mois, l’effacement dans les meilleurs délais (article 17) et la portabilité dans un format structuré, couramment utilisé et lisible par machine (article 20). Prévoyez dans la plateforme un moyen d’exporter et de supprimer les données d’un compte.',
                'Les données d’apprenants méritent un soin particulier lorsqu’il s’agit de mineurs ou de salariés d’une entreprise cliente : la plateforme sépare ce que voit le responsable de groupe de ce que voit le formateur, et limite la conservation des résultats. Pour les vendeurs, elle conserve les pièces d’identité fournies avec leur accord et pour la seule durée utile.',
                'Pour l’Europe, le règlement sur les services numériques encadre les places de marché en ligne, avec des exigences d’identification des vendeurs et de signalement. La facturation dépend du pays : une facture émise au nom du vendeur, de la plateforme ou des deux, selon le modèle ; avec un comptable, vérifiez la règle de chaque pays avant l’ouverture. La plateforme sait produire des reçus et des exports de ventes pour la comptabilité.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte local pour une plateforme en Afrique francophone ?',
            'paragraphes' => [
                'Le téléphone est le premier écran. Une plateforme pensée pour un ordinateur de bureau et une fibre rapide laisse de côté une grande partie des acheteurs et des apprenants. Les pages sont légères, les images converties dans un format compact, les vidéos disponibles en plusieurs qualités et les documents téléchargeables hors connexion.',
                'Le paiement se pense d’abord autour du Mobile Money : MTN, Moov et les autres opérateurs, avec leurs plafonds, leurs délais de confirmation et leurs frais selon la passerelle. La carte bancaire s’ajoute pour la diaspora et la clientèle européenne. Pour les abonnements, le renouvellement se conçoit comme une relance active : un lien de paiement envoyé avant l’échéance, par courriel, SMS ou WhatsApp, car il ne faut pas supposer qu’un prélèvement automatique sur portefeuille mobile existe chez votre passerelle sans preuve écrite.',
                'La langue est le français, avec le vocabulaire de votre métier, et l’anglais pour une clientèle internationale si les textes sont séparés du code dès le départ. Les montants s’affichent en francs CFA sans décimales, en euros ou en dollars canadiens ailleurs, et chaque facture garde sa devise. Les heures de séances en direct s’affichent dans le fuseau de chaque utilisateur.',
                'Enfin, la confiance se construit : profils vérifiés, avis modérés, délais annoncés, service client joignable sur WhatsApp, règles de remboursement claires. Une place de marché locale réussit quand l’acheteur sait qui il paie et quoi faire en cas de problème. La <a href="/services/site-e-commerce">boutique en ligne</a> détaille ces pratiques pour un vendeur unique.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier ce projet à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                'Il compte plus de six ans d’expérience, a travaillé dans quinze pays dont le Bénin, la Côte d’Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada, et formé plus de 200 personnes. Il a suivi une formation à EPITECH (2022), a créé Wapy, assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>, cabinet de formation et de transformation digitale, qui exploite une <a href="https://formation.audyxa.com">plateforme de formation</a>.',
                'Sa façon de travailler tient en quatre engagements. Il écoute avant de recommander, et commence par vérifier si une extension WordPress suffit avant de proposer du sur mesure. Il met chaque règle de commission et de paiement par écrit. Il vous conseille de garder comptes et accès à votre nom. Et il dit ce qui est hors périmètre avant le devis. Pour son parcours, voir la page <a href="/a-propos/">à propos</a> ou la présentation de <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer une marketplace ou un site de formation en ligne ?',
            'texte' => 'Une plateforme multi-vendeurs réussit quand le modèle d’argent (commission, reversement, remboursement) est écrit avant le premier écran et quand les premiers vendeurs ou formateurs sont déjà là. Commencez petit, validez avec de vrais utilisateurs, vérifiez chaque paiement côté serveur et gardez les accès à votre nom.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous cadrer votre marketplace ou votre plateforme de formation en ligne ?',
            'texte'  => 'Décrivez qui vend, qui apprend, comment vos clients paient et quelle part vous comptez prélever : vous recevez une réponse sous 24 heures, puis un devis gratuit qui précise le périmètre, la technologie et le calendrier.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis gratuit'],
        ],
    ],

    'faq' => [
        ['q' => 'Qu’est-ce qu’une marketplace, et en quoi diffère-t-elle d’une boutique en ligne ?', 'r' => 'Une boutique en ligne vend les produits d’un seul vendeur. Une marketplace réunit plusieurs vendeurs sur un même site : la plateforme encaisse, prélève éventuellement une commission, puis reverse le solde à chaque vendeur. Elle ajoute des espaces vendeur, des règles de modération et un suivi des reversements.'],
        ['q' => 'Comment créer une marketplace, concrètement ?', 'r' => 'En quatre temps : définir qui vend quoi à qui et comment l’argent circule (commission, reversement, remboursement) ; choisir la base technique, WordPress avec extensions ou développement sur mesure ; ouvrir les comptes de paiement ; puis publier avec quelques vendeurs réels avant d’élargir. Le cadrage, gratuit au stade du devis, sert à trancher ces points.'],
        ['q' => 'Peut-on créer une marketplace gratuitement ?', 'r' => 'Les extensions de base peuvent être gratuites, comme le montrent les fiches wordpress.org de Dokan et de Tutor LMS, mais une plateforme qui fonctionne a d’autres coûts : nom de domaine, hébergement, sécurité et sauvegardes, passerelle de paiement et ses commissions, modération, mises à jour, et le temps de paramétrage. Les versions gratuites ont aussi des limites de fonctions ; vérifiez-les sur la fiche de l’éditeur. Le devis détaille ce qui est inclus ou non.'],
        ['q' => 'Comment créer une marketplace avec WordPress sans développer ?', 'r' => 'En installant WooCommerce et une extension de marketplace comme Dokan, puis en paramétrant les commissions, les paiements et les rôles. C’est faisable pour un modèle classique, mais le paiement en Mobile Money, le reversement aux vendeurs, la sécurité et les mises à jour demandent un soin que le simple paramétrage ne règle pas. Testez toujours sur une copie du site.'],
        ['q' => 'Comment créer un site e-learning ?', 'r' => 'Choisissez d’abord le modèle : cours vendus à l’unité, abonnement, accès par groupe, formateurs multiples. Puis un outil de cours (Tutor LMS ou LearnPress sous WordPress, ou du sur mesure), un paiement adapté à vos apprenants, et quelques cours terminés avant l’ouverture. La production des contenus reste votre travail ou celui d’un spécialiste.'],
        ['q' => 'Comment vendre des formations en ligne depuis l’Afrique francophone ?', 'r' => 'Il faut un site qui s’ouvre vite sur téléphone, un paiement par Mobile Money et par carte, des cours accessibles avec une connexion faible, et des conditions de vente claires. Aucune vente n’est garantie : la plateforme fournit l’outil, pas l’audience. Prévoyez la promotion de vos formations dès le départ.'],
        ['q' => 'Comment créer une plateforme de formation en ligne avec plusieurs formateurs ?', 'r' => 'En ajoutant à l’espace apprenant un espace formateur : publication de cours soumise à validation, taux de commission, suivi des ventes et demandes de retrait. Tutor LMS propose ce principe sous WordPress selon sa fiche officielle ; un développement sur mesure devient utile pour des règles de reversement plus précises.'],
        ['q' => 'Peut-on créer une marketplace avec WordPress ?', 'r' => 'Oui, avec des extensions comme Dokan, qui s’appuie sur WooCommerce et propose une boutique par vendeur et des commissions en pourcentage ou en montant fixe, selon sa fiche wordpress.org consultée le 4 novembre 2026. Pour des règles de commission ou de reversement plus spécifiques, un développement sur mesure devient préférable.'],
        ['q' => 'Quelle est la différence entre un LMS et un site de cours en ligne ?', 'r' => 'LMS signifie système de gestion de l’apprentissage : le logiciel qui gère les cours, les inscriptions, les quiz, la progression et les certificats. Un site de cours en ligne est le site public qui l’utilise, avec le catalogue, le paiement et l’espace apprenant. Les deux vont ensemble dans un projet.'],
        ['q' => 'Peut-on vendre ses formations en ligne avec paiement Mobile Money ?', 'r' => 'Oui. La plateforme accepte le Mobile Money (MTN, Moov) et la carte bancaire par une passerelle de paiement, et ouvre l’accès au cours seulement après vérification du paiement par le serveur. Le choix de la passerelle dépend des pays de vos clients.'],
        ['q' => 'Comment sont gérées les commissions de la plateforme ?', 'r' => 'C’est un choix de conception de votre plateforme : taux unique, taux par catégorie ou par vendeur, abonnement du vendeur. La règle est écrite au cadrage, calculée automatiquement, tracée dans un livre de comptes et affichée aux vendeurs avant leur inscription.'],
        ['q' => 'Comment les vendeurs ou les formateurs sont-ils payés ?', 'r' => 'La plateforme encaisse puis reverse leur part. Selon le pays et le volume, le reversement se fait par virement, par Mobile Money ou par lot validé par un gestionnaire. Une durée de rétention couvre les remboursements, et un seuil de retrait est annoncé à l’inscription.'],
        ['q' => 'Un site e-learning peut-il délivrer des certificats ?', 'r' => 'Oui. Le certificat est généré à la fin du parcours avec le nom de l’apprenant, la date et un identifiant vérifiable en ligne. Sa valeur légale ou professionnelle dépend de l’organisme qui le délivre et de la reconnaissance de la formation, ce que la plateforme ne crée pas à elle seule.'],
        ['q' => 'Peut-on proposer des abonnements et des accès par groupe ?', 'r' => 'Oui. L’abonnement ouvre un catalogue pour une durée ; l’accès par groupe permet à une entreprise ou une école d’acheter des places, de les attribuer et de suivre l’avancement. En Mobile Money, le renouvellement se conçoit comme un paiement à l’échéance validé par le client.'],
        ['q' => 'WordPress ou sur mesure : lequel choisir ?', 'r' => 'WordPress convient à un modèle classique et à un budget mesuré ; il permet de valider l’idée rapidement. Le sur mesure convient quand les règles d’argent, les rôles ou le volume dépassent ce que les extensions savent faire. Le choix se fait au cadrage, jamais par habitude.'],
        ['q' => 'Combien de temps faut-il pour créer la plateforme ?', 'r' => 'Une application sur mesure demande en général 1 à 3 mois pour une application sur mesure. La durée d’une solution WordPress est annoncée sur le devis, selon le nombre de rôles, de passerelles et de fonctions.'],
        ['q' => 'Combien coûte une marketplace ou un site e-learning ?', 'r' => 'Le prix est fixé sur devis, gratuit. Il dépend du nombre de rôles, du modèle de commission, des passerelles et des pays, du volume de contenu, des raccordements et d’une éventuelle application mobile. Les tarifs de départ affichés sur le site (150 000 FCFA pour une landing page, 300 000 FCFA pour un site vitrine) ne concernent pas ces projets.'],
        ['q' => 'Faut-il prévoir de la modération ?', 'r' => 'Oui. Validation avant publication, signalement, suspension d’un vendeur ou d’un cours et traitement des litiges protègent la réputation de la plateforme. Les règles sont écrites avec vous et traduites en écrans simples pour vos modérateurs.'],
        ['q' => 'Mon équipe saura-t-elle gérer la plateforme ?', 'r' => 'Un guide écrit accompagne la mise en ligne : validation des vendeurs, suivi des reversements, publication de cours, litiges. Prévoyez que vos gestionnaires s’exercent sur vos données réelles avant l’ouverture, et précisez au devis l’accompagnement que vous souhaitez. La <a href="/services/maintenance-support">maintenance et le support</a> peuvent suivre.'],
        ['q' => 'Les données des apprenants et des vendeurs sont-elles protégées ?', 'r' => 'Cela dépend de ce qui est prévu au cahier des charges : accès par rôle, journal d’activité, export et suppression des données d’un compte. Le projet tient compte de la loi béninoise n° 2017-20 et du RGPD. Elle ne remplace pas l’avis d’un juriste pour un traitement sensible, notamment avec des mineurs.'],
        ['q' => 'Comment régler la prestation de création de la plateforme ?', 'r' => 'Vous pouvez payer par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Le devis est gratuit.'],
    ],

    'sources' => [
        ['titre' => 'WordPress.org, fiche de l’extension Tutor LMS (version, installations, fonctions, marketplace de formateurs)', 'url' => 'https://wordpress.org/plugins/tutor/', 'date' => '2026-11-04'],
        ['titre' => 'WordPress.org, fiche de l’extension LearnPress (version, installations, compatibilité)', 'url' => 'https://wordpress.org/plugins/learnpress/', 'date' => '2026-11-04'],
        ['titre' => 'WordPress.org, fiche de l’extension Dokan (marketplace multi-vendeurs, commissions, retraits)', 'url' => 'https://wordpress.org/plugins/dokan-lite/', 'date' => '2026-11-04'],
        ['titre' => 'Stripe, documentation : créer une marketplace avec Connect (monétisation, commission de plateforme, marchand attitré)', 'url' => 'https://docs.stripe.com/connect/marketplace', 'date' => '2026-11-04'],
        ['titre' => 'Commission européenne, paquet législatif sur les services numériques (obligations des places de marché)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/digital-services-act-package', 'date' => '2026-11-04'],
        ['titre' => 'CNIL, RGPD chapitre III : droits de la personne concernée (articles 12, 17 et 20)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-11-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-11-04'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'saas-espace-client', 'application-web-sur-mesure', 'application-mobile-android-ios', 'api-rest-integrations', 'maintenance-support'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
