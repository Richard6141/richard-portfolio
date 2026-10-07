<?php
// ============================================================
// data/secteurs/industrie.php · Page secteur « Industrie et PME manufacturières »
// (vague 1E). Univers « Technique et terrain ». Public « Industrie » : statut P au
// questionnaire (Richard PEUT former ces équipes, il n'est pas présenté ici comme déjà fait). Aucun projet
// du portfolio rattaché, aucune page locale. Angle propre : la fabrication et la
// transformation (nomenclatures, ordres de fabrication, lots, maintenance, coûts de
// revient, normes ISO, énergie, sécurité des systèmes industriels), pas la collecte agricole.
// Faits externes relevés le 07/10/2026 : ISO (9001:2026, 9001:2015 retirée, 22000:2018,
// organisme membre béninois ANM), documentation Odoo 20.0 (Fabrication, Maintenance,
// Qualité), dépôt public d'Odoo (branche 20.0), wiki Dolibarr (BOM, Ordres de fabrication),
// Banque mondiale (coupures d'électricité), gouvernement du Bénin (zone de Glo-Djigbé,
// facture normalisée), SGG du Bénin, CNIL, EUR-Lex (règlement machines, NIS 2), ANSSI,
// impots.gouv.fr, vie-publique.sn et ARTCI.
// ============================================================
declare(strict_types=1);

$tarifs = fait('tarifs_depart');

