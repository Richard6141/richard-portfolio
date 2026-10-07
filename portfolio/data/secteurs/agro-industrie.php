<?php
// ============================================================
// data/secteurs/agro-industrie.php · Page secteur « Agro-industrie et négoce
// agricole » (vague 1E, univers « Technique et terrain »). Aucun projet du
// portfolio n'est rattaché à ce secteur ; le statut du public « Agro-industrie
// et négoce agricole » est P au questionnaire (Richard peut former, n'a pas
// formé). Faits externes relevés le 07/10/2026 : règlements (UE) 2023/1115,
// 2025/2650 et (CE) 178/2002 (EUR-Lex), page de la Commission sur le règlement
// contre la déforestation, Acte uniforme OHADA sur les sûretés (JO OHADA
// n° 22), BCEAO, GSMA, UIT, AIP (Côte d'Ivoire), Ecofin (coton du Bénin),
// loi béninoise n° 2017-20, ARTCI, loi camerounaise n° 2024/017, CNIL,
// impots.gouv.fr, documentations Odoo 20.0, Dolibarr, KoboToolbox, OIML.
// Aucun jugement sur les politiques agricoles des États ; aucun prix hors
// fait('tarifs_depart') ; apostrophes typographiques dans le texte.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'De la pesée au conteneur : des outils, de l’IA et des intégrations sur mesure pour collecter, tracer, payer les producteurs et exporter sans ressaisie',
    'title'   => 'Digitaliser l’agro-industrie et le négoce | Richard SALANON',
    'meta'    => 'Collecte, pesées, lots, stocks, traçabilité EUDR, paiement mobile money des producteurs, export : outils, Odoo, applications de terrain et IA, sur devis.',
    'en_bref' => 'Cette page s’adresse aux coopératives, aux négociants, aux usines de transformation et aux exportateurs de cacao, café, cajou, coton, karité, sésame, soja ou céréales. Richard SALANON y décrit comment relier la collecte au champ, la pesée, les lots, les magasins, la qualité, la traçabilité et le paiement des producteurs par mobile money, avec Odoo ou Dolibarr, des applications Android qui fonctionnent sans réseau, des interfaces entre vos logiciels et des automatisations, puis comment y ajouter l’intelligence artificielle là où elle aide sans décider à la place d’une personne. Le travail se fait à distance, et sur place au Bénin. Le prix est fixé sur devis après le cadrage.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Technique et terrain',
    'locales' => ['digitaliser-negoce-agricole-parakou'],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Coopératives, négociants, usines de transformation et exportateurs agricoles'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation de l’agro-industrie en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'La campagne agricole se joue sur des chaînes longues : un producteur, un point d’achat, une pesée, un magasin, une usine ou un port, puis un acheteur étranger. Le paiement a déjà basculé vers le téléphone. Selon le <a href="https://www.gsma.com/sotir/">rapport 2026 de la GSMA sur le mobile money</a>, les services de ce type ont traité plus de 2 000 milliards de dollars en 2025, avec 2,3 milliards de comptes enregistrés dans le monde. Dans l’Union monétaire ouest-africaine, la BCEAO compte 248 millions de comptes de monnaie électronique à fin 2024, contre 209 millions un an plus tôt, d’après son <a href="https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024">rapport annuel sur les services financiers numériques</a> publié le 13 mars 2026.',
                'Le reste de la chaîne suit plus lentement. D’après le <a href="https://www.itu.int/en/mediacentre/Pages/PR-2025-11-17-Facts-and-Figures.aspx">communiqué de l’UIT du 17 novembre 2025</a>, 85 % des habitants des zones urbaines utilisent Internet dans le monde, contre 58 % dans les zones rurales, et seulement 23 % dans les pays à faible revenu. Pour un acheteur qui collecte à des dizaines de kilomètres de la route goudronnée, la conséquence est simple : l’outil de terrain doit enregistrer d’abord et synchroniser ensuite, sans exiger une connexion à chaque pesée.',
                'Certains États ont déjà imposé leur propre système de suivi. En Côte d’Ivoire, le Conseil du café-cacao a annoncé le 1er octobre 2025, selon l’<a href="https://www.aip.ci/?p=257431">Agence ivoirienne de presse</a>, que 113 des 210 coopératives et acheteurs codifiés étaient équipés du système national de traçabilité, fait de cartes de producteur, de géolocalisation des parcelles, de terminaux portables et d’une plateforme de gestion, et que ce système devenait obligatoire à partir de janvier 2026. Au Bénin, la récolte de coton 2025-2026 a atteint 647 290 tonnes sur 510 897 hectares, selon <a href="https://www.ecofinagency.com/news-agriculture/2404-54984-benin-targets-700-000-ton-cotton-output-in-2026/2027-to-stay-west-africa-s-top-producer">Ecofin d’avril 2026</a>, qui rapporte aussi l’objectif de 700 000 tonnes pour 2026-2027 : à cette échelle, un registre papier ne suit plus.',
                'En Europe, la pression vient de la réglementation. Le règlement (UE) 2023/1115 sur les produits sans déforestation, modifié par le règlement (UE) 2025/2650 du 19 décembre 2025, s’appliquera aux grandes et moyennes entreprises à partir du 30 décembre 2026 et à la plupart des micro et petites entreprises à partir du 30 juin 2027, comme le rappelle la <a href="https://environment.ec.europa.eu/topics/forests/deforestation/regulation-deforestation-free-products_en">page de la Commission européenne</a>. Un exportateur africain de cacao ou de café n’est en général pas l’opérateur visé quand un importateur européen met le produit sur le marché, mais cet importateur l’est, et lui demandera des données : de quoi faire de la traçabilité un sujet de logiciel avant d’être un sujet de conformité.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d’une campagne gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Une campagne répète chaque année les mêmes gestes, sous forte pression : quelques semaines pour collecter, peser, payer et stocker. Les signes ci-dessous reviennent dans la plupart des structures ; trois d’entre eux justifient déjà un cadrage.',
            'items' => [
                ['titre' => 'Le registre des producteurs vit dans des cahiers', 'texte' => 'Identité, village, parcelles, surface, culture, avances reçues : chaque point d’achat tient sa propre liste. Le même producteur apparaît sous deux orthographes, et personne ne sait combien de producteurs actifs compte la coopérative.'],
                ['titre' => 'La pesée et le ticket se recopient au bureau', 'texte' => 'Le pesage se note sur un carnet, le ticket est recopié le soir, et l’écart entre le poids annoncé au champ et le poids reçu au magasin se découvre à la fin de la semaine, quand il est trop tard pour comprendre qui a pesé quoi.'],
                ['titre' => 'Les avances et les paiements se réconcilient à la main', 'texte' => 'Avance de campagne, retenue pour les intrants, solde à la livraison, paiement par mobile money ou en espèces : chaque producteur a un compte, et le comptable le reconstitue à la fin du mois à partir de trois cahiers et de relevés de téléphone.'],
                ['titre' => 'Le stock du magasin ne correspond pas au stock des livres', 'texte' => 'Humidité qui fait perdre du poids, sacs de qualités mélangées, transferts entre magasins non notés : à l’inventaire, l’écart se chiffre en tonnes, et la banque qui finance le stock demande un état fiable que personne ne peut produire.'],
                ['titre' => 'Impossible de remonter d’un lot expédié aux producteurs', 'texte' => 'Un acheteur demande d’où vient le conteneur ; la réponse existe, mais éparpillée entre les carnets de collecte, les bordereaux de transport et les fiches de magasin. Reconstituer un lot prend des jours.'],
                ['titre' => 'Les données arrivent après la campagne', 'texte' => 'Les rendements, les prix payés, les volumes par zone et les refus qualité se calculent en fin d’année, alors qu’ils auraient servi à ajuster le prix d’achat ou à envoyer un camion dans la bonne zone en pleine saison.'],
                ['titre' => 'Un acheteur européen demande des coordonnées et des preuves', 'texte' => 'Cacao, café, soja, huile de palme : les clients soumis au règlement européen sur la déforestation réclament la géolocalisation des parcelles et la preuve de leur lien avec chaque lot. Un tableur ne suffit plus à répondre, ni à tenir la preuve à jour.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Si vous achetez à trois fournisseurs connus, un fichier partagé bien tenu suffit. Si vos règles de collecte changent encore chaque semaine, ou si personne ne peut piloter l’outil pendant la campagne, mieux vaut attendre l’intersaison et démarrer par une seule fonction, la pesée par exemple.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour l’agro-industrie et le négoce agricole ?',
            'legende' => 'Les services de Richard SALANON mis en regard des besoins d’une campagne ; chaque ligne renvoie à la page du service concerné.',
            'entetes' => ['Besoin typique du secteur', 'Service', 'Page du service'],
            'lignes'  => [
                ['Gérer achats, lots, stocks, magasins, transformation et ventes dans un seul logiciel', 'Intégration et déploiement d’Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Équiper une PME de négoce d’un outil plus léger pour les stocks, les devis et les factures', 'Intégration et déploiement de Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Enregistrer producteurs, parcelles, pesées et tickets au point d’achat, sans réseau', 'Application mobile Android et iOS', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Suivre les avances, les comptes producteurs, les lots et les contrats avec des règles qui n’existent dans aucun logiciel du commerce', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Relier la balance, le terminal de collecte, l’ERP, la banque, le mobile money et le portail de l’acheteur', 'API REST et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Envoyer chaque soir le récapitulatif des pesées, alerter sur un stock bas, relancer une facture, produire le rapport hebdomadaire', 'Automatisation avec n8n et Make', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Informer les producteurs et les chauffeurs par WhatsApp : convocation, solde, rendez-vous de livraison', 'Intégration de WhatsApp Business', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Classer des certificats, des contrats d’achat et des rapports de laboratoire, résumer des documents en anglais', 'Intégration de l’IA en entreprise', '<a href="/services/integration-ia-entreprise">IA en entreprise</a>'],
                ['Garder l’outil vivant entre deux campagnes : correctifs, sauvegardes, montées de version, formation des saisonniers', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Présenter une coopérative ou une marque de produits transformés à ses acheteurs', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels logiciels pour ce secteur, et faut-il garder l’existant ou le remplacer ?',
            'legende' => 'Fonctions relevées dans la documentation d’Odoo 20.0, sur le wiki de Dolibarr et dans l’aide de KoboToolbox le 7 octobre 2026.',
            'entetes' => ['Outil', 'Ce qu’il apporte à une filière agricole', 'Limite à connaître', 'Quand le choisir'],
            'lignes'  => [
                ['Odoo, Inventaire avec lots', 'La documentation d’Odoo 20.0 décrit les lots comme des lots de produits reçus, stockés, expédiés ou fabriqués, utiles à la traçabilité complète et aux rappels ; la date de péremption se suit avec le numéro de lot. Réglage : « Lots & Serial Numbers » dans les paramètres d’Inventaire.', 'Aucune parcelle ni aucun producteur dans le standard : ils se rattachent au lot par un module ou une application reliée.', 'Négoce ou usine avec achats, stocks, fabrication et ventes à relier dans un seul outil'],
                ['Dolibarr, module Lot/Série', 'Selon le wiki de Dolibarr, un produit peut exiger un lot : aucun mouvement de stock n’est alors permis sans numéro, et les dates d’un lot déjà saisi ne se modifient plus par erreur.', 'Plus léger qu’Odoo, mais la fabrication et les chaînes multi-sites demandent davantage de travail autour.', 'Petite structure qui veut une traçabilité de lot stricte sans gros serveur'],
                ['KoboToolbox (collecte)', 'Formulaires sur téléphone Android avec KoboCollect : l’aide indique qu’il fonctionne hors connexion et que les réponses se gardent sur l’appareil avant l’envoi ; la position GPS se collecte dans un formulaire.', 'Outil de collecte, pas un logiciel de stock ni de paiement : il alimente un autre système.', 'Recensement de producteurs et de parcelles, enquêtes de rendement, tournées de contrôle'],
                ['Application mobile sur mesure', 'Pesée, ticket, avance et paiement dans un même geste, avec la règle propre à votre filière (déduction humidité, tare, qualité).', 'À construire, donc un budget et un suivi ; la balance et le téléphone doivent être testés ensemble.', 'Quand le processus de collecte est votre avantage et qu’aucun outil ne le suit'],
                ['Tableur partagé', 'Rien à installer, tout le monde sait l’utiliser, parfait pour un premier recensement.', 'Aucune trace de qui a modifié quoi, pas de verrouillage, et une formule cassée passe inaperçue.', 'Moins de trois points d’achat et un seul magasin, le temps du cadrage'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment relier les outils existants, et quand les remplacer ?',
            'paragraphes' => [
                'La règle de départ est de garder ce qui marche. Une balance connectée, un logiciel de comptabilité tenu par le cabinet, une plateforme nationale de traçabilité imposée par le Conseil café-cacao ne se remplacent pas : on les relie. La liaison passe par un fichier d’échange, une interface de programmation ou, à défaut, une automatisation qui lit l’export du terminal et le dépose dans l’ERP. La page <a href="/services/api-rest-integrations">API REST et intégrations</a> décrit cette façon de travailler, et l’<a href="/services/automatisation-ia">automatisation avec n8n et Make</a> sert quand aucun connecteur n’existe.',
                'Le remplacement se justifie dans trois cas : le logiciel actuel ne s’exécute que sur un poste unique, il ne produit pas de numéro de lot exploitable, ou plus personne ne sait le modifier. Dans ce cas, le choix entre Odoo et Dolibarr suit la taille et les besoins de fabrication ; le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille prix, édition et comptabilité OHADA. Et quand ni l’un ni l’autre ne couvre la règle de collecte (avances, retenues, comptes producteurs), une <a href="/services/application-web-sur-mesure">application web sur mesure</a> reliée à l’ERP prend le relais, l’ERP restant la source des stocks et de la comptabilité.',
                'La plateforme d’un État doit se traiter à part. Le système de traçabilité ivoirien, par exemple, appartient au Conseil café-cacao : la coopérative l’utilise, elle ne le modifie pas. Ce qu’elle peut organiser, c’est la reprise quotidienne de ses données dans son propre outil de gestion, selon ce que le système permet, à confirmer auprès du Conseil avant de lancer le projet.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le règlement européen sur la déforestation pour un exportateur africain ?',
            'paragraphes' => [
                'Le règlement (UE) 2023/1115 couvre sept produits de base : bovins, cacao, café, palmier à huile, caoutchouc, soja et bois, ainsi que certains produits dérivés, comme le rappelle la <a href="https://environment.ec.europa.eu/news/commission-updates-product-scope-and-tools-support-eudr-2026-07-13_en">Commission européenne</a>, qui a adopté le 13 juillet 2026 une modification du champ des produits applicable à partir du 30 décembre 2027 (café soluble et certains dérivés de l’huile de palme ajoutés ; cuirs et peaux de bovins, pneus rechapés et semences de soja retirés). Le règlement (UE) 2025/2650, publié au Journal officiel le 23 décembre 2025, a fixé les dates actuelles. Le coton, le cajou, le karité et le sésame n’en font pas partie. Un produit n’entre sur le marché européen que s’il est « zéro déforestation » (produit sur une terre qui n’a pas été déboisée après le 31 décembre 2020, date retenue par le texte d’origine), conforme à la loi du pays de production et couvert par une déclaration de diligence raisonnée déposée dans le système d’information de la Commission.',
                'Ce que l’opérateur européen doit pouvoir montrer, c’est la géolocalisation des parcelles : l’article 2 du règlement la définit par des coordonnées de latitude et de longitude à six décimales au moins, et, pour les parcelles de plus de quatre hectares autres que l’élevage de bovins, par un polygone qui décrit le périmètre. L’exportateur africain ne dépose pas la déclaration à la place de son acheteur, mais c’est lui qui possède les coordonnées. Sans fichier propre (producteur, parcelle, polygone, lot, date de livraison), il ne peut pas répondre à la demande, et le client cherche un autre fournisseur.',
                'Les modifications de décembre 2025 allègent la chaîne sans supprimer la preuve. Les micro et petits opérateurs primaires, établis dans un pays classé à faible risque, déposent une déclaration simplifiée unique et peuvent remplacer la géolocalisation par l’adresse postale de la parcelle. Seul le premier opérateur en aval ou commerçant collecte les numéros de référence des déclarations. Le texte prévoyait un réexamen de simplification avant le 30 avril 2026 : la Commission a publié son <a href="https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=celex%3A52026DC0191">rapport le 4 mai 2026</a> (COM(2026) 191), avec des orientations mises à jour et un projet d’acte délégué sur les produits, et attend de l’ensemble des simplifications une réduction des coûts annuels de conformité d’environ 75 % par rapport au cadre d’origine. La classification des pays par niveau de risque (faible, standard ou élevé) relève d’un règlement d’exécution de la Commission adopté en mai 2025 et peut être révisée : une filière peut donc changer de catégorie. Les dates et les rôles s’apprécient avec un juriste avant d’engager une dépense.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles données faut-il tenir pour répondre à un acheteur soumis au règlement ?',
            'legende' => 'Données de traçabilité d’un lot de cacao, de café ou de soja, d’après les définitions du règlement (UE) 2023/1115 ; la liste exacte dépend du rôle de votre client et se confirme avec lui.',
            'entetes' => ['Donnée', 'Où elle naît', 'Où elle doit vivre', 'Point d’attention'],
            'lignes'  => [
                ['Identité du producteur', 'Recensement, carte de producteur', 'Registre central, relié à chaque pesée', 'Données personnelles : consentement et accès limités'],
                ['Parcelle et coordonnées', 'Relevé GPS sur le terrain, formulaire hors connexion', 'Fiche parcelle, polygone au-delà de quatre hectares', 'Six décimales au moins ; une coordonnée copiée à la main est souvent fausse'],
                ['Pesée et ticket', 'Point d’achat, balance contrôlée', 'Journal de collecte, avec l’heure et l’agent', 'Un ticket sans identifiant de producteur casse la chaîne'],
                ['Lot', 'Regroupement au magasin', 'Numéro de lot dans l’ERP, avec la liste des tickets qui le composent', 'Mélanger des lots de zones différentes sans le noter rend la preuve impossible'],
                ['Expédition', 'Chargement, transitaire, port', 'Dossier d’export rattaché au lot', 'Le numéro de référence de la déclaration de l’acheteur doit pouvoir être joint au lot'],
                ['Pièces justificatives', 'Contrats, certificats, rapports', 'Dépôt de documents daté, avec droits d’accès', 'Conservation selon les règles du client et du pays'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l’IA dans l’agro-industrie, et que ne doit-elle jamais faire ?',
            'intro' => 'L’intelligence artificielle sert quand elle lit, classe, résume ou prépare. Elle ne remplace ni la balance, ni le contrôle qualité, ni la signature de la personne qui paie.',
            'items' => [
                ['titre' => 'Lire et classer les pièces', 'texte' => 'Contrats d’achat, certificats d’origine, rapports de laboratoire, bordereaux scannés : un modèle extrait le nom, la date, le poids et le numéro, et propose un classement que quelqu’un valide. Un rapport en anglais se résume en français en quelques secondes.'],
                ['titre' => 'Préparer les rapports de campagne', 'texte' => 'À partir des données déjà saisies, l’IA rédige le point hebdomadaire : volumes par zone, prix moyen payé, lots en retard. Elle explique un écart, mais les chiffres viennent de l’ERP, jamais de sa mémoire.'],
                ['titre' => 'Répondre aux producteurs et aux chauffeurs', 'texte' => 'Un assistant WhatsApp répond aux questions simples (heure d’ouverture du point d’achat, date de livraison, solde à jour) et passe la main à une personne dès qu’il s’agit d’un litige ou d’un montant contesté.'],
                ['titre' => 'Repérer les anomalies', 'texte' => 'Une pesée très éloignée de la moyenne du producteur, un lot dont la somme des tickets ne correspond pas au poids chargé, un paiement en double : l’IA signale, la personne vérifie.'],
                ['titre' => 'Jamais décider d’un prix, d’un refus qualité ou d’un paiement', 'texte' => 'Le refus d’un lot, la déduction d’humidité et le montant versé au producteur engagent la structure. Ils restent décidés et signés par une personne, sur la base d’un instrument de pesage et d’une mesure contrôlés.'],
                ['titre' => 'Jamais inventer une origine ni une coordonnée', 'texte' => 'Un modèle génératif peut produire une réponse plausible et fausse. Une parcelle, un polygone ou une date de récolte sont des données mesurées, pas des textes à compléter.'],
                ['titre' => 'Jamais envoyer les données personnelles des producteurs à un outil sans cadre', 'texte' => 'Nom, téléphone, coordonnées de parcelle et numéro de compte de paiement sont des données personnelles. Elles ne se collent pas dans un assistant grand public ; l’outil, l’hébergement et le contrat se choisissent avant.'],
                ['titre' => 'Former les équipes qui s’en servent', 'texte' => 'Selon la <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">foire aux questions de la Commission</a>, l’obligation de maîtrise de l’IA de l’article 4 du règlement européen sur l’IA s’applique depuis le 2 février 2025, et le contrôle par les autorités nationales commence le 3 août 2026. Elle vise aussi des acteurs établis hors de l’Union quand le système est utilisé dans l’Union ; la Commission signale des modifications récentes de cet article, à vérifier avant de s’y référer.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi une pesée ne se confie-t-elle jamais à un tableur ni à un modèle d’IA ?',
            'texte' => 'La pesée fait foi entre le producteur et l’acheteur, et c’est sur elle que repose le paiement. La recommandation R 76-1 de l’Organisation internationale de métrologie légale fixe les exigences métrologiques et techniques des instruments de pesage à fonctionnement non automatique soumis à un contrôle officiel. Un logiciel doit donc recevoir le poids d’une balance dont l’étalonnage est suivi, l’enregistrer avec l’heure et l’agent, et interdire la modification d’un ticket sans trace. L’IA peut signaler une anomalie ; elle ne corrige jamais un poids.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment payer les producteurs par mobile money, facturer et rester dans les règles ?',
            'paragraphes' => [
                'Le paiement d’abord. Dans l’UMOA, l’instruction n° 001-01-2024 du 23 janvier 2024 de la BCEAO régit les services de paiement, et l’avis n° 004-03-2025 du 1er avril 2025 a mis fin à la période de mise en conformité, ce qui rend la conformité obligatoire pour les acteurs concernés, d’après le <a href="https://www.bceao.int/fr/reglementations/avis-ndeg004-03-2025-relatif-la-fin-de-la-periode-transitoire-de-mise-en-conformite">site de la banque centrale</a>. Pour la structure qui paie des producteurs, la conséquence pratique est de passer par un opérateur ou un agrégateur agréé, jamais par un compte personnel ; le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> aide à choisir. Un paiement de masse se prépare : fichier des bénéficiaires contrôlé, rapprochement de chaque transfert avec le compte du producteur, et solution de repli en espèces pour ceux dont le téléphone ne capte pas.',
                'Le repli compte : l’Agence ivoirienne de presse indique qu’une option de paiement en espèces a été intégrée au système ivoirien pour répondre aux réticences de producteurs devant le paiement numérique. Un outil de paiement qui n’admet que le téléphone laissera de côté une partie de la collecte.',
                'La facturation ensuite. Au Bénin, les entreprises assujetties à la TVA doivent émettre des factures normalisées avec un dispositif certifié, selon la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">présentation de la Direction générale des impôts</a>, qui décrit le système en vigueur depuis le 29 février 2020 et des amendes dissuasives en cas de manquement. Un négociant ou une usine béninoise doit donc choisir un ERP ou un module capable de produire cette facture. En France, selon <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a>, une coopérative ou un négociant français doit pouvoir recevoir des factures électroniques depuis le 1er septembre 2026 ; l’émission suit selon la taille, dès cette date pour les grandes entreprises et celles de taille intermédiaire, et à partir du 1er septembre 2027 pour les PME et les micro-entreprises.',
                'Les données personnelles, enfin. La collecte de producteurs, de téléphones et de parcelles tombe sous la loi. Pour des fichiers de producteurs béninois envoyés à un acheteur ou à un hébergeur étranger, l’article 391 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> pose deux conditions : le pays de destination doit offrir, selon le constat de l’Autorité, une protection équivalente, et l’Autorité doit avoir autorisé le transfert au préalable. En Côte d’Ivoire, la loi n° 2013-450 du 19 juin 2013, présentée sur le <a href="https://artci.ci/en/data-protection/">site de l’ARTCI</a>, impose le consentement avant la collecte et encadre les transferts hors du pays. Au Cameroun, la loi n° 2024/017 du 23 décembre 2024 a prévu un délai de mise en conformité de dix-huit mois ; la presse spécialisée, dont <a href="https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026">Droit Médias Finance</a>, situe son application effective au 23 juin 2026 et rapporte une autorisation préalable de l’autorité pour héberger des données à l’étranger, à confirmer auprès de l’autorité camerounaise avant toute décision d’hébergement.',
                'En Europe, un prestataire basé au Bénin qui intervient sur le système d’un client européen agit comme sous-traitant : l’article 28 du RGPD, présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, exige un contrat écrit qui fixe l’objet, la durée, la nature du traitement et les instructions du client ; l’article 46 demande, faute de décision d’adéquation, des garanties appropriées comme des <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5">clauses contractuelles types</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles propres au secteur encadrent la traçabilité et le financement des stocks ?',
            'paragraphes' => [
                'Pour les denrées alimentaires, l’article 18 du règlement (CE) n° 178/2002 impose, à toutes les étapes de la production, de la transformation et de la distribution, d’identifier la personne qui a fourni le produit et l’entreprise à laquelle il a été livré, avec des systèmes et des procédures mis à la disposition des autorités sur demande. C’est la règle du « un pas en arrière, un pas en avant », et elle s’applique à toute usine ou à tout importateur qui vend du produit transformé à l’Europe : un numéro de lot qui relie les ventes aux achats n’est pas un confort, c’est une obligation de ce texte.',
                'Pour le financement, la loi donne un outil que beaucoup de coopératives n’utilisent pas faute de pouvoir prouver leur stock. Dans l’Acte uniforme de l’OHADA portant organisation des sûretés, adopté à Lomé le 15 décembre 2010 et publié au <a href="https://www.ohada.org/wp-content/uploads/2016/05/JO_OHADA_Journal_officiel_n_22.pdf">Journal officiel de l’OHADA du 15 février 2011</a>, l’article 120 prévoit que les matières premières, les produits d’une exploitation agricole ou industrielle et les marchandises peuvent faire l’objet d’un gage. Sans dépossession, l’article 121 permet l’émission d’un bordereau de gage de stocks, dont l’acte constitutif doit comporter, à peine de nullité, le nom de l’assureur qui couvre les stocks contre le vol, l’incendie et la détérioration ; l’article 124 laisse au débiteur le droit de vendre les stocks gagés, mais il ne peut livrer qu’après consignation du prix.',
                'Un gage de stocks se prépare donc comme un dossier de preuve : inventaire daté, valorisation, assurance, mouvements entrée et sortie traçables. Un ERP bien tenu fournit ces pièces ; un tableur ne le fait pas avec la même force. Quant au contenu exact de l’acte, à son inscription au registre du commerce et du crédit mobilier et à la version en vigueur dans votre pays, ils se confirment avec un juriste et avec la banque avant tout engagement.',
                'D’autres textes relèvent de chaque pays : agrément des acheteurs, prix fixés ou conseillés, règles de la filière tenues par le ministère de l’Agriculture ou par un conseil de filière, normes sanitaires à l’export. Aucune page de logiciel ne les remplace, et l’outil se configure sur les règles que le client lui fournit, validées par son organisme de tutelle.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet selon votre filière et votre pays ?',
            'items' => [
                ['secteur' => 'Coopérative de cacao, Côte d’Ivoire', 'probleme' => 'La coopérative utilise le système national de traçabilité pour la collecte, mais sa comptabilité, ses avances et ses stocks vivent dans d’autres fichiers que personne ne rapproche des pesées.', 'solution' => 'Un exemple de cadrage : reprendre chaque soir l’export du terminal portable dans l’outil de gestion de la coopérative, selon ce que le système national permet, à confirmer auprès du Conseil du café-cacao ; rattacher chaque ticket à un lot dans Odoo ou Dolibarr ; tenir le compte de chaque producteur (avance, retenue, solde) ; produire le rapport de fin de semaine automatiquement.'],
                ['secteur' => 'Négoce de coton, de soja et de cajou, Parakou (Bénin)', 'probleme' => 'Des dizaines de points d’achat, des avances aux producteurs, des pesées qui font foi et un magasin central où le stock se découvre en fin de semaine.', 'solution' => 'Une application Android de pesée qui enregistre sans réseau puis synchronise, un stock par qualité et par lot dans l’ERP, des états d’avances par producteur. Le détail local figure sur la page <a href="/digitaliser-negoce-agricole-parakou">digitaliser un négoce agricole à Parakou</a>.'],
                ['secteur' => 'Exportateur de karité et de sésame, Burkina Faso', 'probleme' => 'Des acheteurs européens demandent d’où viennent les lots, même si ces produits ne figurent pas dans le règlement sur la déforestation ; la réponse est reconstituée à la main à chaque appel d’offres.', 'solution' => 'Un registre des groupements de productrices et de producteurs, un numéro de lot par livraison, un dossier de lot qui rassemble tickets, qualité et documents d’export, avec un portail de consultation que l’acheteur peut ouvrir en lecture seule. Le niveau d’exigence se fixe avec l’acheteur.'],
                ['secteur' => 'Exportateur de cacao et de café, Cameroun', 'probleme' => 'Des parcelles de plus de quatre hectares exigent des polygones, les coordonnées copiées à la main sont fausses, et la nouvelle loi sur les données personnelles serait applicable depuis le 23 juin 2026, selon la presse spécialisée.', 'solution' => 'Collecte hors connexion des polygones avec un formulaire de terrain, contrôle automatique des coordonnées (six décimales, position dans le pays), droits d’accès limités à ceux qui en ont besoin, et décision d’hébergement prise avec un juriste pour tenir compte de l’autorisation préalable exigée pour héberger à l’étranger.'],
                ['secteur' => 'Coopérative ou négociant de soja et de céréales, France', 'probleme' => 'Elle doit recevoir des factures électroniques depuis le 1er septembre 2026, produire les siennes selon sa taille, et savoir si elle est opérateur, opérateur en aval ou commerçant au sens du règlement sur la déforestation pour le soja.', 'solution' => 'Un ERP qui garde le lot et le fournisseur sur chaque réception, l’activation de la facturation électronique avec la plateforme choisie, et un tableau des rôles validé avec un conseil juridique avant le 30 décembre 2026.'],
                ['secteur' => 'Importateur de cacao ou de café, Belgique ou Suisse', 'probleme' => 'Il doit garder, pour chaque lot reçu d’Afrique, les numéros de référence des déclarations de diligence raisonnée et prouver le lien avec les fournisseurs.', 'solution' => 'Un portail fournisseurs où l’exportateur dépose parcelles, polygones et pièces par lot, relié à l’ERP de l’importateur par une interface ; les écarts (parcelle manquante, lot sans pièce) remontent dans un tableau de bord avant l’expédition.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Prise de contact', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous racontez votre filière : combien de points d’achat, de magasins et de producteurs, quelle saison de collecte, quels outils aujourd’hui, quel point de blocage. Un échange, à distance ou à Cotonou, dit franchement si un fichier mieux tenu suffit ou si un outil est justifié.'],
                ['titre' => 'Diagnostic sur une journée de collecte', 'duree' => 'Selon le projet', 'texte' => 'Méthode proposée : suivre une journée réelle, du producteur au magasin, avec la balance, le carnet, le ticket et le paiement, pour décrire le flux tel qu’il est et non tel qu’il est écrit. Le diagnostic fixe le périmètre, les données à reprendre et les règles propres à la filière.'],
                ['titre' => 'Choix des outils et de l’ordre', 'duree' => 'Selon le projet', 'texte' => 'Odoo ou Dolibarr, application de terrain, interfaces avec la plateforme nationale ou avec le client, automatisations. La pesée et le registre des producteurs passent en premier : ils nourrissent tout le reste.'],
                ['titre' => 'Prototype sur un point d’achat', 'duree' => 'Selon le projet', 'texte' => 'Un seul point d’achat, quelques agents, une balance, des producteurs qui acceptent de tester. On y vérifie le mode hors connexion, la lisibilité sous le soleil, la durée de la batterie et la rapidité du ticket.'],
                ['titre' => 'Reprise des données', 'duree' => 'Selon le projet', 'texte' => 'Producteurs, parcelles, soldes d’avance, stocks d’ouverture et lots en cours sont nettoyés, dédoublonnés puis importés, avec contrôle des totaux en présence du responsable de la collecte et du comptable.'],
                ['titre' => 'Formation des agents et des saisonniers', 'duree' => 'Avant le début de la campagne', 'texte' => 'Une formation courte par poste (agent de pesée, magasinier, comptable, responsable qualité), avec un guide d’une page et un référent désigné. Les saisonniers se forment le jour même sur le terrain.'],
                ['titre' => 'Démarrage et accompagnement de la campagne', 'duree' => 'Pendant la collecte', 'texte' => 'Un suivi rapproché pendant les premières semaines : corriger un réglage, reprendre une synchronisation, répondre à un agent bloqué. Les écarts de caisse et de stock se contrôlent chaque semaine.'],
                ['titre' => 'Bilan de campagne et paliers suivants', 'duree' => 'À la clôture', 'texte' => 'Bilan chiffré, liste des corrections, puis ouverture du palier suivant (comptabilité complète, WhatsApp, interface avec un acheteur, tableau de bord). La <a href="/services/maintenance-support">maintenance</a> couvre les correctifs, les sauvegardes et les montées de version entre deux campagnes.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet de digitalisation pour l’agro-industrie ?',
            'intro'      => 'Aucun forfait n’est publié pour ce secteur : un projet de collecte et de traçabilité se chiffre sur devis, après le diagnostic. Seuls trois tarifs de départ existent sur ce site, et ils concernent la vitrine d’une coopérative ou d’une marque auprès de ses acheteurs : 150 000 FCFA pour une landing page (environ 229 €), 300 000 FCFA pour un site vitrine (environ 457 €) et 75 000 FCFA pour le référencement naturel (environ 114 €), au taux de 655,957 FCFA pour 1 €. Aucun d’eux ne couvre un outil de collecte. Le règlement d’une prestation passe par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Diagnostic et cadrage', 'prix' => 'Sur devis', 'inclus' => ['Suivi d’une journée de collecte', 'Choix argumenté des outils', 'Plan de paliers et calendrier avant la campagne', 'Liste des interfaces à prévoir']],
                ['offre' => 'Outil de gestion (Odoo ou Dolibarr)', 'prix' => 'Sur devis', 'inclus' => ['Achats, stocks, lots, ventes et facturation', 'Reprise des données et formation', 'Accompagnement des premières semaines', 'Licences éventuelles facturées à part par l’éditeur']],
                ['offre' => 'Application de terrain et interfaces', 'prix' => 'Sur devis', 'inclus' => ['Application hors connexion sur Android', 'Interface avec balance, plateforme ou ERP', 'Paiement des producteurs', 'Documentation et code à votre nom']],
                ['offre' => 'IA, automatisations et maintenance', 'prix' => 'Sur devis', 'inclus' => ['Rapports et alertes automatiques', 'Assistant WhatsApp avec passage à une personne', 'Sauvegardes et correctifs', 'Montées de version entre deux campagnes']],
            ],
            'variations' => [
                'Le nombre de points d’achat, de magasins, d’agents et de producteurs à équiper.',
                'La part de collecte sans réseau, qui demande un mode hors connexion et des tests sur le terrain.',
                'Le matériel : téléphones, balances, imprimantes de ticket, qui peuvent être déjà achetés ou à prévoir.',
                'Les interfaces : plateforme nationale, balance connectée, banque ou agrégateur de mobile money, portail de l’acheteur.',
                'La traçabilité demandée par les acheteurs : lot simple, parcelle, polygone, dossier complet par expédition.',
                'La comptabilité : simple facturation ou comptabilité complète avec analytique par campagne et par produit.',
                'La part d’IA : lecture de documents, assistant WhatsApp, détection d’anomalies, avec l’hébergement choisi.',
                'La date de démarrage : une mise en service juste avant la campagne laisse moins de marge qu’en intersaison.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer la digitalisation d’une filière agricole ?',
            'intro' => 'Ces causes reviennent d’une campagne à l’autre ; presque toutes se décident avant le début de la collecte.',
            'items' => [
                ['titre' => 'Livrer l’outil la semaine où la collecte démarre', 'texte' => 'Les agents découvrent l’écran pendant la première livraison et les producteurs attendent. Un outil se teste en intersaison, sur un point d’achat, puis s’étend.'],
                ['titre' => 'Supposer que le réseau sera là', 'texte' => 'Une application qui exige la connexion à chaque pesée s’arrête au premier village sans réseau. Le mode hors connexion se teste dans les conditions réelles de la collecte, pas au bureau.'],
                ['titre' => 'Saisir le poids à la main au lieu de le recevoir de la balance', 'texte' => 'Chaque saisie manuelle ouvre la porte à l’erreur et à la contestation. Quand la balance le permet, le poids est transmis tel quel ; sinon, il se saisit une seule fois, avec photo du ticket si la politique de la structure l’exige.'],
                ['titre' => 'Oublier les producteurs sans téléphone', 'texte' => 'Un paiement exclusivement par mobile money laisse de côté ceux qui n’ont pas de téléphone ou de couverture. Prévoir le paiement en espèces avec le même rapprochement, sur le même compte producteur.'],
                ['titre' => 'Collecter des coordonnées sans les contrôler', 'texte' => 'Des polygones copiés d’un autre producteur, des coordonnées inversées ou hors du pays passent les yeux fermés et se découvrent chez l’acheteur. Le contrôle doit se faire à la saisie.'],
                ['titre' => 'Mélanger les lots sans le noter', 'texte' => 'Regrouper des sacs de deux zones au magasin et leur donner un seul numéro rend toute traçabilité impossible. Le regroupement est une opération du logiciel, avec la liste des tickets d’origine.'],
                ['titre' => 'Négliger les données personnelles des producteurs', 'texte' => 'Fichiers partagés par messagerie, copies sur des téléphones personnels, exports sans contrôle : le consentement, les droits d’accès et l’hébergement se décident dès le cadrage, selon la loi du pays.'],
                ['titre' => 'Ne jamais tester la restauration des sauvegardes', 'texte' => 'Un registre de campagne qui disparaît en pleine collecte coûte plus cher que l’outil. La sauvegarde se vérifie par une restauration d’essai avant la saison ; l’histoire de <a href="/histoires/maersk-notpetya">Maersk et de l’attaque NotPetya</a> montre à quel point une chaîne logistique dépend de ses systèmes.'],
                ['titre' => 'Laisser les accès au prestataire', 'texte' => 'Compte administrateur, hébergement, code source, clés des interfaces : tout se met au nom de la structure, pour que la campagne suivante ne dépende pas de qui a gardé les clés.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on former les équipes de la coopérative ou du négoce à ces outils ?',
            'paragraphes' => [
                'Oui. Richard peut former des professionnels de l’agro-industrie et du négoce agricole : responsables de collecte, magasiniers, comptables, responsables qualité et traçabilité, acheteurs et exportateurs. La page <a href="/formations/metier/agro-industrie">formations pour l’agro-industrie et le négoce agricole</a> décrit les parcours pour ce public. Les formations ne servent pas à remplacer un projet : elles rendent l’équipe autonome sur l’outil qui a été mis en place.',
                'Les fiches suivantes s’y rattachent : <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> pour la prise en main par poste, <a href="/formations/digitalisation-processus">digitalisation des processus métiers</a> pour décrire une campagne et l’outiller, <a href="/formations/data-literacy">décider avec les données</a> pour lire les rapports de campagne, et <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a> pour les échanges avec producteurs et transporteurs. Les formations se placent de préférence entre deux campagnes, quand les équipes ont du temps.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre filière à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard compte plus de 6 ans de métier, plus de 50 projets livrés et une formation à EPITECH (2022) ; il est intervenu dans onze pays d’Afrique francophone, du Bénin au Cameroun et à la RD Congo, ainsi qu’en France, en Belgique, en Suisse et au Canada. Les contraintes d’une filière agricole (réseau absent, paiements par téléphone, preuves à produire à un acheteur étranger) rejoignent celles des projets qu’il conduit au quotidien : applications mobiles, intégrations, ERP, automatisations.',
                'Il connaît Odoo et Dolibarr et peut dire lequel sert votre cas ; il développe des applications web et mobiles et relie des logiciels entre eux par API, ce qui compte quand il faut brancher une balance, un mobile money ou le portail d’un acheteur. Il développe aussi <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>.',
                'Sa méthode proposée tient en quelques engagements : un diagnostic sur une journée de collecte réelle, un prototype sur un seul point d’achat avant l’extension, des accès et un code à votre nom, une réponse sous 24 heures. Ses références, du site à l’application sur mesure, figurent sur la page <a href="/realisations/">réalisations</a>. Pour une déclinaison locale du même raisonnement, la page <a href="/digitaliser-negoce-agricole-parakou">digitaliser un négoce agricole à Parakou</a> traite du nord du Bénin, et le parcours complet de Richard se lit sur <a href="/richard-salanon">sa page de présentation</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer avant la prochaine campagne ?',
            'texte'  => 'Décrivez votre filière, vos points d’achat, vos outils actuels et ce que vos acheteurs vous demandent : la réponse arrive sous 24 heures ; le premier échange est gratuit, et il débouche sur un plan par paliers chiffré.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet agricole'],
        ],
    ],

    'faq' => [
        ['q' => 'Le règlement européen sur la déforestation s’applique-t-il à un exportateur de cacao ou de café africain ?', 'r' => 'Le texte vise d’abord les opérateurs et commerçants qui mettent des produits sur le marché européen. L’exportateur africain n’est en général pas l’opérateur quand un importateur européen met le produit sur le marché, mais cet importateur lui demande les coordonnées des parcelles et les pièces par lot. Les dates et les rôles se confirment avec un juriste.'],
        ['q' => 'Quelles dates retenir pour le règlement européen sur la déforestation ?', 'r' => 'Selon la Commission européenne, le règlement (UE) 2023/1115, modifié par le règlement (UE) 2025/2650, s’applique aux grands et moyens opérateurs à partir du 30 décembre 2026 et à la plupart des micro et petits opérateurs à partir du 30 juin 2027. Cette page est datée du 7 octobre 2026 : vérifiez toute nouvelle modification avant de décider.'],
        ['q' => 'Le coton, le cajou, le karité ou le sésame sont-ils concernés par ce règlement ?', 'r' => 'Non. Les produits de base visés sont les bovins, le cacao, le café, le palmier à huile, le caoutchouc, le soja et le bois. Un acheteur peut cependant exiger une traçabilité volontaire pour d’autres produits, et un lot bien tracé répond aussi à l’article 18 du règlement (CE) 178/2002 pour les denrées vendues en Europe.'],
        ['q' => 'Faut-il une connexion Internet permanente au point d’achat ?', 'r' => 'Non, si l’application est conçue pour le hors connexion : elle enregistre la pesée et le ticket sur le téléphone, puis synchronise au retour du réseau. Un outil de collecte comme KoboToolbox fonctionne ainsi, selon son aide. Le mode hors connexion se teste sur le terrain avant la campagne.'],
        ['q' => 'Peut-on payer les producteurs par mobile money depuis l’outil de gestion ?', 'r' => 'Oui, avec un agrégateur ou un opérateur agréé et un rapprochement automatique entre chaque transfert et le compte du producteur. Dans l’UMOA, les services de paiement relèvent de l’instruction n° 001-01-2024 de la BCEAO. Prévoyez aussi le paiement en espèces pour les producteurs sans téléphone ou sans couverture.'],
        ['q' => 'Odoo ou Dolibarr pour un négoce agricole ?', 'r' => 'Les deux gèrent les lots : Odoo avec la fonction Lots et numéros de série d’Inventaire, Dolibarr avec le module Lot/Série. Odoo convient mieux à une structure qui relie achats, stocks, fabrication et ventes dans un seul outil ; Dolibarr à une petite structure qui veut une traçabilité stricte sans gros serveur. Le comparatif publié sur ce site détaille le choix.'],
        ['q' => 'Comment financer un stock avec un gage ?', 'r' => 'L’Acte uniforme de l’OHADA sur les sûretés, dans sa version de 2010, permet de gager des produits d’une exploitation agricole ou industrielle (article 120) et, sans dépossession, d’émettre un bordereau de gage de stocks (article 121). Il demande un assureur désigné, et un stock prouvé. L’acte exact se prépare avec la banque et un juriste.'],
        ['q' => 'Que devient la plateforme nationale de traçabilité si j’installe mon propre outil ?', 'r' => 'Elle reste obligatoire là où l’État l’impose, comme en Côte d’Ivoire pour le cacao depuis janvier 2026. Votre outil la complète : il reprend vos données de collecte, tient vos stocks, vos avances et votre comptabilité. Ce que la plateforme permet d’exporter se confirme auprès du Conseil avant le projet.'],
        ['q' => 'Les données des producteurs sont-elles protégées par la loi ?', 'r' => 'Oui : nom, téléphone, parcelle et compte de paiement sont des données personnelles. Au Bénin, la loi n° 2017-20 encadre le transfert vers un État tiers ; en Côte d’Ivoire, la loi n° 2013-450 exige le consentement ; au Cameroun, la loi n° 2024/017 (promulguée le 23 décembre 2024) est donnée par la presse spécialisée comme applicable depuis le 23 juin 2026, à confirmer auprès de l’autorité. En Europe, le RGPD s’applique au sous-traitant par contrat.'],
        ['q' => 'L’IA peut-elle remplacer le contrôle qualité ou la pesée ?', 'r' => 'Non. L’IA lit des documents, prépare des rapports, répond aux questions simples et signale des anomalies. La pesée repose sur un instrument contrôlé, et le refus d’un lot ou le montant payé au producteur restent décidés par une personne. Une origine ou une coordonnée ne se génère jamais.'],
        ['q' => 'Combien de temps faut-il pour équiper une coopérative ?', 'r' => 'La durée dépend du nombre de points d’achat, des interfaces et de la saison : elle se fixe au diagnostic. La règle est de tester en intersaison sur un seul point d’achat avant d’étendre, et de ne pas livrer l’outil la semaine où la collecte démarre.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Le cadrage, le paramétrage et le suivi se font à distance, avec des visioconférences ; les déplacements sur place se font au Bénin. Pour un client européen, la carte bancaire, PayPal et le virement suffisent.'],
    ],

    'sources' => [
        ['titre' => 'Commission européenne, règlement relatif aux produits sans déforestation (dates d’application)', 'url' => 'https://environment.ec.europa.eu/topics/forests/deforestation/regulation-deforestation-free-products_en', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (UE) 2023/1115 sur les produits sans déforestation', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32023R1115', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (UE) 2025/2650 modifiant le règlement (UE) 2023/1115', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32025R2650', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, rapport sur le réexamen de simplification du règlement contre la déforestation, COM(2026) 191 (4 mai 2026)', 'url' => 'https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=celex%3A52026DC0191', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, mise à jour du champ des produits du règlement contre la déforestation (13 juillet 2026)', 'url' => 'https://environment.ec.europa.eu/news/commission-updates-product-scope-and-tools-support-eudr-2026-07-13_en', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (CE) n° 178/2002, article 18 (traçabilité)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32002R0178', 'date' => '2026-10-07'],
        ['titre' => 'GSMA, rapport 2026 sur l’état de l’industrie du mobile money', 'url' => 'https://www.gsma.com/sotir/', 'date' => '2026-10-07'],
        ['titre' => 'UIT, communiqué Facts and Figures 2025 (17 novembre 2025)', 'url' => 'https://www.itu.int/en/mediacentre/Pages/PR-2025-11-17-Facts-and-Figures.aspx', 'date' => '2026-10-07'],
        ['titre' => 'BCEAO, rapport annuel 2024 sur les services financiers numériques dans l’UEMOA', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024', 'date' => '2026-10-07'],
        ['titre' => 'BCEAO, avis n° 004-03-2025 sur l’instruction n° 001-01-2024 relative aux services de paiement', 'url' => 'https://www.bceao.int/fr/reglementations/avis-ndeg004-03-2025-relatif-la-fin-de-la-periode-transitoire-de-mise-en-conformite', 'date' => '2026-10-07'],
        ['titre' => 'Agence ivoirienne de presse, système national de traçabilité du cacao (1er octobre 2025)', 'url' => 'https://www.aip.ci/?p=257431', 'date' => '2026-10-07'],
        ['titre' => 'Ecofin, coton du Bénin : 647 290 tonnes en 2025-2026 et objectif de 700 000 tonnes (avril 2026)', 'url' => 'https://www.ecofinagency.com/news-agriculture/2404-54984-benin-targets-700-000-ton-cotton-output-in-2026/2027-to-stay-west-africa-s-top-producer', 'date' => '2026-10-07'],
        ['titre' => 'OHADA, Journal officiel n° 22 : Acte uniforme portant organisation des sûretés (articles 120 à 124)', 'url' => 'https://www.ohada.org/wp-content/uploads/2016/05/JO_OHADA_Journal_officiel_n_22.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, protection des données personnelles (loi n° 2013-450)', 'url' => 'https://artci.ci/en/data-protection/', 'date' => '2026-10-07'],
        ['titre' => 'Droit Médias Finance, entrée en vigueur de la loi camerounaise sur les données personnelles le 23 juin 2026', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre IV (article 28, sous-traitant)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre V (articles 45 et 46, transferts hors de l’Union)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, réforme de la facturation électronique : à partir de quand suis-je concerné ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, numéros de lot et traçabilité', 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/product_management/product_tracking/lots.html', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, module Lot/Série', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Lot_/_Serial', 'date' => '2026-10-07'],
        ['titre' => 'KoboToolbox, KoboCollect sur Android (hors connexion)', 'url' => 'https://support.kobotoolbox.org/kobocollect_on_android_latest.html', 'date' => '2026-10-07'],
        ['titre' => 'OIML, recommandation R 76-1 sur les instruments de pesage à fonctionnement non automatique', 'url' => 'https://www.oiml.org/en/files/pdf_r/r076-1-e06.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, maîtrise de l’IA (article 4 du règlement sur l’IA), questions et réponses', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['integration-odoo', 'application-mobile-android-ios', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'integration-dolibarr', 'integration-whatsapp', 'integration-ia-entreprise', 'maintenance-support'],
        'metiers'     => ['agro-industrie'],
        'formations'  => ['odoo-utilisateurs', 'digitalisation-processus', 'data-literacy', 'whatsapp-odoo-dolibarr-crm', 'ia-ethique-conformite'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => ['maersk-notpetya'],
    ],

];