return [
    'titre'   => 'Industrie et PME manufacturières : relier l\'atelier, les stocks, la qualité et les coûts de revient dans des outils que les équipes utilisent, avec une IA qui reste sous contrôle humain',
    'title'   => 'PME industrielles : ERP, qualité et IA | Richard SALANON',
    'meta'    => 'ERP, nomenclatures, ordres de fabrication, qualité, maintenance et IA pour les PME manufacturières d\'Afrique et d\'Europe. Sur devis, réponse en 24 h.',
    'en_bref' => 'Cette page s\'adresse aux PME qui fabriquent ou transforment : plastiques, emballages, matériaux, savonnerie, cosmétique, textile, agroalimentaire transformé. Richard SALANON y déploie Odoo ou Dolibarr pour les nomenclatures, les ordres de fabrication, les stocks, les lots et les coûts de revient, relie vos machines et vos logiciels par API, automatise les tâches répétitives et ajoute de l\'IA là où elle aide sans décider à la place du chef d\'atelier. Le prix se fixe sur devis, une fois le premier échange gratuit passé.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Technique et terrain',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'PME manufacturières et industries de transformation'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des PME manufacturières en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'L\'industrie légère change d\'échelle dans plusieurs pays francophones. Selon une déclaration du ministre rapportée par le <a href="https://www.gouv.bj/article/2663/developpement-gdiz-abdoulaye-tchane-salue-bonne-avancee-zone-donne-assurances/">site du gouvernement béninois</a> le 19 juin 2024, la zone industrielle de Glo-Djigbé comptait alors plus de 12 entreprises en activité et plus de 12 000 emplois directs, avec des unités de textile, de confection et de carreaux. Ces ateliers fabriquent pour l\'export et sont jugés sur leurs délais, leurs rebuts et leurs coûts : le cahier de production et le tableur y atteignent vite leurs limites.',
                'Le premier obstacle est l\'électricité. D\'après l\'indicateur « entreprises subissant des coupures d\'électricité » de la <a href="https://data.worldbank.org/indicator/IC.ELC.OUTG.ZS">Banque mondiale</a>, issu de ses enquêtes auprès des entreprises (Enterprise Surveys), 86,1 % des entreprises béninoises ont subi des coupures en 2024, contre 80,3 % en Côte d\'Ivoire en 2023 et 55,0 % au Sénégal en 2024. Un outil de gestion de production doit donc survivre à une coupure en pleine saisie d\'un ordre de fabrication, et la direction doit pouvoir relire ce qui s\'est passé pendant l\'arrêt.',
                'Le deuxième repère est la qualité. L\'organisme ISO a retiré l\'édition 2015 de la norme ISO 9001, remplacée par l\'<a href="https://www.iso.org/standard/88464.html">ISO 9001:2026</a>, publiée le 16 septembre 2026 ; les organisations certifiées en 2015 doivent passer à la nouvelle version dans le calendrier de leur organisme de certification. Pour l\'agroalimentaire transformé, la <a href="https://www.iso.org/standard/65464.html">norme ISO 22000:2018</a> intègre les principes du HACCP, et l\'ISO indique qu\'elle devrait être remplacée dans les prochains mois. Une entreprise qui veut se faire certifier doit donc prouver sa traçabilité avec des enregistrements, pas avec des souvenirs.',
                'En Europe, la pression vient de la règle. Le <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32023R1230">règlement (UE) 2023/1230</a> s\'applique à partir du 14 janvier 2027 et abroge la directive machines 2006/42/CE à cette date. La directive <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32022L2555">NIS 2</a> range la fabrication, dont les équipements électriques et les machines, ainsi que la production et la transformation industrielles de denrées alimentaires, parmi les secteurs de son annexe II. Une PME qui exporte vers l\'Union a donc intérêt à documenter ses machines, ses données et ses accès avant qu\'un client ne le lui demande.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d\'une usine gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Une fabrication se digitalise par le milieu de la chaîne, là où la matière devient produit. Les signes ci-dessous reviennent dans les ateliers qui produisent du volume avec des recettes ou des gammes stables ; trois d\'entre eux suffisent à justifier un cadrage.',
            'items' => [
                ['titre' => 'La recette tient dans la tête du chef d\'atelier', 'texte' => 'Les dosages de la pâte de savon, le grammage d\'un film plastique ou la quantité de tissu par vêtement ne sont écrits nulle part de façon officielle. Quand il s\'absente ou part, la qualité change, et personne ne sait dire pourquoi.'],
                ['titre' => 'Les ordres de fabrication se donnent à voix haute', 'texte' => 'Le planning se décide au tableau ou par message. On ne sait ni ce qui a été lancé, ni les quantités réellement produites, ni les matières réellement consommées. Le calcul de rendement se fait à la louche en fin de mois.'],
                ['titre' => 'Le stock de matières ne colle plus avec l\'atelier', 'texte' => 'Une rupture de résine, de soude, de carton ou de fil arrête une ligne alors que le cahier annonçait de quoi tenir une semaine. À l\'inverse, des sacs entamés restent oubliés dans un coin du magasin jusqu\'à la péremption.'],
                ['titre' => 'Un lot défectueux ne peut pas être retrouvé', 'texte' => 'Un client signale un problème sur une livraison de savon, de bouteilles ou de rouleaux d\'emballage. Remonter jusqu\'au lot de matière, à la machine et à l\'équipe prend des jours, ou n\'aboutit pas, et tout le stock suspect est écarté par précaution.'],
                ['titre' => 'Les pannes se subissent', 'texte' => 'La maintenance est une réaction : on répare quand la machine s\'arrête. L\'historique des pannes, les pièces de rechange et les heures d\'arrêt ne sont pas consignés, donc personne ne peut dire quelle machine coûte le plus cher.'],
                ['titre' => 'Le coût de revient est une estimation', 'texte' => 'Le prix de vente se fixe sur la base d\'un coût que personne n\'a recalculé depuis la dernière hausse des matières, de l\'énergie ou du transport. Les rebuts, les temps d\'arrêt et le carburant du groupe électrogène ne sont jamais imputés au produit.'],
                ['titre' => 'Les données de production existent mais dorment', 'texte' => 'Compteurs de pièces, températures de fours, relevés de balances ou pesées : tout se note sur papier, puis se ressaisit. Les capteurs et automates qui produisent déjà des données les gardent dans la machine, hors de portée de la direction.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Une activité de réparation à la pièce, sans nomenclature ni série, n\'a pas besoin d\'un module de fabrication. Un atelier dont les produits changent chaque semaine devrait d\'abord stabiliser deux ou trois gammes. Et sans personne pour saisir à l\'atelier, aucun logiciel ne tient.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour une PME manufacturière, du bureau d\'études à l\'expédition ?',
            'legende' => 'Services du site rattachés aux besoins courants d\'un atelier ou d\'une usine ; l\'ordre des chantiers se fixe au cadrage.',
            'entetes' => ['Besoin typique de l\'atelier', 'Service', 'Page du service'],
            'lignes'  => [
                ['Nomenclatures, ordres de fabrication, stocks de matières et de produits finis dans un seul outil', 'Intégration d\'Odoo : Fabrication, Inventaire, Achats, Ventes', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Atelier de taille modeste, budget serré, logiciel léger à héberger soi-même', 'Intégration de Dolibarr : produits, nomenclatures, ordres de fabrication', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Écran de saisie à l\'atelier, prise de poste, déclaration de rebuts adaptés à vos gestes', 'Application web sur mesure reliée à l\'ERP', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Relier une balance, un automate, un logiciel de comptabilité ou le site d\'un client à l\'ERP', 'API REST et intégrations entre logiciels', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Alertes de stock minimal, relances fournisseurs, rapports du matin sans ressaisie', 'Automatisation de tâches avec n8n ou Make', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Lire les fiches de contrôle, résumer les pannes, répondre aux questions sur les procédures', 'IA branchée sur vos documents et vos données', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Choisir entre garder l\'existant, relier ou remplacer, avant de dépenser', 'Audit et étude de projet', '<a href="/services/audit-etude-de-projet">Audit et étude de projet</a>'],
                ['Saisie des relevés de machines et des contrôles sur tablette ou téléphone', 'Application mobile Android et iOS', '<a href="/services/application-mobile-android-ios">Application mobile</a>'],
                ['Montées de version, sauvegardes, correctifs, assistance des utilisateurs', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Commandes des distributeurs et clients industriels reçues par WhatsApp ou par e-mail', 'Intégration WhatsApp et commandes reliées à l\'ERP', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que contiennent les modules de fabrication d\'Odoo, et que faut-il vérifier avant de s\'engager ?',
            'legende' => 'Applications relevées dans la documentation Odoo 20.0 (supply chain) et dans le dépôt public d\'Odoo, branche 20.0, le 07/10/2026. Les éditions viennent de la page de comparaison Community et Enterprise d\'Odoo, relevée à la même date ; elle se relit au moment du devis.',
            'entetes' => ['Application ou fonction', 'Ce que dit la documentation', 'Point à vérifier'],
            'lignes'  => [
                ['Fabrication (MRP)', 'Planifier et traiter les ordres de fabrication ; nomenclatures à plusieurs niveaux, kits, coproduits, rebuts, reliquats, démontage, lots et numéros de série', 'La page des éditions d\'Odoo coche Fabrication (MRP) en Community et en Enterprise ; le dossier mrp figure aussi dans le dépôt public'],
                ['Atelier et postes de travail', 'Panneau de contrôle des postes pour piloter les opérations sur tablette ; suivi du temps ; planification', 'La page des éditions d\'Odoo réserve « Atelier, Panneau de contrôle, Planification » à Enterprise ; le dossier mrp_workorder est absent du dépôt public'],
                ['Planning directeur et TRS', 'Plan de production directeur, production continue, rapport de taux de rendement synthétique (OEE)', 'Utile après trois mois de saisies fiables ; sans elles, le rapport mesure du bruit'],
                ['Sous-traitance', 'Sous-traitance simple, réapprovisionnement du sous-traitant, livraison directe à celui-ci', 'Cas du fil, du tissu ou du plastique envoyé à façonner'],
                ['Maintenance', 'Fiches d\'équipements, calendrier de maintenance, demandes d\'intervention', 'La page des éditions d\'Odoo coche Maintenance en Community et en Enterprise ; le dossier maintenance figure dans le dépôt public'],
                ['Qualité', 'Points de contrôle, contrôles par consigne, par pass ou fail, par mesure ou par photo, alertes qualité', 'La page des éditions d\'Odoo réserve Qualité à Enterprise ; le dossier quality_control est absent du dépôt public'],
                ['IoT Box (MES)', 'Boîtiers pour relier des appareils de l\'atelier', 'Internet des Objets : Enterprise seulement sur la page des éditions d\'Odoo ; à évaluer selon la taille de l\'atelier et le matériel déjà en place'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Garder votre logiciel actuel, passer à Odoo, choisir Dolibarr ou construire sur mesure : comment trancher ?',
            'options'  => ['Garder et relier l\'existant', 'Odoo', 'Dolibarr', 'Application sur mesure'],
            'criteres' => [
                ['critere' => 'Fabrication native', 'valeurs' => ['Selon le logiciel actuel ; souvent limitée à la comptabilité ou au stock', 'Fabrication, atelier, qualité, maintenance et planning dans un même outil, selon l\'édition', 'Modules BOM et Ordres de fabrication ; le second exige le premier', 'Ce que vous décrivez, ni plus ni moins']],
                ['critere' => 'Profondeur pour une usine', 'valeurs' => ['Limitée, reliée par des exports', 'Élevée : multi-niveaux, lots, sous-traitance, TRS', 'Suffisante pour des gammes simples ; profondeur à vérifier sur la version installée', 'Totale si le besoin est unique, au prix d\'un développement']],
                ['critere' => 'Effort de reprise des données', 'valeurs' => ['Faible, car rien ne bouge', 'Fort : articles, nomenclatures, stocks, fournisseurs à assainir', 'Moyen à fort', 'Fort : tout est à décrire']],
                ['critere' => 'Hébergement et coupures', 'valeurs' => ['Déjà en place', 'En ligne ou sur serveur propre ; serveur sur onduleur si les coupures sont longues', 'Serveur propre ou hébergeur, léger en ressources', 'Au choix, avec une saisie conçue pour le hors connexion']],
                ['critere' => 'Profil typique', 'valeurs' => ['Un outil récent et apprécié, un seul manque précis', 'Plusieurs ateliers, qualité exigée, croissance prévue', 'Petite structure, gammes simples, équipe technique modeste', 'Procédé rare, ou besoin que ni Odoo ni Dolibarr ne couvrent']],
            ],
            'verdict'  => 'Aucun logiciel ne répond à la place du diagnostic. Quand un outil récent tient déjà le stock et la facturation, relier sa saisie à l\'atelier par API coûte souvent moins que tout refaire. Quand la fabrication, la qualité et la comptabilité se contredisent, un ERP unique devient rentable. Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille l\'arbitrage entre les deux ; la page wiki du module Ordres de fabrication de Dolibarr date de 2021 : vérifiez ses fonctions sur la version qui sera installée.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans une usine, et que ne doit-elle jamais décider ?',
            'intro' => 'L\'IA sert à lire, résumer, comparer et prévenir ; elle ne remplace ni le chef d\'atelier, ni le responsable qualité, ni le responsable maintenance. Les usages ci-dessous sont des pistes à évaluer sur vos données, pas des promesses de résultat.',
            'items' => [
                ['titre' => 'Lire les fiches de contrôle et les non-conformités', 'texte' => 'Un assistant relié à vos documents résume les écarts de la semaine, regroupe les défauts par ligne et par équipe, et prépare la revue qualité. Le responsable qualité garde la décision de libérer, retenir ou rebuter un lot.'],
                ['titre' => 'Résumer l\'historique des pannes', 'texte' => 'À partir des demandes d\'intervention de l\'application Maintenance, l\'IA fait ressortir les machines qui reviennent, les pièces les plus souvent changées et les heures d\'arrêt. Elle propose un calendrier préventif que le responsable maintenance valide ou corrige.'],
                ['titre' => 'Répondre aux questions sur les procédures', 'texte' => 'Gammes de fabrication, consignes de nettoyage, fiches de données de sécurité : un opérateur interroge la procédure en langage courant. La réponse cite le document source, et la version papier officielle reste la référence en cas de doute.'],
                ['titre' => 'Prévoir les besoins en matières', 'texte' => 'En croisant commandes, rendements réels et délais des fournisseurs, un modèle propose des quantités à commander. L\'acheteur tranche, car une prévision se trompe dès qu\'un transporteur ou un port se bloque.'],
                ['titre' => 'Repérer des dérives dans les données de production', 'texte' => 'Température, pression, poids, cadence : un écart inhabituel déclenche une alerte à l\'équipe. Pour un atelier qui n\'a pas de capteurs, commencer par la saisie fiable des relevés vaut mieux que d\'acheter du matériel.'],
                ['titre' => 'Ce que l\'IA ne doit jamais faire', 'texte' => 'Déclarer un produit alimentaire conforme, lever une alarme de sécurité d\'une machine, modifier un paramètre de ligne sans validation humaine ou envoyer des recettes confidentielles à un service externe non maîtrisé. La recette est un secret de fabrication, à traiter comme tel.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que risque-t-on en laissant une IA ou un logiciel décider d\'une sécurité de machine ?',
            'texte' => 'Une alarme, un arrêt d\'urgence ou une limite de sécurité relèvent de la machine et de son fabricant, pas d\'un assistant ou d\'un tableau de bord. Le règlement européen sur les machines impose d\'ailleurs, à son annexe III, des exigences de protection contre la corruption et de sécurité et de fiabilité des systèmes de commande. Les outils décrits ici lisent des données et proposent ; l\'arrêt, le réglage et la libération d\'un lot restent des actes humains, signés par la personne responsable.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales et quels paiements encadrent un projet de digitalisation industrielle ?',
            'paragraphes' => [
                'La facturation d\'abord. Au Bénin, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a>, publiée le 27 février 2020, indique que la réforme concerne les assujettis à la TVA et que la date butoir était fixée au 29 février 2020. Elle prévoit une amende égale à dix fois le montant de la facture, d\'au moins 1 000 000 FCFA par opération. Une usine béninoise assujettie qui facture depuis Odoo ou Dolibarr doit donc s\'assurer que le logiciel produit des factures normalisées, par un module validé ou une passerelle, avant le premier envoi.',
                'En France, selon <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a>, la réception de factures électroniques est exigée de toute entreprise depuis le 1er septembre 2026, tandis que l\'émission deviendra obligatoire pour les PME et micro-entreprises le 1er septembre 2027. Un atelier qui vend à des industriels français choisit donc son ERP avec cette échéance à l\'esprit, et vérifie les formats que ses clients acceptent.',
                'Les données personnelles concernent les salariés, les pointages et les caméras d\'atelier, plus rarement les clients. Au Bénin, l\'article 391 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> encadre l\'envoi des fichiers d\'une usine vers l\'étranger par deux conditions cumulatives : l\'Autorité doit constater que l\'État de destination assure une protection équivalente, et le responsable du traitement doit obtenir son autorisation préalable avant que le transfert ne soit effectif. Héberger l\'ERP et les dossiers du personnel hors du pays suppose donc cette démarche.',
                'Les autres pays suivent leur propre loi. Le Sénégal applique la <a href="https://www.vie-publique.sn/documents/438/loi-protection-donnees-a-caractere-personnel">loi n° 2008-12 du 25 janvier 2008</a>, et la Côte d\'Ivoire la <a href="https://www.artci.ci/wp-content/uploads/2024/05/loi_2013_450.pdf">loi n° 2013-450 du 19 juin 2013</a>, contrôlée par l\'ARTCI, son autorité de protection : le lieu d\'hébergement des fichiers du personnel se confirme auprès de chaque autorité avant le lancement. En Europe, le RGPD prévoit, selon la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5">CNIL</a>, un transfert hors de l\'Union soit par décision d\'adéquation, soit avec des garanties appropriées comme des clauses types.',
                'Le cadre du secteur lui-même relève de l\'État et des organismes de normalisation. Au Bénin, l\'Agence nationale de normalisation, de métrologie et du contrôle de la qualité (ANM), placée sous la tutelle du ministère de l\'Industrie, met en œuvre la politique nationale de normalisation, de métrologie et de certification, d\'après sa <a href="https://www.iso.org/member/308845.html">fiche d\'organisme membre de l\'ISO</a>. L\'ISO elle-même ne certifie pas : le certificat ISO 9001 ou ISO 22000 est délivré par un organisme de certification accrédité, au terme d\'un audit.',
                'Reste la cybersécurité. Le guide <a href="https://messervices.cyber.gouv.fr/documents-guides/Guide_Systemes_industriels__Mesures_detaillees_v2.pdf">La cybersécurité des systèmes industriels : mesures détaillées</a> de l\'ANSSI (ANSSI-PA-108, version 2.0 du 27 novembre 2025) s\'adresse aux développeurs, administrateurs, RSSI, DSI et utilisateurs, et précise que ses recommandations n\'ont pas de caractère normatif. Il sert de référence pour séparer le réseau de bureau de celui de l\'atelier, gérer les accès et les sauvegardes. L\'<a href="/histoires/maersk-notpetya">histoire de Maersk et de NotPetya</a> montre ce que coûte un arrêt informatique à une chaîne d\'opérations.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet de digitalisation dans une fabrique, selon le pays et la filière ?',
            'items' => [
                ['secteur' => 'Plastiques et emballages, Bénin', 'probleme' => 'Une ligne d\'extrusion consomme plusieurs résines selon les commandes, et la direction ignore le rendement réel par commande ; les arrêts de ligne ne sont pas notés.', 'solution' => 'Nomenclatures par produit avec pertes réalistes, ordres de fabrication qui consomment les matières, déclaration des rebuts et des arrêts par l\'équipe. Après quelques mois de saisies, le rapport de rendement (TRS) devient lisible. La saisie à l\'atelier est testée en coupure d\'électricité avant le démarrage.'],
                ['secteur' => 'Savonnerie et cosmétique, Côte d\'Ivoire', 'probleme' => 'Les huiles, la soude et les parfums arrivent par petits lots, et un retour de produit ne peut pas être rattaché à la cuve concernée.', 'solution' => 'Réception avec numéro de lot de matière, ordre de fabrication qui enregistre le lot de produit fini, rattachement du lot à la facture et au distributeur. Une procédure de rappel de lot est répétée à blanc, et la durée de conservation est suivie par date.'],
                ['secteur' => 'Transformation de fruits et jus, Sénégal', 'probleme' => 'La production varie selon la saison et les arrivages, et les emballages manquent à la mise en bouteille ; les relevés de températures se perdent.', 'solution' => 'Plan de production par semaine selon les matières disponibles, alertes de stock d\'emballages, saisie des relevés par tablette avec archivage. Un dossier de traçabilité se prépare ainsi en vue d\'une certification ISO 22000, à confirmer avec l\'organisme choisi.'],
                ['secteur' => 'Matériaux de construction, Cameroun', 'probleme' => 'Le ciment, le sable et les granulats entrent et sortent sans pesée enregistrée ; les prix de vente suivent le marché sans lien avec le coût de revient.', 'solution' => 'Peseuse reliée à l\'ERP par API pour saisir les entrées et les sorties, nomenclatures par type de produit, coût de revient recalculé chaque mois avec la comptabilité. L\'énergie et le gasoil du groupe électrogène sont imputés aux produits.'],
                ['secteur' => 'Textile et confection, France', 'probleme' => 'Une PME de confection sous-traite une partie de la coupe, suit ses lots dans un tableur et doit préparer la facturation électronique de 2027.', 'solution' => 'Sous-traitance suivie dans l\'ERP, bons de travail avec ressources fournies au façonnier, facturation reliée au circuit électronique et cartographie des accès pour répondre aux questionnaires de sécurité des donneurs d\'ordre.'],
                ['secteur' => 'Mécanique de précision, Belgique', 'probleme' => 'Les demandes d\'intervention sur les machines passent par des messages ; le bureau de qualité reprend à la main les rapports d\'inspection.', 'solution' => 'Fiches machines et calendrier préventif, contrôles de première pièce saisis sur tablette, rapports d\'inspection générés sans ressaisie, assistant IA qui résume les non-conformités de la semaine pour la revue qualité.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet de digitalisation dans une fabrique, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous exposez votre production : produits, nombre de lignes, effectif de l\'atelier, outils en place et poste de dépense le plus lourd. Cet échange gratuit, à Cotonou ou en visioconférence, dit franchement si un ERP, une simple application ou un tableur mieux tenu suffit.'],
                ['titre' => 'Diagnostic sur une commande réelle', 'duree' => 'Selon le projet', 'texte' => 'Méthode proposée : on suit une commande de la demande du client jusqu\'à la livraison, en passant par l\'achat des matières, l\'ordre de fabrication, le contrôle, l\'emballage et la facture. Le diagnostic produit la carte des flux, les écarts constatés et les gammes à traiter en premier.'],
                ['titre' => 'Assainir les données de base', 'duree' => 'Selon le projet', 'texte' => 'Articles, unités, nomenclatures, pertes habituelles, fournisseurs et stocks d\'ouverture sont relevés avec les chefs d\'équipe, puis relus par la comptabilité. C\'est l\'étape la plus longue et la plus décisive : un ERP rempli de données approximatives donne des coûts faux.'],
                ['titre' => 'Premier palier en base d\'essai', 'duree' => 'Selon le projet', 'texte' => 'Une gamme de produits est paramétrée de bout en bout : achat, réception, fabrication, contrôle, stock, vente. Les équipes jouent leurs vraies situations, y compris un rebut et une coupure d\'électricité pendant la saisie.'],
                ['titre' => 'Bascule et formation à l\'atelier', 'duree' => 'Selon le projet', 'texte' => 'La bascule se cale hors d\'une période de pointe. Chaque poste est formé sur ses écrans : magasinier, opérateur, chef de ligne, responsable qualité, comptable. Un référent interne est désigné, et un guide court par poste reste sur place.'],
                ['titre' => 'Raccordements et automatisations', 'duree' => 'Selon le projet', 'texte' => 'Balance, automate, logiciel de comptabilité, boutique en ligne ou WhatsApp des distributeurs sont reliés à l\'ERP par API ou par n8n. Chaque connexion est documentée, avec des clés dédiées et une procédure de reprise si elle tombe.'],
                ['titre' => 'IA sur un cas précis', 'duree' => 'Selon le projet', 'texte' => 'Une fois les données fiables, un usage d\'IA est testé sur un cas limité (résumé des non-conformités, questions sur les procédures), avec relecture humaine systématique et mesure de l\'utilité réelle avant d\'étendre.'],
                ['titre' => 'Suivi et montées de version', 'duree' => 'Selon le contrat', 'texte' => 'Les premières semaines sont contrôlées de près : stock, rendement, coûts. La <a href="/services/maintenance-support">maintenance</a> couvre ensuite les correctifs, les sauvegardes, l\'assistance et la préparation de chaque version.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet de digitalisation pour une PME industrielle, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Un projet d\'atelier se chiffre sur devis, après le diagnostic. Les seuls tarifs de départ affichés sur ce site concernent la vitrine de l\'entreprise et sa visibilité, utiles pour présenter catalogue, certifications et capacités de production : ' . $tarifs['Landing page'] . ' (environ 229 €) pour une landing page, ' . $tarifs['Site vitrine'] . ' (environ 457 €) pour un site vitrine et ' . $tarifs['Référencement naturel'] . ' (environ 114 €) pour le référencement naturel, à 655,957 FCFA pour 1 €. Les licences éventuelles d\'un éditeur se paient à part. La prestation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Diagnostic et cadrage', 'prix' => 'Sur devis', 'inclus' => ['Suivi d\'une commande réelle de bout en bout', 'Comparaison honnête : garder, relier, remplacer', 'Liste des données à assainir', 'Plan par paliers et calendrier']],
                ['offre' => 'Premier palier de fabrication', 'prix' => 'Sur devis', 'inclus' => ['Paramétrage d\'Odoo ou de Dolibarr pour une gamme', 'Nomenclatures, ordres de fabrication, stocks, lots', 'Reprise des données d\'ouverture', 'Formation par poste']],
                ['offre' => 'Raccordements, applications et automatisations', 'prix' => 'Sur devis', 'inclus' => ['API vers balances, comptabilité, boutique, WhatsApp', 'Écran de saisie sur mesure à l\'atelier', 'Alertes et rapports n8n ou Make', 'Documentation des connexions']],
                ['offre' => 'IA et maintenance continue', 'prix' => 'Sur devis', 'inclus' => ['Usage d\'IA limité à un cas validé', 'Assistance des utilisateurs', 'Montées de version et correctifs', 'Mises à jour de la documentation']],
            ],
            'variations' => [
                'Le nombre de gammes, de lignes et d\'ateliers à décrire, et la profondeur des nomenclatures.',
                'Le choix entre Odoo, Dolibarr, un outil existant relié ou une application sur mesure.',
                'L\'état des données de départ : fiches d\'articles propres ou années de cahiers à ressaisir.',
                'Le suivi des lots, la traçabilité attendue par un client ou une certification, et la qualité à saisir.',
                'Les raccordements : balances, automates, comptabilité, facturation normalisée, WhatsApp.',
                'L\'hébergement et la résistance aux coupures : serveur sur site, onduleur, sauvegardes hors site.',
                'Le nombre de postes à former et les déplacements à l\'atelier, au Bénin.',
                'Les modules ou écrans à développer, puis à entretenir à chaque nouvelle version.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font dérailler la digitalisation d\'une usine ?',
            'intro' => 'Ces erreurs reviennent d\'un atelier à l\'autre. Presque toutes se décident avant l\'installation du moindre logiciel.',
            'items' => [
                ['titre' => 'Saisir des nomenclatures parfaites sur le papier', 'texte' => 'Une recette théorique sans les pertes réelles produit un coût de revient trop optimiste. Les rendements se relèvent à l\'atelier, sur quelques semaines, avant d\'être figés dans l\'ERP.'],
                ['titre' => 'Oublier la coupure d\'électricité', 'texte' => 'Une saisie à l\'écran qui se perd quand le courant saute pousse l\'équipe à revenir au cahier. L\'essai de coupure, l\'onduleur du poste et le serveur protégé font partie du cahier des charges.'],
                ['titre' => 'Brancher des capteurs avant de savoir quoi mesurer', 'texte' => 'Des boîtiers coûteux qui collectent des données que personne ne lit sont un achat de plus. Commencer par les trois indicateurs que la direction regardera vraiment chaque semaine.'],
                ['titre' => 'Mélanger le réseau de bureau et celui des machines', 'texte' => 'Un automate branché sur le même réseau que les ordinateurs de la comptabilité et d\'Internet expose la ligne de production à la moindre infection. Le guide de l\'ANSSI recommande de maîtriser les interfaces de connexion et la cartographie.'],
                ['titre' => 'Livrer l\'ERP sans former les opérateurs', 'texte' => 'Si les opérateurs ne déclarent pas la production, les stocks sont faux dès la première semaine. Le chef d\'équipe doit y voir un gain de temps, pas une surveillance.'],
                ['titre' => 'Confier ses recettes à n\'importe quel outil d\'IA', 'texte' => 'Une recette, un dosage ou une gamme sont un secret de fabrication. Avant d\'utiliser un service externe, on précise ce qui sort de l\'entreprise, où c\'est stocké et si le fournisseur s\'en sert pour s\'entraîner.'],
                ['titre' => 'Attendre la certification pour commencer à tracer', 'texte' => 'Un organisme de certification demande des enregistrements couvrant une période. Un atelier qui commence à noter ses lots le mois de l\'audit n\'a rien à lui montrer.'],
                ['titre' => 'Acheter un ERP complet pour une seule ligne', 'texte' => 'Une petite unité de transformation avec trois produits et quatre salariés peut commencer par le stock, les achats et la facturation, et ouvrir la fabrication ensuite. Le diagnostic doit dire ce qui suffit.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes de l\'industrie aux outils et à l\'IA ?',
            'paragraphes' => [
                'La formation est une section de ce projet, pas son cœur : un outil ne tient que si ceux qui le saisissent savent pourquoi. Pour le public de l\'industrie (chefs d\'atelier, responsables maintenance, qualité et magasin), Richard peut former des équipes de l\'industrie à l\'IA et aux outils de gestion, à partir de vos vrais articles, de vos vraies nomenclatures et de vos propres fiches de contrôle. Le contenu, le parcours et les modalités sont détaillés sur la page <a href="/formations/metier/industrie">formation des équipes de l\'industrie</a>.',
                'Selon le poste, plusieurs fiches de formation s\'appliquent. Les magasiniers, planificateurs et acheteurs suivent <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> ou <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>, selon le logiciel retenu. Les responsables de production explorent <a href="/formations/ia-processus-metier">l\'IA dans les processus métier</a> pour décider quelles étapes confier à l\'IA et lesquelles garder humaines, tandis que les équipes qui utilisent Odoo avec l\'IA consultent <a href="/formations/odoo-ia">Odoo et IA</a>.',
                'Enfin, les réflexes de sécurité des opérateurs et du bureau sont l\'objet de la fiche <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a> : mots de passe, hameçonnage, appareils personnels sur le réseau de l\'atelier. Une équipe qui connaît ces règles protège la ligne mieux qu\'un pare-feu laissé à l\'abandon.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre fabrique à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de ' . fait('experience_ans') . ' ans d\'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, il déploie Odoo et Dolibarr, et peut donc dire lequel convient à votre atelier, ou s\'il vaut mieux garder votre outil actuel et le relier. Son métier de développeur lui permet aussi d\'écrire l\'écran de saisie, le connecteur de balance ou le module qui manque, au lieu de contourner la limite d\'un logiciel.',
                'Il édite aussi <a href="https://wapy.pro">Wapy</a>, son assistant WhatsApp doté d\'IA, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Pour une fabrique, ce savoir-faire sert à faire entrer les commandes de vos distributeurs, passées par WhatsApp, dans la planification de l\'atelier sans que personne les retape.',
                'Sa méthode proposée tient en quatre engagements contrôlables : partir d\'une commande réelle de votre atelier, stabiliser une gamme avant de passer à la suivante, documenter chaque connexion, et répondre à vos messages sous 24 heures. Il intervient à distance, et sur place au Bénin. Son parcours figure sur <a href="/richard-salanon">sa page personnelle</a> et ses projets sur la page <a href="/realisations/">réalisations</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer dans votre atelier ?',
            'texte'  => 'Décrivez ce que vous fabriquez, vos lignes, vos outils actuels et vos contraintes (coupures, normes, clients exportateurs). Une réponse vous parvient sous 24 heures ; après un premier échange gratuit, vous recevez un devis découpé par gammes et par étapes.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon atelier'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien de temps faut-il pour mettre la fabrication en service dans Odoo ou Dolibarr ?', 'r' => 'La durée dépend du nombre de gammes, de la qualité des données de départ et de la disponibilité des équipes à l\'atelier : elle est fixée selon le projet, après le diagnostic, palier par palier. Le plus long est presque toujours l\'assainissement des articles et des nomenclatures, pas le paramétrage du logiciel.'],
        ['q' => 'Combien coûte un projet de digitalisation pour une PME manufacturière ?', 'r' => 'Le prix est fixé sur devis, après un premier échange gratuit et le diagnostic. Il dépend du nombre de gammes, des raccordements (balances, comptabilité, WhatsApp), de la traçabilité exigée et de l\'hébergement. Les seuls tarifs de départ affichés concernent la landing page, le site vitrine et le référencement naturel de l\'entreprise.'],
        ['q' => 'Odoo ou Dolibarr pour une petite unité de fabrication ?', 'r' => 'Odoo offre plus de profondeur : nomenclatures à plusieurs niveaux, sous-traitance, lots et numéros de série, rapport de rendement. Dolibarr propose des modules de nomenclatures et d\'ordres de fabrication dans sa distribution, plus légers à héberger ; ses fonctions se vérifient sur la version installée, car la page de son wiki date de 2021. Le comparatif Odoo ou Dolibarr détaille le choix.'],
        ['q' => 'Odoo Community suffit-il pour gérer une usine ?', 'r' => 'Pour des nomenclatures, des ordres de fabrication, un stock et un suivi de maintenance, souvent oui : les dossiers mrp et maintenance figurent dans le dépôt public d\'Odoo. En revanche, la page des éditions d\'Odoo réserve à Enterprise l\'atelier avec son panneau de contrôle et la planification, ainsi que la Qualité : à relire au moment du devis.'],
        ['q' => 'Peut-on retrouver un lot défectueux et organiser un rappel de produit ?', 'r' => 'Oui, si les lots sont saisis à chaque étape : réception des matières, ordre de fabrication, livraison. La documentation d\'Odoo décrit la fabrication avec lots et numéros de série. Ce qui compte est la discipline de saisie à l\'atelier, que l\'on teste par un rappel à blanc avant d\'en avoir besoin pour de vrai.'],
        ['q' => 'Que se passe-t-il pour la saisie pendant une coupure d\'électricité ?', 'r' => 'Cela se prévoit au cadrage : onduleur au poste de saisie, serveur protégé si l\'ERP est hébergé sur site, sauvegardes chiffrées envoyées hors du site. Selon la Banque mondiale, 86,1 % des entreprises béninoises ont subi des coupures en 2024 : un outil qui ne tolère pas cette réalité sera abandonné au profit du cahier.'],
        ['q' => 'Un logiciel peut-il me faire obtenir la certification ISO 9001 ou ISO 22000 ?', 'r' => 'Non. Un logiciel conserve les enregistrements de production, de contrôle et de traçabilité dont un organisme de certification a besoin, mais la certification se délivre après un audit, par un organisme accrédité. L\'ISO elle-même ne certifie pas. Le travail d\'un prestataire est de préparer ces enregistrements, pas de se substituer à l\'auditeur.'],
        ['q' => 'Peut-on relier une balance, un automate ou des capteurs à l\'ERP ?', 'r' => 'Souvent oui, par API ou par un boîtier de passerelle, selon le matériel : une balance qui sort un poids par un port série ou un réseau se relie plus facilement qu\'un automate ancien. L\'intérêt se juge selon la taille de l\'atelier et l\'usage prévu des données, avant tout achat de matériel.'],
        ['q' => 'Mes recettes et mes gammes sont-elles protégées si j\'utilise l\'IA ?', 'r' => 'Elles le sont si le projet le prévoit. On décide, avant le premier test, ce qui peut quitter l\'entreprise, ce qui doit rester sur vos serveurs, le fournisseur d\'IA retenu et ses conditions. Une recette confidentielle n\'est jamais envoyée à un service que l\'on ne maîtrise pas.'],
        ['q' => 'Puis-je héberger l\'ERP et les dossiers du personnel hors du Bénin ?', 'r' => 'Cela suppose une démarche. Selon l\'article 391 de la loi n° 2017-20, deux conditions s\'additionnent : l\'équivalence du niveau de protection doit être constatée par l\'Autorité, et son autorisation préalable doit être obtenue avant tout transfert effectif. Les autres pays ont leur propre loi, à confirmer auprès de chaque autorité.'],
        ['q' => 'Mon ERP produira-t-il des factures normalisées au Bénin ?', 'r' => 'Seulement s\'il est paramétré pour cela. La page du gouvernement béninois indique que la réforme concerne les assujettis à la TVA et prévoit une amende égale à dix fois le montant de la facture, d\'au moins 1 000 000 FCFA par opération. On vérifie le module ou la passerelle de facturation normalisée avant le premier envoi.'],
        ['q' => 'Intervenez-vous hors du Bénin et sur place ?', 'r' => 'Oui. Au Bénin, le diagnostic et la formation peuvent se tenir dans votre atelier ; ailleurs, ils passent par la visioconférence, et le paramétrage se fait à distance. Les modes de paiement sont les mêmes partout : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, au choix de l\'atelier.'],
    ],

    'sources' => [
        ['titre' => 'ISO, ISO 9001:2026, systèmes de management de la qualité : exigences (publiée le 16 septembre 2026)', 'url' => 'https://www.iso.org/standard/88464.html', 'date' => '2026-10-07'],
        ['titre' => 'ISO, ISO 9001:2015 retirée et remplacée par l\'ISO 9001:2026', 'url' => 'https://www.iso.org/standard/62085.html', 'date' => '2026-10-07'],
        ['titre' => 'ISO, ISO 22000:2018, systèmes de management de la sécurité des denrées alimentaires', 'url' => 'https://www.iso.org/standard/65464.html', 'date' => '2026-10-07'],
        ['titre' => 'ISO, fiche de l\'organisme membre du Bénin (ANM)', 'url' => 'https://www.iso.org/member/308845.html', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, Fabrication', 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/manufacturing.html', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, Maintenance', 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/maintenance.html', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, Qualité', 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/quality.html', 'date' => '2026-10-07'],
        ['titre' => 'Odoo, comparaison des éditions Community et Enterprise', 'url' => 'https://www.odoo.com/fr_FR/page/editions', 'date' => '2026-10-07'],
        ['titre' => 'Dépôt public d\'Odoo, branche 20.0, dossier des applications (mrp, maintenance)', 'url' => 'https://github.com/odoo/odoo/tree/20.0/addons/maintenance', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, module Ordres de fabrication', 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Manufacturing_Orders', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, module BOM (nomenclatures)', 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_BOM', 'date' => '2026-10-07'],
        ['titre' => 'Banque mondiale, entreprises subissant des coupures d\'électricité (enquêtes auprès des entreprises)', 'url' => 'https://data.worldbank.org/indicator/IC.ELC.OUTG.ZS', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, développement de la zone industrielle de Glo-Djigbé (juin 2024)', 'url' => 'https://www.gouv.bj/article/2663/developpement-gdiz-abdoulaye-tchane-salue-bonne-avancee-zone-donne-assurances/', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Vie publique Sénégal, loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel', 'url' => 'https://www.vie-publique.sn/documents/438/loi-protection-donnees-a-caractere-personnel', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel', 'url' => 'https://www.artci.ci/wp-content/uploads/2024/05/loi_2013_450.pdf', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre V (articles 45 et 46, transferts hors de l\'Union)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (UE) 2023/1230 sur les machines (abrogation de la directive 2006/42/CE et application au 14 janvier 2027, annexe III)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32023R1230', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, directive (UE) 2022/2555 dite NIS 2 (annexe II, secteurs critiques)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32022L2555', 'date' => '2026-10-07'],
        ['titre' => 'ANSSI, La cybersécurité des systèmes industriels : mesures détaillées (ANSSI-PA-108, version 2.0, 27/11/2025)', 'url' => 'https://messervices.cyber.gouv.fr/documents-guides/Guide_Systemes_industriels__Mesures_detaillees_v2.pdf', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'     => ['integration-odoo', 'integration-dolibarr', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'integration-ia-entreprise', 'audit-etude-de-projet', 'maintenance-support'],
        'metiers'      => ['industrie'],
        'formations'   => ['odoo-utilisateurs', 'dolibarr-utilisateurs', 'ia-processus-metier', 'odoo-ia', 'cybersecurite-employes'],
        'comparatifs'  => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'histoires'    => ['maersk-notpetya'],
    ],
];
